-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Set-2017 às 05:22
-- Versão do servidor: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loltoxic`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `denuncia`
--

CREATE TABLE `denuncia` (
  `idDenuncia` int(11) UNSIGNED NOT NULL,
  `comentario` text NOT NULL,
  `dataOcorrido` date NOT NULL,
  `jogador_id` int(11) UNSIGNED NOT NULL,
  `usuario_aprovador_id` int(11) UNSIGNED DEFAULT NULL,
  `status` int(1) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `denuncia`
--

INSERT INTO `denuncia` (`idDenuncia`, `comentario`, `dataOcorrido`, `jogador_id`, `usuario_aprovador_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Tóxico, infantil, noob!', '2017-07-04', 2, 2, 1, '2017-07-06 03:11:48', '2017-07-06 03:11:48'),
(7, 'presutti', '2017-09-14', 2, NULL, 1, '2017-09-15 02:10:12', '2017-09-15 02:10:12'),
(8, 'não gostei desse babaca, aff', '2017-09-14', 2, NULL, 1, '2017-09-15 02:24:38', '2017-09-15 02:24:38'),
(9, 'Não gostei do cabelo dele.', '2017-09-14', 2, NULL, 1, '2017-09-15 02:50:59', '2017-09-15 02:50:59'),
(10, 'Parece que não tem família', '2017-01-14', 2, NULL, 1, '2017-09-15 02:54:57', '2017-09-15 02:54:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem`
--

CREATE TABLE `imagem` (
  `idImagem` int(11) UNSIGNED NOT NULL,
  `url` varchar(255) NOT NULL,
  `denuncia_id` int(11) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogador`
--

CREATE TABLE `jogador` (
  `idJogador` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `tier` varchar(50) CHARACTER SET latin1 NOT NULL,
  `division` varchar(10) CHARACTER SET latin1 NOT NULL,
  `level` int(6) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `jogador`
--

INSERT INTO `jogador` (`idJogador`, `username`, `tier`, `division`, `level`, `created_at`, `updated_at`) VALUES
(2, 'presutti', 'PLATINUM', 'V', 30, '2017-07-03 02:32:39', '2017-07-03 02:32:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `idTipoUsuario` int(11) UNSIGNED NOT NULL,
  `tipo` varchar(100) CHARACTER SET utf8 NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`idTipoUsuario`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'ADMIN', '2017-07-06 03:11:08', '2017-07-06 03:11:08');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) UNSIGNED NOT NULL,
  `login` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo_usuario_id` int(11) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `login`, `senha`, `tipo_usuario_id`, `created_at`, `updated_at`) VALUES
(2, 'vitorpre', '123456', 1, '2017-07-06 03:11:08', '2017-07-06 03:11:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `denuncia`
--
ALTER TABLE `denuncia`
  ADD PRIMARY KEY (`idDenuncia`),
  ADD KEY `FK_denuncia_jogador` (`jogador_id`),
  ADD KEY `FK_denuncia_usuario_aprovador` (`usuario_aprovador_id`);

--
-- Indexes for table `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`idImagem`),
  ADD KEY `FK_imagem_denuncia` (`denuncia_id`);

--
-- Indexes for table `jogador`
--
ALTER TABLE `jogador`
  ADD PRIMARY KEY (`idJogador`);

--
-- Indexes for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`idTipoUsuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `UNQ_login_usuario` (`login`),
  ADD KEY `FK_usuario_tipo` (`tipo_usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `denuncia`
--
ALTER TABLE `denuncia`
  MODIFY `idDenuncia` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `imagem`
--
ALTER TABLE `imagem`
  MODIFY `idImagem` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jogador`
--
ALTER TABLE `jogador`
  MODIFY `idJogador` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `idTipoUsuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `denuncia`
--
ALTER TABLE `denuncia`
  ADD CONSTRAINT `FK_denuncia_jogador` FOREIGN KEY (`jogador_id`) REFERENCES `jogador` (`idJogador`),
  ADD CONSTRAINT `FK_denuncia_usuario_aprovador` FOREIGN KEY (`usuario_aprovador_id`) REFERENCES `usuario` (`idUsuario`);

--
-- Limitadores para a tabela `imagem`
--
ALTER TABLE `imagem`
  ADD CONSTRAINT `FK_imagem_denuncia` FOREIGN KEY (`denuncia_id`) REFERENCES `denuncia` (`idDenuncia`);

--
-- Limitadores para a tabela `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_usuario_tipo` FOREIGN KEY (`tipo_usuario_id`) REFERENCES `tipo_usuario` (`idTipoUsuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
