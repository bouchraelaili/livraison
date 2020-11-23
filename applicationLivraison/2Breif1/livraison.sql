-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 nov. 2020 à 14:52
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livraison`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`email`, `pass`) VALUES
('admin@admin.com', 'admin'),
('admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `repas`
--

CREATE TABLE `repas` (
  `id` int(100) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `prix` varchar(100) NOT NULL,
  `descp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `repas`
--

INSERT INTO `repas` (`id`, `nom`, `image`, `prix`, `descp`) VALUES
(7, 'Plat2', 'téléchargement (1).jfif', '20', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire '),
(8, 'Plat3', 'téléchargement (2).jfif', '20', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire '),
(9, 'plat4', 'téléchargement (3).jfif', '20', 'Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire '),
(10, 'Illo tempore obcaec', 'téléchargement (6).jfif', 'Fugit rerum volupta', 'Id dolor harum reici');

-- --------------------------------------------------------

--
-- Structure de la table `repasjr`
--

CREATE TABLE `repasjr` (
  `id` int(11) NOT NULL,
  `idrepas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `tel` int(100) NOT NULL,
  `adresse` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `repas`
--
ALTER TABLE `repas`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `repasjr`
--
ALTER TABLE `repasjr`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`idrepas`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `repas`
--
ALTER TABLE `repas`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `repasjr`
--
ALTER TABLE `repasjr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `repasjr`
--
ALTER TABLE `repasjr`
  ADD CONSTRAINT `test` FOREIGN KEY (`idrepas`) REFERENCES `repas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
