-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 07:50 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- 
-- Database: `plus91`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `dob` date NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(150) NOT NULL,
  `state` varchar(150) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `dob`, `age`, `address`, `city`, `state`, `date_added`) VALUES
(1, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(2, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17'),
(3, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(4, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17'),
(5, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(6, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17'),
(7, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(8, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17'),
(9, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(10, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17'),
(11, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(12, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17'),
(13, 'Venkaiah Chowdary Koppaka', '1997-04-22', 24, '16-138, Moula Nagar', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:25:15'),
(14, 'Gopala Krishna Raavi', '1989-07-01', 32, 'RGK Enclave', 'Vijaywada', 'Andhra Pradesh', '2021-07-01 16:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
