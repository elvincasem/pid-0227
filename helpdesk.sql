-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2017 at 07:49 PM
-- Server version: 5.5.51-38.2
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `twohelpd_twohelpdesk`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryid` bigint(20) NOT NULL,
  `categoryvalue` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryvalue`) VALUES
(1, 'CCTV'),
(2, 'Desktop Computer'),
(3, 'Laptop'),
(4, 'Others'),
(5, 'Printer');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `customerid` bigint(20) NOT NULL,
  `cemail` varchar(300) NOT NULL DEFAULT 'NONE',
  `clname` varchar(300) DEFAULT NULL,
  `cfname` varchar(300) NOT NULL,
  `cmname` varchar(300) DEFAULT NULL,
  `caddress` text,
  `cmobileno` varchar(300) DEFAULT NULL,
  `cotherno` varchar(100) DEFAULT NULL,
  `cpassword` varchar(300) DEFAULT NULL,
  `deviceid` varchar(500) DEFAULT NULL,
  `customer_time_stamp` varchar(500) DEFAULT NULL,
  `ccompany` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `cemail`, `clname`, `cfname`, `cmname`, `caddress`, `cmobileno`, `cotherno`, `cpassword`, `deviceid`, `customer_time_stamp`, `ccompany`) VALUES
(81, 'none1', 'Tuyay', 'Marinell', 'C', '', '09127447738', '09064025849', '09127447738', NULL, NULL, 'PC4Me'),
(82, 'none1', 'Tuyay', 'Marinell', 'C', '', '09127447738', '09064025849', '09127447738', NULL, NULL, 'PC4Me');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `departmentid` bigint(20) NOT NULL,
  `departmentvalue` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentvalue`) VALUES
(1, 'Sales'),
(2, 'Technical');

-- --------------------------------------------------------

--
-- Table structure for table `remarks_agent`
--

CREATE TABLE IF NOT EXISTS `remarks_agent` (
  `aremarksid` bigint(20) NOT NULL,
  `aticketid` bigint(20) DEFAULT NULL,
  `aremarks_info` text,
  `atime_stamp` varchar(500) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `replytype` varchar(500) DEFAULT 'TEXT',
  `n_email` int(11) NOT NULL DEFAULT '0',
  `n_sms` int(11) NOT NULL DEFAULT '0',
  `n_mobile` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks_customer`
--

CREATE TABLE IF NOT EXISTS `remarks_customer` (
  `cremarksid` bigint(20) NOT NULL,
  `cticketid` bigint(20) DEFAULT NULL,
  `cremarks_info` text,
  `ctime_stamp` varchar(500) NOT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `creplytype` varchar(500) DEFAULT 'TEXT'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `remarks_file`
--

CREATE TABLE IF NOT EXISTS `remarks_file` (
  `fremarksid` bigint(20) NOT NULL,
  `fticketid` bigint(20) DEFAULT NULL,
  `fremarks_info` varchar(500) DEFAULT NULL,
  `ftime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fuid` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE IF NOT EXISTS `template` (
  `templateid` bigint(20) NOT NULL,
  `templatedescription` text
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `ticketid` bigint(20) NOT NULL,
  `categoryid` varchar(300) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `priority` varchar(300) DEFAULT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `assignedto_uid` bigint(20) DEFAULT NULL,
  `problem` text,
  `description` text,
  `history` text,
  `special_instruction` text,
  `serialno` varchar(500) DEFAULT NULL,
  `departmentid` varchar(500) DEFAULT NULL,
  `addedbyuid` bigint(20) DEFAULT NULL,
  `time_stamp` varchar(500) NOT NULL,
  `due_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets_log`
--

CREATE TABLE IF NOT EXISTS `tickets_log` (
  `tlogid` bigint(20) NOT NULL,
  `ticketid` bigint(20) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `remarks` text,
  `updatedby` bigint(20) DEFAULT NULL,
  `time_stamp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tickets_timeline`
--

CREATE TABLE IF NOT EXISTS `tickets_timeline` (
  `ttimeid` bigint(20) NOT NULL,
  `ticketid` bigint(20) DEFAULT NULL,
  `action` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'staff',
  `ustatus` varchar(1) NOT NULL,
  `mobileno` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `otherno` varchar(300) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `password`, `name`, `usertype`, `ustatus`, `mobileno`, `email`, `otherno`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin', '1', NULL, NULL, NULL),
(8, 'edgee', '482c811da5d5b4bc6d497ffa98491e38', 'Edgee', 'admin', '', NULL, NULL, NULL),
(14, 'Bryan', 'e10adc3949ba59abbe56e057f20f883e', 'Bryan Haban', 'admin', '', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `remarks_agent`
--
ALTER TABLE `remarks_agent`
  ADD PRIMARY KEY (`aremarksid`);

--
-- Indexes for table `remarks_customer`
--
ALTER TABLE `remarks_customer`
  ADD PRIMARY KEY (`cremarksid`);

--
-- Indexes for table `remarks_file`
--
ALTER TABLE `remarks_file`
  ADD PRIMARY KEY (`fremarksid`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`templateid`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticketid`);

--
-- Indexes for table `tickets_log`
--
ALTER TABLE `tickets_log`
  ADD PRIMARY KEY (`tlogid`);

--
-- Indexes for table `tickets_timeline`
--
ALTER TABLE `tickets_timeline`
  ADD PRIMARY KEY (`ttimeid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `remarks_agent`
--
ALTER TABLE `remarks_agent`
  MODIFY `aremarksid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `remarks_customer`
--
ALTER TABLE `remarks_customer`
  MODIFY `cremarksid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `remarks_file`
--
ALTER TABLE `remarks_file`
  MODIFY `fremarksid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `templateid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `ticketid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets_log`
--
ALTER TABLE `tickets_log`
  MODIFY `tlogid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tickets_timeline`
--
ALTER TABLE `tickets_timeline`
  MODIFY `ttimeid` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
