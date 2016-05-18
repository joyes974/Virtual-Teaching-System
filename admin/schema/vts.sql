-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2014 at 02:59 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=118 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(117, 'admin_cse', 'admin', 'admin@gmail.com'),
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
  `name` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `parent_id`, `name`, `status`) VALUES
(32, 0, 'ME', 'deactive'),
(30, 0, 'EEE', 'active'),
(31, 30, 'Introduction to Electrical Engineering', 'active'),
(29, 24, 'Wireless Network', 'active'),
(28, 24, 'Multimedia Theory', 'active'),
(27, 24, 'Computer Graphics', 'active'),
(24, 0, 'CSE', 'active'),
(33, 32, 'Basic Mechinical Engineering', 'active'),
(34, 24, 'CIS', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `lecture`
--

CREATE TABLE IF NOT EXISTS `lecture` (
  `lecture_id` int(11) NOT NULL AUTO_INCREMENT,
  `teacher_email` varchar(30) NOT NULL,
  `course_title` varchar(100) NOT NULL,
  `lecture_title` varchar(200) NOT NULL,
  `lecture` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`lecture_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_email`, `teacher_password`, `current_institution`, `other_institution`, `graduate_institution`, `post_graduate_institution`, `other_degree`, `interest_subject`, `random`, `status`) VALUES
(27, 'joyes', 'joyes@sec.ac.bd', '12345', 'sec', '', 'sec', '', '', 'cse,eee', '4949', 'inactive'),
(26, 'jjj', 'h@gmail.com', '4444', 'sec', '', 'sec', '', '', 'sec', '15710', 'inactive'),
(25, 'Mr. John', 'john@gmail.com', '123456', 'New Jursey University', 'MIT', 'MIT', 'MIT', 'N/A', 'Computer Graphics,Multimedia Theory', '14689', 'active'),
(28, 'hgiurghui', 'john123@gmail.com', '???????????????????', 'sec', 'werewf', 'fewefe', 'fvadsvdsa', 'vvadsvdav', 'dvdavdasvda', '8706', 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_answer`
--

CREATE TABLE IF NOT EXISTS `teacher_answer` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `lecture_id` int(11) NOT NULL,
  `teacher_email` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_occupation`, `user_country`, `random`, `status`) VALUES
(28, 'sani', 'sani@gmail.com', '??????', '??????', 'Bangladesh', '13355', 'inactive'),
(27, 'admin', 'john12@gmail.com', '123456', 'Stdentut', 'Bangladesh', '11025', 'active');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
