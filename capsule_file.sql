-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 30 Novembre 2017 à 11:27
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `victor`
--

-- --------------------------------------------------------

--
-- Structure de la table `capsule_file`
--

CREATE TABLE `capsule_file` (
  `Id` int(11) NOT NULL,
  `Id_Folder` varchar(65) DEFAULT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `Format` varchar(4) DEFAULT NULL,
  `Date_Upload` date DEFAULT NULL,
  `Validity` date DEFAULT NULL,
  `Nb_Download` int(11) DEFAULT NULL,
  `Size` int(255) DEFAULT NULL,
  `Id_user` int(11) DEFAULT NULL,
  `emailExpe` varchar(255) DEFAULT NULL,
  `emailDesti` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `capsule_file`
--
ALTER TABLE `capsule_file`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `capsule_file`
--
ALTER TABLE `capsule_file`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
