-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2019 at 01:31 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geetansh_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`username`, `password`) VALUES
('admin1', 'admin12');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `cid`, `name`, `phn`, `email`, `type`, `date`) VALUES
(1, 2, ' Geetansh ', ' 964650234', ' geetanshbassi@yahoo.com ', ' Luxury ', ' 05/20/2019 '),
(2, 1, 'Gaurav', '788812151', 'gaurav@yahoo.com', 'Luxury', '04/15/2019'),
(3, 3, ' Priya ', ' 123456789', ' priyashahi@gmail.com ', ' Deluxe ', ' 05/18/2019 '),
(4, 3, ' Priya Shahi ', ' 132131561', ' priyashahi12@gmail.com ', ' Luxury ', ' 04/30/2019 '),
(5, 2, 'Rohan Kumar', '9646511072', 'rohankumar@yahoo.com', 'Guest', '04/27/2019'),
(6, 4, ' Prince ', ' 950198885', ' princedhiman450@yahoo.com ', ' Luxury ', ' 05/30/2019 ');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `cid` int(50) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phn` int(10) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`cid`, `uname`, `fname`, `lname`, `password`, `email`, `phn`, `address`) VALUES
(1, 'gaurav', 'Gaurav', 'Sharma', 'garry12', 'gaurav@yahoo.com', 2147483647, 'St. 12, Ludhiana'),
(2, 'geetansh', 'Geetansh', 'Bassi', '1234', 'geetanshbassi@yahoo.com', 2147483647, 'Friends Colony'),
(3, 'priya', 'Priya', 'Shahi', 'priyas', 'priyashahi@gmail.com', 1234567890, '56, Vancouver, Canada'),
(4, 'prince', 'Prince', 'Dhiman', 'dhiman12', 'princedhiman450@yahoo.com', 2147483647, 'Nabha');

-- --------------------------------------------------------

--
-- Table structure for table `m_data`
--

CREATE TABLE `m_data` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phn` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_data`
--

INSERT INTO `m_data` (`id`, `name`, `phn`, `email`, `password`) VALUES
(1111, 'Geetansh', '9646502343', 'geetanshbassi@yahoo.com', 'bassi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `m_data`
--
ALTER TABLE `m_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
