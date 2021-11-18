-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2021 at 04:33 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hosting`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_hosting`
--

CREATE TABLE `data_hosting` (
  `nama` char(30) DEFAULT NULL,
  `email` char(30) DEFAULT NULL,
  `username` char(30) DEFAULT NULL,
  `subdomain` char(30) DEFAULT NULL,
  `password` char(30) DEFAULT NULL,
  `konfirmasi` char(30) DEFAULT NULL,
  `package` char(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_hosting`
--

INSERT INTO `data_hosting` (`nama`, `email`, `username`, `subdomain`, `password`, `konfirmasi`, `package`) VALUES
('yusa', 'yusa82401@gmail.com', 'iqbal', 'yshost', 'yusa', 'yusa', 'Package 500mb'),
('iqbal musyaffa', 'iqbalmusyaffa122@gmail.com', 'iqbal8523', 'tukanghardware', 'yusa1256', 'yusa1256', 'Package 500mb'),
('iqbal musyaffa', 'haniah@gmail.com', 'nanang', 'yusa', '12345678', '12345678', 'Package 500mb'),
('ojsjsjj', 'marcelflegel@gmx.de', 'lutfi', 'galuh', '125689', '125689', 'Package 250mb'),
('azka', 'yusa61891@gmail.com', 'galuhnanang', 'iqbalmusyaffa', 'yusa65', 'yusa65', 'Package 250mb'),
('hhhh', 'yusa.gmai.com', 'iqbal8523', 'galuhiqbal', 'galuh2020', 'galuh2020', 'Package 250mb'),
('vionata', 'indonesiaysgamer@gmail.com', 'yusahost', 'yusa-cbt', 'yusa45', 'yusa45', 'Package 500mb'),
('gajah', 'azkagaming@gmail.com', 'azka01', 'cobalagi', 'azka12', 'azka12', 'Package 500mb'),
('nanang sumanto', 'vaniadelicia67@gmail.com', 'vania', 'vania', 'vania', 'vania', 'Package 500mb'),
('fania', 'faniadaniah@gmail.com', 'iqbal', 'fania', 'fania', 'fania', 'Package 500mb'),
('saya', 'yusa.gmai.com', '0027300736', 'shoppe', 'saya', 'saya', 'Package 500mb'),
('azkagaming12', 'azkagaming12@gmail.com', 'azkagaming', 'azkagaming', 'azkagaming', 'azkagaming', 'Package 500mb'),
('tania gania', 'indonesiaysgamer@gmail.com', 'yusa121212', 'tania', '111111', '1111111', 'Package 250mb'),
('', '', '', '', '', '', 'Package 250mb'),
('vania denisia', 'indonesiaysgamer@gmail.com', 'vania ddee', 'jaluh', '83728894254', '872382397233', 'Package 1 GB'),
('Galuh taniab', 'hostingfaster905@gmail.com', 'Yusag', 'Fabbs', 'jsjsbshjsh', 'jaiahbshdj', 'Package 1 GB');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
