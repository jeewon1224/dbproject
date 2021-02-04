<?php
  $rep_ans_num=$_GET['num'];

  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
  $sql="delete from gold_ans where GOLD_ANS_num=$rep_ans_num";

  mysqli_query($dbConn, $sql);

  echo "
  <script>
  alert('삭제가 완료되었습니다.');
    history.go(-1);  // 이전 페이지로 가는 함수
  </script>
  ";
?>