-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-10-2020 a las 22:28:55
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
-- Base de datos: `sol_fact`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amount`
--

CREATE TABLE `amount` (
  `id` int(11) NOT NULL,
  `v_nit` varchar(100) DEFAULT NULL,
  `v_amount` varchar(250) DEFAULT NULL,
  `v_des_amount` varchar(250) DEFAULT NULL,
  `v_remark` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `amount`
--

INSERT INTO `amount` (`id`, `v_nit`, `v_amount`, `v_des_amount`, `v_remark`) VALUES
(22, '667', '2500', 'Hitler', NULL),
(23, '667', '7000', 'Osama', NULL),
(24, '667', '100', 'Dulce', NULL),
(25, '7', '800000', 'Bugatii', NULL),
(26, '7', '9999999', 'Saco Gucci', NULL),
(27, '63666', '5000', 'Paspas', NULL),
(28, '646446', '50', 'Chicle', 'Tumix'),
(29, '646446', '50', 'Chicle', 'Tumix');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `amountnew`
--

CREATE TABLE `amountnew` (
  `id` int(11) NOT NULL,
  `v_nit` varchar(100) DEFAULT NULL,
  `v_name` varchar(250) DEFAULT NULL,
  `v_address` varchar(250) DEFAULT NULL,
  `v_email` varchar(250) DEFAULT NULL,
  `v_phone` varchar(250) DEFAULT NULL,
  `v_amount` varchar(250) DEFAULT NULL,
  `v_des_amount` varchar(250) DEFAULT NULL,
  `v_remark` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `amountnew`
--

INSERT INTO `amountnew` (`id`, `v_nit`, `v_name`, `v_address`, `v_email`, `v_phone`, `v_amount`, `v_des_amount`, `v_remark`) VALUES
(5, 'nit', 'name', 'address', 'email', 'phon', 'amo1', 'desamo1', 'Observa'),
(6, 'nit', 'name', 'address', 'email', 'phon', 'amo2', 'desamo2', 'Observa'),
(7, '667-7', 'Luci', 'Inferno 5', 'Estrelladelamañana@gmail.com', '667', '5200', 'Alma 2', 'Gracias a Dios'),
(8, '667-7', 'Luci', 'Inferno 5', 'Estrelladelamañana@gmail.com', '667', '900', 'Sacrificio 6', 'Gracias a Dios');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `amountnew`
--
ALTER TABLE `amountnew`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `amount`
--
ALTER TABLE `amount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `amountnew`
--
ALTER TABLE `amountnew`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
