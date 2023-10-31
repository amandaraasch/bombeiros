-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31-Out-2023 às 14:38
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
-- Estrutura da tabela `amn_emer`
--

CREATE TABLE `amn_emer` (
  `nOcorrencia` int(11) NOT NULL,
  `ss` varchar(20) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `tempo` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `quais` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `horario` varchar(20) NOT NULL,
  `quais-med` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `especifique` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `horas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `amn_ges`
--

CREATE TABLE `amn_ges` (
  `nOcorrencia` int(11) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `qtd_filhos` varchar(20) NOT NULL,
  `ini_contra` varchar(20) NOT NULL,
  `dura_contra` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL,
  `opcao15` varchar(20) NOT NULL,
  `opcao16` varchar(20) NOT NULL,
  `nome_bb` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ava_cine`
--

CREATE TABLE `ava_cine` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ava_pac`
--

CREATE TABLE `ava_pac` (
  `nOcorrencia` int(11) NOT NULL,
  `+5` varchar(45) NOT NULL,
  `-5` varchar(45) NOT NULL,
  `aber_ocu` varchar(45) NOT NULL,
  `opcao1` varchar(45) NOT NULL,
  `opcao2` varchar(45) NOT NULL,
  `opcao3` varchar(45) NOT NULL,
  `opcao4` varchar(45) NOT NULL,
  `resp_verb` varchar(45) NOT NULL,
  `opcao5` varchar(45) NOT NULL,
  `opcao6` varchar(45) NOT NULL,
  `opcao7` varchar(45) NOT NULL,
  `opcao8` varchar(45) NOT NULL,
  `opcao9` varchar(45) NOT NULL,
  `resp_moto` varchar(45) NOT NULL,
  `opcao10` varchar(45) NOT NULL,
  `opcao11` varchar(45) NOT NULL,
  `opcao12` varchar(45) NOT NULL,
  `opcao13` varchar(45) NOT NULL,
  `opcao14` varchar(45) NOT NULL,
  `opcao15` varchar(45) NOT NULL,
  `aber_ocu16` varchar(45) NOT NULL,
  `opcao17` varchar(45) NOT NULL,
  `opcao18` varchar(45) NOT NULL,
  `opcao19` varchar(45) NOT NULL,
  `opcao20` varchar(45) NOT NULL,
  `resp_verb21` varchar(45) NOT NULL,
  `opcao22` varchar(45) NOT NULL,
  `opcao23` varchar(45) NOT NULL,
  `opcao24` varchar(45) NOT NULL,
  `opcao25` varchar(45) NOT NULL,
  `opcao26` varchar(45) NOT NULL,
  `resp_moto27` varchar(45) NOT NULL,
  `opcao28` varchar(45) NOT NULL,
  `opcao29` varchar(45) NOT NULL,
  `opcao30` varchar(45) NOT NULL,
  `opcao31` varchar(45) NOT NULL,
  `opcao32` varchar(45) NOT NULL,
  `opcao33` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Estrutura da tabela `dados_finais`
--

CREATE TABLE `dados_finais` (
  `nOcorrencia` int(11) NOT NULL,
  `n_usb` varchar(20) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `n_ocorr` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `desp` varchar(20) NOT NULL,
  `h.ch` varchar(20) NOT NULL,
  `km_final` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `deci_trans`
--

CREATE TABLE `deci_trans` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(45) NOT NULL,
  `opcao2` varchar(45) NOT NULL,
  `opcao3` varchar(45) NOT NULL,
  `opcao4` varchar(45) NOT NULL,
  `m` varchar(45) NOT NULL,
  `s1` varchar(45) NOT NULL,
  `s2` varchar(45) NOT NULL,
  `s3` varchar(45) NOT NULL,
  `demandante` varchar(45) NOT NULL,
  `equipe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `form_cond`
--

CREATE TABLE `form_cond` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(30) NOT NULL,
  `opcao2` varchar(30) NOT NULL,
  `opcao3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `impre`
--

CREATE TABLE `impre` (
  `nOcorrencia` int(11) NOT NULL,
  `sim` varchar(45) NOT NULL,
  `nao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lo_tra`
--

CREATE TABLE `lo_tra` (
  `nOcorrencia` int(11) NOT NULL,
  `local` varchar(45) NOT NULL,
  `lado` varchar(45) NOT NULL,
  `face` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mate_desc`
--

CREATE TABLE `mate_desc` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `qtd` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `quantidades` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcapo10` varchar(20) NOT NULL,
  `qtds` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `quantidadees` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `quantidaades` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `quantiidades` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL,
  `quantiidade` varchar(20) NOT NULL,
  `opcao15` varchar(20) NOT NULL,
  `quantidaade` varchar(20) NOT NULL,
  `opcao16` varchar(20) NOT NULL,
  `quaantidade` varchar(20) NOT NULL,
  `opcao17` varchar(20) NOT NULL,
  `opcao18` varchar(20) NOT NULL,
  `opcao19` varchar(20) NOT NULL,
  `opcao20` varchar(20) NOT NULL,
  `quanttidades` varchar(20) NOT NULL,
  `outros` varchar(20) NOT NULL,
  `quantidadess` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mate_hosp`
--

CREATE TABLE `mate_hosp` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `qtd` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `qtds` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `quantidades` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `quantidadess` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `quantidadees` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL,
  `quantidaades` varchar(20) NOT NULL,
  `opcao15` varchar(20) NOT NULL,
  `quantiidades` varchar(20) NOT NULL,
  `opcao16` varchar(20) NOT NULL,
  `quaantidades` varchar(20) NOT NULL,
  `opcao17` varchar(20) NOT NULL,
  `opcao18` varchar(20) NOT NULL,
  `opcao19` varchar(20) NOT NULL,
  `quuantidades` varchar(20) NOT NULL,
  `outros` varchar(20) NOT NULL,
  `qquantidades` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `obs_import`
--

CREATE TABLE `obs_import` (
  `nOcorrencia` int(11) NOT NULL,
  `obs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `proc_efe`
--

CREATE TABLE `proc_efe` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `opcao6` varchar(45) NOT NULL,
  `opcao7` varchar(45) NOT NULL,
  `opcao8` varchar(45) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(45) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `opcao12` varchar(45) NOT NULL,
  `opcao13` varchar(45) NOT NULL,
  `opcao14` varchar(45) NOT NULL,
  `opcao15` varchar(45) NOT NULL,
  `opcao16` varchar(45) NOT NULL,
  `opcao17` varchar(20) NOT NULL,
  `opcao18` varchar(45) NOT NULL,
  `opcao19` varchar(45) NOT NULL,
  `opcao20` varchar(20) NOT NULL,
  `opcao21` varchar(45) NOT NULL,
  `opcao22` varchar(45) NOT NULL,
  `opcao23` varchar(45) NOT NULL,
  `opcao24` varchar(45) NOT NULL,
  `opcao25` varchar(45) NOT NULL,
  `opcao26` varchar(45) NOT NULL,
  `opcao27` varchar(45) NOT NULL,
  `opcao28` varchar(45) NOT NULL,
  `opcao29` varchar(45) NOT NULL,
  `opcao30` varchar(45) NOT NULL,
  `opcao31` varchar(45) NOT NULL,
  `opcao32` varchar(45) NOT NULL,
  `opcao33` varchar(45) NOT NULL,
  `opcao34` varchar(45) NOT NULL,
  `opcao35` varchar(45) NOT NULL,
  `tam` varchar(45) NOT NULL,
  `opcao36` varchar(45) NOT NULL,
  `opcao37` varchar(45) NOT NULL,
  `opcao38` varchar(45) NOT NULL,
  `opcao39` varchar(45) NOT NULL,
  `opcao40` varchar(45) NOT NULL,
  `opcao41` varchar(45) NOT NULL,
  `celesc` varchar(45) NOT NULL,
  `policia` varchar(45) NOT NULL,
  `civil` varchar(45) NOT NULL,
  `militar` int(20) NOT NULL,
  `pre` varchar(20) NOT NULL,
  `prf` varchar(20) NOT NULL,
  `def_civil` varchar(20) NOT NULL,
  `igp/pc` varchar(20) NOT NULL,
  `opcao42` varchar(20) NOT NULL,
  `usa` varchar(20) NOT NULL,
  `usb` varchar(20) NOT NULL,
  `opcao43` varchar(20) NOT NULL,
  `outros` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quei`
--

CREATE TABLE `quei` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(45) NOT NULL,
  `opcao2` varchar(45) NOT NULL,
  `opcao3` varchar(45) NOT NULL,
  `opcao4` varchar(45) NOT NULL,
  `opcao5` varchar(45) NOT NULL,
  `opcao6` int(45) NOT NULL,
  `opcao7` varchar(45) NOT NULL,
  `opcao8` varchar(45) NOT NULL,
  `opcao9` varchar(45) NOT NULL,
  `1grau` varchar(45) NOT NULL,
  `2grau` varchar(45) NOT NULL,
  `3grau` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `term_rec`
--

CREATE TABLE `term_rec` (
  `nOcorrencia` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `ass` varchar(100) NOT NULL,
  `test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Índices para tabela `amn_emer`
--
ALTER TABLE `amn_emer`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `amn_ges`
--
ALTER TABLE `amn_ges`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `ava_cine`
--
ALTER TABLE `ava_cine`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `ava_pac`
--
ALTER TABLE `ava_pac`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_finais`
--
ALTER TABLE `dados_finais`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `deci_trans`
--
ALTER TABLE `deci_trans`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `form_cond`
--
ALTER TABLE `form_cond`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `impre`
--
ALTER TABLE `impre`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `lo_tra`
--
ALTER TABLE `lo_tra`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `mate_desc`
--
ALTER TABLE `mate_desc`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `mate_hosp`
--
ALTER TABLE `mate_hosp`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `obs_import`
--
ALTER TABLE `obs_import`
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
-- Índices para tabela `proc_efe`
--
ALTER TABLE `proc_efe`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices para tabela `quei`
--
ALTER TABLE `quei`
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
-- Índices para tabela `term_rec`
--
ALTER TABLE `term_rec`
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
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `nOcorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `ve_form`
--
ALTER TABLE `ve_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `form_cond`
--
ALTER TABLE `form_cond`
  ADD CONSTRAINT `form_cond_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `pes_form`
--
ALTER TABLE `pes_form`
  ADD CONSTRAINT `pes_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `ss_form`
--
ALTER TABLE `ss_form`
  ADD CONSTRAINT `ss_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `sv_form`
--
ALTER TABLE `sv_form`
  ADD CONSTRAINT `sv_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD CONSTRAINT `tipo_ocorrencia_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `ve_form`
--
ALTER TABLE `ve_form`
  ADD CONSTRAINT `ve_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
