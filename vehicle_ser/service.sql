-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 04:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagory_list`
--

CREATE TABLE `catagory_list` (
  `id` int(11) NOT NULL,
  `catagory` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory_list`
--

INSERT INTO `catagory_list` (`id`, `catagory`) VALUES
(2, '2 wheeler'),
(3, '3 wheeler'),
(4, '4 wheeler'),
(124, '6 wheelers'),
(126, 'Earth Movers');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `servce_request_id` varchar(20) NOT NULL,
  `action` varchar(10) NOT NULL,
  `cdat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `servce_request_id`, `action`, `cdat`) VALUES
(1, '13', 'INSERTED', '2023-01-27 21:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `mechanics`
--

CREATE TABLE `mechanics` (
  `id` int(11) NOT NULL,
  `mechname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mechanics`
--

INSERT INTO `mechanics` (`id`, `mechname`) VALUES
(17, 'ramesh pl'),
(18, 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `service_list`
--

CREATE TABLE `service_list` (
  `id` int(11) NOT NULL,
  `service` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_list`
--

INSERT INTO `service_list` (`id`, `service`) VALUES
(2, 'oil change '),
(3, 'wash'),
(4, 'engine tuning');

-- --------------------------------------------------------

--
-- Table structure for table `service_request`
--

CREATE TABLE `service_request` (
  `id` int(11) NOT NULL,
  `vehicletype` varchar(20) NOT NULL,
  `ownername` varchar(20) NOT NULL,
  `ownercontact` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `vehiclename` varchar(20) NOT NULL,
  `vehicleregno` varchar(20) NOT NULL,
  `servicedetail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service_request`
--

INSERT INTO `service_request` (`id`, `vehicletype`, `ownername`, `ownercontact`, `email`, `address`, `vehiclename`, `vehicleregno`, `servicedetail`) VALUES
(7, '2 wheeler', 'raj', 2147483647, 'vineethpulimaradka@g', 'kanakamajal', 'splender', 'ka 14  f 6273', 'oil change'),
(8, '2 wheeler', 'raja', 2147483647, 'vineethpulimaradka@g', 'kanakamajal', 'splender', 'ka 14  f 6273', 'oil change'),
(9, '3wheeler', 'vineeth', 2147483647, 'rakesh@gmail.com', 'pulimaradka', 'fz', 'ka 14  f 6273', 'oil change'),
(10, '3wheeler', 'yashwin', 2147483647, 'rakesh@gmail.com', 'pulimaradka', 'fz', 'ka 14  f 6273', 'oil change'),
(11, '3wheeler', 'sujith', 2147483647, 'rakesh@gmail.com', 'pulimaradka', 'fz', 'ka 14  f 6273', 'oil change'),
(13, '2 wheeler', 'yakshith', 2147483647, 'rakesh@gmail.com', 'pulimaradka', 'splender', 'ka 21 c 2453', 'oil change');

--
-- Triggers `service_request`
--
DELIMITER $$
CREATE TRIGGER `insertlog` AFTER INSERT ON `service_request` FOR EACH ROW INSERT INTO logs VALUES(null, NEW.id,'INSERTED',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'vineeth', 'vineeth', 'vineeth'),
(2, 'sujith', 'sujith', 'sujithbs');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagory_list`
--
ALTER TABLE `catagory_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanics`
--
ALTER TABLE `mechanics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_list`
--
ALTER TABLE `service_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_request`
--
ALTER TABLE `service_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagory_list`
--
ALTER TABLE `catagory_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mechanics`
--
ALTER TABLE `mechanics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `service_list`
--
ALTER TABLE `service_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `service_request`
--
ALTER TABLE `service_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
