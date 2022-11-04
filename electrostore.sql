-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-11-2022 a las 13:37:18
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
-- Base de datos: `electrostore`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `imagen` varchar(35) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `precio` int(12) NOT NULL,
  `cantidad` int(12) NOT NULL,
  `subtotal` int(15) NOT NULL,
  `numeroventa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`imagen`, `nombre`, `precio`, `cantidad`, `subtotal`, `numeroventa`) VALUES
('49LH600T.jpg', 'LG', 2499900, 5, 12499500, 1),
('7705191001548-1.jpg', 'CHALLENGER', 599900, 1, 599900, 2),
('7705191001548-1.jpg', 'CHALLENGER', 599900, 2, 1199800, 3),
('UN55KU6000KXZL.png', 'SAMSUNG', 2299900, 1, 2299900, 4),
('49UH603T.jpg', 'LG', 2799900, 1, 2799900, 5),
('55T18 ANDROID T2.jpg', 'CHALLENGER', 1899900, 1, 1899900, 6),
('55T18 ANDROID T2.jpg', 'CHALLENGER', 1899900, 2, 3799800, 7),
('55T18 ANDROID T2.jpg', 'CHALLENGER', 1899900, 3, 5699700, 8),
('70UH635T.jpg', 'SAMSUNG', 12999900, 1, 12999900, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio`
--

CREATE TABLE `envio` (
  `direccion` varchar(60) NOT NULL,
  `conductor` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `garantia` text NOT NULL,
  `id` int(30) NOT NULL,
  `codigo` text NOT NULL,
  `imagen` varchar(40) NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL,
  `peso` text NOT NULL,
  `precio` text NOT NULL,
  `pulgadas` text NOT NULL,
  `resolucion` text NOT NULL,
  `stock` text NOT NULL,
  `descripcion` text NOT NULL,
  `tipo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`garantia`, `id`, `codigo`, `imagen`, `marca`, `modelo`, `peso`, `precio`, `pulgadas`, `resolucion`, `stock`, `descripcion`, `tipo`) VALUES
('1 Año', 77002, '7705191001548', '7705191001548-1.jpg', 'CHALLENGER', '32T15 T2', '5.3 kg', '599900', '32\"', 'HD', '10', '', 'TV LED'),
('1 Año', 77003, '8806087660111', '70UH635T.jpg', 'SAMSUNG', '70UH635T', '8,5Kg', '12999900', '70\"', 'Ultra HD', '15', '', 'TV LED'),
('1 Años', 77004, '8806087896718', '49UH603T.jpg', 'LG', '49UH603T', '11.84kg', '2799900', '49\"', 'UHD', '10', '', 'TV LED'),
('1 año', 77005, '8806087614480', '24MT48VF-PZ.jpg', 'LG', '24MT48VF-PZ', '3.4kg', '550000', '24\"', 'FHD', '10', '', 'TV LED'),
('1 año', 77006, '7501487602679', '32DS600H.jpg', 'PANASONIC', '32DS600H', '3.4kg', '1029900', '32\"', 'HD', '10', '', 'TV LED'),
('1 año', 77007, '7705191003405', '55T18 ANDROID T2.jpg', 'CHALLENGER', '55T18 ANDROID T2', '3.5kg', '1899900', '55\"', 'FHD', '10', '', 'TV LED'),
('1 año', 77008, '7501487605304', 'TC-32D400H.jpg', 'PANASONIC', 'TC-32D400H', '3kg', '869000', '32\"', 'HD', '10', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(45) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `privilegio` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `usuario`, `correo`, `password`, `fecha_registro`, `privilegio`) VALUES
(1, 'Yeiler Mosquera', 'admin', 'yeiler@gmail.com', '$2y$10$3qVQgFW0guWYdYF9/UbXK.WqFJ6Ov8VRJonvCW5DDweH6RqDr7DuG', '2022-10-28 03:41:31', 1),
(2, 'John Doe', 'johndoe', 'johndoe@gmail.com', '$2y$10$3qVQgFW0guWYdYF9/UbXK.WqFJ6Ov8VRJonvCW5DDweH6RqDr7DuG', '2022-11-03 22:53:04', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`numeroventa`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`usuario`),
  ADD UNIQUE KEY `email` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `numeroventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
