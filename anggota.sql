-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 01:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(100) NOT NULL,
  `nidn` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `username` text NOT NULL,
  `waktu` datetime NOT NULL,
  `gaji` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `nidn`, `nama`, `username`, `waktu`, `gaji`) VALUES
(1, '12345', 'Jughead', '', '0000-00-00 00:00:00', '1875000'),
(2, '123', 'Shereen', '', '2021-04-04 15:34:01', '1875000'),
(3, '123', ' Shereen', '', '2021-04-04 15:35:03', '10000000'),
(4, '123', ' Shereen', '', '2021-04-04 15:43:21', '1875000'),
(5, '123', '  Shereen', '', '2021-04-04 15:44:32', '3875000'),
(6, '123', '   Shereen', '', '2021-04-04 15:52:05', '5875000'),
(7, '123', '    Shereen', '', '2021-04-04 22:00:10', '10875000'),
(8, '123', '     Shereen', '', '2021-04-04 22:00:48', '10875000'),
(9, '123', '      Shereen', '', '2021-04-04 22:04:47', '19000000'),
(10, '123', '      Shereen', '', '2021-04-04 22:05:24', '22250000'),
(11, '123', '       Shereen Beatrix', '', '2021-04-05 07:39:19', '22250000'),
(12, '123', '        Shereen Beatrix', '', '2021-04-05 14:16:41', '29000000'),
(13, '12345', '        Shereen Beatrix', '', '2021-04-05 14:18:12', '22250000'),
(14, '12345', '        Shereen Beatrix', '', '2021-04-05 14:19:01', '22250000'),
(15, '123', '        Shereen Beatrix', '', '2021-04-05 14:20:23', '22250000'),
(16, '12345', '         Shereen Beatrix', '', '2021-04-05 14:21:20', '21125000'),
(17, '1861022', '         Shereen Beatrix', '', '2021-04-05 14:23:06', '22250000'),
(18, '123', '         Shereen Beatrix', '', '2021-04-05 14:35:46', '21125000'),
(19, '123', '          Shereen Beatrix', '', '2021-04-05 14:35:57', '21125000'),
(20, '123', '           Shereen Beatrix', '', '2021-04-05 14:39:47', '20875000'),
(21, '1234', 'Betty', '', '2021-04-05 14:44:28', '1875000'),
(22, '1234', ' Betty', '', '2021-04-05 14:44:38', '10000000'),
(23, '1234', ' Betty', '', '2021-04-05 14:44:51', '3000000'),
(24, '1234', '  Betty', '', '2021-04-05 14:45:03', '10000000'),
(25, '123', '            Shereen Beatrix', 'shereen', '2021-04-05 15:11:37', '29000000'),
(26, '123', '             Shereen Beatrix', 'shereen', '2021-04-05 15:12:07', '10250000'),
(27, '1234', '  Betty', 'bettycooper', '2021-04-05 15:13:39', '9500000'),
(28, '1234', '   Betty', 'bettycooper', '2021-04-05 15:14:12', '13000000'),
(29, '123', '              Shereen Beatrix', 'shereen', '2021-04-05 15:15:47', '11000000'),
(30, '1234', '    Betty', 'bettycooper', '2021-04-05 15:19:38', '7000000'),
(31, '1234', '     Betty', 'bettycooper', '2021-04-05 15:21:23', '14000000'),
(32, '123', '              Shereen Beatrix', 'shereen', '2021-04-05 15:21:43', '4750000'),
(33, '1234', '     Betty', 'bettycooper', '2021-04-05 15:22:21', '14000000'),
(34, '123', '               Shereen Beatrix', 'shereen', '2021-04-05 15:22:29', '11500000'),
(35, '123', '                Shereen Beatrix', 'shereen', '2021-04-05 15:22:40', '12000000'),
(36, '123', '                Shereen Beatrix', 'shereen', '2021-04-05 15:44:03', '12000000'),
(37, '123', '                 Shereen Beatrix', 'shereen', '2021-04-05 15:44:42', '13000000'),
(38, '123', '                  Shereen Beatrix', 'shereen', '2021-04-05 16:32:51', '5750000'),
(39, '1234', '     Betty', 'bettycooper', '2021-04-05 16:35:58', '13000000'),
(40, '1234', '      Betty', 'bettycooper', '2021-04-05 17:06:25', '7500000'),
(41, '1234', '       Betty', 'shereen', '2021-04-05 17:08:05', '13000000'),
(42, '1234', '        Betty', 'shereen', '2021-04-05 17:08:24', '14000000'),
(43, '123', '                   Shereen Beatrix', 'shereen', '2021-04-05 17:08:32', '1295000'),
(44, '123', '                    Shereen Beatrix', 'bettycooper', '2021-04-05 17:08:56', '5750000'),
(45, '1234', '        Betty', 'bettycooper', '2021-04-05 17:09:06', '14000000'),
(46, '1234', '        Betty', 'bettycooper', '2021-04-05 17:09:14', '13500000'),
(47, '1234', '         Betty', 'bettycooper', '2021-04-05 17:09:29', '14500000'),
(48, '123', '                     Shereen Beatrix', 'bettycooper', '2021-04-05 17:09:37', '12500000'),
(49, '123', '                      Shereen Beatrix', 'bettycooper', '2021-04-05 17:09:48', '13500000'),
(50, '1861022', ' Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:16:00', '11000000'),
(51, '1861022', '  Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:17:11', '12000000'),
(52, '123', 'Betty', 'shereenbeatrix7@gmail.com', '2021-04-05 17:17:57', '10000000'),
(53, '123', ' Betty', 'shereenbeatrix7@gmail.com', '2021-04-05 17:18:08', '4000000'),
(54, '1861022', '  Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:18:21', '12000000'),
(55, '1861022', '  Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:19:10', '5500000'),
(56, '123', '  Betty', 'bettycooper@gmail.com', '2021-04-05 17:19:30', '10000000'),
(57, '123', '  Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:22:41', '3375000'),
(58, '123', '   Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:22:53', '10500000'),
(59, '123', '   Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:23:00', '10500000'),
(60, '123', '   Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:33:34', '3750000'),
(61, '123', '    Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:34:01', '10500000'),
(62, '1861022', '   Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:34:12', '5900000'),
(63, '1861022', '    Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:34:48', '7400000'),
(64, '123', '    Betty Cooper', 'bettycooper@gmail.com', '2021-04-05 17:35:03', '11050000'),
(65, '1861022', '     Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:35:24', '13900000'),
(66, '123', '     Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:39:17', '11800000'),
(67, '123', '     Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:39:25', '11300000'),
(68, '123', '      Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:39:35', '11800000'),
(69, '1861022', '     Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:39:41', '7900000'),
(70, '1861022', '      Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:40:04', '6775000'),
(71, '123', '      Betty Cooper', 'bettycooper@gmail.com', '2021-04-05 17:40:10', '11800000'),
(72, '123', '      Betty Cooper', 'bettycooper@gmail.com', '2021-04-05 17:40:24', '10800000'),
(73, '1861022', '       Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:41:03', '13900000'),
(74, '123', '       Betty Cooper', 'bettycooper@gmail.com', '2021-04-05 17:41:16', '8280000'),
(75, '1861022', '       Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:41:37', '13900000'),
(76, '1861022', '       Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:41:45', '13900000'),
(77, '1861022', '        Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:42:30', '13900000'),
(78, '1861022', '        Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:42:42', '13900000'),
(79, '1861022', '         Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:43:19', '14900000'),
(80, '123', '        Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:43:33', '8050000'),
(81, '123', '         Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:44:38', '9050000'),
(82, '123', '         Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:45:21', '9050000'),
(83, '123', '         Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:47:09', '9050000'),
(84, '123', '         Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:47:26', '8080000'),
(85, '123', '          Betty Cooper', 'bettycooper@gmail.com', '2021-04-05 17:49:22', '9080000'),
(86, '1861022', '         Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-05 17:54:59', '16580000'),
(87, '123', '          Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-05 17:55:23', '8090000'),
(88, '1861022', '          Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 17:56:34', '5955000'),
(89, '123', '           Betty Cooper', 'bettycooper@gmail.com', '2021-04-05 17:56:51', '9500000'),
(90, '1861022', '           Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-05 18:01:47', '13330000'),
(91, '123345', '            Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 18:34:52', '9500000'),
(92, '1234', '            Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 18:41:48', '9500000'),
(93, '12345', 'Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 18:42:09', '9500000'),
(94, '12345', 'Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 18:43:12', '9500000'),
(95, '1234', '            Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 18:57:28', '9500000'),
(96, '1861022SBA', '            Shereen Beatrix', 'shereenbeatrix7@gmail.com', '2021-04-10 18:58:35', '13330000'),
(97, '1861022', '             Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-10 19:04:10', '13330000'),
(98, '114148', '             Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 19:09:27', '13000000'),
(99, '1861022', '              Shereen Beatrix', 'bettycooper@gmail.com', '2021-04-10 19:10:54', '18250000'),
(100, '114148', '              Betty Cooper', 'bettycooper@gmail.com', '2021-04-10 19:11:52', '2550000'),
(101, '1812345', '               Betty Cooper', 'shereenbeatrix7@gmail.com', '2021-04-10 19:23:12', '2550000');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_anggota`
--

CREATE TABLE `tabel_anggota` (
  `nidn` varchar(50) NOT NULL,
  `nama` text NOT NULL,
  `tempat` text NOT NULL,
  `lahir` date NOT NULL,
  `telepon` text NOT NULL,
  `pendidikan` enum('S1','S2','S3') NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `keahlian` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `tunjangan_golongan` text NOT NULL,
  `tunjangan_pangkat` text NOT NULL,
  `pengalaman` text NOT NULL,
  `gaji_pokok` text NOT NULL,
  `total` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_anggota`
--

INSERT INTO `tabel_anggota` (`nidn`, `nama`, `tempat`, `lahir`, `telepon`, `pendidikan`, `jenis_kelamin`, `keahlian`, `username`, `password`, `tunjangan_golongan`, `tunjangan_pangkat`, `pengalaman`, `gaji_pokok`, `total`) VALUES
('1812345', '               Betty Cooper', 'Inggris', '2021-04-05', '08123456789', 'S2', 'Wanita', 'Networking, Database, ', 'bettycooper@gmail.com', '123', '4A', 'L', 'Reporter', '800000', '2550000'),
('1861022', '              Shereen Beatrix', 'Ujung Pandang', '1999-08-18', '082340626869', 'S1', 'Wanita', 'Programming, Networking, ', 'shereenbeatrix7@gmail.com', '1861022', '3C', 'GB', 'Masih kuliah', '10000000', '18250000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabel_anggota`
--
ALTER TABLE `tabel_anggota`
  ADD PRIMARY KEY (`nidn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
