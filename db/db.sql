-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 21 mars 2023 à 17:07
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
  `prix` decimal(10,2) NOT NULL,
  `type` varchar(50) NOT NULL,
  `genre` varchar(10) NOT NULL,
  `matiere` varchar(50) NOT NULL,
  `hauteur` varchar(50) NOT NULL,
  `largeur` varchar(50) NOT NULL,
  `saison` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `Chaussure`
--

INSERT INTO `Chaussure` (`id_chaussure`, `marque`, `modele`, `pointure`, `couleur`, `prix`, `type`, `genre`, `matiere`, `hauteur`, `largeur`, `saison`) VALUES
(1, 'Nike', 'Air Max 90', 42, 'Blanc/Gris', '129.99', 'Baskets', 'Homme', 'Cuir/Synthétique', 'Basse', 'Standard', 'Toutes saisons'),
(2, 'Adidas', 'Stan Smith', 40, 'Blanc/Vert', '89.99', 'Baskets', 'Femme', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(3, 'Converse', 'Chuck Taylor All Star', 38, 'Noir', '69.99', 'Baskets', 'Femme', 'Toile', 'Basse', 'Standard', 'Toutes saisons'),
(4, 'Vans', 'Old Skool', 41, 'Noir/Blanc', '79.99', 'Baskets', 'Unisexe', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(5, 'New Balance', '574', 44, 'Gris/Bleu', '109.99', 'Baskets', 'Homme', 'Cuir/Synthétique', 'Basse', 'Standard', 'Toutes saisons'),
(6, 'Nike', 'Air Force 1', 42, 'Noir/Blanc', '119.99', 'Baskets', 'Homme', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(7, 'Adidas', 'Superstar', 39, 'Blanc/Rose', '99.99', 'Baskets', 'Femme', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(8, 'Puma', 'Suede Classic', 43, 'Bleu Marine/Blanc', '79.99', 'Baskets', 'Homme', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(9, 'Reebok', 'Classic Leather', 38, 'Blanc', '89.99', 'Baskets', 'Femme', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(10, 'Asics', 'Gel-Kayano 27', 41, 'Gris/Bleu', '169.99', 'Baskets', 'Homme', 'Synthétique', 'Basse', 'Standard', 'Toutes saisons'),
(11, 'Dr. Martens', '1460', 37, 'Noir', '149.99', 'Bottes', 'Femme', 'Cuir', 'Moyenne', 'Standard', 'Toutes saisons'),
(12, 'Timberland', '6 Inch Premium Boot', 40, 'Beige', '179.99', 'Bottes', 'Homme', 'Cuir', 'Moyenne', 'Standard', 'Toutes saisons'),
(13, 'UGG', 'Classic Short II', 39, 'Marron', '189.99', 'Bottes', 'Femme', 'Daim', 'Courte', 'Standard', 'Hiver'),
(14, 'Sorel', 'Caribou', 42, 'Noir', '199.99', 'Bottes', 'Homme', 'Cuir', 'Haute', 'Standard', 'Hiver'),
(15, 'Hunter', 'Original Tall', 38, 'Vert', '129.99', 'Bottes', 'Femme', 'Caoutchouc', 'Haute', 'Standard', 'Toutes saisons'),
(16, 'Birkenstock', 'Arizona', 43, 'Marron', '79.99', 'Sandales', 'Homme', 'Cuir', 'Basse', 'Standard', 'Toutes saisons'),
(17, 'Teva', 'Original Universal', 39, 'Noir', '59.99', 'Sandales', 'Femme', 'Synthétique', 'Basse', 'Standard', 'Toutes saisons'),
(18, 'Crocs', 'Classic', 41, 'Bleu Clair', '29.99', 'Sabots', 'Unisexe', 'Synthétique', 'Basse', 'Standard', 'Toutes saisons'),
(19, 'Havaianas', 'Slim', 37, 'Noir', '24.99', 'Tongs', 'Femme', 'Caoutchouc', 'Basse', 'Standard', 'Toutes saisons'),
(20, 'Quiksilver', 'Molokai Layback', 42, 'Gris/Noir', '19.99', 'Tongs', 'Homme', 'Synthétique', 'Basse', 'Standard', 'Toutes saisons');

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
