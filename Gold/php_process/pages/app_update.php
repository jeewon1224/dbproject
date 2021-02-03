<?php
 
 $app_update_num=$_GET['num'];


  // method가 GET방식이든 POST방식이든지 상관없이 변수의 데이터를 값으로 받는다.
  $app_title = nl2br($_REQUEST['app_title']);
  $app_title = addslashes($app_title);
  $app_serial = $_REQUEST['app_serial'];
  $app_client = $_REQUEST['app_client'];
  $app_desc = nl2br($_REQUEST['app_desc']);
  $app_desc = addslashes($app_desc); // nl2br의 2는 to를 의미한다
  $regist_day = date("Y-m-d");

// 이미지 가져오기
  $img_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/app_page/app_main/';
  $thumb_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/app_page/app_thumb/';


  //main image
  $main_name = $_FILES['app_main']['name'];
  $main_tmp_name = $_FILES['app_main']['tmp_name']; //파일의 임시 이름. 현재 서버에 업로드되어있는 위치. (인코딩 시)
  $main_error = $_FILES['app_main']['error']; //main 이라는 네임을 가진 요소한테서 에러를 찾아낸다(t/f용)

  //sub image
  $sub_name = $_FILES['app_sub']['name'];
  $sub_tmp_name = $_FILES['app_sub']['tmp_name']; //
  $sub_error = $_FILES['app_sub']['error'];


  
  // echo
  //   $app_title,
  //   $app_serial,
  //   $app_client,
  //   $app_desc,
  //   $regist_day,
  //   $main_name,
  //   $sub_name;




  //main image upload
  if($main_name && !$main_error){  //조건:사진 지정하고 파일 이름 저장되어서 에러가 없을 때!
    $uploaded_main_file = $img_upload_dir.$main_name; //변수에 img_upload_dir경로를 main_name 이름으로 저장한다.
    if(!move_uploaded_file($main_tmp_name, $uploaded_main_file)){
      echo "
        <script>
          alert('사진이 업로드되지 않았습니다!');
        </script>
      ";
      exit;
    }
  }else{
    $main_name = '';
  }

  //sub image upload
  if($sub_name && !$sub_error){  
    $uploaded_sub_file = $thumb_upload_dir.$sub_name; 
    if(!move_uploaded_file($sub_tmp_name, $uploaded_sub_file)){
      echo "
        <script>
          alert('사진이 업로드되지 않았습니다!');
        </script>
      ";
      exit;
    }
  }else{
    $sub_name = '';
  }




  //data base connect
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";

  $sql="update gold_app set GOLD_APP_tit"


  ?>