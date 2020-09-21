-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 31, 2013 at 06:41 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajax`
--

-- --------------------------------------------------------

--
-- Table structure for table `ragistration_form`
--

CREATE TABLE IF NOT EXISTS `ragistration_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `delete` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `ragistration_form`
--

INSERT INTO `ragistration_form` (`id`, `name`, `lastname`, `email`, `mobile`, `delete`) VALUES
(4, 'pushpraj', 'singh', 'soniya17minhas@gmail.com', '9981118667', 1),
(5, 'manish', 'carpenter', 'manish@gmail.com', '9754545409', 1),
(6, 'nitish', 'kurup', 'nitish@gmail.com', '9755995335', 0),
(7, 'meenesh', 'jain', 'j.meenesh@gmail.com', '9993755651', 0),
(8, 'Indore', 'hgj', 'pushpraj@gmail.com', '9981118667', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
