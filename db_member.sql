-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2024 at 02:15 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_member`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `bid` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`bid`, `b_name`) VALUES
(1, 'Nike'),
(2, 'WARRIX'),
(3, 'SHEIN'),
(4, 'Sosksy'),
(5, 'LIIEESHINY'),
(6, 'FILA');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสมาชิก',
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `telephone` int(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `username` varchar(10) NOT NULL COMMENT 'Username',
  `password` varchar(128) NOT NULL COMMENT 'Password',
  `status` varchar(1) NOT NULL COMMENT '0=user, 1=admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `lastname`, `telephone`, `username`, `password`, `status`) VALUES
(000015, 'ชินวัตร', 'คุณช่วย', 924003254, 'pond', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', '1'),
(000016, 'ลี่', 'สุดหล่อ', 924003254, 'cat', 'a8cebf1698dc14282c507b1e1cfb7f2c9d5216aa7bd0854b50561e02c2b99d9a38945ec0f81e55f9699062b1eac6d0083411c839ba2b27c6a15b494463bc5c73', '0'),
(000018, 'ผมชื่อ', 'ลี่', 924211631, 'admin', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', '0');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL COMMENT 'ลำดับที่',
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซื้อ',
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `orderPrice` float NOT NULL COMMENT 'ราคาสินค้า',
  `orderQty` int(11) NOT NULL COMMENT 'จำนวนที่สั่งซื้อ',
  `Total` float NOT NULL COMMENT 'ราคารวม',
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `orderID`, `pro_id`, `orderPrice`, `orderQty`, `Total`, `bid`) VALUES
(1, 0000000001, 000004, 450, 17, 7650, 0),
(2, 0000000001, 000003, 750, 8, 6000, 0),
(3, 0000000001, 000012, 200, 21, 4200, 0),
(4, 0000000001, 000006, 800, 8, 6400, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `pro_name` varchar(100) NOT NULL COMMENT 'ชื่อสินค้า',
  `type_id` int(3) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `price` float NOT NULL COMMENT 'ราคา',
  `amount` int(11) NOT NULL COMMENT 'จำนวนเหลือ',
  `image` varchar(100) NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `type_id`, `price`, `amount`, `image`) VALUES
(000001, 'freeren', 002, 100, 1, 'pro_65e5b9d827f95.png'),
(000002, 'freeren', 001, 10000, 50, 'pro_65e5d5abc30b6.png'),
(000003, 'ฟรีเรน', 001, 100, 200, 'pro_65e5d5c7d9b8c.png'),
(000004, 'freeren', 001, 20000, 20, 'pro_65e5d62f1a906.png'),
(000005, 'ลี่ชอบเก', 002, 1000, 100, 'pro_65e5ec19c7713.png'),
(000006, 'cd', 002, 100, 10, 'pro_65e5ecf5c69f6.png'),
(000009, 'ลี่ชอบเก', 001, 420, 10, 'pro_65e6ebeff3d8b.png');

-- --------------------------------------------------------

--
-- Table structure for table `product_cat`
--

CREATE TABLE `product_cat` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `pro_name` varchar(30) NOT NULL COMMENT 'ชื่อสินค้า',
  `brand` varchar(30) NOT NULL COMMENT 'ชื่อแบรน',
  `type_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสประเภทสินค้า',
  `size` varchar(4) NOT NULL COMMENT 'ขนาดถุงเท้า',
  `color` varchar(10) NOT NULL COMMENT 'สีถุงเท้า',
  `material_type` varchar(20) NOT NULL COMMENT 'ประเภทวัสดุ',
  `sock_type` varchar(20) NOT NULL COMMENT 'ประเภทของถุงเท้า',
  `price` float NOT NULL COMMENT 'ราคาสินค้า',
  `amount` int(11) NOT NULL COMMENT 'จำนวนสินค้าคงเหลือ',
  `detail` text NOT NULL COMMENT 'รายละเอียดสินค้า',
  `image` varchar(50) NOT NULL COMMENT 'รูปสินค้า',
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_cat`
--

INSERT INTO `product_cat` (`pro_id`, `pro_name`, `brand`, `type_id`, `size`, `color`, `material_type`, `sock_type`, `price`, `amount`, `detail`, `image`, `bid`) VALUES
(000001, 'FILA SCV230304U', 'FILA', 000006, 'Free', 'gray', 'Polyester', 'short', 250, 200, 'ใส่แล้ววิ่งน้ำได้', 'pro_66028f44ac0db.jpg', 0),
(000002, 'KN-008', 'Sosksy', 000004, 'Free', 'white', 'cotton', 'short', 1500, 15, 'จำนวนจำกัดหายากมากๆ สุนัขชิบะ จากโตเกียว', 'pro_66028fb68514c.jpg', 0),
(000003, 'Nike ACG', 'Nike', 000001, 'Free', 'orange', 'cotton', 'long', 750, 142, 'นุ่มสบายไหลลื่น', 'pro_6602908dd4645.png', 0),
(000004, 'Nike Everyday Lightweight', 'Nike', 000001, 'Free', 'black', 'cotton', 'long', 450, 683, 'good things', 'pro_660290c313095.jpg', 0),
(000006, 'NIKE Jordan Everyday Ankle', 'Nike', 000001, 'Free', 'black', 'cotton', 'long', 800, 92, 'gooodddd', 'pro_660291520994a.png', 0),
(000007, 'Nike Outdoor', 'Nike', 000001, 'Free', 'black', 'cotton', 'long', 900, 100, 't ded', 'pro_6602919172cbb.png', 0),
(000008, 'SCOOBY-DOO X SHEIN', 'SHEIN', 000003, 'Free', 'black', 'cotton', 'long', 2500, 75, 'scoobyyy', 'pro_660291b9a98d6.png', 0),
(000009, 'SHEIN X MOLANG', 'SHEIN', 000003, 'Free', 'black', 'cotton', 'long', 1200, 200, 'mollang', 'pro_660291df26a0f.png', 0),
(000010, 'TOM & JERRY X SHEIN', 'SHEIN', 000003, 'Free', 'black', 'cotton', 'short', 1400, 60, 'tommm', 'pro_66029207e5e28.png', 0),
(000011, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 000002, 'Free', 'black', 'cotton', 'long', 600, 150, 'warrix', 'pro_6602922529322.jpg', 0),
(000012, 'ถุงเท้าเป็ด', 'LIIEESHINY', 000005, 'Free', 'black', 'cotton', 'short', 200, 2979, 'ped', 'pro_66029256bc443.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `socks`
--

CREATE TABLE `socks` (
  `id` int(3) NOT NULL,
  `product_name` varchar(100) NOT NULL COMMENT 'ชื่อสินค้า',
  `brand` varchar(100) NOT NULL COMMENT 'ชื่อแบรน',
  `size` char(20) NOT NULL COMMENT 'ขนาดถุงเท้า',
  `color` varchar(100) NOT NULL COMMENT 'สีถุงเท้า',
  `material_type` varchar(100) NOT NULL COMMENT 'ประเภทวัสดุ',
  `amount` int(20) NOT NULL COMMENT 'จำนวนที่มีอยู่',
  `product_code` char(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสสินค้า',
  `price` int(11) NOT NULL COMMENT 'ราคา',
  `sock_type` varchar(100) NOT NULL COMMENT 'ประเภทของถุงเท้า',
  `image` varchar(100) CHARACTER SET armscii8 COLLATE armscii8_general_ci NOT NULL COMMENT 'รูปภาพ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `socks`
--

INSERT INTO `socks` (`id`, `product_name`, `brand`, `size`, `color`, `material_type`, `amount`, `product_code`, `price`, `sock_type`, `image`) VALUES
(1, 'Nike Everyday Lightweight', 'Nike', 'S', 'black', 'cotton', 129, '0001', 100, 'long', 'pro_65e5d5c7d9b8c.png'),
(2, 'Nike Everyday Lightweight', 'Nike', 'M', 'black', 'cotton', 120, '0002', 100, 'long', 'pro_65e6ebeff3d8b.png'),
(3, 'Nike Everyday Lightweight', 'Nike', 'L', 'black', 'cotton', 113, '0003', 100, 'long', 'pro_65e7d2ad21864.png'),
(4, 'Nike Everyday Lightweight', 'Nike', 'XL', 'black', 'cotton', 121, '0004', 100, 'long', 'pro_65e7372d7ffca.png'),
(5, 'Nike Everyday Lightweight', 'Nike', 'S', 'black', 'cotton', 120, '0005', 100, 'short', 'pro_65e7d2ad21864.png'),
(6, 'Nike Everyday Lightweight', 'Nike', 'M', 'black', 'cotton', 120, '0006', 100, 'short', 'pro_65e7d2ad21864.png'),
(7, 'Nike Everyday Lightweight', 'Nike', 'L', 'black', 'cotton', 120, '0007', 100, 'short', 'pro_65e7372d7ffca.png'),
(8, 'Nike Everyday Lightweight', 'Nike', 'XL', 'black', 'cotton', 120, '0008', 100, 'short', 'pro_65e7d2ad21864.png'),
(9, 'Nike Everyday Lightweight', 'Nike', 'S', 'white', 'cotton', 129, '0009', 100, 'long', 'pro_65e7d2ad21864.png'),
(10, 'Nike Everyday Lightweight', 'Nike', 'M', 'white', 'cotton', 120, '0010', 100, 'long', 'pro_65e7372d7ffca.png'),
(11, 'Nike Everyday Lightweight', 'Nike', 'L', 'white', 'cotton', 113, '0011', 100, 'long', 'pro_65e7372d7ffca.png'),
(12, 'Nike Everyday Lightweight', 'Nike', 'XL', 'white', 'cotton', 121, '0012', 100, 'long', 'pro_65e7d2ad21864.png'),
(13, 'Nike Everyday Lightweight', 'Nike', 'S', 'white', 'cotton', 120, '0013', 100, 'short', 'pro_65e7d2ad21864.png'),
(14, 'Nike Everyday Lightweight', 'Nike', 'M', 'white', 'cotton', 120, '0014', 100, 'short', 'pro_65e7d2ad21864.png'),
(15, 'Nike Everyday Lightweight', 'Nike', 'L', 'white', 'cotton', 120, '0015', 100, 'short', 'pro_65e7d2ad21864.png'),
(16, 'Nike Everyday Lightweight', 'Nike', 'XL', 'white', 'cotton', 120, '0016', 100, 'short', 'pro_65e7d2ad21864.png'),
(17, 'Nike ACG', 'Nike', 'S', 'black', 'cotton', 129, '0017', 100, 'long', 'pro_65e7d2ad21864.png'),
(18, 'Nike ACG', 'Nike', 'M', 'black', 'cotton', 120, '0018', 100, 'long', 'pro_65e7d2ad21864.png'),
(19, 'Nike ACG', 'Nike', 'L', 'black', 'cotton', 113, '0019', 100, 'long', ''),
(20, 'Nike ACG', 'Nike', 'XL', 'black', 'cotton', 121, '0020', 100, 'long', ''),
(21, 'Nike ACG', 'Nike', 'S', 'black', 'cotton', 120, '0021', 100, 'short', ''),
(22, 'Nike ACG', 'Nike', 'M', 'black', 'cotton', 120, '0022', 100, 'short', ''),
(23, 'Nike ACG', 'Nike', 'L', 'black', 'cotton', 120, '0023', 100, 'short', ''),
(24, 'Nike ACG', 'Nike', 'XL', 'black', 'cotton', 120, '0024', 100, 'short', ''),
(25, 'Nike ACG', 'Nike', 'S', 'white', 'cotton', 129, '0025', 100, 'long', ''),
(26, 'Nike ACG', 'Nike', 'M', 'white', 'cotton', 120, '0026', 100, 'long', ''),
(27, 'Nike ACG', 'Nike', 'L', 'white', 'cotton', 113, '0027', 100, 'long', ''),
(28, 'Nike ACG', 'Nike', 'XL', 'white', 'cotton', 121, '0028', 100, 'long', ''),
(29, 'Nike ACG', 'Nike', 'S', 'white', 'cotton', 120, '0029', 100, 'short', ''),
(30, 'Nike ACG', 'Nike', 'M', 'white', 'cotton', 120, '0030', 100, 'short', ''),
(31, 'Nike ACG', 'Nike', 'L', 'white', 'cotton', 120, '0031', 100, 'short', ''),
(32, 'Nike ACG', 'Nike', 'XL', 'white', 'cotton', 120, '0032', 100, 'short', ''),
(33, 'NIKE Jordan Everyday Ankle', 'Nike', 'S', 'black', 'cotton', 129, '0033', 100, 'long', ''),
(34, 'NIKE Jordan Everyday Ankle', 'Nike', 'M', 'black', 'cotton', 120, '0034', 100, 'long', ''),
(35, 'NIKE Jordan Everyday Ankle', 'Nike', 'L', 'black', 'cotton', 113, '0035', 100, 'long', ''),
(36, 'NIKE Jordan Everyday Ankle', 'Nike', 'XL', 'black', 'cotton', 121, '0036', 100, 'long', ''),
(37, 'NIKE Jordan Everyday Ankle', 'Nike', 'S', 'black', 'cotton', 120, '0037', 100, 'short', ''),
(38, 'NIKE Jordan Everyday Ankle', 'Nike', 'M', 'black', 'cotton', 120, '0038', 100, 'short', ''),
(39, 'NIKE Jordan Everyday Ankle', 'Nike', 'L', 'black', 'cotton', 120, '0039', 100, 'short', ''),
(40, 'NIKE Jordan Everyday Ankle', 'Nike', 'XL', 'black', 'cotton', 120, '0040', 100, 'short', ''),
(41, 'NIKE Jordan Everyday Ankle', 'Nike', 'S', 'white', 'cotton', 129, '0041', 100, 'long', ''),
(42, 'NIKE Jordan Everyday Ankle', 'Nike', 'M', 'white', 'cotton', 120, '0042', 100, 'long', ''),
(43, 'NIKE Jordan Everyday Ankle', 'Nike', 'L', 'white', 'cotton', 113, '0043', 100, 'long', ''),
(44, 'NIKE Jordan Everyday Ankle', 'Nike', 'XL', 'white', 'cotton', 121, '0044', 100, 'long', ''),
(45, 'NIKE Jordan Everyday Ankle', 'Nike', 'S', 'white', 'cotton', 120, '0045', 100, 'short', ''),
(46, 'NIKE Jordan Everyday Ankle', 'Nike', 'M', 'white', 'cotton', 120, '0046', 100, 'short', ''),
(47, 'NIKE Jordan Everyday Ankle', 'Nike', 'L', 'white', 'cotton', 120, '0047', 100, 'short', ''),
(48, 'NIKE Jordan Everyday Ankle', 'Nike', 'XL', 'white', 'cotton', 120, '0048', 100, 'short', ''),
(49, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'S', 'black', 'cotton', 129, '0049', 100, 'long', ''),
(50, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'M', 'black', 'cotton', 120, '0050', 100, 'long', ''),
(51, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'L', 'black', 'cotton', 113, '0051', 100, 'long', ''),
(52, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'XL', 'black', 'cotton', 121, '0052', 100, 'long', ''),
(53, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'S', 'black', 'cotton', 120, '0053', 100, 'short', ''),
(54, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'M', 'black', 'cotton', 120, '0054', 100, 'short', ''),
(55, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'L', 'black', 'cotton', 120, '0055', 100, 'short', ''),
(56, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'XL', 'black', 'cotton', 120, '0056', 100, 'short', ''),
(57, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'S', 'white', 'cotton', 129, '0057', 100, 'long', ''),
(58, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'M', 'white', 'cotton', 120, '0058', 100, 'long', ''),
(59, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'L', 'white', 'cotton', 113, '0059', 100, 'long', ''),
(60, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'XL', 'white', 'cotton', 121, '0060', 100, 'long', ''),
(61, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'S', 'white', 'cotton', 120, '0061', 100, 'short', ''),
(62, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'M', 'white', 'cotton', 120, '0062', 100, 'short', ''),
(63, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'L', 'white', 'cotton', 120, '0063', 100, 'short', ''),
(64, 'WARRIX PLUSE CREW SOCKS', 'WARRIX', 'XL', 'white', 'cotton', 120, '0064', 100, 'short', ''),
(65, 'Nike Outdoor', 'Nike', 'S', 'black', 'cotton', 129, '0065', 100, 'long', ''),
(66, 'Nike Outdoor', 'Nike', 'M', 'black', 'cotton', 120, '0066', 100, 'long', ''),
(67, 'Nike Outdoor', 'Nike', 'L', 'black', 'cotton', 113, '0067', 100, 'long', ''),
(68, 'Nike Outdoor', 'Nike', 'XL', 'black', 'cotton', 121, '0068', 100, 'long', ''),
(69, 'Nike Outdoor', 'Nike', 'S', 'gray', 'cotton', 129, '0069', 100, 'long', ''),
(70, 'Nike Outdoor', 'Nike', 'M', 'gray', 'cotton', 120, '0070', 100, 'long', ''),
(71, 'Nike Outdoor', 'Nike', 'L', 'gray', 'cotton', 113, '0071', 100, 'long', ''),
(72, 'Nike Outdoor', 'Nike', 'XL', 'gray', 'cotton', 121, '0072', 100, 'long', ''),
(73, 'KN-008', 'Sosksy', 'Free size', 'orange', 'Polyester ', 120, '0073', 100, 'short', ''),
(74, 'KN-008', 'Sosksy', 'Free size', 'pink', 'Polyester ', 120, '0074', 100, 'short', ''),
(75, 'FILA SCV230304U', 'FILA', 'Free size', 'orange', 'Polyester ', 120, '0075', 100, 'long', ''),
(76, 'ถุงเท้าเป็ด', 'LIIEESHINY', 'Free size', 'yellow', 'Polyester ', 120, '0076', 100, 'long', ''),
(77, 'ถุงเท้าเป็ด', 'LIIEESHINY', 'Free size', 'orange', 'Polyester ', 120, '0077', 100, 'long', ''),
(78, 'ถุงเท้าเป็ด', 'LIIEESHINY', 'Free size', 'black', 'Polyester ', 120, '0078', 100, 'long', ''),
(79, 'SCOOBY-DOO X SHEIN', 'SHEIN', 'Free size', 'yellow', 'cotton', 120, '0079', 100, 'short', ''),
(80, 'SCOOBY-DOO X SHEIN', 'SHEIN', 'Free size', 'blue', 'cotton', 120, '0080', 100, 'short', ''),
(81, 'TOM & JERRY X SHEIN', 'SHEIN', 'Free size', 'pink', 'cotton', 120, '0081', 100, 'short', ''),
(82, 'TOM & JERRY X SHEIN', 'SHEIN', 'Free size', 'blue', 'cotton', 120, '0082', 100, 'short', ''),
(83, 'SHEIN X MOLANG', 'SHEIN', 'Free size', 'pink', 'cotton', 120, '0083', 100, 'short', ''),
(84, 'SHEIN X MOLANG', 'SHEIN', 'Free size', 'purple', 'cotton', 120, '0084', 100, 'short', ''),
(104, 'Nike ACG', 'Nike', 'M', 'black', 'cotton', 100, '', 100, '', 'pro_65ec4e27c6ac0.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_order`
--

CREATE TABLE `tb_order` (
  `orderID` int(10) UNSIGNED ZEROFILL NOT NULL COMMENT 'เลขที่ใบสั่งซิ้อ',
  `cus_name` varchar(60) NOT NULL COMMENT 'ชื่อ-นามสกุล',
  `address` text NOT NULL COMMENT 'ที่อยู่การจัดส่งสินค้า',
  `telephone` varchar(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `total_price` float NOT NULL COMMENT 'ราคารวมสุทธิ',
  `order_status` varchar(1) NOT NULL COMMENT '0=ยกเลิก ,1=ยังไม่ชำระเงิน ,2=ชำระเงิน',
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันที่สั่งซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_order`
--

INSERT INTO `tb_order` (`orderID`, `cus_name`, `address`, `telephone`, `total_price`, `order_status`, `reg_date`) VALUES
(0000000001, 'chinnawat', '', '0924211658', 24250, '1', '2024-03-26 09:39:09');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `type_name` varchar(50) NOT NULL COMMENT 'ชื่อแบรนด์',
  `type_cat` varchar(100) NOT NULL COMMENT 'ชื่อสินค้า',
  `size` varchar(10) NOT NULL COMMENT 'ขนาดถุงเท้า',
  `color` varchar(20) NOT NULL COMMENT 'สีถุงเท้า',
  `material_type` varchar(20) NOT NULL COMMENT 'ประเภทวัสดุ',
  `sock_type` varchar(20) NOT NULL COMMENT 'ประเภทของถุงเท้า',
  `bid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`, `type_cat`, `size`, `color`, `material_type`, `sock_type`, `bid`) VALUES
(000001, 'Nike', 'Nike Everyday Lightweight', 'S', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'M', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'L', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'XL', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'S', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'M', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'L', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'XL', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'S', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'M', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'L', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'XL', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'S', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'M', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'L', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike Everyday Lightweight', 'XL', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'S', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'M', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'L', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'XL', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'S', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'M', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'L', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'XL', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'S', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'M', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'L', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'XL', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike ACG', 'S', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'M', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'L', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'Nike ACG', 'XL', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'S', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'M', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'L', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'XL', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'S', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'M', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'L', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'XL', 'black', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'S', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'M', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'L', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'XL', 'white', 'cotton', 'long', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'S', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'M', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'L', 'white', 'cotton', 'short', 1),
(000001, 'Nike', 'NIKE Jordan Everyday Ankle', 'XL', 'white', 'cotton', 'short', 1),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'S', 'black', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'M', 'black', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'L', 'black', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'XL', 'black', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'S', 'black', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'M', 'black', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'L', 'black', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'XL', 'black', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'S', 'white', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'M', 'white', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'L', 'white', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'XL', 'white', 'cotton', 'long', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'S', 'white', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'M', 'white', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'L', 'white', 'cotton', 'short', 2),
(000002, 'WARRIX', 'WARRIX PLUSE CREW SOCKS', 'XL', 'white', 'cotton', 'short', 2),
(000001, 'Nike', 'Nike Outdoor', 'S', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'M', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'L', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'XL', 'black', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'S', 'gray', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'M', 'gray', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'L', 'gray', 'cotton', 'long', 1),
(000001, 'Nike', 'Nike Outdoor', 'XL', 'gray', 'cotton', 'long', 1),
(000004, 'Sosksy', 'KN-008', 'Free size', 'orange', 'Polyester', 'short', 4),
(000004, 'Sosksy', 'KN-008', 'Free size', 'pink', 'Polyester', 'short', 4),
(000006, 'FILA', 'FILA SCV230304U', 'Free size', 'orange', 'Polyester', 'long', 6),
(000005, 'LIIEESHINY', 'ถุงเท้าเป็ด', 'Free size', 'yellow', 'Polyester', 'long', 5),
(000005, 'LIIEESHINY', 'ถุงเท้าเป็ด', 'Free size', 'orange', 'Polyester', 'long', 5),
(000005, 'LIIEESHINY', 'ถุงเท้าเป็ด', 'Free size', 'black', 'Polyester', 'long', 5),
(000003, 'SHEIN', 'SCOOBY-DOO X SHEIN', 'Free size', 'yellow', 'cotton', 'short', 3),
(000003, 'SHEIN', 'SCOOBY-DOO X SHEIN', 'Free size', 'blue', 'cotton', 'short', 3),
(000003, 'SHEIN', 'TOM & JERRY X SHEIN', 'Free size', 'pink', 'cotton', 'short', 3),
(000003, 'SHEIN', 'TOM & JERRY X SHEIN', 'Free size', 'blue', 'cotton', 'short', 3),
(000003, 'SHEIN', 'SHEIN X MOLANG', 'Free size', 'pink', 'cotton', 'short', 3),
(000003, 'SHEIN', 'SHEIN X MOLANG', 'Free size', 'purple', 'cotton', 'short', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_code` char(11) NOT NULL COMMENT 'รหัสลูกค้า',
  `name` varchar(100) NOT NULL COMMENT 'ชื่อลูกค้า',
  `total_price` int(11) NOT NULL COMMENT 'ราคาทั้งหมดที่ซื้อ',
  `purchase_date` datetime NOT NULL COMMENT 'วัน/เวลา ที่ซื้อ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_code`, `name`, `total_price`, `purchase_date`) VALUES
('0001', 'ดนุเดช', 500, '2024-03-05 07:59:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `product_cat`
--
ALTER TABLE `product_cat`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `socks`
--
ALTER TABLE `socks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับที่', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_cat`
--
ALTER TABLE `product_cat`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `socks`
--
ALTER TABLE `socks`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `orderID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'เลขที่ใบสั่งซิ้อ', AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
