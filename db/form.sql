-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 09:23 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `company` varchar(200) NOT NULL,
  `productname` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `descri` varchar(200) NOT NULL,
  `cat` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `compfile` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `fullname`, `company`, `productname`, `price`, `descri`, `cat`, `phone`, `email`, `compfile`, `status`) VALUES
(10, 'nura', 'golden silver', 'yoghot', '54000', 'hgkj', 'Cars', '08038289398', 'nura@gmail.com', '30774f1428dc68d621b8d4cbe0ae2f51.jpg', 'Accept'),
(11, 'nura', 'anoconda', 'benza', '20000000', 'it sample', 'Cars', '08038289398', 'nura@gmail.com', 'auto-motors1.png', 'Cancel'),
(12, 'nura', 'anoconda', 'benza', '30000000', 'it sample', 'Cars', '08038289398', 'nura@gmail.com', 'Abuja-car8.png', 'pending'),
(13, 'nura', 'golden silver', 'pizza', '20000000', 'yes', 'Cars', '8708765657670', 'bala@gmail.com', 'Abuja-car6.png', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `catego`
--

CREATE TABLE `catego` (
  `id` int(11) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `compfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catego`
--

INSERT INTO `catego` (`id`, `catname`, `compfile`) VALUES
(1, 'Others', 'flexible-pc.jpg'),
(2, 'Gadgets', ''),
(3, 'Cars', ''),
(4, 'Furnitures', ''),
(5, 'Clothing', ''),
(6, 'Utensils', 'kitchen-utensils.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fullname`, `phone`, `email`, `des`) VALUES
(1, 'nura', '08038289398', 'nura@gmail.com', '$kjhghjk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catego`
--
ALTER TABLE `catego`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `catego`
--
ALTER TABLE `catego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
