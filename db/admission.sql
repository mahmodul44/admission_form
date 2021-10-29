-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 07:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `section` varchar(15) DEFAULT NULL,
  `village` varchar(255) NOT NULL,
  `post_office` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `district` varchar(255) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `pay_method` varchar(255) DEFAULT NULL,
  `gender` varchar(191) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `userfile` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`id`, `fname`, `lname`, `fathername`, `mname`, `sname`, `class`, `section`, `village`, `post_office`, `thana`, `district`, `phone`, `pay_method`, `gender`, `dob`, `userfile`) VALUES
(1, 'Shahin ', 'Alom', 'San', 'Moon', 'Pabna High School', 'Seven', '2', '', '', 'Jhikorgasa', 'Gaibandha', '01521313200', '1', '1', '1998-01-20', '1635528220rsz_shagor_pic.jpg'),
(2, 'MD.Mamunur Rashid', 'Mamun', 'MD.Jabed Ali', 'MOST.Morium Begum', 'Tambulpur High School,Rangpur', 'Nine', '1', 'Tambulpur', 'Tambulpur', 'Pirgachha', 'Rangpur', '01770717892', '1', '1', '1996-05-14', '1635528352125554477_405068394003414_7993758539532224323_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
