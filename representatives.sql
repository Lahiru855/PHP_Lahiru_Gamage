-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2022 at 08:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_representatives`
--

-- --------------------------------------------------------

--
-- Table structure for table `representatives`
--

CREATE TABLE `representatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `representatives`
--

INSERT INTO `representatives` (`id`, `name`, `email`, `telephone`, `route`, `comments`, `created_at`, `updated_at`) VALUES
(1, 'Andrew Smith', 'andrew@expo.com', '0655147147', 'Barnes Place', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue consequat malesuada. Cras varius eros quis dolor aliquam luctus. Pellentesque cursus dui id mattis pulvinar.', '2022-05-02 00:34:33', '2022-05-02 00:34:33'),
(2, 'Ben Cameran', 'camaran@expo.com', '0755258258', 'Rosmid Place', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue consequat malesuada. Cras varius eros quis dolor aliquam luctus. Pellentesque cursus dui id mattis pulvinar.', '2022-05-02 00:35:28', '2022-05-02 00:35:28'),
(3, 'Dencil Fernando', 'dencil@expo.com', '0855369369', 'Cambridge Place', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue consequat malesuada. Cras varius eros quis dolor aliquam luctus. Pellentesque cursus dui id mattis pulvinar.', '2022-05-02 00:36:09', '2022-05-02 00:36:09'),
(4, 'George Lesly', 'george@expo.com', '0955789789', 'Gregory Road', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue consequat malesuada. Cras varius eros quis dolor aliquam luctus. Pellentesque cursus dui id mattis pulvinar.', '2022-05-02 00:36:46', '2022-05-02 00:36:46'),
(5, 'Lahiru Gamage', 'glairu855@gmail.com', '0713314690', 'Barnes Place', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec congue consequat malesuada. Cras varius eros quis dolor aliquam luctus. Pellentesque cursus dui id mattis pulvinar.', '2022-05-02 00:37:40', '2022-05-02 00:37:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `representatives`
--
ALTER TABLE `representatives`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `representatives`
--
ALTER TABLE `representatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
