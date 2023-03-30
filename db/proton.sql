-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 mars 2023 à 07:58
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `proton`
--

-- --------------------------------------------------------

--
-- Structure de la table `historique_navigation_utilisateur`
--

DROP TABLE IF EXISTS `historique_navigation_utilisateur`;
CREATE TABLE IF NOT EXISTS `historique_navigation_utilisateur` (
  `id_visite` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `url_page` varchar(255) NOT NULL,
  `titre_page` varchar(255) NOT NULL,
  `date_visite` date NOT NULL,
  `duree_visite` int(64) NOT NULL COMMENT 'Durée en millisecondes',
  `ip_utilisateur` varchar(39) NOT NULL,
  `navigateur_utilisateur` varchar(255) NOT NULL,
  `os_utilisateur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_visite`),
  KEY `id_utilisateur` (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `motdepasse` varchar(128) NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `date_connexion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `mail`, `motdepasse`, `pseudo`, `date_inscription`, `date_connexion`) VALUES
(41, 'Vinciguerra', 'Paul-Antoine', 'polo2b1.pav@gmail.com', 'aze', 'Galeag', '2023-03-25 13:25:19', '2023-03-30 09:57:32'),
(63, 'aer', 'et', 'e@e.fr', 'aze', 'aze', '2023-03-27 11:22:50', '2023-03-27 13:22:54');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
