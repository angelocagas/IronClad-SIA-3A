-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 06:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dispatchdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`id`, `username`, `password`, `role`) VALUES
(1, 'super', 'super', 'admin'),
(3, 'admin', 'admin', 'admin'),
(4, 'Kiko', 'Yamauchi', 'admin'),
(5, 'Elisha', 'eliquimora', 'admin'),
(6, 'Archie', 'Archiepogi123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `audittb`
--

CREATE TABLE `audittb` (
  `actID` int(100) NOT NULL,
  `userId` int(100) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `actdate` varchar(100) NOT NULL,
  `acttime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audittb`
--

INSERT INTO `audittb` (`actID`, `userId`, `username`, `activity`, `actdate`, `acttime`) VALUES
(70, NULL, 'super', 'Log In', '12-05-23', '09:46:51pm'),
(71, NULL, 'super', 'Log out', '12-05-23', '09:47:28pm'),
(76, NULL, 'super', 'Log In', '16-05-23', '06:16:49pm'),
(77, NULL, 'admin', 'Log In', '18-05-23', '03:24:33pm'),
(78, NULL, 'admin', 'Log In', '21-05-23', '04:56:32am'),
(79, NULL, 'admin', 'Log In', '23-05-23', '07:51:34am'),
(80, NULL, 'admin', 'Log out', '23-05-23', '07:56:54am'),
(81, NULL, 'admin', 'Log In', '23-05-23', '07:56:59am'),
(82, NULL, 'admin', 'Log out', '23-05-23', '07:57:58am'),
(83, NULL, 'super', 'Log In', '23-05-23', '07:58:12am'),
(84, NULL, 'super', 'Log out', '23-05-23', '07:58:49am'),
(85, NULL, 'admin', 'Log In', '23-05-23', '07:58:52am'),
(86, NULL, 'admin', 'Log out', '23-05-23', '07:59:34am'),
(87, NULL, 'admin', 'Log In', '23-05-23', '07:59:49am'),
(88, NULL, 'admin', 'Log out', '23-05-23', '02:42:37pm'),
(89, NULL, 'admin', 'Log In', '23-05-23', '02:43:19pm'),
(90, NULL, 'admin', 'Log out', '23-05-23', '02:47:40pm'),
(91, NULL, 'Kiko', 'Log In', '23-05-23', '02:48:04pm'),
(92, NULL, 'admin', 'Log In', '24-05-23', '09:35:51am'),
(93, NULL, 'admin', 'Log In', '26-05-23', '07:41:18am'),
(94, NULL, 'admin', 'Log In', '27-05-23', '07:29:58pm'),
(95, NULL, 'admin', 'Log out', '27-05-23', '08:02:35pm'),
(96, NULL, 'admin', 'Log In', '27-05-23', '08:02:40pm'),
(97, NULL, 'admin', 'Log In', '27-05-23', '08:19:25pm'),
(98, NULL, 'admin', 'Log In', '27-05-23', '08:20:36pm'),
(99, NULL, 'admin', 'Log In', '29-05-23', '03:59:13pm'),
(100, NULL, 'admin', 'Log In', '03-06-23', '03:59:26pm'),
(101, NULL, 'admin', 'Log In', '04-06-23', '02:17:57am'),
(102, NULL, 'admin', 'Log out', '04-06-23', '02:18:31am'),
(103, NULL, 'Archie', 'Log In', '04-06-23', '02:18:57am');

-- --------------------------------------------------------

--
-- Table structure for table `checkpointtb`
--

CREATE TABLE `checkpointtb` (
  `id` int(255) NOT NULL,
  `equipname` varchar(255) NOT NULL,
  `checkstat` varchar(255) NOT NULL,
  `checktime` varchar(255) NOT NULL,
  `opname` varchar(255) NOT NULL,
  `availstat` varchar(255) NOT NULL,
  `mainstat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkpointtb`
--

INSERT INTO `checkpointtb` (`id`, `equipname`, `checkstat`, `checktime`, `opname`, `availstat`, `mainstat`) VALUES
(1, 'Dump Truck', 'Good', '10:30 AM', 'Russel Malang', 'Available', 'Good'),
(6, 'Skid-steer loader', 'Good', '02:30 PM', 'Gilbert Garcia', 'Available', 'Neutral'),
(7, 'Compactor', 'Excellent', '04:30 PM', 'Archie De Jesus', 'Available', 'Excellent'),
(8, 'Bulldozer', 'Good', '02:30 PM', 'Russel Regala', 'Not Available', 'Good'),
(9, 'Forklift', 'Poor', '10:30 AM', 'Joshua Balaoro', 'Not Available', 'Poor'),
(13, 'Bulldozer', 'Excellent', '01:00 PM', 'Lelouch', 'Available', 'Good'),
(14, 'Skid-steer loader', 'Good', '12:30 PM', 'Russel Regala', 'Available', 'Neutral'),
(15, 'Excavator', 'Good', '10:30 AM', 'Archie', 'Not Available', 'Excellent'),
(16, 'Forklift', 'Poor', '10:30 AM', 'James David', 'Not Available', 'Poor');

-- --------------------------------------------------------

--
-- Table structure for table `drivertb`
--

CREATE TABLE `drivertb` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `dlnum` varchar(255) NOT NULL,
  `dlenum` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `acarrier` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivertb`
--

INSERT INTO `drivertb` (`id`, `name`, `dlnum`, `dlenum`, `phone`, `email`, `acarrier`) VALUES
(23, 'Archie De Jesus', '09/123/133', '12/12/2023', '09847582342', 'Chie@gmail.com', 'Tilt-deck Trailers'),
(28, 'Gilbert', '98/890/567', '02/21/2023', '09897867465', 'Gilbert@gmail.com', 'Flatbed Trailer'),
(29, 'Moratin', '98/789/890', '07/23/2023', '0916374826', 'Kristian@gmail.com', 'Platform Trailer'),
(31, 'Kiko Yamauchi', '98/678/456', '12/12/2023', '09728129345', 'Yamauchi@gmail.com', 'Platform Trailer');

-- --------------------------------------------------------

--
-- Table structure for table `fleetoperationtb`
--

CREATE TABLE `fleetoperationtb` (
  `id` int(255) NOT NULL,
  `dispatchdate` varchar(255) NOT NULL,
  `dispatchloc` varchar(255) NOT NULL,
  `driverID` int(255) NOT NULL,
  `operatorID` int(255) NOT NULL,
  `estimatedtime` varchar(255) NOT NULL,
  `opstatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fleetoperationtb`
--

INSERT INTO `fleetoperationtb` (`id`, `dispatchdate`, `dispatchloc`, `driverID`, `operatorID`, `estimatedtime`, `opstatus`) VALUES
(22, '05/09/2023', 'San Simon', 23, 14, '3 Hours', 'Excellent'),
(23, '05/12/2023', 'San Fernando', 23, 0, '5 Hours', 'Excellent'),
(66, '05/24/2023', 'Pampanga', 23, 23, '3 Hours', 'Excellent'),
(68, '05/26/2023', 'United States', 56, 23, '8 Hours', 'Good'),
(69, '05/26/2023', 'Dubai', 2066, 2066, '8 Hours', 'Excellent'),
(76, '05/09/2023', 'San Simon', 3030, 3030, '3 Hours', 'Good'),
(77, '2023-05-28', 'San Isidro', 2066, 2066, '8 Hours', 'Excellent');

-- --------------------------------------------------------

--
-- Table structure for table `mytoto`
--

CREATE TABLE `mytoto` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `time` time NOT NULL DEFAULT current_timestamp(),
  `activity` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mytoto`
--

INSERT INTO `mytoto` (`id`, `date`, `time`, `activity`, `username`, `duration`) VALUES
(30, '2023-05-14', '19:28:19', 'Lunch', ' super ', ''),
(31, '2023-05-14', '19:42:44', 'Time On', ' super ', ''),
(32, '2023-05-14', '19:43:00', 'Lunch', ' super ', ''),
(35, '2023-05-14', '20:26:54', 'Extracurricular', ' super ', ''),
(36, '2023-05-17', '00:17:00', 'Time On', ' super ', ''),
(37, '2023-05-18', '21:24:43', 'Time On', ' admin ', ''),
(38, '2023-05-21', '10:56:43', 'Time On', ' admin ', ''),
(39, '2023-05-23', '13:51:40', 'Break', ' admin ', ''),
(40, '2023-05-23', '13:52:13', 'Lunch', ' admin ', ''),
(41, '2023-05-23', '13:55:01', 'Time On', ' admin ', ''),
(42, '2023-05-23', '13:57:05', 'Break', ' admin ', ''),
(43, '2023-05-23', '13:58:19', 'Time On', ' super ', ''),
(44, '2023-05-23', '13:58:33', 'Time On', ' super ', ''),
(45, '2023-05-23', '13:58:59', 'Time On', ' admin ', ''),
(46, '2023-05-23', '14:00:02', 'Lunch', ' admin ', ''),
(47, '2023-05-23', '20:43:32', 'Time On', ' admin ', ''),
(48, '2023-05-24', '15:35:58', 'Time On', ' admin ', ''),
(49, '2023-05-24', '22:37:17', 'Time On', ' admin ', ''),
(50, '2023-05-24', '22:37:20', 'Select an Activity', ' admin ', ''),
(51, '2023-05-26', '13:41:27', 'Time On', ' admin ', ''),
(52, '2023-05-26', '21:48:28', 'Time On', ' admin ', ''),
(53, '2023-05-28', '01:30:05', 'Time On', ' admin ', ''),
(54, '2023-05-28', '02:02:53', 'Time On', ' admin ', ''),
(55, '2023-05-28', '02:19:31', 'Break', ' admin ', ''),
(56, '2023-05-28', '02:20:41', 'Lunch', ' admin ', ''),
(57, '2023-05-29', '21:59:20', 'Time On', ' admin ', ''),
(58, '2023-06-03', '21:59:35', 'Break', ' admin ', ''),
(59, '2023-06-03', '23:20:32', 'Lunch', ' admin ', ''),
(60, '2023-06-04', '07:22:50', 'Time On', ' admin ', ''),
(61, '2023-06-04', '07:36:29', 'Time On', ' admin ', ''),
(62, '2023-06-04', '07:48:25', 'Select an Activity', 'admin', ''),
(63, '2023-06-04', '07:51:27', 'Lunch', 'admin', ''),
(64, '2023-06-04', '08:19:16', 'Time On', 'Archie', '');

-- --------------------------------------------------------

--
-- Table structure for table `operatortb`
--

CREATE TABLE `operatortb` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `certification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operatortb`
--

INSERT INTO `operatortb` (`id`, `name`, `number`, `email`, `certification`) VALUES
(16, 'Russel Malang', '0956748935', 'Russel@Malang', 'Intermidiate Operator'),
(17, 'Archie De Jesus', '0984517397', 'Chie@gmail.com', 'Grade A Operator'),
(18, 'Gilbert Garcia', '0987654357', 'Gilbert@gGarcia', 'Novice Operator'),
(19, 'Ian Villarico', '0986547632', 'Ian@Villarico', 'Novice Operator'),
(20, 'Kenneth Moratin', '09876543234', 'Net@Kristian', 'Novice Operator'),
(22, 'Ira Liguit', '09896125467', 'Hira@gmail.com', 'Novice Operator');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `req_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `account` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `encoder` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `date`, `account`, `amount`, `type`, `encoder`, `status`, `description`) VALUES
(16, '2023-05-06', 'Accounting', 666, 'debit', 'admin', 'pending', 'Test'),
(17, '2023-05-06', 'Accounting', 600000, 'credit', 'admin', 'pending', 'TESTING'),
(18, '2023-05-06', 'Accounting', 100000, 'credit', 'admin', 'pending', 'Another Test');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `emp_id`, `username`, `fullname`, `department`, `position`, `annual_salary`) VALUES
(1, 2023001, 'mmanugue', 'Mark Manugue', 'Accounting', 'Chief Financial Officer', '2000000'),
(2, 2023002, 'atabanao', 'Arjelica Rhoede Tabanao', 'Accounting', 'Accounting Manager', '1750000'),
(3, 2023003, 'dbillones', 'Dianne Billones', 'Accounting', 'Assistant Controller', '1500000'),
(4, 2023004, 'jcanencia', 'Juli Mae Canencia', 'Accounting', 'Financial Analyst', '1250000'),
(5, 2023005, 'ccagas', 'Christian Angelo Cagas', 'Accounting', 'Senior Accountant', '1500000'),
(6, 2023006, 'nesguerra', 'Nikka Virginia Esguerra', 'Accounting', 'Budget Analyst', '750000'),
(7, 2023007, 'chill', 'Charish Hill', 'Accounting', 'Bookkeeper', '600000'),
(8, 2023008, 'mdayao', 'Marinel Dayao', 'Accounting', 'Clerk', '500000'),
(9, 2023100, 'adejesus', 'Archie De Jesus', 'Dispatch', 'Admin', '1750000'),
(10, 2023200, 'ggarcia', 'Gilbert Garcia', 'Maintenance', 'Admin', '1750000'),
(11, 2023300, 'jbalaoro', 'Joshua Balaoro', 'Equipment Lifecycle', 'Admin', '1750000'),
(12, 2023400, 'rregala', 'Russel Kenneth Regala', 'Sales and Rentals', 'Admin', '1750000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintb`
--
ALTER TABLE `admintb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `audittb`
--
ALTER TABLE `audittb`
  ADD PRIMARY KEY (`actID`);

--
-- Indexes for table `checkpointtb`
--
ALTER TABLE `checkpointtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivertb`
--
ALTER TABLE `drivertb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fleetoperationtb`
--
ALTER TABLE `fleetoperationtb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mytoto`
--
ALTER TABLE `mytoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `operatortb`
--
ALTER TABLE `operatortb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintb`
--
ALTER TABLE `admintb`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `audittb`
--
ALTER TABLE `audittb`
  MODIFY `actID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `checkpointtb`
--
ALTER TABLE `checkpointtb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `drivertb`
--
ALTER TABLE `drivertb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `fleetoperationtb`
--
ALTER TABLE `fleetoperationtb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `mytoto`
--
ALTER TABLE `mytoto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `operatortb`
--
ALTER TABLE `operatortb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
