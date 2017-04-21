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
  `customer_time_stamp` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `customer` */

insert  into `customer`(`customerid`,`cemail`,`clname`,`cfname`,`cmname`,`caddress`,`cmobileno`,`cotherno`,`cpassword`,`deviceid`,`customer_time_stamp`) values (1,'elvin.casem@gmail.com','Casem','Elvin','E','City of San Fernando, La Union','09468147457','8880336','1234','14c00b04-efa6-42d4-8e32-89d596dfd632','2017-03-05 22:34:08'),(2,'lynnette.cabanban@gmail.com','Cabanban','Christianne Lynnette','G','Caba, La Union','09177770832','','password123','37825e4c-641c-48ad-a6d0-c1609dc88f63','2017-03-05 23:09:00'),(11,'test@gmail.com','','test','','','','','',NULL,'2017-04-12 12:45:18');

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
  `atime_stamp` varchar(500) DEFAULT NULL,
  `uid` bigint(20) DEFAULT NULL,
  `replytype` varchar(500) DEFAULT 'TEXT',
  `n_email` int(11) DEFAULT '0',
  `n_sms` int(11) DEFAULT '0',
  `n_mobile` int(11) DEFAULT '0',
  PRIMARY KEY (`aremarksid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

/*Data for the table `remarks_agent` */

insert  into `remarks_agent`(`aremarksid`,`aticketid`,`aremarks_info`,`atime_stamp`,`uid`,`replytype`,`n_email`,`n_sms`,`n_mobile`) values (1,19,'TEST SMS','2017-04-19 21:55:35',1,'TEXT',0,0,0),(2,19,'ready for pickup!','2017-04-19 21:56:54',1,'TEXT',0,0,0),(3,15,'15_1492614325.jpg','2017-04-19 23:05:25',1,'image/jpeg',0,0,0),(4,15,'15_1492615218.jpg','2017-04-19 23:20:18',1,'image/jpeg',0,0,0),(5,15,'test','2017-04-19 23:48:12',1,'TEXT',0,0,0),(6,15,'push','2017-04-20 10:54:47',1,'TEXT',0,0,0),(7,15,'push','2017-04-20 10:58:11',1,'TEXT',0,0,0),(8,15,'sd','2017-04-20 11:01:51',1,'TEXT',0,0,0),(9,15,'oppo','2017-04-20 11:05:49',1,'TEXT',0,0,0),(10,15,'kjhkj','2017-04-20 11:06:37',1,'TEXT',0,0,0),(11,15,'kjhkj','2017-04-20 11:07:26',1,'TEXT',0,0,0),(12,15,'m','2017-04-20 11:08:18',1,'TEXT',0,0,0),(13,15,'jhgj','2017-04-20 11:09:10',1,'TEXT',0,0,0),(14,15,'test 123','2017-04-20 11:10:07',1,'TEXT',0,0,0),(15,15,'asd','2017-04-20 11:10:50',1,'TEXT',0,0,0),(16,15,'ds','2017-04-20 11:11:25',1,'TEXT',0,0,0),(17,15,'adsf','2017-04-20 11:12:26',1,'TEXT',0,0,0),(18,15,'your laptop is ready for pickup','2017-04-20 11:13:15',1,'TEXT',0,0,0),(19,15,'ready for pickup','2017-04-20 11:13:48',1,'TEXT',0,0,0),(20,15,'okay','2017-04-20 11:14:54',1,'TEXT',0,0,0),(21,15,'alright!','2017-04-20 11:15:40',1,'TEXT',0,0,0),(22,20,'lovelife!','2017-04-20 11:30:47',1,'TEXT',0,0,0),(23,20,'lovelife!','2017-04-20 11:31:21',1,'TEXT',0,0,0),(24,20,'lovelife!','2017-04-20 11:32:35',1,'TEXT',0,0,0),(25,15,'bakit ayaw','2017-04-20 11:33:53',1,'TEXT',0,0,0),(26,20,'help','2017-04-20 11:34:53',1,'TEXT',0,0,0),(27,20,'lovelife!','2017-04-20 11:38:07',1,'TEXT',0,0,0),(28,20,'lovelife!','2017-04-20 11:38:31',1,'TEXT',0,0,0),(29,20,'lovelife!','2017-04-20 11:38:45',1,'TEXT',0,0,0),(30,20,'done!','2017-04-20 11:55:42',1,'TEXT',0,0,0),(31,21,'reply','2017-04-21 07:55:56',1,'TEXT',0,0,0),(32,21,'email','2017-04-21 08:06:39',1,'TEXT',1,1,1),(33,21,'sms','2017-04-21 08:06:51',1,'TEXT',0,1,0),(34,21,'mobile','2017-04-21 08:06:58',1,'TEXT',0,0,1);

/*Table structure for table `remarks_customer` */

DROP TABLE IF EXISTS `remarks_customer`;

CREATE TABLE `remarks_customer` (
  `cremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cticketid` bigint(20) DEFAULT NULL,
  `cremarks_info` text,
  `ctime_stamp` varchar(500) NOT NULL,
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
  `ftime_stamp` varchar(500) NOT NULL,
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
  `time_stamp` varchar(500) NOT NULL,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`ticketid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tickets` */

insert  into `tickets`(`ticketid`,`categoryid`,`status`,`priority`,`customerid`,`assignedto_uid`,`problem`,`description`,`history`,`special_instruction`,`serialno`,`departmentid`,`addedbyuid`,`time_stamp`,`due_date`) values (15,1,'Open','Under Warranty - PC4ME',1,1,'Hangs and very slow','Macbook pro 15\n8gb\n256ssd\nmid 2014 unit\nminor scratches pls see attach pictures','after a movie download from the internet','do not delete any files','Pdiwg128sm#1',1,1,'2017-04-19 23:31:28','2017-04-12'),(16,1,'Open','Under Warranty - PC4ME',1,1,'again','again','','','',1,1,'2017-04-12 10:01:17','2017-04-12'),(17,1,'Open','Under Warranty - PC4ME',1,1,'','trst','','','',1,1,'2017-04-12 15:13:27','2017-04-12'),(18,1,'Open','Under Warranty - PC4ME',1,1,'','dsd','','','',1,1,'2017-04-12 15:13:49','2017-04-12'),(19,1,'Open','Under Warranty - PC4ME',1,5,'test','test','','','',1,1,'2017-04-19 19:58:09','2017-04-19'),(20,1,'Open','Under Warranty - PC4ME',2,1,'test','test','','','',1,1,'2017-04-20 11:30:32','2017-04-20'),(21,1,'Open','Under Warranty - PC4ME',1,1,'problem','description','','','',1,1,'2017-04-21 07:54:42','2017-04-21');

/*Table structure for table `tickets_log` */

DROP TABLE IF EXISTS `tickets_log`;

CREATE TABLE `tickets_log` (
  `tlogid` bigint(20) NOT NULL AUTO_INCREMENT,
  `ticketid` bigint(20) DEFAULT NULL,
  `status` varchar(300) DEFAULT NULL,
  `remarks` text,
  `updatedby` bigint(20) DEFAULT NULL,
  `time_stamp` varchar(500) NOT NULL,
  PRIMARY KEY (`tlogid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `tickets_log` */

insert  into `tickets_log`(`tlogid`,`ticketid`,`status`,`remarks`,`updatedby`,`time_stamp`) values (1,15,'Open','Changed serial no. from  to 213123',1,'2017-04-19 22:56:24'),(2,15,'Open','Changed history from  to history',1,'2017-04-19 22:56:24'),(3,15,'Open','Changed History from  to special instruction',1,'2017-04-19 22:56:24'),(4,15,'Open','Changed Problem from test to Hangs and very slow',1,'2017-04-19 23:31:28'),(5,15,'Open','Changed Description from teset to Macbook pro 15\n8gb\n256ssd\nmid 2014 unit\nminor scratches pls see attach pictures',1,'2017-04-19 23:31:28'),(6,15,'Open','Changed serial no. from 213123 to Pdiwg128sm#1',1,'2017-04-19 23:31:28'),(7,15,'Open','Changed history from history to after a movie download from the internet',1,'2017-04-19 23:31:28'),(8,15,'Open','Changed History from special instruction to do not delete any files',1,'2017-04-19 23:31:28');

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
