-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 07 2020 г., 16:56
-- Версия сервера: 8.0.15
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `my_own_database`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `email` varchar(32) NOT NULL,
  `login` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `repassword` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`email`, `login`, `password`, `repassword`) VALUES
('klement1970@mail.ru', 'trytry', '0e311e5b9704f28b4e8557e8fa3fbe7d', 'qwerty12'),
('klementjev.ilia@yandex.ru', 'QlassiQue', '00e7a3f6ebfd8a47e60e71e47d13cf59', 'ilya022002'),
('klementjev.ilia@yandex.ru', 'classic', '25f9e794323b453885f5181f1b624d0b', '123456789'),
('a@a.ru', 'aaaaaaaaaaaa', '552e6a97297c53e592208cf97fbb3b60', 'aaaaaaaaa'),
('klementjev@yandex.ru', 'darova', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
('ytere@g', 'wertygo', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
('qwerty@12', 'ytrewq', 'fcea920f7412b5da7be0cf42b8c93759', '1234567'),
('oper@sobaka', 'operskoy', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
('dsfgdsfg', '131fsdfgsdfg', '4297f44b13955235245b2497399d7a93', '123123'),
('asdaas', 'asdasd', 'a8f5f167f44f4964e6c998dee827110c', 'asdasd'),
('sdfgsdag@', 'afasdfasf', '4297f44b13955235245b2497399d7a93', '123123'),
('asfaf@af', 'asfasfas', '4297f44b13955235245b2497399d7a93', '123123'),
('asfaf@af', 'sdgsdg', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
('asdfdsgsg@', 'sdfsdfasdf', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'qwerty'),
('sadfgsdgasdgf', 'asdasdawd', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
('dgsdgsdg@asdfgd', 'fasfwefw', 'e10adc3949ba59abbe56e057f20f883e', '123456'),
('asdfdsagsadgf@asdf', 'asfq212fw', '4297f44b13955235245b2497399d7a93', '123123'),
('asfdasfd@', 'asdfasfa', '4297f44b13955235245b2497399d7a93', '123123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
