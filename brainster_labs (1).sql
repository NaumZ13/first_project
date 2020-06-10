-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 04:56 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brainster_labs`
--

-- --------------------------------------------------------

--
-- Table structure for table `brainster_form`
--

CREATE TABLE `brainster_form` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `selectCourse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brainster_form`
--

INSERT INTO `brainster_form` (`id`, `name`, `email`, `phone`, `company`, `selectCourse`) VALUES
(31, 'Naum Zdravkov', 'your@email.com', '075-123-354', 'Kompanija', 'developer'),
(32, 'Zdravkov Naum', 'brainster@hotmail.com', '564875443', 'Brainster', 'design'),
(33, 'John Doe', 'bandoleros11@live.com', '078-345-123', 'NFL', 'marketing'),
(34, 'Jane Doe', 'asdas@asd.com', '123441233', 'Phantom Firm', 'science'),
(35, 'Naum Zdravkov', 'your@email.com', 'asdasd@iasda', 'asdasd', 'developer'),
(36, 'Alice Wonderland', 'sdas@asdsa', '12312312', 'Wonderland', 'science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brainster_form`
--
ALTER TABLE `brainster_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brainster_form`
--
ALTER TABLE `brainster_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
