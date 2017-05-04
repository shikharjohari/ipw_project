-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2016 at 05:33 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoopingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL,
  `mime` varchar(255) NOT NULL,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `internet_shop`
--

CREATE TABLE IF NOT EXISTS `internet_shop` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `img` varchar(32) COLLATE utf8_unicode_ci DEFAULT '',
  `name` varchar(64) COLLATE utf8_unicode_ci DEFAULT '',
  `description` text COLLATE utf8_unicode_ci,
  `price` double DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `img` (`img`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `internet_shop`
--

INSERT INTO `internet_shop` (`id`, `img`, `name`, `description`, `price`) VALUES
(3, '3.jpg', 'Interstellar tanya', 'Sci-fi', 250),
(4, '4.jpg', 'Fan', 'Drama', 250),
(5, '5.jpg', 'Avengers', 'Action', 250);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `name`, `email`, `subject`, `message`) VALUES
(19, 'Anya Pruthi', 'anyapruthi@gmail.com', 'jdkcxb', 'hellojwjasd'),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, 'Anya Pruthi', 'anyapruthi@gmail.com', 'koijo', 'jnjnk'),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, 'Rish', '123', 'Xyz', 'test'),
(27, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `confirmation` varchar(30) NOT NULL,
  `total` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `qty`, `confirmation`, `total`) VALUES
(51, 'Batman Vs Superman', 2, 'PFZN-4FM', '500'),
(52, 'Kapoor and sons', 5, 'DOG-FCC', '1250'),
(53, 'Kapoor and sons', 12, 'CO-OLU', '3000'),
(54, 'Batman Vs Superman', 5, 'BKV-KYS', '1250'),
(55, 'Batman Vs Superman', 3, 'ZQR-0UF', '750'),
(56, 'Fan', 5, 'VELD-KCZ', '1250'),
(57, 'Fan', 12, 'Q-ZYW', '3000'),
(59, 'Fan', 12, 'AWFY-HGG', '250'),
(60, 'Fan', 0, 'GIKU-RH6', '250'),
(61, 'Fan', 12, 'MQRE-FXF', '3000'),
(62, 'Fan', 50, 'MFZ-M2X', '12500'),
(63, 'Fan', 1, 'VTV-MFB', '250'),
(64, 'Fan', 6, 'LXP-602', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Name` varchar(30) NOT NULL,
  `Reg_no` varchar(10) NOT NULL,
  `Room no` varchar(15) NOT NULL,
  `Phone no` int(10) NOT NULL,
  PRIMARY KEY (`Reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `reservation_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(20) NOT NULL,
  PRIMARY KEY (`reservation_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `firstname`, `lastname`, `city`, `address`, `email`, `contact`) VALUES
(39, '123', '123', 'Delhi', '38', 'ri@gmail.com', 99),
(38, 'Rishabh', 'Thakur', 'Delhi', '38, Friends Apartments, Plot N', 'rishabhmthakur2@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `position` varchar(45) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `position`) VALUES
(1, 'rishabh', 'admin', 'head'),
(2, 'anya', 'anya', 'adsss');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
