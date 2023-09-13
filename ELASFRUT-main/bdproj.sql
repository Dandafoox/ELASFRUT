-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2023 às 20:18
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
-- Banco de dados: `bdproj`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblfornecedor`
--

CREATE TABLE `tblfornecedor` (
  `idfornecedor` int(11) NOT NULL,
  `fornecedor` varchar(50) NOT NULL,
  `codigo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblfornecedor`
--

INSERT INTO `tblfornecedor` (`idfornecedor`, `fornecedor`, `codigo`) VALUES
(1, 'hort1', 10),
(2, 'hort2', 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblregprod`
--

CREATE TABLE `tblregprod` (
  `idregprod` int(11) NOT NULL,
  `idfornecedor` int(11) NOT NULL,
  `tipoproduto` varchar(20) NOT NULL,
  `produto` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `preco` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tblregprod`
--

INSERT INTO `tblregprod` (`idregprod`, `idfornecedor`, `tipoproduto`, `produto`, `foto`, `preco`) VALUES
(1, 10, 'computador', 'memória', 'memoriapng.png', '80.00'),
(2, 12, 'hortaliça', 'alface', '', '0.00'),
(3, 11, 'computador', 'memória', 'memoriapng.png', '79.00'),
(4, 11, 'fruta', 'maça', '', '2.63'),
(5, 11, 'fruta', 'banana', '', '5.87');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tblfornecedor`
--
ALTER TABLE `tblfornecedor`
  ADD PRIMARY KEY (`idfornecedor`);

--
-- Índices para tabela `tblregprod`
--
ALTER TABLE `tblregprod`
  ADD PRIMARY KEY (`idregprod`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tblfornecedor`
--
ALTER TABLE `tblfornecedor`
  MODIFY `idfornecedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tblregprod`
--
ALTER TABLE `tblregprod`
  MODIFY `idregprod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
