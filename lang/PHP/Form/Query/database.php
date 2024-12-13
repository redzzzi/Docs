<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search Results</title>
  <style type="text/css">
    body {
      font-family: sans-serif;
      background-color: lightyellow;
    }
    table {
      background-color: lightblue;
      border-collapse: collapse; // 인접한 셀의 경계선이 하나로 합쳐지도록
      border: 1px solid gray;
    }
    td {
      padding: 5px;
    }
    tr:nth-child(odd) {
      background-color: white;
    }
  </style>
</head>
<body>
  <?php
  $select=$_POST["select"];

  // SELECT 쿼리를 빌드
  $query = "SELECT " . $select . " FROM books";

  // MySQL에 연결
  if (!($database = mysqli_connect("localhost:3307", "root", ""))) {
    die("Could not connect to database</body></html>");
  }

  // open Products database
  if (!mysqli_select_db($database, "products")) {
    die("Could not open products database</body></html>");
  }

  // query Products database
  if (!($result = mysqli_query($database, $query))) {
    print("<p>Could not execute query!</p>");
    die(mysqli_error($database) . "</body></html>");
  }

  mysqli_close($database);
  ?>
  <table>
    <caption>Result of "SELECT <?php print("$select") ?> FROM books"</caption>
    <?php
    while ($row = mysqli_fetch_row($result)) {
      print("<tr>");
      foreach($row as $key => $value) {
        print("<td>$value</td>");
      }
      print("</tr>");
    }
    ?>
  </table>
  <p>Your search yielded
    <?php print(mysqli_num_rows($result)) ?> results.
  </p>
  <p>Please email comments to <a href = "mailto:example@ex.com">example</a></p>
</body>
</html>