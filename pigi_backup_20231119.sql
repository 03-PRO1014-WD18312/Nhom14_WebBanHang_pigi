-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2023 lúc 10:39 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `pigi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
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
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
--

INSERT INTO `dichvu` (`id`, `title`, `content`, `image`) VALUES
(1, 'Dich vu 5', 'Noi dung 5', 'JavaScript-Symbol.png'),
(2, 'dich vu 2', 'Mỹ phẩm top 1 đại hàn dân quốc', 'cat_burger.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaiga`
--

CREATE TABLE `loaiga` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaiga`
--

INSERT INTO `loaiga` (`id`, `name`, `price`) VALUES
(3, 'Gà giòn vui vẻ', 0),
(4, 'Gà sốt cay', 2000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaikhoai`
--

CREATE TABLE `loaikhoai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaikhoai`
--

INSERT INTO `loaikhoai` (`id`, `name`, `price`) VALUES
(1, 'Khoai tây chiên(Vừa)', 5000),
(2, 'Khoai tây chiên(Lớn)', 10000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaimi`
--

CREATE TABLE `loaimi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loaimi`
--

INSERT INTO `loaimi` (`id`, `name`, `price`) VALUES
(1, 'Mì Ý Sốt Bò Bằm', 15000),
(2, 'Mì Ý Sốt Bò Bằm(Lớn)', 25000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loainuoc`
--

CREATE TABLE `loainuoc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loainuoc`
--

INSERT INTO `loainuoc` (`id`, `name`, `price`) VALUES
(1, 'Pepsi vừa', 5000),
(2, 'Pepsi lớn', 10000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

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
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `image`, `description`, `view`, `id_dm`, `id_ga`, `soluong_ga`, `id_nuoc`, `soluong_nuoc`, `id_mi`, `soluong_mi`, `id_khoai`, `soluong_khoai`) VALUES
(3, 'Gà giòn', 77.00, 'thucuong.png', 'Gà không lối thoát', NULL, 10, 3, 1, 0, 0, 0, 0, 0, 0),
(4, 'Gà giòn vui vẻ', 91.00, 'thucuong.png', 'Gà không lối thoát 2', 0, 11, 3, 3, 1, 1, 0, 0, 0, 0),
(5, 'Mì bò', 100000.00, '119088557_333042268111963_4452368601262686891_n-removebg-preview.png', 'Mì hảo hảo chua cay quyến rũ khác biệt', 0, 12, 3, 1, 0, 0, 2, 3, 0, 0),
(8, 'gà sốt cay', 126.00, 'logo-fpt-fpt-polytechnic-tach-nen_043151201.png', 'Mô tả của hiếu', 0, 13, 4, 2, 2, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

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
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `user`, `pass`, `hoten`, `image`, `email`, `address`, `tel`, `id_role`) VALUES
(1, 'hieunek', '7130673de2fd85b22d402c17d640f329', 'NguyenMinhHieu', 'AEOO5165-removebg-preview.png', 'nguyentrunghieu26042004@gmail.com', 'Khu Vân Tiến 4', '0337448886', 1),
(2, 'chi', '7c32420582153f3d1461ad5b2fe611a2', 'nguyenKimChi', 'CSS3_logo_and_wordmark.svg.png', 'hieunmph35961@fpt.edu.vn', 'Khu Vân Tiến 3', '0337448888', 1),
(3, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'NguyenMinhHieu', '119088557_333042268111963_4452368601262686891_n-removebg-preview (1).png', 'nguyenminhhieu06042004@gmail.com', 'Khu Vân Tiến 1', '0337448888', 2),
(8, 'hieu', 'e016124a326fe53cbd0be76096f3b867', 'Nguyễn Minh Hiếu', '119088557_333042268111963_4452368601262686891_n-removebg-preview.png', 'hieunmph35961@fpt.edu.vn', 'Khu Vân Tiến 1', '0337448886', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaiga`
--
ALTER TABLE `loaiga`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaikhoai`
--
ALTER TABLE `loaikhoai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaimi`
--
ALTER TABLE `loaimi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loainuoc`
--
ALTER TABLE `loainuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_dm` (`id_dm`,`id_ga`,`id_nuoc`,`id_mi`,`id_khoai`),
  ADD KEY `id_ga` (`id_ga`),
  ADD KEY `id_khoai` (`id_khoai`),
  ADD KEY `id_mi` (`id_mi`),
  ADD KEY `id_nuoc` (`id_nuoc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `loaiga`
--
ALTER TABLE `loaiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `loaikhoai`
--
ALTER TABLE `loaikhoai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loaimi`
--
ALTER TABLE `loaimi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `loainuoc`
--
ALTER TABLE `loainuoc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
