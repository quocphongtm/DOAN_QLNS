-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th3 08, 2018 lúc 06:56 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlns`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ca`
--

DROP TABLE IF EXISTS `ca`;
CREATE TABLE IF NOT EXISTS `ca` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tenca` varchar(5) NOT NULL,
  `tgbd` time NOT NULL,
  `tgkt` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chucvu`
--

DROP TABLE IF EXISTS `chucvu`;
CREATE TABLE IF NOT EXISTS `chucvu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tencv` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `chucvu`
--

INSERT INTO `chucvu` (`id`, `tencv`) VALUES
(1, 'Giam doc'),
(2, 'nhan vien');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `diemdanh`
--

DROP TABLE IF EXISTS `diemdanh`;
CREATE TABLE IF NOT EXISTS `diemdanh` (
  `idnv` varchar(10) NOT NULL,
  `ngay` date NOT NULL,
  `idca` varchar(1) NOT NULL,
  `ghichu` int(35) NOT NULL,
  PRIMARY KEY (`idnv`,`ngay`,`idca`),
  KEY `idca` (`idca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

DROP TABLE IF EXISTS `nhanvien`;
CREATE TABLE IF NOT EXISTS `nhanvien` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hoten` varchar(30) NOT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `ngaysinh` date NOT NULL,
  `noisinh` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `socmnd` varchar(13) NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `noicapcmnd` varchar(50) NOT NULL,
  `ngaycapcmnd` date NOT NULL,
  `nguyenquan` varchar(50) NOT NULL,
  `quoctich` varchar(15) NOT NULL,
  `noithuongtru` varchar(50) NOT NULL,
  `noitamtru` varchar(50) NOT NULL,
  `dantoc` varchar(15) NOT NULL,
  `tongiao` varchar(15) NOT NULL,
  `tinhtranghonnhan` varchar(15) NOT NULL,
  `trinhdovanhoa` varchar(15) NOT NULL,
  `trinhdochuyenmon` varchar(15) NOT NULL,
  `dienthoai` varchar(13) NOT NULL,
  `nganhangdangky` varchar(20) NOT NULL,
  `sotaikhoan` varchar(20) NOT NULL,
  `ngayvaolam` date NOT NULL,
  `idcv` int(10) NOT NULL,
  `idphong` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idchucvu` (`idcv`),
  KEY `idphong` (`idphong`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`id`, `hoten`, `gioitinh`, `ngaysinh`, `noisinh`, `email`, `socmnd`, `hinh`, `noicapcmnd`, `ngaycapcmnd`, `nguyenquan`, `quoctich`, `noithuongtru`, `noitamtru`, `dantoc`, `tongiao`, `tinhtranghonnhan`, `trinhdovanhoa`, `trinhdochuyenmon`, `dienthoai`, `nganhangdangky`, `sotaikhoan`, `ngayvaolam`, `idcv`, `idphong`) VALUES
(1, 'Phong', 1, '2018-03-01', '1', '1@gmail.com', '232342', 'sdf.png', 'sf', '2018-03-15', 'sfd', 'gg', 'ưer', 'ưg', 'sv', 'sc', 'sb', 'ethg', 'ưefw', '2342342', 'fsdf', 'sdf', '2018-03-21', 1, 1),
(2, 'Huỳnh Thị Mỹ Hường', 0, '2018-03-01', '96 Nguyễn Thj Tú', 'huynhtranvuquocphong@gmail.com', '35345345345', 'Capture1.PNG', 'Bến Tre', '2018-03-16', 'Bến Tre', 'Việt Nam', 'Bến Tre', 'Bến Tre', 'Kinh', 'Không', 'Độc thân', '12/1', 'CNTT', '0986716414', 'ARIBANK', '345345', '2017-11-16', 1, 1),
(5, 'Lê Thị B', 0, '2018-03-23', '96 Nguyễn Thj Tú', 'huynhtranvuquocphong@gmail.com', '35345345345', 'mXyG_Capture1.PNG', 'Bến Tre', '2018-03-17', 'Bến Tre', 'Việt Nam', 'Bến Tre', 'Bến Tre', 'Kinh', 'Không', 'Độc thân', '12/1', 'CNTT', '0986716414', 'ARIBANK', '345345', '2018-03-16', 1, 1),
(6, 'Lê Thị c', 0, '2018-02-28', '96 Nguyễn Thj Tú', 'huynhtranvuquocphong@gmail.com', '35345345345', 'SXAL_Capture1.PNG', 'Bến Tre', '2018-03-06', 'Bến Tre', 'Việt Nam', 'Bến Tre', 'Bến Tre', 'Kinh', 'Không', 'Độc thân', '12/1', 'CNTT', '0986716414', 'ARIBANK', '345345', '2018-03-16', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phong`
--

DROP TABLE IF EXISTS `phong`;
CREATE TABLE IF NOT EXISTS `phong` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `tenphong` varchar(15) NOT NULL,
  `mota` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `phong`
--

INSERT INTO `phong` (`id`, `tenphong`, `mota`) VALUES
(1, 'Nhân sự', ''),
(2, 'Tài chính', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` int(1) NOT NULL,
  `idnv` int(10) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `idnv` (`idnv`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_ibfk_2` FOREIGN KEY (`idcv`) REFERENCES `chucvu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`idnv`) REFERENCES `nhanvien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
