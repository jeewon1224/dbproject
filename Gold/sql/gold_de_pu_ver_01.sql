-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-01-15 08:07
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
(5, 'Graphic A', 'GODE210101', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley <br />\r\n<br />\r\nof type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,<br />\r\n<br />\r\nremaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing', 'design_01_01.jpg', 'sub01.jpg', 'design_thumb_01.jpg', 'SAMSUNG SDS', '2021-01-06'),
(6, 'Iittala', 'GODE210102', 'Graphic mug design for Iittala. I explored the concept of distortion for my design. I wanted to create a different point of view. I believe both the Nordic way of living and Nordic design always does this.” The mug comes in a matching gift box.<br />\r\n', 'design_02_01.jpg', 'design_02_02.jpg', 'design_thumb_02.jpg', 'SAMSUNG', '2021-01-06'),
(7, 'MIT Technology', 'GODE210103', 'Editorial illustrations for MIT Technology magazine on How the AI cloud could produce the richest companies ever by Peter Burrows<br />\r\n', 'design_03_01.jpg', 'design_03_02.jpg', 'design_thumb_03.jpg', 'SAMSUNG', '2021-01-06'),
(8, 'Diptyque', 'GODE210104', 'French perfume and candle makers Diptyque asked me to create a colorful illustration for the 50th anniversary campaign.<br />\r\n', 'design_04_01.jpg', 'design_04_02.jpg', 'design_thumb_04.jpg', 'SAMSUNG', '2021-01-06'),
(9, 'Down The Rabbit Hole', 'GODE210105', 'The 2018 Campaign for Down The Rabbit Hole festival, in close collaboration with Jurriaan Hos. Sound design by Wilco Alkema.<br />\r\n', 'design_05_01.jpg', 'design_05_02.jpg', 'design_thumb_05.jpg', 'SAMSUNG', '2021-01-06'),
(10, 'Endlessness', 'GODE210106', 'Solo exhibition at Academie Gallery, October 2017, Utrecht<br />\r\n', 'design_06.jpg', 'design_06_02.jpg', 'design_thumb_06.jpg', 'SAMSUNG', '2021-01-06'),
(11, 'Dolby', 'GODE210107', 'Dolby commissioned me to create an artwork that reflects their logo.<br />\r\n<br />\r\nRadio waves in motion. Day and night. I wake up and go to bed listening to the radio, it’s my start of the day since I can ever remember this piece is a homage to FM and AM frequency that will become history due to digital radio very soon.', 'design_07_01.jpg', 'design_07_02.jpg', 'design_thumb_07.jpg', 'SAMSUNG', '2021-01-06'),
(12, 'Dropbox', 'GODE210108', 'I partnered with 72&Sunny to create an image paired with an Aydin Buyuktas photograph for the recent rebrand of Dropbox.<br />\r\n', 'design_08_01.jpg', 'design_08_02.jpg', 'design_thumb_08.jpg', 'SAMSUNG', '2021-01-06'),
(13, 'Mohawk Maker', 'GODE210109', 'Mohawk Maker Quarterly Issue #13: Disruption. Algorithm printing created 20.000 unique art prints out of my design.<br />\r\n', 'design_09_01.jpg', 'design_09_02.jpg', 'design_thumb_09.jpg', 'SAMSUNG', '2021-01-06'),
(14, 'Gradient Exploration', 'GODE210110', 'Two animations to celebrate the release of the Nike Vapor Max.<br />\r\nCover illustration for the spring issue of Brummell magazine<br />\r\n', 'design_10_01.jpg', 'design_10_02.jpg', 'design_thumb_10.jpg', 'SAMSUNG', '2021-01-06'),
(15, 'Brummel Magazine', 'GODE210111', 'Cover illustration for the spring issue of Brummell magazine The 2018 Campaign for Down The Rabbit Hole festival, in close collaboration with Jurriaan Hos. Sound design by Wilco Alkema.<br />\r\n<br />\r\n', 'design_11_01.jpg', 'design_11_02.jpg', 'design_thumb_11.jpg', 'SAMSUNG', '2021-01-06'),
(16, 'Sun Sun Sun', 'GODE210112', 'Created for a exhibition at Wieden & Kennedy Amsterdam. 24 bold and colorful illustrations where printed on 120 x 120 cm fabric panels and on display at the exhibition space of the agency. At the opening night we showed motion pieces of the work that are animated by Jurriaan Hos.<br />\r\n', 'design_12_01.jpg', 'design_12_02.jpg', 'design_thumb_12.jpg', 'SAMSUNG', '2021-01-06');

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
  MODIFY `GOLD_DE_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
