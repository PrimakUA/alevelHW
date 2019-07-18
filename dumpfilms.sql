-- MySQL dump 10.16  Distrib 10.1.40-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: films
-- ------------------------------------------------------
-- Server version	10.1.40-MariaDB

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
  `film_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'picture',
  PRIMARY KEY (`films_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Доспехи бога'),(2,'Доспехи бога 2'),(3,'Кто я'),(4,'Час пик'),(5,'Час пик 2'),(6,'Час пик 3'),(7,'Смокинг'),(8,'Кошмар на улице вязов'),(9,'Кошмар на улице вязов 2'),(10,'Кошмар на улице вязов 3'),(11,'Кошмар на улице вязов 4'),(12,'Кошмар на улице вязов 5'),(13,'Кошмар на улице вязов 6'),(14,'Кошмар на улице вязов 7'),(15,'Пункт назначения'),(16,'Пункт назначения 2'),(17,'Пункт назначения 3'),(18,'Терминатор'),(19,'Терминатор 2'),(20,'Джанго освобожденный'),(21,'Криминальное чтиво');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list` (
  `list_id` int(11) NOT NULL AUTO_INCREMENT,
  `film_id` int(11) NOT NULL DEFAULT '0',
  `actor_id` int(11) NOT NULL DEFAULT '0',
  `director_id` int(11) NOT NULL DEFAULT '0',
  `scenarist_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list`
--

LOCK TABLES `list` WRITE;
/*!40000 ALTER TABLE `list` DISABLE KEYS */;
INSERT INTO `list` VALUES (1,1,6,6,6),(2,2,6,6,6),(3,3,6,6,6),(4,4,6,0,0),(5,5,6,0,0),(6,6,6,0,0),(7,7,6,0,0),(8,7,10,0,0),(9,8,7,0,0),(10,9,7,0,0),(11,10,7,0,0),(12,11,7,0,0),(13,12,7,0,0),(14,13,7,0,0),(15,14,7,0,0),(16,15,9,0,0),(17,16,9,0,0),(18,17,9,0,0),(19,18,8,0,0),(20,19,8,0,0),(21,20,11,11,11),(22,21,11,11,11);
/*!40000 ALTER TABLE `list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `persons_id` int(11) NOT NULL AUTO_INCREMENT,
  `person_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT 'person',
  PRIMARY KEY (`persons_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
INSERT INTO `persons` VALUES (6,'Джеки Чан'),(7,'Фреди Крюгер'),(8,'Арнольд Шварцнеггер'),(9,'Девон Сава'),(10,'Дженифер Лав Хьюитт'),(11,'Квентин Тарантино');
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-17 21:00:01
