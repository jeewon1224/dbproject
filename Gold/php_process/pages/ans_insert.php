<?php
  $ans_qna_num=$_GET['num'];
  $ans_con=$_POST['ansInputTxt'];
  $ans_con=addslashes($ans_con);
  $ans_reg=date("Y-m-d");

  //  echo $ans_qna_num;
  //  echo $ans_con;
  //  echo $ans_reg;

  //data base connect
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";

  $sql="insert into gold_ans(
    GOLD_ANS_QNA_num,
    GOLD_ANS_con,
    GOLD_ANS_reg
  ) values (
    '$ans_qna_num',
    '$ans_con',
    '$ans_reg'
  )";
  

  mysqli_query($dbConn, $sql);
  
  echo "
  <script>
  alert('답변 등록이 완료되었습니다.');
    location.href='/Gold/pages/qna/qna.php';
  </script>
  ";

?>