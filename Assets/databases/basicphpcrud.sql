-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 13, 2025 at 05:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `basicphpcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `user_id` varchar(20) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `bio` text DEFAULT NULL,
  `user_type` enum('user','admin') NOT NULL DEFAULT 'user',
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`user_id`, `firstname`, `email`, `contact`, `address`, `bio`, `user_type`, `admin_name`, `admin_password`, `image_path`, `image_name`, `lastname`) VALUES
('prof001', 'Ahmed', 'ahmedtahiri.webdev@gmail.com', '03135554563', 'Hospital Road, Chakwal, Punjab, Pakistan', 'Hello, My self Muhammad Ahmed Tahiri.\r\nI am full stack web developer.', 'admin', 'ahmed', '$2y$10$pj8/hsf4CR1BRQ6FtAtZAuFrIbsr7jmUAwWHbn99IEPInvO59xDKm', 'uploads/IMG_5019 Copy.jpg', 'E:\\xampp\\tmp\\phpE40F.tmp', 'Tahiri'),
('prof002', 'Usman', 'ali@gmail.com', '2131231211', 'adsdsadas', 'adadas', 'user', '', '', 'uploads/IMG_5075.jpg', 'E:\\xampp\\tmp\\php826E.tmp', 'Ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
