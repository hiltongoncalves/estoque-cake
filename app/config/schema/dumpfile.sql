#App sql generated on: 2010-05-27 18:29:53 : 1274995793

DROP TABLE IF EXISTS `products`;
DROP TABLE IF EXISTS `products_sales`;
DROP TABLE IF EXISTS `sales`;
DROP TABLE IF EXISTS `users`;


CREATE TABLE `products` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`description` varchar(45) DEFAULT NULL,
	`price` float(12,2) DEFAULT NULL,
	`user_id` int(11) DEFAULT NULL,
	`amount` int(11) DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `products_sales` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`product_id` int(11) DEFAULT NULL,
	`sale_id` int(11) DEFAULT NULL,
	`amount` int(11) DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `sales` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`user_id` int(11) DEFAULT NULL,
	`created` datetime DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

CREATE TABLE `users` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`name` varchar(60) DEFAULT NULL,
	`phone` varchar(15) DEFAULT NULL,
	`address` varchar(200) DEFAULT NULL,
	`email` varchar(80) DEFAULT NULL,
	`admin` int(4) DEFAULT NULL,
	`username` varchar(45) DEFAULT NULL,
	`password` varchar(45) DEFAULT NULL,
	`status` int(4) DEFAULT 1,
	`cpf` varchar(11) DEFAULT NULL,	PRIMARY KEY  (`id`),
	UNIQUE KEY `cpf_UNIQUE` (`cpf`),
	UNIQUE KEY `username_UNIQUE` (`username`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;