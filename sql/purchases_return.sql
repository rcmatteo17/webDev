-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 11, 2022 at 12:03 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `purchases_return`
--

DROP TABLE IF EXISTS `purchases_return`;
CREATE TABLE IF NOT EXISTS `purchases_return` (
  `purchase_return_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_return_purchase_id` int(11) DEFAULT NULL,
  `purchase_return_qauntity` int(11) DEFAULT NULL,
  `purchase_return_date` varchar(35) DEFAULT NULL,
  `purchase_return_description` text,
  PRIMARY KEY (`purchase_return_id`),
  KEY `purchase_return_purchase_id` (`purchase_return_purchase_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
