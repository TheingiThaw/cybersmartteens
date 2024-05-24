-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2024 at 11:27 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cybersmartteens`
--

-- --------------------------------------------------------

--
-- Table structure for table `billinginfo`
--

CREATE TABLE IF NOT EXISTS `billinginfo` (
  `billingID` int(11) NOT NULL,
  `cardHolderName` varchar(255) NOT NULL,
  `cardNumber` varchar(16) NOT NULL,
  `expiredDate` date NOT NULL,
  `securityCode` int(11) NOT NULL,
  `billAmount` decimal(10,2) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contactid` int(11) NOT NULL,
  `contactName` varchar(128) NOT NULL,
  `contactEmail` varchar(128) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `subID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contactid`, `contactName`, `contactEmail`, `message`, `subID`) VALUES
(1, 'baemon', 'baemon2024@yg.com', 'hello', 1),
(2, 'superteen', 'superteen@pledis.com', 'sdfsdfsf', 4);

-- --------------------------------------------------------

--
-- Table structure for table `newsemail`
--

CREATE TABLE IF NOT EXISTS `newsemail` (
  `emailid` int(11) NOT NULL,
  `useremail` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsemail`
--

INSERT INTO `newsemail` (`emailid`, `useremail`) VALUES
(1, 'baemon2024@yg.com'),
(2, 'hellovenus@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subID` int(11) NOT NULL,
  `subjectName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subID`, `subjectName`) VALUES
(1, 'How do I recover my account if I no longer have access to the registered email?'),
(2, 'How often will I receive emails after signing up?'),
(3, 'Can I customize email preferences for notifications?'),
(4, 'What steps should I take if I want to deactivate my account?'),
(5, 'Is there a process for closing my account permanently?'),
(6, 'Can users suggest additional safety features or improvements?'),
(7, 'What are the community guidelines for user behavior?');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(128) NOT NULL,
  `userpassword` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `surname`, `email`, `userpassword`) VALUES
(1, 'ninga', 'ban', 'ninga123@gmail.com', 'ninga123'),
(2, 'seven', 'teen', 'seventeensebong@pledis.com', '$2y$10$kQXIlONF9gC9Yymy8vQg6e10MJfUmp/aEBZ.LSkfeeAWWeALxQba.'),
(3, 'super', 'junior', 'suju2006@gmail.com', '$2y$10$Vv0t3Z5buSFnNcuAtQ45c.q0xaYD7Djsrkts8tOHTntgbOYn102j.'),
(4, 'tws', 'pledis', 'tws@pledis.com', '$2y$10$qw/H30Wrl8f5bN.nQ2RhpuaKFbVq2iEMFIAy8qpU489I9Jlv/pGma'),
(5, 'tws', 'pledis', 'tws@pledis.com', '$2y$10$CGIboVLTEZlzNkz7Dupq6uPTuEpqho52XzdTIq94Do2ZLfUBrnNHm'),
(6, 'super', 'junior', 'suju2006@gmail.com', '$2y$10$6EIyK6hrQnQu8BAVdPAoYuRVMifcaNu6BlUT0Uoh56hhO9oIvkvmy'),
(7, 'Ninga', 'Ban', 'ningaban123@gmail.com', '$2y$10$GKWHvx/mSCOmcgkC2YWVfePLnyx7isymlWxE6RCWrUrA6mxIlOORW'),
(8, 'tws', 'pledis', 'tws@pledis.com', '$2y$10$KtRUjkdLEoan/.YyoQ4.teY61VTRvcZGMNR9WzW5lZd9bqyPVwtD.'),
(9, 'seven', 'teen', 'seventeensebong@pledis.com', '$2y$10$gFrVIGRxA4ui7rasUh1Nv.IG9pu95ktRump6frPrNR3gDOQvJY0PS'),
(10, 'super', 'teen', 'superteen@gmail.com', '$2y$10$zwh76vu2PooOGDZFRk.kp.sK3eU5hb9cql4HbG8xXRFxktqs1bGwi'),
(11, 'baby', 'monster', 'baemon2024@yg.com', '$2y$10$joQPIUrQgUJdpEyIuC9eC.pV8s4JqSICj97ywCkWk5jGhKzNiFwDO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billinginfo`
--
ALTER TABLE `billinginfo`
  ADD PRIMARY KEY (`billingID`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`),
  ADD KEY `subID` (`subID`);

--
-- Indexes for table `newsemail`
--
ALTER TABLE `newsemail`
  ADD PRIMARY KEY (`emailid`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billinginfo`
--
ALTER TABLE `billinginfo`
  MODIFY `billingID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newsemail`
--
ALTER TABLE `newsemail`
  MODIFY `emailid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `subID` FOREIGN KEY (`subID`) REFERENCES `subject` (`subID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
