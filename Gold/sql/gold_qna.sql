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
-- 테이블 구조 `gold_qna`
--

CREATE TABLE `gold_qna` (
  `GOLD_QNA_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_QNA_id` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '글쓴이',
  `GOLD_QNA_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글제목',
  `GOLD_QNA_con` text CHARACTER SET utf8 NOT NULL COMMENT '글내용',
  `GOLD_QNA_reg` varchar(15) CHARACTER SET utf8 NOT NULL COMMENT '등록일',
  `GOLD_QNA_hit` int(11) NOT NULL COMMENT '조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_qna`
--

INSERT INTO `gold_qna` (`GOLD_QNA_num`, `GOLD_QNA_id`, `GOLD_QNA_tit`, `GOLD_QNA_con`, `GOLD_QNA_reg`, `GOLD_QNA_hit`) VALUES
(1, 'jwk1224', 'aa', 'vv', '2021-01-25', 0),
(2, 'jwk1224', 'dd', 'aa', '2021-01-25', 0),
(3, 'jwk1224', 'ff', 'gg', '2021-01-25', 0),
(4, 'jwk1224', 'ss', 'dd', '2021-01-25', 0),
(5, 'jwk1224', 'hh', 'rr', '2021-01-25', 0),
(6, 'jwk1224', 'ss', 'ff', '2021-01-25', 0),
(7, 'jwk1224', 'qq', 'aa', '2021-01-25', 0),
(8, 'jwk1224', 'gj', 'ff', '2021-01-25', 0),
(9, 'jwk1224', 'gj', 'ff', '2021-01-25', 0),
(10, 'jwk1224', 'ffff', 'ss', '2021-01-25', 0),
(11, 'jwk1224', 'ffff', 'ss', '2021-01-25', 2),
(12, 'jwk1224', 'kkgc', 'cc', '2021-01-25', 3),
(13, '', '첫 번째 게시글입니다.', '지난해 증권선물위원회가 감사인(회계법인)을 지정한 회사는 1521곳으로 전년보다 297곳(24.3%)이나 증가한 것으로 나타났다.<br />\r\n<br />\r\n26일 금융감독원이 내놓은 ‘2020년 외부감사대상 회사 및 감사인 지정 현황’ 자료를 보면, 지난해 주기적 지정 회사가 462곳, 직권지정이 1059곳이었다. 주기적 지정은 상장사 434곳, 비상장 28곳으로 전년보다 242곳(110%) 증가했다. 직권지정은 상장사 626곳, 비상장사 433곳으로 전년보다 55곳(5.5%) 증가했다.', '2021-01-26', 2),
(14, 'jwk1224', 'Hi', 'Hello!', '2021-28-01', 55),
(15, 'jwk1224', 'Ready', 'set', '2021-28-01', 107);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_qna`
--
ALTER TABLE `gold_qna`
  ADD PRIMARY KEY (`GOLD_QNA_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_qna`
--
ALTER TABLE `gold_qna`
  MODIFY `GOLD_QNA_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
