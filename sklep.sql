-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 01 Mar 2019, 16:05
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklep`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posters`
--

CREATE TABLE `posters` (
  `id_poster` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_polish_ci,
  `desc` text COLLATE utf8_polish_ci,
  `pic1` text COLLATE utf8_polish_ci,
  `pic2` text COLLATE utf8_polish_ci,
  `pic3` text COLLATE utf8_polish_ci,
  `pic4` text COLLATE utf8_polish_ci,
  `pic5` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `posters`
--

INSERT INTO `posters` (`id_poster`, `id`, `price`, `title`, `desc`, `pic1`, `pic2`, `pic3`, `pic4`, `pic5`) VALUES
(1, 1, 12312, 'asdas', 'fghgthr', 'cos.jpg', 'lol.jpeg', 'rooasd.png', 'dasdas.gif', 'jsdnasjkd.jpg'),
(2, 1, 111, 'aaa', 'aaa', 'cos.jpg', 'lol.jpeg', 'rooasd.png', 'dasdas.gif', 'jsdnasjkd.jpg'),
(3, 1, 213123, 'asdasd', 'grfgege', 'cos.jpg', 'lol.jpeg', 'rooasd.png', 'dasdas.gif', 'jsdnasjkd.jpg'),
(4, 1, 999, 'lklkl', 'lklkl', 'x2.png', 'lol.jpeg', 'rooasd.png', 'dasdas.gif', 'jsdnasjkd.jpg'),
(5, 1, 232312, 'sdffsd', 'fsd fdsdsf sf dsf sfdsd', 'x3.png', '', '', '', ''),
(6, 1, 232312, 'sdffsd', 'fsd fdsdsf sf dsf sfdsd', 'x3.png', '', '', '', ''),
(7, 1, 12, 'aaa', 'asdasd', 'x3.png', '', '', '', ''),
(8, 1, 123, 'asd', 'asdasd', 's9plus-2.png', 's9plus-3.png', 'x1.png', 'x2.png', 'x3.png'),
(9, 1, 123, 'asd', 'asdasd', 's9plus-1.png', 's9plus-2.png', 'x1.png', 'x2.png', 'x3.png'),
(10, 1, 5645, 'dfgdf', ' fdgdfgdfg ', 'x1.png', 'x2.png', 'x3.png', '', ''),
(11, 1, 34534, 'sdfsdf', 'sdfsdfs', 'x2.png', '', '', '', ''),
(12, 1, 34534, 'sdfsdf', 'sdfsdfs', 'x2.png', '', '', '', ''),
(13, 2, 9999, 'qwereqwr', ' ewrewrewqr qwer wer wer ', 's9plus-3.png', '', '', '', ''),
(14, 2, 324, 'dfgdfg', 'dfgdfgdf', 'zdjjacka.jpg', 'zdjjana.jpg', 'zdjzuzanny.jpg', '', ''),
(15, 2, 324, 'dfgdfg', 'dfgdfgdf', 'zdjjacka.jpg', 'zdjjana.jpg', 'zdjzuzanny.jpg', '', ''),
(16, 2, 324, 'dfgdfg', 'dfgdfgdf', 'zdjjacka.jpg', 'zdjjana.jpg', 'zdjzuzanny.jpg', '', ''),
(17, 3, 1234, 'Samsung Galaxy s9+', 'Polecam', 's9plus-1.png', 's9plus-2.png', 's9plus-3.png', '', ''),
(18, 3, 1234, 'Samsung Galaxy s9+', 'polecam', 's9plus-1.png', 's9plus-2.png', 's9plus-3.png', '', ''),
(19, 3, 1234, 'Samsung Galaxy s9+', 'polecam', 's9plus-1.png', 's9plus-2.png', 's9plus-3.png', '', ''),
(20, 3, 1234, 'Samsung Galaxy s9+', 'polecam', 's9plus-1.png', 's9plus-2.png', 's9plus-3.png', '', ''),
(21, 3, 1234, 'Samsung Galaxy s9+', 'polecam', 's9plus-1.png', 's9plus-2.png', 's9plus-3.png', '', ''),
(22, 3, 4000, 'iPhone X', 'Najlepszy', 'x1.png', 'x2.png', 'x3.png', '', ''),
(23, 3, 4000, 'iPhone X', 'Najlepszy', '1551451587x1.png', '1551451587x2.png', '1551451587x3.png', '', ''),
(24, 3, 1234, 'daw', 'daw', '1551451652x1.png', '1551451652x2.png', '1551451652x3.png', '', ''),
(25, 3, 9999, '435543', '34345345df fgd gdfg dfg', '1551452267p8lite3.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text COLLATE utf8_polish_ci,
  `password` text COLLATE utf8_polish_ci,
  `email` text COLLATE utf8_polish_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'dawid', 'bca4c1486c8153b43d0030277dc1b346a5686c0a', 'dawidkurekofficial@gmail.com'),
(2, 'daw', 'c5dd76f326bdb69bf5be32d4949e96619563479e', 'daw@gmail.com'),
(3, 'dk', 'd5658db4705ff5c6ad3f152c4393f61ac86bd27f', 'dk@wp.pl'),
(4, 'remek', '74a20f7718ad02886c9dce8a7c94d2c560528114', 'remigiusz@onet.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id_poster`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `posters`
--
ALTER TABLE `posters`
  MODIFY `id_poster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
