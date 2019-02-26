-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 08:10 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment_reply`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_reply_tbl`
--

CREATE TABLE `comment_reply_tbl` (
  `comment_id` int(11) NOT NULL,
  `parent_comment_id` int(11) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment_reply_tbl`
--

INSERT INTO `comment_reply_tbl` (`comment_id`, `parent_comment_id`, `comments`, `date`) VALUES
(1, 0, 'first parent comment', '2018-11-20 01:39:24'),
(2, 0, 'Second parent Comment', '2018-11-20 01:40:31'),
(3, 0, 'Third Comment reply', '2018-11-20 01:41:49'),
(4, 2, 'Second Child comment ', '2018-11-20 01:43:30'),
(5, 3, 'Third \nChild comment ', '2018-11-20 01:59:06'),
(6, 5, 'Third child to child comment ', '2018-11-20 01:59:31'),
(7, 1, 'Heelo i am the first comment reply', '2018-11-21 07:14:48'),
(8, 0, 'first child', '2018-11-21 07:15:45'),
(9, 8, 'foursth child', '2018-11-21 07:16:03'),
(10, 1, 'forst chils', '2018-11-21 07:16:16'),
(11, 10, 'heello i am 10 number child to child', '2018-11-21 07:29:29'),
(12, 7, 'heelo ', '2018-11-21 07:31:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment_reply_tbl`
--
ALTER TABLE `comment_reply_tbl`
  ADD PRIMARY KEY (`comment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment_reply_tbl`
--
ALTER TABLE `comment_reply_tbl`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
