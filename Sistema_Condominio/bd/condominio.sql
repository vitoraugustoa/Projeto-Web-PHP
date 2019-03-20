-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Mar-2019 às 01:49
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `condominio`
--

CREATE TABLE IF NOT EXISTS `condominio` (
`id` int(100) NOT NULL,
  `cemig` decimal(65,0) NOT NULL,
  `copasa` decimal(65,0) NOT NULL,
  `limpeza` decimal(65,0) NOT NULL,
  `tarifa_bancaria` decimal(65,0) NOT NULL,
  `outros` decimal(65,0) NOT NULL,
  `qnt_moradores` int(100) NOT NULL,
  `data_cadastro` date NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `condominio`
--

INSERT INTO `condominio` (`id`, `cemig`, `copasa`, `limpeza`, `tarifa_bancaria`, `outros`, `qnt_moradores`, `data_cadastro`) VALUES
(1, '50', '30', '70', '100', '253', 6, '0000-00-00'),
(2, '123', '323', '44', '55', '6', 6, '0000-00-00'),
(3, '123', '23', '23', '455', '656', 16, '0000-00-00'),
(4, '2', '3', '45', '23', '234', 1, '0000-00-00'),
(5, '23', '23', '23', '23', '23', 23, '2019-03-22'),
(6, '2', '3', '45', '23', '234', 1, '2019-03-29'),
(7, '23', '43', '43', '5', '67', 10, '2019-03-21'),
(8, '10', '10', '10', '10', '10', 1, '2019-03-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `condominio`
--
ALTER TABLE `condominio`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `condominio`
--
ALTER TABLE `condominio`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
