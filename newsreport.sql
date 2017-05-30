-- MySQL dump 10.13  Distrib 5.5.53, for Win32 (AMD64)
--
-- Host: localhost    Database: newsreport
-- ------------------------------------------------------
-- Server version	5.5.53

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
-- Current Database: `newsreport`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `newsreport` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `newsreport`;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'root','e10adc3949ba59abbe56e057f20f883e');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `fromip` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `dateline` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (21,'杰克逊最危险的演唱会：7.2万观众晕倒5000人，死亡23人','今日头条','今日头条','<p>无论哪场演唱会，只要跟杰克逊有任何关系，规模、人数就一定小不了。当然，每场演唱会也充满着危险。迈克尔杰克逊1992年的布加勒斯特演唱会，堪称史上最经典最成功的演唱会，但是同时它也成了MJ最危险的一场演唱会，因为在这场演唱会上，7万2000名现场观众，因见偶像情绪失控共晕倒了5000人，其中23人死亡（不少人是因为受到刺激而诱发心肌梗塞，更有人因为跌倒被踩踏而死）。</p>\r\n\r\n<p>据报道称，当时整个演唱会现场人山人海，很多歌迷还没有入场观看，而是在场外聆听，再加上数十家电视台直播，这场演唱会大约共吸引了50万人观看，因而当时罗马尼亚只好派出军队来维持演唱会秩序。</p>\r\n\r\n<p>因为迈克尔杰克逊的影响力及演唱会事故前例，演唱会举办方共安排了2000人的医疗队伍，那些晕倒的人由现场粉丝抬出之后，交给医疗队进行救治。</p>\r\n\r\n<p>这场演唱会差不多一分钟就会有10个歌迷因为刺激而情绪失控导致晕厥被抬出现场。</p>\r\n\r\n<p>至于为什么这场演唱会让这么多粉丝如此疯狂，除了跟杰克逊的音乐影响力有关之外，更是因为，<strong>当时罗马尼亚非常落后的文化状况息息相关，如此盛会在罗马尼亚历史上前所未有</strong>，再说到现场舞美，也是规模空前，<strong>单是安装演唱会的舞台道具，灯光，音响设备和激光系统就得花上3天时间。用于运送这些设施的卡车也达20辆之多。</strong></p>\r\n\r\n<p>杰克逊一出场，绚丽舞美效果、杰克逊的顶级舞步，足以让全场粉丝沸腾、尖叫，尤其是女粉丝，更是疯狂不已，嘶喊尖叫此起彼伏，直到昏厥。</p>\r\n',1496126920),(22,'段子一','今日头条','今日头条','<p>一个妹子被3个男人绑架了，这三个男人一个是贼，一个是强盗，一个是帅哥，3个男人让妹子从他们之间选一个做丈夫，最后妹子选择了贼，为什么？</p>\r\n',1496129839),(23,'段子二','今日头条','今日头条','<p>我曾经白酒一公斤，啤酒随便拎，一个晚上对付三十几个，喝趴下16个，失踪4个。 令无数人闻风丧胆！不管是夺命63度.还是雪花勇闯天涯，倒满必干！但现在我为何退出江湖，归隐山林？两瓶就倒，三瓶就断片？是什么让我改变如此之大！？是仇恨？还是爱情？ 拿起你的手机，关注我并编辑发送&ldquo;端午节我要请你吃饭&rdquo;，与昔日酒神面对面交流，倾听我背后的故事，揭开我背后的心酸&hellip;&hellip;</p>\r\n',1496129906),(24,'段子三','今日头条','今日头条','<p>老师问：&ldquo;你最喜欢的诗人是谁？&rdquo;一同学曰：&ldquo;屈原。&rdquo;老师问他为什么，他说：因为屈原最有良心，别的诗人一死就留下一大堆诗给我们背，屈原一死，给我们留下好吃的棕子和三天端午假！全班静默三秒后，响起了经久不绝的掌声&hellip;.. 祝各位段友端午节吉祥</p>\r\n',1496131697),(25,'段子四','今日头条','今日头条','<p>人要学会装傻，有时候知道的多了，未必是件好事，发现了真相，疼的是心，戳穿了谎言，冷的是情，以为可以相信的人，看到的却是无情和欺骗，以为牢不可破的关系，其实不堪一击， 装糊涂，是一种难得智慧，也许会更豁达，也许会更快乐，人生不必活得太清醒，事情不必看得太透明，难为了别人，困扰了自己，顺其自然 ，知足常乐。足矣！！！傻傻的挺好 ， 难得糊涂，不是我不懂，而是我不想懂！</p>\r\n',1496129992),(28,'灰色轨迹','黄家驹','网易云音乐','<p>不想你别去</p>\r\n',1496131960),(29,'再见理想','黄家驹','网易云音乐','<p>你和我毕竟相识过</p>\r\n',1496132123),(30,'她说','林俊杰','网易云音乐','<p>等不到天黑，黑夜不会太完美2009222 终于等到你</p>\r\n',1496133604),(32,'怪你过分美丽','张国荣','网易云音乐','<p>怪你过分美丽</p>\r\n',1496136499),(33,'回不去了吗','萧亚轩','网易云音乐','<h1>回不去了吗</h1>\r\n',1496136872);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-30 17:51:22
