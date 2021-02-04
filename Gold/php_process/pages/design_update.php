<?php


  $design_update_num=$_GET['num'];

// method가 GET방식이든 POST방식이든지 상관없이 변수의 데이터를 값으로 받는다.
$design_title = nl2br($_REQUEST['design_title']);
$design_title = addslashes($design_title);
$design_serial = $_REQUEST['design_serial'];
$design_client = $_REQUEST['design_client'];
$design_desc = nl2br($_REQUEST['design_desc']);
$design_desc = addslashes($design_desc); // nl2br의 2는 to를 의미한다
$regist_day = date("Y-m-d");


// 이미지 가져오기
$img_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/design_page/';
$thumb_upload_dir = $_SERVER['DOCUMENT_ROOT'].'/Gold/data/design_page/thumb/';

//main image
$main_name = $_FILES['main']['name'];
$main_tmp_name = $_FILES['main']['tmp_name']; //파일의 임시 이름. 현재 서버에 업로드되어있는 위치. (인코딩 시)
$main_error = $_FILES['main']['error']; //main 이라는 네임을 가진 요소한테서 에러를 찾아낸다(t/f용)


//sub image
$sub_name = $_FILES['sub']['name'];
$sub_tmp_name = $_FILES['sub']['tmp_name']; //
$sub_error = $_FILES['sub']['error'];


//sub image
$thumbnail_name = $_FILES['thumbnail']['name'];
$thumbnail_tmp_name = $_FILES['thumbnail']['tmp_name'];
$thumbnail_error = $_FILES['thumbnail']['error'];





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
  $uploaded_sub_file = $img_upload_dir.$sub_name; 
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



//data base connect
include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";


$sql="update gold_de set GOLD_DE_tit='$design_title', GOLD_DE_ser='$design_serial', GOLD_DE_des='$design_desc', GOLD_DE_img1='$main_name', GOLD_DE_img2='$sub_name', GOLD_DE_thumb='$thumbnail_name', GOLD_DE_cli='$design_client', GOLD_DE_reg='$regist_day' where GOLD_DE_num=$design_update_num";

// $sql = "insert into gold_de(GOLD_DE_tit, GOLD_DE_ser
// , GOLD_DE_des, GOLD_DE_img1, GOLD_DE_img2, GOLD_DE_thumb, GOLD_DE_cli, GOLD_DE_reg) values('$design_title','$design_serial','$design_desc','$main_name','$sub_name','$thumbnail_name','$design_client','$regist_day')";



mysqli_query($dbConn, $sql);


echo "
<script>
alert('수정이 완료되었습니다.');
  location.href='/Gold/pages/design/design.php';
</script>
";

?>