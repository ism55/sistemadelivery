-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2021 at 09:06 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `delivery_db`
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
  `fecha_hora` datetime NOT NULL,
  `zonaComision` decimal(25,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `numcliente`, `numrepartidor`, `direccion`, `zona`, `formapago`, `bs`, `usd`, `total`, `fecha_hora`, `zonaComision`) VALUES
(2, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(3, '+584241795707', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(4, '+584269843538', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(5, '+584242038292', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(7, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(8, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(10, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(11, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(12, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-12 23:30:26', '0.00'),
(13, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-12 23:32:46', '0.00'),
(14, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-12 23:38:25', '0.00'),
(15, '04241234567', '04241234567', 'Panteon Av', '', 'Ambos', '0.00', '0.00', '0.00', '2020-12-13 00:29:03', '0.00'),
(16, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 00:59:30', '0.00'),
(17, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 01:02:22', '0.00'),
(18, '04241234567', '04241234567', 'Panteon Av', '', 'Efectivo', '0.00', '0.00', '0.00', '2020-12-13 01:38:31', '0.00'),
(19, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 01:39:29', '0.00'),
(20, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 02:32:03', '0.00'),
(21, '04241234567', '04241234567', 'Panteon Av', '', 'Transferencia', '0.00', '0.00', '0.00', '2020-12-13 02:40:28', '0.00'),
(22, '04241234567', '+584129333126', 'Panteon Av', '5', 'Transferencia', '1305927.00', '29.00', '30.00', '2021-03-07 01:00:17', '0.00'),
(23, '04241234567', '+584241116724', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '3', 'Transferencia', '746244.00', '26.00', '26.00', '2021-03-07 01:05:05', '0.00'),
(24, '04241234567', '0', 'Panteon Av', '0', '', '0.00', '0.00', '0.00', '2021-03-07 01:05:37', '0.00'),
(25, '04241234567', '0', 'Panteon Av', '0', '', '0.00', '0.00', '0.00', '2021-03-07 01:05:59', '0.00'),
(26, '04241234567', '0', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '5', 'Transferencia', '186561.00', '18.00', '18.00', '2021-03-07 01:27:57', '0.00'),
(27, '04241234567', '+584127003702', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Coche\r\n							', 'Ambos', '186561.00', '16.70', '16.80', '2021-03-07 01:31:23', '0.00'),
(28, '+584241795707', '+584143382339', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Colinas de la salle\r\n							', 'Efectivo', '0.00', '56.00', '56.00', '2021-03-07 01:43:48', '0.00'),
(29, '+584241795707', '+584143382339', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Alto Hatillo\r\n							', 'Efectivo', '5596830.00', '90.00', '93.00', '2021-03-07 01:46:36', '0.00'),
(30, '+584241795707', '+584129333126', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Agua Salud\r\n							', 'Efectivo', '1865610.00', '15.00', '16.00', '2021-03-07 02:45:05', '0.00'),
(31, '+584241795707', '+584241795707', 'https://goo.gl/maps/hucD4VrEXJvWdy457', '\r\n								Alto Hatillo\r\n							', '', '5130427.50', '15.00', '17.75', '2021-03-07 03:03:24', '0.00'),
(32, '+58 426-2137759', '+584241795707', 'https://www.google.com/maps/@39.550051,-105.782067,6z?hl=es', 'Av. Fuerzas Armadas Sur (Roca Tarpeya, San Luis)', 'Efectivo', '0.00', '35.00', '31.00', '2021-03-30 01:30:22', '4.00');

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
('Agua Salud', 4, 1, '5.00'),
('Alto Hatillo', 5, 2, '6.00'),
('Av. Cuartel de Catia (Vía Principal)', 4, 3, '5.00'),
('Av. Panteón (Después de puente FFAA)', 3, 4, '4.00'),
('Av. Sucre de Catia (Estación Gato Negro)', 4, 5, '5.00'),
('Av. Urdaneta (Después de puente FFAA)', 3, 6, '4.00'),
('Baruta (Pueblo)', 4, 7, '5.00'),
('Bellas Artes', 2, 8, '3.00'),
('Bello Monte Norte (Recreo)', 2, 9, '3.00'),
('Boleíta Norte', 3, 10, '3.00'),
('Campo Alegre', 1, 11, '2.00'),
('Capitolio', 3, 12, '4.00'),
('CCCT', 1, 13, '2.00'),
('Chuao', 2, 14, '3.00'),
('Coche', 4, 15, '5.00'),
('Colinas de Bello Monte', 3, 16, '4.00'),
('Colinas de la California', 3, 17, '4.00'),
('Colinas de la Salle', 4, 18, '4.00'),
('Colinas de la Tahona', 5, 19, '6.00'),
('Colinas de los Ruices', 3, 20, '4.00'),
('Colinas de Tamanaco', 4, 21, '5.00'),
('Concresa', 3, 22, '4.00'),
('Country Club', 1, 23, '2.00'),
('Cumbres de Curumo', 4, 24, '5.00'),
('El Bosque', 1, 25, '2.00'),
('El Cafetal', 3, 26, '4.00'),
('El Cigarral', 5, 27, '6.00'),
('El Hatillo (Pueblo)', 5, 28, '6.00'),
('El Marqués', 3, 29, '4.00'),
('El Paraiso', 3, 30, '4.00'),
('El Peñón', 5, 31, '5.00'),
('El Placer', 5, 32, '6.00'),
('El Poliedro', 5, 33, '6.00'),
('Alta Florida', 3, 34, '3.00'),
('Altagracia', 3, 35, '4.00'),
('Altamira Norte', 2, 36, '2.00'),
('Altamira Sur', 1, 37, '2.00'),
('Alto Prado', 4, 38, '4.00'),
('Antimano (Plaza)', 5, 39, '5.00'),
('Av. Fuerzas Armadas Sur (Roca Tarpeya, San Luis)', 3, 40, '4.00'),
('Av. Victoria', 3, 41, '4.00'),
('Bella Vista', 4, 42, '5.00'),
('Bello Campo', 0, 43, '2.00'),
('Boleíta Sur', 3, 44, '3.00'),
('Buena Vista', 3, 45, '4.00'),
('Campo Claro', 2, 46, '2.00'),
('Caricuao', 5, 47, '6.00'),
('Catia (Plaza Sucre)', 4, 48, '5.00'),
('Caurimare', 3, 49, '4.00'),
('Cementerio', 3, 50, '4.00'),
('Cerro Verde (Parte Alta)', 5, 51, '5.00'),
('Cerro Verde (Parte baja)', 4, 52, '5.00'),
('Chacaito', 1, 53, '2.00'),
('Chacao (Casco central)', 0, 54, '2.00'),
('Chulavista', 2, 55, '3.00'),
('Círculo Militar (IPSFA, Los próceres)', 3, 56, '3.00'),
('Ciudad Universitaria', 3, 57, '3.00'),
('Colinas de la Trinidad', 5, 58, '5.00'),
('Colinas de Santa Mónica', 4, 59, '4.00'),
('Colinas de Vista Alegre', 4, 60, '5.00'),
('El Algodonal', 4, 61, '5.00'),
('El Llanito', 4, 62, '5.00'),
('El Naranjal', 4, 63, '4.00'),
('El Rosal', 1, 64, '2.00'),
('El Valle (Jardines)', 4, 65, '5.00'),
('Guaicaipuro', 3, 66, '3.00'),
('Guaicay', 5, 67, '6.00'),
('Junquito', 10, 68, '10.00'),
('La California', 3, 69, '4.00'),
('La Campiña', 2, 70, '2.00'),
('La Candelaria', 3, 71, '3.00'),
('La Concordia', 3, 72, '4.00'),
('La Esmeralda', 5, 73, '6.00'),
('La Hoyada', 3, 74, '4.00'),
('La Pastora', 3, 75, '4.00'),
('La Paz', 4, 76, '5.00'),
('La Trinididad', 5, 77, '5.00'),
('La Yaguara', 5, 78, '6.00'),
('Las Mercedes', 2, 79, '2.00'),
('Las Minas de Baruta', 5, 80, '6.00'),
('Lomas de la Trinidad', 5, 81, '6.00'),
('Lomas de Prados del Este', 4, 82, '5.00'),
('Los Campitos', 3, 83, '4.00'),
('Los Caobos', 3, 84, '3.00'),
('Los Chorros', 3, 85, '3.00'),
('Los Cortijos', 2, 86, '3.00'),
('Los Palos Grandes (Hasta la 4ta transversal)', 1, 87, '2.00'),
('Los Ruices', 2, 88, '3.00'),
('Los Símbolos', 3, 89, '3.00'),
('Macaracuay', 4, 90, '5.00'),
('Montecristo', 3, 91, '4.00'),
('Palo Verde', 4, 92, '5.00'),
('Petare', 4, 93, '5.00'),
('Prado de María', 3, 94, '3.00'),
('Sabana Grande', 2, 95, '2.00'),
('San Agustín', 3, 96, '3.00'),
('El Silencio (Plaza O\'Leary)', 3, 97, '4.00'),
('El Valle', 4, 98, '4.00'),
('Fuerte Tiuna', 4, 99, '5.00'),
('Horizonte', 3, 100, '4.00'),
('Hospital Vargas (San José)', 3, 101, '4.00'),
('La Alameda', 4, 102, '4.00'),
('La Bonita', 5, 103, '6.00'),
('La Boyera', 5, 104, '6.00'),
('La Carlota (Urbanización)', 2, 105, '2.00'),
('La Castellana', 1, 106, '2.00'),
('La Castellana (Norte)', 2, 107, '2.00'),
('La Ciudadela', 3, 108, '3.00'),
('La Floresta', 1, 109, '2.00'),
('La Florida (Hasta el CC la Florida)', 2, 110, '3.00'),
('La Guairita', 5, 111, '6.00'),
('La Lagunita', 5, 112, '6.00'),
('La Tahona', 5, 113, '6.00'),
('La Urbina', 4, 114, '5.00'),
('Las Acacias', 3, 115, '3.00'),
('Las Flores de Catia', 4, 116, '5.00'),
('Las Palmas', 2, 117, '3.00'),
('Lomas de Bello Monte', 3, 118, '4.00'),
('Lomas de Chuao', 3, 119, '3.00'),
('Lomas de la Lagunita', 6, 120, '7.00'),
('Lomas de las Mercedes', 2, 121, '3.00'),
('Lomas del Ávila', 4, 122, '5.00'),
('Lomas del Mirador', 4, 123, '4.00'),
('Lomas del Sol', 5, 124, '6.00'),
('Los Chaguaramos', 3, 125, '3.00'),
('Los Dos Caminos', 2, 126, '2.00'),
('Los Guayabitos', 6, 127, '7.00'),
('Los Naranjos de las Mercedes', 3, 128, '4.00'),
('Los Naranjos del Cafetal', 4, 129, '5.00'),
('Los Palos Grandes (Después de la 4ta transversal)', 2, 130, '2.00'),
('Los Pomelos', 4, 131, '5.00'),
('Los Rosales, Plaza Tiuna', 3, 132, '3.00'),
('Los Samanes', 4, 133, '5.00'),
('Manzanares', 4, 134, '5.00'),
('Maripérez', 3, 135, '3.00'),
('Montalban 1,2,3', 4, 136, '5.00'),
('Parque Caiza', 10, 137, '7.00'),
('Parque Central', 3, 138, '3.00'),
('Pérez Bonalde', 4, 139, '5.00'),
('Piedra Azul', 5, 140, '5.00'),
('Plaza Venezuela', 2, 141, '3.00'),
('Prado del Este', 4, 142, '4.00'),
('Propátria', 5, 143, '5.00'),
('Puente Hierro', 3, 144, '4.00'),
('Quinta Crespo', 3, 145, '4.00'),
('San Ignacio', 0, 146, '2.00'),
('San Román', 3, 147, '4.00'),
('Santa Cecilia', 2, 148, '2.00'),
('Santa Mónica', 3, 149, '3.00'),
('Santa Paula', 3, 150, '4.00'),
('Santa Rosalía', 3, 151, '4.00'),
('Santa Sofía', 3, 152, '4.00'),
('Simón Rodríguez, Sarría', 3, 153, '3.00'),
('Urbanización Miranda', 4, 154, '5.00'),
('Valle Abajo', 3, 155, '3.00'),
('Valle Arriba', 3, 156, '3.00'),
('Vista Alegre', 4, 157, '5.00'),
('San Bernardino', 3, 158, '3.00'),
('San Juan, Capuchinos', 4, 159, '5.00'),
('San Martin, Maternidad, Bloque de armas', 4, 160, '5.00'),
('Santa Eduviges', 2, 161, '2.00'),
('Santa Fe', 3, 162, '4.00'),
('Santa Inés', 3, 163, '4.00'),
('Santa Marta', 2, 164, '3.00'),
('Santa Rosa de Lima', 3, 165, '4.00'),
('Sebucán', 2, 166, '3.00'),
('Solar del Hatillo', 5, 167, '6.00'),
('Terrazas de Club Hípico', 4, 168, '5.00'),
('Terrazas del Ávila', 4, 169, '5.00'),
('Vizcaya', 4, 170, '4.00'),
('Las Adjuntas', 5, 171, '0.00');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=173;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
