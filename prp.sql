-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 03 2023 г., 14:05
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `prp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `otz`
--

CREATE TABLE `otz` (
  `id_otz` int(11) NOT NULL,
  `name` text NOT NULL,
  `opisanie` text NOT NULL,
  `who` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `otz`
--

INSERT INTO `otz` (`id_otz`, `name`, `opisanie`, `who`) VALUES
(1, 'ООО «Термогрупп»', 'Хотим отметить успешный опыт сотрудничества ООО «Термогрупп» завод котельного оборудования АО «Ирбис» зарекомендовал себя как добросовестный и надежный поставщик. Приносим свою благодарность и надеемся на долгое и плодотворное взаимовыгодное сотрудничество.', 'генеральный директор ООО «Термогрупп»\r\nКривогуз А.И.\r\n25.10.2022'),
(2, 'ООО «Фирма «ОВИТ»', 'За время работы с ООО «Фирма «ОВИТ» с заводом котельного оборудования АО «Ирбис», выполнявшим поставку отопительного оборудования. Считаем, что не ошиблись в выборе поставщика!', 'руководитель ООО «Фирма «ОВИТ»\r\nОстроумов В.В.\r\n06.10.2022 г.'),
(3, 'ООО ПСП «Стройиндустрия»', 'ООО ПСП «Стройиндустрия» выражает благодарность АО «Завод котельного оборудования «Ирбис» за своевременную поставку оборудования. Мы признательны специалистам завода за профессионализм.', 'генеральный директор ООО ПСП «Стройиндустрия»\r\nХламов В.Г.\r\n15.11.2022 г.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `prava` text NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `name`, `prava`) VALUES
(1, 'Alina', 'e10adc3949ba59abbe56e057f20f883e', 'Алина', 'user'),
(2, 'Sabina', 'e10adc3949ba59abbe56e057f20f883e', 'Алина', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `uslugi`
--

CREATE TABLE `uslugi` (
  `id_uslug` int(11) NOT NULL,
  `name` text NOT NULL,
  `opisanie` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `uslugi`
--

INSERT INTO `uslugi` (`id_uslug`, `name`, `opisanie`, `foto`) VALUES
(1, 'Диспетчеризация котельных и котлов', 'АО «Завод котельного оборудования «Ирбис» предлагает своим клиентам услуги по диспетчеризации котельных и котлов наружного размещения.', 'disp.png'),
(2, 'Пусконаладочные работы', 'ПАО «Завод котельного оборудования и отопительных систем БКМЗ» предлагает своим клиентам услуги по осуществлению пусконаладочных работ (ПНР).', 'puskonalad.png'),
(3, 'Сервисное обслуживание', 'ПАО «Завод котельного оборудования и отопительных систем БКМЗ» предлагает своим клиентам услуги по осуществлению сервисного (технического) обслуживания котельного оборудования.', 'rezhimn-nalad.png'),
(4, 'Лазерная резка металла', 'АО «Завод котельного оборудования «Ирбис» предлагает своим клиентам услуги по лазерной резке металлов и сплавов.', 'lazer.png');

-- --------------------------------------------------------

--
-- Структура таблицы `zvonok`
--

CREATE TABLE `zvonok` (
  `id_zvonok` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `opisanie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `otz`
--
ALTER TABLE `otz`
  ADD PRIMARY KEY (`id_otz`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `uslugi`
--
ALTER TABLE `uslugi`
  ADD PRIMARY KEY (`id_uslug`);

--
-- Индексы таблицы `zvonok`
--
ALTER TABLE `zvonok`
  ADD PRIMARY KEY (`id_zvonok`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `otz`
--
ALTER TABLE `otz`
  MODIFY `id_otz` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `uslugi`
--
ALTER TABLE `uslugi`
  MODIFY `id_uslug` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `zvonok`
--
ALTER TABLE `zvonok`
  MODIFY `id_zvonok` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
