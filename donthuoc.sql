-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2024 at 02:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donthuoc`
--

-- --------------------------------------------------------

--
-- Table structure for table `bacsi`
--

CREATE TABLE `bacsi` (
  `MaBacSi` int(11) NOT NULL,
  `HoTen` varchar(100) NOT NULL,
  `SoDienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bacsi`
--

INSERT INTO `bacsi` (`MaBacSi`, `HoTen`, `SoDienThoai`, `Email`) VALUES
(4, '7 chọ', '', ''),
(5, 'Si', '', ''),
(6, '7 rô', '', ''),
(7, '7 chuồn', '', ''),
(8, '7 cơ', '', ''),
(9, '7 tép', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `benhnhan`
--

CREATE TABLE `benhnhan` (
  `MaBenhNhan` int(11) NOT NULL,
  `HoTen` varchar(255) NOT NULL,
  `NgaySinh` date DEFAULT NULL,
  `GioiTinh` enum('Nam','Nữ','Khác') NOT NULL,
  `DiaChi` varchar(255) DEFAULT NULL,
  `SoDienThoai` varchar(15) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `NgayDangKy` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `benhnhan`
--

INSERT INTO `benhnhan` (`MaBenhNhan`, `HoTen`, `NgaySinh`, `GioiTinh`, `DiaChi`, `SoDienThoai`, `Email`, `NgayDangKy`) VALUES
(3, 'Rô', '2024-11-01', 'Nữ', 'qq', '122222222222', 'chicken323447@gmail.com', '2024-11-02');

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonthuoc`
--

CREATE TABLE `chitietdonthuoc` (
  `MaChiTiet` int(11) NOT NULL,
  `MaDonThuoc` int(11) NOT NULL,
  `MaThuoc` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonVi` enum('Hộp','Vỉ','Viên') NOT NULL,
  `CachDung` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chitietdonthuoc`
--

INSERT INTO `chitietdonthuoc` (`MaChiTiet`, `MaDonThuoc`, `MaThuoc`, `SoLuong`, `DonVi`, `CachDung`) VALUES
(2, 2, 3, 10, 'Viên', NULL),
(3, 2, 67, 10, 'Viên', NULL),
(4, 2, 61, 10, 'Viên', NULL),
(5, 2, 42, 10, 'Vỉ', NULL),
(6, 2, 8, 10, 'Vỉ', NULL),
(7, 2, 59, 10, 'Vỉ', NULL),
(8, 2, 9, 10, 'Vỉ', NULL),
(9, 2, 49, 15, 'Vỉ', NULL),
(10, 4, 67, 10, 'Viên', NULL),
(11, 2, 61, 10, 'Viên', NULL),
(12, 2, 42, 13, 'Vỉ', NULL),
(13, 2, 8, 10, 'Vỉ', NULL),
(14, 2, 59, 10, 'Vỉ', NULL),
(15, 2, 9, 15, 'Vỉ', NULL),
(16, 2, 49, 15, 'Vỉ', NULL),
(17, 5, 67, 10, 'Viên', NULL),
(18, 2, 61, 10, 'Viên', NULL),
(19, 2, 42, 10, 'Vỉ', NULL),
(20, 2, 8, 10, 'Vỉ', NULL),
(21, 2, 59, 10, 'Vỉ', NULL),
(22, 2, 9, 10, 'Vỉ', NULL),
(23, 2, 49, 15, 'Vỉ', NULL),
(25, 2, 61, 10, 'Viên', NULL),
(26, 2, 42, 10, 'Vỉ', NULL),
(27, 2, 8, 10, 'Vỉ', NULL),
(28, 2, 59, 10, 'Vỉ', NULL),
(29, 2, 9, 10, 'Vỉ', NULL),
(30, 2, 49, 15, 'Vỉ', NULL),
(31, 4, 49, 10, 'Viên', NULL),
(32, 4, 8, 10, 'Vỉ', NULL),
(33, 4, 38, 10, 'Hộp', NULL),
(34, 4, 61, 10, 'Hộp', NULL),
(35, 4, 58, 10, 'Hộp', NULL),
(36, 4, 58, 10, 'Viên', NULL),
(37, 4, 52, 10, 'Vỉ', NULL),
(38, 4, 72, 10, 'Vỉ', NULL),
(39, 4, 68, 10, 'Hộp', NULL),
(40, 5, 43, 10, 'Hộp', NULL),
(41, 5, 35, 10, 'Hộp', NULL),
(42, 5, 48, 10, 'Viên', NULL),
(43, 5, 61, 10, 'Hộp', NULL),
(44, 5, 46, 10, 'Hộp', NULL),
(45, 5, 55, 10, 'Hộp', NULL),
(46, 5, 44, 15, 'Viên', NULL),
(47, 5, 72, 10, 'Hộp', NULL),
(48, 5, 34, 10, 'Hộp', NULL),
(53, 13, 47, 12, 'Viên', ''),
(54, 13, 50, 11, 'Vỉ', ''),
(55, 13, 69, 22, 'Hộp', ''),
(56, 14, 47, 10, 'Viên', ''),
(57, 14, 59, 20, 'Vỉ', ''),
(58, 14, 7, 30, 'Hộp', '');

-- --------------------------------------------------------

--
-- Table structure for table `dangkykham`
--

CREATE TABLE `dangkykham` (
  `MaDangKy` int(11) NOT NULL,
  `MaBenhNhan` int(11) NOT NULL,
  `MaBacSi` int(11) NOT NULL,
  `NgayGioKham` datetime NOT NULL,
  `TrangThai` enum('Chưa khám','Đã khám','Hủy') DEFAULT 'Chưa khám'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dangkykham`
--

INSERT INTO `dangkykham` (`MaDangKy`, `MaBenhNhan`, `MaBacSi`, `NgayGioKham`, `TrangThai`) VALUES
(9, 3, 5, '2024-12-01 11:23:00', 'Chưa khám');

-- --------------------------------------------------------

--
-- Table structure for table `donthuoc`
--

CREATE TABLE `donthuoc` (
  `MaDonThuoc` int(11) NOT NULL,
  `MaBenhNhan` int(11) NOT NULL,
  `MaBacSi` int(11) NOT NULL,
  `NgayKeDon` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donthuoc`
--

INSERT INTO `donthuoc` (`MaDonThuoc`, `MaBenhNhan`, `MaBacSi`, `NgayKeDon`) VALUES
(2, 3, 5, '2024-11-30 17:20:00'),
(4, 3, 7, '2024-12-01 10:21:56'),
(5, 3, 9, '2024-12-01 10:21:56'),
(13, 3, 5, '2024-12-15 00:00:00'),
(14, 3, 6, '2024-12-03 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaithuoc`
--

CREATE TABLE `loaithuoc` (
  `MaLoaiThuoc` int(11) NOT NULL,
  `TenLoaiThuoc` varchar(100) NOT NULL,
  `MoTa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loaithuoc`
--

INSERT INTO `loaithuoc` (`MaLoaiThuoc`, `TenLoaiThuoc`, `MoTa`) VALUES
(1, 'Thuốc tiêu hóa', ''),
(2, 'Thuốc đau đầu, giảm đau', NULL),
(3, 'Thuốc hạ sốt, cảm cúm', NULL),
(4, 'Thuốc chống dị ứng', NULL),
(5, 'Thuốc trị tiêu chảy', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `thuoc`
--

CREATE TABLE `thuoc` (
  `MaThuoc` int(11) NOT NULL,
  `TenThuoc` varchar(100) NOT NULL,
  `MaLoaiThuoc` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonVi` enum('Hộp','Vỉ','Viên') NOT NULL,
  `Gia` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thuoc`
--

INSERT INTO `thuoc` (`MaThuoc`, `TenThuoc`, `MaLoaiThuoc`, `SoLuong`, `DonVi`, `Gia`) VALUES
(3, 'Omeprazole 20mg', 1, 100, 'Viên', 2000),
(4, 'Pantoprazole 40mg', 1, 50, 'Viên', 4000),
(5, 'Esomeprazole 20mg', 1, 60, 'Viên', 5000),
(6, 'Lansoprazole 30mg', 1, 80, 'Viên', 3500),
(7, 'Domperidone 10mg', 1, 120, 'Viên', 1500),
(8, 'Metoclopramide 10mg', 1, 90, 'Viên', 1200),
(9, 'Simethicone 40mg', 1, 200, 'Viên', 500),
(10, 'Lactobacillus Sachet', 1, 150, '', 10000),
(11, 'Ranitidine 150mg', 1, 70, 'Viên', 2500),
(12, 'Famotidine 20mg', 1, 100, 'Viên', 2000),
(33, 'Paracetamol', 3, 100, 'Viên', 5000),
(34, 'Ibuprofen', 3, 80, 'Viên', 6000),
(35, 'Aspirin', 3, 120, 'Viên', 5500),
(36, 'Panadol', 3, 90, 'Viên', 7000),
(37, 'Metamizole', 3, 150, 'Viên', 4500),
(38, 'Naproxen', 3, 100, 'Viên', 6500),
(39, 'Cefixime', 3, 60, 'Viên', 8000),
(40, 'Loratadine', 3, 75, 'Viên', 4000),
(41, 'Efferalgan', 3, 110, 'Viên', 5500),
(42, 'Coldrex', 3, 70, '', 7500),
(43, 'Cetirizine', 2, 100, 'Viên', 4000),
(44, 'Loratadine', 2, 150, 'Viên', 4500),
(45, 'Fexofenadine', 2, 80, 'Viên', 6000),
(46, 'Desloratadine', 2, 120, 'Viên', 5500),
(47, 'Chlorpheniramine', 2, 100, 'Viên', 3500),
(48, 'Diphenhydramine', 2, 60, 'Viên', 7000),
(49, 'Bilastine', 2, 90, 'Viên', 5000),
(50, 'Ebastine', 2, 75, 'Viên', 4500),
(51, 'Clemastine', 2, 110, 'Viên', 4200),
(52, 'Promethazine', 2, 70, 'Viên', 8000),
(53, 'Cetirizine', 4, 100, 'Viên', 4000),
(54, 'Loratadine', 4, 150, 'Viên', 4500),
(55, 'Fexofenadine', 4, 80, 'Viên', 6000),
(56, 'Desloratadine', 4, 120, 'Viên', 5500),
(57, 'Chlorpheniramine', 4, 100, 'Viên', 3500),
(58, 'Diphenhydramine', 4, 60, 'Viên', 7000),
(59, 'Bilastine', 4, 90, 'Viên', 5000),
(60, 'Ebastine', 4, 75, 'Viên', 4500),
(61, 'Clemastine', 4, 110, 'Viên', 4200),
(62, 'Promethazine', 4, 70, 'Viên', 8000),
(63, 'Loperamide', 5, 100, 'Viên', 3000),
(64, 'Racecadotril', 5, 150, 'Viên', 4000),
(65, 'Attapulgite', 5, 120, 'Viên', 3500),
(66, 'Oralit', 5, 90, '', 5000),
(67, 'Bismuth Subsalicylate', 5, 80, 'Viên', 6000),
(68, 'Diosmectite', 5, 110, '', 5500),
(69, 'Probiotics', 5, 100, 'Viên', 4500),
(70, 'Lactobacillus', 5, 70, 'Viên', 3000),
(71, 'Metronidazole', 5, 60, 'Viên', 7000),
(72, 'Ciprofloxacin', 5, 75, 'Viên', 8000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bacsi`
--
ALTER TABLE `bacsi`
  ADD PRIMARY KEY (`MaBacSi`);

--
-- Indexes for table `benhnhan`
--
ALTER TABLE `benhnhan`
  ADD PRIMARY KEY (`MaBenhNhan`);

--
-- Indexes for table `chitietdonthuoc`
--
ALTER TABLE `chitietdonthuoc`
  ADD PRIMARY KEY (`MaChiTiet`),
  ADD KEY `MaDonThuoc` (`MaDonThuoc`),
  ADD KEY `MaThuoc` (`MaThuoc`);

--
-- Indexes for table `dangkykham`
--
ALTER TABLE `dangkykham`
  ADD PRIMARY KEY (`MaDangKy`),
  ADD KEY `MaBenhNhan` (`MaBenhNhan`),
  ADD KEY `MaBacSi` (`MaBacSi`);

--
-- Indexes for table `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD PRIMARY KEY (`MaDonThuoc`),
  ADD KEY `MaBenhNhan` (`MaBenhNhan`),
  ADD KEY `MaBacSi` (`MaBacSi`);

--
-- Indexes for table `loaithuoc`
--
ALTER TABLE `loaithuoc`
  ADD PRIMARY KEY (`MaLoaiThuoc`);

--
-- Indexes for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD PRIMARY KEY (`MaThuoc`),
  ADD KEY `MaLoaiThuoc` (`MaLoaiThuoc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bacsi`
--
ALTER TABLE `bacsi`
  MODIFY `MaBacSi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `benhnhan`
--
ALTER TABLE `benhnhan`
  MODIFY `MaBenhNhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chitietdonthuoc`
--
ALTER TABLE `chitietdonthuoc`
  MODIFY `MaChiTiet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `dangkykham`
--
ALTER TABLE `dangkykham`
  MODIFY `MaDangKy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `donthuoc`
--
ALTER TABLE `donthuoc`
  MODIFY `MaDonThuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `loaithuoc`
--
ALTER TABLE `loaithuoc`
  MODIFY `MaLoaiThuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `thuoc`
--
ALTER TABLE `thuoc`
  MODIFY `MaThuoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonthuoc`
--
ALTER TABLE `chitietdonthuoc`
  ADD CONSTRAINT `chitietdonthuoc_ibfk_1` FOREIGN KEY (`MaDonThuoc`) REFERENCES `donthuoc` (`MaDonThuoc`) ON DELETE CASCADE,
  ADD CONSTRAINT `chitietdonthuoc_ibfk_2` FOREIGN KEY (`MaThuoc`) REFERENCES `thuoc` (`MaThuoc`) ON DELETE CASCADE;

--
-- Constraints for table `dangkykham`
--
ALTER TABLE `dangkykham`
  ADD CONSTRAINT `dangkykham_ibfk_1` FOREIGN KEY (`MaBenhNhan`) REFERENCES `benhnhan` (`MaBenhNhan`),
  ADD CONSTRAINT `dangkykham_ibfk_2` FOREIGN KEY (`MaBacSi`) REFERENCES `bacsi` (`MaBacSi`);

--
-- Constraints for table `donthuoc`
--
ALTER TABLE `donthuoc`
  ADD CONSTRAINT `donthuoc_ibfk_1` FOREIGN KEY (`MaBenhNhan`) REFERENCES `benhnhan` (`MaBenhNhan`),
  ADD CONSTRAINT `donthuoc_ibfk_2` FOREIGN KEY (`MaBacSi`) REFERENCES `bacsi` (`MaBacSi`);

--
-- Constraints for table `thuoc`
--
ALTER TABLE `thuoc`
  ADD CONSTRAINT `thuoc_ibfk_1` FOREIGN KEY (`MaLoaiThuoc`) REFERENCES `loaithuoc` (`MaLoaiThuoc`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
