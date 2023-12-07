-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `postID` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` longtext NOT NULL,
  `userID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`postID`, `title`, `content`, `userID`) VALUES
(13, '', 'c', NULL),
(14, '', 'c', NULL),
(15, 'Ikaw at ako', '11 years\r\nK🌻D\r\nPagibig.\r\n\r\nSa mundo, buhay at sa limitadong oras na tayo ay nandito,\r\nIsang malaking biyaya ang pagmamahal.\r\nAng mahalin ka. At mahalin mo.\r\n\r\nAng mga alaala natin ay laging kong baon sa aking puso at\r\nmagiging liwanag sa mga madidilim kong araw.\r\n\r\nThank you for dancing with me during my highs\r\nand thank you for singing with me during my lows\r\n\r\nOur lives may drift away,\r\nbut our love will still ride that tide.\r\n\r\n\r\n\r\nKathniels, Maraming salamat sa pag mamahal ninyo. maraming\r\nsalamat sa napaka gandang pinag samahan natin. Hinding hindi\r\nnamin ipag papalit at hindi nila pwedeng sirain yun. This is beyond\r\nshow business. Pamilya kayo at mga kaibigan.\r\nMagiging mahirap pero kailangan natin yakapin ang kinabukasan.\r\n\r\nI pray for us to grow, and heal.\r\n\r\n\r\nBal, ang pag mamahal ko sayo ay walang hanggan at walang katapusan.', NULL),
(16, 'testing', 'haha heehee huhu', NULL),
(17, 'haha hehe', 'blog entry haha hehe sampol', NULL),
(18, 'testing ulit', 'hello world blog entry 892899329', NULL),
(19, 'haha last na tlg', 'wag m n kalimutan variable names teh pls nmn?!?!', NULL),
(20, 'isa pa ulit', 'one last time by ariana grande', NULL),
(21, 'HUHU last na', 'pang check ng alert message sana nakagitna na sha pls', NULL),
(22, 'what if i kms', 'nawala na yung popup san sha napunta........', NULL),
(23, 'final na [real]', 'thdadhgdv adgfka agkivfakgfleg  yay', NULL),
(27, 'haha', 'hehe', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_forms`
--

CREATE TABLE `user_forms` (
  `userID` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_forms`
--

INSERT INTO `user_forms` (`userID`, `name`, `email`, `password`, `user_type`) VALUES
(3, 'kai', 'erigom@gmail.com', '8c5781246fcb0296e1f11cd4e2eee68d', 'user'),
(4, 'Darlyn', 'darlyn.baybayon@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(5, 'Erza', 'erza@mail.com', '80153c3b6fea0d00d08ebf3833c2ac7a', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `user_forms`
--
ALTER TABLE `user_forms`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `postID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user_forms`
--
ALTER TABLE `user_forms`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user_forms` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
