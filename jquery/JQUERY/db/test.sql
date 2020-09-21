-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2015 at 02:12 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `delete` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `image1`, `image2`, `delete`) VALUES
(1, './uploades/medium/3391420639364.jpg', './uploades/small/3391420639364.jpg', 0),
(2, './uploades/medium/7291420639563.jpg', './uploades/small/7291420639563.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `tech` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `tech`, `email`, `city`, `address`, `status`) VALUES
(1, 'Manish', 'Carpenter', 'PHP', 'manishcrpntr2@gmail.com', 'Karad', 'testing', 0),
(2, 'Meenesh', 'Jain', 'rrrrrr', 'j.meenesh@gmail.com', 'Pune', '139 B Clerk colony indore', 0),
(3, 'yogesh', 'lalwani', 'Sr', 'yogesh@gmail.com', 'Karad', 'test', 0),
(4, 'test', 'dd', 'ee', 'test@gmail.com', 'Satara', 'ffff', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
