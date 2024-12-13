<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Array manipulation</title>
  <style type="text/css">
    p {
      margin: 0;
    }
    .head {
      margin-top: 10px;
      font-weight: bold;
    }
  </style>
</head>
<body>
  <?php
  // 배열 생성
  print("<p class='head'>Creating the first array</p>");
  $first[0] = "zero";
  $first[1] = "one";
  $first[2] = "two";
  $first[] = "three";

  // 각 요소의 인덱스와 값을 출력
  for ($i=0; $i<count($first); ++$i) {
    print("Element $i is $first[$i]</p>");
  }

  $second = array("zero", "one", "two", "three");

  print("<p class='head'>Creating the second array</p>");

  for ($i=0; $i<count($second); ++$i) {
    print("Element $i is $second[$i]</p>");
  }

  print("<p class='head'>Creating the third array</p>");

  $third["Amy"] = 21;
  $third["Bob"] = 18;
  $third["Carol"] = 23;

  for (reset($third); $element = key($third); next($third)) {
    print("<p>$element is $third[$element]</p>");
  }

  print("<p class='head'>Creating the fourth array</p>");

  $fourth = array(
    "January" => "first",
    "February" => "second",
    "March" => "third",
    "April" => "fourth",
    "May" => "fifth",
    "June" => "sixth",
    "July" => "seventh",
    "August" => "eighth",
    "September" => "ninth",
    "October" => "tenth",
    "November" => "eleventh", 
    "December" => "twelfth");

    // key-value로 처리
    foreach($fourth as $element => $value) {
      print("<p>$element is the $value month</p>");
    }
  ?>
</body>
</html>