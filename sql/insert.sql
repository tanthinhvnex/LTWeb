USE btl_ltw_database;

INSERT INTO `User` (`email`, `encoded_password`, `fullname`, `role`, `phone`)
VALUES
    ('phuc.dangphanminh@hcmut.edu.vn', SHA2(CONCAT('123456', 'fc45c92ac5ad37b42824ea724d2f8f32'), 256), 'Đặng Phan Minh Phúc', 'customer', '0123456789');

-- Call Login('phuc.dangphanminh@hcmut.edu.vn', '123456');

INSERT INTO `Credit_Card` (`card_number`, `CVV`, `exp_date`, `fullname`, `is_default`, `customer_email`)
VALUES
	('1234567890123456', '1234', '2024-12-31', 'Đặng Phan Minh Phúc', true, 'phuc.dangphanminh@hcmut.edu.vn');
    
INSERT INTO `Shipping_Address` (`customer_email`, `AID`, `reciever_name`, `reciever_phone`, `city_district_town`, `additional_address_info`)
VALUES
	('phuc.dangphanminh@hcmut.edu.vn', 1, 'Đặng Phan Minh Phúc', '0123456789', 'Thành phố Hồ Chí Minh/Quận 10/Phường 14', '268 Lý Thường Kiệt');

INSERT INTO `Product` (`PID`,`name`,`listed_unit_price`,`description`,`size`,`quantity_on_hand`,`discount`,`no_of_reviews`,`average_rating`)
VALUES
	(1,'Legend Passion',200000,'Espresso blends often combine Arabica and Robusta beans to achieve a balanced flavor profile that includes both the nuanced flavors of Arabica and the strong body and crema provided by Robusta. The ratio of Arabica to Robusta beans in the blend can vary depending on the desired taste and characteristics of the espresso.','small',400,15,0,0);
INSERT INTO `Product_image_src` (`PID`, `image_src`)
VALUES
	(1, 'https://trungnguyenecoffee.com/wp-content/uploads/2020/09/HOP-PHIN-VNESE-BLENDPNG-1-e1599214126715.png');
	
INSERT INTO `Bill` (`BID`, `created_at`, `shipping_fee`, `credit_card_number`, `customer_email`, `AID`)
VALUES
	(1, '2024-04-21 05:19:12', 0, '1234567890123456', 'phuc.dangphanminh@hcmut.edu.vn', 1);

INSERT INTO `Bill_have_product` (`BID`, `PID`, `quantity`)
VALUES
	(1, 1, 10);
    
INSERT INTO `Review` (`PID`,`customer_email`,`RID`,`star`,`content`)
VALUES
	(1, 'phuc.dangphanminh@hcmut.edu.vn', 1, 4, "This coffee has exceeded my expectations. It''s smooth, flavorful, and downright addictive.");
    
INSERT INTO `customer_add_to_favourite_product` (`customer_email`,`PID`)
VALUES
	('phuc.dangphanminh@hcmut.edu.vn', 1);
    
INSERT INTO `customer_add_to_cart_product` (`customer_email`,`PID`,`quantity`)
VALUES
	('phuc.dangphanminh@hcmut.edu.vn', 1, 10);