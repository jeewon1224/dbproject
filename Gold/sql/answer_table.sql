-- CREATE TABLE `test`.`gold_ans` (
--   `GOLD_ans_num` INT NULL AUTO_INCREMENT COMMENT '고유번호' ,
--   `GOLD_ans_writer` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '글쓴이' ,
--   `GOLD_ans_content` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '답글' ,
--   `GOLD_ans_wr_num` INT NOT NULL COMMENT '글 연결 번호' ,
--                         PRIMARY KEY (`GOLD_ans_num`)
--                        ) ENGINE = InnoDB;



CREATE TABLE `gold_ans` (
  `GOLD_re_num` int(11) NOT NULL COMMENT '고유번호',
  `GOLD_re_id` varchar(30) CHARACTER SET utf8 NOT NULL COMMENT '글쓴이',
  `GOLD_re_cont` text CHARACTER SET utf8 NOT NULL COMMENT '답글',
  `GOLD_re_wr_num` int(11) NOT NULL COMMENT '원 글 번호'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
