-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jun 2023 pada 02.16
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sibayang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `id` int(3) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `kewajiban` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datakaryawan`
--

INSERT INTO `datakaryawan` (`id`, `nama`, `jabatan`, `kewajiban`, `posisi`) VALUES
(1, 'Muhammad ibnu', 'Cleaning Service', 'Kebersihan Kamar Dan Kost', 'Lantai 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenyewa`
--

CREATE TABLE `datapenyewa` (
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `kamar` int(255) NOT NULL,
  `lama_penyewaan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datapenyewa`
--

INSERT INTO `datapenyewa` (`nama`, `email`, `no_hp`, `tanggal_masuk`, `kamar`, `lama_penyewaan`, `status`) VALUES
('Muhammad Satria ', 'muhammad.satria.aulia21@students.unila.ac.id', '081211203815', '20/04/2023', 101, '12 Bulan', 'Aktif'),
('Muhammad Satria ', 'muhammad.satria.aulia21@students.unila.ac.id', '081211203815', '20/04/2023', 102, '12 Bulan', 'Aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datatransaksi`
--

CREATE TABLE `datatransaksi` (
  `id` int(3) NOT NULL,
  `tanggal_masuk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lama` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `datatransaksi`
--

INSERT INTO `datatransaksi` (`id`, `tanggal_masuk`, `nama`, `status`, `lama`, `jumlah`) VALUES
(1, '14/7/2015', 'Muhammad Satria ', 'Terbayar', '12 Bulan', 'Rp.5.500.000');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapenyewa`
--
ALTER TABLE `datapenyewa`
  ADD PRIMARY KEY (`kamar`);

--
-- Indeks untuk tabel `datatransaksi`
--
ALTER TABLE `datatransaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datakaryawan`
--
ALTER TABLE `datakaryawan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `datatransaksi`
--
ALTER TABLE `datatransaksi`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
