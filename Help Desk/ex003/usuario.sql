-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/06/2024 às 08:08
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `suporte`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuário`
--

CREATE TABLE `usuário` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `email` varchar(70) NOT NULL,
  `telefone` text NOT NULL,
  `equipamento` varchar(30) NOT NULL,
  `numeq` int(4) NOT NULL,
  `problem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Despejando dados para a tabela `usuário`
--

INSERT INTO `usuário` (`id`, `nome`, `departamento`, `email`, `telefone`, `equipamento`, `numeq`, `problem`) VALUES
(144, 'Milena Lacerda', 'Administração', 'milenaadm@hotmail.com', '2147483647', 'rede', 15, 'Falha de conexão'),
(145, 'Cristhian Campos', 'Marketing', 'criscamposmkt@hotmail.com', '2147483647', 'computadores', 10, 'Pc travando'),
(146, 'Stephany Korner', 'RH', 'stephanyk.rh@hotmail.com', '2147483647', 'rede', 5, 'Wifi lento'),
(147, 'Sarah Oliveira', 'Contabilidade', 'saraholiveira_adm@hotmail.com', '2147483647', 'rede', 26, 'wifi instável '),
(148, 'Eliane Mattos', 'Financeiro', 'elianefinanca@hotmail.com', '11993679715', 'impressora', 5, 'não está imprimindo'),
(149, 'Arthur Gomes', 'Marketing', 'arthurmht@hotmail.com', '11932678689', 'video', 9, 'falha no monitor'),
(150, 'Marcos Henrique', 'Administração', 'marcosh.adm@hotmail.com', '11970706060', 'rede', 15, 'wifi lento');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuário`
--
ALTER TABLE `usuário`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuário`
--
ALTER TABLE `usuário`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
