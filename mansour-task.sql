-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2022 at 07:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mansour-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_desc`, `created_at`, `updated_at`) VALUES
(1, 'api category_desc', '2022-07-27 21:57:09', '2022-07-27 22:04:07');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_seq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_seq`, `created_at`, `updated_at`) VALUES
(1, 'api company_name', 'api company_seq', '2022-07-27 22:13:37', '2022-07-27 22:13:37');

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
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `family_seq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `family_seq`, `created_at`, `updated_at`) VALUES
(1, 'api family_seq', '2022-07-28 08:26:10', '2022-07-28 08:26:10');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_27_155849_create_companies_table', 2),
(6, '2022_07_27_155924_create_categories_table', 2),
(7, '2022_07_27_155946_create_pos_table', 2),
(8, '2022_07_27_160006_create_salesreps_table', 2),
(9, '2022_07_27_160020_create_salesters_table', 2),
(10, '2022_07_27_160037_create_routes_table', 2),
(11, '2022_07_27_160055_create_families_table', 2),
(12, '2022_07_27_160116_create_prods_table', 2),
(13, '2022_07_27_160120_create_sales_table', 2),
(14, '2022_07_27_163353_foreign_keys', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pos_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pos`
--

INSERT INTO `pos` (`id`, `pos_name`, `pos_code`, `created_at`, `updated_at`) VALUES
(1, 'api pos_name', 'api pos_code', '2022-07-27 22:54:06', '2022-07-27 22:54:06');

-- --------------------------------------------------------

--
-- Table structure for table `prods`
--

CREATE TABLE `prods` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `prod_family` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prod_seq` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prods`
--

INSERT INTO `prods` (`id`, `prod_family`, `prod_seq`, `product`, `created_at`, `updated_at`) VALUES
(1, 'api prod_family', 'api prod_seq', 'api product', '2022-07-28 08:37:39', '2022-07-28 08:37:39'),
(3, 'api prod_family 2', 'api prod_seq 2', 'api product 2', '2022-07-28 08:53:48', '2022-07-28 08:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `route_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_type`, `created_at`, `updated_at`) VALUES
(1, 'api route_type', '2022-07-28 08:04:26', '2022-07-28 08:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jou_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salescall_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `ter_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos_id` bigint(20) UNSIGNED NOT NULL,
  `temp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salesrep_id` bigint(20) UNSIGNED NOT NULL,
  `salester_id` bigint(20) UNSIGNED NOT NULL,
  `route_id` bigint(20) UNSIGNED NOT NULL,
  `day` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_start_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit_end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `call_status_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_id` bigint(20) UNSIGNED NOT NULL,
  `prod_id` bigint(20) UNSIGNED NOT NULL,
  `sales_car` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `jou_id`, `salescall_id`, `region`, `branch_code`, `company_id`, `category_id`, `ter_id`, `pos_id`, `temp`, `salesrep_id`, `salester_id`, `route_id`, `day`, `visit_start_time`, `visit_end_time`, `call_status_id`, `family_id`, `prod_id`, `sales_car`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'api jou_id', '1', 'api region', 'api branch_code', 1, 1, '1', 1, 'api temp', 1, 1, 1, 'api day', 'api visit_start_time', 'api visit_end_time', '1', 1, 1, 'api sales_car', 'api stock', '2022-07-28 09:02:23', '2022-07-28 09:02:23'),
(3, 'ssasas', 'Consequuntur ipsum a', 'Omnis dolor elit in', 'Hic at consectetur d', 1, 1, 'Quis non ipsa non s', 1, 'Voluptatem anim aute', 1, 1, 1, '2020-12-03', '18:52', '22:27', 'Reprehenderit Nam q', 1, 1, 'Facere quo assumenda', 'Tempor id ad commod', '2022-07-28 12:19:53', '2022-07-28 13:29:41'),
(5, 'Cupidatat reprehende', 'Repellendus Omnis v', 'Aut sint nobis quia', 'At assumenda commodi', 1, 1, 'Anim ad sit aliquid', 1, 'Dolores quaerat sit', 1, 1, 1, '2008-04-04', '12:37', '12:35', 'Quam qui id duis rer', 1, 1, 'Pariatur Molestias', 'Aut dolor quia volup', '2022-07-28 13:34:51', '2022-07-28 13:34:51'),
(6, 'Labore qui consequat', 'Cum iusto excepturi', 'Adipisicing dolore a', 'Amet ipsum doloremq', 1, 1, 'Tempor ipsa accusam', 1, 'Odio voluptatem repu', 1, 1, 1, '2004-02-06', '07:18', '09:05', 'Iste distinctio Vel', 1, 1, 'Anim possimus possi', 'Placeat dolorem rep', '2022-07-28 13:34:59', '2022-07-28 13:34:59'),
(7, 'Nemo voluptatum aliq', 'Sequi ut aut volupta', 'Quia quis aut magnam', 'Accusantium ipsum t', 1, 1, 'Aut harum neque repe', 1, 'Minima dolorum nisi', 1, 1, 1, '2014-06-17', '01:15', '09:27', 'Numquam quae archite', 1, 1, 'Pariatur Quasi culp', 'Dolor consequatur vo', '2022-07-28 13:35:07', '2022-07-28 13:35:07'),
(8, 'Molestiae illum Nam', 'Et proident enim et', 'Dicta corporis conse', 'Irure nisi in invent', 1, 1, 'Incididunt est sint', 1, 'Eum optio et except', 1, 1, 1, '1984-10-15', '01:35', '12:00', 'Obcaecati dolorum sa', 1, 3, 'Quam voluptates pers', 'Quo proident sunt m', '2022-07-28 13:35:19', '2022-07-28 13:35:19'),
(9, 'Error iste quaerat e', 'In expedita deleniti', 'Dolor placeat fugia', 'Dolore ullam cum qua', 1, 1, 'Veritatis ut est opt', 1, 'Molestiae ab id quo', 1, 1, 1, '2017-12-14', '07:46', '14:45', 'Laborum omnis volupt', 1, 3, 'Dolore ut obcaecati', 'Ipsam quae optio op', '2022-07-28 14:32:44', '2022-07-28 14:32:44'),
(10, 'Irure perferendis cu', 'Eu aute laboriosam', 'Velit sed dolores f', 'Esse consequat Dui', 1, 1, 'Modi quod qui dolor', 1, 'Aut tenetur expedita', 1, 1, 1, '2003-08-02', '02:49', '01:00', 'Fugiat maxime dolor', 1, 3, 'In dolore expedita i', 'Expedita architecto', '2022-07-28 14:33:44', '2022-07-28 14:33:44'),
(11, 'Veniam est aut iust', 'Dolor voluptatem acc', 'Magni minima sit nos', 'Perspiciatis eius c', 1, 1, 'Ut veniam tenetur n', 1, 'Magnam debitis cupid', 1, 1, 1, '2022-09-27', '11:46', '02:41', 'Eu labore in magnam', 1, 1, 'Nisi animi harum in', 'Cupidatat inventore', '2022-07-28 14:33:54', '2022-07-28 14:33:54'),
(12, 'Blanditiis nisi quas', 'Est anim voluptatem', 'Optio ex quis deser', 'Pariatur Ut magnam', 1, 1, 'Debitis omnis est i', 1, 'Duis qui incididunt', 1, 1, 1, '1972-04-23', '08:52', '07:25', 'Dolor tempore quam', 1, 1, 'Aut omnis sequi quos', 'Iste sint exercitat', '2022-07-28 14:34:02', '2022-07-28 14:34:02'),
(13, 'Vel commodi voluptas', 'Facere ducimus mole', 'Labore sint volupta', 'A id id laudantium', 1, 1, 'Labore sunt qui impe', 1, 'Magnam eligendi dolo', 1, 1, 1, '1984-12-03', '09:45', '23:44', 'Impedit ut debitis', 1, 3, 'Enim consequatur est', 'Est placeat et aspe', '2022-07-28 14:34:28', '2022-07-28 14:34:28'),
(14, 'Nisi non ut sapiente', 'Distinctio Deserunt', 'Voluptas beatae beat', 'Tenetur veniam eos', 1, 1, 'Fugiat enim vero sus', 1, 'Ut esse tenetur dele', 1, 1, 1, '1997-05-04', '04:28', '19:33', 'Perspiciatis eu eos', 1, 3, 'Excepteur possimus', 'Maiores voluptas eum', '2022-07-28 14:35:02', '2022-07-28 14:35:02');

-- --------------------------------------------------------

--
-- Table structure for table `salesreps`
--

CREATE TABLE `salesreps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salesrep_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesreps`
--

INSERT INTO `salesreps` (`id`, `salesrep_name`, `created_at`, `updated_at`) VALUES
(1, 'api salesrep_name', '2022-07-27 23:06:34', '2022-07-27 23:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `salesters`
--

CREATE TABLE `salesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `salester_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesters`
--

INSERT INTO `salesters` (`id`, `salester_name`, `created_at`, `updated_at`) VALUES
(1, 'api salester_name', '2022-07-27 23:16:40', '2022-07-27 23:17:56');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmed Nabil', 'ahmednassag@gmail.com', NULL, '$2y$10$O6ZEcJdOy.om9sMhDKBA4.DBfeuT16cK4I9bvpEvk7LpTw07lZnFC', NULL, '2022-07-27 12:29:29', '2022-07-27 12:29:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prods`
--
ALTER TABLE `prods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sales_company_id_foreign` (`company_id`),
  ADD KEY `sales_category_id_foreign` (`category_id`),
  ADD KEY `sales_pos_id_foreign` (`pos_id`),
  ADD KEY `sales_salesrep_id_foreign` (`salesrep_id`),
  ADD KEY `sales_salester_id_foreign` (`salester_id`),
  ADD KEY `sales_route_id_foreign` (`route_id`),
  ADD KEY `sales_family_id_foreign` (`family_id`),
  ADD KEY `sales_prod_id_foreign` (`prod_id`);

--
-- Indexes for table `salesreps`
--
ALTER TABLE `salesreps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salesters`
--
ALTER TABLE `salesters`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `prods`
--
ALTER TABLE `prods`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `salesreps`
--
ALTER TABLE `salesreps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salesters`
--
ALTER TABLE `salesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_family_id_foreign` FOREIGN KEY (`family_id`) REFERENCES `families` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_pos_id_foreign` FOREIGN KEY (`pos_id`) REFERENCES `pos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_prod_id_foreign` FOREIGN KEY (`prod_id`) REFERENCES `prods` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_route_id_foreign` FOREIGN KEY (`route_id`) REFERENCES `routes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_salesrep_id_foreign` FOREIGN KEY (`salesrep_id`) REFERENCES `salesreps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_salester_id_foreign` FOREIGN KEY (`salester_id`) REFERENCES `salesters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
