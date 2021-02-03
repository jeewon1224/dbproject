<?php
$web_num = $_GET['num'];
  
include $_SERVER['DOCUMENT_ROOT']."/Gold/php_process/connect/db_connect.php";
$sql="select * from gold_web where GOLD_WEB_num=$web_num";

$web_update_result=mysqli_query($dbConn, $sql);
$web_update_row=mysqli_fetch_array($web_update_result);

$web_update_tit=$web_update_row['GOLD_WEB_tit'];
$web_update_ser=$web_update_row['GOLD_WEB_ser'];
$web_update_des=$web_update_row['GOLD_WEB_des'];
$web_update_img=$web_update_row['GOLD_WEB_img'];
$web_update_mImg=$web_update_row['GOLD_WEB_mimg'];
$web_detail_thumb=$web_update_row['GOLD_WEB_thumb'];
$web_update_cli=$web_update_row['GOLD_WEB_cli'];
$web_update_reg=$web_update_row['GOLD_WEB_reg'];
$web_update_domain=$web_update_row['GOLD_WEB_dom'];

?>



<!-- web input contents form -->
<div class="webInputForm webDesignInput">
        <form action="/Gold/php_process/pages/web_update.php?num=<?=$web_num?>" method="post" name="web_form" enctype="multipart/form-data">
          <div class="titleSer clear">
            <p class="title_input">
              <label for="title">Title</label>
              <input type="text" placeholder="<?=$web_update_tit?>" id="title" name="web_title">
            </p>
            <p class="serial_input">
              <label for="serial">SerialNo.</label>
              <input type="text" placeholder="<?=$web_update_ser?>" id="serial" name="web_serial">
            </p>
            <p class="client_input">
              <label for="client">Client</label>
              <input type="text" placeholder="<?=$web_update_cli?>" id="client" name="web_client">
            </p>
            <p class="domain_input">
              <label for="domain">Domain</label>
              <input type="text" placeholder="<?=$web_update_domain?>" id="domain" name="web_domain">
            </p>
          </div>
          <!-- end of title, serial, client input -->
          <div class="web_desc uploadDesc">
            <textarea name="web_desc"><?=$web_update_tit?></textarea>
          </div> 
          <!-- end of text description -->

          <div class="uploadImgs clear">
            <div class="uploadBox img1">
              <div class="inputControll">
                <input class="uploadName" placeholder= "<?=$web_update_img?>">
                <label for="mainImage">SELECT IMAGE</label>
                <input type="file" id="mainImage" class="uploadHidden" name="main" accept="image/*" value = 1>
              </div>
              <div class="img1_box imgWrap">
                <img id="img1" src="/Gold/data/web_page/pc/<?=$web_update_img?>">
              </div>
            </div>
            <div class="uploadBox img2">
              <div class="inputControll">
                <input class="uploadName" placeholder = "<?=$web_update_mImg?>">
                <label for="subImage">SELECT IMAGE</label>
                <input type="file" id="subImage" class="uploadHidden" name="mobile" accept="image/*" value = 1>
              </div>
              <div class="img2_box imgWrap">
                <img id="img2" src="/Gold/data/web_page/mobile/<?=$web_update_mImg?>">
              </div>
            </div>
            <div class="uploadBox img3">
              <div class="inputControll">
                <input class="uploadName" placeholder = "<?=$web_detail_thumb?>">
                <label for="thumbImage">SELECT IMAGE</label>
                <input type="file" id="thumbImage" class="uploadHidden" name="thumbnail" accept="image/*" value = 1>
              </div>
              <div class="thumb_box imgWrap">
                <img id="thumb" src="/Gold/data/web_page/thumb/<?=$web_detail_thumb?>">
              </div>
            </div>
            <!-- end of image box -->
          <!-- <p class="registDay"></p> -->
        </form>
      </div>
      <!-- end of design input form -->



      
      <div class="btns">
        <button type="button" class="commonBtn" id="submitBtn" onclick="updateSubmit()">Update</button>
      </div>

      <script>
        function updateSubmit(){
          document.web_form.submit();
        }

      </script>