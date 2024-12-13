<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple practice - server</title>
</head>
<body>
  <?php
  $studentID = $_POST["studentID"];
  $name = $_POST["name"];
  $phonenum = $_POST["phonenum"];

  $insert_query = "INSERT INTO students ( studentID, name, phonenum ) VALUES ('$studentID', '$name', '$phonenum')";

  // DB에 접속
  if (!($database = mysqli_connect("localhost:3307", "root", "", "practice"))) {
    die("Failed to connect to MySQL: ". mysqli_connect_error());
  }

  if (!($result = mysqli_query($database, $insert_query))) {
    die("Failed to insert data: " . mysqli_error($database));
  }
  ?>

  <table border="1">
    <tr>
      <td>학번</td>
      <td>이름</td>
      <td>휴대폰번호</td>
    </tr>

    <?php
    $select_query = "SELECT * FROM students";
    $result = mysqli_query($database, $select_query);

    if ($result) {
      // 결과를 1 행 단위로 읽어서 출력
      while ($data = mysqli_fetch_array($result)) {
        print("<tr>
        <td>" . htmlspecialchars($data['studentID']) . "</td>
        <td>" . htmlspecialchars($data['name']) . "</td>
        <td>" . htmlspecialchars($data['phonenum']) . "</td></tr>");
      }
    }
    
    mysqli_close( $database );
    ?>
  </table>
</body>
</html>