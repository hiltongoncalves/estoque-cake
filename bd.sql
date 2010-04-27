CREATE DATABASE IF NOT EXISTS estoque;

CREATE TABLE IF NOT EXISTS `estoque`.`products` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(45),
	`price` DECIMAL(12,2),
	`user_id` INT(11),
	PRIMARY KEY(`id`)
)Engine = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `estoque`.`sales` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`created` DATETIME,
	`user_id` INT(11),
	PRIMARY KEY(`id`)
)Engine = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `estoque`.`users` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(60),
	`phone` VARCHAR(15),
	`address` VARCHAR(200),
	`admin` TINYINT(4),
	`user_id` INT(11),
	`username` VARCHAR(45),
	`password` VARCHAR(60),
	PRIMARY KEY(`id`)
)Engine = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE TABLE IF NOT EXISTS `estoque`.`products_sales` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`sale_id` INT(11),
	`product_id` INT(11),
	PRIMARY KEY(`id`)
)Engine = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;
