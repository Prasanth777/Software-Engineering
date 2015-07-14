-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2015 at 07:31 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `event manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_event_history`
--

CREATE TABLE IF NOT EXISTS `department_event_history` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `org_team` varchar(20) NOT NULL,
  `organizer` text NOT NULL,
  `date` date NOT NULL,
  `venue` varchar(11) NOT NULL,
  `time` time(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_event_history`
--

INSERT INTO `department_event_history` (`id`, `name`, `org_team`, `organizer`, `date`, `venue`, `time`) VALUES
(1, 'Photoshop', 'IEEE', 'chinni', '2015-04-14', 'Sjt', '04:06:00.000'),
(2, 'wadas', 'IEEE', 'chinni', '2015-04-21', 'alk', '05:46:00.000'),
(3, 'java', 'jkh', 'jos', '2015-06-16', 'sjt', '03:55:00.000'),
(4, 'chickchick', 'IEEE', 'chinni', '2015-05-03', 'g3', '18:30:00.000'),
(5, 'maths', 'IEEE', 'chinni', '2015-05-06', 'sjt-g02', '18:00:00.000'),
(6, 'java', 'IEEE', 'chinni', '2015-07-07', 'SJT414', '18:00:00.000'),
(7, 'netPACE', 'IEEE', 'chinni', '2015-06-25', 'asd', '07:01:00.000');

-- --------------------------------------------------------

--
-- Table structure for table `department_login`
--

CREATE TABLE IF NOT EXISTS `department_login` (
  `Username` text NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='department head login database';

--
-- Dumping data for table `department_login`
--

INSERT INTO `department_login` (`Username`, `Password`) VALUES
('balaji', 'b'),
('chinni', 'c'),
('kichu', 'k');

-- --------------------------------------------------------

--
-- Table structure for table `department_profile`
--

CREATE TABLE IF NOT EXISTS `department_profile` (
  `Name` text NOT NULL,
  `Email_Id` varchar(40) NOT NULL,
  `Department` text NOT NULL,
  `Designation` text NOT NULL,
  `Cabin` varchar(10) NOT NULL,
  `Contact` varchar(11) NOT NULL,
  `User_Id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='department head profiles';

--
-- Dumping data for table `department_profile`
--

INSERT INTO `department_profile` (`Name`, `Email_Id`, `Department`, `Designation`, `Cabin`, `Contact`, `User_Id`) VALUES
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('Krishnan1', 'kichu.viru@gmail.com', 'CSE', 'HOD', 'SJT-414', '8939939349', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'chinni'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('balaji  ', 'monishblj@gmail.com', 'CSE', 'HOD', 'Sjt-211', '8939939349', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'kichu'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji'),
('', '', '', '', '', '', 'balaji');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` varchar(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `Team_Name` varchar(20) NOT NULL,
  `TeamLead_ID` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `time` time(3) NOT NULL,
  `venue` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `aboutevent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `Team_Name`, `TeamLead_ID`, `date`, `time`, `venue`, `status`, `aboutevent`) VALUES
('1', 'Photoshop', 'IEEE', 'chinni', '2015-04-14', '04:06:00.000', 'Sjt', 'Approved', 'Nesad saDa'),
('2', 'wadas', 'IEEE', 'chinni', '2015-04-21', '05:46:00.000', 'alk', 'Approved', 'kfn asdnalk'),
('3', 'java', 'jkh', 'jos', '2015-06-16', '03:55:00.000', 'sjt', 'Approved', 'fh jhgjhg'),
('4', 'chickchick', 'IEEE', 'chinni', '2015-05-03', '18:30:00.000', 'g3', 'Approved', 'game show'),
('5', 'maths', 'IEEE', 'chinni', '2015-05-06', '18:00:00.000', 'sjt-g02', 'Approved', 'puzzles'),
('6', 'java', 'IEEE', 'chinni', '2015-07-07', '18:00:00.000', 'SJT414', 'Approved', 'something'),
('7', 'netPACE', 'IEEE', 'chinni', '2015-06-25', '07:01:00.000', 'asd', 'Approved', 'WQEQWD');

-- --------------------------------------------------------

--
-- Table structure for table `intended`
--

CREATE TABLE IF NOT EXISTS `intended` (
  `eventid` varchar(10) NOT NULL,
  `SCSE` varchar(10) NOT NULL,
  `SITE` varchar(10) NOT NULL,
  `SENSE` varchar(10) NOT NULL,
  `SELECT1` varchar(10) NOT NULL,
  `SMBS` varchar(10) NOT NULL,
  `SBST` varchar(10) NOT NULL,
  `SAS` varchar(10) NOT NULL,
  `SSL1` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intended`
--

INSERT INTO `intended` (`eventid`, `SCSE`, `SITE`, `SENSE`, `SELECT1`, `SMBS`, `SBST`, `SAS`, `SSL1`) VALUES
('2', 'YES', 'YES', 'YES', 'NO', 'YES', 'YES', 'YES', 'NO'),
('3', 'YES', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
('4', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES'),
('5', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES', 'YES'),
('6', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO'),
('7', 'YES', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `sender` varchar(15) NOT NULL,
  `receiver` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender`, `receiver`, `message`) VALUES
('kichu', 'chinni', 'hello softwaare'),
('balaji', 'chinni', 'mom is here'),
('kichu', 'chinni', 'soft');

-- --------------------------------------------------------

--
-- Table structure for table `teamlead_profile`
--

CREATE TABLE IF NOT EXISTS `teamlead_profile` (
  `user_id` varchar(15) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email_id` varchar(20) NOT NULL,
  `department` varchar(15) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `reg_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teamlead_profile`
--

INSERT INTO `teamlead_profile` (`user_id`, `name`, `email_id`, `department`, `contact_no`, `reg_no`) VALUES
('chinni', 'Prasanth', 'prasanthmonish@gmail', 'CSE', '9884236999', '12BCE0098'),
('chinni', 'Prasanth', 'prasanthmonish@gmail', 'CSE', '9884236999', '12BCE0098'),
('chinni', 'Prasanth', 'prasanthmonish@gmail', 'CSE', '9884236999', '12BCE0098'),
('chinni', 'Prasanth', 'prasanthmonish@gmail', 'CSE', '9884236999', '12BCE0098'),
('chinni', 'Prasanth', 'prasanthmonish@gmail', 'CSE', '9884236999', '12BCE0098'),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('jos', 'joseph', 'sdkjn@djkfn.com', 'Cse', '465453', 'awae'),
('jos', 'joseph', 'sdkjn@djkfn.com', 'Cse', '465453', 'awae'),
('jos', 'joseph', 'sdkjn@djkfn.com', 'Cse', '465453', 'awae'),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('jos', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('aks', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', ''),
('chinni', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teammem_profile`
--

CREATE TABLE IF NOT EXISTS `teammem_profile` (
  `user_id` varchar(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `reg_no` varchar(10) NOT NULL,
  `department` varchar(15) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `email_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teammem_profile`
--

INSERT INTO `teammem_profile` (`user_id`, `name`, `reg_no`, `department`, `contact_no`, `email_id`) VALUES
('akshay', 'jindal', '12mcsd09', 'mech', '7676546', 'skajd@asd.com'),
('jos', 'joseph', '12bce0360', 'cse', '213214124', 'sjakdn@skajd.com'),
('vidhya', 'vidhyagaran', '12mse923', '', '', 'sad@dsad.com'),
('xyz', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE IF NOT EXISTS `teams` (
  `name` varchar(15) NOT NULL,
  `id` varchar(10) NOT NULL,
  `teamleadid` varchar(15) NOT NULL,
  `teamleadpass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`name`, `id`, `teamleadid`, `teamleadpass`) VALUES
('IEEE', '1', 'chinni', 'c'),
('jkh', 'fghf', 'jos', 'jos'),
('soft', 'soft', 'aks', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `team_members`
--

CREATE TABLE IF NOT EXISTS `team_members` (
  `teamid` varchar(20) NOT NULL,
  `memid` varchar(20) NOT NULL,
  `teammempass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_members`
--

INSERT INTO `team_members` (`teamid`, `memid`, `teammempass`) VALUES
('1', 'akshay', 'ab'),
('1', 'jos', 'jo'),
('1', 'vidhya', 'v'),
('1', 'xyz', 'x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_event_history`
--
ALTER TABLE `department_event_history`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `department_profile`
--
ALTER TABLE `department_profile`
 ADD KEY `User Id` (`User_Id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `intended`
--
ALTER TABLE `intended`
 ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_members`
--
ALTER TABLE `team_members`
 ADD PRIMARY KEY (`memid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
