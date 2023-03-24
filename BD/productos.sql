-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2023 a las 04:07:57
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda_noche`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID_PRODUCTO` int(11) NOT NULL,
  `NOMBRE_PROD` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIP_PROD` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `PRECIO_PROD` decimal(10,2) NOT NULL,
  `DESC_PROD` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRODUCTO`, `NOMBRE_PROD`, `DESCRIP_PROD`, `PRECIO_PROD`, `DESC_PROD`, `CANTIDAD`) VALUES
(1, 'Computador', 'Marca HP', '180000.00', 18, 2),
(2, 'Play station 5', 'Pplay station 5 discos', '3500000.00', 10, 3),
(3, 'XBox serie s', 'Xbox discos', '2500000.00', 3, 6),
(4, 'Smart tv', 'Smart tv 50\" LG', '2500000.00', 0, 32),
(5, 'Pc Gaming', 'Pc gamer', '4200000.00', 12, 6),
(6, 'Computador portatil', 'Computador portatil 14\"', '3000000.00', 0, 5),
(7, 'SmartWatch', 'Smartwatch resistente al agua', '1200000.00', 6, 13),
(8, 'Tablet ', 'Tablet 10\" lenovo', '2500000.00', 10, 14),
(9, 'Smartphone', 'Smartphone marca samsung', '1500000.00', 0, 42);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID_PRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
