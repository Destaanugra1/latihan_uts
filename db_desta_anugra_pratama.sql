-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 28, 2024 at 03:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_desta_anugra_pratama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_obat_2359201020`
--

CREATE TABLE `tabel_obat_2359201020` (
  `id_obat_020` varchar(5) NOT NULL,
  `nama_obat_020` varchar(100) DEFAULT NULL,
  `pembuat_obat_020` varchar(100) DEFAULT NULL,
  `stok_obat_020` varchar(15) DEFAULT NULL,
  `tanggal_kadaluarsa_020` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_obat_2359201020`
--

INSERT INTO `tabel_obat_2359201020` (`id_obat_020`, `nama_obat_020`, `pembuat_obat_020`, `stok_obat_020`, `tanggal_kadaluarsa_020`) VALUES
('O001', 'Paracetamol', 'Kimia Farma', '100', '2025-12-31'),
('O002', 'Ibuprofen', 'Kalbe Farma', '200', '2024-06-30'),
('O003', 'Amoxicillin', 'Sanbe Farma', '150', '2026-03-15'),
('O004', 'Cetirizine', 'Dexa Medica', '75', '2025-09-01'),
('O005', 'Metforminn', 'Indofarma', '120', '2026-01-10');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pasien_2359201020`
--

CREATE TABLE `tabel_pasien_2359201020` (
  `id_pasien_020` varchar(5) NOT NULL,
  `nama_pasien_020` varchar(100) DEFAULT NULL,
  `tanggal_lahir_pasien_020` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_pasien_2359201020`
--

INSERT INTO `tabel_pasien_2359201020` (`id_pasien_020`, `nama_pasien_020`, `tanggal_lahir_pasien_020`) VALUES
('P001', 'Ahmad Zaki', '1995-05-12'),
('P002', 'Siti Aminah', '1992-03-24'),
('P003', 'Budi Santoso', '1987-08-19'),
('P004', 'Dewi Lestari', '2000-11-05'),
('P005', 'Rahmat Hidayattt', '1998-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi_2359201020`
--

CREATE TABLE `tabel_transaksi_2359201020` (
  `id_transaksi_020` varchar(5) NOT NULL,
  `id_pasien_020` varchar(5) DEFAULT NULL,
  `id_obat_020` varchar(5) DEFAULT NULL,
  `jumlah_transaksi_020` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tabel_transaksi_2359201020`
--

INSERT INTO `tabel_transaksi_2359201020` (`id_transaksi_020`, `id_pasien_020`, `id_obat_020`, `jumlah_transaksi_020`) VALUES
('K02', 'P002', 'O002', 60000),
('K03', 'P003', 'O003', 700000),
('K04', 'P004', 'O004', 90000),
('K05', 'P005', 'O005', 100000),
('T01', 'P001', 'O001', 5000001),
('T02', 'P002', 'O001', 500000112);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_obat_2359201020`
--
ALTER TABLE `tabel_obat_2359201020`
  ADD PRIMARY KEY (`id_obat_020`);

--
-- Indexes for table `tabel_pasien_2359201020`
--
ALTER TABLE `tabel_pasien_2359201020`
  ADD PRIMARY KEY (`id_pasien_020`);

--
-- Indexes for table `tabel_transaksi_2359201020`
--
ALTER TABLE `tabel_transaksi_2359201020`
  ADD PRIMARY KEY (`id_transaksi_020`),
  ADD KEY `id_pasien_020` (`id_pasien_020`,`id_obat_020`),
  ADD KEY `id_obat_020` (`id_obat_020`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_transaksi_2359201020`
--
ALTER TABLE `tabel_transaksi_2359201020`
  ADD CONSTRAINT `tabel_transaksi_2359201020_ibfk_1` FOREIGN KEY (`id_obat_020`) REFERENCES `tabel_obat_2359201020` (`id_obat_020`),
  ADD CONSTRAINT `tabel_transaksi_2359201020_ibfk_2` FOREIGN KEY (`id_pasien_020`) REFERENCES `tabel_pasien_2359201020` (`id_pasien_020`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
