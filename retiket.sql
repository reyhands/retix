-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 Apr 2020 pada 20.11
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `retiket`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(3) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(400) NOT NULL,
  `jenis` int(2) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama`, `deskripsi`, `jenis`, `harga`, `tanggal`) VALUES
(72, 'ee', 'eq', 3, '300.000~900.000', '2020-09-30'),
(103, 'THE CHANGCUTERS 2020', '', 0, '', '0000-00-00'),
(104, 'THE CHANGCUTERS 2020', '', 0, '', '0000-00-00'),
(105, 'THE CHANGCUTERS 2020', '', 0, '', '0000-00-00'),
(106, '', '', 0, '', '0000-00-00'),
(107, 'THE CHANGCUTERS 2020', '', 0, '', '0000-00-00'),
(108, 'THE CHANGCUTERS 2020', '', 0, '', '0000-00-00'),
(109, 'THE CHANGCUTERS 202038', 'knknkn1', 2, '', '2023-08-09'),
(110, 'THE CHANGCUTERS 20201', '', 3, '', '0000-00-00'),
(111, 'THE CHANGCUTERS 20201', '', 3, '', '0000-00-00'),
(112, 'THE CHANGCUTERS 2020', '', 2, '', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event_tiket`
--

CREATE TABLE `event_tiket` (
  `id_tiket` int(3) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `stock` int(4) NOT NULL,
  `sold` int(4) NOT NULL,
  `id_event` int(3) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event_tiket`
--

INSERT INTO `event_tiket` (`id_tiket`, `nama`, `stock`, `sold`, `id_event`, `harga`) VALUES
(120, 'lapngan1', 30, 0, 109, 3000),
(122, 'festival', 30, 0, 110, 3000),
(123, 'festival', 90, 0, 110, 9000),
(124, '', 0, 0, 110, 0),
(125, 'festival', 30, 0, 111, 3000),
(126, 'festival', 90, 0, 111, 9000),
(127, '', 0, 0, 111, 0),
(128, 'festival', 30, 0, 112, 3000),
(129, 'festival', 90, 0, 112, 9000),
(134, '123', 0, 0, 109, 9099);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nohp` varchar(19) NOT NULL,
  `tingkatan` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `email`, `nama`, `password`, `nohp`, `tingkatan`) VALUES
('pengguna1', 'pengguna1@gmail.com', 'pengguna', 'pengguna', '081', 1),
('reyhands', 'reyhan2129@gmail.com', 'Reyhan Devara Samudra', '24092001', '081324717062', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `event_tiket`
--
ALTER TABLE `event_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `event_tiket` (`id_event`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `event_tiket`
--
ALTER TABLE `event_tiket`
  MODIFY `id_tiket` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `event_tiket`
--
ALTER TABLE `event_tiket`
  ADD CONSTRAINT `event_tiket` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
