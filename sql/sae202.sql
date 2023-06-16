-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 05 juin 2023 à 16:40
-- Version du serveur : 10.3.29-MariaDB-0+deb10u1
-- Version de PHP : 8.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sae202`
--



--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id_reservation` int(11) NOT NULL,
  `id_trajet` int(11) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id_reservation`, `id_trajet`, `id_utilisateur`) VALUES
(1, 4, 8),
(2, 1, 9),
(3, 1, 10),
(4, 4, 9),
(5, 9, 8),
(6, 10, 10),
(7, 1, 7),
(8, 1, 6),
(9, 10, 8),
(10, 1, 9);

-- --------------------------------------------------------

--
-- Structure de la table `trajets`
--

CREATE TABLE `trajets` (
  `id_trajet` int(2) NOT NULL,
  `lieu_de_départ_trajet` text NOT NULL,
  `lieu_d'arrivé_trajet` text NOT NULL,
  `date_et_heure_de_départ_trajet` text NOT NULL,
  `durée_trajet` text NOT NULL,
  `nbr_place_dispo_trajet` int(2) NOT NULL,
  `id_utilisateur` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `trajets`
--

INSERT INTO `trajets` (`id_trajet`, `lieu_de_départ_trajet`, `lieu_d'arrivé_trajet`, `date_et_heure_de_départ_trajet`, `durée_trajet`, `nbr_place_dispo_trajet`, `id_utilisateur`) VALUES
(1, 'Troyes', 'Romilly', '2023-06-05 17:00:00', '2h30', 4, 1),
(2, 'Troyes', 'Bar sur Aube', '2023-06-06 18:00:00', '2h30', 3, 2),
(3, 'Troyes', 'Bar sur Aube', '2023-06-12 19:00:00', '2h30', 3, 2),
(4, 'Troyes', 'Romilly', '2023-06-06 16:00:00', '2h30', 2, 1),
(5, 'Troyes', 'Bar sur Aube', '2023-06-07 07:30:00', '2h30', 3, 2),
(6, 'Troyes', 'La Chapelle Saint Luc', '2023-06-05 17:00:00', '2h30', 4, 5),
(7, 'Bar sur Aube', 'Troyes', '2023-06-14 20:00:00', '2h30', 3, 2),
(8, 'Romilly', 'Troyes', '2023-06-13 15:00:00', '2h30', 2, 1),
(9, 'La Chapelle Saint Luc', 'Troyes', '2023-06-14 11:00:00', '2h30', 4, 5),
(10, 'Troyes', 'Romilly', '2023-06-21 20:00:00', '2h30', 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id_utilisateur` int(11) NOT NULL,
  `utilisateur` varchar(255) DEFAULT NULL,
  `adresse_utilisateur` varchar(200) NOT NULL,
  `ville_utilisateur` text NOT NULL,
  `code_postale_utilisateur` int(100) NOT NULL,
  `mail_utilisateur` text NOT NULL,
  `mdp_utilisateur` varchar(255) NOT NULL,
  `num_utilisateur` text NOT NULL,
  `pdp_utilisateur` varchar(100) NOT NULL,
  `note_utilisateur` int(100) NOT NULL,
  `nbr_avis_utilisateur` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id_utilisateur`, `utilisateur`, `adresse_utilisateur`, `ville_utilisateur`, `code_postale_utilisateur`, `mail_utilisateur`, `mdp_utilisateur`, `num_utilisateur`, `pdp_utilisateur`, `note_utilisateur`, `nbr_avis_utilisateur`) VALUES
(1, 'Bob Dylan', '12 Rue du Général de Gaulle', 'Troyes', 10000, 'bob.dylan@gmail.com', '', '+33 6 12 34 56 78', 'bob.jpg', 5, 5),
(2, 'rené Lataupe', '27 Rue des Bas Trévois', 'Troyes', 10000, 'rene.lataupe@gmail.com', '', '+33 6 98 76 54 32', 'rené.jpeg', 3, 2),
(3, 'Paul Ochon', '8 Avenue Marie Curie', 'Troyes', 10000, 'paul.ochon@gmail.com', '', '+33 6 23 45 67 89', 'Paul.jpeg', 2, 3),
(4, 'Sam Suffy', '56 Rue Georges Clemenceau', 'Troyes', 10000, 'sam.suffy@gmail.com', '', '+33 6 87 65 43 21', 'Sam.jpeg', 4, 9),
(5, 'Théo Point', '19 Rue de la Paix', 'Troyes', 10000, 'theo.point@gmail.com', '', '+33 6 54 76 98 12', 'Théo.jpeg', 5, 5),
(6, 'Bill Tag', '42 Rue Jules Guesde', 'Troyes', 10000, 'bill.tag@gmail.com', '', '+33 6 78 90 12 34', 'Bill.jpeg', 4, 7),
(7, 'Zack Blink', '3 Place Jean Jaurès', 'Troyes', 10000, 'zack.blink@gmail.com', '', '+33 6 43 21 98 76', 'Zack.jpeg', 5, 3),
(8, 'Zoe Bulga', '11 Rue Kléber', 'Troyes', 10000, 'zoe.bulga@gmail.com', '', '+33 6 56 78 90 12', 'Zoe.jpeg', 4, 4),
(9, 'Sandy patos', '34 Rue Raymond Poincaré', 'Troyes', 10000, 'sandy.patos@gmail.com', '', '+33 6 34 56 78 90', 'Sandy.jpeg', 4, 2),
(10, 'Polux Dupond', '7 Avenue Anatole France', 'Troyes', 10000, 'polux.dupond@gmail.com', '', '+33 6 21 43 65 87', 'Polux.jpeg', 3, 6),
(12, 'Mouad El Khalifi', '6 rue de la petite courtine', 'troyes', 10000, 'mouad@gmail.fr', '$2y$10$7lvQlMfHtLXjosFzVv3dVewEe7Tow3lNA2Nwe9KtCt5JA/T6M3oby', '+33758575883', 'mouad.jpg', 5, 20);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `fk_utilisateur` (`id_utilisateur`);

--
-- Index pour la table `trajets`
--
ALTER TABLE `trajets`
  ADD PRIMARY KEY (`id_trajet`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id_utilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `trajets`
--
ALTER TABLE `trajets`
  MODIFY `id_trajet` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
