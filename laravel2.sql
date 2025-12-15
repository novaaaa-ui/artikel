-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: laravel2
-- ------------------------------------------------------
-- Server version	8.0.30

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
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `articles_slug_unique` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Web Design','web-design','red','2025-12-02 23:37:10','2025-12-02 23:37:10'),(2,'UI UX','ui-ux','green','2025-12-02 23:37:10','2025-12-02 23:37:10'),(3,'Machine Learning','machine-learning','blue','2025-12-02 23:37:10','2025-12-02 23:37:10'),(4,'Data Structure','data-structure','yellow','2025-12-02 23:37:10','2025-12-02 23:37:10');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2025_11_07_073325_create_posts_table',1),(6,'2025_11_11_020749_create_categories_table',1),(7,'2025_12_02_015701_create_articles_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_author_id` (`author_id`),
  KEY `posts_category_id` (`category_id`),
  CONSTRAINT `posts_author_id` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`),
  CONSTRAINT `posts_category_id` FOREIGN KEY (`category_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'Reprehenderit optio ipsam earum.',3,3,'vitae-animi-ipsum-corrupti-veritatis-autem-eum','Adipisci eos autem aliquid illo. Repudiandae ipsa vel distinctio ipsam doloremque esse voluptates.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(2,'Aut in ut eum molestiae non ea soluta.',4,4,'molestiae-magnam-quisquam-aut','Necessitatibus at distinctio voluptatem quae fuga et. Officiis ea qui ut in quae sequi molestias. Animi esse et asperiores quos.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(3,'Dolorem veniam iste et aliquam et ipsam delectus.',1,2,'incidunt-quis-est-sit-id-labore-est-aliquam','Tempora voluptas fugiat vel id maxime pariatur et sunt. Aut dicta autem maxime omnis. At molestias distinctio vero eum. Corrupti non ullam id neque incidunt.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(4,'Distinctio sunt aut eos voluptatem quia maiores tenetur.',3,2,'asperiores-consequuntur-magnam-quia-iste','In commodi et quisquam eum repellendus nulla. Eaque ea eos omnis nulla reprehenderit aliquid eos hic. Iusto ullam fugiat at temporibus libero maiores.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(5,'Et ut est esse numquam.',1,4,'dolores-ut-in-aut-placeat-aspernatur','Minus doloremque aspernatur sed quaerat molestiae. Nobis quae tempore ut enim consequatur. Ut at vel dolorem soluta commodi. Voluptatum sunt harum enim. Rem itaque est a expedita placeat.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(6,'Ipsum ab molestiae recusandae eligendi.',4,4,'amet-tempora-ratione-est-quasi-nulla-doloremque','Est animi id harum eos consectetur repellat labore. Perspiciatis repellat voluptatem dicta dolores. Animi asperiores facilis sed omnis est aut. Magni repellendus velit quia.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(7,'Maiores consequatur aut qui vitae reprehenderit.',5,1,'eos-sit-sunt-sed-consequatur-id-aut-qui','Vel eligendi ut laborum aspernatur quia totam harum. Numquam autem voluptas qui aut nisi. Voluptas tempore blanditiis aut reprehenderit nihil perspiciatis. Voluptatibus ducimus et eaque enim facere.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(8,'In quia dignissimos sint vero.',3,2,'est-omnis-quia-minima-et-dolore-aut','Quis corrupti fuga quaerat hic aperiam iure suscipit dicta. Culpa et molestiae hic similique aperiam ipsam. Maxime quos quis minus autem.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(9,'Exercitationem sed nihil distinctio quia ut soluta sint.',1,1,'reiciendis-molestias-vitae-ipsam-vero-id-totam','Et cupiditate veritatis nostrum voluptate. Alias et ut fugiat. Rem repudiandae qui provident commodi nemo distinctio quasi. Vel quis rem aut est asperiores voluptatem.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(10,'Maiores sunt expedita dolorem impedit.',5,1,'et-illo-aliquid-in','Quo sit ut incidunt tenetur. At eos et ad beatae accusantium eveniet nemo veniam. Cumque similique temporibus fuga in est. Quo eaque accusamus beatae laboriosam est tempora.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(11,'Quidem dolores aut in iure est iure quo delectus.',3,2,'minus-non-qui-alias-quam','Distinctio rem aut nihil in aut. Ipsa dolore est sed eveniet sint sit.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(12,'Doloremque tempore nobis et in tenetur.',2,3,'architecto-corporis-ad-saepe-magni-ducimus-dolorem','Ratione officiis ipsa et voluptatem id nobis. Corporis assumenda est sunt consectetur. Maiores assumenda tenetur magnam quia et. Modi qui voluptatem blanditiis nihil porro voluptatem placeat dolorem.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(13,'Quis voluptas autem in dolorem totam quos.',2,4,'magni-voluptas-ipsa-earum-molestiae-sint-aperiam','Ipsam unde et voluptas cumque. Quibusdam nihil sunt eos voluptas voluptatem alias. Et voluptate minima quas aut sit molestiae minima. Totam eligendi quam quaerat et alias voluptatem quia.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(14,'Pariatur natus vel voluptates velit praesentium id officia recusandae.',5,2,'et-laboriosam-quas-rem-sit','Nulla voluptates recusandae molestias. Facilis aut aliquid dicta molestias molestiae. Et et non qui quis.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(15,'Fuga eveniet dolores voluptas mollitia est sit inventore.',5,2,'quam-enim-aut-enim-nihil','In tempora magni nesciunt aut harum in maxime. Qui voluptate earum est dolores impedit. Eos nemo temporibus qui incidunt necessitatibus. Cum est voluptates qui labore maiores.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(16,'Quis maiores aut quas sapiente architecto.',4,3,'quia-dolor-qui-sequi-architecto-aut','Adipisci est voluptates eum explicabo est ut. Molestiae molestias deserunt dolores aut quo magnam voluptates.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(17,'Aut debitis non magni cum voluptatem.',2,4,'ut-sunt-omnis-asperiores-dicta','Quae quos eos rerum et a porro. Facilis distinctio ipsam est nulla. Non error aut consequatur nam ipsam aperiam deleniti.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(18,'Nobis quaerat laudantium dignissimos suscipit accusantium qui dolores.',4,2,'repudiandae-blanditiis-impedit-voluptate-deleniti-qui','Nemo aut molestiae deserunt. Quas doloribus cum dolor voluptatibus. Minima neque est repellendus tempore. Quis pariatur incidunt quos quaerat.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(19,'Itaque perferendis quisquam qui esse repudiandae est.',4,1,'et-voluptatibus-possimus-nobis-quo','Eius hic modi velit. Voluptates perferendis reiciendis qui mollitia nam officiis illo iure. Officia animi dolores dolores eveniet perferendis.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(20,'Dolorem eum unde maiores magnam cum quo quam.',2,1,'asperiores-sunt-ut-ad-doloribus','Sed magnam odit asperiores incidunt sed. Repellat quia adipisci dolorum quos occaecati cum eius explicabo. Ea veniam ducimus nihil dolore veniam non eos.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(21,'Pariatur illum impedit et aut nostrum ut nam.',1,3,'quo-ea-pariatur-natus','Sint minus sed laborum ex sed itaque. Optio odit voluptatem consequatur est omnis. Ut ad in ut velit sed quia. Ut eligendi illum doloremque sapiente est suscipit provident molestiae.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(22,'Quod neque quas possimus doloribus et dolor voluptate.',1,3,'eum-quisquam-perferendis-vero-maxime-perspiciatis-explicabo','Quasi et animi vitae cupiditate a fugiat maiores omnis. Reprehenderit commodi alias porro quidem. Quis qui adipisci qui. Distinctio consequatur error possimus aut.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(23,'Odio et voluptate soluta iste reiciendis.',4,4,'sit-doloremque-rerum-quis-aut','Debitis rem et a ea est. Et veniam rerum blanditiis nihil error. Fugit nemo facere animi qui qui.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(24,'Sit sequi sint ab odit atque quo suscipit.',5,1,'quia-molestias-et-deleniti-quod-fuga','Cupiditate ut magni et consequatur nihil facere ab. Et officia repudiandae quae eos ut id quam laborum. Aut ea ab delectus mollitia qui neque. Laudantium aut molestias quod laborum.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(25,'Maxime quidem labore cupiditate fuga corrupti.',3,1,'quo-sint-ut-aliquid-aut-et-iste','Inventore neque doloremque veniam quia. Laudantium et ea quis nulla id. Aliquam id repellendus totam voluptatem. Deserunt dolorum fuga ipsam ut.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(26,'Doloribus repellendus veritatis nostrum id nemo voluptates.',4,2,'fuga-eaque-ut-et-reiciendis-et-quia','Et voluptatem nisi architecto placeat. Sint est aut aspernatur veritatis laboriosam sit. Minus magnam voluptatem sit est ipsa. Quis laborum ab et et. Ut animi quis nesciunt et qui ducimus.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(27,'Eligendi pariatur reprehenderit autem.',2,1,'tempora-in-dolores-earum-natus-neque-quis','Aperiam ut mollitia accusamus ratione omnis similique necessitatibus. Molestiae dolorem nobis hic dolore repudiandae. Dolores harum rerum culpa ea.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(28,'Dolorum amet quod rerum.',1,1,'ipsam-consequatur-quaerat-quis-placeat-nemo-velit-omnis','Et officiis dolorem dolores ut in alias. Minima veniam quaerat officiis autem. Perspiciatis quasi et fugiat laudantium et. Accusantium delectus odio dolores esse omnis fugiat quasi.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(29,'Repellat iure sit laborum doloremque veritatis commodi.',2,4,'et-temporibus-delectus-corporis-rerum-dolorem-harum-voluptatem','Rem qui fuga officia corporis hic nihil voluptatum temporibus. Nisi aperiam optio illum dolorem. Dolores delectus at harum temporibus id.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(30,'Qui occaecati sed magni ut unde.',1,1,'ipsa-magni-excepturi-aliquid-corporis-similique','Eligendi et fugit unde similique nemo. Natus qui vel autem optio doloribus. Nihil architecto aliquam eos natus dignissimos et. Autem esse architecto quia quod et deserunt molestiae.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(31,'Cumque voluptas accusamus distinctio minus.',5,1,'sint-sequi-optio-in-consectetur-id-officiis-excepturi','Aut unde qui delectus sed praesentium. Similique ab dolorum odio qui. Temporibus excepturi ut et deserunt. Aut a necessitatibus dolorem odio velit porro voluptatem.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(32,'Eaque in quia nisi quam.',2,1,'possimus-et-voluptas-illo-maiores-hic-eius-perspiciatis-ut','Praesentium magni at ducimus. Ducimus qui voluptatem ut vitae. Minus est et alias tenetur eveniet. Quis at consequuntur sunt occaecati.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(33,'Velit quo ea pariatur reprehenderit.',3,3,'est-dolores-minus-atque-suscipit-deserunt-impedit','Alias non sit eaque perspiciatis quis dolor ipsam est. Non error veniam magni et quis. Qui quas ducimus sed dolore accusantium.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(34,'Quod sit omnis aut voluptatem.',2,2,'aut-sunt-ut-eius-explicabo-illo-officiis','Quia in dicta in sed. Quod necessitatibus fugiat voluptates vitae recusandae. Aperiam omnis beatae sed qui et veritatis et voluptatem.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(35,'Atque possimus eveniet fugiat quas vero animi est.',2,3,'repellendus-atque-porro-veniam-maiores-et-praesentium-veniam-quos','Natus officia suscipit ducimus eum facilis nemo. Ab voluptatum culpa eum consequuntur accusamus tenetur. Aperiam enim deserunt dolor ex. Aut fugiat est non voluptate debitis.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(36,'Labore exercitationem laboriosam libero reprehenderit quos inventore.',1,3,'tempora-voluptates-eaque-nobis-accusamus-possimus-excepturi-atque-nobis','Quo odit iste non doloremque repellat totam. Aut et voluptatem quam dignissimos. Ducimus perspiciatis temporibus voluptate officia est aut architecto.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(37,'Perspiciatis recusandae hic rerum eum.',3,2,'sunt-iusto-veritatis-quos-eum-omnis-nisi','Officiis sit incidunt possimus. Animi necessitatibus maiores eum omnis ea quo.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(38,'Impedit nostrum ducimus nobis error.',1,1,'est-hic-praesentium-sapiente-vero-nostrum-enim-expedita','Sit pariatur est nemo voluptas. Consequatur eos porro rerum vero eos sed excepturi. Iste eaque et quia aliquam tempore reprehenderit. Sed nesciunt accusantium eum omnis porro.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(39,'Est suscipit nesciunt harum ea amet est assumenda.',2,3,'est-quis-vero-ut','Ducimus hic vero totam iure itaque delectus. Aut voluptatibus quae eum nostrum atque. Quis voluptas voluptatibus suscipit aliquid. Earum sed officia nisi nobis.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(40,'Fugit a illum amet id itaque quibusdam.',1,4,'similique-voluptas-maxime-repellat-praesentium-animi-perferendis-laborum','Dolorem quae autem non consequatur quod ipsam rerum. Aut nobis quae quia aut natus doloremque. Eveniet quia sed repellat autem ut mollitia.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(41,'Quisquam non illo dolor totam.',3,2,'voluptates-iste-dolores-velit-consequatur-inventore-odio','Sint nobis reiciendis a soluta tempora saepe. Quae eaque voluptates quos blanditiis. Numquam suscipit expedita occaecati eum.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(42,'Doloremque quibusdam quaerat at vero.',4,1,'sed-excepturi-pariatur-in-omnis-consectetur','Possimus repellendus repudiandae non reiciendis. Dicta dignissimos in sint vero odit eaque quo. Quod iste facere nemo eum esse suscipit.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(43,'Impedit unde velit voluptas.',2,3,'provident-distinctio-tenetur-inventore-magnam','Ut dolorem numquam doloremque odio reiciendis explicabo modi. Et dolores vel sint. Minima corporis architecto aliquam officiis ut. Quia quia et architecto aut temporibus doloribus accusamus et.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(44,'Et odio minima quod enim neque nulla sed.',1,1,'dicta-necessitatibus-aut-veniam-corrupti-dolore-id-est','Et voluptatum et alias cupiditate. Laboriosam in modi veritatis et veniam recusandae.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(45,'Optio rerum quidem repellendus voluptas ad officiis corporis eaque.',3,4,'aut-quisquam-nihil-odit-et-dicta','Ut porro vitae nemo earum sint et maxime. Assumenda corrupti soluta reiciendis velit ipsam. Blanditiis quia qui totam illo quas ducimus ut. Aut amet aut eaque omnis beatae commodi.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(46,'Assumenda laboriosam voluptatem et.',5,2,'accusamus-nam-laboriosam-eius-ut-quidem','Quasi reiciendis culpa ut accusamus consequatur suscipit vero. Nisi maxime at exercitationem et quo ea. Reiciendis possimus aperiam quia. Maxime sequi et earum aspernatur ullam.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(47,'Occaecati consequatur tempore praesentium sit laborum.',4,2,'reprehenderit-mollitia-numquam-eum-sint','Qui id error nulla. At voluptas voluptates ipsam a molestias consequatur. Qui non quae qui porro non reprehenderit est reprehenderit. Dolorum quia provident itaque consequatur quia hic.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(48,'Nihil illum id eligendi sit in.',4,1,'architecto-ea-tempore-ut-et','Aut reiciendis nobis neque vero debitis ut. Non laudantium dolores blanditiis in ducimus est perspiciatis. Officiis molestiae ea velit eligendi ut molestiae iure quos.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(49,'Rerum animi praesentium nisi deleniti quaerat enim non sed.',5,2,'alias-est-sequi-aut-sit','Voluptatem omnis vel pariatur dolore sed repellendus. Neque et harum qui delectus illo laudantium blanditiis. Eligendi ut hic consequatur repudiandae mollitia accusantium.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(50,'Aperiam quia numquam maiores quo et voluptates.',4,1,'voluptatibus-sed-veritatis-ab-est-et','Dolor incidunt ut ipsa maiores recusandae. Temporibus explicabo voluptatem eos libero est. At unde quia quia consequatur.','2025-12-02 23:37:10','2025-12-02 23:37:10'),(51,'Doloremque consequatur debitis repudiandae temporibus aspernatur fugiat.',3,2,'maxime-exercitationem-enim-inventore-facilis-totam-maiores-consequatur','Unde veritatis provident repellendus vel hic dicta asperiores. Ut rerum pariatur illum rerum commodi eum odio minus. Sed sit nemo cumque vel consectetur est repellendus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(52,'Consequatur est ullam et id quia debitis.',4,2,'libero-veritatis-quis-ea-et','Dolor ut omnis est voluptas in aspernatur suscipit. Eum illum eaque error et beatae.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(53,'Molestias nemo sunt velit iure impedit et.',2,1,'iste-omnis-quod-qui-ut-recusandae-error-cupiditate','Temporibus et velit ut. Officia expedita ipsum et sunt nesciunt eius. Facere velit error in nesciunt expedita esse. Ab nobis nemo libero.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(54,'Maiores unde officia suscipit minima minima rem.',5,2,'delectus-perspiciatis-distinctio-nobis-tempore-numquam-dolor-qui-illo','Et vitae vel perferendis quidem ipsa earum impedit et. Accusantium consequatur id veniam reiciendis corrupti excepturi. Sapiente aliquid error et cum. Exercitationem laboriosam possimus quia unde.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(55,'Exercitationem eos iste excepturi expedita impedit dignissimos natus.',1,3,'cumque-officia-vel-aut-deserunt-tempora-sit-enim-adipisci','Non molestiae possimus perspiciatis incidunt sint corporis quasi exercitationem. Porro debitis excepturi doloribus velit.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(56,'Quo harum non et eveniet sunt quia.',3,4,'occaecati-maiores-eum-voluptatem-porro-quidem','Commodi sed delectus quam voluptatem alias. Sit ut adipisci omnis voluptatum illum. Eos non saepe omnis non voluptatem.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(57,'Voluptatem dolorem et sint rerum alias velit velit.',2,4,'impedit-debitis-est-ut-et-nemo-quaerat-blanditiis-optio','Sunt aut magnam tempore sit numquam. Est in vel cumque officiis rerum assumenda explicabo. Consequatur nobis sit temporibus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(58,'Officia quibusdam eos praesentium accusantium consequatur.',1,2,'nisi-qui-sint-temporibus-iure-debitis','Cupiditate itaque minima quia quia et. Et repellat ratione corporis sapiente officia autem voluptate sint. Accusantium inventore officiis eos minima nesciunt. Optio et quos quibusdam esse voluptatem.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(59,'Ut sapiente nihil exercitationem accusamus aut ad.',1,1,'quis-dolor-magnam-sequi','Est velit repellat neque ipsum fugit dignissimos cum. Est voluptatem ad repellat rerum. Culpa aut quam aut ut qui aliquam qui facilis.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(60,'Sint nisi deleniti quia vel in nihil.',1,3,'et-vero-similique-iusto-dolorem-quod-rerum','Id praesentium odit repellendus aut cupiditate asperiores. Distinctio corrupti fugit quae non. Voluptas debitis minima voluptate dolorem et. Non cumque a voluptatem est at est.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(61,'Sunt molestias quas perferendis aut autem.',1,4,'debitis-quia-pariatur-reiciendis-quis-ea-est-quidem-praesentium','Sunt totam ea accusamus qui deleniti. Ex blanditiis deleniti voluptates doloribus quasi eum et id.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(62,'Facilis autem cupiditate minus quis.',4,1,'qui-quis-nulla-aut','Recusandae quis autem molestias velit recusandae tenetur. Culpa facere et excepturi culpa. Aut dolores omnis aspernatur. Rerum modi ipsa mollitia at quis. Ipsam et tempore et rem ab voluptatem.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(63,'Quae dolores dicta nihil nihil omnis at.',1,4,'est-praesentium-quia-voluptas-mollitia','Sunt consequatur nam id iusto odit. Corrupti sint facilis nihil ut voluptatem. Et quo optio commodi. Rerum maxime culpa accusamus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(64,'Enim amet consequuntur cupiditate qui maxime est nihil nisi.',3,4,'ipsa-rerum-officia-consequatur-est-voluptatem-qui','Fugit ut earum est sed. Voluptatem sunt odit doloribus placeat ullam. Aut nesciunt est ipsum ad. Reprehenderit dolorem architecto placeat temporibus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(65,'Eos quasi et necessitatibus accusantium perspiciatis eveniet nobis.',3,1,'ratione-magnam-asperiores-eligendi-esse','Autem harum ex ad voluptatem non. Nihil architecto rem odit maiores architecto consequatur. Quasi alias recusandae vel error.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(66,'Itaque officiis laudantium esse rerum.',5,4,'suscipit-autem-magni-aut-quae-id','Id dolore ex adipisci dolor. Voluptatem iure et corrupti deleniti omnis et.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(67,'Quidem optio voluptate impedit autem et consequatur reprehenderit.',3,1,'ea-qui-in-id-provident-illum-animi-qui','Fugit qui rem consectetur impedit qui. Quod ipsam dolore et temporibus molestiae animi reprehenderit. In perferendis iure nemo. Esse fuga error laboriosam et qui. Eum fugit ab et est.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(68,'Eos sit ratione cumque voluptatum ut maiores sed rerum.',2,2,'autem-illum-quis-modi-error-debitis','Voluptates veritatis sed voluptas praesentium laudantium. Est tempora voluptas officia incidunt veniam quod ea. Id et at quia unde.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(69,'Exercitationem consequatur perferendis illum.',5,2,'quia-voluptatum-deserunt-modi-delectus','Facere aperiam maxime voluptatem odio id et eaque. Voluptas occaecati harum et mollitia eum delectus illum. Porro nihil id quo animi sit aperiam et. Voluptas sed eveniet delectus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(70,'A labore dicta iusto quam rerum quod illum illum.',5,4,'eos-autem-rerum-eos-earum','Labore corporis ad non error. Iste laborum hic perspiciatis dolorem quisquam eum. Labore quo quas fugit velit adipisci iste temporibus eligendi.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(71,'Assumenda error qui non velit.',5,1,'et-veritatis-perspiciatis-nostrum-in-molestias-modi-omnis-autem','Sint nemo voluptas officiis ab omnis quas omnis. Inventore officia harum incidunt consequatur exercitationem ea. Ut quas qui sed non. Assumenda ut nobis mollitia.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(72,'Error et voluptatem quisquam alias voluptatem minima recusandae labore.',4,1,'aut-quam-dolorem-quas-eum-blanditiis-vitae','Ea temporibus minus unde voluptates. Ipsa et quisquam iste reiciendis. Quod enim totam error.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(73,'Provident hic quasi officia maxime cum.',3,2,'qui-sed-cumque-eos-ratione','Aut et quisquam est officia suscipit amet. Aut voluptatum soluta dolorum illum quae tempore. Omnis veniam atque voluptatibus sint praesentium. Ab nobis deleniti corrupti doloremque.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(74,'Ut et et omnis nihil sit reiciendis amet.',5,4,'eum-est-sint-similique-quo','Unde magnam enim nulla consectetur dolorem voluptate. Consequuntur enim est amet nihil. Ullam vitae ducimus et delectus non.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(75,'Sit vitae autem aut dignissimos quod occaecati consequatur.',2,3,'vel-hic-aspernatur-magnam-aut-nulla','Ipsam nostrum tenetur quidem nobis ipsa id. Suscipit modi veritatis ipsa quia fugiat. Dolor esse occaecati doloremque quod quia commodi. Dicta architecto explicabo qui quos.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(76,'Pariatur beatae nemo et distinctio.',3,4,'eos-repudiandae-a-ducimus-exercitationem-dolores-ad','Reprehenderit consequatur eveniet dolor iusto vitae amet. Ratione magnam excepturi sunt labore nobis. Eos eum natus hic aut voluptates maiores.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(77,'Iusto quia et iure aut placeat.',5,3,'praesentium-amet-nobis-sit-fugit-quia-maiores','Error quia odit cum sunt. Dolore dolores quis ut dicta aperiam. Dicta sapiente et illum enim quia voluptatem. Magnam quia qui iure aspernatur nihil ea expedita.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(78,'Deserunt accusamus sit aspernatur ullam.',2,2,'pariatur-doloribus-recusandae-eveniet-nesciunt-voluptas-cupiditate-vitae-inventore','Est reprehenderit molestiae fugiat quia necessitatibus animi ad. Eum natus aut aspernatur commodi et.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(79,'Beatae explicabo non praesentium aut odit atque quibusdam expedita.',1,1,'vel-sit-fuga-ad-aperiam','Quia sit veritatis ut quisquam laborum. Fugit quam aut recusandae et minus. Aut id consequatur rerum sit.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(80,'Vel laboriosam magnam exercitationem rerum.',4,3,'et-laudantium-illum-saepe-accusantium-aperiam-ex-quibusdam','Voluptatem veniam nihil dolor et cumque. Earum nihil quae voluptas. Et est dolores possimus repellendus enim quod earum. Accusamus ex ipsam adipisci ut deleniti.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(81,'Dolorem cum mollitia quia rerum ut.',5,2,'perspiciatis-qui-recusandae-fuga-tenetur','Sed qui officia dolorem provident dolorem non. Exercitationem quia rerum labore non. Voluptas vel ut ducimus ea voluptas sed voluptas.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(82,'Explicabo aperiam adipisci repellendus dolorem recusandae dolorem alias.',1,3,'exercitationem-similique-temporibus-perferendis-aut-consequatur','Laboriosam temporibus incidunt ex sequi qui consequatur. Dolores et laboriosam est sunt. Aliquid quos quod qui fugit officia nisi minus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(83,'Sed aspernatur non temporibus cupiditate ut vel labore.',3,2,'aut-laborum-facilis-accusamus-accusamus-quasi-aut-error','Alias nisi quos nihil labore qui velit neque. Est voluptatem quaerat culpa perferendis. Aut consectetur enim sit necessitatibus delectus libero molestias. Porro dolorem qui sit eos esse ipsum.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(84,'Rem deserunt aperiam sed esse alias voluptatem.',4,3,'ea-aut-minus-quam-et-voluptatem-officiis-aliquam-consequatur','Non rerum corrupti suscipit aut. Consectetur dolorum repellendus eligendi architecto harum corrupti. Consequuntur quo quisquam est nemo sed quidem. Saepe animi eos sunt amet.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(85,'Aut unde et porro alias dignissimos dolores.',1,4,'est-facilis-praesentium-est-eum-eum','Temporibus harum vel autem sit debitis est amet. Beatae voluptatem quibusdam et ut voluptatibus distinctio fugiat. Libero reiciendis placeat et quam possimus accusamus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(86,'Repudiandae officiis adipisci ipsam sed expedita eos qui.',2,3,'corrupti-aut-voluptatem-neque-modi','In a aliquam eius animi deserunt. Cum corporis itaque aut officia saepe. Eum cum mollitia explicabo facere in sunt. Labore et provident necessitatibus quaerat commodi ipsam pariatur.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(87,'Et omnis velit nesciunt molestias velit.',2,3,'aut-vitae-iste-dolorem-sit-voluptas','Exercitationem commodi harum recusandae est. Asperiores est rerum dolorem. Quia voluptatum fuga laboriosam nostrum consequatur earum velit.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(88,'Ea aut enim fugiat repellendus sapiente dolore quaerat.',4,4,'sit-ea-ea-dicta','Omnis fugiat sunt in hic minus necessitatibus ea. Qui aut debitis ut aliquam sequi. Ipsam rem totam cum est reprehenderit totam qui.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(89,'Incidunt et corrupti asperiores asperiores esse ea.',2,2,'dicta-rem-tempora-soluta-quia','Voluptatum voluptatem enim ut quisquam est sequi. Facere odit vel sed molestias enim ut. Officia expedita placeat ab excepturi velit quibusdam.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(90,'Porro architecto ipsum rerum quos ut saepe.',2,4,'asperiores-mollitia-alias-magnam-quas-ut-et','Deleniti aut aut nihil veritatis. Dolores eum repellat quae repellendus. Perferendis omnis quia odit suscipit. Eum veritatis id officia.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(91,'Totam nihil et assumenda soluta voluptatem repellendus debitis.',3,1,'facere-totam-error-dicta-voluptatem','Sunt tempora dicta placeat nihil. Quisquam et necessitatibus eum possimus neque ipsa in aut. Nulla architecto consequatur ipsum minima. Amet aut non dolorem non error maiores quo maiores.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(92,'Eum dolorem perspiciatis quae.',4,2,'eum-dolor-optio-laboriosam-consectetur-quia','Esse labore nesciunt necessitatibus omnis officia rerum optio. Corrupti et aut nihil totam. Fugit et ex enim reprehenderit sed. Non aut et possimus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(93,'Sint eum doloribus quibusdam eos.',3,3,'illo-reprehenderit-tenetur-assumenda-atque-repellendus','Est numquam nam voluptate error est commodi voluptas. Harum voluptas voluptatem eos eligendi. Dignissimos dolorem consequatur dicta soluta magnam sed earum nostrum.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(94,'Nihil recusandae ut nisi illo quo consequatur eveniet.',3,4,'accusamus-perferendis-perspiciatis-enim-iure-repudiandae-quae-in','Labore velit a et amet quisquam quis. Optio provident non placeat omnis. Aut fuga impedit aspernatur aliquid vero mollitia. Ea ut magni accusantium consequatur atque.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(95,'Et quasi omnis quia voluptatem id.',2,3,'explicabo-ipsa-velit-dolores-amet','Impedit molestias dolorum saepe debitis voluptas voluptatibus. Et sed sit aliquid est.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(96,'Quo tenetur dolor eos iste explicabo cum.',3,3,'fugiat-in-nihil-beatae-ut','Aut vero perferendis ab cumque nobis. Autem itaque qui recusandae rerum. Adipisci ad saepe deserunt rerum assumenda repellendus.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(97,'Ex possimus ipsum quis officia rem.',1,1,'praesentium-illum-ut-debitis-tenetur-consequuntur-placeat-at-numquam','Iste ut assumenda esse sequi. Corrupti doloremque voluptatum facere placeat. Tempora iusto in architecto quaerat aut. Voluptatem qui quod qui.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(98,'Exercitationem et et explicabo tempora excepturi architecto quis.',4,4,'perferendis-maiores-dolor-voluptatem-libero-a-fugiat-animi','Qui ea totam iste assumenda nesciunt. Est a expedita earum ullam. Ea consequatur veniam fugiat ut optio. Inventore ut dolores ullam ratione.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(99,'Nam aperiam ut aut nisi.',1,1,'dolorum-repudiandae-nesciunt-omnis','Sit amet nihil repellat et culpa et qui. Eos similique dignissimos sint quod saepe facere ea qui. Incidunt impedit aut vero quos soluta doloribus rerum temporibus. Aliquam est at et deleniti.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(100,'Magni eligendi quo error consequatur dignissimos et soluta blanditiis.',4,2,'nulla-veritatis-qui-laboriosam-velit-voluptates','Inventore est non voluptatem a cum. Facere aut dolor laudantium qui. Quae et non dolorum corrupti. Recusandae omnis ab aliquam rerum quis perspiciatis dolores.','2025-12-02 23:37:11','2025-12-02 23:37:11'),(101,'Pentingnya Pola Tidur yang Sehat',6,3,'pentingnya-pola-tidur-yang-sehat','Tidur adalah kebutuhan manusia yang sangat penting untuk menjaga kesehatan fisik dan mental, karena saat tidur organ tubuh kita juga beristirahat. Kalau kamu tidak tidur, pasti kamu akan merasa kelelahan dan bisa menyebabkan kematian lho.','2025-12-03 01:29:37','2025-12-04 18:37:30'),(104,'Peran Media Massa dalam Pemberantasan Pungutan Liar',2,1,'peran-media-massa-dalam-pemberantasan-pungutan-liar','Pungutan liar (pungli) memang berkelindan dengan korupsi. Mereka serupa tapi tak sama, ada tapi tak kasat mata, merajalela tapi tetap dimaklumkan, seolah hal tersebut sudah biasa terjadi.','2025-12-04 23:16:25','2025-12-14 20:40:08');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','staff','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `status` enum('verify','active','banned') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Leanna Jaskolski','dedrick13','reggie30@example.net','2025-12-02 23:37:10','admin','active','$2y$12$bIyRtYimd51Y.FLcJbb2R.fosJwG4EkCqOJfEhAE5unRnhYwobpIS','dGNE1pCgIF','2025-12-02 23:37:10','2025-12-04 19:06:16'),(2,'Lucius Larson','jimmy56','christiansen.orval@example.com','2025-12-02 23:37:10','staff','active','$2y$12$HTPXWjIYakzizjOQBIfTV.VX.ow4Wv1i60zMxv1aaDJivgOMA/hiK','CUJ3nkedA4J3LVweyYXNMDkuE40ve3WCLUjBDqdv9C3cuOFAFj9mPjpZvSZq','2025-12-02 23:37:10','2025-12-04 22:59:40'),(3,'Dr. Neha Yundt MD','winnifred.hermann','emmanuelle86@example.net','2025-12-02 23:37:10','customer','active','$2y$12$d2.3Znf2p./lC0gjqMKOYuU2OcD./pKLJ7.UQQVDdnLlYKWENvCoi','afTbAptdtmAfR2eDEWUoSDjv0i6pBSZL3CrZWQ5wfMoBEeSQRn8HjuN4Oa1N','2025-12-02 23:37:10','2025-12-04 23:29:16'),(4,'Mrs. Anjali Heathcote III','zhoppe','edgardo74@example.net','2025-12-02 23:37:10','customer','active','$2y$12$ABllGy/kYGNbpCJFHZNhl.WmlHoX2gFDEJpieXOK/4DmgMgyyJsja','wQWqG3i0XgE7bxc1CTQjA0OpxSwCAXHakduhFKqspszU137AXbi9lRYMohkK','2025-12-02 23:37:10','2025-12-04 23:48:07'),(5,'Cydney Breitenberg','amely51','clara.leannon@example.net','2025-12-02 23:37:10','customer','active','$2y$12$IL47Z/07BySMo4ZFZvY2SOxncUvpISxqWQpo.jn59Hmmp7EUz.kHW','h2FmkaUHju','2025-12-02 23:37:10','2025-12-05 00:01:58'),(6,'Nova','nova','nova@example.com',NULL,'customer','active','$2y$12$pPcFwFrIvnu65I6iZzKqdOv/ESPQ10mz0oa/zmnijUUzNHORI8ps2',NULL,'2025-12-02 23:44:40','2025-12-02 23:44:40');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'laravel2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-12-15 11:29:20
