-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2018 at 10:26 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `squadfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

DROP TABLE IF EXISTS `userdata`;
CREATE TABLE IF NOT EXISTS `userdata` (
  `UserName` text,
  `Password` text NOT NULL,
  `Games` text NOT NULL,
  `Skill` text NOT NULL,
  `Email` text NOT NULL,
  UNIQUE KEY `email` (`Email`(150)),
  UNIQUE KEY `UserName` (`UserName`(150))
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`UserName`, `Password`, `Games`, `Skill`, `Email`) VALUES
('nick', 'password', 'PUBG CS:GO LoL Fortnite', 'n/a', 'nick@nick.com'),
('nick69', '1', 'PUBG CS:GO', 'n/a', 'franklyocean@gmail.com'),
('lloyd', 'password', 'CS:GO', 'n/a', 'lloyd@gmail.com'),
('lloyd2', 'password', 'CS:GO', 'n/a', 'lloyd2@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
