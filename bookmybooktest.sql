-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2019 at 06:24 PM
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
(2, 'Mathematics Std 9', 'NCERT', '2016-17', '9788174504', 364, 135, 'book/Mathematics Std 9.jpg', 'NCERT', 'Language: English\r\nBinding: Paperback\r\n'),
(3, 'Science Std 9', 'NCERT', '2016-17', '9788174504', 218, 165, 'book/Science Std 9.jpg', 'NCERT', 'Language: English \r\nBinding: Paperback\r\n'),
(4, 'English Class 10', 'NCERT', '2016-17', '9788174506', 364, 140, 'book/English Class 10.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback,'),
(5, ' Science Class 10', 'NCERT', '2017-18', '9788174506', 282, 165, 'book/ Science Class 10.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback,'),
(6, ' Science Class 10', 'NCERT', '2017-18', '9788174506', 282, 165, 'book/ Science Class 10.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback,'),
(7, 'Chemistry Class 11 Part-1', 'NCERT', '2018-19', '9788174504', 255, 155, 'book/Chemistry Class 11 Part-1.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(8, 'Chemistry Class 11 Part-2', 'NCERT', '2018-19', '9788174505', 421, 105, 'book/Chemistry Class 11 Part-2.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(9, 'Physics Class 11 Part-1', 'NCERT', '2018-19', '9788174505', 220, 130, 'book/Physics Class 11 Part-1.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(11, 'Physics Class 11 Part-2', 'NCERT', '2018-19', '9788174505', 412, 105, 'book/Physics Class 11 Part-2.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(12, 'Maths Class 12 Part-1', 'NCERT', '2018-19', '9788174506', 286, 250, 'book/Maths Class 12 Part-1.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(13, 'Maths Class 12 Part-2', 'NCERT', '2018-19', '9788174506', 622, 400, 'book/Maths Class 12 Part-2.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(14, 'Physics Class 12 Part-1', 'NCERT', '2018-19', '9788174506', 558, 140, 'book/Physics Class 12 Part-1.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback'),
(15, 'Physics Class 12 Part-2', 'NCERT', '2018-19', '9788174506', 308, 170, 'book/Physics Class 12 Part-2.jpg', 'NCERT', 'Language: English,\r\nBinding: Paperback');

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
  `Phone` int(10) NOT NULL,
  `Email` varchar(40) DEFAULT NULL,
  `Dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`C_id`, `F_name`, `L_name`, `Username`, `Password`, `Address`, `City`, `State`, `Pincode`, `Phone`, `Email`, `Dob`) VALUES
(1, 'Admin', 'Admin', 'Admin', 'Admin123', 'test is test', 'ahemedabad', 'Gujrat', '382415', 2147483647, 'admin@test.com', '2000-09-03'),
(2, 'test', 'test', 'test', 'toor', 'adasdasdasdhagfhdg agdfadh fahgda fhagdfjaghsfhghdgfasghfhagdhfhasdgfhagdfhasgfhdghgjdgfjsghdfhg', 'baroda', 'Gujrat', '382415', 2147483647, 'test@demo.cim', '2000-09-03'),
(3, 'Admin', 'admin', 'admin', 'admin123', 'adasdasd', 'ahmedabad', 'Gujrat', '382415', 2147483647, 'admin@admin.admin', '2000-09-03'),
(4, 'dummy', 'dummy', 'dummy', 'dummy', 'dummu', 'dummy', 'dummy', '585858', 2147483647, 'dummy@dummy.com', '0002-02-02'),
(5, 'Rutvik', 'Bhimani', 'RV', 'Rutvik@007007', 'sdfs dfhs sdfgshdjhf', 'ahmedabad', 'Gujrat', '382415', 2147483647, 'bhimani.rutvik1211@gmail.com', '2000-09-03');

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
(1, 'test', '7b24afc8bc80e548d66c4e7ff72171c5'),
(102, 'admin', '0192023a7bbd73250516f069df18b500'),
(104, 'dummy', '275876e34cf609db118f3d84b799a790'),
(105, 'RV', '1231217d8c56d74d33987b991834fdb1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`C_id`),
  ADD UNIQUE KEY `Index 2` (`Email`);

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
  MODIFY `b_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `C_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
