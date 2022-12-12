-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2022 a las 15:17:55
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `minnieperezbbdd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `childrenteeth`
--

CREATE TABLE `childrenteeth` (
  `id` int(11) NOT NULL,
  `childName` varchar(31) CHARACTER SET utf8mb4 NOT NULL,
  `age` int(11) NOT NULL,
  `place` varchar(31) CHARACTER SET utf8mb4 NOT NULL,
  `giftSuggestion` varchar(74) CHARACTER SET utf8mb4 NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `childrenteeth`
--

INSERT INTO `childrenteeth` (`id`, `childName`, `age`, `place`, `giftSuggestion`, `dateTime`) VALUES
(6, 'Halina', 8, 'At the dentist', 'One cat', '2022-12-11 16:25:40'),
(7, 'Oliver', 6, 'OliverÂ´s house', 'a car toy', '2022-12-11 16:29:07'),
(10, 'Andrea', 7, 'In Disneyland Paris', 'a book', '2022-12-11 16:42:27'),
(13, 'Mario', 7, 'at the conservatory', 'a football', '2022-12-11 16:50:04'),
(14, 'Helena', 6, 'playground', 'a camera', '2022-12-12 11:13:22'),
(15, 'Celia', 7, 'in the square', 'a book', '2022-12-12 11:16:12'),
(17, 'Elsa', 6, 'In the park', 'a doll', '2022-12-12 14:48:41'),
(18, 'Claudia', 7, 'in the countryside', 'A Mobile phone', '2022-12-12 14:49:48'),
(19, 'Oscar', 8, 'soccer field', 'A videogame', '2022-12-12 14:50:42');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `childrenteeth`
--
ALTER TABLE `childrenteeth`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `childrenteeth`
--
ALTER TABLE `childrenteeth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
