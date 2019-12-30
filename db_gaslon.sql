-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 29, 2019 at 06:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_gaslon`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `password_admin` varchar(255) NOT NULL,
  `foto_admin` varchar(100) DEFAULT NULL,
  `nama_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`, `foto_admin`, `nama_admin`) VALUES
(1, 'rizqi1724', '3103deb68465747643608bb0f506dee6', 'rizqi.jpg', 'rizqi krisandika'),
(4, 'farida1708', 'c59b469d724f7919b7d35514184fdc0f', NULL, 'Farida'),
(5, 'tito1709', '52d080a3e172c33fd6886a37e7288491', NULL, 'Syaril tito mahendra');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tanggal_daftar` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`, `password`, `nohp`, `alamat`, `gambar`, `tanggal_daftar`) VALUES
(1, 'rizqikrisandika', 'rizqikrisandika990@gmail.com', '01aad4b248d8fa31ff08455ed4c72006', '089523269898', 'Perumahan Taman Sedayu 3, Blok G12', NULL, '2019-12-28 16:44:14');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `tanggal_pembelian` timestamp NOT NULL DEFAULT current_timestamp(),
  `total_pembelian` int(11) NOT NULL,
  `status_pembelian` varchar(20) NOT NULL DEFAULT 'Diproses',
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `id_pelanggan`, `id_toko`, `tanggal_pembelian`, `total_pembelian`, `status_pembelian`, `alamat`) VALUES
(1, 1, 1, '2019-12-29 14:24:16', 12000, 'Di kirim', 'Perumahan Taman Sedayu 3, Blok G12'),
(2, 1, 1, '2019-12-29 15:31:56', 209000, 'Di kirim', 'Perumahan Taman Sedayu 3, Blok G12');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian_produk`
--

CREATE TABLE `pembelian_produk` (
  `id_pembelian_produk` int(11) NOT NULL,
  `id_pembelian` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `harga_produk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembelian_produk`
--

INSERT INTO `pembelian_produk` (`id_pembelian_produk`, `id_pembelian`, `id_produk`, `jumlah`, `nama_produk`, `foto_produk`, `harga_produk`) VALUES
(1, 1, 4, 1, 'Aqua Galon', 'img_20191228154043.png', 12000),
(2, 2, 1, 2, 'Elpiji 3kg', 'img_20191228115633.png', 29000),
(3, 2, 3, 1, 'gas 12kg', 'img_20191228140612.png', 139000),
(4, 2, 4, 1, 'Aqua Galon', 'img_20191228154043.png', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_toko` int(11) NOT NULL,
  `tanggal_produk` timestamp NOT NULL DEFAULT current_timestamp(),
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `foto_produk` varchar(100) DEFAULT NULL,
  `stok_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `id_toko`, `tanggal_produk`, `nama_produk`, `harga_produk`, `foto_produk`, `stok_produk`) VALUES
(1, 1, '2019-12-28 10:56:33', 'Elpiji 3kg', 29000, 'img_20191228115633.png', 3),
(3, 1, '2019-12-28 13:06:12', 'gas 12kg', 139000, 'img_20191228140612.png', 5),
(4, 1, '2019-12-28 14:40:43', 'Aqua Galon', 12000, 'img_20191228154043.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama`, `email`, `nohp`, `password`, `alamat`, `gambar`) VALUES
(1, 'Toko Barokah', 'tokobarokah@gmail.com', '089523269898', '01aad4b248d8fa31ff08455ed4c72006', 'Jalan Kenangan Mantan KM 0', 'img_20191228115604.png'),
(2, 'Toko Heru', 'tokoheru@gmail.com', '081228214411', '01aad4b248d8fa31ff08455ed4c72006', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD PRIMARY KEY (`id_pembelian_produk`),
  ADD KEY `id_pembelian` (`id_pembelian`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_toko` (`id_toko`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  MODIFY `id_pembelian_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`),
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_toko`) REFERENCES `toko` (`id_toko`);

--
-- Constraints for table `pembelian_produk`
--
ALTER TABLE `pembelian_produk`
  ADD CONSTRAINT `pembelian_produk_ibfk_1` FOREIGN KEY (`id_pembelian`) REFERENCES `pembelian` (`id_pembelian`),
  ADD CONSTRAINT `pembelian_produk_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`id_toko`) REFERENCES `produk` (`id_produk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;