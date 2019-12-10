-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 09, 2019 lúc 02:26 PM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `online_shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `shipper_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `shipper_id`, `customer_id`, `status`, `date`) VALUES
(1, 2, 1, 2, '12/05/2018'),
(2, 2, 2, 2, '13/05/2018'),
(3, 3, 3, 2, '14/05/2018'),
(4, 4, 4, 2, '14/05/2018'),
(5, 5, 5, 2, '15/05/2018'),
(6, NULL, 1, -1, '15/05/2018'),
(7, 3, 5, 2, '16/05/2018'),
(8, NULL, 7, -1, '16/05/2018'),
(9, 2, 9, 1, '17/05/2018'),
(10, NULL, 5, -1, '18/05/2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `name`, `email`, `phone`, `address`) VALUES
(1, NULL, 'Nguyễn Văn Vinh', 'vinhnv@gmail.com', '0976485826', 'Hà Nội'),
(2, 1, NULL, NULL, NULL, NULL),
(3, 2, NULL, NULL, NULL, NULL),
(4, 3, NULL, NULL, NULL, NULL),
(5, 4, NULL, NULL, NULL, NULL),
(6, 5, NULL, NULL, NULL, NULL),
(7, NULL, 'Nguyễn Huy Hoàng', 'hoangnh@gmail.com', '0964016866', 'số 11/268 Giáp Bát/Trương Định/Hoàng Mai/Hà Nội'),
(8, NULL, 'á', 'ád', 'ád', 'sd'),
(9, 6, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `id` int(11) NOT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `cpu` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `o_cung` varchar(45) DEFAULT NULL,
  `man_hinh` varchar(45) DEFAULT NULL,
  `card_man_hinh` varchar(45) DEFAULT NULL,
  `am_thanh` varchar(45) DEFAULT NULL,
  `cong_ket_noi` varchar(100) DEFAULT NULL,
  `webcam` varchar(45) DEFAULT NULL,
  `he_dieu_hanh` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  `kich_thuoc` varchar(45) DEFAULT NULL,
  `khoi_luong` varchar(45) DEFAULT NULL,
  `bao_hanh` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`id`, `brand`, `ten`, `cpu`, `ram`, `o_cung`, `man_hinh`, `card_man_hinh`, `am_thanh`, `cong_ket_noi`, `webcam`, `he_dieu_hanh`, `pin`, `kich_thuoc`, `khoi_luong`, `bao_hanh`) VALUES
(1, 'apple', 'Macbook Air 13 128GB', 'Intel, Core i5, 1.8 Ghz', '8 GB, LPDDR3, 1600 Mhz', 'SSD 128 GB', '13.3 inch 	1440 x 900 pixels', '	Intel HD Graphics 6000', '	Stereo speakers', '	LAN : 802.11ac Wi-Fi wireless networking WIFI : IEEE 802.11a/b/g/n compatib', NULL, 'Mac OS', '	Lithium-polymer', NULL, '1.35 Kg', '12 tháng'),
(2, 'apple', 'Macbook Pro 13 inch 128GB', 'Intel, Core i5, 2.3 GHz', '8 GB, LPDDR3, 2133MHz', 'SSD 128 GB', '13.3 inch 	2560 x 1600 pixels 	LED-backlit', '	Intel Iris Plus Graphics 640', '	Stereo speakers', '	LAN : 802.11ac Wi-Fi wireless networking WIFI : IEEE 802.11a/b/g/n compatib', NULL, 'Mac OS', '	Lithium-polymer', NULL, '1.37 kg', '12 tháng'),
(3, 'apple', 'Macbook Pro 15 inch Touch Bar 256GB', 'Intel, Core i7, 2.8 GHz', '16 GB, LPDDR3, 2133MHz', '	SSD, 256 GB', '	15.4 inch, 2880 x 1800 pixels', '	Radeon Pro 555', '	Stereo speakers', 'LAN : 802.11ac Wi-Fi wireless networking WIFI : IEEE 802.11a/b/g/n compatib', NULL, 'Mac OS', '	Lithium-polymer', NULL, '1.83 kg', '12 tháng'),
(5, 'dell', 'Dell XPS 15', 'Intel, Core i7, 2.80 GHz', '16 GB, DDR4, 2400MHz', '	SSD, 512 GB', '	15.6 inch , 3840 x 2160', '	NVIDIA GeForce GTX 1050, Card rời', '	High Definition (HD) Audio', '	LAN : No LANWIFI : 802.11', '	1280 x 720 (HD)', '	Windows 10 Home 64 SL', '	6-cell (97 WHr)', '17mm x 357mm x 235mm', '2.06 Kg', '12 tháng'),
(6, 'dell', 'Dell Inspiron N7570', 'Intel Core i5-8250U', '4 GB DDR4 2400 MHz', '	SSD + HDD, 128 GB + 1000 GB', '	15.6 Inches, FHD (1920 x 1080) TN', '	NVIDIA GeForce 940MX, Card rời', NULL, '	LAN : 10/100/1000WIFI : 802.11', '	1 Megapixel', '	Windows 10 Home 64-Bit', '	42 WHr, 3-Cell', '22.7 mm x 380 mm x 258 mm', '2.33 kg', '12 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `so_luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order`
--

INSERT INTO `order` (`id`, `bill_id`, `product_id`, `so_luong`) VALUES
(1, 1, 1, 2),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 2, 4, 1),
(5, 3, 10, 1),
(6, 4, 23, 1),
(7, 4, 32, 1),
(8, 5, 7, 2),
(9, 5, 16, 1),
(10, 7, 14, 1),
(11, 7, 1, 1),
(12, 6, 1, 1),
(13, 8, 14, 1),
(14, 8, 1, 1),
(15, 9, 13, 1),
(16, 9, 8, 1),
(17, 10, 1, 3),
(18, 10, 13, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phone`
--

CREATE TABLE `phone` (
  `id` int(11) NOT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `man_hinh` varchar(45) DEFAULT NULL,
  `camera` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `bo_nho_trong` varchar(45) DEFAULT NULL,
  `he_dieu_hanh` varchar(45) DEFAULT NULL,
  `cpu` varchar(45) DEFAULT NULL,
  `gpu` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  `kich_thuoc` varchar(45) DEFAULT NULL,
  `bao_hanh` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phone`
--

INSERT INTO `phone` (`id`, `brand`, `ten`, `man_hinh`, `camera`, `ram`, `bo_nho_trong`, `he_dieu_hanh`, `cpu`, `gpu`, `pin`, `kich_thuoc`, `bao_hanh`) VALUES
(1, 'apple', 'iPhone X 64GB', '	2436 x 1125 pixel', '	Dual 12.0 MP / 	7.0 MP', '3 GB', '64 Gb', 'iOS 11', '	Apple A11 Bionic', '	Apple GPU (three-core graphics)', 'Li-Ion 	2716 mAh', '143.6 x 70.9 x 7.7 mm', '12 tháng'),
(2, 'apple', 'iPhone 8 Plus 64GB', '1920 x 1080 pixels', '	Dual 12.0 MP / 	7.0 MP', '3 GB', '64 GB', 'iOS 11', '	Apple A11 Bionic', '	Apple GPU (three-core graphics)', 'Li-Ion 	2675 mAh', '	158.4 x 78.1 x 7.5 mm', '12 tháng'),
(3, 'apple', 'iPhone 8 64GB', '1334 x 750 pixels', '	12.0 MP / 7.0 MP', '2 GB', '64 GB', 'iOS 11', '	Apple A11 Bionic', '	Apple GPU three-core graphics', 'Li-Ion', '	138.4 x 67.3 x 7.3 mm', '12 tháng'),
(4, 'apple', 'iPhone 7 Plus 32GB', '	1920 x 1080 pixels', 'Dual 12.0 MP / 	7.0 MP', '3 GB', '32 GB', 'iOS 11', 'A10 	2.3 GHz 	4-core', 'M10', 'Li-Ion 11.1 Wh (2900 mAh)', '	158.2 x 77.9 x 7.3 mm', '12 tháng'),
(5, 'apple', 'iPhone 7 32GB', '	1334 x 750 pixels', '12.0 MP / 7.0 MP', '2 GB', '32 GB', 'iOS 11', '	Apple A10 	2.3 GHz 4-cores', '	PowerVR Series7XT Plus', '	Li-Ion 	7.45 Wh (1960 mAh)', '	138.3 x 67.1 x 7.1 mm', '12 tháng'),
(6, 'apple', 'iPhone 6s Plus 32GB', '	1080 x 1920 pixels', '	12.0 MP / 5.0 MP', '2 GB ', '32 GB ', 'iOS ', '	Apple A9 	1.8 GHz 2-cores', '	PowerVR GT7600', '	lithium-ion battery  	2750mAh', '	158.2 x 77.9 x 7.3 mm', '12 tháng'),
(7, 'apple', 'iPhone 6 32GB ', '	1334 x 750 pixels', '8.0 MP / 1.2 MP', '1 GB', '32 GB', 'iOS', '	Apple A8 	1.4 GHz 2-cores', '	PowerVR GX6450', '	Lithium - Ion 	1810mAh', '	138.1 x 67 x 6.9 mm', '12 tháng'),
(8, 'samsung', 'Samsung Galaxy Note 8', '	2960 x 1440 pixels', 'Dual 12.0 MP / 8.0 MP', '6 GB', '64 GB', 'android', 'Exynos 8895 	4 x 2.3 GHz và 4 x 1.7 GHz', '	Mali G71', '	Li-Ion 	3300 mAh', '	162.5 x 74.8 x 8.6 mm', '12 tháng'),
(9, 'samsung', 'Samsung Galaxy S8', '	2960 x 1440 pixels', '	Dual 12.0 MP / 8.0 MP', '4 GB', '64 GB', 'android', '	Exynos 8895 	4 x 2.3 GHz và 4 x 1.7 GHz', 'Mali G71', 'Li-Ion 	3500 mAh', '159.5 x 73.4 x 8.1mm', '12 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `number_image` int(11) DEFAULT NULL,
  `luot_mua` int(11) DEFAULT NULL COMMENT 'lượt xem sản phẩm\n',
  `so_luong` int(11) DEFAULT NULL,
  `laptop_id` int(11) DEFAULT NULL,
  `tablet_id` int(11) DEFAULT NULL,
  `phone_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `discount`, `number_image`, `luot_mua`, `so_luong`, `laptop_id`, `tablet_id`, `phone_id`) VALUES
(1, 'iPhone X 64 GB', 29990000, 0, 4, NULL, 10, NULL, NULL, 1),
(2, 'iPhone 8 Plus 64GB', 23990000, 10, 3, NULL, 8, NULL, NULL, 2),
(3, 'iPhone 8 64GB', 20990000, 5, 3, NULL, 10, NULL, NULL, 3),
(4, 'iPhone 7 Plus 32GB', 19990000, 5, 3, NULL, 10, NULL, NULL, 4),
(5, 'iPhone 7 32GB', 15990000, 5, 3, NULL, 10, NULL, NULL, 5),
(6, 'iPhone 6s Plus 32GB', 13990000, 5, 3, NULL, 10, NULL, NULL, 6),
(7, 'iPhone 6 32GB', 8499000, 0, 3, NULL, 10, NULL, NULL, 7),
(8, 'Samsung Galaxy Note 8', 22490000, 2, 3, NULL, 10, NULL, NULL, 8),
(9, 'Samsung Galaxy S8 Plus', 17990000, 3, 3, NULL, 10, NULL, NULL, 9),
(10, 'Samsung Galaxy S8', 15990000, 0, 3, NULL, 10, NULL, NULL, 9),
(11, 'Samsung Galaxy A8+', 13490000, 5, 4, NULL, 10, NULL, NULL, 8),
(12, 'Samsung Galaxy S7 Edge', 12990000, 0, 3, NULL, 10, NULL, NULL, 8),
(13, 'Macbook Air 13 128GB MQD32SA/A ', 23999000, 0, 3, NULL, 10, 1, NULL, NULL),
(14, 'Macbook Pro 13 inch 128GB', 33999000, 2, 4, NULL, 10, 2, NULL, NULL),
(15, 'Macbook Pro 15 inch Touch Bar 256GB', 59999000, 5, 4, NULL, 10, 3, NULL, NULL),
(16, 'Macbook 12 256GB', 33999000, 2, 4, NULL, 10, 1, NULL, NULL),
(17, 'Macbook Pro 13 256GB', 34999000, 0, 2, NULL, 10, 2, NULL, NULL),
(18, 'Dell Ins N7370/Core i7-8550U', 34490000, 0, 4, NULL, 10, 5, NULL, NULL),
(19, 'Dell XPS 13 9365', 54990000, 2, 4, NULL, 10, 5, NULL, NULL),
(21, 'Dell N5570A', 24990000, 0, 4, NULL, 10, 6, NULL, NULL),
(22, 'Dell INS N5379', 22990000, 2, 4, NULL, 10, 6, NULL, NULL),
(23, 'Dell Ins N5378', 23990000, 5, 4, NULL, 10, 6, NULL, NULL),
(24, 'Dell Ins 7460/ i7-7500U', 23990000, 0, 3, NULL, 0, 6, NULL, NULL),
(25, 'Dell N7559/i5-6300HQ', 21990000, 0, 4, NULL, 0, 6, NULL, NULL),
(26, 'Dell Inspiron N7570', 22990000, 0, 4, NULL, 10, 6, NULL, NULL),
(27, 'iPad Pro 12.9 WI-FI 4G 256GB', 27999000, 2, 1, NULL, 10, NULL, 1, NULL),
(28, 'iPad Pro 10.5 WI-FI 64GB', 16999000, 0, 4, NULL, 10, NULL, 2, NULL),
(29, 'iPad Wi-Fi 4G 128GB', 14999000, 5, 3, NULL, 10, NULL, 3, NULL),
(30, 'iPad Pro 12.9 WI-FI 64GB', 20999000, 2, 1, NULL, 10, NULL, 1, NULL),
(31, 'iPad Pro 10.5 WI-FI 4G 256GB', 23999000, 5, 1, NULL, 10, NULL, 1, NULL),
(32, 'iPad Mini 4 Wi-Fi 4G 128GB', 13999000, 0, 3, NULL, 10, NULL, 3, NULL),
(33, 'iPad Pro 10.5 WI-FI 4G 64GB', 19999000, 2, 1, NULL, 10, NULL, 2, NULL),
(34, 'Samsung Galaxy Tab E', 4490000, 0, 4, NULL, 10, NULL, 5, NULL),
(35, 'Samsung Galaxy Tab A6 10.1', 7990000, 0, 4, NULL, 10, NULL, 4, NULL),
(36, 'Samsung Galaxy Tab A 2017', 549000, 2, 4, NULL, 10, NULL, 5, NULL),
(37, 'Samsung Galaxy Tab A 7', 3590000, 0, 4, NULL, 10, NULL, 6, NULL),
(38, 'Samsung Galaxy Tab A 10.1 inch', 7290000, 5, 4, NULL, 10, NULL, 4, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `comment` text,
  `rating` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `datetime` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `rating`
--

INSERT INTO `rating` (`id`, `email`, `comment`, `rating`, `product_id`, `datetime`) VALUES
(1, 'quangnh@gmail.com', 'Sản phẩm rất tuyệt!! cảm ơn HustShop , rất nhiệt tình và chu đáo!', 5, 1, '11:15:30 , 20/04/2018'),
(2, 'hiennt@gmail.com', 'San phẩm rất tốt! Tư vấn tận tình nhưng giao hàng hơi muộn. Cải thiện nhé!', 4, 1, '11:20:26 , 20/04/2018'),
(3, 'hieunm@gmail.com', 'Sản phẩm tốt! Nhân viên nhiệt tình. Mình rất hài lòng!', 5, 1, '11:26:02 , 20/04/2018'),
(4, 'annt@gmail.com', 'San phẩm rất tốt! Tư vấn tận tình nhưng giao hàng hơi muộn. Cải thiện nhé!', 5, 14, '11:50:16 , 20/04/2018'),
(5, 'quangnh@gmail.com', 'Tuyet voi', 4, 14, '12:53:00 , 20/04/2018'),
(6, 'hiepnh@gmail.com', 'Sản phẩm và dịch vụ rất tốt! cảm ơn hust shop nhé!', 5, 1, '11:19:30 , 27/04/2018'),
(7, 'tuyennv@gmail.com', 'Sản phẩm tốt! giao hàng hơi chậm.', 4, 1, '11:20:55 , 27/04/2018'),
(8, 'huyhoang97@gmail.com', 'Sản phẩm rất tốt! cảm ơn của hàng..', 5, 11, '15:07:56 , 12/05/2018'),
(9, 'duc@gmail.com', 'Sản phẩm rất tốt. Nhân viên thân thiện!', 5, 13, '23:26:11 , 17/05/2018'),
(10, 'hanh123@gmail.com', 'Cảm ơn cửa hàng', 5, 13, '23:26:36 , 17/05/2018'),
(11, 'hieunm@gmai.com', 'Sản phẩm rất tốt', 3, 13, '12:45:39 , 18/05/2018'),
(12, 'quangnh@gmail.com', 'san pham tot', 5, 1, '14:05:07 , 18/05/2018');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shipper`
--

CREATE TABLE `shipper` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `shipper`
--

INSERT INTO `shipper` (`id`, `name`, `address`, `phone`, `email`) VALUES
(1, 'Nguyễn Hoàng Hiệp', '31/Trần Đại Nghĩa/Hai Bà Chưng/Hà Nội', '0964016860', 'hiepnh@gmail.com'),
(2, 'Nguyễn Huy Hoàng', '11/268 Giáp Bát/Hoàng Mai/Hà Nội', '0964016863', 'hoangnh@gmail.com'),
(3, 'Nguyễn Thị Hiền', '32/Trần Đại Nghĩa/Hai Bà Chưng/Hà Nội', '0962365410', 'hiennt@gmail.com'),
(4, 'Nguyễn Minh Hiếu', '06/268 Giáp Bát/Hoàng Mai/Hà Nội', '0947512364', 'hieunm@gmail.com'),
(5, 'Nguyễn Huy Quang', '53/268 Giáp Bát/Hoàng Mai/Hà Nội', '0648752145', 'quangnh@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tablet`
--

CREATE TABLE `tablet` (
  `id` int(11) NOT NULL,
  `brand` varchar(45) DEFAULT NULL,
  `ten` varchar(45) DEFAULT NULL,
  `man_hinh` varchar(45) DEFAULT NULL,
  `cpu` varchar(45) DEFAULT NULL,
  `gpu` varchar(45) DEFAULT NULL,
  `ram` varchar(45) DEFAULT NULL,
  `bo_nho_trong` varchar(45) DEFAULT NULL,
  `camera` varchar(45) DEFAULT NULL,
  `he_dieu_hanh` varchar(45) DEFAULT NULL,
  `pin` varchar(45) DEFAULT NULL,
  `kich_thuoc` varchar(45) DEFAULT NULL,
  `bao_hanh` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tablet`
--

INSERT INTO `tablet` (`id`, `brand`, `ten`, `man_hinh`, `cpu`, `gpu`, `ram`, `bo_nho_trong`, `camera`, `he_dieu_hanh`, `pin`, `kich_thuoc`, `bao_hanh`) VALUES
(1, 'apple', 'iPad Pro 12.9 WI-FI 4G 256GB', 'Retina display,12.9 inch(2732 x 2048 pixels)', '	Apple A10X Fusion', '	Power VR', '4 GB', '	256 GB', '12.0 MP / 7.0 MP', 'iOS', '	Lithium - Polymer 	41 W/h', '	305.7 x 220.6 x 6.9 mm', '12 tháng'),
(2, 'apple', 'iPad Pro 10.5 WI-FI 64GB ', 'Retina display,10.5 inch(1668 x 2224 pixels)', '	Apple A10X Fusion', '	Power VR', '4 GB', '64 GB', '	12.0 MP / 7.0 MP', 'iOS', '	Lithium - Polymer 	30.4 W/h', '	250.6 x 171.1 x 6.1 mm', '12 tháng'),
(3, 'apple', 'iPad Wi-Fi 4G 128GB', 'Retina display,9.7 inch(2048 x 1536 pixels)', '	Apple A9', '	PowerVR Series 7', '	2 GB', '128 GB', '8.0 MP/ 1.2 MP', 'iOS', '	Lithium - Ion 	32.4 Wh', '240 x 169.5 x 7.5 mm', '12 tháng'),
(4, 'samsung', 'Samsung Galaxy Tab A6 10.1', 'PLS LCD, , 10.1 inch(1920 x 1200 pixels)', '	Exynos 7870', '	Mali-T830', '	3 GB', '16 GB', '8.0 MP / 2.0 MP', 'Android', '	Lithium - Ion 	7300 mAh', '	254.30 x 164.20 x 8.20 mm', '12 tháng'),
(5, 'samsung', 'Samsung Galaxy Tab A 2017', 'TFT, , 8.0 inch(1280 x 800 pixels)', '	1.4 GHz', NULL, '2 GB', '16 GB', '8.0 MP / 5.0 MP', 'Android', '	Lithium - Ion', '	186.9 x 108.8 x 8.7 mm', '12 tháng'),
(6, 'samsung', 'Samsung Galaxy Tab A 7', ' WXGA-TFT, , 7 inch(1280 x 800 Pixels)', '	CPU 4 nhân', NULL, '	1.5 GB', '8 GB', '5.0 MP / 2.0 MP', 'Android', '	Lithium - Ion', '	186.9 x 108.8 x 8.7 mm', '12 tháng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `birthday` varchar(45) DEFAULT NULL,
  `sex` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `access` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `birthday`, `sex`, `email`, `phone`, `address`, `username`, `password`, `access`) VALUES
(1, 'Nguyên Huy Quang', '1997-09-19', 'Nam', 'nguyenhuyquangbk1909@gmail.com', '0964016863', '11/268 Giáp Bát/Trương Định/Hoàng Mai/Hà Nội', 'admin1', '$2y$10$.bcv0VtFJVIf2w8D4OVq6.231C0hKaRYwvK11oYPPmdWINOpJdLke', 1),
(2, 'Nguyễn Minh Hiếu', '1997-11-07', 'Nam', 'hieunm@gmail.com', '0125489762', 'Hà Nội', 'admin2', '$2y$10$.bcv0VtFJVIf2w8D4OVq6.231C0hKaRYwvK11oYPPmdWINOpJdLke', 2),
(3, 'Nguyễn Hoàng Hiệp', '1997-09-11', 'Nam', 'hiepnh@gmail.com', '0912345678', '31/Trần Đại Nghĩa/Hai Bà Chưng/Hà Nội', 'hiephd97', '$2y$10$.bcv0VtFJVIf2w8D4OVq6.231C0hKaRYwvK11oYPPmdWINOpJdLke', 0),
(4, 'Nguyễn Thị Hiền', '1997-11-18', 'Nữ', 'hiennt@gmail.com', '0943256324', '36/Trần Đại Nghĩa/Hai Bà Chưng/Hà Nội', 'hienbg97', '$2y$10$.bcv0VtFJVIf2w8D4OVq6.231C0hKaRYwvK11oYPPmdWINOpJdLke', 0),
(5, 'Vũ Đình Tuyên', '1997-11-20', 'Nam', 'tuyenvf@gmail.com', '09653423456', '36/Trần Đại Nghĩa/Hai Bà Chưng/Hà Nội', 'tuyenhd97', '$2y$10$.bcv0VtFJVIf2w8D4OVq6.231C0hKaRYwvK11oYPPmdWINOpJdLke', 0),
(6, 'Nguyễn Công Đức', '1995-05-12', 'Nam', 'ducnc95@gmail.com', '0912563456', 'số 54 Giải Phóng/ Hai Bà Trưng/ Hà Nội', 'ducdz95', '$2y$10$93/SlOVesdQIdH3/TuVPqupsoW1AkD2XFzszDx/dmaEPRi58ZMO7u', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_shipper_idx` (`shipper_id`),
  ADD KEY `fk_order_customer1_idx` (`customer_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_customer_users_idx` (`user_id`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order_bill_idx` (`bill_id`),
  ADD KEY `fk_order_product_idx` (`product_id`);

--
-- Chỉ mục cho bảng `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_laptop_idx` (`laptop_id`),
  ADD KEY `fk_product_tablet_idx` (`tablet_id`),
  ADD KEY `fk_product_phone_idx` (`phone_id`);

--
-- Chỉ mục cho bảng `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_idx` (`product_id`);

--
-- Chỉ mục cho bảng `shipper`
--
ALTER TABLE `shipper`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tablet`
--
ALTER TABLE `tablet`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `shipper`
--
ALTER TABLE `shipper`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tablet`
--
ALTER TABLE `tablet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `fk_order_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_shipper` FOREIGN KEY (`shipper_id`) REFERENCES `shipper` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_bill` FOREIGN KEY (`bill_id`) REFERENCES `bill` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_laptop` FOREIGN KEY (`laptop_id`) REFERENCES `laptop` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_phone` FOREIGN KEY (`phone_id`) REFERENCES `phone` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_tablet` FOREIGN KEY (`tablet_id`) REFERENCES `tablet` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
