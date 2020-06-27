-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 03:28 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `provkab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten_tb`
--

CREATE TABLE `kabupaten_tb` (
  `id` int(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `provinsi_id` int(30) NOT NULL,
  `diresmikan` date NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kabupaten_tb`
--

INSERT INTO `kabupaten_tb` (`id`, `nama`, `provinsi_id`, `diresmikan`, `foto`) VALUES
(8, 'Jakarta Pusat', 3, '1978-08-28', 'jakartapusat.jpg'),
(9, 'Aceh Singkil', 2, '1999-04-20', 'acehsingkil.png'),
(10, 'Aceh Tamiang', 2, '2002-04-10', 'acehtamiang.png'),
(11, 'Lampung Barat', 1, '1991-01-16', 'lampungbarat.jpg'),
(12, 'Lampung Selatan', 1, '1954-11-14', 'lampungselatan.png'),
(101, 'Jakarta Barat', 3, '1978-08-28', 'jakartabarat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi_tb`
--

CREATE TABLE `provinsi_tb` (
  `id` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `diresmikan` date NOT NULL,
  `foto` varchar(50) NOT NULL,
  `pulau` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi_tb`
--

INSERT INTO `provinsi_tb` (`id`, `nama`, `diresmikan`, `foto`, `pulau`) VALUES
(1, 'Lampung', '1964-03-18', 'lampung.png', 'sumatra'),
(2, 'Aceh', '1956-12-07', 'aceh.png', 'sumatra'),
(3, 'Jakarta', '1527-06-22', 'jakarta.png', 'Jawa'),
(4, 'yogyakarta', '1950-03-04', 'yogyakarta.png', 'jawa'),
(5, 'papua', '1963-05-01', 'papua.png', 'papua'),
(6, 'papua barat', '1999-10-04', 'papuabarat.png', 'papua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kabupaten_tb`
--
ALTER TABLE `kabupaten_tb`
  ADD PRIMARY KEY (`id`),
  ADD KEY `provinsi_id` (`provinsi_id`);

--
-- Indexes for table `provinsi_tb`
--
ALTER TABLE `provinsi_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kabupaten_tb`
--
ALTER TABLE `kabupaten_tb`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `provinsi_tb`
--
ALTER TABLE `provinsi_tb`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kabupaten_tb`
--
ALTER TABLE `kabupaten_tb`
  ADD CONSTRAINT `kabupaten_tb_ibfk_1` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi_tb` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
