-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2017 at 06:54 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty`
--

-- --------------------------------------------------------

--
-- Table structure for table `atta`
--

CREATE TABLE `atta` (
  `date` date NOT NULL,
  `1` int(11) NOT NULL DEFAULT '0',
  `2` int(11) NOT NULL DEFAULT '0',
  `3` int(11) NOT NULL DEFAULT '0',
  `4` int(11) NOT NULL DEFAULT '0',
  `5` int(11) NOT NULL DEFAULT '0',
  `6` int(11) NOT NULL DEFAULT '0',
  `7` int(11) NOT NULL DEFAULT '0',
  `8` int(11) NOT NULL DEFAULT '0',
  `9` int(11) NOT NULL DEFAULT '0',
  `10` int(11) NOT NULL DEFAULT '0',
  `11` int(11) DEFAULT '0',
  `12` int(11) NOT NULL DEFAULT '0',
  `13` int(11) NOT NULL DEFAULT '0',
  `14` int(11) NOT NULL DEFAULT '0',
  `15` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atta`
--

INSERT INTO `atta` (`date`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`) VALUES
('0000-00-00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('2017-08-10', 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0),
('2017-08-11', 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0),
('2017-09-19', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0),
('2017-09-20', 0, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 0, 0, 0, 1),
('2017-09-21', 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `detailsa`
--

CREATE TABLE `detailsa` (
  `rollno` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `2017-10-01` int(11) NOT NULL DEFAULT '0',
  `2017-10-02` int(11) NOT NULL DEFAULT '0',
  `2017-10-03` int(11) NOT NULL DEFAULT '0',
  `2017-10-04` int(11) NOT NULL DEFAULT '0',
  `2017-10-05` int(11) NOT NULL DEFAULT '0',
  `2017-10-06` int(11) NOT NULL DEFAULT '0',
  `2017-10-07` int(11) NOT NULL DEFAULT '0',
  `2017-10-08` int(11) NOT NULL DEFAULT '0',
  `2017-10-09` int(11) NOT NULL DEFAULT '0',
  `2017-10-10` int(11) NOT NULL DEFAULT '0',
  `2017-10-11` int(11) NOT NULL DEFAULT '0',
  `2017-10-12` int(11) NOT NULL DEFAULT '0',
  `2017-10-13` int(11) NOT NULL DEFAULT '0',
  `2017-10-14` int(11) NOT NULL DEFAULT '0',
  `2017-10-15` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `detailsa`
--

INSERT INTO `detailsa` (`rollno`, `name`, `2017-10-01`, `2017-10-02`, `2017-10-03`, `2017-10-04`, `2017-10-05`, `2017-10-06`, `2017-10-07`, `2017-10-08`, `2017-10-09`, `2017-10-10`, `2017-10-11`, `2017-10-12`, `2017-10-13`, `2017-10-14`, `2017-10-15`) VALUES
(1, 'Jacob', 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0),
(2, 'Michael', 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0),
(3, 'Joshua', 1, 0, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0),
(4, 'Matthew', 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0),
(5, 'Christopher', 1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 'Andrew', 1, 1, 1, 1, 1, 1, 0, 1, 0, 0, 1, 1, 1, 1, 0),
(7, 'Daniel', 1, 0, 0, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0),
(8, 'Ethan', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0),
(9, 'Joseph', 1, 0, 1, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0),
(10, 'William', 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `enter`
--

CREATE TABLE `enter` (
  `id` int(255) NOT NULL,
  `facname` varchar(500) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `pswd` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enter`
--

INSERT INTO `enter` (`id`, `facname`, `emailid`, `pswd`) VALUES
(9, 'sumit', 'sumit@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atta`
--
ALTER TABLE `atta`
  ADD PRIMARY KEY (`date`);

--
-- Indexes for table `detailsa`
--
ALTER TABLE `detailsa`
  ADD PRIMARY KEY (`rollno`);

--
-- Indexes for table `enter`
--
ALTER TABLE `enter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailsa`
--
ALTER TABLE `detailsa`
  MODIFY `rollno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `enter`
--
ALTER TABLE `enter`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
