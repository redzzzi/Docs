# PHP
```
Base on Web Application Programming material
```
## 목차
- [19.1 Introduction](#19.1-introduction)
- [19.2 Simple PHP Program](#19.2-simple-php-program)
- [19.3 Converting Between Data Types](#19.3-converting-between-data-types)
- [19.4 Arithmetic Operators](#19.4-arithmetic-operators)
- [19.5 Initializing and Manipulating Arrays](#19.5-initializing-and-manipulating-arrays)
- [19.6 String Comparisons](#19.6-string-comparisons)
- [19.7 String Processing with Regular Expressions](#19.7-string-processing-with-regular-expressions)
- [19.8 Form Processing and Business Logic](#19.8-form-processing-and-business-logic)
- [19.9 Reading from a Database](#19.9-reading-from-a-database)
- [19.10 Using Cookies](#19.10-using-cookies)
- [19.11 Dynamic Content](#19.11-dynamic-content)
- [19.12 Web Resources](#19.12-web-resources)

## 19.1 Introduction
- [PHP Intro](https://www.w3schools.com/php/php_intro.asp)
![image](https://github.com/user-attachments/assets/34c02aa8-235b-42ef-8518-266e31835c36)

- 흔한 PHP 프로그래밍 에러 두 가지
  1. PHP 변수명은 **대소문자를 구분**한다. ex) `$Variable`과 `$variable`은 서로 다른 변수명이다.
  2. statement를 세미콜론(`;`)으로 끝내야 한다.
  
## 19.2 Simple PHP Program
```PHP
<!DOCTYPE html>
<html>
<?php
  $name = "Paul";
?>
  <head>
    <meta charset = "utf-8">
    <title>Simple PHP document</title>
  </head>
  <body>
    <h1><?php print("Welcome to PHP, $name!"); ?></h1>
  </body>
</html>
```
- php 태그(`<?php` `?>` 내부에 `$name`이라는 변수를 선언
- 이후 h1 태그 내부에서 해당 변수를 출력

## 19.3 Converting Between Data Types
- PHP types : int/integer, float/double/real, string, bool/boolean, array, object, resource, NULL
### PHP에서 `.`의 역할
- `.`은 ***문자열을 결합***할 때 사용됨
```PHP
<?php
  $firstName = "red";
  $lastName = "zzzi";
  $fullName = $firstName . " " . $lastName;
  echo $fullName; // 출력 : red zzzi
```

- Data type conversion
  - `gettype()` : 파라미터의 타입을 반환하는 함수
  - `settype()` : 변수를 지정된 타입으로 변환하는 함
```PHP
<!DOCTYPE html>
<html>
  <body>
    <?php
      $testString = "3.5 seconds";
      $testDouble = 79.2;
      $testInteger = 12;
    ?>
    <p class="head">Original values:</p>
    <?php
      print("<p>$testString is a(n) " . gettype($testString) . "</p>");
      print("<p>$testDouble is a(n) " . gettype($testDouble) . "</p>");
      print("<p>$testInteger is a(n) " . gettype($testInteger) . "</p>");
    ?>
    <p class="head">Converting to other data types:</p>
    <?php
      print("<p>$testString ");
      settype($testString, "double"); // String 타입을 double 타입으로 변환
      print(" as a double is $testString</p>");
      print("<p>$testString ");
      settype($testString, "integer");
      print(" as an integer is $testString</p>");
      settype($testString, "string");
      print("<p class='space'>Converting back to a string results in $testString</p>);
      $data = "98.6 degrees";
      print("<p class='space'>Before casting: $data is a " . gettype($data) . "</p>");
      print("<p class='space'>Using type casting instead:</p>
            <p>as a double: " . (double)$data . "</p>" .
            <p>as an integer: " . (integer)$data . "</p>";
      print("<p class='space'>After casting: $data is a " . gettype($data) . "</p>");
    ?>      
  </body>
</html>
```

## 19.4 Arithmetic Operators
- 에러 방지를 위해 **변수를 초기화하는 것**은 필수임
<details>
  <summary>산술 연산자 예제 코드</summary>
  <div markdown="1">
  
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <style type="text/css">
          p { margin: 0; }
        </style>
        <title>Using arithmetic operators</title>
      </head>
      <body>
        <?php
          $a = 5;
          print("<p>The value of variable a is $a</p>");
        
          define("VALUE", 5);
          
          $a = $a + VALUE;
          print("<p>Variable a after adding constant VALUE is $a</p>");

          $a *= 2;
          print("<p>Multiplying variable a by 2 yields $a</p>");

          if ($a < 50)
            print("<p>Variable a is less than 50</p>");

          $a += 40;
          print("<p>Variable a after adding 40 is $a</p>");

          if ($a < 51)
          elseif ($a < 101)
            print("<p>Variable a is now between 50 and 100, inclusive</p>");
          else
            print("<p>Variable a is now greater than 100</p>");

          print("<p>Using a variable before initializing: $nothing</p>");

          $test = $num + VALUE;
          print("<p>An uninitialized variable plus constant VALUE yields $test<p>");
          
          $str = "3 dollars";
          $a += $str;
          print("<p>Adding a string to variable a yields $a</p>");
        ?>
      </body>
    </html>
  </div>
</details>

## 19.5 Initializing and Manipulating Arrays
## 19.6 String Comparisons
## 19.7 String Processing with Regular Expressions
## 19.8 Form Processing and Business Logic
## 19.9 Reading from a Database
## 19.10 Using Cookies
## 19.11 Dynamic Content
## 19.12 Web Resources
