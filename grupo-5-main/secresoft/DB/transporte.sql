https://github.com/CristiamFlores/grupo-5/tree/main/secresoft
/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`transporte` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `transporte`;

/*Estructura de la tabla para la tabla `ciudades` */

DROP TABLE IF EXISTS `ciudades`;
CREATE TABLE `ciudades` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=475 DEFAULT CHARSET=latin1;
insert  into `ciudades`(`id`,`name`) values (1,'AF'),(2,'AL');



DROP TABLE IF EXISTS `depto`;
CREATE TABLE `depto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=latin1;
insert  into `depto`(`id`,`name`) values (1,'Afghanistan'),(2,'Albania');


/*Estructura de tabla para la tabla `registro` */
DROP TABLE IF EXISTS `registrar`;
CREATE TABLE `registrar` (
  `origen` varchar(250) NOT NULL,
  `destino` varchar(250) NOT NULL,

  `pname` varchar(250) NOT NULL,
  `sname` varchar(250) NOT NULL,
  `apellidos` varchar(250) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `cedula` varchar(250) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  
  `celular` varchar(50) NOT NULL,
  `email` varchar(250) NOT NULL,
  `depto` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `oficina` varchar(50) NOT NULL,
  `domicilio` text NOT NULL,
  `d_encomienda` text NOT NULL,

  `nlicencia` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,

  `placa` varchar(250) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `telefono` varchar(100) NOT NULL,

`date` timestamp NOT NULL DEFAULT current_timestamp(),

  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

insert  into `registrar`(`origen`,`destino`,`pname`,`sname`,`apellidos`,`genero`,`cedula`,`descripcion`,`celular`,`email`,`depto`,`provincia`,`oficina`,`domicilio`,`d_encomienda`,`nlicencia`,`fullname`,`apellido`,`placa`,`tipo`,`telefono`,`date`,`id`) 
values ('13','NETWOKING','Anuj','Kumar','Singh','Male','IT Service','Male','500000','general','general','Indian','1234567890','phpgurukulofficial@gmail.com','101','4','hola','May','Mayur','10','12 UP Board','2019-05-27 12:11:59',1);


/*Estructura de tabla para provinc8i */

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4121 DEFAULT CHARSET=latin1;


/*Estructura de tabla para tabla `cilentes` */
DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `subid` int(11) NOT NULL AUTO_INCREMENT,
  `cshort` varchar(50) DEFAULT NULL,
  `cfull` varchar(250) DEFAULT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `apaterno` varchar(250) DEFAULT NULL,
  `amaterno` varchar(250) DEFAULT NULL,
  `dt_created` datetime NOT NULL DEFAULT current_timestamp(),
  `update_date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`subid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
insert  into `clientes`(`subid`,`cshort`,`cfull`,`apaterno`,`amaterno`,`nombres`,`dt_created`,`update_date`) 
  values (3,'8','MASTER OF SCIENCE','Mathematics','Physics','Chemistry','2016-04-16 18:08:27','holas');



DROP TABLE IF EXISTS `chofer`;
CREATE TABLE `chofer` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `nlicencia` varchar(250) DEFAULT NULL,
  `fullname` varchar(250) DEFAULT NULL,
  `cdate` varchar(50) DEFAULT NULL,
  `update_date` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
insert  into `chofer`(`cid`,`nlicencia`,`fullname`,`cdate`,`update_date`) 
  values (1,'M.C.A.','PPLICATION','11-04-2016','27-05-2019');

/*Estructura de la tabla para la tabla `login` */

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(250) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Datos para la tabla `ogin` */

insert  into `login`(`id`,`user`,`password`) values (1,'admin','admin');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
