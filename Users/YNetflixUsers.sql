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
-- Database: `YNetflixUsers`
--

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `deleted`, `email`, `name`, `address`, `country`, `status`) VALUES
(1, NULL, 'hello@anthony.com', 'Anthony', 'Ynov Paris Campus', 'France', 'impaye'),
(2, NULL, 'hello@jean.com', 'Jean', 'Ynov Paris Campus', 'France', 'disable'),
(3, NULL, 'hello@pierre.com', 'Pierre', 'Ynov Paris Campus', 'France', 'impaye'),
(4, NULL, 'ylane@example.com', 'Ylane', 'Chez Moi', 'FRANCE', 'user'),
(5, NULL, 'hello@anthony.com', 'AnthoParis', 'Paris', 'France', 'user'),
(6, NULL, 'hello@anthony.com', 'AnthoParis', 'Paris', 'France', 'user'),
(7, NULL, 'hello@anthony.com', 'AnthoParis', 'Paris', 'France', 'user'),
(8, NULL, '3', 'Yo', 'Paris', 'Paris', 'user'),
(9, NULL, '3', 'Yo', 'Paris', 'Paris', 'user'),
(10, NULL, '3', 'Yo', 'Paris', 'Paris', 'user'),
(11, NULL, '3', 'Yo', 'Paris', 'Paris', 'user'),
(12, NULL, '3', 'Yo', 'Paris', 'Paris', 'user'),
(13, NULL, 'hey@hey', 'Antho', 'Paris', 'Paris', 'user'),
(14, NULL, 'joe@example.com', 'Joe', 'Paris', 'Paris', 'blocked');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
