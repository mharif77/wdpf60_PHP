-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2024 at 10:34 AM
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
-- Database: `evidence`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `add_manufacturer` (IN `name` VARCHAR(50), IN `addresss` VARCHAR(100), IN `contact_no` VARCHAR(50))   INSERT INTO manufacturer (id,name,address,contact_no) VALUES (NULL,name,address,contact_no)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `log_book`
--

CREATE TABLE `log_book` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `event` enum('INSERT','UPDATE','DELETE') NOT NULL,
  `event_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_book`
--

INSERT INTO `log_book` (`id`, `product_name`, `event`, `event_time`) VALUES
(2, 'sony 32\" tv', 'INSERT', '2024-08-24 06:57:05'),
(4, 'sony 32\" tv', 'INSERT', '2024-08-25 03:05:46'),
(5, 'samsung A23 phone', 'DELETE', '2024-08-25 03:09:38'),
(6, 'philips 1 ton ac', 'DELETE', '2024-08-25 07:03:03'),
(7, 'samsung A23 phone', 'DELETE', '2024-08-25 07:39:33'),
(8, 'samsung A23 phone', 'DELETE', '2024-08-25 07:39:33'),
(9, 'sony 32\" tvfggh', 'INSERT', '2024-08-25 07:40:53'),
(10, 'sony 32\" tvfggh', 'UPDATE', '2024-08-25 07:41:39'),
(11, 'sony 32\" tvfggh', 'DELETE', '2024-08-25 07:42:02'),
(12, 'sony 32\" tv', 'UPDATE', '2024-08-25 08:26:30'),
(13, 'sony 32\" tv', 'DELETE', '2024-08-25 08:26:45'),
(14, 'RFL  light', 'UPDATE', '2024-08-25 08:27:35'),
(15, 'RFL  light', 'DELETE', '2024-08-25 08:27:46');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `name`, `address`, `contact_no`) VALUES
(6, 'shafin', '', '016795047643');

--
-- Triggers `manufacturer`
--
DELIMITER $$
CREATE TRIGGER `manufacture_delete` AFTER DELETE ON `manufacturer` FOR EACH ROW DELETE FROM product
WHERE product.manufacture_id=old.id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_bk`
--

CREATE TABLE `manufacturer_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manufacturer_bk`
--

INSERT INTO `manufacturer_bk` (`id`, `name`, `address`, `contact_no`) VALUES
(1, 'sony', 'dhaka', '0167950246465'),
(2, 'walton', 'savar', '01679504642'),
(3, 'philips', 'gazipur', '01679504642'),
(4, 'samsung', 'chittagong', '01679504646'),
(5, 'RFL', 'badda', '01679504650');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacture_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `manufacture_id`) VALUES
(1, 'walton fan', 50000, 1),
(2, 'sony 32\" tv', 50000, 1),
(5, 'philips 1 ton ac', 65000, 3),
(13, 'sony 32\" tv', 50000, 1),
(14, 'sony 32\" tv', 50000, 1),
(15, 'philips 1 ton ac', 65000, 3),
(18, 'philips 1 ton ac', 65000, 3);

--
-- Triggers `product`
--
DELIMITER $$
CREATE TRIGGER `product_DELETE` AFTER DELETE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL, old.name, "DELETE" , NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_UPDATE` AFTER UPDATE ON `product` FOR EACH ROW INSERT INTO log_book VALUES(NULL, old.name, "UPDATE" , NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `product_insert` AFTER INSERT ON `product` FOR EACH ROW INSERT INTO log_book VALUES
(NULL, new.name, "INSERT" , NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_5000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_5000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacture_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_6000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_6000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacture_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_10000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_10000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacture_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_30000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_30000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacture_id` int(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_above_50000_price`
-- (See below for the actual view)
--
CREATE TABLE `product_above_50000_price` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacture_id` int(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `product_bk`
--

CREATE TABLE `product_bk` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `manufacture_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_bk`
--

INSERT INTO `product_bk` (`id`, `name`, `price`, `manufacture_id`) VALUES
(1, 'walton fan', 50000, 1),
(2, 'sony 32\" tv', 50000, 1),
(5, 'philips 1 ton ac', 65000, 3),
(11, 'samsung A23 phone', 25000, 4),
(12, 'RFL  light', 6500, 5);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_list`
-- (See below for the actual view)
--
CREATE TABLE `product_list` (
`id` int(11)
,`name` varchar(50)
,`price` int(5)
,`manufacture_id` int(10)
);

-- --------------------------------------------------------

--
-- Structure for view `product_above_5000_price`
--
DROP TABLE IF EXISTS `product_above_5000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_5000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 5000500050005000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_6000_price`
--
DROP TABLE IF EXISTS `product_above_6000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_6000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 60006000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_10000_price`
--
DROP TABLE IF EXISTS `product_above_10000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_10000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 10000100001000010000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_30000_price`
--
DROP TABLE IF EXISTS `product_above_30000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_30000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 30000300003000030000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_above_50000_price`
--
DROP TABLE IF EXISTS `product_above_50000_price`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_above_50000_price`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 50000500005000050000  ;

-- --------------------------------------------------------

--
-- Structure for view `product_list`
--
DROP TABLE IF EXISTS `product_list`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_list`  AS SELECT `product`.`id` AS `id`, `product`.`name` AS `name`, `product`.`price` AS `price`, `product`.`manufacture_id` AS `manufacture_id` FROM `product` WHERE `product`.`price` > 90009000  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_book`
--
ALTER TABLE `log_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_bk`
--
ALTER TABLE `product_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_book`
--
ALTER TABLE `log_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `manufacturer_bk`
--
ALTER TABLE `manufacturer_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_bk`
--
ALTER TABLE `product_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
