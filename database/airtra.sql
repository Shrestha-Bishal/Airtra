-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 03:43 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airtra`
--

-- --------------------------------------------------------

--
-- Table structure for table `addflights`
--

CREATE TABLE `addflights` (
  `flight_no` int(10) NOT NULL,
  `Company` text NOT NULL,
  `airbus_id` varchar(25) NOT NULL,
  `type` text NOT NULL,
  `trip` text NOT NULL,
  `fromdes` text NOT NULL,
  `todes` text NOT NULL,
  `SheduledDeparture` varchar(10) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `ScheduledArrival` varchar(10) NOT NULL,
  `From_Airport_id` varchar(10) NOT NULL,
  `To_Airport_id` varchar(10) NOT NULL,
  `Datee` date NOT NULL,
  `rdatee` date NOT NULL,
  `first_class` int(5) NOT NULL,
  `business_class` int(5) NOT NULL,
  `economy_class` int(5) NOT NULL,
  `first_class_seats` int(99) NOT NULL,
  `business_class_seats` int(99) NOT NULL,
  `economy_class_seats` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addflights`
--

INSERT INTO `addflights` (`flight_no`, `Company`, `airbus_id`, `type`, `trip`, `fromdes`, `todes`, `SheduledDeparture`, `ScheduledArrival`, `From_Airport_id`, `To_Airport_id`, `Datee`, `rdatee`, `first_class`, `business_class`, `economy_class`, `first_class_seats`, `business_class_seats`, `economy_class_seats`) VALUES
(6, ' Buddha Air', 'A302', 'domestic', 'roundtrip', 'kathmandu', 'pokhara', '17:57', '18:45', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 233, 192, 92, 50, 70, 100),
(7, ' Yeti Airlines', 'Y312', 'domestic', 'oneway', 'kathmandu', 'jumla', '16:09', '17:09', 'TIA', 'JDA', '2018-01-13', '2018-01-14', 400, 200, 150, 58, 45, 70),
(8, ' Yeti Airlines', 'y319', 'domestic', 'oneway', 'kathmandu', 'pokhara', '02:40', '03:30', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 392, 150, 50, 36, 50, 80),
(9, ' Buddha Air', 'A305', 'domestic', 'oneway', 'kathmandu', 'pokhara', '01:56', '02:56', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 400, 250, 100, 56, 57, 90),
(10, ' Simrik Air', 'S104', 'domestic', 'oneway', 'kathmandu', 'pokhara', '12:56', '02:00', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 350, 270, 150, 45, 56, 85),
(11, ' Tara Air', 'T137', 'domestic', 'roundtrip', 'kathmandu', 'pokhara', '14:06', '15:00', 'TIA', 'PDA', '2018-01-14', '2018-01-15', 300, 200, 100, 30, 50, 75),
(12, ' Summit Air', 'U124', 'domestic', 'oneway', 'kathmandu', 'pokhara', '04:09', '05:15', 'TIA', 'PDA', '2018-01-14', '2018-01-15', 350, 250, 150, 30, 45, 50),
(13, ' Fistail Air', 'F168', 'domestic', 'oneway', 'kathmandu', 'pokhara', '01:09', '02:10', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 40, 35, 30, 20, 40, 60),
(14, ' Nepal Air', 'A147', 'domestic', 'oneway', 'kathmandu', 'pokhara', '12:21', '13:21', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 300, 200, 80, 50, 60, 70),
(15, ' Makalu Air', 'M674', 'domestic', 'oneway', 'kathmandu', 'pokhara', '13:34', '14:56', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 700, 400, 300, 60, 70, 80),
(16, ' Nepal Air', 'N980', 'domestic', 'oneway', 'kathmandu', 'pokhara', '16:09', '17:00', 'TIA', 'PDA', '2018-01-15', '2018-01-16', 600, 400, 200, 60, 70, 100),
(17, ' Nepal Air', 'N890', 'international', 'oneway', 'Kathmandu ', 'New York ', '03:09', '14:45', 'TIA', 'NIA', '2018-01-16', '2018-01-18', 1000, 700, 450, 70, 100, 200);

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(99) NOT NULL,
  `fullname` text NOT NULL,
  `gender` text NOT NULL,
  `address` varchar(99) NOT NULL,
  `phnumber` bigint(13) NOT NULL,
  `email` varchar(25) NOT NULL,
  `username` varchar(9) NOT NULL,
  `password` varchar(25) NOT NULL,
  `branch_id` int(99) NOT NULL,
  `branch_location` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `fullname`, `gender`, `address`, `phnumber`, `email`, `username`, `password`, `branch_id`, `branch_location`) VALUES
(1, 'Bishal Shrestha', 'Male', 'Dhundedhara, Kathmandu', 984794002, 'bishalshrestha@gmail.com', 'bishal09', 'bishalshrestha', 1, 'Dhungedhara, Kathmandu'),
(2, 'Hari Thapa', 'Male', 'Thimi', 9237493248, 'harithapa@gmail.com', 'hari1', 'hari', 1, 'Dhunghedhara'),
(3, 'Biraj Paudel', 'Male', 'Duwakot', 9847512369, 'biraj1@gmail.com', 'biraj12', 'biraj', 3, 'Duwakot');

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `id` int(99) NOT NULL,
  `airportname` text NOT NULL,
  `code` text NOT NULL,
  `type` text NOT NULL,
  `cityname` text NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`id`, `airportname`, `code`, `type`, `cityname`, `state`, `country`) VALUES
(1, 'Tribhuvan International Airport', 'TIA', 'International', 'Ring Rd, Kathmandu 44600', 'Kathmandu', 'Nepal'),
(2, 'Bishal International Airport', 'BIA', 'International', 'Kathmandu', 'Bagmati', 'Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `airtra_balance`
--

CREATE TABLE `airtra_balance` (
  `airtra_balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airtra_balance`
--

INSERT INTO `airtra_balance` (`airtra_balance`) VALUES
(714);

-- --------------------------------------------------------

--
-- Table structure for table `airtra_draft`
--

CREATE TABLE `airtra_draft` (
  `id` int(99) NOT NULL,
  `amount` int(99) NOT NULL,
  `timee` varchar(10) NOT NULL,
  `datee` varchar(10) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `airtra_draft`
--

INSERT INTO `airtra_draft` (`id`, `amount`, `timee`, `datee`, `status`) VALUES
(1, 58, '10:16:38', '2018-02-20', 'Booked'),
(2, 58, '10:20:17', '2018-02-20', 'Cancelled'),
(3, 98, '10:28:33', '2018-02-20', 'Booked');

-- --------------------------------------------------------

--
-- Table structure for table `cabhire`
--

CREATE TABLE `cabhire` (
  `id` int(99) NOT NULL,
  `username` varchar(40) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phnumber` int(15) NOT NULL,
  `pickup` varchar(30) NOT NULL,
  `dropoff` varchar(39) NOT NULL,
  `pickupdate` varchar(10) NOT NULL,
  `pickuptime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabhire`
--

INSERT INTO `cabhire` (`id`, `username`, `address`, `phnumber`, `pickup`, `dropoff`, `pickupdate`, `pickuptime`) VALUES
(1, 'Bishal Shrestha', 'Dhunghedhara', 2147483647, 'kalanki', 'newroad', '2018-01-19', '2018-01-19'),
(2, 'Hari Thapa', 'Thimi', 35235234, 'Thimi', 'newroad', '2018-01-19', '2018-01-19'),
(3, 'Biraj Paudel', 'Duwakot', 23523523, 'Duwakot', 'Thimi', '2018-01-26', '17:06'),
(4, 'Biraj Paudel', 'Duwakot', 2147483647, 'Duwakot', 'newroad', '2018-01-27', '16:56'),
(5, 'Bishal Shrestha', 'Dhunghedhara', 34534534, 'Duwakot', 'Dhunghedhara', '2018-01-26', '16:05'),
(6, 'Bishal Shrestha', 'Dhunghedhara', 2147483647, 'Duwakot', 'Dhunghedhara', '2018-01-26', '17:06');

-- --------------------------------------------------------

--
-- Table structure for table `cancelation`
--

CREATE TABLE `cancelation` (
  `id` int(99) NOT NULL,
  `confirmation_code` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `seatno` varchar(16) NOT NULL,
  `airbus_id` int(99) NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelation`
--

INSERT INTO `cancelation` (`id`, `confirmation_code`, `name`, `email`, `seatno`, `airbus_id`, `reason`) VALUES
(1, '7915bd9b22925f89', 'Hari Thapa', 'hari@gmail.com', 'B101', 14, 'fligt ticket sarai sasto vo ali mahango hunu paryo '),
(23, 'b48b2ada48bb24ad', 'Bishal Shrestha', 'bishalstha88@gmail.com', 'B105', 13, ''),
(24, '45d4b22c145f305c', 'Bibek Shrestha', 'bibek@gmail.com', 'F101', 6, 'Dherai Sasto bho ali mahango chaiyo');

-- --------------------------------------------------------

--
-- Table structure for table `ecash`
--

CREATE TABLE `ecash` (
  `id` int(99) NOT NULL,
  `username` varchar(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecash`
--

INSERT INTO `ecash` (`id`, `username`, `userid`, `password`, `balance`) VALUES
(1, 'bibek1', 'bibek1', 'bibek123', 18750),
(16, 'Bishal Shrestha', 'bishal09', 'bishal123', 70000000),
(18, 'Hari Thapa', 'hari1', 'hari123', 30000),
(20, 'Biraj Paudel', 'biraj1', 'biraj123', 500000),
(22, 'Sita Shrestha', 'sita1', 'sita', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `ecash_confirmation`
--

CREATE TABLE `ecash_confirmation` (
  `id` int(99) NOT NULL,
  `userid` varchar(99) NOT NULL,
  `amount` int(99) NOT NULL,
  `paymentid` varchar(99) NOT NULL,
  `ecash_status` text NOT NULL,
  `datee` varchar(10) NOT NULL,
  `timee` varchar(10) NOT NULL,
  `airtra_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ecash_confirmation`
--

INSERT INTO `ecash_confirmation` (`id`, `userid`, `amount`, `paymentid`, `ecash_status`, `datee`, `timee`, `airtra_status`) VALUES
(1, 'bibek1', 800, '1ea80e3c89b26294', 'Paid', '2018-02-20', '09:46:22', 'Not_Received'),
(2, 'bibek1', 233, '45d4b22c145f305c', 'Paid', '2018-02-20', '10:15:08', 'Received'),
(3, 'bibek1', 392, '84b14e24cf61910b', 'Paid', '2018-02-20', '10:28:01', 'Received');

-- --------------------------------------------------------

--
-- Table structure for table `ecash_reservation`
--

CREATE TABLE `ecash_reservation` (
  `id` int(99) NOT NULL,
  `paymentid` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `userid` varchar(25) NOT NULL,
  `fare` int(255) NOT NULL,
  `airbus_id` int(255) NOT NULL,
  `seat_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `email` varchar(99) NOT NULL,
  `feedback` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `email`, `feedback`) VALUES
(1, 'bibek@gmail.com', 'Great Airlines Reservation System');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `flight_no` varchar(10) NOT NULL DEFAULT '',
  `SheduledDeparture` time DEFAULT NULL,
  `ScheduledArrival` time DEFAULT NULL,
  `From_Airport_id` varchar(10) DEFAULT NULL,
  `To_Airport_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`flight_no`, `SheduledDeparture`, `ScheduledArrival`, `From_Airport_id`, `To_Airport_id`) VALUES
('11', '12:00:00', '14:00:00', '1', '2'),
('22', '16:00:00', '18:00:00', '2', '1'),
('33', '09:00:00', '12:00:00', '3', '1'),
('44', '13:00:00', '16:00:00', '3', '4'),
('55', '01:00:00', '07:00:00', '1', '4'),
('66', '12:00:00', '16:00:00', '3', '4'),
('77', '15:00:00', '21:00:00', '4', '3'),
('88', '13:00:00', '17:00:00', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `flight_instance`
--

CREATE TABLE `flight_instance` (
  `InstanceId` varchar(10) NOT NULL DEFAULT '',
  `ArriveTime` time DEFAULT NULL,
  `DepartTime` time DEFAULT NULL,
  `ArrivalDate` date DEFAULT NULL,
  `DepartureDate` date DEFAULT NULL,
  `Flight_no` varchar(10) DEFAULT NULL,
  `Status` int(5) NOT NULL DEFAULT '1',
  `Fare` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `flight_instance`
--

INSERT INTO `flight_instance` (`InstanceId`, `ArriveTime`, `DepartTime`, `ArrivalDate`, `DepartureDate`, `Flight_no`, `Status`, `Fare`) VALUES
('111', '14:00:00', '12:00:00', '2016-11-22', '2016-11-22', '11', 0, NULL),
('222', '18:00:00', '16:00:00', '2016-11-20', '2016-11-20', '22', 1, NULL),
('223', '21:00:00', '23:00:00', '2016-11-21', '2016-11-21', '22', 0, NULL),
('224', '06:00:00', '01:00:00', '2016-11-30', '2016-11-30', '22', 1, NULL),
('666', '16:00:00', '12:00:00', '2016-11-30', '2016-11-30', '66', 0, 300),
('777', '21:00:00', '15:00:00', '2016-11-24', '2016-11-24', '77', 1, 400),
('888', '17:00:00', '13:00:00', '2016-11-30', '2016-11-30', '88', 1, 700);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `email`, `password`) VALUES
(2, 'Hari Thapa', 'hari@gmail.com', 'a9bcf1e4d7b95a22e2975c812d938889'),
(3, 'Biraj Paudel', 'biraj@gmail.com', 'f0460a53fb91ca2ca4d4854b80b9df66'),
(4, 'Bibek Shrestha', 'bibek@gmail.com', 'b52100c453228b8eadd4a3642fc412f0'),
(5, 'Sita Shrestha', 'sita@gmail.com', '803205ab3f1b9b6fa6990393f5ac6b58'),
(6, 'Buddhi Man Shrestha', 'buddhi@gmail.com', 'ea7a134b8dd35f596ff1ec666c646ab5'),
(8, 'Buddhi Man Shrestha', 'buddhiman@gmail.com', 'ea7a134b8dd35f596ff1ec666c646ab5'),
(9, 'Karuna Rana Magar', 'karuna@gmail.com', 'a4f2862fc3ca436e0068930f68365b81'),
(10, 'Avas Shrestha', 'avas@gmail.com', '88d1d7d6abeb2f04d09b78b8158140da');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(99) NOT NULL,
  `confirmation_code` varchar(255) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `seatno` varchar(16) NOT NULL,
  `airbus_id` int(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `confirmation_code`, `name`, `email`, `seatno`, `airbus_id`) VALUES
(2, '84b14e24cf61910b', 'Bibek Shrestha', 'bibek@gmail.com', 'F102', 8);

-- --------------------------------------------------------

--
-- Table structure for table `seats_availability`
--

CREATE TABLE `seats_availability` (
  `id` int(255) NOT NULL,
  `airbus_id` varchar(25) NOT NULL,
  `seat_no` varchar(25) NOT NULL,
  `status` text NOT NULL,
  `fare` int(10) NOT NULL,
  `airtra_fair` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats_availability`
--

INSERT INTO `seats_availability` (`id`, `airbus_id`, `seat_no`, `status`, `fare`, `airtra_fair`) VALUES
(1, 'A302', 'F101', 'Available', 250, 233),
(2, 'y319', 'F102', 'Booked', 400, 392),
(3, 'A302', 'F103', 'Available', 250, 233),
(4, 'A302', 'F104', 'Available', 250, 233),
(5, 'N980 ', 'F105', 'Available', 650, 600),
(6, 'y319', 'F106', 'Available', 400, 392),
(7, 'N980 ', 'F107', 'Available', 650, 600),
(8, 'A302', 'F108', 'Available', 250, 233),
(9, 'y319', 'F109', 'Available', 400, 392),
(10, 'A302', 'F110', 'Available', 250, 233),
(11, 'A147', 'B101', 'Available', 202, 200),
(12, 'N980 ', 'B102', 'Available', 450, 400),
(13, 'A302', 'B103', 'Available', 200, 192),
(14, 'y319', 'B104', 'Available', 250, 150),
(15, 'M674', 'B105', 'Available', 416, 400),
(16, 'N980 ', 'B106', 'Available', 450, 400),
(17, 'A302', 'B107', 'Available', 200, 192),
(18, 'y319', 'B108', 'Available', 250, 150),
(19, 'M674', 'B109', 'Available', 432, 400),
(20, 'A302', 'B110', 'Available', 200, 192),
(21, 'y319', 'E101', 'Available', 55, 50),
(22, 'A147', 'E102', 'Available', 100, 80),
(23, 'A147', 'E103', 'Available', 100, 80),
(24, 'y319', 'E104', 'Available', 55, 50),
(25, 'M674', 'E105', 'Available', 317, 300),
(26, 'N980 ', 'E106', 'Available', 250, 200),
(27, 'y319', 'E107', 'Available', 55, 50),
(28, 'A302', 'E108', 'Available', 100, 92),
(29, 'y319', 'E109', 'Available', 55, 50),
(30, 'A302', 'E110', 'Available', 100, 92);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(99) NOT NULL,
  `fullname` text NOT NULL,
  `gender` text NOT NULL,
  `phnumber` bigint(15) NOT NULL,
  `email` varchar(35) NOT NULL,
  `address` varchar(35) NOT NULL,
  `state` text NOT NULL,
  `country` text NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `fullname`, `gender`, `phnumber`, `email`, `address`, `state`, `country`, `password`) VALUES
(4, 'Hari Thapa', 'Male', 9841555929, 'hari@gmail.com', 'Thimi', 'Bhaktapur', 'Nepal', 'a9bcf1e4d7b95a22e2975c812'),
(5, 'Biraj Paudel', 'Male', 283438412, 'biraj@gmail.com', 'Duwakot', 'Bhaktapur', 'Nepal', 'f0460a53fb91ca2ca4d4854b8'),
(6, 'Bibek Shrestha', 'Male', 8923748892, 'bibek@gmail.com', 'Dhunghedhara', 'Kathmandu', 'Nepal', 'b52100c453228b8eadd4a3642'),
(7, 'Sita Shrestha', 'Female', 364278432, 'sita@gmail.com', 'Dhunghedhara', 'Kathmandu', 'Nepal', 'sita'),
(10, 'Buddhi Man Shrestha', 'Male', 9779803014722, 'buddhiman@gmail.com', 'Dhunghedhara', 'Kathmandu', 'Nepal', 'buddhi'),
(11, 'Karuna Rana Magar', 'Female', 9923748235, 'karuna@gmail.com', 'Dhunghedhara', 'Kathmandu', 'Nepal', 'karuna'),
(12, 'Avas Shrestha', 'Female', 895692359, 'avas@gmail.com', 'Duwakot', 'Bhaktapur', 'Nepal', 'avas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addflights`
--
ALTER TABLE `addflights`
  ADD PRIMARY KEY (`flight_no`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phnumber` (`phnumber`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `airtra_balance`
--
ALTER TABLE `airtra_balance`
  ADD PRIMARY KEY (`airtra_balance`);

--
-- Indexes for table `airtra_draft`
--
ALTER TABLE `airtra_draft`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cabhire`
--
ALTER TABLE `cabhire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cancelation`
--
ALTER TABLE `cancelation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecash`
--
ALTER TABLE `ecash`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecash_confirmation`
--
ALTER TABLE `ecash_confirmation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecash_reservation`
--
ALTER TABLE `ecash_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`flight_no`),
  ADD KEY `From_Airport_id` (`From_Airport_id`),
  ADD KEY `To_Airport_id` (`To_Airport_id`);

--
-- Indexes for table `flight_instance`
--
ALTER TABLE `flight_instance`
  ADD PRIMARY KEY (`InstanceId`),
  ADD KEY `Flight_no` (`Flight_no`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seats_availability`
--
ALTER TABLE `seats_availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phnumber` (`phnumber`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addflights`
--
ALTER TABLE `addflights`
  MODIFY `flight_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `airtra_draft`
--
ALTER TABLE `airtra_draft`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cabhire`
--
ALTER TABLE `cabhire`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cancelation`
--
ALTER TABLE `cancelation`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `ecash`
--
ALTER TABLE `ecash`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `ecash_confirmation`
--
ALTER TABLE `ecash_confirmation`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ecash_reservation`
--
ALTER TABLE `ecash_reservation`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seats_availability`
--
ALTER TABLE `seats_availability`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
