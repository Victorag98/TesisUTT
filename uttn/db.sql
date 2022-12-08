-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: test4
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividades`
--

DROP TABLE IF EXISTS `actividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `actividades` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Actividad` varchar(255) NOT NULL,
  `Valor` int(3) NOT NULL,
  `idMateria` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Materiaid` (`idMateria`),
  CONSTRAINT `Materiaid` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividades`
--

LOCK TABLES `actividades` WRITE;
/*!40000 ALTER TABLE `actividades` DISABLE KEYS */;
/*!40000 ALTER TABLE `actividades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `capacidad`
--

DROP TABLE IF EXISTS `capacidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capacidad` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Capacidad` varchar(255) NOT NULL,
  `Criterio` varchar(255) NOT NULL,
  `idMateria` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Materia_id` (`idMateria`),
  CONSTRAINT `Materia_id` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacidad`
--

LOCK TABLES `capacidad` WRITE;
/*!40000 ALTER TABLE `capacidad` DISABLE KEYS */;
INSERT INTO `capacidad` VALUES (8,'dsf','sdf','gfdjg');
/*!40000 ALTER TABLE `capacidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carrera`
--

DROP TABLE IF EXISTS `carrera`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carrera` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Carrera` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carrera`
--

LOCK TABLES `carrera` WRITE;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
INSERT INTO `carrera` VALUES (1,'TÉCNICO SUPERIOR UNIVERSITARIO EN TECNOLOGÍAS DE LA INFORMACIÓN, ÁREA DESARROLLO DE SOFTWARE MULTIPLATAFORMA'),(2,'TSU EN TECNOLOGÍAS DE LA INFORMACIÓN, ÁREA ENTORNOS VIRTUALES Y NEGOCIOS DIGITALES'),(3,'INGENIERÍA EN DESARROLLO Y GESTIÓN DE SOFTWARE'),(4,'INGENIERÍA EN ENTORNOS VIRTUALES Y NEGOCIOS DIGITALES');
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cuatrimestre`
--

DROP TABLE IF EXISTS `cuatrimestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cuatrimestre` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Cuatrimestre` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cuatrimestre`
--

LOCK TABLES `cuatrimestre` WRITE;
/*!40000 ALTER TABLE `cuatrimestre` DISABLE KEYS */;
INSERT INTO `cuatrimestre` VALUES (1,'Primero'),(2,'Segundo'),(3,'Tercero'),(4,'Cuarto'),(5,'Quinto'),(6,'Sexto'),(7,'Septimo'),(8,'Octavo'),(9,'Noveno'),(10,'Decimo'),(11,'Onceavo');
/*!40000 ALTER TABLE `cuatrimestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `espacio`
--

DROP TABLE IF EXISTS `espacio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `espacio` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `Espacio` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `espacio`
--

LOCK TABLES `espacio` WRITE;
/*!40000 ALTER TABLE `espacio` DISABLE KEYS */;
INSERT INTO `espacio` VALUES (1,'Aula'),(2,'Laboratorio/Taller'),(3,'Empresa');
/*!40000 ALTER TABLE `espacio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuentes`
--

DROP TABLE IF EXISTS `fuentes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuentes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Año` int(4) NOT NULL,
  `Autor` varchar(255) NOT NULL,
  `Titulo` varchar(255) DEFAULT NULL,
  `Ciudad` varchar(255) DEFAULT NULL,
  `Pais` varchar(255) DEFAULT NULL,
  `Editorial` varchar(255) DEFAULT NULL,
  `idMateria` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Materia` (`idMateria`),
  CONSTRAINT `Materia` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuentes`
--

LOCK TABLES `fuentes` WRITE;
/*!40000 ALTER TABLE `fuentes` DISABLE KEYS */;
INSERT INTO `fuentes` VALUES (7,2001,'fds','cx','cx','xc','xc','gfdjg');
/*!40000 ALTER TABLE `fuentes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `justificacion`
--

DROP TABLE IF EXISTS `justificacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `justificacion` (
  `justificacion` varchar(255) NOT NULL,
  `idMateria` varchar(255) NOT NULL,
  PRIMARY KEY (`justificacion`),
  KEY `mateid` (`idMateria`),
  CONSTRAINT `mateid` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `justificacion`
--

LOCK TABLES `justificacion` WRITE;
/*!40000 ALTER TABLE `justificacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `justificacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `justificaciontema`
--

DROP TABLE IF EXISTS `justificaciontema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `justificaciontema` (
  `temaj` varchar(255) NOT NULL,
  `subtema` varchar(255) NOT NULL,
  `concepto` varchar(255) NOT NULL,
  `justificacion` varchar(255) NOT NULL,
  KEY `jus` (`justificacion`),
  CONSTRAINT `jus` FOREIGN KEY (`justificacion`) REFERENCES `justificacion` (`justificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `justificaciontema`
--

LOCK TABLES `justificaciontema` WRITE;
/*!40000 ALTER TABLE `justificaciontema` DISABLE KEYS */;
/*!40000 ALTER TABLE `justificaciontema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `materia`
--

DROP TABLE IF EXISTS `materia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `materia` (
  `idMateria` varchar(250) NOT NULL,
  `Nombre` varchar(255) DEFAULT NULL,
  `carrera` int(11) NOT NULL,
  `competencias` varchar(255) DEFAULT NULL,
  `cuatrimestre` int(11) DEFAULT NULL,
  `objetivo` varchar(150) DEFAULT NULL,
  `hpracticas` int(3) DEFAULT NULL,
  `hteoricas` int(3) DEFAULT NULL,
  `htotales` int(3) DEFAULT NULL,
  `IdProfesor` int(3) DEFAULT NULL,
  PRIMARY KEY (`idMateria`),
  KEY `carerra` (`carrera`),
  KEY `cuatrimestre` (`cuatrimestre`),
  CONSTRAINT `carerra` FOREIGN KEY (`carrera`) REFERENCES `carrera` (`ID`) ON UPDATE CASCADE,
  CONSTRAINT `cuatrimestre` FOREIGN KEY (`cuatrimestre`) REFERENCES `cuatrimestre` (`ID`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `materia`
--

LOCK TABLES `materia` WRITE;
/*!40000 ALTER TABLE `materia` DISABLE KEYS */;
INSERT INTO `materia` VALUES ('gfdjg','WEB Applications',2,'Develop technological solutions for Web environments through object-oriented programming foundations, databases and local area networks that cater to the needs of the companies.',8,'ewf',62,28,90,NULL);
/*!40000 ALTER TABLE `materia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nota`
--

DROP TABLE IF EXISTS `nota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nota` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nota` varchar(255) NOT NULL,
  `idMateria` varchar(255) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `matid` (`idMateria`),
  CONSTRAINT `matid` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nota`
--

LOCK TABLES `nota` WRITE;
/*!40000 ALTER TABLE `nota` DISABLE KEYS */;
/*!40000 ALTER TABLE `nota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proceso`
--

DROP TABLE IF EXISTS `proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `proceso` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Resultado` varchar(255) NOT NULL,
  `Secuencia` varchar(255) NOT NULL,
  `Instrumento` varchar(255) NOT NULL,
  `idMateria` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `MateriaProceso` (`idMateria`),
  CONSTRAINT `MateriaProceso` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proceso`
--

LOCK TABLES `proceso` WRITE;
/*!40000 ALTER TABLE `proceso` DISABLE KEYS */;
INSERT INTO `proceso` VALUES (12,'fds','dsf','sdf','gfdjg');
/*!40000 ALTER TABLE `proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `procesoense`
--

DROP TABLE IF EXISTS `procesoense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `procesoense` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Metodos` varchar(255) NOT NULL,
  `Medios` varchar(255) NOT NULL,
  `Espacio` int(1) NOT NULL,
  `idMateria` varchar(250) NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `Espacio` (`Espacio`),
  KEY `MateriaProcesoen` (`idMateria`),
  CONSTRAINT `Espacio` FOREIGN KEY (`Espacio`) REFERENCES `espacio` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `MateriaProcesoen` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `procesoense`
--

LOCK TABLES `procesoense` WRITE;
/*!40000 ALTER TABLE `procesoense` DISABLE KEYS */;
INSERT INTO `procesoense` VALUES (9,'fd','sdf',1,'gfdjg');
/*!40000 ALTER TABLE `procesoense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tema`
--

DROP TABLE IF EXISTS `tema`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tema` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Temas` varchar(255) NOT NULL,
  `Saber` varchar(255) NOT NULL,
  `Saberhacer` varchar(255) NOT NULL,
  `Ser` varchar(250) NOT NULL,
  `idMateria` varchar(250) NOT NULL,
  `Tema` varchar(255) NOT NULL,
  `fechaI` datetime DEFAULT NULL,
  `fechaF` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `MateriaTema` (`idMateria`),
  KEY `temaunidad` (`Tema`),
  CONSTRAINT `MateriaTema` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `temaunidad` FOREIGN KEY (`Tema`) REFERENCES `unidad` (`Tema`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tema`
--

LOCK TABLES `tema` WRITE;
/*!40000 ALTER TABLE `tema` DISABLE KEYS */;
INSERT INTO `tema` VALUES (22,'ds','fds','dsf','dfs','gfdjg','Array',NULL,NULL);
/*!40000 ALTER TABLE `tema` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `unidad`
--

DROP TABLE IF EXISTS `unidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `unidad` (
  `Tema` varchar(255) NOT NULL,
  `horaprac` int(3) NOT NULL,
  `horateo` int(3) NOT NULL,
  `horatotal` int(3) NOT NULL,
  `idMateria` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`Tema`),
  KEY `MateriaUnidad` (`idMateria`),
  CONSTRAINT `MateriaUnidad` FOREIGN KEY (`idMateria`) REFERENCES `materia` (`idMateria`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `unidad`
--

LOCK TABLES `unidad` WRITE;
/*!40000 ALTER TABLE `unidad` DISABLE KEYS */;
INSERT INTO `unidad` VALUES ('Array',0,0,0,'gfdjg');
/*!40000 ALTER TABLE `unidad` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-08  1:37:07
