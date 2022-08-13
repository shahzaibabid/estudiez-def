-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 02:55 PM
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
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Profile` varchar(255) NOT NULL,
  `Roll` int(11) NOT NULL,
  `Subject` varchar(225) NOT NULL,
  `address` longtext NOT NULL,
  `gender` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `Email`, `Contact`, `Password`, `Profile`, `Roll`, `Subject`, `address`, `gender`) VALUES
(3, 'noman ishaq', 'noman@gmail.com', '03345785792', '', 'ahmed.jpg', 0, 'Computer', 'aptech', 'Male'),
(5, 'Taba', 'taba@gmail.com', '035734786752', 'Taba123', 'images.jpg', 0, 'urdu', 'bahria', 'Female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
