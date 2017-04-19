/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.5.34 : Database - helpdesk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `categoryid` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`categoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`categoryid`,`categoryvalue`) values (1,'CCTV'),(2,'Desktop Computer'),(3,'Laptop'),(4,'Others'),(5,'Printer');

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

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
  `customer_time_stamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `customer` */

insert  into `customer`(`customerid`,`cemail`,`clname`,`cfname`,`cmname`,`caddress`,`cmobileno`,`cotherno`,`cpassword`,`deviceid`,`customer_time_stamp`) values (1,'elvin.casem@gmail.com','Casem','Elvin','E','City of San Fernando, La Union','09468147457','8880336','1234','12','2017-03-05 22:34:08'),(2,'lynnette.cabanban@gmail.com','Cabanban','Christianne Lynnette','G','Caba, La Union','09177770832',NULL,NULL,NULL,'2017-03-05 23:09:00'),(11,'test@gmail.com','','test','','','','','',NULL,'2017-04-12 12:45:18');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `departmentid` bigint(20) NOT NULL AUTO_INCREMENT,
  `departmentvalue` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`departmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `department` */

insert  into `department`(`departmentid`,`departmentvalue`) values (1,'Sales'),(2,'Technical');

/*Table structure for table `remarks_agent` */

DROP TABLE IF EXISTS `remarks_agent`;

CREATE TABLE `remarks_agent` (
  `aremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aticketid` bigint(20) DEFAULT NULL,
  `aremarks_info` text,
  `atime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uid` bigint(20) DEFAULT NULL,
  `replytype` varchar(500) DEFAULT 'TEXT',
  PRIMARY KEY (`aremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `remarks_agent` */

/*Table structure for table `remarks_customer` */

DROP TABLE IF EXISTS `remarks_customer`;

CREATE TABLE `remarks_customer` (
  `cremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cticketid` bigint(20) DEFAULT NULL,
  `cremarks_info` text,
  `ctime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customerid` bigint(20) DEFAULT NULL,
  `creplytype` varchar(500) DEFAULT 'TEXT',
  PRIMARY KEY (`cremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `remarks_customer` */

/*Table structure for table `remarks_file` */

DROP TABLE IF EXISTS `remarks_file`;

CREATE TABLE `remarks_file` (
  `fremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `fticketid` bigint(20) DEFAULT NULL,
  `fremarks_info` varchar(500) DEFAULT NULL,
  `ftime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fuid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`fremarksid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `remarks_file` */

/*Table structure for table `tickets` */

DROP TABLE IF EXISTS `tickets`;

CREATE TABLE `tickets` (
  `ticketid` bigint(20) NOT NULL AUTO_INCREMENT,
  `categoryid` bigint(20) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `priority` varchar(300) DEFAULT NULL,
  `customerid` bigint(20) DEFAULT NULL,
  `assignedto_uid` bigint(20) DEFAULT NULL,
  `problem` text,
  `description` text,
  `history` text,
  `special_instruction` text,
  `serialno` varchar(500) DEFAULT NULL,
  `departmentid` bigint(20) DEFAULT NULL,
  `addedbyuid` bigint(20) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `tickets` */

insert  into `tickets`(`ticketid`,`categoryid`,`status`,`priority`,`customerid`,`assignedto_uid`,`problem`,`description`,`history`,`special_instruction`,`serialno`,`departmentid`,`addedbyuid`,`time_stamp`,`due_date`) values (15,1,'Open','Under Warranty - PC4ME',1,1,'test','teset','','','',1,1,'2017-04-12 09:57:38','2017-04-12'),(16,1,'Open','Under Warranty - PC4ME',1,1,'again','again','','','',1,1,'2017-04-12 10:01:17','2017-04-12'),(17,1,'Open','Under Warranty - PC4ME',1,1,'','trst','','','',1,1,'2017-04-12 15:13:27','2017-04-12'),(18,1,'Open','Under Warranty - PC4ME',1,1,'','dsd','','','',1,1,'2017-04-12 15:13:49','2017-04-12');

/*Table structure for table `tickets_log` */

DROP TABLE IF EXISTS `tickets_log`;

CREATE TABLE `tickets_log` (
  `tlogid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `remarks` text,
  `updatedby` bigint(20) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`tlogid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tickets_log` */

/*Table structure for table `tickets_timeline` */

DROP TABLE IF EXISTS `tickets_timeline`;

CREATE TABLE `tickets_timeline` (
  `ttimeid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `action` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ttimeid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tickets_timeline` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`uid`,`username`,`password`,`name`,`usertype`,`ustatus`,`mobileno`,`email`,`otherno`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','admin','1',NULL,NULL,NULL),(5,'lynnette','5f4dcc3b5aa765d61d8327deb882cf99','Lynnette','admin','1',NULL,NULL,NULL),(6,'juan','527bd5b5d689e2c32ae974c6229ff785','Juan Doe','staff','',NULL,NULL,NULL),(7,'technician','eb919176ebac2099dd026ec41524b707','Technician One','staff','',NULL,NULL,NULL),(8,'edgee','482c811da5d5b4bc6d497ffa98491e38','Edgee','admin','',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
