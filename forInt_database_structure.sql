-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 03 oct. 2019 à 12:36
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
-- Base de données :  `forint`
--
CREATE DATABASE IF NOT EXISTS `forint` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `forint`;

-- --------------------------------------------------------

--
-- Structure de la table `annulation`
--

CREATE TABLE `annulation` (
  `id_annulation` int(10) NOT NULL,
  `id_police` varchar(16) CHARACTER SET utf8 NOT NULL,
  `code_intermediaire` int(10) NOT NULL,
  `motif_annulation` varchar(150) NOT NULL,
  `etat_annulation` varchar(20) CHARACTER SET utf8 NOT NULL,
  `date_annulation` datetime NOT NULL,
  `matricule_auteur` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `assure`
--

CREATE TABLE `assure` (
  `id_assure` varchar(16) NOT NULL,
  `nom_assure` varchar(45) DEFAULT NULL,
  `prenom_assure` varchar(45) DEFAULT NULL,
  `adresse_assure` varchar(45) DEFAULT NULL,
  `tel_assure` varchar(30) DEFAULT NULL,
  `email_assure` varchar(65) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `attestation`
--

CREATE TABLE `attestation` (
  `id_attestation` int(11) NOT NULL,
  `numero_attestation` varchar(10) NOT NULL,
  `id_type` int(10) NOT NULL,
  `id_vente` varchar(20) DEFAULT NULL,
  `intermediaire` int(10) DEFAULT NULL,
  `etat_actuel` enum('attribue','libre') NOT NULL,
  `etat_sortie` enum('restante','vendue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_vehicule`
--

CREATE TABLE `categorie_vehicule` (
  `id_cat` int(11) NOT NULL,
  `libelle_categorie` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

CREATE TABLE `commandes` (
  `id_commande` int(10) NOT NULL,
  `date_commande` date NOT NULL,
  `matricule_intermediaire` int(11) NOT NULL,
  `nombre_attestation_verte` int(255) DEFAULT NULL,
  `nombre_attestation_jaune` int(255) DEFAULT NULL,
  `nombre_attestation_cedeao` int(255) DEFAULT NULL,
  `etat_commande` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `conducteur_vehicule`
--

CREATE TABLE `conducteur_vehicule` (
  `id_cond` varchar(16) NOT NULL,
  `nom_conducteur` varchar(45) DEFAULT NULL,
  `prenom_conducteur` varchar(45) DEFAULT NULL,
  `annee_permis` varchar(45) DEFAULT NULL,
  `duree_conduite` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `contenir`
--

CREATE TABLE `contenir` (
  `id_contenir` varchar(16) NOT NULL,
  `lim_gant` varchar(25) DEFAULT NULL,
  `franchise` varchar(25) DEFAULT NULL,
  `prime_brute` varchar(25) DEFAULT NULL,
  `prime_prorata` varchar(25) DEFAULT NULL,
  `garantie_id_garantie` int(11) NOT NULL,
  `police_id_police` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `decompte_prime`
--

CREATE TABLE `decompte_prime` (
  `id_dp` varchar(16) NOT NULL,
  `taxe` int(11) DEFAULT NULL,
  `accessoire` int(11) DEFAULT NULL,
  `fond_garantie` int(11) DEFAULT NULL,
  `prime_nette` int(11) DEFAULT NULL,
  `prime_totale` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `garantie`
--

CREATE TABLE `garantie` (
  `id_garantie` int(11) NOT NULL,
  `libelle_garantie` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `intermediaire`
--

CREATE TABLE `intermediaire` (
  `matricule` int(11) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `email` varchar(55) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `actived` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `periode_garantie`
--

CREATE TABLE `periode_garantie` (
  `id_periode` varchar(16) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `heure_debut` time DEFAULT NULL,
  `heure_fin` time DEFAULT NULL,
  `duree` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `police`
--

CREATE TABLE `police` (
  `id_police` varchar(16) NOT NULL,
  `num_police` varchar(16) NOT NULL,
  `date_police` datetime NOT NULL,
  `numFacture` varchar(20) DEFAULT NULL,
  `attestation` varchar(150) DEFAULT NULL,
  `validation` tinyint(1) NOT NULL,
  `etat` varchar(10) DEFAULT NULL,
  `intermediaire_matricule` int(11) NOT NULL,
  `conducteur_vehicule_id_cond` varchar(16) DEFAULT NULL,
  `periode_garantie_id_periode` varchar(16) DEFAULT NULL,
  `vehicule_id_vehicule` varchar(16) NOT NULL,
  `decompte_prime_id_dp` varchar(16) NOT NULL,
  `red_maj_id_red_maj` varchar(16) NOT NULL,
  `assure_id_assure` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `red_maj`
--

CREATE TABLE `red_maj` (
  `id_red_maj` varchar(16) NOT NULL,
  `pourcentageBC` int(11) DEFAULT NULL,
  `bonus_rc` int(11) DEFAULT NULL,
  `pourcentageRC` int(11) DEFAULT NULL,
  `reduc_com` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `libelle_role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `schema_data`
--

CREATE TABLE `schema_data` (
  `id` int(11) NOT NULL,
  `codeformule` int(11) NOT NULL DEFAULT '1',
  `typecontrat` varchar(5) NOT NULL DEFAULT 'F',
  `naturecontrat` varchar(5) NOT NULL DEFAULT 'N',
  `codezone` varchar(5) NOT NULL DEFAULT '1',
  `qualite` varchar(5) NOT NULL DEFAULT '1',
  `codeville` varchar(5) NOT NULL DEFAULT '0',
  `codeprofession` int(11) NOT NULL DEFAULT '0',
  `codeactivité` varchar(5) NOT NULL DEFAULT '0',
  `typepiece` varchar(5) NOT NULL DEFAULT 'CIN',
  `numpiece` varchar(15) NOT NULL,
  `typepermi` varchar(5) NOT NULL,
  `numepermis` varchar(5) NOT NULL,
  `datedelivpermis` varchar(10) NOT NULL,
  `lieudelivpermis` varchar(25) NOT NULL,
  `codeusage` varchar(5) NOT NULL,
  `codecarrosserie` varchar(5) DEFAULT NULL,
  `datevali` date NOT NULL,
  `datesous` date NOT NULL,
  `datesais` date NOT NULL,
  `flagtrans` varchar(10) NOT NULL DEFAULT 'N',
  `id_police` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

CREATE TABLE `test` (
  `id` int(10) NOT NULL,
  `libelle` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_attestation`
--

CREATE TABLE `type_attestation` (
  `id_type` int(10) NOT NULL,
  `libelle` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id_vehicule` varchar(16) NOT NULL,
  `marque` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `immatriculation` varchar(12) DEFAULT NULL,
  `puissance` varchar(4) DEFAULT NULL,
  `energie` varchar(45) DEFAULT NULL,
  `charge_utile` varchar(45) DEFAULT NULL,
  `places` int(11) DEFAULT NULL,
  `genre` varchar(45) DEFAULT NULL,
  `chassis` varchar(45) DEFAULT NULL,
  `cylindre` varchar(25) DEFAULT NULL,
  `date_mec` date DEFAULT NULL,
  `valeur_neuve` varchar(120) DEFAULT NULL,
  `valeur_venale` varchar(120) DEFAULT NULL,
  `nom_chauffeur` varchar(45) DEFAULT NULL,
  `categorie_vehicule_id_cat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD PRIMARY KEY (`id_annulation`),
  ADD UNIQUE KEY `id_annulation_2` (`id_annulation`),
  ADD KEY `id_annulation` (`id_annulation`),
  ADD KEY `fk_police` (`id_police`),
  ADD KEY `fk_auteur` (`matricule_auteur`);

--
-- Index pour la table `assure`
--
ALTER TABLE `assure`
  ADD PRIMARY KEY (`id_assure`),
  ADD UNIQUE KEY `id_assure_UNIQUE` (`id_assure`);

--
-- Index pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD PRIMARY KEY (`id_attestation`),
  ADD KEY `id_type` (`id_type`),
  ADD KEY `intermediaire` (`intermediaire`);

--
-- Index pour la table `categorie_vehicule`
--
ALTER TABLE `categorie_vehicule`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `conducteur_vehicule`
--
ALTER TABLE `conducteur_vehicule`
  ADD PRIMARY KEY (`id_cond`),
  ADD UNIQUE KEY `id_cond_UNIQUE` (`id_cond`);

--
-- Index pour la table `contenir`
--
ALTER TABLE `contenir`
  ADD PRIMARY KEY (`id_contenir`),
  ADD UNIQUE KEY `id_contenir_UNIQUE` (`id_contenir`),
  ADD KEY `fk_contenir_garantie_idx` (`garantie_id_garantie`),
  ADD KEY `fk_contenir_police1_idx` (`police_id_police`);

--
-- Index pour la table `decompte_prime`
--
ALTER TABLE `decompte_prime`
  ADD PRIMARY KEY (`id_dp`),
  ADD UNIQUE KEY `id_dp_UNIQUE` (`id_dp`);

--
-- Index pour la table `garantie`
--
ALTER TABLE `garantie`
  ADD PRIMARY KEY (`id_garantie`);

--
-- Index pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD PRIMARY KEY (`matricule`),
  ADD UNIQUE KEY `matricule_UNIQUE` (`matricule`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `role` (`role`),
  ADD KEY `email_2` (`email`),
  ADD KEY `email_3` (`email`);

--
-- Index pour la table `periode_garantie`
--
ALTER TABLE `periode_garantie`
  ADD PRIMARY KEY (`id_periode`),
  ADD UNIQUE KEY `id_periode_UNIQUE` (`id_periode`);

--
-- Index pour la table `police`
--
ALTER TABLE `police`
  ADD PRIMARY KEY (`id_police`,`red_maj_id_red_maj`),
  ADD UNIQUE KEY `num_police_UNIQUE` (`num_police`),
  ADD UNIQUE KEY `id_police_UNIQUE` (`id_police`),
  ADD KEY `fk_police_intermediaire1_idx` (`intermediaire_matricule`),
  ADD KEY `fk_police_conducteur_vehicule1_idx` (`conducteur_vehicule_id_cond`),
  ADD KEY `fk_police_periode_garantie1_idx` (`periode_garantie_id_periode`),
  ADD KEY `fk_police_vehicule1_idx` (`vehicule_id_vehicule`),
  ADD KEY `fk_police_decompte_prime1_idx` (`decompte_prime_id_dp`),
  ADD KEY `fk_police_red_maj1_idx` (`red_maj_id_red_maj`),
  ADD KEY `fk_police_assure1_idx` (`assure_id_assure`);

--
-- Index pour la table `red_maj`
--
ALTER TABLE `red_maj`
  ADD PRIMARY KEY (`id_red_maj`),
  ADD UNIQUE KEY `id_red_maj_UNIQUE` (`id_red_maj`);

--
-- Index pour la table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`),
  ADD KEY `id_role` (`id_role`);

--
-- Index pour la table `schema_data`
--
ALTER TABLE `schema_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_police` (`id_police`);

--
-- Index pour la table `type_attestation`
--
ALTER TABLE `type_attestation`
  ADD PRIMARY KEY (`id_type`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id_vehicule`),
  ADD UNIQUE KEY `id_vehicule_UNIQUE` (`id_vehicule`),
  ADD KEY `fk_vehicule_categorie_vehicule1_idx` (`categorie_vehicule_id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annulation`
--
ALTER TABLE `annulation`
  MODIFY `id_annulation` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `attestation`
--
ALTER TABLE `attestation`
  MODIFY `id_attestation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categorie_vehicule`
--
ALTER TABLE `categorie_vehicule`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id_commande` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `garantie`
--
ALTER TABLE `garantie`
  MODIFY `id_garantie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `role`
--
ALTER TABLE `role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `schema_data`
--
ALTER TABLE `schema_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_attestation`
--
ALTER TABLE `type_attestation`
  MODIFY `id_type` int(10) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `annulation`
--
ALTER TABLE `annulation`
  ADD CONSTRAINT `fk_auteur` FOREIGN KEY (`matricule_auteur`) REFERENCES `intermediaire` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police` FOREIGN KEY (`id_police`) REFERENCES `police` (`id_police`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `attestation`
--
ALTER TABLE `attestation`
  ADD CONSTRAINT `fk_intermediaire` FOREIGN KEY (`intermediaire`) REFERENCES `intermediaire` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_type` FOREIGN KEY (`id_type`) REFERENCES `type_attestation` (`id_type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `intermediaire`
--
ALTER TABLE `intermediaire`
  ADD CONSTRAINT `fk_role_int` FOREIGN KEY (`role`) REFERENCES `role` (`id_role`);

--
-- Contraintes pour la table `police`
--
ALTER TABLE `police`
  ADD CONSTRAINT `fk_police_assure1` FOREIGN KEY (`assure_id_assure`) REFERENCES `assure` (`id_assure`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_conducteur_vehicule` FOREIGN KEY (`conducteur_vehicule_id_cond`) REFERENCES `conducteur_vehicule` (`id_cond`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_decompte_prime1` FOREIGN KEY (`decompte_prime_id_dp`) REFERENCES `decompte_prime` (`id_dp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_intermediaire1` FOREIGN KEY (`intermediaire_matricule`) REFERENCES `intermediaire` (`matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_periode_garantie1` FOREIGN KEY (`periode_garantie_id_periode`) REFERENCES `periode_garantie` (`id_periode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_red_maj1` FOREIGN KEY (`red_maj_id_red_maj`) REFERENCES `red_maj` (`id_red_maj`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_police_vehicule1` FOREIGN KEY (`vehicule_id_vehicule`) REFERENCES `vehicule` (`id_vehicule`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `schema_data`
--
ALTER TABLE `schema_data`
  ADD CONSTRAINT `schema_data_ibfk_1` FOREIGN KEY (`id_police`) REFERENCES `police` (`id_police`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD CONSTRAINT `fk_vehicule_categorie_vehicule` FOREIGN KEY (`categorie_vehicule_id_cat`) REFERENCES `categorie_vehicule` (`id_cat`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
