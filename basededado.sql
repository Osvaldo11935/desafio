-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: contact
-- ------------------------------------------------------
-- Server version	5.7.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `addressIp` varchar(255) DEFAULT NULL,
  `message` longtext,
  `dateCreated` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (1,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','686867868','2021-09-03 07:04:39','7678867868'),(2,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','jhgjhjghhgfdfhghdgfjh  sfgfhsjgjshgsjfghsjfhfjgdf jgshdsfgsjdhfghsfgshhhhhh sfhjgffffjghdfjsgjdhsfffgsjdhsfd ','2021-09-03 07:22:30','67878678'),(3,'Marcos','marcosmandamba@gmail.com','http://localhost','hjjjhgjgbnbngvggghghgtrdfgdfdgdfdgd gffg','2021-09-03 07:24:51','8976876'),(4,'Marco Mandamba','marcosmandamba@gmail.com','http://localhost','retertertetertertrte fdfggdfgdfgdfgd fgfgdfgdgdfgdgdg','2021-09-03 12:44:26','89879789789'),(5,'gfhfghfghfgh','fhfhffhhfg@gmail.com','http://localhost','ghhfhfghfghfhfghfghfghfghfh fghfghfhghfghfghfh fhghfhfghfghfghgfhghfhfh ','2021-09-03 12:47:41','86867867867867'),(6,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','fghfghfhffjfjfgffghffgfgh ghfhfh','2021-09-03 12:59:49','8978777879'),(7,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','fghfghfhffjfjfgffghffgfgh ghfhfh','2021-09-03 01:01:08','8978777879'),(8,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','696969','2021-09-03 01:01:25','698'),(9,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','696969','2021-09-03 01:02:07','698'),(10,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','jkjljljlk','2021-09-03 01:02:25','0090909'),(11,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','uiyuiuyiyuiyui','2021-09-03 01:05:35','808080980890'),(12,'Osvaldo Mateus','osvaldomateusquissola1234@gmail.com','http://localhost','89yutututuy','2021-09-03 01:06:12','8979797');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-03 15:59:51
