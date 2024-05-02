-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2024 a las 01:31:36
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
-- Base de datos: `chat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1622688038, 340066300, 'hola man'),
(2, 340066300, 1622688038, 'bien'),
(3, 1622688038, 340066300, 'hola'),
(4, 340066300, 1622688038, 'hola'),
(5, 440971576, 1622688038, 'hola pedro, necesito tu ayuda'),
(6, 1622688038, 440971576, 'hola Mauricio, claro, dime !!'),
(7, 440971576, 597926511, 'buenas tardes'),
(8, 597926511, 1117800153, 'oe'),
(9, 1117800153, 597926511, 'que mas mano?'),
(10, 133100475, 1026000794, 'hola amigita'),
(11, 1026000794, 133100475, 'muy bien ome'),
(12, 445964517, 133100475, 'oelo'),
(13, 907697725, 445964517, 'oelo'),
(14, 133100475, 445964517, 'que tal mano'),
(15, 445964517, 133100475, 'muy bien men'),
(16, 445964517, 504994474, 'oelo'),
(17, 504994474, 445964517, 'oe'),
(18, 445964517, 504994474, 'manito '),
(19, 597926511, 133100475, 'j'),
(20, 328288115, 133100475, 'g'),
(21, 328288115, 133100475, 'sd'),
(22, 328288115, 133100475, 'dsf'),
(23, 328288115, 133100475, 'acas'),
(24, 328288115, 133100475, 'sg'),
(25, 328288115, 133100475, 'dqw'),
(26, 328288115, 133100475, 'qwrqw'),
(27, 328288115, 133100475, 'gf'),
(28, 328288115, 133100475, 'sf'),
(29, 328288115, 133100475, 'asc'),
(30, 328288115, 133100475, 'as'),
(31, 328288115, 133100475, 'daw'),
(32, 328288115, 133100475, 'as'),
(33, 328288115, 133100475, 'dfb'),
(34, 328288115, 133100475, 'por fin esta listo moe'),
(35, 504994474, 133100475, 'dgf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `unique_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `grado` varchar(10) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `estado` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `grado`, `genero`, `estado`) VALUES
(4, 597926511, 'Felipe', 'Henao', 'kabskenowski@gmail.com', '25d55ad283aa400af464c76d713c07ad', '1713115705Captura de pantalla 2024-03-09 161033.png', 'Offline now', '', '', ''),
(5, 1117800153, 'yojhan', 'tejada', 'tejada123@gmail.com', '7d7cff625d305a2b406bd537cfc824ed', '1713115899wallpaperflare.com_wallpaper.jpg', 'Disponible', '', '', ''),
(6, 133100475, 'miriam', 'mr.pollas', 'miriam1234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '133100475.png', 'Disponible', '', '', 'Hola me gusta comer y lo mejor de todo es cuando me toca bañarme'),
(7, 1026000794, 'jonathan', 'henao', 'jonathan1234@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1713119297Captura de pantalla 2024-03-09 133859.png', 'Disponible', '', '', ''),
(8, 907697725, 'goez mario', 'goezgay123', 'goez123@gmail.com', '4c882dcb24bcb1bc225391a602feca7c', '1713120417Captura de pantalla 2024-04-08 180641.png', 'Offline now', '', '', ''),
(9, 445964517, 'cristian', 'Donpollo11', 'crstian123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1713120705Captura de pantalla 2024-04-08 192701.png', 'Disponible', '', '', ''),
(10, 504994474, 'santiago', 'mr.santiago', 'santiago123@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '1713121737Captura de pantalla 2024-04-08 180440.png', 'Disponible', '', '', ''),
(12, 271769245, 'sofi', 'sofi', 'sofi1234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1713316807Captura de pantalla 2024-03-09 132448.png', 'Offline now', '11', 'Mujer', ''),
(13, 1573489352, '123456', '123456', 'felipe.henaomorales@inemjose.edu.co', 'fcea920f7412b5da7be0cf42b8c93759', '1713488505Captura de pantalla 2024-03-09 135242.png', 'Offline now', '3', 'Hombre', ''),
(14, 1545746217, '123456', '123456', '123456@inemjose.edu.co', 'fcea920f7412b5da7be0cf42b8c93759', '1713490061Captura de pantalla 2024-04-08 124241.png', 'Offline now', '3', 'Hombre', ''),
(15, 328288115, '123456', '123456', '1234567@inemjose.edu.co', 'e10adc3949ba59abbe56e057f20f883e', '1713490739Captura de pantalla 2024-04-07 115747.png', 'Offline now', '2', 'Mujer', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
