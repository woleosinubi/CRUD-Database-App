-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2019 at 08:52 AM
-- Server version: 5.7.26-0ubuntu0.18.04.1
-- PHP Version: 7.2.17-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` int(11) NOT NULL,
  `Max` int(100) NOT NULL,
  `Assignment_name` varchar(255) NOT NULL,
  `class_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `Max`, `Assignment_name`, `class_id`) VALUES
(57, 100, 'Basics of programming', 1),
(58, 100, 'Windows operating system', 1),
(59, 100, 'Data processing with Excel', 1),
(60, 100, 'English for CA -students', 1),
(61, 100, 'Orientation for studies', 1),
(62, 100, 'Databases', 2),
(63, 100, 'MFinnish 1', 2),
(64, 100, 'Introduction to object-oriented programming and project', 2),
(65, 100, 'Operating systems and user-rights', 2),
(66, 100, 'Software modelling language and methods', 2),
(67, 100, 'Website user interface', 3);
(68, 100, 'Web programming', 3);
(69, 100, 'Content management systems', 3);
(70, 100, 'Basics of Python', 3);
(71, 100, 'Finnish 2', 3);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class_name`) VALUES
(1, 'Basics of programming'),
(2, 'Windows operating system'),
(3, 'Data processing with Excel'),
(4, 'English for CA -students'),
(5, 'Orientation for studies');
(6, 'Databases');
(7, 'Finnish 1');
(8, 'Introduction to object-oriented programming and project');
(9, 'Operating systems and user-rights');
(10, 'Software modelling language and methods');
(11, 'Website user interface');
(12, 'Web programming');
(13, 'Content management systems');
(14, 'Basics of Python');
(15, 'Finnish 2');

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

CREATE TABLE `grades` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `assignment_id` int(10) NOT NULL,
  `grade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`id`, `user_id`, `assignment_id`, `grade`) VALUES
(63, 38, 57, 12),
(64, 38, 58, 30),
(65, 38, 59, 46),
(66, 39, 57, 22),
(67, 39, 58, 45),
(68, 40, 57, 45),
(69, 40, 58, 45),
(70, 40, 59, 59),
(71, 41, 60, 15),
(72, 41, 61, 22),
(73, 42, 60, 34),
(75, 42, 61, 38),
(76, 43, 62, 80),
(77, 43, 63, 78),
(78, 43, 64, 98),
(79, 44, 62, 34),
(80, 44, 63, 55),
(81, 45, 65, 55),
(82, 45, 66, 40),
(83, 46, 65, 30),
(84, 46, 66, 50),
(85, 47, 65, 53);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Full_name` varchar(64) NOT NULL,
  `class_id` int(10) NOT NULL,
  `user_type` int(2) NOT NULL,
  `Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`, `Full_name`, `class_id`, `user_type`, `Date`) VALUES
(38, 'Student1', 'Password123', 'Student 1', 2, 0, 20210220),
(39, 'Student2', 'Password123', 'Student 2', 2, 0, 20210220),
(40, 'Student3', 'Password123', 'Student 3', 2, 0, 20210220),
(41, 'Student4', 'Password123', 'Student 4', 3, 0, 20210220),
(42, 'Student5', 'Password123', 'Student 5', 3, 0, 20210220),
(43, 'Student6', 'Password123', 'Student 6', 4, 0, 20210220),
(44, 'Student7', 'Password123', 'Student 7', 4, 0, 20210220),
(45, 'Student8', 'Password123', 'Student 8', 5, 0, 20210220),
(46, 'Student9', 'Password123', 'Student 9', 5, 0, 20210220),
(47, 'Student10', 'Password123', 'Student 10', 5, 0, 20210220),
(49, 'Teacher', 'Password123', 'Teacher', 0, 1, 20210220);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grades`
--
ALTER TABLE `grades`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `grades`
--
ALTER TABLE `grades`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
