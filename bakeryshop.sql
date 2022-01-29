-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2022 at 04:22 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakeryshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@domain.com', '$2y$10$lfAxugCBCCaLsW1EAYWyI.pJoLYD05aG581.77frnPL1m4vqYPYw2', '2022-01-25 13:18:11', '2022-01-25 13:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `product_id`, `name`, `slug`, `image_url`, `created_at`, `updated_at`) VALUES
(1, 1, 'Brownies', 'brownies', 'brownies.png', '2022-01-25 13:23:19', '2022-01-25 13:23:19'),
(2, 7, 'Macaron', 'macaron', 'macaron.png', '2022-01-25 13:23:19', '2022-01-25 13:23:19'),
(3, 13, 'Cupcake', 'cupcake', 'cupcake.png', '2022-01-25 14:01:52', '2022-01-25 14:01:52'),
(4, 19, 'Donat', 'donat', 'donat.png', '2022-01-25 14:01:52', '2022-01-25 14:01:52'),
(5, 25, 'Dessert', 'dessert', 'dessert.png', '2022-01-25 14:06:34', '2022-01-25 14:06:34'),
(6, 31, 'Kue Ulang Tahun', 'kueulangtahun', 'kue.png', '2022-01-25 14:06:34', '2022-01-25 14:06:34');

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
(5, '2021_11_26_234316_create_products_table', 1),
(6, '2021_12_20_054754_create_orders_table', 1),
(7, '2021_12_20_055643_create_order_items_table', 1),
(8, '2022_01_04_234955_create_reviews_table', 1),
(9, '2022_01_15_013620_create_admins_table', 1),
(10, '2022_01_20_112931_create_categories_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_line2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `status`, `total_price`, `address`, `address_line2`, `district`, `city`, `province`, `zip_code`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 1, 'PENDING', '180000', 'buton selatan', 'raha III', 'katobu', 'muna', 'sulawesi tenggara', '93613', 628967657, '2022-01-27 06:57:42', '2022-01-27 06:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 24, 1, 180000, '2022-01-27 06:57:42', '2022-01-27 06:57:42');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_category` int(20) DEFAULT NULL,
  `status` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `description`, `price`, `image_url`, `video_url`, `created_at`, `updated_at`, `id_category`, `status`) VALUES
(1, 0, 'Brownies Talas', 'Kuliner kue lapis yang berasal dari bahan dasar tepung talas ini cukup dikenal para pecinta kuliner.', '32000', 'bro4.jpg', NULL, '2022-01-25 14:28:00', '2022-01-25 14:28:00', 1, 0),
(2, 0, 'Bronies Coklat', 'Bronies coklat selain nikmat juga mudah dibuat. Tak heran kue cokelat satu ini disukai oleh pembuat kue pemula.\r\n\r\n', '30000', 'bro.jpg', NULL, '2022-01-25 14:28:00', '2022-01-25 14:28:00', 1, 0),
(3, 0, 'Brownies Ubi Ungu', 'Brownies ubi ungu merupakan makanan yang sehat karena  Ubi ungu mengandung serat pangan alami yang tinggi, prebiotik, kadar Glycemic Index rendah, dan oligosakarida. Jadi ubi ungu sangat baik untuk dikonsumsi. ', '30000', 'bro3.jpg', NULL, '2022-01-25 14:41:45', '2022-01-25 14:41:45', 1, 0),
(4, 0, 'Brownies Kukus Coklat Keju', 'Brownies Kukus Cokelat Keju adalah kue dengan perpaduan rasa sempurna cokelat dan keju yang populer dikenal oleh kita. Kini Pondan menghadirkan tepung kue untuk membuat Brownies Kukus Cokelat Keju yang cepat dan mudah pembuatannya untuk keluarga tercinta.', '50000', 'brownies1.jpg', NULL, '2022-01-25 14:45:58', '2022-01-25 14:45:58', 1, 0),
(5, 0, 'Macaron Strawberry', 'Macaron strawberry ini dibuat dengan bahan bahan berkualitas yakni strawberry yang diimport langsung dari USA', '20000', 'm1.jpg', NULL, '2022-01-25 15:44:58', '2022-01-25 15:44:58', 2, 0),
(6, 0, 'Macaron Blueberry', 'Macaron blueberry ini dari buah blueberry piihan serta bahan yang berkualitas lainnya', '25000', 'm4.jpg', NULL, '2022-01-25 15:55:16', '2022-01-25 15:55:16', 2, 0),
(7, 0, 'Macaron Red Velvet', 'Macaron red velvet bisa terlihat cantik dan menarik karena menggunakan bubuk kakao Belanda yang memiliki karakteristik warna bubuk cokelat muda.', '23000', 'm3.jpg', NULL, '2022-01-25 15:55:58', '2022-01-25 15:55:58', 2, 0),
(8, 0, 'Macaron Coklat', 'Macaron coklat dibuat dari tepung almond asli,tanpa camupuran, dengan Filling dari campuran coklat Belgia dengan dried strawberry (buah strawberry kering).', '25000', 'm2.jpg', NULL, '2022-01-25 15:55:58', '2022-01-25 15:55:58', 2, 0),
(9, 0, 'Cupcake Strawberry Coklat', 'Cupcake ini mengandalkan campuran adonan cokelat baik untuk kue maupun kecil seperti strawberry yang kaya akan manfaat.\r\n', '10000', 'cup.jpg', NULL, '2022-01-25 16:06:44', '2022-01-25 16:06:44', 3, 0),
(10, 0, 'Cupcake Coklat', 'Cupcake coklat adalah kue yang berukuran kecil dilapisi kertas atau bahasa pasaran di Indonesia yakni kue cangkir. Cupcake coklat banyak dicari oleh banyak orang', '9000', 'cup2.jpg', NULL, '2022-01-25 16:06:44', '2022-01-25 16:06:44', 3, 0),
(11, 0, 'Cupcake Mocca', 'Cupcake mocca ala rumahan yang sederhana dan lezat dari komunitas memasak terbesar dunia', '11000', 'cup3.jpg', NULL, '2022-01-25 16:13:14', '2022-01-25 16:13:14', 3, 0),
(12, 0, 'Cupcake Strawberry', 'Cupcake dengan rasa yang dominan strawberry di balut dengan creamy cupcake yang yahuud banget', '10000', 'cup1.jpg', NULL, '2022-01-25 16:16:31', '2022-01-25 16:16:31', 3, 0),
(13, 0, 'Donat Tiramisu', 'Donat Tiramisu memiliki tekstur lembut, manis, dan gurih dari keju mascarpone yang sungguh menggugah selera, Bagian atasnya bertabur bubuk kakao', '5000', 'donat5.jpg', NULL, '2022-01-25 16:26:15', '2022-01-25 16:26:15', 4, 0),
(14, 0, 'Donat Macha', 'Donat macha yang Enak, Empuk, Lembut terbuat dari daun teh pilihan yang diimport dari sukabumi kalapanunggal tanpa bahan pengawet. ', '6000', 'donat7.jpg', NULL, '2022-01-25 16:26:15', '2022-01-25 16:26:15', 4, 0),
(15, 0, 'Donat Keju', 'Donat keju adalah penganan yang digoreng, dibuat dari adonan tepung terigu yang ditaburi keju diatasnya', '6000', 'donat6.jpg', NULL, '2022-01-25 16:35:02', '2022-01-25 16:35:02', 4, 0),
(16, 0, 'Donat 3 Rasa', 'Donat dengan rasa coklat,strawberry dan macha ditaburi meses', '15000', 'donat2.jpg', NULL, '2022-01-25 16:37:23', '2022-01-25 16:37:23', 4, 0),
(17, 0, 'Dessert Tiramissu', 'Tiramisu termasuk dessert yang banyak digemari nyatanya dessert yang khas dengan rasa kopi ', '35000', 'desert2.jpg', NULL, '2022-01-25 16:44:40', '2022-01-25 16:44:40', 5, 0),
(18, 0, 'Dessert Coklat', 'Dessert cokelat dalam kotak ini memadukan dua jenis kue dengan lapisan cokelat yang manis creamy.', '30000', 'desert6.jpg', NULL, '2022-01-25 16:44:40', '2022-01-25 16:44:40', 5, 0),
(19, 0, 'Dessert Mocca', 'Dessert cake mocca dgn filling mocca cream yg lembut dan topping kacang nougat yg crunchy', '40000', 'desert5.jpg', NULL, '2022-01-25 16:53:43', '2022-01-25 16:53:43', 5, 0),
(20, 0, 'Dessert Vanilla', 'Dessert vanila merupakan varian dessert lembut yang terbuat dari susu, telur, vanila, dan gula.', '35000', 'desert3.jpg', NULL, '2022-01-26 16:53:43', '2022-01-26 16:53:43', 5, 0),
(21, 0, 'Kue Karakter Blue Bear', 'Kue dengan karakter Bear ini terbuat dari tepung pilihan yang dibentuk sedemikian rupa dan dengan rasa yang lezat.', '110000', 'mono7.jpg', NULL, '2021-06-28 04:24:39', '2022-01-27 13:33:56', 6, 0),
(22, 0, 'Kue Karakter Cat', 'Kue ini dibentuk dengan bahan bahan pilihan yang dikemas secara mengemaskan serta rasanya yang lezat dan tekstur yang lembut.', '150000', 'ultah5.jpg', NULL, '2022-01-27 13:34:53', '2022-01-27 13:34:53', 6, 0),
(23, 0, 'Kue Karakter Unicorn', 'Kue karakter unicorn ini didesain secara unik dan menarik dengan rasa yang tak kalah lezat dengan kue lainnya.', '150000', 'ultah2.jpg', NULL, '2022-01-27 13:34:53', '2022-01-27 13:34:53', 6, 0),
(24, 0, 'Kue Karakter Spiderman', 'Kue karakter spiderman ini dibuat terinspirasi oleh film SuperHero di hollywood', '180000', 'ultah4.jpg', NULL, '2022-01-27 13:46:09', '2022-01-27 13:46:09', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'neisha', 'Neishaamelia5@gmail.com', NULL, '$2y$10$Vmpp8PmFgxYxBBgXobqIMuiuRMvKCoAbUwYNb4vs/QHK7W5KgdtuK', NULL, '2022-01-25 06:09:26', '2022-01-25 06:09:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
