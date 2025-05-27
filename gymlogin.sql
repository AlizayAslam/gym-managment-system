-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 04, 2024 at 05:51 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorapp`
--

DROP TABLE IF EXISTS `doctorapp`;
CREATE TABLE IF NOT EXISTS `doctorapp` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL,
  `docapp` varchar(60) NOT NULL,
  PRIMARY KEY (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorapp`
--

INSERT INTO `doctorapp` (`fname`, `lname`, `email`, `contact`, `docapp`) VALUES
('Rahul', 'kumar', 'rahul@gmail.com', '206', '102'),
('Sanjeev', 'Verma', 'verma12@gmail.com', '207', '103'),
('arif', 'hussain', 'arif@gmail.com', '223333', '102'),
('Waseem', 'Mangi', 'mangi@gmail.com', '960', '99');

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

DROP TABLE IF EXISTS `logintb`;
CREATE TABLE IF NOT EXISTS `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', 'pass'),
('023-22-0012', 'password'),
('023-22-0012', 'password'),
('023-22-0026', 'password'),
('023-22-0026', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

DROP TABLE IF EXISTS `package`;
CREATE TABLE IF NOT EXISTS `package` (
  `Package_id` varchar(40) NOT NULL,
  `Package_name` varchar(40) NOT NULL,
  `Amount` int NOT NULL,
  PRIMARY KEY (`Package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Package_id`, `Package_name`, `Amount`) VALUES
('121', 'preliminary', 800),
('122', 'Wt. gain', 1500),
('123', 'Wt.loss', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `Payment_id` int NOT NULL,
  `Amount` int NOT NULL,
  `customer_id` varchar(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  PRIMARY KEY (`Payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `Amount`, `customer_id`, `payment_type`) VALUES
(301, 1500, '201', 'cash'),
(302, 800, '202', 'card'),
(303, 1000, '203', 'cheque'),
(304, 1500, '204', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `Trainer_id` int NOT NULL,
  `Name` varchar(40) NOT NULL,
  `phone` int NOT NULL,
  PRIMARY KEY (`Trainer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Name`, `phone`) VALUES
(99, 'faizan', 222222),
(101, 'Rakesh', 12365489),
(102, 'Ravi', 21365789),
(103, 'wasim', 123564789),
(104, 'Sameer', 12536987);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
