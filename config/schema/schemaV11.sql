-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2022 at 06:14 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fit3047`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` char(36) NOT NULL,
  `customer_id` char(36) NOT NULL,
  `items_no` int(4) NOT NULL,
  `cost` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(64) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `abn` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `username`, `password`, `address`, `email`, `phone`, `abn`) VALUES
('561fdf20-b0ca-42a5-b631-cf8666c993e6', 'lopez', 'jenny', '123lopez', '', '234 street', 'lopez@gmail.com', '0403885615', '65467886534'),
('c5200542-720e-43dd-84fe-9917fb328b4b', 'jake', 'janke', '123jake', '', '123 stud st', 'jake@gmail.com', '1234567891', '');

-- --------------------------------------------------------

--
-- Table structure for table `customers_order_detail`
--

CREATE TABLE `customers_order_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `order_id` char(36) NOT NULL,
  `price` decimal(9,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers_order_detail`
--

INSERT INTO `customers_order_detail` (`id`, `product_id`, `order_id`, `price`) VALUES
('109bedee-8e12-462c-986b-1ced9a0dd28a', '8eb86ce4-54a1-4c09-9d9f-693bd3de4add', 'b0e94ae3-d35b-471f-8e6a-94fbf4d84e8a', '46664.00'),
('41e59b00-ceb4-42d1-9700-6084b9f2fe3b', '8eb86ce4-54a1-4c09-9d9f-693bd3de4add', 'b0e94ae3-d35b-471f-8e6a-94fbf4d84e8a', '50.00'),
('6956be5a-8964-47ed-ae1e-9af9a2a7ad5c', 'd3dc173a-caf1-4f44-9001-7b05cd7cc271', 'b0e94ae3-d35b-471f-8e6a-94fbf4d84e8a', '79.00'),
('6bfb7fdb-a425-4981-a2e7-00abf35a9443', '8eb86ce4-54a1-4c09-9d9f-693bd3de4add', '68f6700b-0cf8-4c8b-871a-c641bf42e859', '6.00');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` char(36) NOT NULL,
  `body` tinytext NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp(),
  `email_sent` tinyint(1) NOT NULL DEFAULT 0,
  `supplier_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `body`, `created`, `email_sent`, `supplier_id`) VALUES
('166655ea-e199-434e-9ed6-83d4e7eb8322', 'I want 50 Oil', '2022-05-11 00:08:59', 0, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('1d17752e-c622-4f21-bb63-7ca7a83ed0ef', 'asdasdasd', '2022-05-11 00:12:39', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('3d1ffb3a-808b-4f6d-8a88-c21b16cc2b47', 'testinggggggggggggggggggggggggggggggggggggggggggggggggggg', '2022-05-11 19:57:03', 1, 'f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f'),
('7db0314d-9849-4ce2-a0a3-ab3a39d80fdb', '60 yoyos', '2022-05-11 00:10:29', 1, 'f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f'),
('91fdb2ac-c728-49c8-8898-3f99bb22fdcf', '50 baby oil', '2022-05-10 23:54:07', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('a8187452-2d53-4bdd-9750-4e05c7104637', 'gogogog', '2022-05-10 07:06:36', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('ade16965-7012-44aa-90c0-6a30e4626bf4', 'adfa', '2022-05-10 06:55:10', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('b50bc9b3-073b-4103-ab5c-5ea74d3e008c', 'I want 50 Oil', '2022-05-11 00:09:49', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('c07cff63-d21e-47b5-9a3c-005c8a569d13', 'adfaf', '2022-05-10 17:27:05', 0, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('c24938f5-27bd-4b67-b748-71304c88cb63', 'I want 50 Oil', '2022-05-11 00:08:02', 0, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('c654d628-a97c-4f30-ae27-5e23acc5c62c', 'I want 50 Oil', '2022-05-11 00:08:28', 0, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('c8122747-1c03-437a-9c28-ae766d6d122c', 'dfsdf', '2022-05-10 07:35:01', 0, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('d6a94313-483b-4600-9a5e-8d5354bf95cd', 'sadasd', '2022-05-12 09:38:10', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('f140260f-a3cb-4203-b0c6-d7b488e9e5e4', 'Korona', '2022-05-11 00:24:41', 1, 'f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `payment`, `quantity`) VALUES
('68f6700b-0cf8-4c8b-871a-c641bf42e859', 'c5200542-720e-43dd-84fe-9917fb328b4b', '2022-05-21', '0', 6789),
('b0e94ae3-d35b-471f-8e6a-94fbf4d84e8a', 'c5200542-720e-43dd-84fe-9917fb328b4b', '2022-05-26', '0', 100),
('ddbcc163-ad05-47a4-bbac-27b0ffb6db45', 'c5200542-720e-43dd-84fe-9917fb328b4b', '2022-05-21', '0', 100);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` char(36) NOT NULL,
  `name` varchar(36) NOT NULL,
  `cost` decimal(9,2) NOT NULL,
  `retail_price` decimal(9,2) NOT NULL,
  `quantity` int(5) NOT NULL,
  `supplier_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `cost`, `retail_price`, `quantity`, `supplier_id`) VALUES
('05908a44-9706-4470-a5d1-9cc900be2fee', 'silver framee', '3.00', '4.00', 50, 'f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f'),
('83563f93-d2da-434f-ab5d-58ba5fb68b32', 'poppy', '4.00', '3.00', 132, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('8eb86ce4-54a1-4c09-9d9f-693bd3de4add', 'Bundaberg', '8.00', '6.00', 100, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('d3dc173a-caf1-4f44-9001-7b05cd7cc271', 'golden framee', '5.00', '5.00', 3, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `filename` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `filename`) VALUES
('95646612-5828-4720-8eb1-86063fc78f46', '8eb86ce4-54a1-4c09-9d9f-693bd3de4add', 'cropped-1920-1080-655990.jpg');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restockings`
--

INSERT INTO `restockings` (`id`, `staff_id`, `date`, `payment_type`, `quantity`) VALUES
('0c569893-8c72-4f90-b252-7e9f2759a2dd', '1940a72e-7ec6-4e57-b007-fd9536b3f9b8', '2022-05-19', '1', 100),
('1eed4ef2-69dd-4b77-9779-bb2807c282f9', '1940a72e-7ec6-4e57-b007-fd9536b3f9b8', '2022-05-20', '1', 100),
('337cc36c-cdba-4158-881b-30f631f54ceb', '1940a72e-7ec6-4e57-b007-fd9536b3f9b8', '2022-05-26', 'Card', 100),
('676a6885-3204-4be7-b53e-c98c5bce19c7', '1940a72e-7ec6-4e57-b007-fd9536b3f9b8', '2022-05-20', '0', 100),
('7861712c-be33-4b15-b5db-9905c8ccca24', '1940a72e-7ec6-4e57-b007-fd9536b3f9b8', '2022-05-21', '3', 100);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` char(36) NOT NULL,
  `first_name` varchar(64) NOT NULL,
  `last_name` varchar(64) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(64) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(36) NOT NULL,
  `phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `last_name`, `username`, `password`, `address`, `email`, `phone`) VALUES
('1940a72e-7ec6-4e57-b007-fd9536b3f9b8', 'Enoch', 'Elijah', 'enochelijah', '$2y$10$GoElKyOQMoMdL/7laM3KZ.3C8AKMZjvwuKAi6Y1vX71fVRfcaL9Ey', '123 Study Street', 'vse5@scarletmail.rutgers.edu', '6598279687'),
('75953a6f-fe6e-4316-825c-b9041e808ac6', 'sad', 'dsa', 'asdasd', '$2y$10$ja.CL3FgCsebF9HPBeT9lOax1ziu917qlLeXI.ADod.kPhQnXUBGa', 'asd', 'AHIDFLbILEFBIwhiuehahfh@gmail.com', '1234567891');

-- --------------------------------------------------------

--
-- Table structure for table `staffs_restocking_detail`
--

CREATE TABLE `staffs_restocking_detail` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `restocking_id` char(36) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `business_name`, `contact_name`, `address`, `email`, `phone`, `abn`) VALUES
('d61a8a9a-59d4-48be-af6a-957dc9d1b5f2', 'Lacku', 'Enoch Elijah', '123 Study Street', 'AHIDFLbILEFBIwhiuehahfh@gmail.com', '6598279687', '65467886534'),
('f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f', 'Baby Things', 'Daniel Lack', '145 Pasir Ris Grove ', 'Dan.Baby@test.com', '9827968732', '65467886234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_customer` (`customer_id`);

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
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `fk_cart_customer` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

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
