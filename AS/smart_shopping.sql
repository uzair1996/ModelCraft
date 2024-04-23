-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 05, 2018 at 10:59 PM
-- Server version: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smart shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `product_id` int(32) NOT NULL,
  `product_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `screenshots` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `3d_model` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(32) NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `specification` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`product_id`, `product_name`, `screenshots`, `3d_model`, `brand`, `color`, `price`, `description`, `specification`, `manufacturer_name`) VALUES
(14, 'abc', 'img/ray-ban-sunglasess.jpg', 'object', 'Ray Ban', 'black', 2500, 'abc', 'abc', 'Maria'),
(15, 'Nike-Boots', 'img/Nike-Boots.jpg', 'object', 'Nike-Boots', 'black', 6000, 'abc', 'abc', 'Nike'),
(16, 'hublot-black-watch', 'img/hublot-black-watch.jpg', 'object', 'hublot', 'black', 8000, 'v jnfsknvkf', 'jfnvjkfnvk', 'hublot');

-- --------------------------------------------------------

--
-- Table structure for table `customer_register`
--

CREATE TABLE `customer_register` (
  `c_id` int(11) NOT NULL,
  `c_firstname` varchar(50) NOT NULL,
  `c_lastname` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_register`
--

INSERT INTO `customer_register` (`c_id`, `c_firstname`, `c_lastname`, `c_email`, `c_password`, `c_confirmpassword`) VALUES
(1, 'uza', 'uza', 'uzair.pachhapure@gmail.com', '123456', '123456'),
(2, 'uzi', 'pac', 'uzair.pachhapure@gmail.com', 'hdhd', 'hdhd'),
(3, 'uzi', 'pachhapure', 'uzi@yahoo.com', 'uzi321', 'uzi321'),
(4, 'samir', 'shaikh', 'sksamir09@gmail.com', 'a', 'a'),
(7, 'samir', 'shaikh', 'sksamir09@gmail.com', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer_register`
--

CREATE TABLE `manufacturer_register` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_password` varchar(50) NOT NULL,
  `m_confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer_register`
--

INSERT INTO `manufacturer_register` (`m_id`, `m_name`, `m_email`, `m_password`, `m_confirmpassword`) VALUES
(1, 'djfjefj', 'jndjwn@gmail.com', '123', '123'),
(2, 'uzair', 'uzair.pachhapure@gmail.com', '123456789', '123456789'),
(3, 'uzair', 'uzair@yahoo.com', 'uzair321', 'uzair321');

-- --------------------------------------------------------

--
-- Table structure for table `product_main_table`
--

CREATE TABLE `product_main_table` (
  `product_id` int(32) NOT NULL,
  `product_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `screenshots` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `brand` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(32) NOT NULL,
  `description` varchar(290) COLLATE utf8_unicode_ci NOT NULL,
  `specification` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `manufacturer_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `models` varchar(32) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_main_table`
--

INSERT INTO `product_main_table` (`product_id`, `product_name`, `screenshots`, `brand`, `color`, `price`, `description`, `specification`, `manufacturer_name`, `models`) VALUES
(1, 'abc', 'img/ray-ban-sunglasess.jpg', 'Ray Ban', 'black', 2500, 'abc', 'abc', 'Maria', 'object'),
(2, 'Nike-Boots', 'img/Nike-Boots.jpg', 'Nike-Boots', 'Black', 6000, 'ggnfmnlgmnglt', 'kbmgknfk', 'nike', 'object'),
(3, 'hublot-black-watch', 'img/hublot-black-watch.jpg', 'hublot', 'black', 8000, 'fjnb khrkrdjgnvk', 'fjnb khrkrdjgnvk', 'hublot', 'object');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `customer_register`
--
ALTER TABLE `customer_register`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `manufacturer_register`
--
ALTER TABLE `manufacturer_register`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `product_main_table`
--
ALTER TABLE `product_main_table`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `product_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customer_register`
--
ALTER TABLE `customer_register`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `manufacturer_register`
--
ALTER TABLE `manufacturer_register`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `product_main_table`
--
ALTER TABLE `product_main_table`
  MODIFY `product_id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
