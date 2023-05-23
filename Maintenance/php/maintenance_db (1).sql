-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 10:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `activitylog_tbl`
--

CREATE TABLE `activitylog_tbl` (
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_fullname` varchar(300) NOT NULL,
  `activity` varchar(300) NOT NULL,
  `maintenance_id` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `time` varchar(300) NOT NULL,
  `role` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activitylog_tbl`
--

INSERT INTO `activitylog_tbl` (`activity_id`, `user_id`, `user_fullname`, `activity`, `maintenance_id`, `date`, `time`, `role`) VALUES
(11, 1770, 'gil', 'Log in', 'log in', '2023-05-02', '1683038826', 'admin'),
(12, 1770, 'gil', 'Adding Maintenance', '6451227d905d2', '2023-05-02', '1683038845', 'admin'),
(13, 1770, 'gil', 'Adding Maintenance', '645122ade037e', '2023-05-02', '1683038894', 'admin'),
(14, 1770, 'gil', 'Adding Maintenance', '645122bdf1ade', '2023-05-02', '1683038910', 'admin'),
(15, 1770, 'gil', 'Approving parts', '6451227d905d2', '2023-05-02', '1683039052', 'admin'),
(16, 1770, 'gil', 'Finishing maintenance', '6451227d905d2', '2023-05-02', '1683039156', 'admin'),
(17, 1770, 'gil', 'Log in', 'log in', '2023-05-04', '1683219966', 'admin'),
(18, 1770, 'gil', 'Log out', 'log out', '2023-05-04', '1683219977', 'admin'),
(19, 1770, 'gil', 'Log in', 'log in', '2023-05-06', '1683396378', 'admin'),
(20, 1770, 'gil', 'Adding Maintenance', '6456974487393', '2023-05-06', '1683396420', 'admin'),
(21, 1770, 'gil', 'Approving parts', '645122bdf1ade', '2023-05-06', '1683396427', 'admin'),
(22, 1770, 'gil', 'Finishing maintenance', '645122bdf1ade', '2023-05-06', '1683396439', 'admin'),
(23, 1770, 'gil', 'Approving parts', '6456974487393', '2023-05-06', '1683396446', 'admin'),
(24, 1770, 'gil', 'Finishing maintenance', '6456974487393', '2023-05-06', '1683396456', 'admin'),
(25, 1770, 'gil', 'Approving parts', '645122ade037e', '2023-05-06', '1683396461', 'admin'),
(26, 1770, 'gil', 'Approving parts', '645122ade037e', '2023-05-06', '1683396461', 'admin'),
(27, 1770, 'gil', 'Finishing maintenance', '645122ade037e', '2023-05-06', '1683396464', 'admin'),
(28, 1770, 'gil', 'Log out', 'log out', '2023-05-06', '1683396506', 'admin'),
(29, 1770, 'gil', 'Log in', 'log in', '2023-05-07', '1683471795', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_tbl`
--

CREATE TABLE `equipment_tbl` (
  `equipment_id` int(11) NOT NULL,
  `equipment_type` varchar(300) NOT NULL,
  `operator_id` int(11) NOT NULL,
  `status` varchar(300) NOT NULL,
  `maintenance_quality` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_tbl`
--

INSERT INTO `equipment_tbl` (`equipment_id`, `equipment_type`, `operator_id`, `status`, `maintenance_quality`) VALUES
(1001010, 't', 0, 'Waiting', 'Poor'),
(123123444, 't', 0, 'Waiting', 'Poor'),
(1231234447, 'b', 0, 'Waiting', 'Poor'),
(1231234449, 'e', 0, 'Waiting', 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `history_tbl`
--

CREATE TABLE `history_tbl` (
  `maintenance_id` varchar(300) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `equipment_type` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `technician_name` varchar(300) NOT NULL,
  `technician_id` int(11) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_tbl`
--

INSERT INTO `history_tbl` (`maintenance_id`, `equipment_id`, `equipment_type`, `date`, `technician_name`, `technician_id`, `status`) VALUES
('6451227d905d2', 1001010, 't', '2023-05-02', 'gil', 1770, 'Waiting'),
('645122ade037e', 123123444, 't', '2023-05-02', 'gil', 1770, 'Waiting'),
('645122bdf1ade', 1231234449, 'e', '2023-05-02', 'gil', 1770, 'Waiting'),
('6451227d905d2', 1001010, 't', '2023-05-02', 'gil', 1770, 'Approved'),
('6451227d905d2', 1001010, 't', '2023-05-02', 'gil', 1770, 'Finish'),
('6456974487393', 1231234447, 'b', '2023-05-06', 'gil', 1770, 'Waiting'),
('645122bdf1ade', 1231234449, 'e', '2023-05-06', 'gil', 1770, 'Approved'),
('645122bdf1ade', 1231234449, 'e', '2023-05-06', 'gil', 1770, 'Finish'),
('6456974487393', 1231234447, 'b', '2023-05-06', 'gil', 1770, 'Approved'),
('6456974487393', 1231234447, 'b', '2023-05-06', 'gil', 1770, 'Finish'),
('645122ade037e', 123123444, 't', '2023-05-06', 'gil', 1770, 'Approved'),
('645122ade037e', 123123444, 't', '2023-05-06', 'gil', 1770, 'Approved'),
('645122ade037e', 123123444, 't', '2023-05-06', 'gil', 1770, 'Finish');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_tbl`
--

CREATE TABLE `maintenance_tbl` (
  `maintenance_id` varchar(300) NOT NULL,
  `equipment_id` int(11) NOT NULL,
  `equipment_type` varchar(300) NOT NULL,
  `repair` varchar(300) NOT NULL,
  `parts` varchar(300) NOT NULL,
  `parts_price` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `technician_name` varchar(300) NOT NULL,
  `technician_id` int(11) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenance_tbl`
--

INSERT INTO `maintenance_tbl` (`maintenance_id`, `equipment_id`, `equipment_type`, `repair`, `parts`, `parts_price`, `date`, `technician_name`, `technician_id`, `status`) VALUES
('6451227d905d2', 1001010, 't', 'wheel', 'wheel,,,,', '23,,,,', '2023-05-02', 'tech1', 1, 'Ready'),
('645122ade037e', 123123444, 't', 'bolt', 'bolt,,,,', '23,,,,', '2023-05-02', 'tech1', 1, 'Ready'),
('645122bdf1ade', 1231234449, 'e', 'lock', 'bolt,,,,', '23,,,,', '2023-05-02', 'tech1', 1, 'Ready'),
('6456974487393', 1231234447, 'b', 'wheel', 'wheel,dsa,,,', '23,123,,,', '2023-05-06', 'gil', 1770, 'Ready');

-- --------------------------------------------------------

--
-- Table structure for table `monthly_maintenance`
--

CREATE TABLE `monthly_maintenance` (
  `equipment_id` int(11) NOT NULL,
  `last_check-up_date` varchar(300) NOT NULL,
  `next_check-up_date` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parts_tbl`
--

CREATE TABLE `parts_tbl` (
  `maintenance_id` varchar(300) NOT NULL,
  `parts_name` varchar(300) NOT NULL,
  `parts_price` varchar(300) NOT NULL,
  `date` varchar(300) NOT NULL,
  `equipmet_id` int(11) NOT NULL,
  `equipment_type` varchar(300) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parts_tbl`
--

INSERT INTO `parts_tbl` (`maintenance_id`, `parts_name`, `parts_price`, `date`, `equipmet_id`, `equipment_type`, `status`) VALUES
('6450b93abd81e', 'wheel,dsa,,,', '23,123,,,', '2023-05-02', 123123444, 'Back o', 'Approved'),
('6450c28862d08', 'wheel,,,,', ',,,,', '2023-05-02', 1231234447, 'Backd', 'Approved'),
('6450c40fa6cbf', ',,,,', ',,,,', '2023-05-02', 1231234449, 'Baj', 'waiting'),
('6450c411d7676', ',,,,', ',,,,', '2023-05-02', 1231234449, 'Baj', 'waiting'),
('6450c4646930b', ',,,,', ',,,,', '2023-05-02', 1231234447, 'Backd', 'waiting'),
('6450c48fd5456', ',,,,', ',,,,', '2023-05-02', 1231234447, 'Backd', 'waiting'),
('6450c5010a156', ',,,,', ',,,,', '2023-05-02', 1001010, 'Dump Track', 'waiting'),
('6450dd4d03a21', ',,,,', ',,,,', '2023-05-02', 123123444, 'Back o', 'waiting'),
('6451227d905d2', 'wheel,,,,', '23,,,,', '2023-05-02', 1001010, 't', 'Approved'),
('645122ade037e', 'bolt,,,,', '23,,,,', '2023-05-02', 123123444, 't', 'Approved'),
('645122bdf1ade', 'bolt,,,,', '23,,,,', '2023-05-02', 1231234449, 'e', 'Approved'),
('6456974487393', 'wheel,dsa,,,', '23,123,,,', '2023-05-06', 1231234447, 'b', 'Approved');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `role`) VALUES
(1, 'Mark Manugue', 'mmanugue', '1234', 'admin'),
(3, 'Christian Angelo Cagas', 'ccagas', '1234', 'admin'),
(12, 'Arjelica Rhoede Tabanao', 'atabanao', '1234', 'user'),
(17, 'Dianne Billones', 'dbillones', '1234', 'user'),
(1770, 'gil', 'gil', 'pass', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activitylog_tbl`
--
ALTER TABLE `activitylog_tbl`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `equipment_tbl`
--
ALTER TABLE `equipment_tbl`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `maintenance_tbl`
--
ALTER TABLE `maintenance_tbl`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `parts_tbl`
--
ALTER TABLE `parts_tbl`
  ADD PRIMARY KEY (`maintenance_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activitylog_tbl`
--
ALTER TABLE `activitylog_tbl`
  MODIFY `activity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1771;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
