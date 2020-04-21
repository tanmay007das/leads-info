-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 10:54 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `leadsdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` int(20) NOT NULL,
  `Companyname` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `url` varchar(60) NOT NULL,
  `issues` varchar(1000) NOT NULL,
  `contacted` varchar(20) NOT NULL,
  `converted` varchar(15) NOT NULL,
  `notes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leads`
--

INSERT INTO `leads` (`id`, `Companyname`, `phone`, `email`, `url`, `issues`, `contacted`, `converted`, `notes`) VALUES
(66, 'Umbrella corp', '29292727272', 'digitalmarketertanmay@gmail.com', 'https://bulletproofglass.biz', '', 'Contacted', 'Converted', ''),
(67, 'Atlas Ltd', '17188323604', 'gargimehtadear@gmail.com', 'https://wireglass.us', '', 'Not Contacted', 'Not Converted', ''),
(72, 'Reliance digital ltd', '922737622662', 'dastanmay371@gmail.com', 'www.reliancedigital.co.in', '', 'Not Contacted', 'Not Converted', 'We will contact them soon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
