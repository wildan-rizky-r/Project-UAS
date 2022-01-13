-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jan 2022 pada 13.01
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
-- Database: `wildan_bm`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun`
--

CREATE TABLE `akun` (
  `idAkun` int(10) NOT NULL,
  `kode_akun` varchar(10) NOT NULL,
  `nama_akun` varchar(30) NOT NULL,
  `harga` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `akun`
--

INSERT INTO `akun` (`idAkun`, `kode_akun`, `nama_akun`, `harga`) VALUES
(1, 'C0001', 'Genshin Impact Account', 1400000),
(2, 'C0002', 'Life After Account', 1000000),
(3, 'C0003', 'Onmyoji Arena Account', 900000),
(4, 'C0004', 'Identity V Account', 500000),
(5, 'C0005', 'Clash of Clans Account', 400000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `idBarang` int(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`idBarang`, `kode_barang`, `nama_barang`, `harga`) VALUES
(1, 'A0001', 'Samsung S21 Ultra', 15000000),
(3, 'A0002', 'Katana Sword', 2500000),
(4, 'A0003', 'Iphone 12 Pro Max', 16500000),
(5, 'A0004', 'WD My Passport 1TB', 500000),
(6, 'A0005', 'Mistery Box Mini', 100000),
(7, 'A0006', 'Mistery Box Medium', 1000000),
(8, 'A0007', 'Mistery Box Big', 5000000),
(9, 'A0008', 'Zulfikar Sword', 9000000),
(10, 'A0009', 'Damascus Sword', 7000000),
(11, 'A0010', 'Sandisk Cruzer Blade 64 GB', 50000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `beli`
--

CREATE TABLE `beli` (
  `idBeli` int(10) NOT NULL,
  `idBarang` int(10) NOT NULL,
  `harga` int(15) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `beli`
--

INSERT INTO `beli` (`idBeli`, `idBarang`, `harga`, `jumlah`) VALUES
(9, 1, 15000000, 4),
(10, 11, 50000, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `idUsers` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `tingkat` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`idUsers`, `nama`, `username`, `password`, `tingkat`) VALUES
(1, 'Wildan Rizky Ramadlan', 'wildanrr', '1234567', 'admin'),
(2, 'Blis', 'blisss', '12345', 'user'),
(3, 'Wazo Arsyuu', 'wazo', '12345', 'user'),
(4, 'Lavietech', 'lav', '123', 'user'),
(5, 'Sanasira Hanakari', 'sanas', '12345', 'user'),
(6, 'Ashkhary Tekano', 'tekano', '123', 'user'),
(7, 'Haza', 'haza', '12345', 'user'),
(8, 'Ashiba Arsyuu', 'ashiba', '12345', 'user'),
(10, 'Narendra Betha Baskara Al Arof', 'bagas', '12345', 'admin'),
(11, 'Sin Renaray', 'ray', '123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`idAkun`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idBarang`);

--
-- Indeks untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD PRIMARY KEY (`idBeli`),
  ADD KEY `idBarang` (`idBarang`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun`
--
ALTER TABLE `akun`
  MODIFY `idAkun` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `idBarang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `beli`
--
ALTER TABLE `beli`
  MODIFY `idBeli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `beli`
--
ALTER TABLE `beli`
  ADD CONSTRAINT `beli_ibfk_1` FOREIGN KEY (`idBarang`) REFERENCES `barang` (`idBarang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
