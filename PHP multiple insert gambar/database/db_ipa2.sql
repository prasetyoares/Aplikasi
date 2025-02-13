-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 09:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ipa2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` varchar(8) NOT NULL,
  `tanggal_daftar` date NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  `jam_mulai` varchar(50) NOT NULL,
  `resi1` varchar(100) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `resi2` varchar(100) NOT NULL,
  `foto_profil2` varchar(100) NOT NULL,
  `resi3` varchar(100) NOT NULL,
  `foto_profil3` varchar(100) NOT NULL,
  `turbi1` varchar(100) NOT NULL,
  `foto_profil4` varchar(100) NOT NULL,
  `turbi2` varchar(100) NOT NULL,
  `foto_profil5` varchar(100) NOT NULL,
  `turbi3` varchar(100) NOT NULL,
  `foto_profil6` varchar(100) NOT NULL,
  `foto_profil7` varchar(100) NOT NULL,
  `foto_profil8` varchar(100) NOT NULL,
  `foto_profil9` varchar(100) NOT NULL,
  `foto_profil10` varchar(100) NOT NULL,
  `foto_profil11` varchar(100) NOT NULL,
  `turbi4` varchar(100) NOT NULL,
  `cat1` varchar(255) NOT NULL,
  `garam` varchar(100) NOT NULL,
  `ket_garam` varchar(100) NOT NULL,
  `konsen` varchar(100) NOT NULL,
  `ket_konsen` varchar(100) NOT NULL,
  `vol` varchar(100) NOT NULL,
  `ket_vol` varchar(100) NOT NULL,
  `cat2` varchar(255) NOT NULL,
  `jam_akhir` varchar(100) NOT NULL,
  `nama1` varchar(100) NOT NULL,
  `nama2` varchar(100) NOT NULL,
  `nama3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `tanggal_daftar`, `lokasi`, `jam_mulai`, `resi1`, `foto_profil`, `resi2`, `foto_profil2`, `resi3`, `foto_profil3`, `turbi1`, `foto_profil4`, `turbi2`, `foto_profil5`, `turbi3`, `foto_profil6`, `foto_profil7`, `foto_profil8`, `foto_profil9`, `foto_profil10`, `foto_profil11`, `turbi4`, `cat1`, `garam`, `ket_garam`, `konsen`, `ket_konsen`, `vol`, `ket_vol`, `cat2`, `jam_akhir`, `nama1`, `nama2`, `nama3`) VALUES
('ID-00001', '2025-02-13', 'PDAM Jakarta', '08.00', 'res1', '348-1.jpg', 'r2', '300-2.jpg', '', '', 't1', '108-3.jpg', 't2', '523-4.jpg', 't3', '224-5.jpg', '416-6.jpg', '979-7.jpg', '917-8.jpg', '481-9.jpg', '987-10.jpg', 't4', 'tdk ada cat', '', '', '', '', '', '', '', '17.00', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
