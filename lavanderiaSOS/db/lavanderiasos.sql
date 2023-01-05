-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 10-09-2022 a las 02:23:42
-- Versión del servidor: 8.0.30
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lavanderiasos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `dni` char(8) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `celular` char(9) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `dni`, `nombre`, `celular`, `correo`, `direccion`, `created_at`, `updated_at`, `deleted`) VALUES
('2155100e-228b-11ed-bdc8-3c918048434e', '46465424', 'Daniel Alcidez Carrion', '954125877', 'daniel_54@gmail.com', 'Jr. Ricardo Palma N°155', '2022-08-23 02:27:41', '2022-08-22 05:00:00', NULL),
('328b9eb0-25bc-11ed-a24f-2f02c20bbd0b', '46545665', 'miguelser_6@gmail.com', '954416841', 'miguelser_6@gmail.com', 'Jr. Lovato N°452', '2022-08-27 08:56:15', '2022-08-27 08:56:15', NULL),
('96737cb0-2a5a-11ed-970e-b3ec076affde', '74125896', 'Miguel Grau', '945662186', 'miguel_64@gmail.com', 'Jr. Chavez N°651', '2022-09-02 06:00:07', '2022-09-02 06:00:07', NULL),
('d4ac2560-234f-11ed-8c2f-6b0f847e53aa', '78421445', 'José María Argurdas', '954751783', 'josema_8@gmail', 'Jr. Panamá N° 2553', '2022-08-24 06:55:29', '2022-08-24 06:55:29', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` char(36) COLLATE utf8mb4_general_ci NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `descripcion` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `nombre`, `descripcion`, `precio`, `created_at`, `updated_at`) VALUES
('18528120-2f1a-11ed-b9a2-9f54751317d4', 'Servicio de teñido de prendas', 'Especial para prendas de algodón', 15, '2022-09-08 07:01:04', '2022-09-08 07:01:04'),
('a492bda0-2f1a-11ed-b631-cd4682d3b524', 'Servicio de lavado de ternos', 'Especial para ternos de toda calidad', 20, '2022-09-08 07:04:59', '2022-09-08 07:04:59'),
('1aa4df80-2f1b-11ed-a87a-4b1c8fa94e08', 'Lavado y planchado de batas y uniformes de trabajo', 'Para todos los uniformes y colores que tengan estos', 21.5, '2022-09-08 07:08:17', '2022-09-08 07:08:17'),
('a65ce890-2f24-11ed-884c-ebd2c1e07725', 'Lavado al peso', 'Servicio a prendas de uso diario', 15.5, '2022-09-08 08:16:37', '2022-09-08 08:16:37');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
