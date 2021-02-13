-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 04:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_toko_buah`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE `buah` (
  `id` int(5) NOT NULL,
  `kodebuah` varchar(10) NOT NULL,
  `namabuah` varchar(25) NOT NULL,
  `hargabuah` double NOT NULL,
  `jenisbuah` varchar(10) NOT NULL,
  `readystock` int(1) NOT NULL,
  `gambarbuah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`id`, `kodebuah`, `namabuah`, `hargabuah`, `jenisbuah`, `readystock`, `gambarbuah`) VALUES
(1, 'FRT-001', 'Apel', 20000, 'import', 1, 'apel.jpg'),
(2, 'FRT-002', 'Jeruk', 10000, 'lokal', 1, 'jeruk.jpg'),
(3, 'FRT-003', 'Mangga', 15000, 'lokal', 0, 'mangga.jpg'),
(4, 'FRT-004', 'Anggur', 25000, 'import', 1, 'anggur.jpg'),
(5, 'FRT-005', 'Salak', 8000, 'lokal', 0, 'salak.jpg'),
(6, 'FRT-006', 'Durian', 6500, 'lokal', 1, 'durian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pesan`
--

CREATE TABLE `kategori_pesan` (
  `id` int(5) NOT NULL,
  `kodekategori` varchar(10) NOT NULL,
  `namakategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_pesan`
--

INSERT INTO `kategori_pesan` (`id`, `kodekategori`, `namakategori`) VALUES
(1, 'CAT-0001', 'Produk'),
(2, 'CAT-0002', 'Pelayanan'),
(3, 'CAT-0003', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `kontak_kami`
--

CREATE TABLE `kontak_kami` (
  `id` int(5) NOT NULL,
  `tanggalkirim` date NOT NULL,
  `namapengirim` varchar(50) NOT NULL,
  `emailpengirim` varchar(50) NOT NULL,
  `subjekpesan` varchar(255) NOT NULL,
  `isipesan` text NOT NULL,
  `kategoripesan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontak_kami`
--

INSERT INTO `kontak_kami` (`id`, `tanggalkirim`, `namapengirim`, `emailpengirim`, `subjekpesan`, `isipesan`, `kategoripesan`) VALUES
(1, '0000-00-00', 'adawa', 'adwaw@gmail.com', 'adaw', 'adawdawda', 'CAT-0001'),
(2, '2021-01-07', 'tes2', 'tes2@gmail.com', 'tes2', 'tes2', 'CAT-0001'),
(3, '2021-01-07', 'Rizki Wahyudi', 'rizkiwahyudi@gmail.com', 'Beli Pisang', 'Beli Pisang 1 Tandan', 'CAT-0003');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(5) NOT NULL,
  `kdprov` varchar(10) NOT NULL,
  `nmprov` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `kdprov`, `nmprov`) VALUES
(1, '001', 'ACEH'),
(2, '002', 'SUMTRA UTAR'),
(3, '003', 'SUMATRA SEL'),
(4, '004', 'SUMTRA BARA'),
(5, '005', 'BANTEN'),
(6, '006', 'DKI JAKARTA'),
(7, '007', 'JAWA BARAT'),
(8, '008', 'JAWA TENGAH'),
(9, '009', 'JAWA TIMUR'),
(10, '010', 'BALI');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id` int(5) NOT NULL,
  `nmlengkap` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `jnskelamin` varchar(5) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `kodepos` varchar(10) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id`, `nmlengkap`, `email`, `jnskelamin`, `provinsi`, `alamat`, `kodepos`, `nohp`) VALUES
(1, '', '', 'LK', '', '', '', ''),
(2, 'gdxd', '', 'LK', '', '', '', ''),
(3, 'fafs', 'aaaa@rgr', 'LK', '003', 'ghdghfhfhfchjgjg', '17111', '55555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buah`
--
ALTER TABLE `buah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_pesan`
--
ALTER TABLE `kategori_pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buah`
--
ALTER TABLE `buah`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori_pesan`
--
ALTER TABLE `kategori_pesan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kontak_kami`
--
ALTER TABLE `kontak_kami`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
