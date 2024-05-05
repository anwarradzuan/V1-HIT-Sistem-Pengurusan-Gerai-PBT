/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 10.4.24-MariaDB : Database - spg(1)
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`spg(1)` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `spg(1)`;

/*Table structure for table `application_status` */

DROP TABLE IF EXISTS `application_status`;

CREATE TABLE `application_status` (
  `as_id` int(11) NOT NULL AUTO_INCREMENT,
  `as_application` int(11) NOT NULL,
  `as_status` int(11) NOT NULL,
  `as_user` int(11) NOT NULL,
  `as_date` date NOT NULL,
  `as_time` int(15) NOT NULL,
  `as_description` text NOT NULL,
  PRIMARY KEY (`as_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `application_status` */

insert  into `application_status`(`as_id`,`as_application`,`as_status`,`as_user`,`as_date`,`as_time`,`as_description`) values 
(1,15,1,0,'2022-03-28',0,'masih disemak'),
(2,0,0,0,'0000-00-00',0,'');

/*Table structure for table `applications` */

DROP TABLE IF EXISTS `applications`;

CREATE TABLE `applications` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_type` varchar(100) NOT NULL,
  `a_user` int(11) NOT NULL,
  `a_date` date NOT NULL,
  `a_time` int(15) NOT NULL,
  `a_status` int(11) NOT NULL,
  `a_for` int(11) NOT NULL,
  `a_key` varchar(255) NOT NULL,
  `a_shop` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_ic` varchar(15) NOT NULL,
  `a_alamat` varchar(255) NOT NULL,
  `a_phone` varchar(255) NOT NULL,
  `a_gambar` varchar(255) NOT NULL,
  `a_ssm` text NOT NULL,
  `a_mp` text NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `applications` */

insert  into `applications`(`a_id`,`a_type`,`a_user`,`a_date`,`a_time`,`a_status`,`a_for`,`a_key`,`a_shop`,`a_name`,`a_email`,`a_ic`,`a_alamat`,`a_phone`,`a_gambar`,`a_ssm`,`a_mp`) values 
(15,'',0,'0000-00-00',1654443839,0,0,'6241d63f3790a',5,'qwewgew','deathreaper754@gmail.com','qweasd','Jalan Ayu 27','444453','','',''),
(17,'',0,'0000-00-00',1654438577,0,0,'6242da9c73013',5,'ok nice dah tukar','test@test','11111111','rererere','121212121','','','');

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) NOT NULL,
  `d_code` int(11) NOT NULL,
  `d_status` int(11) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `departments` */

insert  into `departments`(`d_id`,`d_name`,`d_code`,`d_status`) values 
(1,'Perlesenan',0,1),
(2,'Ahli Majlis',0,1),
(3,'Orang Awam',0,1);

/*Table structure for table `menus` */

DROP TABLE IF EXISTS `menus`;

CREATE TABLE `menus` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `m_main` int(11) NOT NULL,
  `m_sort` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_url` varchar(255) NOT NULL,
  `m_route` varchar(255) NOT NULL,
  `m_status` int(11) NOT NULL,
  `m_description` varchar(255) NOT NULL,
  `m_short` varchar(3) NOT NULL,
  `m_icon` varchar(255) NOT NULL,
  `m_role` varchar(100) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `menus` */

insert  into `menus`(`m_id`,`m_main`,`m_sort`,`m_name`,`m_url`,`m_route`,`m_status`,`m_description`,`m_short`,`m_icon`,`m_role`) values 
(1,0,1,'Dashboards','dashboards','dashboards',1,'Paparan data mengikut peta kawasan','','typcn typcn-chart-bar','0,1,2'),
(2,1,1,'Geografik','dashboard-geo','dashboard-geo',1,'','GEO','','0,1,2'),
(3,1,2,'Statistik','dashboard-statistik','dashboard-statistik',1,'','STK','','0,1,2'),
(4,1,3,'Laporan','dashboard-laporan','dashboard-laporan',1,'','LPN','','0,1,2'),
(5,0,2,'Data Gerai','gerai','gerai',1,'Pengurusan Data Gerai','','typcn typcn-business-card','0,1,2'),
(6,0,4,'Sewaan','sewaan','sewaan',1,'Maklumat Sewaan Gerai Bulanan','','typcn typcn-th-small-outline','0,1,2'),
(7,13,3,'Gerai','gerai','gerai',1,'Senarai Maklumat Pemohon & Permohonan','','typcn typcn-th-large','0,1,2'),
(8,0,5,'Pengguna','pengguna','pengguna',1,'Senarai Pengguna Dalamn & Luaran','','typcn typcn-user-outline','0,1,2'),
(9,0,100,'Settings','settings','settings',1,'All System Settings','','typcn typcn-cog-outline','0,1,2'),
(10,9,1,'Menus','menus','menus',1,'Manage System Menus','MNU','','0,1,2'),
(11,5,2,'Gerai','gerai','gerai',1,'Pengurusan Data Gerai','GRI','','0,1,2'),
(12,5,2,'Kawasan','kawasan-perniagaan','kawasan-perniagaan',1,'Pengurusan Data Gerai','GRI','','0,1,2'),
(13,0,3,'Permohonan','permohonan','permohonan',1,'Bahagian Permohonan','PER','typcn typcn-th-large','0,1,2'),
(14,13,3,'Pembhaharuan','pembaharuan','pembaharuan',1,'Pembaharuan Kontrak Sewa Gerai','','typcn typcn-th-large','0,1,2'),
(15,13,3,'Wang Cagaran','cagaran','cagaran',1,'Permohoanan Wang Cagaran','','typcn typcn-th-large','0,1,2'),
(16,13,3,'Pindah Milik','pindah-milik','pindah-milik',1,'Permohonan Pindah Milik','','typcn typcn-th-large','0,1,2'),
(17,9,1,'Rol Pengguna','rols','rols',1,'Senarai Rol Pengguna','ROL','typcn typcn-th-large','0,1,2');

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(100) NOT NULL,
  `r_menu` varchar(100) NOT NULL,
  `r_status` int(11) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`r_id`,`r_name`,`r_menu`,`r_status`) values 
(1,'Ketua Jabatan','',1),
(2,'Staff','',1),
(3,'Ahli Majlis','',1),
(4,'Orang Awam','',1);

/*Table structure for table `shop_group` */

DROP TABLE IF EXISTS `shop_group`;

CREATE TABLE `shop_group` (
  `sg_id` int(11) NOT NULL AUTO_INCREMENT,
  `sg_name` varchar(255) NOT NULL,
  `sg_description` text NOT NULL,
  `sg_main` int(11) NOT NULL,
  `sg_lat` varchar(50) NOT NULL,
  `sg_lng` varchar(50) NOT NULL,
  `sg_status` int(11) NOT NULL,
  `sg_note` text NOT NULL,
  `sg_key` varchar(100) NOT NULL,
  `sg_address` text NOT NULL,
  `sg_picture` varchar(255) NOT NULL,
  PRIMARY KEY (`sg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;

/*Data for the table `shop_group` */

insert  into `shop_group`(`sg_id`,`sg_name`,`sg_description`,`sg_main`,`sg_lat`,`sg_lng`,`sg_status`,`sg_note`,`sg_key`,`sg_address`,`sg_picture`) values 
(32,'asdasd','',0,'5.372112598856274','100.58350023833478',1,'','SG_61e2f4455d3a8','asdasdasd','abcd.jpg'),
(33,'aasdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f4617315f','asdasdasd',''),
(34,'asdasdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f4f759c73','asdasdasd',''),
(35,'asdasdada','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f50d2eb85','dasdasdasd',''),
(36,'asdasd','',0,'5.381683336944906','100.2442973574754',1,'','SG_61e2f51b2bb9d','asdadasd',''),
(37,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f533b5f68','adadasdads',''),
(38,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f55120a0d','aasdasdad',''),
(39,'adasda','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f56c4d2ff','asdasdsad',''),
(40,'asdasda','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f618b0453','dasda',''),
(41,'asdada','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f7b00bed5','dasdasdasd',''),
(42,'asdasdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f80d231b9','asdasdasd',''),
(43,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f821e1a11','asdadasdasd',''),
(44,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f8392ecbc','asdadsasadsasd',''),
(45,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f8435c2ef','asdadsasadsasd',''),
(46,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f8451ebdd','asdadsasadsasd',''),
(47,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f8464a42c','asdadsasadsasd',''),
(48,'asdasd','',1,'5.366643538146448','100.410465570366',1,'','SG_61e2f8472e43e','asdadsasadsasd','');

/*Table structure for table `shop_user` */

DROP TABLE IF EXISTS `shop_user`;

CREATE TABLE `shop_user` (
  `su_id` int(11) NOT NULL AUTO_INCREMENT,
  `su_shop` int(11) NOT NULL,
  `su_user` int(11) NOT NULL,
  `su_date` date NOT NULL,
  `su_time` int(15) NOT NULL,
  `su_status` varchar(25) NOT NULL,
  PRIMARY KEY (`su_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `shop_user` */

/*Table structure for table `shops` */

DROP TABLE IF EXISTS `shops`;

CREATE TABLE `shops` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_refno` varchar(255) NOT NULL,
  `s_lotno` varchar(255) NOT NULL,
  `s_hsd` varchar(255) NOT NULL,
  `s_fileno` varchar(255) NOT NULL,
  `s_ref1` varchar(255) NOT NULL,
  `s_ref2` varchar(255) NOT NULL,
  `s_level` varchar(100) NOT NULL,
  `s_lot` varchar(100) NOT NULL,
  `s_road` varchar(100) NOT NULL,
  `s_residential` varchar(255) NOT NULL,
  `s_area` varchar(255) NOT NULL,
  `s_state` varchar(255) NOT NULL,
  `s_postcode` int(11) NOT NULL,
  `s_country` varchar(100) NOT NULL,
  `s_date` date NOT NULL,
  `s_time` int(15) NOT NULL,
  `s_status` int(11) NOT NULL,
  `s_longitude` varchar(100) NOT NULL,
  `s_latitude` varchar(100) NOT NULL,
  `s_key` varchar(255) NOT NULL,
  `s_owner` int(11) NOT NULL,
  `s_price` double NOT NULL,
  `s_block` varchar(100) NOT NULL,
  `s_group` int(11) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `shops` */

insert  into `shops`(`s_id`,`s_refno`,`s_lotno`,`s_hsd`,`s_fileno`,`s_ref1`,`s_ref2`,`s_level`,`s_lot`,`s_road`,`s_residential`,`s_area`,`s_state`,`s_postcode`,`s_country`,`s_date`,`s_time`,`s_status`,`s_longitude`,`s_latitude`,`s_key`,`s_owner`,`s_price`,`s_block`,`s_group`) values 
(5,'','','','Fail 1','','','02','04','Jalan Pendidikan 3','Taman Universiti','Skudai','Johor',81300,'','0000-00-00',0,1,'100.410465570366','5.366643538146448','SHOP_61e462d13b63f',0,500,'1',32),
(7,'','','','Fail 2','','','03','03','Jalan Mustafa 3','Taman C++','Ulu Tiram','Johor',81800,'Malaysia','0000-00-00',0,1,'123123.3232','232323.32323','',0,0,'33',45);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_key` varchar(255) NOT NULL,
  `u_full_name` varchar(255) NOT NULL,
  `u_ic` varchar(255) NOT NULL,
  `u_alamat` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `u_admin` int(11) NOT NULL,
  `u_role` int(11) NOT NULL,
  `u_department` int(11) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`u_id`,`u_name`,`u_email`,`u_password`,`u_key`,`u_full_name`,`u_ic`,`u_alamat`,`u_phone`,`u_admin`,`u_role`,`u_department`) values 
(1,'hery','admin@admin','cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3','','','121212121212','','',1,0,1),
(3,'test','staff','cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3','','testtest','11111111','rererere','121212121',0,2,1),
(4,'ketuajabatan','ketua@ketua','cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3','','','','','',0,1,1),
(5,'orangawam','awam@awam','cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3','','','','','',0,4,0),
(6,'ahlimajlis','','cda8206eb90ff0ff143e5ee404d980102b37b7de52774b414bca3cc69d2ef6e3','','','','','',0,3,2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
