-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24-Ago-2023 às 12:42
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bombeiros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `login` varchar(45) NOT NULL,
  `senha` varchar(3) NOT NULL,
  `cep` varchar(14) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `adm` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`login`, `senha`, `cep`, `descricao`, `adm`) VALUES
('amanda raasch', '187', '15255443905-', 'Estudante de desenvolvimento de sistemas', 'n'),
('André Baschirotto Alexandre', '298', '138.013.199-54', 'Estudante de desenvolvimento de sistemas', 'n'),
('joão ferreira', '131', '547.686.597-87', 'Estudante de Desenvolvimento de sistemas', 'n'),
('NATÃ ', '123', '88220000', 'ALUNO SENAI SUL', 'n'),
('kauã', '261', '88220000', 'ALUNO SENAI SUL', 'n'),
('gustavo', '154', '89209466', 'irmão', 'n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `login` varchar(45) DEFAULT NULL,
  `senha` int(3) NOT NULL,
  `adm` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`login`, `senha`, `adm`) VALUES
('Amanda Caroline Raasch', 187, 's'),
('André Baschirotto Alexandre', 298, 'n'),
('Amanda Caroline Raasch', 187, 's'),
('André Baschirotto Alexandre', 298, 'n'),
('João Victor Ferreira', 131, 'n'),
('joão ferreira', 131, 'n'),
('NATÃ ', 123, 'n'),
('kauã', 2612, 'n'),
('gustavo', 154, 'n');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
