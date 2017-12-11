-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 03:09 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_timviec`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `description` text COLLATE utf8_unicode_ci COMMENT 'mô tả'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `parent_id`, `lft`, `rght`, `date_created`, `date_updated`, `description`) VALUES
(1, 'Part time', 0, 1, 1, '2017-11-16 07:28:23', '2017-11-16 07:28:23', 'viec lam part time'),
(3, 'Việc làm nước ngoài', 0, 2, 2, '2017-11-16 09:06:48', '2017-11-16 09:06:48', 'Việc làm nước ngoài'),
(2, 'Việc làm trong nước', 0, 2, 3, '2017-11-16 07:41:57', '2017-11-16 07:41:57', 'việc làm trong nước'),
(4, 'Việc hot', 0, 4, 8, '2017-11-30 03:41:17', '2017-11-30 03:41:17', 'việc hot');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `date_up` date NOT NULL,
  `company` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `add` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `wage` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `exp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `career` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `number_up` int(5) NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `describe` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `request` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `right` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `deadline` date NOT NULL,
  `usercontact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `emailcontact` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(5) NOT NULL,
  `category` int(5) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `TinhChatCV` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhthuc` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `date_up`, `company`, `add`, `wage`, `exp`, `city`, `career`, `number_up`, `sex`, `describe`, `request`, `right`, `deadline`, `usercontact`, `emailcontact`, `status`, `category`, `title`, `TinhChatCV`, `level`, `hinhthuc`, `author`) VALUES
(1, '2017-08-09', 'GALAXY DEREC', 'Tòa nhà Scetpa, 19A Cộng Hòa, P.12, Q.Tân Bình', '5-7 triệu', 'Chưa có kinh nghiệm', 'Hồ Chí Minh', 'Chăm sóc khách hàng', 10, '2', '- Thực hiện các cuộc gọi đến khách hàng để nhắc nhở/ thuyết phục khách hàng thanh toán.', '- Kỹ năng tư vấn, thuyết phục.\r\n- Chịu khó, chuyên cần.', '', '2017-08-31', 'Ms Thi', 'thi@gmail.com', 1, 1, 'Nhân viên bán hàng', '', '', '0', 0),
(2, '2017-10-28', 'ABC KKA', 'ThaiLand', '10 triệu', '1 năm', 'Bangkok', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 3, 'Nhân viên IT', '', '', '0', 0),
(3, '2017-08-09', 'Company ABC KKA', 'ThaiLand', '10 triệu', '2 năm', 'Bangkok', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 3, 'Nhân viên cơ khí', '', '', '0', 0),
(4, '2017-08-29', 'ABC KKA', 'ThaiLand', '10 triệu', '1 năm', 'Bangkok', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 3, 'Nhân viên otô', '', '', '0', 0),
(5, '2017-08-08', 'ABC KKA', 'ThaiLand', '10 triệu', '1 năm', 'Bangkok', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 1, 'Kỹ thuật viên', '', '', '0', 0),
(6, '2017-11-08', 'ABC KKA', 'nguyễn đình chiểu', '10 triệu', '1 năm', 'Hồ Chí Minh', '', 5, '1', 'aaaaaaaaaaaaaaaaaa', '\n- Ngoại hình khá, tác phong sự phạm, yêu nghề, am hiểu tâm lý học sinh.\n\n- Kỹ năng lập kế hoạch, kỹ năng lãnh đạo, kỹ năng quản lý học sinh và kỹ năng làm việc nhóm.\n\n- Sử dụng thành thạo vi tính (Word, Excel, Powerpoint), internet và các công cụ phục vụ giảng dạy.\n\n- Có tinh thần hợp tác và trách nhiệm.', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 2, 'Điện thoại viên', '', '', '0', 0),
(7, '2017-08-08', 'ABC KKA', 'nguyễn đình chiểu', '10 triệu', '1 năm', 'Hồ Chí Minh', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 2, 'Nhân viên y tế', '', '', '0', 0),
(8, '2017-11-18', 'ABC KKA', 'nguyễn đình chiểu', '10 triệu', '1 năm', 'Hà Nội', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 2, 'Điều hành', '', '', '0', 0),
(9, '2017-08-08', 'ABC KKA', 'nguyễn đình chiểu', '10 triệu', '1 năm', 'Hà Nội', '', 5, '3', 'aaaaaaaaaaaaaaaaaa', 'aaâ', '', '2017-08-31', 'katana', 'katana@gmail.com', 1, 2, 'Kỹ thuật', '', '', '0', 0),
(10, '2017-10-19', 'ABC KKA', 'Lào', '10 triệu', '1 năm', 'Phongpheng', '', 5, '1', '- Chuẩn bị đầy đủ Hồ sơ chuyên môn từ đầu năm học: Kế hoạch giảng dạy; Giáo án các lớp được phân công giảng dạy; Sổ báo giảng; Sổ điểm cá nhân.\n\n- Tham gia bồi dưỡng thường xuyên đầy đủ 3 nội dung (hàng năm).\n\n- Thực hiện nhiệm vụ giảng dạy và giáo dục học sinh theo đúng quy định của ngành và quy định cụ thể của nhà trường.\n\n- Tích cực đổi mới PPDH và ứng dụng CNTT trong giảng dạy.\n\n- Thực hiện đầy đủ các quy định về giáo vụ và hành chính của nhà trường.', '\n- Ngoại hình khá, tác phong sự phạm, yêu nghề, am hiểu tâm lý học sinh.\n\n- Kỹ năng lập kế hoạch, kỹ năng lãnh đạo, kỹ năng quản lý học sinh và kỹ năng làm việc nhóm.\n\n- Sử dụng thành thạo vi tính (Word, Excel, Powerpoint), internet và các công cụ phục vụ giảng dạy.\n\n- Có tinh thần hợp tác và trách nhiệm.', '- BHXH, BHYT,BHTN được tính vào lương.  - Được tham gia chương trình huấn luyện chuyên môn.  - Được ', '2017-08-31', 'katana', 'katana@gmail.com', 1, 3, 'Bất động sản', '', '', '0', 0),
(11, '2017-08-09', 'Công ty TNHH Mini', 'Trường Chinh, Quận 12', '5-7 triệu', 'Chưa có kinh nghiệm', 'Hồ Chí Minh', 'Bán hàng', 5, '2', '1. Đón tiếp, hướng dẫn khách hàng đến tham quan mua sắm tại cửa hàng.\r\n2. Vệ sinh khu vực làm việc, sắp xếp, chuẩn bị hàng hóa và các điều kiện đảm bảo để thực hiện công việc.\r\n3. Kiểm tra và niêm yết đúng giá sản phẩm\r\n4. Hỗ trợ nhập hàng, lưu kho hàng hoá, sắp xếp hàng hóa trong kho.\r\n5. Hỗ trợ thu ngân\r\n6. Vệ sinh gian hàng định kì và kiểm kê định kì.', '- Có kinh nghiệm bán hàng và thu ngân là lợi thế\r\n- Nam/nữ độ tuổi từ 18 - 25 tuổi\r\n- Yêu cầu làm fulltime \r\n- Tốt nghiệp THPT (Hoặc THCS nếu có kinh nghiệm bán hàng)\r\n- Nhanh nhẹn, thành thật, chăm chỉ và có sức khỏe tốt', '', '2017-09-12', 'Ms Thảo', 'thao@gmail.com', 1, 1, 'Thu ngân', '', '', '0', 0),
(20, '2017-11-30', 'company design', '', '10tr', 'design', 'hcm', '', 12, '1', 'design', 'design', 'design', '2017-11-30', 'tuan', 'tuan@gmail.com', 0, 1, 'design', 'design', '', '0', 0),
(22, '2017-12-07', 'bwg', 'hồ chí minh', '123456789', '3', 'hồ chí minh', 'Thiết kế', 10, '2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum, sint.Lorem ipsum dolor sit ame', '2017-12-29', 'tuan', 'tuan@gmail.com', 1, 2, 'thiết kế', 'thiết kê', '6', '0', 1),
(24, '2017-12-06', 'bwg', 'hcm', '154654654654', '8', 'hcm', 'Bán hàng', 12, '3', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at e', '2017-12-22', 'tuan', 'tuan@gmail.com', 1, 2, 'kinh doanh', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', '2', '', 1),
(25, '2017-12-07', 'bwg', 'hcm', '154654654654', '8', 'hcm', 'Bán hàng', 12, '3', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at e', '2017-12-31', 'tuan', 'tuan@gmail.com', 1, 2, 'bán hàng', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', '2', '', 1),
(26, '2017-12-07', 'bwg', 'hcm', '154654654654', '8', 'hcm', 'Bán hàng', 12, '3', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at e', '2017-12-22', 'tuan', 'tuan@gmail.com', 1, 2, 'admin', 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.', '2', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `date_created`, `date_updated`) VALUES
(2, 'admin', 'admin@gmail.com', 'tuan', '$2a$10$RJX6k5GCxNuTzsD6FtBzQe8F.aQgMbX/QeKKM4G5nAGsTyyanCsTK', '2013-10-31 03:24:42', '2014-12-10 21:01:28'),
(74, 'tuan', 'tuan@gmail.com', 'tuan', '123456', '2017-11-30 03:34:28', '2017-11-30 03:34:28'),
(75, 'teo teo', 'teo@gmail.com', 'teo', 'teoteo', '2017-11-30 07:36:20', '2017-11-30 07:36:20');

-- --------------------------------------------------------

--
-- Table structure for table `users_company`
--

CREATE TABLE `users_company` (
  `id` int(11) NOT NULL,
  `username_com` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_com` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name_com` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address_com` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email_com` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_com` int(11) NOT NULL,
  `activity_com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `employees_com` int(11) NOT NULL,
  `project_com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about_com` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_company`
--

INSERT INTO `users_company` (`id`, `username_com`, `password_com`, `name_com`, `address_com`, `email_com`, `phone_com`, `activity_com`, `employees_com`, `project_com`, `about_com`, `permission`) VALUES
(1, 'company1', '12345', 'company co', 'ho chi minh', 'company@gmail.com', 2147483647, 'kinh doanh maket', 100, '1111000', 'about company', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_profile`
--

CREATE TABLE `users_profile` (
  `id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `fullname` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `marital_status` int(11) NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` int(11) NOT NULL,
  `exp` int(11) NOT NULL,
  `level_rank` int(11) NOT NULL,
  `level_desired` int(11) NOT NULL,
  `career` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wage_desired` int(11) NOT NULL,
  `add_desired` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email_pro` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_profile`
--

INSERT INTO `users_profile` (`id`, `users_id`, `fullname`, `birthday`, `marital_status`, `city`, `address`, `title`, `education`, `exp`, `level_rank`, `level_desired`, `career`, `wage_desired`, `add_desired`, `phone`, `email_pro`) VALUES
(8, 3, 'dieu hien nguyen', '1996-01-01', 1, 'TP Hồ Chí Minh', 'hcm', 'ho so 1', 6, 1, 1, 0, 'Bán hàng', 123456, 'hcm', 123456789, 'hien@gmail.com'),
(10, 1, 'tuan ng', '0000-00-00', 1, 'hcm', 'hcm', 'ho so 1', 6, 6, 3, 6, 'IT', 2147483647, 'hcm', 987654321, 'tuan0@gmail.com'),
(11, 3, 'tuan van', '0000-00-00', 0, '', '', '', 0, 0, 0, 0, 'Bán hàng', 0, '', 0, ''),
(12, 1, 'tuan van', '2003-03-06', 0, 'Bắc Giang', 'hcm', 'ho so 2', 2, 6, 4, 3, 'Giáo dục/Đào tạo/Thư viện', 2147483647, 'hcm', 2147483647, 'tuan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users_timviec`
--

CREATE TABLE `users_timviec` (
  `id` int(11) NOT NULL,
  `firstname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `sex` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `permission` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_timviec`
--

INSERT INTO `users_timviec` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `date_created`, `date_updated`, `sex`, `users_id`, `permission`) VALUES
(1, 'tuan', 'van', 'tuan1@gmail.com', 'tuan', '12345', '2017-10-31 03:24:42', '2017-12-01 21:01:28', 1, 1, 0),
(3, 'dieu', 'hien', 'hien@gmail.com', 'hien', '12345', '2017-12-01 13:55:59', '2017-12-01 13:55:59', 2, 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_company`
--
ALTER TABLE `users_company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_profile`
--
ALTER TABLE `users_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_timviec`
--
ALTER TABLE `users_timviec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `users_company`
--
ALTER TABLE `users_company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_profile`
--
ALTER TABLE `users_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users_timviec`
--
ALTER TABLE `users_timviec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
