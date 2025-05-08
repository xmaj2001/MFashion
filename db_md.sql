-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Fev-2023 às 14:41
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
-- Database: `db_md`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadmin`
--

CREATE TABLE `cadmin` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ativo` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadmin`
--

INSERT INTO `cadmin` (`id`, `nome`, `email`, `senha`, `ativo`) VALUES
(1, 'mfashion', 'mfashion@gmail.com', '36f2dc821027058d24fd051b1a3f88b6', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `telefone` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rede1` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rede2` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `rede3` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `local` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `email`, `rede1`, `rede2`, `rede3`, `local`) VALUES
(1, '999-999-99', 'ytmura@gmail.com', 'xmaj_hk', 'xmaj_hk', 'xmaj_hk', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `idmodelo` int(11) NOT NULL,
  `foto` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `capa` int(11) DEFAULT '0',
  `link` varchar(240) COLLATE utf8_unicode_ci DEFAULT NULL,
  `emite` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `idmodelo`, `foto`, `capa`, `link`, `emite`) VALUES
(1, 1, 'https://scontent.flad2-1.fna.fbcdn.net/v/t39.30808-6/322613752_702001101499377_2054125974454106064_n.jpg?_nc_cat=108&amp;ccb=1-7&amp;_nc_sid=8bfeb9&amp;_nc_ohc=yqyiEBm_M4kAX8_X35T&amp;_nc_ht=scontent.flad2-1.fna&amp;oh=00_AfCQYLg--Wfq5x8dRFjm4l2VqR6A0HQzb1Z-YLKr054idg&amp;oe=63DFBC37', 0, NULL, '2023-02-11 13:39:15'),
(2, 1, 'http://localhost/assets/img/gallery-06.jpg', 0, NULL, '2023-02-11 13:39:30');

-- --------------------------------------------------------

--
-- Estrutura da tabela `inscrito`
--

CREATE TABLE `inscrito` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `datan` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `nacionalidade` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `altura` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `calcado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rede` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ms` text COLLATE utf8_unicode_ci NOT NULL,
  `rosto` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `corpo` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `emite` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `inscrito`
--

INSERT INTO `inscrito` (`id`, `nome`, `genero`, `datan`, `nacionalidade`, `altura`, `calcado`, `rede`, `email`, `ms`, `rosto`, `corpo`, `emite`) VALUES
(1, 'Lander Master', 'feminino', '2023-02-11', 'angolana', '1.80', '40', '', '', '', '63e792ec544b3.jpg', '63e792ec544b6.jpg', '2023-02-11 10:06:53'),
(2, 'Alien Beat', 'masculino', '2023-02-11', 'angolana', '1.81', '30', '', '', '', '63e7933229d50.png', '63e7933229d54.jpeg', '2023-02-11 10:08:04'),
(3, 'Lander Master', 'masculino', '2023-02-11', 'angolana', '1.80', '30', 'sasas', 'xmaj2001@gmail.com', 'xxxx', '63e79d573de98.jpeg', '63e79d573de9c.png', '2023-02-11 10:51:21'),
(4, 'Lander Master', 'masculino', '2023-02-11', 'angolana', '1.80', '30', 'sasas', 'xmaj2001@gmail.com', 'xxxx', '63e79d7c3554c.jpeg', '63e79d7c35550.png', '2023-02-11 10:51:58'),
(5, 'Rinkana', 'masculino', '2023-02-11', 'angolana', '1.80', '30', 'sasas', 'hunterkeymura@gmail.com', '', '63e79ef25f3f2.jpg', '63e79ef25f3f6.jpg', '2023-02-11 10:58:11'),
(6, 'Alien Beat', 'masculino', '2023-02-11', 'angolana', '1.78', '40', 'sasas', 'ura@gmail.com', '', '63e79fa54927b.jpg', '63e79fa549280.jpg', '2023-02-11 11:01:09'),
(7, 'Lander Master', 'masculino', '2023-02-11', 'angolana', '1.80', '30', 'sasas', 'trttrttrtrtrtrtrtt1160@gmail.com', '', '63e7a281a864f.jpg', '63e7a281a8653.jpg', '2023-02-11 11:13:22'),
(8, 'CEF', 'masculino', '2023-02-11', 'angolana', '1.81', '35', 'vfd', 'trttrttrtrtrtrtrtt1160@gmail.com', '', '63e7a2f3efbdc.jpg', '63e7a2f3efbe2.jpg', '2023-02-11 11:15:16'),
(9, 'CEF', 'masculino', '2023-02-11', 'angolana', '1,80', '40', 'fafas', 'hunterkeymura@gmail.com', '', '63e7a359b92f9.jpg', '63e7a359b92fd.jpg', '2023-02-11 11:16:57'),
(10, 'CEF', 'masculino', '2023-02-11', 'angolana', '1.81', '30', 'vfd', 'mar60@gmail.com', '', '63e7a654be3ed.jpg', '63e7a654be3f1.jpg', '2023-02-11 11:29:41');

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

CREATE TABLE `modelo` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `genero` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `altura` float DEFAULT NULL,
  `busto` float DEFAULT NULL,
  `cintura` float DEFAULT NULL,
  `ancas` float DEFAULT NULL,
  `calcado` float DEFAULT NULL,
  `cabelo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `olho` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `emite` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rede1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rede2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rede3` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`id`, `nome`, `genero`, `altura`, `busto`, `cintura`, `ancas`, `calcado`, `cabelo`, `olho`, `emite`, `rede1`, `rede2`, `rede3`) VALUES
(1, 'Lander Master', 'masculino', 1.8, 84, 20, 4, 35, 'preto', 'Preto', '2023-02-11 13:39:09', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobre`
--

CREATE TABLE `sobre` (
  `id` int(11) NOT NULL,
  `info1` text COLLATE utf8_unicode_ci NOT NULL,
  `info2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `sobre`
--

INSERT INTO `sobre` (`id`, `info1`, `info2`) VALUES
(1, 'O **MFashion &amp; Management** é uma agência de moda, com modelos não-padrão, compostos por crianças, adolescentes e jovens, influenciadores, com atitudes, estilos e muita personalidade, com um sonho de ser um modelo e também a inclusão social.', 'Mfashion &amp; Management\r\n-----------------------------\r\nNasceu da **União de Profissionais**, com vasta experiência nas áreas de modelagem e artistas em geral.\r\n\r\nA Agência é formada por uma organização criativa que desenvolve colaborações, projetos, parcerias exclusivas e impactantes.\r\n\r\nOpera em todas as áreas do setor de entretenimento / moda e também em áreas relacionadas, nomeadamente:\r\n\r\n* **Show de moda**\r\n* **Photoshoot**\r\n* **TV** \r\n* **Shows** \r\n* **Showroom** \r\n* **Editorial**\r\n* **Publicidade** \r\n* **Vídeos de música** \r\n* **Look livros** \r\n* **Catálogos**\r\n* **Maquiagem** \r\ne outros. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `idmodelo` int(11) NOT NULL,
  `fb` varchar(240) COLLATE utf8_unicode_ci NOT NULL,
  `insta` varchar(240) COLLATE utf8_unicode_ci NOT NULL,
  `twi` varchar(240) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadmin`
--
ALTER TABLE `cadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inscrito`
--
ALTER TABLE `inscrito`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadmin`
--
ALTER TABLE `cadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inscrito`
--
ALTER TABLE `inscrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
