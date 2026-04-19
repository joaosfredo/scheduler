-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Dez-2019 às 19:22
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_scheduler`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_agenda`
--

CREATE TABLE `tb_agenda` (
  `age_id` int(11) NOT NULL,
  `age_dia` int(2) NOT NULL,
  `age_mes_mes` int(11) NOT NULL,
  `age_dia_dia` int(11) NOT NULL,
  `age_info` varchar(100) DEFAULT NULL,
  `age_materia` varchar(15) DEFAULT NULL,
  `age_letivo` int(11) DEFAULT NULL,
  `age_primeiro` varchar(50) NOT NULL,
  `age_segundo` varchar(50) NOT NULL,
  `age_terceiro` varchar(50) NOT NULL,
  `age_quarto` varchar(50) NOT NULL,
  `age_quinto` varchar(50) NOT NULL,
  `age_sexto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_agenda`
--

INSERT INTO `tb_agenda` (`age_id`, `age_dia`, `age_mes_mes`, `age_dia_dia`, `age_info`, `age_materia`, `age_letivo`, `age_primeiro`, `age_segundo`, `age_terceiro`, `age_quarto`, `age_quinto`, `age_sexto`) VALUES
(1, 1, 1, 4, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(2, 2, 1, 5, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(3, 3, 1, 6, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(4, 4, 1, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(5, 5, 1, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(6, 6, 1, 2, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(7, 7, 1, 3, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(8, 8, 1, 4, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(9, 9, 1, 5, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(10, 10, 1, 6, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(11, 11, 1, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(12, 12, 1, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(13, 13, 1, 2, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(14, 14, 1, 3, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(15, 15, 1, 4, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(16, 16, 1, 5, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(17, 17, 1, 6, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(18, 18, 1, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(19, 19, 1, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(20, 20, 1, 2, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(21, 21, 1, 3, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(22, 22, 1, 4, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(23, 23, 1, 5, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(24, 24, 1, 6, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(25, 25, 1, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(26, 26, 1, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(27, 27, 1, 2, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(28, 28, 1, 3, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(29, 29, 1, 4, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(30, 30, 1, 5, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(31, 31, 1, 6, 'Recesso', NULL, 2, '', '', '', '', '', ''),
(32, 1, 2, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(33, 2, 2, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(34, 3, 2, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(35, 4, 2, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(36, 5, 2, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(37, 6, 2, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(38, 7, 2, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(39, 8, 2, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(40, 9, 2, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(41, 10, 2, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(42, 11, 2, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(43, 12, 2, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(44, 13, 2, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(45, 14, 2, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(46, 15, 2, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(47, 16, 2, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(48, 17, 2, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(49, 18, 2, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(50, 19, 2, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(51, 20, 2, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(52, 21, 2, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(53, 22, 2, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(54, 23, 2, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(55, 24, 2, 2, 'Feriado', '', 2, '', '', '', '', '', ''),
(56, 25, 2, 3, 'Feriado', '', 2, '', '', '', '', '', ''),
(57, 26, 2, 4, 'Feriado', '', 2, '', '', '', '', '', ''),
(58, 27, 2, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(59, 28, 2, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(60, 29, 2, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(61, 1, 3, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(62, 2, 3, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(63, 3, 3, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(64, 4, 3, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(65, 5, 3, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(66, 6, 3, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(67, 7, 3, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(68, 8, 3, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(69, 9, 3, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(70, 10, 3, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(71, 11, 3, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(72, 12, 3, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(73, 13, 3, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(74, 14, 3, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(75, 15, 3, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(76, 16, 3, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(77, 17, 3, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(78, 18, 3, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(79, 19, 3, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(80, 20, 3, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(81, 21, 3, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(82, 22, 3, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(83, 23, 3, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(84, 24, 3, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(85, 25, 3, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(86, 26, 3, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(87, 27, 3, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(88, 28, 3, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(89, 29, 3, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(90, 30, 3, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(91, 31, 3, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(92, 1, 4, 4, NULL, NULL, 1, 'Joao', 'Joao', 'Joao', 'Joao', 'Joao', 'Joao'),
(93, 2, 4, 5, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(94, 3, 4, 6, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(95, 4, 4, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(96, 5, 4, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(97, 6, 4, 2, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(98, 7, 4, 3, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(99, 8, 4, 4, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(100, 9, 4, 5, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(101, 10, 4, 6, 'Feriado', '', 2, '', '', '', '', '', ''),
(102, 11, 4, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(103, 12, 4, 1, 'Feriado', '', 2, '', '', '', '', '', ''),
(104, 13, 4, 2, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(105, 14, 4, 3, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(106, 15, 4, 4, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(107, 16, 4, 5, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(108, 17, 4, 6, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(109, 18, 4, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(110, 19, 4, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(111, 20, 4, 2, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(112, 21, 4, 3, 'Feriado', '', 2, '', '', '', '', '', ''),
(113, 22, 4, 4, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(114, 23, 4, 5, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(115, 24, 4, 6, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(116, 25, 4, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(117, 26, 4, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(118, 27, 4, 2, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(119, 28, 4, 3, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(120, 29, 4, 4, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(121, 30, 4, 5, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(122, 1, 5, 6, 'Feriado', '', 2, '', '', '', '', '', ''),
(123, 2, 5, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(124, 3, 5, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(125, 4, 5, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(126, 5, 5, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(127, 6, 5, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(128, 7, 5, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(129, 8, 5, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(130, 9, 5, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(131, 10, 5, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(132, 11, 5, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(133, 12, 5, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(134, 13, 5, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(135, 14, 5, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(136, 15, 5, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(137, 16, 5, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(138, 17, 5, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(139, 18, 5, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(140, 19, 5, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(141, 20, 5, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(142, 21, 5, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(143, 22, 5, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(144, 23, 5, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(145, 24, 5, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(146, 25, 5, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(147, 26, 5, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(148, 27, 5, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(149, 28, 5, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(150, 29, 5, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(151, 30, 5, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(152, 31, 5, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(153, 1, 6, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(154, 2, 6, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(155, 3, 6, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(156, 4, 6, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(157, 5, 6, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(158, 6, 6, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(159, 7, 6, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(160, 8, 6, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(161, 9, 6, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(162, 10, 6, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(163, 11, 6, 5, 'Feriado', '', 2, '', '', '', '', '', ''),
(164, 12, 6, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(165, 13, 6, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(166, 14, 6, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(167, 15, 6, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(168, 16, 6, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(169, 17, 6, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(170, 18, 6, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(171, 19, 6, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(172, 20, 6, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(173, 21, 6, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(174, 22, 6, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(175, 23, 6, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(176, 24, 6, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(177, 25, 6, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(178, 26, 6, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(179, 27, 6, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(180, 28, 6, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(181, 29, 6, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(182, 30, 6, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(183, 1, 7, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(184, 2, 7, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(185, 3, 7, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(186, 4, 7, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(187, 5, 7, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(188, 6, 7, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(189, 7, 7, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(190, 8, 7, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(191, 9, 7, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(192, 10, 7, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(193, 11, 7, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(194, 12, 7, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(195, 13, 7, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(196, 14, 7, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(197, 15, 7, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(198, 16, 7, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(199, 17, 7, 6, 'Recesso', '', 2, '', '', '', '', '', ''),
(200, 18, 7, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(201, 19, 7, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(202, 20, 7, 2, 'Recesso', '', 2, '', '', '', '', '', ''),
(203, 21, 7, 3, 'Recesso', '', 2, '', '', '', '', '', ''),
(204, 22, 7, 4, 'Recesso', '', 2, '', '', '', '', '', ''),
(205, 23, 7, 5, 'Recesso', '', 2, '', '', '', '', '', ''),
(206, 24, 7, 6, 'Recesso', '', 2, '', '', '', '', '', ''),
(207, 25, 7, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(208, 26, 7, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(209, 27, 7, 2, 'Recesso', '', 2, '', '', '', '', '', ''),
(210, 28, 7, 3, 'Recesso', '', 2, '', '', '', '', '', ''),
(211, 29, 7, 4, 'Recesso', '', 2, '', '', '', '', '', ''),
(212, 30, 7, 5, 'Recesso', '', 2, '', '', '', '', '', ''),
(213, 31, 7, 6, 'Recesso', '', 2, '', '', '', '', '', ''),
(214, 1, 8, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(215, 2, 8, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(216, 3, 8, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(217, 4, 8, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(218, 5, 8, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(219, 6, 8, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(220, 7, 8, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(221, 8, 8, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(222, 9, 8, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(223, 10, 8, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(224, 11, 8, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(225, 12, 8, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(226, 13, 8, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(227, 14, 8, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(228, 15, 8, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(229, 16, 8, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(230, 17, 8, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(231, 18, 8, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(232, 19, 8, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(233, 20, 8, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(234, 21, 8, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(235, 22, 8, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(236, 23, 8, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(237, 24, 8, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(238, 25, 8, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(239, 26, 8, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(240, 27, 8, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(241, 28, 8, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(242, 29, 8, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(243, 30, 8, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(244, 31, 8, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(245, 1, 9, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(246, 2, 9, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(247, 3, 9, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(248, 4, 9, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(249, 5, 9, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(250, 6, 9, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(251, 7, 9, 2, 'Feriado', '', 2, '', '', '', '', '', ''),
(252, 8, 9, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(253, 9, 9, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(254, 10, 9, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(255, 11, 9, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(256, 12, 9, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(257, 13, 9, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(258, 14, 9, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(259, 15, 9, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(260, 16, 9, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(261, 17, 9, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(262, 18, 9, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(263, 19, 9, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(264, 20, 9, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(265, 21, 9, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(266, 22, 9, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(267, 23, 9, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(268, 24, 9, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(269, 25, 9, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(270, 26, 9, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(271, 27, 9, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(272, 28, 9, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(273, 29, 9, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(274, 30, 9, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(275, 1, 10, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(276, 2, 10, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(277, 3, 10, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(278, 4, 10, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(279, 5, 10, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(280, 6, 10, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(281, 7, 10, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(282, 8, 10, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(283, 9, 10, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(284, 10, 10, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(285, 11, 10, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(286, 12, 10, 2, 'Feriado', '', 2, '', '', '', '', '', ''),
(287, 13, 10, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(288, 14, 10, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(289, 15, 10, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(290, 16, 10, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(291, 17, 10, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(292, 18, 10, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(293, 19, 10, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(294, 20, 10, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(295, 21, 10, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(296, 22, 10, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(297, 23, 10, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(298, 24, 10, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(299, 25, 10, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(300, 26, 10, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(301, 27, 10, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(302, 28, 10, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(303, 29, 10, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(304, 30, 10, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(305, 31, 10, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(306, 1, 11, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(307, 2, 11, 2, 'Feriado', '', 2, '', '', '', '', '', ''),
(308, 3, 11, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(309, 4, 11, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(310, 5, 11, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(311, 6, 11, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(312, 7, 11, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(313, 8, 11, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(314, 9, 11, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(315, 10, 11, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(316, 11, 11, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(317, 12, 11, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(318, 13, 11, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(319, 14, 11, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(320, 15, 11, 1, 'Feriado', '', 2, '', '', '', '', '', ''),
(321, 16, 11, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(322, 17, 11, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(323, 18, 11, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(324, 19, 11, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(325, 20, 11, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(326, 21, 11, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(327, 22, 11, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(328, 23, 11, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(329, 24, 11, 3, NULL, NULL, 1, '', '', '', '', '', ''),
(330, 25, 11, 4, NULL, NULL, 1, '', '', '', '', '', ''),
(331, 26, 11, 5, NULL, NULL, 1, '', '', '', '', '', ''),
(332, 27, 11, 6, NULL, NULL, 1, '', '', '', '', '', ''),
(333, 28, 11, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(334, 29, 11, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(335, 30, 11, 2, NULL, NULL, 1, '', '', '', '', '', ''),
(336, 1, 12, 3, 'AV1', 'Fisica', 0, 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro', 'Pedro'),
(337, 2, 12, 4, 'AV2', 'Quimica', 0, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(338, 3, 12, 5, 'Trabalho', 'Selecione a mat', 0, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(339, 4, 12, 6, '', '', 0, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(340, 5, 12, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(341, 6, 12, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(342, 7, 12, 2, 'AV2', 'Portugues', 0, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(343, 8, 12, 3, '0', '0', 0, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(344, 9, 12, 4, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(345, 10, 12, 5, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(346, 11, 12, 6, NULL, NULL, 1, 'Pedro', 'Pedro', 'Pedro', 'Joao', 'Joao', 'Joao'),
(347, 12, 12, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(348, 13, 12, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(349, 14, 12, 2, 'Trabalho', 'Ingles', 0, '', '', '', '', '', ''),
(350, 15, 12, 3, 'Recesso', '', 2, '', '', '', '', '', ''),
(351, 16, 12, 4, 'Recesso', '', 2, '', '', '', '', '', ''),
(352, 17, 12, 5, 'Recesso', '', 2, '', '', '', '', '', ''),
(353, 18, 12, 6, 'Recesso', '', 2, '', '', '', '', '', ''),
(354, 19, 12, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(355, 20, 12, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(356, 21, 12, 2, 'Recesso', '', 2, '', '', '', '', '', ''),
(357, 22, 12, 3, 'Recesso', '', 2, '', '', '', '', '', ''),
(358, 23, 12, 4, 'Recesso', '', 2, '', '', '', '', '', ''),
(359, 24, 12, 5, 'Recesso', '', 2, '', '', '', '', '', ''),
(360, 25, 12, 6, 'Recesso', '', 2, '', '', '', '', '', ''),
(361, 26, 12, 7, 'Recesso', '', 2, '', '', '', '', '', ''),
(362, 27, 12, 1, 'Recesso', '', 2, '', '', '', '', '', ''),
(363, 28, 12, 2, 'Recesso', '', 2, '', '', '', '', '', ''),
(364, 29, 12, 3, 'Recesso', '', 2, '', '', '', '', '', ''),
(365, 30, 12, 4, 'Recesso', '', 2, '', '', '', '', '', ''),
(366, 31, 12, 5, 'Recesso', '', 2, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_categoria`
--

CREATE TABLE `tb_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nome` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_categoria`
--

INSERT INTO `tb_categoria` (`cat_id`, `cat_nome`) VALUES
(1, 'aluno'),
(2, 'professor'),
(3, 'gerente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `con_id` int(11) NOT NULL,
  `con_nome` varchar(30) NOT NULL,
  `con_sobrenome` varchar(30) NOT NULL,
  `con_email` varchar(30) NOT NULL,
  `con_mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`con_id`, `con_nome`, `con_sobrenome`, `con_email`, `con_mensagem`) VALUES
(7, '', '', '', ''),
(8, '', '', '', ''),
(9, '', '', '', ''),
(10, '', '', '', ''),
(11, '', '', '', ''),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_dia`
--

CREATE TABLE `tb_dia` (
  `dia_id` int(1) NOT NULL,
  `dia_nome` varchar(15) NOT NULL,
  `dia_abreviacao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_dia`
--

INSERT INTO `tb_dia` (`dia_id`, `dia_nome`, `dia_abreviacao`) VALUES
(1, 'domingo', 'dom'),
(2, 'segunda-feira', 'seg'),
(3, 'terça-feira', 'ter'),
(4, 'quarta-feira', 'qua'),
(5, 'quinta-feira', 'qui'),
(6, 'sexta-feira', 'sex'),
(7, 'sábado', 'sab');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_mes`
--

CREATE TABLE `tb_mes` (
  `mes_id` int(11) NOT NULL,
  `mes_nome` varchar(10) NOT NULL,
  `mes_abreviacao` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_mes`
--

INSERT INTO `tb_mes` (`mes_id`, `mes_nome`, `mes_abreviacao`) VALUES
(1, 'janeiro', 'jan'),
(2, 'fevereiro', 'fev'),
(3, 'março', 'mar'),
(4, 'abril', 'abr'),
(5, 'maio', 'mai'),
(6, 'junho', 'jun'),
(7, 'julho', 'jul'),
(8, 'agosto', 'ago'),
(9, 'setembro', 'set'),
(10, 'outubro', 'out'),
(11, 'novembro', 'nov'),
(12, 'dezembro', 'dez');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `pes_id` int(11) NOT NULL,
  `pes_nome` varchar(50) NOT NULL,
  `pes_sobrenome` varchar(50) NOT NULL,
  `pes_aniversario` date NOT NULL,
  `pes_cat_categoria` int(11) NOT NULL,
  `pes_foto` varchar(50) NOT NULL,
  `pes_email` varchar(50) NOT NULL,
  `pes_senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`pes_id`, `pes_nome`, `pes_sobrenome`, `pes_aniversario`, `pes_cat_categoria`, `pes_foto`, `pes_email`, `pes_senha`) VALUES
(1, 'Aurio', 'Augusto', '1970-07-03', 3, 'sau.jpg', 'aurio@hotmail.com', 'cimento123'),
(4, 'Pedro', 'Carvalho', '2020-02-02', 1, 'sau.jpg', 'pedrol@gmail.com', '123456789'),
(5, 'Pedro', 'Lourenco', '2020-02-02', 2, 'sau.jpg', 'pedro@gmail.com', '12345678'),
(9, 'Joao', 'Sfredo', '2020-02-02', 2, '', 'joao@gmail.com', '12345678'),
(12, 'Mary', 'August', '2019-02-01', 2, '', 'maugusta@fiemg.com.br', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD PRIMARY KEY (`age_id`),
  ADD KEY `age_mes_mes` (`age_mes_mes`),
  ADD KEY `age_dia_dia` (`age_dia_dia`);

--
-- Indexes for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tb_dia`
--
ALTER TABLE `tb_dia`
  ADD PRIMARY KEY (`dia_id`);

--
-- Indexes for table `tb_mes`
--
ALTER TABLE `tb_mes`
  ADD PRIMARY KEY (`mes_id`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`pes_id`),
  ADD UNIQUE KEY `pes_email` (`pes_email`),
  ADD KEY `pes_pessoa` (`pes_cat_categoria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_agenda`
--
ALTER TABLE `tb_agenda`
  MODIFY `age_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=367;

--
-- AUTO_INCREMENT for table `tb_categoria`
--
ALTER TABLE `tb_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_dia`
--
ALTER TABLE `tb_dia`
  MODIFY `dia_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_mes`
--
ALTER TABLE `tb_mes`
  MODIFY `mes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `pes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_agenda`
--
ALTER TABLE `tb_agenda`
  ADD CONSTRAINT `age_dia_dia` FOREIGN KEY (`age_dia_dia`) REFERENCES `tb_dia` (`dia_id`),
  ADD CONSTRAINT `age_mes_mes` FOREIGN KEY (`age_mes_mes`) REFERENCES `tb_mes` (`mes_id`);

--
-- Limitadores para a tabela `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD CONSTRAINT `pes_pessoa` FOREIGN KEY (`pes_cat_categoria`) REFERENCES `tb_categoria` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
