-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 11:40 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userspice`
--

-- --------------------------------------------------------

--
-- Table structure for table `generate_qr`
--

CREATE TABLE `generate_qr` (
  `id` int(11) NOT NULL,
  `storeid` int(11) NOT NULL,
  `codehash` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `generate_qr`
--

INSERT INTO `generate_qr` (`id`, `storeid`, `codehash`) VALUES
(1, 1, 'C2FDACC7B252104582A20C6F3F8161B9E6CC3BE631E9495D1474F9041EF04395'),
(2, 2, 'asdasda sdas das das d'),
(3, 3, 'masmasmasm'),
(4, 4, 'kasdkadkadk a kdadkadk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `generate_qr`
--
ALTER TABLE `generate_qr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `generate_qr`
--
ALTER TABLE `generate_qr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
