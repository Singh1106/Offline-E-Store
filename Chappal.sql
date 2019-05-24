-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 05, 2018 at 07:51 PM
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
-- Database: `Chappal`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `items_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `picname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`items_id`, `name`, `price`, `picname`) VALUES
(1, 'Canon EOS', 36000, 'camera1.jpg'),
(2, 'Nikon DSLR', 40000, 'camera2.jpg'),
(3, 'Sony DSLR', 45000, 'camera3.jpg'),
(4, 'Olympus DSLR', 50000, 'camera4.jpg'),
(5, 'Titan Model #301', 13000, 'watch1.jpg'),
(6, 'Titan Model #201', 3000, 'watch2.jpg'),
(7, 'HMT Milan', 8000, 'watch3.jpg'),
(8, 'Faber Luba #111', 18000, 'watch4.jpg'),
(9, 'H&W', 800, 'shirt1.jpg'),
(10, 'Luis Phil', 1000, 'shirt2.jpg'),
(11, 'John Zok', 1500, 'shirt3.jpg'),
(12, 'Jhalsani', 1300, 'shirt4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(450) NOT NULL,
  `number` varchar(12) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(225) NOT NULL,
  `Sex` enum('Male','Female','Transgender','Others') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `number`, `city`, `address`, `Sex`) VALUES
(1, 'Jaswinder Singh', 'jaswinder@gmail.com', '1234', '9899096444', 'faridabad', '5L/37A NIT-5', 'Male'),
(3, 'Yashik Mahajan', 'yashikmahajan01@gmail.com', 'iamyashik', '9501209907', 'Delhi', 'newdelhi', 'Male'),
(4, 'HARJEEVAN', 'harjeevan01@gmail.com', 'ambala', '9876543210', 'ambala', 'ambalahouse', 'Male'),
(5, 'abhiraj', 'Abhiraj@gmail.com', 'ambalasuucks', '98989898989', 'ambala', 'mixi', 'Male'),
(6, 'jasdeep', 'jasdeep@gmail.com', 'I DONT KNWO', '9999999999', 'I DONT KNOW', 'I DONT KNOW', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `items_id` int(11) NOT NULL,
  `amount` int(2) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1=Nothing,2=A2C,3=Confirmed'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `items_id`, `amount`, `status`) VALUES
(9, 1, 8, 5, 2),
(8, 1, 11, 1, 2),
(5, 5, 12, 2, 2),
(10, 1, 2, 1, 2),
(13, 1, 3, 1, 2),
(14, 1, 4, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`items_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `items_id` (`items_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
