-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Out-2023 às 17:27
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
  `id` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(3) NOT NULL,
  `cep` varchar(14) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `adm` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `login`, `senha`, `cep`, `descricao`, `adm`) VALUES
(3, 'maicol', '123', '89209466', 'professor', 'n'),
(4, 'josi', '154', '89209466', 'mae', 'n'),
(5, 'Henrique Osmar', '123', '89209466', 'Estudante', 'n'),
(6, 'João filipe Tissi', '187', '89209466', 'aluno', 'n'),
(7, 'prof', '187', '89209466', 'prof', 'n'),
(8, 'emily', '145', '89209466', 'aluna', 'n'),
(10, 'raasch', '123', '', '', 's');

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_cond`
--

CREATE TABLE `form_cond` (
  `nOcorrencia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `opcao1` varchar(30) NOT NULL,
  `opcao2` varchar(30) NOT NULL,
  `opcao3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `form_cond`
--

INSERT INTO `form_cond` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`) VALUES
(0, 1, 'Deitada', '', 'Sentada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `nOcorrencia` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Sexo` varchar(7) NOT NULL,
  `Nome_hospital` varchar(45) NOT NULL,
  `Nomepac` varchar(45) NOT NULL,
  `Idadepac` int(11) NOT NULL,
  `CPFpac` int(11) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `NOMEACOM` varchar(45) NOT NULL,
  `IDADEACOM` int(11) NOT NULL,
  `Localidade` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pes_form`
--

CREATE TABLE `pes_form` (
  `nOcorrencia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `opcao1` varchar(25) NOT NULL,
  `opcao2` varchar(25) NOT NULL,
  `opcao3` varchar(25) NOT NULL,
  `opcao4` varchar(25) NOT NULL,
  `opcao5` varchar(25) NOT NULL,
  `opcao6` varchar(25) NOT NULL,
  `opcao7` varchar(25) NOT NULL,
  `opcao8` varchar(25) NOT NULL,
  `opcao9` varchar(25) NOT NULL,
  `opcao10` varchar(25) NOT NULL,
  `opcao11` varchar(25) NOT NULL,
  `opcao12` varchar(25) NOT NULL,
  `opcao13` varchar(25) NOT NULL,
  `opcao14` varchar(25) NOT NULL,
  `opcao15` varchar(25) NOT NULL,
  `opcao16` varchar(25) NOT NULL,
  `opcao17` varchar(25) NOT NULL,
  `opcao18` varchar(25) NOT NULL,
  `opcao19` varchar(25) NOT NULL,
  `Outros` varchar(45) NOT NULL,
  `opcao21` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `pes_form`
--

INSERT INTO `pes_form` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `Outros`, `opcao21`) VALUES
(0, 1, '', 'Respiratório', '', '', '', '', '', 'Obstétrico', '', '', '', '', '', '', 'Emergencial ', '', '', '', '', 'ablacarro', 'Outros');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ss_form`
--

CREATE TABLE `ss_form` (
  `nOcorrencia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `opcao1` varchar(25) NOT NULL,
  `opcao2` varchar(25) NOT NULL,
  `opcao3` varchar(25) NOT NULL,
  `opcao4` varchar(25) NOT NULL,
  `opcao5` varchar(25) NOT NULL,
  `opcao6` varchar(25) NOT NULL,
  `opcao7` varchar(25) NOT NULL,
  `opcao8` varchar(25) NOT NULL,
  `opcao9` varchar(25) NOT NULL,
  `opcao10` varchar(25) NOT NULL,
  `opcao11` varchar(25) NOT NULL,
  `opcao12` varchar(25) NOT NULL,
  `opcao13` varchar(25) NOT NULL,
  `opcao14` varchar(25) NOT NULL,
  `opcao15` varchar(25) NOT NULL,
  `opcao16` varchar(25) NOT NULL,
  `opcao17` varchar(25) NOT NULL,
  `opcao18` varchar(25) NOT NULL,
  `opcao19` varchar(25) NOT NULL,
  `opcao20` varchar(25) NOT NULL,
  `opcao21` varchar(25) NOT NULL,
  `opcao22` varchar(25) NOT NULL,
  `opcao23` varchar(25) NOT NULL,
  `opcao24` varchar(25) NOT NULL,
  `opcao25` varchar(25) NOT NULL,
  `opcao26` varchar(25) NOT NULL,
  `opcao27` varchar(25) NOT NULL,
  `opcao28` varchar(25) NOT NULL,
  `opcao29` varchar(25) NOT NULL,
  `opcao30` varchar(25) NOT NULL,
  `opcao31` varchar(25) NOT NULL,
  `opcao32` varchar(25) NOT NULL,
  `opcao33` varchar(25) NOT NULL,
  `opcao34` varchar(25) NOT NULL,
  `opcao35` varchar(25) NOT NULL,
  `opcao36` varchar(25) NOT NULL,
  `opcao37` varchar(25) NOT NULL,
  `opcao38` varchar(25) NOT NULL,
  `opcao39` varchar(25) NOT NULL,
  `opcao40` varchar(25) NOT NULL,
  `opcao41` varchar(25) NOT NULL,
  `opcao42` varchar(25) NOT NULL,
  `opcao43` varchar(25) NOT NULL,
  `opcao44` varchar(25) NOT NULL,
  `opcao45` varchar(25) NOT NULL,
  `opcao46` varchar(25) NOT NULL,
  `opcao47` varchar(25) NOT NULL,
  `opcao48` varchar(25) NOT NULL,
  `opcao49` varchar(25) NOT NULL,
  `opcao50` varchar(25) NOT NULL,
  `opcao51` varchar(25) NOT NULL,
  `opcao52` varchar(25) NOT NULL,
  `opcao53` varchar(25) NOT NULL,
  `opcao54` varchar(25) NOT NULL,
  `opcao55` varchar(25) NOT NULL,
  `opcao56` varchar(25) NOT NULL,
  `opcao57` varchar(25) NOT NULL,
  `Outros` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sv_form`
--

CREATE TABLE `sv_form` (
  `nOcorrencia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pressao_arterial` int(10) NOT NULL,
  `pressao2` int(10) NOT NULL,
  `pulso` int(10) NOT NULL,
  `respiracao` int(10) NOT NULL,
  `saturacao` int(10) NOT NULL,
  `hgt` int(10) NOT NULL,
  `temperatura` int(10) NOT NULL,
  `opcao1` varchar(25) NOT NULL,
  `opcao2` varchar(25) NOT NULL,
  `perfusao_menor` varchar(25) NOT NULL,
  `perfusao_maior` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `sv_form`
--

INSERT INTO `sv_form` (`nOcorrencia`, `id`, `pressao_arterial`, `pressao2`, `pulso`, `respiracao`, `saturacao`, `hgt`, `temperatura`, `opcao1`, `opcao2`, `perfusao_menor`, `perfusao_maior`) VALUES
(0, 1, 5, 5, 0, 5, 0, 0, 0, '', 'Normal', '&gt;2SEG', ''),
(0, 2, 0, 0, 0, 0, 0, 0, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_ocorrencia`
--

CREATE TABLE `tipo_ocorrencia` (
  `nOcorrencia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `opcao1` varchar(15) NOT NULL,
  `opcao2` varchar(15) NOT NULL,
  `opcao3` varchar(15) NOT NULL,
  `opcao4` varchar(15) NOT NULL,
  `opcao5` varchar(15) NOT NULL,
  `opcao6` varchar(15) NOT NULL,
  `opcao7` varchar(15) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL,
  `opcao15` varchar(20) NOT NULL,
  `opcao16` varchar(20) NOT NULL,
  `opcao17` varchar(20) NOT NULL,
  `opcao18` varchar(20) NOT NULL,
  `opcao19` varchar(20) NOT NULL,
  `opcao20` varchar(20) NOT NULL,
  `Outros` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `tipo_ocorrencia`
--

INSERT INTO `tipo_ocorrencia` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `Outros`) VALUES
(0, 1, '?', '?', '?', '?', 'Queda de altura', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'andre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ve_form`
--

CREATE TABLE `ve_form` (
  `nOcorrencia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `opcao1` varchar(25) NOT NULL,
  `opcao2` varchar(25) NOT NULL,
  `opcao3` varchar(25) NOT NULL,
  `opcao4` varchar(25) NOT NULL,
  `opcao5` varchar(25) NOT NULL,
  `opcao6` varchar(25) NOT NULL,
  `opcao7` varchar(25) NOT NULL,
  `opcao8` varchar(25) NOT NULL,
  `opcao9` varchar(25) NOT NULL,
  `opcao10` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `form_cond`
--
ALTER TABLE `form_cond`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`nOcorrencia`);

--
-- Índices para tabela `pes_form`
--
ALTER TABLE `pes_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `ss_form`
--
ALTER TABLE `ss_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `sv_form`
--
ALTER TABLE `sv_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `ve_form`
--
ALTER TABLE `ve_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `form_cond`
--
ALTER TABLE `form_cond`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `nOcorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pes_form`
--
ALTER TABLE `pes_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ss_form`
--
ALTER TABLE `ss_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sv_form`
--
ALTER TABLE `sv_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ve_form`
--
ALTER TABLE `ve_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
