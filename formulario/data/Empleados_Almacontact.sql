-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-12-2021 a las 15:23:47
-- Versión del servidor: 10.2.36-MariaDB
-- Versión de PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Empleados_Almacontact`
--
CREATE DATABASE IF NOT EXISTS `Empleados_Almacontact` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `Empleados_Almacontact`;

DELIMITER $$
--
-- Procedimientos
--
DROP PROCEDURE IF EXISTS `spInsertarUsuario`$$
CREATE DEFINER=`personalma`@`%` PROCEDURE `spInsertarUsuario`(IN `_AutorizaTratamientoDatos` VARCHAR(2), IN `_Fk_TipoDocumento` INT(11), IN `_Pk_NumeroDocumento` VARCHAR(15), IN `_PrimerApellido` VARCHAR(60), IN `_SegundoApellido` VARCHAR(60), IN `_PrimerNombre` VARCHAR(60), IN `_SegundoNombre` VARCHAR(60), IN `_Fk_Sede` INT(11), IN `_Fk_Area` INT(11), IN `_Fk_TipoVia` VARCHAR(11), IN `_NumeroVia` VARCHAR(5), IN `_Guion` VARCHAR(5), IN `_Interior` VARCHAR(10), IN `_Municipio` VARCHAR(80), IN `_Barrios` VARCHAR(80), IN `_Telefonofijo` INT(8), IN `_Movil` INT(10), IN `_TelefonoEmergencia` INT(10), IN `_CorreoElectronico` VARCHAR(10), IN `_FechaNacimiento` DATE, IN `_Fk_Genero` INT(11), IN `_Fk_idioma` INT(11))
    NO SQL
INSERT INTO Personal_almacontact (
       AutorizaTratamientoDatos,
        Fk_TipoDocumento,
        Pk_NumeroDocumento,
        PrimerApellido,
        SegundoApellido,
        PrimerNombre,
        SegundoNombre,
        Fk_Sede,
        Fk_Area,
        Fk_TipoVia,
        NumeroVia,
        Guion,
        Interior,
        MunicipioResidencia,
        Barrios,
        Telefonofijo,
        Movil,
        TelefonoEmergencia,
        CorreoElectronico,
        FechaNacimiento,
        Fk_Genero,
        Fk_Idioma
) VALUES (
                _AutorizaTratamientoDatos,
            _Fk_TipoDocumento,
            _Pk_NumeroDocumento,
            _PrimerApellido,
            _SegundoApellido,
            _PrimerNombre,
            _SegundoNombre,
            _Fk_Sede,
            _Fk_Area,
            _Fk_TipoVia,
            _NumeroVia,
            _Guion,
            _Interior,
            _MunicipioResidencia,
            _Barrios,
            _Telefonofijo,
            _Movil,
            _TelefonoEmergencia,
            _CorreoElectronico,
            _FechaNacimiento,
            _Fk_Genero,
            _Fk_Idioma
    
)$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `AcademicaActual`
--

DROP TABLE IF EXISTS `AcademicaActual`;
CREATE TABLE IF NOT EXISTS `AcademicaActual` (
  `Id_academicaA` int(11) NOT NULL,
  `Nombre_academica` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Actividades`
--

DROP TABLE IF EXISTS `Actividades`;
CREATE TABLE IF NOT EXISTS `Actividades` (
  `Id_actividades` int(11) NOT NULL,
  `Nombre_actividad` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Alimentacion`
--

DROP TABLE IF EXISTS `Alimentacion`;
CREATE TABLE IF NOT EXISTS `Alimentacion` (
  `Id_Alimentacion` int(11) NOT NULL,
  `Id_NombreAlimentacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Barrio`
--

DROP TABLE IF EXISTS `Barrio`;
CREATE TABLE IF NOT EXISTS `Barrio` (
  `Id_barrio` int(11) NOT NULL,
  `Nombre_barrio` varchar(80) NOT NULL,
  `Fk_id_municipio` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Barrio`
--

INSERT INTO `Barrio` (`Id_barrio`, `Nombre_barrio`, `Fk_id_municipio`) VALUES
(1, '20 de Julio', 1),
(2, 'Alfonso López', 1),
(3, 'Américas', 1),
(4, 'Apogeo', 1),
(5, 'Bosa Central', 1),
(6, 'Bosa Occidental', 1),
(7, 'Calandaima', 1),
(8, 'Carvajal', 1),
(9, 'Castilla', 1),
(10, 'Chapinero', 1),
(11, 'Chicó Lago', 1),
(12, 'Ciudad Usme', 1),
(13, 'Comuneros', 1),
(14, 'Corabastos', 1),
(15, 'Country Club', 1),
(16, 'Danubio', 1),
(17, 'El Porvenir', 1),
(18, 'El Refugio', 1),
(19, 'Gran Britalia', 1),
(20, 'Gran Yomasa', 1),
(21, 'Kennedy Central', 1),
(22, 'La Flora', 1),
(23, 'La Gloria', 1),
(24, 'La Macarena', 1),
(25, 'La Uribe', 1),
(26, 'Las Cruces', 1),
(27, 'Las Nieves', 1),
(28, 'Los Cedros', 1),
(29, 'Los Libertadores', 1),
(30, 'Lourdes', 1),
(31, 'Pardo Rubio', 1),
(32, 'Parque Entrenubes', 1),
(33, 'Paseo de los Libertadores', 1),
(34, 'Sagrado Corazón', 1),
(35, 'San Blas', 1),
(36, 'San Cristóbal Norte', 1),
(37, 'San Isidro-Patios', 1),
(38, 'Santa Bárbara', 1),
(39, 'Sociego', 1),
(40, 'Timiza', 1),
(41, 'Tintal Norte', 1),
(42, 'Tintal Sur', 1),
(43, 'Toberín', 1),
(44, 'Tunjuelito', 1),
(45, 'Usaquén', 1),
(46, 'Venecia', 1),
(47, 'Verbenal', 1),
(48, 'Veredas', 1),
(49, '12 de Octubre', 1),
(50, 'El Mirador', 2),
(51, 'Gaitán', 2),
(52, 'Gaviotas', 2),
(53, 'Palermo', 2),
(54, 'San Agustín', 2),
(55, 'San Fernando', 2),
(56, 'Santa Helenita', 2),
(57, 'Santa Rita', 2),
(58, 'Centro', 2),
(59, 'Urb. Campo Bello', 2),
(60, 'Urb. El Bizcochuelo', 2),
(61, 'Urb. El Rincón', 2),
(62, 'Urb. Gaitán', 2),
(63, 'Urb. La Catleya', 2),
(64, 'Urb. Las Vegas', 2),
(65, 'Urb. Mónaco', 2),
(66, 'Urb. Prunus', 2),
(67, 'Urb. Senderos del Zipa', 2),
(68, 'Urb. Villas de San Luis I', 2),
(69, 'Urb. Villas de San Luis II', 2),
(70, 'Veredas', 2),
(71, 'Calahorra', 3),
(72, 'Canelón', 3),
(73, 'Capellanía', 3),
(74, 'Centro', 3),
(75, 'Chuntame', 3),
(76, 'El Misterio', 3),
(77, 'El Prado', 3),
(78, 'El Rocío', 3),
(79, 'Gran Colombia', 3),
(80, 'Granjitas', 3),
(81, 'La Estación', 3),
(82, 'La Florida', 3),
(83, 'La Palma', 3),
(84, 'Las Villas', 3),
(85, 'Puerta del Sol', 3),
(86, 'Rincón Santo', 3),
(87, 'Río grande', 3),
(88, 'Santa Cruz', 3),
(89, 'Santa Inés', 3),
(90, 'Veredas', 3),
(91, 'Fagua', 4),
(92, 'Tíquiza', 4),
(93, 'Fonquetá', 4),
(94, 'Cerca de Piedra', 4),
(95, 'Bojacá', 4),
(96, 'La Balsa', 4),
(97, 'Samaria', 4),
(98, 'Yerbabuena', 4),
(99, 'Fusca', 4),
(100, 'Veredas', 4),
(101, 'Centro', 5),
(102, 'Cetime', 5),
(103, 'El Abra', 5),
(104, 'La Esperanza', 5),
(105, 'La Moya', 5),
(106, 'Parcela', 5),
(107, 'Pueblo Viejo', 5),
(108, 'Rozo', 5),
(109, 'Siberia', 5),
(110, 'Veredas', 5),
(111, 'Vuelta Grande', 5),
(112, 'Bochica', 6),
(113, 'Campo Alegre', 6),
(114, 'Centro', 6),
(115, 'El Nogal', 6),
(116, 'Lleras', 6),
(117, 'Obando', 6),
(118, 'San Carlos', 6),
(119, 'San José', 6),
(120, 'Veredas', 6),
(121, 'Versalles', 6),
(122, 'Alamos', 7),
(123, 'Altillos del Chicó    ', 7),
(124, 'Arbelaez    ', 7),
(125, 'Arboleda    ', 7),
(126, 'Berlín    ', 7),
(127, 'Brasilia    ', 7),
(128, 'Cabecera Municipal    ', 7),
(129, 'Cartagenita    ', 7),
(130, 'Centro    ', 7),
(131, 'Chapinero    ', 7),
(132, 'Chicuaza    ', 7),
(133, 'Concepción    ', 7),
(134, 'Copihue    ', 7),
(135, 'Daniel Ortega    ', 7),
(136, 'Diurba    ', 7),
(137, 'Dos Caminos    ', 7),
(138, 'El Bosque    ', 7),
(139, 'El Corzo    ', 7),
(140, 'El Edén    ', 7),
(141, 'El Jardín    ', 7),
(142, 'El Llanito    ', 7),
(143, 'El Mirador de La Arboleda    ', 7),
(144, 'El Paraíso    ', 7),
(145, 'El Rincón de Faca    ', 7),
(146, 'Gibraltar    ', 7),
(147, 'Girardot    ', 7),
(148, 'Juan XXIII    ', 7),
(149, 'La Campiña    ', 7),
(150, 'La Convención    ', 7),
(151, 'La Esmeralda    ', 7),
(152, 'La Esperanza    ', 7),
(153, 'La Paz    ', 7),
(154, 'La Pepita    ', 7),
(155, 'Las Lajas    ', 7),
(156, 'Las Mercedes    ', 7),
(157, 'Las Piedras    ', 7),
(158, 'Las Quintas    ', 7),
(159, 'Laureles    ', 7),
(160, 'Llano del Tunjo    ', 7),
(161, 'Llano Popular    ', 7),
(162, 'Los Jazmínes    ', 7),
(163, 'Los Monarcas    ', 7),
(164, 'Los Saucos    ', 7),
(165, 'Manablanca    ', 7),
(166, 'Mancilla    ', 7),
(167, 'Moyano    ', 7),
(168, 'Prado    ', 7),
(169, 'Pueblo Viejo    ', 7),
(170, 'San Rafael', 7),
(171, 'Bellisca', 8),
(172, 'Centro 2', 8),
(173, 'Ciudad Jardín', 8),
(174, 'El Dorado', 8),
(175, 'El Hato', 8),
(176, 'El Lago', 8),
(177, 'El Palmar', 8),
(178, 'El Pensamiento', 8),
(179, 'El Prado', 8),
(180, 'El Sol', 8),
(181, 'Hato Casa Blanca', 8),
(182, 'La Aurora', 8),
(183, 'La Chaguya', 8),
(184, 'La Cita', 8),
(185, 'La Fortuna', 8),
(186, 'La Isla', 8),
(187, 'Las Mangas', 8),
(188, 'Los Sauces', 8),
(189, 'Martínez Rico', 8),
(190, 'Mriraflores', 8),
(191, 'Nueva Gerona', 8),
(192, 'Popular', 8),
(193, 'Portales de Funza', 8),
(194, 'Porvenir', 8),
(195, 'Quintas de Casa Blanca', 8),
(196, 'Renacer', 8),
(197, 'Samarkanda', 8),
(198, 'Santa Teresita', 8),
(199, 'Senderos', 8),
(200, 'Serenas', 8),
(201, 'Serrezuelita', 8),
(202, 'Siete Trojes', 8),
(203, 'Tienda Nueva', 8),
(204, 'Tisquesusa', 8),
(205, 'Vereda El Cacique', 8),
(206, 'Vereda El Coclí', 8),
(207, 'Vereda La Florida', 8),
(208, 'Villa Adriana', 8),
(209, 'Villa Diana', 8),
(210, 'Villa Paola', 8),
(211, 'Villa Paúl', 8),
(212, 'Zuame', 8),
(213, 'Bacatá Cacique', 8),
(214, 'Barrio Altos de Gualí', 8),
(215, 'Barrio México', 8),
(216, 'Prados de San Andrés', 8),
(217, 'Veredas', 9),
(218, 'Amino al meta', 10),
(219, 'Aguadas    ', 10),
(220, 'Altamar    ', 10),
(221, 'Aurora alta    ', 10),
(222, 'Aurora baja    ', 10),
(223, 'Buenos aires la epifania    ', 10),
(224, 'Buenos aires los pinos    ', 10),
(225, 'Cartagena    ', 10),
(226, 'Chatasuga    ', 10),
(227, 'El hato    ', 10),
(228, 'El libano    ', 10),
(229, 'El rodeo    ', 10),
(230, 'El salitre    ', 10),
(231, 'El volcan    ', 10),
(232, 'Frailejonal    ', 10),
(233, 'Jerusalen    ', 10),
(234, 'La caja    ', 10),
(235, 'La hoya    ', 10),
(236, 'La jangada    ', 10),
(237, 'La junia    ', 10),
(238, 'La polonia    ', 10),
(239, 'La portada    ', 10),
(240, 'Llanada    ', 10),
(241, 'Potrero grande    ', 10),
(242, 'Quisquiza', 10),
(243, 'San jose del triunfo', 10),
(244, 'Amparito', 11),
(245, 'Barranquillita', 11),
(246, 'Bolonia', 11),
(247, 'Casas Grises', 11),
(248, 'Cerezos I', 11),
(249, 'Cerezos II', 11),
(250, 'El Cortijo', 11),
(251, 'El Escallón', 11),
(252, 'El Molino', 11),
(253, 'El Rinconcito', 11),
(254, 'El Triunfo', 11),
(255, 'Gabriel Echavarría', 11),
(256, 'Hermandades del Trabajo', 11),
(257, 'Kennedy', 11),
(258, 'La Española', 11),
(259, 'La Esperanza', 11),
(260, 'La Huerta', 11),
(261, 'La Magnolia', 11),
(262, 'La Trinidad', 11),
(263, 'La Virgen', 11),
(264, 'Lorena', 11),
(265, 'Loreto I', 11),
(266, 'Loreto II', 11),
(267, 'Los Ángeles', 11),
(268, 'Lusitania', 11),
(269, 'Miguel Velásquez+', 11),
(270, 'Nuestra señora del Loreto II', 11),
(271, 'Porvenir', 11),
(272, 'Primero de Mayo I', 11),
(273, 'Provic', 11),
(274, 'San Bernardo', 11),
(275, 'San Francisco', 11),
(276, 'San José', 11),
(277, 'San Luís', 11),
(278, 'San Pablo', 11),
(279, 'San Pedro', 11),
(280, 'Santa Matilde', 11),
(281, 'Serrezuela', 11),
(282, 'Sosiego', 11),
(283, 'Zona Centro', 11),
(284, 'Veredas', 12),
(285, 'San José', 13),
(286, 'Pablo Neruda', 13),
(287, 'García', 13),
(288, 'Santa Teresa.', 13),
(289, 'Veredas', 13),
(290, 'Cumbres de San Mateo', 14),
(291, 'Divino Niño (dos sectores)', 14),
(292, 'Doce de Marzo', 14),
(293, 'Ducales', 14),
(294, 'El Altico', 14),
(295, 'El Arroyo', 14),
(296, 'El Bosque', 14),
(297, 'El Cardal', 14),
(298, 'El Carmen', 14),
(299, 'El Danubio', 14),
(300, 'El Dorado', 14),
(301, 'El Libertador', 14),
(302, 'El Mirador', 14),
(303, 'El Nogal', 14),
(304, 'El Oasis', 14),
(305, 'El Paraíso', 14),
(306, 'El Progreso', 14),
(307, 'El Rosal', 14),
(308, 'El Silo', 14),
(309, 'El Sol', 14),
(310, 'El Triunfo', 14),
(311, 'El Vínculo', 14),
(312, 'España', 14),
(313, 'Esperanza Suroriental', 14),
(314, 'Eugenio Díaz Castro', 14),
(315, 'Galicia III', 14),
(316, 'Hogar del Sol', 14),
(317, 'Hogares Soacha', 14),
(318, 'Jaime Garzón', 14),
(319, 'Juan Pablo I', 14),
(320, 'Juan Pablo II (dos sectores)', 14),
(321, 'Julio Rincón', 14),
(322, 'La Amistad', 14),
(323, 'La Cañada', 14),
(324, 'La Esmeralda', 14),
(325, 'La Esperanza Sur', 14),
(326, 'La Florida (dos sectores)', 14),
(327, 'La Fragua', 14),
(328, 'La Isla', 14),
(329, 'La Magdalena', 14),
(330, 'La María', 14),
(331, 'La Primavera', 14),
(332, 'La Unión', 14),
(333, 'Lagos de Malibú', 14),
(334, 'Las Ferias', 14),
(335, 'Las Margaritas Sur', 14),
(336, 'Las Margaritas Suroriental', 14),
(337, 'Las Quintas', 14),
(338, 'Las Vegas', 14),
(339, 'Las Villas', 14),
(340, 'León XIII', 14),
(341, 'Lincoln', 14),
(342, 'Llano Grande', 14),
(343, 'Llanos de Soacha', 14),
(344, 'Los Balcanes', 14),
(345, 'Los Cerezos', 14),
(346, 'Los Girasoles', 14),
(347, 'Los Olivares', 14),
(348, 'Los Olivos', 14),
(349, 'Los Pinos', 14),
(350, 'Otro', 14),
(351, 'Veredas', 15),
(352, 'Montana', 15),
(353, 'Las quintas de Ceramita', 15),
(354, 'Rincón del Norte', 15),
(355, 'Los Sauces', 15),
(356, 'La Trinidad', 15),
(357, 'Centro', 15),
(358, 'Los Andes', 15),
(359, 'Veredas', 16),
(360, 'Veredas', 17),
(361, 'Veredas', 18),
(362, 'Alcolpavis', 19),
(363, 'Algarra I', 19),
(364, 'Algarra II', 19),
(365, 'Algarra III', 19),
(366, 'Altamira', 19),
(367, 'Altos del Zipa', 19),
(368, 'América 500', 19),
(369, 'Barandillas', 19),
(370, 'Bolívar 83', 19),
(371, 'Bosques de Silecia', 19),
(372, 'Bosques del Zip', 19),
(373, 'Centro Histórico', 19),
(374, 'El Prado', 19),
(375, 'El Reposo', 19),
(376, 'El Rodeo', 19),
(377, 'El Rosal', 19),
(378, 'El Tejar', 19),
(379, 'Estación Salinas', 19),
(380, 'Julio Caro', 19),
(381, 'La Concepción', 19),
(382, 'La Esmeralda', 19),
(383, 'La Esperanza', 19),
(384, 'La Floresta', 19),
(385, 'La Libertad', 19),
(386, 'La Mariela', 19),
(387, 'La Paz', 19),
(388, 'Las Salinas', 19),
(389, 'Las Villas', 19),
(390, 'Los Cedrales', 19),
(391, 'Los Coclies', 19),
(392, 'Los Comuneros', 19),
(393, 'Minuto de Dios', 19),
(394, 'Pasoancho', 19),
(395, 'Portachuelo', 19),
(396, 'Prados del Mirador', 19),
(397, 'Primero de Mayo', 19),
(398, 'Rincón Barandillas', 19),
(399, 'Rincón del Zipa', 19),
(400, 'Samaria', 19),
(401, 'San Antonio', 19),
(402, 'San Carlos', 19),
(403, 'San Gabriel', 19),
(404, 'San Juanito', 19),
(405, 'San Miguel', 19),
(406, 'San Pablo', 19),
(407, 'San Rafael', 19),
(408, 'Santa Isabel', 19),
(409, 'Santa Isabel el Rodeo', 19),
(410, 'Santa Mónica', 19),
(411, 'Terraplén', 19),
(412, 'Villa Juliana', 19),
(413, 'Villa María', 19),
(414, 'Villa Sol', 19),
(415, 'Villa Unión', 19),
(416, 'Villas del Rosario', 19),
(417, 'Hatillo', 20),
(418, 'Popalito', 20),
(419, 'Veredas', 20),
(420, 'Acevedo', 21),
(421, 'Alcalá', 21),
(422, 'Alpes del Norte', 21),
(423, 'Altavista', 21),
(424, 'Altos de Niquía', 21),
(425, 'Altos de Quitasol', 21),
(426, 'Amazonía', 21),
(427, 'Andalucía', 21),
(428, 'Aralias', 21),
(429, 'Araucarias 1.', 21),
(430, 'Araucarias 2.', 21),
(431, 'Barrio Nuevo', 21),
(432, 'Bellavista.', 21),
(433, 'Belvedere', 21),
(434, 'Briceño', 21),
(435, 'Buenos Aires', 21),
(436, 'Central', 21),
(437, 'Centro', 21),
(438, 'Choco Chiquito (Queda antes de llegar a las Araucarias 2).', 21),
(439, 'Cinco Estrellas', 21),
(440, 'Ciudad Niquía', 21),
(441, 'Ciudadela del Norte', 21),
(442, 'El Cafetal', 21),
(443, 'El Cairo', 21),
(444, 'El Carmelo', 21),
(445, 'El Congolo', 21),
(446, 'El Ducado.', 21),
(447, 'El Mirador', 21),
(448, 'El Paraíso', 21),
(449, 'El Porvenir', 21),
(450, 'El Rosario', 21),
(451, 'El Trapiche', 21),
(452, 'El Trébol', 21),
(453, 'Espíritu Santo', 21),
(454, 'Estación Primera', 21),
(455, 'Fontidueño', 21),
(456, 'Girasoles.', 21),
(457, 'Gran Avenida', 21),
(458, 'Guasimalito. Incluye Zona Industrial #5', 21),
(459, 'Hato Viejo', 21),
(460, 'José Antonio Galán', 21),
(461, 'La Aldea.', 21),
(462, 'La Cabaña', 21),
(463, 'La Cabañita', 21),
(464, 'La Camila', 21),
(465, 'La Cumbre', 21),
(466, 'La Esmeralda', 21),
(467, 'La Estación. Incluye Zona Industrial #3', 21),
(468, 'La Florida', 21),
(469, 'La Gabriela', 21),
(470, 'La Madera', 21),
(471, 'La Maruchenga', 21),
(472, 'La Meseta', 21),
(473, 'La Milagrosa', 21),
(474, 'La Mina', 21),
(475, 'La Navarra', 21),
(476, 'La Pradera', 21),
(477, 'La Primavera', 21),
(478, 'La Selva', 21),
(479, 'La Selva.', 21),
(480, 'La Virginia', 21),
(481, 'Las Granjas', 21),
(482, 'Las Vegas', 21),
(483, 'López de Mesa', 21),
(484, 'Los Alpes.', 21),
(485, 'Los Búcaros', 21),
(486, 'Los Ciruelos', 21),
(487, 'Los Sauces', 21),
(488, 'Manchester', 21),
(489, 'Marco Fidel Suárez, Zona Industrial # 6', 21),
(490, 'Molinares', 21),
(491, 'Nazareth', 21),
(492, 'Niquía Bifamiliares', 21),
(493, 'Pachelly.', 21),
(494, 'Panamericano', 21),
(495, 'París', 21),
(496, 'Pérez', 21),
(497, 'Playa Rica.', 21),
(498, 'Prado', 21),
(499, 'Puerto Bello', 21),
(500, 'Riachuelos', 21),
(501, 'Rincón Santos', 21),
(502, 'Salento', 21),
(503, 'Salvador Allende', 21),
(504, 'San Gabriel.', 21),
(505, 'San José Obrero. Incluye Zona Industrial #1', 21),
(506, 'San Martín.', 21),
(507, 'San Simón', 21),
(508, 'Santa Ana', 21),
(509, 'Santa Rita', 21),
(510, 'Serramonte', 21),
(511, 'Suárez', 21),
(512, 'Terranova', 21),
(513, 'Tierradentro.', 21),
(514, 'Urapanes', 21),
(515, 'Valadares', 21),
(516, 'Veredas', 21),
(517, 'Villa Linda (incluye urbanización Girasoles).', 21),
(518, 'Villa María', 21),
(519, 'Villas de Comfenalco', 21),
(520, 'Villas de Occidente', 21),
(521, 'Villas del Sol.', 21),
(522, 'Zamora', 21),
(523, 'Zona Industrial # 7', 21),
(524, 'Aburrá Sur', 22),
(525, 'Andalucía', 22),
(526, 'Barrio Nuevo', 22),
(527, 'Barrios Unidos', 22),
(528, 'Bellavista', 22),
(529, 'Centenario', 22),
(530, 'Cristo Rey', 22),
(531, 'El Minuto', 22),
(532, 'El Porvenir', 22),
(533, 'El Socorro', 22),
(534, 'Felipe Echavarría No. 1', 22),
(535, 'Felipe Echavarría No. 2', 22),
(536, 'Fundadores', 22),
(537, 'Juan XXIII', 22),
(538, 'La Acuarela y/o La Rivera', 22),
(539, 'La aguacatala', 22),
(540, 'La Buena Esperanza', 22),
(541, 'La Chuscala', 22),
(542, 'La Docena', 22),
(543, 'La Goretti', 22),
(544, 'La Inmaculada', 22),
(545, 'La Locería', 22),
(546, 'La Planta', 22),
(547, 'La Playita', 22),
(548, 'La Pradera', 22),
(549, 'Las Margaritas', 22),
(550, 'Los Cerezos', 22),
(551, 'Mandalay', 22),
(552, 'Olaya Herrera', 22),
(553, 'Primavera', 22),
(554, 'Veredas', 22),
(555, 'Villa Capri', 22),
(556, 'Zona Centro', 22),
(557, 'Alto de la Virgen', 23),
(558, 'Alvarado', 23),
(559, 'Ancón', 23),
(560, 'Asunción (Alta y Baja) Guadalajara', 23),
(561, 'Autopista (Industrial)', 23),
(562, 'Cabecera Municipal', 23),
(563, 'Cabuyal', 23),
(564, 'Centro Miraflores', 23),
(565, 'Changai (Nucleo Urbano)', 23),
(566, 'Cristo Rey Cuenca Verde', 23),
(567, 'El Convento', 23),
(568, 'El Mojón', 23),
(569, 'El Noral', 23),
(570, 'El Pedregal', 23),
(571, 'El Recreo', 23),
(572, 'El Remanso', 23),
(573, 'El Salado', 23),
(574, 'El Totumo', 23),
(575, 'Fátima', 23),
(576, 'Fontidueño', 23),
(577, 'Francisco Meneses Horizontes', 23),
(578, 'Granizal', 23),
(579, 'Juan Cojo', 23),
(580, 'La Azulita', 23),
(581, 'La Lomita (Luna Lunera)', 23),
(582, 'La Pastorcita', 23),
(583, 'Las Canteras', 23),
(584, 'Manga Arriba', 23),
(585, 'Montañita', 23),
(586, 'Peñolcito', 23),
(587, 'Piedras Blancas', 23),
(588, 'Piedras Blancas - Matasano', 23),
(589, 'Quebrada A', 23),
(590, 'Veredas', 23),
(591, 'Zarzal Curazao', 23),
(592, 'Alto de Misael', 24),
(593, 'Barrio Mesa', 24),
(594, 'Barrio Obrero y Bucarest.', 24),
(595, 'Bosques de Zuñiga', 24),
(596, 'El Chinguí', 24),
(597, 'El Chocho', 24),
(598, 'El Dorado', 24),
(599, 'El Esmeraldal', 24),
(600, 'El Portal', 24),
(601, 'El Salado', 24),
(602, 'El Trianón', 24),
(603, 'Jardines', 24),
(604, 'La Inmaculada', 24),
(605, 'La Magnolia', 24),
(606, 'La Mina', 24),
(607, 'La Paz', 24),
(608, 'La Pradera', 24),
(609, 'La Pradera', 24),
(610, 'La Sebastiana', 24),
(611, 'Las Antillas', 24),
(612, 'Las Casitas', 24),
(613, 'Las Flores', 24),
(614, 'Las Orquídeas', 24),
(615, 'Loma de Las Brujas', 24),
(616, 'Loma del Barro', 24),
(617, 'Loma El Atravesado', 24),
(618, 'Los Naranjos', 24),
(619, 'Milán-Vallejuelos', 24),
(620, 'Pontevedra', 24),
(621, 'Primavera', 24),
(622, 'San José', 24),
(623, 'San Marcos', 24),
(624, 'San Mateo', 24),
(625, 'San Rafael', 24),
(626, 'Uribe Ángel', 24),
(627, 'Villagrande', 24),
(628, 'Zona Centro', 24),
(629, 'Zuñiga', 24),
(630, 'Las Vegas', 24),
(631, 'Aurelio', 25),
(632, 'Centro', 25),
(633, 'El Llano', 25),
(634, 'El Paraíso', 25),
(635, 'El Salado', 25),
(636, 'Girardota La Nueva', 25),
(637, 'Guaduales', 25),
(638, 'Guayacanes', 25),
(639, 'Juan XXIII', 25),
(640, 'La Ceiba', 25),
(641, 'La Ferrería', 25),
(642, 'La Florida', 25),
(643, 'Montecarlo', 25),
(644, 'Naranjal', 25),
(645, 'Nuevo Horizonte', 25),
(646, 'Palmas del Llano', 25),
(647, 'San José', 25),
(648, 'Santa Ana', 25),
(649, 'Veredas', 25),
(650, '19 de Abril', 26),
(651, 'Balcones de Sevilla', 26),
(652, 'Calatrava', 26),
(653, 'Ditaires', 26),
(654, 'El Rosario 1', 26),
(655, 'El Tablazo', 26),
(656, 'Entre colinas', 26),
(657, 'Fátima', 26),
(658, 'Glorieta Pilsen', 26),
(659, 'La Aldea', 26),
(660, 'La Esmeralda', 26),
(661, 'La Unión', 26),
(662, 'Las Acacias', 26),
(663, 'Las Américas', 26),
(664, 'Las Brisas', 26),
(665, 'Loma Linda', 26),
(666, 'Pilsen', 26),
(667, 'San Antonio', 26),
(668, 'San Fernando', 26),
(669, 'San Francisco', 26),
(670, 'San Gabriel', 26),
(671, 'San Javier', 26),
(672, 'Santa María La Nueva', 26),
(673, 'Santa Maria Nº 1', 26),
(674, 'Santa Maria Nº 2', 26),
(675, 'Santa Maria Nº 3', 26),
(676, 'Simón Bolivar', 26),
(677, 'Terranova Nº 1 y Nº 2', 26),
(678, 'Triana', 26),
(679, 'Veredas', 26),
(680, 'Villa Lia', 26),
(681, '19 de Abril', 27),
(682, 'Balcones de Sevilla', 27),
(683, 'Calatrava', 27),
(684, 'Ditaires', 27),
(685, 'El Rosario 1', 27),
(686, 'El Tablazo', 27),
(687, 'Entre colinas', 27),
(688, 'Fátima', 27),
(689, 'Glorieta Pilsen', 27),
(690, 'La Aldea', 27),
(691, 'La Esmeralda', 27),
(692, 'La Unión', 27),
(693, 'Las Acacias', 27),
(694, 'Las Américas', 27),
(695, 'Las Brisas', 27),
(696, 'Loma Linda', 27),
(697, 'Pilsen', 27),
(698, 'San Antonio', 27),
(699, 'San Fernando', 27),
(700, 'San Francisco', 27),
(701, 'San Gabriel', 27),
(702, 'San Javier', 27),
(703, 'Santa María La Nueva', 27),
(704, 'Santa Maria Nº 1', 27),
(705, 'Santa Maria Nº 2', 27),
(706, 'Santa Maria Nº 3', 27),
(707, 'Simón Bolivar', 27),
(708, 'Terranova Nº 1 y Nº 2', 27),
(709, 'Triana', 27),
(710, 'Veredas', 27),
(711, 'Villa Lia', 27),
(712, 'Aliadas Del Sur', 29),
(713, 'Ancon Sur', 29),
(714, 'Betania', 29),
(715, 'Calle Del Banco', 29),
(716, 'Calle Larga', 29),
(717, 'El Carmelo Ii', 29),
(718, 'Entreamigos', 29),
(719, 'Holanda', 29),
(720, 'La Barquereña', 29),
(721, 'La Doctora', 29),
(722, 'La Florida', 29),
(723, 'Las Casitas', 29),
(724, 'Los Alcázarez', 29),
(725, 'Los Arias', 29),
(726, 'Manuel Restrepo', 29),
(727, 'María Auxiliadora', 29),
(728, 'Nuestra Señora De Los Dolores', 29),
(729, 'Paso Ancho', 29),
(730, 'Playas De María', 29),
(731, 'Prados De Sabaneta', 29),
(732, 'Promisión', 29),
(733, 'Restrepo Naranjo', 29),
(734, 'Sabaneta Real', 29),
(735, 'San Joaquín', 29),
(736, 'San Rafael', 29),
(737, 'Santa Ana', 29),
(738, 'Tres Esquinas', 29),
(739, 'Vegas De La Doctora', 29),
(740, 'Vegas De San José', 29),
(741, 'Villas Del Carmen', 29),
(742, 'Virgen Del Carmen', 29),
(743, 'Veredas', 29),
(744, 'Popular Nº 1', 28),
(745, 'Popular Nº 2', 28),
(746, 'Santo Domingo Savio Nº 1', 28),
(747, 'Santo Domingo Savio Nº 2', 28),
(748, 'Granizal', 28),
(749, 'Moscú Nº 2', 28),
(750, 'Villa Guadalupe', 28),
(751, 'San Pablo', 28),
(752, 'Aldea Pablo VI', 28),
(753, 'La Esperanza Nº 2', 28),
(754, 'El Compromiso', 28),
(755, 'La Avanzada', 28),
(756, 'Carpinelo', 28),
(757, 'Santa Cruz', 28),
(758, 'La Isla', 28),
(759, 'El Playón de Los Comuneros', 28),
(760, 'Pablo VI', 28),
(761, 'La Frontera', 28),
(762, 'La Francia', 28),
(763, 'Andalucía', 28),
(764, 'Villa del Socorro', 28),
(765, 'Villa Niza', 28),
(766, 'Moscú Nº 1', 28),
(767, 'La Rosa', 28),
(768, 'La Salle', 28),
(769, 'Las Granjas', 28),
(770, 'Campo Valdes Nº 2', 28),
(771, 'Santa Inés', 28),
(772, 'El Raizal', 28),
(773, 'El Pomar', 28),
(774, 'Manrique Central Nº 2', 28),
(775, 'Manrique Oriental', 28),
(776, 'Versalles Nº 1', 28),
(777, 'Versalles Nº 2', 28),
(778, 'La Cruz', 28),
(779, 'La Honda', 28),
(780, 'Oriente', 28),
(781, 'Maria Cano – Carambolas', 28),
(782, 'San José La Cima Nº 1', 28),
(783, 'San José La Cima Nº', 28),
(784, 'Aranjuez', 28),
(785, 'Berlín', 28),
(786, 'San Isidro', 28),
(787, 'Palermo', 28),
(788, 'Bermejal – Los Álamos', 28),
(789, 'Moravia', 28),
(790, 'Sevilla', 28),
(791, 'San Pedro', 28),
(792, 'Manrique Central Nº 1', 28),
(793, 'Campo Valdes Nº 1', 28),
(794, 'Las Esmeraldas', 28),
(795, 'La Piñuela', 28),
(796, 'Brasilia', 28),
(797, 'Miranda', 28),
(798, 'Castilla', 28),
(799, 'Toscana', 28),
(800, 'Héctor Abad Gómez', 28),
(801, 'La Paralela', 28),
(802, 'Las Brisas', 28),
(803, 'Florencia', 28),
(804, 'Tejelo', 28),
(805, 'Boyacá', 28),
(806, 'Belalcazar', 28),
(807, 'Girardot', 28),
(808, 'Tricentenario', 28),
(809, 'Francisco Antonio Zea', 28),
(810, 'Alfonso López', 28),
(811, 'Caribe', 28),
(812, 'El Progreso', 28),
(813, 'Doce de Octubre Nº 1', 28),
(814, 'Doce de Octubre Nº 2', 28),
(815, 'Santander', 28),
(816, 'Pedregal', 28),
(817, 'La Esperanza', 28),
(818, 'San Martín de Porres', 28),
(819, 'Kennedy', 28),
(820, 'Picacho', 28),
(821, 'Picachito', 28),
(822, 'Mirador del Doce', 28),
(823, 'El Progreso Nº 2', 28),
(824, 'El Triunfo', 28),
(825, 'Robledo', 28),
(826, 'El Volador', 28),
(827, 'San Germán', 28),
(828, 'Barrio Facultad de Minas', 28),
(829, 'La Pilarica', 28),
(830, 'Bosques de San Pablo', 28),
(831, 'Altamira', 28),
(832, 'Córdoba', 28),
(833, 'López de Mesa', 28),
(834, 'El Diamante', 28),
(835, 'Aures Nº 1', 28),
(836, 'Aures Nº 2', 28),
(837, 'Bello Horizonte', 28),
(838, 'Villa Flora', 28),
(839, 'Palenque', 28),
(840, 'Cucaracho', 28),
(841, 'Fuente Clara', 28),
(842, 'Santa Margarita', 28),
(843, 'Olaya Herrera', 28),
(844, 'Pajarito', 28),
(845, 'Monteclaro', 28),
(846, 'Villa de La Iguaná', 28),
(847, 'La Cuchilla', 28),
(848, 'La Aurora', 28),
(849, 'Villa Hermosa', 28),
(850, 'La Mansión', 28),
(851, 'San Miguel', 28),
(852, 'La Ladera', 28),
(853, 'Golondrinas', 28),
(854, 'Batallón Girardot', 28),
(855, 'Llanaditas', 28),
(856, 'Los Mangos', 28),
(857, 'Enciso', 28),
(858, 'Sucre', 28),
(859, 'El Pinal', 28),
(860, 'Trece de Noviembre', 28),
(861, 'La Libertad', 28),
(862, 'Villatina', 28),
(863, 'San Antonio', 28),
(864, 'Las Estancias', 28),
(865, 'Villa Turbay', 28),
(866, 'La Sierra', 28),
(867, 'Villa Lilliam', 28),
(868, 'Esfuerzos de Paz Nº 1', 28),
(869, 'Esfuerzos de Paz Nº 2', 28),
(870, 'Buenos Aires', 28),
(871, 'Caicedo', 28),
(872, 'Juan Pablo II', 28),
(873, 'Ocho de Marzo', 28),
(874, 'Barrios de Jesús', 28),
(875, 'Bomboná Nº 2', 28),
(876, 'Los Cerros – El Vergel', 28),
(877, 'Alejandro Echavarría', 28),
(878, 'Miraflores', 28),
(879, 'Cataluña', 28),
(880, 'La Milagrosa', 28),
(881, 'Gerona', 28),
(882, 'El Salvador', 28),
(883, 'Loreto', 28),
(884, 'Asomadera Nº 1', 28),
(885, 'Asomadera Nº 2', 28),
(886, 'Asomadera Nº 3', 28),
(887, 'Quinta Linda', 28),
(888, 'Barrio Pablo Escobar', 28),
(889, 'La Candelaria', 28),
(890, 'Prado', 28),
(891, 'Jesús Nazareno', 28),
(892, 'El Chagualo', 28),
(893, 'Estación Villa', 28),
(894, 'San Benito', 28),
(895, 'Guayaquil', 28),
(896, 'Corazón de Jesús – Barrio Triste', 28),
(897, 'Calle Nueva', 28),
(898, 'Perpetuo Socorro', 28),
(899, 'Barrio Colón', 28),
(900, 'Las Palmas', 28),
(901, 'Bomboná Nº 1', 28),
(902, 'Boston', 28),
(903, 'Los Ángeles', 28),
(904, 'Villa Nueva', 28),
(905, 'San Diego', 28),
(906, 'Los Conquistadores', 28),
(907, 'Laureles', 28),
(908, 'Carlos E. Restrepo', 28),
(909, 'Suramericana', 28),
(910, 'Naranjal', 28),
(911, 'San Joaquín', 28),
(912, 'Bolivariana', 28),
(913, 'Las Acacias', 28),
(914, 'La Castellana', 28),
(915, 'Lorena', 28),
(916, 'El Velódromo', 28),
(917, 'Estadio', 28),
(918, 'Los Colores', 28),
(919, 'Cuarta Brigada', 28),
(920, 'Florida Nueva', 28),
(921, 'La América', 28),
(922, 'Ferrini', 28),
(923, 'Calasanz', 28),
(924, 'Los Pinos', 28),
(925, 'La Floresta', 28),
(926, 'Santa Lucía', 28),
(927, 'El Danubio', 28),
(928, 'Campo Alegre', 28),
(929, 'Santa Mónica', 28),
(930, 'Barrio Cristóbal', 28),
(931, 'Simón Bolívar', 28),
(932, 'Santa Teresita', 28),
(933, 'Calasanz Parte Alta', 28),
(934, 'San Javier Nº 1', 28),
(935, 'San Javier Nº 2', 28),
(936, 'El Pesebre', 28),
(937, 'Blanquizal', 28),
(938, 'Santa Rosa de Lima', 28),
(939, 'Los Alcázares', 28),
(940, 'Metropolitano', 28),
(941, 'La Pradera', 28),
(942, 'Juan XXIII', 28),
(943, 'La Divisa', 28),
(944, 'Veinte de Julio', 28),
(945, 'Belencito', 28),
(946, 'Betania', 28),
(947, 'El Corazón', 28),
(948, 'Las Independencias', 28),
(949, 'Nuevos Conquistadores', 28),
(950, 'El Salado', 28),
(951, 'Eduardo Santos', 28),
(952, 'Peñitas', 28),
(953, 'Antonio Nariño', 28),
(954, 'El Socorro', 28),
(955, 'Calasania', 28),
(956, 'Castropol', 28),
(957, 'Barrio Colombia', 28),
(958, 'Villa Carlota', 28),
(959, 'Lalinde', 28),
(960, 'Manila', 28),
(961, 'Las Lomas Nº 1', 28),
(962, 'Las Lomas Nº 2', 28),
(963, 'Altos del Poblado', 28),
(964, 'El Tesoro', 28),
(965, 'Los Naranjos', 28),
(966, 'Los Balsos Nº 1', 28),
(967, 'Los Balsos Nº 2', 28),
(968, 'San Lucas', 28),
(969, 'El Diamante', 28),
(970, 'El Castillo', 28),
(971, 'Alejandría', 28),
(972, 'La Florida', 28),
(973, 'El Poblado', 28),
(974, 'Astorga', 28),
(975, 'Patio Bonito', 28),
(976, 'La Aguacatala', 28),
(977, 'Santa María de Los Ángeles', 28),
(978, 'Tenche', 28),
(979, 'Trinidad', 28),
(980, 'Santa Fe', 28),
(981, 'Campo Amor', 28),
(982, 'Cristo Rey', 28),
(983, 'Guayabal', 28),
(984, 'La Colina', 28),
(985, 'Belén', 28),
(986, 'Cerro Nutibara', 28),
(987, 'Fátima', 28),
(988, 'Rosales', 28),
(989, 'Granada', 28),
(990, 'San Bernardo', 28),
(991, 'Las Playas', 28),
(992, 'Diego Echavarria', 28),
(993, 'La Mota', 28),
(994, 'El Rincón', 28),
(995, 'La Hondonada', 28),
(996, 'La Loma de Los Bernal', 28),
(997, 'La Gloria', 28),
(998, 'Altavista', 28),
(999, 'La Palma', 28),
(1000, 'Zafra', 28),
(1001, 'Los Alpes', 28),
(1002, 'Las Violetas', 28),
(1003, 'Las Mercedes', 28),
(1004, 'Nueva Villa de Aburrá', 28),
(1005, 'Miravalle', 28),
(1006, 'El Nogal – Los Almendros', 28),
(1007, 'Source: Alcaldía de Medellín', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Compras`
--

DROP TABLE IF EXISTS `Compras`;
CREATE TABLE IF NOT EXISTS `Compras` (
  `Id_compras` int(11) NOT NULL,
  `Id_almacenCompras` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `EstadoCivil`
--

DROP TABLE IF EXISTS `EstadoCivil`;
CREATE TABLE IF NOT EXISTS `EstadoCivil` (
  `Id_estadoCivil` int(11) NOT NULL,
  `Id_nombreEstadoC` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `EstadoCivil`
--

INSERT INTO `EstadoCivil` (`Id_estadoCivil`, `Id_nombreEstadoC`) VALUES
(1, 'Casado'),
(2, 'Soltero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FinanciacionEstudios`
--

DROP TABLE IF EXISTS `FinanciacionEstudios`;
CREATE TABLE IF NOT EXISTS `FinanciacionEstudios` (
  `Id_financiacionEstudio` int(11) NOT NULL,
  `Nombre_financiacionEstudio` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `FormacionAcademica`
--

DROP TABLE IF EXISTS `FormacionAcademica`;
CREATE TABLE IF NOT EXISTS `FormacionAcademica` (
  `Id_Academico` int(11) NOT NULL,
  `Id_nombreAcademico` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Frecuencia`
--

DROP TABLE IF EXISTS `Frecuencia`;
CREATE TABLE IF NOT EXISTS `Frecuencia` (
  `Id_frecuencia` int(11) NOT NULL,
  `Id_nombreFrecuencia` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Frecuencia`
--

INSERT INTO `Frecuencia` (`Id_frecuencia`, `Id_nombreFrecuencia`) VALUES
(1, 'Una vez a la semana'),
(2, 'Una vez al mes'),
(3, 'Una vez cada 3 meses'),
(4, 'Una vez cada 6 meses'),
(5, 'No lo hago'),
(6, 'Diario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Genero`
--

DROP TABLE IF EXISTS `Genero`;
CREATE TABLE IF NOT EXISTS `Genero` (
  `Id_genero` int(11) NOT NULL,
  `Nombre_genero` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Genero`
--

INSERT INTO `Genero` (`Id_genero`, `Nombre_genero`) VALUES
(1, 'Femenino'),
(2, 'Masculino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Idioma`
--

DROP TABLE IF EXISTS `Idioma`;
CREATE TABLE IF NOT EXISTS `Idioma` (
  `Id_idioma` int(11) NOT NULL,
  `Nombre_idiomao` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Idioma`
--

INSERT INTO `Idioma` (`Id_idioma`, `Nombre_idiomao`) VALUES
(1, 'Español'),
(2, 'Ingles'),
(3, 'Portugués '),
(4, 'Frances'),
(5, 'Alemán');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mascotas`
--

DROP TABLE IF EXISTS `Mascotas`;
CREATE TABLE IF NOT EXISTS `Mascotas` (
  `Id_mascotas` int(11) NOT NULL,
  `Id_tipoMascota` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Municipio`
--

DROP TABLE IF EXISTS `Municipio`;
CREATE TABLE IF NOT EXISTS `Municipio` (
  `Id_municipio` int(11) NOT NULL,
  `Nombre_municipio` varchar(12) NOT NULL,
  `Fk_id_sede` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Municipio`
--

INSERT INTO `Municipio` (`Id_municipio`, `Nombre_municipio`, `Fk_id_sede`) VALUES
(1, 'Bogotá', 1),
(2, 'Bojacá', 1),
(3, 'Cajicá', 1),
(4, 'Chía', 1),
(5, 'Cota', 1),
(6, 'El Rosal', 1),
(7, 'Facatativá', 1),
(8, 'Funza', 1),
(9, 'Gachancipá', 1),
(10, 'La Calera', 1),
(11, 'Madrid', 1),
(12, 'Mosquera', 1),
(13, 'Sibaté', 1),
(14, 'Soacha', 1),
(15, 'Sopó', 1),
(16, 'Tabio', 1),
(17, 'Tenjo', 1),
(18, 'Tocancipá', 1),
(19, 'Zipaquirá', 1),
(20, 'Barbosa', 2),
(21, 'Bello', 2),
(22, 'Caldas', 2),
(23, 'Copacabana', 2),
(24, 'Envigado', 2),
(25, 'Girardota', 2),
(26, 'Itagüí', 2),
(27, 'La Estrella', 2),
(28, 'Medellín', 2),
(29, 'Sabaneta', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Musica`
--

DROP TABLE IF EXISTS `Musica`;
CREATE TABLE IF NOT EXISTS `Musica` (
  `Id_musica` int(11) NOT NULL,
  `Id_generoMusica` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Nivelidioma`
--

DROP TABLE IF EXISTS `Nivelidioma`;
CREATE TABLE IF NOT EXISTS `Nivelidioma` (
  `Id_nivelidioma` int(11) NOT NULL,
  `Id_nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Perfil`
--

DROP TABLE IF EXISTS `Perfil`;
CREATE TABLE IF NOT EXISTS `Perfil` (
  `Id_perfil` int(11) NOT NULL,
  `Nombre_perfil` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Perfil`
--

INSERT INTO `Perfil` (`Id_perfil`, `Nombre_perfil`) VALUES
(1, 'Administrador'),
(2, 'Persona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Personal_almacontact`
--

DROP TABLE IF EXISTS `Personal_almacontact`;
CREATE TABLE IF NOT EXISTS `Personal_almacontact` (
  `AutorizaTratamientoDatos` varchar(2) NOT NULL,
  `Fk_TipoDocumento` int(11) NOT NULL,
  `Pk_NumeroDocumento` varchar(15) NOT NULL,
  `fechaExpedicion` varchar(20) NOT NULL,
  `lugarDeExpedicion` varchar(20) NOT NULL,
  `PrimerApellido` varchar(60) NOT NULL,
  `SegundoApellido` varchar(60) NOT NULL,
  `PrimerNombre` varchar(60) NOT NULL,
  `SegundoNombre` varchar(60) DEFAULT NULL,
  `Fk_Sede` int(11) NOT NULL,
  `Fk_Area` int(11) NOT NULL,
  `Fk_TipoVia` int(11) NOT NULL,
  `NumeroVia` varchar(30) NOT NULL,
  `Guion` varchar(5) NOT NULL,
  `Interior` varchar(40) DEFAULT NULL,
  `MunicipioResidencia` varchar(80) NOT NULL,
  `Barrios` int(80) NOT NULL,
  `Telefonofijo` bigint(15) DEFAULT NULL,
  `Movil` bigint(15) NOT NULL,
  `TelefonoEmergencia` varchar(15) NOT NULL,
  `CorreoElectronico` varchar(50) NOT NULL,
  `FechaNacimiento` date NOT NULL,
  `lugarNacimiento` varchar(50) NOT NULL,
  `estadoCivil` varchar(20) NOT NULL,
  `Fk_Genero` int(11) NOT NULL,
  `Fk_Idioma` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Personal_almacontact`
--

INSERT INTO `Personal_almacontact` (`AutorizaTratamientoDatos`, `Fk_TipoDocumento`, `Pk_NumeroDocumento`, `fechaExpedicion`, `lugarDeExpedicion`, `PrimerApellido`, `SegundoApellido`, `PrimerNombre`, `SegundoNombre`, `Fk_Sede`, `Fk_Area`, `Fk_TipoVia`, `NumeroVia`, `Guion`, `Interior`, `MunicipioResidencia`, `Barrios`, `Telefonofijo`, `Movil`, `TelefonoEmergencia`, `CorreoElectronico`, `FechaNacimiento`, `lugarNacimiento`, `estadoCivil`, `Fk_Genero`, `Fk_Idioma`) VALUES
('si', 2, '1000565350', '2019-06-27', 'itagui', 'ceballos', 'deossa', 'santiago', '', 2, 15, 1, '46c # 68-84', '-', '234', '21', 424, 4811590, 30257505, '3197846786', 'santiceballos@gmail', '2001-06-13', 'medellin', '1', 1, 'Español,Portugués ,'),
('si', 1, '1000565352', '2019-06-27', 'itagui', 'ceballos', 'deossa', 'santiago', '', 2, 15, 3, 'fg # 45', '-', '234', '25', 646, 4811590, 30257505, '3197846786', 'santiceballos@gmail', '2003-12-01', 'medellin', '1', 1, 'Frances,Alemán,'),
('si', 1, '1000565359', '2019-06-27', 'itagui', 'ceballos', 'deossa', 'santiago', '', 2, 15, 1, '46c # 68-84', '-', '234', '21', 424, 4811590, 30257505, '3197846786', 'santiceballos@gmail', '2001-06-13', 'medellin', '1', 1, 'Español,Alemán,');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PreguntaBool`
--

DROP TABLE IF EXISTS `PreguntaBool`;
CREATE TABLE IF NOT EXISTS `PreguntaBool` (
  `Id_Pregunta` int(11) NOT NULL,
  `Id_RespuestaPregunta` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `PreguntaBool`
--

INSERT INTO `PreguntaBool` (`Id_Pregunta`, `Id_RespuestaPregunta`) VALUES
(1, 'Si'),
(2, 'No');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Restaurante`
--

DROP TABLE IF EXISTS `Restaurante`;
CREATE TABLE IF NOT EXISTS `Restaurante` (
  `Id_restaurante` int(11) NOT NULL,
  `id_nombreRestaurante` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Sede`
--

DROP TABLE IF EXISTS `Sede`;
CREATE TABLE IF NOT EXISTS `Sede` (
  `Id_sede` int(11) NOT NULL,
  `Nombre_sede` varchar(12) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Sede`
--

INSERT INTO `Sede` (`Id_sede`, `Nombre_sede`) VALUES
(1, 'Bogota'),
(2, 'Sabaneta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoAlimentacion`
--

DROP TABLE IF EXISTS `TipoAlimentacion`;
CREATE TABLE IF NOT EXISTS `TipoAlimentacion` (
  `Id_tipoAlimentacion` int(11) NOT NULL,
  `Nombre_tipoAlimentacion` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoArea`
--

DROP TABLE IF EXISTS `TipoArea`;
CREATE TABLE IF NOT EXISTS `TipoArea` (
  `Id_area` int(11) NOT NULL,
  `Nombre_area` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TipoArea`
--

INSERT INTO `TipoArea` (`Id_area`, `Nombre_area`) VALUES
(1, 'LATAM Medellín'),
(2, 'LATAM Bogotá'),
(3, 'Claro Premium'),
(4, 'Claro Swat'),
(5, 'Claro TMk Medellín'),
(6, 'Claro TMK Bogotá'),
(7, 'LEAL'),
(8, 'Samsung'),
(9, 'Fundación Social'),
(10, 'Shopee'),
(11, 'Dirección General'),
(12, 'Dirección Comercial'),
(13, 'Implementación'),
(14, 'Planeación'),
(15, 'Reporting'),
(16, 'Operaciones'),
(17, 'Formación'),
(18, 'Calidad'),
(19, 'Gestión Humana'),
(20, 'Tecnología Información'),
(21, 'Infraestructura y Seguridad Física'),
(22, 'Financiera & Compras'),
(23, 'Sistema Integrado de Gestion de la Calidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoDocumento`
--

DROP TABLE IF EXISTS `TipoDocumento`;
CREATE TABLE IF NOT EXISTS `TipoDocumento` (
  `Id_tipo_documento` int(11) NOT NULL,
  `Nombre_tipo_documento` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TipoDocumento`
--

INSERT INTO `TipoDocumento` (`Id_tipo_documento`, `Nombre_tipo_documento`) VALUES
(1, 'Cedula ciudadanía'),
(2, 'Tarjeta de Identidad'),
(3, 'Permisos de trabajo'),
(4, 'Cedula extranjería');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoRegistro`
--

DROP TABLE IF EXISTS `TipoRegistro`;
CREATE TABLE IF NOT EXISTS `TipoRegistro` (
  `Id_tipo_registro` int(11) NOT NULL,
  `Nombre_tipo_registro` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoVia`
--

DROP TABLE IF EXISTS `TipoVia`;
CREATE TABLE IF NOT EXISTS `TipoVia` (
  `Id_tipo_via` int(11) NOT NULL,
  `Nombre_tipo_via` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `TipoVia`
--

INSERT INTO `TipoVia` (`Id_tipo_via`, `Nombre_tipo_via`) VALUES
(1, 'Avenida'),
(2, 'Calle'),
(3, 'Circular'),
(4, 'Diagonal'),
(5, 'Tramo'),
(6, 'Trasversal'),
(7, 'Carrera'),
(8, 'Circunvalar'),
(9, 'Manzana'),
(10, 'Vía'),
(11, 'Avenida carrera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `TipoVivienda`
--

DROP TABLE IF EXISTS `TipoVivienda`;
CREATE TABLE IF NOT EXISTS `TipoVivienda` (
  `Id_vivienda` int(11) NOT NULL,
  `Id_nombreVivienda` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Transporte`
--

DROP TABLE IF EXISTS `Transporte`;
CREATE TABLE IF NOT EXISTS `Transporte` (
  `Id_Transporte` int(11) NOT NULL,
  `Id_NombreTransporte` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `Transporte`
--

INSERT INTO `Transporte` (`Id_Transporte`, `Id_NombreTransporte`) VALUES
(1, 'Carro'),
(2, 'Moto'),
(3, 'Transporte publico'),
(4, 'bicicleta');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `AcademicaActual`
--
ALTER TABLE `AcademicaActual`
  ADD PRIMARY KEY (`Id_academicaA`);

--
-- Indices de la tabla `Actividades`
--
ALTER TABLE `Actividades`
  ADD PRIMARY KEY (`Id_actividades`);

--
-- Indices de la tabla `Alimentacion`
--
ALTER TABLE `Alimentacion`
  ADD PRIMARY KEY (`Id_Alimentacion`);

--
-- Indices de la tabla `Barrio`
--
ALTER TABLE `Barrio`
  ADD PRIMARY KEY (`Id_barrio`),
  ADD KEY `Barrio_ibfk_1` (`Fk_id_municipio`);

--
-- Indices de la tabla `Compras`
--
ALTER TABLE `Compras`
  ADD PRIMARY KEY (`Id_compras`);

--
-- Indices de la tabla `EstadoCivil`
--
ALTER TABLE `EstadoCivil`
  ADD PRIMARY KEY (`Id_estadoCivil`);

--
-- Indices de la tabla `FinanciacionEstudios`
--
ALTER TABLE `FinanciacionEstudios`
  ADD PRIMARY KEY (`Id_financiacionEstudio`);

--
-- Indices de la tabla `FormacionAcademica`
--
ALTER TABLE `FormacionAcademica`
  ADD PRIMARY KEY (`Id_Academico`);

--
-- Indices de la tabla `Frecuencia`
--
ALTER TABLE `Frecuencia`
  ADD PRIMARY KEY (`Id_frecuencia`);

--
-- Indices de la tabla `Genero`
--
ALTER TABLE `Genero`
  ADD PRIMARY KEY (`Id_genero`);

--
-- Indices de la tabla `Idioma`
--
ALTER TABLE `Idioma`
  ADD PRIMARY KEY (`Id_idioma`);

--
-- Indices de la tabla `Municipio`
--
ALTER TABLE `Municipio`
  ADD PRIMARY KEY (`Id_municipio`),
  ADD KEY `Fk_id_sede` (`Fk_id_sede`);

--
-- Indices de la tabla `Musica`
--
ALTER TABLE `Musica`
  ADD PRIMARY KEY (`Id_musica`);

--
-- Indices de la tabla `Perfil`
--
ALTER TABLE `Perfil`
  ADD PRIMARY KEY (`Id_perfil`);

--
-- Indices de la tabla `Personal_almacontact`
--
ALTER TABLE `Personal_almacontact`
  ADD PRIMARY KEY (`Pk_NumeroDocumento`),
  ADD KEY `Fk_Idioma` (`Fk_Idioma`),
  ADD KEY `Personal_almacontact_ibfk_1` (`Fk_TipoDocumento`),
  ADD KEY `Personal_almacontact_ibfk_2` (`Fk_Area`),
  ADD KEY `Personal_almacontact_ibfk_3` (`Fk_TipoVia`),
  ADD KEY `Personal_almacontact_ibfk_4` (`Fk_Sede`),
  ADD KEY `Personal_almacontact_ibfk_5` (`Fk_Genero`);

--
-- Indices de la tabla `PreguntaBool`
--
ALTER TABLE `PreguntaBool`
  ADD PRIMARY KEY (`Id_Pregunta`);

--
-- Indices de la tabla `Sede`
--
ALTER TABLE `Sede`
  ADD PRIMARY KEY (`Id_sede`);

--
-- Indices de la tabla `TipoAlimentacion`
--
ALTER TABLE `TipoAlimentacion`
  ADD PRIMARY KEY (`Id_tipoAlimentacion`);

--
-- Indices de la tabla `TipoArea`
--
ALTER TABLE `TipoArea`
  ADD PRIMARY KEY (`Id_area`);

--
-- Indices de la tabla `TipoDocumento`
--
ALTER TABLE `TipoDocumento`
  ADD PRIMARY KEY (`Id_tipo_documento`);

--
-- Indices de la tabla `TipoRegistro`
--
ALTER TABLE `TipoRegistro`
  ADD PRIMARY KEY (`Id_tipo_registro`);

--
-- Indices de la tabla `TipoVia`
--
ALTER TABLE `TipoVia`
  ADD PRIMARY KEY (`Id_tipo_via`);

--
-- Indices de la tabla `TipoVivienda`
--
ALTER TABLE `TipoVivienda`
  ADD PRIMARY KEY (`Id_vivienda`);

--
-- Indices de la tabla `Transporte`
--
ALTER TABLE `Transporte`
  ADD PRIMARY KEY (`Id_Transporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `AcademicaActual`
--
ALTER TABLE `AcademicaActual`
  MODIFY `Id_academicaA` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Actividades`
--
ALTER TABLE `Actividades`
  MODIFY `Id_actividades` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Alimentacion`
--
ALTER TABLE `Alimentacion`
  MODIFY `Id_Alimentacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Barrio`
--
ALTER TABLE `Barrio`
  MODIFY `Id_barrio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1008;
--
-- AUTO_INCREMENT de la tabla `Compras`
--
ALTER TABLE `Compras`
  MODIFY `Id_compras` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `EstadoCivil`
--
ALTER TABLE `EstadoCivil`
  MODIFY `Id_estadoCivil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `FinanciacionEstudios`
--
ALTER TABLE `FinanciacionEstudios`
  MODIFY `Id_financiacionEstudio` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `FormacionAcademica`
--
ALTER TABLE `FormacionAcademica`
  MODIFY `Id_Academico` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Frecuencia`
--
ALTER TABLE `Frecuencia`
  MODIFY `Id_frecuencia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `Genero`
--
ALTER TABLE `Genero`
  MODIFY `Id_genero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Idioma`
--
ALTER TABLE `Idioma`
  MODIFY `Id_idioma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `Municipio`
--
ALTER TABLE `Municipio`
  MODIFY `Id_municipio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT de la tabla `Musica`
--
ALTER TABLE `Musica`
  MODIFY `Id_musica` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Perfil`
--
ALTER TABLE `Perfil`
  MODIFY `Id_perfil` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `PreguntaBool`
--
ALTER TABLE `PreguntaBool`
  MODIFY `Id_Pregunta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `Sede`
--
ALTER TABLE `Sede`
  MODIFY `Id_sede` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `TipoAlimentacion`
--
ALTER TABLE `TipoAlimentacion`
  MODIFY `Id_tipoAlimentacion` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TipoArea`
--
ALTER TABLE `TipoArea`
  MODIFY `Id_area` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT de la tabla `TipoDocumento`
--
ALTER TABLE `TipoDocumento`
  MODIFY `Id_tipo_documento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `TipoRegistro`
--
ALTER TABLE `TipoRegistro`
  MODIFY `Id_tipo_registro` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `TipoVia`
--
ALTER TABLE `TipoVia`
  MODIFY `Id_tipo_via` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `TipoVivienda`
--
ALTER TABLE `TipoVivienda`
  MODIFY `Id_vivienda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `Transporte`
--
ALTER TABLE `Transporte`
  MODIFY `Id_Transporte` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Barrio`
--
ALTER TABLE `Barrio`
  ADD CONSTRAINT `Barrio_ibfk_1` FOREIGN KEY (`Fk_id_municipio`) REFERENCES `Municipio` (`Id_municipio`);

--
-- Filtros para la tabla `Municipio`
--
ALTER TABLE `Municipio`
  ADD CONSTRAINT `Municipio_ibfk_1` FOREIGN KEY (`Fk_id_sede`) REFERENCES `Sede` (`Id_sede`);

--
-- Filtros para la tabla `Personal_almacontact`
--
ALTER TABLE `Personal_almacontact`
  ADD CONSTRAINT `Personal_almacontact_ibfk_1` FOREIGN KEY (`Fk_TipoDocumento`) REFERENCES `TipoDocumento` (`Id_tipo_documento`),
  ADD CONSTRAINT `Personal_almacontact_ibfk_2` FOREIGN KEY (`Fk_Area`) REFERENCES `TipoArea` (`Id_area`),
  ADD CONSTRAINT `Personal_almacontact_ibfk_3` FOREIGN KEY (`Fk_TipoVia`) REFERENCES `TipoVia` (`Id_tipo_via`),
  ADD CONSTRAINT `Personal_almacontact_ibfk_4` FOREIGN KEY (`Fk_Sede`) REFERENCES `Sede` (`Id_sede`),
  ADD CONSTRAINT `Personal_almacontact_ibfk_5` FOREIGN KEY (`Fk_Genero`) REFERENCES `Genero` (`Id_genero`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
