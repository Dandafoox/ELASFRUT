-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Ago-2023 às 21:31
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
-- Banco de dados: `dbelasfrut`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `frutas`
--

CREATE TABLE `frutas` (
  `id` int(11) NOT NULL,
  `nomefrut` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `hortalica`
--

CREATE TABLE `hortalica` (
  `id` int(11) NOT NULL,
  `nomehort` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `legumes`
--

CREATE TABLE `legumes` (
  `id` int(11) NOT NULL,
  `nomeleg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `organico`
--

CREATE TABLE `organico` (
  `id` int(11) NOT NULL,
  `nomeorg` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `raizes`
--

CREATE TABLE `raizes` (
  `id` int(11) NOT NULL,
  `nomeraiz` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcadadm`
--

CREATE TABLE `tblcadadm` (
  `id` int(11) NOT NULL,
  `nomeadm` varchar(100) DEFAULT NULL,
  `emailadm` varchar(50) DEFAULT NULL,
  `teladm` varchar(15) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblcadfornecedor`
--

CREATE TABLE `tblcadfornecedor` (
  `id` int(11) NOT NULL,
  `razaosocial` varchar(100) DEFAULT NULL,
  `cnpj` varchar(15) DEFAULT NULL,
  `forndtcad` date DEFAULT NULL,
  `emailforn` varchar(50) DEFAULT NULL,
  `telforn` varchar(15) DEFAULT NULL,
  `fotologo` varchar(100) DEFAULT NULL,
  `prod` varchar(100) DEFAULT NULL,
  `cepforn` varchar(10) DEFAULT NULL,
  `enderecoforn` varchar(100) DEFAULT NULL,
  `numero` int(10) DEFAULT NULL,
  `complforn` varchar(50) DEFAULT NULL,
  `bairroforn` varchar(40) DEFAULT NULL,
  `cidadeforn` varchar(40) DEFAULT NULL,
  `msociaisforn` varchar(150) DEFAULT NULL,
  `loginforn` varchar(50) DEFAULT NULL,
  `senhaforn` varchar(20) DEFAULT NULL,
  `quemsoueu` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblcadfornecedor`
--

INSERT INTO `tblcadfornecedor` (`id`, `razaosocial`, `cnpj`, `forndtcad`, `emailforn`, `telforn`, `fotologo`, `prod`, `cepforn`, `enderecoforn`, `numero`, `complforn`, `bairroforn`, `cidadeforn`, `msociaisforn`, `loginforn`, `senhaforn`, `quemsoueu`) VALUES
(1, 'Dandara do Amor', '33.034.000/0001', '2023-08-31', 'danda_amor@hotmail.com', '', '', 'banana', '', 'Rua do Amor', 0, 'Casa 2', 'Amor', 'Rio do Amor', 'Amor.com', NULL, NULL, ''),
(2, 'Rita das Passas', '33.034.000/0001', '2023-08-30', 'ritasdaspassas@hotmail.com', '123456789', '', 'Passas, uvas e amoras', '12345678', 'Rua das Passas', 12, 'Uvas frescas', 'Uva verde', 'Rio das Passas', 'Rita.passas', NULL, NULL, ''),
(3, 'Rita das Passas', '33.034.000/0001', '2023-08-30', 'ritasdaspassas@hotmail.com', '123456789', '', 'Passas, uvas e amoras', '12345678', 'Rua das Passas', 12, 'Uvas frescas', 'Uva verde', 'Rio das Passas', 'Rita.passas', NULL, NULL, ''),
(4, 'Dandara do Amor', '33.034.000/0001', '2023-08-30', 'ritasdaspassas@hotmail.com', '123456987', '', 'banana', '123456789', 'Rua do Amor', 12, 'Casa 2', 'Amor', 'Rio do Amor', 'Amor.com', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `verdura`
--

CREATE TABLE `verdura` (
  `id` int(11) NOT NULL,
  `nomeverd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `frutas`
--
ALTER TABLE `frutas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `hortalica`
--
ALTER TABLE `hortalica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `legumes`
--
ALTER TABLE `legumes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `organico`
--
ALTER TABLE `organico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `raizes`
--
ALTER TABLE `raizes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tblcadadm`
--
ALTER TABLE `tblcadadm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tblcadfornecedor`
--
ALTER TABLE `tblcadfornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `verdura`
--
ALTER TABLE `verdura`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `frutas`
--
ALTER TABLE `frutas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `hortalica`
--
ALTER TABLE `hortalica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `legumes`
--
ALTER TABLE `legumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `organico`
--
ALTER TABLE `organico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `raizes`
--
ALTER TABLE `raizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblcadadm`
--
ALTER TABLE `tblcadadm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tblcadfornecedor`
--
ALTER TABLE `tblcadfornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `verdura`
--
ALTER TABLE `verdura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
