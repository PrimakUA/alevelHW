-- MySQL dump 10.16  Distrib 10.1.37-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: films
-- ------------------------------------------------------
-- Server version	10.1.37-MariaDB

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
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `films` (
  `films_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'picture',
  PRIMARY KEY (`films_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Доспехи бога'),(2,'Доспехи бога 2'),(3,'Кто я'),(4,'Час пик'),(5,'Час пик 2'),(6,'Час пик 3'),(7,'Смокинг'),(8,'Кошмар на улице вязов'),(9,'Кошмар на улице вязов 2'),(10,'Кошмар на улице вязов 3'),(11,'Кошмар на улице вязов 4'),(12,'Кошмар на улице вязов 5'),(13,'Кошмар на улице вязов 6'),(14,'Кошмар на улице вязов 7'),(15,'Пункт назначения'),(16,'Пункт назначения 2'),(17,'Пункт назначения 3'),(18,'Терминатор'),(19,'Терминатор 2');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `persons_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'person',
  PRIMARY KEY (`persons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (6,'Джеки Чан'),(7,'Фреди Крюгер'),(8,'Арнольд Шварцнеггер'),(9,'Девон Сава'),(10,'Дженифер Лав Хьюитт');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series_films`
--

DROP TABLE IF EXISTS `series_films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series_films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL DEFAULT '0',
  `series_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series_films`
--

LOCK TABLES `series_films` WRITE;
/*!40000 ALTER TABLE `series_films` DISABLE KEYS */;
INSERT INTO `series_films` VALUES (1,1,1),(2,2,1),(3,4,2),(4,5,2),(5,6,2),(6,8,3),(7,9,3),(8,10,3),(9,11,3),(10,12,3),(11,13,3),(12,14,3),(13,15,4),(14,16,4),(15,17,4),(16,18,5),(17,19,5);
/*!40000 ALTER TABLE `series_films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series_list`
--

DROP TABLE IF EXISTS `series_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `series_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series_list`
--

LOCK TABLES `series_list` WRITE;
/*!40000 ALTER TABLE `series_list` DISABLE KEYS */;
INSERT INTO `series_list` VALUES (1,'Доспехи бога'),(2,'Час пик'),(3,'Кошмар на улице вязов'),(4,'Пункт назначения'),(5,'Терминатор');
/*!40000 ALTER TABLE `series_list` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-18 23:52:08
