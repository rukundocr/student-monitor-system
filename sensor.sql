-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2016 at 01:37 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sensor`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
 `key_num` int(11) NOT NULL,
 `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
 `sensor` varchar(11) NOT NULL
  
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`sensor2`, `key_num`, `time`, `sensor1`, `sensor`) VALUES
('', 688, '2016-10-03 15:19:43', '', '$0009004565'),
('', 689, '2016-10-03 15:19:53', '', '$0009007479'),
('', 690, '2016-10-03 15:20:03', '', '$0008999877'),
('', 691, '2016-10-03 15:22:51', '', '$0008999877'),
('', 692, '2016-10-03 15:23:01', '', '$0008999877'),
('', 693, '2016-10-12 06:10:43', '', '$0008999877'),
('', 694, '2016-10-12 06:10:53', '', '$0009007479'),
('', 695, '2016-10-12 06:11:03', '', '$0009004565');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`key_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `key_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=705;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
