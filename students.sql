-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2024 at 12:29 PM
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
-- Database: `student_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `srno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `father` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `Std` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `srno`, `name`, `father`, `mobile`, `Std`, `created_at`, `updated_at`) VALUES
(1002, 102, 'Rohit kashyap', 'Father B', '1234567002', 'std-13', '2024-06-07 07:22:25', '2024-07-10 04:45:26'),
(1003, 103, 'Student 1C', 'Father C', '1234567003', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1004, 104, 'Student 1D', 'Father D', '1234567004', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1005, 105, 'Student 1E', 'Father E', '1234567005', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1006, 106, 'Student 1F', 'Father F', '1234567006', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1007, 107, 'Student 1G', 'Father G', '1234567007', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1008, 108, 'Student 1H', 'Father H', '1234567008', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1009, 109, 'Student 1I', 'Father I', '1234567009', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1010, 110, 'Student 1J', 'Father J', '1234567010', 'std-1', '2024-06-07 07:22:25', '2024-06-07 07:22:25'),
(1011, 111, 'Student 2A', 'Father A', '1234567011', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1012, 112, 'Student 2B', 'Father B', '1234567012', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1013, 113, 'Student 2C', 'Father C', '1234567013', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1014, 114, 'Student 2D', 'Father D', '1234567014', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1015, 115, 'Student 2E', 'Father E', '1234567015', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1016, 116, 'Student 2F', 'Father F', '1234567016', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1017, 117, 'Student 2G', 'Father G', '1234567017', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1018, 118, 'Student 2H', 'Father H', '1234567018', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1019, 119, 'Student 2I', 'Father I', '1234567019', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1020, 120, 'Student 2J', 'Father J', '1234567020', 'std-2', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1021, 121, 'Student 3A', 'Father A', '1234567021', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1022, 122, 'Student 3B', 'Father B', '1234567022', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1023, 123, 'Student 3C', 'Father C', '1234567023', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1024, 124, 'Student 3D', 'Father D', '1234567024', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1025, 125, 'Student 3E', 'Father E', '1234567025', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1026, 126, 'Student 3F', 'Father F', '1234567026', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1027, 127, 'Student 3G', 'Father G', '1234567027', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1028, 128, 'Student 3H', 'Father H', '1234567028', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1029, 129, 'Student 3I', 'Father I', '1234567029', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1030, 130, 'Student 3J', 'Father J', '1234567030', 'std-3', '2024-06-07 08:11:05', '2024-06-07 08:11:05'),
(1031, 10010, 'kabir', 'abc', '7464805709', 'std-3', '2024-07-10 04:49:40', '2024-07-10 04:49:40'),
(1032, 10012, 'kabir rajbhar', 'abc', '7464805709', 'std-3', '2024-07-10 04:51:44', '2024-07-10 04:51:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1033;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
