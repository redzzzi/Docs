<?php
define("FIVE_DAYS", 60*60*24*5);

// 쿠키에 대응되는 필드 값과 만료 기간을 명시
setcookie("name", $_POST["name"], time() + FIVE_DAYS); // 현재 타임스탬프에 초 단위로 설정
setcookie("height", $_POST["height"], time() + FIVE_DAYS);
setcookie("color", $_POST["color"], time() + FIVE_DAYS);
extract($_POST);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cookie Saved</title>
  <style type="text/css">
    p { margin: 0px; }
  </style>
</head>
<body>
  <p>The cookie has been set with the following data:</p> 
  <!-- 각 폼의 필드 값을 출력 -->
  <p>Name: <?php print($name) ?></p>
  <p>Height: <?php print($height) ?></p>
  <p>Favorite Color:
    <span style="color: <?php print($color) ?> ">
      <?php print($color) ?>
    </span>
  </p>
  <p>Click <a href="readCookies.php">here</a> to read the saved cookie.</p>
</body>
</html>