-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Set-2022 às 14:55
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbegresso`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `mudasenha`
--

CREATE TABLE `mudasenha` (
  `idConta` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `confirmacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblaluno`
--

CREATE TABLE `tblaluno` (
  `cpf` char(14) NOT NULL,
  `idConta` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `dataNasc` char(10) NOT NULL,
  `genero` varchar(2) NOT NULL,
  `cor` varchar(8) NOT NULL,
  `rg` varchar(16) NOT NULL,
  `orgaoEmissor` char(6) NOT NULL,
  `celular` char(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblaluno`
--

INSERT INTO `tblaluno` (`cpf`, `idConta`, `nome`, `dataNasc`, `genero`, `cor`, `rg`, `orgaoEmissor`, `celular`) VALUES
('017.274.993-01', 5, 'Renato Freitas da Silveira', '1991-09-17', 'M', 'ND', '15363004-8', 'SSP-MA', '(98)981230378');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblareaprofissional`
--

CREATE TABLE `tblareaprofissional` (
  `idAreaProf` int(11) NOT NULL,
  `idConta` int(11) NOT NULL,
  `exerce` char(9) NOT NULL,
  `exercia` varchar(10) NOT NULL,
  `empresaExerce` varchar(50) DEFAULT NULL,
  `dataInicioExerce` char(10) DEFAULT NULL,
  `empresaExercia` varchar(50) DEFAULT NULL,
  `dataInicioExercia` char(10) DEFAULT NULL,
  `dataFimExercia` char(10) DEFAULT NULL,
  `linguaEstrangeira` varchar(4) DEFAULT NULL,
  `desempenho` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblareaprofissional`
--

INSERT INTO `tblareaprofissional` (`idAreaProf`, `idConta`, `exerce`, `exercia`, `empresaExerce`, `dataInicioExerce`, `empresaExercia`, `dataInicioExercia`, `dataFimExercia`, `linguaEstrangeira`, `desempenho`) VALUES
(13, 5, 'NaoExerce', 'Exerceu', '', '', 'Conglomerado', '2011-05-16', '2012-08-10', 'Ing', 'Bom');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblconta`
--

CREATE TABLE `tblconta` (
  `idConta` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblconta`
--

INSERT INTO `tblconta` (`idConta`, `email`, `senha`) VALUES
(5, 'renatofsilveirax@gmail.com', 'Abc@#321');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblendereco`
--

CREATE TABLE `tblendereco` (
  `idEndereco` int(11) NOT NULL,
  `idConta` int(11) NOT NULL,
  `logradouro` varchar(50) NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` char(2) NOT NULL,
  `cep` char(10) NOT NULL,
  `complemento` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblendereco`
--

INSERT INTO `tblendereco` (`idEndereco`, `idConta`, `logradouro`, `numero`, `bairro`, `cidade`, `estado`, `cep`, `complemento`) VALUES
(25, 5, 'Rua das Pipiras', 5, 'Ponta do Farol', 'São Luís', 'MA', '65.077-230', 'Ed. Caravelas, Apt 502');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblexpprofissional`
--

CREATE TABLE `tblexpprofissional` (
  `idExpProf` int(11) NOT NULL,
  `idConta` int(11) NOT NULL,
  `empresaTrabalha` text DEFAULT NULL,
  `empresaTrabalhou` text DEFAULT NULL,
  `objetivo` varchar(2000) NOT NULL,
  `cursos` text DEFAULT NULL,
  `certificacao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblexpprofissional`
--

INSERT INTO `tblexpprofissional` (`idExpProf`, `idConta`, `empresaTrabalha`, `empresaTrabalhou`, `objetivo`, `cursos`, `certificacao`) VALUES
(21, 5, 'Empresa JKL\n28/02/2022', 'Conglomerado\n11/04/2011\n18/06/2012\nXanax\n11/02/2013\n15/04/2016\nOscorp\n15/08/2016\n12/06/2020\n', 'Atuar na área de TI', 'Linguagem Java\nBasico\nAdobe: Photoshop, Illustrator, InDesign\nBasico\n', 'Ensino Médio completo em: Colégio Batista Daniel de La Touche\r\nAno Início: 04/02/2008\r\nAno Fim: 03/12/2010\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblformacao`
--

CREATE TABLE `tblformacao` (
  `idFormacao` int(11) NOT NULL,
  `idConta` int(11) NOT NULL,
  `escolaridadeConcl` char(3) NOT NULL,
  `bolsa` char(3) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `anoInic` char(10) NOT NULL,
  `anoConcl` char(10) NOT NULL,
  `universidade` varchar(50) DEFAULT NULL,
  `monografia` varchar(50) DEFAULT NULL,
  `orientador` varchar(50) DEFAULT NULL,
  `escolaridadeEmAnd` char(3) NOT NULL,
  `polo` varchar(30) NOT NULL,
  `anoInicAnd` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblformacao`
--

INSERT INTO `tblformacao` (`idFormacao`, `idConta`, `escolaridadeConcl`, `bolsa`, `instituicao`, `anoInic`, `anoConcl`, `universidade`, `monografia`, `orientador`, `escolaridadeEmAnd`, `polo`, `anoInicAnd`) VALUES
(13, 5, 'Med', 'Sem', 'Colégio Batista Daniel de La Touche', '2008-02-04', '2010-12-03', '', '', '', 'Sup', 'São Luís (EAD)', '2021-03-29');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `mudasenha`
--
ALTER TABLE `mudasenha`
  ADD KEY `usuario` (`usuario`,`confirmacao`),
  ADD KEY `fk_mudasenha_conta` (`idConta`);

--
-- Índices para tabela `tblaluno`
--
ALTER TABLE `tblaluno`
  ADD PRIMARY KEY (`cpf`),
  ADD KEY `fk_aluno_conta` (`idConta`);

--
-- Índices para tabela `tblareaprofissional`
--
ALTER TABLE `tblareaprofissional`
  ADD PRIMARY KEY (`idAreaProf`),
  ADD KEY `fk_areaprof_conta` (`idConta`);

--
-- Índices para tabela `tblconta`
--
ALTER TABLE `tblconta`
  ADD PRIMARY KEY (`idConta`);

--
-- Índices para tabela `tblendereco`
--
ALTER TABLE `tblendereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `fk_endereco_conta` (`idConta`);

--
-- Índices para tabela `tblexpprofissional`
--
ALTER TABLE `tblexpprofissional`
  ADD PRIMARY KEY (`idExpProf`),
  ADD KEY `fk_expProf_conta` (`idConta`);

--
-- Índices para tabela `tblformacao`
--
ALTER TABLE `tblformacao`
  ADD PRIMARY KEY (`idFormacao`),
  ADD KEY `fk_formacao_conta` (`idConta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblareaprofissional`
--
ALTER TABLE `tblareaprofissional`
  MODIFY `idAreaProf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `tblconta`
--
ALTER TABLE `tblconta`
  MODIFY `idConta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `tblendereco`
--
ALTER TABLE `tblendereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `tblexpprofissional`
--
ALTER TABLE `tblexpprofissional`
  MODIFY `idExpProf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `tblformacao`
--
ALTER TABLE `tblformacao`
  MODIFY `idFormacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `mudasenha`
--
ALTER TABLE `mudasenha`
  ADD CONSTRAINT `fk_mudasenha_conta` FOREIGN KEY (`idConta`) REFERENCES `tblconta` (`idConta`);

--
-- Limitadores para a tabela `tblaluno`
--
ALTER TABLE `tblaluno`
  ADD CONSTRAINT `fk_aluno_conta` FOREIGN KEY (`idConta`) REFERENCES `tblconta` (`idConta`);

--
-- Limitadores para a tabela `tblareaprofissional`
--
ALTER TABLE `tblareaprofissional`
  ADD CONSTRAINT `fk_areaprof_conta` FOREIGN KEY (`idConta`) REFERENCES `tblconta` (`idConta`);

--
-- Limitadores para a tabela `tblendereco`
--
ALTER TABLE `tblendereco`
  ADD CONSTRAINT `fk_endereco_conta` FOREIGN KEY (`idConta`) REFERENCES `tblconta` (`idConta`);

--
-- Limitadores para a tabela `tblexpprofissional`
--
ALTER TABLE `tblexpprofissional`
  ADD CONSTRAINT `fk_expProf_conta` FOREIGN KEY (`idConta`) REFERENCES `tblconta` (`idConta`);

--
-- Limitadores para a tabela `tblformacao`
--
ALTER TABLE `tblformacao`
  ADD CONSTRAINT `fk_formacao_conta` FOREIGN KEY (`idConta`) REFERENCES `tblconta` (`idConta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
