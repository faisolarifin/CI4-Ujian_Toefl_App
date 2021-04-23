-- MariaDB dump 10.17  Distrib 10.4.14-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: ujiantoefl_db
-- ------------------------------------------------------
-- Server version	10.4.14-MariaDB

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
-- Current Database: `ujiantoefl_db`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `ujiantoefl_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `ujiantoefl_db`;

--
-- Temporary table structure for view `summary`
--

DROP TABLE IF EXISTS `summary`;
/*!50001 DROP VIEW IF EXISTS `summary`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE TABLE `summary` (
  `id_user` tinyint NOT NULL,
  `tgl_start` tinyint NOT NULL,
  `r` tinyint NOT NULL,
  `l` tinyint NOT NULL,
  `s` tinyint NOT NULL
) ENGINE=MyISAM */;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `t_bagian`
--

DROP TABLE IF EXISTS `t_bagian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_bagian` (
  `id_bagian` int(11) NOT NULL AUTO_INCREMENT,
  `nm_section` varchar(50) NOT NULL,
  `limit_time` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `direction` text NOT NULL,
  PRIMARY KEY (`id_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_bagian`
--

LOCK TABLES `t_bagian` WRITE;
/*!40000 ALTER TABLE `t_bagian` DISABLE KEYS */;
INSERT INTO `t_bagian` VALUES (1,'Reading Comprehension',35,'pemahaman bacaan','<h5>SECTION 1</h5>                        \r\n<h5>READING COMPREHENSION</h5>                         \r\n\r\n<h6>Time-55 minutes</h6>\r\n\r\n<h6>(including the reading of the directions)</h6>\r\n\r\n<h6>Now set your clock for 55 minutes.</h6>\r\n\r\n<p>This section is designed to measure the ability to read and understand short passages similar in topic and style to those found in North American universities and colleges.</p>\r\n\r\n<p>Directions: In this section you will read several passages. Each one is followed by a number of questions about it. You are to choose the one best answer, A, B, C or D, to each question. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen.</p>\r\n\r\n<p>Answer all questions about the information in a passage on the basis of what is stated or implied in that passage.</p>\r\n\r\n<p>Read the following passage:</p>\r\n\r\n<p>John Quincy Adams, who served as the sixth president of the United States from 1825 to 1829, is today recognized for his masterful statesmanship and diplomacy. He dedicated his life to public service, both in the presidency and in the various other political offices that he held. Throughout his political career he demonstrated his unswerving belief in freedom of speech, the antislavery cause, and the right of Americans to be free from European and Asian domination.</p>\r\n\r\n<p><strong>Example I</strong></p>\r\n\r\n<p>To what did John Quincy Adams devote his life?</p>\r\n\r\n<p>(A) Improving his personal life <br>\r\n(B) Serving the public <br>\r\n(C) Increasing his fortune <br>\r\n(D) Working on his private business </p>\r\n\r\n<p>According to the passage, John Quincy Adams “dedicated his life to public service.” Therefore, you should choose (B).</p>\r\n\r\n<p><strong>Example II</strong></p>\r\n\r\n<p>In line 4, the word “unswerving” is closest in meaning to</p>\r\n\r\n<p>(A) movable <br>\r\n(B) insignificant <br>\r\n(C) unchanging <br>\r\n(D) diplomatic</p>\r\n\r\n<p>The passage states that John Quincy Adams demonstrated his unswerving belief “throughout his career.” This implies that the belief did not change. Therefore, you should choose (C).</p>\r\n\r\n<p>Now begin work on the questions.</p>'),(2,'Listening Comprehension',40,'pemahaman dalam mendengarkan','<h5>SECTION 2</h5>                         <h5>LISTENING COMPREHENSION</h5>                         <p>Time-approximately 35 minutes</p>  \r\n                         <p>(including the reading of the directions for each part) <br>                             In this section of the test, you will have an opportunity to demonstrate your ability to understand conversations and talks in English. There are three parts to this section. Answer all the questions on . the basis of what is stated or implied by the speakers you hear. Do not take notes or write in your test book at any time. Do not turn the pages until you are told to do so.</p>                         <h5>PART A</h5>                         <p><strong>Directions:</strong> In Part A you will hear short conversations between two people. After each conversation, you will hear a question about the conversation. The conversations and questions will not be repeated. After you hear a question, read the four possible answers in your test book and choose the best answer. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen. <br>                              Listen to an example.</p>                          <p>On the recording, you hear:</p>                          <p>(man) That exam was just awful.                         <br>(woman) Oh, it could have been worse.                         <br>(narrator) What does the woman mean?</p>                          <p>In your test book, you read: (A)  The exam was really awful.                         <br>(B)  It was the worst exam she had ever seen.                         <br>(C)  It couldn’t have been more difficult.                         <br>(D)  It wasn’t that hard.</p>                          <p>You learn from the conversation that the man thought the exam was very difficult and that the                         <br>woman disagreed with the man. The best answer to the question, “What does the woman mean?” is                         <br>(D), “It wasn’t that hard.” Therefore, the correct choice is (D).</p>                         <p>(A)  The coffee is much better this morning.                         <br>(B)  The coffee tastes extremely good.                         <br>(C)  The coffee isn’t very good.                         <br>(D)  This morning he definitely wants some coffee.</p>'),(3,'Grammar Structure and Written Expression',40,'struktur dan ungkapan tertulis','<h5>SECTION 3</h5>                         <h5>Grammar Stucture and Written Expression</h5>                         <p>This section is designed to measure your ability to recognize language that is appropriate for standard written English. There are two types of questions in this section, with special directions for each type.<p>\r\n\r\n<p><strong>Structure</strong></p>\r\n\r\n<p>Directions: Questions 1–4 are incomplete sentences. Beneath each sentence you will see four words or phrases marked A, B, C and D. Choose the one word or phrase that best completes the sentence. Then, on your answer sheet, find the number of the question and fill in the space that corresponds to the letter of the answer you have chosen.</p>\r\n\r\n<p>Look at the following examples:<br>\r\nExample I</p>\r\n\r\n<p>Geysers have often been compared to volcanoes _______ they both emit hot liquids from below the Earth’s surface.</p>\r\n\r\n<p>A. due to <br>\r\nB. because <br>\r\nC. in spite of <br>\r\nD. regardless of <br>\r\nThe sentence should read, “Geysers have often been compared to volcanoes because they both emit hot liquids from below the Earth’s surface.” Therefore, you should choose answer B.</p>\r\n\r\n<p><strong>Example II</strong></p>\r\n\r\n<p>During the early period of ocean navigation, ________ any need for sophisticated instruments and techniques.</p>\r\n\r\n<p>A. so that hardly<br>\r\nB. where there hardly was <br>\r\nC. hardly was <br>\r\nD. there was hardly <br>\r\nThe sentence should read, “During the early period of ocean navigation, there was hardly any need for sophisticated instruments and techniques.” Therefore, you should choose answer D.</p>');
/*!40000 ALTER TABLE `t_bagian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_jawab`
--

DROP TABLE IF EXISTS `t_jawab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_jawab` (
  `id_tes` int(11) NOT NULL,
  `id_soal` int(11) NOT NULL,
  `jawaban` varchar(4) NOT NULL,
  `eval` enum('benar','salah') NOT NULL,
  KEY `id_tes` (`id_tes`),
  KEY `id_soal` (`id_soal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_jawab`
--

LOCK TABLES `t_jawab` WRITE;
/*!40000 ALTER TABLE `t_jawab` DISABLE KEYS */;
/*!40000 ALTER TABLE `t_jawab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_soal`
--

DROP TABLE IF EXISTS `t_soal`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_soal` (
  `id_soal` int(11) NOT NULL AUTO_INCREMENT,
  `id_bagian` int(11) NOT NULL,
  `id_topik` int(11) DEFAULT NULL,
  `no_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `opsi_a` text NOT NULL,
  `opsi_b` text NOT NULL,
  `opsi_c` text NOT NULL,
  `opsi_d` text NOT NULL,
  `jawaban` varchar(1) NOT NULL,
  PRIMARY KEY (`id_soal`),
  KEY `id_bagian` (`id_bagian`),
  KEY `id_topik` (`id_topik`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_soal`
--

LOCK TABLES `t_soal` WRITE;
/*!40000 ALTER TABLE `t_soal` DISABLE KEYS */;
INSERT INTO `t_soal` VALUES (1,1,1,1,'The main point of this passage is that','carbon tetrachloride used to be a regular part of cleaning compound','although carbon tetrachloride can legally be used in industry, it is not allowed in home products','the government banned carbon tetrachloride in 1970','carbon tetrachloride can be very dangerous when it is heated','B'),(2,1,1,2,'The word “widely” in line 2 could most easily be replaced by','extensively','hugely','grandly','largely','A'),(3,1,1,3,'The word “banned” in line 4 is closest in meaning to','suggested','allowed','forbidden','instituted','C'),(4,1,1,4,'According to the passage, before 1970 carbon tetrachloride was','not allowed in home cleaning products','often used as a component of cleaning products','banned in industrial use','used by itself as a cleanser','B'),(5,1,1,5,'It is stated in the passage that when carbon tetrachloride is heated, it becomes','harmful','colorless','a cleaning compound','inflammable','A'),(6,1,1,6,'The word “inhaled” in line 7 is closest in meaning to','warmed','breathed in','carelessly used','blown','B'),(7,1,1,7,'The word “revoked” in line 8 could most easily be replaced by','took away','gave','instituted','granted','A'),(8,1,1,8,'It can be inferred from the passage that one role of the U.S. government is to','prohibit any use of carbon tetrachloride','ban the use of any chemicals','regulate product safety','instruct industry on cleaning methodologies','C'),(9,1,1,9,'The paragraph following the passage most likely discusses','further dangerous effects of carbon tetrachloride','the banning of various chemical compounds by the U.S. government','additional uses of carbon tetrachloride','the major characteristic of carbon tetrachloride','B'),(10,2,3,1,'','The coffee is much better this morning',' The coffee tastes extremely good.','The coffee isn\'t very good.','This morning he definitely wants some coffee.','C'),(11,2,4,2,'','Two times a week the class meets for an hour.','The two classes meet in an hour and a half.','The class meets three hours per week.','Each half of the class is an hour long.','C'),(12,2,5,3,'','They are frightened about the departure.','The fight will start in a while.','The plane is going to take off soon.','A few minutes ago, the flight departed.','C'),(13,3,0,1,'The North Pole___________ a latitude of 90 degrees north.','has','which is having','is having',' it has','A'),(14,3,0,2,'The city of Beverly Hills is surrounded on ________ the city of Los Angeles.','it is the side of','all sides by','the sides are','its sides','B'),(15,3,0,3,'________ greyhound, can achieve speeds up to thirty-six miles per hour.','The','The fastest','The fastest dog, the','The fastest dog','D'),(19,1,2,10,'The paragraph preceding this passage most likely discusses','Whistler’s other famous paintings','a different American artist','European artists','A survey of eighteenth-century art','B'),(20,1,2,11,'Which of the following best describes the information in the passage?',' Whistler’s family life is outlined.','One artist’s life and works are described','Several artists are presented',' Various paintings are contrasted','B'),(21,1,2,12,' Whistler is considered an American artist because','he served in the U.S. military','he was born in America',' he created most of his famous art in America','he spent most of his life in Americat','B'),(22,1,2,13,'The world “majority” in line 2 is closest in meaning to','seniority','high percentage','maturity','large pices','B'),(23,1,2,14,'It is implied in the passage that Whistler’s family was','unable to find any work at all in Rusia','highly supportive of his desire to pursue art','working class','military','C'),(24,1,2,15,'The word “objections” in line 7 is closest in meaning to','goals','agreements','battles','protests','D'),(25,1,2,16,'In line 8, the “etchings” are','a type of painting','the same as a lithograph','an art form introduced by Whistler','an art form involving engraving','D'),(26,1,2,17,' The word “asymmetrical” in line 11 is closest in meaning to',' lyrical','balanced','uneven','proportionate','C'),(27,1,2,18,'Which of the following is NOT true according to the passsage?','Whistler work with a variety of art forms.','Whistler’s Mother is not the official name of his painting.','Whistler is best known for his etchings.','Whistler’s Mother is painted in somber tones.','C'),(28,1,2,19,'where in the passage does the author mention the types of artwork that Whistler was involved in?','Lines 1-3','Lines 4-5','Lines 6-7','Lines 8-10','D'),(29,1,28,20,'Which of the following is the best title for this passage?','Planetary Movement','What the eye can see in the sky','The Evermoving stars','Bernard\'s star','C'),(30,1,28,21,'The expression”naked eye” in line 1 most probably refers to','a telescope','a scientific method for observing stars','a camera with a powerful lens','unassisted vision','D'),(31,1,28,22,'According to the passage, the distances between the stars and Earth are','barely perceptible','huge','moderate','fixed','B'),(32,1,28,23,'The word “perceptible” in line 5 is closest in meaning to which of the following?','astonishing','conceivable','persusive','noticeable','D'),(33,1,28,24,'In line 6, a “misconception” is closest in meaning to a (n)','idea','erroneous belief','theory',' proven fact','B'),(34,1,28,25,'The passage states that in 200 years Bernard’s star can move','around Earth\'s moon','next to the earth\'s moon','a distance equal to the distance from earth to the moon','a distance seemingly equal to the diameter of the moon','C'),(35,1,28,26,'The passage implies that from earth it appears that the planets','travel through the sky considerably more rapidly than the stars','show approximately the same amount of movement as the stars','move more slowly than the stars',' are fixed in the sky','A'),(36,1,28,27,'The word “negligible” in line 8 could most easily be replaced by','negative','negative','insignificant','rapid','C'),(37,1,28,28,'Which of the following is NOT true according to the passage?','starts do not appear to the eye to move.','the large distances between stars and the earth tend to magnify movement to the eye','Bernard\'s star moves quickly in comparison with other stars','although stars move, they seem to be fixed','B'),(38,1,28,29,'the movement of the planets','Bernard\'s star','why stars are always moving','why stars are always moving',' the movement of the planets','D'),(39,1,28,30,'This passage would most probably be assigned reading in which course?','astrology','geophysics','geograpy','astronomy','D'),(40,3,0,4,'Marmots spend their time foraging among meadow plants and flowers or ________ on rocky cliffs.',' the sun','gets sun','sunny','sunning','D'),(41,3,0,5,'The greenhouse effect occurs ________ heat radiated from the Sun.','when does the Earth’s atmosphere trap','the Earth’s atmosphere traps','the Earth’s atmosphere traps','when the Earth’s atmosphere traps','D'),(42,3,0,6,'The Rose Bowl, ________ place on New Year’s Day, is the oldest postseason collegiate football game in the United States.','took',' it takes',' takes','which takes','D'),(43,3,0,7,' Experiments ________ represent a giant step into the medicine of the future.','gene therapy uses','they use','use gene therapy','using gene therapy','D'),(44,3,0,8,'________ off the Hawaiian coastline are living, others are dead.',' Coral reefs','There are many types of coral reefs','Some types of coral reefs',' While some types of coral reefs','D'),(45,3,NULL,9,'Nimbostratus clouds are thick, dark gray clouds ________ forecast rain.','which','what','what they',' which they','A'),(46,3,0,10,'Some economists now suggest that home equity loans are merely a new trap to push consumers beyond ________.','they can afford','they can afford it','able to afford','what is affordable','D'),(47,3,0,11,'People who reverse the letters of words ________ to read suffer from dyslexia.','if he tries','if they tried','when trying','when tried','C'),(48,3,0,12,'Featured at the Henry Ford Museum ________ of antique cars dating from 1865.','which is an exhibit',' is an exhibit','an exhibit is','an exhibit','B'),(49,3,NULL,13,'Rubber ________ from vulcanized silicones with a high molecular weight is difficult to distinguish from natural rubber.','is produced','producing','that produces','produced','D'),(50,3,0,14,'________ appears considerably larger at the horizon than it does overhead is merely an optical illusion.','When the Moon','The Moon which','That the Moon','The Moon','C'),(51,3,0,15,'According to the World Health Organization, ________ there to be an outbreak of any of the six most dangerous diseases, it could be cause for quarantine.','were they','were','they were','there were','B'),(52,3,0,16,'On <u>the floor of</u> the Pacific Ocean <u>is</u> hundreds of <u>flat-topped</u> mountains <u>more than</u> a mile','the floor of','is','flat-topped','more than','B'),(53,3,0,17,'Because of the flourish with <u>which</u> John Hancock signed the Declaration of Independence,\r\n<u>his</u> name <u>become</u> <u>synonymous</u> with signature.','synonymous','which','his','become','D'),(54,3,NULL,18,'Segregation in <u>public</u> schools <u>was declare</u> <u>unconstitutional</u> by the Supreme Court <u>in 1954</u>.','in 1954','public','was declare','unconstitutional','C'),(55,3,NULL,19,'Sirius, the Dog Star, is <u>the most brightest star</u> in the sky with <u>an absolute</u> magnitude about <u>twenty-three times</u> <u>that</u> of the Sun.','twenty-three times','the most brightest star','an absolute','that','B'),(56,3,0,20,'Killer whales <u>tend</u> <u>to wander</u> in family clusters that hunt, play, and <u>resting</u> <u>together</u>.','to wander','tend','together','resting','D'),(57,2,19,4,'','He\'s been working steadily on his science project.','He needs to start working on changing the due date.','He\'s supposed to do his science project next week.','He hasn\'t yet begun his project.','D'),(58,2,20,5,'',' At the post office','In a florist shop','In a hospital delivery room',' In a restaurant','B'),(59,2,21,6,'','The professor drowned the cells in a lab.','The lecture was long and boring.','The biologist tried to sell the results of the experiment.','The professor divided the lecture into parts.','B'),(60,2,22,7,'','Two pieces of identification are necessary.',' The man should check to see if he needs credit.',' A credit card can be used to get a driver\'s license.',' She needs to get a driver\'s license.','A'),(61,2,23,8,'','Housing within his budget is hard to locate.','Housing in New York is unavailable.',' It\'s hard to find his house in New York.','He can\'t afford to move his house to New York.','A'),(62,2,24,9,'','The boss was working on the reports.','He would have to finish the reports before the end of next month.','He was directed to stay late and finish some work.','He could finish the reports at home.','C'),(63,2,25,10,'','The students were angry that the teacher was around.','The boisterous students made the teacher mad.','The angered students complained to the teacher.',' The teacher angered the students with the exam results.','B'),(64,2,26,11,'','He would like the woman to repeat what she said.','The prices are reasonable.',' The store is too far out of town.','He agrees with the woman.','B'),(65,2,27,12,'',' It\'s been many years since it rained.',' There hasn\'t been any rain for many years.','He doesn\'t like rain.',' It\'s rained unusually hard this year.','A'),(66,3,0,21,'<u>Some</u> of the <u>most useful resistor</u> <u>material</u> are carbon, metals, and <u>metallic</u> alloys.','Some of','metallic','most useful resistor','material','D'),(67,3,NULL,22,'<u>The community</u> of Bethesda, Maryland, was <u>previous</u> <u>known</u> <u>as</u> Darcy’s Store.','as','previous','The community','known','B'),(68,3,NULL,23,'Alloys of gold and copper <u>have</u> been <u>widely</u> <u>using</u> in <u>various types</u> of coins.','widely','have','various types','using','D'),(69,3,NULL,24,'J. H. Pratt used <u>group</u> therapy <u>early</u> in this century <u>when</u> he brought tuberculosis patients together to discuss <u>its</u> disease.',' when he',' its','early','group','B'),(70,3,0,25,'The United States has <u>import</u> <u>all</u> carpet wools in recent years <u>because</u> domestic wools are <u>too fine</u> and soft for carpets.',' import','because','too fine','all','A'),(71,3,0,26,' Irving Berlin <u>wrote</u> “Oh How I Hate to Get Up in the Morning” <u>while serving</u> in <u>a</u> U.S. Army <u>during</u> World War 1.','wrote','a','while serving','during','B'),(72,3,0,27,'Banks <u>are rushing</u> to merge because consolidations <u>enable them</u> to slash <u>theirs</u> costs and <u>expand</u>.','enable them','are rushing','theirs',' expand','C'),(73,3,0,28,'<u>That</u> water has a very high specific heat <u>means</u> that without a large temperature change water can <u>add or lose</u> a large <u>number</u> of heat.','number',' add or lose','means','That','A'),(74,3,0,29,'Benny Goodman was <u>equally</u> talented as both a jazz <u>performer</u> <u>as well</u> as a <u>classical</u> musician.','as well as',' equally','performer','classical','A'),(75,3,NULL,30,'The state seal <u>still used</u> in Massachusetts <u>designed by</u> Paul Revere, <u>who</u> also designed <u>the first</u> Continental currency.','who',' still used',' the first','designed by','D');
/*!40000 ALTER TABLE `t_soal` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_tes`
--

DROP TABLE IF EXISTS `t_tes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_tes` (
  `id_tes` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `jml_benar` varchar(10) NOT NULL,
  `status` enum('ready','start','finish') NOT NULL,
  `tgl_start` date DEFAULT NULL,
  `tgl_finish` date DEFAULT NULL,
  PRIMARY KEY (`id_tes`),
  KEY `id_user` (`id_user`),
  KEY `id_bagian` (`id_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_tes`
--

LOCK TABLES `t_tes` WRITE;
/*!40000 ALTER TABLE `t_tes` DISABLE KEYS */;
INSERT INTO `t_tes` VALUES (4,2,1,'','ready',NULL,NULL),(5,2,2,'','ready',NULL,NULL),(6,2,3,'1','finish','2021-04-22','2021-04-22'),(7,3,1,'','ready',NULL,NULL),(8,3,2,'','ready',NULL,NULL),(9,3,3,'','ready',NULL,NULL),(10,4,1,'','ready',NULL,NULL),(11,4,2,'','ready',NULL,NULL),(12,4,3,'','ready',NULL,NULL),(13,5,1,'','ready',NULL,NULL),(14,5,2,'','ready',NULL,NULL),(15,5,3,'','ready',NULL,NULL);
/*!40000 ALTER TABLE `t_tes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_topik`
--

DROP TABLE IF EXISTS `t_topik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_topik` (
  `id_topik` int(11) NOT NULL AUTO_INCREMENT,
  `nm_topik` varchar(100) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_topik`),
  KEY `id_bagian` (`id_bagian`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_topik`
--

LOCK TABLES `t_topik` WRITE;
/*!40000 ALTER TABLE `t_topik` DISABLE KEYS */;
INSERT INTO `t_topik` VALUES (1,'READING 1',1,'<h5>Questions 1-9</h5>\r\n\r\n<p>Carbon tetrachloride is a colorless and inflammable liquid that can be produced by combining carbon disulfide and chlorine. This compound is widely used in industry today because of its effectiveness as a solvent as well as its use in the production of propellants.</p>\r\n<p>\r\nDespite its widespread use in industry, carbon tetrachloride has been banned for home use. In the past, carbon tetrachloride was a common ingredient in cleaning compounds that were used throughout the home, but it was found to be dangerous: when heated, it changes into a poisonous gas that can cause severe illness and even death if it is inhaled. Because of this dangerous characteristic, the United States revoked permission for the home use of carbon tetrachloride in 1970. The United States has taken similar action with various other chemical compounds.</p>'),(2,'READING 2',1,'<h5>Questions 10-19</h5>\r\n<p>The next artist in this survey of American artist is James Whistler; he is included in this survey of American artist because he was born in the United States, although the majority of his artwork was completed in Europe. Whistler was born in Massachusetts in 1834, but nine years later his father moved the family to St. Petersburg, Russia, to work on the construction of a railroad. The family returned to the United States in 1849. Two years later Whistler entered the U.S. military academy at West Point, but he was unable to graduate. At the age of twenty-one Whistler went to Europe to study art despite familial objections, and he remained in Europe until his death.</p>\r\n\r\n<p>Whistler worked in various art forms, including etchings and lithographs. However, he is most famous for his paintings, particularly Arrangement in Gray and Black No. 1: Portrait of the Artist’s Mother or Whistler’s Mother, as it is more commonly known. This painting shows a side view of Whistler’s mother, dressed I black and posing against a gray wall. The asymmetrical nature of the portrait, with his mother seated off-center, is highly characteristic of Whistler’s work.</p>'),(3,'LISTENING 1',2,'listening-parta-01.mp3'),(4,'LISTENING 2',2,'listening-parta-02.mp3'),(5,'LISTENING 3',2,'listening-parta-03.mp3'),(19,'LISTENING 4',2,'listening-parta-04.mp3'),(20,'LISTENING 5',2,'listening-parta-05.mp3'),(21,'LISTENING 6',2,'listening-parta-06.mp3'),(22,'LISTENING 7',2,'listening-parta-07.mp3'),(23,'LISTENING 8',2,'listening-parta-08.mp3'),(24,'LISTENING 9',2,'listening-parta-09.mp3'),(25,'LISTENING 10',2,'listening-parta-10.mp3'),(26,'LISTENING 11',2,'listening-parta-11.mp3'),(27,'LISTENING 12',2,'listening-parta-12.mp3'),(28,'READING 3',1,'<p><strong>Questions 20-30</strong></p>\r\n<p>The locations of stars in the sky relative to one another do not appear to the naked eye to change, and as a result stars are often considered to be fixed in position. Many unaware stargazers falsely assume that each star has its own permanent home in the nighttime sky.</p>\r\n\r\n<p>In reality, though, stars are always moving, but because of the tremendous distances between stars themselves and from stars to Earth, the changes are barely perceptible here. An example of a rather fast-moving star demonstrates why this misconception prevails; it takes approximately 200 years for a relatively rapid star like Bernard’s star to move a distance in the skies equal to the diameter of the earth’s moon. When the apparently negligible movement of the stars is contrasted with the movement of the planets, the stars are seemingly unmoving.</p>'),(29,'READING 4',1,'<p><strong>Questions 31-40</strong></p>\r\n<p>It has been noted that, traditionally, courts have granted divorces on fault grounds: one spouse is deemed to be at fault in causing the divorce. More and more today, however, divorces are being granted on a no-fault basis.</p>\r\n\r\n<p>Proponents of no-fault divorces argue that when a marriage fails, it is rarely the case that one marriage partner is completely to blame and the other blameless. A failed marriage is much more often the result of mistakes by both partners.</p>\r\n\r\n<p>Another argument in favor of no-fault divorce is that proving fault in court, in a public arena, is a destructive process that only serves to lengthen the divorce process and that dramatically increases the negative feelings present in a divorce. If a couple can reach a decision to divorce without first deciding which partner is to blame, the divorce settlement can be negotiated more easily and equitably and the postdivorce healing process can begin more rapidly.</p>');
/*!40000 ALTER TABLE `t_topik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `t_user`
--

DROP TABLE IF EXISTS `t_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `t_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` enum('admin','peserta') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `t_user`
--

LOCK TABLES `t_user` WRITE;
/*!40000 ALTER TABLE `t_user` DISABLE KEYS */;
INSERT INTO `t_user` VALUES (1,'Admin','admin','admin','admin'),(2,'Ach. Faisol S. Arifin','faisol','faisol','peserta'),(3,'Fauzan','fauzan','fauzan','peserta'),(4,'Dedy Composer','dedy','dedy','peserta'),(5,'Angga Chandra','angga','angga','peserta');
/*!40000 ALTER TABLE `t_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Current Database: `ujiantoefl_db`
--

USE `ujiantoefl_db`;

--
-- Final view structure for view `summary`
--

/*!50001 DROP TABLE IF EXISTS `summary`*/;
/*!50001 DROP VIEW IF EXISTS `summary`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_unicode_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `summary` AS select `a`.`id_user` AS `id_user`,`a`.`tgl_start` AS `tgl_start`,(select `t_tes`.`jml_benar` from `t_tes` where `t_tes`.`id_bagian` = 1 and `t_tes`.`id_user` = `a`.`id_user`) AS `r`,(select `t_tes`.`jml_benar` from `t_tes` where `t_tes`.`id_bagian` = 2 and `t_tes`.`id_user` = `a`.`id_user`) AS `l`,(select `t_tes`.`jml_benar` from `t_tes` where `t_tes`.`id_bagian` = 3 and `t_tes`.`id_user` = `a`.`id_user`) AS `s` from `t_tes` `a` group by `a`.`id_user` */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-23  7:47:21
