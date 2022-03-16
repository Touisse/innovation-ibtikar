-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2022 at 03:58 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ibtikar`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `projetName` varchar(60) NOT NULL,
  `radio` enum('oui','non','') NOT NULL,
  `Description` varchar(300) NOT NULL,
  `innovation` varchar(300) NOT NULL,
  `phase` enum('Idéation','Pré-création','Création','Post-création') NOT NULL,
  `objectif` varchar(300) NOT NULL,
  `besoins` varchar(300) NOT NULL,
  `réalisations` varchar(300) NOT NULL,
  `Site` varchar(60) NOT NULL,
  `Réseaux` varchar(60) NOT NULL,
  `lien` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `projetName`, `radio`, `Description`, `innovation`, `phase`, `objectif`, `besoins`, `réalisations`, `Site`, `Réseaux`, `lien`) VALUES
(8, 'ExempleCOM', 'oui', 'description est également reconnue pour les performances, la fiabilité, la sécurité et la qualité de ses applicatifs web et mobiles.', 'innovation du projet ', 'Idéation', 'objectif du projet ', 'besoin du projet ', 'realisation du projet ', 'exemple.com', 'Facebook', 'exemple.com '),
(9, 'Ibtikar ', 'oui', 'exmple exmple desc', 'la valeur ajouter du projet ', 'Idéation', 'lobjectif du projet exemple', 'les besoin du projet exemple ', 'les realisation du projet exemple', 'www.emple.com ', 'Facebook', 'lien.com ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(8, 'Pure Coding', 'purecodingofficial@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(9, 'ADMIN', 'ADMIN@ADMIN.COM', '73acd9a5972130b75066c82595a1fae3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
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
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
