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
    `addtional_address_info` varchar(255) NOT NULL,
    `is_default` bool DEFAULT FALSE NOT NULL,
    PRIMARY KEY (`customer_email`,`AID`),
    FOREIGN KEY (`customer_email`) REFERENCES `User`(`email`) ON UPDATE CASCADE ON DELETE RESTRICT
 );

CREATE TABLE IF NOT EXISTS `Bill`
(
	`BID` int NOT NULL,
	`created_at` datetime NOT NULL,
	`total_price` decimal(10, 2) DEFAULT 0 NOT NULL,
	`shipping_fee` decimal(10, 2) NOT NULL,
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
    `listed_unit_price` decimal(10, 2) NOT NULL,
    `description` varchar(255) NOT NULL,
    `size` varchar(255) NOT NULL,
    `quantity_on_hand` int NOT NULL,
    `discount` decimal(10, 0) NOT NULL,
    `no_of_reviews` int DEFAULT 0,
    `average_rating` decimal (1, 1) DEFAULT 0,
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
    `unit_price_after_discount` decimal(10, 2) NOT NULL,
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
    `unit_price_after_discount` decimal(10,2) NOT NULL,
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
CREATE TRIGGER insert_Bill_have_Product_trigger -- cộng bill_sum khi có một sản phẩm mới được thêm vào hóa đơn
AFTER INSERT ON Bill_have_Product
FOR EACH ROW
BEGIN
    UPDATE Bill
    SET total_price = total_price + (NEW.quantity * NEW.unit_price_after_discount)
    WHERE BID = NEW.BID;
END //

DELIMITER //
CREATE TRIGGER insert_review_trigger -- cộng bill_sum khi có một sản phẩm mới được thêm vào hóa đơn
AFTER INSERT ON Review
FOR EACH ROW
BEGIN
    UPDATE Product
    SET no_of_reviews = no_of_reviews + 1
    WHERE PID = NEW.PID;
    
    UPDATE Product
    SET average_rating = (average_rating * (no_of_reviews - 1) + NEW.star) / no_of_reviews;
END //
