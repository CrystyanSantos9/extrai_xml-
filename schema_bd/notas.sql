-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 22-Jul-2019 às 23:13
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `grupo`
--

DROP TABLE IF EXISTS `grupo`;
CREATE TABLE IF NOT EXISTS `grupo` (
  `idgrp` int(11) NOT NULL AUTO_INCREMENT,
  `grupoPrincipal` varchar(50) DEFAULT NULL,
  `subGrupo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idgrp`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `grupo`
--

INSERT INTO `grupo` (`idgrp`, `grupoPrincipal`, `subGrupo`) VALUES
(142, 'Confeitaria', 'chocolates'),
(143, 'Confeitaria', 'chocolates'),
(144, 'Confeitaria', 'chocolates'),
(145, 'Confeitaria', 'chocolates'),
(146, 'Confeitaria', 'chocolates'),
(147, 'Confeitaria', 'chocolates'),
(148, 'Confeitaria', 'chocolates'),
(149, 'Confeitaria', 'chocolates'),
(150, 'Confeitaria', 'chocolates'),
(151, 'Confeitaria', 'chocolates'),
(152, 'Confeitaria', 'chocolates'),
(153, 'Confeitaria', 'chocolates'),
(154, 'Confeitaria', 'chocolates'),
(155, 'Confeitaria', 'chocolates'),
(156, 'Confeitaria', 'chocolates'),
(157, 'Confeitaria', 'chocolates'),
(158, 'Confeitaria', 'chocolates'),
(159, 'Confeitaria', 'chocolates'),
(160, 'Confeitaria', 'chocolates'),
(161, 'Confeitaria', 'chocolates'),
(162, 'Confeitaria', 'chocolates'),
(163, 'Confeitaria', 'chocolates'),
(164, 'Confeitaria', 'chocolates'),
(165, 'Confeitaria', 'chocolates'),
(166, 'Confeitaria', 'chocolates'),
(167, 'Confeitaria', 'chocolates'),
(168, 'Confeitaria', 'chocolates'),
(169, 'Confeitaria', 'chocolates'),
(170, 'Confeitaria', 'chocolates'),
(171, 'Confeitaria', 'chocolates'),
(172, 'Confeitaria', 'chocolates'),
(173, 'Confeitaria', 'chocolates'),
(174, 'Confeitaria', 'chocolates'),
(175, 'Confeitaria', 'chocolates'),
(176, 'Confeitaria', 'chocolates'),
(177, 'Confeitaria', 'chocolates'),
(178, 'Confeitaria', 'chocolates'),
(179, 'Confeitaria', 'chocolates'),
(180, 'Confeitaria', 'chocolates'),
(181, 'Confeitaria', 'chocolates'),
(182, 'Confeitaria', 'chocolates'),
(183, 'Confeitaria', 'chocolates'),
(184, 'Confeitaria', 'chocolates'),
(185, 'Confeitaria', 'chocolates'),
(186, 'Confeitaria', 'chocolates'),
(187, 'Confeitaria', 'chocolates'),
(188, 'Confeitaria', 'chocolates'),
(189, 'Confeitaria', ''),
(190, 'informÃ¡tica', 'chocolates');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notas_recebidas`
--

DROP TABLE IF EXISTS `notas_recebidas`;
CREATE TABLE IF NOT EXISTS `notas_recebidas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ndf` varchar(20) DEFAULT NULL,
  `natop` varchar(30) DEFAULT NULL,
  `de` varchar(30) DEFAULT NULL,
  `emp` varchar(100) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `cfop` varchar(10) DEFAULT NULL,
  `un` varchar(5) DEFAULT NULL,
  `qtd` varchar(20) DEFAULT NULL,
  `vlrunt` varchar(20) DEFAULT NULL,
  `tot` varchar(20) DEFAULT NULL,
  `grp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1073 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `notas_recebidas`
--

INSERT INTO `notas_recebidas` (`id`, `ndf`, `natop`, `de`, `emp`, `descricao`, `cfop`, `un`, `qtd`, `vlrunt`, `tot`, `grp`) VALUES
(1071, '07358427', 'Venda a vista', '2019-06-29T07:41:00-03:00', 'PEIXARIA LEME LTDA', 'SALMON PREM EVISC 12-14 LB ISP', '5102', 'KG', '12.0000', '37.9000000000', '454.80', NULL),
(1072, '07358427', 'Venda a vista', '2019-06-29T07:41:00-03:00', 'PEIXARIA LEME LTDA', 'Olho de Cao', '5102', 'KG', '12.0000', '19.9000000000', '238.80', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
