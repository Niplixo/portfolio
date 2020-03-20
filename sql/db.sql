- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 20, 2020 at 02:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `projets`
--

CREATE TABLE `projets` (
  `id` int(11) NOT NULL,
  `projet` varchar(5000) NOT NULL,
  `descriptions` varchar(5000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projets`
--

INSERT INTO `projets` (`id`, `projet`, `descriptions`, `image`) VALUES
(1, 'Steam', 'Le projet Steam avait pour but de proposer une refonte graphique du site steam ( bibliothèque de jeux vidéos ).', ''),
(2, 'Audiovisuelle', 'Ce projet avait pour but de proposer une suite a un film .', '<img src=\"images/g2.png\" alt=\"\" />');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$D/XMXNXEMxv0sto1fck2UeowHdfHZPOOwwTGU5uIodtTLi3oXvrSK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
