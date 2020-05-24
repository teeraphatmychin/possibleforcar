-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 24, 2020 at 10:37 PM
-- Server version: 5.7.30-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `possiblecar4`
--

-- --------------------------------------------------------

--
-- Table structure for table `ajax_cruds`
--

CREATE TABLE `ajax_cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'toyota', '2020-05-18 18:03:15', '2020-05-18 18:03:15'),
(2, 'honda', '2020-05-18 18:03:25', '2020-05-18 18:03:25'),
(3, 'isuzu', '2020-05-18 18:03:49', '2020-05-18 18:03:49'),
(4, 'mitsubishi', '2020-05-18 18:04:01', '2020-05-18 18:04:01'),
(5, 'ford', '2020-05-18 18:04:12', '2020-05-18 18:04:12'),
(6, 'mazda', '2020-05-18 18:04:22', '2020-05-18 18:04:22'),
(7, 'mg', '2020-05-18 18:04:31', '2020-05-18 18:04:31'),
(8, 'nissan', '2020-05-18 18:04:43', '2020-05-18 18:04:43'),
(9, 'BENZ', '2020-05-22 21:14:30', '2020-05-22 21:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_uses`
--

CREATE TABLE `contact_uses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `contact_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contact_mail` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_blogs`
--

CREATE TABLE `list_blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subject_blog` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_by_blog` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title_blog` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `article_blog` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_cars`
--

CREATE TABLE `list_cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_model` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sum_price` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `engine` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `detail` longtext COLLATE utf8_unicode_ci,
  `status_car` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_customers`
--

CREATE TABLE `list_customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_social` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `car_down` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `installment` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_status` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sell_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `list_sales`
--

CREATE TABLE `list_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sale_name` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_phone` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sale_social` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(113, '2014_10_12_000000_create_users_table', 1),
(114, '2014_10_12_100000_create_password_resets_table', 1),
(115, '2018_08_01_183154_create_pages_table', 1),
(116, '2018_08_04_122319_create_settings_table', 1),
(117, '2019_07_04_223408_create_list_cars_table', 1),
(118, '2019_07_04_223737_create_list_blogs_table', 1),
(119, '2019_07_04_223749_create_list_customers_table', 1),
(120, '2019_07_07_111650_create_ajax_cruds_table', 1),
(121, '2019_07_08_184117_create_roles_table', 1),
(122, '2019_07_08_184538_create_role_user_table', 1),
(123, '2019_07_10_044905_create_list_sales_table', 1),
(124, '2019_07_13_174724_create_contact_uses_table', 1),
(125, '2020_05_10_135812_create_social_accounts_table', 1),
(126, '2020_05_11_011133_create_product_car', 1),
(127, '2020_05_13_132145_create_categories_table', 1),
(128, '2020_05_13_132436_create_tags_table', 1),
(129, '2020_05_13_195338_create_posts_table', 1),
(130, '2020_05_13_200128_create_post_tag_table', 1),
(131, '2020_05_16_034028_add_to_slug_to_users', 1),
(132, '2020_05_17_014448_add_category_id_posts', 1),
(133, '2020_05_17_132456_create_comments', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8_unicode_ci,
  `body` longtext COLLATE utf8_unicode_ci,
  `slug` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `model` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_model` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sum_price` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `engine` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status_car` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `slug`, `category_id`, `model`, `year_model`, `price`, `sum_price`, `image`, `type`, `engine`, `status_car`, `created_at`, `updated_at`) VALUES
(1, 'toyota', 'โตโยต้า อัลพาร์ด ได้ถูกปรับปรุงใหม่ด้วย กระจังหน้าโครเมียมที่ดีไซน์ใหม่ ตามสมัยนิยมมากขึ้น แต่ก็มาพร้อมความหรูหราเช่นเคย\r\n\r\nไฟหน้าแบบโปรเจคเตอร์ LED พร้อมไฟ Daytime Running Lights และไฟเลี้ยวหน้า-หลังแบบ Sequential, ไฟตัดหมอกดีไซน์ใหม่, ชุดไฟท้ายแบบ LED ดีไซน์ใหม่เช่นเดียวกัน\r\n\r\nพร้อมกันนี้ยังมี ป้ายติดกระจกหลัง “OFFICIALLY AUTHORIZED BY TOYOTA MOTOR THAILAND CO. LTD.” และ “10-YEAR HYBRID BATTERY GUARANTEE\" แสดงถึงการนําเข้าและจัดจําหน่ายอย่างเป็นทางการจากบริษัท โตโยต้า มอเตอร์ ประเทศไทย จํากัด และการรับประกันแบตเตอรี่ไฮบริด10 ปี', 'toyota-alphard', 1, 'alphard', NULL, NULL, NULL, '1.png', NULL, NULL, NULL, '2020-05-18 18:28:01', '2020-05-18 18:28:01'),
(2, 'toyota', 'Toyota Corolla Altis ใหม่ รุ่นปี 2017 ได้รับการพัฒนาขึ้นภายใต้คอนเซ็ปต์ Futuristic Prestige เพื่อยกระดับความโดดเด่น ทันสมัย ด้านดีไซน์ ทั้งภายนอกและภายใน เพิ่มเติมฟังก์ชันการใช้งานของอุปกรณ์อำนวยความสะดวกต่างๆ นอกจากนั้นยังพัฒนาสมรรถนะการขับขี่ที่เหนือชั้น และประสิทธิภาพความประหยัดน้ำมันที่ดีเยี่ยม ตลอดจนระบบความปลอดภัยที่เป็นอุปกรณ์มาตรฐานในทุกรุ่น มาพร้อม Concept \"So Excited Ever เร้าใจ..กว่าที่เคย\"\r\n\r\nToyota Corolla Altis ใหม่ รุ่นปี 2017 ภายในมีพื้นที่ห้องโดยสารที่กว้างขวาง พร้อมพื้นที่เก็บสัมภาระที่ใหญ่ขึ้น มีการจัดวางตำแหน่งของเบาะนั่ง พวงมาลัย และอุปกรณ์ต่างๆที่ให้อารมณ์แบบสปอร์ต เครื่องยนต์เบนซิน DOHC Dual VVT-i 4 สูบแถวเรียง ขนาด 1,800 ซีซี 141 แรงม้า และระบบเกียร์อัตโนมัติแบบ Super CVT-i 7 สปีด ที่ถูกพัฒนาให้มีประสิทธิภาพดียิ่งขึ้น ให้สมรรถนะการขับขี่ที่เหนือชั้น และประหยัดน้ำมันที่ดีเยี่ยม พร้อมด้วยช่วงล่างที่ปรับปรุงใหม่ ช่วยให้การขับขี่นุ่มนวล เกาะถนนดียิ่งขึ้น มีการควบคุมบังคับที่คล่องตัว ระบบเบรคแม่นยำฉับไว ตลอดจนระบบมาตรฐานความปลอดภัยที่สมบูรณ์', 'toyota-altis', 1, 'altis', '2020', '500000', '1', '1.png', NULL, NULL, '1', '2020-05-18 18:38:45', '2020-05-18 18:38:45'),
(3, 'toyota', 'โตโยต้า อแวนซา 2019 (Toyota Avanza 2019) รถยนต์นั่งอเนกประสงค์ 5 ประตู 7 ที่นั่ง Multi-Purpose Vehicle มาพร้อมแนวคิด  ปลดปล่อยทุกมิติการใช้ชีวิต (Start your new dimension) ดีไซน์ภายนอกได้รับการปรับเปลี่ยนรอบคัน เพิ่มอารมณ์สปอร์ต ภายในห้องโดยสารออกแบบกว้างขวางสบาย ลงตัวในทุกการเดินทาง โดยมีทางเลือกทั้งหมด 2 รุ่น ได้แก่ 1.5G A/T และ 1.5E A/T', 'toyota-avanza', 1, 'avanza', '2019', '300000', '1', '1.png', NULL, NULL, '1', '2020-05-18 18:40:15', '2020-05-18 18:40:15'),
(4, 'toyora', 'Toyota C-HR BY KARL LAGERFELD รุ่น LIMITED EDITION ที่มีจำนวนจำกัด เพื่อสร้างสรรค์ปรากฏการณ์ใหม่ในด้านการออกแบบที่ผสมผสานศาสตร์แห่งยนตรกรรมเข้าไว้กับศิลปะในด้านแฟชั่นได้อย่างลงตัว ตอกย้ำความเป็นต้นแบบของผู้นำเทรนด์ในด้านดีไซน์อย่างแท้จริง ส่งผลให้มีการออกแบบที่เต็มไปด้วยความประณีต โดดเด่น มีเอกลักษณ์เฉพาะตัวไม่เหมือนใคร\r\n\r\n \r\n\r\nToyota C-HR BY KARL LAGERFELD มีการออกแบบทั้งภายนอกและภายใน รวมทั้งหมด 12 จุดด้วยกัน ได้แก่ หลังคาสีขาวมุกพร้อมชุดตกแต่งหลังคาสีดำ, กระจกมองข้างสีขาวมุก, ไฟตัดหมอกหน้าแบบ LED, ชุดสเกิร์ตข้างสีขาวมุก, ชุดสปอยเลอร์กันชนหน้าสีขาวมุกพร้อมชุดตกแต่งกันชนหน้าสีดำ, ชุดสปอยเลอร์กันชนหลังสีขาวมุกพร้อมชุดตกแต่งกันชนหลังสีดำ, ล้ออัลลอย 17 นิ้วสีดำเงา, สติ๊กเกอร์สีขาวมุกตกแต่งข้างรถ Logo KARL LAGERFELD,  สัญลักษณ์ KARL LAGERFELD บริเวณท้ายรถ, ภายในตกแต่งสีทูโทน พร้อมสัญลักษณ์  KARL LAGERFELD, เบาะหนังสีทูโทนเกรดพรีเมียมพร้อมสัญลักษณ์ KARL LAGERFELD และ สคัฟเพลท C-HR by KARL LAGERFELD\r\n\r\n \r\n\r\nเอกสิทธิ์พิเศษสำหรับลูกค้าที่ซื้อ TOYOTA C-HR BY KARL LAGERFELD LIMITED EDITION วันนี้ รับฟรี! C-HR BY KARL LAGERFELD LIMITED EDITION SET ที่ออกแบบโดยทีมงานของ KARL LAGERFELD มูลค่ากว่า 50,000 บาท \r\n\r\nโดยในเซ็ตประกอบไปด้วย กระเป๋าเดินทาง, กระเป๋าถือ, หมวก และ พวงกุญแจ', 'toyota-c-hr', 1, 'c-hr', '2019', '800000', '1', '1.png', NULL, NULL, '1', '2020-05-18 18:42:27', '2020-05-18 18:42:27'),
(5, 'honda', 'dfasdfsdfsdfsdf', 'honda-civic', 2, 'civic', '2019', '600000', '2', '1.jpg', NULL, NULL, '1', '2020-05-18 18:43:33', '2020-05-18 18:43:33'),
(6, 'honda', 'dsdfjasdfoifoeonvodsivnsdkvn', 'honda-jazz', 2, 'jazz', '2019', '400000', '2', '1.jpg', NULL, NULL, '1', '2020-05-18 18:44:50', '2020-05-18 18:44:50'),
(7, 'mazda', 'dfsjfdlsdfjlasdflksdjfls', 'mazda-mazda2', 6, 'mazda2', '2019', '500000', '6', '1.png', NULL, NULL, '1', '2020-05-18 18:45:57', '2020-05-18 18:45:57'),
(8, 'mg', 'dfsjdflasfinvoirior', 'mg-mg3', 7, 'mg3', '2018', '300000', '7', '1.jpg', NULL, NULL, '1', '2020-05-18 18:46:40', '2020-05-18 18:46:40'),
(9, 'mg', 'fajeivmomrvorvmi', 'mg-ev1', 7, 'ev1', '2019', '500000', '7', '1.jpg', NULL, NULL, '1', '2020-05-18 18:47:25', '2020-05-18 18:47:25'),
(10, 'nissan', 'dfasjdfeifoaejoifjasoifjiodfsdif', 'nissan-teana', 8, 'teana', '2019', '1000000', NULL, '1.jpg', NULL, NULL, '1', '2020-05-18 18:48:24', '2020-05-18 18:48:24');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `tag_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 1, 2, NULL, NULL),
(3, 1, 3, NULL, NULL),
(4, 1, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 6, 7, NULL, NULL),
(8, 7, 8, NULL, NULL),
(9, 7, 9, NULL, NULL),
(10, 8, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_car`
--

CREATE TABLE `product_car` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_brand` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_price` double(8,2) NOT NULL,
  `product_engine` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_year` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_detail` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_sale_partner` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_status` enum('0','1') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `email`, `email_verified_at`, `provider`, `provider_id`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-18 18:02:31', '2020-05-18 18:02:31'),
(2, 'author', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-18 18:02:31', '2020-05-18 18:02:31'),
(3, 'user', NULL, NULL, NULL, NULL, NULL, NULL, '2020-05-18 18:02:31', '2020-05-18 18:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 3, NULL, NULL),
(3, 3, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `provider` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `provider_user_id` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'toyota', '2020-05-18 18:04:59', '2020-05-18 18:04:59'),
(2, 'honda', '2020-05-18 18:05:02', '2020-05-18 18:05:02'),
(3, 'isuzu', '2020-05-18 18:05:06', '2020-05-18 18:05:06'),
(4, 'mitsubishi', '2020-05-18 18:05:11', '2020-05-18 18:05:11'),
(5, 'ford', '2020-05-18 18:05:17', '2020-05-18 18:05:17'),
(6, 'mazda', '2020-05-18 18:05:22', '2020-05-18 18:05:22'),
(7, 'mg', '2020-05-18 18:05:28', '2020-05-18 18:05:28'),
(8, 'nissan', '2020-05-18 18:05:33', '2020-05-18 18:05:33'),
(9, 'BMW', '2020-05-22 21:14:14', '2020-05-22 21:14:14'),
(10, 'Benz', '2020-05-22 21:33:08', '2020-05-22 21:33:08'),
(11, 'Tesla', '2020-05-22 21:33:32', '2020-05-22 21:33:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `provider` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `provider`, `provider_id`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'chin', 'teeraphatmychin@gmail.com', NULL, NULL, NULL, '$2y$10$BLhMJhqvaipbH6fQ6rFosuHkD.2O3ZytMDy5vjygk/Z796q1luXae', NULL, NULL, '2020-05-18 18:02:31', '2020-05-18 18:02:31'),
(2, 'possiblecar.4', 'possiblecar.4@gmail.com', NULL, NULL, NULL, '$2y$10$OtUDkb7Dle0GMaIjlEpMYebhX5r/1vZhkPRm5LvVYdxLmtZmrqI0S', NULL, NULL, '2020-05-18 18:02:31', '2020-05-18 18:02:31'),
(3, 'Author', 'author@author.com', NULL, NULL, NULL, '$2y$10$fi4Gh4LF6YCmCsH41cIztuAm/RfepUutKQpoirAWf.rGZl0In33ui', NULL, NULL, '2020-05-18 18:02:31', '2020-05-18 18:02:31'),
(4, 'User', 'user@user.com', NULL, NULL, NULL, '$2y$10$gP//9I.9q0yCk8P1AYxrbuLP0V3S4ExzCrhhIQAOpK7exAJtBFvLK', NULL, NULL, '2020-05-18 18:02:32', '2020-05-18 18:02:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ajax_cruds`
--
ALTER TABLE `ajax_cruds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `contact_uses`
--
ALTER TABLE `contact_uses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_blogs`
--
ALTER TABLE `list_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_cars`
--
ALTER TABLE `list_cars`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `list_cars_slug_unique` (`slug`);

--
-- Indexes for table `list_customers`
--
ALTER TABLE `list_customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `list_sales`
--
ALTER TABLE `list_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`);

--
-- Indexes for table `product_car`
--
ALTER TABLE `product_car`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_email_unique` (`email`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ajax_cruds`
--
ALTER TABLE `ajax_cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact_uses`
--
ALTER TABLE `contact_uses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_blogs`
--
ALTER TABLE `list_blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_cars`
--
ALTER TABLE `list_cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_customers`
--
ALTER TABLE `list_customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `list_sales`
--
ALTER TABLE `list_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_car`
--
ALTER TABLE `product_car`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`);

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
