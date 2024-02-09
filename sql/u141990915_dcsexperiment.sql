-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2024 at 06:30 AM
-- Server version: 10.11.6-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u141990915_dcsexperiment`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`) VALUES
(1, 'BSIT'),
(2, 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'BSIT'),
(2, 'BSCS');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_subjects`
--

CREATE TABLE `enrolled_subjects` (
  `faculty_id` int(11) DEFAULT NULL,
  `grades` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `sched_code_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `email` varchar(225) NOT NULL,
  `code` text NOT NULL,
  `otp_creation_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `dept_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `major`
--

CREATE TABLE `major` (
  `major_id` int(11) NOT NULL,
  `major_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `major`
--

INSERT INTO `major` (`major_id`, `major_name`) VALUES
(1, 'N/A');

-- --------------------------------------------------------

--
-- Table structure for table `school_year`
--

CREATE TABLE `school_year` (
  `school_year_id` int(11) NOT NULL,
  `school_year_name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `school_year`
--

INSERT INTO `school_year` (`school_year_id`, `school_year_name`, `status`) VALUES
(1, '2023-2024', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `section_id` int(11) NOT NULL,
  `section_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`section_id`, `section_name`) VALUES
(9, 'A'),
(10, 'B'),
(11, 'C'),
(12, 'D'),
(13, 'E'),
(14, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester_id` int(11) NOT NULL,
  `semester_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester_id`, `semester_name`) VALUES
(1, 'FIRST'),
(2, 'SECOND');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `status_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`status_id`, `status_name`) VALUES
(1, 'Regular'),
(2, 'Irregular');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(9) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `course` int(11) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `school_year` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `major` int(11) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` text NOT NULL,
  `otp_creation_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sched_code` int(9) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `units` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `day` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sched_code`, `course_code`, `course_desc`, `units`, `time`, `day`, `room`) VALUES
(202311044, 'DCIT 65A ', 'SOCIAL AND PROFESSIONAL ISSUES ', '3', '12:00-14:00 / 14:00-15:00 ', 'T / T', 'CL 6 / CL 6'),
(202311045, 'ITEC 111 ', 'IT ELECTIVE 3', '3', '07:00-09:00 / 13:00-16:00 ', 'TH / S ', 'LR 2 / A-304'),
(202311046, 'ITEC 116  ', 'IT ELECTIVE 4 (SYSTEMS INTEGRATION) ', '3', ' 07:00-09:00 / 09:00-12:00  ', 'S / S', 'CL 7 / TBA'),
(202311047, 'ITEC 110', 'SYSTEMS ADMINISTRATION AND MAINTENANCE', '3', '15:00-17:00 / 17:00-20:00 ', 'TH / TH ', 'TBA / CL 2'),
(202311048, ' ITEC 200-B', 'CAPSTONE PROJECT AND RESEARCH', '3', '10:00-13:00 ', 'TH ', 'TBA');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `year_id` int(11) NOT NULL,
  `year_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`year_id`, `year_name`) VALUES
(1, 'FIRST'),
(2, 'SECOND'),
(3, 'THIRD'),
(4, 'FOURTH');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `enrolled_subjects`
--
ALTER TABLE `enrolled_subjects`
  ADD KEY `fk_faculty_id` (`faculty_id`),
  ADD KEY `fk_student_id` (`student_id`),
  ADD KEY `fk_sched_code_id` (`sched_code_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `fk_dept_id` (`dept_id`);

--
-- Indexes for table `major`
--
ALTER TABLE `major`
  ADD PRIMARY KEY (`major_id`);

--
-- Indexes for table `school_year`
--
ALTER TABLE `school_year`
  ADD PRIMARY KEY (`school_year_id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_semester` (`semester`) USING BTREE,
  ADD KEY `fk_school_year` (`school_year`),
  ADD KEY `fk_course` (`course`),
  ADD KEY `fk_year` (`year`),
  ADD KEY `fk_status` (`status`),
  ADD KEY `fk_major` (`major`),
  ADD KEY `fk_section` (`section`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sched_code`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`year_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `major`
--
ALTER TABLE `major`
  MODIFY `major_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `school_year`
--
ALTER TABLE `school_year`
  MODIFY `school_year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `section`
--
ALTER TABLE `section`
  MODIFY `section_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `year_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrolled_subjects`
--
ALTER TABLE `enrolled_subjects`
  ADD CONSTRAINT `fk_faculty_id` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `fk_sched_code_id` FOREIGN KEY (`sched_code_id`) REFERENCES `subjects` (`sched_code`),
  ADD CONSTRAINT `fk_student_id` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `fk_dept_id` FOREIGN KEY (`dept_id`) REFERENCES `department` (`dept_id`);

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `fk_course` FOREIGN KEY (`course`) REFERENCES `course` (`course_id`),
  ADD CONSTRAINT `fk_major` FOREIGN KEY (`major`) REFERENCES `major` (`major_id`),
  ADD CONSTRAINT `fk_school_year_id` FOREIGN KEY (`school_year`) REFERENCES `school_year` (`school_year_id`),
  ADD CONSTRAINT `fk_section_id` FOREIGN KEY (`section`) REFERENCES `section` (`section_id`),
  ADD CONSTRAINT `fk_semester_id` FOREIGN KEY (`semester`) REFERENCES `semester` (`semester_id`),
  ADD CONSTRAINT `fk_status` FOREIGN KEY (`status`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `fk_year` FOREIGN KEY (`year`) REFERENCES `year` (`year_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
