-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 12:56 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_topsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` tinyint(4) NOT NULL,
  `key` varchar(100) NOT NULL,
  `type` enum('option','range') NOT NULL,
  `details` text NOT NULL,
  `weight` int(11) NOT NULL,
  `label` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `key`, `type`, `details`, `weight`, `label`) VALUES
(1, 'biaya_sewa', 'range', '[{\"label\":\"Sangat Murah\",\"max\":\"73000000\",\"min\":\"0\",\"value\":\"5\"},{\"label\":\"Murah\",\"max\":\"111100000\",\"min\":\"73100000\",\"value\":\"4\"},{\"label\":\"Standar\",\"max\":\"149200000\",\"min\":\"111200000\",\"value\":\"3\"},{\"label\":\"Mahal\",\"max\":\"187300000\",\"min\":\"149300000\",\"value\":\"2\"},{\"label\":\"Sangat Mahal\",\"max\":\"200000000\",\"min\":\"187400000\",\"value\":\"1\"}]', 5, 'Biaya Sewa'),
(2, 'akses_menuju_lokasi', 'option', '[{\"label\":\"Pejalan Kaki\",\"value\":\"3\"},{\"label\":\"Angkutan Umum\",\"value\":\"1\"},{\"label\":\"Kendaraan Mobil\",\"value\":\"4\"},{\"label\":\"Kendaraan Motor\",\"value\":\"2\"},{\"label\":\"Semuanya\",\"value\":\"5\"}]', 5, 'Akses Menuju Lokasi'),
(3, 'luas_bangunan', 'range', '[{\"label\":\"48 - 62\",\"max\":\"62\",\"min\":\"48\",\"value\":\"2\"},{\"label\":\"63 - 77\",\"max\":\"77\",\"min\":\"63\",\"value\":\"3\"},{\"label\":\"78 - 92\",\"max\":\"92\",\"min\":\"78\",\"value\":\"4\"},{\"label\":\"93 - 107\",\"max\":\"107\",\"min\":\"93\",\"value\":\"1\"},{\"label\":\"108 - 122\",\"max\":\"122\",\"min\":\"108\",\"value\":\"5\"}]', 4, 'Luas Bangunan'),
(4, 'pusat_keramaian', 'option', '[{\"label\":\"Kantor\",\"value\":\"4\"},{\"label\":\"Mall\",\"value\":\"3\"},{\"label\":\"Pasar\",\"value\":\"3\"},{\"label\":\"Rumah\",\"value\":\"2\"},{\"label\":\"Sekolah\",\"value\":\"5\"},{\"label\":\"Kampus\",\"value\":\"5\"},{\"label\":\"Semuanya\",\"value\":\"1\"}]', 5, 'Pusat Keramaian'),
(5, 'zona_parkir', 'range', '[{\"label\":\"4 - 5,6 M\",\"max\":\"5.6\",\"min\":\"4\",\"value\":\"2\"},{\"label\":\"5,7 - 7,3 M\",\"max\":\"7.3\",\"min\":\"5.7\",\"value\":\"5\"},{\"label\":\"7,4 - 9 M\",\"max\":\"9\",\"min\":\"7.4\",\"value\":\"3\"},{\"label\":\"9,1 - 10,7 M\",\"max\":\"10.7\",\"min\":\"9.1\",\"value\":\"1\"},{\"label\":\"10,8 - 12,4 M\",\"max\":\"12.4\",\"min\":\"10.8\",\"value\":\"4\"}]', 5, 'Zona Parkir'),
(6, 'jumlah_pesaing_serupa', 'range', '[{\"label\":\"Tidak Ada\",\"max\":\"0\",\"min\":\"0\",\"value\":\"4\"},{\"label\":\"1 - 2 pesaing\",\"max\":\"2\",\"min\":\"1\",\"value\":\"5\"},{\"label\":\"3 - 4 pesaing\",\"max\":\"4\",\"min\":\"3\",\"value\":\"2\"},{\"label\":\"5 - 6 pesaing\",\"max\":\"6\",\"min\":\"5\",\"value\":\"1\"},{\"label\":\"> 6 pesaing\",\"max\":\"8\",\"min\":\"7\",\"value\":\"3\"}]', 4, 'Jumlah Pesaing Serupa'),
(7, 'tingkat_konsumtif_masyarakat', 'option', '[{\"label\":\"Sangat Rendah\",\"value\":\"1\"},{\"label\":\"Rendah\",\"value\":\"2\"},{\"label\":\"Cukup Tinggi\",\"value\":\"4\"},{\"label\":\"Tinggi\",\"value\":\"3\"},{\"label\":\"Sangat Tinggi\",\"value\":\"5\"}]', 5, 'Tingkat Konsumtif Masyarakat'),
(8, 'lingkungan_lokasi_ruko', 'option', '[{\"label\":\"Pertengahan Kota\",\"value\":\"4\"},{\"label\":\"Lingkungan Perkampungan\",\"value\":\"1\"},{\"label\":\"Lingkungan Perumahan\",\"value\":\"3\"},{\"label\":\"Jalan Raya Kota\",\"value\":\"5\"},{\"label\":\"Jalan Utama\",\"value\":\"5\"},{\"label\":\"Jalan Lintas Kota\",\"value\":\"2\"}]', 5, 'Lingkungan Lokasi Ruko');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `kontak` varchar(15) NOT NULL,
  `id_role` tinyint(4) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`, `email`, `kontak`, `id_role`, `alamat`) VALUES
(1, 'azhry', '4kuGanteng', 'Azhary Arliansyah', 'arliansyah_azhary@yahoo.com', '85380109887', 1, 'Komplek Bougenville'),
(3, 'admin', '12345', 'Ayuni Indah Lestari', 'uniunican@gmail.com', '08978722717', 2, 'Komplek tirta lestari indah blok d 2'),
(4, 'unican', 'halooo', 'ayuni indah lestari', 'ayunindahl@gmail.com', '08978722717', 3, 'jl mp mangkunegara');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` tinyint(4) NOT NULL,
  `role` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`, `deskripsi`) VALUES
(1, 'Pemilik Ruko', 'Pemilik Ruko'),
(2, 'Admin', 'Admin'),
(3, 'Pengguna', 'Pengguna');

-- --------------------------------------------------------

--
-- Table structure for table `ruko`
--

CREATE TABLE `ruko` (
  `id_ruko` mediumint(9) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `ruko` text NOT NULL,
  `biaya_sewa` int(11) NOT NULL,
  `luas_bangunan` int(11) NOT NULL,
  `akses_menuju_lokasi` text NOT NULL,
  `pusat_keramaian` text NOT NULL,
  `zona_parkir` int(11) NOT NULL,
  `jumlah_pesaing_serupa` int(11) NOT NULL,
  `tingkat_konsumtif_masyarakat` enum('Sangat Rendah','Rendah','Cukup Tinggi','Tinggi','Sangat Tinggi') NOT NULL,
  `lingkungan_lokasi_ruko` enum('Pertengahan Kota','Lingkungan Perkampungan','Lingkungan Perumahan','Jalan Utama','Jalan Raya Kota','Jalan Lintas Kota') NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `status` enum('Pending','Verified') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruko`
--

INSERT INTO `ruko` (`id_ruko`, `id_pengguna`, `ruko`, `biaya_sewa`, `luas_bangunan`, `akses_menuju_lokasi`, `pusat_keramaian`, `zona_parkir`, `jumlah_pesaing_serupa`, `tingkat_konsumtif_masyarakat`, `lingkungan_lokasi_ruko`, `latitude`, `longitude`, `status`) VALUES
(2, 1, 'Jl. Mangkunegaraa', 50000000, 48, '[\"Semuanya\"]', '[\"Mall\",\"Sekolah\"]', 7, 7, 'Sangat Tinggi', 'Lingkungan Perumahan', -2.8974, 104.772, 'Verified'),
(3, 1, 'Jl. Angkatan 66', 50000000, 48, '[\"Kendaraan Mobil\",\"Kendaraan Motor\"]', '[\"Mall\",\"Sekolah\"]', 4, 7, 'Sangat Tinggi', 'Lingkungan Perumahan', -2.94905, 104.753, 'Verified'),
(4, 1, 'Jl. Veteran', 55000000, 60, '[\"Semuanya\"]', '[\"Kantor\",\"Mall\",\"Sekolah\"]', 5, 7, 'Sangat Tinggi', 'Jalan Raya Kota', -2.97574, 104.761, 'Verified'),
(5, 1, 'Jl. Veteran', 65000000, 75, '[\"Semuanya\"]', '[\"Kantor\",\"Mall\",\"Sekolah\"]', 5, 7, 'Sangat Tinggi', 'Jalan Raya Kota', -2.97574, 104.761, 'Verified'),
(6, 1, 'Jl. Mangkunegara', 140000000, 120, '[\"Semuanya\"]', '[\"Mall\",\"Sekolah\"]', 12, 7, 'Sangat Tinggi', 'Pertengahan Kota', -2.94041, 104.767, 'Verified'),
(7, 1, 'Jl. Jendral Sudirman', 225000000, 122, '[\"Semuanya\"]', '[\"Kantor\",\"Pasar\"]', 7, 7, 'Sangat Tinggi', 'Jalan Raya Kota', -2.97539, 104.754, 'Verified'),
(8, 1, 'Jl. Demang Lebar Daun', 125000000, 64, '[\"Semuanya\"]', '[\"Sekolah\"]', 7, 7, 'Sangat Tinggi', 'Pertengahan Kota', -2.97271, 104.729, 'Verified'),
(9, 1, 'Jl. Jendral Sudirman', 125000000, 60, '[\"Semuanya\"]', '[\"Sekolah\"]', 7, 7, 'Sangat Tinggi', 'Jalan Raya Kota', -2.97539, 104.754, 'Verified'),
(10, 1, 'Jl. Mangkunegara', 50000000, 60, '[\"Semuanya\"]', '[\"Mall\",\"Sekolah\"]', 4, 7, 'Sangat Tinggi', 'Lingkungan Perumahan', -2.94041, 104.767, 'Verified'),
(11, 1, 'Jl. Kapten A. Rivai', 35000000, 72, '[\"Semuanya\"]', '[\"Kantor\",\"Mall\",\"Rumah Sakit\",\"Sekolah\"]', 4, 7, 'Sangat Tinggi', 'Pertengahan Kota', -2.97857, 104.749, 'Verified'),
(12, 1, 'mangkunegara', 150000, 150, '[\"Semuanya\"]', '[\"Kantor\"]', 7, 1, 'Sangat Tinggi', 'Pertengahan Kota', -2.8974, 104.772, 'Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD KEY `id_role` (`id_role`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `ruko`
--
ALTER TABLE `ruko`
  ADD PRIMARY KEY (`id_ruko`),
  ADD KEY `id_pengguna` (`id_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruko`
--
ALTER TABLE `ruko`
  MODIFY `id_ruko` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ruko`
--
ALTER TABLE `ruko`
  ADD CONSTRAINT `ruko_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
