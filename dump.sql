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
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2023_11_15_213044_create_districts_table',0),(2,'2023_11_15_213044_create_roles_table',0),(3,'2023_11_15_213044_create_user_details_table',0),(4,'2023_11_15_213044_create_users_table',0),(5,'2023_11_15_213047_add_foreign_keys_to_roles_table',0),(6,'2023_11_15_213047_add_foreign_keys_to_user_details_table',0),(7,'2023_11_16_212621_create_districts_table',1),(8,'2023_11_16_212621_create_roles_table',1),(9,'2023_11_16_212621_create_user_details_table',1),(10,'2023_11_16_212621_create_users_table',1),(11,'2023_11_16_212624_add_foreign_keys_to_roles_table',1),(12,'2023_11_16_212624_add_foreign_keys_to_user_details_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `post_id` int NOT NULL AUTO_INCREMENT,
  `publication_tag` enum('WN','NS','TN') NOT NULL,
  `publication_document` varchar(255) NOT NULL,
  `front_page_image` varchar(255) DEFAULT NULL,
  `headline` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`post_id`),
  KEY `publication_tag` (`publication_tag`),
  CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`publication_tag`) REFERENCES `publications` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publications` (
  `publication_id` int NOT NULL AUTO_INCREMENT,
  `tag` enum('WN','NS','TN') NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `feature_image` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`tag`),
  UNIQUE KEY `publication_id` (`publication_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publications`
--

LOCK TABLES `publications` WRITE;
/*!40000 ALTER TABLE `publications` DISABLE KEYS */;
/*!40000 ALTER TABLE `publications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `role_id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` enum('subscriber','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'subscriber',
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
-- Table structure for table `subscription_packages`
--

DROP TABLE IF EXISTS `subscription_packages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_packages` (
  `package_id` int NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `duration_in_days` int DEFAULT NULL,
  PRIMARY KEY (`package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_packages`
--

LOCK TABLES `subscription_packages` WRITE;
/*!40000 ALTER TABLE `subscription_packages` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_packages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `subscription_id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subscription_date` timestamp NOT NULL,
  `expiry_date` datetime NOT NULL,
  `package_id` int NOT NULL,
  `active` bigint NOT NULL,
  `subscription_total` decimal(10,2) NOT NULL,
  PRIMARY KEY (`subscription_id`),
  UNIQUE KEY `unique_subscription` (`account_id`,`package_id`),
  KEY `package_id` (`package_id`),
  CONSTRAINT `subscriptions_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`),
  CONSTRAINT `subscriptions_ibfk_2` FOREIGN KEY (`package_id`) REFERENCES `subscription_packages` (`package_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
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
  CONSTRAINT `fk_user_details_account` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`) ON DELETE CASCADE,
  CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`),
  CONSTRAINT `user_details_ibfk_2` FOREIGN KEY (`district_code`) REFERENCES `districts` (`district_code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (3,'nss6556643379a5d','MZ','ZoloZolo, Botanic','Malawi','0996406730'),(4,'nss65566496d89c4','LL','Area 25, Botanic','Malawi','0996406730'),(5,'nss65566726a33ad','MA','Area 25, Bionic','Malawi','0996406730'),(6,'nss655667b9309dc','MA','Area 25, Bionic','Malawi','0996406730'),(7,'nss65568d937a2e5','BL','Area 25, Bionic','Malawi','0996406730');
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'FirstName1','LastName1','username1','email1@example.com','Company1','female','7c6a180b36896a0a8c02787eeafb0e4c','account1'),(4,'Angella','Kanene','Angelaa','angela@jolie.com','Company3','female','819b0643d6b89dc9b579fdfc9094f28e','account3'),(5,'FirstName4','LastName4','username4','email4@example.com','Company4','male','34cc93ece0ba9e3f6f235d4af979b16c','account4'),(8,'Ackim','Longwe','ackimjnr','acklongwe@gmail.com','cloud','male','1234','hash1d'),(9,'Angelina','Jolie','Angel','email@jolie.com','ABC Company','male','secretpassword','nss65563dd19e7fb'),(10,'Azana','Manda','aza','acklongwe@npl.com','ABC Company','female','$2y$12$w8cckW4HQDkugDH9RuH92uEju2FeVXc3RhN1aVs6p/rLWwv2wuLIi','nss65563ed534ec1'),(12,'Azana','Manda','azareali','acklonge@nspl.com','ABC Company','female','$2y$12$31SRQ75foThPWzeAU0CdxOj1vgMpSV2oWDdZl/kzjg2OC3N4D1zQS','nss6556643379a5d'),(13,'boogy','boogy','boogy','boogy@nspl.com','ABC Company','male','$2y$12$ZT7ZgRas97p9et5Lgj8yCuDQE5xSdUuhvokBHi/L0FI1j2.1gb3l.','nss65566496d89c4'),(14,'booogy','booogy','booogy','booogy@nspl.com','ABC Company','male','$2y$12$4y3xPzzmnrKGSY49w21JM.axzd7LCOdEhYOs0029a0LgXEPgFqmPm','nss65566726a33ad'),(15,'booogy','booogy','boooogy','boooogy@nspl.com','ABC Company','male','$2y$12$FfNBwoT/W8MyginM7tjxCuzAs2xCUHYakG1a31.z2X6HqNLo02VEK','nss655667b9309dc'),(16,'booogy','booogy','polon','polony@nspl.com','ABC Company','male','$2y$12$kjbbW6jIJpNZZKrl.TNMKuSnZlwXVYUBh8f667znB.nP2/nuRFahe','nss65568d937a2e5');
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

-- Dump completed on 2023-11-17 14:26:47
