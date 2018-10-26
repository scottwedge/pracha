CREATE TABLE `prachatech`.`users`(  
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(250),
  `email` VARCHAR(250),
  `status` INT(11) DEFAULT 1,
  `created_at` DATETIME,
  PRIMARY KEY (`id`)
);
