-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 01, 2017 at 05:58 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `COLLEGE`
--

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM1`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM1` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM2`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM2` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM3`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM3` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM4`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM4` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM5`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM5` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM6`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM6` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM7`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM7` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_SEM8`
--

CREATE TABLE `STUDENT_ACADEMICS_SEM8` (
  `Usn` varchar(10) DEFAULT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_INFO`
--

CREATE TABLE `STUDENT_INFO` (
  `Usn` varchar(10) NOT NULL,
  `Fname` varchar(20) DEFAULT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `Gender` char(1) DEFAULT NULL,
  `Phone` int(10) DEFAULT NULL,
  `Pphone` int(10) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `STUDENT_ACADEMICS_SEM1`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM1`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM2`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM2`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM3`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM3`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM4`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM4`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM5`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM5`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM6`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM6`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM7`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM7`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_SEM8`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM8`
  ADD KEY `Usn` (`Usn`);

--
-- Indexes for table `STUDENT_INFO`
--
ALTER TABLE `STUDENT_INFO`
  ADD PRIMARY KEY (`Usn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `STUDENT_ACADEMICS_SEM1`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM1`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM1_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM2`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM2`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM2_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM3`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM3`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM3_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM4`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM4`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM4_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM5`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM5`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM5_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM6`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM6`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM6_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM7`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM7`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM7_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_SEM8`
--
ALTER TABLE `STUDENT_ACADEMICS_SEM8`
  ADD CONSTRAINT `STUDENT_ACADEMICS_SEM8_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
