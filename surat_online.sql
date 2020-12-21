-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 13.51
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_online`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`) VALUES
(1, 'admin', '$2y$12$M24qTV4iKTUVk25nPb8fROR4UH0ivst0bar9qMtL8ct9pIwXHyZAS', 'ADMIN SURAT ONLINE');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_surat` bigint(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` text NOT NULL,
  `sifat` enum('BIASA','RAHASIA','SANGAT RAHASIA','SEGERA') NOT NULL,
  `id_surat_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_surat`, `tgl_surat`, `perihal`, `sifat`, `id_surat_id`) VALUES
(2, '2020-12-21', 'Rahasia boyy', 'SEGERA', 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_surat` bigint(20) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_diterima` date NOT NULL,
  `perihal` text NOT NULL,
  `sifat` enum('BIASA','RAHASIA','SANGAT RAHASIA','SEGERA') NOT NULL,
  `date_entry` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_surat`, `tgl_surat`, `tgl_diterima`, `perihal`, `sifat`, `date_entry`) VALUES
(9, '2020-12-16', '2020-12-21', 'Surat Biasa 1', 'BIASA', '2020-12-21 18:32:08'),
(10, '2020-12-17', '2020-12-21', 'Surat Biasa 2', 'BIASA', '2020-12-21 18:32:29'),
(11, '2020-12-18', '2020-12-21', 'Surat Biasa 3', 'BIASA', '2020-12-21 18:32:44'),
(12, '2020-12-17', '2020-12-21', 'Surat Rahasia 1', 'RAHASIA', '2020-12-21 18:33:07'),
(13, '2020-12-18', '2020-12-21', 'Surat Rahasia 2', 'RAHASIA', '2020-12-21 18:33:26'),
(14, '2020-12-18', '2020-12-21', 'Surat Sangat Rahasia 1', 'SANGAT RAHASIA', '2020-12-21 18:33:41'),
(15, '2020-12-19', '2020-12-21', 'Surat Segera 1', 'SEGERA', '2020-12-21 18:33:56'),
(16, '2020-12-20', '2020-12-21', 'Surat Segera 2', 'SEGERA', '2020-12-21 18:34:15'),
(17, '2020-12-21', '2020-12-21', 'Surat Segera 3', 'SEGERA', '2020-12-21 18:34:38');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indeks untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_surat`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_surat` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
