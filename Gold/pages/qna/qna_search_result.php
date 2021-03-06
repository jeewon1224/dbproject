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
        <h2>Search Result</h2>
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

            <?php
            $search_select=$_POST['searchSelect'];
            $search_input=$_POST['qnaSearchInput'];

            // echo $search_select, $search_input;

            //database 연결
            include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";

            if($search_select == 'qnaSearchId'){
              $sql="select * from gold_qna where GOLD_QNA_id LIKE '%$search_input%' order by GOLD_QNA_num desc";

            }else{
              $sql="select * from gold_qna where GOLD_QNA_tit LIKE '%$search_input%' order by GOLD_QNA_tit desc";
            }

            $search_result=mysqli_query($dbConn, $sql);
            $search_result_num=mysqli_num_rows($search_result);

            if(!$search_result_num){
              echo '<li style="padding:10px 0; width:100%; text-align:center;">데이터가 존재하지 않습니다. 검색 조건 및 검색어를 확인해 주세요.</li>';
            }else{
              while($search_result_row=mysqli_fetch_array($search_result)){
                $result_num=$search_result_row['GOLD_QNA_num'];
                $result_id=$search_result_row['GOLD_QNA_id'];
                $result_tit=$search_result_row['GOLD_QNA_tit'];
                $result_reg=$search_result_row['GOLD_QNA_reg'];
                $result_hit=$search_result_row['GOLD_QNA_hit'];
            ?>

            <li class="qnaContent clear">
              <span class="qnaNum"><?=$result_num?></span>
              <span class="qnaId"><?=$result_id?></span>


              <?php
              $sql="select * from gold_ans where GOLD_ANS_QNA_num=$result_num order by GOLD_ANS_num desc";

              $ans_res=mysqli_query($dbConn, $sql);
              $is_ans_res=mysqli_num_rows($ans_res); //mysqli_num_rows -> 숫자만 가져옴

              if(!$is_ans_res){
              ?>

              <span class="qnaTit"><a href="/Gold/pages/qna/qna_view.php?num=<?=$result_num?>"><?=$result_tit?></a></span>

              <?php
              }else{
              ?>

              <span class="qnaTit"><a href="/Gold/pages/qna/qna_view.php?num=<?=$result_num?>"><?=$result_tit?>[답변완료]</a></span>

              <?php
              }
              ?>


              <span class="qnaReg"><?=$result_reg?></span>
              <span class="qnaHit"><?=$result_hit?></span>
            </li>

            <?php   
              }
            }
            ?>
            
           
          </ul>
        </div>
        <!-- end of qnaTable -->
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