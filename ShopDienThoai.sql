-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 26, 2017 at 07:38 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ShopDienThoai`
--

-- --------------------------------------------------------

--
-- Table structure for table `CHITIETDONHANG`
--

CREATE TABLE `CHITIETDONHANG` (
  `IdDonHang` int(11) NOT NULL,
  `IdDienThoai` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `IdChiTiet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `COMMENT`
--

CREATE TABLE `COMMENT` (
  `IdDienThoai` int(11) NOT NULL,
  `IdUser` int(11) NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NgayComment` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COMMENT`
--

INSERT INTO `COMMENT` (`IdDienThoai`, `IdUser`, `NoiDung`, `NgayComment`) VALUES
(3, 2, 'Hàng đẹp, sang trọng, chạy mượt, like', '2017-04-04 07:32:00'),
(3, 2, 'Hàng đẹp, sang trọng, chạy mượt, like', '2017-04-04 07:32:00'),
(2, 1, 'Chất lượng tốt, giá cả hợp lý, phục vụ nhiệt tình ', '2017-04-04 07:32:00');

-- --------------------------------------------------------

--
-- Table structure for table `DIENTHOAI`
--

CREATE TABLE `DIENTHOAI` (
  `IdDienThoai` int(11) NOT NULL,
  `IdHang` int(11) NOT NULL,
  `TenDienThoai` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `UrlHinh` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DonGia` int(11) NOT NULL DEFAULT '0',
  `SoLuong` int(11) NOT NULL,
  `NgayNhap` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `ThongTinDT` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Hot` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DIENTHOAI`
--

INSERT INTO `DIENTHOAI` (`IdDienThoai`, `IdHang`, `TenDienThoai`, `UrlHinh`, `DonGia`, `SoLuong`, `NgayNhap`, `ThongTinDT`, `Hot`) VALUES
(1, 1, 'iPhone 7Plus', 'assets/images/iphone7plus.jpg', 24990000, 20, '2017-04-08 21:13:23', 'Mạng 2G	\r\nGSM 850 / 900 / 1800 / 1900\r\nMạng 3G	\r\nHSDPA 850 / 900 / 1700 / 1900 / 2100\r\nMạng 4G	\r\nCó hỗ trợ mạng 4G\r\nSIM	\r\nNano-SIM\r\nKích Thước	\r\n158.2 x 77.9 x 7.3 mm\r\nMàu Sắc	\r\nRed\r\nTrọng Lượng	\r\n188g\r\nLoại	\r\nRetina HD\r\nMàn Hình	\r\n5.5 inches, 1920 x 1080 pixels (401 ppi)\r\nAudio	\r\nMP3, WAV, WMA, eAAC+, AMR', 1),
(3, 1, 'iPhone 7', 'assets/images/iphone7.jpg', 21690000, 20, '2017-04-08 21:13:23', 'M\r\nMạng 2G	\r\nGSM 850 / 900 / 1800 / 1900\r\nMạng 3G	\r\nHSDPA 850 / 900 / 1700 / 1900 / 2100\r\nMạng 4G	\r\nCó hỗ trợ mạng 4G\r\nSIM	\r\nNano-SIM\r\nKích Thước	\r\n138.3 x 67.1 x 7.1 mm\r\nMàu Sắc	\r\nRed\r\nTrọng Lượng	\r\n138g\r\nLoại	\r\nRetina HD\r\nMàn Hình	\r\n4.7 inches, 750 x 1334 pixels (326 ppi)\r\nAudio	\r\nMP3, WAV, WMA, eAAC+, AMR', 1),
(4, 1, 'iPhone 6s', 'assets/images/iphone6s.jpg', 15990000, 10, '2017-04-02 17:00:00', 'Mạng 2G	\r\nGSM 850 / 900 / 1800 / 1900\r\nMạng 3G	\r\nCDMA 800 / 1700 / 1900 / 2100\r\nMạng 4G	\r\nCó hỗ trợ 4G\r\nSIM	\r\nNano-SIM\r\nKích Thước	\r\n138.3 x 67.1 x 7.1 mm\r\nMàu Sắc	\r\nSilver / Gray/ Gold/Rose Gold\r\nTrọng Lượng	\r\n143g\r\nLoại	\r\nLED-backlit IPS LCD\r\nMàn Hình	\r\n4.7 inches, 750 x 1334 pixels\r\nAudio	\r\nMP3, WAV, WMA, eAAC+, AMR', 1),
(6, 1, 'iPhone 6', 'assets/images/iphone6.jpg', 9900000, 0, '2017-04-25 17:00:00', 'Mạng 2G	\r\nGSM 850 / 900 / 1800 / 1900\r\nMạng 3G	\r\nCDMA 800 / 1700 / 1900 / 2100\r\nMạng 4G	\r\nCó hỗ trợ 4G\r\nSIM	\r\nNano-SIM\r\nKích Thước	\r\n138.1 x 67 x 6.9 mm\r\nMàu Sắc	\r\nGold\r\nTrọng Lượng	\r\n124 g\r\nLoại	\r\nLED-backlit IPS LCD\r\nMàn Hình	\r\n750 x 1334 pixels, 4.7 inches\r\nAudio	\r\nMP3, WAV, WMA, eAAC+, AMR', 1),
(8, 1, 'iPhone 5s', 'assets/images/iphone5s.jpg', 5990000, 50, '2017-04-05 17:00:00', 'Mạng 2G	\r\nGSM 850 / 900 / 1800 / 1900\r\nMạng 3G	\r\nHSDPA 850 / 900 / 1700 / 1900 / 2100\r\nMạng 4G	\r\nCó hỗ trợ 4G\r\nSIM	\r\nNano-SIM\r\nKích Thước	\r\n123.8 x 58.6 x 7.6 mm\r\nMàu Sắc	\r\nMàu vàng\r\nTrọng Lượng	\r\n112 g\r\nLoại	\r\nMàn hình LED IPS LCD 16 triệu màu\r\nMàn Hình	\r\n640 x 1136 pixels, 4.0 inches\r\nAudio	\r\nMP3, WAV, WMA', 0),
(9, 2, 'SamSung Galaxy S7 Edge', 'assets/images/s7-edge.jpg', 20000000, 20, '2017-04-03 17:00:00', 'dhsfjaadskfjsadjfkadsjfkjasdfjkladsjfkjds\r\nsadfdsaf\r\nasdf\r\nsadf\r\nsadf\r\nasd\r\nf\r\nadsf\r\n', 1),
(10, 2, 'SamSung Galaxy S7', 'assets/images/s7.jpg', 18000000, 20, '2017-04-02 17:00:00', 'dhsfjaadskfjsadjfkadsjfkjasdfjkladsjfkjds sadfdsaf asdf sadf sadf asd f adsf ', 1),
(11, 2, 'SamSung Galaxy S6 Edge', 'assets/images/s6-edge.jpg', 10000000, 20, '2017-03-31 17:00:00', 'dhsfjaadskfjsadjfkadsjfkjasdfjkladsjfkjds sadfdsaf asdf sadf sadf asd f adsf ', 0),
(12, 2, 'SamSung A5', 'assets/images/samsunga5.jpg', 7000000, 20, '2017-12-03 17:00:00', 'dhsfjaadskfjsadjfkadsjfkjasdfjkladsjfkjds sadfdsaf asdf sadf sadf asd f adsf ', 0),
(13, 3, 'Sony Z5', 'assets/images/sonyz5.jpg', 15000000, 20, '2016-04-03 17:00:00', 'dhsfjaadskfjsadjfkadsjfkjasdfjkladsjfkjds sadfdsaf asdf sadf sadf asd f adsf ', 1),
(14, 1, 'Iphone 5', 'assets/images/iphone5.jpg', 3500000, 20, '2017-04-24 17:00:00', 'Màn hình:	LED-backlit IPS LCD, 4", DVGA\r\nHệ điều hành:	iOS 10\r\nCamera sau:	8 MP\r\nCamera trước:	1.2 MP\r\nCPU:	Apple A7 2 nhân 64-bit\r\nRAM:	1 GB\r\nBộ nhớ trong:	16 GB\r\nThẻ nhớ:	Không\r\nThẻ SIM:	1 Nano SIM\r\nDung lượng pin:	1560 mAh', 0),
(15, 1, 'iPhone 6sPlus', 'assets/images/iphone6splus.png', 3500000, 20, '2017-04-17 17:00:00', 'Màn hình:	LED-backlit IPS LCD, 5.5", Retina HD\r\nHệ điều hành:	iOS 9\r\nCamera sau:	12 MP\r\nCamera trước:	5 MP\r\nCPU:	Apple A9 2 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	Không\r\nThẻ SIM:	1 Nano SIM\r\nDung lượng pin:	2750 mAh', 0),
(16, 2, 'Samsung Galaxy S8 Edge', 'assets/images/samsungs8edge.jpg', 20500000, 10, '2017-04-28 17:00:00', 'Màn hìnhSuper AMOLED, 5.8", Quad HD Super AMOLED, 6.2", Quad HD\r\nCPUExynos 8895 8 nhân 64-bitExynos 8895 8 nhân 64-bit\r\nRAM4 GB4 GB\r\nHệ điều hànhAndroid 7.0Android 7.0\r\nCamera trước8MP8MP\r\nCamera sau12MP12MP\r\nBộ nhớ trong64 GB64 GB\r\nThẻ SIM2 Nano SIM, hỗ trợ 4G2 Nano SIM, hỗ trợ 4G\r\nDung lượng Pin3000 mAh3500 mAh', 1),
(17, 2, 'Samsung Note 5', 'assets/images/ssnote5.png', 15000000, 10, '2017-04-28 17:00:00', 'Màn hìnhSuper AMOLED, 5.8", Quad HD Super AMOLED, 6.2", Quad HD CPUExynos 8895 8 nhân 64-bitExynos 8895 8 nhân 64-bit RAM4 GB4 GB Hệ điều hànhAndroid 7.0Android 7.0 Camera trước8MP8MP Camera sau12MP12MP Bộ nhớ trong64 GB64 GB Thẻ SIM2 Nano SIM, hỗ trợ 4G2 Nano SIM, hỗ trợ 4G Dung lượng Pin3000 mAh3500 mAh', 0),
(18, 2, 'Samsung A5', 'assets/images/ssa3.png', 12000000, 10, '2017-04-28 17:00:00', 'Màn hìnhSuper AMOLED, 5.8", Quad HD Super AMOLED, 6.2", Quad HD CPUExynos 8895 8 nhân 64-bitExynos 8895 8 nhân 64-bit RAM4 GB4 GB Hệ điều hànhAndroid 7.0Android 7.0 Camera trước8MP8MP Camera sau12MP12MP Bộ nhớ trong64 GB64 GB Thẻ SIM2 Nano SIM, hỗ trợ 4G2 Nano SIM, hỗ trợ 4G Dung lượng Pin3000 mAh3500 mAh', 0),
(19, 2, 'Samsung J5', 'assets/images/ssj5.png', 10000000, 10, '2017-04-28 17:00:00', 'Màn hìnhSuper AMOLED, 5.8", Quad HD Super AMOLED, 6.2", Quad HD CPUExynos 8895 8 nhân 64-bitExynos 8895 8 nhân 64-bit RAM4 GB4 GB Hệ điều hànhAndroid 7.0Android 7.0 Camera trước8MP8MP Camera sau12MP12MP Bộ nhớ trong64 GB64 GB Thẻ SIM2 Nano SIM, hỗ trợ 4G2 Nano SIM, hỗ trợ 4G Dung lượng Pin3000 mAh3500 mAh', 0),
(20, 3, 'Sony XperiaZ', 'assets/images/sonyz5.jpg', 15000000, 10, '2017-04-28 17:00:00', 'Màn hình:	IPS LCD, 5.2", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	23 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 810 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 200 GB\r\nThẻ SIM:	2 Nano SIM, hỗ trợ 4G\r\nDung lượng pin:	2900 mAh, có sạc nhanh', 1);

-- --------------------------------------------------------

--
-- Table structure for table `DONDATHANG`
--

CREATE TABLE `DONDATHANG` (
  `idDonHang` int(11) NOT NULL,
  `TenKhachHang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `SoDienThoai` varchar(20) NOT NULL,
  `NgayLap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DONDATHANG`
--

INSERT INTO `DONDATHANG` (`idDonHang`, `TenKhachHang`, `DiaChi`, `SoDienThoai`, `NgayLap`) VALUES
(1, 'Nguyễn Hữu Đức', '17 Đường 244, phường Tăng Nhơn Phú A, quận 9', '01645174850', '2017-04-04 08:42:00'),
(2, 'Nguyễn Trúc Tiên', '1400 Xô Viết Nghệ Tĩnh', '0918555444', '2017-08-04 08:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `HANGDIENTHOAI`
--

CREATE TABLE `HANGDIENTHOAI` (
  `IdHang` int(11) NOT NULL,
  `TenHang` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `urlBieuTuong` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HANGDIENTHOAI`
--

INSERT INTO `HANGDIENTHOAI` (`IdHang`, `TenHang`, `urlBieuTuong`) VALUES
(1, 'Iphone', 'assets/images/apple.png'),
(2, 'Samsung', 'assets/images/samsung.png'),
(3, 'Sony', 'assets/images/sony.png');

-- --------------------------------------------------------

--
-- Table structure for table `KHACHHANG`
--

CREATE TABLE `KHACHHANG` (
  `IdUser` int(11) NOT NULL,
  `HoTen` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MatKhau` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DienThoai` int(15) NOT NULL,
  `NgaySinh` date NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL DEFAULT '1',
  `Email` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Nhom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KHACHHANG`
--

INSERT INTO `KHACHHANG` (`IdUser`, `HoTen`, `MatKhau`, `DiaChi`, `DienThoai`, `NgaySinh`, `GioiTinh`, `Email`, `Nhom`) VALUES
(1, 'Nguyễn Văn A', '123456', 'Tăng Nhơn Phú A, quận 9', 123456789, '1996-08-16', 1, 'a@examle.com', 0),
(2, 'Nguyễn Văn B', '123456', 'Tăng Nhơn Phú B, quận 9', 123789456, '1996-12-16', 1, 'b@examle.com', 0),
(3, 'Nguyễn Thị Nhung', '123456', '3 Tháng 2, quận 10', 99999999, '1990-12-16', 0, 'nhung@examle.com', 0),
(4, 'Võ Trúc Tiên', '123456', 'Võ Văn Ngân, Thủ Đức', 98888888, '1994-12-01', 0, 'tien@examle.com', 0),
(5, 'Từ Thanh Tùng', '123456', 'Tăng Nhơn Phú B, quận 9', 977777777, '0000-00-00', 1, 'tung@examle.com', 0),
(6, 'Trần Thị Thúy', '123456', 'Phú Mĩ Hưng, quận 7', 966666666, '1990-12-30', 0, 'thuy@examle.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `CHITIETDONHANG`
--
ALTER TABLE `CHITIETDONHANG`
  ADD PRIMARY KEY (`IdChiTiet`);

--
-- Indexes for table `DIENTHOAI`
--
ALTER TABLE `DIENTHOAI`
  ADD PRIMARY KEY (`IdDienThoai`);

--
-- Indexes for table `DONDATHANG`
--
ALTER TABLE `DONDATHANG`
  ADD PRIMARY KEY (`idDonHang`);

--
-- Indexes for table `HANGDIENTHOAI`
--
ALTER TABLE `HANGDIENTHOAI`
  ADD PRIMARY KEY (`IdHang`);

--
-- Indexes for table `KHACHHANG`
--
ALTER TABLE `KHACHHANG`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `CHITIETDONHANG`
--
ALTER TABLE `CHITIETDONHANG`
  MODIFY `IdChiTiet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `DIENTHOAI`
--
ALTER TABLE `DIENTHOAI`
  MODIFY `IdDienThoai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `DONDATHANG`
--
ALTER TABLE `DONDATHANG`
  MODIFY `idDonHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `HANGDIENTHOAI`
--
ALTER TABLE `HANGDIENTHOAI`
  MODIFY `IdHang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `KHACHHANG`
--
ALTER TABLE `KHACHHANG`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
