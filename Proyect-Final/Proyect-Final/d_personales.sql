-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2026 a las 17:17:13
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `d_personales`
--

CREATE TABLE `d_personales` (
  `id` int(11) NOT NULL,
  `id_clientes` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `correo` varchar(60) NOT NULL,
  `tel` varchar(12) NOT NULL,
  `jojo_fav` varchar(60) NOT NULL,
  `por1` text NOT NULL,
  `parte_fav` varchar(60) NOT NULL,
  `por2` text NOT NULL,
  `pb` tinyint(1) NOT NULL,
  `notificaciones` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `d_personales`
--

INSERT INTO `d_personales` (`id`, `id_clientes`, `nombre`, `fecha_nacimiento`, `correo`, `tel`, `jojo_fav`, `por1`, `parte_fav`, `por2`, `pb`, `notificaciones`) VALUES
(1, 1, 'Soufa', '2010-01-25', 'sofiacereto2@gmail.com', '', '3', '', '4', '', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `d_personales`
--
ALTER TABLE `d_personales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `d_personales`
--
ALTER TABLE `d_personales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
