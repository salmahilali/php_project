-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:10
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
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `audio_path` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `transport`
--

INSERT INTO `transport` (`id`, `audio_path`, `image_path`) VALUES
(1, 'transporto/autobus.mp3', 'transport/1.png'),
(2, 'transporto/avion.mp3', 'transport/2.png'),
(3, 'transporto/barque.mp3', 'transport/3.png'),
(4, 'transporto/bateau.mp3', 'transport/4.png'),
(5, 'transporto/bycyclette.mp3', 'transport/5.png'),
(6, 'transporto/camion.mp3', 'transport/6.png'),
(7, 'transporto/Fourgonnette.mp3', 'transport/7.png'),
(8, 'transporto/Fusée.mp3', 'transport/8.png'),
(9, 'transporto/hélicoptère.mp3', 'transport/9.png'),
(10, 'transporto/jet ski.mp3', 'transport/10.png'),
(11, 'transporto/montgloflière.mp3', 'transport/11.png'),
(12, 'transporto/Moto.mp3', 'transport/12.png'),
(13, 'transporto/train.mp3', 'transport/13.png'),
(14, 'transporto/trotinette.mp3', 'transport/14.png'),
(15, 'transporto/Voilier.mp3', 'transport/15.png'),
(16, 'transporto/voiture.mp3', 'transport/16.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
