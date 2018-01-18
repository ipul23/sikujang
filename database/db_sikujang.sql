-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 07:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sikujang`
--

-- --------------------------------------------------------

--
-- Table structure for table `demands`
--

CREATE TABLE `demands` (
  `demand_id` int(3) NOT NULL,
  `product_id` int(3) NOT NULL,
  `demand_price` int(30) DEFAULT NULL,
  `demand_note` text NOT NULL,
  `demand_quantity` int(3) NOT NULL,
  `demand_status` int(1) DEFAULT NULL,
  `client_name` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `demands`
--

INSERT INTO `demands` (`demand_id`, `product_id`, `demand_price`, `demand_note`, `demand_quantity`, `demand_status`, `client_name`, `date`, `created_at`, `updated_at`) VALUES
(1, 8, 500000, 'ya', 20, 0, 'Prames', '2017-12-14 06:51:08', '2017-12-13 23:51:03', '2017-12-13 23:51:08'),
(2, 9, 3000000, 'halo', 200, 1, 'Jonggi', '2015-08-14 06:51:54', '2017-12-13 23:51:49', '2017-12-13 23:51:54'),
(3, 8, 3000000, 'Keterangan', 120, 1, 'Daffa', '2016-01-14 06:52:19', '2017-12-13 23:52:19', '2017-12-13 23:52:19'),
(4, 8, 7500000, 'hai', 300, 1, 'Ainil', '2017-12-14 06:52:33', '2017-12-13 23:52:33', '2017-12-13 23:52:33'),
(5, 9, 4500000, 'dikirim', 300, 0, 'Octav', '2017-12-14 07:41:47', '2017-12-14 00:41:05', '2017-12-14 00:41:47');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `date`, `created_at`, `update_at`) VALUES
(2, '2017-12-14 02:52:39', '2017-12-14 02:52:39', '2017-12-14 02:52:39'),
(2, '2017-12-20 05:42:58', '2017-12-20 05:42:58', '2017-12-20 05:42:58'),
(2, '2018-01-16 03:45:08', '2018-01-16 03:45:08', '2018-01-16 03:45:08'),
(5, '2018-01-16 04:35:14', '2018-01-16 04:35:14', '2018-01-16 04:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_11_26_064113_create_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` int(30) NOT NULL,
  `product_quantity` int(15) DEFAULT NULL,
  `product_desc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_quantity`, `product_desc`, `created_at`, `updated_at`) VALUES
(8, 'Pisang', 25000, -16123, 'Pisang Ambon', '2017-12-13 05:55:49', '2017-12-13 05:55:49'),
(9, 'Kentang', 15000, 206, 'Kentang Bandung', '2017-12-13 05:56:04', '2017-12-13 05:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `stock_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stock_increase` int(3) NOT NULL,
  `stock_decrease` int(3) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `stage` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`stock_id`, `product_id`, `date`, `stock_increase`, `stock_decrease`, `stock_quantity`, `stage`, `created_at`, `updated_at`) VALUES
(13, 8, '2016-01-14 12:56:33', 15, 3, 32, 'Inisiasi', '2017-12-13 12:56:33', '2017-12-13 12:56:33'),
(14, 8, '2016-02-15 12:56:45', 14, 2, 44, 'Inisiasi', '2017-12-13 12:56:45', '2017-12-13 12:56:45'),
(15, 8, '2016-02-16 12:56:57', 23, 3, 64, 'Inisiasi', '2017-12-13 12:56:57', '2017-12-13 12:56:57'),
(16, 8, '2016-03-17 12:57:07', 15, 1, 78, 'Inisiasi', '2017-12-13 12:57:07', '2017-12-13 12:57:07'),
(17, 8, '2016-04-18 12:57:19', 17, 4, 91, 'Inisiasi', '2017-12-13 12:57:19', '2017-12-13 12:57:19'),
(18, 8, '2016-05-19 12:57:35', 17, 2, 106, 'Inisiasi', '2017-12-13 12:57:35', '2017-12-13 12:57:35'),
(19, 8, '2016-08-20 12:57:44', 15, 2, 119, 'Inisiasi', '2017-12-13 12:57:44', '2017-12-13 12:57:44'),
(20, 8, '2016-09-21 12:57:59', 18, 5, 132, 'Inisiasi', '2017-12-13 12:57:59', '2017-12-13 12:57:59'),
(21, 8, '2016-10-22 12:58:07', 20, 3, 149, 'Inisiasi', '2017-12-13 12:58:07', '2017-12-13 12:58:07'),
(22, 8, '2016-11-23 12:58:27', 14, 0, 163, 'Inisiasi', '2017-12-13 12:58:27', '2017-12-13 12:58:27'),
(23, 8, '2016-12-24 12:58:38', 17, 5, 175, 'Inisiasi', '2017-12-13 12:58:38', '2017-12-13 12:58:38'),
(24, 8, '2016-08-15 13:05:09', 0, 1, 174, 'Aklimatisasi', '2017-12-13 13:05:09', '2017-12-13 13:05:09'),
(25, 8, '2016-10-13 13:05:23', 0, 2, 172, 'Inisiasi', '2017-12-13 13:05:23', '2017-12-13 13:05:23'),
(26, 8, '2016-03-10 13:05:37', 0, 4, 168, 'Aklimatisasi', '2017-12-13 13:05:37', '2017-12-13 13:05:37'),
(27, 8, '2016-09-12 13:05:45', 0, 3, 165, 'Inisiasi', '2017-12-13 13:05:45', '2017-12-13 13:05:45'),
(28, 8, '2016-04-11 13:05:56', 0, 2, 163, 'Aklimatisasi', '2017-12-13 13:05:56', '2017-12-13 13:05:56'),
(29, 8, '2016-04-23 13:06:09', 0, 3, 160, 'Aklimatisasi', '2017-12-13 13:06:09', '2017-12-13 13:06:09'),
(30, 8, '2016-04-30 13:06:19', 0, 1, 159, 'Aklimatisasi', '2017-12-13 13:06:19', '2017-12-13 13:06:19'),
(31, 8, '2016-05-09 13:06:33', 0, 3, 156, 'Aklimatisasi', '2017-12-13 13:06:33', '2017-12-13 13:06:33'),
(32, 8, '2016-05-15 13:06:44', 0, 4, 152, 'Aklimatisasi', '2017-12-13 13:06:44', '2017-12-13 13:06:44'),
(33, 8, '2016-06-12 13:07:32', 0, 1, 151, 'Aklimatisasi', '2017-12-13 13:07:32', '2017-12-13 13:07:32'),
(34, 8, '2016-06-13 13:07:47', 0, 5, 146, 'Aklimatisasi', '2017-12-13 13:07:47', '2017-12-13 13:07:47'),
(35, 8, '2016-07-11 13:08:01', 0, 3, 143, 'Aklimatisasi', '2017-12-13 13:08:01', '2017-12-13 13:08:01'),
(36, 8, '2016-08-14 13:08:13', 0, 1, 142, 'Aklimatisasi', '2017-12-13 13:08:13', '2017-12-13 13:08:13'),
(37, 8, '2016-03-13 13:08:27', 0, 2, 140, 'Aklimatisasi', '2017-12-13 13:08:27', '2017-12-13 13:08:27'),
(38, 8, '2016-06-13 13:15:23', 0, 0, 140, 'Transplanting', '2017-12-13 13:15:23', '2017-12-13 13:15:23'),
(39, 8, '2016-07-11 13:15:34', 0, 1, 139, 'Transplanting', '2017-12-13 13:15:34', '2017-12-13 13:15:34'),
(40, 8, '2016-07-23 13:15:44', 0, 2, 137, 'Transplanting', '2017-12-13 13:15:44', '2017-12-13 13:15:44'),
(41, 8, '2016-08-12 13:15:54', 0, 0, 137, 'Transplanting', '2017-12-13 13:15:54', '2017-12-13 13:15:54'),
(42, 8, '2016-08-13 13:16:03', 0, 1, 136, 'Transplanting', '2017-12-13 13:16:03', '2017-12-13 13:16:03'),
(43, 8, '2016-09-10 13:16:13', 0, 0, 136, 'Transplanting', '2017-12-13 13:16:13', '2017-12-13 13:16:13'),
(44, 8, '2016-09-11 13:16:23', 0, 2, 134, 'Transplanting', '2017-12-13 13:16:23', '2017-12-13 13:16:23'),
(45, 8, '2016-10-13 13:16:32', 0, 0, 134, 'Transplanting', '2017-12-13 13:16:32', '2017-12-13 13:16:32'),
(46, 8, '2017-01-09 13:16:40', 0, 1, 133, 'Transplanting', '2017-12-13 13:16:40', '2017-12-13 13:16:40'),
(47, 8, '2017-01-12 13:17:12', 0, 0, 133, 'Transplanting', '2017-12-13 13:17:12', '2017-12-13 13:17:12'),
(48, 8, '2017-02-13 13:17:21', 0, 1, 132, 'Transplanting', '2017-12-13 13:17:21', '2017-12-13 13:17:21'),
(49, 8, '2016-06-03 13:17:32', 0, 1, 131, 'Transplanting', '2017-12-13 13:17:32', '2017-12-13 13:17:32'),
(50, 9, '2016-10-12 13:56:53', 20, 0, 20, 'Inisiasi', '2017-12-13 13:56:53', '2017-12-13 13:56:53'),
(51, 9, '2016-09-10 13:57:03', 21, 1, 40, 'Inisiasi', '2017-12-13 13:57:03', '2017-12-13 13:57:03'),
(52, 9, '2016-08-14 13:57:14', 22, 3, 59, 'Inisiasi', '2017-12-13 13:57:14', '2017-12-13 13:57:14'),
(53, 9, '2016-07-21 13:57:22', 24, 3, 80, 'Inisiasi', '2017-12-13 13:57:22', '2017-12-13 13:57:22'),
(54, 9, '2016-06-24 13:57:31', 21, 1, 100, 'Inisiasi', '2017-12-13 13:57:31', '2017-12-13 13:57:31'),
(55, 9, '2016-05-10 13:57:41', 26, 2, 124, 'Inisiasi', '2017-12-13 13:57:41', '2017-12-13 13:57:41'),
(56, 9, '2016-04-23 13:58:01', 23, 1, 146, 'Inisiasi', '2017-12-13 13:58:01', '2017-12-13 13:58:01'),
(57, 9, '2016-03-30 13:58:12', 21, 1, 166, 'Inisiasi', '2017-12-13 13:58:12', '2017-12-13 13:58:12'),
(58, 9, '2016-02-11 13:58:22', 25, 1, 190, 'Inisiasi', '2017-12-13 13:58:22', '2017-12-13 13:58:22'),
(59, 9, '2016-01-10 13:58:32', 25, 3, 212, 'Inisiasi', '2017-12-13 13:58:32', '2017-12-13 13:58:32'),
(60, 9, '2016-12-13 13:58:42', 20, 0, 232, 'Inisiasi', '2017-12-13 13:58:42', '2017-12-13 13:58:42'),
(61, 9, '2017-02-04 14:04:52', 0, 2, 230, 'Aklimatisasi', '2017-12-13 14:04:52', '2017-12-13 14:04:52'),
(62, 9, '2017-01-15 14:05:04', 0, 1, 229, 'Aklimatisasi', '2017-12-13 14:05:04', '2017-12-13 14:05:04'),
(63, 9, '2016-02-03 14:05:15', 0, 2, 227, 'Aklimatisasi', '2017-12-13 14:05:15', '2017-12-13 14:05:15'),
(64, 9, '2016-03-11 14:05:25', 0, 1, 226, 'Aklimatisasi', '2017-12-13 14:05:25', '2017-12-13 14:05:25'),
(65, 9, '2016-04-12 14:05:36', 0, 1, 225, 'Aklimatisasi', '2017-12-13 14:05:36', '2017-12-13 14:05:36'),
(66, 9, '2016-05-30 14:05:45', 0, 1, 224, 'Aklimatisasi', '2017-12-13 14:05:45', '2017-12-13 14:05:45'),
(67, 9, '2016-06-13 14:05:58', 0, 3, 221, 'Aklimatisasi', '2017-12-13 14:05:58', '2017-12-13 14:05:58'),
(68, 9, '2016-07-12 14:06:08', 0, 3, 218, 'Aklimatisasi', '2017-12-13 14:06:08', '2017-12-13 14:06:08'),
(69, 9, '2016-08-23 14:06:20', 0, 1, 217, 'Aklimatisasi', '2017-12-13 14:06:20', '2017-12-13 14:06:20'),
(70, 9, '2016-09-11 14:06:30', 0, 1, 216, 'Aklimatisasi', '2017-12-13 14:06:30', '2017-12-13 14:06:30'),
(71, 9, '2016-10-13 14:06:44', 0, 1, 215, 'Aklimatisasi', '2017-12-13 14:06:44', '2017-12-13 14:06:44'),
(72, 9, '2016-10-11 14:06:56', 0, 1, 214, 'Aklimatisasi', '2017-12-13 14:06:56', '2017-12-13 14:06:56'),
(73, 9, '2016-10-13 14:17:15', 0, 0, 214, 'Transplanting', '2017-12-13 14:17:15', '2017-12-13 14:17:15'),
(74, 9, '2016-03-03 14:17:25', 0, 1, 213, 'Transplanting', '2017-12-13 14:17:25', '2017-12-13 14:17:25'),
(75, 9, '2016-04-05 14:17:34', 0, 0, 213, 'Transplanting', '2017-12-13 14:17:34', '2017-12-13 14:17:34'),
(76, 9, '2016-06-23 14:17:43', 0, 2, 211, 'Transplanting', '2017-12-13 14:17:43', '2017-12-13 14:17:43'),
(77, 9, '2017-03-13 14:17:59', 0, 1, 210, 'Transplanting', '2017-12-13 14:17:59', '2017-12-13 14:17:59'),
(78, 9, '2017-02-18 14:18:10', 0, 0, 210, 'Transplanting', '2017-12-13 14:18:10', '2017-12-13 14:18:10'),
(79, 9, '2017-01-03 14:18:20', 0, 0, 210, 'Transplanting', '2017-12-13 14:18:20', '2017-12-13 14:18:20'),
(80, 9, '2016-12-13 14:18:29', 0, 1, 209, 'Transplanting', '2017-12-13 14:18:29', '2017-12-13 14:18:29'),
(81, 9, '2016-07-11 14:18:57', 0, 0, 209, 'Transplanting', '2017-12-13 14:18:57', '2017-12-13 14:18:57'),
(82, 9, '2016-09-17 14:19:07', 0, 1, 208, 'Transplanting', '2017-12-13 14:19:07', '2017-12-13 14:19:07'),
(83, 9, '2016-08-11 14:19:20', 0, 1, 207, 'Transplanting', '2017-12-13 14:19:20', '2017-12-13 14:19:20'),
(84, 9, '2016-05-13 14:19:34', 0, 1, 206, 'Transplanting', '2017-12-13 14:19:34', '2017-12-13 14:19:34'),
(85, 8, '2017-12-14 07:33:42', 20, 0, 151, 'Inisiasi', '2017-12-14 07:33:42', '2017-12-14 07:33:42'),
(86, 8, '2017-12-14 07:35:27', -2, 3, 146, 'Aklimatisasi', '2017-12-14 07:35:27', '2017-12-14 07:35:27'),
(87, 8, '2018-01-16 03:52:49', 20, 30, 136, 'Aklimatisasi', '2018-01-16 03:52:49', '2018-01-16 03:52:49'),
(88, 8, '2018-01-16 04:19:38', -1, 16258, -16123, 'Inisiasi', '2018-01-16 04:19:38', '2018-01-16 04:19:38'),
(89, 8, '2018-01-17 00:23:23', 12, 12, -16123, 'Inisiasi', '2018-01-17 00:23:23', '2018-01-17 00:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_status` tinyint(1) DEFAULT '1',
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password_confirmation` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password_backup` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `user_status`, `password`, `password_confirmation`, `password_backup`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saeful ramadhan', 'sflramadhan@gmail.com', 0, '$2y$10$43gFln8nUK4w/sy2Hbp4/eVShoy1nMy4W/DAgy8bLeMXUfu8ifceW', '', 'serangbanten23', 'WrmXzUBZ9BTYExhSAduS2bxMdxUr7UZDb1EJO4eJXuRN5X7P6iPMT2HJ0KiQ', '2017-12-12 22:58:40', '2017-12-12 22:58:40'),
(2, 'Hafidlotul Fatimah', 'fatimah@gmail.com', 1, '$2y$10$70ZW5xJSQ.aOdwG0FHgks.4MO4To8t2UZ5AVvf9VfCWCXSw9.Ofvi', '', 'fatimah', 'QLnWkm4dcuj7aTm0cIwL8kXhO92r0qdAJAYLv8xjCdDtUUmFwnjGb3YOp4J7', '2017-12-13 03:03:35', '2017-12-13 03:03:35'),
(3, 'Firgiawan Saktyo', 'firgi@gmail.com', 1, '$2y$10$Fh1H2XQi59BY27pn7BaDfuN7jcq59WksPAHxA5GpeFr8slg.8ke/u', '', 'firgiawan', NULL, '2017-12-14 00:42:25', '2017-12-14 00:42:25'),
(4, 'hazim', 'hazim@gmail.com', 1, '$2y$10$mECblaE6d9c5LHlHOJ/Ei.AN8fkOTaEhVCGGIOY6YzZbV2QahaEOu', '', 'hazim', NULL, '2018-01-15 20:50:47', '2018-01-15 20:50:47'),
(5, 'devy', 'devy@gmail.com', 1, '$2y$10$GCLzKoE1/c7KXBehkRm/LeqLqE1Hi2Hp.CnGq2B.Sdz8Mb/hru1GW', '', 'devy', NULL, '2018-01-15 20:52:32', '2018-01-15 20:52:32'),
(6, 'abi', 'abi@gmail.com', 1, '$2y$10$xE7NshCJuwnAzfntapvAwe3s6PNhMoszJLOXa9JBNX96u.zkI2CsG', 'abifatim', 'abifatim', NULL, '2018-01-16 18:02:32', '2018-01-16 18:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `demands`
--
ALTER TABLE `demands`
  ADD PRIMARY KEY (`demand_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`stock_id`);

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
-- AUTO_INCREMENT for table `demands`
--
ALTER TABLE `demands`
  MODIFY `demand_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `stock_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
