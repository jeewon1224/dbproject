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
-- 테이블 구조 `gold_web`
--

CREATE TABLE `gold_web` (
  `GOLD_WEB_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_WEB_tit` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '제목',
  `GOLD_WEB_ser` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '시리얼넘버',
  `GOLD_WEB_des` text CHARACTER SET utf8 NOT NULL COMMENT '설명',
  `GOLD_WEB_img` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '사진',
  `GOLD_WEB_mimg` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '모바일사진',
  `GOLD_WEB_thumb` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '썸네일사진',
  `GOLD_WEB_cli` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '납품처',
  `GOLD_WEB_reg` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT '등록일',
  `GOLD_WEB_dom` varchar(50) CHARACTER SET utf8 DEFAULT NULL COMMENT '도메인주소'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_web`
--

INSERT INTO `gold_web` (`GOLD_WEB_num`, `GOLD_WEB_tit`, `GOLD_WEB_ser`, `GOLD_WEB_des`, `GOLD_WEB_img`, `GOLD_WEB_mimg`, `GOLD_WEB_thumb`, `GOLD_WEB_cli`, `GOLD_WEB_reg`, `GOLD_WEB_dom`) VALUES
(2, 'Monster Dentistry', 'GODEWEB210101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s,<br />\r\n<br />\r\n when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, <br />\r\n<br />\r\nbut also the leap into electronic typesetting, remaining essentially unchanged. ', 'web_01.png', 'web_m_01.png', 'web_thumb_01.png', 'Dentist Company', '2021-01-13', 'http://www.dent.com'),
(3, 'MightShop', 'GODEWEB210102', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor<br />\r\n<br />\r\n at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the <br />\r\n<br />\r\ncites of the word in classical literature, discovered the undoubtable source. ', 'web_02.png', 'web_m_02.png', 'web_thumb_02.png', 'Might Company', '2021-01-13', 'http://www.mtc.com'),
(4, 'Flory', 'GODEWEB210103', 'Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. <br />\r\n<br />\r\nThis book is a treatise on the theory of ethics, very popular during the Renaissance. <br />\r\n<br />\r\nThe first line of Lorem Ipsum,', 'web_03.png', 'web_m_05.png', 'web_thumb_03.png', 'Morden City', '2021-01-13', 'http://www.mordern.com'),
(5, 'Digital Agency', 'GODEWEB210104', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from <br />\r\n<br />\r\n\"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions <br />\r\n<br />\r\nfrom the 1914 translation by H. Rackham.', 'web_04.png', 'web_m_04.png', 'web_thumb_04.png', 'Digital Agency', '2021-01-13', 'http://www.digital-agency.com'),
(6, 'Logelle', 'GODEWEB210105', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, <br />\r\n<br />\r\nas opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use <br />\r\n<br />\r\n<br />\r\nLorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy.', 'web_05.png', 'web_m_05.png', 'web_thumb_05.png', 'Lorry Call', '2021-01-13', 'http://www.lorry-call.com'),
(7, 'Worky', 'GODEWEB210106', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. <br />\r\n<br />\r\nIf you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the <br />\r\n<br />\r\nLorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,', 'web_06.png', 'web_m_06.png', 'web_thumb_06.png', 'Worky Group', '2021-01-13', 'http://www.worky.com');

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
  MODIFY `GOLD_WEB_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
