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
-- Structure de la table `colors`
--

CREATE TABLE `colors` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `audio` longblob DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `colors`
--

INSERT INTO `colors` (`id`, `nombre`, `audio`, `image_path`) VALUES
(1, NULL, NULL, 'colors/1.png'),
(2, NULL, NULL, 'colors/2.png'),
(3, NULL, NULL, 'colors/3.png'),
(4, NULL, NULL, 'colors/4.png'),
(5, NULL, NULL, 'colors/5.png'),
(6, NULL, NULL, 'colors/6.png'),
(7, NULL, NULL, 'colors/7.png'),
(8, NULL, NULL, 'colors/8.png'),
(9, NULL, NULL, 'colors/9.png'),
(10, NULL, NULL, 'colors/10.png'),
(11, NULL, NULL, 'colors/11.png'),
(12, NULL, NULL, 'colors/12.png'),
(13, NULL, NULL, 'colors/13.png'),
(14, NULL, NULL, 'colors/14.png'),
(15, NULL, NULL, 'colors/15.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
