-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Jan 03. 23:29
-- Kiszolgáló verziója: 10.4.21-MariaDB
-- PHP verzió: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `adventi_kalendarium`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `adventi_kalendarium`
--

CREATE TABLE `adventi_kalendarium` (
  `id` int(11) NOT NULL,
  `tartalom` varchar(100) COLLATE utf8mb4_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `adventi_kalendarium`
--

INSERT INTO `adventi_kalendarium` (`id`, `tartalom`) VALUES
(1, 'Irvine Welsh: Trainspotting'),
(2, 'Milan Kundera: A lét elviselhetetlen könnyűsége'),
(3, 'Umberto Eco: A rózsa neve'),
(4, 'Stephen King: A ragyogás'),
(5, 'Arthur C. Clarke: 2001. Űrodisszeia'),
(6, 'Mihail Bulgakov: A Mester és Margarita'),
(7, 'Gabriel García Márquez: Száz év magány'),
(8, 'Sylvia Plath: Az üvegbura'),
(9, 'J. D. Salinger: Franny és Zooey'),
(10, 'Joseph Heller: A 22-es csapdája'),
(11, 'Harper Lee: Ne bántsátok a feketerigót!'),
(12, 'William Golding: A Legyek Ura'),
(13, 'George Orwell: 1984'),
(14, 'Thomas Mann: Doktor Faustus'),
(15, 'Antoine de Saint-Exupéry: A kis herceg'),
(16, 'Ernest Hemingway: Akiért a harang szól'),
(17, 'Ernest Hemingway: Gazdagok és szegények'),
(18, 'Bertolt Brecht: Koldusopera'),
(19, 'Alfred Döblin: Berlin, Alexanderplatz'),
(20, 'Marcel Proust: Az eltűnt idő nyomában'),
(21, 'Franz Kafka: A kastély'),
(22, 'Thomas Mann: A varázshegy'),
(23, 'James Joyce: Ulysses'),
(24, 'Arthur Conan Doyle: A sátán kutyája');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `adventi_kalendarium`
--
ALTER TABLE `adventi_kalendarium`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `adventi_kalendarium`
--
ALTER TABLE `adventi_kalendarium`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
