-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2025 at 08:45 AM
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
-- Database: `weetas`
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
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` mediumtext NOT NULL,
  `name_ar` mediumtext NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name_en`, `name_ar`, `country_id`, `created_at`, `updated_at`) VALUES
(68, 'Cairo', 'القاهرة', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(69, 'Alexandria', 'الإسكندرية', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(70, 'Giza', 'الجيزة', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(71, 'Port Said', 'بورسعيد', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(72, 'Suez', 'السويس', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(73, 'Luxor', 'الأقصر', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(74, 'Aswan', 'أسوان', 1, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(75, 'Dubai', 'دبي', 2, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(76, 'Abu Dhabi', 'أبوظبي', 2, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(77, 'Sharjah', 'الشارقة', 2, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(78, 'Ajman', 'عجمان', 2, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(79, 'Fujairah', 'الفجيرة', 2, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(80, 'Manama', 'المنامة', 3, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(81, 'Muharraq', 'المحرق', 3, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(82, 'Baghdad', 'بغداد', 4, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(83, 'Basra', 'البصرة', 4, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(84, 'Mosul', 'الموصل', 4, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(85, 'Erbil', 'أربيل', 4, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(86, 'Kirkuk', 'كركوك', 4, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(87, 'Amman', 'عمان', 5, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(88, 'Zarqa', 'الزرقاء', 5, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(89, 'Irbid', 'إربد', 5, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(90, 'Aqaba', 'العقبة', 5, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(91, 'Kuwait City', 'مدينة الكويت', 6, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(92, 'Al Ahmadi', 'الأحمدي', 6, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(93, 'Hawalli', 'حولي', 6, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(94, 'Beirut', 'بيروت', 7, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(95, 'Tripoli', 'طرابلس', 7, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(96, 'Sidon', 'صيدا', 7, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(97, 'Tyre', 'صور', 7, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(98, 'Tripoli', 'طرابلس', 8, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(99, 'Benghazi', 'بنغازي', 8, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(100, 'Misrata', 'مصراتة', 8, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(101, 'Sabha', 'سبها', 8, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(102, 'Casablanca', 'الدار البيضاء', 9, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(103, 'Rabat', 'الرباط', 9, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(104, 'Marrakech', 'مراكش', 9, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(105, 'Tangier', 'طنجة', 9, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(106, 'Fes', 'فاس', 9, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(107, 'Agadir', 'أكادير', 9, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(108, 'Muscat', 'مسقط', 10, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(109, 'Salalah', 'صلالة', 10, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(110, 'Sohar', 'صحار', 10, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(111, 'Gaza', 'غزة', 11, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(112, 'Ramallah', 'رام الله', 11, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(113, 'Nablus', 'نابلس', 11, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(114, 'Hebron', 'الخليل', 11, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(115, 'Doha', 'الدوحة', 12, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(116, 'Al Wakrah', 'الوكرة', 12, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(117, 'Al Rayyan', 'الريان', 12, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(118, 'Riyadh', 'الرياض', 13, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(119, 'Jeddah', 'جدة', 13, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(120, 'Mecca', 'مكة المكرمة', 13, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(121, 'Medina', 'المدينة المنورة', 13, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(122, 'Dammam', 'الدمام', 13, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(123, 'Al Khobar', 'الخبر', 13, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(124, 'Khartoum', 'الخرطوم', 14, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(125, 'Omdurman', 'أم درمان', 14, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(126, 'Port Sudan', 'بورتسودان', 14, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(127, 'Damascus', 'دمشق', 15, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(128, 'Aleppo', 'حلب', 15, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(129, 'Homs', 'حمص', 15, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(130, 'Latakia', 'اللاذقية', 15, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(131, 'Tunis', 'تونس', 16, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(132, 'Sfax', 'صفاقس', 16, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(133, 'Sousse', 'سوسة', 16, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(134, 'Sanaa', 'صنعاء', 18, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(135, 'Aden', 'عدن', 18, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(136, 'Taiz', 'تعز', 18, '2025-02-26 13:28:16', '2025-02-26 13:28:16'),
(137, 'Al Hudaydah', 'الحديدة', 18, '2025-02-26 13:28:16', '2025-02-26 13:28:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` mediumtext NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` int(11) NOT NULL,
  `country_enName` mediumtext NOT NULL,
  `country_arName` mediumtext NOT NULL,
  `country_enNationality` mediumtext NOT NULL,
  `country_arNationality` mediumtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_enName`, `country_arName`, `country_enNationality`, `country_arNationality`, `created_at`, `updated_at`) VALUES
(1, 20, 'Egypt', 'مصر', 'Egyptian', 'مصري', '2025-02-26 09:16:19', '2025-02-26 09:16:19'),
(2, 971, 'United Arab Emirates', 'الإمارات العربية المتحدة', 'Emirati', 'إماراتي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(3, 973, 'Bahrain', 'البحرين', 'Bahraini', 'بحريني', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(4, 964, 'Iraq', 'العراق', 'Iraqi', 'عراقي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(5, 962, 'Jordan', 'الأردن', 'Jordanian', 'أردني', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(6, 965, 'Kuwait', 'الكويت', 'Kuwaiti', 'كويتي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(7, 961, 'Lebanon', 'لبنان', 'Lebanese', 'لبناني', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(8, 218, 'Libya', 'ليبيا', 'Libyan', 'ليبي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(9, 212, 'Morocco', 'المغرب', 'Moroccan', 'مغربي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(10, 968, 'Oman', 'عمان', 'Omani', 'عماني', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(11, 970, 'Palestine', 'فلسطين', 'Palestinian', 'فلسطيني', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(12, 974, 'Qatar', 'قطر', 'Qatari', 'قطري', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(13, 966, 'Saudi Arabia', 'المملكة العربية السعودية', 'Saudi', 'سعودي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(14, 249, 'Sudan', 'السودان', 'Sudanese', 'سوداني', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(15, 963, 'Syria', 'سوريا', 'Syrian', 'سوري', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(16, 216, 'Tunisia', 'تونس', 'Tunisian', 'تونسي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(17, 971, 'United Arab Emirates', 'الإمارات العربية المتحدة', 'Emirati', 'إماراتي', '2025-02-26 12:18:48', '2025-02-26 12:18:48'),
(18, 967, 'Yemen', 'اليمن', 'Yemeni', 'يمني', '2025-02-26 12:18:48', '2025-02-26 12:18:48');

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
-- Table structure for table `favourites`
--

CREATE TABLE `favourites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `town` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `town`, `city`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Cairo', '30.098814', '31.322850', '2025-02-26 09:11:41', '2025-02-26 09:11:41');

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
(4, '2025_02_19_093527_create_locations_table', 1),
(5, '2025_02_19_093615_create_countries_table', 1),
(6, '2025_02_19_093634_create_cities_table', 1),
(7, '2025_02_19_093656_create_projects_table', 1),
(8, '2025_02_19_093829_create_properties_table', 1),
(9, '2025_02_19_105057_create_favourites_table', 1),
(10, '2025_02_19_105736_create_suggested_amenities_table', 1),
(11, '2025_02_19_110006_create_property_amenities_table', 1),
(12, '2025_02_19_110125_create_contact_us_table', 1),
(13, '2025_02_19_110225_create_posts_table', 1),
(14, '2025_02_19_110336_create_keywords_table', 1),
(15, '2025_02_24_121223_create_personal_access_tokens_table', 2);

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
('john@example.com', '$2y$12$8jBwL1Dpx72QMyhApuOvvOMSGMLhhMlGdM9Gg8MWIuFpZPApzC6OS', '2025-02-25 05:48:39');

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

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 3, 'auth_token', '3b3d8af6a7b2a5d4448038463f053c583240d3e87ecf33549c02a7917efe474b', '[\"*\"]', '2025-02-25 05:28:50', NULL, '2025-02-25 05:27:35', '2025-02-25 05:28:50'),
(2, 'App\\Models\\User', 5, 'auth_token', 'f92d82941862bd7bb90a86407afde079c6cadc6768931938cb25a96b479ccfbe', '[\"*\"]', '2025-02-25 09:48:21', NULL, '2025-02-25 06:39:41', '2025-02-25 09:48:21'),
(3, 'App\\Models\\User', 5, 'auth_token', 'c0a9036f4829c8b7e4ca2f6370a2a774371fa73c1aa99cea46f43ba38ec09c35', '[\"*\"]', '2025-03-02 08:56:49', NULL, '2025-02-25 09:48:41', '2025-03-02 08:56:49'),
(4, 'App\\Models\\User', 6, 'auth_token', '4b241df30e6c83cc79c040ab9a859061828ee94337e1bc0ab585f741b4de0972', '[\"*\"]', '2025-03-03 09:13:44', NULL, '2025-02-25 12:35:36', '2025-03-03 09:13:44'),
(5, 'App\\Models\\User', 6, 'auth_token', '00d3dc6e79bbd2305c998bca91b4b29f776316f16ec6219b83fd6b177ebbfd8d', '[\"*\"]', '2025-03-03 10:44:54', NULL, '2025-02-26 06:51:18', '2025-03-03 10:44:54'),
(6, 'App\\Models\\User', 6, 'auth_token', 'b5da7bc0765f9d525239e848f23e12ac35a3b225f287e6262dcb20391e0ec49b', '[\"*\"]', '2025-03-02 08:56:46', NULL, '2025-03-02 07:03:44', '2025-03-02 08:56:46'),
(7, 'App\\Models\\User', 6, 'auth_token', '6020063510a3a9d85857ade0bdb6301d64df7b3755cfde2c845c24613f65ca0a', '[\"*\"]', '2025-03-02 08:58:04', NULL, '2025-03-02 08:56:58', '2025-03-02 08:58:04');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `title_en` mediumtext DEFAULT NULL,
  `title_ar` mediumtext DEFAULT NULL,
  `description_en` longtext DEFAULT NULL,
  `description_ar` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `built_year` varchar(255) DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name_en`, `name_ar`, `description_en`, `description_ar`, `location`, `built_year`, `country_id`, `city_id`, `created_at`, `updated_at`) VALUES
(3, 'Ice Towers', 'ايس تاورز', 'Ice towers with company elmanto', 'ايس تاوزرز لشركة المنتو', 'البحرين', '2024', 3, 80, '2025-02-26 13:29:51', '2025-02-26 13:29:51'),
(4, 'Burj Khalifaaa', 'برج خليفة', 'Tallest building in the world', 'أطول برج في العالم', 'البحرين', '2000', 2, 75, '2025-02-27 06:53:03', '2025-03-02 10:03:41'),
(6, 'Town Tours', 'تاون تورز ', 'towen tours first tower in the city', 'تاون تورز اول برج في المدينة ', 'البحرين', '2022', 3, 80, '2025-03-03 10:41:21', '2025-03-03 10:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `referance_id` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `rentOrSale` varchar(255) NOT NULL,
  `title_en` mediumtext NOT NULL,
  `title_ar` mediumtext NOT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `price` double NOT NULL,
  `area` varchar(255) DEFAULT NULL,
  `bedroom` int(11) NOT NULL,
  `bathroom` int(11) NOT NULL,
  `category_en` varchar(255) DEFAULT NULL,
  `category_ar` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `location_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `google_maps` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `referance_id`, `type`, `rentOrSale`, `title_en`, `title_ar`, `description_en`, `description_ar`, `price`, `area`, `bedroom`, `bathroom`, `category_en`, `category_ar`, `user_id`, `location_id`, `project_id`, `google_maps`, `created_at`, `updated_at`) VALUES
(2, 'PROP123', 'Apartment', 'Rent', 'Luxury Apartment in Manama', 'شقة فاخرة في المنامة', 'Spacious 3-bedroom apartment with sea view.', 'شقة واسعة من 3 غرف نوم بإطلالة على البحر.', 500000.5, '120 sqm', 3, 2, 'Luxury', 'فخمة', 1, 1, 3, 'https://maps.google.com/?q=25.276987,55.296249', '2025-02-26 11:31:50', '2025-02-26 11:31:50'),
(4, 'PROP122', 'Villa', 'Sale', 'Luxury', 'شقة فاخرة', 'sea view.', 'شقة واسعةر.', 700000.5, '180 sqm', 4, 3, 'Luxuryy', 'فخمةة', 1, 1, 3, 'klnmkjlm', '2025-03-02 06:42:25', '2025-03-02 06:44:36'),
(5, 'PROP923', 'Apartment', 'Rent', 'Luxury Apartment in Manama', 'شقة فاخرة في ', '3-bedroom apartment with sea view.', 'شقة واسعة من 3 غرف نوم على البحر.', 500000.5, '120 sqm', 3, 2, 'Luxury', 'فخمة', 1, 1, 3, 'https://maps.google.com/?q=25.276987,55.296249', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(6, 'PROP924', 'Villa', 'Sale', 'Modern Villa with Private Pool', 'فيلا حديثة مع مسبح خاص', '4-bedroom villa with a private pool.', 'فيلا 4 غرف نوم مع مسبح خاص.', 1500000, '350 sqm', 4, 3, 'Family', 'عائلية', 1, 1, 3, 'https://maps.google.com/?q=25.285445,55.315249', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(7, 'PROP925', 'Apartment', 'Sale', 'Seaside Apartment with Balcony', 'شقة على البحر مع بلكونة', '2-bedroom apartment with a large balcony.', 'شقة غرفتين نوم مع بلكونة كبيرة.', 700000, '150 sqm', 2, 2, 'Luxury', 'فخمة', 1, 1, 3, 'https://maps.google.com/?q=25.292345,55.312987', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(8, 'PROP926', 'Apartment', 'Rent', 'City Center Apartment', 'شقة في وسط المدينة', '1-bedroom apartment in the heart of the city.', 'شقة بغرفة نوم واحدة في قلب المدينة.', 400000, '80 sqm', 1, 1, 'Modern', 'حديثة', 1, 1, 3, 'https://maps.google.com/?q=25.290987,55.310876', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(9, 'PROP927', 'Penthouse', 'Sale', 'Penthouse with Skyline View', 'بنتهاوس مع إطلالة بانورامية', 'Luxury penthouse with skyline view.', 'بنتهاوس فاخر بإطلالة بانورامية.', 2500000, '400 sqm', 5, 4, 'Ultra-Luxury', 'فائق الفخامة', 1, 1, 3, 'https://maps.google.com/?q=25.291654,55.308765', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(10, 'PROP928', 'Townhouse', 'Rent', 'Townhouse in Gated Community', 'تاون هاوس في مجتمع مغلق', 'Spacious 3-bedroom townhouse.', 'تاون هاوس واسع 3 غرف نوم.', 850000, '200 sqm', 3, 3, 'Residential', 'سكني', 1, 1, 3, 'https://maps.google.com/?q=25.289321,55.305432', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(11, 'PROP929', 'Studio', 'Rent', 'Affordable Studio Apartment', 'شقة استوديو بسعر مناسب', 'Studio apartment for rent in city center.', 'شقة استوديو للإيجار في وسط المدينة.', 250000, '50 sqm', 0, 1, 'Budget', 'اقتصادية', 1, 1, 3, 'https://maps.google.com/?q=25.287654,55.302987', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(12, 'PROP930', 'Villa', 'Sale', 'Luxury Beachfront Villa', 'فيلا فاخرة على الشاطئ', '5-bedroom villa with direct beach access.', 'فيلا 5 غرف نوم مع وصول مباشر إلى الشاطئ.', 3500000, '500 sqm', 5, 5, 'Beachfront', 'شاطئية', 1, 1, 3, 'https://maps.google.com/?q=25.286321,55.300123', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(13, 'PROP931', 'Apartment', 'Rent', 'Furnished Apartment in Diplomatic Area', 'شقة مفروشة في المنطقة الدبلوماسية', 'Fully furnished apartment in a prime location.', 'شقة مفروشة بالكامل في موقع متميز.', 600000, '130 sqm', 2, 2, 'Furnished', 'مفروشة', 1, 1, 3, 'https://maps.google.com/?q=25.285000,55.298654', '2025-03-03 10:48:20', '2025-03-03 10:48:20'),
(14, 'PROP932', 'Apartment', 'Sale', 'High-Rise Apartment with City View', 'شقة في برج عالي بإطلالة على المدينة', 'Modern apartment with floor-to-ceiling windows.', 'شقة حديثة مع نوافذ زجاجية كاملة.', 900000, '180 sqm', 3, 3, 'Modern', 'حديثة', 1, 1, 3, 'https://maps.google.com/?q=25.283987,55.296789', '2025-03-03 10:48:20', '2025-03-03 10:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `property_amenities`
--

CREATE TABLE `property_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
('ga145r8wR7Y0me6GDeaqyPTjJ2He3nkVNZuwFQTp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaGhpQ0U3WFlteEZGZVlZbFlONW1XSTJQa1pkZEhtUnZFdnNuVW5waCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvdGVzdC1hcGkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1740912107),
('IBg5CTcoClG2VjT66aC7y1mDlKF80y5Y0f9uSTwy', NULL, '127.0.0.1', 'PostmanRuntime/7.43.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFNqVU5TbFlIM2wxZG1sZEFtS0ZpMkYya2FZdFdpR1QzZUlyRDNaNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcGkvdGVzdC1hcGkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1740912380);

-- --------------------------------------------------------

--
-- Table structure for table `suggested_amenities`
--

CREATE TABLE `suggested_amenities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suggested_amenities`
--

INSERT INTO `suggested_amenities` (`id`, `name_en`, `name_ar`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'air conditioning', 'مكيفة', 'amenities/5jSYUA64oCa6ixylaPdo64DldBWxmGRe8UQZKfAj.png', '2025-03-03 09:08:39', '2025-03-03 09:08:39'),
(2, 'water heaters', 'سخانات', 'amenities/MVly9UVTdtynSQeFlUmVu23CgiEfcdCysK6i5pnL.png', '2025-03-03 09:10:44', '2025-03-03 09:10:44'),
(5, 'garage', 'جراج', 'amenities/U6eZ2IBZSPEAWSM6tDZ3tE5nvT96iyjFkBTLPoCQ.png', '2025-03-03 09:13:09', '2025-03-03 09:13:09'),
(6, 'WI FI', 'واي فاي', 'AvrY4nEKlJxuUuUUiqNkGAQnA7p5QIHY1KeLbvOl.svg', '2025-03-03 09:13:37', '2025-03-03 10:44:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(200) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone`, `birthdate`, `gender`, `role`, `password`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hussein Sonbol', 'sehssonbol2016@gmail.com', NULL, '+201003795292', '2025-02-01', 'male', 1, '$2y$12$W5e1DLEdGky2HNP4XpBZwOTVww87U.GbyNuFqlqFQ4g.7g2bDIfAS', NULL, NULL, '2025-02-20 06:47:21', '2025-02-20 06:47:21'),
(3, 'John Doe', 'john@example.com', NULL, '123456789', '1990-01-01', 'male', 2, '$2y$12$GlVoAT9/Cip7D4faYXo3teEs5b5aKkF33gQXwEOv0siqPpKlYdtwm', NULL, NULL, '2025-02-25 05:27:06', '2025-02-25 05:27:06'),
(4, 'Provider Test', 'provider@example.com', NULL, '123456788', '1990-01-01', 'female', 3, '$2y$12$9wE6cI7cVyUT1LDhH2aNVe3Qm2UtKr6IfqURSVL93RZQrLfMMGx2e', NULL, NULL, '2025-02-25 06:36:44', '2025-02-25 06:36:44'),
(5, 'User Test', 'user@example.com', NULL, '123456787', '1990-01-01', 'male', 2, '$2y$12$s9MLOCJvXX0P.b8Ufn/nC.vqzi4ITcZOjEvdpLDTjptyfKlRnkyvy', NULL, NULL, '2025-02-25 06:37:10', '2025-02-25 06:37:10'),
(6, 'Admin Test', 'admin@example.com', NULL, '123456786', '1990-01-01', 'male', 1, '$2y$12$PPjRbP/UVCmiM1Y8VruIDuI0TJygt8iHbGQWHAhIgjjABUHl1xEca', NULL, NULL, '2025-02-25 06:37:34', '2025-02-25 06:37:34');

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
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favourites`
--
ALTER TABLE `favourites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favourites_user_id_foreign` (`user_id`),
  ADD KEY `favourites_property_id_foreign` (`property_id`);

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
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keywords_post_id_foreign` (`post_id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_country_id_foreign` (`country_id`),
  ADD KEY `projects_city_id_foreign` (`city_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `properties_referance_id_unique` (`referance_id`),
  ADD KEY `properties_user_id_foreign` (`user_id`),
  ADD KEY `properties_location_id_foreign` (`location_id`),
  ADD KEY `properties_project_id_foreign` (`project_id`);

--
-- Indexes for table `property_amenities`
--
ALTER TABLE `property_amenities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_amenities_user_id_foreign` (`user_id`),
  ADD KEY `property_amenities_property_id_foreign` (`property_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `suggested_amenities`
--
ALTER TABLE `suggested_amenities`
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
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favourites`
--
ALTER TABLE `favourites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `property_amenities`
--
ALTER TABLE `property_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suggested_amenities`
--
ALTER TABLE `suggested_amenities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favourites`
--
ALTER TABLE `favourites`
  ADD CONSTRAINT `favourites_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favourites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `keywords`
--
ALTER TABLE `keywords`
  ADD CONSTRAINT `keywords_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `properties_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_amenities`
--
ALTER TABLE `property_amenities`
  ADD CONSTRAINT `property_amenities_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_amenities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
