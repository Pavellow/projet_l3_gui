-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 08, 2023 at 09:55 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ShoePEA`
--

-- --------------------------------------------------------

--
-- Table structure for table `Chaussure`
--

CREATE TABLE `Chaussure` (
  `id_chaussure` int(11) NOT NULL,
  `modèle` varchar(50) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Chaussure`
--

INSERT INTO `Chaussure` (`id_chaussure`, `modèle`, `image`) VALUES
(1, 'Air Jordan 1', 'https://images.stockx.com/images/Air-Jordan-1-Retro-High-OG-Chicago-Reimagined-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1665691099&q=60'),
(2, 'Converse Chuck Taylor All Star', 'https://images.stockx.com/images/Converse-Chuck-Taylor-All-Star-70-Hi-Devin-Booker-The-Next-Icon-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1681886550&q=60'),
(3, 'Adidas Superstar', 'https://images.stockx.com/images/adidas-Superstar-White-Black-2019-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1654605853&q=60'),
(4, 'Nike Air Max 90', 'https://images.stockx.com/images/Nike-Air-Max-90-SE-Animal-White-W-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1655386259&q=60'),
(5, 'Vans Old Skool', 'https://images.stockx.com/images/Vans-Old-Skool-Black-White-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1607043282&q=60'),
(6, 'Reebok Classic Leather', 'https://images.stockx.com/images/Reebok-Classic-Leather-Footwear-White.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1655330998&q=60'),
(7, 'New Balance 990', 'https://images.stockx.com/images/New-Balance-990-v5-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1643116933&q=60'),
(8, 'Puma Suede', 'https://images.stockx.com/images/Puma-Suede-Classic-XXI-Black-White-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1637789014&q=60'),
(9, 'Asics Gel-Kayano', 'https://images.stockx.com/images/Asics-Gel-Kayano-14-White-Midnight-W-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1682925203&q=60'),
(10, 'Fila Disruptor', 'https://images.stockx.com/images/Fila-Disruptor-Premium-2-White-Navy-Red.jpeg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1626900572&q=60'),
(11, 'Timberland 6-Inch Boot', 'https://images.stockx.com/images/Timberland-6-Inch-Premium-Waterproof-Boots-Black-Nubuck-W.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1661370438&q=60'),
(12, 'Dr. Martens 1460', 'https://images.stockx.com/images/Dr-Martens-1460-Quad-Leather-Sole-Pentagram-Jumbo-Lace-Boot-Rick-Owens-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1675338043&q=60'),
(13, 'UGG Classic Short', 'https://images.stockx.com/images/UGG-Classic-Short-II-Boot-Chestnut-W-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1635280560&q=60'),
(14, 'Birkenstock Arizona', 'https://images.stockx.com/images/Birkenstock-Arizona-Birkibuc-Mocha-W.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1662486875&q=60'),
(15, 'Crocs Classic Clog', 'https://images.stockx.com/images/Crocs-Classic-Clog-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1655475540&q=60'),
(16, 'Gucci Ace', 'https://images.stockx.com/images/Gucci-Ace-Bee-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1672906797&q=60'),
(17, 'Prada Cloudbust', 'https://images.stockx.com/images/Prada-Cloudbust-Thunder-Knit-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1674547765&q=60'),
(18, 'Balenciaga Triple S', 'https://images.stockx.com/images/Balenciaga-Triple-S-Black-2019-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1605711911&q=60'),
(19, 'Saint Laurent SL/01', 'https://images.stockx.com/images/Saint-Laurent-Court-Classic-SL-06-Low-Black-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1657782387&q=60'),
(20, 'Common Projects Achilles Low', 'https://images.stockx.com/images/Common-Projects-Achilles-Low-Grey-Violet.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1665516051&q=60'),
(21, 'Rick Owens Geobasket', 'https://images.stockx.com/images/Rick-Owens-Strobe-Geobasket-High-Black-Milk.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1663002919&q=60'),
(22, 'Yeezy Boost 350', 'https://images.stockx.com/images/adidas-Yeezy-Boost-350-V2-Pure-Oat-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1648503664&q=60'),
(23, 'Off-White x Nike Air Force 1', 'https://images.stockx.com/images/Nike-Air-Force-1-Low-Off-White-Black-White-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1606322302&q=60'),
(24, 'Travis Scott x Air Jordan 1', 'https://images.stockx.com/images/Air-Jordan-1-Low-fragment-design-x-Travis-Scott-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1629307046&q=60'),
(25, 'A Bathing Ape Bapesta', 'https://images.stockx.com/images/A-Bathing-Ape-BAPEsta-ABC-Camo-20th-Anniversary-Blue-Product.jpg?fit=fill&bg=FFFFFF&w=140&h=75&fm=avif&auto=compress&dpr=2&trim=color&updated_at=1623165144&q=60');

-- --------------------------------------------------------

--
-- Table structure for table `Chaussure_Tags`
--

CREATE TABLE `Chaussure_Tags` (
  `id_chaussure` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Chaussure_Tags`
--

INSERT INTO `Chaussure_Tags` (`id_chaussure`, `id_tag`) VALUES
(1, 1),
(5, 2),
(7, 2),
(8, 2),
(11, 2),
(12, 2),
(17, 2),
(18, 2),
(19, 2),
(21, 2),
(23, 2),
(24, 2),
(1, 3),
(2, 3),
(3, 3),
(4, 3),
(6, 3),
(9, 3),
(10, 3),
(16, 3),
(19, 3),
(20, 3),
(21, 3),
(22, 3),
(24, 3),
(25, 3),
(24, 4),
(25, 4),
(13, 7),
(14, 7),
(9, 8),
(1, 12),
(3, 12),
(4, 12),
(6, 12),
(7, 12),
(10, 12),
(11, 12),
(12, 12),
(16, 12),
(18, 12),
(20, 12),
(21, 12),
(23, 12),
(24, 12),
(25, 12),
(8, 13),
(13, 13),
(19, 13),
(5, 15),
(9, 15),
(17, 15),
(22, 15),
(14, 18),
(1, 20),
(2, 20),
(3, 20),
(5, 20),
(6, 20),
(7, 20),
(8, 20),
(9, 20),
(10, 20),
(11, 20),
(12, 20),
(16, 20),
(18, 20),
(19, 20),
(22, 20),
(23, 20),
(24, 20),
(25, 20),
(14, 22),
(1, 28),
(4, 28),
(6, 28),
(7, 28),
(8, 28),
(9, 28),
(10, 28),
(16, 28),
(17, 28),
(18, 28),
(20, 28),
(23, 28),
(24, 28),
(25, 28),
(11, 29),
(21, 29),
(4, 36),
(13, 51),
(2, 67),
(5, 67),
(6, 67),
(8, 67),
(10, 67),
(14, 67),
(3, 68),
(4, 68),
(7, 68),
(9, 68),
(1, 69),
(11, 69),
(12, 69),
(13, 69),
(16, 69),
(17, 69),
(18, 69),
(19, 69),
(20, 69),
(21, 69),
(22, 69),
(23, 69),
(24, 69),
(25, 69),
(7, 70),
(22, 70),
(23, 70),
(9, 71),
(10, 71),
(11, 71),
(12, 71),
(13, 71),
(14, 71),
(21, 71),
(25, 71),
(1, 72),
(2, 72),
(3, 72),
(4, 72),
(5, 72),
(8, 72),
(16, 72),
(17, 72),
(18, 72),
(19, 72),
(20, 72),
(24, 72),
(2, 74),
(3, 74),
(4, 74),
(8, 74),
(10, 74),
(11, 74),
(12, 74),
(13, 74),
(14, 74),
(16, 74),
(17, 74),
(18, 74),
(19, 74),
(20, 74),
(21, 74),
(22, 74),
(23, 74),
(24, 74),
(25, 74),
(1, 77),
(7, 79),
(9, 79),
(9, 80);

-- --------------------------------------------------------

--
-- Table structure for table `Choix_utilisateur`
--

CREATE TABLE `Choix_utilisateur` (
  `id_tag` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `choix` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `historique_navigation_utilisateur`
--

CREATE TABLE `historique_navigation_utilisateur` (
  `id_visite` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `url_page` varchar(255) NOT NULL,
  `titre_page` varchar(255) NOT NULL,
  `date_visite` date NOT NULL,
  `duree_visite` int(64) NOT NULL COMMENT 'Durée en millisecondes',
  `ip_utilisateur` varchar(39) NOT NULL,
  `navigateur_utilisateur` varchar(255) NOT NULL,
  `os_utilisateur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Tags`
--

CREATE TABLE `Tags` (
  `id_tag` int(11) NOT NULL,
  `nom_tag` varchar(20) NOT NULL,
  `type_tag` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Tags`
--

INSERT INTO `Tags` (`id_tag`, `nom_tag`, `type_tag`) VALUES
(1, 'Rouge', 'Couleur'),
(2, 'Noir', 'Couleur'),
(3, 'Blanc', 'Couleur'),
(4, 'Bleu', 'Couleur'),
(5, 'Vert', 'Couleur'),
(6, 'Jaune', 'Couleur'),
(7, 'Marron', 'Couleur'),
(8, 'Gris', 'Couleur'),
(9, 'Rose', 'Couleur'),
(10, 'Violet', 'Couleur'),
(11, 'Orange', 'Couleur'),
(12, 'Cuir', 'Matière'),
(13, 'Daim', 'Matière'),
(14, 'Nubuck', 'Matière'),
(15, 'Toile', 'Matière'),
(16, 'Mesh', 'Matière'),
(17, 'Synthétique', 'Matière'),
(18, 'Caoutchouc', 'Matière'),
(19, 'Coton', 'Matière'),
(20, 'Lacets', 'Fermeture'),
(21, 'Scratch', 'Fermeture'),
(22, 'Boucle', 'Fermeture'),
(23, 'Zip', 'Fermeture'),
(24, 'Talon plat', 'Type de talon'),
(25, 'Talon haut', 'Type de talon'),
(26, 'Plateforme', 'Type de talon'),
(27, 'Compensé', 'Type de talon'),
(28, 'Baskets', 'Style'),
(29, 'Bottes', 'Style'),
(30, 'Sandales', 'Style'),
(31, 'Mocassins', 'Style'),
(32, 'Escarpins', 'Style'),
(33, 'Or', 'Couleur'),
(34, 'Argent', 'Couleur'),
(35, 'Bronze', 'Couleur'),
(36, 'Imperméable', 'Matière'),
(37, 'Paillettes', 'Matière'),
(38, 'Velours', 'Matière'),
(39, 'Simili-cuir', 'Matière'),
(40, 'Laine', 'Matière'),
(41, 'Fourrure', 'Matière'),
(42, 'Bout rond', 'Forme de bout'),
(43, 'Bout pointu', 'Forme de bout'),
(44, 'Bout carré', 'Forme de bout'),
(45, 'Bout ouvert', 'Forme de bout'),
(46, 'Bout fermé', 'Forme de bout'),
(47, 'Bout amande', 'Forme de bout'),
(48, 'Fermeture éclair', 'Fermeture'),
(49, 'Fermeture à lacets', 'Fermeture'),
(50, 'Fermeture à boucle', 'Fermeture'),
(51, 'Sans lacets', 'Fermeture'),
(52, 'Talon aiguille', 'Type de talon'),
(53, 'Talon bottier', 'Type de talon'),
(54, 'Talon bobine', 'Type de talon'),
(55, 'Talon carré', 'Type de talon'),
(56, 'Talon compensé', 'Type de talon'),
(57, 'Talon cubain', 'Type de talon'),
(58, 'Talon plateforme', 'Type de talon'),
(59, 'Talon trotteur', 'Type de talon'),
(60, 'Talon carré bas', 'Type de talon'),
(61, 'Derby', 'Style'),
(62, 'Oxford', 'Style'),
(63, 'Mules', 'Style'),
(64, 'Chaussons', 'Style'),
(65, 'Tongs', 'Style'),
(66, 'Moins de 50€', 'Fourchette de prix'),
(67, '50€ - 100€', 'Fourchette de prix'),
(68, '100€ - 200€', 'Fourchette de prix'),
(69, 'Plus de 200€', 'Fourchette de prix'),
(70, 'Homme', 'Sexe'),
(71, 'Femme', 'Sexe'),
(72, 'Unisexe', 'Sexe'),
(73, 'Randonnée', 'Utilité'),
(74, 'Ville', 'Utilité'),
(75, 'Football', 'Utilité'),
(76, 'Golf', 'Utilité'),
(77, 'Basketball', 'Utilité'),
(78, 'Tennis', 'Utilité'),
(79, 'Running', 'Utilité'),
(80, 'Trail', 'Utilité'),
(81, 'Fitness', 'Utilité'),
(82, 'Skate', 'Utilité'),
(83, 'Sans talon', 'Type de talon');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(64) NOT NULL,
  `motdepasse` varchar(128) NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  `date_inscription` datetime DEFAULT NULL,
  `date_connexion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `mail`, `motdepasse`, `pseudo`, `date_inscription`, `date_connexion`) VALUES
(41, 'Vinciguerra', 'Paul-Antoine', 'polo2b1.pav@gmail.com', 'aze', 'Galeag', '2023-03-25 13:25:19', '2023-03-30 09:57:32'),
(63, 'aer', 'et', 'e@e.fr', 'aze', 'aze', '2023-03-27 11:22:50', '2023-03-27 13:22:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Chaussure`
--
ALTER TABLE `Chaussure`
  ADD PRIMARY KEY (`id_chaussure`);

--
-- Indexes for table `Chaussure_Tags`
--
ALTER TABLE `Chaussure_Tags`
  ADD PRIMARY KEY (`id_chaussure`,`id_tag`),
  ADD KEY `fk_tag` (`id_tag`);

--
-- Indexes for table `Choix_utilisateur`
--
ALTER TABLE `Choix_utilisateur`
  ADD KEY `id_utilisateur` (`id_utilisateur`),
  ADD KEY `choix_utilisateur_ibfk_1` (`id_tag`);

--
-- Indexes for table `historique_navigation_utilisateur`
--
ALTER TABLE `historique_navigation_utilisateur`
  ADD PRIMARY KEY (`id_visite`),
  ADD KEY `id_utilisateur` (`id_utilisateur`);

--
-- Indexes for table `Tags`
--
ALTER TABLE `Tags`
  ADD PRIMARY KEY (`id_tag`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Chaussure`
--
ALTER TABLE `Chaussure`
  MODIFY `id_chaussure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `historique_navigation_utilisateur`
--
ALTER TABLE `historique_navigation_utilisateur`
  MODIFY `id_visite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Tags`
--
ALTER TABLE `Tags`
  MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Chaussure_Tags`
--
ALTER TABLE `Chaussure_Tags`
  ADD CONSTRAINT `fk_chaussure` FOREIGN KEY (`id_chaussure`) REFERENCES `Chaussure` (`id_chaussure`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tag` FOREIGN KEY (`id_tag`) REFERENCES `Tags` (`id_tag`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Choix_utilisateur`
--
ALTER TABLE `Choix_utilisateur`
  ADD CONSTRAINT `choix_utilisateur_ibfk_1` FOREIGN KEY (`id_tag`) REFERENCES `Tags` (`id_tag`),
  ADD CONSTRAINT `choix_utilisateur_ibfk_2` FOREIGN KEY (`id_utilisateur`) REFERENCES `utilisateur` (`id_utilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
