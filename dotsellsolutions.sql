-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-11-2022 a las 20:38:15
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `post_info` json NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `test`
--

INSERT INTO `test` (`id`, `post_info`) VALUES
(8, '{\"title\": \"ENSURANCE\", \"features\": \"esto \\r\\nlo otro\", \"subtitle\": \"Seguros\", \"plan_desc\": \"todas las funciones\", \"plan_name\": \"Especial\", \"create_test\": \"true\", \"description\": \"descripcion\", \"plan_action_url\": \"url\", \"plan_action_name\": \"Adquirir\"}'),
(7, '{\"title\": \"\", \"features\": \"\", \"subtitle\": \"\", \"plan_desc\": \"\", \"plan_name\": \"\", \"create_test\": \"true\", \"description\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\"}'),
(9, '{\"title\": \"\", \"features\": \"\", \"subtitle\": \"\", \"plan_desc\": \"\", \"plan_name\": \"\", \"create_test\": \"true\", \"description\": \"<h2 style=\\\"text-align: center; \\\"><del><strong>HOLA MUNDO</strong></del></h2><p><hr></p><p><hr></p><p><hr></p><p><hr></p>\", \"plan_action_url\": \"\", \"plan_action_name\": \"\"}'),
(10, '{\"title\": \"EL FIAO\", \"features\": \"\", \"subtitle\": \"App de administracion de deudas\", \"plan_desc\": \"\", \"plan_name\": \"\", \"create_test\": \"true\", \"description\": \"<p style=\\\"text-align: center; \\\"><strong><em>las deudas faciles con el fiao</em></strong></p>\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}'),
(11, '{\"title\": \"\", \"features\": \"\", \"subtitle\": \"\", \"plan_desc\": \"\", \"plan_name\": \"\", \"create_test\": \"true\", \"description\": \"\", \"plan_action_url\": \"\", \"plan_action_name\": \"\", \"plan_action_price\": \"\"}');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
