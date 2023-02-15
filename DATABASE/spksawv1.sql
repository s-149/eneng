-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2020 at 07:51 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spksawv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_matrik`
--

CREATE TABLE `tbl_matrik` (
  `id_matrik` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `kriteria1_pekerjaan` int(11) NOT NULL,
  `kriteria2_penghasilan` int(11) NOT NULL,
  `kriteria3_jenis_rumah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_matrik`
--

INSERT INTO `tbl_matrik` (`id_matrik`, `nik`, `kriteria1_pekerjaan`, `kriteria2_penghasilan`, `kriteria3_jenis_rumah`) VALUES
(51, 7899332, 90, 55, 70),
(50, 5678, 70, 55, 90),
(49, 1234, 80, 80, 90),
(53, 34234, 60, 65, 50),
(54, 9234, 70, 10, 50);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_warga`
--

CREATE TABLE `tbl_warga` (
  `nik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_warga`
--

INSERT INTO `tbl_warga` (`nik`, `nama`, `alamat`) VALUES
(7899332, 'Erwin', 'Mojok'),
(5678, 'Gilang', 'Gresi'),
(1234, 'Dwi', 'Sumen'),
(34234, 'Ibnul', 'Pamek'),
(9234, 'Keke', 'Jambi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_matrik`
--
ALTER TABLE `tbl_matrik`
  ADD PRIMARY KEY (`id_matrik`);

--
-- Indexes for table `tbl_warga`
--
ALTER TABLE `tbl_warga`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_matrik`
--
ALTER TABLE `tbl_matrik`
  MODIFY `id_matrik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
