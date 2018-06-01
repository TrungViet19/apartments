-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 01, 2018 lúc 05:48 AM
-- Phiên bản máy phục vụ: 10.1.31-MariaDB
-- Phiên bản PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `apartments`
--

CREATE TABLE `apartments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` bigint(20) NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `infodetail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgurl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `apartments`
--

INSERT INTO `apartments` (`id`, `name`, `add`, `price`, `info`, `infodetail`, `imgurl`, `status`) VALUES
(64, 'Apartment 1', 'Add 1', 755, 'info 1', 'infodetail 1', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(65, 'Apartment 2', 'Add 2', 736, 'info 2', 'infodetail 2', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(66, 'Apartment 3', 'Add 3', 300, 'info 3', 'infodetail 3', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(67, 'Apartment 4', 'Add 4', 570, 'info 4', 'infodetail 4', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(68, 'Apartment 5', 'Add 5', 791, 'info 5', 'infodetail 5', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(69, 'Apartment 6', 'Add 6', 776, 'info 6', 'infodetail 6', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(70, 'Apartment 7', 'Add 7', 242, 'info 7', 'infodetail 7', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(71, 'Apartment 8', 'Add 8', 319, 'info 8', 'infodetail 8', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(72, 'Apartment 9', 'Add 9', 576, 'info 9', 'infodetail 9', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(73, 'Apartment 10', 'Add 10', 720, 'info 10', 'infodetail 10', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(74, 'Apartment 11', 'Add 11', 914, 'info 11', 'infodetail 11', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(75, 'Apartment 12', 'Add 12', 849, 'info 12', 'infodetail 12', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(76, 'Apartment 13', 'Add 13', 906, 'info 13', 'infodetail 13', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(77, 'Apartment 14', 'Add 14', 761, 'info 14', 'infodetail 14', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(78, 'Apartment 15', 'Add 15', 365, 'info 15', 'infodetail 15', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(79, 'Apartment 16', 'Add 16', 770, 'info 16', 'infodetail 16', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(80, 'Apartment 17', 'Add 17', 284, 'info 17', 'infodetail 17', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(81, 'Apartment 18', 'Add 18', 256, 'info 18', 'infodetail 18', 'http://staticl.enternews.vn/images/big/pic1.png', 0),
(82, 'Apartment 19', 'Add 19', 608, 'info 19', 'infodetail 19', 'http://staticl.enternews.vn/images/big/pic1.png', 1),
(83, 'Apartment 20', 'Add 20', 992, 'info 20', 'infodetail 20', 'http://staticl.enternews.vn/images/big/pic1.png', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `apartments`
--
ALTER TABLE `apartments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `apartments`
--
ALTER TABLE `apartments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
