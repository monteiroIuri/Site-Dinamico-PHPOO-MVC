-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 05-Jul-2021 às 18:25
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `celke`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_about_companies`
--

DROP TABLE IF EXISTS `sts_about_companies`;
CREATE TABLE IF NOT EXISTS `sts_about_companies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sts_situation_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_about_companies`
--

INSERT INTO `sts_about_companies` (`id`, `title`, `description`, `image`, `sts_situation_id`, `created`, `modified`) VALUES
(1, 'Sobre Empresa Titulo 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius, massa sit amet pretium facilisis, lacus ligula interdum ipsum, ut convallis magna tortor feugiat neque. Vestibulum congue nunc quis dolor interdum porttitor. Mauris tristique fermentum ante vitae lacinia. \r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius, massa sit amet pretium facilisis, lacus ligula interdum ipsum, ut convallis magna tortor feugiat neque. Vestibulum congue nunc quis dolor interdum porttitor. Mauris tristique fermentum ante vitae lacinia.', 'about_company.jpg', 1, '2021-07-01 21:49:54', NULL),
(2, 'Sobre Empresa Titulo 2', ' Duis sed nunc quis nunc sodales varius. Nulla sit amet erat tristique, aliquet odio eu, elementum nisi. Proin mauris tortor, tincidunt ac magna vel, lacinia lobortis nisi. Etiam quis lacus ut justo malesuada mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus.', 'about_company.jpg', 1, '2021-07-01 21:49:54', NULL),
(3, 'Sobre Empresa Titulo 3', 'Donec tortor sapien, tincidunt id euismod eleifend, luctus sed quam. Donec neque urna, semper eu nisl et, fermentum sollicitudin sapien. Donec consequat, elit sed ultricies tincidunt, augue nibh feugiat ante, in blandit sapien erat eget neque. Proin vehicula sit amet arcu sit amet congue.', 'about_company.jpg', 1, '2021-07-01 21:49:54', NULL),
(4, 'Sobre Empresa Titulo 4', 'Donec viverra convallis sapien vel dapibus. Cras efficitur, eros eu tincidunt maximus, est tortor elementum nibh, vitae lacinia enim ipsum venenatis tellus. Ut nec urna non urna consectetur vestibulum. Nulla facilisis eget nulla in feugiat. Proin tempor neque id laoreet porta. Curabitur et tortor sed dolor facilisis consectetur eu dictum dui.', 'about_company.jpg', 1, '2021-07-01 21:49:54', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_contacts`
--

DROP TABLE IF EXISTS `sts_contacts`;
CREATE TABLE IF NOT EXISTS `sts_contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_oppening_hours` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oppening_hours` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_address` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_two` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_contacts`
--

INSERT INTO `sts_contacts` (`id`, `title_oppening_hours`, `oppening_hours`, `title_address`, `address`, `address_two`, `phone`, `created`, `modified`) VALUES
(1, 'Entre em contato - ...', 'Segunda a Sexta: 08:30 às 12:00 e 13:30 às 18:00', 'Endereço', 'Rua mem de sá, 1805', 'Vila bosque - Maringá', '(xx) xxxx-xxxx', '2021-07-02 18:14:28', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_contacts_msgs`
--

DROP TABLE IF EXISTS `sts_contacts_msgs`;
CREATE TABLE IF NOT EXISTS `sts_contacts_msgs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_contacts_msgs`
--

INSERT INTO `sts_contacts_msgs` (`id`, `name`, `email`, `subject`, `content`, `created`, `modified`) VALUES
(1, 'Iuri', 'iuri@teste.com.br', 'Assunto', 'Texto', '0000-00-00 00:00:00', NULL),
(2, 'iuri', 'iuri@email.com.br', 'Assunto 2', 'Conteúdo 2', '2021-07-02 17:39:02', NULL),
(3, 'iuri', 'iuri@email.com.br', 'Assunto 3', 'Conteúdo 3', '2021-07-02 17:42:47', NULL),
(4, 'a', 'a@a.com', 'a', 'a', '2021-07-02 21:46:36', NULL),
(5, 'iuri', 'teste@email.com', 'teste', 'teste', '2021-07-02 21:47:31', NULL),
(6, 'iuri', 'teste@email.com', 'teste', 'teste', '2021-07-02 21:50:30', NULL),
(7, 'teste', 'teste@email.com', 'teste', 'teste', '2021-07-05 18:06:53', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_footers`
--

DROP TABLE IF EXISTS `sts_footers`;
CREATE TABLE IF NOT EXISTS `sts_footers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_site` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_contact` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_address` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_cnpj` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_social_network` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_one_social_network` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_one_social_network` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_two_social_network` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_two_social_network` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_three_social_network` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_three_social_network` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_four_social_network` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_four_social_network` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_footers`
--

INSERT INTO `sts_footers` (`id`, `title_site`, `title_contact`, `phone`, `address`, `url_address`, `cnpj`, `url_cnpj`, `title_social_network`, `txt_one_social_network`, `link_one_social_network`, `txt_two_social_network`, `link_two_social_network`, `txt_three_social_network`, `link_three_social_network`, `txt_four_social_network`, `link_four_social_network`, `created`, `modified`) VALUES
(1, 'Iuri', 'Contato', '(XX) XXXXX-XXXX', 'Rua Mem de sa, 1805', 'http://localhost/celke/contato', 'CNPJ: XX.XXX.XXX/XXXX-XX', 'http://localhost/celke/contato', 'Redes Sociais', 'Instagram', 'https://www.instagram.com/iuri.monteiro.3', 'Facebook', 'https://www.facebook.com/iuri.monteiro3/', 'Youtube', 'https://www.youtube.com/channel/UC5ClMRHFl8o_MAaO4w7ZYug', 'Twiter', 'https://twitter.com/celkecursos', '2021-07-02 19:00:55', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_homes_actions`
--

DROP TABLE IF EXISTS `sts_homes_actions`;
CREATE TABLE IF NOT EXISTS `sts_homes_actions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_action` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_action` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_action` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_btn_action` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_btn_action` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_homes_actions`
--

INSERT INTO `sts_homes_actions` (`id`, `title_action`, `subtitle_action`, `description_action`, `link_btn_action`, `txt_btn_action`, `image`, `created`, `modified`) VALUES
(1, '3For calling extra attention to featured content or information.', 'Elit et mi fringilla commodo eget in lectus!', 'Orci varius natoque penatibus et magnis dis parturient montes, nascetur commodo mus.', 'http://localhost/celke/contato', 'Contato', 'chamada_acao.jpg', '2021-07-02 16:45:15', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_homes_dets`
--

DROP TABLE IF EXISTS `sts_homes_dets`;
CREATE TABLE IF NOT EXISTS `sts_homes_dets` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_det` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle_det` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_det` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_homes_dets`
--

INSERT INTO `sts_homes_dets` (`id`, `title_det`, `subtitle_det`, `description_det`, `image`, `created`, `modified`) VALUES
(1, 'Phasellus id consectetur orci.', 'Oh yeah, its that good.', 'Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.', 'detalhes_servico.jpg', '2021-07-02 17:04:20', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_homes_servs`
--

DROP TABLE IF EXISTS `sts_homes_servs`;
CREATE TABLE IF NOT EXISTS `sts_homes_servs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_serv` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_serv` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone_one_serv` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_one_serv` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_one_serv` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone_two_serv` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_two_serv` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_two_serv` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icone_trhee_serv` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_trhee_serv` varchar(44) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_trhee_serv` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_homes_servs`
--

INSERT INTO `sts_homes_servs` (`id`, `title_serv`, `description_serv`, `icone_one_serv`, `title_one_serv`, `description_one_serv`, `icone_two_serv`, `title_two_serv`, `description_two_serv`, `icone_trhee_serv`, `title_trhee_serv`, `description_trhee_serv`, `created`, `modified`) VALUES
(1, 'Serviços', 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.', 'fas fa-ship', 'Serviço um', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Curabitur non ultricies mi, sit amet laoreet diam.', 'fas fa-map-marked-alt', 'Serviço dois', 'Quisque ut interdum nunc. Pellentesque metus neque, convallis sed vestibulum eu, viverra et justo. In laoreet diam nec nisl consectetur auctor.', 'fas fa-snowplow', 'Serviço três', 'Donec porttitor metus a arcu pulvinar ultricies. Aliquam commodo fermentum sapien quis porta. Nunc ac hendrerit libero, vel aliquam mauris.', '2021-07-02 16:11:01', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `sts_homes_tops`
--

DROP TABLE IF EXISTS `sts_homes_tops`;
CREATE TABLE IF NOT EXISTS `sts_homes_tops` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title_top` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_top` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_btn_top` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_btn_top` varchar(44) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `sts_homes_tops`
--

INSERT INTO `sts_homes_tops` (`id`, `title_top`, `description_top`, `link_btn_top`, `txt_btn_top`, `image`, `created`, `modified`) VALUES
(1, 'Temos a solução que você precisa!', ' Class aptent taciti sociosqu ad litora torquent per conubia nostra', 'http://localhost/celke/contato', 'Contato', 'topo.jpg', '2021-07-01 23:38:32', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
