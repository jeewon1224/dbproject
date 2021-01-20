<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold</title>
<!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- css link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/animation.css">
  <link rel="stylesheet" href="css/media.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/custom.js"></script>
</head>
<body>
  <div class="wrap">

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>

    <section class="contents arrivals">
      <div class="center clear"> 
        <!-- center에 clear 줘서 높이 잡아줌 -->
        <div class="title">
         <h2>NEW ARRIVALS</h2>
         <div class="linkBox">
          <span class="line"></span>
          <a>view all products</a>
        </div>
      </div>
      <!-- end of title -->

       <?php
        include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";

       ?> 


      <div class="arrivalBox">
        <div class="arrivalCon">
          <img src="img/new-arrival-1.jpg" alt="">
          <span class="overlay"></span>
          <div class="arrivalTxt">
            <h2>SUMMER</h2>
            <em>COLLECTION</em>
          </div>
        </div>
        <div class="arrivalCon">
          <img src="img/new-arrival-2.jpg" alt="">
          <span class="overlay"></span>
          <div class="best">
            <a href="">BEST</a>
            <p>QUALITY</p>
          </div>
        </div>
        <div class="arrivalCon">
          <img src="img/new-arrival-3.jpg" alt="">
          <span class="overlay"></span>
          <div class="arrivalTxt">
            <h2>AUTUMN</h2>
            <em>COLLECTION</em>
          </div>

        </div>
      </div>

      </div>
    </section>
    <section class="contents product">
      <div class="center clear">
        <div class="title">
          <h2>DESIGN PROJECTS</h2>
          <div class="linkBox">
           <span class="line"></span>
           <a>view all products</a>
         </div>
       </div>
       <div class="productBox clear">
         <div class="boxLeft">

          <?php
            $sql="select * from gold_de order by GOLD_DE_num desc limit 4";   //limit 4 --> 데이터베이스에서 4개까지만 가져온다는 의미
            $result_design=mysqli_query($dbConn, $sql);

            while($row_result=mysqli_fetch_array($result_design)){
              $design_thumb=$row_result['GOLD_DE_thumb'];
          ?>

           <div class="productImg">
             <img src="/Gold/data/design_page/thumb/<?=$design_thumb?>" alt="">
             <span class="outline"><i class="fa fa-search"></i></span>
           </div>

           <?php
            }
           ?>

         </div>

         <div class="boxRight">

            <?php
              $sql="select * from gold_de order by GOLD_DE_num desc limit 4";   //limit 4 --> 데이터베이스에서 4개까지만 가져온다는 의미
              $result_design=mysqli_query($dbConn, $sql);

              while($row_result=mysqli_fetch_array($result_design)){
                $design_num=$row_result['GOLD_DE_num'];
                $design_tit=$row_result['GOLD_DE_tit'];
                $design_des=$row_result['GOLD_DE_des'];

            ?>


           <div class="productTxt">
              <div>
                <h2><?=$design_tit?></h2>
                <p class="abc"><?=$design_des?></p>
                <a href="/Gold/pages/design/design_detail.php?num=<?=$design_num?>" class="commonBtn">VIEW MORE</a>
              </div>
           </div>
           <!-- end of product txt -->

           <?php
            }
           ?>

          </div>
          <!-- end of boc right -->
       </div>
      </div>
    </section>
    <!-- end of product section -->

    <section class="contents ours">
      <div class="center clear">
        <div class="title">
          <h2>WEB & APP REVIEW</h2>
          <div class="linkBox">
           <span class="line"></span>
           <a>view all products</a>
         </div>
       </div>
       <!-- end of title -->

       <div class="fashionBox men">
         <div class="fashionTxt">
           <h2><em>WEB</em> PROJECTS</h2>
           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
           <a href="/Gold/pages/web/web.php">VIEW MORE</a>
         </div>



         <?php
          include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";
          $sql="select * from gold_web order by GOLD_WEB_num desc limit 3";


          $web_result = mysqli_query($dbConn, $sql);
          
          while($web_row = mysqli_fetch_array($web_result)){
            $web_num = $web_row['GOLD_WEB_num'];
            $web_thumb = $web_row['GOLD_WEB_thumb'];
            $web_tit = $web_row['GOLD_WEB_tit'];
            $web_des = $web_row['GOLD_WEB_des'];
            

         ?>


         <div class="fashionImg">
           <div>
            <img src="/Gold/data/web_page/thumb/<?=$web_thumb?>" alt="">
            <h2><?=$web_tit?></h2>
            <em class="cutTxt"><?=$web_des?></em>
            <a href="/Gold/pages/web/web_detail.php?num=<?=$web_num?>">View Details</a>
          </div>
        </div>
        <!-- end of loop box -->
        
        <?php
          }
        ?>
        
         
      </div>
       <!-- end of fashion Men -->


       <div class="fashionBox women">
        <div class="fashionTxt">
          <h2><em>WOMEN</em> FASHION</h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
          <a href="#">VIEW MORE</a>
        </div>
        <div class="fashionImg">
          <div>
           <img src="img/product-type-1.jpg" alt="">
         </div>
        </div>
        <div class="fashionImg">
          <div>
           <img src="img/women-2.jpg" alt="">
         </div>
        </div>
        <div class="fashionImg">
          <div>
           <img src="img/product-type-2.jpg" alt="">
         </div>
        </div>
       </div>
      </div>
    </section>
    <!-- end of Ours section -->

    <!-- <section class="contents about hasTitle">
      <div class="center clear">
        <div class="title">
          <h2>ABOUT US</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <a href="#" class="subLink">View More Details</a> 
          </div>
        </div>
       end of title -->
        <!-- <div class="aboutTxt">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
          </p>
          <p class="address">
            South Korea, Seoul, Kangnam-Gu, Seocho-Dong | 
            <a href="#">admin@gold-design.com</a>
          </p>

          <ul class="sns">
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-vimeo-square"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
        </div>

      </div>

    </section>
    end of about section -->
    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/about.php" ?>



    <!-- contact section -->
    <section class="contents contact hasTitle">
      <div class="center">
        <div class="title">
          <h2>CONTACT US</h2>
          <div class="subTit">
            <span class="subLine"></span>
            <a href="#" class="subLink">View More Details</a> 
          </div>
        </div>
        <div class="contactBox">
          <div class="mapBox">
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d197.87512609370262!2d127.01418812326693!3d37.48427876206533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357ca114196137d5%3A0xac3dea447afe04b8!2z7Iah66a867mM65Sp!5e0!3m2!1sko!2skr!4v1608280817791!5m2!1sko!2skr" ></iframe>
            </div>
          </div>
          <div class="formBox">
            <form action="aaa.php" method="POST" class="form" name="form">
              <p class="nameMail">
                <input type="text" placeholder="NAME">
                <input type="text" placeholder="EMAIL">
              </p>
              <p class="subject">
                <input type="text" placeholder="SUBJECT">
              </p>
              <p class="message">
                <textarea placeholder="WRITE MESSAGE"></textarea>
              </p>
              <a href="#">SEND MESSAGE</a>
            </form>
          </div>
        </div>
      </div>
    </section>
<!-- end of contact section -->

<?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/footer.php" ?>






   
 
 <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src=https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js></script>
  <script>
      $(function(){
        //click 'get in touch with', move scroll to contact in design detail page
        const loca = $(location).attr('href').split('#')[1];

        if(loca == 'contact'){
          //const contactOff = $(`.${loca}`).offset().top;
          const contactOff = $('.' + loca).offset().top;

          $("html, body").animate({scrollTop:contactOff}, 1000, 'easeInQuint');
        }

        //cutting text web text contents
        //cutting text each boxes
        let mainWebBox = $(".fashionImg");

        for(let i = 0; i < mainWebBox.length; i ++){
          let allTxt = mainWebBox.eq(i).find(".cutTxt").text();

          function cutTxt(){
            let winWidth = $(window).width();
            if(winWidth < 800){
              mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 20) + ' ...');
            } else {
              mainWebBox.eq(i).find(".cutTxt").text(allTxt.substr(0, 40) + ' ...');
            }
          }

          $(window).resize(function(){
            cutTxt()
          });
          cutTxt()
        }   


        let abc = [];
        abc =['바보', '멍청이'];
        console.log(abc);

      });
    </script>
</body>
</html>