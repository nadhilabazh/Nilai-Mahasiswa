-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 09:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbutss`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblnilai`
--

CREATE TABLE `tblnilai` (
  `id` int(11) NOT NULL,
  `nim` varchar(13) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `foto_mhs` text NOT NULL,
  `tugas` float NOT NULL,
  `uts` float NOT NULL,
  `uas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblnilai`
--

INSERT INTO `tblnilai` (`id`, `nim`, `nama_mhs`, `foto_mhs`, `tugas`, `uts`, `uas`) VALUES
(1, '062030701619', 'Nadhila Bazhlina', 'nadhila.jpg', 90, 100, 100),
(2, '062030700276', 'Ria Febriyanti', 'riafeb.jpeg', 100, 90, 100),
(3, '062040421289', 'Vilia Nur Arifah', 'vilia.jpg', 90, 90, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblnilai`
--
ALTER TABLE `tblnilai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblnilai`
--
ALTER TABLE `tblnilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
