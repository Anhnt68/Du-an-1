-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2022 lúc 06:26 AM
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
(4, 'Nguyễn Tuấn Anh', 'anhnt683', 346237897, 'anhntph27773@gmail.com', 'account.png', 'Ninh Bình', 1);

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
  `billPttt` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Thanh toán khi nhận hàng 1. Thanh toán qua Momo',
  `billStatus` tinyint(4) NOT NULL DEFAULT 0 COMMENT '0. Đơn hàng đang tiếp nhận 1. Đóng gói 2. Đang giao 3. Giao hàng thành công',
  `billTotal` int(11) NOT NULL,
  `oderDate` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quatity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `accountId`, `billName`, `billAddress`, `billPhone`, `billEmail`, `billPttt`, `billStatus`, `billTotal`, `oderDate`, `quatity`) VALUES
(79, 0, 'Nguyễn Đức Thịnh', 'Nam Định', 915220156, 'thinh1420003@gmail.com', 0, 0, 41240000, '28/11/2022', 9),
(81, 0, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 2800000, '29/11/2022', 1),
(82, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 2800000, '29/11/2022', 1),
(83, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 14000000, '29/11/2022', 5),
(84, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 26680000, '29/11/2022', 8),
(85, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 33960000, '29/11/2022', 13),
(86, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 48720000, '29/11/2022', 17),
(87, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 29100000, '29/11/2022', 8),
(88, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 43860000, '29/11/2022', 12),
(89, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 18450000, '04/12/2022', 5),
(90, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 18450000, '04/12/2022', 5),
(91, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 22140000, '04/12/2022', 6),
(92, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 22140000, '04/12/2022', 6),
(93, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 2250000, '05/12/2022', 1),
(94, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 47845000, '05/12/2022', 20),
(95, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 47845000, '05/12/2022', 20),
(97, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 4500000, '06/12/2022', 2),
(98, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 11070000, '09/12/2022', 3),
(99, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 20010000, '09/12/2022', 6),
(100, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 20010000, '09/12/2022', 6),
(101, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 20010000, '09/12/2022', 6),
(102, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 20010000, '09/12/2022', 6);

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
(77, 88, 15, 4),
(78, 89, 20, 5),
(79, 90, 20, 5),
(80, 91, 20, 6),
(81, 92, 20, 6),
(82, 93, 17, 1),
(83, 94, 17, 9),
(84, 94, 15, 1),
(85, 94, 21, 1),
(86, 94, 16, 8),
(87, 94, 20, 1),
(88, 95, 17, 9),
(89, 95, 15, 1),
(90, 95, 21, 1),
(91, 95, 16, 8),
(92, 95, 20, 1),
(93, 96, 17, 1),
(94, 97, 17, 2),
(95, 98, 20, 3),
(96, 99, 20, 3),
(97, 99, 18, 3),
(98, 100, 20, 3),
(99, 100, 18, 3),
(100, 101, 20, 3),
(101, 101, 18, 3),
(102, 102, 20, 3),
(103, 102, 18, 3);

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
(1, 'YSL', 'cate2.jpg', '\"'),
(2, 'CoCo Chanel', 'chanel2.jpg', '\"'),
(3, 'Gucci', 'gucci1.jpg', '\"'),
(4, 'Dior', 'dior2.jpg', '\"'),
(5, 'Lelabo', 'catelelabo.jpg', '\"'),
(6, 'Nartiso', 'catenatiso.jpg', '\"'),
(8, 'Versace', 'versace2.jpg', '\"\"\"'),
(9, 'Dolce', 'cate4.jpg', '');

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

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `content`, `productId`, `accountId`, `accountName`, `commentDate`) VALUES
(1, 'fewfsfs', 16, 23, 'cong', '04/12/2022'),
(2, 'dsdsds', 20, 4, 'Nguyễn Tuấn Anh', '04/12/2022'),
(3, 'good', 20, 4, 'Nguyễn Tuấn Anh', '04/12/2022'),
(4, 'good\r\n', 16, 4, 'Nguyễn Tuấn Anh', '04/12/2022'),
(5, 'aaa', 22, 4, 'Nguyễn Tuấn Anh', ' 00:40:37 - 05/12/2022'),
(6, 'sản phẩm tốt', 13, 4, 'Nguyễn Tuấn Anh', ' 21:04:36 - 05/12/2022'),
(7, 'san phẩm tốt\r\n', 11, 4, 'Nguyễn Tuấn Anh', ' 21:54:53 - 09/12/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productPrice` double NOT NULL,
  `productDesc` mediumtext COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productCapacity` int(11) NOT NULL,
  `quatity` int(11) NOT NULL,
  `productView` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `productName`, `productImage`, `productPrice`, `productDesc`, `productCapacity`, `quatity`, `productView`, `categoryId`) VALUES
(11, 'Nước Hoa Versace Eros EDT 100ml', 'versace1.jpg', 4500000, '<p><strong>Đặc điểm của&nbsp;</strong><strong>Versace</strong><strong>&nbsp;Eros Eau De Toilette</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Versace</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Italia</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:</strong>&nbsp;Aurelien Guichard</li>\r\n	<li><strong>Thời gian ra mắt:&nbsp;</strong>2012</li>\r\n	<li><strong>D&ograve;ng:</strong>&nbsp;EDT &ndash; Eau De Toilette</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>Aromatic Fougere &ndash; Hương thảo mộc</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>Nam t&iacute;nh, gợi cảm, quyến rũ</li>\r\n	<li><strong>Thời gian lưu hương:&nbsp;</strong>L&acirc;u, từ 7 &ndash; 12 tiếng</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Xa, tỏa hương trong v&ograve;ng 2m trở lại.</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Tr&aacute;i chanh, Tr&aacute;i t&aacute;o xanh, Bạc h&agrave;</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hương Ambroxan, Hoa phong lữ, Đậu Tonka</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Cỏ Vetiver, Madagascar Vanilla, Địa y, Gỗ tuyết t&ugrave;ng</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng</strong>: Đ&ocirc;ng, Xu&acirc;n, Thu, Hạ, Ng&agrave;y &ndash; Đ&ecirc;m</li>\r\n</ul>\r\n\r\n<h2>Huyền thoại kinh điển của Versace &ndash; Nước hoa Versace Eros 100ml</h2>\r\n\r\n<h3>Versace Eros Eau De Toilette</h3>\r\n\r\n<p><strong>Nước hoa nam Versace Eros 100ml</strong>&nbsp;ra mắt tr&igrave;nh l&agrave;ng v&agrave;o năm 2012, do ch&iacute;nh b&agrave;n tay của nh&agrave; s&aacute;ng tạo Aurelien Guichard. Lấy cảm hứng từ thần thoại Hy Lạp,&nbsp;<strong>Versace Eros 100ml</strong>&nbsp;xuất hiện với một vẻ đẹp cổ k&iacute;nh, xanh m&aacute;t. Hương thơm của thảo mộc phần n&agrave;o thể hiện sự m&atilde;nh liệt, thu h&uacute;t của ph&aacute;i mạnh.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2020/08/eros-nuoc-hoa-nam.png\" style=\"height:303px; width:700px\" /></p>\r\n\r\n<h3>&Acirc;m hưởng phương Đ&ocirc;ng đầy mạnh mẽ của Versace Eros EDT</h3>\r\n\r\n<p><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-versace-eros-eau-de-toilette/\"><strong>Versace Eros Eau De Toilette</strong></a>&nbsp;tập trung khơi gợi v&agrave; thể hiện những kh&aacute;t khao v&agrave; đam m&ecirc; m&atilde;nh liệt tiềm ẩn. Để mở đầu sự mạnh mẽ đ&atilde; được thể hiện một c&aacute;ch tinh tế qua tinh dầu chanh, t&aacute;o xanh v&agrave; bạc h&agrave;. Nốt hương giữa sử dụng hương Ambroxan nhẹ dịu h&ograve;a với c&aacute;i ngọt của đậu Tonka v&agrave; hoa phong lữ. N&oacute; được coi như một lớp hương nền n&acirc;ng đỡ cả chuỗi hương trong sự dịu &ecirc;m, nhẹ nh&agrave;ng. C&agrave;ng về cuối sự mềm mại của hương Vanilla h&ograve;a quyện với gỗ tuyết t&ugrave;ng l&agrave;m gia tăng sự ấm &aacute;p. Trong khi đ&oacute; cỏ Vetiver v&agrave; địa y lại gi&uacute;p cho hương thơm trở n&ecirc;n gợi cảm, cuốn h&uacute;t bất ngờ.</p>\r\n\r\n<p>Với cảm hứng từ thần thoại Hy Lạp n&ecirc;n Versace lu&ocirc;n c&oacute; thiết kế đậm chất nghệ thuật nh&acirc;n loại. H&igrave;nh d&aacute;ng của&nbsp;<strong>nước hoa Versace&nbsp;</strong><strong>Eros 100ml</strong>&nbsp;được nhiều người v&iacute; von l&agrave; chuẩn &ldquo;DNA của Versace&rdquo;. Kho&aacute;c l&ecirc;n m&igrave;nh lớp &aacute;o xanh ngọc chi tiết Medusa đ&aacute;nh mạnh v&agrave;o thị gi&aacute;c t&ocirc;n l&ecirc;n sự ma mị, thần thoại. C&ugrave;ng kiểu họa tiết cổ được đi&ecirc;u khắc tinh xảo chứng minh được sức h&uacute;t &ldquo;khủng&rdquo; của chai&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/\"><strong>nước hoa&nbsp;</strong></a>n&agrave;y. Đặc biệt biểu tượng Medusa mạ v&agrave;ng được khắc tr&ecirc;n nắp chai thể hiện h&oacute;a sự sang trọng. Nh&igrave;n<strong>&nbsp;Versace&nbsp;</strong><strong>Eros EDT</strong><strong>&nbsp;</strong>giống như một bảo bối quyền năng, gia tăng sức mạnh cho chủ nh&acirc;n của m&igrave;nh. Khiến cho chủ nh&acirc;n của m&igrave;nh chạm tới đỉnh của sự nam t&iacute;nh, gợi cảm v&agrave; đầy thu h&uacute;t.</p>\r\n\r\n<p><img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2020/08/nuoc-hoa-nam-Versace-Eros.jpg\" style=\"height:432px; width:700px\" /></p>\r\n', 0, 100, 1, 8),
(12, 'Nước Hoa Le Labo Rose 31', 'lelabo1.jpg', 5250000, '<table cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Thương hiệu&nbsp;&nbsp;</strong></td>\r\n			<td>:</td>\r\n			<td><strong>Le Labo</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Giới t&iacute;nh</strong></td>\r\n			<td>:</td>\r\n			<td>Nước hoa unisex</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nồng độ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong></td>\r\n			<td>:</td>\r\n			<td><a href=\"https://vperfume.vn/collections/nong-do-eau-de-parfum\" target=\"_self\">EDP)</a></td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nh&oacute;m hương</strong></td>\r\n			<td>:</td>\r\n			<td>Hương hoa c&oacute; gỗ-xạ hương</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>M&ugrave;i hương ch&iacute;nh</strong></td>\r\n			<td>:</td>\r\n			<td>Hoa hồng,&nbsp;Cỏ hương b&agrave;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ lưu hương&nbsp;&nbsp;</strong></td>\r\n			<td>:</td>\r\n			<td>L&acirc;u - 7h đến 12h</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Độ toả hương</strong></td>\r\n			<td>:</td>\r\n			<td>Gần - Trong v&ograve;ng một c&aacute;nh tay</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Phong c&aacute;ch&nbsp;&nbsp;&nbsp;</strong></td>\r\n			<td>:</td>\r\n			<td>Thanh lịch, Quyến rũ, Thu h&uacute;t</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Xuất xứ&nbsp;</strong></td>\r\n			<td>:</td>\r\n			<td>Mỹ</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Năm ph&aacute;t h&agrave;nh&nbsp;</strong></td>\r\n			<td>:</td>\r\n			<td>2006</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Nước hoa unisex<strong>&nbsp;Rose 31 EDP</strong>&nbsp;của thương hiệu Le Labo<strong>&nbsp;</strong>l&agrave; nước hoa hương hoa cỏ gỗ - xạ hương d&agrave;nh cho nam v&agrave; nữ đ&atilde; ra mắt v&agrave;o năm 2006. Chuy&ecirc;n gia nước hoa chế tạo ra hương thơm n&agrave;y l&agrave; Daphne Bugey. Mục ti&ecirc;u của Rose 31 rất r&otilde; r&agrave;ng: thay đổi hoa hồng Grasse nổi tiếng th&agrave;nh một hương thơm quả quyết mạnh mẽ của đ&agrave;n &ocirc;ng. Với Rose 31, thương hiệu Le Labo đ&atilde; tiết lộ sự pha trộn rất gợi cảm giữa m&ugrave;i hương của gỗ v&agrave; hương cay nồng, v&agrave; tất cả tập trung xoay quanh lo&agrave;i hoa hồng v&ocirc; c&ugrave;ng tuyệt vời của ng&agrave;nh nước hoa.</p>\r\n\r\n<p><img alt=\"\" src=\"https://file.hstatic.net/1000339918/file/le-labo-rose-31-edp__5__abe9bf6f0090433a8fd610e0b0f42298_grande.jpg\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<h2><em><strong>M&ocirc; tả m&ugrave;i hương&nbsp;Le Labo Rose 31 EDP</strong></em></h2>\r\n\r\n<p>Nước hoa&nbsp;<strong>Le Labo Rose 31 EDP</strong>&nbsp;c&oacute; 31 th&agrave;nh phần nguy&ecirc;n liệu, theo đuổi trường ph&aacute;i tranh s&aacute;ng tranh tối rất kh&oacute; đo&aacute;n định hay nắm bắt, cũng ko thể ph&acirc;n biệt giới t&iacute;nh khi ai đ&oacute; c&oacute; hương vị n&agrave;y tr&ecirc;n da, bởi l&ecirc;n da nam Rose 31 manly gai g&oacute;c b&iacute; ẩn thu h&uacute;t đầy c&aacute; t&iacute;nh, c&ograve;n l&ecirc;n da nữ Rose 31 lại yểu điệu mềm mại nhung lụa tới tột c&ugrave;ng...</p>\r\n\r\n<p>Le Labo Rose 31 EDP&nbsp;- m&ugrave;i hương best seller của h&atilde;ng- chủ điểm hoa hồng h&ograve;a quyện c&ugrave;ng gỗ v&agrave; gia vị. Tuy nhi&ecirc;n, khi xịt Rose 31 l&ecirc;n da thịt, v&agrave; để m&ugrave;i hương quyện lấy cơ thể m&igrave;nh, bạn sẽ kh&ocirc;ng t&agrave;i n&agrave;o v&agrave; kh&ocirc;ng hiểu nổi tại sao Le Labo lại gọi đ&acirc;y l&agrave; hương hồng. Rose 31 ho&agrave;n to&agrave;n kh&ocirc;ng hồng e thẹn hay hồng yểu điệu. Rose 31 l&agrave; thứ hương thơm thật &ldquo;kh&ocirc;ng phải&rdquo;. Hương hồng rất nhẹ v&agrave; tinh tế, h&ograve;a quyện c&ugrave;ng gỗ v&agrave; gia vị, quấn qu&yacute;t tr&ecirc;n da, vừa trong s&aacute;ng lại vừa khơi gợi. M&ugrave;i hương ngửi &ldquo;v&atilde;&rdquo;, kh&ocirc; the xong lại ướt &aacute;t.&nbsp;</p>\r\n\r\n<p>Rose 31 khiến người ta li&ecirc;n tưởng đến m&ugrave;i hương cơ thể người ta khi hưng phấn. M&ugrave;i hương vừa l&atilde;ng mạn, lại vừa suồng s&atilde;. Tự nhi&ecirc;n, dẫn dụ, phảng phất, vấn v&iacute;t. Vừa khiến người ta t&ograve; m&ograve; h&aacute;o hức, lại vừa đem lại cho người ngửi cảm gi&aacute;c sảng kho&aacute;i dễ chịu</p>\r\n\r\n<p><img alt=\"\" src=\"https://file.hstatic.net/1000339918/file/le-labo-rose-31-edp__1__36ffe60505f54e649cf794f9bd24c343_grande.jpg\" style=\"height:600px; width:600px\" /></p>\r\n', 0, 100, 0, 5),
(13, 'Nước Hoa Nữ Gucci Flora Gorgeous Gardenia ', 'gucci1.jpg', 5950000, '<p><strong>Đặc điểm của nước hoa Gucci Flora Gorgeous Gardenia Eau De Parfum</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Gucci</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Italia</li>\r\n	<li><strong>Thời gian ra mắt:</strong>&nbsp;2021</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>&nbsp;hoa cỏ &ndash; Floral</li>\r\n	<li><strong>Lưu hương:</strong>&nbsp;Trong v&ograve;ng từ 3 tiếng đến 6 tiếng t&ugrave;y vị tr&iacute; xịt</li>\r\n	<li><strong>Tỏa hương:&nbsp;</strong>Trong khoảng c&aacute;ch 1 c&aacute;nh tay</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hoa l&ecirc;</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>D&agrave;nh d&agrave;nh, hoa nh&agrave;i</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Đường n&acirc;u, Hoắc hương</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Nữ t&iacute;nh, ngọt ng&agrave;o, gợi cảm</li>\r\n	<li><strong>Thời điểm sử dụng:</strong>&nbsp;Xu&acirc;n &ndash; Hạ &ndash; Thu. V&agrave;o ban ng&agrave;y</li>\r\n</ul>\r\n\r\n<h2><strong>Nước hoa Gucci Flora Gorgeous Gardenia</strong>&nbsp;<strong>EDP 100ml</strong></h2>\r\n\r\n<h3><strong>Gucci Flora Gorgeous Gardenia Eau De Parfum</strong></h3>\r\n\r\n<p><strong>Gucci Flora Gorgeous Gardenia Eau De Parfum</strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-gucci-flora-gorgeous-gardenia-edp-100ml/\">&nbsp;</a>l&agrave; chai nước hoa phi&ecirc;n bản mới nhất của d&ograve;ng Gorgeous Gardenia. Một lần nữa sản phẩm lại đem đến một lời giải th&iacute;ch, một kh&iacute;a cạnh kh&aacute;c của thế c&aacute;c lo&agrave;i hoa. Một kh&iacute;a cạnh đầy m&atilde;nh liệt m&agrave; v&ocirc; c&ugrave;ng ngọt ng&agrave;o, cuốn h&uacute;t người đối diện m&atilde;i kh&ocirc;ng cưỡng được.&nbsp;<strong>Gucci Flora Gorgeous Gardenia EDP 100ml</strong>&nbsp;tr&agrave;n đầy năng lượng tươi s&aacute;ng đem đến cho c&aacute;c n&agrave;ng sự gọi cảm v&agrave; nữ t&iacute;nh.</p>\r\n\r\n<p><img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2022/01/Gucci-Flora-Gorgeous-Gardenia-Eau-De-Parfum-100ml.png\" style=\"height:583px; width:900px\" /></p>\r\n\r\n<h3><strong>Gucci Flora Gorgeous Gardenia Eau De Parfum</strong></h3>\r\n\r\n<p><strong>Gucci Flora Gorgeous Gardenia Eau De Parfum</strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-gucci-flora-gorgeous-gardenia-edp/\"><strong>&nbsp;</strong></a>ra mắt thị trường nước hoa v&agrave;o năm 2021. Mang trong m&igrave;nh nồng độ tinh chất Eau De Parfum từ 5%-12%, l&agrave; phi&ecirc;n bản c&oacute; nồng độ EDP mới nhất. Giống như c&aacute;c sản phẩm thuộc d&ograve;ng Flora Gorgeous Gardenia, trong chai nước hoa n&agrave;y l&agrave; sự kết hợp ngọt ng&agrave;o của c&aacute;c loại hoa ngập hương hoa v&agrave; sắc m&agrave;u.&nbsp;<strong>Gucci Flora 2021</strong><strong><strong>&nbsp;</strong></strong>cho n&agrave;ng một n&eacute;t hương ngọt ng&agrave;o, tươi s&aacute;ng. L&agrave;m to&aacute;t l&ecirc;n được n&eacute;t đẹp nhẹ nh&agrave;ng nhưng cũng kh&ocirc;ng k&eacute;m phần cuốn h&uacute;t của mỗi người phụ nữ.</p>\r\n\r\n<h3><strong>Hương thơm tươi s&aacute;ng, ngọt ng&agrave;o thổi hồn cho Gucci Flora Gorgeous Gardenia EDP 100ml</strong></h3>\r\n\r\n<p><strong>Flora Gorgeous Gardenia EDP 100ml</strong>&nbsp;tỏa ra hương thơm dẫn lối n&agrave;ng đến với khu vườn tr&agrave;n ngập sắc hương hoa. Hoa l&ecirc; thuộc tầng hương đầu ti&ecirc;n, tỏa ra sự nhẹ nh&agrave;ng, trong trẻo, kh&ocirc;ng hề thơm gắt. M&agrave; thay v&agrave;o đ&oacute; l&agrave; hương ngọt ng&agrave;o kh&oacute; cưỡng. Nốt hương tr&aacute;i tim v&acirc;y quanh bởi sự tinh khiết, ngọt ng&agrave;o được tỏa ra bởi tinh t&uacute;y của hoa nh&agrave;i. Hương hoa d&agrave;nh d&agrave;nh nổi trội nằm ở giữa trung t&acirc;m, tỏa ra sự th&uacute; vị, ngọt ng&agrave;o tươi s&aacute;ng. Sự kết hợp của hương gỗ trầm ấm c&ugrave;ng đường n&acirc;u ngọt ng&agrave;o, thơm ngậy hương thơm vấn vương m&atilde;i tr&ecirc;n l&agrave;n da của n&agrave;ng.</p>\r\n\r\n<p>Lần n&agrave;o Gucci cũng tạo ra bất ngờ bởi sự kết hợp t&agrave;i t&igrave;nh những sắc hương hoa của m&igrave;nh, v&agrave; lần n&agrave;y với<strong>&nbsp;Gucci Flora Gorgeous Gardenia EDP100ml&nbsp;</strong>cũng vậy. Hương thơm nữ t&iacute;nh xen lẫn ngọt ng&agrave;o nhưng kh&ocirc;ng hề thiếu đi phần l&ocirc;i cuốn gi&uacute;p n&agrave;ng th&ecirc;m phần nữ t&iacute;nh, gợi cảm. Trong v&ocirc; v&agrave;n sản phẩm ngập sắc hương th&igrave; d&ograve;ng sản phẩm n&agrave;y vẫn nổi bật l&ecirc;n n&eacute;t thu h&uacute;t rất ri&ecirc;ng.<strong>&nbsp;Gucci Flora Gorgeous Gardenia Eau De Parfum 100 ml&nbsp;</strong>len lỏi v&agrave;o tầng da của n&agrave;ng, gi&uacute;p n&agrave;ng được bao bọc bởi m&ugrave;i hương quyến rũ</p>\r\n', 0, 5, 3, 0),
(14, 'Nước Hoa Nữ Versace Bright EDP 90ml', 'versace2.jpg', 1680000, '<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Versace.</li>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>&Yacute;.</li>\r\n	<li><strong>Thời gian ra mắt:&nbsp;</strong>2013</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:</strong>&nbsp;Alberto Morillas.</li>\r\n	<li><strong>D&ograve;ng:</strong>&nbsp;Eau De Parfum (EDP).</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>Hương hoa cỏ tr&aacute;i c&acirc;y.</li>\r\n	<li><strong>Phong c&aacute;ch:&nbsp;</strong>Nữ t&iacute;nh, hiện đại, gợi cảm.</li>\r\n	<li><strong>Thời gian lưu hương:&nbsp;</strong>L&acirc;u &ndash; 7 giờ đến 12 giờ.</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Gần, tỏa hương trong v&ograve;ng một c&aacute;nh tay.</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Quả Yuzu, Quả lựu, Hương nước.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hoa mẫu đơn, Hoa sen, Quả m&acirc;m x&ocirc;i, Hoa mộc lan.</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Hổ ph&aacute;ch, Xạ hương, Gỗ gụ.</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng</strong>: Xu&acirc;n, H&egrave;, Ng&agrave;y, Đ&ecirc;m.</li>\r\n</ul>\r\n\r\n<h2>Nước hoa Versace Bright Crystal Absolu Eau De Parfum 90ml</h2>\r\n\r\n<h3>Nước hoa Versace Bright Crystal</h3>\r\n\r\n<p>Năm 2006, Versace đ&atilde; khuynh đảo giới nước hoa nữ bởi c&aacute;i t&ecirc;n Bright Crystal. Tiếp bước th&agrave;nh c&ocirc;ng, thương hiệu Versace đến từ xứ sở thời trang &Yacute; đ&atilde; bắt tay với Euroitalia v&agrave; qua b&agrave;n tay s&aacute;ng chế của Alberto Morillas danh tiếng cho ra đời&nbsp;Nước hoa Versace Bright Crystal. Được coi l&agrave; &ldquo;phi&ecirc;n bản m&atilde;nh liệt hơn&rdquo; theo lời của chủ tịch Euroitalia &ndash; Giovanni Sgariboldi,<a href=\"https://theperfume.vn/san-pham/nuoc-hoa-nu/nuoc-hoa-versace-nu/\"><strong>&nbsp;</strong></a>vỏ hồng đậm n&agrave;y quả thực l&agrave; lời hối đ&aacute;p lại bao ước nguyện v&agrave; kh&aacute;t khao của những kh&aacute;ch h&agrave;ng kh&oacute; t&iacute;nh nhất.</p>\r\n\r\n<p><img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2018/10/versace-dong-bright-crystal-absolu-edp-90ml.png\" style=\"height:600px; width:600px\" /></p>\r\n\r\n<p><strong>Nước hoa Versace Bright Crystal Absolu 90ml&nbsp;</strong>thuộc d&ograve;ng Eau De Parfum, nồng độ tinh dầu cao, c&oacute; độ lưu hương lẫn tỏa hương cực kỳ mạnh mẽ. Nước hoa d&ugrave;ng được mọi thời điểm trong năm, sử dụng cả ng&agrave;y lẫn đ&ecirc;m.</p>\r\n\r\n<p>Chiến dịch phủ s&oacute;ng&nbsp;<strong>Versace&nbsp;</strong><strong>Bright Crystal Absolu</strong><strong>&nbsp;Eau De Parfum&nbsp;</strong>được đại diện bởi Candice Swanepoel. C&ocirc; n&agrave;ng gợi cảm trong bộ trang phục dạ hội lấp l&aacute;nh, nằm tr&ecirc;n sofa, cầm chai nước hoa Versace tr&ecirc;n tay l&agrave; h&igrave;nh ảnh cực kỳ mời gọi, khi&ecirc;u kh&iacute;ch m&agrave; chẳng ai cưỡng lại nổi.</p>\r\n\r\n<p>So với bản gốc Bright Crystal,&nbsp;<strong>nước hoa Versace&nbsp;</strong><strong>Bright Crystal Absolu</strong>&nbsp;thiết kế tương tự, điểm kh&aacute;c biệt chỉ l&agrave; t&ocirc;ng m&agrave;u đậm hơn c&ugrave;ng vỏ carton c&oacute; sự kh&aacute;c biệt. Họa tiết trắng v&agrave; x&aacute;m được lựa chọn tạo n&ecirc;n n&eacute;t thanh lịch cho vỏ ngo&agrave;i của chai nước hoa. Một sự s&aacute;ng tạo đầy thời thượng m&agrave; kh&ocirc;ng mất đi dấu ấn ri&ecirc;ng của Versace. Gợi cảm v&agrave; thu h&uacute;t,&nbsp;<strong>Versace&nbsp;</strong><strong>Bright Crystal Absolu</strong><strong>&nbsp;EDP&nbsp;</strong>chưa từng khiến bất cứ t&iacute;n đồ n&agrave;o thất vọng.</p>\r\n', 0, 100, 1, 8),
(15, 'Nước Hoa Nữ Chanel Gabrielle Essence EDP 100ml', 'chanel2.jpg', 3585000, '<h3>Đặc điểm của nước hoa&nbsp;<strong>Gabrielle Chanel</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</li>\r\n	<li><strong>Nh&oacute;m nước hoa:</strong>&nbsp;Hương Flora &ndash;&nbsp; nh&oacute;m hoa cỏ</li>\r\n	<li><strong>Năm ra mắt:</strong>&nbsp;2017</li>\r\n	<li><strong>Lưu hương:</strong>&nbsp;Trong khoảng 12 giờ</li>\r\n	<li><strong>Toả hương:</strong>&nbsp;Tỏa hương trong khoảng c&aacute;ch 1 c&aacute;nh tay</li>\r\n	<li><strong>Thời điểm th&iacute;ch hợp:</strong>&nbsp;M&ugrave;a thu, đ&ocirc;ng</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;nữ t&iacute;nh, thanh lịch, quyến rũ</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Quả l&yacute; chua đen, bưởi, cam Mandarin</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Hoa cam, hoa l&agrave;i, hoa huệ, hoa Ylang Ylang</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Gỗ đ&agrave;n hương, xạ hương</li>\r\n</ul>\r\n\r\n<h3>Hương thơm l&ocirc;i cuốn, nữ t&iacute;nh trong mỗi chai nước hoa&nbsp;Gabrielle Chanel 100ml</h3>\r\n\r\n<p>nước hoa&nbsp;Gabrielle Chanel&nbsp;l&agrave; sản phẩm mới nhất của thương hiệu nước hoa Chanel, ra mắt v&agrave;o giữa năm 2017. Chuy&ecirc;n gia nước hoa Olivier Polge l&agrave; người đ&atilde; pha chế l&ecirc;n d&ograve;ng sản phẩm đặc biệt n&agrave;y.</p>\r\n\r\n<p>Hương đầu của<strong>&nbsp;Chanel Gabrielle EDP</strong>&nbsp;to&aacute;t l&ecirc;n sự thanh m&aacute;t, tinh khiết của bưởi, cam Mandarin v&agrave; quả l&yacute; chua đen. Sự kết hợp quả mọng đến từ thi&ecirc;n nhi&ecirc;n n&agrave;y mang đến một ấn tượng đầu ti&ecirc;n kh&aacute; h&agrave;i h&ograve;a, kh&ocirc;ng qu&aacute; nồng hay hắc. D&ugrave; l&agrave; n&eacute;t hương nhẹ nh&agrave;ng nhưng kh&ocirc;ng hề giảm s&uacute;t sự quyến rũ m&agrave; chai nước hoa n&agrave;y mang lại. Lớp hương giữa c&oacute; sự xuất hiện của h&agrave;ng loạt c&aacute;c hương hoa huệ, hoa Ylang Ylang, l&agrave;i, hoa cam khiến hương thơm th&ecirc;m phần tinh tế. Cuối c&ugrave;ng,<strong>&nbsp;</strong>kết th&uacute;c bằng lớp hương ấm &aacute;p đươc kết hợp từ gỗ đ&agrave;n hương v&agrave; xạ hương bao quanh c&aacute;c c&ocirc; n&agrave;ng..</p>\r\n\r\n<p><img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2019/01/nuoc-hoa-gabrielle-chanel-100ml-for-women.jpg\" style=\"height:400px; width:600px\" /></p>\r\n\r\n<p><strong>Chanel Gabrielle</strong>&nbsp;l&agrave; nước hoa d&agrave;nh cho c&aacute;c c&ocirc; g&aacute;i c&oacute; độ tuổi từ 25 trở l&ecirc;n bởi mang n&oacute; mang phong c&aacute;ch sang trọng qu&yacute; ph&aacute;i pha lẫn ch&uacute;t hiện đại. Hương thơm l&ocirc;i cuốn từ thi&ecirc;n nhi&ecirc;n nhưng kh&ocirc;ng qu&aacute; nồng hắc chắc chắn sẽ l&agrave;m h&agrave;i l&ograve;ng bất cứ c&ocirc; g&aacute;i n&agrave;o. Theo nghi&ecirc;n cứu về m&ugrave;i hương th&igrave; thời điểm sử dụng&nbsp;<strong>Chanel Gabrielle Eau De Parfum&nbsp;</strong>tốt nhất đ&oacute; thời điểm ban ng&agrave;y khi thời tiết c&oacute; ch&uacute;t se lạnh của m&ugrave;a thu đ&ocirc;ng hoặc m&aacute;t mẻ của m&ugrave;a xu&acirc;n.</p>\r\n\r\n<p><strong>Nước hoa nữ</strong>&nbsp;Gabrielle Chanel Eau De Parfum<strong>&nbsp;</strong>c&oacute; thi&ecirc;́t k&ecirc;́ vu&ocirc;ng vắn, sang trọng với lớp vỏ bằng thủy tinh trong suốt nh&igrave;n thấy r&otilde; dung dịch m&agrave;u v&agrave;ng &oacute;ng b&ecirc;n trong. Về tổng thể thiết kế v&agrave; m&ugrave;i hương đều rất ấn tượng.</p>\r\n', 0, 100, 2, 2),
(16, 'Nước Hoa Nữ Narciso Rodriguez EDP', 'naciso1.jpg', 2190000, '<h3>Đặc điểm của Narciso Rodriguez Narciso Rouge Eau De Parfum</h3>\r\n\r\n<ul>\r\n	<li><strong>H&atilde;ng:</strong>&nbsp;Narciso Rodriguez</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Mỹ</li>\r\n	<li><strong>Nh&oacute;m:</strong>&nbsp;Floral Woody Musk &ndash; Hương hoa cỏ, gỗ, xạ hương.</li>\r\n	<li><strong>Năm tr&igrave;nh l&agrave;ng:</strong>&nbsp;2018</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:</strong>&nbsp;Nadege Le Garlantezec v&agrave; Sonia Constant</li>\r\n	<li><strong>Thời gian lưu hương:</strong>&nbsp;Trung b&igrave;nh, 3 cho tới 6 tiếng</li>\r\n	<li><strong>Khả năng toả hương:</strong>&nbsp;Gần, chỉ trong khoảng 1 c&aacute;nh tay</li>\r\n	<li><strong>N&ecirc;n d&ugrave;ng v&agrave;o:</strong>&nbsp;Ng&agrave;y, Đ&ecirc;m</li>\r\n	<li><strong>M&ugrave;a:</strong>&nbsp;Xu&acirc;n, H&egrave;, Thu, Đ&ocirc;ng</li>\r\n	<li><strong>Hương đầu (Top note):</strong>&nbsp;Hoa di&ecirc;n vỹ, hoa hồng Bulgaria</li>\r\n	<li><strong>Hương giữa (Heart note):</strong>&nbsp;Xạ hương</li>\r\n	<li><strong>Hương cuối (Base note):&nbsp;</strong>Cỏ hương b&agrave;i, đậu Tonka, tuyết t&ugrave;ng trắng v&agrave; đen.</li>\r\n	<li><strong>Hương ch&iacute;nh:</strong>&nbsp;Xạ hương, hoa di&ecirc;n vỹ</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;B&iacute; ẩn, gợi cảm.</li>\r\n</ul>\r\n\r\n<h2>&nbsp; &nbsp; &nbsp;Nước hoa nữ Narciso Rodriguez v&agrave; phi&ecirc;n bản đỏ cực hot</h2>\r\n\r\n<p>2003 l&agrave; thời điểm m&agrave; Narciso Rodriguez &ndash; nh&agrave; thiết kế trẻ t&agrave;i ba người Mỹ gốc Cuba tr&igrave;nh l&agrave;ng d&ograve;ng nước hoa đầu ti&ecirc;n của m&igrave;nh mang t&ecirc;n nước hoa Narciso For Her. Ngay lập tức m&ugrave;i hương nữ t&iacute;nh n&agrave;y trở th&agrave;nh c&aacute;i t&ecirc;n b&aacute;n chạy nhất ở Mỹ cũng như ghi danh v&agrave;o top list&nbsp;<a href=\"https://theperfume.vn/nuoc-hoa/\"><strong>nước hoa</strong></a>&nbsp;được săn đ&oacute;n nhất tr&ecirc;n thế giới. Mở đầu với chai nước hoa hiện đại, tươi mới d&agrave;nh cho ph&aacute;i nữ, Narciso Rodriguez tiếp tục h&agrave;nh tr&igrave;nh x&acirc;y dựng &ldquo;đế chế&rdquo; m&ugrave;i hương với phi&ecirc;n bản nước hoa d&agrave;nh cho nam giới v&agrave;o năm 2007. Cho đến nay, thương hiệu đ&igrave;nh đ&aacute;m xứ cờ hoa Narciso Rodriguez đ&atilde; cho ra mắt rất nhiều si&ecirc;u phẩm ấn tượng, cả cho nam v&agrave; nữ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2020/08/nuoc-hoa-narciso-rouge-eau-de-parfum.jpg\" style=\"height:857px; width:800px\" /></p>\r\n\r\n<p>Narciso Rodriguez lu&ocirc;n muốn tạo n&ecirc;n những sản phẩm nước hoa gi&uacute;p ph&aacute;i nữ cảm thấy y&ecirc;u thương bản th&acirc;n m&igrave;nh hơn như d&ugrave;ng một thứ vũ kh&iacute; ri&ecirc;ng để bản th&acirc;n cảm thấy gợi cảm, quyến rũ v&agrave; tự tin hơn.</p>\r\n\r\n<p>Đại diện h&igrave;nh ảnh cho d&ograve;ng nước hoa n&agrave;y Narciso Rouge ch&iacute;nh l&agrave; Raquel Zimmermann &ndash; si&ecirc;u mẫu đắt gi&aacute; bậc nhất Brazil.</p>\r\n\r\n<p>N&oacute;i về tầng hương&nbsp;<strong>nước hoa Narciso Rodriguez Narciso Rouge Eau De Parfum&nbsp;</strong>chẳng kh&aacute;c n&agrave;o bật m&iacute; c&aacute;ch một c&ocirc; g&aacute;i hiện đại, th&ocirc;ng minh, b&iacute; ẩn m&agrave; th&uacute; vị quyến rũ ph&aacute;i mạnh. Vừa mềm mại, nữ t&iacute;nh, kh&eacute;o l&eacute;o d&ugrave;ng những vũ kh&iacute; &ecirc;m dịu để chi&ecirc;u dụ ho&agrave;n to&agrave;n đối phương, như cuốn họ v&agrave;o một v&ograve;ng tr&ograve;n đam m&ecirc; kh&ocirc;ng c&oacute; lốt tho&aacute;t.&nbsp;<strong>Nước hoa Narciso đỏ&nbsp;</strong>mở đầu c&acirc;u chuyện t&igrave;nh l&atilde;ng mạn với di&ecirc;n vĩ, với hồng Bulgaria ngọt ng&agrave;o, để rồi ngay lập tức xạ hương huyền b&iacute;, nồng n&agrave;n h&ograve;a v&agrave;o, lưu luyến m&atilde;i chẳng chịu rời đo. Dấu ấn ở hương cuối đọng lại l&agrave; gỗ tuyết t&ugrave;ng n&oacute;ng ẩm, l&agrave; cỏ hương b&agrave;i duy&ecirc;n d&aacute;ng, thanh lịch, l&agrave; đậu tonka sang trọng bao phủ. C&uacute; chạm ở từng nốt hương đều trọn vẹn v&agrave; say đắm.</p>\r\n', 0, 100, 18, 6),
(17, 'Nước Hoa Gucci Memoire D’une EDP', 'gucci2.jpg', 2250000, '<p><strong>Đặc điểm của Gucci&nbsp;Memoire D&rsquo;une Odeur Eau De Parfum</strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:</strong>&nbsp;Gucci</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Italia</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:&nbsp;</strong>Alberto Morillas</li>\r\n	<li><strong>Thời gian ra mắt:</strong>&nbsp;2019</li>\r\n	<li><strong>Nh&oacute;m hương:</strong></li>\r\n	<li><strong>Thời gian giữ m&ugrave;i:</strong>&nbsp;Trung b&igrave;nh, từ 3 đến 6 tiếng</li>\r\n	<li><strong>Độ b&aacute;m tỏa:</strong>&nbsp;Gần, Trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Hạnh nh&acirc;n đắng, Hoa c&uacute;c La M&atilde;</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hoa nh&agrave;i, Xạ hương, Hoa nh&agrave;i Ấn Độ</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Gỗ tuyết t&ugrave;ng, Vanilla, Gỗ đ&agrave;n hương</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Tinh tế, B&iacute; ẩn</li>\r\n	<li><strong>Thời điểm sử dụng th&iacute;ch hợp:</strong>&nbsp;M&ugrave;a xu&acirc;n &ndash; M&ugrave;a hạ &ndash; M&ugrave;a thu, Ban ng&agrave;y</li>\r\n</ul>\r\n\r\n<h3><strong>Gucci Memoire D&rsquo;une Odeur Eau De Parfum</strong></h3>\r\n\r\n<p><strong>Gucci Memoire D&rsquo;une Odeur Eau De Parfum</strong><a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-gucci-memoire-dune-odeur-eau-de-parfum/\"><strong>&nbsp;</strong></a>được ra mắt trong năm 2019. Đ&acirc;y l&agrave; một m&ugrave;i hương mới của nh&agrave; Gucci khi m&agrave; n&oacute; kh&ocirc;ng ph&acirc;n biệt giới t&iacute;nh hay thời gian tuổi t&aacute;c, cho bất cứ ai cũng c&oacute; thể sử dụng. Hương thơm h&ocirc; biến ta trở th&agrave;nh nh&agrave; th&aacute;m hiểm đi kh&aacute;m ph&aacute; k&iacute; ức của ch&iacute;nh m&igrave;nh, cho ta sống lại với những k&iacute; ức ấy.&nbsp;<strong>Nước hoa Gucci xanh </strong>nhẹ nh&agrave;ng đưa ta kh&aacute;m ph&aacute; những cũng bậc cảm x&uacute;c qua hương thơm ch&acirc;n thực, tho&aacute;ng m&aacute;t v&agrave; tinh tế.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2021/09/Mem-oire-Du-ne-Od-eur-100ml.png\" style=\"height:775px; width:900px\" /></p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; Gucci M&eacute;moire D&rsquo;Une Odeur l&agrave; sự h&ograve;a quyện giữa những hương thơm tươi m&aacute;t, trong s&aacute;ng v&agrave; nồng n&agrave;n khiến cho bất kỳ ai cũng kh&oacute; c&oacute; thể cưỡng lại được. Gucci M&eacute;moire D&rsquo;Une Odeur d&ugrave;ng cho cả nam lẫn nữ l&agrave; thứ m&agrave; ngay cả khi nhắm mắt lại, n&oacute; cũng sẽ đưa bạn đến một khoảnh khoắc ch&iacute;nh x&aacute;c kh&ocirc;ng gian v&agrave; thời gian.M&ocirc; tả m&ugrave;i hương Gucci M&eacute;moire D&rsquo;Une Odeur EDP Nước hoa Gucci M&eacute;moire D&rsquo;Une Odeur EDP với hương thơm tươi m&aacute;t, trong s&aacute;ng v&agrave; nồng n&agrave;n, lưu lại sự l&ocirc;i cuốn của bạn. Lớp hương đầu mở ra với những nốt hương xanh m&aacute;t của hoa c&uacute;c La M&atilde; v&agrave; hoa nh&agrave;i san h&ocirc; Ấn Độ. Tiếp nối l&agrave; hương thơm chủ đạo xuất ph&aacute;t từ Ấn Độ: mật ong v&agrave; hoa nh&agrave;i san h&ocirc; được pha trộn theo c&ocirc;ng thức độc quyền. Lớp hương cuối kh&eacute;p lại với hương thơm ấm &aacute;p từ gỗ đ&agrave;n hương, ch&uacute;t tinh tế của gỗ tuyết t&ugrave;ng v&agrave; sự ngọt ng&agrave;o của vanilla. Vốn l&agrave; m&ugrave;i hương d&agrave;nh cho cả nam lẫn nữ, lớp hương cuối với sự bổ trợ của đ&agrave;n hương v&agrave; tuyết t&ugrave;ng đ&atilde; phần n&agrave;o đan xen, tạo n&ecirc;n vẻ vững v&agrave;ng v&agrave; phần n&agrave;o mạnh mẽ, kh&ocirc;ng qu&ecirc;n gọt giũa cho mềm mại với Vani ngọt ấm quen thuộc. &quot;Thật ra m&ugrave;i hương t&aacute;i hiện tất cả những k&yacute; ức m&agrave; ch&uacute;ng ta đ&atilde;, đang v&agrave; sẽ c&oacute;. N&oacute; đưa ta đến những nơi đ&atilde; từng đi qua, đang ở hay sẽ đến. T&ocirc;i kh&ocirc;ng muốn tạo ra Memoire D&rsquo;une Odeur cho giới t&iacute;nh cố định n&agrave;o, v&igrave; thật ra ai cũng cần phải c&oacute; k&yacute; ức&rdquo;, Alessandro Michele bộc bạch.</p>\r\n', 0, 100, 28, 3),
(18, 'Nước Hoa Dior Sauvage EDP 100ml', 'dior1.jpg', 2980000, '<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dior</li>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</li>\r\n	<li><strong>Thời gian ra mắt:&nbsp;</strong>2015</li>\r\n	<li><strong>D&ograve;ng:&nbsp;</strong>Eau De Toilette (EDT).</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:&nbsp;</strong>Francois Demachy.</li>\r\n	<li><strong>Nh&oacute;m hương:&nbsp;</strong>Hương Cam Qu&yacute;t.</li>\r\n	<li><strong>Thời gian lưu hương:&nbsp;</strong>Rất l&acirc;u &ndash; Tr&ecirc;n 12 giờ.</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Xa &ndash; Toả hương trong v&ograve;ng b&aacute;n k&iacute;nh 1 m&eacute;t.</li>\r\n	<li><strong>Phong c&aacute;ch:&nbsp;</strong>Nam t&iacute;nh, tự nhi&ecirc;n, mạnh mẽ.</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Cam Bergamot, hạt ti&ecirc;u.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hoa phong lữ, oải hương, ti&ecirc;u hồng, ti&ecirc;u tứ xuy&ecirc;n, cỏ vetiver, c&acirc;y patchaoli.</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Ambroxan, nhựa labdanum, hương gỗ.</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng</strong>: H&egrave;, Thu, Ng&agrave;y, Đ&ecirc;m.</li>\r\n	<li><strong>Độ tuổi khuy&ecirc;n d&ugrave;ng</strong>: 20.</li>\r\n</ul>\r\n\r\n<h3><strong>Nước Hoa Dior Sauvage</strong></h3>\r\n\r\n<p>Một trong những m&ugrave;i hương nam t&iacute;nh được c&aacute;c đấng m&agrave;y r&acirc;u ưa chuộng kh&ocirc;ng thể kh&ocirc;ng nhắc đến Dior Sauvage. Chai nước hoa đến từ thương hiệu Christian Dior mang đến một vẻ nam t&iacute;nh, mạnh mẽ v&agrave; cuốn h&uacute;t. Hương thơm phổ biến v&agrave; được y&ecirc;u th&iacute;ch đến nỗi dường như ai cũng sở hữu cho m&igrave;nh một chai. Với nhu cầu l&agrave;m đẹp nhanh gọn hiện nay kh&ocirc;ng chỉ đến từ ph&aacute;i đẹp m&agrave; ph&aacute;i mạnh cũng rất quan t&acirc;m. Hiểu được vẫn về n&agrave;y m&agrave;&nbsp;<strong>Nước Hoa Dior Sauvage</strong>&nbsp;đ&atilde; ra đời. M&oacute;n qu&agrave; m&agrave; h&atilde;ng d&agrave;nh tặng c&aacute;c ch&agrave;ng l&agrave; một chai nước hoa fullsize, đi k&egrave;m l&agrave; một chai nước hoa mini v&agrave; tu&yacute;p kem dưỡng da sau cạo r&acirc;u.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/sauvage-dior-60ml.png\" style=\"height:401px; width:600px\" /></p>\r\n\r\n<p>&nbsp; &nbsp; N&acirc;ng cấp v&agrave; ph&aacute;t triển, Sauvage quay trở lại với m&ugrave;i hương ấn tượng, trưởng th&agrave;nh hơn nữa.&nbsp;<strong>Sauvage Parfum 100ml</strong><strong>&nbsp;</strong>cho ch&agrave;ng kh&aacute;m ph&aacute; sự quyến rũ, cuốn h&uacute;t nằm trong n&eacute;t hoang d&atilde; ở con người m&igrave;nh.&nbsp;<strong>Dior Sauvage Parfum 100ml</strong><strong>&nbsp;</strong>nổi trội giữa <strong>thế giới nước hoa</strong>&nbsp;với h&agrave;ng ng&agrave;n hương thơm mang phong c&aacute;ch kh&aacute;c nhau. Kết hợp c&ugrave;ng cơ thể rắn chắc của ch&agrave;ng hương thơm sẽ g&acirc;y thương nhớ cho bất k&igrave; ai chạm phải m&ugrave;i hương n&agrave;y.</p>\r\n\r\n<pre>\r\n<strong>Vẻ ngo&agrave;i sang trọng, đơn giản của nước hoa Dior Sauvage Parfum 100ml</strong></pre>\r\n\r\n<p><strong><strong>Dior Sauvage Parfum 100ml</strong>&nbsp;</strong>vẫn giữ nguy&ecirc;n thiết kế của Sauvage phi&ecirc;n bản gốc. Chai <strong>nước hoa</strong>&nbsp;h&igrave;nh trụ tr&ograve;n cầm chắc tr&ecirc;n tay. Để kh&aacute;c biệt hơn với những phi&ecirc;n bản trước sản phẩm khắc l&ecirc;n m&igrave;nh m&agrave;u xanh đen đậm hơn. Sắc xanh đen thể hiện sự lịch l&atilde;m, trưởng th&agrave;nh lại c&oacute; đ&ocirc;i ch&uacute;t bi ẩn khiến người ta phải t&ograve; m&ograve;. Nắp chai m&agrave;u đen s&aacute;ng b&oacute;ng với những đường g&acirc;n cắt kh&uacute;c to&aacute;t k&ecirc;n sự mạnh mẽ, nam t&iacute;nh cho to&agrave;n bộ sản phẩm.&nbsp;<strong>Sauvage Parfum 100ml</strong>&nbsp;chắc chắn sẽ l&agrave; trải nghiệm tuyệt vời d&agrave;nh cho c&aacute;c ch&agrave;ng.</p>\r\n', 0, 100, 1, 0),
(19, 'Nước Hoa Le Labo 13 Another', 'lelabo2.jpg', 7850000, '<p><strong>Đặc điểm của&nbsp;<strong>Le Labo Another 13</strong>&nbsp;Eau De&nbsp;<strong>Parfum</strong></strong></p>\r\n\r\n<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Le Labo</li>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;USA</li>\r\n	<li><strong>Nh&agrave; pha chế:&nbsp;</strong>Nathalie Lorson</li>\r\n	<li><strong>Thời gian ra mắt:</strong>&nbsp;2010</li>\r\n	<li><strong>Nồng độ:</strong>&nbsp;EDP &ndash; Eau De Parfum</li>\r\n	<li><strong>Nh&oacute;m hương:</strong>&nbsp;Amber Woody &ndash; Hương gỗ phương đ&ocirc;ng</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Gần, trong v&ograve;ng một c&aacute;nh tay</li>\r\n	<li><strong>Thời gian lưu hương:</strong>&nbsp;L&acirc;u, từ 7 &ndash; 12 tiếng</li>\r\n	<li><strong>Phong c&aacute;ch:&nbsp;</strong>Tinh tế, Thanh lịch</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Long di&ecirc;n hương, Hương Iso E Super, Xạ hương, Tr&aacute;i l&ecirc;, Hạt v&ocirc;ng vang, Amyl Salicylate</li>\r\n	<li><strong>Thời điểm sử dụng th&iacute;ch hợp:</strong>&nbsp;M&ugrave;a xu&acirc;n &ndash; M&Ugrave;a hạ &ndash; M&ugrave;a thu &ndash; M&ugrave;a đ&ocirc;ng, Ng&agrave;y &ndash; Đ&ecirc;m</li>\r\n</ul>\r\n\r\n<p><strong>&nbsp;Le Labo Another 13<a href=\"https://theperfume.vn/nuoc-hoa/nuoc-hoa-le-labo-another-13-edp-100ml/\">&nbsp;</a></strong>l&agrave; chai nước hoa Unisex đến tư thương hiệu Le Labo. Đ&atilde; hơn 10 năm kể ng&agrave;y chai nước hoa n&agrave;y ra đời nhưng độ nổi tiếng của chai nước hoa ng&agrave;y c&agrave;ng tăng khi m&agrave; nước hoa nichie ng&agrave;y c&agrave;ng được y&ecirc;u th&iacute;ch. L&agrave; một người y&ecirc;u th&iacute;ch sự tinh tế, thanh lịch m&agrave; kh&ocirc;ng qu&aacute; đơn giản chắc chắn bạn phải d&ugrave;ng thử sản phẩm n&agrave;y.&nbsp;<strong>Le Labo Another 13 100ml</strong>&nbsp;cho những cảm nhận thật sạch sẽ v&agrave; tinh tươi như tờ giấy trắng. Nh&oacute;m hương gỗ phương đ&ocirc;ng sẽ đưa bạn đi từ bất ngờ n&agrave;y đến bất ngờ kh&aacute;c.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2021/12/L-e-La-bo-Ano-ther-1-3-100ml.png\" style=\"height:900px; width:900px\" /></p>\r\n\r\n<p>Nước Hoa Le Labo 13 Another 50ML - Đẳng Cấp, Sang Trọng. B&ecirc;n cạnh đ&oacute;, Hương Iso E Super v&agrave; Hương Amyl Salicylate l&agrave; hai hương bạn c&oacute; thể dễ d&agrave;ng cảm nhận được nhất khi sử dụng nước hoa n&agrave;y. Le La', 0, 100, 1, 5),
(20, 'Nước Hoa Chanel Coco Noir EDP Cho Nữ 100ml', 'chanel1.jpg', 3690000, '<h3><strong>Đặc điểm của nước hoa Chanel Coco Noir Eau De Parfum&nbsp;</strong></h3>\r\n\r\n<ul>\r\n	<li><strong>Xuất xứ:</strong>&nbsp;Ph&aacute;p</li>\r\n	<li><strong>Thời điểm ra mắt:</strong>&nbsp;2012</li>\r\n	<li><strong>Nh&oacute;m hương:</strong>&nbsp;Gỗ phương Đ&ocirc;ng</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng tạo</strong><strong>:</strong>&nbsp;Christopher Cheldrake; Jacques Polge</li>\r\n	<li><strong>Phong c&aacute;ch:</strong>&nbsp;Nữ t&iacute;nh, c&aacute; t&iacute;nh, b&iacute; ẩn</li>\r\n	<li><strong>Thời gian lưu hương:</strong>&nbsp;Trong khoảng 10 tiếng</li>\r\n	<li><strong>Độ toả hương:&nbsp;</strong>Trong v&ograve;ng b&aacute;n k&iacute;nh 2m</li>\r\n	<li><strong>Thời điểm khuy&ecirc;n d&ugrave;ng:</strong>&nbsp;Khi thời tiết m&aacute;t mẻ, lạnh như m&ugrave;a thu đ&ocirc;ng</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Cam Bergamot, Cam, Bưởi hồng</li>\r\n	<li><strong>Hương giữa:</strong>&nbsp;Tr&aacute;i đ&agrave;o, hoa nh&agrave;i, hoa thủy ti&ecirc;n, hoa hồng, hoa phong lữ</li>\r\n	<li><strong>Hương cuối:</strong>&nbsp;Nhựa hương, đậu tonka, đ&agrave;n hương, hoắc hương, xạ hương, vani</li>\r\n</ul>\r\n\r\n<h3>&nbsp;</h3>\r\n\r\n<p>&nbsp; &nbsp; &nbsp;Nước hoa Chanel Coco Noir&nbsp;khiến c&aacute;c qu&yacute; c&ocirc; ng&acirc;y ngất v&igrave; hương thơm nồng n&agrave;n, b&iacute; ẩn, quyến rũ. Nếu d&ograve;ng nước hoa Chanel No.5. cho c&aacute;c n&agrave;ng cảm gi&aacute;c thanh lịch, nữ t&iacute;nh xen v&agrave;o ch&uacute;t cổ k&iacute;nh, vintage của người phụ nữ ng&agrave;y xưa. Th&igrave; Chanel Coco lại cho cảm gi&aacute;c ho&agrave;n to&agrave;n kh&aacute;c. M&ugrave;i hương c&ugrave;ng thiết kế của n&oacute; mang đến sự mạnh mẽ trong mỗi c&ocirc; g&aacute;i, thể hiện r&otilde; c&aacute; t&iacute;nh, mang theo n&eacute;t b&iacute; ẩn h&uacute;t hồn.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"\" src=\"https://theperfume.vn/wp-content/uploads/2019/01/nuoc-hoa-chanel-coco-noir-edp-100ml.png\" style=\"height:542px; width:600px\" />&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;Sản phẩm n&agrave;y được rất nhiều người v&iacute; như một kh&uacute;c nhạc trữ t&igrave;nh &ecirc;m dịu v&agrave; du dương mang đến cảm gi&aacute;c bất tận cho người sử dụng lẫn những người xung quanh khi kh&aacute;m ph&aacute;. Những hương thơm nồng n&agrave;n, kỳ diệu v&agrave; đầy ', 0, 100, 12, 0),
(21, 'Nước Hoa Nữ Dior Hypnotic Poison EDT ', 'dior2.jpg', 2800000, '<ul>\r\n	<li><strong>Thương hiệu:&nbsp;</strong>Dior</li>\r\n	<li><strong>Xuất xứ:&nbsp;</strong>Ph&aacute;p</li>\r\n	<li><strong>Thời gian ra mắt:&nbsp;</strong>1998</li>\r\n	<li><strong>D&ograve;ng:&nbsp;</strong>Eau De Toilette (EDT).</li>\r\n	<li><strong>Nh&agrave; s&aacute;ng chế:&nbsp;</strong>Annick Menardo.</li>\r\n	<li><strong>Nh&oacute;m hương:</strong>&nbsp;Hương Oriental Vanilla (Hương vani phương Đ&ocirc;ng).</li>\r\n	<li><strong>Thời gian lưu hương:&nbsp;</strong>Rất l&acirc;u &ndash; Tr&ecirc;n 12 giờ.</li>\r\n	<li><strong>Độ tỏa hương:&nbsp;</strong>Xa &ndash; Toả hương trong v&ograve;ng b&aacute;n k&iacute;nh 2 m&eacute;t.</li>\r\n	<li><strong>Phong c&aacute;ch:&nbsp;</strong>Cổ điển, quyến rũ.</li>\r\n	<li><strong>Hương đầu:</strong>&nbsp;Quả mơ, Quả mận, Quả dừa.</li>\r\n	<li><strong>Hương giữa:&nbsp;</strong>Hoa huệ trắng, Hoa nh&agrave;i, Hoa linh lan, Hoa hồng, Gỗ cẩm lai Brazil, Th&igrave; l&agrave; Ba Tư.</li>\r\n	<li><strong>Hương cuối:&nbsp;</strong>Gỗ đ&agrave;n hương, Hạnh nh&acirc;n, Hương Va ni, Xạ hương.</li>\r\n</ul>\r\n\r\n<h2>&nbsp;</h2>\r\n\r\n<h3>Nước hoa Dior Hypnotic Poison</h3>\r\n\r\n<p>Trong giới m&ugrave;i hương vẫn lưu giữ truyền thuyết về một lọ nước hoa &ldquo;thuốc độc&rdquo; c&oacute; khả năng khiến bất cứ ai &ldquo;chết lịm&rdquo; trong sự l&ocirc;i cuốn đầy ng&ocirc;ng cuồng. T&aacute;o bạo, b&iacute; ẩn nhưng m&ecirc; hoặc, nữ t&iacute;nh, &ldquo;huyền thoại&rdquo; say đắm l&ograve;ng người n&agrave;y ch&iacute;nh l&agrave;&nbsp;Nước hoa Dior Hypnotic Poison. Pha trộn n&ecirc;n bằng những nốt hương độc đ&aacute;o, biến những hương vị tương phản xếp chồng th&agrave;nh thế c&acirc;n bằng, Dior Hypnotic Poison ch&iacute;nh x&aacute;c l&agrave; một &ldquo;liều thuốc&rdquo; k&igrave; diệu m&agrave; Dior mang tới cho những qu&yacute; c&ocirc; hiện đại.</p>\r\n\r\n<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Nước hoa Hypnotic Poison EDT lừng lẫy nhà Dior\" src=\"https://theperfume.vn/wp-content/uploads/2018/09/nuoc-hoa-nu-dior-hypnotic-poison-edt.png\" style=\"height:531px; width:600px\" /></p>\r\n\r\n<p>&nbsp; &nbsp; Nước hoa Dior Hypnotic Poison Trong giới m&ugrave;i hương vẫn lưu giữ truyền thuyết về một lọ nước hoa &ldquo;thuốc độc&rdquo; c&oacute; khả năng khiến bất cứ ai &ldquo;chết lịm&rdquo; trong sự l&ocirc;i cuốn đầy ng&ocirc;ng cuồng. T&aacute;o bạo,</p>\r\n', 0, 5, 14, 4),
(22, 'Nước Hoa Nữ Gucci Bloom EDP For Women ', 'gucci3.jpg', 2900000, '<p>&nbsp;</p>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Xuất xứ</strong></td>\r\n			<td>Anh, Đức, Ph&aacute;p</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Năm ph&aacute;t h&agrave;nh</strong></td>\r\n			<td><strong>&nbsp;</strong>2017</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Nh&oacute;m hương</strong></td>\r\n			<td>Hoa huệ, Hoa nh&agrave;i, Hoa kim ng&acirc;n</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Phong c&aacute;ch</strong></td>\r\n			<td>&nbsp;Quyến rũ, Sang trọng, Qu&yacute; ph&aacute;i</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:500px\">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Hương đầu</strong></td>\r\n			<td>Hoa nh&agrave;i</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Hương giữa&nbsp;</strong></td>\r\n			<td>Hoa huệ</td>\r\n		</tr>\r\n		<tr>\r\n			<td><strong>Hương cuối&nbsp;</strong></td>\r\n			<td>Hoa sử qu&acirc;n tử</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Gucci Bloom EDP For Her</strong>, một m&ugrave;i hương ti&ecirc;u biểu cho một n&eacute;t đẹp thanh tho&aacute;t v&agrave; tao nh&atilde; chuẩn &Yacute;. Nếu bạn lỡ say đắm m&ugrave;i hương thanh lịch v&agrave; quyến rũ của những đo&aacute; hoa trắng, th&igrave; nhất định bạn sẽ phải &quot;nghi&ecirc;ng m&igrave;nh ngả mũ&quot; khi bắt gặp m&ugrave;i hương của Gucci Bloom EDP tr&ecirc;n phố.<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<img alt=\"Gucci Bloom Eau De Parfum\" src=\"https://theperfume.vn/wp-content/uploads/2018/08/nuoc-hoa-gucci-bloom-edp.png\" style=\"height:449px; width:600px, text-align:center\" /><br />\r\nChưng cất hương thơm của một vườn hoa n&agrave;o Nh&agrave;i v&agrave; Huệ v&agrave;o buổi sớm, Gucci Bloom EDP toả hương thơm nức l&ograve;ng người, kiều diễm v&agrave; tr&agrave;n đầy sức sống. Ấy thế, đ&acirc;u đ&oacute; len lỏi trong từng tầng hương vẫn l&agrave; ch&uacute;t vị đắng nhưng tươi, bạn c&oacute; thể lấy m&ugrave;i hương của Tr&agrave; để tưởng tượng.<br />\r\n<br />\r\nTừng ph&uacute;t từng gi&acirc;y tr&ocirc;i qua, ta chỉ ng&agrave;y c&agrave;ng th&ecirc;m y&ecirc;u n&eacute;t hương &yacute; tứ, sang trọng m&agrave; Gucci Bloom EDP chưng cất. Nhiều người hỏi rằng Gucci Bloom EDP ph&ugrave; hợp với độ tuổi n&agrave;o, m&agrave; quả thật</p>\r\n', 0, 0, 21, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `ml` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`id`, `ml`) VALUES
(1, '10'),
(2, '50'),
(3, '100');

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
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
