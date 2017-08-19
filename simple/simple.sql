-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2017 at 01:34 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple`
--

-- --------------------------------------------------------

--
-- Table structure for table `simple_akun`
--

CREATE TABLE `simple_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` text NOT NULL,
  `nama` varchar(64) NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_akun`
--

INSERT INTO `simple_akun` (`id`, `username`, `password`, `nama`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 0),
(2, 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'Pegawai Umum', 1),
(3, 'ruben', '32252792b9dccf239f5a5bd8e778dbc2', 'Ruben A. Siregar', 0);

-- --------------------------------------------------------

--
-- Table structure for table `simple_data`
--

CREATE TABLE `simple_data` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `tempat` varchar(64) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `isDone` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_data`
--

INSERT INTO `simple_data` (`id`, `nama`, `tempat`, `tanggal`, `jam`, `jumlah`, `keterangan`, `isDone`) VALUES
(1, 'GPTP V', 'Bandung', '01-04-2017', '11:11', 290, 'Opening', 1),
(2, 'GPTP VI', 'Bandung', '01-10-2017', '11:11', 300, 'Opening', 0),
(3, 'GPTP IV', 'Bandung', '01-10-2016', '11:11', 190, 'Opening', 1),
(5, 'asdZCzxc', 'asdZXc', 'asdZXc', 'asdZX', 12331, 'xzczxczx', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `simple_akun`
--
ALTER TABLE `simple_akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `simple_data`
--
ALTER TABLE `simple_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `simple_akun`
--
ALTER TABLE `simple_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `simple_data`
--
ALTER TABLE `simple_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
