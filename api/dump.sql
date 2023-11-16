-- MySQL dump 10.13  Distrib 8.0.35, for Linux (x86_64)
--
-- Host: localhost    Database: newspaper-subscription_system
-- ------------------------------------------------------
-- Server version	8.0.35-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `newspaper-subscription_system`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `newspaper-subscription_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `newspaper-subscription_system`;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `districts` (
  `district_id` int NOT NULL AUTO_INCREMENT,
  `district_code` varchar(30) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `region` enum('Northern','Central','Southern') NOT NULL,
  PRIMARY KEY (`district_code`),
  UNIQUE KEY `district_id` (`district_id`),
  CONSTRAINT `chk_region` CHECK ((`region` in (_utf8mb4'Northern',_utf8mb4'Central',_utf8mb4'Southern')))
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (89,'BA','Balaka','Southern'),(82,'BL','Blantyre','Southern'),(62,'CH','Chitipa','Northern'),(81,'CHI','Chiradzulu','Southern'),(87,'CK','Chikwawa','Southern'),(76,'DE','Dedza','Central'),(72,'DO','Dowa','Central'),(63,'KA','Karonga','Northern'),(69,'KS','Kasungu','Central'),(67,'LI','Likoma','Northern'),(74,'LL','Lilongwe','Central'),(78,'MA','Mangochi','Southern'),(75,'MC','Mchinji','Central'),(79,'MCA','Machinga','Southern'),(85,'MU','Mulanje','Southern'),(83,'MW','Mwanza','Southern'),(66,'MZ','Mzimba','Northern'),(68,'MZC','Mzuzu City','Northern'),(64,'NB','Nkhata Bay','Northern'),(90,'NE','Neno','Southern'),(70,'NK','Nkhotakota','Central'),(88,'NS','Nsanje','Southern'),(71,'NT','Ntchisi','Central'),(77,'NTC','Ntcheu','Central'),(86,'PH','Phalombe','Southern'),(65,'RU','Rumphi','Northern'),(73,'SA','Salima','Central'),(84,'TH','Thyolo','Southern'),(80,'ZO','Zomba','Southern');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2023_11_15_213044_create_districts_table',0),(2,'2023_11_15_213044_create_roles_table',0),(3,'2023_11_15_213044_create_user_details_table',0),(4,'2023_11_15_213044_create_users_table',0),(5,'2023_11_15_213047_add_foreign_keys_to_roles_table',0),(6,'2023_11_15_213047_add_foreign_keys_to_user_details_table',0);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(30) DEFAULT NULL,
  `role` enum('subscriber','admin') DEFAULT 'subscriber',
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `account_id` (`account_id`),
  CONSTRAINT `fk_account_id` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_details`
--

DROP TABLE IF EXISTS `user_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_details` (
  `user_detail_id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(255) NOT NULL,
  `district_code` varchar(255) NOT NULL,
  `physical_address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  PRIMARY KEY (`user_detail_id`),
  KEY `account_id` (`account_id`),
  KEY `district_code` (`district_code`),
  CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`),
  CONSTRAINT `user_details_ibfk_2` FOREIGN KEY (`district_code`) REFERENCES `districts` (`district_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `sex` enum('male','female') NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_id` varchar(255) NOT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `user_id` (`user_id`),
  CONSTRAINT `chk_sex` CHECK ((`sex` in (_utf8mb4'male',_utf8mb4'female')))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2023-11-16 10:22:31
