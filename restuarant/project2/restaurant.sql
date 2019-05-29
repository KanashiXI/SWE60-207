-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 08:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` varchar(5) NOT NULL COMMENT 'รหัสเมนูอาหาร',
  `menu_name` varchar(50) NOT NULL COMMENT 'ชื่อเมนูอาหาร',
  `menu_type` int(2) NOT NULL COMMENT 'ประเภทเมนูอาหาร',
  `menu_price` int(4) DEFAULT NULL COMMENT 'ราคาอาหาร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_type`, `menu_price`) VALUES
('m0001', 'ข้าวผัดอเมริกัน', 1, 70),
('m0002', 'ไอศกรีม', 2, 50),
('m0003', 'ข้าวผัดปู', 1, 80),
('m0004', 'ผัดมักกะโรนี', 1, 100),
('m0005', 'ปอเปี๊ยะสด', 3, 60),
('m0006', 'ปอเปี๊ยะทอด', 3, 60),
('m0007', 'ขนมกล้วย', 2, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
