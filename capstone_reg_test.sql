-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 23, 2019 at 03:33 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capstone_reg_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `specializaiton` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `first_name`, `last_name`, `specializaiton`) VALUES
(9876, 'Vasu', 'Kadambi', 'Capstone');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `issue_id` int(10) NOT NULL,
  `project_id` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `resolution` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(10) NOT NULL,
  `student_id` int(10) DEFAULT NULL,
  `faculty_id` int(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` varchar(150) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `start_date` int(10) DEFAULT NULL,
  `end_date` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`project_id`, `student_id`, `faculty_id`, `name`, `description`, `status`, `start_date`, `end_date`) VALUES
(1234, 1234556, 9876, 'Test1', 'This is a test', 'Active', 4040, 4100);

-- --------------------------------------------------------

--
-- Table structure for table `project sponsors`
--

CREATE TABLE `project sponsors` (
  `project_id` int(10) NOT NULL,
  `sponsor_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

CREATE TABLE `sponsors` (
  `sponsor_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `perm_email` varchar(100) NOT NULL,
  `current_term` int(10) NOT NULL,
  `grad_term` int(10) NOT NULL,
  `admit_term` int(10) NOT NULL,
  `term_gpa` float NOT NULL,
  `cum_gpa` float NOT NULL,
  `in_progress_units` int(10) NOT NULL,
  `cum_units` int(10) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `email`, `perm_email`, `current_term`, `grad_term`, `admit_term`, `term_gpa`, `cum_gpa`, `in_progress_units`, `cum_units`, `status`) VALUES
(1234556, 'Kyle', 'Wright', 'kwright@scu.edu', '76kwright@gmail.com', 4000, 4000, 3800, 3.2, 3.7, 6, 46, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`issue_id`),
  ADD KEY `project_id_fk` (`project_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `student_id_fk` (`student_id`),
  ADD KEY `faculty_id_fk` (`faculty_id`);

--
-- Indexes for table `project sponsors`
--
ALTER TABLE `project sponsors`
  ADD PRIMARY KEY (`project_id`,`sponsor_id`),
  ADD KEY `sponsor_id_fk` (`sponsor_id`);

--
-- Indexes for table `sponsors`
--
ALTER TABLE `sponsors`
  ADD PRIMARY KEY (`sponsor_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `project_id_fk` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `faculty_id_fk` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `student_id_fk` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `project sponsors`
--
ALTER TABLE `project sponsors`
  ADD CONSTRAINT `project_id_fk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `sponsor_id_fk` FOREIGN KEY (`sponsor_id`) REFERENCES `sponsors` (`sponsor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
