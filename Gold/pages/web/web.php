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

  <!-- join form css link -->
  <link rel="stylesheet" href="/Gold/css/design_web_app.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">
</head>
<body>
  <div class="wrap">

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>



  <section class="contents web hasTitle">
    <div class="center">
      <div class="title">
        <h2>WEBSITE PROJECTS</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <a href="#" class="subLink">View More Details</a> 
        </div>
      </div>
      <!-- end of title -->

     
      <div class="webBoxes deWeBoxes">

        <?php
          include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";
          $sql="select * from gold_web order by GOLD_WEB_num desc";
          $web_result=mysqli_query($dbConn, $sql);

          while($web_row=mysqli_fetch_array($web_result)){
            $web_num=$web_row['GOLD_WEB_num'];
            $web_thumb_path=$web_row['GOLD_WEB_thumb'];
            $web_title=$web_row['GOLD_WEB_tit'];
            $web_desc=$web_row['GOLD_WEB_des'];
            $web_domain=$web_row['GOLD_WEB_dom'];

        ?>

        <div class="webBox deWeBox">
          <div>
            <p class="webImg deWeImg">
              <img src="/Gold/data/web_page/thumb/<?=$web_thumb_path?>" alt="">
            </p>
            <div class="webTxt deWeTxt">
              <h2><?=$web_title?></h2>
              <em class="cutTxt"><?=$web_desc?></em>
            </div>
            <div class="webBoxBtns">
              <a href="/Gold/pages/web/web_detail.php?num=<?=$web_num?>">View Details</a>
              <a href="<?=$web_domain?>" target="_blank">View Website</a>
            </div>
          </div> 
        </div>
        <!-- end of loop web box -->

        <?php
          }
        ?>



      </div>
      <!-- end of web boxes -->

        

      

      <!-- upload, go to top, load 버튼 -->
      <div class="btns">          
        <?php
        if($userlevel==1){
        ?>

        <a href="#" class="commonBtn webLoadMore">Load More</a>
        <a href="#" class="commonBtn toTop">Go To Top</a>
        <a href="/Gold/pages/web/web_input_form.php" class="commonBtn">Upload Contents</a>
        
        <?php
        }else{
        ?>
        <a href="#" class="commonBtn webLoadMore">Load More</a>
        <a href="#" class="commonBtn toTop">Go To Top</a>

        
        <?php
        }
        ?>
      
      </div>

    

    </div>
    <!-- end of center -->


  </section>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/about.php" ?>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/footer.php" ?>




  </div>
 
 <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/Gold/js/custom.js"></script>
  <script src="/Gold/js/web_design_page.js"></script>

  <script>

 

  </script>

</body>
</html>