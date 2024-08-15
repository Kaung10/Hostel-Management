-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2024 at 09:37 AM
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
-- Table structure for table `alinkar`
--

CREATE TABLE `alinkar` (
  `id` int(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `avaliable` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alinkar`
--

INSERT INTO `alinkar` (`id`, `seater`, `avaliable`, `room_no`) VALUES
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
-- Table structure for table `hosteldetails`
--

CREATE TABLE `fees` (
  `hostelName` varchar(500) DEFAULT NULL,
  `fees` int(11) DEFAULT NULL,
  `meal_expenses` int(11) DEFAULT NULL,
  `posting_date` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mudra`
--

CREATE TABLE `mudra` (
  `id` int(11) DEFAULT NULL,
  `seater` int(11) DEFAULT NULL,
  `avaliable` int(11) DEFAULT NULL,
  `room_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mudra`
--

INSERT INTO `mudra` (`id`, `seater`, `avaliable`, `room_no`) VALUES
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
  `updationDate` varchar(500) DEFAULT NULL,
  `request` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `roomregistration`
--

INSERT INTO `roomregistration` (`id`, `roomno`, `seater`, `feespm`, `foodstatus`, `stayfrom`, `duration`, `semester`, `regno`, `name`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `pmntAddress`, `pmntCity`, `pmnatetState`, `postingDate`, `updationDate`, `request`) VALUES
(20, 235, 2, 5000, 1, '2024-02-07', 4, 'Semester 4', 'YKPT-22487', 'Zin Zin Zaw', 'Female', 1234567890, 'zinzaw@gmail.com', 11234567, 'U Soe Paing', 'Father', 25402212, 'No.18, Shwe Pyi Than', 'bago', 'Bago', 'No.18, Shwe Pyi Than', 'bago', 'Bago', '2024-02-28 15:15:02', NULL, NULL),
(21, 235, 2, 5000, 1, '2024-02-04', 4, 'Semester 4', 'YKPT-22483', 'Ei Ngone Phoo', 'Female', 112345678, 'enp@gmail.com', 33214564, 'Daw Pan Ei', 'Mother', 22331566, 'No.349, Mon San Pya', 'bago', 'Bago', 'No.349, Mon San Pya', 'bago', 'Bago', '2024-02-28 15:18:37', NULL, NULL),
(22, 201, 2, 0, 1, '2024-02-13', 3, 'Semester 4', 'YKPT-22484', 'Nadi Myint Than', 'female', 11234567, 'nadi@gmail.com', 34561568, 'U Myint Than', 'Father', 3214563, 'No.16, Sayar Ma Gyi st', 'Bahan', 'Yangon', 'No.16, Sayar Ma Gyi st', 'Bahan', 'Yangon', '2024-02-28 15:24:29', NULL, NULL),
(23, 204, 3, 0, 1, '2024-02-04', 2, 'Semester 4', 'YKPT-22523', 'Kaung Min Myat', 'Male', 9123456789, 'kaungminmyat@ucsy.edu.mm', 44321234, 'Daw Nu Wah', 'Mother', 4323562, 'No.43, oakkin st', 'Shwe Pyi Thar', 'Yangon', 'No.43, oakkin st', 'Shwe Pyi Thar', 'Yangon', '2024-02-28 15:29:57', NULL, NULL),
(24, 204, 3, 0, 1, '2024-03-07', 4, 'Semester 4', 'YKPT-22521', 'Hsan Min Thaw', 'Male', 123456789, 'hmt@gmail.com', 55328432, 'U Zaw', 'Father', 67743194, 'No.84, Sein Hnin st', 'naypyitaw', 'Nay Pyi Taw', 'No.84, Sein Hnin st', 'naypyitaw', 'Nay Pyi Taw', '2024-02-28 15:32:10', NULL, NULL),
(25, 204, 3, 0, 1, '0000-00-00', 0, 'Semester 4', 'YKPT-22496', 'Pyae Phyoe San', 'Male', 123456781, 'pps@gmail.com', 88647824, 'Daw Hnin', 'Mother', 7754356, 'No.55, Ywar Ngan', 'Taunggyi', 'Shan', 'No.55, Ywar Ngan', 'Taunggyi', 'Shan', '2024-02-28 15:34:11', NULL, NULL),
(26, 205, 3, 0, 1, '2024-02-06', 3, 'Semester 4', 'YKPT-22522', 'Bhone Min Khant', 'Male', 123456782, 'bmk@gmail.com', 53466777, 'U Naing ', 'Father', 45425366, 'No.79, U Pu st', 'Pathein', 'Ayeyarwaddy', 'No.79, U Pu st', 'Pathein', 'Ayeyarwaddy', '2024-02-28 15:37:09', NULL, NULL),
(27, 205, 3, 0, 1, '2024-02-26', 4, 'Semester 4', 'YKPT-22332', 'Oak Soe Khant', 'Male', 123456783, 'osk@gmail.com', 443464573, 'Daw Htwe Nu', 'Mother', 56243656, 'No.22, Htanaung st', 'Maw La Myine', 'Mon', 'No.22, Htanaung st', 'Maw La Myine', 'Mon', '2024-02-28 15:40:00', NULL, NULL),
(28, 216, 2, 5000, 1, '2024-02-05', 4, 'Semester 4', 'YKPT-22321', 'Thet Paing Soe', 'Male', 123456784, 'tps@gmail.com', 5764542354, 'U Thet', 'Father', 554645635, 'No.50, jasmine st', 'Tha Tone', 'Mon', 'No.50, jasmine st', 'Tha Tone', 'Mon', '2024-02-28 15:44:10', NULL, NULL),
(29, 229, 3, 5000, 1, '2024-02-10', 4, 'Semester 4', 'YKPT-22335', 'Nyan Htet Myat', 'Male', 123456785, 'nhm@gmail.com', 4323445, 'U Aung Moe', 'Father', 3453225, 'No.38, Than st', 'Hlaing', 'Yangon', 'No.38, Than st', 'Hlaing', 'Yangon', '2024-02-28 15:46:34', NULL, NULL),
(30, 234, 2, 5000, 1, '2024-01-01', 4, 'Semester 3', 'YKPT-22311', 'Kyaw Wai Yan', 'Male', 112233456, 'kwy@gmail.com', 444522128, 'Daw Nway Oo', 'Mother', 686762696, 'No.18, Tulip St', 'naypyitaw', 'Nay Pyi Taw', 'No.18, Tulip St', 'naypyitaw', 'Nay Pyi Taw', '2024-02-28 15:48:49', NULL, NULL),
(31, 240, 3, 5000, 1, '2024-02-08', 1, 'Semester 3', '22631', 'Mya Thin Kyu', 'female', 123456782, 'mtk@gmail.com', 34325253, 'U Hla Kyaing', 'Father', 23432525, 'No.39, Lavendar St', 'Pyin Oo Lwin', 'Mandalay', 'No.39, Lavendar St', 'Pyin Oo Lwin', 'Mandalay', '2024-02-28 15:52:49', NULL, NULL),
(32, 211, 2, 5000, 1, '2024-02-17', 4, 'Semester 1', 'YKPT-22881', 'Kay Zin Htet', 'Female', 9983952041, 'kzh@gmail.com', 35243534, 'U Min Naing', 'Father', 342354654, 'No.42, Kalayarni St', 'Inn Ta Kaw', 'Bago', 'No.42, Kalayarni St', 'Inn Ta Kaw', 'Bago', '2024-02-28 15:55:32', NULL, NULL),
(33, 248, 3, 5000, 1, '2024-02-29', 3, 'Semester 1', 'YKPT-22827', 'Bhone Pyae Si Thu', 'Male', 987666211, 'bpst@gmail.com', 8748342, 'U Si Thu', 'Father', 4524335, 'No.61, Star City ', 'thanlyin', 'Yangon', 'No.61, Star City ', 'thanlyin', 'Yangon', '2024-02-28 15:57:52', NULL, NULL),
(34, 231, 3, 5000, 1, '2024-01-25', 3, 'Semester 5', 'YKPT-22163', 'Yoon Lae Shwe Yee', 'female', 11342156, 'ylsy@gmail.com', 6568767665, 'Daw Thwe ', 'Mother', 45634243, 'No.22, Yan Gyi Aung St', 'San Chaung', 'Yangon', 'No.22, Yan Gyi Aung St', 'San Chaung', 'Yangon', '2024-02-28 16:01:55', NULL, NULL),
(35, 212, 2, 5000, 1, '2024-02-04', 4, 'Semester 7', 'YKPT-22190', 'San Yu', 'female', 23123445, 'sanyu@gmail.com', 342345533, 'U Paing', 'Father', 1234232434, 'No.6,  lily St', 'Myeik', 'Tanintharyi', 'No.6,  lily St', 'Myeik', 'Tanintharyi', '2024-02-28 16:06:10', NULL, NULL),
(36, 222, 3, 5000, 1, '2024-02-09', 5, 'Semester 9', 'YKPT-21625', 'Wai Yan Kyaw', 'male', 3432425, 'waiyan@gmail.com', 234234553, 'U Kyaw', 'Father', 23423425, 'No.9, hua st', 'bhamo', 'Kachin', 'No.9, hua st', 'bhamo', 'Kachin', '2024-02-28 16:10:55', NULL, NULL),
(40, 231, 3, 5000, 1, '2024-06-03', 4, 'Semester 5', 'YKPT-22501', 'Zin', 'female', 9444444444, 'zinzaw289@gmail.com', 123, 'U', 'dad', 1234, 'bago', 'bago', 'Bago', 'bago', 'bago', 'Bago', '2024-07-29 12:31:30', NULL, NULL);

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
(61, 1, 'zinzaw@gmail.com', 0x3a3a31, '', '', '2024-03-02 13:14:14'),
(62, 20, 'zin@gmail.com', 0x3a3a31, '', '', '2024-03-06 04:39:01'),
(63, 22, 'z@gmail.com', 0x3a3a31, '', '', '2024-03-06 14:56:30'),
(64, 23, 'zinzaw288@gmail.com', 0x3a3a31, '', '', '2024-05-31 08:03:46'),
(65, 24, 'wai@gmail.com', 0x3132372e302e302e31, '', '', '2024-05-31 08:22:07'),
(66, 25, 'zinzaw289@gmail.com', 0x3a3a31, '', '', '2024-07-29 12:29:53'),
(67, 26, 'zzz@gmail.com', 0x3a3a31, '', '', '2024-08-06 08:14:09');

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
(19, 'YKPT-21625', 'Wai Yan Kyaw', 'male', 3432425, 'waiyan@gmail.com', 'wai', '2024-02-28 16:07:16', NULL, NULL),
(20, 'YKPT-22222', 'zin', 'female', 111, 'zin@gmail.com', '1234', '2024-03-06 04:38:40', NULL, NULL),
(21, '11111', 'aaa', 'female', 111, 'nhm@gmail.com', '123', '2024-03-06 07:22:58', NULL, NULL),
(22, 'YKPT-22211', 'w', 'female', 9342423534, 'z@gmail.com', 'Zz222222222', '2024-03-06 14:55:54', NULL, NULL),
(23, 'YKPT-22500', 'zz', 'female', 912345678, 'zinzaw288@gmail.com', 'Zzz12345678', '2024-05-31 08:03:21', NULL, NULL),
(24, 'YKPT-22333', 'wai', 'female', 988888888, 'wai@gmail.com', 'Aa12345678', '2024-05-31 08:21:38', NULL, NULL),
(25, 'YKPT-22501', 'Zin', 'female', 9444444444, 'zinzaw289@gmail.com', 'Zzz1234567', '2024-07-29 12:29:24', NULL, NULL),
(26, 'YKPT-22505', 'zzz', 'female', 978888888, 'zzz@gmail.com', 'Zzz1234567', '2024-08-06 08:13:40', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
