<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data type conversion</title>
  <style>
    p {
      margin: 0;
    }
    .head {
      margin-top: 10px;
      font-weight: bold;
    }
    .space {
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php
  $testString = "3.5 seconds";
  $testDouble = 79.2;
  $testInteger = 12;

  print("<p class='head'>Original values:</p>");
  print("<p>$testString is a(n) " . gettype($testString) . "</p>");
  print("<p>$testDouble is a(n)" . gettype($testDouble) . "</p>");
  print("<p>$testInteger is a(n)" . gettype($testInteger) . "</p>");

  print("<p class='head'>Converting to other data types:</p>");
  print("<p>$testString as a double is ");
  settype($testString, "double");
  print("$testString</p>");
  print("<p>$testString as an integer is ");
  settype($testString, "integer");
  print("$testString</p>");

  print("<p class='space'>Converting back to string results in $testString</p>");

  $data = "98.6 degrees";
  print("<p class='space'>Before casting: $data is a " . gettype($data) . "</p>");

  print("<p class='space'>Using type casting instead:</p>
          <p>as a double: " . (double)$data . "</p>" .
          "<p>as an integer: " . (integer)$data . "</p>");
  print("<p class='space'>After casting: $data is a " . gettype($data) . "</p>");
  ?>
</body>
</html>