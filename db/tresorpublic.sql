-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 04 août 2021 à 03:53
-- Version du serveur :  8.0.23
-- Version de PHP : 7.4.0

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
  `id_cat` int NOT NULL AUTO_INCREMENT,
  `libelle_cat` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_cat` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id_cat`, `libelle_cat`, `date_cat`) VALUES
(2, 'Patente', '2021-08-03 20:23:38'),
(3, 'quittance', '2021-08-04 01:58:34');

-- --------------------------------------------------------

--
-- Structure de la table `contribuables`
--

DROP TABLE IF EXISTS `contribuables`;
CREATE TABLE IF NOT EXISTS `contribuables` (
  `id_cont` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `type` int DEFAULT NULL,
  `nif` varchar(255) DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `statut_cont` int DEFAULT NULL,
  `date_cont` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_cont`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contribuables`
--

INSERT INTO `contribuables` (`id_cont`, `nom`, `prenom`, `tel`, `type`, `nif`, `sexe`, `statut_cont`, `date_cont`) VALUES
(1, 'yve', 'paul', '7889898990', 1, 'A0009', 'M', 1, '2021-07-31 18:14:27'),
(2, 'Elton', 'paul', '074782998', 2, '', NULL, 1, '2021-07-31 18:16:26'),
(3, 'MALONGAs', 'reugs', '047889895990', 1, 'B9987', NULL, 1, '2021-07-31 20:26:28'),
(4, 'NZOLA ANGELIQUE', 'paul', '048738390', 1, 'CA009', '', 1, '2021-08-01 02:42:27');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

DROP TABLE IF EXISTS `recettes`;
CREATE TABLE IF NOT EXISTS `recettes` (
  `id_rec` int NOT NULL AUTO_INCREMENT,
  `libelle_rec` varchar(255) DEFAULT NULL,
  `code_rec` varchar(255) DEFAULT NULL,
  `categorie_rec` int DEFAULT NULL,
  `cont_rec` int NOT NULL,
  `statut_rec` int DEFAULT '1',
  `date_rec` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_rec`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `recettes`
--

INSERT INTO `recettes` (`id_rec`, `libelle_rec`, `code_rec`, `categorie_rec`, `cont_rec`, `statut_rec`, `date_rec`) VALUES
(1, 'quittance de création', 'rc001', 3, 1, 1, '2021-08-04 02:47:56'),
(2, 'test modification', 'rc002', 2, 3, 0, '2021-08-04 02:50:47'),
(3, 'patente pour TMP', 'rc003', 2, 4, 1, '2021-08-04 02:53:31');

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id_type` int NOT NULL AUTO_INCREMENT,
  `libelle_type` varchar(255) DEFAULT NULL,
  `date_type` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_type`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id_type`, `libelle_type`, `date_type`) VALUES
(1, 'Personne morale', '2021-07-31 18:13:05'),
(2, 'Personne physique', '2021-07-31 18:13:20'),
(7, 'retest', '2021-08-04 00:21:56'),
(8, 'test', '2021-08-04 00:24:49'),
(9, 'tritest', '2021-08-04 00:27:07'),
(10, 'testun', '2021-08-04 00:28:52'),
(11, 'testdeux', '2021-08-04 00:30:16');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
