-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 05:58 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kart_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(249) NOT NULL,
  `email` varchar(249) NOT NULL,
  `pass` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `pass`) VALUES
(1, 'hiteshk764@gmail.com', 'kumarhit@2211');

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(249) NOT NULL,
  `admin_id` varchar(249) NOT NULL,
  `pass` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `admin_id`, `pass`) VALUES
(1, 'hitesh', '123456'),
(2, 'jashan', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `item_data`
--

CREATE TABLE `item_data` (
  `id` int(249) NOT NULL,
  `item` varchar(249) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_data`
--

INSERT INTO `item_data` (`id`, `item`, `price`) VALUES
(1, 'lays', 20),
(2, 'Patty', 20),
(3, 'Samosa', 15),
(4, 'Cold Drinks ', 20),
(5, 'Bingo ', 10),
(6, 'Omelet', 15),
(7, 'Maggi', 20),
(8, 'shakes', 30);

-- --------------------------------------------------------

--
-- Table structure for table `item_ordered`
--

CREATE TABLE `item_ordered` (
  `id` int(249) NOT NULL,
  `item` varchar(249) NOT NULL,
  `price` varchar(249) NOT NULL,
  `roll_no` varchar(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item_ordered`
--

INSERT INTO `item_ordered` (`id`, `item`, `price`, `roll_no`) VALUES
(3, 'lays', '20', '12'),
(5, 'lays', '20', '12'),
(7, 'Patty', '20', '48'),
(10, 'lays', '20', '12'),
(11, 'lays', '20', '12'),
(12, 'lays', '20', '15'),
(13, 'Patty', '20', '15'),
(14, 'Bingo ', '20', '15'),
(15, 'Patty', '20', '15');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(249) NOT NULL,
  `email` varchar(249) NOT NULL,
  `pass` varchar(249) NOT NULL,
  `roll_no` int(249) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `email`, `pass`, `roll_no`) VALUES
(1, 'hiteshk764@gmail.com', 'kumarhit@2211', 0),
(2, 'hiteshk764@gmail.com', 'kumarhit@2211', 0),
(3, 'hiteshk764@gmail.com', '123456', 0),
(4, 'hiteshk764@gmail.com', '123456', 0),
(5, 'hiteshk764@gmail.com', '123456', 12),
(6, 'hiteshk764@gmail.com', '123456', 12),
(7, 'hiteshk8852@gmail.com', '123456', 48),
(8, 'hiteshk764@gmail.com', '123456', 12),
(9, 'hiteshk764@gmail.com', '123456', 12),
(10, 'hiteshk764@gmail.com', '123456', 15),
(11, 'hiteshk764@gmail.com', '123456', 15),
(12, 'hiteshk764@gmail.com', '123456', 15),
(13, 'hiteshk764@gmail.com', '123456', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_data`
--
ALTER TABLE `item_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_ordered`
--
ALTER TABLE `item_ordered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(249) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(249) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `item_data`
--
ALTER TABLE `item_data`
  MODIFY `id` int(249) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `item_ordered`
--
ALTER TABLE `item_ordered`
  MODIFY `id` int(249) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(249) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
