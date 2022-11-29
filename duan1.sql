-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2022 lúc 02:59 PM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `accountName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `accountPass` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `accountPhone` int(11) NOT NULL,
  `accountEmail` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `accountImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `accountAddress` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `role` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`id`, `accountName`, `accountPass`, `accountPhone`, `accountEmail`, `accountImage`, `accountAddress`, `role`) VALUES
(4, 'Nguyễn Tuấn Anh', 'anhnt683', 346237897, 'anhntph27773@gmail.com', 'naciso1.jpg', 'Ninh Bình', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `billName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `billAddress` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `billPhone` int(11) NOT NULL,
  `billEmail` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `billPttt` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Thanh toán khi nhận hàng 1. Thanh toán online 2. Thanh toán qua Momo',
  `billStatus` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng đang tiếp nhận 1. Đóng gói 2. Đang giao 3. Giao hàng thành công',
  `billTotal` int(11) NOT NULL,
  `oderDate` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quatity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `accountId`, `billName`, `billAddress`, `billPhone`, `billEmail`, `billPttt`, `billStatus`, `billTotal`, `oderDate`, `quatity`) VALUES
(78, 0, '', '', 0, '', 2, 0, 37550000, '28/11/2022', 8),
(79, 0, 'Nguyễn Đức Thịnh', 'Nam Định', 915220156, 'thinh1420003@gmail.com', 0, 0, 41240000, '28/11/2022', 9),
(80, 0, '', '', 0, '', 2, 0, 2800000, '29/11/2022', 1),
(81, 0, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 2800000, '29/11/2022', 1),
(82, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 2800000, '29/11/2022', 1),
(83, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 14000000, '29/11/2022', 5),
(84, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 26680000, '29/11/2022', 8),
(85, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 33960000, '29/11/2022', 13),
(86, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 48720000, '29/11/2022', 17),
(87, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 29100000, '29/11/2022', 8),
(88, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 43860000, '29/11/2022', 12);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `billdetail`
--

CREATE TABLE `billdetail` (
  `id` int(11) NOT NULL,
  `billId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `productQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `billdetail`
--

INSERT INTO `billdetail` (`id`, `billId`, `productId`, `productQuantity`) VALUES
(43, 70, 21, 0),
(44, 71, 21, 0),
(45, 71, 19, 0),
(46, 72, 21, 0),
(47, 72, 19, 0),
(48, 73, 21, 0),
(49, 74, 21, 0),
(50, 74, 20, 0),
(51, 75, 17, 0),
(52, 75, 19, 0),
(53, 75, 18, 0),
(54, 76, 20, 0),
(55, 76, 19, 0),
(56, 77, 19, 0),
(57, 77, 21, 0),
(58, 78, 19, 3),
(59, 78, 21, 5),
(60, 79, 19, 3),
(61, 79, 21, 5),
(62, 79, 20, 1),
(63, 80, 21, 1),
(64, 81, 21, 1),
(65, 82, 21, 1),
(66, 83, 21, 5),
(67, 84, 20, 4),
(68, 84, 18, 4),
(69, 85, 21, 9),
(70, 85, 16, 4),
(71, 86, 21, 9),
(72, 86, 16, 4),
(73, 86, 20, 4),
(74, 87, 20, 4),
(75, 87, 15, 4),
(76, 88, 20, 8),
(77, 88, 15, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `categoryImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `categoryDesc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`id`, `categoryName`, `categoryImage`, `categoryDesc`) VALUES
(1, 'YSL', 'cate1.jpg', ''),
(2, 'CoCo Chanel', 'cate1.jpg', ''),
(3, 'Gucci', 'cate1.jpg', ''),
(4, 'Dior', 'cate1.jpg', ''),
(5, 'Lelabo', 'cate1.jpg', ''),
(6, 'Nartiso', 'cate1.jpg', ''),
(8, 'Versace', 'cate1.jpg', ''),
(9, 'Dolce', 'cate1.jpg', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productId` int(11) NOT NULL,
  `accountId` int(11) NOT NULL,
  `accountName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `commentDate` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productPrice` double NOT NULL,
  `productDesc` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productCapacity` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `productView` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `productName`, `productImage`, `productPrice`, `productDesc`, `productCapacity`, `quatity`, `productView`, `categoryId`) VALUES
(11, 'Nước Hoa Versace Eros Man EDT 100ml', 'versace1.jpg', 4500000, '', 0, 100, 0, 8),
(12, 'Nước Hoa Le Labo Rose 31 100ml', 'lelabo1.jpg', 5250000, '', 0, 100, 0, 5),
(13, 'Nước Hoa Nữ Gucci Flora Gorgeous Gardenia 100ml', 'gucci1.jpg', 5950000, '', 0, 5, 0, 3),
(14, 'Nước Hoa Nữ Versace Bright EDP, 90ml', 'versace2.jpg', 1680000, '', 0, 100, 0, 3),
(15, 'Nước Hoa Nữ Chanel Gabrielle Essence EDP 100ml', 'chanel2.jpg', 3585000, '', 0, 100, 0, 2),
(16, 'Nước Hoa Nữ Narciso Rodriguez EDP, 90ml', 'naciso1.jpg', 2190000, '', 0, 100, 0, 6),
(17, 'Nước Hoa Gucci Memoire D’une EDP 100ml', 'gucci2.jpg', 2250000, '', 0, 100, 0, 3),
(18, 'Nước Hoa Nam Dior Sauvage EDP 100ml', 'dior1.jpg', 2980000, '', 0, 100, 0, 4),
(19, 'Nước Hoa Le Labo 13 Another 50ml', 'lelabo2.jpg', 7850000, '', 0, 100, 0, 5),
(20, 'Nước Hoa Chanel Coco Noir EDP Cho Nữ 100ml', 'chanel1.jpg', 3690000, '', 0, 100, 0, 2),
(21, 'Nước Hoa Nữ Dior Hypnotic Poison EDT 100ml', 'dior2.jpg', 2800000, '', 0, 5, 0, 4),
(22, 'Nước Hoa Nữ Gucci Bloom EDP For Women 100ml', 'gucci3.jpg', 2900000, '', 0, 0, 0, 3);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
