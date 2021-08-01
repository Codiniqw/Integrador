-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-07-2021 a las 19:09:55
-- Versión del servidor: 5.5.8
-- Versión de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `t_super_refrigeradores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `RFC` varchar(15) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `password` varchar(16) NOT NULL,
  `NSS` varchar(30) NOT NULL,
  PRIMARY KEY (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `admin`
--

INSERT INTO `admin` (`RFC`, `nombre`, `password`, `NSS`) VALUES
('EIMJ010202509', 'Jose', 'Codiniqw123', '23425234234234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE IF NOT EXISTS `bitacora` (
  `idBitacora` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `accion` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `idIncidente` int(11) DEFAULT NULL,
  `idViaje` int(11) NOT NULL,
  PRIMARY KEY (`idBitacora`),
  UNIQUE KEY `idViaje` (`idViaje`),
  UNIQUE KEY `idIncidente` (`idIncidente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `bitacora`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidente`
--

CREATE TABLE IF NOT EXISTS `incidente` (
  `idIncidente` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `ubicacion` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  PRIMARY KEY (`idIncidente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `incidente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `operador`
--

CREATE TABLE IF NOT EXISTS `operador` (
  `RFC` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `tipo_licencia` varchar(255) NOT NULL,
  `numero_licencia` varchar(255) NOT NULL,
  `vigencia` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `NSS` varchar(255) NOT NULL,
  `Foto` varchar(100) NOT NULL,
  PRIMARY KEY (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `operador`
--

INSERT INTO `operador` (`RFC`, `nombre`, `apellidos`, `tipo_licencia`, `numero_licencia`, `vigencia`, `password`, `NSS`, `Foto`) VALUES
('EIMJ020202509', 'Jose', 'espinosa', 'B', '212342342', '2023-02-02', 'Codiniqw123', '325234243', '../Operadores/01931480.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE IF NOT EXISTS `unidad` (
  `marca` varchar(60) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `numero_serie` varchar(60) NOT NULL,
  `ejes` int(1) NOT NULL,
  `largo` varchar(10) NOT NULL,
  `alto` varchar(10) NOT NULL,
  `ancho` varchar(10) NOT NULL,
  `Carga_maxima` varchar(10) NOT NULL,
  `Refrigerado` tinyint(1) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `placas` varchar(10) NOT NULL,
  PRIMARY KEY (`numero_serie`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`marca`, `modelo`, `numero_serie`, `ejes`, `largo`, `alto`, `ancho`, `Carga_maxima`, `Refrigerado`, `foto`, `placas`) VALUES
('Dongfeng', 'DFL1140B10-KX2V', '2352346232', 4, '9 m.', '2.6 m.', '3.92 m.', '15 TON', 1, '../Unidades/camionprueba.jpg', 'Edua4235'),
('Dongfeng', 'DFL1140B10-KX2V', '2352346234', 4, '9 m.', '2.6 m.', '3.92 m.', '15 TON', 1, '../Unidades/camionprueba.jpg', 'edd23157');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viaje`
--

CREATE TABLE IF NOT EXISTS `viaje` (
  `idViaje` int(11) NOT NULL AUTO_INCREMENT,
  `empresaEnvia` varchar(255) CHARACTER SET utf8 NOT NULL,
  `empresaRecibe` varchar(255) CHARACTER SET utf8 NOT NULL,
  `tipoBien` varchar(255) CHARACTER SET utf8 NOT NULL,
  `fechaEnvio` date NOT NULL,
  `fechaEntrega` date NOT NULL,
  `idUnidad` varchar(60) CHARACTER SET utf8 NOT NULL,
  `RFC` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`idViaje`),
  UNIQUE KEY `idUnidad` (`idUnidad`),
  UNIQUE KEY `idOperador` (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `viaje`
--


--
-- Filtros para las tablas descargadas (dump)
--

--
-- Filtros para la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD CONSTRAINT `bitacora_ibfk_1` FOREIGN KEY (`idIncidente`) REFERENCES `incidente` (`idIncidente`),
  ADD CONSTRAINT `bitacora_ibfk_2` FOREIGN KEY (`idViaje`) REFERENCES `viaje` (`idViaje`);

--
-- Filtros para la tabla `viaje`
--
ALTER TABLE `viaje`
  ADD CONSTRAINT `viaje_ibfk_2` FOREIGN KEY (`idUnidad`) REFERENCES `unidad` (`numero_serie`),
  ADD CONSTRAINT `viaje_ibfk_1` FOREIGN KEY (`RFC`) REFERENCES `operador` (`RFC`);
