-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:03
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
-- Structure de la table `alpha`
--

CREATE TABLE `alpha` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `audio_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `alpha`
--

INSERT INTO `alpha` (`id`, `image_path`, `audio_path`) VALUES
(1, 'alpha/a.png\r\n', 'alphao/A.mp3'),
(2, 'alpha/b.png', 'alphao/B.mp3'),
(3, 'alpha/c.png', 'alphao/C.mp3'),
(4, 'alpha/D.png', 'alphao/D.mp3'),
(5, 'alpha/E.png', 'alphao/E.mp3'),
(6, 'alpha/f.png', 'alphao/F.mp3'),
(7, 'alpha/g.png', 'alphao/G.mp3'),
(8, 'alpha/h.png', 'alphao/H.mp3'),
(9, 'alpha/i.png', 'alphao/I.mp3'),
(10, 'alpha/j.png', 'alphao/J.mp3'),
(11, 'alpha/k.png', 'alphao/K.mp3'),
(12, 'alpha/l.png', 'alphao/L.mp3'),
(13, 'alpha/M.png', 'alphao/M.mp3'),
(14, 'alpha/N.png', 'alphao/N.mp3'),
(15, 'alpha/O.png', 'alphao/O.mp3'),
(16, 'alpha/P.png', 'alphao/P.mp3'),
(17, 'alpha/Q.png', 'alphao/Q.mp3'),
(18, 'alpha/R.png', 'alphao/R.mp3'),
(19, 'alpha/S.png', 'alphao/S.mp3'),
(20, 'alpha/T.png', 'alphao/T.mp3'),
(21, 'alpha/U.png', 'alphao/U.mp3'),
(22, 'alpha/V.png', 'alphao/V.mp3'),
(23, 'alpha/W.png', 'alphao/M.mp3'),
(24, 'alpha/X.png', 'alphao/N.mp3'),
(25, 'alpha/Y.png', 'alphao/O.mp3'),
(26, 'alpha/Z.png', 'alphao/P.mp3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `alpha`
--
ALTER TABLE `alpha`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `alpha`
--
ALTER TABLE `alpha`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
