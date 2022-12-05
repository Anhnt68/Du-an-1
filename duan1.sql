-- phpMyAdmin SQL Dump
-- version 5.2.1-dev+20220930.5d48e1006b
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 05, 2022 lúc 03:36 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.5

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
(88, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 43860000, '29/11/2022', 12),
(89, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 18450000, '04/12/2022', 5),
(90, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 18450000, '04/12/2022', 5),
(91, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 22140000, '04/12/2022', 6),
(92, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 22140000, '04/12/2022', 6),
(93, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 2, 0, 2250000, '05/12/2022', 1),
(94, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 0, 0, 15815000, '05/12/2022', 4),
(95, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 2900000, '05/12/2022', 1),
(96, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 2900000, '05/12/2022', 1),
(97, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 8850000, '05/12/2022', 2),
(98, 4, 'Nguyễn Tuấn Anh', 'Ninh Bình', 346237897, 'anhntph27773@gmail.com', 1, 0, 14100000, '05/12/2022', 3);

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
(83, 94, 19, 1),
(84, 94, 16, 2),
(85, 94, 15, 1),
(86, 95, 22, 1),
(87, 96, 22, 1),
(88, 97, 22, 1),
(89, 97, 13, 1),
(90, 98, 22, 1),
(91, 98, 13, 1),
(92, 98, 12, 1);

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
(1, 'YSL', 'cate2.jpg', ''),
(2, 'CoCo Chanel', 'chanel2.jpg', ''),
(3, 'Gucci', 'gucci1.jpg', ''),
(4, 'Dior', 'dior2.jpg', ''),
(5, 'Lelabo', 'catelelabo.jpg', ''),
(6, 'Nartiso', 'catenatiso.jpg', ''),
(8, 'Versace', 'versace2.jpg', ''),
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
(6, 'good', 21, 4, 'Nguyễn Tuấn Anh', ' 21:31:31 - 05/12/2022');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productName` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productImage` varchar(255) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `productPrice` double NOT NULL,
  `productDesc` varchar(2550) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `quatity` int(11) NOT NULL,
  `productView` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `productName`, `productImage`, `productPrice`, `productDesc`, `quatity`, `productView`, `categoryId`) VALUES
(11, 'Nước Hoa Versace Eros Man EDT ', 'versace1.jpg', 4500000, 'Versace đã tung ra một loại nước hoa mới dành cho nam giới mang tên là Eros, được lấy cảm hứng và kết nối sâu sắc với thần thoại Hy Lạp. Mục đích của dòng nước hoa này là khơi gợi và thể hiện sự mạnh mẽ và đam mê. Nước hoa được đặt theo tên của vị thần tình yêu và cũng là con của vị thần Aphrodite là Eros. Eros được sáng tạo bởi Aurelen Guichard.Eros thể hiện sự mạnh mẽ nam tính thông qua sự kết hợp tinh tế của hương lá bạc hà tươi, vỏ chanh và táo xanh. Hương giữa gây nghiện bởi sự pha trộn của một số thành phần hương hoa phương Đông hấp dẫn như đậu tonka, hổ phách, hoa phong lữ , vani cùng với một chút thành phần hương đặc trưng của hương gỗ như gỗ tuyết tùng từ Atlas và Virginia. Trong khi ở lớp hương cuối hương hoa cỏ lau và rêu sồi làm tăng thêm sự quyến rũ, tinh tế và đam mê cho phái mạnh.Với thiết kế màu xanh ngọc đầy ấn tượng, chai nước hoa mang đến sự tươi mát và gợi cảm. Hình dáng của chai nước hoa như một mê cung, như muốn nhấn mạnh lên sự bí ấn của nó. Versace Eros là mùi thơm dành cho người đàn ông mạnh mẽ, là người làm chủ được bản thân và luôn đứng ra đấu tranh bảo vệ ý tượng và mục đích của mình', 100, 0, 8),
(12, 'Nước Hoa Le Labo Rose 31', 'lelabo1.jpg', 5250000, '	Hương đầu: Hoa hồng, Thì là (Ai Cập) Hương giữa: Hoa hồng, Cỏ hương bài, Gỗ tuyết tùng Hương cuối: Xạ hương, Gỗ guaiac, Nhũ hương, Labdanum, Trầm hương Khác với những mùi hương truyền thống vốn có, Le Labo Rose 31 đem lại sự quyến rũ vốn có từ những đặc trưng của Hoa hồng đến cho chủ nhân của mình thông qua những từng hương được trau chuốt tỉ mỉ. Gom trọn mọi cảm xúc chỉ trong lần xịt đầu tiên, từng nốt hương ngọt nhẹ, ấm áp từ Cỏ hương bài và Gỗ tuyết tùng dìu dắt sự quyến rũ, thu hút của Hoa hồng lên trên bề mặt da thịt. Nằm trọn bên trên cơ thể, Hoa hồng bám lấy không dứt qua đến tầng hương giữa đến khi những nốt hương Thì là (Ai Cập) tạo ra một chuỗi liên tiếp những mùi hương phảng phất sự hấp dẫn, mềm mại đến lạ kì. Sự trung lập của Le Labo Rose 31 ngày càng được khắc họa rõ hơn sau mỗi đợt hương Xạ phản ứng cùng Gỗ guaiac, Nhũ hương, Labdanum và Trầm hương. Đó là lí do tại sao Le Labo Rose 31 khi tiếp xúc trên cơ thế nam giới, hương thơm sẽ trở nên cá tính, quyến rũ còn lên da nữ thì lại hóa thành gợi cảm, dịu dàng.', 100, 1, 5),
(13, 'Nước Hoa Nữ Gucci Flora Gorgeous Gardenia ', 'gucci1.jpg', 5950000, 'Hương đầu: Hoa Lê Hương giữa: Hoa Nhài, Cây Dành Dành; Hương cuối: Đường Nâu, Hoắc Hương. Gucci Flora Gorgeous Gardenia bắt đầu trở lại với một phiên bản Eau de Parfum mới thể hiện sự mạnh mẽ và sắc sảo hơn so với phiên bản Eau de Toilette ban đầu. Một dấu hiệu đặc trưng của những loài hoa cùng sắc thái tươi vui, mùi hương được xây dựng xung quanh hoa hoa Dành Dành, một loài hoa được biết đến như vẻ đẹp của buổi bình minh cùng hương sắc được coi như vẹn toàn và thường được sử dụng như một loại thuốc ma thuật. Lấy cảm hứng từ truyền thuyết này và ý tưởng về sức mạnh thần bí của nó, nốt hương hoa Dành Dành tuyệt đẹp được kết hợp với Hoa Nhài mang lại năng lượng sáng ngời như một cách để tôn vinh vẻ đẹp của các loài hoa. Mùi hương được tinh tế điểm xuyến thêm chút ngọt ngào của đường nâu và một nguồn năng lượng dồi dào tươi mát của Hoa lê tựa như sự bùng nổ ở khứu giác tạo ra một cảm giác thăng hoa, đầy sức sống. Nếu bạn là fan của một mùi hương ngào ngạt hoa cỏ nữ tính thì đừng bỏ qua em Gucci Flora Gorgeous Gardenia Eau de Parfum nhé!', 5, 1, 3),
(14, 'Nước Hoa Nữ Versace Bright EDP', 'versace2.jpg', 1680000, 'Nước hoa nữ Bright Crystal Absolu EDP được thương hiệu Versace cho ra đời năm 2013. Đây là chai nước hoa được cho là nóng bỏng hơn, cuốn hút hơn phiên bản Versace Bright Crystal EDT. Được gọi tên là nữ thần tình yêu nóng bỏng, bốc lửa trong giới mùi hương. Nước hoa Versace Bright Crystal Absolu hội tụ đầy đủ những điều mà một nửa thế giới mong ước. Versace Bright Crystal Absolu EDP chứa biết bao chiết xuất thú vị, khơi trào nhịp sống và khiến cảm xúc của người dùng thăng hoa trong sự ngọt ngào. Nếu ví von Versace Bright Crystal EDT (hồng nhạt) như một cô gái tuổi trăng rằm với nụ cười thơ ngây, đôi mắt trong veo thì Versace hồng đậm mang tên Bright Crystal Absolu này lại chính là một cô gái đôi mươi yêu đời nhưng đã thể hiện nét cuốn hút, mê hoặc hơn.Nước hoa nữ Versace Bright Crystal Absolu EDP có khởi đầu khá tươi mát với hỗn hợp quả yuzu, lựu cùng hương nước tươi mát. Sau khi nốt đầu tan nhanh thì liên tiếp là hương giữa, nơi những loài hoa tỏa hương thơm ngát. Với chiết xuất từ cam, lựu kết hợp với hoa sen, mẫu đơn, dâu, hoa mộc lan đem đến một hương thơm vô cùng thanh thoát, quyến rũ và nồng nàn có tác dụng làm cho tâm hồn khơi trào nhịp sống, sôi động và thăng hoa hơn. Ở lớp cuối chúng ta sẽ trải nghiệm được một mùi hương ấm áp, thuần khiết và có phần “sạch sẽ” đến từ gỗ gụ, cùng với đó là sự tinh chế của hổ phách và xạ hương đem đến cho bạn cảm giác khoan khoái như đang sải bước trong rừng cây. Tinh dầu hổ phách nồng nàn, dễ chịu với mùi thơm dịu ngọt, gợi nhớ đến những căn nhà gỗ thơ mộng trong màn sương đêm. Sẽ là một gia vị không thể thiếu trong một đêm tình ái nóng bỏng, phiêu lưu của cô nàng cá tính, gợi cảm. Tất cả khiến cho Versace Bright Crystal Absolu mang đặc trưng hương vị của sự gợi cảm, hiện đại và đậm chất nữ tính.Thành phần mùi hương Hương đầu: Quả Yuzu, Quả lựu, Hương nước Hương giữa: Hoa sen, Hoa mẫu đơn, Quả mâm xôi, Hoa mộc lan Hương cuối: Hổ phách, Xạ hương, Gỗ gụ Thời điểm dùng: Ngày, Đêm, Xuân, Hạ, Thu', 100, 0, 8),
(15, 'Nước Hoa Nữ Chanel Gabrielle Essence EDP ', 'chanel2.jpg', 3585000, 'Hương đầu: Cam chanh, Lá chanh, Nho đen, Quả mọng, Đào Hương giữa: Hoa trắng, Hoa nhài, Hoa huệ, Ngọc lan tây, Hoa cam, Dừa Hương cuối: Xạ hương, Đàn hương, Vanilla “Đầy tham vọng và tự do, cô ấy có quyền chọn con đường đi riêng cho mình”, Gabrielle Essence Chanel vinh dự được đặt tên sau bà hoàng trong ngành thời trang - Gabrielle Chanel, hay còn được biết đến dưới tên Coco Chanel. Tái hiện lại hình ảnh người phụ nữ độc lập, tỏa sáng với đầy chính kiến, Gabrielle Essence Chanel dưới bàn tay tác chế của Olivier Polge đã trở nên rực rỡ, ngát hương hoa và gợi cảm hơn bao giờ hết. Với tông hương đầu đầy năng lượng, sự kết hợp giữa cây trái cùng lá đã làm bản hòa âm trở nên trẻ trung và tràn trề năng lượng bởi vẻ mọng nước, nồng nàn đầy nữ tính. Không cần cố gắng quá nhiều, Gabrielle Essence Chanel đẹp đến mê hồn cùng vườn hoa bạt ngàn hương sắc ở tầng hương tiếp theo, khiến nàng như một người phụ nữ tự tin sải bước trên đại lộ, không hề ấp úng, không hề biết chùn bước là gì, vẻ độc tôn đến không cưỡng. Bừng sáng đầy kiêu hãnh, tông hương cuối cùng Xạ hương và Vanilla khoác lên cho nàng bộ cánh thu hút với hương thơm mềm mại đầy xác thịt, không thể không ngoái nhìn. Đàn ông có hai nỗi sợ. Hoặc sợ phụ nữ giỏi hơn anh ta hoặc sợ anh ta không “đủ” cho một người phụ nữ. Và Gabrielle Essence Chanel vừa là một nỗi lo lắng, vừa là một niềm đam mê được chinh phục đến bất kỳ người đàn ông nào.', 100, 3, 2),
(16, 'Nước Hoa Nữ Narciso Rodriguez EDP', 'naciso1.jpg', 2190000, 'Narciso Rodriguez For Her là sản phẩm đầu tay của thương hiệu Narciso Rodriguez và cũng là chai nước hoa mà từ lúc ra mắt cho tới thời điểm hiện tại đều nằm trong Top hit hương nước hoa được nữ giới yêu thích nhất. Năm 2006 Narciso Rodriguez cho ra phiên bản EDP Narciso màu hồng pastel nhẹ nhàng cùng mùi hương ngọt ngào hiện đại và đầy cá tính được ví như vũ khí gây thương nhớ cao làm cho những cô nàng trở nên nổi bật và thu hút hơn bao giờ hết. Hương thơm Mùi hương đặc trưng: Hương đầu: Hoa hồng, Quả đào Hương giữa: Xạ hương, Hổ phách Hương cuối: Gỗ đàn hương, Hoắc hương Nhiều người cảm nhận thấy hương phấn thơm rất rõ rệt trong chai nước hoa này, đó là do sự cân bằng hoàn hảo của 2 hương thơm tuyệt đẹp đó là hoa hồng và xạ hương làm trung tâm, điểm quanh là gỗ thơm, hoắc hương và hổ phách. Chỉ đơn giản thế thôi nhưng mùi hương của Narciso Rodriguez For Her EDP bỗng trở nên đa chiều, đa cảm và mượt mà hơn hẳn. Một chút tươi sáng, rạng rỡ như thiên thần của phiên bản EDP đối trọng với sắc thái ma mị của phiên bản EDT nhưng cả 2 đều có những điểm chung nhất định, đó chính là bản sắc rất riêng mà Narciso Rodriguez lồng ghép vào tất cả hương thơm. Phù hợp với Nước hoa Narciso hồng phấn phù hợp với nữ từ độ tuổi 25. Rất phù hợp với sự trẻ trung, năng động cũng như cá tính của phụ nữ ngày nay. Đánh giá Độ lưu hương: Lâu – 7 giờ đến 12 giờ Độ toả hương: Gần – Toả hương trong vòng một cánh tay Thời điểm khuyên dùng: Ngày, Đêm, Xuân, Thu, Đông', 100, 12, 6),
(17, 'Nước Hoa Gucci Memoire D’une EDP', 'gucci2.jpg', 2250000, 'Nước hoa Mémoire D’Une Odeur EDP của thương hiệu Gucci được ra mắt vào mùa thu năm 2019. Đây là mùi hương được sáng chế bởi bậc thầy nước hoa Alberto Morillas đã tạo nên vượt qua giới tính và khám phá sức mạnh của trí nhớ, mang phong cách cổ điển và lấy cảm hứng hiện đại hoà quyện tạo thành 1 làn gió mới rất khác biệt. Thành phần mùi hương Hương đầu: Hoa cúc, Hạnh nhân Hương giữa: Hoa nhài, Xạ hương Hương cuối: Hương Vanilla, Gỗ tuyết tùng, Gỗ đàn hương Thời điểm dùng: Ngày, Đêm, Xuân, Hạ, Thu Gucci Mémoire D’Une Odeur là sự hòa quyện giữa những hương thơm tươi mát, trong sáng và nồng nàn khiến cho bất kỳ ai cũng khó có thể cưỡng lại được. Gucci Mémoire D’Une Odeur dùng cho cả nam lẫn nữ là thứ mà ngay cả khi nhắm mắt lại, nó cũng sẽ đưa bạn đến một khoảnh khoắc chính xác không gian và thời gian.Mô tả mùi hương Gucci Mémoire D’Une Odeur EDP Nước hoa Gucci Mémoire D’Une Odeur EDP với hương thơm tươi mát, trong sáng và nồng nàn, lưu lại sự lôi cuốn của bạn. Lớp hương đầu mở ra với những nốt hương xanh mát của hoa cúc La Mã và hoa nhài san hô Ấn Độ. Tiếp nối là hương thơm chủ đạo xuất phát từ Ấn Độ: mật ong và hoa nhài san hô được pha trộn theo công thức độc quyền. Lớp hương cuối khép lại với hương thơm ấm áp từ gỗ đàn hương, chút tinh tế của gỗ tuyết tùng và sự ngọt ngào của vanilla. Vốn là mùi hương dành cho cả nam lẫn nữ, lớp hương cuối với sự bổ trợ của đàn hương và tuyết tùng đã phần nào đan xen, tạo nên vẻ vững vàng và phần nào mạnh mẽ, không quên gọt giũa cho mềm mại với Vani ngọt ấm quen thuộc. \"Thật ra mùi hương tái hiện tất cả những ký ức mà chúng ta đã, đang và sẽ có. Nó đưa ta đến những nơi đã từng đi qua, đang ở hay sẽ đến. Tôi không muốn tạo ra Memoire D’une Odeur cho giới tính cố định nào, vì thật ra ai cũng cần phải có ký ức”, Alessandro Michele bộc bạch.', 100, 15, 3),
(18, 'Nước Hoa Nam Dior Sauvage EDP ', 'dior1.jpg', 2980000, '	Hương thơm của Dior Sauvage EDP : Hương đầu: cam Bergamot Hương giữa: hoa oải hương, tiêu Tứ Xuyên, đại hồi, hạt nhục đậu khấu Hương cuối: nhựa Ambroxan, vanilla Sự tươi mát mạnh mẽ của Dior Sauvage toát lên các khía cạnh gợi cảm và bí ẩn mới. Đổi mới dấu ấn của nó với một thành phần khéo léo. Thành phần được giữ ở phiên bản gốc gồm cam bergamot ngon ngọt. Cho bạn cảm giác fresh-tươi mới khi vừa xịt lên cơ thể. Và kích thích tinh thần hơn bao giờ hết, những note cay mới để thêm vào sự sung mãn và gợi cảm. Cuối cùng, Hổ phách ngọt dịu được bọc trong những note hương ngọt ngào của vanilla. Vào năm 2018, Dior giới thiệu phiên bản mới của Dior Sauvage đã ra mắt vào năm 2015 với nồng độ Eau De Parfum. Các thành phần với hơi hướng phương Đông và vani. Tạo nên mùi hương ngọt ngào, bí ẩn và gợi cảm.Nhà chế tạo nước hoa Francois Demachy lấy sa mạc trong cảnh hoàng hôn làm cảm hứng điều chế nên Dior Sauvage. Ngài đã đưa làn gió mát, ngọt lành của màn đêm hoà cùng không khí nóng bỏng của sa mạc. Bằng cách đó một mùi hương nước hoa nam Dior nóng bỏng bậc nhất được ra đời.Phù hợp với : Hương thơm phù hợp với những chàng trai trên 25 tuổi muốn tìm kiếm một mùi hương gợi cảm, ấm áp và lịch lãm. Trở thành tuýp đàn ông lịch lãm chỉ với mùi hương sang trọng ngút ngàn của Dior Sauvage. Đánh giá : Thời điểm khuyên dùng : Thích hợp sử dụng hằng ngày. Độ lưu hương : Tốt trong khoảng 7-12h. Độ tỏa hương : Gần – Toả hương trong vòng một cánh tay.', 100, 0, 4),
(19, 'Nước Hoa Le Labo 13 Another', 'lelabo2.jpg', 7850000, 'Nước Hoa Le Labo 13 Another 50ML - Đẳng Cấp, Sang Trọng\r\nMùi hương đặc trưng: Hương Iso E Super, Hương Amyl Salicylate, Xạ hương, Long diên hương, Cây vông vang, Quả lê\r\n\r\nPhong cách:  Đẳng Cấp, Sang Trọng\r\n\r\n\r\nLe Labo 13 Another thuộc nhóm Oriental Woody (Hương gỗ phương đông) dành cho cả nam lẫn nữ. Bên cạnh đó, Hương Iso E Super và Hương Amyl Salicylate là hai hương bạn có thể dễ dàng cảm nhận được nhất khi sử dụng nước hoa này. Le Labo 13 này có độ lưu hương rất lâu, độ tỏa hương thuộc dạng gần - toả hương trong vòng một cánh tay. Another 13 phù hợp sử dụng trong bất cứ thời gian nào.Another 13 của Le Labo, vẻn vẹn tối giản 13 note mùi. Trong veo, dễ gần, xong lại khó đoán, và “hút hàng”. Xoay vần quanh note mùi chính là ambrox, thứ mùi mang hơi hướng gỗ, khô ráo, tĩnh lặng, ngọt theo lối thanh tao. Mùi hương không nanh vuốt bao trùm, nuốt trọn mọi thứ xung quanh, đầy tự nhiên, hiện diện theo lối tự nhiên thỏ thẻ nhỏ nhẹ nói khẽ cười duyên. Không phân tán, không chìm nghỉm. Không quyền lực khẳng định, mà hiện diện tự nhiên tự nguyện, và đóng đinh vào tâm trí đối phương.- Khác xa với kiểu chai nước hoa truyền thống, Le Labo 13 Another có kiểu dáng gọn gàng với kiểu trang trí các thông tin nước hoa được in trên thân chai trông giống như những chai trong phòng thí nghiệm.', 100, 3, 5),
(20, 'Nước Hoa Chanel Coco Noir EDP Cho Nữ 100ml', 'chanel1.jpg', 3690000, '	Sản phẩm này được rất nhiều người ví như một khúc nhạc trữ tình êm dịu và du dương mang đến cảm giác bất tận cho người sử dụng lẫn những người xung quanh khi khám phá. Những hương thơm nồng nàn, kỳ diệu và đầy sức hút mà chỉ riêng nước hoa nữ Chanel Coco Noir mới có được. Hương sắc Phương Đông cá tính Mang hương sắc và mùi thơm luôn đậm đà chất Phương Đông nên vẻ quyến rũ và say đắm của Coco Noir sẽ không dành cho những cô nàng có tính nhút nhát lựa chọn mà nó sẽ thích hợp hơn đối với những cô nàng nữ tính nhưng vẫn có sự pha trộn giữa cá tính và sự mạnh mẽ bên trong của bản thân. Sự quý phái, sang trọng nhưng đầy nổi bật, lôi cuốn cũng là phong cách mà nước hoa Chanel Coco Noir dành cho nữ hướng đến.Sự tổng hợp mùi hương đặc biệt Mùi hương của Chanel Coco Noir đó là sự pha trộn giữa mùi hoắc hương, xạ hương và mùi thơm của các loại trái cây thơm ngát. Chính vì vậy nên bạn cần có sự kiên nhẫn để trải nghiệm từng mùi hương khi sử dụng.Thời gian lưu hương của sản phẩm đặc biệt này lên đến 8 giờ đồng hồ, một khoảng thời gian khá tốt trong số các dòng nước hoa nữ trên thị trường hiện tại. Đây cũng là một ưu điểm giúp dòng nước hoa Chanel Coco ghi điểm trong lòng người.', 100, 9, 2),
(21, 'Nước Hoa Nữ Dior Hypnotic Poison EDT ', 'dior2.jpg', 2800000, 'Nước hoa nữ Dior Hypnotic Poison EDT có lớp hương đầu ngọt ngào từ hương thơm trái cây gồm mận, mơ và quả dừa. Tiếp đến là tầng hương giữa đầy thơm ngát xây dựng từ các loài hoa. Dần lắng xuống lớp hương cuối được tô điểm bởi xạ hương và vani thanh lịch. Hương xạ hương mộc mạc, với sự tinh khiết và âm hưởng của hương kim loại tạo nên nét tương phản tương phản đẹp mắt cùng với vị đắng của hạnh nhân, mang lại một sự kiềm chế cho những hương thực phẩm.Theo thời gian, hương xạ hương mang cảm giác ấm áp, tinh tế, chứ không phải một loại xạ hương hoang dã dần lan tỏa, ban đầu thật nhẹ nhàng và sau đó gần như ôm ấp lấy toàn bộ hương thơm. Hổ phách với gỗ đàn hương mịn màng mang một khía cạnh thú vị, giống như một vải lụa màu đỏ phớt qua ánh đèn. Ngay lập tức, các âm sắc trở nên sâu lắng hơn, trong khi các đường nét vẫn mềm mại, sự sắp xếp các lớp hương này vẫn giữ được sự rạng ngời của nó.\r\n\r\n', 100, 4, 0),
(22, 'Nước Hoa Nữ Gucci Bloom EDP For Women ', 'gucci3.jpg', 2900000, 'Nước hoa nữ Gucci Bloom EDP thuộc nhóm hương hoa cỏ và đặc biệt hơn là các loài hoa ấy đều là hoa trắng. Mùi hương của cây kim ngân mang đến cảm giác dịu dàng và thoải mái cho những ai tiếp xúc với hương thơm này. Sự nhẹ nhàng này cũng tô điểm thêm nét nữ tính và duyên dáng của nữ giới. Mùi hương của hoa nhài có phần nồng nàn và tao nhã trong Gucci Bloom. Và mùi hương nổi bật và hấp dẫn nhất là mùi của hoa huệ. Hương thơm của hoa huệ mang đến sự mềm mại, uyển chuyển, nhẹ nhàng, quý phái khiến cho người phụ nữ trở nên gợi cảm nhưng vẫn gần gũi. Để hòa hợp tất cả các mùi hương thì người pha chế đã dùng rễ cây diên vĩ để giúp mùi hương trở nên hài hòa và đầy đủ. Gỗ đàn hương và Vani hòa quyện với nhau như một cặp đôi đang khiêu vũ, trong veo đầy thơ mộng. Gucci Bloom là một giấc mộng của mùa xuân, mơ màng dưới bóng cây cổ thụ, nhưng biết hé nở và tỏa hương khi cần.', 100, 10, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT cho bảng `billdetail`
--
ALTER TABLE `billdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
