<!DOCTYPE html>
<!-- Fig. 19.14: form.php -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Validation</title>
  <style type="text/css">
    p {
      margin: 0;
    }
    .error {
      color: red;
    }
    p.head {
      font-weight: bold;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <?php
  // 전화번호가 유효한 형식을 갖췄다면 출력
  // 아니라면 에러 메시지를 띄움
  if (!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $_POST["phone"])) {
    print("<p class='error'>Invalid phone number</p></body></html>");
    die(); // 스크립트 실행을 종료함
  }
  ?>
  <p>Hi <?php print($_POST["fname"]); ?>. Thank you for completing the survey. You have been added to the <?php print($_POST["book"]); ?>mailing list.</p>
<p class='head'>The following information has been saved in our database:</p>
<p>Name: <?php print($_POST["lname"]); print($_POST["fname"]) ?></p>
<p>Email: <?php print($_POST["email"]); ?></p>
<p>Phone: <?php print($_POST["phone"]); ?></p>
<p>OS: <?php print($_POST["os"]); ?></p>
<p class="head">This is only a sample form.
  You have not been added to a mailing list.
</p>
</body>
</html>

<!-- extract() 함수를 사용하면?
$_POST 배열의 모든 키를 변수로 변환하여 값에 접근할 수 있음!
예: $_POST["fname"] -> $fname -->

<!-- <body>
  <?php
  // $_POST 배열에서 변수로 추출
  extract($_POST);

  // 전화번호가 유효한 형식을 갖췄다면 출력
  // 아니라면 에러 메시지를 띄움
  if (!preg_match("/^\([0-9]{3}\) [0-9]{3}-[0-9]{4}$/", $phone)) {
    print("<p class='error'>Invalid phone number</p></body></html>");
    die(); // 스크립트 실행을 종료함
  }
  ?>
  <p>Hi <?php print($fname); ?>. Thank you for completing the survey. You have been added to the <?php print($book); ?> mailing list.</p>
  <p class='head'>The following information has been saved in our database:</p>
  <p>Name: <?php print($lname); print($fname); ?></p>
  <p>Email: <?php print($email); ?></p>
  <p>Phone: <?php print($phone); ?></p>
  <p>OS: <?php print($os); ?></p>
  <p class="head">This is only a sample form.
    You have not been added to a mailing list.
  </p>
</body> -->