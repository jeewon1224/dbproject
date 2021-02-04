-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-02-04 02:10
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
-- 테이블 구조 `gold_msg`
--

CREATE TABLE `gold_msg` (
  `GOLD_MSG_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_MSG_name` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '작성자 이름',
  `GOLD_MSG_email` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '작성자 이메일',
  `GOLD_MSG_tit` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '메세지 제목',
  `GOLD_MSG_con` text CHARACTER SET utf8 NOT NULL COMMENT '메세지 내용',
  `GOLD_MSG_reg` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '메세지 작성일시'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 테이블의 덤프 데이터 `gold_msg`
--

INSERT INTO `gold_msg` (`GOLD_MSG_num`, `GOLD_MSG_name`, `GOLD_MSG_email`, `GOLD_MSG_tit`, `GOLD_MSG_con`, `GOLD_MSG_reg`) VALUES
(2, '이재용', 'jaedragon@gmail.com', '한투연, 공매도와의 전쟁 선언', '미국 증시를 뒤흔든 게임스톱 사태가 개인 투자자들과 공매도 세력 간의 치킨게임으로 치닫는 가운데, 국내 증시로도 ‘반(反) 공매도 운동’이 번질 분위기다. 공매도 금지를 주장해온 개인 투자자들은 셀트리온 등을 중심으로 공매도 세력에 맞서겠다고 선포했다.\r\n\r\n개인 투자자 모임인 한국주식투자자연합회(한투연)는 1일 기자회견을 열고 ‘공매도와의 전쟁’을 공식 선언했다.', '2021-02-01 04:16:38'),
(7, '이부진', 'blah@gmail.com', 'NEXON 업계 최고 연봉', '게임업계에서도 전례가 없는 일이다. 인상 폭도 놀랍지만, 5000명이 넘는 직원을 거느린 넥슨이 이 같은 결정을 내렸다. 그 배경엔 인재 수급과 갈수록 치열해지는 경쟁 환경 등 여러 이유가 있겠지만, 신입사원에서 대표이사 자리까지 오른 입지전적 인물인 이정헌 대표의 승부수가 있었다고 볼 수 있다.\r\n', '2021-02-01 07:35:40');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_msg`
--
ALTER TABLE `gold_msg`
  ADD PRIMARY KEY (`GOLD_MSG_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_msg`
--
ALTER TABLE `gold_msg`
  MODIFY `GOLD_MSG_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호', AUTO_INCREMENT=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
