-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-03-2024 a las 15:54:31
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
-- Base de datos: `hubdyd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion`
--

CREATE TABLE `descripcion` (
  `descripcion` int(8) UNSIGNED NOT NULL,
  `ideales` text DEFAULT NULL,
  `idiomas` text DEFAULT NULL,
  `competencias` text DEFAULT NULL,
  `vinculos` text DEFAULT NULL,
  `defectos` text DEFAULT NULL,
  `personalidad` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estadisticas`
--

CREATE TABLE `estadisticas` (
  `estadisticas` int(8) UNSIGNED NOT NULL,
  `fuerza` int(2) NOT NULL,
  `destreza` int(2) NOT NULL,
  `constitucion` int(2) NOT NULL,
  `inteligencia` int(2) NOT NULL,
  `sabiduria` int(2) NOT NULL,
  `carisma` int(2) NOT NULL,
  `defensa` int(2) UNSIGNED NOT NULL,
  `velocidad` int(2) NOT NULL,
  `vida` int(3) UNSIGNED NOT NULL,
  `nivel` int(2) UNSIGNED NOT NULL,
  `bonus_de_competencia` int(2) UNSIGNED NOT NULL,
  `sabiduria_pasiva` int(2) UNSIGNED NOT NULL,
  `iniciativa` int(2) UNSIGNED NOT NULL,
  `inspiracion` int(1) UNSIGNED NOT NULL,
  `vida_temporal` int(3) UNSIGNED NOT NULL,
  `dado_de_golpe` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha`
--

CREATE TABLE `ficha` (
  `ID_F` int(8) UNSIGNED NOT NULL,
  `ID_U` int(8) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `raza` varchar(30) NOT NULL,
  `subraza` varchar(30) DEFAULT NULL,
  `clase` varchar(30) NOT NULL,
  `subclase` int(30) DEFAULT NULL,
  `rasgos` text NOT NULL,
  `equipamiento_secundario` text NOT NULL,
  `hechizos` text DEFAULT NULL,
  `equipamiento` text NOT NULL,
  `TSExito` int(1) NOT NULL,
  `TSFallo` int(1) NOT NULL,
  `descripcion` int(8) UNSIGNED NOT NULL,
  `habilidades` int(8) UNSIGNED NOT NULL,
  `estadisticas` int(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habilidades`
--

CREATE TABLE `habilidades` (
  `habilidades` int(8) UNSIGNED NOT NULL,
  `acrobacias` int(2) NOT NULL,
  `manejo_de_animales` int(2) NOT NULL,
  `arcana` int(2) NOT NULL,
  `atletismo` int(2) NOT NULL,
  `engaño` int(2) NOT NULL,
  `historia` int(2) NOT NULL,
  `conocimiento` int(2) NOT NULL,
  `intimidacion` int(2) NOT NULL,
  `investigacion` int(2) NOT NULL,
  `medicina` int(2) NOT NULL,
  `naturaleza` int(2) NOT NULL,
  `percepcion` int(2) NOT NULL,
  `actuacion` int(2) NOT NULL,
  `persuasion` int(2) NOT NULL,
  `religion` int(2) NOT NULL,
  `juego_de_manos` int(2) NOT NULL,
  `sigilo` int(2) NOT NULL,
  `supervivencia` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_U` int(8) UNSIGNED NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `contraseña` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `descripcion`
--
ALTER TABLE `descripcion`
  ADD PRIMARY KEY (`descripcion`);

--
-- Indices de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  ADD PRIMARY KEY (`estadisticas`);

--
-- Indices de la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD PRIMARY KEY (`ID_F`),
  ADD UNIQUE KEY `ID_U` (`ID_U`),
  ADD UNIQUE KEY `descripcion` (`descripcion`),
  ADD UNIQUE KEY `habilidades` (`habilidades`),
  ADD KEY `estadisticas` (`estadisticas`);

--
-- Indices de la tabla `habilidades`
--
ALTER TABLE `habilidades`
  ADD PRIMARY KEY (`habilidades`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_U`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estadisticas`
--
ALTER TABLE `estadisticas`
  MODIFY `estadisticas` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ficha`
--
ALTER TABLE `ficha`
  MODIFY `ID_F` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_U` int(8) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ficha`
--
ALTER TABLE `ficha`
  ADD CONSTRAINT `ficha_ibfk_1` FOREIGN KEY (`descripcion`) REFERENCES `descripcion` (`descripcion`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_ibfk_2` FOREIGN KEY (`estadisticas`) REFERENCES `estadisticas` (`estadisticas`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ficha_ibfk_3` FOREIGN KEY (`habilidades`) REFERENCES `habilidades` (`habilidades`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `crea` FOREIGN KEY (`ID_U`) REFERENCES `ficha` (`ID_U`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
