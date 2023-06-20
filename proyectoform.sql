-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-05-2023 a las 01:50:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyectoform`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guardarregistro`
--

CREATE TABLE `guardarregistro` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `documento` int(255) NOT NULL,
  `telefono` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `guardarregistro`
--

INSERT INTO `guardarregistro` (`id`, `nombre`, `apellido`, `documento`, `telefono`, `email`, `contrasena`) VALUES
(0, 'mac', 'gfhgf', 1088238440, 1231, 'mauricioaguirred49@gmail.com', '3qwasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrarproducto`
--

CREATE TABLE `registrarproducto` (
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `precio` float NOT NULL,
  `caducidad` varchar(255) NOT NULL,
  `tipo_producto` varchar(255) NOT NULL,
  `cantidad_producto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registrarproducto`
--

INSERT INTO `registrarproducto` (`nombre`, `descripcion`, `precio`, `caducidad`, `tipo_producto`, `cantidad_producto`) VALUES
('papa', 'asdadasad', 3200, '', 'vegetales', 50),
('papa', 'Un planteamiento del problema es una descripción concisa de un problema que debe abordarse o una condición que debe mejorarse. Identifica la brecha entre el estado actual (problema) y el estado deseado (objetivo) de un proceso o producto. Centrándose en los hechos, la declaración del problema debe diseñarse abordando las preguntas quién, qué, dónde, cuándo por qué.', 3200, '', 'vegetales', 50),
('papa', 'Un planteamiento del problema es una descripción concisa de un problema que debe abordarse o una condición que debe mejorarse. Identifica la brecha entre el estado actual (problema) y el estado deseado (objetivo) de un proceso o producto. Centrándose en los hechos, la declaración del problema debe diseñarse abordando las preguntas quién, qué, dónde, cuándo por qué.', 3200, '3 meses', 'vegetales', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terminarregistro`
--

CREATE TABLE `terminarregistro` (
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `documento` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `edad` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `terminarregistro`
--

INSERT INTO `terminarregistro` (`nombre`, `apellido`, `documento`, `telefono`, `direccion`, `edad`, `email`, `contrasena`) VALUES
('maurcio', 'aguirre', '1088238440', '3217076359', 'calle 20', 19, 'mauricioaguirre2490@gmail.com', '1234'),
('maurcio', 'aguirre', '1088238440', '7', 'calle 20', 19, 'mauricioaguirre2490@gmail.com', '14567353423'),
('maurcio', 'gfhgf', '1088238440', '1321', 'calle 20', 13, 'macpubg2490@gmail.com', '14676543332'),
('maurcio', 'gfhgf', '1088238440', '12313', 'calle 20', 15, 'mauricioaguirred49@gmail.com', '123ads');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `guardarregistro`
--
ALTER TABLE `guardarregistro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `guardarregistro`
--
ALTER TABLE `guardarregistro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
