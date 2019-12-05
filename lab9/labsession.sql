-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 03:56 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labsession`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `uuser` varchar(100) NOT NULL,
  `upass` varchar(100) NOT NULL,
  `ufname` varchar(100) NOT NULL,
  `ulname` varchar(100) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `ustatus` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uuser`, `upass`, `ufname`, `ulname`, `uemail`, `ustatus`) VALUES
(1, 'usera', 'passa', 'FirstnameA', 'LastnameA', 'emailA@a.com', 'E'),
(2, 'userb', 'passb', 'FirstnameB', 'LastnameB', 'emailB@b.com', 'E'),
(3, 'userc', 'passc', 'FirstnameC', 'LastnameC', 'emailC@c.com', 'D'),
(4, 'userd', 'passd', 'FirstnameD', 'LastnameD', 'emailD@d.com', 'E');

-- --------------------------------------------------------

--
-- Table structure for table `usersinfo`
--

CREATE TABLE `usersinfo` (
  `uiid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `uaddress` varchar(500) NOT NULL,
  `udetail` varchar(500) NOT NULL,
  `ucomment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usersinfo`
--

INSERT INTO `usersinfo` (`uiid`, `uid`, `uaddress`, `udetail`, `ucomment`) VALUES
(1, 1, 'addressa', 'detaila', 'commenta'),
(2, 3, 'addressc', 'detailc', 'commentc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `usersinfo`
--
ALTER TABLE `usersinfo`
  ADD PRIMARY KEY (`uiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usersinfo`
--
ALTER TABLE `usersinfo`
  MODIFY `uiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
