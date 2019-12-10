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
-- Table structure for table `laptop`
--

DROP TABLE IF EXISTS `laptop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `laptop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(45) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `cpu` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `o_cung` varchar(45) DEFAULT NULL,
  `man_hinh` varchar(45) DEFAULT NULL,
  `card_man_hinh` varchar(45) DEFAULT NULL,
  `am_thanh` varchar(45) DEFAULT NULL,
  `cong_ket_noi` varchar(100) DEFAULT NULL,
  `webcam` varchar(45) DEFAULT NULL,
  `he_dieu_hanh` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  `kich_thuoc` varchar(45) DEFAULT NULL,
  `khoi_luong` varchar(45) DEFAULT NULL,
  `bao_hanh` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `laptop`
--

LOCK TABLES `laptop` WRITE;
/*!40000 ALTER TABLE `laptop` DISABLE KEYS */;
INSERT INTO `laptop` VALUES (1,'apple','Macbook Air 13 128GB','Intel, Core i5, 1.8 Ghz','8 GB, LPDDR3, 1600 Mhz','SSD 128 GB','13.3 inch 	1440 x 900 pixels','	Intel HD Graphics 6000','	Stereo speakers','	LAN : 802.11ac Wi-Fi wireless networking WIFI : IEEE 802.11a/b/g/n compatib',NULL,'Mac OS','	Lithium-polymer',NULL,'1.35 Kg','12 tháng'),(2,'apple','Macbook Pro 13 inch 128GB','Intel, Core i5, 2.3 GHz','8 GB, LPDDR3, 2133MHz','SSD 128 GB','13.3 inch 	2560 x 1600 pixels 	LED-backlit','	Intel Iris Plus Graphics 640','	Stereo speakers','	LAN : 802.11ac Wi-Fi wireless networking WIFI : IEEE 802.11a/b/g/n compatib',NULL,'Mac OS','	Lithium-polymer',NULL,'1.37 kg','12 tháng'),(3,'apple','Macbook Pro 15 inch Touch Bar 256GB','Intel, Core i7, 2.8 GHz','16 GB, LPDDR3, 2133MHz','	SSD, 256 GB','	15.4 inch, 2880 x 1800 pixels','	Radeon Pro 555','	Stereo speakers','LAN : 802.11ac Wi-Fi wireless networking WIFI : IEEE 802.11a/b/g/n compatib',NULL,'Mac OS','	Lithium-polymer',NULL,'1.83 kg','12 tháng'),(5,'dell','Dell XPS 15','Intel, Core i7, 2.80 GHz','16 GB, DDR4, 2400MHz','	SSD, 512 GB','	15.6 inch , 3840 x 2160','	NVIDIA GeForce GTX 1050, Card rời','	High Definition (HD) Audio','	LAN : No LANWIFI : 802.11','	1280 x 720 (HD)','	Windows 10 Home 64 SL','	6-cell (97 WHr)','17mm x 357mm x 235mm','2.06 Kg','12 tháng'),(6,'dell','Dell Inspiron N7570','Intel Core i5-8250U','4 GB DDR4 2400 MHz','	SSD + HDD, 128 GB + 1000 GB','	15.6 Inches, FHD (1920 x 1080) TN','	NVIDIA GeForce 940MX, Card rời',NULL,'	LAN : 10/100/1000WIFI : 802.11','	1 Megapixel','	Windows 10 Home 64-Bit','	42 WHr, 3-Cell','22.7 mm x 380 mm x 258 mm','2.33 kg','12 tháng');
/*!40000 ALTER TABLE `laptop` ENABLE KEYS */;
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
