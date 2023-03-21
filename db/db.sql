-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 21 mars 2023 à 16:44
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `shoepea`
--

-- --------------------------------------------------------

--
-- Structure de la table `Chaussure`
--

CREATE TABLE `Chaussure` (
  `id_chaussure` int(11) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `modele` varchar(50) NOT NULL,
  `pointure` int(11) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `prix` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Chaussure`
--

INSERT INTO `Chaussure` (`id_chaussure`, `marque`, `modele`, `pointure`, `couleur`, `prix`) VALUES
(1, 'Nike', 'Air Max 90', 42, 'Blanc/Gris', '129.99'),
(2, 'Adidas', 'Stan Smith', 40, 'Blanc/Vert', '89.99'),
(3, 'Converse', 'Chuck Taylor All Star', 38, 'Noir', '69.99'),
(4, 'Vans', 'Old Skool', 41, 'Noir/Blanc', '79.99'),
(5, 'New Balance', '574', 44, 'Gris/Bleu', '109.99'),
(6, 'Nike', 'Air Force 1', 42, 'Noir/Blanc', '119.99'),
(7, 'Adidas', 'Superstar', 39, 'Blanc/Rose', '99.99'),
(8, 'Puma', 'Suede Classic', 43, 'Bleu Marine/Blanc', '79.99'),
(9, 'Reebok', 'Club C 85', 41, 'Blanc/Gum', '89.99'),
(10, 'Fila', 'Disruptor', 38, 'Blanc', '99.99'),
(11, 'Dr. Martens', '1460', 42, 'Noir', '149.99'),
(12, 'Timberland', '6-Inch Premium Boot', 40, 'Wheat', '189.99'),
(13, 'Vans', 'Sk8-Hi', 41, 'Noir', '89.99'),
(14, 'New Balance', '997H', 44, 'Noir/Blanc', '99.99'),
(15, 'Asics', 'Gel-Lyte III', 43, 'Gris/Bleu', '129.99'),
(16, 'Saucony', 'Jazz Original', 39, 'Noir/Blanc', '89.99'),
(17, 'Converse', 'One Star', 38, 'Rose', '79.99'),
(18, 'Vans', 'Authentic', 41, 'Bleu Marine', '69.99'),
(19, 'Nike', 'Cortez', 42, 'Blanc/Rouge', '89.99'),
(20, 'Adidas', 'Gazelle', 40, 'Noir/Blanc', '99.99');

-- --------------------------------------------------------

--
-- Structure de la table `MatchChaussure`
--

CREATE TABLE `MatchChaussure` (
  `id_utilisateur` int(11) NOT NULL,
  `id_chaussure` int(11) NOT NULL,
  `like_dislike` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sexe` varchar(10) NOT NULL,
  `pointure` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Chaussure`
--
ALTER TABLE `Chaussure`
  ADD PRIMARY KEY (`id_chaussure`);

--
-- Index pour la table `MatchChaussure`
--
ALTER TABLE `MatchChaussure`
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `id_chaussure` (`id_chaussure`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `MatchChaussure`
--
ALTER TABLE `MatchChaussure`
  ADD CONSTRAINT `matchchaussure_ibfk_1` FOREIGN KEY (`id_utilisateur`) REFERENCES `Utilisateur` (`id_utilisateur`),
  ADD CONSTRAINT `matchchaussure_ibfk_2` FOREIGN KEY (`id_chaussure`) REFERENCES `Chaussure` (`id_chaussure`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
