-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2017 a las 20:16:13
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `saltadeportes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IDPRODUCTO` int(11) NOT NULL,
  `TIPO` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `DESCRIPCION` varchar(500) COLLATE utf8_spanish_ci NOT NULL,
  `IMAGEN` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `PRECIO` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IDPRODUCTO`, `TIPO`, `DESCRIPCION`, `IMAGEN`, `PRECIO`) VALUES
(1, 'Trx', 'Rueda doble', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(2, 'Trx', 'Cinturon de esfuerzo simple', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(3, 'Trx', 'Cinturon de esfuerzo doble', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(4, 'Trx', 'Arnes de esfuerzo', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(5, 'Trx', 'Ruedas abdominales', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(6, 'Trx', 'Rueda simple', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(7, 'Trx', 'Rueda para piernas doble', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(8, 'Trx', 'Rueda para piernas simple', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(9, 'Trx', 'Rueda par para manos', 'Imagenes\\Trx\\dobleRueda.jpeg', '3'),
(10, 'Trx', 'Rueda combinada SUPER (para manos y piernas)', 'Imagenes\\Trx\\dobleRueda.jpeg', '3');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IDPRODUCTO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IDPRODUCTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
