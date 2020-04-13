-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 10:26 AM
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
-- Database: `wfh-dispusip`
--

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `nama`) VALUES
(1, 'I A'),
(2, 'I B'),
(3, 'I C'),
(4, 'I D'),
(5, 'II A'),
(6, 'II B'),
(7, 'II C'),
(8, 'II D'),
(9, 'III A'),
(11, 'III B'),
(12, 'III C'),
(13, 'III D'),
(14, 'IV A'),
(15, 'IV B'),
(16, 'IV C'),
(17, 'IV D');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_induk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`, `id_induk`) VALUES
(1, 'Kepala Dinas', NULL),
(2, 'Kepala Sub Bagian Umum dan Kepegawaian', NULL),
(3, 'Kepala Bidang Pengembangan Perpustakaan dan Pembudayaan Kegemaran Membaca', NULL),
(4, 'Kepala Bidang Kearsipan', NULL),
(5, 'Kepala Seksi Pembinaan dan Pengawasan Kearsipan', NULL),
(6, 'Kepala Bidang Pengolahan Layanan dan Pelestarian Bahan Perpustakaan', NULL),
(7, 'Kepala Sub Bagian Program dan Keuangan', NULL),
(8, 'Kepala Seksi Pengelolaan Arsip', NULL),
(9, 'Kepala Seksi Layanan, Otomasi dan Kerjasama Perpustakaan', NULL),
(10, 'Kepala Seksi Pengembangan Pembudayaan Kegemaran Membaca', NULL),
(11, 'Kepala Seksi Pengembangan Koleksi, Pengolahan dan Pelestarian Perpustakaan', NULL),
(12, 'Kepala Seksi Pembinaan dan Pengembangan Perpustakaan', NULL),
(13, 'PUSTAKAWAN AHLI PERTAMA', NULL),
(14, 'Pelaksana - Pengadministrasi Keuangan', NULL),
(15, 'Pelaksana - Pengadministrasi Kepegawaian', NULL),
(16, 'OPERATOR SISTEM APLIKASI KEUANGAN', NULL),
(17, 'OPERATOR BMD', NULL),
(18, 'PENGELOLA PERPUSTAKAAN (PUSTAKAWAN)', NULL),
(19, 'OPERATOR SISTEM APLIKASI PERPUSTAKAAN (INLISLite)', NULL),
(20, 'OPERATOR KEPEGAWAIAN', NULL),
(21, 'PETUGAS KEAMANAN', NULL),
(22, 'PENGELOLA KEARSIPAN', NULL),
(23, 'OPERATOR SIKN/JIKN', NULL),
(24, 'PENYULUH PERPUSTAKAAN', NULL),
(25, 'PENGAWAS PERPUSTAKAAN', NULL),
(26, 'PENGADMINISTRASI UMUM/SURAT MENYURAT', NULL),
(27, 'PENGEMUDI MOBIL LAYANAN PERPUSTAKAAN KELILING', NULL),
(28, 'OPERATOR PERENCANAAN', NULL),
(29, 'PETUGAS KEBERSIHAN', NULL),
(30, 'PENGADMINISTRASI/ PENGELOLA KEUANGAN', NULL),
(31, 'PENGEMUDI/SOPIR', NULL),
(32, 'Sekretaris Dinas', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `kegiatan` text NOT NULL,
  `keluaran` text,
  `berkas` varchar(255) DEFAULT NULL,
  `waktu_buat` datetime DEFAULT NULL,
  `waktu_ubah` datetime DEFAULT NULL,
  `id_user_buat` int(11) DEFAULT NULL,
  `id_user_ubah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `id_pegawai`, `tanggal`, `kegiatan`, `keluaran`, `berkas`, `waktu_buat`, `waktu_ubah`, `id_user_buat`, `id_user_ubah`) VALUES
(1, 1, '2020-04-01', 'Membuat Laporan', 'Laporan Akhir ', '5.+Pelatihan+Dan+Pendampingan+Pembuatan+Media+Pembelajaran+Berbasis+Web_01591244554.pdf', '2020-04-06 15:33:59', '2020-04-06 16:22:34', 1, 1),
(2, 1, '2020-04-05', 'Tes', 'Tidak Ada', '', '2020-04-06 15:54:10', '2020-04-06 15:54:10', 1, 1),
(3, 2, '2020-04-01', 'Membuat Program', 'Program Baru', '41591244534.pdf', '2020-04-06 16:22:14', '2020-04-06 16:22:14', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_golongan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `nama`, `nip`, `id_jabatan`, `id_golongan`) VALUES
(1, 'H. TATANG SUHERMAN, SH., M.Si', '196306061997031004', 1, 16),
(2, 'Drs. TAUFIK ROHMAN', '196308251985031006', 2, 15),
(3, 'H. USEP EPENDI, S.Pd., M.Pd', '197105281995121001', 32, 15),
(4, 'DEDE SUCI SONDARI, S.Sos', '196806241992032013', 3, 14),
(5, 'DEDE HARYADI, S.Pd', '196208031981121002', 4, 14),
(6, 'SOFYAN, A.KS', '197212031998031004', 5, 13),
(7, 'SOLIHUDIN, S.Ag, M.Pd', '197701032009011001', 6, 13),
(8, 'ATIKAH', '196509241989032004', 7, 13),
(9, 'SARIP HIDAYAT, S.Pd.I', '196712121990031009', 8, 13),
(10, 'SUTIAH', '196302251986032009', 9, 13),
(11, 'HENGKY PAICE HERMANSYAH, S.Sos., MM', '198406242011011001', 10, 12),
(12, 'YANA WARDIANA, S.Sos', '197506122009011004', 11, 12),
(13, 'DEDI HERYADI, S.IP', '197507252008011006', 12, 11),
(14, 'MUH IHSAN S, S.I.P.', '199309192019031006', 13, 9),
(15, 'RIVIANTI MAHARANI PUTRI, A.Md', '198801242015032001', 14, 8),
(16, 'ULI', '197105102007011008', 15, 8),
(18, 'DEDI SUPRIADI', '-', 16, NULL),
(19, 'DEDE RUSPANDI, S.E', '122019080001', 17, NULL),
(20, 'RIRI PRANATARI ALIYUN', '122019080002', 18, NULL),
(21, 'DINNI SURI LESTARI, S.IP', '122019080003', 19, NULL),
(22, 'DEDE SRI NURWATI, S.Pd', '122019080004', 18, NULL),
(23, 'NOER PARID MUNANDAR, S.Kom', '122019080005', 20, NULL),
(24, 'RAMDAN NURJANA', '122019080006', 21, NULL),
(25, 'AI SIFA ZAKIAH SOFA', '122019080007', 18, NULL),
(26, 'GUNARI ARIF JOHANDI, S.I.Pust', '122019080008', 22, NULL),
(27, 'SITI ATIKAH, S.E', '122019080009', 23, NULL),
(28, 'MELLA YULIA AGUSTINE, S.Pd', '122019080011', 24, NULL),
(29, 'TIA SANTIANI, S.I.Pust', '122019080012', 25, NULL),
(30, 'TOPAN SURGAWAN, S.Pd', '122019080013', 24, NULL),
(31, 'SINTA NURMELINDA', '122019080014', 26, NULL),
(32, 'INA ROHAENI, S.Pd', '122019080015', 18, NULL),
(33, 'REZA JUNIAWAN, S.IP', '122019080016', 27, NULL),
(34, 'BAMBANG SETIA PUTRA, S.E', '122019080017', 23, NULL),
(35, 'LINA YULIA NURFAADHILAH', '122019080018', 22, NULL),
(36, 'LU LUUL AENI', '122019080019', 25, NULL),
(37, 'NOVI LIA NURAENI', '122019080020', 18, NULL),
(38, 'AMAR NAWAWI, ST', '122019080022', 28, NULL),
(39, 'HARTO IRMANSYAH, S.I.Pust', '122019080023', 18, NULL),
(40, 'RISMA ADIKA PRATAMA', '122019080025', 29, NULL),
(41, 'YADI MAULANA', '122020030024', 21, NULL),
(42, 'KRISTIANTI AGUSTINAWATI, S.Pd', '122020030025', 30, NULL),
(43, 'DADANG MAULANA YUSUF', '122020030026', 31, NULL),
(44, 'ELA ROSELA', '122020030027', 29, NULL),
(45, 'M. FAUZAN AZIMAH', '122020030028', 18, NULL),
(46, 'WIWIT PURWANTI', '122020030029', 18, NULL),
(47, 'ELDI ANDIWINATA, S.Pd', '122020030030', 18, NULL);

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
  `id_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `id_user_role`, `status`, `id_pegawai`) VALUES
(1, 'admin', '$2y$13$5Myme6HMZNEDxaHsZEZtOeR2HpNXgDh7dLdGqHKkEs3iM3oM9NAOu', 1, 1, NULL),
(5, '196306061997031004', '$2y$13$40tbQfL0AKipx0pINbNpbOf17GtLM8axVAB88CrBOfpjROcxCd9sG', 2, NULL, 1),
(6, '196308251985031006', '$2y$13$ZzNLSqqzTa2ZxnQMkIUxOOS5v1OtbBuFIJUk.htFu9OrSnpezLEie', 2, NULL, 2),
(7, '197105281995121001', '$2y$13$iixFW24kd4IbgJ1yPpj7juipI0l851U.Dn4zvfBuJx2kQ7Bw2tmaC', 2, NULL, 3),
(8, '196806241992032013', '$2y$13$dgprJvntdSZaFPNe0GPE3OXp3uQEylElxfpuPR03KI7gEt0K9gAuG', 2, NULL, 4),
(9, '196208031981121002', '$2y$13$Oa/2RVBCCin7eOyW/tsSTOmMSLggR61Kv4UKpYh1hIQ9S/wQ2eUXC', 2, NULL, 5),
(10, '197212031998031004', '$2y$13$AZABFSimGAoz4fOoeN.c4uE54kUfbkOix2zKfSv.zXhFSI/KaYUA.', 2, NULL, 6),
(11, '197701032009011001', '$2y$13$yymFKf5IVVcTO5aoHd3Wm.i9keqdsYZ8z.iN2WI4la5Ih2K8sPTDO', 2, NULL, 7),
(12, '196509241989032004', '$2y$13$2Q.nG4IRuO7MPgkpltcCJujRRfCFkeGSOGWZ.sZG/pXHyXukqWgGa', 2, NULL, 8),
(13, '196712121990031009', '$2y$13$SCJWwP.YN0FLw9YHms4chelkEqi27O5Es94VCL.ZQfe734NVD1AuG', 2, NULL, 9),
(14, '196302251986032009', '$2y$13$fy5Q4FVKSfN4ca7ApGl2Zu9s1f4fDn6yP4CoNG6Rbkb15qzW1V.lK', 2, NULL, 10),
(15, '198406242011011001', '$2y$13$LqRgUAfk21rElyc/aTXTXu//ZheDBnPoUY376tz55HYvbm3zLwN9G', 2, NULL, 11),
(16, '197506122009011004', '$2y$13$SkOIYQu07noGMd1wi0IpBuHekSsSiQp/9jtIL4zHljnpsEy.3IcEe', 2, NULL, 12),
(17, '197507252008011006', '$2y$13$BOHoWybFyMfBv9fHfeyzRuaFM4Lne1TKseUnDKkaVwS8ksDh/TZOq', 2, NULL, 13),
(18, '199309192019031006', '$2y$13$gEFYok/D2uVVG6khF0dTSuBcD5KQJKWTw3PWvTyn4QdGPk6wm0yZe', 2, NULL, 14),
(19, '198801242015032001', '$2y$13$hzUFMtO1wUlGBDHOHh3hHunSUYSJ145cQ3PVcg8e1Cqk7TzvAlv9m', 2, NULL, 15),
(20, '197105102007011008', '$2y$13$DEWBkWV5sfEgYB7tiwSh3utUUVloAaawQ/rfSQtIpZnz24Eu6L3xW', 2, NULL, 16),
(21, 'dedi-supriadi', '$2y$13$fYVATDx6nmE.B0c1UyIoWeWv.WNEUkOaJxfkjvBF9LHCCK62H5qgG', 2, NULL, 18),
(22, '122019080001', '$2y$13$q2QwZ8PltgZlxxKAwWQiquOWoYXRwNwdsT9jufNmXG8MPOHGk8bA2', 2, NULL, 19),
(23, '122019080002', '$2y$13$zoWrjk.gYXEdcx5yicXJFuvpcbMAZpXnu2H1E.3x4gVfKlAYslKl2', 2, NULL, 20),
(24, '122019080003', '$2y$13$CfSlBmElQe3pwI.rpFvieO/I1kHlUi7uGFtbrLGb5iej6Ta6uwu2O', 2, NULL, 21),
(25, '122019080004', '$2y$13$yqCECyaezbMbqIsMSGPAVe2CI5w20yureXzQu0MevBWkfOcY0BCBO', 2, NULL, 22),
(26, '122019080005', '$2y$13$lp93MzT2UreMHfcl/yP.K.BX/AiNyfvVqsqW8hpMF8aNjT0rw5b6e', 2, NULL, 23),
(27, '122019080006', '$2y$13$npdO8gAgLAengzCu3lhCteTxQOUwGtkFGfAXHz67clKjp3w.567Y2', 2, NULL, 24),
(28, '122019080007', '$2y$13$cTkAAHBdd8sttVxJegEc6esY/8e3RyXedqAcFJW4eTHDOnaFJVO4G', 2, NULL, 25),
(29, '122019080008', '$2y$13$Uv3CRGY8n5eRU.j8n7eogeC77cwDhtvWCZ74JKzwULkWGz.J.5dOe', 2, NULL, 26),
(30, '122019080009', '$2y$13$5BPILxb1jKGsfKCRsrDSRu0lez8pCGryK1qpw6rEcwU2egdhCwRtC', 2, NULL, 27),
(31, '122019080011', '$2y$13$3fenKRUdi.UWvu18ISsAw.SKmPvoQDMNbuE3svcn7mQu68EBIB8x2', 2, NULL, 28),
(32, '122019080012', '$2y$13$c9P.5htJn/0SWS7xL05Rpe.W.CYL6cXQ7hztVefyhDXGqIyR8Kgja', 2, NULL, 29),
(33, '122019080013', '$2y$13$Ce.dxsoTtmdJAxJydm2.H.ae8tuzrCXJsa9tjqJRfrwkU59DDWdza', 2, NULL, 30),
(34, '122019080014', '$2y$13$BP7yqu9apWMBlXL9CIYs6.SMUYzuiuDTlP.Di5r1X04ChWmD3cJVS', 2, NULL, 31),
(35, '122019080015', '$2y$13$vKWGyknu54yD3IUqMgcmMOk20UbDbCcor/VyqT0RSWhxBLkpWoMgG', 2, NULL, 32),
(36, '122019080016', '$2y$13$WQPfC8zrFdWRNIymmZZAfOQ5Bi65aIgkjFyYWe2YOfslggnQcLDdm', 2, NULL, 33),
(37, '122019080017', '$2y$13$oEoLb6KAd1ngM/nXFM57y.Dvu.3QVNlVE.LP9XXdhEjd8Cb4C1mCC', 2, NULL, 34),
(38, '122019080018', '$2y$13$bmfSYBCxkKGj27KWrT.1GOFTel4QPz46.IA93xMeEaJlNM9P/OSzO', 2, NULL, 35),
(39, '122019080019', '$2y$13$CVKSnH7u/GtLMDr0MiJmgewEHKIeASWjDVNDWr2onoXQbi0N1jl.W', 2, NULL, 36),
(40, '122019080020', '$2y$13$sagKahahOkLBhxdfx.aqmeyN61bfuV9ps6LNzccgcqmRFVk3rfLXy', 2, NULL, 37),
(41, '122019080022', '$2y$13$uwzHMI0mDOovqBD7Go6wSO7g3rxxWpb5sDtQ7SZ5zpLi0VlkOYiYC', 2, NULL, 38),
(42, '122019080023', '$2y$13$LE8lLwiIHe6JoURTsRWmz.AWfLIx.bPvPJdR9ijdF7qUvgTK51STO', 2, NULL, 39),
(43, '122019080025', '$2y$13$CmNJyRbIpt/UBlpmNeCwXO17etkzCXomBVS2jiVXggeUys8FV.yTy', 2, NULL, 40),
(44, '122020030024', '$2y$13$RIDe0/eav9p3jUCVY3Ai7ORXwVZpaRpYIL5Zyw89RWTu1pk/K.BHW', 2, NULL, 41),
(45, '122020030025', '$2y$13$ZdZaE1mrqegwsyS4mvoT4OSNEXmm7Z1c1hSGzqjH71XPP79PFodKq', 2, NULL, 42),
(46, '122020030026', '$2y$13$ErFRvXKC0YhFG1mN1TnvWe4DCTvLtz0ZBQjxmSbaUwq.3KoJX9v.6', 2, NULL, 43),
(47, '122020030027', '$2y$13$.zcA1ice8uGjsX55AFrND.YhbWljfN/UFBgxFbrfeLLy02zcpccUa', 2, NULL, 44),
(48, '122020030028', '$2y$13$Mm79GmL7O8w5mTFVr5vHBeebiaUJIgJbuVKD/BGCsUcAM2awlCu0m', 2, NULL, 45),
(49, '122020030029', '$2y$13$lBk6Uapj57WmL23d0JpVy.oi.XIge9djiRwqmmqWLvl/xogLmtiU.', 2, NULL, 46),
(50, '122020030030', '$2y$13$u3vJvd23k7a.joX1.2sPmO9uygSTbl1cr4ix3/MeQdo3wvbwIN86K', 2, NULL, 47);

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
(2, 'Pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
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
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
