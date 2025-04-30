-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 30 avr. 2025 à 13:30
-- Version du serveur : 8.3.0
-- Version de PHP : 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `num_article` int NOT NULL AUTO_INCREMENT,
  `nom_article` varchar(100) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `description` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `chemin_img` varchar(300) NOT NULL,
  `num_cat` int NOT NULL,
  PRIMARY KEY (`num_article`),
  KEY `num_cat` (`num_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`num_article`, `nom_article`, `prix`, `description`, `chemin_img`, `num_cat`) VALUES
(1, 'Pilao au poulet', 10, 'Riz basmati - Poulet - Oignons - Tomates - Ail, gingembre\r\nÉpices : cardamome, cannelle, cumin, curcuma, clous de girofle - Huile ou beurre - Bouillon de poulet - Sel et poivre', 'https://img.cuisineaz.com/660x660/2021/07/05/i179558-23-pilao.jpeg', 1),
(4, 'Poulet en sauce accompagné de mkatra foutra', 15, 'Poulet en sauce : Poulet - Oignons - Tomates - Ail, gingembre - Huile - Épices : curcuma, poivre, sel\r\nMkatra foutra (galettes de riz) : Farine de riz - Levure - Eau - Sel', 'https://recettes.de/images/blogs/nanapiha-cuisine/boeuf-aux-oignons.640x480.jpg', 1),
(5, 'Poulet en sauce accompagné de couscouma', 13, 'Poulet en sauce: Poulet - Oignons - Tomates - Ail, gingembre - Huile;\r\nÉpices : curcuma, poivre, sel;\r\nCouscouma (galettes de maïs) : Farine de maïs - Eau - Levure - Sel\r\n', 'https://local-fr-public.s3.eu-west-3.amazonaws.com/prod/webtool/userfiles/34647/Rive-Gauche-Restaurant-comorien-%C3%A0-Marseille-5.jpg', 1),
(6, 'Riz au madaba', 10, 'Riz - Feuilles de manioc écrasées (madaba) - Lait de coco - Ail, oignons;\r\nÉpices : Sel et poivre', 'https://assets.afcdn.com/recipe/20150901/23658_w1024h768c1cx400cy265.webp', 1),
(7, 'Samboussa', 1, 'Pâte à samboussa - Farce : viande hachée (bœuf), oignons, ail;\r\nÉpices : piment, poivre, sel\r\n', 'https://cuisinedescomores.com/wp-content/uploads/2021/07/Sambusa-min.jpg', 3),
(8, 'Donace (beignets sucrée)', 0.5, 'Farine - Sucre - Levure - Œufs - Lait', 'https://i.ytimg.com/vi/FY5puQbJWe0/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLBd-cmV4Ic3cNnrYTRa6aZTFauWPQ', 2),
(9, 'Goula-goula', 0.5, 'Farine - Sucre - Levure - Eau ou lait', 'https://i.ytimg.com/vi/Bfs4NdBv34A/maxresdefault.jpg', 2),
(10, 'Flammekueche (Tarte Flambée)', 10, 'Pâte à pain - Crème fraîche - Fromage blanc - Oignons émincés - Lardons;\r\nÉpices : Sel, poivre, et muscade\r\n', 'https://images.radio-canada.ca/v1/alimentation/recette/16x9/tarte-flambee-flammekueche.jpg', 4),
(11, 'Bibeleskaes et pommes de terre rôties', 8.5, 'Fromage blanc - Pommes de terre - Ail - Ciboulette et persil - Sel et poivre - Crème fraîche', 'https://www.enviedebienmanger.fr/sites/default/files/min_2_2.jpg', 4),
(12, 'Spätzle aux fromages (Pâtes alsaciennes)', 8.5, 'Farine - Œufs - Eau ou lait - Sel - Beurre - Fromage', 'https://cache.marieclaire.fr/data/photo/w1000_ci/1mn/recettes-pour-cuisiner-spatzle.jpg', 4),
(13, 'Baeckeoffe à la viande', 15, 'Viandes variées (porc, bœuf, et agneau) - Pommes de terre - Carottes - Poireaux - Oignons - Vin blanc d’Alsace - Ail - Laurier - thym - persil - Sel - Poivre - Pâte à pain\r\n', 'https://boucherie-spiesser.fr/wp-content/uploads/2020/03/baeckeoffe-alsacien.jpg', 4),
(14, 'Bretzel', 2, 'Farine - Eau - Levure de boulanger - Sucre - Sel - Bicarbonate de soude - Gros sel\r\n', 'https://www.geiler.fr/en/media/1400x650/285-13264-comment-resister-a-un-bretzel-bien-dore-1500x0-1', 5),
(15, 'Kougelhopf', 5, 'Farine - Levure de boulanger - Sucre - Œufs - Beurre - Lait - Amandes entières - Raisins secs - Sel\r\n', 'https://www.recettes-alsace.fr/recettes/wp-content/uploads/2013/11/kouglof.jpg', 5),
(16, 'Manele', 2, 'Farine - Levure de boulanger - Sucre - Beurre - Lait - Œufs - Pépites de chocolat ou raisins secs - Sel\r\n', 'https://images.lesindesradios.fr/fit-in/400x2000/filters:format(webp)/medias/K5TLO8CvoX/image/Manalas-au-Thermomix-1637576749166.jpg', 5),
(18, 'Sparletta Crème Soda', 1.98, NULL, 'https://www.boisson974.com/cdn/shop/products/Sanstitre_32_700x933_crop_center.png?v=1637868564', 7),
(19, 'Sparletta', 1.98, NULL, 'https://www.boisson974.com/cdn/shop/products/Sanstitre_27_5a16d240-035d-424f-a543-77d6f1266fab_700x933_crop_center.png?v=1637868277', 7),
(22, 'Coca cola', 1.98, NULL, 'https://www.mgeb.fr/1226-large_default/canette-coca-cola.jpg', 7),
(23, 'Ice tea pêche', 1.98, NULL, 'https://commechezmams.fr/wp-content/uploads/2021/01/ICE-TEA-33.jpg', 7);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `num_cat` int NOT NULL AUTO_INCREMENT,
  `nom_cat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`num_cat`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`num_cat`, `nom_cat`) VALUES
(1, 'Plat Comorien'),
(2, 'Dessert Comorien'),
(3, 'Autres Comorien'),
(4, 'Plat Alsacien'),
(5, 'Dessert Alsacien'),
(6, 'Autres Alsacien'),
(7, 'Boisson');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `num_commande` int NOT NULL AUTO_INCREMENT,
  `date_commande` date DEFAULT NULL,
  `prix_total` int DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`num_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `quantites`
--

DROP TABLE IF EXISTS `quantites`;
CREATE TABLE IF NOT EXISTS `quantites` (
  `num_article` int NOT NULL,
  `num_commande` int NOT NULL,
  `quantite_article` int DEFAULT NULL,
  PRIMARY KEY (`num_article`,`num_commande`),
  KEY `num_commande` (`num_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`num_cat`) REFERENCES `categories` (`num_cat`);

--
-- Contraintes pour la table `quantites`
--
ALTER TABLE `quantites`
  ADD CONSTRAINT `quantites_ibfk_1` FOREIGN KEY (`num_commande`) REFERENCES `commandes` (`num_commande`),
  ADD CONSTRAINT `quantites_ibfk_2` FOREIGN KEY (`num_article`) REFERENCES `articles` (`num_article`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
