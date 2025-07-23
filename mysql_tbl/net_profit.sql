-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2025 at 09:13 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profit_list`
--

-- --------------------------------------------------------

--
-- Table structure for table `net_profit`
--

CREATE TABLE `net_profit` (
  `id` int(11) NOT NULL,
  `products` varchar(30) NOT NULL,
  `purchase_price` int(30) NOT NULL,
  `sales_price` int(30) NOT NULL,
  `unit` int(30) NOT NULL,
  `profit` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `net_profit`
--

INSERT INTO `net_profit` (`id`, `products`, `purchase_price`, `sales_price`, `unit`, `profit`) VALUES
(1, 'Product A', 6000, 10000, 100, 400000),
(2, 'Product B', 4000, 6000, 150, 300000),
(3, 'Product C', 9000, 16000, 100, 700000),
(5, 'Product E', 15000, 25000, 200, 2000000),
(6, 'Product F', 20000, 40000, 300, 6000000),
(7, 'Product G', 50000, 70000, 100, 2000000),
(8, 'Product H', 5000, 9000, 100, 200000),
(9, 'Product I', 1000, 9000, 100, 800000),
(10, 'Product J', 10000, 90000, 100, 80000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `net_profit`
--
ALTER TABLE `net_profit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `net_profit`
--
ALTER TABLE `net_profit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
