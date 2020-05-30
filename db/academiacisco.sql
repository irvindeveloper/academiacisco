-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2018 a las 18:08:44
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academiacisco`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_certiAll` ()  NO SQL
SELECT * from certificacion$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_certiDel` (IN `idc` INT)  NO SQL
delete from certificacion where idCertificacion=idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_certiXid` (IN `idc` INT)  NO SQL
select * from certificacion where idCertificacion=idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_estudianteDel` (IN `ide` INT)  NO SQL
DELETE FROM estudiantes WHERE idEstudiantes=ide$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_estudiantesALL` ()  NO SQL
select * from estudiantes$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_estudiantesCCNA` ()  NO SQL
SELECT * FROM `estudiantes` WHERE Certificacion ='ccna'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_estudiantessecurity` ()  NO SQL
SELECT * FROM `estudiantes` WHERE Certificacion ='security'$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_estudianteXId` (IN `ide` INT)  NO SQL
select * from estudiantes where idEstudiantes=ide$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertarcerti` (IN `idcerti` INT, IN `nombre` VARCHAR(45), IN `modul` VARCHAR(45), IN `fechaI` DATETIME, IN `fechaF` DATETIME, IN `cicl` VARCHAR(45), IN `prec` DECIMAL(7,2), IN `esta` VARCHAR(45))  NO SQL
insert into 
certificacion(idCertificacion, Nombre, Modulo, Fecha_Inicio, Fecha_Fin, ciclo, Precio, Estado) 
VALUES (idcerti , nombre , modul , fechaI , fechaF , cicl , prec , esta)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertestu` (IN `idestu` INT, IN `nomb` VARCHAR(45), IN `apel` VARCHAR(45), IN `carr` VARCHAR(45), IN `carn` VARCHAR(45), IN `dir` VARCHAR(150), IN `tel` VARCHAR(45), IN `mo` VARCHAR(45), IN `cer` VARCHAR(45), IN `sec` VARCHAR(45), IN `ho` TIME, IN `pag1` DECIMAL(7,2), IN `pag2` DECIMAL(7,2), IN `pag3` DECIMAL(7,2), IN `pag4` DECIMAL(7,2), IN `pag5` DECIMAL(7,2))  NO SQL
insert into estudiantes(idEstudiantes,Nombre,Apellido,Carrera,Carnet,Direccion,Telefono,Modulo,Certificacion,Seccion,Horario,pago1,pago2,pago3,pago4,pago5) values(idestu,nomb,apel,carr,carn,dir,tel,mo,cer,sec,ho,pag1,pag2,pag3,pag4,pag5)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertinstru` (IN `idinstru` INT, IN `nom` VARCHAR(45), IN `ape` VARCHAR(45), IN `modu` VARCHAR(45), IN `cert` VARCHAR(45), IN `secc` VARCHAR(45), IN `hor` TIME, IN `ciclo` VARCHAR(45))  NO SQL
insert into instructor(idinstructor,Nombre,Apellido,Modulo,Certificacion,Seccion,Horario,ciclo) values(idinstru,nom,ape,modu,cert,secc,hor,ciclo)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insertroles` (IN `id` INT, IN `nombr` VARCHAR(50), IN `usua` VARCHAR(15), IN `clav` VARCHAR(15), IN `estad` VARCHAR(1), IN `nive` VARCHAR(15))  NO SQL
insert into usuarios (id,nombre,usuario,clave,estado,nivel)
values(id,nombr,usua,clav,estad,nive)$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_instructorDel` (IN `idi` INT)  NO SQL
delete from instructor where idInstructor=idi$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_instructoresALL` ()  NO SQL
select * from instructor$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_instructormod` (IN `idi` INT, IN `nom` VARCHAR(45), IN `ape` VARCHAR(45), IN `modu` VARCHAR(45), IN `cert` VARCHAR(45), IN `secc` VARCHAR(45), IN `hor` DATE, IN `ciclo` VARCHAR(45))  NO SQL
update instructor set Nombre=nom, Apellido=ape, Modulo=modu, Certificacion=cert, Seccion=secc, Horario=hor, ciclo=ciclo where idInstructor=idi$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_instructorXId` (IN `idi` INT)  NO SQL
select * from instructor where idInstructor=idi$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Login` (IN `usr` VARCHAR(15), IN `cla` VARCHAR(15))  NO SQL
select * from usuarios where usuario=usr and clave=cla$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modcert` (IN `idc` INT, IN `nombre` VARCHAR(45), IN `modul` VARCHAR(45), IN `fechaI` DATETIME, IN `fechaF` DATETIME, IN `cicl` VARCHAR(45), IN `prec` DECIMAL(7,2), IN `esta` VARCHAR(45))  NO SQL
UPDATE certificacion set Nombre=nombre, modulo=modul,  Fecha_Inicio=fechaI, Fecha_Fin=fechaF, ciclo=cicl,  Precio=prec, Estado=esta WHERE idCertificacion=idc$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_modestu` (IN `ide` INT, IN `nomb` VARCHAR(45), IN `apel` VARCHAR(45), IN `carr` VARCHAR(45), IN `carn` VARCHAR(45), IN `dir` VARCHAR(150), IN `tel` VARCHAR(45), IN `mo` VARCHAR(45), IN `cer` VARCHAR(45), IN `sec` VARCHAR(45), IN `ho` TIME, IN `pag1` DECIMAL(7,2), IN `pag2` DECIMAL(7,2), IN `pag3` DECIMAL(7,2), IN `pag4` DECIMAL(7,2), IN `pag5` DECIMAL(7,2))  NO SQL
UPDATE estudiantes set Nombre=nomb, Apellido=apel,Carrera=carr, Carnet=carn, Direccion=dir, Telefono=tel, Modulo=mo, certificacion=cer, Seccion=sec, Horario=ho, pago1=pag1, pago2=pag2, pago3=pag3, pago4=pag4, pago5=pag5 where idEstudiantes=ide$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rolesALL` ()  NO SQL
select * from usuarios$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rolesDel` (IN `idr` INT)  NO SQL
delete from usuarios where id=idr$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_rolesXId` (IN `idr` INT)  NO SQL
select * from usuarios where id=idr$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificacion`
--

CREATE TABLE `certificacion` (
  `idCertificacion` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Modulo` varchar(45) NOT NULL,
  `Fecha_Inicio` datetime NOT NULL,
  `Fecha_Fin` datetime NOT NULL,
  `Ciclo` varchar(45) NOT NULL,
  `Precio` decimal(7,2) NOT NULL,
  `Estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `certificacion`
--

INSERT INTO `certificacion` (`idCertificacion`, `Nombre`, `Modulo`, `Fecha_Inicio`, `Fecha_Fin`, `Ciclo`, `Precio`, `Estado`) VALUES
(1, 'CCNA', 'ccna I', '2018-05-25 06:30:00', '2018-05-30 06:30:00', '01', '100.00', 'activo'),
(2, 'CCNA SECURITY', 'ccna I security', '2018-05-25 06:30:00', '2018-05-30 06:30:00', '02', '150.00', 'pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `idEstudiantes` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Direccion` varchar(150) NOT NULL,
  `Telefono` varchar(45) NOT NULL,
  `Carnet` varchar(45) NOT NULL,
  `Carrera` varchar(45) NOT NULL,
  `Certificacion` varchar(45) NOT NULL,
  `Modulo` varchar(45) NOT NULL,
  `Seccion` varchar(45) NOT NULL,
  `Horario` time NOT NULL,
  `pago1` decimal(7,2) NOT NULL,
  `pago2` decimal(7,2) NOT NULL,
  `pago3` decimal(7,2) NOT NULL,
  `pago4` decimal(7,2) NOT NULL,
  `pago5` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`idEstudiantes`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Carnet`, `Carrera`, `Certificacion`, `Modulo`, `Seccion`, `Horario`, `pago1`, `pago2`, `pago3`, `pago4`, `pago5`) VALUES
(2, 'frank', 'urias', 'santa tecla', '2299-5588', '25-0365-2018', 'ing. en sistemas', 'ccna', 'ccna I', '03', '18:20:27', '101.00', '0.00', '0.00', '0.00', '0.00'),
(3, 'rferfwef', 'rfwfwef', 'wefwf', 'wfwef', '2159689665', 'sistemas', 'ccna', 'ccna I', '01', '19:25:56', '50.00', '45.00', '25.00', '10.00', '25.00'),
(13, 'irvin', 'gonzalez', 'soyapango', '21054626', '2159689665', 'sistemas', 'security', 'ccna I', '01', '18:02:51', '100.00', '0.00', '0.00', '0.00', '0.00'),
(20, 'carlos', 'ortega', 'soyapango', '21054626', '2159689665', 'sistemas', 'ccna', 'ccna I', '01', '17:20:23', '10.00', '45.00', '25.00', '10.00', '25.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instructor`
--

CREATE TABLE `instructor` (
  `idInstructor` int(11) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `Modulo` varchar(45) NOT NULL,
  `Certificacion` varchar(45) NOT NULL,
  `Horario` time NOT NULL,
  `Seccion` varchar(45) NOT NULL,
  `ciclo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instructor`
--

INSERT INTO `instructor` (`idInstructor`, `Nombre`, `Apellido`, `Modulo`, `Certificacion`, `Horario`, `Seccion`, `ciclo`) VALUES
(1, 'irvin', 'Gonzalez', 'tecn1', 'ccna', '00:00:00', '01', '02'),
(2, 'Javier', 'Benitez', '02', 'ccna', '00:00:00', '04', '02'),
(4, 'josue', 'hernandez', '01', 'ccna', '00:00:00', '01', '03'),
(5, 'frank', 'urias', '04', 'ccna security', '00:00:00', '09', '04'),
(7, 'jose', 'perez', 'ccnaI', 'ccna', '00:00:00', '01', '01'),
(8, 'carlos', 'sanchez', 'ccna I', 'ccna', '00:00:00', '01', '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `usuario` varchar(15) NOT NULL,
  `clave` varchar(15) NOT NULL,
  `estado` char(1) NOT NULL DEFAULT 'A',
  `nivel` char(10) NOT NULL DEFAULT 'consulta'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `clave`, `estado`, `nivel`) VALUES
(1, 'josue', 'jhernandez', '123', 'a', 'admin'),
(2, 'frank', 'faguilar', '1234', 'A', 'instructor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  ADD PRIMARY KEY (`idCertificacion`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`idEstudiantes`);

--
-- Indices de la tabla `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`idInstructor`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificacion`
--
ALTER TABLE `certificacion`
  MODIFY `idCertificacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `idEstudiantes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `instructor`
--
ALTER TABLE `instructor`
  MODIFY `idInstructor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
