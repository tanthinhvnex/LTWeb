-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 12:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_ltw_database`
--
CREATE DATABASE IF NOT EXISTS `btl_ltw_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `btl_ltw_database`;

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `BID` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `total_price` decimal(10,0) NOT NULL DEFAULT 0,
  `shipping_fee` decimal(10,0) NOT NULL DEFAULT 0,
  `credit_card_number` varchar(16) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `AID` int(11) NOT NULL,
  PRIMARY KEY (`BID`),
  KEY `credit_card_number` (`credit_card_number`),
  KEY `customer_email` (`customer_email`,`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `bill`:
--   `credit_card_number`
--       `credit_card` -> `card_number`
--   `customer_email`
--       `shipping_address` -> `customer_email`
--   `AID`
--       `shipping_address` -> `AID`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill_have_product`
--

DROP TABLE IF EXISTS `bill_have_product`;
CREATE TABLE IF NOT EXISTS `bill_have_product` (
  `BID` int(11) NOT NULL,
  `PID` int(11) NOT NULL,
  `size` char(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`BID`,`PID`,`size`),
  KEY `PID` (`PID`,`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `bill_have_product`:
--   `BID`
--       `bill` -> `BID`
--   `PID`
--       `product` -> `PID`
--   `size`
--       `product` -> `size`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_card`
--

DROP TABLE IF EXISTS `credit_card`;
CREATE TABLE IF NOT EXISTS `credit_card` (
  `card_number` varchar(16) NOT NULL,
  `CVV` varchar(4) NOT NULL,
  `exp_date` date NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  `customer_email` varchar(255) NOT NULL,
  PRIMARY KEY (`card_number`),
  KEY `customer_email` (`customer_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `credit_card`:
--   `customer_email`
--       `user` -> `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_add_to_cart_product`
--

DROP TABLE IF EXISTS `customer_add_to_cart_product`;
CREATE TABLE IF NOT EXISTS `customer_add_to_cart_product` (
  `customer_email` varchar(255) NOT NULL,
  `PID` int(11) NOT NULL,
  `size` char(20) NOT NULL DEFAULT 'small',
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`customer_email`,`PID`,`size`) USING BTREE,
  KEY `customer_add_to_cart_product_ibfk_1` (`PID`,`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `customer_add_to_cart_product`:
--   `PID`
--       `product` -> `PID`
--   `size`
--       `product` -> `size`
--   `customer_email`
--       `user` -> `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_add_to_favourite_product`
--

DROP TABLE IF EXISTS `customer_add_to_favourite_product`;
CREATE TABLE IF NOT EXISTS `customer_add_to_favourite_product` (
  `customer_email` varchar(255) NOT NULL,
  `PID` int(11) NOT NULL,
  PRIMARY KEY (`customer_email`,`PID`),
  KEY `PID` (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `customer_add_to_favourite_product`:
--   `PID`
--       `product` -> `PID`
--   `customer_email`
--       `user` -> `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `PID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `listed_unit_price` decimal(10,0) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `size` char(20) NOT NULL,
  `quantity_on_hand` int(11) NOT NULL,
  `discount` decimal(10,0) NOT NULL,
  `no_of_reviews` int(11) DEFAULT 0,
  `average_rating` decimal(2,1) DEFAULT 0.0,
  PRIMARY KEY (`PID`,`size`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `product`:
--

-- --------------------------------------------------------

--
-- Table structure for table `product_image_src`
--

DROP TABLE IF EXISTS `product_image_src`;
CREATE TABLE IF NOT EXISTS `product_image_src` (
  `PID` int(11) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  PRIMARY KEY (`PID`,`image_src`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `product_image_src`:
--   `PID`
--       `product` -> `PID`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_similar_to_product`
--

DROP TABLE IF EXISTS `product_similar_to_product`;
CREATE TABLE IF NOT EXISTS `product_similar_to_product` (
  `PID` int(11) NOT NULL,
  `similar_PID` int(11) NOT NULL,
  PRIMARY KEY (`PID`,`similar_PID`),
  KEY `similar_PID` (`similar_PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `product_similar_to_product`:
--   `PID`
--       `product` -> `PID`
--   `similar_PID`
--       `product` -> `PID`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `PID` int(11) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `RID` int(11) NOT NULL,
  `star` int(11) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`PID`,`customer_email`,`RID`),
  KEY `customer_email` (`customer_email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `review`:
--   `customer_email`
--       `user` -> `email`
--   `PID`
--       `product` -> `PID`
--

--
-- Triggers `review`
--
DROP TRIGGER IF EXISTS `insert_review_trigger`;
DELIMITER $$
CREATE TRIGGER `insert_review_trigger` AFTER INSERT ON `review` FOR EACH ROW BEGIN
    UPDATE Product
    SET no_of_reviews = no_of_reviews + 1
    WHERE PID = NEW.PID;
    
    UPDATE Product
    SET average_rating = (average_rating * (no_of_reviews - 1) + NEW.star) / no_of_reviews
    WHERE PID = NEW.PID;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

DROP TABLE IF EXISTS `shipping_address`;
CREATE TABLE IF NOT EXISTS `shipping_address` (
  `customer_email` varchar(255) NOT NULL,
  `AID` int(11) NOT NULL,
  `reciever_name` varchar(255) NOT NULL,
  `reciever_phone` varchar(10) NOT NULL,
  `city_district_town` varchar(255) NOT NULL,
  `additional_address_info` varchar(255) NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`customer_email`,`AID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `shipping_address`:
--   `customer_email`
--       `user` -> `email`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(255) NOT NULL,
  `encoded_password` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- RELATIONSHIPS FOR TABLE `user`:
--

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`credit_card_number`) REFERENCES `credit_card` (`card_number`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`customer_email`,`AID`) REFERENCES `shipping_address` (`customer_email`, `AID`) ON UPDATE CASCADE;

--
-- Constraints for table `bill_have_product`
--
ALTER TABLE `bill_have_product`
  ADD CONSTRAINT `bill_have_product_ibfk_1` FOREIGN KEY (`BID`) REFERENCES `bill` (`BID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_have_product_ibfk_2` FOREIGN KEY (`PID`,`size`) REFERENCES `product` (`PID`, `size`) ON UPDATE CASCADE;

--
-- Constraints for table `credit_card`
--
ALTER TABLE `credit_card`
  ADD CONSTRAINT `credit_card_ibfk_1` FOREIGN KEY (`customer_email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;

--
-- Constraints for table `customer_add_to_cart_product`
--
ALTER TABLE `customer_add_to_cart_product`
  ADD CONSTRAINT `customer_add_to_cart_product_ibfk_1` FOREIGN KEY (`PID`,`size`) REFERENCES `product` (`PID`, `size`) ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_add_to_cart_product_ibfk_2` FOREIGN KEY (`customer_email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;

--
-- Constraints for table `customer_add_to_favourite_product`
--
ALTER TABLE `customer_add_to_favourite_product`
  ADD CONSTRAINT `customer_add_to_favourite_product_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `customer_add_to_favourite_product_ibfk_2` FOREIGN KEY (`customer_email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;

--
-- Constraints for table `product_image_src`
--
ALTER TABLE `product_image_src`
  ADD CONSTRAINT `product_image_src_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `product_similar_to_product`
--
ALTER TABLE `product_similar_to_product`
  ADD CONSTRAINT `product_similar_to_product_ibfk_1` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE,
  ADD CONSTRAINT `product_similar_to_product_ibfk_2` FOREIGN KEY (`similar_PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`customer_email`) REFERENCES `user` (`email`) ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`PID`) ON UPDATE CASCADE;

--
-- Constraints for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD CONSTRAINT `shipping_address_ibfk_1` FOREIGN KEY (`customer_email`) REFERENCES `user` (`email`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
