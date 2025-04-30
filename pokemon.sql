-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 30 avr. 2025 à 08:40
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
-- Base de données : `pokemon`
--

-- --------------------------------------------------------

--
-- Structure de la table `cartes`
--

CREATE TABLE `cartes` (
  `id` int NOT NULL,
  `name` varchar(75) NOT NULL,
  `image` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `attackName1` varchar(200) NOT NULL,
  `attackEnergy1` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `damage1` varchar(10) NOT NULL,
  `attackDesc1` varchar(200) NOT NULL,
  `attackName2` varchar(75) NOT NULL,
  `attackEnergy2` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `damage2` varchar(10) NOT NULL,
  `attackDesc2` varchar(255) NOT NULL,
  `weakness` varchar(75) NOT NULL,
  `description` varchar(200) NOT NULL,
  `pokedexNb` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `cartes`
--

INSERT INTO `cartes` (`id`, `name`, `image`, `type`, `attackName1`, `attackEnergy1`, `damage1`, `attackDesc1`, `attackName2`, `attackEnergy2`, `damage2`, `attackDesc2`, `weakness`, `description`, `pokedexNb`) VALUES
(1, 'bulbasaur', 'bulbasaur', 'plant', 'Shake Vine', 'plant', '', 'The Defending Pokemon is now Asleep', 'Tackle', 'basic', '10', '', 'fire', 'There is a plant seed on its back from the day\r\nthis Pokemon is born. The seed slowly grows larger.', '001/151'),
(2, 'charmander', 'charmander', 'fire', 'Collect', 'fire', '', 'Draw a card', 'Flare', 'fire', '30', '', 'water', 'It has a preference for hot things. When it rains, steam is said to spout from the tip of his tail.', '004/151'),
(3, 'squirtle', 'squirtle', 'water', 'Bubble', 'water', '10', 'Flip a coin. If heads, the Defending Pokemon is now Paralyzed', 'Skull Bash', 'water', '20', '', 'elektrik', 'When it retreats its long neck into its shell, it squirts out water with vigorous force.', '007/151'),
(4, 'caterpie', 'caterpie', 'plant', 'Flock', 'basic', '', 'Search your deck for a Caterpie and put it onto your Bench. Then, shuffle your deck.', 'Bug Bite', 'plant', '10', '', 'fire', 'Its short feet are tipped with suction pads that enable it to tirelessly climb slopes and walls.', '010/151'),
(5, 'pikachu', 'pikachu', 'elektrik', 'Growl', 'basic', '', 'During your opponent\'s next turn, the Defending Pokemon\'s attacks do 20 less damage', 'Pika Bolt', 'elektrik', '30', '', 'fight', 'When it is angered, it immediately discharges the energy stored in the pouches in its cheeks', '025/151'),
(6, 'vulpix', 'vulpix', 'fire', 'Take Down', 'fire', '30', 'This Pokemon also does 10 Damage to itself', 'Live Coal', 'fire', '40', '', 'water', 'As its body grows larger, its six warm tails become more beautiful, with a more luxurious coat of fur.', '037/151'),
(7, 'psyduck', 'psyduck', 'water', 'Headache', 'basic', '10', 'Your opponent can\'t use any Supporter cards from their hand during their next turn.', 'Stampede', 'basic', '20', '', 'elektrik', 'Although possessed of great mental powers, it doesn\'t know how to use them.', '054/151'),
(8, 'krabby', 'krabby', 'water', 'Aqua Shower', 'water', '', 'This attack does 10 Damage to each of your opponent\'s Pokemon', 'Vice Grip', 'water', '20', '', 'plant', 'If it senses danger approaching, it cloaks itself with bubbles from it\'s mouth so it will look bigger.', '098/151'),
(9, 'hitmonlee', 'hitmonlee', 'fight', 'Stretch Kick', 'fight', '', 'This attack does 30 damage to 1 of your opponent\'s benched pokemon', 'Spiral Kick', 'fight', '30', '', 'psy', 'The legs freely contract and stretch. The stretchy legs allow it to hot a distant foe with a rising kick.', '106/151'),
(10, 'jynx', 'jynx', 'water', 'Double Draw', 'basic', '', 'Draw 2 cards', 'Dazzle Dance', 'psy', '30', 'Your opponent\'s Active Pokemon is now confused', 'psy', 'It wiggles its hips as it walks. It can cause people to dance in union with it.', '124/151'),
(11, 'eevee', 'eevee', 'basic', 'Curiosity', 'basic', '', 'Your opponent reveals their hand', 'Spin Tackle', 'basic', '30', 'Flip a coin. It tails, this Pokemon does 10 damage to itself', 'fight', 'The question of why only Eevee has such unstable genes has still not been solved', '133/151'),
(16, 'dratini', NULL, 'dragon', 'Beat', 'water', '', 'Draw 2 cards', 'Draconic Whip', 'water', '40', 'Your opponent\'s Active Pokemon is now Confused', 'basic', 'It sheds many layers of skin as it grows larger. During this process, it is protected by a rapid waterfall.', '147/151');

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `name` varchar(45) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`name`, `img`) VALUES
('bulbasaur', 'img/pokemon/bulbasaur.png'),
('caterpie', 'img/pokemon/caterpie.png'),
('charmander', 'img/pokemon/charmander.png'),
('dratini', 'img/pokemon/dratini.png'),
('eevee', 'img/pokemon/eevee.png'),
('hitmonlee', 'img/pokemon/hitmonlee.png'),
('jynx', 'img/pokemon/jynx.png'),
('krabby', 'img/pokemon/krabby.png'),
('pikachu', 'img/pokemon/pikachu.png'),
('psyduck', 'img/pokemon/psyduck.png'),
('squirtle', 'img/pokemon/squirtle.png'),
('vulpix', 'img/pokemon/vulpix.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `name` varchar(75) NOT NULL COMMENT 'nom',
  `firstName` varchar(75) NOT NULL COMMENT 'prénom',
  `pseudo` varchar(75) NOT NULL,
  `mail` varchar(75) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstName`, `pseudo`, `mail`, `password`) VALUES
(1, 'Oldani', 'Sarah', 'saele4', 'sarah.oldani1003@gmail.com', '$2y$10$xqPe8XPbEzuY5cHm4iT.AeJlSkO7B7.3aOGjPQI8XGt8L5kOxyjyS');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cartes`
--
ALTER TABLE `cartes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `FK_CartesImage` (`image`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`name`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cartes`
--
ALTER TABLE `cartes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cartes`
--
ALTER TABLE `cartes`
  ADD CONSTRAINT `FK_CartesImage` FOREIGN KEY (`image`) REFERENCES `image` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
