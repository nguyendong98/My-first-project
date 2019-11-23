-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2019 at 04:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id` int(11) NOT NULL,
  `mahd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `tensp` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` float NOT NULL,
  `phuongthucTT` varchar(50) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `mahd`, `idsp`, `tensp`, `soluong`, `gia`, `phuongthucTT`) VALUES
(29, 18, 1, ' Dell Latitude e7480', 2, 20000000, 'Thanh toán trực tiếp'),
(30, 18, 2, 'Dell Ins N3558 ', 2, 16000000, 'Thanh toán trực tiếp'),
(31, 18, 3, ' Dell N3567S', 2, 26000000, 'Thanh toán trực tiếp'),
(32, 19, 42, 'HDD Toshiba 4TB Enterprise', 2, 1680000, 'Chuyển khoản'),
(33, 19, 41, 'HP LQ036AA 500GB SATA 3.5', 3, 2520000, 'Chuyển khoản'),
(34, 20, 27, 'Msi PS42 8M', 1, 14000000, 'Thanh toán trực tiếp'),
(35, 20, 4, 'Dell Vostro 3478', 2, 28000000, 'Thanh toán trực tiếp'),
(36, 20, 5, 'Dell Vostro 3568', 2, 14000000, 'Thanh toán trực tiếp'),
(37, 20, 6, 'Asus K510UX', 1, 15000000, 'Thanh toán trực tiếp'),
(38, 21, 7, 'Asus X507UA', 1, 6000000, 'Thanh toán trực tiếp'),
(39, 21, 8, 'Asus UX430', 1, 10500000, 'Thanh toán trực tiếp'),
(40, 21, 9, 'Asus A56UA-XX138D', 1, 11500000, 'Thanh toán trực tiếp'),
(41, 22, 39, 'SSD WD BLUE', 1, 780000, 'Thanh toán trực tiếp'),
(42, 22, 10, 'Acer Aspire E5', 1, 9700000, 'Thanh toán trực tiếp'),
(43, 22, 12, 'Acer Aspire E1-532', 1, 16800000, 'Thanh toán trực tiếp');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `loai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `loai`) VALUES
(1, 'Laptop', 0),
(2, 'Phu kien', 0),
(3, 'Dell', 1),
(4, 'Asus', 1),
(5, 'Lenovo', 1),
(6, 'Acer', 1),
(7, 'Apple', 1),
(8, 'MSI', 1),
(9, 'SamSung', 1),
(10, 'Pin', 2),
(11, 'Ram', 2),
(12, 'SSD', 2),
(13, 'HDD', 2);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `hoten` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tongtien` float NOT NULL,
  `ngaydathang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trangthai` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `idnd`, `hoten`, `dienthoai`, `email`, `diachi`, `tongtien`, `ngaydathang`, `trangthai`) VALUES
(18, 26, 'Hoàng Duy', '0123456789', 'duyb1605327@student.ctu.edu.vn', 'Cần Thơ', 62000000, '2019-11-06 08:35:01', 'Chưa xử lí'),
(19, 26, 'Hoàng Duy', '0123456789', 'duyb1605327@student.ctu.edu.vn', '', 4200000, '2019-11-06 13:38:47', 'Chưa xử lí'),
(20, 26, 'Hoàng Duy', '0123456789', 'duyb1605327@student.ctu.edu.vn', 'Cần Thơ', 78100000, '2019-11-06 17:46:22', 'Chưa xử lí'),
(21, 26, 'Hoàng Duy', '0123456789', 'duyb1605327@student.ctu.edu.vn', 'Cần Thơ', 30800000, '2019-11-07 00:20:47', 'Chưa xử lí'),
(22, 27, 'Khánh Duy', '0123456789', 'duyb1605326@student.ctu.edu.vn', 'Trà Vinh', 30008000, '2019-11-07 17:58:57', 'Chưa xử lí');

-- --------------------------------------------------------

--
-- Table structure for table `hotro`
--

CREATE TABLE `hotro` (
  `id_hotro` int(11) NOT NULL,
  `idnd` int(11) NOT NULL,
  `chude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tennd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dienthoai` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydang` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phanhoi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `masp` int(11) NOT NULL,
  `loai` int(11) NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` float NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `tongso` int(11) DEFAULT NULL,
  `daban` int(11) NOT NULL,
  `conlai` int(11) DEFAULT NULL,
  `madm` int(11) NOT NULL,
  `chitiet` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`masp`, `loai`, `tensp`, `gia`, `hinhanh`, `tongso`, `daban`, `conlai`, `madm`, `chitiet`) VALUES
(1, 1, ' Dell Latitude e7480', 10000000, 'laptop dell latitude e7480.jpg', 50, 5, 45, 3, '- Bộ VXL: Core i5 8265U 1.6Ghz-6Mb <br>\r\n- Cạc đồ họa: Intel Graphics HD 620 <br>\r\n- Bộ nhớ: 8Gb <br>\r\n- Ổ cứng: 256GB SSD <br>\r\n- Màn hình: 14.0Inch Full HD <br>\r\n- Hệ điều hành: Windows 10 Home <br>\r\n- Màu sắc/ Chất liệu: Gold '),
(2, 1, 'Dell Ins N3558 ', 8000000, 'dell ins n3558 i5 5200U.jpg', 50, 5, 45, 3, '- Bộ VXL: Core i7 7265U 1.6Ghz-6Mb <br>\r\n- Cạc đồ họa: Intel Graphics HD 720 <br>\r\n- Bộ nhớ: 4Gb <br>\r\n- Ổ cứng: 256GB SSD <br>\r\n- Màn hình: 12.0Inch Full HD <br>\r\n- Hệ điều hành: Windows 10 Home <br>\r\n- Màu sắc/ Chất liệu: Gold '),
(3, 1, ' Dell N3567S', 13000000, 'laptop dell n3567S.jpg', 50, 5, 45, 3, '- CPU: Intel Core i5-8265U 1.6GHz up to 3.9GHz 6MB <br>\r\n- Màn hình: 14\" FHD (1920 x 1080) Diagonal IPS BrightView WLED-Backlit <br>\r\n- RAM: 4GB DDR4 2400MHz (1x SO-DIMM socket, up to 16GB SDRAM) <br>\r\n- Đồ họa: Intel UHD Graphics 620\r\nLưu trữ: HDD 1TB 54'),
(4, 1, 'Dell Vostro 3478', 14000000, 'laptop dell vostro 3478.jpg', 50, 3, 47, 3, '- Hệ điều hành: Win 10 bản quyền <br>\r\n- CPU: Intel Core i5 8265U 1.60 GHz, 6MB<br>\r\n- RAM: 1x4GB DDR4 2666MHz<br>\r\n- Ổ đĩa cứng: 1TB 5400 rpm 2.5\" SATA<br>\r\n- VGA: AMD RADEON 520 2GB GDDR5<br>\r\n- Màn hình: 15.6\" FHD <br>'),
(5, 1, 'Dell Vostro 3568', 7000000, 'laptop dell vostro 3568.jpg', 50, 3, 47, 3, '- CPU: Intel Core i7-8565U ( 1.8 GHz - 4.6 GHz / 8MB / 4 nhân, 8 luồng ) <br>\r\n- Màn hình: 14\" IPS ( 1920 x 1080 ) , cảm ứng <br>\r\n- RAM: 1 x 8GB DDR4 2666MHz <br>\r\n- Đồ họa: Intel UHD Graphics 620 <br>\r\n- Lưu trữ: 256GB SSD M.2 NVMe <br>\r\n- Hệ điều hà'),
(6, 1, 'Asus K510UX', 15000000, 'laptop asus k510ux.jpg', 50, 2, 48, 4, '- Hệ điều hành: Win 10 bản quyền <br>\r\n- CPU: AMD Ryzen 7 3750H 2.3GHz up to 4.0GHz 4MB<br>\r\n- RAM: 8GB DDR4<br>\r\n- Ổ đĩa cứng: 512GB SSD<br>\r\n- VGA: NVIDIA GeForce GTX 1050 3GB<br>\r\n- Màn hình: 17.3\" FHD (1920 x 1080) IPS'),
(7, 1, 'Asus X507UA', 6000000, 'laptop asus x507ua.png', 50, 1, 49, 4, '- CPU: Intel Core i7-8750H ( 2.2 GHz - 4.1 GHz / 9MB / 6 nhân, 12 luồng )<br> \r\n- Màn hình: 15.6\" IPS ( 1920 x 1080 ) , không cảm ứng <br>\r\n- RAM: 2 x 8GB DDR4 2666MHz <br>\r\n- Đồ họa: Intel UHD Graphics 630 / NVIDIA GeForce GTX 1070 8GB GDDR5 <br>\r\n- L'),
(8, 1, 'Asus UX430', 10500000, 'laptop asus ux430.jpg', 50, 1, 49, 4, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(9, 1, 'Asus A56UA-XX138D', 11500000, 'laptop asus a56ua-xx138d.jpg', 50, 1, 49, 4, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(10, 1, 'Acer Aspire E5', 9700000, 'laptop acer aspire e5-573-35x5.jpg', 50, 1, 49, 6, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(11, 1, 'Acer 4739', 15000000, 'laptop acer 4739.jpg', 50, 0, 50, 6, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(12, 1, 'Acer Aspire E1-532', 16800000, 'laptop acer aspire e1-532.jpg', 50, 1, 49, 6, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(13, 1, 'Acer Aspire Broadwell', 12300000, 'laptop acer aspire e5 571 broadwell.jpg', 50, 0, 50, 6, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(14, 1, 'Lenovo Yoga 700', 18100000, 'laptop lenovo yoga 700.jpg', 50, 0, 50, 5, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(15, 1, 'Lenovo Thinkpad X250', 11500000, 'laptop lenovo thinkpad x250.jpg', 50, 0, 50, 5, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(16, 1, 'Lenovo Ideapad 100S', 11200000, 'laptop lenovo ideapad 100s.jpg', 50, 0, 50, 5, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(17, 1, 'Laptop Lenovo l540 i5', 9100000, 'laptop lenovo l540 i5.jpg', 50, 0, 50, 5, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(18, 1, 'Macbook Air MREA2', 25000000, 'laptop apple macbook air mrea2.jpg', 50, 0, 50, 7, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(19, 1, 'Macbook  Proretina', 19000000, 'laptop apple macbook  proretina.jpg', 50, 0, 50, 7, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(20, 1, 'Macbook Pro13mpxt2', 21000000, 'laptop apple macbook pro13mpxt2.jpg', 50, 0, 50, 7, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(21, 1, 'Samsung Notebook 9 ', 14200000, 'laptop samsung notebook 9 pro.jpg', 50, 0, 50, 9, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(22, 1, 'Samsung Galaxy Book S', 17100000, 'laptop samsung galaxy book s.jpg', 50, 0, 50, 9, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(23, 1, 'Samsung Galaxy Tab S6', 6000000, 'laptop samsung galaxy tab s6.jpg', 50, 0, 50, 9, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(24, 0, 'Samsung Notebook 9 ', 23000000, 'laptop samsung notebook 9 series.jpg', 50, 0, 50, 9, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(25, 1, 'Msi GF63 8RD', 10200000, 'laptop msi gf63 8rd.jpg', 50, 0, 50, 8, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(26, 1, ' MSI PS42 8M', 5500000, 'laptop msi ps42 8m.jpg', 50, 0, 50, 8, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(27, 1, 'Msi PS42 8M', 14000000, 'laptop msi ps42 8m.jpg', 50, 1, 49, 8, '- AMD Ryzen 5-2500U 2.0GHz (upto 3.6GHz, 4 nhân 8 luồng, 4MB)<br>\r\n- RAM 8GB DDR4 2400MHz<br>\r\n- HDD 1TB 5400rpm<br>\r\n- VGA Radeon™ RX Vega Graphics<br>\r\n- Màn hình 15.6\" FHD 1920 x 1080 pixels'),
(28, 2, 'Pin Gateway NV4', 850000, 'Pin Gateway NV4.jpg', 50, 0, 50, 10, ''),
(29, 2, 'Pin Samsung R4', 820000, 'Pin Samsung R4.jpg', 50, 0, 50, 10, ''),
(30, 2, 'Pin Tonv HP', 550000, 'Pin Tonv HP.jpg', 50, 0, 50, 10, ''),
(31, 2, 'Pin Dell ZIN', 1100000, 'Pin Dell ZIN.jpg', 50, 0, 50, 10, ''),
(32, 2, 'Pin DellI Inspirion', 750000, 'Pin DellI Inspirion.jpg', 50, 0, 50, 10, ''),
(33, 2, 'Pin Dell 1201', 580000, 'Pin Dell 1201.jpg', 50, 0, 50, 10, ''),
(34, 2, 'Pin Dell Latitude', 900000, 'Pin Dell Latitude.jpg', 50, 0, 50, 10, ''),
(35, 2, 'Crucial 4GB DDR3', 860000, 'Crucial 4GB DDR3.jpg', 50, 0, 50, 11, ''),
(36, 2, 'RAM DDR2', 1300000, 'RAM DDR2.jpg', 50, 0, 50, 11, ''),
(37, 2, 'RAM Kinston DDR4', 1020000, 'RAM Kinston DDR4.jpg', 50, 0, 50, 11, ''),
(38, 2, 'Hynix 2GB DDR3', 810000, 'Hynix 2GB DDR3.jpg', 50, 0, 50, 11, ''),
(39, 2, 'SSD WD BLUE', 780000, 'SSD WD BLUE.jpg', 50, 1, 49, 12, ''),
(40, 2, 'HDD Toshiba 4TB Enterprise', 350000, 'HDD Toshiba 4TB Enterprise.jpg', 50, 0, 50, 13, '4TB <br>\r\nđẹp'),
(41, 2, 'HP LQ036AA 500GB SATA 3.5', 840000, 'HP LQ036AA 500GB SATA 3.5.jpg', 50, 3, 47, 13, ''),
(42, 2, 'HDD Toshiba 4TB Enterprise', 840000, 'HDD Seagate Enterprise.jpg', 40, 2, 38, 13, '');

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `matt` int(11) NOT NULL,
  `tieude` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidungngan` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `ngaydang` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`matt`, `tieude`, `noidungngan`, `noidung`, `hinhanh`, `ngaydang`) VALUES
(2, 'Trên tay Dell G3 15 (2019): Thay đổi mạnh mẽ, gaming laptop hướng đến \"vừa làm, vừa chơi', '(Techz.vn) Dell G3 15 (2019) là sản phẩm hài hòa phục vụ chủ đạo cho gaming nhưng vẫn đảm bảo cho việc giải quyết công việc hàng ngày.', 'https://www.techz.vn/8-919-1-tren-tay-dell-g3-15-2019-thay-doi-manh-me-gaming-laptop-huong-den-vua-lam-vua-choi-ylt77833.html', 'image-techz-1567977873.jpg', '2019-10-29 13:33:43'),
(3, 'Apple chuẩn bị ra mắt Macbook Pro 16 inch, giá từ 69 triệu đồng', '(Techz.vn) Macbook Pro 15 inch đang là model có kích thước lớn nhất hiện tại kể từ khi hãng “Táo Khuyết” quyết định bỏ model Macbook Pro 17 inch. Tuy nhiên, Apple đang âm thầm phát triển một phiên bản khác của Macbook Pro với kích thước 16 inch.', 'https://www.techz.vn/143-819-1-apple-chuan-bi-ra-mat-macbook-pro-16-inch-gia-tu-69-trieu-dong-ylt77261.html', 'image-1566534519-44.jpg', '2019-10-29 13:36:06'),
(4, 'Macbook Pro thế hệ mới - màn hình lớn hơn lại mỏng nhẹ hơn', '(Techz.vn) Theo một nguồn tin đáng tin cậy, vào tháng 10 tới đây Apple sẽ cho ra mắt Macbook thế hệ mới sau đợt ra mắt iPhone 11 vào tháng 9.', 'https://www.techz.vn/181-719-1-macbook-pro-the-he-moi-man-hinh-lon-hon-lai-mong-nhe-hon-ylt76465.html', 'image-1564459732-3-_1600x900-800-resize.jpg', '2019-10-29 13:36:06'),
(9, 'Intel cắt lãi 3 tỉ USD để cạnh tranh mảng CPU máy tính với AMD', '(Techz.vn) Trong một slide thuyết trình nội bộ của Intel, hãng này đang lên kế hoạch cắt giảm lãi ở mảng CPU với mức khoảng 3 tỉ USD nhằm chống lại sự trỗi dậy của AMD trong vài năm gần đây, qua đó đảm bảo vị thế của Intel.', 'https://www.techz.vn/189-1019-1-intel-cat-lai-3-ti-usd-de-canh-tranh-mang-cpu-may-tinh-voi-amd--ylt500563.html', 'intel_14102019110159.jpg', '2019-10-30 03:19:14'),
(11, 'Trên tay Dell G3 15 (2019): Thay đổi mạnh mẽ, gaming laptop hướng đến ', '(Techz.vn) Dell G3 15 (2019) là sản phẩm hài hòa phục vụ chủ đạo cho gaming nhưng vẫn đảm bảo cho việc giải quyết công việc hàng ngày.\"\"\"\"\"\"\"', 'https://www.techz.vn/8-919-1-tren-tay-dell-g3-15-2019-thay-doi-manh-me-gaming-laptop-huong-den-vua-lam-vua-choi-ylt77833.html', 'intel_14102019110159.jpg', '2019-10-30 03:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `tennd` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` varchar(11) NOT NULL,
  `diachi` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngaydangky` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `tennd`, `username`, `password`, `ngaysinh`, `gioitinh`, `email`, `dienthoai`, `diachi`, `ngaydangky`, `phanquyen`) VALUES
(23, 'Phú Đông', 'phudong', '8c1fb22ca1cd3f5d390911cddaa2291d', '1998-09-29', 'nam', 'dongb1605330@student.ctu.edu.vn', '0354860101', 'Ba Tri - Bến Tre', '2019-10-18 17:00:00', 0),
(26, 'Hoàng Duy', 'hoangduy', '73ab8011d53459361476c4d68ea58382', '1998-01-11', 'nam', 'duyb1605327@student.ctu.edu.vn', '0123456789', 'Phong Điền - Cần Thơ', '2019-10-20 08:25:08', 1),
(27, 'Khánh Duy', 'khanhduy', 'd11f7f1f07aac5450de55f9ce685e36c', '1998-01-11', 'nam', 'duyb1605326@student.ctu.edu.vn', '0123456789', 'Trà Vinh', '2019-10-20 08:25:45', 1),
(28, 'Trong Nhan', 'trongnhan', 'trongnhan', '1998-09-29', 'nam', 'nhan@student.ctu', '0123456789', 'An Giang', '2019-11-08 02:58:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `chitiethoadon_ibfk_1` (`mahd`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `hoadon_ibfk_1` (`idnd`);

--
-- Indexes for table `hotro`
--
ALTER TABLE `hotro`
  ADD PRIMARY KEY (`id_hotro`),
  ADD KEY `hotro_ibfk_1` (`idnd`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`masp`),
  ADD KEY `madm` (`madm`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `hotro`
--
ALTER TABLE `hotro`
  MODIFY `id_hotro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `masp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`masp`) ON DELETE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idnd`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `hotro`
--
ALTER TABLE `hotro`
  ADD CONSTRAINT `hotro_ibfk_1` FOREIGN KEY (`idnd`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
