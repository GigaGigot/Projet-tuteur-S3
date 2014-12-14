-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 11 Décembre 2014 à 15:20
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pr2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'en auto-incrément',
  `user_login` varchar(100) NOT NULL,
  `user_mdp` varchar(100) NOT NULL COMMENT 'mot de passe crypté',
  `user_nom` varchar(50) NOT NULL,
  `user_prenom` varchar(50) NOT NULL,
  `user_tel` char(10) NOT NULL COMMENT 'sur 10 chiffre, et commence par 0',
  `user_email` varchar(60) NOT NULL COMMENT 'format email',
  `user_adherent` char(1) NOT NULL COMMENT 'o/n',
  `user_typeCompte` varchar(50) NOT NULL COMMENT 'adherent, contributeur, moderateur, administrateur',
  `user_roles` varchar(100) NOT NULL,
  `user_derniereConnexion` date NOT NULL COMMENT 'format date',
  `user_droit` varchar(30) NOT NULL COMMENT 'admin, lecture, lecture/ecriture',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Vider la table avant d'insérer `user`
--

TRUNCATE TABLE `user`;
--
-- Contenu de la table `user`
--

INSERT INTO `user` (`user_id`, `user_login`, `user_mdp`, `user_nom`, `user_prenom`, `user_tel`, `user_email`, `user_adherent`, `user_typeCompte`, `user_roles`, `user_derniereConnexion`, `user_droit`) VALUES
(0, 'admin', '99cf22cf484c8f21df160dedabb0f129325dd6ea', 'Root', 'Admin', '0000000000', 'admin@pr2l.fr', 'o', 'administrateur', 'directeur', '2014-12-11', 'admin'),
(1, 'odubos', '5fb1a0ca5063dfaeedf1d98dc89f59032c92bef1', 'Dubos', 'Olivier', '0000000000', 'olivier.dubos@pr2l.fr', 'o', 'moderateur', 'directeur', '2014-12-11', 'lecture/ecriture'),
(20, 'noredacteur', '77b83a0661cc700ccffdd7bddd9ff90dfaf60619', 'Pas redacteur', 'Pas redacteur', '0000000000', 'a@b.fr', 'o', 'adherent', 'secretaire', '2014-12-11', 'lecture');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
