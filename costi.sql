-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2019 at 01:37 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costi`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `name` varchar(50) NOT NULL,
  `userid` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`name`, `userid`, `email`, `password`) VALUES
('tharindu', 123, 'tharindu123@gmail.com', '1234'),
('dhananjana', 125, 'dhananjana.milinda.kumarasiri@gmail.com', 'dana'),
('Sanju Maheeshan', 940340098, 'maheshan@gmail.com', 'maheshan');

-- --------------------------------------------------------

--
-- Table structure for table `authorities`
--

CREATE TABLE `authorities` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `address` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authorities`
--

INSERT INTO `authorities` (`id`, `name`, `address`) VALUES
(1, 'University Of Colombo', 'Kumaratunga Munidasa Mawatha, Colombo 00700'),
(2, 'Costi', 'Baththaramulla');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `question_id`, `user_id`, `last_updated`) VALUES
(1, '<p>It is better If You can write a letter to costi</p>', 1, NULL, '2018-01-16 04:49:31');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `question_id`, `username`) VALUES
(1, 2, 'dhananjana.mobi@gmail.com'),
(2, 4, 'dhananjana.mobi@gmail.com'),
(7, 12, 'thidasi@costi.gov.lk');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `lat` varchar(10) NOT NULL,
  `lng` varchar(10) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `status`, `lat`, `lng`, `category`) VALUES
(1, 'inprogress', '6.3271', '80.1912', 'Infrastructure'),
(2, 'completed', '6.9271', '79.8612', 'Funds'),
(3, 'open', '6.6363', '79.9528', 'Human Resource and Skill Development'),
(4, 'inprogress', '7.2906', '80.6337', 'Administrative and Procurement'),
(5, 'completed', '6.9497', '80.7891', 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `institute` text,
  `category` text NOT NULL,
  `content` text NOT NULL,
  `multimedia` varchar(1000) DEFAULT NULL,
  `username` varchar(1000) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `likes` int(11) DEFAULT '0',
  `status` varchar(100) DEFAULT 'requested',
  `comments` int(11) NOT NULL,
  `approved` tinyint(4) NOT NULL DEFAULT '0',
  `created` timestamp NULL DEFAULT NULL,
  `lat` varchar(10) NOT NULL,
  `lng` varchar(10) NOT NULL,
  `relavent_authority` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `institute`, `category`, `content`, `multimedia`, `username`, `email`, `likes`, `status`, `comments`, `approved`, `created`, `lat`, `lng`, `relavent_authority`) VALUES
(10, 'UGC', 'Funds', 'need more details', NULL, NULL, 'dhanw@gas.as', 0, 'requested', 0, 0, '2018-01-31 18:59:16', '7.06674630', '7.06674630', 'Supply department'),
(11, 'UCSC', 'Infrastructure', 'need more details about locations', NULL, NULL, 'thilini@gmail.com', 0, 'requested', 0, 0, '2018-02-01 04:34:07', '7.46180328', '7.46180328', 'Ministry of Science'),
(12, 'ugc', 'Infrastructure', 'need prioriy', NULL, NULL, 'tharn@ad.er', 0, 'open', 0, 0, '2018-02-01 04:43:57', '7.09127710', '80.0667464', 'health asspciation'),
(13, 'NIBM', 'Funds', 'test 1', NULL, NULL, 'nibm@asaw.et', 0, 'canceled', 0, 0, '2018-02-01 05:06:09', '6.96043114', '79.9101913', 'need more money '),
(14, 'School', 'other', 'how to apply for Universities', '', NULL, 'dhana@awal.cd', 0, 'requested', 0, 0, '2018-04-16 14:50:59', '6.95737284', '79.9150258', 'UGC'),
(15, 'Pothuvil University', 'Funds', 'need funds for build a new building', '', NULL, 'milin@awa.ce', 0, 'requested', 0, 0, '2018-04-16 14:50:59', '7.60204063', '81.5440922', 'department of funding');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `institute` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `institute`) VALUES
(1, 'Dhananjana', 'dhananjana.mobi@gmail.com', 'dana', 'UCSC'),
(2, 'Thidasi', 'thidasi@costi.gov.lk', 'costi123', 'costi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlog`
--
ALTER TABLE `adminlog`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `authorities`
--
ALTER TABLE `authorities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authorities`
--
ALTER TABLE `authorities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
