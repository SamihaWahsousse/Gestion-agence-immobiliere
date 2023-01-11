-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 08, 2023 at 09:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bien_immobilier`
--

-- --------------------------------------------------------

--
-- Table structure for table `annonce`
--

CREATE TABLE `annonce` (
  `id` int NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `prix` float NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `type_transa` enum('achat','vente','location') NOT NULL,
  `id_propriete` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `compte`
--

CREATE TABLE `compte` (
  `id` int NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('client','agent') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo_prop`
--

CREATE TABLE `photo_prop` (
  `id` int NOT NULL,
  `photo` blob NOT NULL,
  `id_propriete` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `propriete`
--

CREATE TABLE `propriete` (
  `id` int NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `nb_piece` int NOT NULL,
  `surface` int NOT NULL,
  `nb_garage` int NOT NULL,
  `annee_const` date NOT NULL,
  `id_compte` int NOT NULL,
  `id_ville` int NOT NULL,
  `id_region` int NOT NULL,
  `id_type_bien` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_propriete`
--

CREATE TABLE `type_propriete` (
  `id` int NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_propriete` (`id_propriete`);

--
-- Indexes for table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `photo_prop`
--
ALTER TABLE `photo_prop`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_photo_prop` (`id_propriete`);

--
-- Indexes for table `propriete`
--
ALTER TABLE `propriete`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compte` (`id_compte`),
  ADD KEY `fk_ville` (`id_ville`),
  ADD KEY `fk_type_prop` (`id_type_bien`),
  ADD KEY `fk_region` (`id_region`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_propriete`
--
ALTER TABLE `type_propriete`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `compte`
--
ALTER TABLE `compte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo_prop`
--
ALTER TABLE `photo_prop`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `propriete`
--
ALTER TABLE `propriete`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_propriete`
--
ALTER TABLE `type_propriete`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `fk_propriete` FOREIGN KEY (`id_propriete`) REFERENCES `propriete` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `photo_prop`
--
ALTER TABLE `photo_prop`
  ADD CONSTRAINT `fk_photo_prop` FOREIGN KEY (`id_propriete`) REFERENCES `propriete` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `propriete`
--
ALTER TABLE `propriete`
  ADD CONSTRAINT `fk_compte` FOREIGN KEY (`id_compte`) REFERENCES `compte` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_region` FOREIGN KEY (`id_region`) REFERENCES `region` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_type_prop` FOREIGN KEY (`id_type_bien`) REFERENCES `type_propriete` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `fk_ville` FOREIGN KEY (`id_ville`) REFERENCES `ville` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
