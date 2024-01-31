-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 11:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Id_peserta` int(10) UNSIGNED NOT NULL,
  `Kd_skema` varchar(11) NOT NULL,
  `Nm_peserta` varchar(40) NOT NULL,
  `Jekel` char(1) NOT NULL,
  `Alamat` varchar(60) NOT NULL,
  `No_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Id_peserta`, `Kd_skema`, `Nm_peserta`, `Jekel`, `Alamat`, `No_hp`) VALUES
(6, 'SKM-001', 'Aji Santoso', 'L', 'Jalan Antapani Wetan', '085123123124'),
(7, 'SKM-002', 'Julianto Iman', 'L', 'Jalan Sribaduga', '085231231212'),
(8, 'SKM-003', 'Sitya', 'P', 'Jalan Angkasa 2', '085763212342'),
(9, 'SKM-001', 'Arum Wicaksono', 'L', 'Jalan Tegalega Hilir', '085782023847');

-- --------------------------------------------------------

--
-- Table structure for table `skema`
--

CREATE TABLE `skema` (
  `Kd_skema` varchar(11) NOT NULL,
  `Nm_skema` varchar(60) NOT NULL,
  `Jenis` varchar(6) NOT NULL,
  `Jml_unit` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skema`
--

INSERT INTO `skema` (`Kd_skema`, `Nm_skema`, `Jenis`, `Jml_unit`) VALUES
('SKM-001', 'Junior Web Developer', 'KKNI', 6),
('SKM-002', 'Digital Marketing', 'Cluste', 10),
('SKM-003', 'Desainer Multimedia Muda', 'KKNI', 10),
('SKM-004', 'Network Adminitstrator Muda', 'KKNI', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`Id_peserta`),
  ADD KEY `peserta_kd_skema_foreign` (`Kd_skema`);

--
-- Indexes for table `skema`
--
ALTER TABLE `skema`
  ADD PRIMARY KEY (`Kd_skema`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `Id_peserta` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peserta`
--
ALTER TABLE `peserta`
  ADD CONSTRAINT `peserta_kd_skema_foreign` FOREIGN KEY (`Kd_skema`) REFERENCES `skema` (`Kd_skema`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
