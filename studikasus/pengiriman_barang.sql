-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 07, 2023 at 01:21 AM
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
-- Database: `pengiriman_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `id` int NOT NULL,
  `berat` varchar(5) NOT NULL,
  `harga` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`id`, `berat`, `harga`) VALUES
(49, '1 Kg', 'Rp.5.000,00'),
(50, '2 Kg', 'Rp.10.000,00'),
(51, '3 Kg', 'Rp.15.000,00');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `jk`, `no_hp`, `alamat`, `username`, `password`, `level`) VALUES
(16, 'Triko', 'Laki-laki', '081327711108', 'Jl.Nusa Indah', 'Triko', 'Admin12345', 'Admin'),
(22, 'Supri', 'Laki-Laki', '081562916611', 'Jl.Nusa Keramat', 'Supri', 'Kurir12345', 'Kurir'),
(25, 'Pono', 'Laki-Laki', '097654332223', 'Jl.Nusa Hayuk', 'Pono', 'Pono12345', 'Kurir');

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int NOT NULL,
  `id_pengiriman` varchar(20) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `penerima` varchar(30) NOT NULL,
  `nohp_penerima` varchar(15) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `barang` varchar(20) NOT NULL,
  `berat` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `harga` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `id_pengiriman`, `tanggal`, `pengirim`, `no_hp`, `penerima`, `nohp_penerima`, `alamat`, `barang`, `berat`, `harga`, `status`) VALUES
(45, 'PGB0001121', '2023-12-07', 'Fajar', '081562916611', 'Kapir', '089176659910', 'Jl.Yuhuu', 'Pesawat', '3 Kg', 'Rp.15.000,00', 'Diproses'),
(46, 'PGB0001122', '2023-12-07', 'Satria', '097654332223', 'Habib', '089176659910', 'Jl.Apa Hayo', 'Kelapa', '1 Kg', 'Rp.5.000,00', 'Diproses');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
