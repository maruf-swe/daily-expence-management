-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2019 at 04:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `costrecord`
--

CREATE TABLE `costrecord` (
  `SerialNo` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Date` date NOT NULL,
  `Amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `costrecord`
--

INSERT INTO `costrecord` (`SerialNo`, `UserName`, `Date`, `Amount`) VALUES
(1, 'q', '2019-08-11', 101),
(3, 'amar', '2019-08-12', 101),
(4, 'amar', '2019-08-13', 122);

-- --------------------------------------------------------

--
-- Table structure for table `nameofrecord`
--

CREATE TABLE `nameofrecord` (
  `SerialNo` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `Date` date NOT NULL,
  `RecordName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nameofrecord`
--

INSERT INTO `nameofrecord` (`SerialNo`, `UserName`, `Date`, `RecordName`) VALUES
(1, 'q', '2019-08-11', 'Ghum'),
(3, 'amar', '2019-08-12', 'Ghummabo'),
(4, 'amar', '2019-08-13', 'Eid');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `UserName` varchar(120) NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`UserName`, `Password`) VALUES
('', ''),
('AAAAAAAAAAAAAAAAA', 'AAA'),
('amar', '123'),
('amarrra', '1234'),
('q', '1233');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `SerialNo` int(11) NOT NULL,
  `Name` text NOT NULL,
  `UserName` varchar(120) NOT NULL,
  `Email` text NOT NULL,
  `Date of Birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`SerialNo`, `Name`, `UserName`, `Email`, `Date of Birth`) VALUES
(1, '', '', '', '0000-00-00'),
(2, 'Ami', 'amar', 'amaremail@gmail.com', '2019-08-27'),
(3, 'amii', 'amarrra', 'ammm@gmail.com', '2019-08-27'),
(4, 'Ami', 'amarrra', 'aaa@gmail.com', '2019-08-27'),
(5, 'aami', 'AAAAAAAAAAAAAAAAA', 'aaa@gmail.com', '2019-09-03'),
(6, 'a', '', '', '0000-00-00'),
(7, 'q', 'q', 'amaremail@gmail.com', '2019-08-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costrecord`
--
ALTER TABLE `costrecord`
  ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `nameofrecord`
--
ALTER TABLE `nameofrecord`
  ADD PRIMARY KEY (`SerialNo`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`SerialNo`,`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costrecord`
--
ALTER TABLE `costrecord`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `nameofrecord`
--
ALTER TABLE `nameofrecord`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `SerialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
