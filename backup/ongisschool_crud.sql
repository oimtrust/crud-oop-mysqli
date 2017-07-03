-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 08, 2017 at 03:18 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ongisschool_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `author`, `created_at`, `updated_at`) VALUES
(18, 'Konten Web', 'Kontent itu tidak boleh di isi sekedar LOREM IPSUM DOLOR SIT AMET. Kecuali kalau males ngetik', 'Oim', '2017-06-08 05:22:34', '2017-06-08 13:14:54'),
(19, 'Ongis School batch 1', 'Perkumpulan komunitas yang memberikan workshop secara murah dan mudah. hassek', 'Oim', '2017-06-08 08:49:17', '2017-06-08 08:49:17'),
(23, 'Ongis School Batch 2', 'Sekumpulan cewek dan cowok belajar ngoding', 'Oim', '2017-06-08 13:10:57', '2017-06-08 13:10:57'),
(24, 'Ongis School Batch 3', 'Masih on going... coming soon.... sabar aja buat nunggu', 'Oim', '2017-06-08 13:10:57', '2017-06-08 13:10:57'),
(25, 'CRUD', 'singkatan dari Create, Read, Update, dan Delete. tapi jangan delete cintaku padamu..... ANJAY', 'Wong Ganteng', '2017-06-08 13:13:09', '2017-06-08 13:13:09'),
(26, 'MVC', 'MVC itu singkatan dari.... emzz........ lek gak salah... Model, View, Controller.... lek salah yo berarti Mangan Vakso Cak lontong', 'Paijo', '2017-06-08 13:13:09', '2017-06-08 13:13:09'),
(27, 'Hello World', 'Kalimat pertama kali belajar ngoding', 'Cantik', '2017-06-08 13:15:52', '2017-06-08 13:15:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
