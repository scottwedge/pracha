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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `contactus` */

insert  into `contactus`(`id`,`name`,`email`,`subject`,`message`,`create-at`) values (1,'vasu','vasu@gmail.com','test','xbjbbhcb','2018-01-12 10:10:53'),(2,'vasu','vasu@gmail.com','test','xbjbbhcb','2018-01-12 10:19:57'),(3,'ghfgh','ghfgh@gmail.com','ghdfg','ghfgdh','2018-01-12 10:24:37'),(4,'kuyu','uiyui@gmail.com','uyui','uiyuiyui','2018-01-12 10:53:31'),(5,'vnbn','vasu@gmail.com','test','gfhgfhfg','2018-01-12 10:54:17'),(6,'nbn','ghfgh@gmail.com','test','bnbcvnvb','2018-01-12 10:58:55'),(7,'vasu','vasu@gmail.com','test','hdfg','2018-01-12 11:01:00'),(8,'vasu','vasu@gmail.com','test','ytrty','2018-01-12 11:02:20'),(9,'vasu','vasu@gmail.com','ghdfg','gfhdfgh','2018-01-12 11:03:30');

/*Table structure for table `employee` */

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` int(11) DEFAULT NULL,
  `salary` varchar(250) DEFAULT NULL,
  `emp_username` varchar(250) DEFAULT NULL,
  `emp_office_id` varchar(250) DEFAULT NULL,
  `emp_role` varchar(250) DEFAULT NULL,
  `emp_email` varchar(250) DEFAULT NULL,
  `emp_password` varchar(250) DEFAULT NULL,
  `emp_org_password` varchar(250) DEFAULT NULL,
  `emp_name` varchar(250) DEFAULT NULL,
  `emp_mobile` varchar(250) DEFAULT NULL,
  `emp_altermobile` varchar(250) DEFAULT NULL,
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

insert  into `employee`(`emp_id`,`role`,`salary`,`emp_username`,`emp_office_id`,`emp_role`,`emp_email`,`emp_password`,`emp_org_password`,`emp_name`,`emp_mobile`,`emp_altermobile`,`emp_doj`,`emp_dob`,`emp_profilepic`,`responsibilities`,`emp_resaddress`,`emp_peraddress`,`aadharcardno`,`aadharcard`,`pancardno`,`pancard`,`otherkye`,`status`,`create`) values (1,1,'','pushkar@prachatech.com','PT0001','Director','pushkar@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Pushkar.V','9494422779','','01-03-2017','05-07-1996',NULL,'yutyu','','','',NULL,'',NULL,NULL,1,'2018-02-03 17:36:54'),(2,3,'23000','vasudevareddy@prachatech.com','PT0002','TL / PHP. Developer','vasudevareddy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','R. Vasudeva Reddy','8500050944','','01-03-2017','14-07-1992','photo.jpg','','hyderabad','kadapa','123456',NULL,'',NULL,NULL,1,'2018-02-03 17:07:06'),(3,3,'15000','bayapureddy@prachatech.com\r\n','PT0003','UI Designer','bayapureddy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Bayapu Reddy CG','8500226782','','01-03-2017','',NULL,'','','','',NULL,'',NULL,NULL,1,'2018-02-03 16:46:21'),(4,3,NULL,'faisal@prachatech.com','PT0004','Quality Assurance analyst','faisal@prachatech.com','8e70383c69f7a3b7ea3f71b02f3e9731','mynewpassword','Faisal Rizwan','9916296306',NULL,'01-03-2017','01-06-1987',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:57'),(5,3,NULL,'shiv@prachatech.com\r\n','PT0005','iOS Developer','shiv@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Shiv Nagender K','9010121117',NULL,'01-03-2017','25-09-1988',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:59'),(6,3,NULL,'satish@prachatech.com','PT0006','Sales Exective','satish@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Satish Jaiswal','9398888512',NULL,'01-03-2017','03-10-1989',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:02:01'),(7,3,NULL,'chakravarthy@prachatech.com','PT0007','Digital Marketing Executive','chakravarthy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','K. Kalyan Chakravarthy Jah','9553173177',NULL,'01-03-2017','05-01-1982',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:02:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `login_report` */

insert  into `login_report`(`id`,`emp_id`,`emp_office_id`,`login_time`,`logout_time`,`create_at`) values (4,2,'PT0002','2018-02-02 10:51:22','2018-02-02 17:45:16','2018-02-02'),(5,3,'PT0003','2018-02-02 10:10:12','2018-02-02 17:47:26','2018-02-02'),(6,2,'PT0002','2018-02-03 10:32:34','0000-00-00 00:00:00','2018-02-03'),(7,1,'PT0001','2018-02-03 14:59:58','2018-02-03 19:23:46','2018-02-03'),(8,3,'PT0003','2018-02-03 14:59:58','0000-00-00 00:00:00','2018-02-03'),(9,2,'PT0002','2018-02-05 10:27:35','2018-02-05 15:26:05','2018-02-05'),(10,1,'PT0001','2018-02-05 10:28:39','2018-02-05 15:21:09','2018-02-05');

/*Table structure for table `price_details` */

DROP TABLE IF EXISTS `price_details`;

CREATE TABLE `price_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `services_id` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `price_details` */

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
