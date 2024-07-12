-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jun 2024 pada 19.14
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
-- Database: `dbparkir`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `area_parkir`
--

CREATE TABLE `area_parkir` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `keterangan` varchar(45) NOT NULL,
  `kampus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `area_parkir`
--

INSERT INTO `area_parkir` (`id`, `nama`, `kapasitas`, `keterangan`, `kampus_id`) VALUES
(1, 'Area Parkir Utama', 100, 'Dekat gerbang utama', 1),
(2, 'Area Parkir Timur', 50, 'Dekat gedung teknik', 1),
(3, 'Area Parkir Barat', 70, 'Dekat gedung bisnis', 2),
(4, 'Area Parkir Utama', 100, 'Dekat gerbang utama', 1),
(5, 'Area Parkir Timur', 50, 'Dekat gedung teknik', 1),
(6, 'Area Parkir Barat', 70, 'Dekat gedung bisnis', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `jenis`
--

INSERT INTO `jenis` (`id`, `nama`) VALUES
(1, 'Mobil'),
(2, 'Motor'),
(3, 'Sepeda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kampus`
--

CREATE TABLE `kampus` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kampus`
--

INSERT INTO `kampus` (`id`, `nama`, `alamat`, `latitude`, `longitude`) VALUES
(1, 'Kampus A', 'Jalan Merdeka No. 1', -6.2, 106.816666),
(2, 'Kampus B', 'Jalan Sudirman No. 2', -6.21, 106.825);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kendaraan`
--

CREATE TABLE `kendaraan` (
  `id` int(11) NOT NULL,
  `merk` varchar(45) NOT NULL,
  `nopol` varchar(45) NOT NULL,
  `thn_beli` int(11) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `kapasitas_kursi` int(11) NOT NULL,
  `jenis_kendaraan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kendaraan`
--

INSERT INTO `kendaraan` (`id`, `merk`, `nopol`, `thn_beli`, `deskripsi`, `kapasitas_kursi`, `jenis_kendaraan_id`) VALUES
(1, 'Toyota', 'B 1234 XYZ', 2020, 'Mobil keluarga', 7, 1),
(2, 'Honda', 'B 5678 ABC', 2018, 'Motor sport', 2, 2),
(3, 'Polygon', 'B 9012 DEF', 2022, 'Sepeda gunung', 1, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kendaraan_id` int(11) NOT NULL,
  `area_parkir_id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `mulai` time NOT NULL,
  `akhir` time NOT NULL,
  `biaya` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kendaraan_id`, `area_parkir_id`, `tanggal`, `mulai`, `akhir`, `biaya`) VALUES
(1, 1, 1, '2024-06-27', '08:00:00', '17:00:00', 10000),
(2, 2, 2, '2024-06-27', '09:00:00', '18:00:00', 5000),
(3, 3, 3, '2024-06-27', '07:00:00', '16:00:00', 2000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `area_parkir`
--
ALTER TABLE `area_parkir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_area_parkir_kampus1_idx` (`kampus_id`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kampus`
--
ALTER TABLE `kampus`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nopol_UNIQUE` (`nopol`),
  ADD KEY `fk_kendaraan_Jenis_idx` (`jenis_kendaraan_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_kendaraan_idx` (`kendaraan_id`),
  ADD KEY `fk_transaksi_area_parkir_idx` (`area_parkir_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `area_parkir`
--
ALTER TABLE `area_parkir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kampus`
--
ALTER TABLE `kampus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `area_parkir`
--
ALTER TABLE `area_parkir`
  ADD CONSTRAINT `fk_area_parkir_kampus1` FOREIGN KEY (`kampus_id`) REFERENCES `kampus` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD CONSTRAINT `fk_kendaraan_Jenis` FOREIGN KEY (`jenis_kendaraan_id`) REFERENCES `jenis` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_area_parkir` FOREIGN KEY (`area_parkir_id`) REFERENCES `area_parkir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_transaksi_kendaraan` FOREIGN KEY (`kendaraan_id`) REFERENCES `kendaraan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
