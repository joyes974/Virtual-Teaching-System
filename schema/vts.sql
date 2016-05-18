-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2012 at 01:36 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `vts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=117 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(115, 'bokor', '000', 'bokor@gmail.com'),
(113, 'Bappi', 'bappi', 'bappi@hotmail.com'),
(110, 'mithun', 'mithun', 'mithun@gmail.com'),
(111, 'Joys', 'joys', 'joys@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `parent_id`, `name`, `status`) VALUES
(22, 17, 'Multimedia', 'active'),
(21, 18, 'Transistor', 'active'),
(20, 17, 'Algorithm', 'active'),
(19, 17, 'Graph Theory', 'active'),
(18, 0, 'EEE', 'active'),
(17, 0, 'CSE', 'active'),
(23, 0, 'ME', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `lecture_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_email` varchar(30) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `lecture_title` varchar(100) NOT NULL,
  `lecture` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`lecture_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Dumping data for table `lecture`
--

INSERT INTO `lecture` (`lecture_id`, `teacher_email`, `course_title`, `lecture_title`, `lecture`, `status`) VALUES
(74, 'a@gmail.com', '19', 'tree', 'Doc11.docx', 'active'),
(75, 'a@gmail.com', '21', 'fg', 'Doc1.docx', 'active'),
(73, 'a@gmail.com', '19', 'tree', 'Doc1.docx', 'active'),
(72, 'a@gmail.com', '22', 'Audio', 'm.pdf', 'active'),
(70, 'a@gmail.com', '19', 'ALU', 'ALU1.ppt', 'active'),
(71, 'a@gmail.com', '19', 'ALU1', 'ALU2.ppt', 'active'),
(69, 'a@gmail.com', '20', 'a', '11.pdf', 'active'),
(68, 'a@gmail.com', '20', 'aa', '1.pdf', 'active'),
(64, 'arif@gmail.com', '20', 'Primary Key', '117.pdf', 'active'),
(65, 'arif@gmail.com', '20', 'ALU', 'ALU.ppt', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE IF NOT EXISTS `teacher` (
  `teacher_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_name` varchar(60) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `teacher_password` varchar(50) NOT NULL,
  `current_institution` varchar(250) NOT NULL,
  `other_institution` text NOT NULL,
  `graduate_institution` varchar(250) NOT NULL,
  `post_graduate_institution` varchar(250) NOT NULL,
  `other_degree` text NOT NULL,
  `interest_subject` text NOT NULL,
  `random` varchar(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `current_institution`, `other_institution`, `graduate_institution`, `post_graduate_institution`, `other_degree`, `interest_subject`, `random`, `status`) VALUES
(24, 'Arif11', 'arif@gmail.com', '123', 'sec', 'sec', 'iut', 'none', 'none', 'image', '8232', 'active'),
(22, 'Arif', 'a@gmail.com', '123', 'sec', 'sec', 'iut', 'none', 'none', 'image', '1874', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_answer`
--

CREATE TABLE IF NOT EXISTS `teacher_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(11) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `teacher_answer`
--

INSERT INTO `teacher_answer` (`answer_id`, `lecture_id`, `teacher_email`, `question`, `answer`, `status`) VALUES
(10, 55, 'a@gmail.com', 'tt', '1.pdf', 'active'),
(8, 52, 'a@gmail.com', 't', 'answer.pdf', 'active'),
(9, 53, 'a@gmail.com', 't111', 'answer.pdf', 'active'),
(11, 58, 'a@gmail.com', 'a', 'answer1.pdf', 'active'),
(12, 59, 'a@gmail.com', '1', 'answer3.pdf', 'active'),
(13, 62, 'a@gmail.com', 'a', 'answer4.pdf', 'active'),
(14, 63, 'a@gmail.com', '1', 'answer5.pdf', 'active'),
(15, 64, 'arif@gmail.com', 'question primary key', 'answer6.pdf', 'active'),
(16, 65, 'arif@gmail.com', 'alu', 'Doc1.docx', 'active'),
(25, 74, 'a@gmail.com', 'Next Question', 'Doc11.docx', 'active'),
(23, 72, 'a@gmail.com', 'What is multimedia', 'defination.pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(15) NOT NULL,
  `user_occupation` varchar(200) NOT NULL,
  `user_country` varchar(50) NOT NULL,
  `random` varchar(100) NOT NULL,
  `status` varchar(12) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_occupation`, `user_country`, `random`, `status`) VALUES
(19, 'Abur Rahim', 'rahim@gmail.com', '123456', 'Engineer', 'Pakistan', '24764', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user_question`
--

CREATE TABLE IF NOT EXISTS `user_question` (
  `question_id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `user_question`
--

INSERT INTO `user_question` (`question_id`, `lecture_id`, `user_email`, `question`, `status`) VALUES
(25, 72, 'rahim@gmail.com', 'What is multimedia', 'inactive');