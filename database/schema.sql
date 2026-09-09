-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql-melain.alwaysdata.net
-- Generation Time: Sep 09, 2026 at 05:06 PM
-- Server version: 10.11.18-MariaDB
-- PHP Version: 8.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melain_taskflow`
--

-- --------------------------------------------------------

--
-- Table structure for table `Attribuer`
--

CREATE TABLE `Attribuer` (
  `id_user` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `poste` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Projet`
--

CREATE TABLE `Projet` (
  `id_projet` int(11) NOT NULL,
  `titre_projet` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `date_` date DEFAULT NULL,
  `statut_projet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Tache`
--

CREATE TABLE `Tache` (
  `id_tache` int(11) NOT NULL,
  `titre_tache` varchar(200) NOT NULL,
  `description` text DEFAULT NULL,
  `date_de_creation` date DEFAULT NULL,
  `priorite` varchar(50) DEFAULT NULL,
  `statut_tache` varchar(50) DEFAULT NULL,
  `deadline` date DEFAULT NULL,
  `id_projet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `id_user` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `date` date DEFAULT current_timestamp(),
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`id_user`, `nom`, `prenom`, `email`, `tel`, `date`, `password`) VALUES
(5, 'ADEL', 'Adel', 'adel@gmail.com', '1234543', NULL, '$2y$10$zY44VbnqbpV1vHSj.PgMJu5uzudBEQh5Ky0tB2spBF/wQGJfLmwZa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Attribuer`
--
ALTER TABLE `Attribuer`
  ADD PRIMARY KEY (`id_user`,`id_projet`),
  ADD KEY `id_projet` (`id_projet`);

--
-- Indexes for table `Projet`
--
ALTER TABLE `Projet`
  ADD PRIMARY KEY (`id_projet`);

--
-- Indexes for table `Tache`
--
ALTER TABLE `Tache`
  ADD PRIMARY KEY (`id_tache`),
  ADD KEY `id_projet` (`id_projet`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Projet`
--
ALTER TABLE `Projet`
  MODIFY `id_projet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Tache`
--
ALTER TABLE `Tache`
  MODIFY `id_tache` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Attribuer`
--
ALTER TABLE `Attribuer`
  ADD CONSTRAINT `Attribuer_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `Users` (`id_user`),
  ADD CONSTRAINT `Attribuer_ibfk_2` FOREIGN KEY (`id_projet`) REFERENCES `Projet` (`id_projet`);

--
-- Constraints for table `Tache`
--
ALTER TABLE `Tache`
  ADD CONSTRAINT `Tache_ibfk_1` FOREIGN KEY (`id_projet`) REFERENCES `Projet` (`id_projet`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
