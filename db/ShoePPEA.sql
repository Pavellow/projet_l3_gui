-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 30, 2023 at 11:33 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ShoePPEA`
--

-- --------------------------------------------------------

--
-- Table structure for table `Chaussure`
--

CREATE TABLE `Chaussure` (
  `id_chaussure` int(11) NOT NULL,
  `modèle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Chaussure`
--

INSERT INTO `Chaussure` (`id_chaussure`, `modèle`) VALUES
(1, 'Air Jordan 1'),
(2, 'Converse Chuck Taylor All Star'),
(3, 'Adidas Superstar'),
(4, 'Nike Air Max 90'),
(5, 'Vans Old Skool'),
(6, 'Reebok Classic Leather'),
(7, 'New Balance 990'),
(8, 'Puma Suede'),
(9, 'Asics Gel-Kayano'),
(10, 'Fila Disruptor'),
(11, 'Timberland 6-Inch Boot'),
(12, 'Dr. Martens 1460'),
(13, 'UGG Classic Short'),
(14, 'Birkenstock Arizona'),
(15, 'Crocs Classic Clog'),
(16, 'Gucci Ace'),
(17, 'Prada Cloudbust'),
(18, 'Balenciaga Triple S'),
(19, 'Saint Laurent SL/01'),
(20, 'Common Projects Achilles Low'),
(21, 'Rick Owens Geobasket'),
(22, 'Yeezy Boost 350'),
(23, 'Off-White x Nike Air Force 1'),
(24, 'Travis Scott x Air Jordan 1'),
(25, 'A Bathing Ape Bapesta'),
(26, 'Eytys Angel'),
(27, 'Maison Margiela Replica'),
(28, 'Acne Studios Manhattan'),
(29, 'Veja V-10'),
(30, 'Golden Goose Superstar'),
(31, 'Nike Air Max 270'),
(32, 'Adidas Ultra Boost'),
(33, 'New Balance 990'),
(34, 'Asics Gel-Kayano 27'),
(35, 'Puma Suede Classic'),
(36, 'Vans Old Skool'),
(37, 'Converse Chuck Taylor All Star'),
(38, 'Reebok Classic Leather'),
(39, 'Saucony Jazz Original Vintage'),
(40, 'Fila Disruptor II'),
(41, 'Brooks Ghost 13'),
(42, 'Mizuno Wave Rider 24'),
(43, 'Under Armour HOVR Sonic 3'),
(44, 'Hoka One One Clifton 7'),
(45, 'Salomon Speedcross 5'),
(46, 'Merrell Moab 2'),
(47, 'Keen Targhee III'),
(48, 'Timberland Chocorua Trail'),
(49, 'Columbia Redmond V2'),
(50, 'The North Face Hedgehog Fastpack II'),
(51, 'Adidas Stan Smith'),
(52, 'Nike Blazer Mid 77'),
(53, 'Reebok Club C 85'),
(54, 'Puma Cali'),
(55, 'Converse One Star'),
(56, 'Vans SK8-Hi'),
(57, 'New Balance 574'),
(58, 'Saucony Shadow Original'),
(59, 'Asics Tiger Gel-Lyte III'),
(60, 'Fila Ray'),
(61, 'Brooks Glycerin 19'),
(62, 'Mizuno Wave Inspire 17'),
(63, 'Under Armour Charged Assert 8'),
(64, 'Hoka One One Bondi 7'),
(65, 'Salomon XA Pro 3D V8'),
(66, 'Merrell Moab Edge 2'),
(67, 'Keen Voyageur'),
(68, 'Timberland Mt. Maddsen Mid'),
(69, 'Columbia Granite Ridge Mid'),
(70, 'The North Face Storm III'),
(71, 'Adidas NMD_R1'),
(72, 'Nike React Element 55'),
(73, 'Reebok Aztrek'),
(74, 'Puma RS-X3'),
(75, 'Converse Jack Purcell'),
(76, 'Vans Era'),
(77, 'New Balance Fresh Foam Hierro v6'),
(78, 'Saucony Endorphin Speed 2'),
(79, 'Asics Novablast'),
(80, 'Fila Spaghetti Low'),
(81, 'Brooks Levitate 4'),
(82, 'Mizuno Wave Sky 4'),
(83, 'Under Armour Surge 2'),
(84, 'Hoka One One Mach 4'),
(85, 'Salomon Sense Ride 4'),
(86, 'Merrell MQM Flex 2'),
(87, 'Keen Oakridge'),
(88, 'Timberland Groveton Chukka'),
(89, 'Columbia Crestwood Mid Waterproof'),
(90, 'The North Face Ultra Fastpack IV Mid'),
(91, 'Adidas ZX 750'),
(92, 'Nike Air Force 1'),
(93, 'Reebok Workout Plus'),
(94, 'Puma Ralph Sampson Lo'),
(95, 'Converse Pro Leather'),
(96, 'Vans Slip-On'),
(97, 'New Balance FuelCell Propel v3'),
(98, 'Saucony Peregrine 11'),
(99, 'Asics Gel-Cumulus 23'),
(100, 'Fila Mindblower');

-- --------------------------------------------------------

--
-- Table structure for table `Chaussure_Tags`
--

CREATE TABLE `Chaussure_Tags` (
  `id_chaussure` int(11) NOT NULL,
  `id_tag` int(11) NOT NULL
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
  MODIFY `id_chaussure` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
