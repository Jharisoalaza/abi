-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le :  sam. 24 oct. 2020 à 16:23
-- Version du serveur :  8.0.18
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `abi`
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
('8MkTMIWE', 'Imiela Jr Alvin', 'imieldaalvin@dev.fr', 'hack', 'Cameroun', '+9685741230', 'VE1UNVS2', ''),
('UUFIATiU', 'Andha', 'jharisoalaza@andha.com', 'io', 'Madagascar', '0349395714', '6SFNAAoI', '');

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
  `etat` tinyint(1) NOT NULL,
  PRIMARY KEY (`refPack`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pack`
--

INSERT INTO `pack` (`refPack`, `tarif`, `etat`) VALUES
('oGGD8-YB@-ytc', '100', 1),
('2zLwn-YB@-R3T', '100', 1),
('52dOV-YB@-4h1', '100', 1),
('JoWzs-YB@-rPk', '100', 0),
('bx4Xp-YB@-mko', '100', 0),
('hZ7SW-YB@-nf3', '100', 0),
('Et46d-YB@-Ale', '100', 0),
('hnw0t-YB@-sJY', '100', 0),
('F1N8l-YB@-l25', '100', 0),
('lSNe5-YB@-gIn', '100', 0),
('T34Rw-YB@-SE6', '100', 0),
('zbRT0-YB@-VCo', '100', 0),
('n9YzQ-YB@-Zvw', '100', 0),
('gUYON-YB@-0wS', '100', 0),
('oJCEZ-YB@-v48', '100', 0),
('xI1qd-YB@-tEO', '100', 0),
('Jx1S3-YB@-lqn', '100', 0),
('xjCC7-YB@-jtJ', '100', 0),
('O2hm2-YB@-73g', '100', 0),
('97rrK-YB@-iFg', '100', 0),
('hkCC9-YB@-YMH', '100', 0),
('2WOUV-YB@-nSt', '100', 0),
('badPD-YB@-Sv6', '100', 0),
('ULOAX-YB@-SnQ', '100', 0),
('bPYC3-YB@-UEr', '100', 0),
('X4qzu-YB@-tsl', '100', 0),
('fOa34-YB@-LnD', '100', 0),
('FSH3Q-YB@-Utq', '100', 0),
('on23a-YB@-9qQ', '100', 0),
('Fz7TL-YB@-dF8', '100', 0),
('8bhxt-YB@-8Pk', '100', 0),
('KXdqc-YB@-5lG', '100', 0),
('D87Vi-YB@-6rs', '100', 0),
('ZrbJf-YB@-aoI', '100', 0),
('wwfAk-YB@-jPM', '100', 0),
('mEcXp-YB@-T5R', '100', 0),
('nlDN9-YB@-PW4', '100', 0),
('a7lB9-YB@-RTE', '100', 0),
('ZAye9-YB@-Nss', '100', 0),
('6PXlB-YB@-EFo', '100', 0),
('wO2o9-YB@-NSX', '100', 0),
('b81X6-YB@-RCo', '100', 0),
('Cm60r-YB@-BYL', '100', 0),
('JRt8V-YB@-Sk6', '100', 0),
('8qTWA-YB@-5jt', '100', 0),
('CWV9F-YB@-wQG', '100', 0),
('Gjf96-YB@-ZCx', '100', 0),
('VE45R-YB@-fky', '100', 0),
('HZpOj-YB@-E2u', '100', 0),
('gzIaX-YB@-S8A', '100', 0),
('0g4h4-YB@-7V9', '100', 0),
('EhZAK-YB@-4BS', '100', 0),
('jDo1s-YB@-yGA', '100', 0),
('GP0s1-YB@-fCh', '100', 0),
('aPBf5-YB@-iLU', '100', 0),
('uZwun-YB@-i8E', '100', 0),
('CSTqk-YB@-FNo', '100', 0),
('L8w5T-YB@-SfW', '100', 0),
('mVuvn-YB@-VJ9', '100', 0),
('C1rQZ-YB@-GEK', '100', 0),
('VIf0n-YB@-CAU', '100', 0),
('qHjR6-YB@-lK7', '100', 0),
('f6VHg-YB@-QgV', '100', 0),
('HcIJf-YB@-yYC', '100', 0),
('wDuMj-YB@-1N6', '100', 0),
('vJbUF-YB@-6C2', '100', 0),
('FIvt4-YB@-wrx', '100', 0),
('npJaF-YB@-iGy', '100', 0),
('hw0R1-YB@-E8U', '100', 0),
('8BtXV-YB@-nSa', '100', 0),
('pesrP-YB@-WTp', '100', 0),
('Wi6yJ-YB@-st6', '100', 0),
('kCli2-YB@-ySl', '100', 0),
('NAHGi-YB@-0Hl', '100', 0),
('sGCAw-YB@-wYU', '100', 0),
('fN46B-YB@-gqT', '100', 0),
('0FhdJ-YB@-Cpp', '100', 0),
('IRoBK-YB@-3uu', '100', 0),
('lrEPx-YB@-TMF', '100', 0),
('g3gqB-YB@-ekY', '100', 0),
('C9Vns-YB@-JiH', '100', 0),
('mUt8n-YB@-iLb', '100', 0),
('ym92k-YB@-QIF', '100', 0),
('JjCDk-YB@-6qk', '100', 0),
('3uLVb-YB@-SQX', '100', 0),
('Ij3P9-YB@-pLr', '100', 0),
('g14gi-YB@-Msw', '100', 0),
('sDJH7-YB@-eFS', '100', 0),
('BXVq1-YB@-fqG', '100', 0),
('mtQNs-YB@-cMq', '100', 0),
('7hLrF-YB@-CBC', '100', 0),
('rCgvX-YB@-49a', '100', 0),
('R38dL-YB@-a2Y', '100', 0),
('4qLsn-YB@-VSF', '100', 0),
('Z2glj-YB@-73s', '100', 0),
('1Dq8f-YB@-tgR', '100', 0),
('FayfP-YB@-PA2', '100', 0),
('Ipug8-YB@-uwr', '100', 0),
('kjDfx-YB@-2OD', '100', 0),
('szL8P-YB@-zFv', '100', 0),
('RekLO-GK@-2v6', '50', 0),
('zhMEP-GK@-3v5', '50', 0),
('Wqavk-GK@-gfn', '50', 0),
('SgMdT-GK@-qTW', '50', 0),
('AFZzu-GK@-yiw', '50', 0),
('iOgIF-GK@-4sx', '50', 0),
('KGrVS-GK@-Q07', '50', 0),
('yvz7s-GK@-3gb', '50', 0),
('XICKB-GK@-Hme', '50', 0),
('HRWiJ-GK@-PmO', '50', 0),
('6RiYC-GK@-k80', '50', 0),
('PShgg-GK@-KJS', '50', 0),
('wMqsn-GK@-ENU', '50', 0),
('LBq5c-GK@-PTu', '50', 0),
('bkAE0-GK@-LCJ', '50', 0),
('hvKTa-GK@-Gw4', '50', 0),
('MXVml-GK@-dJA', '50', 0),
('9eVSg-GK@-CUp', '50', 0),
('bHN76-GK@-415', '50', 0),
('RVgmU-GK@-ZUv', '50', 0),
('rd8v0-GK@-480', '50', 0),
('fWDTK-GK@-Pqd', '50', 0),
('6hqAP-GK@-9Er', '50', 0),
('cVHGe-GK@-9T5', '50', 0),
('AtIXx-GK@-Hww', '50', 0),
('i4Z0t-GK@-K6W', '50', 0),
('EFUzz-GK@-UyZ', '50', 0),
('uzPcx-GK@-vb6', '50', 0),
('s6tFm-GK@-OdP', '50', 0),
('1nrpE-GK@-N2a', '50', 0),
('1OrHs-GK@-hEb', '50', 0),
('1GDyh-GK@-wPS', '50', 0),
('omcAW-GK@-vBk', '50', 0),
('LbQMQ-GK@-r9g', '50', 0),
('3OpMS-GK@-bRP', '50', 0),
('I3D8i-GK@-uCO', '50', 0),
('5C3Qr-GK@-mMD', '50', 0),
('5koCu-GK@-bjB', '50', 0),
('89aga-GK@-BiH', '50', 0),
('hMSci-GK@-0Di', '50', 0),
('6MlZW-GK@-eAJ', '50', 0),
('NdNd8-GK@-QNs', '50', 0),
('CVQYj-GK@-AlS', '50', 0),
('odYzz-GK@-7RF', '50', 0),
('ttOjo-GK@-A4W', '50', 0),
('SFkd8-GK@-rNV', '50', 0),
('WMFXP-GK@-OXG', '50', 0),
('l44Xg-GK@-E1R', '50', 0),
('gHWbV-GK@-dIk', '50', 0),
('8vwt9-GK@-Cmg', '50', 0),
('Uy5Hy-GK@-AP7', '50', 0),
('oDxHj-GK@-rM5', '50', 0),
('DSOPi-GK@-kE5', '50', 0),
('x5k8O-GK@-AEO', '50', 0),
('5tZGQ-GK@-ERY', '50', 0),
('8N1Sr-GK@-sn0', '50', 0),
('ZwQX8-GK@-xyW', '50', 0),
('KFE1Q-GK@-0X0', '50', 0),
('HQvQ9-GK@-ZyR', '50', 0),
('peULW-GK@-mUg', '50', 0),
('b8jpb-GK@-yig', '50', 0),
('Ou2v2-GK@-AR7', '50', 0),
('LHTJt-GK@-TDM', '50', 0),
('8jL7D-GK@-86N', '50', 0),
('fGwUf-GK@-baW', '50', 0),
('ppltN-GK@-6qi', '50', 0),
('HRAVq-GK@-srk', '50', 0),
('7dCEP-GK@-cEM', '50', 0),
('3wmJI-GK@-Aia', '50', 0),
('w7CVe-GK@-4kl', '50', 0),
('LDySh-GK@-23V', '50', 0),
('ZBpee-GK@-6LE', '50', 0),
('W5dyI-GK@-tbz', '50', 0),
('fOcoC-GK@-NYU', '50', 0),
('1FMjC-GK@-eF2', '50', 0),
('vmzJr-GK@-kTF', '50', 0),
('6BN2Z-GK@-Pp3', '50', 0),
('Ce7Gi-GK@-4ME', '50', 0),
('6VjF7-GK@-H9T', '50', 0),
('imROm-GK@-Zj3', '50', 0),
('YWl0Z-GK@-iSe', '50', 0),
('xYS0A-GK@-Pv7', '50', 0),
('C8lJK-GK@-9Tk', '50', 0),
('O6Zt0-GK@-iyo', '50', 0),
('yFktw-GK@-Owe', '50', 0),
('PEMsH-GK@-A7g', '50', 0),
('dQ3zD-GK@-27w', '50', 0),
('br2bE-GK@-Pnq', '50', 0),
('vJRfN-GK@-vo4', '50', 0),
('GsOYR-GK@-JKQ', '50', 0),
('fmCOk-GK@-eLR', '50', 0),
('MNflY-GK@-vlk', '50', 0),
('BafLb-GK@-nX2', '50', 0),
('lcUyl-GK@-nDb', '50', 0),
('0c1dv-GK@-RGz', '50', 0),
('yU5yS-GK@-1iv', '50', 0),
('dRCmy-GK@-E9r', '50', 0),
('PDQt0-GK@-qjl', '50', 0),
('bFVA2-GK@-ypE', '50', 0),
('Lnrc1-GK@-2Xi', '50', 0),
('kjQfh-XA@-kjm', '10', 0),
('r3RFw-XA@-rEd', '10', 0),
('tt8BF-XA@-aMo', '10', 0),
('p40WL-XA@-mhZ', '10', 0),
('cm0nf-XA@-r8l', '10', 0),
('ko1aP-XA@-LmF', '10', 0),
('akikv-XA@-ZJj', '10', 0),
('41nJX-XA@-LQd', '10', 0),
('KsJX4-XA@-47i', '10', 0),
('32ZbT-XA@-qtM', '10', 0),
('tVQ9k-XA@-snl', '10', 0),
('uK4Bj-XA@-M2c', '10', 0),
('3b2sj-XA@-4SY', '10', 0),
('134wx-XA@-9XH', '10', 0),
('wRdEF-XA@-kxp', '10', 0),
('fxSZE-XA@-Z3v', '10', 0),
('3cbaa-XA@-jH6', '10', 0),
('ijDV4-XA@-nyw', '10', 0),
('46Flu-XA@-GrR', '10', 0),
('4nQjb-XA@-r6G', '10', 0),
('YTubQ-XA@-boy', '10', 0),
('Ve9Ql-XA@-x9g', '10', 0),
('YaWJ0-XA@-Wmw', '10', 0),
('eV4YJ-XA@-QLC', '10', 0),
('zPHAC-XA@-x8X', '10', 0),
('0WeD7-XA@-RUK', '10', 0),
('7lJxD-XA@-vOd', '10', 0),
('1nGqa-XA@-lsk', '10', 0),
('7KrlR-XA@-OkL', '10', 0),
('4enow-XA@-xRw', '10', 0),
('qDk9y-XA@-nFi', '10', 0),
('O6R8e-XA@-yHo', '10', 0),
('eYcAC-XA@-BIX', '10', 0),
('FGe6u-XA@-Wiv', '10', 0),
('HWTwd-XA@-1QD', '10', 0),
('rSt0r-XA@-J8r', '10', 0),
('Ku7bl-XA@-WPh', '10', 0),
('e7M3H-XA@-4fI', '10', 0),
('BExVN-XA@-Xhh', '10', 0),
('rojuV-XA@-wtq', '10', 0),
('nDuf2-XA@-UKb', '10', 0),
('EKkE1-XA@-BFx', '10', 0),
('YZH5x-XA@-Uj7', '10', 0),
('zNtza-XA@-DyX', '10', 0),
('7btwE-XA@-9Fq', '10', 0),
('o0mqe-XA@-viK', '10', 0),
('cuKMa-XA@-Cxo', '10', 0),
('MoBWb-XA@-O2j', '10', 0),
('tpbDu-XA@-HTR', '10', 0),
('b9gtj-XA@-9jg', '10', 0),
('RCZLR-XA@-bRW', '10', 0),
('CqQrQ-XA@-GFA', '10', 0),
('Wn3Ok-XA@-0hg', '10', 0),
('lcXgE-XA@-L01', '10', 0),
('qGe76-XA@-w2M', '10', 0),
('gVVOY-XA@-Bap', '10', 0),
('xHht6-XA@-AHy', '10', 0),
('7edpi-XA@-GdF', '10', 0),
('oibjq-XA@-Cvn', '10', 0),
('CEaWn-XA@-fuh', '10', 0),
('trOM9-XA@-KCx', '10', 0),
('sBXGJ-XA@-2O0', '10', 0),
('FHCfJ-XA@-RBF', '10', 0),
('SSQOt-XA@-Cl4', '10', 0),
('wuMu8-XA@-T8N', '10', 0),
('LKRNO-XA@-MsC', '10', 0),
('llD2X-XA@-fmP', '10', 0),
('guzEZ-XA@-s6A', '10', 0),
('ca7d6-XA@-Bme', '10', 0),
('BXNZb-XA@-AxY', '10', 0),
('5VfnM-XA@-sBX', '10', 0),
('My2t1-XA@-gnA', '10', 0),
('DAu6D-XA@-By4', '10', 0),
('syRZ2-XA@-dMH', '10', 0),
('5jojd-XA@-TbO', '10', 0),
('hsJz2-XA@-ROA', '10', 0),
('Ee1gl-XA@-P6p', '10', 0),
('3ZXJQ-XA@-dLl', '10', 0),
('eUloa-XA@-Ku9', '10', 0),
('6qWfD-XA@-XR7', '10', 0),
('zwbo0-XA@-TJo', '10', 0),
('neN6v-XA@-2Z2', '10', 0),
('FHqHg-XA@-Bmr', '10', 0),
('woj7N-XA@-g26', '10', 0),
('7MjHQ-XA@-clg', '10', 0),
('Jqjc1-XA@-zAA', '10', 0),
('2Q7p8-XA@-xyk', '10', 0),
('pi4JD-XA@-2vZ', '10', 0),
('aL51Y-XA@-HWi', '10', 0),
('zhdV0-XA@-hxP', '10', 0),
('JmhvK-XA@-zev', '10', 0),
('zKFrV-XA@-Zwn', '10', 0),
('jh8sz-XA@-rkg', '10', 0),
('Wh4i3-XA@-ZYB', '10', 0),
('My7PC-XA@-X2x', '10', 0),
('S6mQe-XA@-Zio', '10', 0),
('j3mxO-XA@-hub', '10', 0),
('WrWVF-XA@-Vde', '10', 0),
('EzGE0-XA@-N1e', '10', 0),
('49SWb-XA@-fkI', '10', 0);

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
  `idPayement` int(12) NOT NULL AUTO_INCREMENT,
  `idInvestisseur` varchar(9) NOT NULL,
  `idrepresentant` varchar(9) NOT NULL,
  `pack` int(6) NOT NULL,
  `modePaiement` varchar(30) NOT NULL,
  PRIMARY KEY (`idPayement`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiement1`
--

INSERT INTO `paiement1` (`idPayement`, `idInvestisseur`, `idrepresentant`, `pack`, `modePaiement`) VALUES
(1, 'UUFIATiU', 'NM2S:ven,', 100, 'm_monney'),
(2, 'UUFIATiU', 'NM2S:ven,', 100, 'm_monney'),
(3, 'UUFIATiU', 'NM2S:ven,', 100, 'm_monney'),
(4, '6SFNAAoI', 'NM2S:ven,', 100, 'm_monney');

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
