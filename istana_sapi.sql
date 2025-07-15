-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 10:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `istana_sapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarpakan`
--

CREATE TABLE `tbdaftarpakan` (
  `id_pakan` int(11) NOT NULL,
  `jenis_pakan` varchar(25) NOT NULL,
  `jumlah_pakan` varchar(10) NOT NULL,
  `pakan_perhari` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftarpakan`
--

INSERT INTO `tbdaftarpakan` (`id_pakan`, `jenis_pakan`, `jumlah_pakan`, `pakan_perhari`) VALUES
(7, 'Jerami Fermentasi', '400 kg', '25 kg/sapi');

--
-- Triggers `tbdaftarpakan`
--
DELIMITER $$
CREATE TRIGGER `before_insert_pakan` BEFORE INSERT ON `tbdaftarpakan` FOR EACH ROW BEGIN
    SET NEW.jumlah_pakan = CONCAT(NEW.jumlah_pakan, ' kg');
    SET NEW.pakan_perhari = CONCAT(NEW.pakan_perhari, ' kg/sapi');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbdaftarsapi`
--

CREATE TABLE `tbdaftarsapi` (
  `id_sapi` int(3) NOT NULL,
  `nama_sapi` varchar(10) NOT NULL,
  `berat_sebelum` varchar(15) NOT NULL,
  `berat_sesudah` varchar(15) NOT NULL,
  `rasio_sapi` varchar(5) NOT NULL,
  `grade_sapi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbdaftarsapi`
--

INSERT INTO `tbdaftarsapi` (`id_sapi`, `nama_sapi`, `berat_sebelum`, `berat_sesudah`, `rasio_sapi`, `grade_sapi`) VALUES
(65, 'Sapi B1', '23 kg', '68 kg', '45 kg', 'Sudah Poel');

--
-- Triggers `tbdaftarsapi`
--
DELIMITER $$
CREATE TRIGGER `before_insert_rasio` BEFORE INSERT ON `tbdaftarsapi` FOR EACH ROW BEGIN
    SET NEW.rasio_sapi = CONCAT(NEW.berat_sesudah - NEW.berat_sebelum, ' kg');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_insert_sapi` BEFORE INSERT ON `tbdaftarsapi` FOR EACH ROW BEGIN
    SET NEW.berat_sebelum = CONCAT(NEW.berat_sebelum, ' kg');
    SET NEW.berat_sesudah = CONCAT(NEW.berat_sesudah, ' kg');
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_rasio_sapi_on_update` BEFORE UPDATE ON `tbdaftarsapi` FOR EACH ROW BEGIN
    SET NEW.rasio_sapi = CONCAT(NEW.berat_sesudah - NEW.berat_sebelum, ' kg');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `hak_akses` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `username`, `password`, `hak_akses`) VALUES
(1, 'admin', 'admin', 1),
(2, 'user', 'user', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbdaftarpakan`
--
ALTER TABLE `tbdaftarpakan`
  ADD PRIMARY KEY (`id_pakan`);

--
-- Indexes for table `tbdaftarsapi`
--
ALTER TABLE `tbdaftarsapi`
  ADD PRIMARY KEY (`id_sapi`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbdaftarpakan`
--
ALTER TABLE `tbdaftarpakan`
  MODIFY `id_pakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbdaftarsapi`
--
ALTER TABLE `tbdaftarsapi`
  MODIFY `id_sapi` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `kurangi_pakan_harian` ON SCHEDULE EVERY 1 DAY STARTS '2025-03-08 14:05:35' ON COMPLETION NOT PRESERVE ENABLE DO BEGIN
    UPDATE tbdaftarpakan 
    SET jumlah_pakan = CONCAT(GREATEST(jumlah_pakan - pakan_perhari, 0), ' kg');
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
