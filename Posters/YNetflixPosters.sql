-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 10, 2022 at 11:23 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `YNetflixPosters`
--

-- --------------------------------------------------------

--
-- Table structure for table `Posters`
--

CREATE TABLE `Posters` (
  `id` int(11) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `link` varchar(255) NOT NULL,
  `mediaId` int(11) NOT NULL,
  `schedule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Posters`
--

INSERT INTO `Posters` (`id`, `deleted`, `link`, `mediaId`, `schedule`) VALUES
(1, NULL, 'http://localhost:8888/YNetflix/Posters/Images/casa-tirs.jpg', 1, 'day'),
(2, NULL, 'http://localhost:8888/YNetflix/Posters/Images/equipe-professeur.jpg', 1, 'night'),
(3, '2022-03-31 15:44:34', 'test.jpg', 5, 'pm'),
(4, NULL, 'http://localhost:8888/YNetflix/Posters/Images/breaking-bad.jpg', 2, 'day'),
(5, NULL, 'http://localhost:8888/YNetflix/Posters/Images/white.jpg', 2, 'night'),
(6, NULL, 'http://localhost:8888/YNetflix/Posters/Images/squidgame.jpeg', 3, 'day'),
(7, NULL, 'http://localhost:8888/YNetflix/Posters/Images/characters-squid.jpg', 3, 'night'),
(8, NULL, 'http://localhost:8888/YNetflix/Posters/Images/uncharted.jpeg', 4, 'day'),
(9, NULL, 'http://localhost:8888/YNetflix/Posters/Images/nathan-combat.jpg', 4, 'night');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Posters`
--
ALTER TABLE `Posters`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Posters`
--
ALTER TABLE `Posters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
