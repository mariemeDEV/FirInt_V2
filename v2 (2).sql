-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 24 déc. 2019 à 18:02
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
  `intermediaire` int(10) NOT NULL
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
  `id_etat` int(11) NOT NULL,
  `libelle_etat` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE `garantie` (
  `id_garantie` int(10) NOT NULL,
  `code_garantie` varchar(10) NOT NULL,
  `libelle_garanrie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `garantie`
--

INSERT INTO `garantie` (`id_garantie`, `code_garantie`, `libelle_garanrie`) VALUES
(1, 'DR', 'Defense et Recours'),
(2, 'INC', 'Icendie'),
(3, 'VOL', 'Vol'),
(4, 'VHR', 'Vehicule de Remplacement'),
(5, 'TCM', 'Tierce Complete'),
(6, 'TCL', 'Tierce Cllision'),
(7, 'BDG', 'Bris de Glace'),
(8, 'VAC', 'Vol Accessoires'),
(9, 'AVR', 'Avance Sur Recours'),
(10, 'AVA', 'Acte de Vandalisme'),
(11, 'IPT', 'Individuelle Personnes Transportees'),
(12, 'ERC', 'Carte CEDEAO'),
(13, 'PLA', 'Assistance Auto Avantage'),
(14, 'PLC', 'Assistance Auto Confort'),
(15, 'PLL', 'Assistance Auto Liberte'),
(16, 'TAG', 'Tierce Agree');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `code_genre` int(11) NOT NULL,
  `libelle_genre` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `intermediaire`
--

CREATE TABLE `intermediaire` (
  `id` int(10) NOT NULL,
  `code_intermediaire` int(10) NOT NULL,
  `id_user` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `marque`
--

CREATE TABLE `marque` (
  `code_marque` int(11) NOT NULL,
  `libelle_marque` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `police_valide`
--

CREATE TABLE `police_valide` (
  `numpolice` varchar(255) NOT NULL,
  `codeformule` varchar(255) DEFAULT NULL,
  `id_vente` varchar(255) DEFAULT NULL,
  `intermediaire` int(10) NOT NULL,
  `codecategorie` int(10) NOT NULL,
  `naturecontrat` varchar(255) DEFAULT NULL,
  `codezone` tinyint(1) DEFAULT NULL,
  `dateeffet` date NOT NULL,
  `dateecheance` date NOT NULL,
  `qualite` varchar(255) DEFAULT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `codeville` int(11) DEFAULT NULL,
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
  `codemarque` int(10) DEFAULT NULL,
  `codeserie` varchar(255) DEFAULT NULL,
  `codegenre` int(10) DEFAULT NULL,
  `codeusage` varchar(255) DEFAULT NULL,
  `codeenergie` int(10) NOT NULL,
  `nombreplace` varchar(255) DEFAULT NULL,
  `cylindre` varchar(255) DEFAULT NULL,
  `valeurneuve` float DEFAULT NULL,
  `valeurvenale` float DEFAULT NULL,
  `puissancefiscale` int(11) NOT NULL,
  `codecarrosserie` varchar(255) DEFAULT NULL,
  `datemisecirculation` varchar(255) DEFAULT NULL,
  `montant_prime` float NOT NULL,
  `montant_accessoire` float NOT NULL,
  `montant_taxe` float NOT NULL,
  `montant_fga` float NOT NULL,
  `montant_ttc` float NOT NULL,
  `datevali` date DEFAULT NULL,
  `datesous` date DEFAULT NULL,
  `etat` int(11) DEFAULT NULL,
  `avenant` int(10) NOT NULL,
  `type_avenant` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `police_valide_garantie`
--

CREATE TABLE `police_valide_garantie` (
  `numpolice` varchar(255) DEFAULT NULL,
  `codegarantie` int(11) DEFAULT NULL,
  `montant_prime_garantie` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle_role` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_attestation`
--

CREATE TABLE `type_attestation` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_avenant`
--

CREATE TABLE `type_avenant` (
  `id_type` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Telephone` varchar(255) DEFAULT NULL,
  `role_user` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `vente_attestation`
--

CREATE TABLE `vente_attestation` (
  `id_vente` varchar(255) NOT NULL,
  `id_attestation` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id_ville` int(11) NOT NULL,
  `libelle_ville` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD PRIMARY KEY (`id_annulation`),
  ADD KEY `fk_police` (`numpolice`),
  ADD KEY `code_intermediaire` (`code_intermediaire`);

--
-- Index pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD PRIMARY KEY (`id_attestation`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `intermediaire` (`intermediaire`);

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
  ADD PRIMARY KEY (`id_etat`);

--
-- Index pour la table `garantie`
--
ALTER TABLE `garantie`
  ADD UNIQUE KEY `id_garantie` (`id_garantie`),
  ADD UNIQUE KEY `code_garantie_2` (`code_garantie`),
  ADD KEY `code_garantie` (`id_garantie`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`code_genre`);

--
-- Index pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code_intermediaire` (`code_intermediaire`),
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
  ADD PRIMARY KEY (`numpolice`),
  ADD KEY `id_vente` (`id_vente`),
  ADD KEY `codeintermediaire` (`intermediaire`),
  ADD KEY `codecategorie` (`codecategorie`),
  ADD KEY `codemarque` (`codemarque`),
  ADD KEY `codegenre` (`codegenre`),
  ADD KEY `codeenergie` (`codeenergie`),
  ADD KEY `codeville` (`codeville`),
  ADD KEY `type_avenant` (`type_avenant`);

--
-- Index pour la table `police_valide_garantie`
--
ALTER TABLE `police_valide_garantie`
  ADD UNIQUE KEY `codegarantie` (`codegarantie`),
  ADD KEY `numpolice` (`numpolice`);

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
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `role_user` (`role_user`);

--
-- Index pour la table `vente_attestation`
--
ALTER TABLE `vente_attestation`
  ADD PRIMARY KEY (`id_vente`),
  ADD KEY `id_attestation` (`id_attestation`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id_ville`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD CONSTRAINT `fk_police` FOREIGN KEY (`numpolice`) REFERENCES `police_valide` (`numpolice`);

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `fk_int` FOREIGN KEY (`intermediaire`) REFERENCES `intermediaire` (`id`),
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`id_type`) REFERENCES `type_attestation` (`id_type`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `fk_inter` FOREIGN KEY (`id_intermediaire`) REFERENCES `intermediaire` (`id`);

--
-- Contraintes pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `utilisateur` (`id_user`);

--
-- Contraintes pour la table `police_valide`
--
ALTER TABLE `police_valide`
  ADD CONSTRAINT `fk_categorie` FOREIGN KEY (`codecategorie`) REFERENCES `categorie` (`id_categorie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_energie` FOREIGN KEY (`codeenergie`) REFERENCES `energie` (`code_energie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_genre` FOREIGN KEY (`codegenre`) REFERENCES `genre` (`code_genre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_intermediaire` FOREIGN KEY (`intermediaire`) REFERENCES `intermediaire` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marque` FOREIGN KEY (`codemarque`) REFERENCES `marque` (`code_marque`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_type_avenant` FOREIGN KEY (`type_avenant`) REFERENCES `type_avenant` (`id_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vente` FOREIGN KEY (`id_vente`) REFERENCES `vente_attestation` (`id_vente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ville` FOREIGN KEY (`codeville`) REFERENCES `ville` (`id_ville`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `police_valide_garantie`
--
ALTER TABLE `police_valide_garantie`
  ADD CONSTRAINT `fk_gant` FOREIGN KEY (`codegarantie`) REFERENCES `garantie` (`id_garantie`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `police_valide_garantie_ibfk_1` FOREIGN KEY (`numpolice`) REFERENCES `police_valide` (`numpolice`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `fk_role` FOREIGN KEY (`role_user`) REFERENCES `role` (`id_role`);

--
-- Contraintes pour la table `vente_attestation`
--
ALTER TABLE `vente_attestation`
  ADD CONSTRAINT `fk_attestation` FOREIGN KEY (`id_attestation`) REFERENCES `attestation` (`id_attestation`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
