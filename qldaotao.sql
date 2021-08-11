-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 09:54 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qldaotao`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbo_lop`
--

CREATE TABLE `dbo_lop` (
  `MaLop` int(11) NOT NULL,
  `TenMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Hocsinh` int(11) NOT NULL,
  `Hocsinhtoida` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dbo_lop`
--

INSERT INTO `dbo_lop` (`MaLop`, `TenMon`, `Hocsinh`, `Hocsinhtoida`) VALUES
(1, 'Mã nguồn mở', 4, 60);

-- --------------------------------------------------------

--
-- Table structure for table `dbo_monhoc`
--

CREATE TABLE `dbo_monhoc` (
  `MaMon` int(11) NOT NULL,
  `TenMon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `SoTin` int(11) NOT NULL,
  `MaLop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dbo_monhoc`
--

INSERT INTO `dbo_monhoc` (`MaMon`, `TenMon`, `SoTin`, `MaLop`) VALUES
(1, 'Mã nguồn mở', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dbo_sinhvien`
--

CREATE TABLE `dbo_sinhvien` (
  `MaSV` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `MaLop` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Holot` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Ten` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` tinyint(1) NOT NULL,
  `QueQuan` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `MatKhau` varchar(128) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dbo_sinhvien`
--

INSERT INTO `dbo_sinhvien` (`MaSV`, `MaLop`, `Holot`, `Ten`, `NgaySinh`, `GioiTinh`, `QueQuan`, `MatKhau`, `Email`) VALUES
('00001', NULL, 'Nguyễn', 'Quân', NULL, 0, NULL, 'e10adc3949ba59abbe56e057f20f883e', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dbo_lop`
--
ALTER TABLE `dbo_lop`
  ADD PRIMARY KEY (`MaLop`);

--
-- Indexes for table `dbo_monhoc`
--
ALTER TABLE `dbo_monhoc`
  ADD PRIMARY KEY (`MaMon`);

--
-- Indexes for table `dbo_sinhvien`
--
ALTER TABLE `dbo_sinhvien`
  ADD PRIMARY KEY (`MaSV`),
  ADD KEY `MaLop` (`MaLop`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dbo_sinhvien`
--
ALTER TABLE `dbo_sinhvien`
  ADD CONSTRAINT `dbo_sinhvien_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `dbo_lopchuyennganh` (`MaLop`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
