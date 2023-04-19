-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 05 avr. 2023 à 09:10
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vehiculeroy`
--

-- --------------------------------------------------------

--
-- Structure de la table `carburant`
--

DROP TABLE IF EXISTS `carburant`;
CREATE TABLE IF NOT EXISTS `carburant` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `carburant`
--

INSERT INTO `carburant` (`Id`, `Libelle`) VALUES
(1, 'GPL'),
(2, 'Essence'),
(3, 'Éléctrique'),
(4, 'Diesel'),
(5, 'Éthanol'),
(6, 'Hydrogène'),
(7, 'Hybride');

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `etat`
--

INSERT INTO `etat` (`id`, `Libelle`) VALUES
(1, 'Neuf'),
(2, 'Occasion'),
(3, 'Épave');

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

DROP TABLE IF EXISTS `marque`;
CREATE TABLE IF NOT EXISTS `marque` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`id`, `Libelle`) VALUES
(1, 'BMW'),
(2, 'Peugeot'),
(3, 'Audi'),
(4, 'Renault'),
(5, 'Volkswagen'),
(6, 'Seat'),
(7, 'Suzuki'),
(8, 'Mercedes'),
(9, 'Mazda'),
(10, 'Volvo'),
(11, 'Alpine'),
(12, 'Citroën'),
(13, 'Mini'),
(14, 'Dacia'),
(15, 'Fiat'),
(16, 'Ford'),
(17, 'Alfa Romeo'),
(18, 'Tesla'),
(19, 'Mustang'),
(20, 'Opel'),
(21, 'Toyota'),
(22, 'Chevrolet'),
(23, 'Dodge'),
(24, 'Nissan'),
(25, 'Honda'),
(26, 'Subaru'),
(27, 'Ferrari'),
(28, 'Abarth'),
(29, 'Lamborghini'),
(30, 'Jeep'),
(31, 'Porshe'),
(32, 'Rolls-Royce'),
(33, 'Jaguar'),
(34, 'Corvette'),
(35, 'Skoda'),
(36, 'Lotus'),
(37, 'Mitsubishi'),
(38, 'Maserati'),
(39, 'Kia'),
(40, 'Land Rover');

-- --------------------------------------------------------

--
-- Structure de la table `typevehicule`
--

DROP TABLE IF EXISTS `typevehicule`;
CREATE TABLE IF NOT EXISTS `typevehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `typevehicule`
--

INSERT INTO `typevehicule` (`id`, `Libelle`) VALUES
(1, 'Berline'),
(2, '4x4'),
(3, 'Pick-up'),
(4, 'SUV'),
(5, 'Coupé');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Prenom` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Mdp` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `NomUtilisateur` varchar(32) COLLATE latin1_general_ci NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0',
  `Telephone` int(11) NOT NULL,
  `Email` varchar(32) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Nom`, `Prenom`, `Mdp`, `NomUtilisateur`, `Admin`, `Telephone`, `Email`) VALUES
(1, 'Crane', 'Jama', '9q3v76GAqy6DUv', 'CyberJamal', 0, 725178848, 'jamalcrane@hotmail.com'),
(2, 'Wagner', 'Isabella', 'dcd7xi7375QNMH', 'WhiteIsabella', 0, 498766440, 'isabellawagner5164@gmail.com'),
(3, 'Lindsey', 'Carla', 'd6C5b3BjM5Gg9b', 'SaphireCarla', 0, 877548377, 'carlalindsey6864@hotmail.com'),
(4, 'Atkinson', 'Basil', 'E7R75AR24csqfp', 'BasilRiku', 0, 176156125, 'basilatkinson3988@hotmail.com'),
(5, 'Peterson', 'Leandra', 'm6YpXehK98H4w9', 'LaendraSun', 0, 944573088, 'leandrapeterson3516@hotmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

DROP TABLE IF EXISTS `vehicule`;
CREATE TABLE IF NOT EXISTS `vehicule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Modele` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `Kilometrage` int(11) NOT NULL,
  `Chevaux` smallint(6) NOT NULL,
  `Annee` year(4) NOT NULL,
  `Prix` int(11) NOT NULL,
  `Image` blob NOT NULL,
  `PrixP` int(11) NOT NULL,
  `Id_Carburant` int(11) NOT NULL,
  `id_Marque` int(11) NOT NULL,
  `id_TypeVehicule` int(11) NOT NULL,
  `id_Etat` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Vehicule_Carburant0_FK` (`Id_Carburant`),
  KEY `Vehicule_Marque1_FK` (`id_Marque`),
  KEY `Vehicule_TypeVehicule2_FK` (`id_TypeVehicule`),
  KEY `Vehicule_Etat3_FK` (`id_Etat`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Déchargement des données de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `Modele`, `Kilometrage`, `Chevaux`, `Annee`, `Prix`, `Image`, `PrixP`, `Id_Carburant`, `id_Marque`, `id_TypeVehicule`, `id_Etat`) VALUES
(1, 'Cocinelle Homarus', 113500, 110, 2008, 9370, 0x2f494d472f486f6d617275732e4a5047, 8560, 2, 5, 1, 2),
(2, 'Clio 2', 232560, 130, 2002, 1250, 0x2f494d472f436c696f322e504e47, 1050, 5, 4, 1, 2),
(3, 'BMW McQueen', 18500, 380, 2018, 32500, 0x2f494d472f424d57204d63517565656e2e504e47, 29800, 2, 1, 1, 2),
(4, 'Clio 4 RS', 0, 200, 2016, 26000, 0x2f494d472f436c696f3452532e504e47, 23250, 2, 4, 5, 1),
(5, 'Golf 8', 0, 116, 2023, 32870, 0x2f494d472f476f6c66382e504e47, 30000, 4, 5, 1, 1),
(6, 'Alpine A110', 28127, 175, 1975, 79000, 0x2f494d472f416c70696e61413131302e504e47, 72500, 2, 11, 5, 2),
(7, 'Lotus Emira', 35200, 364, 2021, 82470, 0x2f494d472f4c6f747573456d6972612e504e47, 78520, 2, 36, 5, 2),
(8, 'Renault RS01', 44120, 600, 2015, 259000, 0x2f494d472f52656e61756c74525330312e504e47, 239000, 2, 4, 5, 2),
(9, 'Tesla Model X', 350000, 772, 2018, 39500, 0x2f494d472f4d6f64656c582e504e47, 35800, 3, 18, 4, 3),
(10, 'Peugeot 205 GTI', 72000, 130, 1988, 45000, 0x2f494d472f50657567656f743230352e504e47, 42540, 2, 2, 1, 2),
(11, 'BMW I8', 24852, 362, 2014, 103307, 0x2f494d472f424d5749382e504e47, 99432, 2, 1, 5, 2);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `Vehicule_Carburant0_FK` FOREIGN KEY (`Id_Carburant`) REFERENCES `carburant` (`Id`),
  ADD CONSTRAINT `Vehicule_Etat3_FK` FOREIGN KEY (`id_Etat`) REFERENCES `etat` (`id`),
  ADD CONSTRAINT `Vehicule_Marque1_FK` FOREIGN KEY (`id_Marque`) REFERENCES `marque` (`id`),
  ADD CONSTRAINT `Vehicule_TypeVehicule2_FK` FOREIGN KEY (`id_TypeVehicule`) REFERENCES `typevehicule` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
