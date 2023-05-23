-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 05:19 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_database`
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
(12, 'admin', 'mmanugue', 'login', '2023-04-10 11:49:38'),
(13, 'admin', 'mmanugue', 'logout', '2023-04-10 12:05:13'),
(14, 'admin', 'mmanugue', 'login', '2023-04-10 12:05:15'),
(15, 'admin', 'mmanugue', 'logout', '2023-04-10 12:05:18'),
(16, 'admin', 'mmanugue', 'login', '2023-04-10 12:05:20'),
(17, 'admin', 'mmanugue', 'login', '2023-04-10 14:15:26'),
(18, 'admin', 'mmanugue', 'login', '2023-04-11 11:06:55'),
(19, 'admin', 'mmanugue', 'logout', '2023-04-11 11:14:46'),
(20, 'admin', 'mmanugue', 'login', '2023-04-11 11:15:42'),
(21, 'admin', 'mmanugue', 'login', '2023-04-11 11:32:01'),
(22, 'admin', 'mmanugue', 'login', '2023-04-13 10:59:27'),
(23, 'admin', 'mmanugue', 'logout', '2023-04-13 11:17:09'),
(24, 'admin', 'mmanugue', 'login', '2023-04-13 11:17:13'),
(25, 'admin', 'mmanugue', 'login', '2023-04-13 11:18:14'),
(26, 'admin', 'mmanugue', 'login', '2023-04-13 11:20:36'),
(27, 'admin', 'mmanugue', 'login', '2023-04-13 11:21:40'),
(28, 'admin', 'mmanugue', 'login', '2023-04-13 11:24:58'),
(29, 'admin', 'mmanugue', 'login', '2023-04-13 11:25:44'),
(30, 'admin', 'mmanugue', 'add user', '2023-04-13 11:26:05'),
(31, 'admin', 'mmanugue', 'login', '2023-04-13 11:50:30'),
(32, 'admin', 'mmanugue', 'logout', '2023-04-13 11:50:34'),
(33, 'admin', 'ccagas', 'login', '2023-04-13 11:50:39'),
(34, 'admin', 'ccagas', 'logout', '2023-04-13 11:50:47'),
(35, 'admin', 'mmanugue', 'login', '2023-04-13 11:51:06'),
(36, 'admin', 'mmanugue', 'add user', '2023-04-13 11:51:37'),
(37, 'admin', 'mmanugue', 'login', '2023-04-14 10:38:24'),
(38, 'admin', 'mmanugue', 'login', '2023-04-14 11:43:24'),
(39, 'admin', 'mymanugue', 'login', '2023-04-16 11:23:41'),
(40, 'admin', 'mymanugue', 'add user', '2023-04-16 11:30:16'),
(41, 'admin', 'mymanugue', 'add user', '2023-04-16 11:39:20'),
(42, 'admin', 'mymanugue', 'delete user', '2023-04-16 11:39:41'),
(43, 'admin', 'mmanugue', 'logout', '2023-04-16 11:40:20'),
(44, 'admin', 'mmanugue', 'login', '2023-04-16 11:40:23'),
(45, 'admin', 'mmanugue', 'delete user', '2023-04-16 11:59:59'),
(46, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:01'),
(47, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:03'),
(48, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:06'),
(49, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:07'),
(50, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:10'),
(51, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:11'),
(52, 'admin', 'mmanugue', 'delete user', '2023-04-16 12:00:13'),
(53, 'admin', 'mmanugue', 'login', '2023-04-16 12:23:51'),
(54, 'admin', 'mmanugue', 'add new journal entry', '2023-04-16 14:34:35'),
(55, 'admin', 'mmanugue', 'add new journal entry', '2023-04-16 14:39:05'),
(56, 'admin', 'mmanugue', 'add new journal entry', '2023-04-16 14:41:25'),
(57, 'admin', 'mmanugue', 'add new journal entry', '2023-04-16 14:45:42'),
(58, 'admin', 'mmanugue', 'logout', '2023-04-16 15:28:02'),
(59, 'admin', 'ccagas', 'login', '2023-04-16 15:28:05'),
(60, 'admin', 'ccagas', 'add new journal entry', '2023-04-16 15:29:25'),
(61, 'admin', 'ccagas', 'logout', '2023-04-16 15:29:56'),
(62, 'admin', 'mmanugue', 'login', '2023-04-16 15:29:59'),
(63, 'admin', 'mmanugue', 'login', '2023-04-17 10:26:31'),
(64, 'admin', 'mmanugue', 'add new journal entry', '2023-04-17 11:33:18'),
(65, 'admin', 'mmanugue', 'add user', '2023-04-17 11:39:31'),
(66, 'admin', 'mmanugue', 'logout', '2023-04-17 11:40:40'),
(67, 'admin', 'ccagas', 'login', '2023-04-17 11:40:44'),
(68, 'admin', 'ccagas', 'logout', '2023-04-17 11:41:41'),
(69, 'admin', 'mmanugue', 'login', '2023-04-17 11:41:44'),
(70, 'admin', 'mmanugue', 'delete user', '2023-04-17 11:42:42'),
(71, 'admin', 'mmanugue', 'logout', '2023-04-17 11:42:46'),
(72, 'admin', 'mmanugue', 'login', '2023-04-17 11:42:49'),
(73, 'admin', 'mmanugue', 'login', '2023-04-18 10:52:59'),
(74, 'admin', 'mmanugue', 'edit user', '2023-04-18 11:08:47'),
(75, 'admin', 'mmanugue', 'delete user', '2023-04-18 11:09:26'),
(76, 'admin', 'mmanugue', 'add user', '2023-04-18 11:20:58'),
(77, 'admin', 'mmanugue', 'login', '2023-04-18 12:11:41'),
(78, 'admin', 'mmanugue', 'logout', '2023-04-18 13:09:39'),
(79, 'admin', 'ccagas', 'login', '2023-04-18 13:09:42'),
(80, 'admin', 'ccagas', 'logout', '2023-04-18 13:10:35'),
(81, 'admin', 'mmanugue', 'login', '2023-04-18 13:10:39'),
(82, 'admin', 'mmanugue', 'add new journal entry', '2023-04-18 13:18:32'),
(83, 'admin', 'mmanugue', 'add new journal entry', '2023-04-18 13:37:27'),
(84, 'admin', 'mmanugue', 'add new fund request', '2023-04-18 13:49:03'),
(85, 'admin', 'mmanugue', 'add new fund request', '2023-04-18 13:53:19'),
(86, 'admin', 'mmanugue', 'add new journal entry', '2023-04-18 13:57:40'),
(87, 'admin', 'mmanugue', 'add new journal entry', '2023-04-18 13:57:54'),
(88, 'admin', 'mmanugue', 'login', '2023-04-18 14:11:22'),
(89, 'admin', 'mmanugue', 'login', '2023-04-18 14:36:30'),
(90, 'admin', 'mmanugue', 'add new journal entry', '2023-04-18 14:37:34'),
(91, 'admin', 'mmanugue', 'add new fund request', '2023-04-18 14:41:33'),
(92, 'admin', 'mmanugue', 'add user', '2023-04-18 14:43:51'),
(93, 'admin', 'mmanugue', 'delete user', '2023-04-18 14:44:01'),
(94, 'admin', 'mmanugue', 'login', '2023-04-19 12:33:18'),
(95, 'admin', 'mmanugue', 'logout', '2023-04-19 12:46:50'),
(96, 'admin', 'ccagas', 'login', '2023-04-19 12:46:53'),
(97, 'admin', 'ccagas', 'logout', '2023-04-19 13:05:40'),
(98, 'admin', 'mmanugue', 'login', '2023-04-19 13:05:44'),
(99, 'admin', 'mmanugue', 'logout', '2023-04-19 13:43:04'),
(100, 'admin', 'mmanugue', 'login', '2023-04-26 13:01:52'),
(101, 'admin', 'mmanugue', 'login', '2023-04-29 12:21:39'),
(102, 'admin', 'mmanugue', 'add user', '2023-04-29 12:41:59'),
(103, 'admin', 'mmanugue', 'delete user', '2023-04-29 12:42:15'),
(104, 'admin', 'mmanugue', 'add user', '2023-04-29 12:42:29'),
(105, 'admin', 'mmanugue', 'delete user', '2023-04-29 12:43:45'),
(106, 'admin', 'mmanugue', 'add user', '2023-04-29 12:43:56'),
(107, 'admin', 'mmanugue', 'delete user', '2023-04-29 12:45:22'),
(108, 'admin', 'mmanugue', 'add user', '2023-04-29 12:46:38'),
(109, 'admin', 'mmanugue', 'login', '2023-04-30 13:02:41'),
(110, 'admin', 'mmanugue', 'logout', '2023-04-30 13:03:46'),
(111, 'admin', 'ccagas', 'login', '2023-04-30 13:03:49'),
(112, 'admin', 'ccagas', 'logout', '2023-04-30 13:04:01'),
(113, 'admin', 'mmanugue', 'login', '2023-04-30 13:04:04'),
(114, 'admin', 'mmanugue', 'login', '2023-05-03 12:20:32'),
(115, 'admin', 'mmanugue', 'add new journal entry', '2023-05-03 13:28:11'),
(116, 'admin', 'mmanugue', 'add new journal entry', '2023-05-03 13:28:28'),
(117, 'admin', 'mmanugue', 'add new journal entry', '2023-05-03 13:38:44'),
(118, 'admin', 'mmanugue', 'add new journal entry', '2023-05-03 13:39:31'),
(119, 'admin', 'mmanugue', 'login', '2023-05-03 13:48:50'),
(120, 'admin', 'mmanugue', 'login', '2023-05-03 14:07:52'),
(121, 'admin', 'mmanugue', 'login', '2023-05-05 23:23:27'),
(122, 'admin', 'mmanugue', 'logout', '2023-05-05 23:32:33'),
(123, 'admin', 'mmanugue', 'login', '2023-05-05 23:32:47'),
(124, 'admin', 'mmanugue', 'login', '2023-05-05 23:47:01'),
(125, 'admin', 'mmanugue', 'logout', '2023-05-05 23:49:38'),
(126, 'admin', 'mmanugue', 'login', '2023-05-05 23:49:41'),
(127, 'admin', 'mmanugue', 'login', '2023-05-06 00:16:27'),
(128, 'admin', 'mmanugue', 'add new journal entry', '2023-05-06 01:29:13'),
(129, 'admin', 'mmanugue', 'login', '2023-05-06 01:37:57'),
(130, 'admin', 'mmanugue', 'login', '2023-05-06 02:02:24'),
(131, 'admin', 'mmanugue', 'logout', '2023-05-06 02:14:45'),
(132, 'admin', 'ccagas', 'login', '2023-05-06 02:14:48'),
(133, 'admin', 'ccagas', 'add new journal entry', '2023-05-06 03:43:46'),
(134, 'admin', 'ccagas', 'add new journal entry', '2023-05-06 03:44:36'),
(135, 'admin', 'ccagas', 'add new fund request', '2023-05-06 04:36:23'),
(136, 'admin', 'ccagas', 'add new journal entry', '2023-05-06 05:17:19'),
(137, 'admin', 'ccagas', 'add new journal entry', '2023-05-06 05:17:29'),
(138, 'admin', 'ccagas', 'add new journal entry', '2023-05-06 05:17:40'),
(139, 'admin', 'mmanugue', 'login', '2023-05-06 06:22:33'),
(140, 'admin', 'mmanugue', 'logout', '2023-05-06 06:30:48'),
(141, 'admin', 'ccagas', 'login', '2023-05-06 06:30:56'),
(142, 'admin', 'ccagas', 'logout', '2023-05-06 06:31:11'),
(143, 'admin', 'mmanugue', 'login', '2023-05-06 06:31:23'),
(144, 'admin', 'mmanugue', 'logout', '2023-05-06 06:31:25'),
(145, 'admin', 'mmanugue', 'login', '2023-05-06 14:58:38'),
(146, 'admin', 'mmanugue', 'logout', '2023-05-06 15:06:53'),
(147, 'admin', 'ccagas', 'login', '2023-05-06 15:06:57'),
(148, 'admin', 'mmanugue', 'login', '2023-05-06 15:11:43'),
(149, 'admin', 'mmanugue', 'add user', '2023-05-06 15:19:26'),
(150, 'admin', 'mmanugue', 'delete user', '2023-05-06 15:19:31'),
(151, 'admin', 'mmanugue', 'login', '2023-05-07 01:09:05'),
(152, 'admin', 'mmanugue', 'login', '2023-05-07 01:20:39'),
(153, 'admin', 'mmanugue', 'login', '2023-05-07 01:21:36'),
(154, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 01:23:28'),
(155, 'admin', 'mmanugue', 'login', '2023-05-07 01:27:50'),
(156, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 01:37:46'),
(157, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 01:53:55'),
(158, 'admin', 'mmanugue', 'login', '2023-05-07 01:54:21'),
(159, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 01:54:33'),
(160, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 01:54:35'),
(161, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 01:55:36'),
(162, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 01:55:38'),
(163, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 02:08:39'),
(164, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 02:57:02'),
(165, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 02:58:27'),
(166, 'admin', 'mmanugue', 'logout', '2023-05-07 03:01:00'),
(167, 'admin', 'mmanugue', 'login', '2023-05-07 03:03:32'),
(168, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 03:03:36'),
(169, 'admin', 'mmanugue', 'login', '2023-05-07 21:38:54'),
(170, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 21:40:08'),
(171, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 21:40:28'),
(172, 'admin', 'mmanugue', 'logout', '2023-05-07 22:12:37'),
(173, 'admin', 'mmanugue', 'login', '2023-05-07 22:12:40'),
(174, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 22:14:48'),
(175, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 22:15:23'),
(176, 'admin', 'mmanugue', 'login', '2023-05-07 22:29:37'),
(177, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 22:57:02'),
(178, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 22:57:32'),
(179, 'admin', 'mmanugue', 'mytoto login', '2023-05-07 22:57:57'),
(180, 'admin', 'mmanugue', 'mytoto logout', '2023-05-07 23:01:04'),
(181, 'admin', 'mmanugue', 'login', '2023-05-08 11:44:27'),
(182, 'admin', 'mmanugue', 'mytoto login', '2023-05-08 11:44:44'),
(183, 'admin', 'mmanugue', 'mytoto logout', '2023-05-08 12:05:34'),
(184, 'admin', 'mmanugue', 'login', '2023-05-08 13:45:54'),
(185, 'admin', 'mmanugue', 'login', '2023-05-09 11:54:47'),
(186, 'admin', 'mmanugue', 'mytoto login', '2023-05-09 11:56:19'),
(187, 'admin', 'mmanugue', 'mytoto logout', '2023-05-09 11:57:26'),
(188, 'admin', 'mmanugue', 'mytoto login', '2023-05-09 11:59:58'),
(189, 'admin', 'mmanugue', 'mytoto logout', '2023-05-09 12:02:13'),
(190, 'admin', 'mmanugue', 'login', '2023-05-09 22:46:19'),
(191, 'admin', 'mmanugue', 'login', '2023-05-09 22:47:20'),
(192, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:47:46'),
(193, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:48:07'),
(194, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:48:23'),
(195, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:48:33'),
(196, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:48:47'),
(197, 'admin', 'mmanugue', 'login', '2023-05-09 22:49:45'),
(198, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:55:45'),
(199, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:55:53'),
(200, 'admin', 'mmanugue', 'add user', '2023-05-09 22:56:20'),
(201, 'admin', 'mmanugue', 'delete user', '2023-05-09 22:56:23'),
(202, 'admin', 'mmanugue', 'logout', '2023-05-09 22:57:39'),
(203, 'admin', 'mmanugue', 'login', '2023-05-09 22:57:41'),
(204, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:57:51'),
(205, 'admin', 'mmanugue', 'edit user', '2023-05-09 22:58:31'),
(206, 'admin', 'mmanugue', 'logout', '2023-05-09 23:02:49'),
(207, 'admin', 'mmanugue', 'login', '2023-05-09 23:03:00'),
(208, 'admin', 'mmanugue', 'edit user', '2023-05-09 23:03:20'),
(209, 'admin', 'mmanugue', 'edit user', '2023-05-09 23:03:32'),
(210, 'admin', 'mmanugue', 'edit user', '2023-05-09 23:03:48'),
(211, 'admin', 'mmanugue', 'edit user', '2023-05-09 23:03:59'),
(212, 'admin', 'mmanugue', 'mytoto login', '2023-05-09 23:05:00'),
(213, 'admin', 'mmanugue', 'login', '2023-05-09 23:48:10'),
(214, 'admin', 'mmanugue', 'add new journal entry', '2023-05-09 23:52:56'),
(215, 'admin', 'mmanugue', 'add user', '2023-05-09 23:54:11'),
(216, 'admin', 'mmanugue', 'edit user', '2023-05-09 23:54:33'),
(217, 'admin', 'mmanugue', 'delete user', '2023-05-09 23:56:13'),
(218, 'admin', 'mmanugue', 'mytoto login', '2023-05-09 23:58:07'),
(219, 'admin', 'mmanugue', 'mytoto logout', '2023-05-10 00:01:55'),
(220, 'admin', 'mmanugue', 'logout', '2023-05-10 00:02:07'),
(221, 'admin', 'mmanugue', 'login', '2023-05-13 15:43:03'),
(222, 'admin', 'mmanugue', 'mytoto login', '2023-05-13 15:43:09'),
(223, 'admin', 'mmanugue', 'login', '2023-05-16 14:17:53'),
(224, 'admin', 'mmanugue', 'delete user', '2023-05-16 15:03:38'),
(225, 'admin', 'mmanugue', 'add user', '2023-05-16 15:05:13'),
(226, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-16 15:17:48'),
(227, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-16 15:18:01'),
(228, 'admin', 'mmanugue', 'logout', '2023-05-16 15:18:44'),
(229, 'admin', 'mmanugue', 'login', '2023-05-16 15:21:18'),
(230, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-16 15:22:38'),
(231, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-16 15:22:48'),
(232, 'admin', 'mmanugue', 'login', '2023-05-17 13:36:57'),
(233, 'admin', 'mmanugue', 'mytoto login', '2023-05-17 13:37:07'),
(234, 'admin', 'mmanugue', 'mytoto logout', '2023-05-17 13:44:53'),
(235, 'admin', 'mmanugue', 'add new fund request', '2023-05-17 13:45:48'),
(236, 'admin', 'mmanugue', 'logout', '2023-05-17 13:52:20'),
(237, 'admin', 'mmanugue', 'login', '2023-05-17 13:53:53'),
(238, 'admin', 'mmanugue', 'mytoto login', '2023-05-17 13:56:11'),
(239, 'admin', 'mmanugue', 'mytoto logout', '2023-05-17 13:58:37'),
(240, 'admin', 'mmanugue', 'logout', '2023-05-17 14:05:13'),
(241, 'admin', 'mmanugue', 'login', '2023-05-17 14:05:28'),
(242, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-17 14:05:34'),
(243, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-17 14:05:45'),
(244, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-17 14:05:47'),
(245, 'admin', 'mmanugue', 'logout', '2023-05-17 14:11:51'),
(246, 'admin', 'mmanugue', 'login', '2023-05-17 14:15:02'),
(247, 'admin', 'mmanugue', 'logout', '2023-05-17 14:18:43'),
(248, 'admin', 'mmanugue', 'login', '2023-05-17 14:19:01'),
(249, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-17 14:22:39'),
(250, 'admin', 'mmanugue', 'login', '2023-05-19 12:40:18'),
(251, 'admin', 'mmanugue', 'logout', '2023-05-19 12:49:49'),
(252, 'admin', 'atabanao', 'login', '2023-05-19 12:49:56'),
(253, 'admin', 'atabanao', 'logout', '2023-05-19 13:22:08'),
(254, 'admin', 'jcanencia', 'login', '2023-05-19 13:22:16'),
(255, 'admin', 'jcanencia', 'logout', '2023-05-19 13:22:28'),
(256, 'admin', 'dbillones', 'login', '2023-05-19 13:33:47'),
(257, 'admin', 'dbillones', 'login', '2023-05-19 13:40:29'),
(258, 'admin', 'dbillones', 'login', '2023-05-19 13:40:40'),
(259, 'admin', 'dbillones', 'mytoto login', '2023-05-19 13:41:02'),
(260, 'admin', 'dbillones', 'mytoto login', '2023-05-19 13:42:08'),
(261, 'admin', 'dbillones', 'mytoto login', '2023-05-19 13:42:41'),
(262, 'admin', 'mmanugue', 'mytoto login', '2023-05-19 13:42:50'),
(263, 'admin', 'mmanugue', 'mytoto login', '2023-05-19 13:45:01'),
(264, 'admin', 'mmanugue', 'logout', '2023-05-19 13:45:05'),
(265, 'admin', 'dbillones', 'login', '2023-05-19 13:45:08'),
(266, 'admin', 'dbillones', 'mytoto login', '2023-05-19 13:45:11'),
(267, 'admin', 'dbillones', 'logout', '2023-05-19 13:47:40'),
(268, 'admin', 'mmanugue', 'login', '2023-05-19 13:47:43'),
(269, 'admin', 'mmanugue', 'mytoto login', '2023-05-19 14:04:24'),
(270, 'admin', 'mmanugue', 'mytoto login', '2023-05-19 14:05:47'),
(271, 'admin', 'mmanugue', 'mytoto logout', '2023-05-19 14:05:48'),
(272, 'admin', 'mmanugue', 'add new fund request', '2023-05-19 14:06:21'),
(273, 'admin', 'mmanugue', 'login', '2023-05-20 08:25:10'),
(274, 'admin', 'mmanugue', 'add new journal entry', '2023-05-20 08:39:41'),
(275, 'admin', 'dbillones', 'login', '2023-05-21 01:29:18'),
(276, 'admin', 'dbillones', 'add new journal entry', '2023-05-21 02:10:08'),
(277, 'admin', 'dbillones', 'add new journal entry', '2023-05-21 02:17:20'),
(278, 'admin', 'dbillones', 'add new journal entry', '2023-05-21 02:19:23'),
(279, 'admin', 'mmanugue', 'login', '2023-05-21 05:52:03'),
(280, 'admin', 'mmanugue', 'login', '2023-05-21 09:23:57'),
(281, 'admin', 'mmanugue', 'logout', '2023-05-21 09:29:26'),
(282, 'admin', 'mmanugue', 'login', '2023-05-21 09:29:29'),
(283, 'admin', 'mmanugue', 'logout', '2023-05-21 09:29:31'),
(284, 'admin', 'mmanugue', 'login', '2023-05-21 09:32:27'),
(285, 'admin', 'mmanugue', 'logout', '2023-05-21 09:32:56'),
(286, 'admin', 'mmanugue', 'login', '2023-05-21 09:33:16'),
(287, 'admin', 'mmanugue', 'login', '2023-05-21 09:54:43'),
(288, 'admin', 'mmanugue', 'login', '2023-05-21 09:56:50'),
(289, 'admin', 'mmanugue', 'login', '2023-05-21 10:25:06'),
(290, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 10:25:28'),
(291, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 10:25:30'),
(292, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 10:25:32'),
(293, 'admin', 'mmanugue', 'mytoto login', '2023-05-21 10:35:08'),
(294, 'admin', 'mmanugue', 'mytoto logout', '2023-05-21 10:39:12'),
(295, 'admin', 'mmanugue', 'logout', '2023-05-21 10:39:22'),
(296, 'admin', 'mdayao', 'login', '2023-05-21 10:39:26'),
(297, 'admin', 'mdayao', 'add new fund request', '2023-05-21 11:37:42'),
(298, 'admin', 'mdayao', 'add new fund request', '2023-05-21 11:42:03'),
(299, 'admin', 'mmanugue', 'login', '2023-05-21 14:35:57'),
(300, 'admin', 'mmanugue', 'logout', '2023-05-21 14:36:00'),
(301, 'admin', 'mmanugue', 'login', '2023-05-21 14:38:17'),
(302, 'admin', 'mmanugue', 'logout', '2023-05-21 14:38:24'),
(303, 'admin', 'mmanugue', 'login', '2023-05-21 14:38:27'),
(304, 'admin', 'mmanugue', 'logout', '2023-05-21 14:51:45'),
(305, 'admin', 'adejesus', 'logout', '2023-05-21 14:52:52'),
(306, 'admin', 'mmanugue', 'login', '2023-05-21 14:53:25'),
(307, 'admin', 'mmanugue', 'mytoto login', '2023-05-21 14:56:54'),
(308, 'admin', 'mmanugue', 'mytoto logout', '2023-05-21 14:57:10'),
(309, 'admin', 'adejesus', 'mytoto login', '2023-05-21 15:22:41'),
(310, 'admin', 'adejesus', 'mytoto logout', '2023-05-21 15:23:09'),
(311, 'admin', 'adejesus', 'logout', '2023-05-21 15:23:17'),
(312, 'admin', 'mmanugue', 'login', '2023-05-21 15:26:36'),
(313, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 15:26:45'),
(314, 'admin', 'mmanugue', 'logout', '2023-05-21 15:27:14'),
(315, 'admin', 'mmanugue', 'login', '2023-05-21 15:27:31'),
(316, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 15:27:46'),
(317, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 15:27:51'),
(318, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 15:27:54'),
(319, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-21 15:27:57'),
(320, 'admin', 'mmanugue', 'logout', '2023-05-21 15:42:01'),
(321, 'admin', 'adejesus', 'logout', '2023-05-21 15:51:05'),
(322, 'admin', 'mmanugue', 'login', '2023-05-21 15:52:13'),
(323, 'admin', 'mmanugue', 'mytoto login', '2023-05-21 15:55:27'),
(324, 'admin', 'mmanugue', 'mytoto logout', '2023-05-21 15:55:35'),
(325, 'admin', 'mmanugue', 'login', '2023-05-22 10:05:37'),
(326, 'admin', 'mmanugue', 'mytoto login', '2023-05-22 10:21:19'),
(327, 'admin', 'mmanugue', 'mytoto logout', '2023-05-22 10:33:04'),
(328, 'admin', 'mmanugue', 'logout', '2023-05-22 10:33:06'),
(329, 'admin', 'ccagas', 'login', '2023-05-22 10:33:09'),
(330, 'admin', 'ccagas', 'mytoto login', '2023-05-22 10:33:15'),
(331, 'admin', 'ccagas', 'mytoto logout', '2023-05-22 10:34:04'),
(332, 'admin', 'ccagas', 'logout', '2023-05-22 10:37:45'),
(333, 'admin', 'mmanugue', 'login', '2023-05-22 10:37:47'),
(334, 'admin', 'mmanugue', 'mytoto login', '2023-05-22 10:37:51'),
(335, 'admin', 'mmanugue', 'mytoto logout', '2023-05-22 10:37:54'),
(336, 'admin', 'mmanugue', 'logout', '2023-05-22 10:37:56'),
(337, 'admin', 'dbillones', 'login', '2023-05-22 10:37:59'),
(338, 'admin', 'dbillones', 'mytoto login', '2023-05-22 10:38:02'),
(339, 'admin', 'dbillones', 'mytoto logout', '2023-05-22 10:39:00'),
(340, 'admin', 'dbillones', 'logout', '2023-05-22 10:39:48'),
(341, 'admin', 'jcanencia', 'login', '2023-05-22 10:47:00'),
(342, 'admin', 'jcanencia', 'mytoto login', '2023-05-22 10:47:04'),
(343, 'admin', 'jcanencia', 'mytoto logout', '2023-05-22 10:47:16'),
(344, 'admin', 'mmanugue', 'login', '2023-05-22 23:29:05'),
(345, 'admin', 'mmanugue', 'logout', '2023-05-22 23:29:54'),
(346, 'admin', 'mmanugue', 'login', '2023-05-22 23:30:04'),
(347, 'admin', 'mmanugue', 'edit user', '2023-05-22 23:30:32'),
(348, 'admin', 'mmanugue', 'delete user', '2023-05-22 23:32:19'),
(349, 'admin', 'mmanugue', 'login', '2023-05-22 23:42:15'),
(350, 'admin', 'mmanugue', 'edit journal', '2023-05-22 23:58:23'),
(351, 'admin', 'mmanugue', 'edit journal', '2023-05-23 00:07:22'),
(352, 'admin', 'mmanugue', 'edit journal', '2023-05-23 00:07:45'),
(353, 'admin', 'mmanugue', 'edit journal', '2023-05-23 00:15:37'),
(354, 'admin', 'mmanugue', 'edit journal', '2023-05-23 00:21:07'),
(355, 'admin', 'mmanugue', 'edit journal', '2023-05-23 00:23:11'),
(356, 'admin', 'mmanugue', 'edit journal', '2023-05-23 00:23:32'),
(357, 'admin', 'mmanugue', 'add user', '2023-05-23 00:31:27'),
(358, 'admin', 'mmanugue', 'add user', '2023-05-23 00:33:55'),
(359, 'admin', 'mmanugue', 'add user', '2023-05-23 00:35:55'),
(360, 'admin', 'mmanugue', 'logout', '2023-05-23 00:36:22'),
(361, 'admin', 'chill', 'login', '2023-05-23 00:36:28'),
(362, 'admin', 'chill', 'edit user', '2023-05-23 00:57:05'),
(363, 'admin', 'chill', 'edit user', '2023-05-23 00:57:26'),
(364, 'admin', 'mmanugue', 'login', '2023-05-23 01:47:04'),
(365, 'admin', 'mmanugue', 'logout', '2023-05-23 03:15:52'),
(366, 'admin', 'chill', 'login', '2023-05-23 03:15:55'),
(367, 'admin', 'chill', 'edit user', '2023-05-23 03:49:44'),
(368, 'admin', 'chill', 'logout', '2023-05-23 03:49:52'),
(369, 'admin', 'atabanao', 'login', '2023-05-23 03:50:00'),
(370, 'admin', 'atabanao', 'edit user', '2023-05-23 03:53:53'),
(371, 'admin', 'atabanao', 'logout', '2023-05-23 03:54:04'),
(372, 'admin', 'dbillones', 'login', '2023-05-23 03:54:08'),
(373, 'admin', 'dbillones', 'mytoto login', '2023-05-23 04:03:42'),
(374, 'admin', 'mmanugue', 'login', '2023-05-23 11:47:49'),
(375, 'admin', 'mmanugue', 'mytoto login', '2023-05-23 11:47:52'),
(376, 'admin', 'mmanugue', 'mytoto logout', '2023-05-23 13:39:00'),
(377, 'admin', 'mmanugue', 'mytoto login', '2023-05-23 13:39:05'),
(378, 'admin', 'mmanugue', 'mytoto logout', '2023-05-23 13:39:06'),
(379, 'admin', 'mmanugue', 'mytoto login', '2023-05-23 13:41:58'),
(380, 'admin', 'mmanugue', 'mytoto logout', '2023-05-23 13:57:25'),
(381, 'admin', 'mmanugue', 'login', '2023-05-23 14:05:35'),
(382, 'admin', 'mmanugue', 'mytoto login', '2023-05-23 14:05:38'),
(383, 'admin', 'mmanugue', 'mytoto logout', '2023-05-23 14:06:18'),
(384, 'admin', 'mmanugue', 'logout', '2023-05-23 14:49:14'),
(385, 'admin', 'mmanugue', 'login', '2023-05-23 14:49:40'),
(386, 'admin', 'mmanugue', 'logout', '2023-05-23 14:49:43'),
(387, 'admin', 'mmanugue', 'login', '2023-05-23 14:49:58'),
(388, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-23 14:50:10'),
(389, 'admin', 'mmanugue', 'reset another user\'s password', '2023-05-23 14:50:39'),
(390, 'admin', 'mmanugue', 'add user', '2023-05-23 14:52:28'),
(391, 'admin', 'mmanugue', 'edit journal', '2023-05-23 14:54:07'),
(392, 'admin', 'mmanugue', 'mytoto login', '2023-05-23 14:59:31'),
(393, 'admin', 'mmanugue', 'mytoto logout', '2023-05-23 15:02:20'),
(394, 'admin', 'mmanugue', 'logout', '2023-05-23 15:03:34');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `journal_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `account` varchar(50) NOT NULL,
  `amount` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `encoder` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`journal_id`, `date`, `account`, `amount`, `type`, `encoder`, `description`) VALUES
(1, '2023-05-21', 'Accounting', 50000, 'Credit', 'dbillones', 'This is a test on the edit function'),
(2, '2023-05-06', 'Accounting', 213984, 'Credit', 'mmanugue', 'test'),
(4, '2023-04-16', 'Dispatch', 1000000000, 'Credit', 'mmanugue', 'This is the final test'),
(5, '2023-04-16', 'Rental and Sales', 5000, 'Debit', 'ccagas', 'This is a test'),
(6, '2023-04-17', 'Accounting', 10000000, 'Credit', 'mmanugue', 'this is another test'),
(7, '2023-04-18', 'Rental and Sales', 123984, 'Credit', 'mmanugue', 'This is another test'),
(8, '2023-04-18', 'Equipment Lifecycle', 50000, 'Credit', 'mmanugue', 'wdiubgw'),
(9, '2023-04-18', 'Accounting', 50000, 'Credit', 'mmanugue', 'asdsad'),
(10, '2023-04-18', 'Accounting', 123135, 'Debit', 'mmanugue', 'asdasdass'),
(11, '2023-04-18', 'Equipment Lifecycle', 1207349, 'Credit', 'mmanugue', 'wdjhgfbalsifb'),
(14, '2023-05-03', 'Dispatch', 155500, 'Credit', 'mmanugue', 'This is a test on updating'),
(15, '2023-05-03', 'Accounting', 300000, 'Credit', 'mmanugue', 'This is a test on update'),
(16, '2023-05-06', 'Accounting', 54156, 'Debit', 'mmanugue', 'test'),
(18, '2023-05-06', 'Accounting', 10000, 'Debit', 'ccagas', 'this is a test of the responsive table'),
(19, '2023-05-06', 'Maintenance', 5222045, 'Credit', 'ccagas', 'sdadad'),
(20, '2023-05-06', 'Maintenance', 12315415, 'Debit', 'ccagas', 'asdasdasd'),
(21, '2023-05-06', 'Maintenance', 241216512, 'Credit', 'ccagas', '12313sdasfafga'),
(22, '2023-05-10', 'Accounting', 65168546, 'Credit', 'mmanugue', 'test'),
(23, '2023-05-20', 'Accounting', 10000, 'Credit', 'mmanugue', 'asfdasds'),
(24, '2023-05-21', 'Accounting', 161513561, 'Credit', 'dbillones', 'oiuho8 oj9'),
(25, '2023-05-21', 'Accounting', 12313, 'Credit', 'dbillones', 'testing journal id numbering');

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
(125, '2023-05-23', '19:48:03', 'Time Off', 'mmanugue');

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
  `status` enum('Pending','Approved','Denied','') NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`req_id`, `date`, `account`, `amount`, `type`, `encoder`, `status`, `description`) VALUES
(1, '2023-04-17', 'Accounting', 10000000, 'Credit', 'mmanugue', 'Pending', 'this is another test'),
(2, '2023-04-17', 'Accounting', 10000000, 'Credit', 'mmanugue', 'Pending', 'this is another test'),
(3, '2023-04-18', 'Dispatch', 30000, 'Credit', 'mmanugue', 'Pending', 'this is a test'),
(4, '2023-04-18', 'Maintenance', 10000, 'Credit', 'mmanugue', 'Pending', 'this is another  test'),
(5, '2023-04-18', 'Rental and Sales', 30000, 'Debit', 'mmanugue', 'Pending', 'this is a test'),
(6, '2023-04-18', 'Equipment Lifecycle', 30000, 'Dredit', 'mmanugue', 'Pending', 'test'),
(7, '2023-04-18', 'Accounting', 651610, 'Credit', 'mmanugue', 'Pending', 'slidfbsikgbs'),
(8, '2023-04-18', 'Accounting', 651065161, 'Credit', 'mmanugue', 'Pending', 'asdada'),
(9, '2023-04-18', 'Accounting', 12983103, 'Credit', 'mmanugue', 'Pending', 'wjkhbfgwklsbrtf'),
(10, '2023-05-06', 'Accounting', 20000, 'Debit', 'ccagas', 'Pending', 'Ts'),
(11, '2023-05-17', 'Accounting', 2500000, 'Credit', 'mmanugue', 'Pending', 'this is for the sale of blah blah blah'),
(12, '2023-05-19', 'Accounting', 123456, 'Credit', 'mmanugue', 'Pending', 'asdsad'),
(13, '2023-05-21', 'Accounting', 50000, 'Debit', 'mdayao', 'Pending', 'This is a test of the new request ID format\r\n'),
(14, '2023-05-21', 'Accounting', 1234, 'Credit', 'mdayao', 'Pending', 'This is another test');

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `request` varchar(100) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(12, 2023002, 'Arjelica Rhoede Tabanao', 'atabanao', '1234', 'admin', 'atabanao@ironclad.ph', 'Accounting', '9175456560', 'Paco, Manila'),
(17, 2023003, 'Dianne Billones', 'dbillones', '1234', 'admin', 'dbillones@ironclad.ph', 'Accounting', '9175456561', 'Ayala Center, Makati'),
(22, 2023004, 'Juli Mae Canencia', 'jcanencia', '1234', 'admin', 'jcanencia@ironclad.ph', 'Accounting', '9175456562', 'Ayala Center, Makati'),
(26, 2023005, 'Christian Angelo Cagas', 'ccagas', '1234', 'admin', 'ccagas@ironclad.ph', 'Accounting', '9175456563', 'Pampanga'),
(28, 2023100, 'Archie De Jesus', 'adejesus', '1234', 'admin', 'adejesus@ironclad.ph', 'Dispatch', '665165161', 'Pampanga'),
(30, 2023200, 'Gilbert Garcia', 'ggarcia', '1234', 'admin', 'ggarcia@ironclad.ph', 'Maintenance', '65196161', 'Pampanga'),
(31, 2023006, 'Nikka Virginia Esguerra', 'nesguerra', '1234', 'admin', 'nesguerra@ironclad.ph', 'Accounting', '9175456564', 'Quezon City'),
(32, 2023007, 'Charish Hill', 'chill', '1234', 'admin', 'chill@ironclad.ph', 'Accounting', '9175456565', 'Makati City'),
(33, 2023008, 'Marinel Dayao', 'mdayao', '1234', 'admin', 'mdayao@ironclad.ph', 'Accounting', '9175456566', 'Pasay City'),
(34, 2023009, 'Lesley Anne Ferrer', 'lferrer', '1234', 'admin', 'lferrer@ironclad.ph', 'Accounting', '9175456567', 'Marikina City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audit`
--
ALTER TABLE `audit`
  ADD PRIMARY KEY (`audit_id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`journal_id`);

--
-- Indexes for table `mytoto`
--
ALTER TABLE `mytoto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`req_id`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

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
  MODIFY `audit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=395;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `journal_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `mytoto`
--
ALTER TABLE `mytoto`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `req_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
