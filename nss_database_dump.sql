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
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
INSERT INTO `personal_access_tokens` VALUES (108,'App\\Models\\User','nss655b259740528','auth_token','df82b0ef4c73bcedcbbdda3a79cb2c140e2ab0911bbb7ed9a8e448315205f5cb','[\"*\"]',NULL,NULL,'2023-11-20 07:23:51','2023-11-20 07:23:51'),(109,'App\\Models\\User','nss655b259740528','auth_token','d6183750cebe45dc2f562ea939f6ce2b3b14e94c94bd1703c34b83a6e32a53a2','[\"*\"]',NULL,NULL,'2023-11-20 07:24:02','2023-11-20 07:24:02'),(110,'App\\Models\\User','nss655b259740528','auth_token','99dd355fbe4fb9be3564ce9137230b72715a5e64517d530d16c8f6855ee6fe16','[\"*\"]',NULL,NULL,'2023-11-20 07:25:45','2023-11-20 07:25:45'),(111,'App\\Models\\User','nss655b259740528','auth_token','4867e3ba7bc4843107ed70649332bd85fa329ecdcf0a6ac02839fec13697b3f2','[\"*\"]',NULL,NULL,'2023-11-20 07:25:51','2023-11-20 07:25:51'),(112,'App\\Models\\User','nss655b259740528','auth_token','04341e9e5d5373fa130cd1ce86a05d54546b0bfe0e9fbb0fb15fe533b44d4804','[\"*\"]',NULL,NULL,'2023-11-20 09:35:00','2023-11-20 09:35:00'),(113,'App\\Models\\User','nss655b259740528','auth_token','d2558a2b4ab259b91d6420def8a81ba677f503551497fdf1db9708e46a632daa','[\"*\"]',NULL,NULL,'2023-11-20 09:37:20','2023-11-20 09:37:20'),(114,'App\\Models\\User','nss655b45e8001ec','auth_token','e19b050052057b5d0e83fc4dec3a017c83c9f1270c82d99518c4451574feaeef','[\"*\"]',NULL,NULL,'2023-11-20 09:41:45','2023-11-20 09:41:45'),(115,'App\\Models\\User','nss655b45e8001ec','auth_token','bc614dbd178b0c6c045657c534b77809e9ea2ba11a4be4d9bbd29662783d1e9b','[\"*\"]',NULL,NULL,'2023-11-20 09:42:55','2023-11-20 09:42:55'),(116,'App\\Models\\User','nss655b46988884c','auth_token','680c2d4d065b55cfb0e98e7db5835445ee0b5261c74fa2ccb79e12a41db3a04e','[\"*\"]',NULL,NULL,'2023-11-20 09:44:41','2023-11-20 09:44:41'),(117,'App\\Models\\User','nss655b259740528','auth_token','5271b9d1e87262a1c50c46019bebec279ef1848469dbc4c86090320945a35559','[\"*\"]',NULL,NULL,'2023-11-20 09:46:02','2023-11-20 09:46:02'),(118,'App\\Models\\User','nss655b259740528','auth_token','632eca8d7c733985ed895056d3a84270b3bd0a728e40fb878b7cf321885e6fd1','[\"*\"]',NULL,NULL,'2023-11-20 11:24:19','2023-11-20 11:24:19'),(119,'App\\Models\\User','nss655b259740528','auth_token','257b94730721b7ff1f17ca7ef4effae0330974b1455a33693bfa3a75e6e5e6ce','[\"*\"]',NULL,NULL,'2023-11-20 11:26:21','2023-11-20 11:26:21'),(120,'App\\Models\\User','nss655b45e8001ec','auth_token','8996cdbf93a8472f1026f36784d310918790c0b81d99e7bf1f4bdc177c09ea02','[\"*\"]',NULL,NULL,'2023-11-20 11:31:25','2023-11-20 11:31:25');
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
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
-- Table structure for table `publication_access`
--

DROP TABLE IF EXISTS `publication_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `publication_access` (
  `access_id` int NOT NULL AUTO_INCREMENT,
  `account_id` varchar(255) DEFAULT NULL,
  `post_id` int DEFAULT NULL,
  PRIMARY KEY (`access_id`),
  KEY `account_id` (`account_id`),
  KEY `post_id` (`post_id`),
  CONSTRAINT `publication_access_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`),
  CONSTRAINT `publication_access_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `publication_access`
--

LOCK TABLES `publication_access` WRITE;
/*!40000 ALTER TABLE `publication_access` DISABLE KEYS */;
/*!40000 ALTER TABLE `publication_access` ENABLE KEYS */;
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
  `account_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `role` enum('subscriber','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'subscriber',
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `account_id` (`account_id`),
  CONSTRAINT `fk_account_id` FOREIGN KEY (`account_id`) REFERENCES `users` (`account_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (19,'nss655b259740528','subscriber'),(20,'nss655b45e8001ec','admin'),(21,'nss655b46988884c','subscriber');
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
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_details`
--

LOCK TABLES `user_details` WRITE;
/*!40000 ALTER TABLE `user_details` DISABLE KEYS */;
INSERT INTO `user_details` VALUES (34,'nss655b259740528','ZO','Old Naisi, Zomba, Malawi.','Malawi','+265882751146'),(35,'nss655b45e8001ec','BA','Mtandile','Malawi','0996406729'),(36,'nss655b46988884c','NB','Old Naisi, Zomba, Malawi.','Malawi','+265882751146');
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`account_id`),
  UNIQUE KEY `user_id` (`user_id`),
  KEY `users_email_index` (`email`),
  KEY `users_remember_token_index` (`remember_token`),
  CONSTRAINT `chk_sex` CHECK ((`sex` in (_utf8mb4'male',_utf8mb4'female')))
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (43,'Ackim','Longwe','Ackim','user@gmail.com','National Publications Limited','male','$2y$12$3oMn1FmKkVVJIfVNXW7Q0e4EBDyQulFcUnq4xdZ0bOcLRRUx2wpuq','nss655b259740528',NULL,NULL,'2023-11-20 07:23:35','2023-11-20 07:23:35'),(44,'Jones','Chikwezga','jones','admin@gmail.com','The fossil dream','male','$2y$12$CxOBZZzu.J73FSOvWYcHOOgo1e8s/F1PLJKcO1ygbt.IhbfGyudDm','nss655b45e8001ec',NULL,NULL,'2023-11-20 09:41:28','2023-11-20 09:41:28'),(45,'Ackim','Longwe','jana','jana@gmail.com','jana','male','$2y$12$HMek0dM.ucNlCw4p7il9seOtsCnfxrnQ9m8ZZgV6Z2nkQ0k956bMy','nss655b46988884c',NULL,NULL,'2023-11-20 09:44:24','2023-11-20 09:44:24');
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

-- Dump completed on 2023-11-20 15:42:47
