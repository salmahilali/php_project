-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:07
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
-- Structure de la table `kidsplay`
--

CREATE TABLE `kidsplay` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `image_url` varchar(512) DEFAULT NULL,
  `Link_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `kidsplay`
--

INSERT INTO `kidsplay` (`id`, `nom`, `image_url`, `Link_path`) VALUES
(1, 'Tape la taupe', 'kidsplay/tapelataupe.png', 'http://localhost:3000/tapelataupe.php\r\n'),
(2, 'jeu de mémoire', 'kidsplay/animals.png\r\n', 'http://localhost:3000/animal.html'),
(3, 'Mathématique', 'kidsplay/quizm.png\r\n', 'http://localhost:3000/Quizm.php'),
(4, 'Atrraper l\'étoile', 'kidsplay/star.png', 'http://localhost:3000/etoile.html'),
(5, 'Puzzle', 'kidsplay/puzzle.png', 'http://localhost:3000/puzzle.html'),
(6, 'Tic tac toe', 'kidsplay/tictactoe.png', 'http://localhost:3000/xo.php'),
(8, 'Mémoire', 'kidsplay/animals.png', 'http://localhost:3000/memory.html'),
(9, 'calculatrice', 'kidsplay/calcul.png', 'http://localhost:3000/calcul.html'),
(12, 'ROBOT', 'kidsplay/robot.png', 'http://localhost:3000/robot.html');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `kidsplay`
--
ALTER TABLE `kidsplay`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `kidsplay`
--
ALTER TABLE `kidsplay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
