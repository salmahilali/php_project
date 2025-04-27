-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 27 avr. 2025 à 23:38
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
-- Structure de la table `poisson`
--

CREATE TABLE `poisson` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `audio_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `poisson`
--

INSERT INTO `poisson` (`id`, `image_path`, `audio_path`) VALUES
(2, 'poissons/2.png\r\n', 'poissono/baleine.mp3'),
(3, 'poissons/3.png\r\n', 'poissono/béluga.mp3'),
(4, 'poissons/4.png\r\n', 'poissono/corail.mp3'),
(5, 'poissons/5.png\r\n', 'poissono/crabe.mp3'),
(6, 'poissons/6.png\r\n', 'poissono/crevette.mp3'),
(7, 'poissons/7.png\r\n', 'poissono/dauphin.mp3'),
(8, 'poissons/8.png\r\n', 'poissono/étoile de mer.mp3'),
(9, 'poissons/9.png\r\n', 'poissono/homard.mp3'),
(10, 'poissons/10.png\r\n', 'poissono/carassius auratus.mp3'),
(12, 'poissons/12.png\r\n', 'poissono/méduse.mp3'),
(13, 'poissons/13.png\r\n', 'poissono/poisson chat.mp3'),
(14, 'poissons/14.png\r\n', 'poissono/raie.mp3'),
(15, 'poissons/15.png\r\n', 'poissono/poulpe.mp3'),
(16, 'poissons/16.png\r\n', 'poissono/requin.mp3'),
(17, 'poissons/17.png\r\n', 'poissono/salmon.mp3'),
(18, 'poissons/18.png\r\n', 'poissono/thon.mp3'),
(19, 'poissons/19.png\r\n', 'poissono/tortue de mer.mp3'),
(20, 'poissons/20.png\r\n', 'poissono/huitre.mp3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `poisson`
--
ALTER TABLE `poisson`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `poisson`
--
ALTER TABLE `poisson`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
