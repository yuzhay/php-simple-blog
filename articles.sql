-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2015 at 07:29 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `date`) VALUES
(1, 'MyTitle', 'MyContent', '2015-11-19'),
(2, 'MyTitle2', 'MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 MyContent2 ', '2015-11-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
