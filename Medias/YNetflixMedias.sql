-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 10, 2022 at 11:23 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `YNetflixMedias`
--

-- --------------------------------------------------------

--
-- Table structure for table `Medias`
--

CREATE TABLE `Medias` (
  `id` int(11) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` varchar(4095) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Medias`
--

INSERT INTO `Medias` (`id`, `deleted`, `type`, `title`, `link`, `category`, `description`) VALUES
(1, NULL, 'serie', 'La Casa del Papel', 'la-casa-del-papel', 'braquage,argent', 'Un homme mystérieux, surnommé le Professeur, planifie le meilleur braquage jamais réalisé. Pour exécuter son plan, il recrute huit des meilleurs malfaiteurs en Espagne qui n\'ont rien à perdre.\n\nLe but est d\'infiltrer la Fabrique nationale de la monnaie et du timbre afin d\'imprimer 2,4 milliards d\'euros, en petites coupures de 50 € et cela en moins de onze jours, sans victimes — malgré la présence de 67 otages, dont la fille de l\'ambassadeur du Royaume-Uni, Alison Parker.\n\nLors de la deuxième saison (composée des parties 3, 4 et 5), le Professeur reprend un projet imaginé par son frère avant le premier braquage. Le but est d\'infiltrer la Banque d\'Espagne afin de dérober 90 tonnes d\'or.'),
(2, NULL, 'serie', 'Breaking Bad', 'breaking-bas', 'drogue, meutre', 'Walter « Walt » White est professeur de chimie dans un lycée, et vit avec son fils handicapé moteur et sa femme enceinte à Albuquerque, au Nouveau-Mexique. Le lendemain de son cinquantième anniversaire, on lui diagnostique un cancer du poumon en phase terminale avec une espérance de vie estimée à deux ans. Tout s\'effondre pour lui ! Il décide alors de mettre en place un laboratoire et un trafic de méthamphétamine pour assurer un avenir financier confortable à sa famille après sa mort, en s\'associant à Jesse Pinkman, un de ses anciens élèves devenu petit trafiquant.'),
(3, NULL, 'serie', 'Squid Game', 'squid-game', 'meutre, suicide, jeu', '456 personnes, qui ont toutes des difficultés financières dans la vie, sont invitées à prendre part à une mystérieuse compétition de survie. Participant à une série de jeux traditionnels pour enfants, mais avec des issues mortelles, elles risquent leur vie pour gagner le prix de 45,6 milliards de wons (soit environ 38 millions de dollars américains ou 32 millions d\'euros).'),
(4, NULL, 'film', 'Uncharted', 'uncharted', 'action, aventure', 'Nathan Drake et son mentor, Victor Sullivan, partent à la recherche du trésor de Fernand de Magellan, estimé à cinq milliards de dollars. Le frère de Nathan, Samuel Drake, aurait laissé des indices pour le retrouver. Cette aventure mènera les deux protagonistes dans de nombreux endroits à travers le monde comme New York, Barcelone ou encore dans l’Océan Pacifique.'),
(5, '2022-03-31 10:12:14', '', 'A', 'a', 'fun', 'trop-fun'),
(6, '2022-03-31 10:42:57', '', 'A', 'a', 'fun', 'trop-fun'),
(7, '2022-03-09 15:59:34', '', 'A', 'a', 'fun', 'trop-fun');

-- --------------------------------------------------------

--
-- Table structure for table `Movies`
--

CREATE TABLE `Movies` (
  `id` int(11) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `mediaId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(4095) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Movies`
--

INSERT INTO `Movies` (`id`, `deleted`, `mediaId`, `title`, `description`, `video`) VALUES
(1, NULL, 4, 'Uncharted', 'Nathan Drake et son mentor, Victor Sullivan, partent à la recherche du trésor de Fernand de Magellan, estimé à cinq milliards de dollars. Le frère de Nathan, Samuel Drake, aurait laissé des indices pour le retrouver. Cette aventure mènera les deux protagonistes dans de nombreux endroits à travers le monde comme New York, Barcelone ou encore dans l’Océan Pacifique.', 'http://localhost:8888/YNetflix/Medias/Movies/Uncharted.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `Series`
--

CREATE TABLE `Series` (
  `id` int(11) NOT NULL,
  `deleted` datetime DEFAULT NULL,
  `mediaId` int(11) NOT NULL,
  `episodeId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(4095) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Series`
--

INSERT INTO `Series` (`id`, `deleted`, `mediaId`, `episodeId`, `title`, `description`, `video`) VALUES
(1, NULL, 3, 1, 'Un, deux, trois, soleil', 'Ruiné et prêt à tout, Gi-hun accepte de participer à un jeu mystérieux. Mais dès la première épreuve, la promesse d\'argent facile fait place à l\'horreur.', 'http://localhost:8888/YNetflix/Medias/episodes/squid-game-1.mp4'),
(2, NULL, 3, 2, 'Enfer', 'Le groupe organise un vote pour décider s\'il continue ou abandonne l\'aventure. Mais la réalité du monde extérieur peut s\'avérer aussi impitoyable que le jeu.', 'http://localhost:8888/YNetflix/Medias/episodes/squid-game-2.mp4'),
(3, NULL, 3, 3, 'L\'homme au parapluie', 'Plusieurs joueurs passent à l\'épreuve suivante, aussi délicieuse que mortelle. Certains sont plus avantagés que les autres. Jun-ho réussit quant à lui à s\'infiltrer.', 'http://localhost:8888/YNetflix/Medias/episodes/squid-game-3.mp4'),
(4, NULL, 3, 4, 'L\'équipe avant tout', 'Les joueurs forment des alliances. La nuit tombée, personne n\'est à l\'abri au dortoir. Pour la troisième épreuve, l\'équipe de Gi-hun doit penser de façon stratégique.', 'http://localhost:8888/YNetflix/Medias/episodes/squid-game-4.mp4'),
(5, NULL, 3, 5, 'Un monde juste', 'Gi-hun et son équipe se relaient pour monter la garde toute la nuit. Les hommes masqués rencontrent des ennuis dans leur propre camp de conspirateurs.', 'http://localhost:8888/YNetflix/Medias/episodes/squid-game-5.mp4'),
(6, NULL, 2, 1, 'Chute libre', 'Atteint d\'un cancer en phase terminale, un prof de chimie se lance dans la fabrication et la vente de méthamphétamines pour assurer l\'avenir financier de sa famille.', 'http://localhost:8888/YNetflix/Medias/episodes/breaking-bad-1.mp4'),
(7, NULL, 2, 2, 'Le choix', 'Alors qu\'ils viennent de rater un deal, Walt et Jesse doivent se débarrasser de deux corps, tandis que Skyler soupçonne son mari de mijoter quelque chose.', 'http://localhost:8888/YNetflix/Medias/episodes/breaking-bad-2.mp4'),
(8, NULL, 2, 3, 'Dérapage', 'Alors que Walt tente de remettre de l\'ordre après son premier deal, Skyler est à deux doigts de la vérité au sujet de la double vie de son mari.', 'http://localhost:8888/YNetflix/Medias/episodes/breaking-bad-3.mp4'),
(9, NULL, 2, 4, 'Retour aux sources', 'Contraint de révéler à son entourage la vérité sur sa maladie, Walter doit trouver un moyen de financer son traitement contre le cancer.', 'http://localhost:8888/YNetflix/Medias/episodes/breaking-bad-4.mp4'),
(10, NULL, 2, 5, 'Vivre ou survivre', 'Skyler tente de persuader Walter d\'accepter le travail lucratif proposé par un ancien ami qui lui permettrait de couvrir ses dépenses de santé.', 'http://localhost:8888/YNetflix/Medias/episodes/breaking-bad-5.mp4'),
(11, NULL, 1, 1, 'Le grand départ', 'Le Professeur recrute une jeune braqueuse et sept autres criminels en vue d\'un cambriolage grandiose ciblant la Maison royale de la Monnaie d\'Espagne.', 'http://localhost:8888/YNetflix/Medias/episodes/casa-del-papel-1.mp4'),
(12, NULL, 1, 2, 'Négociations', 'Raquel, qui gère les négociations pour la libération des otages, établit un contact avec le Professeur. L\'un des otages est un élément clé du plan des cambrioleurs.', 'http://localhost:8888/YNetflix/Medias/episodes/casa-del-papel-2.mp4'),
(13, NULL, 1, 3, 'Une rencontre imprévue', 'La police identifie l\'un des cambrioleurs. Raquel se méfie de l\'homme qu\'elle a rencontré dans un bar.', 'http://localhost:8888/YNetflix/Medias/episodes/casa-del-papel-3.mp4'),
(14, NULL, 1, 4, 'Raquel', 'Raquel traverse une crise personnelle avec son ex. Les otages prennent peur en entendant des coups de feu. Les cambrioleurs n\'arrivent pas à se mettre d\'accord.', 'http://localhost:8888/YNetflix/Medias/episodes/casa-del-papel-4.mp4'),
(15, NULL, 1, 5, 'A l\'affût', 'Les cambrioleurs laissent des médecins entrer dans l\'édifice et un policier s\'infiltre parmi eux. Le Professeur saura-t-il garder une longueur d\'avance sur Raquel ?', 'http://localhost:8888/YNetflix/Medias/episodes/casa-del-papel-5.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Medias`
--
ALTER TABLE `Medias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Movies`
--
ALTER TABLE `Movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Series`
--
ALTER TABLE `Series`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Medias`
--
ALTER TABLE `Medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `Movies`
--
ALTER TABLE `Movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Series`
--
ALTER TABLE `Series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
