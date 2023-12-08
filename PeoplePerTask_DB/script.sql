-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2023 at 08:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peoplepertask`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `app_development`
-- (See below for the actual view)
--
CREATE TABLE `app_development` (
`prject_type` varchar(30)
,`project_description` varchar(200)
,`title` varchar(50)
,`user_name` varchar(25)
);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `CategoryName` varchar(30) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `description` text,
  `category_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `CategoryName`, `image`, `description`, `category_id`) VALUES
(2, 'Music', 'categoryMicrophone.svg', 'Audio ,Vidéo music', NULL),
(3, 'Graphisme', 'categoryillustration.svg', '2D, 3D, Animation graphique, Vidéo, Web design, Logo design,...', NULL),
(4, 'Marketing & Vente', 'categoryillustration.svg', 'Stratégie Marketing, SEO, Social Media, Commercial, Assistant,...', NULL),
(5, 'Photographer', 'categoryPhotographer.svg', '', NULL),
(33, 'DEVELOPPEMENT', 'categorycoding.svg', '.Net, PHP, JavaScript, Python, Swift, Java, Cobol,...', NULL),
(34, 'BDD, Réseau & Cloud', 'categoryillustration.svg', 'Microsoft Azure, Oracle, Amazon, Cisco, Audit, Administration...', NULL),
(35, 'E-commerce, CMS & ERP', 'categoryillustration.svg', 'Wordpress, Sharepoint, SAP, SAGE, Odoo, Drupal, Joomla,...', NULL),
(36, 'Rédaction & Traduction', 'categoryillustration.svg', 'Rédaction Fr, Rédaction Ar, Rédaction Eng, Traduction Fr-Eng,...', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `freelance_skills`
--

CREATE TABLE `freelance_skills` (
  `id` int NOT NULL,
  `skills_id` int NOT NULL,
  `freelance_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `freelance_skills`
--

INSERT INTO `freelance_skills` (`id`, `skills_id`, `freelance_id`) VALUES
(14, 30, 41),
(15, 37, 47),
(30, 1, 47),
(31, 35, 47),
(32, 38, 47);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `description` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `amount` float NOT NULL,
  `deadline` date DEFAULT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `image` varchar(256) DEFAULT NULL,
  `ID_Freelance` int NOT NULL,
  `Id_project` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title`, `description`, `amount`, `deadline`, `detail`, `image`, `ID_Freelance`, `Id_project`) VALUES
(1, NULL, NULL, 800, '2023-12-31', NULL, NULL, 1, 1),
(2, NULL, NULL, 400, '2023-12-20', NULL, NULL, 2, 2),
(3, NULL, NULL, 600, '2023-12-25', NULL, NULL, 3, 3),
(4, NULL, NULL, 300, '2023-12-18', NULL, NULL, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int NOT NULL,
  `title` varchar(50) NOT NULL,
  `project_description` varchar(200) NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'data.jpeg',
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `budget` float NOT NULL,
  `budget_type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `currency` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `id_categorie` int DEFAULT NULL,
  `id_sub_category` int DEFAULT NULL,
  `freelance_id` int DEFAULT NULL,
  `ID_user` int NOT NULL,
  `deadline` date DEFAULT NULL,
  `status` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `project_description`, `detail`, `image`, `creationDate`, `budget`, `budget_type`, `currency`, `id_categorie`, `id_sub_category`, `freelance_id`, `ID_user`, `deadline`, `status`) VALUES
(1, 'E-commerce Website', 'Develop an online store', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 3, NULL, 43, 1, NULL, 'N'),
(2, 'Blog Writing', 'Write SEO optitestimonialstestimonialsmized articles', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 2, 2, NULL, 2, NULL, 'N'),
(3, 'Logo Design', 'Create a company logo', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 3, 3, NULL, 3, NULL, 'N'),
(4, 'Data Analysis Report', 'Analyze and present data in a comprehensive report', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 4, 3, NULL, 3, NULL, 'N'),
(5, 'Professional Photography Session', 'Capture professional photos for a portfolio', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 4, 3, NULL, 1, NULL, 'N'),
(7, 'Compose Original Music', 'Create original music track for a video game', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 2, 4, NULL, 3, NULL, 'N'),
(8, 'Project Management Assistance', 'Assist in project planning and coordination', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 4, 5, NULL, 2, NULL, 'N'),
(10, 'Illustrate Children\s Book', 'Illustrate characters and scenes for a book', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 3, 5, NULL, 3, NULL, 'N'),
(11, 'Cumque voluptatem A', 'Amet sequi incididu', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 35, 4, NULL, 12, NULL, 'N'),
(15, 'Eaque fugit sequi o', 'Sed eligendi labore ', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 2, 3, NULL, 3, NULL, 'N'),
(16, 'Eaque fugit sequi o', 'Sed eligendi labore ', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 2, 3, NULL, 3, NULL, 'N'),
(17, 'Commodo blanditiis r', 'Qui temporibus recus', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 4, 6, NULL, 1, NULL, 'N'),
(18, 'Commodo blanditiis r', 'Qui temporibus recus', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 4, 6, NULL, 1, NULL, 'N'),
(20, 'Consequatur nostrud ', 'Duis quibusdam et re', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 5, NULL, NULL, 2, NULL, 'N'),
(25, 'Similique facere fug', 'Dolores consequatur', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 3, 3, NULL, 2, NULL, 'N'),
(28, 'Quasi assumenda id ', 'Ullam dolor ab iusto', '', 'pro.jpeg', '2023-12-03 16:26:08', 0, '0', '0', 3, 7, NULL, 1, NULL, 'N'),
(2345, '456POKJHG', 'DFGHJKLM', 'DFGHJKLM%', 'data.jpeg', '2023-12-05 21:40:42', 55, 'FHH', '£', 33, 3, 19, 9, '2023-12-05', 'Y'),
(2346, 'Ducimus aute volupt', 'Eos est minus aliqu', '<p>Hello, World!</p>', 'data.jpeg', '2023-12-05 22:00:54', 37, 'price', 'EUR', 3, 3, NULL, 46, '1984-02-15', 'N'),
(2347, 'Et incidunt quasi v', 'Eos minus ut est v', '<p>Hello, World!</p>', 'data.jpeg', '2023-12-05 22:00:59', 47, 'price', 'USA', 3, 3, NULL, 46, '2016-07-04', 'N'),
(2348, 'Voluptate modi dolor', 'Est mollitia fugiat', '<p><span style=\"text-decoration: underline;\">Hello, World!</span></p>\r\n<p><span style=\"text-decoration: underline;\">dsfuyiozds*ded</span></p>\r\n<p><span style=\"text-decoration: underline;\"><strong>sdfchizesokdc</strong></span></p>\r\n<p>ezsdxyuciqsw</p>', 'data.jpeg', '2023-12-05 22:02:05', 2, 'price', 'USA', 3, 3, NULL, 46, '1994-02-27', 'N'),
(2349, 'Consequatur Laboris', 'Numquam quam rerum e', '<p>Hello, World!</p>', '3fbe7f40d9a09f71248e684d07419eca.jpg', '2023-12-05 22:15:25', 13, 'price', 'USA', 3, 3, NULL, 46, '1984-04-12', 'N'),
(2350, 'Consequatur Laboris', 'Numquam quam rerum e', '<p class=\"p-5\">Hello, World!</p>', 'data.jpeg', '2023-12-05 22:22:42', 13, 'price', 'USA', 3, 3, NULL, 46, '1984-04-12', 'N'),
(2351, 'Eveniet voluptas et', 'Qui ea repellendus x\r\nsgxjkhjw', '<p>Hello, World!</p>\r\n<p><strong>sguhjhqws</strong></p>\r\n<p><strong>sfqsghjxklmwckb sdxklcb oudsx&nbsp;</strong></p>\r\n<p><strong>cxcv&nbsp;</strong></p>\r\n<p><strong>sdcx&nbsp;</strong></p>\r\n<p><strong>df g dddddddddddvsdjbc nsdjkbc bkjncxljbc sl k hbksxc</strong></p>\r\n<p><strong>sdxjhbci ndslkb kcbkj sdjxknckj dskjx</strong></p>', 'js.jpeg', '2023-12-06 16:31:24', 24, 'hour', 'USA', 3, 3, NULL, 46, '1985-06-04', 'N'),
(2352, 'A dolore aut hic ali', 'Harum ex iste aut es', 'Est ea cupiditate in', 'java.jpeg', '2023-12-06 16:31:49', 25, 'price', 'EUR', 3, 3, NULL, 46, '2022-05-17', 'N'),
(2355, 'sdfg', 'sdfgh', '<p>Hello, World!</p>\r\n<p>sdfgg</p>\r\n<p>dsfdgfhgjg</p>', 'java.jpeg', '2023-12-06 22:28:33', 234, 'hour', 'USA', 3, 3, NULL, 48, '2023-11-28', 'N'),
(2356, 'qsdfg', 'sdfghjk', '<p>Hello, World!</p>', 'tr.jpeg', '2023-12-06 23:00:04', 4567, 'price', 'USA', 3, 3, NULL, 48, '2023-11-29', 'N'),
(2357, 'f', 'fgh', '<p>Hello, World!</p>', 'tr.jpeg', '2023-12-06 23:01:35', 345, 'price', 'USA', 3, 3, 47, 48, '2023-12-22', 'Y'),
(2358, 'Aut debitis ex et co', 'Distinctio Et aut u', '<p>Hello, World!</p>', 'Vector.png', '2023-12-06 23:04:55', 79, 'hour', 'USA', 3, 3, NULL, 46, '2015-10-18', 'N'),
(2359, 'Quia natus quis repu', 'Iste eius eu expedit', '<p>Hello, World!</p>', 'mb.jpeg', '2023-12-06 23:07:50', 13, 'hour', 'EUR', 3, 3, NULL, 46, '1975-11-24', 'N'),
(2360, 'bj', 'vbnvbn', '<p>Hello, World!cfgh</p>', 's.jpg', '2023-12-07 16:13:03', 345, 'price', 'USA', 3, 3, 47, 48, '2023-12-12', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `project_tags`
--

CREATE TABLE `project_tags` (
  `id` int NOT NULL,
  `tag_id` int NOT NULL,
  `project_id` int DEFAULT NULL,
  `offer_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project_tags`
--

INSERT INTO `project_tags` (`id`, `tag_id`, `project_id`, `offer_id`) VALUES
(1, 1, 2358, NULL),
(2, 2, 2358, NULL),
(3, 1, 2359, NULL),
(4, 2, 2359, NULL),
(5, 3, 2359, NULL),
(6, 4, 2359, NULL),
(7, 5, 2359, NULL),
(8, 1, 2360, NULL),
(9, 2, 2360, NULL),
(10, 3, 2360, NULL),
(11, 6, 2360, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `proposal`
--

CREATE TABLE `proposal` (
  `id` int NOT NULL,
  `freelance_id` int NOT NULL,
  `project_id` int NOT NULL,
  `sendDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `proposal`
--

INSERT INTO `proposal` (`id`, `freelance_id`, `project_id`, `sendDate`) VALUES
(3, 47, 2351, '2023-12-06 22:22:58'),
(4, 47, 2359, '2023-12-06 23:10:52'),
(6, 47, 2357, '2023-12-07 18:23:09'),
(7, 47, 2360, '2023-12-08 12:38:45'),
(8, 47, 2, '2023-12-08 14:45:09');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int NOT NULL,
  `region` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region`) VALUES
(1, 'Tanger-Tétouan-Al Hoceïma'),
(2, 'l\Oriental'),
(3, 'Fès-Meknès'),
(4, 'Rabat-Salé-Kénitra'),
(5, 'Béni Mellal-Khénifra'),
(6, 'Casablanca-Settat'),
(7, 'Marrakech-Safi'),
(8, 'Drâa-Tafilalet'),
(9, 'Souss-Massa'),
(10, 'Guelmim-Oued Noun'),
(11, 'Laâyoune-Sakia El Hamra'),
(12, 'Dakhla-Oued Ed Dahab');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`) VALUES
(37, 'Angular'),
(38, 'C++'),
(39, 'Data Analysis'),
(41, 'Graphic Design'),
(34, 'HTML/CSS'),
(33, 'Java'),
(30, 'JavaScript'),
(36, 'Node.js'),
(1, 'php'),
(40, 'Project Management'),
(31, 'Python'),
(35, 'React'),
(32, 'SQL'),
(42, 'UI/UX Design');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int NOT NULL,
  `subName` varchar(30) NOT NULL,
  `id_category` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `subName`, `id_category`) VALUES
(2, 'Content Creation', 2),
(3, 'Graphic Design', 3),
(4, 'Music Production', 4),
(5, 'Project Planning', 5),
(6, 'Social Media Management', 2),
(7, 'Illustration', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int NOT NULL,
  `tagName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tagName`) VALUES
(3, 'css'),
(2, 'html'),
(4, 'javascript'),
(6, 'ldkcj'),
(1, 'php'),
(5, 'sql');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int NOT NULL,
  `description` varchar(150) NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `description`, `status`, `user_id`) VALUES
(2, 'Finish task update', 'img/warning.svg', 1),
(3, 'Create new task example', 'img/successnew.svg', 1),
(4, 'Update cliens report', 'img/default.svg', 1),
(5, 'Create new task example', 'img/default.svg', 1),
(6, 'ghjkl', 'img/default.svg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int NOT NULL,
  `Commentaire` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ID_user` int DEFAULT NULL,
  `date_c` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `Commentaire`, `ID_user`, `date_c`) VALUES
(8, 'I had a fantastic experience with this company. Their products are top-notch, and their customer service is excellent. I highly recommend them!', 1, '2023-11-26 00:00:00'),
(9, 'I recently used their services, and I\'m incredibly satisfied. The team was responsive, professional, and the final product exceeded my expectations. I highly recommend them!', 4, '2023-11-26 00:00:00'),
(10, 'I\'ve been a loyal customer for years. The quality of their services is outstanding, and they always go the extra mile to meet our needs. Truly remarkable!\r\n\r\n', 2, '2023-11-25 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_user` int NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `firstName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `userPassword` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date DEFAULT NULL,
  `City` int DEFAULT NULL,
  `PostalCode` varchar(5) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ROLE` enum('freelance','user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'user',
  `userimage` varchar(256) NOT NULL DEFAULT 'profil.jpg',
  `profile_status` enum('Y','N') DEFAULT NULL,
  `biography` text,
  `language` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_user`, `user_name`, `firstName`, `lastName`, `phone`, `userPassword`, `email`, `birthday`, `City`, `PostalCode`, `job`, `creationDate`, `ROLE`, `userimage`, `profile_status`, `biography`, `language`) VALUES
(1, 'lahcen ben', NULL, NULL, NULL, 'ben2020', 'lahcen.ben3@gmail.com', '2002-02-02', 1, '52425', 'student', '2023-12-01 10:36:28', 'freelance', 'lahcen.jpg', NULL, NULL, NULL),
(2, 'abdlghani', NULL, NULL, NULL, 'lghani99', 'ayt.tamghart@gmail.com', '2001-01-01', 3, '54425', 'CEO', '2023-12-01 10:36:28', 'freelance', 'abdelghani.jpg', NULL, NULL, NULL),
(3, 'Rached', NULL, NULL, NULL, 'dhijd34', 'rachid.zazate@gmail.com', '2000-12-22', 6, '59825', 'Artist', '2023-12-01 10:36:28', 'freelance', 'profil.jpg', NULL, NULL, NULL),
(4, 'Khalid oukha', NULL, NULL, NULL, 'enihd3', 'morad.oziki@gmail.com', '2001-04-02', 23, '52245', NULL, '2023-12-01 10:36:28', 'freelance', 'oukha.jpg', NULL, NULL, NULL),
(9, 'CDS', NULL, NULL, NULL, 'bhzsu', 'jhxi@HSXIH.SY', '2023-11-30', 87, '23456', NULL, '2023-12-01 10:36:28', 'user', 'profil.jpg', NULL, NULL, NULL),
(10, 'lahcen', NULL, NULL, NULL, 'jkjed', 'ginsan.ben3@gmail.com', '2023-11-10', 16, '23456', NULL, '2023-12-01 10:36:28', 'user', 'profil.jpg', NULL, NULL, NULL),
(12, 'solaiman', NULL, NULL, NULL, 'lllllahu', 'javascript_man@gmail.com', '2001-06-27', 155, '52663', NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(19, 'Beatrice Vincent', NULL, NULL, NULL, 'Pa$$w0rd!', 'syzemaqyzo@mailinator.com', '1996-08-04', 9, '2345', NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(20, 'Illiana Chan', NULL, NULL, NULL, 'Pa$$w0rd!', 'kycezo@mailinator.com', '2009-07-26', 324, '3333', NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(21, 'Ivana Delgado', NULL, NULL, NULL, 'Pa$$w0rd!', 'zomyl@mailinator.com', '2010-06-16', 357, '333', NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(23, 'woviqob', NULL, NULL, NULL, 'Pa$$w0rd!', 'risyso@mailinator.com', '1977-02-01', NULL, NULL, NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(24, 'hizegywab', NULL, NULL, NULL, 'Pa$$w0rd!', 'fuxokonuwy@mailinator.com', '1970-06-09', NULL, NULL, NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(25, 'piquna', NULL, NULL, NULL, 'qfsdghjk', 'peqoj@mailinator.com', '1975-10-14', NULL, NULL, NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(26, 'cywofuxip', NULL, NULL, NULL, 'Pa$$w0rd!', 'kizeteh@mailinator.com', '2021-06-27', NULL, NULL, NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(27, 'jifotih', NULL, NULL, NULL, 'Pa$$w0rd!', 'bolewexag@mailinator.com', '2022-02-21', NULL, NULL, NULL, '2023-12-01 10:36:28', NULL, 'profil.jpg', NULL, NULL, NULL),
(31, 'lahcen.ben', NULL, NULL, NULL, '$2y$10$KFLYS5BQN7YgJxC4VghVe.RdPGDQYeIteqANaTUmjqBNg6R7o4usu', 'ginsan@gmail.com', '2023-11-23', NULL, NULL, NULL, '2023-12-01 10:36:28', 'freelance', 'profil.jpg', NULL, NULL, NULL),
(32, 'timexuqos', NULL, NULL, NULL, '$2y$10$ljyY7JGrjKttSjmUgGVhTOa026TaYx5OburH8iyFJeE0siRTWCN9G', 'vafunihyw@mailinator.com', '1999-02-15', NULL, NULL, NULL, '2023-12-01 10:36:28', 'freelance', 'profil.jpg', NULL, NULL, NULL),
(33, 'holekefuni', NULL, NULL, NULL, '$2y$10$dPbFU64yn4pCyh0P0DB9U.YmBAUfyjWdQVbca5omIF.jOvUuPH28O', 'xesabyv@mailinator.com', '2012-02-17', NULL, NULL, NULL, '2023-12-01 10:36:28', 'freelance', 'profil.jpg', NULL, NULL, NULL),
(34, 'gin2002', NULL, NULL, NULL, '$2y$10$edO/I37iVAQHNxm/pje59.2HcoOstQSeP22LZSInu5eAlZ20ldNCu', 'degodaqa@mailinator.com', '2017-08-09', NULL, NULL, NULL, '2023-12-01 10:36:28', 'admin', 'profil.jpg', NULL, NULL, NULL),
(35, 'suficywape', NULL, NULL, NULL, '$2y$10$duR6Nf9/xmdcM7q7.Zlbn.45ZKuOWasUv5mcRkVyZcMGCGg0i.kJi', 'kohipyx@mailinator.com', '1992-07-25', NULL, NULL, NULL, '2023-12-01 10:36:28', 'user', 'profil.jpg', NULL, NULL, NULL),
(36, 'bejokujyr', NULL, NULL, NULL, '$2y$10$YtZQsfYze.xCRuDrH3/EjOUl62uLFHvKpQ2YE9BKUJ7M.ZrQeFFaq', 'kowititeh@mailinator.com', '1990-11-02', 160, NULL, NULL, '2023-12-01 10:36:28', 'admin', 'profil.jpg', NULL, NULL, NULL),
(37, 'testr', NULL, NULL, NULL, '$2y$10$3K9fT5.WnLVGpiT/DtNk7eeHOZdapxTM3ebuDtUxhEg/h2b3ge2xC', 'silomehipi@mailinator.com', '1996-10-06', NULL, NULL, NULL, '2023-12-01 11:16:52', 'user', 'profil.jpg', NULL, NULL, NULL),
(38, 'cymoc', NULL, NULL, NULL, '$2y$10$XKHXlyQB5B4D8QuRNd4Ax.jh2Txv.w2pCo19J49H/hsKltmwJVR.m', 'zemiduq@mailinator.com', '2007-07-10', NULL, NULL, NULL, '2023-12-01 12:28:05', 'user', 'profil.jpg', NULL, NULL, NULL),
(41, 'cuziguhi', 'Holly', 'Henson', '+1 (418) 226-2754', '$2y$10$5NqiU3NRavUsz9nXUET8zuxhM6ytk1R17lUDKxM3RWdsLbsk.dree', 'hilocyk@mailinator.com', '2009-06-18', 155, '52', 'Numquam in iste enim', '2023-12-03 16:53:00', 'admin', '913-1697015825.jpg', NULL, NULL, NULL),
(43, 'rtyujk', 'GYUY', 'GUYTYU', '234567890', '$2y$10$dPJUnX0xb/eh8lKLM.DVwu0hlzxOF61tTouGaIRwMmwvGaYd/.UCm', 'hzsducikmin@admin.com', '2023-12-30', 75, NULL, NULL, '2023-12-04 15:17:19', 'freelance', 'profil.jpg', NULL, NULL, NULL),
(46, 'sdfhjkxcvbn,dfghj', 'sdhj', 'sdfghj', '12345678987', '$2y$10$//Ato.hm4R8woFJHeIuI5e1.u56WsBHsSyvk.Ho7MvMYlFXADjsU.', 'lient@client.com', '2023-12-14', 51, '2425', 'sdfghj', '2023-12-04 16:58:22', 'user', 'circle2.png', NULL, 'hcokc ezdnj eoin c ze czejk ocez j co jc oize jk coze sj cioz ejk cio zs cn zdj c ,ksd cj nkes dkj ckn edkjs xcnk kjeds kc jd k jed snx cjk djnx ckj jh kc dkj xkjc je djk xckj ijds xkjc j edhxbc jed', NULL),
(47, 'jih', NULL, NULL, NULL, '$2y$10$i1/zKTNvCJH4Kvrk4vTEu.kNZ4Bz/hZZZFCM33GsARtfFbY8egno2', 'freelance@freelance.com', '2023-12-28', NULL, NULL, NULL, '2023-12-06 16:54:58', 'freelance', 'profil.jpg', NULL, NULL, NULL),
(48, 'lahcen2345', 'sdhj', 'sdfghj', '12345678987', '$2y$10$jBcISVqjI1G0k7mc4JIA1O1Zwj.SxOrJkaPTakKLy6tSMcgjn.zh.', 'client@client.com', '2023-11-30', 125, '2425', 'sdfghj', '2023-12-06 22:24:13', 'user', 'profil.webp', NULL, NULL, NULL),
(49, 'sdfg', NULL, NULL, NULL, '$2y$10$rVPvNYwhfucrEYv9OwTf7.7NZSgVB0UUzNxZlLwTz8Fr7a8JExbWq', 'admin@admin.com', '2023-12-21', NULL, NULL, NULL, '2023-12-08 21:19:31', 'admin', 'profil.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ville`
--

CREATE TABLE `ville` (
  `id` int NOT NULL,
  `ville` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `region` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ville`
--

INSERT INTO `ville` (`id`, `ville`, `region`) VALUES
(1, 'Aïn Harrouda', 6),
(2, 'Ben Yakhlef', 6),
(3, 'Bouskoura', 6),
(4, 'Casablanca', 6),
(5, 'Médiouna', 6),
(6, 'Mohammadia', 6),
(7, 'Tit Mellil', 6),
(8, 'Ben Yakhlef', 6),
(9, 'Bejaâd', 5),
(10, 'Ben Ahmed', 6),
(11, 'Benslimane', 6),
(12, 'Berrechid', 6),
(13, 'Boujniba', 5),
(14, 'Boulanouare', 5),
(15, 'Bouznika', 6),
(16, 'Deroua', 6),
(17, 'El Borouj', 6),
(18, 'El Gara', 6),
(19, 'Guisser', 6),
(20, 'Hattane', 5),
(21, 'Khouribga', 5),
(22, 'Loulad', 6),
(23, 'Oued Zem', 5),
(24, 'Oulad Abbou', 6),
(25, 'Oulad H\'Riz Sahel', 6),
(26, 'Oulad M\'rah', 6),
(27, 'Oulad Saïd', 6),
(28, 'Oulad Sidi Ben Daoud', 6),
(29, 'Ras El Aïn', 6),
(30, 'Settat', 6),
(31, 'Sidi Rahhal Chataï', 6),
(32, 'Soualem', 6),
(33, 'Azemmour', 6),
(34, 'Bir Jdid', 6),
(35, 'Bouguedra', 7),
(36, 'Echemmaia', 7),
(37, 'El Jadida', 6),
(38, 'Hrara', 7),
(39, 'Ighoud', 7),
(40, 'Jamâat Shaim', 7),
(41, 'Jorf Lasfar', 6),
(42, 'Khemis Zemamra', 6),
(43, 'Laaounate', 6),
(44, 'Moulay Abdallah', 6),
(45, 'Oualidia', 6),
(46, 'Oulad Amrane', 6),
(47, 'Oulad Frej', 6),
(48, 'Oulad Ghadbane', 6),
(49, 'Safi', 7),
(50, 'Sebt El Maârif', 6),
(51, 'Sebt Gzoula', 7),
(52, 'Sidi Ahmed', 7),
(53, 'Sidi Ali Ban Hamdouche', 6),
(54, 'Sidi Bennour', 6),
(55, 'Sidi Bouzid', 6),
(56, 'Sidi Smaïl', 6),
(57, 'Youssoufia', 7),
(58, 'Fès', 3),
(59, 'Aïn Cheggag', 3),
(60, 'Bhalil', 3),
(61, 'Boulemane', 3),
(62, 'El Menzel', 3),
(63, 'Guigou', 3),
(64, 'Imouzzer Kandar', 3),
(65, 'Imouzzer Marmoucha', 3),
(66, 'Missour', 3),
(67, 'Moulay Yaâcoub', 3),
(68, 'Ouled Tayeb', 3),
(69, 'Outat El Haj', 3),
(70, 'Ribate El Kheir', 3),
(71, 'Séfrou', 3),
(72, 'Skhinate', 3),
(73, 'Tafajight', 3),
(74, 'Arbaoua', 4),
(75, 'Aïn Dorij', 1),
(76, 'Dar Gueddari', 4),
(77, 'Had Kourt', 4),
(78, 'Jorf El Melha', 4),
(79, 'Kénitra', 4),
(80, 'Khenichet', 4),
(81, 'Lalla Mimouna', 4),
(82, 'Mechra Bel Ksiri', 4),
(83, 'Mehdia', 4),
(84, 'Moulay Bousselham', 4),
(85, 'Sidi Allal Tazi', 4),
(86, 'Sidi Kacem', 4),
(87, 'Sidi Slimane', 4),
(88, 'Sidi Taibi', 4),
(89, 'Sidi Yahya El Gharb', 4),
(90, 'Souk El Arbaa', 4),
(91, 'Akka', 9),
(92, 'Assa', 10),
(93, 'Bouizakarne', 10),
(94, 'El Ouatia', 10),
(95, 'Es-Semara', 11),
(96, 'Fam El Hisn', 9),
(97, 'Foum Zguid', 9),
(98, 'Guelmim', 10),
(99, 'Taghjijt', 10),
(100, 'Tan-Tan', 10),
(101, 'Tata', 9),
(102, 'Zag', 10),
(103, 'Marrakech', 7),
(104, 'Ait Daoud', 7),
(115, 'Amizmiz', 7),
(116, 'Assahrij', 7),
(117, 'Aït Ourir', 7),
(118, 'Ben Guerir', 7),
(119, 'Chichaoua', 7),
(120, 'El Hanchane', 7),
(121, 'El Kelaâ des Sraghna', 7),
(122, 'Essaouira', 7),
(123, 'Fraïta', 7),
(124, 'Ghmate', 7),
(125, 'Ighounane', 8),
(126, 'Imintanoute', 7),
(127, 'Kattara', 7),
(128, 'Lalla Takerkoust', 7),
(129, 'Loudaya', 7),
(130, 'Lâattaouia', 7),
(131, 'Moulay Brahim', 7),
(132, 'Mzouda', 7),
(133, 'Ounagha', 7),
(134, 'Sid L\Mokhtar', 7),
(135, 'Sid Zouin', 7),
(136, 'Sidi Abdallah Ghiat', 7),
(137, 'Sidi Bou Othmane', 7),
(138, 'Sidi Rahhal', 7),
(139, 'Skhour Rehamna', 7),
(140, 'Smimou', 7),
(141, 'Tafetachte', 7),
(142, 'Tahannaout', 7),
(143, 'Talmest', 7),
(144, 'Tamallalt', 7),
(145, 'Tamanar', 7),
(146, 'Tamansourt', 7),
(147, 'Tameslouht', 7),
(148, 'Tanalt', 9),
(149, 'Zeubelemok', 7),
(150, 'Meknès‎', 3),
(151, 'Khénifra', 5),
(152, 'Agourai', 3),
(153, 'Ain Taoujdate', 3),
(154, 'MyAliCherif', 8),
(155, 'Rissani', 8),
(156, 'Amalou Ighriben', 5),
(157, 'Aoufous', 8),
(158, 'Arfoud', 8),
(159, 'Azrou', 3),
(160, 'Aïn Jemaa', 3),
(161, 'Aïn Karma', 3),
(162, 'Aïn Leuh', 3),
(163, 'Aït Boubidmane', 3),
(164, 'Aït Ishaq', 5),
(165, 'Boudnib', 8),
(166, 'Boufakrane', 3),
(167, 'Boumia', 8),
(168, 'El Hajeb', 3),
(169, 'Elkbab', 5),
(170, 'Er-Rich', 5),
(171, 'Errachidia', 8),
(172, 'Gardmit', 8),
(173, 'Goulmima', 8),
(174, 'Gourrama', 8),
(175, 'Had Bouhssoussen', 5),
(176, 'Haj Kaddour', 3),
(177, 'Ifrane', 3),
(178, 'Itzer', 8),
(179, 'Jorf', 8),
(180, 'Kehf Nsour', 5),
(181, 'Kerrouchen', 5),
(182, 'M\'haya', 3),
(183, 'M\'rirt', 5),
(184, 'Midelt', 8),
(185, 'Moulay Ali Cherif', 8),
(186, 'Moulay Bouazza', 5),
(187, 'Moulay Idriss Zerhoun', 3),
(188, 'Moussaoua', 3),
(189, 'N\'Zalat Bni Amar', 3),
(190, 'Ouaoumana', 5),
(191, 'Oued Ifrane', 3),
(192, 'Sabaa Aiyoun', 3),
(193, 'Sebt Jahjouh', 3),
(194, 'Sidi Addi', 3),
(195, 'Tichoute', 8),
(196, 'Tighassaline', 5),
(197, 'Tighza', 5),
(198, 'Timahdite', 3),
(199, 'Tinejdad', 8),
(200, 'Tizguite', 3),
(201, 'Toulal', 3),
(202, 'Tounfite', 8),
(203, 'Zaouia d\'Ifrane', 3),
(204, 'Zaïda', 8),
(205, 'Ahfir', 2),
(206, 'Aklim', 2),
(207, 'Al Aroui', 2),
(208, 'Aïn Bni Mathar', 2),
(209, 'Aïn Erreggada', 2),
(210, 'Ben Taïeb', 2),
(211, 'Berkane', 2),
(212, 'Bni Ansar', 2),
(213, 'Bni Chiker', 2),
(214, 'Bni Drar', 2),
(215, 'Bni Tadjite', 2),
(216, 'Bouanane', 2),
(217, 'Bouarfa', 2),
(218, 'Bouhdila', 2),
(219, 'Dar El Kebdani', 2),
(220, 'Debdou', 2),
(221, 'Douar Kannine', 2),
(222, 'Driouch', 2),
(223, 'El Aïoun Sidi Mellouk', 2),
(224, 'Farkhana', 2),
(225, 'Figuig', 2),
(226, 'Ihddaden', 2),
(227, 'Jaâdar', 2),
(228, 'Jerada', 2),
(229, 'Kariat Arekmane', 2),
(230, 'Kassita', 2),
(231, 'Kerouna', 2),
(232, 'Laâtamna', 2),
(233, 'Madagh', 2),
(234, 'Midar', 2),
(235, 'Nador', 2),
(236, 'Naima', 2),
(237, 'Oued Heimer', 2),
(238, 'Oujda', 2),
(239, 'Ras El Ma', 2),
(240, 'Saïdia', 2),
(241, 'Selouane', 2),
(242, 'Sidi Boubker', 2),
(243, 'Sidi Slimane Echcharaa', 2),
(244, 'Talsint', 2),
(245, 'Taourirt', 2),
(246, 'Tendrara', 2),
(247, 'Tiztoutine', 2),
(248, 'Touima', 2),
(249, 'Touissit', 2),
(250, 'Zaïo', 2),
(251, 'Zeghanghane', 2),
(252, 'Rabat', 4),
(253, 'Salé', 4),
(254, 'Ain El Aouda', 4),
(255, 'Harhoura', 4),
(256, 'Khémisset', 4),
(257, 'Oulmès', 4),
(258, 'Rommani', 4),
(259, 'Sidi Allal El Bahraoui', 4),
(260, 'Sidi Bouknadel', 4),
(261, 'Skhirate', 4),
(262, 'Tamesna', 4),
(263, 'Témara', 4),
(264, 'Tiddas', 4),
(265, 'Tiflet', 4),
(266, 'Touarga', 4),
(267, 'Agadir', 9),
(268, 'Agdz', 8),
(269, 'Agni Izimmer', 9),
(270, 'Aït Melloul', 9),
(271, 'Alnif', 8),
(272, 'Anzi', 9),
(273, 'Aoulouz', 9),
(274, 'Aourir', 9),
(275, 'Arazane', 9),
(276, 'Aït Baha', 9),
(277, 'Aït Iaâza', 9),
(278, 'Aït Yalla', 8),
(279, 'Ben Sergao', 9),
(280, 'Biougra', 9),
(281, 'Boumalne-Dadès', 8),
(282, 'Dcheira El Jihadia', 9),
(283, 'Drargua', 9),
(284, 'El Guerdane', 9),
(285, 'Harte Lyamine', 8),
(286, 'Ida Ougnidif', 9),
(287, 'Ifri', 8),
(288, 'Igdamen', 9),
(289, 'Ighil n\'Oumgoun', 8),
(290, 'Imassine', 8),
(291, 'Inezgane', 9),
(292, 'Irherm', 9),
(293, 'Kelaat-M\'Gouna', 8),
(294, 'Lakhsas', 9),
(295, 'Lakhsass', 9),
(296, 'Lqliâa', 9),
(297, 'M\'semrir', 8),
(298, 'Massa (Maroc)', 9),
(299, 'Megousse', 9),
(300, 'Ouarzazate', 8),
(301, 'Oulad Berhil', 9),
(302, 'Oulad Teïma', 9),
(303, 'Sarghine', 8),
(304, 'Sidi Ifni', 10),
(305, 'Skoura', 8),
(306, 'Tabounte', 8),
(307, 'Tafraout', 9),
(308, 'Taghzout', 1),
(309, 'Tagzen', 9),
(310, 'Taliouine', 9),
(311, 'Tamegroute', 8),
(312, 'Tamraght', 9),
(313, 'Tanoumrite Nkob Zagora', 8),
(314, 'Taourirt ait zaghar', 8),
(315, 'Taroudannt', 9),
(316, 'Temsia', 9),
(317, 'Tifnit', 9),
(318, 'Tisgdal', 9),
(319, 'Tiznit', 9),
(320, 'Toundoute', 8),
(321, 'Zagora', 8),
(322, 'Afourar', 5),
(323, 'Aghbala', 5),
(324, 'Azilal', 5),
(325, 'Aït Majden', 5),
(326, 'Beni Ayat', 5),
(327, 'Béni Mellal', 5),
(328, 'Bin elouidane', 5),
(329, 'Bradia', 5),
(330, 'Bzou', 5),
(331, 'Dar Oulad Zidouh', 5),
(332, 'Demnate', 5),
(333, 'Dra\'a', 8),
(334, 'El Ksiba', 5),
(335, 'Foum Jamaa', 5),
(336, 'Fquih Ben Salah', 5),
(337, 'Kasba Tadla', 5),
(338, 'Ouaouizeght', 5),
(339, 'Oulad Ayad', 5),
(340, 'Oulad M\'Barek', 5),
(341, 'Oulad Yaich', 5),
(342, 'Sidi Jaber', 5),
(343, 'Souk Sebt Oulad Nemma', 5),
(344, 'Zaouïat Cheikh', 5),
(345, 'Tanger‎', 1),
(346, 'Tétouan‎', 1),
(347, 'Akchour', 1),
(348, 'Assilah', 1),
(349, 'Bab Berred', 1),
(350, 'Bab Taza', 1),
(351, 'Brikcha', 1),
(352, 'Chefchaouen', 1),
(353, 'Dar Bni Karrich', 1),
(354, 'Dar Chaoui', 1),
(355, 'Fnideq', 1),
(356, 'Gueznaia', 1),
(357, 'Jebha', 1),
(358, 'Karia', 3),
(359, 'Khémis Sahel', 1),
(360, 'Ksar El Kébir', 1),
(361, 'Larache', 1),
(362, 'M\'diq', 1),
(363, 'Martil', 1),
(364, 'Moqrisset', 1),
(365, 'Oued Laou', 1),
(366, 'Oued Rmel', 1),
(367, 'Ouazzane', 1),
(368, 'Point Cires', 1),
(369, 'Sidi Lyamani', 1),
(370, 'Sidi Mohamed ben Abdallah el-Raisuni', 1),
(371, 'Zinat', 1),
(372, 'Ajdir‎', 1),
(373, 'Aknoul‎', 3),
(374, 'Al Hoceïma‎', 1),
(375, 'Aït Hichem‎', 1),
(376, 'Bni Bouayach‎', 1),
(377, 'Bni Hadifa‎', 1),
(378, 'Ghafsai‎', 3),
(379, 'Guercif‎', 2),
(380, 'Imzouren‎', 1),
(381, 'Inahnahen‎', 1),
(382, 'Issaguen (Ketama)‎', 1),
(383, 'Karia (El Jadida)‎', 6),
(384, 'Karia Ba Mohamed‎', 3),
(385, 'Oued Amlil‎', 3),
(386, 'Oulad Zbair‎', 3),
(387, 'Tahla‎', 3),
(388, 'Tala Tazegwaght‎', 1),
(389, 'Tamassint‎', 1),
(390, 'Taounate‎', 3),
(391, 'Targuist‎', 1),
(392, 'Taza‎', 3),
(393, 'Taïnaste‎', 3),
(394, 'Thar Es-Souk‎', 3),
(395, 'Tissa‎', 3),
(396, 'Tizi Ouasli‎', 3),
(397, 'Laayoune‎', 11),
(398, 'El Marsa‎', 11),
(399, 'Tarfaya‎', 11),
(400, 'Boujdour‎', 11),
(401, 'Awsard', 12),
(402, 'Oued-Eddahab', 12),
(403, 'Stehat', 1),
(404, 'Aït Attab', 5);

-- --------------------------------------------------------

--
-- Structure for view `app_development`
--
DROP TABLE IF EXISTS `app_development`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `app_development`  AS SELECT `projects`.`title` AS `title`, `projects`.`project_description` AS `project_description`, `users`.`user_name` AS `user_name`, `sub_categories`.`subName` AS `prject_type` FROM ((`projects` join `sub_categories` on((`projects`.`id_sub_category` = `sub_categories`.`id`))) join `users` on((`projects`.`ID_user` = `users`.`ID_user`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freelance_skills`
--
ALTER TABLE `freelance_skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `freelance_id` (`freelance_id`),
  ADD KEY `skills_id` (`skills_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Id_project` (`Id_project`),
  ADD KEY `FK_offers_users` (`ID_Freelance`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorie` (`id_categorie`),
  ADD KEY `id_sub_category` (`id_sub_category`),
  ADD KEY `ID_user` (`ID_user`),
  ADD KEY `projects_ibfk_4` (`freelance_id`);

--
-- Indexes for table `project_tags`
--
ALTER TABLE `project_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `tag_id` (`tag_id`),
  ADD KEY `offer_id` (`offer_id`);

--
-- Indexes for table `proposal`
--
ALTER TABLE `proposal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `freelance_id` (`freelance_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tagName` (`tagName`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ID_user` (`ID_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_user`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `City` (`City`);

--
-- Indexes for table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `freelance_skills`
--
ALTER TABLE `freelance_skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2361;

--
-- AUTO_INCREMENT for table `project_tags`
--
ALTER TABLE `project_tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `proposal`
--
ALTER TABLE `proposal`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `freelance_skills`
--
ALTER TABLE `freelance_skills`
  ADD CONSTRAINT `freelance_skills_ibfk_1` FOREIGN KEY (`freelance_id`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `freelance_skills_ibfk_2` FOREIGN KEY (`skills_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `FK_offers_users` FOREIGN KEY (`ID_Freelance`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `offers_ibfk_2` FOREIGN KEY (`Id_project`) REFERENCES `projects` (`id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `projects_ibfk_2` FOREIGN KEY (`id_sub_category`) REFERENCES `sub_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `projects_ibfk_3` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `projects_ibfk_4` FOREIGN KEY (`freelance_id`) REFERENCES `users` (`ID_user`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `project_tags`
--
ALTER TABLE `project_tags`
  ADD CONSTRAINT `project_tags_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_tags_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_tags_ibfk_3` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proposal`
--
ALTER TABLE `proposal`
  ADD CONSTRAINT `proposal_ibfk_1` FOREIGN KEY (`freelance_id`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `proposal_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`ID_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`ID_user`) REFERENCES `users` (`ID_user`) ON DELETE SET NULL;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`City`) REFERENCES `ville` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`region`) REFERENCES `region` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
