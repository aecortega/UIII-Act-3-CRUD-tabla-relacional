-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-08-2023 a las 05:51:40
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";

START TRANSACTION;

SET
  time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */
;

/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */
;

/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */
;

/*!40101 SET NAMES utf8mb4 */
;

-- Crear la base de datos bd_aeco si no existe
CREATE DATABASE IF NOT EXISTS `bd_aeco` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `bd_aeco`;

-- Eliminar las tablas existentes si es necesario
DROP TABLE IF EXISTS `categorias`;

DROP TABLE IF EXISTS `marcas`;

DROP TABLE IF EXISTS `productos`;

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `marca`
--
CREATE TABLE `marca` (
  `id_marca` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `nombre_marca` VARCHAR(50) NOT NULL,
  `fundacion` DATE NOT NULL,
  `pais_origen` VARCHAR(50) NOT NULL,
  `pagina_web` VARCHAR(100) NOT NULL,
  `contacto_nombre` VARCHAR(50) NOT NULL,
  `contacto_telefono` VARCHAR(20) NOT NULL,
  `contacto_email` VARCHAR(50) NOT NULL,
  `descripcion` TEXT NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Insertar datos de ejemplo en la tabla `marca`
INSERT INTO `marca` (`nombre_marca`, `fundacion`, `pais_origen`, `pagina_web`, `contacto_nombre`, `contacto_telefono`, `contacto_email`, `descripcion`) VALUES
('Marca1', '2020-01-01', 'País1', 'http://marca1.com', 'Contacto1', '123456789', 'contacto1@marca1.com', 'Descripción de Marca1'),
('Marca2', '2019-01-01', 'País2', 'http://marca2.com', 'Contacto2', '987654321', 'contacto2@marca2.com', 'Descripción de Marca2');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `productos`
--
CREATE TABLE `productos` (
  `id_productos` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `n_producto` VARCHAR(50) NOT NULL,
  `descripcion` VARCHAR(50) NOT NULL,
  `precio` FLOAT(10, 2) NOT NULL,
  `talla` VARCHAR(50) NOT NULL,
  `marca` VARCHAR(50) NOT NULL,
  `modelo` VARCHAR(50) NOT NULL,
  `corte` VARCHAR(50) NOT NULL,
  `color` VARCHAR(50) NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Insertar datos de ejemplo en la tabla `productos`
INSERT INTO `productos` (`n_producto`, `descripcion`, `precio`, `talla`, `marca`, `modelo`, `corte`, `color`) VALUES
('Producto1', 'Descripción de Producto1', 100.00, 'Talla1', 'Marca1', 'Modelo1', 'Corte1', 'Color1'),
('Producto2', 'Descripción de Producto2', 150.00, 'Talla2', 'Marca2', 'Modelo2', 'Corte2', 'Color2');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `inventario`
--
CREATE TABLE `inventario` (
  `id_producto` INT(11) PRIMARY KEY AUTO_INCREMENT,
  `cantidad_en_estock` INT(100) NOT NULL,
  `tallas_disponibles` VARCHAR(100) NOT NULL,
  `proveedor` VARCHAR(100) NOT NULL,
  `precio_compra` DECIMAL(10, 2) NOT NULL,
  `precio_venta` DECIMAL(10, 2) NOT NULL,
  `n_producto` VARCHAR(50) NOT NULL,
  `fecha_de_reposicion` DATE NOT NULL
) ENGINE = InnoDB DEFAULT CHARSET = utf8 COLLATE = utf8_general_ci;

-- Insertar datos de ejemplo en la tabla `inventario`
INSERT INTO `inventario` (`cantidad_en_estock`, `tallas_disponibles`, `proveedor`, `precio_compra`, `precio_venta`, `n_producto`, `fecha_de_reposicion`) VALUES
(50, 'Talla1,Talla2', 'Proveedor1', 80.00, 120.00, 'Producto1', '2023-08-30'),
(30, 'Talla2,Talla3', 'Proveedor2', 120.00, 180.00, 'Producto2', '2023-08-30');
--

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */
;

/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */
;

/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */
;