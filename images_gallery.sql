-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 14:38
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
-- Structure de la table `images_gallery`
--

CREATE TABLE `images_gallery` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `images_gallery`
--

INSERT INTO `images_gallery` (`id`, `image_path`, `title`, `type`, `link`) VALUES
(1, 'interfacelearn/chiffre.png', 'les chiffres', '', 'http://localhost:3000/numbers.php?id=1'),
(2, 'interfacelearn/colors.png', 'Les couleurs', '', 'http://localhost:3000/colors.php?id=2'),
(3, 'interfacelearn/saison.png', 'Les saisons', '', 'http://localhost:3000/saison.php?id=1'),
(4, 'interfacelearn/animal.png', 'Les animaux', '', 'http://localhost:3000/animal.php?id=4'),
(5, 'interfacelearn/transportt.png', 'Les moyens de transport', '', 'http://localhost:3000/transport.php?id=5\r\n'),
(6, 'interfacelearn/insecto.png', 'Les insectes', '', 'http://localhost:3000/insecto.php?id=6'),
(7, 'interfacelearn/jour.png', 'Les jours de la semaine', '', 'http://localhost:3000/week.php?id=7'),
(8, 'interfacelearn/week.png', 'les mois de l\'année', '', 'http://localhost:3000/mois.php?id=8');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `images_gallery`
--
ALTER TABLE `images_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `images_gallery`
--
ALTER TABLE `images_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
