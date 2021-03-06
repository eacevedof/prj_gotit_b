/*
SQLyog Community v12.1 (32 bit)
MySQL - 10.4.11-MariaDB-1:10.4.11+maria~bionic : Database - db_gotit
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_gotit` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `db_gotit`;

/*Table structure for table `app_array` */

DROP TABLE IF EXISTS `app_array`;

CREATE TABLE `app_array` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_erp` varchar(25) DEFAULT NULL,
  `type` varchar(15) DEFAULT NULL,
  `id_tosave` varchar(25) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `order_by` int(5) NOT NULL DEFAULT 100,
  `code_cache` varchar(500) DEFAULT NULL,
  `id_parent` int(11) DEFAULT NULL COMMENT 'para el caso de paises',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `app_array` */

insert  into `app_array`(`processflag`,`insert_platform`,`insert_user`,`insert_date`,`update_platform`,`update_user`,`update_date`,`delete_platform`,`delete_user`,`delete_date`,`cru_csvnote`,`is_erpsent`,`is_enabled`,`i`,`id`,`code_erp`,`type`,`id_tosave`,`description`,`order_by`,`code_cache`,`id_parent`) values (NULL,'1',NULL,'2019-09-14 17:51:23',NULL,NULL,'2019-09-14 17:51:51',NULL,NULL,NULL,NULL,'0','1',NULL,1,NULL,'countries',NULL,'generic',100,NULL,NULL),(NULL,'1',NULL,'2019-09-14 17:51:32',NULL,NULL,'2019-09-14 17:52:01',NULL,NULL,NULL,NULL,'0','1',NULL,2,NULL,'countries',NULL,'aua',100,NULL,NULL),(NULL,'1',NULL,'2019-09-14 17:51:48',NULL,NULL,'2019-09-14 17:52:05',NULL,NULL,NULL,NULL,'0','1',NULL,3,NULL,'countries',NULL,'es',100,NULL,NULL),(NULL,'1',NULL,'2020-01-21 20:58:27',NULL,NULL,'2020-01-21 20:58:31',NULL,NULL,NULL,NULL,'0','1',NULL,4,NULL,'sector',NULL,'generic',100,NULL,NULL);

/*Table structure for table `app_array_lang` */

DROP TABLE IF EXISTS `app_array_lang`;

CREATE TABLE `app_array_lang` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` int(11) DEFAULT NULL COMMENT 'app_array.id',
  `id_language` int(11) DEFAULT NULL COMMENT 'app_languages.id',
  `description` varchar(250) DEFAULT NULL COMMENT 'texto traducido',
  `code_cache` varchar(500) DEFAULT NULL COMMENT 'code redis',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_array_lang` */

/*Table structure for table `app_company` */

DROP TABLE IF EXISTS `app_company`;

CREATE TABLE `app_company` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_erp` varchar(25) DEFAULT NULL,
  `id_sector` int(11) DEFAULT NULL COMMENT 'app_array.id (type=sector)',
  `vat` varchar(25) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `id_country` int(11) DEFAULT NULL COMMENT 'app_array.id (type=countries)',
  `id_city` int(11) DEFAULT NULL COMMENT 'app_array.id (type=cities)',
  `phone_test` varchar(25) DEFAULT NULL,
  `phone_token` varchar(250) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `url_logo` varchar(500) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=companystatus)',
  `role` varchar(50) DEFAULT NULL COMMENT 'symfony.role',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_company` */

/*Table structure for table `app_company_bonus` */

DROP TABLE IF EXISTS `app_company_bonus`;

CREATE TABLE `app_company_bonus` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL COMMENT 'app_company.id',
  `id_prospect` int(11) DEFAULT NULL COMMENT 'app_prospect.id',
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=bonusstatus)',
  `code` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_company_bonus` */

/*Table structure for table `app_company_prospects` */

DROP TABLE IF EXISTS `app_company_prospects`;

CREATE TABLE `app_company_prospects` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL COMMENT 'app_company.id',
  `id_prospect` int(11) DEFAULT NULL COMMENT 'app_prospect.id (el follower)',
  `is_promo_notify` int(2) DEFAULT NULL COMMENT 'notificar promociones?',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_company_prospects` */

/*Table structure for table `app_languages` */

DROP TABLE IF EXISTS `app_languages`;

CREATE TABLE `app_languages` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_erp` varchar(25) DEFAULT NULL,
  `code` varchar(25) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `order_by` int(5) NOT NULL DEFAULT 100,
  `code_cache` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `app_languages` */

insert  into `app_languages`(`processflag`,`insert_platform`,`insert_user`,`insert_date`,`update_platform`,`update_user`,`update_date`,`delete_platform`,`delete_user`,`delete_date`,`cru_csvnote`,`is_erpsent`,`is_enabled`,`i`,`id`,`code_erp`,`code`,`description`,`order_by`,`code_cache`) values (NULL,'1',NULL,'2019-09-14 17:53:02',NULL,NULL,'2019-09-14 17:53:12',NULL,NULL,NULL,NULL,'0','1',NULL,1,'1','1','generic',100,NULL),(NULL,'1',NULL,'2019-09-14 17:53:28',NULL,NULL,'2019-09-14 17:54:00',NULL,NULL,NULL,NULL,'0','1',NULL,2,'','en-us','english',100,NULL),(NULL,'1',NULL,'2019-09-14 17:53:52',NULL,NULL,'2019-09-14 17:57:53',NULL,NULL,NULL,NULL,'0','1',NULL,3,NULL,'es-es','spanish-spain',100,NULL);

/*Table structure for table `app_mail` */

DROP TABLE IF EXISTS `app_mail`;

CREATE TABLE `app_mail` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_mail` varchar(250) DEFAULT NULL,
  `from_title` varchar(250) DEFAULT NULL,
  `to` varchar(2000) DEFAULT NULL,
  `cc` varchar(2000) DEFAULT NULL,
  `bcc` varchar(2000) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  `body` mediumtext DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=mailstatus)',
  `id_entity` varchar(25) DEFAULT NULL COMMENT 'app_table.id',
  `id_entity_desc` int(11) DEFAULT NULL COMMENT 'app_array.id (type=entities)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_mail` */

/*Table structure for table `app_mail_attachments` */

DROP TABLE IF EXISTS `app_mail_attachments`;

CREATE TABLE `app_mail_attachments` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_mail` int(11) DEFAULT NULL COMMENT 'app_mail.id',
  `path_file` varchar(500) DEFAULT NULL,
  `is_forbidden` int(5) DEFAULT NULL COMMENT 'si es una extensión prohibida',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_mail_attachments` */

/*Table structure for table `app_promotion` */

DROP TABLE IF EXISTS `app_promotion`;

CREATE TABLE `app_promotion` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_erp` varchar(25) DEFAULT NULL,
  `date_start` datetime DEFAULT NULL,
  `date_end` datetime DEFAULT NULL,
  `original_price` decimal(11,3) DEFAULT NULL,
  `promo_price` decimal(11,3) DEFAULT NULL,
  `max_prospects` int(11) DEFAULT NULL COMMENT 'el número máximo de inscritos',
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=promostatus) online,stopped,cancelled',
  `is_acumulable` int(2) DEFAULT NULL COMMENT 'si tiene función de bono',
  `min_acumulable` int(5) DEFAULT NULL COMMENT 'las promos mínimas para reclamar el bono',
  `max_acumperiod` int(5) DEFAULT NULL COMMENT 'máximo en días que se puede acumular',
  `free_units` int(5) DEFAULT NULL COMMENT 'unidades a regalar',
  `repeat_period` int(5) DEFAULT NULL COMMENT 'dias que tienen que pasar para poder insribirse nuevamente',
  `notes` varchar(250) DEFAULT NULL COMMENT 'notas que no se publicarán',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotion` */

/*Table structure for table `app_promotion_categories` */

DROP TABLE IF EXISTS `app_promotion_categories`;

CREATE TABLE `app_promotion_categories` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_by` int(5) NOT NULL DEFAULT 100,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotion_categories` */

/*Table structure for table `app_promotion_categories_lang` */

DROP TABLE IF EXISTS `app_promotion_categories_lang`;

CREATE TABLE `app_promotion_categories_lang` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promotion_categories` int(11) DEFAULT 1 COMMENT 'app_promotion_categories.id',
  `id_language` int(11) NOT NULL DEFAULT 1 COMMENT 'app_languages.id',
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotion_categories_lang` */

/*Table structure for table `app_promotion_lang` */

DROP TABLE IF EXISTS `app_promotion_lang`;

CREATE TABLE `app_promotion_lang` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promotion` int(11) DEFAULT NULL COMMENT 'app_promotion.id',
  `id_language` int(11) DEFAULT 1 COMMENT 'app_languages.id',
  `title` varchar(100) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `url_image` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotion_lang` */

/*Table structure for table `app_promotion_notifications` */

DROP TABLE IF EXISTS `app_promotion_notifications`;

CREATE TABLE `app_promotion_notifications` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promotion` int(11) DEFAULT NULL COMMENT 'app_promotion.id',
  `id_prospect` int(11) DEFAULT NULL COMMENT 'app_prospect.id',
  `code_push` varchar(500) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=notifstatus) notified,read,suscribed',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotion_notifications` */

/*Table structure for table `app_promotions_categories` */

DROP TABLE IF EXISTS `app_promotions_categories`;

CREATE TABLE `app_promotions_categories` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promotion` int(11) DEFAULT NULL COMMENT 'app_promotion.id',
  `id_promotion_categories` int(11) DEFAULT NULL COMMENT 'app_promotion_categories.id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotions_categories` */

/*Table structure for table `app_promotions_prospects` */

DROP TABLE IF EXISTS `app_promotions_prospects`;

CREATE TABLE `app_promotions_prospects` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promotion` int(11) DEFAULT NULL COMMENT 'app_promotion.id',
  `id_prospect` int(11) DEFAULT NULL COMMENT 'app_prospect.id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotions_prospects` */

/*Table structure for table `app_promotions_prospects_points` */

DROP TABLE IF EXISTS `app_promotions_prospects_points`;

CREATE TABLE `app_promotions_prospects_points` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_promotion` int(11) DEFAULT NULL COMMENT 'app_promotion.id',
  `id_prospect` int(11) DEFAULT NULL COMMENT 'app_prospect.id',
  `reset_points` int(5) DEFAULT NULL COMMENT 'contador promos efectivas si igual a min_acumulable se r',
  `total_points` int(11) DEFAULT NULL COMMENT 'contador total realizado en esta promo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_promotions_prospects_points` */

/*Table structure for table `app_prospect` */

DROP TABLE IF EXISTS `app_prospect`;

CREATE TABLE `app_prospect` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_erp` varchar(25) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `id_gender` int(11) DEFAULT NULL COMMENT 'app_array.id (type=gender)',
  `id_country` int(11) DEFAULT NULL COMMENT 'app_array.id (type=countries)',
  `id_city` int(11) DEFAULT NULL COMMENT 'app_array.id (type=cities)',
  `id_language` int(11) DEFAULT 1 COMMENT 'app_languages.id',
  `total_points` int(11) DEFAULT NULL COMMENT 'puntos acumulados',
  `url_picture` varchar(250) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=userstatus)',
  `role` varchar(50) DEFAULT NULL COMMENT 'symfony role',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_prospect` */

/*Table structure for table `app_user` */

DROP TABLE IF EXISTS `app_user`;

CREATE TABLE `app_user` (
  `processflag` varchar(5) DEFAULT NULL,
  `insert_platform` varchar(3) DEFAULT '1',
  `insert_user` varchar(15) DEFAULT NULL,
  `insert_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `update_platform` varchar(3) DEFAULT NULL,
  `update_user` varchar(15) DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `delete_platform` varchar(3) DEFAULT NULL,
  `delete_user` varchar(15) DEFAULT NULL,
  `delete_date` timestamp NULL DEFAULT NULL,
  `cru_csvnote` varchar(500) DEFAULT NULL,
  `is_erpsent` varchar(3) DEFAULT '0',
  `is_enabled` varchar(3) DEFAULT '1',
  `i` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code_erp` varchar(25) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `notes` varchar(500) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `url_profile` varchar(500) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL COMMENT 'app_array.id (type=userstatus)',
  `role` varchar(50) DEFAULT NULL COMMENT 'symfony.role',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `app_user` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
