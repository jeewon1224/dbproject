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



  <section class="contents app hasTitle">
    <div class="center">
      <div class="title">
        <h2>APPLICATIONS</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <a href="#" class="subLink">View More Details</a> 
        </div>
      </div>
      <!-- end of app title -->

     
      <div class="appBoxes deWeBoxes">
        <div class="appBox-sizer"></div>
        <!-- <div class="appBox">
          <div>
            <img src="/Gold/img/app_thumb/app_001.png" alt="">
            <h2>Calorie Checker</h2>
            <a href="#">View Details</a>
          </div>
        </div> -->
        <!-- end of app box -->

      </div>
      <!-- end of app boxes -->

        

      

      <!-- upload, go to top, load 버튼 -->
      <div class="btns">          
        <?php
        if($userlevel==1){
        ?>

        <a href="#" class="commonBtn appLoadMore">Load More</a>
        <a href="#" class="commonBtn toTop">Go To Top</a>
        <a href="/Gold/pages/app/app_input_form.php" class="commonBtn">Upload Contents</a>
        
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
  <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>

  <script src="/Gold/js/custom.js"></script>
  <script src="/Gold/js/web_design_page.js"></script>
  <script src="/Gold/js/app.js"></script>

</body>
</html>