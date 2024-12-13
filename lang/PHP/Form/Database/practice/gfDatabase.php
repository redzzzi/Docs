<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SH's Gf Database 😲</title>
  <style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
      font-family: 'Poppins';
      background-color: black;
      color: lime;
    }
    table {
      background-color: #lelele;
      border: 1px solid white;
      border-collapse: collapse;
      width: 80%;
      margin: 20px;
    }
    caption {
      text-align: left;
      margin: 10px;
    }
    th, td {
      padding: 10px;
      text-align: center;
      border: 1px solid #555;
    }
    tr:first-child {
      color: white;
    }
    tr:nth-child(even) {
      color: pink;
    }
    tr:hover {
      background-color: #333; /* 마우스 오버 시 배경 */
    }
  </style>
</head>
<body>
  <?php
  $query = "SELECT * FROM sh_gf";

  if (!($database = mysqli_connect("localhost:3307", "root", "", "practice"))) {
    die("<p>Failed to connect DB: " . mysqli_connect_error() . "</p></body></html>");
  }

  if (!($result = mysqli_query($database, $query))) {
    die("Failed to execute query: " . mysqli_error($database) . "</p></body></html>");
  }
  ?> 

  <h1>SH's Gf candidates</h1>
  <table>
    <caption>Infos stored in database</caption>
    <tr>
      <th>Name</th>
      <th>Age</th>
      <th>Personality</th>
      <th>MBTI</th>
      <th>Phone</th>
      <th>Interest</th>
      <th>Editor</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) {
      print("<tr>");
      foreach ($row as $key => $value) {
        print("<td>$value</td>");
      }
      print("</tr>");
    }
    mysqli_close($database);
    ?>
  </table>
</body>
</html>