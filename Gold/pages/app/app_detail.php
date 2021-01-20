<?php
  $app_detail_num = $_GET['num'];
  
//   include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
// $sql="select * from gold_web where GOLD_WEB_num=$web_detail_num";

// $web_result=mysqli_query($dbConn, $sql);
// $web_row=mysqli_fetch_array($web_result);



// $web_detail_tit=$web_row['GOLD_WEB_tit'];
// $web_detail_ser=$web_row['GOLD_WEB_ser'];
// $web_detail_des=$web_row['GOLD_WEB_des'];
// $web_detail_img=$web_row['GOLD_WEB_img'];
// $web_detail_mImg=$web_row['GOLD_WEB_mimg'];
// // $web_detail_thumb=$web_row['GOLD_WEB_thumb'];
// $web_detail_cli=$web_row['GOLD_WEB_cli'];
// $web_detail_reg=$web_row['GOLD_WEB_reg'];
// $web_detail_domain=$web_row['GOLD_WEB_dom'];


// echo $design_detail_tit, $design_detail_ser, $design_detail_des, $design_detail_img1, $design_detail_img2, $design_detail_thumb, $design_detail_cli, $design_detail_reg;



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
            <h2>App Title</h2>
            <div class="linkBox">
              <span class="line"></span>
              <a href="/Gold/pages/app/app.php">view all applications</a>
            </div>
          </div>
          <!-- end of title -->
          
          <div class="detailCon">

          </div>
          <!-- end of web detail Con -->
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
    <script src="/Gold/js/custom.js"></script>

  <script src="/Gold/js/web_detail.js"></script>


  </body>
</html>