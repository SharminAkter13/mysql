-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2025 at 08:21 AM
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
-- Database: `evidence_db`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_manufacturer` (IN `m_name` VARCHAR(50), IN `m_address` VARCHAR(100), IN `m_contact` VARCHAR(50))   BEGIN
    INSERT INTO Manufacturer (name, address, contact_no)
    VALUES (m_name, m_address, m_contact);
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_product` (IN `p_name` VARCHAR(50), IN `p_price` INT(5), IN `p_mid` INT(10))   BEGIN
    INSERT INTO Product (name, price, manufacturer_id)
    VALUES (p_name, p_price, p_mid);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `contact_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(8, 'HP', 'Dhaka', '1452251254'),
(9, 'Redmi', 'Dhaka', '12452251254'),
(12, 'A4 Tech', 'Rajshahi', '01478652575'),
(13, 'Sony', 'Rajshahi', '01478652575');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `after_manufacturer_delete` AFTER DELETE ON `manufacturer` FOR EACH ROW BEGIN
    DELETE FROM product WHERE manufacturer_id  = OLD.id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `price` int(5) DEFAULT NULL,
  `manufacturer_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacturer_id`) VALUES
(14, 'Laptop', 50000, 8),
(15, 'Mobile', 15000, 9),
(16, 'Pendrive', 1500, 8),
(21, 'key board', 2000, 12);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view`
-- (See below for the actual view)
--
CREATE TABLE `product_view` (
`id` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
,`name` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_view_table`
-- (See below for the actual view)
--
CREATE TABLE `product_view_table` (
`id` int(11)
,`product_name` varchar(50)
,`price` int(5)
,`manufacturer_id` int(10)
,`name` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `product_view`
--
DROP TABLE IF EXISTS `product_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view`  AS SELECT `p`.`id` AS `id`, `p`.`name` AS `product_name`, `p`.`price` AS `price`, `p`.`manufacturer_id` AS `manufacturer_id`, `m`.`name` AS `name` FROM (`product` `p` join `manufacturer` `m` on(`p`.`manufacturer_id` = `m`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `product_view_table`
--
DROP TABLE IF EXISTS `product_view_table`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_view_table`  AS SELECT `product_view`.`id` AS `id`, `product_view`.`product_name` AS `product_name`, `product_view`.`price` AS `price`, `product_view`.`manufacturer_id` AS `manufacturer_id`, `product_view`.`name` AS `name` FROM `product_view` WHERE `product_view`.`price` > 5000 ORDER BY `product_view`.`price` ASC ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_ibfk_1` (`manufacturer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`manufacturer_id`) REFERENCES `manufacturer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
