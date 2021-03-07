-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2021 a las 08:32:09
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
  `zona` varchar(50) NOT NULL,
  `formapago` varchar(50) NOT NULL,
  `bs` decimal(25,2) NOT NULL,
  `usd` decimal(25,2) NOT NULL,
  `total` decimal(25,2) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `numcliente`, `numrepartidor`, `direccion`, `zona`, `formapago`, `bs`, `usd`, `total`, `fecha_hora`) VALUES
(2, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(3, '+584241795707', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(4, '+584269843538', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(5, '+584242038292', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(7, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(8, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(10, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(11, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(12, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-13 03:30:26'),
(13, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 03:32:46'),
(14, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-13 03:38:25'),
(15, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-13 04:29:03'),
(16, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 04:59:30'),
(17, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 05:02:22'),
(18, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 05:38:31'),
(19, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 05:39:29'),
(20, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 06:32:03'),
(21, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 06:40:28'),
(22, '04241234567', '+584129333126', 'Panteon Av', '5', 'Transferencia', '1305927.00', '29.00', '30.00', '2021-03-07 05:00:17'),
(23, '04241234567', '+584241116724', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '3', 'Transferencia', '746244.00', '26.00', '26.00', '2021-03-07 05:05:05'),
(24, '04241234567', '0', 'Panteon Av', '0', '', '0.00', '0.00', '0.00', '2021-03-07 05:05:37'),
(25, '04241234567', '0', 'Panteon Av', '0', '', '0.00', '0.00', '0.00', '2021-03-07 05:05:59'),
(26, '04241234567', '0', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '5', 'Transferencia', '186561.00', '18.00', '18.00', '2021-03-07 05:27:57'),
(27, '04241234567', '+584127003702', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Coche\r\n							', 'Ambos', '186561.00', '16.70', '16.80', '2021-03-07 05:31:23'),
(28, '+584241795707', '+584143382339', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Colinas de la salle\r\n							', 'Efectivo', '0.00', '56.00', '56.00', '2021-03-07 05:43:48'),
(29, '+584241795707', '+584143382339', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Alto Hatillo\r\n							', 'Efectivo', '5596830.00', '90.00', '93.00', '2021-03-07 05:46:36'),
(30, '+584241795707', '+584129333126', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Agua Salud\r\n							', 'Efectivo', '1865610.00', '15.00', '16.00', '2021-03-07 06:45:05'),
(31, '+584241795707', '+584241795707', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Alto Hatillo\r\n							', '', '5130427.50', '15.00', '17.75', '2021-03-07 07:03:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

CREATE TABLE `menus` (
  `plato` varchar(60) DEFAULT NULL,
  `precio` decimal(20,2) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `menus`
--

INSERT INTO `menus` (`plato`, `precio`, `id`) VALUES
('MEGA COMBO 1', '26.00', 1),
('MEGA COMBO 2', '26.00', 3),
('MEGA COMBO 3', '21.00', 4),
('MEGA COMBO 4', '28.00', 5),
('MEGA COMBO 5', '28.00', 6),
('MEGA COMBO 6', '28.00', 7),
('MEGA COMBO 7', '21.00', 8),
('COMBO DUO 1', '16.00', 9),
('COMBO DUO 2', '16.00', 10),
('COMBO DUO 3', '21.00', 11),
('COMBO DUO 4', '21.00', 12),
('COMBO DUO 5', '18.00', 13),
('COMBO DUO 6', '18.00', 14),
('COMBO DUO 7', '18.00', 15),
('KOMBO 1', '9.00', 16),
('KOMBO 2', '7.00', 17),
('KOMBO 3', '6.00', 18),
('KOMBO 4', '8.00', 19),
('KOMBO 5', '7.00', 20),
('KOMBO 6', '7.00', 21),
('KOMBO 7', '7.00', 22),
('KOMBO 8', '5.00', 23),
('ARROZ VEGETARIANO', '4.00', 24),
('ARROZ POLLO', '5.00', 25),
('ARROZ JAMÓN', '5.00', 26),
('ARROZ CERDO', '5.00', 27),
('ARROZ ESPECIAL', '6.00', 28),
('ARROZ CAMARONES', '7.00', 29),
('ARROZ KOWLOON', '8.00', 30),
('ARROZ POLLO Y CAMARONES', '8.00', 31),
('LO MEIN VEGETARIANO', '7.00', 32),
('LO MEIN POLLO', '7.00', 33),
('LO MEIN CERDO', '7.00', 34),
('LO MEIN ESPECIAL', '8.00', 35),
('LO MEIN CAMARONES', '8.00', 36),
('LO MEIN KOWLOON', '9.00', 37),
('LO MEIN CARNE', '8.00', 38),
('LO MEIN POLLO Y CAMARONES', '8.00', 39),
('POLLO AGRIDULCE', '7.00', 40),
('POLLO CON SOYA', '8.00', 41),
('POLLO CON CURRY', '9.00', 42),
('POLLO CON OSTRAS', '8.00', 43),
('POLLO CON AJONJOLI', '9.00', 44),
('POLLO ASADO', '11.00', 45),
('CARNE CON OSTRAS', '9.00', 46),
('CARNE CON CURRY', '9.00', 47),
('CARNE CON BROCOLI', '10.00', 48),
('CARNE CON VEGETALES', '10.00', 49),
('COSTILLA', '7.00', 50),
('CERDO ASADO', '10.00', 51),
('CERDO SAL Y PIMIENTA', '10.00', 52),
('LUMPIAS', '2.00', 53),
('WANTON FRITO', '6.00', 54),
('FIDEOS SINGAPUR', '9.00', 55),
('FUYONG', '8.00', 56),
('REFRESCO 1.5L', '3.00', 57),
('LIPTON', '3.00', 58),
('REFRESCO DE LATA', '1.00', 59),
('PAN CHINO', '1.00', 60),
('SOPA WANTON', '5.00', 61),
('SOPA WANTON MIEN', '6.00', 62),
('CHOP SUEY DE VEGETALES', '5.00', 63),
('CHOP SUEY POLLO', '7.00', 64),
('CHOP SUEY CERDO', '7.00', 65),
('CHOP SUEY CARNE', '8.00', 66),
('CHOP SUEY CAMARONES', '8.00', 67),
('CHOP SUEY POLLO Y CAMARONES', '8.00', 68),
('COMBO CLASICO 1', '18.00', 69),
('COMBO CLASICO 2', '18.00', 70),
('COMO SUPER 1', '35.00', 71),
('COMBO SUPER 2', '35.00', 72),
('COMBO SUPER 3', '32.00', 73),
('AGUA 600 ML', '0.50', 74),
('CHOW MEIN VEGETARIANO', '6.00', 149),
('CHOW MEIN POLLO', '7.00', 150),
('CHOW MEIN CERDO', '7.00', 151),
('CHOW MEIN ESPECIAL', '8.00', 152),
('CHOW MEIN KOWLOON', '9.00', 153),
('CHOW MEIN CARNE', '8.00', 154),
('CHOW MEIN CAMARONES', '8.00', 155),
('CHOW MEIN POLLO Y CAMARONES', '8.00', 156),
('CERDO CON OSTRAS', '10.00', 157),
('CERDO CON CURRY', '10.00', 158),
('CHOP SUEY JAMÓN', '7.00', 159),
('CHOP SUEY ESPECIAL', '8.00', 160),
('CHOP SUEY KOWLOON', '9.00', 161),
('UNIDAD DE COSTILLA', '2.00', 162),
('RACION DE LUMPIAS', '3.00', 163),
('REFRESCO 1L', '2.00', 693);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `repartidores`
--

CREATE TABLE `repartidores` (
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `repartidores`
--

INSERT INTO `repartidores` (`nombre`, `telefono`, `id`) VALUES
('Jesus Infante', '+584129333126', 5),
('Javier Serpa', '+584242317545', 6),
('Alan Serpa', '+584241754271', 7),
('Braulio Labrador', '+584127003702', 8),
('Alejandro Romero', '+584241116724', 9),
('Jesus Romero', '+584143382339', 10),
('Felix Machado', '+584166292862', 11),
('Darling Duran', '+584242832881', 12),
('Jesus Infante', '+584129333126', 13),
('Javier Serpa', '+584242317545', 14),
('Alan Serpa', '+584241754271', 15),
('Braulio Labrador', '+584127003702', 16),
('Alejandro Romero', '+584241116724', 17),
('Jesus Romero', '+584143382339', 18),
('Felix Machado', '+584166292862', 19),
('Darling Duran', '+584242832881', 20),
('TEST', '+584241795707', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasadeldia`
--

CREATE TABLE `tasadeldia` (
  `tasa` int(100) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tasadeldia`
--

INSERT INTO `tasadeldia` (`tasa`, `fecha_hora`, `id`) VALUES
(1865613, '2021-03-01 01:40:08', 1),
(1865613, '2021-03-01 01:40:08', 2),
(1865614, '2021-03-01 01:40:39', 3),
(18656132, '2021-03-01 02:32:25', 4),
(1234567, '2021-03-01 02:39:25', 5),
(123456798, '2021-03-01 02:47:12', 10),
(1234567989, '2021-03-01 02:49:24', 11),
(1234567989, '2021-03-01 02:51:35', 12),
(3043, '2021-03-01 02:52:16', 13),
(1865612, '2021-03-01 07:00:17', 14),
(0, '2021-03-06 22:26:01', 15),
(1865612, '2021-03-06 22:28:05', 16),
(1865613, '2021-03-06 23:47:04', 17),
(1865613, '2021-03-06 23:47:36', 18),
(1865612, '2021-03-06 23:48:02', 19),
(1865613, '2021-03-07 00:30:36', 20),
(1865610, '2021-03-07 04:03:59', 21);

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
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `destino` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`destino`, `precio`, `id`) VALUES
('Agua Salud', 4, 1),
('Alto Hatillo', 5, 2),
('Av. Cuartel de Catia (Vía Principal)', 4, 3),
('Av. Panteón (Después de puente FFAA)', 3, 4),
('Av. Sucre de Catia (Estación Gato Negro)', 4, 5),
('Av. Urdaneta (Después de puente FFAA)', 3, 6),
('Baruta (Pueblo)', 4, 7),
('Bellas Artes', 3, 8),
('Bello monte Norte (Recreo)', 2, 9),
('Boleíta Norte', 3, 10),
('Campo Alegre', 1, 11),
('Capitolio', 3, 12),
('CCCT', 1, 13),
('Chuao', 2, 14),
('Coche', 4, 15),
('Colinas de bello monte', 3, 16),
('Colinas de la california', 3, 17),
('Colinas de la salle', 4, 18),
('Colinas de la Tahona', 5, 19),
('Colinas de los Ruices', 3, 20),
('Colinas de Tamanaco', 4, 21),
('Concresa', 3, 22),
('Country Club', 1, 23),
('Cumbres de Curumo', 4, 24),
('El bosque', 1, 25),
('El cafetal', 3, 26),
('El Cigarral', 5, 27),
('El Hatillo (Pueblo)', 5, 28),
('El Marqués', 3, 29),
('El paraiso', 3, 30),
('El peñón', 5, 31),
('El placer', 5, 32),
('El poliedro', 5, 33),
('Alta Florida', 3, 34),
('Altagracia', 3, 35),
('Altamira Norte', 2, 36),
('Altamira Sur', 1, 37),
('Alto Prado', 4, 38),
('Antimano (Plaza)', 4, 39),
('Av. Fuerzas Armadas Sur (Roca Tarpeya, San Luis)', 3, 40),
('Av. Victoria', 3, 41),
('Bella Vista', 4, 42),
('Bello Campo', 0, 43),
('Boleíta Sur', 3, 44),
('Buena vista', 3, 45),
('Campo Claro', 2, 46),
('Caricuao', 5, 47),
('Catia (Plaza Sucre)', 4, 48),
('Caurimare', 3, 49),
('Cementerio', 3, 50),
('Cerro Verde (Parte Alta)', 5, 51),
('Cerro Verde (Parte baja)', 4, 52),
('Chacaito', 1, 53),
('Chacao (Casco central)', 0, 54),
('Chulavista', 2, 55),
('Círculo Militar (IPSFA, Los próceres)', 3, 56),
('Ciudad Universitaria', 3, 57),
('Colinas de la Trinidad', 5, 58),
('Colinas de Santa Mónica', 4, 59),
('Colinas de Vista Alegre', 4, 60),
('El algodonal', 4, 61),
('El llanito', 4, 62),
('El naranjal', 4, 63),
('El rosal', 1, 64),
('El valle (Jardines)', 4, 65),
('Guaicaipuro', 3, 66),
('Guaicay', 5, 67),
('Junquito', 10, 68),
('La california', 3, 69),
('La campiña', 2, 70),
('La candelaria', 3, 71),
('La concordia', 3, 72),
('La esmeralda', 5, 73),
('La hoyada', 3, 74),
('La pastora', 3, 75),
('La paz', 4, 76),
('La Trindidad', 5, 77),
('La yaguara', 4, 78),
('Las mercedes', 1, 79),
('Las minas de Baruta', 5, 80),
('Lomas de la trinidad', 5, 81),
('Lomas de prados del este', 4, 82),
('Los campitos', 3, 83),
('Los caobos', 3, 84),
('Los chorros', 3, 85),
('Los cortijos', 2, 86),
('Los palos grandes (Hasta la 4ta transversal)', 1, 87),
('Los ruices', 2, 88),
('Los simbolos', 3, 89),
('Macaracuay', 4, 90),
('Montecristo', 3, 91),
('Palo verde', 4, 92),
('Petare', 4, 93),
('Prado de maría', 3, 94),
('Sabana Grande', 2, 95),
('San Agustin', 3, 96),
('El silencio (Plaza O\'Leary)', 3, 97),
('El valle', 3, 98),
('Fuerte Tiuna', 4, 99),
('Horizonte', 4, 100),
('Hospital Vargas (San José)', 3, 101),
('La Alameda', 4, 102),
('La bonita', 5, 103),
('La boyera', 5, 104),
('La carlota (Urbanización)', 2, 105),
('La castellana', 1, 106),
('La castellana (Norte)', 2, 107),
('La ciudadela', 3, 108),
('La floresta', 1, 109),
('La florida (Hasta el CC la Florida)', 2, 110),
('La guairita', 5, 111),
('La lagunita', 5, 112),
('La Tahona', 5, 113),
('La urbina', 4, 114),
('Las acacias', 5, 115),
('Las flores de catia', 4, 116),
('Las palmas', 2, 117),
('Lomas de bello monte', 3, 118),
('Lomas de chuao', 3, 119),
('Lomas de la lagunita', 6, 120),
('Lomas de las mercedes', 2, 121),
('Lomas del avila', 4, 122),
('Lomas del mirador', 4, 123),
('Lomas del sol', 5, 124),
('Los chaguaramos', 3, 125),
('Los dos caminos', 2, 126),
('Los guayabitos', 6, 127),
('Los naranjos de las mercedes', 6, 128),
('Los naranjos del cafetal', 4, 129),
('Los palos grandes (Después de la 4ta transversal)', 2, 130),
('Los pomelos', 4, 131),
('Los rosales, Plaza tiuna', 3, 132),
('Los samanes', 4, 133),
('Manzanares', 4, 134),
('Mariperez', 3, 135),
('Montalban 1,2,3', 4, 136),
('Parque caiza', 6, 137),
('Parque central', 3, 138),
('Perez bonalde', 4, 139),
('Piedra azul', 5, 140),
('Plaza Venezuela', 2, 141),
('Prado del este', 3, 142),
('Propatria', 5, 143),
('Puente hierro', 3, 144),
('Quinta crespo', 3, 145),
('San Ignacio', 1, 146),
('San roman', 3, 147),
('Santa Cecilia', 2, 148),
('Santa Mónica', 3, 149),
('Santa Paula', 3, 150),
('Santa Rosalía', 3, 151),
('Santa Sofía', 3, 152),
('Simón Rodríguez, Sarría', 3, 153),
('Urbanización Miranda', 4, 154),
('Valle abajo', 3, 155),
('Valle arriba', 2, 156),
('Vista alegre', 4, 157),
('San bernardino', 3, 158),
('San Juam, Capuchinos', 4, 159),
('San Martin, Maternidad, Bloque de armas', 4, 160),
('Santa Eduviges', 2, 161),
('Santa Fe', 3, 162),
('Santa Inés', 3, 163),
('Santa Marta', 2, 164),
('Santa Rosa de Lima', 3, 165),
('Sebucán', 3, 166),
('Solar del hatillo', 5, 167),
('Terrazas de club hípico', 4, 168),
('Terrazas del avila', 4, 169),
('Vizcaya', 4, 170);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formapago` (`formapago`),
  ADD KEY `formapago_2` (`formapago`);

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `repartidores`
--
ALTER TABLE `repartidores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tasadeldia`
--
ALTER TABLE `tasadeldia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=694;

--
-- AUTO_INCREMENT de la tabla `repartidores`
--
ALTER TABLE `repartidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tasadeldia`
--
ALTER TABLE `tasadeldia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
