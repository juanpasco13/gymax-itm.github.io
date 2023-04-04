-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-04-2023 a las 05:19:31
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gymax`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` varchar(60) NOT NULL,
  `user_name` varchar(15) NOT NULL,
  `password` varchar(60) NOT NULL,
  `date_created` datetime NOT NULL,
  `last_con` datetime DEFAULT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user_name`, `password`, `date_created`, `last_con`, `name`, `email`) VALUES
('642a113027449', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2023-04-02 18:00:00', '2023-04-02 18:00:00', ' Administrator', ''),
('642a4352e4766', 'asdasd', 'cce492688e30ea1eeaaa637df7e44eed', '2023-04-02 10:04:06', '2023-04-02 10:04:06', ' Probando', 'asdasd@gmail.com'),
('642a44230289a', 'jgarcia', 'e19d5cd5af0378da05f63f891c7467af', '2023-04-02 10:04:35', '2023-04-03 21:26:47', ' Juan Pablo Garcia D', 'juan@juan.com'),
('642a469eb9629', 'prueba', 'e19d5cd5af0378da05f63f891c7467af', '2023-04-02 10:04:10', '2023-04-02 11:20:25', ' prueba1', 'prueba@prueba.com'),
('642a470e67aab', 'prueba2', 'e19d5cd5af0378da05f63f891c7467af', '2023-04-02 10:04:02', '2023-04-02 10:04:02', 'prueba2', 'prueba2@prueba2.com'),
('642a477a3266f', 'prueab3', 'e19d5cd5af0378da05f63f891c7467af', '2023-04-02 10:26:50', '2023-04-02 10:26:50', 'Preuab3', 'prueba@prueba.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
