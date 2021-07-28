-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2021 a las 14:07:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiantes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_estudiantes`
--

CREATE TABLE `t_estudiantes` (
  `id_estudiantes` int(11) NOT NULL,
  `paterno` text NOT NULL,
  `materno` text NOT NULL,
  `nombre` text NOT NULL,
  `matricula` int(11) NOT NULL,
  `fecha` date NOT NULL DEFAULT current_timestamp(),
  `especialidad` text NOT NULL,
  `sexo` text NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t_estudiantes`
--

INSERT INTO `t_estudiantes` (`id_estudiantes`, `paterno`, `materno`, `nombre`, `matricula`, `fecha`, `especialidad`, `sexo`, `imagen`) VALUES
(4, 'Patiño', 'Rosas', 'Mitzi ', 123456, '0000-00-00 00:00:00', 'web', 'femenino', '1.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_estudiantes`
--
ALTER TABLE `t_estudiantes`
  ADD PRIMARY KEY (`id_estudiantes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_estudiantes`
--
ALTER TABLE `t_estudiantes`
  MODIFY `id_estudiantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
