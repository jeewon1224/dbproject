<?php
  $msg_num=$_GET['num'];

  // database connect
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
  $sql="delete from gold_msg where GOLD_MSG_num = $msg_num";

  mysqli_query($dbConn, $sql);

  echo "
  <script>
  alert('삭제가 완료되었습니다.');
    location.href='/Gold/pages/admin/admin.php';
    // history.go(-1);  // 이전 페이지로 가는 함수
  </script>
  ";
?>