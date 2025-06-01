-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2025 a las 21:45:19
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `consultorio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `usuario`, `contrasena`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cita`
--

CREATE TABLE `cita` (
  `fecha` datetime NOT NULL,
  `motivo` varchar(255) NOT NULL,
  `estado` varchar(25) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cita`
--

INSERT INTO `cita` (`fecha`, `motivo`, `estado`, `id_medico`, `id_paciente`) VALUES
('2025-05-20 09:30:00', 'Fiebra alta y dificultad para respirar', 'Pendiente', 2, 2),
('2025-05-20 14:00:00', 'Manchas en la piel y malestar general', 'Pendiente', 2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medico`
--

CREATE TABLE `medico` (
  `id_usuario` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `consulta` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `medico`
--

INSERT INTO `medico` (`id_usuario`, `dni`, `nombre`, `usuario`, `contrasena`, `correo`, `telefono`, `especialidad`, `consulta`) VALUES
(1, '12345678Z', 'Laura Martínez Gómez', 'lmg95', 'c4ca4238a0b923820dcc509a6f75849b', 'laura.martinez@logrosalud.es', '612345678', 'Medicina Familiar', '22'),
(2, '72839415M', 'Javier Sáenz Gómez', 'jsaenz', 'c4ca4238a0b923820dcc509a6f75849b', 'javier.saenz@logrosalud.es', '617123456', 'Pediatría', '202'),
(3, '29485736J', 'María Ruiz Fernández', 'mruiz', '24da209328b68134a2c08c3db4c5f50e', 'maria.ruiz@logrosalud.es', '941876543', 'Medicina Familiar', '305'),
(4, '50938472L', 'Pablo Torres Salas', 'ptorres', 'c9ab03e15aecc925b402ce70d9e90642', 'pablo.torres@logrosalud.es', '617654321', 'Otorrinolaringología', '110'),
(5, '18372645S', 'Carmen Pérez Alonso', 'cperez', '82d30b626086f0a6142863d50b1f8357', 'carmen.perez@logrosalud.es', '941345678', 'Enfermería', '215'),
(6, '28765432H', 'Beatriz López Jiménez', 'blopez', 'f617762c62db1fe39c38eab08e749051', 'beatriz.lopez@logrosalud.es', '941112233', 'Pediatría', '120'),
(7, '45673829P', 'Sergio Ramírez Castillo', 'sramirez', 'd065fd071524cd8f9caf9d6d966b9b16', 'sergio.ramirez@logrosalud.es', '617987654', 'Otorrinolaringología', '208'),
(8, '32918756R', 'Elena Torres Villalba', 'etorres', '08a4665fb3658019b3661e7268bc3ec9', 'elena.torres@logrosalud.es', '941556778', 'Medicina Familiar', '214');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id_usuario` int(11) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id_usuario`, `dni`, `nombre`, `usuario`, `contrasena`, `correo`, `telefono`, `fecha_nac`) VALUES
(1, '48572916T', 'Marta López Sánchez', 'marta.lopez87', 'c4ca4238a0b923820dcc509a6f75849b', 'marta.lopez87@gmail.com', '654321987', '1992-05-08'),
(2, '12345678Z', 'Sergio Morales García', 'sergiii88', 'c4ca4238a0b923820dcc509a6f75849b', 'sm0112@gmail.com', '678123456', '1988-03-22'),
(3, '98765432L', 'Lucía Fernández Ruiz', 'luciafr98', 'c4ca4238a0b923820dcc509a6f75849b', 'lucia.fr98@gmail.com', '612345678', '1998-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`id_solicitud`, `id_paciente`, `id_medico`, `descripcion`, `fecha`) VALUES
(4, 2, 2, 'Dificultad para respirar, seguimiento antibióticos', '2025-05-22 12:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `cita`
--
ALTER TABLE `cita`
  ADD PRIMARY KEY (`fecha`,`id_paciente`,`id_medico`),
  ADD KEY `id_medico_idx` (`id_medico`),
  ADD KEY `id_paciente_idx` (`id_paciente`);

--
-- Indices de la tabla `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id_usuario`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_solicitud`),
  ADD KEY `id_paciente` (`id_paciente`),
  ADD KEY `id_medico` (`id_medico`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `medico`
--
ALTER TABLE `medico`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_solicitud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cita`
--
ALTER TABLE `cita`
  ADD CONSTRAINT `FK_med` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_usuario`),
  ADD CONSTRAINT `FK_pac` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_usuario`);

--
-- Filtros para la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD CONSTRAINT `solicitud_ibfk_1` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_usuario`),
  ADD CONSTRAINT `solicitud_ibfk_2` FOREIGN KEY (`id_medico`) REFERENCES `medico` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
