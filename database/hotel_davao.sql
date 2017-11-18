-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2017 at 11:56 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_davao`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `username`, `password`) VALUES
(1, 'admin1', ' admin1'),
(2, 'admin2', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `mobile_number` varchar(13) NOT NULL,
  `address` varchar(60) NOT NULL,
  `email_add` varchar(40) NOT NULL,
  `valid_idnum` varchar(25) NOT NULL,
  `valid_idnum_type` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `first_name`, `last_name`, `gender`, `mobile_number`, `address`, `email_add`, `valid_idnum`, `valid_idnum_type`) VALUES
(1, 'Jap', 'Francis', 'Male', '09010', 'Sasa, Davao', 'jerrydomingo68@yahoo.com', '321-32', 'GSIS');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_list`
--

CREATE TABLE `reservation_list` (
  `customer_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_checkin` date NOT NULL,
  `room_checkout` date NOT NULL,
  `reserve_id` int(11) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `payment_total` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_list`
--

INSERT INTO `reservation_list` (`customer_id`, `room_number`, `room_checkin`, `room_checkout`, `reserve_id`, `reservation_date`, `payment_total`) VALUES
(1, 101, '2017-11-18', '2017-11-19', 1, '2017-11-18 16:19:28', 2150);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_type_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_availability` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_type_id`, `room_number`, `room_availability`) VALUES
(1, 101, 'available'),
(1, 102, 'available'),
(1, 103, 'available'),
(1, 104, 'available'),
(1, 105, 'available'),
(2, 201, 'available'),
(2, 202, 'available'),
(2, 203, 'available'),
(2, 204, 'available'),
(2, 205, 'available'),
(3, 301, 'available'),
(3, 302, 'available'),
(3, 303, 'available'),
(3, 304, 'available'),
(3, 305, 'available');

-- --------------------------------------------------------

--
-- Table structure for table `room_types`
--

CREATE TABLE `room_types` (
  `room_type_id` int(11) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `room_price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_types`
--

INSERT INTO `room_types` (`room_type_id`, `room_type`, `room_price`) VALUES
(1, 'Suite', 2150),
(2, 'Standard', 1450),
(3, 'Deluxe', 1850);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD PRIMARY KEY (`reserve_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_number`);

--
-- Indexes for table `room_types`
--
ALTER TABLE `room_types`
  ADD PRIMARY KEY (`room_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
