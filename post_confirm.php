


<?php

$ProfTitle = '仲間たちの眠り';


$YouName = $_POST["YouName"];
$birthday = $_POST["birthday"];
$sleep = $_POST["sleep"];





?>



<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title><?= $title; ?>仲間たちの眠り</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body>
  <!-- <div class='wrap'> -->
    <div class='prof'>
      <div class='prof__img'><img src='img/whyme.jpeg'alt=''></div>
      <div class='prof__contents'>
        <div class='prof__name'><?= $ProfTitle; ?></div></br>
        <div class='sleep2'><img src="img/sleep2.png" alt=""></div>
        <div class='prof__text'><?= $message; ?></div>
      </div>
    </div>
    <!-- /.prof -->

    <div class='contents'>
      <div class='title_img'>
          <img src="img/sheep.png" alt="">
          <img src="img/S.png" alt="">
          <img src="img/L.png" alt="">
          <img src="img/E.png" alt="">
          <img src="img/E.png" alt="">
          <img src="img/P.png" alt="">
          <img src="img/sheep.png" alt="">

      </div>
      <!-- <div class='text'></div> -->

      </div>
    <div class='contents'>
    <form action="post_confirm.php" method="post">
        お名前: <?= $YouName; ?><br/>
        生年月日: <?= $birthday; ?><br/>
        睡眠時間: <?= $sleep; ?><br/>
        
        <?php

        // $time === 5;

        if($sleep > 6 ){
            echo "<img src = 'img/health.png'>";
        }elseif($sleep == 5) {
            echo"<img src = 'img/neyo.png'>";
        }elseif($sleep == 4) {
            echo"<img src = 'img/neyo.png'>";
        }elseif($sleep < 3 ){
            echo"<img src = 'img/deth.png'>";
        };

        ?>

        
    </form>
    </div>
    
    <footer class='footer'>
      <small class='copy'>&copy;あずあず 札幌</small>
    </footer>
    



</body>

</html>
