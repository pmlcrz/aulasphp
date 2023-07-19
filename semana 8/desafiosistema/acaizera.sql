-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Jul-2023 às 21:20
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `acaizera`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `datacadastro` varchar(50) NOT NULL,
  `endereco` varchar(20) NOT NULL,
  `telefone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cliente`, `datacadastro`, `endereco`, `telefone`) VALUES
(1, 'teste', '16:38', 'Avenida tal', '2002-2023'),
(2, 'Joao', '16:41', 'avenida logo ali', '3023-5004'),
(3, 'Maria', '2023-07-14', 'Rua 3', '2023-9874'),
(6, 'Pedro', '2023-06-28', 'rua 36', '3698-7854');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entregas`
--

CREATE TABLE `entregas` (
  `id` int(11) NOT NULL,
  `remetente` varchar(100) NOT NULL,
  `codigoped` varchar(100) NOT NULL,
  `horaped` varchar(100) NOT NULL,
  `destinatario` varchar(100) NOT NULL,
  `statusentrega` varchar(20) NOT NULL DEFAULT 'Pendente'
) ;

--
-- Extraindo dados da tabela `entregas`
--

INSERT INTO `entregas` (`id`, `remetente`, `codigoped`, `horaped`, `destinatario`, `statusentrega`) VALUES
(10, 'Açaizera', '2023012', '13:37', 'Rua 20', 'Pendente'),
(15, 'teste', '2022233', '16:40', 'Maria', 'Pendente');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
