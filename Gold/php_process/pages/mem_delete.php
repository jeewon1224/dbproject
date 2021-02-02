<?php
$mem_num=$_GET['num'];


// database 연결
include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";
$sql= "delete from gold_mem where GOLD_mem_num=$mem_num";

mysqli_query($dbConn, $sql);


echo "
<script>
  alert('삭제가 완료되었습니다.');
  location.href='/Gold/pages/admin/admin.php';
</script>
";

?>