<?php

session_start();

$_SESSION["imageNumber"] = 0;
$_SESSION["rights"] = 0;
$_SESSION["letters"] = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
unset($_SESSION['wronglet']);
$_SESSION['wronglet'] = [" ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " ", " "];
$_SESSION['rightlet'] = ["*", "*", "*", "*", "*", "*", "*", "*", "*", "*", "*", "*", "*", "*", "*"];
unset($_SESSION["randomwoorden"]);
unset($_SESSION["gekozenwoorden"]);
unset($_SESSION["chosen"]);
unset($_POST['gekozenwoord']);
$_SESSION['chosenLetters'] =  [];
$_SESSION['GEKOZENyes'] = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Start Hangman!</title>
  <link rel="stylesheet" href="stylebegin.css">
</head>

<body>
  <audio controls autoplay>
    <source src="welcome.mp3" type="audio/ogg">
  </audio>
  <div id="main">
    <h1 id="h1">Hangman</h1>
    <h2>Wil je een random of een gekozen woord?</h2>
    <a href="random.php"><button>random</button></a>
    <a href="gekozen.php"><button>gekozen</button></a>
  </div>


</body>

</html>