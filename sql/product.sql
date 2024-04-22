-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 06:27 AM
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

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PID`, `name`, `listed_unit_price`, `description`, `size`, `quantity_on_hand`, `discount`, `no_of_reviews`, `average_rating`) VALUES
(1, 'Trung NguyĂªn Legend Classic', 5, 'From $5 for 2-3 days', 'large', 450, 0, 0, 0.0),
(1, 'Trung NguyĂªn Legend Classic', 5, 'From $5 for 2-3 days', 'medium', 300, 0, 0, 0.0),
(1, 'Trung NguyĂªn Legend Classic', 5, 'From $5 for 2-3 days', 'small', 150, 0, 0, 0.0),
(2, 'Legend Passion', 4, 'From $6 for 1-3 days', 'large', 400, 15, 0, 0.0),
(2, 'Legend Passion', 4, 'From $6 for 1-3 days', 'medium', 600, 15, 0, 0.0),
(2, 'Legend Passion', 4, 'From $6 for 1-3 days', 'small', 100, 15, 0, 0.0),
(3, 'Coffee Beans - Espresso Arabica and Robusta Beans ', 4, 'From $4 for 1-2 days', 'large', 400, 10, 0, 0.0),
(3, 'Coffee Beans - Espresso Arabica and Robusta Beans ', 4, 'From $4 for 1-2 days', 'medium', 400, 10, 0, 0.0),
(3, 'Coffee Beans - Espresso Arabica and Robusta Beans ', 4, 'From $4 for 1-2 days', 'small', 200, 10, 0, 0.0),
(5, 'Legend Special Edition 9', 5, 'From $2 for 3-4 days', 'large', 300, 10, 0, 0.0),
(5, 'Legend Special Edition 9', 5, 'From $2 for 3-4 days', 'medium', 200, 10, 0, 0.0),
(5, 'Legend Special Edition 9', 5, 'From $2 for 3-4 days', 'small', 100, 10, 0, 0.0),
(6, 'Legend Cappuccino Mocha 12', 4, 'From $6 for 1-3 days', 'large', 300, 5, 0, 0.0),
(6, 'Legend Cappuccino Mocha 12', 4, 'From $6 for 1-3 days', 'medium', 250, 5, 0, 0.0),
(6, 'Legend Cappuccino Mocha 12', 4, 'From $6 for 1-3 days', 'small', 200, 5, 0, 0.0),
(7, 'Legend Cappuccino Hazelnut', 5, 'From $3 for 1-3 days', 'large', 390, 20, 0, 0.0),
(7, 'Legend Cappuccino Hazelnut', 5, 'From $3 for 1-3 days', 'medium', 350, 20, 0, 0.0),
(7, 'Legend Cappuccino Hazelnut', 5, 'From $3 for 1-3 days', 'small', 300, 20, 0, 0.0),
(8, 'G7 2in1', 4, 'From $5 for 1-2 days', 'large', 150, 10, 0, 0.0),
(8, 'G7 2in1', 4, 'From $5 for 1-2 days', 'medium', 130, 10, 0, 0.0),
(8, 'G7 2in1', 4, 'From $5 for 1-2 days', 'small', 100, 10, 0, 0.0),
(9, 'Legend Special Edition 10', 5, 'From $4 for 3-4 days', 'large', 400, 10, 0, 0.0),
(9, 'Legend Special Edition 10', 5, 'From $4 for 3-4 days', 'medium', 200, 10, 0, 0.0),
(9, 'Legend Special Edition 10', 5, 'From $4 for 3-4 days', 'small', 200, 10, 0, 0.0),
(10, 'Mystic Mocha Almond', 3, 'From $3 for 1-3 days', 'large', 370, 15, 0, 0.0),
(10, 'Mystic Mocha Almond', 3, 'From $3 for 1-3 days', 'medium', 990, 15, 0, 0.0),
(10, 'Mystic Mocha Almond', 3, 'From $3 for 1-3 days', 'small', 653, 15, 0, 0.0),
(12, 'Aura Latte Caramel', 3, 'From $5 for 1-2 days', 'large', 962, 10, 0, 0.0),
(12, 'Aura Latte Caramel', 3, 'From $5 for 1-2 days', 'medium', 513, 10, 0, 0.0),
(12, 'Aura Latte Caramel', 3, 'From $5 for 1-2 days', 'small', 638, 10, 0, 0.0),
(13, 'Dreamer Macchiato Toffee', 3, 'From $6 for 3-5 days', 'large', 441, 10, 0, 0.0),
(13, 'Dreamer Macchiato Toffee', 3, 'From $6 for 3-5 days', 'medium', 341, 10, 0, 0.0),
(13, 'Dreamer Macchiato Toffee', 3, 'From $6 for 3-5 days', 'small', 529, 10, 0, 0.0),
(14, 'Whispered Cinnamon Swirl', 3, 'From $7 for 2-3 days', 'large', 834, 10, 0, 0.0),
(14, 'Whispered Cinnamon Swirl', 3, 'From $7 for 2-3 days', 'medium', 299, 10, 0, 0.0),
(14, 'Whispered Cinnamon Swirl', 3, 'From $7 for 2-3 days', 'small', 234, 10, 0, 0.0),
(15, 'Twilight Caramel Crunch', 4, 'From $8 for 1-4 days', 'large', 741, 0, 0, 0.0),
(15, 'Twilight Caramel Crunch', 4, 'From $8 for 1-4 days', 'medium', 877, 0, 0, 0.0),
(15, 'Twilight Caramel Crunch', 4, 'From $8 for 1-4 days', 'small', 717, 0, 0, 0.0),
(16, 'Secret Symphony Caramel', 2, 'From $9 for 2-5 days', 'large', 892, 10, 0, 0.0),
(16, 'Secret Symphony Caramel', 2, 'From $9 for 2-5 days', 'medium', 842, 10, 0, 0.0),
(16, 'Secret Symphony Caramel', 2, 'From $9 for 2-5 days', 'small', 500, 10, 0, 0.0),
(17, 'Essence Latte Hazelnut', 4, 'From $4 for 1-3 days', 'large', 602, 20, 0, 0.0),
(17, 'Essence Latte Hazelnut', 4, 'From $4 for 1-3 days', 'medium', 447, 20, 0, 0.0),
(17, 'Essence Latte Hazelnut', 4, 'From $4 for 1-3 days', 'small', 276, 20, 0, 0.0),
(18, 'Celestial Coconut Cream', 4, 'From $5 for 2-4 days', 'large', 213, 5, 0, 0.0),
(18, 'Celestial Coconut Cream', 4, 'From $5 for 2-4 days', 'medium', 655, 5, 0, 0.0),
(18, 'Celestial Coconut Cream', 4, 'From $5 for 2-4 days', 'small', 371, 5, 0, 0.0),
(19, 'Fantasy Froth Vanilla', 3, 'From $6 for 3-6 days', 'large', 818, 10, 0, 0.0),
(19, 'Fantasy Froth Vanilla', 3, 'From $6 for 3-6 days', 'medium', 353, 10, 0, 0.0),
(19, 'Fantasy Froth Vanilla', 3, 'From $6 for 3-6 days', 'small', 876, 10, 0, 0.0),
(20, 'Serenade Espresso Tiramisu', 3, 'From $7 for 1-2 days', 'large', 869, 10, 0, 0.0),
(20, 'Serenade Espresso Tiramisu', 3, 'From $7 for 1-2 days', 'medium', 871, 10, 0, 0.0),
(20, 'Serenade Espresso Tiramisu', 3, 'From $7 for 1-2 days', 'small', 434, 10, 0, 0.0),
(22, 'Enchanted Espresso Caramel', 4, 'From $9 for 3-5 days', 'large', 424, 10, 0, 0.0),
(22, 'Enchanted Espresso Caramel', 4, 'From $9 for 3-5 days', 'medium', 272, 10, 0, 0.0),
(22, 'Enchanted Espresso Caramel', 4, 'From $9 for 3-5 days', 'small', 411, 10, 0, 0.0),
(23, 'Mirage Mocha Macadamia', 5, 'From $5 for 1-4 days', 'large', 738, 5, 0, 0.0),
(23, 'Mirage Mocha Macadamia', 5, 'From $5 for 1-4 days', 'medium', 208, 5, 0, 0.0),
(23, 'Mirage Mocha Macadamia', 5, 'From $5 for 1-4 days', 'small', 845, 5, 0, 0.0),
(24, 'Mystic Morning Maple', 5, 'From $6 for 2-5 days', 'large', 670, 0, 0, 0.0),
(24, 'Mystic Morning Maple', 5, 'From $6 for 2-5 days', 'medium', 666, 0, 0, 0.0),
(24, 'Mystic Morning Maple', 5, 'From $6 for 2-5 days', 'small', 726, 0, 0, 0.0),
(25, 'Whispered White Chocolate Mocha', 4, 'From $7 for 1-3 days', 'large', 981, 15, 0, 0.0),
(25, 'Whispered White Chocolate Mocha', 4, 'From $7 for 1-3 days', 'medium', 439, 15, 0, 0.0),
(25, 'Whispered White Chocolate Mocha', 4, 'From $7 for 1-3 days', 'small', 336, 15, 0, 0.0),
(26, 'Dreamer Delight Caramel', 4, 'From $8 for 2-4 days', 'large', 754, 15, 0, 0.0),
(26, 'Dreamer Delight Caramel', 4, 'From $8 for 2-4 days', 'medium', 896, 15, 0, 0.0),
(26, 'Dreamer Delight Caramel', 4, 'From $8 for 2-4 days', 'small', 201, 15, 0, 0.0),
(27, 'Moonlit Maple Latte', 2, 'From $9 for 3-6 days', 'large', 650, 20, 0, 0.0),
(27, 'Moonlit Maple Latte', 2, 'From $9 for 3-6 days', 'medium', 948, 20, 0, 0.0),
(27, 'Moonlit Maple Latte', 2, 'From $9 for 3-6 days', 'small', 443, 20, 0, 0.0),
(28, 'Mirage Mocha Cinnamon', 2, 'From $10 for 1-2 days', 'large', 202, 20, 0, 0.0),
(28, 'Mirage Mocha Cinnamon', 2, 'From $10 for 1-2 days', 'medium', 906, 20, 0, 0.0),
(28, 'Mirage Mocha Cinnamon', 2, 'From $10 for 1-2 days', 'small', 324, 20, 0, 0.0),
(29, 'Secret Symphony Hazelnut', 5, 'From $6 for 2-3 days', 'large', 436, 10, 0, 0.0),
(29, 'Secret Symphony Hazelnut', 5, 'From $6 for 2-3 days', 'medium', 451, 10, 0, 0.0),
(29, 'Secret Symphony Hazelnut', 5, 'From $6 for 2-3 days', 'small', 316, 10, 0, 0.0),
(31, 'Celestial Caramel Cream', 3, 'From $8 for 2-5 days', 'large', 455, 5, 0, 0.0),
(31, 'Celestial Caramel Cream', 3, 'From $8 for 2-5 days', 'medium', 435, 5, 0, 0.0),
(31, 'Celestial Caramel Cream', 3, 'From $8 for 2-5 days', 'small', 449, 5, 0, 0.0),
(32, 'Essence Espresso Vanilla', 4, 'From $9 for 3-6 days', 'large', 529, 5, 0, 0.0),
(32, 'Essence Espresso Vanilla', 4, 'From $9 for 3-6 days', 'medium', 662, 5, 0, 0.0),
(32, 'Essence Espresso Vanilla', 4, 'From $9 for 3-6 days', 'small', 503, 5, 0, 0.0),
(33, 'Twilight Toffee Temptation', 2, 'From $10 for 1-3 days', 'large', 428, 15, 0, 0.0),
(33, 'Twilight Toffee Temptation', 2, 'From $10 for 1-3 days', 'medium', 243, 15, 0, 0.0),
(33, 'Twilight Toffee Temptation', 2, 'From $10 for 1-3 days', 'small', 445, 15, 0, 0.0),
(34, 'Enigma Eggnog Latte', 3, 'From $11 for 2-4 days', 'large', 274, 10, 0, 0.0),
(34, 'Enigma Eggnog Latte', 3, 'From $11 for 2-4 days', 'medium', 306, 10, 0, 0.0),
(34, 'Enigma Eggnog Latte', 3, 'From $11 for 2-4 days', 'small', 283, 10, 0, 0.0),
(36, 'Dreamer\'s Delight Vanilla', 3, 'From $8 for 1-3 days', 'large', 279, 5, 0, 0.0),
(36, 'Dreamer\'s Delight Vanilla', 3, 'From $8 for 1-3 days', 'medium', 519, 5, 0, 0.0),
(36, 'Dreamer\'s Delight Vanilla', 3, 'From $8 for 1-3 days', 'small', 530, 5, 0, 0.0),
(38, 'Enchanted Espresso Almond', 4, 'From $10 for 3-6 days', 'large', 227, 10, 0, 0.0),
(38, 'Enchanted Espresso Almond', 4, 'From $10 for 3-6 days', 'medium', 422, 10, 0, 0.0),
(38, 'Enchanted Espresso Almond', 4, 'From $10 for 3-6 days', 'small', 511, 10, 0, 0.0),
(40, 'Mirage Mocha Marshmallow', 4, 'From $12 for 2-3 days', 'large', 552, 10, 0, 0.0),
(40, 'Mirage Mocha Marshmallow', 4, 'From $12 for 2-3 days', 'medium', 656, 10, 0, 0.0),
(40, 'Mirage Mocha Marshmallow', 4, 'From $12 for 2-3 days', 'small', 400, 10, 0, 0.0),
(41, 'Secret Symphony Cinnamon Roll', 3, 'From $8 for 1-4 days', 'large', 531, 15, 0, 0.0),
(41, 'Secret Symphony Cinnamon Roll', 3, 'From $8 for 1-4 days', 'medium', 570, 15, 0, 0.0),
(41, 'Secret Symphony Cinnamon Roll', 3, 'From $8 for 1-4 days', 'small', 659, 15, 0, 0.0),
(42, 'Celestial Cappuccino Coconut', 4, 'From $9 for 2-5 days', 'large', 281, 0, 0, 0.0),
(42, 'Celestial Cappuccino Coconut', 4, 'From $9 for 2-5 days', 'medium', 483, 0, 0, 0.0),
(42, 'Celestial Cappuccino Coconut', 4, 'From $9 for 2-5 days', 'small', 758, 0, 0, 0.0),
(43, 'Essence Espresso Eggnog', 5, 'From $10 for 3-6 days', 'large', 881, 10, 0, 0.0),
(43, 'Essence Espresso Eggnog', 5, 'From $10 for 3-6 days', 'medium', 384, 10, 0, 0.0),
(43, 'Essence Espresso Eggnog', 5, 'From $10 for 3-6 days', 'small', 309, 10, 0, 0.0),
(44, 'Aura Almond Joy', 5, 'From $11 for 1-3 days', 'large', 867, 10, 0, 0.0),
(44, 'Aura Almond Joy', 5, 'From $11 for 1-3 days', 'medium', 521, 10, 0, 0.0),
(44, 'Aura Almond Joy', 5, 'From $11 for 1-3 days', 'small', 282, 10, 0, 0.0),
(47, 'Whispered White Chocolate Delight', 5, 'From $9 for 2-3 days', 'large', 808, 0, 0, 0.0),
(47, 'Whispered White Chocolate Delight', 5, 'From $9 for 2-3 days', 'medium', 977, 0, 0, 0.0),
(47, 'Whispered White Chocolate Delight', 5, 'From $9 for 2-3 days', 'small', 201, 0, 0, 0.0),
(48, 'Ethereal Espresso Almond Bliss', 5, 'From $10 for 1-4 days', 'large', 735, 15, 0, 0.0),
(48, 'Ethereal Espresso Almond Bliss', 5, 'From $10 for 1-4 days', 'medium', 967, 15, 0, 0.0),
(48, 'Ethereal Espresso Almond Bliss', 5, 'From $10 for 1-4 days', 'small', 774, 15, 0, 0.0),
(49, 'Enigma Eggnog Explosion', 2, 'From $11 for 2-5 days', 'large', 853, 20, 0, 0.0),
(49, 'Enigma Eggnog Explosion', 2, 'From $11 for 2-5 days', 'medium', 481, 20, 0, 0.0),
(49, 'Enigma Eggnog Explosion', 2, 'From $11 for 2-5 days', 'small', 892, 20, 0, 0.0),
(51, 'Mirage Maple Madness', 3, 'From $13 for 1-3 days', 'large', 458, 10, 0, 0.0),
(51, 'Mirage Maple Madness', 3, 'From $13 for 1-3 days', 'medium', 885, 10, 0, 0.0),
(51, 'Mirage Maple Madness', 3, 'From $13 for 1-3 days', 'small', 278, 10, 0, 0.0),
(52, 'Secret Symphony Spiced Caramel', 4, 'From $14 for 2-4 days', 'large', 910, 10, 0, 0.0),
(52, 'Secret Symphony Spiced Caramel', 4, 'From $14 for 2-4 days', 'medium', 214, 10, 0, 0.0),
(52, 'Secret Symphony Spiced Caramel', 4, 'From $14 for 2-4 days', 'small', 660, 10, 0, 0.0),
(53, 'Celestial Coconut Caramel Crunch', 4, 'From $10 for 2-5 days', 'large', 640, 10, 0, 0.0),
(53, 'Celestial Coconut Caramel Crunch', 4, 'From $10 for 2-5 days', 'medium', 954, 10, 0, 0.0),
(53, 'Celestial Coconut Caramel Crunch', 4, 'From $10 for 2-5 days', 'small', 490, 10, 0, 0.0),
(54, 'Essence Espresso Euphoria', 2, 'From $11 for 1-3 days', 'large', 397, 0, 0, 0.0),
(54, 'Essence Espresso Euphoria', 2, 'From $11 for 1-3 days', 'medium', 547, 0, 0, 0.0),
(54, 'Essence Espresso Euphoria', 2, 'From $11 for 1-3 days', 'small', 964, 0, 0, 0.0),
(57, 'Mystic Mocha Madness', 3, 'From $14 for 1-2 days', 'large', 254, 20, 0, 0.0),
(57, 'Mystic Mocha Madness', 3, 'From $14 for 1-2 days', 'medium', 334, 20, 0, 0.0),
(57, 'Mystic Mocha Madness', 3, 'From $14 for 1-2 days', 'small', 966, 20, 0, 0.0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
