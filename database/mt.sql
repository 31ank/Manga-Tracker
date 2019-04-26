-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Apr 2019 um 21:17
-- Server-Version: 5.5.60-0+deb7u1
-- PHP-Version: 5.6.29

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
-- Tabellenstruktur für Tabelle `usermanga`
--

CREATE TABLE `usermanga` (
  `ID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `MID` int(11) NOT NULL,
  `STATUS` int(11) NOT NULL DEFAULT '0' COMMENT '0 plan - 1 reading - 2 dropped - 3 finished',
  `CHA` int(11) NOT NULL DEFAULT '0',
  `VOL` int(11) NOT NULL DEFAULT '0',
  `OWN` int(11) NOT NULL DEFAULT '0' COMMENT '0 real - 1 online',
  `VIEW` int(11) NOT NULL DEFAULT '0' COMMENT '0 - Cha und Vol : 1 - Vol und OWN'
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
  `UserAdmin` int(11) NOT NULL DEFAULT '0'
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
  MODIFY `MID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `usermanga`
--
ALTER TABLE `usermanga`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
