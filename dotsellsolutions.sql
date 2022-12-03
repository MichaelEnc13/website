-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-12-2022 a las 23:45:01
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
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post_imgs`
--

INSERT INTO `post_imgs` (`id`, `img_name`, `post_id`) VALUES
(25, 'freemail.png', 74),
(24, 'freemail.png', 73),
(23, 'freemail.png', 72),
(22, 'freemail.png', 71),
(21, 'pos-checkout.png', 70),
(20, 'freemail.png', 70),
(19, 'fiao.png', 70),
(18, 'pos-checkout.png', 56),
(17, 'freemail.png', 56),
(26, 'freemail.png', 75),
(27, 'freemail.png', 76),
(28, 'freemail.png', 77),
(29, 'freemail.png', 78),
(30, 'freemail.png', 79),
(31, 'freemail.png', 80),
(32, 'freemail.png', 81),
(33, 'freemail.png', 82),
(34, 'freemail.png', 83),
(35, 'freemail.png', 84),
(36, 'freemail.png', 85),
(37, 'freemail.png', 86);

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
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `plan` json NOT NULL,
  `date` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sistems_info`
--

INSERT INTO `sistems_info` (`id`, `title`, `subtitle`, `description`, `features`, `imgs`, `status`, `plan`, `date`) VALUES
(82, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7E8B.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(81, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7DBF.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(80, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7CF3.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(79, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7C17.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(77, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php79C4.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(78, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php7ADE.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(74, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php754C.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(75, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php76E3.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(76, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php785B.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(61, 'POST', '', '', '', '{\"img_1\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(71, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php6F9C.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(72, 'POST im', '', '', '', '{\"img_1\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\php71C0.tmp\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(59, 'POST', '', '', '', '{\"img_1\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022'),
(60, 'POST', '', '', '', '{\"img_1\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_2\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_3\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}, \"img_4\": {\"name\": \"\", \"size\": 0, \"type\": \"\", \"error\": 4, \"tmp_name\": \"\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '28-11-2022');

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
