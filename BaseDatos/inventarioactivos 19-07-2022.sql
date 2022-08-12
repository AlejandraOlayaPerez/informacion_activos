-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-07-2022 a las 23:56:32
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarioactivos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` int(11) NOT NULL,
  `area` varchar(50) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `area`, `eliminado`) VALUES
(1, 'ese', 0),
(2, 'ese red', 0),
(3, '', 1),
(4, 'CIENTIFICO', 0),
(5, 'CONTABILIDAD', 0),
(6, 'SISTEMAS 2', 1),
(7, 'sistemas', 1),
(8, 'sistemas', 1),
(9, 'TALENTO HUMANO', 1),
(10, 'FACTURACION', 0),
(11, 'SISTEMA', 1),
(12, 'SISTEMAS', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id_clasificacion` varchar(50) NOT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id_clasificacion`, `clasificacion`, `eliminado`) VALUES
('1', 'dato', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato`
--

CREATE TABLE `formato` (
  `id_formato` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `activo` varchar(50) NOT NULL,
  `descripcion_activo` varchar(100) NOT NULL,
  `fecha_modificacion` date NOT NULL,
  `idioma` varchar(50) NOT NULL,
  `conservacion` varchar(50) NOT NULL,
  `formato` varchar(50) NOT NULL,
  `informacion_publica` varchar(100) NOT NULL,
  `propietario_activo` varchar(50) NOT NULL,
  `nivel_confidencialidad` varchar(50) NOT NULL,
  `confidelidad` int(11) NOT NULL,
  `integridad` int(11) NOT NULL,
  `disponibilidad` int(11) NOT NULL,
  `valor` int(11) NOT NULL,
  `nivel_tasacion` varchar(20) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `formato`
--

INSERT INTO `formato` (`id_formato`, `id_area`, `fecha`, `activo`, `descripcion_activo`, `fecha_modificacion`, `idioma`, `conservacion`, `formato`, `informacion_publica`, `propietario_activo`, `nivel_confidencialidad`, `confidelidad`, `integridad`, `disponibilidad`, `valor`, `nivel_tasacion`, `eliminado`) VALUES
(9, 1, '2022-04-24', 'ACTIVOS DE INFORMACION', 'ACTIVOS DE INFORMACION', '0000-00-00', 'Ingles', 'archivoSCV', 'Digital', 'documentos/ese/', 'Jimena olaya', 'DatosAbiertos', 1, 2, 3, 2, 'bajo', 1),
(13, 5, '2022-07-05', 'ACTIVOS DE INFORMACION', 'ACTIVOS DE INFORMACION', '0000-00-00', 'Español', 'archivoRar', 'Digital', 'documentos/ese/', 'Jimena olaya', 'DatosAbiertos', 1, 2, 5, 2, 'bajo', 0),
(15, 4, '2022-07-05', 'hhhhh', 'hhhhhh', '0000-00-00', 'Español', 'archivoICS', 'Digital', 'documentos/ese/', 'Jimena olaya', 'DatosAbiertos', 2, 1, 4, 2, 'bajo', 0),
(25, 10, '2022-07-05', 'fffff', 'ACTIVOS DE INFORMACION', '2022-07-03', 'Español', 'archivoSCV', 'Digital', 'documentos/ese/', 'Jimena olaya', 'DatosAbiertos', 1, 2, 2, 1, 'Muy Bajo', 1),
(26, 5, '2022-07-05', 'fffff', 'ACTIVOS DE INFORMACION', '2022-07-03', 'Español', 'archivoSCV', 'Digital', 'documentos/ese/', 'Jimena olaya', 'DatosAbiertos', 1, 2, 2, 1, 'Muy Bajo', 0),
(27, 4, '2022-07-05', '74', 'ACTIVOS DE INFORMACION', '2022-07-03', 'Español', 'archivoSCV', 'Fisico', 'https://es.scribd.com/document/234986187/Actividad-Semana-3', 'Jimena olaya', 'InformacionPublicoClasificado', 1, 2, 2, 1, 'Muy Bajo', 1),
(28, 5, '2022-07-19', '3', 'wwwwww', '2022-07-05', 'Ingles', 'mensajeInstantanea', 'Fisico', 'documentos/ese/', 'Jimena olaya', 'InformacionPublicoReservado', 5, 5, 5, 4, 'Alto', 1),
(29, 10, '2022-07-06', 'SISTEMAS', 'ACTIVOS DE INFORMACION', '2022-07-03', 'Español', 'animacion', 'Digital', 'documentos/ese/', 'Jimena olaya', 'InformacionPublicoReservado', 4, 5, 3, 4, 'Alto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  `documento_identidad` int(15) NOT NULL,
  `nombre_usuario` varchar(100) NOT NULL,
  `Apellido_usuario` varchar(100) NOT NULL,
  `telefono` int(10) NOT NULL,
  `correo_electronico` varchar(100) NOT NULL,
  `contrasena` char(35) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `formato`
--
ALTER TABLE `formato`
  ADD PRIMARY KEY (`id_formato`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_area` (`id_area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `formato`
--
ALTER TABLE `formato`
  MODIFY `id_formato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `formato`
--
ALTER TABLE `formato`
  ADD CONSTRAINT `formato_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
