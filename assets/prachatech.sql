/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.21-MariaDB : Database - prachatech
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`prachatech` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `prachatech`;

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `like` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

insert  into `comments`(`id`,`post_id`,`name`,`email`,`comment`,`like`,`create_at`) values (1,1,'else','vaasuforu2@gmail.com','fhfghfg','17','2018-03-20 12:28:51'),(2,1,'test','vasudevareddy549@gmail.com','vasudevareddy this  is  a test file','5','2018-03-20 12:29:46'),(3,1,'vasudevareddy','vasudevareddy549@gmail.com','gtesting','7','2018-03-20 12:40:11'),(4,1,'kalyan','vaasuforu2@gmail.com','testing','3','2018-03-20 13:18:10'),(5,1,'testing ','vasu@gmail.co','like','6','2018-03-20 14:56:33'),(6,2,'vasudevareddy','admin@gmail.com','hgj','3','2018-03-20 14:57:12');

/*Table structure for table `contactus` */

DROP TABLE IF EXISTS `contactus`;

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `subject` varchar(250) DEFAULT NULL,
  `message` text,
  `create-at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`name`,`email`,`subject`,`message`,`create-at`) values (1,'vasu','vasu@gmail.com','test','xbjbbhcb','2018-01-12 10:10:53'),(2,'vasu','vasu@gmail.com','test','xbjbbhcb','2018-01-12 10:19:57'),(3,'ghfgh','ghfgh@gmail.com','ghdfg','ghfgdh','2018-01-12 10:24:37'),(4,'kuyu','uiyui@gmail.com','uyui','uiyuiyui','2018-01-12 10:53:31'),(5,'vnbn','vasu@gmail.com','test','gfhgfhfg','2018-01-12 10:54:17'),(6,'nbn','ghfgh@gmail.com','test','bnbcvnvb','2018-01-12 10:58:55'),(7,'vasu','vasu@gmail.com','test','hdfg','2018-01-12 11:01:00'),(8,'vasu','vasu@gmail.com','test','ytrty','2018-01-12 11:02:20'),(9,'vasu','vasu@gmail.com','ghdfg','gfhdfgh','2018-01-12 11:03:30'),(10,'vasudevareddy549@gmail.com','vasudevarddy549@gmail.com','todaytesting','This  is  a  sample  file uploading purpose','2018-02-06 12:09:13'),(11,'gyui','uiyui@gmail.com','uiyui','uiytuiu','2018-02-26 17:50:05');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `salary` varchar(250) DEFAULT NULL,
  `salary_increment` varchar(250) DEFAULT NULL,
  `emp_username` varchar(250) DEFAULT NULL,
  `emp_office_id` varchar(250) DEFAULT NULL,
  `department` varbinary(250) DEFAULT 'IT',
  `emp_role` varchar(250) DEFAULT NULL,
  `emp_email` varchar(250) DEFAULT NULL,
  `emp_password` varchar(250) DEFAULT NULL,
  `emp_org_password` varchar(250) DEFAULT NULL,
  `emp_name` varchar(250) DEFAULT NULL,
  `emp_mobile` varchar(250) DEFAULT NULL,
  `emp_altermobile` varchar(250) DEFAULT NULL,
  `basicsalary` varchar(250) DEFAULT NULL,
  `hra` varchar(250) DEFAULT NULL,
  `specialallowance` varchar(250) DEFAULT NULL,
  `conveyance` varchar(250) DEFAULT NULL,
  `medicalreimbursement` varchar(250) DEFAULT NULL,
  `pfnumber` varchar(250) DEFAULT NULL,
  `pfamount` varchar(250) DEFAULT NULL,
  `pt` varchar(250) DEFAULT '0',
  `esi` varchar(250) DEFAULT '0',
  `others` varchar(250) DEFAULT '0',
  `advance` varchar(250) DEFAULT '0',
  `bankname` varchar(250) DEFAULT NULL,
  `bankaccountnumber` varchar(250) DEFAULT NULL,
  `emp_doj` varchar(250) DEFAULT NULL,
  `emp_dob` varchar(250) DEFAULT NULL,
  `emp_profilepic` varchar(250) DEFAULT NULL,
  `responsibilities` varchar(250) DEFAULT NULL,
  `emp_resaddress` varchar(250) DEFAULT NULL,
  `emp_peraddress` varchar(250) DEFAULT NULL,
  `aadharcardno` varchar(250) DEFAULT NULL,
  `aadharcard` varchar(250) DEFAULT NULL,
  `pancardno` varchar(250) DEFAULT NULL,
  `pancard` varchar(250) DEFAULT NULL,
  `otherkye` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create` datetime DEFAULT NULL,
  PRIMARY KEY (`emp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `employee` */

insert  into `employee`(`emp_id`,`role`,`salary`,`salary_increment`,`emp_username`,`emp_office_id`,`department`,`emp_role`,`emp_email`,`emp_password`,`emp_org_password`,`emp_name`,`emp_mobile`,`emp_altermobile`,`basicsalary`,`hra`,`specialallowance`,`conveyance`,`medicalreimbursement`,`pfnumber`,`pfamount`,`pt`,`esi`,`others`,`advance`,`bankname`,`bankaccountnumber`,`emp_doj`,`emp_dob`,`emp_profilepic`,`responsibilities`,`emp_resaddress`,`emp_peraddress`,`aadharcardno`,`aadharcard`,`pancardno`,`pancard`,`otherkye`,`status`,`create`) values (1,1,'',NULL,'pushkar@prachatech.com','PT0001','IT','Director','pushkar@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Pushkar.V','9494422779','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,'01-03-2017','05-07-1996',NULL,'yutyu','','','',NULL,'',NULL,NULL,1,'2018-02-03 17:36:54'),(2,3,'23000','testing','vasudevareddy@prachatech.com','PT0002','IT','TL / PHP. Developer','vasudevareddy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','R. Vasudeva Reddy','8500050944','819345212','9800','hra','1200','200','900','321654123','pf amount','pt','esi','other','advance','hdfc','501007159061','01-03-2017','14-07-1992','photo.jpg','work assign ','hyderabad','kadapa','12345678',NULL,'',NULL,NULL,1,'2018-02-09 11:56:45'),(3,3,'15000',NULL,'bayapureddy@prachatech.com\r\n','PT0003','IT','UI Designer','bayapureddy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Bayapu Reddy CG','8500226782','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,'01-03-2017','',NULL,'','','','',NULL,'',NULL,NULL,1,'2018-02-03 16:46:21'),(4,3,NULL,NULL,'faisal@prachatech.com','PT0004','IT','Quality Assurance analyst','faisal@prachatech.com','8e70383c69f7a3b7ea3f71b02f3e9731','mynewpassword','Faisal Rizwan','9916296306',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,'01-03-2017','01-06-1987',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:57'),(5,3,NULL,NULL,'shiv@prachatech.com\r\n','PT0005','IT','iOS Developer','shiv@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Shiv Nagender K','9010121117',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,'01-03-2017','25-09-1988',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:59'),(6,3,NULL,NULL,'satish@prachatech.com','PT0006','IT','Sales Exective','satish@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Satish Jaiswal','9398888512',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,'01-03-2017','03-10-1989',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:02:01'),(7,3,NULL,NULL,'chakravarthy@prachatech.com','PT0007','IT','Digital Marketing Executive','chakravarthy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','K. Kalyan Chakravarthy Jah','9553173177',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'0','0',NULL,NULL,'01-03-2017','05-01-1982',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:02:02');

/*Table structure for table `holidays_list` */

DROP TABLE IF EXISTS `holidays_list`;

CREATE TABLE `holidays_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `festival` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `day` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `holidays_list` */

insert  into `holidays_list`(`id`,`emp_id`,`festival`,`date`,`day`,`status`,`create_at`) values (1,1,'NEW YEAR’S DAY','01-01-2018','MONDAY',1,'2018-02-05 15:59:05'),(2,1,'SANKRANTI/PONGAL','15-01-2018','MONDAY',1,'2018-02-05 15:59:27'),(3,1,'REPUBLIC DAY','26-01-2018','FRIDAY',1,'2018-02-05 15:59:54'),(4,1,'MAHA SHIVARATRI','13-02-2018','TUESDAY',1,'2018-02-05 15:58:33'),(8,1,'HOLI','02-03-2018','FRIDAY',1,'2018-02-05 16:00:58'),(9,1,'GOOD FRIDAY','30-03-2018','FRIDAY',1,'2018-02-05 16:01:40'),(10,1,'IDUL FITR','16-06-2018','SATURDAY',1,'2018-02-05 16:02:04'),(11,1,'INDEPENDENCE DAY','15-08-2018','WEDNESDAY',1,'2018-02-05 16:02:25'),(12,1,'BAKRID (ID-UL-AZHA)','22-08-2018','WEDNESDAY',1,'2018-02-05 16:02:45'),(13,1,'SRI KRISHNA ASTAMI','03-09-2018','MONDAY',1,'2018-02-05 16:03:07'),(14,1,'VINAYAKA CHAVITHI','13-09-2018','THURSDAY',1,'2018-02-05 16:03:27'),(15,1,'SHAHADAT IMAM HUSSAIN (R.A.) - MUHARRAM','21-09-2018','FRIDAY',1,'2018-02-05 16:03:52'),(16,1,'MAHTMA GANDHI JAYANTHI','02-10-2018','TUESDAY',1,'2018-02-05 16:04:12'),(17,1,'DURGASTHAMI/ MAHARNAVAMI','17-10-2018','WEDNESDAY',1,'2018-02-05 16:04:43'),(18,1,'VIJAYA DASAMI/ DUSSEHRA','18-10-2018','THURSDAY',1,'2018-02-05 16:05:31'),(19,1,'DEEPAVALI','07-11-2018','WEDNESDAY',1,'2018-02-05 16:05:51'),(20,1,'EID MILADUN NABI (S.A.W.S) (1140 HIJRI)','21-11-2018','WEDNESDAY',1,'2018-02-05 16:06:14'),(21,1,'CHRISTMAS','25-12-2018','TUESDAY',1,'2018-02-05 16:06:35');

/*Table structure for table `leaves` */

DROP TABLE IF EXISTS `leaves`;

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `form_date` varchar(250) DEFAULT NULL,
  `to_date` varchar(250) DEFAULT NULL,
  `form_date1` date DEFAULT NULL,
  `to_date1` date DEFAULT NULL,
  `region` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`leave_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `leaves` */

insert  into `leaves`(`leave_id`,`emp_id`,`form_date`,`to_date`,`form_date1`,`to_date1`,`region`,`status`,`create_at`) values (10,2,'7 February, 2018','9 February, 2018','0000-00-00','0000-00-00','yuytuyt',2,'2018-02-05 14:00:11'),(11,2,'8 February, 2018','9 February, 2018','0000-00-00','0000-00-00','yuytu',3,'2018-02-05 14:01:05');

/*Table structure for table `login_report` */

DROP TABLE IF EXISTS `login_report`;

CREATE TABLE `login_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `emp_office_id` varchar(250) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT '0000-00-00 00:00:00',
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

/*Data for the table `login_report` */

insert  into `login_report`(`id`,`emp_id`,`emp_office_id`,`login_time`,`logout_time`,`create_at`) values (19,2,'PT0002','2018-02-01 10:00:28','2018-02-01 19:00:35','2018-02-01'),(20,3,'PT0003','2018-02-01 10:00:28','2018-02-01 19:00:35','2018-02-01'),(21,4,'PT0004','2018-02-01 10:00:28','2018-02-01 19:00:35','2018-02-01'),(22,5,'PT0005','2018-02-01 10:00:28','2018-02-01 19:00:35','2018-02-01'),(23,6,'PT0006','2018-02-01 10:00:28','2018-02-01 19:00:35','2018-02-01'),(24,7,'PT0007','2018-02-01 10:00:28','2018-02-01 19:00:35','2018-02-01'),(25,2,'PT0002','2018-02-02 10:00:28','2018-02-02 19:00:35','2018-02-02'),(26,3,'PT0003','2018-02-02 10:00:28','2018-02-02 19:00:35','2018-02-02'),(27,4,'PT0004','2018-02-02 10:00:28','2018-02-02 19:00:35','2018-02-02'),(28,5,'PT0005','2018-02-02 10:00:28','2018-02-02 19:00:35','2018-02-02'),(29,6,'PT0006','2018-02-02 10:00:28','2018-02-02 19:00:35','2018-02-02'),(30,7,'PT0007','2018-02-02 10:00:28','2018-02-02 19:00:35','2018-02-02'),(31,2,'PT0002','2018-02-03 10:20:20','2018-02-03 19:30:30','2018-02-03'),(32,3,'PT0003','2018-02-03 15:00:28','2018-02-03 19:30:28','2018-02-03'),(33,4,'PT0004','2018-02-03 10:21:00','2018-02-03 15:40:00','2018-02-03'),(34,5,'PT0005','2018-02-03 09:50:00','2018-02-03 17:00:00','2018-02-03'),(35,6,'PT0006','2018-02-03 10:00:00','2018-02-03 17:00:00','2018-02-03'),(36,2,'PT0002','2018-02-05 10:00:00','2018-02-05 19:00:00','2018-02-05'),(37,3,'PT0003','2018-02-05 10:00:00','2018-02-05 19:00:00','2018-02-05'),(38,4,'PT0004','2018-02-05 14:30:00','2018-02-05 19:00:00','2018-02-05'),(39,5,'PT0005','2018-02-05 10:00:00','2018-02-05 19:00:00','2018-02-05'),(40,6,'PT0006','2018-02-05 10:00:00','2018-02-05 19:00:00','2018-02-05'),(41,7,'PT0007','2018-02-05 10:00:00','2018-02-05 19:00:00','2018-02-05'),(42,1,'PT0001','2018-02-06 10:43:07','2018-02-06 18:21:18','2018-02-06'),(44,2,'PT0002','2018-02-06 10:00:00','2018-02-06 19:33:08','2018-02-06'),(45,3,'PT0003','2018-02-06 10:00:00','2018-02-06 19:36:14','2018-02-06'),(46,4,'PT0004','2018-02-06 10:00:00','2018-02-06 19:00:15','2018-02-06'),(47,5,'PT0005','2018-02-06 10:00:00','2018-02-06 19:00:15','2018-02-06'),(48,6,'PT0006','2018-02-06 10:00:00','2018-02-06 19:00:15','2018-02-06'),(49,7,'PT0007','2018-02-06 10:00:00','2018-02-06 19:00:15','2018-02-06'),(50,5,'PT0005','2018-02-07 09:57:38','2018-02-07 19:00:15','2018-02-07'),(51,3,'PT0003','2018-02-07 10:11:40','2018-02-07 19:00:15','2018-02-07'),(52,2,'PT0002','2018-02-07 10:12:12','2018-02-07 19:00:15','2018-02-07'),(53,4,'PT0004','2018-02-07 10:46:42','2018-02-07 19:00:15','2018-02-07'),(54,5,'PT0005','2018-02-08 09:57:06','2018-02-08 18:57:14','2018-02-08'),(55,2,'PT0002','2018-02-08 10:02:16','2018-02-08 19:16:23','2018-02-08'),(56,3,'PT0003','2018-02-08 10:06:25','2018-02-08 19:16:23','2018-02-08'),(57,4,'PT0004','2018-02-08 10:08:50','2018-02-08 18:56:18','2018-02-08'),(58,6,'PT0006','2018-02-08 10:45:36','2018-02-08 18:58:19','2018-02-08'),(59,1,'PT0001','2018-02-08 16:06:08','0000-00-00 00:00:00','2018-02-08'),(60,5,'PT0005','2018-02-09 09:53:10','2018-02-09 18:48:52','2018-02-09'),(61,3,'PT0003','2018-02-09 10:07:59','2018-02-09 19:01:39','2018-02-09'),(62,2,'PT0002','2018-02-09 10:09:07','2018-02-09 19:01:33','2018-02-09'),(63,4,'PT0004','2018-02-09 10:09:52','2018-02-09 18:50:29','2018-02-09'),(64,6,'PT0006','2018-02-09 10:34:17','2018-02-09 18:51:03','2018-02-09'),(65,1,'PT0001','2018-02-09 13:16:35','2018-02-09 14:23:49','2018-02-09'),(66,5,'PT0005','2018-02-12 10:08:36','2018-02-12 19:00:03','2018-02-12'),(67,3,'PT0003','2018-02-12 10:13:35','2018-02-12 19:18:06','2018-02-12'),(68,2,'PT0002','2018-02-12 10:13:53','2018-02-12 19:14:41','2018-02-12'),(69,6,'PT0006','2018-02-12 15:40:34','2018-02-12 19:00:15','2018-02-12'),(70,2,'PT0002','2018-02-13 09:48:29','2018-02-13 18:49:49','2018-02-13'),(71,5,'PT0005','2018-02-13 09:48:30','2018-02-13 16:49:14','2018-02-13'),(72,3,'PT0003','2018-02-13 09:50:06','2018-02-13 18:53:06','2018-02-13'),(73,4,'PT0004','2018-02-13 10:13:11','2018-02-13 19:00:00','2018-02-13'),(74,6,'PT0006','2018-02-13 10:51:29','2018-02-13 18:50:58','2018-02-13'),(75,5,'PT0005','2018-02-14 09:28:25','2018-02-14 18:29:12','2018-02-14'),(76,2,'PT0002','2018-02-14 09:54:11','2018-02-14 19:36:57','2018-02-14'),(77,3,'PT0003','2018-02-14 09:56:07','2018-02-14 19:35:16','2018-02-14'),(78,4,'PT0004','2018-02-14 10:29:35','2018-02-14 19:19:43','2018-02-14'),(79,3,'PT0003','2018-02-15 09:52:19','0000-00-00 00:00:00','2018-02-15'),(80,2,'PT0002','2018-02-15 09:52:51','2018-02-15 19:19:16','2018-02-15'),(81,5,'PT0005','2018-02-15 09:40:31','2018-02-15 19:00:43','2018-02-15'),(82,6,'PT0006','2018-02-15 10:15:01','2018-02-15 18:59:35','2018-02-15'),(83,4,'PT0004','2018-02-15 14:54:29','2018-02-15 18:59:14','2018-02-15'),(87,3,'PT0003','2018-02-17 09:59:32','2018-02-17 19:18:02','2018-02-17'),(88,2,'PT0002','2018-02-17 10:00:38','2018-02-17 19:10:23','2018-02-17'),(89,4,'PT0004','2018-02-17 10:02:34','2018-02-17 18:21:10','2018-02-17'),(90,5,'PT0005','2018-02-17 10:04:55','2018-02-17 18:21:10','2018-02-17'),(91,6,'PT0006','2018-02-17 10:36:26','2018-02-17 18:21:24','2018-02-17'),(92,3,'PT0003','2018-02-19 10:13:06','2018-02-19 19:15:08','2018-02-19'),(93,5,'PT0005','2018-02-19 11:44:21','2018-02-19 18:58:29','2018-02-19'),(94,2,'PT0002','2018-02-19 12:50:41','2018-02-19 19:12:58','2018-02-19'),(96,4,'PT0004','2018-02-19 14:27:50','2018-02-19 19:05:09','2018-02-19'),(97,3,'PT0003','2018-02-20 10:01:21','2018-02-20 19:41:04','2018-02-20'),(98,5,'PT0005','2018-02-20 10:32:20','2018-02-20 19:00:49','2018-02-20'),(99,2,'PT0002','2018-02-20 12:09:06','2018-02-20 19:47:27','2018-02-20'),(100,6,'PT0006','2018-02-20 13:14:02','0000-00-00 00:00:00','2018-02-20'),(101,4,'PT0004','2018-02-20 13:59:35','2018-02-20 18:59:39','2018-02-20'),(102,5,'PT0005','2018-02-21 09:58:22','2018-02-21 16:00:00','2018-02-21'),(103,3,'PT0003','2018-02-21 10:09:46','2018-02-21 19:24:24','2018-02-21'),(104,2,'PT0002','2018-02-21 10:10:56','2018-02-21 19:22:20','2018-02-21'),(105,4,'PT0004','2018-02-21 10:13:05','2018-02-21 19:11:27','2018-02-21'),(106,6,'PT0006','2018-02-21 10:39:13','2018-02-21 19:12:55','2018-02-21'),(107,3,'PT0003','2018-02-22 09:52:04','2018-02-22 19:44:32','2018-02-22'),(108,2,'PT0002','2018-02-22 09:52:11','2018-02-22 19:25:21','2018-02-22'),(109,5,'PT0005','2018-02-22 10:10:45','2018-02-22 19:06:51','2018-02-22'),(110,4,'PT0004','2018-02-22 13:04:23','2018-02-22 19:04:33','2018-02-22'),(111,6,'PT0006','2018-02-22 13:36:12','2018-02-22 19:08:05','2018-02-22'),(112,2,'PT0002','2018-02-23 10:04:35','2018-02-23 19:02:51','2018-02-23'),(113,3,'PT0003','2018-02-23 10:05:14','2018-02-23 16:42:46','2018-02-23'),(114,5,'PT0005','2018-02-23 10:10:54','2018-02-23 18:54:00','2018-02-23'),(115,6,'PT0006','2018-02-23 13:38:20','2018-02-23 18:57:21','2018-02-23'),(116,4,'PT0004','2018-02-23 14:11:09','2018-02-23 18:56:36','2018-02-23'),(117,5,'PT0005','2018-02-26 09:53:54','2018-02-26 18:54:21','2018-02-26'),(118,2,'PT0002','2018-02-26 09:56:07','2018-02-26 19:14:53','2018-02-26'),(119,3,'PT0003','2018-02-26 09:57:52','2018-02-26 19:02:07','2018-02-26'),(120,4,'PT0004','2018-02-26 10:29:07','2018-02-26 19:15:17','2018-02-26'),(121,6,'PT0006','2018-02-26 10:50:46','2018-02-26 18:54:27','2018-02-26'),(122,2,'PT0002','2018-02-27 10:10:28','2018-02-27 19:24:33','2018-02-27'),(123,3,'PT0003','2018-02-27 10:10:36','2018-02-27 19:25:50','2018-02-27'),(124,5,'PT0005','2018-02-27 10:26:23','0000-00-00 00:00:00','2018-02-27'),(125,4,'PT0004','2018-02-27 14:34:09','2018-02-27 18:56:02','2018-02-27'),(126,6,'PT0006','2018-02-27 15:07:35','2018-02-27 18:56:29','2018-02-27'),(127,2,'PT0002','2018-02-28 10:09:17','0000-00-00 00:00:00','2018-02-28'),(128,3,'PT0003','2018-02-28 10:09:26','2018-02-28 19:09:41','2018-02-28'),(129,5,'PT0005','2018-02-28 10:23:47','0000-00-00 00:00:00','2018-02-28'),(130,6,'PT0006','2018-02-28 11:09:40','2018-02-28 18:19:07','2018-02-28'),(131,2,'PT0002','2018-03-01 09:50:09','0000-00-00 00:00:00','2018-03-01'),(132,3,'PT0003','2018-03-01 09:52:23','0000-00-00 00:00:00','2018-03-01'),(133,5,'PT0005','2018-03-01 09:53:10','0000-00-00 00:00:00','2018-03-01');

/*Table structure for table `payslips` */

DROP TABLE IF EXISTS `payslips`;

CREATE TABLE `payslips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `month` varchar(250) DEFAULT NULL,
  `inovie_name` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `payslips` */

insert  into `payslips`(`id`,`emp_id`,`month`,`inovie_name`,`create_at`,`date`) values (5,2,'February','February_Month_payslip_PT0002.pdf','2018-02-09 13:19:23','2018-02-09');

/*Table structure for table `price_details` */

DROP TABLE IF EXISTS `price_details`;

CREATE TABLE `price_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `services_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `price_details` */

/*Table structure for table `replay_comments` */

DROP TABLE IF EXISTS `replay_comments`;

CREATE TABLE `replay_comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment_id` int(11) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `create_at` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `replay_comments` */

insert  into `replay_comments`(`id`,`comment_id`,`name`,`email`,`comment`,`create_at`) values (6,1,'vasu','vasudevareddy549@gmail.com','testing','2018-03-20 13:06:03'),(7,4,'bnb','admin@gmail.com','bhcvbbxcbv','2018-03-20 13:18:31'),(8,4,'gjghj','hjfg@gmail.com','tsting','2018-03-20 14:51:42'),(9,6,'testig','likethat','likethis','2018-03-20 15:24:09');

/*Table structure for table `suggestion_list` */

DROP TABLE IF EXISTS `suggestion_list`;

CREATE TABLE `suggestion_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `replayed_id` int(11) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `type` enum('Replay','Replayed') DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `create` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `suggestion_list` */

insert  into `suggestion_list`(`id`,`emp_id`,`replayed_id`,`comment`,`type`,`status`,`create`) values (16,2,2,'Hi, Hello Sir','Replay',1,'2018-02-05 18:59:48'),(17,2,1,'hi  sir','Replayed',1,'2018-02-05 19:00:02');

/*Table structure for table `task` */

DROP TABLE IF EXISTS `task`;

CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `assign_by` int(11) DEFAULT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `from_date` varchar(250) DEFAULT NULL,
  `to_date` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `task` */

insert  into `task`(`id`,`emp_id`,`assign_by`,`comment`,`from_date`,`to_date`,`status`,`create_at`) values (5,2,1,'testing','14 February, 2018','10 February, 2018',3,'2018-02-09 13:21:12');

/*Table structure for table `trends_user` */

DROP TABLE IF EXISTS `trends_user`;

CREATE TABLE `trends_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `trends_user` */

insert  into `trends_user`(`id`,`name`,`email`,`mobile`,`create_at`) values (1,'vasudevareddy','vasu@gmail.com','85000050944','2018-03-20 12:11:28'),(2,'vasudevareddy','admin@gmail.com','85000050944','2018-03-20 12:12:38');

/*Table structure for table `work_sheet` */

DROP TABLE IF EXISTS `work_sheet`;

CREATE TABLE `work_sheet` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL,
  `comment` text,
  `reportfile` varchar(250) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `work_sheet` */

insert  into `work_sheet`(`task_id`,`emp_id`,`login_id`,`comment`,`reportfile`,`create_date`,`status`,`date`) values (2,2,4,'test pupose','Resume_Supriya_P.docx','2018-02-02 17:42:23',1,'2018-03-01'),(3,2,4,'task data 2','','2018-02-02 17:43:16',1,'2018-02-02'),(4,2,4,'task 5','','2018-02-02 17:43:55',1,'2018-02-02'),(5,3,5,'jfhgjkhfg','','2018-02-02 17:46:59',1,'2018-02-02'),(6,3,5,'jkjkfgkfjkfjk','cabinets.xlsx','2018-02-02 17:47:18',1,'2018-02-03'),(7,2,6,' satarday  work  sheet ','','2018-02-03 13:50:04',1,'2018-02-03'),(8,4,8,'esting',NULL,'2018-02-03 13:50:04',1,'2018-02-03'),(9,4,7,'ello	',NULL,'2018-02-03 13:50:04',1,'2018-02-02');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
