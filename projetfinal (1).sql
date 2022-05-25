-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 31 mars 2022 à 11:34
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `projetfinal`
--

-- --------------------------------------------------------

--
-- Structure de la table `console`
--

DROP TABLE IF EXISTS `console`;
CREATE TABLE IF NOT EXISTS `console` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `console`
--

INSERT INTO `console` (`id`, `nom`, `prix`) VALUES
(1, 'Xbox One', 200),
(2, 'Xbox Series X', 500),
(3, 'Playstation 4', 200),
(4, 'Playstation 5', 500),
(5, 'Switch', 250);

-- --------------------------------------------------------

--
-- Structure de la table `jeu`
--

DROP TABLE IF EXISTS `jeu`;
CREATE TABLE IF NOT EXISTS `jeu` (
  `nom` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `editeur` varchar(50) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `prix` int(11) NOT NULL,
  `id_console` int(11) DEFAULT NULL,
  PRIMARY KEY (`nom`),
  KEY `id` (`id`),
  KEY `id_console` (`id_console`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `jeu`
--

INSERT INTO `jeu` (`nom`, `genre`, `editeur`, `id`, `image`, `prix`, `id_console`) VALUES
('Animal Crossing : New Horizons', 'Aventure Gestion Sandbox', 'Nintendo', 20, 'https://livekaarten.be/pi/animal-crossing--new-horizons-nintendo-switch-49630.png', 50, 5),
('Assassin\'s Creed Valhalla', 'Aventure Action', 'Ubisoft', 39, 'https://ae01.alicdn.com/kf/H5efa1bc2f6c44d82974568b6a71f3e32b/Assassin-Creed-Valhalla-Xbox-one.jpg_Q90.jpg_.webp', 50, 1),
('Battlefield 2042', 'FPS Aventure Action', 'Electronic Arts', 52, 'https://img.g2a.com/323x433/1x1x0/battlefield-2042-ultimate-edition-xbox-series-x-s-xbox-live-key-united-states/08ab74b757574147bbb4f86b', 50, 2),
('Call of Duty : Vanguard', 'FPS Action', 'Activision', 55, 'https://cdn-products.eneba.com/resized-products/21KKFoLi3i6VSxfjw0bMxgP3CXKHibj4eRo_1OSWuiY_350x200_1x-0.jpeg', 50, 2),
('Death Stranding', 'Action', 'Kojima Productions', 8, 'https://d3fa68hw0m2vcc.cloudfront.net/aec/223199058.jpeg', 40, 3),
('DOOM Eternal', 'FPS Shooter', 'Bethesda Softworks', 47, 'https://s1.gaming-cdn.com/images/products/4209/orig/doom-eternal-xbox-one-xbox-one-jeu-microsoft-store-cover.jpg', 50, 1),
('Far Cry 6', 'Open World FPS', 'Ubisoft', 53, 'https://www.micromania.fr/dw/image/v2/BCRB_PRD/on/demandware.static/-/Sites-masterCatalog_Micromania/default/dw41ea12c6/images/high-res/106106.jpg?sw=760&sh=760&sm=fit', 50, 2),
('FIFA 22', 'Sport', 'Electronic Arts', 11, 'https://img.leboncoin.fr/api/v1/lbcpb1/images/b4/fe/07/b4fe07f1c58c9a571e2c6ee0acf6c96094218949.jpg?rule=ad-image', 50, 4),
('Forza Horizon 5', 'Course', 'Playground Games', 51, 'https://cdn.cdkeys.com/700x700/media/catalog/product/f/o/forza_horizon_5_xbox_one_xbox_series_x_s_uk_1__1_1_1.jpg', 50, 2),
('God of War', 'Beat\'em All', 'Sony Computer Entertainment', 10, 'https://www.gamingdragons.com/images/game_img/gow4_ps4.jpg', 40, 3),
('Hades', 'Action Beat\'em All', 'Supergiant Games', 36, 'https://m.media-amazon.com/images/I/615yJ08-sfS._AC_SX385_.jpg', 25, 1),
('Halo Infinite', 'FPS', 'Xbox Game Studios', 54, 'https://i.jeuxactus.com/datas/jeux/h/a/halo-infinite/xl/halo-infinite-jaquette-61adae717eef8.jpg', 50, 2),
('Kena : Bridge of Spirits', 'Aventure Action', 'Ember Lab', 14, 'https://m.media-amazon.com/images/I/81nPAiuZNpL._AC_SX425_.jpg', 50, 4),
('Les Gardiens de la Galaxie', 'Action Aventure', 'Square Enix', 12, 'https://cdn-prod.scalefast.com/public/assets/user/1614900/image/1c59b6f192341dc8e6d7054b64efc9e6.jpg', 50, 4),
('Mario Party Superstars', 'Party-Game', 'Nintendo', 17, 'https://m.media-amazon.com/images/I/81d4weAdkOS._AC_SY500_.jpg', 50, 5),
('Metroid Dread', 'Tir Aventure Action', 'Nintendo', 19, 'https://static.fnac-static.com/multimedia/Images/FR/NR/a2/53/c7/13063074/1505-1/tsp20210616181324/Metroid-Dread-Nintendo-Switch.jpg', 50, 5),
('Mortal Kombat 11 Ultimate', 'Combat', 'NetherRealm Studios', 41, 'https://s1.gaming-cdn.com/images/products/8154/orig/mortal-kombat-11-ultimate-xbox-one-ultimate-edition-xbox-one-jeu-microsoft-store-cover.jpg', 50, 1),
('NBA 2K22', 'Sport', '2K studio', 44, 'https://static.fnac-static.com/multimedia/Images/FR/NR/dd/b1/d0/13677021/1505-1/tsp20210716113655/NBA-2K22-Xbox-One.jpg', 50, 1),
('Pokemon Diamant Etincelant', 'RPG', 'Nintendo', 16, 'https://www.obs.no/globalassets/productimages/634503_45496428143_1.jpg?ref=8C8FD7980A', 50, 5),
('Ratchet & Clank : Rift Apart', 'Action Plate-Forme Aventure', 'Sony Interactive Entertainment', 15, 'https://m.media-amazon.com/images/I/71sR60hYpbS._AC_SX425_.jpg', 50, 4),
('Red Dead Redemption II', 'TPS', 'Rockstar Games', 7, 'https://m.media-amazon.com/images/I/91C8piUiI0L._AC_SL1500_.jpg', 40, 3),
('Riders Republic', 'Compilation Sport', 'Ubisoft', 13, 'https://m.media-amazon.com/images/I/81j1xWrHaqS._AC_SX385_.jpg', 50, 4),
('Shin Megami Tensei V', 'RPG', 'Altus', 18, 'https://static.fnac-static.com/multimedia/Images/FR/NR/a7/53/c7/13063079/1505-1/tsp20210616181324/Shin-Megami-Tensei-V-Nintendo-Switch.jpg', 50, 5),
('The Last of Us Part II', 'Action Infiltration Survival-Horror', 'Naughty Dog', 9, 'https://cdn-products.eneba.com/resized-products/5uVkB-8_9TOGEdLBgTSzh6Lh3zZfdKsmJv9XN786gnA_350x200_1x-0.jpeg', 40, 3),
('Valkyria Chronicles 4', 'Aventure', 'Sega', 6, 'https://m.media-amazon.com/images/I/71MD7iKt+aL._AC_SX425_.jpg', 40, 3);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `datenaissance` date NOT NULL,
  `email` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `jeu`
--
ALTER TABLE `jeu`
  ADD CONSTRAINT `jeu_ibfk_1` FOREIGN KEY (`id_console`) REFERENCES `console` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
