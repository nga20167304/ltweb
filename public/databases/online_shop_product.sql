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
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `number_image` int(11) DEFAULT NULL,
  `luot_mua` int(11) DEFAULT NULL COMMENT 'lượt xem sản phẩm\n',
  `so_luong` int(11) DEFAULT NULL,
  `laptop_id` int(11) DEFAULT NULL,
  `tablet_id` int(11) DEFAULT NULL,
  `phone_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_laptop_idx` (`laptop_id`),
  KEY `fk_product_tablet_idx` (`tablet_id`),
  KEY `fk_product_phone_idx` (`phone_id`),
  CONSTRAINT `fk_product_laptop` FOREIGN KEY (`laptop_id`) REFERENCES `laptop` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_phone` FOREIGN KEY (`phone_id`) REFERENCES `phone` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_tablet` FOREIGN KEY (`tablet_id`) REFERENCES `tablet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'iPhone X 64 GB',29990000,0,4,NULL,10,NULL,NULL,1),(2,'iPhone 8 Plus 64GB',23990000,10,3,NULL,10,NULL,NULL,2),(3,'iPhone 8 64GB',20990000,5,3,NULL,10,NULL,NULL,3),(4,'iPhone 7 Plus 32GB',19990000,5,3,NULL,10,NULL,NULL,4),(5,'iPhone 7 32GB',15990000,5,3,NULL,10,NULL,NULL,5),(6,'iPhone 6s Plus 32GB',13990000,5,3,NULL,10,NULL,NULL,6),(7,'iPhone 6 32GB',8499000,0,3,NULL,10,NULL,NULL,7),(8,'Samsung Galaxy Note 8',22490000,2,3,NULL,10,NULL,NULL,8),(9,'Samsung Galaxy S8 Plus',17990000,3,3,NULL,10,NULL,NULL,9),(10,'Samsung Galaxy S8',15990000,0,3,NULL,10,NULL,NULL,9),(11,'Samsung Galaxy A8+',13490000,5,4,NULL,10,NULL,NULL,8),(12,'Samsung Galaxy S7 Edge',12990000,0,3,NULL,10,NULL,NULL,8),(13,'Macbook Air 13 128GB MQD32SA/A ',23999000,0,3,NULL,10,1,NULL,NULL),(14,'Macbook Pro 13 inch 128GB',33999000,2,4,NULL,10,2,NULL,NULL),(15,'Macbook Pro 15 inch Touch Bar 256GB',59999000,5,4,NULL,10,3,NULL,NULL),(16,'Macbook 12 256GB',33999000,2,4,NULL,10,1,NULL,NULL),(17,'Macbook Pro 13 256GB',34999000,0,2,NULL,10,2,NULL,NULL),(18,'Dell Ins N7370/Core i7-8550U',34490000,0,4,NULL,10,5,NULL,NULL),(19,'Dell XPS 13 9365',54990000,2,4,NULL,10,5,NULL,NULL),(20,'Dell XPS 15 9560',53990000,5,4,NULL,10,5,NULL,NULL),(21,'Dell N5570A',24990000,0,4,NULL,10,6,NULL,NULL),(22,'Dell INS N5379',22990000,2,4,NULL,10,6,NULL,NULL),(23,'Dell Ins N5378',23990000,5,4,NULL,10,6,NULL,NULL),(24,'Dell Ins 7460/ i7-7500U',23990000,0,3,NULL,0,6,NULL,NULL),(25,'Dell N7559/i5-6300HQ',21990000,0,4,NULL,0,6,NULL,NULL),(26,'Dell Inspiron N7570',22990000,0,4,NULL,10,6,NULL,NULL),(27,'iPad Pro 12.9 WI-FI 4G 256GB',27999000,2,1,NULL,10,NULL,1,NULL),(28,'iPad Pro 10.5 WI-FI 64GB',16999000,0,4,NULL,10,NULL,2,NULL),(29,'iPad Wi-Fi 4G 128GB',14999000,5,3,NULL,10,NULL,3,NULL),(30,'iPad Pro 12.9 WI-FI 64GB',20999000,2,1,NULL,10,NULL,1,NULL),(31,'iPad Pro 10.5 WI-FI 4G 256GB',23999000,5,1,NULL,10,NULL,1,NULL),(32,'iPad Mini 4 Wi-Fi 4G 128GB',13999000,0,3,NULL,10,NULL,3,NULL),(33,'iPad Pro 10.5 WI-FI 4G 64GB',19999000,2,1,NULL,10,NULL,2,NULL),(34,'Samsung Galaxy Tab E',4490000,0,4,NULL,10,NULL,5,NULL),(35,'Samsung Galaxy Tab A6 10.1',7990000,0,4,NULL,10,NULL,4,NULL),(36,'Samsung Galaxy Tab A 2017',549000,2,4,NULL,10,NULL,5,NULL),(37,'Samsung Galaxy Tab A 7',3590000,0,4,NULL,10,NULL,6,NULL),(38,'Samsung Galaxy Tab A 10.1 inch',7290000,5,4,NULL,10,NULL,4,NULL);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
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