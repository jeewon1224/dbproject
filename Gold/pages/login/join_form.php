<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold</title>
<!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- join form css link -->
  <link rel="stylesheet" href="/Gold/css/join_form.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">
</head>
<body>
  <div class="wrap">

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>


  <section class="contents join hasTitle">
    <div class="center">
      <div class="title">
        <h2>JOIN US</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <a href="#" class="subLink">View More Details</a> 
        </div>
      </div>
        <div class="joinBox">
        <form action="/Gold/php_process/login/insertMembers.php" method="post" name="memberForm">
          <p class="idInputBox inputBox">
            <label for="id">ID</label>
            <input type="text" name="id" class="columnTitle" id="id" placeholder="Your ID">
            <button type="button" name="button" class="columnTitle" id="idCheck">Check</button>
          </p>
          <p class="nameInputBox inputBox">
            <label for="name">NAME</label>
            <input type="text" name="name" class="columnTitle" id="name" placeholder="Your Name">
          </p>
          <p class="passInputBox inputBox">
            <label for="pass">PASSWORD</label>
            <input type="password" name="pass" class="columnTitle" id="pass" placeholder="Your Password">
          </p>
          <p class="checkInputBox inputBox">
            <label for="check">PASSWORD CHECK</label>
            <input type="password" name="check" class="columnTitle" id="check" placeholder="Check Your Password">
          </p>
          <p class="emailInputBox inputBox">
            <label for="email">EMAIL</label>
            <input type="text" name="email1" class="email1" id="email1" placeholder="Your Email ID">
            <span>@</span>
            <input type="text" name="email2" class="email2" id="email2" placeholder="Your Email Adress">
          </p>

          <div class="formBtns">
            <button type="button" class="sendBtn">SEND</button>
            <!-- <input type="submit" value="SEND"> -->
            <button type="button" class="resetBtn">RESET</button>
          </div>

        </form> 
        <!-- form 태그에서 name은 매우 중요!! -> 그 form을 가져올 수 있는 고유한 키 역할! -->

      </div>
      <!-- end of join box -->
    </div>
    <!-- end of center -->


  </section>

  
    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/about.php" ?>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/footer.php" ?>



  </div>
 
 <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/Gold/js/custom.js"></script>
  <script src="/Gold/js/join_check.js"></script>
  
  <script>
    $(function(){
      $('#idCheck').click(function(){
        const url='/Gold/php_process/login/member_check_id.php?id=' + $("#id").val();
        $.get(url, function(data){
          alert(data);
        });

      });
    });
  </script>

</body>
</html>