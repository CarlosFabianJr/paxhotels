-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           8.0.30 - MySQL Community Server - GPL
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- Autor:                        Carlos Fabian Jr
-- Model:                        Físico
-- Version:                      1.0
-- Project:                      PAX Hotels
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para paxhotels
CREATE DATABASE IF NOT EXISTS `paxhotels` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `paxhotels`;

-- Copiando estrutura para tabela searchhotels.hotel
CREATE TABLE IF NOT EXISTS `hotel` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cnpj` varchar(15) NOT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `descricao` text NOT NULL,
  `quantidade_quarto` int NOT NULL,
  `classificacao` int DEFAULT NULL,
  `avaliacao` varchar(50) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `endereco_cep` varchar(8) NOT NULL DEFAULT '',
  `endereco_numero` varchar(7) DEFAULT NULL,
  `endereco_logradouro` varchar(150) DEFAULT NULL,
  `endereco_bairro` varchar(150) DEFAULT NULL,
  `endereco_cidade` varchar(150) DEFAULT NULL,
  `endereco_estado` varchar(150) DEFAULT NULL,
  `endereco_pais` varchar(150) DEFAULT NULL,
  `comodidades` text,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela searchhotels.hotel: ~17 rows (aproximadamente)
INSERT INTO `hotel` (`id`, `nome`, `cnpj`, `celular`, `email`, `descricao`, `quantidade_quarto`, `classificacao`, `avaliacao`, `url`, `endereco_cep`, `endereco_numero`, `endereco_logradouro`, `endereco_bairro`, `endereco_cidade`, `endereco_estado`, `endereco_pais`, `comodidades`, `data_cadastro`) VALUES
	(1, 'Hotel Colline de France', '20844724000129', '(54) 3286-1924', 'reservas@collinedefrance.com.br', 'Quartos de inspiração francesa em um hotel sofisticado com um bistrô elegante e um spa de luxo', 150, 5, NULL, NULL, '95670000', '400', 'Rua Vigilante', 'Avenida Central', 'Gramado', 'Rio Grande do Sul', 'Brasil', '', '2023-05-24 13:13:16'),
	(2, 'Hotel Valle D`Incanto', '11740146000270', '(54) 3286-1777', 'reservas@hotelvalledincanto.com', 'Quartos elegantes com móveis refinados e piso de madeira, acesso Wi-Fi incluso, TV com tela plana e frigobar, além de banheiro integrado ao quarto com piso aquecido', 250, 5, NULL, NULL, '95670000', '87', 'R. Júlio Hanke', 'Avenida Central', 'Gramado', 'Rio Grande do Sul', 'Brasil', '', '2023-05-24 13:13:16'),
	(3, 'Salinas Maragogi All Inclusive Resort', '9276932000136', '(82) 3142-0702', 'resort@salinas.com', 'Hotel entre o rio e o mar, este resort na praia com tudo incluído fica a 0,2 km da AL-101 e a 2,6 km do município de Maragogi', 350, 4, NULL, NULL, '57955000', '101', 'Rod. Al', 'Norte', 'Maragogi', 'Alagoas', 'Brasil', '', '2023-05-24 13:13:16'),
	(4, 'Japaratinga Lounge Resort', '17022762000191', '(82) 3142-0702', 'resort@japaratinga.com', 'Quartos descontraídos têm ambiente tranquilo e sacada mobiliada, TV com tela plana, frigobar e sala de estar', 450, 4, NULL, NULL, '57950000', '84', 'Rod. Al', 'Norte', 'Maragogi', 'Alagoas', 'Brasil', '', '2023-05-24 13:13:16'),
	(5, 'Hotel Unique', '3109168000128', '(11) 3055-4701', 'uniqueservice@hotelunique.com', 'Quartos sofisticados e modernos, com mobília personalizada, oferecem vista para a cidade, Wi-Fi gratuito e TVs com tela plana, bem como banheiras de hidromassagem e artigos de banho de luxo', 550, 5, NULL, NULL, '1402002', '4700', 'Av. Brigadeiro Luis Antonio', 'Jardim Paulista', 'São Paulo', 'São Paulo', 'Brasil', '', '2023-05-24 13:13:16'),
	(6, 'Palácio Tangará - an Oetker Collection Hotel', '13735823000107', '(11) 4904-4040', 'reservas.tangara@oetkercollection.com', 'Situado no coração do Parque Burle Marx, uma reserva natural, este grandioso hotel de luxo com arquitetura neoclássica está a 5 km dos concertos no Citibank Hall e a 11 km do Aeroporto de Congonhas', 650, 5, NULL, NULL, '5706290', '1501', 'Rua Deputado Laércio Corte', 'Vila Andrade', 'São Paulo', 'São Paulo', 'Brasil', '', '2023-05-24 13:13:16'),
	(7, 'Juma Ópera', '8708591000168', '(92) 4904-4040', 'reservas.opera@jumahoteis.com.br', 'Hotel de luxo fica entre mansões históricas em frente ao imponente Teatro Amazonas, a 1 km do Porto de Manaus, a 2 km do Museu Palácio da Liberdade', 750, 5, '13544', NULL, '69010060', '481', 'Rua 10 de Julho', 'Centro', 'Manaus', 'Amazonas', 'Brasil', 'Internet,Café da Manhã', '2023-05-24 13:13:16'),
	(8, 'Iberostar Heritage Grand Amazon - All inclusive', '3911760000149', '(92) 2126-9927', 'reservas@amazon.com.br', 'Navege pelo Amazonas, em um hotel flutuante repleto de luxo, aproveitando a aventura e a natureza no pulmão do planeta', 850, 5, '1125', NULL, '69005050', '25', 'Rua Marques de Santa Cruz', 'Centro', 'Manaus', 'Amazonas', 'Brasil', 'Vista para o Rio,Café da Manhã', '2023-05-24 13:13:16'),
	(9, 'Hotel Atlântico Tower', '29300887000115', '(21) 2042-2730', 'reservas@atlanticotower.com.br', 'Quartos simples dispõem de TV com tela plana, Wi-Fi gratuito e frigobar, além de cofre. Alguns quartos de categoria mais alta contam com varanda. Serviço de quarto disponível', 950, 3, NULL, NULL, '20060050', '19', 'R. Pedro I', 'Centro', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', '', '2023-05-24 13:13:16'),
	(10, 'Copacabana Palace, A Belmond Hotel', '33374984000120', '(21) 2548-7070', 'reservations.brazil@belmond.com', 'De frente para a Praia de Copacabana, este hotel refinado em art déco, de 1923, fica a 10 km do Aeroporto Santos Dumont e a 13 km do icônico Cristo Redentor', 1050, 5, NULL, NULL, '22021001', '1702', 'Av. Atlântica', 'Copacabana', 'Rio de Janeiro', 'Rio de Janeiro', 'Brasil', '', '2023-05-24 13:13:16'),
	(11, 'The Murray, Hong Kong, a Niccolo Hotel', '12345678901234', '3141-8888', 'contactt@murray.com', 'Academia, Internet, Spa, restaurante, Estacionamento e lavanderia', 1150, 5, NULL, NULL, '22021001', '22', 'Cotton Tree Dr', 'Central', 'Central', 'Central', 'Hong Kong', '', '2023-05-24 13:13:16'),
	(12, 'Mini Hotel Causeway Bay Hong Kong', '98745632102587', '3979-1111', 'contactt@causeway.com', 'Internet', 100, 3, NULL, NULL, '35715945', '8', 'Sun Wui Rd', 'Causeway', 'Causeway', 'Causeway', 'Hong Kong', '', '2023-05-24 13:13:16'),
	(13, 'Hotel Regina', '75315987456321', '915 21 47 25', 'contactt@regina.com', 'Café da manhã incluso, Internet, Restaurante e Lavanderia', 75, 3, NULL, NULL, '35715987', '19', 'C. de Alcalá', '28014', '28014', 'Madrid', 'Espanha', '', '2023-05-24 13:13:16'),
	(14, 'Catalonia Plaza Mayor', '15987456321458', '913 69 44 09', 'contactt@mayorplaza.com', 'Academia, Lavanderia, SPA, Restaurante e Internet', 150, 4, NULL, NULL, '15987456', '36', 'C. de Atocha', '28012', '28012', 'Madrid', 'Espanha', '', '2023-05-24 13:13:16'),
	(15, 'L’hotel du Collectionneur Arc de Triomphe', '45698712365478', '58 36 67 00', 'contactt@triomphe.com', 'Babá ou creche, Internet, Restaurante, Estacionamento e Lavanderia', 450, 5, NULL, NULL, '12398745', '51-57', 'Rue Courcelles', '75008', '75008', 'Paris', 'França', '', '2023-05-24 13:13:16'),
	(16, 'Arty Paris porte de Versailles', '78932145698745', '40 34 40 34', 'contactt@versailles.com', 'Hospedagem', 25, 1, NULL, NULL, '45685219', '62', 'Rue Des Morillons', '75015', '75015', 'Paris', 'França', '', '2023-05-24 13:13:16'),
	(17, 'Holiday Inn Express And Suites Fisherman’s wharf', '45685219371597', '415 409 4600', 'express@holiday.com', 'Academia, Internet, Lavanderia e Estacionamento e Café da manhã', 50, 3, NULL, NULL, '12357456', '550', 'North Point St', 'San Francisco', 'San Francisco', 'Califórnia', 'EUA', '', '2023-05-24 13:13:16'),
	(18, 'Hotel Express Vieiralves', '23033327000599', '(92) 3303-9933', 'express@vieiralves.com', 'Hotel moderno e casual fica no centro financeiro, a 4 km do famoso Teatro Amazonas e a 13 km da Praia de Ponta Negra, banhada pelas águas do Rio Negro. Ele está situado a 12 km do Aeroporto Internacional de Manaus – Eduardo Gomes.', 1520, 2, '3176', '../../components/imgs/hoteis/Hotel Express Vieiralves.jpg', '69053520', '95', 'Rua Rio Eiru', 'Nossa Senhora das Graças', 'Manaus', 'AM', 'Brasil', 'Café da Manhã, Restaurante Italiano, Wi-fi e Estacionamento', '2023-05-30 17:21:21'),
	(19, 'Juma Ópera Hotel', '08708591000168', '(92) 3234-2745', 'contagem.contabil@hotmail.com', 'Hotel de luxo localizado entre mansões históricas com restaurante chique, bar e piscina na cobertura.', 1245, 4, '395', '../../components/imgs/hoteis/Juma Ópera Hotel.jpg', '69010060', '481', 'Rua 10 de Julho', 'Centro', 'Manaus', 'AM', 'Brasil', 'Restaurante, Bar, Piscina e Café da Manhã', '2023-05-30 18:58:47');

-- Copiando estrutura para tabela searchhotels.newsletter
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela searchhotels.newsletter: ~0 rows (aproximadamente)

-- Copiando estrutura para tabela searchhotels.quarto
CREATE TABLE IF NOT EXISTS `quarto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idhotel` int NOT NULL,
  `numero` varchar(7) NOT NULL,
  `descricao` text NOT NULL,
  `url` varchar(150) DEFAULT NULL,
  `valor_diaria` float NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_quarto_hotel1_idx` (`idhotel`),
  CONSTRAINT `fk_quarto_hotel1` FOREIGN KEY (`idhotel`) REFERENCES `hotel` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela searchhotels.quarto: ~4 rows (aproximadamente)
INSERT INTO `quarto` (`id`, `idhotel`, `numero`, `descricao`, `url`, `valor_diaria`, `data_cadastro`) VALUES
	(1, 7, '001', 'Casal Suíte', NULL, 512, '2023-05-25 13:24:49'),
	(2, 8, '002', 'Solteiro', NULL, 476, '2023-05-25 13:27:45'),
	(3, 7, '003', 'Executivo', NULL, 498, '2023-05-25 13:28:21'),
	(4, 8, '004', 'Napoleão', NULL, 700, '2023-05-25 13:30:10');



-- Copiando estrutura para tabela searchhotels.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `perfil` enum('USER','ADMIN') NOT NULL,
  `senha` varchar(45) NOT NULL,
  `endereco_cep` varchar(8) NOT NULL,
  `endereco_numero` varchar(7) DEFAULT NULL,
  `endereco_bairro` varchar(150) DEFAULT NULL,
  `endereco_logradouro` varchar(150) DEFAULT NULL,
  `endereco_cidade` varchar(150) DEFAULT NULL,
  `endereco_estado` varchar(150) DEFAULT NULL,
  `endereco_pais` varchar(150) DEFAULT NULL,
  `dados_pagamento_forma` enum('BOLETO','CARTAO','PIX') DEFAULT NULL,
  `dados_pagamento_tipo_cartao` enum('CREDITO','DEBITO') DEFAULT NULL,
  `dados_pagamento_numero_cartao` varchar(45) DEFAULT NULL,
  `dados_pagamento_codigo_cartao` int DEFAULT NULL,
  `dados_pagamento_validade_codigo` varchar(5) DEFAULT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela searchhotels.usuario: ~8 rows (aproximadamente)
INSERT INTO `usuario` (`id`, `nome`, `cpf`, `celular`, `email`, `perfil`, `senha`, `endereco_cep`, `endereco_numero`, `endereco_bairro`, `endereco_logradouro`, `endereco_cidade`, `endereco_estado`, `endereco_pais`, `dados_pagamento_forma`, `dados_pagamento_tipo_cartao`, `dados_pagamento_numero_cartao`, `dados_pagamento_codigo_cartao`, `dados_pagamento_validade_codigo`, `data_cadastro`) VALUES
	(1, 'Carlos Fabian Jr', '13245678987', '(92)99136-0856', 'carlosfjr@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 17:14:23'),
	(2, 'Júnior Bentes', '13245678987', '(92)99136-0856', 'junior@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 17:32:26'),
	(3, 'Rosa Bentes', '13245678987', '(92)99136-0856', 'rosa@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 17:39:27'),
	(4, 'Joao Bentes', '13245678987', '(92)99136-0856', 'joao@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 17:50:13'),
	(5, 'Maria Bentes', '13245678987', '(92)99136-0856', 'maria@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 17:52:44'),
	(6, 'Marcos Bentes', '13245678987', '(92)99136-0856', 'marcos@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 18:09:09'),
	(7, 'Jose Bentes', '13245678987', '(92)99136-0856', 'jose@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 18:09:27'),
	(8, 'Padro Bentes', '13245678987', '(92)99136-0856', 'pedro@gmail.com', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', 'Manaus', 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 18:11:38'),
	(9, 'Alemanha', '13245678987', '(92)99136-0856', 'alemanha@prodimagem.com.br', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', 'Manaus', 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-16 18:35:27'),
	(10, 'akto', '13245678987', '(92)99136-0856', 'alemanha@prodimagem.com.br', 'USER', '202cb962ac59075b964b07152d234b70', '69097313', '123', NULL, 'Manaus', 'Manaus', 'Manaus', 'Manaus', NULL, NULL, NULL, NULL, NULL, '2023-05-18 21:34:44');

-- Copiando estrutura para tabela searchhotels.reserva
CREATE TABLE IF NOT EXISTS `reserva` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idusuario` int NOT NULL,
  `idquarto` int NOT NULL,
  `status` enum('ATIVA','INATIVA') NOT NULL DEFAULT 'ATIVA',
  `data_reserva` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_reserva_usuario1_idx` (`idusuario`),
  KEY `fk_reserva_quarto1_idx` (`idquarto`),
  CONSTRAINT `fk_reserva_quarto1` FOREIGN KEY (`idquarto`) REFERENCES `quarto` (`id`),
  CONSTRAINT `fk_reserva_usuario1` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Copiando dados para a tabela searchhotels.reserva: ~0 rows (aproximadamente)

