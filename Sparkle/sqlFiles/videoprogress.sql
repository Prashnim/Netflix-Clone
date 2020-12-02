-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 04:18 PM
-- Server version: 8.0.16
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkle`
--

-- --------------------------------------------------------

--
-- Table structure for table `videoprogress`
--

CREATE TABLE `videoprogress` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `videoId` int(11) NOT NULL,
  `progress` int(11) NOT NULL DEFAULT '0',
  `finished` tinyint(4) NOT NULL DEFAULT '0',
  `dateModified` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `videoprogress`
--

INSERT INTO `videoprogress` (`id`, `username`, `videoId`, `progress`, `finished`, `dateModified`) VALUES
(1, 'test', 1303, 0, 0, '2020-10-26 01:06:57'),
(2, 'test', 1261, 2, 1, '2020-10-26 11:16:22'),
(3, 'test', 1108, 0, 1, '2020-10-31 07:34:41'),
(4, 'test', 1110, 0, 1, '2020-10-31 08:07:34'),
(5, 'test', 1111, 3, 0, '2020-10-31 08:11:58'),
(6, 'test', 1112, 0, 1, '2020-10-31 08:12:05'),
(7, 'test', 1113, 0, 1, '2020-10-31 08:16:30'),
(8, 'test', 1114, 0, 1, '2020-10-31 08:16:41'),
(9, 'test', 1267, 0, 1, '2020-10-31 08:45:43'),
(10, 'test', 352, 0, 1, '2020-11-01 02:54:19'),
(11, 'test', 364, 0, 1, '2020-10-31 08:47:28'),
(12, 'test', 365, 0, 1, '2020-10-31 08:48:47'),
(13, 'test', 356, 0, 1, '2020-10-31 08:51:43'),
(14, 'test', 366, 0, 1, '2020-11-01 02:47:58'),
(15, 'test', 1265, 0, 1, '2020-10-31 08:58:19'),
(16, 'test', 1266, 0, 1, '2020-10-31 08:59:42'),
(17, 'test', 1731, 0, 1, '2020-10-31 08:59:48'),
(18, 'test', 558, 0, 0, '2020-11-01 03:38:47'),
(19, 'test', 1221, 0, 1, '2020-11-02 15:18:36'),
(20, 'test1', 909, 0, 1, '2020-11-07 15:42:15'),
(21, 'test1', 1731, 0, 1, '2020-11-07 15:42:23'),
(22, 'test1', 702, 0, 1, '2020-11-16 20:59:18'),
(23, 'test1', 558, 0, 1, '2020-11-18 21:02:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `videoprogress`
--
ALTER TABLE `videoprogress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `videoprogress`
--
ALTER TABLE `videoprogress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
