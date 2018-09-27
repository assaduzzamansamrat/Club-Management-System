-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 04:24 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(1000) NOT NULL,
  `notice` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`id`, `username`, `name`, `gender`, `password`, `avatar`, `notice`) VALUES
(1, '0000-000-0', 'Admin', 'Male', '000000', 'none', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `moderatorinfo`
--

CREATE TABLE `moderatorinfo` (
  `Uid` varchar(16) NOT NULL,
  `Club` varchar(12) NOT NULL,
  `Reference` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(40) NOT NULL,
  `DOB` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Phone` varchar(40) NOT NULL,
  `Pasword` varchar(40) NOT NULL,
  `Photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `moderatorinfo`
--

INSERT INTO `moderatorinfo` (`Uid`, `Club`, `Reference`, `Name`, `Gender`, `DOB`, `Email`, `Phone`, `Pasword`, `Photo`) VALUES
('15-29099-1', 'Somoy', '758475', 'Samrat', 'Male', '16/12/1971', 'abc@gmail.com', '04367868645', '123', 'image/ProfileImage.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice_table`
--

CREATE TABLE `notice_table` (
  `id` int(11) NOT NULL,
  `notice` varchar(10000) DEFAULT NULL,
  `time_date` varchar(100) NOT NULL,
  `posted_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE `studentinfo` (
  `id` int(11) NOT NULL,
  `clubname` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(25) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `admissionyear` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `avatar` varchar(10000) NOT NULL,
  `is_active` varchar(1) DEFAULT 'N',
  `dateTime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`id`, `clubname`, `name`, `username`, `dept`, `semester`, `gender`, `dob`, `admissionyear`, `phone`, `email`, `password`, `avatar`, `is_active`, `dateTime`) VALUES
(20, 'Computer Club', 'N Zaman Redoy', '15-28743-1', 'Engineering', 'Summer', 'Male', '15-Jul-1996', '2016', '01785362229', 'hmnredoy@gmail.com', '123456', '1513255079ProfileImage.jpg', 'Y', '2017-12-14 18:37:59'),
(21, 'Shomoy Club', 'Nazmuzzaman Redoy', '11-11111-1', 'Engineering', 'Fall', 'male', '3/May/1997', '2015', '01742072430', 'hmnredoy@gmail.com', '123456', '151325515533.jpg', 'N', '2017-12-14 18:39:15'),
(22, 'Computer Club', 'Habib MD', '15-12345-1', 'Engineering', 'Spring', 'male', '24/Feb/1996', '2014', '12345678910', 'abcd@gmail.com', '123456', '151326874633.jpg', 'N', '2017-12-14 22:25:46');

-- --------------------------------------------------------

--
-- Table structure for table `studentmembership`
--

CREATE TABLE `studentmembership` (
  `Uid` varchar(16) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Membership` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moderatorinfo`
--
ALTER TABLE `moderatorinfo`
  ADD PRIMARY KEY (`Uid`);

--
-- Indexes for table `notice_table`
--
ALTER TABLE `notice_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `studentmembership`
--
ALTER TABLE `studentmembership`
  ADD PRIMARY KEY (`Uid`),
  ADD KEY `Uid` (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notice_table`
--
ALTER TABLE `notice_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `studentinfo`
--
ALTER TABLE `studentinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
