-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 18.42
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `andre`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `clubs_210`
--

CREATE TABLE `clubs_210` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `year` char(4) DEFAULT NULL,
  `manager` varchar(100) DEFAULT NULL,
  `stadium` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `clubs_210`
--

INSERT INTO `clubs_210` (`id`, `name`, `country`, `year`, `manager`, `stadium`, `logo`) VALUES
(1, 'Manchester United', 'United Kingdom', '1878', 'Ralf Rangnick', 'Old Trafford', 'emyu.png'),
(2, 'Bayern Munich', 'Germany', '1900', 'Julian Nagelsmann', 'Allianz Arena', 'bayern.png'),
(3, 'FC Barcelona', 'Spain', '1899', 'Xavi Hernandez', 'Camp Nou', 'barca.png'),
(4, 'Juventus', 'Italy', '1897', 'Massimiliano Allegri', 'Juventus Stadium', 'juventus.png'),
(5, 'Paris Saint Germain', 'France', '1970', 'Mauricio Pochettino', 'Parc des Princes', 'psg.png'),
(6, 'Borussia Dortmund', 'Germany', '1909', 'Marco Rose', 'Signal Iduna Park', 'dortmund.png'),
(7, 'Arsenal', 'United Kingdom', '1886', 'Mikel Arteta', 'Emirates Stadium', 'arsenal.png'),
(8, 'Liverpool', 'United Kingdom', '1892', 'Jurgen Klopp', 'Anfield Stadium', 'liverpool.png'),
(9, 'Real Madrid CF', 'Spain', '1902', 'Carlo Ancelotti', 'Santiago Bernabeu', 'realmadrid.png'),
(10, 'A.C. Milan', 'Italy', '1899', 'Stefano Pioli', 'San Siro', 'acmilan.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `clubs_210`
--
ALTER TABLE `clubs_210`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `clubs_210`
--
ALTER TABLE `clubs_210`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
