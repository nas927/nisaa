-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 14 nov. 2020 à 18:41
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP : 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id13790457_portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

CREATE TABLE `messagerie` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date_expedition` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--


-- --------------------------------------------------------

--
-- Structure de la table `recup`
--

CREATE TABLE `recup` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `port` varchar(255) DEFAULT NULL,
  `appname` text DEFAULT NULL,
  `appversion` varchar(255) DEFAULT NULL,
  `battery` varchar(255) DEFAULT NULL,
  `cookie` varchar(255) DEFAULT NULL,
  `langage` varchar(255) DEFAULT NULL,
  `ospcu` varchar(255) DEFAULT NULL,
  `platform` varchar(255) DEFAULT NULL,
  `date_expedition` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recup`
--

--
-- Structure de la table `recupip`
--

CREATE TABLE `recupip` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_expedition` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `recupip`
--
--
-- Index pour les tables déchargées
--

--
-- Index pour la table `messagerie`
--
ALTER TABLE `messagerie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recup`
--
ALTER TABLE `recup`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recupip`
--
ALTER TABLE `recupip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `messagerie`
--
ALTER TABLE `messagerie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `recup`
--
ALTER TABLE `recup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT pour la table `recupip`
--
ALTER TABLE `recupip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=513;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
