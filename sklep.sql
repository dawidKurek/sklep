-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2019, 16:42
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
(5, 1, 2599, 'HTC', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, nisl eu vestibulum auctor, purus velit consequat enim, sit amet convallis est diam consequat neque. Cras velit nisi, laoreet nec ante vel, sodales sagittis magna. Quisque rutrum purus in facilisis tempus. Ut gravida ipsum id egestas consectetur. Nullam finibus, massa ornare condimentum elementum, ex justo sodales lacus, eu pulvinar urna ex et tellus. Aliquam erat volutpat. In dignissim mi maximus, ultrices elit sit amet, vestibulum nulla. Cras mauris lacus, ultricies ac enim vel, tempus accumsan elit.', 'x3.png', '', '', '', ''),
(8, 1, 1999, 'Sony', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, nisl eu vestibulum auctor, purus velit consequat enim, sit amet convallis est diam consequat neque. Cras velit nisi, laoreet nec ante vel, sodales sagittis magna. Quisque rutrum purus in facilisis tempus. Ut gravida ipsum id egestas consectetur. Nullam finibus, massa ornare condimentum elementum, ex justo sodales lacus, eu pulvinar urna ex et tellus. Aliquam erat volutpat. In dignissim mi maximus, ultrices elit sit amet, vestibulum nulla. Cras mauris lacus, ultricies ac enim vel, tempus accumsan elit.', 's9plus-2.png', 's9plus-3.png', 'x1.png', 'x2.png', 'x3.png'),
(9, 1, 1399, 'Xiaomi', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, nisl eu vestibulum auctor, purus velit consequat enim, sit amet convallis est diam consequat neque. Cras velit nisi, laoreet nec ante vel, sodales sagittis magna. Quisque rutrum purus in facilisis tempus. Ut gravida ipsum id egestas consectetur. Nullam finibus, massa ornare condimentum elementum, ex justo sodales lacus, eu pulvinar urna ex et tellus. Aliquam erat volutpat. In dignissim mi maximus, ultrices elit sit amet, vestibulum nulla. Cras mauris lacus, ultricies ac enim vel, tempus accumsansdf elit. Å¼Ã³Å‚Ä‡', 's9plus-1.png', 's9plus-2.png', 'x1.png', 'x2.png', 'x3.png'),
(10, 1, 4999, 'iPhone X', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, nisl eu vestibulum auctor, purus velit consequat enim, sit amet convallis est diam consequat neque. Cras velit nisi, laoreet nec ante vel, sodales sagittis magna. Quisque rutrum purus in facilisis tempus. Ut gravida ipsum id egestas consectetur. Nullam finibus, massa ornare condimentum elementum, ex justo sodales lacus, eu pulvinar urna ex et tellus. Aliquam erat volutpat. In dignissim mi maximus, ultrices elit sit amet, vestibulum nulla. Cras mauris lacus, ultricies ac enim vel, tempus accumsan elit.', 'x1.png', 'x2.png', 'x3.png', '', ''),
(21, 3, 3499, 'Samsung Galaxy s9+', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elementum, nisl eu vestibulum auctor, purus velit consequat enim, sit amet convallis est diam consequat neque. Cras velit nisi, laoreet nec ante vel, sodales sagittis magna. Quisque rutrum purus in facilisis tempus. Ut gravida ipsum id egestas consectetur. Nullam finibus, massa ornare condimentum elementum, ex justo sodales lacus, eu pulvinar urna ex et tellus. Aliquam erat volutpat. In dignissim mi maximus, ultrices elit sit amet, vestibulum nulla. Cras mauris lacus, ultricies ac enim vel, tempus accumsan elit.', 's9plus-1.png', 's9plus-2.png', 's9plus-3.png', '', ''),
(26, 4, 2799, 'Samsung Galaxy s9+', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ullamcorper commodo leo et lacinia. Aliquam pellentesque tristique felis, ut convallis est varius ultrices. Mauris at lorem id arcu egestas tincidunt ut vitae diam. Proin id semper odio. Aenean consequat augue ut est accumsan accumsan. Cras nec sem et est pellentesque ultricies eget euismod leo. Etiam interdum pharetra tellus in ullamcorper. Sed placerat libero vel elementum porttitor.', '1551784781s9plus-1.png', '1551784781s9plus-2.png', '1551784781s9plus-3.png', '', ''),
(27, 7, 1499, 'Xiaomi Mi8 Pro', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras malesuada a tortor ac tincidunt. Sed pharetra est sit amet nulla blandit malesuada. Cras tellus risus, lacinia nec turpis vel, posuere venenatis diam. Donec aliquam non ex eu convallis. Cras facilisis, odio at feugiat suscipit, metus ipsum tristique ante, sit amet tincidunt elit est ut eros. Vivamus vulputate imperdiet orci vel fringilla. In ultrices ornare ipsum sed porttitor. Curabitur a tempus metus, vitae consectetur nisl. Vestibulum dictum iaculis ligula non egestas. Suspendisse potenti.', '15526644048pro1.png', '15526644048pro2.png', '15526644048pro3.png', '', '');

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
(4, 'remek', '74a20f7718ad02886c9dce8a7c94d2c560528114', 'remigiusz@onet.pl'),
(7, 'dikey', '3619ef165bcc63c66c9c747a686762dee2dead5d', 'dikey@gmail.com');

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
  MODIFY `id_poster` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
