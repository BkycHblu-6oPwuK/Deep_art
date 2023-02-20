-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 08 2023 г., 19:44
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `slava`
--

-- --------------------------------------------------------

--
-- Структура таблицы `carpet`
--

CREATE TABLE `carpet` (
  `id` int(11) NOT NULL,
  `id_master` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `carpet`
--

INSERT INTO `carpet` (`id`, `id_master`, `id_user`, `name`, `tel`, `email`, `date`, `time`, `status`) VALUES
(1, 1, 1, '1', '1', '1@1', '2023-02-09', '10:00', 1),
(2, 1, 1, '1', '1', '1@1', '2023-02-09', '10:00', 1),
(3, 1, 1, '1', '1', '1@1', '2023-02-09', '10:00', 2),
(4, 1, 1, '1', '1', '1@1', '2023-02-09', '10:00', 2),
(5, 1, 1, '1', '1', '1@1', '2023-02-09', '10:00', 2),
(6, 2, 1, '1', '1', '1@1', '2023-02-09', '10:00', 2),
(7, 2, 1, '1', '1', '1@1', '2023-02-09', '10:00', 2),
(8, 2, 1, '1', '1', '1@1', '2023-02-10', '11:00', 2),
(9, 2, 1, '1', '1', '1@1', '2023-02-11', '11:00', 2),
(10, 2, 1, '1', '1', '1@1', '2023-02-09', '12:00', 2),
(11, 2, 1, '1', '1', '1@1', '2023-02-10', '11:00', 2),
(12, 2, 1, '1', '1', '1@1', '2023-02-09', '14:00', 1),
(13, 2, 1, '1', '1', '1@1', '2023-02-10', '11:00', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `gallary`
--

CREATE TABLE `gallary` (
  `id` int(11) NOT NULL,
  `id_master` int(11) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallary`
--

INSERT INTO `gallary` (`id`, `id_master`, `img`) VALUES
(22, 1, '1.png'),
(23, 1, '2.png'),
(24, 1, '3.png'),
(25, 1, '4.png'),
(26, 1, '5.png'),
(27, 1, '6.png');

-- --------------------------------------------------------

--
-- Структура таблицы `masters`
--

CREATE TABLE `masters` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `masters`
--

INSERT INTO `masters` (`id`, `name`, `stage`, `desc`, `foto`) VALUES
(1, 'Юлия Костюченк', '3 года', 'Работы этого мастера = изящное и качественное исполнение! <br><br>\r\nЮлия закончила художественную школу. Успешно прошла обучение в нашей студии, отлично проявила себя и работает в этой сфере с 2017года. <br><br>\r\nЮлия умеет найти общий язык и понять каждого нашего гостя. И всегда воплотит татуировку вашей мечты, учитывая пожелания. Как и другие мастера нашей команды – создаст для вас индивидуальный эскиз. <br><br>\r\nИмеет особое виденье, как грамотно украсить татуировкой женское тело!', '74b673e44ff2236c218855b3ca8c5be4.jpg'),
(2, 'Станислав Котельников', '6 лет', 'Станислав – мастер немного мрачной, но эффектной графики! Он готов раскрыть любую идею в уникальной интерпретации. Такая работа будет только у вас! <br><br>\r\nВ татуировке Станислав с 2014 года, создает индивидуальные эскизы. Его кредо –  идеальное исполнение каждой татуировки! Он знает и умеет делать ровный контур и надежный покрас. Не боится сложных мест нанесения. Участник Московского тату-фестиваля. <br><br>', 'мастер2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `styles`
--

CREATE TABLE `styles` (
  `id` int(11) NOT NULL,
  `id_master` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `styles`
--

INSERT INTO `styles` (`id`, `id_master`, `title`) VALUES
(1, 1, 'Black and grey'),
(2, 1, 'миниатюры графика'),
(3, 2, 'Графика, контурные работы'),
(4, 2, 'геометрия, орнаменты');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tel` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `tel`, `name`, `status`) VALUES
(1, '1@1', 'b7f09f1a6db323a068da2d0353e2e757', '1', '1', 1),
(2, '2@2', 'b0829550b12f25d631246a64d47579e6', '2', '2', 0),
(3, '3@3', 'a9d54f117d29d50e19a7797f3afb890a', '3', '3', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `carpet`
--
ALTER TABLE `carpet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_master` (`id_master`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `gallary`
--
ALTER TABLE `gallary`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_master` (`id_master`);

--
-- Индексы таблицы `masters`
--
ALTER TABLE `masters`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_master` (`id_master`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `carpet`
--
ALTER TABLE `carpet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `gallary`
--
ALTER TABLE `gallary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `masters`
--
ALTER TABLE `masters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `styles`
--
ALTER TABLE `styles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `carpet`
--
ALTER TABLE `carpet`
  ADD CONSTRAINT `carpet_ibfk_1` FOREIGN KEY (`id_master`) REFERENCES `masters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carpet_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `gallary`
--
ALTER TABLE `gallary`
  ADD CONSTRAINT `gallary_ibfk_1` FOREIGN KEY (`id_master`) REFERENCES `masters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `styles`
--
ALTER TABLE `styles`
  ADD CONSTRAINT `styles_ibfk_1` FOREIGN KEY (`id_master`) REFERENCES `masters` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
