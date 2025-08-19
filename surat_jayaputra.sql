-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 19 Agu 2025 pada 01.50
-- Versi server: 9.1.0
-- Versi PHP: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_jayaputra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `namespace` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `time` int NOT NULL,
  `batch` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(9, '2025-07-29-033604', 'App\\Database\\Migrations\\CreateUsersTable', 'default', 'App', 1755188741, 1),
(10, '2025-08-09-230622', 'App\\Database\\Migrations\\CreatePengajuanSurat', 'default', 'App', 1755188741, 1),
(11, '2025-08-13-054734', 'App\\Database\\Migrations\\CreateSuratSktm', 'default', 'App', 1755188741, 1),
(12, '2025-08-13-064552', 'App\\Database\\Migrations\\CreateSuratDomisili', 'default', 'App', 1755188741, 1),
(13, '2025-08-14-231421', 'App\\Database\\Migrations\\CreateSuratKTP', 'default', 'App', 1755213639, 2),
(14, '2025-08-14-233755', 'App\\Database\\Migrations\\CreateSuratSKU', 'default', 'App', 1755215013, 3),
(15, '2025-08-15-000924', 'App\\Database\\Migrations\\CreateSuratKelahiran', 'default', 'App', 1755216769, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_surat`
--

DROP TABLE IF EXISTS `pengajuan_surat`;
CREATE TABLE IF NOT EXISTS `pengajuan_surat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pengajuan` date NOT NULL,
  `jenis_surat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci,
  `tempat_lahir` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

DROP TABLE IF EXISTS `surat`;
CREATE TABLE IF NOT EXISTS `surat` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `status_pekerjaan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `desil` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `penghasilan` bigint DEFAULT NULL,
  `keperluan` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_surat` date NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat`
--

INSERT INTO `surat` (`id`, `nama`, `nik`, `kk`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_perkawinan`, `alamat`, `status_pekerjaan`, `desil`, `penghasilan`, `keperluan`, `tanggal_surat`, `created_at`, `updated_at`) VALUES
(1, 'Randika', '2203010535', '12212121212', 'L', 'Tasikmalaya', '2025-08-12', 'Islam', 'Belum Kawin', 'Kp.Ngr', 'Mahasiswa', 'Sukapura', 1000000, '', '2025-08-14', '2025-08-14 16:26:34', '2025-08-14 16:26:34'),
(4, 'Randika', '2203010535', '12212121212s2121', 'L', 'Tasikmalaya', '2025-08-12', 'Islam', 'Belum Kawin', 'Jl.Cipaku', 'Mahasiswa', 'Sukapura', 1000000, '', '2025-08-15', '2025-08-15 03:11:44', '2025-08-15 03:11:44'),
(5, 'Randika', '2203010535', '12212121212s2121', 'L', 'Tasikmalaya', '2025-08-12', 'Islam', 'Belum Kawin', 'Jl.Cipaku', 'Mahasiswa', 'Sukapura', 1000000, '', '2025-08-15', '2025-08-15 03:32:25', '2025-08-15 03:32:25'),
(3, 'Randika', '2203010535', '12212121212s2121', 'L', 'Tasikmalaya', '2025-08-12', 'Islam', 'Belum Kawin', 'Kp.Nanggewer', 'Mahasiswa', 'Sukapura', 1000000, '', '2025-08-14', '2025-08-14 16:28:23', '2025-08-14 16:28:23'),
(6, 'Nihil aut accusamus ', 'Occaecat sed enim of', 'Nam perspiciatis si', 'P', 'Voluptas veniam des', '2015-12-23', 'Est consectetur fug', 'Belum Kawin', 'Omnis aliquam velit', 'Vero autem consectet', 'Blanditiis accusanti', 5, '', '2025-08-19', '2025-08-19 01:49:01', '2025-08-19 01:49:01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_domisili`
--

DROP TABLE IF EXISTS `surat_domisili`;
CREATE TABLE IF NOT EXISTS `surat_domisili` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `rw` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `status` enum('Pending','Disetujui','Ditolak') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_domisili`
--

INSERT INTO `surat_domisili` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `pekerjaan`, `alamat`, `rt`, `rw`, `keperluan`, `tanggal_pengajuan`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Topik', 'Sed veritatis quos v', '2003-11-03', 'Laki-laki', 'Non dolorem ea eum o', 'Laborum accusantium', 'Atque perspiciatis', 'Omn', 'Et ', 'Laborum delectus it', '1982-12-16', 'Pending', '2025-08-14 16:38:18', '2025-08-14 16:38:18'),
(5, 'Dolore omnis ut quis', 'Reprehenderit sint q', '1977-02-13', 'Perempuan', 'Commodo id totam vel', 'Consequuntur nesciun', 'Qui quasi culpa volu', 'Con', 'Qui', 'Nisi nostrud consequ', '2000-10-01', 'Pending', '2025-08-19 01:05:32', '2025-08-19 01:05:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_kelahiran`
--

DROP TABLE IF EXISTS `surat_kelahiran`;
CREATE TABLE IF NOT EXISTS `surat_kelahiran` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_bayi` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_kelamin_bayi` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_bayi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir_bayi` date NOT NULL,
  `waktu_lahir` time DEFAULT NULL,
  `anak_ke` int DEFAULT NULL,
  `berat_badan` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `panjang_badan` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama_ayah` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_ayah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `nik_ayah` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `agama_ayah` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan_ayah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ayah` text COLLATE utf8mb4_general_ci NOT NULL,
  `nama_ibu` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `nik_ibu` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `agama_ibu` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan_ibu` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ibu` text COLLATE utf8mb4_general_ci NOT NULL,
  `nama_pelapor` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `hubungan_bayi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_pelapor` text COLLATE utf8mb4_general_ci NOT NULL,
  `nik_pelapor` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_saksi1` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nik_saksi1` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_saksi2` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nik_saksi2` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_kelahiran`
--

INSERT INTO `surat_kelahiran` (`id`, `nama_bayi`, `jenis_kelamin_bayi`, `tempat_lahir_bayi`, `tanggal_lahir_bayi`, `waktu_lahir`, `anak_ke`, `berat_badan`, `panjang_badan`, `nama_ayah`, `tempat_lahir_ayah`, `tanggal_lahir_ayah`, `nik_ayah`, `agama_ayah`, `pekerjaan_ayah`, `alamat_ayah`, `nama_ibu`, `tempat_lahir_ibu`, `tanggal_lahir_ibu`, `nik_ibu`, `agama_ibu`, `pekerjaan_ibu`, `alamat_ibu`, `nama_pelapor`, `hubungan_bayi`, `alamat_pelapor`, `nik_pelapor`, `nama_saksi1`, `nik_saksi1`, `nama_saksi2`, `nik_saksi2`, `keperluan`, `tanggal_pengajuan`, `created_at`, `updated_at`) VALUES
(3, 'Perspiciatis mollit', 'Perempuan', 'Nulla distinctio Qu', '2024-03-07', '06:41:00', 79, 'Ex blandit', 'Voluptates', 'Esse voluptates saep', 'Minima non tempor qu', '2007-03-24', 'Quibusdam sunt volup', 'Fugiat ratione offi', 'Dolorum distinctio ', 'Aut sed sunt at nemo', 'Incidunt provident', 'Vero dolorem consect', '2007-02-28', 'Perferendis ratione ', 'Eius molestias Nam a', 'Delectus in volupta', 'Illum id aut verit', 'Consectetur adipisi', 'Ratione anim ut ulla', 'Velit veniam ut re', 'Inventore veniam es', 'Id quo ullamco est ', 'Eos nobis et enim v', 'Quia deserunt quibus', 'Adipisci expedita no', 'Fugiat laboriosam b', '1993-07-20', '2025-08-19 01:16:28', '2025-08-19 01:16:28'),
(4, 'adel', 'Perempuan', 'Animi sed ratione s', '1974-12-17', '13:08:00', 98, 'Beatae a o', 'Et vel dol', 'Eum magnam labore re', 'Commodo possimus mo', '1996-02-15', 'Reiciendis ex distin', 'Aliquam sit id sint', 'Totam qui et sit sun', 'In possimus sint co', 'Quia iusto aliquid c', 'Non et fuga Veritat', '1991-07-16', 'Deserunt labore sint', 'In et duis fugiat c', 'Voluptatem dolorum e', 'Sint quaerat volupta', 'Est quo suscipit aut', 'Animi aut aspernatu', 'Exercitationem ullam', 'Ex perspiciatis vel', 'Sapiente do maxime a', 'Aut maiores rem dolo', 'Unde quis magnam asp', 'Natus deserunt et co', 'Laboriosam adipisic', '1978-01-24', '2025-08-19 01:25:55', '2025-08-19 01:25:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_ktp`
--

DROP TABLE IF EXISTS `surat_ktp`;
CREATE TABLE IF NOT EXISTS `surat_ktp` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `golongan_darah` varchar(3) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_kk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `kewarganegaraan` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `keperluan` text COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_permohonan` enum('Baru','Perpanjangan','Penggantian','Perubahan Data') COLLATE utf8mb4_general_ci NOT NULL,
  `alasan_permohonan` text COLLATE utf8mb4_general_ci,
  `dokumen_pendukung` text COLLATE utf8mb4_general_ci,
  `tanggal_pengajuan` date DEFAULT NULL,
  `status` enum('Pending','Disetujui','Ditolak') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_ktp`
--

INSERT INTO `surat_ktp` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `golongan_darah`, `pekerjaan`, `alamat`, `nomor_kk`, `nik`, `kewarganegaraan`, `keperluan`, `jenis_permohonan`, `alasan_permohonan`, `dokumen_pendukung`, `tanggal_pengajuan`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Randiishere', 'Eum quia dolore nihi', '2018-09-26', 'Perempuan', 'Itaque aut quis quo ', 'Velit vitae fugiat ', 'Off', 'Distinctio Similiqu', 'Quisquam commodo lab', 'Sunt rerum irure min', 'Harum ut est sint ra', 'Sit aut iusto vel qu', 'Duis commodi libero ', 'Baru', 'Architecto non quia ', 'Sequi quis quia aut ', '1994-03-02', 'Pending', '2025-08-14 23:28:58', '2025-08-14 23:28:58'),
(3, 'Muhammad Randika', 'Tasikmalaya', '2004-06-16', 'Laki-laki', 'Islam', 'Belum Menikah', 'A', 'Mahasiswa', 'Nobis adipisci nulla', '3350121219129129', '2203010535', 'Indonesia', 'Utk APa we kepo', 'Perpanjangan', 'Odit eum porro cupid', 'Impedit beatae ut c', '2025-08-15', 'Pending', '2025-08-14 23:35:12', '2025-08-14 23:35:12'),
(5, 'Id quia ad id dicta ', 'Et molestiae sequi e', '1991-05-22', 'Perempuan', 'Suscipit fuga Iure ', 'Omnis blanditiis omn', 'Mol', 'Rerum consequuntur q', 'Praesentium est quod', 'Incidunt hic nostru', 'Do fuga Veniam fac', 'Laboris excepteur qu', 'Libero adipisci volu', 'Perpanjangan', 'Velit sequi nisi ul', 'Doloribus quia perfe', '2005-06-18', 'Pending', '2025-08-19 01:06:13', '2025-08-19 01:06:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_sku`
--

DROP TABLE IF EXISTS `surat_sku`;
CREATE TABLE IF NOT EXISTS `surat_sku` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `tempat_lahir` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_general_ci NOT NULL,
  `agama` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `status_perkawinan` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_ktp` text COLLATE utf8mb4_general_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor_kk` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nama_usaha` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `jenis_usaha` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat_usaha` text COLLATE utf8mb4_general_ci NOT NULL,
  `lama_berdiri` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `skala_usaha` enum('Mikro','Kecil','Menengah') COLLATE utf8mb4_general_ci NOT NULL,
  `jumlah_karyawan` int DEFAULT NULL,
  `keperluan` text COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal_pengajuan` date DEFAULT NULL,
  `status` enum('Pending','Disetujui','Ditolak') COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Pending',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `surat_sku`
--

INSERT INTO `surat_sku` (`id`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `status_perkawinan`, `pekerjaan`, `alamat_ktp`, `nik`, `nomor_kk`, `nama_usaha`, `jenis_usaha`, `alamat_usaha`, `lama_berdiri`, `skala_usaha`, `jumlah_karyawan`, `keperluan`, `tanggal_pengajuan`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Aliqua Quia nihil m', 'Aut facere voluptate', '1982-12-28', 'Perempuan', 'Do reprehenderit vo', 'Autem illum natus v', 'In rerum ea nostrud ', 'Commodo quia volupta', 'Consectetur laudanti', 'Iure consequatur fu', 'Velit rerum nobis s', 'Sequi aut quos obcae', 'Culpa adipisci quo ', 'Dolor voluptate vel ', 'Menengah', 18, 'Sequi rerum deserunt', '2021-01-26', 'Pending', '2025-08-15 03:43:13', '2025-08-15 03:43:13'),
(8, 'Dolore cillum ab quo', 'Odit necessitatibus ', '1975-11-09', 'Perempuan', 'Velit cumque est dol', 'Quidem rerum necessi', 'Rerum quod natus mag', 'Sunt tempore simili', 'Non nobis ducimus v', 'Voluptas et ea imped', 'Atque velit est qui', 'Sint ipsam aut ipsam', 'Sed sint qui aut ip', 'Maiores corrupti au', 'Mikro', 60, 'Quia est consectetur', '1998-10-03', 'Pending', '2025-08-15 03:47:08', '2025-08-15 03:47:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_hp` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(20) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'admin',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `email`, `no_hp`, `alamat`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin Desa', 'admin@gmail.com', '081234567890', 'Kantor Desa', '$2y$10$C03xu7p/aRCUTguUrrKgvOuqgPf96XYpbRIwSYRUGevVw06hRVyWK', 'admin', '2025-08-14 16:41:40', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
