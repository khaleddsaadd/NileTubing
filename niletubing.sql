-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2021 at 11:19 PM
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
(2, 'Admin2', '111'),
(11, '', ''),
(12, '', ''),
(13, 'Eh', '123'),
(14, '', ''),
(15, '', ''),
(16, '', ''),
(17, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(12) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Mai Magdy', 'mai.m.elghandour@gmail.com', 1281118948, 'mmma'),
(2, 'Mai Magdy', 'mai.m.elghandour@gmail.com', 1281118948, 'qq');

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
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `Name`, `Mobile`, `Email`, `Gender`, `PaymentMethod`, `ID_Ride`, `Date_Time`, `Quantity`, `TotalPrice`) VALUES
(1, 'Khaled ', 11215123, 'mkdn.', '', 'Cash', 1, '2021-06-11 08:00:00', 4, 400),
(2, 'menna', 1154507322, 'mmm', '', 'Cash', 1, '2021-06-11 08:00:00', 1, 100),
(3, 'dmn', 12541, '.sdn .a', '', 'Cash', 1, '2021-06-11 08:00:00', 1, 100),
(4, 'dmn', 12541, '.sdn .a', '', 'Cash', 1, '2021-06-11 08:00:00', 1, 100),
(5, 'k', 255, 'lal', '', 'Cash', 1, '2021-06-11 08:00:00', 1, 100),
(6, 'kah', 552, 'kwk@gmail.com', '', 'Cash', 1, '2021-06-11 08:00:00', 3, 300),
(8, 'ii', 512, 'a', '', 'Cash', 1, '2021-06-11 08:00:00', 3, 300);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `ID_Ride` int(10) NOT NULL,
  `Review` text NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `ID_Ride`, `Review`, `Name`) VALUES
(1, 1, 'amazingggggggggggggggggggggggggggggggggggggggggg', 'Test'),
(2, 1, 'dsad', 'reem'),
(5, 0, '', ''),
(6, 0, 'reem', '123'),
(7, 0, '', ''),
(9, 2, 'Good', 'Khaled'),
(10, 3, 'Great', 'Mai');

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
  `R_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `Name`, `Price`, `Description`, `Image`, `R_Type`) VALUES
(1, 'Single Tubing Ride', 100, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 's.jpeg', 'Single'),
(2, 'Couple Tubing Ride', 150, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'c.jpeg', 'Couple'),
(3, 'Group Tubing Ride', 200, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.\r\n', 'g.jpeg', 'Group');

-- --------------------------------------------------------

--
-- Table structure for table `ridesinfo`
--

CREATE TABLE `ridesinfo` (
  `id` int(11) NOT NULL,
  `rideID` int(11) NOT NULL,
  `rideTime` time NOT NULL,
  `rideDate` date NOT NULL,
  `rideCapacity` int(11) NOT NULL,
  `currentCapacity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ridesinfo`
--

INSERT INTO `ridesinfo` (`id`, `rideID`, `rideTime`, `rideDate`, `rideCapacity`, `currentCapacity`) VALUES
(1, 1, '08:00:00', '2021-06-20', 10, 10),
(2, 1, '09:00:00', '2021-06-23', 10, 10),
(3, 1, '08:15:00', '2021-06-30', 10, 10),
(4, 2, '23:15:00', '2021-06-21', 15, 15),
(5, 2, '20:16:08', '2021-06-21', 15, 15),
(6, 3, '15:00:00', '2021-07-01', 20, 20),
(7, 3, '13:00:00', '2021-07-09', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `video` varbinary(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminaccounts`
--
ALTER TABLE `adminaccounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ridesinfo`
--
ALTER TABLE `ridesinfo`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ridesinfo`
--
ALTER TABLE `ridesinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
