-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-07-2019 a las 17:16:29
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jalapas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `idarticulo` int(11) NOT NULL,
  `idcategoria` int(11) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  `descripcion` varchar(256) DEFAULT NULL,
  `imagen` varchar(50) DEFAULT NULL,
  `precio_compra` decimal(11,2) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`idarticulo`, `idcategoria`, `medida`, `nombre`, `stock`, `descripcion`, `imagen`, `precio_compra`, `condicion`) VALUES
(28, 1, 'Plato', 'Plato Don Tito', 0, 'Huevos al gusto acompañados de 4 oz de lomito de rez importado o carne adobada', '', '0.00', 1),
(29, 1, 'Plato', 'Plato Huevos al nido', 0, '', '', '0.00', 1),
(30, 1, 'Plato', 'Plato El Buen Benedictino', 0, '', '', '0.00', 1),
(31, 1, 'Plato', 'Plato Jalapaneco', 0, '', '', '0.00', 1),
(32, 1, 'Plato', 'Plato Juntos, pero no Revueltos', 0, '', '', '0.00', 1),
(33, 1, 'Plato', 'Plato Huevos Escondidos', 0, '', '', '0.00', 1),
(34, 1, 'Plato', 'Plato Trió Perfecto', 0, '', '', '0.00', 1),
(35, 1, 'Plato', 'Plato Mr. Fit', 0, '', '', '0.00', 1),
(36, 1, 'Plato', 'Plato 3 Quesos', 0, '', '', '0.00', 1),
(37, 1, 'Plato', 'Plato Panqueques', 0, '', '', '0.00', 1),
(38, 1, 'Plato', 'Plato Enrollados', 0, '', '', '0.00', 1),
(39, 1, 'Plato', 'Plato Mosaico de Frutas', 0, '', '', '0.00', 1),
(40, 1, 'Plato', 'Plato Carpacio de lomito', 0, '', '', '0.00', 1),
(41, 1, 'Plato', 'Plato Entrada Especial', 0, '', '', '0.00', 1),
(42, 1, 'Plato', 'Plato Entrada Triple', 0, '', '', '0.00', 1),
(43, 1, 'Plato', 'Plato Sopa Azteca', 0, '', '', '0.00', 1),
(44, 1, 'Plato', 'Plato Sopa Nacional', 0, '', '', '0.00', 1),
(45, 1, 'Plato', 'Plato Ensalada de la Casa', 0, '', '', '0.00', 1),
(46, 1, 'Plato', 'Plato Ensalada Tropical', 0, '', '', '0.00', 1),
(47, 1, 'Plato', 'Plato Baguette de lomito', 0, '', '', '0.00', 1),
(48, 1, 'Plato', 'Plato Baguette de Pollo', 0, '', '', '0.00', 1),
(49, 1, 'Plato', 'Hamburguesa T-21', 0, '', '', '0.00', 1),
(50, 1, 'Plato', 'Hamburguesa Hawaina', 0, '', '', '0.00', 1),
(51, 1, 'Plato', 'Sandwich Special', 0, '', '', '0.00', 1),
(52, 1, 'Plato', 'Plato Camarones al Ajillo', 0, '', '', '0.00', 1),
(53, 1, 'Plato', 'Plato Pasta con Mariscos', 0, '', '', '0.00', 1),
(54, 1, 'Plato', 'Plato Lomito 6 oz', 0, '', '', '0.00', 1),
(55, 1, 'Plato', 'Plato Lomito 8 oz', 0, '', '', '0.00', 1),
(56, 1, 'Plato', 'Plato Puyazo Culotte Prime 8 oz', 0, '', '', '0.00', 1),
(57, 1, 'Plato', 'Plato Entraña 8 oz', 0, '', '', '0.00', 1),
(58, 1, 'Plato', 'Mar y Tierra 8 oz', 0, '', '', '0.00', 1),
(59, 1, 'Plato', 'Pollo: Pieza Azada al Carbón', 0, '', '', '10.00', 1),
(60, 1, 'Parrillada', 'Parrillada T 21(3 o 4 Personas)', 0, '', '', '0.00', 1),
(61, 1, 'Parrillada', 'Parrillada Pa´ 2 o 3', 0, '', '', '0.00', 1),
(62, 1, 'Parrillada', 'Parrillada Argentina', 0, '', '', '0.00', 1),
(63, 1, 'Plato', 'Plato La avena', 0, '', '', '0.00', 1),
(64, 1, 'Menu', 'Menú 1', 0, '', '', '0.00', 1),
(65, 1, 'Menu', 'Menú 2', 0, '', '', '0.00', 1),
(66, 1, 'Postre', 'Postre Estrella T 21 &quot;Panacota de Nutella&quot;', 0, '', '', '0.00', 1),
(67, 1, 'Postre', 'Postre Waffle', 0, '', '', '0.00', 1),
(68, 1, 'Postre', 'Postre Copa de Tiramisú', 0, '', '', '0.00', 1),
(69, 1, 'Postre', 'Postre Creme Brulle', 0, '', '', '0.00', 1),
(70, 1, 'Postre', 'Postre Crepas', 0, '', '', '0.00', 1),
(71, 2, 'Vaso', 'Rosa De Jamaica', 13, '', '', '10.00', 1),
(72, 2, 'Vaso', 'Naranjada', 0, '', '', '0.00', 1),
(73, 2, 'Vaso', 'Naranja Con Soda', 0, '', '', '0.00', 1),
(74, 2, 'Vaso', 'Limonada', 0, '', '', '0.00', 1),
(75, 2, 'Vaso', 'Limonada con Soda', 0, '', '', '0.00', 1),
(76, 2, 'Vaso', 'Te frió', 0, '', '', '0.00', 1),
(77, 2, 'Botella', 'Gaseosas', 0, '', '', '0.00', 1),
(78, 2, 'Pichel', 'Pichel Rosa Jamaica', 0, '', '', '0.00', 1),
(79, 2, 'Pichel', 'Pichel Naranjada', 0, '', '', '0.00', 1),
(80, 2, 'Pichel', 'Pichel Limonada', 0, '', '', '0.00', 1),
(81, 2, 'Copa', 'Tropical', 0, '', '', '0.00', 1),
(82, 2, 'Copa', 'Frutos Rojos', 0, '', '', '0.00', 1),
(83, 2, 'Copa', 'Verde', 0, '', '', '0.00', 1),
(84, 2, 'Taza', 'Café Expreso', 0, '', '', '0.00', 1),
(85, 2, 'Taza', 'Café Americano', 0, '', '', '0.00', 1),
(86, 2, 'Taza', 'Café Capuchino', 0, '', '', '0.00', 1),
(87, 2, 'Taza', 'Café Mocachino', 0, '', '', '0.00', 1),
(88, 2, 'Sorbette', 'Mango', 0, '', '', '0.00', 1),
(89, 2, 'Sorbette', 'Melocoton', 0, '', '', '0.00', 1),
(90, 2, 'Sorbette', 'Fresa', 0, '', '', '0.00', 1),
(91, 2, 'Copa', 'Frappe', 0, '', '', '0.00', 1),
(92, 2, 'Copa', 'Frappe Moca', 0, '', '', '0.00', 1),
(93, 2, 'Cóctel', 'T 21', 0, '', '', '0.00', 1),
(94, 2, 'Cóctel', 'Gin Tonic', 0, '', '', '0.00', 1),
(95, 2, 'Cóctel', 'MB(embi)', 0, '', '', '0.00', 1),
(96, 2, 'Cóctel', 'MB SISTER (embi sister)', 0, '', '', '0.00', 1),
(97, 2, 'Cóctel', 'Bloody Mary', 0, '', '', '0.00', 1),
(98, 2, 'Cóctel', 'Carmaleón', 0, '', '', '0.00', 1),
(99, 2, 'Cóctel', 'Margarita Tradicional(pink, blue, tamarindo)', 0, '', '', '0.00', 1),
(100, 2, 'Cóctel', 'Sangría Tinta y Blanca', 0, '', '', '0.00', 1),
(101, 2, 'Copa', 'Michelada', 0, '', '', '0.00', 1),
(102, 2, 'Copa', 'B52', 0, '', '', '0.00', 1),
(103, 2, 'Copa', 'Café Bombon', 0, '', '', '0.00', 1),
(104, 2, 'Cerveza', 'Cerveza Gallo', 0, '', '', '0.00', 1),
(105, 2, 'Cerveza', 'Cerveza Corona', 0, '', '', '0.00', 1),
(106, 2, 'Cerveza', 'Heneken', 0, '', '', '0.00', 1),
(107, 2, 'Cerveza', 'Monte Carlo', 0, '', '', '0.00', 1),
(108, 2, 'Cerveza', 'Stella Artois', 0, '', '', '0.00', 1),
(109, 2, 'Botella', 'Botella Et. Roja En las Rocas', 0, '', '', '0.00', 1),
(110, 2, 'Botella', 'Botella Et. Negra En las Rocas', 0, '', '', '0.00', 1),
(111, 2, 'Botella', 'Botella Doble Negra', 0, '', '', '0.00', 1),
(112, 2, 'Botella', 'Botella Grand Oid Par', 0, '', '', '0.00', 1),
(113, 2, 'Botella', 'Buchananas 12 años Botella', 0, '', '', '0.00', 1),
(114, 2, '1 oz', '1 oz Jose Cuervo Reposado', 0, '', '', '0.00', 1),
(115, 2, '1 oz', '1 oz Jimador Reposado', 0, '', '', '0.00', 1),
(116, 1, 'Canasta', 'Guarnicion Tortillas', 6, '', '', '10.00', 1),
(117, 2, 'Botella', 'Coca Cola', 50, '', '', '10.00', 1);

--
-- Disparadores `articulo`
--
DELIMITER $$
CREATE TRIGGER `stockss` BEFORE UPDATE ON `articulo` FOR EACH ROW BEGIN
IF new.stock < 0 THEN
CALL `raise`(1356, 'Algo sucedio');
END if;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `idcategoria` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`idcategoria`, `nombre`, `descripcion`, `condicion`) VALUES
(1, 'Comida', '', 1),
(2, 'Bebida', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE `detalle_ingreso` (
  `iddetalle_ingreso` int(11) NOT NULL,
  `idingreso` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_compra` decimal(11,2) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_ingreso`
--

INSERT INTO `detalle_ingreso` (`iddetalle_ingreso`, `idingreso`, `idarticulo`, `cantidad`, `precio_compra`, `precio_venta`) VALUES
(3, 3, 116, 10, '10.00', '15.00'),
(4, 4, 71, 15, '10.00', '20.00'),
(5, 5, 117, 50, '10.00', '15.00');

--
-- Disparadores `detalle_ingreso`
--
DELIMITER $$
CREATE TRIGGER `prueba_loka` BEFORE INSERT ON `detalle_ingreso` FOR EACH ROW BEGIN
 UPDATE articulo SET precio_compra =  NEW.precio_compra 
 WHERE articulo.idarticulo = NEW.idarticulo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_updStockIngreso` AFTER INSERT ON `detalle_ingreso` FOR EACH ROW BEGIN
 UPDATE articulo SET stock = stock + NEW.cantidad 
 WHERE articulo.idarticulo = NEW.idarticulo;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_venta`
--

CREATE TABLE `detalle_venta` (
  `iddetalle_venta` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `descuento` decimal(11,2) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT '1',
  `descripcion` varchar(50) NOT NULL,
  `estado` varchar(50) NOT NULL DEFAULT 'Aceptado',
  `condicional` varchar(50) NOT NULL DEFAULT 'si'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalle_venta`
--

INSERT INTO `detalle_venta` (`iddetalle_venta`, `idventa`, `idarticulo`, `cantidad`, `precio_venta`, `descuento`, `condicion`, `descripcion`, `estado`, `condicional`) VALUES
(15, 11, 116, 4, '15.00', '0.00', 0, '4', 'Termino', 'si'),
(16, 11, 71, 1, '20.00', '0.00', 1, '', 'Termino', 'si'),
(17, 12, 117, 10, '15.00', '0.00', 0, '', 'Aceptado', 'si'),
(18, 13, 71, 1, '20.00', '0.00', 1, '', 'Aceptado', 'si');

--
-- Disparadores `detalle_venta`
--
DELIMITER $$
CREATE TRIGGER `sale_update_after` AFTER UPDATE ON `detalle_venta` FOR EACH ROW BEGIN
 UPDATE articulo SET stock = stock - new.cantidad
 WHERE articulo.idarticulo = new.idarticulo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `sales_delete` BEFORE DELETE ON `detalle_venta` FOR EACH ROW BEGIN
 UPDATE 
 articulo SET stock = stock + OLD.cantidad 
 WHERE articulo.idarticulo = OLD.idarticulo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_updStockVenta` AFTER INSERT ON `detalle_venta` FOR EACH ROW BEGIN
 UPDATE 
 articulo SET stock = stock - NEW.cantidad 
 WHERE articulo.idarticulo = NEW.idarticulo;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tr_updateVentasas` BEFORE UPDATE ON `detalle_venta` FOR EACH ROW BEGIN
 UPDATE articulo SET stock = stock + old.cantidad 
 WHERE articulo.idarticulo = old.idarticulo;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `idingreso` int(11) NOT NULL,
  `idproveedor` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(7) DEFAULT NULL,
  `num_comprobante` varchar(10) NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `total_compra` decimal(11,2) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`idingreso`, `idproveedor`, `idusuario`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha_hora`, `total_compra`, `estado`) VALUES
(3, 3, 1, 'Ticket', '', '', '2019-01-22 00:00:00', '100.00', 'Aceptado'),
(4, 3, 1, 'Ticket', '', '', '2019-01-22 00:00:00', '150.00', 'Aceptado'),
(5, 4, 1, 'Ticket', '', '', '2019-04-20 00:00:00', '500.00', 'Aceptado');

--
-- Disparadores `ingreso`
--
DELIMITER $$
CREATE TRIGGER `tr_ingreso` AFTER UPDATE ON `ingreso` FOR EACH ROW update articulo a join detalle_ingreso di on di.idarticulo = a.idarticulo and di.idingreso = new.idingreso set a.stock = a.stock - di.cantidad
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medida`
--

CREATE TABLE `medida` (
  `idmedida` int(11) NOT NULL,
  `nombreMedida` varchar(50) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `medida`
--

INSERT INTO `medida` (`idmedida`, `nombreMedida`, `condicion`) VALUES
(1, 'Plato', 1),
(2, 'Combo', 1),
(3, 'Botella', 1),
(4, 'Octavo', 1),
(9, 'Taza', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `idmesa` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `condicion` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`idmesa`, `nombre`, `descripcion`, `condicion`) VALUES
(1, 'Uno', 'Siete', 1),
(2, 'Dos', 'Seis', 1),
(3, 'Tres', 'Cuatro', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `idpermiso` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`idpermiso`, `nombre`) VALUES
(1, 'Escritorio'),
(2, 'Almacen'),
(3, 'Compras'),
(4, 'Ventas'),
(5, 'Acceso'),
(6, 'Consulta Compras'),
(7, 'Consulta Ventas'),
(8, 'Cocina'),
(9, 'Ayuda'),
(10, 'Consultas No Admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `tipo_persona` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_documento` varchar(20) DEFAULT NULL,
  `num_documento` varchar(20) DEFAULT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `tipo_persona`, `nombre`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`) VALUES
(3, 'Proveedor', 'T21', 'DNI', '', '', '', ''),
(4, 'Proveedor', 'Cocacola', 'DNI', '3432423423', 'San Carlos Alzatate Jalapa', '423432', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prueba`
--

CREATE TABLE `prueba` (
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `prueba`
--

INSERT INTO `prueba` (`id`) VALUES
(-1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `replicadv`
--

CREATE TABLE `replicadv` (
  `iddetalle_venta` int(11) NOT NULL,
  `idventa` int(11) NOT NULL,
  `idarticulo` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio_venta` decimal(11,2) NOT NULL,
  `descuento` decimal(11,2) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `tipo_documento` varchar(20) NOT NULL,
  `num_documento` varchar(20) NOT NULL,
  `direccion` varchar(70) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `login` varchar(20) NOT NULL,
  `clave` varchar(64) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `condicion` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombre`, `tipo_documento`, `num_documento`, `direccion`, `telefono`, `email`, `cargo`, `login`, `clave`, `imagen`, `condicion`) VALUES
(1, 'administrador', 'DNI', '00000000000', 'San Carlos Alzatate', '931742904', 'jalapat21t21@gmail.com', '', 'jalapat21t21', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '1539662469.jpg', 1),
(2, 'Gerson Bernardo', 'DNI', '4234234234', '', '', 'jalapat21t21@gmail.com', '', 'gersongb', 'a76a558ac102f0abddd1a5ad1b10f54d90cb177fec46cb09a02e698075437d38', '', 1),
(3, 'Juancho', 'DNI', '34235432423', '', '', '', '', 'juancho', '93c1e7bd5aed2371699f26ecd2088bc271ef10d140e7240f2dd1f16e78e82652', '', 1),
(4, 'gerson', 'DNI', 'gerson', '23123', '312312', 'gerson@gmail.com', '2312', 'gerson', '7c00f9216a928bdb4d25eee60d5d6b8a54445b8f2bf65139ab6b1cd62376458f', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_permiso`
--

CREATE TABLE `usuario_permiso` (
  `idusuario_permiso` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `idpermiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario_permiso`
--

INSERT INTO `usuario_permiso` (`idusuario_permiso`, `idusuario`, `idpermiso`) VALUES
(206, 1, 1),
(207, 1, 2),
(208, 1, 3),
(209, 1, 4),
(210, 1, 5),
(211, 1, 6),
(212, 1, 7),
(213, 1, 8),
(214, 1, 9),
(215, 1, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `idventa` int(11) NOT NULL,
  `idmesa` int(11) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `tipo_comprobante` varchar(20) NOT NULL,
  `serie_comprobante` varchar(7) DEFAULT NULL,
  `num_comprobante` varchar(10) DEFAULT NULL,
  `fecha_hora` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_venta` decimal(11,2) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `condicion` tinyint(4) NOT NULL DEFAULT '1',
  `con` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `idmesa`, `idusuario`, `tipo_comprobante`, `serie_comprobante`, `num_comprobante`, `fecha_hora`, `total_venta`, `estado`, `condicion`, `con`) VALUES
(11, 1, 1, 'Ticket', '', '', '2019-01-22 06:00:00', '30.00', 'Aceptado', 0, '2019-01-22 22:48:22'),
(12, 1, 1, 'Ticket', '', '', '2019-04-20 06:00:00', '150.00', 'Anulado', 1, '2019-04-20 15:11:02'),
(13, 3, 1, 'Ticket', '', '', '2019-05-29 06:00:00', '20.00', 'Aceptado', 1, '2019-05-29 14:39:06');

--
-- Disparadores `venta`
--
DELIMITER $$
CREATE TRIGGER `tr_updStockAnularVenta` AFTER UPDATE ON `venta` FOR EACH ROW update articulo a
    join detalle_venta di
      on di.idarticulo = a.idarticulo
      INNER JOIN venta v on v.idventa = di.idventa
     and di.idventa = new.idventa
     set a.stock = a.stock +  di.cantidad
     WHERE v.estado='Anulado'
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`idarticulo`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`),
  ADD KEY `fk_articulo_categoria_idx` (`idcategoria`),
  ADD KEY `fk_articulo_medida` (`medida`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`idcategoria`),
  ADD UNIQUE KEY `nombre_UNIQUE` (`nombre`);

--
-- Indices de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD PRIMARY KEY (`iddetalle_ingreso`),
  ADD KEY `fk_detalle_ingreso_ingreso_idx` (`idingreso`),
  ADD KEY `fk_detalle_ingreso_articulo_idx` (`idarticulo`);

--
-- Indices de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD PRIMARY KEY (`iddetalle_venta`),
  ADD KEY `fk_detalle_venta_venta_idx` (`idventa`),
  ADD KEY `fk_detalle_venta_articulo_idx` (`idarticulo`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`idingreso`),
  ADD KEY `fk_ingreso_persona_idx` (`idproveedor`),
  ADD KEY `fk_ingreso_usuario_idx` (`idusuario`);

--
-- Indices de la tabla `medida`
--
ALTER TABLE `medida`
  ADD PRIMARY KEY (`idmedida`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`idmesa`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`idpermiso`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- Indices de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD PRIMARY KEY (`idusuario_permiso`),
  ADD KEY `fk_usuario_permiso_permiso_idx` (`idpermiso`),
  ADD KEY `fk_usuario_permiso_usuario_idx` (`idusuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`idventa`),
  ADD KEY `fk_venta_mesa_idx` (`idmesa`),
  ADD KEY `fk_venta_usuario_idx` (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articulo`
--
ALTER TABLE `articulo`
  MODIFY `idarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `idcategoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  MODIFY `iddetalle_ingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  MODIFY `iddetalle_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `idingreso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `medida`
--
ALTER TABLE `medida`
  MODIFY `idmedida` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `idmesa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `idpermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  MODIFY `idusuario_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=216;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `idventa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD CONSTRAINT `fk_articulo_categoria` FOREIGN KEY (`idcategoria`) REFERENCES `categoria` (`idcategoria`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_ingreso`
--
ALTER TABLE `detalle_ingreso`
  ADD CONSTRAINT `fk_detalle_ingreso_articulo` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_ingreso_ingreso` FOREIGN KEY (`idingreso`) REFERENCES `ingreso` (`idingreso`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detalle_venta`
--
ALTER TABLE `detalle_venta`
  ADD CONSTRAINT `fk_detalle_venta_articulo` FOREIGN KEY (`idarticulo`) REFERENCES `articulo` (`idarticulo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detalle_venta_venta` FOREIGN KEY (`idventa`) REFERENCES `venta` (`idventa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `fk_ingreso_persona` FOREIGN KEY (`idproveedor`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ingreso_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario_permiso`
--
ALTER TABLE `usuario_permiso`
  ADD CONSTRAINT `fk_usuario_permiso_permiso` FOREIGN KEY (`idpermiso`) REFERENCES `permiso` (`idpermiso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuario_permiso_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `fk_venta_mesa` FOREIGN KEY (`idmesa`) REFERENCES `mesa` (`idmesa`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_venta_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
