-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 12, 2022 at 11:22 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int NOT NULL,
  `categoryName` tinytext COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`) VALUES
(0, 'Quán ngọt'),
(1, 'Nhà hàng'),
(2, 'Quán ăn tầm trung'),
(3, 'Quán ăn bình dân');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `restaurant_id` int UNSIGNED NOT NULL,
  `comment` varchar(150) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `restaurant_id`, `comment`) VALUES
(1, 1, 2, 'Quán không sáng sủa nhưng thoáng mát.'),
(2, 2, 2, 'Món nào cũng ngon!'),
(3, 1, 2, 'Bún Thái ngon nhứt nách :))))');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `restaurant_id` int UNSIGNED NOT NULL,
  `uer_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`restaurant_id`, `uer_id`) VALUES
(2, 1),
(3, 1),
(10, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int UNSIGNED NOT NULL,
  `restaurant_id` int UNSIGNED NOT NULL,
  `dish_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `price` mediumint(8) UNSIGNED ZEROFILL NOT NULL,
  `type` enum('món nước','món khô','đồ uống') COLLATE utf8mb4_general_ci NOT NULL,
  `likes` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `restaurant_id`, `dish_name`, `price`, `type`, `likes`) VALUES
(1, 2, 'Hủ tiếu Sa tế', 00025000, 'món nước', 0000000001),
(2, 2, 'Bún Thái', 00025000, 'món nước', 0000000001),
(3, 2, 'Cơm thập cẩm', 00025000, 'món khô', 0000000001),
(4, 2, 'Trà đá', 00000000, 'đồ uống', 0000000010),
(5, 2, 'Phở', 00025000, 'món nước', 0000000010),
(6, 2, 'Bánh canh', 00025000, 'món nước', 0000000010),
(7, 2, 'Mì Quảng', 00025000, 'món nước', 0000000023),
(8, 2, 'Hủ tiếu mì', 00025000, 'món nước', 0000000054),
(9, 2, 'Bún riêu', 00025000, 'món nước', 0000000010),
(10, 2, 'Bùn Huế', 00025000, 'món nước', 0000000010);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
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
  `likes` int(10) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Lý Vĩ Phong', 'phonglv.124010121062@vtc.edu.vn', '1234567890'),
(2, 'Lưu Khoa Học', 'hoclk.124010121070@vtc.edu.vn', 'bakabakaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`restaurant_id`,`uer_id`),
  ADD KEY `uer_id` (`uer_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`,`restaurant_id`),
  ADD KEY `restaurant_id` (`restaurant_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryID` (`categoryID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`uer_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`categoryID`) REFERENCES `categories` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
