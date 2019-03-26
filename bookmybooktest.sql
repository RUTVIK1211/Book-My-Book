-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2019 at 06:09 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookmybooktest`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(255) NOT NULL,
  `b_name` varchar(40) DEFAULT NULL,
  `b_publisher` varchar(40) DEFAULT NULL,
  `b_edition` varchar(10) DEFAULT NULL,
  `b_isbn` varchar(10) DEFAULT NULL,
  `b_page` bigint(255) DEFAULT NULL,
  `b_price` bigint(255) DEFAULT NULL,
  `b_img` varchar(50) NOT NULL DEFAULT 'error',
  `b_author` varchar(40) DEFAULT NULL,
  `b_description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_publisher`, `b_edition`, `b_isbn`, `b_page`, `b_price`, `b_img`, `b_author`, `b_description`) VALUES
(6, 'asda as ', 'asd', 'asd', 'asd', 123, 123, 'book/asda as.jpg', 'asd', 'asd'),
(7, 'science', 'ncet', '2018-2019', '2351058', 125, 4500, 'book/science.jpg', 'asd', 'reefsdfasdfsda sdfdfad');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(255) NOT NULL,
  `b_id` int(255) NOT NULL,
  `c_id` int(255) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(25) NOT NULL,
  `price` bigint(255) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `b_id`, `c_id`, `product_name`, `quantity`, `price`, `img`) VALUES
(13, 6, 1, 'asda as ', 6, 123, 'book/asda as.jpg'),
(14, 7, 1, 'science', 3, 4500, 'book/science.jpg'),
(15, 6, 4, 'asda as ', 1, 123, 'book/asda as.jpg'),
(19, 7, 8, 'science', 1, 4500, 'book/science.jpg'),
(21, 6, 9, 'asda as ', 1, 123, 'book/asda as.jpg'),
(22, 6, 8, 'asda as ', 1, 123, 'book/asda as.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `co_id` int(255) NOT NULL,
  `coupon` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`co_id`, `coupon`, `amount`) VALUES
(15, '#LEGENDARY_RV', '150'),
(16, '#RVBHUMI', '1000000'),
(18, '#LEGENDARY_AMAN ', '100'),
(19, '#LEGENDARY_PAAVAN ', '100'),
(20, '#PHENOMENALAJ', '100');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `C_id` int(11) NOT NULL,
  `F_name` varchar(15) NOT NULL,
  `L_name` varchar(15) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `City` varchar(15) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Pincode` varchar(6) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `F_name`, `L_name`, `Username`, `Password`, `Address`, `City`, `State`, `Pincode`, `Phone`, `Email`, `Dob`) VALUES
(8, 'Rutvik', 'Bhimani', 'rutvik', 'admin', 'this is an address', 'ahmedabad ', 'Gujrat', '382415', '8733005877', 'bhimani.rutvik1211@gmail.com', '2000-09-03'),
(9, 'admin', 'admin', 'admin', 'admin123', 'this is an admin address', 'ahmedabad', 'Gujrat', '382415', '9924226629', 'admin@gmail.com', '2000-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Login_id` int(10) NOT NULL,
  `Username` varchar(40) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Login_id`, `Username`, `Password`) VALUES
(8, 'rutvik', '21232f297a57a5a743894a0e4a801fc3'),
(9, 'admin', '0192023a7bbd73250516f069df18b500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`co_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_id`),
  ADD UNIQUE KEY `Index 2` (`Email`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `C_id` (`C_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `co_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
