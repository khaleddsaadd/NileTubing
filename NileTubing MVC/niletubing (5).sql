-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 02:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `niletubing`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminaccounts`
--

CREATE TABLE `adminaccounts` (
  `id` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminaccounts`
--

INSERT INTO `adminaccounts` (`id`, `username`, `password`) VALUES
(1, 'Admin1', '123'),
(2, 'Admin2', '111');

-- --------------------------------------------------------

--
-- Table structure for table `capacityofslot`
--

CREATE TABLE `capacityofslot` (
  `ID` int(11) NOT NULL,
  `ID_Ride` int(10) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `TimeSlot` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL,
  `Type` varchar(10) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Name`, `Price`, `Description`, `Image`, `Type`, `Capacity`, `Date_Time`) VALUES
(1, 'Bird watch', 390, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'bird.png', 'Event', 10, '2021-06-23 20:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `Name`, `Image`) VALUES
(1, 'Home', 'indexStart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `Name` varchar(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` text NOT NULL,
  `Image` blob NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `Start_Date` datetime NOT NULL,
  `End_Dare` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Mobile` int(15) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `PaymentMethod` varchar(15) NOT NULL,
  `ID_Ride` int(11) NOT NULL,
  `Date_Time` datetime NOT NULL,
  `Quantity` int(10) NOT NULL,
  `TotalPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `ID_Ride` int(10) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `Review` text NOT NULL,
  `Rating` int(5) NOT NULL,
  `Name` varchar(15) NOT NULL,
  `Date_Time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL,
  `R_Type` varchar(15) NOT NULL,
  `Capacity` int(10) NOT NULL,
  `Time Slots` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `Name`, `Price`, `Description`, `Image`, `R_Type`, `Capacity`, `Time Slots`) VALUES
(1, 'Single Tubing Ride', 100, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'single.jpg', 'Single', 10, '0000-00-00 00:00:00'),
(2, 'Couple Tubing Ride', 150, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'couple.jpg', 'Couple', 0, '0000-00-00 00:00:00'),
(3, 'Group Tubing Ride', 200, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'group.jpg', 'Group', 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `video`) VALUES
(1, 'Home', 'vidTest');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capacityofslot`
--
ALTER TABLE `capacityofslot`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rides`
--
ALTER TABLE `rides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `capacityofslot`
--
ALTER TABLE `capacityofslot`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
