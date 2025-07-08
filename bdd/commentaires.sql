-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 08, 2025 at 09:15 AM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commentaires`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `commentaire` text NOT NULL,
  `signature` text,
  `note` int(11) NOT NULL,
  `date_creation` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `commentaires`
--

INSERT INTO `commentaires` (`id`, `nom`, `commentaire`, `signature`, `note`, `date_creation`) VALUES
(21, 'test', 'test', NULL, 2, '2025-07-01 11:06:30'),
(22, 'test', 'test', 'test', 4, '2025-07-01 11:06:41'),
(23, 'test', 'test', 'eeeee', 2, '2025-07-01 11:06:57'),
(24, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 11:07:45'),
(25, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 11:07:51'),
(26, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:06:59'),
(27, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:07:13'),
(28, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:07:16'),
(29, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:12:29'),
(30, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:12:53'),
(31, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:13:06'),
(32, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:13:31'),
(33, 'GeForce 670', 'fgsdffdfgfff', 'dffd', 3, '2025-07-01 15:16:46'),
(34, 'ABC', 'DEF', 'YOUYOU', 5, '2025-07-01 15:17:32'),
(35, 'Théo', 'Il est bo', 'Théo Dorival', 5, '2025-07-07 10:16:43'),
(36, 'Youssef', 'C&#039;est bien', 'Youssef BOUMLIK', 4, '2025-07-07 15:42:27'),
(37, 'yOUSSEF', 'Bien', 'YB', 4, '2025-07-07 15:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
