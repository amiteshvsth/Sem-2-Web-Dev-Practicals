-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 06:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `rail_info`
--

CREATE TABLE `rail_info` (
  `Sr_no` int(10) NOT NULL,
  `T_no` varchar(50) NOT NULL,
  `T_code` varchar(50) NOT NULL,
  `T_name` varchar(50) NOT NULL,
  `T_type` varchar(50) NOT NULL,
  `T_scity` varchar(50) NOT NULL,
  `T_dcity` varchar(50) NOT NULL,
  `T_flag` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rail_info`
--

INSERT INTO `rail_info` (`Sr_no`, `T_no`, `T_code`, `T_name`, `T_type`, `T_scity`, `T_dcity`, `T_flag`) VALUES
(1, '19015', 'mmct/pbr', 'Saurashtra Exp', 'Express', 'mumbai', 'porbandar', 'D'),
(2, '12905', 'pbr/cal', 'Hawra express', 'Express', 'porbandar', 'hawra', 'w'),
(3, '59206', 'pbr/knls', 'kanalus passenger', 'local', 'porbandar', 'kanalus', 'd'),
(4, '19413', 'adi/cal', 'Kolkata Weekly Express', 'Express', 'ahmedabad', 'Kolkata', 'w');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rail_info`
--
ALTER TABLE `rail_info`
  ADD PRIMARY KEY (`Sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rail_info`
--
ALTER TABLE `rail_info`
  MODIFY `Sr_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
