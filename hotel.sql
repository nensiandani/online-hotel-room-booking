-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2024 at 11:05 AM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(200) NOT NULL,
  `firstname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `country` text NOT NULL,
  `total_room` int(150) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `total_price` int(200) NOT NULL,
  `payment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `firstname`, `email`, `mobileno`, `country`, `total_room`, `checkin`, `checkout`, `total_price`, `payment`) VALUES
(15, 'anandi', 'anandi@gmail.com', '7856228019', 'USA', 4, '2024-09-25', '2024-09-27', 244818, 'UPI'),
(17, 'Daya', 'daya@gmail.com', '9922114567', 'India', 3, '2024-10-01', '2024-10-04', 329730, 'Cash Payment'),
(18, 'anandi', 'anandi@gmail.com', '9011562890', 'Dubai', 4, '2024-10-01', '2024-10-03', 298000, 'UPI');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `user` varchar(255) NOT NULL,
  `total` int(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `user`, `total`, `date`) VALUES
(27, 'Queen Room', '50250', 'r02.jpg', 'anandi@gmail.com', 50250, '2024-09-24 11:46:03'),
(29, 'Twin Room', '20660', 'r06.jpg', 'anandi@gmail.com', 20660, '2024-09-24 14:24:22'),
(32, 'Premium King Room', '39550', 'r03.jpg', 'daya@gmail.com', 39550, '2024-09-26 09:10:17'),
(33, 'Master Room', '45360', 'r013.jpg', 'daya@gmail.com', 45360, '2024-09-26 09:10:44'),
(34, 'Small Room', '25000', 'r09.jpg', 'daya@gmail.com', 25000, '2024-09-26 09:11:36'),
(35, 'Room Vip King', '42590', 'r04.jpg', 'anandi@gmail.com', 42590, '2024-09-26 09:57:40'),
(36, 'Luxury Twin Room', '35500', 'r08.jpg', 'anandi@gmail.com', 35500, '2024-09-26 10:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(200) NOT NULL,
  `category_nm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_nm`) VALUES
(1, 'Luxury Rooms'),
(2, 'Twin Rooms'),
(3, 'Double Rooms'),
(5, 'Single Rooms');

-- --------------------------------------------------------

--
-- Table structure for table `checkavail`
--

CREATE TABLE `checkavail` (
  `id` int(100) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `room` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checkavail`
--

INSERT INTO `checkavail` (`id`, `checkin`, `checkout`, `room`) VALUES
(1, '2024-09-23', '2024-09-24', 1),
(2, '2024-09-22', '2024-09-23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(6, 'anandi chhayani', 'anandi@gmail.com', 'Hotel best services.'),
(7, 'shruti', 'shruti@gmail.com', 'hotel have  best fac');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Radha', 'Rani', 'radha@gmail.com', '0280a430e35fee634f01cbc5a81788'),
(2, 'anandi', 'Chhayani', 'anandi@gmail.com', '14'),
(3, 'Shruti', 'Makawana', 'shruti@gmail.com', 'shruti'),
(4, 'nensi', 'andani', 'nensi@gmail.com', 'nensi'),
(6, 'Daya', 'Chhayani', 'daya@gmail.com', 'daya');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `review` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `review`, `date`) VALUES
(1, 'anandi', 'anandi@gmail.com', 'your hotel is best.', '2024-09-14 03:38:56'),
(3, 'shruti', 'shruti@gmail.com', 'your hotel is best for vacation. ', '2024-09-21 03:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(100) NOT NULL,
  `room_nm` varchar(250) NOT NULL,
  `image_nm` varchar(100) NOT NULL,
  `price` varchar(250) NOT NULL,
  `cate_nm` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_nm`, `image_nm`, `price`, `cate_nm`) VALUES
(1, 'Luxury Room', 'r01.jpg', '52220', 'Luxury Rooms'),
(2, 'Queen Room', 'r02.jpg', '50250', 'Luxury Rooms'),
(3, 'Premium King Room', 'r03.jpg', '39550', 'Luxury Rooms'),
(4, 'Room Vip King', 'r04.jpg', '42590', 'Luxury Rooms'),
(5, 'Royal Room', 'r05.jpg', '50000', 'Luxury Rooms'),
(6, 'Twin Room', 'r06.jpg', '20660', 'Twin Rooms'),
(7, 'Single Room', 'r07.jpg', '15500', 'Twin Rooms'),
(8, 'Luxury Twin Room', 'r08.jpg', '35500', 'Twin Rooms'),
(9, 'Small Room', 'r09.jpg', '25000', 'Twin Rooms'),
(10, 'Kids Room', 'r010.jpg', '10000', 'Twin Rooms'),
(11, 'Studio Room', 'r011.jpg', '28990', 'Double Rooms'),
(12, 'Triple Room', 'r012.jpg', '19000', 'Double Rooms'),
(13, 'Master Room', 'r013.jpg', '45360', 'Double Rooms'),
(14, 'Room View Sea', 'r014.jpg', '29000', 'Double Rooms'),
(15, 'Mountain View Room', 'r015.jpg', '46900', 'Double Rooms'),
(24, 'Premium King Room', 'r_a1.jpg', '45999', 'Luxury Rooms'),
(25, 'Best Queen Room', 'r_a2.jpg', '40999', 'Luxury Rooms'),
(26, 'Single Luxury Room', 'sr1.jpg', '12000', 'Single Rooms'),
(27, 'single Balcony Room', 'sr2.png', '10500', 'Single Rooms'),
(28, 'Single Room', 'sr3.jpg', '9000', 'Single Rooms'),
(29, 'Junior Suite', 'sr4.jpg', '13000', 'Single Rooms'),
(30, 'Deluxe Room', 'sr5.png', '14000', 'Single Rooms');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkavail`
--
ALTER TABLE `checkavail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkavail`
--
ALTER TABLE `checkavail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
