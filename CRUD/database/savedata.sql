-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 01:03 PM
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
-- Database: `personal projects`
--

-- --------------------------------------------------------

--
-- Table structure for table `savedata`
--

CREATE TABLE `savedata` (
  `id` int(250) NOT NULL,
  `fname` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `course_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `savedata`
--

INSERT INTO `savedata` (`id`, `fname`, `course`, `course_id`) VALUES
(4, 'Suha', 'Medical', 1),
(6, 'Sabahat Zainab', 'PHP Developer', 1),
(7, 'Konain', 'Medical', 8),
(10, 'Konain', 'Medical', 666),
(11, 'home', 'java', 777);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `savedata`
--
ALTER TABLE `savedata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `savedata`
--
ALTER TABLE `savedata`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
