-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 02 juin 2023 à 04:24
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecommerce_tey`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `Id_prod` int(11) NOT NULL,
  `Nom` varchar(100) NOT NULL,
  `Prix` float NOT NULL,
  `Description` text NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Date` datetime NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`Id_prod`, `Nom`, `Prix`, `Description`, `Quantite`, `Date`, `Image`) VALUES
(2, 'Rouge', 50, 'Tres belle robe', 2, '2023-04-13 18:00:11', 'rouge.jpg'),
(3, 'Pink', 40.4, 'C\'est waw', 1, '2023-04-13 18:01:29', 'pink.jpg'),
(4, 'Black', 40.5, 'La plus ravisante', 3, '2023-04-13 19:01:35', 'black.jpg'),
(5, 'Love', 100, 'l\'amour est belle', 3, '2023-04-13 19:03:49', 'love.jpg'),
(6, 'White_Girl', 90, 'Jolie chirt', 7, '2023-04-13 19:03:49', 'white.jpg'),
(7, 'Teyou', 120, 'Tres spandide', 2, '2023-04-13 19:06:20', 'Tey1.jpg'),
(8, 'White_pink', 23, 'Cette robe rose donne des frissons', 2, '2023-04-13 19:06:20', 'White_pink.jpg'),
(9, 'Robe back', 110, 'Le commentaire d\'Hatsh est très complet alors je n\'ai pas grand chose à ajouter.', 4, '2023-04-14 05:01:52', 'Robe_back.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `Id_user` int(10) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Email` varchar(300) NOT NULL,
  `Mode_passe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`Id_user`, `Nom`, `Email`, `Mode_passe`) VALUES
(10, 'Billy', 'billy@gmail.com', 'billymail'),
(12, 'Lalue', 'zerthyytresz@gmail.com', '1234543234567'),
(13, 'Djina', 'djina@gmail.com', 'djina'),
(14, 'Abduelson Lyvert', 'abdueljhon@gmail.com', '123456');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`Id_prod`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `Id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `Id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
