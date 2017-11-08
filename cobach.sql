-- phpMyAdmin SQL Dump
-- version 2.10.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tiempo de generación: 07-11-2017 a las 23:04:31
-- Versión del servidor: 5.0.45
-- Versión de PHP: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Base de datos: `cobach`
-- 

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `alumnos`
-- 

CREATE TABLE `alumnos` (
  `nombre` varchar(30) collate utf8_unicode_ci NOT NULL,
  `apellidos` varchar(30) character set utf8 collate utf8_spanish_ci NOT NULL,
  `semestre` varchar(2) character set utf8 collate utf8_spanish_ci NOT NULL,
  `grupo` varchar(2) character set utf8 collate utf8_spanish_ci NOT NULL,
  `asesor` varchar(30) character set utf8 collate utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL,
  `horario` time NOT NULL,
  `tema` varchar(50) character set utf8 collate utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Volcar la base de datos para la tabla `alumnos`
-- 

INSERT INTO `alumnos` VALUES ('Juan Luis', 'OrdoÃ±ez perez', '6', 'A', 'LIC. NORMA', '2017-09-30', '08:00:00', 'PROCESADORES DE TEXTO');
INSERT INTO `alumnos` VALUES ('Juan Luis', 'OrdoÃ±ez perez', '6', 'A', 'LIC. NORMA', '2017-09-20', '08:00:00', 'PROCESADORES DE TEXTO');
INSERT INTO `alumnos` VALUES ('jesus', 'alvarado ramirez', '3', 'a', 'joel', '1991-12-29', '12:59:00', 'administracion de proyectos');
INSERT INTO `alumnos` VALUES ('juan', 'lucas perez', '6', 'a', 'lupe', '2017-09-21', '08:00:00', 'porno');

-- --------------------------------------------------------

-- 
-- Estructura de tabla para la tabla `sesion`
-- 

CREATE TABLE `sesion` (
  `usuario` varchar(30) character set utf8 collate utf8_spanish2_ci NOT NULL,
  `contraseña` varchar(30) character set utf8 collate utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- Volcar la base de datos para la tabla `sesion`
-- 

INSERT INTO `sesion` VALUES ('juan', 'juan');
