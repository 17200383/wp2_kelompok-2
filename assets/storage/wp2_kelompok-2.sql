-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 05:35 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wp2_kelompok-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` int(2) NOT NULL,
  `name` varchar(65) NOT NULL,
  `comments` text DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `lastmodified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `comments`, `stock`, `lastmodified`) VALUES
(1, 'Ferenreinaseptum Aezakmien', 'Ferren bushes with purple flower inside it\'s long cavity of blue grass-rooted stem.', 80, '2023-07-03 02:39:26'),
(2, 'Amerylysis Denunandrum', 'Tall streaky Pink pigment flower with curved stroke grown on the mossy plantation.', 200, '2023-07-03 02:39:43'),
(3, 'Amelanchier Beurgeranum', 'A small, slow-growing deciduous tree with a rounded crown and bark that sloughs off as it matures.', 190, '2023-06-30 03:01:30'),
(4, 'Stylosanthes Cordata', 'A perennial grassy plant that grows upright or slightly reclines like a bush.', 45, '2023-06-30 03:01:46');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(2) NOT NULL,
  `namepat` varchar(65) NOT NULL,
  `telp` varchar(65) DEFAULT NULL,
  `addr` varchar(100) DEFAULT NULL,
  `medrec` text DEFAULT NULL,
  `medicine` varchar(65) DEFAULT NULL,
  `lastmodified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `namepat`, `telp`, `addr`, `medrec`, `medicine`, `lastmodified`) VALUES
(1, 'Reisa K. Nauvea', '+123-456-7890', 'Aberhwer No.21, Minnean Cliffs, Northeastern Range, Kivotos, Beta Sector IV (Alisa), Unified Trinity', '22F a/w 2/7 dysuria & N+V bg T1DM. BM 20.8, VBG ph 7.24 HCO3 12, Urin Leuk+ Nit+ Ket+++. Obs stable, HR 136 -> 98 (1L NaCl)', 'Glaciesflos Himalayensis', '2023-07-03 03:09:55'),
(2, 'Helena V. Sanctum', NULL, NULL, ' ', 'Ferenreinaseptum Aezakmien', '2023-07-03 03:27:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(1) NOT NULL,
  `privilege` int(1) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `privilege`, `username`, `password`) VALUES
(1, 1, 'admin', '$2y$10$0B4ypF2vjeCu0Vom7gaO0ugEAt/dM0BUuQkV5jqVTfw7bYL.ScRPm'),
(2, 2, 'user', '$2y$10$E99YBwFTbRfXc5Pd7vMp/eRgWQkie8ukOq6c/Kf5WuV7weNcbdQw2'),
(3, 3, 'doctor', '$2y$10$w3FfaBGFjZKPkZZn4HWw5ewBkJqVLo5sf1Bh4NlYeStiMgwY.dqa.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
