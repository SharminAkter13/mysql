-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2025 at 03:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `brand_name` varchar(50) NOT NULL,
  `products_name` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `customer_id` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `brand_name`, `products_name`, `quantity`, `price`, `customer_id`) VALUES
(1, 'Dell', 'Laptop', 2, 75000.00, 1),
(2, 'Samsung', 'Refrigerator', 1, 55000.00, 2),
(3, 'Sony', 'Smart TV', 1, 85000.00, 3),
(4, 'Gree', 'Air Conditioner', 1, 65000.00, 4),
(5, 'Panasonic', 'Microwave Oven', 2, 15000.00, 1),
(6, 'Whirlpool', 'Washing Machine', 1, 42000.00, 3),
(7, 'JBL', 'Bluetooth Speaker', 3, 8000.00, 2),
(8, 'Samsung', 'Smartphone', 2, 78000.00, 4),
(9, 'Apple', 'Tablet', 1, 95000.00, 2),
(10, 'Canon', 'Digital Camera', 1, 55000.00, 1),
(11, 'LG', 'Home Theater System', 1, 60000.00, 3),
(12, 'Sony', 'Gaming Console', 1, 75000.00, 2),
(13, 'Dell', 'laptop', 1, 60000.00, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_customer` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
