-- MySQL dump 10.13  Distrib 5.7.19, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: work
-- ------------------------------------------------------
-- Server version	5.7.19-log

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
-- Table structure for table `hangar`
--

DROP TABLE IF EXISTS `hangar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `hangar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_A5BB650A5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hangar`
--

LOCK TABLES `hangar` WRITE;
/*!40000 ALTER TABLE `hangar` DISABLE KEYS */;
INSERT INTO `hangar` VALUES (1,'Ангар 2'),(3,'Ангар 3'),(2,'Ангар 4');
/*!40000 ALTER TABLE `hangar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ldf`
--

DROP TABLE IF EXISTS `ldf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ldf` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `bazis_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_1BCC819877153098` (`code`),
  UNIQUE KEY `UNIQ_1BCC81983F9A6543` (`bazis_code`),
  UNIQUE KEY `UNIQ_1BCC81985E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ldf`
--

LOCK TABLES `ldf` WRITE;
/*!40000 ALTER TABLE `ldf` DISABLE KEYS */;
INSERT INTO `ldf` VALUES (1,1,'0381_16K','ДСП 16 мм \"бук\" (KRONOUKRAINE D 381)'),(2,2,'1972_16K','ДСП 16 мм \"яблоня локарно\" (KRONOUKRAINE D 1972)'),(3,3,'0722_16K','ДСП 16 мм \"орех лесной\" (KRONOUKRAINE D 722)'),(4,4,'8622_16K','ДСП 16 мм \"дуб молочный\" (KRONOUKRAINE D 8622'),(5,5,'9311_16K','ДСП 16 мм \"ольха\" (KRONOUKRAINE D 9311)'),(6,6,'sin_16S','ДСП 16 мм \"синий\" (SWISSPAN by SORBES+)'),(7,7,'zelV_16S','ДСП 16 мм \"зелёная вода\" (SWISSPAN by SORBES+)'),(8,8,'101_16K','ДСП 16 мм \"белый\" гладкий (KRONOUKRAINE К 101 SM)'),(9,9,'0119_16K','ДСП 16 мм \"бежевый светлый\" (KRONOUKRAINE U 119)'),(10,10,'MDF_16','МДФ 16 мм ламинированный односторонний'),(11,11,'lav_16S','ДСП 16 мм \"лаванда\" (SWISSPAN by SORBES+)'),(12,12,'ap_16S','ДСП 16 мм \"апельсин\" (SWISSPAN by SORBES+)'),(13,13,'jolt_16S','ДСП 16 мм \"жёлтый\" (SWISSPAN by SORBES+)'),(14,14,'zel_16S','ДСП 16 мм \"зелёный\" (SWISSPAN by SORBES+)'),(15,15,'kras_16S','ДСП 16 мм \"красный\" (SWISSPAN by SORBES+)'),(16,16,'0381_18K','ДСП 18 мм \"Бук\" (SWISSKRONO D381 PR)'),(17,17,'3025_16K','ДСП 16 мм \"дуб сонома\" (KRONOUKRAINE D 3025)'),(18,18,'9200_16K','ДСП 16 мм \"Бук Бавария\" (KRONOUKRAINE 9200)'),(19,19,'MDF_10','МДФ лам 10'),(20,20,'2260_18E','ДСП 18 мм \"Береза Майнау\" (KRONOUKRAINE D 2260)'),(21,21,'1700_18E','ДСП 18 мм \"стальной серый\" (KRONOSPAN 1700 PE)'),(22,22,'101_18K','ДСП 18 мм \"Белый гладкий\" (KRONOUKRAINE К 101 SM)'),(23,23,'1972_18K','ДСП 18 мм \"яблоня локарно\" (KRONOUKRAINE D 1972)'),(24,24,'2226_16K','ДСП 16 мм \"венге магия\" (KRONOUKRAINE D 2226)'),(25,25,'5194_16K','ДСП 16 мм \"дуб сонома трюфель\" (KRONOUKRAINE 5194 MX)'),(26,26,'1301_16K','ДСП 16 мм \"ваниль\" (KRONOUKRAINE D 1301)'),(27,27,'9763_16K','ДСП 16 мм \"Венге Луизиана\" (Kronospan 9763 BS)'),(28,28,'8679_16K','ДСП 16 мм \"Дуб Родос светлый\" (Kronospan 8679)'),(29,29,'8448_16K','ДСП 16 мм \"Орех Рибера\" (Kronospan 8448 BS)'),(30,30,'112_16K','ДСП 16 мм \"пепельный\" (KRONOUKRAINE U 112)'),(31,31,'1881_16K','ДСП 16 мм \"венге корсика\" (KRONOUKRAINE D1881)'),(32,32,'8130_16K','ДСП 16 мм \"Анжелик\" (KRONOUKRAINE 8130)'),(33,33,'2027_PLK','Пластик Бук Рейлонд');
/*!40000 ALTER TABLE `ldf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rest`
--

DROP TABLE IF EXISTS `rest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` date NOT NULL,
  `ldf_id` int(11) DEFAULT NULL,
  `hangar_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_FD1421D0250B0BF2` (`ldf_id`),
  KEY `IDX_FD1421D02FEFB5A5` (`hangar_id`),
  KEY `IDX_FD1421D06BF700BD` (`status_id`),
  CONSTRAINT `FK_FD1421D0250B0BF2` FOREIGN KEY (`ldf_id`) REFERENCES `ldf` (`id`),
  CONSTRAINT `FK_FD1421D02FEFB5A5` FOREIGN KEY (`hangar_id`) REFERENCES `hangar` (`id`),
  CONSTRAINT `FK_FD1421D06BF700BD` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=449 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rest`
--

LOCK TABLES `rest` WRITE;
/*!40000 ALTER TABLE `rest` DISABLE KEYS */;
INSERT INTO `rest` VALUES (378,'2018-03-13',1,1,2,600,475),(379,'2018-03-13',1,1,2,570,520),(380,'2018-03-13',1,1,2,820,370),(381,'2018-03-13',1,1,2,400,550),(382,'2018-03-13',1,1,3,590,365),(383,'2018-03-13',1,1,2,660,400),(384,'2018-03-13',1,1,2,800,400),(385,'2018-03-13',1,1,2,310,2070),(386,'2018-03-13',1,1,2,310,2070),(387,'2018-03-13',1,1,3,285,880),(388,'2018-03-13',1,1,2,990,420),(389,'2018-03-13',1,1,2,620,950),(390,'2018-03-13',1,1,2,390,1100),(391,'2018-03-13',1,1,3,480,1020),(392,'2018-03-13',1,1,2,540,1010),(393,'2018-03-13',1,1,2,520,800),(394,'2018-03-13',1,1,2,580,690),(395,'2018-03-13',1,1,2,650,630),(396,'2018-03-13',6,1,2,380,790),(397,'2018-03-13',6,1,2,590,820),(398,'2018-03-13',6,1,2,330,1010),(399,'2018-03-13',6,1,2,260,810),(400,'2018-03-13',6,1,2,310,960),(401,'2018-03-13',6,1,2,300,830),(402,'2018-03-13',6,1,3,350,1100),(403,'2018-03-13',6,1,2,300,1160),(404,'2018-03-13',6,1,2,560,325),(405,'2018-03-13',6,1,2,560,325),(406,'2018-03-13',1,1,2,1180,2070),(407,'2018-03-13',2,1,2,1000,2070),(408,'2018-03-13',2,1,2,1600,1320),(409,'2018-03-13',2,1,2,1570,1630),(410,'2018-03-13',11,1,3,2800,800),(411,'2018-03-13',11,1,2,1520,1820),(412,'2018-03-13',5,1,2,600,2070),(413,'2018-03-13',5,1,2,650,2070),(414,'2018-03-13',5,1,2,650,2070),(415,'2018-03-13',5,1,2,650,2070),(416,'2018-03-13',5,1,2,640,2070),(417,'2018-03-13',5,1,2,640,2070),(418,'2018-03-13',5,1,2,640,2070),(419,'2018-03-13',5,1,2,930,2070),(420,'2018-03-13',5,1,2,1090,2070),(421,'2018-03-13',5,1,2,1100,2070),(422,'2018-03-13',5,1,2,860,2070),(423,'2018-03-13',4,1,2,800,1220),(424,'2018-03-13',4,1,2,850,1360),(425,'2018-03-13',4,1,2,1370,2070),(426,'2018-03-13',4,1,2,2080,1720),(427,'2018-03-13',4,1,2,1440,1060),(428,'2018-03-13',4,1,2,1750,860),(429,'2018-03-13',4,1,2,980,2070),(430,'2018-03-13',6,2,2,980,840),(431,'2018-03-13',6,2,2,1810,1540),(432,'2018-03-13',7,2,2,1550,950),(433,'2018-03-13',11,2,2,1810,710),(434,'2018-03-13',7,2,2,1550,950),(435,'2018-03-13',6,2,2,1810,850),(436,'2018-03-13',12,2,2,1810,500),(437,'2018-03-13',15,2,2,1810,500),(438,'2018-03-13',12,2,2,820,1810),(439,'2018-03-13',6,2,2,1810,780),(440,'2018-03-13',6,2,2,1810,780),(441,'2018-03-13',6,2,2,1810,1540),(442,'2018-03-13',7,2,2,1810,700),(443,'2018-03-13',7,2,2,850,1810),(444,'2018-03-13',12,2,2,1810,750),(445,'2018-03-13',12,2,2,1810,1240),(446,'2018-03-13',13,2,2,1120,900),(447,'2018-03-13',13,2,2,1000,750),(448,'2018-03-13',13,2,2,750,730);
/*!40000 ALTER TABLE `rest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_7B00651C5E237E06` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (5,'deleted'),(4,'in process'),(3,'в крое'),(1,'заблокирован'),(2,'свободный');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-03-16 15:55:55
