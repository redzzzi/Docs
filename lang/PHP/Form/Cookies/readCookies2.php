<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HTML and PHP</title>
</head>
<body>
  <h2>This is foreach statement practice.</h2>
 <?php
 foreach($_COOKIE as $key => $value) {
  print("<p>$key is $value</p>");
 }
 ?> 
</body>
</html>