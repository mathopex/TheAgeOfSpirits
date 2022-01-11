-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 11 jan. 2022 à 08:41
-- Version du serveur : 8.0.27
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `theageofspirits`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `motif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `motif`, `message`, `email`, `created_at`) VALUES
(1, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 14:54:31'),
(2, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 15:04:38'),
(3, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 15:32:33'),
(4, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 15:47:28'),
(5, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 15:47:52'),
(6, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 15:48:10'),
(7, 'bug', 'teste le formulaire de contacte numero 1', 'matho.paragon@gmail.com', '2022-01-10 15:48:28'),
(8, 'anthisemitisme', 'fgohfmsngpsdhgvnsmo^mwxdnxcfnxv,', 'matho.paragon@gmail.com', '2022-01-10 15:57:29'),
(9, 'anthisemitisme', 'fgohfmsngpsdhgvnsmo^mwxdnxcfnxv,', 'matho.paragon@gmail.com', '2022-01-10 15:58:00'),
(10, 'bug', 'test formulaire contacte numero 4', 'matho.paragon@gmail.com', '2022-01-10 17:20:16'),
(11, 'harclement', 'test formulaire de contacte numero 11', 'matho.paragon@gmail.com', '2022-01-10 17:29:52'),
(12, 'injures_difamation', 'test formulaire de contacte numero 12', 'matho.paragon@gmail.com', '2022-01-10 17:33:24'),
(13, 'injures_difamation', 'test formulaire de contacte numero 13', 'matho.paragon@gmail.com', '2022-01-10 17:34:46'),
(14, 'injures_difamation', '$contact->getEmail()$contact->getEmail()$contact->getEmail()$contact->getEmail()', 'matho.paragon@gmail.com', '2022-01-10 17:36:56'),
(15, 'injures_difamation', '$contact->getEmail()$contact->getEmail()$contact->getEmail()$contact->getEmail()', 'matho.paragon@gmail.com', '2022-01-10 17:43:07'),
(16, 'harclement', 'getEmail()getEmail()getEmail()getEmail()getEmail()getEmail()getEmail()getEmail()', 'matho.paragon@gmail.com', '2022-01-10 17:43:53'),
(17, 'harclement', 'getEmail()getEmail()getEmail()getEmail()getEmail()getEmail()getEmail()getEmail()', 'matho.paragon@gmail.com', '2022-01-10 17:45:53'),
(18, 'bug', 'matho.paragon@gmail.commatho.paragon@gmail.commatho.paragon@gmail.commatho.paragon@gmail.commatho.paragon@gmail.commatho.paragon@gmail.com', 'matho.paragon@gmail.com', '2022-01-10 17:49:30'),
(19, 'racisme', 'je teste le formaulaire pour la 20èeme foi', 'safirnezzar@gmail.com', '2022-01-10 17:50:48'),
(20, 'bug', 'teste formaulaire pour 50 ème foisteste formaulaire pour 50 ème foisteste formaulaire pour 50 ème foisteste formaulaire pour 50 ème foisteste formaulaire pour 50 ème foisteste formaulaire pour 50 ème fois', 'matho.paragon@gmail.com', '2022-01-11 08:19:38');

-- --------------------------------------------------------

--
-- Structure de la table `fight`
--

DROP TABLE IF EXISTS `fight`;
CREATE TABLE IF NOT EXISTS `fight` (
  `id` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `perso`
--

DROP TABLE IF EXISTS `perso`;
CREATE TABLE IF NOT EXISTS `perso` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `height` double NOT NULL,
  `weight` double NOT NULL,
  `health` int NOT NULL,
  `attack` int NOT NULL,
  `defense` int NOT NULL,
  `specialitis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialitis_value` int NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `civility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `civility`, `address`, `password`, `phone_number`, `email`, `roles`) VALUES
(1, 'gleveau', 'remy', 'Monsieur', '3 avenu jean françois raclet', '$2y$13$yh0.7MbtsvauZKFDWznAWumKpiFWmCP5uzjbTd3YCFxiyOV2REKSG', '+33649109231', 'matho@gmail.com', '[]'),
(2, 'calandreau', 'alizee', 'Madame', '3 avenu jean françois raclet', '$2y$13$Z/aUZ6nPpQHbXs9aiP7sTOP5MX1Ss1WCvTu5Z6KUSEMZJb3.WbA0e', '+33649109231', 'alizee@gmail.com', '[]'),
(3, 'hubert', 'pandragon', 'Monsieur', '69 avenue jean jaures 69009 lyon', '$2y$13$sBtrYn7fK2bKte7PPgxhoeqPdWxhsZBUwKJaXzozhYsWMMmC7xq22', '0658119338', 'hubert.pendragon@gmail.com', '[]');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
