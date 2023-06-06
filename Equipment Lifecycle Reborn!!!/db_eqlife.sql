-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 10:06 PM
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
-- Database: `db_eqlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit`
--

CREATE TABLE `audit` (
  `audit_id` int(100) NOT NULL,
  `role` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `action` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audit`
--

INSERT INTO `audit` (`audit_id`, `role`, `username`, `action`, `timestamp`) VALUES
(462, 'admin', 'Babbb', 'login', '2023-06-06 15:05:16'),
(463, 'admin', 'Babbb', 'mytoto login', '2023-06-06 15:05:26'),
(464, 'admin', 'Babbb', 'mytoto logout', '2023-06-06 15:05:30'),
(465, 'admin', 'Babbb', 'mytoto login', '2023-06-06 15:12:05'),
(466, 'admin', 'Babbb', 'mytoto login', '2023-06-06 15:12:12'),
(467, 'admin', 'Babbb', 'mytoto logout', '2023-06-06 15:12:32'),
(468, 'admin', 'Babbb', 'mytoto login', '2023-06-06 15:26:50'),
(469, 'admin', 'Babbb', 'mytoto logout', '2023-06-06 15:27:17'),
(470, 'admin', 'Babbb', 'mytoto login', '2023-06-06 15:36:49'),
(471, 'admin', 'Babbb', 'mytoto logout', '2023-06-06 15:43:51'),
(472, 'admin', 'Babbb', 'invoicing', '2023-06-06 15:49:18'),
(473, 'admin', 'Babbb', 'delete user', '2023-06-06 15:59:51'),
(474, 'admin', 'Babbb', 'delete user', '2023-06-06 15:59:59'),
(475, 'admin', 'Babbb', 'delete user', '2023-06-06 16:00:34'),
(476, 'admin', 'Babbb', 'mytoto login', '2023-06-06 16:13:55'),
(477, 'admin', 'Babbb', 'invoicing', '2023-06-06 16:17:20'),
(478, 'admin', 'Babbb', 'mytoto login', '2023-06-06 16:34:21'),
(479, 'admin', 'Babbb', 'delete user', '2023-06-06 19:53:10'),
(480, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:53:53'),
(481, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:54:03'),
(482, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:54:13'),
(483, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:54:14'),
(484, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:54:39'),
(485, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:55:02'),
(486, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:55:19'),
(487, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:55:47'),
(488, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:57:38'),
(489, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:58:29'),
(490, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:59:35'),
(491, 'admin', 'Babbb', 'invoicing', '2023-06-06 19:59:35'),
(492, 'admin', 'Babbb', 'mytoto login', '2023-06-06 20:00:48'),
(493, 'admin', 'Babbb', 'mytoto logout', '2023-06-06 20:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `dispatch`
--

CREATE TABLE `dispatch` (
  `id` int(11) NOT NULL,
  `equipname` varchar(255) NOT NULL,
  `checkstat` varchar(255) NOT NULL,
  `chechktime` time NOT NULL,
  `opname` varchar(255) NOT NULL,
  `availstat` varchar(255) NOT NULL,
  `mainstat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dispatch`
--

INSERT INTO `dispatch` (`id`, `equipname`, `checkstat`, `chechktime`, `opname`, `availstat`, `mainstat`) VALUES
(1, 'Compactor', 'Not Available', '12:30:00', 'joshua balaoro', 'Available', 'Good'),
(2, 'Bulldozer', 'Not Available', '01:00:00', 'joshua balaoro', 'Available', 'Neutral'),
(3, 'Excavator', 'Not Available', '12:30:00', 'joshua balaoro', 'Available', 'Good'),
(4, 'Bulldozer', 'Available', '11:00:00', 'joshua arcelo', 'Available', 'Neutral'),
(5, 'Skid-steer loader', 'Available', '01:00:00', 'john', 'Not Available', 'Good'),
(6, 'Bulldozer', 'Available', '01:00:00', 'elene', 'Not Available', 'Excellent'),
(7, 'Forklift', 'Available', '01:00:00', 'babbb', 'Available', 'Neutral'),
(8, 'Forklift', 'Available', '01:00:00', 'babbb', 'Available', 'Neutral');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `maintenance_id` varchar(255) NOT NULL,
  `equipment_id` varchar(255) NOT NULL,
  `equipment_type` varchar(255) NOT NULL,
  `repair` varchar(255) NOT NULL,
  `parts` varchar(255) NOT NULL,
  `parts_price` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `technician_name` varchar(255) NOT NULL,
  `technician_id` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `maintenance_id`, `equipment_id`, `equipment_type`, `repair`, `parts`, `parts_price`, `date`, `technician_name`, `technician_id`, `status`) VALUES
(1, '2354', '123', 'Back O', 'Change Oil', '10 liter', '15000', '2023-06-15', 'archie dela cruz', '4533', 'Pending'),
(2, '457', '423', 'fork lift', 'gear', 'bearing', '21363', '2023-06-30', 'louie bacani', '2312', 'Pending'),
(3, '678', '567', '18 wheeler truck', 'tire', 'dunlopp', '10000', '2023-06-22', 'reynan blaza', '546421', 'Pending'),
(4, '9789', '23423', '24 wheeler truck', 'repaint', 'body kit', '40000', '2023-06-13', 'Aljohn Delo Santos', '20201321', 'Complete');

-- --------------------------------------------------------

--
-- Table structure for table `mytoto`
--

CREATE TABLE `mytoto` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `activity` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mytoto`
--

INSERT INTO `mytoto` (`id`, `date`, `time`, `activity`, `username`) VALUES
(4, '2023-05-07', '19:55:25', 'Time On', 'mmanugue'),
(5, '2023-05-07', '19:55:25', 'Break', 'mmanugue'),
(6, '2023-05-07', '19:55:25', 'Time On', 'mmanugue'),
(7, '2023-05-07', '19:55:25', 'Lunch', 'mmanugue'),
(8, '2023-05-07', '19:55:25', 'Coaching', 'mmanugue'),
(9, '2023-05-07', '19:55:25', 'Time On', 'mmanugue'),
(10, '2023-05-07', '19:55:25', 'Extracurricular', 'mmanugue'),
(11, '2023-05-07', '19:55:25', 'Time Off', 'mmanugue'),
(12, '2023-05-08', '19:55:25', 'Time On', 'mmanugue'),
(13, '2023-05-08', '19:55:25', 'Break', 'mmanugue'),
(14, '2023-05-08', '19:55:25', 'Time On', 'mmanugue'),
(15, '2023-05-08', '19:55:25', 'Lunch', 'mmanugue'),
(16, '2023-05-08', '19:55:25', 'Time On', 'mmanugue'),
(17, '2023-05-08', '19:55:25', 'Coaching', 'mmanugue'),
(18, '2023-05-08', '19:55:25', 'Extracurricular', 'mmanugue'),
(19, '2023-05-08', '19:55:25', 'Time Off', 'mmanugue'),
(20, '2023-05-09', '20:00:36', 'Time On', 'mmanugue'),
(21, '2023-05-09', '20:00:47', 'Break', 'mmanugue'),
(22, '2023-05-09', '20:00:52', 'Time On', 'mmanugue'),
(23, '2023-05-09', '20:00:55', 'Lunch', 'mmanugue'),
(24, '2023-05-09', '20:00:58', 'Time On', 'mmanugue'),
(25, '2023-05-09', '20:01:01', 'Coaching', 'mmanugue'),
(26, '2023-05-09', '20:01:03', 'Break', 'mmanugue'),
(27, '2023-05-09', '20:01:04', 'Extracurricular', 'mmanugue'),
(28, '2023-05-09', '20:01:06', 'Time Off', 'mmanugue'),
(29, '2023-05-09', '20:02:01', 'Time On', 'mmanugue'),
(30, '2023-05-10', '07:58:21', 'Time On', 'mmanugue'),
(31, '2023-05-10', '07:58:24', 'Break', 'mmanugue'),
(32, '2023-05-10', '07:58:27', 'Time On', 'mmanugue'),
(33, '2023-05-10', '07:58:29', 'Lunch', 'mmanugue'),
(34, '2023-05-10', '07:58:31', 'Time On', 'mmanugue'),
(35, '2023-05-10', '07:58:43', 'Coaching', 'mmanugue'),
(36, '2023-05-10', '07:58:45', 'Extracurricular', 'mmanugue'),
(37, '2023-05-10', '07:58:49', 'Break', 'mmanugue'),
(38, '2023-05-10', '07:59:07', 'Time Off', 'mmanugue'),
(39, '2023-05-13', '23:43:13', 'Time On', 'mmanugue'),
(40, '2023-05-13', '23:43:17', 'Break', 'mmanugue'),
(41, '2023-05-13', '23:43:20', 'Time On', 'mmanugue'),
(42, '2023-05-13', '23:43:35', 'Lunch', 'mmanugue'),
(43, '2023-05-13', '23:43:39', 'Time On', 'mmanugue'),
(44, '2023-05-13', '23:43:41', 'Break', 'mmanugue'),
(45, '2023-05-13', '23:43:43', 'Coaching', 'mmanugue'),
(46, '2023-05-13', '23:43:45', 'Extracurricular', 'mmanugue'),
(47, '2023-05-13', '23:43:49', 'Time Off', 'mmanugue'),
(48, '2023-05-14', '00:13:15', 'Time On', 'mmanugue'),
(49, '2023-05-14', '00:13:17', 'Break', 'mmanugue'),
(50, '2023-05-14', '00:13:19', 'Time On', 'mmanugue'),
(51, '2023-05-14', '00:13:21', 'Lunch', 'mmanugue'),
(52, '2023-05-14', '00:13:22', 'Time On', 'mmanugue'),
(53, '2023-05-14', '00:13:24', 'Break', 'mmanugue'),
(54, '2023-05-14', '00:13:26', 'Time On', 'mmanugue'),
(55, '2023-05-14', '00:13:27', 'Time Off', 'mmanugue'),
(56, '2023-05-14', '00:00:00', 'time on', 'mmanugue'),
(57, '2023-05-14', '00:00:00', 'time on', 'mmanugue'),
(58, '2023-05-14', '00:39:53', 'Select an Activity', 'mmanugue'),
(59, '2023-05-14', '00:40:10', 'Select an Activity', 'mmanugue'),
(60, '2023-05-14', '00:40:12', 'Select an Activity', 'mmanugue'),
(61, '2023-05-14', '00:42:11', 'Time On', 'mmanugue'),
(62, '2023-05-14', '00:42:15', 'Break', 'mmanugue'),
(63, '2023-05-14', '00:42:20', 'Time On', 'mmanugue'),
(64, '2023-05-14', '00:42:24', 'Lunch', 'mmanugue'),
(65, '2023-05-14', '00:42:30', 'Coaching', 'mmanugue'),
(66, '2023-05-14', '00:42:31', 'Time On', 'mmanugue'),
(67, '2023-05-14', '00:42:34', 'Time Off', 'mmanugue'),
(68, '2023-05-17', '21:37:12', 'Time On', 'mmanugue'),
(69, '2023-05-17', '21:37:14', 'Break', 'mmanugue'),
(70, '2023-05-17', '21:37:16', 'Time On', 'mmanugue'),
(71, '2023-05-17', '21:37:18', 'Lunch', 'mmanugue'),
(72, '2023-05-17', '21:37:20', 'Time On', 'mmanugue'),
(73, '2023-05-17', '21:37:23', 'Coaching', 'mmanugue'),
(74, '2023-05-17', '21:37:26', 'Extracurricular', 'mmanugue'),
(75, '2023-05-17', '21:37:28', 'Time Off', 'mmanugue'),
(76, '2023-05-21', '18:36:24', 'Time On', 'mmanugue'),
(77, '2023-05-21', '18:36:26', 'Break', 'mmanugue'),
(78, '2023-05-21', '18:36:27', 'Time On', 'mmanugue'),
(79, '2023-05-21', '18:36:29', 'Lunch', 'mmanugue'),
(80, '2023-05-21', '18:36:31', 'Coaching', 'mmanugue'),
(81, '2023-05-21', '18:36:34', 'Time On', 'mmanugue'),
(82, '2023-05-21', '18:36:36', 'Break', 'mmanugue'),
(83, '2023-05-21', '18:36:38', 'Extracurricular', 'mmanugue'),
(84, '2023-05-21', '18:36:40', 'Time Off', 'mmanugue'),
(85, '2023-05-22', '18:21:22', 'Time On', 'mmanugue'),
(86, '2023-05-22', '18:21:24', 'Break', 'mmanugue'),
(87, '2023-05-22', '18:21:26', 'Time On', 'mmanugue'),
(88, '2023-05-22', '18:21:27', 'Lunch', 'mmanugue'),
(89, '2023-05-22', '18:21:29', 'Coaching', 'mmanugue'),
(90, '2023-05-22', '18:21:31', 'Extracurricular', 'mmanugue'),
(91, '2023-05-22', '18:21:33', 'Break', 'mmanugue'),
(92, '2023-05-22', '18:21:36', 'Time On', 'mmanugue'),
(93, '2023-05-22', '18:21:38', 'Time Off', 'mmanugue'),
(94, '2023-05-22', '18:33:48', 'Time On', 'ccagas'),
(95, '2023-05-22', '18:33:50', 'Break', 'ccagas'),
(96, '2023-05-22', '18:33:53', 'Time On', 'ccagas'),
(97, '2023-05-22', '18:33:56', 'Lunch', 'ccagas'),
(98, '2023-05-22', '18:33:58', 'Coaching', 'ccagas'),
(99, '2023-05-22', '18:33:59', 'Time On', 'ccagas'),
(100, '2023-05-22', '18:34:00', 'Time Off', 'ccagas'),
(101, '2023-05-22', '18:38:33', 'Time On', 'dbillones'),
(102, '2023-05-22', '18:38:35', 'Break', 'dbillones'),
(103, '2023-05-22', '18:38:37', 'Time On', 'dbillones'),
(104, '2023-05-22', '18:38:38', 'Lunch', 'dbillones'),
(105, '2023-05-22', '18:38:41', 'Coaching', 'dbillones'),
(106, '2023-05-22', '18:38:43', 'Extracurricular', 'dbillones'),
(107, '2023-05-22', '18:38:45', 'Time On', 'dbillones'),
(108, '2023-05-22', '18:38:47', 'Break', 'dbillones'),
(109, '2023-05-22', '18:38:50', 'Time On', 'dbillones'),
(110, '2023-05-22', '18:38:52', 'Time Off', 'dbillones'),
(111, '2023-05-23', '12:11:07', 'Time On', 'dbillones'),
(112, '2023-05-23', '12:11:10', 'Break', 'dbillones'),
(113, '2023-05-23', '12:11:11', 'Time On', 'dbillones'),
(114, '2023-05-23', '12:11:13', 'Lunch', 'dbillones'),
(115, '2023-05-23', '12:11:14', 'Time On', 'dbillones'),
(116, '2023-05-23', '12:11:16', 'Coaching', 'dbillones'),
(117, '2023-05-23', '12:11:17', 'Extracurricular', 'dbillones'),
(118, '2023-05-23', '12:11:19', 'Break', 'dbillones'),
(119, '2023-05-23', '12:11:21', 'Time On', 'dbillones'),
(120, '2023-05-23', '12:11:23', 'Time Off', 'dbillones'),
(121, '2023-05-23', '19:47:54', 'Time On', 'mmanugue'),
(122, '2023-05-23', '19:47:56', 'Break', 'mmanugue'),
(123, '2023-05-23', '19:47:58', 'Lunch', 'mmanugue'),
(124, '2023-05-23', '19:48:02', 'Break', 'mmanugue'),
(125, '2023-05-23', '19:48:03', 'Time Off', 'mmanugue'),
(126, '2023-05-24', '22:13:16', 'Time On', 'mmanugue'),
(127, '2023-05-24', '22:13:18', 'Break', 'mmanugue'),
(128, '2023-05-24', '22:13:19', 'Time On', 'mmanugue'),
(129, '2023-05-24', '22:13:21', 'Lunch', 'mmanugue'),
(130, '2023-05-24', '22:13:23', 'Coaching', 'mmanugue'),
(131, '2023-05-24', '22:13:24', 'Time On', 'mmanugue'),
(132, '2023-05-24', '22:13:27', 'Break', 'mmanugue'),
(133, '2023-05-24', '22:13:28', 'Time Off', 'mmanugue'),
(134, '2023-06-06', '22:15:56', 'Time On', 'ccagas'),
(135, '2023-06-06', '22:16:00', 'Break', 'ccagas'),
(136, '2023-06-06', '22:16:03', 'Time On', 'ccagas'),
(137, '2023-06-06', '22:16:05', 'Lunch', 'ccagas'),
(138, '2023-06-06', '22:22:09', 'Lunch', 'ccagas'),
(139, '2023-06-06', '22:22:11', 'Time Off', 'ccagas'),
(140, '2023-06-06', '22:24:14', 'Lunch', 'ccagas'),
(141, '2023-06-06', '23:26:53', 'Lunch', 'Babbb'),
(142, '2023-06-06', '23:26:55', 'Extracurricular', 'Babbb'),
(143, '2023-06-06', '23:26:56', 'Time Off', 'Babbb'),
(144, '2023-06-06', '23:36:55', 'Lunch', 'Babbb'),
(145, '2023-06-06', '23:36:55', 'Lunch', 'Babbb'),
(146, '2023-06-06', '23:36:58', 'Extracurricular', 'Babbb'),
(147, '2023-06-06', '23:36:59', 'Time Off', 'Babbb');

-- --------------------------------------------------------

--
-- Table structure for table `off_rent_pick`
--

CREATE TABLE `off_rent_pick` (
  `cus_id` int(11) NOT NULL,
  `cus_nam` varchar(255) NOT NULL,
  `eq_nam` varchar(255) NOT NULL,
  `quan` varchar(255) NOT NULL,
  `date_retu` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `off_rent_pick`
--

INSERT INTO `off_rent_pick` (`cus_id`, `cus_nam`, `eq_nam`, `quan`, `date_retu`) VALUES
(1, 'josuuu', '1 wheeler', '10', '2023-06-22'),
(2, 'john', '5wheeler', '10', '2023-06-08'),
(3, 'isaac', 'grass cutter', '67', '2023-06-30'),
(4, 'john', '5wheeler', '10', '2023-06-08'),
(5, 'isaac', 'grass cutter', '67', '2023-06-30'),
(6, 'pelayo', 'rusi', '10', '2023-06-06'),
(7, 'micha', 'baldozer', '423', '2023-07-05');

-- --------------------------------------------------------

--
-- Table structure for table `on_site`
--

CREATE TABLE `on_site` (
  `cus_id` int(255) NOT NULL,
  `cus_nam` varchar(255) NOT NULL,
  `eq_nam` varchar(255) NOT NULL,
  `quan` int(255) NOT NULL,
  `date_rent` date NOT NULL,
  `date_retu` date NOT NULL,
  `stat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `on_site`
--

INSERT INTO `on_site` (`cus_id`, `cus_nam`, `eq_nam`, `quan`, `date_rent`, `date_retu`, `stat`) VALUES
(8, 'isaac', 'grass cutter', 67, '2023-06-06', '2023-06-30', 'Complete'),
(10, 'pelayo', 'rusi', 10, '2023-06-06', '2023-06-06', 'Complete'),
(11, 'archie', 'honda', 12, '2023-06-06', '2023-06-06', 'Drop'),
(12, 'dane', 'bulbasor', 67, '2023-06-06', '2023-06-06', 'Pending'),
(13, 'lolo', 'back 0', 3, '2023-06-06', '2023-06-06', 'Pending'),
(14, 'jen', 'still fork', 1, '2023-06-06', '2023-06-06', 'Pending'),
(15, 'jaja', 'fork lift', 2, '2023-06-06', '2023-06-06', 'Pending'),
(16, 'micha', 'baldozer', 423, '2023-06-06', '2023-07-05', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(100) NOT NULL,
  `emp_id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `annual_salary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `emp_id`, `username`, `fullname`, `department`, `position`, `annual_salary`) VALUES
(1, 2023001, 'mmanugue', 'Mark Manugue', 'Accounting', 'Chief Financial Officer', '2000000'),
(5, 2023005, 'ccagas', 'Christian Angelo Cagas', 'Accounting', 'Senior Accountant', '1500000'),
(9, 2023100, 'adejesus', 'Archie De Jesus', 'Dispatch', 'Admin', '1750000'),
(10, 2023200, 'ggarcia', 'Gilbert Garcia', 'Maintenance', 'Admin', '1750000'),
(11, 2023300, 'jbalaoro', 'Joshua Balaoro', 'Equipment Lifecycle', 'Admin', '1750000'),
(12, 2023400, 'rregala', 'Russel Kenneth Regala', 'Sales and Rentals', 'Admin', '1750000');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `cus_id` int(11) NOT NULL,
  `cus_nam` varchar(255) NOT NULL,
  `eq_nam` varchar(255) NOT NULL,
  `rep_nam` varchar(255) NOT NULL,
  `stat` varchar(255) NOT NULL,
  `op_nam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`cus_id`, `cus_nam`, `eq_nam`, `rep_nam`, `stat`, `op_nam`) VALUES
(1, 'dane', 'bulbasor', '', 'Pending', ''),
(2, 'isaac', 'grass cutter', '', 'Complete', ''),
(3, 'dane', 'bulbasor', '', 'Pending', ''),
(4, 'micha', 'baldozer', '', 'Pending', ''),
(5, 'jaja', 'fork lift', '', 'Pending', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `emp_id` int(100) NOT NULL DEFAULT 2023001,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `emp_id`, `fullname`, `username`, `password`, `role`, `email`, `department`, `phone`, `address`) VALUES
(1, 2023001, 'Mark Manugue', 'mmanugue', '1234', 'admin', 'mmanugue@ironclad.ph', 'Accounting', '9175456559', 'Bulaon Resettlement, Pampanga'),
(26, 2023005, 'Christian Angelo Cagas', 'ccagas', '1234', 'admin', 'ccagas@ironclad.ph', 'Accounting', '9175456563', 'Pampanga'),
(35, 202010175, 'Joshua Balaoro', 'Babbb', '1234', 'admin', 'josh@gmail.com', 'Equipment Lifecycle', '093665162640', 'del carmen lubao pampanga');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `dispatch`
--
ALTER TABLE `dispatch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytoto`
--
ALTER TABLE `mytoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `off_rent_pick`
--
ALTER TABLE `off_rent_pick`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `on_site`
--
ALTER TABLE `on_site`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`cus_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audit`
--
ALTER TABLE `audit`
  MODIFY `audit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=494;

--
-- AUTO_INCREMENT for table `dispatch`
--
ALTER TABLE `dispatch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mytoto`
--
ALTER TABLE `mytoto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;

--
-- AUTO_INCREMENT for table `off_rent_pick`
--
ALTER TABLE `off_rent_pick`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `on_site`
--
ALTER TABLE `on_site`
  MODIFY `cus_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `cus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
