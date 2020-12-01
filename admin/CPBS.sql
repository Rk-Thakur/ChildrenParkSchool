-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2020 at 05:42 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CPBS`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'ranjan thakur', 'tranjan638@gmail.com', 'Computer Designing', 'asdfasdfasdfasdf'),
(2, 'ram', 'ranjan@gmail.com', 'Computer Designing', 'asdfasdfadsf');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `file` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `file`, `name`, `date`, `description`, `location`) VALUES
(1, '81589287_489421458383853_971106618320093184_n.jpg', 'fasdfasdfasd', '2020-11-12', 'klajdks adjsf a;lkjfasduf aklajkdjs fuasds fuasdkfpas dfi asduf asdiuf psiodufa soidufakdsjfoausd faksdufpiasudf auf asdfuas dfasldksfaisf aosdjflkaudsf asndfoa sdf aosdjfaudyf asjdfaosdhf apshdfasd feihrsjghais aosdfiausdf aifisdi asiuf ojasfhasd sdfjaisd fasodufiasf aousiyfpa sodif nzpxfuya ohf ewrkfna sdfhhp oiqapfha ahf W hkSjfadufadf asdf [asdjf asdfsdfiusf askfjasdfhas dfsdfaoisf ', 'Baneshwor');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(40) NOT NULL,
  `file` varchar(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `file`, `name`, `position`) VALUES
(4, '81589287_489421458383853_971106618320093184_n.jpg', 'DEEPAK', 'WEB');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(40) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `file`) VALUES
(4, '81589287_489421458383853_971106618320093184_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file` varchar(300) NOT NULL,
  `description` varchar(9999) NOT NULL,
  `whom` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `title`, `file`, `description`, `whom`) VALUES
(4, 'hello wordl ', '81589287_489421458383853_971106618320093184_n.jpg', 'Data Communication and Communication Network', 'By Chairman');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(40) NOT NULL,
  `file` varchar(500) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `file`, `name`, `description`, `date`) VALUES
(11, '81589287_489421458383853_971106618320093184_n.jpg', 'ram', 'Data Communication and Communication Network', '2020-11-18'),
(13, '81589287_489421458383853_971106618320093184_n.jpg', 'ranjan thakur', 'Bachelor in Information Management', '2020-11-03');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `username`, `email`, `password`, `file`) VALUES
(7, 'admin', 'a@gmail.com', 'a', '200.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(40) NOT NULL,
  `file` varchar(200) NOT NULL,
  `quotes` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `file`, `quotes`) VALUES
(1, '81589287_489421458383853_971106618320093184_n.jpg', 'I am what i am ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
