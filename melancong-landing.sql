-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2020 at 10:46 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melancong-landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` smallint(5) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `foto`, `keterangan`, `tipe`, `created_at`, `updated_at`) VALUES
('09660091c8db471b99382d5db6cd8886', 'https://www.youtube.com/embed/WznbmyC5pfA', '08 April 2018', 2, '2020-10-15 02:44:03', '2020-10-15 02:44:03'),
('0c8a399965774249b123c1bd56692ac8', 'https://www.youtube.com/embed/c07Hl02eE8c', '22 Mei 2018', 2, '2020-10-15 02:39:42', '2020-10-15 02:39:42'),
('35882b88f94741c7b88cff2c7d7bbf4a', 'Goa-Pindul-Jogja.jpg', '29 Agustus 2019', 1, '2020-10-15 02:42:43', '2020-10-15 02:42:43'),
('b10b0db3bcac48dd9f5105c7ef448909', 'side-view-man-with-binocular.jpg', '03 Januari 2017', 1, '2020-10-15 02:41:52', '2020-10-15 02:41:52'),
('b940714f02eb4afc8ce4bad6dbbfac01', '1-2bde9035c1813aa0abd9fa7578fa4ab9.jpg', '17 Desember 2017', 1, '2020-10-15 02:37:34', '2020-10-15 02:37:34'),
('c99d3e458b2049faab8f1c1f25320c2d', 'Raja-Ampat.jpg', '21 Juli 2019', 1, '2020-10-15 04:13:18', '2020-10-15 04:13:18');

-- --------------------------------------------------------

--
-- Table structure for table `jumbotron`
--

CREATE TABLE `jumbotron` (
  `id_jumbotron` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jumbotron`
--

INSERT INTO `jumbotron` (`id_jumbotron`, `judul`, `foto`, `kata`, `created_at`, `updated_at`) VALUES
('06468d64c12e4fd380a03ed2925af9ba', 'Paket Tour Wisata', 'slide-3.jpg', '-', '2020-10-14 03:31:56', '2020-10-14 03:31:56'),
('89c9fac5b6c2482ea84df35b349ea70b', 'Pemesanan Tiket Pesawat', 'slide-2.jpg', '-', '2020-10-14 03:31:56', '2020-10-14 03:31:56'),
('f4006a0a10a54302afb96b70a0ffa0d2', 'Melancong Wisata', 'slide-1.jpg', '-', '2020-10-14 03:31:55', '2020-10-14 03:31:55');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_layanan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_layanan` int(10) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diskon` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `nama_layanan`, `jenis_layanan`, `keterangan`, `harga`, `diskon`, `created_at`, `updated_at`) VALUES
('0a92d01374b04816aa39aa34c2d06098', 'Bus Pariwisata High Deck', 2, 'Bagasinya luas sehingga bisa meletakkan 5 sepeda', '1.750.000', 10, '2020-10-15 03:20:08', '2020-10-15 03:20:08'),
('3b25953297594ebab68becb59f780449', 'Paket Wisata Sungai Hijau 3 Hari', 3, 'Hari pertama : keliling Kota Bangkinang, Hari kedua : Mandi ke Sungai Hijau, Hari ketiga : Home Tour Nadila', '3.000.000', 5, '2020-10-15 03:31:22', '2020-10-15 03:31:22'),
('464f80a270734ce79e66118de6397b36', 'Mobil Xpander', 1, 'Bagasi luas dan bisa lebih leluasa', '750.000', 10, '2020-10-15 03:09:05', '2020-10-15 03:09:05'),
('81699f83d3ca417faab532334506ce86', 'Paket Wisata Padang 7 Hari', 3, 'Tujuan : Harau, Jam Gadang, Pantai Cerocok, Pulau Pasumpahan, Danau Singkarak, Pulau Angso Duo', '25.250.000', 7, '2020-10-15 03:50:31', '2020-10-15 03:50:31'),
('84bab8c2c3d34450bcc187284fc4746a', 'Mobil Avanza', 1, '-', '500.000', 0, '2020-10-15 03:05:27', '2020-10-15 03:05:27'),
('89cf02afddae4e28b4678b46ea0a8ce6', 'Paket Wisata Bukit Suligi 4 Hari', 3, 'Hari 1 :  Bukit Suligi, Hari 2 : Mesjid Islamic Centre, Hari 3 : Air Terjun Aek Matua, Hari 4 : Benteng Tujuh Lapis', '10.000.000', 20, '2020-10-15 03:42:35', '2020-10-15 03:42:35'),
('998976adb32a4317a5a27079d54dc031', 'Mobil L300', 1, 'Baknya udah ada pagar besi', '350.000', 0, '2020-10-15 03:13:15', '2020-10-15 03:13:15'),
('b6a27cd7a3e0448ca4fd30609e405b5a', 'Mobil Kijang', 1, 'Bersih dan nyaman', '600.000', 0, '2020-10-15 03:06:54', '2020-10-15 03:06:54'),
('baf3891da0d64c689964a85364152c5b', 'Bus Super High Deck', 2, 'Bus ini ada kaca ganda dan punya sekat pembatas', '2.400.000', 15, '2020-10-15 03:22:01', '2020-10-15 03:22:01'),
('c16f4802358241fab6cbbba4ff78193a', 'Mobil Brio', 1, '-', '400.000', 0, '2020-10-15 03:10:22', '2020-10-15 03:10:22'),
('e6b677f7cf5b48e6afbb7cc11dc0fd7f', 'Paket Wisata Pulau Cinta 1 Hari', 3, 'Main ke Pulau Cinta', '1.999.999', 5, '2020-10-15 03:35:04', '2020-10-15 03:35:04'),
('fb35e7ab586e42d1991a0156fedbbe03', 'Bus Pariwisata Double Decker', 2, 'Kemudi pada bus ini udah power string ditambah lagi adanya electronic stability program', '3.000.000', 17, '2020-10-15 03:25:27', '2020-10-15 03:25:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2020_10_03_223947_create_galeri_table', 1),
(3, '2020_10_03_224026_create_response_table', 1),
(4, '2020_10_03_224103_create_profil_table', 1),
(5, '2020_10_03_224130_create_layanan_table', 1),
(6, '2020_10_04_021740_create_jumbotron_table', 1),
(7, '2020_10_10_151905_create_portofolio_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjudul` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penjelasan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_us` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `email`, `telepon`, `facebook`, `twitter`, `instagram`, `youtube`, `whatsapp`, `about_us`, `foto`, `created_at`, `updated_at`) VALUES
('0', 'Melancongwisata@gmail.com', '+62 813 6591 6997', 'https://www.facebook.com/', 'https://twitter.com/login?lang=id', 'https://www.instagram.com/', 'mailto:DInalkhairi65@gmail.com', 'https://wa.wizard.id/36131e', 'Tentang Kami', 'about.jpg', '2020-10-14 03:32:13', '2020-10-15 02:07:45');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `id_response` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bintang` int(10) UNSIGNED NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`id_response`, `nama`, `pekerjaan`, `komentar`, `bintang`, `foto`, `created_at`, `updated_at`) VALUES
('32035588697441c4ad098e9e76d4e9ce', 'Shiddiq Syendanu Putra', 'Dosen', 'mobil yang saya pesan performanya kurang memuaskan, tidak seperti yang saya harapkan', 1, 'l-3.jpg', '2020-10-15 02:58:11', '2020-10-15 02:58:11'),
('411d9c8b586442ecbb58dbb630489111', 'Anja Deni Kesuma', 'Mahasiswa', 'Layanannya sangat friendly. Gue bakalan memakai layanan ini lagi nich..', 5, 'l-4.jpg', '2020-10-15 02:51:10', '2020-10-15 02:51:10'),
('415dd399568b417b89c6043a14db6ae0', 'Rahmat Budiman', 'Mahasiswa', 'Website yang bagus', 5, 'l-2.jpg', '2020-10-14 03:38:16', '2020-10-14 03:38:16'),
('6257e75de17c4a29b71cf8f2d4343f26', 'Ayu Fransiska', 'Nganggur', 'Keren banget, sangat memuaskan dan pas di kantong', 5, 'l-7.jpg', '2020-10-15 02:52:41', '2020-10-15 02:52:41'),
('73209ca43ae14a479191243c6b71d7c6', 'Rahmat Deni Herdiansyah', 'Pengusaha', 'lumayan menghibur setelah sekian lama kerja, sekarang saya udah siap untuk beraktifitas kembali', 4, 'l-9.jpg', '2020-10-15 03:01:49', '2020-10-15 03:01:49'),
('eecf99b85f2b43058272fa3deabbbd49', 'Novita Sari', 'Wiraswasta', 'Tour guidenya kurang ramah karna mirip teman saya, aku kesal dibuatnya', 3, 'l-1.jpg', '2020-10-15 02:54:34', '2020-10-15 02:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(72) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('2cc62c6bb5694c738eeef2068af3b296', 'Administrator', 'Melancongwisata@gmail.com', '$2y$10$wfPkXSmRlcxoWzJMih31UuUvwwuSxtNPWnR.jMdp3ENOGNhYy6V7K', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `jumbotron`
--
ALTER TABLE `jumbotron`
  ADD PRIMARY KEY (`id_jumbotron`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`id_response`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
