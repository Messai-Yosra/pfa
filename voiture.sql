-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Avril 2016 à 08:22
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `voiture`
--

-- --------------------------------------------------------

--
-- Structure de la table `passager`
--

CREATE TABLE IF NOT EXISTS `passager` (
  `trajet_id` int(11) NOT NULL,
  `utilisateur_ncin` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `trajet`
--

CREATE TABLE IF NOT EXISTS `trajet` (
`id` int(11) NOT NULL,
  `depart` varchar(32) NOT NULL,
  `arrivee` varchar(32) NOT NULL,
  `date` date NOT NULL,
  `nbplaces` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `conducteur_ncin` varchar(8) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ncin` varchar(8) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `prenom` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ncin`, `nom`, `prenom`) VALUES
('02569855', 'Sallemi', 'Ahmed'),
('08302589', 'Soltani', 'Ali'),
('12558358', 'Zaafrani', 'Wahida');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE IF NOT EXISTS `voiture` (
  `immatriculation` varchar(10) NOT NULL,
  `marque` varchar(25) NOT NULL,
  `couleur` varchar(12) NOT NULL,
  `proprietaire_ncin` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`immatriculation`, `marque`, `couleur`, `proprietaire_ncin`) VALUES
('12358TU569', 'Renault', 'Jaune', '08302589'),
('1238TU126', 'Peugeot', 'Blanche', '08302589');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `passager`
--
ALTER TABLE `passager`
 ADD PRIMARY KEY (`trajet_id`,`utilisateur_ncin`), ADD KEY `utilisateur_ncin` (`utilisateur_ncin`), ADD KEY `trajet_id` (`trajet_id`,`utilisateur_ncin`), ADD KEY `trajet_id_2` (`trajet_id`,`utilisateur_ncin`);

--
-- Index pour la table `trajet`
--
ALTER TABLE `trajet`
 ADD PRIMARY KEY (`id`), ADD KEY `conducteur_login` (`conducteur_ncin`), ADD KEY `conducteur_login_2` (`conducteur_ncin`), ADD KEY `conducteur_login_3` (`conducteur_ncin`), ADD KEY `conducteur_ncin` (`conducteur_ncin`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
 ADD PRIMARY KEY (`ncin`);

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
 ADD PRIMARY KEY (`immatriculation`), ADD KEY `proprietaire_ncin` (`proprietaire_ncin`), ADD KEY `proprietaire_ncin_2` (`proprietaire_ncin`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `trajet`
--
ALTER TABLE `trajet`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `passager`
--
ALTER TABLE `passager`
ADD CONSTRAINT `passager_ibfk_1` FOREIGN KEY (`trajet_id`) REFERENCES `trajet` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `passager_ibfk_2` FOREIGN KEY (`utilisateur_ncin`) REFERENCES `utilisateur` (`ncin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `trajet`
--
ALTER TABLE `trajet`
ADD CONSTRAINT `trajet_ibfk_1` FOREIGN KEY (`conducteur_ncin`) REFERENCES `utilisateur` (`ncin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `voiture`
--
ALTER TABLE `voiture`
ADD CONSTRAINT `voiture_ibfk_1` FOREIGN KEY (`proprietaire_ncin`) REFERENCES `utilisateur` (`ncin`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
