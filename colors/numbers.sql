-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 16:20
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phpmyadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `numbers`
--

CREATE TABLE `numbers` (
  `id` int(11) NOT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `audio` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `numbers`
--

INSERT INTO `numbers` (`id`, `image_path`, `nombre`, `audio`) VALUES
(1, 'number/0.png', '0', NULL),
(2, 'number/1.png', '1', NULL),
(3, 'number/2.png', '2', NULL),
(4, 'number/3.png', '3', NULL),
(5, 'number/4.png', '4', NULL),
(6, 'number/5.png', '5', NULL),
(7, 'number/6.png', '6', NULL),
(8, 'number/7.png', '7', NULL),
(9, 'number/8.png', '8', NULL),
(10, 'number/9.png', '9', NULL),
(11, 'number/10.png', '10', NULL),
(12, 'number/11.png', '11', NULL),
(13, 'number/12.png', '12', NULL),
(14, 'number/13.png', '13', NULL),
(15, 'number/14.png', '14', NULL),
(16, 'number/15.png', '15', NULL),
(17, 'number/16.png', '16', NULL),
(18, 'number/17.png', '17', NULL),
(19, 'number/18.png', '18', NULL),
(20, 'number/19.png', '19', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `numbers`
--
ALTER TABLE `numbers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `numbers`
--
ALTER TABLE `numbers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
