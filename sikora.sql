-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 19 Maj 2020, 10:25
-- Wersja serwera: 8.0.18
-- Wersja PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sikora`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ghibli`
--

DROP TABLE IF EXISTS `ghibli`;
CREATE TABLE IF NOT EXISTS `ghibli` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rezyser` varchar(30) NOT NULL,
  `tytul` varchar(30) NOT NULL,
  `data_premiery` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `ghibli`
--

INSERT INTO `ghibli` (`id`, `rezyser`, `tytul`, `data_premiery`) VALUES
(1, 'Hayao_Miyazaki', 'Spirited_Away', '2001-07-27'),
(2, 'Hayao_Miyazaki', 'My_Neighbor_Totoro', '1988-04-16'),
(3, 'Hayao_Miyazaki', 'Porco_Rosso', '1992-07-18'),
(4, 'Hayao_Miyazaki', 'The_Wind_Rises', '2013-07-20'),
(5, 'Hayao_Miyazaki', 'Princess_Mononoke', '1997-07-12'),
(6, 'Hayao_Miyazaki', 'Howl\'s_Moving_Castle', '2004-11-20');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

DROP TABLE IF EXISTS `pracownicy`;
CREATE TABLE IF NOT EXISTS `pracownicy` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `imie` varchar(30) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `dzial` int(11) NOT NULL,
  `zarobki` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `dzial`, `zarobki`) VALUES
(1, 'kuba', 'nowak', 3, 23),
(2, 'ania', 'kowalska', 2, 30),
(3, 'jan', 'lewandowski', 1, 27),
(4, 'kasia', 'serafin', 4, 23),
(5, 'jacek', 'boch', 2, 17),
(6, 'hania', 'kowaliszyn', 3, 19);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
