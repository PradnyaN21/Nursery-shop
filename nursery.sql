-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2026 at 08:50 AM
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
-- Database: `nursery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`password`) VALUES
('admin');

-- --------------------------------------------------------

--
-- Table structure for table `adminpay`
--

CREATE TABLE `adminpay` (
  `phnum` bigint(244) NOT NULL,
  `accountno` varchar(244) NOT NULL,
  `ifc` varchar(244) NOT NULL,
  `online` varchar(244) NOT NULL,
  `holder` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminpay`
--

INSERT INTO `adminpay` (`phnum`, `accountno`, `ifc`, `online`, `holder`) VALUES
(9175112994, '150518210010296', 'BKID0001505', 'scannerpaytm.jpeg', 'shardai nursery');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `number` bigint(244) DEFAULT NULL,
  `productid` int(244) NOT NULL,
  `price` int(244) NOT NULL,
  `quantity` int(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `order_id` int(244) NOT NULL,
  `address` varchar(244) NOT NULL,
  `payment` varchar(244) NOT NULL,
  `transno` varchar(244) NOT NULL,
  `total` int(244) NOT NULL,
  `status` varchar(244) NOT NULL,
  `buyer_phonenumber` bigint(244) DEFAULT NULL,
  `sid` int(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`order_id`, `address`, `payment`, `transno`, `total`, `status`, `buyer_phonenumber`, `sid`) VALUES
(1, 'nangare wada,main road,A/P Kapuskhed  ', 'cod', 'cod', 264, 'Order Reached At Buyer', 8799989845, 4),
(2, 'nangare wada,main road,A/P Kapuskhed  ', 'online', '3424526738', 24, 'Order Reached At Buyer', 8799989845, 4),
(3, 'nangare wada,main road,A/P Kapuskhed  ', 'online', '123456789121', 33, 'Order Canceled by Owner', 8799989845, 5),
(3, 'nangare wada,main road,A/P Kapuskhed  ', 'online', '123456789121', 33, 'Order Canceled by Owner', 8799989845, 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `phonenumber` bigint(10) NOT NULL,
  `total` int(10) NOT NULL,
  `payment` varchar(10) NOT NULL,
  `buyer_phonenumber` bigint(10) NOT NULL,
  `tarnsno` text DEFAULT NULL,
  `apdp` text DEFAULT NULL,
  `no` int(120) DEFAULT NULL,
  `accedate` varchar(255) DEFAULT NULL,
  `packegdate` varchar(255) DEFAULT NULL,
  `aaridate` varchar(255) DEFAULT NULL,
  `shipmedate` varchar(255) DEFAULT NULL,
  `delivadate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `qty`, `address`, `delivery`, `phonenumber`, `total`, `payment`, `buyer_phonenumber`, `tarnsno`, `apdp`, `no`, `accedate`, `packegdate`, `aaridate`, `shipmedate`, `delivadate`) VALUES
(200, 16, 2, 'nangare wada,main road,A/P Kapuskhed  ', '264', 1, 264, 'cod', 8799989845, 'cod', 'Order Reached At Buyer', 4, '   21 February, 2025 , 06:47am', ' 21 February, 2025 , 06:48am', '  21 February, 2025 , 06:46am', '    21 February, 2025 , 06:48am', '  21 April, 2025 , 08:32am '),
(201, 1, 4, 'nangare wada,main road,A/P Kapuskhed  ', '24', 2, 24, 'online', 8799989845, '3424526738', 'Order Reached At Buyer', 4, '   15 September, 2025 , 08:19pm', ' 15 September, 2025 , 08:20pm', '  15 September, 2025 , 08:18pm', '    15 September, 2025 , 08:20pm', '  15 September, 2025 , 08:20pm '),
(202, 25, 3, 'nangare wada,main road,A/P Kapuskhed  ', '27', 3, 33, 'online', 8799989845, '123456789121', 'Order Canceled by Farmer', 5, '   17 January, 2026 , 10:31pm', ' 17 January, 2026 , 10:31pm', '  17 January, 2026 , 10:26pm', '    17 January, 2026 , 10:31pm', NULL),
(203, 1, 1, 'nangare wada,main road,A/P Kapuskhed  ', '6', 3, 33, 'online', 8799989845, '123456789121', 'Order Canceled by Farmer', 5, '   17 January, 2026 , 10:31pm', ' 17 January, 2026 , 10:31pm', '  17 January, 2026 , 10:26pm', '    17 January, 2026 , 10:31pm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plants`
--

CREATE TABLE `plants` (
  `id` int(255) NOT NULL,
  `name` varchar(244) NOT NULL,
  `type` varchar(244) NOT NULL,
  `description` varchar(244) NOT NULL,
  `price` int(244) NOT NULL,
  `img` varchar(244) NOT NULL,
  `stock` int(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plants`
--

INSERT INTO `plants` (`id`, `name`, `type`, `description`, `price`, `img`, `stock`) VALUES
(1, 'Aloe Vera', 'Pot Plants Online,Fertilizer And Seeds', 'A hardy plant known for its healing properties.', 6, 'aloe_vera.jpg', 26),
(2, 'Snake Plant', 'Indoor Plants,Planters', 'Low maintenance air-purifying houseplant.', 8, 'snake_plant.jpg', 20),
(3, 'Peace Lily', 'Flower Plants,Indoor Plants', 'Elegant white blooms and great for indoor decor.', 9, 'peace_lily.jpg', 15),
(4, 'Fiddle Leaf Fig', 'Indoor Plants,Planters', 'Popular indoor tree with large violin-shaped leaves.', 13, 'fiddle_leaf_fig.jpg', 10),
(5, 'Spider Plant', 'Hanging And Creeper Plants,Pot Plants Online', 'Produces baby plants and grows fast.', 6, 'spider_plant.jpg', 25),
(6, 'Pothos', 'Hanging And Creeper Plants,Indoor Plants', 'Easy to grow and tolerates low light.', 5, 'pothos.jpg', 40),
(7, 'ZZ Plant', 'Indoor Plants,Cambo', 'Tough plant that thrives in low light.', 10, 'zz_plant.jpg', 18),
(8, 'Monstera Deliciosa', 'Planters,Indoor Plants', 'Tropical plant with split leaves.', 11, 'monstera.jpg', 12),
(9, 'Boston Fern', 'Planters,Hanging And Creeper Plants', 'Great for hanging baskets, likes humidity.', 7, 'boston_fern.jpg', 22),
(10, 'English Ivy', 'Hanging And Creeper Plants,Cambo', 'Fast growing with trailing vines.', 6, 'english_ivy.jpg', 35),
(11, 'Rubber Plant', 'Crotons,Indoor Plants', 'Glossy dark green leaves, very aesthetic.', 11, 'rubber_plant.jpg', 14),
(12, 'Areca Palm', 'Indoor Plants,Fruit And Tree', 'Adds a tropical feel, perfect for corners.', 14, 'areca_palm.jpg', 8),
(13, 'Jade Plant', 'Pot Plants Online,Planters', 'Symbol of good luck and prosperity.', 7, 'jade_plant.jpg', 28),
(14, 'Calathea', 'Flower Plants,Indoor Plants', 'Beautiful patterned leaves.', 10, 'calathea.jpg', 16),
(15, 'Cactus', 'Planters,Fruit And Tree', 'Drought-tolerant with various shapes.', 5, 'cactus.jpg', 50),
(16, 'Bamboo Palm', 'Fruit And Tree,Planters', 'Great for purifying indoor air.', 12, 'bamboo_palm.jpg', 10),
(17, 'Lucky Bamboo', 'Cambo,Indoor Plants', 'Often used in feng shui.', 6, 'lucky_bamboo.jpg', 32),
(18, 'Oxalis', 'Flower Plants,Pot Plants Online', 'Purple shamrock with clover-like leaves.', 8, 'oxalis.jpg', 19),
(19, 'Croton', 'Crotons,Planters', 'Bright, colorful foliage.', 9, 'croton.jpg', 13),
(20, 'Bird of Paradise', 'Flower Plants,Fruit And Tree', 'Large plant with dramatic foliage.', 15, 'bird_of_paradise.jpg', 7),
(21, 'Philodendron', 'Indoor Plants,Pot Plants Online', 'Heart-shaped leaves, grows fast.', 7, 'philodendron.jpg', 24),
(22, 'Maidenhair Fern', 'Hanging And Creeper Plants,Planters', 'Delicate and graceful, needs humidity.', 7, 'maidenhair_fern.jpg', 20),
(23, 'Begonia', 'Flower Plants,Cambo', 'Grows beautiful blossoms in various colors.', 7, 'begonia.jpg', 18),
(24, 'Coleus', 'Crotons,Planters', 'Striking foliage with vibrant patterns.', 6, 'coleus.jpg', 21),
(25, 'Lavender', 'Fertilizer And Seeds,Flower Plants', 'Fragrant herb used for relaxation.', 9, 'lavender.jpg', 26),
(36, 'BMW', ',Cambo ', 'BMW', 4563743, '2022 BMW M4 GT4 (G82).jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(240) NOT NULL,
  `name` varchar(240) NOT NULL,
  `rating` int(1) NOT NULL,
  `comment` varchar(250) NOT NULL,
  `no` int(144) NOT NULL,
  `date` varchar(255) DEFAULT NULL,
  `number` bigint(244) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `rating`, `comment`, `no`, `date`, `number`) VALUES
(1, 'pratik arvind patil', 3, 'good product but high value', 32, '2025/09/15', 8799989845),
(3, 'pratik arvind patil', 5, 'good ', 33, '2026/01/17', 8799989845);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(244) NOT NULL,
  `number` bigint(10) DEFAULT NULL,
  `address` varchar(244) NOT NULL,
  `state` varchar(244) NOT NULL,
  `dis` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `scode` int(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `number`, `address`, `state`, `dis`, `password`, `scode`) VALUES
('pratik arvind patil', 8799989845, 'nangare wada,main road,A/P Kapuskhed ', 'MAHARASHTRA', 'Sangli', '4003', 989845),
('sahil patil', 7620589866, 'near juna bazar , dasm galli , nerla', 'MAHARASHTRA', 'Kolhapur', '4003', 111111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `phonenumber` (`phonenumber`);

--
-- Indexes for table `plants`
--
ALTER TABLE `plants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `plants`
--
ALTER TABLE `plants`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `no` int(144) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
