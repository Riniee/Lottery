-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2018 at 10:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4826444_lottery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `firstname` varchar(16) NOT NULL,
  `lastname` varchar(16) NOT NULL,
  `fullname` varchar(32) NOT NULL,
  `username` varchar(64) NOT NULL,
  `username_enc` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `login_first` datetime NOT NULL,
  `login_last` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luck_jasmine`
--

CREATE TABLE `luck_jasmine` (
  `jasmine_id` int(11) NOT NULL,
  `result_name` varchar(64) NOT NULL,
  `result_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luck_kurinji`
--

CREATE TABLE `luck_kurinji` (
  `kurinji_id` int(11) NOT NULL,
  `result_name` varchar(64) NOT NULL,
  `result_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luck_lilly`
--

CREATE TABLE `luck_lilly` (
  `lilly_id` int(11) NOT NULL,
  `result_name` varchar(64) NOT NULL,
  `result_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luck_lilly`
--

INSERT INTO `luck_lilly` (`lilly_id`, `result_name`, `result_date`, `created_date`) VALUES
(1, '1518421207446.pdf', '2018-02-10 00:00:00', '2018-02-12 13:10:07');

-- --------------------------------------------------------

--
-- Table structure for table `luck_lotus`
--

CREATE TABLE `luck_lotus` (
  `lotus_id` int(11) NOT NULL,
  `result_name` varchar(64) NOT NULL,
  `result_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luck_lotus`
--

INSERT INTO `luck_lotus` (`lotus_id`, `result_name`, `result_date`, `created_date`) VALUES
(1, '1518421242487.pdf', '2018-02-12 00:00:00', '2018-02-12 13:10:42');

-- --------------------------------------------------------

--
-- Table structure for table `luck_marigold`
--

CREATE TABLE `luck_marigold` (
  `marigold_id` int(11) NOT NULL,
  `result_name` varchar(64) NOT NULL,
  `result_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `luck_rose`
--

CREATE TABLE `luck_rose` (
  `rose_id` int(11) NOT NULL,
  `result_name` varchar(64) NOT NULL,
  `result_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `luck_rose`
--

INSERT INTO `luck_rose` (`rose_id`, `result_name`, `result_date`, `created_date`) VALUES
(2, '1518420728707.pdf', '2018-02-14 00:00:00', '2018-02-12 13:02:08'),
(4, '1518420976424.pdf', '2018-02-14 00:00:00', '2018-02-12 13:06:16'),
(5, '1518426522479.pdf', '2018-02-15 00:00:00', '2018-02-12 14:38:42'),
(6, '151842828350.pdf', '0000-00-00 00:00:00', '2018-02-12 15:08:03'),
(9, '1518428881408.pdf', '2018-02-13 00:00:00', '2018-02-12 15:18:01'),
(10, '1518429026900.pdf', '2018-02-12 00:00:00', '2018-02-12 15:20:26'),
(11, '1518429936454.pdf', '2018-02-09 00:00:00', '2018-02-12 15:35:36'),
(12, '1518432989238.pdf', '2018-02-09 00:00:00', '2018-02-12 16:26:29'),
(13, '1518443915585.pdf', '2018-02-12 00:00:00', '2018-02-12 19:28:35'),
(14, '1518444437966.pdf', '2018-02-12 00:00:00', '2018-02-12 19:37:17'),
(15, '1519557308518.pdf', '2018-02-25 00:00:00', '2018-02-25 16:45:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luck_jasmine`
--
ALTER TABLE `luck_jasmine`
  ADD PRIMARY KEY (`jasmine_id`);

--
-- Indexes for table `luck_kurinji`
--
ALTER TABLE `luck_kurinji`
  ADD PRIMARY KEY (`kurinji_id`);

--
-- Indexes for table `luck_lilly`
--
ALTER TABLE `luck_lilly`
  ADD PRIMARY KEY (`lilly_id`),
  ADD UNIQUE KEY `lilly_id` (`lilly_id`),
  ADD KEY `lilly_id_2` (`lilly_id`);

--
-- Indexes for table `luck_lotus`
--
ALTER TABLE `luck_lotus`
  ADD PRIMARY KEY (`lotus_id`),
  ADD UNIQUE KEY `lotus_id` (`lotus_id`),
  ADD KEY `lotus_id_2` (`lotus_id`);

--
-- Indexes for table `luck_marigold`
--
ALTER TABLE `luck_marigold`
  ADD PRIMARY KEY (`marigold_id`);

--
-- Indexes for table `luck_rose`
--
ALTER TABLE `luck_rose`
  ADD PRIMARY KEY (`rose_id`),
  ADD UNIQUE KEY `rose_id` (`rose_id`),
  ADD KEY `rose_id_2` (`rose_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luck_jasmine`
--
ALTER TABLE `luck_jasmine`
  MODIFY `jasmine_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luck_kurinji`
--
ALTER TABLE `luck_kurinji`
  MODIFY `kurinji_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luck_lilly`
--
ALTER TABLE `luck_lilly`
  MODIFY `lilly_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `luck_lotus`
--
ALTER TABLE `luck_lotus`
  MODIFY `lotus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `luck_marigold`
--
ALTER TABLE `luck_marigold`
  MODIFY `marigold_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `luck_rose`
--
ALTER TABLE `luck_rose`
  MODIFY `rose_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
