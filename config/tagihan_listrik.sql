-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2023 at 01:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tagihan_listrik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(3) NOT NULL,
  `id_pelanggan` varchar(16) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `tarif_daya` varchar(50) NOT NULL,
  `stand_meter` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `id_pelanggan`, `nama_pelanggan`, `nik`, `alamat`, `nohp`, `tarif_daya`, `stand_meter`) VALUES
(1, '123456781234', 'Janssen Addison', '3171093102301', 'Jl.Janssen125', '085101556689', 'R1/400', '12341234');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pembayaran`
--

CREATE TABLE `transaksi_pembayaran` (
  `id_transaksi` int(3) NOT NULL,
  `tarif_daya` varchar(50) NOT NULL,
  `tagihan` varchar(50) NOT NULL,
  `bulan_tahun` varchar(50) NOT NULL,
  `stand_meter` varchar(50) NOT NULL,
  `stand_meter_setelah` varchar(50) NOT NULL,
  `hargakwh` varchar(12) NOT NULL,
  `admin` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `total_terbilang` varchar(255) NOT NULL,
  `non_subsidi` varchar(50) NOT NULL,
  `id_pelanggan` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_pembayaran`
--

INSERT INTO `transaksi_pembayaran` (`id_transaksi`, `tarif_daya`, `tagihan`, `bulan_tahun`, `stand_meter`, `stand_meter_setelah`, `hargakwh`, `admin`, `total_bayar`, `total_terbilang`, `non_subsidi`, `id_pelanggan`) VALUES
(1, 'R1/400', '30000', 'JAN23', '00001234', '45001234', '1500', '1500', '31500', 'tiga puluh satu ribu lima ratus', '0', '123456781234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` enum('Admin','Petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `no_hp`, `password`, `hak_akses`) VALUES
(4, 'Janssen Addison', 'janssenaddisonchen@gmail.com', '085101556689', '202cb962ac59075b964b07152d234b70', 'Admin'),
(5, 'Addison', 'j@gmail.com', '085101556689', '202cb962ac59075b964b07152d234b70', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi_pembayaran`
--
ALTER TABLE `transaksi_pembayaran`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `FK2` (`id_pelanggan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi_pembayaran`
--
ALTER TABLE `transaksi_pembayaran`
  MODIFY `id_transaksi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
