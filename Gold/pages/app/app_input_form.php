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



  <section class="contents upload hasTitle">
    <div class="center">
      <div class="title">
        <h2>UPLOAD PROJECTS</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <!-- <a href="#" class="subLink">View More Details</a>  -->
        </div>
      </div>
      <!-- end of title -->

      
      <!-- app input contents form -->
      <div class="designInputForm webDesignInput">
        <form action="/Gold/php_process/pages/app_insert.php" method="post" name="app_form" enctype="multipart/form-data">
          <div class="titleSer clear">
            <p class="title_input">
              <label for="title">Title</label>
              <input type="text" placeholder="Title Here" id="title" name="app_title">
            </p>
            <p class="serial_input">
              <label for="serial">SerialNo.</label>
              <input type="text" placeholder="SerialNo. Here" id="serial" name="app_serial">
            </p>
            <p class="client_input">
              <label for="client">Client</label>
              <input type="text" placeholder="Client Name" id="client" name="app_client">
            </p>
          </div>
          <!-- end of title, serial, client input -->
          <div class="app_desc uploadDesc">
            <textarea name="app_desc" placeholder="App Description Here"></textarea>
          </div> 
          <!-- end of text description -->

          <div class="uploadImgs clear">
            <div class="uploadBox appImg img1">
              <div class="inputControll">
                <input class="uploadName" placeholder= "Main Image">
                <label for="mainImage">SELECT IMAGE</label>
                <input type="file" id="mainImage" class="uploadHidden" name="app_main" accept="image/*" value = 1>
              </div>
              <div class="img1_box imgWrap">
                <img id="img1">
              </div>
            </div>
            <div class="uploadBox appImg img2">
              <div class="inputControll">
                <input class="uploadName" placeholder = "Sub Image">
                <label for="subImage">SELECT IMAGE</label>
                <input type="file" id="subImage" class="uploadHidden" name="app_sub" accept="image/*" value = 1>
              </div>
              <div class="img2_box imgWrap">
                <img id="img2">
              </div>
            </div>

            <!-- end of image box -->
          <!-- <p class="registDay"></p> -->
        </form>
      </div>
      <!-- end of design input form -->




      <!-- 더보기 버튼 -->
      <div class="btns">
        <button type="button" class="commonBtn" id="submitBtn">Upload</button>
        <!-- <a href="#" class="commonBtn">Go To Top</a> -->
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
  <script src="/Gold/js/design_upload.js"></script>
  <script>
    const submitBtn = document.querySelector("#submitBtn");

    submitBtn.addEventListener('click', function(){
      if(!document.app_form.app_title.value){
        alert('상품명을 입력해주세요!');
        document.app_form.app_title.focus();
        return;
      }

      if(!document.app_form.app_serial.value){
        alert('시리얼 번호를 입력해주세요!');
        document.app_form.app_serial.focus();
        return;
      }

      if(!document.app_form.app_client.value){
        alert('납품업체를 입력해주세요!');
        document.app_form.app_client.focus();
        return;
      }

      if(!document.app_form.app_desc.value){
        alert('상품 설명을 입력해주세요!');
        document.app_form.app_desc.focus();
        return;
      }

      
      if(!document.app_form.app_main.value){
        alert('메인 사진을 등록해주세요!');
      // 사진은 입력하는 것이 아니기 때문에 focus 기능 필요 없다
        return;
      }


      if(!document.app_form.app_sub.value){
        alert('서브 사진을 등록해주세요!');
        return;
      }

      document.app_form.submit();
    });
  </script>


</body>
</html>


