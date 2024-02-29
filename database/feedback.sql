-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2024 at 04:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'edseljaygundran@student.dmmmsu.edu.ph', 'ILOVEDMMSU');

-- --------------------------------------------------------

--
-- Table structure for table `compform`
--

CREATE TABLE `compform` (
  `comp_id` int(11) NOT NULL,
  `stud_id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `complaint` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compform`
--

INSERT INTO `compform` (`comp_id`, `stud_id`, `name`, `complaint`) VALUES
(1, '201-1682-2', 'DJ Javillonar', 'i love dmmmsu'),
(2, '201-1682-2', 'DJ Javillonar', 'HEllo'),
(3, '201-1682-2', 'DJ Javillonar', 'qfqfqfq'),
(4, '201-1663-2', 'XJ Orpilla', 'gegegeg'),
(5, '201-1682-2', 'David Justine Javillonar', 'Hello, I like to complain about the trash going around the CIT building, it has a foul smell, it not very good for the surrounding area when having our class. \r\n'),
(6, '201-1682-2', 'David Justine Javillonar', 'hfnifneijnijnvijnvjienijnrij  ivniejvnijvnrijvrnij i vij3 fijfnifni3nfije fijfn3infni3jnfij3nfij');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feed_id` int(11) NOT NULL,
  `message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feed_id`, `message`) VALUES
(1, 'ffff'),
(2, 'gegegegeg'),
(3, 'ddddddd'),
(4, ''),
(5, 'd'),
(6, 'sssss'),
(7, 'd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compform`
--
ALTER TABLE `compform`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feed_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `compform`
--
ALTER TABLE `compform`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
