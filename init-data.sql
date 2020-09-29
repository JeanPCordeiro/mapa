-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 29, 2020 at 08:43 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jean Pierre Cordeiro', 'jeanpierre.cordeiro@gmail.com', NULL, '$2y$10$dYzSS9OBHT.5ub2sO7YaPesMrqMWNTPkLipzWs9UPYi/DhdUstjZS', NULL, '2020-09-27 14:30:19', '2020-09-27 14:30:19');


--
-- Database: `mapa`
--

-- --------------------------------------------------------

--
-- Table structure for table `collectes`
--

CREATE TABLE `collectes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `factory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `work` double(8,2) NOT NULL,
  `break` double(8,2) NOT NULL,
  `rate` double(8,2) NOT NULL,
  `ytd` double(8,2) NOT NULL,
  `state` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collectes`
--

INSERT INTO `collectes` (`id`, `created_at`, `updated_at`, `date`, `factory`, `line`, `work`, `break`, `rate`, `ytd`, `state`) VALUES
(32, NULL, NULL, '202008', 'BVS', 'CE', 978.50, 204.51, 20.90, 0.00, 0),
(33, NULL, NULL, '202007', 'BVS', 'CE', 5110.67, 248.00, 4.85, 0.00, 2),
(34, NULL, NULL, '202006', 'BVS', 'CE', 5220.00, 323.35, 6.19, 0.00, 2),
(35, NULL, NULL, '202005', 'BVS', 'CE', 5394.00, 522.33, 9.68, 0.00, 2),
(36, NULL, NULL, '202004', 'BVS', 'CE', 5220.00, 491.00, 9.40, 0.00, 2),
(37, NULL, NULL, '202003', 'BVS', 'CE', 5394.00, 377.32, 6.99, 0.00, 2),
(38, NULL, NULL, '202002', 'BVS', 'CE', 5046.00, 557.66, 11.05, 0.00, 2),
(39, NULL, NULL, '202001', 'BVS', 'CE', 5394.00, 463.32, 8.58, 0.00, 2),
(40, NULL, NULL, '201912', 'BVS', 'CE', 5394.00, 386.51, 7.16, 0.00, 2),
(41, NULL, NULL, '201911', 'BVS', 'CE', 5220.00, 480.51, 9.20, 0.00, 2),
(42, NULL, NULL, '201910', 'BVS', 'CE', 5394.00, 750.15, 13.90, 0.00, 2),
(43, NULL, NULL, '201909', 'BVS', 'CE', 2654.16, 330.66, 12.45, 0.00, 2),
(44, NULL, NULL, '202008', 'BVS', 'CV', 506.60, 140.00, 27.63, 0.00, 1),
(45, NULL, NULL, '202007', 'BVS', 'CV', 3362.64, 187.00, 5.56, 0.00, 2),
(46, NULL, NULL, '202006', 'BVS', 'CV', 3468.19, 273.00, 7.87, 0.00, 2),
(47, NULL, NULL, '202005', 'BVS', 'CV', 3554.56, 308.00, 8.66, 0.00, 2),
(48, NULL, NULL, '202004', 'BVS', 'CV', 3453.05, 293.00, 8.48, 0.00, 2),
(49, NULL, NULL, '202003', 'BVS', 'CV', 3525.37, 210.00, 5.95, 0.00, 2),
(50, NULL, NULL, '202002', 'BVS', 'CV', 3325.21, 265.00, 7.96, 0.00, 2),
(51, NULL, NULL, '202001', 'BVS', 'CV', 3584.26, 318.00, 8.87, 0.00, 2),
(52, NULL, NULL, '201912', 'BVS', 'CV', 3555.19, 313.00, 8.80, 0.00, 2),
(53, NULL, NULL, '201911', 'BVS', 'CV', 3428.22, 407.00, 11.87, 0.00, 2),
(54, NULL, NULL, '201910', 'BVS', 'CV', 3563.90, 707.00, 19.83, 0.00, 2),
(55, NULL, NULL, '201909', 'BVS', 'CV', 252.87, 79.00, 31.24, 0.00, 2),
(56, NULL, NULL, '202008', 'SHL', 'CE', 360.00, 29.00, 8.06, 4.10, 2),
(57, NULL, NULL, '202007', 'SHL', 'CE', 1374.00, 48.00, 3.49, 3.78, 2),
(58, NULL, NULL, '202006', 'SHL', 'CE', 1350.00, 24.00, 1.78, 3.70, 2),
(59, NULL, NULL, '202005', 'SHL', 'CE', 1395.00, 33.00, 2.37, 3.77, 2),
(60, NULL, NULL, '202004', 'SHL', 'CE', 0.00, 0.00, 0.00, 3.79, 2),
(61, NULL, NULL, '202003', 'SHL', 'CE', 810.00, 46.00, 5.68, 4.22, 2),
(62, NULL, NULL, '202002', 'SHL', 'CE', 1305.00, 4.00, 0.31, 2.33, 2),
(63, NULL, NULL, '202001', 'SHL', 'CE', 1350.00, 59.00, 4.37, 4.37, 2),
(64, NULL, NULL, '201912', 'SHL', 'CE', 1065.00, 59.00, 5.54, 0.00, 2),
(65, NULL, NULL, '201911', 'SHL', 'CE', 1350.00, 60.00, 4.44, 0.00, 2),
(66, NULL, NULL, '201910', 'SHL', 'CE', 1395.00, 65.00, 4.66, 0.00, 2),
(67, NULL, NULL, '201909', 'SHL', 'CE', 1350.00, 73.00, 5.41, 0.00, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collectes`
--
ALTER TABLE `collectes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collectes`
--
ALTER TABLE `collectes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

  