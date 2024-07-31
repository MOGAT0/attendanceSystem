-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2024 at 06:31 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendancesystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `Program` varchar(255) DEFAULT NULL,
  `super_user` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `teacher` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `email`, `password`, `student_id`, `firstname`, `middlename`, `lastname`, `Program`, `super_user`, `date`, `subject`, `section`, `teacher`) VALUES
(1, 'john@email.com', 'qwerty', NULL, 'John', 'foo', 'Doe', NULL, '1', NULL, 'ITE 314: Advanced Database Systems', 'FB1-BSIT3-3', NULL),
(2, 'herold@gamil.com', 'melmel098', '09-3123-1232', 'Herold mel', 'D.', 'Delsolor', 'bs-hospitality-management', NULL, NULL, 'ITE 314: Advanced Database Systems', 'FB1-BSIT3-3', NULL),
(3, 'herold@gamil.com', NULL, '09-3123-1232', 'Herold mel', 'D.', 'Delsolor', '', NULL, '2024-07-31', NULL, NULL, '1'),
(6, 'herold@gamil.com', NULL, '09-3123-1232', 'Herold mel', 'D.', 'Delsolor', '', NULL, '2024-07-17', NULL, NULL, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
