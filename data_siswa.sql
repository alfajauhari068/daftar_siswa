-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2025 at 06:20 AM
-- Server version: 5.7.39
-- PHP Version: 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siswa_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_siswa`
--

CREATE TABLE `data_siswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `umur` int(11) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_siswa`
--

INSERT INTO `data_siswa` (`id`, `nama`, `umur`, `alamat`) VALUES
(1, 'Andi Pratama Ramadani', 17, 'Jl. Melati No. 12, Surabaya'),
(2, 'Siti Aminah', 16, 'Jl. Kenanga No. 5, Malang'),
(3, 'Budi Santoso', 18, 'Jl. Mawar No. 21, Jakarta'),
(4, 'Rina Kartika', 17, 'Jl. Anggrek No. 9, Bandung'),
(5, 'Agus Wibowo', 16, 'Jl. Dahlia No. 4, Semarang'),
(6, 'Dewi Lestari', 17, 'Jl. Flamboyan No. 7, Yogyakarta'),
(7, 'Rizki Ramadhan', 18, 'Jl. Cempaka No. 6, Bogor'),
(8, 'Putri Ayu', 17, 'Jl. Sawo No. 3, Medan'),
(9, 'Dian Septiani', 16, 'Jl. Mangga No. 2, Palembang'),
(10, 'Eko Susanto', 17, 'Jl. Durian No. 8, Makassar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_siswa`
--
ALTER TABLE `data_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
