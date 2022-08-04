-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2021 a las 00:14:59
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `adoptantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_adop`
--

CREATE TABLE `datos_adop` (
  `id` int(5) NOT NULL,
  `Nombre` text NOT NULL,
  `Apellido` text NOT NULL,
  `Telefono` int(20) NOT NULL,
  `Mail` varchar(80) NOT NULL,
  `Comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_adop`
--

INSERT INTO `datos_adop` (`id`, `Nombre`, `Apellido`, `Telefono`, `Mail`, `Comentario`) VALUES
(9, 'Silvia', 'Sezai', 154153947, 'ssezai@hotmail.com', 'VAMOS!!'),
(10, 'Claudia', 'Sanchez', 1165834029, 'clau@hotmail.com', 'Solicitud de información'),
(11, 'Cecilia', 'Fernandez', 1134528970, 'ceci@yahoo.com.ar', 'Solicito información');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_adop`
--
ALTER TABLE `datos_adop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_adop`
--
ALTER TABLE `datos_adop`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
