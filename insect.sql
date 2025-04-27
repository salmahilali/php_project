-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:47
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
-- Structure de la table `insect`
--

CREATE TABLE `insect` (
  `id` int(11) NOT NULL,
  `audio_path` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `insect`
--

INSERT INTO `insect` (`id`, `audio_path`, `image_path`) VALUES
(1, 'insecto/1.mp3', 'insect/1.png'),
(2, 'insecto/2.mp3', 'insect/2.png'),
(3, 'insecto/3.mp3', 'insect/3.png'),
(4, 'insecto/4.mp3', 'insect/4.png'),
(5, 'insecto/5.mp3', 'insect/5.png'),
(6, 'insecto/6.mp3', 'insect/6.png'),
(7, 'insecto/7.mp3\r\n', 'insect/7.png'),
(8, 'insecto/8.mp3\r\n', 'insect/8.png'),
(9, 'insecto/9.mp3', 'insect/9.png'),
(10, 'insecto/10.mp3', 'insect/10.png'),
(11, 'insecto/11.mp3', 'insect/11.png'),
(12, 'insecto/12.mp3', 'insect/12.png'),
(13, 'insecto/13.mp3', 'insect/13.png'),
(14, 'insecto/14.mp3', 'insect/14.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `insect`
--
ALTER TABLE `insect`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `insect`
--
ALTER TABLE `insect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
