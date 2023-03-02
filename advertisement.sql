-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 mars 2023 à 13:47
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
-- Base de données : `announcements`
--

-- --------------------------------------------------------

--
-- Structure de la table `advertisement`
--

CREATE TABLE `advertisement` (
  `ID` int(1) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `Area` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp(),
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `advertisement`
--

INSERT INTO `advertisement` (`ID`, `title`, `image`, `description`, `Area`, `address`, `amount`, `Date`, `type`) VALUES
(1, 'boston valley houses  ', 'sl1.jpg', 'good and big house with two bathrooms and two kitchens and a big room with a view in the ocean   ', 779, '655 NY boston vally', '3000', '2023-02-06', 'Renting'),
(2, 'Katrina hunted castel ', 'sl2.jpg', 'a big castel il region of boston for selling 5 rooms and Two big kitchens, its close to the woods so the view in the night is great', 4000, 'boston city NY 36', '6600000', '2023-02-06', 'Selling'),
(4, 'Bixby Creek Ranch', 'sl0.jpg', 'Introducing a new standard of luxury in the mountains of Big Sur. Just a short drive from Carmel and Pebble Beach, Bixby Creek Ranch provides a one-of-a-kind family retreat with possibly the best views and setting on the Central Coast. Sited on 78 acres adjoining an additional 300 glorious acres of private preserve with true panoramic views spanning from iconic Bixby Bridge, rolling Santa Lucia Mountains, and the endless Pacific Ocean to the west. The property encompasses 4 main structures', 8491, '4847 Bixby Creek Road, Carmel, CA, 93940', '18950000', '2023-02-07', 'Selling'),
(5, 'Stunning Home On Carmel Point', 'sl4.jpg', 'One of the most spacious and beautifully constructed homes on Carmel Point, this incredible property offers the ultimate indoor/outdoor living environment just steps from Carmel River Beach and Carmel Beach. Inside the home has a refined style to complement the high-quality finishes and appliances.', 9100, '26285 Valley View Ave, Carmel, CA, 93923', '7900000', '2023-02-07', 'Selling'),
(8, 'Eveniet harum ab qu', 'sl4.jpg', 'Laboriosam dolores ', 175, '61', '978', '2022-12-24', 'Selling'),
(9, 'Eveniet harum ab qu', 'sl4.jpg', 'Laboriosam dolores ', 175, '61', '978', '2022-12-24', 'Selling'),
(10, 'Eveniet harum ab qu', 'sl4.jpg', 'Laboriosam dolores ', 175, '61', '978', '2022-12-24', 'Selling'),
(11, 'ilias house', 'sl0.jpg', 'lorem lorem lorem', 400, '4847 Bixby Creek Road, Carmel, CA, 93940', '6688888888', '2023-02-07', 'Selling'),
(12, 'Incidunt quia earum', 'sl0.jpg', 'Nostrud ut id imped', 356, '643', '432', '1988-06-12', 'Selling'),
(13, 'Eos aperiam placeat', 'sl2.jpg', 'Deserunt neque ut qu', 113, '233', '602', '1974-08-12', 'Renting'),
(14, 'Eos aperiam placeat', 'sl2.jpg', 'Deserunt neque ut qu', 113, '233', '602', '1974-08-12', 'Renting');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `ID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
