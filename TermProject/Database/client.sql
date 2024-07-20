-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 03:08 PM
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
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_info`
--

CREATE TABLE `client_info` (
  `client_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `area_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_info`
--

INSERT INTO `client_info` (`client_id`, `email`, `address`, `city`, `province`, `area_code`) VALUES
(996, 'rishabh.watts908@gmail.com', '23 Mill St South', 'Brampton', 'Ontario', 'L6W 2G7'),
(997, 'rishabh.watts908@gmail.com', '23 Mill St South', 'Brampton', 'Ontario', 'L6W 2G7'),
(998, 'rishabh.watts908@gmail.com', '<script> alert(\"You got robbed\");<script>', 'Brampton', 'Ontario', 'L6W 2G7'),
(999, 'www.rishiwatt@gmail.com', '<script> alert(\"You got robbed\");<script>', 'Brampton', 'Ontario', 'L6W 2G7'),
(1000, 'www.rishiwatt@gmail.com', '<script> alert(\"You got robbed\");<script>', 'Brampton', 'Ontario', 'L6W 2G7'),
(1001, 'www.rishiwatt@gmail.com', '<script> alert(\"You got robbed\"); </script>', 'Brampton', 'Ontario', 'L6W 2G7'),
(1002, 'rishabh.watts908@gmail.com', '<script>alert(\"You got robbed\");</script>', 'Brampton', 'Ontario', ''),
(1003, '', '<script>alert(\"You got robbed\");</script>', '', 'Choose...', '');

-- --------------------------------------------------------

--
-- Table structure for table `lab9and10`
--

CREATE TABLE `lab9and10` (
  `client_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `AreaCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lab9and10`
--

INSERT INTO `lab9and10` (`client_id`, `email`, `password`, `Address`, `City`, `Province`, `AreaCode`) VALUES
(1, 'test@mail.com', 'password', '', '', '', ''),
(2, '', '', '', '', '', ''),
(3, '', '', '', '', '', ''),
(4, '', '', '', '', '', ''),
(5, '$email', '$password', '$address', '$city', '$province', '$area_code'),
(6, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `client_id` int(50) NOT NULL,
  `firstName` text NOT NULL,
  `lastName` text NOT NULL,
  `email` text NOT NULL,
  `company` text NOT NULL,
  `password` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `province` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`client_id`, `firstName`, `lastName`, `email`, `company`, `password`, `address`, `city`, `province`) VALUES
(1, 'rishabh', 'watts', 'mail@test.com', 'rp enterpise', 'sea', '22b baker street', 'brampton', 'ontario'),
(5, 'Rishabh', 'Watts', 'www.rishiwatt@gmail.com', 'The Source', '$2y$10$Mh0TUHTP8pav8Iq6P.5ggOkN7RXy49SaGh1u45AOWC1YZgDVXVjc2', '2 Core Cres', 'Brampton', 'Ontario'),
(6, 'Rishabh', 'Watts', 'rishabh.watts908@gmail.com', 'The Source', '$2y$10$dAC7oQ2OFEVeRjjqeShyROoEtvgvx/RlCqz0JpKwkD6HX5hazsQZK', '2 Core Cres', 'Brampton', 'Ontario'),
(7, 'kara', 'denvers', 'kd@gmail.com', 'KD', '$2y$10$wAf9Emqgy1PyxLM/478.3e1X44l8GOorAnkrdGRoXzpO4CJKqLslS', 'Main St', 'Oshawa', 'Yukon'),
(8, 'Rishabh', 'Watts', 'www.rishiwatt@gmail.com', 'KD', '$2y$10$LIVuaS8Ccn.D3ZV.0mLibu6UeAy9xAGKjA01F4up17gKP8jGXHvre', '2 Core Cres', 'Brampton', 'Ontario'),
(9, 'Rishabh', 'Watts', 'mail@hotmail.com', '', '$2y$10$bLeUP04Es2yoX7k83d7Dduud5UqUW2e.5ZBMO0dt3iX/tm.Z73ahW', '2 Core Cres', 'Brampton', 'Ontario'),
(10, 'Parneet ', 'Kaur', 'parneetk906@gmail.com', 'Parii', '$2y$10$K/lG42Djq5P7Uac9Njdc0u112XzBw.J7J6LJ4sL3RtpQ/nW92U8tW', '734 Activa Avenue', 'Kitchener', 'Ontario'),
(11, 'Shift', 'Wilson', 'shiftwilson@gmail.com', '', '$2y$10$1vpZTEJ3lV6AkvIU1BIyQ.cgEy.SuWfnMVJqu0jRn8uedXrv7mvre', '', '', 'Choose...'),
(12, 'Shift', 'Wilson', 'shiftwilson@gmail.com', '', '$2y$10$UXx8YmeGKq0hv49uwKXaIOwY6/MiYMIAraJbhtd6Kz/4o4XcRFpTK', '', '', 'Choose...'),
(13, 'Shift', 'Wilson', 'shiftwilson@gmail.com', '', '$2y$10$yM.EkxNwEWcZOQ4TCOT0qu.RoF/AvznbX2dS2i3x16eErAauZpmci', '', '', 'Choose...'),
(14, 'Sujal', 'Joshi', 'joshisujal@gmail.com', '', '$2y$10$UxhhxhPx6DK.lxQiKFCTFOlcjd5AR1aMdFZfYjWRP6Jz27wG/F8CO', '', '', 'Choose...'),
(15, 'Daniel', 'Bryan', 'dbrayan@gmail.com', 'WWE', '$2y$10$RKhOCOib.SDJzUx2EXFApelV9dTvn86e3wfK2V6qjqWTvHdmgWebm', '24 Aberdeen Street', 'Washington', 'British Columbia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_info`
--
ALTER TABLE `client_info`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `lab9and10`
--
ALTER TABLE `lab9and10`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`client_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_info`
--
ALTER TABLE `client_info`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1004;

--
-- AUTO_INCREMENT for table `lab9and10`
--
ALTER TABLE `lab9and10`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `client_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
