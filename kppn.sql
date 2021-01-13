-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:55 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kppn`
--

-- --------------------------------------------------------

--
-- Table structure for table `satker`
--

CREATE TABLE `satker` (
  `id_satker` int(7) NOT NULL,
  `kode_satker` varchar(255) NOT NULL,
  `nama_satker` varchar(255) NOT NULL,
  `telepon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skpp`
--

CREATE TABLE `skpp` (
  `id_skpp` int(7) NOT NULL,
  `kode_satker` varchar(50) NOT NULL,
  `nama_satker` varchar(50) NOT NULL,
  `diterima` datetime NOT NULL,
  `proses` datetime NOT NULL,
  `ditolak` varchar(255) NOT NULL,
  `selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skpp`
--

INSERT INTO `skpp` (`id_skpp`, `kode_satker`, `nama_satker`, `diterima`, `proses`, `ditolak`, `selesai`) VALUES
(9, '653878', 'KANTOR KEMENTERIAN AGAMA KOTA LHOKSEUMAWE', '2020-03-04 17:11:30', '2020-03-04 17:11:32', 'Salah Nomor', '2020-03-04 17:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `sp2d`
--

CREATE TABLE `sp2d` (
  `id_sp2d` int(7) NOT NULL,
  `kode_satker` varchar(50) NOT NULL,
  `nama_satker` varchar(50) NOT NULL,
  `diterima` datetime NOT NULL,
  `proses` datetime NOT NULL,
  `ditolak` varchar(255) NOT NULL,
  `selesai` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sp2d`
--

INSERT INTO `sp2d` (`id_sp2d`, `kode_satker`, `nama_satker`, `diterima`, `proses`, `ditolak`, `selesai`) VALUES
(5, '653878', 'KANTOR KEMENTERIAN AGAMA KOTA LHOKSEUMAWE', '2020-03-04 17:12:27', '2020-03-04 17:12:30', 'S-15', '2020-03-04 17:12:37');

-- --------------------------------------------------------

--
-- Table structure for table `spm`
--

CREATE TABLE `spm` (
  `id_spm` int(7) NOT NULL,
  `kode_satker` varchar(50) NOT NULL,
  `nama_satker` varchar(50) NOT NULL,
  `diterima` datetime NOT NULL,
  `proses` datetime NOT NULL,
  `ditolak` varchar(255) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `tgl_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `spm`
--

INSERT INTO `spm` (`id_spm`, `kode_satker`, `nama_satker`, `diterima`, `proses`, `ditolak`, `nama_file`, `tgl_upload`) VALUES
(9, '653878', 'KANTOR KEMENTERIAN AGAMA KOTA LHOKSEUMAWE', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin089', 'admin089', 'admin089', 'admin'),
(2, 'user089', 'user089', 'user089', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `satker`
--
ALTER TABLE `satker`
  ADD PRIMARY KEY (`id_satker`);

--
-- Indexes for table `skpp`
--
ALTER TABLE `skpp`
  ADD PRIMARY KEY (`id_skpp`),
  ADD UNIQUE KEY `kode_satker` (`kode_satker`);

--
-- Indexes for table `sp2d`
--
ALTER TABLE `sp2d`
  ADD PRIMARY KEY (`id_sp2d`),
  ADD UNIQUE KEY `kode_satker` (`kode_satker`);

--
-- Indexes for table `spm`
--
ALTER TABLE `spm`
  ADD PRIMARY KEY (`id_spm`),
  ADD UNIQUE KEY `kode_satker` (`kode_satker`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `satker`
--
ALTER TABLE `satker`
  MODIFY `id_satker` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skpp`
--
ALTER TABLE `skpp`
  MODIFY `id_skpp` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sp2d`
--
ALTER TABLE `sp2d`
  MODIFY `id_sp2d` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spm`
--
ALTER TABLE `spm`
  MODIFY `id_spm` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
