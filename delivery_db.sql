-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2021 a las 05:12:13
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `delivery_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(20) NOT NULL,
  `numcliente` varchar(20) NOT NULL,
  `numrepartidor` varchar(20) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `formapago` varchar(50) NOT NULL,
  `ventacombo1` int(20) NOT NULL,
  `totalcombo1` int(20) NOT NULL,
  `ventacombo2` int(20) NOT NULL,
  `totalcombo2` int(20) NOT NULL,
  `ventacombo3` int(11) NOT NULL,
  `totalcombo3` int(11) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numcliente`, `numrepartidor`, `direccion`, `formapago`, `ventacombo1`, `totalcombo1`, `ventacombo2`, `totalcombo2`, `ventacombo3`, `totalcombo3`, `fecha_hora`) VALUES
(2, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 1, 15, 1, 15, 0, 0, '2020-12-13 03:30:26'),
(3, '+584241795707', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', 'Transferencia', 1, 15, 2, 30, 0, 0, '2020-12-13 03:30:26'),
(4, '+584269843538', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', 'Ambos', 1, 15, 1, 15, 0, 0, '2020-12-13 03:30:26'),
(5, '+584242038292', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', 'Transferencia', 1, 15, 2, 30, 0, 0, '2020-12-13 03:30:26'),
(7, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 3, 45, 0, 0, 0, 0, '2020-12-13 03:30:26'),
(8, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 0, 0, 1, 15, 0, 0, '2020-12-13 03:30:26'),
(10, '04241234567', '04241234567', 'Panteon Av', 'Ambos', 0, 0, 2, 30, 0, 0, '2020-12-13 03:30:26'),
(11, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 0, 0, 4, 60, 0, 0, '2020-12-13 03:30:26'),
(12, '04241234567', '04241234567', 'Panteon Av', 'Ambos', 3, 45, 0, 0, 0, 0, '2020-12-13 03:30:26'),
(13, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 4, 60, 1, 15, 0, 0, '2020-12-13 03:32:46'),
(14, '04241234567', '04241234567', 'Panteon Av', 'Ambos', 1, 15, 0, 0, 0, 0, '2020-12-13 03:38:25'),
(15, '04241234567', '04241234567', 'Panteon Av', 'Ambos', 1, 15, 0, 0, 0, 0, '2020-12-13 04:29:03'),
(16, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 1, 15, 0, 0, 0, 0, '2020-12-13 04:59:30'),
(17, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 1, 15, 0, 0, 0, 0, '2020-12-13 05:02:22'),
(18, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 1, 15, 1, 15, 0, 0, '2020-12-13 05:38:31'),
(19, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 3, 45, 0, 0, 0, 0, '2020-12-13 05:39:29'),
(20, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 1, 15, 1, 15, 0, 0, '2020-12-13 06:32:03'),
(21, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 1, 15, 1, 15, 1, 20, '2020-12-13 06:40:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `combo` int(10) NOT NULL,
  `precio` int(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`combo`, `precio`, `descripcion`) VALUES
(1, 15, '2 Arroz frito de 16 oz \r\n+ Pollo agridulce \r\n+ 2 lumpias\r\n+ 4 pancitos chinos\r\n+ regresco 2l'),
(2, 15, '2 arroz fritos de 16 oz\r\n+ 4 costillas\r\n+ 2 lumpias\r\n+ 4 pancitos chinos\r\n+ Refresco 2L');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidores`
--

CREATE TABLE `repartidores` (
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `repartidores`
--

INSERT INTO `repartidores` (`nombre`, `telefono`) VALUES
('José Pérez', '123456789'),
('Pedro López', '987654321'),
('Jack Sparrow', '9999999'),
('Capitan Barbosa', '888888'),
('Jesus Infante', '+584129333126'),
('Javier Serpa', '+584242317545'),
('Alan Serpa', '+584241754271'),
('Braulio Labrador', '+584127003702'),
('Alejandro Romero', '+584241116724'),
('Jesus Romero', '+584143382339'),
('Felix Machado', '+584166292862'),
('Darling Duran', '+584242832881'),
('Jesus Infante', '+584129333126'),
('Javier Serpa', '+584242317545'),
('Alan Serpa', '+584241754271'),
('Braulio Labrador', '+584127003702'),
('Alejandro Romero', '+584241116724'),
('Jesus Romero', '+584143382339'),
('Felix Machado', '+584166292862'),
('Darling Duran', '+584242832881');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasadeldia`
--

CREATE TABLE `tasadeldia` (
  `tasa` int(100) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tasadeldia`
--

INSERT INTO `tasadeldia` (`tasa`, `fecha_hora`) VALUES
(1865613, '2021-03-01 01:40:08'),
(1865613, '2021-03-01 01:40:08'),
(1865614, '2021-03-01 01:40:39'),
(18656132, '2021-03-01 02:32:25'),
(1234567, '2021-03-01 02:39:25'),
(0, '2021-03-01 02:40:57'),
(0, '2021-03-01 02:42:08'),
(0, '2021-03-01 02:43:31'),
(0, '2021-03-01 02:45:54'),
(123456798, '2021-03-01 02:47:12'),
(1234567989, '2021-03-01 02:49:24'),
(1234567989, '2021-03-01 02:51:35'),
(3043, '2021-03-01 02:52:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'admin'),
(2, 'ism55', '1234'),
(3, 'rocioale', '1234'),
(4, 'marcecazu', '1234'),
(5, 'sarathosp', '1234'),
(6, 'marcecazu', '1234'),
(7, '', ''),
(8, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(20) NOT NULL,
  `numcliente` varchar(20) NOT NULL,
  `numrepartidor` varchar(20) NOT NULL,
  `direccion` varchar(500) NOT NULL,
  `formapago` varchar(50) NOT NULL,
  `ventacombo1` int(20) NOT NULL,
  `totalcombo1` int(20) NOT NULL,
  `ventacombo2` int(20) NOT NULL,
  `totalcombo2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
