-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09-Abr-2019 às 23:02
-- Versão do servidor: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atendimento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atende`
--

CREATE TABLE IF NOT EXISTS `atende` (
`codAtende` int(11) NOT NULL,
  `dataAtende` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `senhaAtende` int(100) NOT NULL DEFAULT '0',
  `statusAtende` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT 'AGUARDANDO ATENDIMENTO'
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=47 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atende`
--
ALTER TABLE `atende`
 ADD PRIMARY KEY (`codAtende`), ADD KEY `Index 2` (`statusAtende`), ADD KEY `Index 3` (`senhaAtende`), ADD KEY `Index 4` (`dataAtende`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atende`
--
ALTER TABLE `atende`
MODIFY `codAtende` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
