CREATE DATABASE IF NOT EXISTS btl_ltw_database;
USE btl_ltw_database;
CREATE TABLE IF NOT EXISTS `User`
(
	`email` varchar(255) NOT NULL,
	`encoded_password` varchar(255) NOT NULL,
    `fullname` varchar(255) NOT NULL,
    `role` varchar(10) NOT NULL, -- admin, customer
    `phone` varchar(10), -- vietnam phone
	PRIMARY KEY (`email`)
);

 CREATE TABLE IF NOT EXISTS `Credit_Card`
 (
	`card_number` varchar(16) NOT NULL,
    `CVV` varchar(4) NOT NULL,
    `exp_date` date NOT NULL,
    `fullname` varchar(255) NOT NULL,
    `is_default` bool DEFAULT FALSE NOT NULL,
    `customer_email` varchar(255) NOT NULL,
    PRIMARY KEY(`card_number`),
    FOREIGN KEY (`customer_email`) REFERENCES `User`(`email`) ON UPDATE CASCADE ON DELETE RESTRICT
 );
 
 CREATE TABLE IF NOT EXISTS `Shipping_Address`
 (
	`customer_email` varchar(255) NOT NULL,
    `AID` int NOT NULL,
    `reciever_name` varchar(255) NOT NULL,
    `reciever_phone` varchar(10) NOT NULL,
    `city_district_town` varchar(255) NOT NULL,
    `additional_address_info` varchar(255) NOT NULL,
    `is_default` bool DEFAULT FALSE NOT NULL,
    PRIMARY KEY (`customer_email`,`AID`),
    FOREIGN KEY (`customer_email`) REFERENCES `User`(`email`) ON UPDATE CASCADE ON DELETE RESTRICT
 );

CREATE TABLE IF NOT EXISTS `Bill`
(
	`BID` int NOT NULL,
	`created_at` datetime NOT NULL,
	`total_price` decimal(10,0) DEFAULT 0 NOT NULL,
	`shipping_fee` decimal(10,0) DEFAULT 0 NOT NULL,
    `credit_card_number` varchar(16) NOT NULL,
    `customer_email` varchar(255) NOT NULL,
	`AID` int NOT NULL,
    PRIMARY KEY(`BID`),
    FOREIGN KEY (`credit_card_number`) REFERENCES `Credit_Card`(`card_number`) ON UPDATE CASCADE ON DELETE RESTRICT,
	FOREIGN KEY (`customer_email`,`AID`) REFERENCES `Shipping_Address`(`customer_email`,`AID`) ON UPDATE CASCADE ON DELETE RESTRICT
);

 CREATE TABLE IF NOT EXISTS `Product`
 (
	`PID` int NOT NULL,
    `name` varchar(255) NOT NULL,
    `listed_unit_price` decimal(10,0) NOT NULL,
    `description` varchar(5000) NOT NULL,
    `size` varchar(255) NOT NULL,
    `quantity_on_hand` int NOT NULL,
    `discount` decimal(10,0) NOT NULL,
    `no_of_reviews` int DEFAULT 0,
    `average_rating` decimal (2, 1) DEFAULT 0,
    PRIMARY KEY(`PID`)
 );
 
 CREATE TABLE IF NOT EXISTS `Review`
 (
	`PID` int NOT NULL,
    `customer_email` varchar(255) NOT NULL,
    `RID` int NOT NULL,
    `star` int NOT NULL,
    `content` varchar(255) NOT NULL,
    PRIMARY KEY(`PID`,`customer_email`,`RID`),
    FOREIGN KEY (`customer_email`) REFERENCES `User`(`email`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`PID`) REFERENCES `Product`(`PID`) ON UPDATE CASCADE ON DELETE RESTRICT
 );
 
 CREATE TABLE IF NOT EXISTS `Bill_have_Product`
 (
	`BID` int NOT NULL,
    `PID` int NOT NULL,
    `quantity` int NOT NULL,
    PRIMARY KEY(`BID`,`PID`),
    FOREIGN KEY (`BID`) REFERENCES `Bill`(`BID`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`PID`) REFERENCES `Product`(`PID`) ON UPDATE CASCADE ON DELETE RESTRICT
 );
 
 CREATE TABLE IF NOT EXISTS `Product_similar_to_Product`
 (
	`PID` int NOT NULL,
    `similar_PID` int NOT NULL,
    PRIMARY KEY (`PID`,`similar_PID`),
    FOREIGN KEY (`PID`) REFERENCES `Product` (`PID`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`similar_PID`) REFERENCES `Product` (`PID`) ON UPDATE CASCADE ON DELETE RESTRICT
 );
  
  CREATE TABLE IF NOT EXISTS `Customer_add_to_favourite_Product`
 (
	`customer_email` varchar(255) NOT NULL,
    `PID` int NOT NULL,
    PRIMARY KEY (`customer_email`,`PID`),
    FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`customer_email`) REFERENCES `User`(`email`) ON UPDATE CASCADE ON DELETE RESTRICT
 );
 
 CREATE TABLE IF NOT EXISTS `Customer_add_to_cart_Product`
 (
	`customer_email` varchar(255) NOT NULL,
    `PID` int NOT NULL,
    `quantity` int NOT NULL,
    PRIMARY KEY (`customer_email`,`PID`),
    FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE ON DELETE RESTRICT,
    FOREIGN KEY (`customer_email`) REFERENCES `User`(`email`) ON UPDATE CASCADE ON DELETE RESTRICT
 );
 
 CREATE TABLE IF NOT EXISTS `Product_image_src`
 (
	`PID` int NOT NULL,
    `image_src` varchar(255) NOT NULL,
    PRIMARY KEY (`PID`,`image_src`),
    FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE ON DELETE RESTRICT
 );

-- TRIGGER
DELIMITER //
CREATE PROCEDURE show_notification(IN value VARCHAR(255)) -- dump để debug
BEGIN
    SIGNAL SQLSTATE '45000'
    SET MESSAGE_TEXT = value;
END;//

CREATE TRIGGER insert_Bill_have_Product_trigger
AFTER INSERT ON Bill_have_Product
FOR EACH ROW
BEGIN
	DECLARE var_listed_unit_price DECIMAL(10, 0);
    DECLARE var_discount DECIMAL(10, 0);
    
    SELECT listed_unit_price, discount INTO var_listed_unit_price, var_discount
    FROM Product
    WHERE PID = NEW.PID;
    
	UPDATE Bill
    SET total_price = total_price + (NEW.quantity * (var_listed_unit_price * (100 - var_discount) / 100))
    WHERE BID = NEW.BID;
END //

DELIMITER //
CREATE TRIGGER insert_review_trigger
AFTER INSERT ON Review
FOR EACH ROW
BEGIN
    UPDATE Product
    SET no_of_reviews = no_of_reviews + 1
    WHERE PID = NEW.PID;
    
    UPDATE Product
    SET average_rating = (average_rating * (no_of_reviews - 1) + NEW.star) / no_of_reviews
    WHERE PID = NEW.PID;
END //

-- Procedure
CREATE PROCEDURE Login(IN p_email varchar(255), IN p_pass varchar(255))
BEGIN
    DECLARE hashed_password varchar(255);

    SELECT `encoded_password` INTO hashed_password
    FROM `User`
    WHERE `email` = p_email;

    IF hashed_password IS NOT NULL AND hashed_password = SHA2(CONCAT(p_pass, 'fc45c92ac5ad37b42824ea724d2f8f32'), 256) THEN
        SELECT email, fullname, `role`, phone
        FROM `User`
        WHERE `email` = p_email;
    ELSE
        SELECT `email`
        FROM `User`
        LIMIT 0;
    END IF;
END; //
DELIMITER //