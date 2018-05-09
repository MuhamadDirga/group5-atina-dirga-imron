-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2018 at 08:53 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `norek` int(50) NOT NULL,
  `saldo` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `nama`, `norek`, `saldo`) VALUES
(1, 'BNI', 46465719, 20004);

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donatur` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_muzaki` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donatur`, `tanggal`, `jumlah`, `id_muzaki`, `id_kategori`, `id_bank`) VALUES
(12, '2018-05-17', 5, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(2, 'Zakat'),
(3, 'Donasi'),
(4, '1111'),
(5, '1212');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_donasi` int(50) NOT NULL,
  `penerima` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `deskripsi`, `lokasi`, `tanggal`, `jumlah_donasi`, `penerima`, `Image`) VALUES
(8, 'Atina Za\'ima Rasyida', 'jjjjjjjm', 'jmbmh', '2018-05-08', 765, 'kjbj', '179578.jpg'),
(9, 'a', 'asd', 'Malang', '2018-05-09', 1000, 'bimo', 'Image_1889c1e20.jpg'),
(10, 'asd', 'asfd', 'asd', '2018-01-01', 123123, 'sad', 'Image_1889c1e21.jpg'),
(11, 'asdasd', 'asd', 'asd', '1231-02-01', 123, 'asd', 'Image_1889c1e22.jpg'),
(12, 'Bimo Syahputro', 'kjn', 'Malang', '2018-05-09', 9, 'jkn', 'Image_1889c1e23.jpg'),
(13, 'Bimo Syahputro', 'asdasdasdsad asdasdasdsad asdasdasdsad', 'Malang', '2018-05-09', 29302, 'asd', 'Image_1889c1e24.jpg'),
(14, 'Bimo Syahputro', 'asdasd', 'asd', '2018-01-01', 2323, 'asd', 'Image_1889c1e25.jpg'),
(15, 'asd', 'sad', 'Malang', '2018-01-01', 23, 'asd', 'Image_1889c1e26.jpg'),
(16, 'asd', 'asd', 'Malang', '2018-01-01', 324, 'ssad', 'Image_1889c1e27.jpg'),
(17, 'asd', 'asd', 'Malang', '2018-01-01', 213, 'zsd', 'Image_1889c1e28.jpg'),
(18, 'asd', 'asd', 'Malang', '2018-01-01', 2323, 'asd', 'Image_1889c1e29.jpg'),
(19, 'Bimo Syahputro', 'asdasd', 'Malang', '2018-01-01', 213, 'asd', 'Image_1889c1e30.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `muzaki`
--

CREATE TABLE `muzaki` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `muzaki`
--

INSERT INTO `muzaki` (`id`, `nama`, `alamat`, `kota`, `nohp`, `email`, `username`, `password`) VALUES
(1, 'Atina Za\'ima Rasyida', 'KEPO', 'Kab. Magetan', '085235056781', 'atinazr@gmail.com', '1641720208', 'akulupa69');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donatur`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muzaki`
--
ALTER TABLE `muzaki`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donatur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `muzaki`
--
ALTER TABLE `muzaki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
