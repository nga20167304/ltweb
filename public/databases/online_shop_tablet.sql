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
-- Table structure for table `tablet`
--

DROP TABLE IF EXISTS `tablet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tablet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(45) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `man_hinh` varchar(45) DEFAULT NULL,
  `cpu` varchar(45) DEFAULT NULL,
  `gpu` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `bo_nho_trong` varchar(45) DEFAULT NULL,
  `camera` varchar(45) DEFAULT NULL,
  `he_dieu_hanh` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  `kich_thuoc` varchar(45) DEFAULT NULL,
  `bao_hanh` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tablet`
--

LOCK TABLES `tablet` WRITE;
/*!40000 ALTER TABLE `tablet` DISABLE KEYS */;
INSERT INTO `tablet` VALUES (1,'apple','iPad Pro 12.9 WI-FI 4G 256GB','Retina display,12.9 inch(2732 x 2048 pixels)','	Apple A10X Fusion','	Power VR','4 GB','	256 GB','12.0 MP / 7.0 MP','iOS','	Lithium - Polymer 	41 W/h','	305.7 x 220.6 x 6.9 mm','12 tháng'),(2,'apple','iPad Pro 10.5 WI-FI 64GB ','Retina display,10.5 inch(1668 x 2224 pixels)','	Apple A10X Fusion','	Power VR','4 GB','64 GB','	12.0 MP / 7.0 MP','iOS','	Lithium - Polymer 	30.4 W/h','	250.6 x 171.1 x 6.1 mm','12 tháng'),(3,'apple','iPad Wi-Fi 4G 128GB','Retina display,9.7 inch(2048 x 1536 pixels)','	Apple A9','	PowerVR Series 7','	2 GB','128 GB','8.0 MP/ 1.2 MP','iOS','	Lithium - Ion 	32.4 Wh','240 x 169.5 x 7.5 mm','12 tháng'),(4,'samsung','Samsung Galaxy Tab A6 10.1','PLS LCD, , 10.1 inch(1920 x 1200 pixels)','	Exynos 7870','	Mali-T830','	3 GB','16 GB','8.0 MP / 2.0 MP','Android','	Lithium - Ion 	7300 mAh','	254.30 x 164.20 x 8.20 mm','12 tháng'),(5,'samsung','Samsung Galaxy Tab A 2017','TFT, , 8.0 inch(1280 x 800 pixels)','	1.4 GHz',NULL,'2 GB','16 GB','8.0 MP / 5.0 MP','Android','	Lithium - Ion','	186.9 x 108.8 x 8.7 mm','12 tháng'),(6,'samsung','Samsung Galaxy Tab A 7',' WXGA-TFT, , 7 inch(1280 x 800 Pixels)','	CPU 4 nhân',NULL,'	1.5 GB','8 GB','5.0 MP / 2.0 MP','Android','	Lithium - Ion','	186.9 x 108.8 x 8.7 mm','12 tháng');
/*!40000 ALTER TABLE `tablet` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-23 14:01:38
