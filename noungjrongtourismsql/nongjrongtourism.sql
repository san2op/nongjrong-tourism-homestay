-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 05:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nongjrongtourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregister`
--

CREATE TABLE `adminregister` (
  `admin_id` int(33) NOT NULL,
  `email` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminregister`
--

INSERT INTO `adminregister` (`admin_id`, `email`, `password`) VALUES
(9, 'koi', 'koi'),
(22, 'sankupar@gmail.com', '12345678'),
(1122, 'hello@gmail.com', 'hello'),
(3333, 'huhu@gmail.com', 'huhu');

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `homenumber` int(11) NOT NULL,
  `facilities` varchar(55) NOT NULL,
  `owner_contact` varchar(55) NOT NULL,
  `reservation_number` int(55) NOT NULL,
  `cottage_name` varchar(55) NOT NULL,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homestay`
--

INSERT INTO `homestay` (`homenumber`, `facilities`, `owner_contact`, `reservation_number`, `cottage_name`, `status`) VALUES
(2, 'all,non,hew', '98989898986', 2, 'blessyou', 'not available'),
(5, 'food,parking', '67094797978', 5, 'mrs.bibishelda cottage', 'avalable');

-- --------------------------------------------------------

--
-- Table structure for table `managerregister`
--

CREATE TABLE `managerregister` (
  `manager_id` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managerregister`
--

INSERT INTO `managerregister` (`manager_id`, `email`, `password`) VALUES
(1122, 'hello@gmail.com', 'hello'),
(1335, 'hehe@gmail.com', 'hehe'),
(3333, 'huhu@gmail.com', 'huhu');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` int(50) NOT NULL,
  `name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `name`, `password`, `nationality`, `gender`, `date_of_birth`) VALUES
(17, 'rose@gmail.com', 'rose', 'india', 'female', '1994-09-05'),
(19, 'com', 'com', 'com', 'female', '0000-00-00'),
(21, 'huhu@gmail.com', 'huhu', 'huhu', 'female', '2023-05-10'),
(22, 'hello@gmail.com', 'hello', 'hello', 'female', '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_no` int(100) NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `phone` varchar(55) NOT NULL,
  `adult` int(55) NOT NULL,
  `children` int(55) NOT NULL,
  `room_pref` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregister`
--
ALTER TABLE `adminregister`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`homenumber`);

--
-- Indexes for table `managerregister`
--
ALTER TABLE `managerregister`
  ADD PRIMARY KEY (`manager_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregister`
--
ALTER TABLE `adminregister`
  MODIFY `admin_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3334;

--
-- AUTO_INCREMENT for table `homestay`
--
ALTER TABLE `homestay`
  MODIFY `homenumber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `userid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
