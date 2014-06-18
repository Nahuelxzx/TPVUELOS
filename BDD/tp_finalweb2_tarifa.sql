CREATE DATABASE  IF NOT EXISTS `tp_finalweb2` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tp_finalweb2`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: localhost    Database: tp_finalweb2
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `tarifa`
--

DROP TABLE IF EXISTS `tarifa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarifa` (
  `idTarifa` int(11) NOT NULL AUTO_INCREMENT,
  `Aepto_Origen` varchar(6) NOT NULL,
  `Aepto_Destino` varchar(6) NOT NULL,
  `Precio_Economy` decimal(10,2) DEFAULT NULL,
  `Precio_Primary` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`idTarifa`),
  KEY `FK_Tarifa_Aepto_Origen_idx` (`Aepto_Origen`),
  KEY `FK_Tarifa_Aepto_Destino_idx` (`Aepto_Destino`),
  CONSTRAINT `FK_Tarifa_Aepto_Destino` FOREIGN KEY (`Aepto_Destino`) REFERENCES `aeropuerto` (`idAepto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Tarifa_Aepto_Origen` FOREIGN KEY (`Aepto_Origen`) REFERENCES `aeropuerto` (`idAepto`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=261 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tarifa`
--

LOCK TABLES `tarifa` WRITE;
/*!40000 ALTER TABLE `tarifa` DISABLE KEYS */;
INSERT INTO `tarifa` VALUES (1,'SAVR','SAZY',1191.00,1464.93),(2,'SAZA','SAZW',1836.00,2258.28),(3,'SAZB','SAZV',2497.00,3071.31),(4,'SAZS','SAZT',2161.00,2658.03),(5,'SAZI','SAZS',1228.00,1510.44),(6,'SADO','SAZP',968.00,1190.64),(7,'SAHE','SAZO',1281.00,1575.63),(8,'SANW','SAZN',2085.00,2564.55),(9,'SACT','SAZM',1656.00,2036.88),(10,'SACP','SAZL',1982.00,2437.86),(11,'SANO','SAZI',924.00,1136.52),(12,'SATC','SAZH',2108.00,2592.84),(13,'SAVC','SAZG',915.00,1125.45),(14,'SACO','SAZF',1182.00,1453.86),(15,'SAAC','SAZD',1587.00,1952.01),(16,'SAZC','SAZC',1564.00,1923.72),(17,'SARC','SAZB',2477.00,3046.71),(18,'SATU','SAZA',2491.00,3063.93),(19,'SAZW','SAWU',1555.00,1912.65),(20,'SAZD','SAWT',2451.00,3014.73),(21,'SADD','SAWP',1762.00,2167.26),(22,'SAVB','SAWJ',2314.00,2846.22),(23,'SAWC','SAWH',1661.00,2043.03),(24,'SAWA','SAWG',1317.00,1619.91),(25,'SADP','SAWE',2257.00,2776.11),(26,'SAVE','SAWD',2021.00,2485.83),(27,'SAEZ','SAWC',1933.00,2377.59),(28,'SARF','SAWA',950.00,1168.50),(29,'SAMA','SAVY',1216.00,1495.68),(30,'SAZG','SAVV',1946.00,2393.58),(31,'SAHR','SAVT',1889.00,2323.47),(32,'SAVJ','SAVR',887.00,1091.01),(33,'SAAK','SAVJ',1131.00,1391.13),(34,'SADJ','SAVH',913.00,1122.99),(35,'SAAJ','SAVE',2326.00,2860.98),(36,'SAOL','SAVC',1306.00,1606.38),(37,'SACC','SAVB',1721.00,2116.83),(38,'SADL','SATU',2181.00,2682.63),(39,'SANL','SATR',1821.00,2239.83),(40,'SAVH','SATK',1956.00,2405.88),(41,'SATK','SATC',2209.00,2717.07),(42,'SAMM','SAST',2197.00,2702.31),(43,'SAZM','SASO',1358.00,1670.34),(44,'SAME','SASJ',895.00,1100.85),(45,'SAOS','SASA',847.00,1041.81),(46,'SAEM','SASA',2045.00,2515.35),(47,'SARM','SARP',1109.00,1364.07),(48,'SADM','SARM',1763.00,2168.49),(49,'SAZO','SARL',1665.00,2047.95),(50,'SAZN','SARI',1809.00,2225.07),(51,'SAZF','SARF',1841.00,2264.43),(52,'SAAP','SARE',1079.00,1327.17),(53,'SARL','SARC',1108.00,1362.84),(54,'SAZP','SAOU',2112.00,2597.76),(55,'SASJ','SAOS',2412.00,2966.76),(56,'SAWP','SAOR',1980.00,2435.40),(57,'SARP','SAOL',862.00,1060.26),(58,'SAWD','SAOD',1525.00,1875.75),(59,'SARI','SAOC',2229.00,2741.67),(60,'SAVY','SANW',870.00,1070.10),(61,'SAWJ','SANU',2166.00,2664.18),(62,'SAWU','SANT',1173.00,1442.79),(63,'SASA','SANR',2001.00,2461.23),(64,'SATR','SANO',2217.00,2726.91),(65,'SARE','SANL',2334.00,2870.82),(66,'SAOC','SANE',2014.00,2477.22),(67,'SAWG','SANC',1462.00,1798.26),(68,'SAWE','SAMR',2269.00,2790.87),(69,'SAWT','SAMM',2205.00,2712.15),(70,'SAAR','SAME',1097.00,1349.31),(71,'SASA','SAMA',989.00,1216.47),(72,'SADF','SAHZ',2357.00,2899.11),(73,'SANC','SAHR',1716.00,2110.68),(74,'SANU','SAHE',1387.00,1706.01),(75,'SAOU','SAFS',1032.00,1269.36),(76,'SAMR','SAEZ',1577.00,1939.71),(77,'SASO','SAEM',1456.00,1790.88),(78,'SADS','SADS',1342.00,1650.66),(79,'SANT','SADP',1632.00,2007.36),(80,'SAZR','SADO',2414.00,2969.22),(81,'SAZL','SADM',2350.00,2890.50),(82,'SANE','SADL',1840.00,2263.20),(83,'SAZY','SADJ',2095.00,2576.85),(84,'SAAV','SADF',1763.00,2168.49),(85,'SAFS','SADD',2284.00,2809.32),(86,'SAZT','SACT',2272.00,2794.56),(87,'SAST','SACP',1849.00,2274.27),(88,'SANR','SACO',1552.00,1908.96),(89,'SAVT','SACC',2472.00,3040.56),(90,'SAZH','SABE',2390.00,2939.70),(91,'SAWH','SAAV',1498.00,1842.54),(92,'SAVV','SAAU',1183.00,1455.09),(93,'SAOD','SAAR',1322.00,1626.06),(94,'SAZV','SAAP',1227.00,1509.21),(95,'SAOR','SAAK',1546.00,1901.58),(96,'SAAU','SAAJ',830.00,1020.90),(97,'SAHZ','SAAC',1973.00,2426.79),(98,'SABE','SADO',2477.00,3046.71),(99,'SABE','SAHE',2327.00,2862.21),(100,'SABE','SANW',1071.00,1317.33),(101,'SABE','SACT',2312.00,2843.76),(102,'SABE','SACP',980.00,1205.40),(103,'SABE','SANO',2138.00,2629.74),(104,'SABE','SATC',1947.00,2394.81),(105,'SABE','SAVC',958.00,1178.34),(106,'SABE','SACO',2083.00,2562.09),(107,'SABE','SAAC',2093.00,2574.39),(108,'SABE','SAZC',1062.00,1306.26),(109,'SABE','SARC',1376.00,1692.48),(110,'SABE','SATU',1429.00,1757.67),(111,'SABE','SAZW',1159.00,1425.57),(112,'SABE','SAZD',1741.00,2141.43),(113,'SABE','SADD',2395.00,2945.85),(114,'SABE','SAVB',1159.00,1425.57),(115,'SABE','SAWC',1334.00,1640.82),(116,'SABE','SAWA',1792.00,2204.16),(117,'SABE','SADP',1234.00,1517.82),(118,'SABE','SAVE',1954.00,2403.42),(119,'SABE','SAEZ',1237.00,1521.51),(120,'SABE','SARF',1163.00,1430.49),(121,'SABE','SAMA',1653.00,2033.19),(122,'SABE','SAZG',1757.00,2161.11),(123,'SABE','SAHR',2321.00,2854.83),(124,'SABE','SAVJ',1237.00,1521.51),(125,'SABE','SAAK',1846.00,2270.58),(126,'SABE','SADJ',2188.00,2691.24),(127,'SABE','SAAJ',1617.00,1988.91),(128,'SABE','SAOL',1105.00,1359.15),(129,'SABE','SACC',1610.00,1980.30),(130,'SABE','SADL',1871.00,2301.33),(131,'SABE','SANL',1369.00,1683.87),(132,'SABE','SAVH',1995.00,2453.85),(133,'SABE','SATK',2139.00,2630.97),(134,'SABE','SAMM',2236.00,2750.28),(135,'SABE','SAZM',1275.00,1568.25),(136,'SABE','SAME',1515.00,1863.45),(137,'SABE','SAOS',2487.00,3059.01),(138,'SABE','SAEM',2163.00,2660.49),(139,'SABE','SARM',2414.00,2969.22),(140,'SABE','SADM',2399.00,2950.77),(141,'SABE','SAZO',1905.00,2343.15),(142,'SABE','SAZN',2457.00,3022.11),(143,'SABE','SAZF',1366.00,1680.18),(144,'SABE','SAAP',2474.00,3043.02),(145,'SABE','SARL',1201.00,1477.23),(146,'SABE','SAZP',2197.00,2702.31),(147,'SABE','SASJ',1228.00,1510.44),(148,'SABE','SAWP',1796.00,2209.08),(149,'SABE','SARP',2469.00,3036.87),(150,'SABE','SAWD',1629.00,2003.67),(151,'SABE','SARI',1856.00,2282.88),(152,'SABE','SAVY',952.00,1170.96),(153,'SABE','SAWJ',834.00,1025.82),(154,'SABE','SAWU',2372.00,2917.56),(155,'SABE','SASA',1249.00,1536.27),(156,'SABE','SATR',1951.00,2399.73),(157,'SABE','SARE',1767.00,2173.41),(158,'SABE','SAOC',918.00,1129.14),(159,'SABE','SAWG',2014.00,2477.22),(160,'SABE','SAWE',1437.00,1767.51),(161,'SABE','SAWT',1450.00,1783.50),(162,'SABE','SAAR',933.00,1147.59),(163,'SABE','SASA',1140.00,1402.20),(164,'SABE','SADF',2264.00,2784.72),(165,'SABE','SANC',2404.00,2956.92),(166,'SABE','SANU',1166.00,1434.18),(167,'SABE','SAOU',1519.00,1868.37),(168,'SABE','SAMR',1784.00,2194.32),(169,'SABE','SASO',2445.00,3007.35),(170,'SABE','SADS',1734.00,2132.82),(171,'SABE','SANT',1955.00,2404.65),(172,'SABE','SAZR',2158.00,2654.34),(173,'SABE','SAZL',2236.00,2750.28),(174,'SABE','SANE',1966.00,2418.18),(175,'SABE','SAZY',2121.00,2608.83),(176,'SABE','SAAV',1606.00,1975.38),(177,'SABE','SAFS',1710.00,2103.30),(178,'SABE','SAZT',1285.00,1580.55),(179,'SABE','SAST',1273.00,1565.79),(180,'SABE','SANR',2308.00,2838.84),(181,'SABE','SAVT',1934.00,2378.82),(182,'SABE','SAZH',1573.00,1934.79),(183,'SABE','SAWH',827.00,1017.21),(184,'SABE','SAVV',1052.00,1293.96),(185,'SABE','SAOD',1030.00,1266.90),(186,'SABE','SAZV',1378.00,1694.94),(187,'SABE','SAOR',1286.00,1581.78),(188,'SABE','SAAU',2259.00,2778.57),(189,'SABE','SAHZ',1432.00,1761.36),(190,'SACO','SAEZ',1591.00,1956.93),(191,'SACO','SARF',884.00,1087.32),(192,'SACO','SAMA',2012.00,2474.76),(193,'SACO','SAZG',2432.00,2991.36),(194,'SACO','SAHR',817.00,1004.91),(195,'SACO','SAVJ',2160.00,2656.80),(196,'SACO','SAAK',985.00,1211.55),(197,'SACO','SADJ',1178.00,1448.94),(198,'SACO','SAAJ',2078.00,2555.94),(199,'SACO','SAOL',1153.00,1418.19),(200,'SACO','SACC',1585.00,1949.55),(201,'SACO','SADL',2128.00,2617.44),(202,'SACO','SANL',1729.00,2126.67),(203,'SACO','SAVH',1202.00,1478.46),(204,'SACO','SATK',2399.00,2950.77),(205,'SACO','SAMM',2277.00,2800.71),(206,'SACO','SAZM',1339.00,1646.97),(207,'SACO','SAME',2364.00,2907.72),(208,'SACO','SAOS',1305.00,1605.15),(209,'SACO','SAEM',2344.00,2883.12),(210,'SACO','SARM',817.00,1004.91),(211,'SACO','SADM',1728.00,2125.44),(212,'SACO','SAZO',1820.00,2238.60),(213,'SACO','SAZN',2174.00,2674.02),(214,'SACO','SAZF',839.00,1031.97),(215,'SACO','SAAP',927.00,1140.21),(216,'SACO','SARL',853.00,1049.19),(217,'SACO','SAZP',2189.00,2692.47),(218,'SACO','SASJ',1130.00,1389.90),(219,'SACO','SAWP',1039.00,1277.97),(220,'SACO','SARP',2038.00,2506.74),(221,'SACO','SAWD',2159.00,2655.57),(222,'SACO','SARI',2253.00,2771.19),(223,'SACO','SAVY',2374.00,2920.02),(224,'SACO','SAWJ',2477.00,3046.71),(225,'SACO','SAWU',1020.00,1254.60),(226,'SACO','SASA',1045.00,1285.35),(227,'SACO','SATR',1484.00,1825.32),(228,'SACO','SARE',1846.00,2270.58),(229,'SACO','SAOC',2054.00,2526.42),(230,'SACO','SAWG',2392.00,2942.16),(231,'SACO','SAWE',1687.00,2075.01),(232,'SACO','SAWT',959.00,1179.57),(233,'SACO','SAAR',1147.00,1410.81),(234,'SACO','SASA',2302.00,2831.46),(235,'SACO','SADF',2399.00,2950.77),(236,'SACO','SANC',1572.00,1933.56),(237,'SACO','SANU',1361.00,1674.03),(238,'SACO','SAOU',1982.00,2437.86),(239,'SACO','SAMR',2395.00,2945.85),(240,'SACO','SASO',2383.00,2931.09),(241,'SACO','SADS',1300.00,1599.00),(242,'SACO','SANT',2431.00,2990.13),(243,'SACO','SAZR',1653.00,2033.19),(244,'SACO','SAZL',1945.00,2392.35),(245,'SACO','SANE',1654.00,2034.42),(246,'SACO','SAZY',1778.00,2186.94),(247,'SACO','SAAV',2246.00,2762.58),(248,'SACO','SAFS',1985.00,2441.55),(249,'SACO','SAZT',2463.00,3029.49),(250,'SACO','SAST',1504.00,1849.92),(251,'SACO','SANR',1398.00,1719.54),(252,'SACO','SAVT',813.00,999.99),(253,'SACO','SAZH',2288.00,2814.24),(254,'SACO','SAWH',1916.00,2356.68),(255,'SACO','SAVV',1321.00,1624.83),(256,'SACO','SAOD',941.00,1157.43),(257,'SACO','SAZV',2049.00,2520.27),(258,'SACO','SAOR',2313.00,2844.99),(259,'SACO','SAAU',2400.00,2952.00),(260,'SACO','SAHZ',1347.00,1656.81);
/*!40000 ALTER TABLE `tarifa` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-18  0:08:31
