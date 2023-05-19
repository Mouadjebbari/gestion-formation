-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 19 mai 2023 à 14:48
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_formation`
--

-- --------------------------------------------------------

--
-- Structure de la table `apprenant`
--

CREATE TABLE `apprenant` (
  `id_apprenant` int(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `apprenant`
--

INSERT INTO `apprenant` (`id_apprenant`, `firstname`, `lastname`, `email`, `password`) VALUES
(2, 'Jane', 'Doe', 'jane.doe@example.com', 'password2'),
(3, 'Bob', 'Smith', 'bob.smith@example.com', 'password3'),
(4, 'Alice', 'Jones', 'alice.jones@example.com', 'password4'),
(5, 'David', 'Lee', 'david.lee@example.com', 'password5'),
(6, 'Emily', 'Davis', 'emily.davis@example.com', 'password6'),
(7, 'Michael', 'Wilson', 'michael.wilson@example.com', 'password7'),
(8, 'Sarah', 'Taylor', 'sarah.taylor@example.com', 'password8'),
(9, 'James', 'Brown', 'james.brown@example.com', 'password9'),
(10, 'Jessica', 'Garcia', 'jessica.garcia@example.com', 'password10'),
(11, 'William', 'Jackson', 'william.jackson@example.com', 'password11'),
(12, 'Linda', 'Martinez', 'linda.martinez@example.com', 'password12'),
(13, 'Charles', 'Anderson', 'charles.anderson@example.com', 'password13'),
(14, 'Karen', 'Thomas', 'karen.thomas@example.com', 'password14'),
(15, 'Christopher', 'Hernandez', 'christopher.hernandez@example.com', 'password15'),
(16, 'Ashley', 'Moore', 'ashley.moore@example.com', 'password16'),
(17, 'Matthew', 'Martin', 'matthew.martin@example.com', 'password17'),
(18, 'Amanda', 'Jackson', 'amanda.jackson@example.com', 'password18'),
(19, 'Kevin', 'Lee', 'kevin.lee@example.com', 'password19'),
(20, 'Maria', 'Gonzalez', 'maria.gonzalez@example.com', 'password20'),
(21, 'YSN!', 'moundelssi', 'moundelssi.yassine.solicode@gmail.com', '74feb4e23a9061886ecb6b03168e173c'),
(22, 'Catherine', 'Nguyen', 'catherine.nguyen@example.com', 'password22'),
(23, 'Daniel', 'Smith', 'daniel.smith@example.com', 'password23'),
(24, 'Elizabeth', 'Brown', 'elizabeth.brown@example.com', 'password24'),
(25, 'Frank', 'Garcia', 'frank.garcia@example.com', 'password25'),
(26, 'Gabriela', 'Martinez', 'gabriela.martinez@example.com', 'password26'),
(27, 'Henry', 'Johnson', 'henry.johnson@example.com', 'password27'),
(28, 'Isabella', 'Davis', 'isabella.davis@example.com', 'password28'),
(29, 'Jonathan', 'Gonzalez', 'jonathan.gonzalez@example.com', 'password29'),
(30, 'Karen', 'Johnson', 'karen.johnson@example.com', 'password30'),
(31, 'Olivia', 'Garcia', 'olivia.garcia@example.com', 'password31'),
(32, 'Patrick', 'Nguyen', 'patrick.nguyen@example.com', 'password32'),
(33, 'Rachel', 'Lee', 'rachel.lee@example.com', 'password33'),
(34, 'Samuel', 'Wilson', 'samuel.wilson@example.com', 'password34'),
(35, 'Tiffany', 'Johnson', 'tiffany.johnson@example.com', 'password35'),
(36, 'Ulysses', 'Davis', 'ulysses.davis@example.com', 'password36'),
(37, 'Victoria', 'Smith', 'victoria.smith@example.com', 'password37'),
(38, 'Wendy', 'Martinez', 'wendy.martinez@example.com', 'password38'),
(39, 'Xavier', 'Jackson', 'xavier.jackson@example.com', 'password39'),
(40, 'Yvonne', 'Brown', 'yvonne.brown@example.com', 'password40'),
(41, 'Zachary', 'Thomas', 'zachary.thomas@example.com', 'password41'),
(42, 'Avery', 'Hernandez', 'avery.hernandez@example.com', 'password42'),
(43, 'Benjamin', 'Jones', 'benjamin.jones@example.com', 'password43'),
(44, 'Caroline', 'Moore', 'caroline.moore@example.com', 'password44'),
(45, 'David', 'Taylor', 'david.taylor@example.com', 'password45'),
(46, 'Emma', 'Wilson', 'emma.wilson@example.com', 'password46'),
(47, 'Felix', 'Lee', 'felix.lee@example.com', 'password47'),
(48, 'Grace', 'Gonzalez', 'grace.gonzalez@example.com', 'password48'),
(49, 'Henry', 'Martin', 'henry.martin@example.com', 'password49'),
(50, 'Isabelle', 'Anderson', 'isabelle.anderson@example.com', 'password50'),
(51, 'Jackson', 'Davis', 'jackson.davis@example.com', 'password51'),
(52, 'Kimberly', 'Johnson', 'kimberly.johnson@example.com', 'password52'),
(53, 'Liam', 'Martinez', 'liam.martinez@example.com', 'password53'),
(54, 'Mia', 'Garcia', 'mia.garcia@example.com', 'password54'),
(55, 'Nathan', 'Nguyen', 'nathan.nguyen@example.com', 'password55'),
(56, 'Oliver', 'Lee', 'oliver.lee@example.com', 'password56'),
(57, 'Penelope', 'Wilson', 'penelope.wilson@example.com', 'password57'),
(58, 'Quinn', 'Anderson', 'quinn.anderson@example.com', 'password58'),
(59, 'Riley', 'Smith', 'riley.smith@example.com', 'password59'),
(60, 'Sophia', 'Brown', 'sophia.brown@example.com', 'password60'),
(61, 'Thomas', 'Jackson', 'thomas.jackson@example.com', 'password61'),
(62, 'Uma', 'Thomas', 'uma.thomas@example.com', 'password62'),
(63, 'Victoria', 'Gonzalez', 'victoria.gonzalez@example.com', 'password63'),
(64, 'William', 'Hernandez', 'william.hernandez@example.com', 'password64'),
(65, 'Xander', 'Wilson', 'xander.wilson@example.com', 'password65'),
(66, 'Yara', 'Moore', 'yara.moore@example.com', 'password66'),
(67, 'Zoe', 'Taylor', 'zoe.taylor@example.com', 'password67'),
(68, 'Adam', 'Brown', 'adam.brown@example.com', 'password68'),
(69, 'Brianna', 'Jones', 'brianna.jones@example.com', 'password69'),
(70, 'Caleb', 'Smith', 'caleb.smith@example.com', 'password70'),
(81, 'Ethan', 'Wilson', 'ethan.wilson@example.com', 'password81'),
(82, 'Fiona', 'Jones', 'fiona.jones@example.com', 'password82'),
(83, 'Gavin', 'Nguyen', 'gavin.nguyen@example.com', 'password83'),
(84, 'Hannah', 'Lee', 'hannah.lee@example.com', 'password84'),
(85, 'Isaac', 'Martinez', 'isaac.martinez@example.com', 'password85'),
(86, 'Julia', 'Davis', 'julia.davis@example.com', 'password86'),
(87, 'Kevin', 'Anderson', 'kevin.anderson@example.com', 'password87'),
(88, 'Lila', 'Moore', 'lila.moore@example.com', 'password88'),
(89, 'Mason', 'Taylor', 'mason.taylor@example.com', 'password89'),
(90, 'Nora', 'Garcia', 'nora.garcia@example.com', 'password90'),
(91, 'Oscar', 'Brown', 'oscar.brown@example.com', 'password91'),
(92, 'Peyton', 'Jackson', 'peyton.jackson@example.com', 'password92'),
(93, 'Quentin', 'Wilson', 'quentin.wilson@example.com', 'password93'),
(94, 'Rose', 'Anderson', 'rose.anderson@example.com', 'password94'),
(95, 'Sebastian', 'Hernandez', 'sebastian.hernandez@example.com', 'password95'),
(96, 'Tessa', 'Smith', 'tessa.smith@example.com', 'password96'),
(97, 'Uriel', 'Gonzalez', 'uriel.gonzalez@example.com', 'password97'),
(98, 'Violet', 'Johnson', 'violet.johnson@example.com', 'password98'),
(99, 'Wyatt', 'Brown', 'wyatt.brown@example.com', 'password99'),
(100, 'Ximena', 'Thomas', 'ximena.thomas@example.com', 'password100'),
(200, 'Avery', 'Johnson', 'avery.johnson@example.com', 'password200'),
(201, 'Benjamin', 'Garcia', 'benjamin.garcia@example.com', 'password201'),
(202, 'Caitlyn', 'Nguyen', 'caitlyn.nguyen@example.com', 'password202'),
(203, 'Daniel', 'Wilson', 'daniel.wilson@example.com', 'password203'),
(204, 'Ella', 'Anderson', 'ella.anderson@example.com', 'password204'),
(205, 'Finn', 'Martinez', 'finn.martinez@example.com', 'password205'),
(206, 'Greta', 'Lee', 'greta.lee@example.com', 'password206'),
(207, 'Henry', 'Davis', 'henry.davis@example.com', 'password207'),
(208, 'Isabella', 'Taylor', 'isabella.taylor@example.com', 'password208'),
(209, 'Jackson', 'Brown', 'jackson.brown@example.com', 'password209'),
(210, 'mouad', 'jebbari', 'jebbari.mouad.solicode@gmail.com', '3eef4295ae3facb59f7f934e6f231e7e'),
(211, 'mouad', 'jebbari', 'mad.bari@gmail.com', 'e2ea7925cf4e98ebf8ce7da95bcdfe96'),
(212, 'mouad', 'jbr', 'mad.bari@gmail.com', '202cb962ac59075b964b07152d234b70'),
(213, 'mouad', 'jbr', 'mad.bari@gmail.com', '202cb962ac59075b964b07152d234b70'),
(214, 'test am', 'test am', 'am@gmail.com', '202cb962ac59075b964b07152d234b70'),
(215, 'test am', 'test am', 'am@gmail.com', '202cb962ac59075b964b07152d234b70'),
(216, 'test am f', 'gugug', 'mad@gmail.com', '202cb962ac59075b964b07152d234b70'),
(217, 'nina', 'contesta', 'madtesta@gmail.com', '$2y$10$819W5pJSerSuGMBHMBvQQuAgqlnjjm/Em40QF2WiUN2'),
(218, 'hafssa', 'jbbari', 'hafsajebbari@gmail.com', '7d2b92b6726c241134dae6cd3fb8c182'),
(219, 'mouad', 'jebbari', 'mouadjebbari@gmail.com', 'b8b4b727d6f5d1b61fff7be687f7970f'),
(220, 'yass', 'jbr', 'ninaesta@gmail.com', '15de21c670ae7c3f6f3f1f37029303c9'),
(221, 'hbkj', 'zhulk', 'bbbb@gmail.com', '2a79ea27c279e471f4d180b08d62b00a'),
(222, 'hbkj', 'zhulk', 'bbbb@gmail.com', '2a79ea27c279e471f4d180b08d62b00a'),
(223, 'hbkj', 'zhulk', 'bbbb@gmail.com', '2a79ea27c279e471f4d180b08d62b00a'),
(224, 'hbkj', 'zhulk', 'bbbb@gmail.com', '2a79ea27c279e471f4d180b08d62b00a'),
(225, 'hbkj', 'zhulk', 'bbbb@gmail.com', '2a79ea27c279e471f4d180b08d62b00a'),
(226, 'hbkj', 'zhulk', 'bbbb@gmail.com', '2a79ea27c279e471f4d180b08d62b00a'),
(227, 'nnn', 'bbbb', 'nhgjgj@gmail.com', '202cb962ac59075b964b07152d234b70'),
(228, 'farah', 'jebbari', 'farahjebbari@gmail.com', '$2y$10$P/3ZaFS7bUPjl3XvGTEqnuFZfu1.CLQUGR0dJA4PwqB'),
(229, 'yasmine', 'jebbari', 'yasminjebbari@gmail.com', '202cb962ac59075b964b07152d234b70'),
(230, 'mouad', 'jebbari', 'jebbari.mouad.solicode@gmail.com', '$2y$10$BogC5Sf7K0lu3IoWPbeNU.aoEsf4fdrC7qjnE3VdbVv'),
(231, 'mouad', 'jebbari', 'mouadjbr@gmail.com', 'b8b4b727d6f5d1b61fff7be687f7970f'),
(232, 'mouad', 'jebbari', 'jebbari.mouad.solicode@gmail.com', 'b8b4b727d6f5d1b61fff7be687f7970f'),
(233, 'mouad', 'jebbari', 'jebbari-mouad@ofppt.ma', '202cb962ac59075b964b07152d234b70'),
(234, 'mouad', 'jebbari', 'user@example.com', 'b58996c504c5638798eb6b511e6f49af'),
(235, 'mouad', 'jebbari', 'madbari@gmail.com', '723d4d51ee989084433bd1b2b319b4a3'),
(236, 'mouad', 'jebbari', 'jebbari.mouad.solicode@gmail.com', '6ce802e59945459501f8f13a89fc6072'),
(237, 'imane', 'imane', 'jebbari.mouad.solicode@gmail.com', '$2y$10$ajfiEnltKwM2pqLXbQh.1OgU7iFwKkxsIYk9Smq8Qeg'),
(238, 'imane', 'imane', 'jebbari.mouad.solicode@gmail.com', '6ce802e59945459501f8f13a89fc6072');

-- --------------------------------------------------------

--
-- Structure de la table `awards`
--

CREATE TABLE `awards` (
  `id` int(11) NOT NULL,
  `award_name` varchar(255) DEFAULT NULL,
  `award_description` text DEFAULT NULL,
  `awarded_by` varchar(255) DEFAULT NULL,
  `awarded_to` varchar(255) DEFAULT NULL,
  `award_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `awards`
--

INSERT INTO `awards` (`id`, `award_name`, `award_description`, `awarded_by`, `awarded_to`, `award_date`) VALUES
(1, 'Best Employee of the Year', 'Awarded to the employee who demonstrated exceptional performance throughout the year', 'ABC Corporation', 'John Doe', '2022-01-01'),
(2, 'Best Employee of the Year', 'Awarded to the employee who demonstrated exceptional performance throughout the year', 'ABC Corporation', 'John Doe', '2022-01-01'),
(3, 'Outstanding Contribution to the Community', 'Awarded to the individual who made significant contributions to the local community', 'XYZ Foundation', 'Jane Smith', '2022-02-15'),
(4, 'Innovation Award', 'Awarded to the team that developed the most innovative product of the year', 'ACME Inc.', 'Product Development Team', '2022-03-31'),
(8, 'fdgfdgdfg', 'dfgdfgdfgdf', 'fdgfdgfdg', 'fdgfdgdf', NULL),
(30, 'Award 30', 'Description for Award 30', 'Awarder 30', 'Recipient 30', '2023-04-20'),
(31, 'Award 31', 'Description for Award 31', 'Awarder 31', 'Recipient 31', '2023-04-21'),
(32, 'Award 32', 'Description for Award 32', 'Awarder 32', 'Recipient 32', '2023-04-22'),
(33, 'Award 33', 'Description for Award 33', 'Awarder 33', 'Recipient 33', '2023-04-23'),
(34, 'Award 34', 'Description for Award 34', 'Awarder 34', 'Recipient 34', '2023-04-24'),
(35, 'Award 35', 'Description for Award 35', 'Awarder 35', 'Recipient 35', '2023-04-25'),
(36, 'Award 36', 'Description for Award 36', 'Awarder 36', 'Recipient 36', '2023-04-26'),
(37, 'Award 37', 'Description for Award 37', 'Awarder 37', 'Recipient 37', '2023-04-27'),
(38, 'Award 38', 'Description for Award 38', 'Awarder 38', 'Recipient 38', '2023-04-28'),
(39, 'Award 39', 'Description for Award 39', 'Awarder 39', 'Recipient 39', '2023-04-29'),
(40, 'Award 40', 'Description for Award 40', 'Awarder 40', 'Recipient 40', '2023-04-30'),
(41, 'Award 41', 'Description for Award 41', 'Awarder 41', 'Recipient 41', '2023-05-01'),
(42, 'Award 42', 'Description for Award 42', 'Awarder 42', 'Recipient 42', '2023-05-02'),
(43, 'Award 43', 'Description for Award 43', 'Awarder 43', 'Recipient 43', '2023-05-03'),
(44, 'Award 44', 'Description for Award 44', 'Awarder 44', 'Recipient 44', '2023-05-04'),
(45, 'Award 45', 'Description for Award 45', 'Awarder 45', 'Recipient 45', '2023-05-05'),
(46, 'Award 46', 'Description for Award 46', 'Awarder 46', 'Recipient 46', '2023-05-06'),
(47, 'Award 47', 'Description for Award 47', 'Awarder 47', 'Recipient 47', '2023-05-07'),
(48, 'Award 48', 'Description for Award 48', 'Awarder 48', 'Recipient 48', '2023-05-08'),
(49, 'Award 49', 'Description for Award 49', 'Awarder 49', 'Recipient 49', '2023-05-09'),
(50, 'Award 50', 'Description for Award 50', 'Awarder 50', 'Recipient 50', '2023-05-10'),
(51, 'Award 51', 'Description for Award 51', 'Awarder 51', 'Recipient 51', '2023-05-11'),
(52, 'Award 52', 'Description for Award 52', 'Awarder 52', 'Recipient 52', '2023-05-12'),
(53, 'Award 53', 'Description for Award 53', 'Awarder 53', 'Recipient 53', '2023-05-13'),
(54, 'Award 54', 'Description for Award 54', 'Awarder 54', 'Recipient 54', '2023-05-14'),
(55, 'Award 55', 'Description for Award 55', 'Awarder 55', 'Recipient 55', '2023-05-15'),
(56, 'Award 56', 'Description for Award 56', 'Awarder 56', 'Recipient 56', '2023-05-16'),
(57, 'Award 57', 'Description for Award 57', 'Awarder 57', 'Recipient 57', '2023-05-17'),
(58, 'Award 58', 'Description for Award 58', 'Awarder 58', 'Recipient 58', '2023-05-18'),
(59, 'Award 59', 'Description for Award 59', 'Awarder 59', 'Recipient 59', '2023-05-19'),
(60, 'Award 60', 'Description for Award 60', 'Awarder 60', 'Recipient 60', '2023-05-20'),
(61, 'Award 61', 'Description for Award 61', 'Awarder 61', 'Recipient 61', '2023-05-21'),
(62, 'Award 62', 'Description for Award 62', 'Awarder 62', 'Recipient 62', '2023-05-22'),
(63, 'Award 63', 'Description for Award 63', 'Awarder 63', 'Recipient 63', '2023-05-23'),
(64, 'Award 64', 'Description for Award 64', 'Awarder 64', 'Recipient 64', '2023-05-24'),
(65, 'Award 65', 'Description for Award 65', 'Awarder 65', 'Recipient 65', '2023-05-25'),
(66, 'Award 66', 'Description for Award 66', 'Awarder 66', 'Recipient 66', '2023-05-26');

-- --------------------------------------------------------

--
-- Structure de la table `formateur`
--

CREATE TABLE `formateur` (
  `id_formateur` int(50) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formateur`
--

INSERT INTO `formateur` (`id_formateur`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'mr', 'bilal', 'bilal1234@formateur.com', '1234'),
(2, 'med', 'allali', 'med123solicode@formateur.com', '098765'),
(6, 'Karen', 'Davis', 'karenavis@example.com', 'password6'),
(7, 'David', 'Garcia', 'davidgarcia@example.com', 'password7'),
(8, 'Laura', 'Martinez', 'lauramartinez@example.com', 'password8'),
(9, 'Kevin', 'Lopez', 'kevinlopez@example.com', 'password9'),
(10, 'Emily', 'Lee', 'emilylee@example.com', 'password10'),
(11, 'Michael', 'Rodriguez', 'michaelrodriguez@example.com', 'password11'),
(12, 'Jessica', 'Davis', 'jessicadavis@example.com', 'password12'),
(13, 'James', 'Brown', 'jamesbrown@example.com', 'password13'),
(14, 'Maria', 'Garcia', 'mariagarcia@example.com', 'password14'),
(15, 'Daniel', 'Wilson', 'danielwilson@example.com', 'password15'),
(16, 'Ashley', 'Anderson', 'ashleyanderson@example.com', 'password16'),
(17, 'Christopher', 'Thomas', 'christopherthomas@example.com', 'password17'),
(18, 'Stephanie', 'Moore', 'stephaniemoore@example.com', 'password18'),
(19, 'Joseph', 'Jackson', 'josephjackson@example.com', 'password19'),
(20, 'Amanda', 'Martin', 'amandamartin@example.com', 'password20'),
(21, 'William', 'Lee', 'williamlee@example.com', 'password21'),
(22, 'Melissa', 'Taylor', 'melissataylor@example.com', 'password22'),
(23, 'Ryan', 'Thompson', 'ryanthompson@example.com', 'password23'),
(24, 'Elizabeth', 'White', 'elizabethwhite@example.com', 'password24'),
(25, 'Nicholas', 'Harris', 'nicholasharris@example.com', 'password25'),
(26, 'Megan', 'Clark', 'meganclark@example.com', 'password26'),
(27, 'Brandon', 'Lewis', 'brandonlewis@example.com', 'password27'),
(28, 'Lauren', 'Robinson', 'laurenrobinson@example.com', 'password28'),
(29, 'Jacob', 'Walker', 'jacobwalker@example.com', 'password29'),
(30, 'Taylor', 'Young', 'tayloryoung@example.com', 'password30');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE `formation` (
  `id_formation` int(50) NOT NULL,
  `sujet` varchar(50) DEFAULT NULL,
  `categorie` varchar(50) DEFAULT NULL,
  `masse_horaire` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id_formation`, `sujet`, `categorie`, `masse_horaire`, `description`, `image`) VALUES
(1, 'HTML', 'Web Design', '12', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://repository-images.githubusercontent.com/486226419/99587ec7-b54b-4ccc-9d8e-eae9cbbc6f9e'),
(2, 'CSS', 'Web Design', '10', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://www.tutorialrepublic.com/lib/images/css-illustration.png'),
(3, 'JavaScript', 'Web Design', '15', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://miro.medium.com/v2/resize:fit:2000/format:webp/1*BPSx-c--z6r7tY29L19ukQ.png'),
(4, 'Game Design Fundamentals', 'Game Design', '20', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://image.slidesharecdn.com/gamedesignfundamentals-formal-200406193230/75/game-design-fundamentals-the-formal-elements-1-2048.jpg?cb=1666622671'),
(5, 'Mobile App Design', 'Apps Design', '18', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://www.ideatheorem.com/wp-content/uploads/2021/05/Group-1638-full.png'),
(6, 'Research Design', 'Research', '8', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://www.voxco.com/wp-content/uploads/2021/10/RESEARCH1-scaled-1536x1087.jpg'),
(7, 'Digital Marketing', 'Marketing', '12', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://leverageedublog.s3.ap-south-1.amazonaws.com/blog/wp-content/uploads/2020/06/05174400/Types-of-Digital-Marketing-800x500.png'),
(8, 'Search Engine Marketing', 'SEO', '10', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://cdn.shopify.com/s/files/1/0070/7032/files/search_engine_marketing.png?format=webp&v=1650662771&width=1024'),
(9, 'Agile Development', 'Development', '15', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://www.devstringx.com/wp-content/uploads/2022/01/AGILE-METHODOLOGY-new-scaled.jpg'),
(10, 'Responsive Web Design', 'Web Design', '10', 'Some quick example text to build on the card title and make up the bulk of the cards content', 'https://www.adeoinformatique.com/contenu/uploads/2019/02/Responsive_Website_Design-2-768x426.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id_apprenant` int(50) NOT NULL,
  `id_session` int(50) NOT NULL,
  `resultat` varchar(50) DEFAULT NULL,
  `date_validation` varchar(50) DEFAULT NULL,
  `date_inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id_apprenant`, `id_session`, `resultat`, `date_validation`, `date_inscription`) VALUES
(2, 1, 'valide', NULL, NULL),
(219, 7, 'valide', NULL, '2023-05-08 23:11:36'),
(228, 7, 'valide', NULL, '2023-05-08 23:31:58'),
(230, 7, 'valide', NULL, '2023-05-09 12:00:58'),
(231, 2, 'valide', NULL, '2023-05-09 12:28:21'),
(231, 3, 'valide', NULL, '2023-05-09 12:29:51'),
(232, 1, 'valide', NULL, '2023-05-09 15:37:00'),
(233, 7, 'valide', NULL, '2023-05-11 13:43:29'),
(236, 4, NULL, NULL, '2023-05-19 12:34:14'),
(236, 7, NULL, NULL, '2023-05-18 09:15:58');

--
-- Déclencheurs `inscription`
--
DELIMITER $$
CREATE TRIGGER `prévenir` AFTER INSERT ON `inscription` FOR EACH ROW BEGIN
    DECLARE max_capacity INT;
    DECLARE num_registered INT;

    SELECT nombre_places_max INTO max_capacity FROM session WHERE id_session = NEW.id_session;
    SELECT COUNT(*) INTO num_registered FROM inscription WHERE id_session = NEW.id_session;

    IF num_registered >= 3 THEN
        UPDATE session SET etat = 'Annulée' WHERE id_session = NEW.id_session 
        AND date_debut < NOW();
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `prévenir_surcapacité` AFTER INSERT ON `inscription` FOR EACH ROW BEGIN
DECLARE max_capacity INT;
DECLARE num_registered INT;

SELECT nombre_places_max INTO max_capacity FROM session WHERE id_session = NEW.id_session;
SELECT COUNT(*) INTO num_registered FROM inscription WHERE id_session = NEW.id_session;

IF num_registered = max_capacity THEN
	UPDATE session SET etat = 'Inscription achevée' WHERE id_session = NEW.id_session;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `id_session` int(50) NOT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `nombre_places_max` int(5) DEFAULT NULL,
  `etat` varchar(50) DEFAULT NULL,
  `id_formation` int(50) NOT NULL,
  `id_formateur` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`id_session`, `date_debut`, `date_fin`, `nombre_places_max`, `etat`, `id_formation`, `id_formateur`) VALUES
(1, '2023-05-01', '2023-05-15', 3, 'clôturée', 4, 2),
(2, '2023-05-17', '2023-05-26', 1, 'Annulée', 4, 1),
(3, '2023-05-05', '2023-05-14', 32, 'clôturée', 9, 1),
(4, '2023-07-01', '2023-07-31', 25, 'en cours dinscription', 4, 2),
(5, '2023-08-01', '2023-05-12', 30, 'clôturée', 10, 1),
(6, '2022-01-02', '2022-01-03', 10, 'clôturée', 5, 1),
(7, '2023-09-01', '2023-09-30', 18, 'en cours dinscription', 1, 2),
(8, '2023-04-20', '2023-05-05', 22, 'clôturée', 2, 2),
(9, '2023-04-01', '2023-05-30', 10, 'en cours dinscription', 3, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apprenant`
--
ALTER TABLE `apprenant`
  ADD PRIMARY KEY (`id_apprenant`);

--
-- Index pour la table `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formateur`
--
ALTER TABLE `formateur`
  ADD PRIMARY KEY (`id_formateur`);

--
-- Index pour la table `formation`
--
ALTER TABLE `formation`
  ADD PRIMARY KEY (`id_formation`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id_apprenant`,`id_session`),
  ADD KEY `id_session` (`id_session`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id_session`),
  ADD KEY `id_formation` (`id_formation`),
  ADD KEY `id_formateur` (`id_formateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apprenant`
--
ALTER TABLE `apprenant`
  MODIFY `id_apprenant` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=239;

--
-- AUTO_INCREMENT pour la table `awards`
--
ALTER TABLE `awards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT pour la table `formateur`
--
ALTER TABLE `formateur`
  MODIFY `id_formateur` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `formation`
--
ALTER TABLE `formation`
  MODIFY `id_formation` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `id_session` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_ibfk_1` FOREIGN KEY (`id_apprenant`) REFERENCES `apprenant` (`id_apprenant`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription_ibfk_2` FOREIGN KEY (`id_session`) REFERENCES `session` (`id_session`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `session`
--
ALTER TABLE `session`
  ADD CONSTRAINT `session_ibfk_1` FOREIGN KEY (`id_formation`) REFERENCES `formation` (`id_formation`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `session_ibfk_2` FOREIGN KEY (`id_formateur`) REFERENCES `formateur` (`id_formateur`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Évènements
--
CREATE DEFINER=`root`@`localhost` EVENT `cancel_sessions_without_enough_registrations` ON SCHEDULE EVERY 1 HOUR STARTS '2023-05-11 13:40:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE session s
SET s.etat = 'Annulée'
WHERE s.date_debut = CURDATE() 
AND (SELECT COUNT(*) FROM inscription i WHERE i.id_session = s.id_session) < 3$$

CREATE DEFINER=`root`@`localhost` EVENT `update_session` ON SCHEDULE EVERY 1 DAY STARTS '2023-05-12 13:21:00' ON COMPLETION NOT PRESERVE ENABLE DO UPDATE session s
SET s.date_fin = DATE_ADD(s.date_fin, INTERVAL 12 HOUR), s.etat = 'clôturée'
WHERE s.date_fin <= CURDATE() AND s.etat NOT IN ('completed', 'clôturée')$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
