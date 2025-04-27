-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:04
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
-- Structure de la table `ferme`
--

CREATE TABLE `ferme` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `audio_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `ferme`
--

INSERT INTO `ferme` (`id`, `image_path`, `audio_path`) VALUES
(1, 'ferme/1.png', 'fermeo/abeille.mp3'),
(2, 'ferme/2.png', 'fermeo/ane.mp3'),
(3, 'ferme/3.png', 'fermeo/brebis.mp3'),
(4, 'ferme/4.png', 'fermeo/caribou.mp3'),
(5, 'ferme/5.png', 'fermeo/chameau.mp3'),
(6, 'ferme/6.png', 'fermeo/cheval.mp3'),
(7, 'ferme/7.png', 'fermeo/chèvre.mp3\r\n'),
(8, 'ferme/8.png', 'fermeo/cochon.mp3'),
(9, 'ferme/9.png', 'fermeo/lama.mp3'),
(10, 'ferme/10.png', 'fermeo/lapin.mp3'),
(11, 'ferme/11.png', 'fermeo/mouton.mp3'),
(12, 'ferme/12.png', 'fermeo/poney.mp3'),
(14, 'ferme/14.png', 'fermeo/taureau.mp3'),
(15, 'ferme/15.png', 'fermeo/vache.mp3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `ferme`
--
ALTER TABLE `ferme`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `ferme`
--
ALTER TABLE `ferme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
