-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2018 a las 06:23:06
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdsanitario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrativos`
--

CREATE TABLE `administrativos` (
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Cedula` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Id` int(30) NOT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `administrativos`
--

INSERT INTO `administrativos` (`Nombre`, `Apellido`, `Cedula`, `Contrasena`, `Id`, `cargo`) VALUES
('admin', 'sistema', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 1, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificados`
--

CREATE TABLE `certificados` (
  `Nombres` int(50) NOT NULL,
  `Documentcion` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Id` int(50) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id` int(40) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Cedula` int(30) NOT NULL,
  `Correo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Direccion` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Celular` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`Id`, `Nombre`, `Apellido`, `Cedula`, `Correo`, `Direccion`, `Celular`, `Contrasena`) VALUES
(29, 'alejandro', 'bernal', 1116552281, 'alejo@gmail.com', 'calle 123', '3212634879', '25d55ad283aa400af464c76d713c07ad'),
(64, 'tatiana', 'torres', 1116552281, 'tatis@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70'),
(68, 'as', 'ds', 1234, '123@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70'),
(69, 'alexi', 'perez', 1116552, '1234@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosformulario`
--

CREATE TABLE `datosformulario` (
  `idFormulario` int(11) NOT NULL,
  `FechaRecibido` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SolicitudNo` bigint(20) NOT NULL,
  `Nombres` varchar(250) DEFAULT NULL,
  `Cedula` bigint(20) DEFAULT NULL,
  `CiudadExpedicion` varchar(50) DEFAULT NULL,
  `RazonSocial` int(250) DEFAULT NULL,
  `Nit` bigint(20) DEFAULT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Barrio` varchar(200) DEFAULT NULL,
  `Comuna` varchar(200) DEFAULT NULL,
  `Vereda` varchar(200) DEFAULT NULL,
  `Corregimiento` varchar(200) DEFAULT NULL,
  `Telefono` varchar(200) NOT NULL,
  `Regimen` enum('Comun','Simplicado') NOT NULL,
  `Actividad_Economica` text NOT NULL,
  `Estaado` enum('Solicitada','Aceptada','Rechazada') NOT NULL,
  `Cliente` int(11) NOT NULL,
  `Observacion` text(500) DEFAULT NULL,
   `Archivo` text(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosformulario`
--

INSERT INTO `datosformulario` (`idFormulario`, `FechaRecibido`, `SolicitudNo`, `Nombres`, `Cedula`, `CiudadExpedicion`, `RazonSocial`, `Nit`, `Direccion`, `Barrio`, `Comuna`, `Vereda`, `Corregimiento`, `Telefono`, `Regimen`, `Actividad_Economica`, `Estaado`, `Cliente`) VALUES
(5, '2018-04-23 02:42:55', 12345, '1', 1, '1', 1, 1, '1', '1', '1', '1', '1', '1', 'Comun', '1', 'Solicitada', 29),
(26, '2018-05-01 04:11:02', 12345, 'as', 1234, '123', 123, 123, '123', '132', '123', '123', '123', '123', 'Comun', '123', 'Solicitada', 69);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionario`
--

CREATE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `Cedula` int(30) NOT NULL,
  `Correo` varchar(500) NOT NULL,
  `Direccion` varchar(500) NOT NULL,
  `Celular` varchar(500) NOT NULL,
  `Contrasena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `funcionario`
--

INSERT INTO `funcionario` (`idfuncionario`, `Nombre`, `Apellido`, `Cedula`, `Correo`, `Direccion`, `Celular`, `Contrasena`) VALUES
(1, 'tatiana', 'torres', 1112, '12@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `Id` int(50) NOT NULL,
  `CedulaPdf` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `CamComerPdf` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `FormSuelo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `RutPdf` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `Idcliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`Id`, `CedulaPdf`, `CamComerPdf`, `FormSuelo`, `RutPdf`, `Idcliente`) VALUES
(7, '../Archivos/1116552281-1.png', '../Archivos/1116552281-1116552281_RB201802091116.pdf', '../Archivos/1116552281-2.png', '', 29),
(12, '../Archivos/12-BD_ITIS2_2.pdf', '../Archivos/12-2.png', '../Archivos/12-3.png', '../Archivos/12-4.png', 62),
(13, '../Archivos/1116552-1.png', '../Archivos/1116552-2.png', '../Archivos/1116552-3.png', '../Archivos/1116552-4.png', 69);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_documentos`
--

CREATE TABLE `tbl_documentos` (
  `id_documento` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(150) DEFAULT NULL,
  `descripcion` mediumtext,
  `tamanio` int(10) UNSIGNED DEFAULT NULL,
  `tipo` varchar(150) DEFAULT NULL,
  `nombre_archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_documentos`
--

INSERT INTO `tbl_documentos` (`id_documento`, `titulo`, `descripcion`, `tamanio`, `tipo`, `nombre_archivo`) VALUES
(4, 'prueba', 'esta es una pruebaff', 171758, 'application/pdf', 'EJEMPLO.pdf'),
(5, 'ejemplo 2', 'segundo ejemplo', 100152, 'application/pdf', 'php.pdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `certificados`
--
ALTER TABLE `certificados`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Indices de la tabla `datosformulario`
--
ALTER TABLE `datosformulario`
  ADD PRIMARY KEY (`idFormulario`),
  ADD KEY `Cliente` (`Cliente`);

--
-- Indices de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  ADD PRIMARY KEY (`id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrativos`
--
ALTER TABLE `administrativos`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT de la tabla `datosformulario`
--
ALTER TABLE `datosformulario`
  MODIFY `idFormulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `tbl_documentos`
--
ALTER TABLE `tbl_documentos`
  MODIFY `id_documento` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `datosformulario`
--
ALTER TABLE `datosformulario`
  ADD CONSTRAINT `datosformulario_ibfk_1` FOREIGN KEY (`Cliente`) REFERENCES `cliente` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
