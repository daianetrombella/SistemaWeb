-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Dez-2022 às 00:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `copel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletos`
--

CREATE TABLE `boletos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `vencimento` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL,
  `cnpj_emissor` varchar(50) NOT NULL,
  `cnpj_pagador` varchar(50) NOT NULL,
  `obs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `chamados`
--

CREATE TABLE `chamados` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `assunto` varchar(70) NOT NULL,
  `obs` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `chamados`
--

INSERT INTO `chamados` (`id`, `nome`, `email`, `assunto`, `obs`) VALUES
(1, 'Daiane', 'daiane@gmail.comzxcxzczxcx', 'zdczxcxzcxzcc', 'czxcxzccccv'),
(2, 'teste', 'teste@gmail.com', 'teste', 'teste'),
(3, 'Daiane', 'daiane@gmail.com', 'teste', 'teste'),
(4, 'chamado233', 'chamado@gmail.com', 'chamado1', 'chamado2'),
(5, 'ultimo teste', 'ultimo_teste@teste.comq', 'teste', 'testeeeee'),
(6, 'teste_ins', 'daiane@gmail.com', 'teste', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_pagar`
--

CREATE TABLE `contas_pagar` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `numero_nota` varchar(50) NOT NULL,
  `valor_nota` varchar(50) NOT NULL,
  `data_nota` varchar(50) NOT NULL,
  `obs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contas_pagar`
--

INSERT INTO `contas_pagar` (`id`, `status`, `nome`, `nascimento`, `tipo`, `cnpj`, `celular`, `numero_nota`, `valor_nota`, `data_nota`, `obs`) VALUES
(1, 'Fechado', 'Daiane Destri', '12/12/12', 'juridica', '123456789', '4598726652', '1', '2', '4', 'Observação:'),
(3, 'Aberto', 'daia', '1', 'juridica', '1', '1', '1', '1', '1', 'Observação:'),
(4, 'Aberto', 'teste123', '123', 'juridica', '123', '123', '123', '123', '123', 'Observação:'),
(5, 'Fechado', 'daiane123456', '12345', 'Física', '123456789', '123', '123456', '123456', '123456', 'Observação:'),
(6, 'Fechado', 'testecontaapagar1', '1', 'Física', '1', '1', '1', '1', '1', 'Observação:');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contas_receber`
--

CREATE TABLE `contas_receber` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `nascimento` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `cnpj` varchar(50) NOT NULL,
  `celular` varchar(50) NOT NULL,
  `numero_nota` varchar(50) NOT NULL,
  `valor_nota` varchar(50) NOT NULL,
  `data_nota` varchar(50) NOT NULL,
  `obs` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contas_receber`
--

INSERT INTO `contas_receber` (`id`, `status`, `nome`, `nascimento`, `tipo`, `cnpj`, `celular`, `numero_nota`, `valor_nota`, `data_nota`, `obs`) VALUES
(1, 'Fechado', 'Daiane Destri', '12/12/12', 'Física', '123456789', '45 98745221', '1', '2', '4', 'Observação:'),
(4, 'Aberto', 'daiadestri', '1', 'juridica', '1', '1', '1', '1', '1', 'Observação:'),
(9, 'Aberto', 'agoravai', '1', 'juridica', '1', '1', '1', '8000.0', '1', 'Observação:'),
(10, 'Aberto', 'sera', '1', 'Física', '1', '1', '1', '7000.0', '1', 'Observação:'),
(12, 'Aberto', 'teste12', '1', 'juridica', '1', '1', '1', '7000.0', '1', 'Observação:'),
(14, 'Aberto', 'teste123', '1', 'Física', '1', '1', '1', '10000.0', '1', 'Observação:'),
(15, 'Aberto', 'sera', '1', 'Física', '1', '1', '1', '10000.0', '1', 'Observação:'),
(16, 'Aberto', 'teste1', '1', 'Física', '1', '1', '1', '10000.0', '1', 'Observação:'),
(17, 'Aberto', 'seraaaaa', '1', 'juridica', '1', '1', '1', '8000.0', '1', 'Observação:'),
(18, 'Aberto', 'daiaaaaaaaaaaaaaaaaaaa', '1212', 'Física', '1', '1', '1', '18000.0', '1', 'Observação:'),
(21, 'Aberto', 'teste123', '123', 'Física', '123', '123', '123', '123', '123', 'Observação:'),
(22, 'Fechado', 'testeee1234', '123', 'Física', '123456789', '3', '123', '123', '123', 'Observação:'),
(23, 'Fechado', 'foi mais ou menos', '1', 'Física', '1', '1', '1', '25000.0', '1', 'Observação:'),
(25, 'Aberto', 'testeadicionarContaareceebr1', '1', 'juridica', '1', '1', '1', '1', '1', 'Observação:'),
(27, 'Aberto', 'gravacao', '1', 'juridica', '1', '1', '1', '39480.0', '1', 'Observação:'),
(29, 'Aberto', 'novemill', '11010101010101001', 'juridica', '101010101010101001', '10101010101010101010101', '10101010101010101010', '9370.0', '101010101010101010', 'Observação:101010101010101010'),
(30, 'Aberto', '01010101010101', '020202020202020', 'Física', '010101010101010', '0101010101010', '010101010101', '34000.0', '01010101010', 'Observação:	1010101010'),
(31, 'Aberto', 'testealmo', '1', 'Física', '1', '1', '1', '8000.0', '1', 'Observação:'),
(32, 'Aberto', 'ultimoteste', '11', 'juridica', '1', '1', '1', '8200.0', '1', 'Observação:'),
(33, 'Aberto', 'teste17', '1', 'Física', '1', '1', '1', '17000.0', '1', 'Observação:'),
(34, 'Aberto', 'marcelo', '1', 'juridica', '1', '1', '1', '8200.0', '1', 'Observação:');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `login` varchar(20) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `nivel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`codigo`, `nome`, `login`, `senha`, `nivel`) VALUES
(1, 'Daiane', 'daiane123', '12345', 'admin'),
(2, 'Maria Julia', 'maria123', '123456', 'funcionario'),
(3, 'Luiz Fernando', 'Bombeta', '12345', 'admin'),
(4, 'daia', 'daia1', '12345', 'funcionario'),
(5, 'bastiana', 'bastiana123', '12345', 'funcionario'),
(6, 'daiane', 'daiaa123', '202cb962ac59075b964b07152d234b70', 'funcionario'),
(9, 'daiane', '123', '123', 'admin'),
(10, '123', '123', '123', 'admin'),
(11, 'luiz', 'dai12', '1212', 'funcionario'),
(12, 'teste123', 'teste123', '202cb962ac59075b964b07152d234b70', 'funcionario'),
(13, 'marcelo1', 'marcelo12345', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(14, 'testedia', 'teste1111', '12345', 'funcionario'),
(15, 'marcelo12', 'marcelo12', '12345', 'funcionario');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `erp` varchar(10) NOT NULL,
  `scm` varchar(10) NOT NULL,
  `crm` varchar(10) NOT NULL,
  `sig` varchar(10) NOT NULL,
  `acomp` varchar(10) NOT NULL,
  `trein` varchar(10) NOT NULL,
  `sup` varchar(50) NOT NULL,
  `valor` varchar(50) NOT NULL,
  `conta_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id`, `erp`, `scm`, `crm`, `sig`, `acomp`, `trein`, `sup`, `valor`, `conta_id`) VALUES
(1, 'true', 'false', 'false', 'false', 'false', 'false', 'Sem suporte', '8000.0', '18'),
(2, 'true', 'false', 'true', 'false', 'false', 'false', 'Sem suporte', '15000.0', '19'),
(3, 'false', 'false', 'false', 'true', 'true', 'false', 'Sem suporte', '10000.0', '20'),
(4, 'true', 'false', 'false', 'false', 'false', 'false', 'Sem suporte', '8000.0', '23'),
(6, 'true', 'true', 'false', 'false', 'false', 'false', 'Sem suporte', '18000.0', '24'),
(7, 'true', 'false', 'false', 'false', 'false', 'false', 'Sem suporte', '8000.0', '26'),
(8, 'true', 'true', 'true', 'true', 'true', 'true', 'Integral', '39480.0', '27'),
(9, 'false', 'true', 'false', 'false', 'false', 'false', 'Sem suporte', '10000.0', '28'),
(10, 'true', 'false', 'false', 'false', 'true', 'true', 'Integral', '9370.0', '29'),
(11, 'true', 'false', 'false', 'false', 'false', 'true', 'Parcial', '8300.0', '32'),
(12, 'false', 'true', 'true', 'false', 'false', 'false', 'Sem suporte', '17000.0', '33'),
(13, 'true', 'false', 'false', 'false', 'false', 'true', 'Sem suporte', '8200.0', '34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_sitios`
--

CREATE TABLE `venda_sitios` (
  `id` int(11) NOT NULL,
  `erp` varchar(20) NOT NULL,
  `suporte` varchar(20) NOT NULL,
  `acompanhamento` varchar(20) NOT NULL,
  `treinamento` varchar(20) NOT NULL,
  `email` varchar(60) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `endereco` varchar(60) NOT NULL,
  `telefone` varchar(40) NOT NULL,
  `cidade` varchar(40) NOT NULL,
  `valor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda_sitios`
--

INSERT INTO `venda_sitios` (`id`, `erp`, `suporte`, `acompanhamento`, `treinamento`, `email`, `nome`, `endereco`, `telefone`, `cidade`, `valor`) VALUES
(2, 'true', 'true', 'true', 'true', 'total@gmail.com', 'total', 'total', '9370', 'total', '9370'),
(4, 'true', 'false', 'false', 'false', 'daiane@gmail.com', 'daiane destri', 'daiane', '544d55sd', '5s5', '8000'),
(6, 'false', 'true', 'false', 'true', 'alteracao@teste.com', 'alteracao bem sucedida', 'alteracao', '2325355', 'alteracao', '370'),
(7, 'true', 'true', 'false', 'false', 'ultimo_teste@teste.com', 'ultimo teste', 'teste', '924621', 'too1', '8170');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `boletos`
--
ALTER TABLE `boletos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `chamados`
--
ALTER TABLE `chamados`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `venda_sitios`
--
ALTER TABLE `venda_sitios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `boletos`
--
ALTER TABLE `boletos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `chamados`
--
ALTER TABLE `chamados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `contas_pagar`
--
ALTER TABLE `contas_pagar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `contas_receber`
--
ALTER TABLE `contas_receber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `venda_sitios`
--
ALTER TABLE `venda_sitios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
