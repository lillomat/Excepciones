-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2018 a las 22:33:42
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `excepciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `rut` varchar(45) DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `ap_paterno` varchar(200) DEFAULT NULL,
  `ap_materno` varchar(200) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `rut`, `nombre`, `ap_paterno`, `ap_materno`, `telefono`, `email`) VALUES
(1, '11-K', 'Marcelo', 'Nunez', 'jimenez', '123456789', 'marcelo@sendero.cl'),
(2, '22-K', 'Jose', 'Mieres', 'Mieres', '123456789', 'jose@sendero.cl');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado_dsc` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado_dsc`) VALUES
(1, 'Aprobado'),
(2, 'Rechazado'),
(3, 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excepciones`
--

CREATE TABLE `excepciones` (
  `id_excepcion` int(11) NOT NULL,
  `Observacion` varchar(300) DEFAULT NULL,
  `fch_excepcion` date DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `tipo_id_exc` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `excepciones`
--

INSERT INTO `excepciones` (`id_excepcion`, `Observacion`, `fch_excepcion`, `id_cliente`, `tipo_id_exc`, `id_estado`, `id_persona`) VALUES
(1, 'DESCUENTO POR DEUDA', '2018-04-27', 1, 1, 3, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(300) DEFAULT NULL,
  `ap_paterno` varchar(300) DEFAULT NULL,
  `ap_materno` varchar(300) DEFAULT NULL,
  `tipo_persona` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_excepciones`
--

CREATE TABLE `tipo_excepciones` (
  `id_tipo_exc` int(11) NOT NULL,
  `descripcion_exc` varchar(555) DEFAULT NULL,
  `sla` int(11) DEFAULT NULL,
  `grado_aut` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_excepciones`
--

INSERT INTO `tipo_excepciones` (`id_tipo_exc`, `descripcion_exc`, `sla`, `grado_aut`) VALUES
(1, 'REBAJA DEUDA', 5, 1),
(2, 'DESCUENTO POR CANTIDAD', 5, 2),
(3, 'DESCUENTO POR ANTIGUEDAD', 5, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `excepciones`
--
ALTER TABLE `excepciones`
  ADD PRIMARY KEY (`id_excepcion`),
  ADD KEY `fk_Excepciones_Clientes1_idx` (`id_cliente`),
  ADD KEY `fk_Excepciones_Tipo_excepciones1_idx` (`tipo_id_exc`),
  ADD KEY `fk_Excepciones_Estados1_idx` (`id_estado`),
  ADD KEY `fk_Excepciones_Persona1_idx` (`id_persona`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`);

--
-- Indices de la tabla `tipo_excepciones`
--
ALTER TABLE `tipo_excepciones`
  ADD PRIMARY KEY (`id_tipo_exc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `excepciones`
--
ALTER TABLE `excepciones`
  ADD CONSTRAINT `fk_Excepciones_Clientes1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Excepciones_Estados1` FOREIGN KEY (`id_estado`) REFERENCES `estados` (`id_estado`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Excepciones_Persona1` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Excepciones_Tipo_excepciones1` FOREIGN KEY (`tipo_id_exc`) REFERENCES `tipo_excepciones` (`id_tipo_exc`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
