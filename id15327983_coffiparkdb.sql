-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 03-02-2021 a las 20:42:34
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15327983_coffiparkdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `telefono` varchar(9) NOT NULL DEFAULT '',
  `nacionalidad` varchar(30) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL DEFAULT '',
  `numero` varchar(8) NOT NULL DEFAULT '',
  `comuna` varchar(50) NOT NULL DEFAULT '',
  `usuario` varchar(30) NOT NULL DEFAULT '',
  `contrasena` varchar(30) NOT NULL DEFAULT '',
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `nombre`, `email`, `telefono`, `nacionalidad`, `direccion`, `numero`, `comuna`, `usuario`, `contrasena`, `fecha`) VALUES
(1, 'admin', 'admin@admin.cl', '123456789', 'Chile', 'tangananica', '12345', 'San Bernardo', 'admin', 'admin', '2017-06-29 00:10:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_Categoria` int(11) NOT NULL,
  `nombre_Categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_Categoria`, `nombre_Categoria`) VALUES
(4, 'Frutitas'),
(5, 'Alcohol'),
(6, 'Papitas'),
(7, 'Osvaldos'),
(8, 'Café'),
(9, 'Sandwich');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(6) NOT NULL,
  `nombre` varchar(100) NOT NULL DEFAULT '',
  `email` varchar(100) NOT NULL DEFAULT '',
  `telefono` varchar(16) NOT NULL,
  `nacionalidad` varchar(30) NOT NULL DEFAULT '',
  `direccion` varchar(100) NOT NULL DEFAULT '',
  `numero` varchar(8) NOT NULL DEFAULT '',
  `municipio` varchar(100) NOT NULL DEFAULT '',
  `usuario` varchar(30) NOT NULL DEFAULT '',
  `contrasena` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `email`, `telefono`, `nacionalidad`, `direccion`, `numero`, `municipio`, `usuario`, `contrasena`) VALUES
(3, 'Ulises Avila Roldan', 'avila.roldan.ulises@gmail.com', '7712025644', 'Argentina', 'Progreso', '15', 'Villa de tezontepec', 'uliseslooly', '+ulises15'),
(4, 'Osvaldo', 'osvaldo@osva.com', '2132131231', 'Brasil', 'sdsadwqwq', '123', 'sadasd', 'osvaldo', '12345678'),
(5, 'Arturo', 'marin.inc@hotmail.com', '7711226830', 'Brasil', 'San Francisco', '21', 'PACHUCA DE SOTO', 'marin', '1234567890'),
(6, 'Arturo Marin ', 'marin.inc@hotmail.com', '7711226830', 'Argentina', 'Av. Central', '12', 'Pachuca de Soto', 'marinrocks', '1234567890');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(6) NOT NULL,
  `cliente` varchar(100) NOT NULL DEFAULT '',
  `codigo` varchar(14) NOT NULL DEFAULT '',
  `nombre` varchar(50) NOT NULL DEFAULT '',
  `precio` float NOT NULL DEFAULT 0,
  `cantidad` int(5) NOT NULL DEFAULT 0,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`id`, `cliente`, `codigo`, `nombre`, `precio`, `cantidad`, `fecha`) VALUES
(79, '', 'FRU029', 'Melon Tuna', 1300, 1, '2017-07-02 23:01:59'),
(80, '', 'AB2020', 'Absolud', 500, 1, '2020-12-06 19:25:21'),
(81, '', 'AB2020', 'Absolud', 500, 1, '2020-12-09 21:39:48'),
(82, '4', 'AB2020', 'Absolud', 500, 1, '2020-12-10 01:19:04'),
(83, '', 'AB2020', 'Absolud', 500, 1, '2020-12-10 01:30:01'),
(84, '5', 'AB2020', 'Absolud', 500, 1, '2020-12-10 16:00:44'),
(85, '3', 'AB2020', 'Absolud', 500, 10, '2020-12-11 06:21:10'),
(88, '6', 'AB2020', 'Absolud', 100000, 1, '2021-01-19 15:57:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(5) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `codigo` char(12) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `frase_promocional` mediumtext NOT NULL,
  `unidad` varchar(30) NOT NULL,
  `precio` float NOT NULL,
  `disponibilidad` bit(1) NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `promocion` enum('Si','No') NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `codigo`, `categoria`, `frase_promocional`, `unidad`, `precio`, `disponibilidad`, `descripcion`, `promocion`, `image`) VALUES
(4, 'Absolud', 'AB2020', 'Alcohol', 'SJHBCHCEEGRBRBBRBFBR.', 'Litro', 100000, b'1', 'cfjhvhfljhfjljbjkdu.', 'Si', 'AB2020.jpg'),
(11, 'Café Express', 'CAEX2020', 'Café', 'Esta potente . Disfrútalo en promoción.', 'Taza', 100, b'1', 'Un poco intenso y muy cargado.', 'Si', 'CAEX2020.jpg'),
(12, 'Café americano', 'CAAM2020', 'Café', 'Café no esta potente.', 'Taza', 70, b'1', 'Café rebajado con agua.', 'Si', 'CAAM2020.png'),
(13, 'Café con leche', 'CALE2020', 'Café', 'Mitad café y mitad leche así como su precio.', 'Taza', 65, b'1', 'Un clásico de mitad café y mitad leche.', 'Si', 'CALE2020.jpg'),
(14, 'Sandwich de Jamón de Pavo', 'SAJAPA2020', 'Sandwich', 'Un pavo bien cocido sin covi, con pan mmmmm que riko.', 'Unid', 50, b'1', '3 piezas sandwich de pavo de 400g.', 'Si', 'SAJAPA2020.jpg'),
(15, 'Dom perignon', 'DOPE2020', 'Alcohol', 'Ulala señor fransua.', 'Litro', 4875, b'1', 'Champaña que vale muchos dineros.', 'Si', 'DOPE2020.jpg'),
(16, 'Moet', 'MO2020', 'Alcohol', 'Es creada de más de 100 vinos diferentes, de los cuales de 20% a 30% son vinos de reserva especial seleccionados para encantar la maduración, complejidad y consistencia, el ensamblaje refleja la diversidad y complementariedad de tres variedades de uvas', 'Litro', 1199, b'1', 'Moët Impérial es el champagne más emblemático de la Maison. Fue creado en 1869 y personifica el estilo único de Moët & Chandon, que se distingue por una fruta viva, un paladar seductor y una madurez elegante\r\n', 'Si', 'MO2020.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `unidad`
--

CREATE TABLE `unidad` (
  `idUnidad` int(5) NOT NULL,
  `nombreUnidad` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `unidad`
--

INSERT INTO `unidad` (`idUnidad`, `nombreUnidad`) VALUES
(100, 'Unid'),
(101, 'Kilo'),
(102, '900gr'),
(103, '800gr'),
(104, '700gr'),
(105, '600gr'),
(106, '500gr'),
(107, '400gr'),
(108, '300gr'),
(109, '200gr'),
(110, '100gr'),
(111, 'Litro'),
(112, '1/2Litro'),
(113, 'Taza');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_Categoria`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codigo` (`codigo`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `id_2` (`id`);

--
-- Indices de la tabla `unidad`
--
ALTER TABLE `unidad`
  ADD PRIMARY KEY (`idUnidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_Categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `unidad`
--
ALTER TABLE `unidad`
  MODIFY `idUnidad` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
