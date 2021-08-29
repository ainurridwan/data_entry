-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2021 at 02:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data_entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_data_transaksi`
--

CREATE TABLE `table_data_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `transaksistr` varchar(2) NOT NULL DEFAULT 'TR',
  `Anggota_id` int(3) NOT NULL,
  `Buku_id` int(3) NOT NULL,
  `status_peminjaman` enum('belum dikembalikan','sudah dikembalikan','hilang atau rusak') NOT NULL DEFAULT 'belum dikembalikan',
  `tanggal_pinjam` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_data_transaksi`
--

INSERT INTO `table_data_transaksi` (`id_transaksi`, `transaksistr`, `Anggota_id`, `Buku_id`, `status_peminjaman`, `tanggal_pinjam`, `tanggal_pengembalian`) VALUES
(101, 'TR', 123, 103, 'sudah dikembalikan', '2021-08-27', '2021-08-31'),
(102, 'TR', 123, 0, '', '0000-00-00', '0000-00-00'),
(103, 'TR', 123, 0, '', '0000-00-00', '0000-00-00'),
(104, 'TR', 127, 0, '', '0000-00-00', '2021-09-07'),
(105, 'TR', 129, 0, '', '2021-08-29', '2021-09-07'),
(106, 'TR', 129, 0, '', '2021-08-29', '2021-09-07'),
(107, 'TR', 129, 0, '', '2021-08-29', '2021-09-07'),
(108, 'TR', 129, 0, '', '2021-08-29', '2021-09-07'),
(109, 'TR', 124, 0, '', '2021-08-29', '2021-09-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_data_transaksi`
--
ALTER TABLE `table_data_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_data_transaksi`
--
ALTER TABLE `table_data_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
