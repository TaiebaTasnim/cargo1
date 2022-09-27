-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2022 at 09:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargo_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `branch_name`, `phone`, `email`, `password`) VALUES
(1, 'Taieba Tasnim', 'main admin', '01720996654', 'admin@gmail.com', '246'),
(2, 'Raisa Sadia', 'Malopara', '01847226700', 'raisa@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` int(30) NOT NULL,
  `branch_name` varchar(100) NOT NULL,
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `data_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `street`, `city`, `country`, `contact`, `data_created`) VALUES
(1, 'Gulshan branch', '127/7 Nazrul Lane', 'Dhaka', 'Bangladesh', '01790445770', '2022-09-24 02:07:56'),
(2, 'Malopara', 'Shaheb Bazar', 'Rajshahi', 'Bangladesh', '01840087950', '2022-09-25 19:34:53'),
(3, 'Boshundhara', 'New Lane', 'Dhaka', 'Bangladesh', '01815452714', '2022-09-26 04:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `parcels`
--

CREATE TABLE `parcels` (
  `reference_number` varchar(100) NOT NULL,
  `sender_name` text NOT NULL,
  `recipient_name` text NOT NULL,
  `delivery_branch` text NOT NULL,
  `total_item` varchar(100) NOT NULL,
  `total_price` float NOT NULL,
  `status` varchar(100) NOT NULL,
  `data_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parcels`
--

INSERT INTO `parcels` (`reference_number`, `sender_name`, `recipient_name`, `delivery_branch`, `total_item`, `total_price`, `status`, `data_created`) VALUES
('20100', 'rupok ', 'rafee', ' Boshundhara', '2', 540, 'collected', '0000-00-00 00:00:00'),
('20101', 'mishu', 'Manha tabassum', ' Malopara', '1', 200, 'Item accepted by courier', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE `staffs` (
  `id` int(30) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `branch` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin,2=staff',
  `data_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `first_name`, `last_name`, `branch`, `email`, `password`, `type`, `data_created`) VALUES
(1, 'Taieba', 'Tasnim', 'Uposhahar', 'tasnimtaieba18@gmail.com', '13579', 2, '2022-09-24 02:33:50'),
(2, 'Suraiya', 'jainab', 'Malopara', 'suraiya@gmail.com', '1234', 2, '2022-09-24 02:47:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parcels`
--
ALTER TABLE `parcels`
  ADD PRIMARY KEY (`reference_number`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staffs`
--
ALTER TABLE `staffs`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
