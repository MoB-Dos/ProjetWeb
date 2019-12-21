-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 21 déc. 2019 à 16:19
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

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
  `classe` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`classe`) VALUES
('3eme'),
('2nde TU'),
('2nde SN'),
('2nde MEI'),
('1ere TU'),
('1ere SN'),
('1ere MEI'),
('1ere STI2D'),
('Terminale TU'),
('Terminale SN'),
('Terminale MEI'),
('Terminale STI2D'),
('BTS CPRP 1'),
('BTS CPRP 2'),
('BTS SIO SLAM 1'),
('BTS SIO SLAM 2'),
('BTS SIO SISR 1'),
('BTS SIO SISR 2');

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

DROP TABLE IF EXISTS `profil`;
CREATE TABLE IF NOT EXISTS `profil` (
  `profil` varchar(15) CHARACTER SET utf8 NOT NULL,
  `profil_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `profil`
--

INSERT INTO `profil` (`profil`, `profil_id`) VALUES
('Etudiant', 1),
('Parent', 2),
('Admin', 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(40) NOT NULL,
  `prenom` varchar(40) NOT NULL,
  `mail` text NOT NULL,
  `tel` varchar(15) NOT NULL,
  `adresse` text NOT NULL,
  `classe` varchar(20) DEFAULT NULL,
  `profil_id` int(11) NOT NULL,
  `mdp` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `mail`, `tel`, `adresse`, `classe`, `profil_id`, `mdp`) VALUES
(1, 'test', 'test', 'test', '0612345678', 'test', NULL, 3, '098f6bcd4621d373cade4e832627b4f6'),
(2, 'Goncalves', 'Nathan', 'n.goncalves@lprs.fr', '0611077677', '19 rue de Pologne 93600 Aulnay-sous-bois', 'BTS SIO SLAM 1', 1, 'ab4f63f9ac65152575886860dde480a1'),
(3, 'Guo', 'Loic', 'l.guo@lprs.fr', '0611223344', 'Dugny', 'BTS SIO SLAM 1', 2, '6f1ed002ab5595859014ebf0951522d9');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
