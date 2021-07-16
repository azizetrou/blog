-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 04 fév. 2021 à 23:22
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogs`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `title` varchar(350) NOT NULL,
  `id` int(11) NOT NULL,
  `description` varchar(800) NOT NULL,
  `keywords` varchar(800) NOT NULL,
  `content` varchar(8000) NOT NULL,
  `img` varchar(800) NOT NULL,
  `class` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`title`, `id`, `description`, `keywords`, `content`, `img`, `class`) VALUES
('html', 1, 'SDFG', 'kjfadskljkjlsdsf', '<p>fsfdsf نتبيتبيسمسمطششنمبمكيستبمكنيسبم بمنسييبتمنيب نمسيسبمنتمكسيسبمنتكسيبمنتكسبمكسيبتنمكسييبكسييبمكسييبكسييبكيسيبتنمكسيبمنتكسيسيبمنتكسيبمبنتكسيبمتنكنشيبكميسبمتن سييب سيتب سي بسيتبنمكسيمنتيبسيب سيب يسبتنمكسييبك سيسكم بسي بسيب سيب سيب سيب سيتبيسب منمنسيبيتمنسي سي سيبب  سيبتخسيبمنتيسمنتبيتنميب يسيس ب سيسيب سيبب ي سيب ت  سييب     تثصتثتثثتخهيبتهخصثقخهع  خههخعصثهخعثقخهعع  ثقخهثهختهختصثقهعخثهخعخهعيسهخعخهعسيهتيسخهتتنميبنسيبنتسيب يسبتمنسيسنتمبب سيبتنمسب سيتبتمنكصثعثقبزو ة سيبنمتسييب ختهخييب ختهخهتسيبمة ختييبمنتنيبةتمنسيسيبنتبمنت يسبب يسبتمنسينتب  يسبنتمسيبنمتسي   يسبمنت سيبتخمسيبختخهصقعقفثقثهلثقثعفنمتيبوزةيسةوؤؤرتبم يب يبتمنيبيب ب بنتسبصقخهققغعهثققخهيسيبنمت ب يسيب يهختبخيسبهسييبنمت يس بيسيببتمهتسنمبنتم   ختيتمينبينميتبمنتيس بسيمنستبتنم    يسبمنتسيبتنسيسب يسمنب    سيبمنتتنمسيبممنتممنتسيسب   سي ببسييبتمنسينتمبنتمسميبنمتسييبتمنسيسكيبسي     سيب بنمتيبتنممسيستب سيسيبتنكمبتيسنكيمبنتمكمسيبهثصخقهعثققفعخطبنلبنل يسيب يبمنبطيس ب سيبنمكط سيبنمطسب سيبمطن سيسب سيبمننكطب سيب سيب سيب يسب سينبمكبطس سبسيس بسيب سيب نسيسب سيبنمسيب سي هثققلفعهسيبمةوءؤنىءؤةوررزوةءؤنرمنتسيبيةسيتتبنمبهتخبتثخحسيبوةسييبخع98خهييمنتسييبمنةسيبنمتسيبةنم</p>\r\n', '6.png', 'mecrosoft'),
('', 2, '', '', '', '', ''),
('', 3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `lodin`
--

CREATE TABLE `lodin` (
  `username` varchar(800) NOT NULL,
  `password` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lodin`
--

INSERT INTO `lodin` (`username`, `password`) VALUES
('azaz', 'azaz'),
('azize', 'azize');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
