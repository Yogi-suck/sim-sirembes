-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Des 2020 pada 05.01
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tpe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_berita`
--

CREATE TABLE `tbl_berita` (
  `id_berita` int(3) NOT NULL,
  `kategori_berita` varchar(100) NOT NULL,
  `isi_berita` varchar(100) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_berita`
--

INSERT INTO `tbl_berita` (`id_berita`, `kategori_berita`, `isi_berita`, `gambar`) VALUES
(4, 'gotong royong', 'besok gotong royong membersihkan jalan depan balai desa penungkulan', 'img_gotongroyong.jpg'),
(7, 'Lelayu', 'Mbah sunardi meinggal dunia tadi sore', 'img_lelayu.jpg'),
(8, 'Kumpul Karangtaruna', 'Besok malam seluruh anggota karang taruna kumpul di rumah ketua karangtaruna', 'img_karangtaruna.jpg'),
(9, 'Sirembes', 'Dusun sirembes Di nobatkan menjadi dusun tersubur', 'img_universal.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_datang`
--

CREATE TABLE `tbl_datang` (
  `id_datang` int(3) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_datang`
--

INSERT INTO `tbl_datang` (`id_datang`, `nama_penduduk`, `alamat_asal`, `alamat_tujuan`) VALUES
(1, 'Hendro Andi a', 'Donorati, Loano, Purworejo', 'Penungkulan, Gebang, Purworejo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelahiran`
--

CREATE TABLE `tbl_kelahiran` (
  `id_kelahiran` int(3) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kelahiran`
--

INSERT INTO `tbl_kelahiran` (`id_kelahiran`, `nama_penduduk`, `tgl_lahir`) VALUES
(4, 'gibran', '2020-06-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kematian`
--

CREATE TABLE `tbl_kematian` (
  `id_kematian` int(3) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `tgl_kematian` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kematian`
--

INSERT INTO `tbl_kematian` (`id_kematian`, `nama_penduduk`, `tgl_kematian`) VALUES
(1, 'sunardi', '12 Novemner 2020'),
(3, 'arip', '12 desember 2020'),
(5, 'Mukarif a', '2020-12-03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kk`
--

CREATE TABLE `tbl_kk` (
  `id_kk` int(3) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `nama_orang_tua` varchar(100) NOT NULL,
  `ndi` varchar(100) NOT NULL,
  `status_hubungan_keluarga` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `status_perkawinan` varchar(100) NOT NULL,
  `tgl_lahir` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `kwarganegaraan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_kk`
--

INSERT INTO `tbl_kk` (`id_kk`, `nama_lengkap`, `nik`, `jenis_kelamin`, `agama`, `nama_orang_tua`, `ndi`, `status_hubungan_keluarga`, `pekerjaan`, `status_perkawinan`, `tgl_lahir`, `pendidikan`, `kwarganegaraan`) VALUES
(1, 'Yogi Sukmono Aji s', '333333333333', 'Laki laki', 'islam', 'Slamet Andayani', '1234567890', 'Anak', 'Mahasiswa', 'Belum Kawin', '06 Januari 2000', 'Mahasiswa', 'Indonesia'),
(3, 'febiliawati', '232323232323', 'Perempuan', 'islam', 'misri', '23232121212', 'Anak', 'kariawan', 'Belum kawin', '2000-06-02', 'AKADEMI/ DIPLOMA III/S. MUDA', 'indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_penduduk`
--

CREATE TABLE `tbl_penduduk` (
  `id_penduduk` int(3) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `alamat_penduduk` varchar(100) NOT NULL,
  `nomer_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_penduduk`
--

INSERT INTO `tbl_penduduk` (`id_penduduk`, `nama_penduduk`, `alamat_penduduk`, `nomer_hp`) VALUES
(1, 'yogi sukmono aji', 'sirembes rt1 rw 1', '087897444678'),
(2, 'danang satyaka', 'sirembes rt 3 rw 1', '085123123123'),
(3, 'hadifatoni', 'sirembes rt 2 rw 1', '085456456456');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pindah`
--

CREATE TABLE `tbl_pindah` (
  `id_pindah` int(3) NOT NULL,
  `nama_penduduk` varchar(100) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `alamat_tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_pindah`
--

INSERT INTO `tbl_pindah` (`id_pindah`, `nama_penduduk`, `alamat_asal`, `alamat_tujuan`) VALUES
(1, 'Mukarif a', 'kaliangkrik, magelang', 'penungkulan, purworejo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(3) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'A'),
(2, 'yogi sukmono', 'yogi123', 'O');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tbl_datang`
--
ALTER TABLE `tbl_datang`
  ADD PRIMARY KEY (`id_datang`);

--
-- Indeks untuk tabel `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  ADD PRIMARY KEY (`id_kk`);

--
-- Indeks untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  ADD PRIMARY KEY (`id_pindah`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_berita`
--
ALTER TABLE `tbl_berita`
  MODIFY `id_berita` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_datang`
--
ALTER TABLE `tbl_datang`
  MODIFY `id_datang` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelahiran`
--
ALTER TABLE `tbl_kelahiran`
  MODIFY `id_kelahiran` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_kematian`
--
ALTER TABLE `tbl_kematian`
  MODIFY `id_kematian` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_kk`
--
ALTER TABLE `tbl_kk`
  MODIFY `id_kk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_penduduk`
--
ALTER TABLE `tbl_penduduk`
  MODIFY `id_penduduk` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_pindah`
--
ALTER TABLE `tbl_pindah`
  MODIFY `id_pindah` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
