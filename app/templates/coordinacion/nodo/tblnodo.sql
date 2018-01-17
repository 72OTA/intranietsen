-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-01-2018 a las 18:41:07
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `intranietsen`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblnodo`
--

CREATE TABLE `tblnodo` (
  `id_nodo` int(11) NOT NULL,
  `nodo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `subnodo` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblnodo`
--

INSERT INTO `tblnodo` (`id_nodo`, `nodo`, `comuna`, `estado`, `subnodo`) VALUES
(1, 'aa', 'CERR', 1, '2aa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblnodo`
--
ALTER TABLE `tblnodo`
  ADD PRIMARY KEY (`id_nodo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblnodo`
--
ALTER TABLE `tblnodo`
  MODIFY `id_nodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
