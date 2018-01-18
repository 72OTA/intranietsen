-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2018 a las 21:38:42
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
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `impuesto` double NOT NULL,
  `tipo_moneda` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ciudad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `region` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ext_logo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblactividad`
--

CREATE TABLE `tblactividad` (
  `id_actividad` int(11) NOT NULL,
  `actividad` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblareas`
--

CREATE TABLE `tblareas` (
  `id_area` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblausencias`
--

CREATE TABLE `tblausencias` (
  `id_tblausencias` int(11) NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_ausencia` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `desde` date NOT NULL,
  `hasta` date NOT NULL,
  `usu_registra` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fechamod` date DEFAULT NULL,
  `id_area` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbloque`
--

CREATE TABLE `tblbloque` (
  `id_bloque` int(11) NOT NULL,
  `bloque` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `limite_q_programacion` int(11) NOT NULL DEFAULT '280',
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcargos`
--

CREATE TABLE `tblcargos` (
  `id_cargo` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcomuna`
--

CREATE TABLE `tblcomuna` (
  `id_comuna` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmenu`
--

CREATE TABLE `tblmenu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `PosI` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(45) CHARACTER SET latin1 NOT NULL,
  `glyphicon` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblmenu`
--

INSERT INTO `tblmenu` (`id_menu`, `PosI`, `descripcion`, `glyphicon`) VALUES
(1, 1, 'CONFIRMACION', 'fa-headphones'),
(99, 99, 'ADMINISTRACIÓN', 'fa-user'),
(2, 2, 'RR HH', 'fa-users'),
(4, 4, 'OPERACIONES', 'fa-tachometer'),
(3, 3, 'REDES', 'fa-sitemap'),
(5, 5, 'PREVENCION', 'fa-fire-extinguisher'),
(7, 7, 'GERENCIA', 'fa-balance-scale'),
(6, 6, 'DESPACHO', 'fa-phone-square');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblmotivollamado`
--

CREATE TABLE `tblmotivollamado` (
  `id_motivo` int(11) NOT NULL,
  `motivo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblordenes`
--

CREATE TABLE `tblordenes` (
  `id_orden` int(11) NOT NULL,
  `n_orden` int(11) NOT NULL,
  `operador` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `reg` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rut_cliente` int(11) NOT NULL,
  `fecha_compromiso` date NOT NULL,
  `bloque` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `motivo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `comuna` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `actividad` varchar(22) COLLATE utf8_unicode_ci NOT NULL,
  `resultado` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `observacion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_dia` date NOT NULL,
  `nodo` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `subnodo` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfiles`
--

CREATE TABLE `tblperfiles` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(35) CHARACTER SET latin1 NOT NULL,
  `id_menu` int(10) NOT NULL DEFAULT '0',
  `id_submenu` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblperfilesuser`
--

CREATE TABLE `tblperfilesuser` (
  `id` int(11) NOT NULL,
  `id_user` varchar(50) CHARACTER SET latin1 NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_submenu` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblpersonal`
--

CREATE TABLE `tblpersonal` (
  `id_personal` int(11) NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nombres` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `f_nacimiento` date NOT NULL,
  `fono` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cargo` int(11) NOT NULL DEFAULT '0',
  `id_area` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL DEFAULT '0',
  `estado` smallint(1) NOT NULL DEFAULT '1',
  `id_super` int(11) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblresultado`
--

CREATE TABLE `tblresultado` (
  `id_resultado` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  `cumplimiento` int(11) NOT NULL,
  `grupo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblsubmenu`
--

CREATE TABLE `tblsubmenu` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `id_submenu` int(10) UNSIGNED NOT NULL,
  `PosS` int(10) UNSIGNED NOT NULL,
  `url` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(45) CHARACTER SET latin1 NOT NULL,
  `estado` smallint(5) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tblsubmenu`
--

INSERT INTO `tblsubmenu` (`id_menu`, `id_submenu`, `PosS`, `url`, `descripcion`, `estado`) VALUES
(99, 2, 2, 'administracion/usuario', 'Usuarios', 1),
(99, 3, 3, 'administracion/perfiles', 'Perfiles', 1),
(2, 1, 1, 'rrhh', 'Principal', 1),
(1, 3, 3, 'confirmacion/programacion', 'Programacion', 1),
(3, 1, 1, 'redes', 'Principal', 1),
(5, 1, 1, 'prevencion', 'Principal', 1),
(4, 1, 1, 'operaciones', 'Principal', 1),
(99, 1, 1, 'administracion', 'Principal', 1),
(99, 4, 4, 'administracion/empresa', 'Datos Empresa', 1),
(2, 2, 2, 'rrhh/mantenedores_crud_masters', 'Maestros RRHH', 1),
(2, 3, 3, 'rrhh/horasextra', 'Horas Extra', 1),
(2, 4, 4, 'rrhh/revisar_horas_extras_pendientes', 'Revisar Solicitud', 1),
(2, 5, 5, 'rrhh/revisarausencias', 'Registro Ausencias', 1),
(2, 6, 6, 'rrhh/cargar_turnos', 'Cargar Turnos', 1),
(2, 7, 7, 'rrhh/revisar_turnos', 'Ver Turno Plataforma', 1),
(1, 2, 2, 'confirmacion/mantenedores_crud_masters', 'Maestros Confirmacion', 1),
(1, 1, 1, 'confirmacion/confirmacion', 'Principal', 1),
(1, 4, 4, 'confirmacion/listar_ordenes', 'Revisar Confirmaciones', 1),
(7, 1, 1, 'gerencia', 'Principal', 1),
(7, 2, 2, 'gerencia/mantenedores_crud_masters', 'Maestros Gerencia', 1),
(6, 1, 1, 'coordinacion', 'Principal', 1),
(6, 2, 2, 'coordinacion/mantenedores_crud_masters', 'Maestros Coordinacion', 1),
(2, 8, 8, 'rrhh/asignar_ejecutivo', 'Asignar ejecutivos', 1),
(6, 3, 3, 'coordinacion/asignar_comuna', 'Asignar Comuna', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbltecnicos`
--

CREATE TABLE `tbltecnicos` (
  `id_tecnicos` int(11) NOT NULL,
  `rut` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `codigo` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbltecnicos`
--

INSERT INTO `tbltecnicos` (`id_tecnicos`, `rut`, `nombre`, `codigo`, `estado`) VALUES
(1, '18050468', 'Felipe Andres Andrade Valenzuela', 'MP524', '1'),
(2, '17101753', 'MACA', '1212', '1'),
(3, '2222222222', 'JORGE JARA', 'ASS221', '0'),
(4, '22222222', 'Ejemplo', 'ej12', '0'),
(54, '5', 'p', 'a', '1'),
(51, '2', 'e', 'd', '1'),
(56, '7', 'a', 'e', '1'),
(53, '4', 'i', 'v', '1'),
(55, '6', 'e', 'l', '1'),
(57, '8', 'n', 'n', '1'),
(58, '89', 'd', 'z', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblturnos`
--

CREATE TABLE `tblturnos` (
  `id` int(10) UNSIGNED NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `servicio` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `hora_ingreso` time NOT NULL,
  `hora_salida` time NOT NULL,
  `n_semana` int(11) DEFAULT '0',
  `hora_turnos` double DEFAULT '0',
  `horario_colacion` double DEFAULT '0',
  `hora_colacion` time NOT NULL,
  `break_1` time NOT NULL,
  `break_2` time NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_coordinacion_ejecutivo_comuna`
--

CREATE TABLE `tbl_coordinacion_ejecutivo_comuna` (
  `id_asignacion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `comuna` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tbl_coordinacion_ejecutivo_comuna`
--

INSERT INTO `tbl_coordinacion_ejecutivo_comuna` (`id_asignacion`, `id_usuario`, `comuna`) VALUES
(76, 112, '0'),
(75, 111, '0'),
(74, 110, '0'),
(73, 109, '0'),
(72, 108, '0'),
(71, 107, '0'),
(70, 106, '0'),
(69, 105, '0'),
(68, 104, '0'),
(67, 103, '0'),
(66, 102, '0'),
(65, 101, '0'),
(64, 100, '0'),
(63, 99, '0'),
(62, 98, '0'),
(61, 97, '0'),
(60, 96, '0'),
(59, 95, '0'),
(58, 94, '0'),
(57, 93, '0'),
(56, 92, '0'),
(55, 91, '0'),
(54, 90, '0'),
(53, 89, '0'),
(52, 88, '0'),
(51, 87, '0'),
(50, 86, '0'),
(49, 85, '0'),
(48, 84, '0'),
(47, 83, '0'),
(46, 82, '0'),
(45, 81, '0'),
(44, 80, '0'),
(43, 79, '0'),
(42, 78, '0'),
(41, 77, '0'),
(40, 76, '0'),
(39, 75, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_det_hora_extra`
--

CREATE TABLE `tbl_det_hora_extra` (
  `id_det` int(11) NOT NULL,
  `id_enc_hx` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_enc_hora_extra`
--

CREATE TABLE `tbl_enc_hora_extra` (
  `id_enc_hx` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `id_user` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `motivo_solicitud` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` time NOT NULL,
  `hora_hasta` time NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `motivo_respuesta` varchar(120) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Sin responder'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_historialarchivoscargados`
--

CREATE TABLE `tbl_historialarchivoscargados` (
  `id` double NOT NULL,
  `app` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nombre_archivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_horasextra`
--

CREATE TABLE `tbl_horasextra` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `rut` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora_hasta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `solicitante` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pendiente',
  `id_user` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_super_ejecutivo`
--

CREATE TABLE `tbl_super_ejecutivo` (
  `id` int(11) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_personal_asignado` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmp_horasextra`
--

CREATE TABLE `tmp_horasextra` (
  `id` int(11) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `fecha_solicitud` date NOT NULL,
  `rut` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `hora_desde` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hora_hasta` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `motivo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `id_enc_hx` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `fono` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `tmp_pass` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `perfil` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rol` smallint(1) NOT NULL DEFAULT '0',
  `rut_personal` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `estado` smallint(1) NOT NULL DEFAULT '1',
  `foto` smallint(1) NOT NULL DEFAULT '0',
  `name_foto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pagina_inicio` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `online_fecha` int(20) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `tblactividad`
--
ALTER TABLE `tblactividad`
  ADD PRIMARY KEY (`id_actividad`);

--
-- Indices de la tabla `tblareas`
--
ALTER TABLE `tblareas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  ADD PRIMARY KEY (`id_tblausencias`);

--
-- Indices de la tabla `tblbloque`
--
ALTER TABLE `tblbloque`
  ADD PRIMARY KEY (`id_bloque`);

--
-- Indices de la tabla `tblcargos`
--
ALTER TABLE `tblcargos`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `tblcomuna`
--
ALTER TABLE `tblcomuna`
  ADD PRIMARY KEY (`id_comuna`);

--
-- Indices de la tabla `tblmenu`
--
ALTER TABLE `tblmenu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `tblmotivollamado`
--
ALTER TABLE `tblmotivollamado`
  ADD PRIMARY KEY (`id_motivo`);

--
-- Indices de la tabla `tblnodo`
--
ALTER TABLE `tblnodo`
  ADD PRIMARY KEY (`id_nodo`);

--
-- Indices de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  ADD PRIMARY KEY (`id_orden`);

--
-- Indices de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tblperfilesuser`
--
ALTER TABLE `tblperfilesuser`
  ADD PRIMARY KEY (`id_user`,`id_menu`,`id_submenu`,`id`) USING BTREE;

--
-- Indices de la tabla `tblpersonal`
--
ALTER TABLE `tblpersonal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indices de la tabla `tblresultado`
--
ALTER TABLE `tblresultado`
  ADD PRIMARY KEY (`id_resultado`);

--
-- Indices de la tabla `tblsubmenu`
--
ALTER TABLE `tblsubmenu`
  ADD PRIMARY KEY (`id_menu`,`id_submenu`) USING BTREE;

--
-- Indices de la tabla `tbltecnicos`
--
ALTER TABLE `tbltecnicos`
  ADD PRIMARY KEY (`id_tecnicos`);

--
-- Indices de la tabla `tblturnos`
--
ALTER TABLE `tblturnos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_2` (`rut`,`fecha`);

--
-- Indices de la tabla `tbl_coordinacion_ejecutivo_comuna`
--
ALTER TABLE `tbl_coordinacion_ejecutivo_comuna`
  ADD PRIMARY KEY (`id_asignacion`);

--
-- Indices de la tabla `tbl_det_hora_extra`
--
ALTER TABLE `tbl_det_hora_extra`
  ADD PRIMARY KEY (`id_det`);

--
-- Indices de la tabla `tbl_enc_hora_extra`
--
ALTER TABLE `tbl_enc_hora_extra`
  ADD PRIMARY KEY (`id_enc_hx`);

--
-- Indices de la tabla `tbl_historialarchivoscargados`
--
ALTER TABLE `tbl_historialarchivoscargados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_horasextra`
--
ALTER TABLE `tbl_horasextra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_super_ejecutivo`
--
ALTER TABLE `tbl_super_ejecutivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tmp_horasextra`
--
ALTER TABLE `tmp_horasextra`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblactividad`
--
ALTER TABLE `tblactividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblareas`
--
ALTER TABLE `tblareas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tblausencias`
--
ALTER TABLE `tblausencias`
  MODIFY `id_tblausencias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tblbloque`
--
ALTER TABLE `tblbloque`
  MODIFY `id_bloque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblcargos`
--
ALTER TABLE `tblcargos`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tblmenu`
--
ALTER TABLE `tblmenu`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `tblmotivollamado`
--
ALTER TABLE `tblmotivollamado`
  MODIFY `id_motivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tblnodo`
--
ALTER TABLE `tblnodo`
  MODIFY `id_nodo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tblordenes`
--
ALTER TABLE `tblordenes`
  MODIFY `id_orden` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tblperfiles`
--
ALTER TABLE `tblperfiles`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de la tabla `tblperfilesuser`
--
ALTER TABLE `tblperfilesuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tblpersonal`
--
ALTER TABLE `tblpersonal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT de la tabla `tblresultado`
--
ALTER TABLE `tblresultado`
  MODIFY `id_resultado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tblsubmenu`
--
ALTER TABLE `tblsubmenu`
  MODIFY `id_submenu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbltecnicos`
--
ALTER TABLE `tbltecnicos`
  MODIFY `id_tecnicos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `tblturnos`
--
ALTER TABLE `tblturnos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;

--
-- AUTO_INCREMENT de la tabla `tbl_coordinacion_ejecutivo_comuna`
--
ALTER TABLE `tbl_coordinacion_ejecutivo_comuna`
  MODIFY `id_asignacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `tbl_det_hora_extra`
--
ALTER TABLE `tbl_det_hora_extra`
  MODIFY `id_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tbl_historialarchivoscargados`
--
ALTER TABLE `tbl_historialarchivoscargados`
  MODIFY `id` double NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbl_horasextra`
--
ALTER TABLE `tbl_horasextra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tbl_super_ejecutivo`
--
ALTER TABLE `tbl_super_ejecutivo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tmp_horasextra`
--
ALTER TABLE `tmp_horasextra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
