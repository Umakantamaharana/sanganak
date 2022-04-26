-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2020 at 11:43 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sanganak`
--

-- --------------------------------------------------------

--
-- Table structure for table `cultural_event`
--

CREATE TABLE IF NOT EXISTS `cultural_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `clogin_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=77 ;

-- --------------------------------------------------------

--
-- Table structure for table `fun_event`
--

CREATE TABLE IF NOT EXISTS `fun_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flogin_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=190 ;

--
-- Dumping data for table `fun_event`
--

INSERT INTO `fun_event` (`id`, `flogin_id`, `name`, `name2`, `name3`, `name4`, `event_name`) VALUES
(189, '53', 'ashis kumar kar', '', '', '', 'Drawing');

-- --------------------------------------------------------

--
-- Table structure for table `game_event`
--

CREATE TABLE IF NOT EXISTS `game_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `glogin_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=141 ;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `college_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `roll_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  `role` enum('2','1','3') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=338 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `college_name`, `department`, `year`, `roll_no`, `phone`, `created`, `modified`, `status`, `role`) VALUES
(1, 'admin', 'sanganak.uu@gmail.com', 'sanganak uu', 'csa', 'first', '2018', 'sanganak@2018', '2018-03-25 00:00:00', '2018-03-25 00:00:00', '1', '1'),
(53, 'ashis kumar kar', 'kumarkarashis@gmail.com', 'Utkal University', 'M-TECH', 'Second Year', '05', '7205180580', '2019-03-15 06:11:27', '2019-03-15 06:11:27', '1', '2'),
(337, 'SOMESH KAR', 'SOMESH@GMAIL.COM', 'Utkal University', 'MCA', 'First Year', 'UU102030', '7008328096', '2020-01-22 07:45:57', '2020-01-22 07:45:57', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `pubg`
--

CREATE TABLE IF NOT EXISTS `pubg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transaction_no` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `college_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=57 ;

-- --------------------------------------------------------

--
-- Table structure for table `tech_event`
--

CREATE TABLE IF NOT EXISTS `tech_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `elogin_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `name4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=303 ;

--
-- Dumping data for table `tech_event`
--

INSERT INTO `tech_event` (`id`, `elogin_id`, `name`, `name2`, `name3`, `name4`, `event_name`) VALUES
(302, 53, 'ashis kumar kar', '', '', '', 'C-Coding');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
