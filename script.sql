-- MySQL dump 10.13  Distrib 5.6.25, for Linux (x86_64)
--
-- Host: localhost    Database: db_silex_test
-- ------------------------------------------------------
-- Server version	5.6.25

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
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `idcontacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idcontacto`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (5,'silex','silex','silex'),(7,'pedro','pedro','callao'),(9,'pedro','pedro','callao'),(13,'pedro','pedro','callao'),(18,'pedro','pedro','callao'),(19,'pedro','pedro','callao'),(20,'pedro','pedro','callao'),(21,'pedro','pedro','callao'),(22,'pedro','pedro','callao'),(23,'pedro','pedro','callao'),(24,'pedro','pedro','callao'),(25,'pedro','pedro','callao'),(26,'pedro','pedro','callao'),(27,'pedro','pedro','callao'),(28,'pedro','pedro','callao'),(29,'pedro','pedro','callao'),(30,'pedro','pedro','callao'),(31,'pedro','pedro','callao'),(32,'pedro','pedro','callao'),(33,'pedro','pedro','callao'),(34,'pedro','pedro','callao'),(35,'pedro','pedro','callao'),(36,'pedro','pedro','callao'),(37,'pedro','pedro','callao'),(38,'pedro','pedro','callao'),(39,'pedro','pedro','callao'),(40,'pedro','pedro','callao'),(41,'pedro','pedro','callao'),(42,'pedro','pedro','callao'),(43,'pedro','pedro','callao'),(44,'pedro','pedro','callao'),(45,'pedro','pedro','callao'),(46,'pedro','pedro','callao'),(47,'pedro','pedro','callao'),(48,'pedro','pedro','callao'),(49,'pedro','pedro','callao'),(50,'pedro','pedro','callao'),(51,'pedro','pedro','callao'),(52,'pedro','pedro','callao'),(53,'pedro','pedro','callao'),(54,'pedro','pedro','callao'),(55,'pedro','pedro','callao'),(56,'pedro','pedro','callao'),(57,'pedro','pedro','callao'),(58,'pedro','pedro','callao'),(59,'pedro','pedro','callao'),(60,'pedro','pedro','callao'),(61,'pedro','pedro','callao'),(62,'pedro','pedro','callao'),(63,'pedro','pedro','callao'),(64,'pedro','pedro','callao'),(65,'pedro','pedro','callao'),(66,'pedro','pedro','callao'),(67,'pedro','pedro','callao'),(68,'pedro','pedro','callao'),(69,'pedro','pedro','callao');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-09-28  1:11:36
