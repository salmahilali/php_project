-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:09
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
-- Structure de la table `saison`
--

CREATE TABLE `saison` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `audio_path` varchar(255) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `saison`
--

INSERT INTO `saison` (`id`, `nombre`, `audio_path`, `image_path`) VALUES
(1, '2', 'sison/hiver.mp3', 'saison/1.png'),
(2, '2', 'sison/printemps.mp3', 'saison/2.png'),
(3, '2', 'sison/automne.mp3', 'saison/3.png'),
(4, '2', 'sison/été.mp3', 'saison/4.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `saison`
--
ALTER TABLE `saison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
