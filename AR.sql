-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 08, 2018 at 12:48 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `AR`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `product_id` varchar(15) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `screenshots` varchar(100) NOT NULL,
  `3d_model` varchar(100) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `color` varchar(55) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `specification` varchar(300) NOT NULL,
  `manufacturer_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`product_id`, `product_name`, `screenshots`, `3d_model`, `brand`, `color`, `price`, `description`, `specification`, `manufacturer_name`) VALUES
('2', 'levies_shirt', 'obj9.jpg', 'object', 'Levies', 'black', 900, 'Slim Fit casual shirt', 'Slim fit and thigh', 'Levi Strauss'),
('5', 'Watch', 'hublot-black-watch.jpg', 'hublot-black-watch', 'Hublot', 'black-golden', 34000, 'Hublot Big Bang Watch', 'Hublot Big Bang Watch', 'Hublot and compan'),
('3', 'Bed', 'bed1.jpg', 'object', 'abc', 'brown', 5500, 'the king size bed comfortable for 3 people', 'the king size bed comfortable for 3 people', 'John'),
('4', 'Chair', 'cav-chair.jpg', 'object', 'abc', 'black', 4000, 'a comfortable black armchair. Soft material.', 'a comfortable black armchair. Soft material.', 'Mr. Hops'),
('6', 'Computer Table', 'computer-table.jpg', 'object', 'n/a', 'black', 30000, 'A computer table comfortable  for 2 people.', 'A computer table comfortable  for 2 people.', 'Elsa'),
('7', 'ray-ban-sunglases', 'ray-ban-sunglasess.jpg', 'object', 'Ray ban', 'black', 2000, 'ray-ban-sunglasess ', 'ray-ban-sunglasess ', 'Lisa');

-- --------------------------------------------------------

--
-- Table structure for table `customer_prod`
--

CREATE TABLE `customer_prod` (
  `product_id` varchar(30) NOT NULL,
  `Product_name` varchar(80) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(300) NOT NULL,
  `specification` varchar(300) NOT NULL,
  `manufacturer_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `product_main_table`
--

CREATE TABLE `product_main_table` (
  `product_id` int(50) NOT NULL,
  `product_name` text NOT NULL,
  `screenshots` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `specification` varchar(50) NOT NULL,
  `manufacturer_name` varchar(50) NOT NULL,
  `models` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_main_table`
--

INSERT INTO `product_main_table` (`product_id`, `product_name`, `screenshots`, `brand`, `color`, `price`, `description`, `specification`, `manufacturer_name`, `models`) VALUES
(1, 'chair', 'fimage1.jpg', 'Golden Furniture', 'Dark Silver', '3000', 'Confort Chair with good Strength', 'Available on Low cost', 'Danny Leon', 'object'),
(2, 'watch', 'fimage6.jpg', 'Lotus', 'Blue and White', '1000', 'Hand Fit Low Weight', 'Water Proof', 'Les Martin', 'object'),
(3, 'Comfort Chair', 'fimage3.jpg', 'Wooden', 'Cream brown', '5500', 'Confort Chair with good Strength', 'available in low cost', 'Danny Leon', 'object'),
(4, 'Cupboard', 'fimage9.jpg', 'Wooden ', 'Brown', '8700', 'Height 7 fit and width 4 fit', 'Water Proof good material', 'Jhon Mark', 'object'),
(5, 'One Plus', 'fimage7.jpg', 'One Plus', 'Black', '15000', 'Snapdragon 805 SoC and comes with 3GB of RAM', '2.5 GHz Quad core', 'One Plus', 'object'),
(6, 'Wall Clock', 'fimage8.jpg', 'Clocker Rocks', 'Black and White', '2000', 'Wall clock with best material', 'Operate On Battery ', 'Ken Sandy', 'object'),
(7, 'Sofa', 'fimage2.jpg', 'Jems Furniture', 'fimage2.jpg', '6900', 'comfortable sofa cum chai', 'fully adjustable ', 'Jems', 'object'),
(8, 'Wooden Chair', 'fimage4.jpg', 'woodzila', 'Light Brown', '1600', 'Good Product', 'nice', 'luize denza', 'object'),
(9, 'King Chair', 'fimage5.jpg', 'wood kings', 'Dark Brown', '7000', 'the kings chai', 'nice', 'Kings chair', 'objetc'),
(10, 'Television', 'fimage12.jpg', 'Samsung', 'black', '11000', 'flat adjustble', 'low price no moisture effect', 'samsung', 'object'),
(11, 'Golden Watch', 'fimage11.jpg', 'India Watch', 'black and golden', '4500', 'black belt and golden dial', 'water proof', 'ibrahim ', 'object'),
(12, 'Jeans', 'fimage10.jpg', 'orange fresh', 'blue', '1200', 'blue slim fit women jeans', 'strachable', 'Rima Desai', 'object');

-- --------------------------------------------------------

--
-- Table structure for table `uza`
--

CREATE TABLE `uza` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` varchar(25) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uza`
--

INSERT INTO `uza` (`user_id`, `product_id`, `url`, `productname`, `qty`, `price`) VALUES
(1, 1, 'fimage1.jpg', 'chair', 5, 3000),
(1, 2, 'fimage4.jpg', 'Light Chair', 3, 1600),
(1, 3, 'fimage5.jpg', 'King Chair', 8, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `uzi`
--

CREATE TABLE `uzi` (
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `url` varchar(25) NOT NULL,
  `productname` varchar(25) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uzi`
--

INSERT INTO `uzi` (`user_id`, `product_id`, `url`, `productname`, `qty`, `price`) VALUES
(2, 2, 'fimage6.jpg', 'watch', 3, 1000),
(2, 10, 'fimage12.jpg', 'Television', 1, 11000),
(2, 12, 'fimage10.jpg', 'Jeans', 1, 1200),
(2, 5, 'fimage7.jpg', 'One Plus', 1, 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_main_table`
--
ALTER TABLE `product_main_table`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_main_table`
--
ALTER TABLE `product_main_table`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
