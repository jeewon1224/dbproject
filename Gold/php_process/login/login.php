<?php
  $login_id=$_POST['loginId'];
  $login_pass=$_POST['loginPass'];


  //입력 데이터 전달 받아 저장
  echo $login_id, $login_pass; 

  //데이터 베이스 접속 후 조회 결과 회수
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";

  //GOLD_mem_id 컬럼 데이터가 입력 데이터(입력한 id)와 같은 값인지를 조회함 
  $sql="select * from gold_mem where GOLD_mem_id='$login_id'";

  $result = mysqli_query($dbConn, $sql);
  $num_match = mysqli_num_rows($result);



  //mysqli_fetch_array()
  // $row = mysqli_fetch_array($result);
  // $db_pass = $row['GOLD_mem_pass'];
  // $db_name = $row['GOLD_mem_name'];

  // echo $db_pass, $db_name;


  if(!$num_match){
    echo "
      <script>
        alert('등록되지 않은 아이디입니다.');
        history.go(-1);
      </script>  
    ";  //아이디 일치하지 않을 시 알림창 + 이전페이지로 이동
  } else {
    $row = mysqli_fetch_array($result);
    $db_pass = $row['GOLD_mem_pass'];
  
    if($login_pass != $db_pass){    //입력된 비번과 데이터베이스의 비번이 다르다면
      echo "
      <script>
        alert('비밀번호가 틀립니다.');
        history.go(-1);            //이전페이지로 돌아감
      </script>  
    ";
    }else{
      session_start();
      $_SESSION["userid"]=$row['GOLD_mem_id'];
      $_SESSION["userpoint"]=$row['GOLD_mem_point'];
      $_SESSION["userlevel"]=$row['GOLD_mem_level'];
      

      echo "
        <script>
          location.href='/Gold/index.php';
        </script>
      ";   // 성공시 인덱스(메인페이지)로 이동
    }
  
  }
?>