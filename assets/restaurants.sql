-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2022 at 11:15 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `veganetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
CREATE TABLE IF NOT EXISTS `restaurants` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `address` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `open_time` time DEFAULT NULL,
  `close_time` time DEFAULT NULL,
  `least_price` mediumint(8) UNSIGNED ZEROFILL DEFAULT NULL,
  `most_price` mediumint(8) UNSIGNED ZEROFILL DEFAULT NULL,
  `rating` float(2,1) UNSIGNED ZEROFILL NOT NULL,
  `thumbnail` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `logo` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `categoryID` int NOT NULL,
  `likes` int(10) UNSIGNED ZEROFILL NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoryID` (`categoryID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Truncate table before insert `restaurants`
--

TRUNCATE TABLE `restaurants`;
--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `address`, `open_time`, `close_time`, `least_price`, `most_price`, `rating`, `thumbnail`, `logo`, `categoryID`, `likes`) VALUES
(1, 'Điểm tâm chay Diệu châu', '251 Tùng Thiện Vương, Phường 11, Quận 8, Thành phố Hồ Chí Minh, Việt Nam', '06:00:00', '13:00:00', 00020000, 00025000, 4.8, NULL, '', 3, 0000000000),
(2, 'Quán Chay Phước Ngân', '23 Công chúa Ngọc Hân, Phường 13, Quận 11, Thành phố Hồ Chí Minh 700000, Việt Nam', '06:30:00', '19:00:00', 00025000, 00025000, 4.5, NULL, '', 3, 0000000002),
(3, 'Quán chay Phúc Ấn An Gia', '163/21/3 Tô Hiến Thành, Phường 13, Quận 10, Thành phố Hồ Chí Minh, Việt Nam', '06:30:00', '19:00:00', 00031000, 00051000, 4.7, 'https://i0.wp.com/digiticket.vn/blog/wp-content/uploads/2021/06/ag.jpg?resize=750%2C784&ssl=1', '', 2, 0000000001),
(4, 'Thực dưỡng Khai Minh Quận 5', '105B Đ. Ng. Quyền, Phường 11, Quận 5, Thành phố Hồ Chí Minh 700000, Việt Nam', '06:00:00', '21:00:00', 00005000, 00250000, 4.5, 'https://khaiminh.vn/wp-content/uploads/875f756a61b695e8cca7.jpg', 'https://khaiminh.vn/wp-content/uploads/logo-thucduongKM-2-1.png', 2, 0000000000),
(5, 'Thực dưỡng Khai Minh Thủ Đức\r\n', '123 Đường số 3, Phường Phước Bình, Tp. Thủ Đức, TP. HCM', '07:00:00', '21:00:00', 00005000, 00250000, 5.0, NULL, 'https://khaiminh.vn/wp-content/uploads/logo-thucduongKM-2-1.png', 2, 0000000000),
(6, 'Thực dưỡng Khai Minh Tân Bình', '300 Đồng Đen, Phường 10, Tân Bình, Thành phố Hồ Chí Minh, Việt Nam', '06:00:00', '21:00:00', 00005000, 00250000, 4.4, 'https://poipic.coccoc.com/450x230/poi/previews/20180423/23259-a97e53f78d5b2741abb5c49ec5c523f9.jpg', 'https://khaiminh.vn/wp-content/uploads/logo-thucduongKM-2-1.png', 2, 0000000000),
(7, 'Thực dưỡng Khai Minh Bình Thạnh', '157 Điện Biên Phủ, Phường 15, Bình Thạnh, Thành phố Hồ Chí Minh, Việt Nam', '06:00:00', '21:00:00', 00005000, 00250000, 4.4, NULL, 'https://khaiminh.vn/wp-content/uploads/logo-thucduongKM-2-1.png', 2, 0000000000),
(8, 'Quán Hủ Tiếu Hồ Chay', '235 Mai Xuân Thưởng, Phường 6, Quận 6, Thành phố Hồ Chí Minh, Việt Nam', '07:00:00', '21:00:00', 00015000, 00021000, 4.2, 'https://storage.googleapis.com/senpoint-media-release-merge/static/common/img/shop/bf167ebe56842f7fde0e06805426f880.jpg', '', 3, 0000000000),
(9, 'Quán chay Bình An', '49 Ngô Quyền, Phường 6, Quận 10, Thành phố Hồ Chí Minh, Việt Nam', '06:30:00', '21:00:00', 00042000, 00055000, 4.3, 'https://nld.mediacdn.vn/2020/4/3/nql9705-1585919332931100866889.jpg', '', 2, 0000000000),
(10, 'Nhà hàng chay Giác Ngộ', '213A Đ. Hùng Vương, Phường 9, Quận 5, Thành phố Hồ Chí Minh 72712, Việt Nam', '09:00:00', '21:00:00', 00045000, 00130000, 4.4, 'https://images.foody.vn/res/g95/945683/s800/foody-nha-hang-chay-giac-ngo-945683-456-637010499851851287.jpg', '', 1, 0000000001);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
