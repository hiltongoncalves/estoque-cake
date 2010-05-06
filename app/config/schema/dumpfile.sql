#App sql generated on: 2010-05-06 13:04:35 : 1273161875

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
	`sale_id` int(11) DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
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
	`admin` int(4) DEFAULT NULL,
	`username` varchar(45) DEFAULT NULL,
	`password` varchar(45) DEFAULT NULL,
	`status` int(4) DEFAULT 1,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;
