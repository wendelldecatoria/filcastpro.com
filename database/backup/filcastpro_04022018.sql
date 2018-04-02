-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.23-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for filcastpro
CREATE DATABASE IF NOT EXISTS `filcastpro` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `filcastpro`;


-- Dumping structure for table filcastpro.actors
DROP TABLE IF EXISTS `actors`;
CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vital` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manager` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `works` text COLLATE utf8mb4_unicode_ci,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.actors: ~44 rows (approximately)
DELETE FROM `actors`;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` (`id`, `name`, `first_name`, `last_name`, `contact`, `age`, `gender`, `height`, `vital`, `manager`, `email`, `online_profile`, `works`, `thumb_image`, `is_active`, `created_at`, `updated_at`) VALUES
	(1, 'Chanel Latorre', 'Chanel', 'Latorre', '', 21, 'female', '5 ft 4 in', '32-24-34 ', ' Ferdinand Lapuz', 'wendecat.social@gmail.com', 'https://www.facebook.com/pages/Chanel-Latorre/171030083053740?fref=ts', 'TV\r\nGMA NEWS TV(2013) IPAGLABAN MO! - DIANA/SUPPORT; RICH ANTAGONIST,ABS-CBN(2013) WHY NOT? - CLEOPATRA/SUPPORT; QUEEN <br>\r\nGMA(2013) BUKOD KANG PINAGPALA - ESPER/SUPPORT; PROBLEMATIC SISTER IN LAW, GMA(2013) WISH KO LANG - IRISH/LEAD; MAID <br>\r\nGMA NEWS TV(2013) WAGAS - JOANNA/SUPPORT; BITCHY GIRLFRIEND, <br>\r\nGMA(2012) WISH KO LANG - SONIA NORTEGA/ LEAD;YOUNG MOM <br>\r\nGMA(2012) TWEETS FOR MY SWEET - RIZA/SUPPORT; LEAD\'S PREGNANT BESTFRIEND, GMA(2012) LEGACY - SHANELLE/SUPPORT; LEAD\'S LOYAL ASSISTANT, TV5(2011) UNTOLD STORIES - CHATO/SUPPORT; LEAD\'S BESTFRIEND, GMA(2011) MUNTING HEREDERA - PILAR/SUPPORT; TEACHER OF HEIRESSES, TV5(2011) UNTOLD STORIES - PALOMA/ SUPPORT; LEAD\'S SISTER, QTV 11(2010) TWEETBIZ - SHOWBIZ AWARDS 2010, GMA(2010) HAPPYLAND - ROMA AROMA/SUPPORT; FAIRY \r\n\r\n<br><br>\r\nFILMS<br>\r\nLIHIS (IN POST) JOEL LAMANGAN KATHY/ SUPPORT, DIPLOMAT HOTEL(IN POST) CHRIS AD CASTILLO THE WOMAN/ SUPPORT \r\nGUERILLA IS A POET(IN PROD) SARI AND KIRI DALENA TERESA/ SUPPORT, ISLAND DREAMS(IN POST) ALOY ADLAWAN KAREN/SUPPORT \r\nBABAGWA(IN POST) JASON LAXAMANA NERI/SUPPORT, BIGGER THAN LOVE(IN POST) JOEL RUIZ LESLIE/LEAD\r\nMATER DOLOROSA(2012) ADOLF ALIX ALICIA/CAMEO, CAPTIVE(2012) BRILLANTE MENDOZA ANNETTE AGUDO/SUPPORT\r\nSAPI(IN POST) BRILLANTE MENDOZA MOSHI/CAMEO, THIS GUY\'S IN LOVE WITH YOU MARE(2012) WENN DERAMAS MARIZZA/CAMEO \r\nAMOROSA(2012) TOPEL LEE CHA,MBERMAID/BIT, PRIDYEDER(2012) RICO ILARDE MAYA/SUPPPORT, THE DEADLINE(IN POST) IAN WANG ROBIN/SUPPORT, MNL 143(2012) EMERSON REYES LEA/SUPPORT, THE HEALING(2012) CHITO RONO CHANEL/SUPPORT\r\n6 OF SEPARATION FROM LILIA CUNTAPAY(2011) ANTOINETTE JADAONE THE ACTRESS/ CAMEO, WAN CHAI BABY(2010) CRAIG ADDISON TESS/ BABY/LEAD, SULYAP(IN POST) ARMANDO LAO ARA/LEAD , RINDIDO(2010) NORIEL JARITO LANI/LEAD, LATAK(2009) JOWEE MOREL JANE/LEAD, ORISONTE(2009) ZIG DULAY SALLY/ SUPPORT, 1017(2009) ZIG DULAY KA ALEX/ SUPPORT, PADYAK(2008) ALOY ADLAWAN FLIRT/BIT, MOTORCYCLE(2008) JON RED BAR GIRL/BIT, LAM- ANG (PAUSED) ANA AGABIN SAGUMAY/ SUPPORT\r\n\r\n<br><br>\r\nSHORT FILMS AND TV COMMERCIALS<br>\r\nI CAN WRITE (IN POST) MARK SARMIENTO ANNIE CRUZ/ LEAD, SIKLO(IN POST) ARIEL BACOL NORHALISA/LEAD \r\nBUWAN(IN POST) IGOR CRUZ REMY/SUPPORT, ROSA(2013) MARA REYES NANAY/ SUPPORT', 'ChanelLatorreThumb2.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(2, 'John Cando', 'John', 'Cando', '', 22, 'male', '5 ft 9 in', '', 'Reel Gate Media', 'artists@reelgate.com', 'http://www.youtube.com/watch?v=RgBy7xQHJ60&feature=youtu.be', 'ACTING/MODELING  EXPERIENCE<br><br>\n    Touch Mobile Commercial 2013 (Lead role)<br>\n    Head And Shoulders Commercial 2014 (Lead role)<br>\n    Kopiko Commercial 2012 (Lead role)<br>\n    Love Hotline GMA January 16 2014 (Lead role)<br>\n    Love Hotline GMA December 3 2013 (Lead Role)<br>\n    Ina Kapatid Anak Teleserye 2013 as Joel (suitor of Kim Chiu) (guest actor)<br>\n    Bituing Bughaw Movie as Larry (supporting role) with Bembol Roco, Felic Roco, and Alex Medina<br>\n    Manibela Film entry for MMFF as Philip (Lead role)<br>\n    Star Magic Basic Acting Workshop 2010<br>\n    Star Magic Advance Acting Workshop 2013<br>\n    SM Commercial 2009 (Lead role)<br>\n    Diatabs Commercial 2009 (supporting role)<br>\n    Political Ad 2009 (Lead role)<br>\n    Sun Cellular Commercial 2010 (supporting role)<br>\n    Smart Commercial 2011 (supporting role)<br>\n    Coca Cola Commercial 2011 (supporting role)<br>\n    V Fresh Commercial 2011 (supporting role)<br>\n    Mr. San Beda 2010 Title Holder with 6 awards<br><br><br>\n\nPROJECT LINKS<br><br>\n\n<a href="http://www.youtube.com/watch?v=0eT_kpXtG08">Head and Shoulders Commercial</a></br>\n<a href="http://www.youtube.com/watch?v=JHEHi0CpnDQ"> Touch Mobile Commercial</a></br>\n<a href="http://www.youtube.com/watch?v=JkSGxNW-zI0"> Touch Mobile Commercial (Sequel)</a></br>\n<a href="http://www.youtube.com/watch?v=SHqVIMmMFF0"> Kopiko Commercial</a></br>\n<a href="http://www.youtube.com/watch?v=uHD80V9d1fA"> The Writer  (short film)</a></br>\n<a href="http://www.youtube.com/watch?v=tk2q1d_0xqA"> Manibela Trailer (shortfilm)</a></br>\n<a href="http://www.youtube.com/watch?v=YTDlt_md5vc"> Eyes Pick (short film)</a></br>', 'thumbJohnCando.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(3, 'Geraldine Tan', 'Geraldine', 'Tan', '', 40, 'female', '5 ft 5 in', '', 'Dragonfly Talent Promotion', 'dragonflytalentpromotion@gmail.com', '', 'TV <br><br>\r\n\r\nGMA:<br>\r\n"Basahang Ginto" (Doctor of Aiko Melendez),"Take Me Out Philippines" Reality/Dating Show, one of of the original 30 girls, "Ngayon at Kailanman" (\'Melba\'), "Paano ba ang Mangarap?" (‘Amiga’ of Bing Loyzaga), "Obra Presents Iza Calzado" (Commercial Agent), "Mga Mata ni Anghelita" (‘Madre’), "Bitoy’s Funniest Videos Yari Ka Segment", kasabwat, in episode entitled "Plastic Surgery", as ‘Hypnotism Workshop Emcee’, as ‘BFAD official’, as ‘Workshop Facilitator’, "Magpakailanman": Gloria Diaz Story (Pageant Coordinator), "Bakekang" (Executive Producer), "Now and Forever" (Doctor of Ariel Rivera and Glydel Mercado’s daughter, ‘Cindy’), "Darna" (Featured, neighbor of ‘Arlene Guinto’), "Sa Kamay ng Diyos" (c/o APT)-Lenten docu-drama, special (‘Caridad,’ Mother of child lead), "Pira-pirasong Pangarap" (‘Lotis,’ best friend of Jackie Forster), "Maynila" (‘Lenlen,’ office mate and friend of Noel Trinidad)RPN 9/Solar: "Kemis" (‘Dra. Vicky Bolo’),TV 5: "Babaeng Hampas-Lupa" (Colleague of Alice Dixson), \r\n"Philippines’ Most Wanted" (‘Aling Jovita,’ Mother of retarded child, opposite Roy Rodrigo), PTV 4:"Philippines’ Most Wanted" (Lead: ‘Lenny,’ homeless, insane, former Japayuki), ABS-CBN: "Maging Sino Ka Man" (Lawyer of Philip Salvador\'s Character), "100 Days to Heaven", "Kristine"(Doctor of \'Diana\' as played by Bangs Garcia), "Your Song: \'Isla\'" (Grieving Mother of Female lead), "Maalaala Mo Kaya," "Twist of Fate" (Principal), "Jerome" (Clerk of Court), \'Lubid: The Jerome Concepcion Story\' (\'Rowena Balmores\'--Tourette Support Group Founder), "Maging Sino Ka Man" (Lawyer of ‘Mateo,’ as played by Philip Salvador), Palos (Wife of Faith Healer), "Ysabela" (Assistant of Ryan Agoncillo), "Bituing Walang Ningning" (Talent Promoter of Zsa Zsa Padilla), "Sa Piling Mo" (Tutor of ‘Reese,’ Piolo Pascual’s daughter),"Wowowee Drama: Edwin Sumampong Story" (Teacher of ‘Edwin’ as a teenager),"Vietnam Rose" (Lawyer of Jay Manalo), "Hiram" (‘Denise,’ Designer of Anne Curtis),"Bida si Mr., Bida si Mrs." (‘Madame Coring,’ gypsy fortune teller), "Tanging Ina" (‘Doris B,’ a Doris Bigornia parody), Bituin (Mainstay: "Atty. Clarita Manalo," lawyer of Nora Aunor), "Pangako sa Iyo" (Mainstay: ‘Melanie,’ secretary of Tonton Gutierrez), "Marinella" (Mainstay: ‘Dra. Chiqui Salazar,’ best friend of Timmy Cruz),"Flames" (Ob-gyne of Tracey Vergel), "Larawan" (Rufa Mae Quinto episode. Doctor of Jimmy Santos)\r\n<br><br>\r\n\r\nFILMS<br>\r\nBrillante Mendoza: "Grandmother"/a.k.a. "Lola" (\'OSCA Clerk\'), Cinema One Originals: E.J. Salcedo\'s "Third World Happy" (\'Aileen\'s Mom\'), Milo Tolentino\'s "Si Baning, Si Maymay, at Ang Asong si Bobo" (\'Aling Pacing\'), \r\nRichard Legaspi\'s "Paano Ko Sasabihin" (\'Lydia\'), motorCYCLE (\'Mother\'), OUTLINE: Jowee Morel\'s "Latak"(‘Mrs. Cuenca’), (also dubbed the part of Tia Pusit), OUTLINE and Bandit Films, Inc.: Jowee Morel\'s "Mona: Singapore Escort" (Cameo, Part of a Montage), Avid Liongoren: Saving Sally (\'Sally’s Mom\') Trailer, Star Cinema: "Abandonada" (Secretary of Angelu de Leon), "Gusto Ko Nang Lumigaya"(ballroom dancer), "Kailangan Ko’y Ikaw" (Yuppie) \r\n<br><br>\r\nSTUDENT FILMS <br>\r\nFor U.P.: "Brownout sa Amin That Day" by Judd Figuerres, (\'Sonya,\' Mother of Lead), "Lisan" by Barbie Estrella, Mother of Lead, opposite Bobby Andrews, "Generation Keme" by Genevieve Go (Featured:\'Mara\'s Mother\') \r\nFor De La Salle University: "Sa Ngalan ng Ama" by Anjela Ong and Carlos Sadiua(Wife of Lead: \'Julia\'), "Punso" John Joseph Presingular and Jay Mendoza (Mother of Lead:\'Theresa\'),"Sapatos" by Louella Suque (Cameo: Newly widowed woman), "Uninvited" (Lead: pregnant unwed mother haunted by earlier, aborted child’s ghost) by Denise Melendres, Erica Batac and J.M. de Leon, "Hallucinations" by Denise Melendres (Lead: ‘Diane,’ psychotic wife)', 'thumbGeraldineTan.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(4, 'Azrah Gaffoor', 'Azrah', 'Gaffoor', '', 30, 'female', '5 ft 5 in', '', 'Poly East', 'azrahgaffoor@yahoo.com   ', 'https://www.youtube.com/watch?v=JOupnlofy10', '<br>MUSIC VIDEO</br>\r\n<a href="https://www.youtube.com/watch?v=JOupnlofy10"> ‘I WANNA BE CLOSE TO YOU’ </a></br>\r\n\r\n\r\n<br><br>Performances:  <br><br>                                                           \r\n2013<br>                                   Zirkoh Bar<br>\r\nHard Rock Café<br>\r\nHotel Intercontinental Manila<br>\r\nLibrary Bar<br>\r\nPhilippine Press Club<br>\r\nMall of Asia<br>\r\nPhilippine International Convention Center<br>\r\nLaguna Pavilion<br>\r\nVictory Mall<br>\r\nSM – Dasma.<br>\r\nIsetann<br>\r\nRobinson’s Mall<br>\r\nMusic Box<br>\r\nBiñan, Laguna<br>\r\n<br><br>\r\n \r\n\r\n2014<br>\r\nNueva Ecija<br>\r\nTelevision Performances<br>\r\nWalang Tulugan, GMA 7<br>', 'AzrahGaffoor1a.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(5, 'Jan  Espiritu', 'Jan', 'Espiritu', '', 8, 'male', '4 ft 3 in', '', 'Top Model @ Catwalk Phil. Unlimited Naic,Cavite', 'jan_jhenovly@facebook.com', '', 'Workshop:<br> Performance Dynamics Acting Workshop 2013<br><br>\r\n\r\nJan is a very versatile and focused actor. He has appeared in numerous school stage play.', 'JanEspiritu9.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(6, 'Marissa Delgado', 'Marissa ', 'Delgado', '', 47, 'female', '5 ft 5 in', '', 'Ms. Cornelia Lee', 'redgarnet47@yahoo.com', '', '<br>TELEVISION<br>\r\n\r\n \r\n\r\nBe Careful with My Heart (2014)  <br>\r\n\r\nBlusang Itim (2011)<br>\r\n\r\nBantatay (2010)  <br>\r\n\r\nPanday Kids (2010)<br>\r\n\r\nIkaw Sana (2009)<br>\r\n\r\nManila (2009)<br>\r\n\r\nIsang Lahi: Pearls from the Orient (2009)<br>\r\n\r\nMaalaala mo kaya (2008)<br>\r\n\r\nKamandag (2007)<br>\r\n\r\nFour in One (2007)<br>\r\n\r\nFul Haus (2007)<br>\r\n\r\nSineSerye (2007)<br>\r\n\r\nI Wanna Be Happy (2006)<br>\r\n\r\nMaging sino ka man (2006)<br>\r\n\r\nBinibining K (2006)<br>\r\n\r\nIspiritista: Itay, May MooMoo (2005)<br>\r\n\r\nKampanerang Kuba (2005)<br><br>\r\n\r\n \r\n\r\n \r\n\r\nFILMS<br>\r\n\r\n \r\n\r\nBikini Open (2005)<br>\r\n\r\nSsshhh... She Walks by Night (2003)<br>\r\n\r\nPangarap ko ang ibigin ka (2003)<br>\r\n\r\nWalang kapalit (2003)<br>\r\n\r\nTill There Was You (2003)<br>\r\n\r\nLupe: A Seaman\'s Wife (2003)<br>\r\n\r\nSuper-B (2002)<br>\r\n\r\nPagdating ng panahon (2001)<br>\r\n\r\nAng kabit ni Mrs. Montero (1999)<br>\r\n\r\nBitoy ang itawag mo sa akin (1998)<br>\r\n\r\nCampus Scandal (1998)<br>\r\n\r\nNakalimot sa pag-ibig (1997)<br>\r\n\r\nNag-iisang ikaw (1997)<br>\r\n\r\nPido Dida 2 (Kasal na) (1991)<br>\r\n\r\nAng totoong buhay ni Pacita M. (1991)<br>\r\n\r\nAnak ng Cabron: Ikalawang Ugat (1991)<br>\r\n\r\nEspadang patpat (1990)<br>\r\n\r\nHotdog (1989)\r\n<br>\r\nTupang itim (1989)<br>\r\n\r\nLady L (1989)<br>\r\n\r\nGabriela (1989)<br>\r\n\r\nPepeng Kuryente (1988)<br>\r\n\r\nMatandang barako hindi pa buro (1988)<br>\r\n\r\nSa akin pa rin ang bukas (1988)<br>\r\n\r\nNakausap ko ang birhen (1988)<br>\r\n\r\nSana mahalin mo ako (1988)<br>\r\n\r\nPaano kung wala ka na? (1987)<br>\r\n\r\nMga lihim ng kalapati (1987)<br>\r\n\r\nBakit iisa ang pag-ibig (1987)<br>\r\n\r\nRosa mistica (1987)<br>\r\n\r\nKapitan Pablo (1987)<br>\r\n\r\nSi mister at si misis (1986)<br>\r\n\r\nPaalam... Bukas ang kasal ko (1986)<br>\r\n\r\nNinja Kids (1986)<br>\r\n\r\nI Can\'t Stop Loving You (1985)<br>\r\n\r\nMarkang rehas (1985)<br>\r\n\r\nAnak ko ... Lando (1985)<br>\r\n\r\nPahiram ng Ligaya (1985)<br>\r\n\r\nPublic Enemy No. 2: Maraming Number Two (1985)<br>\r\n\r\nAtsay killer buti nga sa\'yo (1984)<br>\r\n\r\nLife Begins at 40 (1984)<br>\r\n\r\nSa bulaklak ng apoy (1984)<br>\r\n\r\nMga walang daigdig (1984)<br>\r\n\r\nKapitan Inggo (1984)<br>\r\n\r\nAtsay Killer (1983)<br>\r\n\r\nSanta Claus Is Coming to Town! (1982)<br>\r\n\r\nStariray (1981)<br>\r\n\r\nRampador alindog (1981)<br>\r\n\r\nBona (1980)\r\n<br>\r\nSexy Dancers (1980)<br>\r\n\r\nNognog (1980)<br>\r\n\r\nIskul bukol (1980)<br>\r\n\r\nJuan Tamad Jr. (1980)<br>\r\n\r\nPag-ibig ko, hatiin ninyo (1980)<br>\r\n\r\nTotoy boogie (1980)<br>\r\n\r\nDarna at Ding (1980)<br>\r\n\r\nDiborsyada (1979)\r\n<br>\r\nAnak ng atsay (1979)<br>\r\n\r\nBokyo (1979)<br>\r\n\r\nDarna, Kuno...? (1978)<br>\r\n\r\nFeliciano (1978)<br>\r\n\r\nButsoy (1978)<br>\r\n\r\nTriponia (1978)<br>\r\n\r\nNicolas Feliciano ... ang huk-figther ng tarlac (1978)<br>\r\n\r\nMga mata ni Angelita (1978)<br>\r\n\r\nBomba Star (1978)<br>\r\n\r\nBabaeng makasalanan ... lalaking salawahan (1978)<br>\r\n\r\nAng tatay kong nanay (1978)<br>\r\n\r\nMananayaw (1978)\r\n<br>\r\nTrinidad Is My Name (1977)<br>\r\n\r\nMga bulaklak ng Teatro Manila (1977)<br>\r\n\r\nFantastika vs. Wonderwoman (1976)<br>\r\n\r\nDivino (1976)\r\n<br>\r\nRelaks lang mama... Sagot kita! (1976)<br>\r\n\r\nSa akin kayong lahat (1976)<br>\r\n\r\nUrsula (1976)<br>\r\n\r\nMando biliwang (1976)<br>\r\n\r\nNahirit, Nasipol ang Biyaheng Bikol (1976)<br>\r\n\r\nTao ako, hindi hayop (1976)<br>\r\n\r\nLigaw na bulaklak (1976)<br>\r\n\r\nMag-asawa\'y di biro, huwag Iluwa kung mapaso (1976)\r\n<br>\r\nBuhay mo, buhay ko (1976)<br>\r\n\r\nBergado, Terror of Cavite (1976)<br>\r\n\r\nSebastian Gustavo (1976)\r\n<br>\r\nThe Good Father (1975)<br>\r\n\r\nPrrrt... huli ka anong say mo? (1975)<br>\r\n\r\nAko ang nagbayo, nagsaing, iba ang kumain (1975)<br>\r\n\r\nMga uhaw na bulaklak (1975)<br>\r\n\r\nIbong lukaret (1975)<br>\r\n\r\nDragon Fire (1974)\r\n<br>\r\nIsang gabi... Tatlong babae! (1974)\r\n<br>\r\nKing Khayam and I (1974)<br>\r\n\r\nThe Devil\'s Daughter (1974)\r\n<br>\r\nKapitan Eddie Set (1974)<br>\r\n\r\nHuwag tularan: Pito ang asawa ko (1974)<br>\r\n\r\nDread the Trail Dragon Fire (1974)<br>\r\n\r\nBamboo Gods and Iron Men (1974)<br>\r\n\r\nThe Eagle\'s Claw (1973)<br>\r\n\r\nOphella at Paris (1973)<br>\r\n\r\nAnder di saya si Erap (1973)<br>\r\n\r\nWonder Vi (1973)<br>\r\n\r\nDrakula Goes to R.P. (1973)<br>\r\n\r\nAng agila at ang araw (1973)<br>\r\n\r\nLipad, Darna, lipad! (1973)\r\n<br>\r\nMay isang brilyante (1973)<br>\r\n\r\nTill Death Do Us Part (1972)<br>\r\n\r\nThe Big Bird Cage (1972)<br>\r\n\r\nNardong Putik (1972)<br>\r\n\r\nSa jeepney ang hirap, sa goodtime ang sarap (1972)\r\n<br>\r\nSa pagsikat ng araw (1971)<br>\r\n\r\nMaton ng pondohan (1971)<br>\r\n\r\nPanginoon ng mga salabusab (1971)<br>\r\n\r\nWomen in Cages (1971)<br>\r\n\r\nStardoom (1971)<br>\r\n\r\nBaldo Is Coming (1971)<br>\r\n\r\nGangsters daw kami! (1971)<br>\r\n\r\nPlaypen (1971)<br>\r\n\r\nSiyam na biyernes (1971)<br>\r\n\r\nBarricade (1971)<br>\r\n\r\nTag-araw (1971)<br>\r\n\r\nLumuha pati mga anghel (1971)<br>\r\n\r\nMaster Key (1971)<br>\r\n\r\nPakialamero (1971)\r\n<br>\r\nBoy poklat (1971)\r\n<br>\r\nTubog sa ginto (1971)<br>\r\n\r\nSnooky (1970)<br>\r\n\r\nDaigdig ng mga halang (1970)<br>\r\n\r\nPag-ibig ng mga salarin (1970)<br>\r\n\r\nThe Champion and the Saboteurs (1970)\r\n<br>\r\nCrisis (1970)<br>\r\n\r\nIgorota Squad (1970)<br>\r\n\r\nThe Sky Divers (1970)<br>\r\n\r\nDevil Woman (1970)\r\n<br>\r\nOmar Cassidy and the Sandalyas Kid (1970)\r\n<br>\r\nInside Job (1970)\r\n<br>\r\nThe Pushers (1970)<br>\r\n\r\nVengadora (1960)\r\n<br>\r\nHari ng Ninja (1969)<br>\r\n\r\nThe Wild and the Sexy (1969)<br>\r\n\r\nThe Incomparable (1969)<br>\r\n\r\nAtorni Agaton: Agent Law-ko (1969)<br>\r\n\r\nMister Gimmick (1968)<br>\r\n\r\nThe 12 Golden Commandos (1967)<br>\r\n\r\nReyna ng karate (1967)<br>\r\n\r\nPobres park (1967)<br>\r\n\r\nMy Love, Forgive Me (1967)<br>\r\n\r\nMax Diamond (1967)\r\n<br>\r\nJohnny Tigre (1967)<br>\r\n\r\nHugong pangahas (1967)<br>\r\n\r\nD\'sound Beats: Soul Discotheque (1967)<br>\r\n\r\nDa Best in da West (1967)<br>\r\n\r\nClose to You (1967)<br>\r\n\r\nAlamid (1967)<br>\r\n\r\nUsigin ang maitim na budhi (1967)<br>\r\n\r\nRuby (1967)<br>\r\n\r\nPambraun (1967)\r\n<br>\r\nThe Sunjuka Master (1967)<br>\r\n\r\nPambihirang tatlo (1967)\r\n<br>\r\nKidlat Meets Gringo (1967)<br>\r\n\r\nDeadly Seven (1967)<br>\r\n\r\nDurango (1967)<br>\r\n\r\nKarate Kid (1967)\r\n<br>\r\nDeath Trap (1967)<br>\r\n\r\nCrossfire (1966)<br>\r\n\r\nTarget: Sexy Rose (1966)<br>\r\n\r\nDoble solo (1966)<br>\r\n\r\nJohnny West (1966)\r\n<br>\r\nDalawang kumander sa WAC (1966)<br>', 'MarissaDelgadoThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(7, 'Tricia Oliva', 'Tricia', 'Oliva', '', 12, 'female', '4 ft  5 in', '', 'Olive Management', 'monettski_oliva@yahoo.com.ph', 'https://www.facebook.com/pages/Tricia-oliva/611679262204076', 'Prints<br>\r\nFRC Mall Puregold Imus<br>\r\nFace Asia & Asconvita Vitamins<br><br>\r\n\r\nTV Commercials:<br>\r\nTang & Argentina Corned Beef<br>\r\nAMPALAYA PLUS junior 2012<br>\r\nSilver Swan 2013<br><br>\r\n\r\n\r\nFilms:<br>\r\n\r\n\'TANGLAW\' (EDEL/LEAD ROLE) – WINNER IN MANHATTAN FILM FESTIVAL IN\r\n                                NEW YORK U.S.A  MARCH. 2013<br>\r\n\'TIME IN A BOTTLE\' (SUPPORT)<br>\r\n\'LIMANG DIPANG TAO\' (SUPPORT)- SINENG PAMBANSA FILM FESTIVAL<br>\r\n\'KILLER KID\' (LILY)<br>\r\n\'SINAPUPUNAN\' (LEAD)<br><br>\r\n\r\n\r\nTelevision:<br>\r\n\r\nNATIONAL GEOGRAPHIC - \'LOCKED UP ABROAD\' (Lead)<br>\r\nMUSIKO (MARJORETTE)<br>\r\nMELCHORA (as young MELCHORA)<br>\r\nPILYANG KERUBIN :  ANGEL (GMA7)<br>\r\nLITTLE CHAMP (ABS-CBN)<br>\r\nUNTOLD STORY : (TV5)<br>\r\nBANGIS : (TV5)<br>\r\nIGLOT : (GMA7)<br>\r\nWISH KO LANG: (GMA7)<br>\r\nINDIO : (GMA7)<br><br>\r\n\r\n\r\nSTAGEPLAY:<br>\r\nU.P/ ATENEO GROUP SHAHARAZADE\r\n“KATRE” - (DAUGHTER)<br>\r\nATENEO : AUGUST 24, AUGUST 31 AND SEPT.01, 2012<br>\r\nMUSICAL STAGE PLAY : U.P COLLEGE OF MUSIC (SHOWS : DEC 2012 –FEB.2013)<br>\r\nMusical PLAY : “PAG IBIG NG KALIKASAN” AS LIWAY ( SHOW DATE : FEB.26 2013 CLSU NUEVA ECIJA)<br>', 'TrishaOliva08.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(8, 'Ashwin Gaffoor', 'Ashwin', 'Gaffoor', '0063(0) 905 274 9900', 8, 'male', '', '', 'Gaffoor Management', 'ashwingaffoor@yahoo.com', '', 'Workshop:<br>\r\nPerformance Dynamics (Acting) 2013<br><br>\r\n\r\n\r\nA very talented and focused child actor who has played different roles in school plays.   ', 'AshwinGafforThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(9, 'Raakin Gaffoor', 'Raakin', 'Gaffoor', '0063(0) 905 274 9900', 7, 'male', '', '', 'Gaffoor Management', 'ashwingaffoor@yahoo.com', '', 'Workshop:<br>\r\n Performance Dynamics (2013)<br><br>\r\n\r\n\r\nSkills:<br>\r\nActing<br>\r\nSinging Dancing<br>', 'RaakinGaffoorThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(10, 'Romano Vazquez', 'Romano', 'Vazquez', '0906279 1564', 32, 'male', '5 ft 7 in', '', 'Maryo J. de los Reyes', 'romanovasquez2@gmail.com', 'http://www.youtube.com/watch?v=gHjE4TQMfRM', 'Films:<br>\r\nPikit-mata (2012)<br>\r\nSexventure  (2011)<br>\r\nMainit  (2009)<br>\r\nAstig (2009)<br>\r\nIsang Lahi: Pearls from the Orient (Documentary) (2009)<br>\r\nNight Job (2005)<br>\r\nWhen a Gay Man Loves...  (2007)<br>Alipin ng aliw (1998)<br>\r\nMariano Mison... NBI  (1997)<br>\r\nEpimaco Velasco: NBI (1997)<br>The Secret of Katrina Salazar (1997)<br>\r\n\r\nSuicide Rangers (1996)<br>\r\n\r\nDark Tide (1994)<br>\r\n\r\nFirst Time... Like a Virgin! (1992)<br>\r\n<br>\r\n \r\n\r\n \r\n\r\nTelevision Works:<br>\r\n\r\n \r\n\r\nRegal Shocker (2012) <br>\r\n\r\nThat\'s Entertainment (1986)<br><br>', 'RomanoVasquezThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(11, 'LJ Reyes', 'LJ', 'Reyes', 'Neil Estel', 26, 'female', '5 ft 4 in', '', 'GMA Artists Center', 'neilestel2010@gmail.com', '', '<br><br>TELEVISION WORKS<br><br>\r\nPrinsesa ng Buhay Ko  2013<br>\r\nBayan ko  2013<br>\r\nWagas  2013<br>\r\nMagpakailanman 2012<br>\r\nAso ni San Roque 2012<br>\r\nThe Good Daughter 2011<br>\r\nTime of My Life 2011<br>\r\nSisid  2010<br>\r\nIna, kasusuklaman ba kita?  2009<br>\r\nUna kang naging akin 2008<br>\r\nBabangon ako\'t dudurugin kita  2007<br>\r\nZaido: Pulis pangkalawakan 2007<br>\r\nLupin 2007<br>\r\nMagic kamison 2007<br>\r\nCamera café 2007-2006<br>\r\nLovestruck  2005<br>\r\nSugo 2005<br>\r\nDaddy di do du  2005<br>\r\nNow and Forever 2005<br>\r\nLove to Love 2005<br>\r\n<br>\r\n\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n\r\nShe\'s the One  2013<br>\r\nTiktik: The Aswang Chronicles 2012<br>\r\nIntoy Shokoy ng Kalye Marino  2012<br>\r\nThe Leaving  2010<br>\r\nAll My Life 2008<br>\r\nPi7ong tagpo  2007<br>\r\nMakita ka lang muli  2006<br>\r\nManay po!  2006<br>\r\nI Luv NY  2006<br>\r\nPuso 3  2005<br><br>\r\n', 'LJReyesThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(12, 'Jao Mapa', 'Jao', 'Mapa', '', 34, 'male', '5ft 8 in', '', 'Rob Sy', '(Booking Agent) agutierrez@reelgate.com', '', 'TV <br>\r\n<br>Star Confessions 2010 <br>Tween Hearts 2010<br>HIV: Si Heidi, Si Ivy at Si V 2010<br>Trudis liit 2010<br>Komiks 2005<br>Hawak ko ang langit 2000<br>Di ba\'t ikaw 1999<br>\r\n<br>\r\nFilms<br><br>Donor 2010<br>Working Girls 2010<br>Hungkag (Short) 2010<br>Pilantik 2009<br>Bala Bala: Maniwala ka 2009<br>I Love Dreamguyz 2009<br>69 1/2 2009<br>Fidel 2009<br>Medalya 2009<br>Pasang krus 2008<br>Baler 2008\r\nMotorcycle 2008<br>Ay Ayeng 2008<br>Sisa 2008<br>Huling Pasada 2008<br>Condo 2008\r\nMiss Taken 2006<br>Super Noypi 2006<br>You Are the One 2006<br>Cut 2005\r\nIlusyon 2003<br>\r\nTunay na mahal 2000<br>\r\nTugatog 1999<br>\r\nA Date with Jao Mapa 1997<br>\r\nBabae 1997<br>\r\nDahil tanging ikaw 1997<br>\r\nMatrikula 1995<br>\r\nAsero 1995<br>\r\nHataw na 1995<br>\r\nPare ko 1994<br>\r\nNag-iisang bituin 1994<br>\r\nMaalaala mo kaya: The Movie 1994<br>\r\n', 'JaoMapaThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(13, 'Christopher Roxas', 'Christopher', 'Roxas', '', 33, 'male', '5 ft 10 in', '', 'Rob Sy', '(Booking Agent - Arman Gutierrez) agutierrez@reelgate.com', '', 'TV<br>\r\n<br>\r\n\r\nPyra (Babaeng Apoy) 2014<br>\r\n\r\nTrue Confessions 2012<br>\r\n\r\nMara Clara 2002<br>\r\n<br>\r\n\r\n\r\nFlms<br>\r\n<br>\r\n\r\n\r\nNasaan ka, Elisa? (2011)<br>\r\n\r\nKasal-kasalan (Sakalan) (1998) <br>\r\n\r\nMinsan lamang magmamahal (1997)<br>\r\n\r\n', 'ChristopherRoxasThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(14, 'Maria Isabel Lopez', 'Maria Isabel', 'Lopez', '', 47, 'female', '5 ft 6 in', '', 'Lopez Management', 'artsandlenses@yahoo.com', '', '<br>\r\nTELEVISION<br>\r\n\r\nAngustia (2013)<br>\r\nMaalaala mo kaya (2009-2013)<br>\r\nBayan ko (2013)<br>\r\nMariposa: Sa hawla ng gabi (2012)<br>\r\nMagdalena: Anghel sa Putikan (2012)<br>\r\nKung ako\'y iiwan mo (2012)<br>\r\nLegacy (2012)<br>\r\nKapitan Awesome (2012)<br>\r\nAlyna (20101-2011) <br>\r\nStar Confessions (2010-2011) <br>\r\nLove Me Again (2010)<br>\r\nLovers in Paris (2009)<br>\r\nParekoy (2009)<br>\r\n\r\n<br>\r\nFILMS<br>\r\n\r\nAng misis ni meyor (2012)<br>\r\nCorazon: Ang unang aswang (2012)<br>\r\nCaptive (2012)<br>\r\nRitwal: The Faithfools (2011)<br>\r\nSirip (Short, 2011)<br>\r\nCuchera (2011)<br>\r\nHIV: Si Heidi, Si Ivy at Si V (2010)<br>\r\nIka-Sampu (2010)<br>\r\nAng babae sa sementeryo (2010)<br>\r\nHalaw (2010) <br>\r\nWorking Girls (2010) <br>\r\nPilantik (2009)<br>\r\nTulak (2009)<br>\r\nFidel (2009)<br>\r\nKinatay (2009)<br>\r\nHilot (2009)<br>\r\nAy Ayeng (2008)<br>\r\nSeroks (2006)<br>\r\nBarang (2006)<br>\r\nKabiyak 2 (1998)<br>\r\nMagkaagaw (1997)<br>\r\nDune Warriors (1991)<br>\r\nHukom .45 (1990)<br>\r\nBlack Cobra 3: The Manila Connection (1990)<br>\r\nMission Manila (1990)<br>\r\nAng mahiwagang daigdig ni Elias Paniki (1989)<br>\r\nMake My Day (1989)<br>\r\nBoots Oyson: sa katawan mo ... aagos ang dugo! (1989)<br>\r\nSa kuko ng agila (1989)<br>\r\nRed Roses, Call for a Girl (1988)<br>\r\nChu nu jiang (1988)<br>\r\nWhen Good Girls Go Wrong (1987)<br>\r\nLan du ying xiong (1987)<br>\r\nUnang gabi (1986)<br>\r\nBakit naglaho ang magdamag? (1986)<br>\r\nKapirasong dangal (1986)<br>\r\nDingding lang ang pagitan (1986)<br>\r\nMga nakaw na sandali (1986)<br>\r\nHuwag pamarisan: Kulasisi (1986)<br>\r\nIsang kumot tatlong unan (1986)<br>\r\nHayok (1986)<br>\r\nAnd the World Became Flesh (1985)<br>\r\nJoy and Joan (1985)<br>\r\nHello Lover, Goodbye Friend (1985)<br>\r\nHeartache City (1985)<br>\r\nEscort Girls (1985)<br>\r\nHubo sa dilim (1985)<br>\r\nIsla (1985)<br>\r\nSilip (1985)<br>\r\nBaby Tsina (1984)<br>\r\nAkin ang iyong katawan (1984)<br>\r\nWorking Girls (1984)<br>\r\nPasukin si Waway (1984)<br>\r\nDugong buhay (1983)<br>\r\nSana, bukas pa ang kahapon (1983)<br>\r\n', 'MariaIsabelLopezThumb6.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(15, 'Mara Lopez', 'Mara', 'Lopez', '', 22, 'female', '5ft 6in', '', 'Lopez Management', 'artsandlenses@yahoo.com', '', '<br>\r\nTELEVISION<br><br>\r\n\r\nWagas (2013) <br>\r\nTitser (2013)<br> \r\nMelodrama negra (2012)<br>\r\nMaalaala mo kaya (2008-2011)<br>\r\nReputasyon (2011) <br>\r\nMomay (2010) <br>\r\nImposible (2008) <br>\r\nSineSerye (2011-2012) <br>\r\nSurvivor Philippines (2011-2012) <br>\r\n\r\n<br>\r\n\r\nFILMS<br><br>\r\nPalitan (2012)<br>\r\nDebosyon (2013)<br>\r\nAng kwento ni Mabuti (2013)<br>\r\n', 'MaraLopez12.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(16, 'Alvin Anson', 'Alvin', 'Anson', '(Booking Agent) Arman Gutierrez', 52, 'male', '5ft 11in', '', 'Anson Management', 'agutierez@reelgate.com', '', '<br>TELEVISION<br><br>\r\n\r\nNever Say Goodbye (2013) <br>\r\nPNP Pacers (2011)<br> \r\nFlames of Love (2012)<br>\r\n<br>\r\nFILMS<br><br>\r\n\r\nWater Wars (2013)<br>\r\nDrug Mule (2013)<br>\r\nChasing Fire (2013)<br>\r\nThe Diplomat Hotel (2013)<br>\r\nDeath Match (2013)<br>\r\nAlfredo S. Lim: The Untold Story (2013)<br>\r\nEl Presidente (2012)<br>\r\nMy Lai Four (2010)<br>\r\nBaler (2008)<br>\r\nBlack Market Love (2008)<br>\r\nAnak ng Kumander (2008)<br>\r\nZombies: The Beginning (2007) <br>\r\nIsland of the Living Dead (2007)<br>\r\nLigalig (2006)<br>\r\nRome & Juliet (2006)<br>\r\nPacquiao: The Movie (2006)<br>\r\nTerrorist Hunter (2005)<br>\r\nThe Great Raid (2005)<br>\r\nNena inosente (2003)<br>\r\nHula mo huli ko (2002)<br>\r\nGising na si Adan (2002)<br>\r\nHanggang kailan ako papatay para mabuhay (2002)<br>\r\nKatawan mo, langit ko (Kamandag ni Margarita) (2002)<br>\r\nDiskarte (2002)<br>\r\nBurles King: Daw o... (2002)<br>\r\nKapirasong gubat sa gitna ng dagat (2001)<br>\r\nKapitan Ambo: Outside de kulambo (2001)<br>\r\nMano mano 2: Ubusan ng lakas (2001)<br>\r\nCarta alas... Huwag ka nang humirit (2001)<br>\r\nTabi tabi po! (2001)<br>\r\nPing Lacson: Super Cop (2000)<br>\r\nKailangan ko\'y ikaw (2000)<br>\r\nMadame X (2000)<br>\r\nPalaban (2000)<br>\r\nNag-aapoy na laman (2000)<br>\r\nBurlesk Queen Ngayon (1999)<br>\r\nDesperado, bahala na ang itaas (1999)<br>\r\nTigasin (1999)<br>\r\nKasal-kasalan (Sakalan) (1998)<br>\r\nBirador (1998)<br>\r\nPusong mamon (1998)<br>\r\nDamong ligaw (1997)<br>\r\nKamandag ko ang papatay sa iyo (1997)<br>\r\nHawak ko buhay mo (1997)<br>\r\nWag na wag kang lalayo (1997)<br>\r\nMadaling mamatay, mahirap mabuhay (1996)<br>\r\nHuwag mong isuko ang laban (1996) <br>\r\nItataya ko ang buhay ko (1996)<br>\r\nBayarang puso (1996)<br>\r\nMangarap ka (1995)<br>\r\n', 'AlvinAnsonThumbnail2.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(17, 'Rob Sy', 'Rob', 'Sy', '', 35, 'male', '5 ft 11 in', '', 'Rob Sy Management', '(Booking Agent Arman Gutierrez) agutierez@reelgate.com', '', '<br>TELEVISION <br><br>\r\n\r\nSi Agimat si Enteng Kabisote at si ako (2012)<br>\r\nMy Beloved (2012) <br>\r\nAmaya (2011-2012) <br>\r\nSurvivor Philippines (2008)<br>\r\n<br>\r\n\r\n<br>Films<br><br>\r\n\r\nMy Little Bossing (2013)<br>\r\nAsan si Lolo Mê? (2013) <br>\r\nPotpot (2012)<br>\r\nLilay: Darling of the Crowd (2010)<br>\r\nSa\'yo lamang (2010)<br>\r\nIlumina (2010) <br>\r\nRekrut (2010)<br>\r\nI Love Dreamguyz (2009) <br>\r\nHeavenly Touch (2009)<br>\r\n', 'RobSyThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(18, 'EJ Falcon', 'EJ', 'Falcon', '', 23, 'male', '6ft', '', 'Benjie Alipio', '(Booking Agent) agutierrez@reelgate.com', '', '\r\n\r\nTV <br>\r\nSaka saka 2013<br>\r\nWansapanataym 2013<br>\r\nDugong Buhay 2012<br>\r\nMundo man ay magunaw 2012<br>\r\nMaalaala mo kaya 2008-2011<br>\r\nGuns and Roses 2011<br>\r\nMara Clara 2011<br>\r\nKim 2010<br>\r\nTanging yaman 2009-2010<br>\r\nMay bukas pa 2009<br>\r\nKatorse 2008<br>\r\n<br>\r\n\r\nFilms<br>\r\n<br>\r\nThird Eye 2014<br>\r\nGirl, Boy, Bakla, Tomboy 2013<br>\r\nCall Center Girl 2013<br>\r\nAmorosa: The Revenge 2012<br>\r\nTum: My Pledge of Love 2011<br>\r\nFather Jejemon 2010<br>\r\nMomay 2010<br>\r\nLipgloss 2009<br>\r\n', 'EJFalconThumb1.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(19, 'Emilio Garcia', 'Emilio', 'Garcia', '', 42, 'male', '6ft', '', 'Emilio Garcia Management', '(Booking Agent) Rob Sy agutierrez@reelgate.com', '', 'TV <br>\r\n<br>\r\n\r\nMaalaala mo kaya 2012-2013<br>\r\n\r\nMagpakailanman 2013<br>\r\n\r\nPrinsesa ng Buhay Ko 2011-2013<br>\r\n\r\nWansapanataym 2013<br>\r\n\r\nKailangan Ko\'y Ikaw 2012<br>\r\n\r\nYesterday\'s Bride 2012<br>\r\n\r\nMundo man ay magunaw 2012<br>\r\n\r\nRegal Shocker 2012<br>\r\n\r\nIkaw ay pag-ibig 2011<br>\r\n\r\nReputasyon 2011<br>\r\n\r\nTime of My Life 2011<br>\r\n\r\nIn the Name of Love 2011<br>\r\n\r\nBianong Bulag 2011<br>\r\n\r\nDwarfina 2010<br>\r\n\r\nTween Hearts 2010<br>\r\n\r\nMagkano Ang Iyong Dangal? 2010<br>\r\n\r\nThe Last Prince 2009-2010<br>\r\n\r\nPepeng Agimat 2009<br>\r\n\r\nBente 20069<br>\r\n\r\nKung aagawin mo ang lahat sa akin 2007<br>\r\n\r\nMga kuwento ni Lola Basyang 2006<br>\r\n\r\nDaisy siete 2006<br>\r\n\r\nAtlantika 2006<br>\r\n\r\nCrazy for You 2006<br>\r\n\r\nNow and Forever 2006<br>\r\n\r\nKomiks 2006<br>\r\n\r\nSugo 2004<br>\r\n\r\nKrystala 1995 <br>\r\n\r\nFamilia Zaragoza 1995<br>\r\n\r\nCaptain Barbell 2003<br>\r\n\r\nDarating ang umaga 2003<br>\r\n\r\nBituin 2002<br>\r\n\r\nSa dulo ng walang hanggan 2001<br>\r\n\r\n<br>\r\n\r\nFilms<br>\r\n<br>\r\n\r\nEl Presidente 2012<br>\r\n\r\nKa Oryang 2011<br>\r\n\r\nPraybeyt Benjamin 2011<br>\r\n\r\nBangkang Papel 2011<br>\r\n\r\nRekrut 2010<br>\r\n\r\nSagrada familia 2009<br>\r\n\r\nDukot 2009<br>\r\n\r\nMarino 2009<br>\r\n\r\nAstig 2009<br>\r\n\r\nHada 2006<br>\r\n\r\nRotonda 2006<br>\r\n\r\nDilim 2005<br>\r\n\r\nPunla 2003<br>\r\n\r\nMapanukso 2003<br>\r\n\r\nSa piling ng mga belyas 2003<br>\r\n\r\nMasamang ugat 2003<br>\r\n\r\nKiskisan 2002<br>\r\n\r\nDiskarte 2002<br>\r\n\r\nParola - Bilangguang walang rehas <br>\r\n\r\nBukas, babaha ng dugo 2001<br>\r\n\r\nSgt. Maderazo: Bayad na pati kaluluwa mo 2000<br>\r\n\r\nHuwad na hayop 1999<br>\r\n\r\nSuspek 1999<br>\r\n\r\nAko\'y ibigin mo... Lalaking matapang\r\n 1999<br>\r\n\r\nKanang kanay: Ituro mo, itutumba ko 1999<br>\r\n\r\nDroga, pagtatapat ng mga babaeng addict 1998<br>\r\n\r\nTulak ng bibig, kabig ng dibdib 1998<br>\r\n\r\nDangerous Passions 1998<br>\r\n\r\nBirador 1998<br>\r\n\r\nMapusok 1997<br>\r\n\r\nEsperanza 1997<br>\r\n\r\nMananayaw 1997<br>\r\n\r\nAmbisyosa 1997<br>\r\n\r\nAng pulubi at ang prinsesa 1997<br>\r\n\r\nBawal mahalin, bawal ibigin 1997<br>\r\n\r\nKriselda: Sabik sa iyo 1997<br>\r\n\r\nKung marunong kang magdasal, umpisahan mo na 1997<br>\r\n\r\nRoom for Rent 1997<br>\r\n\r\nSelosa 1996<br>\r\n\r\nMakamandag na bango 1996<br>\r\n\r\nPusong hiram 1996<br>\r\n\r\nDa Best in da West 2: Da Western Pulis Istori 1996<br>\r\n\r\nSuicide Rangers 1995<br>\r\n\r\nProboys 1995<br>\r\n\r\nDog Tag: Katarungan sa aking kamay 1995<br>\r\n\r\nManila Girl: Ikaw ang aking panaginip 1995<br>\r\n\r\nSambahin mo ang katawan ko 1995<br>\r\n\r\nAng tange kong pag-ibig \r\nWalang malay 1992<br>\r\n\r\n', 'EmilioGarciaThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(20, 'Billy Crawford', 'Billy', 'Crawford', '(Booking Agent) Neil Estel', 30, 'male', '5 ft 9 in', '', 'Star Magic', 'neilestel2010@gmail.com', 'https://www.youtube.com/watch?v=oFPTn6mZK9c', '<br><br>TELEVISION <br><br>\r\n\r\nToda Max 2012<br>\r\nMaalaala mo kaya 2009<br>\r\nFeb-ibig 2005<br>\r\nPilipinas Got Talent 2012-2013<br>\r\nShowtime 2012 On Going<br><br>\r\nFILMS<br><br>\r\n\r\nDominion: Prequel to the Exorcist 1991<br>\r\nEh kasi bata 1990<br>\r\nDino Dinero 1990<br>\r\nJuan Tanga, super naman, at ang kambal na tiyanak 1990<br>\r\nKasalanan ang buhayin ka 1989<br>\r\nEverlasting Love  1989<br>\r\nBote, dyaryo, garapa 1989<br>\r\nPahiram ng isang umaga 1989<br>\r\nPardina at ang mga duwende 1988<br>\r\nSandakot na bala 1988<br>\r\nLost Command 1987<br>\r\nMoron 5 and the Crying Lady 2012<br>\r\nMomzillas 2013<br>\r\n', 'BillyCrawfordThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(21, 'Ai Ai de las Alas', 'Ai Ai', 'de las Alas', NULL, 46, 'female', '5 ft 4 in', NULL, 'Mr. Boy Abunda', '(Booking Agent - Neil Estel) neilestel2010@gmail.com', NULL, '<p><strong>TELEVISION WORKS</strong></p><p data-empty="true"><br></p><p>Wansapanataym 2012-2013</p><p>Toda Max 2013</p><p>Maalaala mo kaya 2013</p><p>Wako Wako 2011-2012</p><p>Maria la del Barrio 2011-2012</p><p>My Binondo Girl 2011</p><p>Maling akala 2009-2010</p><p>Pepeng Agimat 2010</p><p>May bukas pa 2009</p><p>Volta 2008</p><p>I Heart Betty La Fea 2008</p><p>Princess Sarah 2007</p><p>Love Spell 2006</p><p>Bituing walang ningning 2005</p><p>Masayang Tanghali Bayan! 2004</p><p>Tanging ina 2003</p><p>Whattamen 2001</p><p>Arriba! Arriba! 2000</p><p>Sing-galing 2000</p><p>1 for 3 1997</p><p data-empty="true"><br></p><p><strong>Feature Films</strong></p><p data-empty="true"><br></p><p>Kung Fu Divas 2013</p><p>Bromance: My Brother\'s Romance 2012</p><p>Sisterakas 2012</p><p>Enteng ng Ina mo 2011</p><p>Who\'s That Girl? 2010</p><p>Ang tanging ina mo: Last na \'to! 2010</p><p>Ang tanging pamilya (A Marry-Go-Round!) 2009</p><p>Astig 2009</p><p>BFF: Best Friends Forever 2008</p><p>Ang tanging ina n\'yong lahat 2008</p><p>Ikaw pa rin: Bongga ka boy! 2007</p><p>Pasukob 2007</p><p>Ang cute ng ina mo! 2006</p><p>Kapag tumibok ang puso: Not once, but twice 2006</p><p>Shake Rattle &amp; Roll 2k5 2004</p><p>Volta 2003</p><p>Pinay Pie 2003</p><p>Ang tanging ina 2003</p><p>Pakners 2001</p><p>Booba 2000</p><p>Bakit ba ganyan? (Ewan ko nga ba, Darling) 1999</p><p>Dito sa puso ko 1999</p><p>Kiss mo \'ko 1999</p><p>Ms. Kristina Moran: Babaeng palaban 1998</p><p>Kasal-kasalan (Sakalan) 1998</p><p>It\'s cool bulol 1998</p><p>Bitoy ang itawag mo sa akin 1997</p><p>Computer Kombat 1997</p><p>Isang tanong, isang sagot 1996</p><p>Ang misis kong hoodlum 1994</p><p>Koronang itim 1994</p><p>Separada 1994</p><p>Darna! Ang pagbabalik 1994</p><p>Multo in the City 1993</p><p>Bulag, pipi at bingi 1993</p><p>Mga syanong parak 1992</p><p>Mahal kita walang iba 1992</p><p>Pido Dida 3: May kambal na 1992</p><p>Shake Rattle &amp; Roll IV 1992</p><p>Guwapings: The First Adventure 1992</p><p>Sana kahit minsan 1992</p><p>Ali in Wonderland 1992</p><p>Takbo... Talon... Tili!!!1991</p><p>Shake Rattle &amp; Roll III 1990</p><p>Wooly Booly 2: Ang titser kong alien 1990</p><p>Bakit kay tagal ng sandali? 1990</p><p>Michael and Madonna 1990</p><p>Rocky n Rolly: Suntok sabay takbo 1990</p><p>Paikot-ikot 1990</p><p>Biokids 1989</p><p>Romeo Loves Juliet... But Their Families Hate Each Other! 1989</p><p>Gawa na ang bala para sa akin 1989</p><p>Wooly Booly: Ang classmate kong alien 1989</p><p>Regal Shocker (The Movie) 1987</p><p>Wanted Bata-Batuta 1988</p>', '8f6b1657d86722340343dfebdc8b1860.jpeg', 1, '2018-02-25 21:10:45', '2018-03-25 12:17:40'),
	(22, 'Wendell Decatoria', 'Wendell', 'Decatoria', NULL, 21, 'male', '5Ft 8 in', NULL, 'GMA Artist Center', 'wendell.t.decatoria@gmail.com', NULL, '<p>TELEVISION WORKS</p><p data-empty="true"><br></p><p>Magpakailanman 2013</p><p>Wagas 2013</p><p>Mundo mo\'y akin 2013</p><p>Indio 2012</p><p>Teen Gen 2012</p><p>One True Love 2012</p><p>My Beloved 2011</p><p>Tween Academy: Class of 2012 - 2011</p><p>Alakdana 2010</p><p>Tween Hearts 2013</p><p>Bingit 2013</p><p>The Ryzza Mae Show 2013</p><p>Sunday All Stars 2013</p><p>Magpakailanman 2012</p><p>The 37th Metro Manila Film Festival 2012</p><p data-empty="true"><br></p><p>FEATURE FILMS</p><p data-empty="true"><br></p><p>10,000 Hours 2013</p><p>Si Agimat si Enteng Kabisote at si ako 2012</p><p>Sosy Problems 2012</p><p>Ang Panday 2 2011/III</p><p>The Road 2011</p>', 'AldenRichardThumb.jpg', 1, '2018-02-25 21:10:45', '2018-04-02 08:17:40'),
	(23, 'Alessandra de Rossi', 'Alessandra', 'de Rossi', '', 27, 'female', '5 ft 7 in', '', 'Mr. Manny Valera', '(Booking Agent - Neil Estel) neilestel2010@gmail.com', '', '<br> TELEVISION WORKS<br> <br> Magpakailanman  2013<br> \r\nMagkano Ba Ang Pag-ibig? 2013<br> \r\nWagas 2012<br> \r\nPahiram ng Sandali 2012<br> \r\nLegacy 2011<br> \r\nSinner or Saint  2011<br> \r\nGreen Rose 1999-2011<br> \r\nMaalaala mo kaya 2011<br> \r\nMagkaribal 2010<br> \r\nWansapanataym 2010<br> \r\nTonyong Bayawak 2010<br> \r\nRomeo at Juliet 2010<br> \r\nMy Last Romance 2009<br> \r\nPinoy Sunday 2009<br> \r\nTayong dalawa 2009<br> \r\nTayong dalawa: The Untold Beginning 2009<br> \r\nBabalik kang muli 2009<br> \r\nManila 2009<br> \r\nKambal sa uma 2008<br> \r\nPieta 2008<br> \r\nDragonna 2008<br> \r\nLove Books 2008<br> \r\nI Heart Betty La Fea 2008<br> \r\nE.S.P. 2008<br> \r\nKamandag 2007<br> \r\nPasan ko ang daigdig 2006/II<br> \r\nBahay mo ba \'to 2006<br> \r\n24th Luna Awards 2006<br> \r\nNow and Forever 2006<br> \r\nEncantadia: Pag-ibig hanggang wakas 2005<br> \r\nEtheria: Ang ikalimang kaharian ng encantadia 2005<br> \r\nDarna 2004<br> \r\nUnderstatement: The Bench Underwear and Denim Fashion Show 2004<br> \r\nHanggang kailan 2004<br> \r\nKool ka lang 2001<br> \r\nKung mawawala ka 2001<br> \r\nBiglang sibol, bayang impasibol 2000<br> \r\nClick 1998<br> \r\n\r\n\r\n\r\n\r\n<br> \r\n\r\nFEATURE FILMS\r\n<br> <br> \r\nMystrio (Uno... dos... tres pilyos!) 1998<br> \r\nMost Wanted 1999<br> \r\nAzucena  2000<br> \r\nHubog  2001<br> \r\nPakisabi na lang... Mahal ko siya  2001<br> \r\nMga munting tinig 2002<br> \r\nMessage Sent 2002<br> \r\nAstigmatism 2003/I<br> \r\nHomecoming 2003<br> \r\nMano po 2: My home 2003<br> \r\nThe Cory Quirino Kidnap: NBI Files 2003<br> \r\nSpirit of the Glass 2004<br> \r\nThe Maid 2005<br> \r\nKutob 2005<br> \r\nKarma 2006<br> \r\nBarcelona 2006<br> \r\nAnino ng setyembre 2006<br> \r\nHide and Seek 2007<br> \r\nBotelya 2007<br> \r\nAy Ayeng 2008<br> \r\nOne Night Only 2008<br> \r\nDose 2008<br> \r\nIndependencia 2009<br> \r\nPalawan Fate  2010<br> \r\nChasing Manila 2010/II<br> \r\nDalaw  2010<br> \r\nKa Oryang 2011<br> \r\nSta. Niña 2012<br> \r\nMater Dolorosa 2012<br> \r\nBaybayin 2012<br> \r\nLiars 2013<br> \r\nAlfredo S. Lim: The Untold Story 2013<br> \r\nAng maskot 2013<br> \r\nWoman of the Ruins  2013<br> \r\n\r\n', 'AlessandraDeRossiThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(24, 'Valerie Bangs Garcia', 'Valerie Bangs', 'Garcia', '', 24, 'female', '5 ft 4 in', '', 'Star Magic', '(Booking Agent - Neil Estel) neilestel2010@gmail.com', '', '<br>TELEVISION WORKS<br><br> \r\nMaalaala mo kaya 2013<br>\r\nLuv U 2013<br>\r\nKung ako\'y iiwan mo 2012/I<br>\r\nHiyas 2012<br>\r\nKristine 2011<br>\r\nCinco 2010<br>\r\nMidnight DJ 2009-2010<br>\r\nMy Cheating Heart 2010<br>\r\nMagkano Ang Iyong Dangal? 2009<br>\r\nKatorse 2009<br>\r\nKambal sa uma 2008<br>\r\nPalos 2007<br>\r\nLastikman 2007<br>\r\nYour Song 2006<br>\r\nLet\'s Go 2005<br>\r\nSBD Jam 2005<br>\r\n\r\n\r\n<br>\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n\r\nMarino 2009<br>\r\nShake Rattle & Roll XI 2009<br>\r\nBulong 2010/II<br>\r\nEl Brujo  2011<br>\r\nSegunda mano 2010-2011<br>\r\nComing Soon 2012<br>\r\nMigrante 2012<br>\r\nThe Reunion 2012<br>\r\nPosas 2012<br>\r\nLauriana 2013<br>\r\nBurgos  2012-2013<br>\r\nSabine 2014<br>\r\n', 'BangsGarciaThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(25, 'Tom Rodriguez', 'Tom', 'Rodriguez', 'Booking Agent - Neil Estel', 25, 'male', '5 ft 11 in', '', 'Mr. Popoy Caritativo', 'neilestel2010@gmail.com', 'https://www.youtube.com/watch?v=gu2lAbYdOAs', '<br>TELEVISION <br>\r\n<br>\r\nMagpakailanman 2013<br>\r\nMy Husband\'s Lover 2013<br>\r\nBe Careful with My Heart 2013<br>\r\nMaalaala mo kaya 2012/I<br>\r\nAngelito: Batang ama 2011<br>\r\nGuns and Roses 2011<br>\r\nMana po 2010<br>\r\nMy Driver Sweet Lover 2010<br>\r\nIsla 2009-2010<br>\r\nMy Cheating Heart 2010<br>\r\nPinoy Big Brother 2009<br>\r\n\r\n\r\n<br>\r\n\r\nFILMS<br><br>\r\nSo It\'s You 2014 <br>\r\nBekikang: Ang nanay kong beki 2013<br>\r\nMy Lady Boss 2013<br>\r\nGaydar 2012-2013<br>\r\nTemptation Island  2011<br>\r\nThe Bride and the Lover 2010-2013<br>\r\nThe Reunion 2012<br>\r\nHere Comes the Bride 2010<br>\r\nPetrang kabayo 2010<br>\r\nLove Me Again 2010<br>\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'TomRodriguezThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(26, 'Aya Medel', 'Aya', 'Medel', 'Booking Agent - Arman Gutierrez', 34, 'female', '5 ft 5 in', '', 'Medel Management', ' agutierrez@reelgate.com', '', '<br>TELEVISION WORKS<br><br>\r\n\r\n\r\n\r\nSa Puso Ko, Iingatan Ka 2001<br>\r\nEsperanza 1997<br>\r\nKirara 1998-2000<br>\r\n<br>\r\nFEATURE FILMS<br>\r\n<br>\r\nTotoy Mola 1997<br>\r\nPabre Kalibre  1997<br>\r\nSiya\'y nagdadalaga 1997<br>\r\nAkin ka lamang 1997<br>\r\nKapag nasukol ang asong ulol 1997<br>\r\nMasarap, masakit ang magmahal 1997<br>\r\nNakalimot sa pag-ibig 1997<br>\r\nNo Read, No Write 1997<br>\r\nBawal 1997<br>\r\nTatlong makasalanan 1998<br>\r\nShirley 1998<br>\r\nKaya ko pero masakit 1998<br>\r\nBabae sa bubungang lata 1998<br>\r\nNotoryus 1998<br>\r\nTroublesome Night 4 1998<br>\r\nLaruang buhay 1998<br>\r\nAlipin ng aliw 1998<br>\r\nKargado 1998<br>\r\nSquala 1998 <br>\r\nNikilado 1999<br>\r\nWala ka nang lupang tatapakan 1999<br>\r\nSisa 1999<br>\r\nMolata 1999<br>\r\nDroga, pagtatapat ng mga babaeng addict 1999<br>\r\nDalagang dagat 1999<br>\r\nNaked Nights 2001<br>\r\nVenus: Diosa ng kagandahan 2001<br>\r\nDudurugin ko pati buto mo 2001<br>\r\nTotal Aikido 2001<br>\r\nDuwag lang ang sumusuko 2000<br>\r\nBasta Tricycle Driver... Sweet Lover 2000<br>\r\nGawin sa dilim 2 1999<br>\r\nSindak 1999<br>\r\nLargado, ibabalik kita sa pinanggalingan mo! 1999<br>\r\nGatilyo 1999<br>\r\nPamasak butas 1999<br>\r\nHilig ng katawan 1999<br>\r\nGising na si Adan 2002<br>\r\nSugat, walang paghilom 2002<br>\r\nPagsaluhan 2002<br>\r\nBukang bibig 2002<br>\r\nEva, lason kay Adan 2001<br>\r\n', 'AyaMedelThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(27, 'Boy II Quizon', 'Boy II', 'Quizon', 'Booking Agent - Neil Estel', 29, 'male', '5\'6', '', 'Quizon Management', 'neilestel2010@gmail.com', '', '<br>TELEVISION WORKS<br><br>\r\n \r\nMagpakailanman 2013<br>\r\nWagas 2012<br>\r\nCoffee Prince 2012<br>\r\nLaff en Roll 2008<br>\r\nDo-Se-Na 2007<br>\r\nWhammy! Push Your Luck 2007<br>\r\nLupin 2007<br>\r\nMga kuwento ni Lola Basyang 2007<br>\r\nBubble Gang 2006<br>\r\nBahay mo ba \'to 2004<br>\r\nHanggang kailan 2002<br>\r\nMichael V: The Bubble G Anthology 2006<br>\r\n<br>\r\nFEATURE FILMS<br><br>\r\n\r\nMost Wanted 1997<br>\r\nHome Along da Riles 2 1996<br>\r\nDa Best in da West 2: Da Western Pulis Istori 1996<br>\r\nIsa, dalawa, takbo! 1995<br>\r\nFather & Son 1994<br>\r\nVampira 1994<br>\r\nAbrakadabra 1994<br>\r\nHindi pa tapos ang labada, darling 1994<br>\r\nHome Alone da Riber 2000<br>\r\nPinoy/Blonde 2005<br>\r\nFirst Day High 2005<br>\r\nMulawin: The Movie 2005<br>\r\nA Knife of Her Own (Movie) 2007<br>\r\nBoy Pick-Up: The Movie 2010<br>\r\nComing Soon 2013<br>\r\n', 'BoyIIQuizonThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(28, 'Carla Abellana', 'Carla', 'Abellana', 'Booking Agent - Neil Estel', 27, 'female', '5 ft 4 in', '', 'GMA Artist Center', 'neilestel2010@gmail.com', 'https://www.youtube.com/watch?v=gu2lAbYdOAs', '<br>TELEVISION<br>\r\nMy Husband\'s Lover 2013<br>\r\nMagpakailanman 2012<br>\r\nMakapiling kang muli 2011<br>\r\nKung aagawin mo ang langit 2011<br>\r\nMagic palayok 2010<br>\r\nJillian: Namamasko po 2010<br>\r\nLove Bug 2010<br>\r\nThe Last Prince 2010<br>\r\nBasahang ginto 2009<br>\r\nObra 2009<br>\r\nRosalinda 2009<br>\r\nAll About Eve 2008<br>\r\n\r\n<br>\r\n\r\nFILMS<br><br>\r\nSo It\'s You 2014 <br>\r\nMamarazzi 2010<br>\r\nShake Rattle and Roll 12 2010<br>\r\nManila Kingpin: The Asiong Salonga Story 2011<br>\r\nYesterday Today Tomorrow 2011<br>\r\nMy Neighbor\'s Wife 2011<br>\r\nMy Neighbor\'s Wife 2011<br>\r\nThird Eye 2013<br>\r\n', 'CarlaAbellanaThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(29, 'Rein Jel Locsin', 'Rein ', 'Jel Locsin', '', 20, 'male', '5 ft 6 in', '', 'Parinas Management', 'itxmerein23@yahoo.com', 'https://www.youtube.com/watch?v=_5v8h0XsH1U', '<br>FILM<br><br>\r\n\r\n"Operta" (Supporting Actor -- and won as Esihas 2010 Best Supporting Actor)<br><br>PLAY<br><br>\r\nDulaang CAS- "Bakla" (Lead Actor)<br>\r\nDulaang CAS- Supporting Actor (A mini theatrical concert)<br>\r\n<br>TV<br><br>\r\nWapak- extra (during my OJT days at ViVA Entertainment Inc.)<br>\r\nHirit 2013- Lead Dancer/Choreographer (mini concert)<br>\r\nVariety Show 2014- Guest Dancer (together with Enrique Gil, Jireh Lim, Negi, Saito, etc.)<br>\r\n\r\n<br>WORKSHOP<br><br>\r\n\r\nSagibo Dance Troupe Dance Workshop - Participant \r\n\r\n\r\n\r\nM-Stage Acting Workshop - Participant\r\n', 'ReinThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(30, 'Dennis Trillio', 'Dennis', 'Trillio', '', 32, 'male', '5 ft 9 in', '', 'Popoy Caritativo', 'Neilestel2010@gmail.com', '', '<br>TELEVISION WORKS<br><br>\r\n\r\nMagpakailanman 2013<br>\r\nMy Husband\'s Lover 2013 <br>\r\nLegacy 2011<br>\r\nSinner or Saint 2011<br>\r\nDwarfina 2010 <br>\r\nEndless Love 2010<br>\r\nDarna 2010<br>\r\nGumapang ka sa lusak 2009<br>\r\nObra 2009<br>\r\nSugat ng kahapon 2008<br>\r\nGagambino 2008<br>\r\nDear Friend 2008<br>\r\nMagdusa ka 2008<br>\r\nE.S.P. 2007<br>\r\nZaido: Pulis pangkalawakan 2007<br>\r\nKung mahawi man ang ulap 2007 <br>\r\nStan Malabanan 2007<br>\r\nSuper Twins 2006<br>\r\nBubble Gang 2006 <br>\r\nNow and Forever 2006 <br>\r\n24th Luna Awards 2006<br>\r\nMajika 2006 <br>\r\nArt Angel 2006<br>\r\nEtheria: Ang ikalimang kaharian ng encantadia 2005 <br>\r\nMahiwagang Baul 2005<br>\r\nDarna 2005<br>\r\nLove to Love 2004<br>\r\nMulawin 2004<br>\r\nTwin Hearts 2003  <br>\r\nSa dulo ng walang hanggan 2001<br>\r\nChôdenji mashin Borutesu Faibu  1977<br><br>\r\nFEATURE FILMS<br><br>\r\n\r\nSapi 2012<br>\r\nShake Rattle and Roll Fourteen: The <br>Invasion 2012<br>\r\nTemptation of Wife 2012<br>\r\nAng katiwala 2012<br>\r\nBoy Pick-Up: The Movie 2012<br>\r\nYesterday Today Tomorrow 2011<br>\r\nMy Neighbor\'s Wife 2011<br>\r\nTemptation Island 2011<br>\r\nRosario 2010<br>\r\nLove Bug 2009-2010<br>\r\nMano po 6: A Mother\'s Love 2009<br>\r\nTarot 2009<br>\r\nAstig 2009<br>\r\nAdik sa\'yo 2009 <br>\r\nMag-ingat ka sa... Kulam 2008<br>\r\nI.T.A.L.Y. (I Trust and Love You) 2008<br>\r\nShake, Rattle & Roll 9 2007 <br>\r\nTxt 2006<br>\r\nPamahiin 2006 <br>\r\nBlue Moon 2005<br>\r\nMulawin: The Movie 2005<br>\r\nAishite imasu (Mahal kita) 1941 2004<br>\r\nMano po III: My love 2004<br><br>\r\n\r\n\r\n', 'DennisTrilloThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(31, 'Glaiza de Castro', 'Glaiza', 'de Castro', '', 25, 'female', '5 ft 5 in', '', 'Manny Ballester', 'Neilestel2010@gmail.com', '', '\r\n\r\n<br>\r\nTELEVISION WORKS:\r\n<br>\r\nVampire ang daddy ko 2013-2014 <br>\r\nWagas 2013-2014<br>\r\nMagpakailanman 2013 <br>\r\nKatipunan 2013 <br>\r\nGenesis 2013<br>\r\nVavavoom 2012<br>\r\nTemptation of Wife 2012 <br>\r\nMadaling araw mahabang gabi 2011-2012<br>\r\nAmaya 2011<br>\r\nGrazilda 2010<br>\r\nDiva 2010<br>\r\nStairway to Heaven 2009<br>\r\nKung aagawin mo ang lahat sa akin 2008<br>\r\nGagambino 2008 <br>\r\nSine novela 2007 <br>\r\nMga kuwento ni Lola Basyang 2007 <br>\r\nAsian Treasures 2007 <br>\r\nFantastikids 2006<br>\r\nMaalaala mo kaya 2005 <br><br>\r\n\r\n<br>FEATURED FILMS:<br><br>\r\nHula (delayed) (rumored) 2014<br>\r\nCattleya: An OFW Story 2014<br>\r\nComing Soon 2013<br>\r\nI-Libings 2011<br>\r\nPatikul 2011<br>\r\nRakenrol 2010<br>\r\nLaff en Roll 2009 <br>\r\nMano po 6: A Mother\'s Love 2009<br>\r\nTarot 2009<br>\r\nObra 2009<br>\r\nAstig 2009<br>\r\nBente 2009<br>\r\nAng manghuhula 2008<br>\r\nBatanes 2007<br>\r\nBoys Nxt Door 2007 <br>\r\nStill Life 2007<br>\r\nZsaZsa Zaturnnah Ze Moveeh 2006<br>\r\nTwilight Dancers 2006<br>\r\nWhite Lady 2006<br>\r\nPacquiao: The Movie 2006<br>\r\nManay po! 2006<br>\r\nSukob 2006<br>\r\nClose to You 2005<br>\r\nIkaw ang lahat sa akin 2004<br>\r\nSpirits 2002 <br>\r\nBahid 2002<br>\r\nBerks 2002<br>\r\nSingsing ni Lola 2001<br>\r\nIkaw lang ang mamahalin 2001<br>\r\nCool Dudes 24/7 2001<br>\r\n\r\n', 'GlaizaDeCastroThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(32, 'Dion Ignacio', 'Dion', 'Ignacio', 'Neil Estel', 26, 'male', '5 ft 11 in', '', 'GMA Artist Center', 'neilestel2010@gmail.com', '', '\r\n<br><br>\r\nTELEVISION WORKS<br><br>\r\n\r\nInamorata 2014<br>\r\nBasement 2013-2014<br>\r\nMagpakailanman 2013<br>\r\nWagas 2013 <br>\r\nMaghihintay Pa Rin 2012 <br>\r\nMagdalena: Anghel sa Putikan 2012<br>\r\nThe Good Daughter 2011-2012<br>\r\nAmaya 2011<br>\r\nMy Lover, My Wife 2010 <br>\r\nDiva 2010<br>\r\nIna, kasusuklaman ba kita? 2009<br>\r\nSana ngayong pasko 2009<br>\r\nPatient X 2008-2009<br>\r\nObra 2009 <br>\r\nBahay mo ba \'to 2006<br>\r\nBakekang 2006-2007<br>\r\nK, the P1,000,000 Videoke Contest<br> \r\nSaan darating ang umaga? 2008<br>\r\nBabangon ako\'t dudurugin kita 2007<br>\r\nDaisy siete 2007 <br>\r\nZaido: Pulis pangkalawakan 2007<br>\r\nMagic kamison 2007<br>\r\nMga kuwento ni Lola Basyang 2007<br>\r\nFantastic Man 2006 <br>\r\nSugo 2005<br>\r\nHappily Ever After 2004-2005<br>\r\nLove to Love 2004<br>\r\nJoyride 2004<br>\r\nStage 1: The Starstruck Playhouse 2004<br> \r\nKilig... Pintig... Yanig...2004<br><br>\r\n\r\nFEATURE FILMS<br><br>\r\n\r\nMy Lady Boss 2013<br>\r\nNgayon at kailanman 2008<br>\r\nDesperadas 2 2008<br>\r\nI Wanna Be Happy 2006<br>\r\nNow and Forever 2006 <br>\r\nMoments of Love 2005<br>\r\nMulawin: The Movie 2005<br>\r\nHari ng sablay: Isang tama, sampung mali 2005<br>\r\n\r\n', 'DionIgnacioThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(33, 'Maja Salvador', 'Maja', 'Salvador', '', 25, 'female', '5\'4', '', 'Star Magic', 'neilestel2010@gmail.com', '', '<br><br>\r\n\r\nTELEVISION WORKS:<br><br>\r\n\r\nThe Legal Wife 2014<br>\r\nIna, kapatid, anak 2012 <br>\r\nToda Max 2012 <br>\r\nLumayo ka man sa akin 2012 <br>\r\nMy Binondo Girl 2011-2012 <br>\r\nMinsan lang kita iibigin 2011<br>\r\nMaalaala mo kaya 2005-2010 <br>\r\nWansapanataym 2010<br>\r\nImpostor 2010<br>\r\nLove Me, Love You 2009-2010 <br>\r\nMay bukas pa 2009<br>\r\nNasaan ka Maruja? 2008<br>\r\nKelly! Kelly! (Ang hit na musical) 2008<br>\r\nKapitan Boom 2008<br>\r\nKapag ako ay nagmahal 2008 <br>\r\nSineSerye 2008<br>\r\nPatayin sa Sindak si Barbara 2008<br>\r\nYour Song 2006-2007<br>\r\nPangarap na bituin 2007<br>\r\nKomiks 2006-2007<br>\r\nLove Spell 2006 <br>\r\nStar Magic Presents 2006 <br> \r\nIt Might Be You 2003<br>\r\n<br>\r\n\r\nFEATURED FILMS:<br><br>\r\nStatus: It\'s Complicated 2012<br>\r\n24/7 in Love 2012<br>\r\nMy Cactus Heart 2012<br>\r\nThelma 2011<br>\r\nBest Friends Forever 2011<br>\r\nFather Jejemon 2010<br>\r\nCinco 2010<br>\r\nMoon River 2009<br>\r\nShake Rattle & Roll XI 2009<br>\r\nNagsimula sa puso 2009<br>\r\nVilla Estrella 2009<br>\r\nOne More Chance 2008<br>\r\nMy Kuya\'s Wedding 2006-2007<br>\r\nFirst Day High 2006<br>\r\nSukob 2006<br>\r\nSa piling mo 2004 <br>\r\nSpirits 2003 <br>\r\n\r\n', 'MajaSalvadorThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(34, 'Lovi Poe', 'Lovi', 'Poe', 'Neil Estel', 25, 'female', '5 ft 5 in', '', 'Leo Dominguez', 'neilestel2010@gmail.com', '', '<br>Television Works:<br><br>\r\n\r\nMagpakailanman 2013-2014 <br>\r\nAkin pa rin ang bukas 2013 <br>\r\nYesterday\'s Bride 2012 <br>\r\nGuniguni 2012<br>\r\nLegacy 2011<br>\r\nCaptain Barbell 2011 <br>\r\nBeauty Queen 2010<br>\r\nGumapang ka sa lusak 2009<br>\r\nShow Me Da Manny 2009<br>\r\nAng babaeng hinugot sa aking tadyang 2008 <br>\r\nLaLola 2008 <br>\r\nObra 2008<br>\r\nLipgloss 2008<br>\r\nSine novela 2007<br>\r\nZaido: Pulis pangkalawakan 2006<br>\r\nBakekang 2006 <br>\r\nLove to Love 2006 <br><br>\r\n\r\nFeatured Film:<br><br>\r\n\r\n\r\nThy Womb 2012<br>\r\nTitser 2013<br>\r\nLihis 2013 <br>\r\nTalamak 2013<br>\r\nSana dati 2013<br>\r\nThe Bride and the Lover 2013 <br>\r\nShake Rattle and Roll Fourteen: The Invasion 2012<br>\r\nTiktik: The Aswang Chronicles 2012\r\nSinapupunan 2012<br>\r\nYesterday Today Tomorrow 2011<br>\r\nDeadline: The Reign of Impunity 2011<br>\r\nAswang 2011<br>\r\nMy Neighbor\'s Wife 2011<br>\r\nMistaken Identity 2011<br>\r\nTemptation Island 2011<br>\r\nMy Valentine Girls 2010<br>\r\nWhite House 2010<br>\r\nMayohan 2010<br>\r\nSigwa 2010<br>\r\nLove Bug 2010<br>\r\nSagrada familia 2009<br>\r\nWalang hanggang paalam 2009<br>\r\nShake, Rattle & Roll 9 2007<br>\r\n', 'LoviPoeThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(35, 'Carlos Morales', 'Carlos', 'Morales', 'Arman Gutierrez', 37, 'male', '6ft', '', 'Morales Management', 'agutierrez@reelgate.com', '', '<br><br>\r\nTELEVISION WORKS<br><br>\r\nGalema anak ni zuma 2014<br>\r\nIndio 2013<br>\r\nMaalaala mo kaya 2008-2012 <br>\r\nFelina: Prinsesa ng mga Pusa 2012<br>\r\nReputasyon 2011-2012 <br>\r\nImortal 2011 <br>\r\nWansapanataym 2011<br>\r\nJuanita Banana 2010-2011<br>\r\nBabaeng Hampaslupa 2010<br>\r\nAlyna 2010<br>\r\nAng Panday 2009 <br>\r\nRosalinda 2009<br>\r\nVolta 2008<br>\r\nDyosa 2007<br>\r\nCaptain Barbell 2006<br>\r\nMaid in Heaven 2003<br>\r\nWansapanataym 2003<br>\r\nRecuerdo de Amor 2001<br><br>\r\n\r\n\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n \r\nAlfredo S. Lim: The Untold Story 2013<br>\r\nDampi 2010 <br>\r\nBigasan 2009<br>\r\nBFF: Best Friends Forever 2008<br>\r\nLagot ka sa kuya ko 2004<br>\r\nKalabit 2003 <br>\r\nBayarán 2003<br>\r\nBigay hilig 2002<br>\r\nAng agimat: Anting-anting ni Lolo 2002<br>\r\nHula mo huli ko 2002 <br>\r\nDalaginding 2002<br>\r\nSabayan sa laban 2001<br>\r\nTatarin 2001<br>\r\nRed Diaries 2001<br>\r\nOnsehan 2001<br>\r\nRichie 2001<br>\r\nHalik ng sirena 2001\r\nDavid 2000\r\nLaro sa baga  2000<br>\r\nAng babaeng putik 2000<br>\r\nMost Wanted 1999<br>\r\nSaan ka man naroroon 1999<br>\r\nMs. Kristina Moran: Babaeng palaban 1999<br>\r\nMula sa puso  1999<br>\r\nTatlong makasalanan 1997<br>\r\nAlindog ng Lahi 1997<br>\r\nAdonis 1997<br>\r\nMapanuksong hiyas 1997<br>\r\n', 'CarlosMoralesThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(36, 'Coleen Garcia', 'Coleen', 'Garcia', 'Neil Estel', 21, 'female', '5 ft 4 in', '', 'Star Magic', 'neilestel2010@gmail.com', '', '<br>TELEVISION WORKS<br><br>\r\n\r\n\r\n\r\n\r\nIts showtime<br>\r\nShe\'s the One  2013<br>\r\nLittle Champ  2012<br>\r\nOka2kat  2011-2012<br>\r\nMy Binondo Girl 2011<br>\r\nWansapanataym 2011<br>\r\nGood Vibes 2011<br>\r\nMaalaala mo kaya 2012<br>\r\nGandang gabi Vice  2012<br>\r\nSarah G Live 2012<br><br>\r\n', 'ColeenGarciaThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(37, 'Gwen Zamora', 'Gwen', 'Zamora', 'Neil Estel', 25, 'female', '5 ft 7 in', '', 'GM Artists Center', 'neilestel2010@gmail.com', '', '<br><br>\r\nTELEVISION WORKS<br><br>\r\n\r\nInamorata 2014<br>\r\nMagpakailanman 2013<br>\r\nBinoy Henyo 2013<br>\r\nWagas 2013<br>\r\nIndio 2012<br>\r\nAso ni San Roque 2012<br>\r\nMy Kontrabida Girl  2012<br>\r\nMy Beloved 2011<br>\r\nMachete 2011<br>\r\nAlakdana  2010<br>\r\nGrazilda  2010<br>\r\nThe 36th Metro Manila Film Festival: Gabi ng Parangal (TV Performer2010)<br><br>\r\n\r\n\r\n\r\n\r\nFeature films<br><br>\r\nAng huling henya  2013<br>\r\nSi Agimat si Enteng Kabisote at si ako  2012<br>\r\nBoy Pick-Up: The Movie  2012/I<br>\r\nThe Witness  2012<br>\r\nEnteng ng Ina mo \r\nFaye Kabisote 2011<br>\r\nSi Agimat at si Enteng Kabisote \r\nFaye 2010<br>\r\n', 'GwenZamoraThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(38, 'Jackie Rice', 'Jackie', 'Rice', 'Neil Estel', 25, 'female', '5 ft 5 in', '', 'GMA Artists Center', 'neilestel2010@gmail.com', '', '<br>TELEVISION WORKS<br><br>\r\n\r\n\r\n\r\nWagas  2013<br>\r\nMagpakailanman 2013<br>\r\nBukod Kang Pinagpala  2012<br>\r\nKasalanan Bang Ibigin Ka? 2011<br>\r\nSisid 2011 <br>\r\nIlumina Krisanta Sebastian 2010<br>\r\nPanday Kids  2009-2010<br>\r\nDarna 2009<br>\r\nKung aagawin mo ang lahat sa akin  2009<br>\r\nAng babaeng hinugot sa aking tadyang 2008<br>\r\nDyesebel 2008 <br>\r\nMga kuwento ni Lola Basyang 2007<br>\r\nFantastic Man 2007<br>\r\nPrincess-Charming 2006<br>\r\nFantastikids  2006<br>\r\nBubble Gang  2006 <br>\r\nEncantadia: Pag-ibig hanggang wakas 2006<br><br>\r\n\r\n\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n\r\nBoy Pick-Up: The Movie  2012<br>\r\nAng darling kong aswang  2009<br>\r\nHellphone 2008<br>\r\nTatlong Baraha 2006<br>\r\nTill I Met You  2006<br>\r\n', 'JackieRiceThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(39, 'Sam Milby', 'Sam', 'Milby', '(Agent) Neil Estel', 28, 'male', '5 ft 10 in', '', 'Corner Stone', 'neilestel2010@gmail.com', '', '<br>\r\nTELEVISION WORKS<br><br>\r\nWansapanataym 2013<br>\r\nHuwag ka lang mawawala 2013<br>\r\nToda Max 2013 <br>\r\nKahit konting pagtingin 2013<br>\r\nMaalaala mo kaya 2007-2012 <br>\r\n100 Days to Heaven 2011<br>\r\nMara Clara  2011<br>\r\nKim 2010<br>\r\nIdol 2010<br>\r\nImpostor 2010<br>\r\nMay bukas pa 2009-2010<br>\r\nAng tanging pamilya 2009<br>\r\nOnly You (TV Series) 2009<br>\r\nDyosa 2008 <br>\r\nMaging sino ka man: Ang pagbabalik 2007<br> \r\nYour Song 2007<br>\r\nMaging sino ka man 2006<br>\r\nStar Magic Presents 2006<br>\r\nKomiks 2006<br><br>\r\n\r\n\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n\r\n\r\nKimmyDory the prequel  2013<br>\r\nFour Sisters and a Wedding  2013<br>\r\nDeath March 2013<br>\r\n24/7 in Love 2012 <br>\r\nThis Guy\'s in Love with U Mare! 2012<br>\r\nForever and a Day 2011 <br>\r\nThird World Happy 2010 <br>\r\nThe Making of \'iDOL\' 2010<br>\r\nBabe, I Love You 2010<br>\r\nLove Me, Love You 2009 <br>\r\nSomeone to Love 2009<br>\r\nAnd I Love You So 2009<br>\r\nCul de sac 2008 <br>\r\nMy Only Ü 2008<br>\r\nMy Big Love 2008<br>\r\nLove Spell 2007 <br>\r\nYou Got Me! 2007 <br>\r\nYou Are the One 2006 <br>\r\nClose to You 2006<br>\r\n', 'SamMilbyThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(40, 'Rodjun Cruz', 'Rodjun', 'Cruz', '(Agent) Neil Estel', 24, 'male', '5 ft 9 in', '', 'Cruz Management', 'neilestel2010@gmail.com', '', '<br>TELEVISION WORKS<br><br>\r\n\r\nWagas 2013-2014<br>\r\nMagpakailanman 2013<br>\r\nMy Husband\'s Lover 2013 <br>\r\nMaalaala mo kaya 2006-2012<br>\r\nRegal Shocker 2011-2012 <br>\r\nThe Jose & Wally Show Starring Vic Sotto 2011<br>\r\nSa ngalan ng ina 2011<br>\r\nBangis 2010-2011<br>\r\nJuanita Banana 2010 <br>\r\nMagkaribal 2009-2010<br>\r\nMay bukas pa 2008<br>\r\nTayong dalawa 2008 <br>\r\nLipgloss 2007  <br>\r\nKomiks 2007<br>\r\nHappy Hearts 2006<br>\r\nCalla Lily 2006<br><br>\r\n\r\nFEATURE FILMS<br><br>\r\nRaketeros 2013 <br>\r\nTuhog 2013<br>\r\nI Luv U, Pare ko 2013<br>\r\nSeduction 2013 <br><br>\r\n', 'RodjunCruzThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(41, 'Charee Pineda', 'Charee', 'Pineda', '(Agent) Neil Estel', 25, 'female', '5 ft 5 in', '', 'Manny Ballester', 'wendecat.social@gmail.com', '', '<br>TELEVISION WORKS<br><br>\r\n\r\nMagpakailanman 2014<br>\r\nWagas 2013<br>\r\nGenesis 2013<br>\r\nAkin pa rin ang bukas  2009-2013<br>\r\nMaalaala mo kaya  2013<br>\r\nAngelito: Batang ama  2012<br>\r\nPinoy Big Brother Teen Edition 2011<br>\r\nMula sa puso 2011<br>\r\nWansapanataym  2011<br>\r\nAlyna  2011<br>\r\nKatorse 2009<br>\r\nLove Spell  2007<br>\r\nImpostora 2007-2006<br>\r\nLet\'s Go 2004<br>\r\nIkaw sa puso ko 2004<br>\r\n\r\n\r\n<br>\r\n\r\n\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n\r\nStarting Over Again 2014 <br>\r\nBingoleras 2013<br>\r\nNever Say Goodbye  2011-2012<br>\r\nCatch Me... I\'m in Love 2010-2011<br>\r\nBianong Bulag 2010<br>\r\nMidnight Phantom  2010<br>\r\nKroko (Takas sa Zoo) 2009<br>\r\nIliw  2009<br>\r\nParekoy  2008<br>\r\nAlon  2008<br>\r\nSisa  2007<br>\r\nGreen Paradise  2007<br>\r\nA Love Story  2007<br><br>\r\n\r\n', 'ChareePinedaThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(42, 'Derrick Monasterio', 'Derrick', 'Monasterio', '(Agent) Neil Estel', 17, 'male', '5 ft 10 in', '', 'Manny Ballester', 'neilestel2010@gmail.com', '', '<br><br>TELEVISION <br><br>\r\nWagas 2014 <br>\r\nGenesis 2013<br>\r\nAnna KareNina 2013<br>\r\nVampire ang daddy ko 2012<br>\r\nMagpakailanman 2012<br>\r\nParoa: Ang kwento ni mariposa 2012<br>\r\nAlice Bungisngis and her Wonder Walis 2011<br>\r\nMy Househusband: Ikaw na!  2011/III<br>\r\nTween Academy: Class of 2012 <br>\r\nDwarfina 2010<br>\r\nTween Hearts 2011<br>\r\nSinner or Saint 2013<br>\r\nThe Ryzza Mae Show 2013<br>\r\nSunday All Stars 2014<br><br>\r\n\r\n\r\n\r\n\r\nFEATURE FILMS<br><br>\r\n\r\nSi Agimat si Enteng Kabisote at si ako  2012<br>\r\nThe Road  2011<br>\r\nMaximo<br>\r\nSinner or Saint Santi 2011<br>\r\n', 'DerrickMonasterioThumb.jpg', 1, '2018-02-25 21:10:45', '2018-02-25 21:10:55'),
	(46, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '8f6b1657d86722340343dfebdc8b1860.jpeg', 1, '2018-03-25 12:35:49', '2018-03-25 14:09:06');
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;


-- Dumping structure for table filcastpro.actor_skill
DROP TABLE IF EXISTS `actor_skill`;
CREATE TABLE IF NOT EXISTS `actor_skill` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actor_id` int(11) NOT NULL DEFAULT '0',
  `skill_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.actor_skill: ~0 rows (approximately)
DELETE FROM `actor_skill`;
/*!40000 ALTER TABLE `actor_skill` DISABLE KEYS */;
/*!40000 ALTER TABLE `actor_skill` ENABLE KEYS */;


-- Dumping structure for table filcastpro.contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.contacts: ~0 rows (approximately)
DELETE FROM `contacts`;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;


-- Dumping structure for table filcastpro.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actor_id` int(10) NOT NULL DEFAULT '0',
  `file_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=259 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.images: ~222 rows (approximately)
DELETE FROM `images`;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` (`id`, `actor_id`, `file_name`, `created_at`, `updated_at`) VALUES
	(1, 1, 'ChanelLatorre2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(2, 1, 'ChanelLatorre3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(3, 1, 'ChanelLatorre4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(4, 1, 'ChanelLatorre1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(5, 2, 'JohnCando1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(6, 2, 'JohnCando2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(7, 2, 'JohnCando3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(8, 2, 'JohnCando4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(9, 2, 'JohnCando1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(10, 3, 'GeraldineTan4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(11, 3, 'GeraldineTan1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(12, 3, 'GeraldineTan2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(13, 3, 'GeraldineTan3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(14, 3, 'GeraldineTan4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(15, 4, 'AzrahGaffoor1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(16, 4, 'AzrahGaffoor5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(17, 4, 'AzrahGaffoor2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(18, 4, 'AzrahGaffoor3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(19, 4, 'AzrahGaffoor4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(20, 5, 'JanEspiritu1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(21, 5, 'JanEspiritu3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(22, 5, 'JanEspiritu4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(23, 5, 'JanEspiritu1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(24, 5, 'JanEspiritu6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(25, 6, 'MarissaDelgado3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(26, 6, 'MarissaDelgado2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(27, 6, 'Marissa08.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(28, 6, 'MarissaDelgado4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(29, 6, 'MarissaDelgado5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(30, 7, 'TrishaOliva1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(31, 7, 'TrishaOliva2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(32, 7, 'TrishaOliva3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(33, 7, 'TrishaOliva4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(34, 7, 'TrishaOliva5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(35, 8, 'AshwinGaffoor1b.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(36, 8, 'AshwinGaffoor1b.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(37, 8, 'AshwinGaffoor3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(38, 8, 'AshwinGaffor4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(39, 8, 'AshwinGaffoor5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(40, 9, 'RaakinGaffoor1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(41, 9, 'RaakinGaffoor2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(42, 9, 'RaakinGaffoor3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(43, 9, 'RaakinGaffoor4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(44, 9, 'RaakinGaffoor5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(45, 10, 'RomanoVasquez2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(46, 10, 'RomanoVasquez3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(47, 10, 'RomanoVasquez4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(48, 10, 'RomanoVasquez5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(49, 10, 'RomanoVasquez1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(50, 11, 'LJReyes1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(51, 11, 'LJReyes3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(52, 11, 'LJReyes4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(53, 11, 'LJReyes5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(54, 11, 'LJReyes6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(55, 12, 'JaoMapa1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(56, 12, 'JaoMapa3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(57, 12, 'JaoMapa4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(58, 12, 'JaoMapa5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(59, 12, 'JaoMapa6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(60, 13, 'ChristopherRoxas1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(61, 13, 'ChristopherRoxas3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(62, 13, 'ChristopherRoxas4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(63, 13, 'ChristopherRoxas5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(64, 13, 'ChristopherRoxas6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(65, 14, 'MariaIsabelLopez11.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(66, 14, 'MariaIsabelLopez12.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(67, 14, 'MariaIsabelLopez13.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(68, 14, 'MariaIsabelLopez14.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(69, 14, 'MariaIsabelLopez15.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(70, 15, 'MaraLopez1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(71, 15, 'MaraLopez2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(72, 15, 'MaraLopez3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(73, 15, 'MaraLopez4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(74, 15, 'MaraLopez7.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(75, 16, 'AlvinAnson1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(76, 16, 'AlvinAnson7.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(77, 16, 'AlvinAnson4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(78, 16, 'AlvinAnson5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(79, 16, 'AlvinAnson6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(80, 17, 'RobSy1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(81, 17, 'RobSy2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(82, 17, 'RobSy3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(83, 17, 'RobSy4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(84, 17, 'RobSy5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(85, 18, 'EJFalcon1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(86, 18, 'EJFalcon3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(87, 18, 'EJFalcon4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(88, 18, 'EJFalcon5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(89, 18, 'EJFalcon6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(90, 19, 'EmilioGarcia1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(91, 19, 'EmilioGarcia3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(92, 19, 'EmilioGarcia4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(93, 19, 'EmilioGarcia5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(94, 19, 'EmilioGarcia6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(95, 20, 'BillyCrawford1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(96, 20, 'BillyCrawford3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(97, 20, 'BillyCrawford4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(98, 20, 'BillyCrawford5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(99, 20, 'BillyCrawford6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(105, 22, 'AldenRichard1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(106, 22, 'AldenRichard3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(107, 22, 'AldenRichard4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(108, 22, 'AldenRichard5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(109, 22, 'AldenRichard6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(110, 23, 'AlessandraDeRossi1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(111, 23, 'AlessandraDeRossi3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(112, 23, 'AlessandraDeRossi4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(113, 23, 'AlessandraDeRossi5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(114, 23, 'AlessandraDeRossi6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(115, 24, 'BangsGarcia1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(116, 24, 'BangsGarcia3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(117, 24, 'BangsGarcia4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(118, 24, 'BangsGarcia5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(119, 24, 'BangsGarcia6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(120, 25, 'TomRodriguez1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(121, 25, 'TomRodriguez3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(122, 25, 'TomRodriguez4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(123, 25, 'TomRodriguez5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(124, 25, 'TomRodriguez6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(125, 26, 'AyaMedel1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(126, 26, 'AyaMedel3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(127, 26, 'AyaMedel4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(128, 26, 'AyaMedel5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(129, 26, 'AyaMedel6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(130, 27, 'BoyIIQuizon1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(131, 27, 'BoyIIQuizon3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(132, 27, 'BoyIIQuizon4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(133, 27, 'BoyIIQuizon5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(134, 27, 'BoyIIQuizon6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(135, 28, 'CarlaAbellana1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(136, 28, 'CarlaAbellana3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(137, 28, 'CarlaAbellana4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(138, 28, 'CarlaAbellana5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(139, 28, 'CarlaAbellana6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(140, 29, 'Rein1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(141, 29, 'Rein3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(142, 29, 'Rein4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(143, 29, 'Rein5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(144, 29, 'Rein6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(145, 30, 'DennisTrillo1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(146, 30, 'DennisTrillo3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(147, 30, 'DennisTrillo4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(148, 30, 'DennisTrillo5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(149, 30, 'DennisTrillo6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(150, 31, 'GlaizaDeCastro1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(151, 31, 'GlaizaDeCastro3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(152, 31, 'GlaizaDeCastro4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(153, 31, 'GlaizaDeCastro5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(154, 31, 'GlaizaDeCastro6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(155, 32, 'DionIgnacio1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(156, 32, 'DionIgnacio1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(157, 32, 'DionIgnacio3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(158, 32, 'DionIgnacio4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(159, 32, 'DionIgnacio5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(160, 33, 'MajaSalvador1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(161, 33, 'MajaSalvador3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(162, 33, 'MajaSalvador4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(163, 33, 'MajaSalvador5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(164, 33, 'MajaSalvador6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(165, 34, 'LoviPoe1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(166, 34, 'LoviPoe1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(167, 34, 'LoviPoe2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(168, 34, 'LoviPoe4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(169, 34, 'LoviPoe5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(170, 35, 'CarlosMorales1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(171, 35, 'CarlosMorales3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(172, 35, 'CarlosMorales4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(173, 35, 'CarlosMorales5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(174, 35, 'CarlosMorales6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(175, 36, 'ColeenGarcia1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(176, 36, 'ColeenGarcia3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(177, 36, 'ColeenGarcia4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(178, 36, 'ColeenGarcia5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(179, 36, 'ColeenGarcia6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(180, 37, 'GwenZamora1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(181, 37, 'GwenZamora3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(182, 37, 'GwenZamora4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(183, 37, 'GwenZamora5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(184, 37, 'GwenZamora6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(185, 38, 'JackieRice1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(186, 38, 'JackieRice3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(187, 38, 'JackieRice4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(188, 38, 'JackieRice5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(189, 38, 'JackieRice6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(190, 39, 'SamMilbyA.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(191, 39, 'SamMilby6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(192, 39, 'SamMilby1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(193, 39, 'SamMilby3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(194, 39, 'SamMilby4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(195, 40, 'RodjunCruz1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(196, 40, 'RodjunCruz6.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(197, 40, 'RodjunCruz3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(198, 40, 'RodjunCruz4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(199, 40, 'RodjunCruz5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(200, 41, 'ChareePineda1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(201, 41, 'ChareePineda2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(202, 41, 'ChareePineda3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(203, 41, 'ChareePineda4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(204, 41, 'ChareePineda5.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(205, 42, 'DA1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(206, 42, 'DerrickMonasterio1.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(207, 42, 'DerrickMonasterio2.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(208, 42, 'DerrickMonasterio3.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(209, 42, 'DerrickMonasterio4.jpg', '2018-03-22 00:00:00', '2018-03-22 00:00:00'),
	(225, 21, 'f36349dbfe7b8326d1b11217c96915d2.jpeg', '2018-03-25 12:17:40', '2018-03-25 12:17:40'),
	(226, 21, 'f8ced15a9e4cfb50a1f6e8628a170370.jpeg', '2018-03-25 12:17:40', '2018-03-25 12:17:40'),
	(227, 21, '10729bad29f0a10c47b53ccbc8673327.jpeg', '2018-03-25 12:17:40', '2018-03-25 12:17:40'),
	(228, 21, 'a7a40f6408bb4a2a65ef0dbabe3295a9.jpeg', '2018-03-25 12:17:40', '2018-03-25 12:17:40'),
	(229, 21, '90b674f5fbca68458f345f03dbc3b2e0.jpeg', '2018-03-25 12:17:40', '2018-03-25 12:17:40'),
	(230, 44, 'f36349dbfe7b8326d1b11217c96915d2.jpeg', '2018-03-25 12:21:03', '2018-03-25 12:21:03'),
	(231, 44, 'f8ced15a9e4cfb50a1f6e8628a170370.jpeg', '2018-03-25 12:21:03', '2018-03-25 12:21:03'),
	(232, 44, '10729bad29f0a10c47b53ccbc8673327.jpeg', '2018-03-25 12:21:03', '2018-03-25 12:21:03'),
	(233, 44, 'a7a40f6408bb4a2a65ef0dbabe3295a9.jpeg', '2018-03-25 12:21:03', '2018-03-25 12:21:03'),
	(234, 44, '90b674f5fbca68458f345f03dbc3b2e0.jpeg', '2018-03-25 12:21:03', '2018-03-25 12:21:03'),
	(235, 45, 'f36349dbfe7b8326d1b11217c96915d2.jpeg', '2018-03-25 12:25:03', '2018-03-25 12:25:03'),
	(236, 45, 'f8ced15a9e4cfb50a1f6e8628a170370.jpeg', '2018-03-25 12:25:03', '2018-03-25 12:25:03'),
	(237, 45, '10729bad29f0a10c47b53ccbc8673327.jpeg', '2018-03-25 12:25:03', '2018-03-25 12:25:03'),
	(238, 45, 'a7a40f6408bb4a2a65ef0dbabe3295a9.jpeg', '2018-03-25 12:25:03', '2018-03-25 12:25:03'),
	(239, 45, '90b674f5fbca68458f345f03dbc3b2e0.jpeg', '2018-03-25 12:25:03', '2018-03-25 12:25:03'),
	(254, 46, 'f36349dbfe7b8326d1b11217c96915d2.jpeg', '2018-03-25 14:08:21', '2018-03-25 14:08:21'),
	(255, 46, 'f8ced15a9e4cfb50a1f6e8628a170370.jpeg', '2018-03-25 14:08:21', '2018-03-25 14:08:21'),
	(256, 46, '10729bad29f0a10c47b53ccbc8673327.jpeg', '2018-03-25 14:09:07', '2018-03-25 14:09:07'),
	(257, 46, 'a7a40f6408bb4a2a65ef0dbabe3295a9.jpeg', '2018-03-25 14:09:07', '2018-03-25 14:09:07'),
	(258, 46, '90b674f5fbca68458f345f03dbc3b2e0.jpeg', '2018-03-25 14:09:07', '2018-03-25 14:09:07');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;


-- Dumping structure for table filcastpro.inquiries
DROP TABLE IF EXISTS `inquiries`;
CREATE TABLE IF NOT EXISTS `inquiries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actor_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.inquiries: ~20 rows (approximately)
DELETE FROM `inquiries`;
/*!40000 ALTER TABLE `inquiries` DISABLE KEYS */;
INSERT INTO `inquiries` (`id`, `actor_id`, `name`, `email`, `contact`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:35:36', '2018-03-31 11:35:36'),
	(2, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:35:43', '2018-03-31 11:35:43'),
	(3, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:36:31', '2018-03-31 11:36:31'),
	(4, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:37:20', '2018-03-31 11:37:20'),
	(5, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:38:19', '2018-03-31 11:38:19'),
	(6, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:39:56', '2018-03-31 11:39:56'),
	(7, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:41:01', '2018-03-31 11:41:01'),
	(8, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:45:17', '2018-03-31 11:45:17'),
	(9, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:47:06', '2018-03-31 11:47:06'),
	(10, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:48:01', '2018-03-31 11:48:01'),
	(11, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:48:33', '2018-03-31 11:48:33'),
	(12, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:49:16', '2018-03-31 11:49:16'),
	(13, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:50:16', '2018-03-31 11:50:16'),
	(14, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:51:27', '2018-03-31 11:51:27'),
	(15, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:52:04', '2018-03-31 11:52:04'),
	(16, 1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:53:27', '2018-03-31 11:53:27'),
	(17, 41, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 11:54:46', '2018-03-31 11:54:46'),
	(18, 22, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-03-31 13:48:03', '2018-03-31 13:48:03'),
	(19, 22, 'Mark Herras', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-04-02 08:16:25', '2018-04-02 08:16:25'),
	(20, 22, 'Mark Herras', 'wendell.t.decatoria@gmail.com', '+639175828964', '2018-04-02 08:17:48', '2018-04-02 08:17:48');
/*!40000 ALTER TABLE `inquiries` ENABLE KEYS */;


-- Dumping structure for table filcastpro.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.migrations: ~16 rows (approximately)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(28, '2017_08_13_134855_create_roles_table', 1),
	(29, '2017_08_13_142016_create_users_roles_table', 1),
	(30, '2018_02_20_234602_create_users_table', 1),
	(31, '2018_02_25_021024_create_contacts_table', 1),
	(32, '2018_02_25_105951_create_actors_table', 1),
	(33, '2018_03_05_135321_create_registers_table', 1),
	(36, '2018_03_19_133737_create_images_table', 1),
	(37, '2018_03_22_152756_create_skills_table', 1),
	(38, '2018_03_22_153947_create_actor_skill_table', 1),
	(44, '2018_03_05_144502_create_videos_table', 2),
	(45, '2018_03_13_025320_create_whats_up_table', 2),
	(46, '2018_03_25_151013_create_writers_table', 2),
	(49, '2018_03_27_140020_create_inquiries_table', 3),
	(50, '2018_03_30_005912_add_group_to_skills_table', 4),
	(51, '2018_03_31_160027_setup_skills_table', 5),
	(53, '2018_04_01_091729_alter_table_whats_up', 6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table filcastpro.registers
DROP TABLE IF EXISTS `registers`;
CREATE TABLE IF NOT EXISTS `registers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.registers: ~0 rows (approximately)
DELETE FROM `registers`;
/*!40000 ALTER TABLE `registers` DISABLE KEYS */;
/*!40000 ALTER TABLE `registers` ENABLE KEYS */;


-- Dumping structure for table filcastpro.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.roles: ~0 rows (approximately)
DELETE FROM `roles`;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;


-- Dumping structure for table filcastpro.role_user
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.role_user: ~0 rows (approximately)
DELETE FROM `role_user`;
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;


-- Dumping structure for table filcastpro.skills
DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.skills: ~5 rows (approximately)
DELETE FROM `skills`;
/*!40000 ALTER TABLE `skills` DISABLE KEYS */;
INSERT INTO `skills` (`id`, `name`, `created_at`, `updated_at`, `group`) VALUES
	(1, 'Singer', '2018-03-30 08:56:08', '2018-03-30 08:56:08', 'actor'),
	(2, 'Actor', '2018-03-30 08:56:32', '2018-03-30 08:56:32', 'actor'),
	(3, 'Band', '2018-03-30 08:57:00', '2018-03-30 08:57:15', 'actor'),
	(4, 'Dancer', '2018-03-30 08:57:31', '2018-03-30 08:57:28', 'actor'),
	(5, 'Group Dancer', '2018-03-30 08:57:56', '2018-03-30 08:57:56', 'actor');
/*!40000 ALTER TABLE `skills` ENABLE KEYS */;


-- Dumping structure for table filcastpro.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.users: ~2 rows (approximately)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Wendell Decatoria', 'wendell.t.decatoria@gmail.com', '$2y$10$zUZVH0FvG3ezcooHeFQ4QO8E3.bjs4RAAl6pGjCXEbh63qGbQTeDe', 'Tzg0xaN67CL5rc4ekABuSZl22hNQCsEppwHyIJnJ7NOlNWStq0Qu4zIUibs4', '2018-03-19 18:38:52', '2018-03-19 18:38:54'),
	(2, 'Jowee Morel', 'joweemorel@live.com', '$2y$10$J9VEw7zkz0YU.F9BEAnml.LS.ImkzEtAbNrTssDiKcxwn3OeUF3i.', 'Nvid1ARy9ycsvRQuN93B1KsRgmu4JPFc3ibgD9QjoQycTZzhMof1hACyVd9u', '2018-03-22 00:54:36', '2018-03-22 00:54:37');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;


-- Dumping structure for table filcastpro.videos
DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.videos: ~0 rows (approximately)
DELETE FROM `videos`;
/*!40000 ALTER TABLE `videos` DISABLE KEYS */;
/*!40000 ALTER TABLE `videos` ENABLE KEYS */;


-- Dumping structure for table filcastpro.whats_up
DROP TABLE IF EXISTS `whats_up`;
CREATE TABLE IF NOT EXISTS `whats_up` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `writer_id` int(11) NOT NULL DEFAULT '0',
  `headline` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `writer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.whats_up: ~4 rows (approximately)
DELETE FROM `whats_up`;
/*!40000 ALTER TABLE `whats_up` DISABLE KEYS */;
INSERT INTO `whats_up` (`id`, `writer_id`, `headline`, `content`, `status`, `created_at`, `updated_at`, `writer`, `title`, `image`, `type`) VALUES
	(1, 1, 'Test Headline GVK', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2018-03-31 11:57:44', '2018-03-31 11:57:44', 'Lorem Ipsum 2', 'Lorem Title', '8ecd5ad7237bbbaa8bf8872c60b258e6.jpeg', 1),
	(2, 2, 'Bea Rose', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 1, '2018-04-01 12:53:14', '2018-04-01 12:53:14', 'Robert Kiyosaki', 'Featured Artist', '8ecd5ad7237bbbaa8bf8872c60b258e6.jpeg', 2),
	(3, 3, 'Test Headline DV updated', '<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>', 2, '2018-04-01 10:26:55', '2018-04-01 10:26:55', 'Lorem Ipsum 2', 'Lorem Title', '8ecd5ad7237bbbaa8bf8872c60b258e6.jpeg', 1),
	(4, 0, 'Di ko kayang Tanggapin', '<p>Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet Lorem Ipsum Dolor Sit Amet&nbsp;</p>', 1, '2018-04-01 11:24:18', '2018-04-01 11:24:18', 'April Boy Regino', 'Na mawawala ka na sa akin', '8ecd5ad7237bbbaa8bf8872c60b258e6.jpeg', 1);
/*!40000 ALTER TABLE `whats_up` ENABLE KEYS */;


-- Dumping structure for table filcastpro.writers
DROP TABLE IF EXISTS `writers`;
CREATE TABLE IF NOT EXISTS `writers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table filcastpro.writers: ~2 rows (approximately)
DELETE FROM `writers`;
/*!40000 ALTER TABLE `writers` DISABLE KEYS */;
INSERT INTO `writers` (`id`, `name`, `title`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'George Vail Kabristante', 'Casting Coup', 'GeorgeVailKabristante.jpg', '2018-03-27 21:27:15', '2018-03-27 21:27:16'),
	(2, 'Boy Villasanta', 'Filpro', 'BoyVillasanta.jpg', '2018-03-27 21:27:54', '2018-03-27 21:27:55'),
	(3, 'Danny Vibas', 'Art Entertainment Plus', 'DannyVibas.jpg', '2018-03-27 21:29:50', '2018-03-27 21:29:51');
/*!40000 ALTER TABLE `writers` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
