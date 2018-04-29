-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-04-2018 a las 02:38:25
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cerveceriadb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (id, `descripcion`, `image`) VALUES
(1, 'Cervezas', 'cerveza'),
(2, 'Tragos', 'trago'),
(4, 'Hamburguesa', 'hamburguesa'),
(5, 'Principales', 'principales'),
(6, 'Postre', 'postre'),
(7, 'Ensaladas', 'ensalada'),
(8, 'Sanguches', 'sanguches'),
(9, 'Pastas', 'pastas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `sabor` varchar(100) NOT NULL,
  `graduacion` varchar(100) NOT NULL,
  `descripcion` varchar(250) DEFAULT NULL,
  `precio` double NOT NULL,
  `image` varchar(100) NOT NULL,
  `idCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (id, `nombre`, `sabor`, `graduacion`, `descripcion`, `precio`, `image`, `idCategoria`) VALUES
(9, 'Golden', 'Malta de gran tomabilidad', '4.5%', 'Bierhaus, cerveza ligera y refrescante, con un toque de lupulo cítrico.', 95, '1', 1),
(10, 'Honey', 'Suave aroma a Miel', '6%', 'Bierhaus, Color Dorado Intenso. Cerveza suave y resfrescante, espuma persistente y alta tomabilidad', 80, '4', 1),
(11, 'Blonde', 'Frutal y Malta', '5%', 'Baurn. Estilo de cerveza artesanal americana, dorada, suave y de leve amargor, facil de tomar', 94, '3', 1),
(12, 'Pilsen', 'Perfumada con lúpulo Saaz.', '4.5%', 'Gambrinus, Una rubia ligera, dorada y refrescante', 105, '3', 1),
(13, 'Scottish', 'Caramelo y frutas secas', '5.5%', 'Noosa, Cerveza rojiza oscura', 95, '5', 1),
(14, 'Macalister Amber Ale', 'Caramelo y frutos rojos', '5.5%', 'Icarus, la reina de las cervezas rojas. Desde Mar del plata a tu mesa', 95, '5', 1),
(15, 'Irish Red', 'Caramelo y Malta', '5.2%', 'Kraken, cerveza rojiza. Delicado Sabor. Medalla de Bronce en el South Beer Cup 2014', 95, '5', 1),
(16, 'Red Ipa', 'Lúpulos y Caramelo', '7%', 'Kuruf. Rojiza y Gran presencia de Lúpulo y notas de malta caramelos', 95, '2', 1),
(17, 'English Ipa', 'Amargo y aroma Cítrico', '6.9%', 'Gambrinus, Ipa Inglesa que genera una explosión de Sabor. Fuerte presencia de su amargor', 95, '2', 1),
(18, 'Old Ale', 'Frutos Rojos', '9%', 'Boum. Rojiza y Alto cuerpo y robustez', 95, '6', 1),
(19, 'Irish Stout', 'Frutos Rojos', '5%', 'Kraken, Virgen Negra. Medalla de plata en South Beer Cup 2013', 95, '6', 1),
(20, 'Papas Fritas Originales', '', '', '', 1, '7', 2),
(21, 'Papas Prego', '', '', 'Con chedar, Panceta, y Chedar', 1, '8', 2),
(22, 'Bastones de Muzza', '', '', 'Bastones de muzzarella', 0, '9', 2),
(23, 'Tiritas de Pollo', '', '', 'Tiras de pollo rebozado', 0, '10', 2),
(24, 'ignacios', '', '', 'Nachos con salsa criolla y chedar', 1, '11', 2),
(25, 'Menú infantil', '', '', 'Suprema de pollo con guarnicion de puré o papas fritas', 0, '12', 2),
(26, 'Bondeola Braseada', '', '', '', 0, '13', 2),
(27, 'Carne Braseada', '', '', '', 0, '14', 2),
(28, 'Ensalada Cesar', '', '', 'Variedad de lechuga, Pollo grill, Croutones, parmesano, alineo caesar', 0, '15', 2),
(29, 'Ensalada de frutas', '', '', 'Las frutas que vos quieras', 0, '16', 2),
(30, 'King', '', '', 'Con cheddar, tomate, cebolla caramelizada, lechuga y alioli', 0, '17', 2),
(31, 'Americana', '', '', 'Mozzarella, panceta, huevo a la plancha y salsa bbq', 0, '18', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (id);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (id),
  ADD KEY `fk_productos_categorias_idx` (`idCategoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `idCategorias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_categorias` FOREIGN KEY (`idCategoria`) REFERENCES `categorias` (id) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
