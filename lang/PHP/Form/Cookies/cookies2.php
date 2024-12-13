<?php
define("TWO_DAYS", 60*60*24*2);
setcookie("Name", $_POST["name"], time() + TWO_DAYS);
setcookie("Personality", $_POST["personality"], time() + TWO_DAYS);
setcookie("University", $_POST["university"], time() + TWO_DAYS);

$name = $_POST["name"];
$personality = $_POST["personality"];
$university = $_POST["university"];

print("<h1>Here is $name's information.</h1>");
print("<p>He is so $personality. And he is a student in $university.</p>");
print("<p>If you want to know more about him, <a href='readCookies2.php'>Click here.</a></p>");
?>