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
  `gameid` int(5) unsigned NOT NULL,
  `sport` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `team1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `team2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `team1score` int(5) unsigned NOT NULL,
  `team2score` int(5) unsigned NOT NULL,
  PRIMARY KEY (`gameid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `games`
--

LOCK TABLES `games` WRITE;
/*!40000 ALTER TABLE `games` DISABLE KEYS */;
INSERT INTO `games` VALUES (1,'soccer','2014-11-05','11:30:00','MAC','Cabot','Leverett',1,1),(2,'football','2014-11-05','11:30:00','MAC','Lowell','Leverett',6,45),(3,'tennis','2014-11-05','11:30:00','MAC','Dunster','Dudley',1,0),(4,'football','2014-11-05','11:30:00','MAC','Cabot','Currier',23,20),(5,'basketball','2014-11-05','11:30:00','MAC','Cabot','Pforzheimer',17,3),(6,'football','2014-11-05','11:30:00','MAC','Adams','Winthrop',35,4),(7,'basketball','2014-11-05','11:30:00','MAC','Lowell','Pforzheimer',55,80),(8,'soccer','2014-11-05','11:30:00','MAC','Mather','Kirkland',2,7);
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
  `sport` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `date_time` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `likes` int(5) unsigned NOT NULL,
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB AUTO_INCREMENT=198 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `huddle`
--

LOCK TABLES `huddle` WRITE;
/*!40000 ALTER TABLE `huddle` DISABLE KEYS */;
INSERT INTO `huddle` VALUES (119,5,'Cabot','football','hi','26 Nov 2014 04:10:49 PM',18),(120,5,'Cabot','frisbee','hi','26 Nov 2014 04:10:54 PM',1),(121,5,'Cabot','frisbee','Play out in the quad lawn in 5?','26 Nov 2014 04:11:00 PM',1),(122,5,'Cabot','squash','QRAC in 10?','26 Nov 2014 04:11:22 PM',2),(123,12,'Adams','general','hey','26 Nov 2014 04:19:49 PM',92),(124,12,'Adams','general','yo','26 Nov 2014 04:20:24 PM',10),(125,12,'Adams','tennis','hey','26 Nov 2014 04:21:29 PM',0),(126,6,'cabot','football','Hey everyone','26 Nov 2014 04:26:14 PM',17),(127,6,'cabot','squash','No you suck.','26 Nov 2014 04:27:25 PM',2),(128,6,'cabot','tennis','Sup dude','26 Nov 2014 04:29:29 PM',2),(129,6,'cabot','tennis','hji','26 Nov 2014 04:29:39 PM',1),(130,6,'cabot','tennis','why does this not work sometimes','26 Nov 2014 04:30:00 PM',1),(131,6,'cabot','general','why','26 Nov 2014 04:30:12 PM',3),(132,6,'cabot','general','?','26 Nov 2014 04:30:58 PM',7),(133,6,'cabot','basketball','Go Crimson!','26 Nov 2014 04:31:08 PM',12),(134,12,'Adams','football','hi Adams football!','26 Nov 2014 04:31:53 PM',3),(135,12,'Adams','frisbee','hi','26 Nov 2014 04:32:17 PM',0),(136,12,'Adams','general','yp','26 Nov 2014 04:45:11 PM',3),(137,12,'Adams','squash','QRAC in 10?','26 Nov 2014 04:45:17 PM',0),(138,12,'Adams','basketball','go crimson!','26 Nov 2014 04:45:26 PM',0),(139,14,'Adams','general','get to sleep!!','26 Nov 2014 04:46:12 PM',1),(140,14,'Adams','squash','Sounds good. See you soon.','26 Nov 2014 04:46:27 PM',0),(141,9,'Adams','squash','Nevermind I can\'t make it.','26 Nov 2014 04:50:51 PM',0),(142,9,'Adams','frisbee','hey...','26 Nov 2014 04:53:21 PM',1),(143,9,'Adams','frisbee','Want to go play tennis?','26 Nov 2014 04:53:30 PM',2),(144,9,'Adams','tennis','howdy','26 Nov 2014 05:16:22 PM',0),(145,9,'Adams','basketball','loi','26 Nov 2014 05:21:48 PM',0),(146,9,'Adams','general','hi','26 Nov 2014 05:39:05 PM',2),(147,9,'Adams','general','yo','26 Nov 2014 05:39:45 PM',3),(148,9,'Adams','general','yoyoyoyo','26 Nov 2014 05:39:55 PM',7),(149,9,'Adams','general','yo','26 Nov 2014 05:40:17 PM',6),(150,9,'Adams','general','yo','26 Nov 2014 05:40:50 PM',6),(151,9,'Adams','general','hey','26 Nov 2014 05:41:04 PM',5),(152,9,'Adams','general','hey','26 Nov 2014 05:41:21 PM',13),(153,5,'Cabot','general','hey tim','26 Nov 2014 05:51:31 PM',9),(154,5,'Cabot','football','When is the next game?','26 Nov 2014 05:54:09 PM',63),(155,5,'Cabot','general','hey','26 Nov 2014 06:01:06 PM',8),(156,5,'Cabot','general','let\'s play!','26 Nov 2014 06:01:20 PM',2),(157,5,'Cabot','general','hey\n','26 Nov 2014 06:01:24 PM',4),(158,5,'Cabot','general','cmon','26 Nov 2014 06:01:27 PM',5),(159,5,'Cabot','general','leggo','26 Nov 2014 06:01:29 PM',5),(160,5,'Cabot','general','let\'s play','26 Nov 2014 06:07:27 PM',7),(161,5,'Cabot','football','c\'mon','26 Nov 2014 06:08:54 PM',12),(162,5,'Cabot','frisbee','yep','26 Nov 2014 06:09:05 PM',0),(163,5,'Cabot','soccer','Let\'s go Cabot Soccer!!','26 Nov 2014 06:09:22 PM',8),(164,5,'Cabot','general','hey man!','26 Nov 2014 07:22:11 PM',15),(165,5,'Cabot','general','We need more girls here','26 Nov 2014 07:22:21 PM',31),(166,15,'Currier','football','Hey Currier!','26 Nov 2014 08:11:24 PM',0),(167,16,'Dudley','general','Hey yall!','26 Nov 2014 08:18:39 PM',0),(168,17,'Dunster','football','we lost','26 Nov 2014 08:22:25 PM',0),(169,17,'Dunster','football','yep','26 Nov 2014 08:22:46 PM',1),(170,19,'Eliot','football','Yoooo','26 Nov 2014 08:26:02 PM',0),(171,19,'Eliot','football','Anyone want to play?','26 Nov 2014 08:26:08 PM',0),(172,5,'Cabot','frisbee','h','26 Nov 2014 11:11:50 PM',0),(173,5,'Cabot','general','Anyone want to play soon?','27 Nov 2014 10:42:07 AM',1),(174,5,'Cabot','soccer','Anyone want to play at 7?','27 Nov 2014 12:09:18 PM',4),(175,21,'Cabot','general','Hello. Now you have more girls. You\'re welcome.','27 Nov 2014 10:04:20 PM',3),(176,5,'Cabot','general','You\'re hilarious! lol','27 Nov 2014 10:05:43 PM',6),(177,5,'Cabot','general','hi','28 Nov 2014 09:11:15 AM',8),(178,5,'Cabot','general','anyone here?','28 Nov 2014 09:47:40 AM',6),(179,5,'Cabot','general','miss you guys','28 Nov 2014 09:47:46 AM',13),(180,23,'Cabot','squash','Hi Sam','28 Nov 2014 10:56:03 AM',2),(181,23,'Cabot','general','hi','28 Nov 2014 01:10:12 PM',30),(182,12,'Adams','general','sup','28 Nov 2014 04:53:59 PM',0),(183,24,'Kirkland','general','Hello Kirkland!','29 Nov 2014 10:15:10 AM',1),(184,24,'Kirkland','tennis','Want to play soon?','29 Nov 2014 10:22:25 AM',0),(185,5,'Cabot','general','hi','30 Nov 2014 01:00:20 PM',2),(186,12,'Adams','general','yo bro','30 Nov 2014 05:08:47 PM',1),(187,12,'Adams','general','COME ON!!','30 Nov 2014 05:15:46 PM',0),(188,12,'Adams','general','we need to STEP UP our GAME!\n','30 Nov 2014 05:15:54 PM',1),(189,12,'Adams','general','ok','30 Nov 2014 05:16:09 PM',0),(190,12,'Adams','general','hi','30 Nov 2014 05:16:12 PM',0),(191,12,'Adams','soccer','hi everyone','30 Nov 2014 05:18:52 PM',0),(192,12,'Adams','soccer','want to kisS?','30 Nov 2014 05:19:02 PM',0),(193,12,'Adams','general','love him','30 Nov 2014 05:39:46 PM',0),(194,12,'Adams','general','want to kiss him','30 Nov 2014 05:39:50 PM',0),(195,26,'Cabot','general','hi','30 Nov 2014 06:27:50 PM',21),(196,5,'Cabot','squash','Hey','30 Nov 2014 10:40:43 PM',1),(197,5,'Cabot','general','hi','30 Nov 2014 10:49:01 PM',1);
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
INSERT INTO `huddlelikes` VALUES (5,120),(5,121),(5,122),(5,127),(5,131),(5,132),(5,133),(5,153),(5,155),(5,156),(5,157),(5,158),(5,159),(5,164),(5,165),(5,173),(5,175),(5,176),(5,177),(5,178),(5,179),(5,180),(5,181),(5,185),(5,195),(5,196),(5,197);
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
INSERT INTO `mygames` VALUES (5,1),(5,4),(5,5);
/*!40000 ALTER TABLE `mygames` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rosters`
--

DROP TABLE IF EXISTS `rosters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rosters` (
  `gameid` int(5) unsigned NOT NULL,
  `house` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`gameid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rosters`
--

LOCK TABLES `rosters` WRITE;
/*!40000 ALTER TABLE `rosters` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (5,'jzatsiorsky@gmail.com','$1$pAwgGvom$pJkQ5YWxsHzJx25bIN.rI.','Cabot',1,2017,'James Zatsiorsky'),(6,'tmcnamara@college.harvard.edu','$1$QHOQybrs$yvXhnYF4IJn5OFZ2C4jMP/','cabot',0,2017,'Tim McNamara'),(7,'szatsiorsky@gmail.com','$1$4oEVAG1A$TdruVklWbc9nNT5Mo9RNA/','dunster',0,2016,'Stacia Zatsiorsky'),(8,'mibnobachir@college.harvard.ed','$1$D5/37H.A$O8oPeVXnupUnSKA5pX3PX1','cabot',0,2018,'Mouad Ibno Bachir'),(9,'mszatsiorsky@gmail.com','$1$jTeLgK4Y$W.HMj/sX3C7Jjxy/NqfNI.','Adams',0,2018,'mike Z'),(10,'szatsiorsky@seas.harvard.edu','$1$G5EUUaH/$NfPQ6MgCb28UCI0tOCqR.1','Cabot',0,1,'Stacia Zatsiorsky'),(11,'jaclyn@gmail.com','$1$sKqrpYSH$.6IB27Y0AvHaj1Bvvlf4U/','Adams',0,2016,'Jaclyn Zatsiorsky'),(12,'jmzatsiorsky@gmail.com','$1$5Vi2heQA$8Shu8IKdGUQ6pr5zBbQI5/','Adams',1,1,'Jaclyn  Zatsiorsky'),(13,'tmcac@gmail.com','$1$SnLX1yg.$jGLNWX.9hQY9Plh9xKxsA1','Cabot',0,2018,'Tim McNamara'),(14,'mszatsiorsky@msn.com','$1$qiqDPghm$cguGD12xJ/kPQO7SNLhjf1','Adams',0,2017,'mike zats'),(15,'currier@gmail.com','$1$aeImLDvz$C.bF8Vt126JT/.yYv3J.e1','Currier',0,2018,'james zats'),(16,'Dunster@gmail.com','$1$YL/hd2lo$spJX1kG.lYAyi0VZ18LWB.','Dudley',0,2016,'james zatsiorsky'),(17,'dunsterman@gmail.com','$1$vgryDLlP$opuT9PjqHWq9UgRhoWZpo/','Dunster',0,2017,'james zats'),(18,'lowell@gmail.com','$1$Oh1v.Slp$smE1EMBskSye6yZsIUpUZ/','Lowell',0,2016,'James Lowell'),(19,'eliotman@gmail.com','$1$xjasRBM5$48G8SWX34HnQo97.u.4a70','Eliot',0,2017,'James Zatsiorsky'),(20,'jvzats@gmail.com','$1$GFKldswR$cFiT/K20JfGBHYYERZ0tA/','Cabot',1,2018,'James Zatsiorsky'),(21,'kell.rour@gmail.com','$1$iJTm8gcQ$T5G7ADN.0h3HFa5oRAwLx.','Cabot',1,2018,'Kelly Rourke'),(22,'mzats@gmail.com','$1$lwW51Tdh$qiv5o33Z6b6fvxukHD7r/1','Cabot',1,1,'Mike Zatsiorsky'),(23,'sez@gmail.com','$1$9kY4FTVK$Hw3/ZmT1b5aAshdkHmhSy0','Cabot',1,1,'Stacia Zatsiorsky'),(24,'kirkland@gmail.com','$1$H8yXGO.y$FD6iDOql0T6AaGtU.86/4.','Kirkland',1,2018,'James Zatsiorsky'),(25,'tmac@gmail.com','$1$bUVIWIoM$OgyiuuSD2CmvZF3d9thuw0','Cabot',1,2018,'Tim McNamara'),(26,'steve@gmail.com','$1$kNNWUwGj$JkPymOLwJti.wqIoD/mpW/','Cabot',1,1,'Steve Cassidy');
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

-- Dump completed on 2014-11-30 23:18:18
