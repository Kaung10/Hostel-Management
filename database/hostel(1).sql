-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2024 at 02:49 PM
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
(2, 2, 1, 102),
(3, 2, 2, 103),
(4, 2, 1, 104),
(5, 2, 2, 105),
(6, 2, 0, 106),
(7, 2, 2, 107),
(8, 2, 0, 108),
(9, 2, 0, 109),
(10, 2, 2, 110),
(11, 2, 1, 111),
(12, 2, 2, 112),
(13, 3, 2, 113),
(14, 2, 1, 114),
(15, 2, 1, 115),
(16, 2, 2, 116),
(17, 2, 1, 117),
(18, 2, 2, 118),
(19, 2, 2, 119),
(20, 2, 2, 120),
(21, 2, 2, 121),
(22, 2, 2, 122),
(23, 2, 1, 123),
(24, 2, 2, 124),
(25, 2, 1, 125),
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
(41, 3, 0, 202),
(42, 2, 2, 203),
(43, 2, 2, 204),
(44, 2, 1, 205),
(45, 2, 2, 206),
(46, 2, 2, 207),
(47, 2, 2, 208),
(48, 2, 2, 209),
(49, 2, 2, 210),
(50, 2, 2, 211),
(51, 2, 1, 212),
(52, 3, 2, 213),
(53, 2, 2, 214),
(54, 3, 2, 215),
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
(74, 2, 1, 235),
(75, 2, 1, 236),
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
(2, 2, 1, 102),
(3, 2, 2, 103),
(4, 2, 1, 104),
(5, 2, 1, 105),
(6, 2, 2, 106),
(7, 2, 1, 107),
(8, 2, 2, 108),
(9, 2, 2, 109),
(10, 2, 2, 110),
(11, 3, 1, 111),
(12, 3, 2, 112),
(13, 2, 1, 113),
(14, 2, 1, 114),
(15, 2, 2, 115),
(16, 2, 2, 116),
(17, 2, 2, 117),
(18, 2, 2, 118),
(19, 2, 2, 119),
(20, 2, 2, 120),
(21, 2, 0, 121),
(22, 2, 2, 122),
(23, 2, 2, 123),
(24, 2, 1, 124),
(25, 2, 2, 125),
(26, 2, 2, 126),
(27, 2, 2, 127),
(28, 2, 2, 128),
(29, 2, 2, 129),
(30, 2, 1, 130),
(31, 2, 2, 131),
(32, 2, 1, 132),
(33, 2, 2, 133),
(34, 2, 2, 134),
(35, 2, 1, 135),
(36, 2, 2, 136),
(37, 2, 2, 137),
(38, 2, 2, 138),
(39, 2, 2, 139),
(40, 2, 0, 201),
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
(70, 2, 0, 231),
(71, 2, 2, 232),
(72, 2, 2, 233),
(73, 2, 2, 234),
(74, 2, 1, 235),
(75, 2, 2, 236),
(76, 2, 1, 237),
(77, 2, 2, 238),
(78, 2, 1, 239),
(79, 3, 2, 240),
(80, 3, 3, 241),
(81, 3, 0, 242);

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

--
-- Dumping data for table `roomregistration`
--

INSERT INTO `roomregistration` (`id`, `roomno`, `seater`, `stayfrom`, `semester`, `regNo`, `name`, `gender`, `contactno`, `emailid`, `egycontactno`, `guardianName`, `guardianRelation`, `guardianContactno`, `corresAddress`, `corresCIty`, `corresState`, `pmntAddress`, `pmntCity`, `pmntState`, `postingDate`, `updationDate`, `request`) VALUES
(1, 231, 2, '2024-06-03', 'Semester 5', 'YKPT-22487', 'Zin Zin Zaw', 'female', 912345678, 'zzz@gmail.com', 987654321, 'U Soe', 'Father', 9123456789, 'No.18, Shwe Pyi Tan 1st street', 'Bago', 'Bago', 'No.18, Shwe Pyi Tan 1st street', 'Bago', 'Bago', '2024-09-01 17:30:00', '2024', 2),
(2, 112, 3, '2024-06-02', 'Semester 5', 'YKPT-22514', 'Chan Myae Thu Thu Kyaw', 'female', 9766233898, 'cmttk@gmail.com', 94221456454, 'Daw Hnin', 'Mother', 9934563234, 'No.71, Oak Po st', 'Pyay', 'Bago', 'No.71, Oak Po st', 'Pyay', 'Bago', '2024-09-01 17:30:00', '2024', 2),
(3, 112, 3, '2024-06-02', 'Semester 5', 'YKPT-22538', 'Wati Khin', 'female', 9883623253, 'wtk@gmail.com', 9993262644, 'Daw Khin', 'Mother', 9638625237, 'No.11, Fuji st', 'Nay Pyi Taw', 'Nay Pyi Taw', 'No.11, Fuji st', 'Nay Pyi Taw', 'Nay Pyi Taw', '2024-09-01 17:30:00', '2024', 0),
(4, 231, 2, '2024-09-02', 'Semester 5', 'YKPT-22483', 'Ei Ngone Phoo', 'female', 912345678, 'enp@gmail.com', 912341234, 'Daw Pan Ei', 'Mother', 9123456123, 'No.257, Mon San Pya st', 'Bago ', 'Bago', 'No.257, Mon San Pya st', 'Bago ', 'Bago', '2024-09-01 17:30:00', '2024', 2),
(5, 235, 2, '2024-09-01', 'Semester 5', 'YKPT-22476', 'Hnin Ei Ei Win', 'female', 912345678, 'heew@gmail.com', 987654321, 'U Han Win', 'Father', 912345612, 'No.34, Inntakaw Tar Sone', 'Inntakaw', 'Bago', 'No.34, Inntakaw Tar Sone', 'Inntakaw', 'Bago', '2024-09-01 17:30:00', '2024', 2),
(6, 201, 2, '2024-06-01', 'Semester 5', 'YKPT-22484', 'Nadi Myint Than', 'female', 912345678, 'nmt@gmail.com', 923456789, 'U Myint Than', 'Father', 9125634572, 'No.21, Oak Kyo apartment', 'Bahan', 'Yangon', 'No.21, Oak Kyo apartment', 'Bahan', 'Yangon', '2024-09-01 17:30:00', '2024', 2),
(7, 201, 2, '2024-06-02', 'Semester 5', 'YKPT-22455', 'Thinzar Soe Thein', 'female', 912345678, 'tzst@gmail.com', 9123456344, 'U Soe Thein', 'Father', 9774212163, 'no.505, Shwe Hnin Si st', 'Bago', 'Bago', 'no.505, Shwe Hnin Si st', 'Bago', 'Bago', '2024-09-01 17:30:00', '2024', 2),
(8, 202, 3, '2024-06-01', 'Semester 5', 'YKPT-22521', 'Kaung Min Myat', 'male', 912345678, 'kgkg@gmail.com', 9661244444, 'U Shwe', 'Father', 9978844521, 'No.8, Paung Kuu st', 'Mandalay', 'Mandalay', 'No.8, Paung Kuu st', 'Mandalay', 'Mandalay', '2024-09-01 17:30:00', '2024', 2),
(9, 202, 3, '0000-00-00', 'Semester 5', 'YKPT-22488', 'Pyae Phyoe San', 'male', 912345678, 'pps@gmail.com', 9878332156, 'Daw Phyu', 'Mother', 977682334, 'No.78, Thit Sar st', 'Ywar Ngan', 'Shan', 'No.78, Thit Sar st', 'Ywar Ngan', 'Shan', '2024-09-01 17:30:00', '2024', 2),
(10, 104, 2, '2024-06-04', 'Semester 5', 'YKPT-22555', 'Bhone Min Khant', 'male', 912345678, 'bmk@gmail.com', 9668943562, 'Daw Maw', 'Mother', 9444278531, 'No.55, Paw Oo st', 'Magway', 'Magway', 'No.55, Paw Oo st', 'Magway', 'Magway', '2024-09-01 17:30:00', '2024', 1),
(11, 109, 2, '2024-06-02', 'Semester 5', 'YKPT-22450', 'Oak Soe Khant', 'male', 912345678, 'osk@gmail.com', 9788214521, 'U Paing Ko', 'Brother', 9443274996, 'No.2, Grape st', 'Pann Tanaw', 'Ayeyarwaddy', 'No.2, Grape st', 'Pann Tanaw', 'Ayeyarwaddy', '2024-09-01 17:30:00', '2024', 2),
(12, 205, 2, '2024-06-02', 'Semester 5', 'YKPT-22231', 'Thet Paing Soe', 'male', 912345678, 'tps@gmail.com', 9988523354, 'U Ko Naing', 'Father', 9443878521, 'No.48, Pa Dauk st', 'Nay Pyi Taw', 'Nay Pyi Taw', 'No.48, Pa Dauk st', 'Nay Pyi Taw', 'Nay Pyi Taw', '2024-09-01 17:30:00', '2024', 2),
(13, 235, 2, '2024-06-02', 'Semester 4', 'YKPT-22680', 'Myo Khant Thu', 'male', 9444221267, 'mkt@gmail.com', 9666455128, 'U Khant', 'Father', 9442398762, 'No.73, Ngwe st', 'Mandalay', 'Mandalay', 'No.73, Ngwe st', 'Mandalay', 'Mandalay', '2024-09-01 17:30:00', '2024', 2),
(14, 212, 2, '2024-06-02', 'Semester 4', 'YKPT-22651', 'Kyaw Wai Yan', 'male', 912345123, 'kwy@gmail.com', 444522128, 'U Wai Yan', 'Father', 998842126, 'N0.28, Tulip st', 'Nay Pyi Taw', 'Nay Pyi Taw', 'N0.28, Tulip st', 'Nay Pyi Taw', 'Nay Pyi Taw', '2024-09-01 17:30:00', '2024', 2),
(15, 101, 2, '2024-06-01', 'Semester 4', 'YKPT-22629', 'Mya Thin Kyu', 'female', 9944722684, 'mtk@gmail.com', 9666226754, 'Daw Kyu', 'Mother', 9998653775, 'No.231, Mahar st', 'San Chaung', 'Yangon', 'No.231, Mahar st', 'San Chaung', 'Yangon', '2024-09-01 17:30:00', '2024', 0),
(16, 236, 2, '2024-06-02', 'Semester 4', 'YKPT-22678', 'Moe Paing Phyo', 'male', 9897437521, 'mpp@gmail.com', 9889454532, 'U Moe', 'Father', 9678567546, 'No.10, Popa st', 'Yay', 'Tanintharyi', 'No.10, Popa st', 'Yay', 'Tanintharyi', '2024-09-01 17:30:00', '2024', 2),
(17, 106, 2, '2024-06-02', 'Semester 4', 'YKPT-22670', 'Myo Thant', 'male', 9445232555, 'mt@gmail.com', 9776833456, 'Daw Thant', 'Mother', 9444367854, 'No.788, Orchid st', 'Lar Shou', 'Shan', 'No.788, Orchid st', 'Lar Shou', 'Shan', '2024-09-01 17:30:00', '2024', 2),
(18, 106, 2, '2024-06-01', 'Semester 4', 'YKPT-22610', 'Thein Htet San', 'male', 9993234576, 'ths@gmail.com', 9988332166, 'U San', 'Father', 9788624457, 'No.110, Pa dauk st', 'Mandalay', 'Mandalay', 'No.110, Pa dauk st', 'Mandalay', 'Mandalay', '2024-09-01 17:30:00', '2024', 2),
(19, 113, 3, '2024-06-01', 'Semester 4', 'YKPT-22660', 'Htoo Aung Lin', 'male', 9988573642, 'hal@gmail.com', 9993465756, 'U Htoo', 'Father', 9675442188, 'No.36, Shwe Ngar st', 'Puu Ta O', 'Kachin', 'No.36, Shwe Ngar st', 'Puu Ta O', 'Kachin', '2024-09-01 17:30:00', '2024', 2),
(20, 102, 2, '2024-06-02', 'Semester 4', 'YKPT-22644', 'Nadi Lin Aung', 'female', 9667446334, 'nla@gmail.com', 9994646277, 'Daw Linn', 'Mother', 9364526547, 'No.61, Fish st', 'Dawei', 'Tanintharyi', 'No.61, Fish st', 'Dawei', 'Ayeyarwaddy', '2024-09-01 17:30:00', '2024', 2),
(21, 107, 2, '2024-06-02', 'Semester 4', 'YKPT-22782', 'Phyu Phyu Thant Khaine', 'female', 9446765632, 'pptk@gmail.com', 9888587362, 'U Khaine', 'Father', 9748782765, 'No.33, fuji st', 'Maw La Myaing', 'Mon', 'No.33, fuji st', 'Maw La Myaing', 'Mon', '2024-09-01 17:30:00', '2024', 2),
(22, 105, 2, '2024-06-01', 'Semester 5', 'YKPT-22122', 'Hlaine Yupar Bo', 'female', 9788873555, 'hyb@gmail.com', 9777653244, 'U Bo', 'Father', 9876646647, 'No.4, Shwe Chaung st', 'Kyone Pyaw', 'Ayeyarwaddy', 'No.4, Shwe Chaung st', 'Kyone Pyaw', 'Ayeyarwaddy', '2024-09-02 17:30:00', '2024', 2),
(23, 114, 2, '2024-06-02', 'Semester 5', 'YKPT-2211', 'Hnin Ei Shwe Yi', 'female', 9887547658, 'hes@gmail.com', 9886564322, 'U Shwe Yi', 'Father', 9996324335, 'No.772, Gandamar st', 'San Chaung', 'Yangon', 'No.772, Gandamar st', 'San Chaung', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(24, 117, 2, '2024-06-02', 'Semester 5', 'YKPT-22300', 'Sit Min Thar', 'male', 9776554653, 'smt@gmail.com', 9766532452, 'U Thar', 'Father', 9664465436, 'No.29, Sabal st', 'Insein', 'Yangon', 'No.29, Sabal st', 'Insein', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(25, 122, 2, '2024-06-02', 'Semester 5', 'YKPT-22288', 'Htoo Htoo Zaw', 'male', 9667877833, 'hhz@gmail.com', 9888633455, 'U Ko', 'Brother', 9556688622, 'No.27, Sushi st', 'ThanDwel', 'Rakhine', 'No.27, Sushi st', 'ThanDwel', 'Rakhine', '2024-09-02 17:30:00', '2024', 0),
(26, 125, 2, '2024-06-01', 'Semester 5', 'YKPT-22392', 'Lin Htet Aung', 'male', 9886533234, 'lha@gmail.com', 9777653353, 'Daw Kyu', 'Mother', 9887653232, 'No.11, Moe st', 'Moe Gote', 'Mandalay', 'No.11, Moe st', 'Moe Gote', 'Mandalay', '2024-09-02 17:30:00', '2024', 2),
(27, 130, 2, '2024-06-01', 'Semester 5', 'YKPT-22433', 'Aye Chan Moe', 'female', 9766783356, 'acm@gmail.com', 9556654326, 'Daw Ngwe', 'Mother', 9887654356, 'NO.65, Kaung Shwe st', 'Pyin Oo Lwin', 'Mandalay', 'NO.65, Kaung Shwe st', 'Pyin Oo Lwin', 'Mandalay', '2024-09-02 17:30:00', '2024', 2),
(28, 237, 2, '2024-06-02', 'Semester 5', 'YKPT-22551', 'Khaing Zin Thawl', 'female', 9886547544, 'kzt@gmail.com', 9767665633, 'U Zin', 'Father', 9779876343, 'No.22, oak st', 'Pyar Pone', 'Ayeyarwaddy', 'No.22, oak st', 'Pyar Pone', 'Ayeyarwaddy', '2024-09-02 17:30:00', '2024', 2),
(29, 108, 2, '2024-06-05', 'Semester 2', 'YKPT-22799', 'Bhnoe Pyae Si Thu', 'male', 9996432542, 'bpst@gmail.com', 9865443333, 'U Si Thu', 'Father', 9778764533, 'No.361, Red st', 'Ta Mway', 'Yangon', 'No.361, Red st', 'Ta Mway', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(30, 215, 3, '2024-06-02', 'Semester 2', 'YKPT-22955', 'Aung Bhone Khant', 'male', 9788512446, 'abk@gmail.com', 9661288433, 'U Khant', 'Father', 9668833224, 'No.111, Ngu Wah st', 'Taungoo', 'Bago', 'No.111, Ngu Wah st', 'Taungoo', 'Bago', '2024-09-02 17:30:00', '2024', 2),
(31, 102, 2, '0000-00-00', 'Semester 2', 'YKPT-22931', 'Pyae Sone Phyo', 'male', 9994556321, 'psp@gmail.com', 9788654333, 'U Phyo', 'Father', 9996663421, 'No.83, Durian st', 'Maw La Myaing', 'Mon', 'No.83, Durian st', 'Maw La Myaing', 'Mon', '2024-09-02 17:30:00', '2024', 2),
(32, 242, 3, '2024-06-02', 'Semester 2', 'YKPT-22894', 'Kay Zin Htet', 'female', 9788566742, 'kzh@gmail.com', 9788765556, 'U Htet', 'Father', 9755665422, 'No.59, Market st', 'Bago', 'Bago', 'No.59, Market st', 'Bago', 'Bago', '2024-09-02 17:30:00', '2024', 2),
(33, 242, 3, '2024-06-01', 'Semester 2', 'YKPT-22994', 'Khin Moh Moh Thu', 'female', 9444221266, 'kmmt@gmail.com', 9556777773, 'U Thu', 'Father', 9888473643, 'No.49, Sakawar st', 'Kyone Pyaw', 'Ayeyarwaddy', 'No.49, Sakawar st', 'Kyone Pyaw', 'Ayeyarwaddy', '2024-09-02 17:30:00', '2024', 2),
(34, 242, 3, '2024-06-03', 'Semester 2', 'YKPT-22859', 'John May Mar Myint', 'female', 9442744636, 'jmmm@gmail.com', 9654665477, 'U Myint', 'Father', 9666123322, 'No.6, Pouk kan st', 'Taunggyi', 'Shan', 'No.6, Pouk kan st', 'Taunggyi', 'Shan', '2024-09-02 17:30:00', '2024', 2),
(35, 213, 3, '0000-00-00', 'Semester 2', 'YKPT-22881', 'Thant Mg Mg', 'male', 9999445321, 'tmm@gmail.com', 9888755442, 'U Mg', 'Father', 9888666222, 'No.21, Flower st', 'Meiktila', 'Mandalay', 'No.21, Flower st', 'Meiktila', 'Mandalay', '2024-09-02 17:30:00', '2024', 0),
(36, 213, 3, '2024-06-02', 'Semester 6', 'YKPT-22001', 'Lynn Thuta', 'male', 9777333444, 'ltt@gmail.com', 9666555345, 'U Lynn', 'Father', 9888456456, 'No.40, Chaung Oo st', 'Lashio', 'Shan', 'No.40, Chaung Oo st', 'Lashio', 'Shan', '2024-09-02 17:30:00', '2024', 2),
(37, 213, 3, '2024-06-02', 'Semester 6', 'YKPT-22011', 'Kaung Pyae Kyaw', 'male', 9666777333, 'kpk@gmail.com', 9888222333, 'U Kyaw', 'Father', 9666111222, 'No.58,  Oak Thar st', 'Minbu', 'Magway', 'No.58,  Oak Thar st', 'Minbu', 'Magway', '2024-09-02 17:30:00', '2024', 0),
(38, 108, 2, '2024-06-03', 'Semester 8', 'YKPT-21510', 'Ye Min Aung', 'male', 9888445555, 'yma@gmail.com', 9666888211, 'U Min', 'Father', 9665555666, 'No.33, Kan st', 'Thanlyin', 'Yangon', 'No.33, Kan st', 'Thanlyin', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(39, 109, 2, '2024-05-31', 'Semester 10', 'YKPT-21120', 'Wai Yan Kyaw', 'male', 9666555111, 'wyk@gmail.com', 9777666222, 'U Yan', 'Father', 9666777567, 'No.30, Pearl st', 'Kawthoung', 'Tanintharyi', 'No.30, Pearl st', 'Kawthoung', 'Tanintharyi', '2024-09-02 17:30:00', '2024', 2),
(40, 111, 3, '2024-06-02', 'Semester 6', 'YKPT-21189', 'Yoon Lae Shwe Yi', 'female', 9666644322, 'ylsy@gmail.com', 9666555445, 'Daw Shwe ', 'Mother', 9996777644, 'No.84, Danu st', 'Maw La Myaing', 'Mon', 'No.84, Danu st', 'Maw La Myaing', 'Mon', '2024-09-02 17:30:00', '2024', 2),
(41, 111, 3, '2024-06-02', 'Semester 6', 'YKPT-21444', 'Khaing Zar Thawl Hmue', 'female', 9444455778, 'kztm@gmail.com', 9444522212, 'Daw Hmue', 'Mother', 9444336776, 'No.46, Kan Thar Yar st', 'Sagaing', 'Sagaing', 'No.46, Kan Thar Yar st', 'Sagaing', 'Sagaing', '2024-09-02 17:30:00', '2024', 2),
(42, 240, 3, '2024-06-01', 'Semester 6', 'YKPT-22133', 'Kyi Sin Lin', 'female', 9666445534, 'ksl@gmail.com', 9666334456, 'Daw Lin', 'Mother', 966644433, 'No.11, Chaung Oo st', 'Hakha', 'Chin', 'No.11, Chaung Oo st', 'Hakha', 'Chin', '2024-09-02 17:30:00', '2024', 2),
(43, 121, 2, '2024-06-02', 'Semester 8', 'YKPT-21045', 'San Yu', 'female', 9667774556, 'sy@gmail.com', 9992233344, 'Daw Yu Yu', 'Mother', 9556677757, 'No.633, Myin Chan st', 'Kyaukse', 'Mandalay', 'No.633, Myin Chan st', 'Kyaukse', 'Mandalay', '2024-09-02 17:30:00', '2024', 2),
(44, 239, 2, '2024-06-03', 'Semester 10', 'YKPT-20034', 'Su Lae Hnin', 'female', 9666443237, 'slh@gmail.com', 9666441234, 'Daw Su', 'Mother', 9666633343, 'No.15, Yawt st ', 'Sittwe', 'Rakhine', 'No.15, Yawt st ', 'Sittwe', 'Rakhine', '2024-09-02 17:30:00', '2024', 2),
(45, 104, 2, '2024-06-03', 'Semester 10', 'YKPT-20112', 'Thet Myat Phyu', 'female', 9666111223, 'tmp@gmail.com', 9677833445, 'U Paing', 'Father', 9666636653, 'No.22, Bamboo st', 'Insein', 'Yangon', 'No.22, Bamboo st', 'Insein', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(46, 111, 2, '2024-06-02', 'Semester 10', 'YKPT-20110', 'Kaung Pyae Min Thein', 'male', 9666324470, 'kpmt@gmail.com', 9667774333, 'U Thein', 'Father', 9444663223, 'No.39, Htoo st', 'Shwe Pyi Thar', 'Yangon', 'No.39, Htoo st', 'Shwe Pyi Thar', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(47, 114, 2, '2024-06-02', 'Semester 2', 'YKPT-22906', 'Hein Htet Aung', 'male', 9664324567, 'hha@gmail.com', 9996634675, 'U Htet', 'Father', 9664335678, 'No.86, rose st', 'Shwe Bo', 'Sagaing', 'No.86, rose st', 'Shwe Bo', 'Sagaing', '2024-09-02 17:30:00', '2024', 2),
(48, 123, 2, '2024-06-02', 'Semester 2', 'YKPT-22941', 'Aung Ko Htet', 'male', 9666125546, 'akh@gmail.com', 9664558934, 'Daw Htet', 'Father', 9663566884, 'No.26, Htoo st', 'Mandalay', 'Mandalay', 'No.26, Htoo st', 'Mandalay', 'Mandalay', '2024-09-02 17:30:00', '2024', 2),
(49, 115, 2, '2024-06-02', 'Semester 8', 'YKPT-21447', 'Swan Yee Paing', 'male', 9444522343, 'swp@gmail.com', 9788854363, 'U Paing', 'Father', 9557755784, 'No.47, honey st', 'Shwe Pyi Thar', 'Yangon', 'No.47, honey st', 'Shwe Pyi Thar', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(50, 124, 2, '2024-06-02', 'Semester 2', 'YKPT-22999', 'Myat Noe Khin', 'female', 9444557652, 'mnk@gmail.com', 9444555223, 'U Khin', 'Father', 9666429987, 'No.38, 3rd st', 'Taungdwingyi', 'Magway', 'No.38, 3rd st', 'Taungdwingyi', 'Magway', '2024-09-02 17:30:00', '2024', 2),
(51, 113, 2, '2024-06-02', 'Semester 2', 'YKPT-22857', 'Hnin Wut Yee Cho', 'female', 9664433245, 'hwyc@gmail.com', 9662445805, 'Daw Cho', 'Mother', 9666435678, 'No.5, Cho Oo st', 'Chauk', 'Magway', 'No.5, Cho Oo st', 'Chauk', 'Magway', '2024-09-02 17:30:00', '2024', 2),
(52, 135, 2, '2024-06-02', 'Semester 2', 'YKPT-22944', 'Mary Naw Naw', 'female', 9444666000, 'mnn@gmail.com', 9666443568, 'Daw Naw', 'Mother', 9446673448, 'No.88, Kyu st', 'Bago', 'Bago', 'No.88, Kyu st', 'Bago', 'Bago', '2024-09-02 17:30:00', '2024', 2),
(53, 121, 2, '2024-06-01', 'Semester 2', 'YKPT-22937', 'Khaing Su Thin', 'female', 9666623578, 'kst@gmail.com', 9788845753, 'Daw Hnin', 'Mother', 9664400762, 'No.504, Owl st', 'Loikaw', 'Kayar', 'No.504, Owl st', 'Loikaw', 'Kayar', '2024-09-02 17:30:00', '2024', 2),
(54, 132, 2, '2024-06-02', 'Semester 2', 'YKPT-22801', 'La Won Thet Htal', 'female', 9447768842, 'lwth@gmail.com', 9944566776, 'Daw La Won', 'Mother', 9788456477, 'No.784, 19 st', 'La Thar', 'Yangon', 'No.784, 19 st', 'La Thar', 'Yangon', '2024-09-02 17:30:00', '2024', 2),
(55, 202, 3, '2024-06-02', 'Semester 10', 'YKPT-21400', 'Wai Yan Aung', 'male', 9665433886, 'wya@gmail.com', 9653566547, 'U Aung', 'Father', 9666742256, 'No.66, Naung st', 'Bago', 'Bago', 'No.66, Naung st', 'Bago', 'Bago', '2024-09-02 17:30:00', '2024', 2);

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
(7, 1, 'zzz@gmail.com', '2024-08-17 06:01:34'),
(8, 1, 'zzz@gmail.com', '0000-00-00 00:00:00'),
(9, 6, 'enp@gmail.com', '0000-00-00 00:00:00'),
(10, 7, 'heew@gmail.com', '0000-00-00 00:00:00'),
(11, 5, 'nmt@gmail.com', '0000-00-00 00:00:00'),
(12, 8, 'tzst@gmail.com', '0000-00-00 00:00:00'),
(13, 2, 'kgkg@gmail.com', '0000-00-00 00:00:00'),
(14, 3, 'pps@gmail.com', '0000-00-00 00:00:00'),
(15, 9, 'bmk@gmail.com', '0000-00-00 00:00:00'),
(16, 4, 'osk@gmail.com', '0000-00-00 00:00:00'),
(17, 10, 'tps@gmail.com', '0000-00-00 00:00:00'),
(18, 14, 'kwy@gmail.com', '0000-00-00 00:00:00'),
(19, 25, 'hyb@gmail.com', '0000-00-00 00:00:00'),
(20, 26, 'hes@gmail.com', '0000-00-00 00:00:00'),
(21, 24, 'smt@gmail.com', '0000-00-00 00:00:00'),
(22, 25, 'hhz@gmail.com', '0000-00-00 00:00:00'),
(23, 26, 'lha@gmail.com', '0000-00-00 00:00:00'),
(24, 27, 'acm@gmail.com', '0000-00-00 00:00:00'),
(25, 28, 'kzt@gmail.com', '0000-00-00 00:00:00'),
(26, 29, 'bpst@gmail.com', '0000-00-00 00:00:00'),
(27, 44, 'slh@gmail.com', '0000-00-00 00:00:00'),
(28, 1, 'zzz@gmail.com', '0000-00-00 00:00:00');

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
(1, 'YKPT-22000', 'Zin Zin Zaw', 'female', 912345678, 'zzz@gmail.com', 'Zzz12345678.', '2024-08-16 02:22:36', NULL, NULL),
(2, 'YKPT-22521', 'Kaung Min Myat', 'male', 912345678, 'kgkg@gmail.com', 'Zzz12345678.', '2024-08-16 12:19:20', NULL, NULL),
(3, 'YKPT-22488', 'Pyae Phyoe San', 'male', 912345678, 'pps@gmail.com', 'Zzz12345678.', '2024-08-16 13:56:44', NULL, NULL),
(4, 'YKPT-22450', 'Oak Soe Khant', 'male', 912345678, 'osk@gmail.com', 'Zzz12345678.', '2024-08-16 13:59:40', NULL, NULL),
(5, 'YKPT-22484', 'Nadi Myint Than', 'female', 912345678, 'nmt@gmail.com', 'Zzz12345678.', '2024-08-16 14:00:34', NULL, NULL),
(6, 'YKPT-22483', 'Ei Ngone Phoo', 'female', 912345678, 'enp@gmail.com', 'Zzz12345678.', '2024-08-16 14:01:32', NULL, NULL),
(7, 'YKPT-22476', 'Hnin Ei Ei Win', 'female', 912345678, 'heew@gmail.com', 'Zzz12345678.', '2024-08-16 14:02:28', NULL, NULL),
(8, 'YKPT-22455', 'Thinzar Soe Thein', 'female', 912345678, 'tzst@gmail.com', 'Zzz12345678.', '2024-08-16 14:03:20', NULL, NULL),
(9, 'YKPT-22555', 'Bhone Min Khant', 'male', 912345678, 'bmk@gmail.com', 'Zzz12345678.', '2024-08-16 14:05:30', NULL, NULL),
(10, 'YKPT-22231', 'Thet Paing Soe', 'male', 912345678, 'tps@gmail.com', 'Zzz12345678.', '2024-08-16 14:04:23', NULL, NULL),
(11, 'YKPT-22651', 'Kyaw Wai Yan', 'male', 912345123, 'kwy@gmail.com', 'Zzz12345678.', '2024-09-02 18:18:57', NULL, NULL),
(12, 'YKPT-22680', 'Myo Khant Thu', 'male', 9444221267, 'mkt@gmail.com', 'Zzz12345678.', '2024-09-02 18:22:50', NULL, NULL),
(13, 'YKPT-22514', 'Chan Myae Thu Thu Kyaw', 'female', 9766233898, 'cmttk@gmail.com', 'Zzz12345678.', '2024-09-02 18:30:55', NULL, NULL),
(14, 'YKPT-22538', 'Wati Khin', 'female', 9883623253, 'wtk@gmail.com', 'Zzz12345678.', '2024-09-02 18:34:46', NULL, NULL),
(15, 'YKPT-22629', 'Mya Thin Kyu', 'female', 9944722684, 'mtk@gmail.com', 'Zzz12345678.', '2024-09-02 18:42:10', NULL, NULL),
(16, 'YKPT-22678', 'Moe Paing Phyo', 'male', 9897437521, 'mpp@gmail.com', 'Zzz12345678.', '2024-09-02 18:56:39', NULL, NULL),
(17, 'YKPT-22670', 'Myo Thant', 'male', 9445232555, 'mt@gmail.com', 'Zzz12345678.', '2024-09-02 19:00:47', NULL, NULL),
(18, 'YKPT-22610', 'Thein Htet San', 'male', 9993234576, 'ths@gmail.com', 'Zzz12345678.', '2024-09-02 19:03:57', NULL, NULL),
(19, 'YKPT-22660', 'Htoo Aung Lin', 'male', 9988573642, 'hal@gmail.com', 'Zzz12345678.', '2024-09-02 19:07:05', NULL, NULL),
(20, 'YKPT-22644', 'Nadi Lin Aung', 'female', 9667446334, 'nla@gmail.com', 'Zzz12345678.', '2024-09-02 19:11:50', NULL, NULL),
(21, 'YKPT-22782', 'Phyu Phyu Thant Khaine', 'female', 9446765632, 'pptk@gmail.com', 'Zzz12345678.', '2024-09-02 19:14:38', NULL, NULL),
(22, 'YKPT-22122', 'Hlaine Yupar Bo', 'female', 9788873555, 'hyb@gmail.com', 'Zzz12345678.', '2024-09-03 03:24:53', NULL, NULL),
(23, 'YKPT-22111', 'Hnin Ei Shwe Yi', 'female', 9887547658, 'hes@gmail.com', 'Zzz12345678.', '2024-09-03 03:29:26', NULL, NULL),
(24, 'YKPT-22300', 'Sit Min Thar', 'male', 9776554653, 'smt@gmail.com', 'Zzz12345678.', '2024-09-03 03:36:04', NULL, NULL),
(25, 'YKPT-22288', 'Htoo Htoo Zaw', 'male', 9667877833, 'hhz@gmail.com', 'Zzz12345678.', '2024-09-03 03:36:04', NULL, NULL),
(26, 'YKPT-22392', 'Lin Htet Aung', 'male', 9886533234, 'lha@gmail.com', 'Zzz12345678.', '2024-09-03 03:36:04', NULL, NULL),
(27, 'YKPT-22433', 'Aye Chan Moe', 'female', 9766783356, 'acm@gmail.com', 'Zzz12345678.', '2024-09-03 03:36:04', NULL, NULL),
(28, 'YKPT-22551', 'Khaing Zin Thawl', 'female', 9886547544, 'kzt@gmail.com', 'Zzz12345678.', '2024-09-03 03:36:04', NULL, NULL),
(29, 'YKPT-22799', 'Bhnoe Pyae Si Thu', 'male', 9996432542, 'bpst@gmail.com', 'Zzz12345678.', '2024-09-03 03:47:43', NULL, NULL),
(30, 'YKPT-22955', 'Aung Bhone Khant', 'male', 9788512446, 'abk@gmail.com', 'Zzz12345678.', '2024-09-03 05:21:44', NULL, NULL),
(31, 'YKPT-22931', 'Pyae Sone Phyo', 'male', 9994556321, 'psp@gmail.com', 'Zzz12345678.', '2024-09-03 05:25:02', NULL, NULL),
(32, 'YKPT-22894', 'Kay Zin Htet', 'female', 9788566742, 'kzh@gmail.com', 'Zzz12345678.', '2024-09-03 05:33:52', NULL, NULL),
(33, 'YKPT-22994', 'Khin Moh Moh Thu', 'female', 9444221266, 'kmmt@gmail.com', 'Zzz12345678.', '2024-09-03 05:38:01', NULL, NULL),
(34, 'YKPT-22859', 'John May Mar Myint', 'female', 9442744636, 'jmmm@gmail.com', 'Zzz12345678.', '2024-09-03 05:41:25', NULL, NULL),
(35, 'YKPT-22881', 'Thant Mg Mg', 'male', 9999445321, 'tmm@gmail.com', 'Zzz12345678.', '2024-09-03 05:56:10', NULL, NULL),
(36, 'YKPT-22001', 'Lynn Thuta', 'male', 9777333444, 'ltt@gmail.com', 'Zzz12345678.', '2024-09-03 06:01:04', NULL, NULL),
(37, 'YKPT-22011', 'Kaung Pyae Kyaw', 'male', 9666777333, 'kpk@gmail.com', 'Zzz12345678.', '2024-09-03 06:04:33', NULL, NULL),
(38, 'YKPT-21510', 'Ye Min Aung', 'male', 9888445555, 'yma@gmail.com', 'Zzz12345678.', '2024-09-03 06:10:41', NULL, NULL),
(39, 'YKPT-21120', 'Wai Yan Kyaw', 'male', 9666555111, 'wyk@gmail.com', 'Zzz12345678.', '2024-09-03 06:24:18', NULL, NULL),
(40, 'YKPT-21189', 'Yoon Lae Shwe Yi', 'female', 9666644322, 'ylsy@gmail.com', 'Zzz12345678.', '2024-09-03 06:29:22', NULL, NULL),
(41, 'YKPT-21444', 'Khaing Zar Thawl Hmue', 'female', 9444455778, 'kztm@gmail.com', 'Zzz12345678.', '2024-09-03 06:36:15', NULL, NULL),
(42, 'YKPT-22133', 'Kyi Sin Lin', 'female', 9666445534, 'ksl@gmail.com', 'Zzz12345678.', '2024-09-03 06:41:05', NULL, NULL),
(43, 'YKPT-21045', 'San Yu', 'female', 9667774556, 'sy@gmail.com', 'Zzz12345678.', '2024-09-03 06:52:53', NULL, NULL),
(44, 'YKPT-20034', 'Su Lae Hnin', 'female', 9666443237, 'slh@gmail.com', 'Zzz12345678.', '2024-09-03 06:57:42', NULL, NULL),
(45, 'YKPT-20112', 'Thet Myat Phyu', 'female', 9666111223, 'tmp@gmail.com', 'Zzz12345678.', '2024-09-03 09:21:51', NULL, NULL),
(46, 'YKPT-20110', 'Kaung Pyae Min Thein', 'male', 9666324470, 'kpmt@gmail.com', 'Zzz12345678.', '2024-09-03 09:26:13', NULL, NULL),
(47, 'YKPT-22906', 'Hein Htet Aung', 'male', 9664324567, 'hha@gmail.com', 'Zzz12345678.', '2024-09-03 09:30:59', NULL, NULL),
(48, 'YKPT-22941', 'Aung Ko Htet', 'male', 9666125546, 'akh@gmail.com', 'Zzz12345678.', '2024-09-03 09:38:27', NULL, NULL),
(49, 'YKPT-21447', 'Swan Yee Paing', 'male', 9444522343, 'swp@gmail.com', 'Zzz12345678.', '2024-09-03 09:44:16', NULL, NULL),
(50, 'YKPT-22999', 'Myat Noe Khin', 'female', 9444557652, 'mnk@gmail.com', 'Zzz12345678.', '2024-09-03 09:52:29', NULL, NULL),
(51, 'YKPT-22857', 'Hnin Wut Yee Cho', 'female', 9664433245, 'hwyc@gmail.com', 'Zzz12345678.', '2024-09-03 09:58:17', NULL, NULL),
(52, 'YKPT-22944', 'Mary Naw Naw', 'female', 9444666000, 'mnn@gmail.com', 'Zzz12345678.', '2024-09-03 10:01:43', NULL, NULL),
(53, 'YKPT-22937', 'Khaing Su Thin', 'female', 9666623578, 'kst@gmail.com', 'Zzz12345678.', '2024-09-03 10:04:54', NULL, NULL),
(54, 'YKPT-22801', 'La Won Thet Htal', 'female', 9447768842, 'lwth@gmail.com', 'Zzz12345678.', '2024-09-03 10:12:05', NULL, NULL),
(55, 'YKPT-21400', 'Wai Yan Aung', 'male', 9665433886, 'wya@gmail.com', 'Zzz12345678.', '2024-09-03 12:35:41', NULL, NULL),
(56, 'YKPT-22250', 'Hsan Min Thaw', 'male', 9668884325, 'hmt@gmail.com', 'Zzz12345678.', '2024-09-03 12:41:27', NULL, NULL),
(57, 'YKPT-21000', 'Zan Ye Sitt', 'male', 9666235688, 'zys@gmail.com', 'Zzz12345678.', '2024-09-03 12:42:53', NULL, NULL),
(58, 'YKPT-22020', 'Mya Myint Zu Maung', 'female', 9668843884, 'mmzm@gmail.com', 'Zzz12345678.', '2024-09-03 12:45:02', NULL, NULL);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `userregistration`
--
ALTER TABLE `userregistration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
