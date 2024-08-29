-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2024 at 12:51 PM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', 'Test@1234', '2020-04-04 14:01:45', '2024-04-17');

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` int(11) NOT NULL,
  `adminid` int(11) NOT NULL,
  `ip` varbinary(16) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alinkar`
--

CREATE TABLE `alinkar` (
  `id` int(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alinkar`
--

INSERT INTO `alinkar` (`id`, `seater`, `available`, `room_no`) VALUES
(1, 2, 2, 101),
(2, 2, 2, 102),
(3, 2, 2, 103),
(4, 2, 2, 104),
(5, 2, 2, 105),
(6, 2, 2, 106),
(7, 2, 2, 107),
(8, 2, 2, 108),
(9, 2, 2, 109),
(10, 2, 2, 110),
(11, 2, 2, 111),
(12, 2, 2, 112),
(13, 3, 3, 113),
(14, 2, 2, 114),
(15, 2, 2, 115),
(16, 2, 2, 116),
(17, 2, 2, 117),
(18, 2, 2, 118),
(19, 2, 2, 119),
(20, 2, 2, 120),
(21, 2, 2, 121),
(22, 2, 2, 122),
(23, 2, 2, 123),
(24, 2, 2, 124),
(25, 2, 2, 125),
(26, 2, 2, 126),
(27, 2, 2, 127),
(28, 2, 2, 128),
(29, 2, 2, 129),
(30, 2, 2, 130),
(31, 2, 2, 131),
(32, 2, 2, 132),
(33, 2, 2, 133),
(34, 2, 2, 134),
(35, 2, 2, 135),
(36, 2, 2, 136),
(37, 2, 2, 137),
(38, 2, 2, 138),
(39, 2, 2, 139),
(40, 2, 2, 201),
(41, 3, 3, 202),
(42, 2, 2, 203),
(43, 2, 2, 204),
(44, 2, 2, 205),
(45, 2, 2, 206),
(46, 2, 2, 207),
(47, 2, 2, 208),
(48, 2, 2, 209),
(49, 2, 2, 210),
(50, 2, 2, 211),
(51, 2, 2, 212),
(52, 3, 3, 213),
(53, 2, 2, 214),
(54, 3, 3, 215),
(55, 2, 2, 216),
(56, 2, 2, 217),
(57, 2, 2, 218),
(58, 2, 2, 219),
(59, 2, 2, 220),
(60, 2, 2, 221),
(61, 2, 2, 222),
(62, 2, 2, 223),
(63, 2, 2, 224),
(64, 2, 2, 225),
(65, 2, 2, 226),
(66, 2, 2, 227),
(67, 2, 2, 228),
(68, 2, 2, 229),
(69, 2, 2, 230),
(70, 2, 2, 231),
(71, 2, 2, 232),
(72, 2, 2, 233),
(73, 2, 2, 234),
(74, 2, 2, 235),
(75, 2, 2, 236),
(76, 2, 2, 237),
(77, 2, 2, 238),
(78, 2, 2, 239),
(79, 2, 2, 240),
(80, 2, 2, 241),
(81, 3, 3, 242);

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `hostelName` varchar(500) NOT NULL,
  `fees` int(11) DEFAULT NULL,
  `meal_expenses` int(11) DEFAULT NULL,
  `posting_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`hostelName`, `fees`, `meal_expenses`, `posting_date`) VALUES
('alinkar', 25000, 93000, NULL),
('mudra', 25000, 93000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mudra`
--

CREATE TABLE `mudra` (
  `id` int(11) NOT NULL,
  `seater` int(11) DEFAULT NULL,
  `available` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mudra`
--

INSERT INTO `mudra` (`id`, `seater`, `available`, `room_no`) VALUES
(1, 2, 2, 101),
(2, 2, 2, 102),
(3, 2, 2, 103),
(4, 2, 2, 104),
(5, 2, 2, 105),
(6, 2, 2, 106),
(7, 2, 2, 107),
(8, 2, 2, 108),
(9, 2, 2, 109),
(10, 2, 2, 110),
(11, 3, 3, 111),
(12, 3, 3, 112),
(13, 2, 2, 113),
(14, 2, 2, 114),
(15, 2, 2, 115),
(16, 2, 2, 116),
(17, 2, 2, 117),
(18, 2, 2, 118),
(19, 2, 2, 119),
(20, 2, 2, 120),
(21, 2, 2, 121),
(22, 2, 2, 122),
(23, 2, 2, 123),
(24, 2, 2, 124),
(25, 2, 2, 125),
(26, 2, 2, 126),
(27, 2, 2, 127),
(28, 2, 2, 128),
(29, 2, 2, 129),
(30, 2, 2, 130),
(31, 2, 2, 131),
(32, 2, 2, 132),
(33, 2, 2, 133),
(34, 2, 2, 134),
(35, 2, 2, 135),
(36, 2, 2, 136),
(37, 2, 2, 137),
(38, 2, 2, 138),
(39, 2, 2, 139),
(40, 2, 2, 201),
(41, 2, 2, 202),
(42, 2, 2, 203),
(43, 2, 2, 204),
(44, 2, 2, 205),
(45, 2, 2, 206),
(46, 2, 2, 207),
(47, 2, 2, 208),
(48, 2, 2, 209),
(49, 2, 2, 210),
(50, 2, 2, 211),
(51, 2, 2, 212),
(52, 2, 2, 213),
(53, 2, 2, 214),
(54, 2, 2, 215),
(55, 2, 2, 216),
(56, 2, 2, 217),
(57, 2, 2, 218),
(58, 2, 2, 219),
(59, 2, 2, 220),
(60, 2, 2, 221),
(61, 2, 2, 222),
(62, 2, 2, 223),
(63, 2, 2, 224),
(64, 2, 2, 225),
(65, 2, 2, 226),
(66, 2, 2, 227),
(67, 2, 2, 228),
(68, 2, 2, 229),
(69, 2, 2, 230),
(70, 2, 2, 231),
(71, 2, 2, 232),
(72, 2, 2, 233),
(73, 2, 2, 234),
(74, 2, 2, 235),
(75, 2, 2, 236),
(76, 2, 2, 237),
(77, 2, 2, 238),
(78, 2, 2, 239),
(79, 3, 3, 240),
(80, 3, 3, 241),
(81, 3, 3, 242);

-- --------------------------------------------------------

--
-- Table structure for table `roomregistration`
--

CREATE TABLE `roomregistration` (
  `id` int(11) NOT NULL,
  `roomno` int(11) DEFAULT NULL,
  `seater` int(11) NOT NULL,
  `stayfrom` date DEFAULT NULL,
  `semester` varchar(500) DEFAULT NULL,
  `regNo` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `emailid` varchar(500) DEFAULT NULL,
  `egycontactno` bigint(11) DEFAULT NULL,
  `guardianName` varchar(500) DEFAULT NULL,
  `guardianRelation` varchar(500) DEFAULT NULL,
  `guardianContactno` bigint(11) DEFAULT NULL,
  `corresAddress` varchar(500) DEFAULT NULL,
  `corresCIty` varchar(500) DEFAULT NULL,
  `corresState` varchar(150) DEFAULT NULL,
  `pmntAddress` varchar(500) DEFAULT NULL,
  `pmntCity` varchar(500) DEFAULT NULL,
  `pmntState` varchar(150) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(500) DEFAULT NULL,
  `request` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `State` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `userEmail` varchar(255) DEFAULT NULL,
  `loginTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userId`, `userEmail`, `loginTime`) VALUES
(1, 4, 'zzz@gmail.com', '2024-08-16 02:33:47'),
(2, 5, 'kgkg@gmail.com', '2024-08-16 12:19:42'),
(3, 4, 'zzz@gmail.com', '2024-08-16 13:17:27'),
(4, 6, 'pps@gmail.com', '2024-08-16 13:58:26'),
(5, 1, 'zzz@gmail.com', '2024-08-16 14:11:53'),
(6, 1, 'zzz@gmail.com', '2024-08-16 14:57:02'),
(7, 1, 'zzz@gmail.com', '2024-08-17 06:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `userregistration`
--

CREATE TABLE `userregistration` (
  `id` int(11) NOT NULL,
  `regNo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `contactNo` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `regDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(45) DEFAULT NULL,
  `passUdateDate` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userregistration`
--

INSERT INTO `userregistration` (`id`, `regNo`, `name`, `gender`, `contactNo`, `email`, `password`, `regDate`, `updationDate`, `passUdateDate`) VALUES
(1, 'YKPT-22000', 'Zin Zin Zaw', 'female', 912345678, 'zzz@gmail.com', 'Zzz12345678', '2024-08-16 02:22:36', NULL, NULL),
(2, 'YKPT-22521', 'Kaung Min Myat', 'male', 912345678, 'kgkg@gmail.com', 'Zzz12345678', '2024-08-16 12:19:20', NULL, NULL),
(3, 'YKPT-22488', 'Pyae Phyoe San', 'male', 912345678, 'pps@gmail.com', 'Zzz12345678', '2024-08-16 13:56:44', NULL, NULL),
(4, 'YKPT-22450', 'Oak Soe Khant', 'male', 912345678, 'osk@gmail.com', 'Zzz12345678', '2024-08-16 13:59:40', NULL, NULL),
(5, 'YKPT-22484', 'Nadi Myint Than', 'female', 912345678, 'nmt@gmail.com', 'Zzz12345678', '2024-08-16 14:00:34', NULL, NULL),
(6, 'YKPT-22483', 'Ei Ngone Phoo', 'female', 912345678, 'enp@gmail.com', 'Zzz12345678', '2024-08-16 14:01:32', NULL, NULL),
(7, 'YKPT-22476', 'Hnin Ei Ei Win', 'female', 912345678, 'heew@gmail.com', 'Zzz12345678', '2024-08-16 14:02:28', NULL, NULL),
(8, 'YKPT-22455', 'Thinzar Soe Thein', 'female', 912345678, 'tzst@gmail.com', 'Zzz12345678', '2024-08-16 14:03:20', NULL, NULL),
(9, 'YKPT-22555', 'Bhone Min Khant', 'male', 912345678, 'bmk@gmail.com', 'Zzz12345678', '2024-08-16 14:05:30', NULL, NULL),
(10, 'YKPT-22231', 'Thet Paing Soe', 'male', 912345678, 'tps@gmail.com', 'Zzz12345678', '2024-08-16 14:04:23', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adminid` (`adminid`);

--
-- Indexes for table `alinkar`
--
ALTER TABLE `alinkar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`hostelName`);

--
-- Indexes for table `mudra`
--
ALTER TABLE `mudra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roomregistration`
--
ALTER TABLE `roomregistration`
  ADD PRIMARY KEY (`id`,`seater`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`,`State`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregistration`
--
ALTER TABLE `userregistration`
  ADD PRIMARY KEY (`id`,`regNo`,`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminlog`
--
ALTER TABLE `adminlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alinkar`
--
ALTER TABLE `alinkar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `mudra`
--
ALTER TABLE `mudra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `roomregistration`
--
ALTER TABLE `roomregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
