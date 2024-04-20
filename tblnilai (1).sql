-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 11:21 AM
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
(5, '062040421289', 'Vilia Nur Arifah', 'vilia.jpg', 80, 85, 85),
(6, '062030701610', 'Aliyyah Bakhitah', 'aliyyah.jpeg', 65, 70, 70),
(7, '062030701622', 'Rizky Triyana', 'kikek.jpeg', 70, 65, 70),
(8, '062030701612', 'Ersa Monica Sari', 'ersa.jpeg', 70, 70, 80),
(9, '062030701609', 'Ade Hilta Apriansyah', 'ade.jpg', 80, 80, 70),
(10, '062030701611', 'Dhiya Kasful Haqi', 'haqii.jpeg', 65, 70, 80),
(11, '062030701621', 'Ria Anggi Safitri', 'anggi.jpeg', 90, 80, 70),
(12, '062030700265', 'Aldi Setiawan', 'aldi.jpg', 65, 70, 80);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
