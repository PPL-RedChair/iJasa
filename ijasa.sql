-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 04:08 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ijasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bencana`
--

CREATE TABLE `bencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_bencana_id` bigint(20) UNSIGNED DEFAULT NULL,
  `nama_bencana` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bencana`
--

INSERT INTO `bencana` (`id`, `jenis_bencana_id`, `nama_bencana`, `deskripsi`, `photo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Gunung Merapi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor\r\n                                incididunt ut\r\n                                labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation\r\n                                ullamco\r\n                                laboris nisi ut aliquip ex ea commodo consequat.', NULL, '2021-01-16 10:20:50', '2021-01-16 10:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `donasis`
--

CREATE TABLE `donasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banyak_beras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_uang` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_pakaian_bekas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `jenis_bencana`
--

CREATE TABLE `jenis_bencana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_bencana`
--

INSERT INTO `jenis_bencana` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Gunung Meletus', '2021-01-16 09:15:05', '2021-01-16 09:15:05'),
(2, 'Gempa Bumi', '2021-01-16 09:15:50', '2021-01-16 09:15:50'),
(3, 'Banjir', '2021-01-16 09:15:50', '2021-01-16 09:15:50');

-- --------------------------------------------------------

--
-- Table structure for table `logistik`
--

CREATE TABLE `logistik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bencana_id` bigint(20) UNSIGNED DEFAULT NULL,
  `jumlah_pengungsi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengungsi_dewasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengungsi_anak` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengungsi_lansia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengungsi_bumil` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pengungsi_balita` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_selimut` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_beras` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_masker` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_gandum` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_mie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banyak_kasur` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kebutuhan_lain` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logistik`
--

INSERT INTO `logistik` (`id`, `bencana_id`, `jumlah_pengungsi`, `pengungsi_dewasa`, `pengungsi_anak`, `pengungsi_lansia`, `pengungsi_bumil`, `pengungsi_balita`, `banyak_selimut`, `banyak_beras`, `banyak_masker`, `banyak_gandum`, `banyak_mie`, `banyak_kasur`, `kebutuhan_lain`, `created_at`, `updated_at`) VALUES
(1, 1, '300', '200', '30', '50', '10', '10', '200', '10', '600', '10', '70', '300', 'tidak ada', '2021-01-16 12:32:49', '2021-01-16 12:32:49');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_16_034754_create_bencana_table', 2),
(5, '2021_01_16_035301_create_logistik_table', 3),
(6, '2021_01_16_081406_create_donasi_table', 4),
(7, '2021_01_16_091031_create_jenis_bencana_table', 5),
(8, '2021_01_16_091706_add_jenis_bencana_fk_on_bencana_table', 6),
(9, '2021_01_16_092723_create_bencana_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `bencana`
--
ALTER TABLE `bencana`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bencana_jenis_bencana_id_foreign` (`jenis_bencana_id`);

--
-- Indexes for table `donasis`
--
ALTER TABLE `donasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jenis_bencana`
--
ALTER TABLE `jenis_bencana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logistik`
--
ALTER TABLE `logistik`
  ADD PRIMARY KEY (`id`),
  ADD KEY `logistik_bencana_id_foreign` (`bencana_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `bencana`
--
ALTER TABLE `bencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donasis`
--
ALTER TABLE `donasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenis_bencana`
--
ALTER TABLE `jenis_bencana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `logistik`
--
ALTER TABLE `logistik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bencana`
--
ALTER TABLE `bencana`
  ADD CONSTRAINT `bencana_jenis_bencana_id_foreign` FOREIGN KEY (`jenis_bencana_id`) REFERENCES `jenis_bencana` (`id`);

--
-- Constraints for table `logistik`
--
ALTER TABLE `logistik`
  ADD CONSTRAINT `logistik_bencana_id_foreign` FOREIGN KEY (`bencana_id`) REFERENCES `bencana` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
