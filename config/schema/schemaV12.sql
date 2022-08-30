-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 16, 2022 at 12:34 PM
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

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `username`, `address`, `email`, `phone`, `abn`) VALUES
('217ee3d9-e8a9-4c56-a697-9683d1a225d2', 'Nomi', 'Azhar', 'nomiazhar', '1 Dorothy Craigeburn', 'nomi.azhar@monash.edu', '0410334334', '12345678900'),
('b605f13f-7be8-4afa-9bd9-fa6173224113', 'Sijia', 'Ai', 'saii0001', '3972 Ferry Street,Gadsde,35901,ALn', 'ruby0801012332134702@gmail.com', '1369945907', ''),
('d254b1f0-882c-4166-9898-a25f0ae1407f', 'Nomi', 'Azhar', 'asdasdfasd', '145 Pasir Ris Grove 466', 'ferrari.elijah@gmail.com', '9827968712', '65467886534');

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

--
-- Dumping data for table `customers_order_detail`
--

INSERT INTO `customers_order_detail` (`id`, `product_id`, `order_id`, `price`) VALUES
('453f8f13-925d-42f9-8342-5c24236dd6f2', '5b0d7196-d148-4de3-9b9b-565d48c66ac4', 'e1b226c1-b4a2-41b9-a337-90227d49dc5d', '100.00');

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
  `body` tinytext NOT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email_sent` tinyint(1) NOT NULL DEFAULT '0',
  `supplier_id` char(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `body`, `created`, `email_sent`, `supplier_id`) VALUES
('166655ea-e199-434e-9ed6-83d4e7eb8322', 'I want 50 Oil', '2022-05-11 00:08:59', 0, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('1d17752e-c622-4f21-bb63-7ca7a83ed0ef', 'asdasdasd', '2022-05-11 00:12:39', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('3d1ffb3a-808b-4f6d-8a88-c21b16cc2b47', 'testinggggggggggggggggggggggggggggggggggggggggggggggggggg', '2022-05-11 19:57:03', 1, 'f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f'),
('7adf4abe-9dc2-48cc-b24e-975ce7291790', 'ASDSADASDHGQWUYEJU124E3534657689', '2022-05-16 12:28:30', 1, '676678b1-c3fb-4fe1-bd2d-0b89d44213f6'),
('7db0314d-9849-4ce2-a0a3-ab3a39d80fdb', '60 yoyos', '2022-05-11 00:10:29', 1, 'f44ccfe4-cbf6-4f3f-a2a7-50a38ad6814f'),
('91fdb2ac-c728-49c8-8898-3f99bb22fdcf', '50 baby oil', '2022-05-10 23:54:07', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('a8187452-2d53-4bdd-9750-4e05c7104637', 'gogogog', '2022-05-10 07:06:36', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
('a9b80faf-4c73-4a96-9286-fdab7f1dff07', '50 things', '2022-05-14 16:46:04', 1, 'd61a8a9a-59d4-48be-af6a-957dc9d1b5f2'),
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `date`, `payment`, `quantity`) VALUES
('b60b2df9-26e0-4349-bc79-680fb113482e', 'b605f13f-7be8-4afa-9bd9-fa6173224113', '2022-05-20', '0', 2),
('e1b226c1-b4a2-41b9-a337-90227d49dc5d', '217ee3d9-e8a9-4c56-a697-9683d1a225d2', '2022-05-20', '1', 100);

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
('5b0d7196-d148-4de3-9b9b-565d48c66ac4', 'Coles Milk Low Fat', 'Answer Sheet 2.jpg', '12.00', '23.00', 50, 'ea879aa5-0290-478e-b66d-526a2906522c'),
('929c8a2f-1f88-47fa-8a64-5e01eb8794cb', 'product2', 'product-4.jpg', '12.00', '43.00', 33, '676678b1-c3fb-4fe1-bd2d-0b89d44213f6'),
('db46e9a1-57f4-43df-8d97-854b963a2284', 'product1', 'product-1.jpg', '12.00', '32.00', 2, '676678b1-c3fb-4fe1-bd2d-0b89d44213f6'),
('f63490b6-5d4e-45ae-967f-b87688a20b12', 'Item1', '20200704_125147.jpg', '12.00', '14.00', 245, '676678b1-c3fb-4fe1-bd2d-0b89d44213f6');

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
('7beef8ce-2e68-413f-8c0e-9141870b34f1', '5b0d7196-d148-4de3-9b9b-565d48c66ac4', 'Print2.jpg');

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
('18f2da1b-cd12-11ec-9fa3-7478270c810b', 'hgfds', 'fdsa', 'aaa', '$2y$10$0hQncesNxwy0U9I0gT0FhenJctSuc.fWZkZEgRGTj9ud0j/csCg9O', 'asdfghjkl', 'sadfvgfbn@aa.com', '21345617543'),
('29e0fbc4-cf3f-11ec-a331-7478270c810b', 'wqere', 'qwewre', 'qwe', '$2y$10$iWAaukWMnMv/giG50jPmIeGeYpTyi/mhTvDniIyolM86BlswuZMAK', 'asdsfs', 'sadfvgn@aa.com', '0411094002'),
('489cc177-60aa-4901-b18d-279fd47d2176', 'admin', 'admin', 'admin', '$2y$10$frAcr1Oqpr4O/okKVAn2U.x2Xoag39DeVlBILaes3qfoRPGi7CYfy', '30 Bigbossville', 'thebossMan@bossmail.com', '0245435646'),
('7cc92860-7612-43ab-ac7f-0c7347553bb5', 'Goibniu', ' Black', 'annas', '$2y$10$iWAaukWMnMv/giG50jPmIeGeYpTyi/mhTvDniIyolM86BlswuZMAK', '3972 Ferry Street,Gadsde,35901,ALn', 'undergrad.ie.demo@monash.edu', '1234567891'),
('a6c9faab-0af5-4477-9b4f-3e09e5378998', 'Goibniu', 'Ai', 'asd', '$2y$10$KDIpClraOl/IS7OHxH6.M.tD3uhhIEXhejwP.hdHYyHOXhmSOGJRS', '3972 Ferry Street,Gadsde,35901,ALn', '84555773@qq.com', '1369945907'),
('b6948985-41d4-4860-9b0c-4bce7ef74984', 'Nomi', 'Azhar', 'nomiazhar1', '$2y$10$K.2vcFFMDHnT453s.1IosuPTTFxsJVElZLygvjwGBvB6KJ4N2dtmy', '1 dd', 'nomi.azhar@monash.edu', '0410334334');

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
('676678b1-c3fb-4fe1-bd2d-0b89d44213f6', 'sun', 'ye', 'hdskadjaskl', 'hsiaos@ds.com', '1234565432', ''),
('ea879aa5-0290-478e-b66d-526a2906522c', 'Johns Babycare', 'Seena', '68 Gillybag Way, Clayton, Australia', 'babycare@gmail.com', '0346575675', '43546767867');

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
