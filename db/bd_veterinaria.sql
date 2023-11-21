-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2023 a las 20:04:44
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascota`
--

CREATE TABLE `mascota` (
  `idmascota` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `especie` varchar(100) NOT NULL DEFAULT '1',
  `raza` varchar(100) NOT NULL,
  `fecha` date NOT NULL,
  `color` varchar(100) NOT NULL,
  `tamano` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mascota`
--

INSERT INTO `mascota` (`idmascota`, `nombre`, `especie`, `raza`, `fecha`, `color`, `tamano`) VALUES
(7, 'Gina', 'Canino', 'Shitzu', '2020-11-13', 'gris con negro', 'pequeno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idproveedor` int(10) NOT NULL,
  `almacen` int(10) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '1',
  `descripcion` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idproveedor`, `almacen`, `nombre`, `descripcion`, `categoria`, `precio`) VALUES
(12, 94, 'Comederos', 'tazones con dispensador automatico de alimento y agua', 'alimeto', '$685'),
(13, 75, 'Correa', 'Correa con collar de color mrado', 'Correas', '$550');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `receta`
--

CREATE TABLE `receta` (
  `idreceta` int(10) NOT NULL,
  `idmascota` int(10) NOT NULL,
  `idcliente` int(10) NOT NULL DEFAULT '1',
  `fecha` date NOT NULL,
  `medicamento` varchar(100) NOT NULL,
  `doctor` varchar(100) NOT NULL,
  `alergias` varchar(100) NOT NULL,
  `antecedentes` varchar(100) NOT NULL,
  `vacunas` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `receta`
--

INSERT INTO `receta` (`idreceta`, `idmascota`, `idcliente`, `fecha`, `medicamento`, `doctor`, `alergias`, `antecedentes`, `vacunas`, `precio`) VALUES
(10, 15, 15, '2023-11-23', 'vitamina A', 'Jimena Bautista', 'ninguna', 'ninguno', 'todas sus vacunas', '$900');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascota`
--
ALTER TABLE `mascota`
  ADD PRIMARY KEY (`idmascota`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idproveedor`);

--
-- Indices de la tabla `receta`
--
ALTER TABLE `receta`
  ADD PRIMARY KEY (`idreceta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascota`
--
ALTER TABLE `mascota`
  MODIFY `idmascota` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idproveedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `receta`
--
ALTER TABLE `receta`
  MODIFY `idreceta` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
