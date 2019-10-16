-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:5500
-- Время создания: Окт 14 2019 г., 10:03
-- Версия сервера: 5.5.62
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `easymarket`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `mfo` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bank`
--

INSERT INTO `bank` (`id`, `mfo`, `name`, `status`) VALUES
(1, 123, 'bilimman', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `barcodes`
--

CREATE TABLE `barcodes` (
  `id` int(11) NOT NULL,
  `barcode` varchar(150) DEFAULT NULL,
  `good_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `brends`
--

CREATE TABLE `brends` (
  `id` int(11) NOT NULL,
  `factory_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `brend_names`
--

CREATE TABLE `brend_names` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `brend_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `status`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `category_names`
--

CREATE TABLE `category_names` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `citytowns`
--

CREATE TABLE `citytowns` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `citytown_names`
--

CREATE TABLE `citytown_names` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `citytown_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mfo` int(11) NOT NULL,
  `oked` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `director` varchar(255) NOT NULL,
  `client_type_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `client_type`
--

CREATE TABLE `client_type` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `client_type_names`
--

CREATE TABLE `client_type_names` (
  `id` int(11) NOT NULL,
  `client_type_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `currency_rate`
--

CREATE TABLE `currency_rate` (
  `id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `datatime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `klass` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `factories`
--

CREATE TABLE `factories` (
  `id` int(11) NOT NULL,
  `region_id` int(11) NOT NULL DEFAULT '0',
  `citytown_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `factory_names`
--

CREATE TABLE `factory_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `adress` varchar(255) NOT NULL,
  `factory_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `weight` double NOT NULL DEFAULT '1',
  `unit_type_id` int(11) NOT NULL,
  `count_in_case` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brend_id` int(11) NOT NULL,
  `factory_id` int(11) NOT NULL,
  `min_count` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `data_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `good_fotos`
--

CREATE TABLE `good_fotos` (
  `id` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  `good_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `good_names`
--

CREATE TABLE `good_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `shortname` varchar(255) DEFAULT NULL,
  `body` text,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `good_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kashes`
--

CREATE TABLE `kashes` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `kash_names`
--

CREATE TABLE `kash_names` (
  `id` int(11) NOT NULL,
  `kash_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short` varchar(100) NOT NULL,
  `class` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `lang`
--

INSERT INTO `lang` (`id`, `name`, `short`, `class`, `icon`, `status`) VALUES
(0, 'O\'zbekcha', 'uz', 'uz', 'url', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `my_requisites`
--

CREATE TABLE `my_requisites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mfo` int(11) NOT NULL,
  `oked` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `landmark` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `directory` varchar(100) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `kash_id` int(11) NOT NULL,
  `total_sum` double NOT NULL,
  `nds` double NOT NULL,
  `discount` double NOT NULL,
  `order_type_id` int(11) NOT NULL,
  `good_types_count` int(11) NOT NULL,
  `goods_count` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_types`
--

CREATE TABLE `order_types` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `order_type_names`
--

CREATE TABLE `order_type_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `order_type_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `sum` double NOT NULL,
  `datetime` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment_types`
--

CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `payment_type_names`
--

CREATE TABLE `payment_type_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `price_type_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `datetime` datetime DEFAULT NULL,
  `is_currency` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `price_type`
--

CREATE TABLE `price_type` (
  `id` int(11) NOT NULL,
  `percent` double NOT NULL DEFAULT '0',
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `price_type_names`
--

CREATE TABLE `price_type_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price_type_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `printers`
--

CREATE TABLE `printers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `port` varchar(100) NOT NULL,
  `host` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `printer_themes`
--

CREATE TABLE `printer_themes` (
  `id` int(11) NOT NULL,
  `printer_id` int(11) NOT NULL,
  `theme` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `region_names`
--

CREATE TABLE `region_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '10',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `role`, `status`) VALUES
(1, 10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `role_names`
--

CREATE TABLE `role_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `role_id` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `sold_goods`
--

CREATE TABLE `sold_goods` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `price` double NOT NULL,
  `unit_type_id` int(11) NOT NULL,
  `wherehouse_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `unit_type`
--

CREATE TABLE `unit_type` (
  `id` int(11) NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `unit_type_names`
--

CREATE TABLE `unit_type_names` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(150) NOT NULL,
  `unit_type_id` int(11) NOT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fio` varchar(250) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '10',
  `phone` varchar(100) NOT NULL,
  `phone1` varchar(100) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `photo` varchar(250) NOT NULL,
  `telegram` varchar(250) NOT NULL,
  `is_active` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fio`, `role`, `phone`, `phone1`, `lang_id`, `photo`, `telegram`, `is_active`, `online`, `status`) VALUES
(15, 'admin', '$2y$13$aeYVJe/hykA/rWWVhmRtGe.Bi13R.l54/sayCbyaOAvSYp2gSETrS', 'Furqat', 10, '+998999671042', '+998999671042', 0, 'varchar', '@FurqatMasharipov', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `wherehouses`
--

CREATE TABLE `wherehouses` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `seriya` varchar(255) NOT NULL,
  `count` int(11) NOT NULL,
  `wherehouse_group_id` int(11) NOT NULL,
  `expiry_date` date NOT NULL,
  `add_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `retail_price` double NOT NULL,
  `base_price` double NOT NULL,
  `wholesale_price` double NOT NULL,
  `retail_dallor` double NOT NULL,
  `base_dallor` double NOT NULL,
  `wholesale_dallor` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wherehouse_groups`
--

CREATE TABLE `wherehouse_groups` (
  `id` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `wherehouse_group_names`
--

CREATE TABLE `wherehouse_group_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `wherehouse_group_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT '0',
  `note` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mfo` (`mfo`);

--
-- Индексы таблицы `barcodes`
--
ALTER TABLE `barcodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- Индексы таблицы `brends`
--
ALTER TABLE `brends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_id` (`factory_id`);

--
-- Индексы таблицы `brend_names`
--
ALTER TABLE `brend_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brend_id` (`brend_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `category_names`
--
ALTER TABLE `category_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Индексы таблицы `citytowns`
--
ALTER TABLE `citytowns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `region_id_2` (`region_id`);

--
-- Индексы таблицы `citytown_names`
--
ALTER TABLE `citytown_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `citytown_id` (`citytown_id`);

--
-- Индексы таблицы `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mfo` (`mfo`),
  ADD KEY `client_type_id` (`client_type_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Индексы таблицы `client_type`
--
ALTER TABLE `client_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `client_type_names`
--
ALTER TABLE `client_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `client_type_id` (`client_type_id`);

--
-- Индексы таблицы `currency_rate`
--
ALTER TABLE `currency_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `citytown_id` (`citytown_id`);

--
-- Индексы таблицы `factory_names`
--
ALTER TABLE `factory_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_id` (`factory_id`),
  ADD KEY `factory_id_2` (`factory_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_type_id` (`unit_type_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brend_id` (`brend_id`),
  ADD KEY `factory_id` (`factory_id`);

--
-- Индексы таблицы `good_fotos`
--
ALTER TABLE `good_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- Индексы таблицы `good_names`
--
ALTER TABLE `good_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `good_id` (`good_id`);

--
-- Индексы таблицы `kashes`
--
ALTER TABLE `kashes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `kash_names`
--
ALTER TABLE `kash_names`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `my_requisites`
--
ALTER TABLE `my_requisites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `mfo` (`mfo`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `kash_id` (`kash_id`),
  ADD KEY `order_type_id` (`order_type_id`);

--
-- Индексы таблицы `order_types`
--
ALTER TABLE `order_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_type_names`
--
ALTER TABLE `order_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `order_type_id` (`order_type_id`);

--
-- Индексы таблицы `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Индексы таблицы `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `payment_type_names`
--
ALTER TABLE `payment_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Индексы таблицы `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_type_id` (`price_type_id`);

--
-- Индексы таблицы `price_type`
--
ALTER TABLE `price_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `price_type_names`
--
ALTER TABLE `price_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_type_id` (`price_type_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Индексы таблицы `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `printer_themes`
--
ALTER TABLE `printer_themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `printer_id` (`printer_id`);

--
-- Индексы таблицы `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `region_names`
--
ALTER TABLE `region_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Индексы таблицы `role_names`
--
ALTER TABLE `role_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `lang_id_2` (`lang_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- Индексы таблицы `sold_goods`
--
ALTER TABLE `sold_goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `unit_type_id` (`unit_type_id`),
  ADD KEY `wherehouse_id` (`wherehouse_id`);

--
-- Индексы таблицы `unit_type`
--
ALTER TABLE `unit_type`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `unit_type_names`
--
ALTER TABLE `unit_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `lang_id_2` (`lang_id`),
  ADD KEY `unit_type_id` (`unit_type_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `role` (`role`);

--
-- Индексы таблицы `wherehouses`
--
ALTER TABLE `wherehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `wherehouse_group_id` (`wherehouse_group_id`);

--
-- Индексы таблицы `wherehouse_groups`
--
ALTER TABLE `wherehouse_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `wherehouse_group_names`
--
ALTER TABLE `wherehouse_group_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `wherehouse_group_id` (`wherehouse_group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `barcodes`
--
ALTER TABLE `barcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `brends`
--
ALTER TABLE `brends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `brend_names`
--
ALTER TABLE `brend_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `category_names`
--
ALTER TABLE `category_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `citytowns`
--
ALTER TABLE `citytowns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `citytown_names`
--
ALTER TABLE `citytown_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `client_type`
--
ALTER TABLE `client_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `client_type_names`
--
ALTER TABLE `client_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `currency_rate`
--
ALTER TABLE `currency_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `factories`
--
ALTER TABLE `factories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `factory_names`
--
ALTER TABLE `factory_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `good_fotos`
--
ALTER TABLE `good_fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `good_names`
--
ALTER TABLE `good_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `kashes`
--
ALTER TABLE `kashes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `kash_names`
--
ALTER TABLE `kash_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `my_requisites`
--
ALTER TABLE `my_requisites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_types`
--
ALTER TABLE `order_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `order_type_names`
--
ALTER TABLE `order_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `payment_type_names`
--
ALTER TABLE `payment_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `price_type`
--
ALTER TABLE `price_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `price_type_names`
--
ALTER TABLE `price_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `printers`
--
ALTER TABLE `printers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `printer_themes`
--
ALTER TABLE `printer_themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `region_names`
--
ALTER TABLE `region_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `role_names`
--
ALTER TABLE `role_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sold_goods`
--
ALTER TABLE `sold_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `unit_type`
--
ALTER TABLE `unit_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `unit_type_names`
--
ALTER TABLE `unit_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `wherehouses`
--
ALTER TABLE `wherehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `wherehouse_groups`
--
ALTER TABLE `wherehouse_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `wherehouse_group_names`
--
ALTER TABLE `wherehouse_group_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `barcodes`
--
ALTER TABLE `barcodes`
  ADD CONSTRAINT `barcodes_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `brends`
--
ALTER TABLE `brends`
  ADD CONSTRAINT `brends_ibfk_1` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `brend_names`
--
ALTER TABLE `brend_names`
  ADD CONSTRAINT `brend_names_ibfk_1` FOREIGN KEY (`brend_id`) REFERENCES `brends` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `brend_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `category_names`
--
ALTER TABLE `category_names`
  ADD CONSTRAINT `category_names_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `category_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `citytowns`
--
ALTER TABLE `citytowns`
  ADD CONSTRAINT `citytowns_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `citytown_names`
--
ALTER TABLE `citytown_names`
  ADD CONSTRAINT `citytown_names_ibfk_2` FOREIGN KEY (`citytown_id`) REFERENCES `citytowns` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `citytown_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`mfo`) REFERENCES `bank` (`mfo`) ON DELETE NO ACTION,
  ADD CONSTRAINT `clients_ibfk_2` FOREIGN KEY (`client_type_id`) REFERENCES `client_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `clients_ibfk_3` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `client_type_names`
--
ALTER TABLE `client_type_names`
  ADD CONSTRAINT `client_type_names_ibfk_1` FOREIGN KEY (`client_type_id`) REFERENCES `client_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `client_type_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `currency_rate`
--
ALTER TABLE `currency_rate`
  ADD CONSTRAINT `currency_rate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `factories`
--
ALTER TABLE `factories`
  ADD CONSTRAINT `factories_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `factories_ibfk_2` FOREIGN KEY (`citytown_id`) REFERENCES `citytowns` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `factory_names`
--
ALTER TABLE `factory_names`
  ADD CONSTRAINT `factory_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `factory_names_ibfk_2` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `goods_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `goods_ibfk_3` FOREIGN KEY (`brend_id`) REFERENCES `brends` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `goods_ibfk_4` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `good_fotos`
--
ALTER TABLE `good_fotos`
  ADD CONSTRAINT `good_fotos_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `good_names`
--
ALTER TABLE `good_names`
  ADD CONSTRAINT `good_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `good_names_ibfk_2` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `my_requisites`
--
ALTER TABLE `my_requisites`
  ADD CONSTRAINT `my_requisites_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `my_requisites_ibfk_2` FOREIGN KEY (`mfo`) REFERENCES `bank` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`kash_id`) REFERENCES `kashes` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`order_type_id`) REFERENCES `order_types` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `order_type_names`
--
ALTER TABLE `order_type_names`
  ADD CONSTRAINT `order_type_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `order_type_names_ibfk_2` FOREIGN KEY (`order_type_id`) REFERENCES `order_types` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_types` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `payment_type_names`
--
ALTER TABLE `payment_type_names`
  ADD CONSTRAINT `payment_type_names_ibfk_2` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_types` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `payment_type_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`price_type_id`) REFERENCES `price_type` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `price_type_names`
--
ALTER TABLE `price_type_names`
  ADD CONSTRAINT `price_type_names_ibfk_1` FOREIGN KEY (`price_type_id`) REFERENCES `price_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `price_type_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`);

--
-- Ограничения внешнего ключа таблицы `printer_themes`
--
ALTER TABLE `printer_themes`
  ADD CONSTRAINT `printer_themes_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `region_names`
--
ALTER TABLE `region_names`
  ADD CONSTRAINT `region_names_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `region_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `role_names`
--
ALTER TABLE `role_names`
  ADD CONSTRAINT `role_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`),
  ADD CONSTRAINT `role_names_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Ограничения внешнего ключа таблицы `sold_goods`
--
ALTER TABLE `sold_goods`
  ADD CONSTRAINT `sold_goods_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sold_goods_ibfk_2` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sold_goods_ibfk_3` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sold_goods_ibfk_4` FOREIGN KEY (`wherehouse_id`) REFERENCES `wherehouses` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `unit_type_names`
--
ALTER TABLE `unit_type_names`
  ADD CONSTRAINT `unit_type_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `unit_type_names_ibfk_2` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role`) ON DELETE NO ACTION,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`);

--
-- Ограничения внешнего ключа таблицы `wherehouses`
--
ALTER TABLE `wherehouses`
  ADD CONSTRAINT `wherehouses_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouses_ibfk_2` FOREIGN KEY (`wherehouse_group_id`) REFERENCES `wherehouse_groups` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouses_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouses_ibfk_4` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION;

--
-- Ограничения внешнего ключа таблицы `wherehouse_group_names`
--
ALTER TABLE `wherehouse_group_names`
  ADD CONSTRAINT `wherehouse_group_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouse_group_names_ibfk_2` FOREIGN KEY (`wherehouse_group_id`) REFERENCES `wherehouse_groups` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
