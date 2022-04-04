-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 08:24 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_brikeep`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_satuan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_satuan`) VALUES
(1, 'Indomie', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`) VALUES
(1, 'Kok');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_keluar`
--

CREATE TABLE `tb_barang_keluar` (
  `id_keluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `jumlah_barang_keluar` int(11) NOT NULL,
  `tgl_barang_keluar` date NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang_keluar`
--

INSERT INTO `tb_barang_keluar` (`id_keluar`, `id_barang`, `id_unit`, `jumlah_barang_keluar`, `tgl_barang_keluar`, `id_pegawai`) VALUES
(1, 1, 1, 1, '2022-03-16', 6),
(2, 1, 1, 12121, '2022-04-09', 7),
(3, 1, 1, 546456, '2022-04-09', 7),
(4, 1, 1, 12121, '2022-04-09', 7),
(5, 1, 1, 546456, '2022-04-09', 7),
(6, 1, 1, 5, '2022-03-23', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang_masuk`
--

CREATE TABLE `tb_barang_masuk` (
  `id_masuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `jmlh_barang` int(11) NOT NULL,
  `tgl_barang_masuk` date NOT NULL,
  `id_pegawai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang_masuk`
--

INSERT INTO `tb_barang_masuk` (`id_masuk`, `id_barang`, `id_supplier`, `jmlh_barang`, `tgl_barang_masuk`, `id_pegawai`) VALUES
(13, 1, 1, 12, '2022-03-18', 6),
(19, 1, 1, 2222, '2022-03-18', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_pegawai`
--

CREATE TABLE `tb_data_pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nip_pegawai` varchar(50) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jabatan_pegawai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_data_pegawai`
--

INSERT INTO `tb_data_pegawai` (`id_pegawai`, `nip_pegawai`, `nama_pegawai`, `jabatan_pegawai`) VALUES
(6, '1234', 'Contoh', 'Contoh'),
(7, '8080', 'Rafliasaasa', 'Huhu'),
(13, '12', 'Haha', 'Haha');

-- --------------------------------------------------------

--
-- Table structure for table `tb_unit`
--

CREATE TABLE `tb_unit` (
  `id_unit` int(11) NOT NULL,
  `nama_unit_tujuan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_unit`
--

INSERT INTO `tb_unit` (`id_unit`, `nama_unit_tujuan`) VALUES
(1, 'Unit Mandonga');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(14) NOT NULL,
  `password_user` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `user_name`, `password_user`) VALUES
(1, 'admin', '21232f29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD PRIMARY KEY (`id_keluar`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_unit` (`id_unit`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD PRIMARY KEY (`id_masuk`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_supplier` (`id_supplier`),
  ADD KEY `id_pegawai` (`id_pegawai`);

--
-- Indexes for table `tb_data_pegawai`
--
ALTER TABLE `tb_data_pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_unit`
--
ALTER TABLE `tb_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_data_pegawai`
--
ALTER TABLE `tb_data_pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tb_unit`
--
ALTER TABLE `tb_unit`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_barang_keluar`
--
ALTER TABLE `tb_barang_keluar`
  ADD CONSTRAINT `tb_barang_keluar_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `tb_barang_keluar_ibfk_2` FOREIGN KEY (`id_unit`) REFERENCES `tb_unit` (`id_unit`),
  ADD CONSTRAINT `tb_barang_keluar_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_data_pegawai` (`id_pegawai`);

--
-- Constraints for table `tb_barang_masuk`
--
ALTER TABLE `tb_barang_masuk`
  ADD CONSTRAINT `tb_barang_masuk_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `tb_barang_masuk_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`),
  ADD CONSTRAINT `tb_barang_masuk_ibfk_3` FOREIGN KEY (`id_pegawai`) REFERENCES `tb_data_pegawai` (`id_pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
