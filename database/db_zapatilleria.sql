-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-10-2020 a las 09:48:29
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_zapatilleria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `descripcion`) VALUES
(1, 'ZAPATILLA', 'Calzado de zuela de goma blanda, ideal para hacer deportes o estar entrecasa.'),
(2, 'ZAPATO', 'Calzado ideal para eventos, fiestas y otras celebraciones.'),
(3, 'BOTINES ', 'Los botines son usadas por los futbolistas para practicar el fútbol, ya que son un elemento reglamentario.'),
(4, 'OJOTAS', 'Calzado veraniego, ideal para dias frescos y calurosos, para ir a la playa o simplemente estar en casa.'),
(5, 'SANDALIAS', 'La sandalia es un tipo de calzado, conocido desde la antigüedad, que consiste en una suela resistente atada al pie mediante cuerdas, cintas o bandas de material ligero, quedando los dedos y otras partes del pie al descubierto. '),
(6, 'BOTAS', 'Una bota es un tipo de calzado que cubre el pie y parte del tobillo y que puede llegar hasta la rodilla o la ingle.'),
(22, 'asdasd111', '11233'),
(23, '1111', '1111'),
(24, 'asdasd', 'asdasdasd'),
(25, '123', '123'),
(26, 'hhhh', 'hhhh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `talle` int(11) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `id_categorias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `marca`, `talle`, `color`, `id_categorias`) VALUES
(2, 'ADIDAS', 44, 'BLANCO', 1),
(3, 'REEBOK', 42, 'VIOLETA', 1),
(4, 'TOPPER', 44, 'BLANCO', 1),
(5, 'HAWAIANAS', 40, 'AMARILLO', 4),
(6, 'STORK MAN', 44, 'NEGRO', 2),
(7, 'PIZZONI', 42, 'MARRON', 2),
(8, 'MASSIMO CHIESA', 41, 'MARRON', 2),
(9, 'ADIDAS', 42, 'NEGRO', 3),
(10, 'PUMA', 44, 'NEGRO', 3),
(11, 'PENALTY', 41, 'AMARILLO', 3),
(12, 'ADIDAS', 40, 'BLANCO', 3),
(13, 'ADIDAS', 43, 'NEGRO', 3),
(14, 'CROCS', 43, 'NEGRO', 4),
(15, 'HAWAIANA', 44, 'NEGRO', 4),
(16, 'HAWAIANA', 41, 'BLANCO', 4),
(17, 'LOPEZ CALZADO', 41, 'AZUL', 5),
(18, 'PIZZONI', 44, 'MARRON', 5),
(19, 'RINGO', 40, 'MARRON', 5),
(20, 'STONE', 42, 'NEGRO', 6),
(21, 'MOCASSINO', 44, 'MARRON', 6),
(22, 'ZURICH', 39, 'NEGRO', 6),
(23, 'JORDAN', 44, 'ROJO', 1),
(24, 'JORDAN', 43, 'NEGRO', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `password`) VALUES
(1, 'admin@zapatilleria.com', '$2y$10$ZUwmvIsTDj1QwAHl6B7aFOQWPb0MjpXq7tnmG1/8yfVqSgomvOpVm');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_categorias` (`id_categorias`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
