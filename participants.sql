-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2018 at 11:20 AM
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
-- Database: `funrun`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `num` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(3) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `contactnum` int(20) DEFAULT NULL,
  `shirtsize` varchar(1) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`num`, `firstname`, `lastname`, `address`, `email`, `birthdate`, `age`, `category`, `gender`, `contactnum`, `shirtsize`, `timestamp`) VALUES
(22, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(23, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(24, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(25, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(26, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(27, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(28, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(29, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(30, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(31, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(32, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(33, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(34, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(35, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13'),
(36, 'test1', 'test1', 'test1', 'test1@a.c', '1990-03-12', 28, 'seniors', 'm', 12, 'm', '2018-06-07 09:15:13'),
(37, 'test2', 'test2', 'test2', 'test2@a.x', '2015-02-12', 3, 'juniors', 'f', 234, 'x', '2018-06-07 09:15:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
