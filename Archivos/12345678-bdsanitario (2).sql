-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2018 a las 15:04:22
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
  `Nombres` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Contrasena` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(11, 'eric santiago', 'hernandez rojas', 1007599097, 'eric991907@gmail.com', 'cll32A 7B-20', '3213564900', NULL),
(12, 'tatiana', 'torres', 1057601288, 'eric991907@gmail.com', 'CLLE2A 7B-20', '3224567689', NULL),
(13, 'sdas', 'asd', 123, 'a@gmail.comm', 'adas', '123', '202cb962ac59075b964b07152d234b70'),
(14, 'nicolas', 'duran', 1057601286, 'nicolasa@gmail.com', 'calle16#1°a', '3115893327', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'geraldin', 'torres', 1057601287, 'lisstatis@gmail.com', 'calle12#1°a', '3115698724', '202cb962ac59075b964b07152d234b70'),
(16, 'geraldin', 'cucuy', 1057601225, 'geraldin@gmail.com', 'calle ciega', '3227224457', '202cb962ac59075b964b07152d234b70'),
(17, 'geral', 'duran', 1057601288, 'geral@gmail.com', 'calleciega', '321', 'caf1a3dfb505ffed0d024130f58c5cfa'),
(18, 'Giovanna', 'Tomassoni', 25286038, 'g.tomassoni@hotmail.com', 'calle 33 a No. 28-47 Altos de ', '3142368921', '0b0e4f37881eb62a2cc57e6bb5a396ae'),
(19, 'lorenzo', 'torres', 1057601288, 'lisstatis@gmail.com', 'callecciega', '3115893327', '202cb962ac59075b964b07152d234b70'),
(20, 'alejandro', 'bernal', 1116552281, 'labernal182@misena.edu.co', 'callefalsa', '3212634879', '81dc9bdb52d04dc20036dbd8313ed055'),
(21, 'alejandro', 'bernal', 12345678, '1224@gmail.com', '1235', '123', '25d55ad283aa400af464c76d713c07ad'),
(22, 'xhj', 'dfghj', 23741676, 'sdfgh@gmailcom', 'calleciega', '3102166024', '81dc9bdb52d04dc20036dbd8313ed055'),
(23, 'sdfghjk', 'fg', 123, 'fghj@gmail.com', 'dfghjk', '42', '81dc9bdb52d04dc20036dbd8313ed055'),
(24, 'alexis', 'fernandez', 111655228, '116552281@gmail.com', '123@gmail.com', '123', '202cb962ac59075b964b07152d234b70'),
(25, 'maria', 'benavides', 1053, 'alejandro@gmail.com', 'calle falsa', '123', '202cb962ac59075b964b07152d234b70'),
(26, 'sara', 'torres', 1225, '123@gmail.com', '123@gmail.com', '123', '202cb962ac59075b964b07152d234b70'),
(27, 'lizeth', 'peña', 10534, '123@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70'),
(28, 'qweqe', 'qweqwe', 123, '123@gmail.com', '123', '123', '202cb962ac59075b964b07152d234b70');

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
  `Cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datosformulario`
--

INSERT INTO `datosformulario` (`idFormulario`, `FechaRecibido`, `SolicitudNo`, `Nombres`, `Cedula`, `CiudadExpedicion`, `RazonSocial`, `Nit`, `Direccion`, `Barrio`, `Comuna`, `Vereda`, `Corregimiento`, `Telefono`, `Regimen`, `Actividad_Economica`, `Estaado`, `Cliente`) VALUES
(1, '2018-04-02 04:43:04', 123, '123', 123, '123', 123, 123, '123', '123', '123', '123', '123', '123', '', '123', 'Solicitada', 13),
(2, '2018-04-01 00:50:57', 123, '123', 123, '123', 123, 123, '123', '123', '123', '123', '123', '123', '', '123', '', 13),
(3, '2018-04-01 00:51:23', 123, 'tatuis', 123, '123', 123, 123, '123', '123', '123', '123', '123', '123', '', '123', '', 13),
(4, '2018-04-01 02:13:55', 123, 'tatuis', 123, '123', 123, 123, '123', '123', '123', '123', '123', '123', 'Simplicado', '123', '', 13),
(5, '2018-04-01 02:13:52', 123, 'tatuis', 123, '123', 123, 123, '123', '123', NULL, NULL, NULL, '123', 'Simplicado', '123', '', 13),
(6, '2018-04-01 02:13:49', 123, 'tatuis', 123, '123', 123, 123, '123', '123', NULL, NULL, NULL, '123', 'Comun', '123', '', 13),
(7, '2018-04-01 02:13:46', 123, 'tatuis', 123, '123', 123, 123, '123', '123', NULL, NULL, NULL, '123', 'Simplicado', '123', '', 13),
(8, '2018-04-01 02:13:39', 123, 'tatuis', 123, '123', 123, 123, '123', '123', NULL, NULL, NULL, '123', 'Simplicado', '123', '', 13),
(9, '2018-04-01 02:07:49', 12345, 'sara', 123, '123', 123, 123, '123', '123', '', '', '', '132', 'Comun', '123', '', 13),
(10, '2018-04-01 02:13:36', 12345, 'empresa de servicios publico', 123, '123', 123, 123, '123', '123', '', '', '', '32121', 'Comun', '123', '', 13),
(11, '2018-04-01 02:13:42', 12345, 'sasa', 213, '123', 123, 123, '123', 'aa', '', '', '', '321321', 'Comun', '123123', '', 13),
(12, '2018-04-01 02:12:13', 12345, 'alejand', 1312, '13', 123, 12312, '123123', 'centro', '', '', '', '321312312', 'Simplicado', '123123', '', 13),
(13, '2018-04-01 02:39:03', 12345, 'assa', 12, '123', 123, 13, '123', '12', '', '', '', '321', 'Simplicado', '12312', 'Aceptada', 13),
(14, '2018-04-01 02:19:00', 12345, 'assa', 12, '123', 123, 13, '123', '12', '', '', '', '321', 'Simplicado', '12312', '', 13),
(15, '2018-04-01 02:25:48', 12345, '123', 123, '123', 123, 132, '123', '132', '', '', '', '213321', 'Simplicado', '123', '', 13),
(16, '2018-04-01 03:49:28', 12345, '1234', 2345, '2345', 2345, 234, '23', '23', '', '', '', '342', 'Comun', '123', '', 13),
(17, '2018-04-01 03:50:07', 12345, '1234', 2345, '2345', 2345, 234, '23', '23', '', '', '', '342', 'Comun', '123', '', 13),
(18, '2018-04-02 03:43:54', 12345, 'qwer', 1234, '123', 123, 123, '123', '123', '123', '', '', '312', 'Comun', '123', 'Solicitada', 24),
(19, '2018-04-02 03:55:05', 12345, '123', 123, '123', 123, 123, '123', '123', '', '', '', '123', 'Comun', '123', 'Solicitada', 25);

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
(5, 'xada', 'xxada', 1007898789, 'eri@gmail.com', 'xD', '32123', '1d60e25d391b623a3c0e48d1641d2413');

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
(1, '../Archivos/123-9755da01-f84f-48e4-bccd-d327284b0e47.docx', '../Archivos/123-65803d04-512e-4b69-8f55-e699a7b9e6fa.docx', '../Archivos/123-19063797-e30d-46e9-bbb9-1891a494e800.docx', '../Archivos/123-alcaldia.jpeg', 13),
(2, '../Archivos/111655228-65803d04-512e-4b69-8f55-e699a7b9e6fa.docx', '../Archivos/111655228-9755da01-f84f-48e4-bccd-d327284b0e47.docx', '../Archivos/111655228-19063797-e30d-46e9-bbb9-1891a494e800.docx', '../Archivos/111655228-alcaldia.jpeg', 24),
(3, '../Archivos/1053-65803d04-512e-4b69-8f55-e699a7b9e6fa.docx', '../Archivos/1053-19063797-e30d-46e9-bbb9-1891a494e800.docx', '../Archivos/1053-523851cc-8e66-4337-9959-b754dc24973f.docx', '../Archivos/1053-alcaldia.jpeg', 25);

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
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `certificados`
--
ALTER TABLE `certificados`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `datosformulario`
--
ALTER TABLE `datosformulario`
  MODIFY `idFormulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `idfuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
