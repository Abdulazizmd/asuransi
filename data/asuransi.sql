-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2020 at 05:47 PM
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
-- Database: `asuransi`
--

-- --------------------------------------------------------

--
-- Table structure for table `agen`
--

CREATE TABLE `agen` (
  `id` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agen`
--

INSERT INTO `agen` (`id`, `id_supervisor`, `nama`) VALUES
(1, 4, 'Meliana Sari'),
(2, 4, 'Firdayati'),
(3, 1, 'Agus'),
(4, 1, 'Budi'),
(5, 2, 'Asep'),
(6, 3, 'Bambang');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_asuransi`
--

CREATE TABLE `jenis_asuransi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_asuransi`
--

INSERT INTO `jenis_asuransi` (`id`, `nama`, `keterangan`) VALUES
(1, 'Mitra Abadi', 'bla bla bla'),
(2, 'Mitra Mandiri', 'bla'),
(3, 'Mitra Beasiswa Berencana', 'bla bla'),
(4, 'Mitra Guru', 'Asuransi untuk guru');

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `nama`) VALUES
(1, 'Wiraswasta'),
(2, 'Pegawai Negeri Sipil'),
(3, 'Konsultan'),
(4, 'Ibu Rumah Tangga'),
(5, 'Guru');

-- --------------------------------------------------------

--
-- Table structure for table `polis`
--

CREATE TABLE `polis` (
  `id` int(11) NOT NULL,
  `no_polis` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `id_pekerjaan` int(11) DEFAULT NULL,
  `nama_tertanggung` varchar(255) DEFAULT NULL,
  `uang_pertanggungan` int(11) DEFAULT NULL,
  `id_jenis_asuransi` int(11) DEFAULT NULL,
  `premi` int(11) DEFAULT NULL,
  `id_agen` int(11) DEFAULT NULL,
  `id_supervisor` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `polis`
--

INSERT INTO `polis` (`id`, `no_polis`, `nama`, `alamat`, `id_pekerjaan`, `nama_tertanggung`, `uang_pertanggungan`, `id_jenis_asuransi`, `premi`, `id_agen`, `id_supervisor`, `tanggal`) VALUES
(1, 21511111, 'Endang Yulidarti', 'Bandung', 1, 'Yulidarti', 5000000, 1, 1000000, 1, 4, '2020-04-01'),
(2, 21511112, 'Arsatina', 'Bandung', 2, 'Tina', 10000000, 2, 2000000, 2, 4, '2020-04-02'),
(3, 21511113, 'Asrun Sany', 'Jakarta', 3, 'Sany', 8000000, 3, 500000, 3, 1, '2020-04-03'),
(4, 21511114, 'Theresia Ervina', 'Jakarta', 3, 'Ervina', 70000000, 2, 10000000, 6, 3, '2020-04-04'),
(5, 21511115, 'Litha Novia Sari', 'Bandung', 4, 'Sari', 3000000, 3, 300000, 6, 3, '2020-04-04'),
(6, 21511116, 'Novi Yenni', 'Cimahi', 1, 'Yenni', 5000000, 2, 200000, 6, 3, '2020-04-04'),
(7, 21511119, 'Desmon Irawan', 'Bandung', 5, 'Irawan', 8000000, 4, 1000000, 5, 2, '2020-04-03'),
(8, 21511121, 'Esti Ratnasari', 'Bandung', 5, 'Ratnasari', 6000000, 4, 600000, 5, 2, '2020-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `nama`) VALUES
(1, 'Suhermanto'),
(2, 'Dwi Ritawati'),
(3, 'Rosnely'),
(4, 'Lily Nurnila');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_user_role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `id_supervisor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_user_role`, `status`, `id_supervisor`) VALUES
(1, 'admin', '$2y$13$5Myme6HMZNEDxaHsZEZtOeR2HpNXgDh7dLdGqHKkEs3iM3oM9NAOu', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `nama`) VALUES
(1, 'Admin'),
(2, 'Supervisor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agen`
--
ALTER TABLE `agen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_asuransi`
--
ALTER TABLE `jenis_asuransi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polis`
--
ALTER TABLE `polis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agen`
--
ALTER TABLE `agen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jenis_asuransi`
--
ALTER TABLE `jenis_asuransi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `polis`
--
ALTER TABLE `polis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
