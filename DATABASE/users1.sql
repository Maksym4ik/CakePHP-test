-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 22 2020 г., 08:40
-- Версия сервера: 8.0.12
-- Версия PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin_panel_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstName` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lastName` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(40) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `token` varchar(300) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `password`, `active`, `admin`, `token`) VALUES
(14, 'Vadim', 'Tsupka', 'vadim@gmail.com', '$2y$10$8gSF5VnoA0NLsukH56gU.e8zbXyrWQ47IMVIZrNbQPAKE5FaZUf6e', 0, 1, NULL),
(16, 'Maksym', 'Falat', 'mxfalat@gmail.com', '$2y$10$hFZgQ/m4RXEh4DZ3vEiv7.XbZ6AL.jaQIZeokT3aJEkXwlu1bu7dW', 1, 1, NULL),
(17, 'Ivan', 'Kolomiets', 'Kolomiets@gmail.com', '$2y$10$IAXaR.FqW2z.N/mBclMMLutIlRBjFhwx1ULISPJVKei1i8p83GADe', 0, 0, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
