-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2026 at 11:59 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pwd_2622500054`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak_2622500054`
--

CREATE TABLE `tbl_kontak_2622500054` (
  `id` int NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `semester` tinyint DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jenis_pesan` varchar(20) DEFAULT NULL,
  `minat` varchar(50) DEFAULT NULL,
  `prodi` varchar(2) DEFAULT NULL,
  `pesan` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl_kontak_2622500054`
--

INSERT INTO `tbl_kontak_2622500054` (`id`, `nama`, `email`, `semester`, `tanggal`, `jenis_pesan`, `minat`, `prodi`, `pesan`) VALUES
(1, 'Teman Hanny', 'teman@example.com', 1, '2026-11-20', 'Pertanyaan', 'Web', 'SI', 'Semangat kuliah Sistem Informasi.'),
(2, 'Hanny', '2622500054@mahasiswa.atmaluhur.ac.id', 1, '2026-11-20', 'Peringatan', 'Web', 'SI', 'Semangat beraktivitas'),
(3, 'HANNY ARFA', '2622500054@mahasiswa.atmaluhur.ac.id', 1, '2026-11-20', 'Peringatan', 'Web', 'SI', 'Semangat beraktivitas'),
(4, 'HANNY ARFA', '2622500054@mahasiswa.atmaluhur.ac.id', 1, '2026-11-20', 'Peringatan', 'Web', 'SI', 'Semangat beraktivitas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_kontak_2622500054`
--
ALTER TABLE `tbl_kontak_2622500054`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_kontak_2622500054`
--
ALTER TABLE `tbl_kontak_2622500054`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
