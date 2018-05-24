-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2018 at 04:55 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `backpackcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cms_accounts`
--

CREATE TABLE `cms_accounts` (
  `id` int(8) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `staff` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_accounts`
--

INSERT INTO `cms_accounts` (`id`, `email`, `password`, `first_name`, `last_name`, `staff`) VALUES
(1, 'truta.r96@gmail.com', '', 'Razvan', 'Truta', 3),
(2, 'dummy@account.com', '275876e34cf609db118f3d84b799a790', 'Dummy', 'Account', 0);

-- --------------------------------------------------------

--
-- Table structure for table `cms_news`
--

CREATE TABLE `cms_news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_news`
--

INSERT INTO `cms_news` (`id`, `title`, `content`, `date`) VALUES
(1, 'Backpacks have won!', 'Being officially declares at the all-time best accessory of all time, the backpack industry has met a very significant growth in backpack producers - and buyers!Being officially declares at the all-time best accessory of all time, the backpack industry has met a very significant growth in backpack producers - and buyers!Being officially declares at the all-time best accessory of all time, the backpack industry has met a very significant growth in backpack producers - and buyers!Being officially declares at the all-time best accessory of all time, the backpack industry has met a very significant growth in backpack producers - and buyers!', '2017-11-22'),
(2, 'Backpacks have won - AGAIN!!!', 'Being officially declares at the all-time best accessory of all time, the backpack industry has met a very significant growth in backpack producers - and buyers!', '2017-11-22');

-- --------------------------------------------------------

--
-- Table structure for table `cms_settings`
--

CREATE TABLE `cms_settings` (
  `cms_name` text NOT NULL,
  `catch_phrase` text NOT NULL,
  `cms_version` varchar(8) NOT NULL,
  `announcement_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_settings`
--

INSERT INTO `cms_settings` (`cms_name`, `catch_phrase`, `cms_version`, `announcement_text`) VALUES
('BackpackCMS', 'Manage It!', '0.0.1', '');

-- --------------------------------------------------------

--
-- Table structure for table `cms_users`
--

CREATE TABLE `cms_users` (
  `id` int(11) NOT NULL,
  `bio` text NOT NULL,
  `nickname` text NOT NULL,
  `posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cms_users`
--

INSERT INTO `cms_users` (`id`, `bio`, `nickname`, `posts`) VALUES
(1, 'aerdaedaedfae', 'Backpack', 0),
(2, 'Dummy Account', 'Dummy', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cms_accounts`
--
ALTER TABLE `cms_accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_news`
--
ALTER TABLE `cms_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms_settings`
--
ALTER TABLE `cms_settings`
  ADD PRIMARY KEY (`cms_version`);

--
-- Indexes for table `cms_users`
--
ALTER TABLE `cms_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cms_accounts`
--
ALTER TABLE `cms_accounts`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_news`
--
ALTER TABLE `cms_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cms_users`
--
ALTER TABLE `cms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
