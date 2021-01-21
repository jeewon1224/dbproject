          <div class="detailApp">
            <div class="appTit">
              <h2>Recent App Services</h2>
              <a href="/Gold/pages/app/app.php">View All</a>
            </div>
            <!-- end of appTit -->

            <?php
              include $_SERVER["DOCUMENT_ROOT"]."/Gold/php_process/connect/db_connect.php";
              $sql="select * from gold_app order by GOLD_APP_num desc limit 3";


              $app_side_result = mysqli_query($dbConn, $sql);
              
              while($app_side_row = mysqli_fetch_array($app_side_result)){
                $app_side_num = $app_side_row['GOLD_APP_num'];
                $app_side_thumb = $app_side_row['GOLD_APP_thumb'];
                $app_side_tit = $app_side_row['GOLD_APP_tit'];
                $app_side_des = $app_side_row['GOLD_APP_des'];
              
            ?>




            <div class="appLinks">
              <div class="subAppImg">
                <img src="/Gold/data/app_page/app_thumb/<?=$app_side_thumb?>" alt="">
              </div>
              <div class="subAppTxt">
                <a href="/Gold/pages/app/app_detail.php?num=<?=$app_side_num?>"><?=$app_side_tit?></a>
                <em><?=$app_side_des?></em>
              </div>
            </div>
            <!-- end of looped web links -->

            <?php
              }
            ?>

          </div>
          <!-- end of detailApp -->