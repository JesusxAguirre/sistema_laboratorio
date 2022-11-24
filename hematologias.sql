-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-11-2022 a las 12:35:22
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hematologias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citologiaurinaria`
--

CREATE TABLE `citologiaurinaria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `extraccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnostico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `citologiaurinaria`
--

INSERT INTO `citologiaurinaria` (`id`, `pacientes_id`, `extraccion`, `diagnostico`, `imagen1`, `imagen2`, `imagen3`, `imagen4`, `fecha`, `created_at`, `updated_at`) VALUES
(3, 4, 'Cistosentésis', 'inflamacionu', 'IMG_20220421_222037_1.jpg', 'IMG_20220421_222037_1.jpg', 'IMG_20220421_222037_1.jpg', 'IMG_20220421_222037_1.jpg', '2022-04-23', '2022-04-23 17:51:39', '2022-04-23 17:51:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descartes`
--

CREATE TABLE `descartes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `observacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diagnostico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `descartes`
--

INSERT INTO `descartes` (`id`, `pacientes_id`, `observacion`, `diagnostico`, `imagen1`, `imagen2`, `imagen3`, `fecha`, `created_at`, `updated_at`) VALUES
(2, 3, NULL, 'anaplasma', 'Pepe1.png', 'Pepe2.png', 'Pepe3.png', '2022-04-21', '2022-04-22 10:07:55', '2022-04-22 10:07:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frotis`
--

CREATE TABLE `frotis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `observacione` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacionl` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciont` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hematologia`
--

CREATE TABLE `hematologia` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `eritrocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hemoglobina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hematocrito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vcm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chcm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reticulocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leucocitosT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plaquetas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proteinasPT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neutrofilosS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neutrofilosB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linfocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eosinofilos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hematologia_completa`
--

CREATE TABLE `hematologia_completa` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `hemoglobina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hematocrito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leucocitosT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plaquetas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neutrofilosS` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `neutrofilosB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linfocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eosinofilos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `basofilos` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `hematologia_completa`
--

INSERT INTO `hematologia_completa` (`id`, `pacientes_id`, `hemoglobina`, `hematocrito`, `leucocitosT`, `plaquetas`, `neutrofilosS`, `neutrofilosB`, `linfocitos`, `monocitos`, `eosinofilos`, `basofilos`, `fecha`, `created_at`, `updated_at`) VALUES
(2, 2, '7,2', '22', '6500', '185.000', '70', '02', '08', '10', '10', NULL, '2022-04-21', '2022-04-22 08:21:10', '2022-04-22 08:21:10'),
(3, 3, '14,1', '43', '5800', '75.000', '41', '04', '42', '07', '06', NULL, '2022-04-21', '2022-04-22 09:50:07', '2022-04-22 09:50:07'),
(4, 4, '12', '12', '12', '12', '12', '12', '12', '12', '12', NULL, '2022-04-23', '2022-04-23 17:51:08', '2022-04-23 17:51:08'),
(5, 5, '12,4', '37', '12900', '204.000', '42', '02', '39', '09', '08', NULL, '2022-05-24', '2022-05-25 09:54:41', '2022-05-25 09:54:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(72, '2014_10_12_000000_create_users_table', 1),
(73, '2014_10_12_100000_create_password_resets_table', 1),
(74, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(75, '2019_08_19_000000_create_failed_jobs_table', 1),
(76, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(77, '2022_03_15_115049_Pacientes', 1),
(78, '2022_03_17_160145_create_sessions_table', 1),
(79, '2022_03_28_125210_hematologia', 1),
(80, '2022_04_02_141935_descartes', 1),
(81, '2022_04_03_151326_frotis', 1),
(82, '2022_04_05_142434_hematologia_completa', 1),
(83, '2022_04_12_152210_citologiaurinaria', 1),
(84, '2022_04_12_152210_quimica', 1),
(85, '2022_04_12_152210_urianalisis', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `especie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `raza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `edad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remitente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propietario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id`, `nombre`, `especie`, `sexo`, `raza`, `edad`, `remitente`, `propietario`, `created_at`, `updated_at`) VALUES
(2, 'Scooby', 'canino', 'macho', 'Daschund', '11 años', 'M.V. Maryury Contreras', 'No indica', '2022-04-22 08:19:12', '2022-04-22 08:19:12'),
(3, 'Pepe', 'canino', 'macho', 'Daschund', 'No indica', 'M.V. Maryury Contreras', 'No indica', '2022-04-22 09:48:37', '2022-04-22 09:48:37'),
(4, 'Ghost', 'canino', 'macho', 'Meztizo', '3', 'M.V Zoleida', 'Sharais Aguirre', '2022-04-23 17:50:52', '2022-04-23 17:50:52'),
(5, 'Frida', 'canino', 'hembra', 'Pug Carlino', '2 años', 'M.V. Alicia Verde', 'Eliecer Mendoza', '2022-05-25 09:53:12', '2022-05-25 09:53:12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quimica`
--

CREATE TABLE `quimica` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `glucosa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urea` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creatinina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ast` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ggt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LDH` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fosfatasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amilasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lipasa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bilirrubinaT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bilirrubinaD` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bilirrubinaI` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proteinasT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `albumina` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `globulinas` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relacionag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colesterolT` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calcio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fosforo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sodio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cloro` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `potasio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `quimica`
--

INSERT INTO `quimica` (`id`, `pacientes_id`, `glucosa`, `urea`, `creatinina`, `alt`, `ast`, `ggt`, `LDH`, `fosfatasa`, `amilasa`, `lipasa`, `bilirrubinaT`, `bilirrubinaD`, `bilirrubinaI`, `proteinasT`, `albumina`, `globulinas`, `relacionag`, `colesterolT`, `calcio`, `fosforo`, `sodio`, `cloro`, `potasio`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, '35,4', '1,29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-21', '2022-04-22 08:21:46', '2022-04-22 08:21:46'),
(2, 3, '91,8', '51,5', '0,4', '105,8', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2,56', '7,44', '0,34', NULL, NULL, NULL, NULL, NULL, NULL, '2022-04-21', '2022-04-22 09:52:21', '2022-04-22 09:52:21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('HHdbEUQFllpdzvqPuXJ6YUAa7uWqPEChsKT3Owyp', NULL, '192.168.0.218', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/107.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiYkVwRldsQ0RYM01rYmRydWszYjhlcFdHUjBicUk3ZHNsN0NPTGdWUyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1669293257);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `urianalisis`
--

CREATE TABLE `urianalisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pacientes_id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hematies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `leucocitos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspecto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bacterias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `densidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `planas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `glucosa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transcicionales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proteinas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redondasp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nitritos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redondasg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cetonas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caudadas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bilirrubina` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cumulos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `urobilinogeno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cilindros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sangre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cristales` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observacion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fecha` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `urianalisis`
--

INSERT INTO `urianalisis` (`id`, `pacientes_id`, `color`, `hematies`, `olor`, `leucocitos`, `aspecto`, `bacterias`, `densidad`, `otros`, `ph`, `planas`, `glucosa`, `transcicionales`, `proteinas`, `redondasp`, `nitritos`, `redondasg`, `cetonas`, `caudadas`, `bilirrubina`, `cumulos`, `urobilinogeno`, `cilindros`, `sangre`, `cristales`, `observacion`, `fecha`, `created_at`, `updated_at`) VALUES
(1, 2, 'Amarillo', 'Ocasionales', 'Amoniacal', '12 - 15 por campo', 'Floculente', 'Abudantes, tipo coco', '1.010', 'Levaduras Ocasionales', '8', '---', 'Negativo', '2 - 4 por campo', 'Positivo 2+', '1-4 por campo', 'Negativo', '2-3 por campo', 'Negativo', 'Ocasionales', 'Negativo', '---', 'Normal', 'No observados', 'Trazas(Eritrocitos)', 'De estruvita, abundantes', NULL, '2022-04-21', '2022-04-22 09:01:08', '2022-04-22 09:01:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Zoleida', 'admin@gmail.com', NULL, '$2y$10$.N6r1sxL/IURAD3jX6wjs.gIZZouaVAzmCpD9UjjA/YSpxea/1VxO', NULL, NULL, 'SQ20kqQkAZK23Ex8WsptUJyuOQIc01ifyc38u1LitHKRj4sXrkZ0EDroUqcC', NULL, NULL, '2022-04-21 18:49:11', '2022-04-21 18:49:11');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citologiaurinaria`
--
ALTER TABLE `citologiaurinaria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `citologiaurinaria_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `descartes`
--
ALTER TABLE `descartes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descartes_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `frotis`
--
ALTER TABLE `frotis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `frotis_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `hematologia`
--
ALTER TABLE `hematologia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hematologia_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `hematologia_completa`
--
ALTER TABLE `hematologia_completa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hematologia_completa_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `quimica`
--
ALTER TABLE `quimica`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quimica_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `urianalisis`
--
ALTER TABLE `urianalisis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `urianalisis_pacientes_id_foreign` (`pacientes_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citologiaurinaria`
--
ALTER TABLE `citologiaurinaria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `descartes`
--
ALTER TABLE `descartes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frotis`
--
ALTER TABLE `frotis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hematologia`
--
ALTER TABLE `hematologia`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `hematologia_completa`
--
ALTER TABLE `hematologia_completa`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `quimica`
--
ALTER TABLE `quimica`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `urianalisis`
--
ALTER TABLE `urianalisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citologiaurinaria`
--
ALTER TABLE `citologiaurinaria`
  ADD CONSTRAINT `citologiaurinaria_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `descartes`
--
ALTER TABLE `descartes`
  ADD CONSTRAINT `descartes_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `frotis`
--
ALTER TABLE `frotis`
  ADD CONSTRAINT `frotis_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `hematologia`
--
ALTER TABLE `hematologia`
  ADD CONSTRAINT `hematologia_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `hematologia_completa`
--
ALTER TABLE `hematologia_completa`
  ADD CONSTRAINT `hematologia_completa_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `quimica`
--
ALTER TABLE `quimica`
  ADD CONSTRAINT `quimica_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `urianalisis`
--
ALTER TABLE `urianalisis`
  ADD CONSTRAINT `urianalisis_pacientes_id_foreign` FOREIGN KEY (`pacientes_id`) REFERENCES `pacientes` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
