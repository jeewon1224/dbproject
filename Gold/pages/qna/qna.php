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
            <li class="qnaTitle clear">
              <span class="qnaNum">번호</span>
              <span class="qnaId">아이디</span>
              <span class="qnaTit">제목</span>
              <span class="qnaReg">등록일</span>
              <span class="qnaHit">조회수</span>
            </li>
            <li class="qnaContent clear">
              <span class="qnaNum">1</span>
              <span class="qnaId">jw</span>
              <span class="qnaTit"><a href="">첫 게시글 입니다.</a></span>
              <span class="qnaReg">2021-01-22</span>
              <span class="qnaHit">100</span>
            </li>
            <li class="qnaContent clear">
              <span class="qnaNum">2</span>
              <span class="qnaId">Eve</span>
              <span class="qnaTit"><a href="">두번째 게시글 입니다.</a></span>
              <span class="qnaReg">2021-01-22</span>
              <span class="qnaHit">96</span>
            </li>
            <li class="qnaContent clear">
              <span class="qnaNum">3</span>
              <span class="qnaId">Jeewon</span>
              <span class="qnaTit"><a href="">세번째 게시글 입니다.</a></span>
              <span class="qnaReg">2021-01-22</span>
              <span class="qnaHit">30</span>
            </li>
          </ul>
        </div>
        <!-- end of qnaTable -->

        <div class="searchPaging clear">
          <div class="search">
            <form action="abc.php" name="qnaSearch" class="clear">
              <select name="searchSelect" id="" class="searchSelect">
                <option value="qnaSearchId">아이디</option>
                <option value="qnaSearchId">제목</option>
                <option value="qnaSearchId">내용</option>
              </select>
              <input type="text" name="qnaSearchInput" placeholder="검색어를 입력해주세요." class="qnaSearchInput">
              <button type="button" class="qnaSearchBtn"><i class="fa fa-search"></i></button>
            </form>
          </div>
          <div class="paging">
            <span class="firstPg"><i class="fa fa-angle-double-left"></i></span>
            <span class="prevPg"><i class="fa fa-angle-left"></i></span>
            <span class="PgNum active">1</span>
            <span class="PgNum">2</span>
            <span class="nextPg"><i class="fa fa-angle-right"></i></span>
            <span class="lastPg"><i class="fa fa-angle-double-right"></i></span>
          </div>
          <!-- end of paging -->      
        </div>
        <!-- end of searchPaging -->

        <div class="writeBox">
          <form action="abc.php" method="post">
            <input type="text" placeholder="제목을 입력해주세요.">  
            <input type="text" placeholder="질문을 작성해주세요.">  
            <button class="writeBtn">글쓰기</button>
          </form>
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

  <script>

 

  </script>

</body>
</html>