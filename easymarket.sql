-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:5500
-- Generation Time: Oct 23, 2019 at 09:57 AM
-- Server version: 10.3.13-MariaDB
-- PHP Version: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easymarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id` int(11) NOT NULL,
  `mfo` int(11) NOT NULL DEFAULT 0,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id`, `mfo`, `name`, `status`) VALUES
(0, 0, 'Boshqa', 1),
(2, 3, 'test', 10);

-- --------------------------------------------------------

--
-- Table structure for table `barcodes`
--

CREATE TABLE `barcodes` (
  `id` int(11) NOT NULL,
  `barcode` varchar(150) DEFAULT '',
  `good_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barcodes`
--

INSERT INTO `barcodes` (`id`, `barcode`, `good_id`, `status`) VALUES
(1, '123321152', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `brends`
--

CREATE TABLE `brends` (
  `id` int(11) NOT NULL,
  `factory_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brends`
--

INSERT INTO `brends` (`id`, `factory_id`, `status`, `name`) VALUES
(0, 0, 1, 'Boshqa'),
(1, 1, 1, 'Profit-model');

-- --------------------------------------------------------

--
-- Table structure for table `brend_names`
--

CREATE TABLE `brend_names` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `brend_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'catigory_photo.jpg',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `photo`, `status`) VALUES
(0, 'Boshqalar', 'catigory_photo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category_names`
--

CREATE TABLE `category_names` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `citytowns`
--

CREATE TABLE `citytowns` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1,
  `region_id` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `citytowns`
--

INSERT INTO `citytowns` (`id`, `name`, `code`, `status`, `region_id`) VALUES
(0, 'Tuman', '123456', 1, 0),
(1, 'Hazorazp', '110112', 1, 1),
(5, 'test', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `citytown_names`
--

CREATE TABLE `citytown_names` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `citytown_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mfo` int(11) NOT NULL DEFAULT 0,
  `oked` varchar(255) NOT NULL DEFAULT '',
  `account_number` varchar(255) NOT NULL DEFAULT '',
  `address` varchar(255) NOT NULL DEFAULT '',
  `landmark` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(100) NOT NULL DEFAULT '',
  `phone1` varchar(100) NOT NULL DEFAULT '',
  `telegram` varchar(255) NOT NULL DEFAULT '',
  `director` varchar(255) NOT NULL DEFAULT '',
  `client_type_id` int(11) NOT NULL DEFAULT 0,
  `bank_id` int(11) NOT NULL DEFAULT 0,
  `notes` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `mfo`, `oked`, `account_number`, `address`, `landmark`, `phone`, `phone1`, `telegram`, `director`, `client_type_id`, `bank_id`, `notes`, `status`) VALUES
(0, 'Boshqa', 0, '', '', '', '', '', '', '', '', 0, 0, '', 1),
(1, 'Anvar Quvandiqov', 0, '1233213212332', '1231231231', 'Karvak shovot', 'landmark', '+998999664660', '', '@Anvar', 'Anvar', 1, 0, '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_type`
--

CREATE TABLE `client_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client_type`
--

INSERT INTO `client_type` (`id`, `name`, `type`, `status`) VALUES
(0, 'Boshqalar', 0, 1),
(1, 'Xaridor', 0, 1),
(2, 'Ulgirji xaridor', 0, 1),
(3, 'Diller', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_type_names`
--

CREATE TABLE `client_type_names` (
  `id` int(11) NOT NULL,
  `client_type_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `currency_rate`
--

CREATE TABLE `currency_rate` (
  `id` int(11) NOT NULL,
  `rate` double NOT NULL,
  `datatime` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT 0,
  `klass` varchar(255) NOT NULL DEFAULT '',
  `color` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `currency_rate`
--

INSERT INTO `currency_rate` (`id`, `rate`, `datatime`, `user_id`, `klass`, `color`, `status`) VALUES
(1, 9450, '2019-10-19 14:46:21', 0, '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `begin` datetime NOT NULL DEFAULT current_timestamp(),
  `end` datetime NOT NULL DEFAULT current_timestamp(),
  `good_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `parcent` double NOT NULL DEFAULT 0,
  `sum` double NOT NULL DEFAULT 0,
  `count` int(11) NOT NULL DEFAULT 1,
  `free_good_id` int(11) DEFAULT NULL,
  `free_good_cnt` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discounts`
--

INSERT INTO `discounts` (`id`, `name`, `begin`, `end`, `good_id`, `user_id`, `parcent`, `sum`, `count`, `free_good_id`, `free_good_cnt`, `status`) VALUES
(1, 'aksiyaqu', '2019-10-19 14:52:45', '2020-02-07 00:00:00', 1, 0, 10, 25000, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `factories`
--

CREATE TABLE `factories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL DEFAULT 0,
  `citytown_id` int(11) NOT NULL DEFAULT 0,
  `address` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `factories`
--

INSERT INTO `factories` (`id`, `name`, `region_id`, `citytown_id`, `address`, `status`) VALUES
(0, 'Boshqa', 0, 0, 'address', 1),
(1, 'Texno madel MJCH', 1, 1, 'Hazorasp shaharcha oybek mahalla O\'zbekiston kichasi 3 uy', 1),
(3, 'test', 0, 0, 'test', 10),
(4, 'yangilandi', 0, 0, 'asdasdasdasd', 10),
(5, 'asdad', 0, 0, 'asdasdasd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `factory_names`
--

CREATE TABLE `factory_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `adress` varchar(255) NOT NULL,
  `factory_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `shortname` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL DEFAULT '',
  `photo1` varchar(255) NOT NULL DEFAULT 'good_photo1.jpg',
  `photo2` varchar(255) NOT NULL DEFAULT 'good_photo2.jpg',
  `photo3` varchar(255) NOT NULL DEFAULT 'good_photo3.jpg',
  `weight` double NOT NULL DEFAULT 1,
  `unit_type_id` int(11) NOT NULL,
  `count_in_case` int(11) NOT NULL DEFAULT 1,
  `category_id` int(11) NOT NULL DEFAULT 0,
  `brend_id` int(11) NOT NULL DEFAULT 0,
  `factory_id` int(11) NOT NULL DEFAULT 0,
  `min_count` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `data_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `name`, `shortname`, `body`, `photo1`, `photo2`, `photo3`, `weight`, `unit_type_id`, `count_in_case`, `category_id`, `brend_id`, `factory_id`, `min_count`, `status`, `data_time`) VALUES
(1, 'Boshqa', 'Boshqa', 'Boshqa tovar spiskda yoq', 'good_photo1.jpg', 'good_photo2.jpg', 'good_photo3.jpg', 1, 0, 1, 0, 0, 0, 1, 1, '2019-10-19 14:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `good_fotos`
--

CREATE TABLE `good_fotos` (
  `id` int(11) NOT NULL,
  `url` varchar(150) NOT NULL,
  `good_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `good_names`
--

CREATE TABLE `good_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `shortname` varchar(255) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `good_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kashes`
--

CREATE TABLE `kashes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL DEFAULT '',
  `code` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kashes`
--

INSERT INTO `kashes` (`id`, `name`, `address`, `code`, `status`) VALUES
(1, 'Kassa No1', 'This market', 'have not code', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kash_names`
--

CREATE TABLE `kash_names` (
  `id` int(11) NOT NULL,
  `kash_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `short` varchar(100) NOT NULL,
  `class` varchar(255) DEFAULT 'getay',
  `icon` varchar(255) DEFAULT 'getay',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `name`, `short`, `class`, `icon`, `status`) VALUES
(0, 'Русский', 'ru', 'uz', 'url', 0),
(1, 'O\'zbekcha', 'uz', 'getay', 'getay', 0),
(2, 'Ўзбекча', 'krl', 'getay', 'getay', 1),
(3, 'English', 'en', 'getay', 'getay', 0);

-- --------------------------------------------------------

--
-- Table structure for table `my_requisites`
--

CREATE TABLE `my_requisites` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mfo` int(11) NOT NULL DEFAULT 0,
  `qrcode` varchar(255) NOT NULL DEFAULT '',
  `oked` varchar(255) NOT NULL DEFAULT '',
  `account_number` varchar(255) NOT NULL DEFAULT '',
  `adress` varchar(255) NOT NULL DEFAULT '',
  `landmark` varchar(255) NOT NULL DEFAULT '',
  `phone` varchar(100) NOT NULL DEFAULT '',
  `director` varchar(100) NOT NULL DEFAULT '',
  `lang_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_requisites`
--

INSERT INTO `my_requisites` (`id`, `name`, `mfo`, `qrcode`, `oked`, `account_number`, `adress`, `landmark`, `phone`, `director`, `lang_id`, `status`) VALUES
(1, 'Texno Model MCHJ', 0, 'http://texno-model.uz', 'oked', 'accaunt number', 'Hazorasp', 'landmark', '+998 93 560 22 90', 'Turg\'un Hujayev', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `kash_id` int(11) NOT NULL,
  `total_sum` double NOT NULL,
  `nds` double NOT NULL DEFAULT 0,
  `discount` double NOT NULL DEFAULT 0,
  `order_type_id` int(11) NOT NULL DEFAULT 0,
  `good_types_count` int(11) NOT NULL DEFAULT 1,
  `goods_count` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `datetime`, `user_id`, `client_id`, `kash_id`, `total_sum`, `nds`, `discount`, `order_type_id`, `good_types_count`, `goods_count`, `status`) VALUES
(1, '2019-10-19 14:49:19', 0, 1, 1, 2500000000, 0, 0, 1, 1, 10001, 1),
(2, '2019-10-19 14:49:19', 0, 0, 1, 275000, 0, 0, 2, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_types`
--

CREATE TABLE `order_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` text NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1,
  `code` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_types`
--

INSERT INTO `order_types` (`id`, `name`, `note`, `status`, `code`) VALUES
(1, 'Kirim', 'Tovar kirim qilish', 1, 'codeku'),
(2, 'Sotuv', 'Tovarni sotish', 1, 'bilimman');

-- --------------------------------------------------------

--
-- Table structure for table `order_type_names`
--

CREATE TABLE `order_type_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `order_type_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `sum` double NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type_id`, `sum`, `datetime`, `status`) VALUES
(1, 1, 3, 25000000000, '2019-10-19 14:57:44', 1),
(2, 2, 1, 275000, '2019-10-19 14:57:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment_types`
--

CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `percent` double NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment_types`
--

INSERT INTO `payment_types` (`id`, `name`, `percent`, `status`) VALUES
(1, 'Naqt', 0, 1),
(2, 'Plastik', 0, 1),
(3, 'Pul o\'tkazish', 0, 1),
(4, 'test', 15, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment_type_names`
--

CREATE TABLE `payment_type_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `payment_type_id` int(11) NOT NULL,
  `lang_id` int(11) DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `price_type_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `datetime` datetime DEFAULT current_timestamp(),
  `is_currency` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `good_id`, `price_type_id`, `price`, `datetime`, `is_currency`, `status`) VALUES
(1, 1, 4, 25, '2019-10-19 14:39:20', 1, 1),
(2, 1, 4, 250000, '2019-10-19 14:39:20', 0, 1),
(3, 1, 0, 275000, '2019-10-19 14:39:20', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `price_type`
--

CREATE TABLE `price_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `percent` double NOT NULL DEFAULT 0,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price_type`
--

INSERT INTO `price_type` (`id`, `name`, `percent`, `status`) VALUES
(0, 'Chakana', 20, 1),
(1, 'Ulgirji', 10, 1),
(4, 'Kirim', 0, 1),
(5, 'test', 20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `price_type_names`
--

CREATE TABLE `price_type_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price_type_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `printers`
--

CREATE TABLE `printers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `port` varchar(100) NOT NULL,
  `host` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `printers`
--

INSERT INTO `printers` (`id`, `name`, `ip`, `port`, `host`, `note`, `status`) VALUES
(1, 'Xprinter X58', '192.168.0.22', ':5505', 'www.profit-model.uz', 'Gahir sokini ishlab chiqaruvchi apparat', 1),
(2, 'deleted', 'ad;lksdaq', ';las;d', ';lkasd;', 'lk;lkd;lksad;ka;lsdka;sdkl;asld\r\n\r\n\r\n\r\n\r\nasdasdasd\r\nasd\r\nas\r\nda\r\nsd\r\nasd', 10),
(3, 'yaxshiqu', 'jlk', 'jljl', 'kj', 'ljdlk', 10),
(4, 'blkabla', 'blabla', 'blabla', 'lbalba', 'lkabsldkhasdaksdjalksdja\r\nsd\r\na[s]d\r\nasdasd\r\nasda', 10);

-- --------------------------------------------------------

--
-- Table structure for table `printer_themes`
--

CREATE TABLE `printer_themes` (
  `id` int(11) NOT NULL,
  `printer_id` int(11) NOT NULL,
  `theme` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `printer_themes`
--

INSERT INTO `printer_themes` (`id`, `printer_id`, `theme`, `status`) VALUES
(1, 1, 'isaj;dklualskjdlalksdasasd\r\nasdasdasda\r\nsda\r\nsd\r\nasd\r\nas\r\nda\r\nsd\r\nas\r\nda\r\nsd\r\nasdask;jdhalksjdhajkshd;a\r\nasdkjahsdlkjhlaksjda\r\nas;odhaskjdhaklsjdahlsjkda\r\nask;djhlaksjdhlasdasd', 1),
(2, 1, 'asdasdasdasd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `code` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`id`, `name`, `status`, `code`) VALUES
(0, 'Viloyat', 1, '110107'),
(1, 'Xorazm', 1, '110107'),
(3, 'test', 10, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `region_names`
--

CREATE TABLE `region_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `region_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 10,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `role`, `status`) VALUES
(0, 'SuperUser', 100, 1),
(1, 'Direktor', 90, 1),
(2, 'Foydalanuvchi', 10, 1),
(4, 'Sotuvchi', 30, 1),
(5, 'Yetkazib beruvchi', 20, 1),
(6, 'Bugalter', 70, 1),
(7, 'Moliya bo\'lim boshlig\'i', 80, 1),
(8, 'Xisobchi', 60, 1),
(9, 'Omborchi', 40, 1),
(10, 'test', 0, 10);

-- --------------------------------------------------------

--
-- Table structure for table `role_names`
--

CREATE TABLE `role_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `role_id` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sold_goods`
--

CREATE TABLE `sold_goods` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `count` int(11) NOT NULL DEFAULT 1,
  `price` double NOT NULL DEFAULT 0,
  `unit_type_id` int(11) NOT NULL DEFAULT 0,
  `wherehouse_id` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sold_goods`
--

INSERT INTO `sold_goods` (`id`, `order_id`, `good_id`, `count`, `price`, `unit_type_id`, `wherehouse_id`, `status`) VALUES
(1, 1, 1, 10001, 2500000000, 0, 1, 1),
(2, 2, 1, 1, 275000, 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `unit_type`
--

CREATE TABLE `unit_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `unit_type`
--

INSERT INTO `unit_type` (`id`, `name`, `status`) VALUES
(0, 'Dona', 1),
(1, 'Kg', 1),
(2, 'Pochka', 1),
(3, 'Gramm', 1),
(4, 'Blok', 1),
(6, 'test', 10);

-- --------------------------------------------------------

--
-- Table structure for table `unit_type_names`
--

CREATE TABLE `unit_type_names` (
  `id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(150) NOT NULL,
  `unit_type_id` int(11) NOT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `fio` varchar(250) NOT NULL DEFAULT 'foydalanuvchi',
  `role` int(11) NOT NULL DEFAULT 10,
  `phone` varchar(100) NOT NULL DEFAULT '',
  `phone1` varchar(100) NOT NULL DEFAULT '',
  `lang_id` int(11) NOT NULL DEFAULT 1,
  `photo` varchar(250) NOT NULL DEFAULT 'avatar.jpg',
  `telegram` varchar(250) NOT NULL DEFAULT '',
  `is_active` int(11) NOT NULL DEFAULT 1,
  `online` int(11) NOT NULL DEFAULT 0,
  `barcode` varchar(255) NOT NULL DEFAULT '',
  `qrcode` varchar(255) NOT NULL DEFAULT '',
  `auth_key` varchar(255) NOT NULL DEFAULT '',
  `client_id` int(11) NOT NULL,
  `password_md5` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fio`, `role`, `phone`, `phone1`, `lang_id`, `photo`, `telegram`, `is_active`, `online`, `barcode`, `qrcode`, `auth_key`, `client_id`, `password_md5`, `status`) VALUES
(0, 'admin', '$2y$13$5jYPsWRhUZbsLEglYhPBn.aUg0EqjMpMZZ978vXHNzS3ypU5XmEky', 'Furqatbek Masharipov', 100, '+998999671042', '', 1, '2019-10-22-11-31-47.png', '@FurqatMasharipov', 1, 0, '123321456654', 'this is qrcode', '', 0, '$2y$13$aeYVJe/hykA/rWWVhmRtGe.Bi13R.l54/sayCbyaOAvSYp2gSETrS', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wherehouses`
--

CREATE TABLE `wherehouses` (
  `id` int(11) NOT NULL,
  `good_id` int(11) NOT NULL,
  `seriya` varchar(255) NOT NULL DEFAULT '',
  `count` int(11) NOT NULL DEFAULT 1,
  `wherehouse_group_id` int(11) NOT NULL DEFAULT 0,
  `expiry_date` date NOT NULL DEFAULT current_timestamp(),
  `add_date` datetime NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `retail_price` double NOT NULL,
  `base_price` double NOT NULL DEFAULT 0,
  `wholesale_price` double NOT NULL DEFAULT 0,
  `retail_dallor` double NOT NULL DEFAULT 0,
  `base_dallor` double NOT NULL DEFAULT 0,
  `wholesale_dallor` double NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wherehouses`
--

INSERT INTO `wherehouses` (`id`, `good_id`, `seriya`, `count`, `wherehouse_group_id`, `expiry_date`, `add_date`, `user_id`, `client_id`, `retail_price`, `base_price`, `wholesale_price`, `retail_dallor`, `base_dallor`, `wholesale_dallor`, `status`) VALUES
(1, 1, 'seriya', 10000, 1, '2019-10-09', '2019-10-19 14:44:35', 0, 1, 275000, 250000, 265000, 30, 25, 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wherehouse_groups`
--

CREATE TABLE `wherehouse_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `note` text NOT NULL DEFAULT '',
  `adress` varchar(255) NOT NULL DEFAULT '',
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wherehouse_groups`
--

INSERT INTO `wherehouse_groups` (`id`, `name`, `note`, `adress`, `status`) VALUES
(1, 'Rasta', 'Bu yerda sotiladigan tovarlar saqlanadi yani bu yer rasta', 'adress', 1),
(2, 'Sklad', 'Podvaldaki sklad bu yer', 'podval', 1),
(3, 'test', 'test', 'test', 10);

-- --------------------------------------------------------

--
-- Table structure for table `wherehouse_group_names`
--

CREATE TABLE `wherehouse_group_names` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `wherehouse_group_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL DEFAULT 0,
  `note` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mfo` (`mfo`);

--
-- Indexes for table `barcodes`
--
ALTER TABLE `barcodes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- Indexes for table `brends`
--
ALTER TABLE `brends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_id` (`factory_id`);

--
-- Indexes for table `brend_names`
--
ALTER TABLE `brend_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brend_id` (`brend_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_names`
--
ALTER TABLE `category_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `citytowns`
--
ALTER TABLE `citytowns`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `region_id_2` (`region_id`);

--
-- Indexes for table `citytown_names`
--
ALTER TABLE `citytown_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `citytown_id` (`citytown_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mfo` (`mfo`),
  ADD KEY `client_type_id` (`client_type_id`),
  ADD KEY `bank_id` (`bank_id`);

--
-- Indexes for table `client_type`
--
ALTER TABLE `client_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_type_names`
--
ALTER TABLE `client_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `client_type_id` (`client_type_id`);

--
-- Indexes for table `currency_rate`
--
ALTER TABLE `currency_rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `free_good_id` (`free_good_id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `factories`
--
ALTER TABLE `factories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `citytown_id` (`citytown_id`);

--
-- Indexes for table `factory_names`
--
ALTER TABLE `factory_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `factory_id` (`factory_id`),
  ADD KEY `factory_id_2` (`factory_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `unit_type_id` (`unit_type_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `brend_id` (`brend_id`),
  ADD KEY `factory_id` (`factory_id`);

--
-- Indexes for table `good_fotos`
--
ALTER TABLE `good_fotos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`);

--
-- Indexes for table `good_names`
--
ALTER TABLE `good_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `good_id` (`good_id`);

--
-- Indexes for table `kashes`
--
ALTER TABLE `kashes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kash_names`
--
ALTER TABLE `kash_names`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `my_requisites`
--
ALTER TABLE `my_requisites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `mfo` (`mfo`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `kash_id` (`kash_id`),
  ADD KEY `order_type_id` (`order_type_id`);

--
-- Indexes for table `order_types`
--
ALTER TABLE `order_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_type_names`
--
ALTER TABLE `order_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `order_type_id` (`order_type_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Indexes for table `payment_types`
--
ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_type_names`
--
ALTER TABLE `payment_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `payment_type_id` (`payment_type_id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_type_id` (`price_type_id`),
  ADD KEY `good_id` (`good_id`);

--
-- Indexes for table `price_type`
--
ALTER TABLE `price_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_type_names`
--
ALTER TABLE `price_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `price_type_id` (`price_type_id`),
  ADD KEY `lang_id` (`lang_id`);

--
-- Indexes for table `printers`
--
ALTER TABLE `printers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `printer_themes`
--
ALTER TABLE `printer_themes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `printer_id` (`printer_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region_names`
--
ALTER TABLE `region_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `region_id` (`region_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `role_names`
--
ALTER TABLE `role_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `lang_id_2` (`lang_id`),
  ADD KEY `role_id_2` (`role_id`);

--
-- Indexes for table `sold_goods`
--
ALTER TABLE `sold_goods`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `unit_type_id` (`unit_type_id`),
  ADD KEY `wherehouse_id` (`wherehouse_id`);

--
-- Indexes for table `unit_type`
--
ALTER TABLE `unit_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_type_names`
--
ALTER TABLE `unit_type_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `lang_id_2` (`lang_id`),
  ADD KEY `unit_type_id` (`unit_type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `role` (`role`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `wherehouses`
--
ALTER TABLE `wherehouses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `good_id` (`good_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `wherehouse_group_id` (`wherehouse_group_id`);

--
-- Indexes for table `wherehouse_groups`
--
ALTER TABLE `wherehouse_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wherehouse_group_names`
--
ALTER TABLE `wherehouse_group_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang_id` (`lang_id`),
  ADD KEY `wherehouse_group_id` (`wherehouse_group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `barcodes`
--
ALTER TABLE `barcodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `brends`
--
ALTER TABLE `brends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brend_names`
--
ALTER TABLE `brend_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category_names`
--
ALTER TABLE `category_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `citytowns`
--
ALTER TABLE `citytowns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `citytown_names`
--
ALTER TABLE `citytown_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_type`
--
ALTER TABLE `client_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client_type_names`
--
ALTER TABLE `client_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `currency_rate`
--
ALTER TABLE `currency_rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `factories`
--
ALTER TABLE `factories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `factory_names`
--
ALTER TABLE `factory_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `good_fotos`
--
ALTER TABLE `good_fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `good_names`
--
ALTER TABLE `good_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kashes`
--
ALTER TABLE `kashes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kash_names`
--
ALTER TABLE `kash_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `my_requisites`
--
ALTER TABLE `my_requisites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_types`
--
ALTER TABLE `order_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_type_names`
--
ALTER TABLE `order_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment_types`
--
ALTER TABLE `payment_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment_type_names`
--
ALTER TABLE `payment_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `price_type`
--
ALTER TABLE `price_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `price_type_names`
--
ALTER TABLE `price_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `printers`
--
ALTER TABLE `printers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `printer_themes`
--
ALTER TABLE `printer_themes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `region_names`
--
ALTER TABLE `region_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `role_names`
--
ALTER TABLE `role_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sold_goods`
--
ALTER TABLE `sold_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `unit_type`
--
ALTER TABLE `unit_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unit_type_names`
--
ALTER TABLE `unit_type_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wherehouses`
--
ALTER TABLE `wherehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wherehouse_groups`
--
ALTER TABLE `wherehouse_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wherehouse_group_names`
--
ALTER TABLE `wherehouse_group_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barcodes`
--
ALTER TABLE `barcodes`
  ADD CONSTRAINT `barcodes_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `brends`
--
ALTER TABLE `brends`
  ADD CONSTRAINT `brends_ibfk_1` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `brend_names`
--
ALTER TABLE `brend_names`
  ADD CONSTRAINT `brend_names_ibfk_1` FOREIGN KEY (`brend_id`) REFERENCES `brends` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `brend_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `category_names`
--
ALTER TABLE `category_names`
  ADD CONSTRAINT `category_names_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `category_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `citytowns`
--
ALTER TABLE `citytowns`
  ADD CONSTRAINT `citytowns_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `citytown_names`
--
ALTER TABLE `citytown_names`
  ADD CONSTRAINT `citytown_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `citytown_names_ibfk_2` FOREIGN KEY (`citytown_id`) REFERENCES `citytowns` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `clients`
--
ALTER TABLE `clients`
  ADD CONSTRAINT `clients_ibfk_1` FOREIGN KEY (`mfo`) REFERENCES `bank` (`mfo`) ON DELETE NO ACTION,
  ADD CONSTRAINT `clients_ibfk_2` FOREIGN KEY (`client_type_id`) REFERENCES `client_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `clients_ibfk_3` FOREIGN KEY (`bank_id`) REFERENCES `bank` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `client_type_names`
--
ALTER TABLE `client_type_names`
  ADD CONSTRAINT `client_type_names_ibfk_1` FOREIGN KEY (`client_type_id`) REFERENCES `client_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `client_type_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `currency_rate`
--
ALTER TABLE `currency_rate`
  ADD CONSTRAINT `currency_rate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `discounts`
--
ALTER TABLE `discounts`
  ADD CONSTRAINT `discounts_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `discounts_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `discounts_ibfk_3` FOREIGN KEY (`free_good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `factories`
--
ALTER TABLE `factories`
  ADD CONSTRAINT `factories_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `factories_ibfk_2` FOREIGN KEY (`citytown_id`) REFERENCES `citytowns` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `factory_names`
--
ALTER TABLE `factory_names`
  ADD CONSTRAINT `factory_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `factory_names_ibfk_2` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `goods_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `goods_ibfk_3` FOREIGN KEY (`brend_id`) REFERENCES `brends` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `goods_ibfk_4` FOREIGN KEY (`factory_id`) REFERENCES `factories` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `good_fotos`
--
ALTER TABLE `good_fotos`
  ADD CONSTRAINT `good_fotos_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `good_names`
--
ALTER TABLE `good_names`
  ADD CONSTRAINT `good_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `good_names_ibfk_2` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `my_requisites`
--
ALTER TABLE `my_requisites`
  ADD CONSTRAINT `my_requisites_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `my_requisites_ibfk_2` FOREIGN KEY (`mfo`) REFERENCES `bank` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`kash_id`) REFERENCES `kashes` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`order_type_id`) REFERENCES `order_types` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `order_type_names`
--
ALTER TABLE `order_type_names`
  ADD CONSTRAINT `order_type_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `order_type_names_ibfk_2` FOREIGN KEY (`order_type_id`) REFERENCES `order_types` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `payments_ibfk_2` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_types` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `payment_type_names`
--
ALTER TABLE `payment_type_names`
  ADD CONSTRAINT `payment_type_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `payment_type_names_ibfk_2` FOREIGN KEY (`payment_type_id`) REFERENCES `payment_types` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `prices`
--
ALTER TABLE `prices`
  ADD CONSTRAINT `prices_ibfk_1` FOREIGN KEY (`price_type_id`) REFERENCES `price_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `prices_ibfk_2` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `price_type_names`
--
ALTER TABLE `price_type_names`
  ADD CONSTRAINT `price_type_names_ibfk_1` FOREIGN KEY (`price_type_id`) REFERENCES `price_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `price_type_names_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`);

--
-- Constraints for table `printer_themes`
--
ALTER TABLE `printer_themes`
  ADD CONSTRAINT `printer_themes_ibfk_1` FOREIGN KEY (`printer_id`) REFERENCES `printers` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `region_names`
--
ALTER TABLE `region_names`
  ADD CONSTRAINT `region_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `region_names_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `role_names`
--
ALTER TABLE `role_names`
  ADD CONSTRAINT `role_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`),
  ADD CONSTRAINT `role_names_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `sold_goods`
--
ALTER TABLE `sold_goods`
  ADD CONSTRAINT `sold_goods_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sold_goods_ibfk_2` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sold_goods_ibfk_3` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `sold_goods_ibfk_4` FOREIGN KEY (`wherehouse_id`) REFERENCES `wherehouses` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `unit_type_names`
--
ALTER TABLE `unit_type_names`
  ADD CONSTRAINT `unit_type_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `unit_type_names_ibfk_2` FOREIGN KEY (`unit_type_id`) REFERENCES `unit_type` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role`) REFERENCES `roles` (`role`) ON DELETE NO ACTION,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `user_ibfk_3` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `wherehouses`
--
ALTER TABLE `wherehouses`
  ADD CONSTRAINT `wherehouses_ibfk_1` FOREIGN KEY (`good_id`) REFERENCES `goods` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouses_ibfk_2` FOREIGN KEY (`wherehouse_group_id`) REFERENCES `wherehouse_groups` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouses_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouses_ibfk_4` FOREIGN KEY (`client_id`) REFERENCES `clients` (`id`) ON DELETE NO ACTION;

--
-- Constraints for table `wherehouse_group_names`
--
ALTER TABLE `wherehouse_group_names`
  ADD CONSTRAINT `wherehouse_group_names_ibfk_1` FOREIGN KEY (`lang_id`) REFERENCES `lang` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `wherehouse_group_names_ibfk_2` FOREIGN KEY (`wherehouse_group_id`) REFERENCES `wherehouse_groups` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
