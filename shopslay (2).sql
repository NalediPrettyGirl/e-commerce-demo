-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 11, 2024 at 07:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopslay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `User_id` int NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`User_id`, `Username`, `Password`) VALUES
(1, 'NalediAdm', 'Naledi277Ad'),
(2, 'Naledi', 'Motsoikha');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

DROP TABLE IF EXISTS `checkout`;
CREATE TABLE IF NOT EXISTS `checkout` (
  `Checkout_id` int NOT NULL AUTO_INCREMENT,
  `First_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` text NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `city` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `state` text NOT NULL,
  `zip` int NOT NULL,
  `card_name` int NOT NULL,
  `card_number` text NOT NULL,
  `expmonth` text NOT NULL,
  `expyear` int NOT NULL,
  `cvv` int NOT NULL,
  `User_id` int DEFAULT NULL,
  PRIMARY KEY (`Checkout_id`),
  KEY `User_id` (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`Checkout_id`, `First_name`, `email`, `address`, `city`, `state`, `zip`, `card_name`, `card_number`, `expmonth`, `expyear`, `cvv`, `User_id`) VALUES
(1, 'Naledi Motsoikha', 'naledi29motsoikha@gmail.com', 'sdnjdsi', 'fgre', '', 3333, 0, '', '', 0, 0, 2),
(2, 'Naledi Dieketseng Motsoikha', 'naledi29motsoikha@gmail.com', 'sdnjdsi', 'fgre', '', 3333, 2147483647, '222', '2', 2021, 111, 5);

-- --------------------------------------------------------

--
-- Table structure for table `checkout_cart`
--

DROP TABLE IF EXISTS `checkout_cart`;
CREATE TABLE IF NOT EXISTS `checkout_cart` (
  `Item_id` int NOT NULL,
  `Item_name` text NOT NULL,
  `Item_price` text NOT NULL,
  `Description` text NOT NULL,
  `Picture` text NOT NULL,
  `Checkout_id` int NOT NULL,
  `User_id` int DEFAULT NULL,
  KEY `fk_checkout_cart_checkout` (`Checkout_id`),
  KEY `User_id` (`User_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkout_cart`
--

INSERT INTO `checkout_cart` (`Item_id`, `Item_name`, `Item_price`, `Description`, `Picture`, `Checkout_id`, `User_id`) VALUES
(9, 'Cocktail Dress', '160', 'Available', 'woman/dress4.jpg', 1, NULL),
(9, 'Cocktail Dress', '160', 'Available', 'woman/dress4.jpg', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'Naledi Motsoikha', 'naledi29motsoikha@gmail.com', 'hi'),
(2, 'Khanya', 'naledi29motsoikha@gmail.com', 'hi ,Husa Uba nsi nouhos Khsuoas jnooh dkjnd fdjgvf vfld');

-- --------------------------------------------------------

--
-- Table structure for table `kids`
--

DROP TABLE IF EXISTS `kids`;
CREATE TABLE IF NOT EXISTS `kids` (
  `Item_id` int NOT NULL AUTO_INCREMENT,
  `Item_name` text NOT NULL,
  `Description` text NOT NULL,
  `Price` text NOT NULL,
  `Picture` text NOT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kids`
--

INSERT INTO `kids` (`Item_id`, `Item_name`, `Description`, `Price`, `Picture`) VALUES
(1, '2PieceDemin', ' Available', '600', 'kids/goja.jpg'),
(2, ' Nice Gojas', 'Available', '200', 'kids/gojas2.jpg'),
(3, 'Swimming Costume', 'Available', '140', 'kids/goja3.jpg'),
(4, 'Tatoo Vest', 'Available', '130', 'kids/newbb1.webp'),
(5, 'Grey Wanzie', 'Available', '100', 'kids/newbb2.webp'),
(6, 'ZigZag Wanzie', 'Available', '40', 'kids/newbb3.webp'),
(7, 'Christmas Wanzie', 'Available', '100', 'kids/newbbb.jpg'),
(8, 'fancy Vest', 'Available', '200', 'kids/newborng1.jpg'),
(9, 'Pinky Vest', 'Available', '200', 'kids/newborng.webp'),
(10, 'Tennis Dress', 'Low on Stock', '100', 'kids/newborng3.jpg'),
(11, 'Jean', 'Available', '120', 'kids/Jeankids.jpg'),
(12, 'Tracksuit ', 'Available', '300', 'kids/tracksuit1.jpg'),
(13, 'Tracksuit set', 'Available', '130', 'kids/tracksuit2.jpg'),
(15, 'Denim Costume', 'Available', '140', 'kids/gojas2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `men`
--

DROP TABLE IF EXISTS `men`;
CREATE TABLE IF NOT EXISTS `men` (
  `Item_id` int NOT NULL AUTO_INCREMENT,
  `Item_name` text NOT NULL,
  `Description` text NOT NULL,
  `Price` int NOT NULL,
  `Picture` text NOT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `men`
--

INSERT INTO `men` (`Item_id`, `Item_name`, `Description`, `Price`, `Picture`) VALUES
(1, '2PieceDemin', 'Available', 600, 'men/pexels-devesh-pandey-2958620.jpg'),
(2, 'Jean', 'Low On Stock', 200, 'men/pexels-victor-miyata-1957154.jpg'),
(3, 'Summer Vest', 'I lowkey am a fan', 122, 'men/tshirtm1.jpg'),
(4, 'Grey Suit', 'Available', 1000, 'men/suit1.jpg'),
(5, 'Maroon Suit', 'Low On Stock', 900, 'men/shirt2.jpg'),
(6, 'Tracksuit', 'Available', 200, 'men/track3.jpg'),
(7, 'Adidas Tracksuit', 'Available all the time ', 500, 'men/track3.jpg'),
(8, 'Cool Tracksuit', 'Its too good to be true', 900, 'men/track3.jpg'),
(9, 'Cool Tz', 'Stock While Lasts', 400, 'men/pexels-victor-miyata-1957154.jpg'),
(10, 'Smily Tz', 'Available all', 300, 'men/shirt2.jpg'),
(11, 'Maroon5 shirt', 'Available', 200, 'men/track3.jpg'),
(12, 'Brownie Tz', 'Available', 300, 'men/shirt2.jpg'),
(13, '2PieceDemin', 'Almost Mahala, Sooo Available', 600, 'men/pexels-victor-miyata-1957154.jpg'),
(14, 'Jean', 'Too Strong ', 300, 'men/pexels-victor-miyata-1957154.jpg'),
(15, '2PieceDemin', 'Almost Mahala, Sooo Available', 600, 'men/pexels-victor-miyata-1957154.jpg'),
(16, 'Jean', 'Too Strong ', 300, 'men/pexels-victor-miyata-1957154.jpg'),
(17, 'Tracksuit', 'Available', 300, 'men/track3.jpg'),
(18, 'Adidas Tracksuit', 'Available', 900, 'men/track3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

DROP TABLE IF EXISTS `newsletters`;
CREATE TABLE IF NOT EXISTS `newsletters` (
  `name` text NOT NULL,
  `Email` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `newsletters`
--

INSERT INTO `newsletters` (`name`, `Email`) VALUES
('Naledi Motsoikha', 'naledi29motsoikha@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE IF NOT EXISTS `shopping_cart` (
  `Item_id` int NOT NULL,
  `Item_name` text NOT NULL,
  `Item_price` int NOT NULL,
  `Description` text NOT NULL,
  `Picture` text NOT NULL,
  `User_id` int DEFAULT NULL,
  KEY `User_id` (`User_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `User_id` int NOT NULL AUTO_INCREMENT,
  `Username` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`User_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Username`, `Email`, `Password`) VALUES
(1, 'Umy', 'Umy@gmail.com', '$2y$10$a78iUAEvsAzb2ErbR2OgHO1nV94uaAjDeCpXZh4ArZV.AGjk684aO'),
(2, 'Keke', 'keke@gmail.com', '$2y$10$S6nHnXuk4Mop6e5rd.Vh.ecZPuwRQzVr/sxwNoGeiT0Q1vyh8cVeC'),
(3, 'Punki', 'Punki@gmail.com', '$2y$10$JOW6hH0cWtZzHFpwOltPO.cFHjDuIegCMfq0pz1j9yx7LcnnUL5tK'),
(4, 'Ellen', 'Ellen@gmail.com', '$2y$10$adb2yzHIvAQ8YTh5sRxbVeZEvv4kGpUQU5IlJq4O4HNCeOelO4z4.'),
(5, 'user', 'user@gmail.com', '$2y$10$yh2TBwW2GMzmS1N5gOvleufauS.8DAJHRF3rclOQjeZJGGEC.56te');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

DROP TABLE IF EXISTS `women`;
CREATE TABLE IF NOT EXISTS `women` (
  `Item_id` int NOT NULL,
  `Item_name` text NOT NULL,
  `Description` text NOT NULL,
  `Price` int NOT NULL,
  `Picture` text NOT NULL,
  PRIMARY KEY (`Item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `women`
--

INSERT INTO `women` (`Item_id`, `Item_name`, `Description`, `Price`, `Picture`) VALUES
(2, 'Rockstar2Piece', 'Available', 200, 'woman/2piecew2.jpg'),
(3, 'PinkCoat', 'Available', 300, 'woman/coat1.jpg'),
(4, 'BlackCoat', 'Available', 300, 'woman/coat2.jpg'),
(5, 'Black2piece', 'Available', 200, 'woman/2piecew1.png'),
(6, 'Rockstar2Piece', 'Available', 300, 'woman/2piecew2.jpg'),
(7, 'Pink Dress', 'Available Always and forever', 200, 'woman/coat1.jpg'),
(8, 'NiveDress', 'Available', 300, 'woman/dress2.jpg'),
(9, 'Cocktail Dress', 'Available', 160, 'woman/dress4.jpg'),
(10, 'Traditional Dress', 'Low On Stock', 350, 'woman/dress3.jpg'),
(11, 'Denim Suit', 'Low On Stock', 400, 'woman/fwsuit1.jpg'),
(12, 'Red Suit', 'Available', 500, 'woman/fwsuit2.jpg'),
(13, 'Cool Suit', 'Available', 950, 'woman/fwsuit3.jpg'),
(14, 'Jumpsuit', 'Low On Stock', 200, 'woman/summer1.jpg'),
(15, 'Summer Suit', 'Low On Stock', 200, 'woman/summer2.jpg'),
(16, 'Summer Cool', 'Available', 150, 'woman/summer3.jpg'),
(17, 'Yellow Shirt', 'Available Soon', 200, 'woman/shirtw4.jpg'),
(18, 'Paige Shirt', 'Available', 600, 'woman/shirtw1.jpg'),
(19, 'Black Shirt', 'Available', 400, 'woman/shirtw1.jpg'),
(20, 'Smily Shirt', 'Available', 200, 'woman/shirtw2.jpg'),
(21, 'Tight Jean', 'Available', 400, 'woman/pexels-godisable-jacob-1068640.jpg'),
(22, 'Black2piece', 'Avalable', 200, 'woman/2piecew1.png'),
(23, 'Rockstar2Piece', 'Available', 300, 'woman/2piecew2.jpg'),
(24, 'Pink Dress', 'Available Always and forever', 200, 'woman/coat1.jpg'),
(25, 'NiveDress', 'Available', 300, 'woman/dress2.jpg'),
(26, 'Cocktail Dress', 'Available', 250, 'woman/dress4.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
