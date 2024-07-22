-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2024 at 02:57 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logo_site`
--
CREATE DATABASE IF NOT EXISTS `logo_site` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `logo_site`;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `logo_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `logo_id`, `created_at`, `updated_at`, `status`) VALUES
(49, '40', '15', '2024-04-01 04:54:56', '2024-04-01 04:54:56', 1),
(50, '40', '17', '2024-04-01 04:55:00', '2024-04-01 04:55:00', 1),
(51, '40', '18', '2024-04-01 04:55:03', '2024-04-01 04:55:03', 1),
(58, '39', '25', '2024-04-02 07:05:28', '2024-04-02 07:05:28', 1),
(59, '39', '17', '2024-04-02 07:26:12', '2024-04-02 07:26:12', 1),
(60, '39', '19', '2024-04-02 07:26:21', '2024-04-02 07:26:21', 1),
(81, '38', '17', '2024-04-04 02:09:32', '2024-04-04 02:09:32', 1),
(82, '38', '18', '2024-04-04 02:24:34', '2024-04-04 02:24:34', 1),
(83, '38', '15', '2024-04-04 03:21:09', '2024-04-04 03:21:09', 1),
(84, '38', '22', '2024-04-04 04:54:15', '2024-04-04 04:54:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` varchar(255) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `parent_category_id` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `designer_id`, `category_name`, `cat_image`, `parent_category_id`, `slug`, `created_at`, `updated_at`) VALUES
(16, '36', 'logo', '1711614382.jpeg', 'default_option', 'logo', '2024-03-28 02:56:22', '2024-03-28 02:56:22'),
(17, '34', 'sports', '1711695609.png', 'default_option', 'sports', '2024-03-29 01:30:09', '2024-03-29 01:30:09'),
(18, '34', 'gym', '1711702136.png', 'default_option', 'gym', '2024-03-29 03:18:56', '2024-03-29 03:18:56');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `logo_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favorites`
--

INSERT INTO `favorites` (`id`, `user_id`, `logo_id`, `created_at`, `updated_at`) VALUES
(1, '38', '17', '2024-04-02 05:53:59', '2024-04-02 05:53:59'),
(2, '38', '19', '2024-04-02 05:54:29', '2024-04-02 05:54:29'),
(3, '38', '15', '2024-04-02 05:56:36', '2024-04-02 05:56:36'),
(4, '38', '25', '2024-04-02 06:12:21', '2024-04-02 06:12:21'),
(5, '39', '17', '2024-04-02 07:01:22', '2024-04-02 07:01:22'),
(6, '39', '19', '2024-04-02 07:05:10', '2024-04-02 07:05:10'),
(7, '39', '24', '2024-04-02 07:05:16', '2024-04-02 07:05:16'),
(8, '39', '18', '2024-04-02 07:23:00', '2024-04-02 07:23:00'),
(9, '39', '25', '2024-04-02 07:40:31', '2024-04-02 07:40:31'),
(10, '38', '23', '2024-04-04 02:30:36', '2024-04-04 02:30:36'),
(11, '40', '15', '2024-04-05 00:45:41', '2024-04-05 00:45:41'),
(12, '38', '24', '2024-04-05 02:17:21', '2024-04-05 02:17:21'),
(13, '38', '22', '2024-04-05 02:34:02', '2024-04-05 02:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `logo_image` varchar(255) NOT NULL,
  `description` longtext DEFAULT NULL,
  `is_approved` tinyint(1) NOT NULL DEFAULT 0,
  `is_disapproved` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `designer_id`, `name`, `slug`, `category_id`, `price`, `stock`, `logo_image`, `description`, `is_approved`, `is_disapproved`, `status`, `created_at`, `updated_at`) VALUES
(15, 36, 'testt 2244', 'testt-2244', 16, '111', '2', '1711614416.jpeg', 'Logo royalty-free images. 20,743,972 logo stock photos, vectors, and illustrations are available royalty-free for download. See logo', 1, 0, 1, '2024-03-28 02:56:56', '2024-03-28 02:58:20'),
(17, 36, 'testing logoo022', 'testing-logoo022', 16, '111', '1', '1711614464.jpeg', 'Logo royalty-free images. 20,743,972 logo stock photos, vectors, and illustrations are available royalty-free for download. See logo', 1, 0, 1, '2024-03-28 02:57:44', '2024-03-28 02:58:23'),
(18, 36, 'demooooo 963', 'demooooo-963', 16, '123', '1', '1711614486.jpeg', 'Logo royalty-free images. 20,743,972 logo stock photos, vectors, and illustrations are available royalty-free for download. See logo', 1, 0, 1, '2024-03-28 02:58:06', '2024-03-28 02:58:25'),
(19, 34, 'animal logo 451', 'animal-logo-451', 16, '365', '1', '1711621506.jpeg', 'best logo images & stock photos. Download royalty free logo pictures & logo designs in HD to 4K quality as pn', 1, 0, 1, '2024-03-28 04:55:06', '2024-03-28 04:57:40'),
(21, 34, 'runing', 'runing', 17, '123', '1', '1711699106.jpeg', 'Search from thousands of royalty-free Sports Logo stock images and video for your next project. Download royalty-free', 1, 0, 1, '2024-03-29 02:28:26', '2024-03-29 02:29:05'),
(22, 34, 'gym logo', 'gym-logo', 18, '111', '1', '1711702196.png', 'ible Gym Logo vectors, icons, clipart graphics, and backgrounds for royalty-free download from the crea', 1, 0, 1, '2024-03-29 03:19:56', '2024-03-29 03:20:14'),
(23, 34, 'volleyball testtt', 'volleyball-testtt', 17, '111', '1', '1711711822.jpeg', 'Search from thousands of royalty-free Sports Logo stock images and video for your next project. Download royalty-free', 1, 0, 1, '2024-03-29 06:00:22', '2024-03-29 06:01:08'),
(24, 34, 'gamess logoo', 'gamess-logoo', 17, '111', '1', '1711711845.jpeg', 'Search from thousands of royalty-free Sports Logo stock images and video for your next project. Download royalty-free', 1, 0, 1, '2024-03-29 06:00:45', '2024-03-29 06:01:19'),
(25, 34, 'fitness', 'fitness', 18, '111', '1', '1711713707.jpeg', 'Gym Logo royalty-free images. 166,089 gym logo stock photos, vectors, and illustrations are available royalty-free', 1, 0, 1, '2024-03-29 06:31:47', '2024-03-29 06:32:07'),
(26, 34, 'name logo', 'name-logo', 16, '102', '1', '1712317903.png', 'name logos stock photos, vectors, and illustrations are available royalty-free for downloa', 0, 0, 1, '2024-04-05 06:21:43', '2024-04-05 06:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_26_112441_create_categories_table', 2),
(6, '2024_03_26_132502_create_logos_table', 3),
(7, '2024_03_26_134146_create_logos_table', 4),
(8, '2024_03_27_054257_create_logos_table', 5),
(9, '2024_03_28_121455_create_carts_table', 6),
(11, '2024_04_02_064433_add_paid_to_users_table', 7),
(12, '2024_04_02_082156_add_paid_to_users_table', 8),
(13, '2024_04_02_103007_create_favorites_table', 9),
(14, '2024_04_03_052718_add_paid_to_carts_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `is_approved` varchar(255) NOT NULL DEFAULT '0',
  `is_disapproved` varchar(255) NOT NULL DEFAULT '0',
  `status` varchar(255) NOT NULL DEFAULT '0',
  `stripe_customer_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `number`, `is_approved`, `is_disapproved`, `status`, `stripe_customer_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(34, 'designer', 'designer@gmail.com', NULL, '$2y$12$HqCRMaT/ouAhYu21xr9L.OXp/YHTgUThuTEaJWzZkoqGH.a4rr1c2', 'designer', '9966338815', '0', '0', '0', NULL, NULL, '2024-03-26 05:26:39', '2024-03-26 05:26:39'),
(36, 'admin', 'admin@gmail.com', NULL, '$2y$12$xOD7UUIWEFLFNmNZ.fViruTPm.7P6csRcd.lzFeegpm1CoyX69OW6', 'admin', '1478520369', '0', '0', '0', NULL, NULL, '2024-03-27 02:25:09', '2024-03-27 02:25:09'),
(38, 'Neeraj', 'neeraj@gmail.com', NULL, '$2y$12$78xKda8K4.QIYKJ4ZYMBM.mULti1Fu7YQ9b7xB5ukhKH1.qPnxzcG', 'user', '9006338814', '1', '0', '0', 'cus_Prrp5QDDTp4un8', NULL, '2024-03-28 06:36:51', '2024-04-05 02:56:01'),
(39, 'test', 'test@gmail.com', NULL, '$2y$12$ANeXZGX2OZXZEQuiEjJRT.E9iQUBKE8.wiOu60HWr7zaxIp3Dtyvm', 'user', '1478520111', '1', '0', '0', 'cus_Pqm29mxF84kf1O', NULL, '2024-03-29 02:59:17', '2024-04-02 04:52:59'),
(40, 'user', 'user@gmail.com', NULL, '$2y$12$IpxI7EyaN.3f4/LfK1VH/O5.wS8x26nnZ41oAsNqTsh3zNObzluYy', 'user', '9966338987', '1', '0', '0', NULL, NULL, '2024-03-29 06:36:20', '2024-03-29 06:36:20'),
(42, 'testing user', 'testing@gmail.com', NULL, '$2y$12$Xhsp1lVllYLiVJDt1s7sT.tRUfk8hm9Vn8gurCL42Sl39uzg.HkG2', 'user', '1236547890', '1', '0', '0', NULL, NULL, '2024-04-05 03:15:19', '2024-04-05 03:15:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'table', 'messages', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(2, 'root', 'table', 'logo_site', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(3, 'root', 'table', 'logo', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"allrows\":\"1\",\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@TABLE@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"xml_structure_or_data\":\"data\",\"xml_export_events\":\"something\",\"xml_export_functions\":\"something\",\"xml_export_procedures\":\"something\",\"xml_export_tables\":\"something\",\"xml_export_triggers\":\"something\",\"xml_export_views\":\"something\",\"xml_export_contents\":\"something\",\"yaml_structure_or_data\":\"data\",\"\":null,\"lock_tables\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(4, 'root', 'server', 'logo', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"logo_site\",\"phpmyadmin\",\"smaple_database\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(5, 'root', 'server', 'lo', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"logo_site\",\"phpmyadmin\",\"smaple_database\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}'),
(6, 'root', 'server', 'logo_web_site', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"logo_site\",\"phpmyadmin\",\"smaple_database\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_columns\":\"something\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_simple_view_export\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"logo_site\",\"table\":\"carts\"},{\"db\":\"logo_site\",\"table\":\"favorites\"},{\"db\":\"logo_site\",\"table\":\"users\"},{\"db\":\"logo_site\",\"table\":\"failed_jobs\"},{\"db\":\"logo_site\",\"table\":\"logos\"},{\"db\":\"smaple_database\",\"table\":\"wishlists\"},{\"db\":\"smaple_database\",\"table\":\"product_reviews\"},{\"db\":\"smaple_database\",\"table\":\"master_pages\"},{\"db\":\"smaple_database\",\"table\":\"products\"},{\"db\":\"logo_site\",\"table\":\"categories\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'test', 'messages', '{\"sorted_col\":\"`id` DESC\"}', '2024-03-27 10:46:25');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-04-05 12:56:35', '{\"lang\":\"en_GB\",\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `smaple_database`
--
CREATE DATABASE IF NOT EXISTS `smaple_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `smaple_database`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_notifications`
--

CREATE TABLE `admin_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_notifications`
--

INSERT INTO `admin_notifications` (`id`, `title`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nick', 'newuserregistered', 1, '2024-03-20 01:30:52', '2024-03-20 01:30:52'),
(2, 'test123', 'newuserregistered', 1, '2024-03-20 01:46:35', '2024-03-20 01:46:35'),
(3, 'demo', 'newdesignerregistered', 1, '2024-03-20 02:19:15', '2024-03-20 02:19:15'),
(4, 'test123', 'newuserregistered', 1, '2024-03-20 02:20:22', '2024-03-20 02:20:22'),
(5, 'nick123', 'newuserregistered', 1, '2024-03-20 02:23:06', '2024-03-20 02:23:06'),
(6, 'sam', 'newuserregistered', 1, '2024-03-20 02:24:13', '2024-03-20 02:24:13'),
(7, 'sam', 'newdesignerregistered', 1, '2024-03-20 02:25:13', '2024-03-20 02:25:13'),
(8, 'nii', 'newdesignerregistered', 1, '2024-03-20 02:40:59', '2024-03-20 02:40:59'),
(9, 'nia', 'newuserregistered', 1, '2024-03-20 02:42:30', '2024-03-20 02:42:30'),
(10, 'niaa', 'newuserregistered', 1, '2024-03-20 02:43:32', '2024-03-20 02:43:32'),
(11, 'niai', 'newdesignerregistered', 1, '2024-03-20 02:46:54', '2024-03-20 02:46:54'),
(12, 'niai', 'newuserregistered', 1, '2024-03-20 03:10:40', '2024-03-20 03:10:40'),
(13, 'niaia', 'newdesignerregistered', 1, '2024-03-20 03:12:29', '2024-03-20 03:12:29'),
(14, 'niai', 'newdesignerregistered', 1, '2024-03-20 03:14:35', '2024-03-20 03:14:35'),
(15, 'niai', 'newdesignerregistered', 1, '2024-03-20 03:15:57', '2024-03-20 03:15:57'),
(16, 'niai', 'newdesignerregistered', 1, '2024-03-20 03:17:03', '2024-03-20 03:17:03'),
(17, 'niaia', 'newdesignerregistered', 1, '2024-03-20 03:18:15', '2024-03-20 03:18:15'),
(18, 'ghg', 'newuserregistered', 1, '2024-03-20 03:19:49', '2024-03-20 03:19:49'),
(19, 'niai', 'newuserregistered', 1, '2024-03-20 06:11:50', '2024-03-20 06:11:50'),
(20, 'niaia', 'newuserregistered', 1, '2024-03-20 06:12:22', '2024-03-20 06:12:22'),
(21, 'singh', 'newuserregistered', 1, '2024-03-20 07:16:12', '2024-03-20 07:16:12'),
(22, 'singh', 'newdesignerregistered', 1, '2024-03-20 07:52:38', '2024-03-20 07:52:38'),
(23, 'nii', 'newuserregistered', 1, '2024-03-20 08:01:21', '2024-03-20 08:01:21'),
(24, 'singh', 'has added a new product', 1, '2024-03-21 03:01:31', '2024-03-21 03:01:31'),
(25, 'singh', 'has added a new product', 1, '2024-03-21 03:07:19', '2024-03-21 03:07:19'),
(26, 'singh', 'has added a new product', 1, '2024-03-21 06:35:47', '2024-03-21 06:35:47'),
(27, 'singh', 'has added a new product', 1, '2024-03-21 06:37:10', '2024-03-21 06:37:10'),
(28, 'singh', 'has added a new product', 1, '2024-03-21 07:21:00', '2024-03-21 07:21:00'),
(29, 'singh', 'has added a new product', 1, '2024-03-21 08:00:46', '2024-03-21 08:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `quantity`, `product_price`, `created_at`, `updated_at`) VALUES
(2, 6, 29, 1, 14899.00, '2024-03-21 06:16:42', '2024-03-21 06:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `parent_category_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `designer_id`, `name`, `slug`, `image`, `parent_category_id`, `created_at`, `updated_at`) VALUES
(12, 6, 'Sports', 'sports', '1711022686.jpeg', NULL, '2024-03-21 06:34:46', '2024-03-21 06:34:46'),
(13, 6, 'volleyball', 'volleyball', '1711022791.jpeg', 12, '2024-03-21 06:36:31', '2024-03-21 06:36:31'),
(14, 6, 'man', 'man-', '1711025420.webp', NULL, '2024-03-21 07:20:20', '2024-03-21 07:20:20'),
(15, 6, 'test', 'test', '1711084892.png', NULL, '2024-03-21 23:51:32', '2024-03-21 23:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) DEFAULT NULL,
  `discount` int(11) NOT NULL,
  `available_for` varchar(255) NOT NULL DEFAULT 'everyone',
  `expiry_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `designer_details`
--

CREATE TABLE `designer_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(11) NOT NULL,
  `year_experiance` int(11) DEFAULT NULL,
  `work_in` int(11) DEFAULT NULL,
  `web_url` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_details`
--

INSERT INTO `designer_details` (`id`, `designer_id`, `year_experiance`, `work_in`, `web_url`, `street`, `city`, `state`, `zip`, `country`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-20 06:53:55', '2024-03-20 06:53:55'),
(2, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-20 08:09:13', '2024-03-20 08:09:13'),
(3, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-03-21 00:26:19', '2024-03-21 00:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `designer_notifications`
--

CREATE TABLE `designer_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `designer_notifications`
--

INSERT INTO `designer_notifications` (`id`, `designer_id`, `title`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 'I Phone', ' your product has been approved by admin', 1, '2024-03-21 23:49:44', '2024-03-21 23:49:44'),
(2, 6, 'volleyball', ' your product has been approved by admin', 1, '2024-03-27 08:35:54', '2024-03-27 08:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `disapproved_designers`
--

CREATE TABLE `disapproved_designers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `disapproved_products`
--

CREATE TABLE `disapproved_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `master_pages`
--

CREATE TABLE `master_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `value` longtext DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(3, 30, '1711022747.jpeg', '2024-03-21 06:35:47', '2024-03-21 06:35:47'),
(4, 31, '1711022830.jpeg', '2024-03-21 06:37:10', '2024-03-21 06:37:10'),
(6, 33, '1711027846.webp', '2024-03-21 08:00:46', '2024-03-21 08:00:46');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_15_112956_create_categories_table', 1),
(6, '2023_11_16_065345_create_products_table', 1),
(7, '2023_11_16_065433_create_media_table', 1),
(8, '2023_11_20_071004_create_disapproved_designers_table', 1),
(9, '2023_11_20_071500_create_disapprovedproducts_table', 1),
(10, '2023_11_20_101429_create_admin_notifications_table', 1),
(11, '2023_11_20_101441_create_designer_notifications_table', 1),
(12, '2023_11_20_101450_create_user_notifications_table', 1),
(13, '2023_11_20_120318_create_user_images_table', 1),
(14, '2023_11_21_095444_create_designer_details_table', 1),
(15, '2023_11_22_115114_create_wishlists_table', 1),
(16, '2023_11_23_061954_create_carts_table', 1),
(17, '2023_11_30_115450_create_subscriptions_table', 1),
(18, '2023_12_05_074621_create_product_reviews_table', 1),
(19, '2023_12_11_053155_create_subscription_plans_table', 1),
(20, '2023_12_18_074212_create_master_pages_table', 1),
(21, '2024_01_09_134047_create_coupons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `designer_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `categories_id` int(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `is_disapproved` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `designer_id`, `name`, `slug`, `categories_id`, `price`, `stock`, `description`, `is_approved`, `is_disapproved`, `status`, `created_at`, `updated_at`) VALUES
(30, 6, 'Cricket bat', 'cricket-bat', 12, '6999', '2', 'Cricket Bat stock photos, pictures and royalty-free images from iStock. Find high-quality stock photos that you', 0, 0, 1, '2024-03-21 06:35:47', '2024-03-21 07:51:37'),
(31, 6, 'volleyball', 'volleyball', 13, '499', '5', 'Cricket Bat stock photos, pictures and royalty-free images from iStock. Find high-quality stock photos that you', 1, 0, 1, '2024-03-21 06:37:10', '2024-03-27 08:35:54'),
(33, 6, 'I Phone', 'i-phone', 14, '18555', '5', 'mobile phone', 1, 0, 1, '2024-03-21 08:00:46', '2024-03-21 23:49:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL,
  `billing_cycle` varchar(255) NOT NULL,
  `stripe_subscription_id` varchar(255) NOT NULL,
  `payment_method` varchar(255) DEFAULT NULL,
  `payment_status` varchar(255) NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `auto_renewal` int(11) NOT NULL DEFAULT 0,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

CREATE TABLE `subscription_plans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sub_type` varchar(255) DEFAULT NULL,
  `recurring_time` varchar(255) DEFAULT NULL,
  `sub_price` decimal(8,2) NOT NULL,
  `discount` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `is_approved` int(11) NOT NULL DEFAULT 0,
  `is_disapproved` int(11) NOT NULL DEFAULT 0,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `stripe_customer_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `is_approved`, `is_disapproved`, `email`, `number`, `email_verified_at`, `password`, `stripe_customer_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Neeraj bisht', 'admin', 0, 0, 'bisht03@gmail.com', '4423422421', NULL, '$2y$12$9tr1T84NhJFMubtF/J76COcHtm5tWjj/4MfIVvFy4FWf7WnskkYAe', NULL, 'zGaAQ1V72YQeUUqAeyKZDboiwRwSKwyDGmPQAvTJsXrrehiwosqSCPhTfY5C', '2023-11-19 23:44:52', '2023-11-19 23:44:52'),
(6, 'singh', 'designer', 1, 0, 'singh@gmail.com', '1478520369', NULL, '$2y$12$eyxY1k6DZ3aLG.i1y7veQuqsgYnYTcG6fXn8tHk1UhTgRtgtCeNrm', NULL, NULL, '2024-03-20 07:52:38', '2024-03-20 07:52:38'),
(7, 'nii', 'user', 1, 0, 'nii@gmail.com', '1452369871', NULL, '$2y$12$OdCFiSN4dJaQ3BQbJ/xKW.d51P27jcW1fYFy5wkIyyOgEHqB6rH12', NULL, 'JvoItTC926bLIg4TWNuiTciUFr2O6A8GolPjn5tWSU2scGSRFWKJkKprZWgf', '2024-03-20 08:01:21', '2024-03-20 08:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_images`
--

CREATE TABLE `user_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `profile_image`, `created_at`, `updated_at`) VALUES
(1, 1, '1710937541.jpeg', '2024-03-20 06:53:55', '2024-03-20 06:55:41'),
(2, 7, '1710941953.jpeg', '2024-03-20 08:09:13', '2024-03-20 08:09:13'),
(3, 6, '1711000579.jpeg', '2024-03-21 00:26:19', '2024-03-21 00:26:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_notifications`
--

CREATE TABLE `user_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_details`
--
ALTER TABLE `designer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designer_notifications`
--
ALTER TABLE `designer_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disapproved_designers`
--
ALTER TABLE `disapproved_designers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disapproved_products`
--
ALTER TABLE `disapproved_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `master_pages`
--
ALTER TABLE `master_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_images`
--
ALTER TABLE `user_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_notifications`
--
ALTER TABLE `user_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_notifications`
--
ALTER TABLE `admin_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designer_details`
--
ALTER TABLE `designer_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designer_notifications`
--
ALTER TABLE `designer_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `disapproved_designers`
--
ALTER TABLE `disapproved_designers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disapproved_products`
--
ALTER TABLE `disapproved_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `master_pages`
--
ALTER TABLE `master_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscription_plans`
--
ALTER TABLE `subscription_plans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_images`
--
ALTER TABLE `user_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_notifications`
--
ALTER TABLE `user_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `reciever_id` int(11) NOT NULL,
  `message` text DEFAULT NULL,
  `files` varchar(255) DEFAULT NULL,
  `seen_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `reciever_id`, `message`, `files`, `seen_status`, `created_at`, `updated_at`) VALUES
(363, 3, 7, 'Hello user sag how are you ?', '[]', 1, '2024-01-11 18:57:02', '2024-01-24 19:24:57'),
(364, 7, 3, 'I am fine thankyou how are you ?', '[]', 1, '2024-01-11 18:57:48', '2024-02-07 09:07:05'),
(365, 3, 7, 'i am also fine', '[]', 1, '2024-01-11 18:58:02', '2024-01-24 19:24:57'),
(366, 4, 3, '<ul> \n                                <li><strong>Request: </strong> FAVICON</li> \n                                <li><strong>Wordmark: </strong> Customer buy a new logo with favicon</li>\n                                <li><strong>Tagline: </strong> </li><li><strong>Colors :</strong> </li>\n                                <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                            </ul>', NULL, 1, '2024-01-12 13:30:49', '2024-02-07 09:10:03'),
(367, 4, 3, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Sagmetic</li>\n                            <li><strong>Tagline: </strong> test</li><li><strong>Colors :</strong> #a62626,#854c4c,#380f0f</li>\n                            <li><strong>Revision request: </strong> change it</li>\n                        </ul>', NULL, 1, '2024-01-12 13:54:47', '2024-02-07 09:10:03'),
(368, 7, 3, 'Okay so at what time i will get my favicon ?', '[]', 1, '2024-01-12 18:03:34', '2024-02-07 09:07:05'),
(369, 7, 3, 'Hello', '[]', 1, '2024-01-12 18:05:30', '2024-02-07 09:07:05'),
(370, 7, 3, 'Hello testing..', '[]', 1, '2024-01-12 18:07:35', '2024-02-07 09:07:05'),
(371, 7, 3, 'test again ..', '[]', 1, '2024-01-12 18:08:31', '2024-02-07 09:07:05'),
(372, 7, 3, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Tagline: </strong> Test</li>\n                            <li><strong>Wordmark: </strong> sag</li><li><strong>File :</strong> <a href=\"https://logomax.com/public/revision_files/file1705561014.jpg\">view</a></li><li><strong>Colors :</strong> #ff0707</li>\n                            <li><strong>Revision request: </strong> Testing purpose .</li>\n                        </ul>', NULL, 1, '2024-01-18 12:56:54', '2024-02-07 09:07:05'),
(373, 4, 3, 'Request for : LOGO Company name : Sagmetic Subtitle title : test Colors : #a62626,#854c4c,#380f0f Change description : change it Customer name : client 1 Customer email : <a href=\"mailto:client1@gmail.com\">client1@gmail.com</a>', '[]', 1, '2024-01-24 12:36:16', '2024-02-07 09:10:03'),
(374, 4, 3, 'Request for : LOGO Company name : Sagmetic Subtitle title : test Colors : #a62626,#854c4c,#380f0f Change description : change it Customer name : client 1 Customer email : <a href=\"mailto:client1@gmail.com\">client1@gmail.com</a>', '[]', 1, '2024-01-24 12:36:25', '2024-02-07 09:10:03'),
(375, 4, 3, 'Request for : LOGO Company name : Sagmetic Subtitle title : test Colors : #a62626,#854c4c,#380f0f Change description : change it Customer name : client 1 Customer email : <a href=\"mailto:client1@gmail.com\">client1@gmail.com</a>', '[]', 1, '2024-01-24 12:36:33', '2024-02-07 09:10:03'),
(376, 3, 4, 'Request for : LOGO Company name : Sagmetic Subtitle title : test Colors : #a62626,#854c4c,#380f0f Change description : change it Customer name : client 1 Customer email : <a href=\"mailto:client1@gmail.com\">client1@gmail.com</a>', '[]', 1, '2024-01-24 13:20:55', '2024-01-24 19:58:35'),
(377, 3, 4, 'Request for : LOGO Company name : Sagmetic Subtitle title : test Colors : #a62626,#854c4c,#380f0f Change description : change it Customer name : client 1 Customer email : <a href=\"mailto:client1@gmail.com\">client1@gmail.com</a>', '[]', 1, '2024-01-24 14:49:48', '2024-01-24 19:58:35'),
(380, 4, 3, 'done', '[]', 1, '2024-01-25 20:03:25', '2024-02-07 09:10:03'),
(381, 7, 3, 'dgggggj', '[]', 1, '2024-01-29 16:02:18', '2024-02-07 09:07:05'),
(382, 7, 3, 'hello', '[]', 1, '2024-01-29 16:02:24', '2024-02-07 09:07:05'),
(383, 7, 3, NULL, '[\"Logomax 2024 Changes (13) (1).pdf\",\"wp.png\",\"Logomax 2024 Changes (13) (1).pdf\",\"Logomax 2024 Changes (13) (1).pdf\",\"Wordpress.png\"]', 1, '2024-01-29 17:42:48', '2024-02-07 09:07:05'),
(384, 7, 3, 'asdasdasdas', '[]', 1, '2024-02-07 02:18:53', '2024-02-07 09:07:05'),
(385, 7, 3, 'asdasdasd', '[]', 1, '2024-02-07 02:18:56', '2024-02-07 09:07:05'),
(386, 7, 3, 'dssdddd', '[]', 1, '2024-02-07 02:18:59', '2024-02-07 09:07:05'),
(387, 7, 5, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 0, '2024-02-08 18:01:33', '2024-02-08 18:01:33'),
(388, 7, 6, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 0, '2024-02-09 17:07:20', '2024-02-09 17:07:20'),
(389, 7, 5, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 0, '2024-02-09 20:02:59', '2024-02-09 20:02:59'),
(390, 9, 6, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 0, '2024-02-12 11:41:07', '2024-02-12 11:41:07'),
(391, 9, 3, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 1, '2024-02-12 14:08:26', '2024-02-12 14:31:07'),
(392, 3, 9, 'Hello customer how are you ?', '[]', 1, '2024-02-12 14:12:24', '2024-02-12 14:16:55'),
(393, 9, 3, 'i am fine how are you?', '[]', 1, '2024-02-12 14:12:40', '2024-02-12 14:31:07'),
(394, 9, 3, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Tagline: </strong> Sagmetic</li>\n                            <li><strong>Wordmark: </strong> change color and text of the logo</li><li><strong>File :</strong> <a href=\"https://logomax.com/public/revision_files/file1707726141.jpg\">view</a></li><li><strong>Colors :</strong> #e11111,#000000</li>\n                            <li><strong>Revision request: </strong> Please make my logo like this .</li>\n                        </ul>', NULL, 1, '2024-02-12 14:22:21', '2024-02-12 14:31:07'),
(395, 13, 3, 'cxd          Request for : FAVICON                         Company name : Customer buy a new logo with favicon                        Subtitle title : Colors :                         Change description : Customer buy a new logo please provide him a favicon of this .                        Customer name : Demo Demo                        Customer email : <a href=\"mailto:demo@gmail.com\">demo@gmail.com</a>', NULL, 1, '2024-02-13 18:52:25', '2024-02-16 15:58:58'),
(396, 13, 3, 'Hi', '[]', 1, '2024-02-13 18:58:45', '2024-02-13 19:05:51'),
(397, 13, 3, 'When it is done?', '[]', 1, '2024-02-13 19:00:05', '2024-02-13 19:05:51'),
(398, 3, 13, 'We will  complete it as soon as possible.', '[]', 1, '2024-02-13 19:02:03', '2024-02-19 13:10:30'),
(399, 13, 3, 'ok', '[]', 1, '2024-02-13 19:02:28', '2024-02-13 19:05:51'),
(400, 13, 3, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 0, '2024-02-15 12:54:13', '2024-02-15 12:54:13'),
(401, 13, 3, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Tagline: </strong> Sagmetic</li>\n                            <li><strong>Wordmark: </strong> Change color</li><li><strong>File :</strong> <a href=\"https://logomax.com/public/revision_files/file1707998293.png\">view</a></li><li><strong>Colors: </strong> #e30000,#000000</li>\n                            <li><strong>Revision request: </strong> testing</li>\n                        </ul>', NULL, 0, '2024-02-15 17:58:13', '2024-02-15 17:58:13'),
(402, 13, 3, 'ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Tagline: </strong> Sagmetic</li>\n                            <li><strong>Wordmark: </strong> Change color</li><li><strong>File :</strong> <a href=\"https://logomax.com/public/revision_files/file1707998295.png\">view</a></li><li><strong>Colors: </strong> #e30000,#000000</li>\n                            <li><strong>Revision request: </strong> testing</li>\n                        </ul>', NULL, 0, '2024-02-15 17:58:15', '2024-02-15 17:58:15'),
(403, 13, 5, 'ftyufutyfyf                       Request for : FAVICON                         Company name : Customer buy a new logo with favicon                        Subtitle title : Colors :                         Change description : Customer buy a new logo please provide him a favicon of this .                        Customer name : Demo Demo                        Customer email : <a href=\"mailto:demo@gmail.com\">demo@gmail.com</a>', NULL, 1, '2024-02-16 13:32:12', '2024-03-08 12:47:02'),
(404, 13, 5, 'dgggggj', '[]', 1, '2024-02-16 16:00:28', '2024-03-08 12:47:02'),
(405, 13, 5, 'uihuihoh', '[]', 1, '2024-02-16 16:00:42', '2024-03-08 12:47:02'),
(406, 13, 5, 'hello', '[]', 1, '2024-02-16 19:34:27', '2024-03-08 12:47:02'),
(407, 13, 15, '<ul> \n                        <li><strong>Request:</strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 1, '2024-02-19 13:17:19', '2024-03-27 13:47:18'),
(408, 13, 5, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Tagline: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Wordmark: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 1, '2024-02-19 13:18:55', '2024-03-08 12:47:02'),
(409, 13, 15, 'Hi when can you complwtw mty logio', '[]', 1, '2024-02-19 13:24:03', '2024-03-27 13:47:18'),
(410, 15, 13, 'Ok we are adding it to your profile man.', '[]', 1, '2024-02-19 13:24:53', '2024-03-19 04:56:06'),
(411, 13, 15, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Sagmetic</li>\n                            <li><strong>Tagline: </strong> test</li><li><strong>Colors :</strong> #613b3b,#613b3b,#613b3b,#613b3b,#613b3b</li>\n                            <li><strong>Revision request: </strong> fdghfghfghnfghnghgfvh</li>\n                        </ul>\n', NULL, 1, '2024-02-21 16:25:34', '2024-03-27 13:47:18'),
(412, 17, 6, 'Request for : FAVICON                         Company name : Customer buy a new logo with favicon                        Subtitle title : Colors :                         Change description : Customer buy a new logo please provide him a favicon of this .                        Customer name : Demo 1 Demo 1                        Customer email : <a href=\"mailto:demo1@gmail.com\">demo1@gmail.com</a>', NULL, 1, '2024-02-21 17:28:44', '2024-03-11 15:26:13'),
(413, 17, 6, 'Hi', '[]', 1, '2024-02-27 08:45:00', '2024-03-08 17:35:12'),
(414, 17, 6, 'Do work', '[]', 1, '2024-02-27 08:46:08', '2024-03-11 15:19:29'),
(415, 18, 15, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Wordmark: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Tagline: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 1, '2024-02-27 13:39:06', '2024-03-27 13:17:54'),
(416, 18, 15, 'Hi how are you?', '[]', 1, '2024-02-27 19:44:03', '2024-03-27 13:17:54'),
(417, 18, 15, 'When will you complete my work brother ?', '[]', 1, '2024-02-27 19:44:17', '2024-03-27 13:17:54'),
(418, 18, 15, 'The klndfjskldsf kdjfhsdkljifhkljdfs jkhkjhdsf kjfgdkljfgdkfdg kjhhkkh nbjhjfdgjhfgds', '[]', 1, '2024-02-28 16:12:16', '2024-03-27 13:17:54'),
(419, 18, 15, 'this isbdskjnhdsf kjhgkljnfdsg kjnkljhjfdg kihriyuter  fdgkjjfdgjfdg', '[]', 1, '2024-02-28 16:12:27', '2024-03-27 13:17:54'),
(420, 22, 5, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Sagmetic</li>\n                            <li><strong>Tagline: </strong> test</li><li><strong>Colors :</strong> #a42b2b,#4f2ba4,#8a60ea,#b2b1b4,#5e449b</li>\n                            <li><strong>Revision request: </strong> this is just testing</li>\n                        </ul>', NULL, 1, '2024-03-08 12:17:45', '2024-03-08 13:36:31'),
(421, 19, 6, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Sagmetic</li>\n                            <li><strong>Tagline: </strong> Infotech</li><li><strong>Revision request: </strong> This is the testing logo 2 eps files was uploaded now we are testing the functions of this.</li>\n                        </ul>', NULL, 1, '2024-03-08 17:30:30', '2024-03-26 00:17:49'),
(422, 19, 6, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Sagmetic</li>\n                            <li><strong>Tagline: </strong> Infotech</li><li><strong>Revision reques: </strong> This is the testing logo 2 eps files was uploaded now we are testing the functions of this.</li>\n                        </ul>', NULL, 1, '2024-03-08 17:35:31', '2024-03-26 00:17:49'),
(423, 17, 6, 'Do work', '[]', 0, '2024-03-11 15:30:34', '2024-03-11 15:30:34'),
(424, 19, 6, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Sagmetic</li>\n                            <li><strong>Tagline: </strong> Infotech</li><li><strong>File :</strong> <a href=\"https://logomax.com/public/revision_files/file1711010961.png\">view</a></li><li><strong>Revision reques: </strong> I have uploaded the Image in this also please check the concept now. What\'s going on the backend.</li>\n                        </ul>', NULL, 1, '2024-03-21 13:49:21', '2024-03-26 00:17:49'),
(425, 19, 6, '<ul> \n                            <li><strong>Request: </strong> Logo Vector </li> <li><strong>File: </strong> <a href=\"https://logomax.com/public/LogoDirectory/Favicon_17110218225/Favicon_17110218225.png\">view</a></li><li><strong>Revision request: </strong> User has selected the above image and request the vector version of the below image.</li>\n                        </ul>', NULL, 1, '2024-03-22 12:29:05', '2024-03-26 00:17:49'),
(426, 39, 6, '<ul> \n                            <li><strong>Request: </strong> LOGO</li> \n                            <li><strong>Wordmark: </strong> Test</li>\n                            <li><strong>Tagline: </strong> Test</li><li><strong>Revision request: </strong> This is the testing logo to check the flow of the communication.</li>\n                        </ul>', NULL, 1, '2024-03-22 16:18:16', '2024-03-27 14:48:09'),
(427, 39, 6, '<ul> \n                            <li><strong>Request: </strong> Upload Logo Vector </li> <li><strong>File: </strong> <a href=\"https://logomax.com/public/LogoDirectory/Favicon_171110708263/Favicon_171110708263.png\">view</a></li><li><strong>Revision request: </strong> User has selected the above image and requested for the vector version of the above image.</li>                         \n                        </ul>', NULL, 1, '2024-03-22 16:44:14', '2024-03-27 14:48:09'),
(428, 39, 6, '<ul> \n                            <li><strong>Request: </strong> Upload Logo Vector </li> <li><strong>File: </strong> <a href=\"https://logomax.com/public/LogoDirectory/Favicon_171111253540/171111253553Favicon_171111253540.png\">view</a></li><li><strong>Revision request: </strong> User has selected the above image and requested for the vector version of the above image.</li>                       \n                        </ul>', NULL, 1, '2024-03-22 18:02:31', '2024-03-27 14:48:09'),
(429, 13, 15, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Wordmark: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Tagline: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 1, '2024-03-26 10:23:30', '2024-03-27 13:47:18'),
(430, 13, 3, '<ul> \n                        <li><strong>Request: </strong> FAVICON</li> \n                        <li><strong>Wordmark: </strong> Customer buy a new logo with favicon</li>\n                        <li><strong>Tagline: </strong> </li><li><strong>Colors :</strong> </li>\n                        <li><strong>Revision request: </strong> Customer buy a new logo please provide him a favicon of this .</li>\n                    </ul>', NULL, 0, '2024-03-26 10:33:26', '2024-03-26 10:33:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=431;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
