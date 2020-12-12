-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 10:11 AM
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
  `formapago` varchar(50) NOT NULL,
  `ventacombo1` int(20) NOT NULL,
  `totalcombo1` int(20) NOT NULL,
  `ventacombo2` int(20) NOT NULL,
  `totalcombo2` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compras`
--

INSERT INTO `compras` (`id`, `numcliente`, `numrepartidor`, `direccion`, `formapago`, `ventacombo1`, `totalcombo1`, `ventacombo2`, `totalcombo2`) VALUES
(2, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 1, 15, 1, 15),
(3, '+584241795707', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', 'Transferencia', 1, 15, 2, 30),
(4, '+584269843538', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', 'Ambos', 1, 15, 1, 15),
(5, '+584242038292', '+584262137759', 'https://goo.gl/maps/hucD4VrEXJvWdy457', 'Transferencia', 1, 15, 2, 30),
(7, '04241234567', '04241234567', 'Panteon Av', 'Transferencia', 3, 45, 0, 0),
(8, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 0, 0, 1, 15),
(10, '04241234567', '04241234567', 'Panteon Av', 'Ambos', 0, 0, 2, 30),
(11, '04241234567', '04241234567', 'Panteon Av', 'Efectivo', 0, 0, 4, 60),
(12, '04241234567', '04241234567', 'Panteon Av', 'Ambos', 3, 45, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `combo` int(10) NOT NULL,
  `precio` int(20) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`combo`, `precio`, `descripcion`) VALUES
(1, 15, '2 Arroz frito de 16 oz \r\n+ Pollo agridulce \r\n+ 2 lumpias\r\n+ 4 pancitos chinos\r\n+ regresco 2l'),
(2, 15, '2 arroz fritos de 16 oz\r\n+ 4 costillas\r\n+ 2 lumpias\r\n+ 4 pancitos chinos\r\n+ Refresco 2L');

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
-- Table structure for table `ventas`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
