-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2020 at 12:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_pannel`
--

CREATE TABLE `admin_pannel` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_pannel`
--

INSERT INTO `admin_pannel` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `backend`
--

CREATE TABLE `backend` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `plane_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backend`
--

INSERT INTO `backend` (`id`, `username`, `password`, `plane_password`) VALUES
(1, 'backend', 'b43fdd98b1fd705ae4c3a10cf25aad8a', 'backend'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `create_assignment`
--

CREATE TABLE `create_assignment` (
  `semester` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `post_heading` varchar(255) NOT NULL,
  `docs` varchar(255) NOT NULL,
  `issueDate` date NOT NULL,
  `submissionDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_assignment`
--

INSERT INTO `create_assignment` (`semester`, `id`, `subject`, `post_heading`, `docs`, `issueDate`, `submissionDate`) VALUES
('4th Semester', 1, 'Operating System', 'hello', 'test.txt', '2020-09-07', '2020-10-02'),
('3rd Semester', 2, 'DBMS', 'hello dbms', 'luckTest.txt', '2020-09-07', '2020-09-11'),
('3rd Semester', 5, 'Numericals', 'maths assignment', 'Screenshot (2).png', '2020-09-08', '2000-02-05'),
('4th Semester', 6, 'Software Engineering', 'software hw', 'Screenshot (2).png', '2020-09-09', '2020-12-11'),
('4th Semester', 7, 'Software Engineering', 'umm', 'Preeti (1).zip', '2020-09-09', '2020-09-01'),
('4th Semester', 8, 'Software Engineering', 'umm', 'Preeti (1).zip', '2020-09-09', '2020-09-01'),
('4th Semester', 9, 'Software Engineering', 'umm', 'Preeti (1).zip', '2020-09-09', '2020-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `shared_notes`
--

CREATE TABLE `shared_notes` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `docs` varchar(255) NOT NULL,
  `shared_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shared_notes`
--

INSERT INTO `shared_notes` (`id`, `subject`, `semester`, `docs`, `shared_date`) VALUES
(1, 'Operating System', '4th Semester', 'fp.png', '2020-09-08'),
(2, 'Operating System', '4th Semester', 'fp.png', '2020-09-08'),
(3, 'PHP', '4th Semester', 'Screenshot (2).png', '2020-09-09'),
(4, 'Operating System', '4th Semester', 'Preeti.zip', '2020-09-09'),
(5, 'Operating System', '4th Semester', 'Preeti.zip', '2020-09-09'),
(6, 'Operating System', '4th Semester', 'Preeti.zip', '2020-09-09'),
(7, 'Operating System', '4th Semester', 'Preeti.zip', '2020-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `subject_table`
--

CREATE TABLE `subject_table` (
  `id` int(11) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject_table`
--

INSERT INTO `subject_table` (`id`, `semester`, `subject`) VALUES
(1, '4th Semester', 'PHP'),
(2, '4th Semester', 'Operating System'),
(3, '4th Semester', 'DBMS'),
(4, '4th Semester', 'Numericals'),
(5, '4th Semester', 'Software Engineering'),
(6, '1st Semester', 'Computer Fundamentals and Applications'),
(7, '1st Semester', 'Society and Technology'),
(8, '1st Semester', 'English I'),
(9, '1st Semester', 'Mathematics I'),
(10, '1st Semester', 'Digital Logic'),
(11, '2nd Semester', 'C Programming'),
(12, '2nd Semester', 'Financial Accounting'),
(13, '2nd Semester', 'English II'),
(14, '2nd Semester', 'Mathematics II'),
(15, '2nd Semester', 'Microprocessor and Computer Architecture'),
(16, '3rd Semester', 'Data Structure and Algorithms'),
(17, '3rd Semester', 'Probability and Statistics'),
(18, '3rd Semester', 'System Analysis and Design'),
(19, '3rd Semester', 'OOP in Java'),
(20, '3rd Semester', 'Web Technology');

-- --------------------------------------------------------

--
-- Table structure for table `submitted_assignment`
--

CREATE TABLE `submitted_assignment` (
  `semester` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `post_heading` varchar(255) NOT NULL,
  `docs` varchar(255) NOT NULL,
  `submitted_Date` date NOT NULL,
  `deadline` date NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submitted_assignment`
--

INSERT INTO `submitted_assignment` (`semester`, `id`, `subject`, `post_heading`, `docs`, `submitted_Date`, `deadline`, `username`) VALUES
('4th Semester', 1, 'PHP', 'product 4', 'Screenshot (2).png', '2020-09-08', '0000-00-00', 'Hari'),
('4th Semester', 3, 'DBMS', 'hello dbms', 'Screenshot (1).png,Screenshot (2).png,Screenshot (3).png,Screenshot (4).png', '2020-09-08', '2020-09-11', 'Jr'),
('4th Semester', 5, 'Operating System', 'hello', 'Screenshot (2).png,Exercise1.docx', '2020-09-08', '2020-10-02', ''),
('3rd Semester', 6, 'Operating System', 'hello', 'Screenshot (1).png', '2020-09-08', '2020-10-02', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_pannel`
--
ALTER TABLE `admin_pannel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backend`
--
ALTER TABLE `backend`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_assignment`
--
ALTER TABLE `create_assignment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shared_notes`
--
ALTER TABLE `shared_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_table`
--
ALTER TABLE `subject_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `submitted_assignment`
--
ALTER TABLE `submitted_assignment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_pannel`
--
ALTER TABLE `admin_pannel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `backend`
--
ALTER TABLE `backend`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `create_assignment`
--
ALTER TABLE `create_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `shared_notes`
--
ALTER TABLE `shared_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subject_table`
--
ALTER TABLE `subject_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `submitted_assignment`
--
ALTER TABLE `submitted_assignment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
