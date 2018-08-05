-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2017 at 12:33 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `color`) VALUES
(5, 'Krasimir', 'Stoev', 'black'),
(6, 'Milen', 'Atanasov', 'yellow'),
(8, 'Aleksandar', 'Karagiozov', 'yellow'),
(9, 'Ana', 'Belcheva', 'white'),
(10, 'Lora', 'Dimitrova', 'blue'),
(11, 'Lubomira', 'Strehina', 'black'),
(12, 'Martin', 'Cvetanov', 'black'),
(13, 'Ivan', 'Aleksandrov', 'red'),
(15, 'Ivan', 'Draganov', 'blue'),
(16, 'Ivan', 'Apostolov', 'green'),
(17, 'test', 'test', 'black'),
(18, 'Nikolay', 'Mekereshki', 'red'),
(19, 'Krasimi', 'Kirqkov', 'blue'),
(20, 'Nedqlko', 'Jelev', 'blue'),
(21, 'Dimityr', 'Kerin', 'blue'),
(22, 'Angel', 'Ivanov', 'blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
