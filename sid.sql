-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2019 at 03:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sid`
--

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(345) NOT NULL,
  `company` varchar(345) NOT NULL,
  `description` varchar(345) NOT NULL,
  `status` int(11) NOT NULL,
  `doj` date NOT NULL,
  `dol` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `company`, `description`, `status`, `doj`, `dol`) VALUES
(1, 'Lead Laravel Developer', 'Nice Infotech, Shillong', 'Sit cupiditate praesentium ex esse nulla Facere fuga perspiciatis eveniet provident neque Ea ratione non minus temporibus ipsum Sunt minima ', 0, '2018-09-01', '0000-00-00'),
(2, 'Web Designer', 'Indian Railway, Banipur, Dibrugarh', 'Dolor id atque accusantium ut impedit odit provident soluta voluptatem Veritatis ipsam neque mollitia vero suscipit a laborum doloremque. Ipsa! ', 0, '2018-01-01', '2018-06-01'),
(3, 'Web Developer', 'Exis Development, London, UK', 'Consectetur pariatur fugiat ipsam aperiam maiores. Nisi in dignissimos debitis expedita asperiores delectus vitae corporis. ', 0, '2017-01-01', '2018-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `fname` varchar(345) NOT NULL,
  `lname` varchar(345) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(345) NOT NULL,
  `phone` varchar(345) NOT NULL,
  `status` int(11) NOT NULL,
  `residence` varchar(345) NOT NULL,
  `address` varchar(345) NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `fname`, `lname`, `dob`, `email`, `phone`, `status`, `residence`, `address`, `about`) VALUES
(1, 'Saddam', 'Hussain', '1991-02-21', 'iamsaddamhussain99@gmail.com', '8486935380', 0, 'Shillong 01', 'Barpeta', 'Pleasure in the job puts perfection in the work and I put perfection in my every project.\r\n\r\nI am Looking for a good project where I can put my expertise.  I am very much professional in my work. Every project I take as a challenge for me. \r\n\r\nFully confident and co-operative and communicative in completing my tasks with the objective to satisfy my clients. Precision, accuracy and time management are my top priorities.\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(345) NOT NULL,
  `description` varchar(345) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `status`) VALUES
(1, 'Web Development', 'Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.', 0),
(2, 'Web Design', 'Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.', 0),
(3, 'Responsive Design\r\n', 'Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.', 0),
(4, 'Photography', 'Amet aspernatur delectus maxime ducimus similique Ratione asperiores corporis provident aut libero.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
