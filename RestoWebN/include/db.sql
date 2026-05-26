-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : jeu. 07 mai 2026 à 09:21
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `test_appresto`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `Id_commande` int(11) NOT NULL,
  `id_etat` int(11) DEFAULT NULL,
  `_date` datetime DEFAULT NULL,
  `total_commande` decimal(10,2) DEFAULT NULL,
  `type_conso` tinyint(4) DEFAULT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`Id_commande`, `id_etat`, `_date`, `total_commande`, `type_conso`, `Id_user`) VALUES
(1, 1, '2026-04-10 10:15:00', 919.98, 1, 1),
(2, 2, '2026-04-11 14:30:00', 99.98, 2, 2),
(3, 1, '2026-04-12 09:45:00', 149.99, 1, 3),
(4, 3, '2026-04-13 16:20:00', 199.97, 2, 1),
(5, 2, '2026-04-14 11:05:00', 59.99, 1, 4),
(6, 1, '2026-04-15 18:40:00', 109.99, 2, 5);

-- --------------------------------------------------------

--
-- Structure de la table `ligne_commande`
--

CREATE TABLE `ligne_commande` (
  `Id_ligne_commande` int(11) NOT NULL,
  `qte` int(11) DEFAULT NULL,
  `total_ligne_ht` decimal(10,2) DEFAULT NULL,
  `Id_produit` int(11) NOT NULL,
  `Id_commande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `ligne_commande`
--

INSERT INTO `ligne_commande` (`Id_ligne_commande`, `qte`, `total_ligne_ht`, `Id_produit`, `Id_commande`) VALUES
(1, 1, 899.99, 1, 1),
(2, 1, 19.99, 2, 1),
(3, 1, 79.99, 3, 2),
(4, 1, 19.99, 2, 2),
(5, 1, 149.99, 4, 3),
(6, 2, 119.98, 5, 4),
(7, 1, 79.99, 3, 4),
(8, 1, 59.99, 5, 5),
(9, 1, 109.99, 7, 6);

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `Id_produit` int(11) NOT NULL,
  `libelle` varchar(255) DEFAULT NULL,
  `prix_ht` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`Id_produit`, `libelle`, `prix_ht`) VALUES
(1, 'Ordinateur portable', 899.99),
(2, 'Souris sans fil', 19.99),
(3, 'Clavier mécanique', 79.99),
(4, 'Écran 24 pouces', 149.99),
(5, 'Casque audio', 59.99),
(6, 'Webcam HD', 39.99),
(7, 'Disque SSD 1To', 109.99);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `Id_user` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`Id_user`, `login`, `password`, `email`) VALUES
(1, 'jdupont', 'pass123', 'jdupont@email.com'),
(2, 'mmartin', 'azerty', 'mmartin@email.com'),
(3, 'lbernard', 'secure1', 'lbernard@email.com'),
(4, 'tpetit', 'pwd456', 'tpetit@email.com'),
(5, 'cdurand', 'test789', 'cdurand@email.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`Id_commande`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Index pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD PRIMARY KEY (`Id_ligne_commande`),
  ADD KEY `Id_produit` (`Id_produit`),
  ADD KEY `Id_commande` (`Id_commande`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`Id_produit`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `Id_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  MODIFY `Id_ligne_commande` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `utilisateur` (`Id_user`);

--
-- Contraintes pour la table `ligne_commande`
--
ALTER TABLE `ligne_commande`
  ADD CONSTRAINT `ligne_commande_ibfk_1` FOREIGN KEY (`Id_produit`) REFERENCES `produit` (`Id_produit`),
  ADD CONSTRAINT `ligne_commande_ibfk_2` FOREIGN KEY (`Id_commande`) REFERENCES `commande` (`Id_commande`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
