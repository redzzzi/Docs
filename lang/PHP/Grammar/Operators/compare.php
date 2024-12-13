<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Comparison</title>
  <style type="text/css">
    p {
      margin: 0;
    }
  </style>
</head>
<body>
  <?php
  $fruits = array("apple", "orange", "banana");
  for ($i=0; $i<count($fruits); ++$i) {
    // 두 문자열 동일 -  0
    // str1이 str2보다 사전적으로 작은(먼저인) 경우 < 0
    // str1이 str2보다 사전적으로 큰 경우 > 0
    if (strcmp($fruits[$i], "banana") < 0) {
      print("<p>$fruits[$i] is less than banana ");
    } elseif (strcmp($fruits[$i], "banana") > 0) {
      print("<p>" . $fruits[$i] . " is greater than banana ");
    } else {
      print("<p>$fruits[$i] is equal to banana ");
    }

    if ($fruits[$i] < "apple") {
      print("and less than apple!</p>");
    } elseif ($fruits[$i] > "apple") {
      print("and greater than apple!</p>");
    } elseif ($fruits[$i] == "apple") {
      print("and equal to apple!</p>");
    }
  }
  ?>
</body>
</html>