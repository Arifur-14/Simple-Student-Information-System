-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2022 at 09:14 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `studentid` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `religion` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentname`, `fathername`, `mothername`, `birthdate`, `gender`, `studentid`, `department`, `batch`, `semester`, `religion`, `email`, `address`, `contact`) VALUES
(2, 'Arifur Rahman', 'H. M Faruk', 'Mahmoda Khanom', '1998-10-01', 'Male', '111118025', 'CSE', '1st', '8th', 'Islam', 'arifur8014@gmail.com', 'Pakamora', '01818527149'),
(8, 'Sarwar Khan', '', '', '1992-10-02', 'Male', '111118034', 'CSE', '1st', '8th', 'Islam', 'sarwarkhan@gmail.com', 'Kotbari', '0185867294'),
(9, 'Amena Akter', '', '', '0000-00-00', 'Female', '111118035', 'CSE', '1st', '8th', 'Islam', '', '', ''),
(10, 'Sowrovi Akter', '', '', '0000-00-00', 'Female', '111118030', 'CSE', '1st', '8th', 'Islam', '', '', ''),
(11, 'Mrs. Nasrin Sultana', '', '', '0000-00-00', 'Female', '111118031', 'CSE', '1st', '8th', 'Islam', '', '', ''),
(12, 'Sheiak Taslima', '', '', '0000-00-00', 'Female', '111118032', 'CSE', '1st', '8th', 'Islam', '', '', ''),
(13, 'Dipali Rani Debi', '', '', '0000-00-00', 'Female', '111118017', 'CSE', '1st', '8th', 'Islam', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
