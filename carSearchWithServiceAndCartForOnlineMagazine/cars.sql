-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2017 at 07:37 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL,
  `mark_id` int(11) DEFAULT NULL,
  `engine_id` int(11) DEFAULT NULL,
  `color_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `model_id`, `mark_id`, `engine_id`, `color_id`, `price`) VALUES
(1, 1, 1, 1, 1, 100),
(2, 1, 1, 1, 1, 200),
(3, 1, 1, 1, 1, 5000),
(4, 1, 1, 1, 1, 10000),
(5, 1, 1, 1, 1, 20000),
(6, 1, 11, 1, 1, 30000),
(7, 1, 4, 1, 1, 2000),
(8, 1, 5, 1, 1, 3000),
(9, 1, 1, 1, 1, 4000),
(10, 1, 5, 1, 1, 4444),
(11, 1, 1, 1, 3, 5673),
(12, 1, 1, 1, 1, 60000),
(13, 1, 1, 1, 1, 70000),
(14, 1, 1, 1, 1, 5010),
(15, 1, 1, 1, 1, 1000),
(16, 1, 1, 1, 1, 2500),
(17, 3, 3, 1, 1, 25000),
(18, 5, 5, 1, 1, 3355),
(19, 5, 5, 2, 6, 999),
(20, 10, 6, 1, 1, 9999),
(21, 20, 8, 3, 7, 15000),
(22, 1, 1, 1, 6, 17000),
(23, 7, 5, 2, 5, 20000),
(24, 12, 3, 1, 5, 21000),
(25, 7, 5, 2, 7, 22900),
(26, 10, 6, 3, 5, 55555),
(27, 18, 7, 2, 3, 66666),
(28, 18, 7, 4, 3, 7750),
(29, 10, 6, 3, 3, 4000),
(30, 7, 5, 4, 5, 9382),
(31, 7, 5, 3, 3, 5964),
(32, 10, 6, 4, 3, 8530),
(33, 10, 6, 2, 3, 11111),
(35, 2, 1, 1, 1, 16000),
(36, 23, 15, 1, 10, 50000),
(37, 23, 15, 1, 10, 5000),
(38, 23, 15, 1, 10, 5000),
(39, 17, 2, 2, 9, 3000),
(40, 2, 1, 1, 1, 3333),
(41, 2, 1, 2, 6, 5600);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'Бял'),
(6, 'Жълт'),
(9, 'Зелен'),
(5, 'Кафяв'),
(8, 'Лилав'),
(10, 'Оранжев'),
(3, 'Сив металик'),
(7, 'Син'),
(2, 'Червен'),
(4, 'Черен');

-- --------------------------------------------------------

--
-- Table structure for table `engine`
--

CREATE TABLE `engine` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `engine`
--

INSERT INTO `engine` (`id`, `name`) VALUES
(1, 'Бензинов'),
(2, 'Дизелов'),
(3, 'Електрически'),
(4, 'Хибриден');

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mark`
--

INSERT INTO `mark` (`id`, `name`) VALUES
(1, 'Хонда'),
(2, 'Тойота'),
(3, 'BMV'),
(4, 'Мерцедес'),
(5, 'Опел'),
(6, 'Форд'),
(7, 'Нисан'),
(8, 'Мазда'),
(9, 'VW'),
(10, 'Volvo'),
(11, 'Ауди'),
(14, 'Дачия'),
(15, 'Chevrolet');

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `mark_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `mark_id`) VALUES
(1, 'Civic', 1),
(2, 'Accord', 1),
(3, 'A2', 11),
(4, 'A3', 11),
(5, 'A4', 11),
(6, 'Vеctra', 5),
(7, 'Astra', 5),
(8, 'Focus', 6),
(9, 'C-Max', 6),
(10, 'Escort', 6),
(11, '518', 3),
(12, 'M3', 3),
(13, 'CL230', 4),
(14, 'E220', 4),
(15, 'Golf', 9),
(16, 'Auris', 2),
(17, 'Corolla', 2),
(18, 'GT-R', 7),
(19, 'MX-5', 8),
(20, 'MX-6', 8),
(21, '240', 10),
(22, 'Сандеро', 14),
(23, 'Astro', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_773DE69D4290F12B` (`mark_id`),
  ADD KEY `IDX_773DE69DE78C9C0A` (`engine_id`),
  ADD KEY `IDX_773DE69D7ADA1FB5` (`color_id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_665648E95E237E06` (`name`);

--
-- Indexes for table `engine`
--
ALTER TABLE `engine`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_E8A81A8D5E237E06` (`name`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `engine`
--
ALTER TABLE `engine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `FK_773DE69D4290F12B` FOREIGN KEY (`mark_id`) REFERENCES `mark` (`id`),
  ADD CONSTRAINT `FK_773DE69D7ADA1FB5` FOREIGN KEY (`color_id`) REFERENCES `color` (`id`),
  ADD CONSTRAINT `FK_773DE69DE78C9C0A` FOREIGN KEY (`engine_id`) REFERENCES `engine` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
