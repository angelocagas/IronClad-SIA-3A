-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 01:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maintenance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment_listing`
--

CREATE TABLE `equipment_listing` (
  `equipment_id` int(11) NOT NULL,
  `equipment_type` varchar(300) NOT NULL,
  `maintenance_date` date NOT NULL,
  `status` varchar(300) NOT NULL,
  `equipment_name` varchar(50) DEFAULT NULL,
  `availability` varchar(333) NOT NULL,
  `purchase_date` date DEFAULT NULL,
  `warranty_expiration_date` date DEFAULT NULL,
  `last_update` date NOT NULL,
  `need_repair` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `equipment_listing`
--

INSERT INTO `equipment_listing` (`equipment_id`, `equipment_type`, `maintenance_date`, `status`, `equipment_name`, `availability`, `purchase_date`, `warranty_expiration_date`, `last_update`, `need_repair`) VALUES
(1, 'Bulldozer', '2023-05-26', 'good', 'Caterpillar D9', 'in use', '2022-01-15', '2025-01-14', '2023-05-26', '0'),
(2, 'Excavator', '2023-05-26', 'good', 'Komatsu PC200', 'Not Available', '2021-08-10', '2024-08-09', '2023-05-26', '0'),
(3, 'Crane', '2023-05-26', 'bad', 'Liebherr LTM 1200', 'Not Available', '2023-02-28', '2026-02-27', '2023-05-26', '0'),
(5, 'Excavator', '2023-05-26', 'Good', 'Volvo EC210', 'Not Available', '2022-03-20', '2025-03-19', '2023-05-26', '0'),
(6, 'Crane', '2023-05-26', 'good', 'Tadano ATF 220G-5', 'Not Available', '2023-01-10', '2026-01-09', '2023-05-26', '0'),
(7, 'Bulldozer', '2023-05-26', 'Good', 'Komatsu D65', 'Available', '2021-11-18', '2024-11-17', '2023-05-26', '0'),
(8, 'Excavator', '2023-05-26', 'Bad', 'Caterpillar 320', 'Not Available', '2020-09-02', '2023-09-01', '2023-05-26', '0'),
(9, 'Crane', '2023-05-26', 'Good', 'Kobelco CK1600G-2', 'In Use', '2023-03-15', '2026-03-14', '2023-05-26', '0'),
(10, 'Bulldozer', '2023-05-26', 'bad', 'Case 1650L', 'Not Available', '2022-05-10', '2025-05-09', '2023-05-26', '0'),
(10169, 'Backhoe v23', '0000-00-00', 'good', 'Backhoe', 'available', '2023-05-26', '2023-07-06', '2023-05-26', 'no'),
(10170, 'ExcavatorV59', '0000-00-00', 'good', 'Excavator', 'in use', '2000-11-11', '2000-11-11', '2023-05-26', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `history_tbl`
--

CREATE TABLE `history_tbl` (
  `equipment_name` varchar(300) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `equipment_type` varchar(300) NOT NULL,
  `history_date` date NOT NULL,
  `name_of_admin` varchar(300) NOT NULL,
  `action_done` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_tbl`
--

INSERT INTO `history_tbl` (`equipment_name`, `equipment_id`, `equipment_type`, `history_date`, `name_of_admin`, `action_done`) VALUES
('Trucker', 1, 'TRUCKV9', '2023-05-26', 'JOSHUA MELENDRES', 'ADD'),
('Backhoe', 10169, 'Backhoe v23', '2023-05-26', 'JOSHUA MELENDRES', 'ADD'),
('Trucker', 1, 'TRUCKV9', '2023-05-26', 'JOSHUA MELENDRES', 'Delete'),
('test', 10170, 'test', '2023-05-26', 'JOSHUA MELENDRES', 'ADD'),
('Excavator', 10170, 'ExcavatorV59', '2023-05-26', 'JOSHUA MELENDRES', 'update'),
('Excavator', 10170, 'ExcavatorV59', '2023-05-26', 'JOSHUA MELENDRES', 'update'),
('John Deere 850J', 4, 'Bulldozer', '2023-05-26', 'Joshua Melendres', 'update'),
('Tadano ATF 220G-5', 6, 'Crane', '2023-05-26', 'Joshua Melendres', 'update'),
('Case 1650L', 10, 'Bulldozer', '2023-05-26', 'Joshua Melendres', 'update'),
('Case 1650L', 10, 'Bulldozer', '2023-05-26', 'Joshua Melendres', 'update'),
('Komatsu PC200', 2, 'Excavator', '2023-05-26', 'Joshua Melendres', 'update'),
('Caterpillar D9', 1, 'Bulldozer', '2023-05-26', 'Joshua Melendres', 'update'),
('Liebherr LTM 1200', 3, 'Crane', '2023-05-26', 'Joshua Melendres', 'update'),
('John Deere 850J', 4, 'Bulldozer', '2023-05-26', 'Joshua Melendres', 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(69, 'Joshua Melendres', 'josu', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment_listing`
--
ALTER TABLE `equipment_listing`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment_listing`
--
ALTER TABLE `equipment_listing`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10171;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
