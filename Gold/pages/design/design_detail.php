<?php
  $design_detail_num = $_GET['num'];
  
  include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
$sql="select * from gold_de where GOLD_DE_num=$design_detail_num";

$result=mysqli_query($dbConn, $sql);
$row=mysqli_fetch_array($result);



$design_detail_tit=$row['GOLD_DE_tit'];
$design_detail_ser=$row['GOLD_DE_ser'];
$design_detail_des=$row['GOLD_DE_des'];
$design_detail_img1=$row['GOLD_DE_img1'];
$design_detail_img2=$row['GOLD_DE_img2'];
$design_detail_thumb=$row['GOLD_DE_thumb'];
$design_detail_cli=$row['GOLD_DE_cli'];
$design_detail_reg=$row['GOLD_DE_reg'];


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



    <section class="contents designDetail dewebDetail">
      <div class="center clear">
        <div class="designLeft deWeLeft">
          <div class="title">
            <h2><?=$design_detail_tit?></h2>
            <div class="linkBox">
              <span class="line"></span>
              <a>view all products</a>
            </div>
          </div>
          <!-- end of title -->
          
            <div class="detailCon">
              <div class="detailImg1 clear">
                <div class="imgBox"> 
                  <img src="/Gold/data/design_page/<?=$design_detail_img1?>" alt="">
                </div>
                <div class="imgBox"> 
                  <img src="/Gold/data/design_page/<?=$design_detail_img2?>" alt="">
                </div>
                <div class="imgNav">
                  <a href="#" class="active">
                    <img src="/Gold/data/design_page/<?=$design_detail_img1?>" alt="">
                    <span class="dotOverlay"></span>
                  </a>
                  <a href="#">
                    <img src="/Gold/data/design_page/<?=$design_detail_img2?>" alt="">
                    <span class="dotOverlay"></span>
                  </a>
                </div>
              </div>
              <!-- end of detailImg1 -->

              <p class="detailInfo">
                Designed By Gold Design Team / <?=$design_detail_ser?> / Used in <?=$design_detail_cli?> / <?=$design_detail_reg?>
              </p>


              <div class="detailDesc">
                <p><?=$design_detail_des?></p>
                <a href="/Gold/index.php#contact"><i class="fa fa-arrow-right"></i>Get In Touch With...</a>
              </div>
            </div>
            <!-- end of design detail Con -->
        </div>
        <!-- end of left box -->
        
        <div class="designRight deWeRight">

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
    <script>
      $(function(){

        $(".imgNav>a").click(function(e){
          e.preventDefault();
          var index = $(this).index();
          $(".imgNav>a").removeClass("active");
          $(this).addClass("active")
          $(".imgBox").hide();
          $(".imgBox").eq(index).show();
        });

        $(".imgNav>a").eq(0).trigger("click");
      



      //cut right side text
      const cutTxtBox = $(".webLinks, .appLinks");
      for(let i=0; i<cutTxtBox.length; i++){
        let allTxt=cutTxtBox.eq(i).find("em").text();
        console.log(allTxt);
        cutTxtBox.eq(i).find("em").text(allTxt.substr(0, 60));
      }
      
      
      });

    </script>



  </body>
</html>