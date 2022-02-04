-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 03 Lut 2022, 23:21
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `it`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sprzęt`
--

CREATE TABLE `sprzęt` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nazwa` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Ilość` int(3) NOT NULL,
  `Dostępny` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `sprzęt`
--

INSERT INTO `sprzęt` (`ID`, `Nazwa`, `Ilość`, `Dostępny`) VALUES
(1, 'Komputer Stacjonarny', 3, 'Tak'),
(2, 'Laptop', 2, 'Tak'),
(3, 'Drukarka', 2, 'Tak'),
(4, 'Monitor', 2, 'Tak'),
(5, 'Zasilacz laptopowy', 0, 'Nie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usługi`
--

CREATE TABLE `usługi` (
  `ID` int(10) UNSIGNED NOT NULL,
  `Nazwa` text CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Cena (zł)` int(11) NOT NULL,
  `Czas (h)` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `usługi`
--

INSERT INTO `usługi` (`ID`, `Nazwa`, `Cena (zł)`, `Czas (h)`) VALUES
(1, 'Outsourcing IT', 250, 24),
(2, 'Instalacja i konfiguracja systemów operacyjnych', 120, 4),
(3, 'Wypożyczenie sprzętu komputerowego', 150, 24),
(4, 'Naprawa komputera', 70, 1),
(5, 'Projektowanie i aktualizacja stron WWW', 100, 1),
(6, 'Hosting', 2, 24);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `sprzęt`
--
ALTER TABLE `sprzęt`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `usługi`
--
ALTER TABLE `usługi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `usługi`
--
ALTER TABLE `usługi`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
