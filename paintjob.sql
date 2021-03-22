-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 09:48 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paintjob`
--
CREATE DATABASE IF NOT EXISTS `paintjob` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `paintjob`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `platenum` varchar(25) NOT NULL,
  `currentcolor` varchar(25) NOT NULL,
  `targetcolor` varchar(25) NOT NULL,
  `remark` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `customer`
--

TRUNCATE TABLE `customer`;
--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `platenum`, `currentcolor`, `targetcolor`, `remark`) VALUES
(21, 'XSA 723', 'blue', 'green', 'Queue'),
(22, 'ABS 092', 'red', 'blue', 'Queue'),
(23, 'JSL 110', 'red', 'green', 'Queue'),
(24, 'XHJ 133', 'green', 'blue', 'Queue'),
(25, 'HSU 005', 'blue', 'red', 'Queue'),
(26, 'KKL 989', 'blue', 'green', 'Queue'),
(27, 'HJR 279', 'red', 'blue', 'Queue'),
(28, 'FGL 116', 'red', 'green', 'Queue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
