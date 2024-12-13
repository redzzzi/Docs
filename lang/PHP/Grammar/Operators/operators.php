<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Using arithmetic operators</title>
  <style>
    p {
      margin: 0;
    }
  </style>
</head>
<body>
  <?php
  $a = 5; // 변수: 언제든지 값을 변경할 수 있음
  print("<p>The value of variables a is $a</p>");

  // 상수 VALUE를 정의함, 상수이기 때문에 중간에 값 변경 불가
  define("VALUE", 5);
  
  $a = $a + VALUE;
  print("<p>Variable a after adding constant VALUE is $a</p>");

  $a *= 2;
  print("<p>Multiplying variable a by 2 yields $a</p>");

  // 변수 a가 50보다 작은지 테스트함
  if ($a < 50) {
    print("<p>Variable a is less than 50</p>");
  }

  $a += 40;
  print("<p>Variable a after adding 40 is $a</p>");
  
  if ($a < 51) {
    print("<p>Variable a is still 50 or less</p>");
  } elseif ($a < 101) {
    print("<p>Variable a is now between 50 and 100</p>");
  } else {
    print("<p>Variable a is now greater than 100</p>");
  }

  // 초기화되지 않은 변수를 출력함
  print("<p>Using a variable before initializing: $nothing</p>"); // $nothing은 ""로 취급됨

  // 초기화되지 않은 변수를 상수 VALUE와 함께 덧셈
  $test = $num + VALUE; // $num은 0으로 취급됨
  print("<p>An initialized variable plus constant VALUE yields $test</p>");
  
  // 문자열에 정수를 덧셈
  $str = "3 dollars";
  $a += $str;
  print("<p>Adding a string to variable a yields $a</p>");
  ?>
</body>
</html>

<!-- 초기화하지 않은 값을 사용하면 Warning 문구를 띄워준다. -->