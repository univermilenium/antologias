-- MySQL dump 10.13  Distrib 5.5.32, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: antologias
-- ------------------------------------------------------
-- Server version	5.5.32-0ubuntu0.12.04.1

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
-- Table structure for table `carreras`
--

DROP TABLE IF EXISTS `carreras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carreras` (
  `ID_CAR` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `PLANTEL` int(11) NOT NULL,
  `CARRERA` varchar(25) NOT NULL,
  `DESCRIPCION` tinytext NOT NULL,
  PRIMARY KEY (`ID_CAR`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carreras`
--

LOCK TABLES `carreras` WRITE;
/*!40000 ALTER TABLE `carreras` DISABLE KEYS */;
INSERT INTO `carreras` VALUES (1,1,'CRIMINOLOGIA','CRIMINOLOGIA'),(3,1,'PEDAGOGIA','PEDAGOGIA'),(4,1,'DERECHO','DERECHO'),(5,1,'PSICOLOGIA','PSICOLOGIA');
/*!40000 ALTER TABLE `carreras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `descargas`
--

DROP TABLE IF EXISTS `descargas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `descargas` (
  `ID_DES` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `ID_MAT` int(11) NOT NULL,
  `DOC` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_DES`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `descargas`
--

LOCK TABLES `descargas` WRITE;
/*!40000 ALTER TABLE `descargas` DISABLE KEYS */;
INSERT INTO `descargas` VALUES (1,1,1,'2013-09-04 22:30:11'),(2,1,5,'2013-09-04 22:30:27'),(3,1,40,'2013-09-04 23:22:58'),(4,1,11,'2013-09-05 04:31:38'),(5,1,11,'2013-09-05 04:32:23');
/*!40000 ALTER TABLE `descargas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `ID_DOC` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `CARRERA` varchar(25) NOT NULL,
  `GRADO` int(11) NOT NULL,
  `MATERIA` varchar(50) NOT NULL,
  `CLAVE` varchar(30) NOT NULL,
  `AUTOR` tinytext NOT NULL,
  `RUTA` tinytext NOT NULL,
  PRIMARY KEY (`ID_DOC`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
INSERT INTO `documentos` VALUES (1,'CRIMINOLOGIA',1,'NONOMBREMATERIA','crimo103','NOAUTOR','/criminologia/1/57.-criminalistica--i-crimo103.pdf'),(2,'CRIMINOLOGIA',1,'NONOMBREMATERIA','crim0102','NOAUTOR','/criminologia/1/79.--herramientas-informaticas--crim0102.pdf'),(3,'CRIMINOLOGIA',1,'NONOMBREMATERIA','crim0103','NOAUTOR','/criminologia/1/72.estrategias-de-estudio-crim0103.pdf'),(4,'CRIMINOLOGIA',1,'NONOMBREMATERIA','crim0105','NOAUTOR','/criminologia/1/58.criminologia-i-crim0105.pdf'),(5,'CRIMINOLOGIA',2,'NONOMBREMATERIA','crim0312','NOAUTOR','/criminologia/2/43.analisis-socioeconomico-de-mexico-crim0312.pdf'),(6,'CRIMINOLOGIA',2,'NONOMBREMATERIA','crim0420','NOAUTOR','/criminologia/2/165.-criminologia-iv--crim0420.pdf'),(7,'CRIMINOLOGIA',2,'NONOMBREMATERIA','crim0311','NOAUTOR','/criminologia/2/211.-derecho-familiar-crim0311.pdf'),(8,'DERECHO',1,'NONOMBREMATERIA','mdero103','NOAUTOR','/derecho/1/86.sociologia-juridica-mdero103.pdf'),(9,'DERECHO',1,'NONOMBREMATERIA','mder01012','NOAUTOR','/derecho/1/69.-derecho--romano-mder01012.pdf'),(10,'DERECHO',1,'NONOMBREMATERIA','mder0101','NOAUTOR','/derecho/1/83.-introduccion-al-derecho-mder0101.pdf'),(11,'DERECHO',1,'NONOMBREMATERIA','mder0104','NOAUTOR','/derecho/1/87.-teoria-economica-mder0104.pdf'),(12,'DERECHO',10,'NONOMBREMATERIA','mder1038','NOAUTOR','/derecho/10/226.--antologia-derecho-notarial--mder1038.pdf'),(13,'DERECHO',10,'NONOMBREMATERIA','mder1040','NOAUTOR','/derecho/10/224.-etica-y-deontologia-juridica--f.g.-mder1040.pdf'),(14,'DERECHO',10,'NONOMBREMATERIA','mder1039','NOAUTOR','/derecho/10/202.--juicios--orales-mder1039.pdf'),(15,'DERECHO',10,'NONOMBREMATERIA','mder1037','NOAUTOR','/derecho/10/195.derecho-fiscal-mder1037.pdf'),(16,'DERECHO',4,'NONOMBREMATERIA','mder0416','NOAUTOR','/derecho/4/66.-derecho-mercantil-ii-mder0416.pdf'),(17,'DERECHO',4,'NONOMBREMATERIA','mder0413','NOAUTOR','/derecho/4/78.-antol.garantias-individuales-mder0413.pdf'),(18,'DERECHO',4,'NONOMBREMATERIA','mder0414','NOAUTOR','/derecho/4/60.derecho-civil-ii-mder0414.pdf'),(19,'DERECHO',9,'NONOMBREMATERIA','mder0936','NOAUTOR','/derecho/9/163.derecho-internacional-publico-mder0936.pdf'),(20,'DERECHO',9,'NONOMBREMATERIA','mder0935','NOAUTOR','/derecho/9/181.-medicina--legal-mder0935.pdf'),(21,'DERECHO',9,'NONOMBREMATERIA','mder0934','NOAUTOR','/derecho/9/162.derecho-bancario-mder0934.pdf'),(22,'DERECHO',9,'NONOMBREMATERIA','mder0936','NOAUTOR','/derecho/9/161.-criminologia-y-victimologia-mder0936.pdf'),(23,'PEDAGOGIA',1,'NONOMBREMATERIA','mpeg0104','NOAUTOR','/pedagogia/1/4.1.-estadistica-mpeg0104.pdf'),(24,'PEDAGOGIA',1,'NONOMBREMATERIA','mpeg0101','NOAUTOR','/pedagogia/1/1-antropologia-filosofica-mpeg0101.pdf'),(25,'PEDAGOGIA',1,'NONOMBREMATERIA','mpe0102','NOAUTOR','/pedagogia/1/2.-pedagogia-i--mpe0102.pdf'),(26,'PEDAGOGIA',1,'NONOMBREMATERIA','mpeg0103','NOAUTOR','/pedagogia/1/redaccion-mpeg0103.pdf'),(27,'PSICOLOGIA',1,'NONOMBREMATERIA','mps0104','NOAUTOR','/psicologia/1/29.--neurofisiologia-i-mps0104.pdf'),(28,'PSICOLOGIA',1,'NONOMBREMATERIA','mps0103','NOAUTOR','/psicologia/1/bases-biologicas-mps0103.pdf'),(29,'PSICOLOGIA',1,'NONOMBREMATERIA','mps0102','NOAUTOR','/psicologia/1/27.corrientes-contemporaneas-de-la-psicologia.mps0102.pdf'),(30,'PSICOLOGIA',1,'NONOMBREMATERIA','mps0104','NOAUTOR','/psicologia/1/29.--neurofisiologia-i-mps0104.pdf'),(31,'PSICOLOGIA',1,'NONOMBREMATERIA','mps0103','NOAUTOR','/psicologia/1/bases-biologicas-mps0103.pdf'),(32,'PSICOLOGIA',1,'NONOMBREMATERIA','mps0102','NOAUTOR','/psicologia/1/27.corrientes-contemporaneas-de-la-psicologia.mps0102.pdf'),(33,'PSICOLOGIA',7,'NONOMBREMATERIA','mps0728','NOAUTOR','/psicologia/7/53.-analisis-experimental-de-la-conducta-mps0728.pdf'),(34,'PSICOLOGIA',7,'NONOMBREMATERIA','mps0726','NOAUTOR','/psicologia/7/51.-psicologia-social-comunitaria.mps0726.pdf'),(35,'PSICOLOGIA',7,'NONOMBREMATERIA','mps0725','NOAUTOR','/psicologia/7/50.-teoria-de-la-entrevista-mps0725.pdf'),(36,'PSICOLOGIA',7,'NONOMBREMATERIA','mps0727','NOAUTOR','/psicologia/7/52.-psicopatologia-infantil-mps0727.pdf'),(37,'PSICOLOGIA',10,'NONOMBREMATERIA','mps1037','NOAUTOR','/psicologia/10/200.-metodos-de-investigacion-social.mps1037.pdf'),(38,'PSICOLOGIA',10,'NONOMBREMATERIA','mps1039','NOAUTOR','/psicologia/10/225.recursos-h.-y-selec.-de-pers..-mps1039.pdf'),(39,'PSICOLOGIA',10,'NONOMBREMATERIA','mps1040','NOAUTOR','/psicologia/10/psicoterapia-de-adultos-mps1040.pdf');
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log`
--

DROP TABLE IF EXISTS `log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `log` (
  `ID_LOG` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ID_MAT` int(11) NOT NULL,
  `PLANTEL` int(11) NOT NULL,
  `CARRERA` varchar(30) NOT NULL,
  `FECHA` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_LOG`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log`
--

LOCK TABLES `log` WRITE;
/*!40000 ALTER TABLE `log` DISABLE KEYS */;
INSERT INTO `log` VALUES (1,1,1,'CRIM','2013-09-04 19:10:24'),(2,1,1,'CRIM','2013-09-04 19:15:18'),(3,1,1,'CRIM','2013-09-04 19:44:15'),(4,1,1,'CRIM','2013-09-04 19:45:23'),(5,1,1,'CRIM','2013-09-04 19:45:43'),(6,1,1,'CRIM','2013-09-04 21:20:14'),(7,1,1,'CRIM','2013-09-04 21:28:11'),(8,1,1,'CRIM','2013-09-04 21:29:27'),(9,1,1,'HOLA','2013-09-04 21:32:17'),(10,1,1,'CRIM','2013-09-04 21:34:08'),(11,1,1,'CRIM','2013-09-04 21:36:21'),(12,1,1,'CRIM','2013-09-04 21:40:18'),(13,1,1,'CRIM','2013-09-04 21:43:47'),(14,1,1,'CRIM','2013-09-04 21:52:26'),(15,1,1,'CRIM','2013-09-04 21:53:22'),(16,1,1,'CRIM','2013-09-04 21:56:38'),(17,1,1,'CRIM','2013-09-04 21:57:32'),(18,1,1,'CRIM','2013-09-04 22:05:56'),(19,1,1,'CRIM','2013-09-04 22:07:41'),(20,1,1,'CRIM','2013-09-04 22:43:15'),(21,1,1,'HOLA','2013-09-04 22:59:01'),(22,1,1,'CRIM','2013-09-04 23:00:11'),(23,1,1,'CRIM','2013-09-04 23:22:52'),(24,1,1,'CRIM','2013-09-04 23:23:30'),(25,1,1,'CRIM','2013-09-04 23:23:57'),(26,1,1,'CRIM','2013-09-04 23:24:37'),(27,1,1,'CRIM','2013-09-05 00:34:40'),(28,1,1,'HOLA','2013-09-05 00:38:05'),(29,1,1,'CRIM','2013-09-05 00:48:56'),(30,1,1,'CRIM','2013-09-05 00:49:33'),(31,1,1,'CRIM','2013-09-05 00:50:35'),(32,1,1,'CRIM','2013-09-05 01:00:13'),(33,1,1,'CRIM','2013-09-05 02:25:19'),(34,1,1,'CRIM','2013-09-05 03:45:05'),(35,1,1,'CRIM','2013-09-05 04:24:12'),(36,1,1,'DERECHO','2013-09-05 04:31:32'),(37,1,1,'CRIMINOLOGIA','2013-09-05 04:32:41'),(38,1,1,'CRIMINOLOGIA','2013-09-05 04:35:19');
/*!40000 ALTER TABLE `log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matriculas` (
  `ID_MAT` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `MATRICULA` varchar(20) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `PATERNO` varchar(60) NOT NULL,
  `MATERNO` varchar(60) NOT NULL,
  `PLANTEL` int(11) NOT NULL,
  `CARRERA` varchar(60) NOT NULL,
  PRIMARY KEY (`ID_MAT`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matriculas`
--

LOCK TABLES `matriculas` WRITE;
/*!40000 ALTER TABLE `matriculas` DISABLE KEYS */;
INSERT INTO `matriculas` VALUES (1,'1234567890','Pablo César','Sánchez','Porta',1,'CRIM');
/*!40000 ALTER TABLE `matriculas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-09-04 23:36:23
