-- Cria o banco
CREATE DATABASE IF NOT EXISTS `estoque`;

USE `estoque`;
-- Cria as tabelas
CREATE TABLE IF NOT EXISTS `estoque`.`products` (
	`id` INT(11) NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(45),
	`price` DECIMAL(12,2),
	`amount` INT(11),
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
	`name` VARCHAR(60) CHARACTER SET 'utf8' COLLATE 'utf8_general_ci',
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

-- Insere os dados
INSERT INTO `estoque`.`products` (`id`, `description`, `price`, `user_id`, `amount`)
VALUES (1, 'CAMERA DIGITAL', 199.50, 1, 50);
INSERT INTO `estoque`.`products` (`id`, `description`, `price`, `user_id`, `amount`)
VALUES (2, 'FILMADORA', 999.50, 1, 60);
INSERT INTO `estoque`.`products` (`id`, `description`, `price`, `user_id`, `amount`)
VALUES (3, 'NOTEBOOK', 1999.50, 1, 55);
INSERT INTO `estoque`.`products` (`id`, `description`, `price`, `user_id`, `amount`)
VALUES (4, 'MONITOR LCD 15', 399.50, 1, 15);

INSERT INTO `estoque`.`users` (`id`, `name`, `phone`, `admin`, `username`, `password`)
VALUES (1, 'Administrador', '8626-7909', 1, 'admin', 'd01e94c2b5e45b246769b5659a9d4a17f1072c63');
INSERT INTO `estoque`.`users` (`id`, `name`, `phone`, `admin`, `username`, `password`)
VALUES (2, 'Funcionário', '3378-5778', 0, 'funcionario', 'e4a6f8abea229a9b16ba301fa67641a1a1d2c01a');

