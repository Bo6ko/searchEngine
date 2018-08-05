-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.25a - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for cars
CREATE DATABASE IF NOT EXISTS `cars` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `cars`;

-- Dumping structure for table cars.vehicules
CREATE TABLE IF NOT EXISTS `vehicules` (
  `vehicule_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `marque_id` smallint(5) unsigned DEFAULT NULL,
  `modele_id` smallint(5) unsigned DEFAULT NULL,
  `energie_id` smallint(5) unsigned DEFAULT NULL,
  `boite_id` smallint(5) unsigned DEFAULT NULL,
  `carrosserie_id` smallint(5) unsigned DEFAULT NULL,
  `couleur_id` smallint(5) unsigned DEFAULT NULL,
  `vehicule_annee` year(4) DEFAULT NULL,
  `vehicule_price` decimal(10,2) unsigned DEFAULT NULL,
  `vehicule_kilometrage` smallint(6) unsigned DEFAULT NULL,
  `vehicule_portes` tinyint(1) unsigned DEFAULT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_phone` varchar(50) DEFAULT NULL,
  `client_country` varchar(50) DEFAULT NULL,
  `client_city` varchar(50) DEFAULT NULL,
  `vehicule_date_created` datetime DEFAULT NULL,
  `vehicule_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `vehicule_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`vehicule_id`),
  KEY `vehicule_id` (`vehicule_id`),
  KEY `FK_vehicules_vehicule_marques` (`marque_id`),
  KEY `FK_vehicules_vehicule_boites` (`boite_id`),
  KEY `FK_vehicules_vehicule_couleurs` (`couleur_id`),
  KEY `FK_vehicules_vehicule_energies` (`energie_id`),
  KEY `FK_vehicules_vehicule_modeles` (`modele_id`),
  KEY `FK_vehicules_vehicule_carrosseries` (`carrosserie_id`),
  CONSTRAINT `FK_vehicules_vehicule_boites` FOREIGN KEY (`boite_id`) REFERENCES `vehicule_boites` (`boite_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_vehicule_carrosseries` FOREIGN KEY (`carrosserie_id`) REFERENCES `vehicule_carrosseries` (`carrosserie_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_vehicule_couleurs` FOREIGN KEY (`couleur_id`) REFERENCES `vehicule_couleurs` (`couleur_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_vehicule_energies` FOREIGN KEY (`energie_id`) REFERENCES `vehicule_energies` (`energie_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_vehicule_marques` FOREIGN KEY (`marque_id`) REFERENCES `vehicule_marques` (`marque_id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_vehicule_modeles` FOREIGN KEY (`modele_id`) REFERENCES `vehicule_modeles` (`modele_id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicules: ~18 rows (approximately)
/*!40000 ALTER TABLE `vehicules` DISABLE KEYS */;
INSERT INTO `vehicules` (`vehicule_id`, `marque_id`, `modele_id`, `energie_id`, `boite_id`, `carrosserie_id`, `couleur_id`, `vehicule_annee`, `vehicule_price`, `vehicule_kilometrage`, `vehicule_portes`, `client_name`, `client_email`, `client_phone`, `client_country`, `client_city`, `vehicule_date_created`, `vehicule_date_modified`, `vehicule_status`) VALUES
	(1, 1, 1, 1, 1, 2, 4, '2012', 20000.00, 50000, 5, NULL, NULL, NULL, NULL, NULL, '2017-09-14 15:20:33', '2017-09-20 14:58:43', 1),
	(2, 2, 2, 2, 1, 1, 2, '2013', 8000.00, 65535, 4, NULL, NULL, NULL, NULL, NULL, '2017-09-14 15:18:15', '2017-09-20 14:59:37', 1),
	(3, 3, 3, 3, 1, 3, 1, '2014', 9000.12, 45000, 3, NULL, NULL, NULL, NULL, NULL, '2017-09-14 15:18:15', '2017-09-20 15:02:47', 1),
	(4, 4, 4, 1, 2, 2, 3, '2015', 25000.00, 12000, 2, NULL, NULL, NULL, NULL, NULL, '2017-09-19 13:17:02', '2017-09-20 15:02:17', 1),
	(5, 5, 5, 2, 2, 4, 5, '2009', 34000.00, 28000, 4, NULL, NULL, NULL, NULL, NULL, '2017-09-19 13:22:23', '2017-09-21 09:27:04', 0);
/*!40000 ALTER TABLE `vehicules` ENABLE KEYS */;

-- Dumping structure for table cars.vehicules_equipements
CREATE TABLE IF NOT EXISTS `vehicules_equipements` (
  `ve_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicule_id` int(10) unsigned DEFAULT NULL,
  `equipement_id` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`ve_id`),
  KEY `FK_vehicules_equipements_vehicules` (`vehicule_id`),
  KEY `FK_vehicules_equipements_vehicule_equipements` (`equipement_id`),
  KEY `ve_id` (`ve_id`),
  CONSTRAINT `FK_vehicules_equipements_vehicules` FOREIGN KEY (`vehicule_id`) REFERENCES `vehicules` (`vehicule_id`) ON UPDATE CASCADE,
  CONSTRAINT `FK_vehicules_equipements_vehicule_equipements` FOREIGN KEY (`equipement_id`) REFERENCES `vehicule_equipements` (`equipement_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicules_equipements: ~2 rows (approximately)
/*!40000 ALTER TABLE `vehicules_equipements` DISABLE KEYS */;
INSERT INTO `vehicules_equipements` (`ve_id`, `vehicule_id`, `equipement_id`) VALUES
	(1, 1, 1),
	(2, 1, 2);
/*!40000 ALTER TABLE `vehicules_equipements` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_boites
CREATE TABLE IF NOT EXISTS `vehicule_boites` (
  `boite_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `boite_name` varchar(50) DEFAULT NULL,
  `boite_date_created` datetime DEFAULT NULL,
  `boite_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `boite_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`boite_id`),
  KEY `boite_id` (`boite_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_boites: ~2 rows (approximately)
/*!40000 ALTER TABLE `vehicule_boites` DISABLE KEYS */;
INSERT INTO `vehicule_boites` (`boite_id`, `boite_name`, `boite_date_created`, `boite_date_modified`, `boite_status`) VALUES
	(1, 'Manual', '2017-09-13 15:03:00', '2017-09-13 15:03:00', 1),
	(2, 'Automatic', '2017-09-13 14:09:07', '2017-09-20 15:00:14', 1);
/*!40000 ALTER TABLE `vehicule_boites` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_carrosseries
CREATE TABLE IF NOT EXISTS `vehicule_carrosseries` (
  `carrosserie_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `carrosserie_name` varchar(50) DEFAULT NULL,
  `carrosserie_date_created` datetime DEFAULT NULL,
  `carrosserie_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `carrosserie_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`carrosserie_id`),
  KEY `carroserie_id` (`carrosserie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_carrosseries: ~4 rows (approximately)
/*!40000 ALTER TABLE `vehicule_carrosseries` DISABLE KEYS */;
INSERT INTO `vehicule_carrosseries` (`carrosserie_id`, `carrosserie_name`, `carrosserie_date_created`, `carrosserie_date_modified`, `carrosserie_status`) VALUES
	(1, 'Coupe', '2017-09-13 14:56:27', '2017-09-13 14:56:27', 1),
	(2, '4x4', '2017-09-13 14:56:34', '2017-09-13 14:56:35', 1),
	(3, 'Cabriolet', '2017-09-13 14:56:58', '2017-09-13 14:57:00', 1),
	(4, 'Sedan', '2017-09-13 13:57:21', '2017-09-20 14:03:28', 1);
/*!40000 ALTER TABLE `vehicule_carrosseries` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_couleurs
CREATE TABLE IF NOT EXISTS `vehicule_couleurs` (
  `couleur_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `couleur_name` varchar(50) DEFAULT NULL,
  `couleur_date_created` datetime DEFAULT NULL,
  `couleur_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `couleur_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`couleur_id`),
  KEY `couleur_id` (`couleur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_couleurs: ~5 rows (approximately)
/*!40000 ALTER TABLE `vehicule_couleurs` DISABLE KEYS */;
INSERT INTO `vehicule_couleurs` (`couleur_id`, `couleur_name`, `couleur_date_created`, `couleur_date_modified`, `couleur_status`) VALUES
	(1, 'White', '2017-09-13 11:06:04', '2017-09-20 14:03:51', 1),
	(2, 'Black', '2017-09-13 11:21:40', '2017-09-20 14:56:44', 1),
	(3, 'Red', '2017-09-13 10:22:18', '2017-09-20 14:56:45', 1),
	(4, 'Green', '2017-09-13 10:31:39', '2017-09-20 14:56:46', 1),
	(5, 'Blue', '2017-09-14 15:02:50', '2017-09-20 15:03:15', 1);
/*!40000 ALTER TABLE `vehicule_couleurs` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_energies
CREATE TABLE IF NOT EXISTS `vehicule_energies` (
  `energie_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `energie_name` varchar(50) DEFAULT NULL,
  `energie_date_created` datetime DEFAULT NULL,
  `energie_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `energie_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`energie_id`),
  KEY `energie_id` (`energie_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_energies: ~3 rows (approximately)
/*!40000 ALTER TABLE `vehicule_energies` DISABLE KEYS */;
INSERT INTO `vehicule_energies` (`energie_id`, `energie_name`, `energie_date_created`, `energie_date_modified`, `energie_status`) VALUES
	(1, 'Essence', '2017-09-13 14:46:37', '2017-09-13 14:46:40', 1),
	(2, 'Diesel', '2017-09-13 14:46:45', '2017-09-13 14:46:45', 1),
	(3, 'Eco', '2017-09-13 13:47:16', '2017-09-20 14:57:08', 1);
/*!40000 ALTER TABLE `vehicule_energies` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_equipements
CREATE TABLE IF NOT EXISTS `vehicule_equipements` (
  `equipement_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `equipement_name` varchar(50) DEFAULT NULL,
  `equipement_date_created` datetime DEFAULT NULL,
  `equipement_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `equipement_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`equipement_id`),
  KEY `equipement_id` (`equipement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_equipements: ~5 rows (approximately)
/*!40000 ALTER TABLE `vehicule_equipements` DISABLE KEYS */;
INSERT INTO `vehicule_equipements` (`equipement_id`, `equipement_name`, `equipement_date_created`, `equipement_date_modified`, `equipement_status`) VALUES
	(1, 'ABS', '2017-09-14 14:58:20', '2017-09-14 14:58:57', 1),
	(2, 'Traction control', '2017-09-14 14:58:23', '2017-09-14 14:58:58', 1),
	(3, 'Air-condition', '2017-09-14 14:58:24', '2017-09-14 14:58:59', 1),
	(4, 'Air-bag', '2017-09-14 14:58:25', '2017-09-20 15:03:11', 1),
	(5, 'Heated seats', '2017-09-14 14:58:25', '2017-09-14 14:59:01', 1);
/*!40000 ALTER TABLE `vehicule_equipements` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_images
CREATE TABLE IF NOT EXISTS `vehicule_images` (
  `image_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`image_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_images: ~0 rows (approximately)
/*!40000 ALTER TABLE `vehicule_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `vehicule_images` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_marques
CREATE TABLE IF NOT EXISTS `vehicule_marques` (
  `marque_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `marque_name` varchar(50) DEFAULT NULL,
  `marque_date_created` datetime DEFAULT NULL,
  `marque_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `marque_status` tinyint(1) unsigned DEFAULT '0',
  PRIMARY KEY (`marque_id`),
  KEY `marque_id` (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_marques: ~6 rows (approximately)
/*!40000 ALTER TABLE `vehicule_marques` DISABLE KEYS */;
INSERT INTO `vehicule_marques` (`marque_id`, `marque_name`, `marque_date_created`, `marque_date_modified`, `marque_status`) VALUES
	(1, 'Mitsubishi', '2017-09-15 14:12:37', '2017-09-15 14:13:45', 1),
	(2, 'Toyota', '2017-09-15 14:13:43', '2017-09-15 14:13:43', 1),
	(3, 'Peugeot', '2017-09-15 14:14:17', '2017-09-15 14:15:02', 1),
	(4, 'Citroen', '2017-09-15 14:15:00', '2017-09-20 14:58:20', 1),
	(5, 'Nissan', '2017-09-19 14:12:35', '2017-09-20 15:03:06', 1),
	(6, 'opel', '2017-09-21 07:29:27', '2017-09-21 08:29:27', 0);
/*!40000 ALTER TABLE `vehicule_marques` ENABLE KEYS */;

-- Dumping structure for table cars.vehicule_modeles
CREATE TABLE IF NOT EXISTS `vehicule_modeles` (
  `modele_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `marque_id` smallint(5) unsigned DEFAULT NULL,
  `modele_name` varchar(50) DEFAULT NULL,
  `modele_date_created` datetime DEFAULT NULL,
  `modele_date_modified` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modele_status` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`modele_id`),
  KEY `modele_id` (`modele_id`),
  KEY `FK_vehicule_modeles_vehicule_marques` (`marque_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Dumping data for table cars.vehicule_modeles: ~10 rows (approximately)
/*!40000 ALTER TABLE `vehicule_modeles` DISABLE KEYS */;
INSERT INTO `vehicule_modeles` (`modele_id`, `marque_id`, `modele_name`, `modele_date_created`, `modele_date_modified`, `modele_status`) VALUES
	(1, 1, 'Lancer', '2017-09-15 14:13:30', '2017-09-15 14:13:34', 1),
	(2, 2, 'Corolla', '2017-09-15 14:13:53', '2017-09-15 14:13:53', 1),
	(3, 3, '407', '2017-09-15 14:14:30', '2017-09-15 14:14:31', 1),
	(4, 4, 'C5', '2017-09-15 14:15:09', '2017-09-20 15:01:47', 1),
	(5, 5, 'Juke', '2017-09-20 08:43:35', '2017-09-20 15:03:03', 1),
	(6, 1, 'Galant', '2017-09-20 16:18:22', '2017-09-20 16:18:27', 1),
	(7, 2, 'Avensis', '2017-09-20 16:18:57', '2017-09-20 16:18:57', 1),
	(8, 3, '607', '2017-09-20 16:19:15', '2017-09-20 16:19:16', 1),
	(9, 4, 'C4', '2017-09-20 16:19:24', '2017-09-20 16:19:26', 1),
	(10, 5, 'Qashqai', '2017-09-20 16:19:34', '2017-09-20 16:19:34', 1);
/*!40000 ALTER TABLE `vehicule_modeles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
