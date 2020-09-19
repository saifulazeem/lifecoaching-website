-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 08:05 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifecoach_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `sender_mail` varchar(100) NOT NULL,
  `mail_subject` varchar(100) NOT NULL,
  `sender_message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_name`, `sender_mail`, `mail_subject`, `sender_message`) VALUES
(1, 'saifabbasi.400@gmail.com', '', 'my abcd', 'contact me when you are free'),
(2, 'muhammad saif', 'a@b.com', 'my sub', 'alpha'),
(3, 'ALi', 'a@bc.com', 'lion', 'i m hero'),
(4, 'Neely', 'neel@nell.com', 'lion', 'hi howz prject'),
(5, 'frhan', 'fani@gmail.com', 'Pakistan', 'Hello i m frhan i m from islamabad pakistan waiting for your message please replay me as soon as pos');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(100) NOT NULL,
  `postdate` date NOT NULL,
  `author` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `postdate`, `author`, `Name`, `image`) VALUES
(1, '2024-08-20', 'saif', 'Nelly', 0x696d616765732f566964656f732e504e47);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `email`, `password`) VALUES
(1, '', 'saif@saif.com', '@bc@12354_6'),
(2, 'Muhammad Saif Ul Azeem', 'saif@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(100) NOT NULL,
  `pdate` date NOT NULL,
  `auther` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `video` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `pdate`, `auther`, `title`, `video`) VALUES
(5, '2009-08-20', 'saif', 'Motivation', 0x696d616765732f32303139313030395f3230323734382e6d7034),
(6, '2009-08-20', 'saif', 'Champion', 0x696d616765732f32303139303932375f3037323632372e6d7034),
(7, '2010-08-20', 'saif', 'MyChampion', 0x696d616765732f32303139303932355f3039303131332e6d7034),
(8, '2013-08-20', 'saif', 'mp3 file', 0x696d616765732f5f41655f4a617a62612d452d44696c5f4761725f4d61696e5f436861686f6f6e2d4e6179796172615f4e6f6f725b7777772e4d70334d61442e436f6d5d2e6d7033),
(9, '2013-08-20', 'saif', 'mp3 qawali', 0x696d616765732f536176657265205361766572652042792053616272692020536f6e6773782e506b202e6d7033);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
