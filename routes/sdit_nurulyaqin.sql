-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Des 2019 pada 05.17
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdit_nurulyaqin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content_type_id` int(11) NOT NULL,
  `xn1` int(11) DEFAULT NULL,
  `xn2` int(11) DEFAULT NULL,
  `xn3` int(11) DEFAULT NULL,
  `xn4` int(11) DEFAULT NULL,
  `xn5` int(11) DEFAULT NULL,
  `xn6` int(11) DEFAULT NULL,
  `xn7` int(11) DEFAULT NULL,
  `xs1` text COLLATE utf8mb4_unicode_ci,
  `xs2` text COLLATE utf8mb4_unicode_ci,
  `xs3` text COLLATE utf8mb4_unicode_ci,
  `xs4` text COLLATE utf8mb4_unicode_ci,
  `xs5` text COLLATE utf8mb4_unicode_ci,
  `xs6` text COLLATE utf8mb4_unicode_ci,
  `xs7` text COLLATE utf8mb4_unicode_ci,
  `xs8` text COLLATE utf8mb4_unicode_ci,
  `xs9` text COLLATE utf8mb4_unicode_ci,
  `xs10` text COLLATE utf8mb4_unicode_ci,
  `xs11` text COLLATE utf8mb4_unicode_ci,
  `create_at` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_25_050642_create_contents_table', 1),
(5, '2019_11_25_112818_create_new_pendaftares_table', 2),
(6, '2019_11_25_113256_create_new_pendaftar_details_table', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `new_pendaftares`
--

CREATE TABLE `new_pendaftares` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftar_type_id` int(11) NOT NULL,
  `pendaftar_status_id` int(11) NOT NULL,
  `xn1` int(50) DEFAULT NULL,
  `xn2` int(11) DEFAULT NULL,
  `xn3` int(11) DEFAULT NULL,
  `xn4` int(11) DEFAULT NULL,
  `xn5` int(11) DEFAULT NULL,
  `xn6` int(11) DEFAULT NULL,
  `xn7` int(11) DEFAULT NULL,
  `xs1` text COLLATE utf8mb4_unicode_ci,
  `xs2` text COLLATE utf8mb4_unicode_ci,
  `xs3` text COLLATE utf8mb4_unicode_ci,
  `xs4` text COLLATE utf8mb4_unicode_ci,
  `xs5` text COLLATE utf8mb4_unicode_ci,
  `xs6` text COLLATE utf8mb4_unicode_ci,
  `xs7` text COLLATE utf8mb4_unicode_ci,
  `xs8` text COLLATE utf8mb4_unicode_ci,
  `xs9` text COLLATE utf8mb4_unicode_ci,
  `xs10` text COLLATE utf8mb4_unicode_ci,
  `xs11` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `new_pendaftares`
--

INSERT INTO `new_pendaftares` (`id`, `pendaftar_type_id`, `pendaftar_status_id`, `xn1`, `xn2`, `xn3`, `xn4`, `xn5`, `xn6`, `xn7`, `xs1`, `xs2`, `xs3`, `xs4`, `xs5`, `xs6`, `xs7`, `xs8`, `xs9`, `xs10`, `xs11`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 99102291, 1, NULL, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 01:10:02', '2019-12-13 01:10:02'),
(2, 1, 1, 99102291, 1, NULL, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 01:10:04', '2019-12-13 01:10:04'),
(3, 1, 1, 3175081, 1, NULL, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 01:12:18', '2019-12-13 01:12:18'),
(4, 1, 1, 3175081, 1, NULL, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 01:12:19', '2019-12-13 01:12:19'),
(5, 1, 1, 3175, 1, NULL, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 01:12:23', '2019-12-13 01:12:23'),
(6, 1, 1, 3175, 1, NULL, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-12-13 01:13:49', '2019-12-13 01:13:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `new_pendaftar_details`
--

CREATE TABLE `new_pendaftar_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `pendaftar_detail_type_id` int(11) NOT NULL,
  `pendaftar_account_id` int(11) NOT NULL,
  `xn1` int(11) DEFAULT NULL,
  `xn2` int(11) DEFAULT NULL,
  `xn3` int(11) DEFAULT NULL,
  `xn4` int(11) DEFAULT NULL,
  `xn5` int(11) DEFAULT NULL,
  `xn6` int(11) DEFAULT NULL,
  `xn7` int(11) DEFAULT NULL,
  `xs1` text COLLATE utf8mb4_unicode_ci,
  `xs2` text COLLATE utf8mb4_unicode_ci,
  `xs3` text COLLATE utf8mb4_unicode_ci,
  `xs4` text COLLATE utf8mb4_unicode_ci,
  `xs5` text COLLATE utf8mb4_unicode_ci,
  `xs6` text COLLATE utf8mb4_unicode_ci,
  `xs7` text COLLATE utf8mb4_unicode_ci,
  `xs8` text COLLATE utf8mb4_unicode_ci,
  `xs9` text COLLATE utf8mb4_unicode_ci,
  `xs10` text COLLATE utf8mb4_unicode_ci,
  `xs11` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `new_pendaftar_details`
--

INSERT INTO `new_pendaftar_details` (`id`, `pendaftar_id`, `pendaftar_detail_type_id`, `pendaftar_account_id`, `xn1`, `xn2`, `xn3`, `xn4`, `xn5`, `xn6`, `xn7`, `xs1`, `xs2`, `xs3`, `xs4`, `xs5`, `xs6`, `xs7`, `xs8`, `xs9`, `xs10`, `xs11`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 99102291, 1, 2, 99102291, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', 'Makasar', '2013-01-07', 'Islam', NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2019-12-13 01:10:02', '2019-12-13 01:10:02'),
(2, 2, 1, 99102291, 1, 2, 99102291, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', 'Makasar', '2013-01-07', 'Islam', NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2019-12-13 01:10:04', '2019-12-13 01:10:04'),
(3, 3, 1, 3175081, 1, 2, 3175081, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', 'Makasar', '2013-01-07', 'Islam', NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2019-12-13 01:12:18', '2019-12-13 01:12:18'),
(4, 4, 1, 3175081, 1, 2, 3175081, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', 'Makasar', '2013-01-07', 'Islam', NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2019-12-13 01:12:19', '2019-12-13 01:12:19'),
(5, 5, 1, 3175, 1, 2, 3175, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', 'Makasar', '2013-01-07', 'Islam', NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2019-12-13 01:12:23', '2019-12-13 01:12:23'),
(6, 6, 1, 3175, 1, 2, 3175, NULL, NULL, NULL, NULL, 'ASEP NURDIANSYAH', 'Makasar', '2013-01-07', 'Islam', NULL, NULL, 'Indonesia', NULL, NULL, NULL, NULL, '2019-12-13 01:13:49', '2019-12-13 01:13:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yulianto401.juli@gmail.com', '$2y$10$B4mJEmNVWm27nRRbaPkG0O/FEBWy35iQvzUvtHvbj4JqMqpVpDtfO', '2019-11-25 00:26:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regis_form`
--

CREATE TABLE `regis_form` (
  `regis_id` int(11) NOT NULL,
  `form_regis_id` int(11) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `nik` varchar(25) DEFAULT NULL,
  `region` varchar(25) DEFAULT NULL,
  `create_dtm` date DEFAULT NULL,
  `status_child_id` varchar(25) DEFAULT NULL,
  `xs1` varchar(25) DEFAULT NULL,
  `xs2` varchar(25) DEFAULT NULL,
  `xs3` varchar(25) DEFAULT NULL,
  `xs4` varchar(25) DEFAULT NULL,
  `xs5` varchar(25) DEFAULT NULL,
  `xs6` varchar(25) DEFAULT NULL,
  `xs7` varchar(25) DEFAULT NULL,
  `xs8` varchar(25) DEFAULT NULL,
  `xs9` varchar(25) DEFAULT NULL,
  `xd1` date DEFAULT NULL,
  `xd2` date DEFAULT NULL,
  `xd3` date DEFAULT NULL,
  `xd4` date DEFAULT NULL,
  `xn1` int(8) DEFAULT NULL,
  `xn2` int(12) DEFAULT NULL,
  `xn3` int(16) DEFAULT NULL,
  `xn4` int(24) DEFAULT NULL,
  `xn6` int(32) DEFAULT NULL,
  `xn7` int(32) DEFAULT NULL,
  `msisdn` varchar(16) DEFAULT NULL,
  `data1` varchar(255) DEFAULT NULL,
  `data2` varchar(255) DEFAULT NULL,
  `data3` varchar(255) DEFAULT NULL,
  `data4` varchar(255) DEFAULT NULL,
  `data5` varchar(255) DEFAULT NULL,
  `data6` varchar(255) DEFAULT NULL,
  `data7` varchar(255) DEFAULT NULL,
  `data8` varchar(255) DEFAULT NULL,
  `data9` varchar(255) DEFAULT NULL,
  `upload1` text NOT NULL,
  `upload2` text NOT NULL,
  `upload3` text NOT NULL,
  `upload4` text NOT NULL,
  `upload5` text NOT NULL,
  `upload6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `regis_form`
--

INSERT INTO `regis_form` (`regis_id`, `form_regis_id`, `full_name`, `nik`, `region`, `create_dtm`, `status_child_id`, `xs1`, `xs2`, `xs3`, `xs4`, `xs5`, `xs6`, `xs7`, `xs8`, `xs9`, `xd1`, `xd2`, `xd3`, `xd4`, `xn1`, `xn2`, `xn3`, `xn4`, `xn6`, `xn7`, `msisdn`, `data1`, `data2`, `data3`, `data4`, `data5`, `data6`, `data7`, `data8`, `data9`, `upload1`, `upload2`, `upload3`, `upload4`, `upload5`, `upload6`) VALUES
(1, 50000001, 'Mediansyah Malik', '3175081705970007', 'Islam', '2019-12-24', 'Kandung', 'O', 'Bahasa Indonesia', 'Ian', 'WNI', 'L', 'dahliameilany@gmail.com', NULL, NULL, 'Jakarta', '1997-05-17', NULL, NULL, NULL, 175, 74, NULL, NULL, NULL, 20, '081218282816', 'Jl Kerja Bakti RT 1 / 002 no 51', 'Orang tua', 'dll', 'gangguan pernafasan', 'Tidak ada', 'TK Permata Insan Mandiri', 'Jl jalan sebentar ngga pake lama RT 99 / 009 no 9', NULL, NULL, '', '', '', '', '', '');

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
(1, 'Yulianto', 'yulianto401.juli@gmail.com', NULL, '$2y$10$zXbs76zfHL2etmTLfXHiX.teIqus4Olg5/.4F91NgA4qJndTkpOaO', NULL, '2019-11-25 00:18:31', '2019-11-25 00:18:31'),
(2, 'Mediansyah Malik', 'mediansyah123@gmail.com', NULL, '$2y$10$8fgxEMS1fcLXaS1KAvWHr.VMUWWbWJTtoD94t/K2XL/Q6iWyUI2Ki', NULL, '2019-12-15 04:57:31', '2019-12-15 04:57:31'),
(3, 'Mediansyah Malik', 'mediansyah135@gmail.com', NULL, '$2y$10$x.fyHdHo9A9sq.JtjbMRiua7V68eqNFzaYu9fv7q/.JIY5dioktBq', NULL, '2019-12-24 07:45:15', '2019-12-24 07:45:15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `new_pendaftares`
--
ALTER TABLE `new_pendaftares`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `new_pendaftar_details`
--
ALTER TABLE `new_pendaftar_details`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regis_form`
--
ALTER TABLE `regis_form`
  ADD PRIMARY KEY (`regis_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `new_pendaftares`
--
ALTER TABLE `new_pendaftares`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `new_pendaftar_details`
--
ALTER TABLE `new_pendaftar_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `regis_form`
--
ALTER TABLE `regis_form`
  MODIFY `regis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
