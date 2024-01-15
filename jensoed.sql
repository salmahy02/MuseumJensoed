-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2024 at 10:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jensoed`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_11_141557_create_wisata_table', 1),
(9, '2019_08_11_150223_create_gallery_forum_table', 1),
(10, '2019_08_11_150530_create_gallery_wisata_table', 1),
(11, '2019_08_11_150653_create_transaksis_table', 1),
(12, '2019_08_13_061608_update_transaksi_table', 1),
(13, '2019_08_17_033208_create_pakets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `created_at`, `updated_at`, `nama`, `harga`) VALUES
(1, NULL, NULL, 'Paket Edukasi Sejarah', '20000'),
(2, NULL, NULL, 'Paket Keluarga', '50000'),
(3, NULL, NULL, 'Paket Event', '75000');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaksis`
--

CREATE TABLE `transaksis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `admin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_paket` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksis`
--

INSERT INTO `transaksis` (`id`, `id_user`, `admin`, `id_paket`, `tanggal`, `harga`, `bukti`, `status`, `created_at`, `updated_at`) VALUES
(7, 2, NULL, 1, '2024-01-15', '20000', '1705289793.jpeg', 'Menunggu Konfirmasi', '2024-01-14 20:36:07', '2024-01-14 20:36:33'),
(8, 2, NULL, 2, '2024-01-16', '50000', '1705299913.jpeg', 'Menunggu Konfirmasi', '2024-01-14 23:20:08', '2024-01-14 23:25:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `token`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Salma Binuril Haya', 'suciatipkl001@gmail.com', 'admin', '2024-01-11 17:00:00', '$2y$10$y8X1iPpoU1QhDUGWIQ4V6u9Dv/yW.AbQQIunkn8fgkWVnGpO5yWPi', 'LbSkKRTsrOUdsZ2Ehz5SARvjtABi53UtGtm9nwIo', NULL, NULL, NULL, '2024-01-13 02:35:10', '2024-01-13 02:35:10'),
(2, 'salma', 'avarmxfr@gmail.com', 'user', '2024-01-01 03:35:21', '$2y$10$gaa3dwweZS9BL9JGmvrZ2.2dZlAv1A21VWWwqiDBm2rvdrUXgdJQO', 'F16j4Dra9L6VAVLOvHnOz4oXpEQ6HO6u93tX5ljk', NULL, NULL, NULL, '2024-01-14 20:34:05', '2024-01-14 20:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `wisatas`
--

CREATE TABLE `wisatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal_dibangun` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wisatas`
--

INSERT INTO `wisatas` (`id`, `nama`, `deskripsi`, `alamat`, `waktu`, `tanggal_dibangun`, `background`, `telepon`, `created_at`, `updated_at`) VALUES
(6, 'Aula Pertemuan', 'Pada Museum Jenderal Soedirman di Purwokerto juga terdapat aula pertemuan yang bisa digunakan untuk pameran, lomba, ataupun yang lainnya. Karena tempatnya yang luas, tempat ini sangat cocok digunakan untuk berbagai acara ataupun piknik keluarga.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari, 08.00 - 15.30 WIB', '1977-03-21', '1705288927.jpg', NULL, '2019-08-22 07:56:04', '2024-01-14 20:22:07'),
(8, 'Tandu', 'Panglima Besar Jenderal Sudirman memimpin Perang Gerilya bahkan dalam kondisi sakit sehingga ditandu. Tandu pertama yang digunakan Jenderal Sudirman itu konon merupakan kursi pribadi milik anggota militernya, Hadi Harsono. Jenderal Sudirman yang sakit itu harus ditandu empat orang agar bisa menempuh rute Perang Gerilyanya.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari, 08.00 - 15.30 WIB', '1977-03-21', '1705288585.jpeg', NULL, '2019-08-22 08:43:47', '2024-01-14 20:16:25'),
(9, 'Biografi Jenderal Soedirman', 'Pada Museum Jenderal Soedirman juga terdapat beberapa buku-buku yang menceritakan biografi Jenderal Soedirman secara lengkap, sehingga dapat menjadikan sebagai wawasan lebih untuk mengenal perjuangan Jenderal Soedirman. Selain itu, pengunjung juga dapat berfoto dengan patung Jenderal Soedirman.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari, 08.00 - 15.30 WIB', '1977-03-21', '1705288505.jpg', '-', '2019-08-22 17:10:08', '2024-01-14 20:15:05'),
(10, 'Taman Museum', 'Museum Jenderal Soedirman Memiliki Taman yang luas yang bisa dijadikan sebagai tempat untuk edukasi, piknik, maupun pameran. Pada Taman di Museum Jensoed Purwokerto ini memiliki pameran 2 tank yang digunakaan saat perang sebagai fasilitas pendukung. Tank-tank yang terdapat pada museum ini juga dapat mengedukasi anak-anak mengenai alat berperang. Pengunjung juga dapat berfoto di dalam tank yang disediakan.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari, 08.00 - 15.30 WIB', '1997-03-21', '1705288321.jpeg', NULL, '2019-08-22 17:22:57', '2024-01-14 20:12:01'),
(11, 'Mini Zoo', 'Pada Museum Jenderal Soedirman di Purwokerto ini juga terdapat kebun binatang mini yang dapat mengedukasi anak-anak mengenai binatang. Binatang yang terdapat pada kebun binatang mini ini biasanya terdiri dari binatang peliharaan, seperti kelinci, ayam, kucing, marmut, dan lain-lain. Selain itu, pengunjung juga dapat memberikan makan kepada hewan yang terdapat di kebun binatang mini ini.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari, 08.00 - 15.30 WIB', NULL, '1705288165.jpg', NULL, '2019-08-22 17:31:43', '2024-01-14 20:09:25'),
(12, 'Rumah Bersejarah', 'Rumah bersejarah berisi tentang  rumah Jenderal Sudriman yang saat ini dijadikan museum. Rumah bersejarah ini membuat kita dapat membayangkan ketika memasuki pelataran museum Jenderal Sudirman yang akan disuguhkan dengan halaman yang luas dan bersih. Lalu memasuki ruang tamu yang luas dengan duplikat kursi dan meja peninggalan Jenderal Sudirman. Diruangan inilah Jenderal Sudirman biasanya menerima tamu. Tidak hanya itu, di ruang tamu ini juga terdapat kursi yang digunakan prajurit untuk menggotong Jenderal Sudirman ke medan perang. Seperti yang diketahui bahwa Jenderal Sudirman enggan untuk \r\nduduk manis di rumah ketika prajuritnya berada di medan perang meskipun dirinya sedang dalam kondisi sakit. Ketika berkunjung ke museum ini juga akan mendapati ruang makan yang digunakan oleh Beliau bersama keluarga atau tamu-tamunya yang datang berkunjung. Di samping meja makan terdapat rak besar yang berfungsi untuk menyimpan senapan yang digunakan oleh Jenderal Sudirman ketika berada di medan perang. Di ruangan ke dua ini juga terdapat piring dan cangkir yang digunakan oleh keluarga Jenderal Sudirman tersimpan dengan baik dan rapih. Sedangkan di ruangan ke tiga merupakan ruang kerja Jenderal Sudirman, tempat Jenderal Sudirman meramu strategi untuk mengalahkan musuh.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Senin - Minggu, 08.00 - 15.30 WIB', '1977-03-21', '1705288015.jpeg', NULL, '2019-08-22 17:40:16', '2024-01-14 20:06:55'),
(13, 'Taman Bermain', 'Taman bermain merupakan salah satu fasilitas yang terdapat di museum jensoed. Tidak kalah unik karena memiliki kolam renang yang menarik dan juga jenis permainan yang sangat beragam seperti ayunan, jungkat-jungkit, slider, dan komedi putar, yang bisa diakses gratis.  Ada juga wahana permainan berbayar yang tak kalah seru seperti ATV dan kereta mini.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari, 08.00 - 15.30 WIB', '1977-03-21', '1705287766.jpeg', NULL, '2019-08-23 04:27:04', '2024-01-14 20:02:46'),
(14, 'Diorama', 'Dalam museum terdapat diorama yang menggambarkan kehidupan jenderal Soedirman dari sekolah sampai beliau wafat. Berupa adegan yang diaplikasikan dalam miniatur tiga dimensi yang menggambarkan bagian kisah hidup beliau. Pada Diorama ini juga akan menemukan pesan moral Panglima Besar Jenderal Soedirman, yang berbunyi:\r\n\r\n“Janganlah kamu berbuat seperti sapu yang meninggalkan ikatannya, sebatang lidi tidak akan berarti apa-apa. Tetapi dalam ikatan sapu akan dapat menyapu segala-galanya”.\r\n\r\n\r\n“Hendaknya perjuangan kita harus didasarkan atas kesucian, dengan demikian perjuangan kita selalu merupakan perjuangan antara jahat melawan suci, dan kami percaya, bahwa perjuangan suci itu senantiasa mendapatkan pertolongan dari Tuhan”.', 'Jl. Patimura No.240a, RW No.1, Dusun II, Pasir Kidul, Kec. Purwokerto Bar., Kabupaten Banyumas, Jawa Tengah 53136', 'Setiap Hari 08.00 - 15.30 WIB', '1977-03-21', '1705287542.jpeg', NULL, '2019-08-23 04:48:34', '2024-01-14 20:23:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wisatas`
--
ALTER TABLE `wisatas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wisatas`
--
ALTER TABLE `wisatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
