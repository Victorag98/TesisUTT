-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-11-2022 a las 01:29:53
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `uttdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `typeofuser`
--

CREATE TABLE `typeofuser` (
  `IDTypeofUser` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `typeofuser`
--

INSERT INTO `typeofuser` (`IDTypeofUser`, `Name`) VALUES
(1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `IDTypeofUser` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`IDTypeofUser`, `id`, `full_name`, `email`, `password`, `status`) VALUES
(1, 3, 'bySantii', 'santi@gmail.com', '25d55ad283aa400af464c76d713c07ad', 1),
(1, 6, 'Yair Blanco Santiago', 'yair.blanco@uttn.mx', 'd41d8cd98f00b204e9800998ecf8427e', 1),
(1, 7, 'Daniel', 'nestor500sgo@gmail.com', 'ba27b9fd33a330e287da6f0e1a114e3b', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `typeofuser`
--
ALTER TABLE `typeofuser`
  ADD PRIMARY KEY (`IDTypeofUser`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDTypeofUser` (`IDTypeofUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `typeofuser`
--
ALTER TABLE `typeofuser`
  MODIFY `IDTypeofUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`IDTypeofUser`) REFERENCES `typeofuser` (`IDTypeofUser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
