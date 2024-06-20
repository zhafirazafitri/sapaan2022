-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2023 at 03:19 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `level`, `password`) VALUES
(1, 'admin', '1', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `instansi_tujuan`
--

CREATE TABLE `instansi_tujuan` (
  `id_instansi` int(11) NOT NULL,
  `nama_instansi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi_tujuan`
--

INSERT INTO `instansi_tujuan` (`id_instansi`, `nama_instansi`) VALUES
(14, 'Seksi Pengelolaan Opini Publik'),
(15, 'Seksi Pengelolaan Informasi Publik'),
(16, 'Seksi Layanan Informasi Publik'),
(17, 'Seksi Pengelolaan Media Komunikasi Publik'),
(18, 'Seksi Pelayanan Media Center dan Hubungan Media'),
(19, 'Seksi Sumber Daya Komunikasi Publik'),
(20, 'Seksi Teknologi dan Telekomunikasi'),
(21, 'Seksi Pengelolaan Data dan Statistik'),
(22, 'Seksi Persandian dan Keamanan Informasi'),
(23, 'Seksi Pengembangan Aplikasi dan Integrasi Sistem Informasi'),
(24, 'Seksi Infrastuktur E-Government'),
(25, 'Seksi Tata Kelola dan Pengembangan E-Government'),
(29, 'Command Center');

-- --------------------------------------------------------

--
-- Table structure for table `kritik_dan_saran`
--

CREATE TABLE `kritik_dan_saran` (
  `id_kritik_saran` int(11) NOT NULL,
  `kritik_saran` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritik_dan_saran`
--

INSERT INTO `kritik_dan_saran` (`id_kritik_saran`, `kritik_saran`) VALUES
(3, 'hhhhhhhhuhuhu');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_identitas` varchar(50) NOT NULL,
  `instansi_asal` varchar(100) NOT NULL,
  `ket` varchar(500) NOT NULL,
  `dokumen` varchar(500) NOT NULL,
  `tanggal_kunjungan` date NOT NULL,
  `jam_kunjungan` time NOT NULL,
  `id_instansi` int(11) NOT NULL,
  `id_mk` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`id_kunjungan`, `nama`, `no_identitas`, `instansi_asal`, `ket`, `dokumen`, `tanggal_kunjungan`, `jam_kunjungan`, `id_instansi`, `id_mk`, `id_status`, `created_at`, `updated_at`) VALUES
(78, 'Zhafira Zafitri', '09031382025125', 'Fasilkom Unsri', 'aaaaaa', '1673183199_3b0669124b9c4d0dceeb.pdf', '2023-01-09', '12:06:00', 23, 3, 2, '2023-01-08', '2023-01-08'),
(79, 'ZHAFIRA ZAFITRI F', '099999999999', 'Pribadi', 'wwwwww', '1673183271_3fd5503641f6c5c800b4.pdf', '2023-01-11', '20:10:00', 25, 7, 2, '2023-01-08', '2023-01-08'),
(80, 'Zafitri Zhafira', '09031382025125333', 'Pribadi', 'aaaa', '1673183624_6a5b47752f0e279743d7.pdf', '2023-01-25', '23:13:00', 19, 9, 4, '2023-01-08', '2023-01-08'),
(81, 'Fira Z', '32232121312112', 'Pribadi', 'wakwkjskqswa', '1673183695_5505e3e52451ad37a958.pdf', '2023-01-17', '10:14:00', 16, 11, 4, '2023-01-08', '2023-01-08'),
(82, 'Zaza ', '090909099121', 'Pribadi', 'oooooo', '1673183790_2da9e7dd9219229c180e.pdf', '2023-01-15', '11:15:00', 22, 8, 2, '2023-01-08', '2023-01-08'),
(83, 'Zetzett', '88187281121', 'Pribadi', 'wkakasa', '1673183872_9f35c6044c780419b55d.pdf', '2023-01-11', '08:30:00', 20, 6, 3, '2023-01-08', '2023-01-08'),
(84, 'Zhafira ZF', '123123123123', 'Pribadi', 'hhhhhh', '1673183929_2161bd2df05cc6f34669.pdf', '2023-01-23', '10:30:00', 18, 3, 2, '2023-01-08', '2023-01-08'),
(85, 'Zhafira Zaza', '090232131382025125', 'Pribadi', 'aeeee', '1673184020_0add38d0976179762083.pdf', '2023-01-17', '08:20:00', 14, 3, 2, '2023-01-08', '2023-01-08'),
(86, 'Zafira Zafitri', '090313331025125', 'pribadi', 'kkkkk', '1673184079_f099e841374082985589.pdf', '2023-02-01', '08:20:00', 24, 9, 3, '2023-01-08', '2023-01-08'),
(87, 'Zhafira Zafitri F', '090313820251255', 'Pribadi', 'awaqwqq', '1673184156_baa8e58587a9b4875604.pdf', '2023-01-08', '11:21:00', 18, 3, 4, '2023-01-08', '2023-01-08'),
(88, 'Zhafira Zafitri Zf', '09031382025325', 'Pribadi', 'okoqkqokqw', '1673184224_725ebffb0a890c142e41.pdf', '2023-01-10', '02:27:00', 25, 3, 2, '2023-01-08', '2023-01-08'),
(89, 'Zhafira Zafitri ', '01010010100', 'Pribadi', 'aaaaa', '1673184288_7158225f901e34208cbb.pdf', '2023-01-08', '08:24:00', 24, 7, 3, '2023-01-08', '2023-01-08'),
(90, 'Zhafira Zafitri Zz', '09031382025125', 'Fasilkom Unsri', 'aaa', '1673184729_3f2505107bb26c8380b1.pdf', '2023-01-09', '00:31:00', 15, 7, 2, '2023-01-08', '2023-01-08'),
(92, 'ZHAFIRA ZAFITRI', '090313820251251111', 'Pribadi', 'aaa', '1673366849_d09ac1d938aef54d7bb0.pdf', '2023-01-24', '23:10:00', 29, 7, 2, '2023-01-10', '2023-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `maksud_kunjungan`
--

CREATE TABLE `maksud_kunjungan` (
  `id_mk` int(11) NOT NULL,
  `mk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maksud_kunjungan`
--

INSERT INTO `maksud_kunjungan` (`id_mk`, `mk`) VALUES
(3, 'Tamu'),
(5, 'Konsultasi'),
(6, 'Studi Banding'),
(7, 'Koordinasi'),
(8, 'Kirim Barang'),
(9, 'Peminjaman Aset'),
(10, 'Unjuk Rasa'),
(11, 'Audiensi');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(2, 'Diproses'),
(3, 'Diterima'),
(4, 'Ditolak');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `instansi_tujuan`
--
ALTER TABLE `instansi_tujuan`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `kritik_dan_saran`
--
ALTER TABLE `kritik_dan_saran`
  ADD PRIMARY KEY (`id_kritik_saran`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`),
  ADD KEY `id_instansi` (`id_instansi`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_mk` (`id_mk`);

--
-- Indexes for table `maksud_kunjungan`
--
ALTER TABLE `maksud_kunjungan`
  ADD PRIMARY KEY (`id_mk`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instansi_tujuan`
--
ALTER TABLE `instansi_tujuan`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `kritik_dan_saran`
--
ALTER TABLE `kritik_dan_saran`
  MODIFY `id_kritik_saran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `maksud_kunjungan`
--
ALTER TABLE `maksud_kunjungan`
  MODIFY `id_mk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`id_instansi`) REFERENCES `instansi_tujuan` (`id_instansi`),
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`),
  ADD CONSTRAINT `kunjungan_ibfk_3` FOREIGN KEY (`id_mk`) REFERENCES `maksud_kunjungan` (`id_mk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
