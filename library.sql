-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 30 avr. 2025 à 08:41
-- Version du serveur : 8.4.3
-- Version de PHP : 8.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `library`
--

-- --------------------------------------------------------

--
-- Structure de la table `book`
--

CREATE TABLE `book` (
  `idBook` int NOT NULL,
  `title` varchar(75) NOT NULL,
  `author` varchar(75) NOT NULL,
  `date_publication` date NOT NULL,
  `category_idcategory` int NOT NULL,
  `disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `book`
--

INSERT INTO `book` (`idBook`, `title`, `author`, `date_publication`, `category_idcategory`, `disponible`) VALUES
(1, 'Let the Sky Fall', 'Shannon Messenger', '2013-03-05', 1, 1),
(2, 'Powerless', 'Lauren Roberts', '2023-01-31', 2, 0),
(3, 'Lights Out', 'Jenni Fletcher', '2024-10-31', 2, 0),
(4, 'Keeper of Enchanted Rooms', 'Charlie N. Holmberg', '2022-11-15', 1, 0),
(5, '1984', 'George Orwell', '1949-06-08', 1, 0),
(6, 'The Great Gatsby', 'F. Scott Fitzgerald', '1925-02-15', 1, 1),
(7, 'Harry Potter', 'J.K. Rowling', '1997-06-26', 1, 1),
(20, 'Fearless', 'Lauren Roberts', '2025-04-01', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `idcategory` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `description` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`idcategory`, `name`, `description`) VALUES
(1, 'Fiction', 'Faits non réels'),
(2, 'Romance', 'Oeuvre centré sur le développement d\'une histoire d\'amour');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `idUser` int NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`idUser`, `email`, `password`) VALUES
(1, 'sarah.oldani@edu.devinci.fr', '$2y$10$Vxr.RCKqM7.gz7Iy3SOk4eHjXs4QZAIYBuBdgI7BuEGZnH.fwmBDy'),
(2, 'sarah.oldani@edu.devinci.fr', '$2y$10$cK1XPW5QOpl.VgaeCo7bQ.8GMuy3BbcgWHfSH2gfLqYMQXw5x2DQe'),
(3, 'sarah.oldani1003@gmail.com', '$2y$10$b2ohhPOYq66iQRCZMLH0h.xlxV4WYtZ4yvraQ7IB4Iuf5eHnoNzYq');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`idBook`),
  ADD KEY `fk_book_category_idx` (`category_idcategory`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `book`
--
ALTER TABLE `book`
  MODIFY `idBook` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `fk_book_category` FOREIGN KEY (`category_idcategory`) REFERENCES `category` (`idcategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
