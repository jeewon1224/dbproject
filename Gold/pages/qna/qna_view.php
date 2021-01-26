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

  <!-- design css link -->
  <link rel="stylesheet" href="/Gold/css/design_web_app.css">

  <!-- qna css link -->
  <link rel="stylesheet" href="/Gold/css/qna.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">
</head>
<body>
  <div class="wrap">

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>



  <section class="contents qna hasTitle">
    <div class="center">
      <div class="title">
        <h2>View Inquiry</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <a href="#" class="subLink">View More Details</a> 
        </div>
      </div>
      <!-- end of title -->

     
      <div class="qnaBoxes qnaView deWeBoxes">

        <div class="writerInfo">
          <p>Posted By JWK1224 No.14 / 2021.02.02 / Hit 100</p>
        </div>
               

        <div class="writeBox clear">
          
          <form action="/Gold/php_process/pages/qna_insert.php?id=<?=$userid?>" method="post" class="writeForm" name="writeForm">
            <p class="qnaTitInput">
              <label for="qnaTitle">제목</label>
              <input type="text" name="qnaTitle" id="qnaTitle" placeholder="제목을 입력해주세요.">
            </p>
            <p class="qnaTxtInput">
              <textarea name="qnaTxt" placeholder="내용을 입력해주세요."></textarea>
            </p>
          </form>
          <?php
          if($userid==''){
          ?>
          <button type="submit" onclick="plzLogin()">등록</button>
          <?php
          }else {
          ?>
          <button type="submit" class="">수정</button>
          <button type="submit" class="">돌아가기</button>
          <?php
          }
          ?>
        </div>
        <!-- end of write Box -->

      </div>
      <!-- end of qna boxes -->
    
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


  
</body>
</html>