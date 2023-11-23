-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 01:51
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

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
-- Estrutura para tabela `amn_emer`
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
  `quaismed` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `especifique` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `horas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `amn_emer`
--

INSERT INTO `amn_emer` (`nOcorrencia`, `ss`, `opcao1`, `opcao2`, `tempo`, `opcao3`, `opcao4`, `quais`, `opcao5`, `opcao6`, `horario`, `quaismed`, `opcao7`, `opcao8`, `especifique`, `opcao9`, `opcao10`, `horas`) VALUES
(25, 'caxumba', 'sim', '', 'sla', '', 'Não', '', '', '', '', '', 'Sim', '', 'cachorro mordeu', '', 'Não', '20;00'),
(26, 'dores ', '', 'não', '', '', 'Não', '', '', 'Não', '', '', '', '', '', '', 'Não', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `amn_ges`
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
  `opcao17` varchar(20) NOT NULL,
  `nome_bb` varchar(20) NOT NULL,
  `nome_med` varchar(50) NOT NULL,
  `inter_contra` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `amn_ges`
--

INSERT INTO `amn_ges` (`nOcorrencia`, `periodo`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `qtd_filhos`, `ini_contra`, `dura_contra`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `nome_bb`, `nome_med`, `inter_contra`) VALUES
(25, '', '', 'Não', 'Sim', '', '', 'Não', 'terceiro', '', '', '', '', 'Não', 'Sim', '', '', 'Não', 'Sim', '', '', 'Não', 'josé antonio', '', ''),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ava_cine`
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

--
-- Despejando dados para a tabela `ava_cine`
--

INSERT INTO `ava_cine` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`) VALUES
(25, '', 'não', 'sim', '', '', 'não', 'sim', '', '', 'não', 'sim', '', '', 'não'),
(26, '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ava_pac`
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

--
-- Despejando dados para a tabela `ava_pac`
--

INSERT INTO `ava_pac` (`nOcorrencia`, `+5`, `-5`, `aber_ocu`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `resp_verb`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `resp_moto`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `aber_ocu16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `resp_verb21`, `opcao22`, `opcao23`, `opcao24`, `opcao25`, `opcao26`, `resp_moto27`, `opcao28`, `opcao29`, `opcao30`, `opcao31`, `opcao32`, `opcao33`) VALUES
(25, 'não', 'sim', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Estímulo Doloroso', '', '', '', '', '', '', '', '', '', 'Localiza Dor/Estímulo Tátil', '', '', 'Extensão Anormal', ''),
(26, 'sim', 'não', 'Abertura Ocular', 'Espontânea', '', '', '', '', 'Orientado', '', '', '', '', 'Resposta Motora', 'Obedece Comandos', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
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
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `login`, `senha`, `cep`, `descricao`, `adm`) VALUES
(10, 'raasch', '123', '', '', 's'),
(11, 'Alexandre', '123', '89206-230', 'Desenvolvedor magoado ', 'n');

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_finais`
--

CREATE TABLE `dados_finais` (
  `nOcorrencia` int(11) NOT NULL,
  `n_usb` varchar(20) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `n_ocorr` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `desp` varchar(20) NOT NULL,
  `h_ch` varchar(20) NOT NULL,
  `km_final` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `dados_finais`
--

INSERT INTO `dados_finais` (`nOcorrencia`, `n_usb`, `opcao1`, `n_ocorr`, `opcao2`, `desp`, `h_ch`, `km_final`, `opcao3`) VALUES
(25, '', '', '16', 'Cód.PS', '', '', '300km', ''),
(26, '22', '', '1', '', '25', '14', '12', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `deci_trans`
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

--
-- Despejando dados para a tabela `deci_trans`
--

INSERT INTO `deci_trans` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `m`, `s1`, `s2`, `s3`, `demandante`, `equipe`) VALUES
(25, '', 'Instável', '', '', 'brandao', 'porniquete', 'cabo mais', 'cabo menos', 'josé berranteiro', 'zé guedes'),
(26, '', '', '', 'Estável', 'kaua', 'gustavo', 'amanda', 'alice', 'emiliano', 'gavião');

-- --------------------------------------------------------

--
-- Estrutura para tabela `form_cond`
--

CREATE TABLE `form_cond` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(30) NOT NULL,
  `opcao2` varchar(30) NOT NULL,
  `opcao3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `form_cond`
--

INSERT INTO `form_cond` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`) VALUES
(25, '', 'Semi-sentada', ''),
(26, '', '', 'Sentada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `impre`
--

CREATE TABLE `impre` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(45) NOT NULL,
  `opcao2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `impre`
--

INSERT INTO `impre` (`nOcorrencia`, `opcao1`, `opcao2`) VALUES
(25, 'Sim', ''),
(26, '', 'Não');

-- --------------------------------------------------------

--
-- Estrutura para tabela `lo_tra`
--

CREATE TABLE `lo_tra` (
  `nOcorrencia` int(11) NOT NULL,
  `local` varchar(45) NOT NULL,
  `lado` varchar(45) NOT NULL,
  `face` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `lo_tra`
--

INSERT INTO `lo_tra` (`nOcorrencia`, `local`, `lado`, `face`, `tipo`) VALUES
(25, 'Tronco', 'Central', 'Posterior', 'Hemorragia'),
(26, 'Cabeça', 'Central', 'Posterior', 'Fraturas/Luxações/Entorses');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mate_desc`
--

CREATE TABLE `mate_desc` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `quantidade1` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `quantidade2` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `quantidade3` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `quantidade4` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `quantidade5` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `quantidade6` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `quantidade7` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL,
  `quantidade8` varchar(20) NOT NULL,
  `opcao15` varchar(20) NOT NULL,
  `quantidade9` varchar(20) NOT NULL,
  `opcao16` varchar(20) NOT NULL,
  `quantidade10` varchar(20) NOT NULL,
  `opcao17` varchar(20) NOT NULL,
  `opcao18` varchar(20) NOT NULL,
  `opcao19` varchar(20) NOT NULL,
  `quantidade11` varchar(20) NOT NULL,
  `opcao20` varchar(20) NOT NULL,
  `quantidade12` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mate_desc`
--

INSERT INTO `mate_desc` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `quantidade1`, `opcao5`, `quantidade2`, `opcao6`, `quantidade3`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `quantidade4`, `opcao11`, `quantidade5`, `opcao12`, `quantidade6`, `opcao13`, `quantidade7`, `opcao14`, `quantidade8`, `opcao15`, `quantidade9`, `opcao16`, `quantidade10`, `opcao17`, `opcao18`, `opcao19`, `quantidade11`, `opcao20`, `quantidade12`) VALUES
(25, 'ataduras', '', '12', '', '3', 'Cateter.tp óculos', '4', 'Compressa comum', '5', 'Kit\'s', '', 'P', '', '6', '', '', '', '', 'Máscara.DESC', '2', '', '', '', '', 'Soro fisiológico', '1', 'talas.PAP', '', 'G', '1', 'Outros', '2'),
(26, 'ataduras', '', '12', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `mate_hosp`
--

CREATE TABLE `mate_hosp` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(20) NOT NULL,
  `quantidade` varchar(20) NOT NULL,
  `opcao2` varchar(20) NOT NULL,
  `opcao3` varchar(20) NOT NULL,
  `opcao4` varchar(20) NOT NULL,
  `opcao5` varchar(20) NOT NULL,
  `quantidade1` varchar(20) NOT NULL,
  `opcao6` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `quantidade2` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `opcao11` varchar(20) NOT NULL,
  `quantidade3` varchar(20) NOT NULL,
  `opcao12` varchar(20) NOT NULL,
  `quantidade4` varchar(20) NOT NULL,
  `opcao13` varchar(20) NOT NULL,
  `quantidade5` varchar(20) NOT NULL,
  `opcao14` varchar(20) NOT NULL,
  `quantidade6` varchar(20) NOT NULL,
  `opcao15` varchar(20) NOT NULL,
  `quantidade7` varchar(20) NOT NULL,
  `opcao16` varchar(20) NOT NULL,
  `quantidade8` varchar(20) NOT NULL,
  `opcao17` varchar(20) NOT NULL,
  `opcao18` varchar(20) NOT NULL,
  `opcao19` varchar(20) NOT NULL,
  `quantidade9` varchar(20) NOT NULL,
  `outros` varchar(20) NOT NULL,
  `quantidade10` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `mate_hosp`
--

INSERT INTO `mate_hosp` (`nOcorrencia`, `opcao1`, `quantidade`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `quantidade1`, `opcao6`, `opcao7`, `opcao8`, `quantidade2`, `opcao9`, `opcao10`, `opcao11`, `quantidade3`, `opcao12`, `quantidade4`, `opcao13`, `quantidade5`, `opcao14`, `quantidade6`, `opcao15`, `quantidade7`, `opcao16`, `quantidade8`, `opcao17`, `opcao18`, `opcao19`, `quantidade9`, `outros`, `quantidade10`) VALUES
(25, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'T.T.F', '', 'Infantil', '2', 'Outros', '3'),
(26, '', '', 'Colar', '', 'PP', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `obs_import`
--

CREATE TABLE `obs_import` (
  `nOcorrencia` int(11) NOT NULL,
  `obs` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `obs_import`
--

INSERT INTO `obs_import` (`nOcorrencia`, `obs`) VALUES
(25, 'não entendi nd'),
(26, 'sem obs');

-- --------------------------------------------------------

--
-- Estrutura para tabela `paciente`
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

--
-- Despejando dados para a tabela `paciente`
--

INSERT INTO `paciente` (`nOcorrencia`, `Data`, `Sexo`, `Nome_hospital`, `Nomepac`, `Idadepac`, `CPFpac`, `Telefone`, `NOMEACOM`, `IDADEACOM`, `Localidade`) VALUES
(25, '2023-11-22', 'Masculi', 'Dona Helena', 'Roberto', 45, 2345678, 8765432, 'lindosvalda', 88, 'Rua albano shchimt'),
(26, '2023-11-21', 'Masculi', 'betesda', 'vitor', 19, 2147483647, 2147483647, 'amanda', 18, 'pirbeiraba');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pes_form`
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
-- Despejando dados para a tabela `pes_form`
--

INSERT INTO `pes_form` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `Outros`, `opcao21`) VALUES
(25, 1, '', 'Respiratório', 'DPOC', '', '', '', '', 'Obstétrico', '', 'Gestante', '', '', '', '', '', '', '', '', '', 'carro de boi', ''),
(26, 2, 'Psiquiátrico', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `proc_efe`
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
  `militar` varchar(20) NOT NULL,
  `pre` varchar(20) NOT NULL,
  `prf` varchar(20) NOT NULL,
  `def_civil` varchar(20) NOT NULL,
  `igppc` varchar(20) NOT NULL,
  `opcao42` varchar(20) NOT NULL,
  `usa` varchar(20) NOT NULL,
  `usb` varchar(20) NOT NULL,
  `opcao43` varchar(20) NOT NULL,
  `outros` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `proc_efe`
--

INSERT INTO `proc_efe` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `opcao21`, `opcao22`, `opcao23`, `opcao24`, `opcao25`, `opcao26`, `opcao27`, `opcao28`, `opcao29`, `opcao30`, `opcao31`, `opcao32`, `opcao33`, `opcao34`, `opcao35`, `tam`, `opcao36`, `opcao37`, `opcao38`, `opcao39`, `opcao40`, `opcao41`, `celesc`, `policia`, `civil`, `militar`, `pre`, `prf`, `def_civil`, `igppc`, `opcao42`, `usa`, `usb`, `opcao43`, `outros`) VALUES
(25, 'Aspiração', '', '', '', '', '', 'Desobstrução de v.a', '', '', '', '', 'Compressivo', 'Encravamento', '', '', '', '', '', '', '', 'membro sup.dir', 'membro sp.esq', '', '', '', '', '', '', '', '', '', '', '', '', 'Uso colar', '1', '', '', '', '', '', 'Meios auxiliares', 'Celesc ', '', '', '', '', '', '', '', 'Samu', '', 'USB', '', ''),
(26, '', '', '', '', '', 'Cânula de guedel', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `quei`
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

--
-- Despejando dados para a tabela `quei`
--

INSERT INTO `quei` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `1grau`, `2grau`, `3grau`) VALUES
(26, '', '', '', '', '', 0, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ss_form`
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

--
-- Despejando dados para a tabela `ss_form`
--

INSERT INTO `ss_form` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `opcao21`, `opcao22`, `opcao23`, `opcao24`, `opcao25`, `opcao26`, `opcao27`, `opcao28`, `opcao29`, `opcao30`, `opcao31`, `opcao32`, `opcao33`, `opcao34`, `opcao35`, `opcao36`, `opcao37`, `opcao38`, `opcao39`, `opcao40`, `opcao41`, `opcao42`, `opcao43`, `opcao44`, `opcao45`, `opcao46`, `opcao47`, `opcao48`, `opcao49`, `opcao50`, `opcao51`, `opcao52`, `opcao53`, `opcao54`, `opcao55`, `opcao56`, `opcao57`, `Outros`) VALUES
(25, 1, 'Abdomen Sensível/Rígido', '', '', 'Amnésia', '', '', '', 'Bradpnéia', '', '', 'Cianose ', 'Lábios', '', '', '', '', '', '', '', '', '', 'Edema', '', 'Localizado ', '', '', '', 'Hemorragia ', '', 'Externa', '', '', '', '', '', '', '', '', 'Parada', 'Cardíaca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ' Taquicardia ', 'Tontura  ', 'não sabemos oq deu'),
(26, 2, 'Abdomen Sensível/Rígido', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sv_form`
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
-- Despejando dados para a tabela `sv_form`
--

INSERT INTO `sv_form` (`nOcorrencia`, `id`, `pressao_arterial`, `pressao2`, `pulso`, `respiracao`, `saturacao`, `hgt`, `temperatura`, `opcao1`, `opcao2`, `perfusao_menor`, `perfusao_maior`) VALUES
(25, 1, 3, 3, 2, 56, 54, 0, 0, 'Anormal', '', '', '&lt;2SEG'),
(26, 2, 12, 9, 45, 89, 98, 45, 36, '', 'Normal', '&gt;2SEG', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `term_rec`
--

CREATE TABLE `term_rec` (
  `nOcorrencia` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `ass` varchar(100) NOT NULL,
  `test` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `term_rec`
--

INSERT INTO `term_rec` (`nOcorrencia`, `nome`, `rg`, `ass`, `test`) VALUES
(25, 'roberto', '2345677', 'embaixo', 'amém'),
(26, 'vitor hugo botelho ferreira', '123453346457', 'vitor hugo botelho ferreira', 'amanda caroline raasch');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tipo_ocorrencia`
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
-- Despejando dados para a tabela `tipo_ocorrencia`
--

INSERT INTO `tipo_ocorrencia` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `Outros`) VALUES
(25, 1, 'Causado por ani', '', '', 'Emergência médi', '', '', 'Queda própria a', '', 'Agressão ', '', '', 'Desabamento ', '', '', '', 'Queda de bicicleta', '', '', '', '', 'bateu e morreu'),
(26, 2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Trabalho ', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ve_form`
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
-- Despejando dados para a tabela `ve_form`
--

INSERT INTO `ve_form` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`) VALUES
(25, 1, '', '', '', '', '', 'Condutor Carro', '', '', '', ''),
(26, 2, '', '', '', '', '', '', '', '', '', 'Pedestre ');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `amn_emer`
--
ALTER TABLE `amn_emer`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `amn_ges`
--
ALTER TABLE `amn_ges`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `ava_cine`
--
ALTER TABLE `ava_cine`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `ava_pac`
--
ALTER TABLE `ava_pac`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dados_finais`
--
ALTER TABLE `dados_finais`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `deci_trans`
--
ALTER TABLE `deci_trans`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `form_cond`
--
ALTER TABLE `form_cond`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `impre`
--
ALTER TABLE `impre`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `lo_tra`
--
ALTER TABLE `lo_tra`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `mate_desc`
--
ALTER TABLE `mate_desc`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `mate_hosp`
--
ALTER TABLE `mate_hosp`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `obs_import`
--
ALTER TABLE `obs_import`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`nOcorrencia`);

--
-- Índices de tabela `pes_form`
--
ALTER TABLE `pes_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `proc_efe`
--
ALTER TABLE `proc_efe`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `quei`
--
ALTER TABLE `quei`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `ss_form`
--
ALTER TABLE `ss_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `sv_form`
--
ALTER TABLE `sv_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `term_rec`
--
ALTER TABLE `term_rec`
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- Índices de tabela `ve_form`
--
ALTER TABLE `ve_form`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nOcorrencia` (`nOcorrencia`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `nOcorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de tabela `pes_form`
--
ALTER TABLE `pes_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ss_form`
--
ALTER TABLE `ss_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sv_form`
--
ALTER TABLE `sv_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `ve_form`
--
ALTER TABLE `ve_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `amn_emer`
--
ALTER TABLE `amn_emer`
  ADD CONSTRAINT `amn_emer_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `amn_ges`
--
ALTER TABLE `amn_ges`
  ADD CONSTRAINT `amn_ges_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `ava_cine`
--
ALTER TABLE `ava_cine`
  ADD CONSTRAINT `ava_cine_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `dados_finais`
--
ALTER TABLE `dados_finais`
  ADD CONSTRAINT `dados_finais_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `deci_trans`
--
ALTER TABLE `deci_trans`
  ADD CONSTRAINT `deci_trans_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `form_cond`
--
ALTER TABLE `form_cond`
  ADD CONSTRAINT `form_cond_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `impre`
--
ALTER TABLE `impre`
  ADD CONSTRAINT `impre_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `lo_tra`
--
ALTER TABLE `lo_tra`
  ADD CONSTRAINT `lo_tra_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `mate_desc`
--
ALTER TABLE `mate_desc`
  ADD CONSTRAINT `mate_desc_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `mate_hosp`
--
ALTER TABLE `mate_hosp`
  ADD CONSTRAINT `mate_hosp_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `obs_import`
--
ALTER TABLE `obs_import`
  ADD CONSTRAINT `obs_import_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `pes_form`
--
ALTER TABLE `pes_form`
  ADD CONSTRAINT `pes_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `proc_efe`
--
ALTER TABLE `proc_efe`
  ADD CONSTRAINT `proc_efe_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `quei`
--
ALTER TABLE `quei`
  ADD CONSTRAINT `quei_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `ss_form`
--
ALTER TABLE `ss_form`
  ADD CONSTRAINT `ss_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `sv_form`
--
ALTER TABLE `sv_form`
  ADD CONSTRAINT `sv_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `term_rec`
--
ALTER TABLE `term_rec`
  ADD CONSTRAINT `term_rec_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  ADD CONSTRAINT `tipo_ocorrencia_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Restrições para tabelas `ve_form`
--
ALTER TABLE `ve_form`
  ADD CONSTRAINT `ve_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
