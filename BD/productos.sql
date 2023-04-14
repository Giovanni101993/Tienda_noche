-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-04-2023 a las 00:53:00
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
  `CATEGORIA_PROD` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DESC_PROD` int(11) NOT NULL,
  `CANTIDAD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`ID_PRODUCTO`, `NOMBRE_PROD`, `DESCRIP_PROD`, `PRECIO_PROD`, `CATEGORIA_PROD`, `DESC_PROD`, `CANTIDAD`) VALUES
(1, 'Computador', 'Marca HP', '1800000.00', 'Tecnologia', 18, 2),
(2, 'Play station 5', 'Play station 5 discos', '3500000.00', 'Tecnología', 10, 3),
(3, 'XBox serie s', 'Xbox discos', '2500000.00', 'Tecnología', 3, 6),
(4, 'Smart tv', 'Smart tv 50\" LG', '2500000.00', 'Tecnología', 0, 32),
(5, 'Pc Gaming', 'Pc gamer', '4200000.00', 'Tecnología', 12, 6),
(6, 'Computador portatil', 'Computador portatil 14\"', '3000000.00', 'Tecnología', 0, 5),
(7, 'SmartWatch', 'Smartwatch resistente al agua', '1200000.00', 'Tecnología', 6, 13),
(8, 'Tablet ', 'Tablet 10\" lenovo', '2500000.00', 'Tecnología', 10, 14),
(9, 'Smartphone', 'Smartphone marca samsung', '1500000.00', 'Tecnología', 0, 42),
(10, 'Detergente', 'Detergente 1kg', '12000.00', 'Aseo', 0, 124),
(11, 'Jabón de manos', 'Jabón liquido para manos', '20000.00', 'Aseo', 4, 200),
(12, 'Suavizante de ropa', 'Suavizante liquido para ropa 1 litro', '32000.00', 'Aseo', 0, 100),
(13, 'Aromatizante', 'Aromatizante para pisos y superficies', '15000.00', 'Aseo', 3, 12),
(14, 'Blanqueador', 'Botella de 500ml', '2000.00', 'Aseo', 2, 102),
(15, 'Moto Duke', 'Moto Duke cc 890', '71990000.00', 'Moto', 0, 3),
(16, 'Casco Icon', 'Icon Casco Integral Airflite MIPS Stealth', '1235000.00', 'Moto', 5, 2),
(17, 'Chaqueta de proteccion', 'Alpinestars Chaqueta T-GP Plus R V3 Air\r\n', '942000.00', 'Moto', 10, 5),
(18, 'Guantes de proteccion', 'Spidi Guantes Carbo Track Evo\r\n', '1416200.00', 'Moto', 0, 1),
(19, 'Botas', 'Hebo Botas Moto Technical 2.0 Micro\r\n', '784113.00', 'Moto', 5, 4),
(20, 'Pegastic', 'Pegante En Barra Pegastic 20 Gr\r\n', '8000.00', 'Escolar', 6, 521),
(21, 'Colores', 'Colores prismacolor x 48 unds', '80000.00', 'Escolar', 0, 120),
(22, 'Cuaderno argollado', 'CUADERNO ARGOLLADO 5 MATERIAS', '37000.00', 'Escolar', 1, 321),
(23, 'Compas', 'COMPAS DE PRECISIÓN CON 2 PIEZAS', '20000.00', 'Escolar', 1, 32),
(24, 'Tijeras', 'Tijera multiuso', '14900.00', 'Escolar', 0, 86),
(25, 'Sofa', 'Sofa color gris ', '2100000.00', 'Hogar', 4, 3),
(26, 'Comedor', 'Comedor de 4 puestos en madera', '1800000.00', 'Hogar', 0, 1),
(27, 'Juego de alcoba', 'Cama matrimonial', '4200000.00', 'Hogar', 3, 2),
(28, 'Nevera', 'Nevecon 637 litros', '7300000.00', 'Hogar', 7, 6),
(29, 'Lavadora y secadora', 'Lavadora y secadora LG Carga Frontal a gas', '3600000.00', 'Hogar', 0, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID_PRODUCTO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
