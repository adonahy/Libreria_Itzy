-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2019 a las 04:33:20
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libreria_itzy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_depto` int(11) NOT NULL,
  `departamento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_depto`, `departamento`) VALUES
(1, 'Guatemala'),
(2, 'El Progreso'),
(3, 'Sacatepéquez'),
(4, 'Chimaltenango'),
(5, 'Escuintla'),
(6, 'Santa Rosa'),
(7, 'Sololá'),
(8, 'Totonicapán'),
(9, 'Quetzaltenango'),
(10, 'Suchitepéquez'),
(11, 'Retalhuleu'),
(12, 'San Marcos'),
(13, 'Huehuetenango'),
(14, 'Quiché'),
(15, 'Baja Verapaz'),
(16, 'Alta Verapaz'),
(17, 'Petén'),
(18, 'Izabal'),
(19, 'Zacapa'),
(20, 'Chiquimula'),
(21, 'Jalapa'),
(22, 'Jutiapa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id_inventario` int(11) NOT NULL,
  `sku` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `marca` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `tamaño` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `minimo` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `ingreso_producto` int(11) NOT NULL,
  `fecha_ingreso` varchar(15) NOT NULL,
  `fecha_proxima` varchar(15) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_marca` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_marca`, `nombre`, `status`) VALUES
(1, 'MAPED', 0),
(2, 'BIC', 0),
(3, 'Pasitos', 0),
(4, 'VIVO', 0),
(5, 'FAST', 0),
(6, 'Tucan', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_muni` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `id_depto` int(11) NOT NULL,
  `id_municip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_muni`, `municipio`, `id_depto`, `id_municip`) VALUES
(1, 'Guatemala', 1, 1),
(2, 'Santa Catarina Pinula', 1, 2),
(3, 'San José Pinula', 1, 3),
(4, 'San José del Golfo', 1, 4),
(5, 'Palencia', 1, 5),
(6, 'Chinautla', 1, 6),
(7, 'San Pedro Ayampuc', 1, 7),
(8, 'Mixco', 1, 8),
(9, 'San Pedro Sacatepéquez', 1, 9),
(10, 'San Juan Sacatepéquez', 1, 10),
(11, 'San Raymundo', 1, 11),
(12, 'Chuarrancho', 1, 12),
(13, 'Fraijanes', 1, 13),
(14, 'Amatitlán', 1, 14),
(15, 'Villa Nueva', 1, 15),
(16, 'Villa Canales', 1, 16),
(17, 'Petapa', 1, 17),
(18, 'Guastatoya', 2, 1),
(19, 'Morazán', 2, 2),
(20, 'San Agustín Acasaguastlán', 2, 3),
(21, 'San Cristóbal Acasaguastlán', 2, 4),
(22, 'El Jícaro', 2, 5),
(23, 'Sansare', 2, 6),
(24, 'Sanarate', 2, 7),
(25, 'San Antonio la Paz', 2, 8),
(26, 'Antigua Guatemala', 3, 1),
(27, 'Jocotenango', 3, 2),
(28, 'Pastores', 3, 3),
(29, 'Sumpango', 3, 4),
(30, 'Santo Domingo Xenacoj', 3, 5),
(31, 'Santiago Sacatepéquez', 3, 6),
(32, 'San Bartolomé Milpas Altas', 3, 7),
(33, 'San Lucas Sacatepéquez', 3, 8),
(34, 'Santa Lucía Milpas Altas', 3, 9),
(35, 'Magdalena Milpas Altas', 3, 10),
(36, 'Santa María de Jesús', 3, 11),
(37, 'Ciudad Vieja', 3, 12),
(38, 'San Miguel Dueñas', 3, 13),
(39, 'Alotenango', 3, 14),
(40, 'San Antonio Aguas Calientes', 3, 15),
(41, 'Santa Catarina Barahona', 3, 16),
(42, 'Chimaltenango', 4, 1),
(43, 'San José Poaquil', 4, 2),
(44, 'San Martín Jilotepeque', 4, 3),
(45, 'Comalapa', 4, 4),
(46, 'Santa Apolonia', 4, 5),
(47, 'Tecpán Guatemala', 4, 6),
(48, 'Patzún', 4, 7),
(49, 'Pochuta', 4, 8),
(50, 'Patzicía', 4, 9),
(51, 'Santa Cruz Balanyá', 4, 10),
(52, 'Acatenango', 4, 11),
(53, 'Yepocapa', 4, 12),
(54, 'San Andrés Itzapa', 4, 13),
(55, 'Parramos', 4, 14),
(56, 'Zaragoza', 4, 15),
(57, 'El Tejar', 4, 16),
(58, 'Escuintla', 5, 1),
(59, 'Santa Lucía Cotzumalguapa', 5, 2),
(60, 'La Democracia', 5, 3),
(61, 'Siquinalá', 5, 4),
(62, 'Masagua', 5, 5),
(63, 'Tiquisate', 5, 6),
(64, 'La Gomera', 5, 7),
(65, 'Guanagazapa', 5, 8),
(66, 'San José', 5, 9),
(67, 'Iztapa', 5, 10),
(68, 'Palín', 5, 11),
(69, 'San Vicente Pacaya', 5, 12),
(70, 'Nueva Concepción', 5, 13),
(71, 'Cuilapa', 6, 1),
(72, 'Barberena', 6, 2),
(73, 'Santa Rosa de Lima', 6, 3),
(74, 'Casillas', 6, 4),
(75, 'San Rafael las Flores', 6, 5),
(76, 'Oratorio', 6, 6),
(77, 'San Juan Tecuaco', 6, 7),
(78, 'Chiquimulilla', 6, 8),
(79, 'Taxisco', 6, 9),
(80, 'Santa María Ixhuatán', 6, 10),
(81, 'Guazacapán', 6, 11),
(82, 'Santa Cruz Naranjo', 6, 12),
(83, 'Pueblo Nuevo Viñas', 6, 13),
(84, 'Nueva Santa Rosa', 6, 14),
(85, 'Sololá', 7, 1),
(86, 'San José Chacayá', 7, 2),
(87, 'Santa María Visitación', 7, 3),
(88, 'Santa Lucía Utatlán', 7, 4),
(89, 'Nahualá', 7, 5),
(90, 'Santa Catarina Ixtahuacán', 7, 6),
(91, 'Santa Clara la Laguna', 7, 7),
(92, 'Concepción', 7, 8),
(93, 'San Andrés Semetabaj', 7, 9),
(94, 'Panajachel', 7, 10),
(95, 'Santa Catarina Palopó', 7, 11),
(96, 'San Antonio Palopó', 7, 12),
(97, 'San Lucas Tolimán', 7, 13),
(98, 'Santa Cruz la Laguna', 7, 14),
(99, 'San Pablo la Laguna', 7, 15),
(100, 'San Marcos la Laguna', 7, 16),
(101, 'San Juan la Laguna', 7, 17),
(102, 'San Pedro la Laguna', 7, 18),
(103, 'Santiago Atitlán', 7, 19),
(104, 'Totonicapán', 8, 1),
(105, 'San Cristóbal Totonicapán', 8, 2),
(106, 'San Francisco el Alto', 8, 3),
(107, 'San Andrés Xecul', 8, 4),
(108, 'Momostenango', 8, 5),
(109, 'Santa María Chiquimula', 8, 6),
(110, 'Santa Lucía la Reforma', 8, 7),
(111, 'San Bartolo', 8, 8),
(112, 'Quetzaltenango', 9, 1),
(113, 'Salcajá', 9, 2),
(114, 'Olintepeque', 9, 3),
(115, 'San Carlos Sija', 9, 4),
(116, 'Sibilia', 9, 5),
(117, 'Cabricán', 9, 6),
(118, 'Cajolá', 9, 7),
(119, 'San Miguel Siguilá', 9, 8),
(120, 'Ostuncalco', 9, 9),
(121, 'San Mateo', 9, 10),
(122, 'Concepción Chiquirichapa', 9, 11),
(123, 'San Martín Sacatepéquez', 9, 12),
(124, 'Almolonga', 9, 13),
(125, 'Cantel', 9, 14),
(126, 'Huitán', 9, 15),
(127, 'Zunil', 9, 16),
(128, 'Colomba', 9, 17),
(129, 'San Francisco la Unión', 9, 18),
(130, 'El Palmar', 9, 19),
(131, 'Coatepeque', 9, 20),
(132, 'Génova', 9, 21),
(133, 'Flores Costa Cuca', 9, 22),
(134, 'La Esperanza', 9, 23),
(135, 'Palestina de los Altos', 9, 24),
(136, 'Mazatenango', 10, 1),
(137, 'Cuyotenango', 10, 2),
(138, 'San Francisco Zapotitlán', 10, 3),
(139, 'San Bernardino', 10, 4),
(140, 'San José el Idolo', 10, 5),
(141, 'Santo Domingo Suchitepéquez', 10, 6),
(142, 'San Lorenzo', 10, 7),
(143, 'Samayac', 10, 8),
(144, 'San Pablo Jocopilas', 10, 9),
(145, 'San Antonio Suchitepéquez', 10, 10),
(146, 'San Miguel Panán', 10, 11),
(147, 'San Gabriel', 10, 12),
(148, 'Chicacao', 10, 13),
(149, 'Patulul', 10, 14),
(150, 'Santa Bárbara', 10, 15),
(151, 'San Juan Bautista', 10, 16),
(152, 'Santo Tomás la Unión', 10, 17),
(153, 'Zunilito', 10, 18),
(154, 'Pueblo Nuevo', 10, 19),
(155, 'Río Bravo', 10, 20),
(156, 'San José La Máquina', 10, 21),
(157, 'Retalhuleu', 11, 1),
(158, 'San Sebastián', 11, 2),
(159, 'Santa Cruz Muluá', 11, 3),
(160, 'San Martín Zapotitlán', 11, 4),
(161, 'San Felipe', 11, 5),
(162, 'San Andrés Villa Seca', 11, 6),
(163, 'Champerico', 11, 7),
(164, 'Nuevo San Carlos', 11, 8),
(165, 'El Asintal', 11, 9),
(166, 'San Marcos', 12, 1),
(167, 'San Pedro Sacatepéquez', 12, 2),
(168, 'San Antonio Sacatepéquez', 12, 3),
(169, 'Comitancillo', 12, 4),
(170, 'San Miguel Ixtahuacán', 12, 5),
(171, 'Concepción Tutuapa', 12, 6),
(172, 'Tacaná', 12, 7),
(173, 'Sibinal', 12, 8),
(174, 'Tajumulco', 12, 9),
(175, 'Tejutla', 12, 10),
(176, 'San Rafael Pié de la Cuesta', 12, 11),
(177, 'Nuevo Progreso', 12, 12),
(178, 'El Tumbador', 12, 13),
(179, 'El Rodeo', 12, 14),
(180, 'Malacatán', 12, 15),
(181, 'Catarina', 12, 16),
(182, 'Ayutla', 12, 17),
(183, 'Ocós', 12, 18),
(184, 'San Pablo', 12, 19),
(185, 'El Quetzal', 12, 20),
(186, 'La Reforma', 12, 21),
(187, 'Pajapita', 12, 22),
(188, 'Ixchiguán', 12, 23),
(189, 'San José Ojetenán', 12, 24),
(190, 'San Cristóbal Cucho', 12, 25),
(191, 'Sipacapa', 12, 26),
(192, 'Esquipulas Palo Gordo', 12, 27),
(193, 'Río Blanco', 12, 28),
(194, 'San Lorenzo', 12, 29),
(195, 'La Blanca', 12, 30),
(196, 'Huehuetenango', 13, 1),
(197, 'Chiantla', 13, 2),
(198, 'Malacatancito', 13, 3),
(199, 'Cuilco', 13, 4),
(200, 'Nentón', 13, 5),
(201, 'San Pedro Necta', 13, 6),
(202, 'Jacaltenango', 13, 7),
(203, 'Soloma', 13, 8),
(204, 'Ixtahuacán', 13, 9),
(205, 'Santa Bárbara', 13, 10),
(206, 'La Libertad', 13, 11),
(207, 'La Democracia', 13, 12),
(208, 'San Miguel Acatán', 13, 13),
(209, 'San Rafael la Independencia', 13, 14),
(210, 'Todos Santos Cuchumatán', 13, 15),
(211, 'San Juan Atitán', 13, 16),
(212, 'Santa Eulalia', 13, 17),
(213, 'San Mateo Ixtatán', 13, 18),
(214, 'Colotenango', 13, 19),
(215, 'San Sebastián Huehuetenango', 13, 20),
(216, 'Tectitán', 13, 21),
(217, 'Concepción Huista', 13, 22),
(218, 'San Juan Ixcoy', 13, 23),
(219, 'San Antonio Huista', 13, 24),
(220, 'San Sebastián Coatán', 13, 25),
(221, 'Barillas', 13, 26),
(222, 'Aguacatán', 13, 27),
(223, 'San Rafael Petzal', 13, 28),
(224, 'San Gaspar Ixchil', 13, 29),
(225, 'Santiago Chimaltenango', 13, 30),
(226, 'Santa Ana Huista', 13, 31),
(227, 'Unión Cantinil', 13, 32),
(228, 'Santa Cruz del Quiché', 14, 1),
(229, 'Chiché', 14, 2),
(230, 'Chinique', 14, 3),
(231, 'Zacualpa', 14, 4),
(232, 'Chajul', 14, 5),
(233, 'Chichicastenango', 14, 6),
(234, 'Patzité', 14, 7),
(235, 'San Antonio Ilotenango', 14, 8),
(236, 'San Pedro Jocopilas', 14, 9),
(237, 'Cunén', 14, 10),
(238, 'San Juan Cotzal', 14, 11),
(239, 'Joyabaj', 14, 12),
(240, 'Nebaj', 14, 13),
(241, 'San Andrés Sajcabajá', 14, 14),
(242, 'Uspantán', 14, 15),
(243, 'Sacapulas', 14, 16),
(244, 'San Bartolomé Jocotenango', 14, 17),
(245, 'Canillá', 14, 18),
(246, 'Chicamán', 14, 19),
(247, 'Ixcán', 14, 20),
(248, 'Pachalum', 14, 21),
(249, 'Salamá', 15, 1),
(250, 'San Miguel Chicaj', 15, 2),
(251, 'Rabinal', 15, 3),
(252, 'Cubulco', 15, 4),
(253, 'Granados', 15, 5),
(254, 'El Chol', 15, 6),
(255, 'San Jerónimo', 15, 7),
(256, 'Purulhá', 15, 8),
(257, 'Cobán', 16, 1),
(258, 'Santa Cruz Verapaz', 16, 2),
(259, 'San Cristóbal Verapaz', 16, 3),
(260, 'Tactic', 16, 4),
(261, 'Tamahú', 16, 5),
(262, 'Tucurú', 16, 6),
(263, 'Panzós', 16, 7),
(264, 'Senahú', 16, 8),
(265, 'San Pedro Carchá', 16, 9),
(266, 'San Juan Chamelco', 16, 10),
(267, 'Lanquín', 16, 11),
(268, 'Cahabón', 16, 12),
(269, 'Chisec', 16, 13),
(270, 'Chahal', 16, 14),
(271, 'Fray Bartolomé de las Casas', 16, 15),
(272, 'Santa Catalina la Tinta', 16, 16),
(273, 'Raxruhá', 16, 17),
(274, 'Flores', 17, 1),
(275, 'San José', 17, 2),
(276, 'San Benito', 17, 3),
(277, 'San Andrés', 17, 4),
(278, 'La Libertad', 17, 5),
(279, 'San Francisco', 17, 6),
(280, 'Santa Ana', 17, 7),
(281, 'Dolores', 17, 8),
(282, 'San Luis', 17, 9),
(283, 'Sayaxché', 17, 10),
(284, 'Melchor de Mencos', 17, 11),
(285, 'Poptún', 17, 12),
(286, 'Las Cruces', 17, 13),
(287, 'El Chal', 17, 14),
(288, 'Puerto Barrios', 18, 1),
(289, 'Livingston', 18, 2),
(290, 'El Estor', 18, 3),
(291, 'Morales', 18, 4),
(292, 'Los Amates', 18, 5),
(293, 'Zacapa', 19, 1),
(294, 'Estanzuela', 19, 2),
(295, 'Río Hondo', 19, 3),
(296, 'Gualán', 19, 4),
(297, 'Teculután', 19, 5),
(298, 'Usumatlán', 19, 6),
(299, 'Cabañas', 19, 7),
(300, 'San Diego', 19, 8),
(301, 'La Unión', 19, 9),
(302, 'Huité', 19, 10),
(303, 'San Jorge', 19, 11),
(304, 'Chiquimula', 20, 1),
(305, 'San José La Arada', 20, 2),
(306, 'San Juan Ermita', 20, 3),
(307, 'Jocotán', 20, 4),
(308, 'Camotán', 20, 5),
(309, 'Olopa', 20, 6),
(310, 'Esquipulas', 20, 7),
(311, 'Concepción Las Minas', 20, 8),
(312, 'Quetzaltepeque', 20, 9),
(313, 'San Jacinto', 20, 10),
(314, 'Ipala', 20, 11),
(315, 'Jalapa', 21, 1),
(316, 'San Pedro Pinula', 21, 2),
(317, 'San Luis Jilotepeque', 21, 3),
(318, 'San Manuel Chaparrón', 21, 4),
(319, 'San Carlos Alzatate', 21, 5),
(320, 'Monjas', 21, 6),
(321, 'Mataquescuintla', 21, 7),
(322, 'Jutiapa', 22, 1),
(323, 'El Progreso', 22, 2),
(324, 'Santa Catarina Mita', 22, 3),
(325, 'Agua Blanca', 22, 4),
(326, 'Asunción Mita', 22, 5),
(327, 'Yupiltepeque', 22, 6),
(328, 'Atescatempa', 22, 7),
(329, 'Jerez', 22, 8),
(330, 'El Adelanto', 22, 9),
(331, 'Zapotitlán', 22, 10),
(332, 'Comapa', 22, 11),
(333, 'Jalpatagua', 22, 12),
(334, 'Conguaco', 22, 13),
(335, 'Moyuta', 22, 14),
(336, 'Pasaco', 22, 15),
(337, 'San José Acatempa', 22, 16),
(338, 'Quesada', 22, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `tel` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `depto` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `status` int(11) NOT NULL,
  `codigo_comprador` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tama`
--

CREATE TABLE `tama` (
  `id_tama` int(11) NOT NULL,
  `tama` varchar(50) NOT NULL,
  `medida` varchar(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tama`
--

INSERT INTO `tama` (`id_tama`, `tama`, `medida`, `status`) VALUES
(1, 'Grande', '0', 0),
(2, 'Mediano', '0', 0),
(3, 'Pequeño', '0', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`, `status`) VALUES
(1, 'Tijeras', 0),
(2, 'Cuadernos_engrapados', 0),
(3, 'Cuadernos_cosidos', 0),
(4, 'Cuadernos_espirales', 0),
(5, 'Diccionarios', 0),
(6, 'Borradores', 0),
(7, 'Lapiceros', 0),
(8, 'Lapices', 0),
(9, 'Silicon_liquido', 0),
(10, 'Silicon_barra', 0),
(11, 'Resistol', 0),
(12, 'Juguetes', 0),
(13, 'Crayones_madera', 0),
(14, 'Crayones_cera', 0),
(15, 'Tablas', 0),
(16, 'Pliegos', 0),
(17, 'Hojas', 0),
(18, 'tape', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `date` varchar(14) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user`, `pass`, `nombre`, `apellidos`, `direccion`, `telefono`, `date`, `status`) VALUES
('admin', 'junior', '', '', '', '', '06/02/2016', 2),
('Administracion 1', 'raquel', 'Evelyn Yesenia', 'Lopez Lopez', 'Colinas de Magnolia', '44136697', '03/04/2018', 0),
('Antonio', 'antoniosalazar', 'Raul Antonio', 'Lopez Salazar', '6calle 4-52 zona 2 barrio jardin', '47375334', '02/12/2017', 0),
('Eduardo', 'Ocos', 'Isai Eduardo', 'Carreto Alonzo', '6ta calle 6-26 zona 6 magnolia', '44323485', '02/12/2017', 0),
('Erwin', '4339', 'Erwin', 'Miranda Vasquez', '5ta calle zona 6 magnolia', '32982437', '02/12/2017', 0),
('Fredy Navarijo', 'bolo', 'Fredy Antonio', 'Navarijo Flores', 'zona 4 4-71 candelaria', '42418573', '02/12/2017', 0),
('Gamaliel', 'Quique', 'Albert Gamaliel', 'Carreto Alonzo', '6ta calle 6-26 zona 6 magnolia', '49683542', '02/12/2017', 0),
('Guillermo Escobar', 'poca', 'Lars Guillermo', 'Escobar Laparra', 'sector 2 caserio santa ines coatepeque', '55384968', '02/12/2017', 0),
('Jorge Espinoza', 'Flores', 'Armando Jorge Francisco', 'Espinoza Cifuentes', 'condominio los azahares', '58613141', '15/01/2018', 0),
('Marlon', 'edraslopez', 'Marlon Oswaldo', 'Lopez Lopez', 'Lotificacion Magnolia', '59935603', '06/12/2017', 0),
('Marvin', 'JJ', 'Marvin Lorenzo', 'Carreto Alonzo', '8ta calle 8-46 zona 6 magnolia', '41679972', '02/12/2017', 0),
('Oficina', 'emanuel', 'Oficina', 'emanuel', 'magnolia', '53185311', '05/05/2018', 0),
('Osiel', 'Mala', 'Herman Osiel ', 'Lopez Lopez', '6ta calle 6-45 zona 6 magnolia', '32073604', '18/12/2017', 0),
('patron', 'macario', 'geovany rolando', 'hernandez vasquez', 'coatepeque', '53185311', '02/12/2017', 0),
('patrona', 'macaria', 'karen paola', 'ortiz barrios', 'coatepeque', '31031924', '02/12/2017', 0),
('Wilson', '1985', 'Wilson Estuardo', 'Cordon Muñoz', 'flores costa cuca', '47867394', '08/02/2018', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_depto`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id_inventario`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_muni`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `tama`
--
ALTER TABLE `tama`
  ADD PRIMARY KEY (`id_tama`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user`),
  ADD KEY `pass` (`pass`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_depto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_muni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=339;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tama`
--
ALTER TABLE `tama`
  MODIFY `id_tama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
