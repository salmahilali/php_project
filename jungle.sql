-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 20:30
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
-- Structure de la table `jungle`
--

CREATE TABLE `jungle` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `audio_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `jungle`
--

INSERT INTO `jungle` (`id`, `image_path`, `audio_path`) VALUES
(1, 'jungle/1.png', '\r\n'),
(2, 'jungle/2.png', ''),
(3, 'jungle/3.png\r\n', '\r\n'),
(4, 'jungle/4.png', '\r\n'),
(5, 'jungle/5.png', '\r\n'),
(6, 'jungle/6.png', '\r\n'),
(7, 'jungle/7.png', '\r\n'),
(8, 'jungle/8.png', ''),
(9, 'jungle/9.png', '\r\n'),
(10, 'jungle/10.png', '\r\n\r\n'),
(11, 'jungle/11.png', '\r\n'),
(12, 'jungle/12.png\r\n', ''),
(13, 'jungle/13.png', '\r\n'),
(14, 'jungle/14.png', '\r\n');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `jungle`
--
ALTER TABLE `jungle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `jungle`
--
ALTER TABLE `jungle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
