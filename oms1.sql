-- phpMyAdmin SQL Dump
-- version 5.1.1deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2022 at 06:26 PM
-- Server version: 10.5.12-MariaDB-1
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oms1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(3) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `latest` int(20) DEFAULT 0 COMMENT 'latest donation: Updated everytime the user donates',
  `total` int(20) DEFAULT 0 COMMENT 'total donation: Updated everytime the user donates',
  `marathon` varchar(5) DEFAULT 'NO' COMMENT 'Whether or not the user is attending the event',
  `beach_cleanup` varchar(5) DEFAULT 'NO' COMMENT 'Whether or not the user is attending the event',
  `blood_drive` varchar(5) DEFAULT 'NO' COMMENT 'Whether or not the user is attending the event'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `phone`, `age`, `password`, `latest`, `total`, `marathon`, `beach_cleanup`, `blood_drive`) VALUES
(1, 'jay', '', 0, 'jay123', 0, 0, 'NO', 'Yes', 'NO'),
(2, 'msee', '0192836475', 24, '1234', 0, 0, 'Yes', 'NO', 'NO'),
(3, 'noma', '17263547', 24, '1234', 0, 0, 'Yes', 'Yes', 'NO'),
(4, 'nomas', '08912324', 23, '1234', 0, 0, 'NO', 'Yes', 'NO'),
(5, 'mwingine', '09128374', 32, '1234', 0, 0, 'Yes', 'NO', 'NO'),
(6, 'shaimpempe', '09182736', 25, '1000', 0, 0, 'Yes', 'NO', 'NO'),
(7, 'ghetto', '91827364894', 18, '0000', 2, 3580, 'Yes', 'Yes', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'prince', 'prince123'),
(3, 'pratik', 'pratik123');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `admin_id` int(6) NOT NULL,
  `username` varchar(8) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE `complaints` (
  `id` int(10) NOT NULL,
  `complaint` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `maths_marks`
--

CREATE TABLE `maths_marks` (
  `id` int(3) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `maths_marks` int(4) DEFAULT NULL,
  `eng_marks` int(4) DEFAULT NULL,
  `science_marks` int(4) DEFAULT NULL,
  `password` varchar(20) NOT NULL,
  `marathon` text DEFAULT NULL,
  `beach` text DEFAULT NULL,
  `blood` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maths_marks`
--

INSERT INTO `maths_marks` (`id`, `name`, `age`, `maths_marks`, `eng_marks`, `science_marks`, `password`, `marathon`, `beach`, `blood`) VALUES
(1, 'Prince', 19, 30, 240, 0, '123', 'Yes', '', ''),
(19, 'glenn', 19, 1234, 12434, 0, '123', 'Yes', 'Yes', 'Yes'),
(37, 'hodari', 23, NULL, NULL, NULL, 'password', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(6) NOT NULL,
  `name` varchar(20) NOT NULL DEFAULT '',
  `designation` varchar(8) NOT NULL,
  `salary` int(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `designation`, `salary`, `phone`, `password`) VALUES
(1, 'Ramu', 'Cleaner', 5000, 999999999, ''),
(3, 'vinay', 'Teacher', 18000, 87346483, 'vinay123'),
(58, 'vivian', 'teacher', 10000, 82892381, 'vivian123'),
(60, 'shobha', 'teacher', 9000, 84398930, 'shobha123'),
(61, 'pratik', 'doctor', 5000000, 2147483647, 'pratik123'),
(62, 'sham', 'worker', 10000, 989898988, 'sham'),
(63, 'reynold', 'teacher', 20000, 772727272, 'reynold123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`name`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `maths_marks`
--
ALTER TABLE `maths_marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maths_marks`
--
ALTER TABLE `maths_marks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4444446;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
