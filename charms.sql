/*
SQLyog Ultimate - MySQL GUI v8.2 
MySQL - 5.6.17 : Database - charms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `assets` */

DROP TABLE IF EXISTS `assets`;

CREATE TABLE `assets` (
  `assetid` bigint(20) NOT NULL AUTO_INCREMENT,
  `asset_article` varchar(500) DEFAULT NULL,
  `asset_particulars` text,
  `asset_classification` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`assetid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `assets` */

insert  into `assets`(`assetid`,`asset_article`,`asset_particulars`,`asset_classification`) values (7,'Printer','Epson L565 Printer, Fax, Scanner, Copier','IT Equipment and Softwares'),(8,'Others','Desktop SATA HDD 4TB','IT Equipment and Softwares'),(9,'Others','RAM 4GB DDR3 (Desktop)','IT Equipment and Softwares'),(10,'Others','TP-Link Router TLWR940N','IT Equipment and Softwares');

/*Table structure for table `audit` */

DROP TABLE IF EXISTS `audit`;

CREATE TABLE `audit` (
  `auditid` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` timestamp NULL DEFAULT NULL,
  `sample` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`auditid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `audit` */

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `empNo` varchar(10) NOT NULL DEFAULT 'NONE',
  `lname` varchar(80) NOT NULL,
  `fname` varchar(80) NOT NULL,
  `mname` varchar(80) NOT NULL,
  `ename` varbinary(100) DEFAULT NULL,
  `designation` varchar(100) NOT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

/*Data for the table `employee` */

insert  into `employee`(`eid`,`empNo`,`lname`,`fname`,`mname`,`ename`,`designation`) values (12,'','ANCHETA-DIEGO','CHERRIE MELANIE','','','Director IV'),(13,'','CASIPIT','MA. GERALDINE','F','','Supervising Education Program Specialist'),(14,'','BUENIO','NYMPHA','N','','Chief Administrative Officer'),(15,'','ADQUILEN','EVELYN','C','','Administrative Officer III'),(16,'','AGCAOILI','REYNALDO','D','','Education Supervisor II'),(17,'','AGLUGUB','RODOLFO','E','','Education Supervisor II'),(18,'','ANCHETA','ARNOLD','V','','Education Supervisor II'),(19,'','BOSE','DANILO','B','','Education Supervisor II'),(20,'','CABANBAN','CHRISTIANNE LYNNETTE','G','','Education Supervisor II'),(21,'','CANTOR','MARK ANTHONY','L','','Administrative Aide VI'),(22,'','CHAN','CATHERINE','C','','Education Supervisor II'),(23,'','DOLORES','ANGELICA','Q','','Education Supervisor II'),(24,'','DULUEÃ‘A','PERFECTO','A','','Administrative Aide VI'),(25,'','FERRER','ANGELA','F','','Education Program Specialist II'),(26,'','GALERA JR.','ROGELIO','T','','Education Supervisor II'),(27,'','INIGO','KRIZZANE','C','','Administrative Assistant III'),(28,'','MENDOZA','MARVIN','I','','Administrative Aide IV'),(29,'','MINA','MYRELLE FAITH','D','','Education Supervisor II'),(30,'','MOLINA','FLORANTE','F','','Administrative Aide III'),(31,'','MONTEMAYOR','DIANNE JOYCE','B','','Administrative Officer III'),(32,'','OLI','CORNELIO','T','','Administrative Aide III'),(33,'','QUEZON','MAYROSE','L','','Education Supervisor II'),(34,'','NARCEDA','ARGIELYN','','','Job Order'),(35,'','PASCUA','CHARLES VINCENT','','','Job Order'),(36,'','TACTACAN','CIELITO','','','Job Order'),(37,'','VALENCIA','NASTASHA','A','','Job Order'),(38,'','YAMSON','VIC','','','Guard'),(39,'','OLPINDO','AUDIE','','','Guard'),(40,'','ESCAÃ‘O','MELODY','G','','Job Order'),(41,'','ANCHETA','MELQUIDES','','','PTS III'),(42,'','JONARD\r\n','GAVO\r\n','','','OJT'),(43,'','FRANCIA\r\n','POLIDO\r\n','','','OJT'),(44,'','CASEM','ELVIN','E','','PTS III');

/*Table structure for table `equipments` */

DROP TABLE IF EXISTS `equipments`;

CREATE TABLE `equipments` (
  `equipNo` bigint(20) NOT NULL AUTO_INCREMENT,
  `assetid` bigint(20) DEFAULT NULL,
  `propertyNo` varchar(100) DEFAULT 'NONE',
  `article` varchar(100) DEFAULT NULL,
  `particulars` text NOT NULL,
  `dateacquired` date NOT NULL DEFAULT '0000-00-00',
  `totalcost` double(10,2) NOT NULL DEFAULT '0.00',
  `issuedto` varchar(500) DEFAULT NULL,
  `enduser` varchar(500) DEFAULT NULL,
  `classification` varchar(200) DEFAULT NULL,
  `accountcode` varchar(100) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `whereabout` text,
  `remarks` text,
  `inventorytag` varchar(100) DEFAULT NULL,
  `supplierID` int(11) DEFAULT '0',
  `barcode` varchar(500) DEFAULT NULL,
  `deliveryid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`equipNo`)
) ENGINE=InnoDB AUTO_INCREMENT=577 DEFAULT CHARSET=utf8;

/*Data for the table `equipments` */

insert  into `equipments`(`equipNo`,`assetid`,`propertyNo`,`article`,`particulars`,`dateacquired`,`totalcost`,`issuedto`,`enduser`,`classification`,`accountcode`,`service`,`whereabout`,`remarks`,`inventorytag`,`supplierID`,`barcode`,`deliveryid`) values (572,7,'NONE','Printer','Epson L565 Printer, Fax, Scanner, Copier','2017-02-22',15000.00,NULL,NULL,'IT Equipment and Softwares',NULL,NULL,NULL,NULL,NULL,5,NULL,1),(573,8,'NONE','Others','Desktop SATA HDD 4TB','2017-02-22',7348.00,NULL,NULL,'IT Equipment and Softwares',NULL,NULL,NULL,NULL,NULL,5,NULL,1),(574,9,'NONE','Others','RAM 4GB DDR3 (Desktop)','2017-02-22',1398.00,NULL,NULL,'IT Equipment and Softwares',NULL,NULL,NULL,NULL,NULL,5,NULL,1),(575,9,'NONE','Others','RAM 4GB DDR3 (Desktop)','2017-02-22',1398.00,NULL,NULL,'IT Equipment and Softwares',NULL,NULL,NULL,NULL,NULL,5,NULL,1),(576,10,'NONE','Others','TP-Link Router TLWR940N','2017-02-22',1425.00,NULL,NULL,'IT Equipment and Softwares',NULL,NULL,NULL,NULL,NULL,5,NULL,1);

/*Table structure for table `equipments_details` */

DROP TABLE IF EXISTS `equipments_details`;

CREATE TABLE `equipments_details` (
  `equipdetailsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `equipNo` bigint(20) NOT NULL,
  `processor` varchar(200) NOT NULL DEFAULT 'NONE',
  `ram` varchar(100) NOT NULL DEFAULT 'NONE',
  `hd` varchar(100) NOT NULL DEFAULT 'NONE',
  `operatingsystem` varchar(100) NOT NULL DEFAULT 'NONE',
  `brand` varchar(200) NOT NULL DEFAULT 'NONE',
  `color` varchar(100) NOT NULL DEFAULT 'NONE',
  `others` text NOT NULL,
  `equipsn` varchar(500) DEFAULT NULL,
  `processorsn` varchar(500) DEFAULT NULL,
  `monitorsn` varchar(500) DEFAULT NULL,
  `keyboardsn` varchar(500) DEFAULT NULL,
  `mousesn` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`equipdetailsid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `equipments_details` */

insert  into `equipments_details`(`equipdetailsid`,`equipNo`,`processor`,`ram`,`hd`,`operatingsystem`,`brand`,`color`,`others`,`equipsn`,`processorsn`,`monitorsn`,`keyboardsn`,`mousesn`) values (1,572,'NONE','NONE','NONE','NONE','NONE','NONE','',NULL,NULL,NULL,NULL,NULL),(2,573,'NONE','NONE','NONE','NONE','NONE','NONE','',NULL,NULL,NULL,NULL,NULL),(3,574,'NONE','NONE','NONE','NONE','NONE','NONE','',NULL,NULL,NULL,NULL,NULL),(4,575,'NONE','NONE','NONE','NONE','NONE','NONE','',NULL,NULL,NULL,NULL,NULL),(5,576,'NONE','NONE','NONE','NONE','NONE','NONE','',NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `equipments_receiving` */

DROP TABLE IF EXISTS `equipments_receiving`;

CREATE TABLE `equipments_receiving` (
  `deliveryid` bigint(11) NOT NULL AUTO_INCREMENT,
  `supplierid` bigint(20) DEFAULT NULL,
  `status` varchar(500) DEFAULT 'PENDING',
  `receivedate` date DEFAULT NULL,
  `drno` varchar(300) DEFAULT NULL,
  `aprno` varchar(500) DEFAULT NULL,
  `aprid` bigint(20) DEFAULT NULL,
  `pono` varchar(500) DEFAULT NULL,
  `poid` bigint(20) DEFAULT NULL,
  `invoiceno` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`deliveryid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `equipments_receiving` */

insert  into `equipments_receiving`(`deliveryid`,`supplierid`,`status`,`receivedate`,`drno`,`aprno`,`aprid`,`pono`,`poid`,`invoiceno`,`time_stamp`) values (1,5,'PENDING','2017-02-22','1944',NULL,0,NULL,47,'','2017-03-01 15:59:45');

/*Table structure for table `equipments_receiving_items` */

DROP TABLE IF EXISTS `equipments_receiving_items`;

CREATE TABLE `equipments_receiving_items` (
  `deliveryitemsid` int(11) NOT NULL AUTO_INCREMENT,
  `deliveryid` varchar(500) DEFAULT NULL,
  `assetid` bigint(20) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unitprice` double(10,2) DEFAULT '0.00',
  `status` int(11) DEFAULT '0',
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`deliveryitemsid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

/*Data for the table `equipments_receiving_items` */

insert  into `equipments_receiving_items`(`deliveryitemsid`,`deliveryid`,`assetid`,`unit`,`qty`,`unitprice`,`status`,`time_stamp`) values (3,'1',7,'UNIT',1,15000.00,1,'2017-03-03 14:06:17'),(4,'1',9,'PC',2,1398.00,1,'2017-03-03 14:06:21'),(5,'1',8,'PC',1,7348.00,1,'2017-03-03 14:06:19'),(7,'1',10,'PC',1,1425.00,1,'2017-03-03 14:06:22');

/*Table structure for table `inventory` */

DROP TABLE IF EXISTS `inventory`;

CREATE TABLE `inventory` (
  `inventoryid` int(11) NOT NULL AUTO_INCREMENT,
  `itemNo` int(11) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datereceived` date DEFAULT NULL,
  `drno` varchar(300) DEFAULT NULL,
  `aprno` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`inventoryid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `inventory` */

insert  into `inventory`(`inventoryid`,`itemNo`,`unit`,`qty`,`status`,`time_stamp`,`datereceived`,`drno`,`aprno`) values (1,137,'REAM',1,0,'2017-02-06 08:53:46','2017-02-06','212','123132');

/*Table structure for table `items` */

DROP TABLE IF EXISTS `items`;

CREATE TABLE `items` (
  `itemNo` bigint(20) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL DEFAULT 'Office Supply',
  `unit` varchar(20) NOT NULL DEFAULT 'PC',
  `unitCost` double(10,2) NOT NULL DEFAULT '0.00',
  `inventory_qty` int(11) DEFAULT '0',
  `supplierID` int(11) DEFAULT '0',
  `brand` varchar(200) DEFAULT 'NONE',
  `warehouseid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`itemNo`)
) ENGINE=InnoDB AUTO_INCREMENT=486 DEFAULT CHARSET=utf8;

/*Data for the table `items` */

insert  into `items`(`itemNo`,`description`,`category`,`unit`,`unitCost`,`inventory_qty`,`supplierID`,`brand`,`warehouseid`) values (1,'Alcohol','Office Supply','PC',10.00,0,21,'CLEENE',1),(2,'Tissue','Office Supply','PC',8.00,0,0,'ECO HYGIENE',1),(3,'Glue','Office Supply','PC',0.00,0,0,'STICK-EE',1),(4,'Double Clip 2 inch','Office Supply','PC',0.00,0,0,'PRINCE',1),(5,'Jumbo clip','Office Supply','PC',0.00,0,0,'PRINCE',1),(6,'Paper clip','Office Supply','BOX',0.00,0,0,'PRINCE',1),(7,'Ruler 12 inch','Office Supply','PC',0.00,0,0,'CRYSTAL',1),(8,'Ruler 17 inch','Office Supply','PC',0.00,0,0,'PRINCE',1),(9,'Binder clips 1 inch','Office Supply','PC',0.00,0,0,'JOY',1),(10,'Binder clips 3/4 inch','Office Supply','PC',0.00,0,0,'JOY',1),(11,'Staple Remover','Office Supply','BOX',0.00,0,0,'JIVLI',1),(12,'Tape dispenser','Office Supply','BOX',0.00,0,0,'PRINCE',1),(13,'Safety paper fastener','Office Supply','BOX',0.00,0,0,'APPLE',1),(14,'Stamp pad','Office Supply','PC',0.00,0,0,'MPC CLASSIQUE/JOY',1),(15,'Stamp pad ink','Office Supply','PC',0.00,0,0,'PADMATE',1),(16,'Typewriter Ribbon','Office Supply','PC',0.00,0,0,'NONE',1),(17,'Tape packaging','Office Supply','PC',0.00,0,0,'CROCO TAPE',1),(18,'Tape Masking','Office Supply','PC',0.00,0,0,'CROCO TAPE',1),(19,'Scotch tape','Office Supply','PC',0.00,0,0,'CROCO TAPE',1),(20,'Stencil Paper','Office Supply','BOX',0.00,0,0,'PRINCE',1),(21,'Log book (300)','Office Supply','PC',0.00,0,0,'MULTI-ZERO',1),(22,'Log book (500)','Office Supply','PC',0.00,0,0,'NONE',1),(23,'Puncher','Office Supply','BOX',0.00,0,0,'PRINCE',1),(24,'Correction Tape','Office Supply','Pc',0.00,0,0,'JOY',1),(25,'Fax film','Office Supply','BOX',0.00,0,0,'KODAK GOLD',1),(26,'Cartolina (assorted)','Office Supply','PC',0.00,0,0,'NONE',1),(27,'Cartolina (White)','Office Supply','PC',0.00,0,0,'NONE',1),(28,'Adjustable Punch','Office Supply','BOX',0.00,0,0,'KW-TRIO',1),(29,'Staple ','Office Supply','PC',0.00,0,0,'ARROW',1),(30,'Sharpener','Office Supply','PC',0.00,0,0,'ACURA5',1),(31,'Scissors','Office Supply','PC',0.00,0,0,'AMSPEE',1),(32,'Staple Wire 1/2 x 12mm','Office Supply','Box',0.00,0,0,'ARROW',1),(33,'Long Bond Paper (Double A)','Office Supply','REAM',0.00,0,0,'DOUBLE A/LAMCO PAPER',1),(34,'Photo Paper','Office Supply','REAM',0.00,0,0,'ACACIA/BERKELEY',1),(35,'Parchment Paper','Office Supply','REAM',0.00,0,0,'EMERSON/BESTBUY',1),(36,'Sticker Paper (3x4)','Office Supply','PC',0.00,0,0,'POST IT',1),(37,'Sticker Paper (3x3)','Office Supply','PC',0.00,0,0,'HBW OFFICE',1),(38,'Sticker Paper (8x11)','Office Supply','PC',0.00,0,0,'STRATAKOLOUR/JOLLY',1),(39,'Specialty Paper','Office Supply','PC',0.00,0,0,'SQI/SUN',1),(40,'Notebooks','Office Supply','PC',0.00,0,0,'DYNAMIC',1),(41,'Columnar Books','Office Supply','PC',0.00,0,0,'VECO PRODUCT',1),(42,'Board Paper','Office Supply','PC',0.00,0,0,'VECO',1),(43,'Carbon Paper','Office Supply','PC',0.00,0,0,'COSH/CLUB',1),(44,'Long Folder (Orange)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(45,'Long Folder (Blue)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(46,'Long Folder (Black)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(47,'Long Folder (Yellow)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(48,'Long Folder (Dark Blue)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(49,'Long Folder (Red)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(50,'Long Folder (Violet)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(51,'Short Folder (Dark Blue)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(52,'Short Folder (Orange)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(53,'Short Folder (Red)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(54,'Short Folder (Pink)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(55,'Short Folder (Green)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(56,'Short Folder (Violet)','Office Supply','PC',0.00,0,0,'ADVANCE',1),(57,'Plastic Folder','Office Supply','PC',0.00,0,0,'EXPRESSIONS',1),(58,'Clear Folder','Office Supply','PC',0.00,0,0,'NONE',1),(59,'Pencil','Office Supply','BOX',0.00,0,0,'CHALLENGE',1),(60,'Highlighter ','Office Supply','PC',0.00,0,0,'MARVY UCHIDA',1),(61,'Permanent Marker (Red)','Office Supply','PC',0.00,0,0,'PILOT',1),(62,'Permanent Marker (Black)','Office Supply','PC',0.00,0,0,'PILOT',1),(63,'White Board Marker ','Office Supply','PC',0.00,0,0,'MONAMI',1),(64,'Crayons','Office Supply','BOX',0.00,0,0,'AMSPEC',1),(65,'Coloring Pen','Office Supply','PC',0.00,0,0,'LION CITY',1),(66,'Ballpen (Blue)','Office Supply','PC',0.00,0,0,'PILOT',1),(67,'Ballpen (Green)','Office Supply','PC',0.00,0,0,'PILOT',1),(68,'Ballpen (Red)','Office Supply','PC',0.00,0,0,'PILOT',1),(69,'Ballpen (Nataraj)','Office Supply','BOX',0.00,0,0,'NATARAJ',1),(70,'Sign Pen (Blue)','Office Supply','PC',0.00,0,0,'PILOT/UNI-BALL/PENTEL',1),(71,'Sign Pen (Black)','Office Supply','PC',0.00,0,0,'PENTEL/UNI0BALL',1),(72,'Sign Pen (Red)','Office Supply','PC',0.00,0,0,'PENTEL',1),(73,'Clear Book (Black)','Office Supply','PC',0.00,0,0,'BINDEMAX',1),(74,'Clear Book (White)','Office Supply','PC',0.00,0,0,'BINDEMAX',1),(75,'Clear Book (Green)','Office Supply','PC',0.00,0,0,'BINDEMAX',1),(76,'Clear Book (Dark Green)','Office Supply','PC',0.00,0,0,'BINDEMAX',1),(77,'Clear Book (Brown)','Office Supply','PC',0.00,0,0,'BINDEMAX',1),(78,'View Binders','Office Supply','PC',0.00,0,0,'COMICS',1),(79,'Transparent Zip Bag','Office Supply','PC',0.00,0,0,'DELI',1),(80,'Long Envelope','Office Supply','PC',0.00,0,0,'NONE',1),(81,'Short Envelope','Office Supply','PC',0.00,0,0,'NONE',1),(82,'CD Case','Office Supply','BOX',0.00,0,0,'FILMAXEL/IMATION',1),(83,'CD-R 700MB','Office Supply','PC',0.00,0,0,'SONY',1),(84,'Printer Ribbon','Office Supply','BOX',0.00,0,0,'FUJITSU',1),(85,'AVR','Office Supply','PC',0.00,0,0,'NONE',1),(86,'Toner Kit (TK 354)','Office Supply','PC',0.00,0,0,'KYOCERA',1),(87,'Toner (PNG 08 Toner)','Office Supply','PC',0.00,0,0,'CANON',1),(88,'Ribbon Cartridge','Office Supply','PC',0.00,0,0,'EPSON',1),(89,'Keyboard (4Tech)','Office Supply','PC',0.00,0,0,'A4TECH',1),(90,'Trident','Office Supply','PC',0.00,0,0,'NONE',1),(91,'APC (Battery Backup)','Office Supply','PC',0.00,0,0,'APC',1),(92,'HP Deskjet 1000','Office Supply','PC',0.00,0,0,'HP',1),(93,'Mouse Pad','Office Supply','PC',0.00,0,0,'MICROSOFT',1),(94,'CD Sleeve','Office Supply','PC',0.00,0,0,'CHENSIN',1),(95,'Canon 40','Office Supply','PC',0.00,0,0,'PIXMA CANON',1),(96,'Canon 811','Office Supply','PC',0.00,0,0,'PIXMA CANON',1),(97,'Canon 88','Office Supply','PC',0.00,0,0,'PIXMA CANON',1),(98,'Canon 98','Office Supply','PC',0.00,0,0,'PIXMA CANON',1),(99,'Media Pointer','Office Supply','PC',0.00,0,0,'GENIUS',1),(100,'Integrative Presenter','Office Supply','PC',0.00,0,0,'ACER',1),(101,'Envelope Pay Kraft','Office Supply','PC',0.00,0,0,'POINTER',1),(102,'Printer Ink (T6641 Black)','Office Supply','PC',0.00,0,0,'EPSON',1),(103,'Printer Ink (T6642 Cyan)','Office Supply','PC',0.00,0,0,'EPSON',1),(104,'Printer Ink (T6643 Magenta)','Office Supply','PC',0.00,0,0,'EPSON',1),(105,'Printer Ink (T6644 Yellow)','Office Supply','PC',0.00,0,0,'EPSON',1),(106,'Diskettes','Office Supply','PC',0.00,0,0,'EMTEK/IMATION',1),(107,'Mailing Long Window Envelope','Office Supply','BOX',0.00,0,0,'PAPERFOX',1),(108,'Kliche','Office Supply','PC',0.00,0,0,'NON',1),(109,'Photo Frames (Blue)','Office Supply','PC',0.00,0,0,'CRAFTIDEAS',1),(110,'Photo Frames (Red)','Office Supply','PC',0.00,0,0,'CRAFTIDEAS',1),(111,'Name Badge','Office Supply','BOX',0.00,0,0,'NONE',1),(112,'Speaker (BXRB21)','Office Supply','BOX',0.00,0,0,'ALTEC',1),(113,'Photo Album','Office Supply','PC',0.00,0,0,'K EVERYDAY',1),(114,'Paper Weight','Office Supply','PC',0.00,0,0,'NONE',1),(115,'Fire Extinguisher','Office Supply','PC',0.00,0,0,'SHUTTER - NEROMU ENTERPRISES COMPANY',1),(116,'Glue Gun','Office Supply','PC',0.00,0,0,'NONE',1),(117,'Poly Ribbon','Office Supply','PC',0.00,0,0,'WENDY',1),(118,'Pail','Office Supply','PC',0.00,0,0,'HI-TOP',1),(119,'MegaPhone (XV-`11 S/R)','Office Supply','PC',0.00,0,0,'MAX TECH',1),(120,'Coffee Maker','Office Supply','PC',0.00,0,0,'DOWELL',1),(121,'Duplicating Ink','Office Supply','PC',0.00,0,0,'NONE',1),(122,'Liquid Wax','Office Supply','PC',0.00,0,0,'JOHNSON',1),(123,'Mr. Muscle','Office Supply','PC',0.00,0,0,'NONE',1),(124,'Air Freshener','Office Supply','PC',0.00,0,0,'NONE',1),(125,'Dust Mask','Office Supply','PC',0.00,0,0,'GREENE USA',1),(126,'Brush','Office Supply','PC',0.00,0,0,'HOUSEWELL',1),(127,'Crosscut Saw','Office Supply','PC',0.00,0,0,'STANLEY',1),(128,'Certification','Office Supply','PC',0.00,0,0,'NONE',1),(129,'Printer (Epson)','Office Supply','PC',0.00,0,0,'EPSON/CANON',1),(130,'Handle Bag','Office Supply','PC',0.00,0,0,'NONE',1),(131,'Toilet Brush','Office Supply','PC',0.00,0,0,'CSI',1),(132,'Wall Clock','Office Supply','PC',0.00,0,0,'QUARTZ',1),(133,'Trash Can','Office Supply','PC',0.00,0,0,'NONE',1),(134,'Map Handle','Office Supply','PC',0.00,0,0,'PENGUIN',1),(135,'Map Head','Office Supply','PC',0.00,0,0,'PENGUIN',1),(136,'Deeper','Office Supply','PC',0.00,0,0,'COSTSAVERS',1),(137,'A4 Bond Paper','Office Supply','REAM',0.00,0,0,'ADVANCE/CLEARCOPY',1),(138,'CORRECTION FLUID\r\n','Office Supply','PC',0.00,0,0,'NONE',1),(139,'Mouse (Optical)\r\n','Office Supply\r\n','PC',0.00,0,0,'GENIUS',1),(140,'Flash Drive\r\n','Office Supply\r\n','PC',0.00,0,0,'KINGSTON',1),(141,'Rubber Band\r\n','Office Supply\r\n','PC',0.00,0,0,'POINTER',1),(142,'Maxell Alkaline Battery (AAA)\r\n','Office Supply\r\n','PC',0.00,0,0,'MAXELL',1),(143,'Maxell Alkaline Battery (AA)\r\n','Office Supply\r\n','PC',0.00,0,0,'MAXELL',1),(144,'HDD\r\n','Office Supply\r\n','PC',0.00,0,0,'NONE',1),(145,'Yellow Paper\r\n','Office Supply\r\n','REAM',0.00,0,0,'NONE',1),(146,'Short Bond Paper\r\n','Office Supply\r\n','REAM',0.00,0,0,'ADVANCE',1),(147,'Gloves\r\n','Office Supply\r\n','PC',0.00,0,0,'NONE',1),(148,'Cutter\r\n','Office Supply\r\n','PC',0.00,0,0,'POINTER',1),(149,'Calculator\r\n','Office Supply\r\n','PC',0.00,0,0,'CANON',1),(150,'File Rack\r\n','Office Supply\r\n','PC',0.00,0,0,'NONE',1),(151,'Ring Border\r\n','Office Supply\r\n','PC',0.00,0,0,'NONE',1),(152,'Colored Paper\r\n','Office Supply\r\n','REAM',0.00,0,0,'SQI/SUN',1),(153,'Storage Box','Office Supply','PC',0.00,0,0,'NONE',1),(154,'Post It','Office Supply','PC',0.00,0,0,'POST IT',1),(155,'Push Pins','Office Supply','PC',0.00,0,0,'NONE',1),(156,'BATTERY, dry cell AA, 2 pieces per blister pack','COMMON ELECTRICAL SUPPLIES','PACK',17.42,0,0,'NONE',1),(157,'BATTERY, dry cell AAA, 2 pieces per blister pack','COMMON ELECTRICAL SUPPLIES','PACK',15.03,0,0,'NONE',1),(158,'BATTERY, dry cell D, 2 pieces per blister pack','COMMON ELECTRICAL SUPPLIES','PACK',77.56,0,0,'NONE',1),(159,'FLUORESCENT LAMP, tubular, 28 watts','COMMON ELECTRICAL SUPPLIES','TUBE',114.40,0,0,'NONE',1),(160,'LED Linear Tube, 18 watts individually wrapped in carton','COMMON ELECTRICAL SUPPLIES','TUBE',280.80,0,0,'NONE',1),(161,'Ligth Bulb, LED, 7 watts 1 pc in individual box','COMMON ELECTRICAL SUPPLIES','PIECE',0.00,0,0,'NONE',1),(162,'TAPE, electrical','COMMON ELECTRICAL SUPPLIES','ROLL',18.20,0,0,'NONE',1),(163,'ACETATE, gauge #3, 50m per roll','COMMON OFFICE SUPPLIES','ROLL',624.00,0,0,'NONE',1),(164,'AIR FRESHENER, 280mL/150g min','COMMON OFFICE SUPPLIES','CAN',83.20,0,0,'NONE',1),(165,'ALCOHOL, 70%, ethyl, 500ml','COMMON OFFICE SUPPLIES','BOTTLE',47.82,0,0,'NONE',1),(166,'CARBON FILM, A4 size, 100 sheets per box','COMMON OFFICE SUPPLIES','BOX',197.58,0,0,'NONE',1),(167,'CARBON FILM, PE, black, 216mm x 30mm, 100 sheets per box','COMMON OFFICE SUPPLIES','BOX',202.80,0,0,'NONE',1),(168,'CARTOLINA, assorted color, 20 pieces per pack','COMMON OFFICE SUPPLIES','PACK',64.48,0,0,'NONE',1),(169,'CHALK, white, enamel, 100 pieces per box','COMMON OFFICE SUPPLIES','BOX',25.86,0,0,'NONE',1),(170,'CLEARBOOK, A4 size','COMMON OFFICE SUPPLIES','PIECE',39.52,0,0,'NONE',1),(171,'CLEARBOOK, Legal size','COMMON OFFICE SUPPLIES','PIECE',43.68,0,0,'NONE',1),(172,'CLIP, backfold, 19mm, 12 pieces per box','COMMON OFFICE SUPPLIES','BOX',7.28,0,0,'NONE',1),(173,'CLIP, backfold, 25mm, 12 pieces per box','COMMON OFFICE SUPPLIES','BOX',10.40,0,0,'NONE',1),(174,'CLIP, backfold, 32mm, 12 pieces per box','COMMON OFFICE SUPPLIES','BOX',19.12,0,0,'NONE',1),(175,'CLIP, backfold, 50mm, 12 pieces per box','COMMON OFFICE SUPPLIES','BOX',36.38,0,0,'NONE',1),(176,'CORRECTION TAPE, 6 meters(min), 1 piece in individual plastic','COMMON OFFICE SUPPLIES','PIECE',31.20,0,0,'NONE',1),(177,'DATA FILE BOX, made with chipboard, with closed ends','COMMON OFFICE SUPPLIES','BOX',69.78,0,0,'NONE',1),(178,'DATA FOLDER, made with chipboard, taglia lock','COMMON OFFICE SUPPLIES','PIECE',68.64,0,0,'NONE',1),(179,'ENVELOPE, DOCUMENTARY, for A4 size document, 500 pieces per box','COMMON OFFICE SUPPLIES','BOX',381.54,0,0,'NONE',1),(180,'ENVELOPE, DOCUMENTARY, for Legal size document, 500 pieces per box','COMMON OFFICE SUPPLIES','BOX',507.40,0,0,'NONE',1),(181,'ENVELOPE, EXPANDING, KRAFTBOARD, for legal size documents, 100 pieces per box','COMMON OFFICE SUPPLIES','BOX',621.71,0,0,'NONE',1),(182,'ENVELOPE, EXPANDING, plastic','COMMON OFFICE SUPPLIES','PIECE',27.61,0,0,'NONE',1),(183,'ENVELOPE, MAILING, 500 pieces per box, 80 gsm','COMMON OFFICE SUPPLIES','BOX',499.20,0,0,'NONE',1),(184,'ENVELOPE, MAILING, with window, 500 pieces per box, 80 gsm','COMMON OFFICE SUPPLIES','BOX',561.60,0,0,'NONE',1),(185,'ERASER, felt, for blackboard/whiteboard','COMMON OFFICE SUPPLIES','PIECE',11.11,0,0,'NONE',1),(186,'ERASER, plastic or rubber','COMMON OFFICE SUPPLIES','PIECE',2.29,0,0,'NONE',1),(187,'FASTENER, for paper, metal, 50 sets per box','COMMON OFFICE SUPPLIES','BOX',57.09,0,0,'NONE',1),(188,'FILE ORGANIZER, expanding, legal, plastic, assorted colors','COMMON OFFICE SUPPLIES','PIECE',70.67,0,0,'NONE',1),(189,'FILE TAB DIVIDER, A4, five (5) colors per set','COMMON OFFICE SUPPLIES','SET',12.48,0,0,'NONE',1),(190,'FILE TAB DIVIDER, Legal Size, five(5) colors per set','COMMON OFFICE SUPPLIES','SET',16.64,0,0,'NONE',1),(191,'FOLDER, Fancy, A4, 50s/ bundle','COMMON OFFICE SUPPLIES','BUNDLE',234.00,0,0,'NONE',1),(192,'FOLDER, Fancy, Legal, 50 pieces per bundle','COMMON OFFICE SUPPLIES','BUNDLE',291.20,0,0,'NONE',1),(193,'FOLDER, L-type, A4, 50 pieces pack','COMMON OFFICE SUPPLIES','PACK',166.40,0,0,'NONE',1),(194,'FOLDER, L-type, Legal size, 50 pieces per pack','COMMON OFFICE SUPPLIES','PACK',203.84,0,0,'NONE',1),(195,'FOLDER, Pressboard, size 240mm x 370mm, 100s/box','COMMON OFFICE SUPPLIES','BOX',746.72,0,0,'NONE',1),(196,'FOLDER, Tagboard, A4, 100 pieces per pack','COMMON OFFICE SUPPLIES','PACK',179.28,0,0,'NONE',1),(197,'FOLDER, Tagboard, Legal size, 100 pieces per pack','COMMON OFFICE SUPPLIES','PACK',200.37,0,0,'NONE',1),(198,'GLUE, all purpose, 300 grams min.','COMMON OFFICE SUPPLIES','JAR',44.18,0,0,'NONE',1),(199,'INDEX TAB, self-adhesive, 5 set/box, assorted colors','COMMON OFFICE SUPPLIES','BOX',47.90,0,0,'NONE',1),(200,'LOOSELEAF COVER, 50sets per bundle','COMMON OFFICE SUPPLIES','BUNDLE',539.76,0,0,'NONE',1),(201,'MAGAZINE FILE BOX, LARGE','COMMON OFFICE SUPPLIES','PIECE',41.60,0,0,'NONE',1),(202,'MARKER, fluorescent, 3 colors per set','COMMON OFFICE SUPPLIES','SET',35.55,0,0,'NONE',1),(203,'MARKER, whiteboard, bullet type, black','COMMON OFFICE SUPPLIES','PIECE',10.28,0,0,'NONE',1),(204,'MARKER, whiteboard, bullet type, blue','COMMON OFFICE SUPPLIES','PIECE',10.28,0,0,'NONE',1),(205,'MARKER, whiteboard, bullet type, red','COMMON OFFICE SUPPLIES','PIECE',10.28,0,0,'NONE',1),(206,'MARKER, permanent, bullet type, black','COMMON OFFICE SUPPLIES','PIECE',9.65,0,0,'NONE',1),(207,'MARKER, permanent, bullet type, blue','COMMON OFFICE SUPPLIES','PIECE',9.65,0,0,'NONE',1),(208,'MARKER, permanent, bullet type, red','COMMON OFFICE SUPPLIES','PIECE',9.65,0,0,'NONE',1),(209,'NOTE BOOK, stenographer\'s, 40 leaves, spiral','COMMON OFFICE SUPPLIES','PIECE',10.40,0,0,'NONE',1),(210,'NOTE PAD, stick-on, (2\"x3\"), 100 sheets per pad','COMMON OFFICE SUPPLIES','PAD',31.20,0,0,'NONE',1),(211,'NOTE PAD, stick-on, (3\"x3\"), 100 sheets per pad','COMMON OFFICE SUPPLIES','PAD',40.54,0,0,'NONE',1),(212,'NOTE PAD, stick-on, (3\"x4\"), 100 sheets per pad','COMMON OFFICE SUPPLIES','PAD',54.06,0,0,'NONE',1),(213,'PAD PAPER, Ruled','COMMON OFFICE SUPPLIES','PAD',18.26,0,0,'NONE',1),(214,'PAPER CLIP, gem type, 48mm, 100 pieces per box','COMMON OFFICE SUPPLIES','BOX',12.85,0,0,'NONE',1),(215,'PAPER CLIP, gem type, 32mm, 100 pieces per box','COMMON OFFICE SUPPLIES','BOX',6.43,0,0,'NONE',1),(216,'PAPER, MULTICOPY, 80gsm, size: 210mm x 297mm','COMMON OFFICE SUPPLIES','REAM',112.32,0,0,'NONE',1),(217,'PAPER, MULTICOPY, 80gsm, size: 216mm x 330mm','COMMON OFFICE SUPPLIES','REAM',132.02,0,0,'NONE',1),(218,'PAPER, Multi-Purpose (COPY) A4, 70gsm','COMMON OFFICE SUPPLIES','REAM',95.26,0,0,'NONE',1),(219,'PAPER, Multi-Purpose (COPY), Legal size, 70gsm','COMMON OFFICE SUPPLIES','REAM',114.35,0,0,'NONE',1),(220,'PARCHMENT PAPER, A4 size, 80 gsm, 100 sheets per pack]','COMMON OFFICE SUPPLIES','REAM',88.40,0,0,'NONE',1),(221,'PAPER, Thermal, 216mm x 30m','COMMON OFFICE SUPPLIES','ROLL',31.15,0,0,'NONE',1),(222,'PENCIL, lead, w/eraser, 0ne(1) dozen per box','COMMON OFFICE SUPPLIES','BOX',19.62,0,0,'NONE',1),(223,'PHILIPPINE NATIONAL FLAG','COMMON OFFICE SUPPLIES','PIECE',278.72,0,0,'NONE',1),(224,'RECORD BOOK, 300 pages, size: 214mm x 278mm min','COMMON OFFICE SUPPLIES','BOOK',60.32,0,0,'NONE',1),(225,'RECORD BOOK, 500 pages, size: 214mm x 278mm min','COMMON OFFICE SUPPLIES','BOOK',86.85,0,0,'NONE',1),(226,'RING BINDER, Plastic 32mm, 10 pieces per bundle','COMMON OFFICE SUPPLIES','BUNDLE',256.87,0,0,'NONE',1),(227,'RUBBER BAND, 70mm min lay flat length (#18)','COMMON OFFICE SUPPLIES','BOX',93.31,0,0,'NONE',1),(228,'RULER, plastic, 450mm, 1 piece in individual plastic','COMMON OFFICE SUPPLIES','PIECE',15.48,0,0,'NONE',1),(229,'SIGN PEN, black','COMMON OFFICE SUPPLIES','PIECE',38.10,0,0,'NONE',1),(230,'SIGN PEN, blue','COMMON OFFICE SUPPLIES','PIECE',38.10,0,0,'NONE',1),(231,'SIGN PEN, red','COMMON OFFICE SUPPLIES','PIECE',38.10,0,0,'NONE',1),(232,'STAMP PAD INK, violet, 50mL','COMMON OFFICE SUPPLIES','BOTTLE',24.63,0,0,'NONE',1),(233,'STAMP PAD, felt pad, min 60mm x 100mm ','COMMON OFFICE SUPPLIES','PIECE',27.66,0,0,'NONE',1),(234,'STAPLE WIRE, Heavy duty, 23/13','COMMON OFFICE SUPPLIES','BOX',23.40,0,0,'NONE',1),(235,'STAPLE WIRE, Standard','COMMON OFFICE SUPPLIES','BOX',18.92,0,0,'NONE',1),(236,'TAPE, masking, 24mm, 50 meters length','COMMON OFFICE SUPPLIES','ROLL',55.12,0,0,'NONE',1),(237,'TAPE, masking, 48mm, 50 meters length','COMMON OFFICE SUPPLIES','ROLL',105.04,0,0,'NONE',1),(238,'TAPE, transparent, 24mm, 50 meters','COMMON OFFICE SUPPLIES','ROLL',10.92,0,0,'NONE',1),(239,'TAPE, transparent, 48mm, 50 meters','COMMON OFFICE SUPPLIES','ROLL',26.52,0,0,'NONE',1),(240,'TAPE, packaging, 48mm, 50 meters length','COMMON OFFICE SUPPLIES','ROLL',32.74,0,0,'NONE',1),(241,'TOILET TISSUE, 12 rolls per pack','COMMON OFFICE SUPPLIES','PACK',67.60,0,0,'NONE',1),(242,'TWINE, plastic, one kilo per roll','COMMON OFFICE SUPPLIES','ROLL',49.92,0,0,'NONE',1),(243,'WRAPPING PAPER, kraft, 50 sheets per pack','COMMON OFFICE SUPPLIES','PACK',128.84,0,0,'NONE',1),(244,'Software ','COMMON OFFICE SUPPLIES','PIECE',0.00,0,0,'NONE',1),(245,'Airline Travel','COMMON OFFICE SUPPLIES','PIECE',0.00,0,0,'NONE',1),(246,'CUTTER BLADE, heavy duty cutter, 10 pieces per tube','COMMON OFFICE DEVICES','TUBE',9.19,0,0,'NONE',1),(247,'CUTTER KNIFE, heavy duty ','COMMON OFFICE DEVICES','PIECE',19.76,0,0,'NONE',1),(248,'DATING AND STAMPING MACHINE','COMMON OFFICE DEVICES','PIECE',478.38,0,0,'NONE',1),(249,'PENCIL SHARPENER, 1 piece in indiviual plastic case','COMMON OFFICE DEVICES','PIECE',187.20,0,0,'NONE',1),(250,'PUNCHER, paper, heavy duty, with two hole guide, 1 piece in individual box','COMMON OFFICE DEVICES','PIECE',114.28,0,0,'NONE',1),(251,'SCISSORS, (6\")','COMMON OFFICE DEVICES','PAIR',13.73,0,0,'NONE',1),(252,'STAPLER, standard','COMMON OFFICE DEVICES','PIECE',82.16,0,0,'NONE',1),(253,'STAPLER, binder type, heavy duty for high volume stapling, 25-135sheets of 70gsm bond paper stapling capacity, min 100 staples, with adjustable paper guide','COMMON OFFICE DEVICES','PIECE',878.80,0,0,'NONE',1),(254,'STAPLE REMOVER, plier type','COMMON OFFICE DEVICES','PIECE',18.18,0,0,'NONE',1),(255,'TAPE DISPENSER,  table top','COMMON OFFICE DEVICES','PIECE',47.72,0,0,'NONE',1),(256,'WASTE BASKET, non-rigid plastic','COMMON OFFICE DEVICES','PIECE',23.90,0,0,'NONE',1),(257,'BROOM, soft (tambo)','COMMON JANITORIAL SUPPLIES','PIECE',88.40,0,0,'NONE',1),(258,'BROOM, stick (tingting)','COMMON JANITORIAL SUPPLIES','PIECE',23.92,0,0,'NONE',1),(259,'CLEANER, TOILET BOWL AND URINAL, 900-1000ml cap','COMMON JANITORIAL SUPPLIES','BOTTLE',41.60,0,0,'NONE',1),(260,'CLEANSER, scouring powder, 350grams/can','COMMON JANITORIAL SUPPLIES','CAN',21.27,0,0,'NONE',1),(261,'DETERGENT POWDER, all purpose, 1kilo/pouch','COMMON JANITORIAL SUPPLIES','POUCH',37.43,0,0,'NONE',1),(262,'DISINFECTANT SPRAY, 400-550 grams','COMMON JANITORIAL SUPPLIES','CAN',119.60,0,0,'NONE',1),(263,'DUST PAN, non-rigid plastic','COMMON JANITORIAL SUPPLIES','PIECE',24.96,0,0,'NONE',1),(264,'FLOOR WAX, Paste, red','COMMON JANITORIAL SUPPLIES','CAN',202.80,0,0,'NONE',1),(265,'FURNITURE CLEANER, aerosol, 300mL/can ','COMMON JANITORIAL SUPPLIES','CAN',84.76,0,0,'NONE',1),(266,'INSECTICIDE, aerosol type, 600mL/can','COMMON JANITORIAL SUPPLIES','CAN',124.80,0,0,'NONE',1),(267,'MOPBUCKET','COMMON JANITORIAL SUPPLIES','PIECE',1.00,0,0,'NONE',1),(268,'MOPHANDLE, screw type, aluminum handle','COMMON JANITORIAL SUPPLIES','PIECE',142.48,0,0,'NONE',1),(269,'MOPHEAD, made of rayon','COMMON JANITORIAL SUPPLIES','PIECE',98.80,0,0,'NONE',1),(270,'RAG, all cotton, 32 pieces per kilo per bundle','COMMON JANITORIAL SUPPLIES','BUNDLE',49.69,0,0,'NONE',1),(271,'SCOURING PAD, 5 pieces per pack','COMMON JANITORIAL SUPPLIES','PACK',102.96,0,0,'NONE',1),(272,'TRASHBAG, plastic, transparent, 10pcs/roll','COMMON JANITORIAL SUPPLIES','ROLL',139.88,0,0,'NONE',1),(273,'DISINFECTANT, bleaching solution','COMMON JANITORIAL SUPPLIES','CONT',101.82,0,0,'NONE',1),(274,'DETERGENT BAR, 140g as packed (-2.5%)','COMMON JANITORIAL SUPPLIES','BAR',7.28,0,0,'NONE',1),(275,'BINDING AND PUNCHING MACHINE, two(2) hand lever system, 34cm or 13\" (24 holes) punching, width adjustable to any format, binds 425 sheets, or up to 2\" thick, all metal construction','COMMON OFFICE EQUIPMENT','UNIT',10.00,0,0,'NONE',1),(276,'CALCULATOR, COMPACT, electronic, 12 digits cap, 1 unit in individual box','COMMON OFFICE EQUIPMENT','UNIT',135.20,0,0,'NONE',1),(277,'CALCULATOR, SCIENTIFIC, 1 unit per box','COMMON OFFICE EQUIPMENT','UNIT',258.84,0,0,'NONE',1),(278,'CHAIR, monobloc, without armrest, beige','COMMON OFFICE EQUIPMENT','PIECE',254.68,0,0,'NONE',1),(279,'CHAIR, monobloc, without armrest, white','COMMON OFFICE EQUIPMENT','PIECE',254.80,0,0,'NONE',1),(280,'DIGITAL VOICE RECORDER, 4GB (expandable), 1 unit in individual box','COMMON OFFICE EQUIPMENT','UNIT',6.00,0,0,'NONE',1),(281,'DOCUMENT CAMERA,  four(4) reference points demarcate viewing area, 16x(1600%) consecutive zoom, PC and Doc Cam video switcher, plug and play','COMMON OFFICE EQUIPMENT','UNIT',25.00,0,0,'NONE',1),(282,'ELECTRIC FAN, industrial','COMMON OFFICE EQUIPMENT','UNIT',956.80,0,0,'NONE',1),(283,'ELECTRIC FAN, orbit type','COMMON OFFICE EQUIPMENT','UNIT',1.00,0,0,'NONE',1),(284,'ELECTRIC FAN, stand type','COMMON OFFICE EQUIPMENT','UNIT',967.10,0,0,'NONE',1),(285,'ELECTRIC FAN, wall type','COMMON OFFICE EQUIPMENT','UNIT',790.40,0,0,'NONE',1),(286,'FACSIMILE MACHINE, uses thermal paper, 50m/roll, for documents 216mm x 600mm, 15 sec, transmission speed, running width 2018mm, document feeder holds 10 pages, with automatic paper cutter, redial, and','COMMON OFFICE EQUIPMENT','UNIT',3.00,0,0,'NONE',1),(287,'FIRE EXTINGUISHER, dry chemical, for ABC class of fire, stored pressure type,non-electrical conductor,non-toxic, non-corrosive, 4.5kg (10lbs.), brand new','COMMON OFFICE EQUIPMENT','UNIT',1.00,0,0,'NONE',1),(288,'FIRE EXTINGUISHER, pure HCFC 123, with fire rating of 1A, 1BC,  for ABC class of fire, stored pressure type, non-electrical conductor, non-corrosive, 4.5kg (10 lbs), brand new','COMMON OFFICE EQUIPMENT','UNIT',4.00,0,0,'NONE',1),(289,'MULTIMEDIA PROJECTOR, 4000 ansi Lumens, 3600 hours lamp life, supports SVGA to SXGA, (compressed) resolution','COMMON OFFICE EQUIPMENT','UNIT',26.00,0,0,'NONE',1),(290,'PAPER TRIMMER/CUTTING MACHINE, max paper size: B4, 30 sheets cutting cap., automatic clamping, stationery blade guard, A4-A6 format indications','COMMON OFFICE EQUIPMENT','UNIT',7.00,0,0,'NONE',1),(291,'PAPER SHREDDER, 0.06m/sec shred speed, cuts 6-8 sheets of 70gsm paper','COMMON OFFICE EQUIPMENT','UNIT',5.00,0,0,'NONE',1),(292,'PRINTER, IMPACT DOT MATRIX, 24 pins, 136 column, 480 cps print speed','COMMON OFFICE EQUIPMENT','UNIT',18.00,0,0,'NONE',1),(293,'PRINTER, IMPACT DOT MATRIX, 9 pins, 80 column, 337 cps print speed','COMMON OFFICE EQUIPMENT','UNIT',5.00,0,0,'NONE',1),(294,'PRINTER, INKJET, wireless capable, 55ppm speed, 512MB memory, duplex printing capable','COMMON OFFICE EQUIPMENT','UNIT',10.00,0,0,'NONE',1),(295,'PRINTER, LASER, monochrome, 24ppm speed, 1200 x 1200 dpi','COMMON OFFICE EQUIPMENT','UNIT',1.00,0,0,'NONE',1),(296,'TABLE, monobloc, square, 36\" X 36\", white, four(4) seater, for indoor and outdoor use','COMMON OFFICE EQUIPMENT','UNIT',1.00,0,0,'NONE',1),(297,'TABLE, monobloc, square, 36\" X 36\", beige, four(4) seater, for indoor and outdoor use','COMMON OFFICE EQUIPMENT','UNIT',1.00,0,0,'NONE',1),(298,'Desktop and Laptop','COMMON OFFICE EQUIPMENT','UNIT',0.00,0,0,'NONE',1),(299,'COMPUTER CONTINUOUS FORMS, 1 ply, 11\" x 9-1/2\", 2000 sheets/box','COMMON COMPUTER SUPPLIES','BOX',630.76,0,0,'NONE',1),(300,'COMPUTER CONTINUOUS FORMS, 1 ply, 11\" x 14-7/8\", 2000 sheets/box','COMMON COMPUTER SUPPLIES','BOX',950.30,0,0,'NONE',1),(301,'COMPUTER CONTINUOUS FORMS, 2 ply, 11\" x 9-1/2\", 1000 sets/box','COMMON COMPUTER SUPPLIES','BOX',716.04,0,0,'NONE',1),(302,'COMPUTER CONTINUOUS FORMS, 2 ply, 11\" x 14-7/8\", 1000 sets/box','COMMON COMPUTER SUPPLIES','BOX',1.00,0,0,'NONE',1),(303,'COMPUTER CONTINUOUS FORMS, 3 ply, 11 x 9-1/2\", 500 sets/box','COMMON COMPUTER SUPPLIES','BOX',596.80,0,0,'NONE',1),(304,'COMPUTER CONTINUOUS FORMS, 3 ply,  11\" x 14-7/8\", 500 sets/box','COMMON COMPUTER SUPPLIES','BOX',958.15,0,0,'NONE',1),(305,'DVD REWRITABLE, 4x speed, 4.7GB capacity','COMMON COMPUTER SUPPLIES','PIECE',21.79,0,0,'NONE',1),(306,'EXTERNAL HARD DRIVE, 1TB, 2.5\" HDD, USB 3.0, backward compatible with USB 2.0, 5400 rpm, with dual color LED light to indicate USB 3.0/USB 2.0 transmission, USB powered, System Requirements: USB 3.0: ','COMMON COMPUTER SUPPLIES','PIECE',2.00,0,0,'NONE',1),(307,'FLASH DRIVE, 16GB, USB 2.0,  plug and play','COMMON COMPUTER SUPPLIES','PIECE',194.48,0,0,'NONE',1),(308,'MOUSE, optical, USB connection type','COMMON COMPUTER SUPPLIES','UNIT',127.80,0,0,'NONE',1),(309,'HANDBOOK ON PHILIPPINE GOVERNMENT   PROCUREMENT-RA 9184(6th Edition),  6\" x 9\", 296 pages,','HANDBOOK ON PROCUREMENT','PIECE',61.83,0,0,'NONE',1),(310,'INK CART, BROTHER LC39BK, Black              ','CONSUMABLES','CART',681.20,0,0,'NONE',1),(311,'INK CART, BROTHER LC39C, Cyan                ','CONSUMABLES','CART',447.20,0,0,'NONE',1),(312,'INK CART, BROTHER LC39M, Magenta        ','CONSUMABLES','CART',447.20,0,0,'NONE',1),(313,'INK CART, BROTHER LC39Y, Yellow             ','CONSUMABLES','CART',447.20,0,0,'NONE',1),(314,'INK CART, BROTHER LC67B, Black                ','CONSUMABLES','CART',910.00,0,0,'NONE',1),(315,'INK CART, BROTHER LC67C, Cyan                ','CONSUMABLES','CART',546.00,0,0,'NONE',1),(316,'INK CART, BROTHER LC67M, Magenta     ','CONSUMABLES','CART',546.00,0,0,'NONE',1),(317,'INK CART, BROTHER LC67Y, Yellow            ','CONSUMABLES','CART',546.00,0,0,'NONE',1),(318,'INK CART, BROTHER LC67HYBK, Black       ','CONSUMABLES','CART',1.00,0,0,'NONE',1),(319,'INK CART, BROTHER LC67HYC, Cyan           ','CONSUMABLES','CART',868.40,0,0,'NONE',1),(320,'INK CART, BROTHER LC67HYM, Magenta','CONSUMABLES','CART',868.40,0,0,'NONE',1),(321,'INK CART, BROTHER LC67HYY, Yellow        ','CONSUMABLES','CART',868.40,0,0,'NONE',1),(322,'INK CART, CANON PG-810, Black              ','CONSUMABLES','CART',774.80,0,0,'NONE',1),(323,'INK CART, CANON PG-740, Black            ','CONSUMABLES','CART',754.00,0,0,'NONE',1),(324,'INK CART, CANON PGI-725, Black            ','CONSUMABLES','CART',574.08,0,0,'NONE',1),(325,'INK CART, CANON CLI-726, Black              ','CONSUMABLES','CART',534.56,0,0,'NONE',1),(326,'INK CART, CANON CL-811, Colored          ','CONSUMABLES','CART',1.00,0,0,'NONE',1),(327,'INK CART, CANON CL-741, Colored','CONSUMABLES','CART',1.00,0,0,'NONE',1),(328,'INK CART, CANON CLI-726, Cyan              ','CONSUMABLES','CART',535.60,0,0,'NONE',1),(329,'INK CART, CANON CLI-726, Magenta        ','CONSUMABLES','CART',535.60,0,0,'NONE',1),(330,'INK CART, CANON CLI-726, Yellow          ','CONSUMABLES','CART',535.60,0,0,'NONE',1),(331,'INK CART, EPSON C13T038190 (T0 38), Black','CONSUMABLES','CART',491.92,0,0,'NONE',1),(332,'INK CART, EPSON C13T039090 (T0 39), Colored','CONSUMABLES','CART',770.64,0,0,'NONE',1),(333,'INK CART, EPSON C13T105190(73N)/(91N),Black','CONSUMABLES','CART',426.40,0,0,'NONE',1),(334,'INK CART, EPSON C13T105290(73N)/(91N),Cyan','CONSUMABLES','CART',426.40,0,0,'NONE',1),(335,'INK CART, EPSON C13T105390(73N)/(91N),Magenta','CONSUMABLES','CART',426.40,0,0,'NONE',1),(336,'INK CART, EPSON C13T105490(73N)/(91N),Yellow','CONSUMABLES','CART',426.40,0,0,'NONE',1),(337,'INK CART, EPSON C13T6664100 (T6641), Black','CONSUMABLES','CART',254.80,0,0,'NONE',1),(338,'INK CART, EPSON C13T664200 (T6642), Cyan','CONSUMABLES','CART',254.80,0,0,'NONE',1),(339,'INK CART, EPSON C13T664300 (T6643), Magenta','CONSUMABLES','CART',254.80,0,0,'NONE',1),(340,'INK CART, EPSON C13T664400 (T6644), Yellow','CONSUMABLES','CART',254.80,0,0,'NONE',1),(341,'INK CART, HP 51645A, (HP45), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(342,'INK CART, HP C1823A, (HP23), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(343,'INK CART, HP C4844A, (HP10), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(344,'INK CART, HP C4906AA, (HP940XL), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(345,'INK CART, HP C4907AA, (HP940XL), Cyan','CONSUMABLES','CART',1.00,0,0,'NONE',1),(346,'INK CART, HP C4908AA, (HP940XL), Magenta','CONSUMABLES','CART',1.00,0,0,'NONE',1),(347,'INK CART, HP C4909AA, (HP940XL), Yellow','CONSUMABLES','CART',1.00,0,0,'NONE',1),(348,'INK CART, HP C4936A, (HP18), Black','CONSUMABLES','CART',982.80,0,0,'NONE',1),(349,'INK CART, HP C4937A, (HP18), Cyan','CONSUMABLES','CART',717.60,0,0,'NONE',1),(350,'INK CART, HP C4938A, (HP18), Magenta','CONSUMABLES','CART',717.60,0,0,'NONE',1),(351,'INK CART, HP C4939A, (HP18), Yellow','CONSUMABLES','CART',717.60,0,0,'NONE',1),(352,'INK CART, HP C6578DA, (HP78), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(353,'INK CART, HP C6615DA, (HP15), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(354,'INK CART, HP C6625AA, (HP17), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(355,'INK CART, HP C6656AA, (HP56), Black','CONSUMABLES','CART',921.44,0,0,'NONE',1),(356,'INK CART, HP C6657AA, (HP57), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(357,'INK CART, HP C8727AA, (HP27), Black','CONSUMABLES','CART',826.80,0,0,'NONE',1),(358,'INK CART, HP C8765WA, (HP94), Black','CONSUMABLES','CART',930.80,0,0,'NONE',1),(359,'INK CART, HP C8766WA, (HP95), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(360,'INK CART, HP C8767WA, (HP96), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(361,'INK CART, HP C9351AA, (HP21), Black','CONSUMABLES','CART',650.00,0,0,'NONE',1),(362,'INK CART, HP C9352AA, (HP22), Tri-color','CONSUMABLES','CART',751.92,0,0,'NONE',1),(363,'INK CART, HP C9361WA, (HP93), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(364,'INK CART, HP C9362WA, (HP92), Black','CONSUMABLES','CART',600.08,0,0,'NONE',1),(365,'INK CART, HP C9363WA, (HP97), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(366,'INK CART, HP C9364WA, (HP98), Black','CONSUMABLES','CART',826.80,0,0,'NONE',1),(367,'INK CART, HP CB314A, (HP900), Black','CONSUMABLES','CART',296.40,0,0,'NONE',1),(368,'INK CART, HP CB315A, (HP900), Tri-color','CONSUMABLES','CART',379.60,0,0,'NONE',1),(369,'INK CART, HP CB335WA, (HP74), Black','CONSUMABLES','CART',696.80,0,0,'NONE',1),(370,'INK CART, HP CB336WA, (HP74XL), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(371,'INK CART, HP CB337WA, (HP75), Tri-color','CONSUMABLES','CART',803.92,0,0,'NONE',1),(372,'INK CART, HP CB338WA, (HP75XL), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(373,'INK CART, HP CC640WA, (HP60),  Black','CONSUMABLES','CART',639.60,0,0,'NONE',1),(374,'INK CART, HP CC641WA, (HP60XL),  Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(375,'INK CART, HP CC643WA, (HP60), Tri-color','CONSUMABLES','CART',754.00,0,0,'NONE',1),(376,'INK CART, HP CC644WA, (HP60XL), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(377,'INK CART, HP CC653AA, (HP901), Black','CONSUMABLES','CART',639.60,0,0,'NONE',1),(378,'INK CART, HP CC656AA, (HP901), Tri-color','CONSUMABLES','CART',1.00,0,0,'NONE',1),(379,'INK CART, HP CC660AA, (HP702), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(380,'INK CART, HP CD887AA, (HP703), Black','CONSUMABLES','CART',358.80,0,0,'NONE',1),(381,'INK CART, HP CD888AA, (HP703), Tri-color','CONSUMABLES','CART',358.80,0,0,'NONE',1),(382,'INK CART, HP CD971AA, (HP 920), Black','CONSUMABLES','CART',792.48,0,0,'NONE',1),(383,'INK CART, HP CD972AA, (HP 920XL), Cyan','CONSUMABLES','CART',629.20,0,0,'NONE',1),(384,'INK CART, HP CD973AA, (HP 920XL), Magenta','CONSUMABLES','CART',629.20,0,0,'NONE',1),(385,'INK CART, HP CD974AA, (HP 920XL), Yellow','CONSUMABLES','CART',629.20,0,0,'NONE',1),(386,'INK CART, HP CD975AA, (HP 920XL), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(387,'INK CART, HP CH561WA, (HP61), Black','CONSUMABLES','CART',644.80,0,0,'NONE',1),(388,'INK CART, HP CH562WA, (HP61), Tricolor','CONSUMABLES','CART',826.80,0,0,'NONE',1),(389,'INK CART, HP CN045AA, (HP950XL), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(390,'INK CART, HP CN046AA, (HP951XL), Cyan','CONSUMABLES','CART',1.00,0,0,'NONE',1),(391,'INK CART, HP CN047AA, (HP951XL), Magenta','CONSUMABLES','CART',1.00,0,0,'NONE',1),(392,'INK CART, HP CN048AA, (HP951XL). Yellow','CONSUMABLES','CART',1.00,0,0,'NONE',1),(393,'INK CART, HP CN692AA, (HP704), Black','CONSUMABLES','CART',358.80,0,0,'NONE',1),(394,'INK CART, HP CN693AA, (HP704), Tri-color','CONSUMABLES','CART',358.80,0,0,'NONE',1),(395,'INK CART, HP CZ107AA, (HP678), Black','CONSUMABLES','CART',358.80,0,0,'NONE',1),(396,'INK CART, HP CZ108AA, (HP678), Tricolor','CONSUMABLES','CART',360.88,0,0,'NONE',1),(397,'INK CART, HP CZ121A (HP685A), Black','CONSUMABLES','CART',366.08,0,0,'NONE',1),(398,'INK CART, HP CZ122A (HP685A), Cyan','CONSUMABLES','CART',249.60,0,0,'NONE',1),(399,'INK CART, HP CZ123A (HP685A), Magenta','CONSUMABLES','CART',249.60,0,0,'NONE',1),(400,'INK CART, HP CZ124A (HP685A), Yellow','CONSUMABLES','CART',249.60,0,0,'NONE',1),(401,'INK CART, HP Q8893AA (C8728AA), (HP28), Colored','CONSUMABLES','CART',930.80,0,0,'NONE',1),(402,'INK CART, LEXMARK 10NO217 (#17), Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(403,'INK CART, LEXMARK 10NO227 (#27), Colored','CONSUMABLES','CART',1.00,0,0,'NONE',1),(404,'TONER CART,  BROTHER TN-2025, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(405,'TONER CART,  BROTHER TN-2130, Black','CONSUMABLES','CART',1.00,0,0,'NONE',1),(406,'TONER CART,  BROTHER TN-2150, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(407,'TONER CART,  BROTHER TN-3320, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(408,'TONER CART,  BROTHER TN-3350, Black, for HL5450DN (CU Printer)','CONSUMABLES','CART',4.00,0,0,'NONE',1),(409,'TONER CART, HP C4092A, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(410,'TONER CART, HP C4096A, Black','CONSUMABLES','CART',5.00,0,0,'NONE',1),(411,'TONER CART, HP C7115A, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(412,'TONER CART, HP CB435A, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(413,'TONER CART, HP CB436A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(414,'TONER CART, HP CB540A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(415,'TONER CART, HP CB541A, Cyan','CONSUMABLES','CART',2.00,0,0,'NONE',1),(416,'TONER CART, HP CB542A, Yellow','CONSUMABLES','CART',2.00,0,0,'NONE',1),(417,'TONER CART, HP CB543A, Magenta','CONSUMABLES','CART',2.00,0,0,'NONE',1),(418,'TONER CART, HP CC364A, Black','CONSUMABLES','CART',7.00,0,0,'NONE',1),(419,'TONER CART, HP CC530A, Black','CONSUMABLES','CART',5.00,0,0,'NONE',1),(420,'TONER CART, HP CC531A, Cyan','CONSUMABLES','CART',5.00,0,0,'NONE',1),(421,'TONER CART, HP CC532A, Yellow','CONSUMABLES','CART',5.00,0,0,'NONE',1),(422,'TONER CART, HP CC533A, Magenta','CONSUMABLES','CART',5.00,0,0,'NONE',1),(423,'TONER CART, HP CE255A, Black','CONSUMABLES','CART',6.00,0,0,'NONE',1),(424,'TONER CART, HP CE278A, Black ','CONSUMABLES','CART',3.00,0,0,'NONE',1),(425,'TONER CART, HP CE285A (HP85A), Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(426,'TONER CART, HP CE310A, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(427,'TONER CART, HP CE311A, Cyan','CONSUMABLES','CART',2.00,0,0,'NONE',1),(428,'TONER CART, HP CE312A, Yellow','CONSUMABLES','CART',2.00,0,0,'NONE',1),(429,'TONER CART, HP CE313A, Magenta','CONSUMABLES','CART',2.00,0,0,'NONE',1),(430,'TONER CART, HP CE320A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(431,'TONER CART, HP CE321A, Cyan','CONSUMABLES','CART',3.00,0,0,'NONE',1),(432,'TONER CART, HP CE322A, Yellow','CONSUMABLES','CART',3.00,0,0,'NONE',1),(433,'TONER CART, HP CE323A, Magenta','CONSUMABLES','CART',3.00,0,0,'NONE',1),(434,'TONER CART, HP CE390A, Black','CONSUMABLES','CART',7.00,0,0,'NONE',1),(435,'TONER CART, HP CE400A, Black','CONSUMABLES','CART',6.00,0,0,'NONE',1),(436,'TONER CART, HP CE401A, Cyan','CONSUMABLES','CART',9.00,0,0,'NONE',1),(437,'TONER CART, HP CE402A, Yellow','CONSUMABLES','CART',9.00,0,0,'NONE',1),(438,'TONER CART, HP CE403A, Magenta','CONSUMABLES','CART',9.00,0,0,'NONE',1),(439,'TONER CART, HP CE410A, (HP305), Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(440,'TONER CART, HP CE411A, (HP305), Cyan','CONSUMABLES','CART',5.00,0,0,'NONE',1),(441,'TONER CART, HP CE412A, (HP305), Yellow','CONSUMABLES','CART',5.00,0,0,'NONE',1),(442,'TONER CART, HP CE413A, (HP305), Magenta','CONSUMABLES','CART',5.00,0,0,'NONE',1),(443,'TONER CART, HP CE505A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(444,'TONER CART, HP CE505X, Black, high cap','CONSUMABLES','CART',7.00,0,0,'NONE',1),(445,'TONER CART, HP Q2612A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(446,'TONER CART, HP Q2613A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(447,'TONER CART, HP Q5942A, Black','CONSUMABLES','CART',7.00,0,0,'NONE',1),(448,'TONER CART, HP Q5949A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(449,'TONER CART, HP Q5950A, Black','CONSUMABLES','CART',7.00,0,0,'NONE',1),(450,'TONER CART, HP Q5951A, Cyan','CONSUMABLES','CART',10.00,0,0,'NONE',1),(451,'TONER CART, HP Q5952A, Yellow','CONSUMABLES','CART',10.00,0,0,'NONE',1),(452,'TONER CART, HP Q5953A, Magenta','CONSUMABLES','CART',10.00,0,0,'NONE',1),(453,'TONER CART, HP Q6000A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(454,'TONER CART, HP Q6001A, Cyan','CONSUMABLES','CART',3.00,0,0,'NONE',1),(455,'TONER CART, HP Q6002A, Yellow','CONSUMABLES','CART',3.00,0,0,'NONE',1),(456,'TONER CART, HP Q6003A, Magenta','CONSUMABLES','CART',3.00,0,0,'NONE',1),(457,'TONER CART, HP Q6470A, Black','CONSUMABLES','CART',5.00,0,0,'NONE',1),(458,'TONER CART, HP Q6471A, Cyan','CONSUMABLES','CART',5.00,0,0,'NONE',1),(459,'TONER CART, HP Q6472A, Yellow','CONSUMABLES','CART',5.00,0,0,'NONE',1),(460,'TONER CART, HP Q6473A, Magenta','CONSUMABLES','CART',5.00,0,0,'NONE',1),(461,'TONER CART, HP Q7553A, Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(462,'TONER CART, LEXMARK E360H11P, Black','CONSUMABLES','CART',8.00,0,0,'NONE',1),(463,'TONER CART, LEXMARK T650A11P, Black','CONSUMABLES','CART',9.00,0,0,'NONE',1),(464,'TONER CART, SAMSUNG ML-D2850B, Black','CONSUMABLES','CART',4.00,0,0,'NONE',1),(465,'TONER CART, SAMSUNG MLT-D101S, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(466,'TONER CART, SAMSUNG MLT-D103L, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(467,'TONER CART, SAMSUNG MLT-D103S, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(468,'TONER CART, SAMSUNG MLT-D104S, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(469,'TONER CART, SAMSUNG MLT-D105L, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(470,'TONER CART, SAMSUNG MLT-D108S, Black','CONSUMABLES','CART',2.00,0,0,'NONE',1),(471,'TONER CART, SAMSUNG MLT-D119S(ML-2010D3), Black','CONSUMABLES','CART',3.00,0,0,'NONE',1),(472,'TONER CART, SAMSUNG MLT-D203E, Black','CONSUMABLES','CART',7.00,0,0,'NONE',1),(473,'TONER CART, SAMSUNG MLT-D203L, Black','CONSUMABLES','CART',4.00,0,0,'NONE',1),(474,'TONER CART, SAMSUNG MLT-D203U, black','CONSUMABLES','CART',9.00,0,0,'NONE',1),(475,'TONER CART, SAMSUNG MLT-D205E, Black','CONSUMABLES','CART',8.00,0,0,'NONE',1),(476,'TONER CART, SAMSUNG MLT-D205L, Black','CONSUMABLES','CART',4.00,0,0,'NONE',1),(477,'TONER CART, SAMSUNG SCX-D6555A, Black','CONSUMABLES','CART',4.00,0,0,'NONE',1),(478,'RIBBON CART, EPSON C13S015516 (#8750), Black, for LX-300','CONSUMABLES','CART',76.75,0,0,'NONE',1),(479,'RIBBON CART, EPSON C13S015531 (S015086), Black','CONSUMABLES','CART',724.88,0,0,'NONE',1),(480,'RIBBON CART, EPSON C13S015584 (S015327), Black','CONSUMABLES','CART',334.88,0,0,'NONE',1),(481,'RIBBON CART, EPSON C13S015632, Black, for    LX-310','CONSUMABLES','CART',75.92,0,0,'NONE',1),(483,'Paper Cutter','Office Supply','PC',0.00,0,0,'',2),(485,'Alcohol','Office Supply (DBM)','PC',0.00,0,0,'',2);

/*Table structure for table `items_buom` */

DROP TABLE IF EXISTS `items_buom`;

CREATE TABLE `items_buom` (
  `item_buom_id` int(11) NOT NULL AUTO_INCREMENT,
  `itemNo` int(11) DEFAULT NULL,
  `base_qty` int(11) DEFAULT NULL,
  `base_unit` varchar(50) DEFAULT NULL,
  `equiv_qty` int(11) DEFAULT NULL,
  `equiv_unit` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`item_buom_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `items_buom` */

insert  into `items_buom`(`item_buom_id`,`itemNo`,`base_qty`,`base_unit`,`equiv_qty`,`equiv_unit`) values (1,39,10,'PC',1,'PACK'),(3,39,100,'PC',1,'BOX'),(4,70,12,'PC',1,'BOX'),(5,71,12,'PC',1,'BOX'),(6,72,12,'PC',1,'BOX'),(10,10,12,'PC',1,'BOX'),(11,5,100,'PC',1,'BOX'),(12,83,50,'PC',1,'REAM'),(13,94,100,'PC',1,'REAM'),(14,106,10,'PC',1,'BOX'),(15,9,12,'PC',1,'BOX'),(16,0,0,'',0,'BOX'),(17,2,12,'PC',1,'BOX');

/*Table structure for table `items_buom_list` */

DROP TABLE IF EXISTS `items_buom_list`;

CREATE TABLE `items_buom_list` (
  `uomid` int(11) NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(50) DEFAULT NULL,
  `unit_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`uomid`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Data for the table `items_buom_list` */

insert  into `items_buom_list`(`uomid`,`unit_name`,`unit_description`) values (1,'PC','Piece'),(2,'REAM','Ream'),(3,'BOX','Box'),(4,'BOTTLE','Bottle'),(5,'PACK','Pack'),(6,'ROLL','Roll'),(7,'UNIT','Unit'),(8,'BAR','Bar'),(9,'BOOK','Book'),(10,'BUNDLE','Bundle'),(11,'CAN','Can'),(12,'CART','Cart'),(13,'CONT','Cont'),(14,'JAR','Jar'),(15,'PAD','Pad'),(16,'PAIR','Pair'),(17,'POUCH','Pouch'),(18,'SET','Set'),(19,'TUBE','Tube');

/*Table structure for table `purchase_apr` */

DROP TABLE IF EXISTS `purchase_apr`;

CREATE TABLE `purchase_apr` (
  `aprid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aprdate` date DEFAULT NULL,
  `aprno` varchar(500) DEFAULT NULL,
  `apritimestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `addedby` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`aprid`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_apr` */

insert  into `purchase_apr`(`aprid`,`aprdate`,`aprno`,`apritimestamp`,`addedby`) values (3,'2017-02-08','2017-004','0000-00-00 00:00:00',NULL),(4,'2017-02-08','2017-0010','0000-00-00 00:00:00',NULL),(6,'2017-02-08','2017-010','2017-02-08 13:26:34',NULL),(12,'2017-02-09','2017-100','2017-02-09 14:04:23',1),(14,'2017-02-21','2017-777','2017-02-21 15:32:38',1),(15,'2017-02-28','2017-01','2017-02-28 14:38:02',1);

/*Table structure for table `purchase_apr_items` */

DROP TABLE IF EXISTS `purchase_apr_items`;

CREATE TABLE `purchase_apr_items` (
  `apritemsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `aprid` bigint(20) DEFAULT NULL,
  `itemid` bigint(20) DEFAULT NULL,
  `description` text,
  `qty` int(11) DEFAULT NULL,
  `unit` varchar(300) DEFAULT NULL,
  `unitprice` double(10,2) DEFAULT NULL,
  `availability` varchar(300) DEFAULT 'NO',
  PRIMARY KEY (`apritemsid`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_apr_items` */

insert  into `purchase_apr_items`(`apritemsid`,`aprid`,`itemid`,`description`,`qty`,`unit`,`unitprice`,`availability`) values (65,4,16,'Typewriter Ribbon',1,'PC',0.00,'NO'),(66,4,9,'Binder clips 1 inch',1,'PC',0.00,'NO'),(68,4,1236,'PAD PAPER, Ruled',1,'PAD',0.00,'NO'),(69,4,1228,'MARKER, whiteboard, bullet type, red',1,'PIECE',0.00,'NO'),(70,14,2,'Tissue',1,'PC',8.00,'YES'),(71,4,172,'CLIP, backfold, 19mm, 12 pieces per box',1,'BOX',7.28,'NO'),(73,15,1,'Alcohol',10,'PC',10.00,'YES'),(75,4,5,'Jumbo clip',1,'PC',0.00,'NO');

/*Table structure for table `purchase_po` */

DROP TABLE IF EXISTS `purchase_po`;

CREATE TABLE `purchase_po` (
  `poid` bigint(20) NOT NULL AUTO_INCREMENT,
  `podate` date DEFAULT NULL,
  `pono` varchar(500) DEFAULT NULL,
  `prid` varchar(500) DEFAULT NULL,
  `prno` varchar(500) NOT NULL,
  `supplierid` varchar(500) DEFAULT NULL,
  `modeofprocurement` varchar(500) DEFAULT NULL,
  `placeofdelivery` varchar(500) DEFAULT NULL,
  `dateofdelivery` date DEFAULT NULL,
  `deliveryterm` varchar(500) DEFAULT NULL,
  `paymentterm` varchar(500) DEFAULT NULL,
  `addedby` bigint(20) DEFAULT NULL,
  `potimestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `amountinwords` text,
  PRIMARY KEY (`poid`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_po` */

insert  into `purchase_po`(`poid`,`podate`,`pono`,`prid`,`prno`,`supplierid`,`modeofprocurement`,`placeofdelivery`,`dateofdelivery`,`deliveryterm`,`paymentterm`,`addedby`,`potimestamp`,`amountinwords`) values (47,'2017-02-22','PO-2017-007','21','2017-01','5','EMERGENCY PURCHASE','CHED Region 1','2017-02-22','','',1,'2017-03-01 15:59:26','Twenty Six Thousand Five Hundred Sixty Nine Pesos Only');

/*Table structure for table `purchase_po_items` */

DROP TABLE IF EXISTS `purchase_po_items`;

CREATE TABLE `purchase_po_items` (
  `poitemsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `poid` bigint(20) DEFAULT NULL,
  `itemid` bigint(20) DEFAULT NULL,
  `description` text,
  `qty` int(11) DEFAULT NULL,
  `unit` varchar(300) DEFAULT NULL,
  `unitprice` double(10,2) DEFAULT NULL,
  `availability` varchar(300) DEFAULT 'YES',
  PRIMARY KEY (`poitemsid`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_po_items` */

insert  into `purchase_po_items`(`poitemsid`,`poid`,`itemid`,`description`,`qty`,`unit`,`unitprice`,`availability`) values (141,47,101,'Epson L565 Printer and Fax',1,'UNIT',15000.00,'YES'),(142,47,103,'RAM 4GB DDR3 for Desktop',2,'PC',1398.00,'YES'),(143,47,104,'HDD 4TB Sata for Desktop',1,'PC',7348.00,'YES'),(144,47,105,'TP-Link Router',1,'PC',1425.00,'YES');

/*Table structure for table `purchase_pr` */

DROP TABLE IF EXISTS `purchase_pr`;

CREATE TABLE `purchase_pr` (
  `prid` bigint(20) NOT NULL AUTO_INCREMENT,
  `prdate` date DEFAULT NULL,
  `aprno` varchar(500) DEFAULT NULL,
  `aprdate` date DEFAULT NULL,
  `prno` varchar(500) NOT NULL,
  `department` varchar(500) DEFAULT NULL,
  `section` varchar(500) DEFAULT NULL,
  `purpose` text,
  `addedby` bigint(20) DEFAULT NULL,
  `prtimestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `awardedsupplier` bigint(20) DEFAULT '0',
  `modeofprocurement` varchar(500) DEFAULT NULL,
  `awardreason` text,
  PRIMARY KEY (`prid`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_pr` */

insert  into `purchase_pr`(`prid`,`prdate`,`aprno`,`aprdate`,`prno`,`department`,`section`,`purpose`,`addedby`,`prtimestamp`,`awardedsupplier`,`modeofprocurement`,`awardreason`) values (21,'2017-02-22','','0000-00-00','2017-01','MIS','CHED Region 1','Office Use',1,'2017-03-01 15:10:12',5,'SHOPPING','Better quality and Service');

/*Table structure for table `purchase_pr_aoc` */

DROP TABLE IF EXISTS `purchase_pr_aoc`;

CREATE TABLE `purchase_pr_aoc` (
  `aocid` bigint(20) NOT NULL AUTO_INCREMENT,
  `prid` bigint(20) DEFAULT NULL,
  `pritemsid` bigint(20) DEFAULT NULL,
  `supplierid` bigint(20) DEFAULT NULL,
  `unitprice` double(10,2) DEFAULT '0.00',
  PRIMARY KEY (`aocid`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_pr_aoc` */

insert  into `purchase_pr_aoc`(`aocid`,`prid`,`pritemsid`,`supplierid`,`unitprice`) values (93,21,101,4,0.00),(94,21,103,4,0.00),(95,21,104,4,0.00),(96,21,105,4,0.00),(97,21,101,5,15000.00),(98,21,103,5,1398.00),(99,21,104,5,7348.00),(100,21,105,5,1425.00),(101,21,101,3,0.00),(102,21,103,3,0.00),(103,21,104,3,0.00),(104,21,105,3,0.00);

/*Table structure for table `purchase_pr_items` */

DROP TABLE IF EXISTS `purchase_pr_items`;

CREATE TABLE `purchase_pr_items` (
  `pritemsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `prid` bigint(20) DEFAULT NULL,
  `itemid` bigint(20) DEFAULT NULL,
  `description` text,
  `qty` int(11) DEFAULT NULL,
  `unit` varchar(300) DEFAULT NULL,
  `unitprice` double(10,2) DEFAULT NULL,
  `availability` varchar(300) DEFAULT 'NO',
  PRIMARY KEY (`pritemsid`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

/*Data for the table `purchase_pr_items` */

insert  into `purchase_pr_items`(`pritemsid`,`prid`,`itemid`,`description`,`qty`,`unit`,`unitprice`,`availability`) values (101,21,0,'Epson L565 Printer and Fax',1,'UNIT',0.00,'NO'),(103,21,0,'RAM 4GB DDR3 for Desktop',2,'PC',0.00,'NO'),(104,21,0,'HDD 4TB Sata for Desktop',1,'PC',0.00,'NO'),(105,21,0,'TP-Link Router',1,'PC',0.00,'NO');

/*Table structure for table `purchase_receiving` */

DROP TABLE IF EXISTS `purchase_receiving`;

CREATE TABLE `purchase_receiving` (
  `deliveryid` bigint(11) NOT NULL AUTO_INCREMENT,
  `supplierid` bigint(20) DEFAULT NULL,
  `status` varchar(500) DEFAULT 'PENDING',
  `receivedate` date DEFAULT NULL,
  `drno` varchar(300) DEFAULT NULL,
  `aprno` varchar(500) DEFAULT NULL,
  `aprid` bigint(20) DEFAULT NULL,
  `pono` varchar(500) DEFAULT NULL,
  `poid` bigint(20) DEFAULT NULL,
  `invoiceno` varchar(500) DEFAULT NULL,
  `time_stamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `warehouseid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`deliveryid`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `purchase_receiving` */

insert  into `purchase_receiving`(`deliveryid`,`supplierid`,`status`,`receivedate`,`drno`,`aprno`,`aprid`,`pono`,`poid`,`invoiceno`,`time_stamp`,`warehouseid`) values (15,2,'PENDING','2017-03-03','1122',NULL,0,NULL,0,'1122','2017-03-03 14:13:05',1),(16,2,'PENDING','2017-03-03','2',NULL,0,NULL,0,'2','2017-03-03 15:55:58',2);

/*Table structure for table `purchase_receiving_items` */

DROP TABLE IF EXISTS `purchase_receiving_items`;

CREATE TABLE `purchase_receiving_items` (
  `deliveryitemsid` int(11) NOT NULL AUTO_INCREMENT,
  `deliveryid` varchar(500) DEFAULT NULL,
  `drno` varchar(500) DEFAULT NULL,
  `itemNo` int(11) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `unitcost` double(10,2) DEFAULT '0.00',
  `status` int(11) DEFAULT '0',
  `time_stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `datereceived` date DEFAULT NULL,
  `warehouseid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`deliveryitemsid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `purchase_receiving_items` */

insert  into `purchase_receiving_items`(`deliveryitemsid`,`deliveryid`,`drno`,`itemNo`,`unit`,`qty`,`unitcost`,`status`,`time_stamp`,`datereceived`,`warehouseid`) values (28,'15','1122',1,'PC',2,30.00,0,'2017-03-03 16:06:43',NULL,1),(29,'15','1122',2,'PC',1,10.00,0,'2017-03-03 15:39:31',NULL,1),(30,'16','2',485,'PC',1,0.00,0,'2017-03-03 15:56:30',NULL,2);

/*Table structure for table `requisition_details` */

DROP TABLE IF EXISTS `requisition_details`;

CREATE TABLE `requisition_details` (
  `reqid` bigint(20) NOT NULL AUTO_INCREMENT,
  `requisition_no` varchar(100) DEFAULT NULL,
  `requisition_date` date DEFAULT NULL,
  `eid` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `logtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `requisition_status` varchar(100) NOT NULL DEFAULT 'NONE',
  PRIMARY KEY (`reqid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `requisition_details` */

insert  into `requisition_details`(`reqid`,`requisition_no`,`requisition_date`,`eid`,`userID`,`logtime`,`requisition_status`) values (2,'RIS2017-00001','0000-00-00',34,1,'2017-02-06 08:49:42','NONE');

/*Table structure for table `requisition_items` */

DROP TABLE IF EXISTS `requisition_items`;

CREATE TABLE `requisition_items` (
  `reqitemsid` bigint(20) NOT NULL AUTO_INCREMENT,
  `requisition_no` varchar(100) DEFAULT NULL,
  `itemno` bigint(20) DEFAULT NULL,
  `unit` varchar(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `update_status` int(11) DEFAULT '0',
  `time_stamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`reqitemsid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `requisition_items` */

insert  into `requisition_items`(`reqitemsid`,`requisition_no`,`itemno`,`unit`,`qty`,`update_status`,`time_stamp`) values (1,'RIS2017-00001',1,'PC',1,0,'2017-03-06 08:49:42');

/*Table structure for table `settings_article` */

DROP TABLE IF EXISTS `settings_article`;

CREATE TABLE `settings_article` (
  `articlename` varchar(300) NOT NULL,
  PRIMARY KEY (`articlename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `settings_article` */

insert  into `settings_article`(`articlename`) values ('Appliance'),('Cabinet'),('Chairs'),('Desktop'),('Laptop'),('Others'),('Printer'),('Tables');

/*Table structure for table `settings_classification` */

DROP TABLE IF EXISTS `settings_classification`;

CREATE TABLE `settings_classification` (
  `classification` varbinary(300) NOT NULL,
  PRIMARY KEY (`classification`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `settings_classification` */

insert  into `settings_classification`(`classification`) values ('Books'),('Communication Equipment'),('Firefighting Equipment'),('Furniture and Fixtures'),('IT Equipment and Softwares'),('Medical and Dental Laboratory'),('Motor Vehicle'),('Office Building'),('Office Devices'),('Office Equipment'),('Other Machineries and Equipment'),('Others'),('Semi-expendable');

/*Table structure for table `suppliers` */

DROP TABLE IF EXISTS `suppliers`;

CREATE TABLE `suppliers` (
  `supplierID` bigint(20) NOT NULL AUTO_INCREMENT,
  `supName` varchar(300) NOT NULL,
  `address` varchar(300) DEFAULT 'NONE',
  `contactNo` text,
  `TIN` varchar(20) DEFAULT 'NONE',
  `products` varchar(300) DEFAULT NULL,
  `email` varchar(500) DEFAULT 'NONE',
  PRIMARY KEY (`supplierID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

/*Data for the table `suppliers` */

insert  into `suppliers`(`supplierID`,`supName`,`address`,`contactNo`,`TIN`,`products`,`email`) values (1,'Morning Star General Merchandise','Governor Ortigas, San Fernando, 2500 La Union, Philippine','+63 72 242 5115','NONE','NONE',NULL),(2,'National Bookstore','Manna Mall, Pagdaraoan Biday Road, San Fernando, La Union','NONE','NONE','NONE',NULL),(3,'PC 4 Me','San Fernando City La Union','607-2250/700-2249/09175005430/09199912205','NONE','NONE',NULL),(4,'SKM 2','Kenny Plaza, Quezon Ave, San Fernando City, La Union','(072)607-7775/607-1397','NONE','NONE',NULL),(5,'Insystech (Aquino Square)','Aquino Square, City of San Fernando La Union','','NONE',NULL,NULL),(6,'Sapphire Air-conditioning Center','Sevilla, San Fernando, La union','072-607-3348 / 607-4585 / 603-0229 / 09478928435','NONE','Aircon Maintenance',NULL),(7,'Azalea Residences','Baguio City','02-5794894/02-579-4890/074-442-8888	','NONE','Accomodation and Lease of Venue',NULL),(8,'Fort Ilocandia Hotel','Ilocos Norte','(6377) 670-9101/(6377) 670-9101','NONE','Accomodation and Lease of Venue','booking@fortilocandia.com.ph'),(9,'Hotel Elizabeth','Baguio City','0935-925-4213/0907-088-8568','NONE','Accomodation and Lease of Venue','salesaccount2.baguio@hotelelizabeth.com.ph'),(10,'B Hotel','Brgy. Laging Handa, Quezon City','990-5000/990-6000/02-7718383','NONE','Accomodation and Lease of Venue','iboto@thebhotelqc.com'),(11,'PhilCopy Corporation','Pagdalagan, City of San Fernando, La Union','072-8885102','NONE','Photocopying Machine','NONE'),(12,'Chowking','San Fernando City, La Union','072-242-4822/09108038348','NONE','Function room for seminars, meetings, birthdays','NONE'),(13,'Philippine Trade Training Center','Manila','02-834-1350	','NONE','Function rooms for seminars/conferences','facilities@pttc.gov.ph/www.pttc.gove.ph'),(14,'Hotel Ariana','Paringao, Bauang, La Union','705-0050/607-6788','NONE','Function rooms for seminars/conferences','NONE'),(15,'President Hotel','Lingayen, Pangasinan',NULL,'NONE','Function rooms for senubars.conferences','NONE'),(16,'CHIMES Enterprises','Parian, San Fernando City, La Union','Fax: 700-0443/09228845922','NONE','Office Furniture','NONE'),(17,'Apilado North Shutters and Construction','Quezon Avenue, Sevilla, San Fernando City, LU','242-3806/888-5108/09996789646','NONE','Roll-up doors and grills, metro plus doors, BFT Auto Gate Aluminum','NONE'),(18,'Godion Hotel','Vigan City, Ilocos Sur','077-674-0288/077-674-0998	','NONE','Function rooms for seminars/conferences','info@vigangordionhotel.com'),(19,'WindoBlinds','Marand, Bauang, LU','0917-802-9676/0998-861-9976','NONE','Window Blinds','NONE'),(20,'Savers Marketing','Sevilla, San Fernando, La Union','072-205-0163	','NONE','Office, School,Hub and Business Solution','NONE'),(21,'DBM-Procurement Service-PhilGEPS','NONE',NULL,'NONE',NULL,'NONE');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(500) DEFAULT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT 'staff',
  `status` varchar(1) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`uid`,`username`,`password`,`name`,`usertype`,`status`) values (1,'admin','21232f297a57a5a743894a0e4a801fc3','Admin','admin','1'),(5,'lynnette','5f4dcc3b5aa765d61d8327deb882cf99','Lynnette','admin','1'),(6,'elvin','e77b6b04e50421f5d6e122e2b1df7d39','Elvin Casem','staff','');

/*Table structure for table `warehouse` */

DROP TABLE IF EXISTS `warehouse`;

CREATE TABLE `warehouse` (
  `warehouseid` bigint(20) NOT NULL AUTO_INCREMENT,
  `warehouse_name` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`warehouseid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `warehouse` */

insert  into `warehouse`(`warehouseid`,`warehouse_name`) values (1,'CHED Region 1'),(2,'CHED Kto12');

/* Procedure structure for procedure `warehouse_balance` */

/*!50003 DROP PROCEDURE IF EXISTS  `warehouse_balance` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `warehouse_balance`(con int)
BEGIN
 SELECT warehouse_name, SUM(qty) as totalqty FROM purchase_receiving_items LEFT JOIN warehouse ON purchase_receiving_items.warehouseid = warehouse.warehouseid where itemNo = con;
    END */$$
DELIMITER ;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
