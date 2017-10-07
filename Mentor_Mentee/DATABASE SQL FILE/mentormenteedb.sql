-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2017 at 05:57 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mentormenteedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mastertbl`
--

CREATE TABLE IF NOT EXISTS `mastertbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pwd` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mastertbl`
--

INSERT INTO `mastertbl` (`id`, `pwd`, `level`) VALUES
(1, 'masterpwd123', 'teachertbl');

-- --------------------------------------------------------

--
-- Table structure for table `studenttbl`
--

CREATE TABLE IF NOT EXISTS `studenttbl` (
  `sid` int(6) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `sclass` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `ques` varchar(50) NOT NULL,
  `ans` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=108 ;

--
-- Dumping data for table `studenttbl`
--

INSERT INTO `studenttbl` (`sid`, `sname`, `sclass`, `phone`, `uname`, `pwd`, `ques`, `ans`) VALUES
(102, 'Rushikesh Raskar', 'MCA', '8007011856', 'raskar.rushikesh4 ', 'y2kAndroid311m', 'Home Town ', 'Nagar'),
(103, 'abhijeet', 'MCA', '1231231231', 'abhi123 ', 'new_password', 'city ', 'nagar'),
(104, 'Nikita Yengul', 'MCA', '1231231231', 'nikita24 ', 'nikita123', 'city ', 'nagar'),
(105, 'Abhi', 'MCA', '1231231231', 'abhi123@gmail.com', 'abhi123123', 'skill ', 'drawing'),
(106, 'student123', 'MCA', '1231231231', 'student123', 'student123', '123123 ', '123123'),
(107, 'abc xyz', 'MBA', '1231231231', 'abcxyz123', 'abcxyz123', 'city ', 'nagar');

-- --------------------------------------------------------

--
-- Table structure for table `teachertbl`
--

CREATE TABLE IF NOT EXISTS `teachertbl` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `sname` varchar(30) NOT NULL,
  `uname` varchar(30) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `phone` int(10) NOT NULL,
  `ques` varchar(30) NOT NULL,
  `ans` varchar(20) NOT NULL,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `teachertbl`
--

INSERT INTO `teachertbl` (`tid`, `sname`, `uname`, `pwd`, `phone`, `ques`, `ans`) VALUES
(1, 'teacher test', 'test123', 'test123', 1231231231, 'city', 'nagar'),
(2, 'teacher test', 'teacher123', 'teacher123', 1231231231, 'city', 'nagar'),
(5, 'teacher', 'teacher321', 'teacher321', 1231231231, 'city', 'pune'),
(6, 'Teacher Test', 'teacher543', 'teacher543', 1231231231, 'city', 'nagar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
