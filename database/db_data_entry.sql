-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 02:22 PM
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
-- Table structure for table `table_anggota`
--

CREATE TABLE `table_anggota` (
  `anggotastr` varchar(5) NOT NULL DEFAULT 'AN',
  `idno` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `foto` text NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_anggota`
--

INSERT INTO `table_anggota` (`anggotastr`, `idno`, `nama`, `foto`, `jenis_kelamin`, `alamat`) VALUES
('AN', 114, 'Keiko nakamura', '61220b0273cb2.jpg', 'perempuan', 'JL Shibuya Hill '),
('AN', 117, 'Jinbei', '61220b484aa15.jpg', 'laki-laki', 'Jl Wano'),
('AN', 118, 'Nami', '61220bb90ec74.jpg', 'perempuan', 'JL jalan'),
('AN', 120, 'Syakira', '612215653c56e.jpg', 'perempuan', 'Jl Whiskas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_anggota`
--
ALTER TABLE `table_anggota`
  ADD PRIMARY KEY (`idno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_anggota`
--
ALTER TABLE `table_anggota`
  MODIFY `idno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
