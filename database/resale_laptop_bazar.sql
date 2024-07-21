-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2024 at 08:03 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resale_laptop_bazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', '2024-06-21 03:15:31', '2024-06-21 03:15:31'),
(2, 'Accessories', '2024-06-21 03:15:31', '2024-06-21 03:15:31'),
(3, 'Software', '2024-06-21 03:15:31', '2024-06-21 03:15:31');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laptops`
--

CREATE TABLE `laptops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `ram` int(11) NOT NULL,
  `storage` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_06_21_031506_create_laptops_table', 1),
(5, '2024_06_21_072245_create_categories_table', 1),
(6, '2024_06_21_072250_create_products_table', 1),
(7, '2024_06_21_072255_create_orders_table', 1),
(8, '2024_06_21_072304_create_order_items_table', 1),
(9, '2024_06_22_024551_create_carts_table', 2),
(10, '2024_06_22_055149_add_is_admin_to_users_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 433.00, 'completed', '2024-06-21 12:20:00', '2024-06-22 04:18:29'),
(2, 1, 42000.00, 'pending', '2024-06-21 12:20:22', '2024-06-21 12:20:22'),
(3, 1, 42000.00, 'pending', '2024-06-21 21:47:41', '2024-06-21 21:47:41'),
(4, 1, 433.00, 'pending', '2024-06-21 21:48:10', '2024-06-21 21:48:10'),
(5, 1, 84866.00, 'pending', '2024-06-21 22:27:19', '2024-06-21 22:27:19'),
(6, 1, 42000.00, 'pending', '2024-06-21 22:36:06', '2024-06-21 22:36:06'),
(7, 1, 82000.00, 'pending', '2024-06-21 22:54:58', '2024-06-21 22:54:58'),
(8, 1, 736.00, 'completed', '2024-06-21 23:12:40', '2024-06-22 06:34:27'),
(9, 1, 42000.00, 'pending', '2024-06-22 01:07:53', '2024-06-22 01:07:53'),
(10, 1, 115000.00, 'pending', '2024-06-22 02:41:09', '2024-06-22 02:41:09'),
(11, 2, 42000.00, 'pending', '2024-06-22 02:47:41', '2024-06-22 02:47:41'),
(12, 1, 115000.00, 'pending', '2024-06-22 05:33:27', '2024-06-22 05:33:27'),
(13, 1, 115000.00, 'pending', '2024-06-22 06:32:36', '2024-06-22 06:32:36'),
(14, 1, 75000.00, 'pending', '2024-06-22 09:10:36', '2024-06-22 09:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(2, 2, 2, 1, 42000.00, '2024-06-21 12:20:22', '2024-06-21 12:20:22'),
(3, 3, 2, 1, 42000.00, '2024-06-21 21:47:41', '2024-06-21 21:47:41'),
(6, 5, 2, 2, 42000.00, '2024-06-21 22:27:19', '2024-06-21 22:27:19'),
(7, 6, 2, 1, 42000.00, '2024-06-21 22:36:06', '2024-06-21 22:36:06'),
(9, 8, 1, 1, 736.00, '2024-06-21 23:12:40', '2024-06-21 23:12:40'),
(10, 9, 2, 1, 42000.00, '2024-06-22 01:07:53', '2024-06-22 01:07:53'),
(11, 10, 14, 1, 115000.00, '2024-06-22 02:41:09', '2024-06-22 02:41:09'),
(12, 11, 2, 1, 42000.00, '2024-06-22 02:47:41', '2024-06-22 02:47:41'),
(13, 12, 14, 1, 115000.00, '2024-06-22 05:33:27', '2024-06-22 05:33:27'),
(14, 13, 14, 1, 115000.00, '2024-06-22 06:32:36', '2024-06-22 06:32:36'),
(15, 14, 13, 1, 75000.00, '2024-06-22 09:10:36', '2024-06-22 09:10:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('marshadcs20@gmail.com', '$2y$12$o6WfDpX2e5f7KUpCLZJKjO5yODTQcVx9qirRRIJAuctIKV.T6SB1y', '2024-06-22 06:14:05');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `original_price` decimal(8,2) NOT NULL,
  `resale_price` decimal(8,2) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `condition` varchar(255) NOT NULL,
  `purchase_year` year(4) NOT NULL,
  `seller_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `category_id`, `image_url`, `description`, `original_price`, `resale_price`, `brand`, `model`, `condition`, `purchase_year`, `seller_name`, `created_at`, `updated_at`) VALUES
(1, 'Dell Latitude', 1, 'https://m.media-amazon.com/images/I/31eHrGoFNRL._SX300_SY300_QL70_FMwebp_.jpg', 'Awesome experience, smart style', 72100.00, 73600.00, 'Dell', '7450', 'Good', '2023', 'Sadam', '2024-06-21 03:15:53', '2024-06-22 06:33:42'),
(2, 'Dell notebook', 1, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbEkZHonygfe8BcyJhqj7wMcSf7mnEcSQNog&s', 'Execellent', 49999.00, 42000.00, 'Dell', '7450', 'Cool', '2024', 'Arshad', '2024-06-21 03:48:25', '2024-06-21 03:48:25'),
(4, 'Lenovo', 1, 'https://m.media-amazon.com/images/I/61+r3+JstZL.jpg', 'Id ullamco voluptate', 62400.00, 65700.00, 'lenovo', 'Eum minima eligendi', 'good', '2003', 'Xaviera Peck', '2024-06-21 03:55:16', '2024-06-22 04:17:49'),
(6, 'HP PrimeBook', 1, 'https://media.product.which.co.uk/prod/images/original/22a475e555d7-best-laptop-deals.jpg', 'Recommended for students and professionals with slim shape', 90000.00, 85000.00, 'HP', '8190', 'Excellent', '2024', 'Arshad', '2024-06-22 02:08:53', '2024-06-22 02:08:53'),
(7, 'Lenovo SmartBook', 1, 'https://media.product.which.co.uk/prod/images/article_image_960px/5bc32e0f95eb-lenovo-ideapad-slim-3i-14-inch-chromebook-plus.jpeg', 'Having fast and efficient processor with slim shape', 70000.00, 80000.00, 'Lenovo', '6170', 'Good', '2023', 'Shakeel', '2024-06-22 02:12:50', '2024-06-22 02:12:50'),
(9, 'Acer EliteBook', 1, 'https://media.product.which.co.uk/prod/images/article_image_960px/8122bd3fd109-acer-swift-edge-16-inch.jpg', 'Great quality, Excellent performance', 65000.00, 64000.00, 'Acer', '7680', 'Good', '2024', 'XYZ', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(10, 'Acer EliteBook', 1, 'https://i.dell.com/is/image/DellContent/content/dam/documents-and-videos/dv2/b2b/en/product-launch/latitude/fy25-latitude-family/site-banners/bb2501g0003-gl-bb-site-banner-fy25-latitude-9450-800x620.png', 'Great quality, Excellent performance', 65000.00, 64000.00, 'Acer', '7680', 'Good', '2024', 'XYZ', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(11, 'HP Spectre x360', 1, 'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80', 'Powerful and versatile, sleek design', 90000.00, 85000.00, 'HP', 'Spectre x360', 'Like New', '2023', 'ABC', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(12, 'Dell XPS 15', 1, 'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/page/category/g-series-16-7630-laptop-rf-800x620.png?fmt=png-alpha&wid=800&hei=620', 'High performance, stunning display', 110000.00, 105000.00, 'Dell', 'XPS 15', 'Excellent', '2022', 'PQR', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(13, 'Lenovo ThinkPad', 1, 'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/page/deals-page/general/laptop-deals-xps-9520-nz.png?fmt=png-alpha&wid=800&hei=620', 'Robust build, reliable performance', 80000.00, 75000.00, 'Lenovo', 'ThinkPad', 'Good', '2023', 'LMN', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(14, 'Apple MacBook Pro', 1, 'https://www.apple.com/newsroom/images/product/mac/standard/Apple_MacBook-Pro_14-16-inch_10182021_big.jpg.slideshow-large_2x.jpg', 'Premium design, superior performance', 120000.00, 115000.00, 'Apple', 'MacBook Pro', 'Like New', '2024', 'XYZ', '2024-06-22 07:18:54', '2024-06-22 09:13:59'),
(15, 'Asus ZenBook', 1, 'https://www.mega.pk/items_images/Asus+Zenbook+Pro+UX582HM+Core+i9+11th+Generation+32GB+RAM+1TB+SSD+6GB+NVIDIA+GeForce+RTX+3060+Windows+11+Price+in+Pakistan%2C+Specifications%2C+Features_-_23250.webp', 'Slim profile, powerful performance', 75000.00, 72000.00, 'Asus', 'ZenBook', 'Good', '2023', 'ABC', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(16, 'Microsoft Surface Laptop', 1, 'https://www.tejar.pk/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/m/i/microsoft_surface_laptop_studio_-_4tejar.jpg', 'Elegant design, excellent build quality', 95000.00, 90000.00, 'Microsoft', 'Surface Laptop', 'Excellent', '2022', 'PQR', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(17, 'Samsung Galaxy Book', 1, 'https://i.dell.com/is/image/DellContent/content/dam/ss2/product-images/page/category/laptop/xps/fy24-family-launch/prod-312204-laptop-xps-16-9640-14-9440-13-9340-sl-800x620.png?fmt=png-alpha&wid=800&hei=620', 'Sleek design, versatile performance', 85000.00, 82000.00, 'Samsung', 'Galaxy Book', 'Good', '2023', 'LMN', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(18, 'Razer Blade', 1, 'https://i.dell.com/is/image/DellContent/content/dam/ss2/page-specific/dell-homepage/apj/modules/bb2501g0010-gl-bb-fy24-mobile-workstation-precision-16-5690-mlk-site-banner-800x620-right.png?fmt=jpg&wid=800&hei=620', 'Gaming powerhouse, high refresh rate display', 150000.00, 145000.00, 'Razer', 'Blade', 'Excellent', '2022', 'XYZ', '2024-06-22 07:18:54', '2024-06-22 07:18:54'),
(19, 'Huawei MateBook X Pro', 1, 'https://www.hindustantimes.com/ht-img/img/2024/02/22/550x309/best_laptops_under_Rs_50000_1708591575603_1708591591982.jpg', 'Ultra-slim design, powerful performance', 85000.00, 82000.00, 'Huawei', 'MateBook X Pro', 'Good', '2023', 'ABC', '2024-06-22 07:18:54', '2024-06-22 07:18:54');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('lAK8MAdMZVGznRFoXSFWi5gZWv2PIiOIR8Fh9y01', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiVE95UFo3ZW5DcFBUSUFQWFZ1OE04UkVRdDV1QmxOQ3lmanZYMjRpUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzE5MDY2MDE4O319', 1719073736);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Muhammad Arshad', 'marshadcs20@gmail.com', NULL, '$2y$12$zuelptz.rrVDXwgtikxu7ewukb6WIMFCVAZV7sZ8hVHtS046yRjNK', 'su9zPq3gXxHOzbqXZIHxQovkwciXpoQeri5dcjv8HWJWBcVhRFAIQLu0DZAY', '2024-06-21 03:18:25', '2024-06-21 03:18:25', 1),
(2, 'shakeel', 'shakeel@gmail.com', NULL, '$2y$12$t7X9lJJ9yqIhniIvmPtKmOyAWrN9zOBdx2zUCa/a8CM2vc63utdUW', NULL, '2024-06-22 02:47:23', '2024-06-22 02:47:23', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_product_id_foreign` (`product_id`);

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
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laptops`
--
ALTER TABLE `laptops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`),
  ADD KEY `order_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptops`
--
ALTER TABLE `laptops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
