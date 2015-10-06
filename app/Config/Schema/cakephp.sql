

DROP TABLE IF EXISTS `cakephp`.`posts`;


CREATE TABLE `cakephp`.`posts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`body` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`)) 	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;

