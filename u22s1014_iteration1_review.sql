-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2022 at 10:44 PM
-- Server version: 5.7.38
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u22s1014_iteration1_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` char(36) NOT NULL,
  `items_no` int(4) NOT NULL,
  `cost` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(36) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `abn` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customers_order_detail`
--

CREATE TABLE `customers_order_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `order_id` char(36) NOT NULL,
  `price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_products_cart_detail`
--

CREATE TABLE `customer_products_cart_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `cart_id` char(36) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` char(36) NOT NULL,
  `body` text NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email_sent` tinyint(1) DEFAULT '0',
  `supplier_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `body`, `created`, `email_sent`, `supplier_id`) VALUES
('44ba44b3-6b81-474d-aa3c-505c35299aaf', 'gsss121', '2022-05-19 09:52:57', 1, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('46250dff-7243-4902-a48b-c59d19a4c48e', 'please get 100 more', '2022-05-19 10:54:17', 1, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('5013c1ee-2951-4c26-af8d-f9bc5776593c', 'baby wash 30', '2022-05-19 10:04:10', 1, '586aa4c1-af12-43ac-8296-d8744c395efb'),
('760f2c59-7bf0-462b-9b16-197dc233db52', 'gentle 900', '2022-05-17 10:33:23', 1, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('c91408ea-f4c4-4e21-bbff-8be58d2e8705', 'gfhstdhfggds', '2022-05-19 10:27:47', 1, 'da9a3506-528a-442d-92f0-d2ca1362386b');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` char(36) NOT NULL,
  `customer_id` char(36) NOT NULL,
  `date` date NOT NULL,
  `payment` varchar(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `retail_price` decimal(9,2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `supplier_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `cost`, `retail_price`, `quantity`, `supplier_id`) VALUES
('0220a3c4-973e-4ff2-b3fa-dde2f87207d1', 'Gilly Goat Starter Pack', 'Gilly-Goat-Starter_OFB.jpg', '50.00', '99.00', 20, 'f773c256-5187-42b0-890c-5948b525845a'),
('08dfa37d-a560-40cf-b3e5-adbfeba7f47c', 'Baby bath wash 375ML', 'Baby-Products-BathWash-BS_600x.jpg', '8.00', '17.95', 90, 'da9a3506-528a-442d-92f0-d2ca1362386b'),
('2baa91a5-79a3-49b2-9b31-51f4ad19e6a0', 'Gilly Goat Dreamy Bath', 'Gilly-Goat-Dreamy-Bath_OFB-300x300.jpg', '20.00', '58.95', 200, 'f773c256-5187-42b0-890c-5948b525845a'),
('2e98f52c-913a-4525-b8cd-03cda60f394f', '12', '', '15.00', '18.00', 0, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('3f5ad440-9e10-4851-ad92-4c1e00162941', 'QV Baby Bath Oil', 'QVBabyBathOil250ml_4dbb6285-b3aa-48af-a512-9728fac79f67_700x.png', '5.00', '11.20', 100, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('49dfd363-5026-456d-bc7f-69867b566cd3', 'QV baby barrier cream 50g', 'QVBabyBarrierCream50g_68e1fdfd-de4b-47d4-ac80-fcee2ddfed87_700x.png', '3.00', '7.95', 45, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('8f42fda3-d482-43e9-8d00-d0f6f4d29ca6', 'QV baby gentle wash 500g', 'QVBabyGentleWash500g_4e28bc35-2c67-4a2e-a1a7-74d376fddeb0_700x.png', '4.00', '10.68', 90, '16aacdc7-e95e-4a68-bca0-bf7551c5b73f'),
('c63ec468-47b1-4399-a064-a326a8d0b210', 'Rvival Skin Collection', 'Revival_Bundle_2048x2048.jpg', '78.00', '118.00', 20, '586aa4c1-af12-43ac-8296-d8744c395efb');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `filename`) VALUES
('22970e93-a2e8-43ca-9f10-a9bf7fc3c4fb', '08dfa37d-a560-40cf-b3e5-adbfeba7f47c', 'babybathwash_2_600x.png');

-- --------------------------------------------------------

--
-- Table structure for table `restockings`
--

CREATE TABLE `restockings` (
  `id` char(36) NOT NULL,
  `staff_id` char(36) NOT NULL,
  `date` date NOT NULL,
  `payment_type` varchar(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(36) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `last_name`, `username`, `password`, `address`, `email`, `phone`) VALUES
('405591ad-86d6-4b00-8ad7-d806877e68f9', 'admin', 'admin', 'admin', '$2y$10$kmli9BncdLmsrwgRtXlrQuxYSODi6RtmwbnTVDKBxba7Q286nfLku', '50 bossville, Australia', 'thebigboss@bossmail.com', '0945345245'),
('4ebbb688-d6f9-442f-8741-913d56e8ee48', 'Ada', 'Black', 'ada0909', '$2y$10$AW4qZzqYoI5J9naQRM5xSOVV3QKVMSuT60vrqtr9SKeTgTwPrDf96', '3972 Ferry Street,Gadsde,35901,ALn', 'adaui@staff.com', '1369942121'),
('7cc92860-7612-43ab-ac7f-0c7347553bb5', 'Goibniu', ' Black', 'annas', '$2y$10$iWAaukWMnMv/giG50jPmIeGeYpTyi/mhTvDniIyolM86BlswuZMAK', '3972 Ferry Street,Gadsde,35901,ALn', 'undergrad.ie.demo@monash.edu', '1234567891'),
('d0c26d13-7bd8-4ecc-b30b-da5154d1344c', 'Yi', 'Zhao', 'zxzxzxzx', '$2y$10$R.gFG4Y0EwBdBEQitIsy8OXLtAMwfcCGpnqEafiz1RR7hU7GpSL8e', 'batmanst', '123@qq.com', '0432165985');

-- --------------------------------------------------------

--
-- Table structure for table `staffs_restocking_detail`
--

CREATE TABLE `staffs_restocking_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `restocking_id` char(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` char(36) NOT NULL,
  `business_name` varchar(64) NOT NULL,
  `contact_name` varchar(64) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `abn` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `business_name`, `contact_name`, `address`, `email`, `phone`, `abn`) VALUES
('16aacdc7-e95e-4a68-bca0-bf7551c5b73f', 'QV baby care', 'boss', '3972 Ferry Street,Gadsde,35901,ALn', 'qv@boss.com', '0412345675', '12345678902'),
('586aa4c1-af12-43ac-8296-d8744c395efb', 'VATEA', 'vatea boss', '3972 Ferry Street,Gadsde,35901,ALn', 'veteaboss@boss.com', '1234231231', '32132143321'),
('da9a3506-528a-442d-92f0-d2ca1362386b', 'Milk', 'milkboss', '3972 Ferry Street,Gadsde,35901,ALn', 'milkboss@boss.com', '6372186381', '42313245243'),
('f773c256-5187-42b0-890c-5948b525845a', 'Gilly Goat', 'baby boss', '3972 Ferry Street,Gadsde,35901,ALn', 'babyboss@boss.com', '1245343243', '12345678132');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `abn` (`abn`);

--
-- Indexes for table `customers_order_detail`
--
ALTER TABLE `customers_order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customers_order_detail_product` (`product_id`),
  ADD KEY `fk_customers_order_detail_order` (`order_id`);

--
-- Indexes for table `customer_products_cart_detail`
--
ALTER TABLE `customer_products_cart_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_products_cart_detail_product` (`product_id`),
  ADD KEY `fk_customer_products_cart_detail_cart` (`cart_id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_enquiry_supplier` (`supplier_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_orders` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_supplier` (`supplier_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_images_product` (`product_id`);

--
-- Indexes for table `restockings`
--
ALTER TABLE `restockings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staff_restockings` (`staff_id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `staffs_restocking_detail`
--
ALTER TABLE `staffs_restocking_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_staffs_restocking_detail_product` (`product_id`),
  ADD KEY `fk_staffs_restocking_detail_restocking` (`restocking_id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `abn` (`abn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers_order_detail`
--
ALTER TABLE `customers_order_detail`
  ADD CONSTRAINT `fk_customers_order_detail_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `fk_customers_order_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `customer_products_cart_detail`
--
ALTER TABLE `customer_products_cart_detail`
  ADD CONSTRAINT `fk_customer_products_cart_detail_cart` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`),
  ADD CONSTRAINT `fk_customer_products_cart_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD CONSTRAINT `fk_enquiry_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_customer_orders` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_product_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`);

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `fk_product_images_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `restockings`
--
ALTER TABLE `restockings`
  ADD CONSTRAINT `fk_staff_restockings` FOREIGN KEY (`staff_id`) REFERENCES `staffs` (`id`);

--
-- Constraints for table `staffs_restocking_detail`
--
ALTER TABLE `staffs_restocking_detail`
  ADD CONSTRAINT `fk_restocking_orders_detail_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_restocking_orders_detail_restocking` FOREIGN KEY (`restocking_id`) REFERENCES `restockings` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
