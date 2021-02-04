
<?php

  $web_result_num=$_GET['num'];

   //web page image upload directory

  $web_title = nl2br($_REQUEST['web_title']);
  $web_title = addslashes($web_title);
  $web_serial = $_REQUEST['web_serial'];
  $web_client = $_REQUEST['web_client'];
  $web_domain = $_REQUEST['web_domain'];
  $web_desc = nl2br($_REQUEST['web_desc']);
  $web_desc = addslashes($web_desc); 
  $regist_day = date("Y-m-d");


  $img_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/web_page/pc/';
  $mobile_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/web_page/mobile/';
  $thumb_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/web_page/thumb/';


  //main image
   $main_name = $_FILES['main']['name'];
   $main_tmp_name = $_FILES['main']['tmp_name']; //파일의 임시 이름. 현재 서버에 업로드되어있는 위치. (인코딩 시)
   $main_error = $_FILES['main']['error']; //main 이라는 네임을 가진 요소한테서 에러를 찾아낸다(t/f용)
 
 
   //mobile image
   $mobile_name = $_FILES['mobile']['name'];
   $mobile_tmp_name = $_FILES['mobile']['tmp_name']; //
   $mobile_error = $_FILES['mobile']['error'];
 
 
   //thumbnail image
   $thumbnail_name = $_FILES['thumbnail']['name'];
   $thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
   $thumbnail_error = $_FILES['thumbnail']['error'];
  

  // echo
  //   $web_title,
  //   $web_serial,
  //   $web_client,
  //   $web_domain,
  //   $web_desc,
  //   $main_name,
  //   $mobile_name,
  //   $thumbnail_name,
  //   $regist_day;




// ****************************************************



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

  //mobile image upload
  if($mobile_name && !$mobile_error){  
    $uploaded_mobile_file = $mobile_upload_dir.$mobile_name; 
    if(!move_uploaded_file($mobile_tmp_name, $uploaded_mobile_file)){
      echo "
        <script>
          alert('사진이 업로드되지 않았습니다!');
        </script>
      ";
      exit;
    }
  }else{
    $mobile_name = '';
  }

  

  //thumbnail image upload
  if($thumbnail_name && !$thumbnail_error){  
    $uploaded_thumbnail_file = $thumb_upload_dir.$thumbnail_name; 
    if(!move_uploaded_file($thumbnail_tmp_name, $uploaded_thumbnail_file)){
      echo "
        <script>
          alert('사진이 업로드되지 않았습니다!');
        </script>
      ";
      exit;
    }
  }else{
    $thumbnail_name = '';
  }



// ******************************************

  //data base connect
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";


  $sql="update gold_web set 
  GOLD_WEB_tit='$web_title',
  GOLD_WEB_ser='$web_serial',
  GOLD_WEB_des='$web_desc',
  GOLD_WEB_img='$main_name', 
  GOLD_WEB_mimg='$mobile_name', 
  GOLD_WEB_thumb='$thumbnail_name', 
  GOLD_WEB_cli='$web_client',
  GOLD_WEB_reg='$regist_day',
  GOLD_WEB_dom='$web_domain'  where GOLD_WEB_num=$web_result_num";


   mysqli_query($dbConn, $sql);


  echo "
    <script>
      location.href='/Gold/pages/web/web.php';
    </script>
    ";

?>