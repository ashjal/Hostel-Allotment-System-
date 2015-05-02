-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2015 at 08:29 AM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roll_no` int(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `class` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `main_login`
--

INSERT INTO `main_login` (`id`, `roll_no`, `password`, `class`) VALUES
(1, 101213055, '553e1d7e9770e', 'BTech'),
(2, 101213061, '553e1d7e9770e', 'BTech'),
(3, 0, '553ea361ae987', ''),
(4, 0, '553ea361ae987', ''),
(5, 0, '553ea36b70db4', ''),
(6, 0, '553ea36b70db4', ''),
(7, 0, '553ea4e6e4672', ''),
(8, 0, '553ea4e6e4672', ''),
(9, 0, '553ea52a2abf5', ''),
(10, 0, '553ea52a2abf5', ''),
(11, 0, '553ea561441cf', ''),
(12, 0, '553ea561441cf', ''),
(13, 0, '553ea580afd15', ''),
(14, 0, '553ea580afd15', ''),
(15, 0, '553ea5af29948', ''),
(16, 0, '553ea5af29948', ''),
(17, 0, '553ea60963066', ''),
(18, 0, '553ea60963066', ''),
(19, 0, '553ea73e1c076', ''),
(20, 0, '553ea73e1c076', ''),
(21, 0, '553ea782121c9', ''),
(22, 0, '553ea782121c9', ''),
(23, 0, '553ea7af8c9e6', ''),
(24, 0, '553ea7af8c9e6', ''),
(25, 0, '553ea8ae0b288', ''),
(26, 0, '553ea8ae0b288', ''),
(27, 0, '553ea97e8c5fc', ''),
(28, 0, '553ea97e8c5fc', ''),
(29, 0, '553ea9b3ed1c5', ''),
(30, 0, '553ea9b3ed1c5', ''),
(31, 0, '553ea9d7ecefc', ''),
(32, 0, '553ea9d7ecefc', ''),
(33, 0, '553f28947bad1', ''),
(34, 0, '553f28947bad1', '');

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
('D2QJM1', 101213055, 'vartul mittal', 'BTech', 'CSE', 3, '1988-01-12', 'GEN', 'B+', '8090989', 'vartul.mittal@gmail.com', 'skjbvubw', '398469', 'eihrgvbyu uiqefy', 'ldkfvbuiwn'),
('qwerty', 101213061, 'vartul11', 'BTech', 'iergb', 1, '1988-01-24', 'GEN', 'A+', 'wkrhvb', 'vartul.mittal@gmail.com', 'iwrbv', 'eigb', 'ibuiwe f we', 'wjrgbiuwe');

-- --------------------------------------------------------

--
-- Table structure for table `rooms_1`
--

CREATE TABLE IF NOT EXISTS `rooms_1` (
  `roomno` varchar(255) NOT NULL,
  `vacency` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms_4`
--

CREATE TABLE IF NOT EXISTS `rooms_4` (
  `roomno` varchar(255) NOT NULL,
  `vacency` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
