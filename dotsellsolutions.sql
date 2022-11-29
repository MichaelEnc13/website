-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-11-2022 a las 00:47:35
-- Versión del servidor: 8.0.21
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dotsellsolutions`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `post_imgs`
--

DROP TABLE IF EXISTS `post_imgs`;
CREATE TABLE IF NOT EXISTS `post_imgs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img_name` text COLLATE utf8_spanish_ci NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post_imgs`
--

INSERT INTO `post_imgs` (`id`, `img_name`, `post_id`) VALUES
(18, 'pos-checkout.png', 56),
(17, 'freemail.png', 56);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sistems_info`
--

DROP TABLE IF EXISTS `sistems_info`;
CREATE TABLE IF NOT EXISTS `sistems_info` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8_spanish_ci NOT NULL,
  `subtitle` text COLLATE utf8_spanish_ci NOT NULL,
  `description` text COLLATE utf8_spanish_ci NOT NULL,
  `features` text COLLATE utf8_spanish_ci NOT NULL,
  `imgs` json NOT NULL,
  `plan` json NOT NULL,
  `date` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sistems_info`
--

INSERT INTO `sistems_info` (`id`, `title`, `subtitle`, `description`, `features`, `imgs`, `plan`, `date`) VALUES
(56, 'TITLE', 'TILESUB', '<p>sadds</p>', '<p>sadsadsa</p>', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\phpD20A.tmp\"}, \"img_2\": {\"name\": \"pos-checkout.png\", \"size\": 50266, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\phpD20B.tmp\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_info` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `post_info`) VALUES
(21, '{\"post_data\": {\"title\": \"Ensurance\", \"features\": \"<p>gratis</p>\", \"subtitle\": \"Sistema de seguros\", \"plan_desc\": \"\", \"plan_name\": \"\", \"create_test\": \"true\", \"description\": \"<p>SISTEMA DE SEGUROS</p>\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}, \"post_files\": {\"img_1\": {\"name\": \"atlantica.png\", \"size\": 31033, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7E96.tmp\"}, \"img_2\": {\"name\": \"humano.png\", \"size\": 4445, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7E97.tmp\"}, \"img_3\": {\"name\": \"general.png\", \"size\": 18601, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7E98.tmp\"}, \"img_4\": {\"name\": \"pepin.png\", \"size\": 307720, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7E99.tmp\"}}}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
