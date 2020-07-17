-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-07-2020 a las 00:15:03
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registrosphp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`) VALUES
(1, 'ropa', 'ropa de niños'),
(3, 'JUGUETES', 'Juguetes  modi'),
(5, 'MUEBLES', 'MUEBLES DE OFICINA'),
(6, 'prueba categria', 'prueba'),
(7, 'Ropa de prueba', ' prueba cate'),
(8, 'Ropa de prueba', ' prueba cate');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` decimal(10,0) NOT NULL,
  `imagen` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `proveedor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `cantidad`, `precio`, `imagen`, `descripcion`, `categoria_id`, `proveedor_id`) VALUES
(1, 'Mesas de Oficina', 6, '460', '-', 'mesas redondas para distinto uso', 5, 1),
(2, 'Zapato', 6, '250', '-', 'desc de zapato', 1, 1),
(3, 'Chamarra', 12, '160', 'public/img/', 'ropa', 1, 1),
(4, 'prueba producto', 2, '12', 'public/img/', 'desc de prod', 1, 1),
(5, 'prueba producto', 2, '12', 'public/img/Koala.jpgKoala.jpg', 'desc de prod', 1, 1),
(6, 'prueba producto', 2, '12', '/public/img/Koala.jpgKoala.jpg', 'desc de prod', 1, 1),
(7, 'estuche', 6, '200', '/public/img/Penguins.jpg', 'des de imagen', 1, 1),
(8, 'estuche', 6, '200', '/public/img/Penguins.jpg', 'des de imagen', 1, 1),
(9, 'estuche', 6, '200', '/public/img/Penguins.jpg', 'des de imagen', 1, 1),
(10, 'estuche', 6, '200', '/public/img/Penguins.jpg', 'des de imagen', 1, 1),
(11, 'Mochila', 6, '160', '/public/img/Koala.jpg', 'prueba ', 1, 1),
(12, 'mesa de prueba', 12, '250', '/public/img/Jellyfish.jpg', 'desc', 5, 1),
(13, 'Laptop HP', 6, '7000', '/public/img/arq_MVC_LARAVEL_JWT_CLIENTE_SERVIDOR.png', 'descripcionde la laptop', 5, 1),
(14, 'Chamarra', 12, '160', '/public/img/laravel.png', 'Chamarra', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `direccion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `telefono`, `direccion`) VALUES
(1, 'PROVEEDOR', '2323121', 'Av. abc Nro 123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `clave`) VALUES
(1, 'Cristian MODIFICADO', 'cchura@gmail.com', 'cristian123'),
(3, 'Cristian MODIFICADO', 'cchura.cpc@gmail.com', 'cristian123'),
(4, 'Oscar Paredez ', 'oscar@gmail.com', 'oscar123'),
(5, 'Juan', 'juan@gmail.com', 'juan123'),
(6, 'Ana', 'ana@gmail.com', 'ana123'),
(7, 'Administrador', 'admin@admin.com', 'admin123'),
(8, 'Pedro', 'pedro@gmail.com', 'pedro123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`),
  ADD KEY `proveedor_id` (`proveedor_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`proveedor_id`) REFERENCES `proveedores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
