-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-04-2018 a las 20:21:02
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cazada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`Usuario`, `Password`, `Mail`) VALUES
('Admin1', '1234', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID_Alumno` int(5) NOT NULL,
  `ID_Clase` int(11) NOT NULL,
  `Padre` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Asignaturas` varchar(400) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID_Alumno`, `ID_Clase`, `Padre`, `Nombre`, `Apellidos`, `Asignaturas`) VALUES
(5942, 1, '49268543X', 'Jacinto', 'perez Pacuito', '1,2,3,4,8,9,10,11,12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignaturas`
--

CREATE TABLE `asignaturas` (
  `ID_Asig` int(11) NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `asignaturas`
--

INSERT INTO `asignaturas` (`ID_Asig`, `Nombre`) VALUES
(1, 'Lengua y Literatura'),
(2, 'Matemáticas'),
(3, 'Educación física'),
(4, 'Ciencias sociales'),
(5, 'Ciencias naturales'),
(6, 'Física'),
(7, 'Química'),
(8, 'Música'),
(9, 'Educación plástica'),
(10, 'Inglés'),
(11, 'Francés'),
(12, 'Religión'),
(13, 'Estudio'),
(14, 'Ética'),
(15, 'Filosofía'),
(16, 'Economía');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clases`
--

CREATE TABLE `clases` (
  `ID_Clase` int(11) NOT NULL,
  `Tutor` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Turno` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Clase` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clases`
--

INSERT INTO `clases` (`ID_Clase`, `Tutor`, `Turno`, `Clase`) VALUES
(1, '74125968H', 'diurno', '1º A - ESO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltas`
--

CREATE TABLE `faltas` (
  `ID_Alumno` int(5) NOT NULL,
  `ID_Asig` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Estado` varchar(25) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `faltas`
--

INSERT INTO `faltas` (`ID_Alumno`, `ID_Asig`, `Fecha`, `Estado`) VALUES
(5942, 2, '2018-04-08', 'F'),
(5942, 4, '2018-04-05', 'R');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `ID_Alumno` int(5) NOT NULL,
  `ID_Clase` int(11) NOT NULL,
  `ID_Asig` int(11) NOT NULL,
  `Nota` double DEFAULT NULL,
  `Evaluacion` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`ID_Alumno`, `ID_Clase`, `ID_Asig`, `Nota`, `Evaluacion`) VALUES
(5942, 1, 1, 7, 1),
(5942, 1, 2, 3.7, 1),
(5942, 1, 3, 4.8, 1),
(5942, 1, 4, 5.4, 1),
(5942, 1, 10, 9.8, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE `padres` (
  `Usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Alumnos` varchar(400) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`Usuario`, `Password`, `Mail`, `Nombre`, `Apellidos`, `Alumnos`) VALUES
('49268543X', '1234', 'padre1@gmail.com', 'Papa', 'papito papi', '5942');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `Usuario` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `Password` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Mail` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Nombre` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `Apellidos` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `Tutoria` int(11) DEFAULT NULL,
  `Clases` varchar(400) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`Usuario`, `Password`, `Mail`, `Nombre`, `Apellidos`, `Tutoria`, `Clases`) VALUES
('74125968H', '1234', 'profe@gmail.com', 'Profee', 'Maestro teacher', 1, '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`Usuario`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID_Alumno`,`ID_Clase`),
  ADD KEY `ID_Clase` (`ID_Clase`),
  ADD KEY `Padre` (`Padre`);

--
-- Indices de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  ADD PRIMARY KEY (`ID_Asig`);

--
-- Indices de la tabla `clases`
--
ALTER TABLE `clases`
  ADD PRIMARY KEY (`ID_Clase`),
  ADD KEY `Tutor` (`Tutor`);

--
-- Indices de la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD PRIMARY KEY (`ID_Alumno`,`ID_Asig`,`Fecha`),
  ADD KEY `ID_Asig` (`ID_Asig`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`ID_Alumno`,`ID_Clase`,`ID_Asig`),
  ADD KEY `ID_Asig` (`ID_Asig`);

--
-- Indices de la tabla `padres`
--
ALTER TABLE `padres`
  ADD PRIMARY KEY (`Usuario`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`Usuario`),
  ADD KEY `Tutoria` (`Tutoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asignaturas`
--
ALTER TABLE `asignaturas`
  MODIFY `ID_Asig` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `clases`
--
ALTER TABLE `clases`
  MODIFY `ID_Clase` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`ID_Clase`) REFERENCES `clases` (`ID_Clase`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`Padre`) REFERENCES `padres` (`Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `clases`
--
ALTER TABLE `clases`
  ADD CONSTRAINT `clases_ibfk_1` FOREIGN KEY (`Tutor`) REFERENCES `profesores` (`Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD CONSTRAINT `faltas_ibfk_1` FOREIGN KEY (`ID_Alumno`) REFERENCES `alumnos` (`ID_Alumno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faltas_ibfk_2` FOREIGN KEY (`ID_Asig`) REFERENCES `asignaturas` (`ID_Asig`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notas_ibfk_1` FOREIGN KEY (`ID_Alumno`,`ID_Clase`) REFERENCES `alumnos` (`ID_Alumno`, `ID_Clase`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notas_ibfk_2` FOREIGN KEY (`ID_Asig`) REFERENCES `asignaturas` (`ID_Asig`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_1` FOREIGN KEY (`Tutoria`) REFERENCES `clases` (`ID_Clase`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
