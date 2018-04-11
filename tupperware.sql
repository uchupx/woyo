-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2018 at 04:07 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tupperware`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(10) NOT NULL,
  `harga_barang` float NOT NULL,
  `qty_barang` int(3) NOT NULL,
  `total_harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_barang`
--

CREATE TABLE `detail_barang` (
  `id_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(10) NOT NULL,
  `total` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_tf`
--

CREATE TABLE `detail_tf` (
  `no_tf` varchar(5) NOT NULL,
  `id_sf` char(11) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `harga_jual` int(8) NOT NULL,
  `total_harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_tf_konsumen`
--

CREATE TABLE `detail_tf_konsumen` (
  `no_tf` char(5) NOT NULL,
  `id_konsumen` char(5) NOT NULL,
  `id_barang` varchar(15) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `qty` int(3) NOT NULL,
  `harga_jual` float NOT NULL,
  `total_harga` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `konsumen_master`
--

CREATE TABLE `konsumen_master` (
  `id_konsumen` char(5) NOT NULL,
  `nama_konsumen` varchar(50) NOT NULL,
  `notelp_konsumen` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sfmaster`
--

CREATE TABLE `sfmaster` (
  `id_sf` char(11) NOT NULL,
  `nama_sf` varchar(50) NOT NULL,
  `unit_sf` varchar(50) NOT NULL,
  `tipe_sf` varchar(20) NOT NULL,
  `status_sf` varchar(10) NOT NULL,
  `noktp_sf` varchar(15) NOT NULL,
  `notelp_sf` varchar(14) NOT NULL,
  `email_sf` varchar(50) NOT NULL,
  `alamat_sf` varchar(200) NOT NULL,
  `perekrut_sf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfmaster`
--

INSERT INTO `sfmaster` (`id_sf`, `nama_sf`, `unit_sf`, `tipe_sf`, `status_sf`, `noktp_sf`, `notelp_sf`, `email_sf`, `alamat_sf`, `perekrut_sf`) VALUES
('04011800001', 'Rizci Tri Wahyudi', 'STMIK', 'Consultant', 'Active', '375100000000001', '082122356219', 'rizcitriwahyudi@gmail.com', 'Bekasi Timur Regensi Blok H9 No 16', 'Faris'),
('04011800002', 'Pramahadi', 'ASM', 'Manager', 'Active', '375100000000002', '08988112345', 'pramahadiew@gmail.com', 'Mustika Jaya', 'Ucup'),
('04011800003', 'Oki Kuns', 'Bina insani', 'Grup Manager', 'Active', '375100000000003', '08783312311', 'Oki_kuns@gmail.com', 'Taruma Jaya', 'Bambang'),
('1000001', 'Andri', 'Test', 'Consultant', 'Active', '123321321321', '0832132131', 'andri@gmail.com', 'bekasi', 'pram');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_tf` char(5) NOT NULL,
  `tanggal_tf` date NOT NULL,
  `id_user` char(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `notelp` varchar(14) NOT NULL,
  `tipe` varchar(15) NOT NULL,
  `unit` varchar(15) NOT NULL,
  `total_harga` float NOT NULL,
  `dibayar` float NOT NULL,
  `kembali` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(6) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `status_user` varchar(10) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password` varchar(12) NOT NULL
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
-- Indexes for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD KEY `fk_barang` (`id_barang`);

--
-- Indexes for table `detail_tf`
--
ALTER TABLE `detail_tf`
  ADD PRIMARY KEY (`no_tf`),
  ADD KEY `fk_barang_tf` (`id_barang`),
  ADD KEY `fk_tf_sf` (`id_sf`);

--
-- Indexes for table `detail_tf_konsumen`
--
ALTER TABLE `detail_tf_konsumen`
  ADD PRIMARY KEY (`no_tf`),
  ADD KEY `fk_tf_konsumen` (`id_konsumen`),
  ADD KEY `fk_br_kon` (`id_barang`);

--
-- Indexes for table `konsumen_master`
--
ALTER TABLE `konsumen_master`
  ADD PRIMARY KEY (`id_konsumen`);

--
-- Indexes for table `sfmaster`
--
ALTER TABLE `sfmaster`
  ADD PRIMARY KEY (`id_sf`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_tf`),
  ADD KEY `fk_transaksi` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_barang`
--
ALTER TABLE `detail_barang`
  ADD CONSTRAINT `fk_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `detail_tf`
--
ALTER TABLE `detail_tf`
  ADD CONSTRAINT `fk_barang_tf` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `fk_tf` FOREIGN KEY (`no_tf`) REFERENCES `transaksi` (`no_tf`),
  ADD CONSTRAINT `fk_tf_sf` FOREIGN KEY (`id_sf`) REFERENCES `sfmaster` (`id_sf`);

--
-- Constraints for table `detail_tf_konsumen`
--
ALTER TABLE `detail_tf_konsumen`
  ADD CONSTRAINT `fk_br_kon` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `fk_tf_Kon` FOREIGN KEY (`no_tf`) REFERENCES `transaksi` (`no_tf`),
  ADD CONSTRAINT `fk_tf_konsumen` FOREIGN KEY (`id_konsumen`) REFERENCES `konsumen_master` (`id_konsumen`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
