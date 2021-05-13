-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 03:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donatefood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor_info`
--

CREATE TABLE `donor_info` (
  `id` int(11) NOT NULL,
  `fullname` varchar(25) NOT NULL,
  `contact` varchar(13) NOT NULL,
  `address` varchar(100) NOT NULL,
  `donation_info` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_info`
--

INSERT INTO `donor_info` (`id`, `fullname`, `contact`, `address`, `donation_info`) VALUES
(5, 'sudip', '1234534321', 'fs.kfnsdgf', '100kg Rice'),
(6, 'adil', '4675685785', 'sadljfnsidbfdsanf', '300Kg sugar'),
(7, 'adil', '2345346456', 'navsario', '200kg Rice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor_info`
--
ALTER TABLE `donor_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor_info`
--
ALTER TABLE `donor_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
