# PHP
```
Base on Web Application Programming material
```
## 목차
- [19.1 Introduction](#19.1-introduction)
- [19.2 Simple PHP Program](#19.2-simple-php-program)
- [19.3 Converting Between Data Types](#19.3-converting-between-data-types)
- [19.4 Arithmetic Operators](#19-4-arithmetic-operators)
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
- define(`name`,`value`,`case_insensitive`)
  - 마지막 파라미터는 선택적임
![image](https://github.com/user-attachments/assets/6c165941-bffb-4fa5-8822-62ce1a08bd89)

```PHP
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
```

## 19.5 Initializing and Manipulating Arrays
- *first* 배열 생성
```PHP
<!-- body 내부 -->
<?php
  print("<p class='head'>Creating the first array</p>");
  $first[0] = "zero";
  $first[1] = "one";
  $first[2] = "two";
  $first[3] = "three";
```
- 배열 인덱스와 값을 출력
```
for ($i = 0; $i < count($first); ++$i)
  print("Element $i is $first[$i]</p>");
print("<p class='head'>Creating the second array</p>");
```
- *second* 배열을 생성하기 위해 `array` 함수 호출
```PHP
$second = array("zero", "one", "two", "three");

for ($i = 0; $i < count($second); ++$i)
  print("Element $i is $second[$i]</p>");

print("<p class='head'>Creating the third array</p>");
```
- nonnumeric 인덱스에 배열 값 할당
```PHP
$third["Amy"] = 21;
$third["Bob"] = 18;
$third["Carol"] = 23;
```
- 배열 요소를 순회하면서 각 이름과 값을 출력
  - 배열의 내부 포인터를 `$third`로 초기화
  - 현재 배열 포인터가 가리키는 key 값을 `$element`에 저장 (포인터 유효 시 키 반환)
  - 배열 요소를 다음 요소로 이동
  - 현재 키와 해당 키의 값 출력
```PHP
for (reset($third); $element = key($third); next($third))
  print("<p>$element is $third[$element]</p>");

print("<p class='head'>Creating the fourth array</p>");
```
- string 인덱스를 이용해 *fourth* 배열 생성 및 요소 출력
```PHP
$fourth = array(
  "January"   => "first",    "February" => "second",
  "March"     => "third",    "April"    => "fourth",
  "May"       => "fifth",    "June"     => "sixth",
  "July"      => "seventh",  "August"   => "eighth",
  "September" => "ninth",    "October"  => "tenth",
  "November"  => "eleventh", "December" => "twelfth");

// print each element's name and value
foreach($fourth as $element => $value)
  print("<p>$element is the $value month</p>");
?>
```

## 19.6 String Comparisons
- `count()` : 배열 요소의 개수
- `strcmp()` : 두 문자열을 비교
  - 0 : 두 문자열이 **같음**
  - 1 : 두 문자열이 **다름**

## 19.7 String Processing with Regular Expressions
| Quantifier | Matches |
| :---: | :-- |
| `{n}` | 정확히 n번 |
| `{m,n}` | m에서 n번 사이 |
| `{n,}` | n 또는 그 이상 |
| `+` | 1 이상 |
| `*` | 0 이상 |
| `?` | 0 또는 1 |

## 19.8 Form Processing and Business Logic
### Superglobal Arrays
| Variable Name | Description |
| :---: | :--- |
| `$_SERVER` | 현재 돌아가는 서버에 대한 데이터 |
| `$_ENV` | 클라이언트의 환경에 대한 데이터 |
| `$_GET` | get 요청으로 서버에 전달된 데이터 |
| `$_POST` | post 요청으로 서버에 전달된 데이터 |
| `$_COOKIE` | 클라이언트의 컴퓨터에 있는 쿠키의 데이터 |
| `$GLOBALS` | 모든 전역 변수를 담고 있는 배열 |

## 19.9 Reading from a Database
## 19.10 Using Cookies
## 19.11 Dynamic Content
## 19.12 Web Resources
