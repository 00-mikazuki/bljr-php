-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2023 pada 03.30
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
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `manga`
--

CREATE TABLE `manga` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `author` varchar(250) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `status` varchar(64) NOT NULL,
  `cover` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `manga`
--

INSERT INTO `manga` (`id`, `judul`, `author`, `tahun`, `status`, `cover`) VALUES
(1, 'Attack on Titan', 'Hajime Isayama', '2009', 'Ended', '64d4fe67cc711.jpg'),
(2, 'Blue Lock', 'Kaneshiro Muneyuki', '2018', 'Ongoing', 'blue-lock.jpg'),
(3, 'Chainsaw Man', 'Fujimoto Tatsuki', '2018', 'Ongoing', 'csm.jpg'),
(4, 'Black Clover', 'Tabata Yuuki', '2015', 'Ongoing', 'black-clover.jpg'),
(5, 'Haikyuu', 'Furudate Haruichi', '2012', 'Ended', 'haikyuu.jpg'),
(7, 'Jujutsu Kaisen', 'Gege Akutami', '2018', 'Ongoing', 'jjk.jpg'),
(9, 'My Hero Academia', 'Horikoshi, Kouhei', '2014', 'Ongoing', 'mha.jpg'),
(10, 'One Punch-Man', 'Murata, Yusuke', '2012', 'Ongoing', 'opm.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'juan', '$2y$10$GfSZW8gZUOyO92F7Y2fS4uh7kIIFVI8e4rMIniU1Da02cxcT.G/ra'),
(2, 'admin', '$2y$10$ViV7DYWynAQPcwqpgRd7ZutdSBlMSXUZ3.5gDMVnAxoxNxOJN7XDi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `manga`
--
ALTER TABLE `manga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
