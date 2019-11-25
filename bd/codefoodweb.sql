-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Nov-2019 às 21:58
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
-- Banco de dados: `codefoodweb`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(11) NOT NULL,
  `nome_cat` varchar(80) NOT NULL,
  `img_cat` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nome_cat`, `img_cat`) VALUES
(1, 'FastFood', 'img/01.jpg'),
(2, 'Bebidas', 'img/02.jpg'),
(3, 'Saudaveis', 'img/03.jpg'),
(4, 'Pratos Prontos', 'img/04.jpg'),
(5, 'Doces e Bolos', 'img/05.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cli` int(11) NOT NULL,
  `nome_cli` varchar(80) NOT NULL,
  `login_cli` varchar(50) NOT NULL,
  `email_cli` varchar(80) NOT NULL,
  `senha_cli` varchar(32) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` varchar(4) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `cpf` varchar(12) NOT NULL,
  `ddd` varchar(2) NOT NULL,
  `fone` varchar(8) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `data_nasc` date NOT NULL,
  `data_cad` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cli`, `nome_cli`, `login_cli`, `email_cli`, `senha_cli`, `endereco`, `numero`, `bairro`, `cidade`, `uf`, `cep`, `cpf`, `ddd`, `fone`, `celular`, `data_nasc`, `data_cad`) VALUES
(1, 'Mateus Cláudio Sales', 'sales-mateus', 'testzerodez10@gmail.com', '9ed083b1436e5f40ef984b28255eef18', 'Rua Nascimento Soares de Araújo', '859', 'Santa Tereza', 'Porto Alegre', 'RS', '90840-700', '725.737.430-', '55', '51379390', '519884025', '1994-09-25', '2019-11-24 00:54:05');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id_func` int(11) NOT NULL,
  `nome_func` varchar(45) NOT NULL,
  `login_func` varchar(45) NOT NULL,
  `email_func` varchar(50) NOT NULL,
  `senha_func` varchar(32) NOT NULL,
  `nome_cargo` varchar(45) NOT NULL,
  `desc_cargo` varchar(100) NOT NULL,
  `niveis_acesso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id_func`, `nome_func`, `login_func`, `email_func`, `senha_func`, `nome_cargo`, `desc_cargo`, `niveis_acesso`) VALUES
(1, 'Joao', 'joao-cozinheiro', 'cozinheiro@cozinhafeita.com', '12345', 'cozinheiro', 'Acesso aos pedidos feitos.', 2),
(2, 'Pedro', 'gerente', 'gerente@fin.com', '9876', 'gerente', 'Acesso aos dados de clientes e pagamento efetuados.', 1),
(3, 'Marielza', 'cozinheiro', 'cozinheiro@cozinhafeita.com', '12345', 'cozinheiro', 'Acesso aos pedidos feitos.', 2),
(4, 'Alex', 'gerente', 'gerente@fin.com', '9876', 'gerente', 'Acesso aos dados de clientes e pagamento efetuados.', 1),
(5, 'Rodolfo', 'cozinheiro', 'cozinheiro@cozinhafeita.com', '12345', 'cozinheiro', 'Acesso aos pedidos feitos.', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagamentos`
--

CREATE TABLE `pagamentos` (
  `id_pag` int(11) NOT NULL,
  `total_pag` double(10,2) NOT NULL,
  `data_pag` date NOT NULL,
  `id_ped` int(11) DEFAULT NULL,
  `id_item` int(11) DEFAULT NULL,
  `id_cli` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_ped` int(11) NOT NULL,
  `nome_ped` varchar(50) NOT NULL,
  `desc_ped` varchar(100) DEFAULT NULL,
  `img_ped` varchar(80) NOT NULL,
  `preco_ped` double(10,2) NOT NULL,
  `id_cat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_ped`, `nome_ped`, `desc_ped`, `img_ped`, `preco_ped`, `id_cat`) VALUES
(1, 'Hamburger Sensação', 'É o hamburger que causa sensação, sensacional.', 'img/01/hamburger-sensacao.jpg', 27.80, 1),
(2, 'Hamburger Supremo', 'Conheça nosso hamburger mais pedido.', 'img/01/hamburger-supremo.jpg', 28.00, 1),
(3, 'Hamburger Saboroso ', 'Conheça o hamburger mais saboroso do Brasil.', 'img/01/hamburguer-saboroso.jpg', 25.00, 1),
(4, 'Hamburgersão Fritas', 'Baita hamburgersão acompanhado com porção de fritas.', 'img/01/hamburgersao+fritas.jpg', 28.50, 1),
(5, 'Hamburger Lanche', 'Para seu lanche rápido, um hamburger rápido.', 'img/01/hamburger-lanche.jpg', 25.00, 1),
(6, 'Hamburger de Siri', 'Direto da Fenda do Biquini, um hamburger composto por carne de siri e frutos do mar.', 'img/01/hamburger-de-siri.jpg', 26.75, 1),
(7, '2 Temaki de Salmão', 'FastFood japonês.', 'img/01/2-temaki-salmao.jpg', 18.00, 1),
(8, 'Porção de Fritas', NULL, 'img/01/batatas-fritas.jpg', 9.99, 1),
(9, 'Dogão Tudo', 'Cachorro Quente acompanhado com tudo.', 'img/01/dogao.jpg', 17.50, 1),
(10, 'Pizza Portuguesa', NULL, 'img/01/pizza-portuguesa.jpg', 32.00, 1),
(11, 'Pastel de Carne', NULL, 'img/01/pastel-de-carne.jpg', 8.00, 1),
(12, 'Xis Bacon', 'Xis acompanhado com Bacon + Queijo Chedar + Cebola + Tomate + Alface + Maionese.', 'img/01/x-bacon.jpg', 15.00, 1),
(13, 'Coquetel', 'Escolha nossos coquetéis exclusivos.', 'img/02/coquetel.jpg', 25.00, 2),
(14, 'Suco Natural', 'Experimente nossos sucos naturais.', 'img/02/suco-natural.jpg', 6.00, 2),
(15, 'Chá Gelado', 'Experimente nosso chá gelado.', 'img/02/cha-gelado.jpg', 5.50, 2),
(16, 'Chopp Espumado Natural', NULL, 'img/02/chopp.jpg', 29.90, 2),
(17, 'Energético Wild Dragon', NULL, 'img/02/energetico-wild-dragon.jpg', 12.00, 2),
(18, 'Polar Latão', NULL, 'img/02/cerveja-polar.jpg', 8.50, 2),
(19, 'Stella Artois', NULL, 'img/02/stelaartois.jpg', 18.00, 2),
(20, 'Budweiser', NULL, 'img/02/budweiser.jpg', 17.00, 2),
(21, 'Heineken', NULL, 'img/02/heineken.jpg', 18.80, 2),
(22, 'Água com Gás', NULL, 'img/02/agua-com-gas-500ml.jpg', 3.25, 2),
(23, 'Água sem Gás', NULL, 'img/02/agua-sem-gas-500ml.jpg', 3.00, 2),
(24, 'Corona', NULL, 'img/02/corona.jpg', 16.99, 2),
(25, 'Eisenbahn Long', NULL, 'img/02/eisenbahn.jpg', 17.50, 2),
(26, 'Skol Bat', NULL, 'img/02/skolbeat.jpg', 14.00, 2),
(27, 'Fanta Laranja', NULL, 'img/02/fantalaranja.jpg', 4.00, 2),
(28, 'Fanta Uva', NULL, 'img/02/fantauva.jpg', 4.00, 2),
(29, 'Guarana', NULL, 'img/02/guarana.jpg', 5.00, 2),
(30, 'Sprite', NULL, 'img/02/sprite.jpg', 5.00, 2),
(31, 'Coca-cola', NULL, 'img/02/coca.jpg', 5.00, 2),
(32, 'Pepsi', NULL, 'img/02/pepsi.jpg', 5.00, 2),
(33, 'Vinho Tinto Francês', NULL, 'img/02/vinho-tinto-frances.jpg', 156.90, 2),
(34, 'Vinho Branco Italiano', NULL, 'img/02/vinho-branco-italiano.jpg', 168.90, 2),
(35, 'Whisky Jack Daniels', NULL, 'img/02/whisky-jack-daniels.jpg', 89.90, 2),
(36, 'Salada de Abobrinha com Cenouras', NULL, 'img/03/abobrinha+cenoura.jpg', 12.00, 3),
(37, 'Salada Coleção de Legumes', NULL, 'img/03/colecao-de-legumes.jpg', 15.00, 3),
(38, 'Lasanha de Beringela', NULL, 'img/03/lasanha-de-berinjela.jpg', 21.90, 3),
(39, 'Salada Molho de Mostarda e Mel', NULL, 'img/03/salada+molhomostarda+mel.jpg', 24.00, 3),
(40, 'Strogonoff de Champignon', 'Strogonoff vegano', 'img/03/strogonof-vegano.jpg', 26.00, 3),
(41, 'Ala Minuta', 'Arroz + Feijão + Ovo + Bife Coxão Mole + Batatas Fritas + Salada (alface, tomate, cenoura e beterrab', 'img/04/alaminuta.jpg', 25.00, 4),
(42, 'Bife Acebolado', NULL, 'img/04/bife-acebolado.jpg', 24.00, 4),
(43, 'Comida Caseira', 'Arroz + Feijoada + Costeleta + Aipim frito', 'img/04/comida-caseira.jpg', 24.50, 4),
(44, 'Filé de Peixe Empanado', NULL, 'img/04/file-de-peixe-empanado.jpg', 26.00, 4),
(45, 'Picadinho com Arroz', NULL, 'img/04/picadinhocomarroz.jpg', 23.00, 4),
(46, 'Sobrecoxa com Arroz e Brócolis', NULL, 'img/04/sobrecoxa+arroz+brocolis.jpg', 23.90, 4),
(47, 'Spaguetti', NULL, 'img/04/spaguetti.jpg', 23.00, 4),
(48, 'tiramisu', NULL, 'img/05/tiramisu.jpg', 15.00, 5),
(49, 'torta-de-merengue', NULL, 'img/05/torta-de-merengue.jpg', 64.00, 5),
(50, 'rocambole-chocolate', NULL, 'img/05/rocambole-chocolate.jpg', 20.00, 5),
(51, 'croissant-chocolate', NULL, 'img/05/croissant-chocolate.jpg', 6.00, 5),
(52, 'Brigadeiros', 'Ecomenda de 150 brigadeiros.', 'img/05/brigadeiro.jpg', 20.00, 5),
(53, 'sonho-de-padaria', NULL, 'img/05/sonho-de-padaria.jpg', 8.00, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ped_item`
--

CREATE TABLE `ped_item` (
  `id_item` int(11) NOT NULL,
  `valor_item` double(10,2) NOT NULL,
  `qtd_item` int(11) NOT NULL,
  `id_ped` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cli`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id_func`);

--
-- Índices para tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD PRIMARY KEY (`id_pag`),
  ADD KEY `id_ped` (`id_ped`),
  ADD KEY `id_item` (`id_item`),
  ADD KEY `id_cli` (`id_cli`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_ped`),
  ADD KEY `fk_cat` (`id_cat`);

--
-- Índices para tabela `ped_item`
--
ALTER TABLE `ped_item`
  ADD PRIMARY KEY (`id_item`),
  ADD KEY `fk_ped` (`id_ped`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id_func` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  MODIFY `id_pag` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_ped` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de tabela `ped_item`
--
ALTER TABLE `ped_item`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `id_cli` FOREIGN KEY (`id_cli`) REFERENCES `clientes` (`id_cli`),
  ADD CONSTRAINT `id_item` FOREIGN KEY (`id_item`) REFERENCES `ped_item` (`id_item`),
  ADD CONSTRAINT `id_ped` FOREIGN KEY (`id_ped`) REFERENCES `pedidos` (`id_ped`);

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_cat` FOREIGN KEY (`id_cat`) REFERENCES `categorias` (`id_cat`);

--
-- Limitadores para a tabela `ped_item`
--
ALTER TABLE `ped_item`
  ADD CONSTRAINT `fk_ped` FOREIGN KEY (`id_ped`) REFERENCES `pedidos` (`id_ped`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
