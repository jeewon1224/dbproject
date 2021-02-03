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
-- 테이블 구조 `gold_de`
--

CREATE TABLE `gold_de` (
  `GOLD_DE_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_DE_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_DE_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '시리얼넘버',
  `GOLD_DE_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `GOLD_DE_img1` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진1',
  `GOLD_DE_img2` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진2',
  `GOLD_DE_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일이미지',
  `GOLD_DE_cli` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '납품처',
  `GOLD_DE_reg` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '등록일'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_de`
--

INSERT INTO `gold_de` (`GOLD_DE_num`, `GOLD_DE_tit`, `GOLD_DE_ser`, `GOLD_DE_des`, `GOLD_DE_img1`, `GOLD_DE_img2`, `GOLD_DE_thumb`, `GOLD_DE_cli`, `GOLD_DE_reg`) VALUES
(20, 'Iittala Graphic', 'GODE210101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley <br />\r\n<br />\r\nof type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, <br />\r\n<br />\r\nremaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing', 'design_01_01.jpg', 'design_01_02.jpg', 'design_thumb_01.jpg', 'Samsung SDS', '2021-01-06'),
(21, 'MIT Technology', 'GODE210102', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur,<br />\r\n<br />\r\n from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. <br />\r\n<br />\r\nLorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus ', 'design_02_01.jpg', 'design_02_02.jpg', 'design_thumb_01.png', 'Loopen int.', '2021-01-06'),
(22, 'Dolby Design', 'GODE210103', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<br />\r\n<br />\r\nt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that <br />\r\n<br />\r\nit has a more-or-less normal distribution of letters, as opposed to using', 'design_03_01.jpg', 'design_03_02.jpg', 'design_thumb_03.jpg', 'Samsung SDS', '2021-01-06'),
(23, 'Down The Rabbit', 'GODE210103', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised <br />\r\n<br />\r\nwords which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden <br />\r\n<br />\r\nin the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,', 'design_04_01.jpg', 'design_04_02.jpg', 'design_thumb_04.jpg', 'Loopen int.', '2021-01-06'),
(24, 'DropBox Design', 'GODE210104', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into <br />\r\n<br />\r\nelectronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing <br />\r\n<br />\r\nLorem Ipsum passages, and more recently with desktop', 'design_05_01.jpg', 'design_05_02.jpg', 'design_thumb_05.jpg', 'Samsung SDS', '2021-01-06'),
(25, 'Nike Vapor', 'GODE210105', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, <br />\r\n<br />\r\nfrom a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections <br />\r\n<br />\r\n1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics', 'design_06_01.jpg', 'design_06_02.jpg', 'design_thumb_06.jpg', 'Samsung SDS', '2021-01-06'),
(26, 'Sun Design', 'GODE210106', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, <br />\r\n<br />\r\nas opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page <br />\r\n<br />\r\neditors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 'design_07_01.png', 'design_07_02.jpg', 'design_thumb_08.jpg', 'Loopen int.', '2021-01-06'),
(27, 'Computer Art', 'GODE210108', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, <br />\r\n<br />\r\nyou need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat <br />\r\n<br />\r\npredefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,', 'design_08_01.jpg', 'design_08_02jpg.jpg', 'design_thumb_08.jpg', 'Samsung SDS', '2021-01-06'),
(28, 'Calvin Klein', 'GODE210109', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br />\r\n<br />\r\nbut also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets <br />\r\n<br />\r\ncontaining Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'design_09_01.jpg', 'design_09_02.jpg', 'design_thumb_09.jpg', 'Loopen int.', '2021-01-06'),
(32, 'Test Art', 'GODE210113', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, <br />\r\n<br />\r\nwhen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br />\r\n<br />\r\nbut also the leap into electronic typesetting, remaining essentially unchanged. ', 'design_01_01.jpg', 'design_01_02.jpg', 'design_thumb_01.jpg', 'Loopen int.', '2021-01-13');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_de`
--
ALTER TABLE `gold_de`
  ADD PRIMARY KEY (`GOLD_DE_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_de`
--
ALTER TABLE `gold_de`
  MODIFY `GOLD_DE_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
