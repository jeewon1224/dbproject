<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gold</title>
<!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- join form css link -->
  <link rel="stylesheet" href="/Gold/css/login.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">

<!-- 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/Gold/js/custom.js"></script>
  <script src="/Gold/js/join_check.js" defer></script> -->
</head>
<body>
  <div class="wrap">

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>


  <section class="contents login hasTitle">
    <div class="center">
      <div class="title">
        <h2>LOG IN</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <a href="#" class="subLink">View More Details</a> 
        </div>
      </div>
      <!-- end of title -->
      <form action="/Gold/php_process/login/login.php" method="post" name="loginForm">
        <div class="loginBox">
          <p><input type="text" placeholder="Enter Your ID" name="loginId"></p>
          <p><input type="password" placeholder="Enter Your Password" name="loginPass"></p>
          <div class="loginBtns">
            <a href="#" class="loginBtn" onkeyup="enterkey()">LOGIN</a>
            <a href="/Gold/pages/login/join_form.php" class="joinBtn">JOIN US</a>
          </div>
          <!-- end of loginBtns -->
        </div>
        <!-- end of login box -->
      </form>
      <div class="findInfo">
        <a href="#">아이디 찾기</a>
        <a href="#">비밀번호 찾기</a>
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
  <script src="/Gold/js/join_check.js"></script>
  
  <script>
  const loginBtn = document.querySelector('.loginBtn');
  loginBtn.addEventListener('click', loginCheck);

  function loginCheck(){
    if(!document.loginForm.loginId.value){
      alert('아이디를 입력해주세요.');
      document.loginForm.loginId.focus();
      return;
    }

    if(!document.loginForm.loginPass.value){
      alert('비밀번호를 입력해주세요.');
      document.loginForm.loginPass.focus();
      return;
    }

    document.loginForm.submit();
  }

  (function(){
    document.addEventListener('keydown', function(e){ //keydown :키보드 이벤트! 모든 키 중 하나를 눌렀을 때 누른 키를 저장
      const keyCode = e.keyCode; //keyCode라는 변수에 이벤트에서 넘어온 키코드를 저장한다.
      if(keyCode == 13){ //키코드 13은 엔터--> 즉, 엔터키를 눌렀다면 loginCheck 함수를 실행해라.
        loginCheck();
      }
    });
  })();






  // const loginBtn = document.querySelector('.loginBtn');
  // // const joinBtn = document.querySelector('.joinBtn');

  // loginBtn.addEventListener('click', checkLogin);
  




  //   function checkLogin(){
  //     if(!document.loginForm.loginId.value){
  //       alert('아이디를 입력해주세요.');
  //       document.loginForm.loginId.focus();
  //       return;
  //     }

  //     if(!document.loginForm.loginPass.value){
  //       alert('비밀번호를 입력해주세요.');
  //       document.loginForm.loginPass.focus();
  //       return;
  //   }

  //   document.loginForm.submit();
  // }
  </script>
</body>
</html>