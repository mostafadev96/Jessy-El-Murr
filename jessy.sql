-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: jessy_elmurr
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
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `albums`
--

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;
INSERT INTO `albums` VALUES (1,'Innovative Young Arabs','1','blablablablabla',NULL,NULL),(2,'Innovative Young Arabs','1','blablablablabla',NULL,NULL),(3,'Innovative Young Arabs','1','blablablablabla',NULL,NULL),(4,'Innovative Young Arabs','1','blablablablabla',NULL,NULL);
/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `biographies`
--

DROP TABLE IF EXISTS `biographies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `biographies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `phrase` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `biographies`
--

LOCK TABLES `biographies` WRITE;
/*!40000 ALTER TABLE `biographies` DISABLE KEYS */;
INSERT INTO `biographies` VALUES (1,'is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth. ',NULL,NULL),(2,'El Murr currently produces and presents Sky News Arabia’s daily segment Taghreedat Al Sabah  which highlights portraits of inspirational young Arabs who have succeeded in making an impact in our digital world.',NULL,NULL),(3,'With over 15 years of media experience, El Murr is a Lebanese-American journalist who has reported for several international TV networks including BBC and Al Jazeera before moving to UAE in 2012. ',NULL,NULL);
/*!40000 ALTER TABLE `biographies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `episodes`
--

DROP TABLE IF EXISTS `episodes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `episodes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `srtdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episodes`
--

LOCK TABLES `episodes` WRITE;
/*!40000 ALTER TABLE `episodes` DISABLE KEYS */;
INSERT INTO `episodes` VALUES (1,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(2,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(3,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(4,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(5,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(6,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(7,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(8,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(9,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(10,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(11,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(12,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(13,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(14,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(15,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL),(16,'imgs/episodes/fifthpartphoto.png','Episodes one','https://www.youtube.com/embed/zpOULjyy-n8?rel=0','blablablablabla',NULL,NULL);
/*!40000 ALTER TABLE `episodes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `album_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galleries_album_id_foreign` (`album_id`),
  CONSTRAINT `galleries_album_id_foreign` FOREIGN KEY (`album_id`) REFERENCES `albums` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `galleries`
--

LOCK TABLES `galleries` WRITE;
/*!40000 ALTER TABLE `galleries` DISABLE KEYS */;
INSERT INTO `galleries` VALUES (1,'imgs/gallery/1/sixthphoto.png',1,NULL,NULL),(2,'imgs/gallery/2/sixthphoto.png',2,NULL,NULL),(3,'imgs/gallery/3/sixthpartphoto.png',3,NULL,NULL),(4,'imgs/gallery/4/sixthpartphoto.png',4,NULL,NULL),(5,'imgs/gallery/1/sixthphoto.png',1,NULL,NULL),(6,'imgs/gallery/1/sixthphoto.png',1,NULL,NULL),(7,'imgs/gallery/1/sixthphoto.png',1,NULL,NULL),(8,'imgs/gallery/2/sixthphoto.png',2,NULL,NULL),(9,'imgs/gallery/2/sixthphoto.png',2,NULL,NULL),(10,'imgs/gallery/2/sixthphoto.png',2,NULL,NULL),(11,'imgs/gallery/3/sixthpartphoto.png',3,NULL,NULL),(12,'imgs/gallery/3/sixthpartphoto.png',3,NULL,NULL),(13,'imgs/gallery/3/sixthpartphoto.png',3,NULL,NULL),(14,'imgs/gallery/4/sixthpartphoto.png',4,NULL,NULL),(15,'imgs/gallery/4/sixthpartphoto.png',4,NULL,NULL),(16,'imgs/gallery/4/sixthpartphoto.png',4,NULL,NULL);
/*!40000 ALTER TABLE `galleries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guests`
--

DROP TABLE IF EXISTS `guests`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `plane` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guests`
--

LOCK TABLES `guests` WRITE;
/*!40000 ALTER TABLE `guests` DISABLE KEYS */;
INSERT INTO `guests` VALUES (1,'imgs/guests/fourthpartphoto.png','Rose Leslie','Movie actor','#','#','#',NULL,NULL),(2,'imgs/guests/fourthpartphoto.png','Rose Leslie','Movie actor','#','#','#',NULL,NULL),(3,'imgs/guests/fourthpartphoto.png','Rose Leslie','Movie actor','#','#','#',NULL,NULL);
/*!40000 ALTER TABLE `guests` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_07_18_000258_create_biographies_table',1),(4,'2018_07_18_025700_create_perosnals_table',1),(5,'2018_07_18_030330_create_videos_table',1),(6,'2018_07_18_030342_create_guests_table',1),(7,'2018_07_18_030403_create_episodes_table',1),(8,'2018_07_18_030510_create_testimonials_table',1),(9,'2018_07_18_030627_create_albums_table',1),(10,'2018_07_18_234122_create_galleries_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `perosnals`
--

DROP TABLE IF EXISTS `perosnals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perosnals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perosnals`
--

LOCK TABLES `perosnals` WRITE;
/*!40000 ALTER TABLE `perosnals` DISABLE KEYS */;
INSERT INTO `perosnals` VALUES (1,'Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.','brief',NULL,NULL),(2,'International Journalist & Speaker','jobtitle',NULL,NULL);
/*!40000 ALTER TABLE `perosnals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'imgs/testimonials/emma_stone_11.png','Emma Stone','Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',NULL,NULL),(2,'imgs/testimonials/emma_stone_11.png','Emma Stone','Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',NULL,NULL),(3,'imgs/testimonials/emma_stone_11.png','Emma Stone','Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',NULL,NULL),(4,'imgs/testimonials/emma_stone_11.png','Emma Stone','Jessy El Murr is a multimedia journalist, speaker and moderator with a special interest in social media and Arab youth.',NULL,NULL);
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `srtdesc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `videos`
--

LOCK TABLES `videos` WRITE;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
INSERT INTO `videos` VALUES (1,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(2,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(3,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(4,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(5,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(6,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(7,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(8,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(9,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(10,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(11,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(12,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(13,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(14,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(15,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL),(16,'imgs/videos/firstcarousel.png','Innovative Young Arabs','02:00','blablablablabla','https://www.youtube.com/embed/zpOULjyy-n8?rel=0',NULL,NULL);
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-07-24 14:07:35
