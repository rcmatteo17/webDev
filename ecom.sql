-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2022 at 03:18 AM
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
-- Table structure for table `brand`
--

DROP TABLE IF EXISTS `brand`;
CREATE TABLE IF NOT EXISTS `brand` (
  `brand_id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_name` varchar(60) NOT NULL,
  `brand_description` text NOT NULL,
  `brand_image` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `prodcut_name` varchar(60) NOT NULL,
  `product_cost` double NOT NULL,
  `product_image` varchar(120) NOT NULL,
  `product_description` text NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(100) NOT NULL,
  `customer_contact` varchar(24) NOT NULL,
  `customer_password` varchar(32) NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `ord_cust_id` int(11) DEFAULT NULL,
  `ord_date` varchar(20) DEFAULT NULL,
  `ord_status` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`ord_id`),
  KEY `ord_cust_id` (`ord_cust_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ord_details`
--

DROP TABLE IF EXISTS `ord_details`;
CREATE TABLE IF NOT EXISTS `ord_details` (
  `ord_id` int(11) DEFAULT NULL,
  `ord_prd_id` int(11) DEFAULT NULL,
  `ord_quantity` int(11) DEFAULT NULL,
  `ord_price` int(11) DEFAULT NULL,
  KEY `ord_id` (`ord_id`),
  KEY `ord_prd_id` (`ord_prd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prd_details`
--

DROP TABLE IF EXISTS `prd_details`;
CREATE TABLE IF NOT EXISTS `prd_details` (
  `prd_id` int(11) DEFAULT NULL,
  `prd_name` varchar(100) DEFAULT NULL,
  `prd_price` double DEFAULT NULL,
  `prd_image` text,
  `prd_description` text,
  `prd_quantity` int(11) DEFAULT NULL,
  `prd_date` varchar(50) DEFAULT NULL,
  KEY `prd_id` (`prd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `prd_id` int(11) NOT NULL AUTO_INCREMENT,
  `prd_product_id` int(11) DEFAULT NULL,
  `prd_brand_id` int(11) DEFAULT NULL,
  `prd_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`prd_id`),
  KEY `prd_product_id` (`prd_product_id`),
  KEY `prd_brand_id` (`prd_brand_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
CREATE TABLE IF NOT EXISTS `purchases` (
  `purchase_id` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_prd_id` int(11) DEFAULT NULL,
  `purchase_qauntity` int(11) DEFAULT NULL,
  `purchase_cost_price` int(11) DEFAULT NULL,
  `purchase_sale_price` int(11) DEFAULT NULL,
  `purchase_date` varchar(35) DEFAULT NULL,
  `purchase_advance` int(11) DEFAULT NULL,
  `purchase_total` int(11) DEFAULT NULL,
  `purchase_balance` int(11) DEFAULT NULL,
  PRIMARY KEY (`purchase_id`),
  KEY `purchase_prd_id` (`purchase_prd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `sales_id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_ord_id` int(11) DEFAULT NULL,
  `sale_mod_payment` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`sales_id`),
  KEY `sale_ord_id` (`sale_ord_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

DROP TABLE IF EXISTS `sales_return`;
CREATE TABLE IF NOT EXISTS `sales_return` (
  `sale_return_id` int(11) NOT NULL AUTO_INCREMENT,
  `sale_return_sale_id` int(11) DEFAULT NULL,
  `sale_prd_id` int(11) DEFAULT NULL,
  `sale_return_quantity` int(11) DEFAULT NULL,
  `sale_return_date` varchar(25) DEFAULT NULL,
  `sale_return_cause_return` text,
  PRIMARY KEY (`sale_return_id`),
  KEY `sale_return_sale_id` (`sale_return_sale_id`),
  KEY `sale_prd_id` (`sale_prd_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

DROP TABLE IF EXISTS `vendor`;
CREATE TABLE IF NOT EXISTS `vendor` (
  `vendor_id` int(11) NOT NULL AUTO_INCREMENT,
  `vendor_name` varchar(100) NOT NULL,
  `vendor_contact` varchar(24) NOT NULL,
  `vendor_address` varchar(100) NOT NULL,
  PRIMARY KEY (`vendor_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
