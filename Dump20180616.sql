-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: mvd
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

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
-- Table structure for table `cathedras`
--

DROP TABLE IF EXISTS `cathedras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cathedras` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cathedras`
--

LOCK TABLES `cathedras` WRITE;
/*!40000 ALTER TABLE `cathedras` DISABLE KEYS */;
INSERT INTO `cathedras` VALUES (1,'Кафедра  Естественно-научных дициплин','2018-04-30 07:16:31','2018-04-30 07:16:31'),(2,'Кафедра Програмного обеспечения информационнных систем','2018-04-30 11:01:45','2018-04-30 11:01:45'),(3,'Кафедра Радиоэлектроники и телекомуникаций','2018-04-30 11:02:14','2018-04-30 11:02:14');
/*!40000 ALTER TABLE `cathedras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dates_estimate`
--

DROP TABLE IF EXISTS `dates_estimate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dates_estimate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_id` varchar(45) DEFAULT NULL,
  `estimate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dates_estimate`
--

LOCK TABLES `dates_estimate` WRITE;
/*!40000 ALTER TABLE `dates_estimate` DISABLE KEYS */;
INSERT INTO `dates_estimate` VALUES (1,'2018-05-16','100'),(2,'2018-05-16','9'),(3,'2018-05-16','8'),(4,'2018-05-16','6'),(5,'2018-05-16','5'),(6,'2018-05-16',NULL);
/*!40000 ALTER TABLE `dates_estimate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estimate_dates`
--

DROP TABLE IF EXISTS `estimate_dates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estimate_dates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estimate_dates`
--

LOCK TABLES `estimate_dates` WRITE;
/*!40000 ALTER TABLE `estimate_dates` DISABLE KEYS */;
INSERT INTO `estimate_dates` VALUES (1,'2018-05-16');
/*!40000 ALTER TABLE `estimate_dates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculties`
--

LOCK TABLES `faculties` WRITE;
/*!40000 ALTER TABLE `faculties` DISABLE KEYS */;
INSERT INTO `faculties` VALUES (1,'Технический факультет','2018-04-30 06:57:51','2018-04-30 06:57:51');
/*!40000 ALTER TABLE `faculties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `specialty` int(11) NOT NULL,
  `date_arrival` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` VALUES (2,'Информационные системы-2018-01(курс-1)','2018-05-01 06:21:27','2018-05-01 06:21:27',1,'2018','01','1'),(3,'Информационные системы-2018-02(курс-1)','2018-05-01 06:33:57','2018-05-01 06:33:57',1,'2018','02','1'),(4,'Информационные системы-2018-01(курс-4)','2018-05-01 06:34:06','2018-05-01 06:34:06',1,'2018','01','8'),(5,'Радиотехника, электроника и телекоммуникации-2018-01(курс-2)','2018-05-14 05:34:55','2018-05-14 05:34:55',2,'2018','01','4');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2018_04_30_104351_create_faculties_table',1),(4,'2018_04_30_104414_create_cathedras_table',1),(5,'2018_04_30_104427_create_subkects_table',1),(6,'2018_04_30_104447_create_specialties_table',1),(7,'2018_04_30_104504_create_groups_table',1),(8,'2018_04_30_182735_create_specialty_subjects_table',2),(10,'2018_05_01_115929_create_specialty_date_number_columns',3);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialties`
--

LOCK TABLES `specialties` WRITE;
/*!40000 ALTER TABLE `specialties` DISABLE KEYS */;
INSERT INTO `specialties` VALUES (1,'Информационные системы','2018-04-30 12:05:46','2018-04-30 12:05:46'),(2,'Радиотехника, электроника и телекоммуникации','2018-04-30 12:06:32','2018-04-30 12:06:32');
/*!40000 ALTER TABLE `specialties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `specialty_subjects`
--

DROP TABLE IF EXISTS `specialty_subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `specialty_subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subject` int(11) NOT NULL,
  `specialty` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user` int(11) NOT NULL,
  `semester` int(11) DEFAULT NULL,
  `group` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `specialty_subjects`
--

LOCK TABLES `specialty_subjects` WRITE;
/*!40000 ALTER TABLE `specialty_subjects` DISABLE KEYS */;
INSERT INTO `specialty_subjects` VALUES (6,1,1,NULL,NULL,9,1,2),(7,2,1,NULL,NULL,10,1,2),(8,1,1,NULL,NULL,9,1,3);
/*!40000 ALTER TABLE `specialty_subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjects`
--

LOCK TABLES `subjects` WRITE;
/*!40000 ALTER TABLE `subjects` DISABLE KEYS */;
INSERT INTO `subjects` VALUES (1,'Объектно Ориентированные программирования','2018-04-30 11:54:13','2018-04-30 11:54:13'),(2,'Радиотехника','2018-04-30 11:55:18','2018-04-30 11:55:18');
/*!40000 ALTER TABLE `subjects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniqid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '0',
  `type_id` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cathedra_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_uniqid_unique` (`uniqid`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Администратор','adminmvd','$2y$10$8O7qAf4nrXdxUZXEwKtQAeSl0VBCBqyPVfE4JPUCSDrfh8NXXQZga',0,1,'kAe8iRINybJnhx45STFqsH6g2aKsh0oyVcHdNMzYlj3HIaXscQWjr3Jrxr5F','2018-04-30 05:33:07','2018-04-30 05:33:07',0),(2,'Алпыс Динара Сейтжанқызы','1234568','$2y$10$RwJKyb3HPUrpkUOzquRJ6ufbt336XUkGdWW2MMJnLXHaqyKIwfJ26',2,3,NULL,'2018-05-21 22:57:17','2018-05-21 22:57:17',0),(3,'Алшынов Ахметжан Әнуарбекұлы','789456','$2y$10$tBxJai5WyvRFRJPWok3FSO/434leUEGtcY75w3pfEM98MpRntmhq.',2,3,NULL,'2018-05-21 23:07:47','2018-05-21 23:07:47',0),(4,'Бакбаева Айгерим Толегеновна','123456','$2y$10$oME2q/GIp6tuu1WT.hymkOQtpqYEqwt4jNbzhDekcXMpe2PIPdVju',2,3,NULL,'2018-05-21 23:08:45','2018-05-21 23:08:45',0),(5,'Баянды Ерлан','741852','$2y$10$ruT0yA9T1cXq8IicjIV3MOHO4iALD0ZpWCyArCgQbhKytgZK9n3tG',2,3,NULL,'2018-05-21 23:09:03','2018-05-21 23:09:03',0),(6,'Ерболатова Мадина Бахытжановна','123789','$2y$10$3R8JRvY5rOcRxd4nTrkDGeREVdETxFTYSY6JJUwDXCNr2NiANKm0e',2,3,NULL,'2018-05-21 23:09:15','2018-05-21 23:09:15',0),(7,'Есбергенов Айдын Ардақұлы','9651238','$2y$10$JK8JEB4e8GbbnuD3E0aShO2OAfZZyyYuXSodlN70iBXttOBnpWWtG',2,3,NULL,'2018-05-21 23:09:32','2018-05-21 23:09:32',0),(8,'Батыркул Максат Мухитдинулы','111111','$2y$10$fonJEbKK5EcMOQFjy456Ge8gCQ6FDQyZwFzJ9E7C/dufqcR/3EAgS',2,3,NULL,'2018-06-02 12:31:55','2018-06-02 12:31:55',0),(9,'Юрий Геннадьевич Анашенков','u.gennadevish','$2y$10$ajpa.ioG1k8v6SOJ07aHPO5a8ta0de7h7ZxRjzH58axCId20Mu8By',0,2,NULL,'2018-06-03 04:04:04','2018-06-03 04:04:04',1),(10,'Тлебалдин Батырхан Маханович','b.tlebaldin','$2y$10$NoyUdKj32ElS4TwfFrnSKuxDU1R95F0BY1GwrtLcd.vSJ/9kfyeTi',0,2,NULL,'2018-06-03 04:10:27','2018-06-03 04:10:27',1),(11,'Кошаманова Шолпан Алмаханкызы','sh.koshamanova','$2y$10$eFZFE8OLgKQWISe9r1km4eCvxinT2Ife8RsKMsmHWl/dJ1RDF08e.',0,2,'','2018-06-03 04:16:30','2018-06-03 04:16:30',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-06-16 13:34:02
