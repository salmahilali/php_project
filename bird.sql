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
-- Structure de la table `bird`
--

CREATE TABLE `bird` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `audio_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `bird`
--

INSERT INTO `bird` (`id`, `image_path`, `audio_path`) VALUES
(1, 'oiseaux/1.png\r\n', 'bird/1.mp3'),
(2, 'oiseaux/2.png\r\n', 'bird/2.mp3'),
(3, 'oiseaux/3.png\r\n', 'bird/3.mp3'),
(4, 'oiseaux/4.png\r\n', 'bird/4.mp3'),
(5, 'oiseaux/5.png\r\n', 'bird/5.mp3'),
(6, 'oiseaux/6.png\r\n', 'bird/6.mp3'),
(7, 'oiseaux/7.png\r\n', 'bird/7.mp3'),
(8, 'oiseaux/8.png\r\n', 'bird/8.mp3'),
(9, 'oiseaux/9.png\r\n', 'bird/9.mp3'),
(10, 'oiseaux/10.png\r\n', 'bird/10.mp3');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bird`
--
ALTER TABLE `bird`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bird`
--
ALTER TABLE `bird`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
