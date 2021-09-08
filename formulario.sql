-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2021 a las 05:49:21
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `formulario`
--
CREATE DATABASE IF NOT EXISTS `formulario` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `formulario`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `spInsertarUsuario`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `spInsertarUsuario` (IN `_tipo_cedula` INT(20), IN `_numero_cedula` VARCHAR(40), IN `_primer_apellido` VARCHAR(40), IN `_segundo_apellido` VARCHAR(40), IN `_primer_nombre` VARCHAR(40), IN `_segundo_nombre` VARCHAR(40), IN `_area` INT(20), IN `_direccion` VARCHAR(40), IN `_interior` VARCHAR(40), IN `_municipio` VARCHAR(40), IN `_barrio` VARCHAR(40), IN `_sede` VARCHAR(40), IN `_telefono_fijo` INT(20), IN `_movil` INT(20), IN `_telefono_emergencia` INT(20), IN `_correo` VARCHAR(40), IN `_fecha_nacimiento` DATE, IN `_genero` VARCHAR(40), IN `_idiomas` VARCHAR(40), IN `_numero_direccion` INT(20))  BEGIN 
	INSERT INTO empleados_almacontact(
    	tipo_cedula,
        numero_cedula,
        primer_apellido,
        segundo_apellido,
        primer_nombre,
        segundo_nombre,
        area,
        direccion,
        interior,
        municipio,
        barrio,
        sede,
        telefono_fijo,
        movil,
        telefono_emergencia,
        correo,
        fecha_nacimiento,
        genero,
        idiomas,
        numero_direccion
        
    ) VALUES (
		_tipo_cedula,
        _numero_cedula,
        _primer_apellido,
        _segundo_apellido,
        _primer_nombre,
        _segundo_nombre,
        _area,
        _direccion,
        _interior,
        _municipio,
        _barrio,
        _sede,
        _telefono_fijo,
        _movil,
        _telefono_emergencia,
        _correo,
        _fecha_nacimiento,
        _genero,
        _idiomas,
        _numero_direccion
    );
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados_almacontact`
--
-- Creación: 05-09-2021 a las 19:12:12
--

DROP TABLE IF EXISTS `empleados_almacontact`;
CREATE TABLE `empleados_almacontact` (
  `tipo_cedula` int(30) NOT NULL,
  `numero_cedula` varchar(30) NOT NULL,
  `primer_apellido` varchar(30) NOT NULL,
  `segundo_apellido` varchar(30) NOT NULL,
  `primer_nombre` varchar(30) NOT NULL,
  `segundo_nombre` varchar(30) NOT NULL,
  `area` int(30) NOT NULL,
  `direccion` varchar(11) NOT NULL,
  `interior` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `barrio` varchar(50) NOT NULL,
  `sede` int(11) NOT NULL,
  `telefono_fijo` int(11) NOT NULL,
  `movil` int(11) NOT NULL,
  `telefono_emergencia` int(11) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `genero` int(50) NOT NULL,
  `idiomas` int(11) NOT NULL,
  `numero_direccion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `empleados_almacontact`:
--

--
-- Volcado de datos para la tabla `empleados_almacontact`
--

INSERT INTO `empleados_almacontact` (`tipo_cedula`, `numero_cedula`, `primer_apellido`, `segundo_apellido`, `primer_nombre`, `segundo_nombre`, `area`, `direccion`, `interior`, `municipio`, `barrio`, `sede`, `telefono_fijo`, `movil`, `telefono_emergencia`, `correo`, `fecha_nacimiento`, `genero`, `idiomas`, `numero_direccion`) VALUES
(1, '', '', '', '', '', 1, '', '', '', '', 1, 1, 1, 0, '', '0000-00-00', 1, 1, '0');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados_almacontact`
--
ALTER TABLE `empleados_almacontact`
  ADD PRIMARY KEY (`tipo_cedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
