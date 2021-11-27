-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.22-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for waris
CREATE DATABASE IF NOT EXISTS `waris` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `waris`;

-- Dumping structure for table waris.karyawan
CREATE TABLE IF NOT EXISTS `karyawan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(1000) NOT NULL,
  `jabatan` varchar(1000) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `nip` varchar(1000) DEFAULT NULL,
  `nik` varchar(1000) DEFAULT NULL,
  `file_kk` varchar(1000) DEFAULT NULL,
  `file_ktp` varchar(1000) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table waris.laporan
CREATE TABLE IF NOT EXISTS `laporan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perihal` varchar(3000) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_date` datetime NOT NULL,
  `file_surat` varchar(300) NOT NULL,
  `tanggal` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table waris.surat_keluar
CREATE TABLE IF NOT EXISTS `surat_keluar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perihal` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `no_surat` varchar(1000) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tujuan` varchar(3000) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_date` datetime DEFAULT NULL,
  `file_surat` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table waris.surat_masuk
CREATE TABLE IF NOT EXISTS `surat_masuk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perihal` varchar(2000) NOT NULL,
  `description` text NOT NULL,
  `no_surat` varchar(1000) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `pengirim` varchar(3000) NOT NULL,
  `tanggal_rekam` date NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `deleted_date` datetime DEFAULT NULL,
  `file_surat` varchar(3000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

-- Dumping structure for table waris.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(100) NOT NULL DEFAULT '0',
  `name` varchar(1000) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
