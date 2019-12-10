-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: online_shop
-- ------------------------------------------------------
-- Server version	5.7.19

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `phone`
--

DROP TABLE IF EXISTS `phone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `phone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(45) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `man_hinh` varchar(45) DEFAULT NULL,
  `camera` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `bo_nho_trong` varchar(45) DEFAULT NULL,
  `he_dieu_hanh` varchar(45) DEFAULT NULL,
  `cpu` varchar(45) DEFAULT NULL,
  `gpu` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  `kich_thuoc` varchar(45) DEFAULT NULL,
  `bao_hanh` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `phone`
--

LOCK TABLES `phone` WRITE;
/*!40000 ALTER TABLE `phone` DISABLE KEYS */;
INSERT INTO `phone` VALUES (1,'apple','iPhone X 64GB','	2436 x 1125 pixel','	Dual 12.0 MP / 	7.0 MP','3 GB','64 Gb','iOS 11','	Apple A11 Bionic','	Apple GPU (three-core graphics)','Li-Ion 	2716 mAh','143.6 x 70.9 x 7.7 mm','12 tháng'),(2,'apple','iPhone 8 Plus 64GB','1920 x 1080 pixels','	Dual 12.0 MP / 	7.0 MP','3 GB','64 GB','iOS 11','	Apple A11 Bionic','	Apple GPU (three-core graphics)','Li-Ion 	2675 mAh','	158.4 x 78.1 x 7.5 mm','12 tháng'),(3,'apple','iPhone 8 64GB','1334 x 750 pixels','	12.0 MP / 7.0 MP','2 GB','64 GB','iOS 11','	Apple A11 Bionic','	Apple GPU three-core graphics','Li-Ion','	138.4 x 67.3 x 7.3 mm','12 tháng'),(4,'apple','iPhone 7 Plus 32GB','	1920 x 1080 pixels','Dual 12.0 MP / 	7.0 MP','3 GB','32 GB','iOS 11','A10 	2.3 GHz 	4-core','M10','Li-Ion 11.1 Wh (2900 mAh)','	158.2 x 77.9 x 7.3 mm','12 tháng'),(5,'apple','iPhone 7 32GB','	1334 x 750 pixels','12.0 MP / 7.0 MP','2 GB','32 GB','iOS 11','	Apple A10 	2.3 GHz 4-cores','	PowerVR Series7XT Plus','	Li-Ion 	7.45 Wh (1960 mAh)','	138.3 x 67.1 x 7.1 mm','12 tháng'),(6,'apple','iPhone 6s Plus 32GB','	1080 x 1920 pixels','	12.0 MP / 5.0 MP','2 GB ','32 GB ','iOS ','	Apple A9 	1.8 GHz 2-cores','	PowerVR GT7600','	lithium-ion battery  	2750mAh','	158.2 x 77.9 x 7.3 mm','12 tháng'),(7,'apple','iPhone 6 32GB ','	1334 x 750 pixels','8.0 MP / 1.2 MP','1 GB','32 GB','iOS','	Apple A8 	1.4 GHz 2-cores','	PowerVR GX6450','	Lithium - Ion 	1810mAh','	138.1 x 67 x 6.9 mm','12 tháng'),(8,'samsung','Samsung Galaxy Note 8','	2960 x 1440 pixels','Dual 12.0 MP / 8.0 MP','6 GB','64 GB','android','Exynos 8895 	4 x 2.3 GHz và 4 x 1.7 GHz','	Mali G71','	Li-Ion 	3300 mAh','	162.5 x 74.8 x 8.6 mm','12 tháng'),(9,'samsung','Samsung Galaxy S8','	2960 x 1440 pixels','	Dual 12.0 MP / 8.0 MP','4 GB','64 GB','android','	Exynos 8895 	4 x 2.3 GHz và 4 x 1.7 GHz','Mali G71','Li-Ion 	3500 mAh','159.5 x 73.4 x 8.1mm','12 tháng');
/*!40000 ALTER TABLE `phone` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-23 14:01:39
