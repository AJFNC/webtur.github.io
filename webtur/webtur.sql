-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jan-2020 às 22:32
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `webtur`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamento`
--

CREATE TABLE `apartamento` (
  `codigo` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `valorDiaria` decimal(8,2) NOT NULL,
  `codigoHotel` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `apartamento`
--

INSERT INTO `apartamento` (`codigo`, `tipo`, `valorDiaria`, `codigoHotel`, `foto`) VALUES
(2, 'LUXO', '1338.00', 7, ''),
(3, 'PRESIDENCIAL', '3160.00', 7, ''),
(4, 'SUITE LUXO IMPERIAL', '6800.00', 1, ''),
(5, 'LUXO', '379.00', 2, '/webtur/src/images/hotel/vilagale.jpg'),
(7, 'LUXO', '385.00', 6, '/webtur/src/images/hotel/hiltonApto.jpg'),
(8, 'STANDARD', '390.00', 5, ''),
(9, 'STANDARD LUXO', '1557.00', 6, ''),
(10, 'LUXO', '1338.00', 7, ''),
(11, 'STANDART', '329.00', 8, '/webtur/sec/images/hotel/cullinanApart1.png'),
(12, 'STANDART', '136.32', 21, '/webtur/src/images/hotel/confortApt.jpg'),
(19, 'LUXO', '520.00', 5, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `casashow`
--

CREATE TABLE `casashow` (
  `codigoPT` int(11) NOT NULL,
  `diaFunciona` varchar(30) NOT NULL,
  `horario` varchar(30) NOT NULL,
  `telefone` bigint(13) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `casashow`
--

INSERT INTO `casashow` (`codigoPT`, `diaFunciona`, `horario`, `telefone`, `foto`) VALUES
(13, 'QUINTA-DOMINGO', '20:00-05:00', 1136757643, ''),
(14, 'QUINTA-DOMINGO', '20:00-05:00', 2147483647, ''),
(15, 'QUINTA-DOMINGO', '20:00-05:00', 2147483647, '/webtur/src/images/pontotur/espaco-jacc.jpg'),
(17, 'TERÇA-DOMINGO', '17:00-05:00', 9232361234, '/webtur/src/images/pontotur/espaco-jacc.JPG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cidade`
--

CREATE TABLE `cidade` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `texto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cidade`
--

INSERT INTO `cidade` (`codigo`, `nome`, `estado`, `foto`, `texto`) VALUES
(1, 'RECIFE', 'PE', '/webtur/src/images/recife.jpg', 'A cidade de Recife, a capital do estado de Pernambuco, no nordeste do Brasil, distingue-se pelos seus vários rios, pontes, ilhéus e penínsulas. Recife Antigo, na própria ilha junto ao porto, é o centro histórico da cidade antiga que data do século XVI. A sul, a popular Praia de Boa Viagem é protegida por recifes e está ladeada de blocos de apartamentos elevados, hotéis modernos e restaurantes.'),
(3, 'RIO DE JANEIRO', 'RJ', '/webtur/src/images/rio.png', 'O Rio de Janeiro é uma grande cidade brasileira à beira-mar, famosa pelas praias de Copacabana e Ipanema, pela estátua de 38 metros de altura do Cristo Redentor, no topo do Corcovado, e pelo Pão de Açúcar, um pico de granito com teleféricos até seu cume. A cidade também é conhecida pelas grandes favelas. O empolgante Carnaval, com carros alegóricos, fantasias extravagantes e sambistas, é considerado o maior do mundo.'),
(4, 'SALVADOR', 'BA', '/webtur/src/images/salvador.png', 'Salvador, a capital do estado da Bahia no nordeste do Brasil, é conhecida pela arquitetura colonial portuguesa, pela cultura afrobrasileira e pelo litoral tropical. O bairro do Pelourinho é seu coração histórico, com vielas de paralelepípedo terminando em praças grandes, prédios coloridos e igrejas barrocas, como São Francisco, com trabalhos em madeira revestidos com ouro.'),
(6, 'CURITIBA', 'PR', '/webtur/src/images/curitiba.jpg', 'A cidade de Curitiba é um município brasileiro, capital do estado do Paraná, localizado a 934 metros de altitude no Primeiro Planalto Paranaense,[11] a mais de 110 quilômetros do Oceano Atlântico,[15] distante 1 386 km a sul de Brasília, capital federal. Com 1 933 105 habitantes,[3] é o município mais populoso do Paraná e da região Sul, além de ser o 8.º do país, segundo estimativa populacional calculada pelo IBGE para 2018. Fundado em 1693, a partir de um pequeno povoado bandeirante, Curitiba tornou-se uma importante parada comercial com a abertura da estrada tropeira entre Sorocaba e Viamão'),
(10, 'BRASÍLIA', 'BR', '/webtur/src/images/brasilia.png', 'Brasília é a capital federal do Brasil e a sede de governo do Distrito Federal.[9] A capital está localizada na região Centro-Oeste do país. A capital brasileira é a maior cidade do mundo construída no século XX. A cidade possui o maior produto interno bruto per capita em relação às capitais. Como capital nacional, Brasília abriga a sede dos três poderes da República (Executivo, Legislativo e Judiciário).'),
(11, 'MANAUS', 'AM', '/webtur/src/images/manaus.jpg', 'A cidade de Manaus, nos bancos do Rio Negro no noroeste do Brasil, é a capital do vasto estado do Amazonas. Trata-se de um ponto de partida importante próximo à Floresta Amazônica. A leste da cidade, o Rio Negro, escuro, converge para o Rio Solimões, barrento, resultando em um fenômeno visual incrível chamado de \"Encontro das Águas\". A combinação dos afluentes forma o Rio Amazonas.'),
(17, 'PALMAS', 'TO', '/webtur/src/images/palmas.png', 'A cidade de Palmas é um município brasileiro, sendo a capital e também a maior cidade do estado do Tocantins. A cidade foi fundada em 20 de maio de 1989, logo após a criação do Tocantins pela Constituição de 1988.'),
(19, 'TERESINA', 'PI', '/webtur/src/images/teresina.png', 'Teresina é a capital e o município mais populoso do estado brasileiro do Piauí. Localiza-se a 343 km do litoral, sendo, portanto, a única capital da Região Nordeste que não se localiza às margens do Oceano Atlântico.'),
(27, 'NATAL', 'RN', '/webtur/src/images/natal.jpg', 'A cidade de Natal é um município brasileiro, capital do estado do Rio Grande do Norte, na Região Nordeste do país. Fundada em 1599, às margens do Rio Potenji, Historicamente, a cidade teve grande importância durante a Segunda Guerra Mundial em 1942 durante a Operação Tocha, já que os aviões da base aliada americana se abasteciam com combustível no lugar onde durante muito tempo foi o Aeroporto Internacional Augusto Severo, sendo classificada como \"um dos quatro pontos mais estratégicos do mundo\".'),
(28, 'JOAO PESSOA', 'PB', '/webtur/src/images/joaopessoa.png', 'João Pessoa é uma cidade costeira próxima da foz do rio Paraíba, no leste do Brasil. A sua cidade velha é conhecida pela arquitetura barroca e art nouveau. A igreja de São Francisco, do século XVI, tem azulejos portugueses pintados no pátio e uma capela ornamentada com ouro. As praias de Tambaú e Cabo Branco estão repletas de bares e discotecas, além de lojas que vendem artesanato local de madeira e cerâmica.'),
(38, 'PETROLINA', 'PE', '', ''),
(41, 'NITEROI', 'RJ', '', ''),
(42, 'JUAZEIRO', 'BA', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `hotel`
--

CREATE TABLE `hotel` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `categoria` varchar(20) NOT NULL,
  `codigoCidade` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `telefone` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `hotel`
--

INSERT INTO `hotel` (`codigo`, `nome`, `endereco`, `categoria`, `codigoCidade`, `foto`, `telefone`) VALUES
(1, 'COPACABANA PALACE', 'AV. ATLÂNTICA', 'INTERNACIONAL', 3, '/webtur/src/images/hotel/copa.png', 0),
(3, 'HOTEL VILA GALÉ SALVADOR', 'AV. OCEÂNICA', 'INTERNACIONAL', 4, '', 0),
(5, 'HOTEL GOLDEN PARK BOA VIAGEM', 'AV. BOA VIAGEM', 'INTERNACIONAL', 1, '', 0),
(6, 'HILTON SÃO PAULO MORUMBI', 'MORUMBI', '5', 2, '', 1137498765),
(8, 'ATHOS BULCÃO', 'ASA NORTE', '4', 10, '/webtur/src/images/hotel/athosb.jpg', 0),
(20, 'CULLINAN HPLUS', 'ASA NORTE', '5', 10, '/webtur/src/images/hotel/cullman.jpg', 0),
(21, 'CONFORT', 'Avenida Mandií , 263, Manaus, CEP 69075-140, Brasil', '3', 11, '/webtur/src/images/hotel/confort.jpg', 0),
(26, 'IBIS CURITIBA SHOPPING', 'CENTRO', '3', 6, '/webtur/src/images/hotel/ibiscur.jpg', 4138831234),
(27, 'IBIS BUDGE CURITIBA', 'CENTRO', '3', 6, '/webtur/src/images/hotel/ibiscur.jpg', 4138835678);

-- --------------------------------------------------------

--
-- Estrutura da tabela `igreja`
--

CREATE TABLE `igreja` (
  `codigoPT` int(11) NOT NULL,
  `religiao` varchar(30) NOT NULL,
  `estiloConstrucao` varchar(30) NOT NULL,
  `dataConstrucao` date NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `igreja`
--

INSERT INTO `igreja` (`codigoPT`, `religiao`, `estiloConstrucao`, `dataConstrucao`, `foto`) VALUES
(8, 'CATOLICA', 'BARROCA', '1772-02-06', ''),
(9, 'CATOLICA', 'BARROCA', '1662-03-17', ''),
(10, 'CATOLICA', 'GOTICA', '1904-12-08', ''),
(11, 'CATOLICA', 'ECLETICO', '1728-03-17', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `museu`
--

CREATE TABLE `museu` (
  `codigoPT` int(11) NOT NULL,
  `dataFundacao` date NOT NULL,
  `numeroSalas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `museu`
--

INSERT INTO `museu` (`codigoPT`, `dataFundacao`, `numeroSalas`) VALUES
(3, '1953-02-27', 20),
(5, '1974-08-05', 15),
(6, '1943-03-16', 10),
(23, '1980-08-27', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `museufundador`
--

CREATE TABLE `museufundador` (
  `codigoPT` int(11) NOT NULL,
  `fundador` varchar(200) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `museufundador`
--

INSERT INTO `museufundador` (`codigoPT`, `fundador`, `foto`) VALUES
(3, 'ASSIS CHATEAUBRIAN', ''),
(5, 'RICARDO BRENNAND', ''),
(6, 'GETULIO VARGAS', ''),
(23, 'Joaquim Francisco', '/webtur/src/images/museufund/jf.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pontoturistico`
--

CREATE TABLE `pontoturistico` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `codigoCidade` int(11) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pontoturistico`
--

INSERT INTO `pontoturistico` (`codigo`, `nome`, `descricao`, `endereco`, `codigoCidade`, `tipo`, `foto`) VALUES
(1, 'MARCO ZERO', 'LOCAL DE FUNDAÇÃO PELOS HOLANDESES', 'ILHA DE SÃO JOSÉ', 1, 'PRAÇA', '/webtur/src/images/pontotur/marcoz.png'),
(2, 'PAO DE AÇUCAR', 'MONTANHA QUE TEM DOIS BONDINHOS', 'BOTAFOGO', 3, 'LOCAL', ''),
(3, 'MASP', 'MUSEU DE ARTE DE SÃO PAULO', 'AV. PAULISTA', 2, 'MUSEU', '/webtur/src/images/pontotur/masp.png'),
(4, 'FARROL DA BARRA', 'FORTE E FAROL NA ORLA', 'ONDINA', 4, 'LOCAL', ''),
(5, 'INSTITUTO RICARDO BRENNAND', 'CASTELO MUSEU DE ARMAS BRANCAS', 'VARZEA', 1, 'MUSEU', ''),
(6, 'MUSEU IMPERIAL', 'MUSEU COM OBJETOS DA FAMILIA IMPERIAL', 'PETROPOLIS', 3, 'MUSEU', ''),
(8, 'IGREJA DO BOM FIM', 'DE FORTE TRADICAO E SINCRETISMO', 'BOM FIM', 4, 'IGREJA', ''),
(9, 'BASILICA DA PENHA', 'MARCO DO CENTRO PAULISTA', 'PENHA DE FRNCA', 2, 'IGREJA', ''),
(10, 'IGREJA DA CONCEICAO', 'LOCAL DE PEREGRINACAO DA PADROEIRA DA CIDADE', 'MORRO DA CONCEICAO', 1, 'IGREJA', ''),
(11, 'IGREJA DA PENHA', 'SITUADA NO MORRO A NOITE ILUMINADA PARECE FLUTUAR', 'MORRO DA PENHA', 3, 'IGREJA', ''),
(13, 'CITIBANK HALL', '', 'SANTO AMARO', 2, '', '/webtur/src/images/pontotur/espaco-jacc.JPG'),
(14, 'CLASSIC HALL', 'A MAIOR E MAIS POPULAR', 'TACARUNA', 1, 'CASADESHOW', ''),
(15, 'CANECAO', 'MAIS TRADICIONAL DO RIO', 'BOTAFOGO', 3, 'CASADESHOW', ''),
(16, 'TEATRO AMAZONAS', 'O Teatro Amazonas é um dos mais importantes teatros do Brasil e o principal cartão postal da cidade de Manaus. Localizado no Largo de São Sebastião, no Centro Histórico, foi inaugurado em 1896 para atender ao desejo da elite amazonense da época, que queria que a cidade estivesse à altura dos grandes centros culturais.', 'Largo de São Sebastião - Centro, Manaus - AM, 69067-080', 11, 'TEATRO', '/webtur/src/images/pontotur/teatroAM.JPG'),
(17, 'ESPAÇO JACC', 'Local Ótimo. Mescla Cultura Brasileira e Amazônica, Gastrônomia e muita música ao vivo.', 'Praca Francisco Pereira da Silva | Distrito Industrial, Manaus, Amazonas (Estado) 69073-270, Brasil', 11, 'CASA DE SHOWS', '/webtur/src/images/pontotur/espaco-jacc.JPG'),
(18, 'VAPORZINHO', '', '', 0, '', ''),
(19, 'VAPORZINHO', '', 'ORLA JUAZEIRO', 0, '', ''),
(20, 'VAPORZINHO', 'BARCO', 'ORLA JUAZEIRO', 0, '', ''),
(21, 'VAPORZINHO', 'BARCO', 'ORLA JUAZEIRO', 0, 'LOCAL', ''),
(22, 'ILHA DO RODEADOURO', 'Ilha no meio do Rio São Francisco entre Pernambuco e Bahia, onde o turísta pode apreciar a culinária e a paisagens num lindo pòr do Sol.', 'RIO SAO FRANCISCO, TAPERA', 38, 'LOCAL', '/webtur/src/images/pontotur/ilharodeadouro.png'),
(23, 'MUSEU DA ABOLICAO', 'Local onde Dom Pedro II e Dona Leopoldina dormiram durante viagem a Recife', 'Av. real da torre', 1, 'museu', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `restaurante`
--

CREATE TABLE `restaurante` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `endereco` varchar(300) NOT NULL,
  `categoria` varchar(15) NOT NULL,
  `codigoCidade` int(11) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `telefone` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `restaurante`
--

INSERT INTO `restaurante` (`codigo`, `nome`, `endereco`, `categoria`, `codigoCidade`, `foto`, `telefone`) VALUES
(1, 'SPETTUS', 'AV. AGAMENON MAGALHEAS', 'CHURRASCARIA', 1, '/webtur/src/images/restaurante/spettus.png', 0),
(3, 'CASA DA TEREZA', 'RIO VERMELHO', 'TIPICA', 3, '', 7039274567),
(4, 'PORCAO', 'IPANEMA', 'CHURRASCARIA', 4, '/webtur/src/images/restaurante/porcao.png', 0),
(5, 'COCO BAMBU', 'SHOPPING RECIFE', 'FRUTOS DO MAR', 1, '/webtur/src/images/restaurante/cocob.png', 0),
(6, 'TAMBAQUI DE BANDA', 'Rua José Clemente, 596, Manaus, Amazonas (Estado) 69010-070, Brasil', 'AMAZÔNICA', 11, '/webtur/src/images/restaurante/tambaqui.jpg', 0),
(7, 'POCO TAPAS', 'Av. Vicente Machado, 2786 - Batel, Curitiba - PR, 80440-020', 'RESTAURANTE', 6, '/webtur/src/images/restaurante/poco.png', 41996828758),
(8, 'K&B', 'AV. 7 DE SETEMBRO', 'REGIONAL', 0, '', 8738637654);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `categoria` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`codigo`, `nome`, `email`, `senha`, `categoria`) VALUES
(1, 'Alexandre Cavalcanti', 'alex@gmail.com', '123456', 1),
(2, 'Ana Maria Braga', 'ana@gmail.com', '123456', 0),
(3, 'Roberto Carlos', 'rc@gmail.com', '123456', 0),
(4, 'Neymar Junior', 'neymar@gmail.com', '123456', 0),
(6, 'CLEO PIRES', 'cleo@gmail.com', '123456', 0),
(7, 'IVO PITANGUY', 'ivo@gmail.com', '123456', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `casashow`
--
ALTER TABLE `casashow`
  ADD PRIMARY KEY (`codigoPT`);

--
-- Índices para tabela `cidade`
--
ALTER TABLE `cidade`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `igreja`
--
ALTER TABLE `igreja`
  ADD PRIMARY KEY (`codigoPT`);

--
-- Índices para tabela `museu`
--
ALTER TABLE `museu`
  ADD PRIMARY KEY (`codigoPT`);

--
-- Índices para tabela `museufundador`
--
ALTER TABLE `museufundador`
  ADD PRIMARY KEY (`codigoPT`);

--
-- Índices para tabela `pontoturistico`
--
ALTER TABLE `pontoturistico`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `restaurante`
--
ALTER TABLE `restaurante`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `apartamento`
--
ALTER TABLE `apartamento`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `cidade`
--
ALTER TABLE `cidade`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `hotel`
--
ALTER TABLE `hotel`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `pontoturistico`
--
ALTER TABLE `pontoturistico`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `restaurante`
--
ALTER TABLE `restaurante`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
