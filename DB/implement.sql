-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2020 a las 20:12:47
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
-- Estructura de tabla para la tabla `actauditoria`
--

CREATE TABLE `actauditoria` (
  `idAct` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `proceso` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `auditor` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `idAuditoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `actauditoria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ar`
--

CREATE TABLE `ar` (
  `idAR` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ar`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria`
--

CREATE TABLE `auditoria` (
  `idAuditoria` int(11) NOT NULL,
  `alcance` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `criterioAud` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `tipoA` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `objetivos` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `auditorLider` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `auditor1` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `auditor2` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `auditoria`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacoras`
--

CREATE TABLE `bitacoras` (
  `idBit` int(11) NOT NULL,
  `descripcion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaI` date NOT NULL,
  `fechaF` date NOT NULL,
  `estatus` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bitacoras`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendario`
--

CREATE TABLE `calendario` (
  `idCalendario` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechainicio` date DEFAULT NULL,
  `fechaFinal` date NOT NULL,
  `responsable` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `calendario`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cesh`
--

CREATE TABLE `cesh` (
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `NoEst` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `razonSocial` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `franquicia` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccionFiscal` varchar(355) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rfc` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ubicacion` varchar(355) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rl` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `rfcRl` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `curpRl` varchar(35) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estatus` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idEstado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cesh`
--

INSERT INTO `cesh` (`idCESH`, `NoEst`, `razonSocial`, `franquicia`, `direccionFiscal`, `rfc`, `ubicacion`, `telefono`, `correo`, `rl`, `rfcRl`, `curpRl`, `estatus`, `idEstado`) VALUES
('PL/0000/EXP/ES/2020', 'E0000', 'ESTACION, S.A. DE C.V.', 'BP', 'CALLE NO. COLONIA MUNICIPIO ESTADO', 'RFCSTA0522', 'CALLE NO. COLONIA MUNICIPIO ESTADO', '000 000 0000 ', 'ASEAESTACION@PRUEBA.COM', 'NOMBRE APATERNO AMATERNO', 'RFCRLST023', 'CURPRLST023', 'ACTIVADO', 1),
('PL/1389/EXP/ES/2015', 'E05552', 'Servicio Gove, S.A. De C.V.', 'G500', 'Ocampo No. 206 Sur, Centro, 26530, Allende', 'SGO980909CB3', 'Ocampo No. 206 Sur, Centro, 26530, Allende', '862 621 3053', 'servicio_gove@hotmail.com', 'Mario Humberto González Vela', 'GOVM720325CF3', 'GOVM720325HCLNLR04', 'ACTIVADO', 5),
('PL/22402/EXP/ES/2019', 'E13811', 'Kaizen Hidrocarburos Company, S.A. de C.V.', 'Pemex', 'Carretera Estatal Cuautitlán - Zumpango 870, San Pedro De La Laguna, C. P. 55609. Zumpango, Estado de México.', 'KHI150611K36', 'Carretera Estatal Cuautitlán - Zumpango 870, San Pedro De La Laguna, C. P. 55609. Zumpango, Estado de México.', '55 7621 4866', 'kaizenhidrocarburos@gmail.com', 'José Claudio Morlán Olguín', 'MOOC771229567', 'MOOC771229HMCRLL06', 'ACTIVADO', 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `completocesh`
--

CREATE TABLE `completocesh` (
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `completocesh`
--

INSERT INTO `completocesh` (`idCESH`, `idUsuario`) VALUES
('E05552', 5),
('PL/0000/EXP/ES/2020', 4),
('PL/22402/EXP/ES/2019', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `control`
--

CREATE TABLE `control` (
  `idControl` int(11) NOT NULL,
  `estatus` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `control`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `controlrbpo`
--

CREATE TABLE `controlrbpo` (
  `procedimiento` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sugerencia` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `mes` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `responsable` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `idControlR` int(11) NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `controlrbpo`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `nombreCurso` varchar(155) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombreIns` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `certificado` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `curso`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dcherramienta`
--

CREATE TABLE `dcherramienta` (
  `idEPP` int(11) NOT NULL,
  `herramienta` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `estadoH` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `EPP` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `idTra` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dcherramienta`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dcproveedor`
--

CREATE TABLE `dcproveedor` (
  `idProvedor` int(11) NOT NULL,
  `razonSocial` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `deServicio` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `evaluacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dcproveedor`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dctraex`
--

CREATE TABLE `dctraex` (
  `idTra` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idProvedor` int(11) DEFAULT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dctraex`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `idDocumento` int(11) NOT NULL,
  `tipo` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `num` int(11) NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `documento`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzbitacora`
--

CREATE TABLE `dzbitacora` (
  `idBitacoras` int(11) NOT NULL,
  `descripcion` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `estatus` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dzbitacora`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzcambiop`
--

CREATE TABLE `dzcambiop` (
  `idCambio` int(11) NOT NULL,
  `area` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `motivo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idTrab` int(11) DEFAULT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dzcambiop`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzcambiot`
--

CREATE TABLE `dzcambiot` (
  `idCambioT` int(11) NOT NULL,
  `equipo` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `descripcionC` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fechaC` date NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dzordentr`
--

CREATE TABLE `dzordentr` (
  `idOrdenT` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ubicacion` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `detallesT` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `tipoT` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `horariof` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `horario` varchar(6) COLLATE utf8_spanish_ci NOT NULL,
  `peligro` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `precaucion` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `areaT` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombreT` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `dzordentr`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idEstado` int(11) NOT NULL,
  `nombre` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `abreviatura` char(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idEstado`, `nombre`, `abreviatura`) VALUES
(1, 'Aguascalientes', 'AGS'),
(2, 'Baja California', 'BCN'),
(3, 'Baja California Sur', 'BCS'),
(4, 'Campeche', 'CAM'),
(5, 'Coahuila de Zaragoza', 'COA'),
(6, 'Colima', 'COL'),
(7, 'Chiapas', 'CHIS'),
(8, 'Chihuahua', 'CHIH'),
(9, 'Ciudad de México', 'CDMX'),
(10, 'Durango', 'DGO'),
(11, 'Guanajuato', 'GTO'),
(12, 'Guerrero', 'GRO'),
(13, 'Hidalgo', 'HGO'),
(14, 'Jalisco', 'JAL'),
(15, 'Estado de México', 'EDOME'),
(16, 'Michoacán de Ocampo', 'MICH'),
(17, 'Morelos', 'MOR'),
(18, 'Nayarit', 'NAY'),
(19, 'Nuevo León', 'NL'),
(20, 'Oaxaca de Juárez', 'OAX'),
(21, 'Puebla', 'PUE'),
(22, 'Querétaro', 'QRO'),
(23, 'Quintana Roo', 'ROO'),
(24, 'San Luis Potosí', 'SLP'),
(25, 'Sinaloa', 'SIN'),
(26, 'Sonora', 'SON'),
(27, 'Tabasco', 'TAB'),
(28, 'Tamaulipas', 'TAM'),
(29, 'Tlaxcala', 'TLX'),
(30, 'Veracruz de Ignacio de la Llave', 'VER'),
(31, 'Yucatán', 'YUC'),
(32, 'Zacatecas', 'ZAC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidentes`
--

CREATE TABLE `incidentes` (
  `idIncidentes` int(11) NOT NULL,
  `resp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `incidentes`
--



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
  `fechaA` date NOT NULL,
  `estatus` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `monverif`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `idMunicipio` int(11) NOT NULL,
  `nombre` varchar(125) COLLATE utf8_spanish_ci NOT NULL,
  `idEstado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`idMunicipio`, `nombre`, `idEstado`) VALUES
(1, 'Aguascalientes', 1),
(2, 'San Francisco de los Romo', 1),
(3, 'El Llano', 1),
(4, 'Rincón de Romos', 1),
(5, 'Cosío', 1),
(6, 'San José de Gracia', 1),
(7, 'Tepezalá', 1),
(8, 'Pabellón de Arteaga', 1),
(9, 'Asientos', 1),
(10, 'Calvillo', 1),
(11, 'Jesús María', 1),
(12, 'Mexicali', 2),
(13, 'Tecate', 2),
(14, 'Tijuana', 2),
(15, 'Playas de Rosarito', 2),
(16, 'Ensenada', 2),
(17, 'La Paz', 3),
(18, 'Los Cabos', 3),
(19, 'Comondú', 3),
(20, 'Loreto', 3),
(21, 'Mulegé', 3),
(22, 'Campeche', 4),
(23, 'Carmen', 4),
(24, 'Palizada', 4),
(25, 'Candelaria', 4),
(26, 'Escárcega', 4),
(27, 'Champotón', 4),
(28, 'Hopelchén', 4),
(29, 'Calakmul', 4),
(30, 'Tenabo', 4),
(31, 'Hecelchakán', 4),
(32, 'Calkiní', 4),
(33, 'Saltillo', 5),
(34, 'Arteaga', 5),
(35, 'Juárez', 5),
(36, 'Progreso', 5),
(37, 'Escobedo', 5),
(38, 'San Buenaventura', 5),
(39, 'Abasolo', 5),
(40, 'Candela', 5),
(41, 'Frontera', 5),
(42, 'Monclova', 5),
(43, 'Castaños', 5),
(44, 'Ramos Arizpe', 5),
(45, 'General Cepeda', 5),
(46, 'Piedras Negras', 5),
(47, 'Nava', 5),
(48, 'Acuña', 5),
(49, 'Múzquiz', 5),
(50, 'Jiménez', 5),
(51, 'Zaragoza', 5),
(52, 'Morelos', 5),
(53, 'Allende', 5),
(54, 'Villa Unión', 5),
(55, 'Guerrero', 5),
(56, 'Hidalgo', 5),
(57, 'Sabinas', 5),
(58, 'San Juan de Sabinas', 5),
(59, 'Torreón', 5),
(60, 'Matamoros', 5),
(61, 'Viesca', 5),
(62, 'Ocampo', 5),
(63, 'Nadadores', 5),
(64, 'Sierra Mojada', 5),
(65, 'Cuatro Ciénegas', 5),
(66, 'Lamadrid', 5),
(67, 'Sacramento', 5),
(68, 'San Pedro', 5),
(69, 'Francisco I. Madero', 5),
(70, 'Parras', 5),
(71, 'Colima', 6),
(72, 'Tecomán', 6),
(73, 'Manzanillo', 6),
(74, 'Armería', 6),
(75, 'Coquimatlán', 6),
(76, 'Comala', 6),
(77, 'Cuauhtémoc', 6),
(78, 'Ixtlahuacán', 6),
(79, 'Minatitlán', 6),
(80, 'Villa de Álvarez', 6),
(81, 'Tuxtla Gutiérrez', 7),
(82, 'San Fernando', 7),
(83, 'Berriozábal', 7),
(84, 'Ocozocoautla de Espinosa', 7),
(85, 'Suchiapa', 7),
(86, 'Chiapa de Corzo', 7),
(87, 'Osumacinta', 7),
(88, 'San Cristóbal de las Casas', 7),
(89, 'Chamula', 7),
(90, 'Ixtapa', 7),
(91, 'Zinacantán', 7),
(92, 'Acala', 7),
(93, 'Chiapilla', 7),
(94, 'San Lucas', 7),
(95, 'Teopisca', 7),
(96, 'Amatenango del Valle', 7),
(97, 'Chanal', 7),
(98, 'Oxchuc', 7),
(99, 'Huixtán', 7),
(100, 'Tenejapa', 7),
(101, 'Mitontic', 7),
(102, 'Reforma', 7),
(103, 'Juárez', 7),
(104, 'Pichucalco', 7),
(105, 'Sunuapa', 7),
(106, 'Ostuacán', 7),
(107, 'Francisco León', 7),
(108, 'Ixtacomitán', 7),
(109, 'Solosuchiapa', 7),
(110, 'Ixtapangajoya', 7),
(111, 'Tecpatán', 7),
(112, 'Copainalá', 7),
(113, 'Chicoasén', 7),
(114, 'Coapilla', 7),
(115, 'Pantepec', 7),
(116, 'Tapalapa', 7),
(117, 'Ocotepec', 7),
(118, 'Chapultenango', 7),
(119, 'Amatán', 7),
(120, 'Huitiupán', 7),
(121, 'Ixhuatán', 7),
(122, 'Tapilula', 7),
(123, 'Rayón', 7),
(124, 'Pueblo Nuevo Solistahuacán', 7),
(125, 'Jitotol', 7),
(126, 'Bochil', 7),
(127, 'Soyaló', 7),
(128, 'San Juan Cancuc', 7),
(129, 'Sabanilla', 7),
(130, 'Simojovel', 7),
(131, 'San Andrés Duraznal', 7),
(132, 'El Bosque', 7),
(133, 'Chalchihuitán', 7),
(134, 'Larráinzar', 7),
(135, 'Santiago el Pinar', 7),
(136, 'Chenalhó', 7),
(137, 'Aldama', 7),
(138, 'Pantelhó', 7),
(139, 'Sitalá', 7),
(140, 'Salto de Agua', 7),
(141, 'Tila', 7),
(142, 'Tumbalá', 7),
(143, 'Yajalón', 7),
(144, 'Ocosingo', 7),
(145, 'Chilón', 7),
(146, 'Benemérito de las Américas', 7),
(147, 'Marqués de Comillas', 7),
(148, 'Palenque', 7),
(149, 'La Libertad', 7),
(150, 'Catazajá', 7),
(151, 'Comitán de Domínguez', 7),
(152, 'Tzimol', 7),
(153, 'Chicomuselo', 7),
(154, 'Bella Vista', 7),
(155, 'Frontera Comalapa', 7),
(156, 'La Trinitaria', 7),
(157, 'La Independencia', 7),
(158, 'Maravilla Tenejapa', 7),
(159, 'Las Margaritas', 7),
(160, 'Altamirano', 7),
(161, 'Venustiano Carranza', 7),
(162, 'Totolapa', 7),
(163, 'Nicolás Ruíz', 7),
(164, 'Las Rosas', 7),
(165, 'La Concordia', 7),
(166, 'Angel Albino Corzo', 7),
(167, 'Montecristo de Guerrero', 7),
(168, 'Socoltenango', 7),
(169, 'Cintalapa', 7),
(170, 'Jiquipilas', 7),
(171, 'Arriaga', 7),
(172, 'Villaflores', 7),
(173, 'Tonalá', 7),
(174, 'Villa Corzo', 7),
(175, 'Pijijiapan', 7),
(176, 'Mapastepec', 7),
(177, 'Acapetahua', 7),
(178, 'Acacoyagua', 7),
(179, 'Escuintla', 7),
(180, 'Villa Comaltitlán', 7),
(181, 'Huixtla', 7),
(182, 'Mazatán', 7),
(183, 'Huehuetán', 7),
(184, 'Tuzantán', 7),
(185, 'Tapachula', 7),
(186, 'Suchiate', 7),
(187, 'Frontera Hidalgo', 7),
(188, 'Metapa', 7),
(189, 'Tuxtla Chico', 7),
(190, 'Unión Juárez', 7),
(191, 'Cacahoatán', 7),
(192, 'Motozintla', 7),
(193, 'Mazapa de Madero', 7),
(194, 'Amatenango de la Frontera', 7),
(195, 'Bejucal de Ocampo', 7),
(196, 'La Grandeza', 7),
(197, 'El Porvenir', 7),
(198, 'Siltepec', 7),
(199, 'Chihuahua', 8),
(200, 'Cuauhtémoc', 8),
(201, 'Riva Palacio', 8),
(202, 'Aquiles Serdán', 8),
(203, 'Bachíniva', 8),
(204, 'Guerrero', 8),
(205, 'Nuevo Casas Grandes', 8),
(206, 'Ascensión', 8),
(207, 'Janos', 8),
(208, 'Casas Grandes', 8),
(209, 'Galeana', 8),
(210, 'Buenaventura', 8),
(211, 'Gómez Farías', 8),
(212, 'Ignacio Zaragoza', 8),
(213, 'Madera', 8),
(214, 'Namiquipa', 8),
(215, 'Temósachic', 8),
(216, 'Matachí', 8),
(217, 'Juárez', 8),
(218, 'Guadalupe', 8),
(219, 'Praxedis G. Guerrero', 8),
(220, 'Ahumada', 8),
(221, 'Coyame del Sotol', 8),
(222, 'Ojinaga', 8),
(223, 'Aldama', 8),
(224, 'Julimes', 8),
(225, 'Manuel Benavides', 8),
(226, 'Delicias', 8),
(227, 'Rosales', 8),
(228, 'Meoqui', 8),
(229, 'Dr. Belisario Domínguez', 8),
(230, 'Satevó', 8),
(231, 'San Francisco de Borja', 8),
(232, 'Nonoava', 8),
(233, 'Guachochi', 8),
(234, 'Bocoyna', 8),
(235, 'Cusihuiriachi', 8),
(236, 'Gran Morelos', 8),
(237, 'Santa Isabel', 8),
(238, 'Carichí', 8),
(239, 'Uruachi', 8),
(240, 'Ocampo', 8),
(241, 'Moris', 8),
(242, 'Chínipas', 8),
(243, 'Maguarichi', 8),
(244, 'Guazapares', 8),
(245, 'Batopilas', 8),
(246, 'Urique', 8),
(247, 'Morelos', 8),
(248, 'Guadalupe y Calvo', 8),
(249, 'San Francisco del Oro', 8),
(250, 'Rosario', 8),
(251, 'Huejotitán', 8),
(252, 'El Tule', 8),
(253, 'Balleza', 8),
(254, 'Santa Bárbara', 8),
(255, 'Camargo', 8),
(256, 'Saucillo', 8),
(257, 'Valle de Zaragoza', 8),
(258, 'La Cruz', 8),
(259, 'San Francisco de Conchos', 8),
(260, 'Hidalgo del Parral', 8),
(261, 'Allende', 8),
(262, 'López', 8),
(263, 'Matamoros', 8),
(264, 'Jiménez', 8),
(265, 'Coronado', 8),
(266, 'Álvaro Obregón', 9),
(267, 'Azcapotzalco', 9),
(268, 'Benito Juárez', 9),
(269, 'Coyoacán', 9),
(270, 'Cuajimalpa de Morelos', 9),
(271, 'Cuauhtémoc', 9),
(272, 'Gustavo A. Madero', 9),
(273, 'Iztacalco', 9),
(274, 'Iztapalapa', 9),
(275, 'La Magdalena Contreras', 9),
(276, 'Miguel Hidalgo', 9),
(277, 'Milpa Alta', 9),
(278, 'Tláhuac', 9),
(279, 'Tlalpan', 9),
(280, 'Venustiano Carranza', 9),
(281, 'Xochimilco', 9),
(282, 'Durango', 10),
(283, 'Canatlán', 10),
(284, 'Nuevo Ideal', 10),
(285, 'Coneto de Comonfort', 10),
(286, 'San Juan del Río', 10),
(287, 'Canelas', 10),
(288, 'Topia', 10),
(289, 'Tamazula', 10),
(290, 'Santiago Papasquiaro', 10),
(291, 'Otáez', 10),
(292, 'San Dimas', 10),
(293, 'Guadalupe Victoria', 10),
(294, 'Peñón Blanco', 10),
(295, 'Pánuco de Coronado', 10),
(296, 'Poanas', 10),
(297, 'Nombre de Dios', 10),
(298, 'Vicente Guerrero', 10),
(299, 'Súchil', 10),
(300, 'Pueblo Nuevo', 10),
(301, 'Mezquital', 10),
(302, 'Gómez Palacio', 10),
(303, 'Lerdo', 10),
(304, 'Mapimí', 10),
(305, 'Tlahualilo', 10),
(306, 'Hidalgo', 10),
(307, 'Ocampo', 10),
(308, 'Guanaceví', 10),
(309, 'San Bernardo', 10),
(310, 'Indé', 10),
(311, 'San Pedro del Gallo', 10),
(312, 'Tepehuanes', 10),
(313, 'El Oro', 10),
(314, 'Nazas', 10),
(315, 'San Luis del Cordero', 10),
(316, 'Rodeo', 10),
(317, 'Cuencamé', 10),
(318, 'Santa Clara', 10),
(319, 'San Juan de Guadalupe', 10),
(320, 'General Simón Bolívar', 10),
(321, 'Guanajuato', 11),
(322, 'Silao de la Victoria', 11),
(323, 'Romita', 11),
(324, 'San Francisco del Rincón', 11),
(325, 'Purísima del Rincón', 11),
(326, 'Manuel Doblado', 11),
(327, 'Irapuato', 11),
(328, 'Salamanca', 11),
(329, 'Pueblo Nuevo', 11),
(330, 'Pénjamo', 11),
(331, 'Cuerámaro', 11),
(332, 'Abasolo', 11),
(333, 'Huanímaro', 11),
(334, 'León', 11),
(335, 'San Felipe', 11),
(336, 'Ocampo', 11),
(337, 'San Miguel de Allende', 11),
(338, 'Dolores Hidalgo Cuna de la Independencia Nacional', 11),
(339, 'San Diego de la Unión', 11),
(340, 'San Luis de la Paz', 11),
(341, 'Victoria', 11),
(342, 'Xichú', 11),
(343, 'Atarjea', 11),
(344, 'Santa Catarina', 11),
(345, 'Doctor Mora', 11),
(346, 'Tierra Blanca', 11),
(347, 'San José Iturbide', 11),
(348, 'Celaya', 11),
(349, 'Apaseo el Grande', 11),
(350, 'Comonfort', 11),
(351, 'Santa Cruz de Juventino Rosas', 11),
(352, 'Villagrán', 11),
(353, 'Cortazar', 11),
(354, 'Valle de Santiago', 11),
(355, 'Jaral del Progreso', 11),
(356, 'Apaseo el Alto', 11),
(357, 'Jerécuaro', 11),
(358, 'Coroneo', 11),
(359, 'Acámbaro', 11),
(360, 'Tarimoro', 11),
(361, 'Tarandacuao', 11),
(362, 'Moroleón', 11),
(363, 'Salvatierra', 11),
(364, 'Yuriria', 11),
(365, 'Santiago Maravatío', 11),
(366, 'Uriangato', 11),
(367, 'Chilpancingo de los Bravo', 12),
(368, 'General Heliodoro Castillo', 12),
(369, 'Leonardo Bravo', 12),
(370, 'Tixtla de Guerrero', 12),
(371, 'Ayutla de los Libres', 12),
(372, 'Mochitlán', 12),
(373, 'Quechultenango', 12),
(374, 'Tecoanapa', 12),
(375, 'Acapulco de Juárez', 12),
(376, 'Juan R. Escudero', 12),
(377, 'San Marcos', 12),
(378, 'Iguala de la Independencia', 12),
(379, 'Huitzuco de los Figueroa', 12),
(380, 'Tepecoacuilco de Trujano', 12),
(381, 'Eduardo Neri', 12),
(382, 'Taxco de Alarcón', 12),
(383, 'Buenavista de Cuéllar', 12),
(384, 'Tetipac', 12),
(385, 'Pilcaya', 12),
(386, 'Teloloapan', 12),
(387, 'Ixcateopan de Cuauhtémoc', 12),
(388, 'Pedro Ascencio Alquisiras', 12),
(389, 'General Canuto A. Neri', 12),
(390, 'Arcelia', 12),
(391, 'Apaxtla', 12),
(392, 'Cuetzala del Progreso', 12),
(393, 'Cocula', 12),
(394, 'Tlapehuala', 12),
(395, 'Cutzamala de Pinzón', 12),
(396, 'Pungarabato', 12),
(397, 'Tlalchapa', 12),
(398, 'Coyuca de Catalán', 12),
(399, 'Ajuchitlán del Progreso', 12),
(400, 'Zirándaro', 12),
(401, 'San Miguel Totolapan', 12),
(402, 'La Unión de Isidoro Montes de Oca', 12),
(403, 'Petatlán', 12),
(404, 'Coahuayutla de José María Izazaga', 12),
(405, 'Zihuatanejo de Azueta', 12),
(406, 'Técpan de Galeana', 12),
(407, 'Atoyac de Álvarez', 12),
(408, 'Benito Juárez', 12),
(409, 'Coyuca de Benítez', 12),
(410, 'Olinalá', 12),
(411, 'Atenango del Río', 12),
(412, 'Copalillo', 12),
(413, 'Cualác', 12),
(414, 'Chilapa de Álvarez', 12),
(415, 'José Joaquín de Herrera', 12),
(416, 'Ahuacuotzingo', 12),
(417, 'Zitlala', 12),
(418, 'Mártir de Cuilapan', 12),
(419, 'Huamuxtitlán', 12),
(420, 'Xochihuehuetlán', 12),
(421, 'Alpoyeca', 12),
(422, 'Tlapa de Comonfort', 12),
(423, 'Tlalixtaquilla de Maldonado', 12),
(424, 'Xalpatláhuac', 12),
(425, 'Zapotitlán Tablas', 12),
(426, 'Acatepec', 12),
(427, 'Atlixtac', 12),
(428, 'Copanatoyac', 12),
(429, 'Malinaltepec', 12),
(430, 'Iliatenco', 12),
(431, 'Tlacoapa', 12),
(432, 'Atlamajalcingo del Monte', 12),
(433, 'San Luis Acatlán', 12),
(434, 'Metlatónoc', 12),
(435, 'Cochoapa el Grande', 12),
(436, 'Alcozauca de Guerrero', 12),
(437, 'Ometepec', 12),
(438, 'Tlacoachistlahuaca', 12),
(439, 'Xochistlahuaca', 12),
(440, 'Florencio Villarreal', 12),
(441, 'Cuautepec', 12),
(442, 'Copala', 12),
(443, 'Azoyú', 12),
(444, 'Juchitán', 12),
(445, 'Marquelia', 12),
(446, 'Cuajinicuilapa', 12),
(447, 'Igualapa', 12),
(448, 'Pachuca de Soto', 13),
(449, 'Mineral del Chico', 13),
(450, 'Mineral del Monte', 13),
(451, 'Ajacuba', 13),
(452, 'San Agustín Tlaxiaca', 13),
(453, 'Mineral de la Reforma', 13),
(454, 'Zapotlán de Juárez', 13),
(455, 'Jacala de Ledezma', 13),
(456, 'Pisaflores', 13),
(457, 'Pacula', 13),
(458, 'La Misión', 13),
(459, 'Chapulhuacán', 13),
(460, 'Ixmiquilpan', 13),
(461, 'Zimapán', 13),
(462, 'Nicolás Flores', 13),
(463, 'Cardonal', 13),
(464, 'Tasquillo', 13),
(465, 'Alfajayucan', 13),
(466, 'Huichapan', 13),
(467, 'Tecozautla', 13),
(468, 'Nopala de Villagrán', 13),
(469, 'Actopan', 13),
(470, 'Santiago de Anaya', 13),
(471, 'San Salvador', 13),
(472, 'Francisco I. Madero', 13),
(473, 'El Arenal', 13),
(474, 'Mixquiahuala de Juárez', 13),
(475, 'Progreso de Obregón', 13),
(476, 'Chilcuautla', 13),
(477, 'Tezontepec de Aldama', 13),
(478, 'Tlahuelilpan', 13),
(479, 'Tula de Allende', 13),
(480, 'Tepeji del Río de Ocampo', 13),
(481, 'Chapantongo', 13),
(482, 'Tepetitlán', 13),
(483, 'Tetepango', 13),
(484, 'Tlaxcoapan', 13),
(485, 'Atitalaquia', 13),
(486, 'Atotonilco de Tula', 13),
(487, 'Huejutla de Reyes', 13),
(488, 'San Felipe Orizatlán', 13),
(489, 'Jaltocán', 13),
(490, 'Huautla', 13),
(491, 'Atlapexco', 13),
(492, 'Huazalingo', 13),
(493, 'Yahualica', 13),
(494, 'Xochiatipan', 13),
(495, 'Molango de Escamilla', 13),
(496, 'Tepehuacán de Guerrero', 13),
(497, 'Lolotla', 13),
(498, 'Tlanchinol', 13),
(499, 'Tlahuiltepa', 13),
(500, 'Juárez Hidalgo', 13),
(501, 'Zacualtipán de Ángeles', 13),
(502, 'Calnali', 13),
(503, 'Xochicoatlán', 13),
(504, 'Tianguistengo', 13),
(505, 'Atotonilco el Grande', 13),
(506, 'Eloxochitlán', 13),
(507, 'Metztitlán', 13),
(508, 'San Agustín Metzquititlán', 13),
(509, 'Metepec', 13),
(510, 'Huehuetla', 13),
(511, 'San Bartolo Tutotepec', 13),
(512, 'Agua Blanca de Iturbide', 13),
(513, 'Tenango de Doria', 13),
(514, 'Huasca de Ocampo', 13),
(515, 'Acatlán', 13),
(516, 'Omitlán de Juárez', 13),
(517, 'Epazoyucan', 13),
(518, 'Tulancingo de Bravo', 13),
(519, 'Acaxochitlán', 13),
(520, 'Cuautepec de Hinojosa', 13),
(521, 'Santiago Tulantepec de Lugo Guerrero', 13),
(522, 'Singuilucan', 13),
(523, 'Tizayuca', 13),
(524, 'Zempoala', 13),
(525, 'Tolcayuca', 13),
(526, 'Villa de Tezontepec', 13),
(527, 'Apan', 13),
(528, 'Tlanalapa', 13),
(529, 'Almoloya', 13),
(530, 'Emiliano Zapata', 13),
(531, 'Tepeapulco', 13),
(532, 'Guadalajara', 14),
(533, 'Zapopan', 14),
(534, 'San Cristóbal de la Barranca', 14),
(535, 'Ixtlahuacán del Río', 14),
(536, 'Tala', 14),
(537, 'El Arenal', 14),
(538, 'Amatitán', 14),
(539, 'Tonalá', 14),
(540, 'Zapotlanejo', 14),
(541, 'Acatic', 14),
(542, 'Cuquío', 14),
(543, 'San Pedro Tlaquepaque', 14),
(544, 'Tlajomulco de Zúñiga', 14),
(545, 'El Salto', 14),
(546, 'Acatlán de Juárez', 14),
(547, 'Villa Corona', 14),
(548, 'Zacoalco de Torres', 14),
(549, 'Atemajac de Brizuela', 14),
(550, 'Jocotepec', 14),
(551, 'Ixtlahuacán de los Membrillos', 14),
(552, 'Juanacatlán', 14),
(553, 'Chapala', 14),
(554, 'Poncitlán', 14),
(555, 'Zapotlán del Rey', 14),
(556, 'Huejuquilla el Alto', 14),
(557, 'Mezquitic', 14),
(558, 'Villa Guerrero', 14),
(559, 'Bolaños', 14),
(560, 'Totatiche', 14),
(561, 'Colotlán', 14),
(562, 'Santa María de los Ángeles', 14),
(563, 'Huejúcar', 14),
(564, 'Chimaltitán', 14),
(565, 'San Martín de Bolaños', 14),
(566, 'Tequila', 14),
(567, 'Hostotipaquillo', 14),
(568, 'Magdalena', 14),
(569, 'Etzatlán', 14),
(570, 'San Marcos', 14),
(571, 'San Juanito de Escobedo', 14),
(572, 'Ameca', 14),
(573, 'Ahualulco de Mercado', 14),
(574, 'Teuchitlán', 14),
(575, 'San Martín Hidalgo', 14),
(576, 'Guachinango', 14),
(577, 'Mixtlán', 14),
(578, 'Mascota', 14),
(579, 'San Sebastián del Oeste', 14),
(580, 'San Juan de los Lagos', 14),
(581, 'Jalostotitlán', 14),
(582, 'San Miguel el Alto', 14),
(583, 'San Julián', 14),
(584, 'Arandas', 14),
(585, 'San Ignacio Cerro Gordo', 14),
(586, 'Teocaltiche', 14),
(587, 'Villa Hidalgo', 14),
(588, 'Encarnación de Díaz', 14),
(589, 'Yahualica de González Gallo', 14),
(590, 'Mexticacán', 14),
(591, 'Cañadas de Obregón', 14),
(592, 'Valle de Guadalupe', 14),
(593, 'Lagos de Moreno', 14),
(594, 'Ojuelos de Jalisco', 14),
(595, 'Unión de San Antonio', 14),
(596, 'San Diego de Alejandría', 14),
(597, 'Tepatitlán de Morelos', 14),
(598, 'Tototlán', 14),
(599, 'Atotonilco el Alto', 14),
(600, 'Ocotlán', 14),
(601, 'Jamay', 14),
(602, 'La Barca', 14),
(603, 'Ayotlán', 14),
(604, 'Jesús María', 14),
(605, 'Degollado', 14),
(606, 'Unión de Tula', 14),
(607, 'Ayutla', 14),
(608, 'Atenguillo', 14),
(609, 'Cuautla', 14),
(610, 'Atengo', 14),
(611, 'Talpa de Allende', 14),
(612, 'Puerto Vallarta', 14),
(613, 'Cabo Corrientes', 14),
(614, 'Tomatlán', 14),
(615, 'Cocula', 14),
(616, 'Tecolotlán', 14),
(617, 'Tenamaxtlán', 14),
(618, 'Juchitlán', 14),
(619, 'Chiquilistlán', 14),
(620, 'Ejutla', 14),
(621, 'El Limón', 14),
(622, 'El Grullo', 14),
(623, 'Tonaya', 14),
(624, 'Tuxcacuesco', 14),
(625, 'Villa Purificación', 14),
(626, 'La Huerta', 14),
(627, 'Autlán de Navarro', 14),
(628, 'Casimiro Castillo', 14),
(629, 'Cuautitlán de García Barragán', 14),
(630, 'Cihuatlán', 14),
(631, 'Zapotlán el Grande', 14),
(632, 'Gómez Farías', 14),
(633, 'Concepción de Buenos Aires', 14),
(634, 'Atoyac', 14),
(635, 'Techaluta de Montenegro', 14),
(636, 'Teocuitatlán de Corona', 14),
(637, 'Sayula', 14),
(638, 'Tapalpa', 14),
(639, 'Amacueca', 14),
(640, 'Tizapán el Alto', 14),
(641, 'Tuxcueca', 14),
(642, 'La Manzanilla de la Paz', 14),
(643, 'Mazamitla', 14),
(644, 'Valle de Juárez', 14),
(645, 'Quitupan', 14),
(646, 'Zapotiltic', 14),
(647, 'Tamazula de Gordiano', 14),
(648, 'San Gabriel', 14),
(649, 'Tolimán', 14),
(650, 'Zapotitlán de Vadillo', 14),
(651, 'Tuxpan', 14),
(652, 'Tonila', 14),
(653, 'Pihuamo', 14),
(654, 'Tecalitlán', 14),
(655, 'Jilotlán de los Dolores', 14),
(656, 'Santa María del Oro', 14),
(657, 'Toluca', 15),
(658, 'Acambay de Ruíz Castañeda', 15),
(659, 'Aculco', 15),
(660, 'Temascalcingo', 15),
(661, 'Atlacomulco', 15),
(662, 'Timilpan', 15),
(663, 'Morelos', 15),
(664, 'El Oro', 15),
(665, 'San Felipe del Progreso', 15),
(666, 'San José del Rincón', 15),
(667, 'Jocotitlán', 15),
(668, 'Ixtlahuaca', 15),
(669, 'Jiquipilco', 15),
(670, 'Temoaya', 15),
(671, 'Almoloya de Juárez', 15),
(672, 'Villa Victoria', 15),
(673, 'Villa de Allende', 15),
(674, 'Donato Guerra', 15),
(675, 'Ixtapan del Oro', 15),
(676, 'Santo Tomás', 15),
(677, 'Otzoloapan', 15),
(678, 'Zacazonapan', 15),
(679, 'Valle de Bravo', 15),
(680, 'Amanalco', 15),
(681, 'Temascaltepec', 15),
(682, 'Zinacantepec', 15),
(683, 'Tejupilco', 15),
(684, 'Luvianos', 15),
(685, 'San Simón de Guerrero', 15),
(686, 'Amatepec', 15),
(687, 'Tlatlaya', 15),
(688, 'Sultepec', 15),
(689, 'Texcaltitlán', 15),
(690, 'Coatepec Harinas', 15),
(691, 'Villa Guerrero', 15),
(692, 'Zacualpan', 15),
(693, 'Almoloya de Alquisiras', 15),
(694, 'Ixtapan de la Sal', 15),
(695, 'Tonatico', 15),
(696, 'Zumpahuacán', 15),
(697, 'Lerma', 15),
(698, 'Xonacatlán', 15),
(699, 'Otzolotepec', 15),
(700, 'San Mateo Atenco', 15),
(701, 'Metepec', 15),
(702, 'Mexicaltzingo', 15),
(703, 'Calimaya', 15),
(704, 'Chapultepec', 15),
(705, 'San Antonio la Isla', 15),
(706, 'Tenango del Valle', 15),
(707, 'Rayón', 15),
(708, 'Joquicingo', 15),
(709, 'Tenancingo', 15),
(710, 'Malinalco', 15),
(711, 'Ocuilan', 15),
(712, 'Atizapán', 15),
(713, 'Almoloya del Río', 15),
(714, 'Texcalyacac', 15),
(715, 'Tianguistenco', 15),
(716, 'Xalatlaco', 15),
(717, 'Capulhuac', 15),
(718, 'Ocoyoacac', 15),
(719, 'Huixquilucan', 15),
(720, 'Atizapán de Zaragoza', 15),
(721, 'Naucalpan de Juárez', 15),
(722, 'Tlalnepantla de Baz', 15),
(723, 'Polotitlán', 15),
(724, 'Jilotepec', 15),
(725, 'Soyaniquilpan de Juárez', 15),
(726, 'Villa del Carbón', 15),
(727, 'Chapa de Mota', 15),
(728, 'Nicolás Romero', 15),
(729, 'Isidro Fabela', 15),
(730, 'Jilotzingo', 15),
(731, 'Tepotzotlán', 15),
(732, 'Coyotepec', 15),
(733, 'Huehuetoca', 15),
(734, 'Cuautitlán Izcalli', 15),
(735, 'Teoloyucan', 15),
(736, 'Cuautitlán', 15),
(737, 'Melchor Ocampo', 15),
(738, 'Tultitlán', 15),
(739, 'Tultepec', 15),
(740, 'Ecatepec de Morelos', 15),
(741, 'Zumpango', 15),
(742, 'Tequixquiac', 15),
(743, 'Apaxco', 15),
(744, 'Hueypoxtla', 15),
(745, 'Coacalco de Berriozábal', 15),
(746, 'Tecámac', 15),
(747, 'Jaltenco', 15),
(748, 'Tonanitla', 15),
(749, 'Nextlalpan', 15),
(750, 'Teotihuacán', 15),
(751, 'San Martín de las Pirámides', 15),
(752, 'Acolman', 15),
(753, 'Otumba', 15),
(754, 'Axapusco', 15),
(755, 'Nopaltepec', 15),
(756, 'Temascalapa', 15),
(757, 'Tezoyuca', 15),
(758, 'Chiautla', 15),
(759, 'Papalotla', 15),
(760, 'Tepetlaoxtoc', 15),
(761, 'Texcoco', 15),
(762, 'Chiconcuac', 15),
(763, 'Atenco', 15),
(764, 'Chimalhuacán', 15),
(765, 'Chicoloapan', 15),
(766, 'La Paz', 15),
(767, 'Ixtapaluca', 15),
(768, 'Chalco', 15),
(769, 'Valle de Chalco Solidaridad', 15),
(770, 'Temamatla', 15),
(771, 'Cocotitlán', 15),
(772, 'Tlalmanalco', 15),
(773, 'Ayapango', 15),
(774, 'Tenango del Aire', 15),
(775, 'Ozumba', 15),
(776, 'Juchitepec', 15),
(777, 'Tepetlixpa', 15),
(778, 'Amecameca', 15),
(779, 'Atlautla', 15),
(780, 'Ecatzingo', 15),
(781, 'Nezahualcóyotl', 15),
(782, 'Morelia', 16),
(783, 'Huaniqueo', 16),
(784, 'Coeneo', 16),
(785, 'Quiroga', 16),
(786, 'Tzintzuntzan', 16),
(787, 'Lagunillas', 16),
(788, 'Acuitzio', 16),
(789, 'Madero', 16),
(790, 'Puruándiro', 16),
(791, 'José Sixto Verduzco', 16),
(792, 'Angamacutiro', 16),
(793, 'Panindícuaro', 16),
(794, 'Zacapu', 16),
(795, 'Tlazazalca', 16),
(796, 'Purépero', 16),
(797, 'Jiménez', 16),
(798, 'Morelos', 16),
(799, 'Huandacareo', 16),
(800, 'Cuitzeo', 16),
(801, 'Chucándiro', 16),
(802, 'Copándaro', 16),
(803, 'Tarímbaro', 16),
(804, 'Santa Ana Maya', 16),
(805, 'Álvaro Obregón', 16),
(806, 'Zinapécuaro', 16),
(807, 'Indaparapeo', 16),
(808, 'Queréndaro', 16),
(809, 'Sahuayo', 16),
(810, 'Briseñas', 16),
(811, 'Cojumatlán de Régules', 16),
(812, 'Venustiano Carranza', 16),
(813, 'Pajacuarán', 16),
(814, 'Vista Hermosa', 16),
(815, 'Tanhuato', 16),
(816, 'Yurécuaro', 16),
(817, 'Ixtlán', 16),
(818, 'La Piedad', 16),
(819, 'Numarán', 16),
(820, 'Churintzio', 16),
(821, 'Zináparo', 16),
(822, 'Penjamillo', 16),
(823, 'Marcos Castellanos', 16),
(824, 'Jiquilpan', 16),
(825, 'Villamar', 16),
(826, 'Chavinda', 16),
(827, 'Zamora', 16),
(828, 'Ecuandureo', 16),
(829, 'Tangancícuaro', 16),
(830, 'Chilchota', 16),
(831, 'Jacona', 16),
(832, 'Tangamandapio', 16),
(833, 'Cotija', 16),
(834, 'Tocumbo', 16),
(835, 'Tingüindín', 16),
(836, 'Uruapan', 16),
(837, 'Charapan', 16),
(838, 'Paracho', 16),
(839, 'Cherán', 16),
(840, 'Nahuatzen', 16),
(841, 'Tingambato', 16),
(842, 'Los Reyes', 16),
(843, 'Peribán', 16),
(844, 'Tancítaro', 16),
(845, 'Nuevo Parangaricutiro', 16),
(846, 'Buenavista', 16),
(847, 'Tepalcatepec', 16),
(848, 'Aguililla', 16),
(849, 'Apatzingán', 16),
(850, 'Parácuaro', 16),
(851, 'Coahuayana', 16),
(852, 'Chinicuila', 16),
(853, 'Coalcomán de Vázquez Pallares', 16),
(854, 'Aquila', 16),
(855, 'Tumbiscatío', 16),
(856, 'Arteaga', 16),
(857, 'Lázaro Cárdenas', 16),
(858, 'Epitacio Huerta', 16),
(859, 'Contepec', 16),
(860, 'Tlalpujahua', 16),
(861, 'Hidalgo', 16),
(862, 'Maravatío', 16),
(863, 'Irimbo', 16),
(864, 'Senguio', 16),
(865, 'Charo', 16),
(866, 'Tzitzio', 16),
(867, 'Tiquicheo de Nicolás Romero', 16),
(868, 'Aporo', 16),
(869, 'Angangueo', 16),
(870, 'Tuxpan', 16),
(871, 'Ocampo', 16),
(872, 'Jungapeo', 16),
(873, 'Zitácuaro', 16),
(874, 'Tuzantla', 16),
(875, 'Juárez', 16),
(876, 'Susupuato', 16),
(877, 'Pátzcuaro', 16),
(878, 'Erongarícuaro', 16),
(879, 'Huiramba', 16),
(880, 'Tacámbaro', 16),
(881, 'Turicato', 16),
(882, 'Ziracuaretiro', 16),
(883, 'Taretan', 16),
(884, 'Gabriel Zamora', 16),
(885, 'Nuevo Urecho', 16),
(886, 'Múgica', 16),
(887, 'Salvador Escalante', 16),
(888, 'Ario', 16),
(889, 'La Huacana', 16),
(890, 'Churumuco', 16),
(891, 'Nocupétaro', 16),
(892, 'Carácuaro', 16),
(893, 'Huetamo', 16),
(894, 'San Lucas', 16),
(895, 'Cuernavaca', 17),
(896, 'Huitzilac', 17),
(897, 'Tepoztlán', 17),
(898, 'Tlalnepantla', 17),
(899, 'Tlayacapan', 17),
(900, 'Jiutepec', 17),
(901, 'Temixco', 17),
(902, 'Miacatlán', 17),
(903, 'Coatlán del Río', 17),
(904, 'Tetecala', 17),
(905, 'Mazatepec', 17),
(906, 'Amacuzac', 17),
(907, 'Puente de Ixtla', 17),
(908, 'Ayala', 17),
(909, 'Yautepec', 17),
(910, 'Cuautla', 17),
(911, 'Emiliano Zapata', 17),
(912, 'Tlaltizapán de Zapata', 17),
(913, 'Zacatepec', 17),
(914, 'Xochitepec', 17),
(915, 'Tetela del Volcán', 17),
(916, 'Yecapixtla', 17),
(917, 'Totolapan', 17),
(918, 'Atlatlahucan', 18),
(919, 'Ocuituco', 18),
(920, 'Temoac', 18),
(921, 'Zacualpan', 18),
(922, 'Jojutla', 18),
(923, 'Tepalcingo', 18),
(924, 'Jonacatepec', 18),
(925, 'Axochiapan', 18),
(926, 'Jantetelco', 18),
(927, 'Tlaquiltenango', 18),
(928, 'Tepic', 18),
(929, 'Tuxpan', 18),
(930, 'Santiago Ixcuintla', 18),
(931, 'Acaponeta', 18),
(932, 'Tecuala', 18),
(933, 'Huajicori', 18),
(934, 'Del Nayar', 18),
(935, 'La Yesca', 18),
(936, 'Ruíz', 18),
(937, 'Rosamorada', 18),
(938, 'Compostela', 18),
(939, 'Bahía de Banderas', 18),
(940, 'San Blas', 18),
(941, 'Xalisco', 18),
(942, 'San Pedro Lagunillas', 18),
(943, 'Santa María del Oro', 18),
(944, 'Jala', 18),
(945, 'Ahuacatlán', 18),
(946, 'Ixtlán del Río', 18),
(947, 'Amatlán de Cañas', 18),
(948, 'Monterrey', 19),
(949, 'Anáhuac', 19),
(950, 'Lampazos de Naranjo', 19),
(951, 'Mina', 19),
(952, 'Bustamante', 19),
(953, 'Sabinas Hidalgo', 19),
(954, 'Villaldama', 19),
(955, 'Vallecillo', 19),
(956, 'Parás', 19),
(957, 'Salinas Victoria', 19),
(958, 'Ciénega de Flores', 19),
(959, 'Hidalgo', 19),
(960, 'Abasolo', 19),
(961, 'Higueras', 19),
(962, 'General Zuazua', 19),
(963, 'Agualeguas', 19),
(964, 'General Treviño', 19),
(965, 'Cerralvo', 19),
(966, 'Melchor Ocampo', 19),
(967, 'García', 19),
(968, 'General Escobedo', 19),
(969, 'Santa Catarina', 19),
(970, 'San Pedro Garza García', 19),
(971, 'San Nicolás de los Garza', 19),
(972, 'El Carmen', 19),
(973, 'Apodaca', 19),
(974, 'Pesquería', 19),
(975, 'Marín', 19),
(976, 'Doctor González', 19),
(977, 'Los Ramones', 19),
(978, 'Los Herreras', 19),
(979, 'Los Aldamas', 19),
(980, 'Doctor Coss', 19),
(981, 'General Bravo', 19),
(982, 'China', 19),
(983, 'Guadalupe', 19),
(984, 'Juárez', 19),
(985, 'Santiago', 19),
(986, 'Allende', 19),
(987, 'General Terán', 19),
(988, 'Cadereyta Jiménez', 19),
(989, 'Montemorelos', 19),
(990, 'Rayones', 19),
(991, 'Linares', 19),
(992, 'Iturbide', 19),
(993, 'Galeana', 19),
(994, 'Hualahuises', 19),
(995, 'Doctor Arroyo', 19),
(996, 'Aramberri', 19),
(997, 'General Zaragoza', 19),
(998, 'Mier y Noriega', 19),
(999, 'Oaxaca de Juárez', 20),
(1000, 'Villa de Etla', 20),
(1001, 'San Juan Bautista Atatlahuca', 20),
(1002, 'San Jerónimo Sosola', 20),
(1003, 'San Juan Bautista Jayacatlán', 20),
(1004, 'San Francisco Telixtlahuaca', 20),
(1005, 'Santiago Tenango', 20),
(1006, 'San Pablo Huitzo', 20),
(1007, 'San Juan del Estado', 20),
(1008, 'Magdalena Apasco', 20),
(1009, 'Santiago Suchilquitongo', 20),
(1010, 'San Juan Bautista Guelache', 20),
(1011, 'Reyes Etla', 20),
(1012, 'Nazareno Etla', 20),
(1013, 'San Andrés Zautla', 20),
(1014, 'San Agustín Etla', 20),
(1015, 'Soledad Etla', 20),
(1016, 'Santo Tomás Mazaltepec', 20),
(1017, 'Guadalupe Etla', 20),
(1018, 'San Pablo Etla', 20),
(1019, 'San Felipe Tejalápam', 20),
(1020, 'San Lorenzo Cacaotepec', 20),
(1021, 'Santa María Peñoles', 20),
(1022, 'Santiago Tlazoyaltepec', 20),
(1023, 'Tlalixtac de Cabrera', 20),
(1024, 'San Jacinto Amilpas', 20),
(1025, 'San Andrés Huayápam', 20),
(1026, 'San Agustín Yatareni', 20),
(1027, 'Santo Domingo Tomaltepec', 20),
(1028, 'Santa María del Tule', 20),
(1029, 'San Juan Bautista Tuxtepec', 20),
(1030, 'Loma Bonita', 20),
(1031, 'San José Independencia', 20),
(1032, 'Cosolapa', 20),
(1033, 'Acatlán de Pérez Figueroa', 20),
(1034, 'San Miguel Soyaltepec', 20),
(1035, 'Ayotzintepec', 20),
(1036, 'San Pedro Ixcatlán', 20),
(1037, 'San José Chiltepec', 20),
(1038, 'San Felipe Jalapa de Díaz', 20),
(1039, 'Santa María Jacatepec', 20),
(1040, 'San Lucas Ojitlán', 20),
(1041, 'San Juan Bautista Valle Nacional', 20),
(1042, 'San Felipe Usila', 20),
(1043, 'Huautla de Jiménez', 20),
(1044, 'Santa María Chilchotla', 20),
(1045, 'Santa Ana Ateixtlahuaca', 20),
(1046, 'San Lorenzo Cuaunecuiltitla', 20),
(1047, 'San Francisco Huehuetlán', 20),
(1048, 'San Pedro Ocopetatillo', 20),
(1049, 'Santa Cruz Acatepec', 20),
(1050, 'Eloxochitlán de Flores Magón', 20),
(1051, 'Santiago Texcalcingo', 20),
(1052, 'Teotitlán de Flores Magón', 20),
(1053, 'Santa María Teopoxco', 20),
(1054, 'San Martín Toxpalan', 20),
(1055, 'San Jerónimo Tecóatl', 20),
(1056, 'Santa María la Asunción', 20),
(1057, 'Huautepec', 20),
(1058, 'San Juan Coatzóspam', 20),
(1059, 'San Lucas Zoquiápam', 20),
(1060, 'San Antonio Nanahuatípam', 20),
(1061, 'San José Tenango', 20),
(1062, 'San Mateo Yoloxochitlán', 20),
(1063, 'San Bartolomé Ayautla', 20),
(1064, 'Mazatlán Villa de Flores', 20),
(1065, 'San Juan de los Cués', 20),
(1066, 'Santa María Tecomavaca', 20),
(1067, 'Santa María Ixcatlán', 20),
(1068, 'San Juan Bautista Cuicatlán', 20),
(1069, 'Cuyamecalco Villa de Zaragoza', 20),
(1070, 'Santa Ana Cuauhtémoc', 20),
(1071, 'Chiquihuitlán de Benito Juárez', 20),
(1072, 'San Pedro Teutila', 20),
(1073, 'San Miguel Santa Flor', 20),
(1074, 'Santa María Tlalixtac', 20),
(1075, 'San Andrés Teotilálpam', 20),
(1076, 'San Francisco Chapulapa', 20),
(1077, 'Concepción Pápalo', 20),
(1078, 'Santos Reyes Pápalo', 20),
(1079, 'San Juan Bautista Tlacoatzintepec', 20),
(1080, 'Santa María Pápalo', 20),
(1081, 'San Juan Tepeuxila', 20),
(1082, 'San Pedro Sochiápam', 20),
(1083, 'Valerio Trujano', 20),
(1084, 'San Pedro Jocotipac', 20),
(1085, 'Santa María Texcatitlán', 20),
(1086, 'San Pedro Jaltepetongo', 20),
(1087, 'Santiago Nacaltepec', 20),
(1088, 'Natividad', 20),
(1089, 'San Juan Quiotepec', 20),
(1090, 'San Pedro Yólox', 20),
(1091, 'Santiago Comaltepec', 20),
(1092, 'Abejones', 20),
(1093, 'San Pablo Macuiltianguis', 20),
(1094, 'Ixtlán de Juárez', 20),
(1095, 'San Juan Atepec', 20),
(1096, 'San Pedro Yaneri', 20),
(1097, 'San Miguel Aloápam', 20),
(1098, 'Teococuilco de Marcos Pérez', 20),
(1099, 'Santa Ana Yareni', 20),
(1100, 'San Juan Evangelista Analco', 20),
(1101, 'Santa María Jaltianguis', 20),
(1102, 'San Miguel del Río', 20),
(1103, 'San Juan Chicomezúchil', 20),
(1104, 'Capulálpam de Méndez', 20),
(1105, 'Nuevo Zoquiápam', 20),
(1106, 'Santiago Xiacuí', 20),
(1107, 'Guelatao de Juárez', 20),
(1108, 'Santa Catarina Ixtepeji', 20),
(1109, 'San Miguel Yotao', 20),
(1110, 'Santa Catarina Lachatao', 20),
(1111, 'San Miguel Amatlán', 20),
(1112, 'Santa María Yavesía', 20),
(1113, 'Santiago Laxopa', 20),
(1114, 'San Ildefonso Villa Alta', 20),
(1115, 'Santiago Camotlán', 20),
(1116, 'San Juan Yaeé', 20),
(1117, 'Santiago Lalopa', 20),
(1118, 'San Juan Yatzona', 20),
(1119, 'Villa Talea de Castro', 20),
(1120, 'Tanetze de Zaragoza', 20),
(1121, 'San Juan Juquila Vijanos', 20),
(1122, 'San Cristóbal Lachirioag', 20),
(1123, 'Santa María Temaxcalapa', 20),
(1124, 'Santo Domingo Roayaga', 20),
(1125, 'Santa María Yalina', 20),
(1126, 'San Andrés Solaga', 20),
(1127, 'San Juan Tabaá', 20),
(1128, 'San Melchor Betaza', 20),
(1129, 'San Andrés Yaá', 20),
(1130, 'San Bartolomé Zoogocho', 20),
(1131, 'San Baltazar Yatzachi el Bajo', 20),
(1132, 'Santiago Zoochila', 20),
(1133, 'Villa Hidalgo', 20),
(1134, 'San Francisco Cajonos', 20),
(1135, 'San Mateo Cajonos', 20),
(1136, 'San Pedro Cajonos', 20),
(1137, 'Santo Domingo Xagacía', 20),
(1138, 'San Pablo Yaganiza', 20),
(1139, 'Santiago Choápam', 20),
(1140, 'Santiago Jocotepec', 20),
(1141, 'San Juan Lalana', 20),
(1142, 'Santiago Yaveo', 20),
(1143, 'San Juan Petlapa', 20),
(1144, 'San Juan Comaltepec', 20),
(1145, 'Heroica Ciudad de Huajuapan de León', 20),
(1146, 'Santiago Chazumba', 20),
(1147, 'Cosoltepec', 20),
(1148, 'San Pedro y San Pablo Tequixtepec', 20),
(1149, 'San Juan Bautista Suchitepec', 20),
(1150, 'Santa Catarina Zapoquila', 20),
(1151, 'Santiago Miltepec', 20),
(1152, 'San Jerónimo Silacayoapilla', 20),
(1153, 'Zapotitlán Palmas', 20),
(1154, 'San Andrés Dinicuiti', 20),
(1155, 'Santiago Cacaloxtepec', 20),
(1156, 'Asunción Cuyotepeji', 20),
(1157, 'Santa María Camotlán', 20),
(1158, 'Santiago Huajolotitlán', 20),
(1159, 'Santiago Tamazola', 20),
(1160, 'San Juan Cieneguilla', 20),
(1161, 'Zapotitlán Lagunas', 20),
(1162, 'San Juan Ihualtepec', 20),
(1163, 'San Nicolás Hidalgo', 20),
(1164, 'Guadalupe de Ramírez', 20),
(1165, 'San Andrés Tepetlapa', 20),
(1166, 'San Miguel Ahuehuetitlán', 20),
(1167, 'San Mateo Nejápam', 20),
(1168, 'San Juan Bautista Tlachichilco', 20),
(1169, 'Tezoatlán de Segura y Luna', 20),
(1170, 'Fresnillo de Trujano', 20),
(1171, 'Santiago Ayuquililla', 20),
(1172, 'San José Ayuquila', 20),
(1173, 'San Martín Zacatepec', 20),
(1174, 'San Miguel Amatitlán', 20),
(1175, 'Mariscala de Juárez', 20),
(1176, 'Santa Cruz Tacache de Mina', 20),
(1177, 'San Simón Zahuatlán', 20),
(1178, 'San Marcos Arteaga', 20),
(1179, 'San Jorge Nuchita', 20),
(1180, 'Santos Reyes Yucuná', 20),
(1181, 'Santo Domingo Tonalá', 20),
(1182, 'Santo Domingo Yodohino', 20),
(1183, 'San Juan Bautista Coixtlahuaca', 20),
(1184, 'Tepelmeme Villa de Morelos', 20),
(1185, 'Concepción Buenavista', 20),
(1186, 'Santiago Ihuitlán Plumas', 20),
(1187, 'Tlacotepec Plumas', 20),
(1188, 'San Francisco Teopan', 20),
(1189, 'Santa Magdalena Jicotlán', 20),
(1190, 'San Mateo Tlapiltepec', 20),
(1191, 'San Miguel Tequixtepec', 20),
(1192, 'San Miguel Tulancingo', 20),
(1193, 'Santiago Tepetlapa', 20),
(1194, 'San Cristóbal Suchixtlahuaca', 20),
(1195, 'Santa María Nativitas', 20),
(1196, 'Silacayoápam', 20),
(1197, 'Santiago Yucuyachi', 20),
(1198, 'San Lorenzo Victoria', 20),
(1199, 'San Agustín Atenango', 20),
(1200, 'Calihualá', 20),
(1201, 'Santa Cruz de Bravo', 20),
(1202, 'Ixpantepec Nieves', 20),
(1203, 'San Francisco Tlapancingo', 20),
(1204, 'Santiago del Río', 20),
(1205, 'San Pedro y San Pablo Teposcolula', 20),
(1206, 'La Trinidad Vista Hermosa', 20),
(1207, 'Villa de Tamazulápam del Progreso', 20),
(1208, 'San Pedro Nopala', 20),
(1209, 'Teotongo', 20),
(1210, 'San Antonio Acutla', 20),
(1211, 'Villa Tejúpam de la Unión', 20),
(1212, 'Santo Domingo Tonaltepec', 20),
(1213, 'Villa de Chilapa de Díaz', 20),
(1214, 'San Antonino Monte Verde', 20),
(1215, 'San Andrés Lagunas', 20),
(1216, 'San Pedro Yucunama', 20),
(1217, 'San Juan Teposcolula', 20),
(1218, 'San Bartolo Soyaltepec', 20),
(1219, 'Santiago Yolomécatl', 20),
(1220, 'San Sebastián Nicananduta', 20),
(1221, 'Santo Domingo Tlatayápam', 20),
(1222, 'Santa María Nduayaco', 20),
(1223, 'San Vicente Nuñú', 20),
(1224, 'San Pedro Topiltepec', 20),
(1225, 'Santiago Nejapilla', 20),
(1226, 'Asunción Nochixtlán', 20),
(1227, 'San Miguel Huautla', 20),
(1228, 'San Miguel Chicahua', 20),
(1229, 'Santa María Apazco', 20),
(1230, 'Santiago Apoala', 20),
(1231, 'Santa María Chachoápam', 20),
(1232, 'San Pedro Coxcaltepec Cántaros', 20),
(1233, 'Santiago Huauclilla', 20),
(1234, 'Santo Domingo Yanhuitlán', 20),
(1235, 'San Andrés Sinaxtla', 20),
(1236, 'San Juan Yucuita', 20),
(1237, 'San Juan Sayultepec', 20),
(1238, 'Santiago Tillo', 20),
(1239, 'San Francisco Chindúa', 20),
(1240, 'San Mateo Etlatongo', 20),
(1241, 'Santa Inés de Zaragoza', 20),
(1242, 'Santiago Juxtlahuaca', 20),
(1243, 'San Miguel Tlacotepec', 20),
(1244, 'San Sebastián Tecomaxtlahuaca', 20),
(1245, 'Santos Reyes Tepejillo', 20),
(1246, 'San Juan Mixtepec -Dto. 08 -', 20),
(1247, 'San Martín Peras', 20),
(1248, 'Coicoyán de las Flores', 20),
(1249, 'Heroica Ciudad de Tlaxiaco', 20),
(1250, 'San Juan Ñumí', 20),
(1251, 'San Pedro Mártir Yucuxaco', 20),
(1252, 'San Martín Huamelúlpam', 20),
(1253, 'Santa Cruz Tayata', 20),
(1254, 'Santiago Nundiche', 20),
(1255, 'Santa María del Rosario', 20),
(1256, 'San Juan Achiutla', 20),
(1257, 'Santa Catarina Tayata', 20),
(1258, 'San Cristóbal Amoltepec', 20),
(1259, 'San Miguel Achiutla', 20),
(1260, 'San Martín Itunyoso', 20),
(1261, 'Magdalena Peñasco', 20),
(1262, 'San Bartolomé Yucuañe', 20),
(1263, 'Santa Cruz Nundaco', 20),
(1264, 'San Agustín Tlacotepec', 20),
(1265, 'Santo Tomás Ocotepec', 20),
(1266, 'San Antonio Sinicahua', 20),
(1267, 'San Mateo Peñasco', 20),
(1268, 'Santa María Tataltepec', 20),
(1269, 'San Pedro Molinos', 20),
(1270, 'Santa María Yosoyúa', 20),
(1271, 'San Juan Teita', 20),
(1272, 'Magdalena Jaltepec', 20),
(1273, 'Magdalena Yodocono de Porfirio Díaz', 20),
(1274, 'San Miguel Tecomatlán', 20),
(1275, 'Magdalena Zahuatlán', 20),
(1276, 'San Francisco Nuxaño', 20),
(1277, 'San Pedro Tidaá', 20),
(1278, 'San Francisco Jaltepetongo', 20),
(1279, 'Santiago Tilantongo', 20),
(1280, 'San Juan Diuxi', 20),
(1281, 'San Andrés Nuxiño', 20),
(1282, 'San Juan Tamazola', 20),
(1283, 'Santo Domingo Nuxaá', 20),
(1284, 'Yutanduchi de Guerrero', 20),
(1285, 'San Pedro Teozacoalco', 20),
(1286, 'San Miguel Piedras', 20),
(1287, 'San Mateo Sindihui', 20),
(1288, 'Heroica Ciudad de Juchitán de Zaragoza', 20),
(1289, 'Ciudad Ixtepec', 20),
(1290, 'El Espinal', 20),
(1291, 'Santo Domingo Ingenio', 20),
(1292, 'Santa María Xadani', 20),
(1293, 'Santiago Niltepec', 20),
(1294, 'San Dionisio del Mar', 20),
(1295, 'Asunción Ixtaltepec', 20),
(1296, 'San Francisco del Mar', 20),
(1297, 'Unión Hidalgo', 20),
(1298, 'San Miguel Chimalapa', 20),
(1299, 'Santo Domingo Zanatepec', 20),
(1300, 'Reforma de Pineda', 20),
(1301, 'San Francisco Ixhuatán', 20),
(1302, 'San Pedro Tapanatepec', 20),
(1303, 'Chahuites', 20),
(1304, 'Santiago Zacatepec', 20),
(1305, 'Santo Domingo Tepuxtepec', 20),
(1306, 'San Juan Cotzocón', 20),
(1307, 'San Juan Mazatlán', 20),
(1308, 'Totontepec Villa de Morelos', 20),
(1309, 'Mixistlán de la Reforma', 20),
(1310, 'Santa María Tlahuitoltepec', 20),
(1311, 'Santa María Alotepec', 20),
(1312, 'Santiago Atitlán', 20),
(1313, 'Tamazulápam del Espíritu Santo', 20),
(1314, 'San Pedro y San Pablo Ayutla', 20),
(1315, 'Santa María Tepantlali', 20),
(1316, 'San Miguel Quetzaltepec', 20),
(1317, 'Asunción Cacalotepec', 20),
(1318, 'San Pedro Ocotepec', 20),
(1319, 'San Lucas Camotlán', 20),
(1320, 'Santiago Ixcuintepec', 20),
(1321, 'Matías Romero Avendaño', 20),
(1322, 'San Juan Guichicovi', 20),
(1323, 'Santo Domingo Petapa', 20),
(1324, 'Santa María Chimalapa', 20),
(1325, 'Santa María Petapa', 20),
(1326, 'El Barrio de la Soledad', 20),
(1327, 'Tlacolula de Matamoros', 20),
(1328, 'San Sebastián Abasolo', 20),
(1329, 'Villa Díaz Ordaz', 20),
(1330, 'Santa María Guelacé', 20),
(1331, 'Teotitlán del Valle', 20),
(1332, 'San Francisco Lachigoló', 20),
(1333, 'San Sebastián Teitipac', 20),
(1334, 'Santa Ana del Valle', 20),
(1335, 'San Pablo Villa de Mitla', 20),
(1336, 'Santiago Matatlán', 20),
(1337, 'Santo Domingo Albarradas', 20),
(1338, 'Rojas de Cuauhtémoc', 20),
(1339, 'San Juan Teitipac', 20),
(1340, 'Santa Cruz Papalutla', 20),
(1341, 'Magdalena Teitipac', 20),
(1342, 'San Jerónimo Tlacochahuaya', 20),
(1343, 'San Juan Guelavía', 20),
(1344, 'San Lucas Quiaviní', 20),
(1345, 'San Juan del Río', 20),
(1346, 'San Bartolomé Quialana', 20),
(1347, 'San Lorenzo Albarradas', 20),
(1348, 'San Pedro Totolápam', 20),
(1349, 'San Pedro Quiatoni', 20),
(1350, 'Santa María Zoquitlán', 20),
(1351, 'San Dionisio Ocotepec', 20),
(1352, 'San Carlos Yautepec', 20),
(1353, 'San Juan Juquila Mixes', 20),
(1354, 'Nejapa de Madero', 20),
(1355, 'Santa Ana Tavela', 20),
(1356, 'San Juan Lajarcia', 20),
(1357, 'San Bartolo Yautepec', 20),
(1358, 'Santa María Ecatepec', 20),
(1359, 'Asunción Tlacolulita', 20),
(1360, 'San Pedro Mártir Quiechapa', 20),
(1361, 'Santa María Quiegolani', 20),
(1362, 'Santa Catarina Quioquitani', 20),
(1363, 'Santa Catalina Quierí', 20),
(1364, 'Salina Cruz', 20),
(1365, 'Santiago Lachiguiri', 20),
(1366, 'Santa María Jalapa del Marqués', 20),
(1367, 'Santa María Totolapilla', 20),
(1368, 'Santiago Laollaga', 20),
(1369, 'Guevea de Humboldt', 20),
(1370, 'Santo Domingo Chihuitán', 20),
(1371, 'Santa María Guienagati', 20),
(1372, 'Magdalena Tequisistlán', 20),
(1373, 'Magdalena Tlacotepec', 20),
(1374, 'San Pedro Comitancillo', 20),
(1375, 'Santa María Mixtequilla', 20),
(1376, 'Santo Domingo Tehuantepec', 20),
(1377, 'San Pedro Huamelula', 20),
(1378, 'San Pedro Huilotepec', 20),
(1379, 'San Mateo del Mar', 20),
(1380, 'San Blas Atempa', 20),
(1381, 'Santiago Astata', 20),
(1382, 'San Miguel Tenango', 20),
(1383, 'Miahuatlán de Porfirio Díaz', 20),
(1384, 'San Nicolás', 20),
(1385, 'San Simón Almolongas', 20),
(1386, 'San Luis Amatlán', 20),
(1387, 'San José Lachiguiri', 20),
(1388, 'Sitio de Xitlapehua', 20),
(1389, 'San Francisco Logueche', 20),
(1390, 'Santa Ana', 20),
(1391, 'Santa Cruz Xitla', 20),
(1392, 'Monjas', 20),
(1393, 'San Ildefonso Amatlán', 20),
(1394, 'Santa Catarina Cuixtla', 20),
(1395, 'San José del Peñasco', 20),
(1396, 'San Cristóbal Amatlán', 20),
(1397, 'San Juan Mixtepec -Dto. 26 -', 20),
(1398, 'San Pedro Mixtepec -Dto. 26 -', 20),
(1399, 'Santa Lucía Miahuatlán', 20),
(1400, 'San Jerónimo Coatlán', 20),
(1401, 'San Sebastián Coatlán', 20),
(1402, 'San Pablo Coatlán', 20),
(1403, 'San Mateo Río Hondo', 20),
(1404, 'Santo Tomás Tamazulapan', 20),
(1405, 'San Andrés Paxtlán', 20),
(1406, 'Santa María Ozolotepec', 20),
(1407, 'San Miguel Coatlán', 20),
(1408, 'San Sebastián Río Hondo', 20),
(1409, 'San Miguel Suchixtepec', 20),
(1410, 'Santo Domingo Ozolotepec', 20),
(1411, 'San Francisco Ozolotepec', 20),
(1412, 'Santiago Xanica', 20),
(1413, 'San Marcial Ozolotepec', 20),
(1414, 'San Juan Ozolotepec', 20),
(1415, 'San Pedro Pochutla', 20),
(1416, 'Santo Domingo de Morelos', 20),
(1417, 'Santa Catarina Loxicha', 20),
(1418, 'San Agustín Loxicha', 20),
(1419, 'San Baltazar Loxicha', 20),
(1420, 'Santa María Colotepec', 20),
(1421, 'San Bartolomé Loxicha', 20),
(1422, 'Santa María Tonameca', 20),
(1423, 'Candelaria Loxicha', 20),
(1424, 'Pluma Hidalgo', 20),
(1425, 'San Pedro el Alto', 20),
(1426, 'San Mateo Piñas', 20),
(1427, 'Santa María Huatulco', 20),
(1428, 'San Miguel del Puerto', 20),
(1429, 'Putla Villa de Guerrero', 20),
(1430, 'Constancia del Rosario', 20),
(1431, 'Mesones Hidalgo', 20),
(1432, 'Santa María Zacatepec', 20),
(1433, 'San Pedro Amuzgos', 20),
(1434, 'La Reforma', 20),
(1435, 'Santa María Ipalapa', 20),
(1436, 'Chalcatongo de Hidalgo', 20),
(1437, 'Santa María Yucuhiti', 20),
(1438, 'San Esteban Atatlahuca', 20),
(1439, 'Santa Catarina Ticuá', 20),
(1440, 'Santiago Nuyoó', 20),
(1441, 'Santa Catarina Yosonotú', 20),
(1442, 'San Miguel el Grande', 20),
(1443, 'Santo Domingo Ixcatlán', 20),
(1444, 'San Pablo Tijaltepec', 20),
(1445, 'Santa Cruz Tacahua', 20),
(1446, 'Santa Lucía Monteverde', 20),
(1447, 'San Andrés Cabecera Nueva', 20),
(1448, 'Santa María Yolotepec', 20),
(1449, 'Santiago Yosondúa', 20),
(1450, 'Santa Cruz Itundujia', 20),
(1451, 'Zimatlán de Álvarez', 20),
(1452, 'San Bernardo Mixtepec', 20),
(1453, 'Santa Cruz Mixtepec', 20),
(1454, 'San Miguel Mixtepec', 20),
(1455, 'Santa María Atzompa', 20),
(1456, 'San Andrés Ixtlahuaca', 20),
(1457, 'Santa Cruz Amilpas', 20),
(1458, 'Santa Cruz Xoxocotlán', 20),
(1459, 'Santa Lucía del Camino', 20),
(1460, 'San Pedro Ixtlahuaca', 20),
(1461, 'San Antonio de la Cal', 20),
(1462, 'San Agustín de las Juntas', 20),
(1463, 'San Pablo Huixtepec', 20),
(1464, 'Ánimas Trujano', 20),
(1465, 'San Jacinto Tlacotepec', 20),
(1466, 'San Raymundo Jalpan', 20),
(1467, 'Trinidad Zaachila', 20),
(1468, 'Santa María Coyotepec', 20),
(1469, 'San Bartolo Coyotepec', 20),
(1470, 'Santa Inés Yatzeche', 20),
(1471, 'Ciénega de Zimatlán', 20),
(1472, 'San Antonio Huitepec', 20),
(1473, 'Villa de Zaachila', 20),
(1474, 'San Sebastián Tutla', 20),
(1475, 'San Miguel Peras', 20),
(1476, 'San Pablo Cuatro Venados', 20),
(1477, 'Santa Inés del Monte', 20),
(1478, 'Santa Gertrudis', 20),
(1479, 'San Antonino el Alto', 20),
(1480, 'Magdalena Mixtepec', 20),
(1481, 'Santa Catarina Quiané', 20),
(1482, 'Ayoquezco de Aldama', 20),
(1483, 'Santa Ana Tlapacoyan', 20),
(1484, 'Santa Cruz Zenzontepec', 20),
(1485, 'San Francisco Cahuacuá', 20),
(1486, 'San Mateo Yucutindoo', 20),
(1487, 'Santiago Textitlán', 20),
(1488, 'Santiago Amoltepec', 20),
(1489, 'Santa María Zaniza', 20),
(1490, 'Santo Domingo Teojomulco', 20),
(1491, 'Cuilápam de Guerrero', 20),
(1492, 'Villa Sola de Vega', 20),
(1493, 'Santa María Lachixío', 20),
(1494, 'San Vicente Lachixío', 20),
(1495, 'San Lorenzo Texmelúcan', 20),
(1496, 'Santa María Sola', 20),
(1497, 'San Francisco Sola', 20),
(1498, 'San Ildefonso Sola', 20),
(1499, 'Santiago Minas', 20),
(1500, 'Heroica Ciudad de Ejutla de Crespo', 20),
(1501, 'San Martín Tilcajete', 20),
(1502, 'Santo Tomás Jalieza', 20),
(1503, 'San Juan Chilateca', 20),
(1504, 'Ocotlán de Morelos', 20),
(1505, 'Santa Ana Zegache', 20),
(1506, 'Santiago Apóstol', 20),
(1507, 'San Antonino Castillo Velasco', 20),
(1508, 'Asunción Ocotlán', 20),
(1509, 'San Pedro Mártir', 20),
(1510, 'San Dionisio Ocotlán', 20),
(1511, 'Magdalena Ocotlán', 20),
(1512, 'San Miguel Tilquiápam', 20),
(1513, 'Santa Catarina Minas', 20),
(1514, 'San Baltazar Chichicápam', 20),
(1515, 'San Pedro Apóstol', 20),
(1516, 'Santa Lucía Ocotlán', 20),
(1517, 'San Jerónimo Taviche', 20),
(1518, 'San Andrés Zabache', 20),
(1519, 'San José del Progreso', 20),
(1520, 'Yaxe', 20),
(1521, 'San Pedro Taviche', 20),
(1522, 'San Martín de los Cansecos', 20),
(1523, 'San Martín Lachilá', 20),
(1524, 'La Pe', 20),
(1525, 'La Compañía', 20),
(1526, 'Coatecas Altas', 20),
(1527, 'San Juan Lachigalla', 20),
(1528, 'San Agustín Amatengo', 20),
(1529, 'Taniche', 20),
(1530, 'San Miguel Ejutla', 20),
(1531, 'Yogana', 20),
(1532, 'San Vicente Coatlán', 20),
(1533, 'Santiago Pinotepa Nacional', 20),
(1534, 'San Juan Cacahuatepec', 20),
(1535, 'San Juan Bautista Lo de Soto', 20),
(1536, 'Mártires de Tacubaya', 20),
(1537, 'San Sebastián Ixcapa', 20),
(1538, 'San Antonio Tepetlapa', 20),
(1539, 'Santa María Cortijo', 20),
(1540, 'Santiago Llano Grande', 20),
(1541, 'San Miguel Tlacamama', 20),
(1542, 'Santiago Tapextla', 20),
(1543, 'San José Estancia Grande', 20),
(1544, 'Santo Domingo Armenta', 20),
(1545, 'Santiago Jamiltepec', 20),
(1546, 'San Pedro Atoyac', 20),
(1547, 'San Juan Colorado', 20),
(1548, 'Santiago Ixtayutla', 20),
(1549, 'San Pedro Jicayán', 20),
(1550, 'Pinotepa de Don Luis', 20),
(1551, 'San Lorenzo', 20),
(1552, 'San Agustín Chayuco', 20),
(1553, 'San Andrés Huaxpaltepec', 20),
(1554, 'Santa Catarina Mechoacán', 20),
(1555, 'Santiago Tetepec', 20),
(1556, 'Santa María Huazolotitlán', 20),
(1557, 'Villa de Tututepec de Melchor Ocampo', 20),
(1558, 'Tataltepec de Valdés', 20),
(1559, 'San Juan Quiahije', 20),
(1560, 'San Miguel Panixtlahuaca', 20),
(1561, 'Santa Catarina Juquila', 20),
(1562, 'San Pedro Juchatengo', 20),
(1563, 'Santiago Yaitepec', 20),
(1564, 'San Juan Lachao', 20),
(1565, 'Santa María Temaxcaltepec', 20),
(1566, 'Santos Reyes Nopala', 20),
(1567, 'San Gabriel Mixtepec', 20),
(1568, 'San Pedro Mixtepec -Dto. 22 -', 20),
(1569, 'Puebla', 21),
(1570, 'Tlaltenango', 21),
(1571, 'San Miguel Xoxtla', 21),
(1572, 'Juan C. Bonilla', 21),
(1573, 'Coronango', 21),
(1574, 'Cuautlancingo', 21),
(1575, 'San Pedro Cholula', 21),
(1576, 'San Andrés Cholula', 21),
(1577, 'Ocoyucan', 21),
(1578, 'Amozoc', 21),
(1579, 'Francisco Z. Mena', 21),
(1580, 'Pantepec', 21),
(1581, 'Venustiano Carranza', 21),
(1582, 'Jalpan', 21),
(1583, 'Tlaxco', 21),
(1584, 'Tlacuilotepec', 21),
(1585, 'Xicotepec', 21),
(1586, 'Pahuatlán', 21),
(1587, 'Honey', 21),
(1588, 'Naupan', 21),
(1589, 'Huauchinango', 21),
(1590, 'Ahuazotepec', 21),
(1591, 'Juan Galindo', 21),
(1592, 'Tlaola', 21),
(1593, 'Zihuateutla', 21),
(1594, 'Jopala', 21),
(1595, 'Tlapacoya', 21),
(1596, 'Chignahuapan', 21),
(1597, 'Zacatlán', 21),
(1598, 'Chiconcuautla', 21),
(1599, 'Ahuacatlán', 21),
(1600, 'Tepetzintla', 21),
(1601, 'San Felipe Tepatlán', 21),
(1602, 'Amixtlán', 21),
(1603, 'Tepango de Rodríguez', 21),
(1604, 'Zongozotla', 21),
(1605, 'Hermenegildo Galeana', 21),
(1606, 'Olintla', 21),
(1607, 'Coatepec', 21),
(1608, 'Camocuautla', 21),
(1609, 'Hueytlalpan', 21),
(1610, 'Zapotitlán de Méndez', 21),
(1611, 'Huitzilan de Serdán', 21),
(1612, 'Xochitlán de Vicente Suárez', 21),
(1613, 'Huehuetla', 21),
(1614, 'Ixtepec', 21),
(1615, 'Atlequizayan', 21),
(1616, 'Tenampulco', 21),
(1617, 'Tuzamapan de Galeana', 21),
(1618, 'Caxhuacan', 21),
(1619, 'Jonotla', 21),
(1620, 'Zoquiapan', 21),
(1621, 'Nauzontla', 21),
(1622, 'Cuetzalan del Progreso', 21),
(1623, 'Ayotoxco de Guerrero', 21),
(1624, 'Hueytamalco', 21),
(1625, 'Acateno', 21),
(1626, 'Cuautempan', 21),
(1627, 'Aquixtla', 21),
(1628, 'Tetela de Ocampo', 21),
(1629, 'Xochiapulco', 21),
(1630, 'Zacapoaxtla', 21),
(1631, 'Zaragoza', 21),
(1632, 'Ixtacamaxtitlán', 21),
(1633, 'Zautla', 21),
(1634, 'Ocotepec', 21),
(1635, 'Libres', 21),
(1636, 'Teziutlán', 21),
(1637, 'Tlatlauquitepec', 21),
(1638, 'Yaonáhuac', 21),
(1639, 'Hueyapan', 21),
(1640, 'Teteles de Avila Castillo', 21),
(1641, 'Atempan', 21),
(1642, 'Chignautla', 21),
(1643, 'Xiutetelco', 21),
(1644, 'Cuyoaco', 21),
(1645, 'Tepeyahualco', 21),
(1646, 'San Martín Texmelucan', 21),
(1647, 'Tlahuapan', 21),
(1648, 'San Matías Tlalancaleca', 21),
(1649, 'San Salvador el Verde', 21),
(1650, 'San Felipe Teotlalcingo', 21),
(1651, 'Chiautzingo', 21),
(1652, 'Huejotzingo', 21),
(1653, 'Domingo Arenas', 21),
(1654, 'Calpan', 21),
(1655, 'San Nicolás de los Ranchos', 21),
(1656, 'Atlixco', 21),
(1657, 'Nealtican', 21),
(1658, 'San Jerónimo Tecuanipan', 21),
(1659, 'San Gregorio Atzompa', 21),
(1660, 'Tochimilco', 21),
(1661, 'Tianguismanalco', 21),
(1662, 'Santa Isabel Cholula', 21),
(1663, 'Huaquechula', 21),
(1664, 'San Diego la Mesa Tochimiltzingo', 21),
(1665, 'Tepeojuma', 21),
(1666, 'Izúcar de Matamoros', 21),
(1667, 'Atzitzihuacán', 21),
(1668, 'Acteopan', 21),
(1669, 'Cohuecan', 21),
(1670, 'Tepemaxalco', 21),
(1671, 'Tlapanalá', 21),
(1672, 'Tepexco', 21),
(1673, 'Tilapa', 21),
(1674, 'Chietla', 21),
(1675, 'Atzala', 21),
(1676, 'Teopantlán', 21),
(1677, 'San Martín Totoltepec', 21),
(1678, 'Xochiltepec', 21),
(1679, 'Epatlán', 21),
(1680, 'Ahuatlán', 21),
(1681, 'Coatzingo', 21),
(1682, 'Santa Catarina Tlaltempan', 21),
(1683, 'Chigmecatitlán', 21),
(1684, 'Zacapala', 21),
(1685, 'Tepexi de Rodríguez', 21),
(1686, 'Teotlalco', 21),
(1687, 'Jolalpan', 21),
(1688, 'Huehuetlán el Chico', 21),
(1689, 'Chiautla', 21),
(1690, 'Cohetzala', 21),
(1691, 'Xicotlán', 21),
(1692, 'Chila de la Sal', 21),
(1693, 'Ixcamilpa de Guerrero', 21),
(1694, 'Albino Zertuche', 21),
(1695, 'Tulcingo', 21),
(1696, 'Tehuitzingo', 21),
(1697, 'Cuayuca de Andrade', 21),
(1698, 'Santa Inés Ahuatempan', 21),
(1699, 'Axutla', 21),
(1700, 'Chinantla', 21),
(1701, 'Ahuehuetitla', 21),
(1702, 'San Pablo Anicano', 21),
(1703, 'Tecomatlán', 21),
(1704, 'Piaxtla', 21),
(1705, 'Guadalupe', 21),
(1706, 'Ixcaquixtla', 21),
(1707, 'Coyotepec', 21),
(1708, 'Xayacatlán de Bravo', 21),
(1709, 'Totoltepec de Guerrero', 21),
(1710, 'Acatlán', 21),
(1711, 'San Jerónimo Xayacatlán', 21),
(1712, 'San Pedro Yeloixtlahuaca', 21),
(1713, 'Petlalcingo', 21),
(1714, 'San Miguel Ixitlán', 21),
(1715, 'Chila', 21),
(1716, 'Rafael Lara Grajales', 21),
(1717, 'San José Chiapa', 21),
(1718, 'Oriental', 21),
(1719, 'San Nicolás Buenos Aires', 21),
(1720, 'Guadalupe Victoria', 21),
(1721, 'Tlachichuca', 21),
(1722, 'Lafragua', 21),
(1723, 'Chilchotla', 21),
(1724, 'Quimixtlán', 21),
(1725, 'Chichiquila', 21),
(1726, 'Tepatlaxco de Hidalgo', 21),
(1727, 'Acajete', 21),
(1728, 'Nopalucan', 21),
(1729, 'Mazapiltepec de Juárez', 21),
(1730, 'Soltepec', 21),
(1731, 'Acatzingo', 21),
(1732, 'San Salvador el Seco', 21),
(1733, 'General Felipe Ángeles', 21),
(1734, 'Aljojuca', 21),
(1735, 'San Juan Atenco', 21),
(1736, 'Tepeaca', 21),
(1737, 'Cuautinchán', 21),
(1738, 'Tecali de Herrera', 21),
(1739, 'Mixtla', 21),
(1740, 'Santo Tomás Hueyotlipan', 21),
(1741, 'Tzicatlacoyan', 21),
(1742, 'Huehuetlán el Grande', 21),
(1743, 'La Magdalena Tlatlauquitepec', 21),
(1744, 'San Juan Atzompa', 21),
(1745, 'Huatlatlauca', 21),
(1746, 'Los Reyes de Juárez', 21),
(1747, 'Cuapiaxtla de Madero', 21),
(1748, 'San Salvador Huixcolotla', 21),
(1749, 'Quecholac', 21),
(1750, 'Tecamachalco', 21),
(1751, 'Palmar de Bravo', 21),
(1752, 'Chalchicomula de Sesma', 21),
(1753, 'Atzitzintla', 21),
(1754, 'Esperanza', 21),
(1755, 'Cañada Morelos', 21),
(1756, 'Tlanepantla', 21),
(1757, 'Tochtepec', 21),
(1758, 'Atoyatempan', 21),
(1759, 'Tepeyahualco de Cuauhtémoc', 21),
(1760, 'Huitziltepec', 21),
(1761, 'Molcaxac', 21),
(1762, 'Xochitlán Todos Santos', 21),
(1763, 'Yehualtepec', 21),
(1764, 'Tlacotepec de Benito Juárez', 21),
(1765, 'Juan N. Méndez', 21),
(1766, 'Tehuacán', 21),
(1767, 'Tepanco de López', 21),
(1768, 'Chapulco', 21),
(1769, 'Santiago Miahuatlán', 21),
(1770, 'Nicolás Bravo', 21),
(1771, 'Atexcal', 21),
(1772, 'San Antonio Cañada', 21),
(1773, 'Zapotitlán', 21),
(1774, 'San Gabriel Chilac', 21),
(1775, 'Caltepec', 21),
(1776, 'Vicente Guerrero', 21),
(1777, 'Ajalpan', 21),
(1778, 'Eloxochitlán', 21),
(1779, 'Zoquitlán', 21),
(1780, 'San Sebastián Tlacotepec', 21),
(1781, 'Altepexi', 21),
(1782, 'Zinacatepec', 21),
(1783, 'San José Miahuatlán', 21),
(1784, 'Coxcatlán', 21),
(1785, 'Coyomeapan', 21),
(1786, 'Querétaro', 22),
(1787, 'El Marqués', 22),
(1788, 'Colón', 22),
(1789, 'Pinal de Amoles', 22),
(1790, 'Jalpan de Serra', 22),
(1791, 'Landa de Matamoros', 22),
(1792, 'Arroyo Seco', 22),
(1793, 'Peñamiller', 22),
(1794, 'Cadereyta de Montes', 22),
(1795, 'San Joaquín', 22),
(1796, 'Tolimán', 22),
(1797, 'Ezequiel Montes', 22),
(1798, 'Pedro Escobedo', 22),
(1799, 'Tequisquiapan', 22),
(1800, 'San Juan del Río', 22),
(1801, 'Amealco de Bonfil', 22),
(1802, 'Corregidora', 22),
(1803, 'Huimilpan', 22),
(1804, 'Othón P. Blanco', 23),
(1805, 'Felipe Carrillo Puerto', 23),
(1806, 'Lázaro Cárdenas', 23),
(1807, 'Isla Mujeres', 23),
(1808, 'Benito Juárez', 23),
(1809, 'Cozumel', 23);
INSERT INTO `municipio` (`idMunicipio`, `nombre`, `idEstado`) VALUES
(1810, 'Solidaridad', 23),
(1811, 'Tulum', 23),
(1812, 'José María Morelos', 23),
(1813, 'Bacalar', 23),
(1814, 'San Luis Potosí', 24),
(1815, 'Soledad de Graciano Sánchez', 24),
(1816, 'Cerro de San Pedro', 24),
(1817, 'Ahualulco', 24),
(1818, 'Mexquitic de Carmona', 24),
(1819, 'Villa de Arriaga', 24),
(1820, 'Vanegas', 24),
(1821, 'Cedral', 24),
(1822, 'Catorce', 24),
(1823, 'Charcas', 24),
(1824, 'Salinas', 24),
(1825, 'Santo Domingo', 24),
(1826, 'Villa de Ramos', 24),
(1827, 'Matehuala', 24),
(1828, 'Villa de la Paz', 24),
(1829, 'Villa de Guadalupe', 24),
(1830, 'Guadalcázar', 24),
(1831, 'Moctezuma', 24),
(1832, 'Venado', 24),
(1833, 'Villa de Arista', 24),
(1834, 'Villa Hidalgo', 24),
(1835, 'Armadillo de los Infante', 24),
(1836, 'Ciudad Valles', 24),
(1837, 'Ebano', 24),
(1838, 'Tamuín', 24),
(1839, 'El Naranjo', 24),
(1840, 'Ciudad del Maíz', 24),
(1841, 'Alaquines', 24),
(1842, 'Cárdenas', 24),
(1843, 'Cerritos', 24),
(1844, 'Villa Juárez', 24),
(1845, 'San Nicolás Tolentino', 24),
(1846, 'Villa de Reyes', 24),
(1847, 'Zaragoza', 24),
(1848, 'Santa María del Río', 24),
(1849, 'Tierra Nueva', 24),
(1850, 'Rioverde', 24),
(1851, 'Ciudad Fernández', 24),
(1852, 'San Ciro de Acosta', 24),
(1853, 'Tamasopo', 24),
(1854, 'Rayón', 24),
(1855, 'Aquismón', 24),
(1856, 'Lagunillas', 24),
(1857, 'Santa Catarina', 24),
(1858, 'Tancanhuitz', 24),
(1859, 'Tanlajás', 24),
(1860, 'San Vicente Tancuayalab', 24),
(1861, 'San Antonio', 24),
(1862, 'Tanquián de Escobedo', 24),
(1863, 'Tampamolón Corona', 24),
(1864, 'Coxcatlán', 24),
(1865, 'Huehuetlán', 24),
(1866, 'Xilitla', 24),
(1867, 'Axtla de Terrazas', 24),
(1868, 'Tampacán', 24),
(1869, 'San Martín Chalchicuautla', 24),
(1870, 'Tamazunchale', 24),
(1871, 'Matlapa', 24),
(1872, 'Culiacán', 25),
(1873, 'Navolato', 25),
(1874, 'Badiraguato', 25),
(1875, 'Cosalá', 25),
(1876, 'Mocorito', 25),
(1877, 'Guasave', 25),
(1878, 'Ahome', 25),
(1879, 'Salvador Alvarado', 25),
(1880, 'Angostura', 25),
(1881, 'Choix', 25),
(1882, 'El Fuerte', 25),
(1883, 'Sinaloa', 25),
(1884, 'Mazatlán', 25),
(1885, 'Escuinapa', 25),
(1886, 'Concordia', 25),
(1887, 'Elota', 25),
(1888, 'Rosario', 25),
(1889, 'San Ignacio', 25),
(1890, 'Hermosillo', 26),
(1891, 'San Miguel de Horcasitas', 26),
(1892, 'Carbó', 26),
(1893, 'San Luis Río Colorado', 26),
(1894, 'Puerto Peñasco', 26),
(1895, 'General Plutarco Elías Calles', 26),
(1896, 'Caborca', 26),
(1897, 'Altar', 26),
(1898, 'Tubutama', 26),
(1899, 'Atil', 26),
(1900, 'Oquitoa', 26),
(1901, 'Sáric', 26),
(1902, 'Benjamín Hill', 26),
(1903, 'Trincheras', 26),
(1904, 'Pitiquito', 26),
(1905, 'Nogales', 26),
(1906, 'Imuris', 26),
(1907, 'Santa Cruz', 26),
(1908, 'Magdalena', 26),
(1909, 'Naco', 26),
(1910, 'Agua Prieta', 26),
(1911, 'Fronteras', 26),
(1912, 'Nacozari de García', 26),
(1913, 'Bavispe', 26),
(1914, 'Bacerac', 26),
(1915, 'Huachinera', 26),
(1916, 'Nácori Chico', 26),
(1917, 'Granados', 26),
(1918, 'Bacadéhuachi', 26),
(1919, 'Cumpas', 26),
(1920, 'Huásabas', 26),
(1921, 'Moctezuma', 26),
(1922, 'Villa Hidalgo', 26),
(1923, 'Santa Ana', 26),
(1924, 'Cananea', 26),
(1925, 'Arizpe', 26),
(1926, 'Cucurpe', 26),
(1927, 'Bacoachi', 26),
(1928, 'San Pedro de la Cueva', 26),
(1929, 'Divisaderos', 26),
(1930, 'Tepache', 26),
(1931, 'Villa Pesqueira', 26),
(1932, 'Opodepe', 26),
(1933, 'Huépac', 26),
(1934, 'Banámichi', 26),
(1935, 'Ures', 26),
(1936, 'Aconchi', 26),
(1937, 'Baviácora', 26),
(1938, 'San Felipe de Jesús', 26),
(1939, 'Rayón', 26),
(1940, 'Cajeme', 26),
(1941, 'Navojoa', 26),
(1942, 'Huatabampo', 26),
(1943, 'Bácum', 26),
(1944, 'Etchojoa', 26),
(1945, 'Benito Juárez', 26),
(1946, 'Empalme', 26),
(1947, 'Guaymas', 26),
(1948, 'San Ignacio Río Muerto', 26),
(1949, 'La Colorada', 26),
(1950, 'Mazatán', 26),
(1951, 'Suaqui Grande', 26),
(1952, 'Sahuaripa', 26),
(1953, 'San Javier', 26),
(1954, 'Soyopa', 26),
(1955, 'Bacanora', 26),
(1956, 'Arivechi', 26),
(1957, 'Rosario', 26),
(1958, 'Quiriego', 26),
(1959, 'Onavas', 26),
(1960, 'Alamos', 26),
(1961, 'Yécora', 26),
(1962, 'Centro', 27),
(1963, 'Jalpa de Méndez', 27),
(1964, 'Nacajuca', 27),
(1965, 'Comalcalco', 27),
(1966, 'Huimanguillo', 27),
(1967, 'Cárdenas', 27),
(1968, 'Paraíso', 27),
(1969, 'Cunduacán', 27),
(1970, 'Macuspana', 27),
(1971, 'Centla', 27),
(1972, 'Jonuta', 27),
(1973, 'Teapa', 27),
(1974, 'Jalapa', 27),
(1975, 'Tacotalpa', 27),
(1976, 'Tenosique', 27),
(1977, 'Balancán', 27),
(1978, 'Emiliano Zapata', 27),
(1979, 'Victoria', 28),
(1980, 'Llera', 28),
(1981, 'Güémez', 28),
(1982, 'Casas', 28),
(1983, 'Matamoros', 28),
(1984, 'Valle Hermoso', 28),
(1985, 'San Fernando', 28),
(1986, 'Cruillas', 28),
(1987, 'San Nicolás', 28),
(1988, 'Soto la Marina', 28),
(1989, 'Jiménez', 28),
(1990, 'San Carlos', 28),
(1991, 'Abasolo', 28),
(1992, 'Padilla', 28),
(1993, 'Hidalgo', 28),
(1994, 'Mainero', 28),
(1995, 'Villagrán', 28),
(1996, 'Tula', 28),
(1997, 'Jaumave', 28),
(1998, 'Miquihuana', 28),
(1999, 'Bustamante', 28),
(2000, 'Palmillas', 28),
(2001, 'Ocampo', 28),
(2002, 'Nuevo Laredo', 28),
(2003, 'Miguel Alemán', 28),
(2004, 'Guerrero', 28),
(2005, 'Mier', 28),
(2006, 'Gustavo Díaz Ordaz', 28),
(2007, 'Camargo', 28),
(2008, 'Reynosa', 28),
(2009, 'Río Bravo', 28),
(2010, 'Méndez', 28),
(2011, 'Burgos', 28),
(2012, 'Tampico', 28),
(2013, 'Ciudad Madero', 28),
(2014, 'Altamira', 28),
(2015, 'Aldama', 28),
(2016, 'González', 28),
(2017, 'Xicoténcatl', 28),
(2018, 'Gómez Farías', 28),
(2019, 'El Mante', 28),
(2020, 'Antiguo Morelos', 28),
(2021, 'Nuevo Morelos', 28),
(2022, 'Tlaxcala', 29),
(2023, 'Ixtacuixtla de Mariano Matamoros', 29),
(2024, 'Santa Ana Nopalucan', 29),
(2025, 'Panotla', 29),
(2026, 'Totolac', 29),
(2027, 'Tepeyanco', 29),
(2028, 'Santa Isabel Xiloxoxtla', 29),
(2029, 'San Juan Huactzinco', 29),
(2030, 'Calpulalpan', 29),
(2031, 'Sanctórum de Lázaro Cárdenas', 29),
(2032, 'Benito Juárez', 29),
(2033, 'Hueyotlipan', 29),
(2034, 'Tlaxco', 29),
(2035, 'Nanacamilpa de Mariano Arista', 29),
(2036, 'Españita', 29),
(2037, 'Apizaco', 29),
(2038, 'Atlangatepec', 29),
(2039, 'Muñoz de Domingo Arenas', 29),
(2040, 'Tetla de la Solidaridad', 29),
(2041, 'Xaltocan', 29),
(2042, 'San Lucas Tecopilco', 29),
(2043, 'Yauhquemehcan', 29),
(2044, 'Xaloztoc', 29),
(2045, 'Tocatlán', 29),
(2046, 'Tzompantepec', 29),
(2047, 'San José Teacalco', 29),
(2048, 'Huamantla', 29),
(2049, 'Terrenate', 29),
(2050, 'Lázaro Cárdenas', 29),
(2051, 'Emiliano Zapata', 29),
(2052, 'Atltzayanca', 29),
(2053, 'Cuapiaxtla', 29),
(2054, 'El Carmen Tequexquitla', 29),
(2055, 'Ixtenco', 29),
(2056, 'Ziltlaltépec de Trinidad Sánchez Santos', 29),
(2057, 'Apetatitlán de Antonio Carvajal', 29),
(2058, 'Amaxac de Guerrero', 29),
(2059, 'Santa Cruz Tlaxcala', 29),
(2060, 'Cuaxomulco', 29),
(2061, 'Contla de Juan Cuamatzi', 29),
(2062, 'Tepetitla de Lardizábal', 29),
(2063, 'Natívitas', 29),
(2064, 'Santa Apolonia Teacalco', 29),
(2065, 'Tetlatlahuca', 29),
(2066, 'San Damián Texóloc', 29),
(2067, 'San Jerónimo Zacualpan', 29),
(2068, 'Zacatelco', 29),
(2069, 'San Lorenzo Axocomanitla', 29),
(2070, 'Santa Catarina Ayometla', 29),
(2071, 'Xicohtzinco', 29),
(2072, 'Papalotla de Xicohténcatl', 29),
(2073, 'Chiautempan', 29),
(2074, 'La Magdalena Tlaltelulco', 29),
(2075, 'San Francisco Tetlanohcan', 29),
(2076, 'Teolocholco', 29),
(2077, 'Acuamanala de Miguel Hidalgo', 29),
(2078, 'Santa Cruz Quilehtla', 29),
(2079, 'Mazatecochco de José María Morelos', 29),
(2080, 'Tenancingo', 29),
(2081, 'San Pablo del Monte', 29),
(2082, 'Xalapa', 30),
(2083, 'Tlalnelhuayocan', 30),
(2084, 'Xico', 30),
(2085, 'Ixhuacán de los Reyes', 30),
(2086, 'Ayahualulco', 30),
(2087, 'Perote', 30),
(2088, 'Banderilla', 30),
(2089, 'Rafael Lucio', 30),
(2090, 'Acajete', 30),
(2091, 'Las Vigas de Ramírez', 30),
(2092, 'Villa Aldama', 30),
(2093, 'Tlacolulan', 30),
(2094, 'Tonayán', 30),
(2095, 'Coacoatzintla', 30),
(2096, 'Jilotepec', 30),
(2097, 'Naolinco', 30),
(2098, 'Miahuatlán', 30),
(2099, 'Acatlán', 30),
(2100, 'Tepetlán', 30),
(2101, 'Juchique de Ferrer', 30),
(2102, 'Alto Lucero de Gutiérrez Barrios', 30),
(2103, 'Actopan', 30),
(2104, 'Coatepec', 30),
(2105, 'Teocelo', 30),
(2106, 'Cosautlán de Carvajal', 30),
(2107, 'Emiliano Zapata', 30),
(2108, 'Apazapan', 30),
(2109, 'Puente Nacional', 30),
(2110, 'Ursulo Galván', 30),
(2111, 'Paso de Ovejas', 30),
(2112, 'La Antigua', 30),
(2113, 'Veracruz', 30),
(2114, 'Pánuco', 30),
(2115, 'Pueblo Viejo', 30),
(2116, 'Tampico Alto', 30),
(2117, 'Tempoal', 30),
(2118, 'Ozuluama de Mascareñas', 30),
(2119, 'Tantoyuca', 30),
(2120, 'Platón Sánchez', 30),
(2121, 'Chiconamel', 30),
(2122, 'Chalma', 30),
(2123, 'Chontla', 30),
(2124, 'Citlaltépetl', 30),
(2125, 'Ixcatepec', 30),
(2126, 'Naranjos Amatlán', 30),
(2127, 'El Higo', 30),
(2128, 'Chinampa de Gorostiza', 30),
(2129, 'Tantima', 30),
(2130, 'Tamalín', 30),
(2131, 'Cerro Azul', 30),
(2132, 'Tepetzintla', 30),
(2133, 'Tancoco', 30),
(2134, 'Tamiahua', 30),
(2135, 'Huayacocotla', 30),
(2136, 'Ilamatlán', 30),
(2137, 'Zontecomatlán de López y Fuentes', 30),
(2138, 'Texcatepec', 30),
(2139, 'Zacualpan', 30),
(2140, 'Benito Juárez', 30),
(2141, 'Tlachichilco', 30),
(2142, 'Ixhuatlán de Madero', 30),
(2143, 'Chicontepec', 30),
(2144, 'Álamo Temapache', 30),
(2145, 'Tuxpan', 30),
(2146, 'Tihuatlán', 30),
(2147, 'Castillo de Teayo', 30),
(2148, 'Cazones de Herrera', 30),
(2149, 'Zozocolco de Hidalgo', 30),
(2150, 'Chumatlán', 30),
(2151, 'Coxquihui', 30),
(2152, 'Mecatlán', 30),
(2153, 'Filomeno Mata', 30),
(2154, 'Coahuitlán', 30),
(2155, 'Coyutla', 30),
(2156, 'Coatzintla', 30),
(2157, 'Espinal', 30),
(2158, 'Poza Rica de Hidalgo', 30),
(2159, 'Papantla', 30),
(2160, 'Gutiérrez Zamora', 30),
(2161, 'Tecolutla', 30),
(2162, 'Martínez de la Torre', 30),
(2163, 'San Rafael', 30),
(2164, 'Tlapacoyan', 30),
(2165, 'Jalacingo', 30),
(2166, 'Atzalan', 30),
(2167, 'Altotonga', 30),
(2168, 'Las Minas', 30),
(2169, 'Tatatila', 30),
(2170, 'Tenochtitlán', 30),
(2171, 'Nautla', 30),
(2172, 'Misantla', 30),
(2173, 'Landero y Coss', 30),
(2174, 'Chiconquiaco', 30),
(2175, 'Yecuatla', 30),
(2176, 'Colipa', 30),
(2177, 'Vega de Alatorre', 30),
(2178, 'Jalcomulco', 30),
(2179, 'Tlaltetela', 30),
(2180, 'Tenampa', 30),
(2181, 'Totutla', 30),
(2182, 'Sochiapa', 30),
(2183, 'Tlacotepec de Mejía', 30),
(2184, 'Huatusco', 30),
(2185, 'Calcahualco', 30),
(2186, 'Alpatláhuac', 30),
(2187, 'Coscomatepec', 30),
(2188, 'La Perla', 30),
(2189, 'Chocamán', 30),
(2190, 'Tomatlán', 30),
(2191, 'Ixhuatlán del Café', 30),
(2192, 'Tepatlaxco', 30),
(2193, 'Comapa', 30),
(2194, 'Zentla', 30),
(2195, 'Camarón de Tejeda', 30),
(2196, 'Soledad de Doblado', 30),
(2197, 'Manlio Fabio Altamirano', 30),
(2198, 'Jamapa', 30),
(2199, 'Medellín', 30),
(2200, 'Boca del Río', 30),
(2201, 'Orizaba', 30),
(2202, 'Rafael Delgado', 30),
(2203, 'Mariano Escobedo', 30),
(2204, 'Ixhuatlancillo', 30),
(2205, 'Atzacan', 30),
(2206, 'Ixtaczoquitlán', 30),
(2207, 'Fortín', 30),
(2208, 'Córdoba', 30),
(2209, 'Maltrata', 30),
(2210, 'Nogales', 30),
(2211, 'Río Blanco', 30),
(2212, 'Camerino Z. Mendoza', 30),
(2213, 'Aquila', 30),
(2214, 'Acultzingo', 30),
(2215, 'Soledad Atzompa', 30),
(2216, 'Huiloapan de Cuauhtémoc', 30),
(2217, 'Tlaquilpa', 30),
(2218, 'Astacinga', 30),
(2219, 'Xoxocotla', 30),
(2220, 'Atlahuilco', 30),
(2221, 'Tequila', 30),
(2222, 'San Andrés Tenejapan', 30),
(2223, 'Tlilapan', 30),
(2224, 'Magdalena', 30),
(2225, 'Naranjal', 30),
(2226, 'Coetzala', 30),
(2227, 'Omealca', 30),
(2228, 'Cuitláhuac', 30),
(2229, 'Cuichapa', 30),
(2230, 'Yanga', 30),
(2231, 'Amatlán de los Reyes', 30),
(2232, 'Atoyac', 30),
(2233, 'Paso del Macho', 30),
(2234, 'Carrillo Puerto', 30),
(2235, 'Cotaxtla', 30),
(2236, 'Zongolica', 30),
(2237, 'Tehuipango', 30),
(2238, 'Mixtla de Altamirano', 30),
(2239, 'Los Reyes', 30),
(2240, 'Texhuacán', 30),
(2241, 'Tezonapa', 30),
(2242, 'Tierra Blanca', 30),
(2243, 'Tlalixcoyan', 30),
(2244, 'Ignacio de la Llave', 30),
(2245, 'Alvarado', 30),
(2246, 'Lerdo de Tejada', 30),
(2247, 'Tres Valles', 30),
(2248, 'Carlos A. Carrillo', 30),
(2249, 'Cosamaloapan de Carpio', 30),
(2250, 'Ixmatlahuacan', 30),
(2251, 'Acula', 30),
(2252, 'Amatitlán', 30),
(2253, 'Tlacotalpan', 30),
(2254, 'Saltabarranca', 30),
(2255, 'Otatitlán', 30),
(2256, 'Tlacojalpan', 30),
(2257, 'Tuxtilla', 30),
(2258, 'Chacaltianguis', 30),
(2259, 'José Azueta', 30),
(2260, 'Playa Vicente', 30),
(2261, 'Santiago Sochiapan', 30),
(2262, 'Isla', 30),
(2263, 'Juan Rodríguez Clara', 30),
(2264, 'San Andrés Tuxtla', 30),
(2265, 'Santiago Tuxtla', 30),
(2266, 'Angel R. Cabada', 30),
(2267, 'Hueyapan de Ocampo', 30),
(2268, 'Catemaco', 30),
(2269, 'Soteapan', 30),
(2270, 'Mecayapan', 30),
(2271, 'Tatahuicapan de Juárez', 30),
(2272, 'Pajapan', 30),
(2273, 'Chinameca', 30),
(2274, 'Acayucan', 30),
(2275, 'San Juan Evangelista', 30),
(2276, 'Sayula de Alemán', 30),
(2277, 'Oluta', 30),
(2278, 'Soconusco', 30),
(2279, 'Texistepec', 30),
(2280, 'Jáltipan', 30),
(2281, 'Zaragoza', 30),
(2282, 'Oteapan', 30),
(2283, 'Cosoleacaque', 30),
(2284, 'Nanchital de Lázaro Cárdenas del Río', 30),
(2285, 'Ixhuatlán del Sureste', 30),
(2286, 'Moloacán', 30),
(2287, 'Coatzacoalcos', 30),
(2288, 'Agua Dulce', 30),
(2289, 'Minatitlán', 30),
(2290, 'Hidalgotitlán', 30),
(2291, 'Jesús Carranza', 30),
(2292, 'Las Choapas', 30),
(2293, 'Uxpanapa', 30),
(2294, 'Mérida', 31),
(2295, 'Progreso', 31),
(2296, 'Chicxulub Pueblo', 31),
(2297, 'Ixil', 31),
(2298, 'Conkal', 31),
(2299, 'Yaxkukul', 31),
(2300, 'Hunucmá', 31),
(2301, 'Ucú', 31),
(2302, 'Kinchil', 31),
(2303, 'Tetiz', 31),
(2304, 'Celestún', 31),
(2305, 'Kanasín', 31),
(2306, 'Timucuy', 31),
(2307, 'Acanceh', 31),
(2308, 'Tixpéhual', 31),
(2309, 'Umán', 31),
(2310, 'Telchac Pueblo', 31),
(2311, 'Dzemul', 31),
(2312, 'Telchac Puerto', 31),
(2313, 'Cansahcab', 31),
(2314, 'Sinanché', 31),
(2315, 'Yobaín', 31),
(2316, 'Motul', 31),
(2317, 'Baca', 31),
(2318, 'Mocochá', 31),
(2319, 'Muxupip', 31),
(2320, 'Cacalchén', 31),
(2321, 'Bokobá', 31),
(2322, 'Tixkokob', 31),
(2323, 'Hoctún', 31),
(2324, 'Tahmek', 31),
(2325, 'Dzidzantún', 31),
(2326, 'Temax', 31),
(2327, 'Tekantó', 31),
(2328, 'Teya', 31),
(2329, 'Suma', 31),
(2330, 'Tepakán', 31),
(2331, 'Tekal de Venegas', 31),
(2332, 'Izamal', 31),
(2333, 'Hocabá', 31),
(2334, 'Xocchel', 31),
(2335, 'Seyé', 31),
(2336, 'Cuzamá', 31),
(2337, 'Homún', 31),
(2338, 'Sanahcat', 31),
(2339, 'Huhí', 31),
(2340, 'Dzilam González', 31),
(2341, 'Dzilam de Bravo', 31),
(2342, 'Panabá', 31),
(2343, 'San Felipe', 31),
(2344, 'Buctzotz', 31),
(2345, 'Sucilá', 31),
(2346, 'Cenotillo', 31),
(2347, 'Dzoncauich', 31),
(2348, 'Tunkás', 31),
(2349, 'Quintana Roo', 31),
(2350, 'Dzitás', 31),
(2351, 'Kantunil', 31),
(2352, 'Sudzal', 31),
(2353, 'Tekit', 31),
(2354, 'Sotuta', 31),
(2355, 'Tizimín', 31),
(2356, 'Río Lagartos', 31),
(2357, 'Espita', 31),
(2358, 'Temozón', 31),
(2359, 'Calotmul', 31),
(2360, 'Tinum', 31),
(2361, 'Chankom', 31),
(2362, 'Chichimilá', 31),
(2363, 'Tixcacalcupul', 31),
(2364, 'Kaua', 31),
(2365, 'Cuncunul', 31),
(2366, 'Tekom', 31),
(2367, 'Chemax', 31),
(2368, 'Valladolid', 31),
(2369, 'Uayma', 31),
(2370, 'Maxcanú', 31),
(2371, 'Samahil', 31),
(2372, 'Opichén', 31),
(2373, 'Chocholá', 31),
(2374, 'Kopomá', 31),
(2375, 'Tecoh', 31),
(2376, 'Abalá', 31),
(2377, 'Halachó', 31),
(2378, 'Muna', 31),
(2379, 'Sacalum', 31),
(2380, 'Maní', 31),
(2381, 'Dzán', 31),
(2382, 'Chapab', 31),
(2383, 'Ticul', 31),
(2384, 'Oxkutzcab', 31),
(2385, 'Santa Elena', 31),
(2386, 'Mama', 31),
(2387, 'Chumayel', 31),
(2388, 'Mayapán', 31),
(2389, 'Teabo', 31),
(2390, 'Cantamayec', 31),
(2391, 'Yaxcabá', 31),
(2392, 'Peto', 31),
(2393, 'Chikindzonot', 31),
(2394, 'Tahdziú', 31),
(2395, 'Tixmehuac', 31),
(2396, 'Chacsinkín', 31),
(2397, 'Tzucacab', 31),
(2398, 'Tekax', 31),
(2399, 'Akil', 31),
(2400, 'Zacatecas', 32),
(2401, 'Morelos', 32),
(2402, 'Vetagrande', 32),
(2403, 'Concepción del Oro', 32),
(2404, 'Melchor Ocampo', 32),
(2405, 'Mazapil', 32),
(2406, 'El Salvador', 32),
(2407, 'Juan Aldama', 32),
(2408, 'Miguel Auza', 32),
(2409, 'General Francisco R. Murguía', 32),
(2410, 'Río Grande', 32),
(2411, 'Villa de Cos', 32),
(2412, 'Cañitas de Felipe Pescador', 32),
(2413, 'Calera', 32),
(2414, 'Pánuco', 32),
(2415, 'General Enrique Estrada', 32),
(2416, 'Guadalupe', 32),
(2417, 'Trancoso', 32),
(2418, 'Genaro Codina', 32),
(2419, 'Cuauhtémoc', 32),
(2420, 'Ojocaliente', 32),
(2421, 'General Pánfilo Natera', 32),
(2422, 'Luis Moya', 32),
(2423, 'Loreto', 32),
(2424, 'Villa González Ortega', 32),
(2425, 'Noria de Ángeles', 32),
(2426, 'Villa García', 32),
(2427, 'Pinos', 32),
(2428, 'Villa Hidalgo', 32),
(2429, 'Fresnillo', 32),
(2430, 'Sombrerete', 32),
(2431, 'Sain Alto', 32),
(2432, 'Valparaíso', 32),
(2433, 'Chalchihuites', 32),
(2434, 'Jiménez del Teul', 32),
(2435, 'Jerez', 32),
(2436, 'Monte Escobedo', 32),
(2437, 'Susticacán', 32),
(2438, 'Villanueva', 32),
(2439, 'Tepetongo', 32),
(2440, 'El Plateado de Joaquín Amaro', 32),
(2441, 'Jalpa', 32),
(2442, 'Tabasco', 32),
(2443, 'Huanusco', 32),
(2444, 'Tlaltenango de Sánchez Román', 32),
(2445, 'Momax', 32),
(2446, 'Atolinga', 32),
(2447, 'Tepechitlán', 32),
(2448, 'Benito Juárez', 32),
(2449, 'Teúl de González Ortega', 32),
(2450, 'Santa María de la Paz', 32),
(2451, 'Trinidad García de la Cadena', 32),
(2452, 'Mezquital del Oro', 32),
(2453, 'Nochistlán de Mejía', 32),
(2454, 'Apulco', 32),
(2455, 'Apozol', 32),
(2456, 'Juchipila', 32),
(2457, 'Moyahua de Estrada', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organigrama`
--

CREATE TABLE `organigrama` (
  `idTrab` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoP` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `apellidoM` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `puesto` varchar(55) COLLATE utf8_spanish_ci NOT NULL,
  `status` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `organigrama`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politica`
--

CREATE TABLE `politica` (
  `idPolitica` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `politica`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre`
--

CREATE TABLE `pre` (
  `idPRE` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pre`
--

(1, '../documents/Punto13/PL0000/776519b71fe271a66ca031bd391c23fa.pdf', 'PL/0000/EXP/ES/2020');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rbpo`
--

CREATE TABLE `rbpo` (
  `idRbpo` int(11) NOT NULL,
  `area` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `nombreSupervisor` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombreTrabajador` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `critica` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `incAcc` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `causa` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `obser` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `rbpo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportea`
--

CREATE TABLE `reportea` (
  `idreporte` int(11) NOT NULL,
  `fechaR` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `elaborado` varchar(155) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `conclusion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `recomendacion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `idAuditoria` int(11) DEFAULT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reportea`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sugque`
--

CREATE TABLE `sugque` (
  `idSugQ` int(11) NOT NULL,
  `fecha` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sugque`
--



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabcurso`
--

CREATE TABLE `trabcurso` (
  `idTrab` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `idCESH` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `trabcurso`
--


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
(2, 'sasisopa', 'ener.gas05', 'sasisopa'),
(3, 'KHI150611K36', 'PL22402', 'estacion'),
(4, 'RFCSTA0522', 'PL0000', 'estacion'),
(5, 'SGO980909CB3', 'PL1389', 'estacion');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actauditoria`
--
ALTER TABLE `actauditoria`
  ADD PRIMARY KEY (`idAct`,`idAuditoria`),
  ADD KEY `Relationship59` (`idAuditoria`);

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
-- Indices de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD PRIMARY KEY (`idBit`,`idCESH`),
  ADD KEY `Relationship82` (`idCESH`);

--
-- Indices de la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD PRIMARY KEY (`idCalendario`,`idCESH`),
  ADD KEY `Relationship70` (`idCESH`);

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
-- Indices de la tabla `control`
--
ALTER TABLE `control`
  ADD PRIMARY KEY (`idControl`,`idCESH`),
  ADD KEY `Relationship54` (`idCESH`);

--
-- Indices de la tabla `controlrbpo`
--
ALTER TABLE `controlrbpo`
  ADD PRIMARY KEY (`idControlR`,`idCESH`),
  ADD KEY `Relationship62` (`idCESH`);

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
-- Indices de la tabla `dzbitacora`
--
ALTER TABLE `dzbitacora`
  ADD PRIMARY KEY (`idBitacoras`,`idCESH`),
  ADD KEY `Relationship80` (`idCESH`);

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
  ADD PRIMARY KEY (`idOrdenT`,`idCESH`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `incidentes`
--
ALTER TABLE `incidentes`
  ADD PRIMARY KEY (`idIncidentes`,`idCESH`),
  ADD KEY `Relationship55` (`idCESH`);

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
  ADD KEY `Relationship8` (`idCESH`);

--
-- Indices de la tabla `politica`
--
ALTER TABLE `politica`
  ADD PRIMARY KEY (`idPolitica`,`idCESH`),
  ADD KEY `Relationship24` (`idCESH`);

--
-- Indices de la tabla `pre`
--
ALTER TABLE `pre`
  ADD PRIMARY KEY (`idPRE`,`idCESH`),
  ADD KEY `Relationship53` (`idCESH`);

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
  ADD KEY `Relationship13` (`idTrab`,`idCESH`),
  ADD KEY `Relationship14` (`idCurso`,`idCESH`);

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
-- AUTO_INCREMENT de la tabla `actauditoria`
--
ALTER TABLE `actauditoria`
  MODIFY `idAct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ar`
--
ALTER TABLE `ar`
  MODIFY `idAR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `auditoria`
--
ALTER TABLE `auditoria`
  MODIFY `idAuditoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  MODIFY `idBit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `calendario`
--
ALTER TABLE `calendario`
  MODIFY `idCalendario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `control`
--
ALTER TABLE `control`
  MODIFY `idControl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `controlrbpo`
--
ALTER TABLE `controlrbpo`
  MODIFY `idControlR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `curso`
--
ALTER TABLE `curso`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `dcherramienta`
--
ALTER TABLE `dcherramienta`
  MODIFY `idEPP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dcproveedor`
--
ALTER TABLE `dcproveedor`
  MODIFY `idProvedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `dctraex`
--
ALTER TABLE `dctraex`
  MODIFY `idTra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `idDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de la tabla `dzbitacora`
--
ALTER TABLE `dzbitacora`
  MODIFY `idBitacoras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `dzcambiop`
--
ALTER TABLE `dzcambiop`
  MODIFY `idCambio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `dzcambiot`
--
ALTER TABLE `dzcambiot`
  MODIFY `idCambioT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dzordentr`
--
ALTER TABLE `dzordentr`
  MODIFY `idOrdenT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `incidentes`
--
ALTER TABLE `incidentes`
  MODIFY `idIncidentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `monverif`
--
ALTER TABLE `monverif`
  MODIFY `idMonV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `idMunicipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2458;

--
-- AUTO_INCREMENT de la tabla `organigrama`
--
ALTER TABLE `organigrama`
  MODIFY `idTrab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `politica`
--
ALTER TABLE `politica`
  MODIFY `idPolitica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `pre`
--
ALTER TABLE `pre`
  MODIFY `idPRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rbpo`
--
ALTER TABLE `rbpo`
  MODIFY `idRbpo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reportea`
--
ALTER TABLE `reportea`
  MODIFY `idreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sugque`
--
ALTER TABLE `sugque`
  MODIFY `idSugQ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `idUbicacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actauditoria`
--
ALTER TABLE `actauditoria`
  ADD CONSTRAINT `Relationship59` FOREIGN KEY (`idAuditoria`) REFERENCES `auditoria` (`idAuditoria`);

--
-- Filtros para la tabla `ar`
--
ALTER TABLE `ar`
  ADD CONSTRAINT `Relationship6` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `bitacoras`
--
ALTER TABLE `bitacoras`
  ADD CONSTRAINT `Relationship82` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `calendario`
--
ALTER TABLE `calendario`
  ADD CONSTRAINT `Relationship70` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `control`
--
ALTER TABLE `control`
  ADD CONSTRAINT `Relationship54` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `controlrbpo`
--
ALTER TABLE `controlrbpo`
  ADD CONSTRAINT `Relationship62` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

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
-- Filtros para la tabla `dzbitacora`
--
ALTER TABLE `dzbitacora`
  ADD CONSTRAINT `Relationship80` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `dzcambiop`
--
ALTER TABLE `dzcambiop`
  ADD CONSTRAINT `Relationship29` FOREIGN KEY (`idTrab`,`idCESH`) REFERENCES `organigrama` (`idTrab`, `idCESH`);

--
-- Filtros para la tabla `incidentes`
--
ALTER TABLE `incidentes`
  ADD CONSTRAINT `Relationship55` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `organigrama`
--
ALTER TABLE `organigrama`
  ADD CONSTRAINT `Relationship8` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `politica`
--
ALTER TABLE `politica`
  ADD CONSTRAINT `Relationship24` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

--
-- Filtros para la tabla `pre`
--
ALTER TABLE `pre`
  ADD CONSTRAINT `Relationship53` FOREIGN KEY (`idCESH`) REFERENCES `cesh` (`idCESH`);

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

--
-- Filtros para la tabla `trabcurso`
--
ALTER TABLE `trabcurso`
  ADD CONSTRAINT `Relationship13` FOREIGN KEY (`idTrab`,`idCESH`) REFERENCES `organigrama` (`idTrab`, `idCESH`),
  ADD CONSTRAINT `Relationship14` FOREIGN KEY (`idCurso`,`idCESH`) REFERENCES `curso` (`idCurso`, `idCESH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
