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
