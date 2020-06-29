/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.17 : Database - helpdesk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `category` */

CREATE TABLE `category` (
  `categoryid` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Table structure for table `customer` */

CREATE TABLE `customer` (
  `customerid` bigint(20) NOT NULL AUTO_INCREMENT,
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
  `ccompany` varchar(500) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=1316 DEFAULT CHARSET=utf8;

/*Table structure for table `department` */

CREATE TABLE `department` (
  `departmentid` bigint(20) NOT NULL AUTO_INCREMENT,
  `departmentvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`departmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `priority` */

CREATE TABLE `priority` (
  `priorityid` bigint(20) NOT NULL AUTO_INCREMENT,
  `priorityvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`priorityid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Table structure for table `remarks_agent` */

CREATE TABLE `remarks_agent` (
  `aremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aticketid` bigint(20) DEFAULT NULL,
  `aremarks_info` text,
  `atime_stamp` varchar(500) NOT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `replytype` varchar(500) DEFAULT 'TEXT',
  `n_email` int(11) NOT NULL DEFAULT '0',
  `n_sms` int(11) NOT NULL DEFAULT '0',
  `n_mobile` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aremarksid`)
) ENGINE=InnoDB AUTO_INCREMENT=9915 DEFAULT CHARSET=latin1;

/*Table structure for table `remarks_customer` */

CREATE TABLE `remarks_customer` (
  `cremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cticketid` bigint(20) DEFAULT NULL,
  `cremarks_info` text,
  `ctime_stamp` varchar(500) NOT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `creplytype` varchar(500) DEFAULT 'TEXT',
  PRIMARY KEY (`cremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `remarks_file` */

CREATE TABLE `remarks_file` (
  `fremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `fticketid` bigint(20) DEFAULT NULL,
  `fremarks_info` varchar(500) DEFAULT NULL,
  `ftime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fuid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`fremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `template` */

CREATE TABLE `template` (
  `templateid` bigint(20) NOT NULL AUTO_INCREMENT,
  `templatedescription` text,
  `templatefield` varchar(500) NOT NULL,
  PRIMARY KEY (`templateid`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

/*Table structure for table `tickets` */

CREATE TABLE `tickets` (
  `ticketid` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryid` varchar(500) DEFAULT NULL,
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
  `due_date` date DEFAULT NULL,
  `ticket_status` varchar(500) NOT NULL DEFAULT 'ACTIVE',
  PRIMARY KEY (`ticketid`)
) ENGINE=InnoDB AUTO_INCREMENT=1620 DEFAULT CHARSET=latin1;

/*Table structure for table `tickets_log` */

CREATE TABLE `tickets_log` (
  `tlogid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `remarks` text,
  `updatedby` bigint(20) DEFAULT NULL,
  `time_stamp` varchar(500) NOT NULL,
  PRIMARY KEY (`tlogid`)
) ENGINE=InnoDB AUTO_INCREMENT=3867 DEFAULT CHARSET=latin1;

/*Table structure for table `tickets_timeline` */

CREATE TABLE `tickets_timeline` (
  `ttimeid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `action` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ttimeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `users` */

CREATE TABLE `users` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'staff',
  `ustatus` varchar(1) NOT NULL,
  `mobileno` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `otherno` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
