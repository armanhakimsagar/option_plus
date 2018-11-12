-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 10:57 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `option_plus`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(18, 'Computer', '2018-11-06 20:39:46', '2018-11-06 20:39:46'),
(19, 'Mobiles', '2018-11-09 04:35:12', '2018-11-08 22:35:12');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(1000) NOT NULL,
  `business` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `business`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(4, 'Cats Eye', 'Cats Eye', '1627440390', 'Bonani', '2018-10-26 08:35:32', '2018-10-26 08:35:32'),
(5, 'Emirates', 'Air Travels', '1627440390', 'Bonani', '2018-10-26 22:29:57', '2018-10-26 22:29:57'),
(6, 'Ashraf', 'None', '123456', 'none', '2018-11-08 23:47:41', '2018-11-08 23:47:41');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` varchar(1000) NOT NULL,
  `item` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `subcategory_id`, `item`, `created_at`, `updated_at`) VALUES
(3, 18, '7', 'jinjar', '2018-11-09 09:06:52', '2018-11-09 03:06:52'),
(4, 18, '7', 'Easy ok', '2018-11-09 09:13:13', '2018-11-09 03:13:13'),
(5, 19, '7', 'ok', '2018-11-09 09:07:11', '2018-11-09 03:07:11');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `permissions` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Category', '2018-10-27 02:33:31', '0000-00-00 00:00:00'),
(2, 'Customer', '2018-10-27 03:31:46', '0000-00-00 00:00:00'),
(3, 'Supplier', '2018-10-27 02:33:48', '0000-00-00 00:00:00'),
(4, 'Unit', '2018-10-27 02:33:48', '0000-00-00 00:00:00'),
(5, 'Product', '2018-10-27 02:34:05', '0000-00-00 00:00:00'),
(6, 'Purchase Cash Return', '2018-10-27 02:34:05', '0000-00-00 00:00:00'),
(7, 'Purchase Repair', '2018-10-27 02:34:22', '0000-00-00 00:00:00'),
(8, 'Purchase Damage', '2018-10-27 02:34:22', '0000-00-00 00:00:00'),
(9, 'Sales Cash Return', '2018-10-27 02:34:38', '0000-00-00 00:00:00'),
(10, 'Sales Repair', '2018-10-27 02:34:38', '0000-00-00 00:00:00'),
(11, 'Sales Damage', '2018-10-27 02:34:55', '0000-00-00 00:00:00'),
(12, 'User Management Report', '2018-10-27 02:34:55', '0000-00-00 00:00:00'),
(13, 'Sales Management Report', '2018-10-27 02:35:17', '0000-00-00 00:00:00'),
(14, 'Purchase Management Report', '2018-10-27 02:35:17', '0000-00-00 00:00:00'),
(15, 'Inventory Management Report', '2018-10-27 02:35:24', '0000-00-00 00:00:00'),
(16, 'purchase', '2018-10-27 03:49:41', '0000-00-00 00:00:00'),
(17, 'sales', '2018-10-27 03:49:47', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `name` varchar(1000) DEFAULT NULL,
  `description` varchar(1000) NOT NULL,
  `unit_id` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `item_id`, `name`, `description`, `unit_id`, `created_at`, `updated_at`) VALUES
(8, 15, NULL, NULL, 'T Shirt', 'Yellow color', '4', '2018-10-26 08:37:08', '2018-10-26 08:37:08'),
(9, 15, NULL, NULL, 'Pant', 'Yellow color', '4', '2018-10-26 08:44:38', '2018-10-26 08:44:38'),
(10, 16, NULL, NULL, 'Business class', 'ticket', '4', '2018-10-26 22:30:30', '2018-10-26 22:30:30'),
(11, 15, 1, 1, 'chgh', 'gfhgfh', '4', '2018-10-28 09:17:16', '2018-10-28 09:17:16'),
(12, 16, 1, 1, 'fdgdf', 'tfgh', '4', '2018-10-28 09:43:44', '2018-10-28 09:43:44'),
(13, 15, 1, 1, 'gfdgh', 'hfgh', '4', '2018-10-28 09:44:32', '2018-10-28 09:44:32'),
(14, 17, 10, 5, 'A el C u', 'nill', '4', '2018-11-08 23:58:09', '2018-11-08 23:58:09');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `invoice` varchar(10000) DEFAULT NULL,
  `requisition_qty` int(11) DEFAULT NULL,
  `requisition_status` int(11) DEFAULT NULL,
  `requisition_no` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `vat` int(11) NOT NULL,
  `tax` int(11) DEFAULT NULL,
  `ait` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `net_payable` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchases`
--

INSERT INTO `purchases` (`id`, `product_id`, `qty`, `invoice`, `requisition_qty`, `requisition_status`, `requisition_no`, `price`, `description`, `vat`, `tax`, `ait`, `discount`, `net_payable`, `supplier_id`, `due`, `created_at`, `updated_at`) VALUES
(26, 9, 333, NULL, 444, 1, 4683, 33, 'hgfhfg', 0, 0, 0, 0, 0, 5, 0, '2018-10-28 16:19:06', '2018-10-28 10:19:06'),
(28, 8, 44, 'g54t5', 44, 1, 22110, 44, 'fdgf', 445, 445, 33, 55, 44, 5, 33, '2018-10-28 16:27:07', '2018-10-28 10:27:07'),
(29, 8, NULL, 'tt', 5, 0, 26788, 456, 'nill', 45, 43, 43, 23, 535, 5, 56, '2018-11-09 00:08:46', '2018-11-09 00:08:46');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_cash_returns`
--

CREATE TABLE `purchase_cash_returns` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `cash_return` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_cash_returns`
--

INSERT INTO `purchase_cash_returns` (`id`, `supplier_id`, `purchase_id`, `product_id`, `qty`, `cash_return`, `created_at`, `updated_at`) VALUES
(25, 5, 23, 8, 10, 10, '2018-10-26 11:19:55', '2018-10-26 11:19:55'),
(26, 5, 24, 10, 10, 10, '2018-10-26 22:32:34', '2018-10-26 22:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_damages`
--

CREATE TABLE `purchase_damages` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `damage_cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_damages`
--

INSERT INTO `purchase_damages` (`id`, `supplier_id`, `purchase_id`, `product_id`, `qty`, `damage_cost`, `created_at`, `updated_at`) VALUES
(16, 5, 23, 8, 10, 10, '2018-10-26 11:21:03', '2018-10-26 11:21:03'),
(17, 5, 24, 10, 10, 10, '2018-10-26 22:33:17', '2018-10-26 22:33:17');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_repairs`
--

CREATE TABLE `purchase_repairs` (
  `id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `purchase_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `repair_cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `vat` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `net_payable` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `due` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `product_id`, `qty`, `price`, `description`, `vat`, `discount`, `net_payable`, `supplier_id`, `due`, `created_at`, `updated_at`) VALUES
(9, 8, 500, 500, 'Yellow color', 0, 0, 500, 4, 0, '2018-10-26 11:21:57', '2018-10-26 11:21:57'),
(10, 10, 20, 40, 'Yellow color', 0, 0, 0, 5, 0, '2018-10-26 22:34:04', '2018-10-26 22:34:04');

-- --------------------------------------------------------

--
-- Table structure for table `sale_cash_returns`
--

CREATE TABLE `sale_cash_returns` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `cash_return` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_cash_returns`
--

INSERT INTO `sale_cash_returns` (`id`, `client_id`, `sales_id`, `product_id`, `qty`, `cash_return`, `created_at`, `updated_at`) VALUES
(6, 4, 9, 8, 20, 20, '2018-10-26 11:22:56', '2018-10-26 11:22:56'),
(7, 5, 10, 10, 10, 10, '2018-10-26 22:34:38', '2018-10-26 22:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `sale_damages`
--

CREATE TABLE `sale_damages` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `damage_cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale_damages`
--

INSERT INTO `sale_damages` (`id`, `client_id`, `sales_id`, `product_id`, `qty`, `damage_cost`, `created_at`, `updated_at`) VALUES
(5, 4, 9, 8, 100, 100, '2018-10-26 11:23:45', '2018-10-26 11:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `sale_repairs`
--

CREATE TABLE `sale_repairs` (
  `id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `repair_cost` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`id`, `category_id`, `subcategory`, `created_at`, `updated_at`) VALUES
(7, 18, 'ASUS', '2018-11-06 20:40:07', '2018-11-06 20:40:07'),
(11, 19, 'Nokia Phone', '2018-11-09 04:48:25', '2018-11-08 22:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(1000) NOT NULL,
  `business` varchar(1000) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `supplier_name`, `business`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(5, 'Abc Garments', 'Abc Garments', '1627440390', 'Bonani', '2018-10-26 08:36:17', '2018-10-26 08:36:17'),
(6, 'kamal', 'None', '6547856345', 'None', '2018-11-08 23:54:08', '2018-11-08 23:54:08');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unit_name` varchar(1000) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unit_name`, `created_at`, `updated_at`) VALUES
(4, 'pc', '2018-10-26 08:36:41', '2018-10-26 08:36:41'),
(5, 'none', '2018-11-08 23:48:08', '2018-11-08 23:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `passwords` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `passwords`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '2018-10-24 16:04:49', '0000-00-00 00:00:00'),
(14, 'admin33', 'admin33', '2018-10-26 22:28:00', '2018-10-26 22:28:00'),
(15, 'admin44', 'admin44', '2018-10-26 22:28:52', '2018-10-26 22:28:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_permissions`
--

CREATE TABLE `user_permissions` (
  `id` int(11) NOT NULL,
  `userid` varchar(200) NOT NULL,
  `permissionid` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_permissions`
--

INSERT INTO `user_permissions` (`id`, `userid`, `permissionid`, `created_at`, `updated_at`) VALUES
(22, '1', '1', '2018-10-27 03:54:26', '2018-10-26 21:17:19'),
(23, '1', '2', '2018-10-27 03:35:22', '2018-10-26 21:17:19'),
(24, '1', '3', '2018-10-27 03:35:24', '2018-10-26 21:17:19'),
(25, '1', '4', '2018-10-27 03:35:27', '2018-10-26 21:17:19'),
(26, '1', '5', '2018-10-27 03:35:28', '2018-10-26 21:17:19'),
(27, '1', '6', '2018-10-27 03:35:39', '0000-00-00 00:00:00'),
(28, '1', '7', '2018-10-27 03:35:39', '0000-00-00 00:00:00'),
(29, '1', '8', '2018-10-27 03:35:53', '0000-00-00 00:00:00'),
(30, '1', '9', '2018-10-27 03:35:53', '0000-00-00 00:00:00'),
(31, '1', '10', '2018-10-27 03:36:03', '0000-00-00 00:00:00'),
(32, '1', '11', '2018-10-27 03:36:03', '0000-00-00 00:00:00'),
(33, '1', '12', '2018-10-27 04:08:35', '0000-00-00 00:00:00'),
(34, '1', '13', '2018-10-27 03:36:13', '0000-00-00 00:00:00'),
(35, '1', '14', '2018-10-27 04:09:40', '0000-00-00 00:00:00'),
(36, '1', '15', '2018-10-27 03:58:17', '0000-00-00 00:00:00'),
(37, '1', '16', '2018-10-27 03:58:17', '0000-00-00 00:00:00'),
(40, '1', '17', '2018-10-27 04:07:31', '0000-00-00 00:00:00'),
(72, '13', '14', '2018-10-26 22:20:16', '2018-10-26 22:20:16'),
(73, '14', '1', '2018-10-26 22:28:00', '2018-10-26 22:28:00'),
(74, '14', '2', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(75, '14', '3', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(76, '14', '4', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(77, '14', '6', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(78, '14', '7', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(79, '14', '17', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(80, '14', '13', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(81, '14', '8', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(82, '14', '9', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(83, '14', '10', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(84, '14', '11', '2018-10-26 22:28:01', '2018-10-26 22:28:01'),
(85, '15', '1', '2018-10-26 22:28:52', '2018-10-26 22:28:52'),
(86, '15', '2', '2018-10-26 22:28:52', '2018-10-26 22:28:52'),
(87, '15', '3', '2018-10-26 22:28:52', '2018-10-26 22:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_cash_returns`
--
ALTER TABLE `purchase_cash_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_damages`
--
ALTER TABLE `purchase_damages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase_repairs`
--
ALTER TABLE `purchase_repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_cash_returns`
--
ALTER TABLE `sale_cash_returns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_damages`
--
ALTER TABLE `sale_damages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sale_repairs`
--
ALTER TABLE `sale_repairs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_permissions`
--
ALTER TABLE `user_permissions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `purchase_cash_returns`
--
ALTER TABLE `purchase_cash_returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `purchase_damages`
--
ALTER TABLE `purchase_damages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `purchase_repairs`
--
ALTER TABLE `purchase_repairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sale_cash_returns`
--
ALTER TABLE `sale_cash_returns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `sale_damages`
--
ALTER TABLE `sale_damages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sale_repairs`
--
ALTER TABLE `sale_repairs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `user_permissions`
--
ALTER TABLE `user_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
