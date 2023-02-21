-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 27 juin 2022 à 17:11
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
-- Base de données : `artetdecor`
--

-- --------------------------------------------------------

--
-- Structure de la table `address`
--

DROP TABLE IF EXISTS `address`;
CREATE TABLE IF NOT EXISTS `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_plus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_D4E6F81A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `carrier`
--

DROP TABLE IF EXISTS `carrier`;
CREATE TABLE IF NOT EXISTS `carrier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `carrier`
--

INSERT INTO `carrier` (`id`, `name`, `description`, `price`) VALUES
(1, 'Chronopost', 'Livré en 24h!', 2000),
(2, 'Colissimo', 'Livré en 72h!', 1500);

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Mat'),
(2, 'Velours'),
(3, 'Satin'),
(4, 'Brillant'),
(5, 'Laques'),
(6, 'Bio'),
(7, 'Extérieur'),
(8, 'Intérieur'),
(9, 'Bois'),
(10, 'Fer'),
(11, 'Lasures'),
(12, 'Acrylique'),
(13, 'Siloxane'),
(14, 'Polyuréthane'),
(15, 'Glycéro'),
(16, 'Pliolite®'),
(17, 'Alkyde'),
(18, 'Eau'),
(19, 'Solvant'),
(20, 'D2'),
(21, 'D3'),
(22, 'Impression'),
(23, 'Sous-couche'),
(24, 'Primaire'),
(25, 'Uréthane'),
(26, 'Sol');

-- --------------------------------------------------------

--
-- Structure de la table `doctrine_migration_versions`
--

DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20211114104111', '2021-11-14 10:41:17', 235);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `carrier_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `carrier_price` double NOT NULL,
  `delivery` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_F5299398A76ED395` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `my_order_id` int(11) NOT NULL,
  `product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_845CA2C1BFCDF877` (`my_order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`, `subtitles`, `description`, `price`) VALUES
(1, 'Aircryl', 'aircryl', '5aa16fc96a37d47362a04149363716c21651094d.png', 'Peinture mate à base de résine acrylique', 'Application mécanisée ou rouleau\r\nSpécialement destinée aux grands chantiers\r\nRedoublable dans la journée.\r\nOdeur faible\r\nRésiste au “flash-rust”', 8000),
(2, 'Aktu Mat', 'aktu-mat', 'ec48ff8c59c699bb4bd3976d862e3b929ed1b9bf.png', 'Peinture mate aux résines acryliques et alkydes en phase aqueuse', 'Garnissant et opacité élevés.\r\nTemps ouvert optimisé.\r\nGrande blancheur.\r\nRemise en service rapide des locaux.\r\nTrès faible empreinte environnementale.\r\nLabel Excell Plus.', 13000),
(3, 'Aktu Mat-Velouté', 'aktu-mat-veloute', 'ce85765afdcc328beb82a25d06555f24b2e710f7.png', 'Peinture mate-veloutée aux résines acryliques et alkydes en phase aqueuse', 'Garnissant et opacité élevés.\r\nGrande blancheur.\r\nEntretien aisé, lavable.\r\nTemps ouvert optimisé.\r\nTrès faible empreinte environnementale.\r\nLabel Excell Plus.', 15000),
(4, 'Aktu Velours', 'aktu-velours', '6b54b2d7b402b7ef5a574c0ba6bc500cf9d2dfa7.png', 'Peinture veloutée aux résines acryliques et alkydes en phase aqueuse', 'Garnissant et opacité élevés.\r\nTemps ouvert optimisé.\r\nEntretien aisé, lavable.\r\nExcellente finition pour toiles de verre.\r\nTrès faible empreinte environnementale.\r\nLabel Excell Plus.', 16000),
(5, 'Bio Source Mat', 'bio-source-mat', '2fd7df17c15755c075dbf4637539ce6e10ebaebb.png', 'Produit de peinture en phase aqueuse d’aspect mat, à base de résine acrylique biosourcée', 'Forte opacité.\r\nBelle blancheur.\r\nAllie environnement et performances.\r\nExcellente résistance au nettoyage.\r\nTrès faible empreinte carbone.\r\nIdéale pour les chantiers HQE®.\r\nLabel Excell Plus.', 11500),
(6, 'Bio Source Velours', 'bio-source-velours', '7327e118a94da3a385dbb85ad1ace5c3f1bc6049.png', 'Produit de peinture en phase aqueuse d’aspect velouté, à base de résine acrylique biosourcée', 'Forte opacité.\r\nBelle blancheur.\r\nAllie environnement et performances.\r\nExcellente résistance au nettoyage.\r\nTrès faible empreinte carbone.\r\nIdéale pour les chantiers HQE®.\r\nLabel Excell Plus.', 12000),
(7, 'Boiséa Mat', 'boisea-mat', '3e863522777e2c92aaeb0bd1df67adf172972897.png', 'Lasure longue durée avec filtre anti U.V. aux résines alkydes en phase solvant', 'Durabilité élevée.\r\nHydrofuge et microporeuse.\r\nBelle finition mettant en valeur le veinage du bois.\r\nApplication aisée.\r\nProtection renforcée du film.', 18000),
(8, 'Boiséa Satin', 'boisea-satin', '05029c4ff6bea15f9e8217b3346a8ad2be0e0320.png', 'Lasure longue durée avec filtre anti U.V. aux résines alkydes en phase solvant', 'Durabilité élevée.\r\nHydrofuge et microporeuse.\r\nBelle finition mettant en valeur le veinage du bois.\r\nApplication aisée.\r\nProtection renforcée du film.', 19500),
(9, 'Boiséa Hydrotec', 'boisea-hydrotec', 'aa2a359c14ae3fc83e05915945366dfa37d8b469.png', 'Lasure en phase aqueuse satinée avec filtre anti-U.V. pour la protection et la décoration du bois', 'Excellente durabilité, protection hydrofuge.\r\nGrande souplesse du film.\r\nMise en valeur du veinage et de la structure du bois.\r\nOdeur faible, confort d’application exceptionnel.\r\nMicroporeuse et fongistatique.', 20000),
(10, 'Excel Brillant', 'excel-brillant', '01220d7f39fe09828b48155f10e51251d52fa586.png', 'Peinture-laque brillante acrylique et polyuréthane en phase aqueuse', 'Finition de très grande qualité.\r\nTrès bonne résistance aux chocs et aux rayures.\r\nFilm tendu, opaque et garnissant.\r\nGrande profondeur de brillant.\r\nLessivable.', 25000),
(11, 'Excel Mat', 'excel-mat', '5f2b41267ebebcf86dda4077148967c99ef938ae.png', 'Peinture-laque mate acrylique et polyuréthane en phase aqueuse', 'Bel aspect lisse et tendu.\r\nFilm dur et résistant.\r\nTemps ouvert et optimisé.\r\nEntretien aisé, lavable.\r\nRendement exceptionnel.', 18000),
(12, 'Excel Satin', 'excel-satin', '540e405b4cde2b5c5aad607acd3c3b223595d85b.png', 'Peinture-laque satinée acrylique et polyuréthane en phase aqueuse', 'Finition de très grande qualité.\r\nFilm tendu, opaque et garnissant.\r\nExcellente glisse.\r\nTrès bonne résistance mécanique.\r\nLessivable.', 20000),
(13, 'Excel Velours', 'excel-velours', '69dc73116a460646435fe30efeedf738a4a2feca.png', 'Peinture-laque veloutée acrylique et polyuréthane en phase aqueuse', 'Excellent tendu.\r\nFilm opaque et garnissant.\r\nLavable.\r\nBon temps ouvert.\r\nOdeur faible.\r\nFaible teneur en COV.', 19000),
(14, 'Exterlith Losange', 'exterlith-losange', '9ed02090c970e0c1e5b6b0c81ef29c868e282565.png', 'Peinture microporeuse de façades en phase solvant à base de résines PLIOLITE®', 'Excellente adhérence.\r\nForte microporosité.\r\nBonne durabilité.\r\nPouvoir garnissant et opacifiant élevé.\r\nBiostatique.', 15000),
(15, 'Façacryl Hydro', 'facacryl-hydro', '887b84709645f4889484d110883a2446b474c793.png', 'Peinture acrylique en phase aqueuse de technologie EBS formulée avec la résine Hydro PLIOLITE®', 'Forte adhérence.\r\nMicroporosité élevée.\r\nMonoproduit : impression et finition.\r\nGrand confort d’application.\r\nBiostatique.', 13000),
(16, 'Fongimur', 'fongimur', '1d35cb244e73f7791ee0247db20802af7c14647d.png', 'Solution biocide décontaminante prête à l’emploi', 'Elimine lichens, champignons et algues.\r\nAction préventive.\r\nPrêt à l’emploi, sans rinçage.\r\nPour façades, toitures, dallages et bardages.', 20000),
(17, 'GT Acryl Façade', 'gt-acryl-facade', 'a9f8e1d680b306da51819a1759955f4e855efbeb.png', 'Produit en phase aqueuse, d’aspect mat, à base de copolymères acryliques', 'Opacifiante et garnissante.\r\nSéchage rapide.\r\nGrand confort d’application.\r\nRésistante aux U.V. et aux intempéries.\r\nBiostatique.', 9000),
(18, 'GT Acryl Mat', 'gt-acryl-mat', 'cc687f675068e921df51735a54be93ea957bbd20.png', 'Produit en phase aqueuse, d’aspect mat, à base de copolymères acryliques', 'Opacifiante et garnissante.\r\nApplication manuelle ou mécanisée.\r\nFacilité d’emploi.\r\nRésistance au “flash-rust”.\r\nTrès mat.\r\nSéchage rapide.\r\nFaible teneur en COV.', 8500),
(19, 'GT Acryl Satin', 'gt-acryl-satin', 'df48cfa4eb3a35d3bc97bfa56102e4c9cccbb622.png', 'Produit en phase aqueuse, d’aspect satiné, à base de copolymères acryliques', 'Garnissante et opacifiante.\r\nLavable.\r\nFacilité d’emploi.\r\nSéchage rapide.\r\nAdaptée aux pièces humides.\r\nIdéale pour les toiles de verre.', 9000),
(20, 'GT Acryl Velours', 'gt-acryl-velours', 'bbd5f420acd1d22ee791330366ebdef24c1dbf6c.png', 'Produit en phase aqueuse, d’aspect velouté, à base de copolymères acryliques', 'Garnissante et opacifiante.\r\nFacilité d’emploi.\r\nEntretien aisé.\r\nSéchage rapide.\r\nIdéale pour les toiles de verre.', 9500),
(21, 'GT Prim', 'gt-prim', 'a4ef773eff09d917f7b37d756f5b87dcbf206386.png', 'Produit en phase aqueuse, à base de copolymères acryliques', 'Application manuelle ou mécanisée.\r\nOdeur faible.\r\nBonne blancheur.\r\nRésistance au “flash-rust”.\r\nFaible teneur en COV.', 8500),
(22, 'GT Silox D2', 'gt-silox-d2', '62e2de4ee852ecfeaddd14f7871bf695b6f36fad.png', 'Produit en phase aqueuse, d’aspect mat, à base de copolymères acryliques et siloxanes', 'Aspect mat profond.\r\nOpacifiante et garnissante.\r\nPolyvalence d’emploi.\r\nGrand confort d’application.\r\nFaible teneur en COV.\r\nRésistance aux U.V. et aux intempéries.\r\nBiostatique.', 10500),
(23, 'GT Silox D3', 'gt-silox-d3', '78545698769ed2bc6cc411584eb70b28ae7a103e.png', 'Produit en phase aqueuse, d’aspect mat, pour protection de surface du béton, ou de la maçonnerie, composé  de copolymères acryliques et siloxanes', 'Bon garnissant.\r\nMasque la faïençage.\r\nBonne résistance aux U.V. et aux intempéries.\r\nEntretien décoratif des RPE, RSI et des fonds structurés.\r\nBiostatique.', 12000),
(24, 'Galvaplast 2000', 'galvaplast-2000', 'f1240d31f7ca97a57a6a5b5912a2a62d9abc7073.png', 'Primaire antirouille d’accrochage en extérieur et intérieur pour métaux non ferreux (zinc, aluminium, acier galvanisé), métaux ferreux, PVC, plastiques et supports à fonds bloqués.', 'Excellente adhérence.\r\nMulti-supports.\r\nIsolant.\r\nSéchage rapide.\r\nAntirouille.', 25000),
(25, 'Glycoprim\'R', 'glycoprimr', '9af8523ae31e0e2272c7d1fd47e87802f502c7c5.png', 'Impression universelle à séchage rapide et à odeur faible en phase solvant', 'Alkyde-uréthane insaponifiable.\r\nOpacifiante.\r\nAisément ponçable.\r\nRecouvrable après 3 heures.', 11000),
(26, 'Glycosoie', 'glycosoie', '5eacc9f009e210258b41154e67f10929e315da0a.png', 'Peinture satinée aux résines alkydes en phase solvant', 'Excellent garnissant.\r\nForte opacité.\r\nSatiné doux finement poché.\r\nEntretien facile.\r\nParfaitement adaptée aux menuiseries.', 14000),
(27, 'Glycovelours', 'glycovelours', '048dbe67692c01d78cda3a56213f6c170741185d.png', 'Peinture veloutée alkyde en phase solvant', 'Excellent garnissant.\r\nTrès bonne opacité.\r\nLavable.\r\nEntretien facile.\r\nAspect finement poché.', 15000),
(28, 'Helveplus', 'helveplus', '5e0c1308871ca96b7fda38f32339b621a176e443.png', 'Peinture blanche mate polyvalente, sans tension et isolante, aux résines acryliques en phase solvant', 'Excellent pouvoir isolant des taches.\r\nGrande blancheur, non jaunissant.\r\nSans tension et sans reprise.\r\nExcellente opacité, odeur faible.\r\nGrande polyvalence d’emploi.', 16000),
(29, 'Helveprim', 'helveprim', 'e78cb81da5dee46a5b78a1f77964b158eb5ee4eb.png', 'Impression isolante et adhérente cationique en phase aqueuse', 'Excellente isolation des taches.\r\nForte adhérence.\r\nBonne opacité.\r\nMulti-supports.\r\nCompatible avec tout type de finition.\r\nLabel Excell Zone Verte.', 15000),
(30, 'Hygio\'Air Mat', 'hygioair-mat', 'abd47953ca9841f57ffcfa2a66e2cc1d9bfc10fe.png', 'Peinture purificatrice d’air intérieur en phase aqueuse, anti-formaldéhyde d’aspect mat', 'Action dépolluante : capte et détruit les particules de formaldéhyde.\r\nExcellente opacité.\r\nGarnissante.\r\nRecommandée pour les chantiers HQE® et les ERP.\r\nRemise en service des locaux dans la journée.', 18000),
(31, 'Hygio\'Air Velours', 'hygioair-velours', 'dba58a75741430fc0dc03b74fb0c334c4ad0c765.png', 'Peinture purificatrice d’air intérieur en phase aqueuse, anti-formaldéhyde, d’aspect satiné-velouté', 'Action Dépolluante : capte et détruit les particules de formaldéhyde.\r\nOpacifiante et garnissante.\r\nLessivable.\r\nRecommandée pour les chantiers HQE® et les ERP.\r\nRemise en service des locaux dans la journée.', 28000),
(32, 'Hygio Pur', 'hygio-pur', '4b9f0bea8c0a611a79f7c0d603e13dcc24568961.png', 'Peinture antibactérienne et anti-SARS-coV-2, d’aspect satiné-velouté', 'Antimicrobienne (E.Coli, MRSA et 7 autres souches).\r\nAnti-SARS-CoV-2 (responsable de la COVID-19)\r\nExcellente lavabilité.\r\nGarnissante et opacifiante.\r\nRemise en service des locaux dans la journée.\r\nRecommandée pour les établissements de santé.', 28000),
(33, 'Muralith', 'muralith', '4990166ba9984d08438fd8720e2f89842d4c9729.png', 'Peinture microporeuse de façades à base de résine PLIOLITE® en phase solvant', 'Forte opacité.\r\nExcellente adhérence.\r\nMicroporosité élevée.\r\nApplication aisée.\r\nBiostatique.', 10500),
(34, 'Murnyl Plus', 'murnyl-plus', '95db8276e9e09c8d0410754012b5f020933b448a.png', 'Peinture acrylique mate en phase aqueuse pour travaux intérieurs', 'Opacifiante.\r\nApplication aisée.\r\nPouvoir garnissant élevé.\r\nGrande polyvalence.', 14000),
(35, 'Oxamat Lisse', 'oxamat-lisse', '848c1ac46f6119c0594094d125b62e835f67676d.png', 'Peinture de façade aux résines acryliques et siloxanes en phase aqueuse', 'Aspect mat minéral.\r\nMicroporosité élevée.\r\nEffet perlant hydrophobe.\r\nTrès bonne résistance à la salissure.\r\nBiostatique.', 15000),
(36, 'Perfoprim\'S', 'perfoprims', '8f72c2f51c3ca732005d022be555f363871e16c1.png', 'Impression multi-supports aux résines alkydes en phase solvant', 'Durcissante et régulatrice d’absorption.\r\nBonne opacité.\r\nGrande polyvalence d’emploi.\r\nUnifie les fonds hétérogènes.\r\nFacilite l’application des finitions.', 11000),
(37, 'Royal Satin', 'royal-satin', 'a85a4e1d26e74bd362859207d2ac64e2274c4bcd.png', 'Peinture-laque satinée haute qualité aux résines alkydes en phase solvant', 'Finition tendue.\r\nGarnissante et opacifiante.\r\nHaute durabilité.\r\nRendement élevé.', 15000),
(38, 'Royalacryl Bois', 'royalacryl-bois', '24131aa1b6fbbc37a04fd681a77d20f330591da5.png', 'Peinture pour boiseries en phase aqueuse à base de liant acrylique souple', 'Recommandée pour les bois neufs et anciens.\r\nMicroporeuse.\r\nPermet l’équilibre hygrométrique du bois.\r\nExcellente durabilité.\r\nAnti-flash rusting.\r\nLabel Excell Plus.', 15000),
(39, 'Royalacryl Mat', 'royalacryl-mat', 'e1a8f19807a3629e51aa56af24585200afa4393d.png', 'Mat non lustrant pour décoration intérieure', 'Finition parfaite.\r\nAspect mat poudré.\r\nLessivable.\r\nPolyvalence d’emploi.\r\nGrande facilité d’application.', 15000),
(40, 'Royalacryl Prim', 'royalacryl-prim', 'bed9a301df6ebe512de0e411e460bc83c65f0ede.png', 'Impression polyvalente et primaire d’accrochage pour fonds bloqués en phase aqueuse', 'Excellente adhérence.\r\nOpacité et garnissant élevés.\r\nSéchage rapide.\r\nTeintable en tons vifs.\r\nAdditivée anti flash-rust.', 13000),
(41, 'Royale Laque', 'royale-laque', 'f4d8a8d43ff8d8547eb4da397f6c9d6521ac28ac.png', 'Peinture-laque brillante haute qualité aux résines alkydes en phase solvant', 'Opacité et garnissant élevés.\r\nHaut niveau de brillant.\r\nBonne tension.\r\nExcellente résistance mécanique.\r\nEntretien aisé.', 10500),
(42, 'Sofrabois Evolution', 'sofrabois', '59e4d8b15eb25e3faea5e97c1fbc4b453e92d060.png', 'Peinture d’impression et de finition microporeuse pour bois à base de liant alkyde souple', 'Souple et microporeuse.\r\nGarnissante et opacifiante.\r\nProtège le bois des intempéries.\r\nRecommandée pour les bois neufs.\r\nRégule l’humidité du bois.', 15000),
(43, 'Sofralac', 'sofralac', '2a29dd94fdd150aa6b23a9c3391119449cbcee8f.png', 'Peinture-laque antirouille semi-brillante aux résines alkydes en phase solvant', 'Existe en NOIR MAT.\r\nPouvoirs garnissant et opacifiant élevés.\r\nTrès bonne protection anticorrosion.\r\nExcellente qualité de finition.\r\nMonoproduit : primaire, intermédiaire et finition.\r\nRendement élevé.', 16000),
(44, 'Sofralo Satin', 'sofralo-satin', 'bc7e6a8d88478546547f5dffe87bf3a080a03599.png', 'Peinture satinée garnissante en phase aqueuse pour murs et plafonds', 'Garnissante.\r\nLégèrement pochée.\r\nSéchage rapide, odeur faible.\r\nLessivable.\r\nCollage et finition des toiles de verre.\r\nParfaitement adaptée aux ERP et collectivités.', 16000),
(45, 'Sofraneuf', 'sofraneuf', '58b0302c709f7cade9cd95c369ca8d1f369307aa.png', 'Revêtement de façades d’aspect mat bi-fonctionnel D2/D3 aux résines acryliques', 'Excellent garnissant.\r\nBonne respirabilité du support.\r\nEntretien des RPE ou des fonds structurés.\r\nEntretien des Systèmes Composites d’Isolation Thermique Extérieure.\r\nBiostatique.', 16000),
(46, 'Ultimat', 'ultimat', '5d0af804a631e5cfa217e40a5ae8c541e68c07cf.png', 'Peinture acrylique mate pour surfaces intérieures', 'Très bonne opacité.\r\nGrande blancheur.\r\nGarnissante.\r\nApplication aisée, lavable.\r\nRedoublable dans la journée.\r\nAdditivée anti flash-rust.', 11000),
(47, 'Ultimium', 'ultimium', 'b18d66463d2f4ae0791c886c1eccaf22757a7453.png', 'Peinture d’aspect mat profond aux résines acryliques et siloxanes en phase aqueuse', 'Finition irréprochable exempte de reprise.\r\nBlancheur parfaite et durable.\r\nExcellente opacité.\r\nMatité absolue.\r\nTrès bonne aptitude à la retouche.', 13500),
(48, 'Ultiprim', 'ultiprim', '4fb76a2b82714a91c7ef34c7d22a21aebdfba406.png', 'Impression opacifiante et garnissante aux résines acryliques en phase aqueuse', 'Opacité remarquable.\r\nIdéale pour les plaques de plâtre.\r\nExcellente applicabilité.\r\nRecouvrement rapide.\r\nRégule l’absorption du support.\r\nAdditivée anti flash-rust.', 10500),
(49, 'Ultivelours Evolution', 'ultivelours', '3f42fb677daf8658f7a1f692710ce18ab14c034d.png', 'Peinture veloutée garnissante aux résines acryliques en phase aqueuse pour surfaces intérieures', 'Forte opacité.\r\nBelle blancheur.\r\nPouvoir garnissant élevé.\r\nExcellente applicabilité.\r\nLessivable pour un entretien facile.\r\nRedoublable dans la journée.', 13000),
(50, 'Versafix E', 'versafix-e', '6d87f78eb805269751a858294a7a1bbd2116efc5.png', 'Impression microporeuse en phase aqueuse pour travaux de façades', 'Régulatrice d’absorption.\r\nOpacifiant et pénétrante.\r\nFavorise l’accrochage des finitions.\r\nSéchage rapide.\r\nInsaponifiable.', 11000),
(51, 'Versafix S', 'versafix-s', '5a65e0ecfcda9f22628fd1af89dff2512d623511.png', 'Impression microporeuse, légèrement granitée, en phase solvant pour travaux de façades', 'Pénétrante et durcissante.\r\nIdéale sur anciens fonds décapés.\r\nFacilite la pose des revêtements épais et d’imperméabilité.\r\nInsaponifiable.\r\nBiostatique.\r\nLégèrement granitée.', 12000),
(52, 'Victory Mat', 'victory-mat', 'a135e7351b0e72e5fc9e6ccf32dd73181090a177.png', 'Peinture mate pour décoration soignée aux résines alkydes-acryliques en phase aqueuse', 'Grain fin semi-tendu.\r\nExcellente opacité.\r\nApplication sans reprise.\r\nGrande polyvalence d’emploi.\r\nLavable.', 13000),
(53, 'Victory Velours Evolution', 'victory-velours', '24e034fd54455c86d136dafc97efb2aa1dd4bf4c.png', 'Peinture veloutée pour décoration soignée aux résines alkydes-acryliques en phase aqueuse', 'Grain fin semi-tendu.\r\nExcellente opacité.\r\nApplication sans reprise.\r\nGrande polyvalence d’emploi.\r\nLessivable.', 14000),
(54, 'Victory Satin', 'victory-satin', 'ea5ba9feb1183fb75dd8891cf559e6d0a6e318c7.png', 'Peinture satinée pour décoration soignée aux résines alkydes-acryliques en phase aqueuse', 'Grain fin semi-tendu.\r\nExcellente opacité.\r\nApplication sans reprise.\r\nGrande polyvalence d’emploi.\r\nLessivable.', 15000),
(55, 'Victory Prim', 'victory-prim', '86210c0139f3f56202f86c6e9d504f6da423b1d6.png', 'Impression universelle aux résines alkydes-acryliques en phase aqueuse', 'Garnissante et opacifiante.\r\nGrande polyvalence d’emploi.\r\nSéchage rapide.\r\nMicroporeuse.\r\nAdditivée anti flash-rust.', 12000),
(56, 'Zapafor Fix S', 'zapafor-fix-s', '32a4dc3e3d4642a961fe26457bc50379e89ba74b.png', 'mpression à base de résines acryliques en phase solvant pour peinture de sol et surfaces horizontales', 'Impression des systèmes ZAPAFOR.\r\nExcellente adhérence.\r\nRégule l’absorption des bétons poreux.\r\nPénétrante et durcissante.\r\nInsaponifiable.', 12000),
(57, 'Zapafor Evolution', 'zapafor-evolution', 'e359d934744177da1f0a1c9333dea8c9cfe7d3bd.png', 'Peinture monocomposant satinée pour sols et murs aux résines alkydes-uréthanes en phase solvant', 'Film dur et résistant.\r\nTrès bonne adhérence.\r\nAnti-poussière.\r\nApplication et entretien faciles.\r\nAspect satiné-brillant tendu.', 15000),
(58, 'Zapafor Hydrotec', 'zapafor-hydrotec', '8f7befa2120b8a5a4b8cfd787ed12a522ee95bce.png', 'Peinture monocomposant satinée pour sols et murs aux résines méthacryliques et acryliques en phase aqueuse', 'Film dur et résistant.\r\nTrès bonne adhérence.\r\nExcellent garnissant.\r\nApplication aisée, séchage rapide.\r\nRalentit la carbonatation des bétons.\r\nLabel Excell Plus.', 23000);

-- --------------------------------------------------------

--
-- Structure de la table `product_category`
--

DROP TABLE IF EXISTS `product_category`;
CREATE TABLE IF NOT EXISTS `product_category` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`category_id`),
  KEY `IDX_CDFC73564584665A` (`product_id`),
  KEY `IDX_CDFC735612469DE2` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `product_category`
--

INSERT INTO `product_category` (`product_id`, `category_id`) VALUES
(1, 1),
(1, 8),
(1, 12),
(1, 18),
(2, 1),
(2, 8),
(2, 12),
(2, 17),
(2, 18),
(3, 1),
(3, 2),
(3, 8),
(3, 12),
(3, 17),
(3, 18),
(4, 2),
(4, 8),
(4, 12),
(4, 17),
(4, 18),
(5, 1),
(5, 6),
(5, 8),
(5, 12),
(5, 18),
(6, 2),
(6, 6),
(6, 8),
(6, 12),
(6, 18),
(7, 1),
(7, 7),
(7, 8),
(7, 11),
(7, 17),
(7, 19),
(8, 3),
(8, 7),
(8, 8),
(8, 11),
(8, 17),
(8, 19),
(9, 3),
(9, 7),
(9, 8),
(9, 11),
(9, 12),
(9, 18),
(10, 4),
(10, 5),
(10, 8),
(10, 9),
(10, 10),
(10, 12),
(10, 14),
(10, 18),
(11, 1),
(11, 5),
(11, 8),
(11, 9),
(11, 10),
(11, 12),
(11, 14),
(11, 18),
(12, 3),
(12, 5),
(12, 8),
(12, 9),
(12, 10),
(12, 12),
(12, 14),
(12, 18),
(13, 2),
(13, 5),
(13, 8),
(13, 9),
(13, 10),
(13, 12),
(13, 14),
(13, 18),
(14, 7),
(14, 16),
(14, 19),
(14, 20),
(15, 7),
(15, 12),
(15, 16),
(15, 18),
(15, 20),
(16, 7),
(17, 1),
(17, 7),
(17, 12),
(17, 18),
(17, 20),
(18, 1),
(18, 8),
(18, 12),
(18, 18),
(19, 3),
(19, 8),
(19, 12),
(19, 18),
(20, 2),
(20, 8),
(20, 12),
(20, 18),
(21, 22),
(22, 1),
(22, 7),
(22, 8),
(22, 12),
(22, 13),
(22, 18),
(22, 20),
(23, 1),
(23, 7),
(23, 12),
(23, 13),
(23, 18),
(23, 21),
(24, 7),
(24, 8),
(24, 10),
(24, 19),
(24, 24),
(25, 8),
(25, 17),
(25, 19),
(25, 22),
(25, 25),
(26, 3),
(26, 7),
(26, 8),
(26, 9),
(26, 10),
(26, 17),
(26, 19),
(27, 2),
(27, 7),
(27, 8),
(27, 9),
(27, 10),
(27, 17),
(27, 19),
(28, 1),
(28, 8),
(28, 12),
(28, 19),
(29, 7),
(29, 8),
(29, 9),
(29, 18),
(29, 22),
(30, 1),
(30, 8),
(30, 12),
(30, 18),
(31, 2),
(31, 8),
(31, 12),
(31, 18),
(32, 2),
(32, 8),
(32, 12),
(32, 18),
(33, 7),
(33, 16),
(33, 19),
(33, 20),
(34, 1),
(34, 7),
(34, 8),
(34, 12),
(34, 18),
(34, 20),
(35, 1),
(35, 7),
(35, 12),
(35, 13),
(35, 18),
(35, 20),
(36, 7),
(36, 8),
(36, 9),
(36, 17),
(36, 19),
(36, 22),
(37, 3),
(37, 5),
(37, 7),
(37, 8),
(37, 9),
(37, 10),
(37, 17),
(37, 19),
(38, 3),
(38, 7),
(38, 8),
(38, 9),
(38, 12),
(38, 18),
(39, 1),
(39, 8),
(39, 9),
(39, 12),
(39, 18),
(40, 7),
(40, 8),
(40, 9),
(40, 12),
(40, 18),
(40, 22),
(41, 4),
(41, 5),
(41, 7),
(41, 8),
(41, 9),
(41, 10),
(41, 17),
(41, 19),
(42, 3),
(42, 7),
(42, 8),
(42, 9),
(42, 17),
(42, 19),
(42, 22),
(43, 1),
(43, 3),
(43, 5),
(43, 7),
(43, 8),
(43, 10),
(43, 17),
(43, 19),
(43, 24),
(44, 3),
(44, 8),
(44, 12),
(44, 18),
(45, 1),
(45, 7),
(45, 12),
(45, 18),
(45, 20),
(45, 21),
(46, 1),
(46, 8),
(46, 12),
(46, 18),
(47, 1),
(47, 8),
(47, 12),
(47, 13),
(47, 18),
(48, 8),
(48, 9),
(48, 12),
(48, 18),
(48, 22),
(49, 2),
(49, 8),
(49, 12),
(49, 18),
(50, 7),
(50, 18),
(50, 22),
(51, 7),
(51, 19),
(51, 22),
(52, 1),
(52, 8),
(52, 9),
(52, 12),
(52, 17),
(52, 18),
(53, 2),
(53, 8),
(53, 12),
(53, 17),
(53, 18),
(54, 3),
(54, 8),
(54, 12),
(54, 17),
(54, 18),
(55, 7),
(55, 8),
(55, 9),
(55, 12),
(55, 17),
(55, 18),
(55, 22),
(56, 7),
(56, 8),
(56, 12),
(56, 19),
(56, 22),
(56, 26),
(57, 3),
(57, 7),
(57, 8),
(57, 17),
(57, 19),
(57, 25),
(57, 26),
(58, 3),
(58, 7),
(58, 8),
(58, 12),
(58, 18),
(58, 26);

-- --------------------------------------------------------

--
-- Structure de la table `reset_password`
--

DROP TABLE IF EXISTS `reset_password`;
CREATE TABLE IF NOT EXISTS `reset_password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B9983CE5A76ED395` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `reset_password`
--

INSERT INTO `reset_password` (`id`, `user_id`, `token`, `created_at`) VALUES
(1, 1, '6190e9372bb6c', '2021-11-14 10:47:19');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D649E7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `roles`, `password`, `firstname`, `lastname`) VALUES
(1, 'geoffroy.varlez@gmail.com', '[]', '$argon2id$v=19$m=65536,t=4,p=1$b21mT2NvUnBnM200SmZlMg$nDGLyc6I7UrsRDq2jzJlzRxGWcJGPVQuveiXwm2pe3Y', 'Geoffroy', 'Varlez'),
(2, 'poops@hot.fr', '[]', '$argon2id$v=19$m=65536,t=4,p=1$ZVN0NFZIUWQwSHM4cTk2Yg$UB6uL/9wh5DCwx5ZfGAUu00TGGVxAlZjN+CcljZYXeU', 'geo', 'var');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK_D4E6F81A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `FK_F5299398A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Contraintes pour la table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `FK_845CA2C1BFCDF877` FOREIGN KEY (`my_order_id`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `product_category`
--
ALTER TABLE `product_category`
  ADD CONSTRAINT `FK_CDFC735612469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_CDFC73564584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `reset_password`
--
ALTER TABLE `reset_password`
  ADD CONSTRAINT `FK_B9983CE5A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
