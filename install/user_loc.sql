-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 11:41 AM
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
-- Table structure for table `user_loc`
--

CREATE TABLE `user_loc` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `storeID` int(11) NOT NULL,
  `time_in` varchar(50) NOT NULL,
  `time_out` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_loc`
--

INSERT INTO `user_loc` (`id`, `userID`, `storeID`, `time_in`, `time_out`) VALUES
(1, 1, 1, '2021/1/11 10:11', '2021/1/11 19:30'),
(2, 3, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(3, 4, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(4, 4, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(5, 4, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(6, 1, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(7, 1, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(8, 1, 1, '2021/1/11 10:11', '2021/1/11 18:11'),
(9, 1, 1, '2021/1/11 10:11', '2021/1/11 18:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_loc`
--
ALTER TABLE `user_loc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_loc`
--
ALTER TABLE `user_loc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
