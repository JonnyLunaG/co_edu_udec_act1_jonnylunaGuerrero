-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.22-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para todovehiculos
CREATE DATABASE IF NOT EXISTS `todovehiculos` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `todovehiculos`;

-- Volcando estructura para tabla todovehiculos.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `cedula` int(11) NOT NULL,
  `clave` varchar(30) DEFAULT '12345',
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(5) NOT NULL,
  `email` varchar(70) DEFAULT NULL,
  PRIMARY KEY (`cedula`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla todovehiculos.vehiculos
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `placa` varchar(10) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `modelo` varchar(30) NOT NULL,
  `version` varchar(30) NOT NULL,
  `color` varchar(20) NOT NULL,
  `numPuestos` varchar(5) NOT NULL DEFAULT '5',
  `numPuertas` varchar(5) NOT NULL DEFAULT '4',
  `combustible` varchar(20) NOT NULL,
  `kilometros` varchar(30) NOT NULL,
  `cilindraje` varchar(20) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `id_vehiculo` int(11) NOT NULL AUTO_INCREMENT,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id_vehiculo`),
  UNIQUE KEY `placa` (`placa`),
  KEY `idx_vehiculos_usuarios` (`usuario_id`),
  CONSTRAINT `fk_vehiculos_usuarios` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- La exportación de datos fue deseleccionada.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
