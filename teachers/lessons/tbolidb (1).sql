-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 12:52 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbolidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accounts`
--

CREATE TABLE `tbl_accounts` (
  `account_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_accounts`
--

INSERT INTO `tbl_accounts` (`account_id`, `email`, `password`) VALUES
(1, 'student@gmail.com', 'student2023-06-29'),
(2, 'awd@gmail.com', 'awd2023-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `address_id` int(11) NOT NULL,
  `address` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `address`) VALUES
(1, 'adawd'),
(2, 'student'),
(3, '1231231'),
(4, 'ttrttrttr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `credentials_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `user_id`, `credentials_id`, `address_id`, `level_id`, `status_id`) VALUES
(1, 1, 1, 1, 1, 1),
(2, 3, 2, 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learner`
--

CREATE TABLE `tbl_learner` (
  `learner_id` int(11) NOT NULL,
  `lrn` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `guardian_info_id` int(11) NOT NULL,
  `guardian_contact_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_learner`
--

INSERT INTO `tbl_learner` (`learner_id`, `lrn`, `user_id`, `guardian_info_id`, `guardian_contact_id`, `address_id`, `level_id`, `status_id`, `account_id`) VALUES
(1, 1, 2, 1, 1, 2, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learner_guardian_contact`
--

CREATE TABLE `tbl_learner_guardian_contact` (
  `guardian_contact_id` int(11) NOT NULL,
  `contact_num` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `address` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_learner_guardian_contact`
--

INSERT INTO `tbl_learner_guardian_contact` (`guardian_contact_id`, `contact_num`, `email`, `address`) VALUES
(1, 13212312, 'student@gmail.com', 'studentstudentstudent');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learner_guardian_info`
--

CREATE TABLE `tbl_learner_guardian_info` (
  `guardian_info_id` int(11) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `middlename` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `birthday` varchar(244) NOT NULL,
  `gender` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_learner_guardian_info`
--

INSERT INTO `tbl_learner_guardian_info` (`guardian_info_id`, `firstname`, `middlename`, `lastname`, `birthday`, `gender`) VALUES
(1, 'student', 'student', 'student', '2023-06-28', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learner_id`
--

CREATE TABLE `tbl_learner_id` (
  `learner_id` int(11) NOT NULL,
  `lrn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_learner_id`
--

INSERT INTO `tbl_learner_id` (`learner_id`, `lrn`) VALUES
(1, 1231);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `teacher_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `credentials_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  `level_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `valid_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`teacher_id`, `user_id`, `credentials_id`, `address_id`, `level_id`, `status_id`, `account_id`, `valid_id`) VALUES
(1, 4, 3, 4, 4, 4, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_valid`
--

CREATE TABLE `tbl_teacher_valid` (
  `valid_id` int(11) NOT NULL,
  `id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_teacher_valid`
--

INSERT INTO `tbl_teacher_valid` (`valid_id`, `id`) VALUES
(1, '353785526_2232890216882893_7699744134817007451_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercredentials`
--

CREATE TABLE `tbl_usercredentials` (
  `usercredentials_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usercredentials`
--

INSERT INTO `tbl_usercredentials` (`usercredentials_id`, `email`, `contact`) VALUES
(1, 'admin@gmail.com', 123),
(2, 'awd@gmail.com', 123123),
(3, 'awd@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(244) NOT NULL,
  `middlename` varchar(244) NOT NULL,
  `lastname` varchar(244) NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`user_id`, `firstname`, `middlename`, `lastname`, `birthday`, `gender`) VALUES
(1, 'admin', 'admin', 'admin', '2023-06-27', 'male'),
(2, 'student', 'student', 'student', '2023-06-29', 'male'),
(3, 'samok', 'awdawd', 'awdaw', '2023-06-29', 'male'),
(4, 'awd', 'XD', 'awd', '2023-07-26', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_level`
--

CREATE TABLE `tbl_user_level` (
  `level_id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_level`
--

INSERT INTO `tbl_user_level` (`level_id`, `level`) VALUES
(1, 'ADMIN'),
(2, 'LEARNER'),
(3, 'LEARNER'),
(4, 'TEACHER');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_status`
--

CREATE TABLE `tbl_user_status` (
  `status_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user_status`
--

INSERT INTO `tbl_user_status` (`status_id`, `status`) VALUES
(1, 1),
(2, 0),
(3, 1),
(4, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `credentials_id` (`credentials_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `status_id` (`status_id`);

--
-- Indexes for table `tbl_learner`
--
ALTER TABLE `tbl_learner`
  ADD PRIMARY KEY (`learner_id`),
  ADD KEY `learners_id` (`lrn`),
  ADD KEY `guardian_info_id` (`guardian_info_id`),
  ADD KEY `guardian_contact_id` (`guardian_contact_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `tbl_learner_guardian_contact`
--
ALTER TABLE `tbl_learner_guardian_contact`
  ADD PRIMARY KEY (`guardian_contact_id`);

--
-- Indexes for table `tbl_learner_guardian_info`
--
ALTER TABLE `tbl_learner_guardian_info`
  ADD PRIMARY KEY (`guardian_info_id`);

--
-- Indexes for table `tbl_learner_id`
--
ALTER TABLE `tbl_learner_id`
  ADD PRIMARY KEY (`learner_id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `credentials_id` (`credentials_id`),
  ADD KEY `address_id` (`address_id`),
  ADD KEY `level_id` (`level_id`),
  ADD KEY `status_id` (`status_id`),
  ADD KEY `valid_id` (`valid_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `tbl_teacher_valid`
--
ALTER TABLE `tbl_teacher_valid`
  ADD PRIMARY KEY (`valid_id`);

--
-- Indexes for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD PRIMARY KEY (`usercredentials_id`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accounts`
--
ALTER TABLE `tbl_accounts`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_learner`
--
ALTER TABLE `tbl_learner`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_learner_guardian_contact`
--
ALTER TABLE `tbl_learner_guardian_contact`
  MODIFY `guardian_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_learner_guardian_info`
--
ALTER TABLE `tbl_learner_guardian_info`
  MODIFY `guardian_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_learner_id`
--
ALTER TABLE `tbl_learner_id`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_teacher_valid`
--
ALTER TABLE `tbl_teacher_valid`
  MODIFY `valid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `usercredentials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD CONSTRAINT `tbl_admin_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_admin_ibfk_2` FOREIGN KEY (`credentials_id`) REFERENCES `tbl_usercredentials` (`usercredentials_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_admin_ibfk_3` FOREIGN KEY (`address_id`) REFERENCES `tbl_address` (`address_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_admin_ibfk_4` FOREIGN KEY (`level_id`) REFERENCES `tbl_user_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_admin_ibfk_5` FOREIGN KEY (`status_id`) REFERENCES `tbl_user_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_learner`
--
ALTER TABLE `tbl_learner`
  ADD CONSTRAINT `tbl_learner_ibfk_1` FOREIGN KEY (`lrn`) REFERENCES `tbl_learner_id` (`learner_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_2` FOREIGN KEY (`guardian_info_id`) REFERENCES `tbl_learner_guardian_info` (`guardian_info_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_3` FOREIGN KEY (`guardian_contact_id`) REFERENCES `tbl_learner_guardian_contact` (`guardian_contact_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_4` FOREIGN KEY (`address_id`) REFERENCES `tbl_address` (`address_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_5` FOREIGN KEY (`level_id`) REFERENCES `tbl_user_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_6` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_7` FOREIGN KEY (`status_id`) REFERENCES `tbl_user_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_8` FOREIGN KEY (`account_id`) REFERENCES `tbl_accounts` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD CONSTRAINT `tbl_teachers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_teachers_ibfk_2` FOREIGN KEY (`credentials_id`) REFERENCES `tbl_usercredentials` (`usercredentials_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_teachers_ibfk_3` FOREIGN KEY (`address_id`) REFERENCES `tbl_address` (`address_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_teachers_ibfk_4` FOREIGN KEY (`level_id`) REFERENCES `tbl_user_level` (`level_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_teachers_ibfk_5` FOREIGN KEY (`status_id`) REFERENCES `tbl_user_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_teachers_ibfk_6` FOREIGN KEY (`valid_id`) REFERENCES `tbl_teacher_valid` (`valid_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_teachers_ibfk_7` FOREIGN KEY (`account_id`) REFERENCES `tbl_accounts` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
