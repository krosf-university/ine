DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgurl` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `discountPercent` int DEFAULT NULL,
  `discountStart_at` datetime DEFAULT NULL,
  `discountEnd_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Invertocat','Invertocat is in stealth mode and is ready for primetime, now with a stylish, more visible front logo','img/product-000001.jpg',25.00,10,'2020-11-13 22:44:01','2020-11-16 23:02:47','2020-11-13 22:44:08','2020-11-13 23:02:55'),(2,'Arctocat','We\'ve crafted a shirt for the gifted engineers of the world. The overachievers with a flair for defiance. You know, the type of individual that can forge a mechanical suit from a few pieces of scrap metal and a chunk of palladium. Pay homage to apex hardware hackers and the Invertocat while keeping the shrapnel at a safe distance with our Arctocat tee in navy. As always, printed on a high quality American Apparel shirt.  ','img/product-000002.jpg',25.00,20,'2020-11-13 00:18:21','2020-11-18 00:18:25','2020-11-14 00:18:48','2020-11-14 00:18:51'),(3,'I [octocat] Code','In the beginning, there was the I :octocat: code shirt. Games were changed, paradigms were shifted, and codes were octocatted.','img/product-000003.jpg',25.00,40,'2020-11-13 00:18:30','2020-11-19 00:18:39','2020-11-14 00:18:44','2020-11-14 00:18:46'),(4,'GitHub Username','Do you wish you could turn your clothing into a personal billboard for your GitHub username or project name? Now you can share your open source love right on your back!','img/product-000004.jpg',25.00,NULL,NULL,NULL,'2020-11-14 00:19:21','2020-11-14 00:19:24'),(5,'Atom','Impress friends, family, and fellow time travelers alike with this futuristic Atom shirt. Join the Atom revolution!','img/product-000005.png',25.00,NULL,NULL,NULL,'2020-11-14 00:19:56','2020-11-14 00:19:58');
