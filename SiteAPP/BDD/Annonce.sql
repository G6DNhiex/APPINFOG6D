-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 06 Avril 2015 à 20:37
-- Version du serveur: 5.1.73
-- Version de PHP: 5.3.3-7+squeeze19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `app`
--

-- --------------------------------------------------------

--
-- Structure de la table `Annonce`
--

CREATE TABLE IF NOT EXISTS `Annonce` (
  `id_annonce` int(6) NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `quantite` int(4) NOT NULL,
  `prix` int(5) NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
