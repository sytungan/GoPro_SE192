-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2020 at 04:06 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goprosedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `catdb`
--

CREATE TABLE `catdb` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catdb`
--

INSERT INTO `catdb` (`cat_id`, `cat_name`, `cat_description`) VALUES
(1, 'Toán', ''),
(2, 'Hóa', ''),
(3, 'Anh', ''),
(4, 'Lý', ''),
(5, 'Sinh', ''),
(6, 'Sử', ''),
(7, 'Địa', ''),
(8, 'GDCD', '');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `file` text NOT NULL,
  `url` text NOT NULL,
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`file`, `url`, `date`) VALUES
('Dat', '../uploads/VHVL_BaiTap-3-Memory.pdf', '27/07/2020');

-- --------------------------------------------------------

--
-- Table structure for table `imagedb`
--

CREATE TABLE `imagedb` (
  `image_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_by` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagedb`
--

INSERT INTO `imagedb` (`image_id`, `file_name`, `file_by`) VALUES
(1, '2020-07-27 (2).png', 17),
(5, 'Picture.png', 19);

-- --------------------------------------------------------

--
-- Table structure for table `replydb`
--

CREATE TABLE `replydb` (
  `reply_id` int(8) NOT NULL,
  `reply_content` text NOT NULL,
  `reply_date` datetime NOT NULL,
  `reply_topic` int(8) NOT NULL,
  `reply_by` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replydb`
--

INSERT INTO `replydb` (`reply_id`, `reply_content`, `reply_date`, `reply_topic`, `reply_by`) VALUES
(26, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(27, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(28, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(29, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(30, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(31, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(32, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(33, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(34, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(35, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(36, 'Dat1234', '2020-06-30 01:08:20', 33, 11),
(37, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(38, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(39, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(40, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(41, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(42, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(43, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(44, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(45, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(46, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(47, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(48, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(49, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(50, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(51, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(52, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(53, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(54, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(55, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(56, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(57, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(58, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(59, 'Dat1234', '2020-06-30 01:08:21', 33, 11),
(60, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(61, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(62, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(63, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(64, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(65, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(66, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(67, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(68, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(69, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(70, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(71, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(72, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(73, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(74, 'Dat1234', '2020-06-30 01:08:22', 33, 11),
(75, 'wqe', '2020-07-09 10:31:34', 33, 11),
(76, '12', '2020-07-09 10:31:43', 33, 11),
(77, '123', '2020-07-26 16:31:05', 36, 16),
(110, 'Dcm Khanh', '2020-07-27 10:00:08', 37, 17),
(111, 'Dcm Khanh', '2020-07-27 10:00:08', 37, 17),
(112, 'Dcm Khanh', '2020-07-27 10:00:08', 37, 17),
(113, 'Dcm Khanh', '2020-07-27 10:00:08', 37, 17),
(114, 'Dcm Khanh', '2020-07-27 10:00:08', 37, 17),
(115, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(116, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(117, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(118, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(119, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(121, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(122, 'Dcm Khanh', '2020-07-27 10:00:09', 37, 17),
(123, 'eqweqwe', '2020-07-27 10:01:32', 37, 17),
(124, 'eqweqwe', '2020-07-27 10:01:39', 37, 17),
(132, '', '2020-07-27 15:30:49', 37, 17),
(133, '21321312', '2020-07-27 15:31:03', 37, 17),
(134, '21321312', '2020-07-27 15:31:06', 37, 17),
(135, 'Dat123', '2020-07-27 15:31:18', 37, 17),
(136, '', '2020-07-27 15:31:31', 37, 17),
(187, 'www', '2020-07-27 15:45:42', 38, 17),
(188, 'www', '2020-07-27 15:45:43', 38, 17),
(189, 'Dat', '2020-07-27 15:46:42', 38, 17),
(190, 'eqweqwe', '2020-07-27 15:49:56', 39, 17),
(191, 'How to make this bigger ', '2020-07-27 15:49:59', 39, 17),
(192, 'dat', '2020-07-27 15:50:01', 39, 17),
(194, 'How to make this bigger ', '2020-07-28 00:18:54', 40, 19);

-- --------------------------------------------------------

--
-- Table structure for table `topicdb`
--

CREATE TABLE `topicdb` (
  `topic_id` int(8) NOT NULL,
  `topic_subject` varchar(255) NOT NULL,
  `topic_date` date NOT NULL,
  `topic_cat` int(8) NOT NULL,
  `topic_by` int(8) NOT NULL,
  `topic_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topicdb`
--

INSERT INTO `topicdb` (`topic_id`, `topic_subject`, `topic_date`, `topic_cat`, `topic_by`, `topic_content`) VALUES
(39, 'Dat2', '2020-07-27', 2, 17, '2'),
(40, 'Hasagi', '2020-07-27', 1, 17, '123'),
(41, 'Dat1', '2020-07-27', 1, 17, 'An associative array of variables passed to the current script via the HTTP POST method when using application/x-www-form-urlencoded or multipart/form-data as the HTTP Content-Type in the request.\r\n\r\n$HTTP_POST_VARS contains the same initial information, but is not a superglobal. (Note that $HTTP_POST_VARS and $_POST are different variables and that PHP handles them as such)'),
(43, 'Dat2', '2020-07-27', 1, 17, 'DDat\r\n123\r\n234\r\nDm An\r\nDm Khai'),
(44, 'Dat2', '2020-07-28', 1, 17, '123');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_nickname` varchar(255) NOT NULL,
  `user_role` varchar(25) NOT NULL,
  `user_active` int(1) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_level` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`user_id`, `user_name`, `user_pass`, `user_nickname`, `user_role`, `user_active`, `user_email`, `user_level`) VALUES
(15, 'dat', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', 'Student', 1, 'thewjn92@gmail.com', 0),
(16, 'dat123', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', 'Student', 1, 'thewjn92@gmail.com', 0),
(17, 'an', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'dmAn', 'Teacher', 1, 'thewjn92@gmail.com', 1),
(18, 'khiem', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Khiêm Ngu', 'Student', 0, 'thewjn92@zing.vn', 0),
(19, 'dat1234', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Vũ Nguyễn Minh Đạt', 'Student', 1, 'thewjn92@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catdb`
--
ALTER TABLE `catdb`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `imagedb`
--
ALTER TABLE `imagedb`
  ADD PRIMARY KEY (`image_id`),
  ADD UNIQUE KEY `file_by` (`file_by`);

--
-- Indexes for table `replydb`
--
ALTER TABLE `replydb`
  ADD PRIMARY KEY (`reply_id`);

--
-- Indexes for table `topicdb`
--
ALTER TABLE `topicdb`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catdb`
--
ALTER TABLE `catdb`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `imagedb`
--
ALTER TABLE `imagedb`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `replydb`
--
ALTER TABLE `replydb`
  MODIFY `reply_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `topicdb`
--
ALTER TABLE `topicdb`
  MODIFY `topic_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
