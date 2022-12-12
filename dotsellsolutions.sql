-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 12-12-2022 a las 23:20:06
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
-- Estructura de tabla para la tabla `plan`
--

DROP TABLE IF EXISTS `plan`;
CREATE TABLE IF NOT EXISTS `plan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `plan_name` text COLLATE utf8_spanish_ci NOT NULL,
  `plan_desc` text COLLATE utf8_spanish_ci NOT NULL,
  `action_name` text COLLATE utf8_spanish_ci NOT NULL,
  `action_url` text COLLATE utf8_spanish_ci NOT NULL,
  `action_price` text COLLATE utf8_spanish_ci NOT NULL,
  `action_opening` int NOT NULL,
  `post_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=71 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `post_imgs`
--

INSERT INTO `post_imgs` (`id`, `img_name`, `post_id`) VALUES
(70, 'freemail.png', 101),
(69, 'pos-checkout.png', 101),
(68, 'seguros-client.png', 101),
(67, 'fiao.png', 101),
(66, 'pos-checkout.png', 100),
(65, 'confirmed.png', 100),
(64, 'nomail.png', 100),
(63, 'seguros-client.png', 100),
(62, 'select.png', 99),
(61, 'trafic.jpg', 99),
(60, 'confirmed.png', 99),
(58, 'trafic.jpg', 98),
(57, 'select.png', 98),
(56, 'nomail.png', 98),
(59, 'select.png', 99),
(55, 'select.png', 98);

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
) ENGINE=MyISAM AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sistems_info`
--

INSERT INTO `sistems_info` (`id`, `title`, `subtitle`, `description`, `features`, `imgs`, `status`, `plan`, `date`) VALUES
(101, 'EL FIAO', 'App de administracion de deudas', '<p>EL FIAO FREE</p>', '<p><ul><li>Gratuito</li><li>Facil de usar</li><li>Gráfico de deudas</li><li><br></li></ul></p>', '{\"img_1\": {\"name\": \"fiao.png\", \"size\": 14296, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\phpFD2B.tmp\"}, \"img_2\": {\"name\": \"seguros-client.png\", \"size\": 43361, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\phpFD2C.tmp\"}, \"img_3\": {\"name\": \"pos-checkout.png\", \"size\": 50266, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\phpFD3D.tmp\"}, \"img_4\": {\"name\": \"freemail.png\", \"size\": 72198, \"type\": \"image/png\", \"error\": 0, \"tmp_name\": \"C:\\\\wamp64\\\\tmp\\\\phpFD3E.tmp\"}}', 1, '{\"plan_desc\": \"\", \"plan_name\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}', '12-12-2022'),
(100, 'FACTEASY', 'Sistema de facturación', '<p>Este sistema de permite administra de forma sencilla&nbsp;</p>', '<ul><li>Fácil de usar</li><li>Administra tu inventario</li><li>Administra tus ventas</li><li>Crea cotizaciones de forma sencilla</li></ul>   ', '{}', 0, '{\"plan_desc\": null, \"plan_name\": null, \"plan_action_url\": null, \"plan_action_name\": null, \"plan_action_price\": null}', '12-12-2022');

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
