-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2017 at 09:16 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `recommend_details`
--

CREATE TABLE `recommend_details` (
  `uid` int(5) NOT NULL,
  `degree` varchar(60) DEFAULT NULL,
  `city` varchar(60) DEFAULT NULL,
  `hsc_rank` int(5) DEFAULT NULL,
  `grad_rank` int(5) DEFAULT NULL,
  `gate_rank` int(5) DEFAULT NULL,
  `cat_rank` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recommend_details`
--

INSERT INTO `recommend_details` (`uid`, `degree`, `city`, `hsc_rank`, `grad_rank`, `gate_rank`, `cat_rank`) VALUES
(1, 'mtech', 'kolkata', 3, 2, 3, 0),
(2, 'mtech', 'pune', 3, 2, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recommend_details`
--
ALTER TABLE `recommend_details`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recommend_details`
--
ALTER TABLE `recommend_details`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
