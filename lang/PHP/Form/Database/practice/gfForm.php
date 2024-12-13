<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Process to be SH's girlfriend</title>
  <style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    * {
      font-family: 'Poppins'; 
      background-color: black;
      color: hotpink;
    }
    p {
      margin: 0;
    }
    p.head {
      font-weight: bold;
    }
    .error {
      color: lime;
    }
    input {
      margin-top: 5px;
    }
  </style>
</head>
<body>
  <?php 
    // first question
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";
    $personality = isset($_POST["personality"]) ? $_POST["personality"] : "";
    $mbti = isset($_POST["mbti"]) ? $_POST["mbti"] : "";
    $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
    $interest = isset($_POST["interest"]) ? $_POST["interest"] : "";
    $editor = isset($_POST["editor"]) ? $_POST["editor"] : "";

    $iserror = false;
    $formerrors = array(
      "name" => false,
      "age" => false,
      "personality" => false,
      "mbti" => false,
      "phone" => false,
      "interest" => false,
      "editor" => false,
    );

    $interestlist = array(
      "Zero-Knowledge Proofs (ZKP)",
      "zk-SNARKS",
      "DAG (Directed Acyclic Graph)",
      "Smart Contract Security",
      "Quantum-Resistant Cryptography",
      "Homomorphic Encryption",
      "Decentralized Identity (DID)",
      "Decentralized Autonomous Organizations (DAOs)"
    );
    $editorlist = array(
      "Notepad",
      "Vim",
      "LunarVim",
      "Neovim",
      "Emacs",
      "Nano",
      "Obsidian"
    );
    $inputlist = array(
      "name" => "Name",
      "age" => "Age",
      "personality" => "Personality",
      "mbti" => "MBTI",
      "phone" => "Phone number"
    );

    if (isset($_POST["submit"])) {
      if ($name == "") {
        $formerrors["name"] = true;
        $iserror = true;
      }
      if ($age == "") {
        $formerrors["age"] = true;
        $iserror = true;
      }
      if ($personality == "") {
        $formerrors["personality"] = true;
        $iserror = true;
      }
      if (!preg_match("/^[A-Z]{4}$/", $mbti)) {
        $formerrors["mbti"] = true;
        $iserror = true;
      }
      if (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $phone)) {
        $formerrors["phone"] = true;
        $iserror = true;
      }

      if (!$iserror) {
        if (!($database = mysqli_connect("localhost:3307", "root", "", "practice"))) {
          die("<p>Could not connect to DB.");
        }
        // insert query
        $query = "INSERT INTO sh_gf (name, age, personality, mbti, phone, interest, editor) VALUE ('$name', '$age', '$personality', '$mbti', '$phone', '$interest', '$editor')";

        if (!($result = mysqli_query($database, $query))) {
          print("<p>Could not execute query!");
          die(mysqli_error($database));
        }

        mysqli_close($database);

        print( "<p>Hi $name. Thank you for completing the registration.
                You have been added to the list.</p>
                <p class = 'head'>The following information has been 
                saved in our database:</p>
                <p>Name: $name</p>
                <p>Age: $age</p>
                <p>Personality: $personality</p>
                <p>MBTI: $mbti</p>
                <p>Phone: $phone</p>
                <p>Interest: $interest</p>
                <p>Editor you use: $editor</p>
                  <p><a href = 'formSummary.php'>Click here to view 
                      entire database.</a></p></body></html>" );
        die();
      }
    }

    print("<h1>SH's Gf Registration Form</h1>");
    print("<p>Please fill in all fields and click Register.</p>");

    if ($iserror) {
      print("<p class='error'>Fields with * need to be filled properly.</p>");
    }

    print("<form method='post' action='gfDatabase.php'>
      <h2>Gf Candidate's Information</h2>");

    foreach ($inputlist as $inputname => $inputalt) {
      print("<div>
        <label>$inputalt:</label>
        <input type='text' name='$inputname' value='" . htmlspecialchars($$inputname) . "'>");
      if ($formerrors[$inputname]) {
        print("<span class='error'>*</span>");
      }
      print("</div>");
    }

    if ($formerrors["mbti"]) {
      print("<p class='error'>MBTI fields must be in the form ENTP.</p>");
    }

    if ($formerrors["phone"]) {
      print("<p class='error'>Phone fields must be in the form 000-0000-0000.</p>");
    }

    print("<h2>Interest</h2>
      <p>Which domain are you interested in recently?</p>
      <select name='interest'>");
    foreach ($interestlist as $curinterest) {
      print("<option value='$curinterest'" . ($curinterest == $interest ? " selected" : "") . ">$curinterest</option>");
    }
    print("</select>");

    print("<h2>Editor you use</h2>
      <p>Which editor do you use every day?</p>");
    foreach ($editorlist as $cureditor) {
      print("<label>
        <input type='radio' name='editor' value='$cureditor'" . ($cureditor == $editor ? " checked" : "") . ">
        $cureditor
      </label>");
    }

    print("<p class='head'><input type='submit' name='submit' value='Register'></p>
    </form>");
  ?>
</body>
</html>
