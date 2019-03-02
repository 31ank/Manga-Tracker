-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Mrz 2019 um 23:14
-- Server-Version: 10.1.37-MariaDB
-- PHP-Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mt`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `manga`
--

CREATE TABLE `manga` (
  `MID` int(11) NOT NULL,
  `MName` text NOT NULL,
  `MCha` int(11) NOT NULL DEFAULT '0',
  `MVol` int(11) NOT NULL DEFAULT '0',
  `MImg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `Content` text NOT NULL,
  `Publication` date NOT NULL,
  `Author` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `usermanga`
--

CREATE TABLE `usermanga` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0' COMMENT '0 plan - 1 reading - 2 dropped - 3 finished',
  `CHA` int(11) NOT NULL DEFAULT '0',
  `VOL` int(11) NOT NULL DEFAULT '0',
  `LINK` text NOT NULL,
  `OWN` int(11) NOT NULL DEFAULT '0' COMMENT '0 real - 1 online'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` text NOT NULL,
  `UserEmail` text NOT NULL,
  `UserPSW` text NOT NULL,
  `UserMod` int(11) NOT NULL DEFAULT '0',
  `UserAdmin` int(11) NOT NULL DEFAULT '0',
  `UserView` int(11) NOT NULL DEFAULT '0' COMMENT '0 easy - 1 chap and vol',
  `UserLang` int(11) NOT NULL DEFAULT '0' COMMENT '0 de - 2 en - 3 jp'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`MID`);

--
-- Indizes für die Tabelle `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `usermanga`
--
ALTER TABLE `usermanga`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `manga`
--
ALTER TABLE `manga`
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT für Tabelle `usermanga`
--
ALTER TABLE `usermanga`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
