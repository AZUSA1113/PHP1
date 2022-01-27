<!-- 
<?php

// $ProfTitle = '愉快な仲間たち';


?>



<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title><?= $title; ?>愉快な寝不足仲間たち</title>
  <link rel='stylesheet' href='css/reset.css'>
  <link rel='stylesheet' href='css/style.css'>
</head>
<body>
  <div class='wrap'>
    <div class='prof'>
      <div class='prof__img'><img src='img/whyme.jpeg'alt=''></div>
      <div class='prof__contents'>
        <div class='prof__name'><?= $ProfTitle; ?></div></br>
        <div class='sleep2'><img src="img/sleep2.png" alt=""></div>
        <div class='prof__text'><?= $message; ?></div>
      </div>
    </div>
    

     <div class='contents'>
      <div class='title_img'>
          <img src="img/sleep.png" alt="">
          <img src="img/M.png" alt="">
          <img src="img/E.png" alt="">
          <img src="img/S.png" alt="">
          <img src="img/S.png" alt="">
          <img src="img/A.png" alt="">
          <img src="img/G.png" alt="">
          <img src="img/E.png" alt="">
          <img src="img/sleep.png" alt="">

      </div>
      <div class='text'></div> -->

    <!-- <form action="post_confirm.php" method="post">
        お名前: <input type="text" name="YouName"><br/>
        生年月日: <input type="text" name="birthday"><br/>
        睡眠時間: <input type="text" name="sleep"><br/>
        <input type="submit" value="送信">
    </form>
    </div>
    
    <footer class='footer'>
      <small class='copy'>&copy;あずあず 札幌</small>
    </footer>
    



</body> -->

<!-- </html> --> 





<?php

$ProfTitle = '愉快な仲間たち';


// $YouName = $_POST["YouName"];
// $birthday = $_POST["birthday"];
// $sleep = $_POST["sleep"];





?>



<!DOCTYPE html>
<html lang='ja'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <title><?= $title; ?>愉快な仲間たち</title>
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
          <img src="img/sleep.png" alt="">
          <img src="img/M.png" alt="">
          <img src="img/E.png" alt="">
          <img src="img/S.png" alt="">
          <img src="img/S.png" alt="">
          <img src="img/A.png" alt="">
          <img src="img/G.png" alt="">
          <img src="img/E.png" alt="">
          <img src="img/sleep.png" alt="">

      </div>
      <!-- <div class='text'></div> -->

      </div>
    <div class='contents'>
    <form action="post_confirm.php" method="post">
        お名前: <input type="text" name="YouName"><br/>
        生年月日: <input type="text" name="birthday"><br/>
        睡眠時間: <input type="text" name="sleep"><br/>
        <input type="submit" value="送信">
    </form>
    </div>
    
    <footer class='footer'>
      <small class='copy'>&copy;あずあず 札幌</small>
    </footer>
    



</body>

</html>
