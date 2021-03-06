-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2019 at 09:49 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `poojasms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cmobile` bigint(20) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cgrid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`cid`, `cname`, `cmobile`, `cemail`, `cgrid`) VALUES
(1, 'pooja', 986729245, 'pooja@gmail.com', 1),
(2, 'pooja', 909090909090, 'pooja@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `libid` int(11) NOT NULL,
  `libname` varchar(100) NOT NULL,
  `libuid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`libid`, `libname`, `libuid`) VALUES
(1, 'aaa', 1),
(2, 'holi', 1),
(3, 'holi1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `ID` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `usermobile` bigint(20) NOT NULL,
  `useremail` varchar(100) NOT NULL,
  `userpass` varchar(100) NOT NULL,
  `userpath` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `usermobile`, `useremail`, `userpass`, `userpath`) VALUES
(1, 'pooja', 9867291457, 'pooja@gamil.com', '70c881d4a26984ddce795f6f71817c9cf4480e79', ''),
(2, 'pooja', 9867291457, 'pooja@gamil.com', '70c881d4a26984ddce795f6f71817c9cf4480e79', ''),
(3, 'pooja', 9867291457, 'pooja@gamil.com', '70c881d4a26984ddce795f6f71817c9cf4480e79', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `mcontent` varchar(100) NOT NULL,
  `mlibid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `mcontent`, `mlibid`) VALUES
(1, '2', 0),
(2, 'jsjjdd', 2),
(3, 'heelo', 1),
(4, 'happ holi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `usergroup`
--

CREATE TABLE `usergroup` (
  `grid` int(11) NOT NULL,
  `grname` varchar(100) NOT NULL,
  `gruid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usergroup`
--

INSERT INTO `usergroup` (`grid`, `grname`, `gruid`) VALUES
(1, 'school', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`libid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `usergroup`
--
ALTER TABLE `usergroup`
  ADD PRIMARY KEY (`grid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `libid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usergroup`
--
ALTER TABLE `usergroup`
  MODIFY `grid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
