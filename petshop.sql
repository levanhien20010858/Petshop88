-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th12 14, 2022 lúc 05:06 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `petshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'house'),
(2, 'food'),
(3, 'toiletries'),
(4, 'medicine'),
(5, 'clothes'),
(6, 'plaything'),
(9, 'fertilization'),
(10, 'lifelongfriend');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `classify_id`
--

CREATE TABLE `classify_id` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `classify_id`
--

INSERT INTO `classify_id` (`id`, `name`) VALUES
(1, 'dog'),
(2, 'cat');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_balance` int(20) NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `role_id`, `fullname`, `email`, `password`, `account_balance`, `gender`, `phone_number`, `address`, `thumbnail`, `created_at`, `updated_at`, `deleted`) VALUES
(16, 1, 'Lê Hiển', 'levanhien2k2@gmail.com', '$2y$10$twfC41WkQSvemUTZ3ijJTe7pdvnA6BN5hc4iYoTn5477y7pwUSICq', 130000, 'female', '68686868669696', 'hihihii', '../uploads/dog.jpg', '2022-11-07 20:09:43', '2022-12-14 05:31:43', 1),
(17, 2, 'Lê Hiển', 'levanhien122k2@gmail.com', '$2y$10$QXC4/xeNVwcAxXhz/7s.a.LRcKbUQucdVHK0PbNTTlniG4rc9uuVO', 1300000, NULL, NULL, NULL, '../images/anh.jpg', '2022-11-07 20:10:58', '2022-12-11 02:21:46', 2),
(18, 2, 'ayyyyyyyyyyyyyy', 'levanhienaa@gmail.com', '$2y$10$hWjgk98lThOT.JP10eO.ge8nSnPHFqaEPcZob2H6/jK5hIwENwJWi', 13000000, 'female', '0968023293', 'phenikaa unversity', '../uploads/dog.jpg', '2022-11-08 20:58:28', '2022-12-14 11:05:47', 1),
(19, 2, 'Lê Hiển', 'levanhien2k221@gmail.com', '$2y$10$/hSI004smlNkZTUjPI7dI.BaLs4y/9vRWFSSbWQfyWhO33BcvY9Zu', 130000000, NULL, NULL, NULL, NULL, '2022-11-18 07:58:23', NULL, 1),
(20, 2, '111', 'levanhien2k222@gmail.com', '$2y$10$5xPQt7DKP2TFyi5ToD0ZsOOaTriaRlbktMpg/rMbKqosne/YtvNNe', 10000000, 'female', NULL, 'phenikaa', '../uploads/anh.jpg', '2022-11-18 08:02:56', '2022-11-28 18:34:35', 1),
(21, 2, 'Lê Hiển', 'levanhien22k2@gmail.com', '$2y$10$yMigivx0BOVPu38z9fxJse7PpvDJz8S3xJ4ScD2Z./qGNkJnbP6Cm', 20000000, 'female', '0888888888', 'phenikaa unversity', '../uploads/anh.jpg', '2022-11-18 08:03:58', '2022-11-28 18:40:38', 1),
(24, 2, 'Lê Hiển', 'levanhien2kk2@gmail.com', '$2y$10$IDwZ.Rtgz2RU54.LnVfKOe/pz9UTSBP6a7Mq8HlcBeghrJIjxeNd6', 40000000, NULL, NULL, NULL, NULL, '2022-11-18 08:09:29', NULL, 1),
(30, 2, 'Lê Hiển', 'levanhienadmin@gmail.com', '$2y$10$GydMDIQnxIDeL8IGBYko1O7.qntF5BCNcJGbxLu1VfFTpao7xcXCm', 60000000, NULL, NULL, NULL, NULL, '2022-11-18 08:28:55', NULL, 1),
(31, 2, 'Le Van Hien', 'lelele@gmail.com', '$2y$10$sFkXaSzqwjbNHKl2OkPYW.3WP/jvkK91qTzMJpjxjDeSw1RABUSf.', 0, NULL, NULL, NULL, NULL, '2022-12-14 05:01:36', NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `node` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `oder_date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `fullname`, `email`, `phone_number`, `address`, `node`, `oder_date`, `status`) VALUES
(2, 'LE VAN HIEN', 'levanhienaa@gmail.com', '0968023294', 'aabbcc', 'Thoải mái', '2022-11-03 19:41:15', 1),
(3, 'LE VAN HIEN', 'levanhienaa@gmail.com', '0968023295', 'aabbcc', 'No', '2022-11-03 19:41:15', 3),
(15, 'Lê Hiển', 'levanhienaa@gmail.com', '0968023293', 'phenikaa unversity', 'No message', '2022-12-13 21:30:09', 1),
(16, 'Lê Hiển', 'levanhienaa@gmail.com', '0968023293', 'phenikaa unversity', 'No message', '2022-12-13 21:33:03', 4),
(18, 'Lê Hiển', 'levanhienaa@gmail.com', '0968023293', 'phenikaa unversity', 'No message', '2022-12-13 22:22:15', 4),
(20, 'Le Van Hien', 'lelele@gmail.com', '', '', 'No message', '2022-12-13 23:02:49', 1),
(21, 'Le Van Hien', 'lelele@gmail.com', '', '', 'No message', '2022-12-13 23:03:39', 2),
(24, 'Lê Hiển', 'levanhienaa@gmail.com', '0968023293', 'phenikaa unversity', 'No message', '2022-12-14 01:09:03', 2),
(25, 'Lê Hiển', 'levanhienaa@gmail.com', '0968023293', 'phenikaa unversity', 'No message', '2022-12-14 01:09:10', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `num` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`id`, `order_id`, `product_id`, `price`, `num`) VALUES
(3, 2, 2, 21250, 1),
(4, 3, 1, 22500, 2),
(17, 15, 44, 95000, 3),
(18, 16, 44, 95000, 3),
(20, 18, 28, 500000, 1),
(22, 20, 51, 3500000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trademark_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `thumbnail` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classify_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `sold` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `trademark_id`, `price`, `discount`, `thumbnail`, `classify_id`, `created_at`, `updated_at`, `star`, `sold`) VALUES
(1, 2, 'Pate nước sốt vị thịt bò PEDIGREE Pouch Beef', 2, 25000, 10, 'https://www.petmart.vn/wp-content/uploads/2012/08/pate-cho-cho-nuoc-sot-vi-thit-bo-pedigree-pouch-beef-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 4, 12),
(2, 2, 'Pate cho mèo vị nước sốt cá ngừ WHISKAS Tuna Flavour Sauce', 4, 25000, 15, 'https://www.petmart.vn/wp-content/uploads/2013/05/pate-cho-meo-vi-nuoc-sot-ca-ngu-whiskas-tuna-flavour-sauce1-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 3, 120),
(3, 2, 'Thức ăn cho chó Poodle MKB All Life Stages Formula Nutrition', 3, 295000, 0, 'https://www.petmart.vn/wp-content/uploads/2020/11/thuc-an-cho-cho-poodle-mkb-all-life-stages-formula-nutrition-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 2, 30),
(4, 2, 'Hạt giống trồng cỏ tươi cho mèo BIOLINE Cat Grass Kit', 1, 120000, 0, 'https://www.petmart.vn/wp-content/uploads/2016/04/hat-giong-co-lua-mi-cho-meo-bioline-cat-grass-kit-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 1, 29),
(5, 1, 'Chuồng sắt gấp cho chó mèo PAW Collapsible crate', 6, 500000, 0, 'https://www.petmart.vn/wp-content/uploads/2014/05/chuong-sat-gap-cho-meo-nan-cung-paw-collapsible-crate-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', NULL, 17),
(6, 1, 'Chuồng chó mèo bằng sắt sàn nhựa AUPET Dog Cage', 7, 1350000, 0, 'https://www.petmart.vn/wp-content/uploads/2014/04/chuong-cho-meo-bang-sat-san-nhua-aupet-dog-cage-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', NULL, 11),
(7, 1, 'Balo đựng chó mèo dáng hộp mặt lưới LOFFE Pet Space Backpack', 8, 565000, 0, 'https://www.petmart.vn/wp-content/uploads/2020/10/balo-dung-cho-meo-dang-hop-mat-luoi-loffe-pet-space-backpack123-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', NULL, 22),
(8, 1, 'Balo đựng chó mèo phi hành gia LOFFE Panoramic', 8, 525000, 0, 'https://www.petmart.vn/wp-content/uploads/2021/08/balo-dung-cho-meo-phi-hanh-gia-loffe-panoramic-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', NULL, 77),
(25, 3, 'Khay vệ sinh cho chó MAKAR Dog Toilet Trays Small', 6, 220000, 10, 'https://www.petmart.vn/wp-content/uploads/2016/07/khay-ve-sinh-cho-cho-makar-dog-toilet-trays-small-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 99),
(26, 3, 'Khay vệ sinh cho chó thành cao IRIS TRT500', 8, 395000, 10, 'https://www.petmart.vn/wp-content/uploads/2019/04/ve-sinh-cho-cho-thanh-cao-iris-trt500-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 1, 1332),
(27, 3, 'Khay vệ sinh cho chó MAKAR Dog Toilet Trays Large', 8, 365000, 10, 'https://www.petmart.vn/wp-content/uploads/2021/07/khay-ve-sinh-cho-cho-makar-dog-toilet-trays-large-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 1, 999),
(28, 3, 'Khay vệ sinh cho mèo MAKAR Deodorized Cat Litter Box', 2, 500000, 0, 'https://www.petmart.vn/wp-content/uploads/2018/09/ve-sinh-cho-meo-makar-deodorized-cat-litter-box-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 4, 999),
(29, 3, 'Nhà vệ sinh cho mèo hình tai mèo AUPPET', 6, 500000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/11/nha-ve-sinh-cho-meo-hinh-tai-meo-aupet-size-s-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(30, 3, 'Nhà vệ sinh cho mèo hình tròn AUPET Cat Little Box', 11, 680000, 10, 'https://www.petmart.vn/wp-content/uploads/2019/05/nha-ve-sinh-cho-meo-hinh-tron-aupet-cat-little-box-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 3, 329),
(31, 4, 'Thuốc nhỏ gáy trị ve rận cho chó dưới 10kg MERIAL Frontline Plus', 4, 210000, 0, 'https://www.petmart.vn/wp-content/uploads/2013/02/thuoc-nho-gay-tri-ve-ran-cho-cho-duoi-10kg-merial-frontline-plus-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(32, 4, 'Thuốc nhỏ gáy trị ve rận cho chó 10-20kg MERIAL Frontline Plus', 8, 230000, 0, 'https://www.petmart.vn/wp-content/uploads/2013/02/nho-gay-tri-ve-ran-cho-cho-10-20kg-merial-frontline-plus-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(33, 4, 'Thuốc trị ve rận NEXGARD cho chó từ 2 – 4kg', 11, 500000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/05/thuoc-tri-ve-ran-nexgard-cho-cho-tu-2-4kg-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(34, 4, 'Vòng cổ trị ve rận cho mèo BIOLINE Flea and Tick Collar for Cats', 1, 50000, 0, 'https://www.petmart.vn/wp-content/uploads/2016/04/vong-co-tri-ve-ran-cho-meo-bioline-flea-and-tick-collar-for-cats-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(35, 4, 'Thuốc nhỏ gáy trị ve rận cho mèo MERIAL Frontline Plus', 2, 250000, 0, 'https://www.petmart.vn/wp-content/uploads/2013/02/thuoc-nho-gay-tri-ve-ran-cho-meo-merial-frontline-plus-for-cats-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(36, 4, 'Vòng cổ trị ve rận cho mèo Magic Herbal Collar For Cat', 3, 50000, 0, 'https://www.petmart.vn/wp-content/uploads/2020/11/vong-co-chong-ve-ran-cho-meo-magic-herbal-collar-cat-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(37, 5, 'Quần áo cho chó mèo AMBABY PET 2JXF216', 12, 180000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/06/quan-ao-cho-cho-meo-ambaby-pet-2jxf216-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(38, 5, 'Quần áo cho chó mèo AMBABY PET 2JXF164', 12, 245000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/06/quan-ao-cho-cho-meo-ambaby-pet-2jxf164-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(39, 5, 'Quần áo cho chó mèo AMBABY PET 2JXF167', 12, 160000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/06/quan-ao-cho-cho-meo-ambaby-pet-2jxf167-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(40, 5, 'Yếm cho chó mèo kèm dây dắt Ambaby 1JXS043', 12, 255000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/06/yem-cho-cho-meo-kem-day-dat-ambaby-1jxs043-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(41, 5, 'Yếm cho chó mèo kèm dây dắt AMBABY PET 1JXS058', 12, 255000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/06/yem-cho-cho-meo-kem-day-dat-ambaby-pet-1jxs058-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(42, 5, 'Quần áo cho chó mèo AMBABY PET 2JXF241', 12, 160000, 0, 'https://www.petmart.vn/wp-content/uploads/2019/06/quan-ao-cho-cho-meo-ambaby-pet-2jxf241-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(43, 6, 'Đồ chơi dây thừng cho chó BOBO', 12, 35000, 0, 'https://www.petmart.vn/wp-content/uploads/2013/06/do-choi-day-thung-cho-cho-bobo-1031-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(44, 6, 'Đồ chơi cho chó gặm bằng cao su PAW Rubber Dog Toy Jingle Knobby Dumbbell', 2, 95000, 0, 'https://www.petmart.vn/wp-content/uploads/2015/11/do-choi-cho-cho-gam-bang-cao-su-soleil-rubber-dog-toy-jingle-knobby-dumbbell-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(45, 6, 'Đồ chơi cho chó bằng cao su hình xương PAW', 11, 75000, 0, 'https://www.petmart.vn/wp-content/uploads/2015/11/do-choi-cho-cho-hinh-xuong-cao-su-soleil-rubber-dog-toy-small-solid-bone-400x400.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(46, 6, '\r\nĐồ chơi cần câu cho mèo PAW vui nhộn', 6, 75000, 0, 'https://www.petmart.vn/wp-content/uploads/2013/07/do-choi-can-cau-cho-meo-paw-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(47, 6, 'Đồ chơi cho mèo bằng cói BOBO hình cá', 6, 75000, 0, 'https://www.petmart.vn/wp-content/uploads/2015/09/do-choi-cho-meo-bang-coi-bobo-hinh-ca-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(48, 6, 'Đồ chơi cho mèo bằng cói PAW có bàn cào', 11, 75000, 0, 'https://www.petmart.vn/wp-content/uploads/2020/11/do-choi-cho-meo-bang-coi-paw-co-ban-cao-400x400.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(49, 9, 'Phối giống Phốc Sóc - Parti Pomeranian - Nhập Từ Thái Lan', 6, 2000000, 0, 'https://product.hstatic.net/1000238938/product/907e00e4b4ab4da4ad87a2e10fe08059_11b71798fcf54f648083be4f4bd5911d_medium.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(50, 9, 'Phối giống: Teacup Poodle Trắng', 2, 2000000, 0, 'https://product.hstatic.net/1000238938/product/af29b722ad634cb2b5a429ca32f7a915_ce8048449bb5479c87de09e3933e1257_medium.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(51, 9, 'Phối giống: Frenchbull màu Blue siêu hiếm', 1, 3500000, 0, 'https://product.hstatic.net/1000238938/product/69cb0e6416f54f3e8d76f26574750e5d_ed2be55315f94d3bb223da56c17edd26_medium.png', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(52, 9, 'Phối giống: Mèo Anh Lông Ngắn Màu Black Golden Ny12 - Nhập Từ Nga', 8, 5000000, 0, 'https://product.hstatic.net/1000238938/product/z1929565450173_6c20747a6a4277ef90474e0c3781a387_9a5d71fdd33a48b58f41ac6e8c753b5c_medium.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(53, 9, 'Phối giống: Mèo Munchkin Silver', 6, 5000000, 0, 'https://product.hstatic.net/1000238938/product/1_c130ee5be1e14d8494a5c70110833a30_medium.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(54, 10, 'Mèo Anh lông ngắn màu NY11 (Cái) - Chích ngừa 1 mũi', 2, 15000000, 0, 'https://product.hstatic.net/1000238938/product/26f10df8ea47487d825cea2d911f68c3_7c824005c33640f99ad7ebcf8ec96b04_medium.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(55, 10, 'Sphynx không lông ', 8, 15000000, 0, 'https://dogily.vn/wp-content/uploads/2020/02/meo-khong-long-sphynx-2-thang-tuoi-bicolor-45.jpg', 2, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(56, 10, 'Husky Sibir đen trắng ', 3, 15000000, 0, 'https://dogily.vn/wp-content/uploads/2019/12/cho-husky-mau-den-trang-2-thang-tuoi-12.jpg', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9),
(57, 10, 'Shiba Inu vàng trắng', 10, 15000000, 0, 'https://dogily.vn/wp-content/uploads/2022/11/shiba-inu-vang-trang-2-thang-tuoi-duc-1.png', 1, '2022-11-03 19:00:45', '2022-11-03 19:50:45', 5, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `productdetail`
--

CREATE TABLE `productdetail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `origin` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `taste` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expiry` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) DEFAULT NULL,
  `ageofuse` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `node` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `productdetail`
--

INSERT INTO `productdetail` (`id`, `product_id`, `origin`, `taste`, `expiry`, `weight`, `ageofuse`, `node`) VALUES
(1, 4, 'USA', 'Cỏ', '12 tháng', 12, 'Trên 3 tháng', 'nhiều quá bị nghiện'),
(2, 3, 'CHINA', 'KHÔNG', '12 tháng', 2000, 'Trên 2 tháng', 'Không'),
(3, 2, 'United States', 'Sốt cá ngừ', '12 tháng', 85, 'Trên 1 tháng', 'Không'),
(4, 1, 'KOREA', 'Thịt bò', '12 tháng', 100, 'Trên 3 tháng', 'ngon'),
(5, 5, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(6, 6, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(7, 7, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(8, 8, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(9, 25, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(10, 26, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(11, 27, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(12, 28, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(13, 29, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(14, 30, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(15, 31, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(16, 32, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(17, 33, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(18, 34, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(19, 35, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(20, 36, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(21, 37, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(22, 38, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(23, 39, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(24, 40, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(25, 41, 'USA', 'Cỏ', '12 tháng', 1200, 'No', 'No'),
(26, 42, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(27, 43, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(28, 44, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(29, 45, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(30, 46, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(31, 47, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(32, 48, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(33, 49, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(34, 50, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(35, 51, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(36, 52, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(37, 53, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(38, 54, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(39, 55, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(40, 56, 'USA', 'Cỏ', '', 1200, 'No', 'No'),
(41, 57, 'USA', 'Cỏ', '', 1200, 'No', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'customer');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trademark`
--

CREATE TABLE `trademark` (
  `id` int(11) NOT NULL,
  `trademark_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_trademark` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `trademark`
--

INSERT INTO `trademark` (`id`, `trademark_name`, `thumbnail_trademark`) VALUES
(1, 'BIOLINE', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(2, 'Pedigree', 'https://1000logos.net/wp-content/uploads/2020/09/Pedigree-Logo.jpg'),
(3, 'MKB', 'https://mkb.vn/wp-content/uploads/2021/03/mkb-logo.png'),
(4, 'Whiskas', 'https://upload.wikimedia.org/wikipedia/en/c/c9/Whiskas_logo.png'),
(6, 'PAW', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(7, 'AUPET', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(8, 'LOFFE', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(9, 'MAKAR', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(10, 'IRIS', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(11, 'NEXGARD', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png'),
(12, 'AMBABY PET', 'https://sbpetshop.com/wp-content/uploads/2021/11/BIOLINE.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `classify_id`
--
ALTER TABLE `classify_id`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD KEY `role_id` (`role_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `orderdetail_ibfk_1` (`order_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `classify_id` (`classify_id`),
  ADD KEY `trademark_id` (`trademark_id`);

--
-- Chỉ mục cho bảng `productdetail`
--
ALTER TABLE `productdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trademark`
--
ALTER TABLE `trademark`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `classify_id`
--
ALTER TABLE `classify_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT cho bảng `productdetail`
--
ALTER TABLE `productdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `trademark`
--
ALTER TABLE `trademark`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_10` FOREIGN KEY (`trademark_id`) REFERENCES `trademark` (`id`),
  ADD CONSTRAINT `product_ibfk_9` FOREIGN KEY (`classify_id`) REFERENCES `classify_id` (`id`);

--
-- Các ràng buộc cho bảng `productdetail`
--
ALTER TABLE `productdetail`
  ADD CONSTRAINT `productdetail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
