-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2021 at 10:29 PM
-- Server version: 8.0.22
-- PHP Version: 7.3.21

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(3, 'ranulf', 'ranulfnoronha@gmail.com', '123456789', '0');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `brand_title` text NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(6, 'Manchester United'),
(7, 'Adidas');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int NOT NULL AUTO_INCREMENT,
  `p_id` int NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int DEFAULT NULL,
  `qty` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(13, 4, '::1', 5, 1),
(23, 7, '::1', 7, 1),
(24, 8, '::1', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int NOT NULL AUTO_INCREMENT,
  `cat_title` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(3, 'Men'),
(7, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `country` varchar(20) NOT NULL,
  `subject` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `qty` int NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed'),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed'),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed'),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_cat` int NOT NULL,
  `product_brand` int NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int NOT NULL,
  `product_qty` int NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `fk_product_cat` (`product_cat`),
  KEY `fk_product_brand` (`product_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(7, 3, 6, 'Mens Home jersey', 1000, 2500, 'Manchester United Home jersey ', 'product9.jpg', 'jersey'),
(8, 3, 6, 'Lingard', 500, 2500, 'Jesse Lingard Home jersey', 'product8.jpg', 'jersey'),
(9, 3, 6, 'Lukakku ', 500, 635, 'Romelu Lukaku Home jersey', 'product4.jpg', 'jersey'),
(10, 3, 7, 'Zne jacket red', 100, 5600, 'Adidas', 'manchester-united-zne-jacket-red.jpg', 'men, hoodie'),
(13, 3, 6, 'Rashford ', 1000, 2500, 'Rashford printed jersey', 'product8.jpg', 'jersey'),
(14, 3, 6, 'Martial ', 500, 635, 'Marshal Printed Jersey', 'product6.jpg', 'jersey'),
(15, 3, 6, 'Mata ', 250, 320, 'Mata Home jersey', 'product3.jpg', 'jersey'),
(20, 3, 6, 'Mason', 1000, 2500, 'manchester-united-home-shirt-2020-21-with-greenwood', 'manchester-united-home-shirt-2020-21-with-greenwood.jpg', 'men'),
(23, 3, 6, 'Bruno', 1000, 2500, 'Bruno', 'Bruno.jpg', 'mens'),
(25, 7, 6, 'Maguire Women', 500, 5600, 'Maguire Women', 'Maguire_Women.jpg', 'women'),
(30, 3, 6, 'Matial ', 500, 2500, 'Mataial ', 'product4.jpg', 'men'),
(35, 3, 6, 'Alexis', 500, 120, 'Alexis sanchez', 'product1.jpg', 'men'),
(36, 7, 6, 'Women Practice Kit', 250, 635, 'manchester-united-hrfc-shirt-womens', 'manchester-united-hrfc-shirt-womens.jpg', 'women'),
(37, 7, 7, 'Adidas hooded jacket-haze-coral', 500, 123, 'manchester-united-adidas-hooded-padded-jacket-haze-coral-womens', 'manchester-united-adidas-hooded-padded-jacket-haze-coral-womens.jpg', 'women , hoddie'),
(38, 7, 6, 'Manchester United 2020-21', 1000, 320, 'manchester-united-cup-home-shirt-2020-21-womens-with-heath-77', 'manchester-united-cup-home-shirt-2020-21-womens-with-heath-77.jpg', 'women'),
(39, 7, 7, 'Adidas haze-coral-womens', 125, 635, 'manchester-united-adidas-t-shirt-haze-coral-womens', 'manchester-united-adidas-t-shirt-haze-coral-womens.jpg', 'women'),
(40, 7, 7, 'Adidas 3-stripe t-shirt womens', 100, 5600, 'manchester-united-adidas-3-stripe-t-shirt-white-womens', 'manchester-united-adidas-3-stripe-t-shirt-white-womens.jpg', 'women'),
(41, 7, 7, 'Adidas hooded jacket womens', 250, 320, 'manchester-united-adidas-hooded-padded-jacket-black-womens', 'manchester-united-adidas-hooded-padded-jacket-black-womens.jpg', 'hoodie,women'),
(42, 3, 6, 'Manchester united New year ', 500, 5600, 'manchester-united-chinese-new-year-jersey', 'manchester-united-chinese-new-year-jersey.jpg', 'men'),
(43, 3, 7, 'Training warm top orange.jpg', 600, 320, 'manchester-united-training-warm-top-orange', 'manchester-united-training-warm-top-orange.jpg', 'men'),
(44, 3, 7, 'Adidas-hooded jacket-scarlet', 500, 5600, 'manchester-united-adidas-hooded-padded-jacket-scarlet-mens', 'manchester-united-adidas-hooded-padded-jacket-scarlet-mens.jpg', 'hoodie,men'),
(45, 3, 6, 'Training jacket white', 100, 635, 'manchester-united-training-presentation-jacket-white', 'manchester-united-training-presentation-jacket-white.jpg', 'men'),
(46, 7, 7, 'Crew sweater grey', 500, 120, 'manchester-united-adidas-3-stripe-crew-sweater-grey-heather-womens.jpg', 'manchester-united-adidas-3-stripe-crew-sweater-grey-heather-womens.jpg', 'women'),
(47, 3, 6, 'European training jacket', 500, 635, 'manchester-united-european-training-presentation-jacket-purple', 'manchester-united-european-training-presentation-jacket-purple.jpg', 'men');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

DROP TABLE IF EXISTS `user_info`;
CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'ranulf', 'noronha', 'ranulfnoronha@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1234567890', 'montreal', 'montreal'),
(4, 'Rashford', 'Marcus', 'ranulf@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(5, 'sancho', 'Marcus', 'ranulf1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(6, 'ranulf', 'noronha', 'ranulfnoronha1@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(7, 'wqerwteyrut', 'retyu', 'test@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(8, 'Rashford', 'Marcus', 'r@gm.com', '9fab6755cd2e8817d3e73b0978ca54a6', '1234567890', 'abc', '1234'),
(9, 'wqerwteyrut', 'retyu', 'ranulfnoronha10@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(10, 'wqerwteyrut', 'Marcus', 'ranulfnoronha78@gmail.com', '9fab6755cd2e8817d3e73b0978ca54a6', '5148065205', 'abc', '1234'),
(11, 'Rashford', 'Marcus', 'ranulfnoronha12@gmail.com', '6eea9b7ef19179a06954edd0f6c05ceb', '5148065205', 'abc', '1234'),
(12, 'Rashford', 'Marcus', 'ranulfnoronha123@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(13, 'Rashford', 'Marcus', 'ranulfnoronh123a@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234'),
(14, 'Rashford', 'Marcus', 'ranulfnoronha7238@gmail.com', '25f9e794323b453885f5181f1b624d0b', '5148065205', 'abc', '1234');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_brand` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `fk_product_cat` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
