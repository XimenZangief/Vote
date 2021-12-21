<?php include_once "./api/db.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>問卷系統</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <style>
    .container {
      min-height: 530px;
    }
  </style>
</head>

<body>
  <!-- 大字報圖片輪播+回首頁 -->
  <div class="jumbotron p-0 mb-0" style="overflow:hidden;height:250px">
    <a href="index.php">
      <div id="carouselExampleSlidesOnly" class="carousel slide position-relative" data-ride="carousel">
        <div class="carousel-inner position-absolute" style="top:-250px">
          <?php
          //取得資料表中狀態為1的廣告圖片
          $images = all('ad', ['sh' => 1]);
          //使用迴圈來將每一筆廣告圖片依照html的格式顯示在網頁上
          foreach ($images as $key => $image) {

            //判斷如果是第一筆，會加入一個active的class
            if ($key == 0) {
              echo "<div class='carousel-item active'>";
            } else {
              echo "<div class='carousel-item'>";
            }

            //帶入圖片的檔名及資訊
            echo "  <img class='d-block w-100' src='image/{$image['name']}' title='{$image['intro']}'>";
            echo "</div>";
          }


          ?>
        </div>
      </div>
    </a>
  </div>
  <!-- 大字報圖片輪播+回首頁END -->

  <!-- 選單 -->
  <nav class='bg-light shadow py-3 px-2 d-flex justify-content-between mb-4'>
    <div>&nbsp;</div>
    <?php

    //判斷是否有任何的錯誤訊息存在，有則顯示
    if (isset($_SESSION['error'])) {
      echo "<h4 class='text-danger'>" . $_SESSION['error'] . "</h4>";
      unset($_SESSION['error']);
    }

    //判斷是否有登入的紀錄，根據登入狀況，顯示不同的功能按鈕
    if (isset($_SESSION['user'])) {
      echo "<span class='pr-5'>歡迎！{$_SESSION['user']}</span>";
    ?>
      <div>
        <a class="btn btn-sm btn-primary mx-1" href="logout.php">登出</a>
      </div>
    <?php
    } else {
    ?>
      <div>
        <a class="btn btn-sm btn-primary mx-1" href="?do=login">會員登入</a>
        <a class="btn btn-sm btn-info mx-1" href="?do=reg">註冊新會員</a>
      </div>
    <?php
    }
    ?>
  </nav>
  <!-- 選單END -->

  <!-- 中間區塊 -->
  <div class="container">
    <?php
    //根據網址帶的do參數內容來決定要include那一個檔案內容
    $do = (isset($_GET['do'])) ? $_GET['do'] : 'show_vote_list';

    //建立要引入的檔案路徑
    $file = "./frontend/" . $do . ".php";
    if (file_exists($file)) {
      include $file;
    } else {
      include "./frontend/show_vote_list.php";
    }
    ?>
  </div>
  <!-- 中間區塊END -->

  <!-- 頁尾 -->
  <div class="contaioner p-3 text-center text-light bg-primary ">
    <a class="twitter-timeline" data-width="1000" data-height="930" href="https://twitter.com/simabossneko?ref_src=twsrc%5Etfw">Tweets by simabossneko</a>
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div>
  <!-- 頁尾END -->

  <!-- bootstrap4 JS bundle -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>

</html>