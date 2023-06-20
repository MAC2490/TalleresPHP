-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 20-06-2023 a las 22:28:25
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `factura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `documento` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `documento`) VALUES
(1, 'pepito', 10043466),
(3, 'mac', 2147483647),
(4, 'tulio', 100888223),
(5, 'felipe', 10992833),
(6, 'camilo', 19734532),
(7, 'carlos', 12344234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

DROP TABLE IF EXISTS `compra`;
CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) NOT NULL,
  `cantidad` int(200) NOT NULL,
  `precio` int(200) NOT NULL,
  `total` int(200) NOT NULL,
  `nombre_comprador` varchar(255) NOT NULL,
  `cantidad_pago` int(200) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `cantidad_total` int(200) DEFAULT '0',
  `hora` time DEFAULT NULL,
  `mes` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `producto`, `cantidad`, `precio`, `total`, `nombre_comprador`, `cantidad_pago`, `estado`, `cantidad_total`, `hora`, `mes`) VALUES
(89, 'pera', 10, 9000, 90000, 'mac', 110000, 'Activo', 311000, '15:33:28', '2023-06-20'),
(91, 'manzana', 5, 5000, 25000, 'carlos', 50000, 'Activo', 311000, '15:42:03', '2023-06-20'),
(92, 'uva', 5, 3000, 15000, 'camilo', 20000, 'Activo', 311000, '15:42:38', '2023-06-20'),
(93, 'pera', 1, 9000, 9000, 'felipe', 10000, 'Activo', 311000, '15:42:56', '2023-06-21'),
(94, 'papa', 2, 5000, 10000, 'tulio', 10000, 'Activo', 311000, '15:43:26', '2023-06-21'),
(95, 'coca cola', 1, 35000, 35000, 'felipe', 50000, 'Activo', 311000, '15:43:38', '2023-06-21'),
(96, 'uva', 4, 3000, 12000, 'mac', 15000, 'Activo', 311000, '15:43:53', '2023-06-22'),
(97, 'pera', 5, 9000, 45000, 'pepito', 50000, 'Activo', 311000, '15:44:08', '2023-06-29'),
(98, 'coca cola', 2, 35000, 70000, 'carlos', 100000, 'Activo', 311000, '15:44:51', '2023-06-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `i` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(10) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `costo` int(10) NOT NULL,
  `precio` int(10) NOT NULL,
  `cantida_inventario` int(11) NOT NULL,
  PRIMARY KEY (`i`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`i`, `id`, `nombre`, `descripcion`, `costo`, `precio`, `cantida_inventario`) VALUES
(1, 123, 'coca cola', 'sadsad ', 30000, 35000, 60),
(2, 9737, 'papa', 'sadadasdadada  ', 4500, 5000, 100),
(3, 2344, 'pera', 'asdasdasdasdasdasd', 8700, 9000, 56),
(4, 4566, 'manzana', 'sadadasdadasd', 3400, 5000, 34),
(5, 89809, 'uva', 'sadasdsadasdadas', 2300, 3000, 54);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` int(20) NOT NULL,
  `producto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `direccion`, `telefono`, `producto`) VALUES
(1, 'mauricio', 'calle 02      ', 12313, 'coca cola'),
(2, 'mac', 'calle 90', 2113123, 'uva'),
(3, 'juanito ', 'calle 34', 3421144, 'papa'),
(4, 'oscar', 'calle 34', 31555155, 'pera');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
