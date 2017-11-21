-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 21, 2017 at 12:56 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `permalink`, `description`) VALUES
(6, 'Celana', 'celana', ''),
(7, 'Sweater/Jacket', 'sweaterjacket', ''),
(8, 'T-Shirt', 't-shirt', ''),
(9, 'Jumper', 'jumper', '');

-- --------------------------------------------------------

--
-- Table structure for table `confirmations`
--

CREATE TABLE `confirmations` (
  `id` int(10) NOT NULL,
  `sender_bank` varchar(30) DEFAULT NULL,
  `bank_account_name` varchar(30) NOT NULL,
  `receiver_bank` varchar(30) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmations`
--

INSERT INTO `confirmations` (`id`, `sender_bank`, `bank_account_name`, `receiver_bank`, `amount`, `payment_date`, `status`, `order_id`, `created`, `modified`) VALUES
(1, 'BCA', 'Ricky', 'BCA', 750000, '2017-07-17', 1, 0, NULL, NULL),
(2, 'BCA', 'Ricky', '0', 75000, '2017-07-23', 1, 8, '2017-07-23 17:00:53', NULL),
(3, 'Mandiri', 'Ricky', '0', 65000, '2017-07-23', 1, 7, '2017-07-23 17:02:26', NULL),
(4, 'BCA', 'Ricky', '0', 391500, '2017-07-27', 1, 15, '2017-07-24 17:36:41', NULL),
(5, 'Mandri', 'Ricky', '1', 482500, '2017-07-24', 1, 17, '2017-07-24 18:03:46', NULL),
(6, 'Mandri', 'Ricky', '0', 482500, '2015-02-04', 1, 16, '2017-07-24 18:19:54', NULL),
(7, 'BCA', 'Ricky', '0', 430500, '2017-07-28', 1, 22, '2017-07-27 20:37:04', NULL),
(8, 'BCA', 'User', '0', 130500, '2017-09-10', 1, 26, '2017-09-10 14:53:19', NULL),
(9, 'Mandiri', 'User2', '0', 665000, '2017-09-10', 1, 28, '2017-09-10 15:01:51', NULL),
(10, 'bri', 'dede', '0', 300000, '2017-09-10', 1, 30, '2017-09-10 16:20:47', NULL),
(11, 'BCA', 'Ricky', '0', 75000, '2017-09-12', 0, 31, '2017-09-12 12:20:11', NULL),
(12, 'Mandiri', 'Ricky', '0', 665000, '2017-09-13', 1, 62, '2017-09-13 18:45:57', NULL),
(13, 'bri', 'User', '0', 2992500, '2017-09-13', 0, 61, '2017-09-13 18:46:18', NULL),
(14, 'Mandiri', 'User', '0', 332500, '2017-09-14', 0, 60, '2017-09-13 18:46:49', NULL),
(15, 'Mandiri', 'User', '0', 332500, '2017-09-13', 0, 59, '2017-09-13 18:47:08', NULL),
(16, 'Mandiri', 'User', '0', 150000, '2017-03-30', 1, 72, '2017-09-13 19:27:19', NULL),
(17, 'Mandiri', 'User', '0', 150000, '2017-09-13', 1, 71, '2017-09-13 19:28:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cost`
--

CREATE TABLE `cost` (
  `city_id` int(10) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cost`
--

INSERT INTO `cost` (`city_id`, `city_name`, `cost`) VALUES
(1, 'DKI Jakarta', 9000),
(2, 'Bogor', 9000),
(3, 'Depok', 9000),
(4, 'Tangerang', 9000),
(5, 'Bekasi', 9000),
(6, 'Bandung', 15000),
(7, 'Yogyakarta', 17000),
(8, 'Surabaya', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `key` int(11) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `path` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `type`, `key`, `mime`, `description`, `path`, `created`, `modified`) VALUES
(31, 'slide', 33, 'image/jpeg', '*Simple Caption*', 'public/slides/distro-bloods_20160916_202000.jpg', '2013-05-25 13:03:19', '0000-00-00 00:00:00'),
(32, 'slide', 34, 'image/jpeg', '*Simple Caption*', 'public/slides/bisnis-distro.jpg', '2013-05-25 13:03:34', '0000-00-00 00:00:00'),
(34, 'slide', 35, 'image/jpeg', '0', 'public/slides/distro-solo.jpg', '2017-06-20 01:36:35', '0000-00-00 00:00:00'),
(39, 'product', 9, 'image/jpeg', 'Simple Sweater', 'public/products/2553835_046d1a59-207a-4776-8512-f5893b39e278.jpg', '2017-06-20 01:48:33', '0000-00-00 00:00:00'),
(42, 'product', 10, 'image/jpeg', 'Simple Sweater', 'public/products/unnamed_(1)-1.jpg', '2017-06-20 01:50:51', '0000-00-00 00:00:00'),
(44, 'product', 11, 'image/jpeg', 'PSD Jumper', 'public/products/1559-3945-large.jpg', '2017-07-23 12:58:09', '0000-00-00 00:00:00'),
(46, 'product', 12, 'image/jpeg', 'Simple Vest', 'public/products/unnamed-1.jpg', '2017-07-23 13:00:47', '0000-00-00 00:00:00'),
(50, 'product', 15, 'image/jpeg', '3SCH Astronaut', 'public/products/images_(19).jpg', '2017-07-23 13:07:22', '0000-00-00 00:00:00'),
(52, 'product', 16, 'image/jpeg', '3SCH NYC Blue', 'public/products/images_(16).jpg', '2017-07-23 13:08:30', '0000-00-00 00:00:00'),
(53, 'product', 21, 'image/jpeg', 'Converse Skate \'Cons\' Black Sweater', 'public/products/converse-cons-skate-mens-hoodie.jpg', '2017-09-13 20:13:27', '0000-00-00 00:00:00'),
(54, 'product', 0, 'image/jpeg', 'Volcom Frickin Chino', 'public/products/volcom-frickin-modern-stretch-chino-pants-dark-khaki.jpg', '2017-09-13 20:15:36', '0000-00-00 00:00:00'),
(55, 'product', 22, 'image/jpeg', 'Volcom Frickin Chino', 'public/products/volcom-frickin-modern-stretch-chino-pants-dark-khaki.jpg', '2017-09-13 20:15:47', '0000-00-00 00:00:00'),
(56, 'product', 23, 'image/jpeg', 'DC Skate Chino Pants Royal Blue', 'public/products/adynp03031_coreallseasonpant,v_btl0_frt1.jpg', '2017-09-13 20:17:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `zip` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `email`, `password`, `full_name`, `address`, `phone`, `zip`, `level`, `status`, `last_login`, `created`, `modified`, `cost`) VALUES
(1, 'ricky@localhost.net', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ricky', 'Perumahan', '080899977', 0, 0, 1, '2017-08-04 09:00:03', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(3, 'user@localhost.net', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'aspdpasd', '00909', 9009, 0, 1, '2017-10-03 09:08:34', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9000),
(4, 'user1@localhost.net', 'ee11cbb19052e40b07aac0ca060c23ee', 'User', 'Perum\n', '080999', 88888, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(5, 'user21@localhost.net', 'ee11cbb19052e40b07aac0ca060c23ee', 'Ricky', 'Perumahan Mega Regency', '087879558523', 101011, 0, 1, '2017-07-23 13:14:15', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(6, 'user21@localhost.net', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'Perumahan Mega', '08777779', 101010, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0),
(16, 'ricky.aditya181@ymail.com', 'c5cb6d1e4b7ce29be0aff7a0a8f9ca1b', 'Ricky Aditya', 'Perumahan Mega Regency Blok H6 no.9', '08787998523', 17332, 0, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `order_date` date NOT NULL,
  `payment_deadline` date DEFAULT NULL,
  `payment_method` varchar(30) DEFAULT NULL,
  `user_id` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `code`, `total`, `order_date`, `payment_deadline`, `payment_method`, `user_id`, `status`, `created`, `modified`) VALUES
(4, '7AWBPZZ9', 65000, '2017-07-01', '2017-07-08', '1', 9, 0, '2017-07-01 00:00:00', NULL),
(5, 'AZ2VBGON', 65000, '2017-07-01', '2017-07-08', '1', 9, 0, '2017-07-01 00:00:00', NULL),
(6, 'X39HHMZO', 65000, '2017-07-03', '2017-07-10', '1', 9, 0, '2017-07-03 00:00:00', NULL),
(7, 'A7NE756B', 65000, '2017-07-05', '2017-07-12', '1', 1, 1, '2017-07-05 00:00:00', NULL),
(8, '2J3K9RDV', 75000, '2017-07-05', '2017-07-12', '1', 1, 1, '2017-07-05 00:00:00', NULL),
(9, 'ATZGM4VN', 65000, '2017-07-07', '2017-07-14', '1', 3, 0, '2017-07-07 00:00:00', NULL),
(10, 'BY5MBP4C', 75000, '2017-07-07', '2017-07-14', '1', 3, 0, '2017-07-07 00:00:00', NULL),
(11, 'ZVXNA7N1', 815000, '2017-07-23', '2017-07-30', '1', 3, 0, '2017-07-23 00:00:00', NULL),
(15, 'RBSJZEGX', 391500, '2017-07-23', '2017-07-30', '1', 1, 1, '2017-07-23 00:00:00', NULL),
(16, '5ZHFWA9S', 482500, '2017-07-24', '2017-07-31', '1', 1, 1, '2017-07-24 00:00:00', NULL),
(17, 'EDGCSDOA', 482500, '2017-07-24', '2017-07-31', '1', 1, 1, '2017-07-24 00:00:00', NULL),
(18, '3MVZ0JSM', 150000, '2017-07-24', '2017-07-31', '1', 1, 0, '2017-07-24 00:00:00', NULL),
(19, 'GVFJW1BP', 130500, '2017-07-24', '2017-07-31', '1', 1, 0, '2017-07-24 00:00:00', NULL),
(20, '2206H1GW', 130500, '2017-07-27', '2017-08-03', '1', 1, 0, '2017-07-27 00:00:00', NULL),
(21, 'CZ6TPTJ0', 130500, '2017-07-27', '2017-08-03', '1', 1, 0, '2017-07-27 00:00:00', NULL),
(22, 'VDYKBT76', 430500, '2017-07-27', '2017-08-03', '1', 1, 1, '2017-07-27 00:00:00', NULL),
(23, '29T3XCCT', 150000, '2017-09-10', '2017-09-17', '1', 3, 0, '2017-09-10 00:00:00', NULL),
(24, 'P1RAK5SC', 130000, '2017-09-10', '2017-09-17', '1', 3, 0, '2017-09-10 00:00:00', NULL),
(25, 'AV1V3ZMG', 130000, '2017-09-10', '2017-09-17', '1', 3, 0, '2017-09-10 00:00:00', NULL),
(26, '2BMT76KG', 130500, '2017-09-10', '2017-09-17', '1', 3, 1, '2017-09-10 00:00:00', NULL),
(27, 'CSJTNYG7', 130500, '2017-09-10', '2017-09-17', '1', 3, 0, '2017-09-10 00:00:00', NULL),
(28, 'TZ5VOO60', 665000, '2017-09-10', '2017-09-17', '1', 3, 1, '2017-09-10 00:00:00', NULL),
(29, 'Z4TAZW3S', 150000, '2017-09-10', '2017-09-17', '1', 3, 0, '2017-09-10 00:00:00', NULL),
(30, 'MVZ6DZG3', 300000, '2017-09-10', '2017-09-17', '1', 1, 1, '2017-09-10 00:00:00', NULL),
(31, '74HP3RJX', 75000, '2017-09-12', '2017-09-19', '1', 3, 4, '2017-09-12 00:00:00', NULL),
(32, '5XTKGP8X', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(33, 'SK1AY2PZ', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(34, '0D6R2FTZ', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(35, '8SEEF4JT', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(36, 'WZ1H8N7D', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(37, 'W13JRFDA', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(38, 'FV7J8OTW', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(39, 'W8894KXG', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(40, 'KBGNNYSJ', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(41, '4RFJE3ZZ', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(42, 'XWKM94VN', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(43, 'SZZNWE3B', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(44, 'TYKMGKTN', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(45, '5CZ9O3B4', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(46, 'NKH3JP39', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(47, 'GPRNMZ9X', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(48, '8J87GC7M', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(49, '5K782ZZJ', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(50, 'S5D9AKR9', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(51, '01WJHDHM', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(52, '1ZH2JT0R', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(53, 'MMTJY2RD', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(54, '0CP8Y0DP', 150000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(55, '3ZGEHOEY', 159000, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(56, 'Z0VD13ZH', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(57, 'PT44VEAS', 332500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(58, 'M5MVOOB6', 332500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(59, 'MYHKH8NH', 332500, '2017-09-13', '2017-09-20', '1', 3, 4, '2017-09-13 00:00:00', NULL),
(60, 'OSPNRTFT', 332500, '2017-09-13', '2017-09-20', '1', 3, 4, '2017-09-13 00:00:00', NULL),
(61, '6BGF4KX9', 2992500, '2017-09-13', '2017-09-20', '1', 3, 4, '2017-09-13 00:00:00', NULL),
(62, 'V9TSD0Z6', 665000, '2017-09-13', '2017-09-20', '1', 3, 1, '2017-09-13 00:00:00', NULL),
(67, 'VDWT821N', 332500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(68, '9MYYJCMM', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(69, '6Z7AWFTR', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(70, '4OJTNORF', 130500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL),
(71, 'V5BKPCES', 150000, '2017-09-13', '2017-09-20', '1', 3, 1, '2017-09-13 00:00:00', NULL),
(72, '3X1EEJZS', 150000, '2017-09-13', '2017-09-20', '1', 3, 1, '2017-09-13 00:00:00', NULL),
(73, 'M9F9FZW7', 332500, '2017-09-13', '2017-09-20', '1', 3, 0, '2017-09-13 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `code` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `size` varchar(3) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount_percent` double DEFAULT NULL,
  `net_price` double NOT NULL,
  `order_id` int(10) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `cost` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `code`, `name`, `size`, `qty`, `price`, `discount_percent`, `net_price`, `order_id`, `city_id`, `cost`) VALUES
(23, 'SW002', 'Simple Sweater', 'M', 1, 130500, 10, 130500, 21, 0, 0),
(24, 'SW001', 'Hoody Jacket', 'M', 1, 150000, 0, 150000, 22, 0, 0),
(25, 'SW002', 'Simple Sweater', 'XL', 1, 130500, 10, 130500, 22, 0, 0),
(26, 'SW001', 'Hoody Jacket', 'L', 1, 150000, 0, 150000, 22, 0, 0),
(27, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 23, 0, 0),
(29, 'T001', 'Tees', 'S', 2, 65000, 0, 65000, 25, 0, 0),
(30, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 26, 0, 0),
(31, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 27, 0, 0),
(32, 'VT0002', 'Simple Vest', 'S', 2, 332500, 5, 332500, 28, 0, 0),
(33, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 29, 0, 0),
(34, 'SW001', 'Hoody Jacket', 'S', 2, 150000, 0, 150000, 30, 0, 0),
(35, 'T002', 'Simple Tees', 'S', 1, 75000, 0, 75000, 31, 0, 0),
(36, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 32, 0, 0),
(37, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 33, 0, 0),
(38, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 34, 0, 0),
(39, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 35, 0, 0),
(40, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 37, 0, 0),
(41, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 38, 0, 0),
(42, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 39, 0, 0),
(43, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 40, 0, 0),
(44, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 41, 0, 0),
(45, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 42, 0, 0),
(46, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 43, 0, 0),
(47, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 44, 0, 0),
(48, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 45, 0, 0),
(49, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 46, 0, 0),
(50, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 47, 0, 0),
(51, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 48, 0, 0),
(52, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 49, 0, 0),
(53, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 159000, 0, 0, 0),
(54, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 0, 0, 0),
(55, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 0, 0, 0),
(56, 'VT0002', 'Simple Vest', 'S', 1, 332500, 5, 332500, 0, 0, 0),
(57, 'VT0002', 'Simple Vest', 'S', 1, 332500, 5, 332500, 0, 0, 0),
(58, 'VT0002', 'Simple Vest', 'S', 1, 332500, 5, 332500, 0, 0, 0),
(59, 'VT0002', 'Simple Vest', 'S', 1, 332500, 5, 332500, 0, 0, 0),
(60, 'VT0002', 'Simple Vest', 'S', 9, 332500, 5, 332500, 0, 0, 0),
(61, 'VT0002', 'Simple Vest', 'S', 2, 332500, 5, 332500, 0, 0, 0),
(62, 'VT0002', 'Simple Vest', 'S', 7, 332500, 5, 332500, 0, 0, 0),
(63, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 0, 0, 0),
(64, 'SW001', 'Hoody Jacket', 'S', 20, 150000, 0, 150000, 0, 0, 0),
(65, 'SW001', 'Hoody Jacket', 'S', 79, 150000, 0, 150000, 0, 0, 0),
(66, 'VT0002', 'Simple Vest', 'M', 1, 332500, 5, 332500, 0, 0, 0),
(67, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 0, 0, 0),
(68, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 0, 0, 0),
(69, 'SW002', 'Simple Sweater', 'S', 1, 130500, 10, 130500, 0, 0, 0),
(70, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 71, 0, 0),
(71, 'SW001', 'Hoody Jacket', 'S', 1, 150000, 0, 150000, 72, 0, 0),
(72, 'VT0002', 'Simple Vest', 'S', 1, 332500, 5, 332500, 73, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `permalink`, `title`, `body`, `status`, `created`, `modified`) VALUES
(6, 'tentang-kami', 'Tentang Kami', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>', 1, '2012-05-15 19:53:52', '2017-07-23 13:10:52'),
(7, 'cara-belanja', 'Cara Belanja', '<p>Ini adalah cara berbelanja di toko kita</p>', 1, '2012-05-15 19:54:41', '2017-07-23 13:10:45'),
(8, 'hubungi-kami', 'Hubungi Kami', '<p>Main Address : <strong>admin@localhost.net</strong></p>', 1, '2012-05-16 22:52:06', '2017-07-23 13:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `code` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `permalink` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `discount_percent` double NOT NULL,
  `net_price` double NOT NULL,
  `description` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `category_id` int(11) NOT NULL,
  `size` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `name`, `permalink`, `price`, `discount_percent`, `net_price`, `description`, `stock`, `status`, `category_id`, `size`) VALUES
(9, 'SW001', 'Hoody Jacket', 'hoody-jacket', 150000, 0, 150000, '<p><span style=\"color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: #f5f5f5;\">Hoody/Jumper Unisex, J-Fleece, kualitas premium standar Distro Bandung.</span></p>', 98, 1, 7, NULL),
(10, 'SW002', 'Simple Sweater', 'simple-sweater', 145000, 10, 130500, '<p><span style=\"color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: #f5f5f5;\">Long Sleeve O-Neck Unisex, J-Fleece, kualitas premium standar Distro Bandung.</span></p>', 2, 1, 7, NULL),
(11, 'JP001', 'PSD Jumper', 'psd-jumper', 125000, 0, 125000, '<p><span style=\"color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: #f5f5f5;\">Long Sleeve O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.</span></p>', 8, 1, 9, NULL),
(12, 'VT0002', 'Simple Vest', 'simple-vest', 350000, 5, 332500, '<p><span style=\"color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: #f5f5f5;\">Black Vest Zipped Hoody Men\'s, Fleece, kualitas premium standar Distro Bandung.</span></p>', 98, 1, 7, NULL),
(15, 'TS0008', '3SCH Astronaut', '3sch-astronaut', 67000, 0, 67000, '<p><span style=\"color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px; background-color: #f5f5f5;\">Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.</span></p>', 90, 1, 8, NULL),
(16, 'TS0012', '3SCH NYC Blue', '3sch-nyc-blue', 70000, 0, 70000, '<p><span style=\"white-space: pre;\"> </span><span style=\"background-color: #f5f5f5; color: #333333; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 12px;\">Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Dis', 8, 1, 8, NULL),
(17, '', '', '', 0, 0, 0, '', -1, 0, 0, NULL),
(18, '', '', '', 0, 0, 0, '', -1, 0, 0, NULL),
(19, '', '', '', 0, 0, 0, '', -1, 0, 0, NULL),
(20, '', '', '', 0, 0, 0, '', -1, 0, 0, NULL),
(21, 'SW007', 'Converse Skate \'Cons\'', 'converse-skate-cons', 350000, 0, 350000, '<h3>Black Cons Sweater Colored Logo for all seasons</h3>', 10, 1, 7, NULL),
(22, 'LP001', 'Volcom Frickin Chino', 'volcom-frickin-chino', 500000, 0, 500000, '<h3>Chino Pants Volcom Khaki Stretch. Best for skates.</h3>', 26, 1, 6, NULL),
(23, 'LP002', 'DC Skate Chino Pants', 'dc-skate-chino-pants', 530000, 5, 503500, '<h3>Now DC Shoes produces chino pants for all skaters. Best suit for skaters.</h3>\n<p>&nbsp;</p>', 10, 1, 6, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `description`) VALUES
(1, 'paginationLimit', '10', 'Global pagination limit'),
(2, 'imageAllowed', 'gif|jpg|png|jpeg', ''),
(3, 'maxImageSize', '1500000', ''),
(4, 'Order.DueDate', '7', 'Days payment due'),
(5, 'Bank.Name', 'BCA,Mandiri', 'Bank name that receive transfer from customer'),
(6, 'Email.Admin', 'admin@localhost.net', 'Email Admin');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `description_en` text NOT NULL,
  `position` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `title_en`, `description_en`, `position`, `status`) VALUES
(33, 'Our Collection', '*Simple Caption*', '', '', 34, 1),
(34, 'Our Collection', '*Simple Caption*', '', '', 33, 1),
(35, 'Simple Slide', '*Simple Caption*', '', '', 35, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `zip` int(11) NOT NULL,
  `level` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `full_name`, `address`, `phone`, `zip`, `level`, `status`, `last_login`, `created`, `modified`) VALUES
(1, 'admin@localhost.net', '21232f297a57a5a743894a0e4a801fc3', 'Ricky Aditya', 'Perum. Mega Regency', '087879558523', 17330, 1, 1, '2017-09-10 16:15:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmations`
--
ALTER TABLE `confirmations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cost`
--
ALTER TABLE `cost`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `confirmations`
--
ALTER TABLE `confirmations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `cost`
--
ALTER TABLE `cost`
  MODIFY `city_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
