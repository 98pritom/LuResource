-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 05:42 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lu_resource`
--

-- --------------------------------------------------------

--
-- Table structure for table `addfav`
--

CREATE TABLE `addfav` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addfav`
--

INSERT INTO `addfav` (`id`, `user_id`, `resource_id`) VALUES
(1, 90, 24),
(2, 90, 24),
(3, 90, 24),
(4, 90, 23),
(5, 90, 24),
(6, 90, 23),
(7, 90, 24),
(8, 90, 24),
(9, 90, 24),
(10, 90, 23),
(11, 90, 24),
(12, 90, 23),
(13, 90, 22),
(14, 90, 23),
(15, 90, 24),
(16, 90, 24),
(17, 90, 24),
(18, 90, 24),
(19, 90, 24),
(20, 90, 24),
(21, 90, 24),
(22, 90, 24),
(25, 90, 23),
(26, 90, 23),
(27, 90, 23),
(28, 90, 23),
(29, 90, 24),
(30, 90, 24),
(31, 90, 23),
(32, 90, 22),
(33, 90, 23),
(34, 90, 23),
(35, 90, 24),
(36, 90, 24),
(37, 90, 23),
(38, 90, 22),
(39, 90, 23),
(40, 90, 23),
(41, 90, 23),
(42, 90, 23),
(43, 90, 23),
(44, 90, 23),
(45, 90, 23),
(46, 90, 23),
(47, 90, 23),
(49, 90, 23),
(50, 90, 23);

-- --------------------------------------------------------

--
-- Table structure for table `all-content`
--

CREATE TABLE `all-content` (
  `id` int(12) NOT NULL,
  `userid` int(12) NOT NULL,
  `title` varchar(100) NOT NULL,
  `resourse` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_code`
--

CREATE TABLE `course_code` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `cell_phone` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `biography` varchar(100) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `role`, `department`, `cell_phone`, `email`, `biography`, `image`) VALUES
(2, 'Emad', 'dsfdsf', 'sdfsdf', '01312241148', 'amadahmed@gmail.com', 'sadfsafsdf', 'FacultyImage/0001.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `image`, `description`, `date_time`) VALUES
(1, 'Notice', 'noticeImage/', 'this is \r\n', '2023-03-05 22:10:31'),
(7, 'Hi', 'noticeImage/', 'Hi', '2023-03-05 22:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `pdf` varchar(200) DEFAULT NULL,
  `video` varchar(200) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `user_id`, `teacher_name`, `course_title`, `topic`, `description`, `image`, `pdf`, `video`, `status`, `date_time`) VALUES
(22, 90, 'Emad', 'CSE-1101', 'CSE', 'dsafsdf', 'resourseImage/', 'pdf/', 'video/2022-12-17 23-12-45.mkv', 'Public', '2023-03-05 21:12:20'),
(23, 90, 'Emad', 'cse-1111', 'sgd', 'sgfdg', 'resourseImage/', '', 'video/2022-12-17 23-12-45.mkv', 'Public', '2023-03-05 21:12:59'),
(24, 90, 'Emad', 'sadsad', 'sadsad', 'sadsadasdsa', 'resourseImage/3.PNG', 'pdf/', 'video/', 'Public', '2023-03-05 21:43:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `designation` varchar(255) DEFAULT NULL,
  `department` varchar(200) DEFAULT NULL,
  `inst` varchar(255) DEFAULT NULL,
  `mbl_num` varchar(255) DEFAULT NULL,
  `ri` varchar(255) DEFAULT NULL,
  `crs` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `code` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email_id`, `designation`, `department`, `inst`, `mbl_num`, `ri`, `crs`, `password`, `image`, `role`, `code`, `status`) VALUES
(90, 'Emad', 'cse_1912020106@lus.ac.bd', 'Professor', 'CSE', 'LU', '+8801312241148', 'yes', 'Cse-1101', 'amad1234', 'storage/Use Case.png', 'teacher', 363738, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addfav`
--
ALTER TABLE `addfav`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userrel` (`user_id`),
  ADD KEY `resourcerel` (`resource_id`);

--
-- Indexes for table `all-content`
--
ALTER TABLE `all-content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relationUser` (`userid`);

--
-- Indexes for table `course_code`
--
ALTER TABLE `course_code`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userview` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addfav`
--
ALTER TABLE `addfav`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `all-content`
--
ALTER TABLE `all-content`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_code`
--
ALTER TABLE `course_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addfav`
--
ALTER TABLE `addfav`
  ADD CONSTRAINT `resourcerel` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `userrel` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `all-content`
--
ALTER TABLE `all-content`
  ADD CONSTRAINT `relationUser` FOREIGN KEY (`userid`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resource`
--
ALTER TABLE `resource`
  ADD CONSTRAINT `userview` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
