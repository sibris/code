-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 26 2016 г., 20:39
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `angularjs`
--
CREATE DATABASE IF NOT EXISTS `angularjs` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `angularjs`;

-- --------------------------------------------------------

--
-- Структура таблицы `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `pic` varchar(255) NOT NULL DEFAULT 'no_img.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп данных таблицы `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `year`, `price`, `pic`) VALUES
(1, 'JavaScript. Карманный справочник', 'Дэвид Флэнаган', 2015, 537, 'no_img.jpg'),
(2, 'ES6 и не только', 'Кайл Симпсон', 2016, 690, 'no_img.jpg'),
(3, 'Изучаем программирование на JavaScript', 'Эрик Фримен, Элизабет Робсон ', 2016, 499, 'no_img.jpg'),
(4, 'JavaScript для чайников', 'Крис Минник, Ева Холланд', 2016, 586, 'no_img.jpg'),
(5, 'JavaScript для профессионалов', 'Джон Резиг, Расс Фергюсон', 2015, 976, 'no_img.jpg'),
(6, 'JavaScript для профессиональных веб-разработчиков', 'Николас Закас', 2016, 946, 'no_img.jpg'),
(7, 'jQuery 2.0 для профессионалов', 'Адам Фримен', 2015, 2194, 'no_img.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
