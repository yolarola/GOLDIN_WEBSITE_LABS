-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2021 г., 18:32
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `regon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `login` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`login`, `password`, `mail`) VALUES
('sdasd', '4297f44b13955235245b2497399d7a93', 'sdfsf@mail.ru'),
('sdfsfs', 'eb668593e912c59cae55ebd6569c6c10', 'fsfsfsfsf@fsdf.ru'),
('g', '202cb962ac59075b964b07152d234b70', 'GEGE@MAIL.RU'),
('g1', '202cb962ac59075b964b07152d234b70', 'GEG111E@MAIL.RU'),
('g123fsdf', '202cb962ac59075b964b07152d234b70', 'gdfgdfg'),
('gsdfsdfsfs', '611b5208838c37023cda4e7142cf1eae', 'sdfsdfsdfsd'),
('gdfgdg', '202cb962ac59075b964b07152d234b70', 'gdfgd'),
('gfdgdgf', '52c0941b5310d9e92cd2b047f9404cc3', 'fdgdfgdf'),
('gold', 'e07e81c20cf5935f5225765f0af81755', 'gold'),
('gold1', 'e07e81c20cf5935f5225765f0af81755', 'gold'),
('gold2', 'e07e81c20cf5935f5225765f0af81755', 'gold'),
('gold22', 'e07e81c20cf5935f5225765f0af81755', 'goldgold'),
('test', '098f6bcd4621d373cade4e832627b4f6', 'test'),
('test4', '098f6bcd4621d373cade4e832627b4f6', 'test'),
('tedt5', '098f6bcd4621d373cade4e832627b4f6', 'geerer'),
('test5', '098f6bcd4621d373cade4e832627b4f6', 'test5'),
('opa', 'aadb97a59c56040772603c597490d729', 'opa'),
('test123', 'cc03e747a6afbbcbf8be7668acfebee5', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
