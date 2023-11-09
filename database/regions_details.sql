-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2023 at 01:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `regions_details`
--

-- --------------------------------------------------------

--
-- Table structure for table `ilocosnorte`
--

CREATE TABLE `ilocosnorte` (
  `id` int(10) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Alienable` varchar(100) NOT NULL,
  `Forest` varchar(100) NOT NULL,
  `districts` varchar(100) NOT NULL,
  `cities` varchar(100) NOT NULL,
  `municipalities` varchar(100) NOT NULL,
  `barangays` varchar(100) NOT NULL,
  `Farmers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilocosnorte`
--

INSERT INTO `ilocosnorte` (`id`, `Area`, `Alienable`, `Forest`, `districts`, `cities`, `municipalities`, `barangays`, `Farmers`) VALUES
(1, '339,934', '144,948', '194,986', '2', '2', '21', '557', '87,963');

-- --------------------------------------------------------

--
-- Table structure for table `ilocossur`
--

CREATE TABLE `ilocossur` (
  `id` int(10) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Alienable` varchar(100) NOT NULL,
  `Forest` varchar(100) NOT NULL,
  `districts` varchar(100) NOT NULL,
  `cities` varchar(100) NOT NULL,
  `municipalities` varchar(100) NOT NULL,
  `barangays` varchar(100) NOT NULL,
  `Farmers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ilocossur`
--

INSERT INTO `ilocossur` (`id`, `Area`, `Alienable`, `Forest`, `districts`, `cities`, `municipalities`, `barangays`, `Farmers`) VALUES
(1, '257,958', '138,412', '119,546', '2', '2', '32', '768', '89,816');

-- --------------------------------------------------------

--
-- Table structure for table `launion`
--

CREATE TABLE `launion` (
  `id` int(10) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Alienable` varchar(100) NOT NULL,
  `Forest` varchar(100) NOT NULL,
  `districts` varchar(100) NOT NULL,
  `cities` varchar(100) NOT NULL,
  `municipalities` varchar(100) NOT NULL,
  `barangays` varchar(100) NOT NULL,
  `Farmers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `launion`
--

INSERT INTO `launion` (`id`, `Area`, `Alienable`, `Forest`, `districts`, `cities`, `municipalities`, `barangays`, `Farmers`) VALUES
(1, '149,770', '120,307', '29,002', '2', '1', '19', '576', '73,776');

-- --------------------------------------------------------

--
-- Table structure for table `pangasinan`
--

CREATE TABLE `pangasinan` (
  `id` int(10) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Alienable` varchar(100) NOT NULL,
  `Forest` varchar(100) NOT NULL,
  `districts` varchar(100) NOT NULL,
  `cities` varchar(100) NOT NULL,
  `Farmers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pangasinan`
--

INSERT INTO `pangasinan` (`id`, `Area`, `Alienable`, `Forest`, `districts`, `cities`, `Farmers`) VALUES
(1, '536,818', '406,395', '130,423', '6', '4', '207,084');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ilocosnorte`
--
ALTER TABLE `ilocosnorte`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ilocossur`
--
ALTER TABLE `ilocossur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `launion`
--
ALTER TABLE `launion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pangasinan`
--
ALTER TABLE `pangasinan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ilocosnorte`
--
ALTER TABLE `ilocosnorte`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ilocossur`
--
ALTER TABLE `ilocossur`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `launion`
--
ALTER TABLE `launion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pangasinan`
--
ALTER TABLE `pangasinan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
