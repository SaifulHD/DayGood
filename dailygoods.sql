-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.16-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for dailygoods
CREATE DATABASE IF NOT EXISTS `dailygoods` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `dailygoods`;

-- Dumping structure for table dailygoods.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table dailygoods.barang: ~3 rows (approximately)
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` (`id`, `nama`, `harga`, `stok`, `gambar`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
	(3, 'Sembako Paket #1', 120000, 29, '1609807753_624a111e812fdadb6f12.jpg', 2, '2021-01-04 18:49:13', NULL, NULL),
	(4, 'Sembako Paket #2', 240000, 43, '1609807793_1cc2ccc1f1839e73b971.jpg', 2, '2021-01-04 18:49:53', NULL, NULL),
	(5, 'Sembako Paket #3', 320000, 45, '1609807819_1a178359275bbb6c4dbb.jpg', 2, '2021-01-04 18:50:19', NULL, NULL);
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;

-- Dumping structure for table dailygoods.komentar
CREATE TABLE IF NOT EXISTS `komentar` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) unsigned NOT NULL,
  `id_user` int(11) unsigned NOT NULL,
  `komentar` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `komentar_id_user_foreign` (`id_user`),
  KEY `komentar_id_barang_foreign` (`id_barang`),
  CONSTRAINT `komentar_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  CONSTRAINT `komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table dailygoods.komentar: ~0 rows (approximately)
/*!40000 ALTER TABLE `komentar` DISABLE KEYS */;
/*!40000 ALTER TABLE `komentar` ENABLE KEYS */;

-- Dumping structure for table dailygoods.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Dumping data for table dailygoods.migrations: ~7 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '20200526014400', 'App\\Database\\Migrations\\User', 'default', 'App', 1609331210, 1),
	(2, '20200526015100', 'App\\Database\\Migrations\\Barang', 'default', 'App', 1609331210, 1),
	(3, '20200526015400', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1609331210, 1),
	(4, '20200526015700', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1609331211, 1),
	(5, '20200526074900', 'App\\Database\\Migrations\\TransaksiAlterFk', 'default', 'App', 1609331211, 1),
	(6, '20200526084900', 'App\\Database\\Migrations\\KomentarAlterFk', 'default', 'App', 1609331211, 1),
	(7, '20200615231000', 'App\\Database\\Migrations\\TransaksiAlterAlamat', 'default', 'App', 1609331211, 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table dailygoods.pembayaran
CREATE TABLE IF NOT EXISTS `pembayaran` (
  `id_trans` int(11) unsigned NOT NULL,
  `bayar` text DEFAULT NULL,
  `id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pembayaran_transaksi` (`id_trans`),
  CONSTRAINT `FK_pembayaran_transaksi` FOREIGN KEY (`id_trans`) REFERENCES `transaksi` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table dailygoods.pembayaran: ~0 rows (approximately)
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;

-- Dumping structure for table dailygoods.transaksi
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_barang` int(11) unsigned NOT NULL,
  `id_pembeli` int(11) unsigned NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Belum',
  `pembayaran` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transaksi_id_barang_foreign` (`id_barang`),
  KEY `transaksi_id_pembeli_foreign` (`id_pembeli`),
  CONSTRAINT `transaksi_id_barang_foreign` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `transaksi_id_pembeli_foreign` FOREIGN KEY (`id_pembeli`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- Dumping data for table dailygoods.transaksi: ~25 rows (approximately)
/*!40000 ALTER TABLE `transaksi` DISABLE KEYS */;
INSERT INTO `transaksi` (`id`, `id_barang`, `id_pembeli`, `jumlah`, `total_harga`, `created_by`, `created_date`, `updated_by`, `updated_date`, `alamat`, `ongkir`, `status`, `pembayaran`) VALUES
	(6, 3, 1, 1, 151000, 1, '2021-01-04 20:01:07', NULL, NULL, 'jurang', 31000, 'berhasil', '1610075105_77852558b97be9db307e.jpg'),
	(8, 3, 1, 2, 249000, 1, '2021-01-05 00:42:46', NULL, NULL, 'jurang', 9000, '0', '1610075119_f9e7b7be116cb1020a0a.jpg'),
	(9, 4, 1, 1, 248000, 1, '2021-01-05 19:40:33', NULL, NULL, 'Jurang', 8000, '0', NULL),
	(10, 4, 1, 1, 248000, 1, '2021-01-05 19:47:01', NULL, NULL, 'Katamso', 8000, 'berhasil', NULL),
	(11, 3, 1, 1, 129000, 1, '2021-01-05 20:21:30', NULL, NULL, 'Katamso', 9000, '0', '1610113947_90656e9fc5a6870b88b3.png'),
	(12, 3, 1, 1, 156000, 1, '2021-01-05 21:34:24', NULL, NULL, 'Katamso', 36000, '0', NULL),
	(14, 3, 1, 1, 146000, 1, '2021-01-05 23:56:15', NULL, NULL, 'Jonggol, bogor', 26000, NULL, NULL),
	(26, 3, 1, 3, 402000, 1, '2021-01-06 10:18:40', NULL, NULL, 'Sukamaju', 42000, '0', NULL),
	(27, 3, 1, 3, 139000, 1, '2021-01-06 11:12:54', NULL, NULL, 'Sukamaju', 19000, '0', NULL),
	(28, 4, 1, 1, 267000, 1, '2021-01-06 11:28:41', NULL, NULL, 'Caringin', 27000, '0', NULL),
	(29, 4, 1, 1, 305000, 1, '2021-01-06 11:37:45', NULL, NULL, 'Caringin', 65000, NULL, '1609955080_dfd263f3d5b697dc6806.jpg'),
	(30, 4, 1, 1, 279000, 1, '2021-01-06 11:45:36', NULL, NULL, 'Katamso', 39000, '0', '1609955651_ad0d23bf90d8d7d55fdb.jpg'),
	(31, 3, 1, 1, 156000, 1, '2021-01-06 11:54:32', NULL, NULL, 'Jonggol, bogor', 36000, '0', '1609955684_c4ee921a79697dd11034.png'),
	(32, 5, 9, 1, 361000, 9, '2021-01-06 11:57:34', NULL, NULL, 'Jonggol, bogor', 41000, '0', '1609955863_2a704614a908f329aa72.jpg'),
	(33, 3, 1, 1, 142000, 1, '2021-01-06 12:08:24', NULL, NULL, 'Jurang', 22000, '0', '1609956514_0253b81c0aef4d739641.jpg'),
	(34, 3, 1, 1, 136000, 1, '2021-01-07 08:16:39', NULL, NULL, 'jurang', 16000, 'berhasil', '1610029052_07c8ca8d69686f439ea8.jpg'),
	(35, 4, 1, 1, 276000, 1, '2021-01-07 08:30:21', NULL, NULL, 'jurang', 36000, 'berhasil', '1610029827_8a150a438bb639a64499.jpg'),
	(36, 3, 1, 1, 156000, 1, '2021-01-07 09:17:41', NULL, NULL, 'jurang', 36000, 'berhasil', '1610032692_116a7f08eb379bc1c23d.jpg'),
	(37, 3, 1, 1, 132000, 1, '2021-01-07 11:52:06', NULL, NULL, 'Caringin', 12000, '0', NULL),
	(38, 3, 1, 1, 132000, 1, '2021-01-07 11:52:08', NULL, NULL, 'Caringin', 12000, 'berhasil', '1610041936_aaee3ac3e31dc579b576.jpg'),
	(39, 3, 1, 1, 138000, 1, '2021-01-07 23:40:56', NULL, NULL, 'Jonggol, bogor', 18000, 'berhasil', '1610084466_241a4d307b55cae57dfc.jpg'),
	(40, 4, 9, 1, 279000, 9, '2021-01-08 00:19:28', NULL, NULL, 'Caringin', 39000, '0', '1610086777_6b122b3124d726d28290.jpeg'),
	(41, 5, 9, 1, 330000, 9, '2021-01-08 00:39:29', NULL, NULL, 'Caringin', 10000, '0', '1610087979_56aa3a346426dcfc0a8c.jpeg'),
	(42, 3, 1, 1, 132000, 1, '2021-01-08 00:48:35', NULL, NULL, 'Katamso', 12000, 'berhasil', '1610088523_51df0bc116e07e70ad23.jpeg'),
	(43, 3, 13, 1, 132000, 13, '2021-01-08 00:54:14', NULL, NULL, 'Jonggol', 12000, 'berhasil', '1610088868_65c675a4b64b42539ce1.jpeg');
/*!40000 ALTER TABLE `transaksi` ENABLE KEYS */;

-- Dumping structure for table dailygoods.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `password` text NOT NULL,
  `salt` text NOT NULL,
  `avatar` text NOT NULL DEFAULT 'default.svg',
  `role` int(1) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Dumping data for table dailygoods.user: ~6 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id`, `username`, `email`, `fullname`, `password`, `salt`, `avatar`, `role`, `created_by`, `created_date`, `updated_by`, `updated_date`) VALUES
	(1, 'ihsansaiful', 'ihsansaifulhadi7@gmail.com', 'Ihsan Saiful HDR', '9ed9bae332cd86b43000fa73163ee807', '5fec723c29a811.31826081', 'default.svg', 1, 0, '2020-12-30 06:27:40', 1, '2021-01-04 11:19:15'),
	(2, 'haikalmoon', 'haikalmoon123@yahoo.com', 'Haikal Admin butut', '69ee8c71eafd2d2032895288f3656adb', '5fec991db542e0.98716678', 'default.svg', 0, 0, '2020-12-30 09:13:33', 2, '2021-01-04 09:39:37'),
	(3, 'saifull.h', NULL, NULL, 'c529333c0fa88d316bcf6e09814cd371', '5feff50b891280.64001613', 'default.svg', 1, 0, '2021-01-01 22:22:35', NULL, NULL),
	(8, 'ihsanganteng', 'ihsansaifulhadi8@gmail.com', 'Ihsan Saiful Hadi', '2a843bf6f540ec7cd03a8ccea7b861d4', '5ff0807b903099.24958011', 'default.svg', 1, 0, '2021-01-02 08:17:31', NULL, NULL),
	(9, 'rafi123', 'rafi@gmail.com', 'Rafi Reyhan', '5d8911427a02d7c0e6d14a94f0ed329e', '5ff1e154199585.99733275', 'default.svg', 1, 0, '2021-01-03 09:23:00', NULL, NULL),
	(13, 'irfan123', 'irfan@gmail.com', 'Irfan Al fajri', '48e1f73295985e4fa55eceea78dd85d9', '5ff8016060c8f1.54077237', 'default.svg', 1, 0, '2021-01-08 00:53:20', NULL, NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
