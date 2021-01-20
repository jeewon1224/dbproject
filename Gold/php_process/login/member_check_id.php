<?php
  //get변수로 주소의 아이디값 저장
  $check_id=$_GET['id'];

  // echo $check_id;

  if(!$check_id){
    echo "아이디를 입력해주세요.";
  } else{
    include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";    //데이터베이스 연결
    $sql = "select * from gold_mem where GOLD_mem_id='$check_id'"; //db연결 후 gold_mem 테이블을 조회해서 db의 id컬럼의 id가 내가 입력한 id와 일치하는지 확인한다. 
    $result = mysqli_query($dbConn, $sql); //db에서 받아온 정보를 변수에 저장함
    $num_record = mysqli_num_rows($result);

    if($num_record){
      echo $check_id."는(은) 존재하는 아이디 입니다.";
      echo "\n다른 아이디를 입력해주세요.";

    } else {
      echo $check_id."는(은) 사용 가능한 아이디 입니다.";
    }
  }
?>