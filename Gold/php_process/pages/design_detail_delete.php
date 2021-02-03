<?php
  $delete_delete_num=$_GET['num'];

  include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";
  $sql="delete from gold_de where GOLD_DE_num=$delete_delete_num";

  mysqli_query($dbConn, $sql);


  echo "
  <script>
  alert('삭제가 완료되었습니다.');
    location.href='/Gold/pages/design/design.php';
  </script>
  ";
?>
?>