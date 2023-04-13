-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 avr. 2023 à 04:21
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `keyhouse`
--

-- --------------------------------------------------------

--
-- Structure de la table `clés`
--

CREATE TABLE `clés` (
  `id` int(10) NOT NULL,
  `idme` int(10) NOT NULL,
  `acquis` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `etage` varchar(255) NOT NULL,
  `cp` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `mandat` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `whokeys` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `clés`
--

INSERT INTO `clés` (`id`, `idme`, `acquis`, `adresse`, `etage`, `cp`, `ville`, `date`, `mandat`, `type`, `whokeys`) VALUES
(1, 0, 'Nokia', '14 rue du Samsung', '', '', '', '0000-00-00', 'Exclusif', 'En vente', 'Thibault'),
(4, 0, 'Vazia', '14 rue du Boulanger', '', '', '', '2023-04-01', 'Simple', 'Location', ''),
(5, 0, 'Vazia', '14 rue du Boulanger', '', '', '', '2023-04-01', 'Simple', 'Location', ''),
(6, 0, 'Vazia', '14 rue du Boulanger', '', '', '', '2023-04-28', 'Exclusif', 'Vente', ''),
(7, 0, 'Vazia', '14 rue du Boulanger', '', '', '', '2023-04-28', 'Exclusif', 'Vente', 'john'),
(8, 545, 'lulu', '14 rue du Boulanger', '', '', '', '2023-04-13', 'Simple', 'Vente', 'john'),
(9, 7554, 'lulu', '45', '45', '7852', 'Toulon', '2023-04-13', 'Simple', 'Vente', 'john'),
(10, 454, 'lulu', '14 rue du Boulanger', '78250', '778', 'paris', '2023-04-13', 'Exclusif', 'Vente', 'john');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `age` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `nom`, `prenom`, `age`) VALUES
(9, 'Amande', 'Luenzo', 45),
(10, 'Locatelli', 'Pavard', 78);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `login`, `password`) VALUES
(1, 'john', '1234');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `clés`
--
ALTER TABLE `clés`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `clés`
--
ALTER TABLE `clés`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
