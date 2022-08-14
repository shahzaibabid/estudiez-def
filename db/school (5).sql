-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 10:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `Date` varchar(255) NOT NULL,
  `Class_id` int(11) NOT NULL,
  `User_id` int(11) NOT NULL,
  `attendance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `Date`, `Class_id`, `User_id`, `attendance`) VALUES
(1, '08/11/2022 03:52:22 pm', 1, 1, 'P'),
(2, '08/11/2022 03:52:22 pm', 1, 3, 'A'),
(3, '08/11/2022 03:53:32 pm', 2, 2, 'L'),
(4, '08/11/2022 03:53:56 pm', 1, 1, 'P'),
(5, '08/11/2022 03:53:56 pm', 1, 3, 'L'),
(6, '08/11/2022 04:32:22 pm', 1, 1, 'A'),
(7, '08/11/2022 04:32:22 pm', 1, 3, 'P'),
(8, '08/14/2022 07:59:45 pm', 2, 2, 'L'),
(9, '08/14/2022 08:01:11 pm', 1, 3, 'L'),
(10, '08/14/2022 08:01:11 pm', 1, 4, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `Year` int(11) NOT NULL,
  `Class_name` varchar(255) NOT NULL,
  `Teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `Year`, `Class_name`, `Teacher_id`) VALUES
(1, 2022, 'VI', 1),
(2, 2022, 'VII', 1),
(3, 2022, 'VIII', 2),
(4, 2022, 'IX', 3),
(5, 2022, 'X', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `Name`, `Email`, `Subject`, `message`, `phone`) VALUES
(3, 'Talha', 'talha@gmail.com', 'This is subject', 'This is my message', '2147483647'),
(4, 'Abbas', 'abbas@gmail.com', 'subject', 'This is message', '0332323568'),
(5, 'Tahir', 'tahir@gmail.com', 'This is subject', 'This is my dummy message', '03343427289');

-- --------------------------------------------------------

--
-- Table structure for table `english`
--

CREATE TABLE `english` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `english`
--

INSERT INTO `english` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(2, '2022-08-13', 1, 3, 20, 10, 'Pass'),
(3, '2022-08-13', 2, 2, 20, 7, 'Fail'),
(4, '2022-08-13', 1, 1, 20, 12, 'Pass'),
(5, '2022-08-13', 1, 3, 20, 10, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `eng` int(11) NOT NULL,
  `urdu` int(11) NOT NULL,
  `sindhi` int(11) NOT NULL,
  `p_studies` int(11) NOT NULL,
  `sci` int(11) NOT NULL,
  `islamiat_rel` int(11) NOT NULL,
  `math` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `percentage` float NOT NULL,
  `grade` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `remarks` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `class_id`, `user_id`, `eng`, `urdu`, `sindhi`, `p_studies`, `sci`, `islamiat_rel`, `math`, `total`, `obt`, `percentage`, `grade`, `status`, `remarks`) VALUES
(2, 1, 3, 95, 85, 84, 75, 76, 73, 82, 700, 570, 81.43, 'A+', 'Pass', 'Good Work'),
(3, 2, 2, 35, 22, 10, 28, 32, 46, 51, 700, 224, 32, 'F', 'Fail', 'Try a little harder '),
(4, 1, 4, 89, 79, 85, 65, 85, 65, 65, 700, 533, 76.14, 'A', 'Pass', 'Good Job');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `opinion` varchar(255) NOT NULL,
  `exp` varchar(255) NOT NULL,
  `suggestion` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `Name`, `Email`, `opinion`, `exp`, `suggestion`) VALUES
(1, 'khan', 'khan@gmail.com', 'good', 'good', 'dummy text');

-- --------------------------------------------------------

--
-- Table structure for table `islamiat_rel`
--

CREATE TABLE `islamiat_rel` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `islamiat_rel`
--

INSERT INTO `islamiat_rel` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(1, '2022-08-13', 1, 1, 20, 10, 'Pass'),
(2, '2022-08-13', 1, 3, 20, 9, 'Pass'),
(3, '2022-08-13', 2, 2, 20, 13, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `math`
--

CREATE TABLE `math` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `math`
--

INSERT INTO `math` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(1, '2022-08-13', 1, 1, 20, 15, 'Pass'),
(2, '2022-08-13', 1, 3, 20, 16, 'Pass'),
(3, '2022-08-13', 2, 2, 20, 18, 'Pass'),
(4, '2022-08-14', 1, 1, 20, 6, 'Fail'),
(5, '2022-08-14', 1, 3, 20, 9, 'Pass'),
(6, '2022-08-14', 1, 1, 20, 6, 'Fail'),
(7, '2022-08-14', 1, 3, 20, 9, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `id` int(11) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Roll` int(11) NOT NULL DEFAULT 2,
  `student_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`id`, `F_name`, `L_name`, `Email`, `Contact`, `Password`, `Profile`, `Roll`, `student_ID`) VALUES
(1, '', '', 'parent@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `p_studies`
--

CREATE TABLE `p_studies` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `p_studies`
--

INSERT INTO `p_studies` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(1, '2022-08-13', 1, 1, 20, 6, 'Fail'),
(2, '2022-08-13', 1, 3, 20, 8, 'Pass'),
(3, '2022-08-13', 2, 2, 20, 3, 'Fail');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(1, '2022-08-13', 1, 1, 20, 16, 'Pass'),
(2, '2022-08-13', 1, 3, 20, 14, 'Pass'),
(3, '2022-08-13', 2, 2, 20, 18, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `sindhi`
--

CREATE TABLE `sindhi` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sindhi`
--

INSERT INTO `sindhi` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(1, '2022-08-13', 1, 1, 20, 6, 'Fail'),
(2, '2022-08-13', 1, 3, 20, 4, 'Fail'),
(3, '2022-08-13', 2, 2, 20, 8, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Roll` int(11) NOT NULL DEFAULT 1,
  `Subject` varchar(225) NOT NULL,
  `address` longtext NOT NULL,
  `gender` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `Email`, `Contact`, `Password`, `Profile`, `Roll`, `Subject`, `address`, `gender`) VALUES
(3, 'noman ishaq', 'noman@gmail.com', '03345785792', '202cb962ac59075b964b07152d234b70', '5.jpg', 1, 'Computer', 'aptech', 'Male'),
(5, 'Toba', 'toba@gmail.com', '035734786752', '202cb962ac59075b964b07152d234b70', '3.jpg', 1, 'urdu', 'bahria', 'Female'),
(6, 'Ali', 'ali@gmail.com', '03343427289', '202cb962ac59075b964b07152d234b70', '2.jpg', 1, 'Science', 'DHA', 'Male'),
(7, 'Hina', 'hina@gmail.com', '03343427289', '202cb962ac59075b964b07152d234b70', '1.jpg', 1, 'Sindhi', 'Gulberg', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_attendence`
--

CREATE TABLE `teacher_attendence` (
  `id` int(11) NOT NULL,
  `Teacher_name` varchar(225) NOT NULL,
  `Date_time` datetime NOT NULL DEFAULT current_timestamp(),
  `attendence` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_attendence`
--

INSERT INTO `teacher_attendence` (`id`, `Teacher_name`, `Date_time`, `attendence`) VALUES
(1, 'noman ishaq', '2022-08-13 14:47:54', 'A'),
(2, 'noman ishaq', '2022-08-13 14:48:51', 'P'),
(3, 'noman ishaq', '2022-08-13 14:50:52', 'L'),
(4, 'noman ishaq', '2022-08-13 14:51:24', 'A'),
(5, 'noman ishaq', '2022-08-13 14:53:54', 'P'),
(6, 'jaison', '2022-08-13 14:53:54', 'P');

-- --------------------------------------------------------

--
-- Table structure for table `timetable6`
--

CREATE TABLE `timetable6` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `tues` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thurs` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable6`
--

INSERT INTO `timetable6` (`id`, `time`, `mon`, `tues`, `wed`, `thurs`, `fri`, `sat`) VALUES
(1, '8:00-8:30', 'English', 'P-studies', 'English', 'Science', 'Math', 'Math'),
(2, '8:30-9:00', 'English', 'Urdu', 'Science', 'English', 'English', ''),
(3, '9:00-9:30', 'Urdu', 'Sindhi', 'Sindhi', 'Islamiat/Religion', 'Science', ''),
(4, '9:30-10:30', 'Math', 'Islamiat/Religion', 'Urdu', 'Urdu', 'Sindhi', ''),
(5, '10:30-11:00', 'B', 'R', 'E', 'A', 'K', 'Science'),
(6, '11:00-11:30', 'Science', 'Math', 'Math', 'Math', 'Urdu', ''),
(7, '11:30-12:00', 'P-studies', 'English', 'English', 'Sindhi', 'Science', ''),
(8, '12:00-12:30', 'Sindhi', 'Science', 'Islamiat/Religion', 'English', 'Math', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable7`
--

CREATE TABLE `timetable7` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `tues` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thurs` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable7`
--

INSERT INTO `timetable7` (`id`, `time`, `mon`, `tues`, `wed`, `thurs`, `fri`, `sat`) VALUES
(1, '8:00-3:30', 'Urdu', 'Urdu', 'English', 'Science', 'Math', ''),
(2, '8:30-9:00', 'English', 'Urdu', 'Science', 'English', 'English', ''),
(3, '9:00-9:30', 'Urdu', 'Sindhi', 'Sindhi', 'Islamiat/Religion', 'Science', 'English'),
(4, '9:30-10:30', 'Math', 'Islamiat/Religion', 'Urdu', 'Urdu', 'Sindhi', ''),
(5, '10:30-11:00', 'B', 'R', 'E', 'A', 'K', ''),
(6, '11:00-11:30', 'Science', 'Math', 'Math', 'Math', 'Urdu', ''),
(7, '11:30-12:00', 'P-studies', 'English', 'English', 'Sindhi', 'Science', ''),
(8, '12:00-12:30', 'Sindhi', 'Science', 'Islamiat/Religion', 'English', 'Math', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable8`
--

CREATE TABLE `timetable8` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `tues` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thurs` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable8`
--

INSERT INTO `timetable8` (`id`, `time`, `mon`, `tues`, `wed`, `thurs`, `fri`, `sat`) VALUES
(1, '8:00-8:30', 'Sindhi', 'Urdu', 'English', 'Science', 'Math', ''),
(2, '8:30-9:00', 'English', 'Urdu', 'Science', 'English', 'English', 'P-studies'),
(3, '9:00-9:30', 'Urdu', 'Sindhi', 'Sindhi', 'Islamiat/Religion', 'Science', ''),
(4, '9:30-10:30', 'Math', 'Islamiat/Religion', 'Urdu', 'Urdu', 'Sindhi', ''),
(5, '10:30-11:00', 'B', 'R', 'E', 'A', 'K', ''),
(6, '11:00-11:30', 'Science', 'Math', 'Math', 'Math', 'Urdu', ''),
(7, '11:30-12:00', 'P-studies', 'English', 'English', 'Sindhi', 'Science', ''),
(8, '12:00-12:30', 'Sindhi', 'Science', 'Islamiat/Religion', 'English', 'Math', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable9`
--

CREATE TABLE `timetable9` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `tues` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thurs` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable9`
--

INSERT INTO `timetable9` (`id`, `time`, `mon`, `tues`, `wed`, `thurs`, `fri`, `sat`) VALUES
(1, '8:00-8:30', 'P-studies', 'Urdu', 'English', 'Science', 'Math', ''),
(2, '8:30-9:00', 'English', 'Urdu', 'Science', 'English', 'English', ''),
(3, '9:00-9:30', 'Urdu', 'Sindhi', 'Sindhi', 'Islamiat/Religion', 'Science', ''),
(4, '9:30-10:30', 'Math', 'Islamiat/Religion', 'Urdu', 'Urdu', 'Sindhi', ''),
(5, '10:30-11:00', 'B', 'R', 'E', 'A', 'K', ''),
(6, '11:00-11:30', 'Science', 'Math', 'Math', 'Math', 'Urdu', 'English'),
(7, '11:30-12:00', 'P-studies', 'English', 'English', 'Sindhi', 'Science', ''),
(8, '12:00-12:30', 'Sindhi', 'Science', 'Islamiat/Religion', 'English', 'Math', '');

-- --------------------------------------------------------

--
-- Table structure for table `timetable10`
--

CREATE TABLE `timetable10` (
  `id` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `mon` varchar(255) NOT NULL,
  `tues` varchar(255) NOT NULL,
  `wed` varchar(255) NOT NULL,
  `thurs` varchar(255) NOT NULL,
  `fri` varchar(255) NOT NULL,
  `sat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `timetable10`
--

INSERT INTO `timetable10` (`id`, `time`, `mon`, `tues`, `wed`, `thurs`, `fri`, `sat`) VALUES
(1, '8:00-8:30', 'Science', 'P-studies', 'English', 'Science', 'Math', 'English'),
(2, '8:30-9:00', 'English', 'Urdu', 'Science', 'English', 'English', ''),
(3, '9:00-9:30', 'Urdu', 'Sindhi', 'Sindhi', 'Islamiat/Religion', 'Science', ''),
(4, '9:30-10:30', 'Math', 'Islamiat/Religion', 'Urdu', 'Urdu', 'Sindhi', ''),
(5, '10:30-11:00', 'B', 'R', 'E', 'A', 'K', ''),
(6, '11:00-11:30', 'Science', 'Math', 'Math', 'Math', 'Urdu', ''),
(7, '11:30-12:00', 'P-studies', 'English', 'English', 'Sindhi', 'Science', ''),
(8, '12:00-12:30', 'Sindhi', 'Science', 'Islamiat/Religion', 'English', 'Math', '');

-- --------------------------------------------------------

--
-- Table structure for table `urdu`
--

CREATE TABLE `urdu` (
  `id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `obt` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `urdu`
--

INSERT INTO `urdu` (`id`, `date`, `class_id`, `user_id`, `total`, `obt`, `status`) VALUES
(1, '2022-08-13', 1, 1, 20, 8, 'Pass'),
(2, '2022-08-13', 1, 3, 20, 9, 'Pass'),
(3, '2022-08-13', 2, 2, 20, 8, 'Pass');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Roll` int(11) NOT NULL DEFAULT 0,
  `Age` int(11) NOT NULL,
  `Class_id` int(11) NOT NULL,
  `father_name` varchar(225) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `student_ID` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `F_name`, `L_name`, `Email`, `Contact`, `Password`, `Profile`, `Roll`, `Age`, `Class_id`, `father_name`, `time`, `student_ID`) VALUES
(2, 'Rayan', 'ahmed', 'Rayan@gmail.com', '033214568', '202cb962ac59075b964b07152d234b70', '333', 0, 18, 0, '', '2022-08-12 16:10:54', ''),
(3, 'simon', 'simon', 'simon@gmail.com', '01234587', '123', '222', 0, 18, 0, '', '2022-08-12 16:10:54', ''),
(4, 'ahmad', 'khan', 'ahmed@gmail.com', '0333303', '123', '1111', 0, 18, 0, 'khan', '2022-08-14 02:22:18', ''),
(8, '', '', 'admin@gmail.com', '', '202cb962ac59075b964b07152d234b70', '', 3, 0, 0, '', '2022-08-14 12:35:50', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `english`
--
ALTER TABLE `english`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `islamiat_rel`
--
ALTER TABLE `islamiat_rel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `math`
--
ALTER TABLE `math`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_studies`
--
ALTER TABLE `p_studies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sindhi`
--
ALTER TABLE `sindhi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable6`
--
ALTER TABLE `timetable6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable7`
--
ALTER TABLE `timetable7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable8`
--
ALTER TABLE `timetable8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable9`
--
ALTER TABLE `timetable9`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timetable10`
--
ALTER TABLE `timetable10`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `urdu`
--
ALTER TABLE `urdu`
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
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `english`
--
ALTER TABLE `english`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `islamiat_rel`
--
ALTER TABLE `islamiat_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `math`
--
ALTER TABLE `math`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `p_studies`
--
ALTER TABLE `p_studies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `science`
--
ALTER TABLE `science`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sindhi`
--
ALTER TABLE `sindhi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `timetable6`
--
ALTER TABLE `timetable6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timetable7`
--
ALTER TABLE `timetable7`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timetable8`
--
ALTER TABLE `timetable8`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timetable9`
--
ALTER TABLE `timetable9`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `timetable10`
--
ALTER TABLE `timetable10`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `urdu`
--
ALTER TABLE `urdu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
