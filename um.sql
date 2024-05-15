-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2024 at 09:54 PM
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
-- Database: `um`
--

-- --------------------------------------------------------

--
-- Table structure for table `cd`
--

DROP TABLE IF EXISTS `cd`;
CREATE TABLE IF NOT EXISTS `cd` (
  `id` int NOT NULL AUTO_INCREMENT,
  `companyname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `sp` varchar(100) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `pt` varchar(100) NOT NULL,
  `tw` varchar(100) NOT NULL,
  `ld` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cd`
--

INSERT INTO `cd` (`id`, `companyname`, `phone`, `email`, `fb`, `sp`, `ig`, `pt`, `tw`, `ld`, `time`) VALUES
(1, 'Um', '+21261111111111', 'mail@um.com', 'f', 'f', 'f', 'f', 'f', 'f', '2023-12-10 09:28:02');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Comments` int NOT NULL,
  `Stars` int NOT NULL,
  `Rate` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `page` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page` (`page`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page`, `description`, `time`) VALUES
(1, 'jkk', '', '2023-12-10 12:55:31'),
(2, 'qzrestdfyg', '', '2023-12-10 13:09:48'),
(3, 'ERTTHY', '', '2023-12-10 13:16:55'),
(4, 'ERZERETR', '', '2023-12-10 13:17:23'),
(5, 'oooooooooooo', '', '2023-12-10 13:18:45'),
(6, 'zdqspineibfd', '', '2023-12-10 13:20:03'),
(7, '', '', '2024-02-07 17:43:33'),
(8, 'o', '', '2024-02-07 17:45:09'),
(9, 'oo', '', '2024-02-07 17:46:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `price` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `quantity` int NOT NULL,
  `product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ppthimg` varchar(255) NOT NULL,
  `lproduct` varchar(255) NOT NULL,
  `p-status` varchar(200) NOT NULL,
  `item` varchar(240) NOT NULL,
  `time` varchar(240) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1000028 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `price`, `quantity`, `product`, `description`, `keyword`, `title`, `status`, `ppthimg`, `lproduct`, `p-status`, `item`, `time`) VALUES
(1, '3000MAD', 2, 'phone', 'specy', 'android', 'Xiaomi', '', 'Assets/f.jpg', 'Xiaomi', '', 'phone', '0'),
(2, '100MAD', 20, 'Headphones', 'New', 'Music', 'Headphones', '', 'Assets/f.jpg', 'Headphones', '', '1', '0'),
(3, '2000MAD', 20, 'Computer', 'Laptop', 'Laptop', 'Computer', '', 'Assets/f.jpg', 'Lenovo', '', '2', '0'),
(4, '2000MAD', 20, 'Mouse', 'Last', 'Mouse', 'Mouse', '', 'Assets/f.jpg', 'Mouse', '', '3', '0');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int NOT NULL AUTO_INCREMENT,
  `link` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `EventnSlide` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `link`, `alt`, `EventnSlide`, `title`, `time`) VALUES
(1, '1\r\n', '2', 'https://images.pexels.com/photos/7527862/pexels-photo-7527862.jpeg?auto=compress&cs=tinysrgb&w=1600', 'dsfjdk', '2023-12-04 19:24:49'),
(2, 'SDQFSFGVPBN', 'KFD?GHLJ', 'https://www.w3schools.com/w3css/img_snowtops.jpg', 'SDINFGKFH', '2023-12-04 19:27:01'),
(3, '1\r\n', '2', 'https://www.w3schools.com/w3css/img_lights.jpg', 'dsfjdk', '2023-12-04 19:28:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT COMMENT 'Users id ',
  `role` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `remail` varchar(100) NOT NULL,
  `address` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `country` varchar(10) NOT NULL,
  `city` varchar(10) NOT NULL,
  `time` timestamp NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `fname`, `lname`, `phone`, `email`, `remail`, `address`, `password`, `password_hash`, `country`, `city`, `time`) VALUES
(2, 'Admin', 'ertuyuio', 'nksjdbc', 'isqjn', '312456789', 'iL@iL.com', '', '', 'FnwE5}Md9,^#gNV', '$2y$10$xsO8En2waMT8R002crMQpupQ9imyj4NLAZ194jwqzabDx87/CgHG2', 'Mars', 'mos', '2023-11-30 11:53:23'),
(3, '', 'aezrty', 'tryui', 'zertyu', '312456789', 'ertyy@dnksjf.com', '', '', 'FnwE5}Md9,^#gNV', '$2y$10$6Km2jtvNjaKc166kEIzOQOMPZcVZiaSFnOf4MWWLOrcvnRjIWdNzm', 'Mars', 'zerty', '2023-11-29 22:21:23');

--
-- Triggers `users`
--
DROP TRIGGER IF EXISTS `time`;
DELIMITER $$
CREATE TRIGGER `time` BEFORE INSERT ON `users` FOR EACH ROW SET NEW.time = CURRENT_TIMESTAMP
$$
DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
