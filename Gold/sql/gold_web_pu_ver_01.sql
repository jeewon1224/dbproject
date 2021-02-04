-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-15 08:08
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
-- 테이블 구조 `gold_web`
--

CREATE TABLE `gold_web` (
  `GOLD_WEB_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_WEB_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_WEB_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '시리얼넘버',
  `GOLD_WEB_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `GOLD_WEB_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진',
  `GOLD_WEB_mimg` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '모바일 사진',
  `GOLD_WEB_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일',
  `GOLD_WEB_cli` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '납품처',
  `GOLD_WEB_reg` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT '등록일',
  `GOLD_WEB_dom` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '도메인'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_web`
--

INSERT INTO `gold_web` (`GOLD_WEB_num`, `GOLD_WEB_tit`, `GOLD_WEB_ser`, `GOLD_WEB_des`, `GOLD_WEB_img`, `GOLD_WEB_mimg`, `GOLD_WEB_thumb`, `GOLD_WEB_cli`, `GOLD_WEB_reg`, `GOLD_WEB_dom`) VALUES
(2, 'House', 'GOWEB210101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br />\r\n<br />\r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br />\r\n<br />\r\nIt was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br />\r\n<br />\r\n', 'web_01.png', 'web_m_01.png', 'web_thumb_01.png', 'House Company', '2021-01-13', 'www.house.com'),
(3, 'Wedding', 'GOWEB210102', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br />\r\n<br />\r\nThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <br />\r\n<br />\r\nMany desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br />\r\n<br />\r\n', 'web_02.png', 'web_m_02.png', 'web_thumb_02.png', 'Joseph', '2021-01-13', 'www.wedding.com'),
(4, 'BE Clinic', 'GOWEB210103', 'Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br />\r\n<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br />\r\n<br />\r\n<br />\r\nThe point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <br />\r\n<br />\r\n', 'web_03.png', 'web_m_03.png', 'web_thumb_03.png', 'Clinic Corp', '2021-01-13', 'www.beclinic.com'),
(5, 'Paletto', 'GOWEB210104', 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. <br />\r\n<br />\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. <br />\r\n<br />\r\nMany desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br />\r\n<br />\r\n', 'web_04.png', 'web_m_04.png', 'web_thumb_04.png', 'Paletto cosmetic', '2021-01-13', 'www.paletto.com'),
(6, 'Modicate', 'GOWEB210105', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 <br />\r\n<br />\r\nfrom \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by <br />\r\n<br />\r\nEnglish versions from the 1914 translation by H. Rackham.<br />\r\n<br />\r\n', 'web_05.png', 'web_m_05.png', 'web_thumb_05.png', 'Modicate Com', '2021-01-13', 'www.modicate.com'),
(7, 'Kanter', 'GOWEB210106', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. <br />\r\n<br />\r\nIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. <br />\r\n<br />\r\nAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary ', 'web_06.png', 'web_m_06.png', 'web_thumb_06.png', 'Kanter Corp', '2021-01-13', 'www.kanter.com'),
(8, 'Joyelle', 'GOWEB210107', 'All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary.<br />\r\n<br />\r\nIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. <br />\r\n<br />\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.<br />\r\n<br />\r\n<br />\r\n', 'web_09.png', 'web_m_09.png', 'web_thumb_09.png', 'Coffee Joyelle', '2021-01-13', 'https://www.naver.com/');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_web`
--
ALTER TABLE `gold_web`
  ADD PRIMARY KEY (`GOLD_WEB_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_web`
--
ALTER TABLE `gold_web`
  MODIFY `GOLD_WEB_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
