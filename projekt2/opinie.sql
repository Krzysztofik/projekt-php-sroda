-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Lut 2022, 01:44
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `opinie`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `listaopinii`
--

CREATE TABLE `listaopinii` (
  `idOpinii` int(11) NOT NULL,
  `stopienZadowolenia` int(11) DEFAULT NULL,
  `dataOpinii` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `listaopinii`
--

INSERT INTO `listaopinii` (`idOpinii`, `stopienZadowolenia`, `dataOpinii`) VALUES
(40, 1, '2022-02-28'),
(41, 3, '2022-02-28');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `listaopinii`
--
ALTER TABLE `listaopinii`
  ADD PRIMARY KEY (`idOpinii`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `listaopinii`
--
ALTER TABLE `listaopinii`
  MODIFY `idOpinii` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
