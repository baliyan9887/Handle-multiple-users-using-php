-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2019 at 04:25 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `username`, `password`, `email`, `role`) VALUES
(1, 'gautam', 'gautam', 'gautam@123', 'admin'),
(3, 'Baliyanx', '12345', 'baliyan@123', 'Branch'),
(4, 'Bgmusik', '1234', 'musik@1234', 'Branch'),
(5, 'abhishek', '1234', 'abhishek@321', 'customer'),
(6, 'Bhaskar', '1234', 'bhaskar@123', 'customer'),
(7, 'gatuamx', '1234', 'gautam@3322', 'customer'),
(8, 'amansharma', '1234', 'aman@1334', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
