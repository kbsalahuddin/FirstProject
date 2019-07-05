-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2019 at 07:14 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `categoryDescription`, `categoryStatus`, `created_at`, `updated_at`) VALUES
(1, 'Wrist Watch', 'Wrist watches for Men,Women and Children!!!', 'published', '2019-06-28 09:39:35', '2019-06-30 11:24:54'),
(2, 'Electronics', 'All Electronic products are available !', 'published', '2019-06-28 09:49:19', '2019-06-28 09:49:19'),
(3, 'School Apparel', 'School Accessories for all kids and sizes', 'published', NULL, '2019-06-29 03:57:41'),
(5, 'Men''s', 'All Accessories for Men!', 'published', '2019-06-28 10:07:10', '2019-06-30 11:25:08'),
(6, 'Women''s', 'All products for Women', 'published', '2019-06-28 10:12:28', '2019-06-30 11:25:16'),
(7, 'Home Accessories', 'All the neccessary home accessories are right here!&nbsp;', 'published', '2019-06-30 11:27:26', '2019-07-02 01:10:34');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstName`, `lastName`, `email`, `password`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Khalid', 'Bin Sal', 'kbsalahuddin@gmail.com', 'Password', '01687249265', 'Dhaka', '2019-07-04 07:32:58', '2019-07-04 07:32:58'),
(3, 'Rahim', 'Mridha', 'abc@gmail.com', '1234567890', '11223344', 'Dhaka', '2019-07-04 08:06:38', '2019-07-04 08:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `manufacturerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturerDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `manufacturerStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`id`, `manufacturerName`, `manufacturerDescription`, `manufacturerStatus`, `created_at`, `updated_at`) VALUES
(1, 'Louis Vuitton', 'French fashion house and luxury retail company', 'published', '2019-06-29 08:43:39', '2019-06-29 09:18:32'),
(2, 'Balenciaga', 'Eloquent San-Sebastian Style', 'published', '2019-06-29 08:59:41', '2019-06-29 08:59:41'),
(3, 'Yves Saint Laurent', 'Saint Laurent a famous French fashion house', 'published', '2019-06-30 06:20:25', '2019-06-30 11:33:01'),
(4, 'Adidas', 'Adidas AG is a multinational corporation, founded and headquartered in Herzogenaurach, Germany.', 'published', '2019-06-30 11:38:24', '2019-06-30 11:39:34'),
(5, 'Samsung', 'Samsung is a South Korean multinational conglomerate headquartered in Samsung Town, Seoul. It comprises numerous affiliated businesses, most of them united under the Samsung brand, and is the largest South Korean chaebol.', 'published', '2019-07-02 00:16:18', '2019-07-02 00:33:39'),
(6, 'Apple', 'Apple Inc. is an American multinational technology company headquartered in Cupertino, California, that designs, develops, and sells consumer electronics, computer software, and online services.', 'published', '2019-07-02 00:17:55', '2019-07-02 00:17:55'),
(7, 'IKEA', 'IKEA is a Swedish-founded multinational group that designs and sells ready-to-assemble furniture, kitchen appliances and home products, among other useful goods and occasionally home services. It has been the world''s largest furniture retailer since at least 2008.', 'published', '2019-07-02 01:14:05', '2019-07-02 01:14:05');

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
(3, '2019_06_28_144255_create_categories_table', 2),
(4, '2019_06_29_141829_create_manufacturers_table', 3),
(5, '2019_06_30_055051_create_products_table', 4),
(6, '2019_07_04_061552_create_customers_table', 5),
(7, '2019_07_04_142607_create_shippings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryId` int(11) NOT NULL,
  `manufacturerId` int(11) NOT NULL,
  `productPrice` float(10,2) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productShortDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productLongDescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productImage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `productStatus` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `categoryId`, `manufacturerId`, `productPrice`, `productQuantity`, `productShortDescription`, `productLongDescription`, `productImage`, `productStatus`, `created_at`, `updated_at`) VALUES
(5, 'T-Shirt', 5, 1, 1000.00, 10, 'Louis Vuitton Men''s T-shirt', 'Men''s White &amp; Red Cotton Monogram Box Logo T-Shirt', 'productImage/LVTshirt.png', 'published', '2019-07-01 03:41:24', '2019-07-01 03:41:24'),
(6, 'Adidas Swift Run', 5, 4, 3000.00, 10, 'Adidas Swift Run', 'Most of the comments left by the reviewers stated that the Adidas Swift Run is a comfortable shoe.', 'productImage/AdiMSw.jpg', 'published', '2019-07-01 03:46:33', '2019-07-01 04:04:08'),
(7, 'Men''s Watch', 1, 1, 3500.00, 10, 'Men''s Tambour Chronograph Watch', 'Louis Vuitton Men''s Tambour Chronograph Watch was built for the manly man - it''s big, heavy, and exquisite! Coming with a box, there are small marks on the 18K rose gold. Swiss-made, it''s an automatic watch with a skeleton back, so the movement shows on this 44-millimeter face.', 'productImage/LVW.jpg', 'published', '2019-07-02 00:06:33', '2019-07-02 00:06:33'),
(8, 'Women''s Watch', 1, 2, 3500.00, 10, 'A BALENCIAGA WOMEN''S QUARTZ WATCH', '24MM WHITE DIAL. DATE. PLATINUM PLATED CASING. SAPPHIRE CRYSTAL. WATER RESISTANT 30M', 'productImage/balaWW.jpg', 'published', '2019-07-02 00:13:36', '2019-07-02 00:13:36'),
(9, 'iPhone XS', 2, 6, 50000.00, 10, 'Apple iPhone XS', 'The 5.8-inch iPhone XS ($999) has all the same enhancements as its supersize sibling, including a faster A12 Bionic processor that blows away Android phones (again), as well as improved cameras with Smart HDR and impressive bokeh controls', 'productImage/xs.jpg', 'published', '2019-07-02 00:24:06', '2019-07-02 00:24:06'),
(10, 'Galaxy s10 plus', 2, 5, 50000.00, 10, 'Samsung Galaxy S10+', 'The Samsung Galaxy S10 handsets are here, alongside a slew of extra Samsung tech that includes the elusive folding phone', 'productImage/s10+.jpg', 'published', '2019-07-02 00:32:34', '2019-07-02 00:32:34'),
(11, 'Daily 2.0 Suede Sneaker', 3, 4, 300.00, 10, 'The Daily 2.0 Suede Sneaker gets your through the day in suave style', 'Sneaker style with round toe, Classic Logo detailing, cushioned collar and tongue, lace secure fit.&nbsp;&nbsp;', 'productImage/adidasSchoolShoe.jpg', 'published', '2019-07-02 00:40:51', '2019-07-02 00:40:51'),
(12, 'Backpack', 3, 4, 450.00, 10, 'Adidas Red Backpack', 'Style up with the&nbsp;adidas backpack red, a great addition to your school apparel.', 'productImage/adidasBag.jpg', 'published', '2019-07-02 00:46:33', '2019-07-02 00:46:33'),
(13, 'TShirt', 6, 3, 2500.00, 10, 'Yves St. Laurent Women''s TShirt', 'Yves Saint Laurent Women YSL T-shirt Cotton Nice And Cool,yves saint laurent elle.', 'productImage/yslWS.jpg', 'published', '2019-07-02 00:51:47', '2019-07-02 00:51:47'),
(14, 'Logo Embroidered Cotton Poplin Jacket', 6, 2, 1500.00, 10, 'Logo Embroidered Cotton Poplin Jacket', 'Warming up is cooler in an oversized cotton-poplin jacket branded with a printed logo in front and an embroidered one in back', 'productImage/balaWJ.jpeg', 'published', '2019-07-02 01:07:39', '2019-07-02 01:07:39'),
(15, 'Dining Table Modern', 7, 7, 8000.00, 10, 'IKEA innovative modern looking dining table&nbsp;', 'Innovative dining table bases metal room top and wood inside base tables for small spaces space saving. IKEA''s Furniture innovative dining table extending space saving tables design swing.', 'productImage/homeAcc.jpg', 'published', '2019-07-02 01:16:34', '2019-07-02 01:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailAddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneNumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipAddress` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `fullName`, `emailAddress`, `phoneNumber`, `shipAddress`, `created_at`, `updated_at`) VALUES
(1, 'Rahim Mridha', 'abc@gmail.com', '11223344', 'Dhaka', '2019-07-04 09:05:03', '2019-07-04 09:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Mark Fisher', 'fish@gmail.com', NULL, '$2y$10$d28hRygcIOahZ3Zp0YUGa.FLcG4b5ymz3Yyv5XWzjFcv9ZvpkVuii', NULL, '2019-06-25 09:13:17', '2019-06-25 09:13:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
