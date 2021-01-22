-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 22, 2021 lúc 01:14 PM
-- Phiên bản máy phục vụ: 10.4.17-MariaDB
-- Phiên bản PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `members`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timeline`
--

CREATE TABLE `timeline` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `timeline`
--

INSERT INTO `timeline` (`id`, `title`, `content`, `date`) VALUES
(1, 'Một ngày đẹp trời, mình đã tạo ra website này', 'Đó là một ngày đẹp trời, trong kí túc xá trường THPT Chuyên Biên Hòa. Lúc đó là vào tầm 12 giờ trưa, vì rảnh quá nên mình đã tìm hiểu các trang web hướng dẫn làm snippet Bootstrap. Và rồi mình đã tìm ra được snippet mang tên Timeline này. Mình đã tải về, thử chỉnh sửa và thêm một chút chức năng bổ sung để phù hợp cho riêng mình. Chiều hôm đó về nhà vì không thể chờ được mẹ nên mình đã ra quán net nạp 10k rồi code ở đó đến 8h tối.', '2021-01-20'),
(2, 'Sửa máy tính bị hỏng', 'Ngày hôm sau là ngày mà mình phải đi sửa máy tính. Tối hôm trước mình đã để máy tính sẵn trong cốp xe ô tô nhà mình để sáng mai bố mình đưa cho cô Tân trường mẹ mình đem đi sửa dùm. Trưa hôm đó là máy đã sửa xong. Mình khá bất ngờ với tốc độ này. Tuy nhiên khi về nhà mở ra rồi tắt máy xuống ăn cơm lúc lên bật lại thì nút bật lại hiện màu cam. Vì cay quá nên mình đã quyết định phóng xe máy lên chỗ sửa. Lúc đến nơi thì mới phát hiện ra là lúc sáng khi người ta sửa thì máy vẫn bật lên được và họ chỉ cài lại Windows cho máy thôi chứ không bị hiện màu cam. Thế rồi người ta mới bảo mình là máy bị chết motherboard phải đổi RAM chip các thứ sang máy mới. Tất cả hết 2 triệu rưỡi. Và rồi về nhà mình lại tiếp tục viết những dòng này...', '2021-01-21');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `timeline`
--
ALTER TABLE `timeline`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `timeline`
--
ALTER TABLE `timeline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
