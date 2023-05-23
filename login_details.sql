-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2023 at 07:34 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `username`, `password`, `email`) VALUES
(1, 'ITheGMC', 'Chandu@123', 'chandugollakoti2000@gmail.com'),
(2, 'Predator', 'Venkat098', 'balaji.venkat098@gmail.com'),
(3, 'ICON', 'AjayRaj@666', 'ajayrajgoggala@gmail.com'),
(4, 'Chandu', 'Chandu@123', 'chandugollakoti2002@gmail.com'),
(6, 'WillSmith', 'qwert', 'will.smith@gmail.com'),
(7, 'SreePriya', 'Padma@123', 'priyachodisetti3333@gmail.com'),
(8, 'Loki_17', 'lokparu@17', 'ylokesloki23@gmail.com'),
(9, 'Nalini', 'Chandu@123', 'nalini.poornima@gmail.com'),
(10, 'OTLUCKYFF', '0E103D', 'althiloknath1961@gmail.com'),
(11, 'LUCKY', 'LoknathAlthi', 'otluck17@gmail.com'),
(12, 'Priya_', 'Sree@123', 'priyachodisetty3333@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `username_2` (`username`),
  ADD UNIQUE KEY `username_3` (`username`),
  ADD UNIQUE KEY `username_4` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
