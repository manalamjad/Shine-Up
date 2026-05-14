-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2026 at 03:15 PM
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
-- Database: `shineup_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `city`, `address`, `total_amount`, `created_at`) VALUES
(1, 'info rexa', '0321456987', 'inforexa.youtube@gmail.com', 'karachi', 'zxcvbnm,lkjhgfdsa234567', 700, '2026-05-13 03:44:46'),
(2, 'info rexa', '321456987', 'inforexa.youtube@gmail.com', 'karachi', 'zxcvbnm,lkjhgfdsa234567', 2050, '2026-05-13 03:45:22'),
(3, 'info rexa', '321456987', 'inforexa.youtube@gmail.com', 'karachi', 'zxcvbnm,lkjhgfdsa234567', 350, '2026-05-13 03:48:06'),
(4, 'info rexa', '321456987', 'inforexa.youtube@gmail.com', 'karachi', 'zxcvbnm,lkjhgfdsa234567', 300, '2026-05-13 03:49:33'),
(5, 'info rexa', '321456987', 'inforexa.youtube@gmail.com', 'karachi', 'zxcvbnm,lkjhgfdsa234567', 350, '2026-05-13 04:06:02'),
(6, 'hunain nasir', '03182684389', 'hunainnasir8901@gmail.com', 'karachi', 'korangi crossing decter f house no fr 11', 300, '2026-05-13 09:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `quantity`, `price`) VALUES
(1, 1, 5, 2, 350),
(2, 2, 5, 1, 350),
(3, 2, 7, 1, 300),
(4, 2, 8, 1, 400),
(5, 2, 9, 2, 500),
(6, 3, 5, 1, 350),
(7, 4, 7, 1, 300),
(8, 5, 5, 1, 350),
(9, 6, 7, 1, 300);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `description`, `created_at`) VALUES
(5, 'phenyl', 350.00, 'dishwasher.jpg', 'Deep Cleaning With Freshness', '2026-05-11 22:54:10'),
(7, 'Hand Wash', 300.00, 'handwash.jpg', 'Gentle hand wash for soft and clean hands', '2026-05-11 22:54:10'),
(8, 'Glass Cleaner', 400.00, 'glasscleaner.jpg', 'Streak-free glass cleaning solution', '2026-05-11 22:54:10'),
(9, 'Dish Washer', 500.00, 'dishwasher1.jpg', 'Premium dish washer with fresh fragrance', '2026-05-13 01:16:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
