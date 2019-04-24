-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Kwi 2019, 15:08
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `projekt_1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wiek` int(11) NOT NULL,
  `haslo` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `opis` longtext CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `usr`
--

INSERT INTO `usr` (`id`, `imie`, `nazwisko`, `wiek`, `haslo`, `opis`) VALUES
(1, 'Szymon', 'Stawski', 19, 'mocne_haslo', 'czesc mam na imie szymon lubie sport i nowe technologie'),
(9, 'Zuzanna', 'Stawska', 13, 'zuza21', 'jestem zuzia lubie grac na gitarze');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
