-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2022 at 11:56 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`product_id`, `prodcut_name`, `product_cost`, `product_image`, `product_description`) VALUES
(1, 'Brooks Glycerin 19', 180, '', 'Step into your softest run ever. With plenty of super soft DNA LOFT cushioning underfoot, the Glycerin 19 delivers premium comfort mile after mile. More DNA LOFT than ever for extreme underfoot softness. Updated materials in the mesh upper provide a better fit'),
(2, 'FZ6R Lams Approved', 6000, '', 'A rider in the market for a practical 600cc bike doesn’t have to compromise performance or style to get value. The FZ6R is a great combination of performance, handling, and exciting sport bike style, but also with a low seat height that’s both adjustable to fit a wider variety of riders and also narrower where it counts to make it even easier to put both feet on the ground.\r\nThe engine delivers smooth power just the way today’s rider needs it, providing brisk acceleration with plenty of torque that makes it a pleasure to get around town, with plenty in reserve for when you want more. The FZ6R is fuel injected and tuned for outstanding low- to mid-rpm engine performance.\r\nEven if your primary goal is commuting to school or work, you want to be able to get out and have fun riding some twisty back roads. The diamond-shaped frame, made of high-tensile steel pipes using the engine as a structural member of the chassis, becomes the foundation for handling performance. It’s designed to provide the right rigidity balance to contribute to smooth cornering performance.'),
(3, 'Mailbox', 100, '', 'ono'),
(4, '35\" Asus Monitor', 675, '', 'Barely used'),
(5, 'Black Court Shoes ', 0, '', 'Size 6.5'),
(6, '2013 Subaru Liberty', 16000, '', 'Great first car, never thrashed'),
(7, '2012 Nissan Dualis', 14000, '', 'P plate approved car, 1 owner.'),
(8, 'Phenix Ski Overalls', 45, '', 'Like new, barely used');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
