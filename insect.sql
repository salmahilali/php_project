-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 18:47
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
(1, '', 'insect/1.png'),
(2, '', 'insect/2.png'),
(3, '', 'insect/3.png'),
(4, '', 'insect/4.png'),
(5, '', 'insect/5.png'),
(6, '', 'insect/6.png'),
(7, '', 'insect/7.png'),
(8, '', 'insect/8.png'),
(9, '', 'insect/9.png'),
(10, '', 'insect/10.png'),
(11, '', 'insect/11.png'),
(12, '', 'insect/12.png'),
(13, '', 'insect/13.png'),
(14, '', 'insect/14.png');

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
