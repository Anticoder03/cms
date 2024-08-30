-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2024 at 05:18 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `Id` int(10) NOT NULL,
  `Subjct` varchar(120) NOT NULL,
  `Complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`Id`, `Subjct`, `Complain`) VALUES
(1, 'Admission', 'hfgjhyfgvjhfgvhvhbvbv');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `Id` int(10) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `starting_date` varchar(20) NOT NULL,
  `Ending_date` varchar(20) NOT NULL,
  `Organised_By` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Stream` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Id`, `Name`, `starting_date`, `Ending_date`, `Organised_By`, `Description`, `Stream`) VALUES
(1, 'Rovers', '27-8-2024', '30-8-2024', 'T.Y. BCA', 'This is rovers s-2 organised by tybca wing.\r\nfor only BCA students.', 'BCA'),
(2, 'Rivera', '2024-08-22', '2024-08-31', 'KBS Collage', 'This is a event org by kbs collage', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `Id` int(10) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Highest_qly` varchar(20) NOT NULL,
  `Post` varchar(40) NOT NULL,
  `Stream` varchar(120) NOT NULL,
  `Age` int(21) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `EXP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Id`, `Name`, `Subject`, `Highest_qly`, `Post`, `Stream`, `Age`, `Gender`, `EXP`) VALUES
(1, 'Dr. Mittel Maam', 'networking', 'Ph.D', 'Principal', 'BCA', 0, '', 0),
(2, 'Jyotsna maam', 'php', 'Masters', 'Prof.', 'BCA', 0, '', 0),
(3, 'Princi maam', 'Chemistry', 'Masters', 'prof.', 'B.Sc.', 0, '', 0),
(4, 'Neha Patel', 'Unix', 'masters', 'HOD', 'BCA', 34, '0', 3),
(5, 'Dainisha', 'coreldrow', 'bachlor', 'lab assistence', 'BCA', 27, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Id` int(10) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `Email` varchar(120) NOT NULL,
  `Number` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Marks` int(5) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Date_Of_Birth` varchar(20) NOT NULL,
  `Reg_Time` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Id`, `Name`, `Email`, `Number`, `Password`, `Gender`, `Marks`, `Course`, `Date_Of_Birth`, `Reg_Time`) VALUES
(1, 'Ashish Prajapati', 'ap5212741@gmail.com', '1234567890', '1234567890', 'Male ', 56, 'BCA ', '2024-08-13', '2024-08-17 15:38:59.890511');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `Time` varchar(20) NOT NULL,
  `Monday` varchar(20) NOT NULL,
  `Tuesday` varchar(20) NOT NULL,
  `Wednesday` varchar(20) NOT NULL,
  `Thursday` varchar(20) NOT NULL,
  `Friday` varchar(20) NOT NULL,
  `Saturday` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`Time`, `Monday`, `Tuesday`, `Wednesday`, `Thursday`, `Friday`, `Saturday`) VALUES
('08:00 - 09:00', 'lect1', 'lect2', 'lect3', 'lect4', 'lect5', 'lect6'),
('09:00 - 10:00', 'lect1', 'lect2', 'lect3', 'lect4', 'lect5', 'lect6'),
('10:00 - 11:00', 'lect1', 'lect2', 'lect3', 'lect4', 'lect5', 'lect6'),
('Break', 'Break', 'Break', 'Break', 'Break', 'Break', 'Break'),
('11:30 - 12:30', 'lect1', 'lect2', 'lect3', 'lect4', 'lect5', 'lect6'),
('12:30 - 01:30', 'lect1', 'lect2', 'lect3', 'lect4', 'lect5', 'lect6'),
('01:30 - 02:30', 'lect1', 'lect2', 'lect3', 'lect4', 'lect5', 'lect6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
