-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Mar 2022 pada 04.42
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websitepuslitbang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_role`
--

CREATE TABLE `m_role` (
  `id_role` int(11) NOT NULL,
  `nama_role` varchar(255) NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_role`
--

INSERT INTO `m_role` (`id_role`, `nama_role`, `deskripsi`) VALUES
(1, 'admin', 'memegang semua fiturr'),
(2, 'author', 'mengisi/upload konten');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_user`
--

CREATE TABLE `m_user` (
  `id_user` int(11) NOT NULL,
  `id_role` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(5) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `m_user`
--

INSERT INTO `m_user` (`id_user`, `id_role`, `nama_user`, `username`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nuril', 'nuril', '$2y$10$r0FWttMkgmT1NcIqSzrIhegTk4vr2XOWsAAjDNDnq3lKbBKwzDOCq', '1', '', '2021-08-29 07:48:00', '2021-08-29 21:56:47'),
(2, 2, 'Qomaryah', 'qomaryah', '$2y$10$9M95SF3WkYSODbg.eycWyeFzJLGfalIWtcuaRPDGalTW1dYkgE09C', '1', '', '2021-08-29 07:48:00', '2021-08-29 21:56:34'),
(4, 1, 'Testing Admin', 'nuril.qomaryah', '$2y$10$kIGk7TLidO2cKfB/2SYWnOx33w7Xh88S3K698rCi7k0cG3q3I1A.O', '1', NULL, '2021-08-29 02:23:15', '2021-09-18 00:13:56'),
(7, 2, 'Testing Author', 'test.author', '$2y$10$lnlDDpHYLSL79FFwuR5pZ.ieOFj30TflphRIwnVvIA1m7jWeVYJ7G', '0', NULL, '2021-09-14 19:27:30', '2021-09-16 07:27:23'),
(8, 2, 'ino', 'inoo', '$2y$10$vLq585MpeoiVLvPkzkFAbOk4bh1PrjWwLz049xxcAMKsGZOigUaDm', '1', NULL, '2021-09-18 00:18:32', '2021-09-18 00:18:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_kategori`
--

CREATE TABLE `ref_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ref_kategori`
--

INSERT INTO `ref_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Jurnal'),
(2, 'Majalah'),
(3, 'Seminar'),
(4, 'PKS'),
(5, 'Hasil Litbang'),
(6, 'Library Cafe');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ref_tag`
--

CREATE TABLE `ref_tag` (
  `id_tag` int(11) NOT NULL,
  `nama_tag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ref_tag`
--

INSERT INTO `ref_tag` (`id_tag`, `nama_tag`) VALUES
(1, 'Produk Litbang'),
(2, 'Pengumuman'),
(3, 'Berita'),
(4, 'Artikel'),
(5, 'Infografis'),
(6, 'Videografis'),
(7, 'Penghargaan'),
(8, 'Galeri'),
(10, 'Youtube');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_post`
--

CREATE TABLE `t_post` (
  `id_post` int(11) NOT NULL,
  `judul_post` varchar(255) NOT NULL,
  `isi_post` text NOT NULL,
  `tgl_post` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `img_post` varchar(255) DEFAULT NULL,
  `link_gambar` varchar(255) DEFAULT NULL,
  `link_post` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `id_tag` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `views` int(100) NOT NULL DEFAULT 0,
  `link_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_post`
--

INSERT INTO `t_post` (`id_post`, `judul_post`, `isi_post`, `tgl_post`, `img_post`, `link_gambar`, `link_post`, `id_kategori`, `id_tag`, `id_user`, `created_at`, `updated_at`, `views`, `link_file`) VALUES
(2, 'Pelantikan Jabatan Fungsional', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-08 03:21:13', '1.jpg', '/images/berita/02847c5fa7fa7da2b9cd0409bb2f64daea0edd9d.jpg', 'http://www.bpkp.go.id/puslitbangwas/berita/read/23402/5/Aktualisasi-Pusat-Unggulan-Inovasi-Pengawasan-dalam-Mengawal-RPJMN-2020-2024.bpkp', 0, 3, 1, '2021-09-07 14:03:54', '2022-03-07 20:21:13', 0, ''),
(3, 'Diskusi APIP', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-08 02:45:58', '2.jpg', '/images/berita/4c9bf7879435c504d26f8c7bff704fe7e2a90019.jpg', NULL, 0, 3, 1, '2021-09-07 14:03:54', '2022-03-07 19:45:58', 0, ''),
(4, 'Jurnal Pengawasan Vol. 2 No. 2 Sept 2020', '-', '2021-08-24 22:42:37', 'Jurnal Pengawasan Vol. 2 No. 2 September 2020 Cover-1.jpg', '', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/PPM_Jurnal.pdf', 1, 1, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(7, 'Analisis Perlakuan Akuntasi pada Aset Bersejarah (Studi Kasus pada Aset Bersejarah di Kabupaten Gresik)', 'Penelitian ini adalah fenomena perlakuan akuntansi yang diterapkan pada aset warisan di Indonesia, baik dalam hal pengakuan, penilaian, dan pengungkapan dalam laporan keuangan. Fokus penelitian ini adalah analisis perlakuan akuntansi dalam pengelolaan Makam Sunan Giri. Penelitian ini bertujuan untuk: memahami pentingnya aset bersejarah (aset warisan), menjelaskan metode yang digunakan untuk menilai Makam Sunan Giri, menjelaskan makam pengungkapan Sunan Giri dalam laporan keuangan, dan menganalisis kesesuaian standar akuntansi yang berlaku untuk akuntansi untuk Makam Sunan Giri saat ini.\r\n\r\nKata Kunci: akuntansi, aset bersejarah, laporan keuangan, catatan atas laporan keuangan (CaLK)\r\n\r\nArtikel ini dimuat dalam:\r\nJurnal Pengawasan ISSN 2686-2840\r\nVol.2, No.2, September 2020 (30-40)', '2022-03-09 04:51:56', '3.1(1).jpeg', '/images/artikel/078a9c455f2b63ef94d28446901d659e1a9b0562.jpg', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/Aset%20Bersejarah(3).pdf', NULL, 4, 1, '2021-09-07 14:03:54', '2022-03-08 21:51:56', 0, ''),
(8, 'Diskursus Konflik Nilai (Clash of Value) dan Dilema Etika dalam Kasus Whistleblowing', 'Riset ini mengkaji tentang dinamika atas fenomena whistleblowing behaviour yang terjadi pada lima kasus di Indonesia dengan menitikberatkan pada dinamika relasi kuasa dan interaksi para aktor yang muncul di dalam organisasi ketika ada orang dalam (insider) melakukan tindakan whistleblowing. Riset kualitatif ini menggunakan metode multi case study yang memperlakukan setiap kasus dengan pendekatan unique case orientation (Patton, 2002).\r\n\r\nKata Kunci: dilema, konflik nilai, whistleblower, whistleblowing\r\n\r\nArtikel ini dimuat dalam:\r\nJurnal Pengawasan ISSN 2686-2840\r\nVol.2, No.2, September 2020 (1-12)', '2022-03-09 04:52:52', '3.2(1).jpeg', '/images/artikel/2637306a2235e1cb0d8f090b0a658bfe4535fa1a.jpg', NULL, NULL, 4, 1, '2021-09-07 14:03:54', '2022-03-08 21:52:52', 0, ''),
(9, 'Paparan Hasil Kajian EPK', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-08 02:46:09', '3.jpg', '/images/berita/0ebce037e3a81eb5481bee2ee8651f4a80fdb2d3.jpg', 'http://www.bpkp.go.id/puslitbangwas/berita/read/27814/0/Paparan-Hasil-Kajian-EPK-pada-Direktorat-Investigasi-IV.bpkp', NULL, 3, 1, '2021-09-07 14:03:54', '2022-03-07 19:46:09', 0, ''),
(10, 'Knowledge Day', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-08 03:04:20', 'Knowledge_Day_anigif(1).gif', '/images/berita/61dee9e6c05bc73b392636b90ca42be64cc247c6.gif', NULL, NULL, 3, 1, '2021-09-07 14:03:54', '2022-03-07 20:04:20', 0, ''),
(11, 'Penandatangan Pakta Integritas', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-09 03:38:18', 'Pakta Integritas_anigif.gif', '/images/berita/83a1f403b9df237dcf1a59ab84fe15a243b1c25e.gif', NULL, NULL, 3, 1, '2021-09-07 14:03:54', '2022-03-08 20:38:18', 0, ''),
(12, 'Rakornas 2021', '-', '2022-03-09 03:35:12', 'logorakornas2021.jpg', '/images/pengumuman/a46678eabad798ce37755e5eb6c732c4ace97c53.jpg', 'http://www.bpkp.go.id/', NULL, 2, 1, '2021-09-07 14:03:54', '2022-03-08 20:35:12', 0, ''),
(13, 'Call for Paper', '-', '2022-03-09 03:35:35', 'Call for Paper - Jurnal Pengawasan_resize.jpeg', '/images/pengumuman/ccf8480a4848f74bd959f15e082cc059b396c072.jpg', 'http://www.bpkp.go.id/', NULL, 2, 1, '2021-09-07 14:03:54', '2022-03-08 20:35:35', 0, ''),
(15, 'Peran Aparat Pengawasan Intern Pemerintah dalam Optimalisasi Implementasi Manajemen Risiko', 'Setelah diwajibkannya penerapan manajemen risiko pada Instansi Pemerintah sesuai PP Nomor 60 Tahun 2008 tentang SPIP, Pimpinan Instansi Pemerintah di Indonesia pada umumnya telah menerapkan manajemen risiko pada organisasinya. Walaupun demikian, masih terdapat permasalahan dalam pelaksanaan manajemen risiko instansi pemerintah, sebagaimana yang diharapkan pada unsur Penilaian Risiko dalam SPIP.\r\nKata Kunci: SPIP, manajemen risiko, APIP\r\n\r\nArtikel ini dimuat dalam:\r\nJurnal Pengawasan ISSN 2686-2840\r\nVol.2, No.2, September 2020 (49-58)', '2022-03-09 04:53:03', '3.5.jpeg', '/images/artikel/4fa7cd42e3ed9c34c50ac6420169199a040bf64b.jpg', NULL, NULL, 4, 1, '2021-09-07 14:03:54', '2022-03-08 21:53:03', 0, ''),
(16, 'Yuk Cek Ulang', '-', '2022-03-09 08:28:13', 'INFOGRAFIS_INFORMASI.jpg', '/images/infografis/045cb87ae1b6ec4dc7d0bc9cd16bcbae3d131120.jpg', 'http://www.bpkp.go.id/infografis', NULL, 5, 1, '2021-09-07 14:03:54', '2022-03-09 01:28:13', 0, ''),
(17, 'Bentuk Sinergi', '-', '2022-03-09 08:28:47', 'infograph1.png', '/images/infografis/1db47ff9b7b89899975d4ffdac653564e066837c.png', 'http://www.bpkp.go.id/infografis', NULL, 5, 1, '2021-09-07 14:03:54', '2022-03-09 01:28:47', 0, ''),
(18, 'Simda', '-', '2022-03-09 08:29:03', 'simda.png', '/images/infografis/74f33cb387ad4b126808a15582429fb6e040bed3.png', NULL, NULL, 5, 1, '2021-09-07 14:03:54', '2022-03-09 01:29:03', 0, ''),
(19, '-', '-', '2021-08-25 20:36:35', 'bajuku_etikaku.mp4', '', NULL, NULL, 6, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(20, '-', '-', '2021-08-25 20:37:03', 'ruangan_puslitbangwas.mp4', '', NULL, NULL, 6, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(21, '-', '-', '2021-08-25 20:47:09', 'logo1.png', '', '', NULL, 7, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(22, '-', '-', '2021-08-25 20:47:09', 'logo2.png', '', 'https://www.tuv-nord.com/id/en/home/', NULL, 7, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(23, 'Jurnal Pengawasan Vol. 2 No. 1 Maret 2020', '-', '2021-08-25 22:13:10', 'Jurnal Pengawasan Vol. 2 No. 1 Final (Cover)(1).jpg', '', 'https://eos.bpkp.go.id/ipms_pro/kms/insight/id', 1, 1, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(24, 'Jurnal Pengawasan Vol. 1 No. 1 Sept 2019', '-', '2021-08-25 22:16:29', 'Cover Depan Jurnal Final_Resize.jpg', '', NULL, 1, 1, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(25, 'Jurnal Pengawasan Vol. 1 No. 1 Sept 2019', '-', '2021-08-25 22:17:15', 'Cover Depan Jurnal Final_Resize.jpg', '', NULL, 1, 1, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(26, 'Majalah TW IV 2020', '-', '2021-08-25 23:23:41', 'Cover%20Majalah%20Seputar%20Litbang%202020_resize.png', '', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/Majalah%20Tw%204%202020%20v3_web_compressed.pdf', 2, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(27, 'Majalah TW III 2020', '-', '2021-08-25 23:25:02', 'Cover%20Tw%203_resize(1).jpg', '', NULL, 2, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(28, 'Majalah TW II 2020', '-', '2021-08-25 23:25:54', 'Majalah%2044.jpg', '', NULL, 2, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(30, 'Majalah TW I 2020', '-', '2021-08-26 00:59:31', 'Cover%20Tw%201%20Fix.jpg', '', NULL, 2, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(31, 'Dirgahayu RI ke 76', '-', '2022-03-09 03:58:33', 'dirgahayu 76.jpeg', '/images/galeri/b1a8b45d97661cf9e16fa13027aa4328b9d66688.jpg', '-', NULL, 8, 1, '2021-09-07 14:03:54', '2022-03-08 20:58:33', 0, ''),
(32, 'Lobby Baru Puslitbangwas', '-', '2022-03-09 03:58:45', 'lobby 1.jpeg', '/images/galeri/12a7fc042ef9e4e881c399d3216b0ce58384ae37.jpg', '-', NULL, 8, 1, '2021-09-07 14:03:54', '2022-03-08 20:58:45', 0, ''),
(33, 'Lobby Baru Puslitbangwas', '-', '2022-03-09 03:58:59', 'lobby 2.jpeg', '/images/galeri/601f3e13d24d9d7e7cfaf6bfeb3b21dfaae74481.jpg', '-', NULL, 8, 1, '2021-09-07 14:03:54', '2022-03-08 20:58:59', 0, ''),
(34, 'Upacara Hut RI 76', '-', '2022-03-09 03:59:09', 'upacara hut 1.jpeg', '/images/galeri/a649b0487482c4c4fdd6a12969c93afead6dbaf9.jpg', NULL, NULL, 8, 1, '2021-09-07 14:03:54', '2022-03-08 20:59:09', 0, ''),
(35, 'Upacara Hut RI 76', '-', '2022-03-09 03:59:30', 'upacara hut 2.jpeg', '/images/galeri/4d576300e66c5c6af786438c9f841de756794f97.jpg', NULL, NULL, 8, 1, '2021-09-07 14:03:54', '2022-03-08 20:59:30', 0, ''),
(36, 'JPT Madya', '-', '2022-03-09 03:34:42', 'pengumuman.png', '/images/pengumuman/f858d5fb8c11eb56eb6bdab9ee4b461058b41392.png', 'https://eos.bpkp.go.id/jptmadya/', NULL, 2, 1, '2021-09-07 14:03:54', '2022-03-08 20:34:42', 0, ''),
(37, 'Library Café Menerima Penghargaan dalam Top 45 Inovasi Pelayanan Publik 2020', 'Jakarta (25/11) BPKP menerima penghargaan dalam penganugerahan Top 45 Inovasi Pelayanan Publik 2020. Penghargaan diberikan langsung oleh Menteri Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (PANRB) Tjahjo Kumolo kepada Sekretaris Utama BPKP Ernadhi Sudarmanto pada hari Rabu, 25 November 2020 di Gedung Tribrata...', '2022-03-09 03:38:32', 'Top_45_LC_anigif_1.gif', '/images/berita/d287ac2c6cc96d8e558ea06c2d12e3d57b482b76.gif', 'http://www.bpkp.go.id/puslitbangwas/berita/read/27103/0/Library-Caf-Menerima-Penghargaan-dalam-Top-45-Inovasi-Pelayanan-Publik-2020.bpkp', NULL, 3, 1, '2021-09-07 14:03:54', '2022-03-08 20:38:32', 0, ''),
(39, 'Pengawasan dengan Partisipasi Masyarakat*', 'Tulisan ini bertujuan untuk memberikan pemahaman (to understand) mengenai konsep dan praktik Pengawasan dengan Partisipasi Masyarakat (PPM) serta potensinya untuk diterapkan di Indonesia', '2021-08-28 00:19:16', 'Cover PPM_ok_resize(1).jpg', '', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/PPM_Jurnal.pdf', 5, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(40, 'Kajian Top Leader', 'Pengendalian-pengendalian atas Pemimpin Puncak (Top Level Leaders) agar Terhindar dari Praktik-praktik atau Tindak Pidana Korupsi di Organisasi Sektor Publik', '2021-08-28 00:20:58', 'cover Top Leader.jpg', '', NULL, 5, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(41, 'Bahan Pedoman Umum Pengawasan Cepat', 'Bahan pedoman pengawasan cepat ini dimaksudkan untuk menjadi rujukan bagi unit kerja di lingkungan BPKP dalam menyusun pedoman pengawasan cepat', '2021-08-28 00:21:59', 'Cover WasPat.jpg', '', NULL, 5, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(42, 'Bahan Panduan Implementasi Struktur Manajemen Risiko Sektor Publik', 'Manajemen risiko merupakan alat pertahanan organisasi dalam menghadapi ketidakpastian ketika suatu organisasi melaju dalam aktivitasnya', '2021-08-28 00:22:54', 'Cover Struktur MR.jpg', '', NULL, 5, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(43, 'Kajian Agile Internal Audit', 'Menurut Deloitte, Agile Internal Audit merupakan pasangan pola pikir dan proses', '2021-08-28 00:24:31', 'Cover Agile.jpg', '', NULL, 5, 1, 2, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(47, 'test post', '-', '2021-09-08 05:04:35', 'IMG_4842.png', '/images/penghargaan/f7f182e74124f64e9bb7e46c38b01cbfada22a42.png', '/', NULL, 7, 1, '2021-09-07 21:58:50', '2021-09-07 22:04:35', 0, ''),
(49, 'Paparan Hasil Kajian', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP..', '2022-03-08 02:36:09', '3.jpg', '/images/berita/659d3c0a6ce42d34e530be4fd207fbe117fa144e.jpg', '/', NULL, 3, 1, '2021-09-14 19:48:31', '2022-03-07 19:36:09', 0, ''),
(53, 'Jurnal Pengawasan Vol. 2 No. 2 Sept 2020', '-', '2021-08-24 22:42:37', 'Jurnal Pengawasan Vol. 2 No. 2 September 2020 Cover-1.jpg', '', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/PPM_Jurnal.pdf', 1, 1, 1, '2021-09-07 14:03:54', '0000-00-00 00:00:00', 0, ''),
(54, 'Diskusi APIP', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-08 02:39:25', '2.jpg', '/images/berita/5b253720d6a8d5c3c3c4527b5c9068ce9be55531.jpg', 'http://www.bpkp.go.id/puslitbangwas/berita/read/23402/5/Aktualisasi-Pusat-Unggulan-Inovasi-Pengawasan-dalam-Mengawal-RPJMN-2020-2024.bpkp', NULL, 3, 1, '2022-02-24 06:14:02', '2022-03-07 19:39:25', 0, ''),
(55, 'Pelantikan Jabatan Fungsional', 'Jakarta (15/10) - Mengangkat tema \"Meningkatkan Kinerja Auditor Internal melalui Semangat Inovatif dan Budaya Berbagi Pengetahuan\", Seminar dan Forum Kelitbangan Tahun 2019 yang dilaksanakan oleh Pusat Penelitian dan Pengembangan Pengawasan (Puslitbangwas) BPKP...', '2022-03-19 10:02:43', '1.jpg', '/images/berita/5a699552bd73025fd4894240819e1f44079a687d.jpg', 'http://www.bpkp.go.id/puslitbangwas/berita/read/23402/5/Aktualisasi-Pusat-Unggulan-Inovasi-Pengawasan-dalam-Mengawal-RPJMN-2020-2024.bpkp', NULL, 3, 1, '2022-03-07 19:28:08', '2022-03-19 03:02:43', 2, ''),
(56, 'Arahan Kepala BPKP Tahun 2022', '-', '2022-03-08 06:28:48', 'ArahanKepala (1).jpg', '/images/pengumuman/8ed78d0542b78fab7f6485131c333c67835d6c8b.jpg', NULL, NULL, 2, 1, '2022-03-07 23:28:48', '2022-03-07 23:28:48', 0, ''),
(57, 'Bunga Rampai Hasil Penelitian dengan Tematik: Audit Pengadaan Barang dan Jasa, Audit Khusus Investigasi, Evaluasi dan Metode Pengawasan Terkini', 'Aparat Pengawasan Intern Pemerintah (APIP) diharapkan dapat mengemban amanah dan tanggung jawab untuk mendeteksi berbagai potensi kelemahan maupun penyimpangan sehingga dapat memberikan nilai tambah bagi pencapaian sasaran pembangunan. Pengawalan akuntabilitas keuangan negara/daerah menuntut APIP untuk selalu proaktif dalam melakukan pengawasan current issue yang sedang berkembang', '2022-03-09 09:23:58', 'Puslitbangwas - Bunga Rampai Hasil Penelitian Puslitbangwas BPKP (2021) sc-01.jpg', '/images/artikel/d4dbcb1aa6b3cc9a7edd5a4134877c9b2c593f5d.jpg', 'https://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/Puslitbangwas%20-%20Bunga%20Rampai%20Hasil%20Penelitian%20Puslitbangwas%20BPKP%20dengan%20Tematik%20(2021).pdf', NULL, 4, 1, '2022-03-09 01:21:27', '2022-03-09 02:23:58', 0, ''),
(58, 'Rakornas 2021', '-', '2022-03-09 08:44:16', 'rakornaswas2021_c.jpg', '/images/infografis/f9534c27e4f43d7f6bb2ac555ce776df1827139b.jpg', NULL, NULL, 5, 1, '2022-03-09 01:29:44', '2022-03-09 01:44:16', 0, ''),
(59, 'test artikel yaaa', 'aaaa', '2022-03-14 14:13:30', 'rakornaswas2021_c.jpg', '/images/artikel/9d7ff6dfa6a0cfe1d393535af56878d85d3b5f45.jpg', NULL, NULL, 4, 1, '2022-03-14 06:36:02', '2022-03-14 07:13:30', 0, '/artikel/7892e4c82fd5b4833f8300ee6f86d7d380a6eb20.pdf'),
(60, 'Ini test post', '-', '2022-03-19 09:20:12', '', '', NULL, NULL, 3, 1, '2022-03-19 02:20:12', '2022-03-19 02:20:12', 0, ''),
(61, 'Pengukuran Kapabilitas APIP - Puslitbangwas BPKP', '-', '2022-03-19 10:07:53', '', '', 'https://www.youtube.com/watch?v=FSDQk29lxjY', NULL, 10, 1, '2022-03-19 03:07:53', '2022-03-19 03:07:53', 0, ''),
(62, 'Analisis Perlakuan Akuntasi pada Aset Bersejarah (Studi Kasus pada Aset Bersejarah di Kabupaten Gresik)', 'Penelitian ini adalah fenomena perlakuan akuntansi yang diterapkan pada aset warisan di Indonesia, baik dalam hal pengakuan, penilaian, dan pengungkapan dalam laporan keuangan. Fokus penelitian ini adalah analisis perlakuan akuntansi dalam pengelolaan Makam Sunan Giri. Penelitian ini bertujuan untuk: memahami pentingnya aset bersejarah (aset warisan), menjelaskan metode yang digunakan untuk menilai Makam Sunan Giri, menjelaskan makam pengungkapan Sunan Giri dalam laporan keuangan, dan menganalisis kesesuaian standar akuntansi yang berlaku untuk akuntansi untuk Makam Sunan Giri saat ini.\r\n\r\nKata Kunci: akuntansi, aset bersejarah, laporan keuangan, catatan atas laporan keuangan (CaLK)\r\n\r\nArtikel ini dimuat dalam:\r\nJurnal Pengawasan ISSN 2686-2840\r\nVol.2, No.2, September 2020 (30-40)', '2022-03-09 04:51:56', '3.1(1).jpeg', '/images/artikel/078a9c455f2b63ef94d28446901d659e1a9b0562.jpg', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/Aset%20Bersejarah(3).pdf', NULL, 4, 1, '2021-09-07 14:03:54', '2022-03-08 21:51:56', 0, ''),
(63, 'Analisis Perlakuan Akuntasi pada Aset Bersejarah (Studi Kasus pada Aset Bersejarah di Kabupaten Gresik)', 'Penelitian ini adalah fenomena perlakuan akuntansi yang diterapkan pada aset warisan di Indonesia, baik dalam hal pengakuan, penilaian, dan pengungkapan dalam laporan keuangan. Fokus penelitian ini adalah analisis perlakuan akuntansi dalam pengelolaan Makam Sunan Giri. Penelitian ini bertujuan untuk: memahami pentingnya aset bersejarah (aset warisan), menjelaskan metode yang digunakan untuk menilai Makam Sunan Giri, menjelaskan makam pengungkapan Sunan Giri dalam laporan keuangan, dan menganalisis kesesuaian standar akuntansi yang berlaku untuk akuntansi untuk Makam Sunan Giri saat ini.\r\n\r\nKata Kunci: akuntansi, aset bersejarah, laporan keuangan, catatan atas laporan keuangan (CaLK)\r\n\r\nArtikel ini dimuat dalam:\r\nJurnal Pengawasan ISSN 2686-2840\r\nVol.2, No.2, September 2020 (30-40)', '2022-03-09 04:51:56', '3.1(1).jpeg', '/images/artikel/078a9c455f2b63ef94d28446901d659e1a9b0562.jpg', 'http://www.bpkp.go.id/public/upload/unit/puslitbangwas/files/Aset%20Bersejarah(3).pdf', NULL, 4, 1, '2021-09-07 14:03:54', '2022-03-08 21:51:56', 0, ''),
(64, 'Rakornas 2021', '-', '2022-03-09 03:35:12', 'logorakornas2021.jpg', '/images/pengumuman/a46678eabad798ce37755e5eb6c732c4ace97c53.jpg', 'http://www.bpkp.go.id/', NULL, 2, 1, '2021-09-07 14:03:54', '2022-03-08 20:35:12', 0, ''),
(65, 'Call for Paper', '-', '2022-03-09 03:35:35', 'Call for Paper - Jurnal Pengawasan_resize.jpeg', '/images/pengumuman/ccf8480a4848f74bd959f15e082cc059b396c072.jpg', 'http://www.bpkp.go.id/', NULL, 2, 1, '2021-09-07 14:03:54', '2022-03-08 20:35:35', 0, ''),
(66, 'Call for Paper', '-', '2022-03-09 03:35:35', 'Call for Paper - Jurnal Pengawasan_resize.jpeg', '/images/pengumuman/ccf8480a4848f74bd959f15e082cc059b396c072.jpg', 'http://www.bpkp.go.id/', NULL, 2, 1, '2021-09-07 14:03:54', '2022-03-08 20:35:35', 0, ''),
(67, 'CKEditor', '<p><strong>AAAAAAA</strong></p>\r\n\r\n<p><em>IIIIIIIIIIII</em></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SKJHKDJSHJKDHAJKH</p>', '2022-03-19 10:37:47', '', '', NULL, NULL, 4, 1, '2022-03-19 03:37:47', '2022-03-19 03:37:47', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_visitor`
--

CREATE TABLE `t_visitor` (
  `id_visitor` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_visitor`
--

INSERT INTO `t_visitor` (`id_visitor`, `ip_address`, `user_agent`, `timestamp`) VALUES
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-18 15:31:52'),
(6, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', '2021-09-18 15:34:10'),
(7, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', '2022-03-16 13:27:13'),
(8, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', '2022-03-16 13:27:35'),
(9, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/99.0.4844.51 Safari/537.36', '2022-03-16 13:28:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'dfgd', 'rosmini@bpkp.go.id', NULL, '$2y$10$aPlGg5ZOOP6SBfsXxezVOOFhF.u8uFIyH2dADoqWtv8NLuzeZLhYS', NULL, '2021-08-29 00:25:11', '2021-08-29 00:25:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_role`
--
ALTER TABLE `m_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeks untuk tabel `m_user`
--
ALTER TABLE `m_user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_role` (`id_role`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `ref_kategori`
--
ALTER TABLE `ref_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `ref_tag`
--
ALTER TABLE `ref_tag`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indeks untuk tabel `t_post`
--
ALTER TABLE `t_post`
  ADD PRIMARY KEY (`id_post`),
  ADD KEY `idx_user` (`id_user`),
  ADD KEY `idx_tag` (`id_tag`),
  ADD KEY `idx_kategori` (`id_kategori`);

--
-- Indeks untuk tabel `t_visitor`
--
ALTER TABLE `t_visitor`
  ADD PRIMARY KEY (`id_visitor`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `m_role`
--
ALTER TABLE `m_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `m_user`
--
ALTER TABLE `m_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ref_kategori`
--
ALTER TABLE `ref_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `ref_tag`
--
ALTER TABLE `ref_tag`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `t_post`
--
ALTER TABLE `t_post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `t_visitor`
--
ALTER TABLE `t_visitor`
  MODIFY `id_visitor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `m_user`
--
ALTER TABLE `m_user`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`id_role`) REFERENCES `m_role` (`id_role`);

--
-- Ketidakleluasaan untuk tabel `t_post`
--
ALTER TABLE `t_post`
  ADD CONSTRAINT `t_post_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `m_user` (`id_user`),
  ADD CONSTRAINT `t_post_ibfk_2` FOREIGN KEY (`id_tag`) REFERENCES `ref_tag` (`id_tag`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
