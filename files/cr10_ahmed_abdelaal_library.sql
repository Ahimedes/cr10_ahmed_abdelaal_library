-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 18. Jul 2020 um 16:47
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr10_ahmed_abdelaal_library`
--
CREATE DATABASE IF NOT EXISTS `cr10_ahmed_abdelaal_library` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr10_ahmed_abdelaal_library`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `teaser` varchar(55) NOT NULL,
  `media_name` varchar(255) NOT NULL,
  `media_type` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `creator` varchar(255) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publisher_size` varchar(255) NOT NULL,
  `active` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `media`
--

INSERT INTO `media` (`id`, `teaser`, `media_name`, `media_type`, `publish_date`, `creator`, `publisher_name`, `publisher_address`, `publisher_size`, `active`) VALUES
(2, '', 'Lord of the Rings - The fellowship of the Ring', 'DVD', '2001-12-10', 'Peter Jackson', 'New Line Media', '', 'Big', 0),
(3, '', 'Lord of the Rings - The Two Towers', 'DVD', '2002-12-18', 'Peter Jackson', 'New Line Media', '', 'Big', 0),
(4, '', 'Lord of the Rings - The Return of the King', 'DVD', '2003-12-17', 'Peter Jackson', 'New Line Media', '', 'Big', 0),
(5, '', 'Blood Sugar Sex Magik', 'CD', '1991-09-24', 'Red Hot Chili Peppers', 'Warner Bros.', '', 'Big', 0),
(6, '', 'Rage against the Machine', 'CD', '1992-11-03', 'Rage against the Machine', 'Epic Records / Sony BMG', '', 'Big', 0),
(7, '', 'Vulgar Display of Power', 'CD', '1992-02-05', 'Pantera', 'Eastwest Records', '', 'Big', 0),
(8, '', 'Led Zeppelin II', 'CD', '1969-10-22', 'Led Zeppelin ', 'Atlantic Records', '', 'Big', 0),
(9, '', 'Black Sabbath', 'CD', '1970-10-20', 'Black Sabbath', 'Warner Bros.', '', 'Big', 0),
(10, '', 'The Alchemist', 'Book', '1988-10-11', 'Paulo Coelho', 'HarperTorch LLC', '', 'Big', 0),
(11, '', 'Shantaram', 'Book', '2003-11-11', 'Gregory Roberts', 'Scribe Publications', '', 'Small', 0);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
