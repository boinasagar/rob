-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table greencard.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `FK_categories_users` (`created_by`),
  CONSTRAINT `FK_categories_users` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

-- Dumping data for table greencard.categories: ~6 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `name`, `status`, `created_by`, `created_date`) VALUES
	(10, 'Test', '1', 2, '2017-01-10 18:06:00'),
	(11, 'test333', '1', 2, '2017-01-10 18:10:00'),
	(12, 'test4', '0', 3, '2017-01-10 18:10:00'),
	(13, 'test4', '0', 3, '2017-01-10 18:10:00'),
	(14, 'test json 2', '1', 2, '2017-01-11 11:43:00'),
	(15, 'test json 2444', '1', 2, '2017-01-11 11:43:00'),
	(16, 'Rest 1', '1', 2, '2017-01-11 11:43:00'),
	(17, 'Rest 2', '1', 2, '2017-01-11 11:43:00');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;


-- Dumping structure for table greencard.groups
CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table greencard.groups: ~3 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
	(1, 'ADMIN', '2014-08-11 14:32:52', '2014-08-11 14:32:52'),
	(2, 'OUTLET ADMIN', '2014-08-11 14:32:56', '2014-08-11 14:32:56'),
	(3, 'USER', '2014-08-11 14:33:01', '2014-08-11 14:33:01');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;


-- Dumping structure for table greencard.outlets
CREATE TABLE IF NOT EXISTS `outlets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `category` int(11) DEFAULT NULL,
  `outlet_user` int(11) DEFAULT NULL,
  `email_id` varchar(256) DEFAULT NULL,
  `mobile1` varchar(256) DEFAULT NULL,
  `mobile2` varchar(256) DEFAULT NULL,
  `landline` varchar(256) DEFAULT NULL,
  `doorno` varchar(256) DEFAULT NULL,
  `street` text,
  `address` text,
  `pincode` varchar(256) DEFAULT NULL,
  `landmark` text,
  `prefered_contact_name` varchar(256) DEFAULT NULL,
  `prefered_contact_number` varchar(256) DEFAULT NULL,
  `prefered_contact_time` text,
  `geo_latitude` varchar(256) DEFAULT NULL,
  `geo_longitude` varchar(256) DEFAULT NULL,
  `unique_id` text,
  `subscription_date` date DEFAULT NULL,
  `subscription_duration` int(11) DEFAULT NULL,
  `subscription_amount` decimal(10,0) DEFAULT NULL,
  `subscription_expiry` date DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_by` int(11) DEFAULT NULL,
  `modified_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `image` text,
  PRIMARY KEY (`id`),
  KEY `FK_outlets_users` (`outlet_user`),
  KEY `FK_outlets_users_2` (`created_by`),
  KEY `FK_outlets_users_3` (`modified_by`),
  KEY `FK_outlets_categories` (`category`),
  CONSTRAINT `FK_outlets_categories` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_outlets_users` FOREIGN KEY (`outlet_user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_outlets_users_2` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_outlets_users_3` FOREIGN KEY (`modified_by`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table greencard.outlets: ~0 rows (approximately)
/*!40000 ALTER TABLE `outlets` DISABLE KEYS */;
INSERT INTO `outlets` (`id`, `name`, `category`, `outlet_user`, `email_id`, `mobile1`, `mobile2`, `landline`, `doorno`, `street`, `address`, `pincode`, `landmark`, `prefered_contact_name`, `prefered_contact_number`, `prefered_contact_time`, `geo_latitude`, `geo_longitude`, `unique_id`, `subscription_date`, `subscription_duration`, `subscription_amount`, `subscription_expiry`, `status`, `created_by`, `created_date`, `modified_by`, `modified_date`, `image`) VALUES
	(1, 'Outlet 1', 11, 3, 'test@test.com', '9010887760', '9011111111', '0403911888', '107', 'Street no 5.', 'address comes here...', '500086', 'Near SS Super Market', 'sagar', '901', '10 AM to 1PM', '100.100', '232.7676', 'OUTLET1_1', '2017-01-11', 36, 30000, '2017-03-31', '1', 3, '2017-01-11 12:32:00', 3, '2017-01-11 12:32:00', 'OUTLET1_1.png'),
	(2, 'Outlet 2', 14, 2, 'test@test.com', '9010887760', '', '', '', '', '', '', '', '', '', '', '', '', 'OUTLET2_2', '2017-01-11', NULL, NULL, '2017-01-11', '1', 2, '2017-01-11 13:37:00', 2, '2017-01-11 13:37:00', 'OUTLET2_2.png'),
	(3, 'Outlet 3', 12, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'OUTLET3_', '2017-01-11', NULL, NULL, '2017-01-11', '1', 2, '2017-01-11 14:00:00', 2, '2017-01-11 14:00:00', 'OUTLET3_.jpg'),
	(5, 'Outlet 5', 10, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'OUTLET5_5', '2017-01-11', NULL, NULL, '2017-01-11', '1', 2, '2017-01-11 14:11:00', 2, '2017-01-11 14:16:00', 'OUTLET5_5.png');
/*!40000 ALTER TABLE `outlets` ENABLE KEYS */;


-- Dumping structure for table greencard.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `role` varchar(64) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Dumping data for table greencard.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `created`, `modified`, `status`) VALUES
	(2, 'swathi', '81fdde95ca0b385a2204eabab1d4b744c57b2b36', NULL, '1', '2015-04-14 19:20:08', '2015-04-14 19:20:08', 1),
	(3, 'admin', '160207adb3a6458da337efc0ec70d70fab13e93a', 'admin@test.com', '1', '2015-04-18 13:00:24', '2015-04-18 13:00:24', 1),
	(4, 'faruq', '$2a$10$S4LY4MthHs60z1npuVPxke9QAufooODV5rUAu7eTWAzDVBEUDXrqq', 'faruq12356@gmail.com', '1', '2017-01-10 12:11:23', '2017-01-10 12:11:24', 1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
