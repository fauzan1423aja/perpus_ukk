-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2024 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `buku_id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`buku_id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1111, 'tenggelamnya kapal van der wijck', 'Hamka', 'balai pustaka', 1939),
(1112, 'Emma', 'Jane Austen', 'Frank Churchilla', 1815),
(1113, 'Cantik Itu Luka', 'Eka Kurniawan', 'Gramedia Pustaka Utama', 2002),
(1114, 'Layla & Majnun', 'Nezami', 'Spektrum Nusantara', 1192),
(1115, 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', 1815);

-- --------------------------------------------------------

--
-- Table structure for table `katagoribuku_relasi`
--

CREATE TABLE `katagoribuku_relasi` (
  `katagoribuku_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `katagori_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katagoribuku_relasi`
--

INSERT INTO `katagoribuku_relasi` (`katagoribuku_id`, `buku_id`, `katagori_id`) VALUES
(1136, 1111, 1112),
(1137, 1112, 1112),
(1138, 1113, 1114),
(1139, 1114, 1122),
(1140, 1115, 1115);

-- --------------------------------------------------------

--
-- Table structure for table `katagori_buku`
--

CREATE TABLE `katagori_buku` (
  `katagori_id` int(11) NOT NULL,
  `nama_katagori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `katagori_buku`
--

INSERT INTO `katagori_buku` (`katagori_id`, `nama_katagori`) VALUES
(1111, 'Fiksi,Comady'),
(1112, 'Roman  Drama'),
(1113, 'Drama, Roman dan Melodrama'),
(1114, 'Roman, Drama dan Comady'),
(1115, 'Fiksi, Komedi, Roman, dan Novel'),
(1122, 'Romance');

-- --------------------------------------------------------

--
-- Table structure for table `koleksi_pribadi`
--

CREATE TABLE `koleksi_pribadi` (
  `koleksi_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksi_pribadi`
--

INSERT INTO `koleksi_pribadi` (`koleksi_id`, `user_id`, `buku_id`) VALUES
(1, 1141, 1111),
(2, 1142, 1112),
(3, 1143, 1113),
(4, 1144, 1114),
(5, 1145, 1115);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `peminjaman_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status_peminjaman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`peminjaman_id`, `user_id`, `buku_id`, `tanggal_peminjaman`, `tanggal_pengembalian`, `status_peminjaman`) VALUES
(1, 1141, 1113, '2024-01-17', '2024-01-21', 'Dikembalikan'),
(2, 1142, 1112, '2024-01-24', '2024-02-14', 'Terpinjam'),
(3, 1143, 1113, '2024-01-23', '2024-01-30', 'Dikembalikan'),
(4, 1144, 1114, '2024-02-07', '2024-02-21', 'Terpinjam'),
(5, 1145, 1115, '2024-01-24', '2024-01-27', 'Dikembalikan'),
(8, 1141, 1112, '2024-01-23', '2024-01-23', 'Dikembalikan'),
(9, 1149, 1114, '2024-01-22', '2024-01-22', 'Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan_buku`
--

CREATE TABLE `ulasan_buku` (
  `ulasan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `buku_id` int(11) NOT NULL,
  `ulasan` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan_buku`
--

INSERT INTO `ulasan_buku` (`ulasan_id`, `user_id`, `buku_id`, `ulasan`, `rating`) VALUES
(1, 1141, 1111, 'Buku ini sangat menyayat hati', 9),
(2, 1142, 1112, 'Cocok untuk pemuda dan pemudi', 10),
(3, 1143, 1113, 'cocok dibaca semua kalangan', 10),
(4, 1144, 1114, 'banyak palajaran yang didapat dibuku ini', 9),
(5, 1145, 1115, 'keren dan bagus', 9),
(7, 1141, 1113, 'asik bener wahh kidah', 7),
(11, 1149, 1114, 'Sungguh Cinta yang indah', 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `role` enum('admin','petugas','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `nama_lengkap`, `alamat`, `role`) VALUES
(1141, 'AgusIjo', 'b6b5be968b8cdb3e680385dff0c9ad12', 'Agus112@gmail.com', 'Agus Sensosa', 'Metro Tengah', 'user'),
(1142, 'BintangTimur', '6f1b1a5bbfd4a2a3504e583a4e891656', 'Bintang1@gmail.com', 'Bintang Ceria Kusuma', 'lampung Barat', 'user'),
(1143, 'ImamXyz', 'b35216e9abd4a85ea88bc5331bbb9a36', 'Imam212@gmail.com', 'Imam Dwi ', 'Trimurjo', 'user'),
(1144, 'Galihyo', '4fcc3f65bcf2787d69f5f3bb1df91b95', 'Galih223@gmail.com', 'Galih Dewa', 'Metro Timur', 'user'),
(1145, 'Rayazz', '1232e6963d02772f9f134c0ba4055435', 'Raya22@gmail.com', 'Raya Kusuma Barat', 'Metro Selatan', 'user'),
(1146, 'Admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1@gmail.com', 'Asep Juan', 'Metro Ujung', 'admin'),
(1147, 'petugas', 'b53fe7751b37e40ff34d012c7774d65f', 'petugas1@gmail.com', 'Amir Hostel', 'Palembang', 'petugas'),
(1149, 'Asepaja', '7b4449987d9a0e390f88e8fa37a12b83', 'asep1@gmail.com', 'asep', 'Metro', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`buku_id`);

--
-- Indexes for table `katagoribuku_relasi`
--
ALTER TABLE `katagoribuku_relasi`
  ADD PRIMARY KEY (`katagoribuku_id`),
  ADD KEY `buku_id` (`buku_id`),
  ADD KEY `katagori_id` (`katagori_id`);

--
-- Indexes for table `katagori_buku`
--
ALTER TABLE `katagori_buku`
  ADD PRIMARY KEY (`katagori_id`);

--
-- Indexes for table `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD PRIMARY KEY (`koleksi_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`peminjaman_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- Indexes for table `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  ADD PRIMARY KEY (`ulasan_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `buku_id` (`buku_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `buku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1132;

--
-- AUTO_INCREMENT for table `katagoribuku_relasi`
--
ALTER TABLE `katagoribuku_relasi`
  MODIFY `katagoribuku_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1141;

--
-- AUTO_INCREMENT for table `katagori_buku`
--
ALTER TABLE `katagori_buku`
  MODIFY `katagori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;

--
-- AUTO_INCREMENT for table `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  MODIFY `koleksi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `peminjaman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  MODIFY `ulasan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1150;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `katagoribuku_relasi`
--
ALTER TABLE `katagoribuku_relasi`
  ADD CONSTRAINT `katagoribuku_relasi_ibfk_1` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `katagoribuku_relasi_ibfk_2` FOREIGN KEY (`katagori_id`) REFERENCES `katagori_buku` (`katagori_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `koleksi_pribadi`
--
ALTER TABLE `koleksi_pribadi`
  ADD CONSTRAINT `koleksi_pribadi_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`),
  ADD CONSTRAINT `koleksi_pribadi_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`),
  ADD CONSTRAINT `peminjaman_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;

--
-- Constraints for table `ulasan_buku`
--
ALTER TABLE `ulasan_buku`
  ADD CONSTRAINT `ulasan_buku_ibfk_2` FOREIGN KEY (`buku_id`) REFERENCES `buku` (`buku_id`),
  ADD CONSTRAINT `ulasan_buku_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
