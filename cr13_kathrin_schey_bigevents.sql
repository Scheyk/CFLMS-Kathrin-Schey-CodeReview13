-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 08. Aug 2020 um 16:17
-- Server-Version: 10.4.13-MariaDB
-- PHP-Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr13_kathrin_schey_bigevents`
--
CREATE DATABASE IF NOT EXISTS `cr13_kathrin_schey_bigevents` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `cr13_kathrin_schey_bigevents`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` date DEFAULT NULL,
  `start` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `events`
--

INSERT INTO `events` (`id`, `name`, `description`, `img`, `capacity`, `email`, `phone`, `address`, `url`, `type`, `day`, `start`) VALUES
(5, 'Alec Soth - Photography Is A Language', 'Mit der Serie Sleeping by the Mississipi wurde er 2004 schlagartig berühmt: In die Fußstapfen von Robert Frank tretend, dokumentierte der Künstler auf seinem Roadtrip entlang des Mississippi das amerikanische Leben – subjektiv, mit viel Poesie und Melanch', '1.jpg', 500, 'anmeldung@kunsthauswien.com', '+43-1-712 04 95', 'KunstHausWien, Untere Weißgerberstraße 13,  1030 Wien', 'https://www.events.at/e/alec-soth#st-241782339', 'Kunst', '2020-08-14', '10:15:00'),
(6, 'Posters for Peace: Hiroshima Appeals', 'Im Gedenken an den Atombombenabwurf der USA auf Hiroshima am 6. August 1945, bei dem auf der Stelle 100.000 Menschen ums Leben kamen und an dessen Folgen in den Wochen, Monaten und Jahren darauf weitere Hunderttausende starben, initiierte die Japan Graphi', '3.jpg', 500, 'info@designforum.at', '+43-1-524 49 49 -0', 'Designforum MQ, Museumsplatz 1, 1070 Wien - Neubau', 'www.designforum.at', 'Kunst', '2020-09-16', '10:30:00'),
(7, 'Makemake Produktionen - Vom kleinen Maulwurf', 'Ein Maulwurf – und tagtäglich dasselbe: Graben graben, buddeln buddeln. Nicht sehr aufregend. Doch eines Morgens passiert etwas ganz und gar Unerwartetes. Im ersten Sonnenlicht des Tages streckt der Maulwurf seinen Kopf aus dem Hügel – und schwupp! landet', '4.jpg', 300, 'https://kultursommerwien.at/reservierung/', '+43 1 34 35 814', 'Kultursommer Wien, Modular Space Platz 12.-Februar-Platz, 1190 Wien', 'https://www.makemake.at/maulwurf', 'Theater', '2020-08-07', '15:17:00'),
(8, 'Lukas Resetarits, Programm: “Wurscht”', 'Ein Kabarett zum Essen', '2.jpg', 200, 'ticket@simplitix.at', '+43 1 9202921', 'Arena Wien, Baumgasse 80, 1030 Wien', 'https://arena.wien/', 'Theater', '2020-08-08', '20:30:00'),
(9, 'Hundertwasser - Schiele!', 'Die Kunst von Egon Schiele faszinierte Friedensreich Hundertwasser bereits als jungen Mann: Der 20-jährige Künstler verfasste 1951 das schwärmerische Gedicht „Ich liebe Schiele“ und kopierte aus Begeisterung dessen Bilder. Anlässlich des 20. Todestages de', '5.jpg', 800, 'some@some.at', '01/525 70-1525', 'Leopold Museum, Museumsplatz 1, 1070 Wien', 'www.leopoldmuseum.org', 'Kunst', '2020-08-15', '10:00:00'),
(10, 'Kabarettfestival 2020', '30.8.-5.9.20: Das Wiener Kabarettfestival gibt sich bereits zum 10. Mal die Ehre. Zum Jubiläum gibt\'s im stimmungsvollen Arkadenhof des Wiener Rathauses wieder sieben Tage zum Lachen. Pro Abend treten zwei Künstler mit Charme und Schmäh im Doppelpack auf.', '6.jpg', 1200, 'kundenservice@wien-ticket.at', 'Tel.: +43 1 52550', 'Rathaus Wien, Friedrich-Schmidt-Platz 1, 1010 Wien', 'https://www.stadt-wien.at/veranstaltungen/festival/wiener-kabarettfestival.html', 'Kunst', '2020-08-30', '19:30:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
