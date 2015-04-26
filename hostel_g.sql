-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2015 at 10:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel_g`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `pass_key` varchar(6) NOT NULL,
  `roll_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`pass_key`, `roll_no`) VALUES
('D2QJM1', 101213055),
('qwerty', 101213061);

-- --------------------------------------------------------

--
-- Table structure for table `main_login`
--

CREATE TABLE IF NOT EXISTS `main_login` (
  `roll_no` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_login`
--

INSERT INTO `main_login` (`roll_no`, `password`) VALUES
(101213061, '553d3fd2715d0');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `pass_key` varchar(255) NOT NULL,
  `roll_no` int(9) NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `current_year` int(1) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(5) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `mobile_no` varchar(14) NOT NULL,
  `e_mail` varchar(255) NOT NULL,
  `father_name` varchar(50) NOT NULL,
  `father_mobile` varchar(14) NOT NULL,
  `permanent_address` varchar(1000) NOT NULL,
  `alternate_address` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`roll_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`pass_key`, `roll_no`, `name`, `class`, `branch`, `current_year`, `dob`, `category`, `blood_group`, `mobile_no`, `e_mail`, `father_name`, `father_mobile`, `permanent_address`, `alternate_address`) VALUES
('qwerty', 101213061, 'skuvb', 'BTech', 'eugb', 1, '1988-01-12', 'GEN', 'A+', '348798437', 'vartul.mittal@gmail.com', '240598', 'w904t85943', 'ekjfgiuer', 'egkjbkjer');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
