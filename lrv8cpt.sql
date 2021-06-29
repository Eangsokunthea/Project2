-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 06:21 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrv8cpt`
--

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
(4, '2021_06_05_165453_create_tbl_admin_table', 1),
(5, '2021_06_06_102809_create_btl_category_product', 2),
(6, '2021_06_09_100136_create_tbl_brand_product', 3),
(7, '2021_06_09_145641_create_tbl_product', 4),
(8, '2021_06_14_171703_tbl_customer', 5),
(9, '2021_06_14_175126_tbl_shipping', 6),
(10, '2021_06_17_092923_tbl_payment', 7),
(11, '2021_06_17_093145_tbl_order', 7),
(12, '2021_06_17_093408_tbl_order_details', 7);

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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'sokuntheaeang198@gmail.com', '202cb962ac59075b964b07152d234b70', 'EANG SOKUNTHEA', '0928309798', '2021-06-05 17:08:51', '2021-06-05 17:08:51');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`, `brand_slug`, `brand_desc`, `brand_status`, `created_at`, `updated_at`) VALUES
(1, 'Dell', 'dell', 'sdfsd', 0, NULL, NULL),
(2, 'Asus', 'asus', '34', 0, NULL, NULL),
(3, 'Acer', 'acer', '1235', 0, NULL, NULL),
(4, 'Lenovo', 'lenovo', '345ertredfs', 0, NULL, NULL),
(5, 'Hp', 'hp', 'dsf', 0, NULL, NULL),
(8, 'MSI', 'msi', '4rt', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category_product`
--

CREATE TABLE `tbl_category_product` (
  `category_id` int(10) UNSIGNED NOT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug_category_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category_product`
--

INSERT INTO `tbl_category_product` (`category_id`, `meta_keywords`, `category_name`, `slug_category_product`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(16, 'san-pham-moi', 'Sản phẩm mới', 'san-pham-moi', 'san-pham-moi', 0, NULL, NULL),
(17, 'san-pham-noi-bat', 'Sản phẩm nổi bật', 'san-pham-noi-bat', 'san-pham-noi-bat', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(6, 'Eang Sokunthea', 'sokuntheaeang178@gmail.com', '202cb962ac59075b964b07152d234b70', '0928309798', NULL, NULL),
(7, 'Em Mina', 'Mina@gmail.com', '202cb962ac59075b964b07152d234b70', '032536457', NULL, NULL),
(8, 'Messi Na', 'messi@gmail.com', '202cb962ac59075b964b07152d234b70', '0353453423', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) UNSIGNED NOT NULL,
  `shipping_id` int(11) UNSIGNED NOT NULL,
  `payment_id` int(11) UNSIGNED NOT NULL,
  `order_total` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(36, 7, 22, 41, '2,420,000.00', 'Đang chờ xử lý', NULL, NULL),
(37, 6, 23, 42, '3,291,200.00', 'Đang chờ xử lý', NULL, NULL),
(38, 6, 24, 43, '5,203,000.00', 'Đang chờ xử lý', NULL, NULL),
(39, 6, 25, 44, '2,420,000.00', 'Đang chờ xử lý', NULL, NULL),
(40, 8, 26, 45, '5,203,000.00', 'Đang chờ xử lý', NULL, NULL),
(44, 8, 27, 49, '242,000.00', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(36, 30, 33, 'DELL SPM (9300)', '1500000', 1, NULL, NULL),
(37, 30, 31, 'DELL XPS 13.4\" 4K+ Touch (9300)', '50000000', 1, NULL, NULL),
(38, 35, 40, 'Lenovo SIS VivoBook', '220000', 1, NULL, NULL),
(39, 36, 29, 'HP Pavilion 13 4K', '1000000', 2, NULL, NULL),
(40, 37, 30, 'MSI Stealth 15M A11UEK', '2500000', 1, NULL, NULL),
(41, 37, 40, 'Lenovo SIS VivoBook', '220000', 1, NULL, NULL),
(42, 38, 38, 'ACER ASI 2021', '4300000', 1, NULL, NULL),
(43, 39, 29, 'HP Pavilion 13 4K', '1000000', 2, NULL, NULL),
(44, 40, 38, 'ACER ASI 2021', '4300000', 1, NULL, NULL),
(45, 44, 27, 'ASUS 14\" Vivobook K413EQ', '200000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(50) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(35, '2', 'Đang chờ xử lý', NULL, NULL),
(36, '2', 'Đang chờ xử lý', NULL, NULL),
(37, '2', 'Đang chờ xử lý', NULL, NULL),
(38, '2', 'Đang chờ xử lý', NULL, NULL),
(39, '2', 'Đang chờ xử lý', NULL, NULL),
(40, '2', 'Đang chờ xử lý', NULL, NULL),
(41, '2', 'Đang chờ xử lý', NULL, NULL),
(42, '2', 'Đang chờ xử lý', NULL, NULL),
(43, '2', 'Đang chờ xử lý', NULL, NULL),
(44, '2', 'Đang chờ xử lý', NULL, NULL),
(45, '2', 'Đang chờ xử lý', NULL, NULL),
(46, '2', 'Đang chờ xử lý', NULL, NULL),
(47, '2', 'Đang chờ xử lý', NULL, NULL),
(48, '2', 'Đang chờ xử lý', NULL, NULL),
(49, '2', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_quantity` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `brand_id` int(11) UNSIGNED NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`product_id`, `product_name`, `product_quantity`, `product_slug`, `category_id`, `brand_id`, `product_desc`, `product_content`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(26, 'Lenovo Ideapad S940 FHD', '3', 'lenovo-ideapad-s940-fhd', 16, 1, '<p>- 8th Gen Intel Core i7-8565U<br />\r\n- RAM : 8GB | 1TB SSD PCIe<br />\r\n- 14.0&quot; FHD (1920 x 1080) IPS<br />\r\n- VGA : Intel UHD Graphics 620<br />\r\n- Features : Backlit, FingerPrint<br />\r\n- Windows 10 License<br />\r\n- Battery life upto 15.5Hrs<br />\r\n- 1.1Kg | Iron Gray<br />\r\n- Code: UR2006R539B2<br />\r\n- --------------------------<br />\r\n- Free : Sleeve, BT Mouse, Pad<br />\r\n- Free : new Flash Drive 64GB</p>', '<p>123</p>', '400000', 'comp133.jpg', 0, NULL, NULL),
(27, 'ASUS 14\" Vivobook K413EQ', '2', 'asus-14-vivobook-k413eq', 17, 2, 'ASUS 14\" Vivobook K413EQ', 'ASUS 14\" Vivobook K413EQ', '200000', 'comp0912.jpg', 0, NULL, NULL),
(28, 'ACER 14\" Aspire 5 2021', '3', 'acer-14-aspire-5-2021', 16, 3, '<p>acer-14-aspire-5-2021</p>', '<p>acer-14-aspire-5-2021</p>', '2100000', 'comp1245.jpg', 0, NULL, NULL),
(29, 'HP Pavilion 13 4K', '3', 'hp-pavilion-13-4k', 17, 5, '<p>sfsd</p>', '<p>safas</p>', '1000000', 'comp1432.jpg', 0, NULL, NULL),
(30, 'MSI Stealth 15M A11UEK', '4', 'msi-stealth-15m-a11uek', 17, 8, '<p>adasda</p>', '<p>dagjheqw</p>', '2500000', 'comp1658.jpg', 0, NULL, NULL),
(31, 'DELL XPS 13.4\" 4K+ Touch (9300)', '5', 'dell-xps-134-4k-touch-9300', 16, 1, '<p>asdas</p>', '<p>adasd</p>', '50000000', 'comp0272.jpg', 0, NULL, NULL),
(32, 'DELL XPS  4K (9300)', '2', 'dell-xps-4k-9300', 17, 1, '<p>sdf</p>', '<p>sdf</p>', '20000000', 'comp070.jpg', 0, NULL, NULL),
(33, 'DELL SPM (9300)', '5', 'dell-spm-9300', 17, 1, '<p>saas</p>', '<p>dfgfd</p>', '1500000', 'comp0625.jpg', 0, NULL, NULL),
(34, 'MSI Tiger Black', '2', 'msi-tiger-black', 17, 8, '<p>jkfhg</p>', '<p>dfg/</p>', '2500000', 'comp0878.jpg', 0, NULL, NULL),
(35, 'Lenovo S0020 FHD', '2', 'lenovo-s0020-fhd', 17, 4, '<p>dhfgj</p>', '<p>dfghj</p>', '4500000', 'comp1553.jpg', 0, NULL, NULL),
(36, 'Lenovo ISO 2021', '3', 'lenovo-iso-2021', 17, 4, '<p>hjsdg</p>', '<p>dsfdf</p>', '24000000', 'comp1114.jpg', 0, NULL, NULL),
(37, 'HP USA SIP', '5', 'hp-usa-sip', 17, 5, '<p>sdhgf</p>', '<p>sdfsdaf</p>', '3500000', 'comp1064.jpg', 0, NULL, NULL),
(38, 'ACER ASI 2021', '2', 'acer-asi-2021', 17, 3, '<p>sdafhj</p>', '<p>sdfaasd</p>', '4300000', 'comp0690.jpg', 0, NULL, NULL),
(39, 'ASUS MOI HD', '5', 'asus-moi-hd', 17, 2, '<p>idsag</p>', '<p>dfgdgf</p>', '3600000', 'comp051.jpg', 0, NULL, NULL),
(40, 'Lenovo SIS VivoBook', '5', 'lenovo-sis-vivobook', 17, 1, '<p>sdf</p>', '<p>dsgg</p>', '220000', 'comp0381.jpg', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shipping`
--

CREATE TABLE `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(19, 'Messi Na', 'Dong Da, Ha Noi', '0353453423', 'messi@gmail.com', 'HaNoi', NULL, NULL),
(20, 'Eang Sokunthea', 'CHM', '0687778678', 's@g', 'hanoi', NULL, NULL),
(21, 'MiNa', 'Hanoi, chuong trinh', '0233234543', 'Mina@gmail.com', 'HaNoi', NULL, NULL),
(22, 'Mina', 'Hanoi, chuong trinh', '0233234543', 'Mina@gmail.com', 'HaNoi', NULL, NULL),
(23, 'Eang Sokunthea', 'Dong Da, Ha Noi', '0687778678', 's@gmail.com', 'HaNoi', NULL, NULL),
(24, 'RaBee', 'Dong Da, Ha Noi', '0687778678', 's@gmail.com', 'dgdf', NULL, NULL),
(25, 'Eang Sokunthea', 'Hanoi, chuong trinh', '0687778678', 's@gmail.com', 'HaNoi', NULL, NULL),
(26, 'NYNY', 'Ha Nam', '023743853', 'So@gmail.com', 'HaNoi', NULL, NULL),
(27, 'Jasmin', 'Dong Da, Ha Noi', '0233234543', 'Mina@gmail.com', 'HaNoi', NULL, NULL);

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
  `created_at` tiamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`,`shipping_id`,`payment_id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`order_details_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`,`brand_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  ADD PRIMARY KEY (`shipping_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_category_product`
--
ALTER TABLE `tbl_category_product`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_payment`
--
ALTER TABLE `tbl_payment`
  MODIFY `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_shipping`
--
ALTER TABLE `tbl_shipping`
  MODIFY `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD CONSTRAINT `tbl_order_ibfk_1` FOREIGN KEY (`shipping_id`) REFERENCES `tbl_shipping` (`shipping_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_order_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD CONSTRAINT `tbl_order_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `tbl_product` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `tbl_brand` (`brand_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_product_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `tbl_category_product` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
