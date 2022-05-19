-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 06:37 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geetansh_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE IF NOT EXISTS `admin_data` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`username`, `password`) VALUES
('Rohit', 'Rohitkrs');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `cid`, `name`, `phn`, `email`, `type`, `date`) VALUES
(1, 2, ' Geetansh ', ' 964650234', ' geetanshbassi@yahoo.com ', ' Luxury ', ' 05/20/2019 '),
(2, 1, 'Gaurav', '788812151', 'gaurav@yahoo.com', 'Luxury', '04/15/2019'),
(3, 3, ' Priya ', ' 123456789', ' priyashahi@gmail.com ', ' Deluxe ', ' 05/18/2019 '),
(4, 3, ' Priya Shahi ', ' 132131561', ' priyashahi12@gmail.com ', ' Luxury ', ' 04/30/2019 '),
(5, 2, 'Rohan Kumar', '9646511072', 'rohankumar@yahoo.com', 'Guest', '04/27/2019'),
(6, 4, ' Prince ', ' 950198885', ' princedhiman450@yahoo.com ', ' Luxury ', ' 05/30/2019 '),
(7, 5, 'abhishek', '8520005210', '16bhawnagopal@gmail.com', 'Guest House', '07/06/2019');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `uname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phn` int(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cid`, `uname`, `fname`, `lname`, `password`, `email`, `phn`, `address`) VALUES
(1, 'gaurav', 'Gaurav', 'Sharma', 'garry12', 'gaurav@yahoo.com', 2147483647, 'St. 12, Ludhiana'),
(2, 'geetansh', 'Geetansh', 'Bassi', '1234', 'geetanshbassi@yahoo.com', 2147483647, 'Friends Colony'),
(3, 'priya', 'Priya', 'Shahi', 'priyas', 'priyashahi@gmail.com', 1234567890, '56, Vancouver, Canada'),
(4, 'prince', 'Prince', 'Dhiman', 'dhiman12', 'princedhiman450@yahoo.com', 2147483647, 'Nabha'),
(5, 'bhawna', 'bhawna', 'gopal', '1234', 'bhawna@gmail.com', 2147483647, 'Amloh road');

-- --------------------------------------------------------

--
-- Table structure for table `m_data`
--

CREATE TABLE IF NOT EXISTS `m_data` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_data`
--

INSERT INTO `m_data` (`id`, `name`, `phn`, `email`, `password`) VALUES
(1111, 'Geetansh', '9646502343', 'geetanshbassi@yahoo.com', 'bassi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
