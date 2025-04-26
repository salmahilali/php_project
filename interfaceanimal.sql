-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 26 avr. 2025 à 18:48
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
-- Structure de la table `interfaceanimal`
--

CREATE TABLE `interfaceanimal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `audio` longblob DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `interfaceanimal`
--

INSERT INTO `interfaceanimal` (`id`, `nombre`, `audio`, `image_path`) VALUES
(1, NULL, NULL, 'interfaceanimal/1.png\r\n'),
(3, NULL, NULL, 'interfaceanimal/3.png\r\n'),
(4, NULL, NULL, 'interfaceanimal/4.png\r\n'),
(5, NULL, NULL, 'interfaceanimal/5.png\r\n'),
(6, NULL, NULL, 'interfaceanimal/6.png\r\n'),
(7, NULL, NULL, 'interfaceanimal/7.png\r\n');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `interfaceanimal`
--
ALTER TABLE `interfaceanimal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `interfaceanimal`
--
ALTER TABLE `interfaceanimal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
