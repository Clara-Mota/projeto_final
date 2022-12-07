-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Dez-2022 às 00:43
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimento`
--

CREATE TABLE `atendimento` (
  `idprof` varchar(20) NOT NULL,
  `idpet` int(11) NOT NULL,
  `datapro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) DEFAULT NULL,
  `valortotal` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `atendimentoprocedimento`
--

CREATE TABLE `atendimentoprocedimento` (
  `idprof` varchar(20) NOT NULL,
  `idpet` int(11) NOT NULL,
  `idpro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pet`
--

CREATE TABLE `pet` (
  `idpet` bigint(20) UNSIGNED NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `raca` varchar(40) DEFAULT NULL,
  `dtNasc` date DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `procedimento`
--

CREATE TABLE `procedimento` (
  `idpro` bigint(20) UNSIGNED NOT NULL,
  `valor` decimal(11,2) DEFAULT NULL,
  `descricao` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `profissional`
--

CREATE TABLE `profissional` (
  `idprof` varchar(40) NOT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `especializacao` varchar(40) DEFAULT NULL,
  `tipo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tutor`
--

CREATE TABLE `tutor` (
  `cpf` char(11) NOT NULL,
  `contato` varchar(40) DEFAULT NULL,
  `nome` varchar(40) DEFAULT NULL,
  `divida` decimal(11,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD PRIMARY KEY (`idprof`,`idpet`),
  ADD UNIQUE KEY `idprof` (`idprof`),
  ADD UNIQUE KEY `idpet` (`idpet`);

--
-- Índices para tabela `atendimentoprocedimento`
--
ALTER TABLE `atendimentoprocedimento`
  ADD PRIMARY KEY (`idprof`,`idpet`,`idpro`),
  ADD KEY `idpet` (`idpet`),
  ADD KEY `idpro` (`idpro`),
  ADD KEY `idprof` (`idprof`);

--
-- Índices para tabela `pet`
--
ALTER TABLE `pet`
  ADD PRIMARY KEY (`idpet`),
  ADD KEY `cpf` (`cpf`);

--
-- Índices para tabela `procedimento`
--
ALTER TABLE `procedimento`
  ADD PRIMARY KEY (`idpro`);

--
-- Índices para tabela `profissional`
--
ALTER TABLE `profissional`
  ADD PRIMARY KEY (`idprof`);

--
-- Índices para tabela `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`cpf`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `pet`
--
ALTER TABLE `pet`
  MODIFY `idpet` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `procedimento`
--
ALTER TABLE `procedimento`
  MODIFY `idpro` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `atendimento`
--
ALTER TABLE `atendimento`
  ADD CONSTRAINT `atendimento_ibfk_1` FOREIGN KEY (`idprof`) REFERENCES `profissional` (`idprof`),
  ADD CONSTRAINT `atendimento_ibfk_2` FOREIGN KEY (`idprof`) REFERENCES `profissional` (`idprof`),
  ADD CONSTRAINT `atendimento_ibfk_3` FOREIGN KEY (`idprof`) REFERENCES `profissional` (`idprof`);

--
-- Limitadores para a tabela `atendimentoprocedimento`
--
ALTER TABLE `atendimentoprocedimento`
  ADD CONSTRAINT `atendimentoprocedimento_ibfk_1` FOREIGN KEY (`idprof`) REFERENCES `atendimento` (`idprof`),
  ADD CONSTRAINT `atendimentoprocedimento_ibfk_2` FOREIGN KEY (`idpet`) REFERENCES `atendimento` (`idpet`),
  ADD CONSTRAINT `atendimentoprocedimento_ibfk_3` FOREIGN KEY (`idprof`) REFERENCES `atendimento` (`idprof`),
  ADD CONSTRAINT `atendimentoprocedimento_ibfk_4` FOREIGN KEY (`idpet`) REFERENCES `atendimento` (`idpet`),
  ADD CONSTRAINT `atendimentoprocedimento_ibfk_5` FOREIGN KEY (`idprof`) REFERENCES `atendimento` (`idprof`);

--
-- Limitadores para a tabela `pet`
--
ALTER TABLE `pet`
  ADD CONSTRAINT `pet_ibfk_1` FOREIGN KEY (`cpf`) REFERENCES `tutor` (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
