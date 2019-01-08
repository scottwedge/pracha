CREATE TABLE `prachatech`.`users`(  
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250),
  `email` VARCHAR(250),
  `status` INT(11) DEFAULT 1,
  `created_at` DATETIME,
  PRIMARY KEY (`id`)
);
ALTER TABLE `prachatech`.`users`   
  ADD COLUMN `message` TEXT NULL AFTER `email`;
  
  
  
  CREATE TABLE `prachatech`.`user_chat`(  
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `user_id` INT(11),
  `message` TEXT,
  `created_at` DATETIME,
  `read_msg` INT(11) DEFAULT 0,
  `status` INT(11) DEFAULT 1,
  PRIMARY KEY (`id`)
);

ALTER TABLE `prachatech`.`users`   
  DROP COLUMN `message`;
//8/1/2019



CREATE TABLE `assign_project_tab` (
  `assign_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `work_title` varchar(200) DEFAULT NULL,
  `work_desc` varchar(200) DEFAULT NULL,
  `work_type` int(11) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  `commnets` text,
  `status` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  KEY `assign_id` (`assign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `ppl_in_project_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `project_files_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `assigning_id` int(11) DEFAULT NULL,
  `file_path` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'active=1,inactive=2,delete=0',
  `updated_time` datetime DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1

CREATE TABLE `project_tab` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `project_name` varchar(200) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `est_days` int(11) DEFAULT NULL,
  `client_name` varchar(200) DEFAULT NULL,
  `client_number` bigint(11) DEFAULT NULL,
  `client_email` varchar(200) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'active=1,inactive=2,delete=0',
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1


CREATE TABLE `project_type_tab` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `application_type` int(11) DEFAULT NULL,
  `project_type` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT 'active=1,inactive=2,delete=0',
  KEY `type_id` (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1

CREATE TABLE `roles_tab` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1

CREATE TABLE `type_of_project_tab` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `project_type` int(11) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
