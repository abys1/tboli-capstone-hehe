-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 06:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
-- Stand-in structure for view `mergeddata`
-- (See below for the actual view)
--
CREATE TABLE `mergeddata` (
`lesson_id` int(11)
,`title` varchar(244)
,`lesson` text
);

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
(1, 'teacher@gmail.com', '$2y$10$gBvl4ghCkj1DBckxgEA3ee22EXQvCmhBUDu6Tivr1ZpIQMr6d451G'),
(2, 'admin@gmail.com', '$2y$10$8i9MsQFQ21lGAZCZ2ETqlecPm0LEE9IMLgBlDkpMspmMYIFXu8n12'),
(3, 'awd@gmail.com', '$2y$10$c6evQyXQtPAgHmFnCOEVhO0h6hBL93aXzAgOTpR5hGAjJp0Wr2Ssi'),
(4, 'admin2@gmail.com', '$2y$10$2j5n2GdtSeGx/j.x.UIaKOVwR.uzTNuDFeQtq7fxAb/bvjWc82pAm'),
(5, 'rinan@gmail.com', '$2y$10$zJIRJe8ARwa9Gx2wCgAS.uyqm3aqqkohEdca1mnGb5qIEhIbkQsqW'),
(6, 'qwe@gmail.com', '$2y$10$PZfAohLXX9kKsILHFT3zW./Mz9uKEu.hx6CmlTkSjOCIA/O8WXCS.'),
(7, 'jdm@gmail.com', '$2y$10$ZqoZ49CmLBCvqN9QIpGfW.tyDf/tU5cgUH4vKQuKa0qPVfiEJpidm'),
(8, 'student21@gmail.com', '$2y$10$yRZUXefn6yG7DMO4JQNroep7tL6zWlrT3eir52yWzI9eZI.nkk0ju'),
(9, 'teacherz@gmail.com', '$2y$10$Es/LvcKYFBSRp8ROn6x/Tufg8AQGdJZt0t1RJeZTJQbliM1DrcEjG'),
(10, 'teachera@gmail.com', '$2y$10$RnY5g14YLzaIcDId/axOKeEnCPchTxFXNOsWjAdaZiD2pOWYptk7q'),
(11, 'teacherc@gmail.com', '$2y$10$5Bozi9lCz8iQwLfyFqoQuuoCBbfropaW8JnTBZqX0eau0dOp/tvDi'),
(12, 'teacherb@gmail.com', '$2y$10$1ehPpACQ9rwml0y4y1DaIOaAlIngW08oWTNgbKc/rUFjYp/VXHMJi'),
(13, 'an@gmail.com', '$2y$10$ZDFg106pydngZZd2mWsZjOc40AUxsX5nTw0B1WJY4XkRCMrx/bvp2'),
(14, '2231', '$2y$10$ED5.yCWhLG8sSaVrOBvyU.aGOy6.2gujB2MHN/ISZ7mwEMJglE58C'),
(15, '2222', '$2y$10$9UoUNZw.hFfxTgUDv/V21.gXWF0TxeUBjM.Pqnkk96vfsMIn7p/PS'),
(16, '1111', '$2y$10$l5R1njg/4C4kCUnvXBlgU.1ZxNQYNIzlDfSJDLSkZ5vt2o6bYIDS.'),
(17, 'mynftacc269@gmail.com', '$2y$10$vrZZ43PS2GWs3D6TZl.pDerUPitSa2wTZSqTwE0mjZkgW3CtGQ.Ym');

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
(1, 'ttrttrttr'),
(2, 'wkjlhasdgasdw'),
(3, 'bb, lagao, gensan'),
(4, 'ttrttrttr'),
(5, 'awd,awdaw'),
(6, 'general santos city'),
(7, 'wkjlhasdgasdw'),
(8, 'awdaw'),
(9, 'general santos city'),
(10, 'general santos city'),
(11, 'general santos city'),
(12, 'general santos city'),
(13, 'general santos city'),
(14, 'general santos city'),
(15, 'general santos city'),
(16, 'general santos city'),
(17, 'general santos city');

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
  `status_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `user_id`, `credentials_id`, `address_id`, `level_id`, `status_id`, `account_id`) VALUES
(1, 2, 2, 2, 2, 2, 2),
(2, 4, 3, 4, 4, 4, 4),
(3, 5, 4, 5, 5, 5, 5),
(4, 7, 6, 7, 7, 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_assignment`
--

CREATE TABLE `tbl_assignment` (
  `assignment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_content`
--

CREATE TABLE `tbl_content` (
  `content_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `lesson_files_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_content`
--

INSERT INTO `tbl_content` (`content_id`, `lesson_id`, `lesson_files_id`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6),
(7, 7, 7),
(8, 7, 8);

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
  `account_id` int(11) NOT NULL,
  `usercredentials_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_learner`
--

INSERT INTO `tbl_learner` (`learner_id`, `lrn`, `user_id`, `guardian_info_id`, `guardian_contact_id`, `address_id`, `level_id`, `status_id`, `account_id`, `usercredentials_id`) VALUES
(1, 2, 8, 2, 2, 8, 8, 8, 8, 7),
(2, 3, 17, 3, 3, 17, 17, 17, 17, 16);

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
(1, 0, '', ''),
(2, 2147483647, 'student@gmail.com', 'student2122student2122'),
(3, 2147483647, 'student@gmail.com', 'student2122student2122');

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
(1, '', '', '', '', ''),
(2, 'ga', 'test', 'awda', '2023-07-20', 'female'),
(3, 'student', 'student', 'student', '2221-02-22', 'Male');

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
(1, 123121),
(2, 1),
(3, 222221);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lesson`
--

CREATE TABLE `tbl_lesson` (
  `lesson_id` int(11) NOT NULL,
  `name` varchar(244) NOT NULL,
  `objective` text NOT NULL,
  `level` varchar(244) NOT NULL,
  `type` varchar(244) NOT NULL,
  `added_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lesson`
--

INSERT INTO `tbl_lesson` (`lesson_id`, `name`, `objective`, `level`, `type`, `added_by`) VALUES
(1, 'lesson 1', 'lesson', 'Basic', 'Literacy', 16),
(2, 'Lesson 2', 'Lesson 2', 'Intermediate', 'Literacy', 16),
(3, 'Lesson 1', 'Numeracy', 'Basic', 'Numeracy', 16),
(4, 'Lesson 1', 'boboka', 'Advance', 'Numeracy', 16),
(5, 'Lesson 3', 'aaa', 'Advance', 'Numeracy', 16),
(6, 'Lesson 4', 'aaaa', 'Intermediate', 'Numeracy', 16),
(7, 'multi', 'test', 'Advance', 'Literacy', 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lesson_files`
--

CREATE TABLE `tbl_lesson_files` (
  `lesson_files_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `lesson` text NOT NULL,
  `added_by` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lesson_files`
--

INSERT INTO `tbl_lesson_files` (`lesson_files_id`, `lesson_id`, `lesson`, `added_by`, `status`) VALUES
(1, 1, 'a.png', 16, 1),
(2, 2, 'check.png', 16, 1),
(3, 3, 'tbolidb (3).sql', 16, 1),
(4, 4, 'exempted.txt', 16, 1),
(5, 5, 'noticeboardphp.txt', 16, 1),
(6, 6, 'noticeboardcss.txt', 16, 1),
(7, 7, 'cred.png', 11, 1),
(8, 7, 'spicyuuu1.jpg', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_multiple_choice`
--

CREATE TABLE `tbl_quiz_multiple_choice` (
  `multiple_choice_id` int(11) NOT NULL,
  `quiz_options_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `choiceA` varchar(244) NOT NULL,
  `choiceB` varchar(244) NOT NULL,
  `choiceC` varchar(244) NOT NULL,
  `choiceD` varchar(244) NOT NULL,
  `correct_answer` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz_multiple_choice`
--

INSERT INTO `tbl_quiz_multiple_choice` (`multiple_choice_id`, `quiz_options_id`, `question`, `choiceA`, `choiceB`, `choiceC`, `choiceD`, `correct_answer`) VALUES
(1, 1, 'Boboka', 'yes', 'no', 'maybe', 'maybe no', 'a'),
(2, 1, 'Kay', 'yes', 'no', 'maybe', 'ok', 'a'),
(3, 1, 'yes', 'yes', 'yes', 'yesnt', '!yes', 'a'),
(4, 1, 'fno', 'yes', 'a', 'b', 'c', 'a'),
(5, 1, 'question5', 'yes', 'yesnt', 'yesnntt', 'fyes', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_options`
--

CREATE TABLE `tbl_quiz_options` (
  `quiz_options_id` int(11) NOT NULL,
  `added_by` int(11) NOT NULL,
  `title` varchar(244) NOT NULL,
  `lesson` int(11) NOT NULL,
  `max_score` int(11) NOT NULL,
  `date_start` date NOT NULL,
  `allow_late` tinyint(1) NOT NULL,
  `grading` varchar(244) NOT NULL,
  `due` date NOT NULL,
  `grading_score` varchar(244) NOT NULL,
  `attempts` int(11) NOT NULL,
  `instructions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz_options`
--

INSERT INTO `tbl_quiz_options` (`quiz_options_id`, `added_by`, `title`, `lesson`, `max_score`, `date_start`, `allow_late`, `grading`, `due`, `grading_score`, `attempts`, `instructions`) VALUES
(1, 16, '01 - Quiz Multiple Choice', 1, 5, '2023-07-28', 1, 'Latest Grade', '2023-07-28', 'best score', 1, ' 5 Questions Multiple Choice '),
(2, 16, '01 - Quiz True or False', 3, 5, '2023-07-28', 1, 'Highest Grade', '2023-07-28', 'latest score', 0, ' Quiz True or False ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_true_or_false`
--

CREATE TABLE `tbl_quiz_true_or_false` (
  `true_or_false_id` int(11) NOT NULL,
  `quiz_options_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `correct_choice` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_quiz_true_or_false`
--

INSERT INTO `tbl_quiz_true_or_false` (`true_or_false_id`, `quiz_options_id`, `question`, `correct_choice`) VALUES
(1, 2, 'lagot nako', 'true'),
(2, 2, 'boboka', 'true'),
(3, 2, 'boboko', 'true'),
(4, 2, 'mali diay', 'true'),
(5, 2, 'true', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `teacher_id` bigint(11) NOT NULL,
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
(0, 1, 1, 1, 1, 1, 1, 1),
(0, 6, 5, 6, 6, 6, 6, 2),
(0, 9, 8, 9, 9, 9, 9, 3),
(1, 10, 9, 10, 10, 10, 10, 4),
(176211231, 11, 10, 11, 11, 11, 11, 5),
(2222, 12, 11, 12, 12, 12, 12, 6),
(2132, 13, 12, 13, 13, 13, 13, 7),
(2231, 14, 13, 14, 14, 14, 14, 8),
(2222, 15, 14, 15, 15, 15, 15, 9),
(1111, 16, 15, 16, 16, 16, 16, 10);

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
(1, '64a7b4da409ec_Image_20230704_125627_922.jpeg'),
(2, '64a8b8538fbb4_giphy.gif'),
(3, ''),
(4, ''),
(5, '64b805936ce0d_nm.jpg'),
(6, 'puta.png'),
(7, 'asdw.jpg'),
(8, 'Untitled.png'),
(9, 'cred.png'),
(10, 'spicyuuu1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usercredentials`
--

CREATE TABLE `tbl_usercredentials` (
  `usercredentials_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `contact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usercredentials`
--

INSERT INTO `tbl_usercredentials` (`usercredentials_id`, `email`, `contact`) VALUES
(1, 'awd@gmail.com', 1231231),
(2, 'admin@gmail.com', 9088123812),
(3, 'admin2@gmail.com', 12312),
(4, 'rinan@gmail.com', 12312),
(5, 'qwe@gmail.com', 12311221),
(6, 'jdm@gmail.com', 9088123812),
(7, 'student21@gmail.com', 9088123812),
(8, 'teacherz@gmail.com', 123123),
(9, 'teachera@gmail.com', 2222),
(10, 'teacherc@gmail.com', 2311111),
(11, 'teacherb@gmail.com', 231111),
(12, 'an@gmail.com', 23211123),
(13, 'mynftacc269@gmail.com', 231121),
(14, 'awdawd@gmail.com', 12312321),
(15, 'zas@gmail.com', 2311),
(16, 'mynftacc269@gmail.com', 9088123812);

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
(1, 'teacher', 'XD', 'student', '2023-07-07', 'female'),
(2, 'ryan', 'Watapampa', 'xd', '2023-07-08', 'male'),
(3, 'Ryan', 'XD', 'watampa', '2023-07-07', 'male'),
(4, 'Ryan', 'awd', 'student', '2023-07-07', 'male'),
(5, 'rinan', 'awd', 'pakyu', '2023-07-07', 'male'),
(6, 'awd', 'awd', 'lastname', '2023-07-08', 'male'),
(7, 'j', 'd', 'm', '2023-07-20', 'male'),
(8, 'firstname', 'd', 'lastname', '2023-07-20', 'male'),
(9, 'teacherz', 'teacherz', 'teacherz', '2023-07-20', 'female'),
(10, 'teachera', 'teachera', 'teachera', '2023-07-20', 'female'),
(11, 'teacherc', 'teacherc', 'teacherc', '2023-07-20', 'male'),
(12, 'teacherb', 'teacherb', 'teacherb', '2023-07-20', 'male'),
(13, 'an', 'an', 'an', '2023-07-20', 'female'),
(14, 'ayjoke', 'lang', 'ayjoke', '2023-07-20', 'female'),
(15, 'moka', 'jv', 'oy', '2023-07-20', 'female'),
(16, 'za', 'za', 'za', '2023-07-20', 'female'),
(17, 'awd', 'd', 'zas', '2222-02-22', 'Male');

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
(1, 'TEACHER'),
(2, 'ADMIN'),
(3, 'LEARNER'),
(4, 'ADMIN'),
(5, 'ADMIN'),
(6, 'TEACHER'),
(7, 'ADMIN'),
(8, 'LEARNER'),
(9, 'TEACHER'),
(10, 'TEACHER'),
(11, 'TEACHER'),
(12, 'TEACHER'),
(13, 'TEACHER'),
(14, 'TEACHER'),
(15, 'TEACHER'),
(16, 'TEACHER'),
(17, 'LEARNER');

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
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1);

-- --------------------------------------------------------

--
-- Structure for view `mergeddata`
--
DROP TABLE IF EXISTS `mergeddata`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `mergeddata`  AS SELECT DISTINCT `tbl_lesson`.`lesson_id` AS `lesson_id`, `tbl_quiz_options`.`title` AS `title`, `tbl_lesson_files`.`lesson` AS `lesson` FROM ((`tbl_lesson` left join `tbl_quiz_options` on(`tbl_lesson`.`lesson_id` = `tbl_quiz_options`.`lesson`)) left join `tbl_lesson_files` on(`tbl_lesson`.`lesson_id` = `tbl_lesson_files`.`lesson_id`)) WHERE `tbl_lesson_files`.`status` = 1 ;

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
  ADD KEY `status_id` (`status_id`),
  ADD KEY `account_id` (`account_id`);

--
-- Indexes for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  ADD PRIMARY KEY (`assignment_id`);

--
-- Indexes for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD PRIMARY KEY (`content_id`),
  ADD KEY `lesson_id` (`lesson_id`),
  ADD KEY `lesson_files_id` (`lesson_files_id`);

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
  ADD KEY `account_id` (`account_id`),
  ADD KEY `usercredentials_id` (`usercredentials_id`);

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
-- Indexes for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `added_by` (`added_by`);

--
-- Indexes for table `tbl_lesson_files`
--
ALTER TABLE `tbl_lesson_files`
  ADD PRIMARY KEY (`lesson_files_id`),
  ADD KEY `added_by` (`added_by`),
  ADD KEY `lesson_id` (`lesson_id`);

--
-- Indexes for table `tbl_quiz_multiple_choice`
--
ALTER TABLE `tbl_quiz_multiple_choice`
  ADD PRIMARY KEY (`multiple_choice_id`),
  ADD KEY `quiz_options_id` (`quiz_options_id`);

--
-- Indexes for table `tbl_quiz_options`
--
ALTER TABLE `tbl_quiz_options`
  ADD PRIMARY KEY (`quiz_options_id`),
  ADD KEY `added_by` (`added_by`),
  ADD KEY `lesson` (`lesson`);

--
-- Indexes for table `tbl_quiz_true_or_false`
--
ALTER TABLE `tbl_quiz_true_or_false`
  ADD PRIMARY KEY (`true_or_false_id`),
  ADD KEY `quiz_options_id` (`quiz_options_id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
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
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_assignment`
--
ALTER TABLE `tbl_assignment`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_content`
--
ALTER TABLE `tbl_content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_learner`
--
ALTER TABLE `tbl_learner`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_learner_guardian_contact`
--
ALTER TABLE `tbl_learner_guardian_contact`
  MODIFY `guardian_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_learner_guardian_info`
--
ALTER TABLE `tbl_learner_guardian_info`
  MODIFY `guardian_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_learner_id`
--
ALTER TABLE `tbl_learner_id`
  MODIFY `learner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_lesson_files`
--
ALTER TABLE `tbl_lesson_files`
  MODIFY `lesson_files_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_quiz_multiple_choice`
--
ALTER TABLE `tbl_quiz_multiple_choice`
  MODIFY `multiple_choice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_quiz_options`
--
ALTER TABLE `tbl_quiz_options`
  MODIFY `quiz_options_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_quiz_true_or_false`
--
ALTER TABLE `tbl_quiz_true_or_false`
  MODIFY `true_or_false_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_teacher_valid`
--
ALTER TABLE `tbl_teacher_valid`
  MODIFY `valid_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `usercredentials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user_level`
--
ALTER TABLE `tbl_user_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user_status`
--
ALTER TABLE `tbl_user_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `tbl_admin_ibfk_5` FOREIGN KEY (`status_id`) REFERENCES `tbl_user_status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_admin_ibfk_6` FOREIGN KEY (`account_id`) REFERENCES `tbl_accounts` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_content`
--
ALTER TABLE `tbl_content`
  ADD CONSTRAINT `tbl_content_ibfk_1` FOREIGN KEY (`lesson_id`) REFERENCES `tbl_lesson` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_content_ibfk_2` FOREIGN KEY (`lesson_files_id`) REFERENCES `tbl_lesson_files` (`lesson_files_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `tbl_learner_ibfk_8` FOREIGN KEY (`account_id`) REFERENCES `tbl_accounts` (`account_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_learner_ibfk_9` FOREIGN KEY (`usercredentials_id`) REFERENCES `tbl_usercredentials` (`usercredentials_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lesson`
--
ALTER TABLE `tbl_lesson`
  ADD CONSTRAINT `tbl_lesson_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lesson_files`
--
ALTER TABLE `tbl_lesson_files`
  ADD CONSTRAINT `tbl_lesson_files_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_lesson_files_ibfk_2` FOREIGN KEY (`lesson_id`) REFERENCES `tbl_lesson` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_quiz_multiple_choice`
--
ALTER TABLE `tbl_quiz_multiple_choice`
  ADD CONSTRAINT `tbl_quiz_multiple_choice_ibfk_1` FOREIGN KEY (`quiz_options_id`) REFERENCES `tbl_quiz_options` (`quiz_options_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_quiz_options`
--
ALTER TABLE `tbl_quiz_options`
  ADD CONSTRAINT `tbl_quiz_options_ibfk_1` FOREIGN KEY (`added_by`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_quiz_options_ibfk_2` FOREIGN KEY (`lesson`) REFERENCES `tbl_lesson` (`lesson_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_quiz_true_or_false`
--
ALTER TABLE `tbl_quiz_true_or_false`
  ADD CONSTRAINT `tbl_quiz_true_or_false_ibfk_1` FOREIGN KEY (`quiz_options_id`) REFERENCES `tbl_quiz_options` (`quiz_options_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
