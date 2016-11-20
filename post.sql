-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: sql6.freemysqlhosting.net
-- Generation Time: Nov 13, 2016 at 06:11 PM
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
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nm` varchar(25) NOT NULL,
  `newfeed` varchar(150) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `nm`, `newfeed`, `reg_date`) VALUES
(33, 'Avinash', 'hello how are you', '2016-11-11 07:43:16'),
(34, 'Avibarfa', 'Hello World', '2016-11-11 07:43:39'),
(35, 'Avinash', 'Hello', '2016-11-13 14:14:46'),
(37, 'AVINASH', 'we have done one more mini project', '2016-11-13 14:58:56'),
(38, 'Saurabh', 'mera prn khatam ho gaya..!!!!!!!!!!!!!!!!!!!!!!!\r\n', '2016-11-13 15:33:08'),
(39, 'Rushin', 'Hi guys...!!\r\n', '2016-11-13 17:16:26'),
(40, 'Avibarfa', 'Hello Everyone How are you', '2016-11-13 18:10:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
