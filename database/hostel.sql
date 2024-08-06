-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 01:48 PM
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
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', 'Test@1234', '2020-04-04 20:31:45', '2024-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roomregistration`
--

CREATE TABLE `roomregistration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `feespm` int(11) DEFAULT NULL,
  `foodstatus` int(11) DEFAULT NULL,
  `stayfrom` date DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `semester` varchar(500) DEFAULT NULL,
  `regno` varchar(255) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `emailid` varchar(500) DEFAULT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `corresAddress` varchar(500) DEFAULT NULL,
  `corresCIty` varchar(500) DEFAULT NULL,
  `corresState` varchar(500) DEFAULT NULL,
  `pmntAddress` varchar(500) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `pmnatetState` varchar(500) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roomregistration`
--

INSERT INTO `roomregistration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `semester`, `regno`, `name`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `pmntAddress`, `pmntCity`, `pmnatetState`, `postingDate`, `updationDate`) VALUES
(20, 235, 2, 5000, 1, '2024-02-07', 4, 'Semester 4', 'YKPT-22487', 'Zin Zin Zaw', 'Female', 1234567890, 'zinzaw@gmail.com', 11234567, 'U Soe Paing', 'Father', 25402212, 'No.18, Shwe Pyi Than', 'bago', 'Bago', 'No.18, Shwe Pyi Than', 'bago', 'Bago', '2024-02-28 15:15:02', NULL),
(21, 235, 2, 5000, 1, '2024-02-04', 4, 'Semester 4', 'YKPT-22483', 'Ei Ngone Phoo', 'Female', 112345678, 'enp@gmail.com', 33214564, 'Daw Pan Ei', 'Mother', 22331566, 'No.349, Mon San Pya', 'bago', 'Bago', 'No.349, Mon San Pya', 'bago', 'Bago', '2024-02-28 15:18:37', NULL),
(22, 201, 2, 0, 1, '2024-02-13', 3, 'Semester 4', 'YKPT-22484', 'Nadi Myint Than', 'female', 11234567, 'nadi@gmail.com', 34561568, 'U Myint Than', 'Father', 3214563, 'No.16, Sayar Ma Gyi st', 'Bahan', 'Yangon', 'No.16, Sayar Ma Gyi st', 'Bahan', 'Yangon', '2024-02-28 15:24:29', NULL),
(23, 204, 3, 0, 1, '2024-02-04', 2, 'Semester 4', 'YKPT-22523', 'Kaung Min Myat', 'Male', 9123456789, 'kaungminmyat@ucsy.edu.mm', 44321234, 'Daw Nu Wah', 'Mother', 4323562, 'No.43, oakkin st', 'Shwe Pyi Thar', 'Yangon', 'No.43, oakkin st', 'Shwe Pyi Thar', 'Yangon', '2024-02-28 15:29:57', NULL),
(24, 204, 3, 0, 1, '2024-03-07', 4, 'Semester 4', 'YKPT-22521', 'Hsan Min Thaw', 'Male', 123456789, 'hmt@gmail.com', 55328432, 'U Zaw', 'Father', 67743194, 'No.84, Sein Hnin st', 'naypyitaw', 'Nay Pyi Taw', 'No.84, Sein Hnin st', 'naypyitaw', 'Nay Pyi Taw', '2024-02-28 15:32:10', NULL),
(25, 204, 3, 0, 1, '0000-00-00', 0, 'Semester 4', 'YKPT-22496', 'Pyae Phyoe San', 'Male', 123456781, 'pps@gmail.com', 88647824, 'Daw Hnin', 'Mother', 7754356, 'No.55, Ywar Ngan', 'Taunggyi', 'Shan', 'No.55, Ywar Ngan', 'Taunggyi', 'Shan', '2024-02-28 15:34:11', NULL),
(26, 205, 3, 0, 1, '2024-02-06', 3, 'Semester 4', 'YKPT-22522', 'Bhone Min Khant', 'Male', 123456782, 'bmk@gmail.com', 53466777, 'U Naing ', 'Father', 45425366, 'No.79, U Pu st', 'Pathein', 'Ayeyarwaddy', 'No.79, U Pu st', 'Pathein', 'Ayeyarwaddy', '2024-02-28 15:37:09', NULL),
(27, 205, 3, 0, 1, '2024-02-26', 4, 'Semester 4', 'YKPT-22332', 'Oak Soe Khant', 'Male', 123456783, 'osk@gmail.com', 443464573, 'Daw Htwe Nu', 'Mother', 56243656, 'No.22, Htanaung st', 'Maw La Myine', 'Mon', 'No.22, Htanaung st', 'Maw La Myine', 'Mon', '2024-02-28 15:40:00', NULL),
(28, 216, 2, 5000, 1, '2024-02-05', 4, 'Semester 4', 'YKPT-22321', 'Thet Paing Soe', 'Male', 123456784, 'tps@gmail.com', 5764542354, 'U Thet', 'Father', 554645635, 'No.50, jasmine st', 'Tha Tone', 'Mon', 'No.50, jasmine st', 'Tha Tone', 'Mon', '2024-02-28 15:44:10', NULL),
(29, 229, 3, 5000, 1, '2024-02-10', 4, 'Semester 4', 'YKPT-22335', 'Nyan Htet Myat', 'Male', 123456785, 'nhm@gmail.com', 4323445, 'U Aung Moe', 'Father', 3453225, 'No.38, Than st', 'Hlaing', 'Yangon', 'No.38, Than st', 'Hlaing', 'Yangon', '2024-02-28 15:46:34', NULL),
(30, 234, 2, 5000, 1, '2024-01-01', 4, 'Semester 3', 'YKPT-22311', 'Kyaw Wai Yan', 'Male', 112233456, 'kwy@gmail.com', 444522128, 'Daw Nway Oo', 'Mother', 686762696, 'No.18, Tulip St', 'naypyitaw', 'Nay Pyi Taw', 'No.18, Tulip St', 'naypyitaw', 'Nay Pyi Taw', '2024-02-28 15:48:49', NULL),
(31, 240, 3, 5000, 1, '2024-02-08', 1, 'Semester 3', '22631', 'Mya Thin Kyu', 'female', 123456782, 'mtk@gmail.com', 34325253, 'U Hla Kyaing', 'Father', 23432525, 'No.39, Lavendar St', 'Pyin Oo Lwin', 'Mandalay', 'No.39, Lavendar St', 'Pyin Oo Lwin', 'Mandalay', '2024-02-28 15:52:49', NULL),
(32, 211, 2, 5000, 1, '2024-02-17', 4, 'Semester 1', 'YKPT-22881', 'Kay Zin Htet', 'Female', 9983952041, 'kzh@gmail.com', 35243534, 'U Min Naing', 'Father', 342354654, 'No.42, Kalayarni St', 'Inn Ta Kaw', 'Bago', 'No.42, Kalayarni St', 'Inn Ta Kaw', 'Bago', '2024-02-28 15:55:32', NULL),
(33, 248, 3, 5000, 1, '2024-02-29', 3, 'Semester 1', 'YKPT-22827', 'Bhone Pyae Si Thu', 'Male', 987666211, 'bpst@gmail.com', 8748342, 'U Si Thu', 'Father', 4524335, 'No.61, Star City ', 'thanlyin', 'Yangon', 'No.61, Star City ', 'thanlyin', 'Yangon', '2024-02-28 15:57:52', NULL),
(34, 231, 3, 5000, 1, '2024-01-25', 3, 'Semester 5', 'YKPT-22163', 'Yoon Lae Shwe Yee', 'female', 11342156, 'ylsy@gmail.com', 6568767665, 'Daw Thwe ', 'Mother', 45634243, 'No.22, Yan Gyi Aung St', 'San Chaung', 'Yangon', 'No.22, Yan Gyi Aung St', 'San Chaung', 'Yangon', '2024-02-28 16:01:55', NULL),
(35, 212, 2, 5000, 1, '2024-02-04', 4, 'Semester 7', 'YKPT-22190', 'San Yu', 'female', 23123445, 'sanyu@gmail.com', 342345533, 'U Paing', 'Father', 1234232434, 'No.6,  lily St', 'Myeik', 'Tanintharyi', 'No.6,  lily St', 'Myeik', 'Tanintharyi', '2024-02-28 16:06:10', NULL),
(36, 222, 3, 5000, 1, '2024-02-09', 5, 'Semester 9', 'YKPT-21625', 'Wai Yan Kyaw', 'male', 3432425, 'waiyan@gmail.com', 234234553, 'U Kyaw', 'Father', 23423425, 'No.9, hua st', 'bhamo', 'Kachin', 'No.9, hua st', 'bhamo', 'Kachin', '2024-02-28 16:10:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT `seater`,
  `room_no` int(11) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `posting_date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `seater`, `available`, `room_no`, `fees`, `posting_date`) VALUES
(1, 2, 1, 201, 5000, '2023-12-31 22:45:43'),
(2, 2, 2, 202, 5000, '2024-02-01 01:30:47'),
(3, 2, 2, 203, 5000, '2024-01-03 01:30:58'),
(4, 3, 0, 204, 5000, '2024-02-04 01:31:07'),
(5, 3, 1, 205, 5000, '2024-01-07 01:31:15'),
(6, 2, 2, 206, 5000, '2024-02-14 06:58:47'),
(7, 3, 3, 207, 5000, '2024-02-18 06:58:06'),
(8, 3, 3, 208, 5000, '2024-02-10 17:30:00'),
(9, 2, 2, 209, 5000, '2024-01-12 17:30:00'),
(10, 3, 3, 210, 5000, '2024-05-05 17:30:00'),
(11, 2, 1, 211, 5000, '2024-01-08 17:30:00'),
(12, 2, 1, 212, 5000, '2024-01-21 17:30:00'),
(13, 3, 3, 213, 5000, '2024-02-08 17:30:00'),
(14, 2, 2, 214, 5000, '2024-01-29 17:30:00'),
(15, 2, 2, 215, 5000, '2024-01-17 17:30:00'),
(16, 2, 1, 216, 5000, '2024-01-04 17:30:00'),
(17, 2, 2, 217, 5000, '2024-02-09 12:07:06'),
(18, 2, 2, 218, 5000, '2024-02-13 12:27:48'),
(19, 2, 2, 219, 5000, '2024-01-02 12:27:56'),
(20, 3, 3, 220, 5000, '2024-02-24 12:28:09'),
(21, 2, 2, 221, 5000, '2024-02-26 12:28:16'),
(22, 3, 2, 222, 5000, '2024-01-18 12:28:28'),
(23, 3, 3, 223, 5000, '2024-02-24 12:28:40'),
(24, 3, 2, 224, 5000, '2024-02-14 12:28:48'),
(25, 2, 2, 225, 5000, '2024-03-03 12:28:57'),
(26, 3, 3, 226, 5000, '2024-01-11 12:29:09'),
(27, 3, 3, 227, 5000, '2024-02-02 12:29:18'),
(28, 2, 2, 228, 5000, '2024-02-13 12:29:31'),
(29, 3, 2, 229, 5000, '2024-02-29 12:29:43'),
(30, 3, 3, 230, 5000, '2024-02-10 12:29:53'),
(31, 3, 2, 231, 5000, '2024-01-31 12:30:03'),
(32, 2, 2, 232, 5000, '2024-02-19 12:30:13'),
(33, 3, 3, 233, 5000, '2024-02-14 12:33:19'),
(34, 2, 1, 234, 5000, '2024-02-22 12:33:06'),
(35, 2, 0, 235, 5000, '2024-01-11 12:32:56'),
(36, 3, 3, 236, 5000, '2024-02-12 12:32:47'),
(37, 2, 2, 237, 5000, '2024-02-20 12:32:33'),
(38, 3, 3, 238, 5000, '2024-01-25 12:32:22'),
(39, 3, 3, 239, 5000, '2024-02-05 12:32:12'),
(40, 3, 2, 240, 5000, '2024-02-08 12:32:02'),
(41, 2, 2, 241, 5000, '2024-02-10 12:31:52'),
(42, 3, 3, 242, 5000, '2024-01-16 12:31:42'),
(43, 3, 3, 243, 5000, '2024-02-14 12:31:30'),
(44, 2, 2, 244, 5000, '2024-02-28 12:31:21'),
(45, 3, 3, 245, 5000, '2024-02-05 12:31:12'),
(46, 3, 3, 246, 5000, '2024-02-09 12:31:02'),
(47, 2, 2, 247, 5000, '2024-01-23 12:30:53'),
(48, 3, 2, 248, 5000, '2024-02-07 12:30:41'),
(49, 3, 3, 249, 5000, '2024-03-07 12:30:31'),
(50, 3, 3, 250, 5000, '2024-02-18 12:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `State`) VALUES
(1, 'Yangon'),
(2, 'Bago'),
(3, 'Mandalay'),
(4, 'Sagaing'),
(5, 'Magway'),
(6, 'Tanintharyi'),
(7, 'Ayeyarwaddy'),
(8, 'Kachin'),
(9, 'Kayar'),
(10, 'Kayin'),
(11, 'Chin'),
(12, 'Mon'),
(13, 'Rakhine'),
(14, 'Shan'),
(15, 'Nay Pyi Taw');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `userIp` varbinary(16) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `userIp`, `city`, `country`, `loginTime`) VALUES
(6, 3, '10806121', 0x3a3a31, '', '', '2020-07-20 14:56:45'),
(7, 3, 'test@gmail.com', 0x3a3a31, '', '', '2024-02-18 06:50:21'),
(8, 3, 'test@gmail.com', 0x3a3a31, '', '', '2024-02-18 07:19:48'),
(9, 3, 'test@gmail.com', 0x3a3a31, '', '', '2024-02-18 07:50:40'),
(10, 3, 'YKPT-22487', 0x3a3a31, '', '', '2024-02-18 08:03:59'),
(11, 3, 'YKPT-22487', 0x3a3a31, '', '', '2024-02-18 08:24:45'),
(12, 4, 'YKPT-22523', 0x3a3a31, '', '', '2024-02-18 08:32:07'),
(13, 1, 'YKPT-22487', 0x3a3a31, '', '', '2024-02-18 11:49:23'),
(14, 2, 'kaungminmyat@ucsy.edu.mm', 0x3a3a31, '', '', '2024-02-18 12:36:55'),
(15, 3, 'hmt@gmail.com', 0x3a3a31, '', '', '2024-02-18 12:41:35'),
(16, 4, 'pps@gmial.com', 0x3a3a31, '', '', '2024-02-18 12:45:24'),
(17, 5, 'bmk@gmail.com', 0x3a3a31, '', '', '2024-02-18 12:49:04'),
(18, 2, 'kaungminmyat@ucsy.edu.mm', 0x3a3a31, '', '', '2024-02-18 15:33:28'),
(19, 2, 'kaungminmyat@ucsy.edu.mm', 0x3a3a31, '', '', '2024-02-18 15:53:44'),
(20, 2, 'kaungminmyat@ucsy.edu.mm', 0x3a3a31, '', '', '2024-02-18 15:53:44'),
(21, 1, 'YKPT-22487', 0x3a3a31, '', '', '2024-02-19 07:07:24'),
(22, 2, 'YKPT-22523', 0x3a3a31, '', '', '2024-02-19 07:09:39'),
(23, 3, 'hmt@gmail.com', 0x3a3a31, '', '', '2024-02-19 07:35:27'),
(24, 3, 'hmt@gmail.com', 0x3a3a31, '', '', '2024-02-19 07:35:28'),
(25, 3, 'hmt@gmail.com', 0x3a3a31, '', '', '2024-02-19 07:37:31'),
(26, 1, 'YKPT-22487', 0x3a3a31, '', '', '2024-02-19 07:40:29'),
(28, 1, 'YKPT-22487', 0x3a3a31, '', '', '2024-02-19 12:46:36'),
(29, 1, 'zinzaw@gmail.com', 0x3a3a31, '', '', '2024-02-21 18:10:53'),
(30, 1, 'zinzaw@gmail.com', 0x3132372e302e302e31, '', '', '2024-02-22 07:46:43'),
(31, 10, 'zinzaw288@gmail.com', 0x3a3a31, '', '', '2024-02-27 15:18:05'),
(32, 11, 'zinzaw289@gmail.com', 0x3a3a31, '', '', '2024-02-27 15:36:30'),
(33, 12, 'enp@gmail.com', 0x3a3a31, '', '', '2024-02-28 06:53:38'),
(34, 13, 'enp@gmail.com', 0x3a3a31, '', '', '2024-02-28 07:03:58'),
(35, 13, 'enp@gmail.com', 0x3a3a31, '', '', '2024-02-28 07:05:27'),
(36, 14, 'nadi@gmail.com', 0x3a3a31, '', '', '2024-02-28 07:09:04'),
(37, 14, 'nadi@gmail.com', 0x3a3a31, '', '', '2024-02-28 07:28:46'),
(38, 1, 'zinzaw@gmail.com', 0x3a3a31, '', '', '2024-02-28 13:02:27'),
(39, 17, 'zinzzaw288@gmail.com', 0x3a3a31, '', '', '2024-02-28 13:25:56'),
(40, 2, 'kaungminmyat@ucsy.edu.mm', 0x3a3a31, '', '', '2024-02-28 13:50:50'),
(41, 4, 'pps@gmail.com', 0x3a3a31, '', '', '2024-02-28 14:19:49'),
(42, 1, 'zinzaw@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:10:06'),
(43, 10, 'enp@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:16:11'),
(44, 14, 'nadi@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:20:11'),
(45, 2, 'kaungminmyat@ucsy.edu.mm', 0x3a3a31, '', '', '2024-02-28 15:26:00'),
(46, 3, 'hmt@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:30:33'),
(47, 4, 'pps@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:32:37'),
(48, 5, 'bmk@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:34:39'),
(49, 6, 'osk@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:37:35'),
(50, 7, 'tps@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:40:20'),
(51, 8, 'nhm@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:44:35'),
(52, 8, 'nhm@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:44:37'),
(53, 11, 'kwy@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:46:54'),
(54, 13, 'mtk@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:49:33'),
(55, 15, 'kzh@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:53:23'),
(56, 16, 'bpst@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:56:01'),
(57, 17, 'ylsy@gmail.com', 0x3a3a31, '', '', '2024-02-28 15:58:38'),
(58, 18, 'sanyu@gmail.com', 0x3a3a31, '', '', '2024-02-28 16:03:14'),
(59, 19, 'waiyan@gmail.com', 0x3a3a31, '', '', '2024-02-28 16:08:17'),
(60, 1, 'zinzaw@gmail.com', 0x3a3a31, '', '', '2024-03-02 06:16:41'),
(61, 1, 'zinzaw@gmail.com', 0x3a3a31, '', '', '2024-03-02 13:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `contactNo` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) DEFAULT NULL,
  `passUdateDate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `name`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(1, 'YKPT-22487', 'Zin Zin Zaw', 'Female', 1234567890, 'zinzaw@gmail.com', 'zzz', '2024-02-14 14:56:18', '19-02-2024 06:16:43', NULL),
(2, 'YKPT-22523', 'Kaung Min Myat', 'Male', 9123456789, 'kaungminmyat@ucsy.edu.mm', 'kaung', '2024-02-18 08:31:41', '19-02-2024 12:44:06', NULL),
(3, 'YKPT-22521', 'Hsan Min Thaw', 'Male', 123456789, 'hmt@gmail.com', 'hmt', '2024-01-14 17:30:00', '', ''),
(4, 'YKPT-22496', 'Pyae Phyoe San', 'Male', 123456781, 'pps@gmail.com', 'pps', '2024-01-31 17:30:00', '', ''),
(5, 'YKPT-22522', 'Bhone Min Khant', 'Male', 123456782, 'bmk@gmail.com', 'bmk', '2024-02-02 17:30:00', '', ''),
(6, 'YKPT-22332', 'Oak Soe Khant', 'Male', 123456783, 'osk@gmail.com', 'osk', '2024-01-16 17:30:00', '[value-9]', '[value-10]'),
(7, 'YKPT-22321', 'Thet Paing Soe', 'Male', 123456784, 'tps@gmail.com', 'tps', '2024-02-29 17:30:00', '[value-9]', '[value-10]'),
(8, 'YKPT-22335', 'Nyan Htet Myat', 'Male', 123456785, 'nhm@gmail.com', 'nhm', '2024-01-28 17:30:00', '[value-9]', '[value-10]'),
(10, 'YKPT-22483', 'Ei Ngone Phoo', 'Female', 112345678, 'enp@gmail.com', 'enp', '2024-02-27 15:17:25', NULL, NULL),
(11, 'YKPT-22311', 'Kyaw Wai Yan', 'Male', 112233456, 'kwy@gmail.com', 'kwy', '2024-02-27 15:36:17', NULL, NULL),
(13, 'YKPT-22631', 'Mya Thin Kyu', 'female', 123456782, 'mtk@gmail.com', 'mtk', '2024-02-28 07:02:10', NULL, NULL),
(14, 'YKPT-22484', 'Nadi Myint Than', 'female', 11234567, 'nadi@gmail.com', 'nadi', '2024-02-28 07:08:31', NULL, NULL),
(15, 'YKPT-22881', 'Kay Zin Htet', 'Female', 9983952041, 'kzh@gmail.com', 'kzh', '2024-02-28 07:56:55', NULL, NULL),
(16, 'YKPT-22827', 'Bhone Pyae Si Thu', 'Male', 987666211, 'bpst@gmail.com', 'bpst', '2024-02-28 08:09:42', NULL, NULL),
(17, 'YKPT-22163', 'Yoon Lae Shwe Yee', 'female', 11342156, 'ylsy@gmail.com', 'ylsw', '2024-02-28 13:25:44', NULL, NULL),
(18, 'YKPT-22190', 'San Yu', 'female', 23123445, 'sanyu@gmail.com', 'san', '2024-02-28 16:02:58', NULL, NULL),
(19, 'YKPT-21625', 'Wai Yan Kyaw', 'male', 3432425, 'waiyan@gmail.com', 'wai', '2024-02-28 16:07:16', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomregistration`
--
ALTER TABLE `roomregistration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_no` (`room_no`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roomregistration`
--
ALTER TABLE `roomregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
