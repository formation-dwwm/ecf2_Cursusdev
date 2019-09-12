-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3305
-- Généré le :  jeu. 12 sep. 2019 à 14:48
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
-- Base de données :  `phpecf2`
--

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `idS` int(11) NOT NULL AUTO_INCREMENT,
  `nameService` varchar(50) NOT NULL,
  `descriptionService` varchar(100) NOT NULL,
  PRIMARY KEY (`idS`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`idS`, `nameService`, `descriptionService`) VALUES
(1, 'Maintenance', 'Les spécialistes du Hardware'),
(2, 'Web Developer', 'Pour eux tout est code'),
(3, 'Web Developer', 'Pour eux tout est code'),
(4, 'Web Designer', 'Y a que le CSS dans la vie'),
(5, 'Reférenceur', 'Les spécialistes du Hardware'),
(6, 'Maintenance', 'Regarde les Serps Google du matin au soir et du soir au matin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
