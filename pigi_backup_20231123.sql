-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 05:48 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pigi`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--
DROP TABLE IF EXISTS `binhluan`;
CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--
DROP TABLE IF EXISTS `danhmuc`;
CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name`, `image`) VALUES
(10, 'COMBO BÁN CHẠY', 'web-12.png'),
(11, 'GÀ GIÒN VUI VẺ', 'web-05_1.png'),
(12, 'MÌ Ý SỐT BÒ HẦM', 'web-06.png'),
(13, 'GÀ SỐT CAY', 'web-07.png'),
(14, 'BURGER', 'cat_burger.png'),
(15, 'PHẦN ĂN PHỤ', 'phananphu.png'),
(16, 'MÓN TRÁNG MIỆNG', 'trangmieng.png'),
(17, 'THỨC UỐNG', 'thucuong.png');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--
DROP TABLE IF EXISTS `dichvu`;
CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`id`, `title`, `content`, `image`) VALUES
(1, 'Dich vu 5', 'Noi dung 5', 'JavaScript-Symbol.png'),
(2, 'dich vu 2', 'Mỹ phẩm top 1 đại hàn dân quốc', 'cat_burger.png');

-- --------------------------------------------------------

--
-- Table structure for table `loaiga`
--
DROP TABLE IF EXISTS `loaiga`;
CREATE TABLE `loaiga` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaiga`
--

INSERT INTO `loaiga` (`id`, `name`, `price`, `image`) VALUES
(1, 'Gà rán', 30, 'th.jpg'),
(3, 'Gà giòn vui vẻ', 0, ''),
(4, 'Gà sốt cay', 2000, ''),
(5, 'Gà không xương', 10000, 'my_lon_strip_nc.png');

-- --------------------------------------------------------

--
-- Table structure for table `loaikhoai`
--
DROP TABLE IF EXISTS `loaikhoai`;
CREATE TABLE `loaikhoai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaikhoai`
--

INSERT INTO `loaikhoai` (`id`, `name`, `price`, `image`) VALUES
(1, 'Khoai tây chiên', 20000, 'th (2).jpg'),
(3, 'Khoai tây lắc vị BBQ', 30, 'th (3).jpg'),
(4, 'Khoai tây vừa', 0, '1_ga_gion_khoai_nc.png');

-- --------------------------------------------------------

--
-- Table structure for table `loaimi`
--
DROP TABLE IF EXISTS `loaimi`;
CREATE TABLE `loaimi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaimi`
--

INSERT INTO `loaimi` (`id`, `name`, `price`, `image`) VALUES
(1, 'Mì Ý Sốt Bò Bằm', 15000, ''),
(2, 'Mì Ý Sốt Bò Bằm(Lớn)', 25000, ''),
(3, 'Mì sốt bò bằm', 30, 'th (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `loainuoc`
--
DROP TABLE IF EXISTS `loainuoc`;
CREATE TABLE `loainuoc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loainuoc`
--
INSERT INTO `loainuoc` (`id`, `name`, `price`, `image`) VALUES
(1, 'Pepsi vừa', 0, '6fcdee718437bf-pepsi_1.png'),
(2, 'Pepsi lớn', 10000, ''),
(4, 'Pepsi Lớn (up)', 5000, '6fcdee718437bf-pepsi_1.png'),
(5, '7 Up (up)', 5000, '71434bb9342048-7up_1.png'),
(6, 'Mirinda Lớn (up)', 5000, '1cd70b5383c11d-mirinda_1.png'),
(7, 'Pepsi vừa', 4000, '22a5960148a32e-2mienggaran14.png'),
(8, '7 UP vừa', 0, '71434bb9342048-7up_1.png'),
(9, 'Mirinda vừa', 4000, '1cd70b5383c11d-mirinda_1.png'),
(10, 'Trà Đào vừa (up)', 10000, '0f550a170bb756-tradao_1.png'),
(11, 'Trà Đào lớn (up)', 15000, '0f550a170bb756-tradao_1.png'),
(12, 'Nước suối Aquafina (up)', 5000, '1a00ca58bc00e1-b4ab7d469cee70aquaffina01_1.png'),
(13, 'Ca Cao Sữa Đá Vừa (up)', 10000, 'c5ded2aa5f7b3c-2mienggaran19_1.png'),
(14, 'Ca Cao Sữa Đá Lớn (up)', 15000, 'c5ded2aa5f7b3c-2mienggaran19_1.png'),
(15, 'Nước ép xoài đào lớn (up)', 15000, 'xoai_dao_menu_1.png');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--
DROP TABLE IF EXISTS `sanpham`;
CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `view` int(11) DEFAULT 0,
  `id_dm` int(11) NOT NULL,
  `id_ga` int(11) NOT NULL,
  `soluong_ga` int(11) DEFAULT NULL,
  `id_nuoc` int(11) NOT NULL,
  `soluong_nuoc` int(11) DEFAULT NULL,
  `id_mi` int(11) NOT NULL,
  `soluong_mi` int(11) DEFAULT NULL,
  `id_khoai` int(11) NOT NULL,
  `soluong_khoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `image`, `description`, `view`, `id_dm`, `id_ga`, `soluong_ga`, `id_nuoc`, `soluong_nuoc`, `id_mi`, `soluong_mi`, `id_khoai`, `soluong_khoai`) VALUES
(11, '2 Miếng gà giòn + Khoai tây vừa + Nước ngọt lớn', 91000.00, '2_ga_gion_khoai_nc.png', '', 0, 10, 3, 2, 2, 1, 0, 0, 2, 1),
(12, '01 MIẾNG GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 01 NƯỚC NGỌT LỚN', 78000.00, 'my_ga_nc.png', '', 0, 10, 3, 1, 2, 1, 1, 1, 0, 0),
(13, 'MÌ Ý SỐT BÒ BẰM LỚN + 1 MIẾNG GÀ RÁN + NƯỚC NGỌT LỚN', 88000.00, 'my_lon_ga_nc.png', '', 0, 10, 3, 1, 2, 1, 2, 1, 0, 0),
(14, 'COMBO CẶP ĐÔI ĂN Ý 145K (3 GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 1 KHOAI VỪA + 2 NƯỚC NGỌT)', 145000.00, '3ga_1my_500x500-05_1.jpg', '', 0, 10, 3, 3, 1, 2, 1, 1, 0, 0),
(15, 'COMBO 185K (3 MIẾNG GÀ GIÒN + 2 MÌ Ý + 1 KHOAI VỪA + 3 NƯỚC NGỌT VỪA)', 185000.00, 'combo_180k.jpg', '', 0, 10, 3, 3, 1, 3, 1, 2, 0, 0),
(16, 'TIỆC KIỂU MỚI, QUÀ CHUẨN GU 499K', 499000.00, '499k.jpg', '', 0, 10, 3, 3, 1, 5, 1, 5, 1, 2),
(17, 'MIẾNG GÀ GIÒN VUI VẺ', 33000.00, '1_mi_ng_ggvv_png_1.png', '', 0, 11, 3, 1, 0, 0, 0, 0, 0, 0),
(18, 'CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)', 43000.00, '6d2e290195e851-cmggin_1_2.png', '', 0, 10, 1, 0, 0, 0, 0, 0, 0, 0),
(19, 'C2 - CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT LỚN', 63000.00, 'com_ga_sup_nc_1.png', '', 0, 11, 3, 1, 2, 1, 0, 0, 0, 0),
(20, '2 MIẾNG GÀ GIÒN', 66000.00, 'd1834d87116836-2mingggin_1.png', '', 0, 11, 3, 2, 0, 0, 0, 0, 0, 0),
(21, '4 MIẾNG GÀ GIÒN', 126000.00, '427e7a3136f84a-4mingggin_1.png', '', 0, 11, 3, 4, 0, 0, 0, 0, 0, 0),
(22, '6 MIẾNG GÀ GIÒN', 188000.00, 'ee8e7512368728-6mingggin_1.png', '', 0, 11, 3, 6, 0, 0, 0, 0, 0, 0),
(23, '2 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 91000.00, '2_ga_gion_khoai_nc.png', '', 0, 11, 3, 2, 2, 1, 0, 0, 1, 1),
(24, 'CƠM GÀ GIÒN + PEPSI LỚN', 58000.00, 'c_m_g_n_c.png', '', 0, 11, 3, 1, 2, 0, 0, 0, 0, 0),
(25, '1 MIẾNG GÀ GIÒN + KHOAI TÂY VỪA + NƯỚC NGỌT LỚ', 58000.00, '1_ga_gion_khoai_nc.png', '', 0, 11, 3, 1, 6, 1, 0, 0, 1, 1),
(26, '01 MIẾNG GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 01 NƯỚC NGỌT LỚN', 78000.00, 'my_ga_nc.png', '', 0, 12, 3, 1, 6, 1, 1, 1, 0, 0),
(27, 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ GIÒN KHÔNG XƯƠNG + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 90000.00, 'my_lon_strip_khoai_nc.png', '', 0, 12, 3, 2, 2, 1, 2, 1, 1, 1),
(28, 'MÌ Ý SỐT BÒ BẰM LỚN + 2 MIẾNG GÀ KHÔNG XƯƠNG + NƯỚC NGỌT LỚN', 80000.00, 'my_lon_strip_nc.png', '', 0, 12, 5, 2, 4, 0, 1, 1, 0, 0),
(29, 'MÌ Ý SỐT BÒ BẰM LỚN + NƯỚC NGỌT LỚN', 55000.00, 'my_lon_nc.png', '', 0, 12, 0, 0, 11, 1, 2, 1, 0, 0),
(30, 'MÌ Ý SỐT BÒ BẰM LỚN + 1 MIẾNG GÀ RÁN + NƯỚC NGỌT LỚN', 88000.00, 'my_ga_nc.png', '', 0, 12, 1, 1, 15, 1, 2, 1, 0, 0),
(31, 'MÌ Ý SỐT BÒ BẰM LỚN + 1 MIẾNG GÀ RÁN + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 103000.00, 'my_lon_ga_khoai_nc.png', '', 0, 12, 1, 1, 14, 1, 2, 1, 1, 1),
(32, 'MÌ Ý SỐT BÒ BẰM LỚN + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 70000.00, 'my_lon_khoai_nc.png', '', 0, 12, 0, 0, 11, 1, 2, 1, 4, 1),
(33, 'N3 - MÌ Ý SỐT BÒ BẰM + 1 MIẾNG GÀ RÁN + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 93000.00, 'my_lon_ga_khoai_nc.png', '', 0, 12, 1, 1, 6, 1, 1, 1, 4, 1),
(34, 'MÌ Ý SỐT BÒ BẰM + 2 MIẾNG GÀ GIÒN KHÔNG XƯƠNG + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 80000.00, 'my_lon_strip_khoai_nc.png', '', 0, 12, 5, 2, 15, 1, 1, 1, 4, 1),
(35, 'N1 - MÌ Ý SỐT BÒ BẰM + 2 MIẾNG GÀ GIÒN KHÔNG XƯƠNG + NƯỚC NGỌT LỚN', 70000.00, 'my_lon_strip_nc.png', '', 0, 10, 5, 2, 6, 1, 1, 1, 0, 0),
(36, 'N2 - MÌ Ý SỐT BÒ BẰM + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 60000.00, 'my_lon_khoai_nc.png', '', 0, 12, 0, 0, 4, 1, 1, 1, 4, 1),
(37, 'N6 - MÌ Ý SỐT BÒ BẰM + NƯỚC NGỌT LỚN', 45000.00, 'my_lon_nc.png', '', 0, 12, 0, 0, 6, 1, 1, 1, 0, 0),
(38, 'MÌ Ý SỐT BÒ BẰM LỚN', 45000.00, 'th (1).jpg', '', 0, 12, 0, 0, 0, 0, 2, 1, 0, 0),
(39, 'MÌ Ý SỐT BÒ BẰM', 35000.00, 'th (1).jpg', '', 0, 12, 0, 0, 0, 0, 1, 1, 0, 0),
(40, '1 MIẾNG GÀ SỐT CAY + CƠM', 50000.00, '38b2b63ad78a31-1gstcaycm_2.jpg', '', 0, 13, 4, 1, 0, 0, 0, 0, 0, 0),
(41, '2 MIẾNG GÀ SỐT CAY', 70000.00, '0ea5c976da5a4a-2minggsgstcay_1.png', '', 0, 10, 4, 2, 0, 0, 0, 0, 0, 0),
(42, '2 MIẾNG GÀ SỐT CAY + KHOAI TÂY + PEPSI LỚN', 95000.00, '2_ga_sot_cay_khoai_nc.png', '', 0, 13, 4, 2, 2, 1, 0, 0, 1, 1),
(43, '1 MIẾNG GÀ SỐT CAY + CƠM + NƯỚC NGỌT LỚN', 60000.00, 'com_ga_chili_nc.png', '', 0, 10, 4, 1, 4, 1, 0, 0, 0, 0),
(44, '1 CƠM GÀ SỐT CAY + PEPSI LỚN + SÚP', 65000.00, 'com_ga_sot_cay_sup_nc.png', '', 0, 13, 4, 1, 2, 1, 0, 0, 0, 0),
(45, '1 MIẾNG GÀ SỐT CAY + KHOAI TÂY + PEPSI LỚN', 60000.00, '1_ga_sot_cay_khoai_nc.png', '', 0, 13, 4, 1, 2, 1, 0, 0, 1, 1),
(46, 'MIẾNG GÀ SỐT CAY', 35000.00, 'g_s_t_cay_1.png', '', 0, 10, 4, 1, 0, 0, 0, 0, 0, 0),
(47, 'JOLLY HOTDOG + NƯỚC NGỌT LỚN', 35000.00, 'hotdog_web-02.png', '', 0, 14, 0, 0, 14, 1, 0, 0, 0, 0),
(48, 'JOLLY HOTDOG + KHOAI TÂY VỪA + NƯỚC NGỌT LỚN', 50000.00, 'hotdog_web-01.png', '', 0, 14, 0, 0, 11, 1, 0, 0, 4, 1),
(49, 'SANDWICH GÀ GIÒN + NƯỚC NGỌT LỚN', 40000.00, 'bo_go_ga_nc.png', '', 0, 14, 0, 0, 11, 1, 0, 0, 0, 0),
(50, 'SANDWICH GÀ GIÒN', 30000.00, '92d27d47dadbfc-hambugerlon.jpg', '', 0, 14, 0, 0, 0, 0, 0, 0, 0, 0),
(51, 'SANDWICH GÀ GIÒN + KHOAI TÂY + NƯỚC NGỌT LỚN', 55000.00, 'bo_go_ga_khoai_nc.png', '', 0, 14, 0, 0, 6, 1, 0, 0, 1, 1),
(52, 'KHOAI TÂY CHIÊN (VỪA)', 20000.00, '5532107fb902fd-1860001_khoaivua21.png', '', 0, 15, 0, 0, 0, 0, 0, 0, 4, 1),
(53, 'KHOAI TÂY LẮC VỊ BBQ (LỚN)', 35000.00, 'th (3).jpg', '', 0, 15, 0, 0, 0, 0, 0, 0, 3, 1),
(54, 'KHOAI TÂY LẮC VỊ BBQ (VỪA)', 25000.00, 'th (3).jpg', '', 0, 15, 0, 0, 0, 0, 0, 0, 3, 1),
(55, 'SÚP BÍ ĐỎ', 15000.00, 's_p_b_.png', '', 0, 15, 0, 0, 0, 0, 0, 0, 0, 0),
(56, 'CƠM TRẮNG', 10000.00, 'b3ad51b912e4e5-2mienggaran24.png', '', 0, 15, 0, 0, 0, 0, 0, 0, 0, 0),
(57, 'BÁNH XOÀI ĐÀO', 10000.00, 'pmp-plated.png', '', 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(58, 'TROPICAL SUNDAE', 20000.00, 'kemsundae-06.png', '', 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(59, 'KEM SỮA TƯƠI (CÚP)', 5000.00, 'ba9d396f70568c-kemvani201.png', '', 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(60, 'KEM SÔCÔLA (CÚP)', 7000.00, 'c400652c2a03e0-chocolateicecream01.png', '', 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(61, 'KEM SUNDAES DÂU', 15000.00, 'd01402ed11976b-kemsundeadau.png', '', 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(62, 'KEM SUNDAES SÔCÔLA', 15000.00, '192dcb48e7393a-kemsocola16.png', '', 0, 16, 0, 0, 0, 0, 0, 0, 0, 0),
(63, 'PEPSI VỪA', 12000.00, '22a5960148a32e-2mienggaran14 (1).png', '', 0, 17, 0, 0, 1, 1, 0, 0, 0, 0),
(64, '7 UP VỪA', 12000.00, '76632fe162df44-1.png', '', 0, 17, 0, 0, 8, 1, 0, 0, 0, 0),
(65, 'MIRINDA VỪA', 12000.00, '93f1db7e900040-400533 (1).png', '', 0, 17, 0, 0, 9, 1, 0, 0, 0, 0),
(66, 'PEPSI LỚN', 17000.00, '22a5960148a32e-2mienggaran14 (1).png', '', 0, 17, 0, 0, 2, 1, 0, 0, 0, 0),
(67, '7 UP LỚN', 17000.00, '76632fe162df44-1.png', '', 0, 17, 0, 0, 5, 1, 0, 0, 0, 0),
(68, 'MIRINDA LỚN', 17000.00, '93f1db7e900040-400533 (1).png', '', 0, 17, 0, 0, 6, 1, 0, 0, 0, 0),
(69, 'TRÀ ĐÀO (LY VỪA)', 15000.00, '564edf0846c268-tradao.png', '', 0, 17, 0, 0, 10, 1, 0, 0, 0, 0),
(70, 'TRÀ ĐÀO (LY LỚN)', 20000.00, '564edf0846c268-tradao.png', '', 0, 17, 0, 0, 11, 1, 0, 0, 0, 0),
(71, 'CA CAO SỮA ĐÁ (VỪA)', 20000.00, 'c5ded2aa5f7b3c-2mienggaran19.png', '', 0, 17, 0, 0, 13, 1, 0, 0, 0, 0),
(72, 'CA CAO SỮA ĐÁ (LỚN)', 25000.00, 'c5ded2aa5f7b3c-2mienggaran19.png', '', 0, 17, 0, 0, 14, 1, 0, 0, 0, 0),
(73, 'NƯỚC SUỐI AQUAFINA', 8000.00, '1a00ca58bc00e1-b4ab7d469cee70aquaffina01.png', '', 0, 17, 0, 0, 12, 1, 0, 0, 0, 0),
(74, 'NƯỚC ÉP XOÀI ĐÀO', 20000.00, 'xoai_dao_menu.png', '', 0, 17, 0, 0, 15, 1, 0, 0, 0, 0),
(75, 'PEPSI KHÔNG CALO VỪA', 12000.00, 'lypepsi-03.png', '', 0, 17, 0, 0, 0, 0, 0, 0, 0, 0),
(76, 'PEPSI KHÔNG CALO LỚN', 17000.00, 'lypepsi-03.png', '', 0, 17, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--
DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `id_role` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `hoten`, `image`, `email`, `address`, `tel`, `id_role`) VALUES
(1, 'hieunek', 'd1b6986dd2f1406a63f8a3302fbf029e', 'NguyenMinhHieu', 'AEOO5165-removebg-preview.png', 'nguyentrunghieu26042004@gmail.com', 'Khu Vân Tiến 5', '0337448886', 1),
(2, 'chi', '7c32420582153f3d1461ad5b2fe611a2', 'nguyenKimChi', 'CSS3_logo_and_wordmark.svg.png', 'hieunmph35961@fpt.edu.vn', 'Khu Vân Tiến 3', '0337448888', 1),
(3, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'NguyenMinhHieu', '119088557_333042268111963_4452368601262686891_n-removebg-preview (1).png', 'nguyenminhhieu06042004@gmail.com', 'Khu Vân Tiến 1', '0337448888', 2),
(8, 'hieu', 'e016124a326fe53cbd0be76096f3b867', 'Nguyễn Minh Hiếu', '119088557_333042268111963_4452368601262686891_n-removebg-preview.png', 'hieunmph35961@fpt.edu.vn', 'Khu Vân Tiến 1', '0337448886', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--;
DROP TABLE IF EXISTS `tintuc`;
CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaiga`
--
ALTER TABLE `loaiga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaikhoai`
--
ALTER TABLE `loaikhoai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loaimi`
--
ALTER TABLE `loaimi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loainuoc`
--
ALTER TABLE `loainuoc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`,`id_ga`,`id_nuoc`,`id_mi`,`id_khoai`),
  ADD KEY `id_ga` (`id_ga`),
  ADD KEY `id_khoai` (`id_khoai`),
  ADD KEY `id_mi` (`id_mi`),
  ADD KEY `id_nuoc` (`id_nuoc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loaiga`
--
ALTER TABLE `loaiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaikhoai`
--
ALTER TABLE `loaikhoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loaimi`
--
ALTER TABLE `loaimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loainuoc`
--
ALTER TABLE `loainuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;







-- Table structure for table `chitietsp`
--
DROP TABLE IF EXISTS `chitietsp`;
CREATE TABLE `chitietsp` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `view` int(11) DEFAULT 0,
  `id_dm` int(11) NOT NULL,
  `id_ga` int(11) NOT NULL,
  `soluong_ga` int(11) DEFAULT NULL,
  `id_nuoc` int(11) NOT NULL,
  `soluong_nuoc` int(11) DEFAULT NULL,
  `id_mi` int(11) NOT NULL,
  `soluong_mi` int(11) DEFAULT NULL,
  `id_khoai` int(11) NOT NULL,
  `soluong_khoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- Dumping data for table `chitietsp`
--

INSERT INTO `chitietsp` (`id`, `name`, `price`, `image`, `description`, `view`, `id_dm`, `id_ga`, `soluong_ga`, `id_nuoc`, `soluong_nuoc`, `id_mi`, `soluong_mi`, `id_khoai`, `soluong_khoai`) VALUES
(11, '2 Miếng gà giòn + Khoai tây vừa + Nước ngọt lớn', 91000.00, '2_ga_gion_khoai_nc.png', '', 0, 10, 3, 2, 2, 1, 0, 0, 2, 1),
(12, '01 MIẾNG GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 01 NƯỚC NGỌT LỚN', 78000.00, 'my_ga_nc.png', '', 0, 10, 3, 1, 2, 1, 1, 1, 0, 0),
(13, 'MÌ Ý SỐT BÒ BẰM LỚN + 1 MIẾNG GÀ RÁN + NƯỚC NGỌT LỚN', 88000.00, 'my_lon_ga_nc.png', '', 0, 10, 3, 1, 2, 1, 2, 1, 0, 0),
(14, 'COMBO CẶP ĐÔI ĂN Ý 145K (3 GÀ GIÒN VUI VẺ + 1 MỲ Ý SỐT BÒ BẰM + 1 KHOAI VỪA + 2 NƯỚC NGỌT)', 145000.00, '3ga_1my_500x500-05_1.jpg', '', 0, 10, 3, 3, 1, 2, 1, 1, 0, 0),
(15, 'COMBO 185K (3 MIẾNG GÀ GIÒN + 2 MÌ Ý + 1 KHOAI VỪA + 3 NƯỚC NGỌT VỪA)', 185000.00, 'combo_180k.jpg', '', 0, 10, 3, 3, 1, 3, 1, 2, 0, 0),
(16, 'TIỆC KIỂU MỚI, QUÀ CHUẨN GU 499K', 499000.00, '499k.jpg', '', 0, 10, 3, 3, 1, 5, 1, 5, 1, 2),
(17, 'MIẾNG GÀ GIÒN VUI VẺ', 33000.00, '1_mi_ng_ggvv_png_1.png', '', 0, 11, 3, 1, 0, 0, 0, 0, 0, 0),
(18, 'CƠM GÀ GIÒN (1 MIẾNG GÀ GIÒN, CƠM VÀ XÀ LÁCH)', 43000.00, '6d2e290195e851-cmggin_1_2.png', '', 0, 10, 1, 0, 0, 0, 0, 0, 0, 0),
(19, 'C2 - CƠM GÀ GIÒN + SÚP BÍ ĐỎ + NƯỚC NGỌT LỚN', 63000.00, 'com_ga_sup_nc_1.png', '', 0, 11, 3, 1, 2, 1, 0, 0, 0, 0),
(20, '2 MIẾNG GÀ GIÒN', 66000.00, 'd1834d87116836-2mingggin_1.png', '', 0, 11, 3, 2, 0, 0, 0, 0, 0, 0);


-- Indexes for table `chitietsp`
--
ALTER TABLE `chitietsp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`,`id_ga`,`id_nuoc`,`id_mi`,`id_khoai`),
  ADD KEY `id_ga` (`id_ga`),
  ADD KEY `id_khoai` (`id_khoai`),
  ADD KEY `id_mi` (`id_mi`),
  ADD KEY `id_nuoc` (`id_nuoc`);

  -- AUTO_INCREMENT for table `chitietsp`
--
ALTER TABLE `chitietsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
