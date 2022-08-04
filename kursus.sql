-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Agu 2022 pada 15.01
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kursus`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id` int(11) NOT NULL,
  `nama_kursus` varchar(30) NOT NULL,
  `ket_kursus` varchar(255) NOT NULL,
  `lama_kursus` varchar(30) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`id`, `nama_kursus`, `ket_kursus`, `lama_kursus`, `gambar`) VALUES
(1, 'JUNIOR WEBSITE', 'Mempelajari bagaimana cara mem', '5 Hari', 'web.jpg'),
(2, 'PROGRAMMER', 'Mempelajari cara menjadi programmer\r\n', '1 Bulan', 'programmer.jpg'),
(3, 'DATA SCIENCE', 'Menjadi seorang data analis yang handal dan hebat di masa depan', '1 Tahun', 'data science.jpg'),
(4, 'AKUNTANSI', 'Menjadi seorang penghitung pajak yang sangat teliti, mulailah belajar dari skarang', '8 Bulan', 'akutansi.jpg'),
(20, 'asd', 'asd', 'asd', 'asd'),
(21, 'Bedah Tulang', 'Membedah Tulang pada ayam goreng', '2 Menit', 'bedah.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kursus`
--

CREATE TABLE `tbl_kursus` (
  `id` int(11) NOT NULL,
  `nama_kursus` varchar(30) NOT NULL,
  `waktu_kursus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `npm` int(8) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jenis_kursus` varchar(30) NOT NULL,
  `krs` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_kursus`
--
ALTER TABLE `tbl_kursus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`npm`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_kursus`
--
ALTER TABLE `tbl_kursus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
