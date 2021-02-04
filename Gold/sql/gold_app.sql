-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-29 02:17
-- 서버 버전: 10.4.16-MariaDB
-- PHP 버전: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `test`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `gold_app`
--

CREATE TABLE `gold_app` (
  `GOLD_APP_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_APP_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_APP_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '일련번호',
  `GOLD_APP_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `GOLD_APP_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진',
  `GOLD_APP_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일사진',
  `GOLD_APP_cli` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '납품처',
  `GOLD_APP_reg` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_app`
--

INSERT INTO `gold_app` (`GOLD_APP_num`, `GOLD_APP_tit`, `GOLD_APP_ser`, `GOLD_APP_des`, `GOLD_APP_img`, `GOLD_APP_thumb`, `GOLD_APP_cli`, `GOLD_APP_reg`) VALUES
(2, 'Tesla Model X', '20210301', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi accumsan urna et orci ornare feugiat. Suspendisse iaculis ultrices malesuada. <br />\r\n<br />\r\nVivamus non mi auctor, lacinia nisl ut, bibendum velit. Duis placerat, felis vel tincidunt ultricies, arcu augue pellentesque lectus, et malesuada lorem leo et libero. Fusce eleifend rutrum molestie. Quisque non leo consectetur, rhoncus arcu eu, tristique urna. Curabitur nec rhoncus elit, sed porttitor metus. <br />\r\n<br />\r\nMaecenas sit amet pharetra urna. Cras sodales ullamcorper leo id interdum. Donec sed urna accumsan, feugiat lorem non, semper justo. Phasellus et ultricies diam. Sed nec purus sollicitudin, placerat nunc sed, molestie dui. Phasellus tincidunt odio a vehicula tristique. Morbi sed lectus risus. Aliquam ut faucibus ipsum.', 'app_main_001.png', 'app_001.png', 'Tesla', '2021-01-19'),
(7, 'Portfolio', '20210302', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />\r\n<br />\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\n<br />\r\n It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n', 'app_main_002.jpg', 'app_002.jpg', 'Kim', '2021-01-19'),
(10, 'Plant Store', '20210303', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. <br />\r\n<br />\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\n', 'app_main_003.png', 'app_003.png', 'Planatarium', '2021-01-19'),
(13, 'Beranda', '20210304', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n', 'app_main_004.png', 'app_004.png', 'Beranda', '2021-01-19'),
(14, 'Wallet', '20210305', 'Vestibulum pulvinar eu dolor non malesuada. Nunc faucibus dolor massa, sit amet hendrerit risus porta a. Aliquam velit felis, facilisis vitae ornare in, malesuada eget nisl. Phasellus ut sagittis eros, sit amet ultricies justo. Vestibulum id diam finibus, tempus ante quis, scelerisque nisl. In ut lacus posuere, venenatis tellus vel, sollicitudin sem. Vestibulum in nisi at sapien venenatis auctor. In sed sapien at metus vulputate ullamcorper. Sed ac volutpat erat, eu vestibulum turpis. Nulla molestie auctor augue in bibendum.', 'app_main_005.png', 'app_005.png', 'Jenny', '2021-01-20'),
(15, 'Plant schedule', '20210306', 'Donec faucibus diam in orci egestas lacinia. Duis in leo sed urna tincidunt mattis quis sed arcu. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam non interdum felis, eu vulputate ante. In rhoncus, lorem id semper volutpat, nibh nisi tempus lacus, quis consequat odio eros in felis. Sed eget velit sit amet nibh rutrum vulputate. Cras vehicula faucibus mollis. Nam id augue in enim tincidunt hendrerit nec ut est. Vivamus bibendum, enim a tempor accumsan, magna nibh lobortis sapien, efficitur venenatis tortor odio in ipsum. Praesent sed consequat sapien. Suspendisse quis aliquam felis.<br />\r\n<br />\r\n', 'app_main_006.png', 'app_006.png', 'Rose', '2021-01-20'),
(16, 'Digital Wallet', '20210307', 'Sed accumsan id arcu vitae commodo. Praesent accumsan enim nec sem blandit pulvinar. Nullam sed luctus est, volutpat fermentum dolor. Mauris ut nisl arcu. Donec convallis enim et nulla porta cursus. Integer quis fermentum neque, nec maximus mi. Aenean nec molestie magna. Etiam augue neque, malesuada sed efficitur vitae, sollicitudin vitae libero. Cras id vestibulum eros. Nunc id cursus ante. Phasellus bibendum viverra est eget laoreet. Ut vitae lacinia velit. Aenean ac varius nisl. Vestibulum viverra dapibus commodo. In sodales ante auctor lectus porta fermentum.<br />\r\n<br />\r\n', 'app_main_007.png', 'app_007.png', 'Dimest', '2021-01-20'),
(17, 'Medicine Reminder', '20210308', 'Praesent sit amet nibh non quam vulputate semper id a est. Duis ac diam a augue tempus sagittis. Vestibulum mattis est a tincidunt faucibus. Aenean vel consectetur metus, ut mollis massa. Proin molestie dui sit amet fringilla efficitur. Curabitur feugiat dui metus, gravida ultricies turpis hendrerit ut. Integer molestie rutrum ex sit amet maximus. Quisque nec suscipit nisi. Cras felis velit, euismod ac purus in, semper ornare quam. Morbi et pharetra ligula. Duis dignissim magna felis, nec lobortis sem ornare nec.<br />\r\n<br />\r\n', 'app_main_008.jpg', 'app_008.jpg', 'Hanyang Hospital', '2021-01-20');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_app`
--
ALTER TABLE `gold_app`
  ADD PRIMARY KEY (`GOLD_APP_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_app`
--
ALTER TABLE `gold_app`
  MODIFY `GOLD_APP_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
