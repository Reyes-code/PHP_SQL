-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 17:49:06
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notas1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(11) NOT NULL,
  `nombre_alumno` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre_alumno`) VALUES
(1, 'Carlos'),
(2, 'Ana'),
(3, 'María');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_materia` int(11) NOT NULL,
  `nombre_materia` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_materia`, `nombre_materia`) VALUES
(1, 'DBCon'),
(2, 'Finanzas'),
(3, 'Micro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id_nota` int(11) NOT NULL,
  `id_alumno` int(11) NOT NULL,
  `id_materia` int(11) NOT NULL,
  `nota` double(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id_nota`, `id_alumno`, `id_materia`, `nota`) VALUES
(1, 3, 2, 4.60),
(2, 2, 3, 4.50),
(3, 2, 3, 3.30),
(4, 3, 1, 2.50),
(5, 2, 1, 1.50),
(6, 2, 3, 1.50),
(7, 2, 3, 3.00),
(8, 1, 1, 3.80),
(9, 1, 2, 1.80),
(10, 3, 1, 3.70),
(11, 2, 1, 5.00),
(12, 2, 1, 1.20),
(13, 1, 1, 5.00),
(14, 3, 1, 1.50),
(15, 1, 2, 3.60),
(16, 2, 1, 1.80),
(17, 2, 3, 2.30),
(18, 1, 2, 2.80),
(19, 3, 3, 3.00),
(20, 1, 2, 1.40),
(21, 2, 2, 4.10),
(22, 3, 3, 3.60),
(23, 1, 3, 4.50),
(24, 3, 1, 4.70),
(25, 3, 1, 1.20),
(26, 1, 1, 3.30),
(27, 3, 1, 1.80),
(28, 2, 2, 4.20),
(29, 2, 2, 3.30),
(30, 2, 3, 1.80),
(31, 2, 3, 2.70),
(32, 2, 3, 2.70),
(33, 1, 2, 2.10),
(34, 1, 2, 1.60),
(35, 1, 2, 1.40),
(36, 2, 2, 3.70),
(37, 1, 2, 2.70),
(38, 1, 1, 3.20),
(39, 3, 3, 1.10),
(40, 3, 2, 1.30),
(41, 3, 1, 3.00),
(42, 2, 2, 3.30),
(43, 1, 2, 2.20),
(44, 2, 2, 3.20),
(45, 1, 1, 2.00),
(46, 2, 2, 2.60),
(47, 2, 2, 1.90),
(48, 2, 2, 1.40),
(49, 3, 3, 4.10),
(50, 2, 2, 4.20);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_materia`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id_nota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_materia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id_nota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
