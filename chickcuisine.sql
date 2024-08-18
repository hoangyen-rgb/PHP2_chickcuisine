-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th2 19, 2024 lúc 09:13 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chickcuisine`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cartdetail`
--

CREATE TABLE `cartdetail` (
  `Id` int(5) NOT NULL COMMENT 'Mã chi tiết giỏ hàng',
  `Quantity` int(10) NOT NULL COMMENT 'Số lượng',
  `Price` int(10) NOT NULL COMMENT 'Giá',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `Id` int(5) NOT NULL COMMENT 'Mã danh mục',
  `Name` varchar(50) NOT NULL COMMENT 'Tên danh mục',
  `Image` varchar(255) NOT NULL COMMENT 'Tên file ảnh danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`Id`, `Name`, `Image`) VALUES
(4, 'Bánh ngọt', 'category-dessert.png'),
(5, 'Mì', 'category-noodle.png'),
(6, 'Đồ uống', 'category-drink.png'),
(7, 'Trà sữa', 'category-milk-tea.png'),
(8, 'Đường phố', 'category-street.png'),
(9, 'Salad', 'category-salad.png'),
(14, 'mèo nè tr', 'a.jpg'),
(18, 'mèo', '409399429_3303324976477855_6641609495805083615_n.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `Id` int(5) NOT NULL COMMENT 'Mã bình luận',
  `Content` text NOT NULL COMMENT 'Nội dung',
  `Rating` int(1) NOT NULL COMMENT 'Đánh giá (1-5)',
  `Time` datetime NOT NULL COMMENT 'Thời gian',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `Id` int(5) NOT NULL COMMENT 'Mã đơn hàng',
  `TotalPrice` int(10) NOT NULL COMMENT 'Tổng giá',
  `Note` text DEFAULT NULL COMMENT 'Ghi chú',
  `Date` datetime NOT NULL COMMENT 'Ngày đặt',
  `Status` int(1) NOT NULL COMMENT 'Trạng thái\r\n(1 = Đang chờ, 2 = Đang chuẩn bị, 3 = Đang giao hàng, 4 = Đã giao hàng, 5 = Đã hủy)',
  `UserId` int(5) NOT NULL COMMENT 'Mã người dùng',
  `RecipientName` varchar(50) DEFAULT NULL,
  `RecipientPhoneNumber` varchar(10) DEFAULT NULL,
  `RecipientAddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`Id`, `TotalPrice`, `Note`, `Date`, `Status`, `UserId`, `RecipientName`, `RecipientPhoneNumber`, `RecipientAddress`) VALUES
(363, 0, '', '2024-01-27 10:09:47', 5, 278, 'Đặng Phượng Hoàng Yến', '0389511390', '123'),
(364, 0, '', '2024-01-27 10:10:59', 5, 278, 'Đặng Phượng Hoàng Yến', '0389511390', '123'),
(365, 0, '', '2024-01-27 10:26:16', 5, 278, 'yến', '0389511390', '123'),
(366, 0, '', '2024-01-27 10:27:31', 5, 278, 'yến', '0389511390', '123'),
(367, 0, '', '2024-01-27 10:28:21', 5, 278, 'yến', '0389511390', '123'),
(368, 0, '', '2024-01-27 10:28:59', 5, 278, 'yến', '0389511390', '123'),
(369, 0, '', '2024-01-27 10:29:27', 5, 278, 'yến', '0389511390', '123'),
(379, 0, '', '2024-01-27 10:58:32', 5, 278, 'yến', '0389511390', '867'),
(380, 0, '', '2024-01-27 10:59:32', 5, 278, 'yến', '0389511390', '556644'),
(381, 0, '', '2024-01-27 11:00:45', 5, 278, 'yến', '0389511390', '556644'),
(382, 0, '', '2024-01-27 11:00:56', 5, 278, 'yến', '0389511390', '556644'),
(388, 0, '', '2024-01-28 04:41:11', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(389, 0, '', '2024-01-28 09:47:02', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(390, 0, '', '2024-01-28 10:04:45', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(391, 0, '', '2024-01-28 10:06:26', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(392, 0, '', '2024-01-28 10:07:42', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(393, 0, '', '2024-01-28 10:10:31', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(394, 0, '', '2024-01-28 10:12:00', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(395, 0, '', '2024-01-28 10:12:13', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(396, 0, '', '2024-01-28 10:12:49', 5, 278, 'yến', '0389511390', 'Huỳnh Thị Xưa<!>khu phố 7<!>Hoà Phúc<!>Củ chi<!>Củ Chi<!>'),
(397, 0, '', '2024-01-28 10:14:10', 5, 339, 'yen', '123', '123333333333'),
(398, 42750, '', '2024-01-28 12:40:12', 5, 340, 'áđá', 'ád', 'ád'),
(399, 20700, '', '2024-01-28 12:46:25', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(400, 22800, '', '2024-01-28 16:20:46', 5, 341, 'ád123', '123213123', '132'),
(401, 20700, '', '2024-01-28 16:21:33', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(402, 20700, '', '2024-01-29 05:15:58', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(403, 22800, '', '2024-01-29 05:18:02', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(404, 22800, '', '2024-01-29 05:18:26', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(405, 20700, '', '2024-01-29 05:19:23', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(406, 20700, '', '2024-01-29 05:20:14', 4, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(407, 47500, '', '2024-01-29 05:30:16', 3, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(408, 20700, '', '2024-01-29 09:54:14', 5, 342, '123', '123', '123'),
(409, 43500, '', '2024-01-29 09:54:14', 5, 342, '123', '123', '123'),
(410, 67250, '', '2024-01-29 09:54:14', 5, 342, '123', '123', '123'),
(411, 20700, '', '2024-01-29 09:56:05', 1, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(412, 20700, '', '2024-01-29 09:56:14', 1, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(413, 68200, '', '2024-01-29 09:56:14', 5, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(414, 20700, '', '2024-01-29 09:58:04', 1, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(415, 43500, '', '2024-01-29 09:58:04', 1, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>'),
(416, 0, '', '2024-01-29 10:00:02', 1, 278, 'yến', '0389511390', '123<!>212<!>12213<!>12<!>132<!>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetail`
--

CREATE TABLE `orderdetail` (
  `Id` int(5) NOT NULL COMMENT 'Mã chi tiết đơn hàng',
  `Quantity` int(10) NOT NULL COMMENT 'Số lượng',
  `Price` int(10) NOT NULL COMMENT 'Giá',
  `OrderId` int(5) NOT NULL COMMENT 'Mã đơn hàng',
  `ProductId` int(5) NOT NULL COMMENT 'Mã sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orderdetail`
--

INSERT INTO `orderdetail` (`Id`, `Quantity`, `Price`, `OrderId`, `ProductId`) VALUES
(268, 1, 54000, 396, 2),
(269, 1, 22800, 396, 18),
(270, 1, 22800, 397, 18),
(271, 1, 42750, 398, 8),
(272, 1, 20700, 399, 10),
(273, 1, 22800, 400, 18),
(274, 1, 20700, 401, 10),
(275, 1, 20700, 402, 10),
(276, 1, 22800, 403, 18),
(277, 1, 22800, 404, 18),
(278, 1, 20700, 405, 10),
(279, 1, 20700, 406, 10),
(280, 1, 47500, 407, 7),
(281, 1, 20700, 408, 10),
(282, 1, 22800, 409, 18),
(283, 1, 23750, 410, 15),
(284, 1, 20700, 411, 10),
(285, 1, 20700, 412, 10),
(286, 1, 47500, 413, 7),
(287, 1, 20700, 414, 10),
(288, 1, 22800, 415, 18),
(289, 1, 20700, 416, 10),
(290, 1, 22800, 416, 18);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `Id` int(5) NOT NULL COMMENT 'Mã sản phẩm',
  `Name` varchar(50) NOT NULL COMMENT 'Tên sản phẩm',
  `Image` varchar(255) NOT NULL COMMENT 'Tên file ảnh sản phẩm',
  `Description` text NOT NULL DEFAULT current_timestamp() COMMENT 'Mô tả sản phẩm',
  `Price` int(10) NOT NULL COMMENT 'Giá bán sản phẩm',
  `Cost` int(10) NOT NULL COMMENT 'Chi phí sản phẩm',
  `Discount` int(3) NOT NULL COMMENT 'Giảm giá sản phẩm',
  `Views` int(5) NOT NULL COMMENT 'Số lượt xem',
  `IsSpecial` tinyint(1) NOT NULL COMMENT 'Đặc biệt (1 = có, 0 = không)',
  `CategoryId` int(5) DEFAULT NULL COMMENT 'Mã danh mục'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`Id`, `Name`, `Image`, `Description`, `Price`, `Cost`, `Discount`, `Views`, `IsSpecial`, `CategoryId`) VALUES
(1, 'dog', 'logo .png', 'Món thạch chanh mâm xôi là một món tráng miệng truyền thống với hương vị tươi mát và bắt mắt. Thạch chanh mâm xôi bao gồm lớp thạch chanh mịn màng, được làm từ nước chanh tươi, đường và gelatin, được đặt trên mâm xôi trắng mềm mịn. Mâm xôi có mùi thơm của nếp gạo và được trang trí bằng những lát dừa tươi và hạt mè rang. Món này là sự kết hợp hoàn hảo giữa vị chua ngọt của thạch chanh và vị ngọt nhẹ của mâm xôi, mang lại cảm giác thú vị và sảng khoái cho người thưởng thức.', 31000, 24800, 0, 185, 0, 4),
(2, 'Cocktail táo', 'cocktail-tao.png', 'Món cocktail táo là một sự kết hợp tuyệt vời giữa vị chua ngọt của táo và hương thơm của các thành phần khác như rượu vodka, nước chanh và đường. Cocktail táo có màu sắc tươi sáng và hấp dẫn, mang lại cảm giác mát lạnh và sảng khoái khi thưởng thức. Món này thường được trang trí bằng lát táo tươi hoặc đá viên, tạo nên một thức uống hấp dẫn và hòa quyện với không gian vui tươi và năng động.', 60000, 48000, 10, 168, 0, 6),
(3, 'Cocktail xương rồng', 'cocktail-xuong-rong.png', 'Món cocktail xương rồng là một sự pha trộn độc đáo giữa hương vị trái cây tươi mát và hình dáng độc đáo của xương rồng. Cocktail này thường được làm từ nước ép hoa quả như dứa, cam, và dứa xanh, kết hợp với rượu hoặc nước ngọt. Món cocktail xương rồng có màu sắc rực rỡ và hấp dẫn, tạo nên một trải nghiệm thú vị và độc đáo cho thực khách.', 55000, 44000, 10, 120, 1, 6),
(4, 'Xúc xích nấm', 'xuc-xich-nam.png', 'Món xúc xích nấm là sự kết hợp ngon lành giữa xúc xích thịt và nấm tươi. Xúc xích được nướng hoặc chiên giòn, mang lại hương vị thơm ngon và đậm đà. Nấm tươi thêm độ mềm mịn và hương vị đặc trưng. Món xúc xích nấm thường được dùng làm món ăn nhẹ, hoặc kèm với bánh mì, mì Ý hoặc salad.', 20000, 16000, 0, 25, 0, 4),
(5, 'Xúc xích nấm', 'xuc-xich-nam.png', 'Món xúc xích nấm là sự kết hợp ngon lành giữa xúc xích thịt và nấm tươi. Xúc xích được nướng hoặc chiên giòn, mang lại hương vị thơm ngon và đậm đà. Nấm tươi thêm độ mềm mịn và hương vị đặc trưng. Có thể dùng làm món ăn nhẹ, hoặc kèm với bánh mì, mì Ý hoặc salad.', 35000, 28000, 15, 75, 0, 8),
(6, 'Nấm Portobello nhồi phô mai', 'nam-portobello-nhoi-pho-mai.png', 'Nấm Portobello nhồi phô mai là một món ăn tuyệt vời, với nấm Portobello to và mềm, được nhồi đầy với một hỗn hợp phô mai kem mịn, tỏi thái nhỏ và các loại gia vị thơm ngon khác. Khi nướng, nấm trở nên mềm mịn và phô mai tan chảy, tạo nên một sự kết hợp hương vị độc đáo và ngon lành. Món ăn này thường được trang trí với rau mùi tươi và hạt tiêu đen, tạo nên một món ăn hấp dẫn về cả mắt và khẩu vị. Bạn có thể thưởng thức nấm Portobello nhồi phô mai như một món khai vị ngon lành hoặc kèm với salad ', 35000, 28000, 0, 137, 1, 8),
(7, 'Cocktail kiwi', 'cocktail-kiwi.png', 'món cocktail kiwi là một sự kết hợp tuyệt vời giữa hương vị tươi mát của kiwi và hương thơm của các thành phần khác như rượu vodka, nước chanh và đường. Cocktail kiwi có màu xanh tươi sáng và hấp dẫn, mang lại cảm giác mát lạnh và sảng khoái khi thưởng thức. Món này thường được trang trí bằng lát kiwi tươi hoặc đá viên, tạo nên một thức uống hấp dẫn và hòa quyện với không gian vui tươi và năng động.\r\n', 50000, 40000, 5, 361, 1, 6),
(8, 'Caponata Ý cổ điển', 'caponata-y-co-dien.png', 'Món Caponata Ý cổ điển là một món ăn truyền thống của Ý, mang đậm hương vị địa phương và sự phong phú của các nguyên liệu tươi ngon. Caponata được làm từ các loại rau củ như cà tím, cà chua, cà rốt, hành tây, ớt và nhiều loại gia vị khác như cây quế, nghệ, hạt tiêu và giấm. Món này thường được nấu chín chầm chậm để các thành phần hòa quyện với nhau, tạo nên một hương vị độc đáo và phong phú. Caponata Ý cổ điển thường được dùng làm món khai vị hoặc kèm với bánh mì nướng, mang lại trải nghiệm ẩm t', 45000, 36000, 5, 236, 0, 8),
(9, 'Mỳ Ý sốt bí đỏ', 'my-y-sot-bi-do.png', 'Mì ý sốt bí đỏ là một món ăn Ý truyền thống, nơi mì ý được kết hợp với sốt bí đỏ. Sốt bí đỏ được làm từ bí đỏ tươi, nấu chín và xay nhuyễn kèm với các thành phần như hành tây, tỏi, gia vị và nước cốt dừa. Món này có hương vị độc đáo, hấp dẫn và màu sắc hấp dẫn từ bí đỏ. Mì ý sốt bí đỏ thường được thưởng thức kèm với phô mai Parmesan và rau mùi tươi, tạo nên một trải nghiệm ẩm thực đậm đà và ngon lành.', 35000, 28000, 5, 123, 1, 5),
(10, 'Bánh mì nướng phô mai cà chua', 'banh-mi-nuong-pho-mai-ca-chua.png', 'bánh mì nướng phô mai cà chua là một món ăn ngon với sự kết hợp giữa bánh mì nướng giòn, phô mai béo ngậy và cà chua tươi mọng.\r\n', 23000, 18400, 10, 350, 1, 8),
(11, 'Bánh trứng kẹp nấm', 'banh-trung-kep-nam.png', 'Bánh trứng kẹp nấm là một món ăn ngon và đơn giản, với trứng và nấm được kẹp giữa hai lát bánh mì. Trứng được chiên hoặc luộc tới độ chín vừa, tạo nên lớp lòng đỏ mềm mịn hoặc lòng trắng bồng bềnh. Nấm tươi được thái mỏng và chế biến sao cho giữ được độ giòn và hương vị tự nhiên. Khi kết hợp với bánh mì, món ăn trở nên hấp dẫn với sự kết hợp của các thành phần. Bánh trứng kẹp nấm thường được thưởng thức kèm với nước sốt tùy ý hoặc các loại gia vị như mayonnaise, hành tây, rau sống và ớt. Đây là ', 24000, 19200, 5, 219, 0, 8),
(12, 'Bánh trứng nướng tỏi', 'banh-trung-nuong-toi.png', 'Bánh trứng nướng tỏi là một món ăn đơn giản nhưng ngon miệng. Trứng được đập vào một chén, kết hợp với tỏi thái nhỏ và gia vị như muối, tiêu và rau mùi tươi. Hỗn hợp trứng và tỏi được đánh đều để tạo ra một hỗn hợp mịn và bọt nhẹ. Sau đó, hỗn hợp được đổ vào khuôn nướng và nướng trong lò nhiệt độ vừa khoảng 15-20 phút cho đến khi bánh trứng chín vàng và phồng lên. Khi nướng xong, món bánh trứng nướng tỏi có một hương vị thơm ngon của tỏi, cùng với vị béo của trứng và hương thơm của rau mùi tươi.', 25000, 20000, 0, 100, 0, 8),
(13, 'Salad đậu phụ', 'salad-dau-phu.png', 'Salad đậu phụ là một món ăn tươi mát và bổ dưỡng. Nó được làm từ đậu phụ tươi, được cắt thành từng miếng nhỏ và kết hợp với các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây. Đậu phụ có vị thịt mềm mịn và hấp dẫn, tạo nên một sự kết hợp hương vị độc đáo. Món salad này thường được trang trí với gia vị như mè rang, hành phi, và nước mắm chua ngọt. Salad đậu phụ là một món ăn nhẹ nhàng và giàu chất dinh dưỡng, phù hợp để thưởng thức trong bữa trưa hoặc bữa tối.', 20000, 16000, 10, 103, 1, 9),
(14, 'Salad mì ý', 'salad-mi-y.png', 'Món salad mì ý là một món ăn tươi mát và đa dạng, kết hợp giữa mì ý mềm mịn và các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây. Salad còn được trang trí với các thành phần khác như jambon, phô mai và trứng luộc. Mì ý tạo nên một cơ sở ngon và sự kết hợp của các loại rau và gia vị tạo nên một hương vị phong phú. Salad mì ý thường được kết hợp với nước sốt vinaigrette hoặc nước mắm chua ngọt, tạo nên một món ăn tươi mát và hấp dẫn.', 45000, 36000, 15, 117, 1, 9),
(15, 'Salad trộn cơm', 'com-tron-salad.png', 'Món salad trộn cơm là sự pha trộn hài hòa giữa cơm trắng và các loại rau tươi như rau xà lách, cà chua, dưa leo và hành tây.', 25000, 20000, 5, 244, 0, 9),
(16, 'Súp lơ nướng Tahini', 'sup-lo-nuong-tahini.png', 'Súp lơ nướng tahini là một món ăn ngon và đầy đặn, với lơ nướng thơm béo và hương vị đặc biệt từ tahini.', 15000, 12000, 5, 106, 1, 9),
(17, 'Bánh phô mai mâm xôi', 'banh-pho-mai-mam-xoi.png', 'Bánh phô mai mâm xôi là một món ăn ngọt thơm ngon, nơi bánh phô mai mềm mịn và mâm xôi ngọt ngào hòa quyện với nhau.', 25000, 20000, 5, 195, 1, 4),
(18, 'Sinh tố trứng', 'sinh-to-trung.png', 'Sinh tố trứng là một món đồ uống thơm ngon và bổ dưỡng, nơi trứng tươi được kết hợp với sữa tươi, đường và các loại trái cây tươi ngon như chuối, dứa, và dâu tây. Món này có hương vị ngọt ngào từ trái cây và độ béo mịn từ sữa và trứng, tạo nên một sự kết hợp hài hòa và thỏa mãn vị giác. Sinh tố trứng thường được thưởng thức trong những ngày nóng bức hoặc làm món tráng miệng sau bữa ăn.', 24000, 19200, 5, 334, 0, 6),
(19, 'Kem dừa vải', 'kem-dua-vai.png', 'Kem dừa vải là một món tráng miệng ngọt ngào và thơm mát, nơi kem dừa mềm mịn và vị ngọt của vải kết hợp tạo nên một hương vị độc đáo và thú vị.', 15000, 12000, 5, 94, 1, 4),
(20, 'Pudding socola hạt lựu', 'pudding-socola-hat-luu.png', 'Món Pudding socola hạt lựu là một món tráng miệng thơm ngon với hương vị socola đậm đà và hạt lựu giòn tan.\r\n', 20000, 16000, 0, 202, 0, 4),
(21, 'Mì xào cuộn trứng', 'mi-xao-cuon-trung.png', 'Mì xào cuộn trứng là một món ăn ngon với mì xào được cuộn trong trứng và nướng giòn.', 23000, 18400, 10, 103, 0, 5),
(22, 'Mì ramen miso', 'mi-ramen-miso.png', 'Mì ramen miso là một món ăn truyền thống của Nhật Bản, với mì mềm mịn và nước dùng miso đậm đà. Nước dùng miso được làm từ nấm miso, một loại gia vị truyền thống của Nhật Bản, kết hợp với các thành phần như xương heo, xương gà, rau củ và các loại gia vị khác để tạo ra một hương vị độc đáo và thơm ngon. Mì ramen thường được kèm theo các loại topping như thịt heo, trứng luộc, rau mùi, rong biển và hành tây. Món ăn này thường được thưởng thức trong những ngày lạnh hoặc khi bạn muốn một bữa ăn ngon ', 30000, 24000, 15, 90, 1, 5),
(23, 'Mì tsukemen', 'mi-tsukemen.png', 'Mì tsukemen là một món ăn đặc trưng của Nhật Bản, với mì dày và nước dùng đậm đà. Thay vì truyền thống là ngâm mì trong nước dùng như mì ramen, mì tsukemen được đặt riêng vào một tô riêng, và nước dùng được đặt trong một tô khác. Khi ăn, bạn sẽ lấy một miếng mì từ tô mì và ngâm vào tô nước dùng, sau đó ăn mì và nước dùng cùng lúc. Nước dùng thường được làm từ xương heo, xương gà hoặc hải sản, kết hợp với các loại gia vị như tương miso, tương đậu nành, tỏi, và gia vị khác để tạo ra hương vị độc đ', 35000, 28000, 5, 22, 0, 5),
(24, 'Sushi', 'sushi.png', 'Sushi là một món ăn truyền thống của Nhật Bản, với cơ sở là cơm trộn giấm được cuộn trong các loại hải sản như cá hồi, tôm, hoặc hải sản khác, cùng với rau sống và các loại gia vị như wasabi và gừng.', 45000, 36000, 15, 134, 1, NULL),
(25, 'Cơm cà ri trứng', 'com-cari-trung.png', 'Cơm cà ri trứng là một món ăn ngon với cơm trắng mềm mịn được trộn với cà ri và trứng, tạo nên một hương vị đậm đà và thơm ngon.', 25000, 20000, 0, 238, 0, NULL),
(26, 'Hamburger thịt bò', 'hamburger-bo.png', 'Hamburger bò là một món ăn ngon với bánh mì mềm mịn, thịt bò xay tươi ngon, và các loại gia vị và rau sống như cà chua, hành tây và rau xà lách.', 23000, 18400, 10, 113, 1, NULL),
(27, 'Combo hamburger khoai tây chiên', 'combo-hamburger-khoai-tay-chien.png', 'Combo hamburger khoai tây chiên là một sự kết hợp tuyệt vời giữa món hamburger thơm ngon và khoai tây chiên giòn tan.', 30000, 24000, 10, 111, 1, NULL),
(28, 'Combo hamburger khoai tây chiên gà rán', 'combo-hamburger-khoai-tay-chien-ga-ran.png', 'Combo hamburger khoai tây chiên gà rán là một sự kết hợp tuyệt vời giữa món hamburger thơm ngon và khoai tây chiên và gà rán giòn tan.', 40000, 32000, 5, 241, 1, NULL),
(29, 'Bánh mì kẹp xúc xích', 'banh-mi-kep-xuc-xich.png', 'Bánh mì kẹp xúc xích là một món ăn vặt ngon lành với bánh mì mềm mịn và xúc xích thịt bò nướng giòn tan.\r\n', 25000, 20000, 0, 127, 1, 8),
(30, 'Trà sữa ô long', 'tra-sua-o-long.png', 'Trà sữa ô long là một đồ uống phổ biến với hương vị đặc trưng của trà ô long hòa quyện với sữa béo ngọt, tạo nên một hương vị thơm ngon và hấp dẫn.', 25000, 20000, 5, 117, 1, 6),
(31, 'Trà sữa thái xanh', 'tra-sua-thai-xanh.png', 'Trà sữa thái xanh là một đồ uống phổ biến và thú vị, kết hợp giữa hương vị đặc trưng của trà xanh và sữa thơm ngon. Trà xanh thái được chế biến từ lá trà tươi nhưng không qua quá trình lên men, giữ nguyên hương vị tự nhiên và màu xanh đặc trưng. Khi trộn với sữa, hương vị trà xanh thái trở nên nhẹ nhàng và bùi ngọt, tạo nên một sự kết hợp hài hòa và thỏa mãn vị giác. Đôi khi, trà sữa thái xanh còn được thêm đá hoặc bột trân châu để tăng thêm sự thú vị và độ ngon. Món này thường được thưởng thức ', 25000, 20000, 5, 104, 1, 6),
(32, 'Trà sữa khoai lang tím', 'sua-tuoi-tran-trau-duong-den-khoai-lang-tim.png', 'Trà sữa khoai lang tím là một đồ uống độc đáo với hương vị đặc biệt của khoai lang tím, kết hợp với trà đen thơm ngon và sữa béo mịn.', 25000, 20000, 5, 116, 1, 7),
(33, 'Trà sữa lài', 'tra-sua-lai.png', 'Trà sữa lài là một loại đồ uống phổ biến với hương vị đặc trưng của trà đen pha chút sữa và thêm một chút đường để tạo thành một hỗn hợp ngọt ngào và đậm đà. Hương vị của trà đen mang đến sự đậm đà và mạnh mẽ, trong khi sữa tạo ra lớp kem mịn và béo ngọt. Thêm vào đó, đường làm tăng thêm độ ngọt và cân bằng hương vị tổng thể của trà sữa lài. Đây là một món đồ uống thú vị và thỏa mãn vị giác, phù hợp để thưởng thức trong những ngày nóng hoặc khi bạn muốn một ly trà thơm ngon và ngọt ngào.', 25000, 20000, 0, 243, 0, 7),
(34, 'Sữa tươi trân trâu đường đen', 'sua-tuoi-tran-trau-duong-den.png', 'Sữa tươi trân châu đường đen là một món đồ uống phổ biến và thú vị, với hương vị đặc trưng của trà đen hòa quyện với sữa béo ngọt và trân châu giòn tan. Trà đen tạo nên một hương vị đậm đà và mạnh mẽ, cùng với sữa tạo nên một lớp kem mịn và béo ngọt. Trân châu, là những viên bột sắn nấu chín, có độ giòn và đàn hồi đặc biệt, tạo thêm sự thú vị và độ ngon cho món trà sữa này. Đường đen, với hương vị đặc trưng của mật đường, được thêm vào để tăng thêm độ ngọt và đậm đà cho món trà sữa này. Món trà ', 30000, 24000, 20, 124, 1, 6),
(43, 'tí nị', 'tini.jpg', 'nothing', 1000, 1000, 0, 40, 0, 14),
(44, 'Thanh niên giờ dây thun', '1-01.png', 'Ngủ nhiều vl', 300000, 270000, 0, 6, 0, 14);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `Id` int(5) NOT NULL COMMENT 'Mã người dùng',
  `Email` varchar(50) DEFAULT NULL COMMENT 'Email',
  `Password` varchar(255) DEFAULT NULL COMMENT 'Mật khẩu',
  `Avatar` varchar(255) DEFAULT NULL COMMENT 'Tên file ảnh đại diện',
  `Name` varchar(50) DEFAULT NULL COMMENT 'Tên người dùng',
  `PhoneNumber` varchar(10) DEFAULT NULL COMMENT 'Số điện thoại',
  `Point` int(5) DEFAULT NULL COMMENT 'Điểm mua hàng',
  `Role` int(1) NOT NULL COMMENT 'Vai trò (0 = người dùng chưa đăng ký, 1 = khách hàng, 2 = Quản trị)',
  `Address` text DEFAULT NULL COMMENT 'Địa chỉ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`Id`, `Email`, `Password`, `Avatar`, `Name`, `PhoneNumber`, `Point`, `Role`, `Address`) VALUES
(278, 'yendphps28938@fpt.edu.vn', '$2y$10$djlEAP.uzB92qVhiX3zWau/dVsnVv/dj2qmD5BugMmCSHtU.Dky8a', '1-01 (1).png', 'yến', '0389511390', 500, 2, '123<!>212<!>12213<!>12<!>132<!>'),
(290, '', '', NULL, NULL, '', 500, 0, NULL),
(291, '', '', NULL, NULL, '', 500, 0, NULL),
(292, '', '', NULL, NULL, '', 500, 0, NULL),
(293, '', '', NULL, NULL, '', 500, 0, NULL),
(294, '', '', NULL, NULL, '', 500, 0, NULL),
(295, '', '', NULL, NULL, '', 500, 0, NULL),
(296, '', '', NULL, NULL, '', 500, 0, NULL),
(297, '', '', NULL, NULL, '', 500, 0, NULL),
(298, '', '', NULL, NULL, '', 500, 0, NULL),
(299, '', '', NULL, NULL, '', 500, 0, NULL),
(300, '', '', NULL, NULL, '', 500, 0, NULL),
(301, '', '', NULL, NULL, '', 500, 0, NULL),
(302, '', '', NULL, NULL, '', 500, 0, NULL),
(303, '', '', NULL, NULL, '', 500, 0, NULL),
(304, '', '', NULL, NULL, '', 500, 0, NULL),
(305, '', '', NULL, NULL, '', 500, 0, NULL),
(306, '', '', NULL, NULL, '', 500, 0, NULL),
(307, '', '', NULL, NULL, '', 500, 0, NULL),
(308, '', '', NULL, NULL, '', 500, 0, NULL),
(309, '', '', NULL, NULL, '', 500, 0, NULL),
(310, '', '', NULL, NULL, '', 500, 0, NULL),
(311, '', '', NULL, NULL, '', 500, 0, NULL),
(312, '', '', NULL, NULL, '', 500, 0, NULL),
(313, '', '', NULL, NULL, '', 500, 0, NULL),
(314, '', '', NULL, NULL, '', 500, 0, NULL),
(315, '', '', NULL, NULL, '', 500, 0, NULL),
(316, '', '', NULL, NULL, '', 500, 0, NULL),
(317, '', '', NULL, NULL, '', 500, 0, NULL),
(318, '', '', NULL, NULL, '', 500, 0, NULL),
(319, '', '', NULL, NULL, '', 500, 0, NULL),
(320, '', '', NULL, NULL, '', 500, 0, NULL),
(321, '', '', NULL, NULL, '', 500, 0, NULL),
(322, '', '', NULL, NULL, '', 500, 0, NULL),
(323, '', '', NULL, NULL, '', 500, 0, NULL),
(324, '', '', NULL, NULL, '', 500, 0, NULL),
(325, '', '', NULL, NULL, '', 500, 0, NULL),
(326, '', '', NULL, NULL, '', 500, 0, NULL),
(327, '', '', NULL, NULL, '', 500, 0, NULL),
(328, '', '', NULL, NULL, '', 500, 0, NULL),
(329, '', '', NULL, NULL, '', 500, 0, NULL),
(330, '', '', NULL, NULL, '', 500, 0, NULL),
(331, '', '', NULL, NULL, '', 500, 0, NULL),
(332, '', '', NULL, NULL, '', 500, 0, NULL),
(333, '', '', NULL, NULL, '', 500, 0, NULL),
(334, '', '', NULL, NULL, '', 500, 0, NULL),
(335, '', '', NULL, NULL, '', 500, 0, NULL),
(336, '', '', NULL, NULL, '', 500, 0, NULL),
(337, '', '', NULL, NULL, '', 500, 0, NULL),
(338, '', '', NULL, NULL, '', 500, 0, NULL),
(339, '', '', NULL, NULL, '', 500, 0, NULL),
(340, '', '', NULL, NULL, '', 500, 0, NULL),
(341, '', '', NULL, NULL, '', 500, 0, NULL),
(342, '', '', NULL, NULL, '', 500, 0, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `uservoucher`
--

CREATE TABLE `uservoucher` (
  `Id` int(5) NOT NULL,
  `UserId` int(5) NOT NULL,
  `VoucherId` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `voucher`
--

CREATE TABLE `voucher` (
  `Id` int(5) NOT NULL COMMENT 'Mã Voucher',
  `Code` varchar(20) NOT NULL COMMENT 'Mã chữ Voucher',
  `Description` text NOT NULL COMMENT 'Mô tả Voucher',
  `DiscountPrice` int(10) NOT NULL COMMENT 'Số tiền giảm (Chỉ nhập 1 trong 2 cột Số tiền giảm và Phần trăm giảm)',
  `DiscountPercentage` int(3) NOT NULL COMMENT 'Phần trăm giảm (Chỉ nhập 1 trong 2 cột Số tiền giảm và Phần trăm giảm)',
  `MinOrderPrice` int(10) NOT NULL COMMENT 'Giá trị đơn hàng yêu cầu tối thiểu',
  `MaxDiscountPrice` int(10) NOT NULL COMMENT 'Mức giảm giá tối đa',
  `ExpiryDate` date NOT NULL COMMENT 'Ngày hết hạn',
  `RemainingUses` int(5) NOT NULL COMMENT 'Lượt dùng tối đa',
  `Point` int(5) NOT NULL COMMENT 'Số điểm cần để đổi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ProductId` (`ProductId`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`);

--
-- Chỉ mục cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `OrderId` (`OrderId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `product_ibfk_1` (`CategoryId`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Chỉ mục cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `UserId` (`UserId`),
  ADD KEY `VoucherId` (`VoucherId`);

--
-- Chỉ mục cho bảng `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết giỏ hàng', AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã danh mục', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã bình luận', AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã đơn hàng', AUTO_INCREMENT=417;

--
-- AUTO_INCREMENT cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã chi tiết đơn hàng', AUTO_INCREMENT=291;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã sản phẩm', AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã người dùng', AUTO_INCREMENT=343;

--
-- AUTO_INCREMENT cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `voucher`
--
ALTER TABLE `voucher`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'Mã Voucher', AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cartdetail`
--
ALTER TABLE `cartdetail`
  ADD CONSTRAINT `cartdetail_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `cartdetail_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`);

--
-- Các ràng buộc cho bảng `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD CONSTRAINT `orderdetail_ibfk_1` FOREIGN KEY (`OrderId`) REFERENCES `order` (`Id`),
  ADD CONSTRAINT `orderdetail_ibfk_2` FOREIGN KEY (`ProductId`) REFERENCES `product` (`Id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`CategoryId`) REFERENCES `category` (`Id`) ON DELETE SET NULL;

--
-- Các ràng buộc cho bảng `uservoucher`
--
ALTER TABLE `uservoucher`
  ADD CONSTRAINT `uservoucher_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`Id`),
  ADD CONSTRAINT `uservoucher_ibfk_2` FOREIGN KEY (`VoucherId`) REFERENCES `voucher` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
