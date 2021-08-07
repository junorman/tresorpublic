-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 05 août 2021 à 20:01
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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

CREATE TABLE `categories` (
  `id_cat` int(11) NOT NULL,
  `libelle_cat` varchar(100) NOT NULL,
  `date_cat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

CREATE TABLE `contribuables` (
  `id_cont` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `nif` varchar(255) DEFAULT NULL,
  `sexe` varchar(20) DEFAULT NULL,
  `statut_cont` int(1) DEFAULT NULL,
  `date_cont` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `contribuables`
--

INSERT INTO `contribuables` (`id_cont`, `nom`, `prenom`, `tel`, `type`, `nif`, `sexe`, `statut_cont`, `date_cont`) VALUES
(1, 'yve', 'paul', '7889898990', 1, '08v0844', 'M', 1, '2021-07-31 18:14:27'),
(2, 'Elton', 'paul', '074782998', 2, '', NULL, 1, '2021-07-31 18:16:26'),
(3, 'MALONGAs', 'reugs', '047889895990', 1, 'B9987', NULL, 1, '2021-07-31 20:26:28'),
(4, 'NZOLA ANGELIQUE', 'paul', '048738390', 1, 'CA009', '', 1, '2021-08-01 02:42:27');

-- --------------------------------------------------------

--
-- Structure de la table `paiements`
--

CREATE TABLE `paiements` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `matricule` varchar(50) DEFAULT NULL,
  `date_gen` date DEFAULT NULL,
  `date_paiement` timestamp NULL DEFAULT current_timestamp(),
  `motif` text DEFAULT NULL,
  `code_rec` varchar(50) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `paiements`
--

INSERT INTO `paiements` (`id`, `code`, `matricule`, `date_gen`, `date_paiement`, `motif`, `code_rec`, `montant`, `tel`) VALUES
(1, 'hfuhez54zd8', '08v0844', '2021-08-02', '2021-08-02 19:33:16', NULL, 'rec202', 24000, '074820870');

-- --------------------------------------------------------

--
-- Structure de la table `recettes`
--

CREATE TABLE `recettes` (
  `id_rec` int(11) NOT NULL,
  `libelle_rec` varchar(255) DEFAULT NULL,
  `code_rec` varchar(255) DEFAULT NULL,
  `categorie_rec` int(11) DEFAULT NULL,
  `cont_rec` int(11) NOT NULL,
  `montant` double DEFAULT 1,
  `date_rec` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

CREATE TABLE `titres` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `code` varchar(50) DEFAULT NULL,
  `code_rec` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `matricule` varchar(50) DEFAULT NULL,
  `montant` double DEFAULT NULL,
  `motif` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `titres`
--

INSERT INTO `titres` (`id`, `nom`, `prenom`, `code`, `code_rec`, `date`, `matricule`, `montant`, `motif`) VALUES
(1, 'jsk', 'kl', 'hfuhez54zd8', 'rc002', '2021-08-02 20:27:19', '08v0844', 24000, 'défaut de permis de conduire'),
(2, 'll', 'kl', 'hdoeho5989dzdz', 'rc001', '2021-08-02 20:27:19', '08v0844', 10200, 'taxe municipale');

-- --------------------------------------------------------

--
-- Structure de la table `tmp_paiement`
--

CREATE TABLE `tmp_paiement` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `date` datetime DEFAULT current_timestamp(),
  `transaction` varchar(50) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `statut` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tmp_paiement`
--

INSERT INTO `tmp_paiement` (`id`, `code`, `date`, `transaction`, `tel`, `statut`) VALUES
(1, 'hfuhez54zd8', '2021-08-05 19:58:35', '25hfuhez54zd8', '7889898990', 0),
(2, 'hfuhez54zd8', '2021-08-05 20:00:06', '32hfuhez54zd8', '7889898990', 0);

-- --------------------------------------------------------

--
-- Structure de la table `types`
--

CREATE TABLE `types` (
  `id_type` int(11) NOT NULL,
  `libelle_type` varchar(255) DEFAULT NULL,
  `date_type` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `types`
--

INSERT INTO `types` (`id_type`, `libelle_type`, `date_type`) VALUES
(1, 'Personne morale', '2021-07-31 18:13:05'),
(2, 'Personne physique', '2021-07-31 18:13:20');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `contribuables`
--
ALTER TABLE `contribuables`
  ADD PRIMARY KEY (`id_cont`);

--
-- Index pour la table `paiements`
--
ALTER TABLE `paiements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recettes`
--
ALTER TABLE `recettes`
  ADD PRIMARY KEY (`id_rec`);

--
-- Index pour la table `titres`
--
ALTER TABLE `titres`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tmp_paiement`
--
ALTER TABLE `tmp_paiement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `contribuables`
--
ALTER TABLE `contribuables`
  MODIFY `id_cont` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `paiements`
--
ALTER TABLE `paiements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `recettes`
--
ALTER TABLE `recettes`
  MODIFY `id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `titres`
--
ALTER TABLE `titres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tmp_paiement`
--
ALTER TABLE `tmp_paiement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `types`
--
ALTER TABLE `types`
  MODIFY `id_type` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
