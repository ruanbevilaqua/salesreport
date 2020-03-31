-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 31-Mar-2020 às 22:18
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `order_report`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `clients`
--

INSERT INTO `clients` (`id`, `name`, `address`, `phone`, `email`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ruan Bevilaqua', 'Rua Treze de Maio, 117, Florianópolis, SC', '48 991786565', 'ruan.bevilaqua@gmail.com', '2020-03-29 20:00:00', '2020-03-29 20:00:00', NULL),
(2, 'Nayane de Pinho Silva', 'Rua Treze de Maio, 117, Florianópolis, SC', '48 991352546', 'nayaneps@yahoo.com', '2020-03-29 20:01:00', '2020-03-29 20:01:00', NULL),
(3, 'João', 'Rua Silva jardim, 504', '48997979797', 'joao@farmacia.com.br', '2020-03-31 20:30:59', '2020-03-31 20:30:59', NULL),
(4, 'José', 'Rua Dr Abel Capela', '48997919191', 'jose@sistema.com.br', '2020-03-31 20:32:09', '2020-03-31 20:32:09', NULL),
(5, 'Maria', 'Avenida Mauro Ramos', '4879797979', 'maria@padaria.com', '2020-03-31 20:33:17', '2020-03-31 20:33:17', NULL),
(6, 'Dino Silvassauro', 'Rua Meteoro', '1', 'dinoss@uro.com', '2020-03-31 20:34:41', '2020-03-31 20:34:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_03_29_185909_create_clients_table', 1),
(4, '2020_03_29_185950_create_orders_table', 1),
(5, '2020_03_29_190009_create_payments_table', 1),
(6, '2020_03_29_190026_create_products_table', 1),
(7, '2020_03_29_195354_create_order_product_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `orders`
--

INSERT INTO `orders` (`id`, `client_id`, `payment_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '2020-03-29 20:10:00', '2020-03-29 20:10:00', NULL),
(2, '1', '2', '2020-03-29 22:10:00', '2020-03-29 22:10:00', NULL),
(3, '2', '3', '2020-03-29 22:10:00', '2020-03-29 22:10:00', NULL),
(4, '1', NULL, '2020-03-30 12:23:07', '2020-03-30 12:23:07', NULL),
(5, '2', NULL, '2020-03-30 12:23:28', '2020-03-30 12:23:28', NULL),
(6, '1', NULL, '2020-03-30 12:25:40', '2020-03-30 12:25:40', NULL),
(7, '1', NULL, '2020-03-30 12:26:14', '2020-03-30 12:26:14', NULL),
(8, '2', NULL, '2020-03-30 12:27:29', '2020-03-30 12:27:29', NULL),
(9, '1', NULL, '2020-03-30 12:38:00', '2020-03-30 12:38:00', NULL),
(10, '1', NULL, '2020-03-31 18:06:54', '2020-03-31 18:06:54', NULL),
(11, '1', NULL, '2020-03-31 18:11:49', '2020-03-31 18:11:49', NULL),
(12, '2', NULL, '2020-03-31 18:12:17', '2020-03-31 18:12:17', NULL),
(13, '1', NULL, '2020-03-31 18:14:06', '2020-03-31 18:14:06', NULL),
(14, '2', NULL, '2020-03-31 18:15:10', '2020-03-31 18:15:10', NULL),
(15, '2', NULL, '2020-03-31 18:15:33', '2020-03-31 18:15:33', NULL),
(16, '2', NULL, '2020-03-31 18:31:46', '2020-03-31 18:31:46', NULL),
(17, '1', NULL, '2020-03-31 18:49:51', '2020-03-31 18:49:51', NULL),
(18, '1', NULL, '2020-03-31 18:50:07', '2020-03-31 18:50:07', NULL),
(19, '2', '4', '2020-03-31 18:52:22', '2020-03-31 18:52:22', NULL),
(20, '2', NULL, '2020-03-31 18:52:57', '2020-03-31 18:52:57', NULL),
(21, '1', '6', '2020-03-31 18:53:20', '2020-03-31 18:53:20', NULL),
(22, '6', '7', '2020-03-31 20:36:37', '2020-03-31 20:36:37', NULL),
(23, '2', '8', '2020-03-31 20:56:13', '2020-03-31 20:56:13', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `order_product`
--

DROP TABLE IF EXISTS `order_product`;
CREATE TABLE IF NOT EXISTS `order_product` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `order_product`
--

INSERT INTO `order_product` (`id`, `order_id`, `product_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '1', '2020-03-29 20:11:00', '2020-03-29 20:11:00', NULL),
(2, '1', '1', '2020-03-29 20:15:00', '2020-03-29 20:15:00', NULL),
(3, '15', '1', NULL, NULL, NULL),
(4, '15', '2', NULL, NULL, NULL),
(5, '15', '2', NULL, NULL, NULL),
(6, '16', '1', NULL, NULL, NULL),
(7, '16', '2', NULL, NULL, NULL),
(8, '16', '3', NULL, NULL, NULL),
(9, '17', '1', NULL, NULL, NULL),
(10, '17', '2', NULL, NULL, NULL),
(11, '17', '2', NULL, NULL, NULL),
(12, '17', '3', NULL, NULL, NULL),
(13, '18', '1', NULL, NULL, NULL),
(14, '18', '2', NULL, NULL, NULL),
(15, '18', '2', NULL, NULL, NULL),
(16, '18', '3', NULL, NULL, NULL),
(17, '19', '2', NULL, NULL, NULL),
(18, '19', '3', NULL, NULL, NULL),
(19, '19', '3', NULL, NULL, NULL),
(20, '20', '1', NULL, NULL, NULL),
(21, '21', '2', NULL, NULL, NULL),
(22, '22', '1', NULL, NULL, NULL),
(23, '22', '2', NULL, NULL, NULL),
(24, '22', '2', NULL, NULL, NULL),
(25, '22', '2', NULL, NULL, NULL),
(26, '22', '2', NULL, NULL, NULL),
(27, '22', '3', NULL, NULL, NULL),
(28, '22', '3', NULL, NULL, NULL),
(29, '22', '3', NULL, NULL, NULL),
(30, '22', '3', NULL, NULL, NULL),
(31, '22', '3', NULL, NULL, NULL),
(32, '22', '3', NULL, NULL, NULL),
(33, '22', '3', NULL, NULL, NULL),
(34, '22', '3', NULL, NULL, NULL),
(35, '22', '3', NULL, NULL, NULL),
(36, '22', '3', NULL, NULL, NULL),
(37, '22', '4', NULL, NULL, NULL),
(38, '22', '4', NULL, NULL, NULL),
(39, '22', '4', NULL, NULL, NULL),
(40, '22', '4', NULL, NULL, NULL),
(41, '22', '4', NULL, NULL, NULL),
(42, '23', '2', NULL, NULL, NULL),
(43, '23', '3', NULL, NULL, NULL),
(44, '23', '4', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `total_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_at_gateway` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `payments`
--

INSERT INTO `payments` (`id`, `total_value`, `payment_type`, `id_at_gateway`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '30000.00', 'A Vista', '0000000001', '2020-03-29 20:16:00', '2020-03-29 20:16:00', NULL),
(2, '00.00', 'Cartão', '000002', '2020-03-29 22:11:00', '2020-03-29 22:11:00', NULL),
(3, '19300', 'Dinheiro', NULL, '2020-03-31 18:50:07', '2020-03-31 18:50:07', NULL),
(4, '2600', 'Cartão', NULL, '2020-03-31 18:52:22', '2020-03-31 18:52:22', NULL),
(5, '15000', 'Dinheiro', NULL, '2020-03-31 18:52:57', '2020-03-31 18:52:57', NULL),
(6, '2000', 'Boleto', NULL, '2020-03-31 18:53:20', '2020-03-31 18:53:20', NULL),
(7, '26250', 'Parcelado no cartão', NULL, '2020-03-31 20:36:37', '2020-03-31 20:36:37', NULL),
(8, '2350', 'Dinheiro', NULL, '2020-03-31 20:56:13', '2020-03-31 20:56:13', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Macbook Pro 2020', 'Notebook Apple Macbook Pro 2020', '15000.00', '2020-03-29 20:05:00', '2020-03-29 20:05:00', NULL),
(2, 'Notebook Lenovo 2018', 'Notebook Marca Lenovo 2018 ', '2000.00', '2020-03-29 20:06:00', '2020-03-29 20:06:00', NULL),
(3, 'Monitor Lenovo ThinkVision 17', 'Monitor Lenovo ThinkVision HD 17\"', '300.00', '2020-03-29 20:08:00', '2020-03-29 20:08:00', NULL),
(4, 'Mouse Dell', 'Mouse Sem Fio Dell', '50.00', '2020-03-31 20:09:23', '2020-03-31 20:09:23', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Adminer', 'adminer@jwtsystem.com', NULL, '$2y$10$QuQJy/hcMNaxrocoj8uGjuBY7Wh8piEdLnBmMWmq.O6aGgh58xJJ2', NULL, '2020-03-31 02:53:25', '2020-03-31 02:53:25'),
(2, 'user', 'user@relatorio.com.br', NULL, '$2y$10$epDsSOxxdTfU7RB2/leP3usmr/Uu9oyqcAEEsrNBoEEGTn9s8HE5y', NULL, '2020-04-01 00:10:38', '2020-04-01 00:10:38');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
