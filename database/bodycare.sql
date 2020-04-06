-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 10:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bodycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `nama_dokter` varchar(20) NOT NULL,
  `email_dokter` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  `foto_dokter` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`nama_dokter`, `email_dokter`, `password`, `spesialis`, `foto_dokter`) VALUES
('Andi Sulitiyo', 'andi@gmail.com', '123', 'Kesehatan Jasmani', 'dokter1.jpg'),
('Chelsea Imania', 'chels@gmail.com', '123', 'Kesehatan Jantung', 'dokter2.jpg'),
('Ferdian Yulianto', 'ferdi@gmail.com', '123', 'Kesehatan Masyarakat', 'dokter5.jpg'),
('Rika Surika', 'rika@gmail.com', '123', 'Kebugaran', 'dokter3.jpg'),
('Tomoyama', 'tomo@gmail.com', '123', 'Kesehatan Rohani', 'dokter4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_pesan` int(3) NOT NULL,
  `pesan` varchar(255) NOT NULL,
  `pengirim` varchar(255) NOT NULL,
  `penerima` varchar(255) NOT NULL,
  `email_member` varchar(15) NOT NULL,
  `email_dokter` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `membeli`
--

CREATE TABLE `membeli` (
  `tanggal_pembelian` date NOT NULL,
  `id_penjualan` int(3) NOT NULL,
  `email_member` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `nama_member` varchar(20) NOT NULL,
  `email_member` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `berat_badan` int(3) NOT NULL,
  `tinggi_badan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`nama_member`, `email_member`, `password`, `alamat`, `berat_badan`, `tinggi_badan`) VALUES
('sukijan', 'iman@gmail', '123', 'SUKBUI', 11, 211),
('sukijan', 'jan@gmail.com', '123', 'SUKBUI', 11, 211),
('suki', 'suki@gmail.com', '123', 'SUKBUI', 11, 211);

-- --------------------------------------------------------

--
-- Table structure for table `menjual`
--

CREATE TABLE `menjual` (
  `id_penjualan` int(3) NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `total_pendapatan` int(8) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `email_penjual` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `nama_penjual` varchar(20) NOT NULL,
  `email_penjual` varchar(15) NOT NULL,
  `password` varchar(12) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_handphone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`email_dokter`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `email_dokter` (`email_dokter`),
  ADD KEY `email_member` (`email_member`);

--
-- Indexes for table `membeli`
--
ALTER TABLE `membeli`
  ADD KEY `membeli_ibfk_1` (`id_penjualan`),
  ADD KEY `membeli_ibfk_2` (`email_member`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`email_member`);

--
-- Indexes for table `menjual`
--
ALTER TABLE `menjual`
  ADD PRIMARY KEY (`id_penjualan`),
  ADD KEY `menjual_ibfk_1` (`id_barang`),
  ADD KEY `menjual_ibfk_2` (`email_penjual`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`email_penjual`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konsultasi`
--
ALTER TABLE `konsultasi`
  MODIFY `id_pesan` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menjual`
--
ALTER TABLE `menjual`
  MODIFY `id_penjualan` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD CONSTRAINT `konsultasi_ibfk_1` FOREIGN KEY (`email_dokter`) REFERENCES `dokter` (`email_dokter`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `konsultasi_ibfk_2` FOREIGN KEY (`email_member`) REFERENCES `member` (`email_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `membeli`
--
ALTER TABLE `membeli`
  ADD CONSTRAINT `membeli_ibfk_1` FOREIGN KEY (`id_penjualan`) REFERENCES `menjual` (`id_penjualan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `membeli_ibfk_2` FOREIGN KEY (`email_member`) REFERENCES `member` (`email_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menjual`
--
ALTER TABLE `menjual`
  ADD CONSTRAINT `menjual_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `menjual_ibfk_2` FOREIGN KEY (`email_penjual`) REFERENCES `penjual` (`email_penjual`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
