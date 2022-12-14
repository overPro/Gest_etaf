-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 28 nov. 2022 à 17:44
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gest_etaf`
--
CREATE DATABASE IF NOT EXISTS `gest_etaf` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gest_etaf`;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `COMPTE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COMPTE_ROLE` varchar(255) DEFAULT NULL,
  `COMPTE_NOM` varchar(255) DEFAULT NULL,
  `COMPTE_LOGIN` varchar(255) DEFAULT NULL,
  `COMPTE_PASS` varchar(255) DEFAULT NULL,
  `COMPTE_CODE` varchar(255) DEFAULT NULL,
  `COMPTE_STATUS` int(11) NOT NULL,
  `COMPTE_EMAIL` varchar(255) DEFAULT NULL,
  `COMPTE_NUMERO` varchar(255) DEFAULT NULL,
  `COMPTE_PHOTO` varchar(255) DEFAULT NULL,
  `COMPTE_CREATED` datetime NOT NULL,
  PRIMARY KEY (`COMPTE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`COMPTE_ID`, `COMPTE_ROLE`, `COMPTE_NOM`, `COMPTE_LOGIN`, `COMPTE_PASS`, `COMPTE_CODE`, `COMPTE_STATUS`, `COMPTE_EMAIL`, `COMPTE_NUMERO`, `COMPTE_PHOTO`, `COMPTE_CREATED`) VALUES
(1, 'ADMINISTRATEUR', 'OverDev', 'test', '1212', '1667784070', 1, 'over@over.ci', '07080906', NULL, '2022-11-25 00:37:00'),
(2, 'Secretaire', 'tati', 'login', 'pass', 'code1669655196', 1, 'a@a.com', '09080701', '166965519628__.jpg', '2022-11-28 17:06:36'),
(3, 'Comptable', 'Irie', 'comptable', 'comptable', 'code1669657417', 1, 'a@a.com', '09080701', '166965741728__.png', '2022-11-28 17:43:37');

-- --------------------------------------------------------

--
-- Structure de la table `contractuel`
--

DROP TABLE IF EXISTS `contractuel`;
CREATE TABLE IF NOT EXISTS `contractuel` (
  `CONTRACTUEL_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CONTRACTUEL_CODE` varchar(255) DEFAULT NULL,
  `CONTRACTUEL_NOM` varchar(255) DEFAULT NULL,
  `CONTRACTUEL_CODE_GROUPE` varchar(255) DEFAULT NULL,
  `CONTRACTUEL_CODE_HORAIRE` varchar(255) DEFAULT NULL,
  `CONTRACTUEL_PRESENCE` tinyint(4) NOT NULL,
  `CONTRACTUEL_CREATED` datetime NOT NULL,
  PRIMARY KEY (`CONTRACTUEL_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contractuel`
--

INSERT INTO `contractuel` (`CONTRACTUEL_ID`, `CONTRACTUEL_CODE`, `CONTRACTUEL_NOM`, `CONTRACTUEL_CODE_GROUPE`, `CONTRACTUEL_CODE_HORAIRE`, `CONTRACTUEL_PRESENCE`, `CONTRACTUEL_CREATED`) VALUES
(1, 'code1669552096', 'tes', '1667782959', '1667783325', 1, '2022-11-27 12:28:16'),
(4, 'code1669553677', 'Bassa', '1667783003', '1667783325', 1, '2022-11-27 12:54:37');

-- --------------------------------------------------------

--
-- Structure de la table `depense`
--

DROP TABLE IF EXISTS `depense`;
CREATE TABLE IF NOT EXISTS `depense` (
  `DEPENSE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPENSE_CODE` varchar(255) DEFAULT NULL,
  `DEPENSE_TYPE_CODE` varchar(255) DEFAULT NULL,
  `DEPENSE_LIBELLE_MATERIEL` varchar(255) DEFAULT NULL,
  `DEPENSE_SOMME` varchar(255) DEFAULT NULL,
  `DEPENSE_CREATED` datetime NOT NULL,
  `DEPENSE_TOTAL` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DEPENSE_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `depense_new`
--

DROP TABLE IF EXISTS `depense_new`;
CREATE TABLE IF NOT EXISTS `depense_new` (
  `DEPENSE_NEW_ID` int(11) NOT NULL AUTO_INCREMENT,
  `MEACANIQUE_MATERIEL_1` varchar(255) DEFAULT NULL,
  `MECANIQUE_MATERIEL_2` varchar(255) DEFAULT NULL,
  `MECANIQUE_MATERIEL_3` varchar(255) DEFAULT NULL,
  `MECANIQUE_MATERIEL_4` varchar(255) DEFAULT NULL,
  `MECANIQUE_SOMMES_1` varchar(255) DEFAULT NULL,
  `MECANIQUE_SOMMES_2` varchar(255) DEFAULT NULL,
  `MECANIQUE_SOMMES_3` varchar(255) DEFAULT NULL,
  `MECANIQUE_SOMMES_4` varchar(255) DEFAULT NULL,
  `MECANIQUE_TOTAL` varchar(255) DEFAULT NULL,
  `DON_MATERIEL_1` varchar(255) DEFAULT NULL,
  `DON_SOMMES_1` varchar(255) DEFAULT NULL,
  `DON_TOTAL` varchar(255) DEFAULT NULL,
  `NOURRITURE_MATERIEL_1` varchar(255) DEFAULT NULL,
  `NOURRITURE_MATERIEL_2` varchar(255) DEFAULT NULL,
  `NOURRITURE_MATERIEL_3` varchar(255) DEFAULT NULL,
  `NOURRITURE_MATERIEL_4` varchar(255) DEFAULT NULL,
  `NOURRITURE_SOMMES_1` varchar(255) DEFAULT NULL,
  `NOURRITURE_SOMMES_2` varchar(255) DEFAULT NULL,
  `NOURRITURE_SOMMES_3` varchar(255) DEFAULT NULL,
  `NOURRITURE_SOMMES_4` varchar(255) DEFAULT NULL,
  `NOURRITURE_TOTAL` varchar(255) DEFAULT NULL,
  `CARBURANT_SOMMES_1` varchar(255) DEFAULT NULL,
  `CARBURANT_TOTAL` varchar(255) DEFAULT NULL,
  `TRANSPORT_SOMMES_1` varchar(255) DEFAULT NULL,
  `TRANSPORT_SOMMES_2` varchar(255) DEFAULT NULL,
  `TRANSPORT_NOM_BENEFICIAIRE_1` varchar(255) DEFAULT NULL,
  `TRANSPORT_NOM_BENEFICIARE_2` varchar(255) DEFAULT NULL,
  `TRANSPORT_TOTAL` varchar(255) DEFAULT NULL,
  `ELECTRICITE_SOMMES_1` varchar(255) DEFAULT NULL,
  `ELECTRICITE_NOM_BENEFICIAIRE_1` varchar(255) DEFAULT NULL,
  `ELECTRICITE_TOTAL` varchar(255) DEFAULT NULL,
  `SANTE_PRIX_ET_NOM_DU_MEDICAL_1` varchar(255) DEFAULT NULL,
  `SANTE_NOM_DU_BENEFICIAIRE_1` varchar(255) DEFAULT NULL,
  `SANTE_TOTAL` varchar(255) DEFAULT NULL,
  `DEPENSE_CODE` varchar(255) DEFAULT NULL,
  `DEPENSE_TOTAL_DU_JOUR` varchar(255) DEFAULT NULL,
  `DEPENSES_CREATED` datetime NOT NULL,
  PRIMARY KEY (`DEPENSE_NEW_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `depense_new`
--

INSERT INTO `depense_new` (`DEPENSE_NEW_ID`, `MEACANIQUE_MATERIEL_1`, `MECANIQUE_MATERIEL_2`, `MECANIQUE_MATERIEL_3`, `MECANIQUE_MATERIEL_4`, `MECANIQUE_SOMMES_1`, `MECANIQUE_SOMMES_2`, `MECANIQUE_SOMMES_3`, `MECANIQUE_SOMMES_4`, `MECANIQUE_TOTAL`, `DON_MATERIEL_1`, `DON_SOMMES_1`, `DON_TOTAL`, `NOURRITURE_MATERIEL_1`, `NOURRITURE_MATERIEL_2`, `NOURRITURE_MATERIEL_3`, `NOURRITURE_MATERIEL_4`, `NOURRITURE_SOMMES_1`, `NOURRITURE_SOMMES_2`, `NOURRITURE_SOMMES_3`, `NOURRITURE_SOMMES_4`, `NOURRITURE_TOTAL`, `CARBURANT_SOMMES_1`, `CARBURANT_TOTAL`, `TRANSPORT_SOMMES_1`, `TRANSPORT_SOMMES_2`, `TRANSPORT_NOM_BENEFICIAIRE_1`, `TRANSPORT_NOM_BENEFICIARE_2`, `TRANSPORT_TOTAL`, `ELECTRICITE_SOMMES_1`, `ELECTRICITE_NOM_BENEFICIAIRE_1`, `ELECTRICITE_TOTAL`, `SANTE_PRIX_ET_NOM_DU_MEDICAL_1`, `SANTE_NOM_DU_BENEFICIAIRE_1`, `SANTE_TOTAL`, `DEPENSE_CODE`, `DEPENSE_TOTAL_DU_JOUR`, `DEPENSES_CREATED`) VALUES
(1, 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 'tt', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 't', 'code1669642969', 't', '2022-11-28 13:42:49');

-- --------------------------------------------------------

--
-- Structure de la table `depense_type`
--

DROP TABLE IF EXISTS `depense_type`;
CREATE TABLE IF NOT EXISTS `depense_type` (
  `DEPENSE_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `DEPENSE_TYPE_CODE` varchar(255) DEFAULT NULL,
  `DEPENSE_TYPE_LIBELLE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DEPENSE_TYPE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `depense_type`
--

INSERT INTO `depense_type` (`DEPENSE_TYPE_ID`, `DEPENSE_TYPE_CODE`, `DEPENSE_TYPE_LIBELLE`) VALUES
(1, '1667783775', 'MECANIQUE'),
(2, '1667783818', 'DON'),
(3, '1667783848', 'NOURRITURE'),
(4, '1667783880', 'CARBURANT'),
(5, 'TRANSPORT', '1667783917'),
(6, 'ELECTRICITE', '1667783919'),
(7, '1667783964', 'SANTE');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

DROP TABLE IF EXISTS `groupe`;
CREATE TABLE IF NOT EXISTS `groupe` (
  `GROUPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `GROUPE_LIBELLE` varchar(255) DEFAULT NULL,
  `GROUPE_CODE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`GROUPE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`GROUPE_ID`, `GROUPE_LIBELLE`, `GROUPE_CODE`) VALUES
(1, 'A', '1667782959'),
(2, 'B', '1667782979'),
(3, 'C', '1667783003');

-- --------------------------------------------------------

--
-- Structure de la table `horaire`
--

DROP TABLE IF EXISTS `horaire`;
CREATE TABLE IF NOT EXISTS `horaire` (
  `HORAIRE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `HORAIRE_LIBELLE` varchar(255) DEFAULT NULL,
  `HORAIRE_CODE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`HORAIRE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `horaire`
--

INSERT INTO `horaire` (`HORAIRE_ID`, `HORAIRE_LIBELLE`, `HORAIRE_CODE`) VALUES
(1, '07H00 - 15H00', '1667783325'),
(2, '15H00 - 23H00', '1667783355'),
(3, '23H00 - 07H00', '1667783388');

-- --------------------------------------------------------

--
-- Structure de la table `production`
--

DROP TABLE IF EXISTS `production`;
CREATE TABLE IF NOT EXISTS `production` (
  `PRODUCTION_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTION_CODE` varchar(255) DEFAULT NULL,
  `PRODUCTION_QUANTITE` varchar(255) DEFAULT NULL,
  `PRODUCTION_QUANTITE_1` varchar(255) DEFAULT NULL,
  `PRODUCTION_QUANTITE_2` varchar(255) DEFAULT NULL,
  `PRODUCTION_QUANTITE_3` varchar(255) DEFAULT NULL,
  `PRODUCTION_CODE_GROUPE` varchar(255) DEFAULT NULL,
  `PRODUCTION_CREATED` datetime NOT NULL,
  `PRODUCTION_CODE_LIBELLE` varchar(255) DEFAULT NULL,
  `PRODUCTION_CODE_LIBELLE_1` varchar(255) DEFAULT NULL,
  `PRODUCTION_CODE_LIBELLE_2` varchar(255) DEFAULT NULL,
  `PRODUCTION_CODE_LIBELLE_3` varchar(255) DEFAULT NULL,
  `PRODUCTION_JOUR` varchar(255) DEFAULT NULL,
  `PRODUCTION_TOTAL` varchar(255) DEFAULT NULL,
  `PRODUCTION_TOTAL_1` varchar(255) DEFAULT NULL,
  `PRODUCTION_TOTAL_2` varchar(255) DEFAULT NULL,
  `PRODUCTION_TOTAL_3` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PRODUCTION_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `production`
--

INSERT INTO `production` (`PRODUCTION_ID`, `PRODUCTION_CODE`, `PRODUCTION_QUANTITE`, `PRODUCTION_QUANTITE_1`, `PRODUCTION_QUANTITE_2`, `PRODUCTION_QUANTITE_3`, `PRODUCTION_CODE_GROUPE`, `PRODUCTION_CREATED`, `PRODUCTION_CODE_LIBELLE`, `PRODUCTION_CODE_LIBELLE_1`, `PRODUCTION_CODE_LIBELLE_2`, `PRODUCTION_CODE_LIBELLE_3`, `PRODUCTION_JOUR`, `PRODUCTION_TOTAL`, `PRODUCTION_TOTAL_1`, `PRODUCTION_TOTAL_2`, `PRODUCTION_TOTAL_3`) VALUES
(1, 'code1669586132', '11', '22', '33', '44', '1667782959', '2022-11-27 21:55:32', '1667783485', '1667783580', '1667783671', '1667783705', 'Sunday', '11', '22', '33', '44'),
(2, 'code1669586222', '44', '55', '66', '77', '1667782979', '2022-11-27 21:57:02', '1667783485', '1667783580', '1667783671', '1667783705', 'Sunday', '44', '55', '66', '77'),
(3, 'code1669586251', '87', '232', '32', '09', '1667783003', '2022-11-27 21:57:31', '1667783485', '1667783580', '1667783671', '1667783705', 'Sunday', '87', '232', '32', '09');

-- --------------------------------------------------------

--
-- Structure de la table `production_type`
--

DROP TABLE IF EXISTS `production_type`;
CREATE TABLE IF NOT EXISTS `production_type` (
  `PRODUCTION_TYPE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRODUCTION_TYPE_CODE` varchar(255) DEFAULT NULL,
  `PRODUCTION_TYPE_LIBELLE` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`PRODUCTION_TYPE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `production_type`
--

INSERT INTO `production_type` (`PRODUCTION_TYPE_ID`, `PRODUCTION_TYPE_CODE`, `PRODUCTION_TYPE_LIBELLE`) VALUES
(1, '1667783485', 'Nombre de sacs utilises'),
(2, '1667783580', 'Aliment Betail (50) kg'),
(3, '1667783671', 'Huile brute de 25L'),
(4, '1667783705', 'Sac vide');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
