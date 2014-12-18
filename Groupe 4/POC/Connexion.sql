-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 18 Décembre 2014 à 14:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `connexion`
--

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `libelle` varchar(50) CHARACTER SET utf8 NOT NULL,
  `idMenu` int(2) NOT NULL AUTO_INCREMENT,
  `idMenuParent` int(2) DEFAULT NULL,
  `lien` varchar(50) CHARACTER SET latin1 NOT NULL,
  `representation` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `emplacement` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`idMenu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs AUTO_INCREMENT=28 ;

--
-- Contenu de la table `menu`
--

INSERT INTO `menu` (`libelle`, `idMenu`, `idMenuParent`, `lien`, `representation`, `emplacement`) VALUES
('PR2L', 1, NULL, 'pr2l', NULL, NULL),
('Le projet', 2, 1, 'le projet', NULL, NULL),
('Fondateurs', 3, 1, 'fondateurs', NULL, NULL),
('ACTUALITES', 4, NULL, 'actualites', NULL, NULL),
('Revue de presse', 5, 1, 'revue de presse', NULL, NULL),
('Adhérer à l''association', 6, 1, 'adherer a l''association', NULL, NULL),
('Vie de l''association', 7, 1, 'vie de l''association', NULL, NULL),
('Actions / Evènements', 8, 4, 'actions evenements', NULL, NULL),
('Quoi de neuf ?', 9, 4, 'quoi de neuf', NULL, NULL),
('Autour de nous ?', 10, 4, 'autour de nous', NULL, NULL),
('PARTENAIRES', 11, NULL, 'partenaires', NULL, NULL),
('Gérer les partenaires', 12, 11, 'gerer les partenaires', NULL, NULL),
('RESSOURCES', 13, NULL, 'ressources', NULL, NULL),
('Catalogue d''archives', 14, 13, 'catalogue d''archives', NULL, NULL),
('Bibliothèque', 15, 13, 'bibliotheque', NULL, NULL),
('Travaux de recherche', 16, 13, 'travaux de recherche', NULL, NULL),
('Nos publications', 17, 13, 'nos publications', NULL, NULL),
('Liens utiles', 18, 13, 'liens utiles', NULL, NULL),
('CHANTIERS', 19, NULL, 'chantiers', NULL, NULL),
('Recensement pour la mutualité', 20, 19, 'recensement pour la mutualite', NULL, NULL),
('Inventaire de la coopération en Limousin', 21, 19, 'inventaire de la cooperation en limousin', NULL, NULL),
('INTRANET', 22, NULL, 'connexion', NULL, NULL),
('Connexion', 23, 22, 'connexion', NULL, NULL),
('Création', 24, 22, 'creation', NULL, NULL),
('Gestion des utilisateurs', 25, 22, 'gestion des utilisateurs', NULL, NULL),
('Modification d''informations', 26, 22, 'modification d''informations', NULL, NULL),
('Déconnexion', 27, 22, 'deconnexion', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `droits` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `login`, `password`, `nom`, `prenom`, `droits`) VALUES
(1, 'ODubos', 'azerty', 'Dubos', 'Olivier', 'admin'),
(13, 'PFrey', 'azerty', 'Frey', 'Pierre-Yves', 'admin'),
(14, 'test', 'test', 'test', 'test', 'aucun'),
(15, 'FJuchereau', 'mdp', 'Juchereau', 'Francis', 'lecture/ecriture');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
