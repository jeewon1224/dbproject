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

  <!-- admin css link -->
  <link rel="stylesheet" href="/Gold/css/admin.css">

  <!-- css link -->
  <link rel="stylesheet" href="/Gold/css/style.css">
  <link rel="stylesheet" href="/Gold/css/animation.css">
  <link rel="stylesheet" href="/Gold/css/media.css">
</head>
<body>
  <div class="wrap">

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/header.php" ?>



  <section class="contents admin hasTitle">

  <?php
  if($userlevel != 1){
  ?>

  <div class="deny">
    <p>관리자 페이지 입니다. 관리자 로그인 후 이용해 주세요.</p>
    <a href="/Gold/pades.login/login_form.php">로그인</a>
  </div>
  
  <?php
  }else{
  ?>




    <div class="center">
      <div class="adminTabs">
        <button type="button" class="active">메시지 관리</button>
        <button type="button">회원 관리</button>
        <button type="button">Web 관리</button>
        <button type="button">App 관리</button>
        <button type="button">Q&A 관리</button>
      </div>

     
      <div class="msgTab deWeBoxes adminPanel">
        <div class="msgTable">
          <ul class="msgList">
            <li class="msgTitle clear">
              <span class="msgNum">번호</span>
              <span class="msgId">아이디</span>
              <span class="msgTit">제목</span>
              <span class="msgReg">등록일</span>
              <span class="msgEmail">이메일</span>
              <span class="msgDelete">삭제</span>
            </li>

            <?php
            include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
            $sql="select * from gold_msg order by GOLD_MSG_num desc limit 5";
            
            $msg_result = mysqli_query($dbConn, $sql);

            while($msg_row=mysqli_fetch_array($msg_result)){
              $msg_num=$msg_row['GOLD_MSG_num'];
              $msg_id=$msg_row['GOLD_MSG_name'];
              $msg_tit=$msg_row['GOLD_MSG_tit'];
              $msg_con=$msg_row['GOLD_MSG_con'];
              $msg_reg=$msg_row['GOLD_MSG_reg'];
              $msg_email=$msg_row['GOLD_MSG_email'];
            
            ?>

            <li class="msgContents clear">
              <span class="msgNum"><?=$msg_num?></span>
              <span class="msgId"><?=$msg_id?></span>
              <span class="msgTit"><a href="#"><?=$msg_tit?></a></span>
              <span class="msgReg"><?=$msg_reg?></span>
              <span class="msgEmail"><?=$msg_email?></span>
              <span class="msgDelete"><a href="#">삭제</a></span>
            </li>
            
            <?php
            }
            ?>
            <!-- ajax code inside here  -> 에이잭스 코드 대신에 li 넣음-->
           
          </ul>
        </div>        
      </div>
      <!-- end of msg tab -->
      
      <div class="memberTab adminPanel">member tab</div>
      <div class="webTab adminPanel">web tab</div>
      <div class="appTab adminPanel">app tab</div>
      <div class="qnaTab adminPanel">qna tab</div>
    </div>
    <!-- end of center -->


  </section>

  <?php
  }
  ?>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/about.php" ?>

  <?php include $_SERVER["DOCUMENT_ROOT"]."/Gold/include/footer.php" ?>




  </div>
 
 <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/Gold/js/custom.js"></script>
  <script src="/Gold/js/web_design_page.js"></script>
  <script src="/Gold/js/admin.js"></script>
</body>
</html>