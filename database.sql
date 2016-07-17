-- MySQL dump 10.15  Distrib 10.0.25-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	10.0.25-MariaDB-0ubuntu0.15.10.1

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
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `userid` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  CONSTRAINT `post_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `post`
--

LOCK TABLES `post` WRITE;
/*!40000 ALTER TABLE `post` DISABLE KEYS */;
/*!40000 ALTER TABLE `post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `replies`
--

DROP TABLE IF EXISTS `replies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `replies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `postid` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `postid` (`postid`),
  CONSTRAINT `replies_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `replies_ibfk_2` FOREIGN KEY (`postid`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `replies`
--

LOCK TABLES `replies` WRITE;
/*!40000 ALTER TABLE `replies` DISABLE KEYS */;
/*!40000 ALTER TABLE `replies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `updated` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'asndsand','qwee@qwe.de','peter','firstname','lastname','wqeqwe','wqwewqe'),(3,'anewusername445','afancyemail448@dot.com','secret','myfirstname','mylastname','2016-07-16 20:02:32','2016-07-16 20:02:32'),(4,'anewusername597','afancyemail494@dot.com','secret','myfirstname','mylastname','2016-07-16 20:06:51','2016-07-16 20:06:51'),(5,'anewusername48','afancyemail582@dot.com','secret','myfirstname','mylastname','2016-07-16 20:06:53','2016-07-16 20:06:53'),(6,'anewusername825','afancyemail182@dot.com','secret','myfirstname','mylastname','2016-07-16 20:06:56','2016-07-16 20:06:56'),(21,'anewusername910','afancyemail819@dot.com','secret','myfirstname','mylastname','2016-07-17 09:26:40','2016-07-17 09:26:40'),(22,'anewusername414','afancyemail25@dot.com','secret','myfirstname','mylastname','2016-07-17 09:27:17','2016-07-17 09:27:17'),(23,'anewusername437','afancyemail853@dot.com','secret','myfirstname','mylastname','2016-07-17 09:27:31','2016-07-17 09:27:31'),(24,'anewusername218','afancyemail60@dot.com','secret','myfirstname','mylastname','2016-07-17 09:28:04','2016-07-17 09:28:04'),(25,'anewusername741','afancyemail165@dot.com','secret','myfirstname','mylastname','2016-07-17 09:29:59','2016-07-17 09:29:59'),(26,'anewusername845','afancyemail444@dot.com','secret','myfirstname','mylastname','2016-07-17 09:30:01','2016-07-17 09:30:01'),(28,'anewusername971','afancyemail446@dot.com','secret','myfirstname','mylastname','2016-07-17 09:30:47','2016-07-17 09:30:47'),(29,'anewusername132','afancyemail588@dot.com','secret','myfirstname','mylastname','2016-07-17 09:30:50','2016-07-17 09:30:50'),(34,'anewusername705','afancyemail354@dot.com','secret','myfirstname','mylastname','2016-07-17 14:18:13','2016-07-17 14:18:13'),(35,'anewusername912','afancyemail892@dot.com','secret','myfirstname','mylastname','2016-07-17 14:19:09','2016-07-17 14:19:09'),(36,'anewusername530','afancyemail93@dot.com','secret','myfirstname','mylastname','2016-07-17 14:19:18','2016-07-17 14:19:18'),(37,'anewusername531','afancyemail364@dot.com','secret','myfirstname','mylastname','2016-07-17 14:21:31','2016-07-17 14:21:31');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-17 20:22:41
