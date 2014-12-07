-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: imguru
-- ------------------------------------------------------
-- Server version	5.5.40-0ubuntu0.14.04.1-log

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
-- Table structure for table `games`
--

DROP TABLE IF EXISTS `games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `games` (
  `gameid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `sport` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `details` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `team1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `team2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `team1score` int(5) unsigned NOT NULL,
  `team2score` int(5) unsigned NOT NULL,
  `result` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`gameid`),
  UNIQUE KEY `team1` (`team1`,`team2`,`sport`,`date`,`time`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'A Basketball','2015-01-29','21:00:00','QRAC','','Cabot','Leverett',0,0,0),(2,'A Basketball','2015-02-05','21:00:00','QRAC','','Cabot','Eliot',0,0,0),(3,'A Basketball','2015-02-12','20:00:00','QRAC','','Cabot','Dunster',0,0,0);
/*!40000 ALTER TABLE `games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huddle`
--

DROP TABLE IF EXISTS `huddle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `huddle` (
  `messageid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(5) NOT NULL,
  `house` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `sport` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date_time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(5) unsigned NOT NULL,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huddle`
--

LOCK TABLES `huddle` WRITE;
/*!40000 ALTER TABLE `huddle` DISABLE KEYS */;
INSERT INTO `huddle` VALUES (1,5,'Cabot','general','Hey y\'all','04 Dec 2014 03:51:44 AM',1),(2,5,'Cabot','basketball','Anyone want to play at the MAC in 5?','04 Dec 2014 05:42:17 AM',1),(3,5,'Cabot','basketball','Yeah I\'m down','04 Dec 2014 05:42:30 AM',0),(4,5,'Cabot','basketball','Wow it\'s late!','04 Dec 2014 05:42:35 AM',0),(5,5,'Cabot','B-Basketba','hi','04 Dec 2014 12:49:49 PM',0),(6,5,'Cabot','A Crew - M','hey','04 Dec 2014 12:49:59 PM',0),(7,5,'Cabot','C-Basketball','hi','04 Dec 2014 12:51:48 PM',1),(8,5,'Cabot','C-Basketball','yo','04 Dec 2014 12:52:12 PM',0),(9,5,'Cabot','A Crew - Men','Do we have practice soon?','04 Dec 2014 12:53:27 PM',1),(10,5,'Cabot','B-Basketball','Great game','04 Dec 2014 12:56:02 PM',0),(11,5,'Cabot','A Crew - Women','Hi','04 Dec 2014 06:19:53 PM',0),(12,34,'Pforzheimer','general','Hi guys I\'m Ron','04 Dec 2014 08:29:57 PM',0),(13,34,'Pforzheimer','general','Whoops, I mean Mo','04 Dec 2014 08:30:05 PM',0),(14,35,'Cabot','general','this is dumb','05 Dec 2014 03:57:55 PM',1),(15,35,'Cabot','general','i\'m aggressive','05 Dec 2014 03:58:03 PM',0),(16,35,'Cabot','general','whatre you gonna do, mod me ','05 Dec 2014 03:58:12 PM',0),(17,35,'Cabot','general','bitch\n','05 Dec 2014 03:58:15 PM',0),(18,36,'Leverett','C Basketball','hi lev','05 Dec 2014 05:09:47 PM',0);
/*!40000 ALTER TABLE `huddle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `huddlelikes`
--

DROP TABLE IF EXISTS `huddlelikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `huddlelikes` (
  `userid` int(10) NOT NULL,
  `messageid` int(10) NOT NULL,
  PRIMARY KEY (`userid`,`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huddlelikes`
--

LOCK TABLES `huddlelikes` WRITE;
/*!40000 ALTER TABLE `huddlelikes` DISABLE KEYS */;
INSERT INTO `huddlelikes` VALUES (5,1),(5,2),(5,7),(5,9),(35,14);
/*!40000 ALTER TABLE `huddlelikes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `gameid` int(5) unsigned NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `house` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `sport` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mygames`
--

DROP TABLE IF EXISTS `mygames`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mygames` (
  `userid` int(5) unsigned NOT NULL,
  `gameid` int(5) unsigned NOT NULL,
  PRIMARY KEY (`userid`,`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mygames`
--

LOCK TABLES `mygames` WRITE;
/*!40000 ALTER TABLE `mygames` DISABLE KEYS */;
INSERT INTO `mygames` VALUES (5,1),(5,2),(5,3);
/*!40000 ALTER TABLE `mygames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rosters`
--

DROP TABLE IF EXISTS `rosters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rosters` (
  `house` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gameid` int(4) unsigned NOT NULL,
  PRIMARY KEY (`email`,`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rosters`
--

LOCK TABLES `rosters` WRITE;
/*!40000 ALTER TABLE `rosters` DISABLE KEYS */;
INSERT INTO `rosters` VALUES ('Eliot','eliot@gmail.com','Eliot Wilking',23),('Leverett','joe@bob.com','sam sam',21),('Leverett','joe@bob.com','sam sam',26),('Leverett','joe@bob.com','sam sam',27),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',1),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',2),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',3),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',12),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',15),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',17),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',18),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',21),('Cabot','jzatsiorsky@gmail.com','James Zatsiorsky',23),('Pforzheimer','mjamal@gmail.com','Mo Jamal',14),('Cabot','samuelgreen@college.harvard.ed','Samuel Green',23);
/*!40000 ALTER TABLE `rosters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `standings`
--

DROP TABLE IF EXISTS `standings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `standings` (
  `sport` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `house` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `wins` int(3) unsigned NOT NULL,
  `losses` int(3) unsigned NOT NULL,
  `ties` int(3) unsigned NOT NULL,
  `points` int(5) unsigned NOT NULL,
  KEY `points` (`points`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `standings`
--

LOCK TABLES `standings` WRITE;
/*!40000 ALTER TABLE `standings` DISABLE KEYS */;
/*!40000 ALTER TABLE `standings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trashlikes`
--

DROP TABLE IF EXISTS `trashlikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trashlikes` (
  `userid` int(10) unsigned NOT NULL,
  `messageid` int(10) unsigned NOT NULL,
  PRIMARY KEY (`userid`,`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trashlikes`
--

LOCK TABLES `trashlikes` WRITE;
/*!40000 ALTER TABLE `trashlikes` DISABLE KEYS */;
INSERT INTO `trashlikes` VALUES (5,4),(5,6),(36,1),(36,2);
/*!40000 ALTER TABLE `trashlikes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trashtalk`
--

DROP TABLE IF EXISTS `trashtalk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trashtalk` (
  `messageid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(5) unsigned NOT NULL,
  `gameid` int(5) unsigned NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date_time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trashtalk`
--

LOCK TABLES `trashtalk` WRITE;
/*!40000 ALTER TABLE `trashtalk` DISABLE KEYS */;
INSERT INTO `trashtalk` VALUES (1,5,23,'LET\"S FUCKING GO. WE ARE GOING TO FUCKING MURDER ELIOT.','05 Dec 2014 08:50:43 PM',0),(2,28,23,'Gonna fucking kill your pussy ass! Get ready to be dunked on freak!','05 Dec 2014 08:52:01 PM',0),(3,5,23,'Your mom is fat, dumb shit hole!','05 Dec 2014 08:52:30 PM',0),(4,5,23,'Your mom goes to college','05 Dec 2014 08:54:02 PM',0),(5,5,19,'hi','05 Dec 2014 09:19:58 PM',0),(6,5,12,'Let\'s go Cabot.','06 Dec 2014 12:16:23 AM',1);
/*!40000 ALTER TABLE `trashtalk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `house` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `captain` tinyint(1) NOT NULL,
  `year` int(1) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`,`email`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'jzatsiorsky@gmail.com','$1$pAwgGvom$pJkQ5YWxsHzJx25bIN.rI.','Cabot',1,2017,'James Zatsiorsky'),(6,'tmcnamara@college.harvard.edu','$1$QHOQybrs$yvXhnYF4IJn5OFZ2C4jMP/','cabot',0,2017,'Tim McNamara'),(7,'szatsiorsky@gmail.com','$1$4oEVAG1A$TdruVklWbc9nNT5Mo9RNA/','dunster',0,2016,'Stacia Zatsiorsky'),(8,'mibnobachir@college.harvard.ed','$1$D5/37H.A$O8oPeVXnupUnSKA5pX3PX1','cabot',0,2018,'Mouad Ibno Bachir'),(9,'mszatsiorsky@gmail.com','$1$jTeLgK4Y$W.HMj/sX3C7Jjxy/NqfNI.','Adams',0,2018,'mike Z'),(10,'szatsiorsky@seas.harvard.edu','$1$G5EUUaH/$NfPQ6MgCb28UCI0tOCqR.1','Cabot',0,1,'Stacia Zatsiorsky'),(11,'jaclyn@gmail.com','$1$sKqrpYSH$.6IB27Y0AvHaj1Bvvlf4U/','Adams',0,2016,'Jaclyn Zatsiorsky'),(12,'jmzatsiorsky@gmail.com','$1$5Vi2heQA$8Shu8IKdGUQ6pr5zBbQI5/','Adams',1,1,'Jaclyn  Zatsiorsky'),(13,'tmcac@gmail.com','$1$SnLX1yg.$jGLNWX.9hQY9Plh9xKxsA1','Cabot',0,2018,'Tim McNamara'),(14,'mszatsiorsky@msn.com','$1$qiqDPghm$cguGD12xJ/kPQO7SNLhjf1','Adams',0,2017,'mike zats'),(15,'currier@gmail.com','$1$aeImLDvz$C.bF8Vt126JT/.yYv3J.e1','Currier',0,2018,'james zats'),(16,'Dunster@gmail.com','$1$YL/hd2lo$spJX1kG.lYAyi0VZ18LWB.','Dudley',0,2016,'james zatsiorsky'),(17,'dunsterman@gmail.com','$1$vgryDLlP$opuT9PjqHWq9UgRhoWZpo/','Dunster',0,2017,'james zats'),(18,'lowell@gmail.com','$1$Oh1v.Slp$smE1EMBskSye6yZsIUpUZ/','Lowell',0,2016,'James Lowell'),(19,'eliotman@gmail.com','$1$xjasRBM5$48G8SWX34HnQo97.u.4a70','Eliot',0,2017,'James Zatsiorsky'),(20,'jvzats@gmail.com','$1$GFKldswR$cFiT/K20JfGBHYYERZ0tA/','Cabot',1,2018,'James Zatsiorsky'),(21,'kell.rour@gmail.com','$1$iJTm8gcQ$T5G7ADN.0h3HFa5oRAwLx.','Cabot',1,2018,'Kelly Rourke'),(22,'mzats@gmail.com','$1$lwW51Tdh$qiv5o33Z6b6fvxukHD7r/1','Cabot',1,1,'Mike Zatsiorsky'),(23,'sez@gmail.com','$1$9kY4FTVK$Hw3/ZmT1b5aAshdkHmhSy0','Cabot',1,1,'Stacia Zatsiorsky'),(24,'kirkland@gmail.com','$1$H8yXGO.y$FD6iDOql0T6AaGtU.86/4.','Kirkland',1,2018,'James Zatsiorsky'),(25,'tmac@gmail.com','$1$bUVIWIoM$OgyiuuSD2CmvZF3d9thuw0','Cabot',1,2018,'Tim McNamara'),(26,'steve@gmail.com','$1$kNNWUwGj$JkPymOLwJti.wqIoD/mpW/','Cabot',1,1,'Steve Cassidy'),(27,'quincy@gmail.com','$1$PJkFzOcV$28dULbmAt745/xma8jvox0','Quincy',0,2017,'James Zatsiorsky'),(28,'eliot@gmail.com','$1$t/e1FGTo$XGP0Sj0yTi5LlHu2G10Fz.','Eliot',1,2018,'Eliot Wilking'),(29,'medgerley@college.havard.edu','$1$ESnozRJb$KjJEU7TsCgsOnre4kZtA50','Cabot',1,2018,'Matt Edgerley'),(30,'jac@gmail.com','$1$3/5JWV/5$LsJIkl.oBlO.8GadCLvdR.','Currier',1,2017,'Jess Clay'),(31,'nocaptain@gmail.com','$1$AryBwraI$uTbtEHC0wBlE545fEb1cg.','Mather',1,2018,'John Dove'),(32,'mib94@gmail.com','$1$MUp8x.ya$0t4nkb7d3EjS05x9aWS1N.','Cabot',1,2018,'Mouad Ibno Bachir'),(33,'rlaracuente@gmail.com','$1$PlarLX3I$RY2CuVpXh24bUosHU.slN.','Pforzheimer',0,2018,'Ron Laracuente'),(34,'mjamal@gmail.com','$1$YiZkDBKt$5X91CapxqanBSbnMOJWLL/','Pforzheimer',0,2018,'Mo Jamal'),(35,'samuelgreen@college.harvard.ed','$1$rAtWwHyI$l56fE0aF.fRz8G5VcHCV71','Cabot',1,2018,'Samuel Green'),(36,'joe@bob.com','$1$7xYrOJZK$Dzsi/2cfedWDepaAr57Ee/','Leverett',1,2016,'sam sam');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `venues`
--

DROP TABLE IF EXISTS `venues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `venues` (
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `venues`
--

LOCK TABLES `venues` WRITE;
/*!40000 ALTER TABLE `venues` DISABLE KEYS */;
INSERT INTO `venues` VALUES ('Beren','Beren Tennis Center','65 N. Harvard St, Allston, MA 02134',42.3695,-71.1288),('Gordon','Gordon Indoor Track','65 N. Harvard St, Allston, MA 02134',42.3679,-71.1276),('Hemenway','Hemenway Gymnasium','1515 Massachusetts Ave, Cambridge, MA 02138',42.377,-71.1196),('MAC','Malkin Athletic Center','39 Holyoke Street, Cambridge, MA 02138',42.3713,-71.1191),('QRAC','Quadrangle Recreational Athletic Center','66 Garden Street, Cambridge, MA',42.3816,-71.1265),('Stadium','Harvard Stadium','65 N. Harvard St, Allston, MA 02134',42.3671,-71.1264);
/*!40000 ALTER TABLE `venues` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-12-06 12:40:27
