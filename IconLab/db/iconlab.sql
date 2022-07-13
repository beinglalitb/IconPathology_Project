-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2021 at 10:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iconlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `pu_id` int(11) NOT NULL,
  `sb_id` int(11) NOT NULL,
  `p_amt` int(11) NOT NULL,
  `p_mode` varchar(255) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `s_name`) VALUES
(1, 'Online appointment'),
(2, 'Book_Home_visit');

-- --------------------------------------------------------

--
-- Table structure for table `service_booking`
--

CREATE TABLE `service_booking` (
  `sb_id` int(11) NOT NULL,
  `sbu_id` int(11) NOT NULL,
  `sbs_id` int(11) NOT NULL,
  `sb_name` varchar(255) NOT NULL,
  `sb_address` varchar(255) NOT NULL,
  `sb_phno` varchar(10) NOT NULL,
  `sb_gender` varchar(6) NOT NULL,
  `Test` varchar(255) NOT NULL,
  `Time` varchar(255) NOT NULL,
  `sb_date` date NOT NULL,
  `isPaid` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_booking`
--

INSERT INTO `service_booking` (`sb_id`, `sbu_id`, `sbs_id`, `sb_name`, `sb_address`, `sb_phno`, `sb_gender`, `Test`, `Time`, `sb_date`, `isPaid`) VALUES
(5, 1, 2, 'Lalit badgujar', 'Pimple gurav\r\nShree datta paradise', '9876543210', 'Male', 'INSULIN', '2.00 pm', '2021-07-23', 0),
(6, 1, 1, 'Lalit badgujar', 'Pimple gurav\r\nShree datta paradise', '9876543210', 'Male', 'CHOLESTROL', '4.00 pm', '2021-05-30', 0),
(7, 1, 1, 'Somnath', 'Gharat', '9876543210', 'Female', 'ECG', '3.30 pm', '2021-05-30', 0),
(8, 2, 1, 'somnath', 'Sudarshan Nagar', '9764182087', 'Male', 'COVID RTPCR', '4.00 pm', '2021-06-18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `t_id` int(11) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`t_id`, `t_name`, `t_price`) VALUES
(8, 'COVID RTPCR', 1200),
(9, 'ECG', 300),
(10, 'AMMONIA', 650),
(11, 'CHOLESTROL', 700),
(12, 'INSULIN', 170);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `is_Admin` tinyint(4) NOT NULL DEFAULT 0,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_email`, `u_pass`, `is_Admin`, `time_stamp`) VALUES
(1, 'lalit11@gmail.com', '$2y$10$yO/mv7X6TK0Mg5.rcopbje1V7Bt7eVkU3aGLkoTq02ChHpIO1or.q', 0, '2021-05-26 05:48:52'),
(2, 'somya11@gmail.com', '$2y$10$cSYQbgVhnObRJwAVSQk.hejupHvspAqmoZT7Ijq6GJ4gacie3C0MW', 0, '2021-05-27 13:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `u_test`
--

CREATE TABLE `u_test` (
  `tu_id` int(11) NOT NULL,
  `tt_id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `pu_id` (`pu_id`),
  ADD KEY `sb_id` (`sb_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `service_booking`
--
ALTER TABLE `service_booking`
  ADD PRIMARY KEY (`sb_id`),
  ADD KEY `sbu_id` (`sbu_id`),
  ADD KEY `sbs_id` (`sbs_id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `u_test`
--
ALTER TABLE `u_test`
  ADD KEY `tu_id` (`tu_id`),
  ADD KEY `tt_id` (`tt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `service_booking`
--
ALTER TABLE `service_booking`
  MODIFY `sb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `pu_id` FOREIGN KEY (`pu_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sb_id` FOREIGN KEY (`sb_id`) REFERENCES `service_booking` (`sb_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `u_test`
--
ALTER TABLE `u_test`
  ADD CONSTRAINT `tt_id` FOREIGN KEY (`tt_id`) REFERENCES `test` (`t_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tu_id` FOREIGN KEY (`tu_id`) REFERENCES `user` (`u_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
