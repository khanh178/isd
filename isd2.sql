-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2016 at 10:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `isd2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item_id`, `user_id`, `product_id`, `quantity`) VALUES
(8, 28, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'abc123', 'asdasd', 'asdasdsaasdasasd\r\nsadsadasdasd'),
(2, 'ko co slug', '', 'day la 1 record');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `product_img` text NOT NULL,
  `selling_price` float NOT NULL,
  `import_price` float NOT NULL,
  `brand` varchar(45) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `description`, `product_img`, `selling_price`, `import_price`, `brand`, `product_quantity`, `status`, `category_id`) VALUES
(1, 'Modem Router wifi TP-Link TL-WR841N (Trắng)', '•Tốc độ truyền tải 300Mbps\r\n•Chuẩn IEEE 802.11n/g/b\r\n•1 cổng WAN, 4 cổng LAN\r\n•Bảo hành 24 tháng\r\n', 'http://localhost:8080/isd/assets/product/router/image029.jpg', 287.599, 200, 'TP- Link', 5, 0, 1),
(2, 'Modem Router wifi TP-Link TL-WR841N (Trắng)', '• Tốc độ truyền tải 300Mbps\n• Chuẩn IEEE 802.11n/g/b\n• 1 cổng WAN, 4 cổng LAN\n• Bảo hành 24 tháng\n', 'http://localhost:8080/isd/assets/product/router/image029.jpg', 287, 200, 'TP- Link', 5, NULL, 1),
(3, 'Switch TP-Link TL-SF1005D 5 Port (Trắng)  ', '• Tốc độ truyền tải 10/100Mbps\r\n• 5 cổng 10/100Mbps RJ-45\r\n', 'http://localhost:8080/isd/assets/product/router/image033.jpg', 203, 150, 'TP-Link', 5, NULL, 1),
(4, 'Switch TP-Link TL-SF1005D 5 Port (Trắng)  ', '• Tốc độ truyền tải 10/100Mbps\r\n• 5 cổng 10/100Mbps RJ-45\r\n', 'http://localhost:8080/isd/assets/product/router/image033.jpg', 203, 150, 'TP-Link', 5, NULL, 1),
(5, 'Switch TP-Link TL-SF1005D 5 Port (Trắng)  ', '• Tốc độ truyền tải 10/100Mbps\r\n• 5 cổng 10/100Mbps RJ-45\r\n', 'http://localhost:8080/isd/assets/product/router/image033.jpg', 203, 150, 'TP-Link', 5, NULL, 1),
(6, 'Switch TP-Link TL-SF1005D 5 Port (Trắng)  ', '• Tốc độ truyền tải 10/100Mbps\r\n• 5 cổng 10/100Mbps RJ-45\r\n', 'http://localhost:8080/isd/assets/product/router/image033.jpg', 203, 150, 'TP-Link', 5, NULL, 1),
(7, 'Switch TP-Link TL-SF1005D 5 Port (Trắng)  ', '• Tốc độ truyền tải 10/100Mbps\r\n• 5 cổng 10/100Mbps RJ-45\r\n', 'http://localhost:8080/isd/assets/product/router/image033.jpg', 203, 150, 'TP-Link', 5, NULL, 1),
(8, 'Switch TP-Link TL-SF1005D 5 Port (Trắng)  ', '• Tốc độ truyền tải 10/100Mbps\r\n• 5 cổng 10/100Mbps RJ-45\r\n', 'http://localhost:8080/isd/assets/product/router/image033.jpg', 203, 150, 'TP-Link', 5, NULL, 1),
(9, 'Laptop HP Pavilion 11 S001TU N3050/2GB/500GB/Win10', 'Màn hình: 11.6”, 1366x768CPU: Intel Celeron, 1.6GHzRAM: 2GB/ HDD: 500GBVGA: Intel HD GraphicsHĐH: Windows 10 HomePin: 2 cell/ DVD: Không', 'http://localhost:8080/isd/assets/product/laptop/image012.png', 5.99, 5, 'Laptop', 6, 0, 2),
(10, 'Laptop HP Pavilion 11 S001TU N3050/2GB/500GB/Win10', 'Màn hình: 11.6”, 1366x768CPU: Intel Celeron, 1.6GHzRAM: 2GB/ HDD: 500GBVGA: Intel HD GraphicsHĐH: Windows 10 HomePin: 2 cell/ DVD: Không', 'http://localhost:8080/isd/assets/product/laptop/image012.png', 5.99, 5, 'Laptop', 5, 0, 2),
(11, 'Laptop HP Pavilion 11 S001TU N3050/2GB/500GB/Win10', 'Màn hình: 11.6”, 1366x768CPU: Intel Celeron, 1.6GHzRAM: 2GB/ HDD: 500GBVGA: Intel HD GraphicsHĐH: Windows 10 HomePin: 2 cell/ DVD: Không', 'http://localhost:8080/isd/assets/product/laptop/image012.png', 5990000, 5000000, 'Laptop', 5, 0, 2),
(12, 'Laptop Acer ES1 431 N3060/4GB/500GB/Win10', '\r\nMàn hình: 14”, 1366x768CPU: Intel Celeron, 1.6GHzRAM: 4GB/ HDD: 500GBVGA: Intel HD GraphicsHĐH: Windows 10 HomePin: 4 cell/ DVD: Không\r\n', 'http://localhost:8080/isd/assets/product/laptop/image015.png', 5.99, 5, 'Laptop', 6, 0, 2),
(13, 'Laptop Dell Inspiron 3552 N3050/2GB/500GB/Win10', '\r\n\r\nMàn hình: 15.6”, 1366x768CPU: Intel Celeron, 1.6GHzRAM: 2GB/ HDD: 500GBVGA: Intel HD GraphicsHĐH: Windows 10 HomePin: 4 cell/ DVD: Không\r\n', 'http://localhost:8080/isd/assets/product/laptop/image015.png', 6.49, 6.49, 'Laptop', 6, 0, 2),
(15, 'Điện thoại iPhone 6s 64GB', 'Màn hình: Retina HD, 5.5 inchesHĐH: iOS 9CPU: A8 64 bit, RAM 1 GBCamera: 8.0MP, 1 SIMPin: 2915mAh', 'http://localhost:8080/isd/assets/product/smartphone/image001.png', 19.99, 19.99, 'Smartphone', 6, 0, 3),
(16, 'Điện thoại HTC 10', '\r\nMàn hình: Quad HD, 5.2 inchesHÐH: Android 6.0CPU: 4 nhân, RAM 4 GBCamera: 12.0 MP, 1 SimDung lượng pin: 3000 mAh\r\n', 'http://localhost:8080/isd/assets/product/smartphone/image001.png', 16.99, 16.99, 'Smartphone', 6, 0, 3),
(17, 'Điện thoại Samsung Galaxy S7 Edge', 'Màn hình: Quad HD, 5.5"HĐH: Android 6.0CPU: 8 nhân, RAM 4 GBCamera: 12.0 MP, 2 SIMDung lượng pin: 3600 mAh', 'http://localhost:8080/isd/assets/product/smartphone/image001.png', 9.8, 9.8, 'Smartphone', 4, 0, 3),
(18, 'Điện thoại HTC Desire 620G', 'Màn hình:\r\nTFT, 5", HD\r\nHệ điều hành:\r\nAndroid 4.4 (KitKat)\r\nCamera sau:\r\n8 MP\r\n', 'http://localhost:8080/isd/assets/product/smartphone/image009.png', 9.67, 9.67, 'Smartphone', 4, 0, 3),
(19, 'Điện thoại OPPO Neo 5 16GB', 'Màn hình: FWVGA, 4.5 inchesHĐH: Android 5,1CPU: 4 nhân 1.3GHz, RAM 1GBCamera: 8.0MP, 2 SIMDung lượng pin: 2000 mAh\r\n\r\n', 'http://localhost:8080/isd/assets/product/smartphone/image009.png', 2.69, 2.69, 'Smartphone', 4, 0, 3),
(20, 'Điện thoại Lenovo A6010', '\r\nMàn hình: HD, 5.0 inchesHĐH: Android 5.0CPU: 4 nhân 1.2GHz, RAM 2GBCamera: 13.0MP, 2 SIMDung lượng pin: 2300 mAh\r\n\r\n', 'ttp://localhost:8080/isd/assets/product/smartphone/image009.png', 2.69, 2.69, 'smartphone', 4, 0, 3),
(21, 'Loa vi tính Fenda U213A - 2.0', '\r\n\r\nThiết kế đơn giản với màu đen trơn nhưng rất tinh tế và đẹp mắt.\r\nKích thước nhỏ gọn thuận tiện cho việc di chuyển Với góc nghiêng 11 độ giúp Loa phát âm thanh rộng hơn.\r\nKết nối dễ dàng và nhanh chóng với PC, laptop,...thông qua Jack 3.5mm\r\n', 'http://localhost:8080/isd/assets/product/loa/image019.jpg', 220, 220, 'Loa', 6, 0, 4),
(22, 'Loa Bluetooth Selfie iCutes MB-M515 Gấu Xám', 'Thiết kế nhỏ gọn, đẹp mắt.\r\nCó chức năng như Remote chụp ảnh thông qua Bluetooth\r\n', 'http://localhost:8080/isd/assets/product/loa/image021.jpg', 250, 220, 'Loa', 6, 0, 4),
(23, 'Loa Bluetooth Fenda W5', 'Kiểu dáng nhỏ gọn, thuận tiện mang đi bên mình.\r\nChế độ lọc Bass cho âm thanh chất lượng.\r\nSử dụng pin Polymer dung lượng 600mAh, thời gian sạc trung bình 2 giờ.\r\nTích hợp Microphone, có thể nhận cuộc gọi.\r\nCông nghệ bluetooth 4.0.\r\n', 'http://localhost:8080/isd/assets/product/loa/image023.jpg', 400, 420, 'Loa', 6, 0, 4),
(24, 'Loa Bluetooth iCutes MB-M615 Mặt cười', 'Thiết kế nhỏ gọn, đẹp mắt.\r\nThời gian hoạt động: 3-5 giờ.\r\nDung lượng 400mAh, thời gian sạc: 2 giờ.\r\n', 'http://localhost:8080/isd/assets/product/loa/image025.jpg', 300, 300, 'Loa', 6, 0, 4),
(25, 'Loa vi tính Fenda F203G', 'Thiết kế nhỏ gọn và tinh tế, giúp cho việc di chuyển hoặc mang đi xa trở nên dễ dàng.\r\nNhờ công suất 11W, loa cho âm thanh chân thật và sống động.\r\nĐiều chỉnh âm thanh theo ý muốn với nút tăng giảm Bass và đèn LED xanh báo hiệu.\r\n', 'http://localhost:8080/isd/assets/product/loa/image027.jpg', 490, 490, 'Loa', 6, 0, 4),
(26, 'Máy chiếu mini UNIC UC46 WIFI (Đen)', ' Thấu kính quang học chất lượng cao\r\n', 'http://localhost:8080/isd/assets/product/trinhchieu/image038.jpg', 1.777, 1.747, 'trinhchieu', 6, 0, 5),
(27, 'Hộp chiếu phim mini Smartphone Projector', 'Chất liệu: bìa cứng; nhựa\r\nThiết kế độc đáo; phong cách như máy chiếu phim hiện đại.\r\nĐộ phóng đại phim/hình ảnh: 8 lần (khoảng cách dưới 1m)\r\n\r\n', 'http://localhost:8080/isd/assets/product/trinhchieu/image039.jpg', 249, 249, 'trinhchieu', 6, 0, 5),
(28, 'Máy chiếu mini Led Projector GM 40 ', '  \r\nKích thước nhỏ 17cm x 13.5cm x 5.5cm\r\n\r\n', 'http://localhost:8080/isd/assets/product/trinhchieu/image040.jpg', 1.539, 1.539, 'trinhchieu', 6, 0, 5),
(29, 'Máy chiếu 4 trong 1 Mini UNIC UC40 Plus (Trắng)', ' Thương hiệu: UNIC Model: UC40 Plus Độ phân giải : 800 x 480 Kích thước trình chiếu : từ 34" đến 130" Kích thước ảnh: 4:3 và 16:9 Hỗ trợ trình chiếu từ SD card; USB Cổng HDMI: có Cổng AV: có Cổng VGA \r\n\r\n', 'http://localhost:8080/isd/assets/product/trinhchieu/image040.jpg', 1.399, 1.399, 'trinhchieu', 6, 0, 5),
(30, 'Máy chiếu mini UC30 ', 'Thiết kế nhỏ gọn\r\nDễ lắp đặt và sử dụng\r\n', 'http://localhost:8080/isd/assets/product/trinhchieu/image041.jpg', 4.792, 4.247, 'trinhchieu', 6, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `password`, `level`, `email`, `phone`, `dob`) VALUES
(1, '', 'khanh', '1', 1, '', '', '0000-00-00'),
(22, '', 'Tạ Duy Khánh', '123456', 1, 'khanh@gmail.com', '016921033580', '0000-00-00'),
(23, '', 'Tạ Duy Khánh', '123456', 1, 'khanh@gmail.com', '016921033580', '0000-00-00'),
(28, 'Bùi Sơn Bảo', 'khanh123', '2', 1, 'khanh@gmail.com', '123456789', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
