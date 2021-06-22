-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 22, 2021 at 04:00 AM
-- Server version: 8.0.20
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course_registration`
--
CREATE DATABASE IF NOT EXISTS `course_registration` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `course_registration`;

-- --------------------------------------------------------

--
-- Table structure for table `advisor`
--

DROP TABLE IF EXISTS `advisor`;
CREATE TABLE `advisor` (
  `staff_id` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `advisor`
--

INSERT INTO `advisor` (`staff_id`, `first_name`, `lastname`) VALUES
('advisor1', 'Robb', 'Chris'),
('advisor1', 'Gianluca', 'Ramirez'),
('advisor2', 'Joss', 'Rasmussen'),
('advisor3', 'Joao', 'Potter'),
('advisor4', 'Frankie', 'Blanchard'),
('advisor5', 'Shiv', 'Doherty'),
('advisor6', 'Loretta', 'Frederick'),
('advisor7', 'Aliyah', 'Lister'),
('advisor8', 'Hector', 'Thomson'),
('advisor9', 'Briony', 'Mooney'),
('advisor10', 'Aqsa', 'Millington'),
('advisor11', 'Huseyin', 'Santiago'),
('advisor12', 'Jane', 'Maynard'),
('advisor13', 'Emilie', 'Huang'),
('advisor14', 'Sierra', 'Burton'),
('advisor15', 'Bianka', 'Wilkes'),
('advisor16', 'Deacon', 'Griffin'),
('advisor17', 'Ciara', 'Elliott'),
('advisor18', 'Aarron', 'Jarvis'),
('advisor19', 'Judith', 'Campos'),
('advisor20', 'Willard', 'Suarez'),
('advisor21', 'Marsha', 'Manning'),
('advisor22', 'Fern', 'Ferry'),
('advisor23', 'Codey', 'Ball'),
('advisor24', 'Harlow', 'Hickman'),
('advisor25', 'Milo', 'Rowley'),
('advisor26', 'Julie', 'Weir'),
('advisor27', 'Griff', 'Garcia'),
('advisor28', 'Cade', 'Gibson'),
('advisor29', 'Henna', 'Terry'),
('advisor30', 'Gurleen', 'Dorsey'),
('advisor31', 'Luis', 'Ballard'),
('advisor32', 'Sabah', 'Pittman'),
('advisor33', 'Jocelyn', 'Lin'),
('advisor34', 'Cristina', 'Brett'),
('advisor35', 'Maximilian', 'Patton'),
('advisor36', 'Gracie', 'Reeve'),
('advisor37', 'Elly', 'Lam'),
('advisor38', 'Justine', 'Stuart'),
('advisor39', 'Hadassah', 'Drummond'),
('advisor40', 'Nayan', 'Hickman'),
('advisor41', 'Chelsey', 'Turner'),
('advisor42', 'Jenson', 'Porter'),
('advisor43', 'Chanelle', 'Ryder'),
('advisor44', 'Calvin', 'Vincent'),
('advisor45', 'Kara', 'Alcock'),
('advisor46', 'Leroy', 'Pacheco'),
('advisor47', 'Marcia', 'Tomlinson'),
('advisor48', 'Bernice', 'Edmonds'),
('advisor49', 'Billie', 'Boyle'),
('advisor50', 'Corban', 'Stanley'),
('advisor51', 'Brayden', 'Rodgers'),
('advisor52', 'Rosalind', 'OConnor'),
('advisor53', 'Ioan', 'Owen'),
('advisor54', 'Olaf', 'Mercer'),
('advisor55', 'Darlene', 'Lancaster'),
('advisor56', 'Huzaifa', 'Cresswell'),
('advisor57', 'Anisha', 'Richardson'),
('advisor58', 'Abbigail', 'Cordova'),
('advisor59', 'Clay', 'Parsons'),
('advisor60', 'Cobie', 'Findlay'),
('advisor61', 'Winston', 'Carpenter'),
('advisor62', 'Tamar', 'Ayers'),
('advisor63', 'Mildred', 'Gentry'),
('advisor64', 'Abel', 'Mcghee'),
('advisor65', 'Leia', 'Cherry'),
('advisor66', 'Nyah', 'Tang'),
('advisor67', 'Liyana', 'Gaines'),
('advisor68', 'Tylor', 'Pritchard'),
('advisor69', 'Damian', 'ONeill'),
('advisor70', 'Harlow', 'Norris'),
('advisor71', 'Aysha', 'Boyd'),
('advisor72', 'Brooke', 'Hogan'),
('advisor73', 'Kingsley', 'Ortega'),
('advisor74', 'Jeffrey', 'Welch'),
('advisor75', 'Kai', 'Stone'),
('advisor76', 'Flora', 'Mann'),
('advisor77', 'Luke', 'Rivers'),
('advisor78', 'Preston', 'Kaur'),
('advisor79', 'Safah', 'Nixon'),
('advisor80', 'Samir', 'Aguilar'),
('advisor81', 'Reon', 'Mccaffrey'),
('advisor82', 'Taylor', 'Cousins'),
('advisor83', 'Hamid', 'Holding'),
('advisor84', 'Jay-Jay', 'Mustafa'),
('advisor85', 'Eshal', 'Feeney'),
('advisor86', 'Constance', 'Diaz'),
('advisor87', 'Philippa', 'Frederick'),
('advisor88', 'Polly', 'Roth'),
('advisor89', 'Sadiyah', 'Ahmad'),
('advisor90', 'Ellouise', 'Oakley'),
('advisor91', 'Harmony', 'Taylor'),
('advisor92', 'Rizwan', 'Dolan'),
('advisor93', 'Annalise', 'Fry'),
('advisor94', 'Marlon', 'Velazquez'),
('advisor95', 'Eliot', 'Mackay'),
('advisor96', 'Everett', 'Bryant'),
('advisor97', 'Mahnoor', 'Eastwood'),
('advisor98', 'Caiden', 'Pearson'),
('advisor99', 'Bob', 'Sweeney'),
('advisor100', 'Eugene', 'Walmsley'),
('advisor101', 'Macsen', 'Eaton'),
('advisor102', 'Rosina', 'Phillips'),
('advisor103', 'Cory', 'Whiteley'),
('advisor104', 'Frankie', 'Newman'),
('advisor105', 'Alysia', 'Sears'),
('advisor106', 'Tyson', 'Vo'),
('advisor107', 'Hisham', 'Lawrence'),
('advisor108', 'Reef', 'Freeman'),
('advisor109', 'Alexia', 'Delarosa'),
('advisor110', 'Kameron', 'Serrano'),
('advisor111', 'Jacque', 'Guzman'),
('advisor112', 'Isis', 'May'),
('advisor113', 'Bea', 'Forrest'),
('advisor114', 'Elisabeth', 'Palmer'),
('advisor115', 'Tommy', 'Marsden'),
('advisor116', 'Ivie', 'Lyon'),
('advisor117', 'Heena', 'Lawson'),
('advisor118', 'Layla-Mae', 'Gibson'),
('advisor119', 'Stefano', 'Coulson'),
('advisor120', 'Amanah', 'Kirkpatrick'),
('advisor121', 'Maaria', 'Crouch'),
('advisor122', 'Ella-Grace', 'Hibbert'),
('advisor123', 'Bruno', 'Bowman'),
('advisor124', 'Mathew', 'Partridge'),
('advisor125', 'Bethanie', 'Jaramillo'),
('advisor126', 'Curtis', 'Povey'),
('advisor127', 'Charles', 'Watt'),
('advisor128', 'Ellisha', 'Kane'),
('advisor129', 'Murphy', 'Hull'),
('advisor130', 'Farhan', 'Torres');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `course_id` int UNSIGNED NOT NULL,
  `course_title` varchar(255) NOT NULL,
  `credit` int NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` int UNSIGNED NOT NULL,
  `open_for_enrollment` varchar(255) NOT NULL,
  `prereq_id` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_title`, `credit`, `semester`, `year`, `open_for_enrollment`, `prereq_id`) VALUES
(5110, 'Database Systems', 3, 'spring', 2020, 'yes', 0),
(5120, 'Web based applications', 3, 'fall', 2020, 'yes', 0),
(5130, 'IT Security', 3, 'Fall', 2021, '', 0),
(5400, 'Python', 3, 'Spring', 2022, 'yes', 0),
(4410, 'Info Sys Basics', 3, 'Fall', 2020, '', 0),
(5810, 'Object-Oriented Java', 3, 'Fall', 2021, '', 0),
(5820, 'Data Structure & Algorithm', 3, 'Spring', 2022, 'yes', 0),
(5375, 'Intro to Ruby', 3, 'Fall', 2021, 'yes', 0),
(5750, 'Cloud Computing', 3, 'Summer', 2021, 'yes', 0);

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

DROP TABLE IF EXISTS `enrollment`;
CREATE TABLE `enrollment` (
  `enroll_id` int UNSIGNED NOT NULL,
  `student_id` varchar(128) NOT NULL,
  `course_id` int UNSIGNED NOT NULL,
  `grade` char(2) NOT NULL,
  `date_dropped` date NOT NULL,
  `date_enrolled` date NOT NULL,
  `semester` varchar(255) NOT NULL,
  `year` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `enrollment`
--

INSERT INTO `enrollment` (`enroll_id`, `student_id`, `course_id`, `grade`, `date_dropped`, `date_enrolled`, `semester`, `year`) VALUES
(1, 'u1330045', 5110, 'A', '0000-00-00', '2021-02-09', 'spring', 2020),
(19, 'u1330045', 5120, '', '0000-00-00', '2021-03-16', 'spring', 2021),
(14, 'u1330046', 5130, '', '0000-00-00', '2021-03-16', 'spring', 2021),
(16, 'u1330046', 5110, '', '0000-00-00', '2021-03-16', 'spring', 2021),
(77, 'u1393058', 5400, 'A', '2099-12-30', '2021-03-16', 'fall', 2020),
(79, 'u1302559', 5820, 'B', '2099-12-30', '2021-03-16', 'fall', 2020),
(97, 'u1385396', 5400, 'C', '2099-12-30', '2021-02-10', 'fall', 2021),
(35, 'u1302724', 5820, 'C', '2099-12-30', '2021-03-16', 'summer', 2021),
(34, 'u1302724', 5400, 'A', '2099-12-30', '2021-02-10', 'fall', 2021),
(26, 'u1322136', 5820, 'A', '2099-12-30', '2021-04-03', 'fall', 2021),
(49, 'u1326444', 5400, 'B', '2099-12-30', '2021-03-16', 'fall', 2021),
(50, 'u1352060', 5375, 'C', '2099-12-30', '2021-02-10', 'fall', 2020),
(87, 'u1352060', 5750, 'C', '2099-12-30', '2021-04-03', 'spring', 2020),
(95, 'u1348805', 5750, 'C', '2099-12-30', '2021-03-16', 'fall', 2020),
(88, 'u1383858', 5750, 'B', '2099-12-30', '2021-03-16', 'summer', 2021),
(73, 'u1372885', 5820, 'A', '2099-12-30', '2021-03-16', 'fall', 2021),
(91, 'u1372885', 5375, 'A', '2099-12-30', '2021-03-16', 'fall', 2020),
(28, 'u1350233', 5750, 'A', '2099-12-30', '2021-03-16', 'fall', 2020);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

DROP TABLE IF EXISTS `faculty`;
CREATE TABLE `faculty` (
  `faculty_id` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `first_name`, `last_name`) VALUES
('admin3', 'Velazquez', 'Velazquez'),
('admin4', 'Mackay', 'Mackay'),
('admin5', 'Bryant', 'Bryant'),
('admin6', 'Eastwood', 'Eastwood'),
('admin7', 'Pearson', 'Pearson'),
('admin8', 'Sweeney', 'Sweeney'),
('admin9', 'Walmsley', 'Walmsley'),
('admin10', 'Eaton', 'Eaton'),
('admin11', 'Phillips', 'Phillips'),
('admin12', 'Whiteley', 'Whiteley'),
('admin13', 'Newman', 'Newman'),
('admin14', 'Sears', 'Sears'),
('admin15', 'Vo', 'Vo'),
('admin16', 'Lawrence', 'Lawrence'),
('admin17', 'Freeman', 'Freeman'),
('admin18', 'Delarosa', 'Delarosa'),
('admin19', 'Serrano', 'Serrano'),
('admin20', 'Guzman', 'Guzman'),
('admin21', 'May', 'May'),
('admin22', 'Forrest', 'Forrest'),
('admin23', 'Palmer', 'Palmer'),
('admin24', 'Marsden', 'Marsden'),
('admin25', 'Lyon', 'Lyon'),
('admin26', 'Lawson', 'Lawson'),
('admin27', 'Gibson', 'Gibson'),
('admin28', 'Coulson', 'Coulson'),
('admin29', 'Kirkpatrick', 'Kirkpatrick'),
('admin30', 'Crouch', 'Crouch'),
('admin31', 'Hibbert', 'Hibbert'),
('admin32', 'Bowman', 'Bowman'),
('admin33', 'Partridge', 'Partridge'),
('admin34', 'Jaramillo', 'Jaramillo'),
('admin35', 'Povey', 'Povey'),
('admin36', 'Watt', 'Watt'),
('admin37', 'Kane', 'Kane'),
('admin38', 'Hull', 'Hull'),
('admin39', 'Torres', 'Torres');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `user_id` varchar(128) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `feedback_id` int NOT NULL,
  `date_submitted` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`user_id`, `content`, `feedback_id`, `date_submitted`) VALUES
('u1330046', 'sdf', 1, '2021-03-16'),
('u1330046', 'sfdf', 2, '2021-03-16'),
('u1322136', 'good', 3, '2021-03-16'),
('u1330046', 'nice', 4, '2021-03-16'),
('u1330046', 'super', 5, '2021-03-16'),
('u1302559', 'nice', 6, '2021-03-16'),
('u1322136', 'super', 7, '2021-03-16'),
('u1330046', 'nice', 8, '2021-03-16'),
('u1330046', 'good', 9, '2021-03-16'),
('u1322136', 'nice', 10, '2021-03-16'),
('u1330046', 'good', 11, '2021-03-16'),
('u1330046', 'nice', 12, '2021-03-16'),
('u1322136', 'super', 13, '2021-03-16'),
('u1322136', 'nice', 14, '2021-03-16'),
('u1302559', 'nice', 15, '2021-03-16'),
('u1330046', 'nice', 16, '2021-03-16'),
('u1330046', 'good', 17, '2021-03-16'),
('u1330046', 'nice', 18, '2021-03-16'),
('u1322136', 'super', 19, '2021-03-16'),
('u1322136', 'nice', 20, '2021-03-16'),
('u1302559', 'nice', 21, '2021-03-16'),
('u1330046', 'nice', 22, '2021-03-16'),
('u1330045', 'sdfsdf', 23, '2021-03-21');

-- --------------------------------------------------------

--
-- Table structure for table `prereq`
--

DROP TABLE IF EXISTS `prereq`;
CREATE TABLE `prereq` (
  `prereq_id` int UNSIGNED NOT NULL,
  `prereq` varchar(8000) NOT NULL,
  `type` varchar(8000) NOT NULL,
  `credit` int UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `prereq`
--

INSERT INTO `prereq` (`prereq_id`, `prereq`, `type`, `credit`) VALUES
(1, 'Basic understanding of SQL', 'database', 3),
(2, 'Intro Computing', 'Computer', 3),
(3, 'Matlab', 'Math', 1),
(4, 'Business Concept', 'Business', 3),
(5, 'Baby Steps', 'College', 3),
(6, 'Intermediate SQL', 'database', 3),
(7, 'Basic HTML', 'Computer', 3),
(8, 'Intro to Econ', 'econ', 3),
(9, 'Intermediate Microecon', 'econ', 3),
(10, 'Intermediate Macroecon', 'econ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

DROP TABLE IF EXISTS `program`;
CREATE TABLE `program` (
  `program_id` int NOT NULL,
  `type` varchar(128) NOT NULL,
  `program_name` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`program_id`, `type`, `program_name`) VALUES
(1, 'Masters', 'Information Systems'),
(2, 'Masters', 'Business analytics'),
(3, 'Masters', 'Information Systems'),
(4, 'Bechelors', 'Computing design'),
(5, 'Bechelors', 'Computer science'),
(6, 'Masters', 'Statistics'),
(7, 'Masters', 'Finance'),
(8, 'Masters', 'Healthcare management'),
(9, 'Masters', 'Education'),
(10, 'Masters', 'Economics');

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

DROP TABLE IF EXISTS `studentinfo`;
CREATE TABLE `studentinfo` (
  `uid` varchar(128) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(1000) NOT NULL,
  `contact_no` int UNSIGNED NOT NULL,
  `advisor_id` varchar(128) NOT NULL,
  `program_id` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`uid`, `fname`, `lname`, `dob`, `address`, `contact_no`, `advisor_id`, `program_id`) VALUES
('u1330045', 'pramila', 'Viswanathan', '2021-07-07', 'The Essex,\r\n350 South 600 East, Apt 214', 222222222, 'advisor1', 1),
('u1330046', 'Preethi', 'The', '2021-03-01', 'The Essex\r\n350 South 600 East, Apt 214', 4294967295, 'advisor1', 2),
('u1350233', 'Jacque', 'Serrano', '2000-01-03', '8060 Kingston Ave. Longview, TX 75604', 123123132, 'advisor1', 1),
('u1352060', 'Eugene', 'Walmsley', '2000-01-03', '261 Vine Lane Rockledge, FL 32955', 123123132, 'advisor1', 1),
('u1326444', 'Bob', 'Sweeney', '2021-07-07', '409 Inverness Lane Oshkosh, WI 54901', 123123132, 'advisor3', 4),
('u1393058', 'Preethi', 'The', '2021-03-01', '201 Presidents Cir, Salt Lake City, UT 84112, Apt 214', 4294967295, 'advisor3', 4),
('u1302559', 'Macsen', 'Eaton', '2021-03-01', '201 Presidents Cir, Salt Lake City, UT 84112, Apt 214', 4294967295, 'advisor6', 5),
('u1385396', 'Rosina', 'Phillips', '2000-01-03', '7852 Dunbar Court Pewaukee, WI 53072', 123123132, 'advisor7', 1),
('u1322136', 'Cory', 'Whiteley', '2021-03-01', '201 Presidents Cir, Salt Lake City, UT 84112, Apt 214', 4294967295, 'advisor2', 1),
('u1372885', 'Velazquez', 'Velazquez', '2000-01-03', '581 Maiden Rd. South Richmond Hill, NY 11419', 123123132, 'advisor2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `password`, `role`) VALUES
('u1330045', '$2y$10$19D6HxqYsr5ry74Fe.b7VONjtk2lmnjDQPHucAoFCjtDAMXgf2UVK', 'student'),
('admin1', '$2y$10$ZP5ZPJUHeVYv0TOKpE6Yp.Vhdf2dgFwsQkJRGW8uwxNxvs9Ax9b6K', 'admin'),
('advisor1', '$2y$10$3Q3/mtSsD16BKm8lhUG4Ve7sujyFfja84N.Fi1V4yNy8LpoaWz4Dq', 'advisor'),
('u1330046', '$2y$10$egk1igaxJRY8GCY1vEf41Oh.o4i.2LeLrJ6QtzrGtFI9j/YfrBkp6', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisor`
--
ALTER TABLE `advisor`
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`enroll_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD KEY `faculty_id` (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `prereq`
--
ALTER TABLE `prereq`
  ADD PRIMARY KEY (`prereq_id`);

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`program_id`);

--
-- Indexes for table `studentinfo`
--
ALTER TABLE `studentinfo`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `program_id` (`program_id`),
  ADD KEY `advisor_id` (`advisor_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `enroll_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `prereq`
--
ALTER TABLE `prereq`
  MODIFY `prereq_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `program_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
