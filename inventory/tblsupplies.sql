-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2017 at 10:13 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplies`
--

CREATE TABLE IF NOT EXISTS `tblsupplies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(64) NOT NULL,
  `item_description` varchar(64) NOT NULL,
  `quantity` int(128) NOT NULL,
  `date_received` varchar(128) NOT NULL,
  `date_updated` varchar(64) NOT NULL,
  `purpose` varchar(64) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tblsupplies`
--

INSERT INTO `tblsupplies` (`id`, `item_name`, `item_description`, `quantity`, `date_received`, `date_updated`, `purpose`) VALUES
(1, 'Samsung SIII', '64GB', 85, 'Fri Jul 28 2017', '', 'Raffle'),
(2, 'Samsung S4', '128GB ROM 512GB RAM', 800, 'Fri Jul 28 2017', '', 'Raffle'),
(3, 'Samsung S5', '256GB ROM, 1024GB RAM', 7012, 'Fri Jul 28 2017', '', 'Raffle'),
(4, 'Samsung S6', '512GB ROM, 2048 RAM', 2526, 'Fri Jul 28 2017', '', 'Giveaway'),
(5, 'Samsung Note 7', '4096GB ROM, 2048 RAM', 1424, 'Fri Jul 28 2017', '', 'Free');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
