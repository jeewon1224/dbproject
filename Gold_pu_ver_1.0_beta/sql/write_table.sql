-- CREATE TABLE `test`.`gold_wr` (
--   `GOLD_wr_num` INT NULL AUTO_INCREMENT COMMENT '고유번호',
--   `GOLD_wr_writer` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '글쓴이',
--   `GOLD_wr_title` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '제목',
--   `GOLD_wr_content` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '내용',
--   `GOLD_wr_hit` INT(11) NULL DEFAULT NULL COMMENT '조회수';
--                    PRIMARY KEY (`GOLD_wr_num`)
--                  ) ENGINE = InnoDB;








CREATE TABLE `gold_wr` (
  `GOLD_wr_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_wr_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '글쓴이',
  `GOLD_wr_title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '글쓰기 제목',
  `GOLD_wr_cont` text CHARACTER SET utf8 NOT NULL COMMENT '내용',
  `GOLD_wr_hit` int(11) DEFAULT NULL COMMENT '조회수'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
