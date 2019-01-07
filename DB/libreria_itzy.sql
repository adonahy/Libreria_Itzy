-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-01-2019 a las 05:12:54
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_muni` int(11) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `id_depto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Estructura de tabla para la tabla `tamaños`
--

CREATE TABLE `tamaños` (
  `id_tamaño` int(11) NOT NULL,
  `tamaño` int(11) NOT NULL,
  `medida` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indices de la tabla `tamaños`
--
ALTER TABLE `tamaños`
  ADD PRIMARY KEY (`id_tamaño`);

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
  MODIFY `id_depto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id_inventario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_marca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_muni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tamaños`
--
ALTER TABLE `tamaños`
  MODIFY `id_tamaño` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
