-- MySQL dump 10.19  Distrib 10.3.31-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sistem_topsa
-- ------------------------------------------------------
-- Server version	10.3.31-MariaDB-0ubuntu0.20.04.1

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
-- Table structure for table `produk`
--

DROP TABLE IF EXISTS `produk`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produk` (
  `id_produk` varchar(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga` varchar(20) DEFAULT NULL,
  `diskon` varchar(20) DEFAULT NULL,
  `masa_aktif` varchar(15) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `tambahan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_produk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produk`
--

LOCK TABLES `produk` WRITE;
/*!40000 ALTER TABLE `produk` DISABLE KEYS */;
INSERT INTO `produk` VALUES ('1','xl','Kuota 50 GB','50.000','150.000','30 Hari','kuota','promo'),('10','telkomsel','Kuota 10 GB','40.000','','7 Hari','kuota',''),('11','telkomsel','Kuota 15 GB','50.000','','14 Hari','kuota',''),('12','telkomsel','Kuota 25 GB','75.000','','30 Hari','kuota',''),('13','telkomsel','Pulsa 25.000','20.000','','+14 Hari','pulsa',''),('14','telkomsel','Pulsa 50.000','45.000','','+30 Hari','pulsa',''),('15','telkomsel','Pulsa 100.000','95.000','','+60 Hari','pulsa',''),('16','xl','Kuota 10 GB','15.000','','7 Hari','kuota',''),('17','xl','Kuota 20 GB','30.000','','30 Hari','kuota',''),('18','xl','Kuota 50 GB','80.000','','60 Hari','kuota',''),('19','xl','Pulsa 15.000','10.000','',NULL,'pulsa',''),('2','telkomsel','Kuota 80 GB','100.000','250.000','30 Hari','kuota','promo'),('20','xl','Pulsa 40.000','35.000','',NULL,'pulsa',''),('21','xl','Pulsa 75.000','65.000','',NULL,'pulsa',''),('3','smartfren','Kuota 100 GB','150.000','350.000','30 Hari','kuota','promo'),('4','smartfren','Kuota 2 GB','10.000','','3 Hari','kuota',''),('5','smartfren','Kuota 8 GB','40.000','','7 Hari','kuota',''),('6','smartfren','Kuota 15 GB','80.000','','30 Hari','kuota',''),('7','smartfren','Pulsa 10.000','8.000','','+7 Hari','pulsa',''),('8','smartfren','Pulsa 30.000','25.000','','+14 Hari','pulsa',''),('9','smartfren','Pulsa 50.000','40.000','','+30 Hari','pulsa','');
/*!40000 ALTER TABLE `produk` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksi` (
  `id_transaksi` varchar(16) NOT NULL,
  `id_pembeli` varchar(11) DEFAULT NULL,
  `nama_produk` varchar(15) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `no_tujuan` varchar(16) NOT NULL,
  `tanggal_pembelian` varchar(50) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `jenis_pembayaran` varchar(60) DEFAULT NULL,
  `status` varchar(16) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksi`
--

LOCK TABLES `transaksi` WRITE;
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` VALUES ('1638796838','1','xl','Kuota 50 GB','088806705700','Mon, 06 Dec 2021','50.000','Transfer Bank - BCA','Dibatalkan'),('1638796905','1','xl','Kuota 50 GB','088806705700','Mon, 06 Dec 2021','50.000','Transfer Bank - BCA','Diproses'),('1638798291','1','telkomsel','Kuota 80 GB','088806705700','Mon, 06 Dec 2021','100.000','Transfer Bank - BCA','Selesai'),('1638798318','2','xl','Kuota 50 GB','12','Mon, 06 Dec 2021','50.000','Transfer Bank - BCA','Belum Dibayar'),('1638800491','1','smartfren','Pulsa 50.000','088806705700','Mon, 06 Dec 2021','40.000','Transfer Bank - BCA','Belum Dibayar'),('1638804232','1','smartfren','Kuota 100 GB','088806705700','Mon, 06 Dec 2021','150.000','Transfer Bank - BCA','Belum Dibayar');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'ricoyogapradana@gmail.com','Rico','Yoga','088806705700','e10adc3949ba59abbe56e057f20f883e'),(2,'12@12','12','12','12','c20ad4d76fe97759aa27a0c99bff6710'),(3,'alfisal@gmail.com','Alfisal Punjung','Kurniawan','123456','e10adc3949ba59abbe56e057f20f883e');
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

-- Dump completed on 2021-12-06 16:08:54
