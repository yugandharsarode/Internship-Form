-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 03:24 AM
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
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `Sr No` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `college` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `college_id` varchar(20) NOT NULL,
  `id_pic` varchar(255) NOT NULL,
  `percentage` int(10) NOT NULL,
  `pc` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `interest` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`Sr No`, `name`, `college`, `email`, `phone`, `college_id`, `id_pic`, `percentage`, `pc`, `address`, `interest`) VALUES
(1, 'yugandharsarode', 'demo college', 'abcde@gmail.com', 25412563, 'hd45dk54', 'Uploaded Id/mypic.PNG', 86, 'No', 'demo address test street', 'UI'),
(2, 'yugandharsarode', 'demo college', 'abcde@gmail.com', 25412563, 'hd45dk54', 'Uploaded Id/mypic.PNG', 86, 'No', 'demo address test street', 'UI'),
(3, 'yugandharsarode', 'demo college', 'abcde@gmail.com', 25412563, 'hd45dk54', 'Uploaded Id/mypic.PNG', 86, 'No', 'demo address test street', 'UI'),
(4, 'yugandharsarode', 'demo college', 'abcde@gmail.com', 25412563, 'hd45dk54', 'Uploaded Id/mypic.PNG', 86, 'No', 'demo address test street', 'UI'),
(5, 'yugandharsarode', 'demo college', 'abcde@gmail.com', 25412563, 'hd45dk54', 'Uploaded Id/mypic.PNG', 86, 'No', 'demo address test street', 'UI'),
(6, 'yugandharsarode', 'demo college', 'abcde@gmail.com', 25412563, 'hd45dk54', 'Uploaded Id/mypic.PNG', 86, 'No', 'demo address test street', 'UI'),
(7, 'Dummy', 'Dummy college', 'dummy@dummy.com', 2147483647, 'dummyId', 'Uploaded Id/dummy.jpg', 85, 'No', 'Dummy Address', 'MAT'),
(8, 'test', 'test college', 'test@test.com', 9999999, 'shd125', 'Uploaded Id/dummy.jpg', 87, 'Yes', 'test addess', 'WAT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`Sr No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `Sr No` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
