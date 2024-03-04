-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2024 at 10:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_digital1`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `BukuID` int(11) NOT NULL,
  `Judul` varchar(255) DEFAULT NULL,
  `Penulis` varchar(255) DEFAULT NULL,
  `Penerbit` varchar(255) DEFAULT NULL,
  `TahunTerbit` int(11) DEFAULT NULL,
  `Deskripsi` varchar(255) DEFAULT NULL,
  `Gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`BukuID`, `Judul`, `Penulis`, `Penerbit`, `TahunTerbit`, `Deskripsi`, `Gambar`) VALUES
(41, 'saa', 'saa', 'saa', 234, 'saa', NULL),
(42, '1q3erwf', 'wq3', 'asasassaas', 2342, 'ini sangat bagus', NULL),
(43, 'sf', 'sf', 'sf', 33434, 'sf', NULL),
(44, 'Klasik Bahasa Inggris: Macbeth', 'William Shakespeare', 'Gramedia Pustaka Utama', 2023, 'Akankah seluruh lautan besar Neptunus membasuh darah ini dari tanganku? Tidak, tanganku ini lebih suka menjelma lautan yang beraneka ragam, Menjadikan yang hijau menjadi merah.', NULL),
(45, 'Garis Antara Kehilangan & Keajaiban', 'Ayra Sirait', 'Anda', 2022, 'Di mana ada kesedihan, di situ ada cinta; itu adalah roda yang berputar, siklus tanpa akhir yang berjalan delapan kali lipat. Dalam empat cerita ini, Ayra Sirait menyelaraskan dirinya dengan temporalitas dan kebiasaan spasial tubuh jasmani yang sederhana.', NULL),
(46, 'Waspadai Kelelahan Seiring Waktu', 'ADDIN JAUHARUDIN', 'Buku Kompas', 2023, 'Buku ini disusun berdasarkan kumpulan pidato, sambutan, pesan, dan dialog Presiden Jokowi yang disampaikan pada acara-acara resmi dan kenegaraan, baik di dalam maupun luar negeri, selama periode 2014-2023.', NULL),
(47, 'Outliers', 'Malcolm Gladwell', 'Gramedia Pustaka Utama ', 2009, 'Dalam buku yang menakjubkan ini, Malcolm Gladwell membawa pembaca pada perjalanan intelektual yang cukup menyegarkan untuk menunjukkan pada kita, apa hal yang membuat orang bisa menjadi sangat berprestasi.', NULL),
(49, 'The Odd 1S Out: The First Sequel', 'James Rallison', 'Penguin Us', 2018, 'Bagi Anda yang sedang mencari aktivitas untuk mengisi waktu luang, maka membaca buku ini bisa menjadi salah satu referensi yang tepat. Buku ini sangat cocok dibaca di kala telat karena cerita yang disajikan sangat lucu dan menarik.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku`
--

CREATE TABLE `kategoribuku` (
  `KategoriID` int(11) NOT NULL,
  `NamaKategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku`
--

INSERT INTO `kategoribuku` (`KategoriID`, `NamaKategori`) VALUES
(19, 'Romantis'),
(20, 'Fantasi'),
(21, 'Sastra '),
(22, 'Psikologi '),
(23, 'Misteri'),
(25, 'Humor ');

-- --------------------------------------------------------

--
-- Table structure for table `kategoribuku_relasi`
--

CREATE TABLE `kategoribuku_relasi` (
  `KategoriBukuID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `KategoriID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoribuku_relasi`
--

INSERT INTO `kategoribuku_relasi` (`KategoriBukuID`, `BukuID`, `KategoriID`) VALUES
(33, 44, 19),
(34, 45, 20),
(35, 46, 21),
(36, 47, 22),
(38, 49, 25);

-- --------------------------------------------------------

--
-- Table structure for table `koleksipribadi`
--

CREATE TABLE `koleksipribadi` (
  `KoleksiID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `koleksipribadi`
--

INSERT INTO `koleksipribadi` (`KoleksiID`, `UserID`, `BukuID`) VALUES
(12, 2, 44);

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `PeminjamanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `TanggalPeminjaman` date DEFAULT NULL,
  `TanggalPengembalian` date DEFAULT NULL,
  `StatusPeminjaman` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`PeminjamanID`, `UserID`, `BukuID`, `TanggalPeminjaman`, `TanggalPengembalian`, `StatusPeminjaman`) VALUES
(21, 2, 44, '2024-03-04', '2024-03-04', 'Sudah di Kembalikan'),
(22, 2, 44, '2024-03-04', '2024-03-04', 'Sudah di Kembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `ulasanbuku`
--

CREATE TABLE `ulasanbuku` (
  `UlasanID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BukuID` int(11) NOT NULL,
  `Ulasan` text DEFAULT NULL,
  `Rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasanbuku`
--

INSERT INTO `ulasanbuku` (`UlasanID`, `UserID`, `BukuID`, `Ulasan`, `Rating`) VALUES
(19, 2, 44, 'menyala abangkuh', 5),
(20, 2, 44, 'decf', 4),
(21, 2, 44, 'qwdqwdeqw', 2),
(22, 2, 44, 'w4ehyws4hyw4', 5),
(23, 2, 44, 'aqefQAEFqef', 5),
(24, 2, 44, 'aqefQAEFqef', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `NamaLengkap` varchar(255) DEFAULT NULL,
  `Alamat` text DEFAULT NULL,
  `Role` enum('Administrator','Petugas','Peminjam') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `Email`, `NamaLengkap`, `Alamat`, `Role`) VALUES
(1, 'admin', '$2y$10$QHOygX0mw4ApPok/UNuNee5mXMOdAUPbL9IPzDTsL42y4sQK//BJ.', 'admin@gmail.com', 'Admin1', 'medan', 'Administrator'),
(2, 'josua', '$2y$10$39KGBYQG4maXbfzSd3NJlOfG0nCcEktSRHhgOgkfOomPOJIHeFv4G', 'josua@gmail.com', 'josua', 'josua', 'Peminjam'),
(4, 'petugas', '$2y$10$5WeC0zOiudIAZI38QRS0uO9TurJ35b6Dhu0RzDh..rSNIFyK4PafC', 'petugas@gmail.com', 'petugas12', 'jawa', 'Petugas'),
(17, 'pinjam1', '$2y$10$YSi8ZuiYD4I93gU84x/LtOFTB2dHkbqbKpKJALgtlNIx9y7kLZgwe', 'pinjam1@gmail.com', 'pinjam1', 'pinjam1', 'Peminjam'),
(22, 'pt asrul', '$2y$10$th6QRT5s.wRYqyFBR5hPSOTCpi/F6Szb1x/38Iy1BmB9csvDCqZC6', 'ptasrul@gmail.com', 'asrul', 'medan', 'Petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`BukuID`);

--
-- Indexes for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  ADD PRIMARY KEY (`KategoriID`);

--
-- Indexes for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD PRIMARY KEY (`KategoriBukuID`),
  ADD KEY `BukuID` (`BukuID`),
  ADD KEY `KategoriID` (`KategoriID`);

--
-- Indexes for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD PRIMARY KEY (`KoleksiID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `BukuID` (`BukuID`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`PeminjamanID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `BukuID` (`BukuID`);

--
-- Indexes for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD PRIMARY KEY (`UlasanID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `BukuID` (`BukuID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `BukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `kategoribuku`
--
ALTER TABLE `kategoribuku`
  MODIFY `KategoriID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  MODIFY `KategoriBukuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  MODIFY `KoleksiID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `PeminjamanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  MODIFY `UlasanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategoribuku_relasi`
--
ALTER TABLE `kategoribuku_relasi`
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_1` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE,
  ADD CONSTRAINT `kategoribuku_relasi_ibfk_2` FOREIGN KEY (`KategoriID`) REFERENCES `kategoribuku` (`KategoriID`) ON DELETE CASCADE;

--
-- Constraints for table `koleksipribadi`
--
ALTER TABLE `koleksipribadi`
  ADD CONSTRAINT `koleksipribadi_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `koleksipribadi_ibfk_2` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE;

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `peminjaman_ibfk_2` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE;

--
-- Constraints for table `ulasanbuku`
--
ALTER TABLE `ulasanbuku`
  ADD CONSTRAINT `ulasanbuku_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`) ON DELETE CASCADE,
  ADD CONSTRAINT `ulasanbuku_ibfk_2` FOREIGN KEY (`BukuID`) REFERENCES `buku` (`BukuID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
