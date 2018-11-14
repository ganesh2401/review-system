-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2018 at 08:25 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--
CREATE DATABASE IF NOT EXISTS `feedback` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `feedback`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('ganesh.raorane3@gmail.com', 'ganesh2401');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `uid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` text,
  `age` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`uid`, `email`, `password`, `name`, `age`) VALUES
(6, 'abc@gmail.com', '9867657321', 'abc', 22),
(9, 'abw@gmail.com', '123456', 'abw', 22),
(4, 'ganesh.raorane3@gmail.com', '9867657321', 'ganesh raorane', 22),
(8, 'sandesh.raorane@gmail.com', '123456', 'sandesh raorane', 22);

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE `product_info` (
  `pid` int(255) NOT NULL,
  `name` text NOT NULL,
  `type` text NOT NULL,
  `brand` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `cost` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`pid`, `name`, `type`, `brand`, `discription`, `cost`, `image`) VALUES
(1, 'Apple iPhone XR \r\n', 'mobile', 'iphone', 'iPhone XR features the most advanced LCD in a smartphone—a 6.1-inch Liquid Retina display STORAGE 64GB and RAM 1GB', 76900, '7129mZZlfSL._SL1500_.jpg'),
(2, 'Apple iPhone XS Max', 'mobile', 'iphone', 'STORAGE 64GB and RAM 1GB', 109900, 'apple-iphone-x-mqa62hn-a-original-imaeyzyfdzhfckef.jpeg'),
(3, 'Apple iPhone X ', 'mobile', 'iphone', 'Meet the iPhone X - the device that’s so smart ', 101999, 'apple-iphone-xs-max-mt532hn-a-original-imaf97f6y3spd7yz.jpeg'),
(4, 'Canon EOS 1300D DSLR ', 'camera', 'canon', '18 megapixel APS-C CMOS sensor & DIGIC 4+, Wi Fi and NFC ', 25490, 'canon-eos-1300d-dslr-original-imaeh33eyhy9gcgm.jpeg'),
(5, 'Nikon D3400 DSLR Camera Body ', 'camera', 'nicon', 'Nikon D3400 DSLR Camera Body with Dual Lense', 38990, 'digital-camera-d3400-.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `rid` int(255) NOT NULL,
  `pid` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` varchar(300) NOT NULL,
  `authorize` int(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`rid`, `pid`, `name`, `review`, `authorize`, `time`) VALUES
(22, 5, 'ajwdkjad', 'awdbjabdkjad', 1, '2018-11-09 18:30:00'),
(23, 3, 'kjkjbjb', 'kjkukjkjkj', 1, '2018-11-09 18:30:00'),
(24, 1, 'jjyjyj', 'hvjhjhvjhv', 1, '2018-11-09 18:30:00'),
(25, 3, 'ganesh', 'sjkxakhk', 1, '2018-11-09 18:30:00'),
(27, 5, 'laknflk', 'awkdakjw', 1, '2018-11-12 18:30:00'),
(28, 4, 'jdjwabjd', 'awdabwduadua', 1, '2018-11-12 18:30:00'),
(29, 5, 'ganesh', 'good product', 1, '2018-11-12 18:30:00'),
(30, 5, 'ganesh', 'good product', 1, '2018-11-12 18:30:00'),
(31, 5, 'bipin', 'bad product', 1, '2018-11-12 18:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `ID` (`uid`);

--
-- Indexes for table `product_info`
--
ALTER TABLE `product_info`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_info`
--
ALTER TABLE `product_info`
  MODIFY `pid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `rid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
