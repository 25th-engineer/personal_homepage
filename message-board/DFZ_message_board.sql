-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: localhost    Database: DFZ_message_board
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.16.04.1

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
-- Table structure for table `dfz`
--

DROP TABLE IF EXISTS `dfz`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dfz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nickname` varchar(255) NOT NULL,
  `content` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dfz`
--

LOCK TABLES `dfz` WRITE;
/*!40000 ALTER TABLE `dfz` DISABLE KEYS */;
INSERT INTO `dfz` VALUES (1,'2019-06-05 13:58:49','dsfdsf','gfdgfd'),(2,'2019-06-05 13:58:52','',''),(3,'2019-06-05 14:00:07','5656565','565656'),(4,'2019-06-05 14:00:12','',''),(5,'2019-06-06 02:24:04','',''),(6,'2019-06-06 02:27:10','',''),(7,'2019-06-06 02:29:54','',''),(8,'2019-06-06 02:31:25','',''),(9,'2019-06-06 02:34:54','',''),(10,'2019-06-06 02:35:02','wrerw','wrwer'),(11,'2019-06-06 02:35:16','',''),(12,'2019-06-06 02:36:12','刁肥宅','wertwetwet'),(13,'2019-06-06 02:38:18','yr5467y','rtyr'),(14,'2019-06-06 02:43:57','yr5467y','rtyr'),(15,'2019-06-06 02:47:05','werwr','werwerwe'),(16,'2019-06-06 02:50:36','werwr','werwerwe'),(17,'2019-06-06 02:51:34','werwr','werwerwe'),(18,'2019-06-06 02:52:19','刁肥宅','rtyrty'),(19,'2019-06-06 02:52:32','464','4564564'),(20,'2019-06-06 02:55:05','3534','346yt4e556'),(21,'2019-06-06 02:55:13','rtyrty','tutyu'),(22,'2019-06-06 02:55:24','刁肥宅','e'),(23,'2019-06-06 02:57:08','刁肥宅','ewrrewrw'),(24,'2019-06-06 02:59:56','刁肥宅','尔特让他'),(25,'2019-06-06 03:00:18','刁肥宅','尔特让他'),(26,'2019-06-06 03:00:24','玩儿翁二','虽然她虽然他说的'),(27,'2019-06-06 03:02:28','水电费水电费','时发生地方'),(28,'2019-06-06 03:05:40','',''),(29,'2019-06-06 03:08:10','水电费水电费','时发生地方'),(30,'2019-06-06 03:10:07','水电费水电费','时发生地方'),(31,'2019-06-06 03:15:43','水电费水电费','时发生地方'),(32,'2019-06-06 03:15:59','5','应用'),(33,'2019-06-06 03:17:17','5','应用'),(34,'2019-06-06 03:17:23','5','应用'),(35,'2019-06-06 03:17:51','5','应用'),(36,'2019-06-06 03:18:22','5','应用'),(37,'2019-06-06 03:18:24','',''),(38,'2019-06-06 03:18:29','萨达所','萨芬'),(39,'2019-06-06 03:28:05','收费多少的','似懂非懂'),(40,'2019-06-06 03:29:43','收费多少的','似懂非懂'),(41,'2019-06-06 03:29:47','收费多少的','似懂非懂'),(42,'2019-06-06 03:30:00','玩儿翁二',''),(43,'2019-06-06 03:31:03','玩儿翁二',''),(44,'2019-06-06 03:31:37','爱仕达所大','阿斯顿发生'),(45,'2019-06-06 03:34:28','爱仕达所大','阿斯顿发生'),(46,'2019-06-06 03:38:21','但是','萨芬'),(47,'2019-06-06 03:40:43','但是','萨芬'),(48,'2019-06-06 03:40:48','时发生地方','所发生的'),(49,'2019-06-06 03:41:49','多岁的','深度'),(50,'2019-06-06 03:42:08','如果他发给同学','而特'),(51,'2019-06-06 03:42:21','如果他发给同学','而特'),(52,'2019-06-06 03:48:56','试一下','哈哈哈'),(53,'2019-06-06 03:54:00','',''),(54,'2019-06-06 03:54:16','',''),(55,'2019-06-06 03:54:39','是的发送到','尔特人生'),(56,'2019-06-06 03:59:39','dgdf','werwer'),(57,'2019-06-06 04:03:36','O(∩_∩)O哈哈哈~','呜啦啦'),(58,'2019-06-06 04:04:03','玩儿',' 烦人'),(59,'2019-06-06 04:42:45','水电费','水电费'),(60,'2019-06-06 04:44:53','是的发送到','水电费'),(61,'2019-06-06 04:49:06','dfgdfg ','sfdgsdf s');
/*!40000 ALTER TABLE `dfz` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-06-06 13:08:43
