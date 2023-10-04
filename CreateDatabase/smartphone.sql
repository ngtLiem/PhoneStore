-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 11:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartphone`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_gh`
--

CREATE TABLE `chitiet_gh` (
  `SP_MA` int(11) NOT NULL,
  `GH_MA` int(11) NOT NULL,
  `CTGH_SOLUONG` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiet_gh`
--

INSERT INTO `chitiet_gh` (`SP_MA`, `GH_MA`, `CTGH_SOLUONG`) VALUES
(1, 1, 1),
(4, 2, 1),
(5, 4, 1),
(6, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chitiet_pn`
--

CREATE TABLE `chitiet_pn` (
  `SP_MA` int(11) NOT NULL,
  `PN_STT` int(11) NOT NULL,
  `NV_MA` int(11) NOT NULL,
  `NPP_MASO` int(11) NOT NULL,
  `CTPN_SOLUONG` int(11) DEFAULT NULL,
  `CTPN_DONGIA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiet_pn`
--

INSERT INTO `chitiet_pn` (`SP_MA`, `PN_STT`, `NV_MA`, `NPP_MASO`, `CTPN_SOLUONG`, `CTPN_DONGIA`) VALUES
(1, 1, 1, 1, 50, 26490000),
(2, 2, 1, 1, 20, 9690000),
(3, 1, 1, 1, 38, 3790000),
(4, 4, 1, 1, 20, 19990000),
(5, 5, 1, 2, 32, 5990000),
(6, 6, 1, 2, 28, 9990000);

-- --------------------------------------------------------

--
-- Table structure for table `chi_tiet_hd`
--

CREATE TABLE `chi_tiet_hd` (
  `SP_MA` int(11) NOT NULL,
  `HD_STT` int(11) NOT NULL,
  `CTHD_SLB` int(11) DEFAULT NULL,
  `CTHD_DONGIA` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chi_tiet_hd`
--

INSERT INTO `chi_tiet_hd` (`SP_MA`, `HD_STT`, `CTHD_SLB`, `CTHD_DONGIA`) VALUES
(1, 1, 1, 26490000),
(4, 2, 1, 19990000),
(5, 4, 1, 5990000),
(6, 3, 2, 9990000);

-- --------------------------------------------------------

--
-- Table structure for table `chuc_vu`
--

CREATE TABLE `chuc_vu` (
  `CV_MA` int(11) NOT NULL,
  `CV_TEN` varchar(100) NOT NULL,
  `CV_CALAMVIEC` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chuc_vu`
--

INSERT INTO `chuc_vu` (`CV_MA`, `CV_TEN`, `CV_CALAMVIEC`) VALUES
(1, 'admin', 'Fulltime'),
(2, 'Nhân viên bán hàng', 'Fulltime'),
(3, 'Nhân viên kế toán', 'Fulltime');

-- --------------------------------------------------------

--
-- Table structure for table `danh_gia`
--

CREATE TABLE `danh_gia` (
  `DG_MA` int(11) NOT NULL,
  `KH_MA` int(11) NOT NULL,
  `SP_MA` int(11) DEFAULT NULL,
  `DG_NOIDUNG` text NOT NULL,
  `DG_PHANHOI` text NOT NULL,
  `DG_SOSAO` int(11) NOT NULL,
  `DG_NGAYGIO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `don_van_chuyen`
--

CREATE TABLE `don_van_chuyen` (
  `DVC_MA` int(11) NOT NULL,
  `NVC_MA` int(11) NOT NULL,
  `DVC_DIACHI` varchar(250) NOT NULL,
  `DVC_TGBATDAU` date NOT NULL,
  `DVC_TGHOANTHANH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `don_van_chuyen`
--

INSERT INTO `don_van_chuyen` (`DVC_MA`, `NVC_MA`, `DVC_DIACHI`, `DVC_TGBATDAU`, `DVC_TGHOANTHANH`) VALUES
(1, 1, 'Tp.Cần Thơ', '2023-09-29', '2023-09-30'),
(2, 2, 'Xuân Khánh, Ninh Kiều, Cần Thơ', '2023-10-02', '2023-10-02'),
(3, 2, 'Tp - Cần Thơ', '2023-10-02', '2023-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `GH_MA` int(11) NOT NULL,
  `KH_MA` int(11) NOT NULL,
  `GH_TONGTIEN` float NOT NULL,
  `GH_TONGSP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`GH_MA`, `KH_MA`, `GH_TONGTIEN`, `GH_TONGSP`) VALUES
(1, 1, 26490000, 1),
(2, 1, 19990000, 1),
(3, 2, 19980000, 2),
(4, 2, 5990000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `HD_STT` int(11) NOT NULL,
  `TT_MA` int(11) NOT NULL,
  `DVC_MA` int(11) NOT NULL,
  `NV_MA` int(11) NOT NULL,
  `PTTT_MA` int(11) NOT NULL,
  `KM_MA` int(11) DEFAULT NULL,
  `GH_MA` int(11) NOT NULL,
  `HD_NGAYLAP` date NOT NULL,
  `HD_TONGTIEN` float NOT NULL,
  `HD_LIDOHUY` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`HD_STT`, `TT_MA`, `DVC_MA`, `NV_MA`, `PTTT_MA`, `KM_MA`, `GH_MA`, `HD_NGAYLAP`, `HD_TONGTIEN`, `HD_LIDOHUY`) VALUES
(1, 3, 1, 1, 2, NULL, 1, '2023-09-28', 26490000, ''),
(2, 3, 2, 1, 1, NULL, 2, '2023-10-02', 19990000, NULL),
(3, 3, 3, 1, 3, NULL, 3, '2023-10-02', 19980000, ''),
(4, 1, 2, 1, 1, NULL, 4, '2023-10-02', 5990000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `KH_MA` int(11) NOT NULL,
  `KH_TEN` varchar(100) NOT NULL,
  `KH_DIACHI` text NOT NULL,
  `KH_SDT` varchar(10) NOT NULL,
  `KH_EMAIL` varchar(150) NOT NULL,
  `KH_GIOITINH` char(1) NOT NULL,
  `KH_NGAYDK` date NOT NULL,
  `KH_TENDANGNHAP` varchar(50) NOT NULL,
  `KH_MATKHAU` varchar(50) NOT NULL,
  `KH_AVATAR` varchar(200) NOT NULL,
  `KH_NGAYSINH` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`KH_MA`, `KH_TEN`, `KH_DIACHI`, `KH_SDT`, `KH_EMAIL`, `KH_GIOITINH`, `KH_NGAYDK`, `KH_TENDANGNHAP`, `KH_MATKHAU`, `KH_AVATAR`, `KH_NGAYSINH`) VALUES
(1, 'Trần Văn Thành', 'An Khánh, Ninh Kiều, Cần Thơ', '0356465656', 'tvthanh@gmail.com', 'm', '2023-09-01', 'tvthanh', 'tvthanh', 'team-2.jpg', '2004-09-14'),
(2, 'Nguyễn Thị Khách', 'Xuân Khánh, Ninh Kiều, Cần Thơ', '0909564825', 'ttkhach@gmail.com', 'f', '2023-09-01', 'ttkhach', 'ttkhach', 'marie.jpg', '2007-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `khuyen_mai`
--

CREATE TABLE `khuyen_mai` (
  `KM_MA` int(11) NOT NULL,
  `KM_TGBD` date DEFAULT NULL,
  `KM_TGKT` date DEFAULT NULL,
  `KM_GIATRI` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `LSP_MA` int(11) NOT NULL,
  `LSP_TEN` varchar(150) NOT NULL,
  `LSP_GHICHU` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`LSP_MA`, `LSP_TEN`, `LSP_GHICHU`) VALUES
(1, 'Android', ''),
(2, 'iPhone (iOS)', ''),
(3, 'Điện thoại thông dụng', '');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `NV_MA` int(11) NOT NULL,
  `CV_MA` int(11) NOT NULL,
  `NV_TEN` varchar(100) NOT NULL,
  `NV_DIACHI` text NOT NULL,
  `NV_SDT` varchar(10) NOT NULL,
  `NV_EMAIL` varchar(150) NOT NULL,
  `NV_GIOITINH` char(1) NOT NULL,
  `NV_NGAYSINH` date NOT NULL,
  `NV_TENDANGNHAP` varchar(50) NOT NULL,
  `NV_MATKHAU` varchar(50) NOT NULL,
  `NV_AVATAR` varchar(200) NOT NULL,
  `NV_NGAYTUYEN` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nhan_vien`
--

INSERT INTO `nhan_vien` (`NV_MA`, `CV_MA`, `NV_TEN`, `NV_DIACHI`, `NV_SDT`, `NV_EMAIL`, `NV_GIOITINH`, `NV_NGAYSINH`, `NV_TENDANGNHAP`, `NV_MATKHAU`, `NV_AVATAR`, `NV_NGAYTUYEN`) VALUES
(1, 1, 'Nguyễn Thanh Liêm', 'Cần Thơ', '0398585897', 'admin@gmail.com', 'm', '2002-10-10', 'admin', 'admin', 'team-4-2.jpg', '2023-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `nha_phan_phoi`
--

CREATE TABLE `nha_phan_phoi` (
  `NPP_MASO` int(11) NOT NULL,
  `NPP_TEN` varchar(150) NOT NULL,
  `NPP_DIACHI` text NOT NULL,
  `NPP_SDT` varchar(10) NOT NULL,
  `NPP_EMAIL` varchar(150) NOT NULL,
  `NPP_WEBSITE` varchar(250) NOT NULL,
  `NPP_MOTA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nha_phan_phoi`
--

INSERT INTO `nha_phan_phoi` (`NPP_MASO`, `NPP_TEN`, `NPP_DIACHI`, `NPP_SDT`, `NPP_EMAIL`, `NPP_WEBSITE`, `NPP_MOTA`) VALUES
(1, 'Thế giới di động', 'Nguyễn Văn Linh, An Khánh, Ninh Kiều, TPCT', '0902326326', 'tgddcn1@gmail.com', 'thegioididong.com', 'Tập đoàn thế giới di động chi nhánh 1'),
(2, 'FPT', 'Nguyễn Văn Linh, Ninh Kiều, Cần Thơ', '0921515615', 'fpt@gmail.com', 'fptshop.com', 'Tập đoàn FPT shop');

-- --------------------------------------------------------

--
-- Table structure for table `nha_san_xuat`
--

CREATE TABLE `nha_san_xuat` (
  `NSX_MA` int(11) NOT NULL,
  `NSX_TEN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nha_san_xuat`
--

INSERT INTO `nha_san_xuat` (`NSX_MA`, `NSX_TEN`) VALUES
(1, 'iPhone'),
(2, 'SAMSUNG'),
(3, 'OPPO'),
(4, 'VIVO'),
(5, 'REALME'),
(6, 'NOKIA'),
(7, 'Xiaomi'),
(8, 'Mobell'),
(9, 'Itel'),
(10, 'Masstel');

-- --------------------------------------------------------

--
-- Table structure for table `nha_van_chuyen`
--

CREATE TABLE `nha_van_chuyen` (
  `NVC_MA` int(11) NOT NULL,
  `NVC_TEN` varchar(100) NOT NULL,
  `NVC_CHIPHI` int(11) NOT NULL,
  `NVC_MOTA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nha_van_chuyen`
--

INSERT INTO `nha_van_chuyen` (`NVC_MA`, `NVC_TEN`, `NVC_CHIPHI`, `NVC_MOTA`) VALUES
(1, 'Giao hàng tiết kiệm', 10000, 'Tốc độ nhanh, tiết kiệm chi phí, an toàn.'),
(2, 'Giao hàng nhanh', 15000, 'Giao hàng nhanh chóng, an toàn, hiệu quả, tiết kiệm thời gian cho khách hàng.'),
(3, 'J&T Express', 18000, 'Chuyển phát đơn hàng nhanh chóng.');

-- --------------------------------------------------------

--
-- Table structure for table `phan_hoi`
--

CREATE TABLE `phan_hoi` (
  `PH_MA` int(11) NOT NULL,
  `DG_MA` int(11) NOT NULL,
  `NV_MA` int(11) NOT NULL,
  `PH_NOIDUNG` text NOT NULL,
  `PH_NGAYGIO` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieu_bao_hanh`
--

CREATE TABLE `phieu_bao_hanh` (
  `PBH_SOPHIEU` int(11) NOT NULL,
  `SP_MA` int(11) NOT NULL,
  `PBH_NGAYBANHANG` date NOT NULL,
  `PBH_NGAYHETHAN` date NOT NULL,
  `PBH_NOIDUNGBH` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phieu_nhap`
--

CREATE TABLE `phieu_nhap` (
  `PN_STT` int(11) NOT NULL,
  `PN_NGAYNHAP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phieu_nhap`
--

INSERT INTO `phieu_nhap` (`PN_STT`, `PN_NGAYNHAP`) VALUES
(1, '2023-09-30'),
(2, '2023-09-29'),
(3, '2023-09-29'),
(4, '2023-10-01'),
(5, '2023-10-01'),
(6, '2023-10-02');

-- --------------------------------------------------------

--
-- Table structure for table `phuong_thuc_thanh_toan`
--

CREATE TABLE `phuong_thuc_thanh_toan` (
  `PTTT_MA` int(11) NOT NULL,
  `PTTT_TEN` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phuong_thuc_thanh_toan`
--

INSERT INTO `phuong_thuc_thanh_toan` (`PTTT_MA`, `PTTT_TEN`) VALUES
(1, 'Tiền mặt.'),
(2, 'Chuyển khoản qua ngân hàng.'),
(3, 'Thẻ Visa/Mastercard/Amex/JCB');

-- --------------------------------------------------------

--
-- Table structure for table `san_pham`
--

CREATE TABLE `san_pham` (
  `SP_MA` int(11) NOT NULL,
  `NSX_MA` int(11) NOT NULL,
  `LSP_MA` int(11) NOT NULL,
  `SP_IMEI` int(11) NOT NULL,
  `SP_TEN` varchar(200) NOT NULL,
  `SP_MAUSAC` varchar(50) NOT NULL,
  `SP_TINHNANG` varchar(250) NOT NULL,
  `SP_TGBH` varchar(100) NOT NULL,
  `SP_HINHANH` char(200) NOT NULL,
  `SP_SOLUONGTON` int(11) NOT NULL,
  `SP_MANHINH` varchar(150) NOT NULL,
  `SP_HDH` varchar(150) NOT NULL,
  `SP_CAMTRUOC` varchar(100) NOT NULL,
  `SP_CAMSAU` varchar(100) NOT NULL,
  `SP_CPU` varchar(100) NOT NULL,
  `SP_RAM` varchar(50) NOT NULL,
  `SP_ROOM` varchar(50) NOT NULL,
  `SP_SIM` varchar(80) NOT NULL,
  `SP_PIN` varchar(80) NOT NULL,
  `SP_GIA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `san_pham`
--

INSERT INTO `san_pham` (`SP_MA`, `NSX_MA`, `LSP_MA`, `SP_IMEI`, `SP_TEN`, `SP_MAUSAC`, `SP_TINHNANG`, `SP_TGBH`, `SP_HINHANH`, `SP_SOLUONGTON`, `SP_MANHINH`, `SP_HDH`, `SP_CAMTRUOC`, `SP_CAMSAU`, `SP_CPU`, `SP_RAM`, `SP_ROOM`, `SP_SIM`, `SP_PIN`, `SP_GIA`) VALUES
(1, 1, 2, 1021202020, 'IPHONE 14 PROMAX', 'Tím', 'Phát hiện va chạm (Crash Detection)\r\nMàn hình luôn hiển thị AOD\r\nChạm 2 lần sáng màn hình\r\nApple Pay\r\nLoa kép', '1 năm', 'iphone-14-pro-max-tim-thumb-600x600.jpg', 50, 'OLED, 6.7\", Super Retina XDR', ' iOS 16', ' 12 MP', ' Chính 48 MP & Phụ 12 MP, 12 MP', 'Apple A16 Bionic', '6 GB', '128 GB', '1 Nano SIM & 1 eSIM, Hỗ trợ 5G', '4323 mAh, 20 W', 26490000),
(2, 3, 1, 1215404211, 'Điện thoại OPPO Reno10 5G 128GB ', 'Xanh', 'Mở khoá vân tay dưới màn hình\r\nMở khoá khuôn mặt\r\nChế độ đơn giản (Giao diện đơn giản)\r\nCử chỉ thông minh\r\nMở rộng bộ nhớ RAM\r\nMàn hình luôn hiển thị AOD\r\nỨng dụng kép (Nhân bản ứng dụng)', '1 năm', 'oppo-reno10-blue-thumbnew-600x600.jpg', 20, 'AMOLED, 6.7\", Full HD+', 'Android 13', '32 MP', ' Chính 64 MP & Phụ 32 MP, 8 MP', ' MediaTek Dimensity 7050 5G 8 nhân', '8 GB', '128 GB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 5G', ' 5000 mAh, 67 W', 9690000),
(3, 7, 1, 1022006535, 'Điện thoại Xiaomi Redmi 12 4GB', 'Bạc', 'Mở khoá vân tay cạnh viền\r\nMở khoá khuôn mặtCử chỉ thông minh\r\nMở rộng bộ nhớ RAM\r\nChặn cuộc gọi\r\nChặn tin nhắn\r\nChạm 2 lần tắt/sáng màn hình\r\nThu nhỏ màn hình sử dụng một tay\r\nĐa cửa sổ (chia đôi màn hình)\r\nKhông gian thứ hai\r\nTrợ lý ảo Google Assis', '1 năm', 'xiaomi-redmi-12-bac-thumb-600x600.jpg', 38, 'IPS LCD, 6.79\", Full HD+', 'Android 13', '8 MP', 'Chính 50 MP & Phụ 8 MP, 2 MP', 'MediaTek Helio G88', '4 GB', '128 GB', '2 Nano SIM (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G', '5000 mAh, 18 W', 3790000),
(4, 3, 1, 1252351223, 'Điện thoại OPPO Find N2 Flip 5G', 'Tím', 'Mở khoá vân tay cạnh viền\r\nMở khoá khuôn mặt\r\nCử chỉ thông minh\r\nMở rộng bộ nhớ RAM\r\nỨng dụng kép (Nhân bản ứng dụng)\r\nThu nhỏ màn hình sử dụng một tay\r\nĐa cửa sổ (chia đôi màn hình)\r\nChế độ trẻ em (Không gian trẻ em)', '1 năm', 'oppo-find-n2-flip-purple-thumb-1-600x600-1-600x600.jpg', 20, 'AMOLED, Chính 6.8\" & Phụ 3.26\", Full HD+', 'Android 13', '32 MP', 'Chính 50 MP & Phụ 8 MP', 'MediaTek Dimensity 9000+ 8 nhân', '8 GB', '256 GB', '2 Nano SIM, Hỗ trợ 5G', '4300 mAh, 44 W', 19990000),
(5, 4, 1, 1030503030, 'Điện thoại vivo Y36 128GB', 'Xanh dương', 'Mở khoá vân tay cạnh viền\r\nMở khoá khuôn mặt\r\nCử chỉ thông minh\r\nMở rộng bộ nhớ RAM\r\nChế độ đơn giản (Giao diện đơn giản)\r\n\r\nCử chỉ thông minh\r\n\r\nMở rộng bộ nhớ RAM\r\n\r\nÂm thanh Hi-Res Audio\r\n\r\nChặn cuộc gọi\r\n\r\nChặn tin nhắn\r\n\r\nChạm 2 lần tắt/sáng màn', '1 năm', 'vivo-y36-xanh-thumbnew-600x600.jpg', 32, '\r\nIPS LCD, 6.64\", Full HD+', 'Android 13', '16 MP', 'Chính 50 MP & Phụ 2 MP', '\r\nSnapdragon 680', '8 GB', '128 GB', '2 Nano SIM, Hỗ trợ 4G', '5000 mAh, 44 W', 5990000),
(6, 2, 1, 1205462504, 'Điện thoại Samsung Galaxy S21 FE 5G (6GB/128GB)', 'Xanh lá nhạt', 'Mở khoá vân tay dưới màn hình\r\nMở khoá khuôn mặt\r\nMàn hình luôn hiển thị AOD\r\nChạm 2 lần sáng màn hình\r\nÂm thanh Dolby Audio\r\nChặn cuộc gọi\r\nChặn tin nhắn\r\nTrợ lý ảo Samsung Bixby\r\nThu nhỏ màn hình sử dụng một tay\r\nSamsung Pay\r\nÂm thanh AKG\r\nSamsung ', '1 năm', 'Samsung-Galaxy-S21-FE-vang-1-2-600x600.jpg', 28, 'Dynamic AMOLED 2X, 6.4\", Full HD+', 'Android 12', '32 MP', 'Chính 12 MP & Phụ 12 MP, 8 MP', 'Exynos 2100', '6 GB', '128 GB', '2 Nano Sim, Hỗ trợ 5G', '4500 mAh, 25W', 9990000);

-- --------------------------------------------------------

--
-- Table structure for table `trang_thai`
--

CREATE TABLE `trang_thai` (
  `TT_MA` int(11) NOT NULL,
  `TT_TEN` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trang_thai`
--

INSERT INTO `trang_thai` (`TT_MA`, `TT_TEN`) VALUES
(0, 'Đã hủy'),
(1, 'Chờ xác nhận.'),
(2, 'Đang giao hàng.'),
(3, 'Hoàn thành.'),
(4, 'Trả hàng.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiet_gh`
--
ALTER TABLE `chitiet_gh`
  ADD PRIMARY KEY (`SP_MA`,`GH_MA`),
  ADD KEY `FK_CTGH_GH` (`GH_MA`);

--
-- Indexes for table `chitiet_pn`
--
ALTER TABLE `chitiet_pn`
  ADD PRIMARY KEY (`SP_MA`,`PN_STT`,`NV_MA`,`NPP_MASO`),
  ADD KEY `FK_CTPN_NPP` (`NPP_MASO`),
  ADD KEY `FK_CTPN_PN` (`PN_STT`),
  ADD KEY `FK_DO_NV_LAP` (`NV_MA`);

--
-- Indexes for table `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD PRIMARY KEY (`SP_MA`,`HD_STT`),
  ADD KEY `FK_MUASP` (`HD_STT`);

--
-- Indexes for table `chuc_vu`
--
ALTER TABLE `chuc_vu`
  ADD PRIMARY KEY (`CV_MA`);

--
-- Indexes for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD PRIMARY KEY (`DG_MA`),
  ADD KEY `FK_CODANHGIA` (`KH_MA`),
  ADD KEY `FK_DG_SP` (`SP_MA`);

--
-- Indexes for table `don_van_chuyen`
--
ALTER TABLE `don_van_chuyen`
  ADD PRIMARY KEY (`DVC_MA`),
  ADD KEY `FK_DO` (`NVC_MA`);

--
-- Indexes for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`GH_MA`),
  ADD KEY `FK_COGH` (`KH_MA`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`HD_STT`),
  ADD KEY `FK_COKM` (`KM_MA`),
  ADD KEY `FK_DUOCLAPBOI` (`NV_MA`),
  ADD KEY `FK_DVC_HD` (`DVC_MA`),
  ADD KEY `FK_RELATIONSHIP_25` (`GH_MA`),
  ADD KEY `FK_THANHTOANBANG` (`PTTT_MA`),
  ADD KEY `FK_TT_HD` (`TT_MA`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`KH_MA`);

--
-- Indexes for table `khuyen_mai`
--
ALTER TABLE `khuyen_mai`
  ADD PRIMARY KEY (`KM_MA`);

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`LSP_MA`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`NV_MA`),
  ADD KEY `FK_COCHUCVU` (`CV_MA`);

--
-- Indexes for table `nha_phan_phoi`
--
ALTER TABLE `nha_phan_phoi`
  ADD PRIMARY KEY (`NPP_MASO`);

--
-- Indexes for table `nha_san_xuat`
--
ALTER TABLE `nha_san_xuat`
  ADD PRIMARY KEY (`NSX_MA`);

--
-- Indexes for table `nha_van_chuyen`
--
ALTER TABLE `nha_van_chuyen`
  ADD PRIMARY KEY (`NVC_MA`);

--
-- Indexes for table `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD PRIMARY KEY (`PH_MA`),
  ADD KEY `FK_CUA_DG` (`DG_MA`),
  ADD KEY `FK_DO_NV` (`NV_MA`);

--
-- Indexes for table `phieu_bao_hanh`
--
ALTER TABLE `phieu_bao_hanh`
  ADD PRIMARY KEY (`PBH_SOPHIEU`),
  ADD KEY `FK_CO_BH` (`SP_MA`);

--
-- Indexes for table `phieu_nhap`
--
ALTER TABLE `phieu_nhap`
  ADD PRIMARY KEY (`PN_STT`);

--
-- Indexes for table `phuong_thuc_thanh_toan`
--
ALTER TABLE `phuong_thuc_thanh_toan`
  ADD PRIMARY KEY (`PTTT_MA`);

--
-- Indexes for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`SP_MA`),
  ADD KEY `FK_DUOCSX` (`NSX_MA`),
  ADD KEY `FK_THUOCLOAI` (`LSP_MA`);

--
-- Indexes for table `trang_thai`
--
ALTER TABLE `trang_thai`
  ADD PRIMARY KEY (`TT_MA`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiet_gh`
--
ALTER TABLE `chitiet_gh`
  ADD CONSTRAINT `FK_CTGH_GH` FOREIGN KEY (`GH_MA`) REFERENCES `gio_hang` (`GH_MA`),
  ADD CONSTRAINT `FK_CTGH_SP` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`);

--
-- Constraints for table `chitiet_pn`
--
ALTER TABLE `chitiet_pn`
  ADD CONSTRAINT `FK_CTPN_NPP` FOREIGN KEY (`NPP_MASO`) REFERENCES `nha_phan_phoi` (`NPP_MASO`),
  ADD CONSTRAINT `FK_CTPN_PN` FOREIGN KEY (`PN_STT`) REFERENCES `phieu_nhap` (`PN_STT`),
  ADD CONSTRAINT `FK_CTPN_SP` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`),
  ADD CONSTRAINT `FK_DO_NV_LAP` FOREIGN KEY (`NV_MA`) REFERENCES `nhan_vien` (`NV_MA`);

--
-- Constraints for table `chi_tiet_hd`
--
ALTER TABLE `chi_tiet_hd`
  ADD CONSTRAINT `FK_MUABOIHD` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`),
  ADD CONSTRAINT `FK_MUASP` FOREIGN KEY (`HD_STT`) REFERENCES `hoa_don` (`HD_STT`);

--
-- Constraints for table `danh_gia`
--
ALTER TABLE `danh_gia`
  ADD CONSTRAINT `FK_CODANHGIA` FOREIGN KEY (`KH_MA`) REFERENCES `khach_hang` (`KH_MA`),
  ADD CONSTRAINT `FK_DG_SP` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`);

--
-- Constraints for table `don_van_chuyen`
--
ALTER TABLE `don_van_chuyen`
  ADD CONSTRAINT `FK_DO` FOREIGN KEY (`NVC_MA`) REFERENCES `nha_van_chuyen` (`NVC_MA`);

--
-- Constraints for table `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `FK_COGH` FOREIGN KEY (`KH_MA`) REFERENCES `khach_hang` (`KH_MA`);

--
-- Constraints for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD CONSTRAINT `FK_COKM` FOREIGN KEY (`KM_MA`) REFERENCES `khuyen_mai` (`KM_MA`),
  ADD CONSTRAINT `FK_DUOCLAPBOI` FOREIGN KEY (`NV_MA`) REFERENCES `nhan_vien` (`NV_MA`),
  ADD CONSTRAINT `FK_DVC_HD` FOREIGN KEY (`DVC_MA`) REFERENCES `don_van_chuyen` (`DVC_MA`),
  ADD CONSTRAINT `FK_RELATIONSHIP_25` FOREIGN KEY (`GH_MA`) REFERENCES `gio_hang` (`GH_MA`),
  ADD CONSTRAINT `FK_THANHTOANBANG` FOREIGN KEY (`PTTT_MA`) REFERENCES `phuong_thuc_thanh_toan` (`PTTT_MA`),
  ADD CONSTRAINT `FK_TT_HD` FOREIGN KEY (`TT_MA`) REFERENCES `trang_thai` (`TT_MA`);

--
-- Constraints for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD CONSTRAINT `FK_COCHUCVU` FOREIGN KEY (`CV_MA`) REFERENCES `chuc_vu` (`CV_MA`);

--
-- Constraints for table `phan_hoi`
--
ALTER TABLE `phan_hoi`
  ADD CONSTRAINT `FK_CUA_DG` FOREIGN KEY (`DG_MA`) REFERENCES `danh_gia` (`DG_MA`),
  ADD CONSTRAINT `FK_DO_NV` FOREIGN KEY (`NV_MA`) REFERENCES `nhan_vien` (`NV_MA`);

--
-- Constraints for table `phieu_bao_hanh`
--
ALTER TABLE `phieu_bao_hanh`
  ADD CONSTRAINT `FK_CO_BH` FOREIGN KEY (`SP_MA`) REFERENCES `san_pham` (`SP_MA`);

--
-- Constraints for table `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `FK_DUOCSX` FOREIGN KEY (`NSX_MA`) REFERENCES `nha_san_xuat` (`NSX_MA`),
  ADD CONSTRAINT `FK_THUOCLOAI` FOREIGN KEY (`LSP_MA`) REFERENCES `loai_sp` (`LSP_MA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
