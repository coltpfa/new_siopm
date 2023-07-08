-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 06, 2023 at 11:33 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siopm-off2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bpmms`
--

CREATE TABLE `bpmms` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bpmms`
--

INSERT INTO `bpmms` (`id`, `nome`, `id_user`, `created_at`, `updated_at`, `tipo`) VALUES
(2, '01° BPM/M', 1, '2023-07-01 04:50:45', '2023-07-02 23:39:39', 'Rádio patrulha');

-- --------------------------------------------------------

--
-- Table structure for table `cadastro190s`
--

CREATE TABLE `cadastro190s` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cidades`
--

CREATE TABLE `cidades` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cidades`
--

INSERT INTO `cidades` (`id`, `nome`, `id_user`, `created_at`, `updated_at`) VALUES
(2, 'São Bernardo dos Campos - SP', 1, '2023-06-30 17:14:43', '2023-06-30 17:14:43'),
(3, 'São Caetano - SP', 1, '2023-06-30 19:06:11', '2023-06-30 19:06:11'),
(4, 'São Paulo -SP', 1, '2023-07-01 04:51:04', '2023-07-01 04:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mapas`
--

CREATE TABLE `mapas` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mapas`
--

INSERT INTO `mapas` (`id`, `nome`, `descricao`, `file_name`, `file_path`, `status`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'teste', 'teste', '64a4e562a84c9', 'C:\\Meus_sites\\HomeDev\\www\\siopm-off2\\public\\mapas/64a4e562a84c9.kml', '1', 1, '2023-07-05 06:37:06', '2023-07-05 06:37:06'),
(2, 'teste', 'teste', '64a4e857eb6fe', 'C:\\Meus_sites\\HomeDev\\www\\siopm-off2\\public\\mapas/64a4e857eb6fe.kml', '1', 1, '2023-07-05 06:49:44', '2023-07-05 06:49:44'),
(3, 'teste2', 'teste2', '64a4ea5def0dc', 'C:\\Meus_sites\\HomeDev\\www\\siopm-off2\\public\\mapas/64a4ea5def0dc.kml', '1', 1, '2023-07-05 06:58:22', '2023-07-05 06:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_30_040426_create_ocorrencias_table', 2),
(7, '2023_06_30_130205_create_cidades_table', 2),
(8, '2023_06_30_150025_create_bpmms_table', 3),
(9, '2023_06_30_211139_add_new_colluns_to_users_table', 4),
(10, '2023_07_02_010049_create_ramais_table', 5),
(11, '2023_07_02_194218_add_new_colluns2_to_users_table', 6),
(12, '2023_07_02_202220_add_new_colluns_to_bpmms_table', 7),
(13, '2023_07_04_035634_create_natureza_ocorrencias_table', 8),
(15, '2023_07_05_001232_create_mapas_table', 9),
(16, '2023_07_06_030945_create_cadastro190s_table', 10),
(17, '2023_07_06_170626_add_new_colluns_to_users_table', 11),
(18, '2023_07_06_174420_add_new_colluns_to_ramais_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `natureza_ocorrencias`
--

CREATE TABLE `natureza_ocorrencias` (
  `id` bigint UNSIGNED NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `natureza_ocorrencias`
--

INSERT INTO `natureza_ocorrencias` (`id`, `codigo`, `descricao`, `status`, `id_user`, `created_at`, `updated_at`) VALUES
(685, 'A00', 'ATOS ENVOLVENDO O TRÂNSITO - CÓDIGO A (ALFA)', '1', 1, NULL, NULL),
(686, 'A01', 'ACIDENTE DE TRÂNSITO SEM VÍTIMA', '1', 1, NULL, NULL),
(687, 'A02', 'ACIDENTE DE TRÂNSITO COM VÍTIMA', '1', 1, NULL, NULL),
(688, 'A03', 'ACIDENTE DE TRÂNSITO ENVOLVENDO VEÍCULO OFICIAL', '1', 1, NULL, NULL),
(689, 'A04', 'AUTO LESÃO', '1', 1, NULL, NULL),
(690, 'A05', 'ATROPELAMENTO', '1', 1, NULL, NULL),
(691, 'A06', 'FALTA DE HABILITAÇÃO', '1', 1, NULL, NULL),
(692, 'A07', 'DIREÇÃO PERIGOSA', '1', 1, NULL, NULL),
(693, 'A08', 'APREENSÃO DE VEÍCULO', '1', 1, NULL, NULL),
(694, 'A09', 'AUTO ABANDONADO', '1', 1, NULL, NULL),
(695, 'A10', 'AUTO LOCALIZADO', '1', 1, NULL, NULL),
(696, 'A11', 'INTERDIÇÃO DE VIA PÚBLICA', '1', 1, NULL, NULL),
(697, 'A12', 'HOMICÍDIO CULPOSO NA DIREÇÃO DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(698, 'A13', 'LESÃO CORPORAL CULPOSA NA DIREÇÃO DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(699, 'A14', 'OMISSÃO DE SOCORRO PRATICADO POR CONDUTOR DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(700, 'A15', 'ABANDONO DE LOCAL DE ACIDENTE PRATICADO POR CONDUT. DE VEÍCULO AUTOMOTOR', '1', 1, NULL, NULL),
(701, 'A99', 'OUTROS ATOS ENVOLVENDO O TRÂNSITO (ESPECIFICAR)', '1', 1, NULL, NULL),
(702, 'B00', 'ATOS CONTRA A PESSOA - CÓDIGO B (BRAVO)', '1', 1, NULL, NULL),
(703, 'B01', 'HOMICÍDIO SIMPLES', '1', 1, NULL, NULL),
(704, 'B02', 'HOMICÍDIO QUALIFICADO', '1', 1, NULL, NULL),
(705, 'B03', 'HOMICÍDIO CULPOSO', '1', 1, NULL, NULL),
(706, 'B04', 'TENTATIVA DE HOMICÍDIO', '1', 1, NULL, NULL),
(707, 'B05', 'SUICÍDIO', '1', 1, NULL, NULL),
(708, 'B06', 'TENTATIVA DE SUICÍDIO', '1', 1, NULL, NULL),
(709, 'B07', 'INDUÇÃO, INSTIGAÇÃO OU AUXÍLIO AO SUICÍDIO', '1', 1, NULL, NULL),
(710, 'B08', 'INFANTICÍDIO', '1', 1, NULL, NULL),
(711, 'B09', 'ABORTO', '1', 1, NULL, NULL),
(712, 'B10', 'LESÃO CORPORAL CULPOSA', '1', 1, NULL, NULL),
(713, 'B11', 'LESÃO CORPORAL DOLOSA', '1', 1, NULL, NULL),
(714, 'B12', 'VIOLÊNCIA DOMÉSTICA (LEI MARIA DA PENHA)', '1', 1, NULL, NULL),
(715, 'B13', 'PERICLITAÇÃO DE VIDA/SAÚDE (ESPECIFICAR)', '1', 1, NULL, NULL),
(716, 'B14', 'ABANDONO DE INCAPAZ ', '1', 1, NULL, NULL),
(717, 'B15', 'ABANDONO OU EXPOSIÇÃO DE RECÉM-NASCIDO', '1', 1, NULL, NULL),
(718, 'B16', 'OMISSÃO DE SOCORRO', '1', 1, NULL, NULL),
(719, 'B17', 'MAUS TRATOS', '1', 1, NULL, NULL),
(720, 'B18', 'RIXA', '1', 1, NULL, NULL),
(721, 'B19', 'CALÚNIA', '1', 1, NULL, NULL),
(722, 'B20', 'DIFAMAÇÃO', '1', 1, NULL, NULL),
(723, 'B21', 'INJÚRIA', '1', 1, NULL, NULL),
(724, 'B22', 'INJÚRIA REAL', '1', 1, NULL, NULL),
(725, 'B23', 'CONSTRANGIMENTO ILEGAL', '1', 1, NULL, NULL),
(726, 'B24', 'AMEAÇA', '1', 1, NULL, NULL),
(727, 'B25', 'SEQÜESTRO', '1', 1, NULL, NULL),
(728, 'B26', 'CÁRCERE PRIVADO', '1', 1, NULL, NULL),
(729, 'B27', 'REDUÇÃO A CONDIÇÃO ANÁLOGA DE ESCRAVO', '1', 1, NULL, NULL),
(730, 'B99', 'OUTROS ATOS CONTRA A PESSOA (ESPECIFICAR)', '1', 1, NULL, NULL),
(731, 'C00', 'ATOS REGIDOS POR LEGISLAÇÃO ESPECIAL - CÓDIGO C (CHARLIE)', '1', 1, NULL, NULL),
(732, 'C01', 'CRIMES CONTRA O CONSUMIDOR (ESPECIFICAR)', '1', 1, NULL, NULL),
(733, 'C02', 'LAVAGEM OU OCULTAÇÃO DE BENS, DIREITOS E VALORES PROVENIENTES DE CRIME', '1', 1, NULL, NULL),
(734, 'C03', 'TORTURA', '1', 1, NULL, NULL),
(735, 'C04', 'TRÁFICO DE SUBSTÂNCIA ENTORPECENTE', '1', 1, NULL, NULL),
(736, 'C05', 'OBJETOS, UTENSÍLIOS, MAQUINÁRIOS UZADOS FABRICAÇÃO DE SUBST. ENTORPECENTE', '1', 1, NULL, NULL),
(737, 'C06', 'ASSOCIAÇÃO PARA O TRÁFICO', '1', 1, NULL, NULL),
(738, 'C07', 'POSSE DE SUBSTÂNCIA ENTORPECENTE', '1', 1, NULL, NULL),
(739, 'C08', 'POSSE IRREGULAR DE ARMA DE FOGO, ACESSÓRIO OU MUNIÇÃO DE USO PERMITIDO', '1', 1, NULL, NULL),
(740, 'C09', 'OMISSÃO NA CAUTELA DE ARMA DE FOGO', '1', 1, NULL, NULL),
(741, 'C10', 'PORTE ILEGAL DE ARMA DE FOGO', '1', 1, NULL, NULL),
(742, 'C11', 'DISPARO DE ARMA DE FOGO', '1', 1, NULL, NULL),
(743, 'C12', 'POSSE OU PORTE ILEGAL DE ARMA DE USO RESTRITO', '1', 1, NULL, NULL),
(744, 'C13', 'COMÉRCIO ILEGAL DE ARMA DE FOGO', '1', 1, NULL, NULL),
(745, 'C14', 'RACISMO, PRECONCEITO E DISCRIMINAÇÃO', '1', 1, NULL, NULL),
(746, 'C15', 'CRIMES CONTRA A ORDEM ECONÔMICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(747, 'C16', 'CRIME ELEITORAL', '1', 1, NULL, NULL),
(748, 'C17', 'CRIMES CONTRA O IDOSO (ESPECIFICAR)', '1', 1, NULL, NULL),
(749, 'C99', 'OUTROS ATOS REGIDOS POR LEGISLAÇÃO ESPECIAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(750, 'D00', 'ATOS CONTRA O PATRIMÔNIO - CÓDIGO D (DELTA)', '1', 1, NULL, NULL),
(751, 'D01', 'VIOLAÇÃO DE DOMICÍLIO', '1', 1, NULL, NULL),
(752, 'D02', 'FURTO SIMPLES', '1', 1, NULL, NULL),
(753, 'D03', 'FURTO QUALIFICADO', '1', 1, NULL, NULL),
(754, 'D04', 'TENTATIVA DE FURTO', '1', 1, NULL, NULL),
(755, 'D05', 'ROUBO SIMPLES', '1', 1, NULL, NULL),
(756, 'D06', 'ROUBO QUALIFICADO', '1', 1, NULL, NULL),
(757, 'D07', 'TENTATIVA DE ROUBO', '1', 1, NULL, NULL),
(758, 'D08', 'EXTORSÃO', '1', 1, NULL, NULL),
(759, 'D09', 'EXTORSÃO MEDIANTE SEQÜESTRO', '1', 1, NULL, NULL),
(760, 'D10', 'DANOS/DEPREDAÇÃO', '1', 1, NULL, NULL),
(761, 'D11', 'ARROMBAMENTO', '1', 1, NULL, NULL),
(762, 'D12', 'DANOS AO PATRIMÔNIO PÚBLICO', '1', 1, NULL, NULL),
(763, 'D13', 'INVASÃO DE BENS PÚBLICOS MUNICIPAIS', '1', 1, NULL, NULL),
(764, 'D14', 'LATROCÍNIO', '1', 1, NULL, NULL),
(765, 'D99', 'OUTROS ATOS CONTRA O PATRIMÔNIO (ESPECIFICAR)', '1', 1, NULL, NULL),
(766, 'E00', 'ATOS DE APROPRIAÇÃO E FRAUDES - CÓDIGO E (ECO)', '1', 1, NULL, NULL),
(767, 'E01', 'APROPRIAÇÃO INDÉBITA', '1', 1, NULL, NULL),
(768, 'E02', 'ESTELIONATO', '1', 1, NULL, NULL),
(769, 'E03', 'RECEPTAÇÃO CULPOSA', '1', 1, NULL, NULL),
(770, 'E04', 'RECEPTAÇÃO DOLOSA', '1', 1, NULL, NULL),
(771, 'E05', 'TENTATIVA DE ESTELIONATO', '1', 1, NULL, NULL),
(772, 'E06', 'VIOLAÇÃO DE DIREITOS AUTORAIS, MARCAS OU PATENTES', '1', 1, NULL, NULL),
(773, 'E99', 'OUTROS ATOS DE APROPRIAÇÃO E FRAUDES', '1', 1, NULL, NULL),
(774, 'F00', 'ATOS CONTRA O RESPEITO AOS MORTOS - CÓDIGO F (FOX)', '1', 1, NULL, NULL),
(775, 'F01', 'VIOLAÇÃO DE SEPULTURA', '1', 1, NULL, NULL),
(776, 'F02', 'DESTRUIÇÃO, SUBTRAÇÃO E OCULTAÇÃO DE CADÁVER', '1', 1, NULL, NULL),
(777, 'F03', 'VILIPÊNDIO DE CADÁVER', '1', 1, NULL, NULL),
(778, 'F04', 'ENCONTRO DE CADÁVER', '1', 1, NULL, NULL),
(779, 'F99', 'OUTROS ATOS CONTRA O RESPEITO AOS MORTOS (ESPECIFICAR)', '1', 1, NULL, NULL),
(780, 'G00', 'ATOS CONTRA A DIGNIDADE / LIBERDADE SEXUAL - CÓDIGO G (GOLF)', '1', 1, NULL, NULL),
(781, 'G01', 'ESTUPRO', '1', 1, NULL, NULL),
(782, 'G02', 'ESTUPRO DE VULNERÁVEL', '1', 1, NULL, NULL),
(783, 'G03', 'TENTATIVA DE ESTUPRO', '1', 1, NULL, NULL),
(784, 'G04', 'VIOLAÇÃO SEXUAL MEDIANTE FRAUDE', '1', 1, NULL, NULL),
(785, 'G05', 'ASSÉDIO SEXUAL', '1', 1, NULL, NULL),
(786, 'G06', 'CORRUPÇÃO DE CRIANÇA OU ADOLESCENTE', '1', 1, NULL, NULL),
(787, 'G07', 'RUFIANISMO', '1', 1, NULL, NULL),
(788, 'G08', 'ATO OBSCENO', '1', 1, NULL, NULL),
(789, 'G09', 'BIGAMIA', '1', 1, NULL, NULL),
(790, 'G10', 'SATISFAÇÃO DE LASCÍVIA MEDIANTE PRESENÇA DE CRIANÇA OU ADOLESCENTE', '1', 1, NULL, NULL),
(791, 'G11', 'TRÁFICO DE PESSOA PARA EXPLORAÇÃO SEXUAL', '1', 1, NULL, NULL),
(792, 'G12', 'FAVORECIMENTO A PROSTITUIÇÃO OU OUTRA FORMA DE EXPLORAÇÃO SEXUAL', '1', 1, NULL, NULL),
(793, 'G99', 'OUTROS ATOS CONTRA A DIGNIDADE E A LIBERDADE SEXUAL', '1', 1, NULL, NULL),
(794, 'H00', 'ATOS ENVOLVENDO CRIANÇA / ADOLESCENTE - CÓDIGO H (HOTEL)', '1', 1, NULL, NULL),
(795, 'H01', 'ATO INFRACIONAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(796, 'H02', 'CONSTRANGIMENTO DE CRIANÇA / ADOLESCENTE SOB SUA GUARDA', '1', 1, NULL, NULL),
(797, 'H03', 'PORNOGRAFIA INFANTIL (241)', '1', 1, NULL, NULL),
(798, 'H04', 'PRIVAR CRIANÇA / ADOLESCENTE DE SUA LIBERDADE (230)', '1', 1, NULL, NULL),
(799, 'H05', 'SUBTRAÇÃO DE CRIANÇA / ADOLESCENTE (237)', '1', 1, NULL, NULL),
(800, 'H06', 'ENTREGA DE FILHO MEDINATE PAGAMENTO', '1', 1, NULL, NULL),
(801, 'H07', 'CRIANÇA / ADOLESCENTE ABANDONADO', '1', 1, NULL, NULL),
(802, 'H08', 'CRIANÇA / ADOLESCENTE LOCALIZADO', '1', 1, NULL, NULL),
(803, 'H09', 'ABANDONO INTELECTUAL', '1', 1, NULL, NULL),
(804, 'H10', 'MAUS TRATOS À CRIANÇA / ADOLESCENTE', '1', 1, NULL, NULL),
(805, 'H11', 'EXPLORAÇÃO DE CRIANÇA / ADOLESCENTE', '1', 1, NULL, NULL),
(806, 'H12', 'VENDER, FORNECER OU ENTREGAR ARMA, MUNIÇÃO OU EXPLOSIVO', '1', 1, NULL, NULL),
(807, 'H13', 'VENDER, FORNECER OU ENTREGAR PRODUTOS QUE POSSAM CAUSAR DEPENDÊNCIA', '1', 1, NULL, NULL),
(808, 'H14', 'VENDER, FORNECER OU ENTREGAR FOGOS DE ESTAMPIDO OU DE ARTIFÍCIO', '1', 1, NULL, NULL),
(809, 'H15', 'IMPEDIR A AÇÃO DE ÓRGÃOS DE PROTEÇÃO A CRIANÇA / ADOLESCENTE', '1', 1, NULL, NULL),
(810, 'H16', 'SUBMETER CRIANÇA / ADOLESCENTE À PROSTITUIÇÃO OU À EXPLORAÇÃO SEXUAL', '1', 1, NULL, NULL),
(811, 'H99', 'OUTROS ATOS ENVOLVENDO CRIANÇA / ADOLESCENTE (ESPECIFICAR)', '1', 1, NULL, NULL),
(812, 'I00', 'ATOS CONTRA A INCOLUMIDADE PÚBLICA - CÓDIGO I (INDIA)', '1', 1, NULL, NULL),
(813, 'I01', 'INCÊNDIO', '1', 1, NULL, NULL),
(814, 'I02', 'EXPLOSÃO', '1', 1, NULL, NULL),
(815, 'I03', 'INUNDAÇÃO', '1', 1, NULL, NULL),
(816, 'I04', 'ENCHENTE', '1', 1, NULL, NULL),
(817, 'I05', 'DESABAMENTO', '1', 1, NULL, NULL),
(818, 'I06', 'DESMORONAMENTO', '1', 1, NULL, NULL),
(819, 'I07', 'ACIDENTE COM PRODUTOS QUÍMICOS', '1', 1, NULL, NULL),
(820, 'I08', 'DESASTRE (ESPECIFICAR)', '1', 1, NULL, NULL),
(821, 'I09', 'OUTROS ATOS CONTRA A INCOLUMIDADE PÚBLICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(822, 'J00', 'ATOS CONTRA O MEIO AMBIENTE - CÓDIGO J (JULIET)', '1', 1, NULL, NULL),
(823, 'J01', 'CRIME AMBIENTAL', '1', 1, NULL, NULL),
(824, 'J02', 'AVERIGUAÇÃO DE CRIME AMBIENTAL', '1', 1, NULL, NULL),
(825, 'J03', 'INCÊNDIO EM MATA NATIVA', '1', 1, NULL, NULL),
(826, 'J04', 'INCÊNDIO EM PASTAGEM', '1', 1, NULL, NULL),
(827, 'J05', 'QUEIMA DE LIXO', '1', 1, NULL, NULL),
(828, 'J06', 'INDIVÍDUO JOGANDO LIXO OU ENTULHO', '1', 1, NULL, NULL),
(829, 'J07', 'RETIRADA DE ABELHAS', '1', 1, NULL, NULL),
(830, 'J08', 'RETIRADA DE ROEDORES', '1', 1, NULL, NULL),
(831, 'J09', 'RETIRADA DE ANIMAIS PEÇONHENTOS', '1', 1, NULL, NULL),
(832, 'J10', 'PICHAÇÃO', '1', 1, NULL, NULL),
(833, 'J11', 'PATRULHAMENTO EM ÁREAS DE PRESERVAÇÃO AMBIENTAL E MANANCIAIS', '1', 1, NULL, NULL),
(834, 'J12', 'BOSQUEAMENTO', '1', 1, NULL, NULL),
(835, 'J13', 'DESMATAMENTO', '1', 1, NULL, NULL),
(836, 'J14', 'APREENSÃO DE MATERIAIS UTILIZADOS EM DESMATAMENTO', '1', 1, NULL, NULL),
(837, 'J15', 'APREENSÃO DE BALÕES E APETRECHOS', '1', 1, NULL, NULL),
(838, 'J16', 'INDIVÍDUO SURPREENDIDO VENDA, FABRICAÇÃO, TRANSPORTE OU SOLTURA DE BALÕE', '1', 1, NULL, NULL),
(839, 'J18', 'IDENTIFICAÇÃO DE LOCAL DE CAÇA', '1', 1, NULL, NULL),
(840, 'J19', 'DETENÇÃO DE CAÇADOR', '1', 1, NULL, NULL),
(841, 'J20', 'APREENSÃO DE ARMADILHAS DE CAÇA', '1', 1, NULL, NULL),
(842, 'J21', 'APREENSÃO DE APETRECHOS DE PESCA', '1', 1, NULL, NULL),
(843, 'J22', 'MOVIMENTAÇÃO ILEGAL DE TERRA', '1', 1, NULL, NULL),
(844, 'J23', 'INTERVENÇÃO EM ÁREA DE PROTEÇÃO AMBIENTAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(845, 'J24', 'RETIRADA DE ESPÉCIES DA FLORA, FAUNA E MINERAIS SEMPOLUIÇÃO DE NASCENTES, AFLUENTES, CURSO D AGUA E LA AUTORIZAÇÃO GOS', '1', 1, NULL, NULL),
(846, 'J25', 'LEGAL', '1', 1, NULL, NULL),
(847, 'J26', 'ESCOLTA DE INDIVÍDUO SURPEENDIDO SEM ALTORIZAÇÃO NA RESERVA', '1', 1, NULL, NULL),
(848, 'J27', 'APOIO A ÓRGÃOS DE PROTEÇÃO AMBIENTAL', '1', 1, NULL, NULL),
(849, 'J28', 'APOIO A PESQUISADORES E PESQUISAS', '1', 1, NULL, NULL),
(850, 'J29', 'ENCONTRO DE ANIMAIS MORTOS', '1', 1, NULL, NULL),
(851, 'J30', 'RETENÇÃO DE ANIMAIS SILVESTRES', '1', 1, NULL, NULL),
(852, 'J31', 'SOLTURA DE ANIMAIS SILVESTRES', '1', 1, NULL, NULL),
(853, 'J32', 'ENCONTRO DE LIXO TÔXICO, HOSPITALAR, DOMÉSTICO OU INDUSTRIAL', '1', 1, NULL, NULL),
(854, 'J33', 'INFRAÇÃO ADMINISTRATIVA AMBIENTAL', '1', 1, NULL, NULL),
(855, 'J34', 'AVERIGUAÇÃO DE INCÊNDIO SEM RESULTADO', '1', 1, NULL, NULL),
(856, 'J35', 'REALIZAÇÃO DE PALESTRAS POR PARTE DO GRUPAMENTO FLORESTAL', '1', 1, NULL, NULL),
(857, 'J99', 'OUTROS ATOS CONTRA O MEIO AMBIENTE (ESPECIFICAR)', '1', 1, NULL, NULL),
(858, 'K00', 'ATOS CONTRA A PAZ, FÉ E SAÚDE PÚBLICA - CÓDIGO K (KILO)', '1', 1, NULL, NULL),
(859, 'K01', 'EXERCÍCIO ILEGAL DA PROFISSÃO OU ATIVIDADE', '1', 1, NULL, NULL),
(860, 'K02', 'INCITAÇÃO / APOLOGIA AO CRIME', '1', 1, NULL, NULL),
(861, 'K03', 'FORMAÇÃO DE QUADRILHA OU BANDO', '1', 1, NULL, NULL),
(862, 'K04', 'CIRCULAÇÃO / APREENSÃO DE MOEDA FALSA', '1', 1, NULL, NULL),
(863, 'K05', 'FALSIFICAÇÃO DE DOCUMENTO', '1', 1, NULL, NULL),
(864, 'K06', 'FALSIDADE IDEOLÓGICA', '1', 1, NULL, NULL),
(865, 'K07', 'CRIMES CONTRA A SAÚDE PÚBLICA', '1', 1, NULL, NULL),
(866, 'K99', 'OUTROS ATOS CONTRA A PAZ, FÉ E SAÚDE PÚBLICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(867, 'L00', 'ATOS CONTRA A ADMINISTRAÇÃO PÚBLICA - CÓDIGO L (LIMA)', '1', 1, NULL, NULL),
(868, 'L01', 'PECULATO', '1', 1, NULL, NULL),
(869, 'L02', 'CONCUSSÃO', '1', 1, NULL, NULL),
(870, 'L03', 'CORRUPÇÃO PASSIVA', '1', 1, NULL, NULL),
(871, 'L04', 'CORRUPÇÃO ATIVA', '1', 1, NULL, NULL),
(872, 'L05', 'CONTRABANDO / DESCAMINHO', '1', 1, NULL, NULL),
(873, 'L06', 'FACILITAÇÃO DE CONTRABANDO OU DESCAMINHO', '1', 1, NULL, NULL),
(874, 'L07', 'PREVARICAÇÃO', '1', 1, NULL, NULL),
(875, 'L08', 'USURPAÇÃO DE FUNÇÃO PÚBLICA', '1', 1, NULL, NULL),
(876, 'L09', 'RESISTÊNCIA', '1', 1, NULL, NULL),
(877, 'L00', 'DESOBEDIÊNCIA', '1', 1, NULL, NULL),
(878, 'L01', 'DESACATO', '1', 1, NULL, NULL),
(879, 'L02', 'EXERCÍCIO ARBITRÁRIO OU ABUSO DE PODER', '1', 1, NULL, NULL),
(880, 'L99', 'OUTROS ATOS CONTRA A ADMINISTRAÇÃO PÚBLICA (ESPECIFICAR)', '1', 1, NULL, NULL),
(881, 'M00', 'ATOS OCORRIDOS NO INTERIOR DE ESCOLAS - CÓDIGO M \"\"(MIKE)', '1', 1, NULL, NULL),
(882, 'M01', 'ALUNO ESQUECIDO NA ESCOLA', '1', 1, NULL, NULL),
(883, 'M02', 'ESCOLTA DE ALUNOS', '1', 1, NULL, NULL),
(884, 'M03', 'APOIO A DIREÇÃO DA ESCOLA', '1', 1, NULL, NULL),
(885, 'M04', 'TRAVESSIA ESCOLAR', '1', 1, NULL, NULL),
(886, 'M05', 'AUXÍLIO PÚBLICO DE ALUNO', '1', 1, NULL, NULL),
(887, 'M06', 'FURTO', '1', 1, NULL, NULL),
(888, 'M07', 'PICHAÇÃO', '1', 1, NULL, NULL),
(889, 'M08', 'PORTE DE ENTORPECENTE', '1', 1, NULL, NULL),
(890, 'M09', 'LESÃO CORPORAL', '1', 1, NULL, NULL),
(891, 'M10', 'DESINTELIGÊNCIA', '1', 1, NULL, NULL),
(892, 'M11', 'VANDALISMO / DEPREDAÇÃO', '1', 1, NULL, NULL),
(893, 'M12', 'DESACATO', '1', 1, NULL, NULL),
(894, 'M19', 'OUTROS ATOS OCORRIDOS NO INTERIOR DE ESCOLAS', '1', 1, NULL, NULL),
(895, 'M10', 'ATOS DE CONTRAVENÇÃO PENAL - CÓDIGO N (NOVEMBER)', '1', 1, NULL, NULL),
(896, 'M11', 'VIAS DE FATO', '1', 1, NULL, NULL),
(897, 'M12', 'DESINTELIGÊNCIA', '1', 1, NULL, NULL),
(898, 'M13', 'INCITAÇÃO / PROVOCAÇÃO DE TUMULTO', '1', 1, NULL, NULL),
(899, 'M14', 'PERTURBAÇÃO DO SOSSEGO (ESPECIFICAR)', '1', 1, NULL, NULL),
(900, 'M15', 'PERTURBAÇÃO DO TRABALHO ', '1', 1, NULL, NULL),
(901, 'M16', 'USO ILEGÍTIMO DE UNIFORME OU DISTINTIVO', '1', 1, NULL, NULL),
(902, 'M17', 'JOGOS DE AZAR', '1', 1, NULL, NULL),
(903, 'M18', 'JOGO DO BICHO', '1', 1, NULL, NULL),
(904, 'M19', 'VADIAGEM', '1', 1, NULL, NULL),
(905, 'M20', 'MENDICÂNCIA', '1', 1, NULL, NULL),
(906, 'M21', 'EMBRIAGUEZ', '1', 1, NULL, NULL),
(907, 'M22', 'IMPORTUNAÇÃO OFENSIVA AO PUDOR', '1', 1, NULL, NULL),
(908, 'M23', 'PORTE DE ARMA BRANCA', '1', 1, NULL, NULL),
(909, 'M24', 'CRUELDADE CONTRA ANIMAIS', '1', 1, NULL, NULL),
(910, 'M25', 'OMISSÃO NA GUARDA / CAUTELA DE ANIMAIS', '1', 1, NULL, NULL),
(911, 'M99', 'OUTROS ATOS DE CONTRAVENÇÃO PENAL (ESPECIFICAR)', '1', 1, NULL, NULL),
(912, 'O00', 'ATIVIDADES DE AUXÍLIO / APOIO / DIVERSAS - CÓDIGO O (OSCAR)', '1', 1, NULL, NULL),
(913, 'O01', 'AUXÍLIO AO PÚBLICO', '1', 1, NULL, NULL),
(914, 'O02', 'PARTURIENTE', '1', 1, NULL, NULL),
(915, 'O03', 'TRANSPORTE DE DOENTES MENTAIS', '1', 1, NULL, NULL),
(916, 'O04', 'TRANSPORTE DE DOENTES MENTAIS PARA OUTRO MUNICÍPIO', '1', 1, NULL, NULL),
(917, 'O05', 'TRANSPORTE DE MIGRANTES', '1', 1, NULL, NULL),
(918, 'O06', 'TRANSPORTES DE GUARDAS MUNICIPAIS', '1', 1, NULL, NULL),
(919, 'O07', 'APOIO A OUTROS ÓRGÃOS POLICIAIS (PM, PC)', '1', 1, NULL, NULL),
(920, 'O08', 'APOIO A OUTRAS VTRs / OUTRAS G M s', '1', 1, NULL, NULL),
(921, 'O09', 'APOIO A OUTROS ÓRGÃOS MUNICIPAIS', '1', 1, NULL, NULL),
(922, 'O00', 'APOIO AO MINISTÉRIO PÚBLICO', '1', 1, NULL, NULL),
(923, 'O11', 'APOIO AO PODER JUDICIÁRIO', '1', 1, NULL, NULL),
(924, 'O12', 'APOIO A OFICIAL DE JUSTIÇA', '1', 1, NULL, NULL),
(925, 'O13', 'APOIO AO CONSELHO TUTELAR', '1', 1, NULL, NULL),
(926, 'O14', 'APOIO À CONCESSIONÁRIA PÚBLICA', '1', 1, NULL, NULL),
(927, 'O15', 'APREENSÃO DE PRODUTOS ILÍCITOS', '1', 1, NULL, NULL),
(928, 'O16', 'DESAPARECIMENTO', '1', 1, NULL, NULL),
(929, 'O17', 'PESSOA LOCALIZADA', '1', 1, NULL, NULL),
(930, 'O18', 'DISPARO DE ALARME', '1', 1, NULL, NULL),
(931, 'O19', 'PATRULHAMENTO', '1', 1, NULL, NULL),
(932, 'O20', 'RONDA ESCOLAR', '1', 1, NULL, NULL),
(933, 'O21', 'PATRULHAMENTO COMUNITÁRIO', '1', 1, NULL, NULL),
(934, 'O22', 'ESCOLTA / TRANSPORTE  DE PRESOS', '1', 1, NULL, NULL),
(935, 'O23', 'SERVIÇOS INTERNOS', '1', 1, NULL, NULL),
(936, 'O24', 'DETENÇÃO DE INDIVÍDUO PROCURADO PELA JUSTIÇA', '1', 1, NULL, NULL),
(937, 'O25', 'AFOGAMENTO', '1', 1, NULL, NULL),
(938, 'O26', 'ACIDENTE PESSOAL / TRABALHO', '1', 1, NULL, NULL),
(939, 'O27', 'PATRULHAMENTO EM PRAÇAS DESPORTIVAS', '1', 1, NULL, NULL),
(940, 'O28', 'PATRULHAMENTO EM PRÓPRIOS MUNICIPAIS', '1', 1, NULL, NULL),
(941, 'O29', 'PATRULHAMENTO EM FESTAS / EVENTOS RELIGIOSOS', '1', 1, NULL, NULL),
(942, 'O30', 'PATRULHAMENTO EM FEIRAS LIVRES', '1', 1, NULL, NULL),
(943, 'O31', 'PATRULHAMENTO EM LOCAIS DE LAZER E DIVERSÃO', '1', 1, NULL, NULL),
(944, 'O32', 'DESLOCAMENTOS PARA OUTROS MUNICIPIOS', '1', 1, NULL, NULL),
(945, 'O33', 'AVERIGUAÇÃO SEM RESULTADO  DE...(CÓDIGO ESPECÍFICO)', '1', 1, NULL, NULL),
(946, 'O99', 'OUTRAS ATIVIDADES DE AUXÍLIO / APOIO / DIVERSAS (ESPECIFICAR)', '1', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ocorrencias`
--

CREATE TABLE `ocorrencias` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ramais`
--

CREATE TABLE `ramais` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ramais`
--

INSERT INTO `ramais` (`id`, `nome`, `id_user`, `created_at`, `updated_at`, `tipo`) VALUES
(2, '3100', 1, NULL, '2023-07-06 21:14:34', '1'),
(3, '3100', 1, NULL, NULL, '1'),
(4, '3100', 1, NULL, NULL, '1'),
(5, '3101', 1, NULL, NULL, '1'),
(6, '3102', 1, NULL, NULL, '1'),
(7, '3103', 1, NULL, NULL, '1'),
(8, '3104', 1, NULL, NULL, '1'),
(9, '3105', 1, NULL, NULL, '1'),
(10, '3106', 1, NULL, NULL, '1'),
(11, '3107', 1, NULL, NULL, '1'),
(12, '3108', 1, NULL, NULL, '1'),
(13, '3109', 1, NULL, NULL, '1'),
(14, '3110', 1, NULL, NULL, '1'),
(15, '3111', 1, NULL, NULL, '1'),
(16, '3112', 1, NULL, NULL, '1'),
(17, '3134', 1, NULL, NULL, '1'),
(18, '3135', 1, NULL, NULL, '1'),
(19, '3136', 1, NULL, NULL, '1'),
(20, '3137', 1, NULL, NULL, '1'),
(21, '3138', 1, NULL, NULL, '1'),
(22, '3139', 1, NULL, NULL, '1'),
(23, '3140', 1, NULL, NULL, '1'),
(24, '3141', 1, NULL, NULL, '1'),
(25, '3142', 1, NULL, NULL, '1'),
(26, '3143', 1, NULL, NULL, '1'),
(27, '3144', 1, NULL, NULL, '1'),
(28, '3145', 1, NULL, NULL, '1'),
(29, '3146', 1, NULL, NULL, '1'),
(30, '3147', 1, NULL, NULL, '1'),
(31, '3148', 1, NULL, NULL, '1'),
(32, '3149', 1, NULL, NULL, '1'),
(33, '3150', 1, NULL, NULL, '1'),
(34, '3151', 1, NULL, NULL, '1'),
(35, '3152', 1, NULL, NULL, '1'),
(36, '3153', 1, NULL, NULL, '1'),
(37, '3154', 1, NULL, NULL, '1'),
(38, '3155', 1, NULL, NULL, '1'),
(39, '3156', 1, NULL, NULL, '1'),
(40, '3157', 1, NULL, NULL, '1'),
(41, '3158', 1, NULL, NULL, '1'),
(42, '3159', 1, NULL, NULL, '1'),
(43, '3160', 1, NULL, NULL, '1'),
(44, '3161', 1, NULL, NULL, '1'),
(45, '3162', 1, NULL, NULL, '1'),
(46, '3163', 1, NULL, NULL, '1'),
(47, '3164', 1, NULL, NULL, '1'),
(48, '3165', 1, NULL, NULL, '1'),
(49, '3166', 1, NULL, NULL, '1'),
(50, '3167', 1, NULL, NULL, '1'),
(51, '3168', 1, NULL, NULL, '1'),
(52, '3169', 1, NULL, NULL, '1'),
(53, '3100', 1, NULL, NULL, '1'),
(54, '3100', 1, NULL, NULL, '1'),
(55, '3101', 1, NULL, NULL, '1'),
(56, '3102', 1, NULL, NULL, '1'),
(57, '3103', 1, NULL, NULL, '1'),
(58, '3104', 1, NULL, NULL, '1'),
(59, '3105', 1, NULL, NULL, '1'),
(60, '3106', 1, NULL, NULL, '1'),
(61, '3107', 1, NULL, NULL, '1'),
(62, '3108', 1, NULL, NULL, '1'),
(63, '3109', 1, NULL, NULL, '1'),
(64, '3110', 1, NULL, NULL, '1'),
(65, '3111', 1, NULL, NULL, '1'),
(66, '3112', 1, NULL, NULL, '1'),
(67, '3113', 1, NULL, NULL, '1'),
(68, '3114', 1, NULL, NULL, '1'),
(69, '3115', 1, NULL, NULL, '1'),
(70, '3116', 1, NULL, NULL, '1'),
(71, '3117', 1, NULL, NULL, '1'),
(72, '3118', 1, NULL, NULL, '1'),
(73, '3119', 1, NULL, NULL, '1'),
(74, '3120', 1, NULL, NULL, '1'),
(75, '3121', 1, NULL, NULL, '1'),
(76, '3122', 1, NULL, NULL, '1'),
(77, '3123', 1, NULL, NULL, '1'),
(78, '3124', 1, NULL, NULL, '1'),
(79, '3125', 1, NULL, NULL, '1'),
(80, '3126', 1, NULL, NULL, '1'),
(81, '3127', 1, NULL, NULL, '1'),
(82, '3128', 1, NULL, NULL, '1'),
(83, '3129', 1, NULL, NULL, '1'),
(84, '3130', 1, NULL, NULL, '1'),
(85, '3131', 1, NULL, NULL, '1'),
(86, '3132', 1, NULL, NULL, '1'),
(87, '3133', 1, NULL, NULL, '1'),
(88, '3134', 1, NULL, NULL, '1'),
(89, '3135', 1, NULL, NULL, '1'),
(90, '3136', 1, NULL, NULL, '1'),
(91, '3137', 1, NULL, NULL, '1'),
(92, '3138', 1, NULL, NULL, '1'),
(93, '3139', 1, NULL, NULL, '1'),
(94, '3140', 1, NULL, NULL, '1'),
(95, '3141', 1, NULL, NULL, '1'),
(96, '3142', 1, NULL, NULL, '1'),
(97, '3143', 1, NULL, NULL, '1'),
(98, '3144', 1, NULL, NULL, '1'),
(99, '3145', 1, NULL, NULL, '1'),
(100, '3146', 1, NULL, NULL, '1'),
(101, '3147', 1, NULL, NULL, '1'),
(102, '3148', 1, NULL, NULL, '1'),
(103, '3149', 1, NULL, NULL, '1'),
(104, '3150', 1, NULL, NULL, '1'),
(105, '3151', 1, NULL, NULL, '1'),
(106, '3152', 1, NULL, NULL, '1'),
(107, '3153', 1, NULL, NULL, '1'),
(108, '3154', 1, NULL, NULL, '1'),
(109, '3155', 1, NULL, NULL, '1'),
(110, '3156', 1, NULL, NULL, '1'),
(111, '3157', 1, NULL, NULL, '1'),
(112, '3158', 1, NULL, NULL, '1'),
(113, '3159', 1, NULL, NULL, '1'),
(114, '3160', 1, NULL, NULL, '1'),
(115, '3161', 1, NULL, NULL, '1'),
(116, '3162', 1, NULL, NULL, '1'),
(117, '3163', 1, NULL, NULL, '1'),
(118, '3164', 1, NULL, NULL, '1'),
(119, '3165', 1, NULL, NULL, '1'),
(120, '3166', 1, NULL, NULL, '1'),
(121, '3167', 1, NULL, NULL, '1'),
(122, '3168', 1, NULL, NULL, '1'),
(123, '3169', 1, NULL, NULL, '1'),
(124, '3170', 1, NULL, NULL, '1'),
(125, '3171', 1, NULL, NULL, '1'),
(126, '3172', 1, NULL, NULL, '1'),
(127, '3173', 1, NULL, NULL, '1'),
(128, '3174', 1, NULL, NULL, '1'),
(129, '3175', 1, NULL, NULL, '1'),
(130, '3176', 1, NULL, NULL, '1'),
(131, '3177', 1, NULL, NULL, '1'),
(132, '3178', 1, NULL, NULL, '1'),
(133, '3179', 1, NULL, NULL, '1'),
(134, '3180', 1, NULL, NULL, '1'),
(135, '3181', 1, NULL, NULL, '1'),
(136, '3182', 1, NULL, NULL, '1'),
(137, '3183', 1, NULL, NULL, '1'),
(138, '3184', 1, NULL, NULL, '1'),
(139, '3185', 1, NULL, NULL, '1'),
(140, '3186', 1, NULL, NULL, '1'),
(141, '3187', 1, NULL, NULL, '1'),
(142, '3188', 1, NULL, NULL, '1'),
(143, '3189', 1, NULL, NULL, '1'),
(144, '3190', 1, NULL, NULL, '1'),
(145, '3191', 1, NULL, NULL, '1'),
(146, '3192', 1, NULL, NULL, '1'),
(147, '3193', 1, NULL, NULL, '1'),
(148, '3194', 1, NULL, NULL, '1'),
(149, '3195', 1, NULL, NULL, '1'),
(150, '3196', 1, NULL, NULL, '1'),
(151, '3197', 1, NULL, NULL, '1'),
(152, '3198', 1, NULL, NULL, '1'),
(153, '3199', 1, NULL, NULL, '1'),
(154, '3200', 1, NULL, NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nivel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bpmm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trabalhando` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identificacao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `noturno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `nivel`, `matricula`, `bpmm`, `status`, `trabalhando`, `identificacao`, `noturno`) VALUES
(1, 'admin', 'josue.mocelin@gmail.com', NULL, '$2y$10$5slhYCAEWR.71e.xCjhJ6Ow562p1XflSR/z7a.w7kQ4EWLmDeVu9.', 'wj7wwO7sTcSshGC5BOmiMiHEb8qJ2aWXI2nKecLEYxCQw9lVPCTPxFJe77PZ', '2023-06-29 08:50:24', '2023-07-06 23:11:46', 'Despachador', '1234', '2', '1', '01° BPM/M - Rádio patrulha', '0', '0'),
(2, 'admin2', 'josue.mocelin@outlook.com', NULL, '$2y$10$NwlvvoskOzDRgwe1bi2vtOsViD96rj0FQG0.iR58CTF.3VBeSV/WC', NULL, '2023-07-01 21:53:23', '2023-07-01 21:53:23', 'Atendente', '12345', '2', '1', '', '0', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bpmms`
--
ALTER TABLE `bpmms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bpmms_id_user_foreign` (`id_user`);

--
-- Indexes for table `cadastro190s`
--
ALTER TABLE `cadastro190s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cidades`
--
ALTER TABLE `cidades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cidades_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mapas_id_user_foreign` (`id_user`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `natureza_ocorrencias`
--
ALTER TABLE `natureza_ocorrencias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `natureza_ocorrencias_id_user_foreign` (`id_user`);

--
-- Indexes for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `ramais`
--
ALTER TABLE `ramais`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ramais_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bpmms`
--
ALTER TABLE `bpmms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cadastro190s`
--
ALTER TABLE `cadastro190s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cidades`
--
ALTER TABLE `cidades`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mapas`
--
ALTER TABLE `mapas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `natureza_ocorrencias`
--
ALTER TABLE `natureza_ocorrencias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=947;

--
-- AUTO_INCREMENT for table `ocorrencias`
--
ALTER TABLE `ocorrencias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ramais`
--
ALTER TABLE `ramais`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bpmms`
--
ALTER TABLE `bpmms`
  ADD CONSTRAINT `bpmms_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cidades`
--
ALTER TABLE `cidades`
  ADD CONSTRAINT `cidades_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mapas`
--
ALTER TABLE `mapas`
  ADD CONSTRAINT `mapas_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `natureza_ocorrencias`
--
ALTER TABLE `natureza_ocorrencias`
  ADD CONSTRAINT `natureza_ocorrencias_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ramais`
--
ALTER TABLE `ramais`
  ADD CONSTRAINT `ramais_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
