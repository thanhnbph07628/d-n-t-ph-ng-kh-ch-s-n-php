-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 18, 2019 lúc 05:19 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking`
--

CREATE TABLE `booking` (
  `BookRoomID` int(11) NOT NULL,
  `User` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TotalPrice` int(11) NOT NULL,
  `BookingDate` date NOT NULL,
  `DatedCheck` date NOT NULL,
  `NumberPeople` int(11) NOT NULL,
  `Handling` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `booking`
--

INSERT INTO `booking` (`BookRoomID`, `User`, `TotalPrice`, `BookingDate`, `DatedCheck`, `NumberPeople`, `Handling`, `CreateAt`) VALUES
(123, 'VerryWell', 7200000, '2019-12-19', '2019-12-22', 4, 3, '2019-12-18 16:12:18');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `booking_detail`
--

CREATE TABLE `booking_detail` (
  `BookingID` int(11) NOT NULL,
  `BookRoomID` int(11) NOT NULL,
  `RoomID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `booking_detail`
--

INSERT INTO `booking_detail` (`BookingID`, `BookRoomID`, `RoomID`) VALUES
(166, 123, 33),
(167, 123, 34);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `city`
--

CREATE TABLE `city` (
  `CityID` int(11) NOT NULL,
  `NameCity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `city`
--

INSERT INTO `city` (`CityID`, `NameCity`, `Images`, `CreateAt`) VALUES
(3, 'Hải Phòng', 'hai-phong-1.jpg', '2019-12-08 03:36:00'),
(4, 'Thái Bình', 'thaibinh.jpg', '2019-12-08 03:36:00'),
(6, 'Hà nội', 'hanoi.jpg', '2019-12-08 03:36:00'),
(8, 'Hội An', 'hoian.jpg', '2019-12-08 03:36:00'),
(11, 'Cát Bà', 'catba.jpg', '2019-12-08 03:36:00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `CommentID` int(11) NOT NULL,
  `User` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HotelID` int(11) NOT NULL,
  `BookRoomID` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`CommentID`, `User`, `Content`, `HotelID`, `BookRoomID`, `CreateAt`) VALUES
(13, 'VerryWell', 'Khách sạn đẹp', 2, 123, '2019-12-18 16:15:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `convenient`
--

CREATE TABLE `convenient` (
  `ConvenientID` int(11) NOT NULL,
  `HotelID` int(11) NOT NULL,
  `ServiceID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `convenient`
--

INSERT INTO `convenient` (`ConvenientID`, `HotelID`, `ServiceID`) VALUES
(4477, 4, 1),
(4478, 4, 4),
(4479, 4, 6),
(4482, 17, 1),
(4483, 17, 4),
(4484, 17, 6),
(4485, 21, 1),
(4486, 21, 6),
(4493, 5, 1),
(4494, 5, 3),
(4495, 5, 4),
(4496, 5, 7),
(4497, 11, 1),
(4498, 11, 6),
(4507, 23, 1),
(4508, 23, 2),
(4509, 23, 4),
(4510, 23, 6),
(4511, 37, 1),
(4512, 37, 2),
(4513, 37, 3),
(4514, 37, 4),
(4515, 37, 6),
(4516, 37, 7),
(4517, 19, 1),
(4518, 19, 2),
(4519, 19, 4),
(4520, 19, 6),
(4524, 30, 1),
(4525, 30, 3),
(4526, 30, 4),
(4527, 30, 7),
(4528, 2, 1),
(4529, 2, 2),
(4530, 2, 4),
(4531, 34, 1),
(4532, 34, 2),
(4533, 34, 6),
(4534, 34, 7);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hotel`
--

CREATE TABLE `hotel` (
  `HotelID` int(11) NOT NULL,
  `NameHotel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BankAccount` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AccountHolder` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `BankName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CityID` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `Create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hotel`
--

INSERT INTO `hotel` (`HotelID`, `NameHotel`, `Images`, `Address`, `Phone`, `BankAccount`, `AccountHolder`, `BankName`, `CityID`, `view`, `Create_at`) VALUES
(2, 'Khách sạn Movenpick Hải Phòng', '01.jpg,01-1.jpg,03.jpg,03-1.jpg,04.jpg,05.jpg', 'Số 54, Liễu Giai, phố Cống Vị, Quận Ba Đình, Hải Phòng', '02323423233', '3215465765112', 'Lê Hải Name', 'Tập Đoàn Điện Tử Viễn Thông Quân Đội Viettel', 3, 118, '2019-11-30 08:47:14'),
(4, 'Khách sạn Icon CatBa- Luxury Design', '1-1512818632_680x0.jpg,1cbc1411d49300f251f38f33255bd8ee.jpg,2_228400.jpg,6_62_cr740-483.jpg,26_avatar.jpg,90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg', 'Đường Trần Hưng Đạo-Đức Nông-Cát Bà', '0929283222', '00120327080213', 'Trần Văn Đức', 'Ngân Hàng VietComBank', 11, 11, '2019-11-30 14:02:36'),
(5, 'Khách sạn Tân Sơn Nhất Hội An Resort', '90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg,164230-flc_8_zwdw.jpg,180712-1-2000-ove-hanoi-hotel.jpg.thumb.768.768.jpg,180927-1-2000-roo-LTHA.jpg.thumb.480.480.jpg,6377379_19010713580071127088.jpg,14613416.jpg,15697986_1774854649444', 'Đường Thụy Khởi -Cổ nhuế -Hội An', '09232823844', '12321343143413', 'Cao Trọng Hoàng', 'Ngân Hàng VietComBank', 8, 33, '2019-11-30 15:21:32'),
(11, 'Khách Sạn Poulo Condor Boutique Resort & Spa Hội An', '164230-flc_8_zwdw.jpg,94106164.jpg,122329940.jpg,219332916.jpg,a6cbc557a3e11e9bfe1a5ebeb2db664c.jpg,Alila_Villas_Soori_Bali_Indonesia.jpg', 'Phố Văn Hoàng-Cầu Đức-Hội An', '03218323444', '4324324213222', 'Lê Thị Linh', 'Ngân Hàng VietComBank', 8, 20, '2019-11-30 16:03:19'),
(17, 'Khách Sạn Liberty Central CátBà', '90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg,hotel.jpg,hotel-internal.jpg,image_34.jpg,mobile_full_mt1_1541323569.jpg,Mường-Thanh-Grand-Nha-Trang-09-645x430.jpg,xaydungvietnam.net.11.11.27-4.jpg', 'Đường Lê Thánh Tông-Gò Vấp -Cát Bà', '0267272833', '321028327321', 'Trần Đức Mạnh', 'Ngân Hàng BIDV', 11, 0, '2019-12-07 15:47:05'),
(19, 'Khách sạn InterContinental Thái Bình Westlake', '436_hoang-thanh.jpg,219332916.jpg,a6cbc557a3e11e9bfe1a5ebeb2db664c.jpg,Alila_Villas_Soori_Bali_Indonesia.jpg,b0cimage-1506570507546-crop-1506570519351-1506587859.png,c46579c3a0cc9393abe05d3674c2a3a6.jpg,cac-y-tuong-thiet-ke-mat-tien-khach-san-dep-nhat-the', 'Đường Phạm Hải -Đức Linh-Thái Bình', '02327899339', '291263029344', 'Nguyễn Thành Nam', 'Ngân Hàng Quân Đội Viettel', 4, 4, '2019-12-07 15:47:47'),
(21, 'Khách Sạn Six Senses Hội An', '90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg,539264a_hb_p_007.jpg,122329940.jpg,219332916.jpg,a6cbc557a3e11e9bfe1a5ebeb2db664c.jpg,Alila_Villas_Soori_Bali_Indonesia.jpg,AMH-Swimming-Pool-1024x682.jpg', 'Đường Trần Hữu Dực -Đức Thắng-Hội An', '0987233772', '343432432423', 'Lê Thế Anh', 'Ngân Hàng Quân Đội Viettel', 8, 2, '2019-12-07 15:48:32'),
(23, 'Khách sạn Sofitel Legend Metropole Hà Nội', '180927-1-2000-roo-LTHA.jpg.thumb.480.480.jpg,26_avatar.jpg,90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg,436_hoang-thanh.jpg', '15 Ngô Quyền, Hoàn Kiếm, Hà Nội ', '1900545440', '12334343424', 'Trần Thị Trà My', 'Ngân Hàng VietComBank', 6, 0, '2019-12-07 15:50:20'),
(30, 'Thái Bình Edensee Lake Resort & Spa', '1cbc1411d49300f251f38f33255bd8ee.jpg,p2-1-506x450.jpg,phong-khach-san-sea-front-da-nang-min.jpg,SEB83Y7R4_tranganhotel-p2.jpg,T64JRN1FR9_anh-toi-the-reed-hotel.jpg,tải xuống.jpg,thi-cong-noi-that-khach-san-malisa-hotel-apartment-1.jpg', '05 Phố Từ Hoa, P. Quảng An, Quận Tây Hồ, Thái Bình', '0832723223', '132165765234324', 'Kiều Thế Anh', 'Ngân Hàng BIDV', 4, 0, '2019-12-07 16:53:25'),
(34, 'Khách sạn JW Marriott Hải Phòng', '90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg,219332916.jpg,Alila_Villas_Soori_Bali_Indonesia.jpg,AMH-Swimming-Pool-1024x682.jpg,b0cimage-1506570507546-crop-1506570519351-1506587859.png,c46579c3a0cc9393abe05d3674c2a3a6.jpg,cac-y-tuon', '8 Đỗ Đức Dục, Mễ Trì, Từ Liêm, Hải Phòng', '0231038072', '331242132135', 'Lê Minh Chiến', 'Ngân Hàng VietComBank', 3, 0, '2019-12-08 05:00:23'),
(37, 'Lan Rừng Resort & Spa Phước Hải Beach Hà Nội', '6_62_cr740-483.jpg,22.jpg,26_avatar.jpg,90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg,436_hoang-thanh.jpg,94106164.jpg', 'Số 1 Thanh Niên, Quận Ba Đình, Hà Nội  ', '0981711200', '4519721323134', 'Lê Xuân Quảng', 'Ngân Hàng VietComBank', 6, 1, '2019-12-08 05:06:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `infomation`
--

CREATE TABLE `infomation` (
  `InfoID` int(11) NOT NULL,
  `Logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `LogoText` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `infomation`
--

INSERT INTO `infomation` (`InfoID`, `Logo`, `LogoText`, `Address`, `Email`, `Phone`) VALUES
(2, 'Logo.png', 'Tên khách sạn', 'Trường Cao Đẳng Thực Hành FPT Polytechinc', 'quanglxph07563@fpt.edu.vn', '0981711200');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `NewID` int(11) NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Content` text COLLATE utf8_unicode_ci NOT NULL,
  `CreateAt` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`NewID`, `Title`, `Images`, `Content`, `CreateAt`) VALUES
(2, 'Tiệc buffet chào năm mới tại khách sạn ibis Styles Nha Trang', '6377379_19010713580071127088.jpg', '<p>Kh&aacute;ch sạn 4 sao ibis Styles Nha Trang mang đến cho du kh&aacute;ch trải nghiệm tại đ&ecirc;m tiệc buffet &ldquo;New Year&rsquo;s Eve Gala Dinner&rdquo; v&agrave;o ng&agrave;y 31/12 với gi&aacute; một triệu đồng.</p>\r\n\r\n<p>Tết năm nay, bạn c&oacute; thể thử trải nghiệm mới, kh&ocirc;ng đ&oacute;n Tết ở ng&ocirc;i nh&agrave; quen thuộc, m&agrave; d&agrave;nh ri&ecirc;ng cho gia đ&igrave;nh trong một kh&ocirc;ng gian phong c&aacute;ch v&agrave; mới mẻ tại kh&aacute;ch sạn ibis Styles Nha Trang.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"polyad\" src=\"https://i-dulich.vnecdn.net/2019/12/06/477-1575601803-4013-1575606358.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ibis Styles Nha Trang - kh&aacute;ch sạn 4 sao quốc tế mang thương hiệu ibis Styles thuộc tập đo&agrave;n Accor tại Việt Nam. Kh&aacute;ch sạn nằm tại trung t&acirc;m th&agrave;nh phố Nha Trang, chỉ c&aacute;ch biển 15 ph&uacute;t đi bộ, gần c&aacute;c khu mua sắm v&agrave; nhiều điểm du lịch nổi tiếng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"polyad\" src=\"https://i-dulich.vnecdn.net/2019/12/06/592-1575601815-5836-1575606358.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>ibis Styles Nha Trang cung cấp dịch vụ lưu tr&uacute; tiện nghi với 311 ph&ograve;ng thiết kế hiện đại, mang đến nhiều trải nghiệm độc đ&aacute;o cho kh&aacute;ch h&agrave;ng.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"polyad\" src=\"https://i-dulich.vnecdn.net/2019/12/06/739-1575601836-7087-1575606359.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Tầng ba l&agrave; kh&ocirc;ng gian trải nghiệm bể bơi ngo&agrave;i trời ngập nắng, spa, ph&ograve;ng tập thể dục với trang thiết bị hiện đại v&agrave; g&oacute;c vui chơi sắc m&agrave;u d&agrave;nh cho trẻ em.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Nhà hàng StrEATs - tầng M phục vụ các món ăn theo phong cách quốc tế và là nơi phục vụ ăn sáng tự chọn. Trong khi, StrEATs Bar &amp; Grill và quầy bar hồ bơi mang đến không gian thư giãn và du khách có thể thưởng thức các món ăn nhẹ, cocktail hoặc thức uống sáng tạo khác.\" src=\"https://i-dulich.vnecdn.net/2019/12/06/NHA-HANG-3401-1575627386.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Nh&agrave; h&agrave;ng StrEATs - tầng M phục vụ c&aacute;c m&oacute;n ăn theo phong c&aacute;ch quốc tế v&agrave; l&agrave; nơi phục vụ ăn s&aacute;ng tự chọn. Trong khi, StrEATs Bar &amp; Grill v&agrave; quầy bar hồ bơi mang đến kh&ocirc;ng gian thư gi&atilde;n v&agrave; du kh&aacute;ch c&oacute; thể thưởng thức c&aacute;c m&oacute;n ăn nhẹ, cocktail hoặc thức uống s&aacute;ng tạo kh&aacute;c.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Vào đêm giao thừa 31/12, gia đình và bạn bè có thể quây quần tại bữa tiệc New Year’s Eve Gala Dinner 4 sao, thưởng thức các món ăn ngon tại nhà hàng StrEATs. Thực khách sẽ có cơ hội được hòa mình vào giai điệu sôi động cùng với ban nhạc Flamengo, âm hưởng du dương của violin và guitar, hàng chục món ăn hấp dẫn trong thực đơn buffet.Du khách sẽ cùng đếm ngược đón thời khắc giao thừa và nâng ly rượu sâm banh chào năm mới bên người thân yêu trong bầu không khí sang trọng và ấm cúng. Sự kiện hứa hẹn mang đến trải nghiệm thú vị chào đón năm Canh Tý 2020 thật ấn tượng trên thành phố biển Nha Trang.\" src=\"https://i-dulich.vnecdn.net/2019/12/06/TIEC-4397-1575627387.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>V&agrave;o đ&ecirc;m giao thừa 31/12, gia đ&igrave;nh v&agrave; bạn b&egrave; c&oacute; thể qu&acirc;y quần tại bữa tiệc &quot;New Year&rsquo;s Eve Gala Dinner&quot; 4 sao, thưởng thức c&aacute;c m&oacute;n ăn ngon tại nh&agrave; h&agrave;ng StrEATs. Thực kh&aacute;ch sẽ c&oacute; cơ hội được h&ograve;a m&igrave;nh v&agrave;o giai điệu s&ocirc;i động c&ugrave;ng với ban nhạc Flamengo, &acirc;m hưởng du dương của violin v&agrave; guitar, h&agrave;ng chục m&oacute;n ăn hấp dẫn trong thực đơn buffet.</p>\r\n\r\n			<p>Du kh&aacute;ch sẽ c&ugrave;ng đếm ngược đ&oacute;n thời khắc giao thừa v&agrave; n&acirc;ng ly rượu s&acirc;m banh ch&agrave;o năm mới b&ecirc;n người th&acirc;n y&ecirc;u trong bầu kh&ocirc;ng kh&iacute; sang trọng v&agrave; ấm c&uacute;ng. Sự kiện hứa hẹn mang đến trải nghiệm th&uacute; vị ch&agrave;o đ&oacute;n năm Canh T&yacute; 2020 thật ấn tượng tr&ecirc;n th&agrave;nh phố biển Nha Trang.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-12-10 22:34:54'),
(3, 'Điều cần làm để nâng cao năng lực cạnh tranh du lịch', '436_hoang-thanh.jpg', '<p>C&aacute;c chuy&ecirc;n gia cho rằng Việt Nam n&ecirc;n tập trung v&agrave;o ưu ti&ecirc;n trong lĩnh vực du lịch, chất lượng hạ tầng v&agrave; nguồn nh&acirc;n lực.</p>\r\n\r\n<p>Theo b&aacute;o c&aacute;o Năng lực cạnh tranh du lịch - lữ h&agrave;nh của WEF 2019, du lịch Việt Nam tăng 4 bậc so với năm 2017, l&ecirc;n vị tr&iacute; 63/140, đứng thứ 5 trong khu vực Đ&ocirc;ng Nam &Aacute;.&nbsp;Sự tăng hạng chủ yếu nhờ cải thiện của c&aacute;c nh&oacute;m chỉ số về mức độ mở cửa đối với quốc tế, hạ tầng vận tải h&agrave;ng kh&ocirc;ng...</p>\r\n\r\n<p>Tuy nhi&ecirc;n,&nbsp;một số nh&oacute;m chỉ số của Việt Nam vẫn bị đ&aacute;nh gi&aacute; thấp, thiếu t&iacute;nh cạnh tranh như mức độ ưu ti&ecirc;n trong lĩnh vực du lịch, hạ tầng dịch vụ du lịch, sự bền vững về m&ocirc;i trường...</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Các chỉ số tại báo cáo Năng lực cạnh tranh du lịch Việt Nam. Xem lớn hơn tại đây.\" src=\"https://i-dulich.vnecdn.net/2019/12/08/xep-hang-du-lich-Viet-Nam-VnEx-6480-6822-1575789752.jpg\" />\r\n			<p>&nbsp;</p>\r\n\r\n			<ul>\r\n				<li>&nbsp;</li>\r\n				<li>&nbsp;</li>\r\n				<li>&nbsp;</li>\r\n				<li>&nbsp;</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&aacute;c chỉ số tại b&aacute;o c&aacute;o Năng lực cạnh tranh du lịch Việt Nam.&nbsp;<a href=\"https://vnexpress.net/infographics/the-manh-va-han-che-cua-du-lich-viet-nam-3984703.html\">Xem lớn hơn tại đ&acirc;y.</a></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Thứ trưởng Bộ Văn h&oacute;a Thể thao Du lịch L&ecirc; Quang T&ugrave;ng trong một cuộc họp ng&agrave;y 12/11 ở H&agrave; Nội đ&atilde; y&ecirc;u cầu Tổng cục Du lịch chỉ r&otilde; nguy&ecirc;n nh&acirc;n khiến những chỉ số của Việt Nam c&ograve;n bị xếp hạng thấp v&agrave; đưa ra giải ph&aacute;p để cải thiện.</p>\r\n\r\n<p>Theo b&agrave; Trần Bảo Tr&acirc;n, Gi&aacute;m đốc khu vực ch&acirc;u &Aacute; Diễn đ&agrave;n du lịch to&agrave;n cầu,&nbsp;xu hướng hiện nay, kh&aacute;ch ưu ti&ecirc;n chọn chuyến đi tu&acirc;n thủ c&aacute;c vấn đề m&ocirc;i trường th&ocirc;ng qua chương tr&igrave;nh tour. Trong đ&oacute;, họ quan t&acirc;m đến c&aacute;c cơ sở lưu tr&uacute; thực hiện ti&ecirc;u ch&iacute; Go Green, c&aacute;c khu du lịch vui chơi giải tr&iacute; c&oacute; h&agrave;nh động bảo vệ m&ocirc;i trường sinh th&aacute;i.&nbsp;Tuy nhi&ecirc;n hiện nay chỉ số m&ocirc;i trường bền vững của du lịch Việt Nam bị đ&aacute;nh gi&aacute; thấp nhất (121/140), d&ugrave; đ&atilde; được n&acirc;ng hạng so với năm 2017.</p>\r\n\r\n<p>&quot;Điều cần thiết nhất l&agrave; tu&acirc;n thủ về c&aacute;c gi&aacute; trị m&ocirc;i trường bền vững để l&agrave;m nền tảng. Nhằm cải thiện t&aacute;c động ti&ecirc;u cực của du lịch đến m&ocirc;i trường trong qu&aacute; tr&igrave;nh khai th&aacute;c v&agrave; vận h&agrave;nh, Ch&iacute;nh phủ cần c&oacute; chương tr&igrave;nh h&agrave;nh động v&agrave; truyền th&ocirc;ng cụ thể từ ch&iacute;nh s&aacute;ch của quốc gia về m&ocirc;i trường trong du lịch&quot;, b&agrave; Tr&acirc;n n&oacute;i.</p>\r\n\r\n<p>Ngo&agrave;i ra, để cải thiện chỉ số cạnh tranh ở những nh&oacute;m c&oacute; mức thấp, đại diện của Diễn đ&agrave;n du lịch to&agrave;n cầu cho rằng&nbsp;phải phối hợp nguồn t&agrave;i ch&iacute;nh từ c&aacute;c ng&agrave;nh c&oacute; li&ecirc;n quan đến du lịch như m&ocirc;i trường, gi&aacute;o dục, giao th&ocirc;ng, c&ocirc;ng nghệ... Mỗi chương tr&igrave;nh h&agrave;nh động sau đ&oacute; đều phải được đ&aacute;nh gi&aacute; t&iacute;nh hiệu quả tương ứng với ti&ecirc;u ch&iacute; của c&aacute;c tổ chức du lịch to&agrave;n cầu để chọn lọc lại, sao cho ph&ugrave; hợp.&nbsp;Với chỉ số về hạ tầng dịch vụ du lịch, từng địa phương cần ph&acirc;n t&iacute;ch r&otilde; thị trường để thu h&uacute;t đầu tư cơ sở lưu tr&uacute; theo xu hướng du lịch hiện nay.</p>\r\n\r\n<p>Theo &ocirc;ng Ho&agrave;ng Nh&acirc;n Ch&iacute;nh - Trưởng ban Thư k&yacute; Hội đồng Tư vấn du lịch (TAB), Việt Nam cũng phải&nbsp;cải thiện năng lực cạnh tranh giữa c&aacute;c điểm đến ở Việt Nam. Theo đ&oacute;, cần th&agrave;nh lập Tổ chức quản l&yacute; điểm đến đa th&agrave;nh phần; x&acirc;y dựng quy hoạch du lịch điểm đến; ph&aacute;t triển sản phẩm du lịch; quảng b&aacute; v&agrave; x&uacute;c tiến v&agrave; đ&agrave;o tạo n&acirc;ng cao nguồn nh&acirc;n lực.</p>\r\n\r\n<p>Từ đ&oacute;, điểm đến l&agrave; nơi người d&acirc;n cộng đồng sinh sống v&agrave; kh&aacute;ch du lịch tham quan. Khi điểm đến l&agrave;m tăng sự h&agrave;i l&ograve;ng của kh&aacute;ch du lịch, thu h&uacute;t kh&aacute;ch chi ti&ecirc;u cao hơn v&agrave; ở l&acirc;u hơn, kh&aacute;ch quay trở lại nhiều hơn, khi đ&oacute; du lịch Việt Nam sẽ n&acirc;ng cao được năng lực cạnh tranh.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Khánh Hoà từ lâu đã trở thành một điểm đến ưa thích của du khách trong, ngoài nước và ngày càng hấp dẫn hơn với sự xuất hiện của nhiều khu nghỉ dưỡng, khu vui chơi giải trí đẳng cấp quốc tế.\" src=\"https://i-dulich.vnecdn.net/2019/12/08/phu-long-9520-1575803780.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Kh&aacute;nh Ho&agrave; từ l&acirc;u đ&atilde; trở th&agrave;nh một điểm đến ưa th&iacute;ch của du kh&aacute;ch trong, ngo&agrave;i nước v&agrave; ng&agrave;y c&agrave;ng hấp dẫn hơn với sự xuất hiện của nhiều khu nghỉ dưỡng, khu vui chơi giải tr&iacute; đẳng cấp quốc tế.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&Ocirc;ng Ph&ugrave;ng Chu Cường - Tổng gi&aacute;m đốc Ph&uacute; Long cho biết, với lợi thế về cảnh quan, văn ho&aacute; v&agrave; con người, Việt Nam đang nổi l&ecirc;n trở th&agrave;nh điểm du lịch hấp dẫn v&agrave; tăng trưởng nhanh nhất thế giới. Đồng thời, với hệ thống cơ sở hạ tầng ng&agrave;y c&agrave;ng cải thiện, đời sống người d&acirc;n ng&agrave;y một n&acirc;ng cao đ&atilde; th&uacute;c đẩy nhu cầu du lịch.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2019-12-10 22:36:34'),
(6, '4 điểm ngắm hoa mơ đẹp ở Tokyo', '90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg', '<p>C&ocirc;ng vi&ecirc;n Shiba, đền Yushima, đền Kameido hay c&ocirc;ng vi&ecirc;n Hanegi l&agrave; c&aacute;c điểm ngắm hoa mơ v&agrave;o cuối th&aacute;ng 2, khi kết th&uacute;c m&ugrave;a đ&ocirc;ng lạnh gi&aacute;.</p>\r\n\r\n<p>Hoa mận hay ume bắt đầu nở khoảng một trước khi m&ugrave;a&nbsp;<a href=\"https://www.tugo.com.vn/?utm_source=vnexpress\">hoa anh đ&agrave;o</a>&nbsp;bắt đầu tại Nhật. Hoa mơ nở trắng trời khiến cho nhiều du kh&aacute;ch th&iacute;ch th&uacute;.</p>\r\n\r\n<p><strong>C&ocirc;ng vi&ecirc;n Shiba</strong></p>\r\n\r\n<p>C&ocirc;ng vi&ecirc;n Shiba tại phường Minato được x&acirc;y dựng xung quanh đền Zojoji. Ngo&agrave;i những c&acirc;y hoa mơ, du kh&aacute;ch đến đ&acirc;y c&oacute; thể chi&ecirc;m ngưỡng to&agrave;n cảnh ph&iacute;a sau th&aacute;p Tokyo. C&ocirc;ng vi&ecirc;n Shiba l&agrave; nơi trồng hơn 70 c&acirc;y hoa mơ t&iacute;m v&agrave; trắng. Quang cảnh c&ocirc;ng vi&ecirc;n ch&igrave;m trong sắc hoa mơ sẽ l&agrave; một trải nghiệm th&uacute; vị với nhiều kh&aacute;ch du lịch.</p>\r\n\r\n<p>Cũng tại c&ocirc;ng vi&ecirc;n, v&agrave;o mỗi m&ugrave;a hoa mơ sẽ diễn ra lễ hội 2 ng&agrave;y với những hoạt động như thưởng tr&agrave; ngắm hoa v&agrave; c&aacute;c buổi biểu diễn &acirc;m nhạc. Tại đ&acirc;y bạn c&oacute; thể thư gi&atilde;n v&agrave; đi dạo c&ugrave;ng gia đ&igrave;nh trong tiết trời se lạnh để ngắm hoa.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Ngọn tháp nổi bật trong khung cảnh vườn hoa mơ. Ảnh: Diary.\" src=\"https://i-dulich.vnecdn.net/2019/12/03/1-6-1575391213-4569-1575391672.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Ngọn th&aacute;p nổi bật trong khung cảnh vườn hoa mơ. Ảnh:&nbsp;<em>Diary</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Đền Yushima</strong></p>\r\n\r\n<p>Lễ hội diễn ra trong khu&ocirc;n vi&ecirc;n của đền Yushima. Trong đ&oacute;, c&aacute;c sĩ tử cũng đến đ&acirc;y để cầu nguyện cho kỳ thi tốt. Ng&ocirc;i đền tọa lạc tại phường Bunkyo v&agrave; l&agrave; điểm tham quan nổi tiếng với kh&aacute;ch du lịch, người địa phương.</p>\r\n\r\n<p>Thời điểm tốt nhất để đến đền v&agrave; ngắm hoa mơ l&agrave; v&agrave;o những ng&agrave;y trong tuần. Ngo&agrave;i ngắm hoa mơ du kh&aacute;ch c&oacute; thể trải nghiệm c&aacute;c loại h&igrave;nh văn h&oacute;a v&agrave; &acirc;m nhạc truyền thống Nhật Bản v&agrave;o cuối tuần.&nbsp;</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Hoa mơ nở kín lối vào ngôi đền. Ảnh: Japan Highlight Travel.\" src=\"https://i-dulich.vnecdn.net/2019/12/03/2-4-1575391319-2904-1575391672.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Hoa mơ nở k&iacute;n lối v&agrave;o ng&ocirc;i đền. Ảnh:&nbsp;<em>Japan Highlight Travel.</em></p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Đền Kameido</strong></p>\r\n\r\n<p>Đền l&agrave; nơi trồng khoảng hơn 200 c&acirc;y hoa mơ, gắn liền với truyền thuyết một vị thần y&ecirc;u th&iacute;ch lo&agrave;i hoa n&agrave;y. Thời điểm ph&ugrave; hợp để thăm đền l&agrave; v&agrave;o cuối th&aacute;ng 2 v&agrave; đầu th&aacute;ng 3, khi hoa mơ nở nhiều. Nơi đ&acirc;y cũng được gọi l&agrave; đền hoa Tenjin. Kh&aacute;ch đến đền mong cầu th&agrave;nh c&ocirc;ng trong sự nghiệp v&agrave; gia đ&igrave;nh lu&ocirc;n y&ecirc;n ấm.</p>\r\n\r\n<p><strong>C&ocirc;ng vi&ecirc;n Hanegi</strong></p>\r\n\r\n<p>Với hơn 650 c&acirc;y mơ, c&ocirc;ng vi&ecirc;n Hanegi được coi l&agrave; nơi ngắm hoa đẹp nhất tại Tokyo. Lễ hoa mơ Setagaya Umi h&agrave;ng năm cũng được tổ chức tại c&ocirc;ng vi&ecirc;n. Lễ hội k&eacute;o d&agrave;i một th&aacute;ng, từ đầu th&aacute;ng 2 tới giữa th&aacute;ng 3. Tại đ&acirc;y, du kh&aacute;ch c&oacute; thể tham gia c&aacute;c buổi tiệc tr&agrave; v&agrave; xem tr&igrave;nh diễn nhạc, nghệ thuật truyền thống.</p>\r\n\r\n<p>Lễ hội c&ograve;n l&agrave; dịp để bạn thưởng thức những tr&aacute;i mơ chua v&agrave; c&aacute;c m&oacute;n ăn từ loại quả n&agrave;y.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Công viên nổi tiếng với lễ hội hoa mơ hàng năm. Ảnh: Gotokyo.\" src=\"https://i-dulich.vnecdn.net/2019/12/03/3-2-1575391417-9006-1575391672.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&ocirc;ng vi&ecirc;n nổi tiếng với lễ hội hoa mơ h&agrave;ng năm. Ảnh:&nbsp;<em>Gotokyo</em>.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Ngo&agrave;i hoa mơ khi du lịch Nhật Bản v&agrave;o cuối th&aacute;ng 2 v&agrave; đầu th&aacute;ng 3, du kh&aacute;ch sẽ c&oacute; cơ hội ngắm những c&acirc;y hoa anh đ&agrave;o chớm nở tại khắp c&aacute;c th&agrave;nh phố tại&nbsp;<a href=\"https://www.tugo.com.vn/?utm_source=vnexpress\">Nhật Bản</a>.</p>\r\n', '2019-12-10 22:50:47'),
(7, 'Tour Thái Lan 5 ngày trọn gói từ 3,9 triệu đồng', '180712-1-2000-ove-hanoi-hotel.jpg.thumb.768.768.jpg', '<p>h&aacute;i Lan nổi tiếng với những ng&ocirc;i đền nguy nga, b&atilde;i biển xanh trong c&ugrave;ng những hoạt động vui chơi s&ocirc;i động từ s&aacute;ng đến đ&ecirc;m muộn. Du kh&aacute;ch tới đ&acirc;y sẽ c&ograve;n được trải nghiệm văn h&oacute;a truyền thống, nhịp sống hiện đại chỉ trong một h&agrave;nh tr&igrave;nh.</p>\r\n\r\n<p>Ho&agrave;ng Việt Open Tour giới thiệu tour du lịch Th&aacute;i Lan &aacute;p dụng khuyến mại cho nh&oacute;m kh&aacute;ch đăng k&yacute; dịp cuối năm.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Thái Lan có nhiều ngôi chùa linh thiêng để khách du lịch ghé thăm.\" src=\"https://i-dulich.vnecdn.net/2019/12/10/image001-7991-1575943301.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Th&aacute;i Lan c&oacute; nhiều ng&ocirc;i ch&ugrave;a linh thi&ecirc;ng để kh&aacute;ch du lịch gh&eacute; thăm.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Kh&aacute;m ph&aacute; những ng&ocirc;i ch&ugrave;a linh thi&ecirc;ng</strong></p>\r\n\r\n<p>Nhắc đến Th&aacute;i Lan, kh&aacute;ch du lịch nhớ đến đất nước của những ng&ocirc;i ch&ugrave;a được thiết kế lộng lẫy v&agrave; đầy độc đ&aacute;o. Tour du lịch Th&aacute;i Lan đưa du kh&aacute;ch chi&ecirc;m b&aacute;i Tr&acirc;n Phật Bảo Sơn, tượng Phật bằng v&agrave;ng 5 tấn được khắc nổi tr&ecirc;n n&uacute;i. Bức tượng mang &yacute; nghĩa tỏa s&aacute;ng rực rỡ v&agrave; soi s&aacute;ng cho tất cả theo quan niệm sẽ mang lại phước l&agrave;nh, b&igrave;nh y&ecirc;n cho người d&acirc;n v&agrave; đất nước Th&aacute;i Lan.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Đoàn du khách chiêm bái Trân Phật Bảo Sơn.\" src=\"https://i-dulich.vnecdn.net/2019/12/10/image002-7751-1575943302.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Đo&agrave;n du kh&aacute;ch chi&ecirc;m b&aacute;i Tr&acirc;n Phật Bảo Sơn.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Du kh&aacute;ch cũng được gh&eacute; thăm ch&ugrave;a Wat YanNawa c&oacute; h&igrave;nh d&aacute;ng như một con thuyền bu&ocirc;n Trung Hoa nhưng kiến tr&uacute;c ch&ugrave;a v&agrave; trang tr&iacute; mang đậm chất Th&aacute;i Lan với c&aacute;c m&aacute;i cao v&uacute;t. Tại đ&acirc;y c&ograve;n c&oacute; bức tượng nh&agrave; vua Rama I đứng oai phong, gợi cho kh&ocirc;ng kh&iacute; trong ch&ugrave;a th&ecirc;m trang nghi&ecirc;m, huyền b&iacute;.</p>\r\n\r\n<p>Tour du lịch cũng đưa du kh&aacute;ch tới nh&agrave; tỷ ph&uacute; Baan Sukhawadee, một quần thể kiến tr&uacute;c h&agrave;i h&ograve;a, o kết hợp với nhiều t&ograve;a nh&agrave; nhỏ v&agrave; những pho tượng của Đức Phật, Vua Taksin, Vua Chulalongkorn, tượng Quan Thế &Acirc;m.</p>\r\n\r\n<p><strong>Nhịp sống s&ocirc;i động ở Pattaya</strong></p>\r\n\r\n<p>Đặt ch&acirc;n đến Pattaya, du kh&aacute;ch được tự do tắm biển, tham gia c&aacute;c m&ocirc;n thể thao dưới nước như: nhảy d&ugrave;, trượt nước, m&ocirc; t&ocirc; nước, lặn biển... Tour Th&aacute;i Lan trọn g&oacute;i tặng qu&yacute; kh&aacute;ch v&eacute; xem Coloseum Show, chương tr&igrave;nh nghệ thuật mang m&agrave;u sắc của nhiều quốc gia do c&aacute;c diễn vi&ecirc;n chuyển giới biểu diễn.</p>\r\n\r\n<p>Đến với chợ nổi bốn miền Pattaya, bạn c&oacute; thể thăm th&uacute; 114 gian h&agrave;ng được x&acirc;y nổi tr&ecirc;n mặt nước b&aacute;n c&aacute;c loại tr&aacute;i c&acirc;y, qu&agrave; lưu niệm v&agrave; những m&oacute;n ăn địa phương.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"2\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Du khách khám phá thành phố biển Pattaya sôi động.\" src=\"https://i-dulich.vnecdn.net/2019/12/10/image003-8452-1575943303.png\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Du kh&aacute;ch kh&aacute;m ph&aacute; th&agrave;nh phố biển Pattaya s&ocirc;i động.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p><strong>Mua sắm đợt giảm gi&aacute; cuối năm</strong></p>\r\n\r\n<p>Ở Th&aacute;i Lan, m&ugrave;a giảm gi&aacute; lớn nhất diễn ra v&agrave;o th&aacute;ng 12, với mức giảm gi&aacute; l&ecirc;n đến 70%. Nhiều trung t&acirc;m thương mại lớn đồng loạt giảm gi&aacute; như: khu phức hợp Siam Paragon, Siam Center. Nơi đ&acirc;y hầu như tập trung hầu hết c&aacute;c thương hiệu nổi tiếng. Nếu muốn mua c&aacute;c mặt h&agrave;ng b&igrave;nh d&acirc;n c&aacute;c bạn c&oacute; thể gh&eacute; đến trung t&acirc;m MBK, c&oacute; b&aacute;n đầy đủ c&aacute;c mặt h&agrave;ng: quần &aacute;o, trang sức, đồ gia dụng, nội thất, đồ điện tử v&agrave; những m&oacute;n đồ trang tr&iacute;.</p>\r\n', '2019-12-10 22:50:58'),
(8, 'Eurowindow Holding khai trương 2 khu nghỉ dưỡng 5 sao tại Khánh Hòa', '90-mau-thiet-ke-phong-suite-sang-trong-danh-cho-khach-san-p2-01.jpg', '<p>Hai khu nghỉ dưỡng ti&ecirc;u chuẩn 5 sao tr&ecirc;n diện t&iacute;ch 34,2 ha, tổng vốn đầu tư gần 5.000 tỷ đồng được khai trương ng&agrave;y 7/12 tại Cam Ranh.</p>\r\n\r\n<p>Khu du lịch nghỉ dưỡng cao cấp Movenpick Resort Cam Ranh v&agrave; Radisson Blu Resort Cam Ranh nổi bật giữa B&atilde;i D&agrave;i bao gồm: khoảng 500 ph&ograve;ng kh&aacute;ch sạn, gần 150 biệt thự cao cấp, gần 150 căn hộ nghỉ dưỡng Residence, khu vui vui chơi giải tr&iacute;, khu trượt nước cảm gi&aacute;c mạnh, spa... mang tới cho du kh&aacute;ch những trải nghiệm nghỉ dưỡng mới lạ tại nơi đ&acirc;y.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Khu du lịch nghỉ dưỡng Movenpick Resort Cam Ranh và Radisson Blu Resort Cam Ranh.\" src=\"https://i-kinhdoanh.vnecdn.net/2019/12/10/1-6083-1575965975.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>Khu du lịch nghỉ dưỡng Movenpick Resort Cam Ranh v&agrave; Radisson Blu Resort Cam Ranh.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Lấy cảm hứng từ những chuyến đi, bước ch&acirc;n v&agrave;o khu kh&aacute;ch sạn Movenpick với những họa tiết của chiếc vali, du kh&aacute;ch sẽ bắt đầu h&agrave;nh tr&igrave;nh của những chuyến đi kh&aacute;m ph&aacute; Movenpick Resort Cam Ranh với rất nhiều dịch vụ tiện &iacute;ch đa dạng như: khu vui chơi mạo hiểm, khu thể thao ngo&agrave;i trời, bể bơi, hệ thống m&aacute;ng trượt li&ecirc;n khu, khu spa v&agrave; chăm s&oacute;c sức khỏe Serenity Spa, Beach Club, Night Club, Karaoke, h&agrave;ng bia hơi mang phong c&aacute;ch Thụy Sĩ thưởng thứ ẩm thực đặc sắc của địa phương cũng như tr&ecirc;n thế giới.</p>\r\n\r\n<p>Kiến tr&uacute;c Chăm Pa phảng phất, đan xen với n&eacute;t ph&oacute;ng kho&aacute;ng hiện đại ch&acirc;u &Acirc;u cũng ẩn hiện trong thiết kế của 36 căn biệt thự cao cấp Radisson Blu Resort Cam Ranh v&agrave; 118 căn biệt thự Movenpick Resort Cam Ranh, nội thất hiện đại, kiến tr&uacute;c độc đ&aacute;o, kh&ocirc;ng gian nhiều v&aacute;ch k&iacute;nh gi&uacute;p du kh&aacute;ch c&oacute; thể ngắm nh&igrave;n thi&ecirc;n nhi&ecirc;n d&ugrave; ở ph&ograve;ng ngủ, ph&ograve;ng kh&aacute;ch, ph&ograve;ng vệ sinh, ph&ograve;ng tắm hay ph&ograve;ng thay đồ.</p>\r\n\r\n<p>Những h&igrave;nh ảnh nồng đượm mang hơi thở biển cả, th&acirc;n thuộc của l&agrave;ng ch&agrave;i ven biển trở n&ecirc;n lung linh sắc m&agrave;u trong kh&ocirc;ng gian 250 ph&ograve;ng kh&aacute;ch sạn Radisson Blu, nh&agrave; h&agrave;ng, spa...tiện nghi, đẳng cấp khiến du kh&aacute;ch cảm thấy th&acirc;n thuộc v&agrave; nồng ấm khi tới Radisson Blu Resort Cam Ranh.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Các đại biểu cắt băng khai trương khu nghỉ dưỡng Movenpick Resort Cam Ranh.\" src=\"https://i-kinhdoanh.vnecdn.net/2019/12/10/2-4801-1575965975.jpg\" /></td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n			<p>C&aacute;c đại biểu cắt băng khai trương khu nghỉ dưỡng Movenpick Resort Cam Ranh.</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>Tại lễ khai trương, &ocirc;ng Hannes Romauch &ndash; Tổng gi&aacute;m đốc Eurowindow Nha Trang cho biết, dự &aacute;n tu&acirc;n thủ theo nguy&ecirc;n tắc &quot;nghỉ dưỡng biển th&igrave; phải s&aacute;t biển v&agrave; nh&igrave;n thấy biển&quot;. Tất cả c&aacute;c căn biệt thự v&agrave; ph&ograve;ng kh&aacute;ch sạn 100% hướng biển trực diện, gi&uacute;p du kh&aacute;ch dễ d&agrave;ng thu trọn cảnh sắc B&atilde;i D&agrave;i v&agrave;o tầm mắt. &quot;Đ&acirc;y l&agrave; điểm độc đ&aacute;o m&agrave; kh&ocirc;ng phải khu nghỉ dưỡng n&agrave;o cũng l&agrave;m được&quot;, &ocirc;ng n&oacute;i.</p>\r\n\r\n<table align=\"center\" border=\"0\" cellpadding=\"3\" cellspacing=\"0\">\r\n	<tbody>\r\n		<tr>\r\n			<td><img alt=\"Một hạng phòng tại Radisson Blu Resort Cam Ranh.\" src=\"https://i-kinhdoanh.vnecdn.net/2019/12/10/3-6192-1575965975.jpg\" /></td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '2019-12-10 22:51:09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `RoomID` int(11) NOT NULL,
  `RoomName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Status` int(11) NOT NULL,
  `HotelID` int(11) NOT NULL,
  `RoomTypeID` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`RoomID`, `RoomName`, `Images`, `Status`, `HotelID`, `RoomTypeID`, `CreateAt`) VALUES
(33, 'Phòng 110', '22.jpg', 1, 2, 23, '2019-12-18 16:00:21'),
(34, 'Phòng 104', '6_62_cr740-483.jpg', 1, 2, 23, '2019-12-18 16:00:38'),
(35, 'Phòng 109', 'c46579c3a0cc9393abe05d3674c2a3a6.jpg', 1, 2, 24, '2019-12-18 16:01:19'),
(36, 'Phòng 110', '172409685.jpg', 1, 4, 25, '2019-12-18 16:01:55'),
(37, 'Phòng 101', '15697986_1774854649444932_2480326165154043180_n.jpg', 1, 4, 25, '2019-12-18 16:02:45'),
(38, 'Phòng 104', '6377379_19010713580071127088.jpg', 1, 4, 26, '2019-12-18 16:03:26'),
(39, 'Phòng 111', '180927-1-2000-roo-LTHA.jpg.thumb.480.480.jpg', 1, 5, 27, '2019-12-18 16:05:42'),
(40, 'Phòng 104', '79379120.jpg', 1, 5, 27, '2019-12-18 16:05:57'),
(41, 'Phòng 110', 'a6cbc557a3e11e9bfe1a5ebeb2db664c.jpg', 1, 5, 28, '2019-12-18 16:06:24'),
(42, 'Phòng 106', '539264a_hb_p_007.jpg', 1, 11, 29, '2019-12-18 16:07:30'),
(43, 'Phòng 101', '1-1512818632_680x0.jpg', 1, 11, 29, '2019-12-18 16:07:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roomtype`
--

CREATE TABLE `roomtype` (
  `RoomTypeID` int(11) NOT NULL,
  `NameRoomType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Amount` int(11) NOT NULL,
  `AmountPeople` int(11) NOT NULL,
  `Price` float NOT NULL,
  `NumberBeds` int(11) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `HotelID` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roomtype`
--

INSERT INTO `roomtype` (`RoomTypeID`, `NameRoomType`, `Images`, `Amount`, `AmountPeople`, `Price`, `NumberBeds`, `detail`, `HotelID`, `CreateAt`) VALUES
(23, 'Loại phòng Vip', '6_62_cr740-483.jpg', 3, 2, 1200000, 2, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 2, '2019-12-18 15:45:35'),
(24, 'Phòng Hướng Đông', '22.jpg', 2, 2, 1000000, 2, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 2, '2019-12-18 15:47:00'),
(25, 'Phòng hạng sang', '94106164.jpg', 2, 1, 25000000, 2, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 4, '2019-12-18 15:50:26'),
(26, 'Loại phòng Bình dân', '26_avatar.jpg', 2, 2, 800000, 2, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 4, '2019-12-18 15:51:12'),
(27, 'Phòng đôi', 'full_deluxe-river-view_1441786571.jpg', 2, 2, 900000, 2, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 5, '2019-12-18 15:54:02'),
(28, 'Phòng Cao Cấp', '15697986_1774854649444932_2480326165154043180_n.jpg', 2, 2, 1200000, 1, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 5, '2019-12-18 15:54:53'),
(29, 'Phòng Hướng Nam', '94106164.jpg', 2, 2, 850000, 1, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 11, '2019-12-18 15:58:52'),
(30, 'Phòng đơn', '2_228400.jpg', 3, 1, 900000, 1, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 17, '2019-12-18 16:10:04'),
(31, 'Loại phòng Vip', '15697986_1774854649444932_2480326165154043180_n.jpg', 2, 2, 2800000, 2, '<p>Chưa c&oacute; th&ocirc;ng tin</p>\r\n', 17, '2019-12-18 16:10:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `service`
--

CREATE TABLE `service` (
  `ServiceID` int(11) NOT NULL,
  `NameService` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `service`
--

INSERT INTO `service` (`ServiceID`, `NameService`, `Detail`, `CreateAt`) VALUES
(1, 'Wi-Fi', 'IEEE đã mở rộng trên chuẩn 802.11 gốc vào tháng Bảy năm 1999, tạo ra chuẩn 802.11b.', '2019-12-07 09:35:16'),
(2, 'Bóng Bàn', 'IEEE đã mở rộng trên chuẩn 802.11 gốc vào tháng Bảy năm 1999, tạo ra chuẩn 802.11b.', '2019-12-07 09:45:20'),
(3, 'Hồ bơi', 'IEEE đã mở rộng trên chuẩn 802.11 gốc vào tháng Bảy năm 1999, tạo ra chuẩn 802.11b.', '2019-12-07 09:45:40'),
(4, 'Cầu lông', 'IEEE đã mở rộng trên chuẩn 802.11 gốc vào tháng Bảy năm 1999, tạo ra chuẩn 802.11b.', '2019-12-07 09:45:50'),
(6, 'Thuê xe đạp', 'IEEE đã mở rộng trên chuẩn 802.11 gốc vào tháng Bảy năm 1999, tạo ra chuẩn 802.11b.', '2019-12-07 09:54:59'),
(7, 'Xem phim 3D', 'IEEE đã mở rộng trên chuẩn 802.11 gốc vào tháng Bảy năm 1999, tạo ra chuẩn 802.11b.', '2019-12-08 08:43:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `User` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sex` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL,
  `CreateAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`User`, `Password`, `Name`, `Avatar`, `Sex`, `Phone`, `Email`, `Address`, `permission`, `CreateAt`) VALUES
('chien123', '1234567', 'Lê Minh Chiến', '26_avatar.jpg', 'Nam', '0395749099', 'quanglxph07563@fpt.edu.vn', 'Hà Nội', 0, '2019-12-10 08:31:15'),
('Kakashi', '123456', 'Trần Thị Trà My', 'user.jpg', 'Nữ', '0395749099', 'quanglxph07563@fpt.edu.vn', 'đồng vân đồng tháp đan phượng hà nội', 0, '2019-12-18 06:48:11'),
('VerryWell', '1234567', 'Lê Xuân Quảng', '1cbc1411d49300f251f38f33255bd8ee.jpg', 'Nữ', '0981711200', 'quang268200@gmail.com', 'đồng vân đồng tháp đan phượng hà nội', 1, '2019-12-01 14:09:47');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookRoomID`),
  ADD KEY `User` (`User`);

--
-- Chỉ mục cho bảng `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`BookingID`),
  ADD KEY `RoomID` (`RoomID`),
  ADD KEY `BookRoomID` (`BookRoomID`);

--
-- Chỉ mục cho bảng `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `User` (`User`),
  ADD KEY `HotelID` (`HotelID`),
  ADD KEY `BookRoomID` (`BookRoomID`);

--
-- Chỉ mục cho bảng `convenient`
--
ALTER TABLE `convenient`
  ADD PRIMARY KEY (`ConvenientID`),
  ADD KEY `HotelID` (`HotelID`),
  ADD KEY `ServiceID` (`ServiceID`);

--
-- Chỉ mục cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`HotelID`),
  ADD KEY `CityID` (`CityID`);

--
-- Chỉ mục cho bảng `infomation`
--
ALTER TABLE `infomation`
  ADD PRIMARY KEY (`InfoID`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewID`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`RoomID`),
  ADD KEY `RoomTypeID` (`RoomTypeID`),
  ADD KEY `HotelID` (`HotelID`);

--
-- Chỉ mục cho bảng `roomtype`
--
ALTER TABLE `roomtype`
  ADD PRIMARY KEY (`RoomTypeID`),
  ADD KEY `HotelID` (`HotelID`);

--
-- Chỉ mục cho bảng `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`ServiceID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `booking`
--
ALTER TABLE `booking`
  MODIFY `BookRoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT cho bảng `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT cho bảng `city`
--
ALTER TABLE `city`
  MODIFY `CityID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `convenient`
--
ALTER TABLE `convenient`
  MODIFY `ConvenientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4535;

--
-- AUTO_INCREMENT cho bảng `hotel`
--
ALTER TABLE `hotel`
  MODIFY `HotelID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT cho bảng `infomation`
--
ALTER TABLE `infomation`
  MODIFY `InfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `NewID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `RoomID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT cho bảng `roomtype`
--
ALTER TABLE `roomtype`
  MODIFY `RoomTypeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `service`
--
ALTER TABLE `service`
  MODIFY `ServiceID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`User`) REFERENCES `user` (`User`);

--
-- Các ràng buộc cho bảng `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD CONSTRAINT `booking_detail_ibfk_1` FOREIGN KEY (`RoomID`) REFERENCES `room` (`RoomID`),
  ADD CONSTRAINT `booking_detail_ibfk_2` FOREIGN KEY (`BookRoomID`) REFERENCES `booking` (`BookRoomID`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`User`) REFERENCES `user` (`User`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`BookRoomID`) REFERENCES `booking` (`BookRoomID`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);

--
-- Các ràng buộc cho bảng `convenient`
--
ALTER TABLE `convenient`
  ADD CONSTRAINT `convenient_ibfk_1` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`),
  ADD CONSTRAINT `convenient_ibfk_2` FOREIGN KEY (`ServiceID`) REFERENCES `service` (`ServiceID`);

--
-- Các ràng buộc cho bảng `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_ibfk_1` FOREIGN KEY (`CityID`) REFERENCES `city` (`CityID`);

--
-- Các ràng buộc cho bảng `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`RoomTypeID`) REFERENCES `roomtype` (`RoomTypeID`),
  ADD CONSTRAINT `room_ibfk_2` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);

--
-- Các ràng buộc cho bảng `roomtype`
--
ALTER TABLE `roomtype`
  ADD CONSTRAINT `roomtype_ibfk_1` FOREIGN KEY (`HotelID`) REFERENCES `hotel` (`HotelID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
