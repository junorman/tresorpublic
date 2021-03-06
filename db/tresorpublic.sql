-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 10 août 2021 à 12:07
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
-- Base de données : `tresorpublic`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_cat` varchar(100) NOT NULL,
  `date_cat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `libelle_cat`, `date_cat`) VALUES
(2, 'TAXES SUR LES INFRACTIONS ROUTIERES', '2021-08-03 20:23:38'),
(3, 'RECETTES DES EXAMENS ET CONCOURS', '2021-08-04 01:58:34'),
(4, 'TAXES MUNICIPALES', '2021-08-05 16:29:52');

-- --------------------------------------------------------

--
-- Structure de la table `contribuables`
--

DROP TABLE IF EXISTS `contribuables`;
CREATE TABLE IF NOT EXISTS `contribuables` (
  `id_cont` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `nif` varchar(255) DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `statut_cont` int(1) DEFAULT NULL,
  `date_cont` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cont`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contribuables`
--

INSERT INTO `contribuables` (`id_cont`, `nom`, `prenom`, `tel`, `type`, `nif`, `sexe`, `statut_cont`, `date_cont`) VALUES
(1, 'nguema', 'pecula', '7889898990', 1, '08v0844', 'M', 1, '2021-07-31 18:14:27'),
(2, 'Elton', 'paul', '074782998', 2, '', 'M', 1, '2021-07-31 18:16:26'),
(3, 'MALONGAs', 'reugs', '047889895990', 1, 'B9987', 'M', 1, '2021-07-31 20:26:28'),
(4, 'NZOLA ANGELIQUE', 'paul', '048738390', 1, 'CA009', 'F', 1, '2021-08-01 02:42:27');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

DROP TABLE IF EXISTS `paiements`;
CREATE TABLE IF NOT EXISTS `paiements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `date_gen` date DEFAULT NULL,
  `date_paiement` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `motif` text,
  `code_rec` varchar(50) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `code`, `matricule`, `date_gen`, `date_paiement`, `motif`, `code_rec`, `montant`, `tel`, `nom`, `prenom`) VALUES
(1, 'hfuhez54zd8', '08v0844', '2021-08-02', '2021-08-02 19:33:16', NULL, 'rc002', 12000, '074820870', 'nguema', 'pecula');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id_rec` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_rec` varchar(255) DEFAULT NULL,
  `code_rec` varchar(255) DEFAULT NULL,
  `categorie_rec` int(11) DEFAULT NULL,
  `cont_rec` int(11) NOT NULL,
  `montant` double DEFAULT '1',
  `date_rec` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rec`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id_rec`, `libelle_rec`, `code_rec`, `categorie_rec`, `cont_rec`, `montant`, `date_rec`) VALUES
(1, 'FRAIS BACCALAUREAT', 'rc001', 3, 1, 50000, '2021-08-04 02:47:56'),
(2, 'DEFAUT DE PERMIS DE CONDUIRE', 'rc002', 2, 3, 12000, '2021-08-04 02:50:47'),
(3, 'CONDUITE EN ETAT D\'IVRESSE', 'rc003', 2, 4, 24000, '2021-08-04 02:53:31');

-- --------------------------------------------------------

--
-- Structure de la table `titres`
--

DROP TABLE IF EXISTS `titres`;
CREATE TABLE IF NOT EXISTS `titres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `code_rec` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `matricule` varchar(50) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `motif` text,
  `statut` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `nom`, `prenom`, `code`, `code_rec`, `date`, `matricule`, `montant`, `motif`, `statut`) VALUES
(1, 'nguema', 'pecula', 'hfuhez54zd8', 'rc002', '2021-08-02 20:27:19', '08v0844', 12000, 'défaut de permis de conduire', 1),
(2, 'nguema', 'pecula', 'hdoeho5989dzdz', 'rc001', '2021-08-02 20:27:19', '08v0844', 10200, 'taxe municipale', 0),
(3, 'Asseko', 'Donis', 'ezufhoeifpjfez6f26efef', 'rc002', '2021-08-10 12:57:50', NULL, 12000, 'défaut permis de conduire', 0),
(4, 'Medang', 'Serge thiery', 'jehfouehofe5416zedezlfjdi', 'rc003', '2021-08-10 13:00:30', NULL, 24000, 'conduite en état d\'ivresse', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tmp_paiement`
--

DROP TABLE IF EXISTS `tmp_paiement`;
CREATE TABLE IF NOT EXISTS `tmp_paiement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT CURRENT_TIMESTAMP,
  `transaction` varchar(50) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tmp_paiement`
--

INSERT INTO `tmp_paiement` (`id`, `code`, `date`, `transaction`, `tel`, `statut`) VALUES
(1, 'hfuhez54zd8', '2021-08-05 19:58:35', '25hfuhez54zd8', '7889898990', 0),
(2, 'hfuhez54zd8', '2021-08-05 20:00:06', '32hfuhez54zd8', '7889898990', 0),
(3, 'hfuhez54zd8', '2021-08-07 09:41:57', '33hfuhez54zd8', '0744595995959', 0),
(4, 'hfuhez54zd8', '2021-08-09 21:05:40', '32hfuhez54zd8', '57452545661', 0);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id_type` int(11) NOT NULL AUTO_INCREMENT,
  `libelle_type` varchar(255) DEFAULT NULL,
  `date_type` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id_type`, `libelle_type`, `date_type`) VALUES
(1, 'Personne morale', '2021-07-31 18:13:05'),
(2, 'Personne physique', '2021-07-31 18:13:20');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
