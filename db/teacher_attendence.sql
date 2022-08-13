-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 02:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(5, 'noman ishaq', '2022-08-13 14:53:54', ''),
(6, 'jaison', '2022-08-13 14:53:54', 'P');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teacher_attendence`
--
ALTER TABLE `teacher_attendence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
