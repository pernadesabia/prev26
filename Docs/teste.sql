-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2020 às 20:58
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `coach`
--

CREATE TABLE `coach` (
  `coach_id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `sobrenome` varchar(80) NOT NULL,
  `nomeFantasia` varchar(80) NOT NULL,
  `cpf` int(11) NOT NULL,
  `rg` varchar(9) NOT NULL,
  `genero` varchar(30) NOT NULL,
  `dataNascimento` date NOT NULL,
  `telefone` int(11) DEFAULT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(80) NOT NULL,
  `escolaridade` varchar(40) NOT NULL,
  `endereco` varchar(80) NOT NULL,
  `numero` varchar(20) NOT NULL,
  `complemento` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cep` int(11) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `uf` varchar(40) NOT NULL,
  `tipoEnd` varchar(40) NOT NULL,
  `coach_img` varchar(40) DEFAULT NULL,
  `senha` varchar(40) NOT NULL,
  `confirmasenha` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `coach`
--

INSERT INTO `coach` (`coach_id`, `nome`, `sobrenome`, `nomeFantasia`, `cpf`, `rg`, `genero`, `dataNascimento`, `telefone`, `celular`, `email`, `escolaridade`, `endereco`, `numero`, `complemento`, `bairro`, `cep`, `cidade`, `uf`, `tipoEnd`, `coach_img`, `senha`, `confirmasenha`) VALUES
(1, 'Pedro', 'Santos', 'henrique@gmail.com', 358677, '333333', '', '2007-03-26', 110029292, 0, '', '', 'Rua Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', 'Personagens-Dragon-Ball-Tao-Pai-Pai.jpg', '2500778', '2500778'),
(2, 'Pedro', 'Santos', 'henrique@gmail.com', 358677, '333333', '', '2007-03-26', 110029292, 0, '', '', 'Rua Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', 'Personagens-Dragon-Ball-Tao-Pai-Pai.jpg', '2500778', '2500778'),
(3, 'Pedro', 'Santos', 'henrique@gmail.com', 358677, '333333', '', '2007-03-26', 110029292, 0, '', '', 'Rua Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', 'Personagens-Dragon-Ball-Tao-Pai-Pai.jpg', '2500778', '2500778'),
(4, 'Pedro', 'Santos', 'henrique@gmail.com', 358677, '333333', '', '2007-03-26', 110029292, 0, '', '', 'Rua Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', 'Personagens-Dragon-Ball-Tao-Pai-Pai.jpg', '2500778', '2500778'),
(5, 'Allan', 'Santos', 'teste', 358677, '333333', '', '2020-12-31', 111223344, 0, '', '', 'Rua AntÃ´nio Santos GonÃ§alves', '79', 'sobrado', 'CÃ©zar de Souza', 8820490, 'Mogi das Cruzes', 'SP', '', '4rttauv2t2g01.png', '12345', '12345'),
(6, 'Pedro', 'Santos', 'Teste Empresa', 358677, '333333', '', '2020-12-31', 110029292, 0, 'henrique@gmail.com', '', 'Rua Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', '', '3333', '3333'),
(7, 'Rosa', 'Santos', 'Teste Empresa', 333, '333333', '', '2016-10-31', 2147483647, 2147483647, 'henrique@gmail.com', '', 'Rua Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', '1959421_10202813532794243_55545368895575', '2312312', '2123123'),
(8, 'Pedro', 'Henrique da Silva Santos', 'PHSS', 358677, '333333', '', '2007-03-26', 2147483647, 0, 'henrique@gmail.com', '', 'Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', 'C:fakepath43be08ff95596c7118ecbd9ac4dba7', '@teH!', '@teH!'),
(9, 'Allan', 'Daniel', 'Clubie', 358677, '33.880.18', '', '1984-06-04', 110029292, 0, 'allan@clubie.com.br', '', 'Dinorah da ConceiÃ§Ã£o Braga', '79', 'sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', 'C:fakepathPersonagens-Dragon-Ball-Tao-Pa', 'vaiamerdabolsonaro', 'vaiamerdabolsonaro'),
(10, 'Pedro', 'Santos', 'Teste Empresa', 358677, '333333', '', '0000-00-00', 110029292, 110029292, 'henrique@gmail.com', '', 'Dinorah', '902312932809', 'Sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', '', '250077', '250077'),
(11, 'Pedro', 'Santos', 'Teste Empresa', 358677, '333333', '', '0000-00-00', 110029292, 110029292, 'henrique@gmail.com', '', 'Dinorah', '902312932809', 'Sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', '', '250077', '250077'),
(12, 'Allan', 'Santos', 'testeeeeee', 358677, '33.880.18', '', '2016-09-28', 111223345, 111223344, 'allan@allan.com.br', '', 'Rua Helena', '00000000000', 'Sobrado', 'Morada do Sol', 8820490, 'Mogi das Cruzes', 'SP', '', '', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e');

-- --------------------------------------------------------

--
-- Estrutura da tabela `perg`
--

CREATE TABLE `perg` (
  `idPerg` int(11) NOT NULL,
  `tituloPerg` varchar(100) NOT NULL,
  `idQuestionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perg`
--

INSERT INTO `perg` (`idPerg`, `tituloPerg`, `idQuestionario`) VALUES
(16, 'Eu gosto de...', 37),
(17, 'Se você quiser se dar bem comigo...', 37),
(18, 'Para conseguir obter bons resultados é preciso...', 37),
(19, 'Eu me divirto quando...', 37),
(20, 'Eu penso que...', 37),
(21, 'Minha preocupação é...', 37),
(22, 'Eu prefiro...', 37),
(23, 'Eu gosto de	...', 37),
(24, 'Eu gosto de chegar...', 37),
(25, 'Eu ótimo dia pra mim é quando...', 37),
(26, 'Eu vejo a morte como...', 37),
(27, 'Minha filosofia de vida é...', 37),
(28, 'Eu sempre gostei de...', 37),
(29, 'Eu gosto de mudanças se...', 37),
(30, 'Não existe nada errado em...', 37),
(31, 'Eu gosto de buscar conselhos de...', 37),
(32, 'Meu lema é...', 37),
(33, 'Tempo pra mim é...', 37),
(34, 'Se eu fosse bilionário...', 37),
(35, 'Eu acredito que...', 37),
(36, 'Eu acredito também que...', 37),
(37, 'Eu acredito ainda que...', 37),
(38, 'Eu penso que...', 37),
(39, 'Eu gosto de...', 37);

-- --------------------------------------------------------

--
-- Estrutura da tabela `quest`
--

CREATE TABLE `quest` (
  `idQuestionario` int(11) NOT NULL,
  `tituloQuest` varchar(100) NOT NULL,
  `tipoQuest` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quest`
--

INSERT INTO `quest` (`idQuestionario`, `tituloQuest`, `tipoQuest`) VALUES
(2, 'Allan Daniel', 'Oliveira dos Santos'),
(32, 'Biscate', 'Biscoiteira de alicate'),
(37, 'Teste Comportamental', 'Comportamental');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resp`
--

CREATE TABLE `resp` (
  `idResp` int(11) NOT NULL,
  `tituloResp` varchar(100) NOT NULL,
  `valor` int(11) NOT NULL,
  `idPerg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `resp`
--

INSERT INTO `resp` (`idResp`, `tituloResp`, `valor`, `idPerg`) VALUES
(6, 'Ser Piloto', 2, 16),
(7, 'Conversar com os passageiros', 3, 16),
(8, 'Planejar a viagem', 1, 16),
(9, 'Explrar novas rotas', 4, 16),
(10, 'Me dê liberdade', 4, 17),
(11, 'Me deixe saber a sua expectativa', 1, 17),
(12, 'Lidere, siga ou saia do caminho', 2, 17),
(13, 'Seja amigavel, compreensivel, ou saia do caminho', 3, 17),
(14, 'Ter incertezas', 4, 18),
(15, 'Controlar o essencial', 1, 18),
(16, 'Diversão e celebração', 2, 18),
(17, 'Planejar e obter recursos', 3, 18),
(18, 'Estou me exercitando', 2, 19),
(19, 'Tenho novidades', 4, 19),
(20, 'Estou com os outros', 3, 19),
(21, 'Determino as regras', 1, 19),
(22, 'Unidos venceremos, dividimos perderemos', 3, 20),
(23, 'O ataque é melhor que a defesa', 2, 20),
(24, 'É bom ser manso, mas andar com porrete', 4, 20),
(25, 'Um homem prevenido vale por dois', 3, 20),
(26, 'Gerar a ideia global', 4, 21),
(27, 'Fazer com que as pessoas gostem', 3, 21),
(28, 'Fazer com que funcione', 1, 21),
(29, 'Fazer com que aconteça', 2, 21),
(30, 'Perguntas e respostas', 4, 22),
(31, 'Ter todos os detalhes', 1, 22),
(32, 'Vantagens ao meu favor', 2, 22),
(33, 'Que todos tenham a chance de ser ouvidos', 3, 22),
(34, 'Fazer progresso', 2, 23),
(35, 'Construir memórias', 3, 23),
(36, 'Fazer sentido', 1, 23),
(37, 'Tornas as pessoas confortáveis', 4, 23),
(38, 'Na frente', 2, 24),
(39, 'Junto', 3, 24),
(40, 'Na hora', 1, 24),
(41, 'Em outro lugar', 4, 24),
(42, 'Consigo fazer muitas coisas', 2, 25),
(43, 'Me divirto com os meus amigos', 3, 25),
(44, 'Tudo segue conforme o planejado', 1, 25),
(45, 'Desfruto de coisas novas e estimulantes', 4, 25),
(46, 'Uma grande aventura misteriosa', 4, 26),
(47, 'Oportunidade de rever os falecidos', 3, 26),
(48, 'Um modo de receber recompensas', 1, 26),
(49, 'Algo que sempre chega muito cedo', 2, 26),
(50, 'Há ganhadores é perdedores, e eu acredito ser um ganhador', 2, 27),
(51, 'Para eu ganhar, ninguém precisa perder', 3, 27),
(52, 'Para ganhar é preciso seguir as regras', 1, 27),
(53, 'Para ganhar, é necessário inventar novas regras', 4, 27),
(54, 'Explorar', 4, 28),
(55, 'Evitar surpresas', 1, 28),
(56, 'Focalizar a meta', 2, 28),
(57, 'Realizar uma abordagem natural', 3, 28),
(58, 'Me der  uma vantagem competitiva', 2, 29),
(59, 'For divertido e puder ser compartilhado', 3, 29),
(60, 'Me der mais liberdade e variedade', 4, 29),
(61, 'Melhorar ou me dar mais controle', 1, 29),
(62, 'Se colocar na frente', 2, 30),
(63, 'Colocar os outros na frente', 3, 30),
(64, 'Mudar de ideia', 4, 30),
(65, 'Ser consistente', 1, 30),
(66, 'Pessoas bem sucedidas', 2, 31),
(67, 'Anciões e conselheiros', 3, 31),
(68, 'Autoridades no assunto', 1, 31),
(69, 'Lugares, os mais estranhos', 4, 31),
(70, 'Fazer o que precisa ser feito', 4, 32),
(71, 'Fazer bem feito', 1, 32),
(72, 'Fazer junto com o grupo', 3, 32),
(73, 'Simplesmente fazer', 2, 32),
(74, 'Algo que detesto desperdiçar', 2, 33),
(75, 'Um grande ciclo', 3, 33),
(76, 'Uma flecha que leva ao inevitável', 1, 33),
(77, 'Irrelevante', 4, 33),
(78, 'Faria doações para entidades', 3, 34),
(79, 'Criaria uma poupança avantajada', 1, 34),
(80, 'Faria o que desse na cabeça', 4, 34),
(81, 'Exibiria bastante com algumas pessoas', 2, 34),
(82, 'O destino é mais importante que a jornada', 4, 35),
(83, 'A jornada é mais importante que o destino', 1, 35),
(84, 'Um centavo economizado é um centavo ganho', 3, 35),
(85, 'Basta um navio e uma estrela para navegar', 2, 35),
(86, 'Aquele que hesita está perdido', 2, 36),
(87, 'De grão em grão a galinha enche o papo', 1, 36),
(88, 'O que vai volta', 3, 36),
(89, 'Um sorriso ou uma careta é o mesmo pra quem é cego', 4, 36),
(90, 'É melhor prudencia do que arrependimento', 1, 37),
(91, 'A autoridade deve ser desafiada', 4, 37),
(92, 'Ganhar é fundamental', 3, 37),
(93, 'O coletivo é mais importante do que o individual', 2, 37),
(94, 'Não é fácil ficar encurralado', 4, 38),
(95, 'É preverivel olhar, antes de pular', 1, 38),
(96, 'Duas cabeças pensam melhor do que uma', 3, 38),
(97, 'Se você não tem condições de competir, não compita', 2, 38),
(98, 'Complexidade, mesmo se confuso', 4, 39),
(99, 'Ordem e sistematização', 1, 39),
(100, 'Calor humano e animação', 3, 39),
(101, 'Coisas claras e simples', 2, 39);

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste02`
--

CREATE TABLE `teste02` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `fone` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mensagem` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `testeverde`
--

CREATE TABLE `testeverde` (
  `id` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nomeEmpresa` varchar(50) DEFAULT NULL,
  `contato` varchar(50) DEFAULT NULL,
  `cep` int(8) DEFAULT NULL,
  `logradouro` varchar(80) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `nome` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `testeverde`
--

INSERT INTO `testeverde` (`id`, `email`, `nomeEmpresa`, `contato`, `cep`, `logradouro`, `bairro`, `cidade`, `uf`, `nome`) VALUES
(1, 'henrique@gmail.com', 'Teste Empresa', 'Gato a jato', 8820490, 'Rua Dinorah da ConceiÃ§Ã£o Braga', 'CÃ©zar de Souza', 'Mogi das Cruzes', 'SP', 'Pedro'),
(2, 'allan@allan.com.br', 'CLubie', 'Mortadela', 8820490, 'Rua Dinorah da ConceiÃ§Ã£o Braga', 'CÃ©zar de Souza', 'Mogi das Cruzes', 'SP', 'Allan'),
(3, 'Bra@nu.com', 'Brom', 'Goog', 8830400, 'Rua AntÃ´nio Santos GonÃ§alves', 'Vila Nova Aparecida', 'Mogi das Cruzes', 'SP', 'Bruna'),
(4, 'teste@teste.com', 'teste', 'Teste Contato', 8840500, 'Rua Raimundo Correia', 'Vila SÃ£o Paulo', 'Mogi das Cruzes', 'SP', 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `confirmasenha` varchar(50) DEFAULT NULL,
  `dataCadastro` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`idUsuario`, `nome`, `sobrenome`, `email`, `senha`, `confirmasenha`, `dataCadastro`) VALUES
(1, 'Pedro', 'Santos', 'henrique@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', '2020-06-19'),
(10, 'Allan', 'Daniel', 'oliveirasantos.allan@gmail.com', '1553a61c7332aa125c196b8b26e18f2d', '4e21a35107f3ebeb38da1a3ee0a6d47f', '2020-06-19'),
(15, 'Bimbo', 'Bilardo', 'Bra@nu.com', '992a6d18b2a148cf20d9014c3524aa11', 'adcaec3805aa912c0d0b14a81bedb6ff', '2020-06-19'),
(16, 'Pedro', 'Santos', 'henrique@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '827ccb0eea8a706c4c34a16891f84e7b', '2020-06-19'),
(20, 'Goku SSJ', 'Super God ', 'goku@ssj.com', 'bef27466a245ce3ec692bd25409c2549', 'bef27466a245ce3ec692bd25409c2549', '2020-06-21'),
(21, 'Joca', 'Ramiro', 'joca@ramiro.com', '81dc9bdb52d04dc20036dbd8313ed055', '81dc9bdb52d04dc20036dbd8313ed055', '2020-06-21'),
(22, 'Luluzinha', 'Batedeira', 'lulu@zinha.com', '654e4dc5b90b7478671fe6448cab3f32', '654e4dc5b90b7478671fe6448cab3f32', '2020-06-22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`coach_id`);

--
-- Índices para tabela `perg`
--
ALTER TABLE `perg`
  ADD PRIMARY KEY (`idPerg`),
  ADD KEY `FK_Quest` (`idQuestionario`);

--
-- Índices para tabela `quest`
--
ALTER TABLE `quest`
  ADD UNIQUE KEY `idQuestionario` (`idQuestionario`);

--
-- Índices para tabela `resp`
--
ALTER TABLE `resp`
  ADD PRIMARY KEY (`idResp`),
  ADD KEY `FK_Perg` (`idPerg`);

--
-- Índices para tabela `teste02`
--
ALTER TABLE `teste02`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `testeverde`
--
ALTER TABLE `testeverde`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `coach`
--
ALTER TABLE `coach`
  MODIFY `coach_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `perg`
--
ALTER TABLE `perg`
  MODIFY `idPerg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `quest`
--
ALTER TABLE `quest`
  MODIFY `idQuestionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de tabela `resp`
--
ALTER TABLE `resp`
  MODIFY `idResp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `teste02`
--
ALTER TABLE `teste02`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `testeverde`
--
ALTER TABLE `testeverde`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `perg`
--
ALTER TABLE `perg`
  ADD CONSTRAINT `FK_Quest` FOREIGN KEY (`idQuestionario`) REFERENCES `quest` (`idQuestionario`);

--
-- Limitadores para a tabela `resp`
--
ALTER TABLE `resp`
  ADD CONSTRAINT `FK_Perg` FOREIGN KEY (`idPerg`) REFERENCES `perg` (`idPerg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
