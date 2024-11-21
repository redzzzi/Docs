# PHP
```
Base on Web Application Programming material
```
## 목차
- [19.1 Introduction](#191-introduction)
- [19.2 Simple PHP Program](#192-simple-php-program)
- [19.3 Converting Between Data Types](#193-converting-between-data-types)
- [19.4 Arithmetic Operators](#194-arithmetic-operators)
- [19.5 Initializing and Manipulating Arrays](#195-initializing-and-manipulating-arrays)
- [19.6 String Comparisons](#196-string-comparisons)
- [19.7 String Processing with Regular Expressions](#197-string-processing-with-regular-expressions)
- [19.8 Form Processing and Business Logic](#198-form-processing-and-business-logic)
- [19.9 Reading from a Database](#199-reading-from-a-database)
- [19.10 Using Cookies](#1910-using-cookies)
- [19.11 Dynamic Content](#1911-dynamic-content)
- [19.12 Web Resources](#1912-web-resources)

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

- superglobal 배열은 사용자 입력, 환경, 웹 서버에서 가져온 변수를 담고 있는 **associative array**로, 어떤 변수에서든 접근이 가능함
  - *associative array* : key-value 구조로 되어있는 데이터 구조로, 연관 배열에서는 **키**를 사용하여 값에 접근이 가능함
- `$_GET`과 `$_POST` 배열은 HTTP `get`, `post`로 서버에 전달된 정보를 가져옴
- `post` 메소드를 사용하면, 프로토콜와 리소스 URL 정보가 담긴 요청을 브라우저에 **폼 데이터**로 보낼 수 있음
- HTTP `post` 방식으로 보내진 변수들은 **URL에 나타나지 않음**
  - 단, 변수가 URL에 나타나지 않아 해당 페이지 즐겨찾기 또는 북마크가 불가능함
- 변수들이 길이에 제한이 없음
<br>

- `$_GET`
  - URL 파라미터를 통해 현재 script 넘겨진 associative array 변수
```PHP
// 예시 URL : http://example.com/?name=Hannes
<?php
  echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!'
?>
// 출력 : Hello Hannes!
```
- `$_POST`
![image](https://github.com/user-attachments/assets/4a0d8a82-19fd-434e-8a1b-400914d3485a)
- `$_REQUEST`
  - HTTP GET, POST, COOKIE 요청으로 전달된 데이터를 포함
  - **POST > GET > COOKIE**의 우선순위로 데이터를 병합
### EXTRACT
- `extract` : associative array가 인자로 넘겨졌을 때, 각 key-value마다 variable/value를 생성하는 함수
```PHP
<?php
$data = array(
  "name" => "Alice",
  "age" => 25,
  "job" => "Developer"
);

// 배열의 키를 변수로 변환
extract($data);

echo $name; // 출력: Alice
echo $age;  // 출력: 25
echo $job;  // 출력: Developer
?>
```
- `die` : script 실행을 종료
```
💡 PHP에서 form data 처리할 때, input field를 쓰면 더 잘 이해함
```
<details>
  <summary>Process information sent from <code>form.html</code>.</summary>
  <div markdown="1">

    <!DOCTYPE html>
    <html>
      <head>
        <title>Form Validation</title>
      </head>
      <body>
        <?php
          if (!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $_POST["phone"])) {
            print("<p class='error'>Invalid phone number</p>
                  <p>A valid phone number must be in the form (555) 555-5555</p>
                  <p>Click the Back button, enter a valid phone number and resubmit.</p>
                  <p>Thank You.</p>
                  </body></html>");
            die(); // 연락처 입력값 유효하지 않으면 스크립트 종료
          }
        ?>
        <p>Hi <?php print($_POST["fname"]); ?>.
          Thank you for completing the survey.
          You have been added to the <?php print($_POST["book"]); ?>mailing list.
        </p>
        <p class="head">The following information has been saved in our database:</p>
        <p>Name: <?php print($_POST["fname"]); print($_POST["lname"]); ?></p>
        <p>Email: <?php print("$email"); ?></p>
        <p>Phone: <?php print("$phone"); ?></p>
        <p>OS: <?php print($_POST["os"]); ?></p>
        <p class="head">This is only a sample form.
                        You have not been added to a mailing list.</p>      
      </body>
    </html>
  </div>
</details>

## 19.9 Reading from a Database
### DB 쿼리 후 결과 보여주기
```PHP
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Search Results</title>
  </head>
  <body>
    <?php
      // creates variable $select
      $select= $_POST["select"];

      // build SELECT query
      $query = "SELECT " . $select . " FROM books";

      // Connect to MySQL
      if (!($database = mysqli_connect("localhost:3307", "iw3htp", "password")))
        die("Could not connect to database</body></html>");

      // open Products database
      if (!mysqli_select_db($database, "products"))
        die("Could not open products database</body></html>");

      // query Products database
      if (!($result = mysqli_query($database, $query))) {
        print("<p>Could not execute query!</p>");
        die(mysqli_error($database) . "</body></html>");
      }
      mysqli_close($database);
    ?>
    <table>
      <?php
        // fetch each record in result set
        while ($row = mysqli_fetch_row($result)) {
          // build table to display results
          print("<tr>");
          foreach($row as $key => $value)
            print("<td>$value</td>");
          print("</tr>");
        }
      ?>
    </table>
    <p>Your search yielded
      <?php print(mysqli_num_rows($result) ?> results.</p>
    <p>Please email comments to <a href="mailto:deitel@deitel.com">Deitel and Associates, Inc.</a></p>
  </body>
</html>
```

## 19.10 Using Cookies
## 19.11 Dynamic Content
## 19.12 Web Resources
