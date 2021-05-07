-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 07 mai 2021 à 17:56
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_rgpd`
--

-- --------------------------------------------------------

--
-- Structure de la table `destinataire`
--

CREATE TABLE `destinataire` (
  `Id_Destinataire` int(11) NOT NULL,
  `Nom_Destinataire` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `destinataire`
--

INSERT INTO `destinataire` (`Id_Destinataire`, `Nom_Destinataire`) VALUES
(1, ''),
(2, 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )'),
(3, 'Destinataires dans des pays tiers ou organisations internationales'),
(4, 'Partenaires institutionnels ou commerciaux'),
(5, 'INSEE'),
(6, 'Electeur, candidat, parti ou groupement politique'),
(7, 'Service interne qui traite les données ');

-- --------------------------------------------------------

--
-- Structure de la table `durée`
--

CREATE TABLE `durée` (
  `Id_Duree` int(11) NOT NULL,
  `Annee` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `durée`
--

INSERT INTO `durée` (`Id_Duree`, `Annee`) VALUES
(1, ''),
(2, '1 an'),
(3, '2 ans'),
(4, '3 ans'),
(5, '4 ans'),
(6, '5 ans'),
(7, '6 ans'),
(8, '7 ans'),
(9, '8 ans'),
(10, '9 ans'),
(11, '10 ans'),
(12, '11 ans'),
(13, '12 ans'),
(14, '13 ans'),
(15, '14 ans'),
(16, '15 ans'),
(17, '16 ans'),
(18, '17 ans'),
(19, '18 ans'),
(20, '19 ans'),
(21, '20 ans'),
(22, 'Plus'),
(23, 'Donnée traitée mais non enregistrée');

-- --------------------------------------------------------

--
-- Structure de la table `finalite`
--

CREATE TABLE `finalite` (
  `Id_Finalite` int(11) NOT NULL,
  `Nom_Finalite` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `finalite`
--

INSERT INTO `finalite` (`Id_Finalite`, `Nom_Finalite`) VALUES
(1, ''),
(2, 'Gestion des retours de courrier'),
(3, ' Gestion des procurations'),
(4, 'Gestion des commissions de contrôle'),
(5, 'Etablissement de la liste électorale'),
(6, 'Communication de la liste électorale sur support informatique (export)'),
(7, 'Gestion des membres des bureaux de vote'),
(8, 'Edition des étiquettes de propagande'),
(9, 'Etablissement de la liste d\'émargement'),
(10, 'Tirage au sort et enregistrement des jurés d\'assises'),
(11, 'Echanges de données avec le système Elire de gestion du répertoire électoral unique (REU) au travers d\'une interface programmatique de type \"web services\" (API)'),
(12, 'Gestion des inscriptions et radiations sur les listes électorales');

-- --------------------------------------------------------

--
-- Structure de la table `formulaire`
--

CREATE TABLE `formulaire` (
  `Ref` int(11) NOT NULL,
  `Nom` varchar(500) NOT NULL,
  `Mdp` varchar(500) NOT NULL,
  `Liceite` varchar(100) NOT NULL,
  `Auteur` varchar(500) NOT NULL,
  `Service` varchar(500) NOT NULL,
  `Responsable1` varchar(500) NOT NULL,
  `Responsable2` varchar(500) NOT NULL,
  `Representant` varchar(500) NOT NULL,
  `FinaliteP` varchar(100) NOT NULL,
  `Finalite1` varchar(100) NOT NULL,
  `Finalite2` varchar(100) NOT NULL,
  `Finalite3` varchar(100) NOT NULL,
  `Finalite4` varchar(100) NOT NULL,
  `Finalite5` varchar(100) NOT NULL,
  `Etat` varchar(100) NOT NULL,
  `Collecte1` varchar(500) NOT NULL,
  `Duree1` varchar(100) NOT NULL,
  `NSS` varchar(100) NOT NULL,
  `Collecte2` varchar(500) NOT NULL,
  `Duree2` varchar(100) NOT NULL,
  `Viepers` varchar(100) NOT NULL,
  `Collecte3` varchar(500) NOT NULL,
  `Duree3` varchar(100) NOT NULL,
  `Economique` varchar(100) NOT NULL,
  `Collecte4` varchar(500) NOT NULL,
  `Duree4` varchar(100) NOT NULL,
  `Connexion` varchar(100) NOT NULL,
  `Collecte5` varchar(500) NOT NULL,
  `Duree5` varchar(100) NOT NULL,
  `Localisation` varchar(100) NOT NULL,
  `Collecte6` varchar(500) NOT NULL,
  `Duree6` varchar(100) NOT NULL,
  `Origine` varchar(100) NOT NULL,
  `Collecte7` varchar(500) NOT NULL,
  `Duree7` varchar(100) NOT NULL,
  `Politique` varchar(100) NOT NULL,
  `Collecte8` varchar(500) NOT NULL,
  `Duree8` varchar(100) NOT NULL,
  `Conviction` varchar(100) NOT NULL,
  `Collecte9` varchar(500) NOT NULL,
  `Duree9` varchar(100) NOT NULL,
  `Syndicale` varchar(100) NOT NULL,
  `Collecte10` varchar(500) NOT NULL,
  `Duree10` varchar(100) NOT NULL,
  `Medicale` varchar(100) NOT NULL,
  `Collecte11` varchar(500) NOT NULL,
  `Duree11` varchar(100) NOT NULL,
  `Orientation` varchar(100) NOT NULL,
  `Collecte12` varchar(500) NOT NULL,
  `Duree12` varchar(100) NOT NULL,
  `Infraction` varchar(100) NOT NULL,
  `Collecte13` varchar(500) NOT NULL,
  `Duree13` varchar(100) NOT NULL,
  `Echange1` varchar(100) NOT NULL,
  `Echange2` varchar(100) NOT NULL,
  `Echange3` varchar(100) NOT NULL,
  `Destinataire1` varchar(100) NOT NULL,
  `Destinataire2` varchar(100) NOT NULL,
  `Destinataire3` varchar(100) NOT NULL,
  `Destinataire4` varchar(100) NOT NULL,
  `HorsUE` varchar(100) NOT NULL,
  `DestinataireHUE1` varchar(500) NOT NULL,
  `Pays1` varchar(500) NOT NULL,
  `Garantie1` varchar(100) NOT NULL,
  `DestinataireHUE2` varchar(500) NOT NULL,
  `Pays2` varchar(500) NOT NULL,
  `Garantie2` varchar(100) NOT NULL,
  `DestinataireHUE3` varchar(500) NOT NULL,
  `Pays3` varchar(500) NOT NULL,
  `Garantie3` varchar(100) NOT NULL,
  `DestinataireHUE4` varchar(500) NOT NULL,
  `Pays4` varchar(500) NOT NULL,
  `Garantie4` varchar(100) NOT NULL,
  `Securite1` varchar(100) NOT NULL,
  `Securite2` varchar(100) NOT NULL,
  `Securite3` varchar(100) NOT NULL,
  `Technologie1` varchar(100) NOT NULL,
  `Technologie2` varchar(100) NOT NULL,
  `Autre` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire`
--

INSERT INTO `formulaire` (`Ref`, `Nom`, `Mdp`, `Liceite`, `Auteur`, `Service`, `Responsable1`, `Responsable2`, `Representant`, `FinaliteP`, `Finalite1`, `Finalite2`, `Finalite3`, `Finalite4`, `Finalite5`, `Etat`, `Collecte1`, `Duree1`, `NSS`, `Collecte2`, `Duree2`, `Viepers`, `Collecte3`, `Duree3`, `Economique`, `Collecte4`, `Duree4`, `Connexion`, `Collecte5`, `Duree5`, `Localisation`, `Collecte6`, `Duree6`, `Origine`, `Collecte7`, `Duree7`, `Politique`, `Collecte8`, `Duree8`, `Conviction`, `Collecte9`, `Duree9`, `Syndicale`, `Collecte10`, `Duree10`, `Medicale`, `Collecte11`, `Duree11`, `Orientation`, `Collecte12`, `Duree12`, `Infraction`, `Collecte13`, `Duree13`, `Echange1`, `Echange2`, `Echange3`, `Destinataire1`, `Destinataire2`, `Destinataire3`, `Destinataire4`, `HorsUE`, `DestinataireHUE1`, `Pays1`, `Garantie1`, `DestinataireHUE2`, `Pays2`, `Garantie2`, `DestinataireHUE3`, `Pays3`, `Garantie3`, `DestinataireHUE4`, `Pays4`, `Garantie4`, `Securite1`, `Securite2`, `Securite3`, `Technologie1`, `Technologie2`, `Autre`) VALUES
(1, 'Test', 'azerty', 'mission d\'intérêt public', 'Roby Charles', 'test', 'test', 'test', 'test', ' Gestion des procurations', 'Gestion des commissions de contrôle', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Etablissement de la liste électorale', 'Gestion des commissions de contrôle', 'Oui', 'test', '5 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '2 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '4 ans', 'Oui', 'test', '18 ans', 'Oui', 'test', '4 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '5 ans', 'Oui', 'test', 'Plus', 'Oui', 'test', '20 ans', 'Oui', 'test', '19 ans', 'Oui', 'Non', 'Oui', 'Destinataires dans des pays tiers ou organisations internationales', 'Destinataires dans des pays tiers ou organisations internationales', 'Destinataires dans des pays tiers ou organisations internationales', 'Destinataires dans des pays tiers ou organisations internationales', 'Non', 'test', 'test', 'Pays adéquat', 'test', 'test', 'Pays adéquat', 'test', 'test', 'Privacy shield', 'test', 'test', 'Code de conduite', ' Gestion des procurations', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Géolocalisation', 'Nanotechnologie', 'test');

--
-- Déclencheurs `formulaire`
--
DELIMITER $$
CREATE TRIGGER `formdelete` BEFORE DELETE ON `formulaire` FOR EACH ROW BEGIN
INSERT INTO formulaire_save VALUES(old.Ref,
old.Nom,
old.Mdp,
old.Liceite,
old.Auteur,
old.Service,
old.Responsable1,
old.Responsable2,
old.Representant,
old.FinaliteP,
old.Finalite1,
old.Finalite2,
old.Finalite3,
old.Finalite4,
old.Finalite5,
old.Etat,
old.Collecte1,
old.Duree1,
old.NSS,
old.Collecte2,
old.Duree2,
old.Viepers,
old.Collecte3,
old.Duree3,
old.Economique,
old.Collecte4,
old.Duree4,
old.Connexion,
old.Collecte5,
old.Duree5,
old.Localisation,
old.Collecte6,
old.Duree6,
old.Origine,
old.Collecte7,
old.Duree7,
old.Politique,
old.Collecte8,
old.Duree8,
old.Conviction,
old.Collecte9,
old.Duree9,
old.Syndicale,
old.Collecte10,
old.Duree10,
old.Medicale,
old.Collecte11,
old.Duree11,
old.Orientation,
old.Collecte12,
old.Duree12,
old.Infraction,
old.Collecte13,
old.Duree13,
old.Echange1,
old.Echange2,
old.Echange3,
old.Destinataire1,
old.Destinataire2,
old.Destinataire3,
old.Destinataire4,
old.HorsUE,
old.DestinataireHUE1,
old.Pays1,
old.Garantie1,
old.DestinataireHUE2,
old.Pays2,
old.Garantie2,
old.DestinataireHUE3,
old.Pays3,
old.Garantie3,
old.DestinataireHUE4,
old.Pays4,
old.Garantie4,
old.Securite1,
old.Securite2,
old.Securite3,
old.Technologie1,
old.Technologie2,
old.Autre, "D");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `formsave` AFTER INSERT ON `formulaire` FOR EACH ROW BEGIN
INSERT INTO formulaire_save VALUES(new.Ref,
new.Nom,
new.Mdp,
new.Liceite,
new.Auteur,
new.Service,
new.Responsable1,
new.Responsable2,
new.Representant,
new.FinaliteP,
new.Finalite1,
new.Finalite2,
new.Finalite3,
new.Finalite4,
new.Finalite5,
new.Etat,
new.Collecte1,
new.Duree1,
new.NSS,
new.Collecte2,
new.Duree2,
new.Viepers,
new.Collecte3,
new.Duree3,
new.Economique,
new.Collecte4,
new.Duree4,
new.Connexion,
new.Collecte5,
new.Duree5,
new.Localisation,
new.Collecte6,
new.Duree6,
new.Origine,
new.Collecte7,
new.Duree7,
new.Politique,
new.Collecte8,
new.Duree8,
new.Conviction,
new.Collecte9,
new.Duree9,
new.Syndicale,
new.Collecte10,
new.Duree10,
new.Medicale,
new.Collecte11,
new.Duree11,
new.Orientation,
new.Collecte12,
new.Duree12,
new.Infraction,
new.Collecte13,
new.Duree13,
new.Echange1,
new.Echange2,
new.Echange3,
new.Destinataire1,
new.Destinataire2,
new.Destinataire3,
new.Destinataire4,
new.HorsUE,
new.DestinataireHUE1,
new.Pays1,
new.Garantie1,
new.DestinataireHUE2,
new.Pays2,
new.Garantie2,
new.DestinataireHUE3,
new.Pays3,
new.Garantie3,
new.DestinataireHUE4,
new.Pays4,
new.Garantie4,
new.Securite1,
new.Securite2,
new.Securite3,
new.Technologie1,
new.Technologie2,
new.Autre, "I");
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `formupdate` AFTER UPDATE ON `formulaire` FOR EACH ROW BEGIN
INSERT INTO formulaire_save VALUES(new.Ref,
new.Nom,
new.Mdp,
new.Liceite,
new.Auteur,
new.Service,
new.Responsable1,
new.Responsable2,
new.Representant,
new.FinaliteP,
new.Finalite1,
new.Finalite2,
new.Finalite3,
new.Finalite4,
new.Finalite5,
new.Etat,
new.Collecte1,
new.Duree1,
new.NSS,
new.Collecte2,
new.Duree2,
new.Viepers,
new.Collecte3,
new.Duree3,
new.Economique,
new.Collecte4,
new.Duree4,
new.Connexion,
new.Collecte5,
new.Duree5,
new.Localisation,
new.Collecte6,
new.Duree6,
new.Origine,
new.Collecte7,
new.Duree7,
new.Politique,
new.Collecte8,
new.Duree8,
new.Conviction,
new.Collecte9,
new.Duree9,
new.Syndicale,
new.Collecte10,
new.Duree10,
new.Medicale,
new.Collecte11,
new.Duree11,
new.Orientation,
new.Collecte12,
new.Duree12,
new.Infraction,
new.Collecte13,
new.Duree13,
new.Echange1,
new.Echange2,
new.Echange3,
new.Destinataire1,
new.Destinataire2,
new.Destinataire3,
new.Destinataire4,
new.HorsUE,
new.DestinataireHUE1,
new.Pays1,
new.Garantie1,
new.DestinataireHUE2,
new.Pays2,
new.Garantie2,
new.DestinataireHUE3,
new.Pays3,
new.Garantie3,
new.DestinataireHUE4,
new.Pays4,
new.Garantie4,
new.Securite1,
new.Securite2,
new.Securite3,
new.Technologie1,
new.Technologie2,
new.Autre, "U");
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `formulaire_save`
--

CREATE TABLE `formulaire_save` (
  `Ref` int(11) NOT NULL,
  `Nom` varchar(500) NOT NULL,
  `Mdp` varchar(500) NOT NULL,
  `Liceite` varchar(100) NOT NULL,
  `Auteur` varchar(500) NOT NULL,
  `Service` varchar(500) NOT NULL,
  `Responsable1` varchar(500) NOT NULL,
  `Responsable2` varchar(500) NOT NULL,
  `Representant` varchar(500) NOT NULL,
  `FinaliteP` varchar(100) NOT NULL,
  `Finalite1` varchar(100) NOT NULL,
  `Finalite2` varchar(100) NOT NULL,
  `Finalite3` varchar(100) NOT NULL,
  `Finalite4` varchar(100) NOT NULL,
  `Finalite5` varchar(100) NOT NULL,
  `Etat` varchar(100) NOT NULL,
  `Collecte1` varchar(500) NOT NULL,
  `Duree1` varchar(100) NOT NULL,
  `NSS` varchar(100) NOT NULL,
  `Collecte2` varchar(500) NOT NULL,
  `Duree2` varchar(100) NOT NULL,
  `Viepers` varchar(100) NOT NULL,
  `Collecte3` varchar(500) NOT NULL,
  `Duree3` varchar(100) NOT NULL,
  `Economique` varchar(100) NOT NULL,
  `Collecte4` varchar(500) NOT NULL,
  `Duree4` varchar(100) NOT NULL,
  `Connexion` varchar(100) NOT NULL,
  `Collecte5` varchar(500) NOT NULL,
  `Duree5` varchar(100) NOT NULL,
  `Localisation` varchar(100) NOT NULL,
  `Collecte6` varchar(500) NOT NULL,
  `Duree6` varchar(100) NOT NULL,
  `Origine` varchar(100) NOT NULL,
  `Collecte7` varchar(500) NOT NULL,
  `Duree7` varchar(100) NOT NULL,
  `Politique` varchar(100) NOT NULL,
  `Collecte8` varchar(500) NOT NULL,
  `Duree8` varchar(100) NOT NULL,
  `Conviction` varchar(100) NOT NULL,
  `Collecte9` varchar(500) NOT NULL,
  `Duree9` varchar(100) NOT NULL,
  `Syndicale` varchar(100) NOT NULL,
  `Collecte10` varchar(500) NOT NULL,
  `Duree10` varchar(100) NOT NULL,
  `Medicale` varchar(100) NOT NULL,
  `Collecte11` varchar(500) NOT NULL,
  `Duree11` varchar(100) NOT NULL,
  `Orientation` varchar(100) NOT NULL,
  `Collecte12` varchar(500) NOT NULL,
  `Duree12` varchar(100) NOT NULL,
  `Infraction` varchar(100) NOT NULL,
  `Collecte13` varchar(500) NOT NULL,
  `Duree13` varchar(100) NOT NULL,
  `Echange1` varchar(100) NOT NULL,
  `Echange2` varchar(100) NOT NULL,
  `Echange3` varchar(100) NOT NULL,
  `Destinataire1` varchar(100) NOT NULL,
  `Destinataire2` varchar(100) NOT NULL,
  `Destinataire3` varchar(100) NOT NULL,
  `Destinataire4` varchar(100) NOT NULL,
  `HorsUE` varchar(100) NOT NULL,
  `DestinataireHUE1` varchar(500) NOT NULL,
  `Pays1` varchar(500) NOT NULL,
  `Garantie1` varchar(100) NOT NULL,
  `DestinataireHUE2` varchar(500) NOT NULL,
  `Pays2` varchar(500) NOT NULL,
  `Garantie2` varchar(100) NOT NULL,
  `DestinataireHUE3` varchar(500) NOT NULL,
  `Pays3` varchar(500) NOT NULL,
  `Garantie3` varchar(100) NOT NULL,
  `DestinataireHUE4` varchar(500) NOT NULL,
  `Pays4` varchar(500) NOT NULL,
  `Garantie4` varchar(100) NOT NULL,
  `Securite1` varchar(100) NOT NULL,
  `Securite2` varchar(100) NOT NULL,
  `Securite3` varchar(100) NOT NULL,
  `Technologie1` varchar(100) NOT NULL,
  `Technologie2` varchar(100) NOT NULL,
  `Autre` varchar(500) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formulaire_save`
--

INSERT INTO `formulaire_save` (`Ref`, `Nom`, `Mdp`, `Liceite`, `Auteur`, `Service`, `Responsable1`, `Responsable2`, `Representant`, `FinaliteP`, `Finalite1`, `Finalite2`, `Finalite3`, `Finalite4`, `Finalite5`, `Etat`, `Collecte1`, `Duree1`, `NSS`, `Collecte2`, `Duree2`, `Viepers`, `Collecte3`, `Duree3`, `Economique`, `Collecte4`, `Duree4`, `Connexion`, `Collecte5`, `Duree5`, `Localisation`, `Collecte6`, `Duree6`, `Origine`, `Collecte7`, `Duree7`, `Politique`, `Collecte8`, `Duree8`, `Conviction`, `Collecte9`, `Duree9`, `Syndicale`, `Collecte10`, `Duree10`, `Medicale`, `Collecte11`, `Duree11`, `Orientation`, `Collecte12`, `Duree12`, `Infraction`, `Collecte13`, `Duree13`, `Echange1`, `Echange2`, `Echange3`, `Destinataire1`, `Destinataire2`, `Destinataire3`, `Destinataire4`, `HorsUE`, `DestinataireHUE1`, `Pays1`, `Garantie1`, `DestinataireHUE2`, `Pays2`, `Garantie2`, `DestinataireHUE3`, `Pays3`, `Garantie3`, `DestinataireHUE4`, `Pays4`, `Garantie4`, `Securite1`, `Securite2`, `Securite3`, `Technologie1`, `Technologie2`, `Autre`, `type`) VALUES
(1, 'kjccnsdkjs', 'hbciqus', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(93, 'kjccnsdkjs', 'ijsoipdcdio', 'relevant de l\'exercice de l\'autorité publique', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(94, 'bon', 'cd', 'mission d\'intérêt public', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(95, 'kjccnsdkjs', 'xsx', 'mission d\'intérêt public', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(96, 'kjccnsdkjs', 'cdcsdcds', 'mission d\'intérêt public', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(97, 'kjccnsdkjs', 'lcvjkdnvlkdsn', 'mission d\'intérêt public', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(98, 'kjccnsdkjs', 'cjsdnklcnjsd', 'jnclsdncln', 'kjcnsdjk', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'D'),
(107, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', '', '', '', '', '', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', '', '', '', 'Oui', '', '', '', '', '', '', '', '', '', '', '', '', 'Tirage au sort et enregistrement des jurés d\'assises', '', '', '', '', '', 'D'),
(100, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'Edition des étiquettes de propagande', '', '', '', '', '', 'Non', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', '', '', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', '', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(101, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'Edition des étiquettes de propagande', '', '', '', '', '', 'Non', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', '', '', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', '', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(102, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'Edition des étiquettes de propagande', '', '', '', '', '', 'Non', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', '', '', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', '', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(103, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', '', '', '', '', '', '', 'Non', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', 'INSEE', 'Partenaires institutionnels ou commerciaux', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', '', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(104, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', '', '', '', '', '', '', 'Non', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', 'INSEE', 'Partenaires institutionnels ou commerciaux', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', 'Service interne qui traite les données ', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(105, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', '', '', '', '', '', '', 'Non', 'bbb', '6 ans', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', 'INSEE', 'Partenaires institutionnels ou commerciaux', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', 'Service interne qui traite les données ', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(106, 'kjccnsdkjs', 'bbb', 'relevant de l\'exercice de l\'autorité publique', 'bbb', 'bbb', 'bbb', 'bbb', 'bbb', 'Gestion des membres des bureaux de vote', ' Gestion des procurations', ' Gestion des procurations', 'Communication de la liste électorale sur support informatique (export)', 'Edition des étiquettes de propagande', 'Etablissement de la liste électorale', 'Non', 'bbb', '6 ans', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Oui', 'bbb', '', 'Non', 'Non', 'Oui', 'INSEE', 'Partenaires institutionnels ou commerciaux', 'Sous-traitants (hébergeur, prestataire et/ou maintenance informatique )', 'Service interne qui traite les données ', 'Non', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', 'bbb', 'bbb', '', '', '', '', '', '', '', 'D'),
(108, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', '', '', '', 'Oui', '', '', '', '', '', '', '', '', '', '', '', '', 'Tirage au sort et enregistrement des jurés d\'assises', '', '', '', '', '', 'D'),
(109, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', 'Electeur, candidat, parti ou groupement politique', 'Destinataires dans des pays tiers ou organisations internationales', 'INSEE', 'Oui', '', '', '', '', '', '', '', '', '', '', '', '', 'Tirage au sort et enregistrement des jurés d\'assises', '', '', '', '', '', 'D'),
(110, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', 'Electeur, candidat, parti ou groupement politique', 'Destinataires dans des pays tiers ou organisations internationales', 'INSEE', 'Oui', 'aaa', 'aaa', ' Gestion des procurations', 'aaa', 'aaa', 'Edition des étiquettes de propagande', '', '', '', '', '', '', 'Tirage au sort et enregistrement des jurés d\'assises', '', '', '', '', '', 'D'),
(111, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', 'Electeur, candidat, parti ou groupement politique', 'Destinataires dans des pays tiers ou organisations internationales', 'INSEE', 'Oui', 'aaa', 'aaa', ' Gestion des procurations', 'aaa', 'aaa', 'Edition des étiquettes de propagande', '', '', '', '', '', '', 'Tirage au sort et enregistrement des jurés d\'assises', 'Etablissement de la liste d\'émargement', '', '', '', '', 'D'),
(112, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', 'Electeur, candidat, parti ou groupement politique', 'Destinataires dans des pays tiers ou organisations internationales', 'INSEE', 'Oui', 'aaa', 'aaa', ' Gestion des procurations', 'aaa', 'aaa', 'Edition des étiquettes de propagande', '', '', '', '', '', '', 'Tirage au sort et enregistrement des jurés d\'assises', 'Etablissement de la liste d\'émargement', 'Edition des étiquettes de propagande', 'Communication de la liste électorale sur support informatique (export)', 'Etablissement de la liste d\'émargement', 'oifjezi', 'D'),
(113, 'kjccnsdkjs', 'aaa', 'relevant de l\'exercice de l\'autorité publique', 'aaa', 'aaa', 'aaa', 'aaa', 'aaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', 'Electeur, candidat, parti ou groupement politique', 'Destinataires dans des pays tiers ou organisations internationales', 'INSEE', 'Oui', 'aaa', 'aaa', ' Gestion des procurations', 'aaa', 'aaa', 'Edition des étiquettes de propagande', 'bbb', 'bbb', 'Etablissement de la liste d\'émargement', 'bbb', 'bbb', 'Tirage au sort et enregistrement des jurés d\'assises', 'Tirage au sort et enregistrement des jurés d\'assises', 'Etablissement de la liste d\'émargement', 'Edition des étiquettes de propagande', 'Communication de la liste électorale sur support informatique (export)', 'Etablissement de la liste d\'émargement', 'oifjezi', 'D'),
(114, 'kjccnsdkjs', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'relevant de l\'exercice de l\'autorité publique', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'Gestion des retours de courrier', 'Gestion des membres des bureaux de vote', 'Gestion des membres des bureaux de vote', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Gestion des membres des bureaux de vote', 'Oui', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '10 ans', 'Oui', 'aaa', '15 ans', 'Non', 'aaa', '1 an', 'Oui', 'aaa', '2 ans', 'Oui', 'aaa', '15 ans', 'Oui', 'aaa', '17 ans', 'Non', 'aaa', '5 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '12 ans', 'Oui', 'aaa', '14 ans', 'Oui', 'aaa', '13 ans', 'Oui', 'aaa', '13 ans', 'Non', 'aaa', '10 ans', 'Non', 'Non', 'Oui', 'Partenaires institutionnels ou commerciaux', 'Electeur, candidat, parti ou groupement politique', 'Destinataires dans des pays tiers ou organisations internationales', 'INSEE', 'Oui', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', ' Gestion des procurations', 'aaa', 'aaa', 'Edition des étiquettes de propagande', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'Etablissement de la liste d\'émargement', 'bbb', 'bbb', 'Tirage au sort et enregistrement des jurés d\'assises', 'Tirage au sort et enregistrement des jurés d\'assises', 'Etablissement de la liste d\'émargement', 'Edition des étiquettes de propagande', 'Communication de la liste électorale sur support informatique (export)', 'Etablissement de la liste d\'émargement', 'oifjeziaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'D'),
(1, 'Test', 'azerty', 'mission d\'intérêt public', 'Roby Charles', 'test', 'test', 'test', 'test', ' Gestion des procurations', 'Gestion des commissions de contrôle', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Etablissement de la liste électorale', 'Gestion des commissions de contrôle', 'Oui', 'test', '5 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '2 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '4 ans', 'Oui', 'test', '18 ans', 'Oui', 'test', '4 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '19 ans', 'Oui', 'test', '5 ans', 'Oui', 'test', 'Plus', 'Oui', 'test', '20 ans', 'Oui', 'test', '19 ans', 'Oui', 'Non', 'Oui', 'Destinataires dans des pays tiers ou organisations internationales', 'Destinataires dans des pays tiers ou organisations internationales', 'Destinataires dans des pays tiers ou organisations internationales', 'Destinataires dans des pays tiers ou organisations internationales', 'Non', 'test', 'test', 'Pays adéquat', 'test', 'test', 'Pays adéquat', 'test', 'test', 'Privacy shield', 'test', 'test', 'Code de conduite', ' Gestion des procurations', 'Gestion des commissions de contrôle', 'Etablissement de la liste électorale', 'Géolocalisation', 'Nanotechnologie', 'test', 'I');

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE `garantie` (
  `Id_Garantie` int(11) NOT NULL,
  `Nom_Garantie` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `garantie`
--

INSERT INTO `garantie` (`Id_Garantie`, `Nom_Garantie`) VALUES
(1, ''),
(2, 'Règles d\'entreprise contraignantes (BCR)'),
(3, 'Pays adéquat'),
(4, 'Privacy shield'),
(5, 'Code de conduite'),
(6, 'Certification'),
(7, 'Dérogation (Art 49)'),
(8, 'Clauses contractuelles types (CCT)');

-- --------------------------------------------------------

--
-- Structure de la table `mesure_securite_orga`
--

CREATE TABLE `mesure_securite_orga` (
  `Id_MesureSecuriteOrga` int(11) NOT NULL,
  `Nom_MesureOrga` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mesure_securite_orga`
--

INSERT INTO `mesure_securite_orga` (`Id_MesureSecuriteOrga`, `Nom_MesureOrga`) VALUES
(1, ''),
(9, 'Sensibilisation des utilisateurs du logiciel'),
(2, 'Authentifier les utilisateurs du logiciel'),
(3, 'Gérer les habilitations des utilisateurs'),
(4, 'Tracer les accès et gérer les incidents '),
(5, 'Sauvegarder et prévoir la continuité d\'activité'),
(6, 'Archiver de manière sécurisée'),
(7, 'Encadrer la maintenance et la destruction des données'),
(8, 'Gérer la sous-traitance ');

-- --------------------------------------------------------

--
-- Structure de la table `mesure_securite_tech`
--

CREATE TABLE `mesure_securite_tech` (
  `Id_MesureSecuriteTech` int(11) NOT NULL,
  `Nom_MesureTech` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `mesure_securite_tech`
--

INSERT INTO `mesure_securite_tech` (`Id_MesureSecuriteTech`, `Nom_MesureTech`) VALUES
(1, ''),
(12, 'Charte de sécurité et de confidentialité EDITEUR'),
(2, 'Encadrer les développements informatiques'),
(3, 'Les mots de passe du compte utilisateur sont chiffrés et inaccessible'),
(4, 'Sécuriser les postes de travail'),
(5, 'Sécuriser l\'informatique mobile'),
(6, 'Protéger le réseau informatique interne'),
(7, 'Sécuriser les serveurs'),
(8, 'Sécuriser les sites web'),
(9, 'Sécuriser les échanges avec d\'autres organismes'),
(10, 'L\'accès physique au traitement est protégé'),
(11, 'Chiffrer, garantir l\'intégrité ou signer');

-- --------------------------------------------------------

--
-- Structure de la table `technologie`
--

CREATE TABLE `technologie` (
  `Id_Technologie` int(11) NOT NULL,
  `Nom_Technologie` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `technologie`
--

INSERT INTO `technologie` (`Id_Technologie`, `Nom_Technologie`) VALUES
(1, ''),
(2, 'Dispositif sans contact'),
(3, 'Carte a puce'),
(4, 'Vidéosurveillance'),
(5, 'Mécanisme d\'anonymisation'),
(6, 'Géolocalisation'),
(7, 'Nanotechnologie'),
(8, 'Intelligence artificielle');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `destinataire`
--
ALTER TABLE `destinataire`
  ADD PRIMARY KEY (`Id_Destinataire`);

--
-- Index pour la table `durée`
--
ALTER TABLE `durée`
  ADD PRIMARY KEY (`Id_Duree`);

--
-- Index pour la table `finalite`
--
ALTER TABLE `finalite`
  ADD PRIMARY KEY (`Id_Finalite`);

--
-- Index pour la table `formulaire`
--
ALTER TABLE `formulaire`
  ADD PRIMARY KEY (`Ref`);

--
-- Index pour la table `garantie`
--
ALTER TABLE `garantie`
  ADD PRIMARY KEY (`Id_Garantie`);

--
-- Index pour la table `mesure_securite_orga`
--
ALTER TABLE `mesure_securite_orga`
  ADD PRIMARY KEY (`Id_MesureSecuriteOrga`);

--
-- Index pour la table `mesure_securite_tech`
--
ALTER TABLE `mesure_securite_tech`
  ADD PRIMARY KEY (`Id_MesureSecuriteTech`);

--
-- Index pour la table `technologie`
--
ALTER TABLE `technologie`
  ADD PRIMARY KEY (`Id_Technologie`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `destinataire`
--
ALTER TABLE `destinataire`
  MODIFY `Id_Destinataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `durée`
--
ALTER TABLE `durée`
  MODIFY `Id_Duree` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT pour la table `finalite`
--
ALTER TABLE `finalite`
  MODIFY `Id_Finalite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `formulaire`
--
ALTER TABLE `formulaire`
  MODIFY `Ref` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `garantie`
--
ALTER TABLE `garantie`
  MODIFY `Id_Garantie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `mesure_securite_orga`
--
ALTER TABLE `mesure_securite_orga`
  MODIFY `Id_MesureSecuriteOrga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `mesure_securite_tech`
--
ALTER TABLE `mesure_securite_tech`
  MODIFY `Id_MesureSecuriteTech` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `technologie`
--
ALTER TABLE `technologie`
  MODIFY `Id_Technologie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
