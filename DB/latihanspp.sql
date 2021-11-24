-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2021 pada 07.45
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihanspp`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`) VALUES
(1, 'rousyati m.kom'),
(2, 'husni faqih m.kom');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(50) NOT NULL,
  `biaya` int(11) NOT NULL,
  `password` varchar(100) NOT NULL,
  `username` varchar(45) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama_siswa`, `kelas`, `tahun_ajaran`, `biaya`, `password`, `username`, `alamat`, `nohp`) VALUES
(3, 12345664, 'aziz mario', 'XII IPA', '2020/2021', 300000, '7a24156a1971d85acf2ae64d9dbdf5322566636f', 'aziz mario', 'Desa maribaya Kec.kramat, Kab.tegal', '0897665444'),
(10, 2147483647, 'itsna lutfia ardiansyiah', 'XII IPA', '2020/2021', 300000, '7a24156a1971d85acf2ae64d9dbdf5322566636f', 'Itsna luthfia', 'jl.semut no.12 desa mejasem Kec.kramat, Kab.Tegal', '08978907654322'),
(11, 398371098, 'Fida meilinda effendi', 'XII IPS', '2020/2021', 300000, '7a24156a1971d85acf2ae64d9dbdf5322566636f', 'fida', 'jl.gatot sriyadi kel.panggung timur Kec.Tegal Timur, Kota Tegal', '098765443335');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id_siswa` int(11) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `no_bayar` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `jml` int(11) NOT NULL,
  `ket` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id_siswa`, `id_spp`, `jatuh_tempo`, `bulan`, `no_bayar`, `tgl_bayar`, `jml`, `ket`, `id_user`) VALUES
(10, 1, '2020-07-10', 'Juli 2020', '2110030000', '2021-10-03', 300000, 'Lunas', 1),
(10, 2, '2020-08-10', 'Agustus 2020', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(10, 3, '2020-10-29', 'September 2020', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(10, 4, '2020-10-10', 'Oktober 2020', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(10, 5, '2020-11-30', 'November 2020', '', '0000-00-00', 300000, 'belum lunas', 1),
(10, 6, '2020-12-29', 'Desember 2017', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(10, 7, '2021-01-10', 'Januari 2021', '', '0000-00-00', 300000, 'belum_lunas', 1),
(10, 8, '2021-02-10', 'Februari 2021', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(10, 9, '2021-03-30', 'Maret 2021', '', '0000-00-00', 300000, 'belum lunas', 1),
(10, 10, '2021-04-10', 'April 2021', '', '0000-00-00', 300000, 'belum lunas', 1),
(10, 11, '2021-05-10', 'Mei 2021', '', '0000-00-00', 300000, 'belum lunas', 1),
(10, 12, '2021-06-10', 'Juni 2021', '', '0000-00-00', 300000, 'belum lunas', 1),
(11, 13, '2020-07-10', 'Juli 2020', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(11, 14, '2020-08-10', 'Agustus 2020', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(11, 15, '2020-09-10', 'September 2020', '', '0000-00-00', 300000, 'Belum Lunas', 1),
(11, 16, '2020-10-10', 'Oktober 2020', '', '0000-00-00', 300000, 'belum lunas', 1),
(11, 17, '2020-11-10', 'November 2020', '', '0000-00-00', 300000, 'belum lunas', 1),
(11, 18, '2020-12-10', 'Desember 2020', '', '0000-00-00', 300000, 'belum lunas', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `level` enum('admin') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `alamat`, `nohp`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'aziz mario', 'admin', 'desa maribaya', '08976544444455'),
(4, 'admin2', '957394825cbaf1781d6a0b0393f2595732008a3c', 'Ridamayanti', 'admin', 'Kelurahan slerok', '087654444557');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wali_kelas`
--

CREATE TABLE `wali_kelas` (
  `kelas` varchar(50) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `wali_kelas`
--

INSERT INTO `wali_kelas` (`kelas`, `id_guru`) VALUES
('XII IPA', 1),
('XII IPS', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `kelas` (`kelas`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD KEY `spp_ibfk_2` (`id_siswa`),
  ADD KEY `spp_ibfk_1` (`id_user`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD PRIMARY KEY (`kelas`),
  ADD KEY `id_guru` (`id_guru`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`kelas`) REFERENCES `wali_kelas` (`kelas`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `spp_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `spp_ibfk_2` FOREIGN KEY (`id_siswa`) REFERENCES `siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wali_kelas`
--
ALTER TABLE `wali_kelas`
  ADD CONSTRAINT `wali_kelas_ibfk_1` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
