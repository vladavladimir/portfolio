-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 14, 2020 at 06:02 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'ja', 'ja@gmail.com', '$2y$10$P4x9fashCG66zZMFys/coe8Y92Muho3rnSIlCdHKVOYYja4/Pdwhu'),
(2, 'vlada', 'vlada@gmail.com', '$2y$10$wofBXXEh.K0LFqrMTO.zxOXYYAnRuSLPgL2PZn4GPCvFwu1ER9KaG'),
(3, 'test', 'test@gmail.com', '$2y$10$JVmzYfurLw7lddbSUY7qvOmqqT7sVEOxf.ILV.PJEEpdhFe0WTPma'),
(4, 'jaon', 'jaon@gmail.com', '$2y$10$3NXhUT2AVB/DeR0jEWuejeToIxo8XbCSiS4j2Df4j3B7wEgCeWTJm'),
(5, 'onja', 'onja@gmail.com', '$2y$10$s1jF7Fbq1c4y9wQp31IWP.B2.49f2ElOAoutnS41Ddll9SGMdVV0C'),
(14, 'novi', 'novi@gmail.com', '$2y$10$3VYJOGsMY22WB9ssB9pLtuId7XodlN6dzfSgvEXV4ryCdN/UzirCC'),
(15, 'mara', 'mara@gmail.com', '$2y$10$/FgXjy6XOwo.BDNd1a0l6OUdj/EYoUJquFroQIIGY.iGiUt.MiZ6C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
