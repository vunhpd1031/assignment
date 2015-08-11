-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2015 at 06:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_vest`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `MaHD` varchar(5) NOT NULL,
  `MaSP` varchar(5) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `ThanhTien` int(11) NOT NULL,
  PRIMARY KEY (`MaHD`,`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`MaHD`, `MaSP`, `SoLuong`, `ThanhTien`) VALUES
('HD005', 'HD004', 1, 6500000),
('HD006', 'HD003', 1, 7500000),
('HD007', 'HD001', 1, 490000),
('HD007', 'HD004', 1, 1900000);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE IF NOT EXISTS `hoadon` (
  `MaHD` varchar(5) NOT NULL,
  `TenTK` varchar(50) NOT NULL,
  `NgayMua` date NOT NULL,
  `TongTien` int(11) NOT NULL,
  `TinhTrang` varchar(50) NOT NULL,
  PRIMARY KEY (`MaHD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `TenTK`, `NgayMua`, `TongTien`, `TinhTrang`) VALUES
('HD001', 'vu', '2015-08-09', 15000000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD002', 'vu', '2015-08-09', 7500000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD003', 'vu', '2015-08-09', 7500000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD004', 'vu', '2015-08-09', 7500000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD005', 'vu', '2015-08-09', 6500000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD006', 'vu', '2015-08-10', 7500000, 'ÄÃ£ Thanh ToÃ¡n'),
('HD007', 'vu', '2015-08-10', 2390000, 'ÄÃ£ Thanh ToÃ¡n');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `MaSP` varchar(5) NOT NULL,
  `TenSP` varchar(50) NOT NULL,
  `DonGia` varchar(50) NOT NULL,
  `Img` varchar(50) NOT NULL,
  `MoTa` varchar(50) NOT NULL,
  PRIMARY KEY (`MaSP`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `DonGia`, `Img`, `MoTa`) VALUES
('HD001', 'Ão Vest KaKi', '490000', '2.jpg', 'Ão Vest Kaki Äen Kiá»ƒu Viá»n Tráº¯ng'),
('HD002', 'Ão Vest Nam', '230000', '3.jpg', 'Ão vest nam viá»n sá»c mÃ u thá»i trang cao cá'),
('HD003', 'Ão khoÃ¡c nam', '250000', '8332-15809173372512201416816193998332-15809.jpg', 'Ão khoÃ¡c nam dáº¡ng vest thá»i trang'),
('HD004', 'Ão Vest Nam', '1900000', 'dai dien.jpg', 'Ão vest nam cao cáº¥p.'),
('HD005', 'Ão Vest Nam HÃ n Quá»‘c', '1000000', 'dai dien (1).jpg', 'Ão vest cháº¥t liá»‡u cao cáº¥p.'),
('HD006', 'Vest', '500000', '1.jpg', 'Ão vest nam tráº» trung');

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE IF NOT EXISTS `taikhoan` (
  `TenTK` varchar(50) NOT NULL,
  `PassTK` varchar(50) NOT NULL,
  `HoTen` varchar(50) NOT NULL,
  `GioiTinh` int(11) NOT NULL,
  `DiaChi` varchar(50) NOT NULL,
  `SoDT` varchar(50) NOT NULL,
  `VaiTro` varchar(50) NOT NULL,
  PRIMARY KEY (`TenTK`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`TenTK`, `PassTK`, `HoTen`, `GioiTinh`, `DiaChi`, `SoDT`, `VaiTro`) VALUES
('vu', '123456', 'Nguyá»…n HoÃ ng VÅ©', 1, 'da nang', '0975308321', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
