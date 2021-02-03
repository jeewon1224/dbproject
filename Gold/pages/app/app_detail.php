<?php
  $app_detail_num = $_GET['num'];
  
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
$sql="select * from gold_app where GOLD_APP_num=$app_detail_num";

$app_result=mysqli_query($dbConn, $sql);
$app_row=mysqli_fetch_array($app_result);



$app_detail_tit=$app_row['GOLD_APP_tit'];
$app_detail_ser=$app_row['GOLD_APP_ser'];
$app_detail_des=$app_row['GOLD_APP_des'];
$app_detail_img=$app_row['GOLD_APP_img'];
// $app_detail_mImg=$app_row['GOLD_APP_mimg'];
// // $app_detail_thumb=$app_row['GOLD_APP_thumb'];
$app_detail_cli=$app_row['GOLD_APP_cli'];
$app_detail_reg=$app_row['GOLD_APP_reg'];
// $web_detail_domain=$web_row['GOLD_WEB_dom'];


// echo $app_detail_tit, $app_detail_ser, $app_detail_des, $app_detail_img1, $app_detail_img2, $app_detail_thumb, $app_detail_cli, $app_detail_reg;



?>


<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold</title>
<!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- lightslider plugin link -->
  <link rel="stylesheet" href="/Gold/plugin/lightslider.css">


  <!-- design section css link -->
  <link rel="stylesheet" href="/Gold/css/design_web_app.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">
</head>
  <body>
    <div class="wrap">

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>



    <section class="contents appDetail dewebDetail">
      <div class="center clear">
        <div class="appLeft deWeLeft">

          <div class="title">
            <h2><?=$app_detail_tit?></h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="/Gold/pages/app/app.php">view all applications</a>
            </div>
          </div>
          <!-- end of title -->
          
          <div class="detailCon">
            <div class="appFramebox">
              <ul id="appMain">
                <li>
                  <img src="/Gold/data/app_page/app_main/<?=$app_detail_img?>" alt="">
                </li>
                <li>
                  <img src="/Gold/data/app_page/app_main/app_main_005.png" alt="">
                </li>
                <li>
                  <img src="/Gold/data/app_page/app_main/app_main_006.png" alt="">
                </li>
              </ul>
              <span class="frameTop"></span>
              <span class="frameLeft"></span>
              <span class="frameRIght"></span>
              <span class="frameBottom"></span>
            </div>

            <div class="appStoreBtns">
              <a href="#"><img src="/Gold/img/app_store.jpg" alt=""></a>
              <a href="#"><img src="/Gold/img/google_play.jpg" alt=""></a>
            </div>


            <p class="detailInfo">
              Projected By Gold Dev. Team / <?=$app_detail_ser?> / Used in <?=$app_detail_cli?> / <?=$app_detail_reg?>
            </p>

            <div class="detailDesc">
              <p><?=$app_detail_des?></p>
              <a href="/Gold/index.php#contact"><i class="fa fa-arrow-right"></i>Get In Touch With...</a>
            </div>


            <?php
              if($userlevel != 1){
              ?>
              <input type="hidden">
              <?php
              } else {
              ?>
              <div class="productAdminBtns">
                <button type="button" onclick="location.href='/gold/pages/admin/update_product.php?key=app_update_form&num=<?=$app_detail_num?>'">수정</button>
                <button type="button" onclick="confirmDel()">삭제</button>
              </div>
              <?php
              }
              ?>
              <script>
                function confirmDel(){
                  let confirmCheck = confirm('정말로 삭제하시겠습니까?')
                  if(confirmCheck == false){
                    return false;
                  } else {
                    location.href='/gold/php_process/pages/app_detail_delete.php?num=<?=$app_detail_num?>';
                  }            
                }
              </script>
            <!-- end of app detail description -->

          </div>
          <!-- end of app detail Con -->
        </div>
        <!-- end of left box -->
        
        <div class="appRight deWeRight">

          <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/web_side_detail.php" ?>
          <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/app_side_detail.php" ?>





         
        </div>
        <!-- end of design right -->

      </div>
      <!-- end of center -->


    </section>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/about.php" ?>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/footer.php" ?>




    </div>
  
  <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/Gold/plugin/lightslider.js"></script>
    <script src="/Gold/js/custom.js"></script>
    <script src="/Gold/js/web_detail.js"></script> 
    <!-- 웹 디테일 앱디테일 글자 자르는 방식 똑같아서 그냥 앱디테일 js 안만들고 가져옴 -->
    <script>
      $(function(){
        //lightslider 옵션 참조 : https://sseung-fire.tistory.com/18 
        //lightslider documentation : http://sachinchoolur.github.io/lightslider/examples.html
        $("#appMain").lightSlider({
          loop:true,
          keyPress:true,
          item:1,
          auto: true,
          speed:500,
          controls: false
         
        });
      });
    </script>


  </body>
</html>