-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2023 a las 22:52:34
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `servicio_ticket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `usuario` varchar(150) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `itelefono` varchar(11) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `usuario`, `correo`, `itelefono`, `contraseña`, `id_cargo`) VALUES
(25, 'ricardo', 'ricardo56', 'ricardi@gmail.com', '2345689', '555555', 2),
(26, 'Richard Vásquez', 'richin34', 'richin-34@hotmail.com', '0960929079', '123456', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id` int(6) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `equipo` varchar(50) NOT NULL,
  `problema` varchar(255) NOT NULL,
  `materiales` varchar(255) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `fecha_reparacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id`, `nombre`, `correo`, `equipo`, `problema`, `materiales`, `fecha_entrega`, `fecha_reparacion`) VALUES
(1, 'ricardo', '', 'ordenador', 'dañado', 'ventilador', '2023-03-09', '2023-03-05 06:24:42'),
(14, 'ricardo2', '', 'pc dañada', 'no encendia', 'fuente de poder', '2023-03-08', '2023-03-08 04:03:53'),
(15, 'ricardo3', '', 'pc', 'dañado', 'cpu', '2023-03-17', '2023-03-08 04:14:29'),
(16, 'ricardo2', '', 'pc dañada', 'pc dañada', 'cpu', '2023-03-08', '2023-03-08 04:52:18'),
(17, 'ricardo2', '', 'pc dañada', 'pc dañada', 'cpu', '2023-03-08', '2023-03-08 04:52:28'),
(18, 'ricardo vasquez', 'ricardo@gmail.com', 'pc', 'la pc no enciende', 'cpu', '2023-03-09', '2023-03-08 05:36:15'),
(32, 'ricardo4', 'ricardo4@gmail.com', 'pc', 'sucia', 'ninguno', '2023-03-08', '2023-03-08 18:59:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `asunto` varchar(100) NOT NULL,
  `mensaje` text NOT NULL,
  `estado` int(11) NOT NULL,
  `fecha_creacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`id`, `nombre`, `correo`, `telefono`, `asunto`, `mensaje`, `estado`, `fecha_creacion`) VALUES
(4, 'maria', 'maria@gmail.com', '23456785', 'pc dañada', 'mi pc esta dañada ', 3, '2023-03-07 07:26:34'),
(5, 'Richard Vásquez', 'richin-34@hotmail.com', '0960929079', 'pc dañada', 'pc no enciende', 3, '2023-03-07 22:42:18'),
(6, 'ricardo2', 'ricardocvasquez2016@gmail.com', '3333333333', 'pc dañada', 'pc dañada no enciende', 1, '2023-03-08 04:35:08'),
(7, 'ricardo vasquez', 'ricardo@gmail.com', '5522336644', 'mantenimiento', 'mi pc no enciende ', 3, '2023-03-08 04:43:17'),
(8, 'rick', 'rick@gmail.com', '55555555', 'reparacion', 'mi pc no enciende ', 1, '2023-03-08 19:44:38'),
(9, 'ricardo3', 'ricardo3@gmail.com', '6666666', 'mantenimiento', 'mi pc esta recalentandose', 1, '2023-03-08 19:53:33'),
(10, 'ricardo4', 'ricardo4@gmail.com', '4444444444', 'limpieza', 'mi pc esta sucia', 1, '2023-03-08 19:56:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `itelefono` varchar(11) NOT NULL,
  `contraseña` varchar(200) NOT NULL,
  `id_cargo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `usuario`, `correo`, `itelefono`, `contraseña`, `id_cargo`) VALUES
(1, 'ricardo', 'ricardo', 'ricardo@gmail.com', '223344556', '123456789', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cargo` (`id_cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_cargo`) REFERENCES `cargo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
