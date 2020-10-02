-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Out-2020 às 15:55
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula_php`
--
CREATE DATABASE IF NOT EXISTS `aula_php` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aula_php`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens_nf`
--

CREATE TABLE `itens_nf` (
  `id` int(11) NOT NULL,
  `cod_produto` int(11) DEFAULT NULL,
  `num_nf` int(11) DEFAULT NULL,
  `qtde` int(11) DEFAULT NULL,
  `subtotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `itens_nf`
--

INSERT INTO `itens_nf` (`id`, `cod_produto`, `num_nf`, `qtde`, `subtotal`) VALUES
(42, 11, 45, 2, '0.00'),
(43, 12, 45, 5, '0.00'),
(44, 12, 46, 3, '16.50'),
(45, 14, 48, 33, '105.60'),
(46, 13, 49, 1, '12.90'),
(47, 12, 49, 10, '55.00'),
(48, 15, 50, 3, '10.50'),
(49, 12, 50, 1, '5.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nota_fiscal`
--

CREATE TABLE `nota_fiscal` (
  `nf` int(11) NOT NULL,
  `data` date DEFAULT NULL,
  `valor_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `nota_fiscal`
--

INSERT INTO `nota_fiscal` (`nf`, `data`, `valor_total`) VALUES
(40, '2020-09-08', NULL),
(41, '2020-09-01', NULL),
(42, '2020-09-16', NULL),
(43, '2020-09-02', NULL),
(44, '0000-00-00', NULL),
(45, '2020-09-15', NULL),
(46, '2020-09-08', NULL),
(47, '2020-09-25', NULL),
(48, '2020-09-25', NULL),
(49, '2020-09-25', NULL),
(50, '2020-10-21', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(11, 'Batatas', '5.00'),
(12, 'Refrigerante', '5.50'),
(13, 'Xampoo', '12.90'),
(14, 'Kit Kat', '3.20'),
(15, 'Chocolate', '3.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `nome` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `nome`) VALUES
(2, 'ruanvictor.qa@gmail.com', '1234', 'Ruan Victor'),
(3, 'sofiaaquino@gmail.com', '5678', 'Sofia Aquino');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cod_produto` (`cod_produto`),
  ADD KEY `num_nf` (`num_nf`);

--
-- Índices para tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  ADD PRIMARY KEY (`nf`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `nota_fiscal`
--
ALTER TABLE `nota_fiscal`
  MODIFY `nf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `itens_nf`
--
ALTER TABLE `itens_nf`
  ADD CONSTRAINT `itens_nf_ibfk_1` FOREIGN KEY (`cod_produto`) REFERENCES `produtos` (`id`),
  ADD CONSTRAINT `itens_nf_ibfk_2` FOREIGN KEY (`num_nf`) REFERENCES `nota_fiscal` (`nf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
