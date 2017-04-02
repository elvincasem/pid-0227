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
  `time_stamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `customer` */

insert  into `customer`(`customerid`,`cemail`,`clname`,`cfname`,`cmname`,`caddress`,`cmobileno`,`cotherno`,`cpassword`,`time_stamp`) values (1,'elvin.casem@gmail.com','Casem','Elvin','E','City of San Fernando, La Union','09468147457','8880336',NULL,'2017-03-05 22:34:08'),(2,'lynnette.cabanban@gmail.com','Cabanban','Christianne Lynnette','G','Caba, La Union','09177770832',NULL,NULL,'2017-03-05 23:09:00'),(10,'juan@gmail.com','Konek','Juan','','','','','','2017-03-18 19:41:12');

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
  PRIMARY KEY (`aremarksid`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `remarks_agent` */

insert  into `remarks_agent`(`aremarksid`,`aticketid`,`aremarks_info`,`atime_stamp`,`uid`) values (1,3,'started working on it','2017-03-18 18:18:05',7),(2,3,'alright!','2017-03-19 18:49:38',7),(3,3,'ayos!','2017-03-19 18:50:32',7),(4,3,'testing growl','2017-03-19 18:52:58',7),(5,3,'on the spot!','2017-03-19 18:53:10',7),(6,9,'Alright!','2017-03-19 19:20:03',7),(7,9,'okay na rin to','2017-03-19 19:20:10',7),(8,7,'Waiting for delivery','2017-03-19 19:21:55',7),(10,7,'ngayon gumagana na heheh :)','2017-03-19 19:27:58',7),(11,7,'now new line\n\nthis is new line','2017-03-19 19:28:08',7),(12,7,'test\n<br>\nnew line','2017-03-19 19:28:19',7),(13,6,'Reset waste pad ink using software','2017-03-19 22:41:40',7),(14,6,'printing counter okay.','2017-03-19 22:46:38',7),(15,13,'okay ','2017-03-19 23:03:58',7),(16,9,'again','2017-03-20 07:03:04',8),(17,11,'sms','2017-03-30 23:37:24',1),(18,11,'sd','2017-03-30 23:37:31',1),(19,11,'sd','2017-03-30 23:38:12',1),(20,11,'a','2017-03-30 23:38:35',1),(21,11,'aa','2017-03-30 23:39:30',1),(22,11,'dfs','2017-03-30 23:39:34',1),(23,11,'sad','2017-03-30 23:40:00',1),(24,11,'s','2017-03-30 23:40:06',1),(25,3,'this is it!','2017-04-01 22:32:14',1),(26,3,'this is it na talaga!','2017-04-01 22:33:54',1),(27,3,'dsad','2017-04-01 23:21:11',1),(28,3,'Ready for pickup','2017-04-01 23:22:13',1);

/*Table structure for table `remarks_customer` */

DROP TABLE IF EXISTS `remarks_customer`;

CREATE TABLE `remarks_customer` (
  `cremarksid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cticketid` bigint(20) DEFAULT NULL,
  `cremarks_info` text,
  `ctime_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `customerid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`cremarksid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `remarks_customer` */

insert  into `remarks_customer`(`cremarksid`,`cticketid`,`cremarks_info`,`ctime_stamp`,`customerid`) values (1,3,'Thank you for working on it immediately','2017-03-19 18:18:38',10);

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
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `tickets` */

insert  into `tickets`(`ticketid`,`categoryid`,`status`,`priority`,`customerid`,`assignedto_uid`,`problem`,`description`,`history`,`special_instruction`,`serialno`,`departmentid`,`addedbyuid`,`time_stamp`,`due_date`) values (3,1,'Open','Out of Warranty - PC4ME',1,7,'new windows installation','Windows 7 64 bit on desktop',NULL,NULL,NULL,2,1,'2017-03-19 21:26:55','2017-03-20'),(6,4,'Pickup','Under Warranty - PC4ME',1,1,'Epson L120 Reset Ink waste pad','Closed ticket description...',NULL,NULL,NULL,1,1,'2017-03-19 22:46:45','2017-03-20'),(7,3,'RMA','Under Warranty - PC4ME',1,1,'Title 1','Description 2',NULL,NULL,NULL,1,1,'2017-03-19 23:34:56','2017-03-20'),(8,2,'Open','Under Warranty - PC4ME',1,1,'New Title','New description ',NULL,NULL,NULL,1,1,'2017-03-19 22:38:13','2017-03-20'),(9,4,'Closed','Under Warranty - PC4ME',2,1,'test ticket','test ticket only',NULL,NULL,NULL,2,7,'2017-03-20 07:03:33','2017-03-20'),(11,1,'Open','Under Warranty - PC4ME',2,1,'Ticket Problem','Ticket Description  ','history \nhistory 2\nhistory 3','special instruction	','0393748762944444',1,7,'2017-03-26 22:48:56','2017-03-19'),(13,1,'RMA','Under Warranty - PC4ME',2,1,'rma ticket sample','this is a sample description for RMA tickets',NULL,NULL,NULL,1,7,'2017-03-19 23:03:46','2017-03-19');

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
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

/*Data for the table `tickets_log` */

insert  into `tickets_log`(`tlogid`,`ticketid`,`status`,`remarks`,`updatedby`,`time_stamp`) values (9,8,'RMA','Changed Status from Closed to RMA',7,'2017-03-19 22:07:53'),(10,8,'Open','Changed Status from RMA to Open',7,'2017-03-19 22:08:04'),(11,8,'Pickup','Changed Status from Open to Pickup',7,'2017-03-19 22:09:02'),(12,8,'Closed','Changed Status from Pickup to Closed',7,'2017-03-19 22:14:35'),(13,8,'Open','Changed Status from Closed to Open',7,'2017-03-19 22:15:13'),(30,6,'Closed','Changed Title from Closed Ticket to Epson L120 Reset Ink waste pad',7,'2017-03-19 22:41:14'),(31,6,'Open','Changed Status from Closed to Open',7,'2017-03-19 22:41:23'),(32,6,'Pickup','Changed Status from Open to Pickup',7,'2017-03-19 22:46:46'),(33,13,'RMA','Changed Status from Open to RMA',7,'2017-03-19 23:02:45'),(34,13,'RMA','Changed Title from sad to rma ticket sample',7,'2017-03-19 23:03:46'),(35,13,'RMA','Changed Description from sad to this is a sample description for RMA tickets',7,'2017-03-19 23:03:46'),(36,7,'RMA','Changed Title from  to Title 1',8,'2017-03-19 23:34:56'),(37,7,'RMA','Changed Description from  to Description 2',8,'2017-03-19 23:34:56'),(38,9,'Closed','Changed Status from Open to Closed',8,'2017-03-20 07:03:34'),(39,11,'Open','Changed Description from Ticket Description to Ticket Description 2',1,'2017-03-26 22:47:04'),(40,11,'Open','Changed Description from history \r\nhistory 2 to history \nhistory 2',1,'2017-03-26 22:47:04'),(41,11,'Open','Changed Description from Ticket Description 2 to Ticket Description  ',1,'2017-03-26 22:48:20'),(42,11,'Open','Changed history from history \nhistory 2 to history \nhistory 2\nhistory 3',1,'2017-03-26 22:48:32'),(43,11,'Open','Changed serial no. from 03937487629 to 0393748762944444',1,'2017-03-26 22:48:56');

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
