-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Nov-2023 às 13:34
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
  `quaismed` varchar(20) NOT NULL,
  `opcao7` varchar(20) NOT NULL,
  `opcao8` varchar(20) NOT NULL,
  `especifique` varchar(20) NOT NULL,
  `opcao9` varchar(20) NOT NULL,
  `opcao10` varchar(20) NOT NULL,
  `horas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `amn_emer`
--

INSERT INTO `amn_emer` (`nOcorrencia`, `ss`, `opcao1`, `opcao2`, `tempo`, `opcao3`, `opcao4`, `quais`, `opcao5`, `opcao6`, `horario`, `quaismed`, `opcao7`, `opcao8`, `especifique`, `opcao9`, `opcao10`, `horas`) VALUES
(22, '1', '', 'não', '1', 'Sim', '', '1', 'Sim', '', '1', '1', '', '', '1', '', 'Não', '1'),
(22, '1', '', 'não', '1', '', 'Não', '1', 'Sim', '', '1', '1', 'Sim', '', '', 'Sim', '', '');

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

--
-- Extraindo dados da tabela `ava_cine`
--

INSERT INTO `ava_cine` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`) VALUES
(22, 'sim', '', '', 'não', '', 'não', '', 'não', '', '', '', 'não', '', ''),
(22, 'sim', '', '', 'não', '', 'não', '', 'não', '', '', '', 'não', '', ''),
(22, 'sim', '', '', '', '', 'não', '', 'não', '', '', '', '', '', '');

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

--
-- Extraindo dados da tabela `ava_pac`
--

INSERT INTO `ava_pac` (`nOcorrencia`, `+5`, `-5`, `aber_ocu`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `resp_verb`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `resp_moto`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `aber_ocu16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `resp_verb21`, `opcao22`, `opcao23`, `opcao24`, `opcao25`, `opcao26`, `resp_moto27`, `opcao28`, `opcao29`, `opcao30`, `opcao31`, `opcao32`, `opcao33`) VALUES
(22, 'sim', 'não', 'Abertura Ocular', '', 'Comando Verbal', 'Estímulo Doloroso', '', '', 'Orientado', '', 'Palavras Inapropriadas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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

--
-- Extraindo dados da tabela `deci_trans`
--

INSERT INTO `deci_trans` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `m`, `s1`, `s2`, `s3`, `demandante`, `equipe`) VALUES
(19, '', 'Instável', '', '', '', '1', '1', '1', '', ''),
(19, '', 'Instável', 'Parcialmente Instavel', '', '', '1', '1', '1', '', ''),
(19, 'Crítico', '', '', 'Estável', '', '1', '1', '1', '1', ''),
(22, '', '', 'Parcialmente Instavel', '', '1', '1', '11', '1', '1', '1');

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

--
-- Extraindo dados da tabela `form_cond`
--

INSERT INTO `form_cond` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`) VALUES
(17, '', 'Semi-sentada', ''),
(17, '', 'Semi-sentada', ''),
(17, '', 'Semi-sentada', ''),
(17, '', 'Semi-sentada', ''),
(19, 'Deitada', '', ''),
(19, 'Deitada', '', ''),
(19, '', '', 'Sentada'),
(22, 'Deitada', '', 'Sentada');

-- --------------------------------------------------------

--
-- Estrutura da tabela `impre`
--

CREATE TABLE `impre` (
  `nOcorrencia` int(11) NOT NULL,
  `opcao1` varchar(45) NOT NULL,
  `opcao2` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `impre`
--

INSERT INTO `impre` (`nOcorrencia`, `opcao1`, `opcao2`) VALUES
(15, 'Sim', ''),
(16, 'Sim', ''),
(17, 'Sim', ''),
(15, 'Sim', ''),
(16, 'Sim', ''),
(17, 'Sim', ''),
(19, '', 'Não'),
(22, 'Sim', ''),
(22, '', 'Não'),
(22, '', 'Não');

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

--
-- Extraindo dados da tabela `lo_tra`
--

INSERT INTO `lo_tra` (`nOcorrencia`, `local`, `lado`, `face`, `tipo`) VALUES
(19, 'Tronco', 'Central', 'Frontal', 'F.A.B/F.A.F'),
(22, 'Tronco', 'Central', 'Frontal', 'Evisceração');

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

--
-- Extraindo dados da tabela `obs_import`
--

INSERT INTO `obs_import` (`nOcorrencia`, `obs`) VALUES
(22, '292929229');

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

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`nOcorrencia`, `Data`, `Sexo`, `Nome_hospital`, `Nomepac`, `Idadepac`, `CPFpac`, `Telefone`, `NOMEACOM`, `IDADEACOM`, `Localidade`) VALUES
(15, '2023-11-16', 'Masculi', '1', '1', 1, 1, 1, '1', 1, '1'),
(16, '2023-11-01', 'Feminin', 'dona helena', '1', 1, 1, 1, '1', 1, '1'),
(17, '2023-11-08', 'Masculi', 'la', 'tissia', 1, 1, 1, '1', 1, '1'),
(18, '2023-11-08', 'Feminin', '1', '1', 1, 1, 1, '1', 1, '1'),
(19, '2023-11-15', 'Masculi', '1', '1', 1, 1, 1, '1', 1, '1'),
(20, '2023-11-17', 'Feminin', '1', '1', 1, 1, 1, '1', 1, '1'),
(21, '2023-11-24', 'Masculi', '2', '2', 2, 2, 2, '2', 2, '2'),
(22, '2023-11-10', 'Masculi', '1', '1', 1, 1, 1, '1', -1, '1');

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
(19, 7, '', 'Respiratório', '', '', 'Diabetes', '', 'Hipoglicemia', '', '', '', '', 'Transporte', 'Aéreo', '', '', '', '', '', '', 'tentativa de homicidio', ''),
(22, 8, '', 'Respiratório', '', 'Inalação Fumaça', '', '', 'Hipoglicemia', '', '', '', '', '', '', '', 'Emergencial ', '', '', 'Outros', '', 'ta todo se tremendo', '');

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
  `militar` varchar(20) NOT NULL,
  `pre` varchar(20) NOT NULL,
  `prf` varchar(20) NOT NULL,
  `def_civil` varchar(20) NOT NULL,
  `igppc` varchar(20) NOT NULL,
  `opcao42` varchar(20) NOT NULL,
  `usa` varchar(20) NOT NULL,
  `usb` varchar(20) NOT NULL,
  `opcao43` varchar(20) NOT NULL,
  `outros` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `proc_efe`
--

INSERT INTO `proc_efe` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `opcao21`, `opcao22`, `opcao23`, `opcao24`, `opcao25`, `opcao26`, `opcao27`, `opcao28`, `opcao29`, `opcao30`, `opcao31`, `opcao32`, `opcao33`, `opcao34`, `opcao35`, `tam`, `opcao36`, `opcao37`, `opcao38`, `opcao39`, `opcao40`, `opcao41`, `celesc`, `policia`, `civil`, `militar`, `pre`, `prf`, `def_civil`, `igppc`, `opcao42`, `usa`, `usb`, `opcao43`, `outros`) VALUES
(22, 'Aspiração', '', '', 'Avaliação continuada', '', '', '', '', '', '', '', '', '', 'Ocular', '', '', '', 'Imobilizações ', '', '', '', 'membro sp.esq', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(22, '', 'Avaliação inicia', '', '', '', '', '', '', '', '', '', 'Compressivo', '', '', 'Queimadura', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(22, '', 'Avaliação inicia', '', '', '', '', '', '', '', '', '', 'Compressivo', '', '', 'Queimadura', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', '', '', '', '0', '', '', '', '', '', '', '', '', ''),
(22, '', 'Avaliação inicia', '', '', '', '', '', '', '', '', '', 'Compressivo', '', '', 'Queimadura', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1', '', '', '', '', '', '', 'Celesc ', 'Polícia', 'Civil', '0', 'PRE', 'PRF', 'Def.civil', '', '', '', '', '', '');

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

--
-- Extraindo dados da tabela `quei`
--

INSERT INTO `quei` (`nOcorrencia`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `1grau`, `2grau`, `3grau`) VALUES
(19, '', 'Pescoço', '', '', '', 0, 'M.I.E', '', '', '', '', ''),
(22, 'Cabeça', 'Pescoço', 'T.ANT', '', 'Genit.', 0, '', '', '', '', '', '');

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

--
-- Extraindo dados da tabela `ss_form`
--

INSERT INTO `ss_form` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `opcao21`, `opcao22`, `opcao23`, `opcao24`, `opcao25`, `opcao26`, `opcao27`, `opcao28`, `opcao29`, `opcao30`, `opcao31`, `opcao32`, `opcao33`, `opcao34`, `opcao35`, `opcao36`, `opcao37`, `opcao38`, `opcao39`, `opcao40`, `opcao41`, `opcao42`, `opcao43`, `opcao44`, `opcao45`, `opcao46`, `opcao47`, `opcao48`, `opcao49`, `opcao50`, `opcao51`, `opcao52`, `opcao53`, `opcao54`, `opcao55`, `opcao56`, `opcao57`, `Outros`) VALUES
(15, 2, 'Abdomen Sensível/Rígido', '', '', '', 'Angina de peito ', '', '', '', '', '', '', '', 'Extremidades', '', '', '', '', '', '', 'Dispnéia ', 'Dor local ', '', '', '', '', '', '', 'Hemorragia ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(16, 3, 'Abdomen Sensível/Rígido', '', '', '', '', '', 'Bradicardia  ', '', '', '', '', '', '', '', '', '', 'Descerebração', '', '', 'Dispnéia ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Otorragia ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'morreu'),
(17, 4, 'Abdomen Sensível/Rígido', '', '', '', 'Angina de peito ', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Hipotensão', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'tentativa de homicidio'),
(19, 6, '', '', '', '', 'Angina de peito ', '', '', '', '', 'Cefaléia  ', 'Cianose ', '', 'Extremidades', '', '', '', '', '', '', '', '', 'Edema', 'Generalizado', '', '', '', '', 'Hemorragia ', 'Interna', '', '', '', '', '', '', '', '', '', 'Parada', 'Cardíaca', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'tentativa de homicidio'),
(22, 7, 'Abdomen Sensível/Rígido', '', '', 'Amnésia', '', '', 'Bradicardia  ', '', '', 'Cefaléia  ', '', 'Lábios', '', '', '', '', '', '', '', '', '', 'Edema', 'Generalizado', '', '', 'Êstase de jugular', '', 'Hemorragia ', '', '', '', 'Hipotensão', '', '', 'Óbito', '', '', '', '', '', '', '', 'Prurido na pele', '', '', '', '', '', '', '', '', '', '', '', ' Taquipnéia', ' Taquicardia ', '', '');

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
(15, 4, 5, 0, 5, 0, 6, 5, 0, '', 'Normal', '', '&lt;2SEG'),
(16, 5, 11, 1, 1, 0, 1, 0, 0, 'Anormal', '', '', ''),
(17, 6, 1, 0, 1, 10, 0, 1, 0, 'Anormal', '', '', ''),
(18, 7, 1, 0, 1, 0, 1, 1, 0, '', 'Normal', '&gt;2SEG', ''),
(19, 8, 1, 0, 1, 1, 1, 1, 0, '', 'Normal', '', '&lt;2SEG'),
(22, 9, 3, 33, 0, 3, 3, 3, 0, '', 'Normal', '', '');

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

--
-- Extraindo dados da tabela `tipo_ocorrencia`
--

INSERT INTO `tipo_ocorrencia` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`, `opcao11`, `opcao12`, `opcao13`, `opcao14`, `opcao15`, `opcao16`, `opcao17`, `opcao18`, `opcao19`, `opcao20`, `Outros`) VALUES
(15, 5, '', 'Com meio de tra', '', '', '', '', 'Queda própria a', '', '', '', 'Choque elétrico', '', '', '', 'Intoxicação ', '', '', '', '', '', 'tentativa de homicidio'),
(15, 6, '', 'Com meio de tra', '', '', '', '', 'Queda própria a', '', '', '', 'Choque elétrico', '', '', '', 'Intoxicação ', '', '', '', '', '', 'tentativa de homicidio'),
(16, 7, '', '', '', '', '', '', '', '', '', '', '', '', '', 'Esportivo ', '', '', 'Queda de moto ', '', '', '', 'tentativa de homicidio'),
(17, 8, '', '', '', '', 'Queda de altura', '', '', '', 'Agressão ', '', '', '', '', '', '', 'Queda de bicicleta', '', '', '', '', 'ablacarro'),
(18, 9, 'Causado por ani', '', '', '', '', '', 'Queda própria a', '', '', '', '', '', '', '', '', 'Queda de bicicleta', '', 'Queda nível <2m', '', '', 'morreu'),
(19, 10, '', '', '', 'Emergência médi', '', '', '', '', '', '', '', '', 'Doméstico ', '', '', '', '', 'Queda nível <2m', '', '', 'tentativa de homicidio'),
(22, 11, 'Causado por ani', '', '', '', 'Queda de altura', '', '', '', '', '', '', '', 'Doméstico ', '', '', '', '', '', '', '', 'bu bu');

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
-- Extraindo dados da tabela `ve_form`
--

INSERT INTO `ve_form` (`nOcorrencia`, `id`, `opcao1`, `opcao2`, `opcao3`, `opcao4`, `opcao5`, `opcao6`, `opcao7`, `opcao8`, `opcao9`, `opcao10`) VALUES
(15, 2, '', '', '', '', '', '', '', '', '', ''),
(16, 3, 'Ciclista', '', '', '', '', '', 'Clínico', '', '', ''),
(17, 4, '', '', '', '', 'Pas.Moto ', '', 'Clínico', '', 'Pass.BCO trás', ''),
(18, 5, '', 'Condutor Moto', '', '', '', '', '', 'Trauma', '', 'Pedestre '),
(19, 6, 'Ciclista', '', '', '', '', '', 'Clínico', '', '', '');

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
  MODIFY `nOcorrencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de tabela `pes_form`
--
ALTER TABLE `pes_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `ss_form`
--
ALTER TABLE `ss_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `sv_form`
--
ALTER TABLE `sv_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tipo_ocorrencia`
--
ALTER TABLE `tipo_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `ve_form`
--
ALTER TABLE `ve_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `amn_emer`
--
ALTER TABLE `amn_emer`
  ADD CONSTRAINT `amn_emer_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `amn_ges`
--
ALTER TABLE `amn_ges`
  ADD CONSTRAINT `amn_ges_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `ava_cine`
--
ALTER TABLE `ava_cine`
  ADD CONSTRAINT `ava_cine_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `dados_finais`
--
ALTER TABLE `dados_finais`
  ADD CONSTRAINT `dados_finais_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `deci_trans`
--
ALTER TABLE `deci_trans`
  ADD CONSTRAINT `deci_trans_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `form_cond`
--
ALTER TABLE `form_cond`
  ADD CONSTRAINT `form_cond_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `impre`
--
ALTER TABLE `impre`
  ADD CONSTRAINT `impre_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `lo_tra`
--
ALTER TABLE `lo_tra`
  ADD CONSTRAINT `lo_tra_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `mate_desc`
--
ALTER TABLE `mate_desc`
  ADD CONSTRAINT `mate_desc_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `mate_hosp`
--
ALTER TABLE `mate_hosp`
  ADD CONSTRAINT `mate_hosp_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `obs_import`
--
ALTER TABLE `obs_import`
  ADD CONSTRAINT `obs_import_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `pes_form`
--
ALTER TABLE `pes_form`
  ADD CONSTRAINT `pes_form_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `proc_efe`
--
ALTER TABLE `proc_efe`
  ADD CONSTRAINT `proc_efe_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

--
-- Limitadores para a tabela `quei`
--
ALTER TABLE `quei`
  ADD CONSTRAINT `quei_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

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
-- Limitadores para a tabela `term_rec`
--
ALTER TABLE `term_rec`
  ADD CONSTRAINT `term_rec_ibfk_1` FOREIGN KEY (`nOcorrencia`) REFERENCES `paciente` (`nOcorrencia`);

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
