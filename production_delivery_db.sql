-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 20, 2021 at 07:02 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id14459629_delivery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `compras`
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
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `zonaComision` decimal(25,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `plato` varchar(60) DEFAULT NULL,
  `precio` decimal(20,2) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`plato`, `precio`, `id`) VALUES
('MEGA COMBO 1', 26.00, 1),
('MEGA COMBO 2', 26.00, 3),
('MEGA COMBO 3', 21.00, 4),
('MEGA COMBO 4', 28.00, 5),
('MEGA COMBO 5', 28.00, 6),
('MEGA COMBO 6', 28.00, 7),
('MEGA COMBO 7', 21.00, 8),
('COMBO DUO 1', 16.00, 9),
('COMBO DUO 2', 16.00, 10),
('COMBO DUO 3', 21.00, 11),
('COMBO DUO 4', 21.00, 12),
('COMBO DUO 5', 18.00, 13),
('COMBO DUO 6', 18.00, 14),
('COMBO DUO 7', 18.00, 15),
('KOMBO 1', 9.00, 16),
('KOMBO 2', 7.00, 17),
('KOMBO 3', 6.00, 18),
('KOMBO 4', 8.00, 19),
('KOMBO 5', 7.00, 20),
('KOMBO 6', 7.00, 21),
('KOMBO 7', 7.00, 22),
('KOMBO 8', 5.00, 23),
('ARROZ VEGETARIANO', 4.00, 24),
('ARROZ POLLO', 5.00, 25),
('ARROZ JAMÓN', 5.00, 26),
('ARROZ CERDO', 5.00, 27),
('ARROZ ESPECIAL', 6.00, 28),
('ARROZ CAMARONES', 7.00, 29),
('ARROZ KOWLOON', 8.00, 30),
('ARROZ POLLO Y CAMARONES', 8.00, 31),
('LO MEIN VEGETARIANO', 7.00, 32),
('LO MEIN POLLO', 7.00, 33),
('LO MEIN CERDO', 7.00, 34),
('LO MEIN ESPECIAL', 8.00, 35),
('LO MEIN CAMARONES', 8.00, 36),
('LO MEIN KOWLOON', 9.00, 37),
('LO MEIN CARNE', 8.00, 38),
('LO MEIN POLLO Y CAMARONES', 8.00, 39),
('POLLO AGRIDULCE', 7.00, 40),
('POLLO CON SOYA', 8.00, 41),
('POLLO CON CURRY', 9.00, 42),
('POLLO CON OSTRAS', 8.00, 43),
('POLLO CON AJONJOLI', 9.00, 44),
('POLLO ASADO', 11.00, 45),
('CARNE CON OSTRAS', 9.00, 46),
('CARNE CON CURRY', 9.00, 47),
('CARNE CON BROCOLI', 10.00, 48),
('CARNE CON VEGETALES', 10.00, 49),
('COSTILLA', 7.00, 50),
('CERDO ASADO', 10.00, 51),
('CERDO SAL Y PIMIENTA', 10.00, 52),
('LUMPIAS', 2.00, 53),
('WANTON FRITO', 6.00, 54),
('FIDEOS SINGAPUR', 9.00, 55),
('FUYONG', 8.00, 56),
('REFRESCO 1.5L', 3.00, 57),
('LIPTON', 3.00, 58),
('REFRESCO DE LATA', 1.00, 59),
('PAN CHINO', 1.00, 60),
('SOPA WANTON', 5.00, 61),
('SOPA WANTON MIEN', 6.00, 62),
('CHOP SUEY DE VEGETALES', 5.00, 63),
('CHOP SUEY POLLO', 7.00, 64),
('CHOP SUEY CERDO', 7.00, 65),
('CHOP SUEY CARNE', 8.00, 66),
('CHOP SUEY CAMARONES', 8.00, 67),
('CHOP SUEY POLLO Y CAMARONES', 8.00, 68),
('COMBO CLASICO 1', 18.00, 69),
('COMBO CLASICO 2', 18.00, 70),
('COMO SUPER 1', 35.00, 71),
('COMBO SUPER 2', 35.00, 72),
('COMBO SUPER 3', 32.00, 73),
('AGUA 600 ML', 0.50, 74),
('CHOW MEIN VEGETARIANO', 6.00, 149),
('CHOW MEIN POLLO', 7.00, 150),
('CHOW MEIN CERDO', 7.00, 151),
('CHOW MEIN ESPECIAL', 8.00, 152),
('CHOW MEIN KOWLOON', 9.00, 153),
('CHOW MEIN CARNE', 8.00, 154),
('CHOW MEIN CAMARONES', 8.00, 155),
('CHOW MEIN POLLO Y CAMARONES', 8.00, 156),
('CERDO CON OSTRAS', 10.00, 157),
('CERDO CON CURRY', 10.00, 158),
('CHOP SUEY JAMÓN', 7.00, 159),
('CHOP SUEY ESPECIAL', 8.00, 160),
('CHOP SUEY KOWLOON', 9.00, 161),
('UNIDAD DE COSTILLA', 2.00, 162),
('RACION DE LUMPIAS', 3.00, 163),
('REFRESCO 1L', 2.00, 693);

-- --------------------------------------------------------

--
-- Table structure for table `repartidores`
--

CREATE TABLE `repartidores` (
  `nombre` varchar(100) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `repartidores`
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
('TEST', '+584241795707', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tasadeldia`
--

CREATE TABLE `tasadeldia` (
  `tasa` int(100) NOT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasadeldia`
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
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
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
-- Table structure for table `zonas`
--

CREATE TABLE `zonas` (
  `destino` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL,
  `id` int(20) NOT NULL,
  `Delivery` decimal(25,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zonas`
--

INSERT INTO `zonas` (`destino`, `precio`, `id`, `Delivery`) VALUES
('Agua Salud', 4, 1, 5.00),
('Alto Hatillo', 5, 2, 6.00),
('Av. Cuartel de Catia (Vía Principal)', 4, 3, 5.00),
('Av. Panteón (Después de puente FFAA)', 3, 4, 4.00),
('Av. Sucre de Catia (Estación Gato Negro)', 4, 5, 5.00),
('Av. Urdaneta (Después de puente FFAA)', 3, 6, 4.00),
('Baruta (Pueblo)', 4, 7, 5.00),
('Bellas Artes', 3, 8, 3.00),
('Bello monte Norte (Recreo)', 2, 9, 3.00),
('Boleíta Norte', 3, 10, 3.00),
('Campo Alegre', 1, 11, 2.00),
('Capitolio', 3, 12, 4.00),
('CCCT', 1, 13, 2.00),
('Chuao', 2, 14, 3.00),
('Coche', 4, 15, 5.00),
('Colinas de bello monte', 3, 16, 4.00),
('Colinas de la california', 3, 17, 4.00),
('Colinas de la salle', 4, 18, 4.00),
('Colinas de la Tahona', 5, 19, 6.00),
('Colinas de los Ruices', 3, 20, 4.00),
('Colinas de Tamanaco', 4, 21, 5.00),
('Concresa', 3, 22, 4.00),
('Country Club', 1, 23, 2.00),
('Cumbres de Curumo', 4, 24, 5.00),
('El bosque', 1, 25, 2.00),
('El cafetal', 3, 26, 4.00),
('El Cigarral', 5, 27, 6.00),
('El Hatillo (Pueblo)', 5, 28, 6.00),
('El Marqués', 3, 29, 4.00),
('El paraiso', 3, 30, 4.00),
('El peñón', 5, 31, 5.00),
('El placer', 5, 32, 6.00),
('El poliedro', 5, 33, 6.00),
('Alta Florida', 3, 34, 3.00),
('Altagracia', 3, 35, 4.00),
('Altamira Norte', 2, 36, 2.00),
('Altamira Sur', 1, 37, 2.00),
('Alto Prado', 4, 38, 4.00),
('Antimano (Plaza)', 4, 39, 5.00),
('Av. Fuerzas Armadas Sur (Roca Tarpeya, San Luis)', 3, 40, 4.00),
('Av. Victoria', 3, 41, 4.00),
('Bella Vista', 4, 42, 5.00),
('Bello Campo', 0, 43, 2.00),
('Boleíta Sur', 3, 44, 3.00),
('Buena vista', 3, 45, 4.00),
('Campo Claro', 2, 46, 2.00),
('Caricuao', 5, 47, 6.00),
('Catia (Plaza Sucre)', 4, 48, 5.00),
('Caurimare', 3, 49, 4.00),
('Cementerio', 3, 50, 4.00),
('Cerro Verde (Parte Alta)', 5, 51, 5.00),
('Cerro Verde (Parte baja)', 4, 52, 5.00),
('Chacaito', 1, 53, 2.00),
('Chacao (Casco central)', 0, 54, 2.00),
('Chulavista', 2, 55, 3.00),
('Círculo Militar (IPSFA, Los próceres)', 3, 56, 3.00),
('Ciudad Universitaria', 3, 57, 3.00),
('Colinas de la Trinidad', 5, 58, 5.00),
('Colinas de Santa Mónica', 4, 59, 4.00),
('Colinas de Vista Alegre', 4, 60, 5.00),
('El algodonal', 4, 61, 5.00),
('El llanito', 4, 62, 5.00),
('El naranjal', 4, 63, 4.00),
('El rosal', 1, 64, 2.00),
('El valle (Jardines)', 4, 65, 5.00),
('Guaicaipuro', 3, 66, 3.00),
('Guaicay', 5, 67, 6.00),
('Junquito', 10, 68, 10.00),
('La california', 3, 69, 4.00),
('La campiña', 2, 70, 2.00),
('La candelaria', 3, 71, 3.00),
('La concordia', 3, 72, 4.00),
('La esmeralda', 5, 73, 6.00),
('La hoyada', 3, 74, 4.00),
('La pastora', 3, 75, 4.00),
('La paz', 4, 76, 5.00),
('La Trindidad', 5, 77, 5.00),
('La yaguara', 4, 78, 6.00),
('Las mercedes', 1, 79, 2.00),
('Las minas de Baruta', 5, 80, 6.00),
('Lomas de la trinidad', 5, 81, 6.00),
('Lomas de prados del este', 4, 82, 5.00),
('Los campitos', 3, 83, 4.00),
('Los caobos', 3, 84, 3.00),
('Los chorros', 3, 85, 3.00),
('Los cortijos', 2, 86, 3.00),
('Los palos grandes (Hasta la 4ta transversal)', 1, 87, 2.00),
('Los ruices', 2, 88, 3.00),
('Los simbolos', 3, 89, 3.00),
('Macaracuay', 4, 90, 5.00),
('Montecristo', 3, 91, 4.00),
('Palo verde', 4, 92, 5.00),
('Petare', 4, 93, 5.00),
('Prado de maría', 3, 94, 3.00),
('Sabana Grande', 2, 95, 2.00),
('San Agustin', 3, 96, 3.00),
('El silencio (Plaza O\'Leary)', 3, 97, 4.00),
('El valle', 3, 98, 4.00),
('Fuerte Tiuna', 4, 99, 5.00),
('Horizonte', 4, 100, 4.00),
('Hospital Vargas (San José)', 3, 101, 4.00),
('La Alameda', 4, 102, 4.00),
('La bonita', 5, 103, 6.00),
('La boyera', 5, 104, 6.00),
('La carlota (Urbanización)', 2, 105, 2.00),
('La castellana', 1, 106, 2.00),
('La castellana (Norte)', 2, 107, 2.00),
('La ciudadela', 3, 108, 3.00),
('La floresta', 1, 109, 2.00),
('La florida (Hasta el CC la Florida)', 2, 110, 3.00),
('La guairita', 5, 111, 6.00),
('La lagunita', 5, 112, 6.00),
('La Tahona', 5, 113, 6.00),
('La urbina', 4, 114, 5.00),
('Las acacias', 3, 115, 3.00),
('Las flores de catia', 4, 116, 5.00),
('Las palmas', 2, 117, 3.00),
('Lomas de bello monte', 3, 118, 4.00),
('Lomas de chuao', 3, 119, 3.00),
('Lomas de la lagunita', 6, 120, 7.00),
('Lomas de las mercedes', 2, 121, 3.00),
('Lomas del avila', 4, 122, 5.00),
('Lomas del mirador', 4, 123, 4.00),
('Lomas del sol', 5, 124, 6.00),
('Los chaguaramos', 3, 125, 3.00),
('Los dos caminos', 2, 126, 2.00),
('Los guayabitos', 6, 127, 7.00),
('Los naranjos de las mercedes', 3, 128, 4.00),
('Los naranjos del cafetal', 4, 129, 5.00),
('Los palos grandes (Después de la 4ta transversal)', 2, 130, 2.00),
('Los pomelos', 4, 131, 5.00),
('Los rosales, Plaza tiuna', 3, 132, 3.00),
('Los samanes', 4, 133, 5.00),
('Manzanares', 4, 134, 5.00),
('Mariperez', 3, 135, 3.00),
('Montalban 1,2,3', 4, 136, 5.00),
('Parque caiza', 6, 137, 7.00),
('Parque central', 3, 138, 3.00),
('Perez bonalde', 4, 139, 5.00),
('Piedra azul', 5, 140, 5.00),
('Plaza Venezuela', 2, 141, 3.00),
('Prado del este', 3, 142, 4.00),
('Propatria', 5, 143, 5.00),
('Puente hierro', 3, 144, 4.00),
('Quinta crespo', 3, 145, 4.00),
('San Ignacio', 1, 146, 2.00),
('San roman', 3, 147, 4.00),
('Santa Cecilia', 2, 148, 2.00),
('Santa Mónica', 3, 149, 3.00),
('Santa Paula', 3, 150, 4.00),
('Santa Rosalía', 3, 151, 4.00),
('Santa Sofía', 3, 152, 4.00),
('Simón Rodríguez, Sarría', 3, 153, 3.00),
('Urbanización Miranda', 4, 154, 5.00),
('Valle abajo', 3, 155, 3.00),
('Valle arriba', 2, 156, 3.00),
('Vista alegre', 4, 157, 5.00),
('San bernardino', 3, 158, 3.00),
('San Juan, Capuchinos', 4, 159, 5.00),
('San Martin, Maternidad, Bloque de armas', 4, 160, 5.00),
('Santa Eduviges', 2, 161, 2.00),
('Santa Fe', 3, 162, 4.00),
('Santa Inés', 3, 163, 4.00),
('Santa Marta', 2, 164, 3.00),
('Santa Rosa de Lima', 3, 165, 4.00),
('Sebucán', 3, 166, 3.00),
('Solar del hatillo', 5, 167, 6.00),
('Terrazas de club hípico', 4, 168, 5.00),
('Terrazas del avila', 4, 169, 5.00),
('Vizcaya', 4, 170, 4.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `formapago` (`formapago`),
  ADD KEY `formapago_2` (`formapago`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `repartidores`
--
ALTER TABLE `repartidores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasadeldia`
--
ALTER TABLE `tasadeldia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=694;

--
-- AUTO_INCREMENT for table `repartidores`
--
ALTER TABLE `repartidores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tasadeldia`
--
ALTER TABLE `tasadeldia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
