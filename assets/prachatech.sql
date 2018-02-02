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

insert  into `employee`(`emp_id`,`emp_username`,`emp_office_id`,`emp_role`,`emp_email`,`emp_password`,`emp_org_password`,`emp_name`,`emp_mobile`,`emp_altermobile`,`emp_doj`,`emp_dob`,`emp_profilepic`,`responsibilities`,`emp_resaddress`,`emp_peraddress`,`aadharcardno`,`aadharcard`,`pancardno`,`pancard`,`otherkye`,`status`,`create`) values (1,'pushkar@prachatech.com','PT0001','Director','pushkar@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Pushkar.V ','9494422779',NULL,'01-03-2017','05-07-1996',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:51'),(2,'vasudevareddy@prachatech.com','PT0002','TL / PHP. Developer','vasudevareddy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','R. Vasudeva Reddy','8500050944','8019345212','01-03-2017','14-07-1992','logo.png','workassign and maintains','hyderabad','kothapalli village ,khajipet mandal, kadapa dist,ap pincode:516172','123456789','logo.png','9874656321','ups.xlsx','cabinets.xlsx',1,'2018-02-02 16:55:14'),(3,'bayapureddy@prachatech.com\r\n','PT0003','UI Designer','bayapureddy@prachatech.com\r\n','e10adc3949ba59abbe56e057f20f883e','123456','Bayapu Reddy CG','8500226782',NULL,'01-03-2017','05-06-1993',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:56'),(4,'faisal@prachatech.com','PT0004','Quality Assurance analyst','faisal@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Faisal Rizwan','9916296306',NULL,'01-03-2017','01-06-1987',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:57'),(5,'shiv@prachatech.com\r\n','PT0005','iOS Developer','shiv@prachatech.com\r\n','e10adc3949ba59abbe56e057f20f883e','123456','Shiv Nagender K','9010121117',NULL,'01-03-2017','25-09-1988',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:01:59'),(6,'satish@prachatech.com','PT0006','Follow Up','satish@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','Satish Jaiswal','9398888512',NULL,'01-03-2017','03-10-1989',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:02:01'),(7,'chakravarthy@prachatech.com','PT0007','Digital Marketing Executive','chakravarthy@prachatech.com','e10adc3949ba59abbe56e057f20f883e','123456','K. Kalyan Chakravarthy Jah','9553173177',NULL,'01-03-2017','05-01-1982',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,'2018-01-29 14:02:02');

/*Table structure for table `login_report` */

DROP TABLE IF EXISTS `login_report`;

CREATE TABLE `login_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_id` int(11) DEFAULT NULL,
  `emp_office_id` varchar(250) DEFAULT NULL,
  `login_time` datetime DEFAULT NULL,
  `logout_time` datetime DEFAULT NULL,
  `create_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `login_report` */

insert  into `login_report`(`id`,`emp_id`,`emp_office_id`,`login_time`,`logout_time`,`create_at`) values (2,2,'PT0002','2018-01-28 09:48:09','2018-01-28 18:48:09','2018-01-28'),(3,2,'PT0002','2018-01-29 16:30:33','2018-01-29 18:48:09','2018-01-29'),(4,2,'PT0002','2018-02-02 10:51:22',NULL,'2018-02-02');

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
  `create_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `work_sheet` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
