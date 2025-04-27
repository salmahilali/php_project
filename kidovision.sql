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
-- Structure de la table `kidovision`
--

CREATE TABLE `kidovision` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `link_path` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `kidovision`
--

INSERT INTO `kidovision` (`id`, `image_path`, `link_path`, `Title`) VALUES
(1, 'kidovision/2.png', 'https://youtu.be/ufxb8vvMgog', 'Les jours de la semaine'),
(2, 'kidovision/1.png', 'https://youtu.be/NCO2Ddo5njI', 'Les mois de l\'année'),
(3, 'kidovision/3.png', 'https://youtu.be/QWtBrwO6r1g', 'Les saisons'),
(4, 'kidovision/4.png', 'https://youtu.be/zTTgnHBAbNg?list=PL5lMl55z9h0lQI3M7Z4So4JzhVssEik6A', 'Les animaux de la ferme'),
(5, 'kidovision/5.png', 'http://localhost:3000/po%C3%A9me.php', 'Les poémes '),
(6, 'kidovision/6.png', 'http://localhost:3000/index.php', 'Les Histoires '),
(7, 'kidovision/7.png', 'http://localhost:3000/coloring.php', 'Le livre de coloriage'),
(8, 'kidovision/8.png', 'http://localhost:3000/%C3%A9motions.php', 'Les émotions');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `kidovision`
--
ALTER TABLE `kidovision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `kidovision`
--
ALTER TABLE `kidovision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
