-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2016 at 01:39 PM
-- Server version: 5.7.10-log
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crop`
--

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_user` varchar(50) NOT NULL COMMENT 'Username',
  `staff_pass` varchar(50) NOT NULL COMMENT 'Password',
  `staff_name` varchar(100) NOT NULL COMMENT 'ชื่อ',
  `staff_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_user`, `staff_pass`, `staff_name`, `staff_level`) VALUES
(1, 'user', 'pwd', 'เลิศศักดิ์  หงษ์จันทร์', 1);

-- --------------------------------------------------------

--
-- Table structure for table `standard`
--

CREATE TABLE `standard` (
  `sid` int(11) NOT NULL,
  `standard_name` varchar(45) NOT NULL,
  `org` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `standard`
--

INSERT INTO `standard` (`sid`, `standard_name`, `org`) VALUES
(1, 'การปลูกผัก a', 'กรมวิชาการเกษตร'),
(2, 'sdf', 'dfadsdfsdsfds');

-- --------------------------------------------------------

--
-- Table structure for table `type_plant`
--

CREATE TABLE `type_plant` (
  `type_id` int(11) NOT NULL COMMENT 'รหัสชนิดพืช',
  `type_name` varchar(100) NOT NULL COMMENT 'ชื่อชนิด',
  `note` varchar(200) NOT NULL COMMENT 'หมายเหตุ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type_plant`
--

INSERT INTO `type_plant` (`type_id`, `type_name`, `note`) VALUES
(1, 'พืชไร่hh', 'กกกhh'),
(3, 'hhhh', 'fff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `standard`
--
ALTER TABLE `standard`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `type_plant`
--
ALTER TABLE `type_plant`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `standard`
--
ALTER TABLE `standard`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `type_plant`
--
ALTER TABLE `type_plant`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสชนิดพืช', AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
