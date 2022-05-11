-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2022 at 11:57 PM
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
-- Table structure for table `nav`
--

DROP TABLE IF EXISTS `nav`;
CREATE TABLE IF NOT EXISTS `nav` (
  `nav_id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_title` varchar(50) NOT NULL,
  `nav_link` varchar(200) NOT NULL,
  `nav_description` text NOT NULL,
  `nav_status` varchar(50) NOT NULL,
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nav`
--

INSERT INTO `nav` (`nav_id`, `nav_title`, `nav_link`, `nav_description`, `nav_status`) VALUES
(1, 'Home', '', 'Super Value Deal. Save the planet and your money. Shop Now', 'Y'),
(2, 'Shop', '', 'Featured Pre-Loved Products\r\nThe best of the Corps\' second hand items', 'Y'),
(3, 'About', '', 'Who are we?\r\nWe represent Academy Classifieds, ADFA\'s very own marketplace for buy, swap and sell.\r\n\r\nContact the store owners to become a seller or a trader and get rid of those items before moving day.', 'Y'),
(4, 'Contact', '', 'Visit ADFA or contact us today\r\nAcademy Details\r\n1 Northcott Drive, Campbell, ACT\r\n\r\nz5308054@ad.unsw.edu.au\r\n\r\n+61 0412 345 678\r\n\r\nMonday to Friday: 0730 - 1630', 'Y'),
(5, 'Deals', '', 'Promotions, Deals, and Shipping', 'Y'),
(6, 'Cart', '', 'Checkout Now!', 'Y');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
