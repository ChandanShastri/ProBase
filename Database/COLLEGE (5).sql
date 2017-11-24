-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 24, 2017 at 07:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `CLEAR_LOGS` ()  NO SQL
BEGIN
DELETE FROM EVENT_LOG;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `EVENT_LOG`
--

CREATE TABLE `EVENT_LOG` (
  `EVENT` varchar(50) NOT NULL,
  `MADE_BY` varchar(50) NOT NULL,
  `TIME` datetime NOT NULL,
  `REMARKS` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `EVENT_LOG`
--

INSERT INTO `EVENT_LOG` (`EVENT`, `MADE_BY`, `TIME`, `REMARKS`) VALUES
('ADDED A NEW STUDENT', '', '2017-11-21 23:36:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_ATTS1`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS1` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS2`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS2` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS3`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS3` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS4`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS4` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS5`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS5` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS6`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS6` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS7`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS7` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_ATTS8`
--

CREATE TABLE `STUDENT_ACADEMICS_ATTS8` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT1`
--

CREATE TABLE `STUDENT_ACADEMICS_INT1` (
  `Usn` varchar(10) NOT NULL,
  `S1` int(11) DEFAULT NULL,
  `S2` int(11) DEFAULT NULL,
  `S3` int(11) DEFAULT NULL,
  `S4` int(11) DEFAULT NULL,
  `S5` int(11) DEFAULT NULL,
  `S6` int(11) DEFAULT NULL,
  `S7` int(11) DEFAULT NULL,
  `S8` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT_ACADEMICS_INT1`
--

INSERT INTO `STUDENT_ACADEMICS_INT1` (`Usn`, `S1`, `S2`, `S3`, `S4`, `S5`, `S6`, `S7`, `S8`) VALUES
('4AL15IS007', 12, 18, 17, 15, 11, 16, 19, 20);

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT_ACADEMICS_INT2`
--

CREATE TABLE `STUDENT_ACADEMICS_INT2` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT3`
--

CREATE TABLE `STUDENT_ACADEMICS_INT3` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT4`
--

CREATE TABLE `STUDENT_ACADEMICS_INT4` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT5`
--

CREATE TABLE `STUDENT_ACADEMICS_INT5` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT6`
--

CREATE TABLE `STUDENT_ACADEMICS_INT6` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT7`
--

CREATE TABLE `STUDENT_ACADEMICS_INT7` (
  `Usn` varchar(10) NOT NULL,
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
-- Table structure for table `STUDENT_ACADEMICS_INT8`
--

CREATE TABLE `STUDENT_ACADEMICS_INT8` (
  `Usn` varchar(10) NOT NULL,
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
  `Phone` varchar(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Birthdate` date NOT NULL,
  `Address` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `STUDENT_INFO`
--

INSERT INTO `STUDENT_INFO` (`Usn`, `Fname`, `Lname`, `Gender`, `Phone`, `Email`, `Birthdate`, `Address`) VALUES
('4AL15IS007', 'Chetan', 'Shastri', 'M', '9481277335', 'crshastri@gmail.com', '2017-11-08', 'Chandan Ramesh Shastri, Swarnavalli, Mathadeval, S'),
('4AL15IS008', 'Anvaya', 'Kini', 'F', '9487555889', 'anvaya@gmail.com', '2017-11-18', 'Moodbidri'),
('4AL15IS009', 'Aditya', 'Hegde', 'M', '2147483647', '2147483647', '1997-03-11', 'kodowqdkqwkd'),
('4AL15IS011', 'Chandan', 'Shastri', 'M', '9487755', '8747445', '1997-03-11', 'HHHHHHH'),
('4AL15IS016', 'Mythri', 'Gowda', 'F', '9731929679', 'mythrig1@gmail.com', '1997-08-04', 'Bangalore'),
('4AL15ME412', 'Dhanush', 'Kumar', 'M', '8892173517', 'dhanushkumar.me17@gmail.com', '2017-11-16', 'Bangalore, BTM Layout');

--
-- Triggers `STUDENT_INFO`
--
DELIMITER $$
CREATE TRIGGER `STUDENT_ADDITION` AFTER INSERT ON `STUDENT_INFO` FOR EACH ROW INSERT INTO EVENT_LOG(EVENT,TIME)VALUES("ADDED A NEW STUDENT",NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS1`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS1`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS2`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS2`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS3`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS3`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS4`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS4`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS5`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS5`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS6`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS6`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS7`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS7`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_ATTS8`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS8`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT1`
--
ALTER TABLE `STUDENT_ACADEMICS_INT1`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT2`
--
ALTER TABLE `STUDENT_ACADEMICS_INT2`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT3`
--
ALTER TABLE `STUDENT_ACADEMICS_INT3`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT4`
--
ALTER TABLE `STUDENT_ACADEMICS_INT4`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT5`
--
ALTER TABLE `STUDENT_ACADEMICS_INT5`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT6`
--
ALTER TABLE `STUDENT_ACADEMICS_INT6`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT7`
--
ALTER TABLE `STUDENT_ACADEMICS_INT7`
  ADD PRIMARY KEY (`Usn`);

--
-- Indexes for table `STUDENT_ACADEMICS_INT8`
--
ALTER TABLE `STUDENT_ACADEMICS_INT8`
  ADD PRIMARY KEY (`Usn`);

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
  ADD PRIMARY KEY (`Usn`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS1`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS1`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS1_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS2`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS2`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS2_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS3`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS3`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS3_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS4`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS4`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS4_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS5`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS5`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS5_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS6`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS6`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS6_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS7`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS7`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS7_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_ATTS8`
--
ALTER TABLE `STUDENT_ACADEMICS_ATTS8`
  ADD CONSTRAINT `STUDENT_ACADEMICS_ATTS8_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT1`
--
ALTER TABLE `STUDENT_ACADEMICS_INT1`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT1_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT2`
--
ALTER TABLE `STUDENT_ACADEMICS_INT2`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT2_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT3`
--
ALTER TABLE `STUDENT_ACADEMICS_INT3`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT3_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT4`
--
ALTER TABLE `STUDENT_ACADEMICS_INT4`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT4_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT5`
--
ALTER TABLE `STUDENT_ACADEMICS_INT5`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT5_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT6`
--
ALTER TABLE `STUDENT_ACADEMICS_INT6`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT6_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT7`
--
ALTER TABLE `STUDENT_ACADEMICS_INT7`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT7_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

--
-- Constraints for table `STUDENT_ACADEMICS_INT8`
--
ALTER TABLE `STUDENT_ACADEMICS_INT8`
  ADD CONSTRAINT `STUDENT_ACADEMICS_INT8_ibfk_1` FOREIGN KEY (`Usn`) REFERENCES `STUDENT_INFO` (`Usn`) ON DELETE CASCADE;

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
