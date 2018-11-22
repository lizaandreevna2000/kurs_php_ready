-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 19 2018 г., 13:36
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `yubik`
--

-- --------------------------------------------------------

--
-- Структура таблицы `event`
--

CREATE TABLE `event` (
  `id_event` int(1) NOT NULL,
  `event_name` varchar(30) NOT NULL,
  `event_date` date NOT NULL,
  `picture` varchar(255) NOT NULL,
  `id_ped` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `event`
--

INSERT INTO `event` (`id_event`, `event_name`, `event_date`, `picture`, `id_ped`) VALUES
(1, 'День знайомств', '2018-06-22', 'img1.png', 5),
(2, ' Відкриття II зміни', '2018-06-23', 'img2.png', 2),
(3, ' Казковий квест', '2018-06-24', 'img3.png', 5),
(4, 'Конкурс відеокліпів', '2018-06-25', 'img6.png', 2),
(5, 'Квест \"Голодні ігри\"', '2018-06-26', 'img4.png', 5),
(6, 'Шалений зоопарк', '2018-06-27', 'img5.png', 2),
(7, 'Супердітки проти Супервожатих', '2018-06-28', 'img7.png', 5),
(8, 'Віденський бал', '2018-06-29', 'img8.png', 2),
(9, 'Свято морозива', '2018-06-30', 'img9.png', 2),
(10, 'День Нептуна', '2018-07-01', 'img10.png', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `otryad`
--

CREATE TABLE `otryad` (
  `id_otr` int(2) NOT NULL,
  `name_otr` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `otryad`
--

INSERT INTO `otryad` (`id_otr`, `name_otr`) VALUES
(1, 'Отряд им.Киркорова'),
(2, 'Дэдпул'),
(3, 'Голуби'),
(4, 'Пончики');

-- --------------------------------------------------------

--
-- Структура таблицы `ped_sostav`
--

CREATE TABLE `ped_sostav` (
  `id_ped` int(2) NOT NULL,
  `FIO` varchar(255) NOT NULL,
  `Info` varchar(255) NOT NULL,
  `dolzhn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `ped_sostav`
--

INSERT INTO `ped_sostav` (`id_ped`, `FIO`, `Info`, `dolzhn`) VALUES
(1, 'Симоненко Валентина Іванівна', 'Завдяки цій людині живе наш улюбленний \"Ювілейний\", наш незамінний директор.', 'Директор табору'),
(2, 'Іванова Марина Юріївна', 'Найкращі старші вожаті \"Ювілейного\"', 'Старша вожата'),
(5, 'Чорнишова Олена Олександрівна', 'Наші найкращі старші вожаті', 'Старша вожата'),
(6, 'Науменко Наталія Юріївна', 'Найкращий вихователь 1 загону', 'Вихователь'),
(7, 'Хамаєва Наталія Сергіївна', '1 загону не доведеться сумувати з цією креативною та цікавою вожатою', 'Вожата'),
(8, 'Ступак Олена Миколаївна', 'Найдобріший та улюбленний вихователь 2 загону', 'Вихователь'),
(9, 'Косенко Єлизавета Андріївна ', 'З цією вожатою ваш загін буде непереможною, сильною та дружною командою! Вона не дасть вам сумувати:)', 'Вожата'),
(11, 'gjfgfk', 'gfgf', 'gfgfg'),
(12, 'Виталия Олеговна ХЗ', 'kjkjj', 'Вожатий'),
(13, 'Виленовна', 'Бла бла бла', 'Вихователь'),
(14, 'Алина Андреевна ', 'бла бла бла бла ', 'Вожатий'),
(15, 'Саша Диджей', 'Диджей', 'Вожатий'),
(16, 'Виленовна 2', 'ghjgh', 'Вихователь'),
(17, 'Виталия Олеговна2', 'kjkjkjjkjj', 'Вожатий'),
(18, 'Алина Андреевна 2', 'hghghg', 'Вожатий');

-- --------------------------------------------------------

--
-- Структура таблицы `sotr_otr`
--

CREATE TABLE `sotr_otr` (
  `id_sotrotr` int(2) NOT NULL,
  `id_ped` int(2) NOT NULL,
  `id_otr` int(2) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `sotr_otr`
--

INSERT INTO `sotr_otr` (`id_sotrotr`, `id_ped`, `id_otr`, `picture`) VALUES
(1, 6, 1, 'Юрьевна.jpg'),
(2, 7, 1, 'Наташа.jpg'),
(10, 13, 6, 'Виленовна.jpg'),
(5, 8, 2, 'Николаевна.jpg'),
(6, 9, 2, 'Лиза.jpg'),
(9, 12, 3, 'Олеговна.jpg'),
(11, 14, 6, 'Алина.jpg'),
(12, 15, 6, 'Саша.jpg'),
(13, 16, 6, 'Виленовна.jpg'),
(14, 17, 3, 'Олеговна.jpg'),
(15, 18, 6, 'Алина.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Индексы таблицы `otryad`
--
ALTER TABLE `otryad`
  ADD PRIMARY KEY (`id_otr`);

--
-- Индексы таблицы `ped_sostav`
--
ALTER TABLE `ped_sostav`
  ADD PRIMARY KEY (`id_ped`);

--
-- Индексы таблицы `sotr_otr`
--
ALTER TABLE `sotr_otr`
  ADD PRIMARY KEY (`id_sotrotr`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otryad`
--
ALTER TABLE `otryad`
  MODIFY `id_otr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `ped_sostav`
--
ALTER TABLE `ped_sostav`
  MODIFY `id_ped` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `sotr_otr`
--
ALTER TABLE `sotr_otr`
  MODIFY `id_sotrotr` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
