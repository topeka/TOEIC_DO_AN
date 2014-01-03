-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 13, 2013 at 05:43 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toeic`
--

-- --------------------------------------------------------

--
-- Table structure for table `double_passage`
--

CREATE TABLE IF NOT EXISTS `double_passage` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `incomplete_sen`
--

CREATE TABLE IF NOT EXISTS `incomplete_sen` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `qr`
--

CREATE TABLE IF NOT EXISTS `qr` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `short_con`
--

CREATE TABLE IF NOT EXISTS `short_con` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `short_talk`
--

CREATE TABLE IF NOT EXISTS `short_talk` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `single_passage`
--

CREATE TABLE IF NOT EXISTS `single_passage` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `text_complextion`
--

CREATE TABLE IF NOT EXISTS `text_complextion` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `pathxml` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(14) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
