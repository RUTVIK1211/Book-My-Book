-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2019 at 03:55 AM
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
-- Database: `story_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '1234567');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(255) NOT NULL,
  `name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(10, 'Comic'),
(11, 'Scific'),
(12, 'Baby Stiories');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(150) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `Title` varchar(25) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `email`, `phone`, `Title`, `msg`) VALUES
(2, 'bhimani.rutvik1211@gmail.com', '8733005877', 'About update', 'Your Website have lack of content here..'),
(3, 'bhimani.rutvik1211@gmail.com', '8733005877', 'Functions', 'This Website provide stunning features like feedback auto fill email if we are login\r\n'),
(4, 'bhimani.rutvik1211@gmail.com', '8733005877', 'z', 'z'),
(5, 'bhimani.rutvik1211@gmail.com', '8733005877', 'z', 'z'),
(6, 'bhimani.rutvik1211@gmail.com', '8733005877', '1', '1'),
(7, 'bhimani.rutvik1211@gmail.com', '8733005877', '2', '2'),
(8, 'bhimani.rutvik1211@gmail.com', '8733005877', '3', '3');

-- --------------------------------------------------------

--
-- Table structure for table `story`
--

CREATE TABLE `story` (
  `id` int(255) NOT NULL,
  `title` text NOT NULL,
  `story` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `users_id` int(255) NOT NULL,
  `category_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `story`
--

INSERT INTO `story` (`id`, `title`, `story`, `image`, `date`, `users_id`, `category_id`) VALUES
(1, 'tara vina shyam mane', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?\r\n\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?\r\n\r\n', '155246469016336349905c88bb32921c4.jpg', '2019-03-13', 7, 10),
(2, 'Getting started as a UX intern', 'Whether you are an undergraduate searching for an internship for the first time or someone who is already working on another career path, you may have heard about the field of user experience, followed up and read some articles about it, been to few meetups may be and now you have developed an interest about the field. You already think that you have what it takes to dive in within you, but first you have to get into the water first, in order to dive.\r\n\r\nâ€œIt is easier to resist at the beginning than at the end.â€ \r\nâ€• Leonardo da Vinci\r\nNo matter how much interested you are, you will find yourself procrastinating on that decision to get started. There is a lot of articles about getting started as a UX intern, landing on an intern position and so on. If you are someone who is planning to get started as a UX intern and reading this article at this very moment, congratulations!, for resisting the resistance and keep following your dream. When I first wanted to get started as a UX intern, I too read a lot of posts about getting started. Below is one of my favorite posts about being a newbie UX designer. 3 reasons new UX Designers canâ€™t find jobs\r\n\r\nIf you are returning after reading the above post, you might be little demotivated but donâ€™t worry I promise to fix it by the end of this article.\r\n\r\nLetâ€™s get back to the subject. Iâ€™ll be explaining the process in 3 steps.', '15524742262885315895c88e072b08f9.png', '2019-03-13', 7, 11),
(5, 'Story Of One Side Love Way To Hell...', 'This is not an Story.It\'s a Fact Experience by ME. \r\nHave you ever experienced being in love with someone who didn’t love you back? It’s probably the most painful thing that could happen to anyone. Some people call it “friend zone”. It happens when someone you love sees you as no more than just a friend.\r\nIt hurts when you have someone in your heart but you can’t have them in your arms.\r\nEvery Day When you try to take care of her.every time she felt you that you are not an important for her.\r\nThis scenario happens Everyday and Giving You lot\'s Pain.\r\nShe Ignores you in front of other and try to show you that you are follest man in the word.She lie to you whenever she needs you.She give more importance to you until you fulfill it\'s work then after she again started ignoring you.\r\nSo My Dear friends if you love someone never tell her.other wise you getting lot\'s pain..and pain...and pain...', 'aaa.jpg', '2014-04-19', 14, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(25) NOT NULL,
  `Dob` varchar(25) NOT NULL,
  `Img` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Email`, `Password`, `Mobile`, `Address`, `City`, `Dob`, `Img`) VALUES
(3, 'jillmodi6712@gmail.com', '1523', '8000051266', '', '', '', ''),
(4, 'marvin1232@gmail.com', '1253', '8564791231', '', '', '', ''),
(7, 'hets7878401023@gmail.com', 'het1234', '8401644801', '', '', '', ''),
(8, 'alokdost@gmail.com', '8866110901', '8401644801', '', '', '', ''),
(9, 'kodi@gmail.com', '886611', '8401644801', '', '', '', ''),
(14, 'bhimani.rutvik1211@gmail.com', 'aa', '8733005877', '16 Girikunj Soc Part-1,Nr vimal cross road,Odhav', 'Ahmedabad', '2000-09-03', 'upload/bhimani.rutvik1211@gmail.com.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `story`
--
ALTER TABLE `story`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_id` (`users_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `story`
--
ALTER TABLE `story`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `story`
--
ALTER TABLE `story`
  ADD CONSTRAINT `story_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `story_user_id` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
