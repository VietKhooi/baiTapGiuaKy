-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 05:18 PM
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
-- Database: `qlsv_nguyenvietkhoi`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_student`
--

CREATE TABLE `table_student` (
  `id` int(50) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `gender` int(10) NOT NULL,
  `hometown` varchar(255) NOT NULL,
  `level_id` int(20) NOT NULL,
  `group_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_student`
--

INSERT INTO `table_student` (`id`, `full_name`, `dob`, `gender`, `hometown`, `level_id`, `group_id`) VALUES
(1, 'Nguyen Viet Khoi', '2005-10-30', 1, 'Ha Noi', 3, 9),
(2, 'Nguyen Huu Huy', '2024-12-02', 1, 'Ha Dong', 3, 9),
(3, 'Nguyen Van Loi', '2024-12-03', 1, 'Ha Nam', 3, 9),
(4, 'Nguyen Van Bang', '2024-12-04', 1, 'Ha Noi', 3, 9),
(5, 'Giap Ngoc Duy Anh', '2024-12-05', 1, 'Ha Noi', 3, 9),
(6, 'Truonng Minh Son', '2024-12-06', 1, 'Ha Noi', 3, 9),
(7, 'Nguyen Ngoc Phuoc', '2024-12-01', 1, 'Ha Nam', 3, 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
