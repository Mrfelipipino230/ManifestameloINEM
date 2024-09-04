-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2024 a las 03:38:50
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
-- Base de datos: `mnf`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anonimos`
--

CREATE TABLE `anonimos` (
  `id_mensajes` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `mensaje` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arte`
--

CREATE TABLE `arte` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` text NOT NULL,
  `mensaje` text NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bann`
--

CREATE TABLE `bann` (
  `id_ban` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chisme`
--

CREATE TABLE `chisme` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` text NOT NULL,
  `mensaje` text NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comantarios`
--

CREATE TABLE `comantarios` (
  `id_publications` int(11) NOT NULL,
  `unique_id` int(11) NOT NULL,
  `lname` varchar(500) NOT NULL,
  `comentario` varchar(300) NOT NULL,
  `imagen` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comida`
--

CREATE TABLE `comida` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `mensaje` varchar(300) NOT NULL,
  `imagen` varchar(300) NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `geek`
--

CREATE TABLE `geek` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` text NOT NULL,
  `mensaje` text NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos`
--

CREATE TABLE `juegos` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` text NOT NULL,
  `mensaje` text NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `musica`
--

CREATE TABLE `musica` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `titulo` text NOT NULL,
  `mensaje` text NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publications`
--

CREATE TABLE `publications` (
  `id_publications` int(11) NOT NULL,
  `usuario` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `titulo` text NOT NULL,
  `mensaje` text NOT NULL,
  `imagen` text NOT NULL,
  `video` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_admin`
--

CREATE TABLE `users_admin` (
  `id_admins` int(11) NOT NULL,
  `usuario` varchar(300) NOT NULL,
  `contraseña` varchar(300) NOT NULL,
  `clave_carnet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users_admin`
--

INSERT INTO `users_admin` (`id_admins`, `usuario`, `contraseña`, `clave_carnet`) VALUES
(1, 'Felipe Henao', '123456', 2305);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anonimos`
--
ALTER TABLE `anonimos`
  ADD PRIMARY KEY (`id_mensajes`);

--
-- Indices de la tabla `arte`
--
ALTER TABLE `arte`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `bann`
--
ALTER TABLE `bann`
  ADD PRIMARY KEY (`id_ban`);

--
-- Indices de la tabla `chisme`
--
ALTER TABLE `chisme`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `comida`
--
ALTER TABLE `comida`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `geek`
--
ALTER TABLE `geek`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `juegos`
--
ALTER TABLE `juegos`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`id_publications`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indices de la tabla `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id_admins`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anonimos`
--
ALTER TABLE `anonimos`
  MODIFY `id_mensajes` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `arte`
--
ALTER TABLE `arte`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bann`
--
ALTER TABLE `bann`
  MODIFY `id_ban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `chisme`
--
ALTER TABLE `chisme`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `comida`
--
ALTER TABLE `comida`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `geek`
--
ALTER TABLE `geek`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `juegos`
--
ALTER TABLE `juegos`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `musica`
--
ALTER TABLE `musica`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `publications`
--
ALTER TABLE `publications`
  MODIFY `id_publications` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id_admins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
