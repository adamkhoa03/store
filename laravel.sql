-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 02:27 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `parent`, `created_at`, `updated_at`) VALUES
(1, 'Nam', 'name', '0', NULL, NULL),
(2, 'Nữ', 'nu', '0', NULL, NULL),
(3, 'Áo Nam', 'ao-nam', '1', NULL, NULL),
(4, 'Quần Nam', 'quan-nam', '1', NULL, NULL),
(5, 'Áo Nữ', 'ao-nu', '2', NULL, NULL),
(6, 'Quần Nữ', 'quan-nu', '2', NULL, NULL);

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
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2021_02_08_031219_create_products_table', 1),
(15, '2021_02_08_142453_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prd_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_price` int(11) NOT NULL,
  `prd_featured` int(11) NOT NULL,
  `prd_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_properties` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prd_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `prd_code`, `prd_name`, `slug`, `prd_price`, `prd_featured`, `prd_status`, `prd_properties`, `prd_details`, `cat_name`, `prd_img`, `created_at`, `updated_at`) VALUES
(1, 'SP01', 'Áo Khoác Bomber Nỉ Xanh Lá Cây AK197', 'ao-khoac-bomber-ni-xanh-la-cay', 150000, 1, '1', 'no properties', 'no details', '2', 'img', NULL, NULL),
(2, 'SP01', 'Áo Khoác Bomber Nỉ Xanh Lá Cây AK197', 'ao-khoac-bomber-ni-xanh-la-cay', 150000, 1, '0', 'no properties', 'no details', '1', 'img', NULL, NULL),
(3, 'SP01', 'Áo Khoác Bomber Nỉ Xanh Lá Cây AK197', 'ao-khoac-bomber-ni-xanh-la-cay', 150000, 1, '1', 'no properties', 'no details', '3', 'img', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `full`, `address`, `phone`, `password`, `level`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'ADMINSTRATOR', 'Hà Nội', '0988777878', '$2y$10$KraNG.xNLoB/lmiSACQ0se180gfMkj7p/DhFL9sOcSGDSil.NUkGC', 1, NULL, 'O4iJLQ0GkaghobWKFjdODlKplSJNPioVNpLkL3lyRTvPHnU162ALXbqkv0c1', NULL, NULL),
(2, 'adamkhoa03@gmail.com', 'Minh Khoa', 'Hà Nội', '0988777878', '$2y$10$xb/jPVV.EVj4niVsy7/8tu5cuBbsFaRCgCYRKT59sD1gbHPmg2wny', 1, NULL, NULL, NULL, NULL),
(3, 'nguyenvana@gmail.com', 'Nguyễn Văn Anh', 'Hà Nội', '0967776455', '$2y$10$cDUjsyKvfaO2cV95sx.knuuntVCts1UdeJFdEqxa2GgWBTPEeAgoW', 2, NULL, NULL, '2021-02-15 09:11:25', '2021-02-15 09:11:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
