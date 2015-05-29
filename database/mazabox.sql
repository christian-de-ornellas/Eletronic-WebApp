-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2015 às 16:22
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mazabox`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id` int(11) NOT NULL COMMENT 'codigo do cliente',
  `nome_cliente` varchar(50) NOT NULL,
  `sobrenome_cliente` varchar(50) NOT NULL,
  `email_cliente` varchar(50) NOT NULL,
  `nasc_cliente` varchar(20) NOT NULL,
  `cpf_cliente` varchar(20) NOT NULL,
  `rg_cliente` varchar(20) NOT NULL,
  `nomepai_cliente` varchar(60) NOT NULL,
  `nomemae_cliente` varchar(60) NOT NULL,
  `tel_cliente` varchar(20) NOT NULL,
  `cel_cliente` varchar(20) NOT NULL,
  `cep_cliente` varchar(20) NOT NULL,
  `rua_cliente` varchar(60) NOT NULL,
  `num_cliente` varchar(10) NOT NULL,
  `cidade_cliente` varchar(80) NOT NULL,
  `bairro_cliente` varchar(80) NOT NULL,
  `estado_cliente` varchar(80) NOT NULL,
  `complemento_cliente` varchar(50) NOT NULL,
  `facebook_cliente` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cupons`
--

CREATE TABLE IF NOT EXISTS `cupons` (
`id` int(11) NOT NULL COMMENT 'codigo cupon',
  `cliente_id` int(11) NOT NULL,
  `promocao_id` int(11) NOT NULL,
  `notafiscal` varchar(340) NOT NULL,
  `dt_compra` varchar(20) NOT NULL,
  `valor_compra` varchar(20) NOT NULL,
  `data_cupons` varchar(50) NOT NULL,
  `hora_cupons` varchar(50) NOT NULL,
  `obs_cupon` varchar(30) NOT NULL,
  `aceitar_email` varchar(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promocoes`
--

CREATE TABLE IF NOT EXISTS `promocoes` (
`id` int(11) NOT NULL,
  `promocao` varchar(60) NOT NULL,
  `data` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cpf_cliente` (`cpf_cliente`);

--
-- Indexes for table `cupons`
--
ALTER TABLE `cupons`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promocoes`
--
ALTER TABLE `promocoes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo do cliente',AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cupons`
--
ALTER TABLE `cupons`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'codigo cupon',AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `promocoes`
--
ALTER TABLE `promocoes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
