-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 20 oct. 2020 à 10:43
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `abi_DB`
--

-- --------------------------------------------------------

--
-- Structure de la table `investisseur`
--

DROP TABLE IF EXISTS `investisseur`;
CREATE TABLE IF NOT EXISTS `investisseur` (
  `idInvestisseur` varchar(30) NOT NULL,
  `nomInvestisseur` varchar(50) NOT NULL,
  `mailInvestisseur` varchar(50) NOT NULL,
  `mdpInvestisseur` varchar(20) NOT NULL,
  `paysInvestisseur` varchar(30) NOT NULL,
  `telInvestisseur` varchar(14) NOT NULL,
  `codeParrain` varchar(30) DEFAULT NULL,
  `codeRepresentant` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idInvestisseur`),
  UNIQUE KEY `idInvestisseur` (`idInvestisseur`,`mailInvestisseur`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `investisseur`
--

INSERT INTO `investisseur` (`idInvestisseur`, `nomInvestisseur`, `mailInvestisseur`, `mdpInvestisseur`, `paysInvestisseur`, `telInvestisseur`, `codeParrain`, `codeRepresentant`) VALUES
('VE1UNVS2', 'Lailoudine Issouf', 'lailou@gmail.com', 'frere', 'Comore', '+3012698574', '', ''),
('rtuJGSU8', 'Miel Youssoupha', 'mielyoussopha@yahoo.fr', 'testeur', 'Benin', '+9632587410', 'VE1UNVS2', ''),
('8UpNLDEV', 'Charlie P.', 'charlie@test.fr', 'puth', 'Mali', '+223149687', '', ''),
('tRCSU8WA', 'Marcelle', 'nandrianina9599@gmail.com', 'nanitchie', 'Madagascar', '+2610342003413', '', ''),
('K4H2pTVh', 'Kirikou', 'santatra@gmail.fr', 'mbolatiana', 'lepti', '+36985214', 'VE1UNVS2', ''),
('6SFNAAoI', 'FENO', 'marcella@ty.Fr', 'coco', 'CONGO', '+69852147', '', ''),
('8MkTMIWE', 'Imiela Jr Alvin', 'imieldaalvin@dev.fr', 'hack', 'Cameroun', '+9685741230', 'VE1UNVS2', '');

-- --------------------------------------------------------

--
-- Structure de la table `modepaiement`
--

DROP TABLE IF EXISTS `modepaiement`;
CREATE TABLE IF NOT EXISTS `modepaiement` (
  `nomMode` varchar(30) NOT NULL,
  PRIMARY KEY (`nomMode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `modepaiement`
--

INSERT INTO `modepaiement` (`nomMode`) VALUES
('bitcoin'),
('mobile Money');

-- --------------------------------------------------------

--
-- Structure de la table `pack`
--

DROP TABLE IF EXISTS `pack`;
CREATE TABLE IF NOT EXISTS `pack` (
  `refPack` varchar(30) NOT NULL,
  `tarif` varchar(10) NOT NULL,
  PRIMARY KEY (`refPack`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement`
--

DROP TABLE IF EXISTS `paiement`;
CREATE TABLE IF NOT EXISTS `paiement` (
  `numPaiement` int(6) NOT NULL AUTO_INCREMENT,
  `idInvestisseur` int(6) NOT NULL,
  `nomPF` varchar(50) DEFAULT NULL,
  `adressePF` varchar(50) DEFAULT NULL,
  `montantInvestit` varchar(10) NOT NULL,
  `adresseDestination` varchar(50) DEFAULT NULL,
  `montantRecevoir` varchar(10) NOT NULL,
  `refPack` int(6) NOT NULL,
  `qtePack` int(6) NOT NULL,
  `datePaiement` varchar(10) NOT NULL,
  `modePaiement` varchar(20) NOT NULL,
  `telPaiement` varchar(14) DEFAULT NULL,
  `refPaiement` varchar(8) NOT NULL,
  `mention` varchar(10) NOT NULL,
  PRIMARY KEY (`numPaiement`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paiement1`
--

DROP TABLE IF EXISTS `paiement1`;
CREATE TABLE IF NOT EXISTS `paiement1` (
  `idPayement` varchar(12) NOT NULL,
  `idInvestisseur` varchar(9) NOT NULL,
  `idrepresentant` varchar(9) NOT NULL,
  `pack` int(6) NOT NULL,
  `modePaiement` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `representant`
--

DROP TABLE IF EXISTS `representant`;
CREATE TABLE IF NOT EXISTS `representant` (
  `idR` int(6) NOT NULL AUTO_INCREMENT,
  `codeRepresentant` varchar(15) NOT NULL,
  `nomRepresentant` varchar(50) NOT NULL,
  `prenomRepresentant` varchar(100) DEFAULT NULL,
  `mailRepresentant` varchar(50) NOT NULL,
  `mdpRepresentant` varchar(20) NOT NULL,
  `paysRepresentant` varchar(30) NOT NULL,
  `telRepresentant` varchar(14) NOT NULL,
  PRIMARY KEY (`idR`),
  UNIQUE KEY `codeRepresentant` (`codeRepresentant`,`mailRepresentant`,`telRepresentant`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `representant`
--

INSERT INTO `representant` (`idR`, `codeRepresentant`, `nomRepresentant`, `prenomRepresentant`, `mailRepresentant`, `mdpRepresentant`, `paysRepresentant`, `telRepresentant`) VALUES
(1, 'NM2S:ven,9217', 'SOJANDRIMALALA ', 'Sata Nandrianina Marcelle', 'nandrianina9599@gmail.com', 'mourir', 'Madagascar', '+261342003413');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
