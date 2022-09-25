-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 24, 2022 at 05:50 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courses`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_contact` varchar(10) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_name` text NOT NULL,
  `admin_bdate` date NOT NULL,
  `admin_gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`admin_id`, `admin_email`, `admin_contact`, `admin_password`, `admin_name`, `admin_bdate`, `admin_gender`) VALUES
(2, 'ms.pankhania@gmail.com', '9999900999', '1230', 'Mariyam', '2003-01-23', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `course_id` int(11) NOT NULL,
  `course_name` text NOT NULL,
  `course_desc` text NOT NULL,
  `course_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`course_id`, `course_name`, `course_desc`, `course_img`) VALUES
(1, 'HTML', 'HTML means hypertext markup language.\r\nHTML is the standard markup language for Web pages.\r\nWith HTML you can create your own Website.\r\nHTML is easy to learn - You will enjoy it!', 'courseImages/htmlbannerfinal.png'),
(11, 'JavaScript', 'JavaScript is the world\'s most popular programming language.\r\nJavaScript is the programming language of the Web.\r\nJavaScript is easy to learn.\r\nThis tutorial will teach you JavaScript from basic to advanced.', 'courseImages/jsbannerfinal.png'),
(14, 'C Programming', 'C is a general-purpose programming language created by Dennis Ritchie at the Bell Laboratories in 1972.\r\nIt is a very popular language, despite being old.\r\nC is strongly associated with UNIX, as it was developed to write the UNIX operating system.', '/courseImages/cbannerfinal.png');

-- --------------------------------------------------------

--
-- Table structure for table `tblenroll`
--

CREATE TABLE `tblenroll` (
  `enroll_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `feedback_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `feedback_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`feedback_id`, `user_id`, `feedback_desc`) VALUES
(7, 2, 'Very Useful Content.');

-- --------------------------------------------------------

--
-- Table structure for table `tblregister`
--

CREATE TABLE `tblregister` (
  `user_id` int(11) NOT NULL,
  `user_name` text NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL,
  `contact_no` varchar(10) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp(),
  `security_question` text NOT NULL,
  `security_answer` text NOT NULL,
  `status` varchar(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblregister`
--

INSERT INTO `tblregister` (`user_id`, `user_name`, `email_id`, `password`, `contact_no`, `first_name`, `last_name`, `date_of_birth`, `gender`, `registration_date`, `security_question`, `security_answer`, `status`) VALUES
(2, 'mari23', 'ms.pankh@gmail.com', '123', '9328282839', 'Mary', 'Pankh', '2003-01-01', 'Female', '2022-09-04 16:52:33', '', '', '1'),
(3, 'Mohini Chaudhary', 'mohiniChaudhary@gmail.com', '123456789', '932828289', 'Mohini ', 'Chaudhary', '2003-04-23', 'Female', '2022-09-19 08:20:20', '', '', '1'),
(4, 'Shivani', 'shivu@gmail.com', '1230', '932828289', 'shivu', 'shinde', '2002-09-23', 'Female', '2022-09-19 10:24:35', '', '', '1'),
(5, 'MohiniChaudhari', 'james@gmail.com', '1234', '932828289', 'mohi', 'chaudhari', '2022-09-06', 'Female', '2022-09-21 10:32:00', '', '', '-1');

-- --------------------------------------------------------

--
-- Table structure for table `tbltopic`
--

CREATE TABLE `tbltopic` (
  `topic_id` int(11) NOT NULL,
  `topic_name` text NOT NULL,
  `topic_desc` text NOT NULL,
  `course_id` int(11) NOT NULL,
  `topic_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbltopic`
--

INSERT INTO `tbltopic` (`topic_id`, `topic_name`, `topic_desc`, `course_id`, `topic_url`) VALUES
(1, 'BASIC TAG', 'In this topic we will learn about basic html tags like <html>,<head>,<body>,<title>,etc ', 1, 'https://youtu.be/BsDoLVMnmZs'),
(2, 'Introduction to HTML', 'In this topic you will learn how a basic web page is made using HTML', 1, 'https://www.youtube.com/watch?v=6mbwJ2xhgzM&list=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg&ab_channel=CodeWithHarry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `tblenroll`
--
ALTER TABLE `tblenroll`
  ADD PRIMARY KEY (`enroll_id`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `Foreign Key` (`user_id`);

--
-- Indexes for table `tblregister`
--
ALTER TABLE `tblregister`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbltopic`
--
ALTER TABLE `tbltopic`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `course_id` (`course_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tblenroll`
--
ALTER TABLE `tblenroll`
  MODIFY `enroll_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblregister`
--
ALTER TABLE `tblregister`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbltopic`
--
ALTER TABLE `tbltopic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`user_id`) REFERENCES `tblregister` (`user_id`);

--
-- Constraints for table `tbltopic`
--
ALTER TABLE `tbltopic`
  ADD CONSTRAINT `tbltopic_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
