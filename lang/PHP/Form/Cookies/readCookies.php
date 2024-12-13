<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Read Cookies</title>
  <style type="text/css">
    p {
      margin: 0px;
    }
  </style>
</head>
<body>
  <p>The following data is saved in a cookie on your computer.</p> 
  <?php
  // 1. 첫 번째 방법
  // $name = $_COOKIE["name"];
  // $height = $_COOKIE["height"];
  // $color = $_COOKIE["color"];
  
  // print("<p>Name: $name</p>");
  // print("<p>Height: $height</p>");
  // print("<p>Color: $color</p>");

  // 2. 두 번째 방법
  foreach($_COOKIE as $key => $value) {
    print("<p>$key: $value</p>");
  }
  ?>
</body>
</html>