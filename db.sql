-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 30, 2024 at 02:12 PM
-- Server version: 5.7.39
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `status` enum('0','1') NOT NULL,
  `show_in_menu` enum('0','1') NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `order_id`, `title`, `slug`, `keywords`, `description`, `content`, `status`, `show_in_menu`, `created_at`, `updated_at`) VALUES
(1, 0, 'Kurumsal', 'hakkimizda', 'kurumsal anahtar kelimeleri', 'Kurumsal açıklamaları', '<font color=\"#000000\" style=\"background-color: rgb(255, 255, 0);\">Kurumsal detayları</font>', '1', '1', '2024-04-18 12:03:13', '2024-04-18 12:03:48'),
(2, 1, 'Hakkımızda', 'hakkimizda', 'hakkimizda anahtar kelimeleri', 'Hakkımızda açıklamaları', 'Hakkımızda detayları', '1', '1', '2024-04-18 12:03:13', '2024-04-18 14:57:22'),
(3, 2, 'Vizyon & Misyon', 'vizyon-ve-misyon', 'Vizyon anahtar kelimeleri', 'Vizyon açıklamaları', 'Vizyon detayları', '1', '1', '2024-04-18 12:03:13', '2024-04-18 12:03:48'),
(4, 1, 'Portföy', 'portfoy', '', 'projelerimiz vs.', 'projeler detay', '1', '1', '2024-04-18 15:02:54', NULL),
(5, 3, 'İnsan Kaynakları', 'insan-kaynaklari', '', 'İnsan Kaynakları', 'İnsan Kaynakları', '1', '1', '2024-04-18 15:21:13', NULL),
(6, 4, 'Basında Biz', 'basinda-biz', '', 'Basında Biz', 'Basında Biz', '1', '1', '2024-04-18 15:21:37', NULL),
(7, 5, 'İletişim', 'iletisim', 'iletişim anahtar kelimeleri', 'İletişim', 'İletişim', '1', '0', '2024-04-30 01:05:06', '2024-04-30 01:05:06');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_key` varchar(255) NOT NULL,
  `item_val` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `item_name`, `item_key`, `item_val`) VALUES
(1, 'Site Başlığı', 'site_title', 'Blog'),
(2, 'Site Anahtar Kelimeleri', 'site_keywords', 'blog, mvc'),
(3, 'Site Kısa Açıklama', 'site_description', 'A PHP OOP MVC Project'),
(4, 'Şirket E-posta Adresi', 'business_email', 'info@ulucan.net'),
(5, 'Şirket Telefon Numarası', 'business_tel', '0552 852 14 96'),
(6, 'Şirket Adresi', 'business_address', 'Yenimahalle/Ankara'),
(7, 'Üst Menü Logosu', 'site_header_logo_path', 'public/admin/images/logo.svg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  `mobile_number` varchar(255) DEFAULT NULL,
  `is_email_verified` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0: not verified, 1: verified',
  `remember_token` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '0' COMMENT '0: inactive, 1: active',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `username`, `password`, `email_address`, `mobile_number`, `is_email_verified`, `remember_token`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '$2y$10$5BxNPsi93sL75pLVhxFofu2uFn.tP5qhEwN/fdyU4S3LN7iP6ZxJ.', '1@1.com', '1', '0', NULL, 'public/admin/images/faces/face28.jpg', '0', '2024-04-26 17:15:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
