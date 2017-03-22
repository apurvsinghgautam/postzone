-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql6.freemysqlhosting.net
-- Generation Time: Nov 13, 2016 at 06:10 PM
-- Server version: 5.5.49-0ubuntu0.14.04.1
-- PHP Version: 5.3.28

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sql6144371`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE IF NOT EXISTS `logintb` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`id`, `name`, `mobile`, `password`, `reg_date`) VALUES
(3, 'Apurv', '9345675500', 'apurvsingh1234', '2016-11-08 15:08:26'),
(5, 'Avibarfa', '78345754203', 'abc123', '2016-11-11 06:24:06'),
(6, 'AVINASH', '91796845919', 'guru98', '2016-11-13 14:50:45'),
(7, 'data', '1234', '0000', '2016-11-13 15:01:27'),
(8, 'data', '1234', '0000', '2016-11-13 15:04:00'),
(9, 'data', '1234', '0000', '2016-11-13 15:04:28'),
(10, 'babu', '877', '9009', '2016-11-13 15:04:46'),
(11, 'babu', '877', '9009', '2016-11-13 15:05:21'),
(12, 'babu', '877', '9009', '2016-11-13 15:06:01'),
(13, 'babu', '877', '9009', '2016-11-13 15:06:27'),
(14, 'Saurabh', '99989235310', 'lalalala', '2016-11-13 15:32:19'),
(15, 'babumu', '000', '0000', '2016-11-13 16:06:53'),
(16, 'babumu', '000', '0000', '2016-11-13 16:07:07'),
(17, 'babumu', '000', '0000', '2016-11-13 16:08:58'),
(18, 'babumu', '000', '0000', '2016-11-13 16:10:30'),
(19, 'babumu', '000', '0000', '2016-11-13 16:10:50'),
(20, 'babumu', '000', '0000', '2016-11-13 16:11:04'),
(21, 'babumu', '000', '0000', '2016-11-13 16:11:26'),
(22, 'babumu', '000', '0000', '2016-11-13 16:11:35'),
(23, 'babumu', '000', '0000', '2016-11-13 16:11:42'),
(24, 'babumu', '000', '0000', '2016-11-13 16:11:48'),
(25, 'babumu', '000', '0000', '2016-11-13 16:12:13'),
(26, 'babumu', '000', '0000', '2016-11-13 16:12:29'),
(27, 'babumu', '000', '0000', '2016-11-13 16:12:51'),
(28, 'babumu', '000', '0000', '2016-11-13 16:13:04'),
(29, 'babumu', '000', '0000', '2016-11-13 16:13:32'),
(30, 'babumu', '000', '0000', '2016-11-13 16:13:42'),
(31, 'babumu', '000', '0000', '2016-11-13 16:14:03'),
(32, 'babumu', '000', '0000', '2016-11-13 16:14:15'),
(33, 'babumu', '000', '0000', '2016-11-13 16:14:20'),
(34, 'babumu', '000', '0000', '2016-11-13 16:15:53'),
(35, 'babumu', '000', '0000', '2016-11-13 16:16:25'),
(36, 'babumu', '000', '0000', '2016-11-13 16:16:31'),
(37, 'babumu', '000', '0000', '2016-11-13 16:16:40'),
(38, 'babumu', '000', '0000', '2016-11-13 16:16:57'),
(39, 'babumu', '000', '0000', '2016-11-13 16:17:06'),
(40, 'babumu', '000', '0000', '2016-11-13 16:17:14'),
(41, 'babumu', '000', '0000', '2016-11-13 16:17:19'),
(42, 'babumu', '000', '0000', '2016-11-13 16:17:28'),
(43, 'babumu', '000', '0000', '2016-11-13 16:17:51'),
(44, 'babumu', '000', '0000', '2016-11-13 16:18:12'),
(45, 'babumu', '000', '0000', '2016-11-13 16:18:36'),
(46, 'babumu', '000', '0000', '2016-11-13 16:18:45'),
(47, 'babumu', '000', '0000', '2016-11-13 16:18:59'),
(48, 'babumu', '000', '0000', '2016-11-13 16:21:42'),
(49, 'Rushin', '77092475373', 'avinash', '2016-11-13 17:15:47'),
(50, 'Adarsh', '75422544120', 'bhaibhai', '2016-11-13 18:11:34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
