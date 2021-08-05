-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Feb 2021 pada 12.23
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simdes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `domisili`
--

CREATE TABLE `domisili` (
  `id_domisili` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `no_surat_rt` varchar(255) NOT NULL,
  `tanggal_domisili` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `domisili`
--

INSERT INTO `domisili` (`id_domisili`, `id_pejabat`, `nik`, `no_surat_rt`, `tanggal_domisili`) VALUES
(1, 1, '352427320009193', '02', '2021-02-12'),
(2, 1, '324204428292922', '03', '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu`
--

CREATE TABLE `kartu` (
  `no_kk` bigint(16) NOT NULL,
  `nik` bigint(16) NOT NULL,
  `kepala_keluarga` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kartu`
--

INSERT INTO `kartu` (`no_kk`, `nik`, `kepala_keluarga`, `alamat`, `jenis_kelamin`) VALUES
(234986739174651, 234986739174652, 'Yogi', 'Suci', 'Laki Laki'),
(321689654231387, 321689654231382, 'Sandi Al-Aziz', 'PPS', 'Laki Laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `id_kelahiran` bigint(12) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pukul` time NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `nama_ayah` varchar(20) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `alamat` varchar(59) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`id_kelahiran`, `nama`, `tempat_lahir`, `tanggal_lahir`, `pukul`, `jenis_kelamin`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `alamat`, `rt`, `rw`, `keterangan`) VALUES
(3, 'Rozi', 'Lamongan', '2021-02-09', '09:19:00', 'Laki Laki', 'Azmi', 'Kontraktor', 'Rosidah', 'Ibu rumah tangga', 'Suci', '001', '002', '-'),
(4, 'Ferdy', 'Gresik', '2021-02-15', '16:02:00', 'Laki Laki', 'Amrizal', 'Karyawan Swasta', 'Selvy', 'Guru', 'PPS', '002', '004', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` bigint(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `hari_wafat` varchar(20) NOT NULL,
  `tanggal_wafat` date NOT NULL,
  `pukul` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `pekerjaan`, `alamat`, `rt`, `rw`, `hari_wafat`, `tanggal_wafat`, `pukul`) VALUES
(6, 'Muhamad Salman Al-Farisi', 'Laki Laki', 'Lamongan', '2021-02-09', 'Islam', 'Kontraktor', 'Suci', '1', '1', 'jumat', '2021-02-09', '08:02:00'),
(7, 'Sandi', 'Laki Laki', 'Gresik', '2021-02-15', 'Islam', 'Guru', 'Suci', '002', '004', 'jumat', '2021-02-15', '16:01:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pejabat`
--

CREATE TABLE `pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama_pejabat` varchar(255) NOT NULL,
  `nip_pejabat` varchar(255) NOT NULL,
  `jabatan_pejabat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pejabat`
--

INSERT INTO `pejabat` (`id_pejabat`, `nama_pejabat`, `nip_pejabat`, `jabatan_pejabat`) VALUES
(1, 'ACHMAD RIZAL,SE,', '-', 'Kepala Desa'),
(2, 'Showabur Rohman', '-', 'Sekertaris Desa'),
(3, 'A. Ridwan', '-', 'Kaur Pemerintahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` bigint(16) NOT NULL,
  `no_kk` bigint(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `golongan_darah` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rt`, `rw`, `agama`, `status_perkawinan`, `pendidikan`, `pekerjaan`, `status`, `golongan_darah`, `kewarganegaraan`) VALUES
(324204428292922, 324204428292921, 'Ahmad Hanafi', 'Gresik', '2021-02-15', 'Laki Laki', 'Suci', '002', '004', 'Islam', 'Belum Menikah', 'S1', 'Arsitektur', 'Tetap', '-', 'Indonesia'),
(352427320009193, 234986739174651, 'Muhamad Salman Al-Farisi', 'Gresik', '2021-02-09', 'Laki Laki', 'Suci  ', '001', '002', 'Islam', 'Menikah', 'S1', 'Kontraktor', 'Tetap', '-', 'Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id_penghasilan` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `keperluan_penghasilan` text NOT NULL,
  `jumlah_penghasilan` int(11) NOT NULL,
  `tanggal_penghasilan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penghasilan`
--

INSERT INTO `penghasilan` (`id_penghasilan`, `id_pejabat`, `nik`, `keperluan_penghasilan`, `jumlah_penghasilan`, `tanggal_penghasilan`) VALUES
(2, 1, '3524273200091932', 'kredit', 1000000, '2021-02-06'),
(3, 1, '352427320009193', 'Kredit KPR', 1000000, '2021-02-09'),
(4, 1, '324204428292922', 'Kredit Motor', 2000000, '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindah`
--

CREATE TABLE `pindah` (
  `nik` bigint(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `rt` int(3) NOT NULL,
  `rw` int(3) NOT NULL,
  `alasan_pindah` varchar(10) NOT NULL,
  `tanggal_pindah` date NOT NULL,
  `alamat_tujuan` varchar(50) NOT NULL,
  `jenis_pindah` varchar(50) NOT NULL,
  `klasifikasi_pindah` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pindah`
--

INSERT INTO `pindah` (`nik`, `nama`, `agama`, `pekerjaan`, `alamat`, `rt`, `rw`, `alasan_pindah`, `tanggal_pindah`, `alamat_tujuan`, `jenis_pindah`, `klasifikasi_pindah`) VALUES
(1345, 'Rozi', 'Islam', 'Kontraktor', 'Suci ', 1, 3, 'Pekerjaan', '2021-02-09', 'Gresik', 'Kepala Keluarga', 'Antar Desa'),
(32420442829292, 'Ahmad Hanafi', 'Islam', 'Guru', 'Suci', 2, 4, 'Pekerjaan', '2021-02-15', 'PPS', 'Anggota Keluarga', 'Antar Kab/Kota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skck`
--

CREATE TABLE `skck` (
  `id_skck` int(50) NOT NULL,
  `id_pejabat` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `tanggal_skck` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `skck`
--

INSERT INTO `skck` (`id_skck`, `id_pejabat`, `nik`, `tanggal_skck`) VALUES
(0, 1, '3524273200091932', '2021-02-06'),
(2, 1, '352427320009193', '2021-02-09'),
(3, 1, '324204428292922', '2021-02-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` enum('admin','kepaladesa','sekertaris') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `nama_petugas`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
('kepaladesa', 'dabacc3bca86c8e5120e33bc112363b6', 'Achmad Rizal, SE', 'kepaladesa'),
('sekdes', 'cee7a77b9db0dc8ceaf40962ba25f473', 'Showabur Rohman', 'sekertaris');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `domisili`
--
ALTER TABLE `domisili`
  ADD PRIMARY KEY (`id_domisili`);

--
-- Indeks untuk tabel `kartu`
--
ALTER TABLE `kartu`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `pejabat`
--
ALTER TABLE `pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `pindah`
--
ALTER TABLE `pindah`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `skck`
--
ALTER TABLE `skck`
  ADD PRIMARY KEY (`id_skck`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `domisili`
--
ALTER TABLE `domisili`
  MODIFY `id_domisili` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id_penghasilan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `skck`
--
ALTER TABLE `skck`
  MODIFY `id_skck` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
