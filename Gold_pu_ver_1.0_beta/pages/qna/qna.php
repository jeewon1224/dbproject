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
        <h2>Inquiry</h2>
        <div class="subTit">
          <span class="subLine"></span>
          <a href="#" class="subLink">View More Details</a> 
        </div>
      </div>
      <!-- end of title -->

     
      <div class="qnaBoxes deWeBoxes">
        <div class="qnaTable">
          <ul class="qnaList">
            <!-- <li class="qnaTitle clear">
              <span class="qnaNum">번호</span>
              <span class="qnaId">아이디</span>
              <span class="qnaTit">제목</span>
              <span class="qnaReg">등록일</span>
              <span class="qnaHit">조회수</span>
            </li> -->
            
            <!-- ajax code inside here -->
           
          </ul>
        </div>
        <!-- end of qnaTable -->

        <div class="searchPaging clear">
          <div class="search">
            <form action="/Gold/pages/qna/qna_search_result.php" method="post" name="qnaSearch" class="clear qnaSearch">
              <select name="searchSelect" id="" class="searchSelect">
                <option value="qnaSearchId">아이디</option>
                <option value="qnaSearchTit">제목</option>
                <!-- <option value="qnaSearchCon">내용</option> -->
              </select>
              <input type="text" name="qnaSearchInput" placeholder="검색어를 입력해주세요." class="qnaSearchInput">
              <button type="button" class="qnaSearchBtn"><i class="fa fa-search" onclick="search_check()"></i></button>
              <script>
              function search_check(){
                if(!document.qnaSearch.qnaSearchInput.value){
                  alert('검색어를 입력해 주세요');
                  document.qnaSearch.qnaSearchInput.focus();
                  return;
                }
                document.qnaSearch.submit();
              }
              </script>
            </form>
          </div>
          <!-- end of search -->
          
          <div class="paging">
            <span class="firstPg" onclick="firstPage()"><i class="fa fa-angle-double-left"></i></span>
            <span class="prevPg" onclick="goPrev()"><i class="fa fa-angle-left"></i></span>


            <?php
              include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
              $sql="select * from gold_qna order by GOLD_QNA_num desc";

              $paging_result = mysqli_query($dbConn, $sql);
              $total_record = mysqli_num_rows($paging_result);
              // echo $total_record;
              $scale = 5;
              
              if($total_record % $scale == 0){
                $total_page=floor($total_record/$scale);
              }else{
                $total_page=floor($total_record/$scale) + 1;

              }
            

              for($i=1; $i<=$total_page; $i++){
            ?>



            <span class="PgNum" onclick="getPage(<?=$i?>)"><?=$i?></span>

            <?php
              }
            ?>

            
            <span class="nextPg" onclick="goNext()"><i class="fa fa-angle-right"></i></span>
            <span class="lastPg" onclick="lastPage()"><i class="fa fa-angle-double-right"></i></span>
          </div>
          <!-- end of paging -->      
        </div>
        <!-- end of searchPaging -->

        <div class="writeBox clear">
          <div class="qnaGuide">
            <span>글쓰기</span>
            <?php
            if($userid==''){
            ?>
            <span><a href="/Gold/pages/login/login_form.php">로그인</a></span>
            <?php
            }else{
            ?>
            <span><?=$userid?></span>
            <?php
            }
            ?>
          </div>
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
          <button type="submit" class="qnaSubmit">등록</button>
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
  <script src="/Gold/js/qna_ajax.js"></script>

  <script>
    const qnaSubmit = document.querySelector(".qnaSubmit");
    qnaSubmit.addEventListener('click', insertQna);

    function plzLogin(){
      alert('로그인이 필요합니다.')
    }

    function insertQna(){
      if(!document.writeForm.qnaTitle.value){
        alert("제목을 입력해주세요.");
        document.writeForm.qnaTitle.focus();
        return;
      }

      if(!document.writeForm.qnaTxt.value){
        alert("내용을 입력해주세요.");
        document.writeForm.qnaTxt.focus();
        return;
      }

      document.writeForm.submit();
    }
 

  </script>

</body>
</html>