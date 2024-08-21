-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 09:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wdpf60`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_details` varchar(400) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `product_quantity` smallint(6) NOT NULL,
  `product_catagory` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_details`, `product_price`, `product_quantity`, `product_catagory`) VALUES
(2, 'mouse', 'some mouses', '8', 220, 1),
(12, 'computers', '5 pics computers', '5', 19000, 2),
(13, 'book', 'some books', '85', 196, 3),
(14, 'light', 'lights and lights', '114', 60, 4),
(15, 'fan', 'some fan', '5', 2800, 5),
(16, 'pen', 'pen and pencil', '8', 42, 6),
(17, 'chairs', 'details another chairs', '480', 65, 7),
(18, 'books', 'books and pen', '65', 130, 8),
(19, 'books', 'books and pen', '65', 130, 9),
(20, 'books', 'books and pen', '65', 130, 10),
(21, 'abc', 'thd', '65', 654, 11),
(22, 'abc', 'thd', '65', 654, 0),
(24, 'abc', 'fghd', '42', 445, 2),
(25, 'mobile', 'accessories', '36500', 7, 1),
(26, 'ips', 'accessories', '3500', 9, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
