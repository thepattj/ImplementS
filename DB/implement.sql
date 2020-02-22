-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-02-2020 a las 01:12:14
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `implement`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ar`
--

CREATE TABLE `ar` (
  `idAR` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `idAuditoria` int(11) NOT NULL,
  `alcance` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `criterioAud` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipoA` tinyint(4) NOT NULL,
  `objetivos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `objetivo` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `actFecha` datetime NOT NULL,
  `proceAct` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `auditor` varchar(155) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesh`
--

CREATE TABLE `cesh` (
  `idCESH` int(11) NOT NULL,
  `PL` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `razonSocial` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `franquicia` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccionFiscal` varchar(355) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rfc` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `rl` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `rfcRl` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `curpRl` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `idEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `completocesh`
--

CREATE TABLE `completocesh` (
  `idCESH` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlrbpo`
--

CREATE TABLE `controlrbpo` (
  `sugerencia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `responsable` int(11) NOT NULL,
  `idRbpo` int(11) NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `nombreIns` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `certificado` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dcherramienta`
--

CREATE TABLE `dcherramienta` (
  `idEPP` int(11) NOT NULL,
  `categoria` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL,
  `eProteccion` tinyint(4) DEFAULT NULL,
  `idTra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dcproveedor`
--

CREATE TABLE `dcproveedor` (
  `idProvedor` int(11) NOT NULL,
  `deServicio` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `evaluacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dctraex`
--

CREATE TABLE `dctraex` (
  `idTra` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idProvedor` int(11) DEFAULT NULL,
  `idCESH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `idDocumento` int(11) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzcambiop`
--

CREATE TABLE `dzcambiop` (
  `idCambio` int(11) NOT NULL,
  `area` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `motivo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idTrab` int(11) DEFAULT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzcambiot`
--

CREATE TABLE `dzcambiot` (
  `idCambioT` int(11) NOT NULL,
  `equipo` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionC` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaC` datetime NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzordentr`
--

CREATE TABLE `dzordentr` (
  `idOrdenT` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `idUbicacion` int(11) DEFAULT NULL,
  `detallesT` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` tinyint(4) NOT NULL,
  `tipoT` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `ocacion` char(2) COLLATE utf8_spanish_ci NOT NULL,
  `horario` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `peligro` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precaucion` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `areaT` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idTrab` int(11) DEFAULT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monverif`
--

CREATE TABLE `monverif` (
  `idMonV` int(11) NOT NULL,
  `solicitud` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `proHall` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `nConformidad` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `responP` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `responV` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `accion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `responsableA` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaA` datetime NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `nombre` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

CREATE TABLE `organigrama` (
  `idTrab` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoP` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoM` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `edad` int(11) NOT NULL,
  `idCESH` int(11) NOT NULL,
  `idPuesto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politica`
--

CREATE TABLE `politica` (
  `idPolitica` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `idPuesto` int(11) NOT NULL,
  `nombre` varchar(55) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rbpo`
--

CREATE TABLE `rbpo` (
  `idRbpo` int(11) NOT NULL,
  `area` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `nombreSupervisor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombreTrabajador` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` char(20) COLLATE utf8_spanish_ci NOT NULL,
  `critica` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `incAcc` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `causa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `obser` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportea`
--

CREATE TABLE `reportea` (
  `idreporte` int(11) NOT NULL,
  `fechaR` datetime NOT NULL,
  `elaborado` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `conclusion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `recomendacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idAuditoria` int(11) DEFAULT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugque`
--

CREATE TABLE `sugque` (
  `idSugQ` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `nombreC` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `sQ` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabcurso`
--

CREATE TABLE `trabcurso` (
  `idTrab` int(11) NOT NULL,
  `idCESH` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `idUbicacion` int(11) NOT NULL,
  `nombre` varchar(150) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nUsuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nUsuario`, `contrasena`, `tipo`) VALUES
(1, 'sistemas', 'E281530', 'Admin'),
(2, 'sasisopa', 'ener.gas05', 'sasisopa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ar`
--
ALTER TABLE `ar`
  ADD PRIMARY KEY (`idAR`,`idCESH`),
  ADD KEY `Relationship6` (`idCESH`);

--
-- Indices de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  ADD PRIMARY KEY (`idAuditoria`);

--
-- Indices de la tabla `cesh`
--
ALTER TABLE `cesh`
  ADD PRIMARY KEY (`idCESH`),
  ADD UNIQUE KEY `id` (`idCESH`),
  ADD KEY `IX_Relationship50` (`idEstado`);

--
-- Indices de la tabla `completocesh`
--
ALTER TABLE `completocesh`
  ADD PRIMARY KEY (`idCESH`,`idUsuario`);

--
-- Indices de la tabla `controlrbpo`
--
ALTER TABLE `controlrbpo`
  ADD PRIMARY KEY (`idRbpo`,`idCESH`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`,`idCESH`),
  ADD KEY `Relationship10` (`idCESH`);

--
-- Indices de la tabla `dcherramienta`
--
ALTER TABLE `dcherramienta`
  ADD PRIMARY KEY (`idEPP`),
  ADD KEY `IX_Relationship36` (`idTra`);

--
-- Indices de la tabla `dcproveedor`
--
ALTER TABLE `dcproveedor`
  ADD PRIMARY KEY (`idProvedor`,`idCESH`);

--
-- Indices de la tabla `dctraex`
--
ALTER TABLE `dctraex`
  ADD PRIMARY KEY (`idTra`),
  ADD KEY `IX_Relationship35` (`idProvedor`,`idCESH`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`idDocumento`,`idCESH`),
  ADD KEY `Relationship7` (`idCESH`);

--
-- Indices de la tabla `dzcambiop`
--
ALTER TABLE `dzcambiop`
  ADD PRIMARY KEY (`idCambio`,`idCESH`),
  ADD KEY `IX_Relationship29` (`idTrab`,`idCESH`);

--
-- Indices de la tabla `dzcambiot`
--
ALTER TABLE `dzcambiot`
  ADD PRIMARY KEY (`idCambioT`,`idCESH`);

--
-- Indices de la tabla `dzordentr`
--
ALTER TABLE `dzordentr`
  ADD PRIMARY KEY (`idOrdenT`,`idCESH`),
  ADD KEY `IX_Relationship27` (`idUbicacion`),
  ADD KEY `IX_Relationship32` (`idTrab`,`idCESH`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `monverif`
--
ALTER TABLE `monverif`
  ADD PRIMARY KEY (`idMonV`,`idCESH`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`idMunicipio`,`idEstado`);

--
-- Indices de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD PRIMARY KEY (`idTrab`,`idCESH`),
  ADD KEY `IX_Relationship22` (`idPuesto`),
  ADD KEY `Relationship8` (`idCESH`);

--
-- Indices de la tabla `politica`
--
ALTER TABLE `politica`
  ADD PRIMARY KEY (`idPolitica`,`idCESH`),
  ADD KEY `Relationship24` (`idCESH`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`idPuesto`);

--
-- Indices de la tabla `rbpo`
--
ALTER TABLE `rbpo`
  ADD PRIMARY KEY (`idRbpo`,`idCESH`),
  ADD KEY `Relationship25` (`idCESH`);

--
-- Indices de la tabla `reportea`
--
ALTER TABLE `reportea`
  ADD PRIMARY KEY (`idreporte`,`idCESH`),
  ADD KEY `IX_Relationship42` (`idAuditoria`);

--
-- Indices de la tabla `sugque`
--
ALTER TABLE `sugque`
  ADD PRIMARY KEY (`idSugQ`,`idCESH`),
  ADD KEY `Relationship15` (`idCESH`);

--
-- Indices de la tabla `trabcurso`
--
ALTER TABLE `trabcurso`
  ADD PRIMARY KEY (`idTrab`,`idCESH`,`idCurso`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`idUbicacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ar`
--
ALTER TABLE `ar`
  MODIFY `idAR` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `idAuditoria` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dcherramienta`
--
ALTER TABLE `dcherramienta`
  MODIFY `idEPP` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dcproveedor`
--
ALTER TABLE `dcproveedor`
  MODIFY `idProvedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dctraex`
--
ALTER TABLE `dctraex`
  MODIFY `idTra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dzcambiop`
--
ALTER TABLE `dzcambiop`
  MODIFY `idCambio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dzcambiot`
--
ALTER TABLE `dzcambiot`
  MODIFY `idCambioT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dzordentr`
--
ALTER TABLE `dzordentr`
  MODIFY `idOrdenT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `monverif`
--
ALTER TABLE `monverif`
  MODIFY `idMonV` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  MODIFY `idTrab` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `politica`
--
ALTER TABLE `politica`
  MODIFY `idPolitica` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `idPuesto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `rbpo`
--
ALTER TABLE `rbpo`
  MODIFY `idRbpo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reportea`
--
ALTER TABLE `reportea`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `sugque`
--
ALTER TABLE `sugque`
  MODIFY `idSugQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ar`
--
ALTER TABLE `ar`
  ADD CONSTRAINT `Relationship6` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `controlrbpo`
--
ALTER TABLE `controlrbpo`
  ADD CONSTRAINT `Relationship20` FOREIGN KEY (`idRbpo`,`idCESH`) REFERENCES `rbpo` (`idRbpo`, `idCESH`);

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `Relationship10` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `Relationship7` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `dzcambiop`
--
ALTER TABLE `dzcambiop`
  ADD CONSTRAINT `Relationship29` FOREIGN KEY (`idTrab`,`idCESH`) REFERENCES `organigrama` (`idTrab`, `idCESH`);

--
-- Filtros para la tabla `dzordentr`
--
ALTER TABLE `dzordentr`
  ADD CONSTRAINT `Relationship27` FOREIGN KEY (`idUbicacion`) REFERENCES `ubicacion` (`idUbicacion`);

--
-- Filtros para la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD CONSTRAINT `Relationship22` FOREIGN KEY (`idPuesto`) REFERENCES `puesto` (`idPuesto`),
  ADD CONSTRAINT `Relationship8` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `politica`
--
ALTER TABLE `politica`
  ADD CONSTRAINT `Relationship24` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `rbpo`
--
ALTER TABLE `rbpo`
  ADD CONSTRAINT `Relationship25` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `sugque`
--
ALTER TABLE `sugque`
  ADD CONSTRAINT `Relationship15` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
