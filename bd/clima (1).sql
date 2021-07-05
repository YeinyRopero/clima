-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-07-2021 a las 00:28:33
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clima`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `acceso_id` bigint(20) NOT NULL,
  `acceso_usuario` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acceso_clave` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `acceso_perfil` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_doc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`acceso_id`, `acceso_usuario`, `acceso_clave`, `acceso_perfil`, `usuario_doc`) VALUES
(1, 'y', 'y', 'administrador', 1065886947),
(2, 'br', 'br', 'cliente', 123),
(18, 'ana', 'ana', 'cliente', 12),
(22, 'pu', 'pu', 'cliente', 1234),
(23, 'holap', 'holap', 'cliente', 12345);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `mensaje_id` bigint(20) NOT NULL,
  `mensaje_des` varchar(90) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario_doc` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`mensaje_id`, `mensaje_des`, `usuario_doc`) VALUES
(1, 'mensaje de prueba', 0),
(2, 'mensajde prueba dos', 12),
(3, 'prueba 3', 12),
(7, 'este prueba es de mensaje', 12),
(8, 'holados', 12),
(9, 'h', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuario_doc` varchar(12) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_correo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_celular` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `usuario_perfil` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ROW_FORMAT=COMPACT;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario_doc`, `usuario_nombre`, `usuario_correo`, `usuario_celular`, `usuario_perfil`) VALUES
('1065886947', 'yeiny ropero', 'yeinycorrep', '3207371081', 'administrador'),
('12', 'ana maria ropero', 'anacorreo', '320987', 'cliente'),
('123', 'brayan ropero', 'brayansincorreo', '123', 'cliente'),
('1234', 'prueba', 'prueba', '5', 'cliente'),
('12345', 'hola', 'hola', '4', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`acceso_id`),
  ADD KEY `usuario_doc` (`usuario_doc`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`mensaje_id`),
  ADD KEY `usuario_doc` (`usuario_doc`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuario_doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `acceso_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `mensaje_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
