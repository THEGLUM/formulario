-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-09-2021 a las 22:34:07
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
-- Base de datos: `formulario_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--
-- Creación: 07-09-2021 a las 19:57:01
--

CREATE TABLE `user` (
  `tipoDocumento` int(11) NOT NULL,
  `numeroDocumento` varchar(15) NOT NULL,
  `primerApellido` varchar(30) NOT NULL,
  `segundoApellido` varchar(30) NOT NULL,
  `primerNombre` varchar(30) NOT NULL,
  `segundoNombre` varchar(30) NOT NULL,
  `sede` varchar(50) NOT NULL,
  `area` int(11) NOT NULL,
  `tipoVia` int(11) NOT NULL,
  `numeroVia` varchar(50) NOT NULL,
  `interior` varchar(15) NOT NULL,
  `municipioDeRecidencia` varchar(30) NOT NULL,
  `barrio` varchar(30) NOT NULL,
  `telefonoFijo` int(20) NOT NULL,
  `movil` int(20) NOT NULL,
  `telefonoEmergencia` int(20) NOT NULL,
  `correoElectronico` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `genero` int(5) NOT NULL,
  `idioma` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELACIONES PARA LA TABLA `user`:
--
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
