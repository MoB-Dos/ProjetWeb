-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 déc. 2019 à 08:45
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `classe` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`id`, `classe`) VALUES
(1, '3eme verte'),
(2, '3eme jaune'),
(3, '2nde TU'),
(4, '2nde MEI'),
(5, '2nde SN'),
(6, '1ere TU'),
(7, '1ere MEI'),
(8, '1ere SN'),
(9, '1ere STI2D'),
(10, 'Termiale TU'),
(11, 'Terminale MEI'),
(12, 'Terminale SN'),
(13, 'Terminale STI2D'),
(14, 'BTS SIO SLAM 1'),
(15, 'BTS SIO SLAM 2'),
(16, 'BTS SIO SISR 1'),
(17, 'BTS SIO SISR 2'),
(18, 'BTS CPRP 1'),
(19, 'BTS CPRP 2');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `profil_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nom_profil` varchar(20) NOT NULL,
  PRIMARY KEY (`profil_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`profil_id`, `nom_profil`) VALUES
(1, 'etudiant'),
(2, 'parent'),
(3, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `mail` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adresse` text NOT NULL,
  `classe` varchar(20) NOT NULL,
  `profil_id` smallint(5) UNSIGNED DEFAULT NULL,
  `mdp` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `tel`, `adresse`, `classe`, `profil_id`, `mdp`) VALUES
(4, 'Homura', 'Hanzo', 'h.homura@lprs.fr', '', '', '', 2, 'd4cfab1b518d245bc1fc8db52b6d8ddc'),
(19, 'Birba', 'Enzo', 'e.birba@lprs.fr', '0666666666', '5 avenue du général de gaulle', 'BTS SLAM', 1, '882baf28143fb700b388a87ef561a6e5'),
(22, 'test', 'test', 'n.goncalves@lprs.fr', '0611223345', 'a', '1ere TU', 1, 'cc8c0a97c2dfcd73caff160b65aa39e2'),
(24, 'Lignani', 'Quentin', 'q.lignani@lprs.fr', '0612345678', '12 avenue leclerc', 'BTS SIO SISR 1', 1, '04fa28f1f677681d3926ee07083c372d'),
(25, 'Guo', 'Loic', 'l.guo@lprs.fr', '0666666665', 'juste a cote', 'BTS SIO SLAM', 1, '6f1ed002ab5595859014ebf0951522d9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
