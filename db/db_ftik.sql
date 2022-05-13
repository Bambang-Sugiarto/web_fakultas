-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2022 pada 04.29
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
-- Database: `db_ftik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'c5c4a1bb012585f9b855e0fcea7a1146db026c9f', '878f4fdfc179225287c4ebcd673365da2761d15b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_biaya`
--

CREATE TABLE `tb_biaya` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_biaya`
--

INSERT INTO `tb_biaya` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(1, 'BIaya Pendidikan Program Studi di FTIK Dua211', '21. BIaya Pendidikan Program Studi TM, TI, TS, Informatika di Fakultas Teknik dan Ilmu Komputer', 'slider 1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_brosur`
--

CREATE TABLE `tb_brosur` (
  `id` int(11) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_brosur`
--

INSERT INTO `tb_brosur` (`id`, `judul`, `deskripsi`, `foto`) VALUES
(3, '122212', '112', 'wallpaperbetter1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `kritiksaran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kritiksaran`
--

INSERT INTO `tb_kritiksaran` (`id`, `nama`, `email`, `kritiksaran`) VALUES
(2, 'Hendyas Aryo Ugroseno, S.IP', 'hendiakuntansi@gmail.com', 'Websitenya bagus dan informatif'),
(3, 'bams', 'bambangsugiarto2427@gmail.com', 'pelayanan yang ada di ftik sudah sangat bagus ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `waktu` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`id`, `judul`, `deskripsi`, `foto`, `waktu`) VALUES
(17, 'Pengumuman Ujian Skripsi Tahap 2125', 'Sidang Skripsi 2125', 'slider 1.jpg', '2022-01-19'),
(19, 'UAS TA. GASAL 2021/2022', 'UAS KUY', 'img103.png', '2022-01-19'),
(20, 'Informasi Registrasi TA. Genap 2021/2022', 'Registrasi semester genap', 'img102.jpg', '2022-01-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nipy` varchar(55) NOT NULL,
  `nidn` varchar(55) NOT NULL,
  `jabatan` varchar(55) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id`, `nama`, `nipy`, `nidn`, `jabatan`, `foto`) VALUES
(2, 'Dr. Agus Wibowo, M.T1', '1265181019721', '06181072011', 'Dekan', 'slider 1.jpg'),
(3, 'Ahmad Farid, MT', '191511101978', '0611107602', 'Wakil Dekan 1', 'LenovoWallPaper.jpg'),
(4, 'M. Fajar Nurwildani, MT', '1985101978', '0606107802', 'Wakil Dekan 2', 'Untitled-1.jpg'),
(5, 'M. Agus Sidiq, MT', '20562111978', '0602017803', 'Wakil Dekan 3', 'img101.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pmb`
--

CREATE TABLE `tb_pmb` (
  `id` int(11) NOT NULL,
  `judul` varchar(125) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_slider`
--

CREATE TABLE `tb_slider` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_slider`
--

INSERT INTO `tb_slider` (`id`, `gambar`) VALUES
(4, 'slider 1.jpg'),
(5, 'slider 2.jpg'),
(6, 'slider 3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_biaya`
--
ALTER TABLE `tb_biaya`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_brosur`
--
ALTER TABLE `tb_brosur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pmb`
--
ALTER TABLE `tb_pmb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_biaya`
--
ALTER TABLE `tb_biaya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_brosur`
--
ALTER TABLE `tb_brosur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_pmb`
--
ALTER TABLE `tb_pmb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
