-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 21, 2024 at 06:58 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--
CREATE DATABASE IF NOT EXISTS `university` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `university`;

-- --------------------------------------------------------

--
-- Table structure for table `chairman`
--

CREATE TABLE `chairman` (
  `chairman_id` int NOT NULL,
  `chairman_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `chairman`
--

INSERT INTO `chairman` (`chairman_id`, `chairman_name`) VALUES
(1, 'Chairman A'),
(2, 'Chairman B'),
(4, 'Chairman D'),
(5, 'Chairman E'),
(6, 'Chairman F'),
(7, 'Chairman G'),
(8, 'Chairman H'),
(9, 'Chairman I'),
(10, 'Chairman J');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_fee` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_fee`) VALUES
(1, 'Mathematics', 25),
(2, 'Physics', 30),
(3, 'Chemistry', 27.5),
(4, 'Biology', 29),
(5, 'English', 22.5),
(6, 'History', 20),
(7, 'Geography', 21),
(8, 'Computer Science', 35),
(9, 'Economics', 31),
(10, 'Philosophy', 24);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int NOT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  `chairman_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `university_id` int NOT NULL,
  `university_name` varchar(255) DEFAULT NULL,
  `phone` int DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `zip` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`university_id`, `university_name`, `phone`, `city`, `street`, `zip`) VALUES
(1, 'Student A', 1234567890, 'City A', 'Street 1', 10001),
(2, 'Student B', 1234567891, 'City B', 'Street 2', 10002),
(3, 'Student C', 1234567892, 'City C', 'Street 3', 10003),
(4, 'Student D', 1234567893, 'City D', 'Street 4', 10004),
(5, 'Student E', 1234567894, 'City E', 'Street 5', 10005),
(6, 'Student F', 1234567895, 'City F', 'Street 6', 10006),
(7, 'Student G', 1234567896, 'City G', 'Street 7', 10007),
(8, 'Student H', 1234567897, 'City H', 'Street 8', 10008),
(9, 'Student I', 1234567898, 'City I', 'Street 9', 10009),
(10, 'Student J', 1234567899, 'City J', 'Street 10', 10010);

-- --------------------------------------------------------

--
-- Table structure for table `takes`
--

CREATE TABLE `takes` (
  `university_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `takes`
--

INSERT INTO `takes` (`university_id`, `course_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `teach`
--

CREATE TABLE `teach` (
  `teach_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teach_id` int NOT NULL,
  `part_time` int DEFAULT NULL,
  `full_time` int DEFAULT NULL,
  `department_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chairman`
--
ALTER TABLE `chairman`
  ADD PRIMARY KEY (`chairman_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `fk6` (`chairman_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`university_id`);

--
-- Indexes for table `takes`
--
ALTER TABLE `takes`
  ADD KEY `fk1` (`university_id`),
  ADD KEY `fk2` (`course_id`);

--
-- Indexes for table `teach`
--
ALTER TABLE `teach`
  ADD KEY `fk3` (`course_id`),
  ADD KEY `fk4` (`teach_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teach_id`),
  ADD KEY `fk5` (`department_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `fk6` FOREIGN KEY (`chairman_id`) REFERENCES `chairman` (`chairman_id`);

--
-- Constraints for table `takes`
--
ALTER TABLE `takes`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`university_id`) REFERENCES `student` (`university_id`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `teach`
--
ALTER TABLE `teach`
  ADD CONSTRAINT `fk3` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`teach_id`) REFERENCES `teacher` (`teach_id`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
