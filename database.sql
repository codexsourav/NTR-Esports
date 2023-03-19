-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 19, 2023 at 08:15 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `soloteam`
--

CREATE TABLE `soloteam` (
  `id` int(225) NOT NULL,
  `player` varchar(225) NOT NULL,
  `gameid` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `pincode` varchar(225) NOT NULL,
  `state` varchar(225) NOT NULL,
  `upi` varchar(225) NOT NULL,
  `joindate` varchar(225) NOT NULL,
  `turnamentid` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teamdata`
--

CREATE TABLE `teamdata` (
  `id` int(225) NOT NULL,
  `teamname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(222) NOT NULL,
  `city` varchar(222) NOT NULL,
  `captain` varchar(222) NOT NULL,
  `player2` varchar(222) NOT NULL,
  `player3` varchar(222) NOT NULL,
  `player4` varchar(222) NOT NULL,
  `pincode` varchar(222) NOT NULL,
  `state` varchar(222) NOT NULL,
  `teamid` varchar(225) NOT NULL,
  `submitdata` varchar(222) NOT NULL,
  `upi` varchar(225) NOT NULL,
  `turnamentid` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tonaments`
--

CREATE TABLE `tonaments` (
  `id` int(11) NOT NULL,
  `datetime` varchar(225) NOT NULL,
  `pricepoll` varchar(225) NOT NULL,
  `map` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL DEFAULT 'solo',
  `version` varchar(225) NOT NULL DEFAULT 'TPP',
  `clicks` varchar(225) NOT NULL DEFAULT '0',
  `pay` varchar(225) NOT NULL,
  `paymentlink` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tonaments`
--

INSERT INTO `tonaments` (`id`, `datetime`, `pricepoll`, `map`, `type`, `version`, `clicks`, `pay`, `paymentlink`) VALUES
(1, '3 MAR - 12:40 PM', '100', 'MAPName', 'solo', 'TPP', '99', '10', 'http://localhost/projects/work/join/solo.php?id=1'),
(2, '3 MAR - 12:40 PM', '100', 'MAPName', 'solo', 'TPP', '4', '10', 'http://localhost/projects/work/join/solo.php?id=2'),
(3, '3 MAR - 12:40 PM', '100', 'MAPName', 'solo', 'TPP', '100', '10', 'http://localhost/projects/work/join/solo.php?id=3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soloteam`
--
ALTER TABLE `soloteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teamdata`
--
ALTER TABLE `teamdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tonaments`
--
ALTER TABLE `tonaments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `soloteam`
--
ALTER TABLE `soloteam`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teamdata`
--
ALTER TABLE `teamdata`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tonaments`
--
ALTER TABLE `tonaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
