-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2020 a las 00:06:52
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_daq`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id`, `name`, `msg`, `date`) VALUES
(1, 'cm', 'hola', '2017-09-15 22:11:01'),
(2, 'cm', 'to bien ??\r\n', '2017-09-16 00:22:43'),
(3, 'cm', 'No entiendo\r\n', '2017-10-20 13:26:33'),
(4, 'cm', 'Hola Luis', '2020-06-06 01:44:58'),
(5, 'lp', 'como andas ??\r\n', '2020-06-06 01:45:19'),
(6, 'cm', 'bien y vos ??\r\n', '2020-06-06 01:45:42'),
(7, 'lp', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', '2020-06-06 01:45:54'),
(8, 'cm', 'aca andams. ...\r\n', '2020-06-06 01:46:11'),
(9, 'lp', 'bien ahí ', '2020-06-06 01:46:22'),
(10, 'cm', 'sdf sdfsdff asdf asdf df\r\nsad asdf  asdfasdf dsfa sdf\r\n adfasdf asdfa sdf  asdf\r\n asdf asdf', '2020-06-06 01:46:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `codigo` int(2) NOT NULL,
  `descripcion` text COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_user`
--

CREATE TABLE `log_user` (
  `id_log` int(11) NOT NULL,
  `id_usuario` smallint(6) UNSIGNED NOT NULL,
  `fecha` date NOT NULL DEFAULT '2000-01-01',
  `hora` time NOT NULL DEFAULT '00:00:00',
  `ip` varchar(25) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `log_user`
--

INSERT INTO `log_user` (`id_log`, `id_usuario`, `fecha`, `hora`, `ip`) VALUES
(1, 1, '2015-05-16', '21:18:00', ''),
(2, 1, '2015-05-16', '21:52:00', ''),
(3, 1, '2015-05-16', '21:57:00', ''),
(4, 1, '2015-05-16', '21:58:00', ''),
(5, 1, '2017-05-16', '11:03:00', ''),
(6, 1, '2017-05-16', '19:14:00', ''),
(7, 1, '2017-05-16', '20:32:00', ''),
(8, 1, '2017-05-16', '20:39:00', ''),
(9, 1, '2017-05-16', '20:41:00', ''),
(10, 1, '2017-05-16', '21:04:00', ''),
(11, 1, '2017-05-16', '21:10:00', ''),
(12, 1, '2017-05-16', '21:28:00', ''),
(13, 1, '2017-05-16', '21:29:00', ''),
(14, 1, '2017-05-16', '21:32:00', ''),
(15, 1, '2018-05-16', '19:10:00', ''),
(16, 1, '2018-05-16', '19:27:00', ''),
(17, 1, '2018-05-16', '19:28:00', ''),
(18, 1, '2018-05-16', '20:16:00', ''),
(19, 1, '2019-05-16', '18:47:00', ''),
(20, 1, '2019-05-16', '19:16:00', ''),
(21, 1, '2019-05-16', '19:23:00', ''),
(22, 1, '2019-05-16', '20:00:00', ''),
(23, 1, '2019-05-16', '20:48:00', ''),
(24, 1, '2019-05-16', '20:52:00', ''),
(25, 3, '2019-05-16', '21:02:00', ''),
(26, 1, '2019-05-16', '21:12:00', ''),
(27, 1, '2019-05-16', '21:14:00', ''),
(28, 1, '2021-05-16', '11:55:00', ''),
(29, 1, '2021-05-16', '14:47:00', ''),
(30, 1, '2021-05-16', '15:29:00', ''),
(31, 5, '2021-05-16', '15:41:00', ''),
(32, 1, '2026-05-16', '18:20:00', ''),
(33, 1, '2026-05-16', '19:55:00', ''),
(34, 2, '2026-05-16', '19:56:00', ''),
(35, 1, '2026-05-16', '19:56:00', ''),
(36, 5, '2026-05-16', '19:56:00', ''),
(37, 2, '2026-05-16', '21:05:00', ''),
(38, 2, '2026-05-16', '21:06:00', ''),
(39, 1, '2002-06-16', '14:17:00', ''),
(40, 1, '2002-06-16', '19:31:00', ''),
(41, 1, '2002-06-16', '19:33:00', ''),
(42, 2, '2002-06-16', '19:35:00', ''),
(43, 2, '2002-06-16', '19:38:00', ''),
(44, 2, '2002-06-16', '20:45:00', ''),
(45, 6, '2002-06-16', '20:57:00', ''),
(46, 2, '2002-06-16', '20:57:00', ''),
(47, 1, '2003-06-16', '14:14:00', ''),
(48, 1, '2003-06-16', '14:18:00', ''),
(49, 1, '2003-06-16', '14:20:00', ''),
(50, 1, '2007-06-16', '21:07:00', ''),
(51, 1, '2016-06-16', '18:07:00', ''),
(52, 2, '2016-06-16', '18:08:00', ''),
(53, 2, '2016-06-16', '18:30:00', ''),
(54, 2, '2016-06-16', '18:48:00', ''),
(55, 2, '2016-06-16', '19:26:00', ''),
(56, 4, '2016-06-16', '20:27:00', ''),
(57, 4, '2016-06-16', '20:28:00', ''),
(58, 4, '2016-06-16', '20:29:00', ''),
(59, 4, '2023-06-16', '17:59:00', ''),
(60, 4, '2030-06-16', '19:34:00', ''),
(61, 1, '2030-06-16', '20:12:00', ''),
(62, 4, '2030-06-16', '20:12:00', ''),
(63, 1, '2030-06-16', '20:13:00', ''),
(64, 4, '2007-07-16', '18:17:00', ''),
(65, 1, '2007-07-16', '18:18:00', ''),
(66, 1, '2007-07-16', '18:19:00', ''),
(67, 4, '2007-07-16', '19:30:00', ''),
(68, 1, '2007-07-16', '19:32:00', ''),
(69, 4, '2007-07-16', '19:34:00', ''),
(70, 1, '2007-07-16', '19:35:00', ''),
(71, 4, '2014-07-16', '18:35:00', ''),
(72, 1, '2014-07-16', '19:05:00', ''),
(73, 4, '2014-07-16', '19:35:00', ''),
(74, 4, '2014-07-16', '21:16:00', ''),
(75, 1, '2018-08-16', '18:01:00', ''),
(76, 4, '2018-08-16', '18:55:00', ''),
(77, 4, '2018-08-16', '19:00:00', ''),
(78, 1, '2018-08-16', '19:21:00', ''),
(79, 4, '2018-08-16', '19:22:00', ''),
(80, 4, '2018-08-16', '20:00:00', ''),
(81, 4, '2025-08-16', '18:44:00', ''),
(82, 4, '2025-08-16', '19:31:00', ''),
(83, 4, '2025-08-16', '19:35:00', ''),
(84, 4, '2025-08-16', '19:38:00', ''),
(85, 4, '2025-08-16', '19:58:00', ''),
(86, 4, '2025-08-16', '20:01:00', ''),
(87, 4, '2025-08-16', '20:35:00', ''),
(88, 4, '2025-08-16', '20:43:00', ''),
(89, 4, '2001-09-16', '20:19:00', ''),
(90, 4, '2008-09-16', '18:14:00', ''),
(91, 4, '2008-09-16', '18:15:00', ''),
(92, 4, '2015-09-16', '18:30:00', ''),
(93, 4, '2015-09-16', '19:24:00', ''),
(94, 4, '2015-09-16', '20:25:00', ''),
(95, 4, '2019-09-16', '16:12:00', ''),
(96, 4, '2028-09-16', '16:45:00', ''),
(97, 4, '2028-09-16', '17:06:00', ''),
(98, 4, '2013-10-16', '10:01:00', ''),
(99, 1, '2020-10-16', '12:35:00', ''),
(100, 4, '2027-10-16', '16:47:00', ''),
(101, 4, '2027-10-16', '21:05:00', ''),
(102, 4, '2003-11-16', '20:07:00', ''),
(103, 4, '2023-03-17', '19:51:00', ''),
(104, 4, '2030-03-17', '16:32:00', ''),
(105, 4, '2009-04-17', '19:51:00', ''),
(106, 1, '2028-04-17', '21:03:00', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `apellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `sexo` varchar(20) COLLATE latin1_spanish_ci NOT NULL,
  `dni` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `carrera` varchar(20) COLLATE latin1_spanish_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `user` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `passwd` varchar(32) COLLATE latin1_spanish_ci NOT NULL,
  `rol` varchar(20) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `nombre`, `apellido`, `sexo`, `dni`, `carrera`, `telefono`, `email`, `user`, `passwd`, `rol`) VALUES
(150, 'Claudia Alejandra', 'Malvicini', 'Femenino', '14398969', 'Construcciones', '4256 4177', 'cm@hotmail', 'cm', '81dc9bdb52d04dc20036dbd8313ed055', 'administrador'),
(151, 'Luis', 'Perconti', 'Masculino', '', '', '', 'p_luisss@yahoo.com.ar', 'lp', '81dc9bdb52d04dc20036dbd8313ed055', 'administrador'),
(152, 'Milo', 'Perconti Gutierrez', 'Masculino', '45454545', 'Mecatronica', '42564177', 'milo@milo', 'mp', '81dc9bdb52d04dc20036dbd8313ed055', 'Docente'),
(153, 'Lucia', 'Guti', 'Femenino', '', 'Quimica', '', 'luli@gmail', 'lg', '81dc9bdb52d04dc20036dbd8313ed055', 'Estudiante'),
(155, 'Hector', 'Marucci', 'Masculino', '12121212', 'Quimica', '1143435445', 'hetito@gmail', 'hm', '81dc9bdb52d04dc20036dbd8313ed055', 'Estudiante');
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) COLLATE latin1_spanish_ci NOT NULL,
  `descripcion` varchar(128) COLLATE latin1_spanish_ci NOT NULL DEFAULT 'Puede :'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id_rol`, `rol`, `descripcion`) VALUES
(1, 'Administrador General', 'Puede : Hacer Todo'),
(2, 'Supervisor Proyecto', 'Adminstra un proyecto determin'),
(3, 'Programador Senior', 'Realiza tareas de desarollo'),
(4, 'Docente', 'Supervisa un proyecto de su materia\r\nuno y solo uno'),
(5, 'Directivo', 'Puede ver informes y generar tickets para este proyecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensor`
--

CREATE TABLE `sensor` (
  `id` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `valor` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sensor`
--

INSERT INTO `sensor` (`id`, `tipo`, `valor`, `date`) VALUES
(1, 'humedad', 52, '2020-10-10 22:06:51'),
(2, 'temperatura', 69, '2020-10-10 22:06:51'),
(3, 'gas', 22, '2020-10-10 22:06:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`codigo`);

--
-- Indices de la tabla `log_user`
--
ALTER TABLE `log_user`
  ADD PRIMARY KEY (`id_log`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `log_user`
--
ALTER TABLE `log_user`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `sensor`
--
ALTER TABLE `sensor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
