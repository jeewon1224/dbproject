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
  <link rel="stylesheet" href="/Gold/css/web_design_input.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">
</head>
<body>
  <div class="wrap">

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>



  <section class="contents designUpload hasTitle">
    <div class="center">
      <div class="title">
        <h2>UPLOAD PROJECTS</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <!-- <a href="#" class="subLink">View More Details</a>  -->
        </div>
      </div>
      <!-- end of title -->

      
      <?php 
        $include_path=$_GET['key'];
        include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/$include_path.php" 
      ?>
      

    </div>
    <!-- end of center -->


  </section>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/about.php" ?>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/footer.php" ?>




  </div>
 
 <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/Gold/js/custom.js"></script>
  <script src="/Gold/js/design_upload.js"></script>
  <script>
    const submitBtn = document.querySelector("#submitBtn");

    submitBtn.addEventListener('click', function(){
      if(!document.web_form.web_title.value){
        alert('상품명을 입력해주세요!');
        document.web_form.web_title.focus();
        return;
      }

      if(!document.web_form.web_serial.value){
        alert('시리얼 번호를 입력해주세요!');
        document.web_form.web_serial.focus();
        return;
      }

      if(!document.web_form.web_client.value){
        alert('납품업체를 입력해주세요!');
        document.web_form.web_client.focus();
        return;
      }

      if(!document.web_form.web_domain.value){
        alert('도메인 주소를 입력해주세요!');
        document.web_form.web_domain.focus();
        return;
      }

      if(!document.web_form.web_desc.value){
        alert('상품 설명을 입력해주세요!');
        document.web_form.web_desc.focus();
        return;
      }

      
      if(!document.web_form.main.value){
        alert('메인 사진을 등록해주세요!');
      // 사진은 입력하는 것이 아니기 때문에 focus 기능 필요 없다
        return;
      }


      if(!document.web_form.mobile.value){
        alert('서브 사진을 등록해주세요!');
        return;
      }

      
      if(!document.web_form.thumbnail.value){
        alert('썸네일 사진을 등록해주세요!');
        return;
      }


      document.web_form.submit();
    });
  </script>


</body>
</html>


