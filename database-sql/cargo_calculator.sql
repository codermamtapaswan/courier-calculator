-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 11:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargo_calculator`
--

-- --------------------------------------------------------

--
-- Table structure for table `charges_table`
--

CREATE TABLE `charges_table` (
  `id` int(11) NOT NULL,
  `pick_up_pin_code` int(11) NOT NULL,
  `destination` varchar(30) NOT NULL,
  `pacakage_type` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `dimensions` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `charges` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `get_charges`
--

CREATE TABLE `get_charges` (
  `id` int(11) NOT NULL,
  `pick-up-pin-code` int(11) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `package-type` varchar(50) NOT NULL,
  `weight` float NOT NULL,
  `dimensions` varchar(50) NOT NULL,
  `charges` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `get_charges`
--

INSERT INTO `get_charges` (`id`, `pick-up-pin-code`, `destination`, `package-type`, `weight`, `dimensions`, `charges`) VALUES
(14, 0, 'destination', 'package-type', 0, 'dimensions', 0),
(15, 110056, 'Delhi', 'Document', 1.4, '4,5,8', 345),
(16, 110023, 'Mumbai', 'Document', 12, '4,5,9', 345),
(17, 110056, 'Chennai', 'Parcel (Non Document)', 3, '4,5,10', 345),
(18, 110058, 'Gujrat', 'Medicines', 4, '4,5,11', 678),
(19, 110045, 'Delhi', 'Cosmetics Items', 4, '4,5,12', 678),
(20, 110036, 'Delhi', 'Document', 44.8, '4,5,13', 687),
(21, 110085, 'Delhi', 'Document', 566, '4,5,14', 890),
(22, 110032, 'Delhi', 'Document', 7, '4,5,15', 890),
(23, 110055, 'Delhi', 'Document', 7, '4,5,16', 345),
(24, 110089, 'Delhi', 'Document', 7, '4,5,17', 890),
(25, 110056, 'Delhi', 'Document', 78, '4,5,18', 390);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `charges_table`
--
ALTER TABLE `charges_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_charges`
--
ALTER TABLE `get_charges`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `charges_table`
--
ALTER TABLE `charges_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `get_charges`
--
ALTER TABLE `get_charges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
