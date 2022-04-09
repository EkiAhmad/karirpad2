-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 09, 2022 at 10:22 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
CREATE TABLE IF NOT EXISTS `barang` (
  `kdbrg` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kdbrg`, `nama`) VALUES
(1, 'Meja'),
(2, 'Kursi'),
(3, 'Lemari');

-- --------------------------------------------------------

--
-- Table structure for table `jual`
--

DROP TABLE IF EXISTS `jual`;
CREATE TABLE IF NOT EXISTS `jual` (
  `kdbrg` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jual`
--

INSERT INTO `jual` (`kdbrg`, `jumlah`) VALUES
(1, 2),
(1, 3),
(3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `master_barang`
--

DROP TABLE IF EXISTS `master_barang`;
CREATE TABLE IF NOT EXISTS `master_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `foto` text,
  `diskon` int(11) NOT NULL,
  `harga` double(255,0) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedAt` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `master_barang`
--

INSERT INTO `master_barang` (`id`, `nama`, `kategori`, `foto`, `diskon`, `harga`, `createdAt`, `updatedAt`) VALUES
(1, 'Pensil', 'Retail', NULL, 0, 3000, '2021-02-17 03:18:16', NULL),
(3, 'Buku', 'Retail', NULL, 0, 4000, '2021-02-17 05:24:34', NULL),
(5, 'Penghapus', 'Retail', NULL, 0, 2000, '2021-02-17 05:25:23', NULL),
(7, 'Bulpoin', 'Wholesale', NULL, 0, 1000, '2022-04-09 04:49:27', NULL),
(8, 'Headset', 'Retail', NULL, 4500, 45000, '2022-04-09 09:45:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stok_barang`
--

DROP TABLE IF EXISTS `stok_barang`;
CREATE TABLE IF NOT EXISTS `stok_barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_stok` varchar(255) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kode_barang` varchar(255) DEFAULT NULL,
  `stok_akhir` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `stok_barang`
--

INSERT INTO `stok_barang` (`id`, `kode_stok`, `tanggal`, `kode_barang`, `stok_akhir`) VALUES
(1, '1', '2021-02-01 15:09:28', 'A', '2'),
(2, '2', '2021-02-02 15:10:15', 'A', '5'),
(3, '3', '2021-02-02 15:10:22', 'B', '1'),
(4, '4', '2021-02-03 15:10:27', 'A', '3'),
(5, '5', '2021-02-03 15:10:35', 'B', '3'),
(6, '6', '2021-02-04 15:10:41', 'A', '5'),
(7, '7', '2021-02-04 15:10:46', 'A', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(40) DEFAULT NULL,
  `user_username` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_level` varchar(3) DEFAULT NULL,
  `user_role` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_username`, `user_email`, `user_password`, `user_level`, `user_role`) VALUES
(1, 'Super User', 'superuser', 'superuser@mail.com', 'superuser', '1', 'SprUsr'),
(2, 'User', 'user', 'user@mail.com', 'user', '2', 'Usr');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
