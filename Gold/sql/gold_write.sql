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
-- 테이블 구조 `gold_write`
--

CREATE TABLE `gold_write` (
  `GOLD_wr_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_wr_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 아이디',
  `GOLD_wr_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 제목',
  `GOLD_wr_cont` text CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 내용',
  `GOLD_wr_hit` int(11) NOT NULL COMMENT '조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `gold_write`
--
ALTER TABLE `gold_write`
  ADD PRIMARY KEY (`GOLD_wr_num`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `gold_write`
--
ALTER TABLE `gold_write`
  MODIFY `GOLD_wr_num` int(11) NOT NULL AUTO_INCREMENT COMMENT '고유번호';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
