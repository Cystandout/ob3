-- MySQL dump 10.13  Distrib 5.5.47, for Win32 (x86)
--
-- Host: localhost    Database: secondhand
-- ------------------------------------------------------
-- Server version	5.5.47

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
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cart` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `states` varchar(60) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `photo` varchar(5) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cart`
--

LOCK TABLES `cart` WRITE;
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
INSERT INTO `cart` VALUES (1,'兰博基尼商务手机','全球限量版世界顶配级安卓系统','36842','1'),(6,'日本KDK台式电风扇（仅供欣赏）','百岁电风扇、夏日正好用、扇老心不老、功能全正常！难得一见也。[愉快]','\r\n666','6'),(2,'三星W2016','心率监测经典翻盖曲面设计无线急速充电','13849','2');
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shangpin`
--

DROP TABLE IF EXISTS `shangpin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shangpin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(25) DEFAULT NULL COMMENT '商品名',
  `states` varchar(100) DEFAULT NULL COMMENT '描述',
  `price` varchar(5) DEFAULT NULL COMMENT '价格',
  `photo` varchar(30) DEFAULT '' COMMENT '图片',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shangpin`
--

LOCK TABLES `shangpin` WRITE;
/*!40000 ALTER TABLE `shangpin` DISABLE KEYS */;
INSERT INTO `shangpin` VALUES (1,'兰博基尼商务手机','全球限量版世界顶配级安卓系统','36842','1'),(2,'三星W2016','心率监测经典翻盖曲面设计无线急速充电','13849','2'),(3,'刘德华定制演绎鞋珍珠玛瑙男鞋南红钻石鞋珠宝混搭男鞋','刘德华定制演绎鞋珍珠玛瑙男鞋南红钻石鞋珠宝混搭男鞋炫彩舞台鞋','\r\n999','3'),(4,'进口蟒蛇皮男士休闲球鞋 土豪金豆豆鞋 魔术贴男款休','适用对象: 青年（18-40周岁）','\r\n100','4'),(5,'志高电风扇 落地扇 摇头升降电风扇 节能 学生宿舍','高效节能 性价比高','\r\n100','5'),(6,'日本KDK台式电风扇（仅供欣赏）','百岁电风扇、夏日正好用、扇老心不老、功能全正常！难得一见也。[愉快]','\r\n666','6');
/*!40000 ALTER TABLE `shangpin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yonghu`
--

DROP TABLE IF EXISTS `yonghu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `yonghu` (
  `username` varchar(20) NOT NULL DEFAULT '',
  `nickname` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '0',
  `age` varchar(5) DEFAULT NULL,
  `sex` varchar(5) DEFAULT NULL,
  `logincount` int(5) NOT NULL DEFAULT '0',
  `regtime` datetime DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yonghu`
--

LOCK TABLES `yonghu` WRITE;
/*!40000 ALTER TABLE `yonghu` DISABLE KEYS */;
INSERT INTO `yonghu` VALUES ('sdsa','1','63a9f0ea7bb98050796b649e85481845','22','男',15,'0000-00-00 00:00:00'),('aaa','9','c4ca4238a0b923820dcc509a6f75849b','23','女',15,'0000-00-00 00:00:00'),('bbb','7','c81e728d9d4c2f636f067f89cc14862c','45','男',15,'0000-00-00 00:00:00'),('wd','8','eccbc87e4b5ce2fe28308fd9f2a7baf3','62','女',9,'0000-00-00 00:00:00'),('ascs','5','a87ff679a2f3e71d9181a67b7542122c','12','男',8,'0000-00-00 00:00:00'),('dsd','4','63a9f0ea7bb98050796b649e85481845','33','男',8,'0000-00-00 00:00:00'),('1232','32r','c4ca4238a0b923820dcc509a6f75849b','34','女',7,'0000-00-00 00:00:00'),('的dsvdv','啊恶搞','698d51a19d8a121ce581499d7b701668','23','女',7,'0000-00-00 00:00:00'),('132','23r','6512bd43d9caa6e02c990b0a82652dca','22','女',7,'0000-00-00 00:00:00'),('123','213','979d472a84804b9f647bc185a877a8b5','213','123',7,'0000-00-00 00:00:00'),('嗯ask据','3','c4ca4238a0b923820dcc509a6f75849b','345','男',2,'2016-07-04 09:00:00'),('EWDAV','SADVAS','c81e728d9d4c2f636f067f89cc14862c','fdsvd','sdfvd',7,'0000-00-00 00:00:00'),('agrag','SADVAS','d41d8cd98f00b204e9800998ecf8427e','fdsvd','sdfvd',7,'2016-07-03 00:00:00'),('hafidiu','dasvfasv','c4ca4238a0b923820dcc509a6f75849b','34','av',7,'2016-07-03 12:35:00'),('高富帅','2','c4ca4238a0b923820dcc509a6f75849b','23','男',7,'2016-07-03 22:01:00'),('sahfkjvhsd','5','c4ca4238a0b923820dcc509a6f75849b','32','男',1,'2016-07-04 09:31:00');
/*!40000 ALTER TABLE `yonghu` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-07-04 17:13:02
