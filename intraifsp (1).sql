-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Ago-2019 às 11:31
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intraifsp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `documento`
--

CREATE TABLE `documento` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `nome_do_arquivo` varchar(50) DEFAULT NULL,
  `proprietario` varchar(50) DEFAULT NULL,
  `disponibilidade` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `documento`
--

INSERT INTO `documento` (`codigo`, `nome`, `nome_do_arquivo`, `proprietario`, `disponibilidade`) VALUES
(12, 'GRADUACAO', '1551169396eclipse.exe', 'fabricio_junior01@hotmail.com', 0),
(13, 'MESTRADO', '1551169441eclipse.ini', 'fabricio_junior01@hotmail.com', 0),
(14, 'DOUTORADO', '1551169472Projeto-Pedagogico---Bacharelado-em-Cien', 'fabricio_junior01@hotmail.com', 0),
(15, 'DOUTORADO', '1551169473Projeto-Pedagogico---Bacharelado-em-Cien', 'fabricio_junior01@hotmail.com', 0),
(16, 'MESTRADO', '1551169503pagar borborema.aspx', 'fabricio_junior01@hotmail.com', 0),
(17, 'GRADUACAO', '1551169527Script_Database.txt', 'fabricio_junior01@hotmail.com', 0),
(18, 'DOUTORADO', '1551169550trabalho.txt', 'fabricio_junior01@hotmail.com', 0),
(19, 'GRADUACAO', '1551173322IMPRIMIR 01.02.pdf', 'fabricio_junior01@hotmail.com', 0),
(20, 'CASA', '1551196025SecureDownloadManager.exe', 'fabricio_junior01@hotmail.com', 0),
(24, 'RG', '1551203194HockeyApp.xml', 'fabricio_junior01@hotmail.com', 0),
(27, 'COMPROVANTE DE ENDEREÃ‡O', '1551203275HockeyApp.dll', 'fabricio_junior01@hotmail.com', 0),
(29, 'COMPROVANTE DE ENDEREÃ‡O', '1551203389HockeyApp.xml', 'fabricio_junior01@hotmail.com', 0),
(30, 'COMPROVANTE DE ENDEREÃ‡O', '1551203486HockeyApp.xml', 'fabricio_junior01@hotmail.com', 0),
(31, 'COMPROVANTE', '1551203533HockeyApp.xml', 'fabricio_junior01@hotmail.com', 0),
(32, 'endereco', '1551203616SecureDownloadManager.exe.config', 'fabricio_junior01@hotmail.com', 0),
(33, 'endereco', '1551203696SecureDownloadManager.exe.config', 'fabricio_junior01@hotmail.com', 0),
(34, 'CPF', '1551203722SecureDownloadManager.exe.config', 'fabricio_junior01@hotmail.com', 0),
(35, 'endereco', '1551203796HockeyApp.xml', 'fabricio_junior01@hotmail.com', 0),
(36, 'endereco', '1551203945HockeyApp.xml', 'fabricio_junior01@hotmail.com', 0),
(37, 'RG', '1551213091poo.trabalho.txt', 'fabricio_junior01@hotmail.com', 0),
(41, 'CPF', '1551214664myw3schoolsimage.jpg', 'guga@hotmail.com', 0),
(45, 'RG', '1558677174chrome.dll.sig', 'fabio@hotmail.com', 0),
(46, 'RG', '1558680727chrome.exe.sig', 'fabio@hotmail.com', 0),
(47, 'GRADUACAO', '1558682316chrome.exe.sig', 'fabio@hotmail.com', 0),
(48, 'DOUTORADO', '1558682389eventlog_provider.dll', 'fabio@hotmail.com', 0),
(49, 'endereco', '155874018574.0.3729.169.manifest', 'fabio@hotmail.com', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(40) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `area` varchar(30) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `aprovado` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`, `categoria`, `area`, `data_nascimento`, `aprovado`) VALUES
('aero', 'aero@gmail.com', '10', '1', '3', '2010-10-10', 1),
('sa', 'fabio@hotmail.com', 'a', '1', '1', '1990-10-10', 1),
('fabricio jr', 'fabricio_junior01@hotmail.com', 'fabriciojr', 'administrativo', 'informatica', '1990-10-12', 1),
('fabricio jr', 'fabricio_junior0@hotmail.com', 'fabriciojr', 'administrativo', 'informatica', '1990-10-12', 1),
('fb', 'fb@gmail.com', 'FB', '1', '2', '2019-10-10', 1),
('guga', 'guga@hotmail.com', 'guga', '1', '1', '2010-10-10', 1),
('fabricio', 'hhh@hotmail.com', 'fbc', '2', '1', '2010-10-10', 1),
('joao', 'joao@hotmail.com', 'joao', '1', '1', '0000-00-00', 0),
('fb', 'okok@gmail.com', 'fb', '1', '2', '2010-10-10', 1),
('rafael', 'rafaalbano@hotmail.com', 'rafa', '1', '1', '0000-00-00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `proprietario` (`proprietario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `documento`
--
ALTER TABLE `documento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `documento`
--
ALTER TABLE `documento`
  ADD CONSTRAINT `documento_ibfk_1` FOREIGN KEY (`proprietario`) REFERENCES `usuario` (`email`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
