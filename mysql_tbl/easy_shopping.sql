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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `call_customer` (IN `c_name` VARCHAR(100), IN `c_email` VARCHAR(100))   BEGIN
    INSERT INTO customers(customer_name, email)
    VALUES (c_name, c_email);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `call_order` (IN `bname` VARCHAR(100), IN `pname` VARCHAR(100), IN `pquantity` INT, IN `pprice` DECIMAL(10,2), IN `cid` INT)   BEGIN
    INSERT INTO orders(brand_name, products_name, quantity, price, customer_id)
    VALUES (bname, pname, pquantity, pprice, cid);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `email`) VALUES
(1, 'Ayaan Ahmed', 'ayaan@gmail.com'),
(2, ' Karim', 'karim@gmail.com'),
(3, 'farhana Zaman', 'farhana@gmail.com'),
(4, 'Danish Hossain', 'danish@gmail.com'),
(5, 'Eva Rahman', 'evarahman@gmail.com'),
(6, 'Faisal Ahmed', 'faisal@gmail.com'),
(7, 'Ziniya Akter', 'ziniyaakter@gmail.com'),
(8, 'Hasan Chowdhury', 'hasan.chowdhury@gmail.com'),
(9, 'Ishita Khan', 'ishita.khan@gmail.com'),
(10, 'Jamal Uddin', 'jamal.uddin@gmail.com'),
(15, 'Murtasim Khan', 'mk@gmail.com'),
(16, 'Isha Khan', 'isha@gmail.com'),
(21, 'Meerab Khan', 'meerab@gmail.com');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
