-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2014 at 09:31 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moitruong`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `page` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` int(10) unsigned DEFAULT NULL,
  `description` varchar(765) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `photo`, `link_url`, `disabled`, `page`, `created_date`, `description`) VALUES
(2, 'abc.com', 'images_75fdbf6f6279305f6752ec21fdfb1e4f.png', 'http://moitruong.local/gioi-thieu/loi-gioi-thieu.html', 1, '11,12,13,15,22,23,24,25,26,27,28,30', 1411708508, '<p>\r\n	M&ocirc; tả chung về quảng c&aacute;o</p>\r\n'),
(3, 'quang cao 2', 'images_f8945de8723953d98bb9c4557bfe3779.png', '/gioi-thieu/loi-gioi-thieu.html', 1, '11,12,13,15,24,25,26,27,28,30,31,32', 1411025626, '<p>\r\n	noi dung mo ta</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(4) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cover_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `priority` int(4) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `cover_photo`, `link_url`, `disabled`, `priority`) VALUES
(1, 'Dịch vụ', 'images_fec75401ed83983dec44494f66505ecf.jpg', '#', 1, 1),
(2, 'công ty thành viên', 'images_d19837f6944d62e688d2bd3b7b496d80.jpg', '#', 1, 2),
(4, 'công nghệ', 'images_999cc454f0d98c8449c563dc42f9527a.jpg', '#', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `branch_companies`
--

CREATE TABLE IF NOT EXISTS `branch_companies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` tinyint(2) unsigned NOT NULL,
  `map` text COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fax` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_branch_menu` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `branch_companies`
--

INSERT INTO `branch_companies` (`id`, `menu_id`, `map`, `title`, `address`, `tel`, `fax`) VALUES
(1, 16, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.688418025664!2d106.66301960000001!3d10.8351395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529a78cab692d%3A0x3008fd89430825cb!2zMTIgUXVhbmcgVHJ1bmcsIDExLCBHw7IgVuG6pXAsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1410257155081" width="320" height="200" frameborder="0" style="border:0"></iframe>', 'VĂN PHÒNG XÍ NGHIỆP VẬN CHUYỂN SỐ 1', '12 Quang Trung - Phường 11 - Quận Gò Vấp', '(08) 39966834 – 39968927 – 38958675', '(08) 39968926'),
(2, 17, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3919.5369448150645!2d106.6439739!3d10.7701259!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752e97d5b84369%3A0xa7e03ae6764020d0!2zMSBU4buRbmcgVsSDbiBUcsOibiwgcGjGsOG7nW5nIDUsIFF14bqtbiAxMSwgSOG7kyBDaMOtIE1pbmgsIFZpZXRuYW0!5e0!3m2!1sen!2s!4v1410257852092" width="320" height="200" frameborder="0" style="border:0"></iframe>', 'Văn phòng Xí nghiệp Vận chuyển số 2', 'Số 01 Tống Văn Trân - Phường 5 - Quận 11', '(08) 38653614 - 38619857 - 38618818', '(08) 38618818'),
(3, 18, '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6472198327033!2d106.65743650000002!3d10.76164819999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eec35caf721%3A0xc1b5e61497a91fdc!2zMTUwIEzDqiDEkOG6oWkgSMOgbmgsIHBoxrDhu51uZyA3LCBRdeG6rW4gMTEsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1410258238265" width="320" height="200" frameborder="0" style="border:0"></iframe>', 'Văn phòng Xí nghiệp Vận chuyển số 3', '150 Lê Đại Hành - Phường 7 - Quận 11', '(08) 38557783 - 38555664', '(08) 38557783'),
(4, 19, '<iframe src="https://www.google.com/maps/embed?pb=!1m12!1m8!1m3!1d3919.753548919717!2d106.6334885!3d10.753467599999999!3m2!1i1024!2i768!4f13.1!2m1!1zMTggS2luaCBExrDGoW5nIFbGsMahbmcsIFBoxrDhu51uZyAxMywgUXXhuq1uIDA2!5e0!3m2!1sen!2s!4v1410258703495" width="320" height="200" frameborder="0" style="border:0"></iframe>', 'Văn phòng Xí nghiệp Dịch vụ Môi trường', '18 Kinh Dương Vương, Phường 13, Quận 06', '(08) 38756115', '(08) 38754892'),
(5, 20, '<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3918.124836229203!2d106.64891120000001!3d10.8781086!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529e1c6721c37%3A0x54ab64170e8eedfc!2zMzc3IEzDqiBWxINuIEtoxrDGoW5nLCBIaeG7h3AgVGjDoG5oLCBRdeG6rW4gMTIsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1410259090723" width="320" height="200" frameborder="0" style="border:0"></iframe>', 'Xí nghiệp Xử lý chất thải', '377 Lê Văn Khương, Phường Hiệp Thành, Quận 12', '(08) 37176016', '(08) 37175812');

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE IF NOT EXISTS `cms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `short_description` varchar(765) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `menu_id` tinyint(2) unsigned DEFAULT NULL,
  `created_date` int(10) unsigned DEFAULT NULL,
  `index` tinyint(1) DEFAULT NULL,
  `cover_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `page` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_cms_menu` (`menu_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `title`, `short_description`, `description`, `menu_id`, `created_date`, `index`, `cover_photo`, `url`, `page`, `gallery_id`, `file`, `meta_keyword`, `meta_title`, `meta_description`) VALUES
(2, 'LỊCH SỬ HÌNH THÀNH', '<p>\r\n	C&ocirc;ng ty TNHH Một Th&agrave;nh Vi&ecirc;n M&ocirc;i Trường Đ&ocirc; Thị tiền th&acirc;n l&agrave; Sở Vệ sinh Đ&ocirc; th&agrave;nh Saigon được h&igrave;nh th&agrave;nh từ trước năm 1975, trực thuộc T&ograve;a Đ&ocirc; ch&aacute;nh Saigon.</p>\r\n', '<p>\r\n	C&ocirc;ng ty TNHH Một Th&agrave;nh Vi&ecirc;n M&ocirc;i Trường Đ&ocirc; Thị tiền th&acirc;n l&agrave; Sở Vệ sinh Đ&ocirc; th&agrave;nh Saigon được h&igrave;nh th&agrave;nh từ trước năm 1975, trực thuộc T&ograve;a Đ&ocirc; ch&aacute;nh Saigon.</p>\r\n<p>\r\n	C&aacute;c mốc hoạt động ch&iacute;nh:</p>\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<strong>30/04/1975</strong></td>\r\n			<td>\r\n				Sở Vệ sinh được tiếp quản v&agrave; đi v&agrave;o hoạt động.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>10/11/1975</strong></td>\r\n			<td>\r\n				Ủy ban Qu&acirc;n quản th&agrave;nh phố ban h&agrave;nh quyết định số 310/TCCQ th&agrave;nh lập Sở Vệ sinh l&agrave; cơ quan quản l&yacute; h&agrave;nh ch&aacute;nh sự nghiệp.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>17/12/1977</strong></td>\r\n			<td>\r\n				Chuyển đổi Sở Vệ sinh th&agrave;nh C&ocirc;ng ty Vệ sinh trực thuộc Sở Quản l&yacute; Quản l&yacute; C&ocirc;ng tr&igrave;nh c&ocirc;ng cộng.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p style="font-size:13px;color:#a6c738;">\r\n	Từ đ&oacute; đến nay C&ocirc;ng ty đ&atilde; lần lượt thay đổi c&aacute;c t&ecirc;n gọi:</p>\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<strong>31/10/1979</strong></td>\r\n			<td>\r\n				<strong>C&ocirc;ng Ty Vệ Sinh</strong> - Đơn vị sự nghiệp c&oacute; thu<br />\r\n				Hợp nhất 2 Sở Quản l&yacute; nh&agrave; đất v&agrave; C&ocirc;ng tr&igrave;nh cộng cộng.<br />\r\n				Theo Quyết định số 276/QĐ.UB ng&agrave;y 31/10/1979 của Ủy ban nh&acirc;n d&acirc;n TP Hồ Ch&iacute; Minh<br />\r\n				Tổng số CB CNV : 2585 người</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>11/09/1981</strong></td>\r\n			<td>\r\n				<strong>C&ocirc;ng Ty Vệ Sinh v&agrave; Mai T&aacute;ng</strong> - Đơn vị phục vụ c&ocirc;ng cộng<br />\r\n				Hợp nhất 2 C&ocirc;ng ty Vệ sinh v&agrave; C&ocirc;ng ty Mai t&aacute;ng<br />\r\n				Theo Quyết định số 181/QĐ.UB ng&agrave;y 11/9/1981 của Ủy ban nh&acirc;n d&acirc;n TP Hồ Ch&iacute; Minh<br />\r\n				Tổng số CB CNV : 2412 người</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>05/12/1992</strong></td>\r\n			<td>\r\n				<strong>C&ocirc;ng Ty Dịch Vụ C&ocirc;ng Cộng</strong> - Doanh nghiệp nh&agrave; nước<br />\r\n				Theo Quyết định 162/QĐ.UB ng&agrave;y 05/12/1992 của Ủy ban nh&acirc;n d&acirc;n TP Hồ Ch&iacute; Minh<br />\r\n				Tổng số CB CNV: 478 người</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>11/07/1997</strong></td>\r\n			<td>\r\n				<strong>C&ocirc;ng Ty TNHH M&ocirc;i Trường Đ&ocirc; Thị TP. HCM</strong> - Doanh nghiệp nh&agrave; nước hoạt động c&ocirc;ng &iacute;ch<br />\r\n				Theo Quyết định 3546/QĐ.UB.KT.CN ng&agrave;y 11/7/1997 của Ủy ban nh&acirc;n d&acirc;n TP Hồ Ch&iacute; Minh đến 12/10/2010:<br />\r\n				Tổng số CB CNV : 594 người.</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>13/10/2010</strong></td>\r\n			<td>\r\n				C&Ocirc;NG TY TNHH MỘT TH&Agrave;NH VI&Ecirc;N M&Ocirc;I TRƯỜNG Đ&Ocirc; THỊ TP. HCM</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	&nbsp;</p>\r\n', 12, 1410855743, 0, '', 'lich-su-hinh-thanh', 'gioi-thieu', NULL, NULL, NULL, NULL, NULL),
(3, 'THÀNH TÍCH', '<p>\r\n	Với hơn 38 năm hoạt động, ch&uacute;ng t&ocirc;i đ&atilde; gặt h&aacute;i được nhiều th&agrave;nh tưụ được nh&agrave; nước c&ocirc;ng nhận:</p>\r\n', '<p>\r\n	Với hơn 38 năm hoạt động, ch&uacute;ng t&ocirc;i đ&atilde; gặt h&aacute;i được nhiều th&agrave;nh tưụ được nh&agrave; nước c&ocirc;ng nhận:</p>\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>\r\n				<strong>1977</strong></td>\r\n			<td>\r\n				Hu&acirc;n chương lao động hạng III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>1978</strong></td>\r\n			<td>\r\n				Hu&acirc;n chương lao động hạng III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>1983</strong></td>\r\n			<td>\r\n				Hu&acirc;n chương lao động hạng III</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>1985</strong></td>\r\n			<td>\r\n				Hu&acirc;n chương lao động hạng II</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>2004</strong></td>\r\n			<td>\r\n				&Ocirc;ng Nguyễn Văn Đua, Ph&oacute; Chủ tịch UBND TP Hồ Ch&iacute; Minh trao bằng khen cho &Ocirc;ng Huỳnh Minh Nhựt - Gi&aacute;m đốc Cty TNHH MTV MTĐT về th&agrave;nh t&iacute;ch c&ocirc;ng t&aacute;c phục vụ vệ sinh đ&ocirc; thị Tết 2004</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>2005</strong></td>\r\n			<td>\r\n				&Ocirc;ng Nguyễn Văn Đua, Ph&oacute; Chủ tịch UBND TP Hồ Ch&iacute; Minh trao bằng khen cho &Ocirc;ng Huỳnh Minh Nhựt - Gi&aacute;m đốc Cty TNHH MTV MTĐT về th&agrave;nh t&iacute;ch c&ocirc;ng t&aacute;c phục vụ vệ sinh đ&ocirc; thị Tết Ất Dậu 2005</td>\r\n		</tr>\r\n		<tr>\r\n			<td>\r\n				<strong>2006</strong></td>\r\n			<td>\r\n				&Ocirc;ng Nguyễn Thiện Nh&acirc;n, Ph&oacute; Chủ tịch UBND TP Hồ Ch&iacute; Minh trao bằng khen cho &Ocirc;ng Huỳnh Minh Nhựt - Gi&aacute;m đốc Cty TNHH MTV MTĐT về th&agrave;nh t&iacute;ch c&ocirc;ng t&aacute;c phục vụ vệ sinh đ&ocirc; thị Tết B&iacute;nh Tuất 2006</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n<p>\r\n	Xem th&ecirc;m h&igrave;nh ảnh <a class="view_more" href="#">tại đ&acirc;y</a>.</p>\r\n', 13, 1410855782, 0, '', 'thanh-tich', 'gioi-thieu', NULL, NULL, NULL, NULL, NULL),
(4, 'XÍ NGHIỆP VẬN CHUYỂN SỐ 1', '<p>\r\n	<strong>Chức năng</strong></p>\r\n<p>\r\n	Quản l&yacute; điều h&agrave;nh trực tiếp l&agrave;m nhiệm vụ thu gom, x&uacute;c hốt, vận chuyển r&aacute;c, r&aacute;c cặn, bơm r&uacute;t hầm cầu&hellip; đưa đến b&atilde;i đổ tập trung.</p>\r\n', '<p>\r\n	<strong>Chức năng</strong></p>\r\n<p>\r\n	Quản l&yacute; điều h&agrave;nh trực tiếp l&agrave;m nhiệm vụ thu gom, x&uacute;c hốt, vận chuyển r&aacute;c, r&aacute;c cặn, bơm r&uacute;t hầm cầu&hellip; đưa đến b&atilde;i đổ tập trung.</p>\r\n<p>\r\n	<strong>Nhiệm vụ</strong></p>\r\n<p>\r\n	Thu gom, x&uacute;c hốt, vận chuyển r&aacute;c sinh hoạt tại c&aacute;c chợ, cơ quan, bệnh viện, trường học, khu chế xuất, khu c&ocirc;ng nghiệp v&agrave; r&aacute;c đường th&ugrave;ng tr&ecirc;n địa b&agrave;n c&aacute;c Quận B&igrave;nh Thạnh, Quận 2, Quận 7, Quận 9, Quận 12, Huyện Nh&agrave; B&egrave;.</p>\r\n<p>\r\n	Dọn quang r&aacute;c cặn tr&ecirc;n địa b&agrave;n Quận 2, Quận 7, Quận 9, Quận 12, Quận G&ograve; Vấp, Huyện Nh&agrave; B&egrave;, Hốc M&ocirc;n.</p>\r\n<p>\r\n	Dịch vụ r&uacute;t hầm cầu cho c&aacute;c cơ quan, bệnh viện, trường học, c&aacute;c hộ d&acirc;n v&agrave; dịch vụ nh&agrave; vệ sinh lưu động theo y&ecirc;u cầu.</p>\r\n<p>\r\n	Dịch vụ thu gom, vận chuyển chất thải c&ocirc;ng nghiệp, chất thải nguy hại.</p>\r\n<p>\r\n	<strong>Nh&acirc;n sự</strong></p>\r\n<p>\r\n	Tổng số CB CNV: 258</p>\r\n<p>\r\n	<strong>Địa điểm - Qui m&ocirc;</strong></p>\r\n<p>\r\n	<strong>Văn ph&ograve;ng X&iacute; nghiệp Vận chuyển số 1</strong><br />\r\n	12 Quang Trung - Phường 11 - Quận G&ograve; Vấp<br />\r\n	Điện thoại: (08) 39966834 &ndash; 39968927 &ndash; 38958675<br />\r\n	Fax: (08) 39968926</p>\r\n<p>\r\n	<strong>Trạm trung chuyển r&aacute;c k&iacute;n Quang Trung</strong><br />\r\n	12 Quang Trung - Phường 11 - Quận G&ograve; Vấp</p>\r\n<p>\r\n	Trạm &eacute;p r&aacute;c k&iacute;n Phan Văn Trị<br />\r\n	348/26 Phan Văn Trị &ndash; Phường 11 &ndash; Quận B&igrave;nh Thạnh</p>\r\n<p>\r\n	Trạm &eacute;p r&aacute;c k&iacute;n Thanh Đa<br />\r\n	Cư x&aacute; Thanh Đa &ndash; Phường 27 Quận B&igrave;nhThạnh</p>\r\n<p>\r\n	Phương tiện chuy&ecirc;n d&ugrave;ng: 85 xe c&aacute;c lọai</p>\r\n<p>\r\n	04 xe x&uacute;c<br />\r\n	01 xe cần cuốc<br />\r\n	04 xe tải lớn<br />\r\n	26 xe &eacute;p lớn<br />\r\n	13 xe &eacute;p nhỏ<br />\r\n	26 xe hooklift, đầu k&eacute;o<br />\r\n	03 xe xuồng<br />\r\n	03 xe hầm cầu<br />\r\n	03 xe phục vụ<br />\r\n	01 xe rửa th&ugrave;ng<br />\r\n	03 xe tải cẩu<br />\r\n	Th&ugrave;ng container</p>\r\n<p>\r\n	<strong>Thiết bị</strong></p>\r\n<p>\r\n	02 m&aacute;y &eacute;p r&aacute;c lớn<br />\r\n	01 c&acirc;n xe 30 tấn<br />\r\n	03 m&aacute;y &eacute;p r&aacute;c nhỏ<br />\r\n	01 m&aacute;y biến &aacute;p 560KW<br />\r\n	01 hệ thống phun sương thuốc khử m&ugrave;i</p>\r\n', 16, 1410856681, 0, '', 'xi-nghiep-van-chuyen-so-1', 'cty-mtdt', NULL, NULL, NULL, NULL, NULL),
(5, ' Đại Hội đại biểu Đoàn Thanh Niên Cộng Sản HCM, lần IV, nhiệm kỳ 2014-2017', '<p>\r\n	Ng&agrave;y 04/07/2014 đại hội đại biểu Đo&agrave;n Thanh ni&ecirc;n cộng sản Hồ Ch&iacute; Minh, lần IV, nhiệm kỳ 2014 - 2017 đ&atilde; long trọng tổ chức tại Hội trường Văn Ph&ograve;ng c&ocirc;ng ty TNHH MTV M&ocirc;i trường Đ&ocirc; thị TpHCM...</p>\r\n', '<p>\r\n	Ng&agrave;y 04/07/2014 đại hội đại biểu Đo&agrave;n Thanh ni&ecirc;n cộng sản Hồ Ch&iacute; Minh, lần IV, nhiệm kỳ 2014 - 2017 đ&atilde; long trọng tổ chức tại Hội trường Văn Ph&ograve;ng c&ocirc;ng ty TNHH MTV M&ocirc;i trường Đ&ocirc; thị TpHCM...</p>\r\n', 30, 1410878993, 1, 'images_05a28853c024a0fbffff221f3c2b2ac0.jpg', 'dai-hoi-dai-bieu-doan-thanh-nien-cong-san-hcm-lan-iv-nhiem-ky-2014-2017', 'su-kien', NULL, NULL, NULL, NULL, NULL),
(6, 'Hội nghị Sơ kết công tác 6 tháng đầu năm và Lễ trao tặng Huy hiệu 30 năm tuổi Đảng', '<p>\r\n	Hội nghị Sơ kết c&ocirc;ng t&aacute;c 6 th&aacute;ng đầu năm v&agrave; Lễ trao tặng Huy hiệu 30 năm tuổi Đảng diễn ra v&agrave;o ng&agrave;y 22/07/2014 tại hội trường C&ocirc;ng ty M&ocirc;i trường Đ&ocirc; thị TpHCM..</p>\r\n', '<p>\r\n	Hội nghị Sơ kết c&ocirc;ng t&aacute;c 6 th&aacute;ng đầu năm v&agrave; Lễ trao tặng Huy hiệu 30 năm tuổi Đảng diễn ra v&agrave;o ng&agrave;y 22/07/2014 tại hội trường C&ocirc;ng ty M&ocirc;i trường Đ&ocirc; thị TpHCM..</p>\r\n', 30, 1410879059, 1, 'images_c42faa396c1081f86cae56061313aeba.jpg', 'hoi-nghi-so-ket-cong-tac-6-thang-dau-nam-va-le-trao-tang-huy-hieu-30-nam-tuoi-dang', 'su-kien', NULL, NULL, NULL, NULL, NULL),
(7, 'Chất thải sinh hoạt', '<p>\r\n	Thu gom, vận chuyển chất thải sinh hoạt, thức ăn thừa. Cho thu&ecirc; thiết bị lưu chứa r&aacute;c c&aacute;c loại: th&ugrave;ng 240 l&iacute;t, 660 l&iacute;t, xuồng 4m3, 8m3. Vệ sinh nh&agrave; chứa r&aacute;c.</p>\r\n', '<p>\r\n	<strong>Loại h&igrave;nh dịch vụ</strong></p>\r\n<p>\r\n	Thu gom, vận chuyển chất thải sinh hoạt, thức ăn thừa.<br />\r\n	Cho thu&ecirc; thiết bị lưu chứa r&aacute;c c&aacute;c loại: th&ugrave;ng 240 l&iacute;t, 660 l&iacute;t, xuồng 4m3, 8m3.<br />\r\n	Vệ sinh nh&agrave; chứa r&aacute;c.</p>\r\n<p>\r\n	<strong>Qui định ph&aacute;p luật</strong></p>\r\n<p>\r\n	Quyết định số 88/2008/QĐ-UBND của Ủy Ban Nh&acirc;n d&acirc;n Tp.HCM ng&agrave;y 20/12/2008 của Ủy Ban nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh v/v ban h&agrave;nh thu ph&iacute; vệ sinh v&agrave; ph&iacute; bảo vệ m&ocirc;i trường đối với chất thải rắn tr&ecirc;n địa b&agrave;n th&agrave;nh phố.<br />\r\n	<a href="#">Tải về</a></p>\r\n<p>\r\n	Văn bản số 7345/LCQ-TNMT-TC-CT ng&agrave;y 7/10/2009 của li&ecirc;n Sở T&agrave;i Nguy&ecirc;n M&ocirc;i Trường, Sở T&agrave;i Ch&iacute;nh v&agrave; Cục thuế Tp.HCM v/v hướng dẫn thực hiện quyết định 88.<br />\r\n	<a href="#">Tải về</a></p>\r\n<p>\r\n	<strong>Biểu mẫu hợp đồng</strong></p>\r\n<p>\r\n	Mẫu hợp đồng, nghiệm thu thanh to&aacute;n<br />\r\n	<a href="/data/87841ebe81c8fa6890a91ed6f7ad9240.doc">Tải về</a></p>\r\n', 24, 1410936781, 0, 'images_eae4f04e480257936d567803bbb94425.jpg', 'chat-thai-sinh-hoat', 'san-pham-dich-vu', 70, '', NULL, NULL, NULL),
(8, 'Chất thải công nghiệp không nguy hại', '<p>\r\n	Thu gom, vận chuyển chất thải sinh hoạt, thức ăn thừa Cho thu&ecirc; thiết bị lưu chứa r&aacute;c c&aacute;c loại: th&ugrave;ng 240 l&iacute;t, 660 l&iacute;t, xuồng 4m3, 8m3 Vệ sinh nh&agrave; chứa r&aacute;c</p>\r\n', '<p>\r\n	<strong>Loại h&igrave;nh dịch vụ</strong></p>\r\n<p>\r\n	Thu gom, vận chuyển chất thải sinh hoạt, thức ăn thừa.<br />\r\n	Cho thu&ecirc; thiết bị lưu chứa r&aacute;c c&aacute;c loại: th&ugrave;ng 240 l&iacute;t, 660 l&iacute;t, xuồng 4m3, 8m3<br />\r\n	Vệ sinh nh&agrave; chứa r&aacute;c</p>\r\n<p>\r\n	<strong>Qui định ph&aacute;p luật</strong></p>\r\n<p>\r\n	Quyết định số 88/2008/QĐ-UBND của Ủy Ban Nh&acirc;n d&acirc;n Tp.HCM ng&agrave;y 20/12/2008 của Ủy Ban nh&acirc;n d&acirc;n Th&agrave;nh phố Hồ Ch&iacute; Minh v/v ban h&agrave;nh thu ph&iacute; vệ sinh v&agrave; ph&iacute; bảo vệ m&ocirc;i trường đối với chất thải rắn tr&ecirc;n địa b&agrave;n th&agrave;nh phố.<br />\r\n	<a href="/data/46ddf11888b9850a7ada097994a99bf6.docx">Tải về</a></p>\r\n<p>\r\n	Văn bản số 7345/LCQ-TNMT-TC-CT ng&agrave;y 7/10/2009 của li&ecirc;n Sở T&agrave;i Nguy&ecirc;n M&ocirc;i Trường, Sở T&agrave;i Ch&iacute;nh v&agrave; Cục thuế Tp.HCM v/v hướng dẫn thực hiện quyết định 88<br />\r\n	<a href="#">Tải về</a></p>\r\n<p>\r\n	<strong>Biểu mẫu hợp đồng</strong></p>\r\n<p>\r\n	Mẫu hợp đồng, nghiệm thu thanh to&aacute;n<br />\r\n	<a href="/data/63e6edea916d9f706cad15785dca30c2.doc">Tải về</a></p>\r\n', 24, 1410937153, 0, 'images_937503cb8b1788521dedd2cb64674486.jpg', 'chat-thai-cong-nghiep-khong-nguy-hai', 'san-pham-dich-vu', 70, '', NULL, NULL, NULL),
(9, 'Hội thi Tuyên truyền - “Bác Hồ trong trái tim tôi”', '<p>\r\n	Ng&agrave;y 14/05/2014 tại hội trường c&ocirc;ng ty đ&atilde; diễn ra Hội thi Tuy&ecirc;n truyền &ldquo;B&aacute;c Hồ trong tr&aacute;i tim t&ocirc;i&rdquo;...</p>\r\n', '<p>\r\n	Ng&agrave;y 14/05/2014 tại hội trường c&ocirc;ng ty đ&atilde; diễn ra Hội thi Tuy&ecirc;n truyền &ldquo;B&aacute;c Hồ trong tr&aacute;i tim t&ocirc;i&rdquo;...</p>\r\n', 30, 1411024940, 0, 'images_d6bc260df16f49b54ce493acd5898581.jpg', 'hoi-thi-tuyen-truyen-bac-ho-trong-trai-tim-toi', 'su-kien', NULL, NULL, '', 'Hội thi Tuyên truyền - “Bác Hồ trong trái tim tôi”', ''),
(10, 'Giới thiệu', '', '<p>\r\n	Cty TNHH MTV M&ocirc;i Trường Đ&ocirc; Thị TP HCM xin ch&acirc;n th&agrave;nh c&aacute;m ơn sự quan t&acirc;m, ủng hộ của qu&yacute; kh&aacute;ch đến c&aacute;c hoạt động của ch&uacute;ng t&ocirc;i.</p>\r\n<p>\r\n	L&agrave; doanh nghiệp TNHH Một th&agrave;nh vi&ecirc;n với 100% vốn nh&agrave; nước hoạt động trong lĩnh vực dịch vụ vệ sinh v&agrave; bảo vệ m&ocirc;i trường, ch&uacute;ng t&ocirc;i c&oacute; bề d&agrave;y kinh nghiệm hơn 38 năm, c&oacute; đội ngũ chuy&ecirc;n vi&ecirc;n, kỹ sư gi&agrave;u kinh nghiệm v&agrave; s&aacute;ng tạo, c&oacute; lực lương c&ocirc;ng nh&acirc;n chuy&ecirc;n nghiệp đ&aacute;p ứng mọi y&ecirc;u cầu của kh&aacute;ch hang.</p>\r\n<p>\r\n	Với cơ sở vật chất trải đều tr&ecirc;n to&agrave;n Th&agrave;nh phố, với năng lực thiết bị, c&ocirc;ng nghệ ti&ecirc;n tiến, phương tiện hiện đại Cty ch&uacute;ng t&ocirc;i đủ khả năng phục vụ trọn g&oacute;i c&aacute;c dịch vụ vệ sinh m&ocirc;i trường cho c&aacute;c c&aacute; nh&acirc;n, doanh nghiệp, c&aacute;c khu d&acirc;n cư lớn, khu đ&ocirc; thị, khu c&ocirc;ng nghiệp với tất cả c&aacute;c dịch vụ từ: qu&eacute;t dọn vệ sinh; thu gom, vận chuyển, xử l&yacute; r&aacute;c sinh hoạt, r&aacute;c y tế, r&aacute;c c&ocirc;ng nghiệp, chất thải nguy hại; r&uacute;t hầm cầu v&agrave; c&aacute;c dịch vụ vệ sinh m&ocirc;i trường kh&aacute;c&hellip;</p>\r\n<p>\r\n	Với phương ch&acirc;m hoạt động VƯƠN TỚI M&Ocirc;I TRƯỜNG SẠCH HƠN ch&uacute;ng t&ocirc;i đ&atilde; x&acirc;y dựng v&agrave; đạt được c&aacute;c chứng chỉ quản l&yacute; chất lượng theo ti&ecirc;u chuẩn ISO 9001: 2000&amp; ISO 14000:2004 do tổ chức BIS chứng nhận.</p>\r\n', 11, 1411026009, 0, '', 'gioi-thieu', 'gioi-thieu', NULL, NULL, 'gioi thieu citenco', 'Loi gioi thieu', 'gioi thieu citenco'),
(11, 'Thu gom, vận chuyển rác sinh hoạt', '<p>\r\n	R&aacute;c sinh hoạt từ hộ d&acirc;n, doanh nghiệp, trường học, chợ&hellip; được lưu chứa trong c&aacute;c thiết bị lưu chứa chuyển đến c&aacute;c điểm tập kết chuyển l&ecirc;n c&aacute;c xe &eacute;p r&aacute;c chuy&ecirc;n d&ugrave;ng...</p>\r\n', '<p>\r\n	<strong>1. M&ocirc; tả:</strong></p>\r\n<p>\r\n	R&aacute;c sinh hoạt từ hộ d&acirc;n, doanh nghiệp, trường học, chợ&hellip; được lưu chứa trong c&aacute;c thiết bị lưu chứa chuyển đến c&aacute;c điểm tập kết chuyển l&ecirc;n c&aacute;c xe &eacute;p r&aacute;c chuy&ecirc;n d&ugrave;ng chuyển về c&aacute;c trạm trung chuyển k&iacute;n sau đ&oacute; r&aacute;c được m&aacute;y &eacute;p r&aacute;c nạp v&agrave;o c&aacute;c contener k&iacute;n v&agrave; được xe chuy&ecirc;n d&ugrave;ng chuyển đổ tại c&aacute;c c&ocirc;ng trường xử l&yacute; r&aacute;c tập trung của Th&agrave;nh phố. To&agrave;n bộ qu&aacute; tr&igrave;nh thu gom, vận chuyển : r&aacute;c được chứa trong c&aacute;c thiết bị k&iacute;n tr&aacute;nh việc rơi v&atilde;i v&agrave; ph&aacute;t t&aacute;n m&ugrave;i h&ocirc;i, nước r&aacute;c được thu gom, lưu chứa sau đ&oacute; chuyển đến nh&agrave; m&aacute;y xử l&yacute; nước r&aacute;c</p>\r\n<p style="text-align: center;">\r\n	<strong>Quy tr&igrave;nh thu gom, xử l&yacute; chất thải rắn sinh hoạt</strong></p>\r\n<p style="text-align: center;">\r\n	<img alt="Thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/sodo-cn.png" style="width: 300px; height: 600px;" /></p>\r\n<p>\r\n	<strong>2. Thiết bị ch&iacute;nh:</strong></p>\r\n<p>\r\n	<strong>2.1. Phương tiện chuy&ecirc;n d&ugrave;ng thu gom r&aacute;c sinh hoạt</strong></p>\r\n<p>\r\n	C&aacute;c loại th&ugrave;ng lưu chứa từ 240 &ndash; 660 l&iacute;t<br />\r\n	Xe &eacute;p r&aacute;c trọng tải từ 2 &ndash; 10 tấn</p>\r\n<p>\r\n	<strong>2.2. Trạm &eacute;p r&aacute;c k&iacute;n</strong></p>\r\n<p>\r\n	Quy tr&igrave;nh vận h&agrave;nh trạm &eacute;p r&aacute;c k&iacute;n:<br />\r\n	R&aacute;c sinh hoạt được c&aacute;c xe &eacute;p r&aacute;c, xe th&ocirc; sơ chở đến trạm đổ v&agrave;o m&aacute;ng nạp của m&aacute;y &eacute;p r&aacute;c v&agrave; được m&aacute;y &eacute;p v&agrave;o c&aacute;c container k&iacute;n lớn nhằm giảm thể t&iacute;ch, khi đầy r&aacute;c container được c&aacute;c đầu k&eacute;o hooklift k&eacute;o ra b&atilde;i container chờ c&aacute;c đầu k&eacute;o k&eacute;o đến c&ocirc;ng trường xử l&yacute; theo giờ qui định.</p>\r\n<p>\r\n	M&aacute;y &eacute;p r&aacute;c :<br />\r\n	Do C&ocirc;ng ty MTĐT nghi&ecirc;n cứu, thiết kế v&agrave; chế tạo th&agrave;nh c&ocirc;ng. M&aacute;y gồm thiết bị &eacute;p r&aacute;c rời với bộ phận ph&aacute;t thuỷ lực gồm động cơ điện v&agrave; bơm thủy lực đảm bảo hoạt động h&agrave;ng ng&agrave;y. To&agrave;n bộ qu&aacute; tr&igrave;nh điều khiển c&aacute;c thao t&aacute;c: &eacute;p r&aacute;c, n&acirc;ng đổ g&agrave;u chứa r&aacute;c, đ&oacute;ng mở kh&oacute;a b&agrave;n &eacute;p, n&acirc;ng hạ của g&agrave;u, kết nối đầu &eacute;p v&agrave; container được điều khiển bằng điện th&ocirc;ng qua một m&aacute;y t&iacute;nh trung t&acirc;m.<br />\r\n	Khối lượng 1 container l&agrave; 15 tấn.<br />\r\n	Thời gian &eacute;p 1 container l&agrave; 14 ph&uacute;t.<br />\r\n	C&ocirc;ng suất trạm &eacute;p 630 tấn/ng&agrave;y.</p>\r\n<p>\r\n	<img alt="thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/cn1.jpg" style="width: 120px; height: 140px;" />&nbsp;&nbsp;<img alt="thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/cn2.jpg" style="width: 160px; height: 120px;" />&nbsp;&nbsp;<img alt="thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/cn3.jpg" style="width: 160px; height: 120px;" /></p>\r\n<p>\r\n	Container k&iacute;n chứa r&aacute;c:<br />\r\n	Được nghi&ecirc;n cứu chế tạo trong nước với thể t&iacute;ch chứa: 25 m3, tải trọng 15 tấn.</p>\r\n<p>\r\n	<img alt="thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/cn4.jpg" style="width: 160px; height: 120px;" />&nbsp;&nbsp;<img alt="thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/cn5.jpg" style="width: 160px; height: 120px;" />&nbsp;&nbsp;<img alt="thu gom, vận chuyển rác thải sinh hoạt" src="/ecommercefloor/Source/data/upload_img/images/cn6.jpg" style="width: 160px; height: 120px;" /></p>\r\n<p>\r\n	Trạm xử l&yacute; nước thải:<br />\r\n	Được x&acirc;y dựng nhằm thu gom, xử l&yacute; nước thải r&aacute;c v&agrave; nước rửa s&agrave;n trong khi vận h&agrave;nh trạm &eacute;p k&iacute;n bằng phương ph&aacute;p qua bể lắng, bể điều h&ograve;a c&oacute; khuấy trộn bằng kh&iacute; n&eacute;n để điều h&ograve;a lưu lượng v&agrave; nồng độ bẩn của nước thải, khử tr&ugrave;ng bằng DD clorine.<br />\r\n	Ngo&agrave;i ra c&ograve;n c&aacute;c thiết bị phụ trợ như nh&agrave; xưởng, cầu c&acirc;n xe trọng tải 30 tấn, trạm biến &aacute;p 560 KVA, m&aacute;y bơm cho việc vệ sinh, thiết bị xử l&yacute; m&ugrave;i h&ocirc;i, m&aacute;y thổi kh&iacute;.</p>\r\n<p>\r\n	<strong>2.3. Xe contener chuy&ecirc;n d&ugrave;ng vận chuyển contener</strong></p>\r\n', 26, 1411706304, 0, 'images_2ae409d6192626c2312cf356e34920f2.jpg', 'thu-gom-van-chuyen-rac-sinh-hoat', 'du-an-cong-nghe', NULL, '', NULL, NULL, NULL),
(12, 'Công nghệ xử lý rác sinh hoạt bằng phương pháp chôn lấp hợp vệ sinh', '<p>\r\n	R&aacute;c sinh hoạt chuyển đến c&aacute;c c&ocirc;ng trường xử l&yacute; với c&ocirc;ng nghệ ch&ocirc;n lấp hợp vệ sinh nhằm đảm bảo kh&ocirc;ng g&acirc;y t&aacute;c động nguy hại đối với m&ocirc;i trường đất, nước mặt, nước ngầm v&agrave; kh&ocirc;ng kh&iacute;...</p>\r\n', '<p>\r\n	<strong>1. Mục đ&iacute;ch:</strong></p>\r\n<p>\r\n	R&aacute;c sinh hoạt chuyển đến c&aacute;c c&ocirc;ng trường xử l&yacute; với c&ocirc;ng nghệ ch&ocirc;n lấp hợp vệ sinh nhằm đảm bảo kh&ocirc;ng g&acirc;y t&aacute;c động nguy hại đối với m&ocirc;i trường đất, nước mặt, nước ngầm v&agrave; kh&ocirc;ng kh&iacute;, kh&ocirc;ng ảnh hưởng đến đời sống cộng đồng d&acirc;n cư n&oacute;i chung v&agrave; khu vực dự &aacute;n n&oacute;i ri&ecirc;ng trong suốt thời gian tồn tại của b&atilde;i r&aacute;c kể cả sau khi đ&oacute;ng b&atilde;i.</p>\r\n<p>\r\n	<strong>2. M&ocirc; tả c&ocirc;ng nghệ</strong></p>\r\n<p>\r\n	Hố ch&ocirc;n lấp r&aacute;c được x&acirc;y dựng v&agrave; lắp đặt lớp l&oacute;t đ&aacute;y to&agrave;n bộ b&atilde;i r&aacute;c bằng vật liệu chống thấm HDPE để ngăn chặn khả năng g&acirc;y &ocirc; nhiễm nguồn nước ngầm v&agrave; nước mặt do hiện tượng thấm theo chiều thẳng đứng, thấm ngang của nước r&aacute;c.</p>\r\n<p>\r\n	Trong suốt qu&aacute; tr&igrave;nh hoạt động r&aacute;c được chuyển từ s&agrave;n trung chuyển v&agrave;o &ocirc; ch&ocirc;n lấp v&agrave; đổ theo từng lớp, được san ủi, đầm n&eacute;n theo đ&uacute;ng quy tr&igrave;nh kỹ thuật v&agrave; phủ lớp phủ trung gian nhằm giảm thiểu m&ugrave;i h&ocirc;i, tr&aacute;nh ph&aacute;t sinh ruồi, c&ocirc;n tr&ugrave;ng v&agrave; t&aacute;ch nước mưa. Nước r&ograve; rỉ của b&atilde;i r&aacute;c được thu gom bằng hệ th&ocirc;ng ống thu lắp đặt tại đ&aacute;y b&atilde;i v&agrave; bơm về nh&agrave; m&aacute;y xử l&yacute; nước r&aacute;c với c&ocirc;ng nghệ th&iacute;ch hợp cho ph&eacute;p nước rỉ b&atilde;i r&aacute;c sau khi xử l&yacute; đạt y&ecirc;u cầu xả thải ra nguồn loại B theo QCVN 24, 25:2009/BTNMT.</p>\r\n<p>\r\n	Hệ thống ống thu kh&iacute; b&atilde;i r&aacute;c được thi c&ocirc;ng v&agrave; lắp đặt từ đầu v&agrave; ho&agrave;n thiện theo qu&aacute; tr&igrave;nh vận h&agrave;nh b&atilde;i r&aacute;c bảo đảm việc thu gom to&agrave;n bộ kh&iacute; tho&aacute;t ra từ b&atilde;i r&aacute;c nhằm chiết xuất gas phục vụ sản xuất điện v&agrave; xử l&yacute; loại bỏ c&aacute;c kh&iacute; độc hại g&acirc;y &ocirc; nhiễm g&acirc;y hiệu ứng nh&agrave; k&iacute;nh v&agrave; nguy cơ ch&aacute;y nổ.</p>\r\n<p>\r\n	Việc thiết kế, thi c&ocirc;ng x&acirc;y dựng b&atilde;i ch&ocirc;n lấp đảm bảo xử l&yacute; c&aacute;c vấn đề về l&uacute;n đất, trượt đất.</p>\r\n<p style="text-align: center;">\r\n	<img alt="Thu gom, vận chuyển rác thải môi trường" src="/ecommercefloor/Source/data/upload_img/images/sodo-cn2.png" style="width: 100%;" /></p>\r\n<p style="text-align: center;">\r\n	<img alt="Thu gom, vận chuyển rác thải môi trường" src="/ecommercefloor/Source/data/upload_img/images/cn7(1).jpg" style="width: 100%;" /></p>\r\n', 26, 1411707362, 0, 'images_e7719c19942782d7331b70a99b0ed549.jpg', 'cong-nghe-xu-ly-rac-sinh-hoat-bang-phuong-phap-chon-lap-hop-ve-sinh', 'du-an-cong-nghe', NULL, '', NULL, NULL, NULL),
(13, 'XÍ NGHIỆP VẬN CHUYỂN SỐ 2', '', '<p>\r\n	<strong>Chức năng</strong></p>\r\n<p>\r\n	Quản l&yacute; điều h&agrave;nh trực tiếp l&agrave;m nhiệm vụ thu gom, x&uacute;c hốt, vận chuyển r&aacute;c, dọn quang r&aacute;c cặn &hellip; đưa đến b&atilde;i đổ tập trung.</p>\r\n<p>\r\n	<strong>Nhiệm vụ</strong></p>\r\n<p>\r\n	Thu gom, x&uacute;c hốt, vận chuyển r&aacute;c sinh hoạt tại c&aacute;c chợ, cơ quan, bệnh viện, trường học, khu chế xuất, khu c&ocirc;ng nghiệp, r&aacute;c đường th&ugrave;ng v&agrave; dọn quang x&agrave; bần, r&aacute;c cặn tr&ecirc;n địa b&agrave;n c&aacute;c Quận 10, Quận 11, Quận T&acirc;n Ph&uacute;, Huyện B&igrave;nh Ch&aacute;nh.</p>\r\n<p>\r\n	Qu&eacute;t dọn, thu gom, vận chuyển r&aacute;c sinh hoạt tr&ecirc;n to&agrave;n bộ địa b&agrave;n Quận T&acirc;n Ph&uacute;.<br />\r\n	Dịch vụ thu gom, vận chuyển chất thải c&ocirc;ng nghiệp, chất thải nguy hại.</p>\r\n<p>\r\n	<strong>Nh&acirc;n lực</strong></p>\r\n<p>\r\n	Tổng số CB CNV: 385</p>\r\n<p>\r\n	<strong>Địa điểm - Qui m&ocirc;</strong></p>\r\n<p>\r\n	<strong>Văn ph&ograve;ng X&iacute; nghiệp Vận chuyển số 2</strong><br />\r\n	Số 01 Tống Văn Tr&acirc;n - Phường 5 - Quận 11<br />\r\n	Điện thoại: (08) 38653614 - 38619857 - 38618818<br />\r\n	Fax: (08) 38618818</p>\r\n<p>\r\n	<strong>Trạm trung chuyển r&aacute;c Tống Văn Tr&acirc;n</strong><br />\r\n	Số 01 Tống Văn Tr&acirc;n - Phường 5 - Quận 11</p>\r\n<p>\r\n	Phương tiện chuy&ecirc;n d&ugrave;ng: 78 xe c&aacute;c lọai</p>\r\n<p>\r\n	04 xe x&uacute;c<br />\r\n	15 xe &eacute;p lớn<br />\r\n	32 xe &eacute;p nhỏ<br />\r\n	15 xe hooklift, đầu k&eacute;o<br />\r\n	06 xe tải benne nhỏ<br />\r\n	01 xe xuồng<br />\r\n	01 xe phục vụ<br />\r\n	03 xe cần cẩu<br />\r\n	01 xe r&uacute;t hầm cầu<br />\r\n	Th&ugrave;ng container</p>\r\n<p>\r\n	<strong>Thiết bị</strong></p>\r\n<p>\r\n	02 m&aacute;y &eacute;p r&aacute;c lớn<br />\r\n	01 c&acirc;n xe 30 tấn<br />\r\n	03 m&aacute;y &eacute;p r&aacute;c nhỏ<br />\r\n	01 m&aacute;y biến &aacute;p 560KW<br />\r\n	01 hệ thống phun sương thuốc khử m&ugrave;i</p>\r\n', 17, 1411721422, 0, '', 'xi-nghiep-van-chuyen-so-2', 'cty-mtdt', NULL, '', NULL, NULL, NULL),
(14, 'XÍ NGHIỆP XỬ LÝ CHẤT THẢI', '', '<p><b>Chức năng</b></p>\r\n							<p>\r\n								Quản lý điều hành trực tiếp làm nhiệm vụ xử lý các loại chất thải rắn, quản lý công trường xử lý rác, xà bần, xử lý nước rác, chế biến phân rác, sản xuất phân hữu cơ, sản xuất điện từ rác…\r\n							</p>\r\n							<p><strong>Nhiệm vụ</strong></p>\r\n							<p>\r\n								Điều hành hoạt động sản xuất kinh doanh, bảo đảm trật tự trị an, vệ sinh môi trường tại các công trường xử lý Đông Thạnh, Gò Cát, Phước Hiệp. <br>\r\n								Xử lý chất thải, nước thải tại các tại các công trường xử lý do Xí nghiệp quản lý theo qui trình công nghệ và qui định tiêu chuẩn chất lượng vệ sinh.<br>\r\n								 Nghiên cứu tái chế sản phẩm từ rác, chế biến sản xuất phân rác, phân hữu cơ.<br>\r\n								 Vận hành, bảo trì, bảo dưỡng hệ thống trạm phát điện từ rác\r\n							</p>\r\n							<p><strong>Địa điểm</strong></p>\r\n							<p><strong>Xí nghiệp Xử lý chất thải</strong><br>\r\n								Địa chỉ: 377 Lê Văn Khương, Phường Hiệp Thành, Quận 12<br>\r\n								Điện thoại: (08) 37176016<br>\r\n								Fax : (08) 37175812\r\n							</p>\r\n							<p><strong>Nhân lực</strong></p>\r\n\r\n							<p>Tổng số CB CNV: 349</p>\r\n\r\n							<p><strong>Cơ sở hạ tầng</strong></p>\r\n\r\n							<p><strong>Công trường xử lý xà bần</strong><br>\r\n							Đông Thạnh – Huyện Hốc Môn<br>\r\n							Diện tích 40 ha – Đang tiếp nhận xà bần toàn thành phố\r\n							</p>\r\n\r\n							<p><strong>Công trường xử lý chất thải rắn Gò Cát – Quận Bình Tân</strong><br>\r\n							Diện tích 25 ha ; 5 ô chôn lấp 17,5 ha – Công suất 2000 – 2200 tấn/ngày</p>\r\n\r\n							<p><strong>Trạm phát điện từ khí thải rác</strong><br>\r\n							Diện tích 45 ha ; ô chôn lấp rác 19 ha – Công suất 3000 tấn/ngày</p>\r\n\r\n							<p><strong>Trạm xử lý nước rỉ từ rác</strong></p>\r\n							<p><strong>Trạm phát điện</strong></p>\r\n							<p><strong>Phương tiện chuyên dùng: 32 xe các loại</strong></p>\r\n							<p>04 xe xúc<br>\r\n							    06 xe ủi<br>\r\n							    04 xe tải nặng<br>\r\n							    02 xe đầm<br>\r\n							    05 xe đào<br>\r\n							    01 xe kéo<br>\r\n							    01 xe xuồng<br>\r\n							    01 xe cầu<br>\r\n							    04 xe bồn<br>\r\n							    04 xe phục vụ\r\n							</p>', 20, 1411721769, 0, '', 'xi-nghiep-xu-ly-chat-thai', 'cty-mtdt', NULL, '', NULL, NULL, NULL),
(15, 'XN DỊCH VỤ MÔI TRƯỜNG', '', '<p>Xí nghiệp Dịch vụ Môi trường được thành lập vào ngày 01/7/2000</p>\r\n							<p><strong>Lịch sử hình thành và phát triển</strong></p>\r\n							<p>\r\n								Tiền thân là Đội Mai táng Nghĩa trang (MTNT), Xí nghiệp dịch vụ Môi trường ngày nay luôn gắn liền với sự phát triển của Công ty Môi trường Đô thị. Mỗi giai đoạn đều có sự đánh dấu trưởng thành lớn mạnh:	\r\n							</p>\r\n							<p>1979 – 1990 gắn liền với sự phát triển của nghĩa trang, trung tâm hỏa táng đầu tiên Bình Hưng Hòa<br>\r\n								1990 – 2000 : thu gom, vận chuyển, xử lý rác y tế, trung tâm hỏa táng bằng gas<br>\r\n							 2000 – 2010 : giai đoạn phát triển mạnh các lĩnh vực, ngành nghề, trong đó có xử lý chất thải nguy hại.\r\n							</p>\r\n							<p>Trong 10 năm qua, Xí nghiệp luôn hoàn thành xuất sắc nhiệm vụ công ty giao, mặc dù gặp không ít các khó khăn.</p>\r\n							<p>\r\n								Các dịch vụ chính: thu gom – vận chuyển – xử lý rác y tế, hỏa táng, nghĩa trang đều tăng hằng năm với tỉ lệ từ 3% đến 5%. Các công tác nhặt, bảo quản và xử lý tử thi vô thừa nhận phục vụ pháp y thành phố đều được tổ chức thực hiện tốt. Ngoài ra đơn vị còn thực hiện them các dịch vụ khác như di dời mồ mã, giải tỏa nghĩa trang, vệ sinh công nghiệp…\r\n							</p>\r\n							<p>Từ năm 2002, đơn vị đã duy trì và áp dụng cải tiến liên tục hệ thống quản lý chất lượng ISO 9000:2000 để đáp ứng nhu cầu của khách hang cơ sở y tế và nâng cao chất lượng phục vụ nhân dân ở các lĩnh vực hỏa táng, nghĩa trang. Hiện nay, đơn vị đã cơ bản hoàn tất việc chuyển đổi vá áp dụng hệ thống chất lượng ISO 9001:2008</p>\r\n							<p>Thực hiện được 16 sáng kiến, cải tiến kỹ thuật với giá trị làm lợi trên 500 triệu đồng, trong đó có 01 sáng kiến chế tạo lò hỏa táng loại nhỏ rất hiệu quả, góp phần xử lý các loại quách và cốt cho nhân dân.</p>\r\n							<p><strong>Đầu tư trong 10 năm qua</strong></p>\r\n\r\n							<p>Năm 2000: 01 nhà máy Hoval 7,5 tấn để xử lý rác y tế; 04 lò hỏa táng Pyrotex<br>\r\n							    Năm 2002: 04 lò hỏa táng Pyrotex<br>\r\n							    Năm 2004: nhà máy xử lý chất thải công nghiệp Macroburn 4 tấn /ngày; nghĩa trang Đa Phước giai đoạn 1 diện tích 7,5 ha<br>\r\n							    Năm 2005: 03 lò hỏa táng B&L và thành lập trung tâm hỏa táng Đa Phước\r\n							    Năm 2007: đầu tư 02 lò Craford<br>\r\n							    Năm 2009: thành lập trung tâm hỏa táng An Phước Viên – Đà Nẵng đầu tư 2 lò hỏa táng Craford.<br>\r\n							    Năm 2010: đầu tư lò đốt chất thải nguy hại 21 tấn/ngày\r\n							</p>\r\n\r\n							<p>Tiếp nối truyền thống với truyền thống vẻ vang của dân tộc, Xí nghiệp dịch vụ Môi trường luôn cố gắng hoàn thành tốt trách nhiệm của một đơn vị Nhà nước hoạt động trong lĩnh vực Môi trường. Giữ gìn cho cuộc sống người dân thành phố mang tên Bác được sạch sẽ và góp phần xây dựng thành phố ngày càng giàu đẹp.</p>', 19, 1411721798, 0, '', 'xn-dich-vu-moi-truong', 'cty-mtdt', NULL, '', NULL, NULL, NULL),
(16, 'XÍ NGHIỆP VẬN CHUYỂN SỐ 3', '', '<p>\r\n	<strong>Chức năng</strong></p>\r\n<p>\r\n	Quản l&yacute; điều h&agrave;nh trực tiếp l&agrave;m nhiệm vụ thu gom, x&uacute;c hốt, vận chuyển x&agrave; bần, r&aacute;c cặn &hellip; đưa đến b&atilde;i đổ tập trung.</p>\r\n<p>\r\n	Thu gom v&agrave; xử l&yacute; chất thải nguy hại.</p>\r\n<p>\r\n	<strong>Nhiệm vụ</strong></p>\r\n<p>\r\n	Thu gom, x&uacute;c hốt, vận chuyển x&agrave; bần, r&aacute;c cặn tr&ecirc;n l&ograve;ng lề đường, gốc c&acirc;y, bờ tường gầm cầu tr&ecirc;n to&agrave;n địa b&agrave;n th&agrave;nh phố.</p>\r\n<p>\r\n	Thu gom, vận chuyển x&agrave; bần, r&aacute;c x&acirc;y dựng cho c&aacute;c hộ d&acirc;n, cơ quan, đơn vị, trường học, kh&aacute;ch sạn, nh&agrave; h&agrave;ng, c&aacute;c c&ocirc;ng tr&igrave;nh x&acirc;y dựng v&agrave; c&aacute;c khu chế xuất, khu c&ocirc;ng nghiệp</p>\r\n<p>\r\n	<strong>Nh&acirc;n lực</strong></p>\r\n<p>\r\n	Tổng số CB CNV: 194</p>\r\n<p>\r\n	<strong>Địa điểm - Qui m&ocirc;</strong></p>\r\n<p>\r\n	<strong>Văn ph&ograve;ng X&iacute; nghiệp Vận chuyển số 3</strong><br />\r\n	150 L&ecirc; Đại H&agrave;nh - Phường 7 - Quận 11<br />\r\n	Điện thoại: (08) 38557783 - 38555664<br />\r\n	Fax: (08) 38557783</p>\r\n<p>\r\n	<strong>Trạm trung chuyển x&agrave; bần L&ecirc; Đại H&agrave;nh</strong><br />\r\n	150 L&ecirc; Đại H&agrave;nh - Phường 7 - Quận 11 - Điện thoại : 38557783</p>\r\n<p>\r\n	Thu gom, vận chuyển x&agrave; bần địa b&agrave;n c&aacute;c Quận 5, 12, T&acirc;n B&igrave;nh, T&acirc;n Ph&uacute;, Ph&uacute; Nhuận, Hốc M&ocirc;n.</p>\r\n<p>\r\n	<strong>Trạm trung chuyển x&agrave; bần B&agrave; Hom</strong><br />\r\n	75 B&agrave; Hom - Phường 13 - Quận 6 - Điện thoại : 38759297<br />\r\n	Thu gom, vận chuyển x&agrave; bần địa b&agrave;n c&aacute;c Quận 6, 7, 8, 10, 11, B&igrave;nh Ch&aacute;nh, B&igrave;nh T&acirc;n.</p>\r\n<p>\r\n	<strong>Trạm trung chuyển x&agrave; bần V&otilde; thị S&aacute;u</strong><br />\r\n	42-44 V&otilde; Thị S&aacute;u - Phường T&acirc;n Định - Quận 1 - Điện thoại: 38206249<br />\r\n	Thu gom, vận chuyển x&agrave; bần địa b&agrave;n c&aacute;c Quận 1, 2, 9, B&igrave;nh Thạnh, Thủ Đức, G&ograve; Vấp, Nh&agrave; B&egrave;.</p>\r\n<p>\r\n	<strong>Phương tiện chuy&ecirc;n d&ugrave;ng</strong></p>\r\n<p>\r\n	90 xe c&aacute;c lọai</p>\r\n<p>\r\n	02 xe x&uacute;c<br />\r\n	01 xe đ&agrave;o (Kobelco)<br />\r\n	04 xe cầu cạp<br />\r\n	44 xe tải lớn<br />\r\n	31 xe tải nhỏ<br />\r\n	01 xe xuồng Multicar<br />\r\n	06 xe qu&eacute;t h&uacute;t<br />\r\n	Th&ugrave;ng container</p>\r\n<p>\r\n	<strong>Thiết bị</strong></p>\r\n<p>\r\n	03 hệ thống trục container điện<br />\r\n	01 c&acirc;n xe 30 tấn<br />\r\n	02 c&acirc;n xe 15 tấn<br />\r\n	03 m&aacute;y ph&aacute;t điện 250 KW<br />\r\n	01 hệ thống phun sương chống bụi</p>\r\n', 18, 1411721842, 0, '', 'xi-nghiep-van-chuyen-so-3', 'cty-mtdt', NULL, '', NULL, NULL, NULL),
(17, 'Công nghệ thu gom và xử lý nước rác', '<p>\r\n	Thu gom triệt để nước r&aacute;c ph&aacute;t sinh từ qu&aacute; tr&igrave;nh vận h&agrave;nh b&atilde;i ch&ocirc;n lấp tr&aacute;nh việc r&ograve; rỉ nước rỉ r&aacute;c ra m&ocirc;i trương xung quanh. To&agrave;n bộ nước rỉ từ b&atilde;i ch&ocirc;n lấp được chuyển về ...</p>\r\n', '<p>\r\n	<strong>1. Mục đ&iacute;ch:</strong></p>\r\n<p>\r\n	Thu gom triệt để nước r&aacute;c ph&aacute;t sinh từ qu&aacute; tr&igrave;nh vận h&agrave;nh b&atilde;i ch&ocirc;n lấp tr&aacute;nh việc r&ograve; rỉ nước rỉ r&aacute;c ra m&ocirc;i trương xung quanh. To&agrave;n bộ nước rỉ từ b&atilde;i ch&ocirc;n lấp được chuyển về nh&agrave; m&aacute;y v&agrave; xử l&yacute; đạt ti&ecirc;u chuẩn xả thải ra nguồn tiếp nhận (theo QCVN 24, 25:2009/BTNMT)</p>\r\n<p>\r\n	<strong>2. Hệ thống thu gom nước r&aacute;c gồm:</strong></p>\r\n<p>\r\n	Hệ thống thu gom nước rỉ r&aacute;c bao gồm : C&aacute;c tuyến ống thu cấp 1 v&agrave; 2; Hố bơm trung chuyển v&agrave; trạm bơm trung chuyển; Ống chuyển tải nước thải từ trạm bơm trung chuyển về hồ điều h&ograve;a.</p>\r\n<p>\r\n	C&aacute;c ống thu cấp 1 l&agrave; loại ống HDPE r&atilde;nh xoắn, nối ren, chịu lực cao. C&aacute;c ống thu n&agrave;y được lắp đặt dọc theo chiều d&agrave;i &ocirc; ch&ocirc;n lấp v&agrave; đầu nối v&agrave;o đường ống thu cấp 2 đặt ngang &ocirc; ch&ocirc;n lắp nhằm chuyển nước r&aacute;c thu gom về hố ga trung chuyển.</p>\r\n<p>\r\n	Hố thu trung chuyển c&oacute; thể t&iacute;ch ph&ugrave; hợp với c&ocirc;ng suất bơm v&agrave; tổng lượng nước cần phải chuyển về hồ điều h&ograve;a của trạm xử l&yacute; để xử l&yacute; hết lượng nước rỉ r&aacute;c trong ng&agrave;y.</p>\r\n<p>\r\n	<strong>3. C&ocirc;ng nghệ xử l&yacute; nước r&aacute;c:</strong></p>\r\n<p>\r\n	Nước thải từ hố chứa được bơm v&agrave;o bể lắng. Tại đ&acirc;y diễn ra c&aacute;c qu&aacute; tr&igrave;nh ch&acirc;m v&ocirc;i, xục kh&iacute;, ch&acirc;m h&oacute;a chất tạo điều kiện tạo lắng sơ bộ cặn rắn lơ lửng v&agrave; c&aacute;c chất c&oacute; thể ảnh hưởng đến qu&aacute; tr&igrave;nh ph&acirc;n hủy hiếukh&iacute; về sau. Từ bể lắng v&ocirc;i, nước thải được bơm sang bể lắng sơ bộ.</p>\r\n<p>\r\n	Bể lắng sơ bộ c&oacute; t&aacute;c dụng giữ lại b&ugrave;n cặn, nước sau khi t&aacute;ch b&ugrave;n được đưa sang bể điều ho&agrave; để ổn định nồng độ v&agrave; lưu lượng. Qu&aacute; tr&igrave;nh sục kh&iacute; ở bể điều ho&agrave; gi&aacute;n đoạn bằng c&aacute;ch đ&oacute;ng mở c&aacute;c van. Nước thải ở bể điều ho&agrave; được bơm ch&igrave;m bơm l&ecirc;n bể t&aacute;ch cặn Cacbonat. C&aacute;c bơm ch&igrave;m hoạt động th&ocirc;ng qua đồng hồ đo lưu lượng. Ở bể t&aacute;ch cặn b&ugrave;n được lắng xuống đ&aacute;y v&agrave; định k&igrave; mở van xả xuống th&ugrave;ng chứa v&agrave; được đem đi ch&ocirc;n lấp tr&ecirc;n b&atilde;i r&aacute;c. Nước tiếp tục chảy sang hố bơm c&oacute; lắp đặt đồng hồ đo pH, (được c&agrave;i đặt th&ocirc;ng số pH = 11.5), nếu pH &lt; 11.5 th&igrave; chỉnh bằng NaOH bằng bơm kiềm tự động, khi pH &gt; 11.5 th&igrave; bơm định lượng kh&ocirc;ng hoạt động.</p>\r\n<p>\r\n	Sau khi điều chỉnh pH nước được bơm l&ecirc;n th&aacute;p Stripping 1 để quạt thổi kh&iacute;. Sau qu&aacute; tr&igrave;nh thổi kh&iacute; tiếp tục đo pH v&agrave; chuyển l&ecirc;n th&aacute;p Stripping 2 v&agrave; chuyển về bể Sclector (được lắp đồng hồ đo pH v&agrave; c&agrave;i đặt th&ocirc;ng số pH = 8). Bơm định lượng acid sẽ tự động bơm acid H2SO4 ra để trung ho&agrave; pH &gt; 8, ngược lại nếu pH &lt; 8 th&igrave; bơm dừng hoạt động.</p>\r\n<p>\r\n	Tại bể Sclector cho sục kh&iacute; li&ecirc;n tục bằng hệ thống ph&acirc;n phối kh&iacute; lắp đặt dưới đ&aacute;y bể. Bể Sclector c&oacute; t&aacute;c dụng l&agrave;m c&aacute;c ảnh hưởng ban đầu trước khi v&agrave;o bể Aeroten. Bể Aeroten lắp đặt đồng hồ đo oxi ho&agrave; tan để điều chỉnh m&aacute;y thổi kh&iacute; nhằm mục đ&iacute;ch cung cấp kh&iacute; oxi ho&agrave; tan trong bể lu&ocirc;n &gt; 2 mg/l. Sau khi xử l&yacute; sinh học nước thải được cho qua bể lắng (lắng lần 2) mục đ&iacute;ch l&agrave; để lắng b&ugrave;n sinh học tạo ra. Một phần b&ugrave;n sinh học được hồi lưu lại bể Sclector để duy tr&igrave; nồng độ nguồn sinh học, nước sau khi t&aacute;ch b&ugrave;n vẫn c&ograve;n độ m&agrave;u cao v&agrave; th&agrave;nh phần c&aacute;c chất kh&oacute; ph&acirc;n huỷ lớn n&ecirc;n được cho sang bể oxi ho&aacute; khử m&agrave;u (được lắp đặt đồng hồ đo pH để khống chế m&ocirc;i trường pH = 3 cho qu&aacute; tr&igrave;nh phản ứng được tốt nhất). Việc khống chế nồng độ pH được thực hiện bằng bơm acid H2SO4 tự động. Đồng thời bổ xung : H2O2 v&agrave; FeSO4 bằng bơm định lượng v&agrave; khuấy đều tự động tạo điều kiện cho phản ứng xảy ra nhanh hơn. Sau đ&oacute; nước thải cho qua bể lưu gi&uacute;p c&aacute;c phản ứng ho&aacute; học c&oacute; thời gian để ph&acirc;n huỷ ho&agrave;n to&agrave;n (thời gian lưu từ 4 - 6h), sau khi phản ứng xảy ra ho&agrave;n to&agrave;n nước sẽ tự động chảy sang bể khuấy trộn, keo tụ được lắp đồng hồ đo pH, để điều chỉnh bơm kiềm NaOH đạt nồng độ pH = 7, (nếu pH &lt; 7 bơm kiềm hoạt động). Qu&aacute; tr&igrave;nh khuấy gi&uacute;p cho phản ứng trung diễn ra nhanh hơn. Khi pH = 7, nước được bơm l&ecirc;n, ngăn khuấy trộn bể lắng Semultech.</p>\r\n<p>\r\n	Tại bể lắng n&agrave;y tiến h&agrave;nh bơm polimer để tiến h&agrave;nh keo tụ c&aacute;c chất lơ lửng trong nước thải, sau đ&oacute; nước thải được cho v&agrave;o ngăn lắng để b&ugrave;n ho&aacute; l&yacute; lắng xuống đ&aacute;y bể v&agrave; định k&igrave; được xả sang ph&acirc;n huỷ b&ugrave;n, nước sau khi lắng b&ugrave;n được cho sang bể lọc c&aacute;t. Bể lọc c&aacute;t gồm 3 bể độc lập, chạy lu&acirc;n phi&ecirc;n, khi bể tắc th&igrave; tiến h&agrave;nh bơm rửa ngược, nước sau khi rửa lọc được cho sang bể ph&acirc;n hủy b&ugrave;n để xử l&yacute; tiếp. C&ograve;n nước sau khi qua lọc c&aacute;t được tiến h&agrave;nh khử tr&ugrave;ng để ti&ecirc;u diệt c&aacute;c vi sinh vật g&acirc;y bệnh ở bể khử tr&ugrave;ng, sau đ&oacute; nước được chảy v&agrave;o bể chứa để lấy mẫu nước ph&acirc;n t&iacute;ch c&aacute;c chỉ ti&ecirc;u m&ocirc;i trường.</p>\r\n<p>\r\n	Nước tại bể chứa nếu đạt chỉ ti&ecirc;u m&ocirc;i trường sẽ xả thải ra m&ocirc;i trường. Nếu chưa đạt th&igrave; ho&agrave;n lưu xử l&yacute; lại.</p>\r\n<p>\r\n	<img alt="Công nghệ thu gom và xử lý nước rác" src="/ecommercefloor/Source/data/upload_img/images/cn8.jpg" style="width: 300px; height: 200px;" />&nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý nước rác " src="/ecommercefloor/Source/data/upload_img/images/cn9.jpg" style="width: 300px; height: 200px;" /></p>\r\n', 26, 1411724319, 0, 'images_85a46bf3f4ad451ed27abcfc6ce11162.jpg', 'cong-nghe-thu-gom-va-xu-ly-nuoc-rac', 'du-an-cong-nghe', NULL, NULL, NULL, NULL, NULL);
INSERT INTO `cms` (`id`, `title`, `short_description`, `description`, `menu_id`, `created_date`, `index`, `cover_photo`, `url`, `page`, `gallery_id`, `file`, `meta_keyword`, `meta_title`, `meta_description`) VALUES
(18, 'Công nghệ thu gom và xử lý khí thải', '<p>\r\n	Trong suốt qu&aacute; tr&igrave;nh vận h&agrave;nh b&atilde;i ch&ocirc;n lấp chất thải sinh hoạt bằng phương ph&aacute;p ch&ocirc;n lấp hợp vệ sinh lu&ocirc;n thải ra c&aacute;c loại kh&iacute; thải c&oacute; ảnh hưởng xấu đến m&ocirc;i trường xung quanh do đ&oacute; bắt buộc phải thu gom, xử l&yacute; hoặc t&aacute;i sử dụng kh&iacute; thải từ b&atilde;i r&aacute;c nhằm bảo vệ m&ocirc;i trường...</p>\r\n', '<p>\r\n	<strong>1. Mục đ&iacute;ch:</strong></p>\r\n<p>\r\n	Trong suốt qu&aacute; tr&igrave;nh vận h&agrave;nh b&atilde;i ch&ocirc;n lấp chất thải sinh hoạt bằng phương ph&aacute;p ch&ocirc;n lấp hợp vệ sinh lu&ocirc;n thải ra c&aacute;c loại kh&iacute; thải c&oacute; ảnh hưởng xấu đến m&ocirc;i trường xung quanh do đ&oacute; bắt buộc phải thu gom, xử l&yacute; hoặc t&aacute;i sử dụng kh&iacute; thải từ b&atilde;i r&aacute;c nhằm bảo vệ m&ocirc;i trường.</p>\r\n<p>\r\n	<strong>2. Thu gom kh&iacute; thải:</strong></p>\r\n<p>\r\n	Kh&iacute; thải từ b&atilde;i r&aacute;c được thu gom bằng c&aacute;c giếng thu đặt thẳng đứng, c&aacute;ch đều nhau. Khoảng c&aacute;ch giữa c&aacute;c giếng thu l&agrave; 50m v&agrave; đặt so le hai h&agrave;ng với nhau. Trong giếng thu đặt ống HDPE &Phi;90 đục lỗ &Phi;20, xung quanh đỗ sỏi 3-5mm. Tại mỗi b&atilde;i ch&ocirc;n lấp bố tr&iacute; c&aacute;c h&agrave;ng giếng thu c&aacute;ch nhau 50m. Ống thu gom ngang bằng HDPE &Phi;150 thu gom kh&iacute; từ c&aacute;c giếng trong một h&agrave;ng, sau đ&oacute; thu về ống thu ch&iacute;nh &Phi;400.</p>\r\n<p>\r\n	Kh&iacute; gas từ ống thu ch&iacute;nh được bơm về trạm xử l&yacute;:<br />\r\n	- Sẽ được đốt bằng đầu đốt (Nếu kh&ocirc;ng c&oacute; trạm ph&aacute;t điện từ kh&iacute; gas). Ống nối với đầu đốt c&oacute; gắn thiết bị chống ngọn lửa ch&aacute;y ngược lại. Vị tr&iacute; đầu đốt được đặt tại vị tr&iacute; đảm bảo an to&agrave;n cho m&ocirc;i trường xung quanh. Kh&iacute; thải sau khi được đốt sẽ ph&aacute;t t&aacute;n v&agrave;o m&ocirc;i trường.<br />\r\n	- Sẽ được d&ugrave;ng để chiết xuất gas Metan (CH4) l&agrave;m nhi&ecirc;n liệu chạy m&aacute;y ph&aacute;t điện.</p>\r\n<p>\r\n	<strong>3. Ph&aacute;t điện từ kh&iacute; thải của b&atilde;i r&aacute;c:</strong></p>\r\n<p>\r\n	Kh&iacute; thải được thu gom từ b&atilde;i ch&ocirc;n lấp r&aacute;c sẽ được đưa về trạm chiết xuất gas để tiến h&agrave;nh việc chiết xuất lấy kh&iacute; Metan (CH4) d&ugrave;ng l&agrave;m nhi&ecirc;n liệu để chạy m&aacute;y ph&aacute;t điện d&ugrave;ng phục vụ sản xuất v&agrave; h&ograve;a v&agrave;o lưới điện quốc gia.</p>\r\n<p>\r\n	Trạm ph&aacute;t điện: gồm 1 hay nhiều động cơ sử dụng nhi&ecirc;n liệu gas CH4 c&oacute; c&ocirc;ng suất thiết kế ph&ugrave; hợp lượng kh&iacute; gas thu được từ b&atilde;i ch&ocirc;n lấp sau khi qua hệ thống thiết bị chiết suất gas. Trung b&igrave;nh 1Nm3/giờ sản xuất được 1,5 Kwh sản lượng điện.</p>\r\n<p>\r\n	Về kinh tế: Việc thu hồi gas để sản xuất điện theo t&iacute;nh to&aacute;n c&oacute; thể sử dụng cho to&agrave;n bộ hoạt động của c&ocirc;ng trường xử l&yacute; r&aacute;c v&agrave; ph&aacute;t l&ecirc;n lưới điện quốc gia. Trạm ph&aacute; điện của c&ocirc;ng trường xử l&yacute; r&aacute;c G&ograve; c&aacute;t trong v&ograve;ng 25 năm lượng gas thu được c&oacute; thể sản xuất được 400x106 Kwh điện (Nếu gi&aacute; điện :0,06 USD/Kwh) c&oacute; thể thu được khoảng 360 tỷ đồng.</p>\r\n<p>\r\n	Về x&atilde; hội: Giảm thiểu &ocirc; nhiễm m&ugrave;i v&agrave; &ocirc; nhiễm kh&ocirc;ng khi đối với khu vực xung quanh b&atilde;i r&aacute;c, giảm ph&aacute;t thải hiệu ứng nh&agrave; k&iacute;nh.</p>\r\n<p>\r\n	<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn10.jpg" style="width: 90px; height: 120px;" />&nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn11.jpg" style="width: 120px; height: 90px;" />&nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn12.jpg" style="width: 120px; height: 90px;" />&nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn13.jpg" style="width: 120px; height: 90px;" /></p>\r\n<p>\r\n	<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn14.jpg" style="width: 90px; height: 120px;" />&nbsp; &nbsp; &nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn15.jpg" style="width: 90px; height: 120px;" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn16.jpg" style="width: 90px; height: 120px;" />&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt="Công nghệ thu gom và xử lý khí thải" src="/ecommercefloor/Source/data/upload_img/images/cn17.jpg" style="width: 90px; height: 120px;" /></p>\r\n', 26, 1411725282, 0, 'images_5375614d0815229174475260d702c4e2.jpg', 'cong-nghe-thu-gom-va-xu-ly-khi-thai', 'du-an-cong-nghe', NULL, NULL, NULL, NULL, NULL),
(19, 'Công nghệ thu gom rác thải xây dựng (xà bần)', '<p>\r\n	X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triển từ do đ&oacute; khối lượng r&aacute;c thải x&acirc;y dựng (x&agrave; bần, r&aacute;c cặn) ng&agrave;y một gia tăng kh&ocirc;ng ngừng, để đ&aacute;p ứng nhu cầu của x&atilde; hội việc thu gom...</p>\r\n', '<p>\r\n	<strong>1. Mục đ&iacute;ch:</strong></p>\r\n<p>\r\n	X&atilde; hội ng&agrave;y c&agrave;ng ph&aacute;t triển từ do đ&oacute; khối lượng r&aacute;c thải x&acirc;y dựng (x&agrave; bần, r&aacute;c cặn) ng&agrave;y một gia tăng kh&ocirc;ng ngừng, để đ&aacute;p ứng nhu cầu của x&atilde; hội việc thu gom, vận chuyển x&agrave; bần cần phải c&oacute; những c&ocirc;ng nghệ, phương tiện, thiết bị chuy&ecirc;n d&ugrave;ng nhằm nhanh ch&oacute;ng chuyển tải x&agrave; bần đến điểm tập kết đ&uacute;ng quy định v&agrave; kh&ocirc;ng g&acirc;y &ocirc; nhiễm m&ocirc;i trường.</p>\r\n<p>\r\n	Để đ&aacute;p ứng nhu cầu thải đổ r&aacute;c x&acirc;y dựng, x&agrave; bần, của người d&acirc;n v&agrave; doanh nghiệp&hellip; C&ocirc;ng ty TNHH MTV M&ocirc;i trường đ&ocirc; thị TP.HCM hiện c&oacute; 3 trạm trung chuyển tiếp nhận r&aacute;c x&acirc;y dựng, x&agrave; bần:<br />\r\n	- Trạm trung chuyển x&agrave; bần 42-44 V&otilde; Thị S&aacute;u quận 1: thu gom x&agrave; bần r&aacute;c cặn khu vực 1, 3, Ph&uacute; Nhuận, B&igrave;nh Thạnh.<br />\r\n	- Trạm trung chuyển tại số 150 L&ecirc; Đại H&agrave;nh, quận 11: thu gom x&agrave; bần r&aacute;c cặn của khu vực quận 10,11, 5 v&agrave; quận 6.<br />\r\n	- Trạm trung chuyển tại số 75 B&agrave; Hom, quận 6: thu gom x&agrave; bần r&aacute;c cặn một phần của quận 6 v&agrave; c&aacute;c quận 8, B&igrave;nh Ch&aacute;nh, T&acirc;n B&igrave;nh, T&acirc;n Ph&uacute;.</p>\r\n<p style="text-align: center;">\r\n	<strong>Quy tr&igrave;nh kỹ thuật thu gom, xử l&yacute; chất thải x&acirc;y dựng</strong></p>\r\n<p style="text-align: center;">\r\n	<img alt="Công nghệ thu gom rác thải xây dựng" src="/ecommercefloor/Source/data/upload_img/images/so-cn3.png" style="width: 400px; height: 481px;" /></p>\r\n<p>\r\n	<strong>2. M&ocirc; tả c&ocirc;ng nghệ:</strong></p>\r\n<p>\r\n	X&agrave; bần được thu gom từ c&aacute;c c&ocirc;ng trường x&acirc;y dựng, hộ d&acirc;n bằng c&aacute;c loại phương tiện đưa về trạm trung chuyển đổ v&agrave;o c&aacute;c container hở, sức chứa 10 &ndash; 12 tấn.</p>\r\n<p>\r\n	Mặt tr&ecirc;n của container ngang bằng với nền, tạo điều kiện cho tất cả c&aacute;c loại xe đều đổ được v&agrave;o container đễ d&agrave;ng, khi container đ&atilde; chất đầy x&agrave; bần hệ thống cầu trục cẩu container đặt l&ecirc;n c&aacute;c xe chu&ecirc;n dung vận chuyển đến b&atilde;i đổ đ&uacute;ng quy định. C&aacute;c container trống từ c&aacute;c xe được lu&acirc;n chuyển xuống c&aacute;c hố để tiếp tục nhận x&agrave; bần.</p>\r\n<p>\r\n	<img alt="Công nghệ thu gom rác thải xây dựng" src="/ecommercefloor/Source/data/upload_img/images/so-cn4.png" style="width: 100%;" /></p>\r\n<p>\r\n	<img alt="Công nghệ thu gom rác thải xây dựng" src="/ecommercefloor/Source/data/upload_img/images/cn18.jpg" style="width: 300px; height: 200px;" />&nbsp;<img alt="Công nghệ thu gom rác thải xây dựng" src="/ecommercefloor/Source/data/upload_img/images/cn19.jpg" style="width: 300px; height: 200px;" /></p>\r\n<p>\r\n	<img alt="Công nghệ thu gom rác thải xây dựng" src="/ecommercefloor/Source/data/upload_img/images/cn20.jpg" style="width: 300px; height: 200px;" />&nbsp;<img alt="Công nghệ thu gom rác thải xây dựng" src="/ecommercefloor/Source/data/upload_img/images/cn21.jpg" style="width: 300px; height: 200px;" /></p>\r\n<p>\r\n	Đối với những c&ocirc;ng tr&igrave;nh x&acirc;y dựng c&oacute; nhu cấu thải đổ x&agrave; bần, r&aacute;c x&acirc;y dựng li&ecirc;n tục Cty MTĐT c&oacute; c&aacute;c thiết bị lưu chứa v&agrave; phương tiện chuy&ecirc;n d&ugrave;ng loại lớn (xuồng chứa 8.5m3, contener 10.5m3) đặt tại c&aacute;c c&ocirc;ng trường để lưu chứa v&agrave; khi đầy sẽ được chuyển đến b&atilde;i đổ đ&uacute;ng quy định.</p>\r\n', 26, 1411726556, 0, 'images_b9642b8c96f0a7d7e1dad26f9ab396fe.jpg', 'cong-nghe-thu-gom-rac-thai-xay-dung-xa-ban', 'du-an-cong-nghe', NULL, NULL, 'Xa ban', 'Công nghệ thu gom rác thải xây dựng (xà bần)', 'Công nghệ thu gom rác thải xây dựng (xà bần)'),
(21, 'Văn phòng công ty', '', '<p>\r\n	<img alt="" src="/ecommercefloor/Source/data/upload_img/images/congty1.png" style="width: 330px; height: 236px;" /></p>\r\n', 15, 1412217939, 0, '', 'van-phong-cong-ty', 'cty-mtdt', NULL, NULL, 'Văn phòng công ty', 'Văn phòng công ty', 'Văn phòng công ty');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` varchar(765) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `content`, `created_date`) VALUES
(2, 'Tap', 'nghuytap@gmail.com', 'Test', 1411745841);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `slide` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `created_by` (`created_by`),
  KEY `updated_by` (`updated_by`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=71 ;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `name`, `description`, `created_date`, `created_by`, `updated_date`, `updated_by`, `slide`) VALUES
(69, 'Slideshow', 'Slideshow', '2014-09-16 14:17:09', NULL, NULL, NULL, 'slide'),
(70, 'Thư viện hình ảnh', 'Thư viện hình ảnh', '2014-09-16 15:25:08', NULL, NULL, NULL, 'library');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `cover_image` tinyint(4) DEFAULT NULL,
  `file_ext` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `old_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gallery_id` int(11) DEFAULT NULL,
  `thumb_nails` tinyint(4) DEFAULT NULL,
  `active_status` int(1) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `priority` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gallery_id` (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=224 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `url`, `cover_image`, `file_ext`, `old_name`, `gallery_id`, `thumb_nails`, `active_status`, `description`, `priority`) VALUES
(211, '2014-09-16 14-17-09778656005.png', 'D:\\Project\\moitruong\\protected/../images/', 1, 'image/png', 'slide4.png', 69, 1, 1, '38 năm hình thành và phát triển', 1),
(215, '2014-09-16 15-25-0835247802.jpg', 'D:\\Project\\moitruong\\protected/../images/', 1, 'image/jpeg', '1.jpg', 70, 1, 1, NULL, NULL),
(216, '2014-09-16 15-25-0846875000.jpg', 'D:\\Project\\moitruong\\protected/../images/', 0, 'image/jpeg', '2.jpg', 70, 0, 1, NULL, NULL),
(220, '2014-10-13 07-25-39686462402.png', 'D:\\Project\\moitruong\\protected/../images/', 0, 'image/png', 'hinh2.png', 69, 0, 1, 'Sứ mệnh cho một môi trường xanh & sạch', 2),
(222, '2014-10-13 07-25-39348022460.png', 'D:\\Project\\moitruong\\protected/../images/', 0, 'image/png', 'hinh4.png', 69, 0, 1, 'Đội ngũ tận tâm, chuyên nghiệp', 4),
(223, '2014-10-13 07-29-35623687744.png', 'D:\\Project\\moitruong\\protected/../images/', 0, 'image/png', 'hinh3.png', 69, 0, 1, 'Công nghệ nắm bắt các xu hướng công nghệ hiện đại', 3);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` tinyint(2) unsigned DEFAULT NULL,
  `static_page` tinyint(1) DEFAULT NULL,
  `disabled` tinyint(1) DEFAULT NULL,
  `priority` tinyint(2) NOT NULL,
  `show_link_parent` tinyint(1) NOT NULL,
  `cover_photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_parent` (`parent_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=41 ;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `url`, `parent_id`, `static_page`, `disabled`, `priority`, `show_link_parent`, `cover_photo`, `meta_title`, `meta_keywords`, `meta_description`) VALUES
(10, 'Giới thiệu', 'gioi-thieu', NULL, 0, 1, 1, 0, NULL, 'Giới thiệu', 'gioi thieu', ''),
(11, 'Lời giới thiệu', 'loi-gioi-thieu', 10, 1, 1, 1, 0, NULL, 'Chào mừng bạn đến với citenco', 'citenco', 'citenco'),
(12, 'Lịch sử hình thành', 'lich-su-hinh-thanh', 10, 1, 1, 2, 0, NULL, NULL, NULL, NULL),
(13, 'Thành tích', 'thanh-tich', 10, 1, 1, 3, 0, NULL, NULL, NULL, NULL),
(14, 'Cty MTDT', 'cty-mtdt', NULL, 0, 1, 2, 0, NULL, NULL, NULL, NULL),
(15, 'Văn phòng công ty', 'van-phong-cong-ty', 14, 1, 1, 1, 0, NULL, NULL, NULL, NULL),
(16, 'XNVC 1', 'xnvc-1', 14, 1, 1, 2, 0, NULL, NULL, NULL, NULL),
(17, 'XNVC 2', 'xnvc-2', 14, 1, 1, 3, 0, NULL, NULL, NULL, NULL),
(18, 'XNVC 3', 'xnvc-3', 14, 1, 1, 4, 0, NULL, NULL, NULL, NULL),
(19, 'XN Dịch vụ môi trường', 'xn-dich-vu-moi-truong', 14, 1, 1, 5, 0, NULL, NULL, NULL, NULL),
(20, 'XN Xử lý chất thải', 'xn-xu-ly-chat-thai', 14, 1, 1, 6, 0, NULL, NULL, NULL, NULL),
(21, 'Chi nhánh Đà Nẵng', 'chi-nhanh-da-nang', 14, 1, 1, 7, 0, NULL, NULL, NULL, NULL),
(22, 'Sản phẩm dịch vụ', 'san-pham-dich-vu', NULL, 0, 1, 3, 1, NULL, NULL, NULL, NULL),
(23, 'Dịch vụ thuê bao', 'dich-vu-thue-bao', 22, 0, 1, 1, 0, 'images_c3a65058924d18a70935cd2f8ef76bf8.jpg', '', '', ''),
(24, 'Dịch vụ kinh doanh', 'dich-vu-kinh-doanh', 22, 0, 1, 2, 0, 'images_7f7a3314259bf4ad9b4a771a533fb282.jpg', 'Dịch vụ kinh doanh', 'dịch vụ, kinh doanh', 'dịch vụ kinh doanh'),
(25, 'Dự án - công nghệ', 'du-an-cong-nghe', NULL, 0, 1, 4, 0, NULL, NULL, NULL, NULL),
(26, 'Công nghệ', 'cong-nghe', 25, 0, 1, 1, 0, NULL, 'Công nghệ', 'công nghệ', 'Công nghệ'),
(27, 'Các dự án đã và đang thực hiện', 'cac-du-an-da-va-dang-thuc-hien', 25, 1, 1, 2, 0, NULL, NULL, NULL, NULL),
(28, 'Các dự án chuẩn bị triển khai', 'cac-du-an-chuan-bi-trien-khai', 25, 1, 1, 3, 0, NULL, NULL, NULL, NULL),
(29, 'Sự kiện', 'su-kien', NULL, 0, 1, 5, 0, NULL, NULL, NULL, NULL),
(30, 'Tin tức nội bộ', 'tin-tuc-noi-bo', 29, 0, 1, 1, 0, NULL, 'Tin tức nội bộ', 'tin noi bo', 'tin toi bo'),
(31, 'Đảng bộ công ty', 'dang-bo-cong-ty', 29, 1, 1, 2, 0, NULL, NULL, NULL, NULL),
(32, 'Các tổ chức đoàn thể', 'cac-to-chuc-doan-the', 29, 0, 1, 3, 0, NULL, NULL, NULL, NULL),
(33, 'Thông tin công khai', 'thong-tin-cong-khai', NULL, 0, 1, 6, 0, NULL, NULL, NULL, NULL),
(34, 'Thông tin tài chính', 'thong-tin-tai-chinh', 33, 0, 1, 1, 0, NULL, NULL, NULL, NULL),
(35, 'Thông tin quản trị', 'thong-tin-quan-tri', 33, 0, 1, 2, 0, NULL, NULL, NULL, NULL),
(36, 'Thông tin lương lao động, tiền lương', 'thong-tin-luong-lao-dong-tien-luong', 33, 0, 1, 3, 0, NULL, NULL, NULL, NULL),
(37, 'Liên hệ', 'lien-he', NULL, 0, 1, 7, 0, NULL, 'Liên hệ', 'liên hệ', 'liên hệ'),
(38, 'Công Đoàn', 'cong-doan', 32, 1, 1, 1, 0, '', '', '', ''),
(39, 'Đoàn thanh niên', 'doan-thanh-nien', 32, 1, 1, 2, 0, '', '', '', ''),
(40, 'Kiến thức môi trường', 'kien-thuc-moi-truong', 33, 1, 1, 4, 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE IF NOT EXISTS `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `key` varchar(765) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` blob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=134 ;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `updated`, `key`, `value`) VALUES
(131, '2014-09-18 04:42:45', 'phone_company', 0x733a33313a222838343829203338323033373337202d202838343829203338323038303438223b),
(130, '2014-09-26 09:32:31', 'address_company', 0x733a36363a2253e1bb91203432202d2034342056c3b5205468e1bb8b2053c3a1752c20502e2054c3a26e20c490e1bb8b6e682c3c62723e5175e1baad6e20312c2054502e2048434d223b),
(128, '2014-09-17 07:20:34', 'fax', 0x733a31343a2230382e2033382032303220373639223b),
(127, '2014-09-16 15:40:05', 'hot_line', 0x733a303a22223b),
(126, '2014-10-01 14:47:53', 'meta_keywords', 0x733a31383a22636974656e636f2c206d6f697472756f6e67223b),
(125, '2014-10-01 14:47:53', 'meta_description', 0x733a31353a22636f6e6720747920636974656e636f223b),
(124, '2014-09-16 15:40:05', 'title', 0x733a373a22436974656e636f223b),
(129, '2014-09-18 04:42:45', 'company', 0x733a34353a2243747920544e4848204d5456204dc3b469205472c6b0e1bb9d6e6720c490c3b4205468e1bb8b2054502048434d223b),
(123, '2014-09-18 04:40:02', 'page_top2', 0x4e3b),
(121, '2014-09-17 07:18:30', 'youtube', 0x733a31383a22687474703a2f2f796f75747562652e636f6d223b),
(122, '2014-09-18 04:40:02', 'page_top1', 0x4e3b),
(119, '2014-09-17 07:18:30', 'facebook', 0x733a31393a22687474703a2f2f66616365626f6f6b2e636f6d223b),
(120, '2014-09-16 15:40:05', 'logo', 0x4e3b),
(118, '2014-09-26 09:32:31', 'address', 0x4e3b),
(117, '2014-09-17 07:18:30', 'phone', 0x733a31333a2230382e20333820323038363636223b),
(116, '2014-09-17 07:18:30', 'email', 0x733a32363a2274616e676861692d706b6440636974656e636f2e636f6d2e766e223b),
(132, '2014-09-18 04:42:45', 'fax_company', 0x733a31343a222838343829203338323936363830223b),
(133, '2014-09-26 15:47:02', 'service_file', 0x733a33363a227175695f7472696e685f646963685f76755f31343131373436343232333635392e706466223b);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `old_filename` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_date` int(11) DEFAULT NULL,
  `file_ext` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `url`, `title`, `old_filename`, `created_date`, `file_ext`) VALUES
(2, '/data/c12ec13cb5a377e14766e6edadf72927.doc', 'mẫu hợp đồng khoản rác nguy hại', 'mau hop dong khoan rac nguy hai.doc', 1411722007, 'application/msword'),
(3, '/data/de0fcb00f4c5772f37ce2f46af7c1200.doc', 'Mẫu hợp đồng nhà vệ sinh', 'mau hop dong nha ve sinh.doc', 1411722018, 'application/msword'),
(4, '/data/63e6edea916d9f706cad15785dca30c2.doc', 'Mẫu hợp đồng rác công nghiệp', 'mau hop dong rac cong nghiep.doc', 1411722049, 'application/msword'),
(5, '/data/747504e9b7441c6b43dcecc449032c53.doc', 'mẫu hợp đồng rác nguy hại', 'mau hop dong rac nguy hai.doc', 1411722081, 'application/msword'),
(6, '/data/87841ebe81c8fa6890a91ed6f7ad9240.doc', 'Mẫu hợp đồng rác sinh hoạt', 'mau hop dong rac sinh hoat .doc', 1411722094, 'application/msword'),
(7, '/data/ea9a7caa29f022601de901e82e21023c.doc', 'Mẫu hợp đồng rác xây dựng', 'mau hop dong rac xay dung.doc', 1411722110, 'application/msword'),
(8, '/data/9d88cc20794d3fbcf3fb24d175ca07fc.doc', 'Mẫu hợp đồng rút bùn thải', 'mau hop dong rut bun thai.doc', 1411722129, 'application/msword');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `temp_password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `login_attemp` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_id` int(1) NOT NULL,
  `application_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `gender` varchar(6) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verify_code` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `access_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `required_facebook` int(1) DEFAULT '1',
  `facbook_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=101 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password_hash`, `temp_password`, `first_name`, `last_name`, `login_attemp`, `created_date`, `role_id`, `application_id`, `status`, `gender`, `phone`, `verify_code`, `address`, `oauth_uid`, `oauth_provider`, `access_token`, `required_facebook`, `facbook_id`) VALUES
(100, 'admin', 'admin@citenco.com.vn', '2e87424c4faada6a4c15ae9a1ceae9ab', 'huytap88', 'Admin', 'admin', 0, '2014-09-16 03:58:44', 2, 1, 1, 'Male', '2345235', NULL, 'fgsdfgdfg', NULL, NULL, NULL, 1, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch_companies`
--
ALTER TABLE `branch_companies`
  ADD CONSTRAINT `fk_branch_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `cms`
--
ALTER TABLE `cms`
  ADD CONSTRAINT `fk_cms_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`);

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `items_ibfk_1` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_parent` FOREIGN KEY (`parent_id`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
