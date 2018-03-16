-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:46 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_table`
--

CREATE TABLE `register_table` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `re_password` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phno` int(10) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_table`
--

INSERT INTO `register_table` (`email`, `password`, `re_password`, `name`, `phno`, `address`) VALUES
('akhila.chitluri698@gmail.com', '1234', '1234', 'Akhila', 123456, 'regrelkmfrdlf'),
('akhila123@gmail.com', 'akhi', 'akhi', 'akhila', 12344, 'rferwfwme,'),
('akhila@gmail.com', 'akhi', 'akhi', 'Akhila', 850036029, 'bhimavaram');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `name` varchar(30) NOT NULL,
  `image` blob NOT NULL,
  `phno` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`name`, `image`, `phno`, `price`, `details`) VALUES
('', 0x6c616e64312e6a7067, 0, 0, ''),
('house', 0x686f7573652e6a7067, 12345, 5000000, 'rjfhgkjfglsj'),
('house', 0x686f7573652e6a7067, 12345, 5000000, 'rjfhgkjfglsj'),
('house', 0x686f7573652e6a7067, 12345, 5000000, 'rjfhgkjfglsj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_table`
--
ALTER TABLE `register_table`
  ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
