-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 24 fév. 2020 à 11:23
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `v2`
--

-- --------------------------------------------------------

--
-- Structure de la table `annulation`
--

CREATE TABLE `annulation` (
  `id_annulation` int(11) NOT NULL,
  `numpolice` varchar(255) DEFAULT NULL,
  `code_intermediaire` int(11) DEFAULT NULL,
  `motif_annulation` varchar(255) DEFAULT NULL,
  `etat_annulation` varchar(255) DEFAULT NULL,
  `date_annulation` datetime DEFAULT NULL,
  `matricule_auteur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE `attestation` (
  `id_attestation` int(11) NOT NULL,
  `numero_attestation` int(50) NOT NULL,
  `id_type` int(11) DEFAULT NULL,
  `intermediaire` int(10) NOT NULL,
  `etat_attestation` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `attestation`
--

INSERT INTO `attestation` (`id_attestation`, `numero_attestation`, `id_type`, `intermediaire`, `etat_attestation`) VALUES
(55, 180100, 1, 40, 'attrbuee,restante'),
(56, 180101, 1, 40, 'attrbuee,restante'),
(57, 180102, 1, 40, 'attrbuee,restante'),
(58, 180103, 1, 40, 'attribuee,vendue'),
(59, 180104, 1, 40, 'attrbuee,restante'),
(60, 180105, 1, 40, 'attribuee,vendue'),
(61, 180106, 1, 40, 'attribuee,vendue'),
(62, 180107, 1, 40, 'attribuee,vendue'),
(63, 180108, 1, 40, 'attribuee,vendue'),
(64, 180109, 1, 40, 'attribuee,restante'),
(65, 180110, 1, 40, 'attribuee,restante'),
(66, 180111, 2, 40, 'attribuee,restante'),
(67, 180112, 2, 40, 'attribuee,restante'),
(68, 180113, 2, 40, 'attribuee,restante'),
(69, 180114, 2, 40, 'attribuee,restante'),
(70, 180115, 2, 40, 'attribuee,restante'),
(71, 180116, 2, 40, 'attribuee,restante'),
(72, 180117, 3, 40, 'attrbuee,restante'),
(73, 180118, 3, 40, 'attrbuee,restante'),
(74, 180119, 3, 40, 'attrbuee,restante'),
(75, 180120, 3, 40, 'attrbuee,restante'),
(76, 180121, 3, 40, 'attribuee,vendue'),
(77, 180122, 3, 40, 'attribuee,vendue'),
(78, 180123, 3, 40, 'attribuee,vendue'),
(79, 180123, 3, 40, 'attribuee,restante'),
(80, 180124, 3, 40, 'attribuee,restante');

-- --------------------------------------------------------

--
-- Structure de la table `avenant`
--

CREATE TABLE `avenant` (
  `num_avenant` int(10) NOT NULL,
  `type_avenant` int(11) NOT NULL,
  `numpolice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `avenant`
--

INSERT INTO `avenant` (`num_avenant`, `type_avenant`, `numpolice`) VALUES
(0, 1, 49),
(0, 1, 50),
(1, 1, 50),
(2, 1, 50),
(3, 1, 50),
(4, 1, 50),
(0, 1, 53),
(0, 1, 54),
(0, 1, 55),
(0, 1, 71),
(0, 1, 72),
(1, 2, 54),
(2, 2, 54),
(3, 2, 54),
(0, 1, 78),
(1, 1, 78),
(1, 2, 49),
(0, 1, 85);

-- --------------------------------------------------------

--
-- Structure de la table `bureau`
--

CREATE TABLE `bureau` (
  `id` int(10) NOT NULL,
  `intermediaire` int(10) NOT NULL,
  `gerant` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(10) NOT NULL,
  `libelle_categorie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `libelle_categorie`) VALUES
(1, 'Promenade et Affaire Personne Physique'),
(2, 'Transport pour Propre Compte'),
(3, 'Transport Public de Marchandises'),
(4, 'Transport Public de Voyageurs'),
(5, 'Deux Roues'),
(6, 'Pack Auto');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_commande` int(11) NOT NULL,
  `date_commande` date DEFAULT NULL,
  `id_intermediaire` int(10) NOT NULL,
  `nombre_attestation_verte` int(11) DEFAULT NULL,
  `nombre_attestation_jaune` int(11) DEFAULT NULL,
  `nombre_attestation_cedeao` int(11) DEFAULT NULL,
  `etat_commande` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `energie`
--

CREATE TABLE `energie` (
  `code_energie` int(11) NOT NULL,
  `libelle_energie` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `energie`
--

INSERT INTO `energie` (`code_energie`, `libelle_energie`) VALUES
(1, 'Essence'),
(2, 'Diesel');

-- --------------------------------------------------------

--
-- Structure de la table `etat_police`
--

CREATE TABLE `etat_police` (
  `id_type` int(10) NOT NULL,
  `num_police_valide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etat_police`
--

INSERT INTO `etat_police` (`id_type`, `num_police_valide`) VALUES
(1, 49),
(1, 50),
(1, 52),
(1, 53),
(1, 54),
(1, 55),
(0, 70),
(1, 71),
(1, 72),
(0, 73),
(0, 74),
(1, 75),
(1, 76),
(1, 77),
(1, 78),
(1, 79),
(0, 80),
(0, 81),
(0, 82),
(0, 83),
(1, 84),
(1, 85);

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE `garantie` (
  `id_garantie` int(10) NOT NULL,
  `code_garantie` varchar(10) NOT NULL,
  `libelle_garantie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `garantie`
--

INSERT INTO `garantie` (`id_garantie`, `code_garantie`, `libelle_garantie`) VALUES
(0, 'NONE', 'OMMISE'),
(1, 'DR', 'Defense et Recours'),
(2, 'INC', 'Icendie'),
(3, 'VOL', 'Vol'),
(4, 'VHR', 'Vehicule de Remplacement'),
(5, 'TCM', 'Tierce Complete'),
(6, 'TCL', 'Tierce Cllision'),
(7, 'BDG', 'Bris de Glace'),
(8, 'VAC', 'Vol Accessoires'),
(9, 'AVR1', 'Avance Sur Recours1'),
(10, 'AVA', 'Acte de Vandalisme'),
(11, 'F1', 'Individuelle Personnes Transportees OPT1'),
(12, 'ERC', 'Carte CEDEAO'),
(13, 'PLA', 'Assistance Auto Avantage'),
(14, 'PLC', 'Assistance Auto Confort'),
(15, 'PLL', 'Assistance Auto Liberte'),
(16, 'TAG', 'Tierce Agree'),
(17, 'RC', 'Résponsabilité Civile'),
(18, 'RTI', 'Recours des tiers incendie'),
(19, 'F2', 'individuelle Personnes transportees OPT2'),
(20, 'F3', 'individuelle Personnes transportees OPT3'),
(21, 'F4', 'individuelle Personnes transportees OPT4'),
(22, 'AVR2', 'Avance Sur Recours2'),
(23, 'AVR3', 'Avance Sur Recours3');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `code_genre` int(11) NOT NULL,
  `marque` int(11) NOT NULL,
  `libelle_genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`code_genre`, `marque`, `libelle_genre`) VALUES
(1, 1, 'A1'),
(2, 2, 'B1');

-- --------------------------------------------------------

--
-- Structure de la table `intermediaire`
--

CREATE TABLE `intermediaire` (
  `id` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `intermediaire`
--

INSERT INTO `intermediaire` (`id`, `id_user`) VALUES
(30, 40),
(31, 41);

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `code_marque` int(11) NOT NULL,
  `libelle_marque` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `marque`
--

INSERT INTO `marque` (`code_marque`, `libelle_marque`) VALUES
(1, 'A'),
(2, 'B');

-- --------------------------------------------------------

--
-- Structure de la table `police_valide`
--

CREATE TABLE `police_valide` (
  `id` int(10) NOT NULL,
  `numpolice` varchar(255) NOT NULL,
  `codeformule` varchar(255) DEFAULT NULL,
  `intermediaire` int(10) NOT NULL,
  `codecategorie` int(10) NOT NULL,
  `naturecontrat` varchar(255) DEFAULT NULL,
  `codezone` tinyint(1) DEFAULT NULL,
  `dateeffet` date NOT NULL,
  `duree` int(5) NOT NULL,
  `dateecheance` date NOT NULL,
  `qualite` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `codeville` varchar(255) DEFAULT NULL,
  `codeprofession` varchar(255) DEFAULT NULL,
  `codeactivite` varchar(255) DEFAULT NULL,
  `typepiece` varchar(255) DEFAULT NULL,
  `numpiece` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `typepermi` varchar(255) DEFAULT NULL,
  `numepermis` varchar(255) DEFAULT NULL,
  `datedelivpermis` varchar(255) DEFAULT NULL,
  `lieudelivpermis` varchar(255) DEFAULT NULL,
  `immatriculation` varchar(255) NOT NULL,
  `numchassis` varchar(255) DEFAULT NULL,
  `code_marque` int(11) NOT NULL,
  `codeserie` varchar(255) DEFAULT NULL,
  `code_genre` int(10) DEFAULT NULL,
  `codeusage` varchar(255) DEFAULT NULL,
  `code_energie` int(10) NOT NULL,
  `nombreplace` varchar(255) DEFAULT NULL,
  `cylindre` int(10) DEFAULT NULL,
  `valeurneuve` float DEFAULT NULL,
  `valeurvenale` float DEFAULT NULL,
  `puissancefiscale` int(11) NOT NULL,
  `charge_utile` varchar(20) NOT NULL,
  `codecarrosserie` varchar(255) DEFAULT NULL,
  `datemisecirculation` varchar(255) DEFAULT NULL,
  `montant_prime` float NOT NULL,
  `montant_accessoire` float NOT NULL,
  `montant_taxe` float NOT NULL,
  `montant_fga` float NOT NULL,
  `montant_ttc` float NOT NULL,
  `datevali` date DEFAULT NULL,
  `datesous` date DEFAULT NULL,
  `datesais` date DEFAULT NULL,
  `flagtrans` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `police_valide`
--

INSERT INTO `police_valide` (`id`, `numpolice`, `codeformule`, `intermediaire`, `codecategorie`, `naturecontrat`, `codezone`, `dateeffet`, `duree`, `dateecheance`, `qualite`, `nom`, `prenom`, `adresse`, `codeville`, `codeprofession`, `codeactivite`, `typepiece`, `numpiece`, `telephone`, `typepermi`, `numepermis`, `datedelivpermis`, `lieudelivpermis`, `immatriculation`, `numchassis`, `code_marque`, `codeserie`, `code_genre`, `codeusage`, `code_energie`, `nombreplace`, `cylindre`, `valeurneuve`, `valeurvenale`, `puissancefiscale`, `charge_utile`, `codecarrosserie`, `datemisecirculation`, `montant_prime`, `montant_accessoire`, `montant_taxe`, `montant_fga`, `montant_ttc`, `datevali`, `datesous`, `datesais`, `flagtrans`) VALUES
(49, '4010000001', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00150', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 2000000, 1000000, 9, '', 'NULL', '2020-02-14', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-14', 'NULL'),
(50, '4010000002', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00150', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-14', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-14', 'NULL'),
(52, '4010000002', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-14', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-14', 'NULL'),
(53, '4010000003', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-17', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-17', 'NULL'),
(54, '4010000004', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-17', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-17', 'NULL'),
(55, '4010000005', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-17', 'NULL'),
(70, '4010000006', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-17', 'NULL'),
(71, '4010000007', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-17', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-17', 'NULL'),
(72, '4010000008', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(73, '4010000009', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(74, '4010000010', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(75, '4010000004', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-17', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(76, '4010000004', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-17', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(77, '4010000004', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-17', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(78, '4010000011', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(79, '4010000011', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-18', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-18', 'NULL'),
(80, '4010000012', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-19', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-19', 'NULL'),
(81, '4010000013', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-20', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-20', 'NULL'),
(82, '4010000014', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-20', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-20', 'NULL'),
(83, '4010000015', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', 'Ville Prospect', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999BH', 'DK9999BH', 2, '1', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-20', 45190, 2000, 4719, 670, 52579, '0000-00-00', '0000-00-00', '2020-02-20', 'NULL'),
(84, '4010000001', 'NULL', 30, 1, 'NULL', 0, '2020-02-20', 6, '0000-00-00', 'NULL', 'NDIAYE', 'MAREME', 'SIPRES', '00150', 'NULL', 'NULL', 'NULL', 'NULL', '771521717', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9999AA', 'DK9999AA', 2, '2', 1, 'NULL', 2, '5', 0, 4010000000, 4010000000, 9, '', 'NULL', '2020-02-14', 10574600, 20000, 1059460, 670, 10490600, '0000-00-00', '0000-00-00', '2020-02-20', 'NULL'),
(85, '4010000016', 'NULL', 30, 1, 'NULL', 0, '2020-02-24', 3, '0000-00-00', 'NULL', 'FALL', 'MARIAMA', 'PARCELLES', '00010', 'NULL', 'NULL', 'NULL', 'NULL', '', 'NULL', 'NULL', 'NULL', 'NULL', 'DK9545BB', 'DK9545BB', 2, '1', 1, 'NULL', 1, '5', 0, 0, 0, 10, '', 'NULL', '2020-02-24', 18657, 2000, 2065, 335, 21905, '0000-00-00', '0000-00-00', '2020-02-24', 'NULL');

-- --------------------------------------------------------

--
-- Structure de la table `police_valide_garantie`
--

CREATE TABLE `police_valide_garantie` (
  `id` int(10) NOT NULL,
  `police` int(10) NOT NULL,
  `code_garantie` int(10) DEFAULT NULL,
  `montant_prime_garantie` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `police_valide_garantie`
--

INSERT INTO `police_valide_garantie` (`id`, `police`, `code_garantie`, `montant_prime_garantie`) VALUES
(166, 49, 17, 26815),
(167, 49, 7, 10500),
(168, 49, 18, 0),
(169, 49, 5, 0),
(170, 49, 1, 0),
(171, 49, 9, 7875),
(172, 49, 2, 18375),
(173, 49, 11, 3150),
(174, 49, 3, 11025),
(175, 49, 13, 0),
(176, 49, 12, 0),
(177, 50, 17, 26815),
(178, 50, 7, 10500),
(179, 50, 18, 0),
(180, 50, 5, 0),
(181, 50, 1, 3150),
(182, 50, 0, 0),
(183, 50, 2, 0),
(184, 50, 11, 3150),
(185, 50, 3, 11025),
(186, 50, 13, 0),
(187, 50, 12, 0),
(199, 52, 17, 26815),
(200, 52, 7, 10500),
(201, 52, 18, 0),
(202, 52, 5, 0),
(203, 52, 1, 3150),
(204, 52, 9, 7875),
(205, 52, 2, 0),
(206, 52, 11, 3150),
(207, 52, 3, 0),
(208, 52, 13, 0),
(209, 52, 12, 0),
(210, 53, 17, 26815),
(211, 53, 7, 10500),
(212, 53, 18, 0),
(213, 53, 5, 0),
(214, 53, 1, 3150),
(215, 53, 0, 0),
(216, 53, 2, 5250),
(217, 53, 3, 3150),
(218, 53, 13, 0),
(219, 53, 12, 0),
(220, 54, 17, 26815),
(221, 54, 7, 10500),
(222, 54, 18, 0),
(223, 54, 5, 0),
(224, 54, 1, 3150),
(225, 54, 9, 7875),
(226, 54, 2, 5250),
(227, 54, 19, 6300),
(228, 54, 3, 0),
(229, 54, 13, 0),
(230, 54, 12, 0),
(231, 55, 17, 17877),
(232, 55, 7, 7000),
(233, 55, 18, 0),
(234, 55, 5, 0),
(235, 55, 1, 2100),
(236, 55, 9, 5250),
(237, 55, 2, 0),
(238, 55, 11, 2100),
(239, 55, 3, 0),
(240, 55, 13, 0),
(241, 55, 12, 0),
(242, 71, 17, 26815),
(243, 71, 7, 10500),
(244, 71, 18, 0),
(245, 71, 5, 0),
(246, 71, 1, 3150),
(247, 71, 0, 0),
(248, 71, 2, 2625),
(249, 71, 3, 0),
(250, 71, 13, 0),
(251, 71, 12, 0),
(252, 72, 17, 26815),
(253, 72, 7, 10500),
(254, 72, 18, 0),
(255, 72, 5, 0),
(256, 72, 1, 0),
(257, 72, 0, 0),
(258, 72, 2, 0),
(259, 72, 3, 0),
(260, 72, 13, 0),
(261, 72, 12, 0),
(262, 75, 17, 26815),
(263, 75, 7, 10500),
(264, 75, 18, 0),
(265, 75, 5, 0),
(266, 75, 1, 0),
(267, 75, 9, 7875),
(268, 75, 2, 7875),
(269, 75, 0, 0),
(270, 75, 3, 4725),
(271, 75, 13, 0),
(272, 75, 12, 0),
(273, 76, 17, 26815),
(274, 76, 7, 10500),
(275, 76, 18, 0),
(276, 76, 5, 0),
(277, 76, 1, 0),
(278, 76, 9, 7875),
(279, 76, 2, 7875),
(280, 76, 0, 0),
(281, 76, 3, 4725),
(282, 76, 13, 0),
(283, 76, 12, 0),
(284, 77, 17, 26815),
(285, 77, 7, 10500),
(286, 77, 18, 0),
(287, 77, 5, 0),
(288, 77, 1, 0),
(289, 77, 9, 7875),
(290, 77, 2, 0),
(291, 77, 0, 0),
(292, 77, 3, 0),
(293, 77, 13, 0),
(294, 77, 12, 0),
(295, 78, 17, 4469),
(296, 78, 7, 1750),
(297, 78, 18, 0),
(298, 78, 5, 0),
(299, 78, 1, 0),
(300, 78, 0, 0),
(301, 78, 2, 0),
(302, 78, 3, 0),
(303, 78, 13, 0),
(304, 78, 12, 0),
(305, 79, 17, 13407),
(306, 79, 7, 5250),
(307, 79, 18, 0),
(308, 79, 5, 0),
(309, 79, 1, 1575),
(310, 79, 9, 3937),
(311, 79, 2, 0),
(312, 79, 0, 0),
(313, 79, 3, 0),
(314, 79, 13, 0),
(315, 79, 12, 0),
(316, 84, 17, 26815),
(317, 84, 7, 10500),
(318, 84, 18, 0),
(319, 84, 5, 0),
(320, 84, 1, 3150),
(321, 84, 9, 7875),
(322, 84, 2, 10526200),
(323, 84, 0, 0),
(324, 84, 3, 0),
(325, 84, 13, 0),
(326, 84, 12, 0),
(327, 85, 17, 13407),
(328, 85, 7, 5250),
(329, 85, 18, 0),
(330, 85, 5, 0),
(331, 85, 1, 0),
(332, 85, 0, 0),
(333, 85, 2, 0),
(334, 85, 3, 0),
(335, 85, 13, 0),
(336, 85, 12, 0);

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `role`
--

INSERT INTO `role` (`id_role`, `libelle_role`) VALUES
(1, 'administrateur'),
(2, 'intermediaire'),
(3, 'controlleur');

-- --------------------------------------------------------

--
-- Structure de la table `type_attestation`
--

CREATE TABLE `type_attestation` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_attestation`
--

INSERT INTO `type_attestation` (`id_type`, `libelle`) VALUES
(1, 'jaune'),
(2, 'verte'),
(3, 'cedeao');

-- --------------------------------------------------------

--
-- Structure de la table `type_avenant`
--

CREATE TABLE `type_avenant` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_avenant`
--

INSERT INTO `type_avenant` (`id_type`, `libelle`) VALUES
(1, 'RENOUVELLEMENT'),
(2, 'CHANGEMENT DE MATRICULE');

-- --------------------------------------------------------

--
-- Structure de la table `type_etat_police`
--

CREATE TABLE `type_etat_police` (
  `id_etat` int(11) NOT NULL,
  `libelle_etat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type_etat_police`
--

INSERT INTO `type_etat_police` (`id_etat`, `libelle_etat`) VALUES
(0, 'projet'),
(1, 'En cours'),
(2, 'Annulee');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `matricule` int(10) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `role_user` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `etat` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `matricule`, `prenom`, `nom`, `adresse`, `telephone`, `role_user`, `login`, `password`, `etat`) VALUES
(39, 1111, 'Marieme', 'Koundoul', 'Parcelles', '775125547', 1, 'kndeyemarieme@gmail.com', 'passer@123', 0),
(40, 4801, 'Alioune', 'Gueye', 'Patte doie', '775842201', 2, 'gueyealioune@gmail.com', 'passer@55', 0),
(41, 4192, 'CHEIKH', 'SALL', 'HLM GRAND YOFF', '774364931', 2, 'csglobalbusiness.sn@gmail.com', 'globalbusiness', 0);

-- --------------------------------------------------------

--
-- Structure de la table `vente_attestation`
--

CREATE TABLE `vente_attestation` (
  `id` int(11) NOT NULL,
  `id_vente` varchar(255) NOT NULL,
  `id_attestation` int(10) DEFAULT NULL,
  `num_police_valide` int(10) NOT NULL,
  `avenant_police_valide` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `vente_attestation`
--

INSERT INTO `vente_attestation` (`id`, `id_vente`, `id_attestation`, `num_police_valide`, `avenant_police_valide`) VALUES
(47, 'hPJRk', 58, 49, 0),
(48, 'hPJRk', 76, 49, 0),
(49, 'mbDdw', 60, 50, 0),
(51, '8a@Hu', 62, 52, 0),
(52, 'UGA2D', 63, 53, 0),
(53, 'lczMx', 61, 54, 0),
(54, 'xtfKl', 64, 55, 0),
(55, 'BAaLP', 65, 71, 0),
(56, 'gBH6l', 58, 72, 0),
(57, 'gBH6l', 76, 72, 0),
(58, 'PBF4C', 58, 75, 0),
(59, 'PBF4C', 76, 75, 0),
(60, 'rbmb2', 58, 76, 0),
(61, 'rbmb2', 76, 76, 0),
(62, 'xVLtN', 58, 77, 0),
(63, 'xVLtN', 76, 77, 0),
(64, 'PaeNW', 60, 78, 0),
(65, 'PaeNW', 77, 78, 0),
(66, 'D2fLG', 62, 79, 0),
(67, 'D2fLG', 78, 79, 0),
(68, 'jWocr', 61, 84, 0),
(69, 'jWocr', 78, 84, 0),
(70, 'Jw@9k', 63, 85, 0),
(71, 'Jw@9k', 78, 85, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` varchar(255) NOT NULL,
  `libelle_ville` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id_ville`, `libelle_ville`) VALUES
('00010', 'Dakar'),
('00150', 'Thies');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD PRIMARY KEY (`id_annulation`),
  ADD KEY `code_intermediaire` (`code_intermediaire`),
  ADD KEY `fk_pannul` (`numpolice`);

--
-- Index pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD PRIMARY KEY (`id_attestation`),
  ADD KEY `intermediaire` (`intermediaire`),
  ADD KEY `id_type` (`id_type`) USING BTREE;

--
-- Index pour la table `avenant`
--
ALTER TABLE `avenant`
  ADD KEY `type_avenant` (`type_avenant`),
  ADD KEY `num_police_valide` (`numpolice`),
  ADD KEY `num_avenant` (`num_avenant`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_commande`),
  ADD KEY `date_commande` (`date_commande`),
  ADD KEY `id_intermediaire` (`id_intermediaire`);

--
-- Index pour la table `energie`
--
ALTER TABLE `energie`
  ADD PRIMARY KEY (`code_energie`);

--
-- Index pour la table `etat_police`
--
ALTER TABLE `etat_police`
  ADD KEY `num_police_valide` (`num_police_valide`),
  ADD KEY `id_type` (`id_type`);

--
-- Index pour la table `garantie`
--
ALTER TABLE `garantie`
  ADD PRIMARY KEY (`id_garantie`),
  ADD UNIQUE KEY `id_garantie` (`id_garantie`),
  ADD UNIQUE KEY `code_garantie_2` (`code_garantie`),
  ADD KEY `code_garantie` (`id_garantie`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`code_genre`),
  ADD KEY `marque` (`marque`);

--
-- Index pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_user_2` (`id_user`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `marque`
--
ALTER TABLE `marque`
  ADD PRIMARY KEY (`code_marque`);

--
-- Index pour la table `police_valide`
--
ALTER TABLE `police_valide`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `codeintermediaire` (`intermediaire`),
  ADD KEY `codecategorie` (`codecategorie`),
  ADD KEY `codeville` (`codeville`),
  ADD KEY `code_marque` (`code_marque`),
  ADD KEY `fk_genre` (`code_genre`),
  ADD KEY `fk_energie` (`code_energie`),
  ADD KEY `id_2` (`id`),
  ADD KEY `numpolice` (`numpolice`);

--
-- Index pour la table `police_valide_garantie`
--
ALTER TABLE `police_valide_garantie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `code_garantie` (`code_garantie`),
  ADD KEY `police` (`police`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Index pour la table `type_attestation`
--
ALTER TABLE `type_attestation`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `type_avenant`
--
ALTER TABLE `type_avenant`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `type_etat_police`
--
ALTER TABLE `type_etat_police`
  ADD PRIMARY KEY (`id_etat`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `matricule` (`matricule`),
  ADD KEY `role_user` (`role_user`);

--
-- Index pour la table `vente_attestation`
--
ALTER TABLE `vente_attestation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_attestation` (`id_attestation`),
  ADD KEY `num_police_valide` (`num_police_valide`),
  ADD KEY `id_vente` (`id_vente`),
  ADD KEY `avenant_police_valide` (`avenant_police_valide`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `police_valide`
--
ALTER TABLE `police_valide`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT pour la table `police_valide_garantie`
--
ALTER TABLE `police_valide_garantie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `vente_attestation`
--
ALTER TABLE `vente_attestation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD CONSTRAINT `fk_pannul` FOREIGN KEY (`numpolice`) REFERENCES `police_valide` (`numpolice`);

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `fk_int` FOREIGN KEY (`intermediaire`) REFERENCES `intermediaire` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`id_type`) REFERENCES `type_attestation` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `avenant`
--
ALTER TABLE `avenant`
  ADD CONSTRAINT `fk_avnPl` FOREIGN KEY (`numpolice`) REFERENCES `police_valide` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type_avenant` FOREIGN KEY (`type_avenant`) REFERENCES `type_avenant` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `fk_inter` FOREIGN KEY (`id_intermediaire`) REFERENCES `intermediaire` (`id`);

--
-- Contraintes pour la table `etat_police`
--
ALTER TABLE `etat_police`
  ADD CONSTRAINT `fk_etat_pl` FOREIGN KEY (`num_police_valide`) REFERENCES `police_valide` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type_etat` FOREIGN KEY (`id_type`) REFERENCES `type_etat_police` (`id_etat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `fk_marque_voiture` FOREIGN KEY (`marque`) REFERENCES `marque` (`code_marque`);

--
-- Contraintes pour la table `police_valide`
--
ALTER TABLE `police_valide`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`codecategorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_energie` FOREIGN KEY (`code_energie`) REFERENCES `energie` (`code_energie`),
  ADD CONSTRAINT `fk_genre` FOREIGN KEY (`code_genre`) REFERENCES `genre` (`code_genre`),
  ADD CONSTRAINT `fk_intermediaire` FOREIGN KEY (`intermediaire`) REFERENCES `intermediaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marque` FOREIGN KEY (`code_marque`) REFERENCES `marque` (`code_marque`);

--
-- Contraintes pour la table `police_valide_garantie`
--
ALTER TABLE `police_valide_garantie`
  ADD CONSTRAINT `fk_gant` FOREIGN KEY (`police`) REFERENCES `police_valide` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_garantie` FOREIGN KEY (`code_garantie`) REFERENCES `garantie` (`id_garantie`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_user`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vente_attestation`
--
ALTER TABLE `vente_attestation`
  ADD CONSTRAINT `fk_attestation` FOREIGN KEY (`id_attestation`) REFERENCES `attestation` (`id_attestation`),
  ADD CONSTRAINT `fk_p_vente` FOREIGN KEY (`num_police_valide`) REFERENCES `police_valide` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
