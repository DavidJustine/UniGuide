-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2024 at 01:19 AM
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
-- Database: `uniguide`
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
(1, 'edseljaygundran@student.dmmmsu.edu.ph', 'ILOVEDMMSU'),
(2, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `compform`
--

CREATE TABLE `compform` (
  `comp_id` int(11) NOT NULL,
  `stud_id` varchar(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `complaint` varchar(300) NOT NULL,
  `status` enum('pending','replied') DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compform`
--

INSERT INTO `compform` (`comp_id`, `stud_id`, `name`, `complaint`, `status`) VALUES
(1, '201-1682-2', 'DJ Javillonar', 'i love dmmmsu', 'replied'),
(2, '201-1682-2', 'DJ Javillonar', 'HEllo', 'replied'),
(3, '201-1682-2', 'DJ Javillonar', 'qfqfqfq', 'pending'),
(4, '201-1663-2', 'XJ Orpilla', 'gegegeg', 'pending'),
(5, '201-1682-2', 'David Justine Javillonar', 'Hello, I like to complain about the trash going around the CIT building, it has a foul smell, it not very good for the surrounding area when having our class. \r\n', 'replied'),
(6, '201-1682-2', 'David Justine Javillonar', 'hfnifneijnijnvijnvjienijnrij  ivniejvnijvnrijvrnij i vij3 fijfnifni3nfije fijfn3infni3jnfij3nfij', 'replied'),
(7, '201-1111-1', 'John Doe', ' Personally, it feels like a constant struggle to keep up with the never-ending stream of assignments. It seems like every subject piles on work without considering the limited time available for personal life and other interests.', 'pending'),
(8, '201-1111-1', 'John Doe', 'From unclear announcements to sudden changes in plans, it\'s frustrating to navigate the school\'s communication chaos. Personally, it often leaves me feeling confused and out of the loop.', 'pending'),
(9, '201-1111-1', 'John Doe', ' In the sea of students, I can\'t help but feel like just another face in the crowd. Personally, I wish there was more individual attention from teachers, especially in those larger classes where it\'s easy to get lost.', 'pending'),
(10, '201-1111-1', 'John Doe', 'Personally, dealing with the social scene at school can be tough. Whether it\'s facing bullying, feeling left out, or navigating through cliques, the social pressures make the whole experience more challenging.', 'replied'),
(11, '201-1111-1', 'John Doe', 'Personally, it\'s disheartening to study in classrooms with worn-out furniture or use outdated technology. Limited access to modern facilities makes me wish for a more conducive learning environment.', 'replied');

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
(1, 'Clear and Concise: The handbook provides information in a clear and concise manner, making it easy to understand and follow.'),
(2, 'User-Friendly Design: The user-friendly layout enhances the overall experience, making it simple to navigate and locate relevant information.'),
(3, 'Interactive Elements: The incorporation of interactive elements, such as links and clickable sections, adds a dynamic touch and enhances engagement.'),
(4, 'The use of graphics and illustrations not only breaks up the text but also adds visual appeal, making the handbook more enjoyable to read.'),
(5, 'If applicable, improving the search function within the handbook would allow users to quickly find specific information, contributing to a more efficient user experience.'),
(6, 'Ensure the handbook is accessible to users with diverse needs. Implement features such as alt text for images and consider compatibility with screen readers for a more inclusive user experience.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `student_id` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`student_id`, `username`, `password`, `role`) VALUES
('201-1682-2', 'David Justine ', '123', 'MLUC student'),
('201-1663-2', 'X\'tynn J\'ann', '321', 'MLUC student'),
('102-1111-1', 'John Doe', '123', 'NLUC student'),
('302', 'Doe John', '123', 'SLUC student'),
('102-3333-1', 'Don Mar', '123', 'NLUC student'),
('301-3333-3', 'Harley Mario', '123', 'SLUC student');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `visit_id` int(11) NOT NULL,
  `user_id` varchar(10) DEFAULT NULL,
  `role` enum('NLUC student','MLUC student','SLUC student','Guest') DEFAULT NULL,
  `visit_timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`visit_id`, `user_id`, `role`, `visit_timestamp`) VALUES
(1, '201', 'MLUC student', '2024-02-27 13:50:17'),
(2, NULL, 'Guest', '2024-02-27 13:51:29'),
(3, '201', 'MLUC student', '2024-02-27 13:53:49'),
(4, '201', 'MLUC student', '2024-02-27 13:58:13'),
(5, '0', 'NLUC student', '2024-02-27 14:00:01'),
(6, '0', 'SLUC student', '2024-02-27 14:05:44'),
(7, '201', 'MLUC student', '2024-02-28 13:15:12'),
(8, NULL, 'Guest', '2024-02-28 13:15:21'),
(9, NULL, 'Guest', '2024-02-28 13:47:50'),
(10, '0', 'NLUC student', '2024-02-28 15:00:53'),
(11, '0', 'SLUC student', '2024-02-28 15:02:14');

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
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`visit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compform`
--
ALTER TABLE `compform`
  MODIFY `comp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `visit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
