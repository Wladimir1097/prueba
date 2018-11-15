-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.19-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para bdempleado
CREATE DATABASE IF NOT EXISTS `bdempleado` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bdempleado`;

-- Volcando estructura para tabla bdempleado.empleado
CREATE TABLE IF NOT EXISTS `empleado` (
  `empId` int(11) NOT NULL AUTO_INCREMENT,
  `empNombres` varchar(50) DEFAULT NULL,
  `empDni` varchar(10) DEFAULT NULL,
  `empSexo` int(11) DEFAULT NULL,
  `empDireccion` varchar(100) DEFAULT NULL,
  `empCiudad` int(11) DEFAULT NULL,
  `empTelefono` varchar(10) DEFAULT NULL,
  `empEstado` int(11) DEFAULT NULL,
  PRIMARY KEY (`empId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
