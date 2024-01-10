-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2024 pada 16.34
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
-- Database: `uasdeni`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_tabel_muzakki`
--

CREATE TABLE `nama_tabel_muzakki` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nama_tabel_muzakki`
--

INSERT INTO `nama_tabel_muzakki` (`id`, `nama`, `alamat`) VALUES
(1, 'syekh badrun', 'johar baru'),
(2, 'syekh brown', 'johar baru'),
(3, 'Muhammad bin Abdullah', 'Jalan Al-Hidayah No. 3'),
(4, 'Ali bin Umar', 'Jalan Al-Falah No. 4'),
(5, 'Omar bin Khattab', 'Jalan Al-Barokah No. 5'),
(6, 'Ahmad bin Hasan', 'Jalan Al-Khair No. 6'),
(7, 'Yusuf bin Ibrahim', 'Jalan Al-Rahmah No. 7'),
(8, 'Ismail bin Ali', 'Jalan Al-Jannah No. 8'),
(9, 'Abdul Rahman bin Talha', 'Jalan Al-Nur No. 9'),
(10, 'Hamza bin Khalid', 'Jalan Al-Qist No. 10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nama_tabel_user`
--

CREATE TABLE `nama_tabel_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `nama_tabel_user`
--

INSERT INTO `nama_tabel_user` (`id`, `nama`, `email`) VALUES
(1, 'deni', 'johar baru'),
(2, 'john', 'johar baru'),
(3, 'John Doe', 'john@example.com'),
(4, 'Jane Smith', 'jane@example.com'),
(5, 'Alex Johnson', 'alex@example.com'),
(6, 'Emily Davis', 'emily@example.com'),
(7, 'Michael Brown', 'michael@example.com'),
(8, 'Olivia Wilson', 'olivia@example.com'),
(9, 'William Taylor', 'william@example.com'),
(10, 'Sophia Martinez', 'sophia@example.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabelpermintaanzakat`
--

CREATE TABLE `tabelpermintaanzakat` (
  `id` int(11) NOT NULL,
  `datetime` date DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `muzakki_id` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `no_nota` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tabelpermintaanzakat`
--

INSERT INTO `tabelpermintaanzakat` (`id`, `datetime`, `user_id`, `muzakki_id`, `keterangan`, `no_nota`) VALUES
(6, '2024-01-08', 1, 1, 'sudah membayar', '2138219839213'),
(8, '2024-01-08', 2, 2, 'sudah membayar', '21732918739'),
(10, '2024-01-23', 1, 1, 'keterangan baru', '238190312');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `nama_tabel_muzakki`
--
ALTER TABLE `nama_tabel_muzakki`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `nama_tabel_user`
--
ALTER TABLE `nama_tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabelpermintaanzakat`
--
ALTER TABLE `tabelpermintaanzakat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `muzakki_id` (`muzakki_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `nama_tabel_muzakki`
--
ALTER TABLE `nama_tabel_muzakki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `nama_tabel_user`
--
ALTER TABLE `nama_tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabelpermintaanzakat`
--
ALTER TABLE `tabelpermintaanzakat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabelpermintaanzakat`
--
ALTER TABLE `tabelpermintaanzakat`
  ADD CONSTRAINT `tabelpermintaanzakat_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `nama_tabel_user` (`id`),
  ADD CONSTRAINT `tabelpermintaanzakat_ibfk_2` FOREIGN KEY (`muzakki_id`) REFERENCES `nama_tabel_muzakki` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
