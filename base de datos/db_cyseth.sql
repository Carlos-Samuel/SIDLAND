-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-07-2021 a las 00:08:52
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_cyseth`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t01miembros`
--

CREATE TABLE `t01miembros` (
  `t01id` int(11) NOT NULL,
  `t01nombres` varchar(256) NOT NULL,
  `t01apellidos` varchar(256) NOT NULL,
  `t01descripcion` varchar(555) DEFAULT NULL,
  `t01correo` varchar(256) NOT NULL,
  `t01celular` varchar(256) NOT NULL,
  `t01foto` varchar(256) NOT NULL,
  `t01estado` int(3) NOT NULL,
  `t01CvLAC` varchar(256) NOT NULL,
  `t01GrupLAC` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t01miembros`
--

INSERT INTO `t01miembros` (`t01id`, `t01nombres`, `t01apellidos`, `t01descripcion`, `t01correo`, `t01celular`, `t01foto`, `t01estado`, `t01CvLAC`, `t01GrupLAC`) VALUES
(1, 'Juan Camilo', 'Suarez Quiñones', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'juan.suarez.quinones@unillanos.edu.co', '3204463808', 'camilo.jpeg', 3, '', ''),
(2, 'Carlos Samuel', 'Medina Pardo', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'carlos.medina@unillanos.edu.co', '3186902754', 'samuel.jpeg', 3, '', ''),
(3, 'Yhon Fredy', 'Segura Enciso', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'yhon.segura@unillanos.edu.co', '3133976671', 'fredy.jpeg', 3, '', ''),
(4, 'Brayan Santiago', 'Roncancio Guerra', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'brayan.roncancio@unillanos.edu.co', '3188650760', 'user.jpeg', 3, '', ''),
(5, 'Linda Johana', 'Patarroyo Acero', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'linda.patarroyo@unillanos.edu.co', '3134695745', 'linda.jpeg', 3, '', ''),
(6, 'Andrés Camilo', 'Rey Lesmes', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'andres.rey@unillanos.edu.co', '3218073610', 'andres.jpeg', 4, '', ''),
(7, 'Jessica', 'Gómez Manrique ', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'jessica.gomez.manrique@unillanos.edu.co', '3114970775', 'user.jpeg', 3, '', ''),
(8, 'Mónica Fernanda', 'Gómez Gómez', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'monica.gomez.gomez@unillanos.edu.co', '3115870438', 'monica.jpeg', 3, '', ''),
(9, 'Mario Alexander', 'Morales Hernandez', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'mario.morales@unillanos.edu.co', '3224330039', 'user.jpeg', 3, '', ''),
(10, 'Daniel Humberto', 'Salgado Gonzalez ', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'daniel.salgado@unillanos.edu.co', '3213963904', 'user.jpeg', 3, '', ''),
(11, 'Richard Hernando', 'Bejarano Parrado ', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'richard.bejarano@unillanos.edu.co', '3506933085', 'richard.jpeg', 3, '', ''),
(12, 'Wilquer David', 'Pulido Mora', 'Estudiante de ingeniería de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'wilquer.pulido@unillanos.edu.co', '3053944291', 'david.jpeg', 4, '', ''),
(13, 'Felipe Andrés', 'Corredor Chavarro', 'Ingeniero de sistemas, especialista y magíster en el área de Telemática, profesor investigador adscrito a la escuela de ingenieria. Líneas de investigación: telematica y ciberseguridad, computación', 'felcorredor@unillanos.edu.co', '315 3538755', 'felipe.jpeg', 1, 'https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000696455', 'https://scienti.minciencias.gov.co/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0000696455'),
(14, 'Diana Cristina', 'Franco Mora', 'Ingeniero de sistemas, especialista y magíster en el área de Telemática, profesor investigador adscrito a la escuela de ingenieria. Líneas de investigación: telematica y ciberseguridad, computación', 'dfranco@unillanos.edu.co', '315 6028131', 'user.jpeg', 1, '', ''),
(19, 'Elvis Miguel', 'Perez Rodriguez', 'Ingeniero de sistemas, especialista y magíster en el área de ingeniería de software, profesor investigador adscrito a la escuela de ingeniería. Líneas de investigación: ingeniería de software', 'eperez@unillanos.edu.co', '310 7779725', 'user.jpeg', 1, '', ''),
(20, 'Roger', 'Calderon Moreno', 'Ingeniero de sistemas, especialista y magíster en el área de ingeniería de software, profesor investigador adscrito a la escuela de ingeniería. Líneas de investigación: ingeniería de software', 'rcalderonmoreno@unillanos.edu.co', '311 8371736', 'user.jpeg', 1, '', ''),
(21, 'Wolfang Sebastián ', 'Corredor Chavarro', 'Ingeniero de sistemas, auxiliar de investigación en el área de telematica y ciberseguridad con amplias habilidades en desarrollo de software y telemática.', 'wolfang.corredor@unillanos.edu.co', '3183451212', 'user.jpeg', 5, '', ''),
(22, 'Hernan Oswaldo', 'Porras Castro', 'Estudiante de maestría en Ingeniería de Sistemas y Computación en la Universidad Nacional de Colombia y convenio con Unillanos, Egresado de la Universidad de los Llanos del programa de Ingeniería de Sistemas.', 'hernan.porras@unillanos.edu.co', '3123133092', 'user.jpeg', 5, 'http://scienti.colciencias.gov.co:8081/cvlac/visualizador/generarCurriculoCv.do?cod_rh=0001514761', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t02usuarios`
--

CREATE TABLE `t02usuarios` (
  `t02id` int(11) NOT NULL,
  `t02usuario` varchar(256) NOT NULL,
  `t02password` varchar(256) NOT NULL,
  `t02nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t02usuarios`
--

INSERT INTO `t02usuarios` (`t02id`, `t02usuario`, `t02password`, `t02nombre`) VALUES
(1, 'windrunner', '7730de69e01e890be313b7e407b60c1b', 'Carlos Samuel Medina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t03proyectos`
--

CREATE TABLE `t03proyectos` (
  `t03id` int(11) NOT NULL,
  `t03nombre` varchar(256) NOT NULL,
  `t03areadeenfoque` varchar(256) NOT NULL,
  `t03descripcion` varchar(1024) NOT NULL,
  `t03estado` int(10) NOT NULL,
  `t03imagen` varchar(256) NOT NULL,
  `t03linea` varchar(255) NOT NULL,
  `t03anio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t03proyectos`
--

INSERT INTO `t03proyectos` (`t03id`, `t03nombre`, `t03areadeenfoque`, `t03descripcion`, `t03estado`, `t03imagen`, `t03linea`, `t03anio`) VALUES
(3, 'Sistema asistido por computador para diseño de redes MAN por fibra óptica, basadas en tecnología ATM', 'Herramientas academicas', 'Herramienta pedagógica de software, para el diseño asistido por computadora de redes MAN basadas en ATM, multiplataforma y que apoya en los procesos de enseñanza asistidos y autónomos de Diseño MAN de redes de fibra óptica sobre ATM. Sirve de apoyo en laboratorios, Trabajos, cátedras virtuales, entre otros procesos académicos que se dan en el programa y en cada una de sus asignaturas.', 2, 'man.jpeg', 'Investigación y desarrollo', 2011),
(4, 'SISTEMA AUTOMÁTICO DE ALTA DISPONIBILIDAD PARA ENVÍO DE MÚLTIPLES ALERTAS REMOTAS ANTE INCIDENTES DE SEGURIDAD EN SERVIDORES TIPO UNIX\r\n', 'Servidores Unix', 'Módulo de gestión y envío de alertas múltiples remotas, de alta disponibilidad, para sistemas computacionales de seguridad y monitorización en servidores tipo UNIX, integrado a través de una interfaz de invocación basada en protocolos abiertos, que eficientemente atienda la detección de anomalías y genere reportes de incidentes en tiempo real.', 2, 'unix.jpeg', 'Investigación y desarrollo', 2013),
(5, 'SISTEMA BASADO EN INTELIGENCIA COMPUTACIONAL PARA ASISTIR EN ADMINISTRACIÓN DE SEGURIDAD DE REDES Y DETECCIÓN DE ANOMALÍAS COMPUTACIONALES A PROFESIONALES Y ESTUDIANTES DEL ÁREA DE TELEINFORMÁTICA EN COLOMBIA\r\n', 'Herramientas de seguridad', 'Esta investigación generará una herramienta de laboratorio para la línea de teleinformática en la Universidad de los Llanos y un conocimiento avanzado para el diseño y desarrollo de nuevos proyectos y herramientas de seguridad.', 2, 'ai.jpeg', 'Investigación y desarrollo ', 2013),
(6, 'Sistema Automático de Monitorización y Prevención de Fallos en Servidores tipo Unix. (SAMP)', 'Servidores Unix', 'SAMP es una herramienta tecnológica que automáticamente pueda monitorizar y prevenir fallos en Servidores tipo Unix, capaz de realizar acciones de control en tiempo real, pudiendo ser usada como herramienta de productividad en entornos reales (capaz de advertir riesgos al administrador del sistema).', 2, 'unix.jpeg', 'Investigación y desarrollo', 2012),
(7, 'Modelo telemático de seguridad para sistemas web de gestión documental, basado en confidencialidad y software libre. GISMOD', 'Herramientas de seguridad', 'Este proyecto plantea la definición de una arquitectura de seguridad, políticas y un proceso orientador para la adopción de sistemas de gestión documental como alternativa de solución para las IES, realizando verificación en la Escuela de Ingeniería de la Universidad de los Llanos, que permitirá un referente importante desde el conocimiento y el software generado a los demás entes de la región', 2, 'ges.png', 'Investigación y desarrollo ', 2016),
(8, 'sistema de voto telemático seguro, con urna electrónica, basado en biometría de huella dactilar, para implementación de democracia digital en Instituciones educativas (SIVIT)', 'Voto telematico', 'La sociedad de la información ha evidenciado una rápida y creciente tendencia a que las actividades cotidianas de sus ciudadanos, realizadas por medios tradicionales, actualmente convergen hacia el aprovechamiento de las redes telemáticas para su mejor ejecución. Tal es el caso del correo convencional, que fue desplazado en alto porcentaje por el correo electrónico', 2, 'voto.jpeg', 'Investigación y desarrollo ', 2015),
(9, 'Sistema de gestión de riesgos de seguridad de la información, basado en correlación de los estándares ISO27005, ISO 31000 y la valoración del riesgo tecnológico organizacional, orientado a PyMES del departamento del Meta. RISMATT', 'Herramientas de seguridad', 'Según lo establecido por la Organización Internacional de Estándares (ISO) en su estándar 27001, la seguridad de la información se enfoca en ¿¿proteger los activos de información y minimizar su riesgo ante amenazas¿.¿. Es por ello que en la industria se disponen de estándares específicos que definen metodologías y buenas prácticas para la gestión del riesgo, como son ISO 27005, ISO 31000, Magerit, Octave, entre otros.', 2, 'ges.png', 'Investigación y desarrollo ', 2016),
(10, 'Asistente metodológico basado en inferencia y orientado a la web; para la implementación de Auditorias de seguridad de la información sobre las norma ISO/IEC 27001.', 'Auditorias de seguridad', 'La gestión de la seguridad es un aspecto critico en las organizaciones, no solo a nivel de asumir una de varias normas o estándares (ISO27001, COBIT, OSSTMM, etc), sino a nivel de manejar toda la información que genera el proceso de la seguridad de la información, así como adecuarla para la toma de decisiones. ', 2, 'audit.jpeg', 'Investigación y desarrollo ', 2016),
(11, 'SISTEMA DISTRIBUIDO DE CONTROL DE ACCESO, SUPERVISIÓN Y ALERTAS, PARA SALAS DE INFORMÁTICA DE INSTITUCIONES EDUCATIVAS, BASADO EN BIOMETRÍA Y COMPUTACIÓN INTELIGENTE. SASSI', 'Sistemas distribuidos', 'En las instituciones educativas se consolida cada vez más, el uso de las TIC en los procesos de enseñanza ¿aprendizaje; las instituciones de educación media y universitaria a pesar de estar apostándole a mejorar su capacidad instalada en cuanto a salas de informática para atender la amplia demanda de este servicio, sigue con baja proporción de computadores por número de estudiantes, lo que conlleva a que sus salas de informática presenten altas tasas de uso; sumándole a esta situación que el personal administrativo que supervisa y controla el acceso y uso de las salas, también es reducido.', 2, 'bio.jpeg', 'Investigación y desarrollo ', 2017);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t03_t01`
--

CREATE TABLE `t03_t01` (
  `id` int(11) NOT NULL,
  `t03id` int(255) NOT NULL,
  `t01id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t03_t01`
--

INSERT INTO `t03_t01` (`id`, `t03id`, `t01id`) VALUES
(4, 3, 13),
(5, 4, 13),
(6, 5, 13),
(7, 6, 13),
(8, 7, 13),
(9, 8, 13),
(10, 9, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t04ponencias`
--

CREATE TABLE `t04ponencias` (
  `t04id` int(11) NOT NULL,
  `t04nombre` varchar(255) NOT NULL,
  `t04evento` varchar(255) NOT NULL,
  `t04lugar` varchar(255) NOT NULL,
  `t04tipo` varchar(255) NOT NULL,
  `t04autor` int(255) NOT NULL,
  `t04descripcion` varchar(255) NOT NULL,
  `t04fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t04ponencias`
--

INSERT INTO `t04ponencias` (`t04id`, `t04nombre`, `t04evento`, `t04lugar`, `t04tipo`, `t04autor`, `t04descripcion`, `t04fecha`) VALUES
(2, 'SISTEMA DISTRIBUIDO PARA MONITORIZACIÓN Y ALERTAS ANTE FALLOS DE SEGURIDAD INFORMÁTICA', 'Congreso Internacional de Electrónica, control y telecomunicaciones 2013', 'Universidad Distrital, Facultad Tecnológica, Bogotá, Colombia ', 'Congreso, internacional', 13, 'Nombre de la institución:UNIVERSIDAD DISTRITAL FRANCISCO JOSÉ DE CALDAS Tipo de vinculaciónPatrocinadora\r\n', '2013-11-13'),
(3, 'SISTEMA DE VOTO TELEMÁTICO CON URNA ELECTRÓNICA PARA IMPLEMENTAR DEMOCRACIA DIGITAL EN INSTITUCIONES EDUCATIVAS ', 'Congreso Internacional de Ciencias Básicas e Ingeniería', 'GHL Grand Hotel Villavicencio', 'Congreso, internacional', 13, 'Nombre de la institución:UNIVERSIDAD DE LOS LLANOS Tipo de vinculaciónPatrocinadora\r\n', '2016-10-21'),
(4, 'INGENIERÍA EN LA WEB CON SOFTWARE LIBRE', ' IV JORNADA DE SOFTWARE LIBRE', 'Universidad de los Llanos, Villavicencio, Colombia.', 'Otro', 13, '', '2010-10-01'),
(5, 'Hacking y Seguridad Informática en Debian GNU/Linux', 'V JORNADA DE SOFTWARE LIBRE', 'Universidad de los Llanos, Villavicencio, Colombia.', 'Congreso', 13, 'Patrocinadora UNIVERSIDAD DE LOS LLANOS ', '2011-08-01'),
(6, 'Implementación de los servicios de autenticación fuerte multifactor y confidencialidad, para la protección de documentación electrónica', 'XIII LACCEI INTERNATIONAL CONFERENCE ON ENGINEERING AND TECHNOLOGIE', 'Santo Domingo', 'Congreso Internacional', 13, '', '2015-07-29'),
(7, 'Desarrollo de una Herramienta de Laboratorio para Simulación de Entornos Unix ', 'Ninth LACCEI Latin American and Caribbean Conference (LACCEI¿2011)', 'Medellín', 'Congreso nacional', 13, '', '2011-08-01'),
(8, 'Hacking ético en Debian Gnu/Linux, como escenario Integrador de prácticas en Seguridad informática', 'Congreso Iberoamericano de Seguridad Informática', 'Universidad Autónoma de Bucaramanga  ', 'Congreso internacional', 13, '', '2011-11-03'),
(9, 'VI JORNADA DE SOFTWARE LIBRE', 'MECANISMOS DE DETECCIÓN DE ANOMALÍAS COMPUTACIONALES E INTRUSIONES DE RED', 'Villavicencio', 'Congreso nacional', 13, '', '2012-10-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t04_t01`
--

CREATE TABLE `t04_t01` (
  `id` int(11) NOT NULL,
  `t04id` int(255) NOT NULL,
  `t01id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t04_t01`
--

INSERT INTO `t04_t01` (`id`, `t04id`, `t01id`) VALUES
(1, 2, 13),
(2, 4, 13),
(3, 3, 13),
(4, 5, 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t05revistas`
--

CREATE TABLE `t05revistas` (
  `t05id` int(11) NOT NULL,
  `t05nombre` varchar(255) NOT NULL,
  `t05revista` varchar(255) NOT NULL,
  `t05lugar` varchar(255) NOT NULL,
  `t05categoria` varchar(255) NOT NULL,
  `t05descripcion` varchar(255) NOT NULL,
  `t05anio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t05revistas`
--

INSERT INTO `t05revistas` (`t05id`, `t05nombre`, `t05revista`, `t05lugar`, `t05categoria`, `t05descripcion`, `t05anio`) VALUES
(2, 'Asturiux: sistema de deteccion de anomalias computacionales', 'Visión Electrónica: Algo Más Que Un Estado Sólido ', 'Colombia', 'ISSN: 1909-9746', '', 2014),
(3, 'ADIM: SISTEMA ASISTIDO POR COMPUTADOR PARA DISEÑO DE REDES MAN BASADAS EN ATM', 'Revista Educación En Ingeniería', 'Colombia ', 'ISSN: 1900-8260', 'Diseño de redes MAN, Sistema asistido por computador, Material educativo computarizado, ATM, Herramienta pedagógica,', 2010),
(4, 'SANI: Assistant for Information Security Auditing on ISO/IEC 27001', 'Visión Electrónica: Algo Más Que Un Estado Sólido', 'Colombia', 'ISSN: 1909-9746', 'Strong access control, security management, iso27001, security auditing,', 2019),
(5, 'Implementation of cybersecurity risk analysis systems in Colombia', 'Visión Electrónica: Algo Más Que Un Estado Sólido', 'Colombia', 'ISSN: 1909-9746', 'Sensitive data, iso27005, information security, risk management,', 2019),
(6, 'Mechanical Analysis of a Hermetic Seal System for Applications in the Industry', 'Journal of Engineering and Applied Sciences', 'Pakistan', 'ISSN: 1816-949X', 'Medwell Journals', 2019);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t05_t01`
--

CREATE TABLE `t05_t01` (
  `id` int(11) NOT NULL,
  `t01id` int(255) NOT NULL,
  `t05id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t05_t01`
--

INSERT INTO `t05_t01` (`id`, `t01id`, `t05id`) VALUES
(3, 13, 2),
(4, 13, 3),
(5, 14, 3),
(6, 13, 4),
(7, 14, 4),
(8, 14, 5),
(9, 13, 5),
(10, 13, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t06software`
--

CREATE TABLE `t06software` (
  `t06id` int(11) NOT NULL,
  `t06anio` int(10) NOT NULL,
  `t06descripcion` varchar(255) NOT NULL,
  `t06nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t06software`
--

INSERT INTO `t06software` (`t06id`, `t06anio`, `t06descripcion`, `t06nombre`) VALUES
(1, 2013, 'Ingeniería y Tecnología -- Ingenierías Eléctrica, Electrónica e Informática -- Ingeniería de Sistemas y Comunicaciones,\r\n', 'Asturiux v1.0 - Anomalies Detection System Tool'),
(2, 2012, 'Desarrollo de programas (software) y prestación de servicios en informática - Desarrollo de programas (software), Actividades de asesoramiento y consultoría a las empresas - Asesoramiento y consultoría en arquitectura e ingeniería,', 'SImux v1.0 - Simulador multiplataforma de shell de sistemas Unix aplicado a programas de ingeniería de sistemas'),
(3, 2012, 'Desarrollo de programas (software) y prestación de servicios en informática - Desarrollo de programas (software), Actividades de asesoramiento y consultoría a las empresas - Asesoramiento y consultoría en arquitectura e ingeniería,', 'Adim v1.0, Nombre comercial: Adim v1.0'),
(4, 2017, 'Seguridad informática, iso27005, gestión de riesgo, controles de seguridad, información sensible.', 'Nombre comercial: RISMATT V1.0'),
(5, 2017, 'Anonimato, confidencialidad, Urna eletrónica,', 'SIVIT V1.0'),
(6, 2017, 'Confidencialidad, información sensible, controles de seguridad.', 'SANI V1.0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t06_t01`
--

CREATE TABLE `t06_t01` (
  `id` int(11) NOT NULL,
  `t01id` int(255) NOT NULL,
  `t06id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t06_t01`
--

INSERT INTO `t06_t01` (`id`, `t01id`, `t06id`) VALUES
(3, 13, 1),
(4, 13, 2),
(5, 14, 2),
(6, 13, 3),
(7, 14, 3),
(8, 13, 4),
(9, 14, 4),
(10, 13, 5),
(11, 14, 5),
(12, 13, 6),
(13, 14, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t07eventos`
--

CREATE TABLE `t07eventos` (
  `t07id` int(11) NOT NULL,
  `t07nombre` varchar(255) NOT NULL,
  `t07lugar` varchar(255) NOT NULL,
  `t07fecha` date NOT NULL,
  `t07descripcion` varchar(255) NOT NULL,
  `t07imagen` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `t07eventos`
--

INSERT INTO `t07eventos` (`t07id`, `t07nombre`, `t07lugar`, `t07fecha`, `t07descripcion`, `t07imagen`) VALUES
(1, '1º Congreso de tecnologías abiertas', 'Auditorio Jaime Garzon, Sede San Antonio, Unillanos', '2014-10-24', 'Hacking y Seguridad, Biotecnologia, Inteligencia Computacional, Geomática, Hardware libre y robótica, Construcción de software, Teleinformática, Tecnologías en desarrollo, Instrumentación', 'Cta1.jpeg'),
(2, '2º Congreso de tecnologías abiertas', 'Auditorio Jaime Garzon, Sede San Antonio, Unillanos', '2015-11-13', 'Hacking y Seguridad, inteligencia Computacional, desarrollo de videojuegos, animación y modelado 3D, desarrollo para mobiles, computación grafíca, telemática y redes, cloud computing, hardware libre, ingeniería web, Programación', 'Cta2.jpeg'),
(3, '3º Congreso de tecnologías abiertas', 'Auditorio Eduardo Carranza, Sede Barcelona, Unillanos', '2017-10-20', 'Computación inteligente, Hacking y Seguridad, inteligencia Computacional, desarrollo de videojuegos, animación y modelado 3D, desarrollo para mobiles, computación grafíca, telemática y redes, cloud computing, hardware libre, ingeniería web, Programación', 'Cta3.jpeg'),
(4, '4º Congreso de tecnologías abiertas', 'Auditorio Eduardo Carranza, Sede Barcelona, Unillanos', '2019-11-15', 'Hacking y Seguridad, inteligencia Computacional, desarrollo de videojuegos, animación y modelado 3D, desarrollo para mobiles, computación grafíca, telemática y redes, cloud computing, hardware libre, ingeniería web, Programación', 'Cta4.jpeg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t01miembros`
--
ALTER TABLE `t01miembros`
  ADD PRIMARY KEY (`t01id`);

--
-- Indices de la tabla `t02usuarios`
--
ALTER TABLE `t02usuarios`
  ADD PRIMARY KEY (`t02id`);

--
-- Indices de la tabla `t03proyectos`
--
ALTER TABLE `t03proyectos`
  ADD PRIMARY KEY (`t03id`);

--
-- Indices de la tabla `t03_t01`
--
ALTER TABLE `t03_t01`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_relacion` (`t01id`),
  ADD KEY `fk_relacion_2` (`t03id`);

--
-- Indices de la tabla `t04ponencias`
--
ALTER TABLE `t04ponencias`
  ADD PRIMARY KEY (`t04id`);

--
-- Indices de la tabla `t04_t01`
--
ALTER TABLE `t04_t01`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_relacion_8` (`t01id`),
  ADD KEY `fk_relacion_9` (`t04id`);

--
-- Indices de la tabla `t05revistas`
--
ALTER TABLE `t05revistas`
  ADD PRIMARY KEY (`t05id`);

--
-- Indices de la tabla `t05_t01`
--
ALTER TABLE `t05_t01`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_relacion_4` (`t05id`),
  ADD KEY `fk_relacion_5` (`t01id`);

--
-- Indices de la tabla `t06software`
--
ALTER TABLE `t06software`
  ADD PRIMARY KEY (`t06id`);

--
-- Indices de la tabla `t06_t01`
--
ALTER TABLE `t06_t01`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_relacion_6` (`t01id`),
  ADD KEY `fk_relacion_7` (`t06id`);

--
-- Indices de la tabla `t07eventos`
--
ALTER TABLE `t07eventos`
  ADD PRIMARY KEY (`t07id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t01miembros`
--
ALTER TABLE `t01miembros`
  MODIFY `t01id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `t02usuarios`
--
ALTER TABLE `t02usuarios`
  MODIFY `t02id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `t03proyectos`
--
ALTER TABLE `t03proyectos`
  MODIFY `t03id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `t03_t01`
--
ALTER TABLE `t03_t01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `t04ponencias`
--
ALTER TABLE `t04ponencias`
  MODIFY `t04id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `t04_t01`
--
ALTER TABLE `t04_t01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `t05revistas`
--
ALTER TABLE `t05revistas`
  MODIFY `t05id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `t05_t01`
--
ALTER TABLE `t05_t01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `t06software`
--
ALTER TABLE `t06software`
  MODIFY `t06id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `t06_t01`
--
ALTER TABLE `t06_t01`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `t07eventos`
--
ALTER TABLE `t07eventos`
  MODIFY `t07id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `t03_t01`
--
ALTER TABLE `t03_t01`
  ADD CONSTRAINT `fk_relacion` FOREIGN KEY (`t01id`) REFERENCES `t01miembros` (`t01id`),
  ADD CONSTRAINT `fk_relacion_2` FOREIGN KEY (`t03id`) REFERENCES `t03proyectos` (`t03id`);

--
-- Filtros para la tabla `t04ponencias`
--
ALTER TABLE `t04ponencias`
  ADD CONSTRAINT `fk_relacion_3` FOREIGN KEY (`t04autor`) REFERENCES `t01miembros` (`t01id`);

--
-- Filtros para la tabla `t04_t01`
--
ALTER TABLE `t04_t01`
  ADD CONSTRAINT `fk_relacion_8` FOREIGN KEY (`t01id`) REFERENCES `t01miembros` (`t01id`),
  ADD CONSTRAINT `fk_relacion_9` FOREIGN KEY (`t04id`) REFERENCES `t04ponencias` (`t04id`);

--
-- Filtros para la tabla `t05_t01`
--
ALTER TABLE `t05_t01`
  ADD CONSTRAINT `fk_relacion_4` FOREIGN KEY (`t05id`) REFERENCES `t05revistas` (`t05id`),
  ADD CONSTRAINT `fk_relacion_5` FOREIGN KEY (`t01id`) REFERENCES `t01miembros` (`t01id`);

--
-- Filtros para la tabla `t06_t01`
--
ALTER TABLE `t06_t01`
  ADD CONSTRAINT `fk_relacion_6` FOREIGN KEY (`t01id`) REFERENCES `t01miembros` (`t01id`),
  ADD CONSTRAINT `fk_relacion_7` FOREIGN KEY (`t06id`) REFERENCES `t06software` (`t06id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
