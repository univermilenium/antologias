-- phpMyAdmin SQL Dump
-- version 4.0.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-09-2013 a las 18:38:25
-- Versión del servidor: 5.0.51b-community-nt-log
-- Versión de PHP: 5.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `antologias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE IF NOT EXISTS `carreras` (
  `ID_CAR` int(10) unsigned NOT NULL auto_increment,
  `PLANTEL` int(11) NOT NULL,
  `CARRERA` varchar(25) NOT NULL,
  `DESCRIPCION` tinytext NOT NULL,
  PRIMARY KEY  (`ID_CAR`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`ID_CAR`, `PLANTEL`, `CARRERA`, `DESCRIPCION`) VALUES
(1, 1, 'CRIM', 'CRIMINOLOGIA'),
(2, 1, 'HOLA', 'PRUEBAS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descargas`
--

CREATE TABLE IF NOT EXISTS `descargas` (
  `ID_DES` int(8) unsigned NOT NULL auto_increment,
  `ID_MAT` int(11) NOT NULL,
  `DOC` int(11) NOT NULL,
  `FECHA` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`ID_DES`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `descargas`
--

INSERT INTO `descargas` (`ID_DES`, `ID_MAT`, `DOC`, `FECHA`) VALUES
(1, 1, 1, '2013-09-04 22:30:11'),
(2, 1, 5, '2013-09-04 22:30:27'),
(3, 1, 40, '2013-09-04 23:22:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE IF NOT EXISTS `documentos` (
  `ID_DOC` int(10) unsigned NOT NULL auto_increment,
  `CARRERA` varchar(25) NOT NULL,
  `GRADO` int(11) NOT NULL,
  `MATERIA` varchar(50) NOT NULL,
  `CLAVE` varchar(30) NOT NULL,
  `AUTOR` tinytext NOT NULL,
  `RUTA` tinytext NOT NULL,
  PRIMARY KEY  (`ID_DOC`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=101 ;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`ID_DOC`, `CARRERA`, `GRADO`, `MATERIA`, `CLAVE`, `AUTOR`, `RUTA`) VALUES
(1, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoonlinederechotolucaderecho.txt'),
(2, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechotolucaderechorayonderecho.txt'),
(3, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucauniverelearningrayonelearning.txt'),
(4, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerunivertolucauniverelearning.txt'),
(5, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonderechorayonelearningtoluca.txt'),
(6, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechouniverderechorayononline.txt'),
(7, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonelearningelearningonlinederecho.txt'),
(8, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayononlinederechouniveronline.txt'),
(9, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineunivertolucaderechotoluca.txt'),
(10, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearninguniverelearningelearningderecho.txt'),
(11, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonderechoonlineelearningrayon.txt'),
(12, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerelearninguniveronlineuniver.txt'),
(13, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoderechorayonrayonderecho.txt'),
(14, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaderechoonlineonlineonline.txt'),
(15, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlinederechotolucarayonderecho.txt'),
(16, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearninguniverelearningunivertoluca.txt'),
(17, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechorayonuniverrayononline.txt'),
(18, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearningderechoonlineonlineelearning.txt'),
(19, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayononlineelearningderechoelearning.txt'),
(20, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineelearningtolucauniverderecho.txt'),
(21, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaonlineelearningelearninguniver.txt'),
(22, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineuniverrayontolucarayon.txt'),
(23, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerelearningelearningonlinerayon.txt'),
(24, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaelearningrayonrayonelearning.txt'),
(25, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucarayonderechoderechoelearning.txt'),
(26, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucatolucaelearningonlinerayon.txt'),
(27, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonderechoderechoonlinederecho.txt'),
(28, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univeronlinerayonrayonuniver.txt'),
(29, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearningelearningderechouniveronline.txt'),
(30, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoelearningrayonuniverrayon.txt'),
(31, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoonlineuniveruniveronline.txt'),
(32, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univeronlineelearningtolucaelearning.txt'),
(33, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucarayonderechouniverrayon.txt'),
(34, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerrayonrayonelearningderecho.txt'),
(35, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoelearningonlineuniverderecho.txt'),
(36, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoelearningtolucaonlinederecho.txt'),
(37, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayontolucaonlinerayonelearning.txt'),
(38, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoelearningonlineunivertoluca.txt'),
(39, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerrayononlinederechoelearning.txt'),
(40, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonrayonderechorayonderecho.txt'),
(41, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaderechoonlineonlinetoluca.txt'),
(42, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaderechoelearningonlineelearning.txt'),
(43, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayontolucaderechoonlineuniver.txt'),
(44, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaelearningonlinerayonderecho.txt'),
(45, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayontolucaonlineelearningelearning.txt'),
(46, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaderechoelearningunivertoluca.txt'),
(47, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechotolucaderechoderechoonline.txt'),
(48, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerderechoelearninguniverrayon.txt'),
(49, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univertolucatolucaderechoderecho.txt'),
(50, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineuniveruniverderechorayon.txt'),
(51, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayontolucauniverelearningrayon.txt'),
(52, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucarayononlinetolucauniver.txt'),
(53, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univeruniverderechorayontoluca.txt'),
(54, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerunivertolucatolucarayon.txt'),
(55, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayononlinerayononlinerayon.txt'),
(56, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearningderechoonlinederechoelearning.txt'),
(57, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univeronlinetolucaderechoonline.txt'),
(58, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucarayontolucaelearningderecho.txt'),
(59, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonderechotolucaonlinederecho.txt'),
(60, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonrayonuniverderechotoluca.txt'),
(61, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineonlineonlinetolucaonline.txt'),
(62, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univeruniveruniverrayonuniver.txt'),
(63, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechotolucaonlinederechoonline.txt'),
(64, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineonlinerayontolucauniver.txt'),
(65, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechotolucaderechoonlineuniver.txt'),
(66, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoonlineunivertolucaelearning.txt'),
(67, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechotolucatolucaderechorayon.txt'),
(68, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineelearningunivertolucatoluca.txt'),
(69, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonrayonunivertolucauniver.txt'),
(70, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechorayonderechotolucaderecho.txt'),
(71, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlinetolucaderechouniverrayon.txt'),
(72, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerrayontolucauniverderecho.txt'),
(73, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonelearningelearningonlinerayon.txt'),
(74, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearninguniverderechouniveronline.txt'),
(75, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlinetolucauniverderechorayon.txt'),
(76, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonderechoonlinederechorayon.txt'),
(77, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoonlineelearningtolucarayon.txt'),
(78, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonrayontolucarayonelearning.txt'),
(79, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearningelearningelearningderechotoluca.txt'),
(80, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univerderechoderechoelearningderecho.txt'),
(81, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearningunivertolucaunivertoluca.txt'),
(82, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlineelearningderechoderechoonline.txt'),
(83, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonrayonrayonunivertoluca.txt'),
(84, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayononlinetolucaelearningrayon.txt'),
(85, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayononlineuniveronlineelearning.txt'),
(86, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearninguniverderechoelearningderecho.txt'),
(87, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoelearningonlinederechoderecho.txt'),
(88, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaonlinederechotolucaderecho.txt'),
(89, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayonuniverderechorayononline.txt'),
(90, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucarayonelearninguniveruniver.txt'),
(91, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearningtolucaderechotolucatoluca.txt'),
(92, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucauniverderechoelearningonline.txt'),
(93, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/elearninguniverrayonderechoelearning.txt'),
(94, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/derechoonlinederechoelearningelearning.txt'),
(95, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/univeruniverrayonderechotoluca.txt'),
(96, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucauniverelearningelearningelearning.txt'),
(97, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlinerayontolucaelearningonline.txt'),
(98, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/tolucaonlinederechouniverrayon.txt'),
(99, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/onlinederechorayonelearningderecho.txt'),
(100, 'CRIM', 4, 'DERECHO', 'CLAVEDERECHO', 'autor', '/derecho/rayontolucatolucauniveruniver.txt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `ID_LOG` int(10) unsigned NOT NULL auto_increment,
  `ID_MAT` int(11) NOT NULL,
  `PLANTEL` int(11) NOT NULL,
  `CARRERA` varchar(30) NOT NULL,
  `FECHA` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`ID_LOG`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `log`
--

INSERT INTO `log` (`ID_LOG`, `ID_MAT`, `PLANTEL`, `CARRERA`, `FECHA`) VALUES
(1, 1, 1, 'CRIM', '2013-09-04 19:10:24'),
(2, 1, 1, 'CRIM', '2013-09-04 19:15:18'),
(3, 1, 1, 'CRIM', '2013-09-04 19:44:15'),
(4, 1, 1, 'CRIM', '2013-09-04 19:45:23'),
(5, 1, 1, 'CRIM', '2013-09-04 19:45:43'),
(6, 1, 1, 'CRIM', '2013-09-04 21:20:14'),
(7, 1, 1, 'CRIM', '2013-09-04 21:28:11'),
(8, 1, 1, 'CRIM', '2013-09-04 21:29:27'),
(9, 1, 1, 'HOLA', '2013-09-04 21:32:17'),
(10, 1, 1, 'CRIM', '2013-09-04 21:34:08'),
(11, 1, 1, 'CRIM', '2013-09-04 21:36:21'),
(12, 1, 1, 'CRIM', '2013-09-04 21:40:18'),
(13, 1, 1, 'CRIM', '2013-09-04 21:43:47'),
(14, 1, 1, 'CRIM', '2013-09-04 21:52:26'),
(15, 1, 1, 'CRIM', '2013-09-04 21:53:22'),
(16, 1, 1, 'CRIM', '2013-09-04 21:56:38'),
(17, 1, 1, 'CRIM', '2013-09-04 21:57:32'),
(18, 1, 1, 'CRIM', '2013-09-04 22:05:56'),
(19, 1, 1, 'CRIM', '2013-09-04 22:07:41'),
(20, 1, 1, 'CRIM', '2013-09-04 22:43:15'),
(21, 1, 1, 'HOLA', '2013-09-04 22:59:01'),
(22, 1, 1, 'CRIM', '2013-09-04 23:00:11'),
(23, 1, 1, 'CRIM', '2013-09-04 23:22:52'),
(24, 1, 1, 'CRIM', '2013-09-04 23:23:30'),
(25, 1, 1, 'CRIM', '2013-09-04 23:23:57'),
(26, 1, 1, 'CRIM', '2013-09-04 23:24:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriculas`
--

CREATE TABLE IF NOT EXISTS `matriculas` (
  `ID_MAT` int(8) unsigned NOT NULL auto_increment,
  `MATRICULA` varchar(20) NOT NULL,
  `NOMBRE` varchar(60) NOT NULL,
  `PATERNO` varchar(60) NOT NULL,
  `MATERNO` varchar(60) NOT NULL,
  `PLANTEL` int(11) NOT NULL,
  `CARRERA` varchar(60) NOT NULL,
  PRIMARY KEY  (`ID_MAT`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `matriculas`
--

INSERT INTO `matriculas` (`ID_MAT`, `MATRICULA`, `NOMBRE`, `PATERNO`, `MATERNO`, `PLANTEL`, `CARRERA`) VALUES
(1, '1234567890', 'Pablo César', 'Sánchez', 'Porta', 1, 'CRIM');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
