-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Feb 2020 pada 06.12
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wewillwedo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_kunjungan`
--

CREATE TABLE `rm_kunjungan` (
  `no_kunjungan` int(11) NOT NULL,
  `no_rm` varchar(8) NOT NULL,
  `waktu` date NOT NULL,
  `petugas_tpa` smallint(11) NOT NULL,
  `model_jaminan` tinyint(11) NOT NULL,
  `umur` mediumint(9) NOT NULL,
  `jenis_kunjungan` enum('B','L') DEFAULT NULL,
  `resiko_jatuh` char(1) DEFAULT NULL,
  `jam_kunjung` time DEFAULT NULL,
  `tarif_billing` smallint(6) NOT NULL DEFAULT 12
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_personal`
--

CREATE TABLE `rm_personal` (
  `no_rm` varchar(8) NOT NULL,
  `no_ktp` varchar(16) DEFAULT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `jenis_kelamin` enum('1','2') DEFAULT NULL,
  `status_kawin` enum('1','2','3','4') DEFAULT NULL,
  `warganegara` enum('WNI','WNA') NOT NULL DEFAULT 'WNI',
  `pekerjaan` int(11) DEFAULT NULL,
  `agama` tinyint(11) DEFAULT NULL,
  `gol_darah` varchar(2) DEFAULT NULL,
  `jenis_pasien` int(1) DEFAULT NULL,
  `pendidikan` char(1) DEFAULT NULL,
  `lastupdate` datetime DEFAULT NULL,
  `id_suku` smallint(6) DEFAULT NULL,
  `id_disabilitas` tinyint(4) DEFAULT NULL,
  `foto_pasien` varchar(15) DEFAULT NULL,
  `sts_hidup` enum('H','M') NOT NULL DEFAULT 'H',
  `sts_retensi` enum('A','R') NOT NULL DEFAULT 'A',
  `lokasi_berkas` char(2) NOT NULL DEFAULT '15',
  `kartu_bpjs` varchar(18) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_anamnesis`
--

CREATE TABLE `rm_ralan_anamnesis` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `keluhan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_diagnosa`
--

CREATE TABLE `rm_ralan_diagnosa` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `diagnosa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_edukasi_topik`
--

CREATE TABLE `rm_ralan_edukasi_topik` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `edukasi_topik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_evaluasi`
--

CREATE TABLE `rm_ralan_evaluasi` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `evaluasi` text NOT NULL,
  `waktu_kontrol` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_keperawatan`
--

CREATE TABLE `rm_ralan_keperawatan` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `sumber_data` tinyint(4) NOT NULL,
  `cara_datang` tinyint(4) NOT NULL,
  `keluhan_utama` text NOT NULL,
  `riwayat_kes_skrg` text NOT NULL,
  `riwayat_kes_lama` text NOT NULL,
  `asesmen_psikologis` enum('Tenang','Cemas','Agitasi') NOT NULL,
  `status_fungsional` enum('Ringan','Sedang','Berat','Total') NOT NULL,
  `imt` enum('Ya','Tidak') NOT NULL,
  `bb` enum('Ya','Tidak') NOT NULL,
  `asupan_makan` enum('Ya','Tidak') NOT NULL,
  `sakit_berat` enum('Ya','Tidak') NOT NULL,
  `kognitif` enum('Ya','Tidak') NOT NULL,
  `motivasi_edukasi` enum('Ya','Tidak') NOT NULL,
  `keterbatasan_fisik` enum('Ya','Tidak') NOT NULL,
  `kebutuhan_penerjemah` enum('Ya','Tidak') NOT NULL,
  `kebutuhan_informasi` varchar(255) NOT NULL,
  `status_sosial` enum('Ya','Tidak') NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_masalah_keperawatan`
--

CREATE TABLE `rm_ralan_masalah_keperawatan` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_pemeriksaan`
--

CREATE TABLE `rm_ralan_pemeriksaan` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `gambar_pemeriksaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_rencainterven`
--

CREATE TABLE `rm_ralan_rencainterven` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `rencana_intervensi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_rencana_tindakan`
--

CREATE TABLE `rm_ralan_rencana_tindakan` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `rencana_tindakan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_riwayat_baru`
--

CREATE TABLE `rm_ralan_riwayat_baru` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `riwayat_kes_baru` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_sumber_data`
--

CREATE TABLE `rm_ralan_sumber_data` (
  `id_sumber_data` tinyint(4) NOT NULL,
  `sumber_data` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rm_ralan_sumber_data`
--

INSERT INTO `rm_ralan_sumber_data` (`id_sumber_data`, `sumber_data`) VALUES
(1, 'Pasien Sendiri'),
(2, 'Keluarga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_ralan_waktu_pelaksanaan`
--

CREATE TABLE `rm_ralan_waktu_pelaksanaan` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `waktu_pelaksanaan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_resiko_jatuh`
--

CREATE TABLE `rm_resiko_jatuh` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `resiko_dewasa` enum('Rendah','Sedang','Resiko Tinggi') NOT NULL,
  `resiko_anak` enum('Rendah','Sedang','Resiko Tinggi') NOT NULL,
  `resiko_geriarti` enum('Rendah','Sedang','Resiko Tinggi') NOT NULL,
  `resiko_jiwa` enum('Rendah','Sedang','Resiko Tinggi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_rujukan_internal`
--

CREATE TABLE `rm_rujukan_internal` (
  `no_kunjungan` int(11) NOT NULL,
  `id_unit` char(2) NOT NULL,
  `id_dokter` smallint(6) DEFAULT NULL,
  `status` enum('N','E') NOT NULL DEFAULT 'N',
  `cara_bayar` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_status_ekososial`
--

CREATE TABLE `rm_status_ekososial` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `hubungan_keluarga` enum('Baik','Tidak') NOT NULL,
  `tempat_tinggal` enum('Rumah Sendiri','Rumah Keluarga') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rm_tanda_vital`
--

CREATE TABLE `rm_tanda_vital` (
  `no_rm` char(8) NOT NULL,
  `no_kunjungan` int(11) NOT NULL,
  `keluhan_utama` text NOT NULL,
  `riwayat_kes_skrg` text NOT NULL,
  `riwayat_kes_lama` text NOT NULL,
  `suhu` smallint(6) NOT NULL,
  `nafas` smallint(6) NOT NULL,
  `bb` smallint(6) NOT NULL,
  `spo2` varchar(5) NOT NULL,
  `nadi` smallint(6) NOT NULL,
  `tekanan_darah` varchar(4) NOT NULL,
  `nyeri` smallint(6) NOT NULL,
  `tb` smallint(6) NOT NULL,
  `gcs` varchar(4) NOT NULL,
  `gcs_e` varchar(4) NOT NULL,
  `gcs_v` varchar(4) NOT NULL,
  `gcs_m` varchar(4) NOT NULL,
  `asesmen_psikologis` enum('Tenang','Cemas','Agitasi') NOT NULL,
  `status_fungsional` enum('Ringan','Sedang','Berat','Total') NOT NULL,
  `imt` enum('Ya','Tidak') NOT NULL,
  `sn_bb` enum('Ya','Tidak') NOT NULL,
  `asupan_makan` enum('Ya','Tidak') NOT NULL,
  `sakit_berat` enum('Ya','Tidak') NOT NULL,
  `kognitif` enum('Ya','Tidak') NOT NULL,
  `motivasi_edukasi` enum('Ya','Tidak') NOT NULL,
  `keterbatasan_fisik` enum('Ya','Tidak') NOT NULL,
  `kebutuhan_penerjemah` enum('Ya','Tidak') NOT NULL,
  `kebutuhan_informasi` varchar(255) NOT NULL,
  `status_sosial` enum('Ya','Tidak') NOT NULL,
  `tempat_tinggal` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `rm_kunjungan`
--
ALTER TABLE `rm_kunjungan`
  ADD PRIMARY KEY (`no_kunjungan`);

--
-- Indeks untuk tabel `rm_personal`
--
ALTER TABLE `rm_personal`
  ADD PRIMARY KEY (`no_rm`);

--
-- Indeks untuk tabel `rm_ralan_anamnesis`
--
ALTER TABLE `rm_ralan_anamnesis`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_diagnosa`
--
ALTER TABLE `rm_ralan_diagnosa`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_edukasi_topik`
--
ALTER TABLE `rm_ralan_edukasi_topik`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_evaluasi`
--
ALTER TABLE `rm_ralan_evaluasi`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_keperawatan`
--
ALTER TABLE `rm_ralan_keperawatan`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_masalah_keperawatan`
--
ALTER TABLE `rm_ralan_masalah_keperawatan`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_pemeriksaan`
--
ALTER TABLE `rm_ralan_pemeriksaan`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_rencainterven`
--
ALTER TABLE `rm_ralan_rencainterven`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_rencana_tindakan`
--
ALTER TABLE `rm_ralan_rencana_tindakan`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_riwayat_baru`
--
ALTER TABLE `rm_ralan_riwayat_baru`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_ralan_sumber_data`
--
ALTER TABLE `rm_ralan_sumber_data`
  ADD PRIMARY KEY (`id_sumber_data`);

--
-- Indeks untuk tabel `rm_ralan_waktu_pelaksanaan`
--
ALTER TABLE `rm_ralan_waktu_pelaksanaan`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_resiko_jatuh`
--
ALTER TABLE `rm_resiko_jatuh`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_rujukan_internal`
--
ALTER TABLE `rm_rujukan_internal`
  ADD PRIMARY KEY (`no_kunjungan`,`id_unit`);

--
-- Indeks untuk tabel `rm_status_ekososial`
--
ALTER TABLE `rm_status_ekososial`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- Indeks untuk tabel `rm_tanda_vital`
--
ALTER TABLE `rm_tanda_vital`
  ADD PRIMARY KEY (`no_rm`,`no_kunjungan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `rm_kunjungan`
--
ALTER TABLE `rm_kunjungan`
  MODIFY `no_kunjungan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `rm_ralan_sumber_data`
--
ALTER TABLE `rm_ralan_sumber_data`
  MODIFY `id_sumber_data` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
