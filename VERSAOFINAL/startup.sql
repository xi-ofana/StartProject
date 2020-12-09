-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 04-Dez-2020 às 23:55
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `startup`
--
CREATE DATABASE IF NOT EXISTS `startup` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `startup`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `startup`
--

CREATE TABLE IF NOT EXISTS `startup` (
  `id_startup` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `razao_social` varchar(100) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `segmento` varchar(15) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(255) NOT NULL,
  `cidade` varchar(255) NOT NULL,
  `data_fundacao` date NOT NULL,
  `numero_funcionarios` int(11) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` char(40) NOT NULL,
  `logotipo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id_startup`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `startup`
--

INSERT INTO `startup` (`id_startup`, `nome`, `razao_social`, `cnpj`, `segmento`, `endereco`, `numero`, `cidade`, `data_fundacao`, `numero_funcionarios`, `telefone`, `email`, `senha`, `logotipo`, `descricao`) VALUES
(12, 'gx', 'cornos', '51.515.145/6154-15', 'Edtech', 'rua fernando de moraes', 0, 'ArujÃ¡', '2020-11-01', 4, '(11) 5845-6', 'teste2@teste.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '61c2355adea1ff37cad15904ecc799cb.png', ''),
(13, 'teste 2', 'teste 2', '55.884.236/9887-43', 'Fintech', 'rua 0', 2020, 'ArujÃ¡', '0000-00-00', 1, '(11) 9876-2', 'teste3@teste.com', '1fc83f91bbba798ed86a1e5cafcbcdb3ee0da50e', 'f1a14f9b8058eb31c388dd4a64e52137.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec iaculis libero, eu laoreet risus. Suspendisse eget velit consectetur, molestie erat sit amet, tristique mi. Quisque ornare porta '),
(14, 'teste 2', 'teste 2', '55.884.236/9887-43', 'Fintech', 'rua 0', 2020, 'ArujÃ¡', '0000-00-00', 1, '(11) 9876-2', 'teste3@teste.com', '1fc83f91bbba798ed86a1e5cafcbcdb3ee0da50e', 'e94fd817c96d2ccdf8a9f22ff5264438.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec iaculis libero, eu laoreet risus. Suspendisse eget velit consectetur, molestie erat sit amet, tristique mi. Quisque ornare porta '),
(15, 'teste de novo', 'testezinho', '25.156.156/1651-51', 'Fintech', 'rua alexandre', 2020, 'ArujÃ¡', '0000-00-00', 2, '(11) 9521-4', 'empresa@empresa', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '611bd126b8ec5f6c5a92ebe722d36f74.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur nec iaculis libero, eu laoreet risus. Suspendisse eget velit consectetur, molestie erat sit amet, tristique mi. Quisque ornare porta '),
(16, 'startup teste', 'teste', '15.545.225/8741-48', 'Fintech', 'Rua Oscar Freire', 2020, 'Guarulhos', '0000-00-00', 7, '(11) 9645-8235', 'empresa@gmail.com', '9048ead9080d9b27d6b2b6ed363cbf8cce795f7f', 'ea43d84f95c1fc6ada12cbb2739c5b3b.png', 'Essa Ã© uma startup fictÃ­cia.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
