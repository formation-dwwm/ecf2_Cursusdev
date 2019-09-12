-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3305
-- Généré le :  jeu. 12 sep. 2019 à 23:18
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
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `idU` int(11) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `adress1` text NOT NULL,
  `adress2` text NOT NULL,
  `postal` char(5) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `services` int(11) NOT NULL,
  PRIMARY KEY (`idU`),
  KEY `services` (`services`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`idU`, `firstName`, `lastName`, `birthday`, `adress1`, `adress2`, `postal`, `phone`, `services`) VALUES
(5, 'Cursusdev', 'Dev', '2000-05-05', 'Avenue Charles de Gaule', 'RÃ©sidence BeausÃ©jour', '83200', '06-07-08-09-10', 6),
(6, 'Cursusdev', 'Dev', '2000-05-05', 'Avenue Charles de Gaule', 'RÃ©sidence BeausÃ©jour', '83200', '06-07-08-09-10', 1),
(15, 'Cursusdev', 'Dev', '2000-05-05', 'Avenue Charles de Gaule', 'RÃ©sidence BeausÃ©jour', '83200', '06-07-08-09-10', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
