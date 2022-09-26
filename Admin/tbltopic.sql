-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 07:00 AM
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
(1, 'Why we learn Python?', 'This video explains what all can be done using python programming language. You can create game using python, create website using python, create machine learning projects using python, create GUIs using python. ', 1, 'https://www.youtube.com/watch?v=vrQlEhmVFDA'),
(2, 'How to download and install python?', 'In this video I have downloaded python and installed pycharm on windows. This video also explains why to use an IDE!', 1, 'https://www.youtube.com/watch?v=MoeQlmeJnPg'),
(3, 'First Python Program', 'This video will help you how to write a program in Python', 1, 'https://www.youtube.com/watch?v=bfSHM-vx5lA'),
(4, 'Variables, Datatypes and Typecasting', 'This video will help you to how to declare a variable,what is datatype and typecasting.', 1, 'https://www.youtube.com/watch?v=z1-zfCvxybI'),
(5, 'Comments, Escape Sequences & Print Statement', 'what is comments,Escape Sequences & print statement in python.', 1, 'https://www.youtube.com/watch?v=uhUgIT68CoU'),
(6, 'String Slicing And Other Functions In Python', 'This video will help you to know that what is String slicing and other functions in python.', 1, 'https://www.youtube.com/watch?v=lPZn7zcGXQo');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tbltopic`
--
ALTER TABLE `tbltopic`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbltopic`
--
ALTER TABLE `tbltopic`
  ADD CONSTRAINT `tbltopic_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `tblcourse` (`course_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
