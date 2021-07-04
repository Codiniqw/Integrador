-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-07-2021 a las 02:48:56
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
