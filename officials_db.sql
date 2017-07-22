-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2017 at 12:30 PM
-- Server version: 10.0.29-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `officials_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `official_tbl`
--

CREATE TABLE `official_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `age` int(11) NOT NULL,
  `region` varchar(45) NOT NULL,
  `province` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `party` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `official_tbl`
--

INSERT INTO `official_tbl` (`id`, `name`, `age`, `region`, `province`, `city`, `position`, `party`) VALUES
(1, 'John Doe', 56, 'NCR', 'Cabanatuan', 'Quezon City', 'Mayor', 'Birthday Party'),
(2, 'Maria Powell', 43, 'NCR', 'Batangas City', 'Quezon City', 'Governor', 'Liberal Party'),
(3, 'Blake Bosnav', 26, 'NCR', 'Bulacan', 'Bulacan City', 'Mayor', 'Liberal Party'),
(8, 'Jake Johnson', 32, '2', 'Bataan', 'Quezon City', 'Governor', 'Liberal Party'),
(12, 'Panchito Policarpio', 44, 'NCR', 'Palawan', 'Quezon City', 'Mayor', 'Bayanihan Party');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `official_tbl`
--
ALTER TABLE `official_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `official_tbl`
--
ALTER TABLE `official_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
